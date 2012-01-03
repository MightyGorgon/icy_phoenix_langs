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

if (!defined('IN_ICYPHOENIX'))
{
	die('Hacking attempt');
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_PERMISSIONS_EXPLAIN' => '
		<p>Los permisos son altamente granulares y se agrupan en cuatro grandes secciones, las cuales son:</p>

		<h2>Permissos Globales</h2>
		<p>Son usados para controlar el acceso en un nivel global y se aplican a todo el Sitio. Se dividen posteriormente en Permisos de Usuario, Permisos de Grupos, Administradores y Moderadores Globales.</p>

		<h2>Permisos basados en Foros</h2>
		<p>Se usan para controlar el acceso a los foros espec&iacute;ficamente. Se dividen posteriormente en Permisos de Foros, Moderadores de Foros, Permisos de Foro de Usuario y Permisos de Foro de grupos.</p>

		<h2>Permisos de Roles</h2>
		<p>Se usan para crear diferentes paquetes de varios tipos de permisos posteriormente asignables a los distintos Roles. Los roles por defecto deber&iacute;an cubrir la administraci&oacute;n del Sitio en sus cuatro divisiones, puede agregar/editar/borrar roles como crea conveniente.</p>

		<h2>M&aacute;scara de Permisos</h2>
		<p>Se usa para ver el efecto de los permisos asignados a Usuarios, Moderadores (Locales y Globales), Administradores o Foros.</p>

		<br />

		<p>Para m&aacute;s informaci&oacute;n sobre configuraci&oacute;n y administraci&oacute;n de permisos en tu foro phpBB3, por favor visita el <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Cap&iacute;tulo 1.5 de nuestra Gu&iacute;a de Inicio R&aacute;pido</a> (web oficial en ingl&eacute;s).</p>
	',

	'ACL_NEVER'			=> 'Nunca',
	'ACL_SET'			=> 'Configurar permisos',
	'ACL_SET_EXPLAIN'	=> 'Los permisos est&aacute;n basados en un sencillo sistema <samp>S&Iacute;</samp>/<samp>NO</samp>. Configurar una opci&oacute;n como <samp>NUNCA</samp> para un usuario o grupo tiene preferencia sobre cualquier otro valor asignado. Si no quieres asignar un valor, seleccione <samp>NO</samp>. Valores asignados para esta opci&oacute;n en cualquier lugar se usar&aacute;n preferentemente, caso contrario se asume <samp>NUNCA</samp>. Todos los objetos marcados (en su respectivo checkbox) copiar&aacute;n el paquete de permisos que definas.',
	'ACL_SETTING'		=> 'Configuraci&oacute;n',

	'ACL_TYPE_A_'		=> 'Permisos Administrativos',
	'ACL_TYPE_CMS_'     => 'Permisos CMS',
	'ACL_TYPE_F_'		=> 'Permisos de Foros', 
	'ACL_TYPE_M_'		=> 'Permisos de Moderaci&oacute;n',
	'ACL_TYPE_U_'		=> 'Permisos de Usuario',
	'ACL_TYPE_PL_'      => 'Permisos de Plugins',
	
    'ACL_TYPE_GLOBAL_A_'	=> 'Permisos Administrativos Globales',
	'ACL_TYPE_GLOBAL_U_'	=> 'Permisos de Usuario Globales',
	'ACL_TYPE_GLOBAL_M_'	=> 'Permisos de Moderadores Globales',
	'ACL_TYPE_LOCAL_M_'		=> 'Permisos de Moderador de Foro',
	'ACL_TYPE_LOCAL_F_'		=> 'Permisos de Foro',
	'ACL_TYPE_GLOBAL_CMS_' => 'Permisos Cms Globales',
	'ACL_TYPE_GLOBAL_PL_' => 'Permisos Plugin Globales',
	'ACL_TYPE_LOCAL_CMS_' => 'Permisos CMS Locales',
	'ACL_TYPE_LOCAL_CMSL_' => 'Permisos CMS Paginas',
	'ACL_TYPE_LOCAL_CMSS_' => 'Permisos paginas estandart',
	'ACL_TYPE_LOCAL_CMSB_' => 'Perisos Bloques CMS',
	

	'ACL_NO'			=> 'No',
	'ACL_VIEW'			=> 'Ver permisos',
	'ACL_VIEW_EXPLAIN'	=> 'Aqu&iacute; puedes ver el efecto de los permisos sobre el usuario/grupo. Un cuadrado rojo indica que el usuario/grupo no tiene permisos, un cuadrado verde indica que el usuario/grupo tiene todos los permisos.',
	'ACL_YES'	=> 'S&iacute;',

	'ACP_ADMIN_ROLES' => 'Roles de Administrador',
	'ACP_CMS_ROLES' => 'Roles CMS',
	'ACP_FORUM_ROLES' => 'Roles del Foro',
	'ACP_MOD_ROLES' => 'Roles de Moderador',
	'ACP_PLUGINS_ROLES' => 'Roles de Plugins',
	'ACP_USER_ROLES' => 'Roles Globales',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Aqu&iacute; puedes asignar derechos de administrador para usuarios o grupos. Todos los usuarios con permisos administrativos pueden ver el Panel de Administraci&oacute;n (ACP).',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Aqu&iacute; puedes asignar usuarios y grupos como moderadores de foros. Para asignar accesos de usuario a los foros, para definir derechos de moderador global o administrativos por favor usa la secci&oacute;n correspondiente.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Aqu&iacute; puedes modificar cuales usuarios y grupos pueden acceder a qué foro. Para asignar moderadores o definir administradores por favor usa la secci&oacute;n correspondiente.',
    'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Aqu&iacute; puedes copiar permisos de foro de un foro a otro foro o a otros foros.',

	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Aqu&iacute; puedes asignar derechos de moderador global para usuarios o grupos. Estos moderadores son como los moderadores corrientes excepto que tienen acceso a todos los foros del Sitio.',
		'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aqu&iacute; puedes asignar permisos de foro a grupos.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Aqu&iacute; puedes asignar permisos globales a grupos - permisos de usuario, permisos de moderador global y permisos administrativos. Permisos de usuario incluyen capacidades como el empleo de avatares, enviar mensajes privados, etc; permisos de moderador global tales como aprobar mensajes, administrar temas, administrar exclusiones, etc y por &uacute;ltimo permisos administrativos tales como modificar permisos, definir c&oacute;digo BBCode personalizado, administrar foros, etc. Los permisos individuales de usuarios solamente deber&iacute;an ser cambiados en raras ocaciones, el método preferido es poner a los usuarios en grupos y asignarles permisos de grupo.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Aqu&iacute; puedes administrar los roles para permisos administrativos. Los roles act&uacute;an como permisos, si cambias un rol los elementos asignados al mismo también cambiar&aacute;n sus permisos.',
	'ACP_CMS_ROLES_EXPLAIN' => 'Aqu&iacute; puedes administrar los roles para permisos del CMS. Los roles act&uacute;an como permisos, si cambias un rol los elementos asignados al mismo también cambiar&aacute;n sus permisos.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Aqu&iacute; puedes administrar los roles para permisos de foros. Los roles act&uacute;an como permisos, si cambias un rol los elementos asignados al mismo también cambiar&aacute;n sus permisos.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Aqu&iacute; puedes administrar los roles para permisos de moderadores. Los roles act&uacute;an como permisos, si cambias un rol los elementos asignados al mismo también cambiar&aacute;n sus permisos.',
	'ACP_PLUGINS_ROLES_EXPLAIN' => 'Aqu&iacute; puedes administrar los roles para permisos de plugins. Los roles act&uacute;an como permisos, si cambias un rol los elementos asignados al mismo también cambiar&aacute;n sus permisos.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Aqu&iacute; puedes administrar los roles para permisos de usuario. Los roles act&uacute;an como permisos, si cambias un rol los elementos asignados al mismo también cambiar&aacute;n sus permisos.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aqu&iacute; puedes asignar permisos de foro a los usuarios.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Aqu&iacute; puedes asignar permisos globales a usuarios - permisos de usuario, permisos de moderador global y permisos de administrador. Permisos de usuario incluyen capacidades como el empleo de avatares, enviar mensajes privados, etc; permisos de moderador global tales como aprobar mensajes, administrar temas, administrar exclusiones, etc y por &uacute;ltimo permisos administrativos tales como modificar permisos, definir c&oacute;digo BBCode personalizado, administrar foros, etc. Para modificar estos par&aacute;metros en un gran n&uacute;mero de usuarios el mejor método es el sistema de permisos de Grupo. Los permisos individuales de usuarios solamente deber&iacute;an ser cambiados en raras ocaciones, el método preferido es poner a los usuarios en grupos y asignarles permisos de grupo.',
    'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Aqu&iacute; puedes ver el efecto de los permisos administrativos asignados a los usuarios/grupos seleccionados',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Aqu&iacute; puedes ver el efecto de los permisos de moderaci&oacute;n global asignados a los usuarios/grupos seleccionados',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aqu&iacute; puedes ver el efecto de los permisos de foro asignados a los usuarios/grupos seleccionados',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Aqu&iacute; puedes ver el efecto de los permisos de moderador de foro asignados a los usuarios/grupos seleccionados y foros',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Aqu&iacute; puedes ver el efecto de los permisos de usuario asignados a los usuarios/grupos seleccionados',

	'ADD_GROUPS'				=> 'A&ntilde;adir grupos',
	'ADD_PERMISSIONS'			=> 'A&ntilde;adir permisos',
	'ADD_USERS'					=> 'A&ntilde;adir usuarios',
	'ADVANCED_PERMISSIONS'		=> 'Permisos avanzados',
	'ALL_GROUPS'				=> 'Seleccionar todos los grupos',
	'ALL_NEVER'					=> 'Todos <samp>NUNCA</samp>',
	'ALL_NO'					=> 'Todos <samp>NO</samp>',
	'ALL_USERS'					=> 'Seleccionar todos los usuarios',
	'ALL_YES'					=> 'Todos <samp>SÍ</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Aplicar todos los permisos',
	'APPLY_PERMISSIONS'			=> 'Aplicar permisos',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Los permisos y roles definidos se aplicar&aacute;n a éste y todos los elementos marcados.',
	'AUTH_UPDATED'				=> 'Permisos actualizados.',
	'COPY_PERMISSIONS_CONFIRM'				=> '¿Est&aacute;s seguro de que deseas ejecutar esta acci&oacute;n? Por favor ten en cuenta que esto sobreescribir&aacute; todos los permisos en los seleccionados.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'El foro fuente del que quieres copiar los permisos.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'El foro destino al que quieres aplicar los permisos copiados.',
	'COPY_PERMISSIONS_FROM'					=> 'Copiar permisos de',
	'COPY_PERMISSIONS_TO'					=> 'Aplicar permisos a',

	'CREATE_ROLE'				=> 'Crear rol',
	'CREATE_ROLE_FROM'			=> 'Usar par&aacute;metros para…',
	'CUSTOM'					=> 'Personalizado…',

	'DEFAULT'					=> 'Por defecto',
	'DELETE_ROLE'				=> 'Borrar rol',
	'DELETE_ROLE_CONFIRM'		=> '¿Est&aacute;s seguro de que quieres borrar este rol? Elementos que tengan este rol asignado <strong>no</strong> perder&aacute;n sus permisos.',
	'DISPLAY_ROLE_ITEMS'		=> 'Ver elementos usando este rol',

	'EDIT_PERMISSIONS'	=> 'Editar permisos',
	'EDIT_ROLE'			=> 'Editar rol',

	'GROUPS_NOT_ASSIGNED'	=> 'Ning&uacute;n grupo asignado a este rol',

	'ITEMS_SELECTED' => 'Objetos selecionados',

	'LOOK_UP_GROUP'	=> 'Buscar grupo de usuarios',
	'LOOK_UP_USER'	=> 'Buscar usuario',
	'LOOK_UP_CMS_L' => 'Seleccionar Layout',
	'LOOK_UP_CMS_L_EXPLAIN' => 'El nombre del Layout sera seguido de la ID del Layout entre corchetes con un numero de referencia',
	'LOOK_UP_CMS_S' => 'Selecionar pagina estandart',
	'LOOK_UP_CMS_S_EXPLAIN' => 'El nombre de la pagina sera seguido de la ID de pagina entre corchetes con un numero de referencia',
	'LOOK_UP_CMS_B' => 'Seleccionar bloque',
	'LOOK_UP_CMS_B_EXPLAIN' => 'El nombre del bloque sera seguido de la ID del bloque entre corchetes con un numero de referencia',

	'MANAGE_GROUPS'	=> 'Administrar grupos',
	'MANAGE_USERS'	=> 'Administrar usuarios',

	'NO_AUTH_SETTING_FOUND'		=> 'Configuraci&oacute;n de permisos no definida.',
	'NO_ROLE_ASSIGNED'			=> 'Ning&uacute;n rol asignado…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Configurar este rol no cambia ning&uacute;n permiso a la derecha. Si quieres limpiar/eliminar todos los permisos deber&iacute;as usar el enlace "Todo <samp>NO</samp>".',
	'NO_ROLE_AVAILABLE'			=> 'Ning&uacute;n rol disponible',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Por favor dale un nombre al rol.',
	'NO_ROLE_SELECTED'			=> 'No se puede encontrar el rol.',
	'NO_USER_GROUP_SELECTED'	=> 'No seleccionaste ning&uacute;n usuario o grupo.',

	'ONLY_FORUM_DEFINED'		=> 'Solo definiste foros en su selecci&oacute;n. Por favor, también selecciona al menos un usuario o un grupo.',

	'PERMISSION_APPLIED_TO_ALL'	=> 'Permisos y roles se aplicar&aacute;n también a todos los objetos marcados',
	'PLUS_SUBFORUMS'			=> '+ Subforos',

	'REMOVE_PERMISSIONS'	=> 'Eliminar permisos',
	'REMOVE_ROLE'			=> 'Eliminar rol',
	'RESULTING_PERMISSION'	=> 'Resultado permiso',
	'ROLE'					=> 'Rol',
	'ROLE_ADD_SUCCESS'		=> 'Rol a&ntilde;adido correctamente.',
	'ROLE_ASSIGNED_TO'		=> 'Usuarios/Grupos asignados a %s',
	'ROLE_DELETED'			=> 'Rol eliminado correctamente.',
	'ROLE_DESCRIPTION'		=> 'Descripci&oacute;n del rol',

	'ROLE_ADMIN_FORUM'			=> 'Administrador del Foro',
	'ROLE_ADMIN_FULL'			=> 'Administrador Completo',
	'ROLE_ADMIN_STANDARD'		=> 'Administrador Est&aacute;ndar',
	'ROLE_ADMIN_USERGROUP'		=> 'Administrador de grupos y usuarios',
	'ROLE_FORUM_BOT'			=> 'Acceso de Robots',
	'ROLE_FORUM_FULL'			=> 'Acceso completo al foro',
	'ROLE_FORUM_LIMITED'		=> 'Acceso limitado al foro',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Acceso limitado al foro + Encuestas',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Nuevos Usuarios Registrados',
	'ROLE_FORUM_NOACCESS'		=> 'Sin acceso al foro',
	'ROLE_FORUM_ONQUEUE'		=> 'En cola de moderaci&oacute;n',
	'ROLE_FORUM_POLLS'			=> 'Acceso al foro est&aacute;ndar + Encuestas',
	'ROLE_FORUM_READONLY'		=> 'Acceso al foro solo para leer',
	'ROLE_FORUM_STANDARD'		=> 'Acceso al foro est&aacute;ndar',
	'ROLE_MOD_FULL'				=> 'Moderador Completo',
	'ROLE_MOD_QUEUE'			=> 'Moderador de Lista de Moderaci&oacute;n',
	'ROLE_MOD_SIMPLE'			=> 'Moderador Simple',
	'ROLE_MOD_STANDARD'			=> 'Moderador Est&aacute;ndar',
	'ROLE_USER_FULL'			=> 'Todas las caracter&iacute;sticas',
	'ROLE_USER_LIMITED'			=> 'Caracter&iacute;sticas limitadas',
	'ROLE_USER_NEW_MEMBER'		=> 'Nuevo Usuario Registrado',
	'ROLE_USER_NOAVATAR'		=> 'Sin Avatar',
	'ROLE_USER_NOPM'			=> 'Sin mensajes privados',
	'ROLE_USER_STANDARD'		=> 'Caracter&iacute;sticas est&aacute;ndares',


	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Tiene acceso a la administraci&oacute;n y configuraci&oacute;n de permisos de foros.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Tiene acceso a todas las funciones administrativas de este Sitio.<br />No recomendado.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Tiene acceso a la mayor&iacute;a de las funciones administrativas, pero no a herramientas relativas al servidor o al sistema.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Puede administrar grupos y usuarios: Capaz de cambiar permisos, configuraciones, administrar exclusiones y rangos.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Se recomienda este rol para bots y buscadores.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Puede usar todas las funciones de los foros, incluyendo avisos y mensajes fijos. También puede ignorar el l&iacute;mite de saturaci&oacute;n.<br />No recomendado para usuarios corrientes.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Puede usar algunas de las funciones de los foros, pero no enviar archivos ni usar emoticonos de mensaje.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Igual que Acceso Limitado y adem&aacute;s puede crear encuestas.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Un rol para los miembros del grupo especial Nuevos Usuarios Registrados; contiene permisos de <samp>NUNCA</samp> para evitar ciertas opciones para nuevos usuarios.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'No puede ver ni acceder a los foros.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Puede usar algunas de las funciones de los foros incluyendo adjuntos, pero debe aprobar temas y mensajes por un admin.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Igual que Acceso Com&uacute;n y adem&aacute;s puede crear encuestas.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Puede leer el foro, pero no crear temas ni enviar mensajes.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Puede usar algunas de las funciones de los foros incluyendo adjuntos, pero no bloquear ni borrar sus propios temas, y no puede crear encuestas.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Puede usar todas las funciones de moderaci&oacute;n y también exclusiones.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Puede usar la Lista de Moderaci&oacute;n para validar y editar mensajes, pero nada m&aacute;s.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Puede ejecutar acciones b&aacute;sicas. No puede enviar advertencias o usar la lista de moderaci&oacute;n.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Puede usar la mayor&iacute;a de las herramientas de moderaci&oacute;n, pero no puede excluir usuarios o cambiar el autor del mensaje.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Puede usar todas las funciones de los foros disponibles para usuarios, incluyendo cambios en el nombre de usuario o ignorar el l&iacute;mite de saturaci&oacute;n.<br />No recomendado.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Tiene acceso a algunas de las funciones de usuario. Adjuntos, e-mails, o mensajes instant&aacute;neos no le est&aacute;n permitidos.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Un rol para los miembros del grupo especial Nuevos Usuarios Registrados; contiene permisos de <samp>NUNCA</samp> para evitar ciertas opciones para nuevos usuarios.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Tiene un paquete de funciones limitado y no puede usar Avatar.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Tiene un paquete de funciones limitado y no puede enviar Mensajes Privados.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Tiene acceso a la mayor&iacute;a pero no a todas las funciones. No puede cambiar nombre de usuario o ignorar el l&iacute;mite de saturaci&oacute;n, por ejemplo.',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Puedes insertar una explicaci&oacute;n corta de por qué fue creado el rol o para qué sirve. Este texto también se mostrar&aacute; en la secci&oacute;n de permisos.',
	'ROLE_DESCRIPTION_LONG'			=> 'La descripci&oacute;n del rol es muy larga, por favor lim&iacute;tala a 4000 caracteres.',
	'ROLE_DETAILS'					=> 'Detalles del rol',
	'ROLE_EDIT_SUCCESS'				=> 'Rol editado correctamente.',
	'ROLE_NAME'						=> 'Nombre del rol',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Un rol llamado <strong>%s</strong> ya existe con el tipo de permisos especificados.',
	'ROLE_NOT_ASSIGNED'				=> 'El rol no ha sido asignado a&uacute;n.',

	'SELECTED_BLOCK_NOT_EXIST' => 'El bloque selecionado, no existe.',
	'SELECTED_LAYOUT_NOT_EXIST' => 'La(s) Pagina(s) selecionada(s) no existe(n).',
	'SELECTED_LAYOUT_SPECIAL_NOT_EXIST' => 'La(s) Pagina(s) selecionada(s) no existe(n).',

	'SELECTED_FORUM_NOT_EXIST'		=> 'El foro seleccionado no existe.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'El grupo seleccionado no existe.',
	'SELECTED_USER_NOT_EXIST'		=> 'El usuario seleccionado no existe.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'El foro seleccionado incluye todos sus subforos',
	'SELECT_ROLE'					=> 'Seleccione rol…',
	'SELECT_TYPE'					=> 'Seleccione tipo',
	'SET_PERMISSIONS'				=> 'Configurar permisos',
	'SET_ROLE_PERMISSIONS'			=> 'Configurar permisos de rol',
	'SET_USERS_PERMISSIONS'			=> 'Configurar permisos de usuario',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Configurar permisos de usuarios de foros',

	'TRACE_DEFAULT'					=> 'Por defecto cada permiso es <samp>NO</samp>. Aqu&iacute; el permiso puede ser reemplazado por otras configuraciones.',
	'TRACE_FOR'						=> 'Seguimiento de',
	'TRACE_GLOBAL_SETTING'			=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Los permisos de este grupo valen <samp>NUNCA</samp> como valor total as&iacute; que se mantiene el valor anterior.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Los permisos de este grupo valen <samp>NUNCA</samp> como valor total as&iacute; que se mantiene el valor anterior.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Los permisos de este grupo valen <samp>NUNCA</samp> que pasa a ser el nuevo valor total porque a&uacute;n no se ha configurado (configurar a <samp>NO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'El permiso de este grupo vale <samp>NUNCA</samp> que pasa a ser el nuevo valor total porque a&uacute;n no se ha configurado (configurar a <samp>NO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Los permisos de este grupo valen <samp>NUNCA</samp> lo cual reemplaza el total <samp>SÍ</samp> por <samp>NUNCA</samp> para este usuario.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'El permiso de este grupo vale <samp>NUNCA</samp> lo cual reemplaza el total <samp>SÍ</samp> to a <samp>NUNCA</samp> for this user.',
	'TRACE_GROUP_NO'				=> 'El permiso es <samp>NO</samp> para este grupo as&iacute; que se mantiene el valor anterior.',
	'TRACE_GROUP_NO_LOCAL'			=> 'El permiso es <samp>NO</samp> para este grupo dentro de este foro as&iacute; que se mantiene el valor anterior.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Los permisos de este grupo valen <samp>SÍ</samp> pero el total <samp>NUNCA</samp> no puede ser reemplazado.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'El permiso de este grupo vale <samp>SÍ</samp> pero el total <samp>NUNCA</samp> no puede ser sobreescrito.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Los permisos de este grupo valen <samp>SÍ</samp> que pasa a ser el nuevo valor total porque a&uacute;n no se ha configurado (configurar a  <samp>NO</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'El permiso de este grupo vale <samp>SÍ</samp> que pasa a ser el nuevo valor total porque a&uacute;n no se ha configurado (configurar a <samp>NO</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Los permisos de este grupo valen <samp>SÍ</samp> y el total de permisos ya vale <samp>SÍ</samp>, as&iacute; que se mantiene el total.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'El permiso de este grupo para este foro vale <samp>SÍ</samp> y el permiso total ya est&aacute; definido como <samp>SÍ</samp>, as&iacute; que el resultado total se mantiene.',
	'TRACE_PERMISSION'				=> 'Rastrear permisos - %s',
	'TRACE_RESULT'					=> 'Resultado rastreo',
	'TRACE_SETTING'					=> 'Rastrear configuraci&oacute;n',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Los permisos de usuario para este foro en particular valen <samp>SÍ</samp> pero el permiso global ya vale <samp>SÍ</samp>,  as&iacute; que se mantiene el resultado total. %sRastrear permisos globales%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Los permisos de usuario para este foro en particular valen <samp>SÍ</samp> lo cual reemplaza el actual resultado local <samp>NUNCA</samp>. %sRastrear permisos globales%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Los permisos de usuario para este foro en particular valen <samp>NUNCA</samp> lo cual no influye en los permisos locales. %sRastrear permisos globales%s',

	'TRACE_USER_FOUNDER'					=> 'El usuario es un fundador, por lo tanto los permisos del admin pasan a ser <samp>SÍ</samp> por defecto.',
	'TRACE_USER_KEPT'						=> 'El permiso de usuario para este foro vale <samp>NO</samp> as&iacute; que se mantiene el valor anterior.',
	'TRACE_USER_KEPT_LOCAL'					=> 'El permiso de usuario para este foro vale <samp>NO</samp> as&iacute; que se mantiene el valor anterior.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'El permiso de usuario vale <samp>NUNCA</samp> y el valor total es <samp>NUNCA</samp>, as&iacute; que no cambia nada.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'El permiso de usuario para este foro se ha establecido en <samp>NUNCA</samp> y el valor total se establece como <samp>NUNCA</samp>, por lo que nada cambia.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'El permiso de usuario vale <samp>NUNCA</samp> que pasa a ser el valor total (que se hab&iacute;a configurado en <samp>NUNCA</samp>).',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'El permiso de usuario para este foro se ha establecido en <samp>NUNCA</samp> el cual se transforma en el valor total porque se estableci&oacute; como NO.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'El permiso de usuario vale <samp>NUNCA</samp> y reemplaza al <samp>SÍ</samp> previo.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'El permiso de usuario para este foro se ha establecido en <samp>NUNCA</samp> y sobreescribe el <samp>SÍ</samp> previo.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'El permiso de usuario vale <samp>NO</samp> y el valor total ya era <samp>NO</samp> as&iacute; que por defecto es <samp>NUNCA</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'El permiso de usuario para este foro vale <samp>NO</samp> y el valor total ya era <samp>NO</samp> as&iacute; que por defecto es <samp>NUNCA</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'El permiso de usuario vale <samp>SÍ</samp> pero el total <samp>NUNCA</samp> no puede ser reemplazado.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'El permiso de usuario para este foro se ha establecido en <samp>SÍ</samp> pero el valor total <samp>NUNCA</samp> no puede ser sobreescrito.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'El permiso de usuario vale <samp>SÍ</samp> que pasa a ser el valor total (que se hab&iacute;a configurado en <samp>NO</samp>).',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'El permiso de usuario para este foro se ha establecido en <samp>SÍ</samp> el cual se transforma en el valor total porque se estableci&oacute; como <samp>NO</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'El permiso de usuario vale <samp>SÍ</samp> y el valor total también es <samp>SÍ</samp>, as&iacute; que no cambia nada.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'El permiso de usuario para este foro se ha establecido en <samp>SÍ</samp> pero el valor total se establece como <samp>SÍ</samp>, por lo que nada cambia.',
	'TRACE_WHO'	=> 'Quién',
	'TRACE_TOTAL'	=> 'Total',

	'USERS_NOT_ASSIGNED'		=> 'Ning&uacute;n usuario asignado a este rol',
	'USER_IS_MEMBER_OF_DEFAULT'	=> 'es miembro de los siguiente grupos por defecto',
	'USER_IS_MEMBER_OF_CUSTOM'	=> 'es miembro de los siguientes grupos personalizados',
    'USERNAMES_EXPLAIN' => 'Poner cada nombre de Usuario en una linea separada.',

	'VIEW_ASSIGNED_ITEMS'		=> 'Ver elementos asignados',
	'VIEW_LOCAL_PERMS'			=> 'Permisos locales',
	'VIEW_GLOBAL_PERMS'			=> 'Permisos globales',
	'VIEW_PERMISSIONS'			=> 'Ver permisos',

	'WRONG_PERMISSION_TYPE'				=> 'Tipo de permiso incorrecto.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'La configuraci&oacute;n de los permisos est&aacute; en un formato incorrecto, phpBB no puede procesarlos correctamente.',
	)
);

?>