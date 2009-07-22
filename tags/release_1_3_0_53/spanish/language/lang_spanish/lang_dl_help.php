<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_dl_help.php 50 2009-07-22 10:13:03Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* (c) 2005 oxpus (Karsten Ude) <webmaster@oxpus.de> http://www.oxpus.de
* (c) hotschi / demolition fabi / oxpus
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
* no help found?
*/
	'Dl_no_help_aviable' => 'No hay ayuda disponible para esta opci�n',

/*
* title of help popup
*/
	'HELP_TITLE' => 'Descargar MOD de ayuda en l�nea',

/*
* general configuration
*/
	'HELP_Dl_delay_auto_traffic' => 'Escriba aqu� los d�as que tienen que transcurrir despu�s de que un usuario se registre para que obtenga su primer tr�fico autom�ticamente.<br />El retraso comienza el d�a en el que el usuario se registra.<br />Escriba 0 aqu� para desactivar este retraso.',
	'HELP_Dl_delay_post_traffic' => 'Escriba el n�mero de d�as que tienen que transcurrir para que un nuevo usuario obtenga su primer tr�fico para mensajes.<br />El retraso comienza el d�a en el que el usuario se registra.<br />Escriba 0 aqu� para desactivar este retraso.',
	'HELP_DL_edit_time' => 'Escriba el n�mero de d�as que desea que permanezca marcada una descarga modificada.<br />Escriba 0 para desactivar esta funci�n.',
	'HELP_Dl_guest_stats_show' => 'Esta opci�n s�lo incluir� o excluir� los datos estad�sticos sobre invitados de la categor�a p�blica de estad�sticas.<br />El programa seguir� recolectando todos los datos.<br />La herramienta de estad�sticas del ACP siempre muestra los datos de estad�sticas al completo.',
	'HELP_Dl_method' => 'El m�todo "antiguo" enviar� el archivo directamente al cliente.<br />Este m�todo es compatible con la mayor�a de los entornos web, pero no puede mostrar el tama�o real del archivo durante la descarga, as� que el cliente no puede calcular el tiempo restante de la descarga.<br />El m�todo "nuevo" mostrar� el tama�o real, pero puede generar errores.<br />Use el m�todo "antiguo" si tiene problemas con el nuevo.<br />Si ninguno funciona, marque la opci�n "directo" para enlazar directamente al archivo en el servidor si los archivos ser�n de tama�o mayor al l�mite de la memoria de PHP.',
	'HELP_Dl_method_quota' => 'Establezca aqu� el tama�o a partir del cual el archivo ser� cortado en partes. Esto s�lo funcionar� si ha escogido el m�todo "nuevo".<br />Por debajo de este l�mite el archivo ser� recuperado mediante readfile(); y ser� enviado directamente al cliente.',
	'HELP_DL_new_time' => 'Escriba aqu� el n�mero de d�as que una nueva descarga permanecer� marcada.<br />Escriba 0 para deshabilitar esta funci�n.',
	'HELP_Download_path' => 'La ruta relativa a la ra�z de la carpeta de phpBB.<br />En una nueva instalaci�n de este paquete encontrar� aqu� el valor "downloads/".<br />Tenga en consideraci�n no usar caracteres especiales si est� usando Unix/Linux.<br />La barra al final del nombre de la carpeta es necesaria, pero no la a�ada al principio.<br />Esta y todas las subcarpetas incluidas deben tener permisos CHMOD 777 para hacer posible que todas las funciones se ejecuten sin problemas.<br />Bajo esta carpeta usted debe crear una o m�s subcarpetas que contendr�n todos los archivos f�sicos.<br />Es recomendable crear una subcarpeta para cada grupo l�gico de categor�as.<br />Esta subcarpeta tiene que ser introducida como ruta en la configuraci�n de cada categor�a con la misma sintaxis que el directorio principal, pero sin incluir el directorio principal (para m�s informaci�n lea la ayuda en la administraci�n de categor�as).<br />Puede crear m�s subcarpetas usando su cliente FTP o usando la caja de herramientas (vea el enlace arriba a la derecha, en esta p�gina).',
	'HELP_Dl_thumb_max_size' => 'Escriba 0 como tama�o de archivo para desactivar las miniaturas en todas las categor�as.<br />Si activa las miniaturas, escriba dimensiones de im�genes razonables para nuevas miniaturas.<br />Si desactiva las miniaturas tampoco podr� ver miniaturas existentes en los detalles de descarga.',
	'HELP_Dl_use_ext_blacklist' => 'Si activa la lista negra, todos los tipos de archivos introducidos ser�n bloqueados para nuevas subidas o descargas modificadas.',
	'HELP_Dl_enable_post_traffic' => 'Establezca el tr�fico que recibir� un usuario por crear nuevos temas, responder o citar en las siguientes dos opciones.',
	'HELP_Dl_limit_desc_on_index' => 'Cortar las descripciones a partir del n�mero de caracteres que escriba.<br />Escriba 0 para desactivar esta funci�n.',
	'HELP_Dl_prevent_hotlink' => 'Active esta opci�n se desea prevenir todos los enlaces directors de descargas. Se mostrar�n los detalles de descarga.<br />�Esta opci�n <b>no</b> activa ninguna protecci�n de carpetas!',
	'HELP_Dl_user_traffic_once' => 'Escoja si las descargas s�lo reducir�n el tr�fico del usuario la primera vez que el usuario descargue dicho archivo.<br /><b>Aviso:</b><br />�Esta opci�n NO cambiar� el estado de la descarga!',
	'HELP_Dl_edit_own_downloads' => 'Si activa esta opci�n, cada usuario puede editar sus propios archivos (los que haya subido �l/ella) sin ser un administrador o moderador de descargas.',
	'HELP_Dl_shorten_extern_links' => 'Escriba la longitud de el enlace de descarga externo que ser� mostrado en los detalles de la descarga.<br />Se basa en la longitud del enlace en el medio o el comienzo del lado derecho.<br />Deje este campo vac�o o escriba 0 para desactivar esta funci�n.',
	'HELP_Dl_show_footer_legend' => 'Esta opci�n permite activar o desactivar los iconos de estado en el pie de p�gina.<br />Los iconos que puede encontrar bajo las descargas no se cambiar�n con esta opci�n.',
	'HELP_Dl_show_footer_stat' => 'Esta opci�n permite activar o desactivar las l�neas de estad�sticas del pie de p�gina.<br />Las estad�sticas seguir�n actualiz�ndose aunque desactive esto.',
	'HELP_Dl_show_real_filetime' => 'Con esto puede mostrar la fecha real de la �ltima vez que se modific� uno de los archivos en los detalles de descarga.<br />Este es el modo m�s exacto de identificar la fecha y hora en el que el archivo fue editado v�a un cliente ftp o actualizado editando la descarga.',
	'HELP_Dl_visual_confirmation' => 'Active esta opci�n para obligar al usuario a introducir un c�digo de confirmaci�n visual para acceder a la descarga.<br />Si el usuario no introduce el c�digo o lo introduce mal, el MOD mostrar� un mensaje y detendr� la descarga.',
	'HELP_Dl_report_broken' => 'Active esta opci�n para permitir que se reporten enlaces rotos.<br />Si activa "no para invitados", solamente los usuarios registrados podr�n reportar enlaces rotos.',
	'HELP_Dl_report_broken_lock' => 'Si activa esta opci�n la descarga ser� bloqueada mientras que est� reportada como rota.<br />Ocultar� el bot�n de descarga y ning�n usuario podr� descargar el archivo hasta que el administrador o un moderador de descargas desbloquee la descarga.',
	'HELP_Dl_report_broken_message' => 'Si una descarga ha sido reportada como rota, ser� mostrado un mensaje informando sobre esto.<br />Si activa esta opci�n el mensaje solamente ser� mostrado mientras que la descarga est� bloqueada.<br />En este caso no se mostrar� debajo, sino que en el lugar del bot�n de descarga.',
	'HELP_Dl_report_broken_vc' => 'Activa una confirmaci�n visual si el usuario est� reportando un enlace roto.<br />Solamente se guardar� el reporte si el c�digo introducido es correcto y se informar� sobre esto a los administradores y moderadores de descargas mediante un e-mail.',
	'HELP_Dl_Links_per_page' => 'Esta opci�n controla cu�ntas descargas ser�n mostradas en cada p�gina de categor�a y en las estad�sticas del ACP.<br />Ser� usado en la lista de mods y en la vista general de la configuraci�n "temas por p�gina".',
	'HELP_Number_recent_dl_on_portal' => 'El n�mero de descargas que aparecer�n en el bloque "�ltimas descargas" que el usuario puede ver en el portal.<br />El bloque usa la �ltima vez que el tema fue editado para esta lista, as� que es posible tener una descarga antigua en esta lista.',
	'HELP_DL_posts' => 'Cada usuario, incluso cada administrador y moderador de descargas, debe haber publicado como m�nimo el n�mero de mensajes que usted especifique para descargar archivos que no son gratis.<br />Es recomendado instalar el MOD antiSpam para evitar usuarios-spammer.<br />Escriba 0 para desactivar esta funci�n, recomendado para foros j�venes.',

	'HELP_Dl_physical_quota' => 'Establezca el l�mite f�sico global que el MOD usar� para guardar y administrar descargas.<br />Cuando este l�mite sea alcanzado, las nuevas descargas deber�n ser subidas v�a un cliente ftp y posteriormente a�adidas con la administraci�n de archivos en el ACP.',
	'HELP_Dl_overall_traffic' => 'Establezca el l�mite global de tr�fico para todas las descargas, y para las subidas tambi�n si lo activa, que no podr� ser excedido en el mes actual.<br />Tras alcanzar este l�mite, todas las descargas ser�n marcadas y bloqueadas (y las subidas tambi�n, si el l�mite est� activado).',
	'HELP_Dl_newtopic_traffic' => 'Para cada tema nuevo publicado, al autor se le a�adir� el tr�fico introducido al total del que ya disponga.',
	'HELP_Dl_reply_traffic' => 'El usuario aumentar� su tr�fico por cada nueva respuesta y cita la cantidad que usted especifique aqu�.',
	'HELP_Dl_stop_uploads' => 'Puede activar/desactivar las subidas con esta opci�n.<br />Si desactiva esta opci�n, solamente los administradores podr�n subir nuevos archivos.<br />Active esta opci�n para permitir a los usuarios subir archivos, dependiendo siempre de los permisos de grupo y categor�a.',
	'HELP_Dl_upload_traffic_count' => 'Si esta opci�n est� activada las subidas de archivo bajar�n el tr�fico global del mes.<br />Tras haber superado el l�mite global no se podr� subir ning�n archivo y las nuevas subidas deber�n ser hechas v�a ftp y posteriormente a�adidas en el ACP.',
	'HELP_Dl_thumb_max_dim' => 'Estos valores limitar�n las dimensiones posible de las miniaturas subidas.<br />Escriba 0 aqu� para desactivar las miniaturas (no es recomendado si el tama�o de miniaturas est� puesto).<br />Las miniaturas existentes ser�n mostradas hasta que el tama�o de �stas no sea cambiado a 0.',
	'HELP_Dl_disable_email' => 'Con esta opci�n puede activar o desactivar completamente las notificaciones por e-mail sobre nuevas descargas o modificaciones en �stas.<br />Si esta opci�n est� activada aqu�, puede activar o desactivar individualmente si recibir� notificaciones cuando se a�ada o se modifique una descarga.<br />S�lo los usuarios que han activado la notificaci�n por e-mail recibir�n estas notificaciones cuando se a�ada o modifique una descarga.<br />Los usuarios pueden abrir la configuraci�n de descargas en el pie de p�gina de la p�gina de descargas.',
	'HELP_Dl_disable_popup' => 'Con esta opci�n puede activar o desactivar completamente las notificaciones por popup o la notificaci�n por un mensaje en el encabezado global sobre nuevas descargas o modificaciones en �stas.<br />Si esta funci�n est� activada aqu�, se puede desactivar individualmente el aviso por una adici�n o modificaci�n.<br />S�lo los usuarios que hayan activado en la configuraci�n de descargas la notificaci�n por popup o mensaje en el encabezado recibir�n estos avisos.<br />Los usuarios pueden acceder a esta configuraci�n desde el pi� de p�gina de la p�gina de descargas.',
	'HELP_Dl_disable_popup_notify' => 'Si activa esta opci�n, puede cancelar el cambio de la fecha de modificaci�n mientras edita una descarga.',

	'HELP_Dl_stat_perm' => 'Seleccione aqu� qu� nivel de usuario se necesitar� para ver las estad�sticas de descargas.<br />Por ejemplo si quiere permitir que lo vean los moderadores de descargas (�NO moderadores del foro!) y los administradores active moderadores de descargas.<br />Recuerde que esta p�gina de estad�sticas puede producir una gran carga del servidor, as� que no es recomendable abrirlo para grandes grupos si tiene un foro grande o muchas descargas.',
	'HELP_Dl_hotlink_action' => 'Aqu� puede escoger c�mo deber� reaccionar el motor de descargas para prevenir enlaces directos a descargas (vea tambi�n la opci�n anterior).<br />Mostrar� un mensaje (reduce la carga del servidor) o redirigir� a la descarga (consume tr�fico adicional).',
	'HELP_Dl_use_hacklist' => 'Esta opci�n permite activar o desactivar la lista de Mods.<br />Si est� activada, podr� introducir informaci�n de Mods cuando est� a�adiendo o modificando descargas para insertar las descargas en la lista de Mods.<br />Si desactiva la lista de Mods, ser� ocultada completamente para todos los usuarios, como si nunca hubiera estado instalada, pero puede activarla cuando lo desee.<br />Recuerde que se perder� toda la informaci�n de Mods cuando se desactive la lista de Mods si edita un archivo mientras est� desactivada.',
	'HELP_Dl_icon_free_for_reg' => 'Esta opci�n cambiar� el icono blanco para descargas (descarga gratuita para usuarios registrados) en blanco para invitados tambi�n.<br />Si desactiva esta opci�n, los invitados ver�n un icono rojo en vez del blanco.',
	'HELP_Dl_latest_comments' => 'Esta opci�n muestra los �ltimos X comentarios en los detalles de descargas. escriba 0 para desactivar este bloque.',
	'HELP_Dl_sort_preform' => 'Con la opci�n "Preestablecido" ordenar� todas las descargas en todas las categor�as para todos los usuarios como est� ordenado en el ACP.<br />Con la opci�n "Usuario" cada usuario puede escoger c�mo ser�n ordenadas las descargas para �l/ella y si este orden ser� o no extendido con otro criterio para ordenarlo.',

/*
* category management
*/
	'HELP_Dl_approve_comments' => 'Si desactiva esta opci�n cada nuevo comentario deber� ser aprobado por un moderador de descargas o un administrador antes de ser visible a todos.',
	'HELP_Dl_cat_rules' => 'Estas reglas ser�n mostradas sobre las subcategor�as y descarga al estar viendo una categor�a.',
	'HELP_Dl_stats_prune' => 'Escriba el n�mero de campos de datos estad�sticos que esta categor�a puede alcanzar.<br />Cada nuevo campo eliminar� el campo anterior.<br />Escriba 0 aqu� para desactivar la auto-limpieza.',
	'HELP_Dl_cat_traffic' => 'Escriba el tr�fico mensual m�ximo para esta categor�a.<br />�Este tr�fico no se incluir� en el tr�fico global!<br />Escriba 0 para desactivar este l�mite.',
	'HELP_Dl_cat_path' => 'Aqu� debe introducir una ruta existente para sus descargas.<br />Este valor debe ser el nombre de una carpeta que est� dentro de la carpeta principal (p. ej. downloads/) que usted ha definido en la configuraci�n general del Mod de descargas.<br />Escriba aqu� el nombre de la carpeta con una barra al final.<br />Por ejemplo, si quiere que los archivos de esta categor�a se guarde en el directorio "downloads/mods/" (�El directorio debe existir!), entonces escriba solamente "mods/".<br />Al guardar esta configuraci�n, el directorio ser� comprobado.<br />�Aseg�rese de que el directorio introducido existe!<br />Si la subcarpeta es una subcarpeta de una subcarpeta, escriba la ruta completa aqu�.<br />Por ejemplo "downloads/mods/misc/" debe ser introducido como "mods/misc/".<br />Aseg�rese de que cada subdirectorio tiene permisos CHMOD 777 y que no contiene caracteres especiales si su servidor es Unix/Linux.',
	'HELP_Dl_cat_name' => 'Este es el nombre de la categor�a, que ser� mostrado en todas partes.<br />Intente evitar caracteres especiales para a su vez evitar entradas confusas en el cuadro "Salto de p�gina".',

	'HELP_Dl_cat_description' => 'Una descripci�n corta de esta categor�a.<br />No est�n disponibles los BBCodes aqu�.<br />Esta descripci�n ser� mostrada en el �ndice de descargas y en subcategor�as.',
	'HELP_Dl_cat_parent' => 'Seleccione aqu� el nivel principal u otra categor�a a la que pertenezca �sta.<br />Con este sistema puede crear estructuras jer�rquicas para sus descargas.',
	'HELP_Dl_must_approve' => 'Active esta opci�n para que sea necesario aprobar cada nueva descarga antes de que sea mostrada en su categor�a.<br />Los administradores y moderadores de descargas recibir�n e-mails con cada nueva descarga sin aprobar.',
	'HELP_Dl_mod_desc_allow' => 'Activa el bloque de informaci�n del Mod cuando se a�ade o modifica una descarga.',
	'HELP_Dl_statistics' => 'Activa estad�sticas detalladas sobre los archivos.<br />Recuerde que estas estad�sticas producir�n consultas y conjuntos de datos adicionales a su base de datos en una tabla separada.',
	'HELP_Dl_comments' => 'Activa el sistema de comentarios en esta categor�a.<br />Los usuarios que usted seleccione m�s abajo podr�n ver y/o escribir comentarios en esta categor�a.<br />Los administradores y moderadores de descargas pueden editar y eliminar todos los comentarios, los autores pueden administrar sus propios mensajes.',
	'HELP_Dl_thumb_cat' => 'Esta opci�n activa las miniaturas en las descargas de esta categor�a.<br />Las dimensiones de estas im�genes est� basada en la configuraci�n que usted haya configurado en la configuraci�n principal de este Mod.',
	'HELP_Dl_bug_tracker_cat' => 'Activa el rastreador de gusanos para descargas en esta categor�a.<br />Los gusanos pueden ser reportados y vistos por todos los usuarios registrados para las descargas relacionadas y desde otras categor�as si el rastreador de gusanos est� activado all� tambi�n.<br />Solamente los administradores y moderadores del foro pueden administrar los gusanos.<br />Para cada cambio en los reportes de gusanos, el autor y el usuario del equipo -que deber�a trabajar para la descarga tambi�n- recibir� un e-mail.',

/*
* file management
*/
	'HELP_Dl_name' => 'Este es el nombre de las descargas, que ser� mostrado en distintos sitios.<br />Por favor intente evitar caracteres especiales para reducir errores visuales.',
	'HELP_Dl_choose_category' => 'Escoja una categor�a, que incluir� esta descarga.<br />El archivo debe estar guardado en el directorio que ha introducido en la administraci�n de categor�as antes de que guarde esta descarga.<br />De lo contrario obtendr� un mensaje de error.',
	'HELP_Dl_file_description' => 'Una descripci�n corta para esta descarga.<br />Esto debe ser mostrado en la categor�a de descarga tambi�n.<br />Los BBCodes est�n desactivados para este texto.<br />Por favor escriba un texto corto para evitar la carga excesiva al abrir la categor�a.',
	'HELP_Dl_files_url' => 'El nombre de esta descarga.<br />Escriba este nombre sin la ruta del archivo ni ninguna barra.<br />El archivo debe existir antes de guardar esta descarga, de lo contrario se obtendr� un mensaje de error.<br />Recuerde las extensiones prohibidas: cualquier archivo con extensi�n prohibida ser� bloqueado.',
	'HELP_Dl_upload_file' => 'El archivo que desea subir desde su ordenador.<br />Aseg�rese de que el tama�o de archivo sea menor que el l�mite y que la extensi�n no est� en la lista de m�s abajo.',
	'HELP_Dl_extern' => 'Active esta opci�n para descargar archivos externos que introducir� en el campo de m�s abajo (http://www.ejemplo.com/media.mp3).<br />La funci�n "gratis" se vuelve insignificante.',
	'HELP_Dl_extern_up' => 'Active esta opci�n para descargar archivos externos que introducir� en el campo de la derecha (http://www.ejemplo.com/media.mp3).<br />La funci�n "gratis" se vuelve insignificante.',
	'HELP_Dl_thumb' => 'Puede subir una peque�a imagen (revise el tama�o de archivo y las dimensiones, especificados bajo este campo) para mostrarlo en los detalles de descarga.<br />Si ya existe una miniatura, puede subir una nueva para reemplazarla.<br />Compruebe la miniatura existente, pues usted va a deshacerse de ella.',
	'HELP_Dl_is_free' => 'Active esta funci�n si la descarga debe ser gratuita para la descarga de todos.<br />Las cuentas de tr�fico no ser�n utilizadas.<br />Escoja gratis para usuarios registrados para activar la descarga s�lo a usuarios registrados.',
	'HELP_Dl_traffic' => 'El tr�fico m�ximo que el archivo tiene permitido producir.<br />Escriba 0 para desactivar el control de tr�fico.',

	'HELP_Dl_approve' => 'Esto aprobar� la descarga autom�ticamente si env�a este formulario.<br />De lo contrario esta descarga ser� ocultada a los usuarios.',
	'HELP_Dl_no_change_edit_time' => 'Marque esta opci�n para no actualizar la �ltima modificaci�n de esta descarga.<br />Esto no afecta al e-mail ni a la notificaci�n por popup/mensaje en el encabezado.',
	'HELP_Dl_disable_popup_files' => 'Marque esta opci�n para no notificar de este cambio por popup/mensaje en el encabezado.<br />Esto no afecta al e-mail de notificaci�n.',
	'HELP_Dl_disable_email_files' => 'Marque esta opci�n para no notificar de este cambio por e-mail.<br />Esto no afecta a la notificaci�n por popup/mensaje en el encabezado.',
	'HELP_Dl_hacklist' => 'Con esta opci�n puede a�adir esta descarga a la lista de Mods (esto debe estar activado en la configuraci�n principal).<br />La opci�n "S�" insertar� la descarga en la lista de Mods, la opci�n "No" har� lo contrario.<br />Al mostrar informaci�n adicional mostrar� este bloque s�lo en los detalles de descarga.',
	'HELP_Dl_hack_version' => 'La versi�n del archivo.<br />Esto se mostrar� siempre junto al nombre de la descarga.<br />No se incluir� si escribe esto en el buscador.',
	'HELP_Dl_hack_autor' => 'El autor de este archivo.<br />Deje esto vac�o para ocultarlo en los detalles de descarga y la vista general.',
	'HELP_Dl_hack_autor_email' => 'La direcci�n de e-mail del autor.<br />Si no lo introduce aqu�, �sto no se mostrar� en los detalles de descarga ni en la vista general.',
	'HELP_Dl_hack_autor_website' => 'Sitio web del autor.<br />Esta URL deber�a ser el sitio web del autor, no la p�gina de la descarga.<br />Por favor no escriba enlaces a sitios con contenido no fiable.',
	'HELP_Dl_hack_dl_url' => 'Escriba aqu� una p�gina para una descarga alternativa de este archivo.<br />Puede ser el sitio web del autor o cualquier otro sitio alternativo.<br />Por favor no escriba enlaces directos a la descarga si el autor no permite esto.',
	'HELP_Dl_mod_desc' => 'Escriba una descripci�n detallada sobre el Mod.<br />Puede usar BBCodes y emoticonos en esta descripci�n.<br />Los saltos l�nea ser�n formateados tambi�n.<br />Este texto s�lo ser� visible en los detalles de descarga.',
	'HELP_Dl_mod_list' => 'Active este bloque en los detalles de descargas.<br />Si no activa dicha acci�n, el bloque no ser� mostrado.',
	'HELP_Dl_mod_require' => 'Indique otros Mods que el usuario deber� instalar antes que este para su correcto funcionamiento.<br />Esta informaci�n s�lo se mostrar� en los detalles de descarga.',
	'HELP_Dl_mod_test' => 'Indique en qu� versi�n de phpBB fue probado este Mod y el resultado fue exitoso.<br />Introduzca �nicamente el n�mero de versi�n en que lo ha probado.<br />El sistema lo mostrar� como phpBB X, siendo X lo que usted inserte en el este campo.<br />Esta informaci�n solo ser� mostrado en los detalles de descarga.',
	'HELP_Dl_mod_todo' => 'Aqu� puede introducir las futuras implementaciones que tiene pensado hacer al Mod o aquellas que est�n ya presentes.<br />Esto crear� una lista ToDo (ParaHacer) que puede ser abierta desde el pie de p�gina de las descargas.<br />Con esto los usuarios pueden ser informados sobre el estado de este Mod.<br />Los saltos de l�nea ser�n tenidos en cuenta, pero los BBCodes no estar�n disponibles aqu�.<br />La lista ToDo permanecer� rellena aunque este bloque est� desactivado.',
	'HELP_Dl_mod_warning' => 'Avisos importantes sobre este Mod, que deber�an tener que ver con la instalaci�n, el uso o la interacci�n con otros Mods.<br />Esta informaci�n ser� mostrada en los detalles de descarga, resaltado con otro color (rojo por defecto).<br />Se tendr�n en cuenta los saltos de l�nea.<br />Los BBCodes no est�n disponibles aqu�.',

	'HELP_Dl_user_download_limit_flag' => 'Esta opci�n, le permite especificar un n�mero l�mite de descargas por mes, para cada usuario. Por ejemplo: Si usted activa esto, y usted establece el "N�mero m�ximo de descargas por mes" igual a 30, cada usuario podr� descargar solamente 30 archivos por mes. Este l�mite no se aplicar� a los administradores y moderadores.',
	'HELP_Dl_user_download_limit' => 'Especifique aqu� el n�mero m�ximo de descargas permitidas por mes para cada usuario. Este l�mite debe ser activado en la opci�n llamada "N�mero l�mite de descargas por mes". Este l�mite no se aplicar� a los administradores y moderadores.',
	)
);

?>