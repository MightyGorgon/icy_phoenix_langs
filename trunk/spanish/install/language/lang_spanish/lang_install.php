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
	'ENCODING' => 'UTF-8',
	'DIRECTION' => 'ltr',
	'HEADER_LANG' => 'es-es',
	'HEADER_XML_LANG' => 'es-es',
	'LEFT' => 'izquierda',
	'RIGHT' => 'derecha',

	'Welcome_install' => 'Instalaci&oacute;n Icy Phoenix',
	'Initial_config' => 'Configuraci&oacute;n',
	'DB_config' => 'Configuraci&oacute;n de la Base de Datos',
	'Admin_config' => 'Configuraci&oacute;n de admin',
	'continue_upgrade' => 'Una vez que haya descargado su archivo de configuraci&oacute;n en su m&aacute;quina local puede \'Continuar Actualizar\' bot&oacute;n de abajo para seguir adelante con el proceso de actualizaci&oacute;n. Por favor, espera a cargar el archivo de configuraci&oacute;n hasta que el proceso de actualizaci&oacute;n se ha completado.',
	'upgrade_submit' => 'Continuar la actualizaci&oacute;n',

	'Installer_Error' => 'Se ha producido un error durante la instalaci&oacute;n',
	'Previous_Install' => 'Una instalaci&oacute;n anterior ha sido detectado',
	'Install_db_error' => 'Se ha producido un error al intentar actualizar la base de datos',

	'Re_install' => 'Su instalaci&oacute;n anterior todav&iacute;a est&aacute; activa. <br /> <br /> Si quiere volver a instalar Icy Phoenix debe hacer clic en el bot&oacute;n S&iacute; a continuaci&oacute;n. Tenga en cuenta que, al hacerlo, destruir&aacute; todos los datos existentes y no se har&aacute;n copias de seguridad! El Administrador de usuario y la contrase&ntilde;a que ha utilizado para acceder al sistema ser&aacute; vuelto a crear a partir de la nueva instalaci&oacute;n y ning&uacute;n otro ajuste se mantendr&aacute;. <br /> <br /> Piense cuidadosamente antes de pulsar S&iacute;!',

	'Inst_Step_0' => 'Gracias por elegir Icy Phoenix. Este asistente le guiar&aacute; a trav&eacute;s del proceso de instalaci&oacute;n. <span class="text_red"> <br /> Tenga en cuenta que deber&iacute;a haber cargado todos los archivos de Icy Phoenix en su servidor y que la base de datos en la que lo va a instalar debe existir.</span>',

	'Inst_Step_1' => 'Con el fin de completar esta instalaci&oacute;n, por favor, rellene los datos que se solicitan a continuaci&oacute;n.<br /><span class="text_red">Tenga en cuenta que la base de datos en la que lo va a instalar debe existir (la instalaci&oacute;n no puede crear una).</span>',

	'Start_Install' => 'Comenzar instalaci&oacute;n',
	'Start_Install_Anyway' => 'Comenzar instalaci&oacute;n de todas formas',
	'Finish_Install' => 'Finalizar instalaci&oacute;n',
	'Continue_Install' => 'Continuar instalaci&oacute;n',

	'CHMOD_Files' => 'Permisos de archivos y carpetas',
	'CHMOD_OK' => 'Ok',
	'CHMOD_Error' => 'Error',
	'CHMOD_777' => 'CHMOD 777',
	'CHMOD_666' => 'CHMOD 666',
	'CHMOD_Files_Explain_Error' => 'Ocurrieron algunos errores en la verificaci&oacute;n de los permisos CHMOD. Por favor, aseg&uacute;rese de que todos los archivos / carpetas del paquete de instalaci&oacute;n existen y tienen los permisos CHMOD correctos, de lo contrario Icy Phoenix no se ejecutar&aacute; correctamente.',
	'Confirm_Install_anyway' => ' Si usted ha comprobado dos veces todo, puede proceder haciendo clic en "<i>Comenzar instalaci&oacute;n de todas formas</i>".',
	'CHMOD_Files_Explain_Ok' => 'Todos los permisos CHMOD parece estar bien.',
	'Can_Install' => 'Usted puede proceder al siguiente paso.',
	'CHMOD_File_Exists' => 'Este archivo / carpeta existe y sus permisos se han aplicado correctamente.',
	'CHMOD_File_NotExists' => 'Este archivo / carpeta no existe, por favor, s&uacute;balo y aplique correctamente los permisos CHMOD.',
	'CHMOD_File_Exists_Read_Only' => 'Este archivo / carpeta existe, pero los permisos no pueden ser modificados autom&aacute;ticamente, por favor, aplique los permisos CHMOD manualmente y, a continuaci&oacute;n, haga clic en "<i>Comenzar instalaci&oacute;n de todas formas</i>".',
	'CHMOD_File_UnknownError' => 'Error desconocido al comprobar este archivo / carpeta. Por favor, aseg&uacute;rese de que este archivo / carpeta existe en el servidor, que tiene los permisos CHMOD correctos y, a continuaci&oacute;n, haga clic en "<i>Comenzar instalaci&oacute;n de todas formas</i>".',
	'CHMOD_Apply' => 'Aplique los permisos CHMOD a archivos y carpetas a trav&eacute;s de PHP',
	'CHMOD_Apply_Warn' => 'Tenga en cuenta que no todos los servidores soportan la modificaci&oacute;n de permisos CHMOD a trav&eacute;s de PHP, &iexcl;&iexcl;&iexcl;la edici&oacute;n manual puede ser necesaria!!!',

	'Default_lang' => 'Lenguaje por defecto',
	'Select_lang' => 'Lenguaje',
	'DB_Host' => 'Nombre del servidor de la Base de Datos (DSN)',
	'DB_Name' => 'Nombre de su Base de Datos',
	'DB_Username' => 'Usuario de la Base de Datos',
	'DB_Password' => 'Contrase&ntilde;a de la Base de Datos',
	'Database' => 'Su Base de Datos',
	'Install_lang' => 'Seleccione el idioma para la instalaci&oacute;n',
	'dbms' => 'Tipo de Base de Datos',
	'Table_Prefix' => 'Prefijo para las tablas en la Base de Datos',
	'Admin_Username' => 'Usuario de administrador',
	'Admin_Password' => 'Contrase&ntilde;a de administrador',
	'Admin_Password_confirm' => 'Confirmaci&oacute;n de contrase&ntilde;a de administrador',

	'Inst_Step_2' => 'Su usuario de administraci&oacute;n se ha creado.<br />En este punto, para completar el proceso de configuraci&oacute;n, necesita <span class="text_red">eliminar las carpetas <u>install</u> y <u>contrib</u> (si las tiene en su servidor)</span>. Por &uacute;ltimo debe hacer clic en <b>Finalizar instalaci&oacute;n</ b> y despu&eacute;s acceder al ACP (Admin Control Panel) y el CMS (Content Management System) donde se pueden gestionar todos los ajustes y preferencias de Icy Phoenix.<br />En el ACP se pueden configurar los principales ajustes y preferencias para todo el sitio, (los estilos, los idiomas, el tiempo, los foros, las descargas, los usuarios, el &aacute;lbum, etc) y en el CMS puede configurar las opciones relativas a las p&aacute;ginas del sitio (definir los permisos, a&ntilde;adir bloques, crear nuevas p&aacute;ginas, crear nuevos men&uacute;s, etc) Tambi&eacute;n puede que desee configurar el <b>.htaccess</b> y <b>lang_main_settings.php</b> (para cada idioma instalado) para ajustar algunas otras preferencias, como el informe de errores, la reescritura de URL, palabras clave, mensaje de bienvenida, charset, etc.<br /><br />Gracias por elegir Icy Phoenix y recuerde realizar copias de seguridad de su base de datos peri&oacute;dicamente.<br /><br />',

	'Unwriteable_config' => 'Su archivo de configuraci&oacute;n no es escribible. Una copia del archivo de configuraci&oacute;n ser&aacute; descargado a su ordenador cuando usted haga clic en el bot&oacute;n de abajo. Usted debe subir este archivo en el mismo directorio donde Icy Phoenix est&eacute; subido. Una vez hecho esto se debe eliminar la carpeta de instalaci&oacute;n (install) y acceder con el nombre de administrador y la contrase&ntilde;a, que indic&oacute; anteriormente, para entrar en el centro de control de administraci&oacute;n (un enlace aparecer&aacute; en la parte inferior de cada pantalla una vez conectado), para comprobar la configuraci&oacute;n general. Gracias por elegir Icy Phoenix.',
	'Download_config' => 'Descargar configuraci&oacute;n',

	'ftp_choose' => 'Elija un metodo de descarga',
	'ftp_option' => '<br />Como las extensiones FTP est&aacute;n habilitadas en esta versi&oacute;n de PHP, puede que le d&eacute; la opci&oacute;n de primero subir de forma autom&aacute;tica el archivo de configuraci&oacute;n a su lugar.',
	'ftp_instructs' => 'Ha elegido subir el archivo automaticamente. Por favor, introduzca la siguiente informaci&oacute;n para facilitar este proceso. Tenga en cuenta que la ruta del FTP debe ser exacta a trav&eacute;s de la cual se accede por FTP a su instalaci&oacute;n de Icy Phoenix, como si lo estuviera subiendo utilizando cualquier cliente de FTP.',
	'ftp_info' => 'Introduzca su informaci&oacute;n del FTP',
	'Attempt_ftp' => 'Intente subir el archivo de configuraci&oacute;n',
	'Send_file' => 'Envieme el archivo y lo subire de forma manual',
	'ftp_path' => 'Ruta FTP a Icy Phoenix',
	'ftp_username' => 'Su usuario FTP',
	'ftp_password' => 'Su contrase&ntilde;a FTP',
	'Transfer_config' => 'Comenzar transferencia',
	'NoFTP_config' => 'El intento de subie el archivo de configuraci&oacute;n fall&oacute;. Por favor, desc&aacute;rguese el archivo de configuraci&oacute;n y s&uacute;balo manualmente.',

	'Install' => 'Instalaci&oacute;n',
	'Upgrade' => 'Actualizaci&oacute;n',

	'Install_Method' => 'Escoja su m&eacute;todo de instalaci&oacute;n',
	'Install_No_Ext' => 'La configuracion PHP de su servidor no soporta el tipo de base de datos que ha elegido',
	'Install_No_PCRE' => 'Icy Phoenix requiere el Perl-Compatible Regular Expressions Module para PHP, el cual parece no estar soportado por su configuraci&oacute;n PHP!',

	'Server_name' => 'Nombre de dominio',
	'Script_path' => 'Ruta del Script',
	'Server_port' => 'Puerto del servidor',
	'Admin_email' => 'Correo electr&oacute;nico de administrador',

	'IP_Utilities' => 'Utilidades Icy Phoenix',
	'Upgrade_Options' => 'Opciones de actualizaci&oacute;n:',
	'Upgrade_From' => 'Actualizar al &uacute;ltimo Icy Phoenix',
	'Upgrade_From_Version' => 'desde la versi&oacute;n',
	'Upgrade_From_phpBB' => 'desde phpBB o phpBB XS',
	'Upgrade_Higher' => 'o mayor',

	'IcyPhoenix' => 'Icy Phoenix',
	'phpBB' => 'phpBB',
	'Information' => 'Informaci&oacute;n',
	'VersionInformation' => 'Informaci&oacute;n del servidor y la versi&oacute;n',
	'NotInstalled' => 'No instalado',
	'Current_IP_Version' => 'Versi&oacute;n de Icy Phoenix instalada',
	'Current_phpBB_Version' => 'Versi&oacute;n phpBB instalada',
	'Latest_Release' => 'Ultima "release"',
	'Version_UpToDate' => 'Versi&oacute;n actualizada',
	'Version_NotUpdated' => 'Versi&oacute;n no actualizada',
	'UpdateInProgress' => 'Actualizando...',
	'CleaningInProgress' => 'Limpieza de archivos en progreso',
	'UpdateCompleted' => 'Actualizaci&oacute;n completa!',
	'UpdateCompleted_phpBB' => 'Actualizaci&oacute;n de phpBB completada, ahora puede actualizar a Icy Phoenix!',
	'UpdateInProgress_Schema' => 'Actualizando el esquema de la Base de Datos',
	'UpdateInProgress_Data' => 'Actualizando datos',
	'Optimizing_Tables' => 'Optimizando tablas',
	'Progress' => 'Progreso',
	'Done' => 'Hecho',
	'NotDone' => 'No hecho',
	'Result' => 'Resultado',
	'Error' => 'Error',
	'Successful' => '&Eacute;xito',
	'NoErrors' => 'No Errores',
	'NoUpdate' => 'No requiere actualizaciones',
	'phpBB_NotDetected' => 'phpBB no ha detectado el script y no puede continuar. Por favor, verifique que realmente tiene phpBB.',
	'Update_Errors' => 'Algunas consultas fallaron, las declaraciones y los errores se listan a continuaci&oacute;n',

	'DBUpdate_Success' => 'Las siguientes consultas SQL se han ejecutado con &eacute;xito',
	'DBUpdate_Errors' => 'Las siguientes consultas SQL no se han podido ejecutar',

	'FileWriting' => 'Escribiendo archivos',
	'FileCreation_OK' => 'Su servidor parece soportar la creaci&oacute;n y edici&oacute;n de archivos',
	'FileCreation_OK_Explain' => 'El script intentar&aacute; autom&aacute;ticamente crear / editar todos los ficheros necesarios.',
	'FileCreation_ERROR' => 'Su servidor no soporta la creaci&oacute;n y edici&oacute;n de archivos.',
	'FileCreation_ERROR_Explain' => 'El script no puede crear / editar archivos de forma autom&aacute;tica. Lamentablemente tendr&aacute; que hacerlo manualmente.',

	'IcyPhoenix_Version_UpToDate' => 'Su versi&oacute;n de Icy Phoenix est&aacute; actualizada',
	'IcyPhoenix_Version_NotUpToDate' => 'Su versi&oacute;n de Icy Phoenix no est&aacute; actualizada',
	'IcyPhoenix_Version_NotInstalled' => 'Icy Phoenix no est&aacute; instalado',
	'phpBB_Version_UpToDate' => 'Su versi&oacute;n de phpBB est&aacute; actualizada',
	'phpBB_Version_NotUpToDate' => 'Su versi&oacute;n de phpBB no est&aacute; actualizada',
	'ClickUpdate' => 'Haga clic en %saqu&iacute;%s para actualizar',
	'ClickReturn' => 'Haga clic en %saqu&iacute;%s para volver al men&uacute;',

	'Clean_OldFiles_Explain' => 'Eliminar todos los archivos de Icy Phoenix no utilizados (todav&iacute;a en su servidor de versiones anteriores)',
	'ActionUndone' => 'Tenga en cuenta que esta acci&oacute;n no se puede deshacer. &iexcl;&iexcl;&iexcl;Aseg&uacute;rese de que tiene una copia de seguridad!!!',
	'ClickToClean' => 'Por favor, haga clic en el enlace de abajo para continuar',
	'FileDeletion_OK' => 'Archivo eliminado con &eacute;xito',
	'FileDeletion_ERROR' => 'El archivo no se pueden eliminar',
	'FileDeletion_NF' => 'Los archivos no pueden ser encontrados',
	'FilesDeletion_OK' => 'Archivos borrados con &eacute;xito',
	'FilesDeletion_NO' => 'Archivos no borrados',
	'FilesDeletion_ERROR' => 'Los archivos no pueden ser autom&aacute;ticamente eliminados',
	'FilesDeletion_NF' => 'Los archivos no pueden ser encontrados',
	'FilesDeletion_None' => 'Ninguno',
	'FileDeletion_Complete' => 'Limpieza de archivos completa!',

	'Spoiler' => 'Spoiler',
	'Show' => 'Mostrar',
	'Hide' => 'Esconder',
	'None' => 'Nada',
	'Start' => 'Comenzar',

	'Upgrade_Steps' => 'Pasos de la actualizaci&oacute;n',
	'MakeFullBackup' => 'Haga una copia de seguridad completa (archivos y Base de Datos) y gu&aacute;rdelo en un lugar seguro!',
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
	'ColorsLegendRed' => 'Rojo: esta acci&oacute;n es necesaria y ha de llevarse a cabo manualmente',
	'ColorsLegendOrange' => 'Naranja: esta acci&oacute;n es necesaria y se podr&aacute; realizar de manera autom&aacute;tica (si se cumplen los requisitos)',
	'ColorsLegendGray' => 'Gris: esta acci&oacute;n puede no ser necesaria y se puede realizar autom&aacute;ticamente',
	'ColorsLegendBlue' => 'Azul: esta acci&oacute;n es opcional y se puede realizar autom&aacute;ticamente (aunque puede requerir algunas modificaciones manualmente en algunos archivos)',
	'ColorsLegendGreen' => 'Verde: esta acci&oacute;n es una sugerencia y se puede realizar autom&aacute;ticamente (si se cumplen los requisitos)',

	'FixBirthdays' => 'Convertir cumplea&ntilde;os',
	'FixBirthdaysExplain' => 'Esta funci&oacute;n le permite ajustar todos los cumplea&ntilde;os para la compatibilidad con las nuevas caracter&iacute;sticas.',
	'FixingBirthdaysInProgress' => 'Conversi&oacute;n de cumplea&ntilde;os en curso',
	'FixingBirthdaysInProgressRedirect' => 'Usted ser&aacute; redirigido autom&aacute;ticamente al siguiente paso en tres segundos',
	'FixingBirthdaysInProgressRedirectClick' => 'Si usted no es redirigido autom&aacute;ticamente haga clic %saqu&iacute;%s',
	'FixingBirthdaysFrom' => 'Cumplea&ntilde;os modificados de %s a %s',
	'FixingBirthdaysTotal' => '%s cumplea&ntilde;os de %s modificados',
	'FixingBirthdaysModified' => ' cumplea&ntilde;os convertidos',
	'FixingBirthdaysComplete' => 'Conversi&oacute;n de complea&ntilde;os completa',
	'BirthdaysPerStep' => 'N&uacute;mero de cumplea&ntilde;os por paso',

	'FixConstantsInFiles' => 'Actualizar constantes',
	'FixConstantsInFilesExplain' => 'Actualiza todos los ficheros con las nuevas constantes de Icy Phoenix',
	'FixingInProgress' => 'Actualizaci&oacute;n de ficheros en curso',
	'FixingComplete' => 'Actualizaci&oacute;n de ficheros completa',
	'ClickToFix' => 'Por favor, haga clic en uno de los link abajo para comenzar',
	'FixAllFiles' => 'Actualizar todos los archivos (paginas del CMS y config.php)',
	'FixCMSPages' => 'Actualizar solo las paginas CMS',
	'Fixed' => 'Actualizado',
	'NotFixed' => 'No actualizado',
	'FilesProcessed' => 'Archivos procesados',

	'FixForums' => 'Convertir Foros',
	'FixForumsExplain' => 'Esta funci&oacute;n convertir&aacute; foros y categor&iacute;as al nuevo formato.',
	'FixingForumsInProgress' => 'Conversi&oacute;n en progreso...',
	'FixingForumsComplete' => 'Foros convertidos correctamente',

	'FixPosts' => 'Actualizar posts',
	'FixPostsExplain' => 'Esta caracter&iacute;stica le permitir&aacute; actualizar todos los posts de sus foros. Puede utilizar esta funci&oacute;n para: buscar y reemplazar cualquier texto en los posts, eliminar todos los BBCode UID, ajustar autom&aacute;ticamente la direcci&oacute;n de im&aacute;genes posteadas.',
	'FixingPostsInProgress' => 'Actualizando posts...',
	'FixingPostsInProgressRedirect' => 'Usted ser&aacute; redirigido autom&aacute;ticamente al siguiente paso en tres segundos',
	'FixingPostsInProgressRedirectClick' => 'Si usted no es autom&aacute;ticamente redirigido haga clic %saqu&iacute;%s',
	'FixingPostsFrom' => 'Posts actualizados de %s a %s',
	'FixingPostsTotal' => '%s posts de %s actualizados',
	'FixingPostsModified' => ' posts actualizados',
	'FixingPostsComplete' => 'Actualizaci&oacute;n de posts completada',
	'SearchWhat' => 'Buscar que',
	'ReplaceWith' => 'Reemplazar con',
	'PostsPerStep' => 'N&uacute;mero de posts por paso',
	'StartFrom' => 'Comenzar desde el post',
	'RemoveBBCodeUID' => 'Eliminar BBCode UID (desde la table de posts)',
	'RemoveBBCodeUID_Guess' => 'Intentar descubrir y eliminar BBCode UID',
	'FixPostedImagesPaths' => 'Actualizar todas las rutas de imagenes posteadas (ajustar las rutas a fin de reflejar las subcarpetas de los usuarios)',

	'FixSignatures' => 'Modificar Firmas',
	'FixSignaturesExplain' => 'Esta funci&oacute;n le permitir&aacute; modificar todas las firmas de los usuarios. Puede usar esta funci&oacute;n para: encontrar y reemplazar cualquier texto en firmas, eliminar todos los BBCoude UID, ajustar autom&aacute;ticamente la direcci&oacute;n de las im&aacute;genes publicadas...',
	'FixingSignaturesInProgress' => 'Modificaci&oacute;n de firmas en progreso',
	'FixingSignaturesFrom' => 'Firmas modificadas de %s a %s en este paso',
	'FixingSignaturesTotal' => '%s firmas de %s modificadas hasta el momento',
	'FixingSignaturesModified' => ' firmas modificadas',
	'FixingSignaturesComplete' => 'Modificaci&oacute;n de firmas completada',
	'SignaturesPerStep' => 'N&uacute;mero de firmas por fase',
	'StartFromSignature' => 'Comenzar desde la firma',

	'FixSignatures' => 'Actualizar firmas',
	'FixSignaturesExplain' => 'Esta caracter&iacute;stica le permite actualizar las firmas de todos los usuarios. Puede utilizar esta funci&oacute;n para: buscar y reemplazar texto en las firmas, eliminar todos los BBCode UID, ajustar autom&aacute;ticamente la direcci&oacute;n de im&aacute;genes posteadas.',
	'FixingSignaturesInProgress' => 'Actualizando firmas...',
	'FixingSignaturesFrom' => 'Firmas actualizadas en este paso de %s a %s',
	'FixingSignaturesTotal' => '%s firmas de %s actualizadas',
	'FixingSignaturesModified' => ' firmas actualizadas',
	'FixingSignaturesComplete' => 'Actualizaci&oacute;n de firmas completada',
	'SignaturesPerStep' => 'N&uacute;mero de firmas por paso',
	'StartFromSignature' => 'Comenzar desde la firma',

	'FixPics' => 'Actualizar rutas de las fotos del &aacute;lbum',
	'FixPicsExplain' => 'Esta caracter&iacute;stica mover&aacute; todas la fotos del &aacute;lbum de los usuarios de la carpeta a las subcarpetas y tambi&eacute;n actualiza la base de datos con las nuevas rutas',
	'FixingPicsInProgress' => 'Actualizando fotos...',
	'FixingPicsInProgressRedirect' => 'Usted ser&aacute; redirigido autom&aacute;ticamente al siguiente paso en tres segundos',
	'FixingPicsInProgressRedirectClick' => 'Si usted no es autom&aacute;ticamente redirigido haga clic %saqu&iacute;%s',
	'FixingPicsFrom' => 'Fotos actualizadas en este paso de %s a %s',
	'FixingPicsTotal' => '%s fotos de %s actualizadas',
	'FixingPicsModified' => ' fotos actualizadas',
	'FixingPicsComplete' => 'Actualizaci&oacute;n de fotos completada',
	'PicStartFrom' => 'Comenzar desde la foto',
	'PicsPerStep' => 'N&uacute;mero de fotos por paso',

	'RenMovePics' => 'Renombrar y mover las fotos posteadas',
	'RenMovePicsExplain' => 'Esta caracter&iacute;stica renombra y mueve todas las fotos posteadas por los usuarios de la carpeta principal a las subcarpetas: usted tendr&aacute; que actualizar la tabla de posts usando <i>Actualizar posts</i> para ajustar todas las rutas de los posts',
	)
);

$lang['BBC_IP_CREDITS_STATIC'] = '
<a href="http://www.icyphoenix.com" title="Icy Phoenix"><img src="./style/icy_phoenix_small.png" alt="Icy Phoenix" title="Icy Phoenix" /></a><br />
<span style="color: #ff5500;"><b>Mighty Gorgon</b></span><br />
<i>(Luca Libralato)</i><br />
<b><i>Desarrollador</i></b><br />
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
<br />
Interests: Icy Phoenix<br />
Location: <a href="http://www.icyphoenix.com/">http://www.icyphoenix.com</a>
';

$lang['BBC_IP_CREDITS'] = '<div class="center-block"><marquee behavior="scroll" direction="up" scrolldelay="120">' . $lang['BBC_IP_CREDITS_STATIC'] . '</marquee></div>';

?>