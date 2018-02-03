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
// Toplist
	'Toplist' => 'Lista TOP',
	'Select_list' => 'Seleccione el tipo de lista para mostrar',
	'Latest_downloads' => 'Archivos más nuevos',
	'Most_downloads' => 'Archivos más descargados',
	'Rated_downloads' => 'Archivos más votados',
	'Total_new_files' => 'Nuevas descargas totales',
	'Show' => 'Mostrar',
	'One_week' => 'Una Semana',
	'Two_week' => 'Dos Semanas',
	'30_days' => '30 Días',
	'New_Files' => 'Archivos nuevos totales en los últimos %d días',
	'Last_week' => 'Última Semana',
	'Last_30_days' => 'Últimos 30 Días',
	'Show_top' => 'Mostrar TOP',
	'Or_top' => 'o Top',
	'Popular_num' => 'Top %d fuera de %d archivos en la base de datos',
	'Popular_per' => 'Top %d %% de todos %d los archivos en la base de datos',
	'General_Info' => 'Información General',
	'Downloads_stats' => 'Estadísticas de descarga del usuario',
	'Rating_stats' => 'Estadísticas de valoración del usuario',
	'Os' => 'Sistema operativo',
	'Browsers' => 'Navegadores',

// Main
	'Files' => 'Archivos',
	'Viewall' => 'Ver todos los archivos',
	'Vainfo' => 'Ver todos los archivos de la base de datos',
	'Jump' => 'Seleccione una categoría',
	'Sub_category' => 'Sub categoría',
	'Last_file' => 'último archivo',

// Sort
	'Sort' => 'Ordenar',
	'Name' => 'Nombre',
	'Update_time' => 'Última actualización',

// Category
	'No_files' => 'No se encontraron archivos',
	'No_files_cat' => 'No hay archivos en esta categoría.',
	'Cat_not_exist' => 'La categoría que ha seleccionado no existe.',
	'File_not_exist' => 'El archivo que ha seleccionado no existe.',
	'License_not_exist' => 'La licencia que ha seleccionado no existe.',
	'No_dl_categories_exists' => 'O bien no tiene permiso para ver una categoría o no hay ninguna categoría en la base de datos.',

// File
	'File' => 'Archivo',
	'Desc' => 'Descripción',
	'Creator' => 'Creador',
	'Version' => 'Versión',
	'Scrsht' => 'Captura de pantalla',
	'Docs' => 'Sitio web',
	'Lastdl' => 'Última descarga',
	'Never' => 'Nunca',
	'Votes' => ' Votos',
	'Date' => 'Fecha',
	'Update_time' => 'Última actualización',
	'DlRating' => 'Valoración',
	'Dls' => ' Descargas',
	'Downloadfile' => 'Descargar Archivo,',
	'File_size' => 'Tamaño del archivo',
	'Not_available' => 'No disponible!',

	'Mirrors' => 'Espejos',
	'Mirrors_explain' => 'Aquí puede añadir o corregir espejos para este archivo, asegúrese de verificar toda la información porque el archivo será procesado por la base de datos',
	'Click_here_mirrors' => 'Pulse aquí para añadir espejos',
	'Mirror_location' => 'Localización del espejo',
	'Add_new_mirror' => 'Añadir nuevo espejo',

//User Upload
	'User_upload' => 'Subida Usuario',

// License
	'License' => 'Acuerdo de licencia',
	'Licensewarn' => 'Usted debe estar de acuerdo con esta licencia para descargar',
	'Iagree' => 'Acepto el acuerdo',
	'Dontagree' => 'No acepto el acuerdo',

// Search
	'Search' => 'Buscar',
	'Search_for' => 'Buscar por',
	'Results' => 'Resultados para',
	'No_matches' => 'Lo siento, no se encontraron resultados para',
	'Matches' => 'Resultados encontrados para',
	'All' => 'Todas las categorías',
	'Choose_cat' => 'Elija categoría:',
	'Include_comments' => 'Incluir comentarios',
	'Submiter' => 'Presentado por',

// Statistics
	'Statistics' => 'Estadísticas',
	'Select_chart_type' => 'Seleccione el tipo de gráfico',
	'Bars' => 'Barras',
	'Lines' => 'Líneas',
	'Area' => 'Área',
	'Linepoints' => 'Línea de puntos',
	'Points' => 'Puntoss',
	'Chart_header' => 'Estado de los archivos - Archivos añadidos a la base de datos cada mes',
	'Chart_legend' => 'Archivos',
	'X_label' => 'Meses',
	'Y_label' => 'Número de archivos',

// Rate
	'Rate' => 'Archivo Votado',
	'Rerror' => 'Lo sentimos, ya ha votado a este archivo',
	'Rateinfo' => 'Usted va a votar a este archivo <i>{filename}</i>.<br />Por favor, seleccione un valor: 1 es el peor, 10 es el mejor.',
	'Rconf' => 'Le ha dado a <i>{filename}</i> un valor de {rate}.<br />Esto hace valorar de nuevo los archivos {newrating}.',
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
	'Not_rated' => 'No votado',

// Email
	'Emailfile' => 'Archivo de e-mail para un amigo',
	'Emailinfo' => 'Si quiere que un amigo conozca este archivo, puede completar este formulario, y se le enviará a su amigo un e-mail con la información de los archivos. <br />Los campos marcados con asterisco * son obligatorios.',
	'Yname' => 'Su Nombre',
	'Yemail' => 'Su dirección de Correo',
	'Fname' => 'Nombre de los amigos',
	'Femail' => 'Dirección de Correo de sus amigos',
	'Esub' => 'Asunto del correo',
	'Etext' => 'Texto del correo',
	'Defaultmail' => 'Creo que usted estará interesado en descargar este archivo localizado en',
	'Semail' => 'Enviar Correo',
	'Econf' => 'Su correo ha sido enviado correctamente.',

// Comments
	'Comments' => 'Comentarios',
	'Comments_title' => 'Título de los comentarios',
	'Comment_subject' => 'Asunto del comentario',
	'Comment' => 'Comentario',
	'Comment_explain' => 'Use el formulario para dar su opinión acerca de este archivo.',
	'Comment_add' => 'Agregar comentario',
	'Comment_delete' => 'Borrar',
	'Comment_posted' => 'Su comentario ha sido agregado correctamente',
	'Comment_deleted' => 'El comentario seleccionado ha sido eliminado correctamente',
	'Comment_desc' => 'Título',
	'No_comments' => 'No se han publicado comentarios todavía.',
	'Links_are_ON' => 'Enlaces están <u>ON</u>',
	'Links_are_OFF' => 'Enlaces están <u>OFF</u>',
	'Images_are_ON' => 'Imágenes están <u>ON</u>',
	'Images_are_OFF' => 'Imágenes están <u>OFF</u>',
	'Check_message_length' => 'Comprobar longitud del mensaje',
	'Msg_length_1' => 'Su mensaje es ',
	'Msg_length_2' => ' caracteres largos..',
	'Msg_length_3' => 'Tiene ',
	'Msg_length_4' => ' caracteres disponibles.',
	'Msg_length_5' => 'Hay ',
	'Msg_length_6' => ' Carácteres se usaron.',


// Download
	'Directly_linked' => 'No puede descargar este archivo directamente desde otro sitio',

//Permission
	'Sorry_auth_view' => 'Disculpe, pero sólo %s puede ver archivos y sub categorías en esta categoría.',
	'Sorry_auth_file_view' => 'Disculpe, pero sólo %s puede ver este archivo en esta categoría.',
	'Sorry_auth_upload' => 'Disculpe, pero sólo %s puede subir archivos en esta categoría.',
	'Sorry_auth_download' => 'Disculpe, pero sólo %s puede descargar archivos en esta categoría.',
	'Sorry_auth_rate' => 'Disculpe, pero sólo %s puede valorar archivos en esta categoría.',
	'Sorry_auth_view_comments' => 'Disculpe, pero sólo %s puede ver comentarios en esta categoría.',
	'Sorry_auth_post_comments' => 'Disculpe, pero sólo %s puede publicar comentarios en esta categoría.',
	'Sorry_auth_edit_comments' => 'Disculpe, pero sólo %s puede editar comentarios en esta categoría.',
	'Sorry_auth_delete_comments' => 'Disculpe, pero sólo %s puede eliminar comentarios en esta categoría.',
// MX
	'Sorry_auth_edit' => 'Disculpe, pero no puede editar archivos en esta categoría.',
	'Sorry_auth_delete' => 'Disculpe, pero no puede eliminar archivos de esta categoría.',
	'Sorry_auth_mcp' => 'Disculpe, pero no puede moderar esta categoría.',
	'Sorry_auth_approve' => 'Disculpe, pero no puede aprobar archivos en esta categoría.',


// General
	'Category' => 'Categoría',
	'Error_no_download' => 'No existe el archivo seleccionado',
	'Options' => 'Opciones',
	'Click_return' => 'Pulse %saqui%s para volver a la página previa',
	'Click_here' => 'Pulse aqui',
	'never' => 'Nunca',
	'pafiledb_disable' => 'La descarga de la base de datos no está disponible',
	'jump' => 'Seleccione una categoría',
	'viewall_disabled' => 'Esta característica está inhabilitada por el administrador.',
	'New_file' => 'Archivo nuevo',
	'No_new_file' => 'Archivo antiguo',
	'None' => 'Ninguno',
	'No_file' => 'No hay Archivos',
	'View_latest_file' => 'Ver el último archivo',

// Toplists mx blocks
	'Recent_Public_Files' => 'Últimas descargas',
	'Random_Public_Files' => 'Descargas aleatorias',
	'Toprated_Public_Files' => 'Descargas Más valoradas',
	'Most_Public_Files' => 'Más descargadas',
	'File_Title' => 'Título',
	'File_Desc' => 'Descripción',
	'Rating' => 'Votos',
	'Dls' => 'Descargas',

// MX Addon
	'Deletefile' => 'Borrar archivo',
	'Editfile' => 'Editar archivo',
	'pa_MCP' => '[PC moderator]',
	'Click_return_not_validated' => 'Pulse %saqui%s para volver a la página anterior',
	)
);

$lang['Stats_text'] = "Hay {total_files} archivos en {total_categories} categorías<br />";
$lang['Stats_text'] .= "Han habido {total_downloads} descargas totales<br /><br />";
$lang['Stats_text'] .= "El archivo más nuevo es <a href={u_newest_file}>{newest_file}</a><br />";
$lang['Stats_text'] .= "El archivo más antiguo es <a href={u_oldest_file}>{oldest_file}</a><br /><br />";
$lang['Stats_text'] .= "El promedio de votos de archivos es {average}/10<br />";
$lang['Stats_text'] .= "El archivo más popular basado en los votos es <a href={u_popular}>{popular}</a> con un valor de {most}/10<br />";
$lang['Stats_text'] .= "El archivo menos popular basado en los votos es <a href={u_lpopular}>{lpopular}</a> con un valor de {least}/10<br /><br />";
$lang['Stats_text'] .= "El promedio de descargas de cada archivo es {avg_dls}<br />";
$lang['Stats_text'] .= "El archivo más popular basado en las descargas es <a href={u_most_dl}>{most_dl}</a> con {most_no} descargas<br />";
$lang['Stats_text'] .= "El archivo menos popular basado en las descargas es <a href={u_least_dl}>{least_dl}</a> con {least_no} descargas<br />";

?>