<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_main_cback_ctracker.php 96 2009-04-27 16:48:19Z Mighty Gorgon $
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
	'ctracker_ipb_added' => '�Entrada a�adida correctamente!',
	'ctracker_ipb_deleted' => '�Entrada borrada correctamente!',
	'ctracker_ipb_add_now' => 'A�adir entrada',
	'ctracker_mu_success' => 'El usuario ha sido marcado como "Usuario miserable"',
	'ctracker_mu_success_bbc' => '[cell class="text_orange"]El usuario ha sido marcado como "Usuario miserable".[/cell]',
	'ctracker_mu_success_html' => '<span class="text_orange">El usuario ha sido marcado como "Usuario miserable".</span>',
	'ctracker_mu_error_admin' => '�ADMINISTRADORES o MODERADORES no pueden ser marcados como usuario miserable!',
	'ctracker_mu_deleted' => 'Los usuarios elegidos han sido borrados con �xito de la lista de usuarios miserables.',
	'ctracker_mu_head' => 'Usuario miserable',
	'ctracker_error_updating_userdata' => 'CBACK CrackerTracker no puede realizar la operaci�n de la base de datos en la tabla del usuario.',
	'ctracker_error_database_op' => 'CBACK CrackerTracker no puede realizar la operaci�n de la base de datos correctamente.',
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
	'ctracker_error_loading_config' => 'La configuraci�n de CBACK CrackerTracker no puede ser cargada de su base de datos. �Se ha asegurado de haber ejecutado el script de instalaci�n y haber editado el archivo "includes/constants.php" correctamente?',
	'ctracker_error_updating_config' => 'La configuraci�n de CBACK CrackerTracker no puede ser actualizada. �Se h asegurado de haber ejecutado el script de instalaci�n y haber editado el archivo "includes/constants.php" correctamente?',
	'ctracker_error_loading_blocklist' => 'La configuraci�n de CBACK CrackerTracker no puede ser cargada de su base de datos. �Se ha asegurado de haber ejecutado el script de instalaci�n y haber editado el archivo "includes/constants.php" correctamente?',
	'ctracker_error_insert_blocklist' => 'Los datos no se han podido agregar a CBACK CrackerTracker blocklist. �Se ha asegurado de haber ejecutado el script de instalaci�n y haber editado el archivo "includes/constants.php" correctamente?',
	'ctracker_error_delete_blocklist' => 'Los datos no se han podido borrar de CBACK CrackerTracker blocklist. �Se ha asegurado de haber ejecutado el script de instalaci�n y haber editado el archivo "includes/constants.php" correctamente?',
	'ctracker_error_login_history' => 'Ha habido un error con las operaciones de la base de datos dentro de el historial de identificaci�n de CBACK CrackerTracker. �Se ha asegurado de haber ejecutado el script de instalaci�n y haber editado el archivo "includes/constants.php" correctamente?',
	'ctracker_error_del_login_history' => 'La tabla de historial de identificaci�n de CBACK CrackerTracker no puede vaciarse.',


/*
* Language Strings used in class_ct_userfunctions.php
*/
	'ctracker_info_search_time' => "Por razones de seguridad, la b�squeda solamente es posible hacerla %s veces cada %s segundos. Si se excedi� este n�mero, debe esperar <span id=\"waittime\">%s</span> segundos hasta que pueda hacer una nueva b�squeda. <script type=\"text/javascript\"><!-- \n var wait = %s; var waitt = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout(\"newoutput(\" + i + \")\", i * 1000); } function newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById(\"waittime\").innerHTML = \"0\"; } else { document.getElementById(\"waittime\").innerHTML = (waitt/1000) - waitcounter; } } //--></script>",
	'ctracker_info_regist_time' => "Por razones de seguridad, s�lo es posible un registro cada %s segundos. Si se excedi� este n�mero, deber� esperar <span id=\"waittime\">%s</span> segundos hasta un nuevo intento. <script type=\"text/javascript\"><!-- \n var wait = %s; var waitt = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout(\"newoutput(\" + i + \")\", i * 1000); } function newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById(\"waittime\").innerHTML = \"0\"; } else { document.getElementById(\"waittime\").innerHTML = (waitt/1000) - waitcounter; } } //--></script>",
	'ctracker_info_regip_double' => 'Ha habido un registro desde esta direcci�n IP. Por razones de seguridad, s�lo se permite un registro desde cada direcci�n IP.',
	'ctracker_info_profile_spammer' => '�Este registro ha sido identificado como cuenta de spam! Si piensa que esto es incorrecto, por favor, contacte con un administrador de este foro, de modo que �l pueda comprobar su cuenta.',
	'ctracker_info_password_minlng' => 'El administrador ha fijado que la contrase�a debe contener como m�nimo <b>%s</b> caracteres. Su contrase�a tiene solamente <b>%s</b> caracteres. Por favor, pulse en "Volver" para introducir una contrase�a adecuada.',
	'ctracker_info_password_cmplx' => 'El administrador ha fijado que la contrase�a debe contener como <b>m�nimo</b> las siguientes cosas: %s',
	'ctracker_info_password_cmplx_1' => 'Figuras',
	'ctracker_info_password_cmplx_2' => 'Min�scula',
	'ctracker_info_password_cmplx_3' => 'May�scula',
	'ctracker_info_password_cmplx_4' => 'Caracteres especiales',
	'ctracker_info_pw_expired' => 'El administrador ha creado unos ajustes para que su contrase�a sea v�lida solamente por <b>%s d�as</b>. Se le recomienda que, por razones de seguridad, cambie su contrase�a ahora. (<a href="' . PROFILE_MG . '?mode=editprofile&amp;' . POST_USERS_URL . '=%d">Perfil</a>)',

/*
* Language Strings used in ct_visual_confirm.php
*/
	'ctracker_login_wrong' => '�El c�digo de confirmaci�n visual es incorrecto!',
	'ctracker_code_dbconn' => '�No se ha podido cargar el c�digo de confirmaci�n visual en la base de datos! Si tiene phpBB Plus tiene que instalar el m�dulo de confirmaci�n visual para phpBB. �Por favor, lea las referencias para phpBB Plus en la carpeta "add_ons" del paquete de CrackerTracker Mod!',
	'ctracker_login_success' => 'Su cuenta ha sido activada de nuevo.<br /><br />Pulse <a href="%s">Aqu�</a> para volver a identificarse.',
	'ctracker_code_count' => 'El n�mero de entradas de la confirmaci�n visual a superado el limite para esta sesi�n.',

/*
* Language Strings used in ctracker_login.php
*/
	'ctracker_login_title' => 'Activaci�n de cuenta de CrackerTracker',
	'ctracker_login_logged' => 'Los usuarios identificados no pueden tener acceso al sitio.',
	'ctracker_login_confim' => 'Ha excedido el n�mero m�ximo de intentos de identificaci�n incorrectos. Su cuenta se ha bloqueado. Tendr� que ser reactivada usando la confirmaci�n visual.<br /><br />Por favor, introduzca el siguiente c�digo y pulse en "Activar". Si lo hace correctamente, podr� iniciar sesi�n.',
	'ctracker_login_button' => 'Activar',

/*
* Language Strings for IP Warning Engine
*/
	'ctracker_ipwarn_info' => 'La exploraci�n del rango de IP de su cuenta es <b>%s</b>',
	'ctracker_ipwarn_prof' => 'Explorador de rango de IP',
	'ctracker_ipwarn_pdes' => 'Cuando est� activado, el explorador de rango de IP comprueba su gama de IP y los posibles cambios. Si alguien entra a su cuenta desde otra localizaci�n recibir� un mensaje corto (tambi�n si entran desde diversas localizaciones). Por favor, compruebe el pie de p�gina para ver si este explorador de rango de IP a�n est� activado para usted, pues un atacante podr�a desactivar eso. Si la identificaci�n est� activa, todav�a puede realizar cambios despu�s de la activaci�n.',
	'ctracker_ipwarn_chng' => '<b>&raquo; CONSEJO &laquo;</b><br />El rango de IP de su cuenta ha cambiado. La actual identificaci�n fue desde <b>%s</b>, la anterior fue desde <b>%s</b>. �Si usted no inici� una sesi�n en este foro desde otra localizaci�n, puede ser que un agresor haya utilizado su cuenta sin autorizaci�n!',
	'ctracker_ipwarn_welc' => '<b>&raquo; CONSEJO &laquo;</b><br />El explorador del rango de IP para su cuenta no se ha inicializado todav�a. Esto sucede despu�s de dos conexiones. Si quiere, ahora puede inicializar el explorador, despu�s abrir una sesi�n, y salir de la sesi�n.',
	'ctracker_ipwarn_send' => 'Aceptar ajustes',

/*
* Language Strings for Login History
*/
	'ctracker_lhistory_h' => 'Historial de identificaci�n',
	'ctracker_lhistory_i' => 'Aqu� puede ver las direcciones IP guardadas y la fecha de su ultima identificaci�n <b>%s</b> conect�ndose. Usted puede saber, as�, si su cuenta fue usado por alg�n otro. Si hay identificaci�n/fecha desconocidos o direcciones IP en el historial de identificaci�n, es posible que alguien haya conseguido su contrase�a. En este caso, debe cambiar la contrase�a de su cuenta y comprobar su cuenta de correo.',
	'ctracker_lhistory_h1' => 'Fecha y hora de identificaci�n',
	'ctracker_lhistory_h2' => 'Direcci�n IP guardada',
	'ctracker_lhistory_nav' => 'Historial de identificaci�n de CrackerTracker',
	'ctracker_lhistory_err' => 'Usted debe identificarse usando las caracter�sticas de CrackerTracker.',
	'ctracker_lhistory_off' => 'Historial de identificaci�n ha sido desactivado por un administrador.',

/*
* Other Language Strings used in the Board itself
*/
	'ctracker_gmb_link' => 'Un administrador ha escrito una nota importante para todos los usuarios. Esta nota puede ser vista desde aqu�:<br /><br /><a href="%s">%s</a><br />',
	'ctracker_gmb_mark' => 'Marcar mensaje como le�do',
	'ctracker_gmb_markip' => 'Borrar aviso',
	'ctracker_gmb_loginlink' => 'Seguridad de identificaci�n',
	'ctracker_gmb_1stadmin' => 'La instalaci�n o ajustes del primer administrador no pueden ser cambiados.',
	'ctracker_gmb_pu_1' => '<b>CBACK CrackerTracker - Configuraci�n</b><br /><br />El puerto 21 es usado para servicios FTP. Si el foro es reconvertido a este puerto ser� m�s vulnerable, pues los navegadores usan este puerto para el FTP.',
	'ctracker_gmb_pu_2' => '<b>CBACK CrackerTracker - Configuraci�n</b><br /><br />�La duraci�n de sesi�n tiene un tama�o insuficiente! Es posible que no est� identificado en el foro el tiempo suficiente para corregir este ajuste.',
	'ctracker_gmb_pu_3' => '<b>CBACK CrackerTracker - Configuraci�n</b><br /><br />�La ruta del foro comienza y/o finaliza con una barra (/www/) o s�lo se compone de la barra (/)!',
	'ctracker_gmb_pu_4' => '<b>CBACK CrackerTracker - Configuraci�n</b><br /><br />�El nombre del servidor no termina con barra (/)!',
	'ctracker_binf_spammer' => 'El sistema de seguridad de spam le est� observando. Usted ha alcanzado el n�mero m�ximo de mensajes permitidos en %s segundos. Si intenta escribir en los pr�ximos <b>%s</b> segundos otro mensaje, su cuenta ser� <b>�Bloqueada!</b><br /><br />Por favor, espere. Perdone por robarle su tiempo, pero es necesario por razones de seguridad.',
	'ctracker_binf_sban' => 'El sistema de bloqueo de spam ha bloqueado su cuenta, pues se le ha identificado como un spammer.',
	'ctracker_sendmail_info' => 'Por razones de seguridad, s�lo tiene permitido enviar un correo cada %s minutos.',
	'ctracker_pwreset_info' => 'Por razones de seguridad, no es posible enviar una nueva contrase�a cada %s minutos. �Por favor, contacte con un administrador si tiene prisa!',
	'ctracker_vc_guest_post' => 'Confirmaci�n visual para invitados',
	'ctracker_vc_guest_expl' => 'Por favor, introduzca el siguiente c�digo antes de enviar su mensaje. Para los invitados es necesario por razones de seguridad para evitar spam.',
	'ctracker_dbg_mode' => '<b>CrackerTracker funciona con DEBUG MODE. No se deber�a usar de forma permanente.<br />Por favor, pongalo en el modo normal cuando sea posible.<br /><br /><u>Este mensaje no puede borrarse!</u></b>',
	)
);

?>