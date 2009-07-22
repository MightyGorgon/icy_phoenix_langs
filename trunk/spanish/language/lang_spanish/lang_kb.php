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
	'Article' => 'Art�culo',
	'Category' => 'Categor�a',
	'Article_description' => 'Descripci�n',
	'Article_type' => 'Tipo',
	'Article_keywords' => 'Palabras clave',
	'Articles' => 'Art�culos',
	'Add_article' => 'A�adir art�culo',
	'Click_cat_to_add' => 'Pulse en una categor�a para a�adir un art�culo',
	'KB_Home' => 'Inicio biblioteca',
	'No_articles' => 'Ning�n art�culo',
	'Article_title' => 'Nombre del art�culo',
	'Article_text' => 'Texto del art�culo',
	'Add_article' => 'Crear art�culo',
	'Read_article' => 'Leer art�culo',
	'Article_not_exsist' => 'El art�culo no existe',
	'Category_not_exsist' => 'La categor�a no existe',

	'Edit' => 'Editar',

	'Article_submitted_Approve' => 'Art�culo enviado correctamente.<br />Un administrador repasar� su art�culo y decidir� si permite o no su publicaci�n.',
	'Article_submitted' => 'Art�culo creado correctamente.',
	'Click_return_kb' => 'Pulse %saqu�%s para volver a la biblioteca',
	'Click_return_article' => 'Pulse %saqu�%s para volver al art�culo',

	'Article_Edited_Approve' => 'Art�culo editado correctamente.<br />Necesita ser aprobado otra vez antes de que el usuario pueda visualizarlo.',
	'Article_Edited' => 'Art�culo editado correctamente.',
	'Edit_article' => 'Editar art�culo',

	'KB_title' => 'Base de informaci�n',
	'KB_art_description' => 'Aqu� puede aprobar o borrar art�culos para que los usuarios pueden verlos o no.',
	'Art_man' => 'Gestor de art�culos',
	'Cat_man' => 'Gestor de categor�as',
	'KB_cat_description' => 'Aqu� puede agregar, editar o borrar categor�as en la base de informaci�n',
	'Art_action' => 'Acci�n',

//approve
	'Art_edit' => 'Editar art�culos',
	'Art_not_approved' => 'No aprobados',
	'Art_approved' => 'Aprobados',
	'Approve' => 'Aprobado',
	'Un_approve' => 'Desaprobar',
	'Article_approved' => 'Aprobar ahora el art�culo.',
	'Article_unapproved' => 'No aprobar ahora el art�culo.',

//delete
	'Delete' => 'Borrar',
	'Confirm_art_delete' => '�Est� seguro de que quiere borrar este art�culo?',
	'Confirm_art_delete_yes' => '%sS�, quiero borrar este art�culo%s', 
	'Confirm_art_delete_no' => '%sNo, no quiero borrar este art�culo%s',
	'Article_deleted' => 'Art�culo borrado correctamente.',

	'Click_return_article_manager' => 'Pulsar %saqu�%s para volver a la configuraci�n de art�culos',

//cat manager
	'Create_cat' => 'Crear nueva categor�a:',
	'Create' => 'Crear',
	'Cat_settings' => 'Propiedades de categor�a',
	'Create_description' => 'Aqu� puede cambiar el nombre de la categor�a y agregar una descripci�n a la categor�a nueva.',
	'Cat_created' => 'Categor�a creada correctamente.',
	'Click_return_cat_manager' => 'Pulse %saqu�%s para volver a la administraci�n de categor�as',
	'Edit_description' => 'Aqu� puede revisar las propiedades de su categor�a',
	'Edit_cat' => 'Editar categor�a',
	'Cat_edited' => 'Categor�a editada correctamente.',
	'Parent' => 'Padre',

	'Cat_delete_title' => 'Borrar categor�a',
	'Cat_delete_desc' => 'Aqu� puede borrar una categor�a y mover todos los art�culos que hay en ella a una categor�a nueva',
	'Cat_deleted' => 'Categor�a borrada correctamente.',
	'Delete_all_articles' => 'Borrar art�culos',

//configuration
	'KB_config' => 'Configuraci�n de la biblioteca',
	'Art_types' => 'Tipos de art�culos',
	'KB_config_title' => 'Configuraci�n de la biblioteca',
	'KB_config_explain' => 'Cambiar la configuraci�n de su biblioteca',
	'New_title' => 'Permitir nuevos art�culos',
	'New_explain' => 'Permitir que los usuarios pongan art�culos nuevos en su biblioteca',
	'Edit_name' => 'Permitir editarlos',
	'Edit_explain' => 'Permitir que los usuarios editen sus art�culos despu�s de crearlos',
	'Notify_name' => 'Notificarme nuevos art�culos',
	'Notify_explain' => 'Elija de qu� manera desea recibir avisos si hay art�culos nuevos',
	'PM' => 'MP',
	'Click_return_kb_config' => 'Pulse %saqu�%s para volver a la configuraci�n de la biblioteca',
	'Admin_id_name' => 'Administrador ID',
	'Admin_id_explain' => 'Este es el n� ID del usuario al que las notificaciones por MP o correo ser�n enviadas',
	'Approve_new_name' => 'Permitir nuevos art�culos',
	'Approve_new_explain' => 'Cambiar cuando los <b />nuevos</b /> art�culos necesitan ser aprobados o no',
	'Approve_edit_name' => 'Permitir editar art�culos',
	'Approve_edit_explain' => 'Cambiar cuando los art�culos <b />editados</b /> deben ser aprobados o no',
	'Allow_anon_name' => 'Permitir que usuarios an�nimos dejen art�culos', 
	'Allow_anon_explain' => 'Cambie si quiere que usuarios an�nimos creen art�culos <b />Nuevos</b />', 
	'Del_topic' => 'Borrar tema',
	'Del_topic_explain' => 'Cuando borre un art�culo, �quiere que se borren tambi�n los comentarios del tema?',

	'Use_comments' => 'Comentarios',
	'Use_comments_explain' => 'Permitir comentarios en art�culos. Ser�n insertados en el foro phpBB.',
	'Use_ratings' => 'Valoraci�n',
	'Use_ratings_explain' => 'Permitir votos en art�culos',

	'Forum_id' => 'ID del foro',
	'Forum_id_explain' => 'Este es el foro en el que los comentarios de art�culo ser�n guardados',


// Permissions
	'KB_Auth_Title' => 'Permisos biblioteca',
	'KB_Auth_Explain' => 'Aqu� puede elegir qu� grupo de usuarios pueden ser los moderadores para cada categor�a de la biblioteca, o si tiene acceso privado',
	'Select_a_Category' => 'Seleccionar la categor�a',
	'Look_up_Category' => 'Ver categor�a',
	'KB_Auth_successfully' => 'Permisos actualizados correctamente',
	'Click_return_KB_auth' => 'Pulsar %saqu�%s para volver a permisos de biblioteca',

	'Upload' => 'Enviar',
	'Rate' => 'Voto',
	'Comment' => 'Comentario',
	'Approval' => 'Aprobar',
	'Approval_edit' => 'Aprobar editar',

	'Allow_rating' => 'Permitir votaciones',
	'Allow_rating_explain' => 'Permitir a usuarios votar art�culos.',

	'Allow_anonymos_rating' => 'Permitir votar a an�nimos',
	'Allow_anonymos_rating_explain' => 'Si las valoraciones o votos est�n activados, permite a los usuarios invitados a�adir valoraciones a sus art�culos',

	'KB_config_updated' => 'Biblioteca actualizada con �xito.',

	'KB_notify_subject_new' => '�Nuevo art�culo!',
	'KB_notify_subject_edited' => '�Editar art�culo!',
	'KB_notify_subject_approved' => '�Aprobar art�culo!',
	'KB_notify_subject_unapproved' => '�Desaprobar art�culo!',
	'KB_notify_body' => 'El nuevo art�culo se ha enviado o editado correctamente:

',

	'Category_Permissions' => 'Permisos de categor�a',
	'Category_Title' => 'T�tulo de la categor�a',
	'Category_Desc' => 'Descripci�n de la categor�a',
	'View_level' => 'Ver nivel',
	'Upload_level' => 'Subir nivel',
	'Rate_level' => 'Nivel de valoraci�n',
	'Comment_level' => 'Nivel de comentario',
	'Edit_level' => 'Editar nivel',
	'Delete_level' => 'Borrar nivel',
	'Approval_level' => 'Aprobar nivel',
	'Approval_edit_level' => 'Aprobar editar nivel',

/*
	'KB_Rules_post_can' => '<b>Puede</b> poner nuevos art�culos en esta categor�a',
	'KB_Rules_post_cannot' => '<b>No puede</b> poner nuevos art�culos en esta categor�a',
	'KB_Rules_comment_can' => '<b>Puede</b> poner comentarios en art�culos en esta categor�a',
	'KB_Rules_comment_cannot' => '<b>No puede</b> poner comentarios en art�culos en esta categor�a',
	'KB_Rules_edit_can' => '<b>Puede</b> editar art�culos en esta categor�a',
	'KB_Rules_edit_cannot' => '<b>No puede</b> editar art�culos en esta categor�a',
	'KB_Rules_delete_can' => '<b>Puede</b> borrar art�culos en esta categor�a',
	'KB_Rules_delete_cannot' => '<b>No puede</b> borrar art�culos en esta categor�a',
	'KB_Rules_rate_can' => '<b>Puede</b> valorar art�culos en esta categor�a',
	'KB_Rules_rate_cannot' => '<b>No puede</b> valorar art�culos en esta categor�a',
	'KB_Rules_approval_can' => 'Los art�culos <b>no necesitan ninguna aprobaci�n</b> en esta categor�a',
	'KB_Rules_approval_cannot' => 'Los art�culos <b>necesitan</b> aprobaci�n en esta categor�a',
	'KB_Rules_approval_edit_can' => 'Las revisiones de art�culo <b>no necesitan ninguna aprobaci�n</b> en esta categor�a',
	'KB_Rules_approval_edit_cannot' => 'Las revisiones de art�culo <b>necesitan aprobaci�n</b> en esta categor�a',
*/
	'KB_Rules_post_can' => '<b>Puede</b> publicar nuevos art�culos',
	'KB_Rules_post_cannot' => '<b>No puede</b> publicar nuevos art�culos',
	'KB_Rules_comment_can' => '<b>Puede</b> comentar art�culos',
	'KB_Rules_comment_cannot' => '<b>No puede</b> comentar art�culos',
	'KB_Rules_edit_can' => '<b>Puede</b> editar sus art�culos',
	'KB_Rules_edit_cannot' => '<b>No puede</b> editar sus art�culos',
	'KB_Rules_delete_can' => '<b>Puede</b> eliminar sus art�culos',
	'KB_Rules_delete_cannot' => '<b>No puede</b> eliminar sus art�culos',
	'KB_Rules_rate_can' => '<b>Puede</b> cualificar art�culos',
	'KB_Rules_rate_cannot' => '<b>No puede</b> cualificar art�culos',
	'KB_Rules_approval_can' => 'Art�culos <b>no necesitan</b> aprobaci�n',
	'KB_Rules_approval_cannot' => 'Art�culos <b>necesitan</b> aprobaci�n',
	'KB_Rules_approval_edit_can' => 'Art�culo editado <b>no necesita</b> aprobaci�n',
	'KB_Rules_approval_edit_cannot' => 'Art�culo editado <b>necesita</b> aprobaci�n',
	'KB_Rules_moderate' => '<b>Puede</b> %smoderar esta categor�a%s', // %s replaced by a href links, do not remove!
	'KB_Rules_moderate_can' => '<b>Puede</b> Moderar esta categor�a', // %s replaced by a href links, do not remove!

	'Comments_show' => 'Visualizar comentarios del art�culo.',
	'Comments_show_explain' => '- tambi�n muestra comentarios en la p�gina de art�culo',
	'Comments_show_title' => 'Usuarios pueden comentar',

	'Mod_group' => 'Grupo moderador de biblioteca',
	'Mod_group_explain' => '- �con permisos del administrador de biblioteca!',

	'Bump_post' => 'Anunciar mensaje en art�culo', 
	'Bump_post_explain' => 'Cuando se edite un art�culo, poner una nota en la notificaci�n de asunto del art�culo puesto al d�a.', 

	'Stats_list' => 'Ver estad�sticas de biblioteca', 
	'Stats_list_explain' => 'Ver estad�sticas en cabecera de KB.', 

	'Header_banner' => 'Ver logo arriba', 
	'Header_banner_explain' => 'Ver logo de biblioteca en cabecera.', 

	'Comment_info' => 'Configuraci�n de comentarios', 
	'Rating_info' => 'Configuraci�n de valoraciones',


//types
	'Types_man' => 'Gestor de tipos',
	'KB_types_description' => 'Aqu� puede agregar, borrar y editar diferentes tipos de art�culo',
	'Create_type' => 'Crear nuevo tipo de art�culo:',
	'Type_created' => 'Tipo de art�culo creado correctamente.',
	'Click_return_type_manager' => 'Pulse %saqu�%s para volver a propiedades de tipos',

	'Edit_type' => 'Editar tipo',
	'Edit_type_description' => 'Aqu� puede editar el nombre de tipo',
	'Type_edited' => 'Tipo de art�culo editado correctamente.',

	'Type_delete_title' => 'Borrar tipo de art�culo',
	'Type_delete_desc' => 'Aqu� puede cambiar a otro tipo los art�culos que tienen este tipo que est� borrando.',
	'Change_type' => 'Cambiar art�culos a tipo:',
	'Change_and_Delete' => 'Cambiar y borrar',
	'Type_deleted' => 'Tipo de articulo borrado correctamente.',

	'Pre_text_name' => 'Instrucciones para el env�o de art�culos',
	'Pre_text_header' => 'Cabecera del mensaje',
	'Pre_text_body' => 'Cuerpo del mensaje',
	'Pre_text_explain' => 'Estas son las instrucciones mostradas al usuario',

	'Show' => 'Ver',
	'Hide' => 'Ocultar',

	'Empty_fields' =>'Por favor, llene todas las casillas del formulario.',
	'Empty_fields_return' =>'Pulsar %saqu�%s para volver al formulario.',
	'Empty_category' =>'Ha elegido una categor�a vac�a',
	'Empty_type' => 'Debe elegir un tipo',
	'Empty_article_name' => 'Debe introducir el nombre del art�culo',
	'Empty_article_desc' => 'Debe introducir la descripci�n del art�culo',

	'Read_full_article' => '� Leer todo el art�culo',
	'Comments' => 'Ver comentarios',

	'No_add' => 'Puede agregar un nuevo art�culo',
	'No_edit' => '�Puede editar este art�culo!',
	'Post_comments' => 'Ponga sus comentarios',

	'Category_sub' => 'Sub categor�as',
	'Quick_stats' => 'Estad�sticas',

// added

	'Edited_Article_info' => 'Art�culo actualizado...',
	'No_Articles' => '�Esta categor�a est� vac�a!',
	'Not_authorized' => 'Usted no tiene autorizaci�n...',
	'TOC' => 'Contenidos',

// Rate
	'Votes_label' => 'Valoraci�n ',
	'Votes' => 'Votos',
	'No_votes' => 'Votos no',
	'Rate' => 'Valoraci�n de art�culo',
	'ADD_RATING' => '[Valoraci�n de art�culo]',
	'Rerror' => 'Lo siento, ya ha valorado este art�culo.',
	'Rateinfo' => 'Va a votar por un art�culo <i>{filename}</i>.<br />Por favor, seleccione una valoraci�n. 1 es la peor, 10 es la mejor.',
	'Rconf' => 'Ha proporcionado al art�culo <i>{filename}</i> una puntuaci�n de {rate}.<br />Esto ha proporcionado una nueva valoraci�n: {newrating}/10.',
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
	'Click_return_rate' => 'Pulse %saqu�%s para volver al art�culo',

// Print version
	'Print_version' => '[Versi�n imprimible]',

// Stats
	'Top_toprated' => 'Art�culos m�s votados',
	'Top_most_popular' => 'M�s popular',
	'Top_latest' => '�ltimos art�culos',

// Votes check
	'Votes_check_ip' => 'Validar votaci�n - IP', 
	'Votes_check_ip_explain' => 'Se permite un solo voto por direcci�n IP.',

	'Votes_check_userid' => 'Validar valoraciones - usuario',
	'Votes_check_userid_explain' => 'Los usuarios s�lo pueden votar una vez.',

	'Article_pag' => 'Paginaci�n de art�culos',
	'Article_pag_explain' => 'El n�mero de art�culos para mostrar en una p�gina antes de p�ginar.',

	'Comments_pag' => 'Paginaci�n de comentarios', 
	'Comments_pag_explain' => 'El n�mero de comentarios para mostrar en el art�culo antes de paginaci�n.',

	'News_sort' => 'M�todo de la clase de art�culo', 
	'News_sort_explain' => 'Defina c�mo los art�culos son clasificados dentro de su categor�a.',

	'News_sort_par' => 'Orden ASC o DESC',
	'News_sort_par_explain' => '',

// General strings from the news admin panel

	'News_settings' => 'Configuraci�n de bloque biblioteca',
	'News_settings_short_explain' => 'Configure algunas opciones para las noticias extraordinarias.',
	'News_settings_explain' => 'Aqu� puede corregir la configuraci�n para el bloque de biblioteca. Este panel le deja extraer qu� categor�as mostrar� el bloque, as� puede crear las opciones del m�dulo.',

// Update result messages

	'News_updated_return_settings' => 'Configuraci�n de bloque biblioteca actualizada correctamente.<br /><br />Pulse %saqu�%s para volver a la p�gina principal.', // %s's for URI params - DO NOT REMOVE
	'News_update_error' => 'No se puede actualizar la configuraci�n del bloque.<br /><br />Este MOD est� dise�ado para MySQL. Por favor, p�ngase en contacto con el autor si tiene problemas. Si puede ofrecer una traducci�n del SQL u otros formatos de base de datos, por favor, env�elos:<br />',

// Custom Field
	'Fieldselecttitle' => 'Seleccione qu� hacer',
	'Afield' => 'Campo personalizable: A�adir',
	'Efield' => 'Campo personalizable: Editar',
	'Dfield' => 'Campo personalizable: Borrar',
	'Mfieldtitle' => 'Campos personalizables',
	'Afieldtitle' => 'A�adir campo',
	'Efieldtitle' => 'Editar campo',
	'Dfieldtitle' => 'Borrar campo',
	'Fieldexplain' => 'Puede usar la secci�n de direcci�n de campos de encargo para a�adir, corregir, y suprimir campos personalizados. Puede usar campos personalizados para a�adir m�s informaci�n sobre un art�culo.',
	'Fieldname' => 'Nombre del campo',
	'Fieldnameinfo' => 'Ejemplo de nombre de campo \'Tama�o de archivo\'',
	'Fielddesc' => 'Descripci�n del campo',
	'Fielddescinfo' => 'Ejemplo de descripci�n de campo \'Tama�o de archivo  Megabytes\'',
	'Fieldadded' => 'El campo ha sido a�adido correctamente',
	'Fieldedited' => 'El campo personalizado que cre� ha sido corregido correctamente.',
	'Dfielderror' => 'Debe seleccionar un campo para suprimir',
	'Fieldsdel' => 'El campo seleccionado ha sido borrado correctamente.',

	'Field_data' => 'Opciones',
	'Field_data_info' => 'Entre en las opciones que el usuario puede escoger. Separe cada opci�n con una l�nea nueva de retorno de carro (la tecla de return o intro).',
	'Field_regex' => 'Expresi�n regular',
	'Field_regex_info' => 'Puede requerir para entrar el campo a emparejar con una expresi�n regular %s(PCRE)%s.',
	'Field_order' => 'Visualizar orden',

//Fields Types

	'Field_Input' => 'Solo-L�nea en caja de texto',
	'Field_Textarea' => 'M�ltiple l�nea en caja de texto',
	'Field_Radio' => 'Selecci�n sencilla botones de radio',
	'Field_Select' => 'Men� de selecci�n sencilla',
	'Field_Select_multiple' => 'Men� de selecci�n m�ltiple',
	'Field_Checkbox' => 'Selecci�n m�ltiple checkbox',

	'Click_return' => 'Pulse %saqu�%s para volver a la p�gina anterior',

// added
	'Cat_all' => 'Todo',

	'L_Pages' => 'P�ginas', 
	'L_Pages_explain' => 'Usar etiquetas [pages] para dividir el art�culo en p�ginas.', 
	'L_Toc' => 'Tabla de contenidos (TOC)', 
	'L_Toc_explain' => 'Usar etiquetas [toc] para a�adir entrada en el TOC.', 
	'L_Abstract' => 'Abstracto', 
	'L_Abstract_explain' => 'Usar etiquetas [abstract]...[/abstract] para insertar un abstracto.', 

	'L_Title_Format' => 'T�tulo', 
	'L_Title_Format_explain' => 'Usar etiquetas [title]...[/title] para insertar un t�tulo principal.', 

	'L_Subtitle_Format' => 'Subt�tulo', 
	'L_Subtitle_Format_explain' => 'Usar etiquetas [subtitle]...[/subtitle] para insertar un subt�tulo.', 

	'L_Subsubtitle_Format' => 'Subsubt�tulo', 
	'L_Subsubtitle_Format' => 'Usar etiquetas [subsubtitle]...[/subsubtitle] para insertar un t�tulo peque�o.', 

	'L_Options' => 'Opciones:', 
	'L_Formatting' => 'Formato:', 

	'Default_article_id' => 'Art�culo fijo est�ndar, para el que vea el art�culo',

// Added for v. 2.0
	'KB_comment_prefix' => '[Biblioteca] ',

	'Wysiwyg' => 'Usar editor WysiWyg',
	'Wysiwyg_explain' => 'De permitirse el est�ndar bbcode/html/smilies del di�logo de entrada para ser substituido por un editor Wysiwyg.',

	'Wysiwyg_path' => 'Ruta del software Wysiwyg',
	'Wysiwyg_path_explain' => 'Esto es la ruta (de la ra�z de mxBB) a la carpeta de software wysiwyg, p.e. \'modules/\' si usted tiene subido tinemce en modules/tinymce.',

	'Formatting_fixup' => 'Formatear fixup',
	'Formatting_fixup_explain' => 'Permitir que el texto de art�culo sea reformateado: wordwrapping, url truncadas, redimensionar img, alg�n bbcode que reformatear, etc.',

	'Addtional_field' => 'M�s informaci�n (opcional)',

	'No_cat_comments_forum_id' => 'Los comentarios est�n permitidos, pero no ha especificado la categor�a de foro de phpBB que ser� mostrada en el ACP - Categor�as',

// Quick Nav
	'Quick_nav' => 'Navegaci�n biblioteca',
	'Quick_jump' => 'Ir',

	'Categories' => 'Categor�as',
	'Subcategory' => 'SubCategor�a',
	)
);

?>