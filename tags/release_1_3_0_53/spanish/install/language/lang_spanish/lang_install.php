<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ENCODING' => 'ISO-8859-1',
	'ENCODING_ALT' => 'UTF-8',
	'DIRECTION' => 'ltr',
	'HEADER_LANG' => 'sp-es',
	'HEADER_XML_LANG' => 'sp-es',
	'LEFT' => 'left',
	'RIGHT' => 'right',

	'Welcome_install' => 'Instalación Icy Phoenix',
	'Initial_config' => 'Configuración',
	'DB_config' => 'Configuración de la Base de Datos',
	'Admin_config' => 'Configuración de admin',
	'continue_upgrade' => 'Una vez que haya descargado su archivo de configuración en su máquina local puede \'Continuar Actualizar\' botón de abajo para seguir adelante con el proceso de actualización. Por favor, espera a cargar el archivo de configuración hasta que el proceso de actualización se ha completado.',
	'upgrade_submit' => 'Continuar la actualización',

	'Installer_Error' => 'Se ha producido un error durante la instalación',
	'Previous_Install' => 'Una instalación anterior ha sido detectado',
	'Install_db_error' => 'Se ha producido un error al intentar actualizar la base de datos',

	'Re_install' => 'Su instalación anterior todavía está activa. <br /> <br /> Si quiere volver a instalar Icy Phoenix debe hacer clic en el botón Sí a continuación. Tenga en cuenta que, al hacerlo, destruirá todos los datos existentes y no se harán copias de seguridad! El Administrador de usuario y la contraseña que ha utilizado para acceder al sistema será vuelto a crear a partir de la nueva instalación y ningún otro ajuste se mantendrá. <br /> <br /> Piense cuidadosamente antes de pulsar Sí!',

	'Inst_Step_0' => 'Gracias por elegir Icy Phoenix. Este asistente le guiará a través del proceso de instalación. <span class="text_red"> <br /> Tenga en cuenta que debería haber cargado todos los archivos de Icy Phoenix en su servidor y que la base de datos en la que lo va a instalar debe existir.</span>',

	'Inst_Step_1' => 'Con el fin de completar esta instalación, por favor, rellene los datos que se solicitan a continuación.<br /><span class="text_red">Tenga en cuenta que la base de datos en la que lo va a instalar debe existir (la instalación no puede crear una).</span>',

	'Start_Install' => 'Comenzar instalación',
	'Start_Install_Anyway' => 'Comenzar instalación de todas formas',
	'Finish_Install' => 'Finalizar instalación',
	'Continue_Install' => 'Continuar instalación',

	'CHMOD_Files' => 'Permisos de archivos y carpetas',
	'CHMOD_OK' => 'Ok',
	'CHMOD_Error' => 'Error',
	'CHMOD_777' => 'CHMOD 777',
	'CHMOD_666' => 'CHMOD 666',
	'CHMOD_Files_Explain_Error' => 'Ocurrieron algunos errores en la verificación de los permisos CHMOD. Por favor, asegúrese de que todos los archivos / carpetas del paquete de instalación existen y tienen los permisos CHMOD correctos, de lo contrario Icy Phoenix no se ejecutará correctamente.',
	'Confirm_Install_anyway' => ' Si usted ha comprobado dos veces todo, puede proceder haciendo clic en "<i>Comenzar instalación de todas formas</i>".',
	'CHMOD_Files_Explain_Ok' => 'Todos los permisos CHMOD parece estar bien.',
	'Can_Install' => 'Usted puede proceder al siguiente paso.',
	'CHMOD_File_Exists' => 'Este archivo / carpeta existe y sus permisos se han aplicado correctamente.',
	'CHMOD_File_NotExists' => 'Este archivo / carpeta no existe, por favor, súbalo y aplique correctamente los permisos CHMOD.',
	'CHMOD_File_Exists_Read_Only' => 'Este archivo / carpeta existe, pero los permisos no pueden ser modificados automáticamente, por favor, aplique los permisos CHMOD manualmente y, a continuación, haga clic en "<i>Comenzar instalación de todas formas</i>".',
	'CHMOD_File_UnknownError' => 'Error desconocido al comprobar este archivo / carpeta. Por favor, asegúrese de que este archivo / carpeta existe en el servidor, que tiene los permisos CHMOD correctos y, a continuación, haga clic en "<i>Comenzar instalación de todas formas</i>".',
	'CHMOD_Apply' => 'Aplique los permisos CHMOD a archivos y carpetas a través de PHP',
	'CHMOD_Apply_Warn' => 'Tenga en cuenta que no todos los servidores soportan la modificación de permisos CHMOD a través de PHP, ¡¡¡la edición manual puede ser necesaria!!!',

	'Default_lang' => 'Lenguaje por defecto',
	'Select_lang' => 'Lenguaje',
	'DB_Host' => 'Nombre del servidor de la Base de Datos (DSN)',
	'DB_Name' => 'Nombre de su Base de Datos',
	'DB_Username' => 'Usuario de la Base de Datos',
	'DB_Password' => 'Contraseña de la Base de Datos',
	'Database' => 'Su Base de Datos',
	'Install_lang' => 'Seleccione el idioma para la instalación',
	'dbms' => 'Tipo de Base de Datos',
	'Table_Prefix' => 'Prefijo para las tablas en la Base de Datos',
	'Admin_Username' => 'Usuario de administrador',
	'Admin_Password' => 'Contraseña de administrador',
	'Admin_Password_confirm' => 'Confirmación de contraseña de administrador',

	'Inst_Step_2' => 'Su usuario de administración se ha creado.<br />En este punto, para completar el proceso de configuración, necesita <span class="text_red">eliminar las carpetas <u>install</u> y <u>contrib</u> (si las tiene en su servidor)</span>. Por último debe hacer clic en <b>Finalizar instalación</ b> y después acceder al ACP (Admin Control Panel) y el CMS (Content Management System) donde se pueden gestionar todos los ajustes y preferencias de Icy Phoenix.<br />En el ACP se pueden configurar los principales ajustes y preferencias para todo el sitio, (los estilos, los idiomas, el tiempo, los foros, las descargas, los usuarios, el álbum, etc) y en el CMS puede configurar las opciones relativas a las páginas del sitio (definir los permisos, añadir bloques, crear nuevas páginas, crear nuevos menús, etc) También puede que desee configurar el <b>.htaccess</b> y <b>lang_main_settings.php</b> (para cada idioma instalado) para ajustar algunas otras preferencias, como el informe de errores, la reescritura de URL, palabras clave, mensaje de bienvenida, charset, etc.<br /><br />Gracias por elegir Icy Phoenix y recuerde realizar copias de seguridad de su base de datos periódicamente.<br /><br />',

	'Unwriteable_config' => 'Su archivo de configuración no es escribible. Una copia del archivo de configuración será descargado a su ordenador cuando usted haga clic en el botón de abajo. Usted debe subir este archivo en el mismo directorio donde Icy Phoenix esté subido. Una vez hecho esto se debe eliminar la carpeta de instalación (install) y acceder con el nombre de administrador y la contraseña, que indicó anteriormente, para entrar en el centro de control de administración (un enlace aparecerá en la parte inferior de cada pantalla una vez conectado), para comprobar la configuración general. Gracias por elegir Icy Phoenix.',
	'Download_config' => 'Descargar configuración',

	'ftp_choose' => 'Elija un metodo de descarga',
	'ftp_option' => '<br />Como las extensiones FTP están habilitadas en esta versión de PHP, puede que le dé la opción de primero subir de forma automática el archivo de configuración a su lugar.',
	'ftp_instructs' => 'Ha elegido subir el archivo automaticamente. Por favor, introduzca la siguiente información para facilitar este proceso. Tenga en cuenta que la ruta del FTP debe ser exacta a través de la cual se accede por FTP a su instalación de Icy Phoenix, como si lo estuviera subiendo utilizando cualquier cliente de FTP.',
	'ftp_info' => 'Introduzca su información del FTP',
	'Attempt_ftp' => 'Intente subir el archivo de configuración',
	'Send_file' => 'Envieme el archivo y lo subire de forma manual',
	'ftp_path' => 'Ruta FTP a Icy Phoenix',
	'ftp_username' => 'Su usuario FTP',
	'ftp_password' => 'Su contraseña FTP',
	'Transfer_config' => 'Comenzar transferencia',
	'NoFTP_config' => 'El intento de subie el archivo de configuración falló. Por favor, descárguese el archivo de configuración y súbalo manualmente.',

	'Install' => 'Instalación',
	'Upgrade' => 'Actualización',

	'Install_Method' => 'Escoja su método de instalación',
	'Install_No_Ext' => 'La configuracion PHP de su servidor no soporta el tipo de base de datos que ha elegido',
	'Install_No_PCRE' => 'Icy Phoenix requiere el Perl-Compatible Regular Expressions Module para PHP, el cual parece no estar soportado por su configuración PHP!',

	'Server_name' => 'Nombre de dominio',
	'Script_path' => 'Ruta del Script',
	'Server_port' => 'Puerto del servidor',
	'Admin_email' => 'Correo electrónico de administrador',

	'IP_Utilities' => 'Utilidades Icy Phoenix',
	'Upgrade_Options' => 'Opciones de actualización:',
	'Upgrade_From' => 'Actualizar al último Icy Phoenix',
	'Upgrade_From_Version' => 'desde la versión',
	'Upgrade_From_phpBB' => 'desde phpBB o phpBB XS',
	'Upgrade_Higher' => 'o mayor',

	'IcyPhoenix' => 'Icy Phoenix',
	'phpBB' => 'phpBB',
	'Information' => 'Información',
	'VersionInformation' => 'Información del servidor y la versión',
	'NotInstalled' => 'No instalado',
	'Current_IP_Version' => 'Versión de Icy Phoenix instalada',
	'Current_phpBB_Version' => 'Versión phpBB instalada',
	'Latest_Release' => 'Ultima "release"',
	'Version_UpToDate' => 'Versión actualizada',
	'Version_NotUpdated' => 'Versión no actualizada',
	'UpdateInProgress' => 'Actualizando...',
	'CleaningInProgress' => 'Limpieza de archivos en progreso',
	'UpdateCompleted' => 'Actualización completa!',
	'UpdateCompleted_phpBB' => 'Actualización de phpBB completada, ahora puede actualizar a Icy Phoenix!',
	'UpdateInProgress_Schema' => 'Actualizando el esquema de la Base de Datos',
	'UpdateInProgress_Data' => 'Actualizando datos',
	'Optimizing_Tables' => 'Optimizando tablas',
	'Progress' => 'Progreso',
	'Done' => 'Hecho',
	'NotDone' => 'No hecho',
	'Result' => 'Resultado',
	'Error' => 'Error',
	'Successful' => 'Éxito',
	'NoErrors' => 'No Errores',
	'NoUpdate' => 'No requiere actualizaciones',
	'phpBB_NotDetected' => 'phpBB no ha detectado el script y no puede continuar. Por favor, verifique que realmente tiene phpBB.',
	'Update_Errors' => 'Algunas consultas fallaron, las declaraciones y los errores se listan a continuación',

	'DBUpdate_Success' => 'Las siguientes consultas SQL se han ejecutado con éxito',
	'DBUpdate_Errors' => 'Las siguientes consultas SQL no se han podido ejecutar',

	'FileWriting' => 'Escribiendo archivos',
	'FileCreation_OK' => 'Su servidor parece soportar la creación y edición de archivos',
	'FileCreation_OK_Explain' => 'El script intentará automáticamente crear / editar todos los ficheros necesarios.',
	'FileCreation_ERROR' => 'Su servidor no soporta la creación y edición de archivos.',
	'FileCreation_ERROR_Explain' => 'El script no puede crear / editar archivos de forma automática. Lamentablemente tendrá que hacerlo manualmente.',

	'IcyPhoenix_Version_UpToDate' => 'Su versión de Icy Phoenix está actualizada',
	'IcyPhoenix_Version_NotUpToDate' => 'Su versión de Icy Phoenix no está actualizada',
	'IcyPhoenix_Version_NotInstalled' => 'Icy Phoenix no está instalado',
	'phpBB_Version_UpToDate' => 'Su versión de phpBB está actualizada',
	'phpBB_Version_NotUpToDate' => 'Su versión de phpBB no está actualizada',
	'ClickUpdate' => 'Por favor, haga clic en %saquí%s para actualizar!',
	'ClickReturn' => 'Por favor, haga clic en %saquí%s para volver al menú!',

	'Clean_OldFiles_Explain' => 'Eliminar todos los archivos de Icy Phoenix no utilizados (todavía en su servidor de versiones anteriores)',
	'ActionUndone' => 'Tenga en cuenta que esta acción no se puede deshacer. ¡¡¡Asegúrese de que tiene una copia de seguridad!!!',
	'ClickToClean' => 'Por favor, haga clic en el link abajo para continuar',
	'FileDeletion_OK' => 'Archivo eliminado con éxito',
	'FileDeletion_ERROR' => 'El archivo no se pueden eliminar',
	'FileDeletion_NF' => 'Los archivos no pueden ser encontrados',
	'FilesDeletion_OK' => 'Archivos borrados con éxito',
	'FilesDeletion_NO' => 'Archivos no borrados',
	'FilesDeletion_ERROR' => 'Los archivos no pueden ser automáticamente eliminados',
	'FilesDeletion_NF' => 'Los archivos no pueden ser encontrados',
	'FilesDeletion_None' => 'Ninguno',
	'FileDeletion_Complete' => 'Limpieza de archivos completa!',

	'Spoiler' => 'Spoiler',
	'Show' => 'Mostrar',
	'Hide' => 'Esconder',
	'None' => 'Nada',
	'Start' => 'Comenzar',

	'Upgrade_Steps' => 'Pasos de la actualización',
	'MakeFullBackup' => 'Haga una copia de seguridad completa (archivos y Base de Datos) y guárdelo en un lugar seguro!',
	'Update_phpBB' => 'Actualice Base de Datos de phpBB (si es necesario)',
	'Remove_BBCodeUID' => 'Procese todos los posts: eliminando BBCode UID, reemplazando texto, eliminando viejos BBCodes',
	'Merge_PostsTables' => 'Una las tablas de posts',
	'Update_IcyPhoenix' => 'Actualice Base de Datos de Icy Phoenix',
	'Upload_NewFiles' => 'Suba todos los nuevos ficheros',
	'Adjust_Config' => 'Actualice constantes en config.php (solo funciona si los archivos son escribibles)',
	'Adjust_CMSPages' => 'Actualice constantes en paginas CMS (solo funciona si los archivos son escribibles)',
	'MoveImagesAlbum' => 'Mueva imagenes del album (opcional: solo si quieres usar imagenes posteadas en subcarpetas)',
	'MoveImages' => 'Mueva imagenes posteadas (opcional: solo si quieres usar imagenes posteadas en subcarpetas)',
	'Clean_OldFiles' => 'Limpie archivos viejos',

	'ColorsLegend' => 'Leyenda de colores',
	'ColorsLegendRed' => 'Rojo: esta acción es necesaria y ha de llevarse a cabo manualmente',
	'ColorsLegendOrange' => 'Naranja: esta acción es necesaria y se podrá realizar de manera automática (si se cumplen los requisitos)',
	'ColorsLegendGray' => 'Gris: esta acción puede no ser necesaria y se puede realizar automáticamente',
	'ColorsLegendBlue' => 'Azul: esta acción es opcional y se puede realizar automáticamente (aunque puede requerir algunas modificaciones manualmente en algunos archivos)',
	'ColorsLegendGreen' => 'Verde: esta acción es una sugerencia y se puede realizar automáticamente (si se cumplen los requisitos)',

	'FixBirthdays' => 'Convertir cumpleaños',
	'FixBirthdaysExplain' => 'Esta función le permite ajustar todos los cumpleaños para la compatibilidad con las nuevas características.',
	'FixingBirthdaysInProgress' => 'Conversión de cumpleaños en curso',
	'FixingBirthdaysInProgressRedirect' => 'Usted será redirigido automáticamente al siguiente paso en tres segundos',
	'FixingBirthdaysInProgressRedirectClick' => 'Si usted no es automáticamente redirigido haga clic %sAquí%s',
	'FixingBirthdaysFrom' => 'Cumpleaños modificados de %s a %s',
	'FixingBirthdaysTotal' => '%s cumpleaños de %s modificados',
	'FixingBirthdaysModified' => ' cumpleaños convertidos',
	'FixingBirthdaysComplete' => 'Conversión de compleaños completa',
	'BirthdaysPerStep' => 'Número de cumpleaños por paso',

	'FixConstantsInFiles' => 'Actualizar constantes',
	'FixConstantsInFilesExplain' => 'Actualiza todos los ficheros con las nuevas constantes de Icy Phoenix',
	'FixingInProgress' => 'Actualización ficheros en curso',
	'FixingComplete' => 'Actualización de ficheros completa',
	'ClickToFix' => 'Por favor, haga clic en uno de los link abajo para comenzar',
	'FixAllFiles' => 'Actualizar todos los archivos (paginas del CMS y config.php)',
	'FixCMSPages' => 'Actualizar solo las paginas CMS',
	'Fixed' => 'Actualizado',
	'NotFixed' => 'No actualizado',
	'FilesProcessed' => 'Archivos procesados',

	'FixPosts' => 'Actualizar posts',
	'FixPostsExplain' => 'Esta característica le permitirá actualizar todos los posts de sus foros. Puede utilizar esta función para: buscar y reemplazar cualquier texto en los posts, eliminar todos los BBCode UID, ajustar automáticamente la dirección de imágenes posteadas.',
	'FixingPostsInProgress' => 'Actualizando posts...',
	'FixingPostsInProgressRedirect' => 'Usted será redirigido automáticamente al siguiente paso en tres segundos',
	'FixingPostsInProgressRedirectClick' => 'Si usted no es automáticamente redirigido haga clic %sAquí%s',
	'FixingPostsFrom' => 'Posts actualizados de %s a %s',
	'FixingPostsTotal' => '%s posts de %s actualizados',
	'FixingPostsModified' => ' posts actualizados',
	'FixingPostsComplete' => 'Actualización de posts completada',
	'SearchWhat' => 'Buscar que',
	'ReplaceWith' => 'Reemplazar con',
	'PostsPerStep' => 'Número de posts por paso',
	'StartFrom' => 'Comenzar desde el post',
	'RemoveBBCodeUID' => 'Eliminar BBCode UID (desde la table de posts)',
	'RemoveBBCodeUID_Guess' => 'Intentar descubrir y eliminar BBCode UID',
	'FixPostedImagesPaths' => 'Actualizar todas las rutas de imagenes posteadas (ajustar las rutas a fin de reflejar las subcarpetas de los usuarios)',

	'FixSignatures' => 'Actualizar firmas',
	'FixSignaturesExplain' => 'Esta característica le permite actualizar las firmas de todos los usuarios. Puede utilizar esta función para: buscar y reemplazar texto en las firmas, eliminar todos los BBCode UID, ajustar automáticamente la dirección de imágenes posteadas.',
	'FixingSignaturesInProgress' => 'Actualizando firmas...',
	'FixingSignaturesFrom' => 'Firmas actualizadas en este paso de %s a %s',
	'FixingSignaturesTotal' => '%s firmas de %s actualizadas',
	'FixingSignaturesModified' => ' firmas actualizadas',
	'FixingSignaturesComplete' => 'Actualización de firmas completada',
	'SignaturesPerStep' => 'Número de firmas por paso',
	'StartFromSignature' => 'Comenzar desde la firma',

	'FixPics' => 'Actualizar rutas de las fotos del álbum',
	'FixPicsExplain' => 'Esta característica moverá todas la fotos del álbum de los usuarios de la carpeta a las subcarpetas y también actualiza la base de datos con las nuevas rutas',
	'FixingPicsInProgress' => 'Actualizando fotos...',
	'FixingPicsInProgressRedirect' => 'Usted será redirigido automáticamente al siguiente paso en tres segundos',
	'FixingPicsInProgressRedirectClick' => 'Si usted no es automáticamente redirigido haga clic %sAquí%s',
	'FixingPicsFrom' => 'Fotos actualizadas en este paso de %s a %s',
	'FixingPicsTotal' => '%s fotos de %s actualizadas',
	'FixingPicsModified' => ' fotos actualizadas',
	'FixingPicsComplete' => 'Actualización de fotos completada',
	'PicStartFrom' => 'Comenzar desde la foto',
	'PicsPerStep' => 'Número de fotos por paso',

	'RenMovePics' => 'Renombrar y mover las fotos posteadas',
	'RenMovePicsExplain' => 'Esta característica renombra y mueve todas las fotos posteadas por los usuarios de la carpeta principal a las subcarpetas: usted tendrá que actualizar la tabla de posts usando <i>Actualizar posts</i> para ajustar todas las rutas de los posts',
	)
);

$lang['BBC_IP_CREDITS_STATIC'] = '
<a href="http://www.icyphoenix.com" title="Icy Phoenix"><img src="./style/icy_phoenix_small.png" alt="Icy Phoenix" title="Icy Phoenix" /></a><br />
<span style="color: #ff5500;"><b>Mighty Gorgon</b></span><br />
<i>(Luca Libralato)</i><br />
<b><i>Developer</i></b><br />
Interests: Heroes Of Might And Magic III, 69, #FF5522<br />
Location: Homer\'s Head<br />
<br />
<br />
<span style="color: #dd2222;"><b>Bicet</b></span><br />
<b><i>phpBB XS Developer</i></b><br />
<br />
<br />
<span style="color: #dd2222;"><b>hpl</b></span><br />
<b><i>Some Special Contributions</i></b><br />
<br />
<br />
<b><i>Valued Contributors</i></b><br />
<span style="color: #228822;"><b>Andrea75</b></span><br />
<span style="color: #dd2222;"><b>Artie</b></span><br />
<span style="color: #0000bb;"><b>brandsrus</b></span><br />
<span style="color: #228822;"><b>buldo</b></span><br />
<span style="color: #228822;"><b>casimedicos</b></span><br />
<span style="color: #228822;"><b>Chaotic</b></span><br />
<span style="color: #dd2222;"><b>CyberAlien</b></span><br />
<span style="color: #228822;"><b>difus</b></span><br />
<span style="color: #228822;"><b>DWho</b></span><br />
<span style="color: #228822;"><b>fracs</b></span><br />
<span style="color: #880088;"><b>ganesh</b></span><br />
<span style="color: #228822;"><b>JANU1535</b></span><br />
<span style="color: #880088;"><b>jz</b></span><br />
<span style="color: #228822;"><b>KasLimon</b></span><br />
<span style="color: #aaff00;"><b>KugeLSichA</b></span><br />
<span style="color: #0000bb;"><b>Limun</b></span><br />
<span style="color: #880088;"><b>Lopalong</b></span><br />
<span style="color: #228822;"><b>moreteavicar</b></span><br />
<span style="color: #228822;"><b>novice programmer</b></span><br />
<span style="color: #228822;"><b>ThE KuKa</b></span><br />
<span style="color: #ff7700;"><b>TheSteffen</b></span><br />
<span style="color: #0000bb;"><b>Tom</b></span><br />
<span style="color: #228822;"><b>z3d0</b></span><br />
<span style="color: #228822;"><b>Zuker</b></span><br />
<span style="color: #228822;"><b>Tiolalu</b></span><br />
<br />
Interests: Icy Phoenix<br />
Location: <a href="http://www.icyphoenix.com/">http://www.icyphoenix.com</a>
';

$lang['BBC_IP_CREDITS'] = '<div class="center-block"><marquee behavior="scroll" direction="up" scrolldelay="120">' . $lang['BBC_IP_CREDITS_STATIC'] . '</marquee></div>';

?>