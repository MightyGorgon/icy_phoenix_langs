<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'BOTS' => 'Administrar robots',
	'BOTS_EXPLAIN' => '"Robots", "Ara&ntilde;as" o "Rastreadores" de agentes automatizados m&aacute;s com&uacute;nmente utilizados por los motores de b&uacute;squeda, para actualizar su bases de datos. Ya que rara vez hacen un uso adecuado de los per&iacute;odos de sesiones, y pueden falsear la cuenta de visitantes, aumentar la carga del servidor, y a veces, fallos en el &iacute;ndice de los sitios. Aqu&iacute; puede definir un tipo especial de usuario para superar estos problemas.',
	'BOT_ACTIVATE' => 'Activar',
	'BOT_ACTIVE' => 'Robot activo',
	'BOT_ACTIVE_EXPLAIN' => 'Puede especificar si el robot est&aacute; autorizado a navegar el sitio o no. Si se establece en no, el robot ser&aacute; expulsado del sitio.',
	'BOT_ADD' => 'A&ntilde;adir robot',
	'BOT_ADDED' => 'Nuevo robot a&ntilde;adido correctamente.',
	'BOT_AGENT' => 'Juego de agente',
	'BOT_AGENT_EXPLAIN' => 'Una cadena que concuerde con el agente del robot y navegador, las coincidencias parciales son permitidas.',
	'BOT_COLOR' => 'Color del robot',
	'BOT_COLOR_EXPLAIN' => 'C&oacute;digo HTML usado para mostrar el robot. Si esta vac&iacute;o, el nombre del robot ser&aacute; mostrado usando el color por defecto de robots.',
	'BOT_DEACTIVATE' => 'Desactivar',
	'BOT_DELETED' => 'Robot borrado correctamente.',
	'BOT_EDIT' => 'Editar robots',
	'BOT_EDIT_EXPLAIN' => 'Aqu&iacute; usted puede a&ntilde;adir o editar una entrada existente del robot. Usted puede definir una cadena de agente y/o una o m&aacute;s direcciones IP (o rangos de direcciones) para jugar. Tenga cuidado al definir las cadenas de agentes o direcciones de IP. Tambi&eacute;n puede especificar un estilo y lenguaje que el robot usar&aacute; cuando visite el foro. Esto puede hacer reducir el uso de ancho de banda mediante el establecimiento de un estilo sencillo para los robots. Recuerde establecer los permisos adecuados para el grupo especial de robots.',
	'BOT_LANG' => 'Lenguaje del robot',
	'BOT_LANG_EXPLAIN' => 'El lenguaje presentado al robot cuando navegue.',
	'BOT_LAST_VISIT' => '&Uacute;ltima visita',
	'BOT_IP' => 'Direcci&oacute;n IP del robot',
	'BOT_IP_EXPLAIN' => 'Juegos parciales est&aacute;n permitidos, separar direcciones con una coma.',
	'BOT_NAME' => 'Nombre del robot',
	'BOT_NAME_EXPLAIN' => 'Usado s&oacute;lo para su propia informaci&oacute;n.',
	'BOT_NAME_TAKEN' => 'El nombre ya est&aacute; en uso en su foro, y no puede ser usado por el robot.',
	'BOT_NEVER' => 'Nunca',
	'BOT_STYLE' => 'Estilo del robot',
	'BOT_STYLE_EXPLAIN' => 'El estilo usado para el foro, por el robot.',
	'BOTS_UPDATE' => 'Actualizar',
	'BOT_UPDATED' => 'Robot existente actualizado correctamente.',

	'BOT_COL_NAME' => 'Nombre',
	'BOT_COL_COLOR' => 'Color',
	'BOT_COL_AGENT' => 'Agente',
	'BOT_COL_IP' => 'IP',
	'BOT_COL_ACTIVE' => 'Activo',
	'BOT_COL_LAST_VISIT' => '&Uacute;ltima visita',
	'BOT_COL_COUNTER' => 'Contador',

	'CLICK_RETURN_BOTS' => 'Pulse %saqu&iacute;%s para volver a la administraci&oacute;n de robots',

	'ERR_BOT_ADD' => 'Usted no ha llenado todos los campos obligatorios, por favor, regrese y vuelva a intentarlo.',
	'ERR_BOT_AGENT_MATCHES_UA' => 'El agente de robot que ha suministrado es similar al que est&aacute; utilizando. Por favor, corrija el agente de este robot.',
	'ERR_BOT_NO_IP' => 'La direcci&oacute;n IP introducida es inv&aacute;lida o el nombre de servidor (hostname) no carga correctamente.',
	'ERR_BOT_NO_MATCHES' => 'Debe proporcionar al menos un agente o IP para este juego de robot.',

	'NO_BOTS' => 'No hay robots definidos.',
	'NO_BOT' => 'No se encontr&oacute; ning&uacute;n robot con la ID especificada.',
	'NO_BOT_GROUP' => 'No se puede encontrar el grupo especial de robots.',
	)
);

?>