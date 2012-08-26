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
	'Choose_Rating' => 'Elegir valoraci&oacute;n',
	'Topic_Rated' => 'El tema ha sido valorado correctamente.',
	'Anon_Rate_Disabled' => 'A los invitados no se les permite valorar temas',
	'Not_Authorized_To_Rate' => 'No est&aacute; autorizado a valorar este tema',
	'Change_Rating' => 'Cambiar valoraci&oacute;n',
	'View_Details' => '<a href="%s" title="Ver detalles">Ver informaci&oacute;n detallada</a>', //%s = detailed URL
	'View_Details_2' => '<a href="%s" title="Ver detalles">Ver informaci&oacute;n detallada</a>', //%s = detailed URL
	'Username_Gave_Rate_of_Max' => '<b>%s</b> han valorado este mensaje <b>%d</b> de un posible de <b>%d</b> en %s.', //%s = username, %d = user rate, %d = max rate, %s = date with create_date()
	'Detailed_Rating' => 'Valoraci&oacute;n detallada',
	'Details_For_Topic' => 'Detalles de valoraci&oacute;n de&nbsp;&raquo;&nbsp;<b>%s</b>', //%s = topic title
	'Or_Someone_From_IP' => '(IP guardada)', // makes it smaller for smaller res screens
	'Disable_Rating_ON' => 'Deshabilitar valoraciones en este mensaje',
	'Summary' => 'Resumen de valoraciones: ',
	'Topic_Rating_Details' => 'Detalles de valoraci&oacute;n del tema',

	'Anonymous' => 'Invitado',
	'All_Forums' => 'Todos los foros',

	'Max_Rate' => 'Valoraci&oacute;n m&aacute;xima',
	'User_Rate' => 'Valoraci&oacute;n de usuario',
	'Rate_Date' => 'Fecha de valoraci&oacute;n',
	'Rate_Time' => 'Hora de valoraci&oacute;n',
	'Rate_Order' => 'N&uacute;mero de valoraci&oacute;n',

	'No_Topics_Rated' => 'Ning&uacute;n tema ha sido valorado',
	'Top_Topics' => 'Top %d de temas valorados', //%d = number of topics
	'Top_Topics_For_Forum' => 'Top %d temas valorados por %s',//%d = number of topics, %s is forum name
	'For_Forum' => 'Solamente %s', //%s = forum name
	'Last_Rated' => '&Uacute;ltima valoraci&oacute;n',
	'Number_of_Rates' => '# de valoraciones',
	'Rating' => 'Valorar',
	'Min' => 'M&iacute;n.',
	'Max' => 'M&aacute;x.',
	'Min_Rating' => 'Valoraci&oacute;n m&iacute;nima',
	'By_Forum' => 'Lista por foro',
	'Details_For_Topic' => '<b>%s</b>', //%s = topic title

//admin
	'Status' => 'Fecha y hora',
	'Auth_Description' => 'Descripciones',
	'NONE' => 'La valoraci&oacute;n est&aacute; desactivada: no se mostrar&aacute; en los temas ninguna barra de valoraci&oacute;n.',
	'ALL' => 'Todos los usuarios, tanto registrados como invitados, pueden valorar los temas.',
	'REG' => 'S&oacute;lo los usuarios registrados pueden valorar, pero los invitados pueden ver la barra.',
	'PRIVATE' => 'S&oacute;lo los usuarios registrados pueden ver la barra y valorar.',
	'MOD' => 'S&oacute;lo los administradores y moderadores pueden ver la barra y valorar.',
	'ADMIN' => 'Todos pueden ver la barra, pero s&oacute;lo los administradores pueden valorar.',
	'Allow_Poster_To_Disable_Rating' => 'Permitir al autor deshabilitar la posibilidad de que su tema sea valorado.',
	'Allow_Detailed_Ratings_Page' => 'Permitir a los usuarios ver la p&aacute;gina que detalla las valoraciones.',
	'Max_Rating' => 'M&aacute;ximo de valoraciones permitidas (1 para m&aacute;ximo)',
	'Allow_Users_To_ReRate' => 'Permitir a los usuarios cambiar su valoraci&oacute;n',
	'Check_Anon_IP' => 'Comprobar la IP del usuario invitado al valorar, para ver si hab&iacute;a valorado ya',
	'Anon_Rate_ID' => 'El siguiente rango IP de usuario an&oacute;nimo.<br />No cambie esto, a no ser que realmente sepa qu&eacute; hace y realmente lo necesite.<br />Ponerlo a un valor mas alto del que est&eacute; fijado es una mala idea',
	'Big_Page_Number' => 'N&uacute;mero de temas a mostrar en la p&aacute;gina separada de valoraciones (si elige utilizarla)',
	'Main_Page_Number' => 'N&uacute;mero de temas a mostrar en la p&aacute;gina principal (si elige utilizarla)',
	'Header_Page_Number' => 'N&uacute;mero de temas a mostrar en la p&aacute;gina de encabezado (si elige utilizarla)',
	'Mass_Update' => 'Subida masiva',
	'Purge_Old_Ratings' => 'Purgar valoraciones antiguas',
	'Min_Rates' => 'N&uacute;mero m&iacute;nimo de valoraciones que un tema debe tener antes de ser mostrado en las listas clasificadas superiores',
	'Purge' => 'Purgar',
	'Purged' => 'Purgado',
	'Purge_Desc' => 'Limpiar las valoraciones de aquellos temas que se hayan suprimido por alguna raz&oacute;n.',
	'Clear' => 'Limpiar',
	'Clear_Desc' => 'Limpiar <b>TODAS</b> las valoraciones hechas. H&aacute;galo s&oacute;lo si tiene problemas inusuales o si, verdadramente, quiere <b>borrar todas</b> las valoraciones hechas a los temas de su foro. Pulse en la caja, y escriba <b>S&Iacute;</b>.',
	'Complete' => 'Completa',
	'Authorization' => 'Autorizaci&oacute;n',
	'rate_average' => 'Media de valoraci&oacute;n',
	'rate_minimum' => 'Valoraci&oacute;n m&iacute;nima',
	'rate_maximum' => 'Valoraci&oacute;n m&aacute;xima',
	'Number_of_Rates' => 'N&uacute;mero de valoraciones',
	'Rank2' => '#',
	'Rating' => 'Valoraci&oacute;n',

//Error Messages
	'Database_Error' => 'Error en base de datos',
	'Error_Dbase_Config' => 'Error que recupera o que pone al d&iacute;a datos de la configuraci&oacute;n.',
	'Error_Dbase_Ratings' => 'Error que recupera o que pone al d&iacute;a datos de las valoraciones.',
	'Error_Dbase_Auth' => 'Error que recupera o que pone al d&iacute;a datos de la autorizaci&oacute;n de las valoraciones.',
	'No_Topic_ID' => 'No se especific&oacute; ning&uacute;n tema para obtener los detalles.',
	)
);

?>