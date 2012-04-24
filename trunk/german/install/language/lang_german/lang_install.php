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

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ENCODING' => 'UTF-8',
	'DIRECTION' => 'ltr',
	'HEADER_LANG' => 'de-de',
	'HEADER_LANG_XML' => 'de-de',
	'LEFT' => 'links',
	'RIGHT' => 'rechts',

	'Welcome_install' => 'Icy Phoenix Installation',
	'Initial_config' => 'Konfiguration',
	'DB_config' => 'Datenbank Konfiguration',
	'Admin_config' => 'Admin Konfiguration',
	'continue_upgrade' => 'Sobald du deine config.php Datei auf dein lokales System runtergeladen hast, kannst du \'Upgrade fortsetzen\' anklicken um mit dem Upgrade weiterzumachen. Bitte warte einen Moment wenn das Upgrade abgeschlossen ist, damit die config.php Datei hochgeladen werden kann.',
	'upgrade_submit' => 'Upgrade fortsetzen',

	'Installer_Error' => 'Es ist ein Fehler während der Installation aufgetreten',
	'Previous_Install' => 'Eine vorherige Installation wurde erkannt',
	'Install_db_error' => 'Es ist beim Versuch die Datenbank zu aktualisieren, ein Fehler aufgetreten',

	'Re_install' => 'Deine vorherige Installation ist immer noch aktiv.<br /><br />Wenn du Icy Phoenix erneut installieren willst dann wähle unten Ja. Bitte beachte, wenn du fortfährst, gehen alle Daten verloren und es werden keine Backups gemacht! Der Administrator Benutzername und das Password das du zum Einloggen ins Forum benutzt hast wird nach der Re-Installation erneut erstellt und keine anderen Einstellungen beibehalten.<br /><br />Überlege genau bevor du mit Ja bestätigst!',

	'Inst_Step_0' => 'Danke für deine Entscheidung Icy Phoenix zu nutzen. Dieser Assistent wird dich durch den Installations-Prozess begleiten.<br /><span class="text_red">Bitte beachte das du alle Icy Phoenix Dateien auf deinen Server geladen haben solltest und das die Datenbank für die Installation bereits angelegt sein muss.</span>',

	'Inst_Step_1' => 'Um die Installation abzuschließen solltest du die erforderlichen Details unten ausfüllen.<br /><span class="text_red">Bitte beachte, dass die Datenbank für die Installation bereits angelegt sein muss.</span>',

	'Start_Install' => 'Starte Installation',
	'Start_Install_Anyway' => 'Starte Installation trotzdem',
	'Finish_Install' => 'Beende Installation',
	'Continue_Install' => 'Installation fortfahren',

	'CHMOD_Files' => 'Datei &amp; Ordner Befugnisse',
	'CHMOD_OK' => 'OK',
	'CHMOD_Error' => 'Fehler',
	'CHMOD_777' => 'CHMOD 777',
	'CHMOD_666' => 'CHMOD 666',
	'CHMOD_Files_Explain_Error' => 'Bitte füge die rechten CHMOD Befugnisse den Dateien und Ordnern hinzu bevor du zum nächsten Schritt übergehst.',
	'Confirm_Install_anyway' => 'Wenn du alles noch einmal überprüft hast, dann klicke auf  "<i>Starte Installation trotzdem</i>".',
	'CHMOD_Files_Explain_Ok' => 'Alle CHMOD Befugnisse scheinen in Ordnung zu sein.',
	'Can_Install' => 'Du kannst mit dem nächsten Schritt fortfahren.',
	'CHMOD_File_Exists' => 'Diese Datei/Ordner existiert und seine Berechtigungen wurden richtig gesetzt.',
	'CHMOD_File_NotExists' => 'Diese Datei/Ordner existiert nicht, bitte hochladen und die richtigen CHMOD Berechtigungen setzen.',
	'CHMOD_File_Exists_Read_Only' => 'Diese Datei/Ordner existiert aber die CHMOD Berechtigungen konnten nicht automatisch geändert werden. Bitte setze die CHMOD Berechtigungen manuell und dann klicke auf "<i>Starte Installation trotzdem</i>".',
	'CHMOD_File_UnknownError' => 'Beim Überprüfen dieser Datei/Ordner trat ein unbekannter Fehler auf. Bitte überprüfe, ob diese Datei/Ordner existiert und ob die richtigen CHMOD Berechtigungen gesetzt sind und dann klicke auf "<i>Starte Installation trotzdem</i>".',
	'CHMOD_Apply' => 'Passe die CHMOD Berechtigungen für Icy Phoenix Dateien und Ordner über PHP an.',
	'CHMOD_Apply_Warn' => 'Bitte beachte, dass nicht alle Server eine CHMOD Anpassung über PHP unterstützen. Es kann manuelles setzen der Berechtigungen erforderlich sein!!!',

	'Default_lang' => 'Standardseiten Sprache',
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

	'Inst_Step_2' => 'Dein Admin Benutzername und Passwort wurden erstellt.<br />Um deine Installation abzuschließen musst du den <span class="text_red"> <u>install</u> Ordner löschen</span>. Zum Schluss solltest du auf <b>Beende Installation</b> klicken und du wirst in den Admin-Bereich (ACP) und CMS (Content Management System) weitergeleitet, wo du alle Icy Phoenix Einstellungen verwalten kannst.<br />Im ACP kannst du alle Konfigurationen vornehmen z.B. Styles, Sprachen, Uhrzeit, Foren, Downloads, Benutzer, Album, etc. und im CMS Bereich kannst du neue Seiten erstellen und konfigurieren (Berechtigungen, Blöcke hinzufügen, neue Seiten erstellen, neue Menüs erstellen, etc.). Du solltest dir auch die <b>.htaccess</b> und <b>lang_main_settings.php</b> (für jede installierte Sprache extra vorhanden) ansehen um Feineinstellungen wie z.B. Fehlerreport, URL Rewrite, Schlüsselwörter, Begrüßungsnachricht, Charset usw. zu ändern.<br /><br />Danke das du dich für IcyPhoenix entschieden hast, aber bitte denke dran deine Datenbank von Zeit zu Zeit zu sichern.<br /><br />',

	'Unwriteable_config' => 'Momentan ist deine Konfigurationsdatei nicht beschreibbar. Du kannst dir eine Kopie der Datei herunterladen, wenn du auf den entsprechenden Link unten klickst. Du solltest diese Datei ins selbe Verzeichnis wie Icy Phoenix hochladen. Wenn dies getan ist, solltest du den install Ordner löschen und dich mit deinem Administrator-Benutzernamen und Passwort, die du auf der letzten Seite angegeben hast, einloggen und den Administrationsbereich betreten, um die allgemeinen Einstellungen zu prüfen. Einen entsprechenden Link findest du am Ende jeder Seite deines Forums. Danke, dass du dich für Icy Phoenix entschieden hast.',
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
	'Install_No_PCRE' => 'Icy Phoenix benötigt das Perl-kompatible Regular Expressions Module für PHP, was von deiner PHP-Konfiguration anscheinend nicht unterstützt wird.',

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
	'VersionInformation' => 'Server und Version Information',
	'NotInstalled' => 'nicht installiert',
	'Current_IP_Version' => 'installierte Icy Phoenix Version',
	'Current_phpBB_Version' => 'installierte phpBB Version',
	'Latest_Release' => 'letzte Veröffentlichung',
	'Version_UpToDate' => 'Version aktuell',
	'Version_NotUpdated' => 'Version nicht aktualisiert',
	'UpdateInProgress' => 'Update in Arbeit',
	'CleaningInProgress' => 'Dateien löschen in Arbeit',
	'UpdateCompleted' => 'Update komplett!',
	'UpdateCompleted_phpBB' => 'phpBB update vollständig, nun kannst du das Upgrade zu Icy Phoenix machen!',
	'UpdateInProgress_Schema' => 'Datenbankschema aktualisieren',
	'UpdateInProgress_Data' => 'Daten aktualisieren',
	'Optimizing_Tables' => 'Tabellen optimieren',
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

	'FileWriting' => 'Beschreibbare Dateien',
	'FileCreation_OK' => 'Es sieht so aus, als ob dein Server die Erstellung und Bearbeitung unterstützt.',
	'FileCreation_OK_Explain' => 'Das Script versucht automatisch alle benötigten Dateien zu erstellen oder zu bearbeiten.',
	'FileCreation_ERROR' => 'Dein Server unterstützt keine Dateierstellung / -bearbeitung.',
	'FileCreation_ERROR_Explain' => 'Das Script kann die Dateien nicht automatisch erstellen / bearbeiten. Leider musst du dies manuell tun.',

	'IcyPhoenix_Version_UpToDate' => 'Deine Icy Phoenix Version ist aktuell',
	'IcyPhoenix_Version_NotUpToDate' => 'Deine Icy Phoenix Version ist nicht aktuell',
	'IcyPhoenix_Version_NotInstalled' => 'Icy Phoenix ist nicht installiert',
	'phpBB_Version_UpToDate' => 'Deine phpBB Version ist aktuell',
	'phpBB_Version_NotUpToDate' => 'Deine phpBB Version ist nicht aktuell',
	'ClickUpdate' => 'Bitte klicke %shier%s, um ein Update zu machen!',
	'ClickReturn' => 'Bitte klicke %shier%s, um zum Menü zurückzukehren!',

	'Clean_OldFiles_Explain' => 'Lösche alle unbenutzten Icy Phoenix Dateien (Dateien, die noch von alten Versionen auf deinem Server sind)',
	'ActionUndone' => 'Achtung, dieser Vorgang kann nicht rückgängig gemacht werden. Vergewissere dich, dass du eine Sicherung hast!!!',
	'ClickToClean' => 'Um fortzufahren klicke bitte auf den Link.',
	'FileDeletion_OK' => 'Datei erfolgreich gelöscht',
	'FileDeletion_ERROR' => 'Datei kann nicht gelöscht werden',
	'FileDeletion_NF' => 'Datei wurde nicht gefunden',
	'FilesDeletion_OK' => 'Dateien erfolgreich gelöscht',
	'FilesDeletion_NO' => 'Dateien nicht gelöscht',
	'FilesDeletion_ERROR' => 'Dateien können nicht automatisch gelöscht werden',
	'FilesDeletion_NF' => 'Dateien konnten nicht gefunden werden',
	'FilesDeletion_None' => 'Keine',
	'FileDeletion_Complete' => 'Löschen der Dateien abgeschlossen!',

	'Spoiler' => 'Spoiler',
	'Show' => 'Zeige',
	'Hide' => 'Verstecke',
	'None' => 'Keine',
	'Start' => 'Start',

	'Upgrade_Steps' => 'Schritte zur Aktualisierung',
	'MakeFullBackup' => 'Mache eine vollständige Sicherung (Dateien und Datenbank) und lege es an einen sicheren Platz ab!',
	'Update_phpBB' => 'Aktualisiere phpBB DB (wenn benötigt)',
	'Remove_BBCodeUID' => 'Beiträge reparieren: entferne BBCode UID, ersetze Text, lösche alten BBCodes',
	'Merge_PostsTables' => 'Führe Beitrags-Tabellen zusammen',
	'Update_IcyPhoenix' => 'Aktualisiere Icy Phoenix DB',
	'Upload_NewFiles' => 'Lade alle neuen Dateien hoch',
	'Adjust_Config' => 'Aktualisiere Konstanten in config.php (klappt nur, wenn Datei beschreibbar (CHMOD 777) ist)',
	'Adjust_CMSPages' => 'Aktualisiere Konstanten in CMS Seiten (klappt nur, wenn Dateien beschreibbar (CHMOD 777) sind)',
	'MoveImagesAlbum' => 'Verschiebe Album Bilder (optional: nur, wenn du von Benutzer geposteter Bilder in Unterordner nutzen möchtest)',
	'MoveImages' => 'Verschiebe gepostete Bilder (optional: nur, wenn du von Benutzer geposteter Bilder in Unterordner nutzen möchtest)',
	'Clean_OldFiles' => 'Lösche alte Dateien',

	'ColorsLegend' => 'Farben-Legende',
	'ColorsLegendRed' => 'Rot: diese Aktion ist notwendig und muss manuell durchgeführt werden',
	'ColorsLegendOrange' => 'Orange: diese Aktion ist notwendig und das Skript kann es automatisch ausführen (sofern es erforderlich ist)',
	'ColorsLegendGray' => 'Grau: diese Aktion ist NICHT notwendig  und das Skript kann es automatisch ausführen',
	'ColorsLegendBlue' => 'Blau: diese Aktion ist freiwillig und kann automatisch ausgeführt werden (muss bei einigen Dateien manuell durchgeführt werden)',
	'ColorsLegendGreen' => 'Grün: diese Aktion ist empfohlen und das Skript kann es automatisch ausführen (sofern es erforderlich ist)',

	'FixBirthdays' => 'Geburtstage reparieren',
	'FixBirthdaysExplain' => 'Diese Funktion passt alle Geburtstage so an, dass sie mit den neuen Funktionen kompatibel sind.',
	'FixingBirthdaysInProgress' => 'Reparatur der Geburtstage in Bearbeitung',
	'FixingBirthdaysInProgressRedirect' => 'Du wirst automatisch in 3 Sekunden zum nächsten Schritt weitergeleitet',
	'FixingBirthdaysInProgressRedirectClick' => 'Wenn du nicht automatisch in 3 Sekunden weitergeleitet wirst, kannst du %shier%s klicken',
	'FixingBirthdaysFrom' => 'Bei diesem Schritt werden die Geburtstage von %s zu %s angepasst',
	'FixingBirthdaysTotal' => '%s Geburtstage von %s bisher angepasst',
	'FixingBirthdaysModified' => 'Geburtstage repariert',
	'FixingBirthdaysComplete' => 'Reparatur der Geburtstage abgeschlossen',
	'BirthdaysPerStep' => 'Anzahl der Geburtstage pro Schritt',

	'FixConstantsInFiles' => 'Konstanten reparieren',
	'FixConstantsInFilesExplain' => 'Alle Dateien mit neuen Icy Phoenix Konstanten reparieren',
	'FixingInProgress' => 'Reparatur der Dateien in Bearbeitung',
	'FixingComplete' => 'Reparatur der Dateien komplett',
	'ClickToFix' => 'Bitte klicke auf einen der unten stehenden Links um fortzufahren.',
	'FixAllFiles' => 'Repariere alle Dateien (beide, CMS Seiten und config.php)',
	'FixCMSPages' => 'Nur die CMS Seiten reparieren',
	'Fixed' => 'Repariert',
	'NotFixed' => 'Nicht repariert',
	'FilesProcessed' => 'Reparatur der Dateien abgeschlossen',

	'FixForums' => 'Foren konvertieren',
	'FixForumsExplain' => 'Diese Funktion wird Foren und Kategorien in das neue Format konvertieren.',
	'FixingForumsInProgress' => 'Konvertierung in Arbeit&hellip;',
	'FixingForumsComplete' => 'Arbeit vollständig!',

	'FixPosts' => 'Beiträge reparieren',
	'FixPostsExplain' => 'Mit dieser Funktion kannst du alle Beiträge in deinem Forum reparieren. Du kannst es benutzen um: finde und ersetze jeden Text in deinen Beiträgen, entferne BBCode UID, den Pfad geposteter Bilder automatisch anzupassen.',
	'FixingPostsInProgress' => 'Reparatur der Beiträge in Bearbeitung',
	'FixingPostsInProgressRedirect' => 'Du wirst automatisch in 3 Sekunden zum nächsten Schritt weitergeleitet',
	'FixingPostsInProgressRedirectClick' => 'Wenn du nicht automatisch in 3 Sekunden weitergeleitet wirst, kannst du %shier%s klicken',
	'FixingPostsFrom' => 'Bei diesem Schritt werden die Beiträge von %s zu %s angepasst',
	'FixingPostsTotal' => '%s Beiträge von %s bisher angepasst',
	'FixingPostsModified' => 'Beiträge repariert',
	'FixingPostsComplete' => 'Reparatur der Beiträge komplett',
	'SearchWhat' => 'Suche nach',
	'ReplaceWith' => 'Ersetze mit',
	'PostsPerStep' => 'Anzahl der Beiträge pro Schritt',
	'StartFrom' => 'Starte vom Beitrag',
	'RemoveBBCodeUID' => 'Entferne BBCode UID (hole sie von der Beitrags-Tabelle)',
	'RemoveBBCodeUID_Guess' => 'Versuche die BBCode UID zu finden und zu löschen',
	'FixPostedImagesPaths' => 'Reparieren aller verlinkten Bild-Pfade (Pfade werden Benutzerbezogen angepaßt)',

	'FixSignatures' => 'Signaturen reparieren',
	'FixSignaturesExplain' => 'Diese Funktion erlaubt dir alle Signaturen der Benutzer zu reparieren. Du kannst diese Funktion benutzen um: Text in Signaturen zu finden und zu ersetzen, alle BBCode UID zu entfernen, die Bild-Pfad Adresse automatisch anzupassen.',
	'FixingSignaturesInProgress' => 'Reparatur der Signaturen in Bearbeitung',
	'FixingSignaturesFrom' => 'Bei diesem Schritt werden die Signaturen von %s zu %s angepasst',
	'FixingSignaturesTotal' => '%s Signaturen von %s bisher angepasst',
	'FixingSignaturesModified' => 'Signaturen repariert',
	'FixingSignaturesComplete' => 'Reparatur der Signaturen komplett',
	'SignaturesPerStep' => 'Anzahl der Signaturen pro Schritt',
	'StartFromSignature' => 'Start bei Signatur',

	'FixPics' => 'Reparieren der Foto-Galerie Bilder-Pfade',
	'FixPicsExplain' => 'Diese Funktion wird alle Foto-Galerie Bilder von dem Hauptordner in die Benutzerunterordner verschieben und passt die Datenbank an die neuen Pfade an',
	'FixingPicsInProgress' => 'Reparatur der Bilder in Bearbeitung',
	'FixingPicsInProgressRedirect' => 'Du wirst automatisch in 3 Sekunden zum nächsten Schritt weitergeleitet',
	'FixingPicsInProgressRedirectClick' => 'Wenn du nicht automatisch in 3 Sekunden weitergeleitet wirst, kannst du %shier%s klicken',
	'FixingPicsFrom' => 'Bei diesem Schritt werden die Bilder von %s zu %s angepasst',
	'FixingPicsTotal' => '%s Bilder von %s bisher angepasst',
	'FixingPicsModified' => 'Bilder aktualisiert',
	'FixingPicsComplete' => 'Aktualisierung der Bilder komplett',
	'PicStartFrom' => 'Starte vom Bild',
	'PicsPerStep' => 'Anzahl der Bilder je Schritt',

	'RenMovePics' => 'Umbenennen und Verschieben geposteter Bilder',
	'RenMovePicsExplain' => 'Diese Funktion benennt die Bilder um, die in Beiträgen hochgeladen wurden und verschiebt sie vom Hauptordner in den Benutzer Unterordner: du musst danach die Beitrags-Tabelle aktualisieren, indem du die <i>Beiträge reparieren</i> Funktion ausführst, um den jeweiligen Pfad in den Beiträgen anzupassen',

	'COLLIDING_CLEAN_USERNAME' => '<strong>%s</strong> ist der clean Benutzername für:',
	'COLLIDING_USERNAMES_FOUND' => 'Es wurden doppelte Benutzernamen im alten Forum gefunden. Um die Konvertierung fortzusetzen lösche oder benenne diese Bentzer so um, dass es nur eindeutige clean Benutzernamen gibt.',
	'COLLIDING_USER' => '&raquo; Benutzer-ID: <strong>%d</strong> Benutzername: <strong>%s</strong> (%d Beiträge)',

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
<br />
Interests: Icy Phoenix<br />
Location: <a href="http://www.icyphoenix.com/">http://www.icyphoenix.com</a>
';

$lang['BBC_IP_CREDITS'] = '<div class="center-block"><marquee behavior="scroll" direction="up" scrolldelay="120">' . $lang['BBC_IP_CREDITS_STATIC'] . '</marquee></div>';

?>