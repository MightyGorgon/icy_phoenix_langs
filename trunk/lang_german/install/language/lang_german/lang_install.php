<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Additional Translation for Icy Phoenix:
*	KugeLSichA, Tom, TheSteffen, Carsten
*/

$lang = array_merge($lang, array(
	'ENCODING' => 'iso-8859-1',
	'ENCODING_ALT' => 'utf8',
	'DIRECTION' => 'ltr',
	'HEADER_LANG' => 'de-de',
	'HEADER_XML_LANG' => 'de-de',
	'LEFT' => 'links',
	'RIGHT' => 'rechts',

	'Welcome_install' => 'Icy Phoenix Installation',
	'Initial_config' => 'Konfiguration',
	'DB_config' => 'Datenbank Konfiguration',
	'Admin_config' => 'Admin Konfiguration',
	'continue_upgrade' => 'Sobald du deine Config Datei auf dein lokales System runtergeladen hast, kannst du \'Upgrade fortsetzen\' anklicken um mit dem Upgrade weiterzumachen. Bitte warte einen Moment wenn das Upgrade abgeschlossen ist, damit die Config Datei hochgeladen werden kann.',
	'upgrade_submit' => 'Upgrade fortsetzen',

	'Installer_Error' => 'Es ist ein Fehler während der Installation aufgetreten',
	'Previous_Install' => 'Eine vorherige Installation wurde erkannt',
	'Install_db_error' => 'Es ist beim Versuch die Datenbank zu aktualisieren, ein Fehler aufgetreten',

	'Re_install' => 'Deine vorherige Installation ist immer noch aktiv.<br /><br />Wenn du Icy Phoenix erneut installieren willst dann wähle unten Ja. Bitte beachte, wenn du fortfährst, gehen alle Daten verloren und es werden keine Backups gemacht! Der Administrator Benutzername und das Password das Du zum Einloggen ins Forum benutzt hast wird nach der Re-Installation erneut erstellt und keine anderen Einstellungen beibehalten.<br /><br />Überlege genau bevor du mit Ja bestätigst!',

	'Inst_Step_0' => 'Danke für deine Entscheidung zu Icy Phoenix. Dieser Wizard wird dich durch den Installations-Prozess begleiten.<br /><span class="text_red">Bitte beachte das Du alle Icy Phoenix Dateien auf deinen Server geladen haben solltest und das die Datenbank in die du installieren willst, bereits erstellt sein sollte.</span>',

	'Inst_Step_1' => 'Um die Installation abzuschließen solltest du die erforderlichen Details unten ausfüllen.<br /><span class="text_red">Bitte beachte das die Datenbank in die du installieren möchtest, bereits bestehen sollte.</span>',

	'Start_Install' => 'Starte Installation',
	'Start_Install_Anyway' => 'Starte Installation trotzdem',
	'Finish_Install' => 'Beende Installation',
	'Continue_Install' => 'Installation fortfahren',

	'CHMOD_Files' => 'Datei &amp; Ordner Befugnisse',
	'CHMOD_OK' => 'Ok',
	'CHMOD_Error' => 'Fehler',
	'CHMOD_777' => 'CHMOD 777',
	'CHMOD_666' => 'CHMOD 666',
	'CHMOD_Files_Explain_Error' => 'Bitte füge die rechten CHMOD Befugnisse den Dateien und Ordnern hinzu bevor du zum nächsten Schritt übergehst.',
	'Confirm_Install_anyway' => 'Wenn du alles noch einmal überprüft hast, dann klicke auf  "<i>Starte Installation trotzdem</i>".',
	'CHMOD_Files_Explain_Ok' => 'Alle CHMOD Befugnisse scheinen Ok zu sein, du kannst mit dem nächsten Schritt fortfahren.',
	'Can_Install' => 'Du kannst mit dem nächsten Schritt fortfahren.',
	'CHMOD_File_Exists' => 'Diese Datei/Ordner existiert und seine Berechtigungen wurden richtig gesetzt.',
	'CHMOD_File_NotExists' => 'Diese Datei/Ordner existiert nicht, bitte hochladen und die richtigen CHMOD Berechtigungen setzen.',
	'CHMOD_File_Exists_Read_Only' => 'Diese Datei/Ordner existiert aber die CHMOD Berechtigungen konnten nicht automatisch geändert werden. Bitte setze die CHMOD Berechtigungen manuell und dann klicke auf "<i>Starte Installation trotzdem</i>".',
	'CHMOD_File_UnknownError' => 'Beim Überprüfen dieser Datei/Ordner trat ein unbekannter Fehler auf. Bitte überprüfe, ob diese Datei/Ordner existiert und ob die richtigen CHMOD Berechtigungen gesetzt sind und dann klicke auf "<i>Starte Installation trotzdem</i>".',
	'CHMOD_Apply' => 'Passe die CHMOD Berechtigungen für Icy Phoenix Dateien und Ordner über PHP an.',
	'CHMOD_Apply_Warn' => 'Bitte beachte das nicht alle Server eine CHMOD Anpassung über PHP unterstützen. Es kann manuelles setzen der Berechtigungen erforderlich sein!!!',

	'Default_lang' => 'Standard Seiten Sprache',
	'Select_lang' => 'Sprache',
	'DB_Host' => 'Datenbank Server Hostname / DSN',
	'DB_Name' => 'Dein Datenbank Name',
	'DB_Username' => 'Datenbank Benutzername',
	'DB_Password' => 'Datenbank Passwort',
	'Database' => 'Deine Datenbank',
	'Install_lang' => 'Wähle eine Sprache für die Installation',
	'dbms' => 'Datenbank Typ',
	'Table_Prefix' => 'Präfix für Tabellen in der Datenbank',
	'Admin_Username' => 'Administrator Benutzername',
	'Admin_Password' => 'Administrator Passwort',
	'Admin_Password_confirm' => 'Administrator Passwort [ Bestätigung ]',

	'Inst_Step_2' => 'Dein Admin Benutzername und Passwort wurde erstellt.<br />Um deine Installation abzuschließen musst du die <span class="text_red"> <u>install</u> und <u>contrib</u> Ordner löschen (wenn sie existieren)</span>. Zum Schluss solltest du auf <b>Beende Installation</b> klicken und du wirst ins Admin Control Panel (ACP) und CMS (Content Management System) weitergeleitet, wo du alle Icy Phoenix Einstellungen managen kannst.<br />In ACP you can adjust the main settings and preferences for the whole site, (styles, languages, time, forums, download, users, album, etc.) and while in CMS section you can configure options regarding the site pages (define permissions, add blocks, create new pages, create new menu, etc.). You may also want to configure <b>.htaccess</b> and <b>lang_main_settings.php</b> (for each installed lang) to fine tune some other preferences, like error reporting, url rewrite, keywords, welcome message, charset and so on.<br /><br />Danke das du dich für IcyPhoenix entschieden hast, aber bitte denke dran deine Datenbank von Zeit zu Zeit zu sichern.<br /><br />',

	'Unwriteable_config' => 'Momentan ist deine Konfigurationsdatei nicht beschreibbar. Du kannst dir eine Kopie der Datei runterladen, wenn du auf den entsprechenden Link unten klickst. Du solltest diese Datei ins selbe Verzeichnis wie Icy Phoenix hochladen. Wenn dies getan ist, solltest du den install Ordner löschen und dich mit deinem Administrator-Benutzernamen und Passwort, die du auf der letzten Seite angegeben hast, einloggen und den Administrationsbereich betreten, um die allgemeinen Einstellungen zu prüfen. Einen entsprechenden Link findest du am Ende jeder Seite deines Forums. Danke, dass du dich für Icy Phoenix entschieden hast.',
	'Download_config' => 'Konfigurationsdatei herunterladen',

	'ftp_choose' => 'Wähle Downloadmethode',
	'ftp_option' => '<br />Da FTP Erweiterungen in dieser Version von PHP aktiviert sind, könntest du die Möglichkeit haben, die Konfigurationsdatei automatisch per FTP vor Ort zu ändern.',
	'ftp_instructs' => 'Du hast dich dazu entschieden, die Datei automatisch und vor Ort zu ändern. Bitte gib die unten geforderten Informationen an, um den Prozess zu starten. Beachte, dass der FTP-Pfad der exakte Pfad zu deinem IcyPhoenix-Ordner sein muss.',
	'ftp_info' => 'Eingabe der FTP Informationen',
	'Attempt_ftp' => 'Die Konfigurationsdatei vor Ort umschreiben',
	'Send_file' => 'Ich möchte, dass mir die Datei geschickt wird. Ich werde sie manuell hochladen.',
	'ftp_path' => 'FTP-Pfad zum Icy Phoenix',
	'ftp_username' => 'Dein FTP Benutzername',
	'ftp_password' => 'Dein FTP Passwort',
	'Transfer_config' => 'Transfer beginnen',
	'NoFTP_config' => 'Der Versuch, die Konfigurationsdatei vor Ort umzuschreiben, scheiterte. Bitte lade die Datei runter und lade sie manuell hoch.',

	'Install' => 'Installation',
	'Upgrade' => 'Upgrade',

	'Install_Method' => 'Wähle eine Installations-Methode aus',
	'Install_No_Ext' => 'Die PHP-Konfiguration auf deinem Server unterstützt nicht den gewählten Datenbank-Typ',
	'Install_No_PCRE' => 'Icy Phoenix benötigt das Perl-Compatible Regular Expressions Module für PHP, was von deiner PHP-Konfiguration anscheinend nicht unterstützt wird.',

	'Server_name' => 'Domainname',
	'Script_path' => 'Scriptpfad',
	'Server_port' => 'Server Port',
	'Admin_email' => 'E-Mail Adresse des Administrators',

	'IP_Utilities' => 'Icy Phoenix Hilfsmittel',
	'Upgrade_Options' => 'Upgrade Optionen:',
	'Upgrade_From' => 'Upgrade zur aktuellen Icy Phoenix Version',
	'Upgrade_From_Version' => 'von Version',
	'Upgrade_From_phpBB' => 'von phpBB oder einer anderen älteren phpBB XS Version',
	'Upgrade_Higher' => 'oder höher',

	'IcyPhoenix' => 'Icy Phoenix',
	'phpBB' => 'phpBB',
	'Information' => 'Information',
	'VersionInformation' => 'Server und Versions Information',
	'NotInstalled' => 'nicht installiert',
	'Current_IP_Version' => 'installierte Icy Phoenix Version',
	'Current_phpBB_Version' => 'installierte phpBB Version',
	'Latest_Release' => 'letzte Veröffentlichung',
	'Version_UpToDate' => 'Version up-to-date',
	'Version_NotUpdated' => 'Version nicht aktualisiert',
	'UpdateInProgress' => 'Update in Arbeit',
	'CleaningInProgress' => 'Dateien löschen in Arbeit',
	'UpdateCompleted' => 'Update komplett!',
	'UpdateCompleted_phpBB' => 'phpBB update vollständig, nun kannst du das Upgrade zu Icy Phoenix machen!',
	'UpdateInProgress_Schema' => 'Updating Datenbankschema',
	'UpdateInProgress_Data' => 'Updating Daten',
	'Optimizing_Tables' => 'optimiere Tabellen',
	'Progress' => 'Fortschritt',
	'Done' => 'Fertig',
	'NotDone' => 'nicht Fertig',
	'Result' => 'Ergebnis',
	'Error' => 'Fehler',
	'Successful' => 'Erfolgreich',
	'NoErrors' => 'keine Fehler',
	'NoUpdate' => 'keine Updates benötigt',
	'phpBB_NotDetected' => 'phpBB wurde nicht gefunden, das Skript kann nicht fortfahren. Bitte überprüfe ob du auch wirklich phpBB nutzt.',
	'Update_Errors' => 'Einige Abfrage schlugen fehl, die Angaben und Fehler sind unten aufgeführt.',

    'DBUpdate_Success' => 'Die folgende SQL wurde erfolgreich ausgeführt',
    'DBUpdate_Errors' => 'Die folgende SQL konnte nicht ausgeführt werden',

    'FileWriting' => 'File Writing',
    'FileCreation_OK' => 'Your server seems to support files creation and editing.',
    'FileCreation_OK_Explain' => 'The script will attempt to automatically create / edit all needed files.',
    'FileCreation_ERROR' => 'Your server doesn\'t support file creation and editing.',
    'FileCreation_ERROR_Explain' => 'The script cannot create / edit files for you automatically. Unfortunately you will need to do it on your own.',

    'IcyPhoenix_Version_UpToDate' => 'Deine Icy Phoenix Version ist aktuell',
    'IcyPhoenix_Version_NotUpToDate' => 'Deine Icy Phoenix Version ist nicht aktuell',
    'IcyPhoenix_Version_NotInstalled' => 'Icy Phoenix ist nicht installiert',
    'phpBB_Version_UpToDate' => 'Deine phpBB Version ist aktuell',
    'phpBB_Version_NotUpToDate' => 'Deine phpBB Version ist nicht aktuell',
    'ClickUpdate' => 'Bitte klicke %shier%s um ein Update zu machen!',
    'ClickReturn' => 'Bitte klicke %shier%s um zum Menü zurückzukehren!',

    'Clean_OldFiles_Explain' => 'Remove all unused Icy Phoenix (files still on your server from older versions)',
    'ActionUndone' => 'Please note that this action cannot be undone. Make sure you have a backup!!!',
    'ClickToClean' => 'Please click on the link below to proceed',
    'FileDeletion_OK' => 'File deleted successfully',
    'FileDeletion_ERROR' => 'File cannot be deleted',
    'FileDeletion_NF' => 'Files cannot be found',
    'FilesDeletion_OK' => 'Files deleted successfully',
    'FilesDeletion_NO' => 'Files not deleted',
    'FilesDeletion_ERROR' => 'Files cannot be automatically deleted',
    'FilesDeletion_NF' => 'Files cannot be found',
    'FilesDeletion_None' => 'None',
    'FileDeletion_Complete' => 'Files cleaning complete!',

    'Spoiler' => 'Spoiler',
    'Show' => 'Zeige',
    'Hide' => 'Verstecke',
    'None' => 'Keine',
    'Start' => 'Start',

    'Upgrade_Steps' => 'Upgrade Steps',
    'MakeFullBackup' => 'Make a full backup (both files and DB) and keep it in a safe place!',
    'Update_phpBB' => 'Update phpBB DB (if needed)',
    'Remove_BBCodeUID' => 'Process all posts: remove BBCode UID, replace text, remove old BBCodes',
    'Merge_PostsTables' => 'Merge posts tables',
    'Update_IcyPhoenix' => 'Update Icy Phoenix DB',
    'Upload_NewFiles' => 'Upload all new files',
    'Adjust_Config' => 'Update constants in config.php (only works if files are writeable)',
    'Adjust_CMSPages' => 'Update constants in CMS pages (only works if files are writeable)',
    'MoveImagesAlbum' => 'Move album images (optional: only if you want to use posted images into subfolders)',
    'MoveImages' => 'Move posted images (optional: only if you want to use posted images into subfolders)',
    'Clean_OldFiles' => 'Clean Old Files',

    'ColorsLegend' => 'Colors Legend',
    'ColorsLegendRed' => 'Red: this action is required and have to be performed manually',
    'ColorsLegendOrange' => 'Orange: this action is required and the script could perform it automatically (if requirements are met)',
    'ColorsLegendGray' => 'Gray: this action may not be needed and can be performed automatically',
    'ColorsLegendBlue' => 'Blue: this action is optional and can be performed automatically (may require manual edits on some files though)',
    'ColorsLegendGreen' => 'Green: this action is suggested and can be performed automatically (if requirements are met)',

	'FixBirthdays' => 'Fix Birthdays',
	'FixBirthdaysExplain' => 'This feature will allow you to adjust all birthdays for compatibility with new features.',
	'FixingBirthdaysInProgress' => 'Fixing birthdays in progress',
	'FixingBirthdaysInProgressRedirect' => 'You will be automatically redirected to next step in three seconds',
	'FixingBirthdaysInProgressRedirectClick' => 'If you are not automatically redirected within three seconds you may click %sHERE%s',
	'FixingBirthdaysFrom' => 'Birthdays modified this step from %s to %s',
	'FixingBirthdaysTotal' => '%s birthdays of %s modified so far',
	'FixingBirthdaysModified' => ' birthdays fixed',
	'FixingBirthdaysComplete' => 'Fixing birthdays complete',
	'BirthdaysPerStep' => 'Number of birthdays per step',

	'FixConstantsInFiles' => 'Fix Constants',
	'FixConstantsInFilesExplain' => 'Fix all files with new Icy Phoenix constants',
	'FixingInProgress' => 'Fixing files in progress',
	'FixingComplete' => 'Fixing files complete',
	'ClickToFix' => 'Please click on one of the link below to proceed',
	'FixAllFiles' => 'Fix all files (both CMS pages and config.php)',
	'FixCMSPages' => 'Fix only CMS pages',
	'Fixed' => 'Fixed',
	'NotFixed' => 'Not Fixed',
	'FilesProcessed' => 'Files processed',

	'FixPosts' => 'Fix Posts',
	'FixPostsExplain' => 'This feature will allow you to fix all posts in your forums. You can use this feature to: find and replace any text in your posts, remove all BBCode UID, automatically adjust the address of posted images.',
	'FixingPostsInProgress' => 'Fixing posts in progress',
	'FixingPostsInProgressRedirect' => 'You will be automatically redirected to next step in three seconds',
	'FixingPostsInProgressRedirectClick' => 'If you are not automatically redirected within three seconds you may click %sHERE%s',
	'FixingPostsFrom' => 'Posts modified this step from %s to %s',
	'FixingPostsTotal' => '%s posts of %s modified so far',
	'FixingPostsModified' => ' posts fixed',
	'FixingPostsComplete' => 'Fixing posts complete',
	'SearchWhat' => 'Search what',
	'ReplaceWith' => 'Replace with',
	'PostsPerStep' => 'Number of posts per step',
	'StartFrom' => 'Start from post',
	'RemoveBBCodeUID' => 'Remove BBCode UID (get it from posts table)',
	'RemoveBBCodeUID_Guess' => 'Try to guess and remove BBCode UID',
	'FixPostedImagesPaths' => 'Fix all posted images paths (adjust paths to reflect users subfolders)',

	'FixPics' => 'Fix Album Pics Paths',
	'FixPicsExplain' => 'This feature will move all album pics from the main folder into users subfolders and will also update the database with the new paths',
	'FixingPicsInProgress' => 'Fixing pics in progress',
	'FixingPicsInProgressRedirect' => 'You will be automatically redirected to next step in three seconds',
	'FixingPicsInProgressRedirectClick' => 'If you are not automatically redirected within three seconds you may click %sHERE%s',
	'FixingPicsFrom' => 'Pics modified this step from %s to %s',
	'FixingPicsTotal' => '%s pics of %s modified so far',
	'FixingPicsModified' => ' pics fixed',
	'FixingPicsComplete' => 'Fixing pics complete',
	'PicStartFrom' => 'Start from pic',
	'PicsPerStep' => 'Number of pics per step',

	'RenMovePics' => 'Rename And Move Posted Pics',
	'RenMovePicsExplain' => 'This feature will rename and move all posted pics from the main folder into users subfolders: you will then need to update posts table using the <i>Fix Posts</i> function to adjust all paths in posts',
	)
);

$lang['BBC_IP_CREDITS_STATIC'] = '
<a href="http://www.icyphoenix.com" title="Icy Phoenix"><img src="./style/icy_phoenix_small.png" alt="Icy Phoenix" title="Icy Phoenix" /></a><br />
<span style="color: #FF5500;"><b>Mighty Gorgon</b></span><br />
<i>(Luca Libralato)</i><br />
<b><i>Developer</i></b><br />
Interests: Heroes Of Might And Magic III, 69, #FF5522<br />
Location: Homer\'s Head<br />
<br />
<br />
<span style="color: #DD2222;"><b>hpl</b></span><br />
<i>(Alessandro Drago)</i><br />
<b><i>Developer</i></b><br />
Interests: CMS, little animals<br />
Location: Global Header<br />
<br />
<br />
<span style="color: #DD2222;"><b>Bicet</b></span><br />
<b><i>phpBB XS Developer</i></b><br />
<br />
<br />
<b><i>Valued Contributors</i></b><br />
<span style="color: #228844;"><b>Andrea75</b></span><br />
<span style="color: #DD2222;"><b>Artie</b></span><br />
<span style="color: #228844;"><b>buldo</b></span><br />
<span style="color: #228844;"><b>casimedicos</b></span><br />
<span style="color: #DD2222;"><b>CyberAlien</b></span><br />
<span style="color: #800080;"><b>darkone</b></span><br />
<span style="color: #228844;"><b>difus</b></span><br />
<span style="color: #800080;"><b>fare85</b></span><br />
<span style="color: #228844;"><b>fracs</b></span><br />
<span style="color: #800080;"><b>ganesh</b></span><br />
<span style="color: #228844;"><b>JANU1535</b></span><br />
<span style="color: #800080;"><b>jz</b></span><br />
<span style="color: #228844;"><b>KasLimon</b></span><br />
<span style="color: #AAFF00;"><b>KugeLSichA</b></span><br />
<span style="color: #228844;"><b>Lopalong</b></span><br />
<span style="color: #228844;"><b>moreteavicar</b></span><br />
<span style="color: #228844;"><b>Nikola</b></span><br />
<span style="color: #228844;"><b>novice programmer</b></span><br />
<span style="color: #228844;"><b>ThE KuKa</b></span><br />
<span style="color: #FF7700;"><b>TheSteffen</b></span><br />
<span style="color: #0000BB;"><b>Tom</b></span><br />
<span style="color: #228844;"><b>z3d0</b></span><br />
<span style="color: #228844;"><b>Zuker</b></span><br />
<br />
Interests: Icy Phoenix<br />
Location: <a href="http://www.icyphoenix.com/">http://www.icyphoenix.com</a>
';

$lang['BBC_IP_CREDITS'] = '<div class="center-block"><marquee behavior="scroll" direction="up" scrolldelay="120">' . $lang['BBC_IP_CREDITS_STATIC'] . '</marquee></div>';

?>