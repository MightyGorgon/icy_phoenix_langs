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
* MX-System - (jonohlsson@hotmail.com) - (www.mx-system.com)
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
	'KB_title' => 'Biblioteca (KB)',
	'Article' => 'Artículo',
	'Category' => 'Categoría',
	'Article_description' => 'Descripción',
	'Article_type' => 'Tipo',
	'Article_keywords' => 'Palabras clave',
	'Articles' => 'Artículos',
	'Add_article' => 'Añadir artículo',
	'Click_cat_to_add' => 'Pulse en una categoría para añadir un artículo',
	'KB_Home' => 'Inicio biblioteca',
	'No_articles' => 'Ningún artículo',
	'Article_title' => 'Nombre del artículo',
	'Article_text' => 'Texto del artículo',
	'Add_article' => 'Crear artículo',
	'Read_article' => 'Leer artículo',
	'Article_not_exsist' => 'El artículo no existe',
	'Category_not_exsist' => 'La categoría no existe',

	'Edit' => 'Editar',

	'Article_submitted_Approve' => 'Artículo enviado correctamente.<br />Un administrador repasará su artículo y decidirá si permite o no su publicación.',
	'Article_submitted' => 'Artículo creado correctamente.',
	'Click_return_kb' => 'Pulse %saquí%s para volver a la biblioteca',
	'Click_return_article' => 'Pulse %saquí%s para volver al artículo',

	'Article_Edited_Approve' => 'Artículo editado correctamente.<br />Necesita ser aprobado otra vez antes de que el usuario pueda visualizarlo.',
	'Article_Edited' => 'Artículo editado correctamente.',
	'Edit_article' => 'Editar artículo',

	'KB_title' => 'Base de información',
	'KB_art_description' => 'Aquí puede aprobar o borrar artículos para que los usuarios pueden verlos o no.',
	'Art_man' => 'Gestor de artículos',
	'Cat_man' => 'Gestor de categorías',
	'KB_cat_description' => 'Aquí puede agregar, editar o borrar categorías en la base de información',
	'Art_action' => 'Acción',

//approve
	'Art_edit' => 'Editar artículos',
	'Art_not_approved' => 'No aprobados',
	'Art_approved' => 'Aprobados',
	'Approve' => 'Aprobado',
	'Un_approve' => 'Desaprobar',
	'Article_approved' => 'Aprobar ahora el artículo.',
	'Article_unapproved' => 'No aprobar ahora el artículo.',

//delete
	'Delete' => 'Borrar',
	'Confirm_art_delete' => '&iquest;Está seguro de que quiere borrar este artículo?',
	'Confirm_art_delete_yes' => '%sSí, quiero borrar este artículo%s', 
	'Confirm_art_delete_no' => '%sNo, no quiero borrar este artículo%s',
	'Article_deleted' => 'Artículo borrado correctamente.',

	'Click_return_article_manager' => 'Pulsar %saquí%s para volver a la configuración de artículos',

//cat manager
	'Create_cat' => 'Crear nueva categoría:',
	'Create' => 'Crear',
	'Cat_settings' => 'Propiedades de categoría',
	'Create_description' => 'Aquí puede cambiar el nombre de la categoría y agregar una descripción a la categoría nueva.',
	'Cat_created' => 'Categoría creada correctamente.',
	'Click_return_cat_manager' => 'Pulse %saquí%s para volver a la administración de categorías',
	'Edit_description' => 'Aquí puede revisar las propiedades de su categoría',
	'Edit_cat' => 'Editar categoría',
	'Cat_edited' => 'Categoría editada correctamente.',
	'Parent' => 'Padre',

	'Cat_delete_title' => 'Borrar categoría',
	'Cat_delete_desc' => 'Aquí puede borrar una categoría y mover todos los artículos que hay en ella a una categoría nueva',
	'Cat_deleted' => 'Categoría borrada correctamente.',
	'Delete_all_articles' => 'Borrar artículos',

//configuration
	'KB_config' => 'Configuración de la biblioteca',
	'Art_types' => 'Tipos de artículos',
	'KB_config_title' => 'Configuración de la biblioteca',
	'KB_config_explain' => 'Cambiar la configuración de su biblioteca',
	'New_title' => 'Permitir nuevos artículos',
	'New_explain' => 'Permitir que los usuarios pongan artículos nuevos en su biblioteca',
	'Edit_name' => 'Permitir editarlos',
	'Edit_explain' => 'Permitir que los usuarios editen sus artículos después de crearlos',
	'Notify_name' => 'Notificarme nuevos artículos',
	'Notify_explain' => 'Elija de qué manera desea recibir avisos si hay artículos nuevos',
	'PM' => 'MP',
	'Click_return_kb_config' => 'Pulse %saquí%s para volver a la configuración de la biblioteca',
	'Admin_id_name' => 'Administrador ID',
	'Admin_id_explain' => 'Este es el nº ID del usuario al que las notificaciones por MP o correo serán enviadas',
	'Approve_new_name' => 'Permitir nuevos artículos',
	'Approve_new_explain' => 'Cambiar cuando los <b />nuevos</b /> artículos necesitan ser aprobados o no',
	'Approve_edit_name' => 'Permitir editar artículos',
	'Approve_edit_explain' => 'Cambiar cuando los artículos <b />editados</b /> deben ser aprobados o no',
	'Allow_anon_name' => 'Permitir que usuarios anónimos dejen artículos', 
	'Allow_anon_explain' => 'Cambie si quiere que usuarios anónimos creen artículos <b />Nuevos</b />', 
	'Del_topic' => 'Borrar tema',
	'Del_topic_explain' => 'Cuando borre un artículo, &iquest;quiere que se borren también los comentarios del tema?',

	'Use_comments' => 'Comentarios',
	'Use_comments_explain' => 'Permitir comentarios en artículos. Serán insertados en el foro phpBB.',
	'Use_ratings' => 'Valoración',
	'Use_ratings_explain' => 'Permitir votos en artículos',

	'Forum_id' => 'ID del foro',
	'Forum_id_explain' => 'Este es el foro en el que los comentarios de artículo serán guardados',


// Permissions
	'KB_Auth_Title' => 'Permisos biblioteca',
	'KB_Auth_Explain' => 'Aquí puede elegir qué grupo de usuarios pueden ser los moderadores para cada categoría de la biblioteca, o si tiene acceso privado',
	'Select_a_Category' => 'Seleccionar la categoría',
	'Look_up_Category' => 'Ver categoría',
	'KB_Auth_successfully' => 'Permisos actualizados correctamente',
	'Click_return_KB_auth' => 'Pulsar %saquí%s para volver a permisos de biblioteca',

	'Upload' => 'Enviar',
	'Rate' => 'Voto',
	'Comment' => 'Comentario',
	'Approval' => 'Aprobar',
	'Approval_edit' => 'Aprobar editar',

	'Allow_rating' => 'Permitir votaciones',
	'Allow_rating_explain' => 'Permitir a usuarios votar artículos.',

	'Allow_anonymos_rating' => 'Permitir votar a anónimos',
	'Allow_anonymos_rating_explain' => 'Si las valoraciones o votos están activados, permite a los usuarios invitados añadir valoraciones a sus artículos',

	'KB_config_updated' => 'Biblioteca actualizada con éxito.',

	'KB_notify_subject_new' => '¿Nuevo artículo!',
	'KB_notify_subject_edited' => '¿Editar artículo!',
	'KB_notify_subject_approved' => '¿Aprobar artículo!',
	'KB_notify_subject_unapproved' => '¿Desaprobar artículo!',
	'KB_notify_body' => 'El nuevo artículo se ha enviado o editado correctamente:

',

	'Category_Permissions' => 'Permisos de categoría',
	'Category_Title' => 'Título de la categoría',
	'Category_Desc' => 'Descripción de la categoría',
	'View_level' => 'Ver nivel',
	'Upload_level' => 'Subir nivel',
	'Rate_level' => 'Nivel de valoración',
	'Comment_level' => 'Nivel de comentario',
	'Edit_level' => 'Editar nivel',
	'Delete_level' => 'Borrar nivel',
	'Approval_level' => 'Aprobar nivel',
	'Approval_edit_level' => 'Aprobar editar nivel',

/*
	'KB_Rules_post_can' => '<b>Puede</b> poner nuevos artículos en esta categoría',
	'KB_Rules_post_cannot' => '<b>No puede</b> poner nuevos artículos en esta categoría',
	'KB_Rules_comment_can' => '<b>Puede</b> poner comentarios en artículos en esta categoría',
	'KB_Rules_comment_cannot' => '<b>No puede</b> poner comentarios en artículos en esta categoría',
	'KB_Rules_edit_can' => '<b>Puede</b> editar artículos en esta categoría',
	'KB_Rules_edit_cannot' => '<b>No puede</b> editar artículos en esta categoría',
	'KB_Rules_delete_can' => '<b>Puede</b> borrar artículos en esta categoría',
	'KB_Rules_delete_cannot' => '<b>No puede</b> borrar artículos en esta categoría',
	'KB_Rules_rate_can' => '<b>Puede</b> valorar artículos en esta categoría',
	'KB_Rules_rate_cannot' => '<b>No puede</b> valorar artículos en esta categoría',
	'KB_Rules_approval_can' => 'Los artículos <b>no necesitan ninguna aprobación</b> en esta categoría',
	'KB_Rules_approval_cannot' => 'Los artículos <b>necesitan</b> aprobación en esta categoría',
	'KB_Rules_approval_edit_can' => 'Las revisiones de artículo <b>no necesitan ninguna aprobación</b> en esta categoría',
	'KB_Rules_approval_edit_cannot' => 'Las revisiones de artículo <b>necesitan aprobación</b> en esta categoría',
*/
	'KB_Rules_post_can' => '<b>Puede</b> publicar nuevos artículos',
	'KB_Rules_post_cannot' => '<b>No puede</b> publicar nuevos artículos',
	'KB_Rules_comment_can' => '<b>Puede</b> comentar artículos',
	'KB_Rules_comment_cannot' => '<b>No puede</b> comentar artículos',
	'KB_Rules_edit_can' => '<b>Puede</b> editar sus artículos',
	'KB_Rules_edit_cannot' => '<b>No puede</b> editar sus artículos',
	'KB_Rules_delete_can' => '<b>Puede</b> eliminar sus artículos',
	'KB_Rules_delete_cannot' => '<b>No puede</b> eliminar sus artículos',
	'KB_Rules_rate_can' => '<b>Puede</b> cualificar artículos',
	'KB_Rules_rate_cannot' => '<b>No puede</b> cualificar artículos',
	'KB_Rules_approval_can' => 'Artículos <b>no necesitan</b> aprobación',
	'KB_Rules_approval_cannot' => 'Artículos <b>necesitan</b> aprobación',
	'KB_Rules_approval_edit_can' => 'Artículo editado <b>no necesita</b> aprobación',
	'KB_Rules_approval_edit_cannot' => 'Artículo editado <b>necesita</b> aprobación',
	'KB_Rules_moderate' => '<b>Puede</b> %smoderar esta categoría%s', // %s replaced by a href links, do not remove!
	'KB_Rules_moderate_can' => '<b>Puede</b> Moderar esta categoría', // %s replaced by a href links, do not remove!

	'Comments_show' => 'Visualizar comentarios del artículo.',
	'Comments_show_explain' => '- también muestra comentarios en la página de artículo',
	'Comments_show_title' => 'Usuarios pueden comentar',

	'Mod_group' => 'Grupo moderador de biblioteca',
	'Mod_group_explain' => '- ¿con permisos del administrador de biblioteca!',

	'Bump_post' => 'Anunciar mensaje en artículo', 
	'Bump_post_explain' => 'Cuando se edite un artículo, poner una nota en la notificación de asunto del artículo puesto al día.', 

	'Stats_list' => 'Ver estadísticas de biblioteca', 
	'Stats_list_explain' => 'Ver estadísticas en cabecera de KB.', 

	'Header_banner' => 'Ver logo arriba', 
	'Header_banner_explain' => 'Ver logo de biblioteca en cabecera.', 

	'Comment_info' => 'Configuración de comentarios', 
	'Rating_info' => 'Configuración de valoraciones',


//types
	'Types_man' => 'Gestor de tipos',
	'KB_types_description' => 'Aquí puede agregar, borrar y editar diferentes tipos de artículo',
	'Create_type' => 'Crear nuevo tipo de artículo:',
	'Type_created' => 'Tipo de artículo creado correctamente.',
	'Click_return_type_manager' => 'Pulse %saquí%s para volver a propiedades de tipos',

	'Edit_type' => 'Editar tipo',
	'Edit_type_description' => 'Aquí puede editar el nombre de tipo',
	'Type_edited' => 'Tipo de artículo editado correctamente.',

	'Type_delete_title' => 'Borrar tipo de artículo',
	'Type_delete_desc' => 'Aquí puede cambiar a otro tipo los artículos que tienen este tipo que está borrando.',
	'Change_type' => 'Cambiar artículos a tipo:',
	'Change_and_Delete' => 'Cambiar y borrar',
	'Type_deleted' => 'Tipo de articulo borrado correctamente.',

	'Pre_text_name' => 'Instrucciones para el envío de artículos',
	'Pre_text_header' => 'Cabecera del mensaje',
	'Pre_text_body' => 'Cuerpo del mensaje',
	'Pre_text_explain' => 'Estas son las instrucciones mostradas al usuario',

	'Show' => 'Ver',
	'Hide' => 'Ocultar',

	'Empty_fields' =>'Por favor, llene todas las casillas del formulario.',
	'Empty_fields_return' =>'Pulsar %saquí%s para volver al formulario.',
	'Empty_category' =>'Ha elegido una categoría vacía',
	'Empty_type' => 'Debe elegir un tipo',
	'Empty_article_name' => 'Debe introducir el nombre del artículo',
	'Empty_article_desc' => 'Debe introducir la descripción del artículo',

	'Read_full_article' => '» Leer todo el artículo',
	'Comments' => 'Ver comentarios',

	'No_add' => 'Puede agregar un nuevo artículo',
	'No_edit' => '¿Puede editar este artículo!',
	'Post_comments' => 'Ponga sus comentarios',

	'Category_sub' => 'Sub categorías',
	'Quick_stats' => 'Estadísticas',

// added

	'Edited_Article_info' => 'Artículo actualizado...',
	'No_Articles' => '¿Esta categoría está vacía!',
	'Not_authorized' => 'Usted no tiene autorización...',
	'TOC' => 'Contenidos',

// Rate
	'Votes_label' => 'Valoración ',
	'Votes' => 'Votos',
	'No_votes' => 'Votos no',
	'Rate' => 'Valoración de artículo',
	'ADD_RATING' => '[Valoración de artículo]',
	'Rerror' => 'Lo siento, ya ha valorado este artículo.',
	'Rateinfo' => 'Va a votar por un artículo <i>{filename}</i>.<br />Por favor, seleccione una valoración. 1 es la peor, 10 es la mejor.',
	'Rconf' => 'Ha proporcionado al artículo <i>{filename}</i> una puntuación de {rate}.<br />Esto ha proporcionado una nueva valoración: {newrating}/10.',
	'R1' => '1',
	'R2' => '2',
	'R3' => '3',
	'R4' => '4',
	'R5' => '5',
	'R6' => '6',
	'R7' => '7',
	'R8' => '8',
	'R9' => '9',
	'R10' => '10',
	'Click_return_rate' => 'Pulse %saquí%s para volver al artículo',

// Print version
	'Print_version' => '[Versión imprimible]',

// Stats
	'Top_toprated' => 'Artículos más votados',
	'Top_most_popular' => 'Más popular',
	'Top_latest' => 'últimos artículos',

// Votes check
	'Votes_check_ip' => 'Validar votación - IP', 
	'Votes_check_ip_explain' => 'Se permite un solo voto por dirección IP.',

	'Votes_check_userid' => 'Validar valoraciones - usuario',
	'Votes_check_userid_explain' => 'Los usuarios sólo pueden votar una vez.',

	'Article_pag' => 'Paginación de artículos',
	'Article_pag_explain' => 'El número de artículos para mostrar en una página antes de páginar.',

	'Comments_pag' => 'Paginación de comentarios', 
	'Comments_pag_explain' => 'El número de comentarios para mostrar en el artículo antes de paginación.',

	'News_sort' => 'Método de la clase de artículo', 
	'News_sort_explain' => 'Defina cómo los artículos son clasificados dentro de su categoría.',

	'News_sort_par' => 'Orden ASC o DESC',
	'News_sort_par_explain' => '',

// General strings from the news admin panel

	'News_settings' => 'Configuración de bloque biblioteca',
	'News_settings_short_explain' => 'Configure algunas opciones para las noticias extraordinarias.',
	'News_settings_explain' => 'Aquí puede corregir la configuración para el bloque de biblioteca. Este panel le deja extraer qué categorías mostrará el bloque, así puede crear las opciones del módulo.',

// Update result messages

	'News_updated_return_settings' => 'Configuración de bloque biblioteca actualizada correctamente.<br /><br />Pulse %saquí%s para volver a la página principal.', // %s's for URI params - DO NOT REMOVE
	'News_update_error' => 'No se puede actualizar la configuración del bloque.<br /><br />Este MOD está diseñado para MySQL. Por favor, póngase en contacto con el autor si tiene problemas. Si puede ofrecer una traducción del SQL u otros formatos de base de datos, por favor, envíelos:<br />',

// Custom Field
	'Fieldselecttitle' => 'Seleccione qué hacer',
	'Afield' => 'Campo personalizable: Añadir',
	'Efield' => 'Campo personalizable: Editar',
	'Dfield' => 'Campo personalizable: Borrar',
	'Mfieldtitle' => 'Campos personalizables',
	'Afieldtitle' => 'Añadir campo',
	'Efieldtitle' => 'Editar campo',
	'Dfieldtitle' => 'Borrar campo',
	'Fieldexplain' => 'Puede usar la sección de dirección de campos de encargo para añadir, corregir, y suprimir campos personalizados. Puede usar campos personalizados para añadir más información sobre un artículo.',
	'Fieldname' => 'Nombre del campo',
	'Fieldnameinfo' => 'Ejemplo de nombre de campo \'Tamaño de archivo\'',
	'Fielddesc' => 'Descripción del campo',
	'Fielddescinfo' => 'Ejemplo de descripción de campo \'Tamaño de archivo  Megabytes\'',
	'Fieldadded' => 'El campo ha sido añadido correctamente',
	'Fieldedited' => 'El campo personalizado que creó ha sido corregido correctamente.',
	'Dfielderror' => 'Debe seleccionar un campo para suprimir',
	'Fieldsdel' => 'El campo seleccionado ha sido borrado correctamente.',

	'Field_data' => 'Opciones',
	'Field_data_info' => 'Entre en las opciones que el usuario puede escoger. Separe cada opción con una línea nueva de retorno de carro (la tecla de return o intro).',
	'Field_regex' => 'Expresión regular',
	'Field_regex_info' => 'Puede requerir para entrar el campo a emparejar con una expresión regular %s(PCRE)%s.',
	'Field_order' => 'Visualizar orden',

//Fields Types

	'Field_Input' => 'Solo-Línea en caja de texto',
	'Field_Textarea' => 'Múltiple línea en caja de texto',
	'Field_Radio' => 'Selección sencilla botones de radio',
	'Field_Select' => 'Menú de selección sencilla',
	'Field_Select_multiple' => 'Menú de selección múltiple',
	'Field_Checkbox' => 'Selección múltiple checkbox',

	'Click_return' => 'Pulse %saquí%s para volver a la página anterior',

// added
	'Cat_all' => 'Todo',

	'L_Pages' => 'Páginas', 
	'L_Pages_explain' => 'Usar etiquetas [pages] para dividir el artículo en páginas.', 
	'L_Toc' => 'Tabla de contenidos (TOC)', 
	'L_Toc_explain' => 'Usar etiquetas [toc] para añadir entrada en el TOC.', 
	'L_Abstract' => 'Abstracto', 
	'L_Abstract_explain' => 'Usar etiquetas [abstract]...[/abstract] para insertar un abstracto.', 

	'L_Title_Format' => 'Título', 
	'L_Title_Format_explain' => 'Usar etiquetas [title]...[/title] para insertar un título principal.', 

	'L_Subtitle_Format' => 'Subtítulo', 
	'L_Subtitle_Format_explain' => 'Usar etiquetas [subtitle]...[/subtitle] para insertar un subtítulo.', 

	'L_Subsubtitle_Format' => 'Subsubtítulo', 
	'L_Subsubtitle_Format' => 'Usar etiquetas [subsubtitle]...[/subsubtitle] para insertar un título pequeño.', 

	'L_Options' => 'Opciones:', 
	'L_Formatting' => 'Formato:', 

	'Default_article_id' => 'Artículo fijo estándar, para el que vea el artículo',

// Added for v. 2.0
	'KB_comment_prefix' => '[Biblioteca] ',

	'Wysiwyg' => 'Usar editor WysiWyg',
	'Wysiwyg_explain' => 'De permitirse el estándar bbcode/html/smilies del diálogo de entrada para ser substituido por un editor Wysiwyg.',

	'Wysiwyg_path' => 'Ruta del software Wysiwyg',
	'Wysiwyg_path_explain' => 'Esto es la ruta (de la raíz de mxBB) a la carpeta de software wysiwyg, p.e. \'modules/\' si usted tiene subido tinemce en modules/tinymce.',

	'Formatting_fixup' => 'Formatear fixup',
	'Formatting_fixup_explain' => 'Permitir que el texto de artículo sea reformateado: wordwrapping, url truncadas, redimensionar img, algún bbcode que reformatear, etc.',

	'Addtional_field' => 'Más información (opcional)',

	'No_cat_comments_forum_id' => 'Los comentarios están permitidos, pero no ha especificado la categoría de foro de phpBB que será mostrada en el ACP - Categorías',

// Quick Nav
	'Quick_nav' => 'Navegación biblioteca',
	'Quick_jump' => 'Ir',

	'Categories' => 'Categorías',
	'Subcategory' => 'SubCategoría',
	)
);

?>