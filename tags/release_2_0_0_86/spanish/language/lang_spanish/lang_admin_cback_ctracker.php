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
* Spanish Language File for the CBACK Cracker Tracker
*
* @author Marçal D.P. (JANU1535)
* @translator Marçal D.P. (JANU1535)
* @package ctracker
* @version 5.0.0
* @since 21.07.2006 - 17:26:28
* @copyright (c) 2006 www.JanuWeb.Com
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
/*
* Language Strings used for the ACP Menu points
*/
	'ctracker_module_category' => 'CrackerTracker',
	'ctracker_module_1' => 'Explorar y comprobar archivos',
	'ctracker_module_2' => 'Cr&eacute;ditos',
	'ctracker_module_3' => 'Explorar archivos',
	'ctracker_module_4' => 'Noticias globales',
	'ctracker_module_5' => 'Bloquear IP y agente',
	'ctracker_module_6' => 'Administrar log',
	'ctracker_module_7' => 'Mantenimiento y pruebas',
	'ctracker_module_8' => 'Usuario miserable',
	'ctracker_module_9' => 'Ajustes',
	'ctracker_module_10' => 'Recuperaci&oacute;n',
	'ctracker_module_11' => 'Pie de p&aacute;gina',


/*
* Language Strings used in ACP Modules itself
*/
	'ctracker_wrong_module' => 'N&uacute;mero de m&oacute;dulo desconocido',
	'ctracker_img_descriptions' => 'Imagen',
	'ctracker_set_catname1' => 'Bloquear IP, proxy y agente de usuario',
	'ctracker_set_catname2' => 'Sistema de protecci&oacute;n de b&uacute;squeda',
	'ctracker_set_catname3' => 'Sistema de protecci&oacute;n de identificaci&oacute;n',
	'ctracker_set_catname4' => 'Detecci&oacute;n de autospam',
	'ctracker_set_catname5' => 'Sistema de protecci&oacute;n del registro',
	'ctracker_set_catname6' => 'Comprobar contrase&ntilde;a	',
	'ctracker_set_catname7' => 'Caracter&iacute;sticas generales de seguridad',
	'ctracker_set_catname8' => 'Otros ajustes',
	'ctracker_settings_head' => 'Ajustes de CrackerTracker',
	'ctracker_settings_expl' => 'Aqu&iacute; puede modificar todos los ajustes para requisitos generales del sistema de seguridad de CBACK CrackerTracker.',
	'ctracker_button_submit' => 'Guardar ajustes',
	'ctracker_button_reset' => 'Restaurar',

	'ctracker_settings_m1' => 'Activar bloquear IP',
	'ctracker_settings_e1' => 'Ajustar el bloquear IP, proxy y agente de usuario en encendido o apagado.',
	'ctracker_settings_m2' => 'Tama&ntilde;o del log de bloquear IP',
	'ctracker_settings_e2' => 'Aqu&iacute; puede fijar el n&uacute;mero de entradas que guardar&aacute; el archivo de log de bloquear IP. Si se supera ese n&uacute;mero, el archivo del log ser&aacute; borrado autom&aacute;ticamente para ahorrar espacio.',
	'ctracker_settings_m3' => 'Activar protecci&oacute;n de b&uacute;squeda',
	'ctracker_settings_e3' => 'Activa o desactiva el sistema de protecci&oacute;n de b&uacute;squeda.',
	'ctracker_settings_m4' => 'Tiempo de b&uacute;squeda para los usuarios',
	'ctracker_settings_e4' => 'Si activa la protecci&oacute;n de b&uacute;squeda, este ser&aacute; el tiempo (en segundos) que un usuario registrado deber&aacute; esperar para realizar una nueva b&uacute;squeda.',
	'ctracker_settings_m5' => 'N&uacute;mero de b&uacute;squedas para los usuarios',
	'ctracker_settings_e5' => 'Elija cu&aacute;ntas consultas puede hacer un usuario registrado en el tiempo indicado arriba. Si se supera ese n&uacute;mero, no ser&aacute;n posibles nuevas consultas durante ese tiempo, para reducir la carga del servidor.',
	'ctracker_settings_m6' => 'Tiempo de b&uacute;squeda para los invitados',
	'ctracker_settings_e6' => 'Marque cu&aacute;ntos segundos deben esperar los invitados si el sistema de protecci&oacute;n de b&uacute;squeda esta activado.',
	'ctracker_settings_m7' => 'N&uacute;mero de b&uacute;squedas para los invitados',
	'ctracker_settings_e7' => 'Elija cu&aacute;ntas b&uacute;squedas puede hacer un invitado en el periodo de tiempo espeficado. Si se supera ese n&uacute;mero, no ser&aacute;n posibles nuevas consultas durante ese tiempo, para reducir la carga del servidor.',
	'ctracker_settings_m8' => 'Ajustar en encendido la protecci&oacute;n de identificaci&oacute;n',
	'ctracker_settings_e8' => 'Aqu&iacute; puede activar o desactivar el sistema de protecci&oacute;n de identificaci&oacute;n de CrackerTracker.',
	'ctracker_settings_m9' => 'Tama&ntilde;o del log para identificaciones err&oacute;neas',
	'ctracker_settings_e9' => 'Aqu&iacute; puede ajustar cu&aacute;ntas entradas de identificaciones err&oacute;neas deben ser guardadas antes de ser borradas autom&aacute;ticamente para ahorrar espacio web.',
	'ctracker_settings_m10' => 'N&uacute;mero de identificaciones hasta la confirmaci&oacute;n visual',
	'ctracker_settings_e10' => 'Cuantas veces un usuario puede fallar en su identificaci&oacute;n antes de la protecci&oacute;n de ataques de fuerza bruta, donde se mostrara la confirmaci&oacute;n visual.',
	'ctracker_settings_m11' => 'Historial de identificaci&oacute;n',
	'ctracker_settings_e11' => 'Aqu&iacute; puede activar o desactivar el historial de identificaci&oacute;n de usuarios.',
	'ctracker_settings_m12' => 'Entradas en el historial de idenficaci&oacute;n por usuario',
	'ctracker_settings_e12' => 'Aqu&iacute; puede ajustar cu&aacute;ntas identificaciones correctas por usuario deben ser guardadas en el historial de identificaci&oacute;n. Cada usuario tiene la opci&oacute;n de comprobar la fecha y las direcciones IP de sus identificaciones.',
	'ctracker_settings_m13' => 'Caracter&iacute;stica de identificaci&oacute;n de IP',
	'ctracker_settings_e13' => 'Activar o desactivar el sistema de identificaci&oacute;n de IP. Cada usuario tiene la opci&oacute;n de activar o desactivar la p&aacute;gina del sistema de seguridad de identificaci&oacute;n. El sistema de protecci&oacute;n de IP comprueba los cambios de las direcciones IP. El usuario ser&aacute; informado si su rango de IP ha sido modificado desde su ultima identificaci&oacute;n. Aqu&iacute; vera si alguien ha entrado desde una localizaci&oacute;n diferente.',
	'ctracker_settings_m14' => 'Detecci&oacute;n de spammer',
	'ctracker_settings_e14' => 'Aqu&iacute; puede ajustarse el modo de detecci&oacute;n autom&aacute;tica de spammer.',
	'ctracker_settings_m15' => 'Periodo de tiempo para el spammer',
	'ctracker_settings_e15' => 'Periodo de tiempo en el cual los mensajes de los usuarios ser&aacute;n contados por el detector de spammer (en segundos).',
	'ctracker_settings_m16' => 'N&uacute;mero de mensajes de spammer',
	'ctracker_settings_e16' => 'N&uacute;mero de mensajes permitido en el periodo de tiempo ajustado. Si este n&uacute;mero se supera el usuario ser&aacute; identificado como un spammer.',
	'ctracker_settings_m17' => 'Tama&ntilde;o del log de spammer',
	'ctracker_settings_e17' => 'Tama&ntilde;o del log en el cual se guardar&aacute;n los usuarios identificados como spammer.',
	'ctracker_settings_m18' => 'Protecci&oacute;n del registro',
	'ctracker_settings_e18' => 'Aqu&iacute; puede activar o desactivar la protecci&oacute;n del registro.',
	'ctracker_settings_m19' => 'Tiempo de bloqueo para el registro',
	'ctracker_settings_e19' => 'Aqu&iacute; puede ajustar el tiempo entre dos registros (en segundos)-',

	'ctracker_settings_m21' => 'Vigilante de IP',
	'ctracker_settings_e21' => 'Si se activa esta caracter&iacute;stica, un usuario con una direcci&oacute;n IP id&eacute;ntica podr&aacute; registrarse, hasta que alguien se haya registrado con otra direcci&oacute;n IP.',
	'ctracker_settings_m22' => 'Validez de contrase&ntilde;a',
	'ctracker_settings_e22' => 'Activar la comprobaci&oacute;n de validez de contrase&ntilde;a para todos los usuarios.',
	'ctracker_settings_m23' => 'Validez de contrase&ntilde;a en d&iacute;as',
	'ctracker_settings_e23' => 'Cu&aacute;nto tiempo ser&aacute; v&aacute;lida la contrase&ntilde;a del usuario antes de que se le muestre un aviso de que la contrase&ntilde;a debe ser cambiada (en d&iacute;as).',
	'ctracker_settings_m24' => 'Comprobar la complejidad de la contrase&ntilde;a',
	'ctracker_settings_e24' => 'Esta caracter&iacute;stica comprueba la complejidad de las contrase&ntilde;as de los usuarios.',
	'ctracker_settings_m25' => 'Modo de contrase&ntilde;a compleja',
	'ctracker_settings_e25' => 'Aqu&iacute; puede ajustar si tiene que haber INDICACI&Oacute;N en las contrase&ntilde;as.',
	'ctracker_settings_m26' => 'Tama&ntilde;o m&iacute;nimo de la contrase&ntilde;a',
	'ctracker_settings_e26' => 'Aqu&iacute; puede ajustar el n&uacute;mero m&iacute;nimo de letras para la contrase&ntilde;a.',
	'ctracker_settings_m27' => 'Comprobador del reajuste de contrase&ntilde;a',
	'ctracker_settings_e27' => 'Permite reajustar una contrase&ntilde;a desde un cierto per&iacute;odo de tiempo (para los usuarios). Esto previene que los atacantes no puedan utilizar esta caracter&iacute;stica a los usuarios spammers que usan resetmails.',
	'ctracker_settings_m28' => 'Periodo de tiempo de reajuste de contrase&ntilde;a',
	'ctracker_settings_e28' => 'Periodo de tiempo en que los usuarios pueden reajustar su contrase&ntilde;a (en minutos).',
	'ctracker_settings_m29' => 'Monitorizar el correo',
	'ctracker_settings_e29' => 'Aqu&iacute; puede activar esta caracter&iacute;stica, as&iacute; los usuarios pueden utilizar la funci&oacute;n de correo del foro solamente una vez en el per&iacute;odo de tiempo marcado. Esto previene el spamming.',
	'ctracker_settings_m30' => 'Tiempo de spam e-mail',
	'ctracker_settings_e30' => 'Periodo de tiempo en el que un usuario puede enviar dos e-mails usando la funci&oacute;n interna de correo (en minutos).',
	'ctracker_settings_m31' => 'Autorecuperaci&oacute;n',
	'ctracker_settings_e31' => 'Active esta caracter&iacute;stica para guardar los ajustes del foro autom&aacute;ticamente. Si esto no funciona, puede utilizar la &uacute;ltima configuraci&oacute;n.',
	'ctracker_settings_m32' => 'Confirmaci&oacute;n visual para invitados',
	'ctracker_settings_e32' => 'Cuando se activa esta caracter&iacute;stica, los invitados tienen que introducir un c&oacute;digo visual para escribir nuevos mensajes. De no ser as&iacute;, no podr&aacute;n enviar el mensaje. Esto protege contra los spambots autom&aacute;ticos.',
	'ctracker_settings_m33' => 'Protecci&oacute;n del servicio disponible de correo',
	'ctracker_settings_e33' => 'CrackerTracker tiene una lista interna de servicios de correo no disponibles. Si activa esta caracter&iacute;stica, los usuarios con tales direcciones de correo no podr&aacute;n registrarse.',
	'ctracker_settings_m34' => 'Identificaci&oacute;n de configuraci&oacute;n incorrecta',
	'ctracker_settings_e34' => 'Cuando activa esta caracter&iacute;stica, CrackerTracker comprueba los ajustes generales de phpBB y su validez. &iexcl;No puede da&ntilde;ar a su foro por la configuraci&oacute;n!',
	'ctracker_settings_m35' => 'Detecci&oacute;n de spammer',
	'ctracker_settings_e35' => 'Cuando activa esta caracter&iacute;stica, CrackerTracker observar&aacute; los spammers humanos o spamposts. La mayor parte de ellos ser&aacute;n bloqueados.',
	'ctracker_settings_m36' => 'Comprobar palabras clave de spammer',
	'ctracker_settings_e36' => 'Cuando activa "Detecci&oacute;n de spammer", las palabras claves en el perfil y los mensajes ser&aacute;n exploradas para identificar spammers.<br /><br /><b>ATENCI&Oacute;N</b> Aqu&iacute; existe un riesgo m&aacute;s alto de la detecci&oacute;n de alg&uacute;n BUG para los nuevos usuarios. Por favor compruebe el fichero log para saber si hay detecci&oacute;n del spammer.',


/*
* Credits page in ACP
*/
	'ctracker_credits_head' => 'Cr&eacute;ditos',
	'ctracker_credits_subhead' => 'Aqu&iacute; est&aacute;n los cr&eacute;ditos de CBACK CrackerTracker. Aqu&iacute; le daremos m&aacute;s informaci&oacute;n sobre seguridad, y esto es tambi&eacute;n una manera de decir "Gracias".',
	'ctracker_credits_donate' => 'Donar',
	'ctracker_credits_donate_expl' => '&iquest;Quiere <b>CBACK CrackerTracker Profesional</b>? Entonces seria estupendo que hiciera una donaci&oacute;n al proyecto de CBACK usando la donaci&oacute;n de PayPal. El desarrollo adicional y los costes del servidor no ayudan a nuestro proyecto no lucrativo. As&iacute; podremos seguir proporcionando CrackerTracker gratuitamente en el futuro.<br /><br />Muchas gracias por su aporte.',
	'ctracker_credits_credits' => 'Cr&eacute;ditos',
	'ctracker_credits_credits_1' => 'Idea e implementaci&oacute;n',
	'ctracker_credits_credits_2' => 'Autor y soporte',
	'ctracker_credits_credits_3' => 'Iconos',
	'ctracker_credits_credits_4' => 'Sitio de descarga oficial',
	'ctracker_credits_moddownload' => 'Descargar CrackerTracker MOD',
	'ctracker_credits_thanks' => 'Gracias a...',
	'ctracker_credits_thanks_text' => 'Quisiera darle las gracias a las siguientes personas:',
	'ctracker_credits_thanks_to' => '<b>Ideas, pruebas de seguridad y correcciones</b><br />Tekin Bird&uuml;zen<br /><i>(<a href="http://www.cybercosmonaut.de" target="_blank">cYbercOsmOnauT</a>)</i><br /><br /><br /><br /><b>Ideas:</b><br />Bernhard Jaud<br /><i>(GenuineParts)</i><br /><br /><br /><br /><b>Traductor (Ingles)</b><br />Marc Renninger<br /><i>(mc-dragon)</i><br /><br /><br /><br /><b>Corrector (Ingles)</b><br />George <br />Sommerset<br /><i>(<a href="http://www.englisch-hilfen.de" target="_blank">www.englisch-hilfen.de</a>)</i><br /><br /><br /><br /><b>Beta tester</b><br />Gracias a todos los participantes de Beta-Tests<br />a los usuarios de CBACK Premium y por supuesto a<br />nuestros colegas de la "Escena-Mod" quienes tambi&eacute;n nos ayudaron en Beta tests y correcciones.</i>',
	'ctracker_credits_info' => '&iquest;M&aacute;s seguridad?',
	'ctracker_credits_info_text' => 'El MOD perfecto para phpBB y CrackerTracker: Para una optima seguridad recomendamos el MOD <b>confirmaci&oacute;n visual avanzada</b> por AmigaLink. Este MOD mejora la caracter&iacute;stica CAPTCHA de phpBB y CrackerTracker Profesional con un sistema m&aacute;s complejo que no pueden leer los robots. Este MOD puede descargarlo en <a href="http://www.amigalink.de" target="_blank">www.AmigaLink.de</a>.<br /><br /><br /><br />Sugerimos que tambi&eacute;n integre este MOD en su foro para una seguridad excelente.',


/*
* File Hash Check in ACP
*/
	'ctracker_fchk_head' => 'Comprobador explorador CrackerTracker',
	'ctracker_fchk_subhead' => 'Esta exploraci&oacute;n crea una comprobaci&oacute;n de cada uno de los archivos PHP de su foro con un clic en "Crear o Actualizar comprobador". Despu&eacute;s, siempre tiene la posibilidad con “Verificar cambios del archivo” para determinar si los archivos fueron cambiados o no desde su &uacute;ltima comprobaci&oacute;n. Puede ver si los archivos fueron cambiados aunque no lo parezca. Esto es generalmente una muestra de que alguien hab&iacute;a accedido a su volumen de datos del foro. &iexcl;Preste atenci&oacute;n a la &uacute;ltima vez que lo comprob&oacute;, para ver si una persona no autorizada activ&oacute; el explorador de comprobaci&oacute;n!<br /><br /><br /><b>Informaci&oacute;n:</b> No todos los servidores soportan esta caracter&iacute;stica. Ocasionalmente esto puede ocasionar un aviso de "fuera de tiempo" si el servidor se toma demasiado tiempo para producir la lista del archivo de phpBB. Otros servidores paran el procedimiento, puesto que es un funcionamiento absolutamente intensivo.<br /><br /><br />&raquo; La &uacute;ltima actualizaci&oacute;n del archivo de comprobaci&oacute;n ocurri&oacute; <b>%s</b>.',
	'ctracker_fchk_funcheader' => 'Caracter&iacute;sticas',
	'ctracker_fchk_tableheader' => 'Advertencia',
	'ctracker_fchk_option1' => 'Crear o actualizar comprobador',
	'ctracker_fchk_option2' => 'Verificar cambios del archivo',
	'ctracker_fchk_select_action' => '&iexcl;Por favor, elija una opci&oacute;n!',
	'ctracker_fchk_update_action' => '&iexcl;Comprobador actualizado!',
	'ctracker_fchk_tablehead1' => 'Ruta del archivo',
	'ctracker_fchk_tablehead2' => 'Estado',
	'ctracker_file_unchanged' => 'NO MODIFICADO',
	'ctracker_file_changed' => 'MODIFICADO',
	'ctracker_file_deleted' => 'BORRADO',


/*
* File Safety Scanner in ACP
*/
	'ctracker_fscan_complete' => 'El explorador de archivos ha sido ejecutado correctamente. Por favor, pulse en "Mostrar resultados" para verlos. Puede corregir los archivos.<br /><br /><br /><br /><u>AVISO:</u><br /><br />Puede suceder de vez en cuando que CrackerTracker detecte un archivo como inseguro porque un desarrollador haya querido que el c&oacute;digo de ese archivo pueda ser escrito desde el exterior. En este caso - y SOLAMENTE si est&aacute; absolutamente seguro- puede usted decir a CRACKERTRACKER que &eacute;ste es un archivo seguro. Debe escribir en este archivo, al principio: <?php el siguiente c&oacute;digo: <br /><br /><br /><i>// CTracker_Ignore: File Checked By Human</i><br /><br /><br />Si usted no est&aacute; seguro puede consultar en la <a href="http://www.community.cback.de" target="_blank">Comunidad CBACK</a> para m&aacute;s instrucciones.',
	'ctracker_fscan_unchecked' => 'NO COMPROBADO',
	'ctracker_fscan_ok' => 'SEGURO',
	'ctracker_fscan_prob_1' => 'extension.inc no/incluido demasiado tarde',
	'ctracker_fscan_prob_2' => '$phpbb_root_path quiz&aacute; no se inicializ&oacute; correctamente',
	'ctracker_fscan_prob_3' => 'common.php / pagestart.php quiz&aacute; no fue incluido o demasiado tarde',
	'ctracker_fscan_prob_4' => 'El c&oacute;digo en el archivo es posiblemente ejecutable m&aacute;s all&aacute; de phpBB',
	'ctracker_fscan_prob_5' => 'extension.inc falta y/o $phpbb_root_path y/o constante no se encontr&oacute;',
	'ctracker_fscan_prob_def' => 'Un caso indefinido ocurri&oacute; durante la exploraci&oacute;n',
	'ctracker_fscan_important' => 'Por favor, atienda:',
	'ctracker_fscan_sel_action' => 'Para comenzar la comprobaci&oacute;n de todos los archivos, pulse en "Comenzar la comprobaci&oacute;n de archivos". Cuando termine, pulse en "Mostrar resultados" para ver los resultados. Esa lista se puede recuperar en cualquier momento usando el ACP (hasta que se realice una nueva comprobaci&oacute;n).<br /><br /><br />Por razones t&eacute;cnicas no es posible dar una informaci&oacute;n absolutamente segura de si un script es <u>correcto</u> o <u>incorrecto</u>. Pudiera suceder que el explorador clasifique un archivo como seguro y no lo sea, y viceversa. PHP y sus c&oacute;digos son as&iacute; de complejos. Con todo, hay un alto tanto por ciento de seguridad (y esto si es totalmente seguro)<br /><br /><br />Este explorador detecta los agujeros de seguridad en los ficheros de su foro. As&iacute;, usted puede corregirlos f&aacute;cilmente.<br /><br /><br />Para m&aacute;s detalles e instrucciones use la comunidad CBACK.<br /><br /><br />',
	'ctracker_fscan_head' => 'Exploraci&oacute;n de seguridad',
	'ctracker_fscan_subhead' => 'Este explorador de seguridad comprueba todos los archivos de PHP de su foro, y detecta los que pudieran tener problemas importantes. As&iacute; evita agujeros de seguridad que podr&iacute;an ser utilizados maliciosamente desde el exterior sin usar los archivos del foro, en el caso de que CrackerTracker estuviera inactivo y no pudiera proteger el archivo. Este m&oacute;dulo detecta esos agujeros y los corrige.<br /><br /><br /><b>Pero tenga en cuenta</b> que no todos los servidores soportan esta caracter&iacute;stica.  En foros muy grandes puede suceder que el funcionamiento intensivo de la exploraci&oacute;n sobrepase el tiempo de ejecuci&oacute;n permitido en su PHP. El algoritmo de este explorador se ha optimizado lo m&aacute;s posible para que no supere los l&iacute;mites marcados. Pero tal cosa puede darse en algunas m&aacute;quinas, no lo olvide.<br /><br /><br />&raquo; La &uacute;ltima comprobaci&oacute;n fue el <b>%s</b>.',
	'ctracker_fscan_option1' => 'Comenzar la comprobaci&oacute;n de archivos',
	'ctracker_fscan_option2' => 'Mostrar resultados',


/*
* Global message in ACP
*/
	'ctracker_glob_msg_head' => 'Mensaje global',
	'ctracker_glob_msg_subhead' => '<b>Aqu&iacute; puede dejar un mensaje global a todos los usuarios.</b><br /> Este mensaje lo ver&aacute;n los usuarios en su siguiente identificaci&oacute;n. Puede referirlo a un mensaje ya existente o escribir su propio texto.<br /><b>Nota:</b> Hay un l&iacute;mite impuesto de (255 caracteres)',
	'ctracker_glob_msg_entry' => 'Fijar mensaje global ',
	'ctracker_glob_msg_submit' => 'Insertar',
	'ctracker_glob_msg_reset' => 'Cancelar mensaje',
	'ctracker_glob_msg_type' => 'Escriba el mensaje global',
	'ctracker_glob_type_1' => 'Texto',
	'ctracker_glob_type_2' => 'Enlace',
	'ctracker_glob_msg_txt' => 'Texto del mensaje global',
	'ctracker_glob_msg_link' => 'Enlace de destino en el mensaje',
	'ctracker_glob_msg_reset' => 'Cancelar mensaje actual',
	'ctracker_glob_res_txt' => 'Si pulsa en "Cancelar mensaje actual", el mensaje guardado se cancelar&aacute;.',
	'ctracker_glob_msg_saved' => 'El mensaje global se ha guardado.<br /><br />Pulse <a href="%s">Aqu&iacute;</a> para volver a la administraci&oacute;n de CrackerTracker.',
	'ctracker_glob_msg_reset_ok' => 'El mensaje global ha sido borrado de la tabla del usuario. El mensaje incorporado no se mostrar&aacute; m&aacute;s.<br /><br />Pulse <a href="%s">Aqu&iacute;</a> para volver a la administraci&oacute;n CrackerTracker.',

/*
* IP&Agent Blocker
*/
	'ctracker_ipb_delete' => 'Borrar entrada',
	'ctracker_ipb_blocklist' => 'Lista de entradas bloqueadas',
	'ctracker_ipb_head' => 'Bloquear proxy, IP y agente de usuario',
	'ctracker_ipb_description' => 'Aqu&iacute; puede administrar la lista de proxy, IP y agente de usuario bloqueados. Puede borrar las entradas existentes y a&ntilde;adir otras nuevas. Con una nueva entrada tiene la opci&oacute;n de utilizar (*) para introducir cualquier combinaci&oacute;n en la lista. Por ejemplo: lwp* bloquea lwp-1 as&iacute; como lwp-simple, etc. O 100.*.*.* bloquea todas las direcciones IP que empiecen por 100.<br /><br /><b>ATENCI&Oacute;N:</b> Cuide de no bloquear su propio agente de usuario o direcci&oacute;n IP... &iexcl;o no podr&aacute; entrar a su propio foro!',


/*
* Log Manager
*/
	'ctracker_log_manager_title' => 'Administrar archivo log',
	'ctracker_log_manager_subtitle' => 'Aqu&iacute; puede mostrar o borrar todos los archivos del log de CrackerTracker.',
	'ctracker_log_manager_overview' => 'Administrar descripci&oacute;n del log',
	'ctracker_log_manager_blocked' => 'CrackerTracker ha bloqueado <b>%s</b> ataques hasta ahora.',
	'ctracker_log_manager_overview' => 'Descripci&oacute;n del archivo log',
	'ctracker_log_manager_head1' => 'Nombre del log',
	'ctracker_log_manager_head2' => 'N&uacute;mero de entradas',
	'ctracker_log_manager_head3' => 'Caracter&iacute;sticas',
	'ctracker_log_manager_name2' => 'Protecci&oacute;n de worm y exploit',
	'ctracker_log_manager_name3' => 'Bloquear IP, proxy y agente de usuario',
	'ctracker_log_manager_name4' => 'Identificaciones incorrectas',
	'ctracker_log_manager_name5' => 'Spammers bloqueados',
	'ctracker_log_manager_name6' => 'Entradas debug',
	'ctracker_log_manager_view' => 'VER',
	'ctracker_log_manager_delete' => 'BORRAR',
	'ctracker_log_manager_delete_all' => 'Borrar todo el archivo log',
	'ctracker_log_manager_deleted' => '&iexcl;El archivo log se ha borrado correctamente!',
	'ctracker_log_manager_all_deleted' => '&iexcl;Todos los archivos log han sido borrados correctamente!',
	'ctracker_log_manager_showheader1' => 'Hay <b>una</b> entrada en este archivo log. Pulse <b><a href="%s">Aqu&iacute;</a></b> para volver a descripci&oacute;n del archivo log.',
	'ctracker_log_manager_showheader' => 'Hay <b>%s</b> entradas en este archivo log.<br />Pulse <b><a href="%s">Aqu&iacute;</a></b> para volver a descripci&oacute;n del archivo log.',
	'ctracker_log_manager_showlog' => 'Ver archivo log',
	'ctracker_log_manager_cell_1' => 'Fecha/hora',
	'ctracker_log_manager_cell_2a' => 'Appeal',
	'ctracker_log_manager_cell_2b' => 'Nombre',
	'ctracker_log_manager_cell_3' => 'Referido',
	'ctracker_log_manager_cell_4' => 'Agente de usuario',
	'ctracker_log_manager_cell_5' => 'Direcci&oacute;n IP',
	'ctracker_log_manager_cell_6' => 'Host remoto',
	'ctracker_log_manager_sysmsg' => 'La &uacute;ltima limpieza del archivo log fue el <b>%s</b>.',

/*
* Footer configuration
*/
	'ctracker_footer_head' => 'Administrar pie de p&aacute;gina',
	'ctracker_footer_subhead' => 'Aqu&iacute; puede elegir qu&eacute; pie de p&aacute;gina de CrackerTracker quiere mostrar en su foro. &iexcl;Por favor, no cambie del pie de p&aacute;gina el enlace a www.cback.de!',
	'ctracker_select_footer' => 'Elegir pie de p&aacute;gina',
	'ctracker_footer_saveit' => 'Aceptar la disposici&oacute;n del pie de p&aacute;gina',
	'ctracker_footer_done' => '&iexcl;Los cambios en el pie de p&aacute;gina han sido guardados correctamente!',

/*
* Maintenance Module in ACP
*/
	'ctracker_ma_unknown' => '<font color="#FFB900"><b>DESCONOCIDO</b></font>',
	'ctracker_ma_secure' => '<font color="#1CBF00"><b>SEGURO</b></font>',
	'ctracker_ma_warning' => '<font color="#FF0000"><b>CUIDADO</b></font>',
	'ctracker_ma_active' => '<font color="#1CBF00"><b>ACTIVO</b></font>',
	'ctracker_ma_inactive' => '<font color="#FF0000"><b>NO ACTIVO</b></font>',
	'ctracker_ma_ca' => '<font color="#1CBF00"><b>BIEN</b></font>',
	'ctracker_ma_ci' => '<font color="#FF0000"><b>NO FIJADO</b></font>',
	'ctracker_ma_head' => 'Comprobador de mantenimiento y sistema',
	'ctracker_ma_subhead' => 'Este sistema examina autom&aacute;ticamente los m&oacute;dulos de seguridad de CrackerTracker de caracter&iacute;sticas y demostraciones, para as&iacute; optimizar su sistema.',
	'ctracker_ma_systest' => 'Prueba autom&aacute;tica del sistema',
	'ctracker_ma_sectest' => 'Prueba de seguridad',
	'ctracker_ma_maint' => 'Funci&oacute;n de servicio',
	'ctracker_ma_name_1' => 'Sistema de protecci&oacute;n de worm y exploit',
	'ctracker_ma_name_2' => 'Unidad de control de variable',
	'ctracker_ma_name_3' => 'Unidad de protecci&oacute;n de IP, proxy y agente de usuario',
	'ctracker_ma_name_4' => 'Worm obtenido de las definiciones de la heur&iacute;stica - n&uacute;mero de definiciones: <b>%s</b>',
	'ctracker_ma_syshead_1' => 'M&oacute;dulo de seguridad',
	'ctracker_ma_syshead_2' => 'Estado',
	'ctracker_ma_seccheck_1' => 'Punto de comprobaci&oacute;n',
	'ctracker_ma_seccheck_2' => 'Versi&oacute;n/estado',
	'ctracker_ma_seccheck_3' => 'Referencia',
	'ctracker_ma_seccheck_4' => 'Estado',
	'ctracker_ma_scheck_1' => 'Versi&oacute;n PHP (<a href="http://www.php.net" target="_blank">Visite el sitio web</a>)',
	'ctracker_ma_scheck_2' => '&raquo; PHP MODO SEGURO',
	'ctracker_ma_scheck_3' => '&raquo; PHP GLOBALES',
	'ctracker_ma_scheck_4' => 'Versi&oacute;n phpBB (<a href="http://www.phpbb.com" target="_blank">Visite el sitio web</a>)',
	'ctracker_ma_scheck_4a' => '&raquo; Confirmaci&oacute;n visual',
	'ctracker_ma_scheck_4b' => '&raquo; Activaci&oacute;n de cuenta',
	'ctracker_ma_scheck_5' => 'CBACK CrackerTracker (<a href="http://www.cback.de" target="_blank">Visite el sitio web</a>)',
	'ctracker_ma_chmod' => '<b>Estado de CHMOD777:</b> ',
	'ctracker_ma_desc_link' => 'EJECUTAR AHORA',
	'ctracker_ma_desc1' => '<b>Limpiar la tabla de IP, proxy y agente de usuario</b><br />Aqu&iacute; puede borrar <u>todas</u> las entradas de la tabla de IP, proxy y agente de usuario.',
	'ctracker_ma_desc2' => '<b>Ajuste de f&aacute;brica: bloquear IP, proxy y agente de usuario</b><br />Aqu&iacute; puede restaurar el estado inicial de los datos de la base de datos de IP, proxy y agente de usuario. &iexcl;Se perder&aacute;n sus filtros!',
	'ctracker_ma_desc3' => '<b>Borrar historial de identificaci&oacute;n</b><br />Aqu&iacute; puede borrar todas las entradas del historial de identificaci&oacute;n, por encima de lo que haya decidido cada usuario.',
	'ctracker_ma_desc4' => '<b>Limpiar archivo-Tabla de comprobaci&oacute;n</b><br />Aqu&iacute; puede borrar todas las entradas guardadas de la tabla de archivo-Comprobaci&oacute;n.',
	'ctracker_ma_desc5' => '<b>Limpiar la tabla de exploraci&oacute;n de seguridad</b><br />Aqu&iacute; puede borrar todos los resultados que fueron almacenados durante el examen de seguridad de archivo en la base de datos.',
	'ctracker_ma_succ_main' => '&iexcl;Proceso ejecutado correctamente!',
	'ctracker_ma_err_main' => '&iexcl;Proceso ejecutado correctamente!',


/*
* Miserable User Module in ACP...
*/
	'ctracker_mu_subhead' => 'Supongamos que un usuario no se comporta bien, y se ha registrado con otra cuenta diferente despu&eacute;s de ser expulsado. Hay una caracter&iacute;stica llamada "Usuario miserable" que se solicit&oacute; con frecuencia. CrackerTracker procede seg&uacute;n el principio de "No alimentar al mono". Y, as&iacute;, los mensajes de alguien marcado como "Usuario miserable" solo podr&aacute;n ser le&iacute;dos por los administradores. Para otros usuarios, esos mensajes ser&aacute;n invisibles. Por lo tanto nadie tiene que ocuparse del problema y nadie dar&aacute; juego al usuario miserable (que es lo que &eacute;l desea), por lo que &eacute;l mismo se aburrir&aacute; y acabar&aacute; dejando el foro.<br /><br /><b>Nota: <u>Esta funci&oacute;n permite hacer desaparecer los mensajes dentro de un tema.</u> Usando "Citar" o "Buscar" todav&iacute;a se muestran los mensajes del "Usuario miserable"!',

	'ctracker_mu_select' => 'Marcar a un usuario como usuario miserable',
	'ctracker_mu_find' => 'Buscar los usuario(s)',
	'ctracker_mu_send' => 'Introducir nombres de usuario',
	'ctracker_mu_entr' => 'Usuario(s) marcado(s)',
	'ctracker_mu_uname' => 'Usuario(s) introducido(s)',
	'ctracker_mu_remove' => 'Borrar entradas',
	'ctracker_mu_no_defined' => 'No hay usuarios marcados como "Usuario miserable".',


/*
* Recovery feature in ACP
*/
	'ctracker_rec_head' => 'Recuperaci&oacute;n del sistema',
	'ctracker_rec_subhead' => 'Aqu&iacute; puede realizar una copia de seguridad de la tabla de configuraci&oacute;n de su foro, o puede ir a la &uacute;ltima configuraci&oacute;n que funcion&oacute;. Si ha activado esta caracter&iacute;stica en los ajustes generales de CrackerTracker, se realizar&aacute; una copia de seguridad cada vez que cambie los ajustes generales. (&iexcl;ATENCI&Oacute;N! &iexcl;Esto <b>NO</b> es una copia de seguridad completa de la base de datos!)<br /><br />Cuando haya cambiado algunos ajustes y no pueda usar su ACP, puede reactivar la &uacute;ltima configuraci&oacute;n que funcion&oacute; usando la consola de emergencia de CrackerTracker. Por favor, lea el comentario del archivo <i>ctracker/emergency.php</i> para m&aacute;s instrucciones de las configuraciones del foro en una emergencia (note que ese archivo tiene que ser habilitado antes de usarlo).<br /><br /><b>&iexcl;Cuidado!</b> &iexcl;Esta caracter&iacute;stica debe usarse s&oacute;lo con problemas serios!',
	'ctracker_rec_last_saved' => '&Uacute;ltima copia de seguridad de la tabla de configuraci&oacute;n: <b>%s</b>',
	'ctracker_rec_never_saved' => '&iexcl;La tabla de configuraci&oacute;n no se ha copiado por ahora!',
	'ctracker_rec_backup' => 'Copia de seguridad de la tabla de configuraci&oacute;n',
	'ctracker_rec_restore' => 'Recuperar la &uacute;ltima tabla de configuraci&oacute;n que funcion&oacute;',
	'ctracker_rec_succ' => 'El proceso en la base de datos se ejecut&oacute; correctamente.',
	'ctracker_rec_pab' => '&iexcl;La recuperaci&oacute;n no est&aacute; disponible, antes debe usted crear una copia de seguridad correcta!',
	)
);
?>