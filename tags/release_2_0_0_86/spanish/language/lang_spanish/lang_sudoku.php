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
* Majorflam - (majorflam@majormod.com) - (http://majormod.com)
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
	'Sudoku_Version' => 'Versi&oacute;n MOD Sudoku %s &copy; Majorflam 2005 - &Uacute;ltimo paquete de juego instalado: %s',
	'suduko_blank_tile' => 'Pulse para introducir n&uacute;mero',
	'suduko_user_tile' => 'Pulse para editar',
	'sudoku_no_tile' => 'No se especific&oacute; t&iacute;tulo',
	'sudoku_input_num' => 'Seleccione el n&uacute;mero que desea insertar en la casilla.',
	'sudoku_no_number' => '&iexcl;Debe seleccionar un n&uacute;mero para colocar en la casilla!',
	'sudoku_instructions' => 'Ponga un n&uacute;mero del 1 al 9 en cada casilla vac&iacute;a, de modo que cada fila, cada columna y cada bloque 3 x 3 contenga todos los n&uacute;meros de 1 a 9. Inicialmente, se le dan ya algunos n&uacute;meros para ayudarle: aparecen subrayados. Pulsee encima de una casilla para insertar un n&uacute;mero. Si comete un error, simplemente pulse en el n&uacute;mero e inserte uno nuevo.',
	'sudoku_invalid_number' => 'Ha introducido un numero inv&aacute;lido',
	'sudoku_howto' => 'C&oacute;mo jugar',
	'sudoku_stats' => 'Estad&iacute;sticas',
	'sudoku_statistics' => 'Las estad&iacute;sticas almacenan sus partidas y las de otros usuarios. Se mostrar&aacute; el top 10 de mejores jugadores. Cada vez que inserta un n&uacute;mero gana 10 puntos. Pero, &iexcl;cuidado!: cada vez que cambie un numero, perder&aacute; 15 puntos. Y si limpia el tablero empezar&aacute; el juego otra vez con 200 puntos menos.',
	'sudoku_game_info' => 'Paquete de juego:<b>%s</b> || Juego n&uacute;mero:<b>%s</b> || Nivel:<b>%s</b>',
	'sudoku_player_stats' => 'Sus estad&iacute;sticas',
	'sudoku_leaderboard' => 'Sudoku TOP 10',
	'sudoku_played' => 'Total partidas jugadas',
	'sudoku_points' => 'Total puntos ganados',
	'sudoku_these_points' => 'Puntos - juego actual',
	'sudoku_lead_played' => 'Partidas jugadas',
	'sudoku_lead_points' => 'Puntos',
	'sudoku_level_easy' => 'F&aacute;cil',
	'sudoku_level_medium' => 'Medio',
	'sudoku_level_hard' => 'Dif&iacute;cil',
	'sudoku_level_very_hard' => 'Muy dif&iacute;cil',
	'sudoku_confirm_reset' => 'Limpiar tablero',
	'sudoku_confirm_reset_text' => '&iquest;Est&aacute; seguro de que desea limpiar este tablero? Si es as&iacute;, empezar&aacute; la tabla con 200 puntos menos.',
	'sudoku_reset_cancelled' => 'Limpieza del tablero cancelada.',
	'sudoku_lead_current_game' => 'Jugando ahora',
	'sudoku_current_game_text' => 'Paquete:<b>%s ~ </b>Juego <b>#%s</b>',
	'sudoku_nomore_grids' => '&iexcl;Enhorabuena! Ha completado todas las tablas disponibles. Por favor, contacte con el administrador del sitio para actualizar con mas tablas el juego.',
	'sudoku_load_new' => '&iexcl;Tabla finalizada satisfactoriamente! Cargando nueva tabla...',
	'sudoku_wrong_numbers' => 'Ha terminado la tabla, pero algunos n&uacute;meros insertados son incorrectos. La tabla se cargar&aacute; de nuevo y los n&uacute;meros incorrectos se borrar&aacute;n. Esto le costar&aacute; 20 puntos por cada n&uacute;mero incorrecto. Hay %s numeros insertados incorrectos, y esto le costar&aacute; %s puntos en total.<br />&nbsp;<br />Cargando tabla...',
	'sudoku_reset_confirmed' => 'Su tabla se est&aacute; actualizando. Cargando...',
	'sudoku_no_change_starter' => '&iexcl;No puede cambiar los n&uacute;meros iniciales!',
	'sudoku_no_url_tricks' => 'Por favor: &iexcl;trucos web, no!.',
	'sudoku_place' => '&iexcl;Sitio!',
	'sudoku_reset_grid' => 'Limpiar tabla',
	'sudoku_who_is_online' => 'Qui&eacute;n esta jugando a sudoku',
	'sudoku_total_online' => 'En total, <b>%s</b> usuarios han jugado a sudoku en las &uacute;ltimas 24 horas:',
	'sudoku_logged_in_list' => 'Usuarios jugando en este momento a sudoku:',
	'sudoku_online_explain' => 'Datos basados en usuarios jugando a sudoku en los &uacute;ltimos 5 minutos.',
	'sudoku_game_stats' => 'En total, <b>%s</b> usuarios han jugado a sudoku en este sitio. Han jugado <b>%s</b> juegos completos',
	'sudoku_no_blank_starter' => 'No puede borrar un numero que no existe.',
	'sudoku_view_all' => 'Ver todo',
	'sudoku_buy_number' =>'Comprar n&uacute;mero',
	'sudoku_confirm_buy_text' => 'Ha elegido comprar un n&uacute;mero. La casilla en blanco de su tabla ser&aacute; elegida al azar, y se insertar&aacute; un n&uacute;mero correcto. Esta acci&oacute;n le costar&aacute; 30 puntos del total de su tabla. &iquest;Est&aacute; seguro de que desea comprar un n&uacute;mero?',
	'sudoku_buy_cancelled' => 'Ha elegido no comprar un n&uacute;mero en esta ocasi&oacute;n.',
	'sudoku_ran_error' => 'Ha ocurrido un error mientras se insertaba un n&uacute;mero. Por favor, int&eacute;ntelo de nuevo. Si este problema persiste, por favor, contacte con el administrador del sitio.',
	'sudoku_ran_success' => 'El n&uacute;mero se ha elegido al azar, y se ha insertado en su tabla. Para mayor claridad, lo ver&aacute; destacado.',
	'sudoku_resynch_success' => 'La sincronizaci&oacute;n de las estad&iacute;sticas se ha completado. Redireccionando...',
	'sudoku_resynch' => 'Sincronizar',
// for ver 1.0.5
	'sudoku_reset_game' => 'Actualizar juego sudoku',
	'sudoku_reset_game_text' => '&iquest;Est&aacute; seguro de que quiere actualizar el juego sudoku? Esto borrar&aacute; todos los datos del jugador de la base de datos, y empezar&aacute; el juego de nuevo como si se acabara de instalar. Por favor, observe que su paquete de juegos permanecer&aacute; sin tocar, as&iacute; no habr&aacute; ninguna necesidad de reinstalarlo. Esta acci&oacute;n no puede ser deshecha.',
	'sudoku_reset_game_cancelled' => 'Actualizaci&oacute;n del juego cancelada. No se ha efectuado ning&uacute;n cambio.',
	'sudoku_rest_game_success' => 'El juego sudoku se actualizar&aacute; ahora.',
	)
);

?>