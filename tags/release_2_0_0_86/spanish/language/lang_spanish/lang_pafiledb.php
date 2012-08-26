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
	'Latest_downloads' => 'Archivos m&aacute;s nuevos',
	'Most_downloads' => 'Archivos m&aacute;s descargados',
	'Rated_downloads' => 'Archivos m&aacute;s votados',
	'Total_new_files' => 'Nuevas descargas totales',
	'Show' => 'Mostrar',
	'One_week' => 'Una semana',
	'Two_week' => 'Dos semanas',
	'30_days' => '30 d&iacute;as',
	'New_Files' => 'Archivos nuevos totales en los &uacute;ltimos %d d&iacute;as',
	'Last_week' =>'&Uacute;ltima semana',
	'Last_30_days' => '&Uacute;ltimos 30 d&iacute;as',
	'Show_top' => 'Mostrar TOP',
	'Or_top' => 'o TOP',
	'Popular_num' => 'TOP %d fuera de %d los archivos en la base de datos',
	'Popular_per' => 'TOP %d %% de todos %d los archivos en la base de datos',
	'General_Info' => 'Informaci&oacute;n general',
	'Downloads_stats' => 'Estado de descargas del usuario',
	'Rating_stats' => 'Estado de rango del usuario',
	'Os' => 'Sistema operativo',
	'Browsers' => 'Navegadores',

// Main
	'Files' => 'Archivos',
	'Viewall' => 'Ver todos los archivos',
	'Vainfo' => 'Ver todos los archivos de la base de datos',
	'Jump' => 'Seleccione una categor&iacute;a',
	'Sub_category' => 'Sub categor&iacute;a',
	'Last_file' => '&Uacute;ltimo archivo',

// Sort
	'Sort' => 'Tipo',
	'Name' => 'Nombre',
	'Update_time' => '&Uacute;ltima actualizaci&oacute;n',

// Category
	'No_files' => 'No se encontraron archivos',
	'No_files_cat' => 'No hay archivos en esta categor&iacute;a.',
	'Cat_not_exist' => 'La categor&iacute;a que ha seleccionado no existe.',
	'File_not_exist' => 'El archivo que ha seleccionado no existe.',
	'License_not_exist' => 'La licencia que ha seleccionado no existe.',

// File
	'File' => 'Archivo',
	'Desc' => 'Descripci&oacute;n',
	'Creator' => 'Creador',
	'Version' => 'Versi&oacute;n',
	'Scrsht' => 'Captura de pantalla',
	'Docs' => 'Sitio web',
	'Lastdl' => '&Uacute;ltima descarga',
	'Never' => 'Nunca',
	'Votes' => 'Votos',
	'Date' => 'Fecha',
	'Update_time' => '&Uacute;ltima actualizaci&oacute;n',
	'DlRating' => 'Rango',
	'Dls' => 'Descargas',
	'Downloadfile' => 'Descargar archivo',
	'File_size' => 'Tama&ntilde;o del archivo',
	'Not_available' => 'No disponible!',

	'Mirrors' => 'Espejos',
	'Mirrors_explain' => 'Aqu&iacute; puede a&ntilde;adir o corregir espejos para este archivo, aseg&uacute;rese de verificar toda la informaci&oacute;n porque el archivo ser&aacute; procesado por la base de datos',
	'Click_here_mirrors' => 'Pulse aqu&iacute; para a&ntilde;adir espejos',
	'Mirror_location' => 'Localizaci&oacute;n del espejo',
	'Add_new_mirror' => 'A&ntilde;adir nuevo espejo',

//User Upload
	'User_upload' => 'Subir archivo',

// License
	'License' => 'Acuerdo de licencia',
	'Licensewarn' => 'Usted debe estar de acuerdo con esta licencia para descargar',
	'Iagree' => 'Acepto el acuerdo',
	'Dontagree' => 'No acepto el acuerdo',

// Search
	'Search' => 'Buscar',
	'Search_for' => 'Buscar',
	'Results' => 'Resultados para',
	'No_matches' => 'Perd&oacute;n, no se encontraron resultados',
	'Matches' => 'Resultados encontrados para',
	'All' => 'Todas las categor&iacute;as',
	'Choose_cat' => 'Elija categor&iacute;a:',
	'Include_comments' => 'Incluir comentarios',
	'Submiter' => 'Presentado por',

// Statistics
	'Statistics' => 'Estad&iacute;sticas',
	'Select_chart_type' => 'Seleccione el tipo de carta',
	'Bars' => 'Barras',
	'Lines' => 'L&iacute;neas',
	'Area' => '&Aacute;rea',
	'Linepoints' => 'L&iacute;nea de puntos',
	'Points' => 'Puntos',
	'Chart_header' => 'Estado de los archivos - Archivos a&ntilde;adidos a la base de datos cada mes',
	'Chart_legend' => 'Archivos',
	'X_label' => 'Meses',
	'Y_label' => 'N&uacute;mero de archivos',

// Rate
	'Rate' => 'Archivo votado',
	'Rerror' => 'Lo sentimos, ya ha votado a este archivo.',
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
	'Emailinfo' => 'Si quiere que un amigo conozca este archivo, puede completar este formulario, y se le enviar&aacute; a su amigo un e-mail con la informaci&oacute;n de los archivos. <br />Los campos marcados con asterisco * son obligatorios.',
	'Yname' => 'Su nombre',
	'Yemail' => 'Su direcci&oacute;n de correo',
	'Fname' => 'Nombre de los amigos',
	'Femail' => 'Direcci&oacute;n de correo de sus amigos',
	'Esub' => 'Sujeto de correo',
	'Etext' => 'Texto de correo',
	'Defaultmail' => 'Creo que usted estar&aacute; interesado en descargar este archivo localizado en ',
	'Semail' => 'Env&iacute;e coreo',
	'Econf' => 'Su correo se ha enviado.',

// Comments
	'Comments' => 'Comentarios', 
	'Comments_title' => 'T&iacute;tulo del comentario',
	'Comment_subject' => 'Asunto del comentario', 
	'Comment' => 'Comentario', 
	'Comment_explain' => 'Use el formulario para dar su opini&oacute;n acerca de este archivo.', 
	'Comment_add' => 'Agregar comentario', 
	'Comment_delete' => 'Eliminar', 
	'Comment_posted' => 'Su comentario ha sido agregado', 
	'Comment_deleted' => 'El comentario seleccionado ha sido eliminado', 
	'Comment_desc' => 'T&iacute;tulo', 
	'No_comments' => 'No se han publicado comentarios.',
	'Links_are_ON' => 'Enlaces est&aacute;n <u>ON</u>',
	'Links_are_OFF' => 'Enlaces est&aacute;n <u>OFF</u>',
	'Images_are_ON' => 'Im&aacute;genes est&aacute;n <u>ON</u>',
	'Images_are_OFF' => 'Im&aacute;genes est&aacute;n <u>OFF</u>',
	'Check_message_length' => 'Comprobar longitud del mensaje', 
	'Msg_length_1' => 'Su mensaje es ', 
	'Msg_length_2' => ' caracteres de largo.', 
	'Msg_length_3' => 'Tiene ', 
	'Msg_length_4' => ' caracteres disponibles.',
	'Msg_length_5' => 'Hay ', 
	'Msg_length_6' => ' caracteres se usaron.',

// Download
	'Directly_linked' => 'No puede descargar este archivo directamente desde otro sitio',

//Permission
	'Sorry_auth_view' => 'Disculpe, pero s&oacute;lo %s puede ver archivos y sub categor&iacute;as en esta categor&iacute;a.',
	'Sorry_auth_file_view' => 'Disculpe, pero s&oacute;lo %s puede ver este archivo en esta categor&iacute;a.',
	'Sorry_auth_upload' => 'Disculpe, pero s&oacute;lo %s puede subir archivos en esta categor&iacute;a.',
	'Sorry_auth_download' => 'Disculpe, pero s&oacute;lo %s puede descargar archivos en esta categor&iacute;a.',
	'Sorry_auth_rate' => 'Disculpe, pero s&oacute;lo %s puede puntuar archivos en esta categor&iacute;a.',
	'Sorry_auth_view_comments' => 'Disculpe, pero s&oacute;lo %s puede ver comentarios en esta categor&iacute;a.',
	'Sorry_auth_post_comments' => 'Disculpe, pero s&oacute;lo %s puede publicar comentarios en esta categor&iacute;a.',
	'Sorry_auth_edit_comments' => 'Disculpe, pero s&oacute;lo %s puede editar comentarios en esta categor&iacute;a.',
	'Sorry_auth_delete_comments' => 'Disculpe, pero s&oacute;lo %s puede eliminar comentarios en esta categor&iacute;a.',
// MX
	'Sorry_auth_edit' => 'Disculpe, pero no puede editar archivos en esta categor&iacute;a.',
	'Sorry_auth_delete' => 'Disculpe, pero no puede eliminar archivos de esta categor&iacute;a.',
	'Sorry_auth_mcp' => 'Disculpe, pero no puede moderar esta categor&iacute;a.',
	'Sorry_auth_approve' => 'Disculpe, pero no puede aprobar archivos en esta categor&iacute;a.',

// General
	'Category' => 'Categor&iacute;a',
	'Error_no_download' => 'No existe el archivo seleccionado',
	'Options' => 'Opciones',
	'Click_return' => 'Pulse %saqu&iacute;%s para volver a la p&aacute;gina previa',
	'Click_here' => 'Pulse aqu&iacute;',
	'never' => 'Nunca',
	'pafiledb_disable' => 'La descarga de la base de datos no est&aacute; disponible',
	'jump' => 'Seleccione una categor&iacute;a',
	'viewall_disabled' => 'Esta caracter&iacute;stica est&aacute; inhabilitada por el administrador.',
	'New_file' => 'Nuevo archivo',
	'No_new_file' => 'Archivo viejo',
	'None' => 'Ninguno',
	'No_file' => 'No hay archivos',
	'View_latest_file' => 'Ver el &uacute;ltimo archivo',

// Toplists mx blocks
	'Recent_Public_Files' => '&Uacute;ltimas descargas',
	'Random_Public_Files' => 'Descargas aleatorias',
	'Toprated_Public_Files' => 'M&aacute;s valoradas',
	'Most_Public_Files' => 'M&aacute;s descargadas',
	'File_Title' => 'T&iacute;tulo',
	'File_Desc' => 'Descripci&oacute;n',
	'Rating' => 'Votos',
	'Dls' => 'Descargas',

// MX Addon
	'Deletefile' => 'Borrar archivo',
	'Editfile' => 'Editar archivo',
	'pa_MCP' => '[PC moderator]',
	'Click_return_not_validated' => 'Pulse %saqu&iacute;%s para volver a la p&aacute;gina anterior',
	)
);

$lang['Stats_text'] = "Hay {total_files} archivos en {total_categories} categor&iacute;as<br />";
$lang['Stats_text'] .= "Han habido {total_downloads} descargas totales<br /><br />";
$lang['Stats_text'] .= "El archivo m&aacute;s nuevo es <a href={u_newest_file}>{newest_file}</a><br />";
$lang['Stats_text'] .= "El archivo m&aacute;s antiguo es <a href={u_oldest_file}>{oldest_file}</a><br /><br />";
$lang['Stats_text'] .= "El promedio de votos de archivos es {average}/10<br />";
$lang['Stats_text'] .= "El archivo m&aacute;s popular basado en los votos es <a href={u_popular}>{popular}</a> con un valor de {most}/10<br />";
$lang['Stats_text'] .= "El archivo menos popular basado en los votos es <a href={u_lpopular}>{lpopular}</a> con un valor de {least}/10<br /><br />";
$lang['Stats_text'] .= "El promedio de descargas de cada archivo es {avg_dls}<br />";
$lang['Stats_text'] .= "El archivo m&aacute;s popular basado en las descargas es <a href={u_most_dl}>{most_dl}</a> con {most_no} descargas<br />";
$lang['Stats_text'] .= "El archivo menos popular basado en las descargas es <a href={u_least_dl}>{least_dl}</a> con {least_no} descargas<br />";

?>