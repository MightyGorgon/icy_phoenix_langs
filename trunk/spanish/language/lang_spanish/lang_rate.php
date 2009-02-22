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
* Nivisec.com (support@nivisec.com)
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
	'Already_Rated' => 'Usted ha valorado: <b>%d</b>', //%d = their rate
	'Rate_Stats' => '<b>%.2f</b>', //%.2f = average, %d = min, %d = max, %d # of ratings
	'Rate' => 'Valorar',
	'Choose_Rating' => 'Elegir valoración',
	'Topic_Rated' => 'El tema ha sido valorado correctamente.',
	'Anon_Rate_Disabled' => 'A los invitados no se les permite valorar temas',
	'Not_Authorized_To_Rate' => 'No está autorizado a valorar este tema',
	'Change_Rating' => 'Cambiar valoración',
	'View_Details' => '<a href="%s" title="Ver detalles">Ver información detallada</a>', //%s = detailed URL
	'View_Details_2' => '<a href="%s" title="Ver detalles">Ver información detallada</a>', //%s = detailed URL
	'Username_Gave_Rate_of_Max' => '<b>%s</b> han valorado este mensaje <b>%d</b> de un posible de <b>%d</b> en %s.', //%s = username, %d = user rate, %d = max rate, %s = date with create_date()
	'Detailed_Rating' => 'Valoración detallada',
	'Details_For_Topic' => 'Detalles de valoración de&nbsp;&raquo;&nbsp;<b>%s</b>', //%s = topic title
	'Or_Someone_From_IP' => '(IP guardada)', // makes it smaller for smaller res screens
	'Disable_Rating_ON' => 'Deshabilitar valoraciones en este mensaje',
	'Summary' => 'Resumen de valoraciones: ',
	'Topic_Rating_Details' => 'Detalles de valoración del tema',

	'Anonymous' => 'Invitado',
	'All_Forums' => 'Todos los foros',

	'Max_Rate' => 'Valoración máxima',
	'User_Rate' => 'Valoración de usuario',
	'Rate_Date' => 'Fecha de valoración',
	'Rate_Time' => 'Hora de valoración',
	'Rate_Order' => 'Número de valoración',

	'No_Topics_Rated' => 'Ningún tema ha sido valorado',
	'Top_Topics' => 'Top %d de temas valorados', //%d = number of topics
	'Top_Topics_For_Forum' => 'Top %d temas valorados por %s',//%d = number of topics, %s is forum name
	'For_Forum' => 'Solamente %s', //%s = forum name
	'Last_Rated' => 'Última valoración',
	'Number_of_Rates' => '# de valoraciones',
	'Rating' => 'Valorar',
	'Min' => 'Mín.',
	'Max' => 'Máx.',
	'Min_Rating' => 'Valoración mínima',
	'By_Forum' => 'Lista por foro',
	'Details_For_Topic' => '<b>%s</b>', //%s = topic title

//admin
	'Status' => 'Fecha y hora',
	'Auth_Description' => 'Descripciones',
	'NONE' => 'La valoración está desactivada: no se mostrará en los temas ninguna barra de valoración.',
	'ALL' => 'Todos los usuarios, tanto registrados como invitados, pueden valorar los temas.',
	'REG' => 'Sólo los usuarios registrados pueden valorar, pero los invitados pueden ver la barra.',
	'PRIVATE' => 'Sólo los usuarios registrados pueden ver la barra y valorar.',
	'MOD' => 'Sólo los administradores y moderadores pueden ver la barra y valorar.',
	'ADMIN' => 'Todos pueden ver la barra, pero sólo los administradores pueden valorar.',
	'Allow_Poster_To_Disable_Rating' => 'Permitir al autor deshabilitar la posibilidad de que su tema sea valorado.',
	'Allow_Detailed_Ratings_Page' => 'Permitir a los usuarios ver la página que detalla las valoraciones.',
	'Max_Rating' => 'Máximo de valoraciones permitidas (1 para máximo)',
	'Allow_Users_To_ReRate' => 'Permitir a los usuarios cambiar su valoración',
	'Check_Anon_IP' => 'Comprobar la IP del usuario invitado al valorar, para ver si había valorado ya',
	'Anon_Rate_ID' => 'El siguiente rango IP de usuario anonimo.<br />No cambie esto, a no ser que realmente sepa qué hace y realmente lo necesite.<br />Ponerlo a un valor mas alto del que esté fijado es una mala idea',
	'Big_Page_Number' => 'Número de temas a mostrar en la página separada de valoraciones (si elige utilizarla)',
	'Main_Page_Number' => 'Número de temas a mostrar en la página principal (si elige utilizarla)',
	'Header_Page_Number' => 'Número de temas a mostrar en la página de encabezado (si elige utilizarla)',
	'Mass_Update' => 'Subida masiva',
	'Purge_Old_Ratings' => 'Purgar valoraciones antiguas',
	'Min_Rates' => 'Número mínimo de valoraciones que un tema debe tener antes de ser mostrado en las listas clasificadas superiores',
	'Purge' => 'Purgar',
	'Purged' => 'Purgado',
	'Purge_Desc' => 'Limpiar las valoraciones de aquellos temas que se hayan suprimido por alguna razón.',
	'Clear' => 'Limpiar',
	'Clear_Desc' => 'Limpiar <b>TODAS</b> las valoraciones hechas. Hágalo sólo si tiene problemas inusuales o si, verdadramente, quiere <b>borrar todas</b> las valoraciones hechas a los temas de su foro. Pulse en la caja, y escriba <b>SÍ</b>.',
	'Complete' => 'Completa',
	'Authorization' => 'Autorización',
	'rate_average' => 'Media de valoración',
	'rate_minimum' => 'Valoración mínima',
	'rate_maximum' => 'Valoración máxima',
	'Number_of_Rates' => 'Número de valoraciones',
	'Rank2' => '#',
	'Rating' => 'Valoración',

//Error Messages
	'Database_Error' => 'Error en base de datos',
	'Error_Dbase_Config' => 'Error que recupera o que pone al día datos de la configuración.',
	'Error_Dbase_Ratings' => 'Error que recupera o que pone al día datos de las valoraciones.',
	'Error_Dbase_Auth' => 'Error que recupera o que pone al día datos de la autorización de las valoraciones.',
	'No_Topic_ID' => 'No se especificó ningún tema para obtener los detalles.',
	)
);

?>