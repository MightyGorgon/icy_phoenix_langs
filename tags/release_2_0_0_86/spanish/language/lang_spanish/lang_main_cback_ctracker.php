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
* Christian Knerr (cback) - (www.cback.de)
* Lopalong
*
*/

/**
* English Language File for the CBACK Cracker Tracker
*
* @author Christian Knerr (cback)
* @translator Marc Renninger (mc-dragon)
* @package ctracker
* @version 5.0.0
* @since 21.07.2006 - 17:26:28
* @copyright (c) 2006 www.cback.de
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
	'ctracker_settings_on' => 'Activar',
	'ctracker_settings_off' => 'Desactivar',
	'ctracker_ma_on' => 'ON',
	'ctracker_ma_off' => 'OFF',
	'ctracker_blockmode_0' => 'Apagado',
	'ctracker_blockmode_1' => 'Banear usuario',
	'ctracker_blockmode_2' => 'Bloquear usuario',
	'ctracker_complex_1' => '[0-9]',
	'ctracker_complex_2' => '[a-z]',
	'ctracker_complex_3' => '[A-Z]',
	'ctracker_complex_4' => '[0-9][a-z]',
	'ctracker_complex_5' => '[0-9][A-Z]',
	'ctracker_complex_6' => '[0-9][a-z][A-Z]',
	'ctracker_complex_7' => '[0-9][*]',
	'ctracker_complex_8' => '[0-9][a-z][*]',
	'ctracker_complex_9' => '[0-9][a-z][A-Z][*]',
	'ctracker_ipb_new_entry' => 'Nueva entrada',
	'ctracker_ipb_added' => '&iexcl;Entrada a&ntilde;adida correctamente!',
	'ctracker_ipb_deleted' => '&iexcl;Entrada borrada correctamente!',
	'ctracker_ipb_add_now' => 'A&ntilde;adir entrada',
	'ctracker_mu_success' => 'El usuario ha sido marcado como "Usuario miserable"',
	'ctracker_mu_success_bbc' => '[cell class="text_orange"]El usuario ha sido marcado como "Usuario miserable".[/cell]',
	'ctracker_mu_success_html' => '<span class="text_orange">El usuario ha sido marcado como "Usuario miserable".</span>',
	'ctracker_mu_error_admin' => '&iexcl;ADMINISTRADORES o MODERADORES no pueden ser marcados como usuario miserable!',
	'ctracker_mu_deleted' => 'Los usuarios elegidos han sido borrados con &eacute;xito de la lista de usuarios miserables.',
	'ctracker_mu_head' => 'Usuario miserable',
	'ctracker_error_updating_userdata' => 'CBACK CrackerTracker no puede realizar la operaci&oacute;n de la base de datos en la tabla del usuario.',
	'ctracker_error_database_op' => 'CBACK CrackerTracker no puede realizar la operaci&oacute;n de la base de datos correctamente.',
	'ctracker_message_dialog_title' => 'CBACK CrackerTracker Profesional',


/*
* Language Strings used for the footer itself
*/
	'ctracker_fdisplay_imgdesc' => 'Seguridad del foro',
	'ctracker_fdisplay_n' => '<a href="http://www.cback.de" target="_blank">Seguridad</a> por <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a>.',
	'ctracker_fdisplay_c' => 'Protegido por <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a><br /><b>%s</b> ataques bloqueados.',
	'ctracker_fdisplay_g' => '<b>%s</b> ataques bloqueados ',


/*
* Language Strings for the class_ct_database.php
*/
	'ctracker_error_loading_config' => 'La configuraci&oacute;n de CBACK CrackerTracker no puede ser cargada de su base de datos. &iquest;Se ha asegurado de haber ejecutado el script de instalaci&oacute;n y haber editado el archivo "includes/constants.php" correctamente?',
	'ctracker_error_updating_config' => 'La configuraci&oacute;n de CBACK CrackerTracker no puede ser actualizada. &iquest;Se h asegurado de haber ejecutado el script de instalaci&oacute;n y haber editado el archivo "includes/constants.php" correctamente?',
	'ctracker_error_loading_blocklist' => 'La configuraci&oacute;n de CBACK CrackerTracker no puede ser cargada de su base de datos. &iquest;Se ha asegurado de haber ejecutado el script de instalaci&oacute;n y haber editado el archivo "includes/constants.php" correctamente?',
	'ctracker_error_insert_blocklist' => 'Los datos no se han podido agregar a CBACK CrackerTracker blocklist. &iquest;Se ha asegurado de haber ejecutado el script de instalaci&oacute;n y haber editado el archivo "includes/constants.php" correctamente?',
	'ctracker_error_delete_blocklist' => 'Los datos no se han podido borrar de CBACK CrackerTracker blocklist. &iquest;Se ha asegurado de haber ejecutado el script de instalaci&oacute;n y haber editado el archivo "includes/constants.php" correctamente?',
	'ctracker_error_login_history' => 'Ha habido un error con las operaciones de la base de datos dentro de el historial de identificaci&oacute;n de CBACK CrackerTracker. &iquest;Se ha asegurado de haber ejecutado el script de instalaci&oacute;n y haber editado el archivo "includes/constants.php" correctamente?',
	'ctracker_error_del_login_history' => 'La tabla de historial de identificaci&oacute;n de CBACK CrackerTracker no puede vaciarse.',


/*
* Language Strings used in class_ct_userfunctions.php
*/
	'ctracker_info_search_time' => "Por razones de seguridad, la b&uacute;squeda solamente es posible hacerla %s veces cada %s segundos. Si se excedi&oacute; este n&uacute;mero, debe esperar <span id=\"waittime\">%s</span> segundos hasta que pueda hacer una nueva b&uacute;squeda. <script type=\"text/javascript\"><!-- \n var wait = %s; var waitt = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout(\"newoutput(\" + i + \")\", i * 1000); } function newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById(\"waittime\").innerHTML = \"0\"; } else { document.getElementById(\"waittime\").innerHTML = (waitt/1000) - waitcounter; } } //--></script>",
	'ctracker_info_regist_time' => "Por razones de seguridad, s&oacute;lo es posible un registro cada %s segundos. Si se excedi&oacute; este n&uacute;mero, deber&aacute; esperar <span id=\"waittime\">%s</span> segundos hasta un nuevo intento. <script type=\"text/javascript\"><!-- \n var wait = %s; var waitt = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout(\"newoutput(\" + i + \")\", i * 1000); } function newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById(\"waittime\").innerHTML = \"0\"; } else { document.getElementById(\"waittime\").innerHTML = (waitt/1000) - waitcounter; } } //--></script>",
	'ctracker_info_regip_double' => 'Ha habido un registro desde esta direcci&oacute;n IP. Por razones de seguridad, s&oacute;lo se permite un registro desde cada direcci&oacute;n IP.',
	'ctracker_info_profile_spammer' => '&iexcl;Este registro ha sido identificado como cuenta de spam! Si piensa que esto es incorrecto, por favor, contacte con un administrador de este foro, de modo que &eacute;l pueda comprobar su cuenta.',
	'ctracker_info_password_minlng' => 'El administrador ha fijado que la contrase&ntilde;a debe contener como m&iacute;nimo <b>%s</b> caracteres. Su contrase&ntilde;a tiene solamente <b>%s</b> caracteres. Por favor, pulse en "Volver" para introducir una contrase&ntilde;a adecuada.',
	'ctracker_info_password_cmplx' => 'El administrador ha fijado que la contrase&ntilde;a debe contener como <b>m&iacute;nimo</b> las siguientes cosas: %s',
	'ctracker_info_password_cmplx_1' => 'Figuras',
	'ctracker_info_password_cmplx_2' => 'Min&uacute;scula',
	'ctracker_info_password_cmplx_3' => 'May&uacute;scula',
	'ctracker_info_password_cmplx_4' => 'Caracteres especiales',
	'ctracker_info_pw_expired' => 'El administrador ha creado unos ajustes para que su contrase&ntilde;a sea v&aacute;lida solamente por <b>%s d&iacute;as</b>. Se le recomienda que, por razones de seguridad, cambie su contrase&ntilde;a ahora. (<a href="' . CMS_PAGE_PROFILE . '?mode=editprofile&amp;' . POST_USERS_URL . '=%d">Perfil</a>)',

/*
* Language Strings used in ct_visual_confirm.php
*/
	'ctracker_login_wrong' => '&iexcl;El c&oacute;digo de confirmaci&oacute;n visual es incorrecto!',
	'ctracker_code_dbconn' => '&iexcl;No se ha podido cargar el c&oacute;digo de confirmaci&oacute;n visual en la base de datos! Si tiene phpBB Plus tiene que instalar el m&oacute;dulo de confirmaci&oacute;n visual para phpBB. &iexcl;Por favor, lea las referencias para phpBB Plus en la carpeta "add_ons" del paquete de CrackerTracker Mod!',
	'ctracker_login_success' => 'Su cuenta ha sido activada de nuevo.<br /><br />Pulse <a href="%s">Aqu&iacute;</a> para volver a identificarse.',
	'ctracker_code_count' => 'El n&uacute;mero de entradas de la confirmaci&oacute;n visual a superado el limite para esta sesi&oacute;n.',

/*
* Language Strings used in login_captcha.php
*/
	'ctracker_login_title' => 'Activaci&oacute;n de cuenta',
	'ctracker_login_logged' => 'Los usuarios identificados no pueden tener acceso al sitio.',
	'ctracker_login_confim' => 'Ha excedido el n&uacute;mero m&aacute;ximo de intentos de identificaci&oacute;n incorrectos. Su cuenta se ha bloqueado. Tendr&aacute; que ser reactivada usando la confirmaci&oacute;n visual.<br /><br />Por favor, introduzca el siguiente c&oacute;digo y pulse en "Activar". Si lo hace correctamente, podr&aacute; iniciar sesi&oacute;n.',
	'ctracker_login_button' => 'Activar',

/*
* Language Strings for IP Warning Engine
*/
	'ctracker_ipwarn_info' => 'La exploraci&oacute;n del rango de IP de su cuenta es <b>%s</b>',
	'ctracker_ipwarn_prof' => 'Explorador de rango de IP',
	'ctracker_ipwarn_pdes' => 'Cuando est&aacute; activado, el explorador de rango de IP comprueba su gama de IP y los posibles cambios. Si alguien entra a su cuenta desde otra localizaci&oacute;n recibir&aacute; un mensaje corto (tambi&eacute;n si entran desde diversas localizaciones). Por favor, compruebe el pie de p&aacute;gina para ver si este explorador de rango de IP a&uacute;n est&aacute; activado para usted, pues un atacante podr&iacute;a desactivar eso. Si la identificaci&oacute;n est&aacute; activa, todav&iacute;a puede realizar cambios despu&eacute;s de la activaci&oacute;n.',
	'ctracker_ipwarn_chng' => '<b>&raquo; CONSEJO &laquo;</b><br />El rango de IP de su cuenta ha cambiado. La actual identificaci&oacute;n fue desde <b>%s</b>, la anterior fue desde <b>%s</b>. &iexcl;Si usted no inici&oacute; una sesi&oacute;n en este foro desde otra localizaci&oacute;n, puede ser que un agresor haya utilizado su cuenta sin autorizaci&oacute;n.',
	'ctracker_ipwarn_welc' => '<b>&raquo; CONSEJO &laquo;</b><br />El explorador del rango de IP para su cuenta no se ha inicializado todav&iacute;a. Esto sucede despu&eacute;s de dos conexiones. Si quiere, ahora puede inicializar el explorador, despu&eacute;s abrir una sesi&oacute;n, y salir de la sesi&oacute;n.',
	'ctracker_ipwarn_send' => 'Guardar ajustes',

/*
* Language Strings for Login History
*/
	'ctracker_lhistory_h' => 'Historial de identificaci&oacute;n',
	'ctracker_lhistory_i' => 'Aqu&iacute; puede ver las direcciones IP guardadas y la fecha de su ultima identificaci&oacute;n <b>%s</b> conect&aacute;ndose. Usted puede saber, as&iacute;, si su cuenta fue usado por alg&uacute;n otro. Si hay identificaci&oacute;n/fecha desconocidos o direcciones IP en el historial de identificaci&oacute;n, es posible que alguien haya conseguido su contrase&ntilde;a. En este caso, debe cambiar la contrase&ntilde;a de su cuenta y comprobar su cuenta de correo.',
	'ctracker_lhistory_h1' => 'Fecha y hora de identificaci&oacute;n',
	'ctracker_lhistory_h2' => 'Direcci&oacute;n IP guardada',
	'ctracker_lhistory_nav' => 'Historial de identificaci&oacute;n de CrackerTracker',
	'ctracker_lhistory_err' => 'Usted debe identificarse usando las caracter&iacute;sticas de CrackerTracker.',
	'ctracker_lhistory_off' => 'Historial de identificaci&oacute;n ha sido desactivado por un administrador.',

/*
* Other Language Strings used in the Board itself
*/
	'ctracker_gmb_link' => 'Un administrador ha escrito una nota importante para todos los usuarios. Esta nota puede ser vista desde aqu&iacute;:<br /><br /><a href="%s">%s</a><br />',
	'ctracker_gmb_mark' => 'Marcar mensaje como le&iacute;do',
	'ctracker_gmb_markip' => 'Borrar aviso',
	'ctracker_gmb_loginlink' => 'Seguridad de identificaci&oacute;n',
	'ctracker_gmb_1stadmin' => 'La instalaci&oacute;n o ajustes del primer administrador no pueden ser cambiados.',
	'ctracker_gmb_pu_1' => '<b>CBACK CrackerTracker - Configuraci&oacute;n</b><br /><br />El puerto 21 es usado para servicios FTP. Si el foro es reconvertido a este puerto ser&aacute; m&aacute;s vulnerable, pues los navegadores usan este puerto para el FTP.',
	'ctracker_gmb_pu_2' => '<b>CBACK CrackerTracker - Configuraci&oacute;n</b><br /><br />&iexcl;La duraci&oacute;n de sesi&oacute;n tiene un tama&ntilde;o insuficiente! Es posible que no est&eacute; identificado en el foro el tiempo suficiente para corregir este ajuste.',
	'ctracker_gmb_pu_3' => '<b>CBACK CrackerTracker - Configuraci&oacute;n</b><br /><br />&iexcl;La ruta del foro comienza y/o finaliza con una barra (/www/) o s&oacute;lo se compone de la barra (/)!',
	'ctracker_gmb_pu_4' => '<b>CBACK CrackerTracker - Configuraci&oacute;n</b><br /><br />&iexcl;El nombre del servidor no termina con barra (/)!',
	'ctracker_binf_spammer' => 'El sistema de seguridad de spam le est&aacute; observando. Usted ha alcanzado el n&uacute;mero m&aacute;ximo de mensajes permitidos en %s segundos. Si intenta escribir en los pr&oacute;ximos <b>%s</b> segundos otro mensaje, su cuenta ser&aacute; <b>&iexcl;Bloqueada!</b><br /><br />Por favor, espere. Perdone por robarle su tiempo, pero es necesario por razones de seguridad.',
	'ctracker_binf_sban' => 'El sistema de bloqueo de spam ha bloqueado su cuenta, pues se le ha identificado como un spammer.',
	'ctracker_sendmail_info' => 'Por razones de seguridad, s&oacute;lo tiene permitido enviar un correo cada %s minutos.',
	'ctracker_pwreset_info' => 'Por razones de seguridad, no es posible enviar una nueva contrase&ntilde;a cada %s minutos. &iexcl;Por favor, contacte con un administrador si tiene prisa!',
	'ctracker_vc_guest_post' => 'Confirmaci&oacute;n visual para invitados',
	'ctracker_vc_guest_expl' => 'Por favor, introduzca el siguiente c&oacute;digo antes de enviar su mensaje. Para los invitados es necesario por razones de seguridad para evitar spam.',
	'ctracker_dbg_mode' => '<b>CrackerTracker funciona con DEBUG MODE. No se deber&iacute;a usar de forma permanente.<br />Por favor, pongalo en el modo normal cuando sea posible.<br /><br /><u>Este mensaje no puede borrarse!</u></b>',
	)
);

?>