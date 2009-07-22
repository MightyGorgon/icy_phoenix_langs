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
	'Dl_no_help_aviable' => 'No hay ayuda disponible para esta opción',

/*
* title of help popup
*/
	'HELP_TITLE' => 'Descargar MOD de ayuda en línea',

/*
* general configuration
*/
	'HELP_Dl_delay_auto_traffic' => 'Escriba aquí los días que tienen que transcurrir después de que un usuario se registre para que obtenga su primer tráfico automáticamente.<br />El retraso comienza el día en el que el usuario se registra.<br />Escriba 0 aquí para desactivar este retraso.',
	'HELP_Dl_delay_post_traffic' => 'Escriba el número de días que tienen que transcurrir para que un nuevo usuario obtenga su primer tráfico para mensajes.<br />El retraso comienza el día en el que el usuario se registra.<br />Escriba 0 aquí para desactivar este retraso.',
	'HELP_DL_edit_time' => 'Escriba el número de días que desea que permanezca marcada una descarga modificada.<br />Escriba 0 para desactivar esta función.',
	'HELP_Dl_guest_stats_show' => 'Esta opción sólo incluirá o excluirá los datos estadísticos sobre invitados de la categoría pública de estadísticas.<br />El programa seguirá recolectando todos los datos.<br />La herramienta de estadísticas del ACP siempre muestra los datos de estadísticas al completo.',
	'HELP_Dl_method' => 'El método "antiguo" enviará el archivo directamente al cliente.<br />Este método es compatible con la mayoría de los entornos web, pero no puede mostrar el tamaño real del archivo durante la descarga, así que el cliente no puede calcular el tiempo restante de la descarga.<br />El método "nuevo" mostrará el tamaño real, pero puede generar errores.<br />Use el método "antiguo" si tiene problemas con el nuevo.<br />Si ninguno funciona, marque la opción "directo" para enlazar directamente al archivo en el servidor si los archivos serán de tamaño mayor al límite de la memoria de PHP.',
	'HELP_Dl_method_quota' => 'Establezca aquí el tamaño a partir del cual el archivo será cortado en partes. Esto sólo funcionará si ha escogido el método "nuevo".<br />Por debajo de este límite el archivo será recuperado mediante readfile(); y será enviado directamente al cliente.',
	'HELP_DL_new_time' => 'Escriba aquí el número de días que una nueva descarga permanecerá marcada.<br />Escriba 0 para deshabilitar esta función.',
	'HELP_Download_path' => 'La ruta relativa a la raíz de la carpeta de phpBB.<br />En una nueva instalación de este paquete encontrará aquí el valor "downloads/".<br />Tenga en consideración no usar caracteres especiales si está usando Unix/Linux.<br />La barra al final del nombre de la carpeta es necesaria, pero no la añada al principio.<br />Esta y todas las subcarpetas incluidas deben tener permisos CHMOD 777 para hacer posible que todas las funciones se ejecuten sin problemas.<br />Bajo esta carpeta usted debe crear una o más subcarpetas que contendrán todos los archivos físicos.<br />Es recomendable crear una subcarpeta para cada grupo lógico de categorías.<br />Esta subcarpeta tiene que ser introducida como ruta en la configuración de cada categoría con la misma sintaxis que el directorio principal, pero sin incluir el directorio principal (para más información lea la ayuda en la administración de categorías).<br />Puede crear más subcarpetas usando su cliente FTP o usando la caja de herramientas (vea el enlace arriba a la derecha, en esta página).',
	'HELP_Dl_thumb_max_size' => 'Escriba 0 como tamaño de archivo para desactivar las miniaturas en todas las categorías.<br />Si activa las miniaturas, escriba dimensiones de imágenes razonables para nuevas miniaturas.<br />Si desactiva las miniaturas tampoco podrá ver miniaturas existentes en los detalles de descarga.',
	'HELP_Dl_use_ext_blacklist' => 'Si activa la lista negra, todos los tipos de archivos introducidos serán bloqueados para nuevas subidas o descargas modificadas.',
	'HELP_Dl_enable_post_traffic' => 'Establezca el tráfico que recibirá un usuario por crear nuevos temas, responder o citar en las siguientes dos opciones.',
	'HELP_Dl_limit_desc_on_index' => 'Cortar las descripciones a partir del número de caracteres que escriba.<br />Escriba 0 para desactivar esta función.',
	'HELP_Dl_prevent_hotlink' => 'Active esta opción se desea prevenir todos los enlaces directors de descargas. Se mostrarán los detalles de descarga.<br />¡Esta opción <b>no</b> activa ninguna protección de carpetas!',
	'HELP_Dl_user_traffic_once' => 'Escoja si las descargas sólo reducirán el tráfico del usuario la primera vez que el usuario descargue dicho archivo.<br /><b>Aviso:</b><br />¡Esta opción NO cambiará el estado de la descarga!',
	'HELP_Dl_edit_own_downloads' => 'Si activa esta opción, cada usuario puede editar sus propios archivos (los que haya subido él/ella) sin ser un administrador o moderador de descargas.',
	'HELP_Dl_shorten_extern_links' => 'Escriba la longitud de el enlace de descarga externo que será mostrado en los detalles de la descarga.<br />Se basa en la longitud del enlace en el medio o el comienzo del lado derecho.<br />Deje este campo vacío o escriba 0 para desactivar esta función.',
	'HELP_Dl_show_footer_legend' => 'Esta opción permite activar o desactivar los iconos de estado en el pie de página.<br />Los iconos que puede encontrar bajo las descargas no se cambiarán con esta opción.',
	'HELP_Dl_show_footer_stat' => 'Esta opción permite activar o desactivar las líneas de estadísticas del pie de página.<br />Las estadísticas seguirán actualizándose aunque desactive esto.',
	'HELP_Dl_show_real_filetime' => 'Con esto puede mostrar la fecha real de la última vez que se modificó uno de los archivos en los detalles de descarga.<br />Este es el modo más exacto de identificar la fecha y hora en el que el archivo fue editado vía un cliente ftp o actualizado editando la descarga.',
	'HELP_Dl_visual_confirmation' => 'Active esta opción para obligar al usuario a introducir un código de confirmación visual para acceder a la descarga.<br />Si el usuario no introduce el código o lo introduce mal, el MOD mostrará un mensaje y detendrá la descarga.',
	'HELP_Dl_report_broken' => 'Active esta opción para permitir que se reporten enlaces rotos.<br />Si activa "no para invitados", solamente los usuarios registrados podrán reportar enlaces rotos.',
	'HELP_Dl_report_broken_lock' => 'Si activa esta opción la descarga será bloqueada mientras que esté reportada como rota.<br />Ocultará el botón de descarga y ningún usuario podrá descargar el archivo hasta que el administrador o un moderador de descargas desbloquee la descarga.',
	'HELP_Dl_report_broken_message' => 'Si una descarga ha sido reportada como rota, será mostrado un mensaje informando sobre esto.<br />Si activa esta opción el mensaje solamente será mostrado mientras que la descarga esté bloqueada.<br />En este caso no se mostrará debajo, sino que en el lugar del botón de descarga.',
	'HELP_Dl_report_broken_vc' => 'Activa una confirmación visual si el usuario está reportando un enlace roto.<br />Solamente se guardará el reporte si el código introducido es correcto y se informará sobre esto a los administradores y moderadores de descargas mediante un e-mail.',
	'HELP_Dl_Links_per_page' => 'Esta opción controla cuántas descargas serán mostradas en cada página de categoría y en las estadísticas del ACP.<br />Será usado en la lista de mods y en la vista general de la configuración "temas por página".',
	'HELP_Number_recent_dl_on_portal' => 'El número de descargas que aparecerán en el bloque "últimas descargas" que el usuario puede ver en el portal.<br />El bloque usa la última vez que el tema fue editado para esta lista, así que es posible tener una descarga antigua en esta lista.',
	'HELP_DL_posts' => 'Cada usuario, incluso cada administrador y moderador de descargas, debe haber publicado como mínimo el número de mensajes que usted especifique para descargar archivos que no son gratis.<br />Es recomendado instalar el MOD antiSpam para evitar usuarios-spammer.<br />Escriba 0 para desactivar esta función, recomendado para foros jóvenes.',

	'HELP_Dl_physical_quota' => 'Establezca el límite físico global que el MOD usará para guardar y administrar descargas.<br />Cuando este límite sea alcanzado, las nuevas descargas deberán ser subidas vía un cliente ftp y posteriormente añadidas con la administración de archivos en el ACP.',
	'HELP_Dl_overall_traffic' => 'Establezca el límite global de tráfico para todas las descargas, y para las subidas también si lo activa, que no podrá ser excedido en el mes actual.<br />Tras alcanzar este límite, todas las descargas serán marcadas y bloqueadas (y las subidas también, si el límite está activado).',
	'HELP_Dl_newtopic_traffic' => 'Para cada tema nuevo publicado, al autor se le añadirá el tráfico introducido al total del que ya disponga.',
	'HELP_Dl_reply_traffic' => 'El usuario aumentará su tráfico por cada nueva respuesta y cita la cantidad que usted especifique aquí.',
	'HELP_Dl_stop_uploads' => 'Puede activar/desactivar las subidas con esta opción.<br />Si desactiva esta opción, solamente los administradores podrán subir nuevos archivos.<br />Active esta opción para permitir a los usuarios subir archivos, dependiendo siempre de los permisos de grupo y categoría.',
	'HELP_Dl_upload_traffic_count' => 'Si esta opción está activada las subidas de archivo bajarán el tráfico global del mes.<br />Tras haber superado el límite global no se podrá subir ningún archivo y las nuevas subidas deberán ser hechas vía ftp y posteriormente añadidas en el ACP.',
	'HELP_Dl_thumb_max_dim' => 'Estos valores limitarán las dimensiones posible de las miniaturas subidas.<br />Escriba 0 aquí para desactivar las miniaturas (no es recomendado si el tamaño de miniaturas está puesto).<br />Las miniaturas existentes serán mostradas hasta que el tamaño de éstas no sea cambiado a 0.',
	'HELP_Dl_disable_email' => 'Con esta opción puede activar o desactivar completamente las notificaciones por e-mail sobre nuevas descargas o modificaciones en éstas.<br />Si esta opción está activada aquí, puede activar o desactivar individualmente si recibirá notificaciones cuando se añada o se modifique una descarga.<br />Sólo los usuarios que han activado la notificación por e-mail recibirán estas notificaciones cuando se añada o modifique una descarga.<br />Los usuarios pueden abrir la configuración de descargas en el pie de página de la página de descargas.',
	'HELP_Dl_disable_popup' => 'Con esta opción puede activar o desactivar completamente las notificaciones por popup o la notificación por un mensaje en el encabezado global sobre nuevas descargas o modificaciones en éstas.<br />Si esta función está activada aquí, se puede desactivar individualmente el aviso por una adición o modificación.<br />Sólo los usuarios que hayan activado en la configuración de descargas la notificación por popup o mensaje en el encabezado recibirán estos avisos.<br />Los usuarios pueden acceder a esta configuración desde el pié de página de la página de descargas.',
	'HELP_Dl_disable_popup_notify' => 'Si activa esta opción, puede cancelar el cambio de la fecha de modificación mientras edita una descarga.',

	'HELP_Dl_stat_perm' => 'Seleccione aquí qué nivel de usuario se necesitará para ver las estadísticas de descargas.<br />Por ejemplo si quiere permitir que lo vean los moderadores de descargas (¡NO moderadores del foro!) y los administradores active moderadores de descargas.<br />Recuerde que esta página de estadísticas puede producir una gran carga del servidor, así que no es recomendable abrirlo para grandes grupos si tiene un foro grande o muchas descargas.',
	'HELP_Dl_hotlink_action' => 'Aquí puede escoger cómo deberá reaccionar el motor de descargas para prevenir enlaces directos a descargas (vea también la opción anterior).<br />Mostrará un mensaje (reduce la carga del servidor) o redirigirá a la descarga (consume tráfico adicional).',
	'HELP_Dl_use_hacklist' => 'Esta opción permite activar o desactivar la lista de Mods.<br />Si está activada, podrá introducir información de Mods cuando esté añadiendo o modificando descargas para insertar las descargas en la lista de Mods.<br />Si desactiva la lista de Mods, será ocultada completamente para todos los usuarios, como si nunca hubiera estado instalada, pero puede activarla cuando lo desee.<br />Recuerde que se perderá toda la información de Mods cuando se desactive la lista de Mods si edita un archivo mientras esté desactivada.',
	'HELP_Dl_icon_free_for_reg' => 'Esta opción cambiará el icono blanco para descargas (descarga gratuita para usuarios registrados) en blanco para invitados también.<br />Si desactiva esta opción, los invitados verán un icono rojo en vez del blanco.',
	'HELP_Dl_latest_comments' => 'Esta opción muestra los últimos X comentarios en los detalles de descargas. escriba 0 para desactivar este bloque.',
	'HELP_Dl_sort_preform' => 'Con la opción "Preestablecido" ordenará todas las descargas en todas las categorías para todos los usuarios como está ordenado en el ACP.<br />Con la opción "Usuario" cada usuario puede escoger cómo serán ordenadas las descargas para él/ella y si este orden será o no extendido con otro criterio para ordenarlo.',

/*
* category management
*/
	'HELP_Dl_approve_comments' => 'Si desactiva esta opción cada nuevo comentario deberá ser aprobado por un moderador de descargas o un administrador antes de ser visible a todos.',
	'HELP_Dl_cat_rules' => 'Estas reglas serán mostradas sobre las subcategorías y descarga al estar viendo una categoría.',
	'HELP_Dl_stats_prune' => 'Escriba el número de campos de datos estadísticos que esta categoría puede alcanzar.<br />Cada nuevo campo eliminará el campo anterior.<br />Escriba 0 aquí para desactivar la auto-limpieza.',
	'HELP_Dl_cat_traffic' => 'Escriba el tráfico mensual máximo para esta categoría.<br />¡Este tráfico no se incluirá en el tráfico global!<br />Escriba 0 para desactivar este límite.',
	'HELP_Dl_cat_path' => 'Aquí debe introducir una ruta existente para sus descargas.<br />Este valor debe ser el nombre de una carpeta que esté dentro de la carpeta principal (p. ej. downloads/) que usted ha definido en la configuración general del Mod de descargas.<br />Escriba aquí el nombre de la carpeta con una barra al final.<br />Por ejemplo, si quiere que los archivos de esta categoría se guarde en el directorio "downloads/mods/" (¡El directorio debe existir!), entonces escriba solamente "mods/".<br />Al guardar esta configuración, el directorio será comprobado.<br />¡Asegúrese de que el directorio introducido existe!<br />Si la subcarpeta es una subcarpeta de una subcarpeta, escriba la ruta completa aquí.<br />Por ejemplo "downloads/mods/misc/" debe ser introducido como "mods/misc/".<br />Asegúrese de que cada subdirectorio tiene permisos CHMOD 777 y que no contiene caracteres especiales si su servidor es Unix/Linux.',
	'HELP_Dl_cat_name' => 'Este es el nombre de la categoría, que será mostrado en todas partes.<br />Intente evitar caracteres especiales para a su vez evitar entradas confusas en el cuadro "Salto de página".',

	'HELP_Dl_cat_description' => 'Una descripción corta de esta categoría.<br />No están disponibles los BBCodes aquí.<br />Esta descripción será mostrada en el índice de descargas y en subcategorías.',
	'HELP_Dl_cat_parent' => 'Seleccione aquí el nivel principal u otra categoría a la que pertenezca ésta.<br />Con este sistema puede crear estructuras jerárquicas para sus descargas.',
	'HELP_Dl_must_approve' => 'Active esta opción para que sea necesario aprobar cada nueva descarga antes de que sea mostrada en su categoría.<br />Los administradores y moderadores de descargas recibirán e-mails con cada nueva descarga sin aprobar.',
	'HELP_Dl_mod_desc_allow' => 'Activa el bloque de información del Mod cuando se añade o modifica una descarga.',
	'HELP_Dl_statistics' => 'Activa estadísticas detalladas sobre los archivos.<br />Recuerde que estas estadísticas producirán consultas y conjuntos de datos adicionales a su base de datos en una tabla separada.',
	'HELP_Dl_comments' => 'Activa el sistema de comentarios en esta categoría.<br />Los usuarios que usted seleccione más abajo podrán ver y/o escribir comentarios en esta categoría.<br />Los administradores y moderadores de descargas pueden editar y eliminar todos los comentarios, los autores pueden administrar sus propios mensajes.',
	'HELP_Dl_thumb_cat' => 'Esta opción activa las miniaturas en las descargas de esta categoría.<br />Las dimensiones de estas imágenes está basada en la configuración que usted haya configurado en la configuración principal de este Mod.',
	'HELP_Dl_bug_tracker_cat' => 'Activa el rastreador de gusanos para descargas en esta categoría.<br />Los gusanos pueden ser reportados y vistos por todos los usuarios registrados para las descargas relacionadas y desde otras categorías si el rastreador de gusanos está activado allí también.<br />Solamente los administradores y moderadores del foro pueden administrar los gusanos.<br />Para cada cambio en los reportes de gusanos, el autor y el usuario del equipo -que debería trabajar para la descarga también- recibirá un e-mail.',

/*
* file management
*/
	'HELP_Dl_name' => 'Este es el nombre de las descargas, que será mostrado en distintos sitios.<br />Por favor intente evitar caracteres especiales para reducir errores visuales.',
	'HELP_Dl_choose_category' => 'Escoja una categoría, que incluirá esta descarga.<br />El archivo debe estar guardado en el directorio que ha introducido en la administración de categorías antes de que guarde esta descarga.<br />De lo contrario obtendrá un mensaje de error.',
	'HELP_Dl_file_description' => 'Una descripción corta para esta descarga.<br />Esto debe ser mostrado en la categoría de descarga también.<br />Los BBCodes están desactivados para este texto.<br />Por favor escriba un texto corto para evitar la carga excesiva al abrir la categoría.',
	'HELP_Dl_files_url' => 'El nombre de esta descarga.<br />Escriba este nombre sin la ruta del archivo ni ninguna barra.<br />El archivo debe existir antes de guardar esta descarga, de lo contrario se obtendrá un mensaje de error.<br />Recuerde las extensiones prohibidas: cualquier archivo con extensión prohibida será bloqueado.',
	'HELP_Dl_upload_file' => 'El archivo que desea subir desde su ordenador.<br />Asegúrese de que el tamaño de archivo sea menor que el límite y que la extensión no esté en la lista de más abajo.',
	'HELP_Dl_extern' => 'Active esta opción para descargar archivos externos que introducirá en el campo de más abajo (http://www.ejemplo.com/media.mp3).<br />La función "gratis" se vuelve insignificante.',
	'HELP_Dl_extern_up' => 'Active esta opción para descargar archivos externos que introducirá en el campo de la derecha (http://www.ejemplo.com/media.mp3).<br />La función "gratis" se vuelve insignificante.',
	'HELP_Dl_thumb' => 'Puede subir una pequeña imagen (revise el tamaño de archivo y las dimensiones, especificados bajo este campo) para mostrarlo en los detalles de descarga.<br />Si ya existe una miniatura, puede subir una nueva para reemplazarla.<br />Compruebe la miniatura existente, pues usted va a deshacerse de ella.',
	'HELP_Dl_is_free' => 'Active esta función si la descarga debe ser gratuita para la descarga de todos.<br />Las cuentas de tráfico no serán utilizadas.<br />Escoja gratis para usuarios registrados para activar la descarga sólo a usuarios registrados.',
	'HELP_Dl_traffic' => 'El tráfico máximo que el archivo tiene permitido producir.<br />Escriba 0 para desactivar el control de tráfico.',

	'HELP_Dl_approve' => 'Esto aprobará la descarga automáticamente si envía este formulario.<br />De lo contrario esta descarga será ocultada a los usuarios.',
	'HELP_Dl_no_change_edit_time' => 'Marque esta opción para no actualizar la última modificación de esta descarga.<br />Esto no afecta al e-mail ni a la notificación por popup/mensaje en el encabezado.',
	'HELP_Dl_disable_popup_files' => 'Marque esta opción para no notificar de este cambio por popup/mensaje en el encabezado.<br />Esto no afecta al e-mail de notificación.',
	'HELP_Dl_disable_email_files' => 'Marque esta opción para no notificar de este cambio por e-mail.<br />Esto no afecta a la notificación por popup/mensaje en el encabezado.',
	'HELP_Dl_hacklist' => 'Con esta opción puede añadir esta descarga a la lista de Mods (esto debe estar activado en la configuración principal).<br />La opción "Sí" insertará la descarga en la lista de Mods, la opción "No" hará lo contrario.<br />Al mostrar información adicional mostrará este bloque sólo en los detalles de descarga.',
	'HELP_Dl_hack_version' => 'La versión del archivo.<br />Esto se mostrará siempre junto al nombre de la descarga.<br />No se incluirá si escribe esto en el buscador.',
	'HELP_Dl_hack_autor' => 'El autor de este archivo.<br />Deje esto vacío para ocultarlo en los detalles de descarga y la vista general.',
	'HELP_Dl_hack_autor_email' => 'La dirección de e-mail del autor.<br />Si no lo introduce aquí, ésto no se mostrará en los detalles de descarga ni en la vista general.',
	'HELP_Dl_hack_autor_website' => 'Sitio web del autor.<br />Esta URL debería ser el sitio web del autor, no la página de la descarga.<br />Por favor no escriba enlaces a sitios con contenido no fiable.',
	'HELP_Dl_hack_dl_url' => 'Escriba aquí una página para una descarga alternativa de este archivo.<br />Puede ser el sitio web del autor o cualquier otro sitio alternativo.<br />Por favor no escriba enlaces directos a la descarga si el autor no permite esto.',
	'HELP_Dl_mod_desc' => 'Escriba una descripción detallada sobre el Mod.<br />Puede usar BBCodes y emoticonos en esta descripción.<br />Los saltos línea serán formateados también.<br />Este texto sólo será visible en los detalles de descarga.',
	'HELP_Dl_mod_list' => 'Active este bloque en los detalles de descargas.<br />Si no activa dicha acción, el bloque no será mostrado.',
	'HELP_Dl_mod_require' => 'Indique otros Mods que el usuario deberá instalar antes que este para su correcto funcionamiento.<br />Esta información sólo se mostrará en los detalles de descarga.',
	'HELP_Dl_mod_test' => 'Indique en qué versión de phpBB fue probado este Mod y el resultado fue exitoso.<br />Introduzca únicamente el número de versión en que lo ha probado.<br />El sistema lo mostrará como phpBB X, siendo X lo que usted inserte en el este campo.<br />Esta información solo será mostrado en los detalles de descarga.',
	'HELP_Dl_mod_todo' => 'Aquí puede introducir las futuras implementaciones que tiene pensado hacer al Mod o aquellas que están ya presentes.<br />Esto creará una lista ToDo (ParaHacer) que puede ser abierta desde el pie de página de las descargas.<br />Con esto los usuarios pueden ser informados sobre el estado de este Mod.<br />Los saltos de línea serán tenidos en cuenta, pero los BBCodes no estarán disponibles aquí.<br />La lista ToDo permanecerá rellena aunque este bloque esté desactivado.',
	'HELP_Dl_mod_warning' => 'Avisos importantes sobre este Mod, que deberían tener que ver con la instalación, el uso o la interacción con otros Mods.<br />Esta información será mostrada en los detalles de descarga, resaltado con otro color (rojo por defecto).<br />Se tendrán en cuenta los saltos de línea.<br />Los BBCodes no están disponibles aquí.',

	'HELP_Dl_user_download_limit_flag' => 'Esta opción, le permite especificar un número límite de descargas por mes, para cada usuario. Por ejemplo: Si usted activa esto, y usted establece el "Número máximo de descargas por mes" igual a 30, cada usuario podrá descargar solamente 30 archivos por mes. Este límite no se aplicará a los administradores y moderadores.',
	'HELP_Dl_user_download_limit' => 'Especifique aquí el número máximo de descargas permitidas por mes para cada usuario. Este límite debe ser activado en la opción llamada "Número límite de descargas por mes". Este límite no se aplicará a los administradores y moderadores.',
	)
);

?>