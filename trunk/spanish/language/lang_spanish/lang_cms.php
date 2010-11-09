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
	// MG CMS - BEGIN
	'CMS_WELCOME' => 'Bienvenido a Icy Phoenix',
	'CMS_THANKS' => 'Gracias por usar <a href="http://www.icyphoenix.com/" title="Icy Phoenix">Icy Phoenix</a>. Si necesita ayuda puede visitar la <a href="http://www.icyphoenix.com/viewforumlist.php?f=4" title="Documentaci&oacute;n">Documentaci&oacute;n</a> o el <a href="http://www.icyphoenix.com/forum.php" title="Foro de Soporte">Foro de Soporte</a>.',
	'BP_Title' => 'Bloquea la posici&oacute;n del t&iacute;tulo',
	'BP_Explain' => 'Desde este panel de control puede a&ntilde;adir, editar o borrar la posici&oacute;n de los bloques que pueden ser usados en el portal IM. Las posiciones por defecto son \'header\', \'footer\', \'right\' and \'center\'. S&oacute;lo posiciones existentes por p&aacute;gina principal deben a&ntilde;adirse aqu&iacute;. Los c&oacute;digos de posiciones que no existan en la etiqueta especificada no aparecer&aacute;n en la p&aacute;gina principal. Cada llave de posici&oacute;n y car&aacute;cter deben ser &uacute;nicos para cada p&aacute;gina.',
	'BP_Position' => 'Posici&oacute;n del car&aacute;cter',
	'BP_Key' => 'Tecla de etiqueta de posici&oacute;n',
	'BP_Layout' => 'P&aacute;gina web',
	'BP_Add_Position' => 'A&ntilde;adir nueva posici&oacute;n',
	'No_bp_selected' => 'No se ha seleccionado una posici&oacute;n para editar',
	'BP_Edit_Position' => 'Editar posici&oacute;n de bloque',
	'Must_enter_bp' => 'Debe a&ntilde;adir un c&oacute;digo de posici&oacute;n, car&aacute;cter de posici&oacute;n y p&aacute;gina web',
	'BP_updated' => 'Posici&oacute;n de bloque actualizada',
	'BP_added' => 'Posici&oacute;n de bloque a&ntilde;adida',
	'Click_return_bpadmin' => 'Pulse %saqu&iacute;%s para volver a administraci&oacute;n de edici&oacute;n de bloques.',
	'BP_removed' => 'Posici&oacute;n de bloque eliminada',
	'Portal_wide' => 'Ancho de portal',

	'No_layout_selected' => 'No se ha seleccionado p&aacute;gina de portal para editar',
	'LAYOUT_TITLE' => 'P&aacute;gina de portal',
	'LAYOUT_TEXT' => 'Desde este panel de control puede a&ntilde;adir, editar o eliminar informaci&oacute;n de la distribuci&oacute;n de sus p&aacute;ginas de portal. Varias p&aacute;ginas de portal pueden usar la misma distribuci&oacute;n. El archivo de plantilla de la distribuci&oacute;n seleccionado debe estar en la carpeta layout que se encuentra en la carpeta template de su foro. No puede eliminar la p&aacute;gina portal por defecto de su foro. Eliminar una p&aacute;gina de portal elimina tambi&eacute;n las correspondientes posiciones de los bloques de esa p&aacute;gina y todos los bloques asignados a ella',
	'Layout_Special_Explain' => 'Desde este panel de control, puede a&ntilde;adir, editar o borrar bloques para p&aacute;ginas est&aacute;ndares de su foro (ej.: foro, ver tema, lista de usuarios, descargas, &aacute;lbum, etc.).',
	'LAYOUT_NAME' => 'Nombre',
	'LAYOUT_TEMPLATE' => 'Archivo de plantilla',
	'LAYOUT_EDIT' => 'Editar p&aacute;gina de portal',
	'Layout_Page' => 'ID de p&aacute;gina',
	'LAYOUT_VIEW' => 'Ver por',
	'LAYOUT_EDIT_PERM' => 'Editar permisos',
	'LAYOUT_GLOBAL_BLOCKS' => 'Mostrar bloques globales',
	'LAYOUT_PAGE_NAV' => 'P&aacute;gina bloque navegaci&oacute;n (Breadcrumbs)',
	'Must_enter_layout' => 'Debe introducir un nombre y un archivo de plantilla',
	'Layout_updated' => 'P&aacute;gina de portal actualizada',
	'Click_return_layoutadmin' => 'Pulse %saqu&iacute;%s para volver a la administraci&oacute;n de p&aacute;gina de portal',
	'Layout_added' => 'P&aacute;gina de portal a&ntilde;adida',
	'Layout_removed' => 'P&aacute;gina de portal eliminada',
	'LAYOUT_ADD' => 'A&ntilde;adir p&aacute;gina de portal',
	'Layout_BP_added' => 'Archivo de configuraci&oacute;n de la distribuci&oacute;n accesible: etiquetas de posiciones de bloques insertadas autom&aacute;ticamente',
	'Layout_default' => 'Por defecto',
	'Layout_make_default' => 'Hacer por defecto',

	'BLOCKS_TITLE' => 'Administraci&oacute;n de bloques',
	'BLOCKS_TEXT' => 'Desde este panel de control puede a&ntilde;adir, editar, eliminar y mover bloques para cada p&aacute;gina de portal disponible. Una plantilla de bloque debe existir para cada bloque a&ntilde;adido. Cuando un archivo de bloque es especificado, el contenido insertado es ignorado por el motor del portal.',
	'BLOCKS_CREATION' => 'Desde este panel de control puede duplicar bloques desde otros dise&ntilde;os. Solo los bloques compatibles seleccionados en el dise&ntilde;o pueden mostrarse. Para duplicar un bloque tiene que marcar el cuadro del bloque que quiere a&ntilde;adir en la actual plantilla y hacer clic en el bot&oacute;n "Duplicar bloques" en la parte inferior de la p&aacute;gina.',
	'BLOCKS_CREATION_01' => 'A&ntilde;adir / editar bloque p&aacute;gina 1 de 2',
	'BLOCKS_CREATION_02' => 'A&ntilde;adir / editar bloque p&aacute;gina 2 de 2',
	'CMS_STANDARD_PAGES' => 'P&aacute;ginas est&aacute;ndares',
	'CMS_CUSTOM_PAGES' => 'P&aacute;ginas personalizadas',
	'CMS_CUSTOM_PAGES_ADV' => 'P&aacute;ginas CMS ADV',
	'CHOOSE_LAYOUT' => 'Seleccione p&aacute;gina',
	'B_TITLE' => 'T&iacute;tulo de bloque',
	'B_NAME' => 'Nombre',
	'B_POSITION' => 'Posici&oacute;n de bloque',
	'B_ACTIVE' => '&iquest;Activo?',
	'B_DISPLAY' => 'Contenido',
	'B_HTML' => 'HTML',
	'B_BBCODE' => 'BBCode',
	'B_TYPE' => 'Tipo',
	'B_BORDER' => 'Mostrar borde',
	'B_Border_and_Background' => 'Borde y BG',
	'B_TITLEBAR' => 'Mostrar barra de t&iacute;tulo',
	'B_Titlebar_Content' => 'T&iacute;tulo de la barra',
	'B_BACKGROUND' => 'Mostrar fondo',
	'B_LOCAL' => 'Localizar barra de t&iacute;tulo',
	'B_Cache' => 'Cach&eacute;?',
	'B_Cachetime' => 'Duraci&oacute;n de cach&eacute;',
	'B_GROUPS' => 'Grupos de usuarios',
	'B_ALL' => 'Todos',
	'B_GUESTS' => 'S&oacute;lo invitados',
	'B_REG' => 'Usuarios registrados',
	'B_MOD' => 'Moderadores',
	'B_ADMIN' => 'Administradores',
	'B_NONE' => 'Nadie',
	'B_LAYOUT' => 'P&aacute;gina de portal',
	'B_LAYOUT_EDIT' => 'Editar configuraci&oacute;n de p&aacute;gina',
	'B_PAGE' => 'Id de p&aacute;gina',
	'B_ADD' => 'A&ntilde;adir bloques',
	'B_UPDATE' => 'Actualizar bloques',
	'YES' => 'S&iacute;',
	'NO' => 'No',
	'ENABLED' => 'Activado',
	'DISABLED' => 'Desactivado',
	'B_TEXT' => 'Texto',
	'B_FILE' => 'Archivo de bloque',
	'B_MOVE' => 'Mover',
	'B_MOVE_UP' => 'Mover arriba',
	'B_MOVE_DOWN' => 'Mover abajo',
	'B_VIEW_BY' => 'Ver por',
	'B_TEXT_BLOCK' => 'Bloque de texto o HTML',
	'NO_BLOCKS_AVAILABLE' => 'No hay bloques en este dise&ntilde;o, pulse en "A&ntilde;adir bloque" para a&ntilde;adir uno',
	'No_blocks_selected' => 'No se ha seleccionado bloque',
	'B_CONTENT' => 'Contenido',
	'B_BLOCKFILE' => 'Archivo de bloque',
	'Block_Edit' => 'Editar bloque',
	'Block_updated' => 'Bloque actualizado',
	'Blocks_updated' => 'Bloques actualizados',
	'Must_enter_block' => 'Debe introducir un t&iacute;tulo de bloque',
	'Block_added' => 'Bloque a&ntilde;adido',
	'Blocks_added' => 'Bloques a&ntilde;adidos',
	'Blocks_duplicated' => 'Bloques duplicados',
	'Click_return_blocksadmin' => 'Pulse %saqu&iacute;%s para volver a la administraci&oacute;n de bloques.',
	'Block_removed' => 'Bloque eliminado',
	'B_BV_added' => 'Archivo de configuraci&oacute;n de bloque disponible: Variables de bloque insertadas autom&aacute;ticamente',
	'B_EDIT_BS' => 'Editar Configuraci&oacute;n',
	'B_EDIT' => 'Editar',
	'B_DELETE' => 'Borrar',

	'BV_Title' => 'Variables de bloque',
	'BV_Explain' => 'Desde este panel de control puede a&ntilde;adir, editar o eliminar variables de configuraci&oacute;n de bloques que son usadas en IM Portal. Estas variables pueden, entonces, configurarse a trav&eacute;s de la p&aacute;gina de configuraci&oacute;n de portal para personalizar su portal.','BV_Label' => 'Etiqueta de campo',
	'BV_Label' => 'Campo de etiquetas',
	'BV_Sub_Label' => 'Informaci&oacute;n de campo',
	'BV_Name' => 'Nombre de configuraci&oacute;n',
	'BV_Options' => 'Opciones',
	'BV_Values' => 'Valores de campo',
	'BV_Type' => 'Tipo de control',
	'BV_Block' => 'Bloque',
	'BV_Add_Variable' => 'A&ntilde;adir variable de bloque',
	'No_bv_selected' => 'No ha seleccionado ninguna variaci&oacute;n en el bloque',
	'BV_Edit_Variable' => 'Editar variable de bloque',
	'Must_enter_bv' => 'Debe introducir una etiqueta de campo y un nombre de configuraci&oacute;n',
	'BV_updated' => 'Variable de bloque actualizado',
	'BV_added' => 'Variable de bloque a&ntilde;adida',
	'Click_return_bvadmin' => 'Pulse %saqu&iacute;%s para volver a la administraci&oacute;n de variables de bloque',
	'Config_Name_Explain' => 'No debe contener espacios',
	'Field_Options_Explain' => 'Obligatorio para listar desplegables y<br />botones de selecci&oacute;n (delimitados por comas).',
	'Field_Values_Explain' => 'Obligatorio para listas desplegables y<br />botones de selecci&oacute;n (delimitados por comas).',
	'BV_removed' => 'Variable de bloque eliminada',

	'Config_updated' => 'Configuraci&oacute;n actualizada',
	'Click_return_config' => 'Pulse %saqu&iacute;%s para volver a configuraci&oacute;n',
	'Portal_Config' => 'Configuraci&oacute;n de IM Portal',
	'Portal_Explain' => 'Desde este panel de control puede establecer todas las configuraciones necesarias para su portal. Las variables de bloque listadas en esta p&aacute;gina pueden ser creadas o actualizadas en la p&aacute;gina de configuraci&oacute;n de variables de bloque',
	'Portal_General_Config' => 'Configuraci&oacute;n general',
	'Default_Portal' => 'P&aacute;gina principal por defecto',
	'Default_Portal_Explain' => 'P&aacute;gina de inicio del foro',
	'Cache_Enabled' => 'Activar sistema de cach&eacute;',
	'Cache_Enabled_Explain' => 'Para una carga m&aacute;s r&aacute;pida de informaci&oacute;n relacionada con el portal',
	'Confirm_delete_item' => '&iquest;Est&aacute; seguro de que desea eliminarlo?',
	'Cache_cleared' => 'Archivos de cach&eacute; eliminados',

	'cms_pos_header' => 'Encabezado de p&aacute;gina',
	'cms_pos_headerleft' => 'Izquierda',
	'cms_pos_headercenter' => 'Arriba/centrar',
	'cms_pos_footercenter' => 'Abajo/centrar',
	'cms_pos_footerright' => 'Derecha',
	'cms_pos_footer' => 'Pie de p&aacute;gina',
	'cms_pos_nav' => 'Men&uacute; de navegaci&oacute;n',
	'cms_pos_left' => 'Izquierda',
	'cms_pos_center' => 'Centro',
	'cms_pos_right' => 'Derecha',
	'cms_pos_xsnews' => 'Noticias (Centro)',
	'cms_pos_centerbottom' => 'Abajo/centrar',
	'cms_pos_toprow' => 'Arriba',
	'cms_pos_column1' => 'Columna 1 (Izquierda)',
	'cms_pos_column2' => 'Columna 2 (Derecha)',
	'cms_pos_bottomrow' => 'Abajo',
	'cms_pos_gheader' => 'Encabezado Global',
	'cms_pos_gfooter' => 'Pie de p&aacute;gina Global',
	'cms_pos_ghtop' => 'Encabezado arriba',
	'cms_pos_ghbottom' => 'Encabezado abajo',
	'cms_pos_ghleft' => 'Encabezado central (Izquierda)',
	'cms_pos_ghright' => 'Encabezado central (Derecha)',
//	'cms_pos_' => '',

	'cms_block_ads' => 'Publicidad',
	'cms_block_ads_tla' => 'Publicidad en Enlaces de Texto',
	'cms_block_ajax_shoutbox' => 'Chat AJAX',
	'cms_block_album' => '&Aacute;lbum',
	'cms_block_birthdays' => 'Cumplea&ntilde;os',
	'cms_block_calendar' => 'Calendario',
	'cms_block_calendar_events' => 'Eventos',
	'cms_block_center_downloads' => 'Descargas',
	'cms_block_clock' => 'Reloj',
	'cms_block_donate' => 'Donaciones',
	'cms_block_dyn_menu' => 'Men&uacute; din&aacute;mico',
	'cms_block_flash_news' => 'Noticias flash',
	'cms_block_forum' => 'Noticias',
	'cms_block_forum_attach' => 'Noticias avanzadas',
	'cms_block_forum_list' => 'Listado de foros',
	'cms_block_full_search' => 'B&uacute;squeda completa',
	'cms_block_global_header' => 'Encabezado global',
	'cms_block_global_header_simple' => 'Encabezado global simple',
	'cms_block_gsearch' => 'B&uacute;squeda google',
	'cms_block_gsearch_hor' => 'B&uacute;squeda de google horizontal',
	'cms_block_index' => 'Mapa del sitio',
	'cms_block_jumpbox' => 'Jumpbox',
	'cms_block_kb' => 'Biblioteca',
	'cms_block_links' => 'Enlaces',
	'cms_block_menu' => 'Men&uacute; de navegaci&oacute;n',
	'cms_block_nav_header' => 'Encabezado',
	'cms_block_nav_links' => 'Mapa web',
	'cms_block_nav_logo' => 'Logo',
	'cms_block_new_downloads' => 'Nuevas descargas',
	'cms_block_news' => 'Noticias',
	'cms_block_news_archive' => 'Archivo de noticias',
	'cms_block_news_posters' => 'Nuevos posters',
	'cms_block_online_users' => 'Qui&eacute;n est&aacute; conectado',
	'cms_block_online_users2' => 'Qui&eacute;n est&aacute; conectado',
	'cms_block_paypal' => 'PayPal',
	'cms_block_paypal_donate' => 'Donaciones',
	'cms_block_plugin_guestbook' => 'Libro de Visitas',
	'cms_block_poll' => 'Encuesta',
	'cms_block_random_attach' => 'Adjuntos aleatorios',
	'cms_block_random_quote' => 'Cita aleatoria',
	'cms_block_random_topics' => 'Temas aleatorios',
	'cms_block_random_topics_ver' => 'Temas aleatorios',
	'cms_block_random_user' => 'Usuario aleatorio',
	'cms_block_recent_articles' => 'Art&iacute;culos recientes',
	'cms_block_recent_topics' => 'Temas recientes',
	'cms_block_recent_topics_wide' => 'Temas recientes',
	'cms_block_referers' => 'Referidos',
	'cms_block_rss' => 'RSS',
	'cms_block_search' => 'Buscar',
	'cms_block_sec_menu' => 'Men&uacute; extra',
	'cms_block_sh_visit_counter' => 'Contador de Visitas',
	'cms_block_shoutbox' => 'Chat',
	'cms_block_staff' => 'Equipo',
	'cms_block_statistics' => 'Estad&iacute;sticas',
	'cms_block_style' => 'Estilo',
	'cms_block_top_downloads' => 'Top descargas',
	'cms_block_top_nav' => 'Top nav',
	'cms_block_top_posters' => 'Los que mas escriben',
	'cms_block_user_block' => 'Bloque de usuario',
	'cms_block_users_visited' => 'Usuarios activos',
	'cms_block_visit_counter' => 'Contador visitas',
	'cms_block_welcome' => 'Bienvenido',
	'cms_block_wordgraph' => 'Palabras m&aacute;s usadas',
	'cms_block_xs_news' => 'Noticias Icy Phoenix',
//	'cms_block_' => '',

	'cms_var_cms_style' => 'CMS estilo moderno',
	'cms_var_cms_style_explain' => 'estilo moderno por CMS consiste en un moderno dise&ntilde;o con un men&uacute; transparente',
	'cms_var_header_width' => 'Anchura global de la columna izquierda',
	'cms_var_header_width_explain' => 'Anchura de la columna izquierda en p&iacute;xels',
	'cms_var_footer_width' => 'Anchura global de la columna derecha',
	'cms_var_footer_width_explain' => 'Anchura de la columna derecha en p&iacute;xels',
	'cms_var_md_cache_file_locking' => 'Bloqueo del archivo de cach&eacute;',
	'cms_var_md_cache_file_locking_explain' => 'Puede evitar la corrupci&oacute;n del cach&eacute; en circunstancias malas',
	'cms_var_md_cache_write_control' => 'Control de escritura del cach&eacute;',
	'cms_var_md_cache_write_control_explain' => 'Detecta algunos archivos corruptos del cach&eacute;',
	'cms_var_md_cache_read_control' => 'Control de lectura del cach&eacute;',
	'cms_var_md_cache_read_control_explain' => 'Controla las \'keys\' integradas en los archivos de cach&eacute;',
	'cms_var_md_cache_read_type' => 'Tipo de control de lectura del cach&eacute;',
	'cms_var_md_cache_read_type_explain' => 'Tipo de control de lectura (solo si el control de lectura est&aacute; habilitado)',
	'cms_var_md_cache_filename_protect' => 'Protecci&oacute;n del nombre de los archivos del cach&eacute;',
	'cms_var_md_cache_filename_protect_explain' => 'Encripta el nombre del archivo de cach&eacute; para una mejor seguridad',
	'cms_var_md_cache_serialize' => 'Serializaci&oacute;n autom&aacute;tica del cach&eacute;',
	'cms_var_md_cache_serialize_explain' => 'Activa / desactiva la serializaci&oacute;n autom&aacute;tica',
//	'cms_var_' => '',

	'CMS_Config_updated' => 'Configuraci&oacute;n actualizada satisfactoriamente',
	'CMS_Click_return_config' => 'Pulse %saqu&iacute;%s pera volver a las configuraciones',
	'CMS_Click_return_cms' => 'Pulse %saqu&iacute;%s para volver a la administraci&oacute;n del CMS',
	'CMS_TITLE' => 'CMS',
	'CMS_MANAGEMENT' => 'Administraci&oacute;n CMS',
	'CMS_CONFIG' => 'Configuraci&oacute;n CMS',
	'CMS_GUEST' => 'Invitado',
	'CMS_REG' => 'Registrado',
	'CMS_VIP' => 'VIP',
	'CMS_PUBLISHER' => 'Editor',
	'CMS_PUBLISHER_TEXT' => 'Puede publicar nuevo contenido pero no modificarlo',
	'CMS_REVIEWER' => 'Revisor',
	'CMS_REVIEWER_TEXT' => 'Puede modificar las p&aacute;ginas y bloques, pero no puede eliminarlos',
	'CMS_CONTENT_MANAGER' => 'Administrador de contenido',
	'CMS_CONTENT_MANAGER_TEXT' => 'Tiene control total sobre todas las p&aacute;ginas del CMS',
	'CMS_ACP' => 'Editar esta p&aacute;gina',
	'CMS_PAGES' => 'P&aacute;ginas de la web',
	'CMS_ID' => 'ID',
	'CMS_ACTIONS' => 'Acciones',
	'CMS_LAYOUT' => 'Distribuci&oacute;n',
	'CMS_BLOCKS' => 'Bloques',
	'CMS_NAME' => 'Nombre',
	'CMS_DESCRIPTION' => 'Descripci&oacute;n',
	'CMS_LAYOUT_PAGE_ID' => 'ID p&aacute;gina',
	'CMS_LAYOUT_PAGE_ID_EXPLAIN' => 'Es el ID de la p&aacute;gina utilizado para el sistema de autorizaciones. Caracteres permitidos: min&uacute;sculas, n&uacute;meros, barra baja, no espacios.',
	'CMS_MUST_FILL_ALL_FIELDS' => 'Tiene que rellenar todos los campos',
	'CMS_FILENAME' => 'Nombre del archivo',
	'CMS_FILENAME_EXPLAIN' => '<i>(Para crear un nuevo archivo, su servidor tiene que estar configurado correctamente para soportar esta caracter&iacute;stica)</i>',
	'CMS_Filename_Explain_OK' => '<i>Despu&eacute;s de una prueba r&aacute;pida, parece que su servidor permite la creaci&oacute;n autom&aacute;tica de ficheros, por lo tanto el fichero ha de ser creado autom&aacute;ticamente.</i>',
	'CMS_Filename_Explain_NO' => '<i>Despu&eacute;s de una prueba r&aacute;pida, parece que su servidor <b>NO PERMITE</b> la creaci&oacute;n autom&aacute;tica de ficheros. Si desea crear una nueva p&aacute;gina con un nuevo nombre ha de crear manualmente el archivo en el servidor, haciendo una copia de <b>index_empty.php</b> y renombrandolo seg&uacute;n el nombre que usted ha escogido aqu&iacute;. Como alternativa puede asignar los permisos correctos en la ra&iacute;z de su sitio web, y as&iacute; el procedimiento funcionar&aacute; autom&aacute;ticamente.</i>',
	'CMS_TEMPLATE' => 'Plantilla',
	'CMS_FileAlreadyExists' => 'El archivo que est&aacute; intentando crear ya existe. Por favor, seleccione otro nombre para el archivo.',
	'CMS_FileCreationSuccess' => 'La nueva p&aacute;gina ha sido creada autom&aacute;ticamente.',
	'CMS_FileCreationError' => 'El archivo no ha podido ser creado.',
	'CMS_FileCreationManual' => 'Por favor, haga una copia del index_empty.php, as&iacute;gnele el nombre que ha insertado en el formulario de creaci&oacute;n, y s&uacute;balo a la ra&iacute;z de su foro.',
	'CMS_PERMISSIONS' => 'Permisos',
	'CMS_Global_Header' => 'Encabezado global',
	'CMS_GLOBAL_BLOCKS' => 'Bloques globales',
	'CMS_BREADCRUMBS' => 'Barra de ruta de acceso',
	'CMS_EDIT' => 'Editar',
	'CMS_DELETE' => 'Borrar',
	'CMS_PREVIEW' => 'Vista preliminar',
	'CMS_CONFIGURE_BLOCKS' => 'Configurar bloques',
	'CMS_PAGES_PERMISSIONS' => 'Permisos de p&aacute;gina',
	'CMS_PAGES_PERMISSIONS_EXPLAIN' => 'En esta p&aacute;gina puede configurar el nivel de usuario que se requiere para ver las p&aacute;ginas est&aacute;ndares. Para cada p&aacute;gina puede escoger si se ven o no los bloques globales (esta caracter&iacute;stica de bloques globales puede ser activada en la <b>Configuraci&oacute;n CMS</b>).',
	'CMS_Page' => 'P&aacute;gina',
	'CMS_ADS' => 'Publicidad &amp; patrocinadores',
	'CMS_OWNER' => 'Propietario',
	'CMS_SAVE_CHANGES' => 'Guardar cambios',
	'CMS_CHANGES_SAVED' => 'Cambios guardados',
	'CMS_BLOCK_SETTINGS' => 'Bloques instalados',
	'CMS_BLOCK_SETTINGS_TITLE' => 'Bloques instalados',
	'CMS_BLOCK_SETTINGS_TEXT' => 'En esta p&aacute;gina...',
	'CMS_BLOCK_SETTINGS_INSTALL' => 'Instalar bloque',
	'CMS_BLOCK_NAME' => 'Nombre',
	'CMS_BLOCK_PARENT' => 'Bloque padre',
	// MG CMS - END

// MG CMS MENU - BEGIN
	'CMS_MENU_PAGE' => 'Men&uacute; din&aacute;mico',
	'CMS_MENU_PAGE_EXPLAIN' => 'En esta p&aacute;gina puede crear un men&uacute; modificado para que se vea en sus p&aacute;ginas del CMS como un bloque. Al crear una categor&iacute;a o un enlace, puede utilizar claves de lenguaje para asignar nombres o para especificar su propio nombre. Tambi&eacute;n puede escoger el nivel de permisos requeridos para cada enlace o la forma en que ha de ser abierto el enlace, en una nueva ventana del navegador o en el mismo.',

	'CMS_Menu_New_Menu' => 'Crear un nuevo bloque de men&uacute;',
	'CMS_Menu_New_cat' => 'Crear una nueva categor&iacute;a',
	'CMS_Menu_New_link' => 'Crear un nuevo enlace',
	'CMS_Menu_Edit_menu_links_button' => 'Editar enlaces en este men&uacute;',
	'CMS_Menu_Edit_cat_button' => 'Editar categor&iacute;a',
	'CMS_Menu_Edit_link_button' => 'Editar enlace',
	'CMS_Menu_Set_auth' => 'Permisos',
	'CMS_Menu_New_menu_name' => 'Nombre del men&uacute;',
	'CMS_Menu_New_cat_name' => 'Nombre de la categor&iacute;a',
	'CMS_Menu_New_link_name' => 'Nombre para el enlace',
	'CMS_Menu_Default_link' => 'Enlace por defecto (<b>*</b> ser&aacute; ignorado)',
	'CMS_Menu_No_default_link' => 'Enlace no por defecto (Configuraci&oacute;n personalizada)',
	'CMS_Menu_New_menu_des' => 'Descripci&oacute;n del men&uacute;',
	'CMS_Menu_New_cat_des' => 'Descripci&oacute;n de la categor&iacute;a',
	'CMS_Menu_New_link_des' => 'Descripci&oacute;n del enlace',
	'CMS_Menu_Choose_cat' => 'Seleccione la categor&iacute;a',
	'CMS_Menu_Choose_cat_desc' => 'Seleccione la categor&iacute;a donde se situar&aacute; el enlace.',
	'CMS_Menu_link_status' => 'Estado',
	'CMS_Menu_Icon' => 'Icono',
	'CMS_Menu_No_Icon' => 'Ning&uacute;n icono',
	'CMS_Menu_Standard_Icon' => 'Icono est&aacute;ndar',
	'CMS_Menu_link_external' => 'Enlace externo',
	'CMS_Menu_New_link_name_key' => 'Clave de lenguaje (especificada en <b>lang_dyn_menu.php</b>)',
	'CMS_Menu_No_lang_key' => 'Ninguna variable de lenguaje (utilice un nombre espec&iacute;fico)',
	'CMS_Menu_New_link_url' => 'URL para el enlace',
	'CMS_Menu_New_cat_link_url' => 'URL de la categor&iacute;a (si no introduce una URL, pulsando en el enlace de la categor&iacute;a puede expandir o contraer la categor&iacute;a en cuesti&oacute;n)',
	'CMS_Menu_Update' => 'Men&uacute; actualizaci&oacute;n',

	'Click_Return_CMS_Menu' => 'Pulse %saqu&iacute;%s, para volver al men&uacute; de administraci&oacute;n',

	'Menu_created' => 'Men&uacute; creado correctamente.',
	'Cat_created' => 'Categor&iacute;a creada correctamente.',
	'Link_created' => 'Enlace creado correctamente.',
	'Menu_updated' => 'Men&uacute; actualizado correctamente.',
	'Cat_updated' => 'Categor&iacute;a actualizada correctamente.',
	'Link_updated' => 'Enlace actualizado correctamente.',
	'Menu_deleted' => 'Men&uacute; borrado correctamente.',
	'Cat_deleted' => 'Categor&iacute;a borrada correctamente.',
	'Link_deleted' => 'Enlace borrado correctamente.',

	'CMS_Menu_Not_Exist' => 'Este men&uacute; no existe.',
	'CMS_Menu_Items_Not_Exist' => 'Este bloque del men&uacute; no est&aacute; en ninguna categor&iacute;a. Pulse en \'A&ntilde;adir\' para a&ntilde;adirle uno.',
	'CMS_Menu_No_Cats_Exist' => 'Este bloque del men&uacute; no est&aacute; en ninguna categor&iacute;a. Antes de crear un enlace necesita crear una categor&iacute;a.',
	'CMS_Menu_Item_Not_Exist' => 'Esta selecci&oacute;n del men&uacute; no existe.',
	'CMS_Menu_Item_Add_Edit' => 'A&ntilde;adir/Editar selecci&oacute;n del men&uacute;',
// MG CMS MENU - END

// CMS - ADV - BEGIN
	'CMS_ADV' => 'CMS ADV',
	'CMS_LINKS' => 'Enlaces',
	'CMS_SETTINGS' => 'Configuraciones',
	'CMS_USERS' => 'CMS usuarios',
	'CMS_ADV_CUSTOM_PAGES' => 'P&aacute;ginas de luz',
	'CMS_ADV_DEFAULT_TEMPLATE' => 'Por defecto',
	'CMS_ADV_DEFAULT_TEMPLATE_OPTION' => '-- Plantilla por defecto --',

	'BLOCK_MOVE' => 'Mover bloque',
	'TURN_ACTIVE' => 'Activar / Desactivar bloque',
	'TURN_BORDER' => 'Activar / Desactivar borde',
	'TURN_TITLEBAR' => 'Activar / Desactivar barra de t&iacute;tulo',
	'TURN_LOCAL' => 'Activar / Desactivar localizaci&oacute;n del t&iacute;tulo',
	'TURN_BACKGROUND' => 'Activar / Desactivar segundo plano',

	'BLOCKS_POSITION_SAVE' => 'Guardar posiciones de bloques',
	'BLOCKS_POSITION_UPDATED' => 'Posici&oacute;n de los bloques guardada correctamente',

	'INVALID_BLOCKS' => 'Posici&oacute;n incorrecta de bloques',

	'CMS_BLOCK_PAGE' => 'A&ntilde;adir / Editar bloque',
	'CMS_BLOCK_CONFIG' => 'Configuraci&oacute;n de Bloque',
	'CMS_BLOCK_CONFIG_EDIT' => 'Editar Configuraci&oacute;n',
	'CMS_BLOCK_CONFIG_NO_VARS' => 'No hay variables de bloque',
	'CMS_AJAX_ENABLE' => 'Activar AJAX',
	'CMS_AJAX_DISABLE' => 'Desactivar AJAX',
// CMS - ADV - END

// CMS - TIPS - BEGIN 
	'CMS_TIP_TITLE' => 'P&aacute;gina principal de CMS',
	'CMS_TIP_CUSTOM_PAGES' => 'P&aacute;ginas personalizadas: todas las p&aacute;ginas creadas desde cero en Icy Phoenix se basan en uno de los dise&ntilde;os disponibles.<br />Puede personalizar cada p&aacute;gina a&ntilde;adiendo, editando o eliminando bloques y contenidos.<br />Tambi&eacute;n puede asignar un nombre f&iacute;sico a la p&aacute;gina (si su servidor lo permite, puede crear una nueva p&aacute;gina llamada por ejemplo <b>mipagina.php</b>).<br />En esta secci&oacute;n puede tambi&eacute;n personalizar los permisos y configuraci&oacute;n global de páginas como la barra lateral y los bloques globales.',
	'CMS_TIP_STANDARD_PAGES' => 'P&aacute;ginas est&aacute;ndar: p&aacute;ginas predeterminadas en Icy Phoenix.<br />Estas p&aacute;ginas tienen un contenido ya definido, pero puede personalizarlas a&ntilde;adiendo bloques o contenido en las posiciones permitidas.<br />Tambi&eacute;n puede a&ntilde;adir nuevas p&aacute;ginas, pero estas deben existir previamente en su servidor.<br />En esta secci&oacute;n tambi&eacute;n puede personalizar los permisos y la configuraci&oacute;n global de la p&aacute;gina como la barra lateral y los bloques globales.',
	'CMS_TIP_BLOCK_SETTINGS' => 'Un bloque es una secci&oacute;n o gadget que puede a&ntilde;adir a cualquier p&aacute;gina.<br />Antes de poder a&ntilde;adir un bloque a una p&aacute;gina, debe crearlo en esta secci&oacute;n.<br />Una vez el contenido del bloque haya sido definido y guardado, puede a&ntilde;adir el bloque a cualquier p&aacute;gina.<br />Despu&eacute;s de haber creado un bloque nuevo, tambi&eacute;n puede a&ntilde;adir el mismo bloque en varias p&aacute;ginas sin tener que crear su contenido de nuevo.',
	'CMS_TIP_GLOBAL_BLOCKS' => 'Los bloques globales son bloques que pueden ser utilizados en cualquier p&aacute;gina sin la necesidad de a&ntilde;adirlo en ninguna p&aacute;gina.<br />Para poder mostrar los bloques globales debe asegurarse de que la p&aacute;gina tenga activados los Bloques Globales en su configuraci&oacute;n.',
	'CMS_TIP_CONFIG' => 'Configuraci&oacute;n CMS: en esta p&aacute;gina puede establecer algunos ajustes b&aacute;sicos del CMS.',
	'CMS_TIP_MENU' => 'Esta secci&oacute;n permite crear y administrar el men&uacute; de navegaci&oacute;n.<br />Puede crear varios men&uacute;s de navegaci&oacute;n y entonces podr&aacute; a&ntilde;adirlos a cualquier p&aacute;gina a trav&eacute;s del bloque &quot;Dynamic Menu&quot; (recuerde a&ntilde;adir la ID del men&uacute; correctamente).<br />Tambi&eacute;n puede establecer im&aacute;genes especiales y permisos en cualquier enlace o categor&iacute;a.',
	'CMS_TIP_ADS' => 'La secci&oacute;n de anuncios le permite administrar anuncios comunes en todas las p&aacute;ginas y en algunas secciones comunes (como foros, temas y el men&uacute;).<br />En esta secci&oacute;n podr&aacute; crear varios anuncios y entonces decidir c&oacute;mo ser&aacute;n mostrados (si se establece m&aacute;s de un anuncio para la misma posici&oacute;n, los anuncios ser&aacute;n mostrados aleatoriamente).',
// CMS - TIPS - END

// CMS USERS
	'CMS_USERS_INDEX' => '&Iacute;ndice',
	'CMS_USERS_LAYOUTS' => 'P&aacute;ginas',
	'CMS_USERS_MENU' => 'Men&uacute;',
	'CMS_USERS_MENU_UPPERCASE' => 'MEN&Uacute;',
	'CMS_USERS_PROFILE' => 'Perfil',
	'CMS_USERS_CONFIG' => 'Configuraci&oacute;n',
	'CMS_USERS_CONFIG_TEXT' => 'Desde esta p&aacute;gina puede editar las preferencias de las p&aacute;ginas y bloques CMS',
	'CMS_USERS_USERLIST' => 'Lista de Usuarios',
	'CMS_USERS_USERLIST_TEXT' => 'Lista de Usuarios CMS',
	'CMS_USERS_USERLIST_NEW' => 'Usuarios Inactivos',
	'CMS_USERS_B_GLOBAL' => 'Permitir a todos los usuarios usar este bloque',
	'CMS_USERS_URL' => 'URL',
	'CMS_USERS_ACCOUNT' => 'Tipo de cuenta',
	'CMS_USERS_PAGE_NUMBERS' => 'n&uacute;mero de p&aacute;ginas',
	'CMS_USERS_LAST_UPDATE' => '&Uacute;ltima actualizaci&oacute;n',

	'CMS_USER' => 'Nombre de Usuario',
	'CMS_AUTH' => 'Permisos',
	'CMS_AUTH_TEXT' => 'En esta p&aacute;gina tienes permisos completos',
	'CMS_AUTH_XP' => 'Permisos especiales',
	'CMS_ROLE' => 'Rol',
	'CMS_ROLES' => 'Roles',
	'CMS_AUTH_ADD' => 'A&ntilde;adir usuario',
	'CMS_SAVE' => 'Guardar',
	'CMS_NO_AUTH' => 'No ha especificado ning&uacute;n permiso especial',
	'CMS_NO_ROLE' => 'No ha especificado ning&uacute;n rol',

	'CMS_USERS_CMS_NEW' => 'Crea tu p&aacute;gina',
	'CMS_USERS_CMS_EDIT' => 'Editar configuraci&oacute;n',

	'CMS_USERS_NO_LAYOUT' => 'La p&aacute;gina que ha seleccionado no existe',

	'AUTH' => array(
		'cms_view' => 'Acceso CMS',
		'cms_edit' => 'Configuraci&oacute;n CMS',
		'cms_l_new' => 'A&ntilde;adir p&aacute;ginas',
		'cms_l_edit' => 'Editar p&aacute;ginas',
		'cms_l_delete' => 'Eliminar p&aacute;ginas',
		'cms_b_new' => 'A&ntilde;adir bloques',
		'cms_b_edit' => 'Editar bloques',
		'cms_b_delete' => 'Eliminar bloques',
	),

	)
);

?>