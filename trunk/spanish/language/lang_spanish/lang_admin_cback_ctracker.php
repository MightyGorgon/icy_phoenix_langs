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
* @author Mar�al D.P. (JANU1535)
* @translator Mar�al D.P. (JANU1535)
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
	'ctracker_module_2' => 'Cr�ditos',
	'ctracker_module_3' => 'Explorar archivos',
	'ctracker_module_4' => 'Noticias globales',
	'ctracker_module_5' => 'Bloquear IP y agente',
	'ctracker_module_6' => 'Administrar log',
	'ctracker_module_7' => 'Mantenimiento y pruebas',
	'ctracker_module_8' => 'Usuario miserable',
	'ctracker_module_9' => 'Ajustes',
	'ctracker_module_10' => 'Recuperaci�n',
	'ctracker_module_11' => 'Pie de p�gina',


/*
* Language Strings used in ACP Modules itself
*/
	'ctracker_wrong_module' => 'N�mero de m�dulo desconocido',
	'ctracker_img_descriptions' => 'Imagen',
	'ctracker_set_catname1' => 'Bloquear IP, proxy y agente de usuario',
	'ctracker_set_catname2' => 'Sistema de protecci�n de b�squeda',
	'ctracker_set_catname3' => 'Sistema de protecci�n de identificaci�n',
	'ctracker_set_catname4' => 'Detecci�n de autospam',
	'ctracker_set_catname5' => 'Sistema de protecci�n del registro',
	'ctracker_set_catname6' => 'Comprobar contrase�a	',
	'ctracker_set_catname7' => 'Caracter�sticas generales de seguridad',
	'ctracker_set_catname8' => 'Otros ajustes',
	'ctracker_settings_head' => 'Ajustes de CrackerTracker',
	'ctracker_settings_expl' => 'Aqu� puede modificar todos los ajustes para requisitos generales del sistema de seguridad de CBACK CrackerTracker.',
	'ctracker_button_submit' => 'Guardar ajustes',
	'ctracker_button_reset' => 'Restaurar',

	'ctracker_settings_m1' => 'Activar bloquear IP',
	'ctracker_settings_e1' => 'Ajustar el bloquear IP, proxy y agente de usuario en encendido o apagado.',
	'ctracker_settings_m2' => 'Tama�o del log de bloquear IP',
	'ctracker_settings_e2' => 'Aqu� puede fijar el n�mero de entradas que guardar� el archivo de log de bloquear IP. Si se supera ese n�mero, el archivo del log ser� borrado autom�ticamente para ahorrar espacio.',
	'ctracker_settings_m3' => 'Activar protecci�n de b�squeda',
	'ctracker_settings_e3' => 'Activa o desactiva el sistema de protecci�n de b�squeda.',
	'ctracker_settings_m4' => 'Tiempo de b�squeda para los usuarios',
	'ctracker_settings_e4' => 'Si activa la protecci�n de b�squeda, este ser� el tiempo (en segundos) que un usuario registrado deber� esperar para realizar una nueva b�squeda.',
	'ctracker_settings_m5' => 'N�mero de b�squedas para los usuarios',
	'ctracker_settings_e5' => 'Elija cu�ntas consultas puede hacer un usuario registrado en el tiempo indicado arriba. Si se supera ese n�mero, no ser�n posibles nuevas consultas durante ese tiempo, para reducir la carga del servidor.',
	'ctracker_settings_m6' => 'Tiempo de b�squeda para los invitados',
	'ctracker_settings_e6' => 'Marque cu�ntos segundos deben esperar los invitados si el sistema de protecci�n de b�squeda esta activado.',
	'ctracker_settings_m7' => 'N�mero de b�squedas para los invitados',
	'ctracker_settings_e7' => 'Elija cu�ntas b�squedas puede hacer un invitado en el periodo de tiempo espeficado. Si se supera ese n�mero, no ser�n posibles nuevas consultas durante ese tiempo, para reducir la carga del servidor.',
	'ctracker_settings_m8' => 'Ajustar en encendido la protecci�n de identificaci�n',
	'ctracker_settings_e8' => 'Aqu� puede activar o desactivar el sistema de protecci�n de identificaci�n de CrackerTracker.',
	'ctracker_settings_m9' => 'Tama�o del log para identificaciones err�neas',
	'ctracker_settings_e9' => 'Aqu� puede ajustar cu�ntas entradas de identificaciones err�neas deben ser guardadas antes de ser borradas autom�ticamente para ahorrar espacio web.',
	'ctracker_settings_m10' => 'N�mero de identificaciones hasta la confirmaci�n visual',
	'ctracker_settings_e10' => 'Cuantas veces un usuario puede fallar en su identificaci�n antes de la protecci�n de ataques de fuerza bruta, donde se mostrara la confirmaci�n visual.',
	'ctracker_settings_m11' => 'Historial de identificaci�n',
	'ctracker_settings_e11' => 'Aqu� puede activar o desactivar el historial de identificaci�n de usuarios.',
	'ctracker_settings_m12' => 'Entradas en el historial de idenficaci�n por usuario',
	'ctracker_settings_e12' => 'Aqu� puede ajustar cu�ntas identificaciones correctas por usuario deben ser guardadas en el historial de identificaci�n. Cada usuario tiene la opci�n de comprobar la fecha y las direcciones IP de sus identificaciones.',
	'ctracker_settings_m13' => 'Caracter�stica de identificaci�n de IP',
	'ctracker_settings_e13' => 'Activar o desactivar el sistema de identificaci�n de IP. Cada usuario tiene la opci�n de activar o desactivar la p�gina del sistema de seguridad de identificaci�n. El sistema de protecci�n de IP comprueba los cambios de las direcciones IP. El usuario ser� informado si su rango de IP ha sido modificado desde su ultima identificaci�n. Aqu� vera si alguien ha entrado desde una localizaci�n diferente.',
	'ctracker_settings_m14' => 'Detecci�n de spammer',
	'ctracker_settings_e14' => 'Aqu� puede ajustarse el modo de detecci�n autom�tica de spammer.',
	'ctracker_settings_m15' => 'Periodo de tiempo para el spammer',
	'ctracker_settings_e15' => 'Periodo de tiempo en el cual los mensajes de los usuarios ser�n contados por el detector de spammer (en segundos).',
	'ctracker_settings_m16' => 'N�mero de mensajes de spammer',
	'ctracker_settings_e16' => 'N�mero de mensajes permitido en el periodo de tiempo ajustado. Si este n�mero se supera el usuario ser� identificado como un spammer.',
	'ctracker_settings_m17' => 'Tama�o del log de spammer',
	'ctracker_settings_e17' => 'Tama�o del log en el cual se guardar�n los usuarios identificados como spammer.',
	'ctracker_settings_m18' => 'Protecci�n del registro',
	'ctracker_settings_e18' => 'Aqu� puede activar o desactivar la protecci�n del registro.',
	'ctracker_settings_m19' => 'Tiempo de bloqueo para el registro',
	'ctracker_settings_e19' => 'Aqu� puede ajustar el tiempo entre dos registros (en segundos)-',

	'ctracker_settings_m21' => 'Vigilante de IP',
	'ctracker_settings_e21' => 'Si se activa esta caracter�stica, un usuario con una direcci�n IP id�ntica podr� registrarse, hasta que alguien se haya registrado con otra direcci�n IP.',
	'ctracker_settings_m22' => 'Validez de contrase�a',
	'ctracker_settings_e22' => 'Activar la comprobaci�n de validez de contrase�a para todos los usuarios.',
	'ctracker_settings_m23' => 'Validez de contrase�a en d�as',
	'ctracker_settings_e23' => 'Cu�nto tiempo ser� v�lida la contrase�a del usuario antes de que se le muestre un aviso de que la contrase�a debe ser cambiada (en d�as).',
	'ctracker_settings_m24' => 'Comprobar la complejidad de la contrase�a',
	'ctracker_settings_e24' => 'Esta caracter�stica comprueba la complejidad de las contrase�as de los usuarios.',
	'ctracker_settings_m25' => 'Modo de contrase�a compleja',
	'ctracker_settings_e25' => 'Aqu� puede ajustar si tiene que haber INDICACI�N en las contrase�as.',
	'ctracker_settings_m26' => 'Tama�o m�nimo de la contrase�a',
	'ctracker_settings_e26' => 'Aqu� puede ajustar el n�mero m�nimo de letras para la contrase�a.',
	'ctracker_settings_m27' => 'Comprobador del reajuste de contrase�a',
	'ctracker_settings_e27' => 'Permite reajustar una contrase�a desde un cierto per�odo de tiempo (para los usuarios). Esto previene que los atacantes no puedan utilizar esta caracter�stica a los usuarios spammers que usan resetmails.',
	'ctracker_settings_m28' => 'Periodo de tiempo de reajuste de contrase�a',
	'ctracker_settings_e28' => 'Periodo de tiempo en que los usuarios pueden reajustar su contrase�a (en minutos).',
	'ctracker_settings_m29' => 'Monitorizar el correo',
	'ctracker_settings_e29' => 'Aqu� puede activar esta caracter�stica, as� los usuarios pueden utilizar la funci�n de correo del foro solamente una vez en el per�odo de tiempo marcado. Esto previene el spamming.',
	'ctracker_settings_m30' => 'Tiempo de spam e-mail',
	'ctracker_settings_e30' => 'Periodo de tiempo en el que un usuario puede enviar dos e-mails usando la funci�n interna de correo (en minutos).',
	'ctracker_settings_m31' => 'Autorecuperaci�n',
	'ctracker_settings_e31' => 'Active esta caracter�stica para guardar los ajustes del foro autom�ticamente. Si esto no funciona, puede utilizar la �ltima configuraci�n.',
	'ctracker_settings_m32' => 'Confirmaci�n visual para invitados',
	'ctracker_settings_e32' => 'Cuando se activa esta caracteristica, los invitados tienen que introducir un c�digo visual para escribir nuevos mensajes. De no ser as�, no podr�n enviar el mensaje. Esto protege contra los spambots autom�ticos.',
	'ctracker_settings_m33' => 'Protecci�n del servicio disponible de correo',
	'ctracker_settings_e33' => 'CrackerTracker tiene una lista interna de servicios de correo no disponibles. Si activa esta caracter�stica, los usuarios con tales direcciones de correo no podr�n registrarse.',
	'ctracker_settings_m34' => 'Identificaci�n de configuraci�n incorrecta',
	'ctracker_settings_e34' => 'Cuando activa esta caracter�stica, CrackerTracker comprueba los ajustes generales de phpBB y su validez. �No puede da�ar a su foro por la configuraci�n!',
	'ctracker_settings_m35' => 'Detecci�n de spammer',
	'ctracker_settings_e35' => 'Cuando activa esta caracter�stica, CrackerTracker observar� los spammers humanos o spamposts. La mayor parte de ellos ser�n bloqueados.',
	'ctracker_settings_m36' => 'Comprobar palabras clave de spammer',
	'ctracker_settings_e36' => 'Cuando activa "Detecci�n de spammer", las palabras claves en el perfil y los mensajes ser�n exploradas para identificar spammers.<br /><br /><b>ATENCI�N</b> Aqu� existe un riesgo m�s alto de la detecci�n de alg�n BUG para los nuevos usuarios. Por favor compruebe el fichero log para saber si hay detecci�n del spammer.',


/*
* Credits page in ACP
*/
	'ctracker_credits_head' => 'Cr�ditos',
	'ctracker_credits_subhead' => 'Aqu� est�n los cr�ditos de CBACK CrackerTracker. Aqu� le daremos m�s informaci�n sobre seguridad, y esto es tambi�n una manera de decir "Gracias".',
	'ctracker_credits_donate' => 'Donar',
	'ctracker_credits_donate_expl' => '�Quiere <b>CBACK CrackerTracker Profesional</b>? Entonces seria estupendo que hiciera una donaci�n al proyecto de CBACK usando la donaci�n de PayPal. El desarrollo adicional y los costes del servidor no ayudan a nuestro proyecto no lucrativo. As� podremos seguir proporcionando CrackerTracker gratuitamente en el futuro.<br /><br />Muchas gracias por su aporte.',
	'ctracker_credits_credits' => 'Cr�ditos',
	'ctracker_credits_credits_1' => 'Idea e implementaci�n',
	'ctracker_credits_credits_2' => 'Autor y soporte',
	'ctracker_credits_credits_3' => 'Iconos',
	'ctracker_credits_credits_4' => 'Sitio de descarga oficial',
	'ctracker_credits_moddownload' => 'Descargar CrackerTracker MOD',
	'ctracker_credits_thanks' => 'Gracias a...',
	'ctracker_credits_thanks_text' => 'Quisiera darle las gracias a las siguientes personas:',
	'ctracker_credits_thanks_to' => '<b>Ideas, pruebas de seguridad y correcciones</b><br />Tekin Bird�zen<br /><i>(<a href="http://www.cybercosmonaut.de" target="_blank">cYbercOsmOnauT</a>)</i><br /><br /><br /><br /><b>Ideas:</b><br />Bernhard Jaud<br /><i>(GenuineParts)</i><br /><br /><br /><br /><b>Traductor (Ingles)</b><br />Marc Renninger<br /><i>(mc-dragon)</i><br /><br /><br /><br /><b>Corrector (Ingles)</b><br />George <br />Sommerset<br /><i>(<a href="http://www.englisch-hilfen.de" target="_blank">www.englisch-hilfen.de</a>)</i><br /><br /><br /><br /><b>Beta tester</b><br />Gracias a todos los participantes de Beta-Tests<br />a los usuarios de CBACK Premium y por supuesto a<br />nuestros colegas de la "Escena-Mod" quienes tambi�n nos ayudaron en Beta tests y correcciones.</i>',
	'ctracker_credits_info' => '�M�s seguridad?',
	'ctracker_credits_info_text' => 'El MOD perfecto para phpBB y CrackerTracker: Para una optima seguridad recomendamos el MOD <b>confirmaci�n visual avanzada</b> por AmigaLink. Este MOD mejora la caracter�stica CAPTCHA de phpBB y CrackerTracker Profesional con un sistema m�s complejo que no pueden leer los robots. Este MOD puede descargarlo en <a href="http://www.amigalink.de" target="_blank">www.AmigaLink.de</a>.<br /><br /><br /><br />Sugerimos que tambi�n integre este MOD en su foro para una seguridad excelente.',


/*
* File Hash Check in ACP
*/
	'ctracker_fchk_head' => 'Comprobador explorador CrackerTracker',
	'ctracker_fchk_subhead' => 'Esta exploraci�n crea una comprobaci�n de cada uno de los archivos PHP de su foro con un clic en "Crear o Actualizar comprobador". Despu�s, siempre tiene la posibilidad con �Verificar cambios del archivo� para determinar si los archivos fueron cambiados o no desde su �ltima comprobaci�n. Puede ver si los archivos fueron cambiados aunque no lo pareza. Esto es generalmente una muestra de que alguien hab�a accedido a su volumen de datos del foro. �Preste atenci�n a la �ltima vez que lo comprob�, para ver si una persona no autorizada activ� el explorador de comprobaci�n!<br /><br /><br /><b>Informaci�n:</b> No todos los servidores soportan esta caracter�stica. Ocasionalmente esto puede ocasionar un aviso de "fuera de tiempo" si el servidor se toma demasiado tiempo para producir la lista del archivo de phpBB. Otros servidores paran el procedimiento, puesto que es un funcionamiento absolutamente intensivo.<br /><br /><br />&raquo; La �ltima actualizaci�n del archivo de comprobaci�n ocurri� <b>%s</b>.',
	'ctracker_fchk_funcheader' => 'Caracter�sticas',
	'ctracker_fchk_tableheader' => 'Advertencia',
	'ctracker_fchk_option1' => 'Crear o actualizar comprobador',
	'ctracker_fchk_option2' => 'Verificar cambios del archivo',
	'ctracker_fchk_select_action' => '�Por favor, elija una opci�n!',
	'ctracker_fchk_update_action' => '�Comprobador actualizado!',
	'ctracker_fchk_tablehead1' => 'Ruta del archivo',
	'ctracker_fchk_tablehead2' => 'Estado',
	'ctracker_file_unchanged' => 'NO MODIFICADO',
	'ctracker_file_changed' => 'MODIFICADO',
	'ctracker_file_deleted' => 'BORRADO',


/*
* File Safety Scanner in ACP
*/
	'ctracker_fscan_complete' => 'El explorador de archivos ha sido ejecutado correctamente. Por favor, pulse en "Mostrar resultados" para verlos. Puede corregir los archivos.<br /><br /><br /><br /><u>AVISO:</u><br /><br />Puede suceder de vez en cuando que CrackerTracker detecte un archivo como inseguro porque un desarrollador haya querido que el c�digo de ese archivo pueda ser escrito desde el exterior. En este caso - y SOLAMENTE si est� absolutamente seguro- puede usted decir a CRACKERTRACKER que �ste es un archivo seguro. Debe escribir en este archivo, al principio: <?php el siguiente c�digo: <br /><br /><br /><i>// CTracker_Ignore: File Checked By Human</i><br /><br /><br />Si usted no est� segurom puede consultar en la <a href="http://www.community.cback.de" target="_blank">Comunidad CBACK</a> para m�s instrucciones.',
	'ctracker_fscan_unchecked' => 'NO COMPROBADO',
	'ctracker_fscan_ok' => 'SEGURO',
	'ctracker_fscan_prob_1' => 'extension.inc no/incluido demasiado tarde',
	'ctracker_fscan_prob_2' => '$phpbb_root_path quiz� no se inicializ� correctamente',
	'ctracker_fscan_prob_3' => 'common.php / pagestart.php quiz� no fue incluido o demasiado tarde',
	'ctracker_fscan_prob_4' => 'El c�digo en el archivo es posiblemente ejecutable m�s all� de phpBB',
	'ctracker_fscan_prob_5' => 'extension.inc falta y/o $phpbb_root_path y/o constante no se encontr�',
	'ctracker_fscan_prob_def' => 'Un caso indefinido ocurri� durante la exploraci�n',
	'ctracker_fscan_important' => 'Por favor, atienda:',
	'ctracker_fscan_sel_action' => 'Para comenzar la comprobaci�n de todos los archivos, pulse en "Comenzar la comprobaci�n de archivos". Cuando termine, pulse en "Mostrar resultados" para ver los resultados. Esa lista se puede recuperar en cualquier momento usando el ACP (hasta que se realice una nueva comprobaci�n).<br /><br /><br />Por razones t�cnicas no es posible dar una una informaci�n absolutamente segura de si un script es <u>correcto</u> o <u>incorrecto</u>. Pudiera suceder que el explorador clasifique un archivo como seguro y no lo sea, y viceversa. PHP y sus c�digos son as� de complejos. Con todo, hay un alto tanto por ciento de seguridad (y esto s�e s totalmente seguro)<br /><br /><br />Este explorador detecta los agujeros de seguridad en los ficheros de su foro. As�, usted puede corregirlos f�cilmente.<br /><br /><br />Para m�s detalles e instrucciones use la comunidad CBACK.<br /><br /><br />',
	'ctracker_fscan_head' => 'Exploraci�n de seguridad',
	'ctracker_fscan_subhead' => 'Este explorador de seguridad comprueba todos los archivos de PHP de su foro, y detecta los que pudieran tener problemas importantes. As� evita agujeros de seguridad que podr�an ser utilizados maliciosamente desde el exterior sin usar los archivos del foro, en el caso de que CrackerTracker estuviera inactivo y no pudiera proteger el archivo. Este m�dulo detecta esos agujeros y los corrige.<br /><br /><br /><b>Pero tenga en cuenta</b> que no todos los servidores soportan esta caracter�stica.  En foros muy grandes puede suceder que el funcionamiento intensivo de la exploraci�n sobrepase el tiempo de ejecuci�n permitido en su PHP. El algoritmo de este explorador se ha optimizado lo m�s posible para que no supere los l�mites marcados. Pero tal cosa puede darse en algunas m�quinas, no lo olvide.<br /><br /><br />&raquo; La �ltima comprobaci�n fue el <b>%s</b>.',
	'ctracker_fscan_option1' => 'Comenzar la comprobaci�n de archivos',
	'ctracker_fscan_option2' => 'Mostrar resultados',


/*
* Global message in ACP
*/
	'ctracker_glob_msg_head' => 'Mensaje global',
	'ctracker_glob_msg_subhead' => '<b>Aqu� puede dejar un mensaje global a todos los usuarios.</b><br /> Este mensaje lo ver�n los usuarios en su siguiente identificaci�n. Puede referirlo a un mensaje ya existente o escribir su propio texto.<br /><b>Nota:</b> Hay un l�mite impuesto de (255 car�cteres)',
	'ctracker_glob_msg_entry' => 'Fijar mensaje global ',
	'ctracker_glob_msg_submit' => 'Insertar',
	'ctracker_glob_msg_reset' => 'Cancelar mensaje',
	'ctracker_glob_msg_type' => 'Escriba el mensaje global',
	'ctracker_glob_type_1' => 'Texto',
	'ctracker_glob_type_2' => 'Enlace',
	'ctracker_glob_msg_txt' => 'Texto del mensaje global',
	'ctracker_glob_msg_link' => 'Enlace de destino en el mensaje',
	'ctracker_glob_msg_reset' => 'Cancelar mensaje actual',
	'ctracker_glob_res_txt' => 'Si pulsa en "Cancelar mensaje actual", el mensaje guardado se cancelar�.',
	'ctracker_glob_msg_saved' => 'El mensaje global se ha guardado.<br /><br />Pulse <a href="%s">Aqu�</a> para volver a la administraci�n de CrackerTracker.',
	'ctracker_glob_msg_reset_ok' => 'El mensaje global ha sido borrado de la tabla del usuario. El mensaje incorporado no se mostrar� m�s.<br /><br />Pulse <a href="%s">Aqu�</a> para volver a la administraci�n CrackerTracker.',

/*
* IP&Agent Blocker
*/
	'ctracker_ipb_delete' => 'Borrar entrada',
	'ctracker_ipb_blocklist' => 'Lista de entradas bloqueadas',
	'ctracker_ipb_head' => 'Bloquear proxy, IP y agente de usuario',
	'ctracker_ipb_description' => 'Aqu� puede administrar la lista de proxy, IP y agente de usuario bloqueados. Puede borrar las entradas existentes y a�adir otras nuevas. Con una nueva entrada tiene la opci�n de utilizar (*) para introducir cualquier combinaci�n en la lista. Por ejemplo: lwp* bloquea lwp-1 as� como lwp-simple, etc. O 100.*.*.* bloquea todas las direcciones IP que empiecen por 100.<br /><br /><b>ATENCI�N:</b> Cuide de no bloquear su propio agente de usuario o direcci�n IP... �o no podr� entrar a su propio foro!',


/*
* Log Manager
*/
	'ctracker_log_manager_title' => 'Administrar archivo log',
	'ctracker_log_manager_subtitle' => 'Aqu� puede mostrar o borrar todos los archivos del log de CrackerTracker.',
	'ctracker_log_manager_overview' => 'Administrar descripci�n del log',
	'ctracker_log_manager_blocked' => 'CrackerTracker ha bloqueado <b>%s</b> ataques hasta ahora.',
	'ctracker_log_manager_overview' => 'Descripci�n del archivo log',
	'ctracker_log_manager_head1' => 'Nombre del log',
	'ctracker_log_manager_head2' => 'N�mero de entradas',
	'ctracker_log_manager_head3' => 'Caracter�sticas',
	'ctracker_log_manager_name2' => 'Protecci�n de worm y exploit',
	'ctracker_log_manager_name3' => 'Bloquear IP, proxy y agente de usuario',
	'ctracker_log_manager_name4' => 'Identificaciones incorrectas',
	'ctracker_log_manager_name5' => 'Spammers bloqueados',
	'ctracker_log_manager_name6' => 'Entradas debug',
	'ctracker_log_manager_view' => 'VER',
	'ctracker_log_manager_delete' => 'BORRAR',
	'ctracker_log_manager_delete_all' => 'Borrar todo el archivo log',
	'ctracker_log_manager_deleted' => '�El archivo log se ha borrado correctamente!',
	'ctracker_log_manager_all_deleted' => '�Todos los archivos log han sido borrados correctamente!',
	'ctracker_log_manager_showheader1' => 'Hay <b>una</b> entrada en este archivo log. Pulse <b><a href="%s">Aqu�</a></b> para volver a descripci�n del archivo log.',
	'ctracker_log_manager_showheader' => 'Hay <b>%s</b> entradas en este archivo log.<br />Pulse <b><a href="%s">Aqu�</a></b> para volver a descripci�n del archivo log.',
	'ctracker_log_manager_showlog' => 'Ver archivo log',
	'ctracker_log_manager_cell_1' => 'Fecha/hora',
	'ctracker_log_manager_cell_2a' => 'Appeal',
	'ctracker_log_manager_cell_2b' => 'Nombre',
	'ctracker_log_manager_cell_3' => 'Referido',
	'ctracker_log_manager_cell_4' => 'Agente de usuario',
	'ctracker_log_manager_cell_5' => 'Direcci�n IP',
	'ctracker_log_manager_cell_6' => 'Host remoto',
	'ctracker_log_manager_sysmsg' => 'La �ltima limpieza del archivo log fue el <b>%s</b>.',

/*
* Footer configuration
*/
	'ctracker_footer_head' => 'Administrar pie de p�gina',
	'ctracker_footer_subhead' => 'Aqu� puede elegir qu� pie de p�gina de CrackerTracker quiere mostrar en su foro. �Por favor, no cambie del pie de p�gina el enlace a www.cback.de!',
	'ctracker_select_footer' => 'Elegir pie de p�gina',
	'ctracker_footer_saveit' => 'Aceptar la disposici�n del pie de p�gina',
	'ctracker_footer_done' => '�Los cambios en el pie de p�gina han sido guardados correctamente!',

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
	'ctracker_ma_subhead' => 'Este sistema examina autom�ticamente los m�dulos de seguridad de CrackerTracker de caracter�sticas y demostraciones, para as� optimizar su sistema.',
	'ctracker_ma_systest' => 'Prueba autom�tica del sistema',
	'ctracker_ma_sectest' => 'Prueba de seguridad',
	'ctracker_ma_maint' => 'Funci�n de servicio',
	'ctracker_ma_name_1' => 'Sistema de protecci�n de worm y exploit',
	'ctracker_ma_name_2' => 'Unidad de control de variable',
	'ctracker_ma_name_3' => 'Unidad de protecci�n de IP, proxy y agente de usuario',
	'ctracker_ma_name_4' => 'Worm obtenido de las definiciones de la heur�stica - n�mero de definiciones: <b>%s</b>',
	'ctracker_ma_syshead_1' => 'M�dulo de seguridad',
	'ctracker_ma_syshead_2' => 'Estado',
	'ctracker_ma_seccheck_1' => 'Punto de comprobaci�n',
	'ctracker_ma_seccheck_2' => 'Versi�n/estado',
	'ctracker_ma_seccheck_3' => 'Referencia',
	'ctracker_ma_seccheck_4' => 'Estado',
	'ctracker_ma_scheck_1' => 'Versi�n PHP (<a href="http://www.php.net" target="_blank">Visite el sitio web</a>)',
	'ctracker_ma_scheck_2' => '&raquo; PHP MODO SEGURO',
	'ctracker_ma_scheck_3' => '&raquo; PHP GLOBALES',
	'ctracker_ma_scheck_4' => 'Versi�n phpBB (<a href="http://www.phpbb.com" target="_blank">Visite el sitio web</a>)',
	'ctracker_ma_scheck_4a' => '&raquo; Confirmaci�n visual',
	'ctracker_ma_scheck_4b' => '&raquo; Activaci�n de cuenta',
	'ctracker_ma_scheck_5' => 'CBACK CrackerTracker (<a href="http://www.cback.de" target="_blank">Visite el sitio web</a>)',
	'ctracker_ma_chmod' => '<b>Estado de CHMOD777:</b> ',
	'ctracker_ma_desc_link' => 'EJECUTAR AHORA',
	'ctracker_ma_desc1' => '<b>Limpiar la tabla de IP, proxy y agente de usuario</b><br />Aqu� puede borrar <u>todas</u> las entradas de la tabla de IP, proxy y agente de usuario.',
	'ctracker_ma_desc2' => '<b>Ajuste de f�brica: bloquear IP, proxy y agente de usuario</b><br />Aqu� puede restaurar el estado inicial de los datos de la base de datos de IP, proxy y agente de usuario. �Se perder�n sus filtros!',
	'ctracker_ma_desc3' => '<b>Borrar historial de identificaci�n</b><br />Aqu� puede borrar todas las entradas del historial de identificaci�n, por encima de lo que haya decidido cada usuario.',
	'ctracker_ma_desc4' => '<b>Limpiar archivo-Tabla de comprobaci�n</b><br />Aqu� puede borrar todas las entradas guardadas de la tabla de archivo-Comprobaci�n.',
	'ctracker_ma_desc5' => '<b>Limpiar la tabla de exploraci�n de seguridad</b><br />Aqu� puede borrar todos los resultados que fueron almacenados durante el examen de seguridad de archivo en la base de datos.',
	'ctracker_ma_succ_main' => '�Proceso ejecutado correctamente!',
	'ctracker_ma_err_main' => '�Proceso ejecutado correctamente!',


/*
* Miserable User Module in ACP...
*/
	'ctracker_mu_subhead' => 'Supongamos que un usuario no se comporta bien, y se ha registrado con otra cuenta diferente despu�s de ser expulsado. Hay una caracter�stica llamada "Usuario miserable" que se solicit� con frecuencia. CrackerTracker procede seg�n el principio de "No alimentar al mono". Y, as�, los mensajes de alguien marcado como "Usuario miserable" solo podr�n ser le�dos por los administradores. Para otros usuarios, esos mensajes ser�n invisibles. Por lo tanto nadie tiene que ocuparse del problema y nadie dar� juego al usuario miserable (que es lo que �l desea), por lo que �l mismo se aburrir� y acabar� dejando el foro.<br /><br /><b>Nota: <u>Esta funci�n permite hacer desaparecer los mensajes dentro de un tema.</u> Usando "Citar" o "Buscar" todav�a se muestran los mensajes del "Usuario miserable"!',

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
	'ctracker_rec_head' => 'Recuperaci�n del sistema',
	'ctracker_rec_subhead' => 'Aqu� puede realizar una copia de seguridad de la tabla de configuraci�n de su foro, o puede ir a la �ltima configuraci�n que funcion�. Si ha activado esta caracter�stica en los ajustes generales de CrackerTracker, se realizar� una copia de seguridad cada vez que cambie los ajustes generales. (�ATENCI�N! �Esto <b>NO</b> es una copia de seguridad completa de la base de datos!)<br /><br />Cuando haya cambiado algunos ajustes y no pueda usar su ACP, puede reactivar la �ltima configuraci�n que funcion� usando la consola de emergencia de CrackerTracker. Por favor, lea el comentario del archivo <i>ctracker/emergency.php</i> para m�s instrucciones de las configuraciones del foro en una emergencia (note que ese archivo tiene que ser habilitado antes de usarlo).<br /><br /><b>�Cuidado!</b> �Esta caracter�stica debe usarse s�lo con problemas serios!',
	'ctracker_rec_last_saved' => '�ltima copia de seguridad de la tabla de configuraci�n: <b>%s</b>',
	'ctracker_rec_never_saved' => '�La tabla de configuraci�n no se ha copiado por ahora!',
	'ctracker_rec_backup' => 'Copia de seguridad de la tabla de configuraci�n',
	'ctracker_rec_restore' => 'Recuperar la �ltima tabla de configuraci�n que funcion�',
	'ctracker_rec_succ' => 'El proceso en la base de datos se ejecut� correctamente.',
	'ctracker_rec_pab' => '�La recuperaci�n no est� disponible, antes debe usted crear una copia de seguridad correcta!',
	)
);
?>