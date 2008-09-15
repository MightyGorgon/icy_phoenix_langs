<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin.php 49 2008-09-15 20:00:00Z TheSteffen $
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
* TheSteffen, KugeLSichA, Tom
*
*/

//
// Modules, this replaces the keys used in the modules[][] arrays in each module file
//
$lang['General'] = 'Allgemeines';
$lang['Users'] = 'Benutzer';
$lang['Groups'] = 'Gruppen';
$lang['Forums'] = 'Forum';
$lang['Styles'] = 'Styles/Themes';

$lang['Configuration'] = 'Konfiguration';
$lang['Various_Configuration'] = 'Konfiguration';
$lang['Permissions'] = 'Berechtigungen';
$lang['Manage'] = 'Einstellungen';
$lang['manage'] = 'Einstellungen';
$lang['Disallow'] = 'Benutzernamen verbieten';
$lang['Prune'] = 'Autom. L�schen';
$lang['Mass_Email'] = 'Massen-E-Mail versenden';
$lang['Ranks'] = 'R�nge';
$lang['Smilies'] = 'Smilies';
$lang['Ban_Management'] = 'Bannen';
$lang['Word_Censor'] = 'Wortzensur';
$lang['Export'] = 'Exportieren';
$lang['Create_new'] = 'Erstellen';
$lang['Add_new'] = 'Hinzuf�gen';
$lang['Backup_DB'] = 'Datenbank-Backup';
$lang['Restore_DB'] = 'Datenbank wiederherstellen';
$lang['DB_Maintenance'] = 'Datenbank Tools';
$lang['News_Admin'] = 'News';
$lang['News_Cats'] = 'News Kategorien';
$lang['News_Config'] = 'News Konfiguration';
$lang['Security'] = 'Sicherheit';
$lang['Member_Tries'] = 'Mitgliederversuche';
$lang['Quick_Search'] = 'Schnellsuche';
$lang['Special'] = 'Spezial';
$lang['Styles_Management'] = 'Styles Einstellungen';
$lang['Manage_Bots'] = 'Bots Einstellungen';
$lang['Admin_Notepad'] = 'Notizblock';

// Index
$lang['Admin'] = 'Administration';
$lang['Not_admin'] = 'Du hast keine Administrator-Rechte';
$lang['Welcome_phpBB'] = 'Willkommen bei Icy Phoenix';
$lang['Admin_intro'] = 'Danke, dass du dich f�r Icy Phoenix entschieden hast. Auf diesem Bildschirm erh�ltst du einen �berblick �ber die Statistiken deines Forums. Wenn du auf diese Seite zur�ckkehren m�chtest, klicke auf den <u>Admin Index</u>-Link im oberen Bedienfeld. Um zu deinem Forum zur�ckzukehren, klicke oben rechts auf Forum. Die anderen Links auf der linken Seite erlauben es dir, alle wichtigen Bereiche deines Forums zu kontrollieren. In jedem Bereich wird beschrieben, wie die einzelnen Funktionen verwendet werden.';
$lang['Forum_stats'] = 'Forum Statistiken';
$lang['Admin_Index'] = 'Admin-Index';
$lang['Preview_forum'] = 'Forumsvorschau';
$lang['Click_return_admin_index'] = '%sKlicke hier%s, um zum Admin-Index zur�ckzukehren.';
$lang['Portal'] = 'Portal';
$lang['Preview_Portal'] = 'Portal Vorschau';
$lang['Main_index'] = 'Forum';

$lang['Statistic'] = 'Statistik';
$lang['Value'] = 'Wert';
$lang['Number_posts'] = 'Anzahl der Beitr�ge';
$lang['Posts_per_day'] = 'Beitr�ge pro Tag';
$lang['Number_topics'] = 'Anzahl der Themen';
$lang['Topics_per_day'] = 'Themen pro Tag';
$lang['Number_users'] = 'Anzahl der Benutzer';
$lang['Users_per_day'] = 'Benutzer pro Tag';
$lang['Board_started'] = 'Board startete am';
$lang['Avatar_dir_size'] = 'Gr��e des Avatarordners';
$lang['Database_size'] = 'Datenbankgr��e';
$lang['Gzip_compression'] = 'GZip-Kompression';
$lang['Not_available'] = 'Nicht verf�gbar';

$lang['ON'] = 'Aktiv'; // This is for GZip compression
$lang['OFF'] = 'Inaktiv';

//
// DB Utils
//
$lang['Database_Utilities'] = 'Datenbankfunktionen';

$lang['Restore'] = 'Wiederherstellen';
$lang['Backup'] = 'Backup';
$lang['Restore_explain'] = 'Hiermit werden alle Icy Phoenix Tabellen aus einer Datei wiederhergestellt. Falls es dein Server unterst�tzt, kannst du auch einen GZip-komprimierten Text hochladen - er wird automatisch dekomprimiert! <b>ACHTUNG</b>: Es werden alle existierenden Daten �berschrieben. Der Vorgang wird einige Zeit dauern, bitte verlasse diese Seite nicht, bis er abgeschlossen wurde.';
$lang['Backup_explain'] = 'Hier kannst du alle Icy Phoenix Tabellen abspeichern. Solltest du noch weitere, eigene Tabellen in derselben Datenbank wie die Icy Phoenix Tabellen haben, die auch gespeichert werden sollen, gib ihre Namen in der \'Zus�tzliche Tabellen\'-Textbox an (getrennt mit Kommata). Sollte dein Server es unterst�tzen, kannst du die Datei(en) auch mit GZip komprimieren, bevor du sie runterl�dst.';

$lang['Backup_options'] = 'Backup-Optionen';
$lang['Start_backup'] = 'Backup beginnen';
$lang['Full_backup'] = 'Vollst�ndiges Backup';
$lang['Structure_backup'] = 'Nur-Struktur-Backup';
$lang['Data_backup'] = 'Nur-Daten-Backup';
$lang['Additional_tables'] = 'Zus�tzliche Tabellen';
$lang['phpBB_only'] = 'Nur Icy Phoenix eigene Tabellen';
$lang['Gzip_compress'] = 'GZip-Komprimierungs Datei';
$lang['Select_file'] = 'W�hle eine Datei';
$lang['Start_Restore'] = 'Wiederherstellung beginnen';

$lang['Restore_success'] = 'Die Datenbank wurde wieder hergestellt.<br /><br />Dein Board sollte jetzt wieder den Stand des Backups haben.';
$lang['Backup_download'] = 'Dein Download wird in K�rze beginnen - bitte etwas Geduld';
$lang['Backups_not_supported'] = 'Fehler: Dein Datenbanksystem unterst�tzt Datenbank-Backups nicht!';

$lang['Restore_Error_uploading'] = 'Fehler beim Hochladen der Backup-Datei';
$lang['Restore_Error_filename'] = 'Probleme mit dem Dateinamen, probiere einen anderen';
$lang['Restore_Error_decompress'] = 'Die GZip-Version kann nicht dekomprimiert werden, nutze bitte eine Nur-Text-Datei';
$lang['Restore_Error_no_file'] = 'Es wurde keine Datei hochgeladen';


//
// Auth pages
//
$lang['Select_a_User'] = 'W�hle einen Benutzer';
$lang['Select_a_Group'] = 'W�hle eine Gruppe';
$lang['Select_a_Forum'] = 'W�hle ein Forum';
$lang['Auth_Control_User'] = 'Benutzerrechtekontrolle';
$lang['Auth_Control_Group'] = 'Gruppenrechtekontrolle';
$lang['Auth_Control_Forum'] = 'Forenzugangskontrolle';

$lang['Auth_list_Control_Forum'] = 'Berechtigungen f�r alle Foren';

$lang['Look_up_User'] = 'Benutzer ausw�hlen';
$lang['Look_up_Group'] = 'Gruppe ausw�hlen';
$lang['Look_up_Forum'] = 'Forum ausw�hlen';

$lang['Group_auth_explain'] = 'Du kannst hier die Befugnisse und den Moderator-Status f�r jede Gruppe einstellen. Vergiss nicht, dass einzelne Benutzerbefugnisse immer noch g�ltig sind, wenn du die Gruppenbefugnisse �nderst (z. B. Zugang zu Foren u. �.). Sollte dies der Fall sein, wirst du dar�ber informiert.';
$lang['User_auth_explain'] = 'Du kannst hier die Befugnisse und den Moderator-Status f�r jeden einzelnen Benutzer einstellen. Vergiss nicht, dass Gruppenbefugnisse immer noch g�ltig sind, wenn du die Benutzerbefugnisse �nderst (z. B. Zugang zu Foren u. �.). Sollte dies der Fall sein, wirst du dar�ber informiert.';
$lang['Forum_auth_explain'] = 'Du kannst hier die Zugangsebenen f�r jedes Forum bestimmen. Es gibt eine einfache und eine fortgeschrittene Methode, dies zu tun. Bei der fortgeschrittenen Methode hast du eine bessere Kontrolle �ber jedes Forum. Bedenke, dass das �ndern der Zugangsebene beeinflusst, welche Benutzer welche Aktionen im Forum durchf�hren k�nnen.';

$lang['Forum_auth_list_explain'] = 'Hier kannst du die Berechtigungseinstellungen f�r jedes Forum �ndern. Beachte, dass das �ndern von Forenberechtigungen ggf. Benutzern den Zugang zum Forum verwehrt, oder das sie bestimmte Funktionen nicht mehr nutzen k�nnen.';


$lang['Simple_mode'] = 'Einfache Methode';
$lang['Advanced_mode'] = 'Fortgeschrittene Methode';
$lang['Moderator_status'] = 'Moderatorenstatus';

$lang['Allowed_Access'] = 'Zugang gestattet';
$lang['Disallowed_Access'] = 'Zugang verwehrt';
$lang['Is_Moderator'] = 'ist Moderator';
$lang['Not_Moderator'] = 'kein Moderator';

$lang['Conflict_warning'] = 'Warnung: Autorisationskonflikt';
$lang['Conflict_access_userauth'] = 'Der Benutzer hat auf Grund seiner Gruppenmitgliedschaft immer noch Rechte in diesem Forum. Vielleicht solltest du die Gruppenrechte �ndern oder den Benutzer komplett aus der Benutzergruppe entfernen. Die Gruppen mit Rechten (und die dazugeh�rigen Foren) stehen unten.';
$lang['Conflict_mod_userauth'] = 'Der Benutzer hat immer noch Moderatorenrechte in diesem Forum. Vielleicht solltest du die Gruppenrechte �ndern oder den Benutzer komplett aus der Benutzergruppe entfernen. Die Gruppen mit Rechten (und die dazugeh�rigen Foren) stehen unten.';

$lang['Conflict_access_groupauth'] = 'Der oder die folgenden Benutzer haben auf Grund ihrer Benutzereinstellungen immer noch das Zugangsrecht zu diesem Forum. Vielleicht solltest du diese Einstellungen �ndern, um dem Benutzer komplett den Zugang zu verweigern. Die Benutzer mit Rechten (und die dazugeh�rigen Foren) stehen unten.';
$lang['Conflict_mod_groupauth'] = 'Der oder die folgenden Benutzer haben auf Grund ihrer Benutzereinstellungen immer noch Moderatorenrechte in diesem Forum. Vielleicht solltest du diese Einstellungen �ndern, um dem Benutzer komplett die Rechte zu nehmen. Die Benutzer mit Rechten (und die dazugeh�rigen Foren) stehen unten.';

$lang['Public'] = '�ffentlich';
$lang['Private'] = 'Privat';
$lang['Registered'] = 'Registriert';
$lang['Self'] = 'Selbst';
$lang['Administrators'] = 'Administratoren';
$lang['Hidden'] = 'Versteckt';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_NONE'] = 'NONE';
$lang['Forum_ALL'] = 'Alle';
$lang['Forum_REG'] = 'Reg';
$lang['Forum_SELF'] = 'Selbst';
$lang['Forum_PRIVATE'] = 'Privat';
$lang['Forum_MOD'] = 'Mods';
$lang['Forum_ADMIN'] = 'Admin';

$lang['View'] = 'Ansicht';
$lang['Read'] = 'Lesen';
$lang['Post'] = 'Posten';
$lang['Reply'] = 'Antworten';
$lang['Edit'] = 'Editieren';
$lang['Delete'] = 'L�schen';
$lang['Sticky'] = 'Wichtig';
$lang['Announce'] = 'Ank�ndigung';
$lang['Vote'] = 'Umfrage';
$lang['Pollcreate'] = 'Umfrage erstellen';

$lang['Simple_Permission'] = 'Einfache Befugnisse';

$lang['User_Level'] = 'Benutzerebene';
$lang['Auth_User'] = 'Benutzer';
$lang['Auth_Junior_Admin'] = 'Junior Administrator';
$lang['Auth_Admin'] = 'Administrator';
$lang['Group_memberships'] = 'Benutzergruppenmitglieder';
$lang['Usergroup_members'] = 'Diese Gruppe hat die folgenden Mitglieder';

$lang['Forum_auth_updated'] = 'Forumsberechtigungen aktualisiert';
$lang['User_auth_updated'] = 'Benutzerberechtigungen aktualisiert';
$lang['Group_auth_updated'] = 'Gruppenberechtigungen aktualisiert';

$lang['Auth_updated'] = 'Befugnisse wurden aktualisiert';
$lang['Click_return_userauth'] = '%sKlicke hier%s, um zu den Benutzerrechten zur�ckzukehren.';
$lang['Click_return_groupauth'] = '%sKlicke hier%s, um zu den Gruppenrechten zur�ckzukehren.';
$lang['Click_return_forumauth'] = '%sKlicke hier%s, um zu den Forenberechtigungen zur�ckzukehren.';


//
// Banning
//
$lang['Ban_control'] = 'Sperren';
$lang['Ban_explain'] = 'Hier kannst du Benutzer bannen. Du kannst entweder einen bestimmten Benutzer, eine IP-Adresse oder einen Hostnamen sperren. Durch diese Methode kann der Benutzer die Startseite des Forums nicht aufrufen. Um den Benutzer daran zu hindern, sich unter einem anderen Namen anzumelden, kannst du auch bestimmte E-Mail-Adressen sperren. Eine E-Mail-Sperre verhindert nur das Registrieren, nicht das Posten eines Benutzers!';
$lang['Ban_explain_warn'] = 'Bitte beachte, dass, wenn du mehrere IP-Adressen eingibst, alle Adressen zwischen dem Anfang und dem Ende der Sperrliste hinzugef�gt werden. Versuche die Anzahl der Adressen klein zu halten, indem du Wildcards einsetzt, wo es m�glich ist. Am besten ist es, eine konkrete IP-Adresse anzugeben.';

$lang['Select_username'] = 'W�hle einen Benutzernamen';
$lang['Select_ip'] = 'W�hle eine IP-Adresse';
$lang['Select_email'] = 'W�hle eine E-Mail-Adresse';

$lang['Ban_username'] = 'Einen oder mehrere Benutzer bannen';
$lang['Ban_username_explain'] = 'Wenn du mehrere Benutzer ausw�hlst, kannst du auch mehrere Benutzer auf einmal bannen';

$lang['Ban_IP'] = 'Eine(n) oder mehrere IP-Adressen/Hostnamen bannen';
$lang['IP_hostname'] = 'IP-Adressen oder Hostname';
$lang['Ban_IP_explain'] = 'Um mehrere verschiedene IP-Adressen oder Hostnamen anzugeben, trenne sie mit Kommata voneinander. Um einen Bereich von IP-Adressen anzugeben, trenne den Anfang und das Ende mit einem Bindestrich (-), benutze * als Platzhalter';

$lang['Ban_email'] = 'Eine oder mehrere E-Mail Adressen bannen';
$lang['Ban_email_explain'] = 'Um mehrere verschiedene E-Mail Adressen anzugeben, trenne sie mit Kommata voneinander. F�r einen allgemeinen Benutzernamen benutze ein * (z.B. *@hotmail.de)';

$lang['Unban_username'] = 'Einen oder mehrere Benutzer entsperren';
$lang['Unban_username_explain'] = 'Wenn du mehrere Benutzer ausw�hlst, kannst du auch mehrere Benutzer auf einmal entsperren';

$lang['Unban_IP'] = 'Eine oder mehrere IP-Adressen entsperren';
$lang['Unban_IP_explain'] = 'Wenn du mehrere IP-Adressen ausw�hlst, kannst du auch mehrere IP-Adressen auf einmal entsperren';

$lang['Unban_email'] = 'Eine oder mehrere E-Mail Adressen entsperren';
$lang['Unban_email_explain'] = 'Wenn du mehrere E-Mail Adressen ausw�hlst, kannst du auch mehrere E-Mail Adressen auf einmal entsperren';

$lang['No_banned_users'] = 'Keine gesperrten Benutzernamen';
$lang['No_banned_ip'] = 'Keine gebannten IP-Adressen';
$lang['No_banned_email'] = 'Keine gebannten E-Mail Adressen';

$lang['Ban_update_sucessful'] = 'Die Banliste wurde aktualisiert';
$lang['Click_return_banadmin'] = '%sKlicke hier%s, um zur Sperr-Kontrolle zur�ckzukehren.';


//
// Configuration
//
$lang['General_Config'] = 'Allgemeine Konfiguration';
$lang['Config_explain'] = 'Hier kannst du die allgemeinen Einstellungen deines Forums �ndern. F�r Benutzer- und Foreneinstellungen nutze bitte die Links auf der linken Seite.';

$lang['Click_return_config'] = '%sKlicke hier%s, um zur allgemeinen Konfiguration zur�ckzukehren.';

$lang['General_settings'] = 'Allgemeine Boardeinstellungen';
$lang['Server_name'] = 'Domainname';
$lang['Server_name_explain'] = 'Der Name der Domain, auf der das Board l�uft';
$lang['Script_path'] = 'Scriptpfad';
$lang['Script_path_explain'] = 'Der Pfad zu phpBB2, relativ zum Domainnamen';
$lang['Server_port'] = 'Server Port';
$lang['Server_port_explain'] = 'Der Port, unter dem dein Server l�uft, normalerweise 80. �ndere dies nur, wenn es ein anderer Port ist';
$lang['Site_name'] = 'Name der Seite';
$lang['Site_desc'] = 'Beschreibung der Seite';
$lang['Board_disable'] = 'Board deaktivieren';
$lang['Board_disable_explain'] = 'Hiermit sperrst du das Forum f�r alle Benutzer. Administratoren k�nnen auf den Administrations-Bereich zugreifen, wenn das Forum gesperrt ist.';
$lang['Acct_activation'] = 'Benutzer-Konto-Freischaltung aktivieren';
$lang['Acc_None'] = 'Keine'; // These three entries are the type of activation
$lang['Acc_User'] = 'Per E-Mail';
$lang['Acc_Admin'] = 'Durch den Admin';

$lang['Abilities_settings'] = 'Standard Benutzer- und Foreneinstellungen';
$lang['Max_poll_options'] = 'Maximale Anzahl der Umfrageoptionen';
$lang['Flood_Interval'] = 'Flood-Intervall';
$lang['Flood_Interval_explain'] = 'Anzahl der Sekunden, die ein Benutzer warten muss, bevor er einen neuen Beitrag schreiben kann';
$lang['Board_email_form'] = 'Benutzer E-Mails per Board';
$lang['Board_email_form_explain'] = 'Deine Benutzer k�nnen sich �ber das Board E-Mails schreiben';
$lang['Topics_per_page'] = 'Themen pro Seite';
$lang['Posts_per_page'] = 'Beitr�ge pro Seite';
$lang['Hot_threshold'] = 'Beitr�ge, die ein Thema braucht, um ein \'Hot Topic\' zu werden';
$lang['Default_style'] = 'Standard-Style';
$lang['Override_style'] = 'Style �berschreiben';
$lang['Override_style_explain'] = 'Vom Benutzer gew�hltes Style �berschreiben';
$lang['Default_language'] = 'Standard-Sprache';
$lang['Date_format'] = 'Datumsformat';
$lang['System_timezone'] = 'Zeitzone';
$lang['Enable_gzip'] = 'GZip-Komprimierung aktivieren';
// Start Gzip Compression Level MOD
$lang['Gzip_level'] = 'Gzip Komprimierungsstufe';
$lang['Gzip_level_explain'] = 'Hier kannst du die Gzip-Komprimierungsstufe einstellen (eine Ziffer zwischen 0-9). 0 ist gleichbedeutend mit aus, 1 ist sehr gering und 9 ist das Maximum. 9 ist empfohlen.';
// End Gzip Compression Level MOD
$lang['Enable_prune'] = 'Automatisches l�schen aktivieren';
$lang['Allow_HTML'] = 'HTML erlauben';
$lang['Allow_BBCode'] = 'BBCode erlauben';
$lang['Allowed_tags'] = 'Erlaubte HTML-Tags';
$lang['Allowed_tags_explain'] = 'Trenne die Tags mit Kommata';
$lang['Allow_smilies'] = 'Smilies erlauben';
$lang['Smilies_path'] = 'Speicherort f�r Smilies';
$lang['Smilies_path_explain'] = 'Der Pfad in deinem phpBB-Verzeichnis, in dem die Smilies liegen (z. B. images/smiles)';
$lang['Allow_sig'] = 'Signaturen erlauben';
$lang['Max_sig_length'] = 'Maximale Signaturl�nge';
$lang['Max_sig_length_explain'] = 'Die maximale Anzahl an Zeichen, die ein Benutzer in seiner Signatur nutzen darf';
$lang['Allow_name_change'] = 'Namenswechsel erlauben';

$lang['Avatar_settings'] = 'Avatareinstellungen';
$lang['Allow_local'] = 'Galerieavatare erlauben';
$lang['Allow_remote'] = 'Avatarremote erlauben';
$lang['Allow_remote_explain'] = 'Avatare, die von einer anderen Site verlinkt werden';
$lang['Allow_upload'] = 'Hochladen von Avataren erlauben';
$lang['Max_filesize'] = 'Maximale Gr��e';
$lang['Max_filesize_explain'] = 'F�r hochgeladene Avatare';
$lang['Max_avatar_size'] = 'Maximale Abmessungen des Avatars';
$lang['Max_avatar_size_explain'] = '(H�he x Breite in Pixel)';
$lang['Avatar_storage_path'] = 'Avatar Speicherpfad';
$lang['Avatar_storage_path_explain'] = 'Der Pfad in deinem phpBB-Verzeichnis, in dem die Avatare liegen (z. B. images/avatars)';
$lang['Avatar_gallery_path'] = 'Avatar Galeriepfad';
$lang['Avatar_gallery_path_explain'] = 'Der Pfad in deinem phpBB-Verzeichnis, in dem die Galerie-Avatare liegen (z. B. images/avatars/gallery)';

$lang['COPPA_settings'] = 'COPPA Einstellungen';
$lang['COPPA_fax'] = 'COPPA Fax Nummer';
$lang['COPPA_mail'] = 'COPPA E-Mail Adresse';
$lang['COPPA_mail_explain'] = 'Zu dieser E-Mail Adresse schicken die Eltern die COPPA Einverst�ndniserkl�rung';

$lang['Email_settings'] = 'E-Mail Einstellungen';
$lang['Admin_email'] = 'E-Mail Adresse des Administrators';
$lang['Email_sig'] = 'E-Mail Signatur';
$lang['Email_sig_explain'] = 'Diese Signatur wird an alle E-Mails des Administrators angeh�ngt';
$lang['Use_SMTP'] = 'Nutze einen SMTP Server zum Mailen';
$lang['Use_SMTP_explain'] = 'W�hle \'Ja\', wenn du m�chtest, dass deine E-Mails �ber einen SMTP-Server gesendet werden';
$lang['SMTP_server'] = 'SMTP-Server Addresse';
$lang['SMTP_username'] = 'SMTP Benutzername';
$lang['SMTP_username_explain'] = 'Gib nur dann einen Benutzernamen an, wenn der SMTP-Server dies ben�tigt';
$lang['SMTP_password'] = 'SMTP Passwort';
$lang['SMTP_password_explain'] = 'Gib nur dann ein Passwort an, wenn der SMTP-Server dies ben�tigt';

$lang['Disable_privmsg'] = 'Private Nachrichten';
$lang['Inbox_limits'] = 'Maximale Nachrichten im Eingang';
$lang['Sentbox_limits'] = 'Maximale Nachrichten im Ausgang';
$lang['Savebox_limits'] = 'Maximale Anzahl gespeicherter Nachrichten';

$lang['Cookie_settings'] = 'Cookie Einstellungen';
$lang['Cookie_settings_explain'] = 'Hier kannst du einstellen, was f�r Cookies zum Browser gesendet werden. Meistens stimmen die Standardeinstellungen. Solltest du sie �ndern m�ssen, tue es mit Bedacht, ansonsten kann sich niemand mehr im Forum einloggen.';
$lang['Cookie_domain'] = 'Cookie-Domain';
$lang['Cookie_name'] = 'Cookie-Name';
$lang['Cookie_path'] = 'Cookie-Pfad';
$lang['Cookie_secure'] = 'Sicheres Cookie';
$lang['Cookie_secure_explain'] = 'Falls dein Server auf SSL l�uft, aktiviere diese Funktion, ansonsten lasse sie deaktiviert';
$lang['Session_length'] = 'Sessionl�nge [ Sekunden ]';

// Visual Confirmation
$lang['Visual_confirm'] = 'Aktiviere visuelle Best�tigung';
$lang['Visual_confirm_explain'] = 'Benutzer m�ssen bei der Registrierung einen durch ein Bild vorgegeben Schl�ssel eingeben.';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = 'Erlaube automatisches Einloggen';
$lang['Allow_autologin_explain'] = 'Legt fest, ob Benutzern das automatische Einloggen erm�glicht wird';
$lang['Autologin_time'] = 'Ablaufzeit des Schl�ssels f�r das automatische Einloggen';
$lang['Autologin_time_explain'] = 'Tage, die der Schl�ssel f�r das automatische Einloggen g�ltig ist, wenn das Board nicht besucht wird. Mit Null l�uft der Schl�ssel nicht ab.';

// Forum Management
$lang['Forum_admin'] = 'Forum Administration';
$lang['Forum_admin_explain'] = 'Hier kannst du Kategorien und Foren hinzuf�gen, l�schen, bearbeiten und neu anordnen.';
$lang['Edit_forum'] = 'Forum bearbeiten';
$lang['Create_forum'] = 'Neues Forum erstellen';
$lang['Create_category'] = 'Neue Kategorie erstellen';
$lang['Remove'] = 'Entfernen';
$lang['Action'] = 'Aktion';
$lang['Update_order'] = 'Reihenfolge �ndern';
$lang['Config_updated'] = 'Forumskonfiguration ge�ndert';
$lang['Move_up'] = 'Nach oben';
$lang['Move_down'] = 'Nach unten';
$lang['Resync'] = 'Resync';
$lang['No_mode'] = 'Kein Modus ausgew�hlt';
$lang['Forum_edit_delete_explain'] = 'Hier kannst du alle allgemeinen Boardeinstellungen anpassen. Zur Benutzer- und Forenkonfiguration benutze bitte die entsprechenden Links auf der linken Seite';

$lang['Move_contents'] = 'Alle Inhalte verschieben';
$lang['Forum_delete'] = 'Forum l�schen';
$lang['Forum_delete_explain'] = 'Hier kannst du ein Forum oder eine Kategorie l�schen und entscheiden, wohin die enthaltenen Themen oder Foren verschoben werden sollen.';

$lang['Status_locked'] = 'Gesperrt';
$lang['Status_unlocked'] = 'Entsperrt';
$lang['Forum_settings'] = 'Allgemeine Foreneinstellungen';
$lang['Forum_name'] = 'Forumsname';
$lang['Forum_desc'] = 'Beschreibung';
$lang['Forum_status'] = 'Forumsstatus';
$lang['Forum_pruning'] = 'Automatisches Pruning';

$lang['prune_freq'] = '�berpr�fe das Themenalter alle';
$lang['prune_days'] = 'Entferne Themen, in denen nichts mehr geschrieben wurde seit';
$lang['Set_prune_data'] = 'Du hast das automatische L�schen f�r dieses Forum aktiviert, aber weder ein Intervall noch eine Anzahl an Tagen angegeben.';

$lang['Move_and_Delete'] = 'Verschieben und L�schen';

$lang['Delete_all_posts'] = 'Alle Beitr�ge l�schen';
$lang['Nowhere_to_move'] = 'Kein Ziel zum Verschieben';

$lang['Edit_Category'] = 'Kategorie editieren';
$lang['Edit_Category_explain'] = 'Hier kannst du den Namen einer Kategorie �ndern';

$lang['Forums_updated'] = 'Forums- und Kategorieinformationen wurden ge�ndert';

$lang['Must_delete_forums'] = 'Du musst erst alle Foren l�schen, bevor du diese Kategorie l�schen kannst';

$lang['Click_return_forumadmin'] = '%sKlicke hier%s, um zur Forumsadministration zur�ckzukehren.';


//
// Smiley Management
//
$lang['smiley_title'] = 'Smiley-Bearbeitung';
$lang['smile_desc'] = 'Hier kannst du die Smilies, die die Benutzer in ihren Beitr�gen und Privaten Nachrichten einf�gen k�nnen, hinzuf�gen, l�schen oder bearbeiten.';

$lang['smiley_config'] = 'Smiley-Konfiguration';
$lang['smiley_code'] = 'Smiley Code';
$lang['smiley_url'] = 'Smiley Bilddatei';
$lang['smiley_emot'] = 'Smiley Beschreibung';
$lang['smile_add'] = 'Einen neuen Smiley hinzuf�gen';
$lang['Smile'] = 'Smiley';
$lang['Emotion'] = 'Beschreibung';

$lang['Select_pak'] = 'W�hle Paketdatei (.pak)';
$lang['replace_existing'] = 'Aktuelle Smilies �berschreiben';
$lang['keep_existing'] = 'Aktuelle Smilies behalten';
$lang['smiley_import_inst'] = 'Du solltest das Smiley-Paket entzippen und alle Dateien ins jeweilige Smiley-Verzeichnis hochladen. W�hle dann die korrekten Angaben, um das Paket zu installieren.';
$lang['smiley_import'] = 'Smiley-Paketimport';
$lang['choose_smile_pak'] = 'W�hle ein Smiley-Paket (.pak)';
$lang['import'] = 'Smilies importieren';
$lang['smile_conflicts'] = ' Was tun, wenn Konflikte auftreten?';
$lang['del_existing_smileys'] = 'Aktuelle Smilies vor dem Import l�schen';
$lang['import_smile_pack'] = 'Smiley-Paket importieren';
$lang['export_smile_pack'] = 'Smiley-Paket erstellen';
$lang['export_smiles'] = 'Um aus deinen jetzigen Smilies ein Paket zu erstellen, klicke %shier%s, um das Paket herunterzuladen. Achte darauf, die .pak-Erweiterung am Ende beizubehalten. Erstelle dann eine Zip-Datei mit allen benutzten Smilies und der .pak-Datei.';

$lang['smiley_add_success'] = 'Der Smiley wurde hinzugef�gt';
$lang['smiley_edit_success'] = 'Der Smiley wurde ge�ndert';
$lang['smiley_import_success'] = 'Das Smiley-Paket wurde installiert';
$lang['smiley_del_success'] = 'Der Smiley wurde gel�scht';
$lang['Click_return_smileadmin'] = '%sKlicke hier%s, um zur Smiley-Verwaltung zur�ckzukehren.';


//
// User Management
//
$lang['User_admin'] = 'Benutzer-Administration';
$lang['User_admin_explain'] = 'Hier kannst du die Daten und Optionen eines Nutzers �ndern. Um die Befugnisse eines Benutzers zu �ndern, benutze bitte die Benutzer- und Gruppenkontrolle.';

$lang['Look_up_user'] = 'Benutzer ausw�hlen';

$lang['Admin_user_fail'] = 'Benutzerprofil konnte nicht ge�ndert werden';
$lang['Admin_user_updated'] = 'Benutzerprofil ge�ndert';
$lang['Click_return_useradmin'] = '%sKlicke hier%s, um zur Benutzeradministration zur�ckzukehren.';
//Start Quick Administrator User Options and Information MOD
$lang['Click_return_userprofile'] = '%sKlicke hier%s, um zum Benutzerprofil zur�ckzugelangen.';
//End Quick Administrator User Options and Information MOD
$lang['User_delete'] = 'Diesen Benutzer l�schen';
$lang['User_delete_explain'] = 'Klicke hier, um den Benutzer zu l�schen - diese Aktion kann nicht r�ckg�ngig gemacht werden.';
$lang['User_deleted'] = 'Benutzer wurde gel�scht';

$lang['User_status'] = 'Benutzer ist aktiv';
$lang['User_allowpm'] = 'Darf Private Nachrichten verschicken';
$lang['User_allowavatar'] = 'Darf einen Avatar benutzen';

$lang['Admin_avatar_explain'] = 'Hier kannst du den Avatar des Benutzers ansehen und l�schen';

$lang['User_special'] = 'Spezielle Optionen (nur f�r Administratoren)';
$lang['User_special_explain'] = 'Diese Optionen k�nnen nicht von den Benutzern ge�ndert werden. Du kannst hier den Status und andere Optionen der Benutzer festlegen, die den Benutzern selbst nicht zur Verf�gung stehen.';


//
// Group Management
//
$lang['Group_administration'] = 'Gruppenadministration';
$lang['Group_admin_explain'] = 'Hier kannst du die Benutzergruppen deines Forum �berwachen. Du kannst bestehende Gruppen l�schen oder editieren oder neue anlegen. Ebenso kannst du Gruppenleiter w�hlen, den Gruppenstatus auf offen/geschlossen �ndern und den Gruppennamen bzw. die Gruppenbeschreibung �ndern';
$lang['Error_updating_groups'] = 'Fehler beim Aktualisieren der Gruppe';
$lang['Updated_group'] = 'Die Gruppe wurde abge�ndert';
$lang['Added_new_group'] = 'Die Gruppe wurde hinzugef�gt';
$lang['Deleted_group'] = 'Die Gruppe wurde gel�scht';
$lang['New_group'] = 'Neue Gruppe erstellen';
$lang['Edit_group'] = 'Gruppe bearbeiten';
$lang['group_name'] = 'Gruppenname';
$lang['group_description'] = 'Gruppenbeschreibung';
$lang['group_moderator'] = 'Gruppenleiter';
$lang['group_status'] = 'Gruppenstatus';
$lang['group_open'] = 'Offene Gruppe';
$lang['group_closed'] = 'Geschlossene Gruppe';
$lang['group_hidden'] = 'Versteckte Gruppe';
$lang['group_delete'] = 'Gel�schte Gruppe';
$lang['group_delete_check'] = 'Diese Gruppe l�schen';
$lang['submit_group_changes'] = '�nderungen �bernehmen';
$lang['reset_group_changes'] = 'Reset';
$lang['No_group_name'] = 'Bitte gib einen Gruppennamen an';
$lang['No_group_moderator'] = 'Bitte gib einen Gruppenleiter an';
$lang['No_group_mode'] = 'Du musst einen Status f�r diese Gruppe angeben (offen/geschlossen)';
$lang['No_group_action'] = 'Es wurde keine Aktion ausgew�hlt';
$lang['delete_group_moderator'] = 'Alten Gruppenleiter entfernen?';
$lang['delete_moderator_explain'] = 'Wenn du den Gruppenleiter wechseln m�chtest, w�hle die entsprechende Option, um den alten Leiter zu entfernen. Ansonsten w�hle die Option nicht und der Benutzer wird ein regul�res Mitglied der Gruppe.';
$lang['Click_return_groupsadmin'] = '%sKlicke hier%s, um zur Gruppenadministration zur�ckzukehren.';
$lang['Select_group'] = 'Gruppe w�hlen';
$lang['Look_up_group'] = 'Gruppe finden';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Automatisches l�schen';
$lang['Forum_Prune_explain'] = 'Du kannst angeben, dass alle Themen, in denen seit einer gewissen Zeit nichts gepostet wurde, gel�scht werden. Solltest du keine Zahl angeben, werden alle Themen gel�scht. Laufende Umfragen und Ank�ndigungen sind davon nicht betroffen. Diese Themen m�ssen manuell entfernt werden.';
$lang['Do_Prune'] = 'L�schen starten';
$lang['All_Forums'] = 'Alle Foren';
$lang['Prune_topics_not_posted'] = 'Themen l�schen in denen es keine Antworten gab seit';
$lang['Topics_pruned'] = 'Gel�schte Themen';
$lang['Posts_pruned'] = 'Gel�schte Beitr�ge';
$lang['Prune_success'] = 'Das automatische L�schen des Forums wurde aktiviert';


//
// Word censor
//
$lang['Words_title'] = 'Wortzensur';
$lang['Words_explain'] = 'Hier kannst du W�rter bestimmen, die in den Beitr�gen automatisch zensiert werden. Au�erdem kann kein Benutzer einen Namen w�hlen, in dem diese W�rter vorkommen. Du kannst ein * als Platzhalter im Wort-Feld verwenden. Beispiel: Fisch* entfernt W�rter wie Fischbesteck, Fischfang usw., *Fisch entfernt Backfisch, Stockfisch usw.';
$lang['Word'] = 'Wort';
$lang['Edit_word_censor'] = 'Wortzensur �ndern';
$lang['Replacement'] = 'Ersatz';
$lang['Add_new_word'] = 'Neues Wort hinzuf�gen';
$lang['Update_word'] = 'Zensur aktualisieren';

$lang['Must_enter_word'] = 'Ein Wort und ein entsprechender Ersatz sind n�tig';
$lang['No_word_selected'] = 'Kein Wort zum Editieren ausgew�hlt';

$lang['Word_updated'] = 'Die Wortzensur wurde aktualisiert';
$lang['Word_added'] = 'Die Wortzensur wurde eingerichtet';
$lang['Word_removed'] = 'Die Wortzensur wurde entfernt';

$lang['Click_return_wordadmin'] = '%sKlicke hier%s, um zur Wortzensur-Administration zur�ckzukehren.';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'Hier kannst du entweder allen registrierten Benutzern oder einer bestimmten Gruppe eine Nachricht schicken. Diese Nachricht wird an das Postfach des Administrators geschickt und anonym (BCC) an alle Empf�nger. Solltest du einer gro�en Gruppe eine E-Mail schicken, habe etwas Geduld und brich den Vorgang nicht ab. Es ist v�llig normal, dass der Vorgang l�nger dauert und du erh�ltst eine R�ckmeldung, wenn das Skript beendet ist';
$lang['Compose'] = 'Erstellen';

$lang['Recipients'] = 'Empf�nger';
$lang['All_users'] = 'Alle Benutzer';

$lang['Email_successfull'] = 'Die Nachricht wurde gesendet';
$lang['Click_return_massemail'] = '%sKlicke hier%s, um zur Massen E-Mail zur�ckzukehren.';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Rang-Administration';
$lang['Ranks_explain'] = 'Hier kannst du R�nge hinzuf�gen, editieren, anschauen und l�schen. Du kannst ebenfalls eigene R�nge erstellen, die du per Benutzeradministration an spezielle Benutzer vergibst.';

$lang['Add_new_rank'] = 'Neuen Rang anlegen';

$lang['Rank_title'] = 'Rangname';
$lang['Rank_special'] = 'Spezialrang';
$lang['Rank_minimum'] = 'Minimum-Beitr�ge';
$lang['Rank_maximum'] = 'Maximum-Beitr�ge';
$lang['Rank_image'] = 'Bild zum Rang (relativ zum Forenpfad)';
$lang['Rank_image_explain'] = 'Du kannst hier ein Bild bestimmen, dass dem jeweiligen Rang zugeordnet ist';

$lang['Must_select_rank'] = 'W�hle einen Rang aus';
$lang['No_assigned_rank'] = 'Kein Spezialrang vergeben';

$lang['Rank_updated'] = 'Die Ranginformationen wurden aktualisiert';
$lang['Rank_added'] = 'Der Rang wurde hinzugef�gt';
$lang['Rank_removed'] = 'Der Rang wurde gel�scht';
$lang['No_update_ranks'] = 'Der Rang wurde erfolgreich gel�scht. Allerdings wurden Benutzer, denen dieser Rang zugeordnet war, nicht aktualisiert. Du musst den Rang bei diesen Benutzern manuell aktualisieren';

$lang['Click_return_rankadmin'] = '%sKlicke hier%s, um zur Rang-Administration zur�ckzukehren.';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Verbot von Benutzernamen';
$lang['Disallow_explain'] = 'Hier kannst du Benutzernamen �berwachen, die nicht genutzt werden d�rfen. Du kannst einen Stern (*) als Platzhalter setzen. Beachte, dass du den jeweiligen Benutzer zuerst l�schen musst, wenn du einen bereits vergebenen Benutzernamen w�hlst.';

$lang['Delete_disallow'] = 'L�schen';
$lang['Delete_disallow_title'] = 'Einen verbotenen Namen entfernen';
$lang['Delete_disallow_explain'] = 'Du kannst einen verbotenen Namen entfernen, indem du den Namen aus der Liste ausw�hlst und L�schen anklickst';

$lang['Add_disallow'] = 'Hinzuf�gen';
$lang['Add_disallow_title'] = 'Einen verbotenen Namen hinzuf�gen';
$lang['Add_disallow_explain'] = 'Du kannst ein * benutzen, um jegliche Benutzernamen zu verbieten';

$lang['No_disallowed'] = 'Keine verbotenen Benutzernamen';

$lang['Disallowed_deleted'] = 'Der verbotene Benutzername ist nun wieder gestattet';
$lang['Disallow_successful'] = 'Der verbotene Benutzername wurde hinzugef�gt';
$lang['Disallowed_already'] = 'Der angegebene Benutzername kann nicht verboten werden. Er existiert entweder schon oder stimmt mit einem existierenden �berein.';

$lang['Click_return_disallowadmin'] = '%sKlicke hier%s, um zum Verbot der Benutzernamen zur�ckzukehren.';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Styles Administration';
$lang['Styles_explain'] = 'Hier kannst du Styles (Templates und Themes) hinzuf�gen, l�schen und �berwachen.';
$lang['Styles_addnew_explain'] = 'In der folgenden Liste sind alle f�r dieses Template verf�gbaren Themes aufgef�hrt. Die in der Liste aufgef�hrten Objekte wurden der Datenbank noch nicht zugef�gt. Um ein Theme zu installieren, klicke einfach auf den Installieren-Link neben einem Eintrag';

$lang['Select_template'] = 'W�hle ein Template';

$lang['Style'] = 'Style';
$lang['Template'] = 'Template';
$lang['Download'] = 'Download';

$lang['Edit_theme'] = 'Theme editieren';
$lang['Edit_theme_explain'] = 'Hier kannst du die Einstellungen f�r das gew�hlte Theme �ndern';

$lang['Create_theme'] = 'Theme erstellen';
$lang['Create_theme_explain'] = 'Hier kannst du ein neues Theme f�r das gew�hlte Template erstellen. Wenn du Farben eingibst (f�r die du Hexdezimalzahlen nutzen solltest), darfst du das # nicht mit angeben - CCCCCC ist z. B. korrekt, #CCCCCC nicht';

$lang['Export_themes'] = 'Theme exportieren';
$lang['Export_explain'] = 'Hier kannst du die Themedaten f�r ein bestimmtes Template exportieren. W�hle das Template aus der unteren Liste und das Script wird die Themekonfigurationsdatei erstellen und versuchen, sie in den Templatesordner zu speichern. Falls es die Datei nicht selbst speichern kann, kannst du sie runterladen. Um dem Skript das Schreiben der Datei zu erm�glichen, musst du dem gew�hlten Templateordner Schreibrechte gew�hren. F�r weitere Informationen siehe den phpBB2 Benutzerguide.';

$lang['Theme_installed'] = 'Das gew�hlte Theme wurde installiert';
$lang['Style_removed'] = 'Der gew�hlte Style wurde aus der Datenbank entfernt. Um den Style v�llig vom System zu entfernen, musst du es aus deinem Templates-Ordner l�schen.';
$lang['Theme_info_saved'] = 'Die Themeinformationen f�r das gew�hlte Template wurden gespeichert. Du solltest jetzt die Dateizugriffsrechte der theme_info.cfg (und eventueller Verzeichnisse) auf Nur-Lesen zur�ck stellen';
$lang['Theme_updated'] = 'Das gew�hlte Theme wurde aktualisiert. Du solltest die neuen Themeeinstellungen jetzt exportieren.';
$lang['Theme_created'] = 'Theme erstellt. Du solltest das Theme jetzt in die Themekonfiguration exportieren, damit es nicht verloren geht oder du es an anderer Stelle einsetzen kannst.';

$lang['Confirm_delete_style'] = 'Diesen Style wirklich l�schen?';

$lang['Download_theme_cfg'] = 'Der Exporter konnte nicht in die Themeinformationsdatei schreiben. Klicke auf den unteren Knopf, um die Datei per Browser runterzuladen. Hast du sie runtergeladen, kannst du die Datei in deinen Ordner mit den Templatedateien kopieren. Schlie�lich kannst du die Dateien zu einem Paket zusammenschlie�en.';
$lang['No_themes'] = 'Das gew�hlte Template hat keine verf�gbaren Themes. Um ein neues Theme zu erstellen, klicke auf den Theme-erstellen-Link auf der linken Seite';
$lang['No_template_dir'] = 'Konnte das Template-Verzeichnis nicht �ffnen. Es ist eventuell nicht lesbar oder existiert nicht (mehr).';
$lang['Cannot_remove_style'] = 'Du kannst den gew�hlten Style nicht entfernen, da er zum Forumsstandard geh�rt. Du kannst jedoch einen anderen Forumsstandard w�hlen und es erneut versuchen.';
$lang['Style_exists'] = 'Der gew�hlte Stylename existiert bereits, bitte gehe zur�ck und w�hle einen anderen Namen.';

$lang['Click_return_styleadmin'] = '%sKlicke hier%s, um zur Styles Administration zur�ckzukehren.';

$lang['Theme_settings'] = 'Theme Einstellungen';
$lang['Theme_element'] = 'Theme Element';
$lang['Simple_name'] = 'Einfacher Name';
$lang['Save_Settings'] = 'Einstellungen �bernehmen';

$lang['Stylesheet'] = 'CSS-Stylesheet';
$lang['Stylesheet_explain'] = 'Dateiname des CSS-Stylesheets f�r dieses Theme.';
$lang['Background_image'] = 'Hintergrundbild';
$lang['Background_color'] = 'Hintergrundfarbe';
$lang['Theme_name'] = 'Themename';
$lang['Link_color'] = 'Linkfarbe';
$lang['Text_color'] = 'Textfarbe';
$lang['VLink_color'] = 'Farbe f�r gesehener Link';
$lang['ALink_color'] = 'Farbe f�r aktiver Link';
$lang['HLink_color'] = 'Farbe f�r gew�hlter Link';
$lang['Tr_color1'] = 'Farbe f�r Tabellenreihe 1';
$lang['Tr_color2'] = 'Farbe f�r Tabellenreihe 2';
$lang['Tr_color3'] = 'Farbe f�r Tabellenreihe 3';
$lang['Tr_class1'] = 'Tabellenreihe Klasse 1';
$lang['Tr_class2'] = 'Tabellenreihe Klasse 2';
$lang['Tr_class3'] = 'Tabellenreihe Klasse 3';
$lang['Th_color1'] = 'Farbe f�r Tabellenkopf 1';
$lang['Th_color2'] = 'Farbe f�r Tabellenkopf 2';
$lang['Th_color3'] = 'Farbe f�r Tabellenkopf 3';
$lang['Th_class1'] = 'Tabellenkopf Klasse 1';
$lang['Th_class2'] = 'Tabellenkopf Klasse 2';
$lang['Th_class3'] = 'Tabellenkopf Klasse 3';
$lang['Td_color1'] = 'Farbe f�r Tabellenzelle 1';
$lang['Td_color2'] = 'Farbe f�r Tabellenzelle 2';
$lang['Td_color3'] = 'Farbe f�r Tabellenzelle 3';
$lang['Td_class1'] = 'Tabellenzelle Klasse 1';
$lang['Td_class2'] = 'Tabellenzelle Klasse 2';
$lang['Td_class3'] = 'Tabellenzelle Klasse 3';
$lang['fontface1'] = 'Schriftart 1';
$lang['fontface2'] = 'Schriftart 2';
$lang['fontface3'] = 'Schriftart 3';
$lang['fontsize1'] = 'Schriftgr��e 1';
$lang['fontsize2'] = 'Schriftgr��e 2';
$lang['fontsize3'] = 'Schriftgr��e 3';
$lang['fontcolor1'] = 'Schriftfarbe 1';
$lang['fontcolor2'] = 'Schriftfarbe 2';
$lang['fontcolor3'] = 'Schriftfarbe 3';
$lang['span_class1'] = 'Abstand Klasse 1';
$lang['span_class2'] = 'Abstand Klasse 2';
$lang['span_class3'] = 'Abstand Klasse 3';
$lang['img_poll_size'] = 'Umfragen-Symbolgr��e [px]';
$lang['img_pm_size'] = 'Private Nachrichten-Statussymbolgr��e [px]';

// Install Process
$lang['Welcome_install'] = 'Icy Phoenix Installation';
$lang['Initial_config'] = 'Konfiguration';
$lang['DB_config'] = 'Datenbank Konfiguration';
$lang['Admin_config'] = 'Admin Konfiguration';
$lang['continue_upgrade'] = 'Sobald du deine Config Datei auf dein lokales System runtergeladen hast, kannst du \'Upgrade fortsetzen\' anklicken um mit dem Upgrade weiterzumachen. Bitte warte einen Moment wenn das Upgrade abgeschlossen ist, damit die Config Datei hochgeladen werden kann.';
$lang['upgrade_submit'] = 'Upgrade fortsetzen';

$lang['Installer_Error'] = 'Es ist ein Fehler w�hrend der Installation aufgetreten';
$lang['Previous_Install'] = 'Eine vorherige Installation wurde erkannt';
$lang['Install_db_error'] = 'Es ist beim Versuch die Datenbank zu aktualisieren, ein Fehler aufgetreten';

$lang['Re_install'] = 'Deine vorherige Installation ist immer noch aktiv.<br /><br />Wenn du Icy Phoenix erneut installieren willst dann w�hle unten Ja. Bitte beachte, wenn du fortf�hrst, gehen alle Daten verloren und es werden keine Backups gemacht! Der Administrator Benutzername und das Password das Du zum Einloggen ins Forum benutzt hast wird nach der Re-Installation erneut erstellt und keine anderen Einstellungen beibehalten.<br /><br />�berlege genau befor du mit Ja best�tigst!';

$lang['Inst_Step_0'] = 'Danke f�r deine Entscheidung zu Icy Phoenix. Dieser Wizard wird dich durch den Installations-Proze� begleiten.<br /><font color="#FF0000">Bitte beachte das Du alle Icy Phoenix Dateien auf deinen Server geladen haben solltest und das die Datenbank in die du installieren willst, bereits erstellt sein sollte.</font>';

$lang['Inst_Step_1'] = 'Um die Installation abzuschlie�en solltest du die erforderlichen Details unten ausf�llen.<br /><font color="#FF0000">Bitte beachte das die Datenbank in die du installieren m�chtest, bereits bestehen sollte.</font>';

$lang['CHMOD_Files'] = 'Datei &amp; Ordner Befugnisse';
$lang['CHMOD_OK'] = 'Ok';
$lang['CHMOD_Error'] = 'Fehler';
$lang['CHMOD_777'] = 'CHMOD 777';
$lang['CHMOD_666'] = 'CHMOD 666';
$lang['CHMOD_Files_Explain_Error'] = 'Bitte f�ge die rechten CHMOD Befugnisse den Dateien und Ordnern hinzu bevor du zum n�chsten Schritt �bergehst.';
$lang['CHMOD_Files_Explain_Ok'] = 'Alle CHMOD Befugnisse scheinen Ok zu sein, du kannst mit dem n�chsten Schritt fortfahren.';
$lang['CHMOD_File_Exists'] = 'Diese Datei/Ordner existiert und seine Berechtigungen wurden richtig gesetzt.';
$lang['CHMOD_File_NotExists'] = 'Diese Datei/Ordner existiert nicht, bitte hochladen und die richtigen CHMOD Berechtigungen setzen.';
$lang['CHMOD_File_Exists_Read_Only'] = 'Diese Datei/Ordner existiert aber die CHMOD Berechtigungen konnten nicht automatisch ge�ndert werden. Bitte setze die CHMOD Berechtigungen manuell.';
$lang['CHMOD_File_UnknownError'] = 'Beim �berpr�fen dieser Datei/Ordner trat ein unbekannter Fehler auf. Bitte �berpr�fe, ob diese Datei/Ordner existiert und ob die richtigen CHMOD Berechtigungen gesetzt sind.';

$lang['Start_Install'] = 'Starte Installation';
$lang['Start_Install_Anyway'] = 'Starte Installation trotzdem';
$lang['Finish_Install'] = 'Beende Installation';
$lang['Continue_Install'] = 'Installation fortfahren';

$lang['Default_lang'] = 'Standard Seiten Sprache';
$lang['DB_Host'] = 'Datenbank Server Hostname / DSN';
$lang['DB_Name'] = 'Dein Datenbank Name';
$lang['DB_Username'] = 'Datenbank Benutzername';
$lang['DB_Password'] = 'Datenbank Passwort';
$lang['Database'] = 'Deine Datenbank';
$lang['Install_lang'] = 'W�hle eine Sprache f�r die Installation';
$lang['dbms'] = 'Datenbank Typ';
$lang['Table_Prefix'] = 'Pr�fix f�r Tabellen in der Datenbank';
$lang['Admin_Username'] = 'Administrator Benutzername';
$lang['Admin_Password'] = 'Administrator Passwort';
$lang['Admin_Password_confirm'] = 'Administrator Passwort [ Best�tigung ]';

$lang['Inst_Step_2'] = 'Dein Admin Benutzername und Passwort wurde erstellt.<br />Um deine Installation abzuschlie�en musst du die <font color="#FF0000"> <b>install</b> Ordner und <b>contrib</b> Ordner l�schen</font> (wenn du sie auf dem Server hast). Zum Schlu� solltest du auf <b>Beende Installation</b> klicken und du wirst ins Admin Control Panel (ACP) weitergeleitet wo du alle Icy Phoenix Einstellungen managen kannst.<br />Bitte �berpr�fe die Allgemeinen Einstellungen und mache die ben�tigten �nderungen.<br /><br />Danke f�r deine Wahl von Icy Phoenix und bedenke immer deine Datenbank von Zeit zu Zeit zu sichern.<br /><br />';

$lang['Unwriteable_config'] = 'Momentan ist deine Konfigurationsdatei nicht beschreibbar. Du kannst dir eine Kopie der Datei runterladen, wenn du auf den entsprechenden Link unten klickst. Du solltest diese Datei ins selbe Verzeichnis wie Icy Phoenix hochladen. Wenn dies getan ist, solltest du dich mit deinem Administrator-Benutzernamen und Passwort, die du auf der letzten Seite angegeben hast, einloggen und den Administrationsbereich betreten, um die allgemeinen Einstellungen zu pr�fen. Einen entsprechenden Link findest du am Ende jeder Seite deines Forums. Danke, dass du dich f�r Icy Phoenix entschieden hast.';
$lang['Download_config'] = 'Konfigurationsdatei herunterladen';

$lang['ftp_choose'] = 'W�hle Downloadmethode';
$lang['ftp_option'] = '<br />Da FTP Erweiterungen in dieser Version von PHP aktiviert sind, k�nntest du die M�glichkeit haben, die Konfigurationsdatei automatisch per FTP vor Ort zu �ndern.';
$lang['ftp_instructs'] = 'Du hast dich dazu entschieden, die Datei automatisch und vor Ort zu �ndern. Bitte gib die unten geforderten Informationen an, um den Prozess zu starten. Beachte, dass der FTP-Pfad der exakte Pfad zu deinem phpBB2-Ordner sein muss.';
$lang['ftp_info'] = 'Eingabe der FTP Informationen';
$lang['Attempt_ftp'] = 'Die Konfigurationsdatei vor Ort umschreiben';
$lang['Send_file'] = 'Ich m�chte, dass mir die Datei geschickt wird. Ich werde sie manuell hochladen.';
$lang['ftp_path'] = 'FTP-Pfad zum Icy Phoenix';
$lang['ftp_username'] = 'Dein FTP Benutzername';
$lang['ftp_password'] = 'Dein FTP Passwort';
$lang['Transfer_config'] = 'Transfer beginnen';
$lang['NoFTP_config'] = 'Der Versuch, die Konfigurationsdatei vor Ort umzuschreiben, scheiterte. Bitte lade die Datei runter und lade sie manuell hoch.';

$lang['Install'] = 'Installation';
$lang['Upgrade'] = 'Upgrade';

$lang['Install_Method'] = 'W�hle eine Installations-Methode aus';
$lang['Install_No_Ext'] = 'Die PHP-Konfiguration auf deinem Server unterst�tzt nicht den gew�hlten Datenbank-Typ';
$lang['Install_No_PCRE'] = 'Icy Phoenix ben�tigt das Perl-Compatible Regular Expressions Module f�r PHP, was von deiner PHP-Konfiguration anscheinend nicht unterst�tzt wird.';

//
// Admin Userlist Start
//
$lang['Userlist'] = 'Benutzerliste';
$lang['Userlist_description'] = 'Zeigt eine komplette Liste der Benutzer und erlaubt das Ausf�hren verschiedener Aktionen mit den Benutzerkonten';

$lang['Add_group'] = 'Zu einer Gruppe hinzuf�gen';
$lang['Add_group_explain'] = 'W�hle die Gruppe aus, zu welcher der Benutzer hinzugef�gt werden soll';

$lang['Open_close'] = 'Auf-/Zuklappen';
$lang['Active'] = 'Aktiv';
$lang['Group'] = 'Gruppe(n)';
$lang['Rank'] = 'Rang';
$lang['Last_activity'] = 'Letzte Aktivit�t';
$lang['Never'] = 'Niemals';
$lang['User_manage'] = 'Verwalten';
$lang['Find_all_posts'] = 'Finde alle Beitr�ge';

$lang['Select_one'] = 'W�hle eine Aktion';
$lang['Ban'] = 'Bannen';
$lang['Activate_deactivate'] = 'Aktivieren/Deaktivieren';

$lang['User_id'] = 'Benutzer ID';
$lang['User_level'] = 'Benutzer Level';
$lang['Ascending'] = 'Aufsteigend';
$lang['Descending'] = 'Absteigend';
$lang['Show'] = 'Zeigen';
$lang['All'] = 'Alle';

$lang['Member'] = 'Mitglied';
$lang['Pending'] = 'Wartend';

$lang['Confirm_user_ban'] = 'Bist du sicher, dass du die ausgew�hlten Benutzer bannen m�chtest?';
$lang['Confirm_user_deleted'] = 'Bist du sicher, dass du die ausgew�hlten Benutzer l�schen m�chtest?';

$lang['User_status_updated'] = 'Benutzerstatus wurde erfolgreich aktualisiert.';
$lang['User_banned_successfully'] = 'Benutzer wurde(n) erfolgreich gebannt.';
$lang['User_deleted_successfully'] = 'Benutzer wurde(n) erfolgreich gel�scht.';
$lang['User_add_group_successfully'] = 'Benutzer wurde(n) erfolgreich zur Gruppe hinzugef�gt.';

$lang['Click_return_userlist'] = '%sKlicke hier%s um zur Benutzerliste zur�ckzukehren.';
//
// Admin Userlist End

//
// Version Check
//
$lang['Version_up_to_date'] = 'Dein Forum ist auf dem neuesten Stand; es sind keine Updates f�r deine phpBB-Version verf�gbar.';
$lang['Version_up_to_date_ip'] = 'Dein Forum ist auf dem neuesten Stand; es sind keine Updates f�r deine Icy Phoenix Version verf�gbar.';
$lang['Version_not_up_to_date'] = 'Dein Forum ist <b>nicht</b> auf dem neuesten Stand. Es sind Updates f�r deine phpBB-Version verf�gbar, bitte besuche <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a>, um die aktuellste Version zu erhalten.';
$lang['Version_not_up_to_date_ip'] = 'Es sind Updates f�r deine Icy Phoenix Version verf�gbar, bitte besuche <a href="http://www.icyphoenix.com/" target="_new">Icy Phoenix</a>, um die aktuelleste Version zu erhalten.';
$lang['Latest_version_info'] = 'Die neueste verf�gbare Version ist <b>phpBB %s</b>.';
$lang['Current_version_info'] = 'Du verwendest <b>phpBB %s</b>.';
$lang['Connect_socket_error'] = 'Die Verbindung zum phpBB-Server konnte nicht aufgebaut werden. Es trat folgender Fehler auf:<br />%s';
$lang['Connect_socket_error_ip'] = 'Es konnte keine Verbindung zum Icy Phoenix Server hergestellt werden';
$lang['Socket_functions_disabled'] = 'Die Socket-Funktionen konnten nicht benutzt werden.';
$lang['Mailing_list_subscribe_reminder'] = 'Um immer die neuesten Informationen zu Updates von phpBB zu erhalten, solltest du dich <a href="http://www.phpbb.com/support/" target="_new">beim phpBB Newsletter anmelden</a>.';
$lang['Version_information'] = 'Versions-Information';
$lang['Version_not_checked'] = 'Versionspr�fung ist zur Zeit deaktiviert. Bitte besuche die Icy Phoenix Support Foren f�r Informationen �ber neue Versionen.';

// Advanced Signature Divider Control
$lang['sig_title'] = 'Signaturteiler Einstellungen';
$lang['sig_divider'] = 'Signaturteiler';
$lang['sig_explain'] = 'Hier kannst du einstellen, mit welchen Zeichen die Signatur von den Beitr�gen geteilt wird.';

//
// That's all Folks!
// -------------------------------------------------

// Start add - Birthday MOD
$lang['Birthday_required'] = 'Die Eingabe des Geburtstags erforderlich machen';
$lang['Enable_birthday_greeting'] = 'Geburtstagsgr��e aktivieren';
$lang['Birthday_greeting_expain'] = 'Benutzer, die einen Geburtstag angegeben haben, k�nnen bei Einloggen in das Forum begl�ckw�nscht werden.';
$lang['Next_birthday_greeting'] = 'Jahr des n�chsten Geburtstags-Popups';
$lang['Next_birthday_greeting_expain'] = 'Dieses Feld gibt an, in welchem Jahr der Benutzer die n�chste Gl�ckwunschbenachrichtigung bekommt.';
$lang['Wrong_next_birthday_greeting'] = 'Das angegebene Jahr des n�chsten Geburtstags-Popups war nicht korrekt. Bitte nochmal eingeben.';
$lang['Max_user_age'] = 'H�chstalter';
$lang['Min_user_age'] = 'Mindestalter';
$lang['Birthday_lookforward'] = 'Geburtstagsvorschau';
$lang['Birthday_lookforward_explain'] = 'Anzahl der Tage, die vorausgesehen werden soll';
// End add - Birthday MOD


// Start add - Yellow card admin MOD
$lang['Max_user_bancard'] = 'Maximale Anzahl der Warnungen';
$lang['Max_user_bancard_explain'] = 'Wenn ein Benutzer mehr gelbe Karten bekommt, als hier angegeben sind, wird er gesperrt.';
$lang['ban_card'] = 'Gelbe Karte';
$lang['ban_card_explain'] = 'Der Benutzer wird gesperrt, wenn er mehr als %d gelbe Karten hat.';
$lang['Greencard'] = 'Benutzer Reaktivieren';
$lang['Bluecard'] = 'Beitrags-Meldungen';
$lang['Bluecard_limit'] = 'Intervall der Beitrags-Meldungen';
$lang['Bluecard_limit_explain'] = 'Die Moderatoren werden alle x Beitrags-Meldungen erneut benachrichtigt.';
$lang['Bluecard_limit_2'] = 'Erst-Benachrichtigung';
$lang['Bluecard_limit_2_explain'] = 'Die Moderatoren erhalten die erste Benachrichtigung �ber einen Beitrag, wenn x Benachrichtigungen eingegangen sind.';
$lang['Report_forum'] = 'Benachrichtigungs-Forum';
$lang['Report_forum_explain'] = 'In diesem Forum k�nnen die Beitrags-Benachrichtigungen gelistet werden. Gib hier die ID des Forums an bzw 0 um diese Funktion abzuschalten.';


// Start add - Last visit MOD
$lang['Hidde_last_logon'] = 'Anzeige des letzten Besuchs ausblenden';
$lang['Hidde_last_logon_expain'] = 'Wenn auf JA gesetzt, wird die Anzeige des letzten Besuchs f�r alle Benutzer bis auf Administratoren ausgeblendet.';
// End add - Last visit MOD

// Start add - Online/Offline/Hidden Mod
$lang['Online_time'] = 'Onlinestatus Zeit';
$lang['Online_time_explain'] = 'Anzahl in Sekunden, die ein Benutzer Online gezeigt wird (verwende keinen Wert kleiner als 60).';
$lang['Online_setting'] = 'Online Status Einstellungen';
$lang['Online_color'] = 'Online Textfarbe';
$lang['Offline_color'] = 'Offline Textfarbe';
$lang['Hidden_color'] = 'Versteckt Textfarbe';
// End add - Online/Offline/Hidden Mod

// Disallow other admins to delete or edit the first admin MOD
$lang['L_LISTOFADMINEDIT'] = 'Blockierte Zugriffe auf den ersten Admin Account';
$lang['L_LISTOFADMINEDITEXP'] = 'Diese Liste beinhaltet die blockierten Zugriffe auf den ersten Admin Account im Forum. Diese Administratoren haben versucht, das Profil des ersten Admins im Forum zu bearbeiten, oder ihn zu l�schen oder zum normalen Nutzer herunterzustufen. Eine �nderung des Profils und/oder der Berechtigungen fand nicht statt und wurde erfolgreich blockiert. Diese Liste kann nur vom ersten Admins des Forums gel�scht werden.';
$lang['L_LISTOFADMINEDITUSERS'] = 'Liste blockierter Zugriffe auf den ersten Admin Account';
$lang['L_LISTOFADMINTEXT'] = 'erfolgreich blockierter Zugriff erfolgte �ber';
$lang['L_DELETEMSG'] = 'Eintr�ge l�schen';
$lang['L_DELETESUCMSG'] = 'Die Eintr�ge wurden erfolgreich gel�scht';
$lang['L_ADMINEDITMSG'] = 'Du hast keine Berechtigung, das Profil und/oder die Berechtigungen des ersten Admin Accounts im Forum zu bearbeiten. <br /><br />Der Zugriffsversuch wurde gespeichert und erfolgreich blockiert!';
// Begin Thanks Mod
$lang['use_thank'] = 'Erlaube Dankesbeitr�ge';
// End Thanks Mod
// Default avatar MOD, By Manipe (Begin)
$lang['Default_avatar'] = 'Standardavatar festlegen';
$lang['Default_avatar_explain'] = 'Dies gibt Benutzern, die noch keinen Avatar ausgew�hlt haben, einen Standardavatar. Lege Standardavatare f�r Benutzer und G�ste fest und w�hle aus, ob diese nur f�r Benutzer oder G�ste oder f�r Beide angezeigt werden sollen.';
$lang['Default_avatar_guests'] = 'G�ste';
$lang['Default_avatar_users'] = 'Benutzer';
$lang['Default_avatar_both'] = 'Beide';
$lang['Default_avatar_none'] = 'Niemand';
// Default avatar MOD, By Manipe (End)


// Start Optimize Database

$lang['Optimize'] = 'Optimieren';
$lang['Optimize_explain'] = 'Hier kannst du den Inhalt der Tabellen deiner Datenbank optimieren. Auf diese Weise kannst du Daten eliminieren, die leeren Platz verbraucht.<br />Diese Operation sollte regelm��ig durchgef�hrt werden, um deine Datenbank schnell und zuverl�ssig zu halten.';
$lang['Optimize_DB'] = 'Datenbank optimieren';
$lang['Optimize_Enable_cron'] = 'Cron aktivieren';
$lang['Optimize_Cron_every'] = 'Cron alle';
$lang['Optimize_month'] = 'Monat';
$lang['Optimize_2weeks'] = '2 Wochen';
$lang['Optimize_week'] = 'Woche';
$lang['Optimize_3days'] = '3 Tage';
$lang['Optimize_day'] = 'Tag';
$lang['Optimize_6hours'] = '6 Stunden';
$lang['Optimize_hour'] = 'Stunde';
$lang['Optimize_30minutes'] = '30 Minuten';
$lang['Optimize_20seconds'] = '20 Sekunden (nur zum Testen)';
$lang['Optimize_Current_time'] = 'Aktuelle Zeit';
$lang['Optimize_Next_cron_action'] = 'n�chste Cron Aktion';
$lang['Optimize_Performed_Cron'] = 'ausgef�hrte Cron';
$lang['Optimize_Show_not_optimized'] = 'Zeige nur nicht optimierte Tabellen';
$lang['Optimize_Show_begin_for'] = 'Zeige nur Tabellen die beginnen mit';
$lang['Optimize_Configure'] = 'Konfigurieren';
$lang['Optimize_Table'] = 'Tabelle';
$lang['Optimize_Record'] = 'Record';
$lang['Optimize_Type'] = 'Typ';
$lang['Optimize_Size'] = 'Gr��e';
$lang['Optimize_Status'] = 'Status';
$lang['Optimize_CheckAll'] = 'Alle ausw�hlen';
$lang['Optimize_UncheckAll'] = 'alle abw�hlen';
$lang['Optimize_InvertChecked'] = 'Auswahl umkehren';
$lang['Optimize_return'] = '%sKlicke hier%s, um zur Datenbankoptimierung zur�ckzukehren.';
$lang['Optimize_success'] = 'Die Datenbank wurde erfolgreich optimiert.';
$lang['Optimize_NoTableChecked'] = '<b>Keine</b> Tabellen ausgew�hlt';

// End Optimize Database
// Start add - Global announcement MOD
$lang['Globalannounce'] = 'Globale Ank�ndigung';
// End add - Global announcement MOD


//
// google bot detector by pukapuka
//
$lang['Detector'] = 'Google Bot Detektor';
$lang['Detector_Explain'] = 'Der Google Bot Detektor erkennt Besuche des Google Bots auf deiner Seite.<br /><br />';
$lang['Detector_ID'] = '#';
$lang['Detector_Time'] = 'Zeit';
$lang['Detector_Url'] = 'URL';
$lang['Detector_Clear'] = 'Alles l�schen';
$lang['Detector_No_Bot'] = 'Kein Bot gefunden';
$lang['Detector_Cleared'] = 'Erkannte Bots erfolgreich gel�scht.';
$lang['Click_Return_Detector'] = '%sKlicke hier%s, um zum Bot Detektor zur�ckzukehren.';

// addded to Auto group mod
$lang['group_count'] = 'Anzahl erforderlicher Beitr�ge';
$lang['group_count_max'] = 'Anzahl maximaler Beitr�ge';
$lang['group_count_updated'] = '%d Mitglieder wurden entfernt, %d Mitglieder wurden zur Gruppe hinzugef�gt';
$lang['Group_count_enable'] = 'F�ge Benutzer automatisch hinzu, wenn sie schreiben';
$lang['Group_count_update'] = 'Hinzuf�gen/Aktualisieren neuer Nutzer';
$lang['Group_count_delete'] = 'L�schen/Aktualisieren alter Nutzer';
$lang['User_allow_ag'] = 'Aktiviere Auto Gruppe';
$lang['group_count_explain'] = 'Wenn Benutzer mehr als diese Anzahl Beitr�ge geschrieben haben <i>(in beliebigen Foren)</i>, werden sie automatisch zu dieser Benutzergruppe hinzugef�gt<br/> Das trifft nur zu, wenn "'.$lang['Group_count_enable'].'" aktiviert ist.';

// Start add - Bin Mod
$lang['Bin_forum'] = 'Papierkorb-Forum';
$lang['Bin_forum_explain'] = 'F�ge die Forum ID des Forums ein, in welches die Papierkorbbeitr�ge verschoben werden sollen. Trage 0 ein, um die Funktion zu deaktivieren. Du solltest die Forumsberechtigungen bearbeiten und Benutzern das Lesen/Schreiben/Antworten nicht gestatten... oder den Zugang zum Forum ganz verwehren. Nur Moderatoren oder Administratoren sollten derartige Rechte in diesem Forum besitzen.';
// End add - Bin Mod

// Begin Quick Title Edition Mod 1.0.0 by Xavier Olive.
$lang['Title_infos'] = 'Quick Titel Management';
$lang['Must_select_title'] = 'Du musst ein Quick Titel add-on ausw�hlen';
$lang['Title_updated'] = 'Quick Titel Add-on aktualisiert';
$lang['Title_added'] = 'Quick Titel Add-on hinzugef�gt';
$lang['Click_return_titleadmin'] = '%sKlicke hier%s, um zum Quick Titel Management zur�ckzukehren.';
$lang['Title_removed'] = 'Quick Titel Add-on entfernt';
$lang['Quick_title_explain'] = 'Hier kannst du kurze Texte erstellen, welche du dann per Klick auf einen Button zum Thementitel hinzuf�gen kannst.</br>Wenn du m�chtest, dass der Name des Benutzers, der die �nderung durchgef�hrt hat angezeigt wird, setzte einfach %mod% an die gew�nschte Stelle. Zum Beispiel wird [Link OK | gepr�ft von %mod%] als [Link OK | gepr�ft von ModeratorName] angezeigt. Auf die gleiche Art und Weise kannst du auch das Datum einf�gen, indem du %date% an die gew�nschte Stelle setzt.';
$lang['Title_head'] = 'Quick Titel Add-on';
$lang['Title_auth'] = 'Berechtigungen';
$lang['Administrator'] = 'Administrator';
$lang['Topic_poster'] = 'Themenstarter';
$lang['Add_new_title_info'] = 'Quick Titel Add-on hinzuf�gen';
$lang['Title_perm_info'] = 'Berechtigungen';
$lang['Title_perm_info_explain'] = 'Benutzer mit diesem Level k�nnen das Quick Title Add-on nutzen.';
$lang['Title_info'] = 'Quick Titel Add-on';
// End Quick Title Edition Mod 1.0.0 by Xavier Olive.

// Limit Image Width MOD
$lang['Available'] = 'verf�gbar';
$lang['Unavailable'] = 'nicht verf�gbar';
$lang['LIW_title'] = 'Bildbreiten-Begrenzung';
$lang['LIW_admin_explain'] = 'Diese Seite erlaubt dir das Ein- und Ausschalten der Bildbreitenbegrenzung, sowie das einstellen der maximalen Bildbreite f�r jedes im Forum eingestellte Bild. Sollte die SQL-Tabelle, welche die Abmessungen aller Bilder enth�lt, zu gro� werden, kannst du sie mit einem Klick auf \'Cache-Tabelle leeren\' leeren.<br /><br />Du kannst auch sehen, ob es m�glich ist, die Bildbreitenbegrenzung auf deinem Webserver zu nutzen, indem du in der \'Kompatibilit�tspr�fung\' Box unten nachschaust.';
$lang['LIW_compatibility_checks'] = 'Kompatibilit�tspr�fung';
$lang['LIW_mod_config'] = 'MOD Konfiguration';

$lang['LIW_config_updated'] = 'Die Bildbreitenbegrenzungs-Konfiguration wurde erfolgreich aktualisiert.';
$lang['LIW_cache_emptied'] = 'Die Cache-Tabelle wurde erfolgreich geleert.';
$lang['LIW_click_return_config'] = '%sKlicke hier%s, um zur Bildbreitenbegrenzungs-Konfigurationsseite zur�ckzukehren.';

$lang['LIW_getimagesize'] = 'getimagesize() URL Unterst�tzung';
$lang['LIW_getimagesize_explain'] = 'Verf�gbar ab PHP 4.0.5';
$lang['LIW_getimagesize_available'] = 'Der MOD ist in der Lage, die Bildabmessungen zu erkennen.';
$lang['LIW_getimagesize_unavailable'] = 'Der MOD ist nicht in der Lage zu erkennen, ob ein Bild zu gro� ist, deshalb wird <i>jedes</i> Bild angepasst.';

$lang['LIW_urlaware'] = 'URL-aware fopen wrappers';
$lang['LIW_urlaware_explain'] = 'Setze allow_url_fopen auf Yes in deiner php.ini';
$lang['LIW_urlaware_available'] = 'Der MOD ist in der Lage, einen Fingerabdruck f�r Bilder zu erstellen und kann die Bildabmessungen im Cache speichern.';
$lang['LIW_urlaware_unavailable'] = 'Der MOD ist nicht in der Lage, einen Fingerabdruck f�r Bilder zu erstellen und kann die Bildabmessungen nicht im Cache speichern.';

$lang['LIW_openssl'] = 'openSSL Erweiterung geladen';
$lang['LIW_openssl_explain'] = 'Lade die openssl.dll Erweiterung in deiner php.ini';
$lang['LIW_openssl_available'] = 'Der MOD ist in der Lage Bildabmessungen von https:// Adressen zu lesen und diese im Cache zu speichern.';
$lang['LIW_openssl_unavailable'] = 'Der MOD ist nicht in der Lage Bildabmessungen von https:// Adressen zu lesen und kann diese nicht im Cache zu speichern.';

$lang['LIW_enable'] = 'Gr��e von Bildern in Beitr�gen �ndern';
$lang['LIW_enable_explain'] = 'W�hle %s um dem Mod die �nderung der Bildgr��e in Beitr�gen zu erlauben.'; // Set to $lang['Yes'] to ....
$lang['LIW_sig_enable'] = 'Gr��e von Bildern in Signaturen �ndern';
$lang['LIW_sig_enable_explain'] = 'W�hle %s um dem Mod die �nderung der Bildgr��e in Signaturen zu erlauben.';
$lang['LIW_attach_enable'] = 'Gr��e von angeh�ngten Bildern �ndern';
$lang['LIW_attach_enable_explain'] = 'W�hle %s um dem Mod die �nderung der Bildgr��e von angeh�ngten Bildern (mittels Attachment Mod) in Beitr�gen zu erlauben.';
$lang['LIW_max_width'] = 'Maximale Bildbreite';
$lang['LIW_max_width_explain'] = 'Gib die maximale Bildbreite (in Pixeln) eines im Beitrag mittels [img] Tags eingestellten Bildes an.';
$lang['LIW_empty_cache'] = 'Bildabmessungs-Cache leeren';
$lang['LIW_empty_cache_explain'] = 'Die Cache Tabelle enth�lt zurzeit <b>%s</b> Eintr�ge'; // Your cache table currently contains <b>312</b> records
$lang['LIW_empty_cache_note'] = 'Beachte, dass das L�schen der Cache-Tabelle dazu f�hrt, dass der MOD alle Bildabmessungen erneut einliest, was zu einer vor�bergehenden Verlangsamung beim laden der Themen f�hren kann.';
$lang['LIW_empty_cache_button'] = 'Cache-Tabelle leeren';

// News
$lang['xs_news_settings'] = 'News Einstellungen';
$lang['xs_news_show'] = 'News Banner anzeigen?';
$lang['xs_news_show_ticker'] = 'News Ticker anzeigen?';
$lang['xs_news_show_ticker_explain'] = 'Das ist der Hauptschalter. Wenn du hier \'Nein\' einstellst, werden keine Ticker mehr angezeigt. Hast du \'Ja\' eingestellt, kannst du die Anzeige der einzelnen Ticker individuell konfigurieren.';
$lang['xs_news_show_ticker_subtitle'] = 'Ticker Untertitel anzeigen?';
$lang['xs_news_show_ticker_subtitle_explain'] = 'W�hle Ja, um \'News Tickers\' �ber den News Tickern anzuzeigen.';
$lang['xs_news_show_news_subtitle'] = 'News Untertitel anzeigen?';
$lang['xs_news_show_news_subtitle_explain'] = 'W�hle Ja, um \'News Items\' �ber den News Items anzuzeigen.';
$lang['xs_news_dateformat'] = 'Datumsformat';
$lang['xs_news_dateformat_helper'] = 'Verwendet dieses Format: %s';

// Bantron Mod : Begin
$lang['Bantron'] = 'Bantron';
$lang['BM_Title'] = 'Bantron';
$lang['BM_Explain'] = 'Auf dieser Seite kannst du die Sperren im Forum anzeigen, bearbeiten, hinzuf�gen und l�schen.';

$lang['BM_Show_bans_by'] = 'Zeige gesperrte bei';
$lang['BM_All'] = 'Alle';
$lang['BM_Show'] = 'Anzeigen';

$lang['BM_IP'] = 'IP';
$lang['BM_Last_visit'] = 'Letzter Besuch';
$lang['BM_Banned'] = 'Gesperrt';
$lang['BM_Expires'] = 'Abgelaufen';
$lang['BM_By'] = 'bei';
$lang['BM_Reasons'] = 'Grund';

$lang['BM_Add_a_new_ban'] = 'Neue Sperre hinzuf�gen';
$lang['BM_Delete_selected_bans'] = 'L�sche ausgew�hlte Sperren';

$lang['BM_Private_reason'] = 'Privater Grund';
$lang['BM_Private_reason_explain'] = 'Der hier eingegebene Grund f�r die Sperrung von Benutzernamen, E-Mails, und/oder IP Adressen ist nur als Notiz f�r die Administration gedacht.';

$lang['BM_Public_reason'] = '�ffentlicher Grund';
$lang['BM_Public_reason_explain'] = 'Der hier eingegebene Grund f�r die Sperrung von Benutzernamen, E-Mails, ond/oder IP Adressen wird den gesperrten Benutzern angezeigt, wenn sie versuchen, auf das Forum zuzugreifen.';
$lang['BM_Generic_reason'] = 'Allgemeiner Grund';
$lang['BM_Mirror_private_reason'] = 'Spiegelt privaten Grund wieder';
$lang['BM_Other'] = 'Anderer';

$lang['BM_Expire_time'] = 'Ablaufzeit';
$lang['BM_Expire_time_explain'] = 'Mit der Angabe eines Datums, entweder relativ zum aktuellen Datum oder ein absolutes Datum, wird die Sperre nach diesem Zeitpunkt aufgehoben.';
$lang['BM_Never'] = 'Niemals';
$lang['BM_After_specified_length_of_time'] = 'Nach angegebener Zeitspanne';
$lang['BM_Minutes'] = 'Minute(n)';
$lang['BM_Hours'] = 'Stunde(n)';
$lang['BM_Days'] = 'Tag(e)';
$lang['BM_Weeks'] = 'Woche(n)';
$lang['BM_Months'] = 'Monat(e)';
$lang['BM_Years'] = 'Jahr(e)';
$lang['BM_After_specified_date'] = 'Nach bestimmtem Datum';
$lang['BM_AM'] = 'AM';
$lang['BM_PM'] = 'PM';
$lang['BM_24_hour'] = '24-Stunden';

$lang['BM_Ban_reasons'] = 'Sperrungsgr�nde';
// Bantron Mod : End

$lang['board_disable_message'] = 'Schalte die Nachricht f�r die Deaktivierung des Forums standardm��ig aus.';
$lang['board_disable_message_texte'] = 'Meldung die angezeigt wird, wenn das Forum deaktiviert ist.';

// Start Edit Notes MOD
$lang['Edit_notes_settings'] = 'Bearbeitungsnotizen-Einstellungen';
$lang['Edit_notes_enable'] = 'Bearbeitungsnotizen aktivieren';
$lang['Edit_notes_enable_explain'] = 'Aktiviert oder deaktiviert Bearbeitungsnotizen im Forum';
$lang['Max_edit_notes'] = 'Maximale Anzahl Bearbeitungsnotizen';
$lang['Max_edit_notes_explain'] = 'Gibt die maximale Anzahl von Bearbeitungsnotizen pro Beitrag an.';
$lang['Edit_notes_permissions'] = 'Bearbeitungsnotizen-Berechtigungen';
$lang['Edit_notes_permissions_explain'] = 'Gibt an, welche Benutzer Bearbeitungsnotizen verwenden k�nnen.';
$lang['Edit_notes_admin'] = 'Nur Administratoren';
$lang['Edit_notes_staff'] = 'Team (Admins und Mods)';
$lang['Edit_notes_reg'] = 'Registrierte Benutzer (auch Admins und Mods)';
$lang['Edit_notes_all'] = 'Alle Benutzer (G�ste, registrierte Benutzer, Admins und Mods)';
// End Edit Notes MOD

// BEGIN Disable Registration MOD
$lang['registration_status'] = 'Registrierungen deaktivieren';
$lang['registration_status_explain'] = 'Dieser Mod deaktiviert alle Neuregistrierungen in deinem Forum.';
$lang['registration_closed'] = 'Grund f�r Registrierungsdeaktivierung';
$lang['registration_closed_explain'] = 'Dieser Texte erkl�rt, warum Registrierungen deaktiviert sind. Er wird angezeigt, wenn ein neuer Nutzer versucht, sich zu registrieren. Lasse dieses Feld leer, um einen Standard-Text anzuzeigen';
// END Disable Registration MOD

$lang['Gender_required'] = 'Zwinge Mitglieder, ihr Geschlecht anzugeben';

//admin user list mail
$lang['Usersname'] = 'Benutzername';
$lang['Admin_Users_List_Mail_Title'] = 'Benutzer E-Mail-Liste';
$lang['Admin_Users_List_Mail_Explain'] = 'Hier ist eine Liste der E-Mail Adressen deiner Benutzer';

// Start add - Forum notification MOD
$lang['Forum_notify'] = 'Erlaube Forumsbenachrichtigung';
$lang['Forum_notify_enabled'] = 'Erlauben';
$lang['Forum_notify_disabled'] = 'Nicht erlauben';
// End add - Forum notification MOD

$lang['Smilie_table_columns'] = 'Smiley-Tabelle Spalten';
$lang['Smilie_table_rows'] = 'Smiley-Tabelle Zeilen';
$lang['Smilie_window_columns'] = 'Smiley-Fenster Spalten';
$lang['Smilie_window_rows'] = 'Smiley-Fenster Zeilen';
$lang['Smilie_single_row'] = 'Smiley-Anzeige pro Zeile (z.B.: Schnellantwort Smiley Nummer)';

$lang['Auth_Rating'] = 'Bewertungen';

// Gravatars
$lang['Enable_gravatars'] = 'Gravatare aktivieren';
$lang['Gravatar_rating'] = 'Maximale Gravatar Bewertung';
$lang['Gravatar_rating_explain'] = 'Lies die <a href="http://www.gravatar.com/rating.php" target="_blank">Bewertungsrichtlinien</a> f�r mehr Informationen. W�hle \'keine\' f�r keine Beschr�nkung.';
$lang['Gravatar_default_image'] = 'Gravatar Standardbild';
$lang['Gravatar_default_image_explain'] = 'Wenn kein Gravatar gefunden wurdem wird dieses Bild angezeigt. Der Pfad zum Bild ist relativ zum Icy Phoenix Root-Verzeichnis. Lasse dieses Feld leer, um kein Bild anzuzeigen.';

// Admin Account Actions
$lang['Account_actions'] = 'Benutzer-Konto Aktionen';
$lang['Account_inactive_explain'] = 'Hier kannst du alle Benutzer sehen, die nicht aktiviert sind und auf ihre Aktivierung warten. Du kannst diese Benutzerkonten aktivieren oder l�schen.<br />Weiterhin kannst du Befugnisse einstellen und Profile bearbeiten wenn du auf die verschiedenen Links klickst.';
$lang['Account_active_explain'] = 'Hier kannst du alle Benutzer sehen, die aktive Mitglieder sind. Du kannst diese Benutzerkonten aktivieren oder l�schen.<br />Weiterhin kannst du Befugnisse einstellen und Profile bearbeiten wenn du auf die verschiedenen Links klickst.';
$lang['Account_active'] = 'Aktive Benutzer';
$lang['Account_inactive'] = 'Inaktive Benutzer';
$lang['Account_activate'] = 'Markierte aktivieren';
$lang['Account_deactivate'] = 'Markierte deaktivieren';
$lang['Account_none'] = 'Er warten keine Benutzer auf Aktivierung.';
$lang['Account_total_user'] = 'Benutzeranzahl: <b>%d</b> Benutzer';
$lang['Account_total_users'] = 'Benutzeranzahl: <b>%d</b> Benutzer';
$lang['Account_activation'] = 'Aktivierungsmethode';
$lang['Account_awaits'] = 'Wartet auf Aktivierung seit';
$lang['Account_registered'] = 'Registriert seit';
$lang['Account_delete_users'] = 'Bist du sicher dass du diese Benutzer l�schen willst?';
$lang['Account_delete_user'] = 'Bist du sicher dass du diesen Benutzer l�schen willst?';
$lang['Account_sort_letter'] = 'Zeige nur Benutzerkonten beginnend mit';
$lang['Account_others'] = 'andere';
$lang['Account_all'] = 'alle';
$lang['Account_year'] = 'Jahr';
$lang['Account_years'] = 'Jahre';
$lang['Account_week'] = 'Woche';
$lang['Account_weeks'] = 'Wochen';
$lang['Account_day'] = 'Tag';
$lang['Account_days'] = 'Tage';
$lang['Account_hour'] = 'Stunde';
$lang['Account_hours'] = 'Stunden';
$lang['Account_user_activated'] = 'Der Benutzer wurde aktiviert.';
$lang['Account_users_activated'] = 'Die Benutzer wurden aktiviert.';
$lang['Account_user_deactivated'] = 'Der Benutzer wurde deaktiviert.';
$lang['Account_users_deactivated'] = 'Die Benutzer wurden deaktiviert.';
$lang['Account_user_deleted'] = 'Der Benutzer wurde gel�scht.';
$lang['Account_users_deleted'] = 'Die Benutzer wurden gel�scht.';
$lang['Account_activated'] = 'Benutzer-Konto Aktivierung';
$lang['Account_activated_text'] = 'Dein Benutzer-Konto wurde aktiviert';
$lang['Account_deactivated'] = 'Benutzer-Konto Deaktivierung';
$lang['Account_deactivated_text'] = 'Dein Benutzer-Konto wurde deaktiviert';
$lang['Account_deleted'] = 'Benutzer-Konto L�schung';
$lang['Account_deleted_text'] = 'Dein Benutzer-Konto wurde gel�scht';
$lang['Account_notification'] = 'Benachrichtigungsmail gesendet.';

// Acronyms
$lang['Acronyms_title'] = 'Abk�rzungs-Verwaltung';
$lang['Acronyms_explain'] = 'Hier kannst du Abk�rzungen hinzuf�gen, bearbeiten und l�schen. Die hier eingetragenen Abk�rzungen werden dann automatisch in den Beitr�gen hervorgehoben und deren Bedeutung wird mittels Hover-Funktion angezeigt.';
$lang['Acronym'] = 'Abk�rzung';
$lang['Acronyms'] = 'Abk�rzungen';
$lang['Edit_acronym'] = 'Abk�rzung bearbeiten';
$lang['Description'] = 'Bedeutung';
$lang['Add_new_acronym'] = 'Neue Abk�rzung hinzuf�gen';
$lang['Update_acronym'] = 'Abk�rzung aktualisieren';

$lang['Must_enter_acronym'] = 'Du musst eine Abk�rzung und deren Bedeutung eingeben.';
$lang['No_acronym_selected'] = 'Keine Abk�rzung zum bearbeiten ausgew�hlt';

$lang['Acronym_updated'] = 'Die ausgew�hlte Abk�rzung wurde erfolgreich aktualisiert';
$lang['Acronym_added'] = 'Die Abk�rzung wurde erfolgreich hinzugef�gt';
$lang['Acronym_removed'] = 'Die ausgew�hlte Abk�rzung wurde entfernt';

$lang['Click_return_acronymadmin'] = '%sKlicke hier%s, um zur Abk�rzungs-Verwaltung zur�ckzukehren.';
$lang['Prune_shouts'] = 'Shouts automatisch l�schen';
$lang['Prune_shouts_explain'] = 'Anzahl Tage, bevor Shouts gel�scht werden. Gib 0 ein, um diese Funktion zu deaktivieren.';

$lang['MOD_OS_ForumRules'] = 'Olympus-Style Forum Regeln';
$lang['Forum_rules'] = 'Forenregeln';
$lang['Rules_display_title'] = 'Zeige Titel in der Forenregeln-BOX an?';
$lang['Rules_custom_title'] = 'Eigener Titel';
$lang['Rules_appear_in'] = 'Diese Regeln werden angezeigt beim...';
$lang['Rules_in_viewforum'] = 'anzeigen des Forums';
$lang['Rules_in_viewtopic'] = 'anzeigen von Themen im Forum';
$lang['Rules_in_posting'] = 'schreiben/antworten in diesem Forum';

$lang['Php_Info_Explain'] = 'Diese Seite zeigt Information �ber die auf diesem Server installierte PHP Version. Sie beinhaltet Details �ber Module, verf�gbare Variablen und Standard-Einstellungen. Diese Informationen k�nnten beim Diagnostizieren von Problemen hilfreich sein. Beachte, dass einige Webhoster aus Sicherheitsgr�nden die hier angezeigten Informationen minimieren und dir somit gegebenenfalls nicht alles angezeigt werden. Wir empfehlen dir, keine Informationen der Seite an andere rauszugeben, au�en vielleicht an Tema Mitglieder des Supportforums.';

// XS2 Forum Header
$lang['IcyPhoenix_Main'] = 'Icy Phoenix Homepage';
$lang['IcyPhoenix_Download'] = 'Icy Phoenix Download';
$lang['IcyPhoenix_Code_Changes'] = 'Code Changes Mod';
$lang['IcyPhoenix_Updates'] = 'Icy Phoenix Updates';
$lang['PhpBB_Upgrade'] = 'phpBB Upgrade';
$lang['Header_Welcome'] = 'Willkommen im Icy Phoenix Administrationszentrum';

$lang['Prune_users'] = 'Benutzer l�schen';
$lang['Prune_Overview'] = 'Pruning �bersicht';
$lang['Prune_title_explain'] = 'Hier kannst du die Einstellungen zum automatischen L�schen (Pruning) f�r jedes Forum bearbeiten.';
$lang['Prune_forum'] = 'Forum';
$lang['Prune_active'] = 'Automatisches L�schen aktivieren';
$lang['Prune_freq'] = 'Alle entfernen';
$lang['Prune_check'] = 'Alle ausw�hlen';
$lang['Prune_days'] = 'Tage';
$lang['Prune_days_explain'] = '* Entferne Themen ohne Antworten.';
$lang['Click_return_admin_po'] = '%sKlicke hier%s, um zur Pruning �bersicht zur�ckzukehren.';
$lang['Prune_update'] = 'Die Einstellungen zum automatischen L�schen wurden erfolgreich aktualisiert.';

$lang['Admin_notepad_title'] = 'Notizblock';
$lang['Admin_notepad_explain'] = 'Auf diesem Notizblock k�nnen sich Administratoren Nachrichten hinterlassen.';
$lang['Allow_generator'] = 'Avatar-Generator aktivieren';
$lang['Avatar_generator_template_path'] = 'Avatar Generator Template Pfad';
$lang['Avatar_generator_template_path_explain'] = 'Pfad unterhalb des Icy Phoenix Root-Verzeichnisses f�r Template Bilder, z.B. images/avatars/generator_templates';

// Start Autolinks Mod
$lang['Autolink_first'] = 'Verlinke jedes Schl�sselwort automatisch einmal pro Beitrag';

$lang['Autolinks_title'] = 'Autolinks';
$lang['Autolinks_explain'] = 'Hier kannst du Schl�sselworte, welche in Beitr�gen automatisch in Links umgewandelt werden, hinzuf�gen, bearbeiten oder l�schen. Wenn es sich bei der eingegebenen URL um eine interne Adresse handelt, welche auf ein Forum oder Portal zeigt und du unten &quot;Intern: Ja&quot; ausw�hlst, wird die Session ID mit angeh�ngt.<br /><br /><b>Beispiel:</b> Wenn das <b>Schl�sselwort</b> in einem Beitrag gefunden wird, wird es automatisch mit dem folgenden ersetzt<br /><br />&lt;a href=&quot;<b>URL</b>&quot; title=&quot;<b>Kommentar</b>&quot; style=&quot;<b>Style</b>&quot;&gt;<b>Schl�sselwort</b>&lt;/a&gt;';
$lang['links_keyword'] = 'Schl�sselwort';
$lang['links_title'] = 'Text';
$lang['links_url'] = 'URL';
$lang['links_comment'] = 'Kommentar';
$lang['links_style'] = 'Style';
$lang['links_forum'] = 'Forum f�r Autolink';
$lang['links_forum2'] = 'Forum';
$lang['links_internal'] = 'Intern';
$lang['Autolinks_add'] = 'Autolink hinzuf�gen';
$lang['Add_keyword'] = 'Autolink hinzuf�gen';
$lang['Autolinks_edit'] = 'Autolink bearbeiten';
$lang['Edit_keyword'] = 'Autolink bearbeiten';
//$lang['Delete_link'] = 'Markiere die Box, um den Autolink zu l�schen.';

$lang['Select_all_forums'] = 'Alle Foren';
$lang['Autolink_added'] = 'Autolink erfolgreich hinzugef�gt';
$lang['Autolink_updated'] = 'Autolink erfolgreich aktualisiert';
$lang['Autolink_removed'] = 'Autolink erfolgreich gel�scht';
$lang['No_autolink_selected'] = 'Es wurde kein Autolink zum L�schen ausgew�hlt.';
$lang['No_autolinks'] = 'Es gibt keine Autolinks in der Datenbank.';
$lang['Must_enter_autolink'] = 'Du musst ein Schl�sselwort, Link-Text und eine URL eingeben.';
$lang['Click_return_autolinkadmin'] = '%sKlicke hier%s, um zur Autolink Administration zur�ckzukehren.';
// End Autolinks Mod

// XS BUILD 030

// Login attempts configuration
$lang['Max_login_attempts'] = 'Erlaubte Login-Versuche';
$lang['Max_login_attempts_explain'] = 'Anzahl der erlaubten Login-Versuche, bevor ein Benutzerkonto f�r eine festgelegte Zeit gesperrt wird.';
$lang['Login_reset_time'] = 'Login-Sperrzeit';
$lang['Login_reset_time_explain'] = 'Minuten, die ein Benutzer nach einer �berschreitung der erlaubten Login-Versuche warten muss, bis er sich wieder anmelden kann.';

// XS BUILD 035
// Smilies Order
$lang['position_new_smilies'] = 'Sollen neue Smilies vor oder nach existierenden eingef�gt werden?';
$lang['smiley_change_position'] = 'Einf�geposition �ndern';
$lang['before'] = 'Davor';
$lang['after'] = 'Danach';
$lang['Move_top'] = 'Ganz nach oben';
$lang['Move_end'] = 'Ganz nach unten';

// XS BUILD 037
// Pages Auth
$lang['auth_view_title'] = 'Seitenansicht-Berechtigungen';
$lang['auth_view_portal'] = 'Startseite';
$lang['auth_view_forum'] = 'Forum-�bersicht';
$lang['auth_view_viewf'] = 'Foren ansehen';
$lang['auth_view_viewt'] = 'Themen ansehen';
$lang['auth_view_faq'] = 'FAQ';
$lang['auth_view_memberlist'] = 'Mitgliederliste';
$lang['auth_view_group_cp'] = 'Benutzergruppen';
$lang['auth_view_profile'] = 'Benutzerprofile';
$lang['auth_view_search'] = 'Suche';
$lang['auth_view_album'] = 'Galerie';
$lang['auth_view_links'] = 'Links';
$lang['auth_view_calendar'] = 'Kalender';
$lang['auth_view_attachments'] = 'Anh�nge';
$lang['auth_view_download'] = 'Downloads';
$lang['auth_view_pic_upload'] = 'Bilder Hochladen (Post Icy Images)';
$lang['auth_view_kb'] = 'Wissensdatenbank';
$lang['auth_view_ranks'] = 'R�nge';
$lang['auth_view_statistics'] = 'Statistiken';
$lang['auth_view_recent'] = 'Neueste Themen';
$lang['auth_view_referrers'] = 'Referrers';
$lang['auth_view_rules'] = 'Regeln';
$lang['auth_view_site_hist'] = 'Seiten Historie';
$lang['auth_view_shoutbox'] = 'Shoutbox';
$lang['auth_view_viewonline'] = 'Wer ist Online?';
$lang['auth_view_contact_us'] = 'Kontakt Seite';
$lang['auth_view_ajax_chat'] = 'Chat';
$lang['auth_view_ajax_chat_archive'] = 'Chat Archiv';
$lang['auth_view_custom_pages'] = 'Benutzerdefinierte Seiten';

// XS BUILD 041
// Begin Yahoo Submit Your Site MOD by www.pentapenguin.com
$lang['Yahoo_search'] = 'Yahoo Suche';
$lang['Yahoo_search_settings'] = 'Yahoo Suche Einstellungen';
$lang['Yahoo_search_settings_explain'] = 'Hier kannst Du die Einstellungen f�r den Yahoo Submit Your Site MOD vornehmen. F�r mehr Informationen, schau bitte auf die <a href="http://submit.search.yahoo.com/free/request" target="_blank">Yahoo Submit Your Site Webseite</a>.';
$lang['Yahoo_search_select_forums'] = 'Foren ausw�hlen';
$lang['Yahoo_search_select_forums_explain'] = 'W�hle die Foren aus die in diese Liste eingeschlossen werden sollen. Du kannst soviele Foren ausw�hlen wie Du willst, wenn Du die STRG Taste (Windows) oder Command Taste (Macintosh) gedr�ckt h�ltst. Standardm��ig sind alle �ffentlich sichtbaren Foren ausgew�hlt.';
$lang['Yahoo_search_savepath'] = 'Speicherort der URL Liste';
$lang['Yahoo_search_savepath_explain'] = 'Gib einen Ort an, wo die URL Liste gespeichert werden soll. Gib den Pfad relativ zum Icy Phoenix Root-Verzeichnis an. -- z.B. wenn du die Datei im Cache Ordner unter <b>www.yoursite.com/cache/</b> speicherst, dann gib <b>cache</b> ein. Beachte das Du den CHMOD 777 bei diesem Ordner einstellen musst.';
$lang['Yahoo_search_additional_urls'] = 'Zus�tzliche URLs angeben';
$lang['Yahoo_search_additional_urls_explain'] = 'Gib zus�tzliche URLs an die Yahoo besuchen soll, pro Zeile eine. Du musst die vollst�ndige URL angeben -- z.B. <b>http://www.yoursite.com/yourpage.HTML</b>.';
$lang['Yahoo_search_compress_file'] = 'Die URL Liste komprimieren';
$lang['Yahoo_search_compress_file_explain'] = 'Wenn Du Ja f�r diese Option gew�hlt hast, wird die Liste der URLs mit Gzip komressiert was eine viel kleinere Datei und demzufolge eine kleinere Bandbreite vom Yahoo Bot ergibt. Diese Einstellung funktioniert nicht wenn Dein Server kein Gzip unterst�tzt.';
$lang['Yahoo_search_compression_level'] = 'Kompressions-Level f�r die Datei';
$lang['Yahoo_search_compression_level_explain'] = 'W�hle ein Kompressions-Level f�r die Datei. 9 ist die empfohlene Einstellung, es sei denn Du hast Probleme damit, dann solltest Du einen kleineren Wert einstellen..';
$lang['Yahoo_search_generate_file'] = 'Datei erstellen';
$lang['Yahoo_search_error_no_forums'] = 'Fehler: keine Foren ausgew�hlt. Gehe zur�ck und w�hle mindestens eins aus.';
$lang['Yahoo_search_error_no_gzip'] = 'Fehler: Entweder Du verwendest eine alte PHP Version, oder Dein Webhost st�tzt kein Gzip . Bitte gehe zur�ck und w�hle <b>Nein</b> f�r die <b>Die URL Liste komprimiert</b> Option.';
$lang['Yahoo_search_error_unopenable_file'] = 'Fehler: kann die Datei %s nicht �ffnen.';
$lang['Yahoo_search_error_unwritable_file'] = 'Fehler: kann die Datei %s nicht �berschreiben.';
$lang['Yahoo_search_error_unclosable_file'] = 'Fehler: kann die Datei %s nicht schliessen.';
$lang['Yahoo_search_error_update_sql'] = 'Fehler: kann das Feld: %s nicht aktualisieren.';
$lang['Yahoo_search_error_unknown_file_error'] = 'Fehler: die Datei wurde wegen einem unbekannten Fehler nicht gespeichert.';
$lang['Yahoo_search_file_done'] = 'Die Verarbeitung der URL Listen Datei wurde beendet. Bitte kopiere die folgende URL und f�ge sie in das passende Feld in Yahoo ein:<br /><b>%s</b>';
// Finish Yahoo Submit Your Site MOD by www.pentapenguin.com

// XS BUILD 044

// Bookmark Mod
$lang['Max_bookmarks_links'] = 'Maximale Lesezeichen gesendet im link-tag';
$lang['Max_bookmarks_links_explain'] = 'Anzahl der Lesezeichen gesendet im link-tag am Anfang des Dokuments. Diese Information wird z.B. von Mozilla verwendet. Gib 0 ein um diese Funktion zu deaktivieren.';

$lang['Faq_manager'] = 'FAQ Manager';
$lang['Faq_Rules_manager'] = 'FAQ &amp; Regeln';
$lang['board_rules'] = 'Forum Richtlinien';
$lang['board_faq'] = 'Forum FAQ';
$lang['bbcode_faq'] = 'BBCode FAQ';
$lang['attachment_faq'] = 'Attachment FAQ';
$lang['prillian_faq'] = 'Prillian FAQ';
$lang['bid_faq'] = 'Freunde Liste FAQ';


$lang['Account_active2'] = 'Aktive Benutzer';
$lang['Account_inactive2'] = 'Inaktive Benutzer';

// Search Flood Control - added 2.0.20
$lang['Search_Flood_Interval'] = 'Flood-Intervall f�r Suche';
$lang['Search_Flood_Interval_explain'] = 'Anzahl der Sekunden, die ein Benutzer zwischen Suchanfragen warten muss';
$lang['Confirm_delete_smiley'] = 'Bist Du sicher das dieses Smiley gel�scht werden soll?';
$lang['Confirm_delete_word'] = 'Bist Du sicher das diese Wortzensur gel�scht werden soll?';
$lang['Confirm_delete_rank'] = 'Bist Du sicher das dieser Rang gel�scht werden soll?';

// Custom Profile Fields MOD
$lang['custom_field_notice_admin'] = 'Diese Erkl�rungen sind von Dir oder einem anderen Administrator erstellt worden. F�r mehr Informationen, pr�fe die Erkl�rungen unter den Profilfeldern. Felder die mit * gekennzeichnet sind, sind Pflichtfelder. Felder die mit &dagger; gekennzeichnet sind, sind nur f�r Admins sichtbar.';

$lang['field_deleted'] = 'Das angegebene Feld ist gel�scht worden';
$lang['double_check_delete'] = 'Bist Du sicher das Profil Feld "%s" komplett aus der Datenbank zu entfernen?';

$lang['here'] = 'Hier';
$lang['new_field_link'] = '<a href="' . append_sid("$filename?mode=add&pfid=x") . '">%s</a>';
$lang['edit_field_link'] = '<a href="' . append_sid("$filename?mode=edit&pfid=x") . '">%s</a>';
$lang['index_link'] = '<a href="' . append_sid("admin_profile_fields.$phpEx?mode=edit&pfid=x") . '">%s</a>';
$lang['field_exists'] = 'Dieses Feld existiert bereits.<br /><br />Du kannst versuchen ein ' . sprintf($lang['new_field_link'],'neues') . ' Profil Feld zu erstellen,<br /><br />oder versuchen ein vorhandenes zu ' . sprintf($lang['edit_field_link'],'bearbeiten') . '.';
$lang['click_here_here'] = 'Klicke ' . sprintf($lang['new_field_link'],$lang['here']) . ' um anderes Profil-Feld hinzuzuf�gen,<br /><br />oder klicke ' . sprintf($lang['index_link'],$lang['here']) . ' um zum Admin Index zur�ckzukehren.';
$lang['field_success'] = 'Feld erfolgreich hinzugef�gt!<br /><br />' . $lang['click_here_here'];
$lang['Custom_Profile'] = 'Custom Profil Felder';
$lang['profile_field_created'] = 'Profil Feld erstellt';
$lang['profile_field_updated'] = 'Profil Feld aktualisiert';

$lang['add_field_title'] = 'F�ge spezifische Profil Felder hinzu';
$lang['edit_field_title'] = 'Bearbeite spezifische Profil Felder';
$lang['add_field_explain'] = 'Hier kannst Du neue Felder f�r Deine Benutzer anlegen die in deren Profilen angezeigt werden.';
$lang['edit_field_explain'] = 'Hier kannst Du Felder bearbeiten die Du bereits f�r Deine Benutzer angelegt hast.';

$lang['add_field_general'] = 'Allgemeine Einstellungen';
$lang['add_field_admin'] = 'Administrator Einstellungen';
$lang['add_field_view'] = 'Zeige Einstellungen';
$lang['add_field_text_field'] = 'Text Feld Einstellungen';
$lang['add_field_text_area'] = 'Text Area Einstellungen';
$lang['add_field_radio_button'] = 'Radio Button Einstellungen';
$lang['add_field_checkbox'] = 'Checkbox Einstellungen';

$lang['default_value'] = 'Standard Wert';
$lang['default_value_explain'] = 'Das ist der Standard f�r dieses Feld. Wenn ein Benutzer diesen Wert nicht �ndert, ist das der verwendete Wert. Wenn dies ein erforderliches Feld ist, ist dies der Wert welchen alle vorhandenen Benutzer gesetzt bekommen.';
$lang['default_value_radio_explain'] = 'Trage einen Namen genauso wie im oben angegebenen Verf�gbare Eintr�ge Feld ein.';
$lang['default_value_checkbox_explain'] = 'Gib den Eintrag an der standardm��ig aktiviert ist. Dieser Eintrag muss mit einem oben angegebenen Eintrag �bereinstimmen.';
$lang['max_length'] = 'Maximale L�nge';
$lang['max_length_explain'] = 'Das ist die maximale L�nge f�r dieses Feld. ';
$lang['max_length_value'] = 'Das muss eine Nummer zwischen %d und %d sein.';
$lang['available_values'] = 'Verf�gbare Eintr�ge';
$lang['available_values_explain'] = 'Setze jeden Eintrag auf eine neue Zeile';

$lang['add_field_view_disclaimer'] = 'Alle diese Einstellungen werden als "Nein" behandelt, wenn Benutzern nicht erlaubt ist, dieses Feld anzusehen';

$lang['add_field_name'] = 'Feld Name';
$lang['add_field_name_explain'] = 'Trage den Namen ein, den Du mit diesem Feld verbinden m�chtest.';
$lang['add_field_description'] = 'Feld Beschreibung';
$lang['add_field_description_explain'] = 'Trage eine Beschreibung ein, die Du mit diesem Feld verbinden m�chtest. Er wird in kleinem Text unterhalb des Feldnamens, wie dieser Text ist, angezeigt.';
$lang['add_field_type'] = 'Feld Typ';
$lang['add_field_type_explain'] = 'W�hle den Typ des Profil Feldes das Du hinzuf�gen m�chtest. Beispiele jedes Feldtyps werden ganz rechts angezeigt.';
$lang['edit_field_type_explain'] = 'W�hle den Typ des Profil Feldes das Du �ndern m�chtest. Beispiele jedes Feldtyps werden ganz rechts angezeigt.';
$lang['add_field_required'] = 'Setze als erforderlich';
$lang['add_field_required_explain'] = 'Wenn das Feld als "Erforderlich" gesetzt ist, jeder Benutzer der sich sp�ter registriert <strong>muss</strong> es ausf�llen, und alle vorhandenen Benutzer m�ssen es mit einem Standard Wert ausf�llen.';
$lang['add_field_user_can_view'] = 'Erlaube Benutzern die Ansicht';
$lang['add_field_user_can_view_explain'] = 'Wenn dies auf "Ja" gesetzt ist, ist der Benutzer berechtigt dieses Feld zu sehen und zu bearbeiten. Wenn es auf "Nein" gesetzt ist, k�nnen nur Administratoren diese Feld sehen und bearbeiten. Au�erdem, wenn dieses Feld auf "ja" gesetzt ist, kann es kein erforderliches Feld sein.';
$lang['view_in_profile'] = 'Anzeige im Benutzer Profil';
$lang['profile_locations_explain'] = 'Diese Optionen gelten nur, falls dieses Feld im Benutzer Profil angezeigt wird.';
$lang['contacts_column'] = 'Kontakt Spalte';
$lang['about_column'] = 'Information Spalte';
$lang['view_in_memberlist'] = 'Anzeige in der Mitgliederliste';
$lang['view_in_topic'] = 'Anzeige im Beitrag';
$lang['topic_locations_explain'] = 'Diese Optionen gelten nur, falls dieses Feld in einem Beitrag angezeigt wird.';
$lang['author_column'] = 'Autor Sektion';
$lang['above'] = '�ber ';
$lang['below'] = 'Unter ';

$lang['textarea'] = 'Textarea';
$lang['textarea_example'] = "Das ist ein Beispiel\n   von einer Textarea.";
$lang['text_field'] = 'Text Feld';
$lang['text_field_example'] = 'Das ist ein Beispiel f�r ein Text Feld';
$lang['radio'] = 'Radio Button';
$lang['radio_example'] = 'Das ist ein Beispiel f�r zwei Radio Buttons';
$lang['checkbox'] = 'Checkbox';
$lang['checkbox_example'] = 'Das ist ein Beispiel f�r zwei Checkboxen';

$lang['profile_field_list'] = 'Deine Custom Profil Felder';
$lang['profile_field_list_explain'] = 'Dies sind alle Custom Profil Felder die Du f�r dein Forum erstellt hast, mit Links um diese zu bearbeiten oder zu l�schen.';
$lang['profile_field_id'] = 'ID #';
$lang['profile_field_name'] = 'Feld Name';
$lang['profile_field_action'] = 'Aktion';
$lang['no_profile_fields_exist'] = 'keine Custom Profil Felder vorhanden.';

$lang['enter_a_name'] = 'Du <strong>musst</strong> einen Feldnamen angeben<br /><br />Gehe zur�ck und versuche es erneut.';
// END Custom Profile Fields MOD

// XS BUILD 045
$lang['Add'] = 'Hinzuf�gen';
$lang['split_global_announce'] = 'Trenne Globale Ank�ndigungen';
$lang['split_announce'] = 'Trenne Ank�ndigungen';
$lang['split_sticky'] = 'Trenne Wichtige';
$lang['split_topic_split'] = 'Trenne Themen';
$lang['Announce_settings'] = 'Ank�ndigungs Einstellungen';
$lang['Split_settings'] = 'Trennungs Einstellungen';

// XS BUILD 046
//$lang['Server_Cookies'] = 'Server &amp; Cookies';
$lang['Server_Cookies'] = 'Server Einstellungen';

// XS BUILD 050
$lang['Disable_Registration_IP_Check'] = 'Deaktiviere IP-�berpr�fung in �ffentlichen Blacklist bei Registrierung';
$lang['Disable_Registration_IP_Check_Explain'] = '�berpr�ft jede IP-Adresse bei der Registrierung, wenn nicht deaktiviert. Wird die IP in der Blacklist gefunden, wird die Registrierung blockiert. Das kann auch ungewollt normale Nutzer von der Registrierung ausschlie�en.';
$lang['Config_explain2'] = 'Hier kannst du die Ansicht und Einstellungen f�r den Kalender und die Subforen �ndern.';
$lang['Forum_postcount'] = 'Beitr�ge z�hlen';

// XS BUILD 057
$lang['Use_Captcha'] = 'CAPTCHA aktivieren';
$lang['Use_Captcha_Explain'] = 'Wenn CAPTCHA aktiviert ist, wird ein erweiterter Best�tigungs-Code generiert, welcher f�r Bots schwer auszulesen ist (erfordert GD). Wenn deaktiviert wird der Standard Best�tigungs-Code angezeigt.';
$lang['Sync_Pics_Count'] = 'Wenn du auf <b>JA</b> klickst, werden die Z�hler der pers�nlichen Galerien aller Nutzer synchronisiert.';
$lang['Pics_Count_Synchronized'] = 'Folgende Bildz�hler wurden korrekt synchronisiert:';
$lang['Pics_Count_Not_Synchronized'] = 'Folgende Bildz�hler wurden nicht korrekt synchronisiert:';

// IP - BUILD 001
$lang['Enable_Digests'] = 'Aktiviere Digests';
$lang['Enable_Digests_PHPCron'] = 'Aktiviere Digests PHP Cron';
$lang['Enable_Digests_PHPCron_Explain'] = 'Diese Feature aktiviert eine PHP Emulation des CRON um die E-Mails einmal pro Stunde zu senden. Aber da es PHP Emulation basierend ist, kann es nicht immer exakt ausgef�hrt werden. Das bedeutet, dass die E-Mails manchmal nicht gesendet werden. Wenn dein Server CRON unterst�tzt dann nutze den CRON deines Server anstelle dieser Feature.';

// Ajax Shoutbox - BEGIN
$lang['Shoutbox_config'] = 'AJAX Shoutbox Konfiguration';
$lang['Shout_read_only'] = 'Nur Lesen';
$lang['Displayed_shouts'] = 'Anzuzeigende Shouts';
$lang['Displayed_shouts_explain'] = 'Anzahl der anzuzeigenden Shouts beim Laden der Shoutbox.<br /><i>0 um alle Shouts zu laden.</i>';
$lang['Stored_shouts'] = 'Gespeicherte Shouts';
$lang['Stored_shouts_explain'] = 'Anzahl der Shouts die in der Datenbank bleiben sollen.<br />Dieser Eintrag sollte gleich oder gr��er als die anzuzeigenden Shouts sein.<br /><i>0 speichert alle Shouts.</i>';
$lang['Shout_guest_allowed'] = 'G�ste erlaubt';
$lang['Shoutbox_flood'] = 'Flood Abstand';
$lang['Shoutbox_flood_explain'] = 'Anzahl der Sekunden die ein Benutzer zwischen den Shouts warten muss.';
$lang['Shoutbox_refreshtime'] = 'Aktualisierungs-Rate';
$lang['Shoutbox_refresh_explain'] = 'Zeit der Shoutbox in Millisekunden um neue Nachrichten zu lesen.<br /><i>Dieser Wert sollte �ber 1000 Millisekunden liegen.</i>';
// Ajax Shoutbox - END

//
// ####################### [ Icy Phoenix Options BEGIN ] #####################
//
$lang['MG_Configuration'] = 'Icy Phoenix Einstellungen';
$lang['MG_Configuration_Explain'] = 'Hier kannst Du einige fortgeschrittene Icy Phoenix Einstellungen vornehmen';

$lang['MG_Configuration_Headers_Banners'] = 'Headers &amp; Banners';
$lang['MG_Configuration_Queries'] = 'SQL Optimierung';
$lang['MG_Configuration_Permissions'] = 'Seiten Befugnisse';
$lang['MG_Configuration_Posting'] = 'Beitragseinstellungen';
$lang['MG_SW_Precompiled_Posts_Title'] = 'Vorkompilierte Beitr�ge';
$lang['MG_SW_Logins_Title'] = 'Login Aufzeichnungen';
$lang['MG_SW_Edit_Notes_Title'] = 'Bearbeitungs Notizen';
$lang['MG_Configuration_IMG_Posting'] = 'Bilder in Beitr�gen';

$lang['MG_SW_Top_Header_Bottom_Footer'] = 'Header und Footer HTML Bl�cke';
$lang['MG_SW_Top_HTML_Block'] = 'HTML Header Block';
$lang['MG_SW_Top_HTML_Block_Explain'] = 'Wenn du diese Option aktivierst, wird auf jeder Seite oben der festgelegte HTML-Code angezeigt.';
$lang['MG_SW_Top_HTML_Block_Text'] = 'F�ge hier den HTML-Code f�r den Header ein.';
$lang['MG_SW_Bottom_HTML_Block'] = 'HTML Footer Block';
$lang['MG_SW_Bottom_HTML_Block_Explain'] = 'Wenn du diese Option aktivierst, wird auf jeder Seite unten der festgelegte HTML-Code angezeigt.';
$lang['MG_SW_Bottom_HTML_Block_Text'] = 'F�ge hier den HTML-Code f�r den Footer ein.';

$lang['MG_SW_Header_Footer'] = 'Header und Footer Mitteilungen';
$lang['MG_SW_Header_Table'] = 'Header Tabelle';
$lang['MG_SW_Header_Table_Explain'] = 'Bei Aktivierung dieser Option wird eine Tabelle auf jeder Seite Oben mit einer speziellen Nachricht angezeigt.';
$lang['MG_SW_Header_Table_Text'] = 'F�ge deinen Text hier ein';
$lang['MG_SW_Footer_Table'] = 'Footer Tabelle';
$lang['MG_SW_Footer_Table_Explain'] = 'Bei Aktivierung dieser Option wird eine Tabelle auf jeder Seite Unten mit einer speziellen Nachricht angezeigt.';
$lang['MG_SW_Footer_Table_Text'] = 'F�ge deinen Text hier ein';

$lang['MG_SW_Banner_Title'] = 'Banner Management';
$lang['MG_SW_Header_Banner'] = 'Header Banner';
$lang['MG_SW_Header_Banner_Explain'] = 'Bei Aktivierung dieser Option, wird im Header auf jeder Seite ein Banner angezeigt';
$lang['MG_SW_Header_Banner_Code'] = 'Header Banner Code';
$lang['MG_SW_Header_Banner_Code_Explain'] = 'F�ge hier deinen Banneranzeigen Code ein';
$lang['MG_SW_Viewtopic_Banner'] = 'Viewtopic Banner';
$lang['MG_SW_Viewtopic_Banner_Explain'] = 'Bei Aktivierung dieser Option, wird nach jedem ersten Post eines jeden Themas angezeigt';
$lang['MG_SW_Viewtopic_Banner_Code'] = 'Viewtopic Banner Code';
$lang['MG_SW_Viewtopic_Banner_Code_Explain'] = 'F�ge hier deinen Banneranzeigen Code ein';

$lang['MG_SW_Empty_Precompiled_Posts'] = 'Leere vorkompilierte Beitr�ge';
$lang['MG_SW_Empty_Precompiled_Posts_Explain'] = 'Diese Funktion leert alle vorkompilierten Beitr�ge.';
$lang['MG_SW_Empty_Precompiled_Posts_Success'] = 'Vorkompilierte Beitr�ge korrekt geleert.';
$lang['MG_SW_Empty_Precompiled_Posts_Fail'] = 'Fehler beim Leeren der vorkompilierten Beitr�ge.';

$lang['MG_FNF_Header'] = 'Schnell-Einstellungen';
$lang['MG_FNF_Header_Explain'] = 'Auf diser Seite kannst du schnell und einfach einige Schnell-Einstellungen f�r dein Forum vornehmen. Diese Voreinstellungen wurden f�r Benutzer erstellt, um einfach eine Massen�nderung an den Einstellungen vorzunehmen, ohne jede Einstellung einzeln f�r sich �ndern zu m�ssen. Diese Voreinstellungen k�nnen als Grundlage benutzt werden, um sie danach den pers�nlichen Bed�rfnissen anzupassen: z.B. kannst du "Schnell und aufgebracht" ausw�hlen und dann die Einstellungen �ndern, die du nicht magst.<br /><br /><span class="text_red"><b>ACHTUNG, wenn du einmal eine Schnell-Einstellung ausgew�hlt hast, kannst du sie nicht mehr automatisch r�ckg�ngig machen. Du mu�t sie dann manuell wieder ausw�hlen.</b></span>';
$lang['MG_FNF_Options_Set'] = 'Schnell-Einstellungen';
$lang['MG_FNF_FNF'] = 'Schnell und aufgebracht';
$lang['MG_FNF_FNF_Explain'] = 'Diese Einstellung erh�ht die Geschwindigkeit deines Forums, da viele der Funktionen, welche eine hohe CPU-Belastung oder DB-Zugriffe ben�tigen, deaktiviert werden. Dies ist eine gute Anfangseinstellung f�r eine schnelles Forum.';
$lang['MG_FNF_MGS'] = 'Mighty Gorgon\'s Empfehlung';
$lang['MG_FNF_MGS_Explain'] = 'Diese Einstellung ist ausgewogen und f�r die meisten Seiten zu empfehlen. Einigen Funktionen bleiben aktiviert, w�hrend andere mit hoher CPU-Auslastung deaktiviert sind.';
$lang['MG_FNF_Full_Features'] = 'Alle Funktionen';
$lang['MG_FNF_Full_Features_Explain'] = 'W�hle diese Einstellung aus, wenn du keine Bandbreitenbeschr�nkung hast oder wenn du alle Icy Phoenix Funktionen haben m�chtest. Es kann allerdings sein, dass einige dieser Funktionen nicht mit deinem Server kompatibel sind.';

$lang['MG_SW_ACRONYMS'] = 'Acronyms deaktivieren';
$lang['MG_SW_ACRONYMS_Explain'] = 'Diese Option deaktiviert die Acronyms-Analyse';
$lang['MG_SW_AUTOLINKS'] = 'Autolinks deaktivieren';
$lang['MG_SW_AUTOLINKS_Explain'] = 'Diese Option deaktiviert die Autolinks-Analyse';
$lang['MG_SW_CENSOR'] = 'Wortzensur deaktivieren';
$lang['MG_SW_CENSOR_Explain'] = 'Diese Option deaktiviert die Wortzensur-Analyse';

$lang['MG_SW_No_Right_Click'] = 'Block Rechts Klick';

$lang['Click_return_config_mg'] = 'klicke %shier%s um zu den Icy Phoenix Einstellungen zur�ckzukehren';

/*
$lang['MG_SW_'] = '';
*/
//
// ####################### [ Icy Phoenix Options END ] #######################
//

/* lang_postcount.php - BEGIN */
$lang['Postcounts'] = 'Beitragsz�hler Verwaltung';
$lang['Post_count_explain'] = 'Hier kannst du den Beitragsz�hler f�r einen bestimmten Benutzer anpassen.';
$lang['Modify_post_counts'] = 'Beitragsz�hler bearbeiten';
$lang['Post_count_changed'] = 'Der Beitragsz�hler des Benutzers wurde erfolgreich bearbeitet.';
$lang['Click_return_posts_config'] = '%sKlicke hier%s, um zur Beitragsz�hler-Verwaltung zur�ckzukehren.';
$lang['Modify_post_count'] = 'Beitragsz�hler bearbeiten';
$lang['Edit_post_count'] = 'Beitragsz�hler von <b>%s</b> bearbeiten';
$lang['Post_count'] = 'Anzahl der Mitteilungen';
/* lang_postcount.php - END */

/* lang_megamail.php - BEGIN */
$lang['Megamail_Explain'] = 'Hier kannst du eine E-Mail an alle Benutzer oder an alle Benutzer einer Gruppe schicken. Diese geschieht normalerweise, indem eine E-Mail �ber die Forums-Email-Adresse gesendet wird, auf der alle Empf�nger dieser E-Mail als Blind Carbon Copy (BCC - Blindkopie) eingetragen sind.<br />
Dieses modifizierte Script sendet diese E-Mail in mehreren Batches. Dies sollte Timeouts und Serverlastprobleme umgehen. Der Status des Massen-Email-Sendens wird in der Datenbank gespeichert. Du kannst dieses Fenster schlie�en, um das Massen-Email-Senden zu pausieren (das aktuelle Batch wird noch abgearbeitet). Du kannst sp�ter dort weitermachen, wo du aufgeh�rt hast.<br />
<b>Wenn HTML Emails aktiviert sind, solltest Du Emails unter Verwendung des HTML Codes schreiben, &lt;br /&gt; f�r ein Zeilenumbruch verwenden.</b>';
$lang['megamail_header'] = 'Deine Email-Sessions';
$lang['megamail_id'] = 'Mail-ID';
$lang['megamail_batchstart'] = 'Bearbeitet';
$lang['megamail_batchsize'] = 'Mails pro Batch';
$lang['megamail_batchwait'] = 'Pause';
$lang['megamail_created_message'] = 'Die Massen-Mail wurde in der Datenbank gespeichert.<br /><br/> Um das Senden zu starten, %sklicke hier%s oder warte, bis du per Meta-Refresh dahin weitergeleitet wirst...';
$lang['megamail_send_message'] = 'Das aktuelle Batch (%s - %s) wurde gesendet.<br /><br/>Um mit dem Senden fortzufahren, %sklicke hier%s oder warte, bis du per Meta-Refresh dahin weitergeleitet wirst...';
$lang['megamail_status'] = 'Status';
$lang['megamail_proceed'] = '%sJetzt fortfahren%s';
$lang['megamail_done'] = 'FERTIG';
$lang['megamail_none'] = 'Es wurden keine Eintr�ge gefunden.';
/* lang_megamail.php - END */

/* lang_admin_voting.php - BEGIN */
$lang['Admin_Vote_Explain'] = 'Umfrage-Ergebnisse (wer hat abgestimmt und wie).';
$lang['Admin_Vote_Title'] = 'Umfrage-Administration';
$lang['Vote_id'] = '#';
$lang['Poll_topic'] = 'Umfrage-Thema';
$lang['Vote_username'] = 'W�hler';
$lang['Vote_end_date'] = 'Umfragedauer';
$lang['Sort_vote_id'] = 'Umfrage ID';
$lang['Sort_poll_topic'] = 'Umfragethema';
$lang['Sort_vote_start'] = 'Startdatum';
$lang['Submit'] = 'Absenden';
$lang['Select_sort_field'] = 'Sortierfeld ausw�hlen';
$lang['Sort_ascending'] = 'Aufsteigend';
$lang['Sort_descending'] = 'Absteigend';
/* lang_admin_voting.php - END */

/* lang_admin_gd_info.php - BEGIN */
$lang['GD_Title'] = 'GD Info';
$lang['NO_GD'] = 'kein GD';
$lang['GD_Description'] = 'Hier kannst du Informationen �ber die aktuell installierte Version der GD Bibliothek abrufen.';
$lang['GD_Freetype_Support'] = 'Freetype Fonts Unterst�tzung:';
$lang['GD_Freetype_Linkage'] = 'Freetype Link Typ:';
$lang['GD_T1lib_Support'] = 'T1lib Unterst�tzung:';
$lang['GD_Gif_Read_Support'] = 'Gif Read Unterst�tzung:';
$lang['GD_Gif_Create_Support'] = 'Gif Create Unterst�tzung:';
$lang['GD_Jpg_Support'] = 'Jpg/Jpeg Unterst�tzung:';
$lang['GD_Png_Support'] = 'Png Unterst�tzung:';
$lang['GD_Wbmp_Support'] = 'WBMP Unterst�tzung:';
$lang['GD_XBM_Support'] = 'XBM Unterst�tzung:';
$lang['GD_Jis_Mapped_Support'] = 'Japanisch Font Unterst�tzung:';
$lang['GD_True'] = 'Ja';
$lang['GD_False'] = 'Nein';
/* lang_admin_gd_info.php - END */

/* lang_admin_captcha.php - BEGIN */
$lang['VC_Captcha_Config'] = 'CAPTCHA Konfiguration';
$lang['captcha_config_explain'] = 'Hier kannst du das Aussehen des Bildes bestimmen, das bei aktivierter Visuellen Best�tigung den Registrierungscode anzeigt.<br />Bedenke bitte das die Lesbarkeit des Best�tigungs-Codes, extrem erschwert oder sogar unm�glich werden kann.';
$lang['VC_active'] = 'Visuelle Best�tigung ist aktiviert!';
$lang['VC_inactive'] = 'Visuelle Best�tigung ist nicht aktiviert!';
$lang['background_configs'] = 'Hintergrund';
$lang['Click_return_captcha_config'] = 'Klick %shier%s um zur CAPTCHA Konfiguartion zur�ckzukehren';

$lang['CAPTCHA_width'] = 'Breite des CAPTCHA';
$lang['CAPTCHA_height'] = 'H�he des CAPTCHA';
$lang['background_color'] = 'Hintergrundfarbe';
$lang['background_color_explain'] = 'Angabe in Hexadezimaler schreibweise (z.B. #0000FF f�r Blau).';
$lang['pre_letters'] = 'Anzahl der Schattenzeichen';
$lang['pre_letters_explain'] = '';
$lang['great_pre_letters'] = 'Schattenzeichen vergr��ern';
$lang['great_pre_letters_explain'] = '';
$lang['Random'] = 'Zuf�llig';
$lang['random_font_per_letter'] = 'Zuf�lliger Schriftsatz pro Zeichen';
$lang['random_font_per_letter_explain'] = 'F�r jedes Zeichen wird ein anderer Schriftsatz benutzt.';

$lang['back_chess'] = 'Schachmuster';
$lang['back_chess_explain'] = 'F�llt den kompletten Hintergrund mit 16 Vierecken.';
$lang['back_ellipses'] = 'Ovale und Kreise';
$lang['back_arcs'] = 'Gebogene Linien';
$lang['back_lines'] = 'Linien';
$lang['back_image'] = 'Hintergrundbild';
$lang['back_image_explain'] = '(Diese Funktion ist derzeitig noch nicht integriert)';

$lang['foreground_lattice'] = 'Vordergrundgitter';
$lang['foreground_lattice_explain'] = '(breite x h�he)<br />Generiert ein Gitter �ber dem CAPTCHA';
$lang['foreground_lattice_color'] = 'Gitterfarbe';
$lang['foreground_lattice_color_explain'] = $lang['background_color_explain'];
$lang['gammacorrect'] = 'Kontrastkorrektur';
$lang['gammacorrect_explain'] = '(0 = aus)<br />ACHTUNG!!! Eine �nderungen des Wertes hat direkte auswirkung auf die Lesbarkeit des CAPTCHA!!';
$lang['generate_jpeg'] = 'Bildformat';
$lang['generate_jpeg_explain'] = 'Das JPEG Format hat eine h�here Kompression als PNG und kann, anhand der Qualit�tseinstellung (max 95%), einen direkten einfluss auf die Lesbarkeit aus�ben.';
$lang['generate_jpeg_quality'] = 'Qualit�t';
/* lang_admin_captcha.php - END */

/* lang_admin_topic_shadow.php - BEGIN */
$lang['Del_Before_Date'] = 'L�sche alle Shadow Topics bevor %s<br />'; // %s = insertion of date
$lang['Deleted_Topic'] = 'L�sche Shadow Topic %s<br />'; // %s = topic name
$lang['Affected_Rows'] = '%d bekannte Eintr�ge sind betroffen<br />'; // %d = affected rows (not avail with all databases!)
$lang['Delete_From_Date'] = 'Alle Shadow Topics, die vor dem eingegebenen Datum erstellt wurden, werden entfernt.';
$lang['Delete_Before_Date_Button'] = 'L�sche alle vor Datum';
$lang['No_Shadow_Topics'] = 'Keine Shadow Topics gefunden.';
$lang['Topic_Shadow'] = 'Topic Shadow';
$lang['TS_Desc'] = 'Erlaubt das Entfernen von Shadow Topics ohne das eigentliche Thema zu l�schen. Shadow Topics werden erstellt, wenn ein Thema in ein anderes Forum verschoben wird und du ausw�hlst, einen Link im Original-Forum zu belassen.';
$lang['Month'] = 'Monat';
$lang['Day'] = 'Tag';
$lang['Year'] = 'Jahr';
$lang['Clear'] = 'S�ubern';
$lang['Resync_Ran_On'] = 'Resync gelaufen in %s<br />'; // %s = insertion of forum name
$lang['Version'] = 'Version';

$lang['Title'] = 'Titel';
$lang['Moved_To'] = 'Verschoben nach';
$lang['Moved_From'] = 'Verschoben von';

/* Modes */
$lang['topic_time'] = 'Themen-Zeit';
$lang['topic_title'] = 'Thementitel';

/* Errors */
$lang['Error_Month'] = 'Deine Eingabe muss zwischen 1 und 12 liegen.';
$lang['Error_Day'] = 'Der eingegebene Tag muss zwischen 1 und 31 liegen.';
$lang['Error_Year'] = 'Das eingegebene Jahr muss zwischen 1970 und 2038 liegen.';
$lang['Error_Topics_Table'] = 'Fehler beil Zugriff auf die Themen-Tabelle.';

//Special Cases, Do not change for another language
$lang['ASC'] = $lang['Sort_Ascending'];
$lang['DESC'] = $lang['Sort_Descending'];
/* lang_admin_topic_shadow.php - END */

/* lang_admin_rebuild_search.php - BEGIN */
$lang['Rebuild_search'] = 'Suche aufbauen';
$lang['Rebuild_search_desc'] = 'Damit wird jeder Beitrag in deiner Knowledge Base indiziert und die Suchetabellen neu aufgebaut. Dies kann einige Zeit dauern. Verlasse diese Seite nicht, bis der Vorgang abgeschlossen ist.';
$lang['Post_limit'] = 'Beitrags-Limit';
$lang['Time_limit'] = 'Zeit-Limit';
$lang['Refresh_rate'] = 'Aktualisierungsrate';

$lang['Next'] = 'N�chster';
$lang['Finished'] = 'Fertig';
/* lang_admin_rebuild_search.php - END */

/* lang_admin_faq_editor.php - BEGIN */
$lang['faq_editor'] = 'Sprache bearbeiten';
$lang['faq_editor_explain'] = 'Dieses Modul erlaub es Dir, Deine Anh�nge, BBCode und Foren FAQs zu bearbeiten. Du solltest den Bereich <b>phpBB 2 Issues</b> nicht entfernen oder die Beschreibung �ndern.';

$lang['faq_select_language'] = 'W�hle die Sprache aus, die Du bearbeiten m�chtest.';
$lang['faq_retrieve'] = 'Datei herunterladen';

$lang['faq_block_delete'] = 'Bist Du sicher, dass Du diesen Block entfernen willst?';
$lang['faq_quest_delete'] = 'Bist Du sicher, dass Du diese Frage (und seine Antwort) entfernen m�chtest?';

$lang['faq_quest_edit'] = 'Frage & Antwort bearbeiten';
$lang['faq_quest_create'] = 'Neue Frage & Antwort erstellen';

$lang['faq_quest_edit_explain'] = 'Editiere die Frage und die Antwort. �ndere den Block, wenn Du magst.';
$lang['faq_quest_create_explain'] = 'Schreibe nun die neue Frage und die neue Antwort und dr�cke danach auf absenden.';

$lang['faq_block'] = 'Block';
$lang['faq_quest'] = 'Frage';
$lang['faq_answer'] = 'Antwort';

$lang['faq_block_name'] = 'Block Name';
$lang['faq_block_rename'] = 'Block umbenennen';
$lang['faq_block_rename_explain'] = '�ndere den Namen des Blocks';

$lang['faq_block_add'] = 'Block hinzuf�gen';
$lang['faq_quest_add'] = 'Frage hinzuf�gen';

$lang['faq_no_quests'] = 'Keine Fragen in dem Block. Das verhindert, dass jegliche Bl�cke nach diesem angezeigt werden k�nnen. L�sche den Block oder f�ge eine oder mehrer Fragen hinzu.';
$lang['faq_no_blocks'] = 'Keine Bl�cke definiert. F�ge einen neuen Block hinzu, indem Du ihm unterstehend eine Bezeichnung gibst.';

$lang['faq_write_file'] = 'Die Sprachdatei kann nicht beschrieben werden!';
$lang['faq_write_file_explain'] = 'Du musst die Sprachdateien in language/lang_german/ und allen anderen Sprachen <i>beschreibbar</i> machen, um dieses Tool zu benutzen. Das bedeutet, dass Du den <b>chmod Modus auf 666</b> setzen musst. Dies k�nnen die meisten FTP Programme. Auch kannst Du den chmod via telnet oder SSH anpassen.';
/* lang_admin_faq_editor.php - END */

/* lang_admin_rules_editor.php - BEGIN */
$lang['rules_editor'] = 'Bearbeite Sprache';
$lang['rules_editor_explain'] = 'Dieses Modul erlaubt Dir Deine Forum Richtlinien zu bearbeiten oder neu anzuordnen.';

$lang['rules_select_language'] = 'W�hle die Sprache der Datei die Du �ndern m�chtest';
$lang['rules_retrieve'] = 'Datei herunterladen';

$lang['rules_block_delete'] = 'Bist Du Dir sicher diesen Block zu l�schen?';
$lang['rules_quest_delete'] = 'Bist Du Dir sicher diese Frage (und deren Antwort) zu l�schen?';

$lang['rules_quest_edit'] = 'Bearbeite Frage & Antwort';
$lang['rules_quest_create'] = 'Erstelle Frage & Antwort';

$lang['rules_quest_edit_explain'] = 'Bearbeite die Frage und Antwort. �ndere den Block wenn Du willst.';
$lang['rules_quest_create_explain'] = 'Gib die neue Frage und Antwort ein und klicke auf Senden.';

$lang['rules_block'] = 'Block';
$lang['rules_quest'] = 'Frage';
$lang['rules_answer'] = 'Antwort';

$lang['rules_block_name'] = 'Block Name';
$lang['rules_block_rename'] = 'Block umbenennen';
$lang['rules_block_rename_explain'] = '�ndert den Namen des Blocks in der Datei';

$lang['rules_block_add'] = 'Block hinzuf�gen';
$lang['rules_quest_add'] = 'Frage hinzuf�gen';

$lang['rules_no_quests'] = 'Keine Fragen in diesem Block. Das verhindert die Anzeige aller m�glichen nachfolgenden Bl�cke. L�sche den Block oder f�ge eine oder mehr Fragen hinzu.';
$lang['rules_no_blocks'] = 'Keine Blocks festgelegt. F�ge einen neuen Block hinzu, indem Du unten den Namen eingibst.';

$lang['rules_write_file'] = 'Konnte nicht zur Sprach-Datei schreiben!';
$lang['rules_write_file_explain'] = 'Du musst die Sprachdateien in language/lang_german/ und allen anderen Sprachen <i>beschreibbar</i> machen, um dieses Tool zu benutzen. Das bedeutet, dass Du den <b>chmod Modus auf 666</b> setzen musst. Dies k�nnen die meisten FTP Programme. Auch kannst Du den chmod via telnet oder SSH anpassen.';
/* lang_admin_rules_editor.php - END */

/* lang_admin_priv_msgs.php - BEGIN */
/* Added in 1.6.0 */
$lang['PM_View_Type'] = 'Ansicht';
$lang['Show_IP'] = 'IP-Adresse zeigen';
$lang['Rows_Per_Page'] = 'Zeilen pro Seite';
$lang['Archive_Feature'] = 'Archiv-Erweiterung';
$lang['Inline'] = 'Auf dieser Seite';
$lang['Pop_up'] = 'Als PopUp';
$lang['Current'] = 'Zur Zeit';
$lang['Rows_Plus_5'] = '5 Zeilen mehr';
$lang['Rows_Minus_5'] = '5 Zeilen weniger';
$lang['Enable'] = 'Aktivieren';
$lang['Disable'] = 'Deaktivieren';
$lang['Inserted_Default_Value'] = '%s Konfigurationseintrag noch nicht vorhanden, Standardwert eingesetzt<br />'; // %s = config name
$lang['Updated_Config'] = 'Aktualisiere Konfigurationseintrag %s<br />'; // %s = config item
$lang['Archive_Table_Inserted'] = 'Archivtabelle noch nicht vorhanden, wurde hiermit angelegt<br />';
$lang['Switch_Normal'] = 'In die Standard-Ansicht wechseln';
$lang['Switch_Archive'] = 'In die Archiv-Ansicht wechseln';

/* General */
$lang['Deleted_Message'] = 'Private Nachricht gel�scht - %s <br />'; // %s = PM title
$lang['Archived_Message'] = 'Archivierte Nachricht gel�scht - %s <br />'; // %s = PM title
$lang['Archived_Message_No_Delete'] = 'Kann %s nicht l�schen, da die Nachricht auch zur Archivierung markiert wurde <br />'; // %s = PM title
$lang['Private_Messages'] = 'Private Nachrichten';
$lang['Private_Messages_Archive'] = 'Archivierte Nachrichten';
$lang['Archive'] = 'Archiv';
$lang['To'] = 'An';
$lang['Subject'] = 'Betreff';
$lang['Sent_Date'] = 'Gesendet am';
$lang['From'] = 'Von';
$lang['Sort'] = 'Sortieren';
$lang['Filter_By'] = 'Filtern nach';
$lang['PM_Type'] = 'Ordner';
$lang['Status'] = 'Status';
$lang['No_PMS'] = 'Es sind keine Nachrichten vorhanden, die Ihrer Filterung entsprechen.';
$lang['Archive_Desc'] = 'Hier finden Sie die von Ihnen archivierten Nachrichten. Der Besitzer einer solchen Nachricht (Sender und Empf�nger) hat von dem Augenblick an, in dem Sie seine Nachricht archiviert haben, keinen Zugriff mehr darauf.';
$lang['Normal_Desc'] = 'Alle privaten Nachrichten des Forums k�nnen hier verwaltet werden. Sie k�nnen die Nachrichten der Benutzer lesen, l�schen und archivieren. Im letzten Fall wird die Nachricht des Benutzers ins Archiv des Administrations-Bereichs verschoben.<br /><br /><b>ACHTUNG:</b> Es wird nicht angezeigt, ob die Nachricht Anlagen wie z.B. Bilder enth�lt!';
$lang['Remove_Old'] = 'Nachrichten ohne Besitzer:</a> <span class="gensmall">Nachrichten von gel�schten Benutzern k�nnen manchmal in der Datenbank zur�ckbleiben, welche durch diese Option gel�scht werden.</span>';
$lang['Remove_Sent'] = 'Kopien der gesendeten Nachrichten:</a> <span class="gensmall">Nachrichten in diesem Ordner sind in der Regel �berfl�ssig. Es sei denn, der Besitzer m�chte noch einmal nachvollziehen, was er geschrieben hat. In diesem Fall kann er seine Nachrichten aber auch archivieren und somit diese L�schung umgehen, wenn er m�chte.</span>';
$lang['Removed_Old'] = 'Alle besitzerlosen Nachrichten werden gel�scht...<br />';
$lang['Removed_Sent'] = 'Alle Kopien der gesendeten Nachrichten werden gel�scht...<br />';
$lang['Utilities'] = 'Massen L�schungs Programme';
$lang['Nivisec_Com'] = 'Nivisec.com';

/* PM Types */
$lang['PM_-1'] = 'Alle'; //PRIVMSGS_ALL_MAIL = -1
$lang['PM_0'] = 'Posteingang (gelesen)'; //PRIVMSGS_READ_MAIL = 0
$lang['PM_1'] = 'Postausgang'; //PRIVMSGS_NEW_MAIL = 1
$lang['PM_2'] = 'Gesendet'; //PRIVMSGS_SENT_MAIL = 2
$lang['PM_3'] = 'Posteingang (archiviert)'; //PRIVMSGS_SAVED_IN_MAIL = 3
$lang['PM_4'] = 'Gesendet (archiviert)'; //PRIVMSGS_SAVED_OUT_MAIL = 4
$lang['PM_5'] = 'Posteingang (ungelesen)'; //PRIVMSGS_UNREAD_MAIL = 5

/* Errors */
$lang['Error_Other_Table'] = 'Fehler beim Lesen der erforderlichen Tabelle.';
$lang['Error_Posts_Text_Table'] = 'Fehler beim Abfragen der Private Messages Text Tabelle.';
$lang['Error_Posts_Table'] = 'Fehler beim Abfragen der Private Messages Tabelle.';
$lang['Error_Posts_Archive_Table'] = 'Fehler beim Abfragen der Private Messages Archive Tabelle.';
$lang['No_Message_ID'] = 'Keine Nachrichten ID angegeben';


/* Special Cases, Do not bother to change for another language */
$lang['ASC'] = $lang['Sort_Ascending'];
$lang['DESC'] = $lang['Sort_Descending'];
$lang['privmsgs_date'] = $lang['Sent_Date'];
$lang['privmsgs_subject'] = $lang['Subject'];
$lang['privmsgs_from_userid'] = $lang['From'];
$lang['privmsgs_to_userid'] = $lang['To'];
$lang['privmsgs_type'] = $lang['PM_Type'];
/* lang_admin_priv_msgs.php - END */

/* lang_admin_link.php - BEGIN */
// Categories
$lang['Link_Categories_Title'] = 'Link Kategorie Einstellung';
$lang['Link_Categories_Explain'] = 'In diesem Menu kannst Du die Kategorien verwalten: erstellen, bearbeiten, l�schen, sortieren etc.';
$lang['Category_Permissions'] = 'Kategorie Befugnisse';
$lang['Category_Title'] = 'Kategorie Titel';
$lang['Category_Desc'] = 'Kategorie Beschreibung';
$lang['View_level'] = 'Zeige Level';
$lang['Upload_level'] = 'Upload Level';
$lang['Rate_level'] = 'Bewertungs Level';
$lang['Comment_level'] = 'Kommentar Level';
$lang['Edit_level'] = ' Level bearbeiten';
$lang['Delete_level'] = 'Level l�schen';
$lang['New_category_created'] = 'Die neue Kategorie wurde erfolgreich erstellt';
$lang['Click_return_link_category'] = 'Klicke %shier%s um zur Kategorie Verwaltung zur�ckzukehren';
$lang['Category_updated'] = 'Die Kategorie wurde erfolgreich bearbeitet';
$lang['Delete_Category'] = 'Kategorie l�schen';
$lang['Delete_Category_Explain'] = 'Mit dem nachstehenden Formular kannst du Kategorien zu l�schen';;
$lang['Category_deleted'] = 'Diese Kategorie wurde erfolgreich gel�scht';
$lang['Category_changed_order'] = 'Diese Kategorie wurde erfolgreich verschoben';

// Config
$lang['Link_Config'] = 'Links Konfiguration';
$lang['Link_config_explain'] = 'Hier kannst Du die Einstellungen des Link Mods vornehmen';
$lang['lock_submit_site'] = 'Sperre Benutzer f�r das Eintragen von Seiten';
$lang['allow_guest_submit_site'] = 'Erlaube G�sten, Seiten zu �bermitteln';
$lang['allow_no_logo'] = 'Erlaube die �bermittlung einer Seite ohne Banner';
$lang['site_logo'] = 'Die URL des eigenen Logos (komplette URL)';
$lang['site_url'] = 'Die URL Deiner Webseite';
$lang['width'] = 'Max Breite der Banner';
$lang['height'] = 'Max H�he der Banner';
$lang['linkspp'] = 'Max Links pro Seite';
$lang['interval'] = 'Wie schnell werden die Banner angezeigt';
$lang['display_logo'] = 'Wieviele Banner werden zugleich angezeigt';
$lang['Link_display_links_logo'] = 'Zeige Banner der Links Seite';
$lang['Link_email_notify'] = 'Sende eine EMail an alle Administratoren, wenn ein neuer Link hinzugef�gt wurde';
$lang['Link_pm_notify'] = 'Sende eine PM an alle Administratoren, wenn ein neuer Link hinzugef�gt wurde';
$lang['Link_config_updated'] = 'Links Konfiguration wurde erfolgreich bearbeitet';
$lang['Click_return_link_config'] = 'Klicke %shier%s um zur Links Konfiguration zur�ckzukehren';

// Link_MOD
$lang['Links'] = 'Links Einstellungen';
$lang['Links_explain'] = 'In diesem Menu gibt es eine �bersicht der vorhandenen Links, ebenfalls k�nnen Links bearbeitet oder gel�scht werden.';
$lang['Add_link'] = 'Link hinzuf�gen';
$lang['Add_link_explain'] = '�ber dieses Menu k�nnen Links hinzugef�gt werden.';
$lang['Edit_link'] = 'Link bearbeiten';
$lang['Edit_link_explain'] = '�ber dieses Menu kann ein Link bearbeitet werden, ebenfalls kann man den ';
$lang['Delete_link'] = 'Link l�schen';
$lang['Delete_link_explain'] = '�ber dieses Menu kann ein Link gel�scht werden, ebenfalls kann man den ';
$lang['Link_update'] = 'Link bearbeiten';
$lang['Link_delete'] = 'Link l�schen';
$lang['Link_title'] = 'Name der Seite';
$lang['Link_url'] = 'URL der Seite';
$lang['Link_logo_src'] = 'Logo (88x31 pixel, nicht gr�sser als 10k)';
$lang['Link_category'] = 'Kategorie';
$lang['Link_desc'] = 'Beschreibung der Seite';
$lang['link_hits'] = 'Klicks';
$lang['Link_basic_setting'] = 'Link Einstellungen';
$lang['Link_adv_setting'] = 'Erweiterte Einstellungen';
$lang['Link_active'] = 'Aktiv Status';

$lang['Link_admin_add_success'] = 'Der Link wurde erfolgreich hinzugef�gt';
$lang['Link_admin_add_fail'] = 'Der Link konnte nicht hinzugef�gt werden, bitte versuche es sp�ter wieder';
$lang['Link_admin_update_success'] = 'Der Link wurde erfolgreich bearbeitet';
$lang['Link_admin_update_fail'] = 'Der Link konnte nicht bearbeitet werden, bitte versuche es sp�ter wieder';
$lang['Link_admin_delete_success'] = 'Der Link wurde erfolgreich gel�scht';
$lang['Link_admin_delete_fail'] = 'Der Link konnte nicht gel�scht werden, bitte versuche es sp�ter wieder';
$lang['Click_return_lastpage'] = 'Klicke %shier%s um zur vorherigen Seite zur�ckzukehren';
$lang['Click_return_admin_links'] = 'Klicke %shier%s um zur Links Verwaltung zur�ckzukehren';
$lang['Preview'] = 'Vorschau';
$lang['Search_site'] = 'Suche Seite';
$lang['Search_site_title'] = 'Suche Seite Name/Beschreibung:';
/* lang_admin_link.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

// Icy Phoenix - BUILD 009
$lang['Replace_title'] = 'Ersetzen in Beitr�gen';
$lang['Replace_text'] = 'Von dieser Seite aus kannst Du W�rter oder Zeilen mit "was auch immer" ersetzen. Dies kann aber NICHT mehr r�ckg�ngig gemacht werden!';
$lang['Link'] = 'Link';
$lang['Str_old'] = 'Jetziger Text';
$lang['Str_new'] = 'Ersetzen mit';
$lang['No_results'] = 'Keine Ergebinsse gefunden';
$lang['Replaced_count'] = 'Gesamt aktualisierte Beitr�ge: %s';

// Icy Phoenix - BUILD 016
$lang['group_rank'] = 'Rang';
$lang['group_color'] = 'Farbe';
$lang['group_legend'] = 'Zeige in Legende';
$lang['group_legend_short'] = 'Legende';
$lang['group_main'] = 'Haupt Gruppe';
$lang['group_members'] = 'Mitglieder';
$lang['group_update'] = '�nderungen anwenden';

/* lang_color_groups.php - BEGIN */
$lang['Color_Groups'] = 'Farb-Gruppen';
$lang['Manage_Color_Groups'] = 'Verwalte Farb-Gruppen';
$lang['Add_New_Group'] = 'Neue Gruppe hinzuf�gen';
$lang['Color'] = 'Farbe';
$lang['User_Count'] = 'Benutzer Z�hler';
$lang['Color_List'] = 'Farb Namen Liste:';
$lang['Group_Name'] = 'Gruppen Name';
$lang['Define_Users'] = 'Benutzer definieren';
$lang['Color_Group_User_List'] = 'Farb Gruppen Benutzer Liste';
$lang['Options'] = 'Optionen';
$lang['Example'] = 'Beispiel';
$lang['User_List'] = 'Komplette Benutzer Liste';
$lang['Unassigned_User_List'] = 'Benutzer ohne Gruppe';
$lang['Assigned_User_List'] = 'Benutzer mit Gruppe';
$lang['Add_Arrow'] = 'Zur Liste hinzuf�gen';
$lang['Update'] = 'Aktualisieren';
$lang['Updated_Group'] = 'Aktualisierte Gruppen Benutzer Liste<br />';
$lang['Deleted_Group'] = 'Gel�schte Gruppe.  Alle Benutzer die in diese Gruppe waren sind nun ohne Gruppen Mitgliedschaft<br />';
$lang['Hide'] = 'Verstecken';
$lang['Un-hide'] = 'Sichtbar machen';
$lang['Move_Up'] = 'Nach oben verschieben';
$lang['Move_Down'] = 'Nach unten verschieben';
$lang['Group_Hidden'] = 'Gruppe versteckt<br />';
$lang['Group_Unhidden'] = 'Gruppe sichtbar<br />';
$lang['Groups_Updated'] = 'Gruppen �nderungen wurden aktualisiert<br />';
$lang['Moved_Group'] = 'Verschobene Gruppen Sortierung<br />';


//Descriptions
$lang['Manage_Color_Groups_Desc'] = 'Aktualisiere Gruppen, f�ge neue Gruppen hinzu oder verwalte die Benutzer eine bestimmten Farb Gruppe.<br />Gruppen bei denen Du "Versteckt" gew�hlte hast, werden nicht auf der Hauptindex Liste angezeigt.';
$lang['Color_Group_User_List_Desc'] = 'L�sche oder f�ge Benutzer zu einer bestimmten Farb Gruppe hinzu.';

//Errors
$lang['Error_Group_Table'] = 'Fehler beim Abfragen der arb Gruppen Tabelle.';
$lang['Error_Font_Color'] = '<b><u>Achtung:</b></u>  Die angegebene Schrift Farbe scheint ung�ltig zu sein!';
$lang['Color_Ok'] = 'Die angegebene Schrift Farbe scheint g�ltig zu sein.';
$lang['No_Groups_Exist'] = 'Es bestehen keine Gruppen.';
$lang['Error_Users_Table'] = 'Fehler beim Abfragen der Benutzer Tabelle.';
$lang['Invalid_Group_Add'] = '%s ist ein ung�ltiger oder doppelter Gruppen Name.<br />';

//Dynamic
$lang['Group_Updated'] = 'Aktualisierte Farb Gruppe %s<br />';
$lang['Editing_Group'] = 'Zur Zeit wird die Benutzer Liste f�r %s bearbeitet.';
$lang['Invalid_User'] = '%s ist ein ung�ltiger Benutzer Name, �berspringen<br />';
$lang['Invalid_Order_Num'] = '%s beinhaltet eine ung�ltige Nummer, aber dies wurde behoben.  Bitte versuche deine Sortierung erneut.';

//New for 1.2.0
$lang['Users_List'] = 'Benutzer Liste';
$lang['Groups_List'] = 'Benutzer Gruppen Liste';
$lang['List_Info'] = '<b>Beachte</b>: <ul><li>Halte STRG gedr�ckt wenn Du mehrere Namen ausw�hlen willst. <li>If a user belongs to a user group, and is added to a specific color group, the color group that contains the user will be used; not the one the user group belongs to. <li>The list names are formated as NAME (CURRENT_COLOR_GROUP). There will be no (CURRENT_COLOR_GROUP) if the entry doesn\'t belong to one. <li>If a user is a member of 2 or more user groups, the highest ranking color group will be assigned (you order their appearance on the main page).</ul>';
/* lang_color_groups.php - END */

// Icy Phoenix - BUILD 023
$lang['Empty_Cache_Main_Question'] = 'Wenn du auf JA klickst, werden alle Dateien im cache Verzeichniss gel�scht.<br /><br /><em> Willst du das wirklich tun? </em>';
$lang['Empty_Cache_Posts_Question'] = 'Wenn du auf JA klickst, werden alle vorkompilierten Beitrags-Felder in der Beitrags-Tabelle gel�scht.<br /><br /><em> Willst du das wirklich tun? </em>';
$lang['Empty_Cache_Thumbs_Question'] = 'Wenn du auf JA klickst, werden alle erstellten Thumbnails in den Beitr�gen gel�scht.<br /><br /><em> Willst du das wirklich tun? </em>';
$lang['Empty_Cache_Success'] = 'Cache Ordner erfolgreich geleert.';

$lang['Copy_Auth'] = 'Kopiere Berechtigungen von';
$lang['Copy_Auth_Explain'] = 'Bitte beachte das Du Berechtigungen nur von Foren kopieren kannst, nicht von Kategorien!!!';

// Icy Phoenix - BUILD 027
/* lang_admin_db_backup.php - BEGIN */
$lang['SELECT_ALL'] = 'Select all';
$lang['SELECT_FILE'] = 'Select a file';
$lang['START_BACKUP'] = 'Start backup';
$lang['START_RESTORE'] = 'Start restore';
$lang['STORE_AND_DOWNLOAD'] = 'Store and download';
$lang['STORE_LOCAL'] = 'Store file locally';
$lang['STRUCTURE_ONLY'] = 'Structure only';

// Backup
$lang['ACP_BACKUP'] = 'Datenbank Backup';
$lang['ACP_BACKUP_EXPLAIN'] = 'Hier kannst du alle seitenbezogenen Daten sichern. Du kannst das Ergebniss in deinem <samp>backup/</samp> Ordner speichern, oder direkt herunterladen. Abh�ngig von deinen Server Einstellungen, kannst du dieses Archiv in mehrere Formate komprimieren.';

$lang['BACKUP_OPTIONS'] = 'Backup Optionen';
$lang['BACKUP_TYPE'] = 'Backup-Typ';

$lang['DATABASE'] = 'Databank Werkzeuge';
$lang['DATA_ONLY'] = 'nur Daten';
$lang['DELETE_BACKUP'] = 'L�sche Backup';
$lang['DELETE_SELECTED_BACKUP'] = 'Bist du dir sicher das ausgew�hlte Backup zu l�schen?';
$lang['DESELECT_ALL'] = 'alle abw�hlen';
$lang['DOWNLOAD_BACKUP'] = 'Download Backup';

$lang['FILE_TYPE'] = 'Datei-Typ';
$lang['FULL_BACKUP'] = 'Komplett';

$lang['Backup_Success'] = 'Das Backup wurde erfolgreich erstellt.';
$lang['Backup_Deleted'] = 'Das Backup wurde erfolgreich gel�scht.';

$lang['TABLE_SELECT'] = 'Tabellen-Auswahl';
// Errors
$lang['Table_Select_Error'] = 'Du musst mindestens eine Tabelle ausw�hlen.';

// Restore
$lang['ACP_RESTORE'] = 'Datenbank wiederherstellen';
$lang['ACP_RESTORE_EXPLAIN'] = 'Dies f�hrt eine komplette Wiederherstellung aller deiner Seiten-Tabellen von einer gespeicherten Datei aus. Wenn dein Server es unterst�tzt, kannst du eine gzip oder bzip2 komprimierte Text-Datei verwenden, welche dann automatisch dekomprimiert wird. <strong>ACHTUNG</strong> Dies wird alle vorhandenen Daten �berschreiben. Die Wiederherstellung kann etwas Zeit in Anspruch nehmen, bitte verlasse diese Seite nicht bis die Wiederherstellung komplett ist. Backups werden in dem <samp>backup/</samp> Ordner gespeichert. Backups die nicht mit diesem System erstellt wurden, werden wahrscheinlich nicht funktionieren.';
$lang['RESTORE_OPTIONS'] = 'Wiederherstellungs-Optionen';

$lang['Restore_Success'] = 'Die Datenbank wurde erfolgreich wiederhergestellt.<br />Deine Seite sollte nun wieder auf den Stand des gew�hlten Backups sein.';

// Errors
$lang['No_Backup_Selected'] = 'Du hast kein Backup ausgew�hlt, somit kannst du keins wiederherstellen.';
$lang['Backup_Invalid'] = 'Die gew�hlte Backup-Datei ist ung�ltig.';
$lang['RESTORE_FAILURE'] = 'Die Backup-Datei hat Fehler.';
/* lang_admin_db_backup.php - END */

/*
$lang['MG_SW_'] = '';
*/

//
// ####################### [ Icy Phoenix Options END ] #######################
//

//
// ####################### [ Icy Phoenix Navigation BEGIN ] #######################
//
// Use numbers to sort the ACP Navigation menu
// Numbers have to be changed in all /adm/*.php files too

// Configuration
$lang['1000_Configuration'] = 'Konfiguration';										// admin_board.php, admin_board_extend.php, admin_board_headers_banners.php, admin_board_main.php, admin_board_permissions.php, admin_board_server.php, admin_board_posting.php, admin_board_queries.php, admin_captcha_config.php, admin_upi2db.php
$lang['100_Server_Configuration'] = 'Server Einstellungen';							// admin_board_server.php
$lang['110_Various_Configuration'] = 'Board Einstellungen';							// admin_board.php
$lang['120_MG_Configuration'] = 'Icy Phoenix Einstellungen';						// admin_board_main.php
$lang['130_UPI2DB_Mod'] = 'Ungelesene Beitr�ge';									// admin_upi2db.php
$lang['140_MG_Configuration_Headers_Banners'] = 'Headers &amp; Banner';			// admin_board_headers_banners.php
$lang['145_Captcha_Config'] = 'Visuelle Best�tigung';								// admin_captcha_config.php
$lang['150_Similar_topics'] = '�hnliche Themen';									// admin_similar_topics.php
$lang['160_Title_infos'] = 'Quick Titel Verwaltung';								// admin_quick_title.php
$lang['170_LIW'] = 'Bildbreite begrenzen';											// admin_liw.php
$lang['175_Yahoo_search'] = 'Yahoo Suche';											// admin_yahoo_search.php
$lang['180_MG_Configuration_Permissions'] = 'Seitenbefugnisse';						// admin_board_permissions.php
$lang['190_Clear_Cache'] = 'L�sche Cache';											// admin_board_clearcache.php
$lang['200_Language'] = 'Sprache';													// admin_lang_extend.php
$lang['210_MG_Quick_Settings'] = 'Schnell-Einstellungen';							// admin_board_quick_settings.php

// General
$lang['1100_General'] = 'Allgemein'; 												// admin_acronyms.php, admin_autolinks.php, admin_force_read.php, admin_helpdesk.php, admin_liw.php, admin_force_read.php, admin_mass_email.php, admin_megamail.php, admin_notepad.php, admin_quick_title.php, admin_smilies.php, admin_words.php, admin_yahoo_search.php
$lang['100_Acronyms'] = 'Abk�rzungen';												// admin_acronyms.php
$lang['110_Autolinks'] = 'Autolinks';												// admin_autolinks.php
$lang['130_Mass_Email'] = 'Massen-E-Mail versenden';								// admin_mass_email.php
$lang['140_Mega_Mail'] = 'Mega Mailer';												// admin_megamail.php
$lang['150_FTR_Config'] = 'FTR Konfiguration';										// admin_force_read.php
$lang['160_FTR_Users'] = 'FTR Benutzer';											// admin_force_read.php
$lang['170_Smilies'] = 'Smilies';													// admin_smilies.php
$lang['180_Word_Censor'] = 'Wortzensur';											// admin_words.php
$lang['200_Notepad'] = 'Admin Notizblock';												// admin_notepad.php
$lang['210_Help_Desk'] = 'Hilfestellung';												// admin_helpdesk.php
$lang['240_Replace_title'] = 'Ersetzen in Beitr�gen';								// admin_replace.php

// Forum
$lang['1200_Forums'] = 'Forum Admin';												// admin_forum_prune.php, admin_forumauth_list.php, admin_forums.php, admin_forums_extend.php, admin_prune_overview.php, admin_topic_shadow.php
$lang['100_Manage'] = 'Verwaltung';													// admin_forums.php
$lang['110_Manage_extend'] = 'Sync. Verwaltung';									// admin_forums_extend.php
$lang['120_Permissions_List'] = 'Berechtigungsliste';								// admin_forumauth_list.php
$lang['122_Permissions_Adv'] = 'Berechtigungen ADV';								// admin_forumauth_adv.php
$lang['125_Permissions_Forum'] = 'Berechtigungen';									// admin_forumauth.php
$lang['130_Prune'] = 'Autom. L�schen';												// admin_forum_prune.php
$lang['140_Prune_Overview'] = 'Auto-L�schen �bersicht';								// admin_prune_overview.php
$lang['150_Topic_Shadow'] = 'Schatten Themen';										// admin_topic_shadow.php

// eXtreme Styles
$lang['1300_Extreme_Styles'] = 'Styles &amp; Templates';							// xs_include.php -> $module_name

// DB Maintenance
$lang['1400_DB_Maintenance'] = 'Datenbank';											// admin_bb_db.php, admin_db_generator.php, admin_db_maintenance.php, admin_db_utilities.php
$lang['100_Backup_DB'] = 'Datenbank Backup';										// admin_db_utilities.php
$lang['110_Restore_DB'] = 'Datenbank Wiederherstellung';								// admin_db_utilities.php
$lang['115_Restore_DB'] = 'Datenbank Wiederherstellung aus Datei';						// admin_db_utilities.php
$lang['120_Optimize_DB'] = 'Datenbank optimieren';									// admin_db_utilities.php
$lang['130_DB_Maintenance'] = 'Datenbank-Wartung';									// admin_db_maintenance.php
$lang['140_DB_Admin'] = 'phpBB MySQLAdmin';											// admin_bb_db.php
$lang['150_db_update_generator'] = 'DB Update Generator';							// admin_db_generator.php
$lang['160_msqd'] = 'MySQLDumper';													// admin_msqd.php

// IM Portal
$lang['1500_IM_Portal'] = 'Portal';													// admin_blocks.php, admin_blocks_pos.php, admin_blocks_var.php, admin_clear_cache.php, admin_layout.php, admin_portal.php
$lang['100_Portal_Configuration'] = 'Portal Konfiguration';							// admin_portal.php
$lang['110_Page_Management'] = 'Seitenverwaltung';									// admin_layout.php
$lang['115_Page_Management'] = 'Individuelle Seitenverwaltung';						// admin_layout_cp.php
$lang['120_Blocks_Management'] = 'Block Verwaltung';								// admin_blocks.php
$lang['130_Blocks_Position_Tag'] = 'Block Positions-Tag';							// admin_blocks_pos.php
$lang['140_Blocks_Variables'] = 'Block Variablen';									// admin_blocks_var.php
$lang['150_Delete_Cache_Files'] = 'Cachedateien l�schen';							// admin_clear_cache.php

// News
$lang['1600_News_Admin'] = 'News';													// admin_news.php, admin_news_cats.php, admin_xs_news.php, admin_xs_news_xml.php
$lang['100_News_Config'] = 'News Konfiguration';									// admin_news.php
$lang['110_News_Cats'] = 'News Kategorien';											// admin_news_cats.php
$lang['120_XS_News_Config'] = 'News Konfiguration';			    					// admin_xs_news.php
$lang['130_XS_News'] = 'News Artikel';										  		// admin_xs_news.php
$lang['140_XS_News_Tickers'] = 'News Ticker';						    			// admin_xs_news_xml.php

// Users
$lang['1610_Users'] = 'Benutzer';													// admin_account.php, admin_disallow.php, admin_email_list.php, admin_jr_admin.php, admin_postcount.php, admin_priv_msgs.php, admin_profile_fields.php, admin_ranks.php, admin_ug_auth.php, admin_user_ban.php, admin_user_bantron.php, admin_user_register.php, admin_user_search.php, admin_userlist.php, admin_users.php, admin_voting.php
$lang['110_Manage'] = 'Verwalten';													// admin_users.php
$lang['113_Permissions_Users'] = 'Berechtigungen';									// admin_ug_auth.php
$lang['116_CMS_Permissions_Users'] = 'CMS Berechtigungen';							// admin_cms_auth.php
$lang['120_Ranks'] = 'Benutzerr�nge';												// admin_ranks.php
$lang['130_Userlist'] = 'Benutzerliste';											// admin_userlist.php
$lang['140_Email_List'] = 'E-Mail-Liste';											// admin_email_list.php
$lang['150_Private_Messages'] = 'Private Nachrichten';								// admin_priv_msgs.php
$lang['160_Account_active'] = 'Aktive Benutzer';									// admin_account.php
$lang['170_Account_inactive'] = 'Inaktive Benutzer';								// admin_account.php
$lang['180_Add_New_User'] = 'Benutzer anlegen';										// admin_user_register.php
$lang['190_Prune_users'] = 'Benutzer l�schen';										// admin_prune_users.php
$lang['200_Disallow'] = 'Benuternamen verbieten';									// admin_disallow.php
$lang['210_Ban_Management'] = 'Benutzer sperren';									// admin_user_ban.php
$lang['220_Bantron'] = 'Bantron';													// admin_user_bantron.php
$lang['240_Jr_Admin'] = 'Junior Admin';												// admin_jr_admin.php
$lang['250_Postcount_Config'] = 'Beitragsz�hler anpassen';							// admin_postcount.php
$lang['260_CPF_Add'] = 'Profilfeld hinzuf�gen';										// admin_profile_fields.php
$lang['270_CPF_Edit'] = 'Profilfeld bearbeiten';									// admin_profile_fields.php
$lang['280_User_Search'] = 'Erweiterte Benutzersuche';								// admin_user_search.php
$lang['290_Poll_Results'] = 'Umfrageergebnisse';									// admin_voting.php
$lang['300_Picscount_Config'] = 'Bildz�hler Sync';									// admin_postcount.php

// Groups
$lang['1620_Groups'] = 'Gruppen';													// admin_color_groups.php, admin_groups.php, admin_ug_auth.php
$lang['110_Manage_Groups'] = 'Verwalten';											// admin_groups.php
$lang['120_Color_Groups'] = 'Gruppenfarben';										// admin_color_groups.php
$lang['130_Permissions_Group'] = 'Berechtigungen';									// admin_ug_auth.php

// Topic Rating
$lang['1700_Topic_Rating'] = 'Themen Bewertung';									// admin_rate.php

// Knowledge Base
$lang['1800_KB_title'] = 'Wissensdatenbank';										// admin_kb_art.php, admin_kb_auth.php, admin_kb_cat.php, admin_kb_config.php, admin_kb_custom.php, admin_kb_rebuild_search.php, admin_kb_types.php
$lang['100_KB_Configuration'] = 'Konfiguration';									// admin_kb_config.php
$lang['110_Art_man'] = 'Artikel Verwaltung';										// admin_kb_art.php
$lang['120_Cat_man'] = 'Kategorien';												// admin_kb_cat.php
$lang['130_Types_man'] = 'Artikeltypen';											// admin_kb_types.php
$lang['140_Custom_Field'] = 'Benutzerdef. Felder';									// admin_kb_custom.php
$lang['150_Permissions'] = 'Berechtigungen';										// admin_kb_auth.php
$lang['160_Optimize_tables'] = 'Tabellen optimieren';								// admin_kb_rebuild_search.php

// Attachments
$lang['1900_Attachments'] = 'Dateianh�nge';											// admin_attach_cp.php, admin_attachments.php, admin_extensions.php
$lang['100_Control_Panel'] = 'Kontrollzentrum';										// admin_attach_cp.php
$lang['110_Att_Manage'] = 'Einstellungen';											// admin_attachments.php
$lang['120_Quota_limits'] = 'Quota Grenzen';										// admin_attachments.php
$lang['130_Shadow_attachments'] = 'Versteckte Anh�nge';								// admin_attachments.php
$lang['140_Sync_attachments'] = 'Anh�nge Synchronisieren';							// admin_attachments.php
$lang['150_Extension_control'] = 'Dateiendungen verwalten';							// admin_extensions.php
$lang['160_Extension_group_manage'] = 'Dateiendungsgruppen verwalten';				// admin_extensions.php
$lang['170_Forbidden_extensions'] = 'Verbotene Dateiendungen';						// admin_extensions.php
$lang['180_Special_categories'] = 'Spezialkategorien';								// admin_attachments.php

// Downloads
$lang['2000_Downloads'] = 'Downloads';												// admin_pa_catauth.php, admin_pa_category.php, admin_pa_custom.php, admin_pa_fchecker.php, admin_pa_file.php, admin_pa_license.php, admin_pa_settings.php
$lang['100_Settings'] = 'Konfiguration';											// admin_pa_settings.php
$lang['110_Cat_manage_title'] = 'Kategorieverwaltung';								// admin_pa_category.php
$lang['120_File_manage_title'] = 'Dateiverwaltung';									// admin_pa_file.php
$lang['130_Fchecker'] = 'Dateiwartung';												// admin_pa_fchecker.php
$lang['140_Mfieldtitle'] = 'Benutzerdef. Felder';									// admin_pa_custom.php
$lang['150_License_title'] = 'Lizenzverwaltung';									// admin_pa_license.php
$lang['160_Permissions'] = 'Berechtigungen';										// admin_pa_catauth.php

// Downloads
$lang['2050_Downloads'] = 'Downloads ADV';											// admin_pa_catauth.php, admin_pa_category.php, admin_pa_custom.php, admin_pa_fchecker.php, admin_pa_file.php, admin_pa_license.php, admin_pa_settings.php
$lang['100_DL_Settings'] = 'Konfiguration';											// admin_pa_settings.php

// Links
$lang['2100_Links'] = 'Links';														// admin_links.php, admin_links_cat.php, admin_links_config.php
$lang['100_Configuration'] = 'Konfiguration';										// admin_links_config.php
$lang['110_Category'] = 'Kategorieverwaltung';										// admin_links_cat.php
$lang['120_Add_new'] = 'Link Hinzuf�gen';											// admin_links.php
$lang['130_Link_Manage'] = 'Linkverwaltung';										// admin_links.php

// Album
$lang['2200_Photo_Album'] = 'Fotoalbum';											// admin_album_auth.php, admin_album_cat.php, admin_album_config_extended.php
$lang['110_Album_Config'] = 'Konfiguration';										// admin_album_config_extended.php
$lang['120_Album_Categories'] = 'Kategorieverwaltung';								// admin_album_cat.php
$lang['130_Album_Permissions'] = 'Berechtigungen';									// admin_album_auth.php
$lang['140_Personal_Galleries'] = 'Pers�nliche Galerien';							// admin_album_personal.php

//
// ####################### [ ACP Navigation END ] #######################
//

?>