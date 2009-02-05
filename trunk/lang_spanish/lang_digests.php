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
* Mark D. Hamill (mhamill@computer.org)
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
// This block goes as default text in the emailed digest (mail_digests.php)
	'digest_introduction' => 'Como usted solicitó, aquí está el resumen de los últimos mensajes enviados a los foros de ' . $board_config['sitename'] . 'Por favor, puede entrar en la discusión',
	'digest_from_text_name' => $board_config['sitename'] . ' robot de resumen',
	'digest_from_email_address' => $board_config['board_email'],
	'digest_subject_line' => $board_config['sitename'] . ' resumen',
	'digest_disclaimer_html' => "\n" . 'Este resumen se está enviando a los usuarios registrados de los foros de <a href="' . DIGEST_SITE_URL . '">' . $board_config['sitename'] . '</a> y solamente porque usted lo solicito explícitamente. ' . $board_config['sitename'] . ' es completamente gratuito. Su dirección de correo nunca será entregada a terceras partes. Vea nuestras <a href="' . DIGEST_SITE_URL . 'faq.' . PHP_EXT . '">FAQ</a> para más información sobre nuestra política de privacidad. Puede cambiar o borrar su suscripción, identificandose en ' . $board_config['sitename'] . ' en la <a href="' . DIGEST_SITE_URL . 'digests.' . PHP_EXT . '">Página de resúmenes</a> (debe estar identificado para cambiar sus ajustes de resumen.) Si tiene alguna pregunta sobre el formato de este resumen, por favor, contacte con el <a href="mailto:' . $board_config['board_email'] . '">' . $board_config['sitename'] . ' administrador</a>.',
	'digest_disclaimer_text' => "\n" . 'Este resumen se está enviando a los usuarios registrados de los foros de ' . $board_config['sitename'] . ' y solamente porque usted lo solicito explícitamente. ' . $board_config['sitename'] . ' es completamente gratuito. Su dirección de correo nunca sera entregada a terceras partes. Vea nuestras FAQ para más información sobre nuestra política de privacidad. Puede cambiar o borrar su suscripción, identificandose en ' . $board_config['sitename'] . ' en la página de resumenes (debe estar identificado para cambiar sus ajustes de resumen.) Si tiene alguna pregunta sobre el formato de este resumen, por favor contante con el ' . $board_config['board_email'] . '.',
	'digest_forum' => 'Foro: ',
	'digest_topic' => 'Tema: ',
	'digest_link' => 'Enlace',
	'digest_post_time' => 'Fecha del envío', 
	'digest_author' => 'Autor',
	'digest_message_excerpt' => 'Extracto del mensaje',
	'digest_posted_by' => 'Enviado por ',
	'digest_posted_at' => ' en ',
	'digest_forums_message_digest' => 'Mensaje de resumen de los foros', // used in <head> tag
	'digest_salutation' => 'Apreciado ',
	'digest_your_digest_options' => 'Sus opciones de resumen:',
	'digest_format' => 'Formato:',
	'digest_show_message_text' => 'Mostrar texto del mensaje:',
	'digest_show_my_messages' => 'Mostrar mis mensajes:',
	'digest_frequency' => 'Frecuencia de resumen:',
	'digest_show_only_new_messages' => 'Mostrar sólo los mensajes nuevos desde la última vez que se identifico:',
	'digest_send_if_no_new_messages' => 'Enviar resumen sin ningún mensaje nuevo:',
	'digest_period_24_hrs' => '24 horas',
	'digest_period_1_week' => '1 semana',
	'digest_no_new_messages' => 'No hay nuevos mensajes en los foros que selecciono.',
	'digest_message_size' => 'Caracteres máximos por mensaje en el resumen:',
	'digest_summary' => 'Sumario del resumen',
	'digest_a_total_of' => 'Un total de ',
	'digest_were_emailed' => 'Resúmenes han sido enviados por correo.',
	'digest_server_date' => 'Fecha del servidor:',
	'digest_server_hour' => 'Hora del servidor:',
	'digest_server_time_zone' => 'Zona horaria del servidor:',
	'digest_or' => 'o',
	'digest_a_digest_containing' => 'El resumen contiene',
	'digest_posts_was_sent_to' => 'mensajes fueron enviados a',

// This block goes on the digest settings user interface page (digests.php)
	'digest_page_title' => 'Resumen',
	'digest_explanation' => 'Esta lista de correo es, basicamente, un e-mail enviado al usuario con los mensajes enviados a los foros, y que usted recibirá periodicamente. Los resúmenes pueden ser enviados diaria o semanalmente, en la hora del día que usted seleccione. Puede especificar los foros del sitio de los que quiere resúmenes, o puede elegir recibir todos los mensajes de todos los foros a los que tenga acceso.<br /><br />' . "\n" . 'Considerando la politica de privacidad, los correos no contienen "SPAM", ni su dirección de correo será usada de ninguna forma ni remitida a terceras personas. Por supuesto, puede cancelar en cualquier momento su cuenta, simplemente volviendo a esta página. Muchos usuarios encuentran estos resúmenes muy útiles, desde aquí le animamos a que los pruebe!' . "\n",
	'digest_wanted' => '<b>Tipo de resumen deseado:</b><br />(Los resúmenes semanales seran enviados el domingo)',
	'digest_none' => 'Ninguno (sin suscripción)',
	'digest_daily' => 'Diariamente',
	'digest_weekly' => 'Semanalmente',
	'digest_format_short' => 'Formato del resumen:',
	'digest_format' => '<b>Formato de resumen:</b><br />(se recomienda HTML a menos que su cliente de correo no pueda mostrar HTML)',
	'digest_html' => 'HTML',
	'digest_text' => 'Texto',
	'digest_excerpt' => '<b>Mostrar extracto del mensaje:</b>',
	'digest_yes' => 'Sí',
	'digest_no' => 'No',
	'digest_l_show_my_messages' => '<b>Mostrar mis mensajes en el resumen:</b>',
	'digest_l_show_new_only' => '<b>Mostrar sólo los mensajes nuevos:</b><br />(Esto filtrará cualquier mensaje enviado antes de la fecha y de la hora en que visitó por última vez el foro.)',
	'digest_send_if_no_msgs' => '<b>Enviar un resumen si no se envió ningún mensaje nuevo:</b>',
	'digest_hour_to_send' => '<b>Hora del día para enviar el resumen:</b><br />(Esta hora se basa en la zona horaria fijada en su perfil. Si cambia su zona horaria del perfil y quisiera que los resúmenes llegaran al mismo tiempo del día, entonces cambie este valor también.)',
	'digest_hour_to_send_short' => 'Hora del envío del resumen (basado en la zona horaria de su perfil):',
	'digest_midnight' => 'Media noche',
	'digest_1am' => '1 AM',
	'digest_2am' => '2 AM',
	'digest_3am' => '3 AM',
	'digest_4am' => '4 AM',
	'digest_5am' => '5 AM',
	'digest_6am' => '6 AM',
	'digest_7am' => '7 AM',
	'digest_8am' => '8 AM',
	'digest_9am' => '9 AM',
	'digest_10am' => '10 AM',
	'digest_11am' => '11 AM',
	'digest_12pm' => '12 PM',
	'digest_1pm' => '1 PM',
	'digest_2pm' => '2 PM',
	'digest_3pm' => '3 PM',
	'digest_4pm' => '4 PM',
	'digest_5pm' => '5 PM',
	'digest_6pm' => '6 PM',
	'digest_7pm' => '7 PM',
	'digest_8pm' => '8 PM',
	'digest_9pm' => '9 PM',
	'digest_10pm' => '10 PM',
	'digest_11pm' => '11 PM',
	'digest_select_forums' => '<b>Enviar resumen de estos foros:</b>',
	'digest_create' => 'Sus cambios de resumen han sido guardados',
	'digest_modify' => 'Sus cambios de resumen han sido actualizados',
	'digest_unsubscribe' => 'Ha cancelado su suscripción, no recibirá mas resúmenes',
	'digest_no_forums_selected' => 'No ha seleccionado ningún foro, estará sin suscripción.',
	'digest_all_forums' => 'Todos los foros',
	'digest_submit_text' => 'Crear cambios de resumen',
	'digest_reset_text' => 'Limpiar',
	'digest_size' => '<b>Caracteres máximos a mostrar por mensaje:</b><br />(Precaución: Fijar esto demasiado alto puede hacer los resúmenes muy largos. Se proporciona un enlace para cada mensaje, para poder acceder al contenido completo del mensaje.)',
	'digest_size_50' => '50',
	'digest_size_100' => '100',
	'digest_size_150' => '150',
	'digest_size_300' => '300',
	'digest_size_600' => '600',
	'digest_size_max' => 'Maximo (32000)',
	'digest_version_text' => 'Versión',
	)
);

?>