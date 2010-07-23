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
	'Article' => 'Art&iacute;culo',
	'Category' => 'Categor&iacute;a',
	'Article_description' => 'Descripci&oacute;n',
	'Article_type' => 'Tipo',
	'Article_keywords' => 'Palabras clave',
	'Articles' => 'Art&iacute;culos',
	'Add_article' => 'A&ntilde;adir art&iacute;culo',
	'Click_cat_to_add' => 'Pulse en una categor&iacute;a para a&ntilde;adir un art&iacute;culo',
	'KB_Home' => 'Inicio biblioteca',
	'No_articles' => 'Ning&uacute;n art&iacute;culo',
	'Article_title' => 'Nombre del art&iacute;culo',
	'Article_text' => 'Texto del art&iacute;culo',
	'Add_article' => 'Crear art&iacute;culo',
	'Read_article' => 'Leer art&iacute;culo',
	'Article_not_exsist' => 'El art&iacute;culo no existe',
	'Category_not_exsist' => 'La categor&iacute;a no existe',

	'Edit' => 'Editar',

	'Article_submitted_Approve' => 'Art&iacute;culo enviado correctamente.<br />Un administrador repasar&aacute; su art&iacute;culo y decidir&aacute; si permite o no su publicaci&oacute;n.',
	'Article_submitted' => 'Art&iacute;culo creado correctamente.',
	'Click_return_kb' => 'Pulse %saqu&iacute;%s para volver a la biblioteca',
	'Click_return_article' => 'Pulse %saqu&iacute;%s para volver al art&iacute;culo',

	'Article_Edited_Approve' => 'Art&iacute;culo editado correctamente.<br />Necesita ser aprobado otra vez antes de que el usuario pueda visualizarlo.',
	'Article_Edited' => 'Art&iacute;culo editado correctamente.',
	'Edit_article' => 'Editar art&iacute;culo',

	'KB_title' => 'Base de informaci&oacute;n',
	'KB_art_description' => 'Aqu&iacute; puede aprobar o borrar art&iacute;culos para que los usuarios pueden verlos o no.',
	'Art_man' => 'Gestor de art&iacute;culos',
	'Cat_man' => 'Gestor de categor&iacute;as',
	'KB_cat_description' => 'Aqu&iacute; puede agregar, editar o borrar categor&iacute;as en la base de informaci&oacute;n',
	'Art_action' => 'Acci&oacute;n',

//approve
	'Art_edit' => 'Editar art&iacute;culos',
	'Art_not_approved' => 'No aprobados',
	'Art_approved' => 'Aprobados',
	'Approve' => 'Aprobado',
	'Un_approve' => 'Desaprobar',
	'Article_approved' => 'Aprobar ahora el art&iacute;culo.',
	'Article_unapproved' => 'No aprobar ahora el art&iacute;culo.',

//delete
	'Delete' => 'Borrar',
	'Confirm_art_delete' => '&iquest;Est&aacute; seguro de que quiere borrar este art&iacute;culo?',
	'Confirm_art_delete_yes' => '%sS&iacute;, quiero borrar este art&iacute;culo%s', 
	'Confirm_art_delete_no' => '%sNo, no quiero borrar este art&iacute;culo%s',
	'Article_deleted' => 'Art&iacute;culo borrado correctamente.',

	'Click_return_article_manager' => 'Pulsar %saqu&iacute;%s para volver a la configuraci&oacute;n de art&iacute;culos',

//cat manager
	'Create_cat' => 'Crear nueva categor&iacute;a:',
	'Create' => 'Crear',
	'Cat_settings' => 'Propiedades de categor&iacute;a',
	'Create_description' => 'Aqu&iacute; puede cambiar el nombre de la categor&iacute;a y agregar una descripci&oacute;n a la categor&iacute;a nueva.',
	'Cat_created' => 'Categor&iacute;a creada correctamente.',
	'Click_return_cat_manager' => 'Pulse %saqu&iacute;%s para volver a la administraci&oacute;n de categor&iacute;as',
	'Edit_description' => 'Aqu&iacute; puede revisar las propiedades de su categor&iacute;a',
	'Edit_cat' => 'Editar categor&iacute;a',
	'Cat_edited' => 'Categor&iacute;a editada correctamente.',
	'Parent' => 'Padre',

	'Cat_delete_title' => 'Borrar categor&iacute;a',
	'Cat_delete_desc' => 'Aqu&iacute; puede borrar una categor&iacute;a y mover todos los art&iacute;culos que hay en ella a una categor&iacute;a nueva',
	'Cat_deleted' => 'Categor&iacute;a borrada correctamente.',
	'Delete_all_articles' => 'Borrar art&iacute;culos',

//configuration
	'KB_config' => 'Configuraci&oacute;n de la biblioteca',
	'Art_types' => 'Tipos de art&iacute;culos',
	'KB_config_title' => 'Configuraci&oacute;n de la biblioteca',
	'KB_config_explain' => 'Cambiar la configuraci&oacute;n de su biblioteca',
	'New_title' => 'Permitir nuevos art&iacute;culos',
	'New_explain' => 'Permitir que los usuarios pongan art&iacute;culos nuevos en su biblioteca',
	'Edit_name' => 'Permitir editarlos',
	'Edit_explain' => 'Permitir que los usuarios editen sus art&iacute;culos despu&eacute;s de crearlos',
	'Notify_name' => 'Notificarme nuevos art&iacute;culos',
	'Notify_explain' => 'Elija de qu&eacute; manera desea recibir avisos si hay art&iacute;culos nuevos',
	'PM' => 'MP',
	'Click_return_kb_config' => 'Pulse %saqu&iacute;%s para volver a la configuraci&oacute;n de la biblioteca',
	'Admin_id_name' => 'Administrador ID',
	'Admin_id_explain' => 'Este es el nº ID del usuario al que las notificaciones por MP o correo ser&aacute;n enviadas',
	'Approve_new_name' => 'Permitir nuevos art&iacute;culos',
	'Approve_new_explain' => 'Cambiar cuando los <b />nuevos</b /> art&iacute;culos necesitan ser aprobados o no',
	'Approve_edit_name' => 'Permitir editar art&iacute;culos',
	'Approve_edit_explain' => 'Cambiar cuando los art&iacute;culos <b />editados</b /> deben ser aprobados o no',
	'Allow_anon_name' => 'Permitir que usuarios an&oacute;nimos dejen art&iacute;culos', 
	'Allow_anon_explain' => 'Cambie si quiere que usuarios an&oacute;nimos creen art&iacute;culos <b />Nuevos</b />', 
	'Del_topic' => 'Borrar tema',
	'Del_topic_explain' => 'Cuando borre un art&iacute;culo, &iquest;quiere que se borren tambi&eacute;n los comentarios del tema?',

	'Use_comments' => 'Comentarios',
	'Use_comments_explain' => 'Permitir comentarios en art&iacute;culos. Ser&aacute;n insertados en el foro phpBB.',
	'Use_ratings' => 'Valoraci&oacute;n',
	'Use_ratings_explain' => 'Permitir votos en art&iacute;culos',

	'Forum_id' => 'ID del foro',
	'Forum_id_explain' => 'Este es el foro en el que los comentarios de art&iacute;culo ser&aacute;n guardados',


// Permissions
	'KB_Auth_Title' => 'Permisos biblioteca',
	'KB_Auth_Explain' => 'Aqu&iacute; puede elegir qu&eacute; grupo de usuarios pueden ser los moderadores para cada categor&iacute;a de la biblioteca, o si tiene acceso privado',
	'Select_a_Category' => 'Seleccionar la categor&iacute;a',
	'Look_up_Category' => 'Ver categor&iacute;a',
	'KB_Auth_successfully' => 'Permisos actualizados correctamente',
	'Click_return_KB_auth' => 'Pulsar %saqu&iacute;%s para volver a permisos de biblioteca',

	'Upload' => 'Enviar',
	'Rate' => 'Voto',
	'Comment' => 'Comentario',
	'Approval' => 'Aprobar',
	'Approval_edit' => 'Aprobar editar',

	'Allow_rating' => 'Permitir votaciones',
	'Allow_rating_explain' => 'Permitir a usuarios votar art&iacute;culos.',

	'Allow_anonymos_rating' => 'Permitir votar a an&oacute;nimos',
	'Allow_anonymos_rating_explain' => 'Si las valoraciones o votos est&aacute;n activados, permite a los usuarios invitados a&ntilde;adir valoraciones a sus art&iacute;culos',

	'KB_config_updated' => 'Biblioteca actualizada con &eacute;xito.',

	'KB_notify_subject_new' => '&iexcl;Nuevo art&iacute;culo!',
	'KB_notify_subject_edited' => '&iexcl;Editar art&iacute;culo!',
	'KB_notify_subject_approved' => '&iexcl;Aprobar art&iacute;culo!',
	'KB_notify_subject_unapproved' => '&iexcl;Desaprobar art&iacute;culo!',
	'KB_notify_body' => 'El nuevo art&iacute;culo se ha enviado o editado correctamente:

',

	'Category_Permissions' => 'Permisos de categor&iacute;a',
	'Category_Title' => 'T&iacute;tulo de la categor&iacute;a',
	'Category_Desc' => 'Descripci&oacute;n de la categor&iacute;a',
	'View_level' => 'Ver nivel',
	'Upload_level' => 'Subir nivel',
	'Rate_level' => 'Nivel de valoraci&oacute;n',
	'Comment_level' => 'Nivel de comentario',
	'Edit_level' => 'Editar nivel',
	'Delete_level' => 'Borrar nivel',
	'Approval_level' => 'Aprobar nivel',
	'Approval_edit_level' => 'Aprobar editar nivel',

/*
	'KB_Rules_post_can' => '<b>Puede</b> poner nuevos art&iacute;culos en esta categor&iacute;a',
	'KB_Rules_post_cannot' => '<b>No puede</b> poner nuevos art&iacute;culos en esta categor&iacute;a',
	'KB_Rules_comment_can' => '<b>Puede</b> poner comentarios en art&iacute;culos en esta categor&iacute;a',
	'KB_Rules_comment_cannot' => '<b>No puede</b> poner comentarios en art&iacute;culos en esta categor&iacute;a',
	'KB_Rules_edit_can' => '<b>Puede</b> editar art&iacute;culos en esta categor&iacute;a',
	'KB_Rules_edit_cannot' => '<b>No puede</b> editar art&iacute;culos en esta categor&iacute;a',
	'KB_Rules_delete_can' => '<b>Puede</b> borrar art&iacute;culos en esta categor&iacute;a',
	'KB_Rules_delete_cannot' => '<b>No puede</b> borrar art&iacute;culos en esta categor&iacute;a',
	'KB_Rules_rate_can' => '<b>Puede</b> valorar art&iacute;culos en esta categor&iacute;a',
	'KB_Rules_rate_cannot' => '<b>No puede</b> valorar art&iacute;culos en esta categor&iacute;a',
	'KB_Rules_approval_can' => 'Los art&iacute;culos <b>no necesitan ninguna aprobaci&oacute;n</b> en esta categor&iacute;a',
	'KB_Rules_approval_cannot' => 'Los art&iacute;culos <b>necesitan</b> aprobaci&oacute;n en esta categor&iacute;a',
	'KB_Rules_approval_edit_can' => 'Las revisiones de art&iacute;culo <b>no necesitan ninguna aprobaci&oacute;n</b> en esta categor&iacute;a',
	'KB_Rules_approval_edit_cannot' => 'Las revisiones de art&iacute;culo <b>necesitan aprobaci&oacute;n</b> en esta categor&iacute;a',
*/
	'KB_Rules_post_can' => '<b>Puede</b> publicar nuevos art&iacute;culos',
	'KB_Rules_post_cannot' => '<b>No puede</b> publicar nuevos art&iacute;culos',
	'KB_Rules_comment_can' => '<b>Puede</b> comentar art&iacute;culos',
	'KB_Rules_comment_cannot' => '<b>No puede</b> comentar art&iacute;culos',
	'KB_Rules_edit_can' => '<b>Puede</b> editar sus art&iacute;culos',
	'KB_Rules_edit_cannot' => '<b>No puede</b> editar sus art&iacute;culos',
	'KB_Rules_delete_can' => '<b>Puede</b> eliminar sus art&iacute;culos',
	'KB_Rules_delete_cannot' => '<b>No puede</b> eliminar sus art&iacute;culos',
	'KB_Rules_rate_can' => '<b>Puede</b> cualificar art&iacute;culos',
	'KB_Rules_rate_cannot' => '<b>No puede</b> cualificar art&iacute;culos',
	'KB_Rules_approval_can' => 'Art&iacute;culos <b>no necesitan</b> aprobaci&oacute;n',
	'KB_Rules_approval_cannot' => 'Art&iacute;culos <b>necesitan</b> aprobaci&oacute;n',
	'KB_Rules_approval_edit_can' => 'Art&iacute;culo editado <b>no necesita</b> aprobaci&oacute;n',
	'KB_Rules_approval_edit_cannot' => 'Art&iacute;culo editado <b>necesita</b> aprobaci&oacute;n',
	'KB_Rules_moderate' => '<b>Puede</b> %smoderar esta categor&iacute;a%s', // %s replaced by a href links, do not remove!
	'KB_Rules_moderate_can' => '<b>Puede</b> Moderar esta categor&iacute;a', // %s replaced by a href links, do not remove!

	'Comments_show' => 'Visualizar comentarios del art&iacute;culo.',
	'Comments_show_explain' => '- tambi&eacute;n muestra comentarios en la p&aacute;gina de art&iacute;culo',
	'Comments_show_title' => 'Usuarios pueden comentar',

	'Mod_group' => 'Grupo moderador de biblioteca',
	'Mod_group_explain' => '- &iexcl;con permisos del administrador de biblioteca!',

	'Bump_post' => 'Anunciar mensaje en art&iacute;culo', 
	'Bump_post_explain' => 'Cuando se edite un art&iacute;culo, poner una nota en la notificaci&oacute;n de asunto del art&iacute;culo puesto al d&iacute;a.', 

	'Stats_list' => 'Ver estad&iacute;sticas de biblioteca', 
	'Stats_list_explain' => 'Ver estad&iacute;sticas en cabecera de KB.', 

	'Header_banner' => 'Ver logo arriba', 
	'Header_banner_explain' => 'Ver logo de biblioteca en cabecera.', 

	'Comment_info' => 'Configuraci&oacute;n de comentarios', 
	'Rating_info' => 'Configuraci&oacute;n de valoraciones',


//types
	'Types_man' => 'Gestor de tipos',
	'KB_types_description' => 'Aqu&iacute; puede agregar, borrar y editar diferentes tipos de art&iacute;culo',
	'Create_type' => 'Crear nuevo tipo de art&iacute;culo:',
	'Type_created' => 'Tipo de art&iacute;culo creado correctamente.',
	'Click_return_type_manager' => 'Pulse %saqu&iacute;%s para volver a propiedades de tipos',

	'Edit_type' => 'Editar tipo',
	'Edit_type_description' => 'Aqu&iacute; puede editar el nombre de tipo',
	'Type_edited' => 'Tipo de art&iacute;culo editado correctamente.',

	'Type_delete_title' => 'Borrar tipo de art&iacute;culo',
	'Type_delete_desc' => 'Aqu&iacute; puede cambiar a otro tipo los art&iacute;culos que tienen este tipo que est&aacute; borrando.',
	'Change_type' => 'Cambiar art&iacute;culos a tipo:',
	'Change_and_Delete' => 'Cambiar y borrar',
	'Type_deleted' => 'Tipo de articulo borrado correctamente.',

	'Pre_text_name' => 'Instrucciones para el env&iacute;o de art&iacute;culos',
	'Pre_text_header' => 'Cabecera del mensaje',
	'Pre_text_body' => 'Cuerpo del mensaje',
	'Pre_text_explain' => 'Estas son las instrucciones mostradas al usuario',

	'Show' => 'Ver',
	'Hide' => 'Ocultar',

	'Empty_fields' =>'Por favor, llene todas las casillas del formulario.',
	'Empty_fields_return' =>'Pulsar %saqu&iacute;%s para volver al formulario.',
	'Empty_category' =>'Ha elegido una categor&iacute;a vac&iacute;a',
	'Empty_type' => 'Debe elegir un tipo',
	'Empty_article_name' => 'Debe introducir el nombre del art&iacute;culo',
	'Empty_article_desc' => 'Debe introducir la descripci&oacute;n del art&iacute;culo',

	'Read_full_article' => '» Leer todo el art&iacute;culo',
	'Comments' => 'Ver comentarios',

	'No_add' => 'Puede agregar un nuevo art&iacute;culo',
	'No_edit' => '&iexcl;Puede editar este art&iacute;culo!',
	'Post_comments' => 'Ponga sus comentarios',

	'Category_sub' => 'Sub categor&iacute;as',
	'Quick_stats' => 'Estad&iacute;sticas',

// added

	'Edited_Article_info' => 'Art&iacute;culo actualizado...',
	'No_Articles' => '&iexcl;Esta categor&iacute;a est&aacute; vac&iacute;a!',
	'Not_authorized' => 'Usted no tiene autorizaci&oacute;n...',
	'TOC' => 'Contenidos',

// Rate
	'Votes_label' => 'Valoraci&oacute;n ',
	'Votes' => 'Votos',
	'No_votes' => 'Votos no',
	'Rate' => 'Valoraci&oacute;n de art&iacute;culo',
	'ADD_RATING' => '[Valoraci&oacute;n de art&iacute;culo]',
	'Rerror' => 'Lo siento, ya ha valorado este art&iacute;culo.',
	'Rateinfo' => 'Va a votar por un art&iacute;culo <i>{filename}</i>.<br />Por favor, seleccione una valoraci&oacute;n. 1 es la peor, 10 es la mejor.',
	'Rconf' => 'Ha proporcionado al art&iacute;culo <i>{filename}</i> una puntuaci&oacute;n de {rate}.<br />Esto ha proporcionado una nueva valoraci&oacute;n: {newrating}/10.',
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
	'Click_return_rate' => 'Pulse %saqu&iacute;%s para volver al art&iacute;culo',

// Print version
	'Print_version' => '[Versi&oacute;n imprimible]',

// Stats
	'Top_toprated' => 'Art&iacute;culos m&aacute;s votados',
	'Top_most_popular' => 'M&aacute;s popular',
	'Top_latest' => '&Uacute;ltimos art&iacute;culos',

// Votes check
	'Votes_check_ip' => 'Validar votaci&oacute;n - IP', 
	'Votes_check_ip_explain' => 'Se permite un solo voto por direcci&oacute;n IP.',

	'Votes_check_userid' => 'Validar valoraciones - usuario',
	'Votes_check_userid_explain' => 'Los usuarios s&oacute;lo pueden votar una vez.',

	'Article_pag' => 'Paginaci&oacute;n de art&iacute;culos',
	'Article_pag_explain' => 'El n&uacute;mero de art&iacute;culos para mostrar en una p&aacute;gina antes de p&aacute;ginar.',

	'Comments_pag' => 'Paginaci&oacute;n de comentarios', 
	'Comments_pag_explain' => 'El n&uacute;mero de comentarios para mostrar en el art&iacute;culo antes de paginaci&oacute;n.',

	'News_sort' => 'M&eacute;todo de la clase de art&iacute;culo', 
	'News_sort_explain' => 'Defina c&oacute;mo los art&iacute;culos son clasificados dentro de su categor&iacute;a.',

	'News_sort_par' => 'Orden ASC o DESC',
	'News_sort_par_explain' => '',

// General strings from the news admin panel

	'News_settings' => 'Configuraci&oacute;n de bloque biblioteca',
	'News_settings_short_explain' => 'Configure algunas opciones para las noticias extraordinarias.',
	'News_settings_explain' => 'Aqu&iacute; puede corregir la configuraci&oacute;n para el bloque de biblioteca. Este panel le deja extraer qu&eacute; categor&iacute;as mostrar&aacute; el bloque, as&iacute; puede crear las opciones del m&oacute;dulo.',

// Update result messages

	'News_updated_return_settings' => 'Configuraci&oacute;n de bloque biblioteca actualizada correctamente.<br /><br />Pulse %saqu&iacute;%s para volver a la p&aacute;gina principal.', // %s's for URI params - DO NOT REMOVE
	'News_update_error' => 'No se puede actualizar la configuraci&oacute;n del bloque.<br /><br />Este MOD est&aacute; dise&ntilde;ado para MySQL. Por favor, p&oacute;ngase en contacto con el autor si tiene problemas. Si puede ofrecer una traducci&oacute;n del SQL u otros formatos de base de datos, por favor, env&iacute;elos:<br />',

// Custom Field
	'Fieldselecttitle' => 'Seleccione qu&eacute; hacer',
	'Afield' => 'Campo personalizable: A&ntilde;adir',
	'Efield' => 'Campo personalizable: Editar',
	'Dfield' => 'Campo personalizable: Borrar',
	'Mfieldtitle' => 'Campos personalizables',
	'Afieldtitle' => 'A&ntilde;adir campo',
	'Efieldtitle' => 'Editar campo',
	'Dfieldtitle' => 'Borrar campo',
	'Fieldexplain' => 'Puede usar la secci&oacute;n de direcci&oacute;n de campos de encargo para a&ntilde;adir, corregir, y suprimir campos personalizados. Puede usar campos personalizados para a&ntilde;adir m&aacute;s informaci&oacute;n sobre un art&iacute;culo.',
	'Fieldname' => 'Nombre del campo',
	'Fieldnameinfo' => 'Ejemplo de nombre de campo \'Tama&ntilde;o de archivo\'',
	'Fielddesc' => 'Descripci&oacute;n del campo',
	'Fielddescinfo' => 'Ejemplo de descripci&oacute;n de campo \'Tama&ntilde;o de archivo  Megabytes\'',
	'Fieldadded' => 'El campo ha sido a&ntilde;adido correctamente',
	'Fieldedited' => 'El campo personalizado que cre&oacute; ha sido corregido correctamente.',
	'Dfielderror' => 'Debe seleccionar un campo para suprimir',
	'Fieldsdel' => 'El campo seleccionado ha sido borrado correctamente.',

	'Field_data' => 'Opciones',
	'Field_data_info' => 'Entre en las opciones que el usuario puede escoger. Separe cada opci&oacute;n con una l&iacute;nea nueva de retorno de carro (la tecla de return o intro).',
	'Field_regex' => 'Expresi&oacute;n regular',
	'Field_regex_info' => 'Puede requerir para entrar el campo a emparejar con una expresi&oacute;n regular %s(PCRE)%s.',
	'Field_order' => 'Visualizar orden',

//Fields Types

	'Field_Input' => 'Solo-L&iacute;nea en caja de texto',
	'Field_Textarea' => 'M&uacute;ltiple l&iacute;nea en caja de texto',
	'Field_Radio' => 'Selecci&oacute;n sencilla botones de radio',
	'Field_Select' => 'Men&uacute; de selecci&oacute;n sencilla',
	'Field_Select_multiple' => 'Men&uacute; de selecci&oacute;n m&uacute;ltiple',
	'Field_Checkbox' => 'Selecci&oacute;n m&uacute;ltiple checkbox',

	'Click_return' => 'Pulse %saqu&iacute;%s para volver a la p&aacute;gina anterior',

// added
	'Cat_all' => 'Todo',

	'L_Pages' => 'P&aacute;ginas', 
	'L_Pages_explain' => 'Usar etiquetas [pages] para dividir el art&iacute;culo en p&aacute;ginas.', 
	'L_Toc' => 'Tabla de contenidos (TOC)', 
	'L_Toc_explain' => 'Usar etiquetas [toc] para a&ntilde;adir entrada en el TOC.', 
	'L_Abstract' => 'Abstracto', 
	'L_Abstract_explain' => 'Usar etiquetas [abstract]...[/abstract] para insertar un abstracto.', 

	'L_Title_Format' => 'T&iacute;tulo', 
	'L_Title_Format_explain' => 'Usar etiquetas [title]...[/title] para insertar un t&iacute;tulo principal.', 

	'L_Subtitle_Format' => 'Subt&iacute;tulo', 
	'L_Subtitle_Format_explain' => 'Usar etiquetas [subtitle]...[/subtitle] para insertar un subt&iacute;tulo.', 

	'L_Subsubtitle_Format' => 'Subsubt&iacute;tulo', 
	'L_Subsubtitle_Format' => 'Usar etiquetas [subsubtitle]...[/subsubtitle] para insertar un t&iacute;tulo peque&ntilde;o.', 

	'L_Options' => 'Opciones:', 
	'L_Formatting' => 'Formato:', 

	'Default_article_id' => 'Art&iacute;culo fijo est&aacute;ndar, para el que vea el art&iacute;culo',

// Added for v. 2.0
	'KB_comment_prefix' => '[Biblioteca] ',

	'Wysiwyg' => 'Usar editor WysiWyg',
	'Wysiwyg_explain' => 'De permitirse el est&aacute;ndar bbcode/html/smilies del di&aacute;logo de entrada para ser substituido por un editor Wysiwyg.',

	'Wysiwyg_path' => 'Ruta del software Wysiwyg',
	'Wysiwyg_path_explain' => 'Esto es la ruta (de la ra&iacute;z de mxBB) a la carpeta de software wysiwyg, p.e. \'modules/\' si usted tiene subido tinemce en modules/tinymce.',

	'Formatting_fixup' => 'Formatear fixup',
	'Formatting_fixup_explain' => 'Permitir que el texto de art&iacute;culo sea reformateado: wordwrapping, url truncadas, redimensionar img, alg&uacute;n bbcode que reformatear, etc.',

	'Addtional_field' => 'M&aacute;s informaci&oacute;n (opcional)',

	'No_cat_comments_forum_id' => 'Los comentarios est&aacute;n permitidos, pero no ha especificado la categor&iacute;a de foro de phpBB que ser&aacute; mostrada en el ACP - Categor&iacute;as',

// Quick Nav
	'Quick_nav' => 'Navegaci&oacute;n biblioteca',
	'Quick_jump' => 'Ir',

	'Categories' => 'Categor&iacute;as',
	'Subcategory' => 'SubCategor&iacute;a',
	)
);

?>