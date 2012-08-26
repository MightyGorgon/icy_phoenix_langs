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
	'General' => 'Administraci&oacute;n general',
	'Users' => 'Administrar usuarios',
	'Groups' => 'Administrar grupos',
	'Forums' => 'Administrar foros',
	'Styles' => 'Administrar estilos',

	'Configuration' => 'Configuraci&oacute;n',
	'Various_Configuration' => 'Configuraciones varias',
	'Permissions' => 'Permisos',
	'Manage' => 'Administraci&oacute;n',
	'manage' => 'Administraci&oacute;n',
	'Disallow' => 'Deshabilitar nombres de usuario',
	'Prune' => 'Purgar (Prune)',
	'Mass_Email' => 'Correo masivo',
	'Ranks' => 'Rangos',
	'Smilies' => 'Emoticonos',
	'Ban_Management' => 'Control de exclusi&oacute;n',
	'Word_Censor' => 'Palabras censuradas',
	'Export' => 'Exportar',
	'Create_new' => 'Crear',
	'Add_new' => 'Agregar',
	'Backup_DB' => 'Copia de seguridad de la base de datos',
	'Restore_DB' => 'Restaurar la base de datos',
	'DB_Maintenance' => 'Base de datos',
	'News_Admin' => 'Noticias',
	'News_Cats' => 'Categor&iacute;as de noticias',
	'News_Config' => 'Configuraci&oacute;n de noticias',
	'Security' => 'Seguridad',
	'Member_Tries' => 'Intentos del usuario',
	'Quick_Search' => 'B&uacute;squeda r&aacute;pida',
	'Special' => 'Especial',
	'Styles_Management' => 'Administraci&oacute;n de estilos',
	'Manage_Bots' => 'Administraci&oacute;n de robots',
	'Admin_Notepad' => 'Libreta',
	'Rebuild_Search' => 'Reconstruir B&uacute;squeda',

// Index
	'Admin' => 'Administraci&oacute;n',
	'Not_admin' => 'No est&aacute; autorizado para administrar este sitio',
	'Welcome_IP' => 'Bienvenido a Icy Phoenix',
	'Admin_intro' => 'Gracias por elegir Icy Phoenix como la soluci&oacute;n para su sitio. Esta pantalla le dar&aacute; una s&iacute;ntesis de las estad&iacute;sticas del mismo. Puede volver a esta pantalla pulsando en el enlace <u>&iacute;ndice de administraci&oacute;n</u> en la parte superior. Para volver al &iacute;ndice del foro, tiene un enlace en la parte superior tambi&eacute;n. El resto de los enlaces del panel izquierdo de esta pantalla le permitir&aacute;n controlar todos los aspectos de su foro. Cada pantalla tendr&aacute; instrucciones de c&oacute;mo usar cada herramienta.',
	'PayPalInfo' => 'Icy Phoenix es un proyecto de c&oacute;digo libre, si est&aacute; interesado en contribuir a su desarrollo puede utilizar el enlace de abajo.',
	'Forum_stats' => 'Estad&iacute;sticas del foro',
	'Admin_Index' => '&Iacute;ndice de administraci&oacute;n',
	'Preview_forum' => 'Vista previa del foro',
	'Click_return_admin_index' => 'Pulse %saqu&iacute;%s para regresar al &iacute;ndice de administraci&oacute;n',
	'Portal' => 'Portal',
	'Preview_Portal' => 'Vista previa del portal',
	'Main_index' => 'Foro',

	'Statistic' => 'Estad&iacute;stica',
	'Value' => 'Valor', //var duplicada, buscar mas abajo (duplicated var, search down)
	'Number_posts' => 'Cantidad de mensajes',
	'Posts_per_day' => 'Env&iacute;os por d&iacute;a',
	'Number_topics' => 'Cantidad de temas',
	'Topics_per_day' => 'Temas por d&iacute;a',
	'Number_users' => 'Cantidad de usuarios',
	'Users_per_day' => 'Usuarios por d&iacute;a',
	'Board_started' => 'Fecha de inicio del foro',
	'Avatar_dir_size' => 'Tama&ntilde;o del directorio de im&aacute;genes',
	'Database_size' => 'Tama&ntilde;o de la base de datos',
	'Gzip_compression' =>'Tipo de compresi&oacute;n gzip',
	'Not_available' => 'No est&aacute; disponible',

	'ON' => 'ON', // This is for GZip compression
	'OFF' => 'OFF',

// DB Utils
	'Database_Utilities' => 'Utilidades de la base de datos',

	'Restore' => 'Restaurar',
	'Backup' => 'Copia de seguridad (Backup)',
	'Restore_explain' => 'Esta acci&oacute;n realizar&aacute; una restauraci&oacute;n completa de todas las tablas desde un archivo previamente guardado. Si su servidor lo soporta, puede subir un archivo de texto comprimido con gzip y autom&aacute;ticamente ser&aacute; descomprimido. <b>ATENCI&Oacute;N</b>: Esta acci&oacute;n sobrescribir&aacute; los datos existentes. La restauraci&oacute;n puede llevar un largo tiempo para ser procesada, dependiendo del tama&ntilde;o de la copia de seguridad (backup), mant&eacute;ngase en esta p&aacute;gina hasta que se complete el proceso.',
	'Backup_explain' => 'Con todo, recuerde que el backup que puede hacer desde aqu&iacute; no es totalmente fiable, y que siempre es preferible hacerlo desde phpMyAdmin, una herramienta que probablemente le proporciona su alojamiento o que, si no es as&iacute;, usted puede instalar.',

	'Backup_options' => 'Opciones de la copia de seguridad (Backup)',
	'Start_backup' => 'Iniciar copia de seguridad (Backup)',
	'Full_backup' => 'Copia de seguridad (Backup) completa',
	'Structure_backup' => 'Copia de seguridad s&oacute;lo de la estructura',
	'Data_backup' => 'Copia de seguridad s&oacute;lo de los datos',
	'Additional_tables' => 'Tablas adicionales',
	'phpBB_only' => 'Solamente tablas relacionadas con phpBB',
	'Gzip_compress' => 'Archivo comprimido en gzip',
	'Select_file' => 'Seleccione un archivo',
	'Start_Restore' => 'Iniciar restauraci&oacute;n',

	'Restore_success' => 'La base de datos ha sido correctamente restaurada.<br /><br />Su foro deber&iacute;a retornar al estado en que se encontraba cuando se realiz&oacute; el backup.',
	'Backup_download' => 'La descarga comenzar&aacute; enseguida; por favor, espere un momento.',
	'Backups_not_supported' => 'Disculpe, pero su copia de seguridad (Backup) de la base de datos no es soportada por su sistema de base de datos.',

	'Restore_Error_uploading' => 'Error subiendo el archivo de la copia de seguridad (Backup)',
	'Restore_Error_filename' => 'Problema de nombre de archivo. Por favor, intente con otro nombre',
	'Restore_Error_decompress' => 'No se puede descomprimir el archivo gzip. Por favor, env&iacute;e un archivo de texto simple',
	'Restore_Error_no_file' => 'No se ha podido subir ning&uacute;n archivo',

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

	'Group_auth_explain' => 'Desde aqu&iacute; puede cambiar los permisos y la moderaci&oacute;n asignados a cada grupo. No olvide que al cambiar permisos de grupo, los permisos individuales de los usuarios pueden seguir permitiendo que alguien se conecte a un foro concreto al que no deber&iacute;a tener acceso. Se le avisar&aacute; si sucede esto.',
	'User_auth_explain' => 'Desde aqu&iacute; puede cambiar los permisos y el estado de moderaci&oacute;n asignado a cada usuario. No olvide que al cambiar permisos de usuarios, los permisos de grupo pueden seguir permitiendo que alguien se conecte a un foro concreto al que no deber&iacute;a tener acceso. Se le avisar&aacute; si sucede esto.',
	'Forum_auth_explain' => 'Desde aqu&iacute; puede cambiar los niveles de autorizaci&oacute;n para cada foro, y hacerlo en modo avanzado o modo simple (el modo avanzado ofrece mayor control sobre las operaciones permitidas en cada foro). Recuerde que cambiar los niveles de permisos para los foros afectar&aacute; a qu&eacute; usuarios pueden ejecutar en ellos las distintas opciones.',
// Start add Permission List
	'Forum_auth_list_explain' => 'Aqu&iacute; puede cambiar los niveles de autorizaci&oacute;n de cada foro. Recuerde que cambiar el nivel de permiso de foros, afectar&aacute; a qu&eacute; usuarios pueden realizar varias operaciones en ellos.',
// End add Permission List

	'Simple_mode' => 'Modo simple',
	'Advanced_mode' => 'Modo avanzado',
	'Moderator_status' => 'Estado del moderador',

	'Allowed_Access' => 'Acceso permitido',
	'Disallowed_Access' => 'Acceso denegado',
	'Is_Moderator' => 'Es moderador',
	'Not_Moderator' => 'No es moderador',

	'Conflict_warning' => 'Advertencia de conflicto de autorizaciones',
	'Conflict_access_userauth' => 'Este usuario todav&iacute;a tiene acceso a este foro por medio de los permisos de grupo al que pertenece. Tal vez deba cambiar los permisos de grupo o borrar a este usuario de su grupo para impedir que tenga acceso. Los grupos que permiten acceso (y los foros involucrados) est&aacute;n listados abajo.',
	'Conflict_mod_userauth' => 'Este usuario todav&iacute;a tiene derechos de moderador de este foro por medio de los permisos de grupo al que pertenece. Tal vez deba cambiar los permisos de grupo o borrar a este usuario de su grupo para impedir que tenga acceso de moderador. Los grupos que permiten acceso (y los foros involucrados) est&aacute;n listados abajo.',

	'Conflict_access_groupauth' => 'El siguiente usuario (o usuarios) todav&iacute;a tiene(n) acceso a este foro por medio de sus permisos individuales de usuario. Tal vez deber&iacute;a cambiar los permisos individuales para impedir el acceso. Los usuarios con acceso (y los foros involucrados) est&aacute;n listados abajo.',
	'Conflict_mod_groupauth' => 'El siguiente usuario (o usuarios) todav&iacute;a tiene(n) permisos de moderaci&oacute;n en este foro por medio de sus permisos de usuario. Tal vez deber&iacute;a cambiar los permisos individuales para impedir que tenga(n) derechos de moderaci&oacute;n. Los usuarios con acceso (y los foros involucrados) est&aacute;n listados abajo.',

	'Public' => 'P&uacute;blico',
	'Private' => 'Privado',
	'Registered' => 'Registrados',
	'Self' => 'Propios',
	'Administrators' => 'Administradores',
	'Hidden' => 'Oculto',

// These are displayed in the drop down boxes for advanced mode forum auth, try and keep them short!
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
	'Post' => 'Env&iacute;o',
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
	'Click_return_userauth' => 'Pulse %saqu&iacute;%s para volver a los permisos de los usuarios',
	'Click_return_groupauth' => 'Pulse %saqu&iacute;%s para volver a los permisos del grupo',
	'Click_return_forumauth' => 'Pulse %saqu&iacute;%s para volver a los permisos del foro',

// Banning
	'Ban_control' => 'Control de exclusi&oacute;n',
	'Ban_explain' => 'Desde aqu&iacute; puede controlar la exclusi&oacute;n de usuarios. Puede hacerlo expulsando un usuario, una direcci&oacute;n IP, o un rango de direcciones IP o nombres de host (o ambos). Estos m&eacute;todos previenen que un usuario pueda acceder a la p&aacute;gina principal de su foro. Para prevenir que un usuario vuelva a registrarse puede inhibir su direcci&oacute;n de e-mail. Por favor, note que inhibiendo s&oacute;lo la direcci&oacute;n de correo no prevendr&aacute; que ese usuario se conecte y publique mensajes. Debe usar uno de los m&eacute;todos descritos m&aacute;s arriba.',
	'Ban_explain_warn' => 'Tenga en cuenta que colocando un rango de direcciones IP, excluye del acceso al foro a todas las direcciones que se encuentran dentro de ese rango. Si realmente debe utilizar un rango, intente usar uno peque&ntilde;o, para as&iacute; no excluir a otros usuarios.',

	'Select_username' => 'Seleccione un usuario',
	'Select_ip' => 'Seleccione una direcci&oacute;n IP',
	'Select_email' => 'Seleccione una direcci&oacute;n de e-mail',

	'Ban_username' => 'Excluir uno o m&aacute;s usuarios',
	'Ban_username_explain' => 'Puede excluir m&uacute;ltiples usuarios con un solo movimiento, usando la combinaci&oacute;n apropiada de rat&oacute;n y teclado seg&uacute;n su navegador',

	'Ban_IP' => 'Excluir una o m&aacute;s direcciones IP o nombres de dominio (hosts)',
	'IP_hostname' => 'Direcciones IP o nombres de dominio (hosts)',
	'Ban_IP_explain' => 'Para especificar varias direcciones IP o nombres de dominio (hosts), sep&aacute;relos con una coma. Para especificar un rango de direcciones IP, separe el inicio y el final con un gui&oacute;n (-); para especificar un comod&iacute;n use el asterisco (*).',

	'Ban_email' => 'Excluir una o m&aacute;s direcciones de e-mail',
	'Ban_email_explain' => 'Para especificar m&aacute;s de una direcci&oacute;n de e-mail, sep&aacute;relas con una coma. Para especificar un comod&iacute;n, use * como en *@hotmail.com',

	'Unban_username' => 'Quitar exclusi&oacute;n a uno o m&aacute;s usuarios',
	'Unban_username_explain' => 'Puede quitar la exclusi&oacute;n a m&uacute;ltiples usuarios con un solo movimiento, usando la combinaci&oacute;n apropiada de rat&oacute;n y teclado seg&uacute;n su navegador',

	'Unban_IP' => 'Desinhibir una o m&aacute;s direcciones IP o nombres de dominio (hosts)',
	'Unban_IP_explain' => 'Puede quitar la exclusi&oacute;n a m&uacute;ltiples direcciones IP o nombres de dominio (hosts) con un solo movimiento, usando la combinaci&oacute;n apropiada de rat&oacute;n y teclado seg&uacute;n su navegador',

	'Unban_email' => 'Desinhibir una o m&aacute;s direcciones de e-mail',
	'Unban_email_explain' => 'Puede quitar la exclusi&oacute;n a m&uacute;ltiples direcciones de e-mail con un solo movimiento, usando la combinaci&oacute;n apropiada de rat&oacute;n y teclado seg&uacute;n su navegador',

	'No_banned_users' => 'No hay usuarios excluidos',
	'No_banned_ip' => 'No hay IPs excluidas',
	'No_banned_email' => 'No hay e-mails excluidos',

	'Ban_update_sucessful' => 'La lista de excluidos ha sido actualizada con &eacute;xito',
	'Click_return_banadmin' => 'Pulse %saqu&iacute;%s para volver al control de exclusiones',

// Configuration
	'General_Config' => 'Configuraci&oacute;n general',
	'Config_explain' => 'El siguiente formulario le permitir&aacute; personalizar todas las opciones generales de su sitio. Para configurar usuarios y foros use los enlaces correspondientes en el panel de la izquierda.',

	'Click_return_config' => 'Pulse %saqu&iacute;%s para volver a la configuraci&oacute;n general',

	'General_settings' => 'Configuraci&oacute;n general del sitio',
	'Server_name' => 'Nombre de dominio',
	'Server_name_explain' => 'El nombre de dominio desde donde funciona el foro',
	'Script_path' => 'Ubicaci&oacute;n de scripts',
	'Script_path_explain' => 'La ubicaci&oacute;n donde se halla instalado phpBB2 en relaci&oacute;n al nombre de dominio',
	'Server_port' => 'Puerto del servidor',
	'Server_port_explain' => 'El puerto en el que funciona el servidor, generalmente 80. C&aacute;mbielo s&oacute;lo si es diferente',
	'Site_name' => 'Nombre del sitio',
	'Site_desc' => 'Descripci&oacute;n del sitio',
	'Board_disable' => 'Desactivar foro',
	'Board_disable_explain' => 'Esto har&aacute; que el foro no est&eacute; disponible para los usuarios. NO desconecte su nombre de usuario mientras el foro est&eacute; desactivado o no podr&aacute; conectarse de nuevo. Los administradores pueden acceder al panel de administraci&oacute;n mientras el foro est&aacute; deshabilitado.',
	'Acct_activation' => 'Habilitar activaci&oacute;n de cuenta',
	'Acc_None' => 'No', // These three entries are the type of activation
	'Acc_User' => 'Por el usuario',
	'Acc_Admin' => 'Por el admin',

	'Abilities_settings' => 'Configuraci&oacute;n b&aacute;sica de usuarios y foros',
	'Max_poll_options' => 'N&uacute;mero m&aacute;ximo de opciones para encuestas',
	'Flood_Interval' => 'Intervalo entre env&iacute;os (Flood)',
	'Flood_Interval_explain' => 'Cantidad de segundos que un usuario debe esperar antes de poder hacer otro env&iacute;o', 
	'Board_email_form' => 'Enviar e-mail a trav&eacute;s del sitio',
	'Board_email_form_explain' => 'Los usuarios env&iacute;an e-mails unos a otros a trav&eacute;s del sitio',
	'Topics_per_page' => 'Temas por p&aacute;gina',
	'Posts_per_page' => 'Respuestas por p&aacute;gina',
	'Hot_threshold' => 'Respuestas necesarias para ser considerado popular',
	'Default_style' => 'Estilo por defecto',
	'Override_style' => 'Ignorar el estilo del usuario',
	'Override_style_explain' => 'Reemplazar el estilo del usuario por el estilo por defecto',
	'Default_language' => 'Lenguaje por defecto',
	'Date_format' => 'Formato de fecha',
	'System_timezone' => 'Zona horaria del sistema',
	'Enable_gzip' => 'Habilitar compresi&oacute;n gzip',
// Start Gzip Compression Level MOD
	'Gzip_level' => 'Nivel de compresi&oacute;n gzip',
	'Gzip_level_explain' => 'Aqu&iacute; puede cambiar el nivel de compresi&oacute;n gzip con un n&uacute;mero entre 0 y 9. 0 es equivalente a apagado, 1 es muy bajo, y 9 es el m&aacute;ximo. 9 es el recomendado.',
// End Gzip Compression Level MOD
	'Enable_prune' => 'Habilitar limpieza (Pruning) de los foros',
	'Allow_HTML' => 'Permitir HTML',
	'Allow_BBCode' => 'Permitir BBCode',
	'Allowed_tags' => 'Etiquetas HTML permitidas',
	'Allowed_tags_explain' => 'Separe las etiquetas con comas',
	'Allow_smilies' => 'Permitir emoticonos',
	'Smilies_path' => 'Ubicaci&oacute;n de los emoticonos',
	'Smilies_path_explain' => 'Ruta desde el directorio phpBB , por ejemplo: images/smilies',
	'Allow_sig' => 'Permitir firmas',
	'Max_sig_length' => 'M&aacute;xima longitud de firmas',
	'Max_sig_length_explain' => 'El m&aacute;ximo de caracteres que puede tener una firma',
	'Allow_name_change' => 'Permitir cambiar de nombre de usuario',

	'Avatar_settings' => 'Configuraciones de avatares',
	'Allow_local' => 'Habilitar galer&iacute;a de avatares',
	'Allow_remote' => 'Habilitar avatares remotos',
	'Allow_remote_explain' => 'Avatares vinculados desde otros sitios',
	'Allow_upload' => 'Habilitar subir avatar',
	'Max_avatar_filesize' => 'Tama&ntilde;o m&aacute;ximo de archivo de avatar',
	'Max_avatar_filesize_explain' => 'Para los avatares subidos (en bytes)',
	'Max_avatar_size' => 'Dimensiones m&aacute;ximas para los avatares',
	'Max_avatar_size_width' => 'Anchura m&aacute;xima',
	'Max_avatar_size_height' => 'Altura m&aacute;xima',
	'Max_avatar_size_explain' => 'Dimensi&oacute;n en p&iacute;xeles',
	'Avatar_storage_path' => 'Ubicaci&oacute;n de los avatares',
	'Avatar_storage_path_explain' => 'La ubicaci&oacute;n donde se encuentran los avatares, por ej. images/avatars',
	'Avatar_gallery_path' => 'Ubicaci&oacute;n de la galer&iacute;a de avatares',
	'Avatar_gallery_path_explain' => 'La ubicaci&oacute;n donde se encuentra(n) la(s) galer&iacute;a(s) de avatares, por ej. images/avatars/gallery',

	'COPPA_settings' => 'Configuraciones COPPA',
	'COPPA_fax' => 'N&uacute;mero de fax COPPA',
	'COPPA_mail' => 'Direcci&oacute;n de correo de COPPA',
	'COPPA_mail_explain' => 'Esta es la direcci&oacute;n a donde los padres o tutores legales enviar&aacute;n los formularios de COPPA',

	'Email_settings' => 'Configuraciones de e-mail',
	'Admin_email' => 'Direcci&oacute;n de e-mail del administrador',
	'Email_sig' => 'Firma del e-mail',
	'Email_sig_explain' => 'Este texto ser&aacute; a&ntilde;adido a todos los e-mails que env&iacute;e el foro',
	'Use_SMTP' => 'Usar servidor SMTP para el correo',
	'Use_SMTP_explain' => 'Marque "S&Iacute;" si desea enviar e-mails a trav&eacute;s de un servidor externo, en vez de con la funci&oacute;n local de env&iacute;o',
	'SMTP_server' => 'Direcci&oacute;n del servidor SMTP',
	'SMTP_port' => 'Puerto SMTP',
	'SMTP_username' => 'Usuario SMTP',
	'SMTP_username_explain' => 'Ingrese un nombre de usuario s&oacute;lo si su servidor SMTP lo requiere',
	'SMTP_password' => 'Clave SMTP',
	'SMTP_password_explain' => 'Ingrese una clave s&oacute;lo si su servidor SMTP lo requiere',

	'Disable_privmsg' => 'Mensaje privado',
	'Inbox_limits' => 'Cantidad m&aacute;xima de mensajes en la bandeja de entrada',
	'Sentbox_limits' => 'Cantidad m&aacute;xima de mensajes en la carpeta de enviados',
	'Savebox_limits' => 'Cantidad m&aacute;xima de mensajes en la carpeta de guardados',

	'Cookie_settings' => 'Configuraci&oacute;n de las cookies', 
	'Cookie_settings_explain' => 'Estos detalles definen c&oacute;mo las cookies se env&iacute;an a sus usuarios a trav&eacute;s de su navegador. En la mayor&iacute;a de los casos, la configuraci&oacute;n por defecto deber&iacute;a bastar. Pero si necesita cambiarla h&aacute;galo con cuidado: una configuraci&oacute;n incorrecta podr&iacute;a ocasionar que sus usuarios no pudiesen ingresar al foro',
	'Cookie_domain' => 'Dominio de la cookie',
	'Cookie_name' => 'Nombre de la cookie',
	'Cookie_path' => 'Ruta de la cookie',
	'Cookie_secure' => 'Cookie segura [ https ]',
	'Cookie_secure_explain' => 'Si su servidor permite SSL, active esta opci&oacute;n. Si no, d&eacute;jela desactivada',
	'Session_length' => 'Duraci&oacute;n de la sesi&oacute;n [ segundos ]',
    'SESSION_LAST_VISIT_RESET' => 'Refrescar Ultima Visita, si la session exp&iacut;ro',
	'SESSION_LAST_VISIT_RESET_EXPLAIN' => 'Si habilita esta Opcion, las Ultimas Visitas seran actualizadas, aunque la session expire. De otro Modo, solo sera actualizada, cuando AutoLogin esta habilitado, y la session expire.',

// Visual Confirmation
	'Visual_confirm' => 'Activar confirmaci&oacute;n visual',
	'Visual_confirm_explain' => 'Requiere que los usuarios ingresen un c&oacute;digo definido por una imagen cuando se registran.',

// Autologin Keys - added 2.0.18
	'Allow_autologin' => 'Permite conexi&oacute;n autom&aacute;tica',
	'Allow_autologin_explain' => 'Determina que a los usuarios se les permitir&aacute; elegir si quieren ser conectados autom&aacute;ticamente en el foro.',
	'Autologin_time' => 'Expirado de la clave de conexi&oacute;n autom&aacute;tica',
	'Autologin_time_explain' => 'Cu&aacute;nto tiempo dura, en d&iacute;as, la clave de conexi&oacute;n si el usuario no visita el foro. Poner 0 (cero) para desactivar el expirado.',

// Forum Management
	'Forum_admin' => 'Administraci&oacute;n de foros',
	'Forum_admin_explain' => 'Desde este panel puede agregar, borrar, modificar, reordenar y resincronizar categor&iacute;as y foros',
	'Edit_forum' => 'Editar foro',
	'Create_forum' => 'Crear nuevo foro',
	'Create_category' => 'Crear nueva categor&iacute;a',
	'Remove' => 'Quitar',
	'Action' => 'Acci&oacute;n',
	'Update_order' => 'Actualizar orden',
	'Config_updated' => 'Configuraci&oacute;n actualizada correctamente',
	'Move_up' => 'Subir',
	'Move_down' => 'Bajar',
	'Resync' => 'Sincronizar',
	'No_mode' => 'No se especific&oacute; ning&uacute;n modo',
	'Forum_edit_delete_explain' => 'El siguiente formulario le permitir&aacute; personalizar todas las opciones generales de su foro. Para configurar usuarios y foros use los enlaces correspondientes en el panel de la izquierda',
	'Forum_Expand' => 'Expandir',
	'Forum_Collapse' => 'Reducir',
	'Forum_Expand_all' => 'Expandir todo',
	'Forum_Collapse_all' => 'Reducir todo',

	'Move_contents' => 'Mover todo el contenido',
	'Forum_delete' => 'Borrar foro',
	'Forum_delete_explain' => 'El siguiente formulario le permitir&aacute; borrar un foro (o categor&iacute;a) y decidir d&oacute;nde quiere ubicar todos los temas (o foros) que conten&iacute;a.',

	'Status_locked' => 'Bloqueado',
	'Status_unlocked' => 'Desbloqueado',
	'Forum_settings' => 'Configuraci&oacute;n general de foro',
	'Forum_name' => 'Nombre del foro',
	'Forum_desc' => 'Descripci&oacute;n',
	'Forum_status' => 'Estado del foro',
	'Forum_pruning' => 'Auto-Limpieza (pruning)',

	'prune_freq' => 'Verificar antigüedad de temas cada',
	'prune_days' => 'Eliminar temas que no han recibido respuestas por espacio de',
	'Set_prune_data' => 'Ha activado auto-limpieza (pruning) para este foro, pero no ha indicado la cantidad de d&iacute;as para el vencimiento. Por favor, regrese e ind&iacute;quelo.',

	'FORUM_SIMILAR_TOPICS' => 'Temas similares',
	'FORUM_SIMILAR_TOPICS_EXPLAIN' => 'Si activa esta opci&oacute;n ver&aacute; un cuadro de temas similares en la parte inferior del foro (tenga en cuenta que tambi&eacute;n necesita tener activada la opci&oacute;n global de esta caracter&iacute;stica en la configuraci&oacute;n Icy Phoenix => SEO)',
	'FORUM_TOPIC_VIEWS' => 'Visor de temas',
	'FORUM_TOPIC_VIEWS_EXPLAIN' => 'Si activa esta opci&oacute;n todos los usuarios que vean mensajes en este foro ser&aacute;n almacenados en la BD (tenga en cuenta que tambi&eacute;n necesita tener activada la opci&oacute;n global de esta caracter&iacute;stica en la configuraci&oacute;n Icy Phoenix => SQL)',
	'FORUM_TAGS' => 'Palabras del foro',
	'FORUM_TAGS_EXPLAIN' => 'Si activa esta opci&oacute;n ver&aacute; un cuadro con las palabras mas usadas en este foro (tenga en cuenta que tambi&eacute;n necesita tener activada la opci&oacute;n global de esta caracter&iacute;stica en la configuraci&oacute;n Icy Phoenix => SEO)',
	'FORUM_SORT_BOX' => 'Orden de mensajes',
	'FORUM_SORT_BOX_EXPLAIN' => 'Si activa esta opci&oacute;n ver&aacute; un cuadro que le permitir&aacute; ordenar alfab&eacute;ticamente los temas en este foro (tenga en cuenta que tambi&eacute;n necesita tener activada la opci&oacute;n global de esta caracter&iacute;stica en la configuraci&oacute;n Icy Phoenix)',
	'FORUM_KB_MODE' => 'Modo biblioteca',
	'FORUM_KB_MODE_EXPLAIN' => 'Si activa esta opci&oacute;n este foro se mostrar&aacute; en modo biblioteca (temas listados como en la biblioteca)',
	'FORUM_INDEX_ICONS' => 'Iconos en el &iacute;ndice',
	'FORUM_INDEX_ICONS_EXPLAIN' => 'Si activa esta opci&oacute;n ver&aacute;  iconos para RSS y nuevo tema en el &iacute;ndice de foros (tenga en cuenta que tambi&eacute;n necesita tener activada la opci&oacute;n global de esta caracter&iacute;stica en la configuraci&oacute;n Icy Phoenix)',

	'Move_and_Delete' => 'Mover y borrar',

	'Delete_all_posts' => 'Borrar todos los ingresos',
	'Nowhere_to_move' => 'No ha especificado un destino',

	'Edit_Category' => 'Modificar categor&iacute;a',
	'Edit_Category_explain' => 'Use este formulario para modificar el nombre de una categor&iacute;a.',

	'Forums_updated' => 'Informaci&oacute;n de foro y categor&iacute;a actualizada correctamente',

	'Must_delete_forums' => 'Necesita borrar todos los foros para poder borrar esta categor&iacute;a',

	'Click_return_forumadmin' => 'Pulse %saqu&iacute;%s para volver a la administraci&oacute;n de foros',

// Smiley Management
	'smiley_title' => 'Utilidad de modificaci&oacute;n de emoticonos (Smileys)',
	'smile_desc' => 'Desde esta p&aacute;gina usted puede agregar, borrar y modificar los emoticonos que los usuarios pueden usar en sus mensajes, tanto p&uacute;blicos como privados. Por favor tenga en cuenta que si su servidor lo soporta, podr&aacute; tambi&eacute;n ordenar los emoticonos r&aacute;pidamente usando el m&eacute;todo de arrastrar y soltar.',

	'smiley_config' => 'Configuraci&oacute;n de emoticono',
	'smiley_code' => 'C&oacute;digo de emoticono',
	'smiley_url' => 'Archivo de imagen de emoticono',
	'smiley_emot' => 'Emoci&oacute;n de emoticono',
	'smile_add' => 'Agregar nuevo emoticono',
	'Smile' => 'Emoticono',
	'Emotion' => 'Emoci&oacute;n',

	'Select_pak' => 'Seleccionar un archivo .pak',
	'replace_existing' => 'Reemplazar emoticonos existentes',
	'keep_existing' => 'Mantener emoticonos existentes',
	'smiley_import_inst' => 'Debe descomprimir el paquete de emoticonos y subir todos los archivos en el directorio de emoticonos para as&iacute; lograr su correcta instalaci&oacute;n. Luego, seleccione la informaci&oacute;n correcta desde este formulario para poder importar los emoticonos',
	'smiley_import' => 'Importar un paquete de emoticonos',
	'choose_smile_pak' => 'Seleccione un paquete de emoticonos .pak',
	'import' => 'Importar emoticonos',
	'smile_conflicts' => 'Qu&eacute; deber&iacute;a hacerse en caso de conflictos',
	'del_existing_smileys' => 'Borrar los emoticonos existentes antes de importar',
	'import_smile_pack' => 'Importar paquete de emoticonos',
	'export_smile_pack' => 'Crear paquete de emoticonos',
	'export_smiles' => 'Para crear un paquete de emoticonos a partir de sus actuales emoticonos instalados, pulse %saqu&iacute;%s para descargar el archivo smiles.pak. Renombre este archivo apropiadamente, pero aseg&uacute;rese de que se mantenga la extensi&oacute;n .pak. Luego cree un archivo .zip conteniendo todas las im&aacute;genes de emoticonos y agr&eacute;guele este archivo de configuraci&oacute;n .pak.',

	'smiley_add_success' => 'El emoticono fue agregado correctamente',
	'smiley_edit_success' => 'El emoticono fue actualizado correctamente',
	'smiley_import_success' => 'El paquete de emoticonos fue importado correctamente',
	'smiley_del_success' => 'El emoticono fue eliminado correctamente',
	'Click_return_smileadmin' => 'Pulse %saqu&iacute;%s para volver a la administraci&oacute;n de emoticonos',

// User Management
	'User_admin' => 'Administraci&oacute;n de usuarios',
	'User_admin_explain' => 'Desde aqu&iacute; puede cambiar la informaci&oacute;n de sus usuarios y ciertas opciones. Para modificar los permisos de usuario, por favor, use el sistema de permisos de usuarios y grupos.',

	'Look_up_user' => 'Observar usuario',

	'Admin_user_fail' => 'No se pudo actualizar el perfil del usuario.',
	'Admin_user_updated' => 'El perfil del usuario fue actualizado correctamente.',
	'Click_return_useradmin' => 'Pulse %saqu&iacute;%s para volver al panel de administraci&oacute;n de usuarios',
//Start Quick Administrator User Options and Information MOD
	'Click_return_userprofile' => 'Pulse %saqu&iacute;%s para volver al perfil del usuario',
//End Quick Administrator User Options and Information MOD
	'User_delete' => 'Borrar este usuario',
	'User_delete_explain' => 'Pulse aqu&iacute; para borrar este usuario. Tenga en cuenta que luego no podr&aacute; restaurarlo.',
	'User_deleted' => 'El usuario fue borrado correctamente.',

	'User_status' => 'Usuario activo',
	'User_allowpm' => 'Puede enviar mensajes privados',
	'User_allowavatar' => 'Puede mostrar su avatar',

	'Admin_avatar_explain' => 'Desde aqu&iacute; puede ver y borrar el avatar actual del usuario.',

	'User_special' => 'Campos s&oacute;lo para administraci&oacute;n',
	'User_special_explain' => 'Estos campos no pueden ser modificados por los usuarios. Desde aqu&iacute; puede configurar el estado y otras opciones que est&aacute;n ocultas a los usuarios.',

// Group Management
	'Group_administration' => 'Administraci&oacute;n de grupos',
	'Group_admin_explain' => 'Desde este panel puede administrar todos sus grupos de usuarios. Puede borrar, crear y modificar grupos. Puede asignar moderadores, abrir o cerrar grupos, y cambiar sus nombres y descripciones',
	'Error_updating_groups' => 'Ha habido un error mientras se actualizaban los grupos',
	'Updated_group' => 'El grupo fue actualizado correctamente',
	'Added_new_group' => 'El nuevo grupo fue creado correctamente',
	'Deleted_group' => 'El grupo fue borrado correctamente',
	'New_group' => 'Crear nuevo grupo',
	'Edit_group' => 'Editar grupo',
	'group_name' => 'Nombre del grupo',
	'group_description' => 'Descripci&oacute;n del grupo',
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
	'No_group_action' => 'No se especific&oacute; una acci&oacute;n',
	'delete_group_moderator' => '&iquest;Borrar el antiguo moderador del grupo?',
	'delete_moderator_explain' => 'Si est&aacute; cambiando el moderador del grupo, active esta casilla para borrar el antiguo moderador. Si no, no la active, y el usuario se convertir&aacute; en un usuario normal del grupo.',
	'Click_return_groupsadmin' => 'Pulse %saqu&iacute;%s para volver a administraci&oacute;n de grupos.',
	'Select_group' => 'Seleccione un grupo',
	'Look_up_group' => 'Observar grupo',

// Prune Administration
	'Forum_Prune' => 'Vencimiento (Prune) de foros',
	'Forum_Prune_explain' => 'Este proceso eliminar&aacute; los temas que no tengan mensajes nuevos en la cantidad de d&iacute;as especificados. Si no ingresa un n&uacute;mero entonces se borrar&aacute;n TODOS los temas. No se remover&aacute;n temas donde haya encuestas activas ni anuncios. Necesitar&aacute; remover estos temas manualmente.',
	'Do_Prune' => 'Ejecutar vencimientos',
	'All_Forums' => 'Todos los foros',
	'Prune_topics_not_posted' => 'Borrar temas sin respuestas en esta cantidad de d&iacute;as',
	'Topics_pruned' => 'Temas borrados',
	'Posts_pruned' => 'Mensajes borrados',
	'Prune_success' => 'El proceso de vencimiento (Pruning) de foros se ha completado correctamente',

// Word censor
	'Words_title' => 'Control de palabras censuradas',
	'Words_explain' => 'Desde este panel puede agregar, modificar o remover palabras que ser&aacute;n autom&aacute;ticamente censuradas en sus foros. Adem&aacute;s, los usuarios no podr&aacute;n registrar nombres que contengan estas palabras. Se aceptan los comodines (*) en el campo de palabras. Por ejemplo, *pito* coincidir&aacute; con sapitos;, pito* coincidir&aacute; con pitos, o *pito coincidir&aacute; con compito.',
	'Word' => 'Palabra',
	'Edit_word_censor' => 'Editar el censor de palabras',
	'Replacement' => 'Reemplazar',
	'Add_new_word' => 'Agregar nueva palabra',
	'Update_word' => 'Actualizar censor de palabras',

	'Must_enter_word' => 'Debe ingresar una palabra y otra palabra para reemplazarla',
	'No_word_selected' => 'No seleccion&oacute; ninguna palabra para modificar',

	'Word_updated' => 'La censura de palabra fue actualizada correctamente',
	'Word_added' => 'La censura de palabra fue agregada correctamente',
	'Word_removed' => 'La censura de palabra fue eliminada correctamente',

	'Click_return_wordadmin' => 'Pulse %saqu&iacute;%s para volver a administraci&oacute;n de palabras censuradas',

// Mass Email
	'Mass_email_explain' => 'Aqu&iacute; puede enviar un correo a todos sus usuarios o a usuarios de alg&uacute;n grupo espec&iacute;fico. Para esto, se enviar&aacute; un correo a la direcci&oacute;n de administraci&oacute;n suministrada, con una copia oculta a todos los destinatarios. Si est&aacute; enviando correo a una gran cantidad de personas, por favor sea paciente despu&eacute;s de enviarlo y no detenga la p&aacute;gina a mitad de proceso. Es normal que un env&iacute;o masivo de correo tome tiempo y ser&aacute; notificado cuando haya terminado',
	'Compose' => 'Escribir', 

	'Recipients' => 'Destinatarios', 
	'All_users' => 'Todos los usuarios',

	'Email_successfull' => 'Su mensaje ha sido enviado',
	'Click_return_massemail' => 'Pulse %saqu&iacute;%s para volver al panel de correo masivo',

// Ranks admin
	'Ranks_title' => 'Administraci&oacute;n de rangos',
	'Ranks_explain' => 'Usando este formulario puede agregar, borrar, ver o modificar rangos. Tambi&eacute;n puede crear rangos especiales que pueden ser asignados a usuarios particulares usando la administraci&oacute;n de usuarios',

	'Add_new_rank' => 'Agregar nuevo rango',

	'Rank_title' => 'T&iacute;tulo del rango',
	'Rank_special' => 'Marcar como rango especial',
	'Rank_minimum' => 'Cantidad m&iacute;nima de mensajes',
	'Rank_maximum' => 'Cantidad m&aacute;xima de mensajes',
	'Rank_image' => 'Imagen del rango (tenga en cuenta la ruta ra&iacute;z del foro)',
	'Rank_image_explain' => 'Use esto para definir una peque&ntilde;a imagen asociada al rango',

	'Must_select_rank' => 'Debe elegir un rango',
	'No_assigned_rank' => 'No se asignaron rangos especiales',

	'Rank_updated' => 'El rango fue actualizado correctamente',
	'Rank_added' => 'El rango fue agregado correctamente',
	'Rank_removed' => 'El rango fue borrado correctamente',
	'No_update_ranks' => 'El rango fue borrado correctamente. Sin embargo, las cuentas de usuario con este rango no han sido actualizadas. Tendr&aacute; que hacerlo manualmente en esas cuentas',

	'Click_return_rankadmin' => 'Pulse %saqu&iacute;%s para volver al panel de administraci&oacute;n de rangos',

// Disallow Username Admin
	'Disallow_control' => 'Control de nombres prohibidos',
	'Disallow_explain' => 'Desde aqu&iacute; puede especificar nombres de usuarios que no se permitir&aacute;n. Se pueden usar comodines (*). No podr&aacute; agregar nombres que YA est&eacute;n registrados. Debe primero borrar esos usuarios para deshabilitarlos o prohibirlos.',

	'Delete_disallow' => 'Borrar',
	'Delete_disallow_title' => 'Borrar nombre prohibido',
	'Delete_disallow_explain' => 'Puede borrar un nombre prohibido seleccion&aacute;ndolo de esta lista y pulsando en enviar',

	'Add_disallow' => 'Agregar',
	'Add_disallow_title' => 'Agregar un nombre prohibido',
	'Add_disallow_explain' => 'Puede deshabilitar un nombre de usuario usando caracteres comod&iacute;n (*) para que coincidan con diversas posibilidades',

	'No_disallowed' => 'No hay nombres prohibidos',

	'Disallowed_deleted' => 'El nombre prohibido se ha borrado correctamente',
	'Disallow_successful' => 'El nombre prohibido se ha agregado correctamente',
	'Disallowed_already' => 'El nombre que usted ingres&oacute; no pudo ser deshabilitado. O bien ya existe en la lista, o existe en la censura de palabras, o existe un usuario con ese nombre.',

	'Click_return_disallowadmin' => 'Pulse %saqu&iacute;%s para volver al panel de administraci&oacute;n de nombres de usuario',

// Styles Admin
	'Styles_admin' => 'Administraci&oacute;n de estilos',
	'Styles_explain' => 'Mediante este panel puede agregar, quitar y administrar estilos (plantillas y temas) disponibles para sus usuarios',
	'Styles_addnew_explain' => 'La lista siguiente contiene todos los estilos disponibles para su foro. Los &iacute;tem en esta lista no han sido todav&iacute;a instalados en la base de datos de phpBB. Para instalar un estilo, simplemente pulse en el enlace "instalar" al lado de alguno de los estilos.',

	'Select_template' => 'Seleccione un estilo',

	'Style' => 'Estilo',
	'Template' => 'Plantilla (Template)',
	'Download' => 'Descargar',

	'Edit_theme' => 'Modificar estilo',
	'Edit_theme_explain' => 'En el siguiente formulario puede modificar la configuraci&oacute;n del estilo seleccionado',

	'Create_theme' => 'Crear estilo',
	'Create_theme_explain' => 'Use el siguiente formulario para crear un estilo nuevo en base a una plantilla. Cuando ingresa colores (para los cuales debe usar el valor hexadecimal) no debe incluir el # inicial, ej. CCCCCC es v&aacute;lido, #CCCCCC no lo es',

	'Export_themes' => 'Exportar estilos',
	'Export_explain' => 'En este panel podr&aacute; exportar un estilo para una plantilla en particular. Seleccione la plantilla de la lista y el programa (script) crear&aacute; el archivo de configuraci&oacute;n y tratar&aacute; de grabarlo en la carpeta correspondiente. Si no se puede grabar el archivo se le dar&aacute; la opci&oacute;n de descargarlo. Para que el programa pueda grabar el archivo debe darle permisos de escritura a la carpeta de plantillas (template) en el ftp de su foro. Para m&aacute;s informaci&oacute;n vea la gu&iacute;a de phpBB2.',

	'Theme_installed' => 'El estilo seleccionado fue instalado correctamente',
	'Style_removed' => 'El estilo seleccionado ha sido borrado de la base de datos. Para eliminarlo completamente debe borrar la carpeta correspondiente al estilo, en el ftp de su foro.',
	'Theme_info_saved' => 'La informaci&oacute;n de estilo para la plantilla seleccionada ha sido guardada. Deber&iacute;a volver los permisos de la carpeta del estilo y el theme_info.cfg a s&oacute;lo lectura',
	'Theme_updated' => 'El estilo seleccionado ha sido actualizado. Ahora deber&iacute;a exportarlo',
	'Theme_created' => 'Estilo creado. Ahora deber&iacute;a exportarlo al archivo de configuraci&oacute;n para poder usarlo en otros sitios',

	'Confirm_delete_style' => '&iquest;Est&aacute; seguro de que quiere borrar este estilo?',

	'Download_theme_cfg' => 'El exportador no pudo escribir la informaci&oacute;n de configuraci&oacute;n del estilo. Pulse en el bot&oacute;n de abajo para descargar el archivo con su navegador. Una vez descargado podr&aacute; transferirlo a la carpeta (templates) que contiene la plantilla. Luego podr&aacute; hacer un paquete de distribuci&oacute;n o usarlo en otros sitios',
	'No_themes' => 'La plantilla seleccionada no tiene estilos adjuntos. Para crear un nuevo estilo pulse en crear estilo en el panel izquierdo',
	'No_template_dir' => 'No se puede abrir la carpeta de la plantilla. Puede que el servidor no tenga acceso al no tener habilitados los permisos de escritura o que no exista',
	'Cannot_remove_style' => 'No puede eliminar el estilo seleccionado, ya que es el estilo por defecto del foro. Por favor, cambie el estilo por defecto del foro y vuelva a intentarlo.',
	'Style_exists' => 'El nombre de estilo seleccionado ya existe. Por favor, vuelva atr&aacute;s y elija un nombre diferente.',

	'Click_return_styleadmin' => 'Pulse %saqu&iacute;%s para volver al panel de administraci&oacute;n de estilos',

	'Theme_settings' => 'Configuraci&oacute;n de estilos',
	'Theme_element' => 'Elemento de estilos',
	'Simple_name' => 'Nombre simple',
	'Save_Settings' => 'Guardar configuraci&oacute;n',

	'Stylesheet' => 'CSS stylesheet',
	'Stylesheet_explain' => 'Nombre del archivo CSS a usar para esta plantilla.',
	'Background_image' => 'Imagen de fondo',
	'Background_color' => 'Color de fondo',
	'Theme_name' => 'Nombre del estilo',
	'Link_color' => 'Color de enlace',
	'Text_color' => 'Color de texto',
	'VLink_color' => 'Color de enlace visitado',
	'ALink_color' => 'Color de enlace activo',
	'HLink_color' => 'Color de enlace con el puntero del rat&oacute;n encima',
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
	'Userlist_description' => 'Ver la lista completa de los usuarios y varias acciones m&aacute;s',

	'Add_group' => 'A&ntilde;adir al grupo',
	'Add_group_explain' => 'Seleccione el grupo al que a&ntilde;adir el usuario seleccionado',

	'Open_close' => 'Abrir/cerrar',
	'Active' => 'Activo',
	'Group' => 'Grupo(s)',
	'Rank' => 'Rango',
	'Last_activity' => '&Uacute;ltima actividad',
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

	'Confirm_user_ban' => '&iquest;Est&aacute; seguro de querer excluir a los usuarios seleccionados?',
	'Confirm_user_deleted' => '&iquest;Est&aacute; seguro de querer borrar a los usuarios seleccionados?',

	'User_status_updated' => 'Estado de usuario(s) actualizado',
	'User_banned_successfully' => 'Usuario(s) excluido(s) correctamente',
	'User_deleted_successfully' => 'Usuario(s) borrado(s) correctamente',
	'User_add_group_successfully' => 'Usuario(s) a&ntilde;adido(s) al grupo correctamente',

	'Click_return_userlist' => 'Pulse %saqu&iacute;%s para volver a lista de usuarios',
//
// Admin Userlist End

// Version Check
	'Version_up_to_date' => 'Su versi&oacute;n de phpBB es la m&aacute;s actual. No hay actualizaciones de phpBB disponibles para su versi&oacute;n.',
	'Version_up_to_date_ip' => 'No hay actualizaciones disponibles para su versi&oacute;n de Icy Phoenix',
	'Version_not_up_to_date' => 'Su versi&oacute;n de phpBB parece <b>no</b> ser la m&aacute;s actual. Hay actualizaciones disponibles para su versi&oacute;n de phpBB, visite <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a> para obtener la &uacute;ltima versi&oacute;n.',
	'Version_not_up_to_date_ip' => 'Actualizaci&oacute;n disponible para su versi&oacute;n de Icy Phoenix, visite <a href="http://www.icyphoenix.com" target="_new">Icy Phoenix</a> para m&aacute;s informaci&oacute;n.',
	'Latest_version_info' => 'La &uacute;ltima versi&oacute;n disponible es la <b>phpBB %s</b>.',
	'Current_version_info' => 'Usted est&aacute; utilizando <b>phpBB %s</b>.',
	'Connect_socket_error' => 'No se puede abrir una conexi&oacute;n al servidor de phpBB. El mensaje de error remitido es:<br />%s',
	'Connect_socket_error_ip' => 'No ha sido posible abrir una conexi&oacute;n con el servidor de Icy Phoenix',
	'Socket_functions_disabled' => 'No se pueden usar funciones de socket.',
	'Mailing_list_subscribe_reminder' => 'Para ser informado de las &uacute;ltimas actualizaciones de phpBB, &iquest;por qu&eacute; no se dirige a <a href="http://www.phpbb.com/support/" target="_new">esta direcci&oacute;n</a> para suscribirse a nuestra lista de correo?',
	'Version_information' => 'Informaci&oacute;n de versi&oacute;n',
	'Version_not_checked' => 'La comprobaci&oacute;n de la versi&oacute;n est&aacute; deshabilitada. Visite el foro oficial para m&aacute;s informaci&oacute;n.',

// Advanced Signature Divider Control
	'sig_title' => 'Control avanzado de divisi&oacute;n de firma',
	'sig_divider' => 'Divisi&oacute;n actual de la firma',
	'sig_explain' => 'Aqu&iacute; puede controlar que divisi&oacute;n tendr&aacute;n los usuarios en sus firmas para cada mensaje',

// BIRTHDAY - BEGIN
	'Birthday_required' => 'Establecer como obligatoria la fecha de nacimiento', 
	'Enable_birthday_greeting' => 'Activar el pop-up de felicitaci&oacute;n',
	'Birthday_greeting_explain' => 'Los usuarios que hayan introducido su fecha de nacimiento recibir&aacute;n un popup felicit&aacute;ndoles por su cumplea&ntilde;os al entrar en el foro.',
	'Next_birthday_greeting' => 'A&ntilde;o del pr&oacute;ximo cumplea&ntilde;os',
	'Next_birthday_greeting_explain' => 'Este campo guarda la fecha del pr&oacute;ximo a&ntilde;o en el que se le enviar&aacute; de nuevo al usuario el popup de felicitaci&oacute;n.',
	'Wrong_next_birthday_greeting' => 'El a&ntilde;o pr&oacute;ximo que ha elegido para el cumplea&ntilde;os no es v&aacute;lido. Por favor, vuelva a intentarlo.',
	'Max_user_age' => 'L&iacute;mite de edad de los usuarios',
	'Min_user_age' => 'M&iacute;nima edad requerida para los usuarios',
	'Birthday_lookforward' => 'Observar las fechas de los cumplea&ntilde;os que tendr&aacute;n lugar en los pr&oacute;ximos d&iacute;as:',
	'Birthday_lookforward_explain' => 'N&uacute;mero de d&iacute;as que el script comprobar&aacute; para saber qu&eacute; usuarios cumplir&aacute;n a&ntilde;os en el n&uacute;mero de d&iacute;as especificado.',
// BIRTHDAY - END

// Start add - Yellow card admin MOD
	'Max_user_bancard' => 'N&uacute;mero m&aacute;ximo de advertencias', 
	'Max_user_bancard_explain' => 'Cuando el usuario exceda el l&iacute;mite de tarjetas amarillas ser&aacute; expulsado (baneado)', 
	'ban_card' => 'Tarjeta amarilla', 
	'ban_card_explain' => 'El usuario ser&aacute; expulsado (baneado) cuando acumule %d tarjetas amarillas', 
	'Greencard' => 'Reincorporar (Des-Banear)', 
	'Bluecard' => 'Informar acerca del mensaje', 
	'Bluecard_limit' => 'Intervalo de tarjeta azul', 
	'Bluecard_limit_explain' => 'Avisar a los moderadores por cada tarjeta azul asignada a un mensaje', 
	'Bluecard_limit_2' => 'L&iacute;mite de tarjetas azules', 
	'Bluecard_limit_2_explain' => 'Se env&iacute;a la primera notificaci&oacute;n a los moderadores cuando un mensaje alcance la cantidad indicada de tarjetas azules', 
	'Report_forum' => 'Foro de reportes',
	'Report_forum_explain' => 'Seleccionar el foro donde los usuarios reportaran mensajes, los usuarios DEBEN poder enviar/responder en este foro',

// Start add - Last visit MOD
	'Hidde_last_logon' => 'Ocultar la &uacute;ltima conexi&oacute;n', 
	'Hidde_last_logon_explain' => 'Si se activa esta opci&oacute;n, la fecha de la &uacute;ltima conexi&oacute;n que se puede ver en los perfiles de los usuarios permanecer&aacute; oculta a todos los usuarios salvo al administrador.', 
// End add - Last visit MOD
//
// Start add - Online/Offline/Hidden Mod
	'Online_time' => 'Tiempo de estado de conexi&oacute;n',
	'Online_time_explain' => 'N&uacute;mero de segundos que el usuario debe ser mostrado como conectado (no utilice un valor m&aacute;s bajo que 60).',
	'Online_setting' => 'Ajuste de estado de conexi&oacute;n',
	'Online_color' => 'Color del texto conectado',
	'Offline_color' => 'Color del texto desconectado',
	'Hidden_color' => 'Color del texto oculto',
// End add - Online/Offline/Hidden Mod

// Disallow other admins to delete or edit the first admin MOD
	'L_LISTOFADMINEDIT' => 'Accesos bloqueados a la cuenta del primer administrador',
	'L_LISTOFADMINEDITEXP' => 'En esta lista se sit&uacute;an los accesos bloqueados a la cuenta del primer administrador en el foro. Los administradores intentaron cambiar el perfil del primer administrador en el foro, suprimir el primer administrador, o convertirle en un usuario normal. Se impidi&oacute; ese intento de cambiar los datos del perfil y/o de los permisos del primer administrador. Esta lista puede ser limpiada solamente por el primer administrador en el foro.',
	'L_LISTOFADMINEDITUSERS' => 'Lista de los accesos bloqueados a la primera cuenta del administrador',
	'L_LISTOFADMINTEXT' => 'Ocurri&oacute; un acceso bloqueado correctamente',
	'L_DELETEMSG' => 'Borrar entradas',
	'L_DELETESUCMSG' => 'Las entradas han sido borradas correctamente',
	'L_ADMINEDITMSG' => 'Usted no tiene permiso para editar datos del perfil y/o permisos del primer administrador de este foro.<br /><br />Este intento de mal acceso malo, ha sido bloqueado y anotado convenientemente.',
	'use_thank' => 'Permitir el mensaje de gracias',
	'Default_avatar' => 'Fijar como avatar por defecto',
	'Default_avatar_explain' => 'Esto permite dar un avatar por defecto a usuarios que todav&iacute;a no han seleccionado uno. Fije el avatar por defecto para los invitados y los usuarios, y entonces seleccione el avatar que quiera mostrar para los usuarios registrados, los invitados, ambos o ninguno.',
	'Default_avatar_guests' => 'Invitados',
	'Default_avatar_users' => 'Usuarios',
	'Default_avatar_both' => 'Ambos',
	'Default_avatar_none' => 'Ninguno',
	'Default_avatar_guests_url' => 'Ruta al avatar por defecto para Invitados',
	'Default_avatar_users_url' => 'Ruta al avatar por defecto para Usuarios',

// Start Optimize Database
	'Optimize' => 'Optimizar',
	'Optimize_explain' => 'Aqu&iacute; es posible optimizar los datos de las tablas de la base de datos. Puede eliminar las partes de datos que contienen espacios vac&iacute;os.<br />Esta operaci&oacute;n hace que su base de datos tenga un mejor tiempo de ejecuci&oacute;n.',
	'Optimize_DB' => 'Optimizar base de datos',
	'Optimize_Enable_cron' => 'Habilitar cron',
	'Optimize_Cron_every' => 'Cron cada',
	'Optimize_Cron_every_explain' => 'Tenga en cuenta que necesita activar el <b>PHP cron global</b> en la <b>ACP &raquo; Configuraci&oacute;n &raquo; Configuraci&oacute;n General &raquo; Cron</b>',
	'Optimize_month' => 'Mes',
	'Optimize_2weeks' => '2 semanas',
	'Optimize_week' => 'Semana',
	'Optimize_3days' => '3 d&iacute;as',
	'Optimize_day' => 'D&iacute;a',
	'Optimize_6hours' => '6 horas',
	'Optimize_hour' => 'Hora',
	'Optimize_30minutes' => '30 minutos',
	'Optimize_20seconds' => '20 segundos (solo para testear)',
	'Optimize_Current_time' => 'Tiempo actual',
	'Optimize_Next_cron_action' => 'Acci&oacute;n del siguiente cron',
	'Optimize_Performed_Cron' => 'Cron realizado',
	'Optimize_Show_not_optimized' => 'Mostrar s&oacute;lo las tablas no optimizadas',
	'Optimize_Show_begin_for' => 'Mostrar solo las tablas que comienzan por',
	'Optimize_Configure' => 'Configurar',
	'Optimize_Table' => 'Tabla',
	'Optimize_Record' => 'Record',
	'Optimize_Type' => 'Tipo',
	'Optimize_Size' => 'Tama&ntilde;o',
	'Optimize_Status' => 'Estado',
	'Optimize_CheckAll' => 'Marcar todas',
	'Optimize_UncheckAll' => 'Desmarcar todas',
	'Optimize_InvertChecked' => 'Invertir marcas',
	'Optimize_return' => 'Pulse %saqu&iacute;%s para volver a optimizar base de datos',
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
	'Detector_No_Bot' => 'No se detect&oacute; robot',
	'Detector_Cleared' => 'Informaci&oacute;n limpiada con &eacute;xito',
	'Click_Return_Detector' => 'Pulse %saqu&iacute;%s para volver al detector',

// added to Auto group mod
	'group_count' => 'N&uacute;mero de mensajes requeridos',
	'group_count_max' => 'N&uacute;mero m&aacute;ximo de mensajes',
	'group_count_updated' => 'Hay %d usuario(s) en este grupo',
	'Group_count_enable' => 'A&ntilde;adir usuarios autom&aacute;ticamente seg&uacute;n sus env&iacute;os',
	'Group_count_update' => 'A&ntilde;adir/actualizar nuevos usuarios',
	'Group_count_delete' => 'Borrar/actualizar otros usuarios',
	'User_allow_ag' => 'Activar autogrupo',
	'group_count_explain' => 'Cuando los usuarios han enviado m&aacute;s mensajes que este n&uacute;mero, <i>en cualquier foro</i>, ser&aacute;n a&ntilde;adidos a este grupo de usuarios.<br />Pero s&oacute;lo si "' . $lang['Group_count_enable'] . '" est&aacute; habilitado',

// Start add - Bin Mod
	'Bin_forum' => 'Foro de papelera',
	'Bin_forum_explain' => 'Rellene el ID del foro para los temas movidos a la papelera. El valor 0 desactiva esta caracter&iacute;stica. Debe editar los permisos del foro para permitir o no ver/enviar/responder... a los usuarios o prohibirles el acceso a este foro.',
// End add - Bin Mod

// Begin Quick Title Edition Mod 1.0.0 by Xavier Olive.
	'Title_infos' => 'Administraci&oacute;n de edici&oacute;n de t&iacute;tulo r&aacute;pido',
	'Must_select_title' => 'Debe seleccionar un t&iacute;tulo r&aacute;pido',
	'Title_updated' => 'T&iacute;tulo r&aacute;pido actualizado',
	'Title_added' => 'T&iacute;tulo r&aacute;pido a&ntilde;adido',
	'Click_return_titleadmin' => 'Pulse %saqu&iacute;%s para volver a administraci&oacute;n de edici&oacute;n de t&iacute;tulo r&aacute;pido',
	'Title_removed' => 'T&iacute;tulo r&aacute;pido borrado',
	'Quick_title_explain' => 'Puede crear un peque&ntilde;o texto para agregar como asunto de un tema con un solo bot&oacute;n o clic.</br>Si desea que se muestre el nombre de la persona que realiz&oacute; el tema o modificaci&oacute;n de &eacute;ste, ponga el %mod% donde usted quiera. Por ejemplo, [Link OK | Autorizado por %mod%] se mostrar&aacute; como [Link OK |Autorizado por nombre del moderador]. Puede hacer exactamente lo mismo con la fecha, colocando el %date% donde quiera.',
	'Title_head' => 'T&iacute;tulo r&aacute;pido: t&iacute;tulo',
	'Title_auth' => 'Permisos',
	'Administrator' => 'Administrador',
	'Topic_poster' => 'Autor del tema',
	'Add_new_title_info' => 'A&ntilde;adir nuevo t&iacute;tulo r&aacute;pido',
	'Title_perm_info' => 'Permisos',
	'Title_perm_info_explain' => 'Los usuarios con estos niveles podr&aacute;n utilizar el MOD de t&iacute;tulo r&aacute;pido',
	'Title_info' => 'T&iacute;tulo r&aacute;pido:',
// End Quick Title Edition Mod 1.0.0 by Xavier Olive.

// Limit Image Width MOD
	'Available' => 'Disponible',
	'Unavailable' => 'No disponible',
	'LIW_title' => 'MOD de l&iacute;mite de achura de imagen',
	'LIW_admin_explain' => 'Esta p&aacute;gina permitir&aacute; que cambie el MOD de l&iacute;mite de anchura de imagen. Encenderlo (On) o apagarlo (Off), as&iacute; como poner la anchura m&aacute;xima para cada imagen enviada a su foro. Si ve que la tabla SQL que tiene guardadas las dimensiones de las im&aacute;genes y de todas las im&aacute;genes enviadas al foro y a&uacute;n as&iacute; &eacute;stas se siguen viendo demasiado grandes, puede vaciar el cach&eacute; pulsando en el bot&oacute;n \'Vaciar tabla de cach&eacute;\'<br /><br />Tambi&eacute;n puede comprobar si es posible cambiar en su servidor este MOD del l&iacute;mite del ancho de imagen en el bot&oacute;n \'Comprobar compatibilidad\'',
	'LIW_compatibility_checks' => 'Comprobar compatibilidad',
	'LIW_mod_config' => 'Configuraci&oacute;n del MOD',

	'LIW_config_updated' => 'Configuraci&oacute;n del MOD de l&iacute;mite de achura de imagen actualizada',
	'LIW_cache_emptied' => 'La tabla cach&eacute; ha sido vaciada correctamente',
	'LIW_click_return_config' => 'Pulse %saqu&iacute;%s para volver a la p&aacute;gina de configuraci&oacute;n del MOD de l&iacute;mite de anchura de imagen',

	'LIW_getimagesize' => 'Soporte URL getimagesize()',
	'LIW_getimagesize_explain' => 'Disponible en PHP 4.0.5',
	'LIW_getimagesize_available' => 'El MOD puede recuperar dimensiones de la imagen',
	'LIW_getimagesize_unavailable' => 'El MOD no puede comprobar si una imagen es o no demasiado grande. Por lo tanto, <i>ninguna</i> imagen enviada se va a clasificar seg&uacute;n el tama&ntilde;o',

	'LIW_urlaware' => 'Envoltorio (wrappers) URL-aware fopen',
	'LIW_urlaware_explain' => 'Fijar allow_url_fopen como "s&iacute;" en su php.ini',
	'LIW_urlaware_available' => 'El MOD puede generar un fingerprint para las im&aacute;genes en el cach&eacute; de dimensiones de imagen',
	'LIW_urlaware_unavailable' => 'El MOD no puede generar un fingerprint en el archivo, y por lo tanto no es posible ir a cach&eacute; de dimensiones de imagen',

	'LIW_openssl' => 'Extensi&oacute;n openSSL cargada',
	'LIW_openssl_explain' => 'Cargue la extensi&oacute;n openssl.dll en su php.ini',
	'LIW_openssl_available' => 'El MOD puede recuperar dimensiones de https:// im&aacute;genes pueden estar en cach&eacute;',
	'LIW_openssl_unavailable' => 'El MOD no puede recuperar dimensiones de https:// im&aacute;genes pueden estar en cach&eacute;',

	'LIW_enable' => 'Ajustar tama&ntilde;o de las im&aacute;genes en los mensajes',
	'LIW_enable_explain' => 'Fijar en %s para permitir que el MOD reajuste las im&aacute;genes en los mensajes', // Set to 'Yes'] to ....
	'LIW_sig_enable' => 'Ajustar tama&ntilde;o de las im&aacute;genes en las firmas',
	'LIW_sig_enable_explain' => 'Fijar en %s para permitir que el MOD reajuste las im&aacute;genes en las firmas',
	'LIW_attach_enable' => 'Ajustar tama&ntilde;o de las im&aacute;genes en las im&aacute;genes adjuntas',
	'LIW_attach_enable_explain' => 'Fijar en %s para permitir que el MOD reajuste las im&aacute;genes adjuntadas con el MOD de adjuntos (Attachment MOD)',
	'LIW_max_width' => 'Anchura m&aacute;xima de la imagen',
	'LIW_max_width_explain' => 'Especifique la anchura m&aacute;xima (p&iacute;xels) de una imagen enviada usando las etiquetas [img]',
	'LIW_empty_cache' => 'Cach&eacute; de dimensiones de imagen vacio',
	'LIW_empty_cache_explain' => 'Su tabla de cach&eacute; actualmente contiene <b>%s</b> guardadas', // Your cache table currently contains <b>312</b> records
	'LIW_empty_cache_note' => 'Observe: esto vaciar&aacute; la tabla de cach&eacute; y har&aacute; que el MOD tenga que crear todas las dimensiones de la imagen otra vez, lo que podr&iacute;a dar lugar a una retardo temporal al cargar un tema',
	'LIW_empty_cache_button' => 'Vaciar tabla de cach&eacute;',

// News
	'xs_news_settings' => 'Ajustes de noticias Icy Phoenix',
	'xs_news_show' => '&iquest;Mostrar banner de noticias?',
	'xs_news_show_ticker' => '&iquest;Mostrar entrada de noticias?',
	'xs_news_show_ticker_explain' => 'Esto es un interruptor principal; si fija esto en \'No\' no podr&aacute; ajustar individualmente ninguna entrada; si lo fija como \'S&iacute;\' entonces el estado de mostrar las entradas individuales puede ser controlado en sus ajustes.',
	'xs_news_show_ticker_subtitle' => '&iquest;Mostrar subt&iacute;tulo de entrada?',
	'xs_news_show_ticker_subtitle_explain' => 'Ajuste esto como "s&iacute;" para mostrar \'Entrada de noticia\' sobre las entradas de noticias.',
	'xs_news_show_news_subtitle' => '&iquest;Mostrar subt&iacute;tulo de noticias?',
	'xs_news_show_news_subtitle_explain' => 'Ajuste esto como "s&iacute;" para mostrar \'Art&iacute;culo de noticia\' sobre los art&iacute;culos de noticias.',
	'xs_news_dateformat' => 'Formato de fecha',
	'xs_news_dateformat_helper' => 'Usando este formato: %s',

// Bantron Mod : Begin
	'Bantron' => 'Administraci&oacute;n baneos',
	'BM_Title' => 'Administraci&oacute;n baneos',
	'BM_Explain' => 'Desde esta p&aacute;gina puede a&ntilde;adir, editar, ver y quitar los baneos de su foro.',

	'BM_Show_bans_by' => 'Mostrar baneos por',
	'BM_All' => 'Todo',
	'BM_Show' => 'Mostrar',

	'BM_IP' => 'IP',
	'BM_Last_visit' => '&Uacute;ltima visita',
	'BM_Banned' => 'Baneado',
	'BM_Expires' => 'Termina',
	'BM_By' => 'Por',
	'BM_Reasons' => 'Razones',

	'BM_Add_a_new_ban' => 'A&ntilde;adir nuevo baneo',
	'BM_Delete_selected_bans' => 'Borrar los baneos seleccionados',

	'BM_Private_reason' => 'Raz&oacute;n privada',
	'BM_Private_reason_explain' => 'Esta raz&oacute;n de baneo incorpora nombres de usuario, e-mails, y/o direcci&oacute;n IP. Se guarda para los prop&oacute;sitos de la nota solamente en la administraci&oacute;n.',

	'BM_Public_reason' => 'Raz&oacute;n p&uacute;blica',
	'BM_Public_reason_explain' => 'Esta raz&oacute;n de baneo incorpora nombres de usuario, e-mails, y/o direcci&oacute;n IP. Se muestra al usuario(s) baneado(s) cuando intenta acceder al foro.',
	'BM_Generic_reason' => 'Raz&oacute;n gen&eacute;rica',
	'BM_Mirror_private_reason' => 'Raz&oacute;n privada de espejo',
	'BM_Other' => 'Otra',

	'BM_Expire_time' => 'Tiempo de finalizaci&oacute;n',
	'BM_Expire_time_explain' => 'Especificando una fecha, en lo referente a la fecha actual o a una fecha absoluta, el baneo ser&aacute; desactivado despu&eacute;s de ese tiempo.',
	'BM_Never' => 'Nunca',
	'BM_After_specified_length_of_time' => 'Despu&eacute;s de que pase el tiempo especificado',
	'BM_Minutes' => 'Minuto(s)',
	'BM_Hours' => 'Hora(s)',
	'BM_Days' => 'D&iacute;a(s)',
	'BM_Weeks' => 'Semana(s)',
	'BM_Months' => 'Mes(es)',
	'BM_Years' => 'A&ntilde;o(s)',
	'BM_After_specified_date' => 'Otra fecha especificada',
	'BM_AM' => 'AM',
	'BM_PM' => 'PM',
	'BM_24_hour' => '24-Horas',

	'BM_Ban_reasons' => 'Razones del baneo',
// Bantron Mod : End

	'board_disable_message' => 'Deshabilitar el mensaje por defecto por desactivaci&oacute;n del foro.',
	'board_disable_message_texte' => 'Mensaje que se mostrar&aacute; cuando el foro este desactivado',

// Start Edit Notes MOD
	'Edit_notes_settings' => 'Valores de notas de edici&oacute;n',
	'Edit_notes_enable' => 'Habilitar notas de edici&oacute;n',
	'Edit_notes_enable_explain' => 'Habilitar/deshabilitar notas de edici&oacute;n en el foro.',
	'Max_edit_notes' => 'Notas de edici&oacute;n m&aacute;ximas',
	'Max_edit_notes_explain' => 'Fija el n&uacute;mero m&aacute;ximo de notas de edici&oacute;n por mensaje.',
	'Edit_notes_permissions' => 'Permisos de notas de edici&oacute;n',
	'Edit_notes_permissions_explain' => 'Fija qu&eacute; tipo de usuarios podr&aacute;n usar las notas de edici&oacute;n.',
	'Edit_notes_admin' => 'S&oacute;lo administradores',
	'Edit_notes_staff' => 'Equipo (admins y mods)',
	'Edit_notes_reg' => 'Usuarios registrados (admins y mods tambi&eacute;n)',
	'Edit_notes_all' => 'Todos los usuarios (invitados, usuarios, admins y mods)',
// End Edit Notes MOD

// BEGIN Disable Registration MOD
	'registration_status' => 'Deshabilitar registros',
	'registration_status_explain' => 'Esto desactiva los nuevos registros en su foro.',
	'registration_closed' => 'Raz&oacute;n por la que se cierran los registros',
	'registration_closed_explain' => 'Texto en el cual se explica el por qu&eacute; se cierran los registros. Aparece cuando un usuario intenta registrarse. Deje esto en blanco para mostrar el texto por defecto.',
// END Disable Registration MOD

	'Gender_required' => 'Forzar a usuarios a especificar su sexo',

//admin user list mail
	'Usersname' => 'Nombre de usuarios',
	'Admin_Users_List_Mail_Title' => 'Lista de e-mails de usuarios',
	'Admin_Users_List_Mail_Explain' => 'Aqu&iacute; esta la lista de e-mails de sus usuarios',

// Start add - Forum notification MOD
	'Forum_notify' => 'Permitir notificaci&oacute;n de foro',
	'Forum_notify_enabled' => 'Permitir',
	'Forum_notify_disabled' => 'No permitir',
// End add - Forum notification MOD

	'Smilie_table_columns' => 'Columnas en la tabla de emoticonos',
	'Smilie_table_rows' => 'Filas en la tabla de emoticonos',
	'Smilie_window_columns' => 'Columnas en la ventana de emoticonos',
	'Smilie_window_rows' => 'Filas de la ventana de emoticonos',
	'Smilie_single_row' => 'N&uacute;mero de emoticonos en una l&iacute;nea',
	'Smilie_single_row_explain' => 'Por ej: N&uacute;mero de emoticonos a mostrar en la Respuesta R&aacute;pida',

	'Auth_Rating' => 'Valoraciones',

// Gravatars
	'Enable_gravatars' => 'Habilitar gravatars',
	'Gravatar_rating' => 'Valoraci&oacute;n m&aacute;xima de gravatar',
	'Gravatar_rating_explain' => '<a href="http://www.gravatar.com/rating.php" target="_blank">Leer las l&iacute;neas de gu&iacute;a de valoraci&oacute;n</a> para mas informaci&oacute;n. Fijar en \'Ninguno\' para no tener restricciones.',
	'Gravatar_default_image' => 'Imagen por defecto de gravatar',
	'Gravatar_default_image_explain' => 'Si no se encuentra gravatar, el servidor cuando vuelve muestra esta imagen. La ruta a la imagen es relativa al directorio ra&iacute;z de phpBB. Dejar en blanco si no se quiere mostrar ninguna imagen.',

// Admin Account Actions
	'Account_actions' => 'Acciones de cuenta',
	'Account_inactive_explain' => 'Aqu&iacute; puede ver a todos los usuarios que est&eacute;n inactivos y esperando activaci&oacute;n. Puede activar o suprimir sus cuentas.<br />Despu&eacute;s, podr&aacute; fijar sus permisos o corregir su perfil siguiendo los enlaces pertinentes.',
	'Account_active_explain' => 'Aqu&iacute; puede ver a todos los usuarios que son usuarios activos. Puede desactivar sus cuentas o borrar estas cuentas.<br />Despu&eacute;s, podr&aacute; fijar sus permisos o corregir su perfil siguiendo los enlaces pertinentes.',
	'Account_active' => 'usuarios activos',
	'Account_inactive' => 'usuarios inactivos',
	'Account_activate' => 'Activar los marcados',
	'Account_deactivate' => 'Desactivar los marcados',
	'Account_none' => 'No hay usuarios esperando activaci&oacute;n.',
	'Account_total_user' => 'Cantidad de usuario: <b>%d</b> usuario',
	'Account_total_users' => 'Cantidad de usuarios: <b>%d</b> usuarios',
	'Account_activation' => 'M&eacute;todo de activaci&oacute;n',
	'Account_awaits' => 'Esperando activaci&oacute;n desde',
	'Account_registered' => 'Registrado desde',
	'Account_delete_users' => '&iquest;Est&aacute; seguro de querer borrar a estos usuarios?',
	'Account_delete_user' => '&iquest;Est&aacute; seguro de querer borrar a este usuario?',
	'Account_sort_letter' => 'Mostrar s&oacute;lo cuentas creadas con',
	'Account_others' => 'otros',
	'Account_all' => 'Todo',
	'Account_year' => 'a&ntilde;o',
	'Account_years' => 'a&ntilde;os',
	'Account_week' => 'semana',
	'Account_weeks' => 'semanas',
	'Account_day' => 'd&iacute;a',
	'Account_days' => 'd&iacute;as',
	'Account_hour' => 'hora',
	'Account_hours' => 'horas',
	'Account_user_activated' => 'El usuario ha sido activado.',
	'Account_users_activated' => 'Los usuarios han sido activados.',
	'Account_user_deactivated' => 'El usuario ha sido desactivado.',
	'Account_users_deactivated' => 'Los usuarios han sido desactivados.',
	'Account_user_deleted' => 'El usuario ha sido borrado.',
	'Account_users_deleted' => 'Los usuarios han sido borrados.',
	'Account_activated' => 'Activaci&oacute;n de cuenta',
	'Account_activated_text' => 'Su cuenta ha sido activada',
	'Account_deactivated' => 'Desactivaci&oacute;n de cuenta',
	'Account_deactivated_text' => 'Su cuenta ha sido desactivada',
	'Account_deleted' => 'Borrado de cuenta',
	'Account_deleted_text' => 'Su cuenta ha sido borrada',
	'Account_notification' => 'Notificaci&oacute;n enviada por correo.',

// Acronyms
	'Acronyms_title' => 'Administraci&oacute;n de siglas (Acronym)',
	'Acronyms_explain' => 'Desde este panel de control puede a&ntilde;adir, editar, y quitar las siglas que se mostrar&aacute;n autom&aacute;ticamente en los mensajes de su foro.',
	'Acronym' => 'Sigla',
	'Acronyms' => 'Siglas',
	'Edit_acronym' => 'Editar sigla',
	'Description' => 'Descripci&oacute;n',
	'Add_new_acronym' => 'A&ntilde;adir nueva sigla',
	'Update_acronym' => 'Actualizar sigla',

	'Must_enter_acronym' => 'Debe introducir la sigla y su descripci&oacute;n',
	'No_acronym_selected' => 'No ha seleccionado una sigla para editar',

	'Acronym_updated' => 'La sigla seleccionada ha sido actualizada correctamente',
	'Acronym_added' => 'La sigla ha sido a&ntilde;adida correctamente',
	'Acronym_removed' => 'La sigla ha sido quitada correctamente',

	'Click_return_acronymadmin' => 'Pulse %saqu&iacute;%s para volver a administraci&oacute;n de siglas',
	'Prune_shouts' => 'Limpiar autom&aacute;ticamente cuadro de charla',
	'Prune_shouts_explain' => 'N&uacute;mero de d&iacute;as antes de borrar los mensajes del cuadro de charla. Si el valor es 0, la limpieza ser&aacute; deshabilitada',

	'MOD_OS_ForumRules' => 'Cuadro de normas del foro',
	'Forum_rules' => 'Normas del foro',
	'Rules_display_title' => '&iquest;Mostrar t&iacute;tulo en el cuadro de normas del foro?',
	'Rules_custom_title' => 'T&iacute;tulo actual',
	'Rules_appear_in' => 'Estas normas del foro aparecen mientras est&aacute;...',
	'Rules_in_viewforum' => 'Viendo el foro',
	'Rules_in_viewtopic' => 'Viendo temas en este foro',
	'Rules_in_posting' => 'Enviando/respondiendo en este foro',

	'Php_Info_Explain' => 'Esta p&aacute;gina muestra una lista de informaci&oacute;n sobre la versi&oacute;n de PHP instalada en su servidor. Incluye detalles de los m&oacute;dulos cargados, variables disponibles y ajustes por defecto. Esta informaci&oacute;n puede ser muy &uacute;til para diagnosticar problemas. Por favor, tenga en cuenta que algunas compa&ntilde;&iacute;as de alojamiento (hosting) limitan, por razones de seguridad, qu&eacute; informaci&oacute;n puede mostrarse aqu&iacute;. Queda usted avisado de que no debe dar a otros ning&uacute;n detalle de esta p&aacute;gina excepto cuando solicite soporte y se lo pida alg&uacute;n miembro del equipo de los foros de soporte.',

	'IcyPhoenix_Main' => 'P&aacute;gina de inicio de Icy Phoenix',
	'IcyPhoenix_Download' => 'Descarga de Icy Phoenix',
	'IcyPhoenix_Code_Changes' => 'MOD de cambios de c&oacute;digo',
	'IcyPhoenix_Updates' => 'Actualizaci&oacute;n de Icy Phoenix',
	'PhpBB_Upgrade' => 'Mejorar phpBB',
	'Header_Welcome' => 'Bienvenido al panel de control del administrador de Icy Phoenix',

	'Prune_users' => 'Limpiar (Prune) usuarios',
	'Prune_Overview' => 'Descripci&oacute;n de la limpieza (Pruning)',
	'Prune_title_explain' => 'Aqu&iacute; puede administrar los ajustes de limpieza (Prune) de cualquier foro.',
	'Prune_forum' => 'Foro',
	'Prune_active' => 'Limpieza (Pruning) activa',
	'Prune_freq' => 'Quitar todo',
	'Prune_check' => 'Marcar todo',
	'Prune_days' => 'D&iacute;as',
	'Prune_days_explain' => 'Quitar temas en los que no se ha posteado.',
	'Click_return_admin_po' => 'Pulse %saqu&iacute;%s para volver a la limpieza de foros (Pruning)',
	'Prune_update' => 'Los ajustes de limpieza (pruning) han sido actualizados correctamente',

	'Admin_notepad_title' => 'Libreta',
	'Admin_notepad_explain' => 'Desde este panel, el administrador puede dejar sus notas en la libreta.',
	'Allow_generator' => 'Habilitar generador de avatar',
	'Avatar_generator_template_path' => 'Ruta de plantilla del generador de avatar',
	'Avatar_generator_template_path_explain' => 'Ruta del directorio de las im&aacute;genes en su phpBB, por ejemplo, images/avatars/generator_templates',

// Start Autolinks Mod
	'Autolink_first' => 'Autoenlace de cada palabra clave por mensaje',

	'Autolinks_title' => 'Autoenlaces',
	'Autolinks_explain' => 'Desde este panel de control, puede a&ntilde;adir, editar y borrar palabras clave, que ser&aacute;n substituidas autom&aacute;ticamente por la URL en los mensajes. Si la URL que introduce es interna al foro/portal, se agregar&aacute; la indentificaci&oacute;n de sesi&oacute;n en el enlace.<br /><br />Por ejemplo, si se encuentra la <b>Palabra clave</b> en el mensaje, es reemplazada por lo siguiente,<br /><br />&lt;a href="<b>URL</b>" title="<b>Comentario</b>" style="<b>Estilo</b>"&gt;<b>Texto</b>&lt;/a&gt;',
	'links_keyword' => 'Palabra clave',
	'links_title' => 'Texto',
	'links_url' => 'URL',
	'links_comment' => 'Comentario',
	'links_style' => 'Estilo',
	'links_forum' => 'Foro para autoenlace',
	'links_forum2' => 'Foro',
	'links_internal' => 'Interno',
	'Autolinks_add' => 'A&ntilde;adir un autoenlace',
	'Add_keyword' => 'A&ntilde;adir autoenlace',
	'Autolinks_edit' => 'Editar un autoenlace',
	'Edit_keyword' => 'Editar autoenlace',
// 'Delete_link' => 'Marcar cuadro para borrar este autoenlace.',

	'Select_all_forums' => 'Todos los foros',
	'Autolink_added' => 'Autoenlace a&ntilde;adido.',
	'Autolink_updated' => 'Autoenlace actualizado.',
	'Autolink_removed' => 'Autoenlace borrado.',
	'No_autolink_selected' => 'No ha seleccionado un autoenlace para borrar.',
	'No_autolinks' => 'No hay autoenlaces en la base de datos.',
	'Must_enter_autolink' => 'Debe introducir la palabra clave, enlace de texto y la URL.',
	'Click_return_autolinkadmin' => 'Pulse %saqu&iacute;%s para volver a administraci&oacute;n de autoenlaces',
// End Autolinks Mod

// XS BUILD 030

// Login attempts configuration
	'Max_login_attempts' => 'Intentos de identificaci&oacute;n permitidos',
	'Max_login_attempts_explain' => 'El n&uacute;mero de intentos de identificaci&oacute;n permitido en su foro.',
	'Login_reset_time' => 'Tiempo de identificaci&oacute;n cerrado',
	'Login_reset_time_explain' => 'Tiempo en minutos que el usuario tiene que esperar hasta que se le permita de nuevo la identificaci&oacute;n despu&eacute;s de exceder el n&uacute;mero de intentos permitidos de conexi&oacute;n o identificaci&oacute;n.',

// XS BUILD 035
// Smilies Order
	'position_new_smilies' => '&iquest;Se deben agregar los nuevos emoticonos antes o despu&eacute;s de los emoticonos existentes?',
	'smiley_change_position' => 'Cambiar la ubicaci&oacute;n al insertar',
	'before' => 'Antes',
	'after' => 'Despu&eacute;s',
	'Move_top' => 'Enviar arriba',
	'Move_end' => 'Enviar abajo',

// XS BUILD 037
// Pages Auth
	'auth_view_title' => 'Autorizaci&oacute;n para ver p&aacute;ginas',
	'auth_view_portal' => 'P&aacute;gina de inicio',
	'auth_view_forum' => 'Foro',
	'auth_view_viewforum' => 'Ver foro',
	'auth_view_viewtopic' => 'Ver tema',
	'auth_view_faq' => 'FAQ',
	'auth_view_memberlist' => 'Lista de usuarios',
	'auth_view_groupcp' => 'Grupos de usuarios',
	'auth_view_profile' => 'Perfil',
	'auth_view_search' => 'Buscar',
	'auth_view_album' => '&Aacute;lbum',
	'auth_view_links' => 'Enlaces',
	'auth_view_calendar' => 'Calendario',
	'auth_view_attachments' => 'Adjuntos',
	'auth_view_download' => 'Descargas',
	'auth_view_pic_upload' => 'Im&aacute;genes subidas',
	'auth_view_kb' => 'Biblioteca',
	'auth_view_ranks' => 'Rangos',
	'auth_view_statistics' => 'Estad&iacute;sticas',
	'auth_view_recent' => 'Temas recientes',
	'auth_view_referrers' => 'Referidos',
	'auth_view_rules' => 'Normas',
	'auth_view_site_hist' => 'Historia del sitio',
	'auth_view_shoutbox' => 'Cuadro de charla',
	'auth_view_viewonline' => 'Ver conectados',
	'auth_view_contact_us' => 'Cont&aacute;cteme',
	'auth_view_ajax_chat' => 'Chat',
	'auth_view_ajax_chat_archive' => 'Archivo del chat',
	'auth_view_custom_pages' => 'P&aacute;ginas actuales',

// Begin Yahoo Submit Your Site MOD by www.pentapenguin.com
	'Yahoo_search' => 'Busqueda en Yahoo',
	'Yahoo_search_settings' => 'Ajustes de b&uacute;squeda en Yahoo',
	'Yahoo_search_settings_explain' => 'Aqu&iacute; puede configurar ajustes para el MOD de enviar su sitio a Yahoo. Para mas informaci&oacute;n, por favor vea el <a href="http://submit.search.yahoo.com/free/request" target="_blank">Sitio web de Yahoo para enviar su sitio</a>.',
	'Yahoo_search_select_forums' => 'Seleccionar foros',
	'Yahoo_search_select_forums_explain' => 'Seleccione los foros a incluir en la lista. Puede seleccionar tantos foros como quiera, pulsando en cada nombre de foro mientras, a la vez, mantiene pulsada la tecla CTRL (Windows) o comando (Macintosh). Por defecto, todos los foros p&uacute;blicos visibles ser&aacute;n seleccionados.',
	'Yahoo_search_savepath' => 'Guardar ruta de la lista de URL',
	'Yahoo_search_savepath_explain' => 'Introduzca la ubicaci&oacute;n donde quiere guardar la lista de URL. Introduzca la ruta relativa a la ruta de phpBB -- Por ejemplo, si quiere guardar el archivo en el directorio cach&eacute; <b>www.tusitio.com/phpBB/cache/</b>, debe introducir <b>cache</b>. Recuerde que necesita el directorio CHMOD 777.',
	'Yahoo_search_additional_urls' => 'Introducir URLs adicionales',
	'Yahoo_search_additional_urls_explain' => 'Introduzca URLs adicionales que quiera que Yahoo vea, una por l&iacute;nea. Debe introducir la URL entera -- Por ejemplo, <b>http://www.tusitio.com/tupagina.html</b>.',
	'Yahoo_search_compress_file' => 'Comprimir la lista de URLs',
	'Yahoo_search_compress_file_explain' => 'Si elige S&Iacute; en esta opci&oacute;n, la lista de URLs sera comprimida con gzip y el resultado ser&aacute; un archivo m&aacute;s peque&ntilde;o, con un menor consumo de ancho de banda del robot de Yahoo. Este ajuste no funcionar&aacute; si su servidor no soporta gzip.',
	'Yahoo_search_compression_level' => 'Nivel de compresi&oacute;n del archivo',
	'Yahoo_search_compression_level_explain' => 'Elija el nivel de compresi&oacute;n del archivo. 9 es el ajuste recomendado, a menos que encuentre problemas; en ese caso, debe bajar el valor.',
	'Yahoo_search_generate_file' => 'Generar archivo',
	'Yahoo_search_error_no_forums' => 'Error: no ha seleccionado foros. Vuelva atras y al menos seleccione un foro.',
	'Yahoo_search_error_no_gzip' => 'Error: est&aacute; utilizando una versi&oacute;n de PHP antigua o su servidor no soporta gzip. Por favor, vuelva atr&aacute;s y elija <b>No</b> en la opci&oacute;n <b>Comprimir la lista de URLs</b>.',
	'Yahoo_search_error_unopenable_file' => 'Error: no se puede abrir el archivo %s.',
	'Yahoo_search_error_unwritable_file' => 'Error: no se puede escribir en el archivo %s.',
	'Yahoo_search_error_unclosable_file' => 'Error: no se puede cerrar el archivo %s.',
	'Yahoo_search_error_update_sql' => 'Error: no se puede actualizar el campo: %s',
	'Yahoo_search_error_unknown_file_error' => 'Error: el archivo no se ha guardado por un error desconocido.',
	'Yahoo_search_file_done' => 'El archivo de la lista de URL ha finalizado su proceso. Por favor, copie la URL de abajo y p&eacute;guela en el campo apropiado en Yahoo:<br /><b>%s</b>',
// Finish Yahoo Submit Your Site MOD by www.pentapenguin.com

// Bookmark Mod
	'Max_bookmarks_links' => 'Favoritos m&aacute;ximos enviados en TAG-Enlace',
	'Max_bookmarks_links_explain' => 'N&uacute;mero de favoritos m&aacute;ximos enviados en el TAG-Enlace al principio del documento. Esta informaci&oacute;n es usada, por ejemplo, en Mozilla. Introduzca 0 para desactivar esta funci&oacute;n.',

	'Faq_manager' => 'Configuraci&oacute;n FAQ',
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
	'Search_Flood_Interval' => 'Intervalo de flood en la b&uacute;squeda',
	'Search_Flood_Interval_explain' => 'N&uacute;mero de segundos que debe esperar un usuario entre las peticiones de b&uacute;squeda',
	'Confirm_delete_smiley' => '&iquest;Est&aacute; seguro de que quiere eliminar este emoticono?',
	'Confirm_delete_word' => '&iquest;Est&aacute; seguro de que quiere eliminar esta palabra censurada?',
	'Confirm_delete_rank' => '&iquest;Est&aacute; seguro de que quiere borrar este rango?',

// Custom Profile Fields MOD
	'custom_field_notice_admin' => 'Estos art&iacute;culos han sido creados por usted u otro administrador. Para saber si hay m&aacute;s informaci&oacute;n, compruebe los art&iacute;culos bajo los campos del perfil que dirigen en el navbar. Los art&iacute;culos marcados con * son campos obligatorios. Art&iacute;culos marcados con &dagger; se muestran s&oacute;lo a los administradores.',

	'field_deleted' => 'Se ha suprimido el campo especificado',
	'double_check_delete' => '&iquest;Est&aacute; seguro de que desea suprimir permanentemente el campo del perfil "%s" de la base de datos?',

	'here' => 'Aqu&iacute;',
	'new_field_link' => '<a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">%s</a>',
	'edit_field_link' => '<a href="' . append_sid($filename . '?mode=edit&amp;pfid=x') . '">%s</a>',
	'index_link' => '<a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">%s</a>',
	'field_exists' => 'Este campo ya existe.<br /><br />Puede intentar crear un <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">nuevo</a> campo en el perfil,<br /><br />o intentar <a href="' . append_sid($filename . '?mode=edit&amp;pfid=x') . '">editar</a> un campo existente.',
	'click_here_here' => 'Pulse <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">aqu&iacute;</a> para a&ntilde;adir otro campo en el perfil,<br /><br />o click <a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">aqu&iacute;</a> para volver al &iacute;ndice de administraci&oacute;n.',
	'field_success' => 'Campo a&ntilde;adido correctamente!<br /><br />Pulse <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">aqu&iacute;</a> para a&ntilde;adir otro campo al perfil,<br /><br />o click <a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">aqu&iacute;</a> para volver al &iacute;ndice de administraci&oacute;n.',
	'Custom_Profile' => 'Campos del perfil',
	'profile_field_created' => 'Campo del perfil creado',
	'profile_field_updated' => 'Campo del perfil actualizado',

	'add_field_title' => 'A&ntilde;adir campos personalizados en el perfil',
	'edit_field_title' => 'Editar campos personalizados en el perfil',
	'add_field_explain' => 'Aqu&iacute; puede crear los nuevos campos para que sus usuarios los a&ntilde;adan en sus perfiles.',
	'edit_field_explain' => 'Aqu&iacute; puede editar campos que usted ha creado ya para que sus usuarios los a&ntilde;adan en sus perfiles.',

	'add_field_general' => 'Configuraci&oacute;n general',
	'add_field_admin' => 'Configuraci&oacute;n del administrador',
	'add_field_view' => 'Viendo configuraci&oacute;n',
	'add_field_text_field' => 'Configuraci&oacute;n de campos de texto',
	'add_field_text_area' => 'Configuraci&oacute;n de &aacute;rea de texto',
	'add_field_radio_button' => 'Configuraci&oacute;n del bot&oacute;n de radio',
	'add_field_checkbox' => 'Configuraci&oacute;n checkbox ',

	'default_value' => 'Valores por defecto',
	'default_value_explain' => 'Este valor el es que quedar&aacute; por defecto para este campo. Si un nuevo usuario no cambia este valor, es el que se mostrar&aacute;. Si esto es un campo requerido, este es el valor que se fijar&aacute; a todos los usuarios existentes.',
	'default_value_radio_explain' => 'Introduzca el nombre id&eacute;ntico al escrito en el campo de valores disponibles.',
	'default_value_checkbox_explain' => 'Introduzca los valores por defecto seleccionados. Estos valores tienen marcados valores en los campos disponibles',
	'max_length' => 'Longitud m&aacute;xima',
	'max_length_explain' => 'Esta es la longitud m&aacute;xima para este campo.',
	'max_length_value' => 'Debe ser un n&uacute;mero comprendido entre %d y %d.',
	'available_values' => 'Valores disponibles',
	'available_values_explain' => 'Ponga cada valor en su propia l&iacute;nea',

	'add_field_view_disclaimer' => 'Todos estos ajustes ser&aacute;n tratados como "no" si no se permite a los usuarios ver estos campos',

	'add_field_name' => 'Nombre del campo',
	'add_field_name_explain' => 'Introduzca el nombre que desea asociar a este campo.',
	'add_field_description' => 'Descripci&oacute;n del campo',
	'add_field_description_explain' => 'Introduzca la descripci&oacute;n que desea asociar a este campo. Ser&aacute; mostrado en peque&ntilde;o debajo del nombre del campo, justo como est&aacute; este texto.',
	'add_field_type' => 'Tipo de campo',
	'add_field_type_explain' => 'Seleccione el tipo de campos del perfil que desea a&ntilde;adir. Los ejemplos de cada tipo de campo se muestran en el extremo derecho.',
	'edit_field_type_explain' => 'Seleccione el tipo de campos del perfil que desea cambiar a este campo. Los ejemplos de cada tipo de campo se muestran en el extremo derecho.',
	'add_field_required' => 'Poner como obligatorio',
	'add_field_required_explain' => 'Si los campos est&aacute;n puestos como "Obligatorios", cualquier usuario que se registre luego <strong>debe</strong> marcarlo, y a todos los usuarios registrados les aparecer&aacute; el campo por defecto.', 
	'add_field_user_can_view' => 'Permitir a los usuario ver',
	'add_field_user_can_view_explain' => 'Si esta puesto como "s&iacute;", el usuario podr&aacute; ver y editar estos campos. Si esta puesto como "no", s&oacute;lo los administradores podr&aacute;n ver o corregir estos valores. Tambi&eacute;n, si se fija como "s&iacute;" este campo puede no ser obligatorio.',
	'view_in_profile' => 'Visible en el perfil de usuario',
	'profile_locations_explain' => 'Estas opciones son para los campos que ser&aacute;n vistos en el perfil de usuario.',
	'contacts_column' => 'Columna de contactos',
	'about_column' => 'Sobre la columna',
	'view_in_memberlist' => 'Visible en la lista de usuarios', 
	'view_in_topic' => 'Visible en el tema', 
	'topic_locations_explain' => 'Estas opciones son para los campos que ser&aacute;n vistos en los mensajes del foro.',
	'author_column' => 'Secci&oacute;n del autor',
	'above' => 'Sobre ',
	'below' => 'Debajo ',

	'textarea' => '&Aacute;rea de texto',
	'textarea_example' => 'Esto es un ejemplo de &aacute;rea de texto' . "\n" . '&Aacute;rea texto.',
	'text_field' => 'Campo de texto',
	'text_field_example' => 'Esto es un ejemplo de campo de texto',
	'radio' => 'Bot&oacute;n de radio',
	'radio_example' => 'Esto es un ejemplo de bot&oacute;n de radio',
	'checkbox' => 'Checkbox',
	'checkbox_example' => 'Esto es un ejemplo de checkbox',

	'profile_field_list' => 'Sus campos personalizados del perfil',
	'profile_field_list_explain' => 'Estos son todos los campos personalizados que usted ha creado para su foro, con enlaces para editar o borrar.',
	'profile_field_id' => 'ID #',
	'profile_field_name' => 'Nombre del campo',
	'profile_field_action' => 'Acci&oacute;n',
	'no_profile_fields_exist' => 'No existen campos personalizados en el perfil.',

	'enter_a_name' => '<strong>Debe</strong> poner un nombre. <br /><br />Pulse volver e int&eacute;ntelo de nuevo',
// END Custom Profile Fields MOD

	'Add' => 'A&ntilde;adir',
	'split_global_announce' => 'Separar anuncios globales',
	'split_announce' => 'Separar anuncios',
	'split_sticky' => 'Separar notas',
	'split_topic_split' => 'Separar temas',
	'Announce_settings' => 'Ajustes de anuncios',
	'Split_settings' => 'Ajustes de separaci&oacute;n',
	'Server_Cookies' => 'Configuraciones servidor',
	'ENABLE_CHECK_DNSBL' => 'Habiltar el checkeo de la Lista Negra via IP, durante el registro',
	'ENABLE_CHECK_DNSBL_EXPLAIN' => 'Si habilita esta Opcion, La IP de los Usuarios sera comparada con la lista negra publica. Tenga en cuenta, que esto podria bloquear algunos Usuarios, cuyas IP figuran en la lista negra por error.',
	'ENABLE_CHECK_DNSBL_POSTING' => 'Habiltar el checkeo de la Lista Negra via IP, durante el posteo',
	'ENABLE_CHECK_DNSBL_POSTING_EXPLAIN' => 'Si habilita esta Opcion, La IP de los Usuarios sera comparada con la lista negra publica.',
	'Config_explain2' => 'El formulario de abajo permitir&aacute; modificar opciones del calendario y de los subforos. Puede cambiar la apariencia y ajustes.',
	'Forum_postcount' => 'Cantidad de mensajes de usuarios',
	'Use_Captcha' => 'Usar CAPTCHA',
	'Use_Captcha_Explain' => 'Si lo fija como S&Iacute;, el c&oacute;digo de confirmaci&oacute;n avanzado se generar&aacute;. Si lo fija como NO, se genera el c&oacute;digo de activaci&oacute;n est&aacute;ndar de phpBB.',
	'Sync_Pics_Count' => 'Pulsando en <b>S&Iacute;</b>, el contador de im&aacute;genes de todos los usuarios ser&aacute; sincronizado.',    
	'Pics_Count_Synchronized' => 'Cantidad de im&aacute;genes de los usuarios sincronizada correctamente',    
	'Pics_Count_Not_Synchronized' => 'Cantidad de im&aacute;genes de los usuarios no sincronizada correctamente',   

// IP - BUILD 001
	'Enable_Digests' => 'Activar res&uacute;menes',
	'Enable_Digests_PHPCron' => 'Activar res&uacute;menes PHP cron',
	'Enable_Digests_PHPCron_Explain' => 'Esta caracter&iacute;stica activar&aacute; un emulador de PHP cron que enviar&aacute; e-mails una vez cada hora. Pero como est&aacute; basado en el emulador de PHP es posible que no se ejecute correctamente, por lo que puede ser que a veces no se env&iacute;en los correos. Si puede activar el cron en su servidor, utilice el cron en lugar de esta opci&oacute;n.',

// Ajax Shoutbox - BEGIN
	'Shoutbox_config' => 'Configuraci&oacute;n chat ajax',
	'Shout_read_only' => 'Solo leer',
	'Displayed_shouts' => 'Comentarios visibles',
	'Displayed_shouts_explain' => 'El n&uacute;mero de comentarios que se ver&aacute;n en el chat ajax cuando este se cargue.<br /><i>0 para cargar todos los comentarios.</i>',
	'Stored_shouts' => 'Comentarios guardados',
	'Stored_shouts_explain' => 'El n&uacute;mero de comentarios que se guardar&aacute;n en la base de datos.<br />Este valor ha de ser igual o mayor que el n&uacute;mero de comentarios visibles.<br /><i>0 para guardar todos los comentarios.</i>',
	'Shout_guest_allowed' => 'Permiso para invitados',
	'Shoutbox_flood' => 'Intervalo de flood',
	'Shoutbox_flood_explain' => 'N&uacute;mero de segundos que el usuario ha de esperar para enviar otro comentario.',
	'Shoutbox_refreshtime' => 'Tiempo de actualizaci&oacute;n',
	'Shoutbox_refresh_explain' => 'Tiempo en milisegundos que el chat ajax tardar&aacute; en leer los nuevos mensajes.<br /><i>Este valor tiene que estar sobre los 1000 milisegundos.</i>',
// Ajax Shoutbox - END

/* lang_postcount.php - BEGIN */
	'Postcounts' => 'Administraci&oacute;n de cantidad de mensajes',	
	'Post_count_explain' => 'Desde aqu&iacute; puede editar la cantidad de mensajes de un usuario.',
	'Modify_post_counts' => 'Modificar contador de mensajes',
	'Post_count_changed' => 'Ha editado la cantidad de mensajes a este usuario',
	'Click_return_posts_config' => 'Pulse %saqu&iacute;%s para volver a la configuraci&oacute;n de cantidad de mensajes',
	'Modify_post_count' => 'Modificar contador de mensajes',
	'Edit_post_count' => 'Editar la cantidad de mensajes de <b>%s</b>',
	'Post_count' => 'N&uacute;mero de mensajes',
/* lang_postcount.php - END */

/* lang_megamail.php - BEGIN */
	'Megamail_Explain' => 'Aqu&iacute; puede enviar un mensaje de correo a todos los usuarios, o a todos los usuarios de un grupo espec&iacute;fico. Para hacer esto, un correo se enviar&aacute; a la direcci&oacute;n del administrador, con una copia oculta para todos los receptores. <br />Este script modificado enviar&aacute; los mensajes de correo en varias veces para evitar la sobrecarga del servidor.  El estado de correo masivo ser&aacute; guardado en la base de datos. Puede cerrar la ventana cuando desee pausar el env&iacute;o de correo masivo (los correos actuales ser&aacute;n enviados), y, luego, continuar m&aacute;s adelante desde donde lo dej&oacute;.<br /><b>Si los correos HTML est&aacute;n activados, deber&aacute; escribir los correos utilizando el c&oacute;digo HTML, insertando &lt;br /&gt; para saltar de l&iacute;nea.</b>',
	'megamail_inactive_users' => 'Usuarios que no nos han visitado en los &uacute;ltimos {DAYS} d&iacute;as',
	'megamail_header' => 'Sus sesiones de correo',
	'megamail_id' => 'ID=Correo',
	'megamail_batchstart' => 'Procesado',
	'megamail_batchsize' => 'Correos',
	'megamail_batchwait' => 'Pausa',
	'megamail_created_message' => 'El correo masivo ha sido guardado en la base de datos.<br /><br/>Para comenzar a enviar pulse %saqu&iacute;%s o espere a que refresque el sistema...',
	'megamail_send_message' => 'El proceso actual (%s - %s) ha sido enviado.<br /><br/>Para continuar enviando pulse %saqu&iacute;%s o espere a que refresque el sistema...',
	'megamail_status' => 'Estado',
	'megamail_proceed' => '%sProceder%s',
	'megamail_done' => 'HECHO',
	'megamail_none' => 'No se encontr&oacute; ning&uacute;n proceso.',
	'megamail_delete_confirm' => '&iquest;Esta seguro que quieres eliminar este correo?',
	'megamail_deleted' => 'Correo eliminado correctamente',
	'megamail_click_return' => 'Pulse %saqu&iacute;%s para volver al e-mail masivo/MP',
/* lang_megamail.php - END */

/* lang_admin_voting.php - BEGIN */
	'Admin_Vote_Explain' => 'Resultados de encuestas (qui&eacute;n ha votado y qu&eacute; ha votado).',
	'Admin_Vote_Title' => 'Administraci&oacute;n de encuestas',
	'Vote_id' => '#',
	'Poll_topic' => 'Tema de encuesta',
	'Vote_username' => 'Votante(s)',
	'Vote_end_date' => 'Duraci&oacute;n del voto',
	'Sort_vote_id' => 'N&uacute;mero de encuesta',
	'Sort_poll_topic' => 'Tema de encuesta',
	'Sort_poll_title' => 'T&iacute;tulo de la encuesta',
	'Sort_poll_start' => 'Fecha de inicio',
	'Sort_poll_end' => 'Fecha de fin',
	'Submit' => 'Enviar',
	'Select_sort_field' => 'Seleccione la clase de campo',
	'Sort_ascending' => 'Ascendente',
	'Sort_descending' => 'Descendente',
/* lang_admin_voting.php - END */

/* lang_admin_gd_info.php - BEGIN */
	'GD_Title' => 'Informaci&oacute;n GD',
	'NO_GD' => 'No GD',
	'GD_Description' => 'Especificaciones de su librer&iacute;a GD',
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
	'GD_True' => 'S&iacute;',
	'GD_False' => 'No',
/* lang_admin_gd_info.php - END */

/* lang_admin_captcha.php - BEGIN */
	'VC_Captcha_Config' => 'Configuraci&oacute;n CAPTCHA',
	'captcha_config_explain' => 'Aqu&iacute; puede escoger c&oacute;mo se ver&aacute; la imagen que se mostrar&aacute; al activar la confirmaci&oacute;n visual en el registro .',
	'VC_active' => 'Confirmaci&oacute;n visual activa',
	'VC_inactive' => 'Confirmaci&oacute;n visual no activa',
	'background_configs' => 'Configuraci&oacute;n del fondo',
	'Click_return_captcha_config' => 'Pulse %saqu&iacute;%s para volver a la configuraci&oacute;n de CAPTCHA',

	'CAPTCHA_width' => 'CAPTCHA ancho',
	'CAPTCHA_height' => 'CAPTCHA alto',
	'background_color' => 'Color de fondo',
	'background_color_explain' => 'Puesto en hexadecimal (eg. #0000FF para azul).',
	'pre_letters' => 'N&uacute;mero de letras a ocultar',
	'pre_letters_explain' => '',
	'great_pre_letters' => 'Aumento de letras a ocultar',
	'great_pre_letters_explain' => '',
	'Random' => 'Aleatorio',
	'random_font_per_letter' => 'Fuente de letra aleatoria',
	'random_font_per_letter_explain' => 'Cada letra usa una fuente aleatoria.',

	'back_chess' => 'Muestra de cuadrados',
	'back_chess_explain' => 'Llene el fondo completo con 16 rect&aacute;ngulos.',
	'back_ellipses' => 'Elipses',
	'back_arcs' => 'L&iacute;neas curvas',
	'back_lines' => 'L&iacute;neas',
	'back_image' => 'Imagen de fondo',
	'back_image_explain' => '(Esta funci&oacute;n no est&aacute; integrada)',

	'foreground_lattice' => 'Rejas de primer plano',
	'foreground_lattice_explain' => '(ancho x alto)<br />Genera unas rejas en CAPTCHA',
	'foreground_lattice_color' => 'Color de las rejas',
	'foreground_lattice_color_explain' => 'Indicaci&oacute;n en hexadecimal (ex. #0000FF es azul).',
	'gammacorrect' => 'Correcci&oacute;n de contraste',
	'gammacorrect_explain' => '(0 = off)<br />NOTA: &iexcl;&iexcl;Los cambios influyen en la legilibilidad de CAPTCHA!!',
	'generate_jpeg' => 'Formato de imagen',
	'generate_jpeg_explain' => 'El formato JPEG tiene una compresi&oacute;n m&aacute;s alta que el png y tiene, con el cambio de la compresi&oacute;n (m&aacute;ximo del 95%), una influencia directa en la legibilidad del CAPTCHA.',
	'generate_jpeg_quality' => 'Calidad',
/* lang_admin_captcha.php - END */

/* lang_admin_topic_shadow.php - BEGIN */
	'Del_Before_Date' => 'Eliminar todos los temas sombreados anteriores a %s<br />', // %s = insertion of date
	'Deleted_Topic' => 'Tema sombreado eliminado %s<br />', // %s = topic name
	'Affected_Rows' => '%d entradas conocidas fueron afectadas<br />', // %d = affected rows (not avail with all databases!)
	'Delete_From_Date' => 'Todos los temas sombreados creados antes de la fecha especificada ser&aacute;n eliminados.',
	'Delete_Before_Date_Button' => 'Eliminar todos los anteriores a la fecha',
	'No_Shadow_Topics' => 'No se encontraron temas sombreados.',
	'Topic_Shadow' => 'Tema sombreado',
	'TS_Desc' => 'Permite la eliminaci&oacute;n de temas sombreados sin eliminar el mensaje actual. Los temas sombreados se crean cuando mueve un tema a otro foro y elige dejar atr&aacute;s en el foro original un enlace al foro donde se movi&oacute; el tema.',
	'Month' => 'Mes',
	'Day' => 'D&iacute;a',
	'Year' => 'A&ntilde;o',
	'Clear' => 'Vaciar',
	'Resync_Ran_On' => 'Resincronizaci&oacute;n ejecutada en %s<br />', // %s = insertion of forum name
	'Version' => 'Versi&oacute;n',

	'Title' => 'T&iacute;tulo',
	'Moved_To' => 'Movido a',
	'Moved_From' => 'Movido desde',

/* Modes */
	'topic_time' => 'Fecha de tema',
	'topic_title' => 'T&iacute;tulo de tema',

/* Errors */
	'Error_Month' => 'El mes debe estar entre 1 y 12',
	'Error_Day' => 'El d&iacute;a debe estar entre 1 y 31',
	'Error_Year' => 'El a&ntilde;o debe estar entre 1970 y 2038',
	'Error_Topics_Table' => 'Error accediendo a la tabla de temas',
/* lang_admin_topic_shadow.php - END */

/* lang_admin_rebuild_search.php - BEGIN */
	'Rebuild_search' => 'Reconstruir &iacute;ndice de b&uacute;squeda',
	'Rebuild_search_desc' => 'Se indexar&aacute; cada mensaje de su foro, reconstruyendo las tablas de b&uacute;squeda. Esto podr&iacute;a durar bastante tiempo: por favor, no cambie de p&aacute;gina hasta que se complete el proceso.',
	'Post_limit' => 'L&iacute;mite de mensajes',
	'Time_limit' => 'L&iacute;mite de tiempo',
	'Refresh_rate' => 'Radio de actualizaci&oacute;n',

	'Next' => 'Siguiente',
	'Finished' => 'Finalizar',
/* lang_admin_rebuild_search.php - END */

/* lang_admin_faq_editor.php - BEGIN */
	'faq_editor' => 'Editar p&aacute;ginas de ayuda',
	'faq_editor_explain' => 'Desde aqu&iacute; puede editar los textos de ayuda de su web.',

	'faq_select_language' => 'Elija el lenguaje del archivo que desea editar',
	'faq_retrieve' => 'Recuperar archivo',

	'faq_block_delete' => '&iquest;Est&aacute; seguro de querer eliminar este bloque?',
	'faq_quest_delete' => '&iquest;Est&aacute; seguro de querer eliminar esta pregunta (y su respuesta)?',

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

	'faq_block_add' => 'A&ntilde;adir bloque',
	'faq_quest_add' => 'A&ntilde;adir pregunta',

	'faq_no_quests' => 'No hay preguntas en este bloque. Esto prevendr&aacute; que cualquier bloque se muestre despu&eacute;s de este. Borre el bloque o agregue una o m&aacute;s preguntas.',
	'faq_no_blocks' => 'No hay bloques definidos. A&ntilde;adir un nuevo bloque escribiendo un nombre debajo.',

	'faq_write_file' => 'No se ha podido escribir en el archivo de lenguaje',
	'faq_write_file_explain' => 'Puede crear el archivo de lenguaje en language/lang_spanish/ o equivalente, se puede <i>escribir</i> para usar este panel de control. En UNIX, otorgue <code>CHMOD 666</code> al nombre del archivo. Muchos clientes FTP lo pueden hacer a trav&eacute;s de las caracter&iacute;sticas para un archivo. Si no, puede utilizar el telnet o SSH.',
/* lang_admin_faq_editor.php - END */

/* lang_admin_rules_editor.php - BEGIN */
	'rules_editor' => 'Editar lenguaje',
	'rules_editor_explain' => 'Este m&oacute;dulo le permite editar y recuperar las normas de su sitio.',

	'rules_select_language' => 'Elija el lenguaje del archivo que desea editar',
	'rules_retrieve' => 'Recuperar archivo',

	'rules_block_delete' => '&iquest;Est&aacute; seguro de querer eliminar este bloque?',
	'rules_quest_delete' => '&iquest;Est&aacute; seguro de querer eliminar esta pregunta (y su respuesta)?',

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

	'rules_block_add' => 'A&ntilde;adir bloque',
	'rules_quest_add' => 'A&ntilde;adir pregunta',

	'rules_no_quests' => 'No hay preguntas en este bloque. Esto prevendr&aacute; que cualquier bloque se muestre despu&eacute;s de este. Borre el bloque o agregue una o m&aacute;s preguntas.',
	'rules_no_blocks' => 'No hay bloques definidos. A&ntilde;adir un nuevo bloque escribiendo un nombre debajo.',

	'rules_write_file' => 'No se ha podido escribir en el archivo de lenguaje',
	'rules_write_file_explain' => 'Puede crear el archivo de lenguaje en language/lang_spanish/ o equivalente. Se puede <i>escribir</i> para usar este panel de control. En UNIX, otorgue <code>CHMOD 666</code> al nombre del archivo. Muchos clientes FTP lo pueden hacer a trav&eacute;s de las caracter&iacute;sticas para un archivo; si no, puede utilizar el telnet o SSH.',
/* lang_admin_rules_editor.php - END */

/* lang_admin_priv_msgs.php - BEGIN */
	'PM_View_Type' => 'Tipo de vista de MP',
	'Show_IP' => 'Mostrar direcci&oacute;n IP',
	'Rows_Per_Page' => 'Filas por p&aacute;gina',
	'Archive_Feature' => 'Caracter&iacute;stica del archivo',
	'Inline' => 'En l&iacute;nea',
	'Pop_up' => 'Pop-up',
	'Current' => 'Actual',
	'Rows_Plus_5' => 'A&ntilde;adir 5 filas',
	'Rows_Minus_5' => 'Quitar 5 filas',
	'Enable' => 'Habilitar',
	'Disable' => 'Deshabilitar',
	'Inserted_Default_Value' => 'El art&iacute;culo de configuraci&oacute;n %s no exist&iacute;a, se ha insertado un valor por defecto<br />', // %s = config name
	'Updated_Config' => 'Art&iacute;culo de configuraci&oacute;n %s actualizado<br />', // %s = config item
	'Archive_Table_Inserted' => 'La tabla de archivo no exist&iacute;a, se ha creado<br />',
	'Switch_Normal' => 'Cambiar a modo normal',
	'Switch_Archive' => 'Cambiar a modo archivo',

/* General */
	'Deleted_Message' => 'Mensaje privado borrado - %s <br />', // %s = PM title
	'Archived_Message' => 'Mensaje privado archivado - %s <br />', // %s = PM title
	'Archived_Message_No_Delete' => 'No puede suprimir %s. Fue marcado tambi&eacute;n para el archivo de MPs<br />', // %s = PM title
	'Private_Messages' => 'Mensajes privados',
	'Private_Messages_Archive' => 'Archivo de los mensajes privados',
	'Archive' => 'Archivo',
	'To' => 'Para',
	'Subject' => 'Asunto',
	'Sent_Date' => 'Fecha de env&iacute;o',
	'From' => 'De',
	'Sort' => 'Clase',
	'Filter_By' => 'Filtrar por',
	'PM_Type' => 'Tipo MP',
	'Status' => 'Estado',
	'No_PMS' => 'No se han encontrado mensajes privados a mostrar seg&uacute;n el criterio',
	'Archive_Desc' => 'Los mensajes privados que ha elegido archivar se enumeran aqu&iacute;. Los usuarios (quien env&iacute;a y quien recibe) pueden acceder a ellos, pero usted puede verlos o suprimirlos en cualquier momento.',
	'Normal_Desc' => 'Todos los mensajes privados de su foro se pueden manejar aqu&iacute;. Puede leer cualquiera, y suprimir o archivar los mensajes.',
	'Remove_Old' => 'MPs hu&eacute;rfanos:</a> <span class="gensmall">Los usuarios que ya no existen podr&iacute;an tener MPs. Esto los quitar&aacute;.</span>',
	'Remove_Sent' => 'Caja de env&iacute;os de MPs:</a> <span class="gensmall">Los MPs de la caja de env&iacute;os son copias exactas del mismo mensaje que fue enviado, a menos que est&eacute; asignado al remitente, despu&eacute;s de que el otro usuario haya le&iacute;do el MP. Estos no se necesitan.</span>',
	'Removed_Old' => 'Borrar todos los MPs hu&eacute;rfanos<br />',
	'Removed_Sent' => 'Borrar todos los MPs enviados<br />',
	'Utilities' => 'Utilidades de borrado masivo',
	'Nivisec_Com' => 'Nivisec.com',

/* PM Types */
	'PM_-1' => 'Todos los tipos', //PRIVMSGS_ALL_MAIL = -1
	'PM_0' => 'MPs le&iacute;dos', //PRIVMSGS_READ_MAIL = 0
	'PM_1' => 'MPs nuevos', //PRIVMSGS_NEW_MAIL = 1
	'PM_2' => 'MPs enviados', //PRIVMSGS_SENT_MAIL = 2
	'PM_3' => 'MPs guardados (Entrada)', //PRIVMSGS_SAVED_IN_MAIL = 3
	'PM_4' => 'MPs guardados (Salida)', //PRIVMSGS_SAVED_OUT_MAIL = 4
	'PM_5' => 'MPs sin leer', //PRIVMSGS_UNREAD_MAIL = 5

/* Errors */
	'Error_Other_Table' => 'Error de b&uacute;squeda en la tabla requerida.',
	'Error_PM_Text_Table' => 'Error de b&uacute;squeda en la tabla de texto de mensajes privados.',
	'Error_PM_Table' => 'Error de b&uacute;squeda en la tabla de mensajes privados.',
	'Error_PM_Archive_Table' => 'Error de b&uacute;squeda en la tabla de archivo de los mensajes privados.',
	'No_Message_ID' => 'No ha especificado una ID para el mensaje.',
/* lang_admin_priv_msgs.php - END */

/* lang_admin_link.php - BEGIN */
// Categories
	'Link_Categories_Title' => 'Administrar categor&iacute;as de los enlaces',
	'Link_Categories_Explain' => 'En esta pantalla  puede administrar sus categor&iacute;as: crear, cambiar, borrar, mover, etc.',
	'Category_Permissions' => 'Permisos de la categor&iacute;a',
	'Category_Title' => 'T&iacute;tulo de la categor&iacute;a',
	'Category_Desc' => 'Descripci&oacute;n de la categor&iacute;a',
	'View_level' => 'Nivel de vista',
	'Upload_level' => 'Nivel de carga',
	'Rate_level' => 'Nivel de puntuaci&oacute;n',
	'Comment_level' => 'Nivel del comentario',
	'Edit_level' => 'Editar nivel',
	'Delete_level' => 'Borrar nivel',
	'New_category_created' => 'La nueva categor&iacute;a se ha creado correctamente.',
	'Click_return_link_category' => 'Pulse %saqu&iacute;%s para volver a administrar categor&iacute;as de los enlaces',
	'Category_updated' => 'Esta categor&iacute;a se ha actualizado correctamente.',
	'Delete_Category' => 'Borrar categor&iacute;a',
	'Delete_Category_Explain' => 'El formulario de abajo le permitir&aacute; suprimir una categor&iacute;a.',
	'Category_deleted' => 'Esta categor&iacute;a se ha borrado correctamente.',
	'Category_changed_order' => 'Esta categor&iacute;a se ha modificado correctamente.',

// Config
	'Link_Config' =>'Configurar enlaces',
	'Link_config_explain' => 'Aqu&iacute; puede cambiar la configuraci&oacute;n general de sus enlaces.',
	'lock_submit_site' => 'Impedir que los usuarios puedan enviar enlaces',
	'allow_guest_submit_site' => 'Permitir a los invitados enviar enlaces',
	'allow_no_logo' => 'Permitir enviar enlaces sin banner',
	'site_logo' => 'URL donde se encuentra el logotipo (URL completa)',
	'site_url' => 'URL de la p&aacute;gina web',
	'width' => 'Ancho m&aacute;ximo de los banners',
	'height' => 'Altura m&aacute;xima de los banners',
	'linkspp' => 'Enlaces m&aacute;ximos por p&aacute;gina',
	'interval' => 'Velocidad de movimiento de los banners en el bloque',
	'display_logo' => 'Cantidad de banners a mostrar simult&aacute;neamente',
	'Link_display_links_logo' => 'Mostrar los logotipos de las webs enlazadas',
	'Link_email_notify' => 'Cuando se agregue un enlace, enviar un correo a todos los administradores de la web',
	'Link_pm_notify' => 'Cuando se agregue un enlace, enviar un mensaje privado a todos los administradores de la web',
	'Link_config_updated' => 'La configuraci&oacute;n de los enlaces se ha actualizado correctamente',
	'Click_return_link_config' => 'Pulse %saqu&iacute;%s para volver a configurar los enlaces.',

// Link_MOD
	'Links' => 'Administrar enlaces',
	'Links_explain' => 'Desde esta secci&oacute;n puede ver el estado de los enlaces y corregir o eliminar el enlace seleccionado.',
	'Add_link' => 'A&ntilde;adir enlace',
	'Add_link_explain' => 'El formulario de abajo le permitir&aacute; agregar un enlace directamente.',
	'Edit_link' => 'Corregir enlace',
	'Edit_link_explain' => 'El formulario de abajo le permitir&aacute; corregir un enlace, y tambi&eacute;n activarlo',
	'Delete_link' => 'Borrar enlace',
	'Delete_link_explain' => 'El formulario de abajo permitir&aacute; eliminar un enlace, y tambi&eacute;n activarlo',
	'Link_update' => 'Actualizaci&oacute;n de los detalles del enlace',
	'Link_delete' => 'Borrar este enlace',
	'Link_title' => 'Nombre de la web',
	'Link_url' => 'URL de la web',
	'Link_logo_src' => 'Logotipo de la web (88x31 p&iacute;xeles, tama&ntilde;o no mayor de 10Kb)',
	'Link_category' => 'Categor&iacute;a de la web',
	'Link_desc' => 'Descripci&oacute;n de la web',
	'link_hits' => 'Accesos',
	'Link_basic_setting' => 'Datos del enlace',
	'Link_adv_setting' => 'Otras opciones',
	'Link_active' => 'Activar estado',

	'Link_admin_add_success' => 'Enlace agregado correctamente.',
	'Link_admin_add_fail' => 'Imposible agregar el nuevo enlace; por favor, int&eacute;ntelo de nuevo m&aacute;s tarde.',
	'Link_admin_update_success' => 'Enlace actualizado correctamente.',
	'Link_admin_update_fail' => 'Imposible actualizar el enlace; por favor, int&eacute;ntelo de nuevo m&aacute;s tarde.',
	'Link_admin_delete_success' => 'Enlace eliminado con &eacute;xito.',
	'Link_admin_delete_fail' => 'Imposible eliminar el enlace; por favor, int&eacute;ntelo de nuevo m&aacute;s tarde.',
	'Click_return_lastpage' => 'Pulse %saqu&iacute;%s para volver a la p&aacute;gina anterior.',
	'Click_return_admin_links' => 'Pulse %saqu&iacute;%s para volver a administrar enlaces',
	'Preview' => 'Vista previa',
	'Search_site' => 'Buscar web',
	'Search_site_title' => 'Buscar web nombre/descripci&oacute;n:',
/* lang_admin_link.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

// Icy Phoenix - BUILD 009
	'Replace_title' => 'Sustituir en mensajes',
	'Replace_text' => 'En esta p&aacute;gina puede sustituir palabras o l&iacute;neas por lo que quiera. Esto no podr&aacute; ser deshecho.',
	'Link' => 'Enlace',
	'Str_old' => 'Texto actual',
	'Str_new' => 'Sustituir por',
	'No_results' => 'No se ha encontrado ning&uacute;n resultado',
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
	'Add_New_Group' => 'A&ntilde;adir grupo',
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
	'Add_Arrow' => 'A&ntilde;adir a la lista',
	'Update' => 'Actualizar',
	'Updated_Group' => 'Lista actualizada de grupo de usuarios<br />',
	'Deleted_Group' => 'Grupo especificado borrado. Ha reajustado a todos los usuarios que estaban a ninguna categor&iacute;a de usuario de grupo<br />',
	'Hide' => 'Ocultar',
	'Un-hide' => 'Mostrar',
	'Group_Hidden' => 'Grupo oculto<br />',
	'Group_Unhidden' => 'Grupo mostrado<br />',
	'Groups_Updated' => 'Los cambios del grupo se han actualizado<br />',
	'Moved_Group' => 'Mover orden del grupo<br />',

//Descriptions
	'Manage_Color_Groups_Desc' => 'Puede actualizar grupos, a&ntilde;adir nuevos, o administrar los usuarios asignados a cada grupo de un color.<br />Los grupos marcados como "ocultar" no se mostrar&aacute;n en la lista del &iacute;ndice.',
	'Color_Group_User_List_Desc' => 'A&ntilde;adir o quitar usuarios al grupo del color especificado.',

//Errors
	'Error_Group_Table' => 'Error de b&uacute;squeda en la tabla de grupos por color.',
	'Error_Font_Color' => '<b><u>&iexcl;Peligro:</b></u>  La fuente de color especificada no es v&aacute;lida!',
	'Color_Ok' => 'La fuente de color especificada es v&aacute;lida.',
	'No_Groups_Exist' => 'No existen grupos.',
	'Error_Users_Table' => 'Error de b&uacute;squeda en la tabla de usuarios.',
	'Invalid_Group_Add' => '%s es inv&aacute;lido o se repite el nombre del grupo.<br />',

//Dynamic
	'Group_Updated' => 'Actualizado el color del grupo %s<br />',
	'Editing_Group' => 'Actualmente editando la lista de usuarios de %s.',
	'Invalid_User' => '%s es un nombre de usuario inv&aacute;lido, saltar...<br />',
	'Invalid_Order_Num' => '%s contiene un n&uacute;mero de orden inv&aacute;lido, pero se ha fijado. Por favor, intente su movimiento arriba/abajo otra vez.',

//New for 1.2.0
	'Users_List' => 'Lista de usuarios',
	'Groups_List' => 'Lista de grupos de usuarios',
	'List_Info' => '<b>Notas</b>: <ul><li>Pulse CTRL mientras va pulsando para seleccionar m&uacute;ltiples nombres. <li>Si un usuario pertenece a un grupo de usuario, y se agrega a un grupo espec&iacute;fico de color, se utilizar&aacute; el grupo de color que contiene al usuario, no el grupo de usuario al que pertenece.<li>Los nombres de la lista usan como formato NOMBRE (CURRENT_COLOR_GROUP). Si no hay ning&uacute;n (CURRENT_COLOR_GROUP) la entrada no pertenece a nada.<li>Si un usuario es usuario de dos o m&aacute;s grupos de usuarios, se asignar&aacute; la graduaci&oacute;n al grupo de color m&aacute;s alto (usted ordene su aspecto en la p&aacute;gina principal).</ul>',
/* lang_color_groups.php - END */

// Icy Phoenix - BUILD 023
	'Empty_Cache_Main_Question' => 'Si selecciona "si", todos los archivos en el directorio principal del cach&eacute; ser&aacute;n borrados permanentemente.<br /><br /><em> &iquest;Est&aacute; seguro de hacerlo? </em>',
	'Empty_Cache_Posts_Question' => 'Si selecciona "si", el campo de mensajes precompilados de la tabla de mensajes ser&aacute;n borrados permanentemente.<br /><br /><em> &iquest;Est&aacute; seguro de hacerlo? </em>',
	'Empty_Cache_Thumbs_Question' => 'Si selecciona "si", todas las miniaturas generadas en mensajes ser&aacute;n borradas permanentemente.<br /><br /><em> &iquest;Est&aacute; seguro de hacerlo? </em>',
	'Empty_Cache_Success' => 'Directorios con cach&eacute; limpiados correctamente.',

	'Copy_Auth' => 'Copiar permisos de',
	'Copy_Auth_Explain' => 'Tenga en cuenta que s&oacute;lo puede copiar los permisos de los foros, no de las categor&iacute;as!!!',

// Icy Phoenix - BUILD 027
/* lang_admin_db_backup.php - BEGIN */
	'SELECT_ALL' => 'Seleccionar todo',
	'SELECT_FILE' => 'Seleccionar un archivo',
	'START_BACKUP' => 'Comenzar copia',
	'START_RESTORE' => 'Comenzar restauraci&oacute;n',
	'STORE_AND_DOWNLOAD' => 'Almacenar y descargar',
	'STORE_LOCAL' => 'Almacenar archivo localmente',
	'STRUCTURE_ONLY' => 'Estructura solamente',

// Backup
	'ACP_BACKUP' => 'Copia de base de datos',
	'ACP_BACKUP_EXPLAIN' => 'Aqu&iacute; puede crear copias de seguridad de todos los datos relacionados con su sitio. Puede almacenar el archivo resultante en su carpeta <samp>backup/</samp> o descargarlo directamente. Dependiendo de la configuraci&oacute;n de su servidor, puede ser capaz de comprimir el archivo en varios formatos.',

	'BACKUP_OPTIONS' => 'Opciones de copia',
	'BACKUP_TYPE' => 'Tipo de copia',

	'DATABASE' => 'Utilidades de base de datos',
	'DATA_ONLY' => 'Datos solamente',
	'DELETE_BACKUP' => 'Borrar copia',
	'DELETE_SELECTED_BACKUP' => '&iquest;Est&aacute; seguro de querer borrar la copia seleccionada?',
	'DESELECT_ALL' => 'Quitar selecci&oacute;n a todo',
	'DOWNLOAD_BACKUP' => 'Descargar copia',

	'FILE_TYPE' => 'Tipo de archivo',
	'FULL_BACKUP' => 'Completo',

	'BACKUP_TYPE_COMPLETE' => 'Completo',
	'BACKUP_TYPE_EXTENDED' => 'Extendido',
	'BACKUP_TYPE_COMPACT' => 'Saltos de l&iacute;nea compactos',

	'BACKUP_SUCCESS' => 'La copia de seguridad se ha creado correctamente.',
	'BACKUP_DELETED' => 'La copia de seguridad se ha eliminado correctamente.',

	'TABLE_SELECT' => 'Tabla seleccionada',

	'BACKUP_IN_PROGRESS' => 'Copia de seguridad en progreso...',
	'BACKUP_IN_PROGRESS_TABLE' => 'Copiando la tabla: <b>%s</b>',
	'BACKUP_IN_PROGRESS_REDIRECT' => 'Ser&aacute; redirigido autom&aacute;ticamente al siguiente paso en unos segundos',
	'BACKUP_IN_PROGRESS_REDIRECT_CLICK' => 'Si no es redirigido autom&aacute;ticamente en unos segundos puede pulsar %saqu&iacute;%s',
	'BACKUP_OPTIONS_RETURN' => 'Pulse %saqu&iacute;%s para volver a la administraci&oacute;n de copias de seguridad',

// Errors
	'Table_Select_Error' => 'Debe seleccionar al menos una tabla.',

// Restore
	'ACP_RESTORE' => 'Restaurar base de datos',
	'ACP_RESTORE_EXPLAIN' => 'Se realizar&aacute; una plena restauraci&oacute;n de todas las tablas de su sitio desde un archivo guardado. Si su servidor lo soporta, puede utilizar un archivo comprimido gzip, bzip2, o archivo de texto y &eacute;ste ser&aacute; descomprimido. <strong>ATENCI&Oacute;N:</strong> Esto sobrescribir&aacute; los datos existentes. La restauraci&oacute;n puede tardar mucho tiempo de proceso, por favor, NO se mueva de esta p&aacute;gina hasta que se complete. Las copias son almacenadas en la carpeta <samp>backup/</samp> y se supone que se genera por la funcionalidad de copia de seguridad de este sitio. La restauraci&oacute;n de copias de seguridad que no fueron creadas por este sistema, puede que no funcionen correctamente.',
	'RESTORE_OPTIONS' => 'Opciones de restauraci&oacute;n',

	'Restore_Success' => 'La base de datos ha sido restaurada correctamente.<br />Su sitio debe volver al estado en que estaba cuando se hizo la copia de seguridad.',

// Errors
	'No_Backup_Selected' => 'No ha seleccionado ninguna copia de seguridad, no se puede restaurar.',
	'Backup_Invalid' => 'El archivo seleccionado de copia es inv&aacute;lido.',
	'RESTORE_FAILURE' => 'El archivo de copia est&aacute; corrupto.',
/* lang_admin_db_backup.php - END */

/* Logs - BEGIN */
	'LOGS_ACTIONS_FILTER' => 'Filtro de acciones',
	'LOGS_TITLE' => 'Logs',
	'LOGS_EXPLAIN' => 'Todas las acciones relevantes se almacenan en la BD',
	'LOGS_TARGET' => 'Meta',
	'LOGS_DELETE' => 'Borrar seleccionados',
	'LOGS_DELETE_ALL' => 'Limpiar tabla de logs',
	'LOGS_DENY' => '&iexcl;No esta autorizado!',
	'LOGS_POST_EDIT' => 'ha editado un mensaje publicado por',
	'LOGS_POST_DELETE' => 'ha eliminado un mensaje publicado por',
	'LOGS_GROUP_JOIN' => 'ha pedido unirse al grupo',
	'LOGS_GROUP_EDIT' => 'ha editado las opciones del grupo de %s',
	'LOGS_GROUP_ADD' => 'ha a&ntilde;adido a %s al grupo',
	'LOGS_GROUP_TYPE' => 'ha editado el estado del grupo %s, ahora el grupo es %s',
	'LOGS_GROUP_TYPE_0' => 'abierto',
	'LOGS_GROUP_TYPE_1' => 'cerrado',
	'LOGS_GROUP_TYPE_2' => 'oculto',
	'LOGS_MESSAGE' => 'Mensaje recibido por un usuario, c&oacute;digo <b>%s</b>',
	'LOGS_MODCP_DELETE' => 'ha eliminado algunos mensajes de %s a trav&eacute;s de MODCP',
	'LOGS_MODCP_RECYCLE' => 'ha enviado a la papelera algunos mensajes de %s a trav&eacute;s de MODCP',
	'LOGS_MODCP_LOCK' => 'ha cerrado algunos mensajes de %s a trav&eacute;s MODCP',
	'LOGS_MODCP_UNLOCK' => 'ha abierto algunos mensajes de %s a trav&eacute;s MODCP',
	'LOGS_MODCP_MOVE' => 'ha movido algunos mensajes de %s a trav&eacute;s MODCP',
	'LOGS_MODCP_MERGE' => 'ha fusionado algunos mensajes de %s a trav&eacute;s MODCP',
	'LOGS_MODCP_SPLIT' => 'ha separado algunos mensajes de in %s a trav&eacute;s MODCP',
	'LOGS_TOPIC_BIN' => 'ha enviado a la papelera un mensaje',
	'LOGS_TOPIC_ATTACK' => 'intentos de hack a un mensaje',
	'LOGS_CARD_BAN' => 'baneado',
	'LOGS_CARD_WARN' => 'amonestado',
	'LOGS_CARD_UNBAN' => 'desbaneado',
	'LOGS_ADMIN_CAT_ADD' => 'a&ntilde;adida una categor&iacute;a',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP' => 'Backup BD %s',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_full' => 'completo',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_structure' => 's&oacute;lo estructura',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_data' => 'fecha',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_store_and_download' => ', descargado y almacenado',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_store' => ', almacenado',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_download' => ', descargado',
	'LOGS_ADMIN_DB_UTILITIES_RESTORE' => 'BD restaurada desde',
	'LOGS_ADMIN_BOARD_CONFIG' => 'editados ajustes de configuraci&oacute;n',
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
	'LOGS_CMS_LAYOUT_EDIT' => 'p&aacute;gina %sTHIS%s editada',
	'LOGS_CMS_LAYOUT_DELETE' => 'p&aacute;gina [ID = %s] eliminada',
	'LOGS_CMS_BLOCK_EDIT' => 'bloque [ID = %s] modificado de la p&aacute;gina %sTHIS%s',
	'LOGS_CMS_BLOCK_EDIT_LS' => 'bloque [ID = %s] modificado en la p&aacute;gina est&aacute;ndar [%s]',
	'LOGS_CMS_BLOCK_DELETE' => 'bloque [ID = %s] eliminado de la p&aacute;gina %sTHIS%s',
	'LOGS_CMS_BLOCK_DELETE_LS' => 'bloque [ID = %s] eliminado de la p&aacute;gina est&aacute;ndar [%s]',
/* Logs - END */

	'SMILEYS_UPDATED' => 'Emoticonos actualizados',

/* ADS - BEGIN */
	'ADS_TITLE' => 'Publicidad &amp; patrocinadores',
	'ADS_TITLE_EXPLAIN' => 'Esta secci&oacute;n le permite configurar banners de publicidad y patrocinadores para mostrar en su foro. Puede a&ntilde;adir diferentes formatos de banners y decidir donde quiere mostrar o que nivel de usuario podr&aacute; o no podr&aacute; verlo. Si especifica mas de un banner para una posici&oacute;n especifica, ambos banners se mostrar&aacute;n de forma aleatoria con las configuraciones especificadas en la misma posici&oacute;n.',
	'AD_DES' => 'Descripci&oacute;n',
	'AD_TEXT' => 'Contenido',
	'AD_ENABLED' => 'Activado',
	'AD_STATUS' => 'Estado',
	'AD_STATUS_EXPLAIN' => 'Seleccione si quiere activar esta publicidad o si quiere desactivarla',
	'AD_POSITION' => 'Posici&oacute;n',
	'AD_AUTH' => 'Permisos',
	'AD_AUTH_EXPLAIN' => 'Usuarios que podr&aacute;n ver esta publicidad',
	'AD_AUTH_GUESTS' => 'S&oacute;lo invitados',
	'AD_AUTH_REG' => 'Invitados y registrados (no admins y mods)',
	'AD_AUTH_MOD' => 'Todos menos administradores',
	'AD_AUTH_ADMIN' => 'Todos',
	'AD_FORMAT' => 'Formato',
	'AD_POS_GLT' => 'Global, arriba',
	'AD_POS_GLB' => 'Global, abajo',
	'AD_POS_GLH' => 'Global, encabezado',
	'AD_POS_GLF' => 'Global, pie de p&aacute;gina',
	'AD_POS_FIX' => 'Elemento en el &iacute;ndice de foros',
	'AD_POS_FIT' => '&Iacute;ndice de foros, arriba',
	'AD_POS_FIB' => '&Iacute;ndice de foros, abajo',
	'AD_POS_VFX' => 'Elemento viendo un foro',
	'AD_POS_VFT' => 'Viendo un foro, arriba',
	'AD_POS_VFB' => 'Viendo un foro, abajo',
	'AD_POS_VTX' => 'Elemento viendo un tema',
	'AD_POS_VTT' => 'Viendo un tema, arriba',
	'AD_POS_VTB' => 'Viendo un tema, abajo',
	'AD_POS_NMT' => 'Men&uacute; de navegaci&oacute;n, arriba',
	'AD_POS_NMB' => 'Men&uacute; de navegaci&oacute;n, abajo',
	'AD_ADD' => 'A&ntilde;adir publicidad',
	'AD_EDIT' => 'Editar publicidad',
	'AD_ADDED' => 'Publicidad a&ntilde;adida correctamente',
	'ADS_UPDATE' => 'Actualizar publicidad',
	'AD_UPDATED' => 'Publicidad actualizada correctamente',
	'AD_DELETED' => 'Publicidad eliminada correctamente',
	'CLICK_RETURN_ADS' => 'Pulse %saqu&iacute;%s para volver a la administraci&oacute;n de publicidad y patrocinadores',
	'AD_NO_ADS' => 'No hay publicidad y patrocinadores definidos',
	'ERR_AD_ADD' => 'Por favor, rellene todos los campos que se requieren',
/* ADS - END */

	'FULL_HTML' => 'HTML completo',
	'ACTIONS' => 'Acciones',
	'EDIT' => 'Editar',
	'DELETE' => 'Eliminar',

	// Tickets Submission - BEGIN
	'TICKETS_EMAILS' => 'Email Tickets',
	'TICKETS_EMAILS_EXPLAIN' => 'Esta secci&oacute;n permite especificar varias categor&iacute;as que pueden ser elegidas en la p&aacute;gina "Contacta con nosotros". Para cada categor&iacute;a, una o varias direcciones de correo pueden ser especificadas, as&iacute; el usuario elegir&aacute; un asunto especifico y el email ser&aacute; enviado a las direcciones previamente indicadas.',
	'TICKET_CAT' => 'Categor&iacute;a',
	'TICKET_CAT_TITLE' => 'T&iacute;tulo',
	'TICKET_CAT_DES' => 'Descripci&oacute;n',
	'TICKET_CAT_EMAILS' => 'Direcciones de email',
	'TICKET_CAT_EMAILS_EXPLAIN' => 'Introduzca todos los emails a los que quieres que sea enviado.<br />Separalos con punto y coma (a@a.com;b@b.com;c@c.com).',
	'TICKETS_NO_TICKETS' => 'No hay tickets',
	'TICKETS_NO_TICKET_SEL' => 'No hay tickets seleccionados',
	'TICKETS_NO_TICKET_TITLE' => 'Has de poner al menos un t&iacute;tulo',
	'TICKETS_DB_ADD' => 'A&ntilde;adir categor&iacute;a',
	'TICKETS_DB_ADDED' => 'Categor&iacute;a a&ntilde;adida correctamente',
	'TICKETS_DB_UPDATED' => 'Categor&iacute;a actualizada correctamente',
	'TICKETS_DB_DELETED' => 'Categor&iacute;a eliminada correctamente',
	'TICKETS_DB_CLICK' => 'Click %saqu&iacute;%s para volver a Email Tickets',
	// Tickets Submission - END

	'FORUM_LIMIT_EDIT_TIME' => 'Limitar tiempo de edici&oacute;n de mensajes',
	'FORUM_LIMIT_EDIT_TIME_EXPLAIN' => 'Activando esta opci&oacute;n los usuarios podr&aacute;n editar sus propios mensajes solamente en el tiempo especificado en la Configuraci&oacute;n de mensajes de Icy Phoenix (ACP &raquo; Configuraci&oacute;n &raquo; Configuraci&oacute;n General &raquo; Escribiendo y mensajes)',

	
	// Custom BBCodes - BEGIN
	'BBCODES_CUSTOM_BBCODES' => 'BBCodes Personalizados',
	'BBCODES_CUSTOM_BBCODES_EXPLAIN' => 'BBCode es una implementaci&oacute;n especial de HTML que ofrece un mejor control sobre qu&eacute; y c&oacute;mo algo es mostrado. Desde esta p&aacute; puede a&ntilde;adir, eliminar y editar BBCodes personalizados. Para poder usar estos BBCodes debe activar la opci&oacute;n <b>Activar BBCodes Personalizados</b> en la secci&oacute;n <b>ACP &raquo; Configuraci&oacute;n &raquo; Configuraci&oacute;n General &raquo; Escribiendo y Mensajes</b>.',
	'BBCODES_NO_BBCODES' => 'No hay BBCodes',
	'BBCODES_NO_BBCODES_SEL' => 'No se seleccion&oacute; ning&uacute;n BBCode',
	'BBCODES_NO_BBCODES_INPUT' => 'Debe especificar la etiqueta de BBCode',
	'BBCODES_DB_ADD' => 'A&ntilde;adir BBCode',
	'BBCODES_DB_ADDED' => 'BBCode a&ntilde;adido correctamente',
	'BBCODES_DB_UPDATED' => 'BBCode actualizado correctamente',
	'BBCODES_DB_DELETED' => 'BBCode borrado correctamente',
	'BBCODES_DB_CLICK' => 'Haga clic %saqu&iacute;%s para volver a la administraci&oacute;n de BBCodes personalizados',

	'BBCODE_ADDED' => 'BBCode a&ntilde;adido correctamente.',
	'BBCODE_EDITED' => 'BBCode editado correctamente.',
	'BBCODE_NOT_EXIST' => 'El BBCode que ha seleccionado no existe.',
	'BBCODE_HELPLINE' => 'L&iacute;nea de ayuda',
	'BBCODE_HELPLINE_EXPLAIN' => 'Este campo contiene el texto que se muestra al pasar el cursor por encima de su icono.',
	'BBCODE_HELPLINE_TEXT' => 'Texto de la l&iacute;nea de ayuda',
	'BBCODE_HELPLINE_TOO_LONG' => 'La l&iacute;nea de ayuda que escribi&oacute; es muy larga.',

	'BBCODE_INVALID_TAG_NAME' => 'La etiqueta que seleccion&oacute; ya pertenece a otro BBCode.',
	'BBCODE_INVALID' => 'Su BBCode es constru&iacute;do de una manera inv&aacute;lida.',
	'BBCODE_OPEN_ENDED_TAG' => 'Su BBCode personalizado debe contener tanto una etiqueta de apertura como de cierre.',
	'BBCODE_TAG' => 'Etiqueta',
	'BBCODE_TAG_TOO_LONG' => 'La etiqueta que ha seleccionado es muy larga.',
	'BBCODE_TAG_DEF_TOO_LONG' => 'La definici&oacute;n de etiqueta que ha seleccionado es muy larga, por favor red&uacute;zcala.',
	'BBCODE_USAGE' => 'Uso de BBCode',
	'BBCODE_USAGE_EXAMPLE' => '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN' => 'Aqu&iacute; puede definir c&oacute;mo usar el BBCode. Reemplaze cualquier inserci&oacute;n de variable con el correspondiente s&iacute;mbolo (%sver abajo%s).',

	'EXAMPLE' => 'Ejemplo:',
	'EXAMPLES' => 'Ejemplos:',

	'HTML_REPLACEMENT' => 'Reemplazo HTML',
	'HTML_REPLACEMENT_EXAMPLE' => '&lt;span style=&quot;background-color: {COLOR};&quot;&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style=&quot;font-family: {SIMPLETEXT1};&quot;&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN' => 'Aqu&iacute; debe definir el reemplazo HTML por defecto. No olvide usar los s&iacute;mbolos que especific&oacute; m&aacute; arriba.',

	'TOKEN' => 'S&iacute;mbolo',
	'TOKENS' => 'S&iacute;mbolos',
	'TOKENS_EXPLAIN' => 'Los s&iacute;mbolos son contenedores para lo que escribe el usuario. La entrada ser&aacute; validada s&oacute;lo si coincide con la definici&oacute;n correspondiente. Si es necesario, puede numerarlas a&ntilde;adiendo un n&uacute;mero como el &uacute;ltimo caracter entre las llaves, por ejemplo {TEXT1}, {TEXT2}.<br /><br />En el reemplazo HTML tambi&eacute;n puede utilizar cualquier clave de lenguaje presente en su directorio language/ como: {L_<em>&lt;NOMBRE_CADENA&gt;</em>} donde <em>&lt;NOMBRE_CADENA&gt;</em> es el nombre de la cadena traducida que desea a&ntilde;adir. Por ejemplo, {L_WROTE} se mostrar&aacute; como &quot;dijo&quot; o su traducci&oacute;n de acuerdo al lenguaje escogido por el usuario.<br /><br /><strong>Por favor tenga en cuenta que s&oacute;lo los s&iacute;mbolos listados abajo pueden ser usados en los BBCodes personalizados.</strong>',
	'TOKEN_DEFINITION' => '&iquest;Qu&eacute; puede ser?',
	'TOO_MANY_BBCODES' => 'No puede crear ning&uacute;n BBCode personalizado m&aacute;s. Por favor elimine uno o m&aacute;s BBCodes e int&eacute;ntelo de nuevo.',

	'BBCODES_TOKENS_DESCRIPTION' => '
<b>TEXT</b> &raquo; Cualquier texto, incluyendo caracteres extranjeros, n&uacute;meros, etc... No debe usar este s&iacute;mbolo en etiquetas HTML, intente usar IDENTIFIER o SIMPLETEXT.<br />
<b>SIMPLETEXT</b> &raquo; Caracteres del alfabeto latino (A-Z), n&uacute;meros, espacios, comas, puntos, menos, m&aacute;s, guiones y barras bajas<br />
<b>IDENTIFIER</b> &raquo; Caracteres del alfabeto latino (A-Z), n&uacute;meros, guiones y barras bajas<br />
<b>NUMBER</b> &raquo; Cualquier serie de d&iacute;gitos<br />
<b>EMAIL</b> &raquo; Cualquier direcci&oacute;n de email v&aacute;lida<br />
<b>URL</b> &raquo; Una URL v&aacute;lida usando cualquier protocolo (http, ftp, etc... no puede ser usado para exploits por javascript). Si no se especifica ninguno, &quot;http://&quot; es prefijado a la cadena.<br />
<b>LOCAL_URL</b> &raquo; Una URL local. La URL debe ser relativa a la p&aacute;gina del tema y no puede contener un nombre de servidor o protocolo.<br />
<b>COLOR</b> &raquo; Un color HTML, puede ser num&eacute;rico como <samp>#ff1234</samp> o un <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">Clave de Color CSS</a> como <samp>fuchsia</samp> o <samp>InactiveBorder</samp>',
	// Custom BBCodes - END

	// PLUGINS - BEGIN
	'PLUGINS' => 'Plugins',
	'PLUGINS_EXPLAIN' => 'En esta secci&oacute;n puede activar o desactivar Plugins de Icy Phoenix',
	'PLUGINS_FOLDER' => 'Carpeta',
	'PLUGINS_NAME' => 'Nombre',
	'PLUGINS_DESCRIPTION' => 'Descripci&oacute;n',
	'PLUGINS_VERSION' => 'Versi&oacute;n',
	'PLUGINS_CURRENT_VERSION' => 'Versi&oacute;n instalada',
	'PLUGINS_LAST_VERSION' => '&Uacute;ltima versi&oacute;n',
	'PLUGINS_INSTALL' => 'Instalar',
	'PLUGINS_UPGRADE' => 'Actualizar',
	'PLUGINS_UNINSTALL' => 'Desinstalar',
	'PLUGINS_UP_TO_DATE' => 'Actualizado',
	'PLUGINS_NOT_INSTALLED' => 'No instalado',
	'PLUGINS_OUTDATED' => 'No actualizado',
	'PLUGINS_UPDATE_CONFIG' => 'Actualizar Configuraci&oacute;n',
	'PLUGINS_CONFIG_UPDATED' => 'Configuraci&oacute;n de Plugins actualizada correctamente. Por favor tenga en cuenta que debe recargar el ACP (F5) para actualizar los m&oacute;dulos.',
	'PLUGINS_RETURN_CLICK' => 'Haga clic %saqu&iacute;%s para volver a los Plugins',
	'PLUGINS_NO_PLUGINS' => 'No hay Plugins para ser configurados',
	// PLUGINS - END

	'BBCODE_SETTINGS' => 'Configuraci&oacute;n de BBCode, HTML y Emoticonos',
	'POSTING_SETTINGS' => 'Configuraci&oacute;n de escritura',

	'POLL_INFINITE' => 'Infinito...',
	'POLL_ONGOING' => ' (corriendo)',
	'POLL_COMPLETED' => ' (completada)',

	'FORUM_LIKES' => 'Me gusta',
	'FORUM_LIKES_EXPLAIN' => 'Permite a los usuarios marcar mensajes con "me gusta" (debe activar el interruptor global en la configuraci&oacute;n de Icy Phoenix [Carga SQL] para permitir a los usuarios utilizar esta funci&oacute;n)',

	'POSTS_PICS' => 'Mensajes / Im&aacute;genes',
    'POSTS_PICS' => 'Temas / Imagenes',

    'INACTIVE_USER_FEATURE' => 'Actualizar este Usuario',
    'INACTIVE_USER_FEATURE_EXPLAIN' => 'Habilitando esto, el Usuario sera remplazado en Temas y Foro. El perfil sera reemplazado por datos de usuario anonimo. Solo sera reemplazado, si su cuanta es inactiva.',

    'RANK_SHOW_TITLE' => 'Mostrar el Titulo del Rango',
    'RANK_SHOW_TITLE_EXPLAIN' => 'Dishabilitando esta funcion, solo la imagen del Rango sera mostrada',

	'AJAX_CHAT_MSGS_REFRESH' => 'Tiempo de actualizaci&oacute;n',
	'AJAX_CHAT_MSGS_REFRESH_EXPLAIN' => 'Por favor, introduzca el intervalo de tiempo en segundos para que el sistema compruebe si hay nuevos mensajes en el chat. Este valor no debe ser inferior a 2 segundos (1 segundo si se establece un valor m&aacute;s bajo).',
	'AJAX_CHAT_SESSION_REFRESH' => 'Duraci&oacute;n de la sesi&oacute;n',
	'AJAX_CHAT_SESSION_REFRESH_EXPLAIN' => 'Por favor, introduzca la duraci&oacute;n de las sesiones de chat. Este valor se utiliza para comprobar si los usuarios en el chat han abandonado la conversaci&oacute;n. Este valor no debe ser inferior a 10 segundos (5 segundos si se establece un valor m&aacute;s bajo).',
	'AJAX_CHAT_LINK_TYPE' => 'Formato de la ventana del chat',
	'AJAX_CHAT_LINK_TYPE_EXPLAIN' => 'Por favor, especifique si desea que una ventana de chat simplificada o una ventana con el encabezado y pie de p&aacute;gina completa (simplificado es m&aacute;s limpio y m&aacute;s r&aacute;pido).',
	'AJAX_CHAT_LINK_TYPE_SIMPLE' => 'Simplificada',
	'AJAX_CHAT_LINK_TYPE_FULL' => 'Completa',
	'AJAX_CHAT_NOTIFICATION' => 'Notificaci&oacute;n de Chat Privado',
	'AJAX_CHAT_NOTIFICATION_EXPLAIN' => 'Si se habilita esta opci&oacute;n, se enviar&aacute; una notificaci&oacute;n al usuario en el caso de que se le solicite un chat privado.',
	'AJAX_CHAT_CHECK_ONLINE' => 'Enlace al Chat privado s&oacute;lo para los usuarior conectados',
	'AJAX_CHAT_CHECK_ONLINE_EXPLAIN' => 'Si se habilita esta opci&oacute;n, el enlace al Chat privado s&oacute;lo se mostrar&aacute; a los usuarios que ya est&aacute;n en el chat, de lo contrario, se mostrar&aacute; a todos los usuarios conectados en el foro.',

// ####################### [ Icy Phoenix Options BEGIN ] #####################
	'IP_CONFIGURATION' => 'Ajustes Icy Phoenix',
	'IP_CONFIGURATION_EXPLAIN' => 'Aqu&iacute; puede instalar los ajustes avanzados de Icy Phoenix',

	'MG_SW_Precompiled_Posts_Title' => 'Mensajes precompilados',
	'MG_SW_Logins_Title' => 'Grabaci&oacute;n de conexiones',
	'MG_SW_Edit_Notes_Title' => 'Notas de edici&oacute;n',

	'MG_SW_Header_Footer' => 'Mensajes de encabezado y pie de p&aacute;gina',
	'MG_SW_Header_Table' => 'Tabla de encabezado (Header)',
	'MG_SW_Header_Table_Explain' => 'Habilitando esta opci&oacute;n, se mostrar&aacute; una tabla en el encabezado de cada p&aacute;gina con su mensaje personalizado.',
	'MG_SW_Header_Table_Text' => 'Insertar su texto aqu&iacute;',

	'MG_SW_Empty_Precompiled_Posts' => 'Vaciar precompilado de mensajes',
	'MG_SW_Empty_Precompiled_Posts_Explain' => 'Esta funci&oacute;n permite vaciar los mensajes precompilados.',
	'MG_SW_Empty_Precompiled_Posts_Success' => 'Precompilado de mensajes vaciado correctamente.',
	'MG_SW_Empty_Precompiled_Posts_Fail' => 'Errores vaciando el precompilado de mensajes.',
	'MG_SW_Empty_Precompiled_Posts_InProgress' => 'Limpiando directorios de cache en progreso...',
	'MG_SW_Empty_Precompiled_Posts_InProgress_Redirect' => 'Ser&aacute; redirigido autom&aacute;ticamente al siguiente paso en unos segundos',
	'MG_SW_Empty_Precompiled_Posts_InProgress_Redirect_Click' => 'Si no es redirigido autom&aacute;ticamente en unos segundos puede pulsar %saqu&iacute;%s',
	'MG_SW_Empty_Precompiled_Posts_Redirect_Click' => 'Pulse %saqu&iacute;%s para volver a la administraci&oacute;n de cache',

	'MG_FNF_Header' => 'Configuraciones r&aacute;pidas',
	'MG_FNF_Header_Explain' => 'En esta p&aacute;gina puede configurar r&aacute;pida y f&aacute;cilmente algunas de las opciones de su foro. Estas configuraciones por defecto se han creado para que les sea m&aacute;s f&aacute;cil a los usuarios escoger sus configuraciones sin tener que modificarlas una a una en el panel de control. Estas configuraciones por defecto se pueden utilizar como punto de partida para los futuros requisitos particulares: por ejemplo, puede seleccionar "Fast and furious" y s&oacute;lo modificar las opciones de este sistema que no le gusten.<br /><br /><span class="text_red"><b>Por favor, tenga en cuenta que una vez haya aplicado alguna de estas opciones del sistema no podr&aacute; restaurar autom&aacute;ticamente sus anteriores configuraciones, pero si que podr&aacute; hacerlo manualmente.</b></span>',
	'MG_FNF_Options_Set' => 'Opciones para seleccionar',
	'MG_FNF_FNF' => 'Fast and furious',
	'MG_FNF_FNF_Explain' => 'Esta opci&oacute;n mejorar&aacute; la velocidad de su foro, porque la mayor parte de las caracter&iacute;sticas que requieren una mayor carga de CPU o acceso a la base de datos ser&aacute;n deshabilitadas. Esto es un buen punto de partida para tener un foro muy r&aacute;pido.',
	'MG_FNF_MGS' => 'Sugerencia de Mighty Gorgon',
	'MG_FNF_MGS_Explain' => 'Este sistema de opciones es equilibrado y bueno para la mayor parte de foros. Algunas opciones ser&aacute;n permitidas mientras que algunas otras que requieren una mayor carga de CPU ser&aacute;n deshabilitadas.',
	'MG_FNF_Full_Features' => 'Caracter&iacute;sticas completas',
	'MG_FNF_Full_Features_Explain' => 'Este sistema de opciones puede permitirse si no tiene l&iacute;mite de ancho de banda, o si le gusta tener todas las caracter&iacute;sticas del Icy Phoenix activades. Por favor, tenga en cuenta que algunas de las caracter&iacute;sticas pueden no ser compatibles con su servidor.',

	'MG_SW_ACRONYMS' => 'Deshabilitar acr&oacute;nimos',
	'MG_SW_ACRONYMS_Explain' => 'Esta opci&oacute;n deshabilita la funci&oacute;n de acr&oacute;nimos',
	'MG_SW_AUTOLINKS' => 'Deshabilitar autoenlaces',
	'MG_SW_AUTOLINKS_Explain' => 'Esta opci&oacute;n deshabilita la funci&oacute;n de autoenlaces',
	'MG_SW_CENSOR' => 'Deshabilitar palabras censuradas',
	'MG_SW_CENSOR_Explain' => 'Esta opci&oacute;n deshabilita la funci&oacute;n de palabras censuradas',

	'MG_SW_No_Right_Click' => 'Bloquear bot&oacute;n secundario del rat&oacute;n',

	'Click_return_config_mg' => 'Pulse %saqu&iacute;%s para volver a los ajustes de Icy Phoenix',
	)
);
// ####################### [ Icy Phoenix Options END ] #######################

/* Special Cases, Do not bother to change for another language */
$lang['ASC'] = $lang['Sort_Ascending'];
$lang['DESC'] = $lang['Sort_Descending'];
$lang['privmsgs_date'] = $lang['Sent_Date'];
$lang['privmsgs_subject'] = $lang['Subject'];
$lang['privmsgs_from_userid'] = $lang['From'];
$lang['privmsgs_to_userid'] = $lang['To'];
$lang['privmsgs_type'] = $lang['PM_Type'];

// ####################### [ Icy Phoenix Navigation BEGIN ] #######################
// Use numbers to sort the ACP Navigation menu
// Numbers have to be changed in all /adm/*.php files too

// Configuration
$lang['1000_Configuration'] = 'Configuraci&oacute;n'; // admin_board.php, admin_config_settings.php, admin_bots.php, admin_captcha_config.php, admin_google_bot_detector.php, admin_lang_user_created.php, admin_upi2db.php
$lang['100_Main_Settings'] = 'Configuraci&oacute;n general'; // admin_config_settings.php
$lang['110_Various_Configuration'] = 'Configuraciones varias'; // admin_board.php
$lang['125_Language'] = 'Personalizar claves lenguaje'; // admin_lang_user_created.php
$lang['127_Clear_Cache'] = 'Limpiar cach&eacute;'; // admin_board_clearcache.php
$lang['130_UPI2DB_Mod'] = 'Mensajes sin leer'; // admin_upi2db.php
$lang['140_CAPTCHA'] = 'CAPTCHA'; // admin_captcha.php
$lang['145_Captcha_Config'] = 'Confirmaci&oacute;n visual'; // admin_captcha_config.php
$lang['150_Similar_topics'] = 'Temas parecidos'; // admin_similar_topics.php
$lang['160_Title_infos'] = 'Administrar t&iacute;tulo r&aacute;pido'; // admin_quick_title.php
$lang['170_LIW'] = 'L&iacute;mite de anchura de imagen'; // admin_liw.php
$lang['190_Spider_Bots'] = 'Ara&ntilde;as/robots'; // admin_bots.php
$lang['192_Google_BOT'] = 'Detector GoogleBot'; // admin_google_bot_detector.php
$lang['195_Yahoo_search'] = 'B&uacute;squeda yahoo'; // admin_yahoo_search.php
$lang['200_Language'] = 'Lenguaje';	
$lang['210_MG_Quick_Settings'] = 'Configuraciones r&aacute;pidas';	

// General
$lang['1100_General'] = 'General'; // admin_acronyms.php, admin_autolinks.php, admin_force_read.php, admin_helpdesk.php, admin_liw.php, admin_force_read.php, admin_mass_email.php, admin_megamail.php, admin_notepad.php, admin_quick_title.php, admin_smilies.php, admin_words.php, admin_yahoo_search.php
$lang['100_Acronyms'] = 'Siglas'; // admin_acronyms.php
$lang['110_Autolinks'] = 'Autoenlaces'; // admin_autolinks.php
$lang['120_Ads'] = 'Publicidad &amp; patrocinadores'; // admin_ads.php
$lang['130_Mass_Email'] = 'e-mail masivo'; // admin_mass_email.php
$lang['140_Mega_Mail'] = 'Mega e-mail'; // admin_megamail.php
$lang['150_FTR_Config'] = 'Forzar lectura de mensaje'; // admin_force_read.php
$lang['160_FTR_Users'] = 'Forzar lectura de mensaje usuario'; // admin_force_read.php
$lang['170_Smilies'] = 'Emoticonos'; // admin_smilies.php
$lang['180_Word_Censor'] = 'Censurar palabras'; // admin_words.php
$lang['200_Notepad'] = 'Bloc de notas'; // admin_notepad.php
$lang['210_Help_Desk'] = 'Ayuda'; // admin_helpdesk.php
$lang['220_Tickets_Emails'] = 'Categor&iacute;as de emails'; // admin_tickets.php
$lang['230_Custom_BBCodes'] = 'BBCodes personalizados'; // admin_bbcodes.php
$lang['240_Replace_title'] = 'Reemplazar en mensajes'; // admin_replace.php

// Forum
$lang['1200_Forums'] = 'Foro'; // admin_forum_prune.php, admin_forumauth_list.php, admin_forums.php, admin_forums_extend.php, admin_prune_overview.php, admin_topic_shadow.php
$lang['100_Manage'] = 'Administrar'; // admin_forums.php
$lang['110_Manage_extend'] = 'Administraci&oacute;n avanzada'; // admin_forums_extend.php
$lang['120_Permissions_List'] = 'Lista de permisos'; // admin_forumauth_list.php
$lang['122_Permissions_Adv'] = 'Permisos AVD'; // admin_forumauth_adv.php
$lang['125_Permissions_Forum'] = 'Permisos'; // admin_forumauth.php
$lang['130_Prune'] = 'Limpiar'; // admin_forum_prune.php
$lang['140_Prune_Overview'] = 'Descripci&oacute;n de limpieza'; // admin_prune_overview.php
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
$lang['170_db_update_generator'] = 'Generar actualizaci&oacute;n BD'; // admin_db_generator.php
$lang['180_msqd'] = 'MySQLDumper'; // admin_msqd.php

// News
$lang['1600_News_Admin'] = 'Noticias'; // admin_news.php, admin_news_cats.php, admin_xs_news.php, admin_xs_news_xml.php
$lang['100_News_Config'] = 'Configuraci&oacute;n de noticias'; // admin_news.php
$lang['110_News_Cats'] = 'Categor&iacute;as de noticias'; // admin_news_cats.php
$lang['120_XS_News_Config'] = 'Configuraci&oacute;n de noticias Icy Phoenix'; // admin_xs_news.php
$lang['130_XS_News'] = 'Art&iacute;culos de noticias Icy Phoenix'; // admin_xs_news.php
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
$lang['180_Add_New_User'] = 'A&ntilde;adir nuevo usuario'; // admin_user_register.php
$lang['190_Prune_users'] = 'Limpiar usuarios'; // admin_prune_users.php
$lang['200_Disallow'] = 'Desactivar nombres de usuarios'; // admin_disallow.php
$lang['210_Ban_Management'] = 'Banear usuarios'; // admin_user_ban.php
$lang['220_Bantron'] = 'Bantron'; // admin_user_bantron.php
$lang['250_Postcount_Config'] = 'Editar cantidad de mensajes'; // admin_postcount.php
$lang['260_CPF_Add'] = 'A&ntilde;adir campos de perfil'; // admin_profile_fields.php
$lang['270_CPF_Edit'] = 'Editar campos de perfil'; // admin_profile_fields.php
$lang['280_User_Search'] = 'B&uacute;squeda extendida de usuario'; // admin_user_search.php
$lang['290_Poll_Results'] = 'Resultados de encuestas'; // admin_voting.php
$lang['300_Picscount_Config'] = 'Sincronizar cantidad de im&aacute;genes'; // admin_postcount.php

// Groups
$lang['1620_Groups'] = 'Grupos'; // admin_color_groups.php, admin_groups.php, admin_ug_auth.php
$lang['110_Manage_Groups'] = 'Administrar grupos'; // admin_groups.php
$lang['120_Color_Groups'] = 'Color de grupos'; // admin_color_groups.php
$lang['130_Permissions_Group'] = 'Permisos'; // admin_ug_auth.php

// Topic Rating
$lang['1700_Topic_Rating'] = 'Valoraci&oacute;n de temas'; // admin_rate.php

// Knowledge Base
$lang['1800_KB_title'] = 'Biblioteca'; // admin_kb_art.php, admin_kb_auth.php, admin_kb_cat.php, admin_kb_config.php, admin_kb_custom.php, admin_kb_rebuild_search.php, admin_kb_types.php
$lang['100_KB_Configuration'] = 'Configuraci&oacute;n'; // admin_kb_config.php
$lang['110_Art_man'] = 'Administrar art&iacute;culo'; // admin_kb_art.php
$lang['120_Cat_man'] = 'Administrar categor&iacute;as'; // admin_kb_cat.php
$lang['130_Types_man'] = 'Tipos de art&iacute;culos'; // admin_kb_types.php
$lang['140_Custom_Field'] = 'Campos'; // admin_kb_custom.php
$lang['150_Permissions'] = 'Permisos'; // admin_kb_auth.php
$lang['160_Optimize_tables'] = 'Optimizar tablas'; // admin_kb_rebuild_search.php

// Attachments
$lang['1900_Attachments'] = 'Adjuntos'; // admin_attach_cp.php, admin_attachments.php, admin_extensions.php
$lang['100_Control_Panel'] = 'Panel de control'; // admin_attach_cp.php
$lang['110_Att_Manage'] = 'Administraci&oacute;n'; // admin_attachments.php
$lang['120_Quota_limits'] = 'L&iacute;mites de cuota'; // admin_attachments.php
$lang['130_Shadow_attachments'] = 'Adjuntos sombreados'; // admin_attachments.php
$lang['140_Sync_attachments'] = 'Sincronizar adjuntos'; // admin_attachments.php
$lang['150_Extension_control'] = 'Control de extensi&oacute;n'; // admin_extensions.php
$lang['160_Extension_group_manage'] = 'Administrar grupos de extensi&oacute;n'; // admin_extensions.php
$lang['170_Forbidden_extensions'] = 'Extensiones prohibidas'; // admin_extensions.php
$lang['180_Special_categories'] = 'Categor&iacute;as especiales'; // admin_attachments.php

// Downloads
$lang['2000_Downloads'] = 'Descargas'; // admin_pa_catauth.php, admin_pa_category.php, admin_pa_custom.php, admin_pa_fchecker.php, admin_pa_file.php, admin_pa_license.php, admin_pa_settings.php
$lang['100_Settings'] = 'Configuraci&oacute;n'; // admin_pa_settings.php
$lang['110_Cat_manage_title'] = 'Administrar categor&iacute;as'; // admin_pa_category.php
$lang['120_File_manage_title'] = 'Administrar archivos'; // admin_pa_file.php
$lang['130_Fchecker'] = 'Inspeccionar archivo'; // admin_pa_fchecker.php
$lang['140_Mfieldtitle'] = 'Campos adicionales'; // admin_pa_custom.php
$lang['150_License_title'] = 'Administrar licencias'; // admin_pa_license.php
$lang['160_Permissions'] = 'Permisos'; // admin_pa_catauth.php

// Downloads
$lang['2050_Downloads'] = 'Descargas ADV'; // admin_pa_catauth.php, admin_pa_category.php, admin_pa_custom.php, admin_pa_fchecker.php, admin_pa_file.php, admin_pa_license.php, admin_pa_settings.php
$lang['100_DL_Settings'] = 'Configuraci&oacute;n'; // admin_pa_settings.php

// Links
$lang['2100_Links'] = 'Enlaces'; // admin_links.php, admin_links_cat.php, admin_links_config.php
$lang['100_Configuration'] = 'Configuraci&oacute;n'; // admin_links_config.php
$lang['110_Category'] = 'Administrar categor&iacute;as'; // admin_links_cat.php
$lang['120_Add_new'] = 'A&ntilde;adir enlace'; // admin_links.php
$lang['130_Link_Manage'] = 'Administrar enlaces'; // admin_links.php

// Album
$lang['2200_Photo_Album'] = '&Aacute;lbum'; // admin_album_auth.php, admin_album_cat.php, admin_album_config_extended.php
$lang['110_Album_Config'] = 'Configuraci&oacute;n'; // admin_album_config_extended.php
$lang['120_Album_Categories'] = 'Administrar categor&iacute;as'; // admin_album_cat.php
$lang['130_Album_Permissions'] = 'Permisos'; // admin_album_auth.php
$lang['140_Personal_Galleries'] = 'Galer&iacute;as personales'; // admin_album_personal.php

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

// STATS
$lang['2500_STATS'] = 'Estad&iacute;sticas'; // admin_statistics.php

// CRACKER/TRACKER
$lang['2600_CRACKERTRACKER'] = 'Cracker Tracker'; // admin_cracker_tracker.php

// Plugins
$lang['3000_Plugins'] = 'Plugins'; // admin_plugins.php
$lang['100_Plugins_Modules'] = 'M&oacute;dulos de Plugins'; // admin_plugins.php

// Cash
$lang['3100_CASH'] = 'Dinero / Puntos'; // admin_cash.php
$lang['110_Cash_Admin'] = 'Administraci&oacute;n de dinero'; // admin_cash.php
$lang['120_Cash_Help'] = 'Ayuda'; // admin_cash.php

// Activity
$lang['3200_ACTIVITY'] = 'Activity Mod / Juegos'; // admin_activity.php, admin_ina_ban.php, admin_ina_bulk_add.php, admin_ina_category.php, admin_ina_disable.php, admin_ina_in_un.php, admin_ina_mass.php, admin_ina_xtras.php
$lang['110_Configuration'] = 'Configuraci&oacute;n'; // admin_activity.php
$lang['120_Add_Game'] = 'A&ntilde;adir Juego'; // admin_activity.php
$lang['130_Edit_Games'] = 'Editar Juegos'; // admin_activity.php
$lang['140_User_Ban'] = 'Banear Usuarios'; // admin_ina_ban.php
$lang['150_Bulk_Add_Games'] = 'Adici&oacute;n de juegos en lote'; // admin_ina_bulk_add.php
$lang['160_Category'] = 'Administraci&oacute;n de Categor&iacute;as'; // admin_ina_category.php
$lang['170_Char_Settings'] = 'Configuraci&oacute;n de Caracteres'; // admin_ina_char.php
$lang['180_Hide_Show_Games'] = 'Mostrar/Ocultar Juegos'; // admin_ina_disable.php
$lang['190_DB_Adjustments'] = 'Ajustes de la Base de Datos'; // admin_ina_in_un.php
$lang['200_Mass_Change'] = 'Configuraci&oacute;n Masiva'; // admin_ina_mass.php
$lang['210_Scores_Editor'] = 'Editar Records'; // admin_ina_scores.php
$lang['220_Xtras'] = 'Configuraci&oacute;n Extra'; // admin_ina_xtras.php
$lang['230_Check_Games'] = 'Lista de Juegos'; // admin_ina_xtras.php

// ####################### [ ACP Navigation END ] #######################

?>