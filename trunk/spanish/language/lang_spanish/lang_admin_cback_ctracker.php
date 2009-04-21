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
	'ctracker_module_2' => 'Créditos',
	'ctracker_module_3' => 'Explorar archivos',
	'ctracker_module_4' => 'Noticias globales',
	'ctracker_module_5' => 'Bloquear IP y agente',
	'ctracker_module_6' => 'Administrar log',
	'ctracker_module_7' => 'Mantenimiento y pruebas',
	'ctracker_module_8' => 'Usuario miserable',
	'ctracker_module_9' => 'Ajustes',
	'ctracker_module_10' => 'Recuperación',
	'ctracker_module_11' => 'Pie de página',


/*
* Language Strings used in ACP Modules itself
*/
	'ctracker_wrong_module' => 'Número de módulo desconocido',
	'ctracker_img_descriptions' => 'Imagen',
	'ctracker_set_catname1' => 'Bloquear IP, proxy y agente de usuario',
	'ctracker_set_catname2' => 'Sistema de protección de búsqueda',
	'ctracker_set_catname3' => 'Sistema de protección de identificación',
	'ctracker_set_catname4' => 'Detección de autospam',
	'ctracker_set_catname5' => 'Sistema de protección del registro',
	'ctracker_set_catname6' => 'Comprobar contraseña	',
	'ctracker_set_catname7' => 'Características generales de seguridad',
	'ctracker_set_catname8' => 'Otros ajustes',
	'ctracker_settings_head' => 'Ajustes de CrackerTracker',
	'ctracker_settings_expl' => 'Aquí puede modificar todos los ajustes para requisitos generales del sistema de seguridad de CBACK CrackerTracker.',
	'ctracker_button_submit' => 'Guardar ajustes',
	'ctracker_button_reset' => 'Restaurar',

	'ctracker_settings_m1' => 'Activar bloquear IP',
	'ctracker_settings_e1' => 'Ajustar el bloquear IP, proxy y agente de usuario en encendido o apagado.',
	'ctracker_settings_m2' => 'Tamaño del log de bloquear IP',
	'ctracker_settings_e2' => 'Aquí puede fijar el número de entradas que guardará el archivo de log de bloquear IP. Si se supera ese número, el archivo del log será borrado automáticamente para ahorrar espacio.',
	'ctracker_settings_m3' => 'Activar protección de búsqueda',
	'ctracker_settings_e3' => 'Activa o desactiva el sistema de protección de búsqueda.',
	'ctracker_settings_m4' => 'Tiempo de búsqueda para los usuarios',
	'ctracker_settings_e4' => 'Si activa la protección de búsqueda, este será el tiempo (en segundos) que un usuario registrado deberá esperar para realizar una nueva búsqueda.',
	'ctracker_settings_m5' => 'Número de búsquedas para los usuarios',
	'ctracker_settings_e5' => 'Elija cuántas consultas puede hacer un usuario registrado en el tiempo indicado arriba. Si se supera ese número, no serán posibles nuevas consultas durante ese tiempo, para reducir la carga del servidor.',
	'ctracker_settings_m6' => 'Tiempo de búsqueda para los invitados',
	'ctracker_settings_e6' => 'Marque cuántos segundos deben esperar los invitados si el sistema de protección de búsqueda esta activado.',
	'ctracker_settings_m7' => 'Número de búsquedas para los invitados',
	'ctracker_settings_e7' => 'Elija cuántas búsquedas puede hacer un invitado en el periodo de tiempo espeficado. Si se supera ese número, no serán posibles nuevas consultas durante ese tiempo, para reducir la carga del servidor.',
	'ctracker_settings_m8' => 'Ajustar en encendido la protección de identificación',
	'ctracker_settings_e8' => 'Aquí puede activar o desactivar el sistema de protección de identificación de CrackerTracker.',
	'ctracker_settings_m9' => 'Tamaño del log para identificaciones erróneas',
	'ctracker_settings_e9' => 'Aquí puede ajustar cuántas entradas de identificaciones erróneas deben ser guardadas antes de ser borradas automáticamente para ahorrar espacio web.',
	'ctracker_settings_m10' => 'Número de identificaciones hasta la confirmación visual',
	'ctracker_settings_e10' => 'Cuantas veces un usuario puede fallar en su identificación antes de la protección de ataques de fuerza bruta, donde se mostrara la confirmación visual.',
	'ctracker_settings_m11' => 'Historial de identificación',
	'ctracker_settings_e11' => 'Aquí puede activar o desactivar el historial de identificación de usuarios.',
	'ctracker_settings_m12' => 'Entradas en el historial de idenficación por usuario',
	'ctracker_settings_e12' => 'Aquí puede ajustar cuántas identificaciones correctas por usuario deben ser guardadas en el historial de identificación. Cada usuario tiene la opción de comprobar la fecha y las direcciones IP de sus identificaciones.',
	'ctracker_settings_m13' => 'Característica de identificación de IP',
	'ctracker_settings_e13' => 'Activar o desactivar el sistema de identificación de IP. Cada usuario tiene la opción de activar o desactivar la página del sistema de seguridad de identificación. El sistema de protección de IP comprueba los cambios de las direcciones IP. El usuario será informado si su rango de IP ha sido modificado desde su ultima identificación. Aquí vera si alguien ha entrado desde una localización diferente.',
	'ctracker_settings_m14' => 'Detección de spammer',
	'ctracker_settings_e14' => 'Aquí puede ajustarse el modo de detección automática de spammer.',
	'ctracker_settings_m15' => 'Periodo de tiempo para el spammer',
	'ctracker_settings_e15' => 'Periodo de tiempo en el cual los mensajes de los usuarios serán contados por el detector de spammer (en segundos).',
	'ctracker_settings_m16' => 'Número de mensajes de spammer',
	'ctracker_settings_e16' => 'Número de mensajes permitido en el periodo de tiempo ajustado. Si este número se supera el usuario será identificado como un spammer.',
	'ctracker_settings_m17' => 'Tamaño del log de spammer',
	'ctracker_settings_e17' => 'Tamaño del log en el cual se guardarán los usuarios identificados como spammer.',
	'ctracker_settings_m18' => 'Protección del registro',
	'ctracker_settings_e18' => 'Aquí puede activar o desactivar la protección del registro.',
	'ctracker_settings_m19' => 'Tiempo de bloqueo para el registro',
	'ctracker_settings_e19' => 'Aquí puede ajustar el tiempo entre dos registros (en segundos)-',

	'ctracker_settings_m21' => 'Vigilante de IP',
	'ctracker_settings_e21' => 'Si se activa esta característica, un usuario con una dirección IP idéntica podrá registrarse, hasta que alguien se haya registrado con otra dirección IP.',
	'ctracker_settings_m22' => 'Validez de contraseña',
	'ctracker_settings_e22' => 'Activar la comprobación de validez de contraseña para todos los usuarios.',
	'ctracker_settings_m23' => 'Validez de contraseña en días',
	'ctracker_settings_e23' => 'Cuánto tiempo será válida la contraseña del usuario antes de que se le muestre un aviso de que la contraseña debe ser cambiada (en días).',
	'ctracker_settings_m24' => 'Comprobar la complejidad de la contraseña',
	'ctracker_settings_e24' => 'Esta característica comprueba la complejidad de las contraseñas de los usuarios.',
	'ctracker_settings_m25' => 'Modo de contraseña compleja',
	'ctracker_settings_e25' => 'Aquí puede ajustar si tiene que haber INDICACIÓN en las contraseñas.',
	'ctracker_settings_m26' => 'Tamaño mínimo de la contraseña',
	'ctracker_settings_e26' => 'Aquí puede ajustar el número mínimo de letras para la contraseña.',
	'ctracker_settings_m27' => 'Comprobador del reajuste de contraseña',
	'ctracker_settings_e27' => 'Permite reajustar una contraseña desde un cierto período de tiempo (para los usuarios). Esto previene que los atacantes no puedan utilizar esta característica a los usuarios spammers que usan resetmails.',
	'ctracker_settings_m28' => 'Periodo de tiempo de reajuste de contraseña',
	'ctracker_settings_e28' => 'Periodo de tiempo en que los usuarios pueden reajustar su contraseña (en minutos).',
	'ctracker_settings_m29' => 'Monitorizar el correo',
	'ctracker_settings_e29' => 'Aquí puede activar esta característica, así los usuarios pueden utilizar la función de correo del foro solamente una vez en el período de tiempo marcado. Esto previene el spamming.',
	'ctracker_settings_m30' => 'Tiempo de spam e-mail',
	'ctracker_settings_e30' => 'Periodo de tiempo en el que un usuario puede enviar dos e-mails usando la función interna de correo (en minutos).',
	'ctracker_settings_m31' => 'Autorecuperación',
	'ctracker_settings_e31' => 'Active esta característica para guardar los ajustes del foro automáticamente. Si esto no funciona, puede utilizar la última configuración.',
	'ctracker_settings_m32' => 'Confirmación visual para invitados',
	'ctracker_settings_e32' => 'Cuando se activa esta caracteristica, los invitados tienen que introducir un código visual para escribir nuevos mensajes. De no ser así, no podrán enviar el mensaje. Esto protege contra los spambots automáticos.',
	'ctracker_settings_m33' => 'Protección del servicio disponible de correo',
	'ctracker_settings_e33' => 'CrackerTracker tiene una lista interna de servicios de correo no disponibles. Si activa esta característica, los usuarios con tales direcciones de correo no podrán registrarse.',
	'ctracker_settings_m34' => 'Identificación de configuración incorrecta',
	'ctracker_settings_e34' => 'Cuando activa esta característica, CrackerTracker comprueba los ajustes generales de phpBB y su validez. ¡No puede dañar a su foro por la configuración!',
	'ctracker_settings_m35' => 'Detección de spammer',
	'ctracker_settings_e35' => 'Cuando activa esta característica, CrackerTracker observará los spammers humanos o spamposts. La mayor parte de ellos serán bloqueados.',
	'ctracker_settings_m36' => 'Comprobar palabras clave de spammer',
	'ctracker_settings_e36' => 'Cuando activa "Detección de spammer", las palabras claves en el perfil y los mensajes serán exploradas para identificar spammers.<br /><br /><b>ATENCIÓN</b> Aquí existe un riesgo más alto de la detección de algún BUG para los nuevos usuarios. Por favor compruebe el fichero log para saber si hay detección del spammer.',


/*
* Credits page in ACP
*/
	'ctracker_credits_head' => 'Créditos',
	'ctracker_credits_subhead' => 'Aquí están los créditos de CBACK CrackerTracker. Aquí le daremos más información sobre seguridad, y esto es también una manera de decir "Gracias".',
	'ctracker_credits_donate' => 'Donar',
	'ctracker_credits_donate_expl' => '¿Quiere <b>CBACK CrackerTracker Profesional</b>? Entonces seria estupendo que hiciera una donación al proyecto de CBACK usando la donación de PayPal. El desarrollo adicional y los costes del servidor no ayudan a nuestro proyecto no lucrativo. Así podremos seguir proporcionando CrackerTracker gratuitamente en el futuro.<br /><br />Muchas gracias por su aporte.',
	'ctracker_credits_credits' => 'Créditos',
	'ctracker_credits_credits_1' => 'Idea e implementación',
	'ctracker_credits_credits_2' => 'Autor y soporte',
	'ctracker_credits_credits_3' => 'Iconos',
	'ctracker_credits_credits_4' => 'Sitio de descarga oficial',
	'ctracker_credits_moddownload' => 'Descargar CrackerTracker MOD',
	'ctracker_credits_thanks' => 'Gracias a...',
	'ctracker_credits_thanks_text' => 'Quisiera darle las gracias a las siguientes personas:',
	'ctracker_credits_thanks_to' => '<b>Ideas, pruebas de seguridad y correcciones</b><br />Tekin Birdüzen<br /><i>(<a href="http://www.cybercosmonaut.de" target="_blank">cYbercOsmOnauT</a>)</i><br /><br /><br /><br /><b>Ideas:</b><br />Bernhard Jaud<br /><i>(GenuineParts)</i><br /><br /><br /><br /><b>Traductor (Ingles)</b><br />Marc Renninger<br /><i>(mc-dragon)</i><br /><br /><br /><br /><b>Corrector (Ingles)</b><br />George <br />Sommerset<br /><i>(<a href="http://www.englisch-hilfen.de" target="_blank">www.englisch-hilfen.de</a>)</i><br /><br /><br /><br /><b>Beta tester</b><br />Gracias a todos los participantes de Beta-Tests<br />a los usuarios de CBACK Premium y por supuesto a<br />nuestros colegas de la "Escena-Mod" quienes también nos ayudaron en Beta tests y correcciones.</i>',
	'ctracker_credits_info' => '¿Más seguridad?',
	'ctracker_credits_info_text' => 'El MOD perfecto para phpBB y CrackerTracker: Para una optima seguridad recomendamos el MOD <b>confirmación visual avanzada</b> por AmigaLink. Este MOD mejora la característica CAPTCHA de phpBB y CrackerTracker Profesional con un sistema más complejo que no pueden leer los robots. Este MOD puede descargarlo en <a href="http://www.amigalink.de" target="_blank">www.AmigaLink.de</a>.<br /><br /><br /><br />Sugerimos que también integre este MOD en su foro para una seguridad excelente.',


/*
* File Hash Check in ACP
*/
	'ctracker_fchk_head' => 'Comprobador explorador CrackerTracker',
	'ctracker_fchk_subhead' => 'Esta exploración crea una comprobación de cada uno de los archivos PHP de su foro con un clic en "Crear o Actualizar comprobador". Después, siempre tiene la posibilidad con “Verificar cambios del archivo” para determinar si los archivos fueron cambiados o no desde su última comprobación. Puede ver si los archivos fueron cambiados aunque no lo pareza. Esto es generalmente una muestra de que alguien había accedido a su volumen de datos del foro. ¡Preste atención a la última vez que lo comprobó, para ver si una persona no autorizada activó el explorador de comprobación!<br /><br /><br /><b>Información:</b> No todos los servidores soportan esta característica. Ocasionalmente esto puede ocasionar un aviso de "fuera de tiempo" si el servidor se toma demasiado tiempo para producir la lista del archivo de phpBB. Otros servidores paran el procedimiento, puesto que es un funcionamiento absolutamente intensivo.<br /><br /><br />&raquo; La última actualización del archivo de comprobación ocurrió <b>%s</b>.',
	'ctracker_fchk_funcheader' => 'Características',
	'ctracker_fchk_tableheader' => 'Advertencia',
	'ctracker_fchk_option1' => 'Crear o actualizar comprobador',
	'ctracker_fchk_option2' => 'Verificar cambios del archivo',
	'ctracker_fchk_select_action' => '¡Por favor, elija una opción!',
	'ctracker_fchk_update_action' => '¡Comprobador actualizado!',
	'ctracker_fchk_tablehead1' => 'Ruta del archivo',
	'ctracker_fchk_tablehead2' => 'Estado',
	'ctracker_file_unchanged' => 'NO MODIFICADO',
	'ctracker_file_changed' => 'MODIFICADO',
	'ctracker_file_deleted' => 'BORRADO',


/*
* File Safety Scanner in ACP
*/
	'ctracker_fscan_complete' => 'El explorador de archivos ha sido ejecutado correctamente. Por favor, pulse en "Mostrar resultados" para verlos. Puede corregir los archivos.<br /><br /><br /><br /><u>AVISO:</u><br /><br />Puede suceder de vez en cuando que CrackerTracker detecte un archivo como inseguro porque un desarrollador haya querido que el código de ese archivo pueda ser escrito desde el exterior. En este caso - y SOLAMENTE si está absolutamente seguro- puede usted decir a CRACKERTRACKER que éste es un archivo seguro. Debe escribir en este archivo, al principio: <?php el siguiente código: <br /><br /><br /><i>// CTracker_Ignore: File Checked By Human</i><br /><br /><br />Si usted no está segurom puede consultar en la <a href="http://www.community.cback.de" target="_blank">Comunidad CBACK</a> para más instrucciones.',
	'ctracker_fscan_unchecked' => 'NO COMPROBADO',
	'ctracker_fscan_ok' => 'SEGURO',
	'ctracker_fscan_prob_1' => 'extension.inc no/incluido demasiado tarde',
	'ctracker_fscan_prob_2' => '$phpbb_root_path quizá no se inicializó correctamente',
	'ctracker_fscan_prob_3' => 'common.php / pagestart.php quizá no fue incluido o demasiado tarde',
	'ctracker_fscan_prob_4' => 'El código en el archivo es posiblemente ejecutable más allá de phpBB',
	'ctracker_fscan_prob_5' => 'extension.inc falta y/o $phpbb_root_path y/o constante no se encontró',
	'ctracker_fscan_prob_def' => 'Un caso indefinido ocurrió durante la exploración',
	'ctracker_fscan_important' => 'Por favor, atienda:',
	'ctracker_fscan_sel_action' => 'Para comenzar la comprobación de todos los archivos, pulse en "Comenzar la comprobación de archivos". Cuando termine, pulse en "Mostrar resultados" para ver los resultados. Esa lista se puede recuperar en cualquier momento usando el ACP (hasta que se realice una nueva comprobación).<br /><br /><br />Por razones técnicas no es posible dar una una información absolutamente segura de si un script es <u>correcto</u> o <u>incorrecto</u>. Pudiera suceder que el explorador clasifique un archivo como seguro y no lo sea, y viceversa. PHP y sus códigos son así de complejos. Con todo, hay un alto tanto por ciento de seguridad (y esto síe s totalmente seguro)<br /><br /><br />Este explorador detecta los agujeros de seguridad en los ficheros de su foro. Así, usted puede corregirlos fácilmente.<br /><br /><br />Para más detalles e instrucciones use la comunidad CBACK.<br /><br /><br />',
	'ctracker_fscan_head' => 'Exploración de seguridad',
	'ctracker_fscan_subhead' => 'Este explorador de seguridad comprueba todos los archivos de PHP de su foro, y detecta los que pudieran tener problemas importantes. Así evita agujeros de seguridad que podrían ser utilizados maliciosamente desde el exterior sin usar los archivos del foro, en el caso de que CrackerTracker estuviera inactivo y no pudiera proteger el archivo. Este módulo detecta esos agujeros y los corrige.<br /><br /><br /><b>Pero tenga en cuenta</b> que no todos los servidores soportan esta característica.  En foros muy grandes puede suceder que el funcionamiento intensivo de la exploración sobrepase el tiempo de ejecución permitido en su PHP. El algoritmo de este explorador se ha optimizado lo más posible para que no supere los límites marcados. Pero tal cosa puede darse en algunas máquinas, no lo olvide.<br /><br /><br />&raquo; La última comprobación fue el <b>%s</b>.',
	'ctracker_fscan_option1' => 'Comenzar la comprobación de archivos',
	'ctracker_fscan_option2' => 'Mostrar resultados',


/*
* Global message in ACP
*/
	'ctracker_glob_msg_head' => 'Mensaje global',
	'ctracker_glob_msg_subhead' => '<b>Aquí puede dejar un mensaje global a todos los usuarios.</b><br /> Este mensaje lo verán los usuarios en su siguiente identificación. Puede referirlo a un mensaje ya existente o escribir su propio texto.<br /><b>Nota:</b> Hay un límite impuesto de (255 carácteres)',
	'ctracker_glob_msg_entry' => 'Fijar mensaje global ',
	'ctracker_glob_msg_submit' => 'Insertar',
	'ctracker_glob_msg_reset' => 'Cancelar mensaje',
	'ctracker_glob_msg_type' => 'Escriba el mensaje global',
	'ctracker_glob_type_1' => 'Texto',
	'ctracker_glob_type_2' => 'Enlace',
	'ctracker_glob_msg_txt' => 'Texto del mensaje global',
	'ctracker_glob_msg_link' => 'Enlace de destino en el mensaje',
	'ctracker_glob_msg_reset' => 'Cancelar mensaje actual',
	'ctracker_glob_res_txt' => 'Si pulsa en "Cancelar mensaje actual", el mensaje guardado se cancelará.',
	'ctracker_glob_msg_saved' => 'El mensaje global se ha guardado.<br /><br />Pulse <a href="%s">Aquí</a> para volver a la administración de CrackerTracker.',
	'ctracker_glob_msg_reset_ok' => 'El mensaje global ha sido borrado de la tabla del usuario. El mensaje incorporado no se mostrará más.<br /><br />Pulse <a href="%s">Aquí</a> para volver a la administración CrackerTracker.',

/*
* IP&Agent Blocker
*/
	'ctracker_ipb_delete' => 'Borrar entrada',
	'ctracker_ipb_blocklist' => 'Lista de entradas bloqueadas',
	'ctracker_ipb_head' => 'Bloquear proxy, IP y agente de usuario',
	'ctracker_ipb_description' => 'Aquí puede administrar la lista de proxy, IP y agente de usuario bloqueados. Puede borrar las entradas existentes y añadir otras nuevas. Con una nueva entrada tiene la opción de utilizar (*) para introducir cualquier combinación en la lista. Por ejemplo: lwp* bloquea lwp-1 así como lwp-simple, etc. O 100.*.*.* bloquea todas las direcciones IP que empiecen por 100.<br /><br /><b>ATENCIÓN:</b> Cuide de no bloquear su propio agente de usuario o dirección IP... ¡o no podrá entrar a su propio foro!',


/*
* Log Manager
*/
	'ctracker_log_manager_title' => 'Administrar archivo log',
	'ctracker_log_manager_subtitle' => 'Aquí puede mostrar o borrar todos los archivos del log de CrackerTracker.',
	'ctracker_log_manager_overview' => 'Administrar descripción del log',
	'ctracker_log_manager_blocked' => 'CrackerTracker ha bloqueado <b>%s</b> ataques hasta ahora.',
	'ctracker_log_manager_overview' => 'Descripción del archivo log',
	'ctracker_log_manager_head1' => 'Nombre del log',
	'ctracker_log_manager_head2' => 'Número de entradas',
	'ctracker_log_manager_head3' => 'Características',
	'ctracker_log_manager_name2' => 'Protección de worm y exploit',
	'ctracker_log_manager_name3' => 'Bloquear IP, proxy y agente de usuario',
	'ctracker_log_manager_name4' => 'Identificaciones incorrectas',
	'ctracker_log_manager_name5' => 'Spammers bloqueados',
	'ctracker_log_manager_name6' => 'Entradas debug',
	'ctracker_log_manager_view' => 'VER',
	'ctracker_log_manager_delete' => 'BORRAR',
	'ctracker_log_manager_delete_all' => 'Borrar todo el archivo log',
	'ctracker_log_manager_deleted' => '¡El archivo log se ha borrado correctamente!',
	'ctracker_log_manager_all_deleted' => '¡Todos los archivos log han sido borrados correctamente!',
	'ctracker_log_manager_showheader1' => 'Hay <b>una</b> entrada en este archivo log. Pulse <b><a href="%s">Aquí</a></b> para volver a descripción del archivo log.',
	'ctracker_log_manager_showheader' => 'Hay <b>%s</b> entradas en este archivo log.<br />Pulse <b><a href="%s">Aquí</a></b> para volver a descripción del archivo log.',
	'ctracker_log_manager_showlog' => 'Ver archivo log',
	'ctracker_log_manager_cell_1' => 'Fecha/hora',
	'ctracker_log_manager_cell_2a' => 'Appeal',
	'ctracker_log_manager_cell_2b' => 'Nombre',
	'ctracker_log_manager_cell_3' => 'Referido',
	'ctracker_log_manager_cell_4' => 'Agente de usuario',
	'ctracker_log_manager_cell_5' => 'Dirección IP',
	'ctracker_log_manager_cell_6' => 'Host remoto',
	'ctracker_log_manager_sysmsg' => 'La última limpieza del archivo log fue el <b>%s</b>.',

/*
* Footer configuration
*/
	'ctracker_footer_head' => 'Administrar pie de página',
	'ctracker_footer_subhead' => 'Aquí puede elegir qué pie de página de CrackerTracker quiere mostrar en su foro. ¡Por favor, no cambie del pie de página el enlace a www.cback.de!',
	'ctracker_select_footer' => 'Elegir pie de página',
	'ctracker_footer_saveit' => 'Aceptar la disposición del pie de página',
	'ctracker_footer_done' => '¡Los cambios en el pie de página han sido guardados correctamente!',

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
	'ctracker_ma_subhead' => 'Este sistema examina automáticamente los módulos de seguridad de CrackerTracker de características y demostraciones, para así optimizar su sistema.',
	'ctracker_ma_systest' => 'Prueba automática del sistema',
	'ctracker_ma_sectest' => 'Prueba de seguridad',
	'ctracker_ma_maint' => 'Función de servicio',
	'ctracker_ma_name_1' => 'Sistema de protección de worm y exploit',
	'ctracker_ma_name_2' => 'Unidad de control de variable',
	'ctracker_ma_name_3' => 'Unidad de protección de IP, proxy y agente de usuario',
	'ctracker_ma_name_4' => 'Worm obtenido de las definiciones de la heurística - número de definiciones: <b>%s</b>',
	'ctracker_ma_syshead_1' => 'Módulo de seguridad',
	'ctracker_ma_syshead_2' => 'Estado',
	'ctracker_ma_seccheck_1' => 'Punto de comprobación',
	'ctracker_ma_seccheck_2' => 'Versión/estado',
	'ctracker_ma_seccheck_3' => 'Referencia',
	'ctracker_ma_seccheck_4' => 'Estado',
	'ctracker_ma_scheck_1' => 'Versión PHP (<a href="http://www.php.net" target="_blank">Visite el sitio web</a>)',
	'ctracker_ma_scheck_2' => '&raquo; PHP MODO SEGURO',
	'ctracker_ma_scheck_3' => '&raquo; PHP GLOBALES',
	'ctracker_ma_scheck_4' => 'Versión phpBB (<a href="http://www.phpbb.com" target="_blank">Visite el sitio web</a>)',
	'ctracker_ma_scheck_4a' => '&raquo; Confirmación visual',
	'ctracker_ma_scheck_4b' => '&raquo; Activación de cuenta',
	'ctracker_ma_scheck_5' => 'CBACK CrackerTracker (<a href="http://www.cback.de" target="_blank">Visite el sitio web</a>)',
	'ctracker_ma_chmod' => '<b>Estado de CHMOD777:</b> ',
	'ctracker_ma_desc_link' => 'EJECUTAR AHORA',
	'ctracker_ma_desc1' => '<b>Limpiar la tabla de IP, proxy y agente de usuario</b><br />Aquí puede borrar <u>todas</u> las entradas de la tabla de IP, proxy y agente de usuario.',
	'ctracker_ma_desc2' => '<b>Ajuste de fábrica: bloquear IP, proxy y agente de usuario</b><br />Aquí puede restaurar el estado inicial de los datos de la base de datos de IP, proxy y agente de usuario. ¡Se perderán sus filtros!',
	'ctracker_ma_desc3' => '<b>Borrar historial de identificación</b><br />Aquí puede borrar todas las entradas del historial de identificación, por encima de lo que haya decidido cada usuario.',
	'ctracker_ma_desc4' => '<b>Limpiar archivo-Tabla de comprobación</b><br />Aquí puede borrar todas las entradas guardadas de la tabla de archivo-Comprobación.',
	'ctracker_ma_desc5' => '<b>Limpiar la tabla de exploración de seguridad</b><br />Aquí puede borrar todos los resultados que fueron almacenados durante el examen de seguridad de archivo en la base de datos.',
	'ctracker_ma_succ_main' => '¡Proceso ejecutado correctamente!',
	'ctracker_ma_err_main' => '¡Proceso ejecutado correctamente!',


/*
* Miserable User Module in ACP...
*/
	'ctracker_mu_subhead' => 'Supongamos que un usuario no se comporta bien, y se ha registrado con otra cuenta diferente después de ser expulsado. Hay una característica llamada "Usuario miserable" que se solicitó con frecuencia. CrackerTracker procede según el principio de "No alimentar al mono". Y, así, los mensajes de alguien marcado como "Usuario miserable" solo podrán ser leídos por los administradores. Para otros usuarios, esos mensajes serán invisibles. Por lo tanto nadie tiene que ocuparse del problema y nadie dará juego al usuario miserable (que es lo que él desea), por lo que él mismo se aburrirá y acabará dejando el foro.<br /><br /><b>Nota: <u>Esta función permite hacer desaparecer los mensajes dentro de un tema.</u> Usando "Citar" o "Buscar" todavía se muestran los mensajes del "Usuario miserable"!',

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
	'ctracker_rec_head' => 'Recuperación del sistema',
	'ctracker_rec_subhead' => 'Aquí puede realizar una copia de seguridad de la tabla de configuración de su foro, o puede ir a la última configuración que funcionó. Si ha activado esta característica en los ajustes generales de CrackerTracker, se realizará una copia de seguridad cada vez que cambie los ajustes generales. (¡ATENCIÓN! ¡Esto <b>NO</b> es una copia de seguridad completa de la base de datos!)<br /><br />Cuando haya cambiado algunos ajustes y no pueda usar su ACP, puede reactivar la última configuración que funcionó usando la consola de emergencia de CrackerTracker. Por favor, lea el comentario del archivo <i>ctracker/emergency.php</i> para más instrucciones de las configuraciones del foro en una emergencia (note que ese archivo tiene que ser habilitado antes de usarlo).<br /><br /><b>¡Cuidado!</b> ¡Esta característica debe usarse sólo con problemas serios!',
	'ctracker_rec_last_saved' => 'Última copia de seguridad de la tabla de configuración: <b>%s</b>',
	'ctracker_rec_never_saved' => '¡La tabla de configuración no se ha copiado por ahora!',
	'ctracker_rec_backup' => 'Copia de seguridad de la tabla de configuración',
	'ctracker_rec_restore' => 'Recuperar la última tabla de configuración que funcionó',
	'ctracker_rec_succ' => 'El proceso en la base de datos se ejecutó correctamente.',
	'ctracker_rec_pab' => '¡La recuperación no está disponible, antes debe usted crear una copia de seguridad correcta!',
	)
);
?>