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
	'Sudoku_Version' => 'Versión MOD Sudoku %s &copy; Majorflam 2005 - último paquete de juego instalado: %s',
	'suduko_blank_tile' => 'Pulse para introducir número',
	'suduko_user_tile' => 'Pulse para editar',
	'sudoku_no_tile' => 'No se especificó título',
	'sudoku_input_num' => 'Seleccione el número que desea insertar en la casilla.',
	'sudoku_no_number' => '¿Debe seleccionar un número para colocar en la casilla!',
	'sudoku_instructions' => 'Ponga un número del 1 al 9 en cada casilla vacía, de modo que cada fila, cada columna y cada bloque 3 x 3 contenga todos los números de 1 a 9. Inicialmente, se le dan ya algunos números para ayudarle: aparecen subrayados. Pulsee encima de una casilla para insertar un número. Si comete un error, simplemente pulse en el número e inserte uno nuevo.',
	'sudoku_invalid_number' => 'Ha introducido un numero inválido',
	'sudoku_howto' => 'Cómo jugar',
	'sudoku_stats' => 'Estadísticas',
	'sudoku_statistics' => 'Las estadísticas almacenan sus partidas y las de otros usuarios. Se mostrará el top 10 de mejores jugadores. Cada vez que inserta un número gana 10 puntos. Pero, ¿cuidado!: cada vez que cambie un numero, perderá 15 puntos. Y si limpia el tablero empezará el juego otra vez con 200 puntos menos.',
	'sudoku_game_info' => 'Paquete de juego:<b>%s</b> || Juego número:<b>%s</b> || Nivel:<b>%s</b>',
	'sudoku_player_stats' => 'Sus estadísticas',
	'sudoku_leaderboard' => 'Sudoku TOP 10',
	'sudoku_played' => 'Total partidas jugadas',
	'sudoku_points' => 'Total puntos ganados',
	'sudoku_these_points' => 'Puntos - juego actual',
	'sudoku_lead_played' => 'Partidas jugadas',
	'sudoku_lead_points' => 'Puntos',
	'sudoku_level_easy' => 'Fácil',
	'sudoku_level_medium' => 'Medio',
	'sudoku_level_hard' => 'Difícil',
	'sudoku_level_very_hard' => 'Muy difícil',
	'sudoku_confirm_reset' => 'Limpiar tablero',
	'sudoku_confirm_reset_text' => '&iquest;Está seguro de que desea limpiar este tablero? Si es así, empezará la tabla con 200 puntos menos.',
	'sudoku_reset_cancelled' => 'Limpieza del tablero cancelada.',
	'sudoku_lead_current_game' => 'Jugando ahora',
	'sudoku_current_game_text' => 'Paquete:<b>%s ~ </b>Juego <b>#%s</b>',
	'sudoku_nomore_grids' => '¿Enhorabuena! Ha completado todas las tablas disponibles. Por favor, contacte con el administrador del sitio para actualizar con mas tablas el juego.',
	'sudoku_load_new' => '¿Tabla finalizada satisfactoriamente! Cargando nueva tabla...',
	'sudoku_wrong_numbers' => 'Ha terminado la tabla, pero algunos números insertados son incorrectos. La tabla se cargará de nuevo y los números incorrectos se borrarán. Esto le costará 20 puntos por cada número incorrecto. Hay %s numeros insertados incorrectos, y esto le costará %s puntos en total.<br />&nbsp;<br />Cargando tabla...',
	'sudoku_reset_confirmed' => 'Su tabla se está actualizando. Cargando...',
	'sudoku_no_change_starter' => '¿No puede cambiar los números iniciales!',
	'sudoku_no_url_tricks' => 'Por favor: ¿trucos web, no!.',
	'sudoku_place' => '¿Sitio!',
	'sudoku_reset_grid' => 'Limpiar tabla',
	'sudoku_who_is_online' => 'Quién esta jugando a sudoku',
	'sudoku_total_online' => 'En total, <b>%s</b> usuarios han jugado a sudoku en las últimas 24 horas:',
	'sudoku_logged_in_list' => 'Usuarios jugando en este momento a sudoku:',
	'sudoku_online_explain' => 'Datos basados en usuarios jugando a sudoku en los últimos 5 minutos.',
	'sudoku_game_stats' => 'En total, <b>%s</b> usuarios han jugado a sudoku en este sitio. Han jugado <b>%s</b> juegos completos',
	'sudoku_no_blank_starter' => 'No puede borrar un numero que no existe.',
	'sudoku_view_all' => 'Ver todo',
	'sudoku_buy_number' =>'Comprar número',
	'sudoku_confirm_buy_text' => 'Ha elegido comprar un número. La casilla en blanco de su tabla será elegida al azar, y se insertará un número correcto. Esta acción le costará 30 puntos del total de su tabla. &iquest;Está seguro de que desea comprar un número?',
	'sudoku_buy_cancelled' => 'Ha elegido no comprar un número en esta ocasión.',
	'sudoku_ran_error' => 'Ha ocurrido un error mientras se insertaba un número. Por favor, inténtelo de nuevo. Si este problema persiste, por favor, contacte con el administrador del sitio.',
	'sudoku_ran_success' => 'El número se ha elegido al azar, y se ha insertado en su tabla. Para mayor claridad, lo verá destacado.',
	'sudoku_resynch_success' => 'La sincronización de las estadísticas se ha completado. Redireccionando...',
	'sudoku_resynch' => 'Sincronizar',
// for ver 1.0.5
	'sudoku_reset_game' => 'Actualizar juego sudoku',
	'sudoku_reset_game_text' => '&iquest;Está seguro de que quiere actualizar el juego sudoku? Esto borrará todos los datos del jugador de la base de datos, y empezará el juego de nuevo como si se acabara de instalar. Por favor, observe que su paquete de juegos permanecerá sin tocar, así no habrá ninguna necesidad de reinstalarlo. Esta acción no puede ser deshecha.',
	'sudoku_reset_game_cancelled' => 'Actualización del juego cancelada. No se ha efectuado ningún cambio.',
	'sudoku_rest_game_success' => 'El juego sudoku se actualizará ahora.',
	)
);

?>