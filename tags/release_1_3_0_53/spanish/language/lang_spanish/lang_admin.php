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
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
*
*/

/**
*
* @Extra credits for this file
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
	'General' => 'Administración general',
	'Users' => 'Administrar usuarios',
	'Groups' => 'Administrar grupos',
	'Forums' => 'Administrar foros',
	'Styles' => 'Administrar estilos',

	'Configuration' => 'Configuración',
	'Various_Configuration' => 'Configuraciones varias',
	'Permissions' => 'Permisos',
	'Manage' => 'Administración',
	'manage' => 'Administración',
	'Disallow' => 'Deshabilitar nombres de usuario',
	'Prune' => 'Purgar (Prune)',
	'Mass_Email' => 'Correo masivo',
	'Ranks' => 'Rangos',
	'Smilies' => 'Emoticonos',
	'Ban_Management' => 'Control de exclusión',
	'Word_Censor' => 'Palabras censuradas',
	'Export' => 'Exportar',
	'Create_new' => 'Crear',
	'Add_new' => 'Agregar',
	'Backup_DB' => 'Copia de seguridad de la base de datos',
	'Restore_DB' => 'Restaurar la base de datos',
	'DB_Maintenance' => 'Base de datos',
	'News_Admin' => 'Noticias',
	'News_Cats' => 'Categorías de noticias',
	'News_Config' => 'Configuración de noticias',
	'Security' => 'Seguridad',
	'Member_Tries' => 'Intentos del usuario',
	'Quick_Search' => 'Búsqueda rápida',
	'Special' => 'Especial',
	'Styles_Management' => 'Administración de estilos',
	'Manage_Bots' => 'Administración de robots',
	'Admin_Notepad' => 'Libreta',

// Index
	'Admin' => 'Administración',
	'Not_admin' => 'No está autorizado para administrar este foro',
	'Welcome_phpBB' => 'Bienvenido a Icy Phoenix',
	'Admin_intro' => 'Gracias por elegir Icy Phoenix como la solución para su foro. Esta pantalla le dará una síntesis de las estadísticas del mismo. Puede volver a esta pantalla pulsando en el enlace <u>índice de administración</u> en la parte superior. Para volver al índice del foro, tiene un enlace en la parte superior también. El resto de los enlaces del panel izquierdo de esta pantalla le permitirán controlar todos los aspectos de su foro. Cada pantalla tendrá instrucciones de cómo usar cada herramienta.',
	'PayPalInfo' => 'Icy Phoenix es un proyecto de código libre, si está interesado en contribuir a su desarrollo puede utilizar el enlace de abajo.',
	'Forum_stats' => 'Estadísticas del foro',
	'Admin_Index' => 'Índice de administración',
	'Preview_forum' => 'Vista previa del foro',
	'Click_return_admin_index' => 'Pulse %saquí%s para regresar al índice de administración',
	'Portal' => 'Portal',
	'Preview_Portal' => 'Vista previa del portal',
	'Main_index' => 'Foro',

	'Statistic' => 'Estadística',
	'Value' => 'Valor', //var duplicada, buscar mas abajo (duplicated var, search down)
	'Number_posts' => 'Cantidad de mensajes',
	'Posts_per_day' => 'Envíos por día',
	'Number_topics' => 'Cantidad de temas',
	'Topics_per_day' => 'Temas por día',
	'Number_users' => 'Cantidad de usuarios',
	'Users_per_day' => 'Usuarios por día',
	'Board_started' => 'Fecha de inicio del foro',
	'Avatar_dir_size' => 'Tamaño del directorio de imágenes',
	'Database_size' => 'Tamaño de la base de datos',
	'Gzip_compression' =>'Tipo de compresión gzip',
	'Not_available' => 'No está disponible',

	'ON' => 'ON', // This is for GZip compression
	'OFF' => 'OFF',

// DB Utils
	'Database_Utilities' => 'Utilidades de la base de datos',

	'Restore' => 'Restaurar',
	'Backup' => 'Copia de seguridad (Backup)',
	'Restore_explain' => 'Esta acción realizará una restauración completa de todas las tablas desde un archivo previamente guardado. Si su servidor lo soporta, puede subir un archivo de texto comprimido con gzip y automáticamente será descomprimido. <b>ATENCIÓN</b>: Esta acción sobrescribirá los datos existentes. La restauración puede llevar un largo tiempo para ser procesada, dependiendo del tamaño de la copia de seguridad (backup), manténgase en esta página hasta que se complete el proceso.',
	'Backup_explain' => 'Con todo, recuerde que el backup que puede hacer desde aquí no es totalmente fiable, y que siempre es preferible hacerlo desde phpMyAdmin, una herramienta que probablemente le proporciona su alojamiento o que, si no es así, usted puede instalar.',

	'Backup_options' => 'Opciones de la copia de seguridad (Backup)',
	'Start_backup' => 'Iniciar copia de seguridad (Backup)',
	'Full_backup' => 'Copia de seguridad (Backup) completa',
	'Structure_backup' => 'Copia de seguridad sólo de la estructura',
	'Data_backup' => 'Copia de seguridad sólo de los datos',
	'Additional_tables' => 'Tablas adicionales',
	'phpBB_only' => 'Solamente tablas relacionadas con phpBB',
	'Gzip_compress' => 'Archivo comprimido en gzip',
	'Select_file' => 'Seleccione un archivo',
	'Start_Restore' => 'Iniciar restauración',

	'Restore_success' => 'La base de datos ha sido correctamente restaurada.<br /><br />Su foro debería retornar al estado en que se encontraba cuando se realizó el backup.',
	'Backup_download' => 'La descarga comenzará enseguida; por favor, espere un momento.',
	'Backups_not_supported' => 'Disculpe, pero su copia de seguridad (Backup) de la base de datos no es soportada por su sistema de base de datos.',

	'Restore_Error_uploading' => 'Error subiendo el archivo de la copia de seguridad (Backup)',
	'Restore_Error_filename' => 'Problema de nombre de archivo. Por favor, intente con otro nombre',
	'Restore_Error_decompress' => 'No se puede descomprimir el archivo gzip. Por favor, envíe un archivo de texto simple',
	'Restore_Error_no_file' => 'No se ha podido subir ningún archivo',

// Auth pages
	'Select_a_User' => 'Seleccione un usuario',
	'Select_a_Group' => 'Seleccione un grupo',
	'Select_a_Forum' => 'Seleccione un foro',
	'Auth_Control_User' => 'Control de permisos de usuario',
	'Auth_Control_Group' => 'Control de permisos de grupo',
	'Auth_Control_Forum' => 'Control de permisos de foro',
// Start add Permission List
	'Auth_list_Control_Forum' => 'Control de todos los permisos del foro',
// End add Permission List
	'Look_up_User' => 'Observar usuario', 
	'Look_up_Group' => 'Observar grupo', 
	'Look_up_Forum' => 'Observar foro', 

	'Group_auth_explain' => 'Desde aquí puede cambiar los permisos y la moderación asignados a cada grupo. No olvide que al cambiar permisos de grupo, los permisos individuales de los usuarios pueden seguir permitiendo que alguien se conecte a un foro concreto al que no debería tener acceso. Se le avisará si sucede esto.',
	'User_auth_explain' => 'Desde aquí puede cambiar los permisos y el estado de moderación asignado a cada usuario. No olvide que al cambiar permisos de usuarios, los permisos de grupo pueden seguir permitiendo que alguien se conecte a un foro concreto al que no debería tener acceso. Se le avisará si sucede esto.',
	'Forum_auth_explain' => 'Desde aquí puede cambiar los niveles de autorización para cada foro, y hacerlo en modo avanzado o modo simple (el modo avanzado ofrece mayor control sobre las operaciones permitidas en cada foro). Recuerde que cambiar los niveles de permisos para los foros afectará a qué usuarios pueden ejecutar en ellos las distintas opciones.',
// Start add Permission List
	'Forum_auth_list_explain' => 'Aquí puede cambiar los niveles de autorización de cada foro. Recuerde que cambiar el nivel de permiso de foros, afectará a qué usuarios pueden realizar varias operaciones en ellos.',
// End add Permission List

	'Simple_mode' => 'Modo simple',
	'Advanced_mode' => 'Modo avanzado',
	'Moderator_status' => 'Estado del moderador',

	'Allowed_Access' => 'Acceso permitido',
	'Disallowed_Access' => 'Acceso denegado',
	'Is_Moderator' => 'Es moderador',
	'Not_Moderator' => 'No es moderador',

	'Conflict_warning' => 'Advertencia de conflicto de autorizaciones',
	'Conflict_access_userauth' => 'Este usuario todavía tiene acceso a este foro por medio de los permisos de grupo al que pertenece. Tal vez deba cambiar los permisos de grupo o borrar a este usuario de su grupo para impedir que tenga acceso. Los grupos que permiten acceso (y los foros involucrados) están listados abajo.',
	'Conflict_mod_userauth' => 'Este usuario todavía tiene derechos de moderador de este foro por medio de los permisos de grupo al que pertenece. Tal vez deba cambiar los permisos de grupo o borrar a este usuario de su grupo para impedir que tenga acceso de moderador. Los grupos que permiten acceso (y los foros involucrados) están listados abajo.',

	'Conflict_access_groupauth' => 'El siguiente usuario (o usuarios) todavía tiene(n) acceso a este foro por medio de sus permisos individuales de usuario. Tal vez debería cambiar los permisos individuales para impedir el acceso. Los usuarios con acceso (y los foros involucrados) están listados abajo.',
	'Conflict_mod_groupauth' => 'El siguiente usuario (o usuarios) todavía tiene(n) permisos de moderación en este foro por medio de sus permisos de usuario. Tal vez debería cambiar los permisos individuales para impedir que tenga(n) derechos de moderación. Los usuarios con acceso (y los foros involucrados) están listados abajo.',

	'Public' => 'Público',
	'Private' => 'Privado',
	'Registered' => 'Registrados',
	'Self' => 'Propios',
	'Administrators' => 'Administradores',
	'Hidden' => 'Oculto',

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
	'Forum_NONE' => 'NINGUNO',
	'Forum_ALL' => 'TODOS',
	'Forum_REG' => 'REG',
	'Forum_SELF' => 'PROPIOS',
	'Forum_PRIVATE' => 'PRIVADOS',
	'Forum_MOD' => 'MOD',
	'Forum_JADMIN' => 'J ADMIN',
	'Forum_ADMIN' => 'ADMIN',

	'View' => 'Ver',
	'Read' => 'Leer',
	'Post' => 'Envío',
	'Reply' => 'Responder',
	'Edit' => 'Editar',
	'Delete' => 'Borrar',
	'Sticky' => 'Nota (Fijo)',
	'Announce' => 'Anuncios', 
	'Vote' => 'Votar',
	'Pollcreate' => 'Crear una encuesta',

	'Simple_Permission' => 'Permisos simples',

	'User_Level' => 'Nivel de usuario', 
	'Auth_User' => 'Usuario',
	'Auth_Junior_Admin' => 'Administrador junior',
	'Auth_Admin' => 'Administrador',
	'Group_memberships' => 'Grupos de usuarios',
	'Usergroup_members' => 'Este grupo tiene los siguientes usuarios',

	'Forum_auth_updated' => 'Permisos de foro actualizados',
	'User_auth_updated' => 'Permisos de usuario actualizados',
	'Group_auth_updated' => 'Permisos de grupo actualizados',

	'Auth_updated' => 'Los permisos han sido actualizados',
	'Click_return_userauth' => 'Pulse %saquí%s para volver a los permisos de los usuarios',
	'Click_return_groupauth' => 'Pulse %saquí%s para volver a los permisos del grupo',
	'Click_return_forumauth' => 'Pulse %saquí%s para volver a los permisos del foro',

// Banning
	'Ban_control' => 'Control de exclusión',
	'Ban_explain' => 'Desde aquí puede controlar la exclusión de usuarios. Puede hacerlo expulsando un usuario, una dirección IP, o un rango de direcciones IP o nombres de host (o ambos). Estos métodos previenen que un usuario pueda acceder a la página principal de su foro. Para prevenir que un usuario vuelva a registrarse puede inhibir su dirección de e-mail. Por favor, note que inhibiendo sólo la dirección de correo no prevendrá que ese usuario se conecte y publique mensajes. Debe usar uno de los métodos descritos más arriba.',
	'Ban_explain_warn' => 'Tenga en cuenta que colocando un rango de direcciones IP, excluye del acceso al foro a todas las direcciones que se encuentran dentro de ese rango. Si realmente debe utilizar un rango, intente usar uno pequeño, para así no excluir a otros usuarios.',

	'Select_username' => 'Seleccione un usuario',
	'Select_ip' => 'Seleccione una dirección IP',
	'Select_email' => 'Seleccione una dirección de e-mail',

	'Ban_username' => 'Excluir uno o más usuarios',
	'Ban_username_explain' => 'Puede excluir múltiples usuarios con un solo movimiento, usando la combinación apropiada de ratón y teclado según su navegador',

	'Ban_IP' => 'Excluir una o más direcciones IP o nombres de dominio (hosts)',
	'IP_hostname' => 'Direcciones IP o nombres de dominio (hosts)',
	'Ban_IP_explain' => 'Para especificar varias direcciones IP o nombres de dominio (hosts), sepárelos con una coma. Para especificar un rango de direcciones IP, separe el inicio y el final con un guión (-); para especificar un comodín use el asterisco (*).',

	'Ban_email' => 'Excluir una o más direcciones de e-mail',
	'Ban_email_explain' => 'Para especificar más de una dirección de e-mail, sepárelas con una coma. Para especificar un comodín, use * como en *@hotmail.com',

	'Unban_username' => 'Quitar exclusión a uno o más usuarios',
	'Unban_username_explain' => 'Puede quitar la exclusión a múltiples usuarios con un solo movimiento, usando la combinación apropiada de ratón y teclado según su navegador',

	'Unban_IP' => 'Desinhibir una o más direcciones IP o nombres de dominio (hosts)',
	'Unban_IP_explain' => 'Puede quitar la exclusión a múltiples direcciones IP o nombres de dominio (hosts) con un solo movimiento, usando la combinación apropiada de ratón y teclado según su navegador',

	'Unban_email' => 'Desinhibir una o más direcciones de e-mail',
	'Unban_email_explain' => 'Puede quitar la exclusión a múltiples direcciones de e-mail con un solo movimiento, usando la combinación apropiada de ratón y teclado según su navegador',

	'No_banned_users' => 'No hay usuarios excluidos',
	'No_banned_ip' => 'No hay IPs excluidas',
	'No_banned_email' => 'No hay e-mails excluidos',

	'Ban_update_sucessful' => 'La lista de excluidos ha sido actualizada con éxito',
	'Click_return_banadmin' => 'Pulse %saquí%s para volver al control de exclusiones',

// Configuration
	'General_Config' => 'Configuración general',
	'Config_explain' => 'El siguiente formulario le permitirá personalizar todas las opciones generales de su foro. Para configurar usuarios y foros use los enlaces correspondientes en el panel de la izquierda.',

	'Click_return_config' => 'Pulse %saquí%s para volver a la configuración general',

	'General_settings' => 'Configuración general del foro',
	'Server_name' => 'Nombre de dominio',
	'Server_name_explain' => 'El nombre de dominio desde donde funciona el foro',
	'Script_path' => 'Ubicación de scripts',
	'Script_path_explain' => 'La ubicación donde se halla instalado phpBB2 en relación al nombre de dominio',
	'Server_port' => 'Puerto del servidor',
	'Server_port_explain' => 'El puerto en el que funciona el servidor, generalmente 80. Cámbielo sólo si es diferente',
	'Site_name' => 'Nombre del sitio',
	'Site_desc' => 'Descripción del sitio',
	'Board_disable' => 'Desactivar foro',
	'Board_disable_explain' => 'Esto hará que el foro no esté disponible para los usuarios. NO desconecte su nombre de usuario mientras el foro esté desactivado o no podrá conectarse de nuevo. Los administradores pueden acceder al panel de administración mientras el foro está deshabilitado.',
	'Acct_activation' => 'Habilitar activación de cuenta',
	'Acc_None' => 'No', // These three entries are the type of activation
	'Acc_User' => 'Por el usuario',
	'Acc_Admin' => 'Por el admin',

	'Abilities_settings' => 'Configuración básica de usuarios y foros',
	'Max_poll_options' => 'Número máximo de opciones para encuestas',
	'Flood_Interval' => 'Intervalo entre envíos (Flood)',
	'Flood_Interval_explain' => 'Cantidad de segundos que un usuario debe esperar antes de poder hacer otro envío', 
	'Board_email_form' => 'Enviar e-mail a través del foro',
	'Board_email_form_explain' => 'Los usuarios envían e-mails unos a otros a través del foro',
	'Topics_per_page' => 'Temas por página',
	'Posts_per_page' => 'Respuestas por página',
	'Hot_threshold' => 'Respuestas necesarias para ser considerado popular',
	'Default_style' => 'Estilo por defecto',
	'Override_style' => 'Ignorar el estilo del usuario',
	'Override_style_explain' => 'Reemplazar el estilo del usuario por el estilo por defecto',
	'Default_language' => 'Lenguaje por defecto',
	'Date_format' => 'Formato de fecha',
	'System_timezone' => 'Zona horaria del sistema',
	'Enable_gzip' => 'Habilitar compresión gzip',
// Start Gzip Compression Level MOD
	'Gzip_level' => 'Nivel de compresión gzip',
	'Gzip_level_explain' => 'Aquí puede cambiar el nivel de compresión gzip con un número entre 0 y 9. 0 es equivalente a apagado, 1 es muy bajo, y 9 es el máximo. 9 es el recomendado.',
// End Gzip Compression Level MOD
	'Enable_prune' => 'Habilitar limpieza (Pruning) de los foros',
	'Allow_HTML' => 'Permitir HTML',
	'Allow_BBCode' => 'Permitir BBCode',
	'Allowed_tags' => 'Etiquetas HTML permitidas',
	'Allowed_tags_explain' => 'Separe las etiquetas con comas',
	'Allow_smilies' => 'Permitir emoticonos',
	'Smilies_path' => 'Ubicación de los emoticonos',
	'Smilies_path_explain' => 'Ruta desde el directorio phpBB , por ejemplo: images/smilies',
	'Allow_sig' => 'Permitir firmas',
	'Max_sig_length' => 'Máxima longitud de firmas',
	'Max_sig_length_explain' => 'El máximo de caracteres que puede tener una firma',
	'Allow_name_change' => 'Permitir cambiar de nombre de usuario',

	'Avatar_settings' => 'Configuraciones de avatares',
	'Allow_local' => 'Habilitar galería de avatares',
	'Allow_remote' => 'Habilitar avatares remotos',
	'Allow_remote_explain' => 'Avatares vinculados desde otros sitios',
	'Allow_upload' => 'Habilitar subir avatar',
	'Max_filesize' => 'Tamaño máximo de archivo de avatar',
	'Max_filesize_explain' => 'Para los avatares que se suben al servidor',
	'Max_avatar_size' => 'Dimensiones máximas para los avatares',
	'Max_avatar_size_explain' => '(alto x ancho en píxeles)',
	'Avatar_storage_path' => 'Ubicación de los avatares',
	'Avatar_storage_path_explain' => 'La ubicación donde se encuentran los avatares, por ej. images/avatars',
	'Avatar_gallery_path' => 'Ubicación de la galería de avatares',
	'Avatar_gallery_path_explain' => 'La ubicación donde se encuentra(n) la(s) galería(s) de avatares, por ej. images/avatars/gallery',

	'COPPA_settings' => 'Configuraciones COPPA',
	'COPPA_fax' => 'Número de fax COPPA',
	'COPPA_mail' => 'Dirección de correo de COPPA',
	'COPPA_mail_explain' => 'Esta es la dirección a donde los padres o tutores legales enviarán los formularios de COPPA',

	'Email_settings' => 'Configuraciones de e-mail',
	'Admin_email' => 'Dirección de e-mail del administrador',
	'Email_sig' => 'Firma del e-mail',
	'Email_sig_explain' => 'Este texto será añadido a todos los e-mails que envíe el foro',
	'Use_SMTP' => 'Usar servidor SMTP para el correo',
	'Use_SMTP_explain' => 'Marque "SÍ" si desea enviar e-mails a través de un servidor externo, en vez de con la función local de envío',
	'SMTP_server' => 'Dirección del servidor SMTP',
	'SMTP_username' => 'Usuario SMTP',
	'SMTP_username_explain' => 'Ingrese un nombre de usuario sólo si su servidor SMTP lo requiere',
	'SMTP_password' => 'Clave SMTP',
	'SMTP_password_explain' => 'Ingrese una clave sólo si su servidor SMTP lo requiere',

	'Disable_privmsg' => 'Mensaje privado',
	'Inbox_limits' => 'Cantidad máxima de mensajes en la bandeja de entrada',
	'Sentbox_limits' => 'Cantidad máxima de mensajes en la carpeta de enviados',
	'Savebox_limits' => 'Cantidad máxima de mensajes en la carpeta de guardados',

	'Cookie_settings' => 'Configuración de las cookies', 
	'Cookie_settings_explain' => 'Estos detalles definen cómo las cookies se envían a sus usuarios a través de su navegador. En la mayoría de los casos, la configuración por defecto debería bastar. Pero si necesita cambiarla hágalo con cuidado: una configuración incorrecta podría ocasionar que sus usuarios no pudiesen ingresar al foro',
	'Cookie_domain' => 'Dominio de la cookie',
	'Cookie_name' => 'Nombre de la cookie',
	'Cookie_path' => 'Ruta de la cookie',
	'Cookie_secure' => 'Cookie segura [ https ]',
	'Cookie_secure_explain' => 'Si su servidor permite SSL, active esta opción. Si no, déjela desactivada',
	'Session_length' => 'Duración de la sesión [ segundos ]',

// Visual Confirmation
	'Visual_confirm' => 'Activar confirmación visual',
	'Visual_confirm_explain' => 'Requiere que los usuarios ingresen un código definido por una imagen cuando se registran.',

// Autologin Keys - added 2.0.18
	'Allow_autologin' => 'Permite conexión automática',
	'Allow_autologin_explain' => 'Determina que a los usuarios se les permitirá elegir si quieren ser conectados automáticamente en el foro.',
	'Autologin_time' => 'Expirado de la clave de conexión automática',
	'Autologin_time_explain' => 'Cuánto tiempo dura, en días, la clave de conexión si el usuario no visita el foro. Poner 0 (cero) para desactivar el expirado.',

// Forum Management
	'Forum_admin' => 'Administración de foros',
	'Forum_admin_explain' => 'Desde este panel puede agregar, borrar, modificar, reordenar y resincronizar categorías y foros',
	'Edit_forum' => 'Editar foro',
	'Create_forum' => 'Crear nuevo foro',
	'Create_category' => 'Crear nueva categoría',
	'Remove' => 'Quitar',
	'Action' => 'Acción',
	'Update_order' => 'Actualizar orden',
	'Config_updated' => 'Configuración de foro actualizada correctamente',
	'Move_up' => 'Subir',
	'Move_down' => 'Bajar',
	'Resync' => 'Sincronizar',
	'No_mode' => 'No se especificó ningún modo',
	'Forum_edit_delete_explain' => 'El siguiente formulario le permitirá personalizar todas las opciones generales de su foro. Para configurar usuarios y foros use los enlaces correspondientes en el panel de la izquierda',

	'Move_contents' => 'Mover todo el contenido',
	'Forum_delete' => 'Borrar foro',
	'Forum_delete_explain' => 'El siguiente formulario le permitirá borrar un foro (o categoría) y decidir dónde quiere ubicar todos los temas (o foros) que contenía.',

	'Status_locked' => 'Bloqueado',
	'Status_unlocked' => 'Desbloqueado',
	'Forum_settings' => 'Configuración general de foro',
	'Forum_name' => 'Nombre del foro',
	'Forum_desc' => 'Descripción',
	'Forum_status' => 'Estado del foro',
	'Forum_pruning' => 'Auto-Limpieza (pruning)',

	'prune_freq' => 'Verificar antigüedad de temas cada',
	'prune_days' => 'Eliminar temas que no han recibido respuestas por espacio de',
	'Set_prune_data' => 'Ha activado auto-limpieza (pruning) para este foro, pero no ha indicado la cantidad de días para el vencimiento. Por favor, regrese e indíquelo.',

	'FORUM_SIMILAR_TOPICS' => 'Temas similares',
	'FORUM_SIMILAR_TOPICS_EXPLAIN' => 'Si activa esta opción verá un cuadro de temas similares en la parte inferior del foro (tenga en cuenta que también necesita tener activada la opción global de esta característica en la configuración Icy Phoenix => SEO)',
	'FORUM_TOPIC_VIEWS' => 'Visor de temas',
	'FORUM_TOPIC_VIEWS_EXPLAIN' => 'Si activa esta opción todos los usuarios que vean mensajes en este foro serán almacenados en la BD (tenga en cuenta que también necesita tener activada la opción global de esta característica en la configuración Icy Phoenix => SQL)',
	'FORUM_TAGS' => 'Palabras del foro',
	'FORUM_TAGS_EXPLAIN' => 'Si activa esta opción verá un cuadro con las palabras mas usadas en este foro (tenga en cuenta que también necesita tener activada la opción global de esta característica en la configuración Icy Phoenix => SEO)',
	'FORUM_SORT_BOX' => 'Orden de mensajes',
	'FORUM_SORT_BOX_EXPLAIN' => 'Si activa esta opción verá un cuadro que le permitirá ordenar alfabéticamente los temas en este foro (tenga en cuenta que también necesita tener activada la opción global de esta característica en la configuración Icy Phoenix)',
	'FORUM_KB_MODE' => 'Modo biblioteca',
	'FORUM_KB_MODE_EXPLAIN' => 'Si activa esta opción este foro se mostrará en modo biblioteca (temas listados como en la biblioteca)',
	'FORUM_INDEX_ICONS' => 'Iconos en el índice',
	'FORUM_INDEX_ICONS_EXPLAIN' => 'Si activa esta opción verá  iconos para RSS y nuevo tema en el índice de foros (tenga en cuenta que también necesita tener activada la opción global de esta característica en la configuración Icy Phoenix)',

	'Move_and_Delete' => 'Mover y borrar',

	'Delete_all_posts' => 'Borrar todos los ingresos',
	'Nowhere_to_move' => 'No ha especificado un destino',

	'Edit_Category' => 'Modificar categoría',
	'Edit_Category_explain' => 'Use este formulario para modificar el nombre de una categoría.',

	'Forums_updated' => 'Información de foro y categoría actualizada correctamente',

	'Must_delete_forums' => 'Necesita borrar todos los foros para poder borrar esta categoría',

	'Click_return_forumadmin' => 'Pulse %saquí%s para volver a la administración de foros',

// Smiley Management
	'smiley_title' => 'Utilidad de modificación de emoticonos (Smileys)',
	'smile_desc' => 'Desde esta página usted puede agregar, borrar y modificar los emoticonos (o smileys) que los usuarios pueden usar en sus mensajes, tanto públicos como privados.',

	'smiley_config' => 'Configuración de emoticono',
	'smiley_code' => 'Código de emoticono',
	'smiley_url' => 'Archivo de imagen de emoticono',
	'smiley_emot' => 'Emoción de emoticono',
	'smile_add' => 'Agregar nuevo emoticono',
	'Smile' => 'Emoticono',
	'Emotion' => 'Emoción',

	'Select_pak' => 'Seleccionar un archivo .pak',
	'replace_existing' => 'Reemplazar emoticonos existentes',
	'keep_existing' => 'Mantener emoticonos existentes',
	'smiley_import_inst' => 'Debe descomprimir el paquete de emoticonos y subir todos los archivos en el directorio de emoticonos para así lograr su correcta instalación. Luego, seleccione la información correcta desde este formulario para poder importar los emoticonos',
	'smiley_import' => 'Importar un paquete de emoticonos',
	'choose_smile_pak' => 'Seleccione un paquete de emoticonos .pak',
	'import' => 'Importar emoticonos',
	'smile_conflicts' => 'Qué debería hacerse en caso de conflictos',
	'del_existing_smileys' => 'Borrar los emoticonos existentes antes de importar',
	'import_smile_pack' => 'Importar paquete de emoticonos',
	'export_smile_pack' => 'Crear paquete de emoticonos',
	'export_smiles' => 'Para crear un paquete de emoticonos a partir de sus actuales emoticonos instalados, pulse %saquí%s para descargar el archivo smiles.pak. Renombre este archivo apropiadamente, pero asegúrese de que se mantenga la extensión .pak. Luego cree un archivo .zip conteniendo todas las imágenes de emoticonos y agréguele este archivo de configuración .pak.',

	'smiley_add_success' => 'El emoticono fue agregado correctamente',
	'smiley_edit_success' => 'El emoticono fue actualizado correctamente',
	'smiley_import_success' => 'El paquete de emoticonos fue importado correctamente',
	'smiley_del_success' => 'El emoticono fue eliminado correctamente',
	'Click_return_smileadmin' => 'Pulse %saquí%s para volver a la administración de emoticonos',

// User Management
	'User_admin' => 'Administración de usuarios',
	'User_admin_explain' => 'Desde aquí puede cambiar la información de sus usuarios y ciertas opciones. Para modificar los permisos de usuario, por favor, use el sistema de permisos de usuarios y grupos.',

	'Look_up_user' => 'Observar usuario',

	'Admin_user_fail' => 'No se pudo actualizar el perfil del usuario.',
	'Admin_user_updated' => 'El perfil del usuario fue actualizado correctamente.',
	'Click_return_useradmin' => 'Pulse %saquí%s para volver al panel de administración de usuarios',
//Start Quick Administrator User Options and Information MOD
	'Click_return_userprofile' => 'Pulse %saquí%s para volver al perfil del usuario',
//End Quick Administrator User Options and Information MOD
	'User_delete' => 'Borrar este usuario',
	'User_delete_explain' => 'Pulse aquí para borrar este usuario. Tenga en cuenta que luego no podrá restaurarlo.',
	'User_deleted' => 'El usuario fue borrado correctamente.',

	'User_status' => 'Usuario activo',
	'User_allowpm' => 'Puede enviar mensajes privados',
	'User_allowavatar' => 'Puede mostrar su avatar',

	'Admin_avatar_explain' => 'Desde aquí puede ver y borrar el avatar actual del usuario.',

	'User_special' => 'Campos sólo para administración',
	'User_special_explain' => 'Estos campos no pueden ser modificados por los usuarios. Desde aquí puede configurar el estado y otras opciones que están ocultas a los usuarios.',

// Group Management
	'Group_administration' => 'Administración de grupos',
	'Group_admin_explain' => 'Desde este panel puede administrar todos sus grupos de usuarios. Puede borrar, crear y modificar grupos. Puede asignar moderadores, abrir o cerrar grupos, y cambiar sus nombres y descripciones',
	'Error_updating_groups' => 'Ha habido un error mientras se actualizaban los grupos',
	'Updated_group' => 'El grupo fue actualizado correctamente',
	'Added_new_group' => 'El nuevo grupo fue creado correctamente',
	'Deleted_group' => 'El grupo fue borrado correctamente',
	'New_group' => 'Crear nuevo grupo',
	'Edit_group' => 'Editar grupo',
	'group_name' => 'Nombre del grupo',
	'group_description' => 'Descripción del grupo',
	'group_moderator' => 'Moderador del grupo',
	'group_status' => 'Estado del grupo',
	'group_open' => 'Grupo abierto',
	'group_closed' => 'Grupo cerrado',
	'group_hidden' => 'Grupo oculto',
	'group_delete' => 'Borrar grupo',
	'group_delete_check' => 'Borrar este grupo',
	'submit_group_changes' => 'Enviar cambios',
	'reset_group_changes' => 'Cancelar cambios',
	'No_group_name' => 'Debe especificar un nombre para este grupo',
	'No_group_moderator' => 'Debe especificar un moderador para este grupo',
	'No_group_mode' => 'Debe especificar un modo para este grupo, abierto o cerrado',
	'No_group_action' => 'No se especificó una acción',
	'delete_group_moderator' => '¿Borrar el antiguo moderador del grupo?',
	'delete_moderator_explain' => 'Si está cambiando el moderador del grupo, active esta casilla para borrar el antiguo moderador. Si no, no la active, y el usuario se convertirá en un usuario normal del grupo.',
	'Click_return_groupsadmin' => 'Pulse %saquí%s para volver a administración de grupos.',
	'Select_group' => 'Seleccione un grupo',
	'Look_up_group' => 'Observar grupo',

// Prune Administration
	'Forum_Prune' => 'Vencimiento (Prune) de foros',
	'Forum_Prune_explain' => 'Este proceso eliminará los temas que no tengan mensajes nuevos en la cantidad de días especificados. Si no ingresa un número entonces se borrarán TODOS los temas. No se removerán temas donde haya encuestas activas ni anuncios. Necesitará remover estos temas manualmente.',
	'Do_Prune' => 'Ejecutar vencimientos',
	'All_Forums' => 'Todos los foros',
	'Prune_topics_not_posted' => 'Borrar temas sin respuestas en esta cantidad de días',
	'Topics_pruned' => 'Temas borrados',
	'Posts_pruned' => 'Mensajes borrados',
	'Prune_success' => 'El proceso de vencimiento (Pruning) de foros se ha completado correctamente',

// Word censor
	'Words_title' => 'Control de palabras censuradas',
	'Words_explain' => 'Desde este panel puede agregar, modificar o remover palabras que serán automáticamente censuradas en sus foros. Además, los usuarios no podrán registrar nombres que contengan estas palabras. Se aceptan los comodines (*) en el campo de palabras. Por ejemplo, *pito* coincidirá con sapitos;, pito* coincidirá con pitos, o *pito coincidirá con compito.',
	'Word' => 'Palabra',
	'Edit_word_censor' => 'Editar el censor de palabras',
	'Replacement' => 'Reemplazar',
	'Add_new_word' => 'Agregar nueva palabra',
	'Update_word' => 'Actualizar censor de palabras',

	'Must_enter_word' => 'Debe ingresar una palabra y otra palabra para reemplazarla',
	'No_word_selected' => 'No seleccionó ninguna palabra para modificar',

	'Word_updated' => 'La censura de palabra fue actualizada correctamente',
	'Word_added' => 'La censura de palabra fue agregada correctamente',
	'Word_removed' => 'La censura de palabra fue eliminada correctamente',

	'Click_return_wordadmin' => 'Pulse %saquí%s para volver a administración de palabras censuradas',

// Mass Email
	'Mass_email_explain' => 'Aquí puede enviar un correo a todos sus usuarios o a usuarios de algún grupo específico. Para esto, se enviará un correo a la dirección de administración suministrada, con una copia oculta a todos los destinatarios. Si está enviando correo a una gran cantidad de personas, por favor sea paciente después de enviarlo y no detenga la página a mitad de proceso. Es normal que un envío masivo de correo tome tiempo y será notificado cuando haya terminado',
	'Compose' => 'Escribir', 

	'Recipients' => 'Destinatarios', 
	'All_users' => 'Todos los usuarios',

	'Email_successfull' => 'Su mensaje ha sido enviado',
	'Click_return_massemail' => 'Pulse %saquí%s para volver al panel de correo masivo',

// Ranks admin
	'Ranks_title' => 'Administración de rangos',
	'Ranks_explain' => 'Usando este formulario puede agregar, borrar, ver o modificar rangos. También puede crear rangos especiales que pueden ser asignados a usuarios particulares usando la administración de usuarios',

	'Add_new_rank' => 'Agregar nuevo rango',

	'Rank_title' => 'Título del rango',
	'Rank_special' => 'Marcar como rango especial',
	'Rank_minimum' => 'Cantidad mínima de mensajes',
	'Rank_maximum' => 'Cantidad máxima de mensajes',
	'Rank_image' => 'Imagen del rango (tenga en cuenta la ruta raíz del foro)',
	'Rank_image_explain' => 'Use esto para definir una pequeña imagen asociada al rango',

	'Must_select_rank' => 'Debe elegir un rango',
	'No_assigned_rank' => 'No se asignaron rangos especiales',

	'Rank_updated' => 'El rango fue actualizado correctamente',
	'Rank_added' => 'El rango fue agregado correctamente',
	'Rank_removed' => 'El rango fue borrado correctamente',
	'No_update_ranks' => 'El rango fue borrado correctamente. Sin embargo, las cuentas de usuario con este rango no han sido actualizadas. Tendrá que hacerlo manualmente en esas cuentas',

	'Click_return_rankadmin' => 'Pulse %saquí%s para volver al panel de administración de rangos',

// Disallow Username Admin
	'Disallow_control' => 'Control de nombres prohibidos',
	'Disallow_explain' => 'Desde aquí puede especificar nombres de usuarios que no se permitirán. Se pueden usar comodines (*). No podrá agregar nombres que YA estén registrados. Debe primero borrar esos usuarios para deshabilitarlos o prohibirlos.',

	'Delete_disallow' => 'Borrar',
	'Delete_disallow_title' => 'Borrar nombre prohibido',
	'Delete_disallow_explain' => 'Puede borrar un nombre prohibido seleccionándolo de esta lista y pulsando en enviar',

	'Add_disallow' => 'Agregar',
	'Add_disallow_title' => 'Agregar un nombre prohibido',
	'Add_disallow_explain' => 'Puede deshabilitar un nombre de usuario usando caracteres comodín (*) para que coincidan con diversas posibilidades',

	'No_disallowed' => 'No hay nombres prohibidos',

	'Disallowed_deleted' => 'El nombre prohibido se ha borrado correctamente',
	'Disallow_successful' => 'El nombre prohibido se ha agregado correctamente',
	'Disallowed_already' => 'El nombre que usted ingresó no pudo ser deshabilitado. O bien ya existe en la lista, o existe en la censura de palabras, o existe un usuario con ese nombre.',

	'Click_return_disallowadmin' => 'Pulse %saquí%s para volver al panel de administración de nombres de usuario',

// Styles Admin
	'Styles_admin' => 'Administración de estilos',
	'Styles_explain' => 'Mediante este panel puede agregar, quitar y administrar estilos (plantillas y temas) disponibles para sus usuarios',
	'Styles_addnew_explain' => 'La lista siguiente contiene todos los estilos disponibles para su foro. Los ítem en esta lista no han sido todavía instalados en la base de datos de phpBB. Para instalar un estilo, simplemente pulse en el enlace "instalar" al lado de alguno de los estilos.',

	'Select_template' => 'Seleccione un estilo',

	'Style' => 'Estilo',
	'Template' => 'Plantilla (Template)',
	'Download' => 'Descargar',

	'Edit_theme' => 'Modificar estilo',
	'Edit_theme_explain' => 'En el siguiente formulario puede modificar la configuración del estilo seleccionado',

	'Create_theme' => 'Crear estilo',
	'Create_theme_explain' => 'Use el siguiente formulario para crear un estilo nuevo en base a una plantilla. Cuando ingresa colores (para los cuales debe usar el valor hexadecimal) no debe incluir el # inicial, ej. CCCCCC es válido, #CCCCCC no lo es',

	'Export_themes' => 'Exportar estilos',
	'Export_explain' => 'En este panel podrá exportar un estilo para una plantilla en particular. Seleccione la plantilla de la lista y el programa (script) creará el archivo de configuración y tratará de grabarlo en la carpeta correspondiente. Si no se puede grabar el archivo se le dará la opción de descargarlo. Para que el programa pueda grabar el archivo debe darle permisos de escritura a la carpeta de plantillas (template) en el ftp de su foro. Para más información vea la guía de phpBB2.',

	'Theme_installed' => 'El estilo seleccionado fue instalado correctamente',
	'Style_removed' => 'El estilo seleccionado ha sido borrado de la base de datos. Para eliminarlo completamente debe borrar la carpeta correspondiente al estilo, en el ftp de su foro.',
	'Theme_info_saved' => 'La información de estilo para la plantilla seleccionada ha sido guardada. Debería volver los permisos de la carpeta del estilo y el theme_info.cfg a sólo lectura',
	'Theme_updated' => 'El estilo seleccionado ha sido actualizado. Ahora debería exportarlo',
	'Theme_created' => 'Estilo creado. Ahora debería exportarlo al archivo de configuración para poder usarlo en otros sitios',

	'Confirm_delete_style' => '¿Está seguro de que quiere borrar este estilo?',

	'Download_theme_cfg' => 'El exportador no pudo escribir la información de configuración del estilo. Pulse en el botón de abajo para descargar el archivo con su navegador. Una vez descargado podrá transferirlo a la carpeta (templates) que contiene la plantilla. Luego podrá hacer un paquete de distribución o usarlo en otros sitios',
	'No_themes' => 'La plantilla seleccionada no tiene estilos adjuntos. Para crear un nuevo estilo pulse en crear estilo en el panel izquierdo',
	'No_template_dir' => 'No se puede abrir la carpeta de la plantilla. Puede que el servidor no tenga acceso al no tener habilitados los permisos de escritura o que no exista',
	'Cannot_remove_style' => 'No puede eliminar el estilo seleccionado, ya que es el estilo por defecto del foro. Por favor, cambie el estilo por defecto del foro y vuelva a intentarlo.',
	'Style_exists' => 'El nombre de estilo seleccionado ya existe. Por favor, vuelva atrás y elija un nombre diferente.',

	'Click_return_styleadmin' => 'Pulse %saquí%s para volver al panel de administración de estilos',

	'Theme_settings' => 'Configuración de estilos',
	'Theme_element' => 'Elemento de estilos',
	'Simple_name' => 'Nombre simple',
	'Save_Settings' => 'Guardar configuración',

	'Stylesheet' => 'CSS stylesheet',
	'Stylesheet_explain' => 'Nombre del archivo CSS a usar para esta plantilla.',
	'Background_image' => 'Imagen de fondo',
	'Background_color' => 'Color de fondo',
	'Theme_name' => 'Nombre del estilo',
	'Link_color' => 'Color de enlace',
	'Text_color' => 'Color de texto',
	'VLink_color' => 'Color de enlace visitado',
	'ALink_color' => 'Color de enlace activo',
	'HLink_color' => 'Color de enlace con el puntero del ratón encima',
	'Tr_color1' => 'Color de fila de tabla 1',
	'Tr_color2' => 'Color de fila de tabla 2',
	'Tr_color3' => 'Color de fila de tabla 3',
	'Tr_class1' => 'Clase de fila de tabla 1',
	'Tr_class2' => 'Clase de fila de tabla 2',
	'Tr_class3' => 'Clase de fila de tabla 3',
	'Th_color1' => 'Color de encabezado de tabla 1',
	'Th_color2' => 'Color de encabezado de tabla 2',
	'Th_color3' => 'Color de encabezado de tabla 3',
	'Th_class1' => 'Clase de encabezado de tabla 1',
	'Th_class2' => 'Clase de encabezado de tabla 2',
	'Th_class3' => 'Clase de encabezado de tabla 3',
	'Td_color1' => 'Color de celda de tabla 1',
	'Td_color2' => 'Color de celda de tabla 2',
	'Td_color3' => 'Color de celda de tabla 3',
	'Td_class1' => 'Clase de celda de tabla 1',
	'Td_class2' => 'Clase de celda de tabla 2',
	'Td_class3' => 'Clase de celda de tabla 3',

// Admin Userlist Start
	'Userlist' => 'Lista de usuarios',
	'Userlist_description' => 'Ver la lista completa de los usuarios y varias acciones más',

	'Add_group' => 'Añadir al grupo',
	'Add_group_explain' => 'Seleccione el grupo al que añadir el usuario seleccionado',

	'Open_close' => 'Abrir/cerrar',
	'Active' => 'Activo',
	'Group' => 'Grupo(s)',
	'Rank' => 'Rango',
	'Last_activity' => 'Última actividad',
	'Never' => 'Nunca',
	'User_manage' => 'Administrar',
	'Find_all_posts' => 'Buscar todos los mensajes',

	'Select_one' => 'Seleccionar uno',
	'Ban' => 'Excluir',
	'Activate_deactivate' => 'Activar/desactivar',

	'User_id' => 'ID de usuario',
	'User_level' => 'Nivel de usuario',
	'Ascending' => 'Ascendente',
	'Descending' => 'Descendente',
	'Show' => 'Mostrar',
	'All' => 'Todo',

	'Member' => 'Usuario',
	'Pending' => 'Pendiente',

	'Confirm_user_ban' => '¿Está seguro de querer excluir a los usuarios seleccionados?',
	'Confirm_user_deleted' => '¿Está seguro de querer borrar a los usuarios seleccionados?',

	'User_status_updated' => 'Estado de usuario(s) actualizado',
	'User_banned_successfully' => 'Usuario(s) excluido(s) correctamente',
	'User_deleted_successfully' => 'Usuario(s) borrado(s) correctamente',
	'User_add_group_successfully' => 'Usuario(s) añadido(s) al grupo correctamente',

	'Click_return_userlist' => 'Pulse %saquí%s para volver a lista de usuarios',
//
// Admin Userlist End

// Version Check
	'Version_up_to_date' => 'Su versión de phpBB es la más actual. No hay actualizaciones de phpBB disponibles para su versión.',
	'Version_up_to_date_ip' => 'No hay actualizaciones disponibles para su versión de Icy Phoenix',
	'Version_not_up_to_date' => 'Su versión de phpBB parece <b>no</b> ser la más actual. Hay actualizaciones disponibles para su versión de phpBB, visite <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a> para obtener la última versión.',
	'Version_not_up_to_date_ip' => 'Actualización disponible para su versión de Icy Phoenix, visite <a href="http://www.icyphoenix.com" target="_new">Icy Phoenix</a> para más información.',
	'Latest_version_info' => 'La última versión disponible es la <b>phpBB %s</b>.',
	'Current_version_info' => 'Usted está utilizando <b>phpBB %s</b>.',
	'Connect_socket_error' => 'No se puede abrir una conexión al servidor de phpBB. El mensaje de error remitido es:<br />%s',
	'Connect_socket_error_ip' => 'No ha sido posible abrir una conexión con el servidor de Icy Phoenix',
	'Socket_functions_disabled' => 'No se pueden usar funciones de socket.',
	'Mailing_list_subscribe_reminder' => 'Para ser informado de las últimas actualizaciones de phpBB, ¿por qué no se dirige a <a href="http://www.phpbb.com/support/" target="_new">esta dirección</a> para suscribirse a nuestra lista de correo?',
	'Version_information' => 'Información de versión',
	'Version_not_checked' => 'La comprobación de la versión está deshabilitada. Visite el foro oficial para más información.',

// Advanced Signature Divider Control
	'sig_title' => 'Control avanzado de división de firma',
	'sig_divider' => 'División actual de la firma',
	'sig_explain' => 'Aquí puede controlar que división tendrán los usuarios en sus firmas para cada mensaje',

// Start add - Birthday MOD
	'Birthday_required' => 'Establecer como obligatoria la fecha de nacimiento', 
	'Enable_birthday_greeting' => 'Activar el pop-up de felicitación',
	'Birthday_greeting_expain' => 'Los usuarios que hayan introducido su fecha de nacimiento recibirán un popup felicitándoles por su cumpleaños al entrar en el foro.',
	'Next_birthday_greeting' => 'Año del próximo cumpleaños',
	'Next_birthday_greeting_expain' => 'Este campo guarda la fecha del próximo año en el que se le enviará de nuevo al usuario el popup de felicitación.',
	'Wrong_next_birthday_greeting' => 'El año próximo que ha elegido para el cumpleaños no es válido. Por favor, vuelva a intentarlo.',
	'Max_user_age' => 'Límite de edad de los usuarios',
	'Min_user_age' => 'Mínima edad requerida para los usuarios',
	'Birthday_lookforward' => 'Observar las fechas de los cumpleaños que tendrán lugar en los próximos días:',
	'Birthday_lookforward_explain' => 'Número de días que el script comprobará para saber qué usuarios cumplirán años en el número de días especificado.',
// End add - Birthday MOD

// Start add - Yellow card admin MOD
	'Max_user_bancard' => 'Número máximo de advertencias', 
	'Max_user_bancard_explain' => 'Cuando el usuario exceda el límite de tarjetas amarillas será expulsado (baneado)', 
	'ban_card' => 'Tarjeta amarilla', 
	'ban_card_explain' => 'El usuario será expulsado (baneado) cuando acumule %d tarjetas amarillas', 
	'Greencard' => 'Reincorporar (Des-Banear)', 
	'Bluecard' => 'Informar acerca del mensaje', 
	'Bluecard_limit' => 'Intervalo de tarjeta azul', 
	'Bluecard_limit_explain' => 'Avisar a los moderadores por cada tarjeta azul asignada a un mensaje', 
	'Bluecard_limit_2' => 'Límite de tarjetas azules', 
	'Bluecard_limit_2_explain' => 'Se envía la primera notificación a los moderadores cuando un mensaje alcance la cantidad indicada de tarjetas azules', 
	'Report_forum' => 'Foro de reportes',
	'Report_forum_explain' => 'Seleccionar el foro donde los usuarios reportaran mensajes, los usuarios DEBEN poder enviar/responder en este foro',

// Start add - Last visit MOD
	'Hidde_last_logon' => 'Ocultar la hora de la última conexión', 
	'Hidde_last_logon_expain' => 'Si se activa esta opción, la hora de la última conexión que se puede ver en los perfiles de los usuarios permanecerá oculta a todos los usuarios salvo al administrador.', 
// End add - Last visit MOD
//
// Start add - Online/Offline/Hidden Mod
	'Online_time' => 'Tiempo de estado de conexión',
	'Online_time_explain' => 'Número de segundos que el usuario debe ser mostrado como conectado (no utilice un valor más bajo que 60).',
	'Online_setting' => 'Ajuste de estado de conexión',
	'Online_color' => 'Color del texto conectado',
	'Offline_color' => 'Color del texto desconectado',
	'Hidden_color' => 'Color del texto oculto',
// End add - Online/Offline/Hidden Mod

// Disallow other admins to delete or edit the first admin MOD
	'L_LISTOFADMINEDIT' => 'Accesos bloqueados a la cuenta del primer administrador',
	'L_LISTOFADMINEDITEXP' => 'En esta lista se sitúan los accesos bloqueados a la cuenta del primer administrador en el foro. Los administradores intentaron cambiar el perfil del primer administrador en el foro, suprimir el primer administrador, o convertirle en un usuario normal. Se impidió ese intento de cambiar los datos del perfil y/o de los permisos del primer administrador. Esta lista puede ser limpiada solamente por el primer administrador en el foro.',
	'L_LISTOFADMINEDITUSERS' => 'Lista de los accesos bloqueados a la primera cuenta del administrador',
	'L_LISTOFADMINTEXT' => 'Ocurrió un acceso bloqueado correctamente',
	'L_DELETEMSG' => 'Borrar entradas',
	'L_DELETESUCMSG' => 'Las entradas han sido borradas correctamente',
	'L_ADMINEDITMSG' => 'Usted no tiene permiso para editar datos del perfil y/o permisos del primer administrador de este foro.<br /><br />Este intento de mal acceso malo, ha sido bloqueado y anotado convenientemente.',
	'use_thank' => 'Permitir el mensaje de gracias',
	'Default_avatar' => 'Fijar como avatar por defecto',
	'Default_avatar_explain' => 'Esto permite dar un avatar por defecto a usuarios que todavía no han seleccionado uno.  Fije el avatar por defecto para los invitados y los usuarios, y entonces seleccione el avatar que quiera mostrar para los usuarios registrados, los invitados, robots, o ninguno.',
	'Default_avatar_guests' => 'Invitados',
	'Default_avatar_users' => 'Usuarios',
	'Default_avatar_both' => 'Robots',
	'Default_avatar_none' => 'Ninguno',

// Start Optimize Database
	'Optimize' => 'Optimizar',
	'Optimize_explain' => 'Aquí es posible optimizar los datos de las tablas de la base de datos. Puede eliminar las partes de datos que contienen espacios vacíos.<br />Esta operación hace que su base de datos tenga un mejor tiempo de ejecución.',
	'Optimize_DB' => 'Optimizar base de datos',
	'Optimize_Enable_cron' => 'Habilitar cron',
	'Optimize_Cron_every' => 'Cron cada',
	'Optimize_Cron_every_explain' => 'Tenga en cuenta que necesita activar el <b>PHP cron global</b> en la <b>configuración &raquo; Icy Phoenix &raquo; cron</b>',
	'Optimize_month' => 'Mes',
	'Optimize_2weeks' => '2 semanas',
	'Optimize_week' => 'Semana',
	'Optimize_3days' => '3 días',
	'Optimize_day' => 'Día',
	'Optimize_6hours' => '6 horas',
	'Optimize_hour' => 'Hora',
	'Optimize_30minutes' => '30 minutos',
	'Optimize_20seconds' => '20 segundos (solo para testear)',
	'Optimize_Current_time' => 'Tiempo actual',
	'Optimize_Next_cron_action' => 'Acción del siguiente cron',
	'Optimize_Performed_Cron' => 'Cron realizado',
	'Optimize_Show_not_optimized' => 'Mostrar sólo las tablas no optimizadas',
	'Optimize_Show_begin_for' => 'Mostrar solo las tablas que comienzan por',
	'Optimize_Configure' => 'Configurar',
	'Optimize_Table' => 'Tabla',
	'Optimize_Record' => 'Record',
	'Optimize_Type' => 'Tipo',
	'Optimize_Size' => 'Tamaño',
	'Optimize_Status' => 'Estado',
	'Optimize_CheckAll' => 'Marcar todas',
	'Optimize_UncheckAll' => 'Desmarcar todas',
	'Optimize_InvertChecked' => 'Invertir marcas',
	'Optimize_return' => 'Pulse %saquí%s para volver a optimizar base de datos',
	'Optimize_success' => 'La base de datos ha sido optimizada satisfactoriamente',
	'Optimize_NoTableChecked' => '<b>No</b> hay tablas marcadas',

// End Optimize Database
// Start add - Global announcement MOD
	'Globalannounce' => 'Anuncio global',
// End add - Global announcement MOD

// google bot detector by pukapuka
	'Detector' => 'Detector de robots de Google',
	'Detector_Explain' => '',
	'Detector_ID' => '#',
	'Detector_Time' => 'Fecha',
	'Detector_Url' => 'URL',
	'Detector_Clear' => 'Limpiar todo',
	'Detector_No_Bot' => 'No se detectó robot',
	'Detector_Cleared' => 'Información limpiada con éxito',
	'Click_Return_Detector' => 'Pulse %saquí%s para volver al detector',

// added to Auto group mod
	'group_count' => 'Número de mensajes requeridos',
	'group_count_max' => 'Número máximo de mensajes',
	'group_count_updated' => 'Hay %d usuario(s) en este grupo',
	'Group_count_enable' => 'Añadir usuarios automáticamente según sus envíos',
	'Group_count_update' => 'Añadir/actualizar nuevos usuarios',
	'Group_count_delete' => 'Borrar/actualizar otros usuarios',
	'User_allow_ag' => 'Activar autogrupo',
	'group_count_explain' => 'Cuando los usuarios han enviado más mensajes que este número, <i>en cualquier foro</i>, serán añadidos a este grupo de usuarios.<br />Pero sólo si "' . $lang['Group_count_enable'] . '" está habilitado',

// Start add - Bin Mod
	'Bin_forum' => 'Foro de papelera',
	'Bin_forum_explain' => 'Rellene el ID del foro para los temas movidos a la papelera. El valor 0 desactiva esta característica. Debe editar los permisos del foro para permitir o no ver/enviar/responder... a los usuarios o prohibirles el acceso a este foro.',
// End add - Bin Mod

// Begin Quick Title Edition Mod 1.0.0 by Xavier Olive.
	'Title_infos' => 'Administración de edición de título rápido',
	'Must_select_title' => 'Debe seleccionar un título rápido',
	'Title_updated' => 'Título rápido actualizado',
	'Title_added' => 'Título rápido añadido',
	'Click_return_titleadmin' => 'Pulse %saquí%s para volver a administración de edición de título rápido',
	'Title_removed' => 'Título rápido borrado',
	'Quick_title_explain' => 'Puede crear un pequeño texto para agregar como asunto de un tema con un solo botón o clic.</br>Si desea que se muestre el nombre de la persona que realizó el tema o modificación de éste, ponga el %mod% donde usted quiera. Por ejemplo, [Link OK | Autorizado por %mod%] se mostrará como [Link OK |Autorizado por nombre del moderador]. Puede hacer exactamente lo mismo con la fecha, colocando el %date% donde quiera.',
	'Title_head' => 'Título rápido: título',
	'Title_auth' => 'Permisos',
	'Administrator' => 'Administrador',
	'Topic_poster' => 'Autor del tema',
	'Add_new_title_info' => 'Añadir nuevo título rápido',
	'Title_perm_info' => 'Permisos',
	'Title_perm_info_explain' => 'Los usuarios con estos niveles podrán utilizar el MOD de título rápido',
	'Title_info' => 'Título rápido:',
// End Quick Title Edition Mod 1.0.0 by Xavier Olive.

// Limit Image Width MOD
	'Available' => 'Disponible',
	'Unavailable' => 'No disponible',
	'LIW_title' => 'MOD de límite de achura de imagen',
	'LIW_admin_explain' => 'Esta página permitirá que cambie el MOD de límite de anchura de imagen. Encenderlo (On) o apagarlo (Off), así como poner la anchura máxima para cada imagen enviada a su foro. Si ve que la tabla SQL que tiene guardadas las dimensiones de las imágenes y de todas las imágenes enviadas al foro y aún así éstas se siguen viendo demasiado grandes, puede vaciar el caché pulsando en el botón \'Vaciar tabla de caché\'<br /><br />También puede comprobar si es posible cambiar en su servidor este MOD del límite del ancho de imagen en el botón \'Comprobar compatibilidad\'',
	'LIW_compatibility_checks' => 'Comprobar compatibilidad',
	'LIW_mod_config' => 'Configuración del MOD',

	'LIW_config_updated' => 'Configuración del MOD de límite de achura de imagen actualizada',
	'LIW_cache_emptied' => 'La tabla caché ha sido vaciada correctamente',
	'LIW_click_return_config' => 'Pulse %saquí%s para volver a la página de configuración del MOD de límite de anchura de imagen',

	'LIW_getimagesize' => 'Soporte URL getimagesize()',
	'LIW_getimagesize_explain' => 'Disponible en PHP 4.0.5',
	'LIW_getimagesize_available' => 'El MOD puede recuperar dimensiones de la imagen',
	'LIW_getimagesize_unavailable' => 'El MOD no puede comprobar si una imagen es o no demasiado grande. Por lo tanto, <i>ninguna</i> imagen enviada se va a clasificar según el tamaño',

	'LIW_urlaware' => 'Envoltorio (wrappers) URL-aware fopen',
	'LIW_urlaware_explain' => 'Fijar allow_url_fopen como "sí" en su php.ini',
	'LIW_urlaware_available' => 'El MOD puede generar un fingerprint para las imágenes en el caché de dimensiones de imagen',
	'LIW_urlaware_unavailable' => 'El MOD no puede generar un fingerprint en el archivo, y por lo tanto no es posible ir a caché de dimensiones de imagen',

	'LIW_openssl' => 'Extensión openSSL cargada',
	'LIW_openssl_explain' => 'Cargue la extensión openssl.dll en su php.ini',
	'LIW_openssl_available' => 'El MOD puede recuperar dimensiones de https:// imágenes pueden estar en caché',
	'LIW_openssl_unavailable' => 'El MOD no puede recuperar dimensiones de https:// imágenes pueden estar en caché',

	'LIW_enable' => 'Ajustar tamaño de las imágenes en los mensajes',
	'LIW_enable_explain' => 'Fijar en %s para permitir que el MOD reajuste las imágenes en los mensajes', // Set to 'Yes'] to ....
	'LIW_sig_enable' => 'Ajustar tamaño de las imágenes en las firmas',
	'LIW_sig_enable_explain' => 'Fijar en %s para permitir que el MOD reajuste las imágenes en las firmas',
	'LIW_attach_enable' => 'Ajustar tamaño de las imágenes en las imágenes adjuntas',
	'LIW_attach_enable_explain' => 'Fijar en %s para permitir que el MOD reajuste las imágenes adjuntadas con el MOD de adjuntos (Attachment MOD)',
	'LIW_max_width' => 'Anchura máxima de la imagen',
	'LIW_max_width_explain' => 'Especifique la anchura máxima (píxels) de una imagen enviada usando las etiquetas [img]',
	'LIW_empty_cache' => 'Caché de dimensiones de imagen vacio',
	'LIW_empty_cache_explain' => 'Su tabla de caché actualmente contiene <b>%s</b> guardadas', // Your cache table currently contains <b>312</b> records
	'LIW_empty_cache_note' => 'Observe: esto vaciará la tabla de caché y hará que el MOD tenga que crear todas las dimensiones de la imagen otra vez, lo que podría dar lugar a una retardo temporal al cargar un tema',
	'LIW_empty_cache_button' => 'Vaciar tabla de caché',

// News
	'xs_news_settings' => 'Ajustes de noticias Icy Phoenix',
	'xs_news_show' => '¿Mostrar banner de noticias?',
	'xs_news_show_ticker' => '¿Mostrar entrada de noticias?',
	'xs_news_show_ticker_explain' => 'Esto es un interruptor principal; si fija esto en \'No\' no podrá ajustar individualmente ninguna entrada; si lo fija como \'Sí\' entonces el estado de mostrar las entradas individuales puede ser controlado en sus ajustes.',
	'xs_news_show_ticker_subtitle' => '¿Mostrar subtítulo de entrada?',
	'xs_news_show_ticker_subtitle_explain' => 'Ajuste esto como "sí" para mostrar \'Entrada de noticia\' sobre las entradas de noticias.',
	'xs_news_show_news_subtitle' => '¿Mostrar subtítulo de noticias?',
	'xs_news_show_news_subtitle_explain' => 'Ajuste esto como "sí" para mostrar \'Artículo de noticia\' sobre los artículos de noticias.',
	'xs_news_dateformat' => 'Formato de fecha',
	'xs_news_dateformat_helper' => 'Usando este formato: %s',

// Bantron Mod : Begin
	'Bantron' => 'Administración baneos',
	'BM_Title' => 'Administración baneos',
	'BM_Explain' => 'Desde esta página puede añadir, editar, ver y quitar los baneos de su foro.',

	'BM_Show_bans_by' => 'Mostrar baneos por',
	'BM_All' => 'Todo',
	'BM_Show' => 'Mostrar',

	'BM_IP' => 'IP',
	'BM_Last_visit' => 'Última visita',
	'BM_Banned' => 'Baneado',
	'BM_Expires' => 'Termina',
	'BM_By' => 'Por',
	'BM_Reasons' => 'Razones',

	'BM_Add_a_new_ban' => 'Añadir nuevo baneo',
	'BM_Delete_selected_bans' => 'Borrar los baneos seleccionados',

	'BM_Private_reason' => 'Razón privada',
	'BM_Private_reason_explain' => 'Esta razón de baneo incorpora nombres de usuario, e-mails, y/o dirección IP. Se guarda para los propósitos de la nota solamente en la administración.',

	'BM_Public_reason' => 'Razón pública',
	'BM_Public_reason_explain' => 'Esta razón de baneo incorpora nombres de usuario, e-mails, y/o dirección IP. Se muestra al usuario(s) baneado(s) cuando intenta acceder al foro.',
	'BM_Generic_reason' => 'Razón genérica',
	'BM_Mirror_private_reason' => 'Razón privada de espejo',
	'BM_Other' => 'Otra',

	'BM_Expire_time' => 'Tiempo de finalización',
	'BM_Expire_time_explain' => 'Especificando una fecha, en lo referente a la fecha actual o a una fecha absoluta, el baneo será desactivado después de ese tiempo.',
	'BM_Never' => 'Nunca',
	'BM_After_specified_length_of_time' => 'Después de que pase el tiempo especificado',
	'BM_Minutes' => 'Minuto(s)',
	'BM_Hours' => 'Hora(s)',
	'BM_Days' => 'Día(s)',
	'BM_Weeks' => 'Semana(s)',
	'BM_Months' => 'Mes(es)',
	'BM_Years' => 'Año(s)',
	'BM_After_specified_date' => 'Otra fecha especificada',
	'BM_AM' => 'AM',
	'BM_PM' => 'PM',
	'BM_24_hour' => '24-Horas',

	'BM_Ban_reasons' => 'Razones del baneo',
// Bantron Mod : End

	'board_disable_message' => 'Deshabilitar el mensaje por defecto por desactivación del foro.',
	'board_disable_message_texte' => 'Mensaje que se mostrará cuando el foro este desactivado',

// Start Edit Notes MOD
	'Edit_notes_settings' => 'Valores de notas de edición',
	'Edit_notes_enable' => 'Habilitar notas de edición',
	'Edit_notes_enable_explain' => 'Habilitar/deshabilitar notas de edición en el foro.',
	'Max_edit_notes' => 'Notas de edición máximas',
	'Max_edit_notes_explain' => 'Fija el número máximo de notas de edición por mensaje.',
	'Edit_notes_permissions' => 'Permisos de notas de edición',
	'Edit_notes_permissions_explain' => 'Fija qué tipo de usuarios podrán usar las notas de edición.',
	'Edit_notes_admin' => 'Sólo administradores',
	'Edit_notes_staff' => 'Equipo (admins y mods)',
	'Edit_notes_reg' => 'Usuarios registrados (admins y mods también)',
	'Edit_notes_all' => 'Todos los usuarios (invitados, usuarios, admins y mods)',
// End Edit Notes MOD

// BEGIN Disable Registration MOD
	'registration_status' => 'Deshabilitar registros',
	'registration_status_explain' => 'Esto desactiva los nuevos registros en su foro.',
	'registration_closed' => 'Razón por la que se cierran los registros',
	'registration_closed_explain' => 'Texto en el cual se explica el por qué se cierran los registros. Aparece cuando un usuario intenta registrarse. Deje esto en blanco para mostrar el texto por defecto.',
// END Disable Registration MOD

	'Gender_required' => 'Forzar a usuarios a especificar su sexo',

//admin user list mail
	'Usersname' => 'Nombre de usuarios',
	'Admin_Users_List_Mail_Title' => 'Lista de e-mails de usuarios',
	'Admin_Users_List_Mail_Explain' => 'Aquí esta la lista de e-mails de sus usuarios',

// Start add - Forum notification MOD
	'Forum_notify' => 'Permitir notificación de foro',
	'Forum_notify_enabled' => 'Permitir',
	'Forum_notify_disabled' => 'No permitir',
// End add - Forum notification MOD

	'Smilie_table_columns' => 'Columnas en la tabla de emoticonos',
	'Smilie_table_rows' => 'Filas en la tabla de emoticonos',
	'Smilie_window_columns' => 'Columnas en la ventana de emoticonos',
	'Smilie_window_rows' => 'Filas de la ventana de emoticonos',
	'Smilie_single_row' => 'Número de emoticonos en línea (Ex.: número de emoticonos en respuesta rápida)',

	'Auth_Rating' => 'Valoraciones',

// Gravatars
	'Enable_gravatars' => 'Habilitar gravatars',
	'Gravatar_rating' => 'Valoración máxima de gravatar',
	'Gravatar_rating_explain' => '<a href="http://www.gravatar.com/rating.php" target="_blank">Leer las líneas de guía de valoración</a> para mas información. Fijar en \'Ninguno\' para no tener restricciones.',
	'Gravatar_default_image' => 'Imagen por defecto de gravatar',
	'Gravatar_default_image_explain' => 'Si no se encuentra gravatar, el servidor cuando vuelve muestra esta imagen. La ruta a la imagen es relativa al directorio raíz de phpBB. Dejar en blanco si no se quiere mostrar ninguna imagen.',

// Admin Account Actions
	'Account_actions' => 'Acciones de cuenta',
	'Account_inactive_explain' => 'Aquí puede ver a todos los usuarios que estén inactivos y esperando activación. Puede activar o suprimir sus cuentas.<br />Después, podrá fijar sus permisos o corregir su perfil siguiendo los enlaces pertinentes.',
	'Account_active_explain' => 'Aquí puede ver a todos los usuarios que son usuarios activos. Puede desactivar sus cuentas o borrar estas cuentas.<br />Después, podrá fijar sus permisos o corregir su perfil siguiendo los enlaces pertinentes.',
	'Account_active' => 'usuarios activos',
	'Account_inactive' => 'usuarios inactivos',
	'Account_activate' => 'Activar los marcados',
	'Account_deactivate' => 'Desactivar los marcados',
	'Account_none' => 'No hay usuarios esperando activación.',
	'Account_total_user' => 'Cantidad de usuario: <b>%d</b> usuario',
	'Account_total_users' => 'Cantidad de usuarios: <b>%d</b> usuarios',
	'Account_activation' => 'Método de activación',
	'Account_awaits' => 'Esperando activación desde',
	'Account_registered' => 'Registrado desde',
	'Account_delete_users' => '¿Está seguro de querer borrar a estos usuarios?',
	'Account_delete_user' => '¿Está seguro de querer borrar a este usuario?',
	'Account_sort_letter' => 'Mostrar sólo cuentas creadas con',
	'Account_others' => 'otros',
	'Account_all' => 'Todo',
	'Account_year' => 'año',
	'Account_years' => 'años',
	'Account_week' => 'semana',
	'Account_weeks' => 'semanas',
	'Account_day' => 'día',
	'Account_days' => 'días',
	'Account_hour' => 'hora',
	'Account_hours' => 'horas',
	'Account_user_activated' => 'El usuario ha sido activado.',
	'Account_users_activated' => 'Los usuarios han sido activados.',
	'Account_user_deactivated' => 'El usuario ha sido desactivado.',
	'Account_users_deactivated' => 'Los usuarios han sido desactivados.',
	'Account_user_deleted' => 'El usuario ha sido borrado.',
	'Account_users_deleted' => 'Los usuarios han sido borrados.',
	'Account_activated' => 'Activación de cuenta',
	'Account_activated_text' => 'Su cuenta ha sido activada',
	'Account_deactivated' => 'Desactivación de cuenta',
	'Account_deactivated_text' => 'Su cuenta ha sido desactivada',
	'Account_deleted' => 'Borrado de cuenta',
	'Account_deleted_text' => 'Su cuenta ha sido borrada',
	'Account_notification' => 'Notificación enviada por correo.',

// Acronyms
	'Acronyms_title' => 'Administración de siglas (Acronym)',
	'Acronyms_explain' => 'Desde este panel de control puede añadir, editar, y quitar las siglas que se mostrarán automáticamente en los mensajes de su foro.',
	'Acronym' => 'Sigla',
	'Acronyms' => 'Siglas',
	'Edit_acronym' => 'Editar sigla',
	'Description' => 'Descripción',
	'Add_new_acronym' => 'Añadir nueva sigla',
	'Update_acronym' => 'Actualizar sigla',

	'Must_enter_acronym' => 'Debe introducir la sigla y su descripción',
	'No_acronym_selected' => 'No ha seleccionado una sigla para editar',

	'Acronym_updated' => 'La sigla seleccionada ha sido actualizada correctamente',
	'Acronym_added' => 'La sigla ha sido añadida correctamente',
	'Acronym_removed' => 'La sigla ha sido quitada correctamente',

	'Click_return_acronymadmin' => 'Pulse %saquí%s para volver a administración de siglas',
	'Prune_shouts' => 'Limpiar automáticamente cuadro de charla',
	'Prune_shouts_explain' => 'Número de días antes de borrar los mensajes del cuadro de charla. Si el valor es 0, la limpieza será deshabilitada',

	'MOD_OS_ForumRules' => 'Normas del foro con estilo Olympus',
	'Forum_rules' => 'Normas del foro',
	'Rules_display_title' => '¿Mostrar título en el cuadro de normas del foro?',
	'Rules_custom_title' => 'Título actual',
	'Rules_appear_in' => 'Estas normas del foro aparecen mientras está...',
	'Rules_in_viewforum' => 'Viendo el foro',
	'Rules_in_viewtopic' => 'Viendo temas en este foro',
	'Rules_in_posting' => 'Enviando/respondiendo en este foro',

	'Php_Info_Explain' => 'Esta página muestra una lista de información sobre la versión de PHP instalada en su servidor. Incluye detalles de los módulos cargados, variables disponibles y ajustes por defecto. Esta información puede ser muy útil para diagnosticar problemas. Por favor, tenga en cuenta que algunas compañías de alojamiento (hosting) limitan, por razones de seguridad, qué información puede mostrarse aquí. Queda usted avisado de que no debe dar a otros ningún detalle de esta página excepto cuando solicite soporte y se lo pida algún miembro del equipo de los foros de soporte.',

	'IcyPhoenix_Main' => 'Página de inicio de Icy Phoenix',
	'IcyPhoenix_Download' => 'Descarga de Icy Phoenix',
	'IcyPhoenix_Code_Changes' => 'MOD de cambios de código',
	'IcyPhoenix_Updates' => 'Actualización de Icy Phoenix',
	'PhpBB_Upgrade' => 'Mejorar phpBB',
	'Header_Welcome' => 'Bienvenido al panel de control del administrador de Icy Phoenix',

	'Prune_users' => 'Limpiar (Prune) usuarios',
	'Prune_Overview' => 'Descripción de la limpieza (Pruning)',
	'Prune_title_explain' => 'Aquí puede administrar los ajustes de limpieza (Prune) de cualquier foro.',
	'Prune_forum' => 'Foro',
	'Prune_active' => 'Limpieza (Pruning) activa',
	'Prune_freq' => 'Quitar todo',
	'Prune_check' => 'Marcar todo',
	'Prune_days' => 'Días',
	'Prune_days_explain' => 'Quitar temas en los que no se ha posteado.',
	'Click_return_admin_po' => 'Pulse %saquí%s para volver a la limpieza de foros (Pruning)',
	'Prune_update' => 'Los ajustes de limpieza (pruning) han sido actualizados correctamente',

	'Admin_notepad_title' => 'Libreta',
	'Admin_notepad_explain' => 'Desde este panel, el administrador puede dejar sus notas en la libreta.',
	'Allow_generator' => 'Habilitar generador de avatar',
	'Avatar_generator_template_path' => 'Ruta de plantilla del generador de avatar',
	'Avatar_generator_template_path_explain' => 'Ruta del directorio de las imágenes en su phpBB, por ejemplo, images/avatars/generator_templates',

// Start Autolinks Mod
	'Autolink_first' => 'Autoenlace de cada palabra clave por mensaje',

	'Autolinks_title' => 'Autoenlaces',
	'Autolinks_explain' => 'Desde este panel de control, puede añadir, editar y borrar palabras clave, que serán substituidas automáticamente por la URL en los mensajes. Si la URL que introduce es interna al foro/portal, se agregará la indentificación de sesión en el enlace.<br /><br />Por ejemplo, si se encuentra la <b>Palabra clave</b> en el mensaje, es reemplazada por lo siguiente,<br /><br />&lt;a href="<b>URL</b>" title="<b>Comentario</b>" style="<b>Estilo</b>"&gt;<b>Texto</b>&lt;/a&gt;',
	'links_keyword' => 'Palabra clave',
	'links_title' => 'Texto',
	'links_url' => 'URL',
	'links_comment' => 'Comentario',
	'links_style' => 'Estilo',
	'links_forum' => 'Foro para autoenlace',
	'links_forum2' => 'Foro',
	'links_internal' => 'Interno',
	'Autolinks_add' => 'Añadir un autoenlace',
	'Add_keyword' => 'Añadir autoenlace',
	'Autolinks_edit' => 'Editar un autoenlace',
	'Edit_keyword' => 'Editar autoenlace',
// 'Delete_link' => 'Marcar cuadro para borrar este autoenlace.',

	'Select_all_forums' => 'Todos los foros',
	'Autolink_added' => 'Autoenlace añadido.',
	'Autolink_updated' => 'Autoenlace actualizado.',
	'Autolink_removed' => 'Autoenlace borrado.',
	'No_autolink_selected' => 'No ha seleccionado un autoenlace para borrar.',
	'No_autolinks' => 'No hay autoenlaces en la base de datos.',
	'Must_enter_autolink' => 'Debe introducir la palabra clave, enlace de texto y la URL.',
	'Click_return_autolinkadmin' => 'Pulse %saquí%s para volver a administración de autoenlaces',
// End Autolinks Mod

// XS BUILD 030

// Login attempts configuration
	'Max_login_attempts' => 'Intentos de identificación permitidos',
	'Max_login_attempts_explain' => 'El número de intentos de identificación permitido en su foro.',
	'Login_reset_time' => 'Tiempo de identificación cerrado',
	'Login_reset_time_explain' => 'Tiempo en minutos que el usuario tiene que esperar hasta que se le permita de nuevo la identificación después de exceder el número de intentos permitidos de conexión o identificación.',

// XS BUILD 035
// Smilies Order
	'position_new_smilies' => '¿Se deben agregar los nuevos emoticonos antes o después de los emoticonos existentes?',
	'smiley_change_position' => 'Cambiar la ubicación al insertar',
	'before' => 'Antes',
	'after' => 'Después',
	'Move_top' => 'Enviar arriba',
	'Move_end' => 'Enviar abajo',

// XS BUILD 037
// Pages Auth
	'auth_view_title' => 'Autorización para ver páginas',
	'auth_view_portal' => 'Página de inicio',
	'auth_view_forum' => 'Foro',
	'auth_view_viewforum' => 'Ver foro',
	'auth_view_viewtopic' => 'Ver tema',
	'auth_view_faq' => 'FAQ',
	'auth_view_memberlist' => 'Lista de usuarios',
	'auth_view_groupcp' => 'Grupos de usuarios',
	'auth_view_profile' => 'Perfil',
	'auth_view_search' => 'Buscar',
	'auth_view_album' => 'Álbum',
	'auth_view_links' => 'Enlaces',
	'auth_view_calendar' => 'Calendario',
	'auth_view_attachments' => 'Adjuntos',
	'auth_view_download' => 'Descargas',
	'auth_view_pic_upload' => 'Imágenes subidas',
	'auth_view_kb' => 'Biblioteca',
	'auth_view_ranks' => 'Rangos',
	'auth_view_statistics' => 'Estadísticas',
	'auth_view_recent' => 'Temas recientes',
	'auth_view_referrers' => 'Referidos',
	'auth_view_rules' => 'Normas',
	'auth_view_site_hist' => 'Historia del sitio',
	'auth_view_shoutbox' => 'Cuadro de charla',
	'auth_view_viewonline' => 'Ver conectados',
	'auth_view_contact_us' => 'Contácteme',
	'auth_view_ajax_chat' => 'Chat',
	'auth_view_ajax_chat_archive' => 'Archivo del chat',
	'auth_view_custom_pages' => 'Páginas actuales',

// Begin Yahoo Submit Your Site MOD by www.pentapenguin.com
	'Yahoo_search' => 'Busqueda en Yahoo',
	'Yahoo_search_settings' => 'Ajustes de búsqueda en Yahoo',
	'Yahoo_search_settings_explain' => 'Aquí puede configurar ajustes para el MOD de enviar su sitio a Yahoo. Para mas información, por favor vea el <a href="http://submit.search.yahoo.com/free/request" target="_blank">Sitio web de Yahoo para enviar su sitio</a>.',
	'Yahoo_search_select_forums' => 'Seleccionar foros',
	'Yahoo_search_select_forums_explain' => 'Seleccione los foros a incluir en la lista. Puede seleccionar tantos foros como quiera, pulsando en cada nombre de foro mientras, a la vez, mantiene pulsada la tecla CTRL (Windows) o comando (Macintosh). Por defecto, todos los foros públicos visibles serán seleccionados.',
	'Yahoo_search_savepath' => 'Guardar ruta de la lista de URL',
	'Yahoo_search_savepath_explain' => 'Introduzca la ubicación donde quiere guardar la lista de URL. Introduzca la ruta relativa a la ruta de phpBB -- Por ejemplo, si quiere guardar el archivo en el directorio caché <b>www.tusitio.com/phpBB/cache/</b>, debe introducir <b>cache</b>. Recuerde que necesita el directorio CHMOD 777.',
	'Yahoo_search_additional_urls' => 'Introducir URLs adicionales',
	'Yahoo_search_additional_urls_explain' => 'Introduzca URLs adicionales que quiera que Yahoo vea, una por línea. Debe introducir la URL entera -- Por ejemplo, <b>http://www.tusitio.com/tupagina.html</b>.',
	'Yahoo_search_compress_file' => 'Comprimir la lista de URLs',
	'Yahoo_search_compress_file_explain' => 'Si elige SÍ en esta opción, la lista de URLs sera comprimida con gzip y el resultado será un archivo más pequeño, con un menor consumo de ancho de banda del robot de Yahoo. Este ajuste no funcionará si su servidor no soporta gzip.',
	'Yahoo_search_compression_level' => 'Nivel de compresión del archivo',
	'Yahoo_search_compression_level_explain' => 'Elija el nivel de compresión del archivo. 9 es el ajuste recomendado, a menos que encuentre problemas; en ese caso, debe bajar el valor.',
	'Yahoo_search_generate_file' => 'Generar archivo',
	'Yahoo_search_error_no_forums' => 'Error: no ha seleccionado foros. Vuelva atras y al menos seleccione un foro.',
	'Yahoo_search_error_no_gzip' => 'Error: está utilizando una versión de PHP antigua o su servidor no soporta gzip. Por favor, vuelva atrás y elija <b>No</b> en la opción <b>Comprimir la lista de URLs</b>.',
	'Yahoo_search_error_unopenable_file' => 'Error: no se puede abrir el archivo %s.',
	'Yahoo_search_error_unwritable_file' => 'Error: no se puede escribir en el archivo %s.',
	'Yahoo_search_error_unclosable_file' => 'Error: no se puede cerrar el archivo %s.',
	'Yahoo_search_error_update_sql' => 'Error: no se puede actualizar el campo: %s',
	'Yahoo_search_error_unknown_file_error' => 'Error: el archivo no se ha guardado por un error desconocido.',
	'Yahoo_search_file_done' => 'El archivo de la lista de URL ha finalizado su proceso. Por favor, copie la URL de abajo y péguela en el campo apropiado en Yahoo:<br /><b>%s</b>',
// Finish Yahoo Submit Your Site MOD by www.pentapenguin.com

// Bookmark Mod
	'Max_bookmarks_links' => 'Favoritos máximos enviados en TAG-Enlace',
	'Max_bookmarks_links_explain' => 'Número de favoritos máximos enviados en el TAG-Enlace al principio del documento. Esta información es usada, por ejemplo, en Mozilla. Introduzca 0 para desactivar esta función.',

	'Faq_manager' => 'Configuración FAQ',
	'Faq_Rules_manager' => 'Faq y normas',
	'board_rules' => 'Normas del foro',
	'board_faq' => 'FAQ del foro',
	'bbcode_faq' => 'FAQ de BBCode',
	'attachment_faq' => 'FAQ de adjuntos',
	'prillian_faq' => 'FAQ de prillian',
	'bid_faq' => 'FAQ de lista de colegas',


	'Account_active2' => 'Usuarios activos',
	'Account_inactive2' => 'Usuarios inactivos',

// Search Flood Control - added 2.0.20
	'Search_Flood_Interval' => 'Intervalo de flood en la búsqueda',
	'Search_Flood_Interval_explain' => 'Número de segundos que debe esperar un usuario entre las peticiones de búsqueda',
	'Confirm_delete_smiley' => '¿Está seguro de que quiere eliminar este emoticono?',
	'Confirm_delete_word' => '¿Está seguro de que quiere eliminar esta palabra censurada?',
	'Confirm_delete_rank' => '¿Está seguro de que quiere borrar este rango?',

// Custom Profile Fields MOD
	'custom_field_notice_admin' => 'Estos artículos han sido creados por usted u otro administrador. Para saber si hay más información, compruebe los artículos bajo los campos del perfil que dirigen en el navbar. Los artículos marcados con * son campos obligatorios. Artículos marcados con &dagger; se muestran sólo a los administradores.',

	'field_deleted' => 'Se ha suprimido el campo especificado',
	'double_check_delete' => '¿Está seguro de que desea suprimir permanentemente el campo del perfil "%s" de la base de datos?',

	'here' => 'Aquí',
	'new_field_link' => '<a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">%s</a>',
	'edit_field_link' => '<a href="' . append_sid($filename . '?mode=edit&amp;pfid=x') . '">%s</a>',
	'index_link' => '<a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">%s</a>',
	'field_exists' => 'Este campo ya existe.<br /><br />Puede intentar crear un <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">nuevo</a> campo en el perfil,<br /><br />o intentar <a href="' . append_sid($filename . '?mode=edit&amp;pfid=x') . '">editar</a> un campo existente.',
	'click_here_here' => 'Pulse <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">aquí</a> para añadir otro campo en el perfil,<br /><br />o click <a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">aquí</a> para volver al índice de administración.',
	'field_success' => 'Campo añadido correctamente!<br /><br />Pulse <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">aquí</a> para añadir otro campo al perfil,<br /><br />o click <a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">aquí</a> para volver al índice de administración.',
	'Custom_Profile' => 'Campos del perfil',
	'profile_field_created' => 'Campo del perfil creado',
	'profile_field_updated' => 'Campo del perfil actualizado',

	'add_field_title' => 'Añadir campos personalizados en el perfil',
	'edit_field_title' => 'Editar campos personalizados en el perfil',
	'add_field_explain' => 'Aquí puede crear los nuevos campos para que sus usuarios los añadan en sus perfiles.',
	'edit_field_explain' => 'Aquí puede editar campos que usted ha creado ya para que sus usuarios los añadan en sus perfiles.',

	'add_field_general' => 'Configuración general',
	'add_field_admin' => 'Configuración del administrador',
	'add_field_view' => 'Viendo configuración',
	'add_field_text_field' => 'Configuración de campos de texto',
	'add_field_text_area' => 'Configuración de área de texto',
	'add_field_radio_button' => 'Configuración del botón de radio',
	'add_field_checkbox' => 'Configuración checkbox ',

	'default_value' => 'Valores por defecto',
	'default_value_explain' => 'Este valor el es que quedará por defecto para este campo. Si un nuevo usuario no cambia este valor, es el que se mostrará. Si esto es un campo requerido, este es el valor que se fijará a todos los usuarios existentes.',
	'default_value_radio_explain' => 'Introduzca el nombre idéntico al escrito en el campo de valores disponibles.',
	'default_value_checkbox_explain' => 'Introduzca los valores por defecto seleccionados. Estos valores tienen marcados valores en los campos disponibles',
	'max_length' => 'Longitud máxima',
	'max_length_explain' => 'Esta es la longitud máxima para este campo.',
	'max_length_value' => 'Debe ser un número comprendido entre %d y %d.',
	'available_values' => 'Valores disponibles',
	'available_values_explain' => 'Ponga cada valor en su propia línea',

	'add_field_view_disclaimer' => 'Todos estos ajustes serán tratados como "no" si no se permite a los usuarios ver estos campos',

	'add_field_name' => 'Nombre del campo',
	'add_field_name_explain' => 'Introduzca el nombre que desea asociar a este campo.',
	'add_field_description' => 'Descripción del campo',
	'add_field_description_explain' => 'Introduzca la descripción que desea asociar a este campo. Será mostrado en pequeño debajo del nombre del campo, justo como está este texto.',
	'add_field_type' => 'Tipo de campo',
	'add_field_type_explain' => 'Seleccione el tipo de campos del perfil que desea añadir. Los ejemplos de cada tipo de campo se muestran en el extremo derecho.',
	'edit_field_type_explain' => 'Seleccione el tipo de campos del perfil que desea cambiar a este campo. Los ejemplos de cada tipo de campo se muestran en el extremo derecho.',
	'add_field_required' => 'Poner como obligatorio',
	'add_field_required_explain' => 'Si los campos están puestos como "Obligatorios", cualquier usuario que se registre luego <strong>debe</strong> marcarlo, y a todos los usuarios registrados les aparecerá el campo por defecto.', 
	'add_field_user_can_view' => 'Permitir a los usuario ver',
	'add_field_user_can_view_explain' => 'Si esta puesto como "sí", el usuario podrá ver y editar estos campos. Si esta puesto como "no", sólo los administradores podrán ver o corregir estos valores. También, si se fija como "sí" este campo puede no ser obligatorio.',
	'view_in_profile' => 'Visible en el perfil de usuario',
	'profile_locations_explain' => 'Estas opciones son para los campos que serán vistos en el perfil de usuario.',
	'contacts_column' => 'Columna de contactos',
	'about_column' => 'Sobre la columna',
	'view_in_memberlist' => 'Visible en la lista de usuarios', 
	'view_in_topic' => 'Visible en el tema', 
	'topic_locations_explain' => 'Estas opciones son para los campos que serán vistos en los mensajes del foro.',
	'author_column' => 'Sección del autor',
	'above' => 'Sobre ',
	'below' => 'Debajo ',

	'textarea' => 'Área de texto',
	'textarea_example' => 'Esto es un ejemplo de área de texto' . "\n" . 'Área texto.',
	'text_field' => 'Campo de texto',
	'text_field_example' => 'Esto es un ejemplo de campo de texto',
	'radio' => 'Botón de radio',
	'radio_example' => 'Esto es un ejemplo de botón de radio',
	'checkbox' => 'Checkbox',
	'checkbox_example' => 'Esto es un ejemplo de checkbox',

	'profile_field_list' => 'Sus campos personalizados del perfil',
	'profile_field_list_explain' => 'Estos son todos los campos personalizados que usted ha creado para su foro, con enlaces para editar o borrar.',
	'profile_field_id' => 'ID #',
	'profile_field_name' => 'Nombre del campo',
	'profile_field_action' => 'Acción',
	'no_profile_fields_exist' => 'No existen campos personalizados en el perfil.',

	'enter_a_name' => '<strong>Debe</strong> poner un nombre. <br /><br />Pulse volver e inténtelo de nuevo',
// END Custom Profile Fields MOD

	'Add' => 'Añadir',
	'split_global_announce' => 'Separar anuncios globales',
	'split_announce' => 'Separar anuncios',
	'split_sticky' => 'Separar notas',
	'split_topic_split' => 'Separar temas',
	'Announce_settings' => 'Ajustes de anuncios',
	'Split_settings' => 'Ajustes de separación',
	'Server_Cookies' => 'Configuraciones servidor',
	'Disable_Registration_IP_Check' => 'Desactivar el rastreo de la lista negra pública de IP durante el registro.',
	'Disable_Registration_IP_Check_Explain' => 'Comprueba cada dirección IP durante el registro si no esta desactivado. Si la IP encontrada está en la lista negra, el registro será bloqueado. Esto puede dar lugar al bloqueo accidental de usuarios correctos.',
	'Config_explain2' => 'El formulario de abajo permitirá modificar opciones del calendario y de los subforos. Puede cambiar la apariencia y ajustes.',
	'Forum_postcount' => 'Cantidad de mensajes de usuarios',
	'Use_Captcha' => 'Usar CAPTCHA',
	'Use_Captcha_Explain' => 'Si lo fija como SÍ, el código de confirmación avanzado se generará. Si lo fija como NO, se genera el código de activación estándar de phpBB.',
	'Sync_Pics_Count' => 'Pulsando en <b>SÍ</b>, el contador de imágenes de todos los usuarios será sincronizado.',    
	'Pics_Count_Synchronized' => 'Cantidad de imágenes de los usuarios sincronizada correctamente',    
	'Pics_Count_Not_Synchronized' => 'Cantidad de imágenes de los usuarios no sincronizada correctamente',   

// IP - BUILD 001
	'Enable_Digests' => 'Activar resúmenes',
	'Enable_Digests_PHPCron' => 'Activar resúmenes PHP cron',
	'Enable_Digests_PHPCron_Explain' => 'Esta característica activará un emulador de PHP cron que enviará e-mails una vez cada hora. Pero como está basado en el emulador de PHP es posible que no se ejecute correctamente, por lo que puede ser que a veces no se envíen los correos. Si puede activar el cron en su servidor, utilice el cron en lugar de esta opción.',

// Ajax Shoutbox - BEGIN
	'Shoutbox_config' => 'Configuración chat ajax',
	'Shout_read_only' => 'Solo leer',
	'Displayed_shouts' => 'Comentarios visibles',
	'Displayed_shouts_explain' => 'El número de comentarios que se verán en el chat ajax cuando este se cargue.<br /><i>0 para cargar todos los comentarios.</i>',
	'Stored_shouts' => 'Comentarios guardados',
	'Stored_shouts_explain' => 'El número de comentarios que se guardarán en la base de datos.<br />Este valor ha de ser igual o mayor que el número de comentarios visibles.<br /><i>0 para guardar todos los comentarios.</i>',
	'Shout_guest_allowed' => 'Permiso para invitados',
	'Shoutbox_flood' => 'Intervalo de flood',
	'Shoutbox_flood_explain' => 'Número de segundos que el usuario ha de esperar para enviar otro comentario.',
	'Shoutbox_refreshtime' => 'Tiempo de actualización',
	'Shoutbox_refresh_explain' => 'Tiempo en milisegundos que el chat ajax tardará en leer los nuevos mensajes.<br /><i>Este valor tiene que estar sobre los 1000 milisegundos.</i>',
// Ajax Shoutbox - END

/* lang_postcount.php - BEGIN */
	'Postcounts' => 'Administración de cantidad de mensajes',	
	'Post_count_explain' => 'Desde aquí puede editar la cantidad de mensajes de un usuario.',
	'Modify_post_counts' => 'Modificar contador de mensajes',
	'Post_count_changed' => 'Ha editado la cantidad de mensajes a este usuario',
	'Click_return_posts_config' => 'Pulse %saquí%s para volver a la configuración de cantidad de mensajes',
	'Modify_post_count' => 'Modificar contador de mensajes',
	'Edit_post_count' => 'Editar la cantidad de mensajes de <b>%s</b>',
	'Post_count' => 'Número de mensajes',
/* lang_postcount.php - END */

/* lang_megamail.php - BEGIN */
	'Megamail_Explain' => 'Aquí puede enviar un mensaje de correo a todos los usuarios, o a todos los usuarios de un grupo específico. Para hacer esto, un correo se enviará a la dirección del administrador, con una copia oculta para todos los receptores. <br />Este script modificado enviará los mensajes de correo en varias veces para evitar la sobrecarga del servidor.  El estado de correo masivo será guardado en la base de datos. Puede cerrar la ventana cuando desee pausar el envío de correo masivo (los correos actuales serán enviados), y, luego, continuar más adelante desde donde lo dejó.<br /><b>Si los correos HTML están activados, deberá escribir los correos utilizando el código HTML, insertando &lt;br /&gt; para saltar de línea.</b>',
	'megamail_inactive_users' => 'Usuarios que no nos han visitado en los últimos {DAYS} días',
	'megamail_header' => 'Sus sesiones de correo',
	'megamail_id' => 'ID=Correo',
	'megamail_batchstart' => 'Procesado',
	'megamail_batchsize' => 'Correos',
	'megamail_batchwait' => 'Pausa',
	'megamail_created_message' => 'El correo masivo ha sido guardado en la base de datos.<br /><br/>Para comenzar a enviar pulse %saquí%s o espere a que refresque el sistema...',
	'megamail_send_message' => 'El proceso actual (%s - %s) ha sido enviado.<br /><br/>Para continuar enviando pulse %saquí%s o espere a que refresque el sistema...',
	'megamail_status' => 'Estado',
	'megamail_proceed' => '%sProceder%s',
	'megamail_done' => 'HECHO',
	'megamail_none' => 'No se encontró ningún proceso.',
	'megamail_delete_confirm' => '¿Esta seguro que quieres eliminar este correo?',
	'megamail_deleted' => 'Correo eliminado correctamente',
	'megamail_click_return' => 'Pulse %saquí%s para volver al e-mail masivo/MP',
/* lang_megamail.php - END */

/* lang_admin_voting.php - BEGIN */
	'Admin_Vote_Explain' => 'Resultados de encuestas (quién ha votado y qué ha votado).',
	'Admin_Vote_Title' => 'Administración de encuestas',
	'Vote_id' => '#',
	'Poll_topic' => 'Tema de encuesta',
	'Vote_username' => 'Votante(s)',
	'Vote_end_date' => 'Duración del voto',
	'Sort_vote_id' => 'Número de encuesta',
	'Sort_poll_topic' => 'Tema de encuesta',
	'Sort_vote_start' => 'Fecha de inicio',
	'Submit' => 'Enviar',
	'Select_sort_field' => 'Seleccione la clase de campo',
	'Sort_ascending' => 'Ascendente',
	'Sort_descending' => 'Descendente',
/* lang_admin_voting.php - END */

/* lang_admin_gd_info.php - BEGIN */
	'GD_Title' => 'Información GD',
	'NO_GD' => 'No GD',
	'GD_Description' => 'Especificaciones de su librería GD',
	'GD_Freetype_Support' => 'Soporte fuentes freetype:',
	'GD_Freetype_Linkage' => 'Enlace tipo freetype:',
	'GD_T1lib_Support' => 'Soporte t1lib:',
	'GD_Gif_Read_Support' => 'Soporte de lectura gif:',
	'GD_Gif_Create_Support' => 'Soporte de creacion gif:',
	'GD_Jpg_Support' => 'Soporte jpg/jpeg:',
	'GD_Png_Support' => 'Soporte png:',
	'GD_Wbmp_Support' => 'Soporte WBMP:',
	'GD_XBM_Support' => 'Soporte XBM:',
	'GD_Jis_Mapped_Support' => 'Soporte fuente japonesa:',
	'GD_True' => 'Sí',
	'GD_False' => 'No',
/* lang_admin_gd_info.php - END */

/* lang_admin_captcha.php - BEGIN */
	'VC_Captcha_Config' => 'Configuración CAPTCHA',
	'captcha_config_explain' => 'Aquí puede escoger cómo se verá la imagen que se mostrará al activar la confirmación visual en el registro .',
	'VC_active' => 'Confirmación visual activa',
	'VC_inactive' => 'Confirmación visual no activa',
	'background_configs' => 'Configuración del fondo',
	'Click_return_captcha_config' => 'Pulse %saquí%s para volver a la configuración de CAPTCHA',

	'CAPTCHA_width' => 'CAPTCHA ancho',
	'CAPTCHA_height' => 'CAPTCHA alto',
	'background_color' => 'Color de fondo',
	'background_color_explain' => 'Puesto en hexadecimal (eg. #0000FF para azul).',
	'pre_letters' => 'Número de letras a ocultar',
	'pre_letters_explain' => '',
	'great_pre_letters' => 'Aumento de letras a ocultar',
	'great_pre_letters_explain' => '',
	'Random' => 'Aleatorio',
	'random_font_per_letter' => 'Fuente de letra aleatoria',
	'random_font_per_letter_explain' => 'Cada letra usa una fuente aleatoria.',

	'back_chess' => 'Muestra de cuadrados',
	'back_chess_explain' => 'Llene el fondo completo con 16 rectángulos.',
	'back_ellipses' => 'Elipses',
	'back_arcs' => 'Líneas curvas',
	'back_lines' => 'Líneas',
	'back_image' => 'Imagen de fondo',
	'back_image_explain' => '(Esta función no está integrada)',

	'foreground_lattice' => 'Rejas de primer plano',
	'foreground_lattice_explain' => '(ancho x alto)<br />Genera unas rejas en CAPTCHA',
	'foreground_lattice_color' => 'Color de las rejas',
	'foreground_lattice_color_explain' => 'Indicación en hexadecimal (ex. #0000FF es azul).',
	'gammacorrect' => 'Corrección de contraste',
	'gammacorrect_explain' => '(0 = off)<br />NOTA: ¡¡Los cambios influyen en la legilibilidad de CAPTCHA!!',
	'generate_jpeg' => 'Formato de imagen',
	'generate_jpeg_explain' => 'El formato JPEG tiene una compresión más alta que el png y tiene, con el cambio de la compresión (máximo del 95%), una influencia directa en la legibilidad del CAPTCHA.',
	'generate_jpeg_quality' => 'Calidad',
/* lang_admin_captcha.php - END */

/* lang_admin_topic_shadow.php - BEGIN */
	'Del_Before_Date' => 'Eliminar todos los temas sombreados anteriores a %s<br />', // %s = insertion of date
	'Deleted_Topic' => 'Tema sombreado eliminado %s<br />', // %s = topic name
	'Affected_Rows' => '%d entradas conocidas fueron afectadas<br />', // %d = affected rows (not avail with all databases!)
	'Delete_From_Date' => 'Todos los temas sombreados creados antes de la fecha especificada serán eliminados.',
	'Delete_Before_Date_Button' => 'Eliminar todos los anteriores a la fecha',
	'No_Shadow_Topics' => 'No se encontraron temas sombreados.',
	'Topic_Shadow' => 'Tema sombreado',
	'TS_Desc' => 'Permite la eliminación de temas sombreados sin eliminar el mensaje actual. Los temas sombreados se crean cuando mueve un tema a otro foro y elige dejar atrás en el foro original un enlace al foro donde se movió el tema.',
	'Month' => 'Mes',
	'Day' => 'Día',
	'Year' => 'Año',
	'Clear' => 'Vaciar',
	'Resync_Ran_On' => 'Resincronización ejecutada en %s<br />', // %s = insertion of forum name
	'Version' => 'Versión',

	'Title' => 'Título',
	'Moved_To' => 'Movido a',
	'Moved_From' => 'Movido desde',

/* Modes */
	'topic_time' => 'Fecha de tema',
	'topic_title' => 'Título de tema',

/* Errors */
	'Error_Month' => 'El mes debe estar entre 1 y 12',
	'Error_Day' => 'El día debe estar entre 1 y 31',
	'Error_Year' => 'El año debe estar entre 1970 y 2038',
	'Error_Topics_Table' => 'Error accediendo a la tabla de temas',
/* lang_admin_topic_shadow.php - END */

/* lang_admin_rebuild_search.php - BEGIN */
	'Rebuild_search' => 'Reconstruir índice de búsqueda',
	'Rebuild_search_desc' => 'Se indexará cada mensaje de su foro, reconstruyendo las tablas de búsqueda. Esto podría durar bastante tiempo: por favor, no cambie de página hasta que se complete el proceso.',
	'Post_limit' => 'Límite de mensajes',
	'Time_limit' => 'Límite de tiempo',
	'Refresh_rate' => 'Radio de actualización',

	'Next' => 'Siguiente',
	'Finished' => 'Finalizar',
/* lang_admin_rebuild_search.php - END */

/* lang_admin_faq_editor.php - BEGIN */
	'faq_editor' => 'Editar páginas de ayuda',
	'faq_editor_explain' => 'Desde aquí puede editar los textos de ayuda de su web.',

	'faq_select_language' => 'Elija el lenguaje del archivo que desea editar',
	'faq_retrieve' => 'Recuperar archivo',

	'faq_block_delete' => '¿Está seguro de querer eliminar este bloque?',
	'faq_quest_delete' => '¿Está seguro de querer eliminar esta pregunta (y su respuesta)?',

	'faq_quest_edit' => 'Editar pregunta y respuesta',
	'faq_quest_create' => 'Crear nueva pregunta y respuesta',

	'faq_quest_edit_explain' => 'Editar la pregunta y respuesta. Cambie el bloque si lo desea.',
	'faq_quest_create_explain' => 'Escriba la nueva pregunta y respuesta y pulse enviar.',

	'faq_block' => 'Bloque',
	'faq_quest' => 'Pregunta',
	'faq_answer' => 'Respuesta',

	'faq_block_name' => 'Nombre del bloque',
	'faq_block_rename' => 'Renombrar bloque',
	'faq_block_rename_explain' => 'Cambiar el nombre del bloque en el archivo',

	'faq_block_add' => 'Añadir bloque',
	'faq_quest_add' => 'Añadir pregunta',

	'faq_no_quests' => 'No hay preguntas en este bloque. Esto prevendrá que cualquier bloque se muestre después de este. Borre el bloque o agregue una o más preguntas.',
	'faq_no_blocks' => 'No hay bloques definidos. Añadir un nuevo bloque escribiendo un nombre debajo.',

	'faq_write_file' => 'No se ha podido escribir en el archivo de lenguaje',
	'faq_write_file_explain' => 'Puede crear el archivo de lenguaje en language/lang_spanish/ o equivalente, se puede <i>escribir</i> para usar este panel de control. En UNIX, otorgue <code>CHMOD 666</code> al nombre del archivo. Muchos clientes FTP lo pueden hacer a través de las características para un archivo. Si no, puede utilizar el telnet o SSH.',
/* lang_admin_faq_editor.php - END */

/* lang_admin_rules_editor.php - BEGIN */
	'rules_editor' => 'Editar lenguaje',
	'rules_editor_explain' => 'Este módulo le permite editar y recuperar las normas de su sitio.',

	'rules_select_language' => 'Elija el lenguaje del archivo que desea editar',
	'rules_retrieve' => 'Recuperar archivo',

	'rules_block_delete' => '¿Está seguro de querer eliminar este bloque?',
	'rules_quest_delete' => '¿Está seguro de querer eliminar esta pregunta (y su respuesta)?',

	'rules_quest_edit' => 'Editar pregunta y respuesta',
	'rules_quest_create' => 'Crear nueva pregunta y respuesta',

	'rules_quest_edit_explain' => 'Editar la pregunta y respuesta. Cambie el bloque si lo desea.',
	'rules_quest_create_explain' => 'Escriba la nueva pregunta y respuesta y presione enviar.',

	'rules_block' => 'Bloque',
	'rules_quest' => 'Pregunta',
	'rules_answer' => 'Respuesta',

	'rules_block_name' => 'Nombre del bloque',
	'rules_block_rename' => 'Renombrar bloque',
	'rules_block_rename_explain' => 'Cambiar el nombre del bloque en el archivo',

	'rules_block_add' => 'Añadir bloque',
	'rules_quest_add' => 'Añadir pregunta',

	'rules_no_quests' => 'No hay preguntas en este bloque. Esto prevendrá que cualquier bloque se muestre después de este. Borre el bloque o agregue una o más preguntas.',
	'rules_no_blocks' => 'No hay bloques definidos. Añadir un nuevo bloque escribiendo un nombre debajo.',

	'rules_write_file' => 'No se ha podido escribir en el archivo de lenguaje',
	'rules_write_file_explain' => 'Puede crear el archivo de lenguaje en language/lang_spanish/ o equivalente. Se puede <i>escribir</i> para usar este panel de control. En UNIX, otorgue <code>CHMOD 666</code> al nombre del archivo. Muchos clientes FTP lo pueden hacer a través de las características para un archivo; si no, puede utilizar el telnet o SSH.',
/* lang_admin_rules_editor.php - END */

/* lang_admin_priv_msgs.php - BEGIN */
	'PM_View_Type' => 'Tipo de vista de MP',
	'Show_IP' => 'Mostrar dirección IP',
	'Rows_Per_Page' => 'Filas por página',
	'Archive_Feature' => 'Característica del archivo',
	'Inline' => 'En línea',
	'Pop_up' => 'Pop-up',
	'Current' => 'Actual',
	'Rows_Plus_5' => 'Añadir 5 filas',
	'Rows_Minus_5' => 'Quitar 5 filas',
	'Enable' => 'Habilitar',
	'Disable' => 'Deshabilitar',
	'Inserted_Default_Value' => 'El artículo de configuración %s no existía, se ha insertado un valor por defecto<br />', // %s = config name
	'Updated_Config' => 'Artículo de configuración %s actualizado<br />', // %s = config item
	'Archive_Table_Inserted' => 'La tabla de archivo no existía, se ha creado<br />',
	'Switch_Normal' => 'Cambiar a modo normal',
	'Switch_Archive' => 'Cambiar a modo archivo',

/* General */
	'Deleted_Message' => 'Mensaje privado borrado - %s <br />', // %s = PM title
	'Archived_Message' => 'Mensaje privado archivado - %s <br />', // %s = PM title
	'Archived_Message_No_Delete' => 'No puede suprimir %s. Fue marcado también para el archivo de MPs<br />', // %s = PM title
	'Private_Messages' => 'Mensajes privados',
	'Private_Messages_Archive' => 'Archivo de los mensajes privados',
	'Archive' => 'Archivo',
	'To' => 'Para',
	'Subject' => 'Asunto',
	'Sent_Date' => 'Fecha de envío',
	'From' => 'De',
	'Sort' => 'Clase',
	'Filter_By' => 'Filtrar por',
	'PM_Type' => 'Tipo MP',
	'Status' => 'Estado',
	'No_PMS' => 'No se han encontrado mensajes privados a mostrar según el criterio',
	'Archive_Desc' => 'Los mensajes privados que ha elegido archivar se enumeran aquí. Los usuarios (quien envía y quien recibe) pueden acceder a ellos, pero usted puede verlos o suprimirlos en cualquier momento.',
	'Normal_Desc' => 'Todos los mensajes privados de su foro se pueden manejar aquí. Puede leer cualquiera, y suprimir o archivar los mensajes.',
	'Remove_Old' => 'MPs huérfanos:</a> <span class="gensmall">Los usuarios que ya no existen podrían tener MPs. Esto los quitará.</span>',
	'Remove_Sent' => 'Caja de envíos de MPs:</a> <span class="gensmall">Los MPs de la caja de envíos son copias exactas del mismo mensaje que fue enviado, a menos que esté asignado al remitente, después de que el otro usuario haya leído el MP. Estos no se necesitan.</span>',
	'Removed_Old' => 'Borrar todos los MPs huérfanos<br />',
	'Removed_Sent' => 'Borrar todos los MPs enviados<br />',
	'Utilities' => 'Utilidades de borrado masivo',
	'Nivisec_Com' => 'Nivisec.com',

/* PM Types */
	'PM_-1' => 'Todos los tipos', //PRIVMSGS_ALL_MAIL = -1
	'PM_0' => 'MPs leídos', //PRIVMSGS_READ_MAIL = 0
	'PM_1' => 'MPs nuevos', //PRIVMSGS_NEW_MAIL = 1
	'PM_2' => 'MPs enviados', //PRIVMSGS_SENT_MAIL = 2
	'PM_3' => 'MPs guardados (Entrada)', //PRIVMSGS_SAVED_IN_MAIL = 3
	'PM_4' => 'MPs guardados (Salida)', //PRIVMSGS_SAVED_OUT_MAIL = 4
	'PM_5' => 'MPs sin leer', //PRIVMSGS_UNREAD_MAIL = 5

/* Errors */
	'Error_Other_Table' => 'Error de búsqueda en la tabla requerida.',
	'Error_PM_Text_Table' => 'Error de búsqueda en la tabla de texto de mensajes privados.',
	'Error_PM_Table' => 'Error de búsqueda en la tabla de mensajes privados.',
	'Error_PM_Archive_Table' => 'Error de búsqueda en la tabla de archivo de los mensajes privados.',
	'No_Message_ID' => 'No ha especificado una ID para el mensaje.',
/* lang_admin_priv_msgs.php - END */

/* lang_admin_link.php - BEGIN */
// Categories
	'Link_Categories_Title' => 'Administrar categorías de los enlaces',
	'Link_Categories_Explain' => 'En esta pantalla  puede administrar sus categorías: crear, cambiar, borrar, mover, etc.',
	'Category_Permissions' => 'Permisos de la categoría',
	'Category_Title' => 'Título de la categoría',
	'Category_Desc' => 'Descripción de la categoría',
	'View_level' => 'Nivel de vista',
	'Upload_level' => 'Nivel de carga',
	'Rate_level' => 'Nivel de puntuación',
	'Comment_level' => 'Nivel del comentario',
	'Edit_level' => 'Editar nivel',
	'Delete_level' => 'Borrar nivel',
	'New_category_created' => 'La nueva categoría se ha creado correctamente.',
	'Click_return_link_category' => 'Pulse %saquí%s para volver a administrar categorías de los enlaces',
	'Category_updated' => 'Esta categoría se ha actualizado correctamente.',
	'Delete_Category' => 'Borrar categoría',
	'Delete_Category_Explain' => 'El formulario de abajo le permitirá suprimir una categoría.',
	'Category_deleted' => 'Esta categoría se ha borrado correctamente.',
	'Category_changed_order' => 'Esta categoría se ha modificado correctamente.',

// Config
	'Link_Config' =>'Configurar enlaces',
	'Link_config_explain' => 'Aquí puede cambiar la configuración general de sus enlaces.',
	'lock_submit_site' => 'Impedir que los usuarios puedan enviar enlaces',
	'allow_guest_submit_site' => 'Permitir a los invitados enviar enlaces',
	'allow_no_logo' => 'Permitir enviar enlaces sin banner',
	'site_logo' => 'URL donde se encuentra el logotipo (URL completa)',
	'site_url' => 'URL de la página web',
	'width' => 'Ancho máximo de los banners',
	'height' => 'Altura máxima de los banners',
	'linkspp' => 'Enlaces máximos por página',
	'interval' => 'Velocidad de movimiento de los banners en el bloque',
	'display_logo' => 'Cantidad de banners a mostrar simultáneamente',
	'Link_display_links_logo' => 'Mostrar los logotipos de las webs enlazadas',
	'Link_email_notify' => 'Cuando se agregue un enlace, enviar un correo a todos los administradores de la web',
	'Link_pm_notify' => 'Cuando se agregue un enlace, enviar un mensaje privado a todos los administradores de la web',
	'Link_config_updated' => 'La configuración de los enlaces se ha actualizado correctamente',
	'Click_return_link_config' => 'Pulse %saquí%s para volver a configurar los enlaces.',

// Link_MOD
	'Links' => 'Administrar enlaces',
	'Links_explain' => 'Desde esta sección puede ver el estado de los enlaces y corregir o eliminar el enlace seleccionado.',
	'Add_link' => 'Añadir enlace',
	'Add_link_explain' => 'El formulario de abajo le permitirá agregar un enlace directamente.',
	'Edit_link' => 'Corregir enlace',
	'Edit_link_explain' => 'El formulario de abajo le permitirá corregir un enlace, y también activarlo',
	'Delete_link' => 'Borrar enlace',
	'Delete_link_explain' => 'El formulario de abajo permitirá eliminar un enlace, y también activarlo',
	'Link_update' => 'Actualización de los detalles del enlace',
	'Link_delete' => 'Borrar este enlace',
	'Link_title' => 'Nombre de la web',
	'Link_url' => 'URL de la web',
	'Link_logo_src' => 'Logotipo de la web (88x31 píxeles, tamaño no mayor de 10Kb)',
	'Link_category' => 'Categoría de la web',
	'Link_desc' => 'Descripción de la web',
	'link_hits' => 'Accesos',
	'Link_basic_setting' => 'Datos del enlace',
	'Link_adv_setting' => 'Otras opciones',
	'Link_active' => 'Activar estado',

	'Link_admin_add_success' => 'Enlace agregado correctamente.',
	'Link_admin_add_fail' => 'Imposible agregar el nuevo enlace; por favor, inténtelo de nuevo más tarde.',
	'Link_admin_update_success' => 'Enlace actualizado correctamente.',
	'Link_admin_update_fail' => 'Imposible actualizar el enlace; por favor, inténtelo de nuevo más tarde.',
	'Link_admin_delete_success' => 'Enlace eliminado con éxito.',
	'Link_admin_delete_fail' => 'Imposible eliminar el enlace; por favor, inténtelo de nuevo más tarde.',
	'Click_return_lastpage' => 'Pulse %saquí%s para volver a la página anterior.',
	'Click_return_admin_links' => 'Pulse %saquí%s para volver a administrar enlaces',
	'Preview' => 'Vista previa',
	'Search_site' => 'Buscar web',
	'Search_site_title' => 'Buscar web nombre/descripción:',
/* lang_admin_link.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

// Icy Phoenix - BUILD 009
	'Replace_title' => 'Sustituir en mensajes',
	'Replace_text' => 'En esta página puede sustituir palabras o líneas por lo que quiera. Esto no podrá ser deshecho.',
	'Link' => 'Enlace',
	'Str_old' => 'Texto actual',
	'Str_new' => 'Sustituir por',
	'No_results' => 'No se ha encontrado ningún resultado',
	'Replaced_count' => 'Mensajes totales actualizados: %s',

// Icy Phoenix - BUILD 016
	'group_rank' => 'Rango',
	'group_color' => 'Color',
	'group_legend' => 'Mostrar en la leyenda',
	'group_legend_short' => 'Leyenda',
	'group_main' => 'Grupo principal',
	'group_members' => 'Usuarios',
	'group_update' => 'Aplicar cambios',

/* lang_color_groups.php - BEGIN */
	'Color_Groups' => 'Color de grupos',
	'Manage_Color_Groups' => 'Administrar color de los grupos',
	'Add_New_Group' => 'Añadir grupo',
	'Color' => 'Color',
	'User_Count' => 'Contar usuarios',
	'Color_List' => 'Lista de colores:',
	'Group_Name' => 'Nombre del grupo',
	'Define_Users' => 'Definir usuarios',
	'Color_Group_User_List' => 'Lista de usuarios del grupo de color',
	'Options' => 'Opciones',
	'Example' => 'Ejemplo',
	'User_List' => 'Lista completa de usuarios',
	'Unassigned_User_List' => 'Usuarios sin grupo',
	'Assigned_User_List' => 'Usuarios con grupo',
	'Add_Arrow' => 'Añadir a la lista',
	'Update' => 'Actualizar',
	'Updated_Group' => 'Lista actualizada de grupo de usuarios<br />',
	'Deleted_Group' => 'Grupo especificado borrado. Ha reajustado a todos los usuarios que estaban a ninguna categoría de usuario de grupo<br />',
	'Hide' => 'Ocultar',
	'Un-hide' => 'Mostrar',
	'Move_Up' => 'Subir',
	'Move_Down' => 'Bajar',
	'Group_Hidden' => 'Grupo oculto<br />',
	'Group_Unhidden' => 'Grupo mostrado<br />',
	'Groups_Updated' => 'Los cambios del grupo se han actualizado<br />',
	'Moved_Group' => 'Mover orden del grupo<br />',

//Descriptions
	'Manage_Color_Groups_Desc' => 'Puede actualizar grupos, añadir nuevos, o administrar los usuarios asignados a cada grupo de un color.<br />Los grupos marcados como "ocultar" no se mostrarán en la lista del índice.',
	'Color_Group_User_List_Desc' => 'Añadir o quitar usuarios al grupo del color especificado.',

//Errors
	'Error_Group_Table' => 'Error de búsqueda en la tabla de grupos por color.',
	'Error_Font_Color' => '<b><u>¡Peligro:</b></u>  La fuente de color especificada no es válida!',
	'Color_Ok' => 'La fuente de color especificada es válida.',
	'No_Groups_Exist' => 'No existen grupos.',
	'Error_Users_Table' => 'Error de búsqueda en la tabla de usuarios.',
	'Invalid_Group_Add' => '%s es inválido o se repite el nombre del grupo.<br />',

//Dynamic
	'Group_Updated' => 'Actualizado el color del grupo %s<br />',
	'Editing_Group' => 'Actualmente editando la lista de usuarios de %s.',
	'Invalid_User' => '%s es un nombre de usuario inválido, saltar...<br />',
	'Invalid_Order_Num' => '%s contiene un número de orden inválido, pero se ha fijado. Por favor, intente su movimiento arriba/abajo otra vez.',

//New for 1.2.0
	'Users_List' => 'Lista de usuarios',
	'Groups_List' => 'Lista de grupos de usuarios',
	'List_Info' => '<b>Notas</b>: <ul><li>Pulse CTRL mientras va pulsando para seleccionar múltiples nombres. <li>Si un usuario pertenece a un grupo de usuario, y se agrega a un grupo específico de color, se utilizará el grupo de color que contiene al usuario, no el grupo de usuario al que pertenece.<li>Los nombres de la lista usan como formato NOMBRE (CURRENT_COLOR_GROUP). Si no hay ningún (CURRENT_COLOR_GROUP) la entrada no pertenece a nada.<li>Si un usuario es usuario de dos o más grupos de usuarios, se asignará la graduación al grupo de color más alto (usted ordene su aspecto en la página principal).</ul>',
/* lang_color_groups.php - END */

// Icy Phoenix - BUILD 023
	'Empty_Cache_Main_Question' => 'Si selecciona "si", todos los archivos en el directorio principal del caché serán borrados permanentemente.<br /><br /><em> ¿Está seguro de hacerlo? </em>',
	'Empty_Cache_Posts_Question' => 'Si selecciona "si", el campo de mensajes precompilados de la tabla de mensajes serán borrados permanentemente.<br /><br /><em> ¿Está seguro de hacerlo? </em>',
	'Empty_Cache_Thumbs_Question' => 'Si selecciona "si", todas las miniaturas generadas en mensajes serán borradas permanentemente.<br /><br /><em> ¿Está seguro de hacerlo? </em>',
	'Empty_Cache_Success' => 'Directorios con caché limpiados correctamente.',

	'Copy_Auth' => 'Copiar permisos de',
	'Copy_Auth_Explain' => 'Tenga en cuenta que sólo puede copiar los permisos de los foros, no de las categorías!!!',

// Icy Phoenix - BUILD 027
/* lang_admin_db_backup.php - BEGIN */
	'SELECT_ALL' => 'Seleccionar todo',
	'SELECT_FILE' => 'Seleccionar un archivo',
	'START_BACKUP' => 'Comenzar copia',
	'START_RESTORE' => 'Comenzar restauración',
	'STORE_AND_DOWNLOAD' => 'Almacenar y descargar',
	'STORE_LOCAL' => 'Almacenar archivo localmente',
	'STRUCTURE_ONLY' => 'Estructura solamente',

// Backup
	'ACP_BACKUP' => 'Copia de base de datos',
	'ACP_BACKUP_EXPLAIN' => 'Aquí puede crear copias de seguridad de todos los datos relacionados con su sitio. Puede almacenar el archivo resultante en su carpeta <samp>backup/</samp> o descargarlo directamente. Dependiendo de la configuración de su servidor, puede ser capaz de comprimir el archivo en varios formatos.',

	'BACKUP_OPTIONS' => 'Opciones de copia',
	'BACKUP_TYPE' => 'Tipo de copia',

	'DATABASE' => 'Utilidades de base de datos',
	'DATA_ONLY' => 'Datos solamente',
	'DELETE_BACKUP' => 'Borrar copia',
	'DELETE_SELECTED_BACKUP' => '¿Está seguro de querer borrar la copia seleccionada?',
	'DESELECT_ALL' => 'Quitar selección a todo',
	'DOWNLOAD_BACKUP' => 'Descargar copia',

	'FILE_TYPE' => 'Tipo de archivo',
	'FULL_BACKUP' => 'Completo',

	'BACKUP_TYPE_COMPLETE' => 'Completo',
	'BACKUP_TYPE_EXTENDED' => 'Extendido',
	'BACKUP_TYPE_COMPACT' => 'Saltos de línea compactos',

	'BACKUP_SUCCESS' => 'La copia de seguridad se ha creado correctamente.',
	'BACKUP_DELETED' => 'La copia de seguridad se ha eliminado correctamente.',

	'TABLE_SELECT' => 'Tabla seleccionada',

	'BACKUP_IN_PROGRESS' => 'Copia de seguridad en progreso...',
	'BACKUP_IN_PROGRESS_TABLE' => 'Copiando la tabla: <b>%s</b>',
	'BACKUP_IN_PROGRESS_REDIRECT' => 'Será redirigido automáticamente al siguiente paso en unos segundos',
	'BACKUP_IN_PROGRESS_REDIRECT_CLICK' => 'Si no es redirigido automáticamente en unos segundos puede pulsar %saquí%s',
	'BACKUP_OPTIONS_RETURN' => 'Pulse %saquí%s para volver a la administración de copias de seguridad',

// Errors
	'Table_Select_Error' => 'Debe seleccionar al menos una tabla.',

// Restore
	'ACP_RESTORE' => 'Restaurar base de datos',
	'ACP_RESTORE_EXPLAIN' => 'Se realizará una plena restauración de todas las tablas de su sitio desde un archivo guardado. Si su servidor lo soporta, puede utilizar un archivo comprimido gzip, bzip2, o archivo de texto y éste será descomprimido. <strong>ATENCIÓN:</strong> Esto sobrescribirá los datos existentes. La restauración puede tardar mucho tiempo de proceso, por favor, NO se mueva de esta página hasta que se complete. Las copias son almacenadas en la carpeta <samp>backup/</samp> y se supone que se genera por la funcionalidad de copia de seguridad de este sitio. La restauración de copias de seguridad que no fueron creadas por este sistema, puede que no funcionen correctamente.',
	'RESTORE_OPTIONS' => 'Opciones de restauración',

	'Restore_Success' => 'La base de datos ha sido restaurada correctamente.<br />Su sitio debe volver al estado en que estaba cuando se hizo la copia de seguridad.',

// Errors
	'No_Backup_Selected' => 'No ha seleccionado ninguna copia de seguridad, no se puede restaurar.',
	'Backup_Invalid' => 'El archivo seleccionado de copia es inválido.',
	'RESTORE_FAILURE' => 'El archivo de copia está corrupto.',
/* lang_admin_db_backup.php - END */

/* Logs - BEGIN */
	'LOGS_ACTIONS_FILTER' => 'Filtro de acciones',
	'LOGS_TITLE' => 'Logs',
	'LOGS_EXPLAIN' => 'Todas las acciones relevantes se almacenan en la BD',
	'LOGS_TARGET' => 'Meta',
	'LOGS_DELETE' => 'Borrar seleccionados',
	'LOGS_DELETE_ALL' => 'Limpiar tabla de logs',
	'LOGS_DENY' => '¡No esta autorizado!',
	'LOGS_POST_EDIT' => 'ha editado un mensaje publicado por',
	'LOGS_POST_DELETE' => 'ha eliminado un mensaje publicado por',
	'LOGS_GROUP_JOIN' => 'ha pedido unirse al grupo',
	'LOGS_GROUP_EDIT' => 'ha editado las opciones del grupo de %s',
	'LOGS_GROUP_ADD' => 'ha añadido a %s al grupo',
	'LOGS_GROUP_TYPE' => 'ha editado el estado del grupo %s, ahora el grupo es %s',
	'LOGS_GROUP_TYPE_0' => 'abierto',
	'LOGS_GROUP_TYPE_1' => 'cerrado',
	'LOGS_GROUP_TYPE_2' => 'oculto',
	'LOGS_MESSAGE' => 'Mensaje recibido por un usuario, código <b>%s</b>',
	'LOGS_MODCP_DELETE' => 'ha eliminado algunos mensajes de %s a través de MODCP',
	'LOGS_MODCP_RECYCLE' => 'ha enviado a la papelera algunos mensajes de %s a través de MODCP',
	'LOGS_MODCP_LOCK' => 'ha cerrado algunos mensajes de %s a través MODCP',
	'LOGS_MODCP_UNLOCK' => 'ha abierto algunos mensajes de %s a través MODCP',
	'LOGS_MODCP_MOVE' => 'ha movido algunos mensajes de %s a través MODCP',
	'LOGS_MODCP_MERGE' => 'ha fusionado algunos mensajes de %s a través MODCP',
	'LOGS_MODCP_SPLIT' => 'ha separado algunos mensajes de in %s a través MODCP',
	'LOGS_TOPIC_BIN' => 'ha enviado a la papelera un mensaje',
	'LOGS_TOPIC_ATTACK' => 'intentos de hack a un mensaje',
	'LOGS_CARD_BAN' => 'baneado',
	'LOGS_CARD_WARN' => 'amonestado',
	'LOGS_CARD_UNBAN' => 'desbaneado',
	'LOGS_ADMIN_CAT_ADD' => 'añadida una categoría',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP' => 'Backup BD %s',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_full' => 'completo',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_structure' => 'sólo estructura',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_data' => 'fecha',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_store_and_download' => ', descargado y almacenado',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_store' => ', almacenado',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_download' => ', descargado',
	'LOGS_ADMIN_DB_UTILITIES_RESTORE' => 'BD restaurada desde',
	'LOGS_ADMIN_BOARD_CONFIG' => 'editados ajustes de configuración',
	'LOGS_ADMIN_BOARD_IP_CONFIG' => 'ha editado configuraciones de Icy Phoenix',
	'LOGS_ADMIN_GROUP_NEW' => 'a creado el grupo',
	'LOGS_ADMIN_GROUP_DELETE' => 'a eliminado el grupo',
	'LOGS_ADMIN_GROUP_EDIT' => 'a editado el grupo',
	'LOGS_ADMIN_USER_AUTH' => 'a editado los permisos de',
	'LOGS_ADMIN_GROUP_AUTH' => 'a editado los permisos del grupo',
	'LOGS_ADMIN_USER_BAN' => 'baneado alguien desde ACP',
	'LOGS_ADMIN_USER_UNBAN' => 'desbaneado alguien desde ACP',
	'LOGS_ADMIN_USER_DELETE' => 'usuario eliminado',
	'LOGS_ADMIN_USER_EDIT' => 'perfil editado de',
	'LOGS_CMS_LAYOUT_EDIT' => 'página %sTHIS%s editada',
	'LOGS_CMS_LAYOUT_DELETE' => 'página [ID = %s] eliminada',
	'LOGS_CMS_BLOCK_EDIT' => 'bloque [ID = %s] modificado de la página %sTHIS%s',
	'LOGS_CMS_BLOCK_EDIT_LS' => 'bloque [ID = %s] modificado en la página estándar [%s]',
	'LOGS_CMS_BLOCK_DELETE' => 'bloque [ID = %s] eliminado de la página %sTHIS%s',
	'LOGS_CMS_BLOCK_DELETE_LS' => 'bloque [ID = %s] eliminado de la página estándar [%s]',
/* Logs - END */

	'SMILEYS_UPDATED' => 'Emoticonos actualizados',

/* ADS - BEGIN */
	'ADS_TITLE' => 'Publicidad &amp; patrocinadores',
	'ADS_TITLE_EXPLAIN' => 'Esta sección le permite configurar banners de publicidad y patrocinadores para mostrar en su foro. Puede añadir diferentes formatos de banners y decidir donde quiere mostrar o que nivel de usuario podrá o no podrá verlo. Si especifica mas de un banner para una posición especifica, ambos banners se mostrarán de forma aleatoria con las configuraciones especificadas en la misma posición.',
	'AD_DES' => 'Descripción',
	'AD_TEXT' => 'Contenido',
	'AD_ENABLED' => 'Activado',
	'AD_STATUS' => 'Estado',
	'AD_STATUS_EXPLAIN' => 'Seleccione si quiere activar esta publicidad o si quiere desactivarla',
	'AD_POSITION' => 'Posición',
	'AD_AUTH' => 'Permisos',
	'AD_AUTH_EXPLAIN' => 'Usuarios que podrán ver esta publicidad',
	'AD_AUTH_GUESTS' => 'Sólo invitados',
	'AD_AUTH_REG' => 'Invitados y registrados (no admins y mods)',
	'AD_AUTH_MOD' => 'Todos menos administradores',
	'AD_AUTH_ADMIN' => 'Todos',
	'AD_FORMAT' => 'Formato',
	'AD_POS_GLT' => 'Global, arriba',
	'AD_POS_GLB' => 'Global, abajo',
	'AD_POS_GLH' => 'Global, encabezado',
	'AD_POS_GLF' => 'Global, pie de página',
	'AD_POS_FIX' => 'Elemento en el índice de foros',
	'AD_POS_FIT' => 'Índice de foros, arriba',
	'AD_POS_FIB' => 'Índice de foros, abajo',
	'AD_POS_VFX' => 'Elemento viendo un foro',
	'AD_POS_VFT' => 'Viendo un foro, arriba',
	'AD_POS_VFB' => 'Viendo un foro, abajo',
	'AD_POS_VTX' => 'Elemento viendo un tema',
	'AD_POS_VTT' => 'Viendo un tema, arriba',
	'AD_POS_VTB' => 'Viendo un tema, abajo',
	'AD_POS_NMT' => 'Menú de navegación, arriba',
	'AD_POS_NMB' => 'Menú de navegación, abajo',
	'AD_ADD' => 'Añadir publicidad',
	'AD_EDIT' => 'Editar publicidad',
	'AD_ADDED' => 'Publicidad añadida correctamente',
	'ADS_UPDATE' => 'Actualizar publicidad',
	'AD_UPDATED' => 'Publicidad actualizada correctamente',
	'AD_DELETED' => 'Publicidad eliminada correctamente',
	'CLICK_RETURN_ADS' => 'Pulse %saquí%s para volver a la administración de publicidad y patrocinadores',
	'AD_NO_ADS' => 'No hay publicidad y patrocinadores definidos',
	'ERR_AD_ADD' => 'Por favor, rellene todos los campos que se requieren',
/* ADS - END */

	'FULL_HTML' => 'HTML completo',
	'ACTIONS' => 'Acciones',
	'EDIT' => 'Editar',
	'DELETE' => 'Eliminar',

// ####################### [ Icy Phoenix Options BEGIN ] #####################
	'MG_Configuration' => 'Ajustes Icy Phoenix',
	'MG_Configuration_Explain' => 'Aquí puede instalar los ajustes avanzados de Icy Phoenix',

	'MG_Configuration_Headers_Banners' => 'Encabezados y banners',
	'MG_Configuration_Queries' => 'Optimización SQL',
	'MG_Configuration_Permissions' => 'Permisos de páginas',
	'MG_Configuration_Posting' => 'Escribiendo',
	'MG_SW_Precompiled_Posts_Title' => 'Mensajes precompilados',
	'MG_SW_Logins_Title' => 'Grabación de conexiones',
	'MG_SW_Edit_Notes_Title' => 'Notas de edición',
	'MG_Configuration_IMG_Posting' => 'Imágenes en mensajes',

	'MG_SW_Header_Footer' => 'Mensajes de encabezado y pie de página',
	'MG_SW_Header_Table' => 'Tabla de encabezado (Header)',
	'MG_SW_Header_Table_Explain' => 'Habilitando esta opción, se mostrará una tabla en el encabezado de cada página con su mensaje personalizado.',
	'MG_SW_Header_Table_Text' => 'Insertar su texto aquí',

	'MG_SW_Empty_Precompiled_Posts' => 'Vaciar precompilado de mensajes',
	'MG_SW_Empty_Precompiled_Posts_Explain' => 'Esta función permite vaciar los mensajes precompilados.',
	'MG_SW_Empty_Precompiled_Posts_Success' => 'Precompilado de mensajes vaciado correctamente.',
	'MG_SW_Empty_Precompiled_Posts_Fail' => 'Errores vaciando el precompilado de mensajes.',
	'MG_SW_Empty_Precompiled_Posts_InProgress' => 'Limpiando directorios de cache en progreso...',
	'MG_SW_Empty_Precompiled_Posts_InProgress_Redirect' => 'Será redirigido automáticamente al siguiente paso en unos segundos',
	'MG_SW_Empty_Precompiled_Posts_InProgress_Redirect_Click' => 'Si no es redirigido automáticamente en unos segundos puede pulsar %saquí%s',
	'MG_SW_Empty_Precompiled_Posts_Redirect_Click' => 'Pulse %saquí%s para volver a la administración de cache',

	'MG_FNF_Header' => 'Configuraciones rápidas',
	'MG_FNF_Header_Explain' => 'En esta página puede configurar rápida y fácilmente algunas de las opciones de su foro. Estas configuraciones por defecto se han creado para que les sea más fácil a los usuarios escoger sus configuraciones sin tener que modificarlas una a una en el panel de control. Estas configuraciones por defecto se pueden utilizar como punto de partida para los futuros requisitos particulares: por ejemplo, puede seleccionar "Fast and furious" y sólo modificar las opciones de este sistema que no le gusten.<br /><br /><span class="text_red"><b>Por favor, tenga en cuenta que una vez haya aplicado alguna de estas opciones del sistema no podrá restaurar automáticamente sus anteriores configuraciones, pero si que podrá hacerlo manualmente.</b></span>',
	'MG_FNF_Options_Set' => 'Opciones para seleccionar',
	'MG_FNF_FNF' => 'Fast and furious',
	'MG_FNF_FNF_Explain' => 'Esta opción mejorará la velocidad de su foro, porque la mayor parte de las características que requieren una mayor carga de CPU o acceso a la base de datos serán deshabilitadas. Esto es un buen punto de partida para tener un foro muy rápido.',
	'MG_FNF_MGS' => 'Sugerencia de Mighty Gorgon',
	'MG_FNF_MGS_Explain' => 'Este sistema de opciones es equilibrado y bueno para la mayor parte de foros. Algunas opciones serán permitidas mientras que algunas otras que requieren una mayor carga de CPU serán deshabilitadas.',
	'MG_FNF_Full_Features' => 'Características completas',
	'MG_FNF_Full_Features_Explain' => 'Este sistema de opciones puede permitirse si no tiene límite de ancho de banda, o si le gusta tener todas las características del Icy Phoenix activades. Por favor, tenga en cuenta que algunas de las características pueden no ser compatibles con su servidor.',

	'MG_SW_ACRONYMS' => 'Deshabilitar acrónimos',
	'MG_SW_ACRONYMS_Explain' => 'Esta opción deshabilita la función de acrónimos',
	'MG_SW_AUTOLINKS' => 'Deshabilitar autoenlaces',
	'MG_SW_AUTOLINKS_Explain' => 'Esta opción deshabilita la función de autoenlaces',
	'MG_SW_CENSOR' => 'Deshabilitar palabras censuradas',
	'MG_SW_CENSOR_Explain' => 'Esta opción deshabilita la función de palabras censuradas',

	'MG_SW_No_Right_Click' => 'Bloquear botón secundario del ratón',

	'Click_return_config_mg' => 'Pulse %saquí%s para volver a los ajustes de Icy Phoenix',
	)
);

/* Special Cases, Do not bother to change for another language */
$lang['ASC'] = $lang['Sort_Ascending'];
$lang['DESC'] = $lang['Sort_Descending'];
$lang['privmsgs_date'] = $lang['Sent_Date'];
$lang['privmsgs_subject'] = $lang['Subject'];
$lang['privmsgs_from_userid'] = $lang['From'];
$lang['privmsgs_to_userid'] = $lang['To'];
$lang['privmsgs_type'] = $lang['PM_Type'];

// ####################### [ Icy Phoenix Options END ] #######################

// ####################### [ Icy Phoenix Navigation BEGIN ] #######################
// Use numbers to sort the ACP Navigation menu
// Numbers have to be changed in all /adm/*.php files too

// Configuration
$lang['1000_Configuration'] = 'Configuración'; // admin_board.php, admin_board_extend.php, admin_board_headers_banners.php, admin_board_main.php, admin_board_permissions.php, admin_board_server.php, admin_board_posting.php, admin_board_queries.php, admin_captcha_config.php, admin_upi2db.php
$lang['100_Server_Configuration'] = 'Servidor'; // admin_board_server.php
$lang['110_Various_Configuration'] = 'Foro'; // admin_board.php
$lang['120_MG_Configuration'] = 'Icy Phoenix'; // admin_board_main.php
$lang['125_Language'] = 'Personalizar claves lenguaje'; // admin_lang_user_created.php
$lang['127_Clear_Cache'] = 'Limpiar caché'; // admin_board_clearcache.php
$lang['130_UPI2DB_Mod'] = 'Mensajes sin leer'; // admin_upi2db.php
$lang['140_MG_Configuration_Headers_Banners'] = 'Encabezados y banners'; // admin_board_headers_banners.php
$lang['145_Captcha_Config'] = 'Confirmación visual'; // admin_captcha_config.php
$lang['150_Similar_topics'] = 'Temas parecidos'; // admin_similar_topics.php
$lang['160_Title_infos'] = 'Administrar título rápido'; // admin_quick_title.php
$lang['170_LIW'] = 'Límite de anchura de imagen'; // admin_liw.php
$lang['180_MG_Configuration_Permissions'] = 'Permisos de página'; // admin_board_permissions.php
$lang['190_Spider_Bots'] = 'Arañas/robots'; // admin_bots.php
$lang['192_Google_BOT'] = 'Detector GoogleBot'; // admin_google_bot_detector.php
$lang['195_Yahoo_search'] = 'Búsqueda yahoo'; // admin_yahoo_search.php
$lang['200_Language'] = 'Lenguaje';	
$lang['210_MG_Quick_Settings'] = 'Configuraciones rápidas';	

// General
$lang['1100_General'] = 'General'; // admin_acronyms.php, admin_autolinks.php, admin_force_read.php, admin_helpdesk.php, admin_liw.php, admin_force_read.php, admin_mass_email.php, admin_megamail.php, admin_notepad.php, admin_quick_title.php, admin_smilies.php, admin_words.php, admin_yahoo_search.php
$lang['100_Acronyms'] = 'Siglas'; // admin_acronyms.php
$lang['110_Autolinks'] = 'Autoenlaces'; // admin_autolinks.php
$lang['120_Ads'] = 'Publicidad &amp; patrocinadores'; // admin_ads.php
$lang['130_Mass_Email'] = 'e-mail masivo'; // admin_mass_email.php
$lang['140_Mega_Mail'] = 'Mega e-mail'; // admin_megamail.php
$lang['150_FTR_Config'] = 'FTR'; // admin_force_read.php
$lang['160_FTR_Users'] = 'FTR usuario'; // admin_force_read.php
$lang['170_Smilies'] = 'Emoticonos'; // admin_smilies.php
$lang['180_Word_Censor'] = 'Censurar palabras'; // admin_words.php
$lang['200_Notepad'] = 'Bloc de notas'; // admin_notepad.php
$lang['210_Help_Desk'] = 'Ayuda'; // admin_helpdesk.php
$lang['240_Replace_title'] = 'Reemplazar en mensajes'; // admin_replace.php

// Forum
$lang['1200_Forums'] = 'Foro'; // admin_forum_prune.php, admin_forumauth_list.php, admin_forums.php, admin_forums_extend.php, admin_prune_overview.php, admin_topic_shadow.php
$lang['100_Manage'] = 'Administrar'; // admin_forums.php
$lang['110_Manage_extend'] = 'Administración avanzada'; // admin_forums_extend.php
$lang['120_Permissions_List'] = 'Lista de permisos'; // admin_forumauth_list.php
$lang['122_Permissions_Adv'] = 'Permisos AVD'; // admin_forumauth_adv.php
$lang['125_Permissions_Forum'] = 'Permisos'; // admin_forumauth.php
$lang['130_Prune'] = 'Limpiar'; // admin_forum_prune.php
$lang['140_Prune_Overview'] = 'Descripción de limpieza'; // admin_prune_overview.php
$lang['150_Topic_Shadow'] = 'Temas sombreados'; // admin_topic_shadow.php

// eXtreme Styles
$lang['1300_Extreme_Styles'] = 'Estilos y plantillas'; // xs_include.php -> $module_name

// DB Maintenance & Security
$lang['1400_DB_Maintenance'] = 'Mantenimiento BD'; // admin_bb_db.php, admin_db_generator.php, admin_db_maintenance.php, admin_db_utilities.php
$lang['100_Actions_LOG'] = 'Log acciones'; // admin_logs.php
$lang['110_DB_Admin'] = 'phpBB MySQLAdmin'; // admin_bb_db.php
$lang['120_Backup_DB'] = 'Copiar BD'; // admin_db_utilities.php, admin_db_backup
$lang['130_Restore_DB'] = 'Restaurar BD'; // admin_db_utilities.php, admin_db_backup
$lang['135_Restore_DB'] = 'Restaurar BD desde archivo'; // admin_db_utilities.php
$lang['140_Optimize_DB'] = 'Optimizar BD'; // admin_db_utilities.php
$lang['150_DB_Maintenance'] = 'Mantenimiento BD'; // admin_db_maintenance.php
$lang['170_db_update_generator'] = 'Generar actualización BD'; // admin_db_generator.php
$lang['180_msqd'] = 'MySQLDumper'; // admin_msqd.php

// IM Portal
$lang['1500_IM_Portal'] = 'Portal'; // admin_blocks.php, admin_blocks_pos.php, admin_blocks_var.php, admin_clear_cache.php, admin_layout.php, admin_portal.php
$lang['100_Portal_Configuration'] = 'Configuración del portal'; // admin_portal.php
$lang['110_Page_Management'] = 'Administrar página'; // admin_layout.php
$lang['115_Page_Management'] = 'Administrar personalización página'; // admin_layout_cp.php
$lang['120_Blocks_Management'] = 'Administrar bloque'; // admin_blocks.php
$lang['130_Blocks_Position_Tag'] = 'Tag de posición de bloque'; // admin_blocks_pos.php
$lang['140_Blocks_Variables'] = 'Variables del bloque'; // admin_blocks_var.php
$lang['150_Delete_Cache_Files'] = 'Borrar archivos caché'; // admin_clear_cache.php

// News
$lang['1600_News_Admin'] = 'Noticias'; // admin_news.php, admin_news_cats.php, admin_xs_news.php, admin_xs_news_xml.php
$lang['100_News_Config'] = 'Configuración de noticias'; // admin_news.php
$lang['110_News_Cats'] = 'Categorías de noticias'; // admin_news_cats.php
$lang['120_XS_News_Config'] = 'Configuración de noticias Icy Phoenix'; // admin_xs_news.php
$lang['130_XS_News'] = 'Artículos de noticias Icy Phoenix'; // admin_xs_news.php
$lang['140_XS_News_Tickers'] = 'Nuevas entradas de Icy Phoenix'; // admin_xs_news_xml.php

// Users
$lang['1610_Users'] = 'Usuarios'; // admin_account.php, admin_disallow.php, admin_email_list.php, admin_jr_admin.php, admin_postcount.php, admin_priv_msgs.php, admin_profile_fields.php, admin_ranks.php, admin_ug_auth.php, admin_user_ban.php, admin_user_bantron.php, admin_user_register.php, admin_user_search.php, admin_userlist.php, admin_users.php, admin_voting.php
$lang['100_Jr_Admin'] = 'Administrador junior'; // admin_jr_admin.php
$lang['110_Manage'] = 'Administrar'; // admin_users.php
$lang['113_Permissions_Users'] = 'Permisos'; // admin_ug_auth.php
$lang['116_CMS_Permissions_Users'] = 'Permisos CMS'; // admin_cms_auth.php
$lang['120_Ranks'] = 'Rangos'; // admin_ranks.php
$lang['130_Userlist'] = 'Lista de usuarios'; // admin_userlist.php
$lang['140_Email_List'] = 'Lista de correo'; // admin_email_list.php
$lang['150_Private_Messages'] = 'Mensajes privados'; // admin_priv_msgs.php
$lang['160_Account_active'] = 'Cuentas activas'; // admin_account.php
$lang['170_Account_inactive'] = 'Cuentas inactivas'; // admin_account.php
$lang['180_Add_New_User'] = 'Añadir nuevo usuario'; // admin_user_register.php
$lang['190_Prune_users'] = 'Limpiar usuarios'; // admin_prune_users.php
$lang['200_Disallow'] = 'Desactivar nombres de usuarios'; // admin_disallow.php
$lang['210_Ban_Management'] = 'Banear usuarios'; // admin_user_ban.php
$lang['220_Bantron'] = 'Bantron'; // admin_user_bantron.php
$lang['250_Postcount_Config'] = 'Editar cantidad de mensajes'; // admin_postcount.php
$lang['260_CPF_Add'] = 'Añadir campos de perfil'; // admin_profile_fields.php
$lang['270_CPF_Edit'] = 'Editar campos de perfil'; // admin_profile_fields.php
$lang['280_User_Search'] = 'Búsqueda extendida de usuario'; // admin_user_search.php
$lang['290_Poll_Results'] = 'Resultados de encuestas'; // admin_voting.php
$lang['300_Picscount_Config'] = 'Sincronizar cantidad de imágenes'; // admin_postcount.php

// Groups
$lang['1620_Groups'] = 'Grupos'; // admin_color_groups.php, admin_groups.php, admin_ug_auth.php
$lang['110_Manage_Groups'] = 'Administrar grupos'; // admin_groups.php
$lang['120_Color_Groups'] = 'Color de grupos'; // admin_color_groups.php
$lang['130_Permissions_Group'] = 'Permisos'; // admin_ug_auth.php

// Topic Rating
$lang['1700_Topic_Rating'] = 'Valoración de temas'; // admin_rate.php

// Knowledge Base
$lang['1800_KB_title'] = 'Biblioteca'; // admin_kb_art.php, admin_kb_auth.php, admin_kb_cat.php, admin_kb_config.php, admin_kb_custom.php, admin_kb_rebuild_search.php, admin_kb_types.php
$lang['100_KB_Configuration'] = 'Configuración'; // admin_kb_config.php
$lang['110_Art_man'] = 'Administrar artículo'; // admin_kb_art.php
$lang['120_Cat_man'] = 'Administrar categorías'; // admin_kb_cat.php
$lang['130_Types_man'] = 'Tipos de artículos'; // admin_kb_types.php
$lang['140_Custom_Field'] = 'Campos'; // admin_kb_custom.php
$lang['150_Permissions'] = 'Permisos'; // admin_kb_auth.php
$lang['160_Optimize_tables'] = 'Optimizar tablas'; // admin_kb_rebuild_search.php

// Attachments
$lang['1900_Attachments'] = 'Adjuntos'; // admin_attach_cp.php, admin_attachments.php, admin_extensions.php
$lang['100_Control_Panel'] = 'Panel de control'; // admin_attach_cp.php
$lang['110_Att_Manage'] = 'Administración'; // admin_attachments.php
$lang['120_Quota_limits'] = 'Límites de cuota'; // admin_attachments.php
$lang['130_Shadow_attachments'] = 'Adjuntos sombreados'; // admin_attachments.php
$lang['140_Sync_attachments'] = 'Sincronizar adjuntos'; // admin_attachments.php
$lang['150_Extension_control'] = 'Control de extensión'; // admin_extensions.php
$lang['160_Extension_group_manage'] = 'Administrar grupos de extensión'; // admin_extensions.php
$lang['170_Forbidden_extensions'] = 'Extensiones prohibidas'; // admin_extensions.php
$lang['180_Special_categories'] = 'Categorías especiales'; // admin_attachments.php

// Downloads
$lang['2000_Downloads'] = 'Descargas'; // admin_pa_catauth.php, admin_pa_category.php, admin_pa_custom.php, admin_pa_fchecker.php, admin_pa_file.php, admin_pa_license.php, admin_pa_settings.php
$lang['100_Settings'] = 'Configuración'; // admin_pa_settings.php
$lang['110_Cat_manage_title'] = 'Administrar categorías'; // admin_pa_category.php
$lang['120_File_manage_title'] = 'Administrar archivos'; // admin_pa_file.php
$lang['130_Fchecker'] = 'Inspeccionar archivo'; // admin_pa_fchecker.php
$lang['140_Mfieldtitle'] = 'Campos adicionales'; // admin_pa_custom.php
$lang['150_License_title'] = 'Administrar licencias'; // admin_pa_license.php
$lang['160_Permissions'] = 'Permisos'; // admin_pa_catauth.php

// Downloads
$lang['2050_Downloads'] = 'Descargas ADV'; // admin_pa_catauth.php, admin_pa_category.php, admin_pa_custom.php, admin_pa_fchecker.php, admin_pa_file.php, admin_pa_license.php, admin_pa_settings.php
$lang['100_DL_Settings'] = 'Configuración'; // admin_pa_settings.php

// Links
$lang['2100_Links'] = 'Enlaces'; // admin_links.php, admin_links_cat.php, admin_links_config.php
$lang['100_Configuration'] = 'Configuración'; // admin_links_config.php
$lang['110_Category'] = 'Administrar categorías'; // admin_links_cat.php
$lang['120_Add_new'] = 'Añadir enlace'; // admin_links.php
$lang['130_Link_Manage'] = 'Administrar enlaces'; // admin_links.php

// Album
$lang['2200_Photo_Album'] = 'Álbum'; // admin_album_auth.php, admin_album_cat.php, admin_album_config_extended.php
$lang['110_Album_Config'] = 'Configuración'; // admin_album_config_extended.php
$lang['120_Album_Categories'] = 'Administrar categorías'; // admin_album_cat.php
$lang['130_Album_Permissions'] = 'Permisos'; // admin_album_auth.php
$lang['140_Personal_Galleries'] = 'Galerías personales'; // admin_album_personal.php

// FAQ
$lang['2300_FAQ'] = 'FAQ & normas'; // admin_faq_editor.php
$lang['110_FAQ_BBCode'] = 'FAQ BBCode'; // admin_faq_editor.php
$lang['120_FAQ_Board'] = 'FAQ del foro'; // admin_faq_editor.php
$lang['130_FAQ_Rules'] = 'Normas del foro'; // admin_faq_editor.php

// INFO
$lang['2400_INFO'] = 'Info'; // admin_logs.php, admin_phpinfo.php, admin_gd_info.php, admin_referrers.php, admin_google_bot_detector.php
$lang['110_Actions_LOG'] = 'Log acciones'; // admin_logs.php
$lang['120_PHP_INFO'] = 'Info PHP'; // admin_phpinfo.php
$lang['130_GD_Info'] = 'Info GD'; // admin_gd_info.php
$lang['140_HTTP_REF'] = 'Referidos HTTP'; // admin_referrers.php
$lang['150_Google_BOT'] = 'Detector GoogleBot'; // admin_google_bot_detector.php

// ####################### [ ACP Navigation END ] #######################

?>