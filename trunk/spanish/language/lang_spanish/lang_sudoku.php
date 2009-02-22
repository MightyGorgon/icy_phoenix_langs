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
	'Sudoku_Version' => 'Versi�n sudoku MOD %s &copy Majorflam 2005 - �ltimo paquete de juego instalado: %s',
	'suduko_blank_tile' => 'Pulse para introducir n�mero',
	'suduko_user_tile' => 'Pulse para editar',
	'sudoku_no_tile' => 'No se especific� titulo',
	'sudoku_input_num' => 'Seleccione el n�mero que desea insertar en la casilla.',
	'sudoku_no_number' => '�Debe seleccionar un n�mero para colocar en la casilla!',
	'sudoku_instructions' => 'Ponga un n�mero del 1 al 9 en cada casilla vac�a, de modo que cada fila, cada columna y cada bloque 3 x 3 contenga todos los n�meros de 1 a 9. Inicialmente, se le dan ya algunos n�meros para ayudarle: aparecen subrayados. Pulsee encima de una casilla para insertar un n�mero. Si comete un error, simplemente pulse en el n�mero e inserte uno nuevo.',
	'sudoku_invalid_number' => 'Ha introducido un numero inv�lido',
	'sudoku_howto' => 'C�mo jugar',
	'sudoku_stats' => 'Estad�sticas',
	'sudoku_statistics' => 'Las estad�sticas almacenan sus partidas y las de otros usuarios. Se mostrar� el top 10 de mejores jugadores. Cada vez que inserta un n�mero gana 10 puntos. Pero, �cuidado!: cada vez que cambie un numero, perder� 15 puntos. Y si limpia el tablero empezar� el juego otra vez con 200 puntos menos.',
	'sudoku_game_info' => 'Paquete de juego:<b>%s</b> || Juego n�mero:<b>%s</b> || Nivel:<b>%s</b>',
	'sudoku_player_stats' => 'Sus estad�sticas',
	'sudoku_leaderboard' => 'Sudoku TOP 10',
	'sudoku_played' => 'Total partidas jugadas',
	'sudoku_points' => 'Total puntos ganados',
	'sudoku_these_points' => 'Puntos - juego actual',
	'sudoku_lead_played' => 'Partidas jugadas',
	'sudoku_lead_points' => 'Puntos',
	'sudoku_level_easy' => 'F�cil',
	'sudoku_level_medium' => 'Medio',
	'sudoku_level_hard' => 'Dif�cil',
	'sudoku_level_very_hard' => 'Muy dif�cil',
	'sudoku_confirm_reset' => 'Limpiar tablero',
	'sudoku_confirm_reset_text' => '�Est� seguro de que desea limpiar este tablero? Si es as�, empezar� la tabla con 200 puntos menos.',
	'sudoku_reset_cancelled' => 'Limpieza del tablero cancelada.',
	'sudoku_lead_current_game' => 'Jugando ahora',
	'sudoku_current_game_text' => 'Paquete:<b>%s ~ </b>Juego <b>#%s</b>',
	'sudoku_nomore_grids' => '�Enhorabuena! Ha completado todas las tablas disponibles. Por favor, contacte con el administrador del sitio para actualizar con mas tablas el juego.',
	'sudoku_load_new' => '�Tabla finalizada satisfactoriamente! Cargando nueva tabla...',
	'sudoku_wrong_numbers' => 'Ha terminado la tabla, pero algunos n�meros insertados son incorrectos. La tabla se cargar� de nuevo y los n�meros incorrectos se borrar�n. Esto le costar� 20 puntos por cada n�mero incorrecto. Hay %s numeros insertados incorrectos, y esto le costar� %s puntos en total.<br />&nbsp;<br />Cargando tabla...',
	'sudoku_reset_confirmed' => 'Su tabla se est� actualizando. Cargando...',
	'sudoku_no_change_starter' => '�No puede cambiar los n�meros iniciales!',
	'sudoku_no_url_tricks' => 'Por favor: �trucos web, no!.',
	'sudoku_place' => '�Sitio!',
	'sudoku_reset_grid' => 'Limpiar tabla',
	'sudoku_who_is_online' => 'Qui�n esta jugando a sudoku',
	'sudoku_total_online' => 'En tootal, <b>%s</b> usuarios han jugado a sudoku en las �ltimas 24 horas:',
	'sudoku_logged_in_list' => 'Usuarios jugando en este momento a sudoku:',
	'sudoku_online_explain' => 'Datos basados en usuarios jugando a sudoku en los �ltimos 5 minutos.',
	'sudoku_game_stats' => 'En total, <b>%s</b> usuarios han jugado a sudoku en este sitio. Han jugado <b>%s</b> juegos completos',
	'sudoku_no_blank_starter' => 'No puede borrar un numero que no existe.',
	'sudoku_view_all' => 'Ver todo',
	'sudoku_buy_number' =>'Comprar n�mero',
	'sudoku_confirm_buy_text' => 'Ha elegido comprar un n�mero. La casilla en blanco de su tabla ser� elegida al azar, y se insertar� un n�mero correcto. Esta acci�n le costar� 30 puntos del total de su tabla. �Est� seguro de que desea comprar un n�mero?',
	'sudoku_buy_cancelled' => 'Ha elegido no comprar un n�mero en esta ocasi�n.',
	'sudoku_ran_error' => 'Ha ocurrido un error mientras se insertaba un n�mero. Por favor, int�ntelo de nuevo. Si este problema persiste, por favor, contacte con el administrador del sitio.',
	'sudoku_ran_success' => 'El n�mero se ha elegido al azar, y se ha insertado en su tabla. Para mayor claridad, lo ver� destacado.',
	'sudoku_resynch_success' => 'La sincronizaci�n de las estad�sticas se ha completado. Redireccionando...',
	'sudoku_resynch' => 'Sincronizar',
// for ver 1.0.5
	'sudoku_reset_game' => 'Actualizar juego sudoku',
	'sudoku_reset_game_text' => '�Est� seguro de que quiere actualizar el juego sudoku? Esto borrar� todos los datos del jugador de la base de datos, y empezar� el juego de nuevo como si se acabara de instalar. Por favor, observe que su paquete de juegos permanecer� sin tocar, as� no habra ninguna necesidad de reinstalarlo. Esta acci�n no puede ser deshecha.',
	'sudoku_reset_game_cancelled' => 'Actualizaci�n del juego cancelada. No se ha efectuado ning�n cambio.',
	'sudoku_rest_game_success' => 'El juego sudoku se actualizar� ahora.',
	)
);

?>