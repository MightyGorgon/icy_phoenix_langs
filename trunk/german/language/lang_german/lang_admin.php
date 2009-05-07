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
* TheSteffen, KugeLSichA, Tom, Carsten
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
	'General' => 'Allgemeines',
	'Users' => 'Benutzer',
	'Groups' => 'Gruppen',
	'Forums' => 'Forum',
	'Styles' => 'Styles/Themes',

	'Configuration' => 'Konfiguration',
	'Various_Configuration' => 'Konfiguration',
	'Permissions' => 'Berechtigungen',
	'Manage' => 'Einstellungen',
	'manage' => 'Einstellungen',
	'Disallow' => 'Benutzernamen verbieten',
	'Prune' => 'Autom. L�schen',
	'Mass_Email' => 'Massen-E-Mail versenden',
	'Ranks' => 'R�nge',
	'Smilies' => 'Smilies',
	'Ban_Management' => 'Bannen',
	'Word_Censor' => 'Wortzensur',
	'Export' => 'Exportieren',
	'Create_new' => 'Erstellen',
	'Add_new' => 'Hinzuf�gen',
	'Backup_DB' => 'Datenbank-Backup',
	'Restore_DB' => 'Datenbank wiederherstellen',
	'DB_Maintenance' => 'Datenbank Tools',
	'News_Admin' => 'News',
	'News_Cats' => 'News Kategorien',
	'News_Config' => 'News Konfiguration',
	'Security' => 'Sicherheit',
	'Member_Tries' => 'Mitgliederversuche',
	'Quick_Search' => 'Schnellsuche',
	'Special' => 'Spezial',
	'Styles_Management' => 'Styles Einstellungen',
	'Manage_Bots' => 'Bots Einstellungen',
	'Admin_Notepad' => 'Notizblock',

// Index
	'Admin' => 'Administration',
	'Not_admin' => 'Du hast keine Administrator-Rechte',
	'Welcome_phpBB' => 'Willkommen bei Icy Phoenix',
	'Admin_intro' => 'Danke, dass du dich f�r Icy Phoenix entschieden hast. Auf diesem Bildschirm erh�ltst du einen �berblick �ber die Statistiken deines Forums. Wenn du auf diese Seite zur�ckkehren m�chtest, klicke auf den <u>Admin Index</u>-Link im oberen Bedienfeld. Um zu deinem Forum zur�ckzukehren, klicke oben rechts auf Forum. Die anderen Links auf der linken Seite erlauben es dir, alle wichtigen Bereiche deines Forums zu kontrollieren. In jedem Bereich wird beschrieben, wie die einzelnen Funktionen verwendet werden.',
	'PayPalInfo' => 'Icy Phoenix ist ein Open Source Projekt. Du kannst deine Anerkennung zeigen und die Weiterentwicklung von Icy Phoenix unterst�tzen, indem du f�r das Projekt spendest.',
	'Forum_stats' => 'Forum Statistiken',
	'Admin_Index' => 'Admin-Index',
	'Preview_forum' => 'Forumsvorschau',
	'Click_return_admin_index' => 'Klicke %shier%s, um zum Admin-Index zur�ckzukehren.',
	'Portal' => 'Portal',
	'Preview_Portal' => 'Portal Vorschau',
	'Main_index' => 'Forum',

	'Statistic' => 'Statistik',
	'Value' => 'Wert',
	'Number_posts' => 'Anzahl der Beitr�ge',
	'Posts_per_day' => 'Beitr�ge pro Tag',
	'Number_topics' => 'Anzahl der Themen',
	'Topics_per_day' => 'Themen pro Tag',
	'Number_users' => 'Anzahl der Benutzer',
	'Users_per_day' => 'Benutzer pro Tag',
	'Board_started' => 'Board startete am',
	'Avatar_dir_size' => 'Gr��e des Avatarordners',
	'Database_size' => 'Datenbankgr��e',
	'Gzip_compression' => 'Gzip-Kompression',
	'Not_available' => 'Nicht verf�gbar',

	'ON' => 'Aktiv', // This is for Gzip compression
	'OFF' => 'Inaktiv',

// DB Utils
	'Database_Utilities' => 'Datenbankfunktionen',

	'Restore' => 'Wiederherstellen',
	'Backup' => 'Backup',
	'Restore_explain' => 'Hiermit werden alle Icy Phoenix Tabellen aus einer Datei wiederhergestellt. Falls es dein Server unterst�tzt, kannst du auch einen Gzip-komprimierten Text hochladen - er wird automatisch dekomprimiert! <b>ACHTUNG</b>: Es werden alle existierenden Daten �berschrieben. Der Vorgang wird einige Zeit dauern, bitte verlasse diese Seite nicht, bis er abgeschlossen wurde.',
	'Backup_explain' => 'Hier kannst du alle Icy Phoenix Tabellen abspeichern. Solltest du noch weitere, eigene Tabellen in derselben Datenbank wie die Icy Phoenix Tabellen haben, die auch gespeichert werden sollen, gib ihre Namen in der \'Zus�tzliche Tabellen\'-Textbox an (getrennt mit Kommata). Sollte dein Server es unterst�tzen, kannst du die Datei(en) auch mit Gzip komprimieren, bevor du sie herunterl�dst.',

	'Backup_options' => 'Backup-Optionen',
	'Start_backup' => 'Backup beginnen',
	'Full_backup' => 'Vollst�ndiges Backup',
	'Structure_backup' => 'Nur Struktur-Backup',
	'Data_backup' => 'Nur Daten-Backup',
	'Additional_tables' => 'Zus�tzliche Tabellen',
	'phpBB_only' => 'Nur Icy Phoenix eigene Tabellen',
	'Gzip_compress' => 'Gzip-Komprimierungs Datei',
	'Select_file' => 'W�hle eine Datei',
	'Start_Restore' => 'Wiederherstellung beginnen',

	'Restore_success' => 'Die Datenbank wurde wieder hergestellt.<br /><br />Dein Board sollte jetzt wieder den Stand des Backups haben.',
	'Backup_download' => 'Dein Download wird in K�rze beginnen - bitte etwas Geduld',
	'Backups_not_supported' => 'Fehler: dein Datenbanksystem unterst�tzt Datenbank-Backups nicht!',

	'Restore_Error_uploading' => 'Fehler beim Hochladen der Backup-Datei',
	'Restore_Error_filename' => 'Probleme mit dem Dateinamen, probiere einen anderen',
	'Restore_Error_decompress' => 'Die Gzip-Version kann nicht dekomprimiert werden, nutze bitte eine Nur-Text-Datei',
	'Restore_Error_no_file' => 'Es wurde keine Datei hochgeladen',

// Auth pages
	'Select_a_User' => 'W�hle einen Benutzer',
	'Select_a_Group' => 'W�hle eine Gruppe',
	'Select_a_Forum' => 'W�hle ein Forum',
	'Auth_Control_User' => 'Benutzerrechtekontrolle',
	'Auth_Control_Group' => 'Gruppenrechtekontrolle',
	'Auth_Control_Forum' => 'Forenzugangskontrolle',
// Start add Permission List
	'Auth_list_Control_Forum' => 'Berechtigungen f�r alle Foren',
// End add Permission List
	'Look_up_User' => 'Benutzer ausw�hlen',
	'Look_up_Group' => 'Gruppe ausw�hlen',
	'Look_up_Forum' => 'Forum ausw�hlen',

	'Group_auth_explain' => 'Du kannst hier die Befugnisse und den Moderator-Status f�r jede Gruppe einstellen. Vergiss nicht, dass einzelne Benutzerbefugnisse immer noch g�ltig sind, wenn du die Gruppenbefugnisse �nderst (z. B. Zugang zu Foren u. �.). Sollte dies der Fall sein, wirst du dar�ber informiert.',
	'User_auth_explain' => 'Du kannst hier die Befugnisse und den Moderator-Status f�r jeden einzelnen Benutzer einstellen. Vergiss nicht, dass Gruppenbefugnisse immer noch g�ltig sind, wenn du die Benutzerbefugnisse �nderst (z. B. Zugang zu Foren u. �.). Sollte dies der Fall sein, wirst du dar�ber informiert.',
	'Forum_auth_explain' => 'Du kannst hier die Zugangsebenen f�r jedes Forum bestimmen. Es gibt eine einfache und eine fortgeschrittene Methode, dies zu tun. Bei der fortgeschrittenen Methode hast du eine bessere Kontrolle �ber jedes Forum. Bedenke, dass das �ndern der Zugangsebene beeinflusst, welche Benutzer welche Aktionen im Forum durchf�hren k�nnen.',
// Start add Permission List
	'Forum_auth_list_explain' => 'Hier kannst du die Berechtigungseinstellungen f�r jedes Forum �ndern. Beachte, dass das �ndern von Forenberechtigungen ggf. Benutzern den Zugang zum Forum verwehrt, oder das sie bestimmte Funktionen nicht mehr nutzen k�nnen.',
// End add Permission List

	'Simple_mode' => 'Einfache Methode',
	'Advanced_mode' => 'Fortgeschrittene Methode',
	'Moderator_status' => 'Moderatorenstatus',

	'Allowed_Access' => 'Zugang gestattet',
	'Disallowed_Access' => 'Zugang verwehrt',
	'Is_Moderator' => 'ist Moderator',
	'Not_Moderator' => 'kein Moderator',

	'Conflict_warning' => 'Warnung: Autorisationskonflikt',
	'Conflict_access_userauth' => 'Der Benutzer hat auf Grund seiner Gruppenmitgliedschaft immer noch Rechte in diesem Forum. Vielleicht solltest du die Gruppenrechte �ndern oder den Benutzer komplett aus der Benutzergruppe entfernen. Die Gruppen mit Rechten (und die dazugeh�rigen Foren) stehen unten.',
	'Conflict_mod_userauth' => 'Der Benutzer hat immer noch Moderatorenrechte in diesem Forum. Vielleicht solltest du die Gruppenrechte �ndern oder den Benutzer komplett aus der Benutzergruppe entfernen. Die Gruppen mit Rechten (und die dazugeh�rigen Foren) stehen unten.',

	'Conflict_access_groupauth' => 'Der oder die folgenden Benutzer haben auf Grund ihrer Benutzereinstellungen immer noch das Zugangsrecht zu diesem Forum. Vielleicht solltest du diese Einstellungen �ndern, um dem Benutzer komplett den Zugang zu verweigern. Die Benutzer mit Rechten (und die dazugeh�rigen Foren) stehen unten.',
	'Conflict_mod_groupauth' => 'Der oder die folgenden Benutzer haben auf Grund ihrer Benutzereinstellungen immer noch Moderatorenrechte in diesem Forum. Vielleicht solltest du diese Einstellungen �ndern, um dem Benutzer komplett die Rechte zu nehmen. Die Benutzer mit Rechten (und die dazugeh�rigen Foren) stehen unten.',

	'Public' => '�ffentlich',
	'Private' => 'Privat',
	'Registered' => 'Registriert',
	'Self' => 'Selbst',
	'Administrators' => 'Administratoren',
	'Hidden' => 'Versteckt',

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
	'Forum_NONE' => 'KEINER',
	'Forum_ALL' => 'ALLE',
	'Forum_REG' => 'REG',
	'Forum_SELF' => 'SELBST',
	'Forum_PRIVATE' => 'PRIVAT',
	'Forum_MOD' => 'MODS',
	'Forum_JADMIN' => 'J ADMIN',
	'Forum_ADMIN' => 'ADMIN',

	'View' => 'Ansicht',
	'Read' => 'Lesen',
	'Post' => 'Posten',
	'Reply' => 'Antworten',
	'Edit' => 'Bearbeiten',
	'Delete' => 'L�schen',
	'Sticky' => 'Wichtig',
	'Announce' => 'Ank�ndigung',
	'Vote' => 'Umfrage',
	'Pollcreate' => 'Umfrage erstellen',

	'Simple_Permission' => 'Einfache Befugnisse',

	'User_Level' => 'Benutzerebene',
	'Auth_User' => 'Benutzer',
	'Auth_Junior_Admin' => 'Junior Administrator',
	'Auth_Admin' => 'Administrator',
	'Group_memberships' => 'Benutzergruppenmitglieder',
	'Usergroup_members' => 'Diese Gruppe hat die folgenden Mitglieder',

	'Forum_auth_updated' => 'Forumsberechtigungen aktualisiert',
	'User_auth_updated' => 'Benutzerberechtigungen aktualisiert',
	'Group_auth_updated' => 'Gruppenberechtigungen aktualisiert',

	'Auth_updated' => 'Befugnisse wurden aktualisiert',
	'Click_return_userauth' => 'Klicke %shier%s, um zu den Benutzerrechten zur�ckzukehren.',
	'Click_return_groupauth' => 'Klicke %shier%s, um zu den Gruppenrechten zur�ckzukehren.',
	'Click_return_forumauth' => 'Klicke %shier%s, um zu den Forenberechtigungen zur�ckzukehren.',

// Banning
	'Ban_control' => 'Sperren',
	'Ban_explain' => 'Hier kannst du Benutzer bannen. Du kannst entweder einen bestimmten Benutzer, eine IP-Adresse oder einen Hostnamen sperren. Durch diese Methode kann der Benutzer die Startseite des Forums nicht aufrufen. Um den Benutzer daran zu hindern, sich unter einem anderen Namen anzumelden, kannst du auch bestimmte E-Mail-Adressen sperren. Eine E-Mail-Sperre verhindert nur das Registrieren, nicht das Posten eines Benutzers!',
	'Ban_explain_warn' => 'Bitte beachte, dass, wenn du mehrere IP-Adressen eingibst, alle Adressen zwischen dem Anfang und dem Ende der Sperrliste hinzugef�gt werden. Versuche die Anzahl der Adressen klein zu halten, indem du Wildcards einsetzt, wo es m�glich ist. Am besten ist es, eine konkrete IP-Adresse anzugeben.',

	'Select_username' => 'W�hle einen Benutzernamen',
	'Select_ip' => 'W�hle eine IP-Adresse',
	'Select_email' => 'W�hle eine E-Mail-Adresse',

	'Ban_username' => 'Einen oder mehrere Benutzer bannen',
	'Ban_username_explain' => 'Wenn du mehrere Benutzer ausw�hlst, kannst du auch mehrere Benutzer auf einmal bannen',

	'Ban_IP' => 'Eine(n) oder mehrere IP-Adressen/Hostnamen bannen',
	'IP_hostname' => 'IP-Adressen oder Hostname',
	'Ban_IP_explain' => 'Um mehrere verschiedene IP-Adressen oder Hostnamen anzugeben, trenne sie mit Kommata voneinander. Um einen Bereich von IP-Adressen anzugeben, trenne den Anfang und das Ende mit einem Bindestrich (-), benutze * als Platzhalter',

	'Ban_email' => 'Eine oder mehrere E-Mail Adressen bannen',
	'Ban_email_explain' => 'Um mehrere verschiedene E-Mail Adressen anzugeben, trenne sie mit Kommata voneinander. F�r einen allgemeinen Benutzernamen benutze ein * (z.B. *@hotmail.de)',

	'Unban_username' => 'Einen oder mehrere Benutzer entsperren',
	'Unban_username_explain' => 'Wenn du mehrere Benutzer ausw�hlst, kannst du auch mehrere Benutzer auf einmal entsperren',

	'Unban_IP' => 'Eine oder mehrere IP-Adressen entsperren',
	'Unban_IP_explain' => 'Wenn du mehrere IP-Adressen ausw�hlst, kannst du auch mehrere IP-Adressen auf einmal entsperren',

	'Unban_email' => 'Eine oder mehrere E-Mail Adressen entsperren',
	'Unban_email_explain' => 'Wenn du mehrere E-Mail Adressen ausw�hlst, kannst du auch mehrere E-Mail Adressen auf einmal entsperren',

	'No_banned_users' => 'Keine gesperrten Benutzernamen',
	'No_banned_ip' => 'Keine gebannten IP-Adressen',
	'No_banned_email' => 'Keine gebannten E-Mail Adressen',

	'Ban_update_sucessful' => 'Die Banliste wurde aktualisiert',
	'Click_return_banadmin' => 'Klicke %shier%s, um zur Sperr-Kontrolle zur�ckzukehren.',

// Configuration
	'General_Config' => 'Allgemeine Konfiguration',
	'Config_explain' => 'Hier kannst du die allgemeinen Einstellungen deines Forums �ndern. F�r Benutzer- und Foreneinstellungen nutze bitte die Links auf der linken Seite.',

	'Click_return_config' => 'Klicke %shier%s, um zur allgemeinen Konfiguration zur�ckzukehren.',

	'General_settings' => 'Allgemeine Boardeinstellungen',
	'Server_name' => 'Domainname',
	'Server_name_explain' => 'Der Name der Domain, auf der das Board l�uft',
	'Script_path' => 'Scriptpfad',
	'Script_path_explain' => 'Der Pfad zu IcyPhoenix, relativ zum Domainnamen',
	'Server_port' => 'Server Port',
	'Server_port_explain' => 'Der Port, unter dem dein Server l�uft, normalerweise 80. �ndere dies nur, wenn es ein anderer Port ist',
	'Site_name' => 'Name der Seite',
	'Site_desc' => 'Beschreibung der Seite',
	'Board_disable' => 'Board deaktivieren',
	'Board_disable_explain' => 'Hiermit sperrst du das Forum f�r alle Benutzer. Administratoren k�nnen auf den Administrations-Bereich zugreifen, wenn das Forum gesperrt ist.',
	'Acct_activation' => 'Benutzer-Konto-Freischaltung aktivieren',
	'Acc_None' => 'Keine', // These three entries are the type of activation
	'Acc_User' => 'Per E-Mail',
	'Acc_Admin' => 'Durch den Admin',

	'Abilities_settings' => 'Standard Benutzer- und Foreneinstellungen',
	'Max_poll_options' => 'Maximale Anzahl der Umfrageoptionen',
	'Flood_Interval' => 'Flood-Intervall',
	'Flood_Interval_explain' => 'Anzahl der Sekunden, die ein Benutzer warten muss, bevor er einen neuen Beitrag schreiben kann',
	'Board_email_form' => 'Benutzer E-Mails per Board',
	'Board_email_form_explain' => 'Deine Benutzer k�nnen sich �ber das Board E-Mails schreiben',
	'Topics_per_page' => 'Themen pro Seite',
	'Posts_per_page' => 'Beitr�ge pro Seite',
	'Hot_threshold' => 'Beitr�ge, die ein Thema braucht, um ein \'Hot Topic\' zu werden',
	'Default_style' => 'Standard-Style',
	'Override_style' => 'Style �berschreiben',
	'Override_style_explain' => 'Vom Benutzer gew�hltes Style �berschreiben',
	'Default_language' => 'Standard-Sprache',
	'Date_format' => 'Datumformat',
	'System_timezone' => 'Zeitzone',
	'Enable_gzip' => 'Gzip-Komprimierung aktivieren',
// Start Gzip Compression Level MOD
	'Gzip_level' => 'Gzip Komprimierungsstufe',
	'Gzip_level_explain' => 'Hier kannst du die Gzip-Komprimierungsstufe einstellen (eine Ziffer zwischen 0-9). 0 ist gleichbedeutend mit aus, 1 ist sehr gering und 9 ist das Maximum. 9 ist empfohlen.',
// End Gzip Compression Level MOD
	'Enable_prune' => 'Automatisches l�schen aktivieren',
	'Allow_HTML' => 'HTML erlauben',
	'Allow_BBCode' => 'BBCode erlauben',
	'Allowed_tags' => 'Erlaubte HTML-Tags',
	'Allowed_tags_explain' => 'Trenne die Tags mit Kommata',
	'Allow_smilies' => 'Smilies erlauben',
	'Smilies_path' => 'Speicherort f�r Smilies',
	'Smilies_path_explain' => 'Der Pfad in deinem Icy Phoenix Verzeichnis, in dem die Smilies liegen (z. B. images/smiles)',
	'Allow_sig' => 'Signaturen erlauben',
	'Max_sig_length' => 'Maximale Signaturl�nge',
	'Max_sig_length_explain' => 'Die maximale Anzahl an Zeichen, die ein Benutzer in seiner Signatur nutzen darf',
	'Allow_name_change' => 'Namenswechsel erlauben',

	'Avatar_settings' => 'Avatareinstellungen',
	'Allow_local' => 'Galerie-Avatare erlauben',
	'Allow_remote' => 'Avatarremote erlauben',
	'Allow_remote_explain' => 'Avatare, die von einer anderen Site verlinkt werden',
	'Allow_upload' => 'Hochladen von Avataren erlauben',
	'Max_filesize' => 'Maximale Gr��e',
	'Max_filesize_explain' => 'F�r hochgeladene Avatare',
	'Max_avatar_size' => 'Maximale Abmessungen des Avatars',
	'Max_avatar_size_explain' => '(H�he x Breite in Pixel)',
	'Avatar_storage_path' => 'Avatar Speicherpfad',
	'Avatar_storage_path_explain' => 'Der Pfad in deinem Icy Phoenix Verzeichnis, in dem die Avatare liegen (z. B. images/avatars)',
	'Avatar_gallery_path' => 'Avatar Galeriepfad',
	'Avatar_gallery_path_explain' => 'Der Pfad in deinem Icy Phoenix Verzeichnis, in dem die Galerie-Avatare liegen (z. B. images/avatars/gallery)',

	'COPPA_settings' => 'COPPA Einstellungen',
	'COPPA_fax' => 'COPPA Fax Nummer',
	'COPPA_mail' => 'COPPA E-Mail Adresse',
	'COPPA_mail_explain' => 'Zu dieser E-Mail Adresse schicken die Eltern die COPPA Einverst�ndniserkl�rung',

	'Email_settings' => 'E-Mail Einstellungen',
	'Admin_email' => 'E-Mail Adresse des Administrators',
	'Email_sig' => 'E-Mail Signatur',
	'Email_sig_explain' => 'Diese Signatur wird an alle E-Mails des Administrators angeh�ngt',
	'Use_SMTP' => 'Nutze einen SMTP Server zum Mailen',
	'Use_SMTP_explain' => 'W�hle \'Ja\', wenn du m�chtest, dass deine E-Mails �ber einen SMTP-Server gesendet werden',
	'SMTP_server' => 'SMTP-Server Adresse',
	'SMTP_username' => 'SMTP Benutzername',
	'SMTP_username_explain' => 'Gib nur dann einen Benutzernamen an, wenn der SMTP-Server dies ben�tigt',
	'SMTP_password' => 'SMTP Passwort',
	'SMTP_password_explain' => 'Gib nur dann ein Passwort an, wenn der SMTP-Server dies ben�tigt',

	'Disable_privmsg' => 'Private Nachrichten',
	'Inbox_limits' => 'Maximale Nachrichten im Eingang',
	'Sentbox_limits' => 'Maximale Nachrichten im Ausgang',
	'Savebox_limits' => 'Maximale Anzahl gespeicherter Nachrichten',

	'Cookie_settings' => 'Cookie Einstellungen',
	'Cookie_settings_explain' => 'Hier kannst du einstellen, was f�r Cookies zum Browser gesendet werden. Meistens stimmen die Standardeinstellungen. Solltest du sie �ndern m�ssen, tue es mit Bedacht, ansonsten kann sich niemand mehr im Forum einloggen.',
	'Cookie_domain' => 'Cookie-Domain',
	'Cookie_name' => 'Cookie-Name',
	'Cookie_path' => 'Cookie-Pfad',
	'Cookie_secure' => 'Sicheres Cookie',
	'Cookie_secure_explain' => 'Falls dein Server auf SSL l�uft, aktiviere diese Funktion, ansonsten lasse sie deaktiviert',
	'Session_length' => 'Sessionl�nge [ Sekunden ]',

// Visual Confirmation
	'Visual_confirm' => 'Aktiviere visuelle Best�tigung',
	'Visual_confirm_explain' => 'Benutzer m�ssen bei der Registrierung einen durch ein Bild vorgegeben Schl�ssel eingeben.',

// Autologin Keys - added 2.0.18
	'Allow_autologin' => 'Erlaube automatisches Einloggen',
	'Allow_autologin_explain' => 'Legt fest, ob Benutzern das automatische Einloggen erm�glicht wird',
	'Autologin_time' => 'Ablaufzeit des Schl�ssels f�r das automatische Einloggen',
	'Autologin_time_explain' => 'Tage, die der Schl�ssel f�r das automatische Einloggen g�ltig ist, wenn das Board nicht besucht wird. Mit Null l�uft der Schl�ssel nicht ab.',

// Forum Management
	'Forum_admin' => 'Forum Administration',
	'Forum_admin_explain' => 'Hier kannst du Kategorien und Foren hinzuf�gen, l�schen, bearbeiten und neu anordnen.',
	'Edit_forum' => 'Forum bearbeiten',
	'Create_forum' => 'Neues Forum erstellen',
	'Create_category' => 'Neue Kategorie erstellen',
	'Remove' => 'Entfernen',
	'Action' => 'Aktion',
	'Update_order' => 'Reihenfolge �ndern',
	'Config_updated' => 'Forumskonfiguration ge�ndert',
	'Move_up' => 'Nach oben',
	'Move_down' => 'Nach unten',
	'Resync' => 'Resync',
	'No_mode' => 'Kein Modus ausgew�hlt',
	'Forum_edit_delete_explain' => 'Hier kannst du alle allgemeinen Boardeinstellungen anpassen. Zur Benutzer- und Forenkonfiguration benutze bitte die entsprechenden Links auf der linken Seite',

	'Move_contents' => 'Alle Inhalte verschieben',
	'Forum_delete' => 'Forum l�schen',
	'Forum_delete_explain' => 'Hier kannst du ein Forum oder eine Kategorie l�schen und entscheiden, wohin die enthaltenen Themen oder Foren verschoben werden sollen.',

	'Status_locked' => 'Gesperrt',
	'Status_unlocked' => 'Entsperrt',
	'Forum_settings' => 'Allgemeine Foreneinstellungen',
	'Forum_name' => 'Forumsname',
	'Forum_desc' => 'Beschreibung',
	'Forum_status' => 'Forumsstatus',
	'Forum_pruning' => 'Automatisches L�schen',

	'prune_freq' => '�berpr�fe das Themenalter alle',
	'prune_days' => 'Entferne Themen, in denen nichts mehr geschrieben wurde seit',
	'Set_prune_data' => 'Du hast das automatische L�schen f�r dieses Forum aktiviert, aber weder ein Intervall noch eine Anzahl an Tagen angegeben.',

	'FORUM_SIMILAR_TOPICS' => '�hnliche Themen-Box',
	'FORUM_SIMILAR_TOPICS_EXPLAIN' => 'Wenn diese Option aktiviert ist, wird unter jedem Thema eine Box mit �hnlichen Themen angezeigt.',
	'FORUM_TOPIC_VIEWS' => 'Themen-Betrachter',
	'FORUM_TOPIC_VIEWS_EXPLAIN' => 'Wenn du diese Option aktivierst werden alle Benutzer die ein Thema in diesem Forum anschauen, in der Datenbank gespeichert (Um diese Funktion nutzen zu k�nnen, musst du auch die Globale Einstellung in Icy Phoenix Einstellungen => SQL Optimierung aktivieren)',
	'FORUM_TAGS' => 'Forum Tags',
	'FORUM_TAGS_EXPLAIN' => 'Diese Option aktiviert eine Box, die die am h�ufigsten genutzten W�rter des gesamten Forums anzeigt (Um diese Funktion nutzen zu k�nnen, musst du auch die Globale Einstellung in Icy Phoenix Einstellungen => SEO aktivieren)',
	'FORUM_SORT_BOX' => 'Themen Sortierungs-Box',
	'FORUM_SORT_BOX_EXPLAIN' => 'Wenn diese Option aktiviert ist, siehst du eine Box die dir erlaubt, die Themen alphabetisch zu ordnen (Um diese Funktion nutzen zu k�nnen, musst du auch die Globale Einstellung in Icy Phoenix Einstellungen aktivieren)',
	'FORUM_KB_MODE' => 'Wissensdatenbank Modus',
	'FORUM_KB_MODE_EXPLAIN' => 'Wenn diese Option aktiviert ist, wird das Forum im Wissensdatenbank Modus gezeigt. (Themen werden �hnlich der Wissensdatenbank aufgelistet)',
	'FORUM_INDEX_ICONS' => 'Index Icons',
	'FORUM_INDEX_ICONS_EXPLAIN' => 'Wenn diese Option aktiviert ist, werden Icons f�r RSS und Neues Thema im Foren-Index angezeigt (Um diese Funktion nutzen zu k�nnen, musst du auch die Globale Einstellung in Icy Phoenix Einstellungen aktivieren)',

	'Move_and_Delete' => 'Verschieben und L�schen',

	'Delete_all_posts' => 'Alle Beitr�ge l�schen',
	'Nowhere_to_move' => 'Kein Ziel zum Verschieben',

	'Edit_Category' => 'Kategorie bearbeiten',
	'Edit_Category_explain' => 'Hier kannst du den Namen einer Kategorie �ndern',

	'Forums_updated' => 'Forum- und Kategorieinformationen wurden ge�ndert',

	'Must_delete_forums' => 'Du musst erst alle Foren l�schen, bevor du diese Kategorie l�schen kannst',

	'Click_return_forumadmin' => 'Klicke %shier%s, um zur Forumsadministration zur�ckzukehren.',

// Smiley Management
	'smiley_title' => 'Smilies-Bearbeitung',
	'smile_desc' => 'Hier kannst du die Smilies, die die Benutzer in ihren Beitr�gen und Privaten Nachrichten einf�gen k�nnen, hinzuf�gen, l�schen oder bearbeiten.',
 
	'smiley_config' => 'Smiley-Konfiguration',
	'smiley_code' => 'Smiley Code',
	'smiley_url' => 'Smiley Bilddatei',
	'smiley_emot' => 'Smiley Beschreibung',
	'smile_add' => 'Einen neuen Smiley hinzuf�gen',
	'Smile' => 'Smiley',
	'Emotion' => 'Beschreibung',

	'Select_pak' => 'W�hle Paketdatei (.pak)',
	'replace_existing' => 'Aktuelle Smilies �berschreiben',
	'keep_existing' => 'Aktuelle Smilies behalten',
	'smiley_import_inst' => 'Du solltest das Smiley-Paket entpacken und alle Dateien ins jeweilige Smiley-Verzeichnis hochladen. W�hle dann die korrekten Angaben, um das Paket zu installieren.',
	'smiley_import' => 'Smiley-Paketimport',
	'choose_smile_pak' => 'W�hle ein Smiley-Paket (.pak)',
	'import' => 'Smilies importieren',
	'smile_conflicts' => ' Was tun, wenn Konflikte auftreten?',
	'del_existing_smileys' => 'Aktuelle Smilies vor dem Import l�schen',
	'import_smile_pack' => 'Smiley-Paket importieren',
	'export_smile_pack' => 'Smiley-Paket erstellen',
	'export_smiles' => 'Um aus deinen jetzigen Smilies ein Paket zu erstellen, klicke %shier%s, um das Paket herunterzuladen. Achte darauf, die .pak-Erweiterung am Ende beizubehalten. Erstelle dann eine Zip-Datei mit allen benutzten Smilies und der .pak-Datei.',

	'smiley_add_success' => 'Der Smiley wurde hinzugef�gt',
	'smiley_edit_success' => 'Der Smiley wurde ge�ndert',
	'smiley_import_success' => 'Das Smiley-Paket wurde installiert',
	'smiley_del_success' => 'Der Smiley wurde gel�scht',
	'Click_return_smileadmin' => 'Klicke %shier%s, um zur Smiley-Verwaltung zur�ckzukehren.',
	
// User Management
	'User_admin' => 'Benutzer-Administration',
	'User_admin_explain' => 'Hier kannst du die Daten und Optionen eines Nutzers �ndern. Um die Befugnisse eines Benutzers zu �ndern, benutze bitte die Benutzer- und Gruppenkontrolle.',

	'Look_up_user' => 'Benutzer ausw�hlen',

	'Admin_user_fail' => 'Benutzerprofil konnte nicht ge�ndert werden',
	'Admin_user_updated' => 'Benutzerprofil ge�ndert',
	'Click_return_useradmin' => 'Klicke %shier%s, um zur Benutzeradministration zur�ckzukehren.',
//Start Quick Administrator User Options and Information MOD
	'Click_return_userprofile' => 'Klicke %shier%s, um zum Benutzerprofil zur�ckzugelangen.',
//End Quick Administrator User Options and Information MOD
	'User_delete' => 'Diesen Benutzer l�schen',
	'User_delete_explain' => 'Klicke hier, um den Benutzer zu l�schen - diese Aktion kann nicht r�ckg�ngig gemacht werden.',
	'User_deleted' => 'Benutzer wurde gel�scht',

	'User_status' => 'Benutzer ist aktiv',
	'User_allowpm' => 'Darf Private Nachrichten verschicken',
	'User_allowavatar' => 'Darf einen Avatar benutzen',

	'Admin_avatar_explain' => 'Hier kannst du den Avatar des Benutzers ansehen und l�schen',

	'User_special' => 'Spezielle Optionen (nur f�r Administratoren)',
	'User_special_explain' => 'Diese Optionen k�nnen nicht von den Benutzern ge�ndert werden. Du kannst hier den Status und andere Optionen der Benutzer festlegen, die den Benutzern selbst nicht zur Verf�gung stehen.',

// Group Management
	'Group_administration' => 'Gruppenadministration',
	'Group_admin_explain' => 'Hier kannst du die Benutzergruppen deines Forums �berwachen. Du kannst bestehende Gruppen l�schen oder bearbeiten oder neue anlegen. Ebenso kannst du Gruppenleiter w�hlen, den Gruppenstatus auf offen/geschlossen �ndern und den Gruppennamen bzw. die Gruppenbeschreibung �ndern',
	'Error_updating_groups' => 'Fehler beim Aktualisieren der Gruppe',
	'Updated_group' => 'Die Gruppe wurde abge�ndert',
	'Added_new_group' => 'Die Gruppe wurde hinzugef�gt',
	'Deleted_group' => 'Die Gruppe wurde gel�scht',
	'New_group' => 'Neue Gruppe erstellen',
	'Edit_group' => 'Gruppe bearbeiten',
	'group_name' => 'Gruppenname',
	'group_description' => 'Gruppenbeschreibung',
	'group_moderator' => 'Gruppenleiter',
	'group_status' => 'Gruppenstatus',
	'group_open' => 'Offene Gruppe',
	'group_closed' => 'Geschlossene Gruppe',
	'group_hidden' => 'Versteckte Gruppe',
	'group_delete' => 'Gel�schte Gruppe',
	'group_delete_check' => 'Diese Gruppe l�schen',
	'submit_group_changes' => '�nderungen �bernehmen',
	'reset_group_changes' => 'Zur�cksetzen',
	'No_group_name' => 'Bitte gib einen Gruppennamen an',
	'No_group_moderator' => 'Bitte gib einen Gruppenleiter an',
	'No_group_mode' => 'Du musst einen Status f�r diese Gruppe angeben (offen/geschlossen)',
	'No_group_action' => 'Es wurde keine Aktion ausgew�hlt',
	'delete_group_moderator' => 'Alten Gruppenleiter entfernen?',
	'delete_moderator_explain' => 'Wenn du den Gruppenleiter wechseln m�chtest, w�hle die entsprechende Option, um den alten Leiter zu entfernen. Ansonsten w�hle die Option nicht und der Benutzer wird ein regul�res Mitglied der Gruppe.',
	'Click_return_groupsadmin' => 'Klicke %shier%s, um zur Gruppenadministration zur�ckzukehren.',
	'Select_group' => 'Gruppe w�hlen',
	'Look_up_group' => 'Gruppe finden',

// Prune Administration
	'Forum_Prune' => 'Automatisches l�schen',
	'Forum_Prune_explain' => 'Du kannst angeben, dass alle Themen, in denen seit einer gewissen Zeit nichts gepostet wurde, gel�scht werden. Solltest du keine Zahl angeben, werden alle Themen gel�scht. Laufende Umfragen und Ank�ndigungen sind davon nicht betroffen. Diese Themen m�ssen manuell entfernt werden.',
	'Do_Prune' => 'L�schen starten',
	'All_Forums' => 'Alle Foren',
	'Prune_topics_not_posted' => 'Themen l�schen in denen es keine Antworten gab seit',
	'Topics_pruned' => 'Gel�schte Themen',
	'Posts_pruned' => 'Gel�schte Beitr�ge',
	'Prune_success' => 'Das automatische L�schen des Forums wurde aktiviert',

// Word censor
	'Words_title' => 'Wortzensur',
	'Words_explain' => 'Hier kannst du W�rter bestimmen, die in den Beitr�gen automatisch zensiert werden. Au�erdem kann kein Benutzer einen Namen w�hlen, in dem diese W�rter vorkommen. Du kannst ein * als Platzhalter im Wort-Feld verwenden. Beispiel: Fisch* entfernt W�rter wie Fischbesteck, Fischfang usw., *Fisch entfernt Backfisch, Stockfisch usw.',
	'Word' => 'Wort',
	'Edit_word_censor' => 'Wortzensur �ndern',
	'Replacement' => 'Ersatz',
	'Add_new_word' => 'Neues Wort hinzuf�gen',
	'Update_word' => 'Zensur aktualisieren',

	'Must_enter_word' => 'Ein Wort und ein entsprechender Ersatz sind n�tig',
	'No_word_selected' => 'Kein Wort zum Bearbeiten ausgew�hlt',

	'Word_updated' => 'Die Wortzensur wurde aktualisiert',
	'Word_added' => 'Die Wortzensur wurde eingerichtet',
	'Word_removed' => 'Die Wortzensur wurde entfernt',

	'Click_return_wordadmin' => 'Klicke %shier%s, um zur Wortzensur-Administration zur�ckzukehren.',

// Mass Email
	'Mass_email_explain' => 'Hier kannst du entweder allen registrierten Benutzern oder einer bestimmten Gruppe eine Nachricht schicken. Diese Nachricht wird an das Postfach des Administrators geschickt und anonym (BCC) an alle Empf�nger. Solltest du einer gro�en Gruppe eine E-Mail schicken, habe etwas Geduld und brich den Vorgang nicht ab. Es ist v�llig normal, dass der Vorgang l�nger dauert und du erh�ltst eine R�ckmeldung, wenn das Skript beendet ist',
	'Compose' => 'Erstellen',

	'Recipients' => 'Empf�nger',
	'All_users' => 'Alle Benutzer',

	'Email_successfull' => 'Die Nachricht wurde gesendet',
	'Click_return_massemail' => 'Klicke %shier%s, um zur Massen E-Mail zur�ckzukehren.',

// Ranks admin
	'Ranks_title' => 'Rang-Administration',
	'Ranks_explain' => 'Hier kannst du R�nge hinzuf�gen, bearbeiten, anschauen und l�schen. Du kannst ebenfalls eigene R�nge erstellen, die du per Benutzeradministration an spezielle Benutzer vergibst.',

	'Add_new_rank' => 'Neuen Rang anlegen',

	'Rank_title' => 'Rangname',
	'Rank_special' => 'Spezialrang',
	'Rank_minimum' => 'Minimum-Beitr�ge',
	'Rank_maximum' => 'Maximum-Beitr�ge',
	'Rank_image' => 'Bild zum Rang (relativ zum Forenpfad)',
	'Rank_image_explain' => 'Du kannst hier ein Bild bestimmen, dass dem jeweiligen Rang zugeordnet ist',

	'Must_select_rank' => 'W�hle einen Rang aus',
	'No_assigned_rank' => 'Kein Spezialrang vergeben',

	'Rank_updated' => 'Die Ranginformationen wurden aktualisiert',
	'Rank_added' => 'Der Rang wurde hinzugef�gt',
	'Rank_removed' => 'Der Rang wurde gel�scht',
	'No_update_ranks' => 'Der Rang wurde erfolgreich gel�scht. Allerdings wurden Benutzer, denen dieser Rang zugeordnet war, nicht aktualisiert. Du musst den Rang bei diesen Benutzern manuell aktualisieren',

	'Click_return_rankadmin' => 'Klicke %shier%s, um zur Rang-Administration zur�ckzukehren.',

// Disallow Username Admin
	'Disallow_control' => 'Verbot von Benutzernamen',
	'Disallow_explain' => 'Hier kannst du Benutzernamen �berwachen, die nicht genutzt werden d�rfen. Du kannst einen Stern (*) als Platzhalter setzen. Beachte, dass du den jeweiligen Benutzer zuerst l�schen musst, wenn du einen bereits vergebenen Benutzernamen w�hlst.',

	'Delete_disallow' => 'L�schen',
	'Delete_disallow_title' => 'Einen verbotenen Namen entfernen',
	'Delete_disallow_explain' => 'Du kannst einen verbotenen Namen entfernen, indem du den Namen aus der Liste ausw�hlst und L�schen anklickst',

	'Add_disallow' => 'Hinzuf�gen',
	'Add_disallow_title' => 'Einen verbotenen Namen hinzuf�gen',
	'Add_disallow_explain' => 'Du kannst ein * benutzen, um jegliche Benutzernamen zu verbieten',

	'No_disallowed' => 'Keine verbotenen Benutzernamen',

	'Disallowed_deleted' => 'Der verbotene Benutzername ist nun wieder gestattet',
	'Disallow_successful' => 'Der verbotene Benutzername wurde hinzugef�gt',
	'Disallowed_already' => 'Der angegebene Benutzername kann nicht verboten werden. Er existiert entweder schon oder stimmt mit einem existierenden �berein.',

	'Click_return_disallowadmin' => 'Klicke %shier%s, um zum Verbot der Benutzernamen zur�ckzukehren.',

// Styles Admin
	'Styles_admin' => 'Styles Administration',
	'Styles_explain' => 'Hier kannst du Styles (Templates und Themes) hinzuf�gen, l�schen und �berwachen.',
	'Styles_addnew_explain' => 'In der folgenden Liste sind alle f�r dieses Template verf�gbaren Themes aufgef�hrt. Die in der Liste aufgef�hrten Objekte wurden der Datenbank noch nicht zugef�gt. Um ein Theme zu installieren, klicke einfach auf den Installieren-Link neben einem Eintrag',

	'Select_template' => 'W�hle ein Template',

	'Style' => 'Style',
	'Template' => 'Template',
	'Download' => 'Download',

	'Edit_theme' => 'Theme bearbeiten',
	'Edit_theme_explain' => 'Hier kannst du die Einstellungen f�r das gew�hlte Theme �ndern',

	'Create_theme' => 'Theme erstellen',
	'Create_theme_explain' => 'Hier kannst du ein neues Theme f�r das gew�hlte Template erstellen. Wenn du Farben eingibst (f�r die du Hexdezimalzahlen nutzen solltest), darfst du das # nicht mit angeben - CCCCCC ist z. B. korrekt, #CCCCCC nicht',

	'Export_themes' => 'Theme exportieren',
	'Export_explain' => 'Hier kannst du die Themedaten f�r ein bestimmtes Template exportieren. W�hle das Template aus der unteren Liste und das Script wird die Themekonfigurationsdatei erstellen und versuchen, sie in den Templatesordner zu speichern. Falls es die Datei nicht selbst speichern kann, kannst du sie runterladen. Um dem Skript das Schreiben der Datei zu erm�glichen, musst du dem gew�hlten Templateordner Schreibrechte gew�hren. F�r weitere Informationen siehe den Icy Phoenix Benutzerguide.',

	'Theme_installed' => 'Das gew�hlte Theme wurde installiert',
	'Style_removed' => 'Der gew�hlte Style wurde aus der Datenbank entfernt. Um den Style v�llig vom System zu entfernen, musst du es aus deinem Templates-Ordner l�schen.',
	'Theme_info_saved' => 'Die Themeinformationen f�r das gew�hlte Template wurden gespeichert. Du solltest jetzt die Dateizugriffsrechte der theme_info.cfg (und eventueller Verzeichnisse) auf Nur-Lesen zur�ck stellen',
	'Theme_updated' => 'Das gew�hlte Theme wurde aktualisiert. Du solltest die neuen Themeeinstellungen jetzt exportieren.',
	'Theme_created' => 'Theme erstellt. Du solltest das Theme jetzt in die Themekonfiguration exportieren, damit es nicht verloren geht oder du es an anderer Stelle einsetzen kannst.',

	'Confirm_delete_style' => 'Diesen Style wirklich l�schen?',

	'Download_theme_cfg' => 'Der Exporter konnte nicht in die Themeinformationsdatei schreiben. Klicke auf den unteren Knopf, um die Datei per Browser runterzuladen. Hast du sie runtergeladen, kannst du die Datei in deinen Ordner mit den Templatedateien kopieren. Schlie�lich kannst du die Dateien zu einem Paket zusammenschlie�en.',
	'No_themes' => 'Das gew�hlte Template hat keine verf�gbaren Themes. Um ein neues Theme zu erstellen, klicke auf den Theme-erstellen-Link auf der linken Seite',
	'No_template_dir' => 'Konnte das Template-Verzeichnis nicht �ffnen. Es ist eventuell nicht lesbar oder existiert nicht (mehr).',
	'Cannot_remove_style' => 'Du kannst den gew�hlten Style nicht entfernen, da er zum Forumsstandard geh�rt. Du kannst jedoch einen anderen Forumsstandard w�hlen und es erneut versuchen.',
	'Style_exists' => 'Der gew�hlte Stylename existiert bereits, bitte gehe zur�ck und w�hle einen anderen Namen.',

	'Click_return_styleadmin' => 'Klicke %shier%s, um zur Styles Administration zur�ckzukehren.',

	'Theme_settings' => 'Theme Einstellungen',
	'Theme_element' => 'Theme Element',
	'Simple_name' => 'Einfacher Name',
	'Save_Settings' => 'Einstellungen �bernehmen',

	'Stylesheet' => 'CSS-Stylesheet',
	'Stylesheet_explain' => 'Dateiname des CSS-Stylesheets f�r dieses Theme.',
	'Background_image' => 'Hintergrundbild',
	'Background_color' => 'Hintergrundfarbe',
	'Theme_name' => 'Themename',
	'Link_color' => 'Linkfarbe',
	'Text_color' => 'Textfarbe',
	'VLink_color' => 'Farbe f�r gesehener Link',
	'ALink_color' => 'Farbe f�r aktiver Link',
	'HLink_color' => 'Farbe f�r gew�hlter Link',
	'Tr_color1' => 'Farbe f�r Tabellenreihe 1',
	'Tr_color2' => 'Farbe f�r Tabellenreihe 2',
	'Tr_color3' => 'Farbe f�r Tabellenreihe 3',
	'Tr_class1' => 'Tabellenreihe Klasse 1',
	'Tr_class2' => 'Tabellenreihe Klasse 2',
	'Tr_class3' => 'Tabellenreihe Klasse 3',
	'Th_color1' => 'Farbe f�r Tabellenkopf 1',
	'Th_color2' => 'Farbe f�r Tabellenkopf 2',
	'Th_color3' => 'Farbe f�r Tabellenkopf 3',
	'Th_class1' => 'Tabellenkopf Klasse 1',
	'Th_class2' => 'Tabellenkopf Klasse 2',
	'Th_class3' => 'Tabellenkopf Klasse 3',
	'Td_color1' => 'Farbe f�r Tabellenzelle 1',
	'Td_color2' => 'Farbe f�r Tabellenzelle 2',
	'Td_color3' => 'Farbe f�r Tabellenzelle 3',
	'Td_class1' => 'Tabellenzelle Klasse 1',
	'Td_class2' => 'Tabellenzelle Klasse 2',
	'Td_class3' => 'Tabellenzelle Klasse 3',

// Admin Userlist Start
	'Userlist' => 'Benutzerliste',
	'Userlist_description' => 'Zeigt eine komplette Liste der Benutzer und erlaubt das Ausf�hren verschiedener Aktionen mit den Benutzerkonten',

	'Add_group' => 'Zu einer Gruppe hinzuf�gen',
	'Add_group_explain' => 'W�hle die Gruppe aus, zu welcher der Benutzer hinzugef�gt werden soll',

	'Open_close' => 'Auf-/Zuklappen',
	'Active' => 'Aktiv',
	'Group' => 'Gruppe(n)',
	'Rank' => 'Rang',
	'Last_activity' => 'Letzte Aktivit�t',
	'Never' => 'Niemals',
	'User_manage' => 'Verwalten',
	'Find_all_posts' => 'Finde alle Beitr�ge',

	'Select_one' => 'W�hle eine Aktion',
	'Ban' => 'Bannen',
	'Activate_deactivate' => 'Aktivieren/Deaktivieren',

	'User_id' => 'Benutzer ID',
	'User_level' => 'Benutzer Level',
	'Ascending' => 'Aufsteigend',
	'Descending' => 'Absteigend',
	'Show' => 'Zeigen',
	'All' => 'Alle',

	'Member' => 'Mitglied',
	'Pending' => 'Wartend',

	'Confirm_user_ban' => 'Bist du sicher, dass du die ausgew�hlten Benutzer bannen m�chtest?',
	'Confirm_user_deleted' => 'Bist du sicher, dass du die ausgew�hlten Benutzer l�schen m�chtest?',

	'User_status_updated' => 'Benutzerstatus wurde erfolgreich aktualisiert.',
	'User_banned_successfully' => 'Benutzer wurde(n) erfolgreich gebannt.',
	'User_deleted_successfully' => 'Benutzer wurde(n) erfolgreich gel�scht.',
	'User_add_group_successfully' => 'Benutzer wurde(n) erfolgreich zur Gruppe hinzugef�gt.',

	'Click_return_userlist' => 'Klicke %shier%s um zur Benutzerliste zur�ckzukehren.',
//
// Admin Userlist End

// Version Check
	'Version_up_to_date' => 'Dein Forum ist auf dem neusten Stand; es sind keine Updates f�r deine phpBB-Version verf�gbar.',
	'Version_up_to_date_ip' => 'Dein Forum ist auf dem neusten Stand; es sind keine Updates f�r deine Icy Phoenix Version verf�gbar.',
	'Version_not_up_to_date' => 'Dein Forum ist <b>nicht</b> auf dem neusten Stand. Es sind Updates f�r deine phpBB-Version verf�gbar, bitte besuche <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a>, um die aktuellste Version zu erhalten.',
	'Version_not_up_to_date_ip' => 'Es sind Updates f�r deine Icy Phoenix Version verf�gbar, bitte besuche <a href="http://www.icyphoenix.com/" target="_new">Icy Phoenix</a>, um die aktuellste Version zu erhalten.',
	'Latest_version_info' => 'Die neuste verf�gbare Version ist <b>phpBB %s</b>.',
	'Current_version_info' => 'Du verwendest <b>phpBB %s</b>.',
	'Connect_socket_error' => 'Die Verbindung zum phpBB-Server konnte nicht aufgebaut werden. Es trat folgender Fehler auf:<br />%s',
	'Connect_socket_error_ip' => 'Es konnte keine Verbindung zum Icy Phoenix Server hergestellt werden',
	'Socket_functions_disabled' => 'Die Socket-Funktionen konnten nicht benutzt werden.',
	'Mailing_list_subscribe_reminder' => 'Um immer die neusten Informationen zu Updates von phpBB zu erhalten, solltest du dich <a href="http://www.phpbb.com/support/" target="_new">beim phpBB Newsletter anmelden</a>.',
	'Version_information' => 'Versions-Information',
	'Version_not_checked' => 'Versionspr�fung ist zur Zeit deaktiviert. Bitte besuche die Icy Phoenix Support Foren f�r Informationen �ber neue Versionen.',

// Advanced Signature Divider Control
	'sig_title' => 'Signaturteiler Einstellungen',
	'sig_divider' => 'Signaturteiler',
	'sig_explain' => 'Hier kannst du einstellen, mit welchen Zeichen die Signatur von den Beitr�gen geteilt wird.',

// Start add - Birthday MOD
	'Birthday_required' => 'Die Eingabe des Geburtstags erforderlich machen',
	'Enable_birthday_greeting' => 'Geburtstagsgr��e aktivieren',
	'Birthday_greeting_expain' => 'Benutzer, die einen Geburtstag angegeben haben, k�nnen bei Einloggen in das Forum begl�ckw�nscht werden.',
	'Next_birthday_greeting' => 'Jahr des n�chsten Geburtstags-Popups',
	'Next_birthday_greeting_expain' => 'Dieses Feld gibt an, in welchem Jahr der Benutzer die n�chste Gl�ckwunschbenachrichtigung bekommt.',
	'Wrong_next_birthday_greeting' => 'Das angegebene Jahr des n�chsten Geburtstags-Popups war nicht korrekt. Bitte nochmal eingeben.',
	'Max_user_age' => 'H�chstalter',
	'Min_user_age' => 'Mindestalter',
	'Birthday_lookforward' => 'Geburtstagsvorschau',
	'Birthday_lookforward_explain' => 'Anzahl der Tage, die vorausgesehen werden soll',
// End add - Birthday MOD

// Start add - Yellow card admin MOD
	'Max_user_bancard' => 'Maximale Anzahl der Warnungen',
	'Max_user_bancard_explain' => 'Wenn ein Benutzer mehr gelbe Karten bekommt, als hier angegeben sind, wird er gesperrt.',
	'ban_card' => 'Gelbe Karte',
	'ban_card_explain' => 'Der Benutzer wird gesperrt, wenn er mehr als %d gelbe Karten hat.',
	'Greencard' => 'Benutzer Reaktivieren',
	'Bluecard' => 'Beitrags-Meldungen',
	'Bluecard_limit' => 'Intervall der Beitrags-Meldungen',
	'Bluecard_limit_explain' => 'Die Moderatoren werden alle x Beitrags-Meldungen erneut benachrichtigt.',
	'Bluecard_limit_2' => 'Erst-Benachrichtigung',
	'Bluecard_limit_2_explain' => 'Die Moderatoren erhalten die erste Benachrichtigung �ber einen Beitrag, wenn x Benachrichtigungen eingegangen sind.',
	'Report_forum' => 'Benachrichtigungs-Forum',
	'Report_forum_explain' => 'In diesem Forum k�nnen die Beitrags-Benachrichtigungen gelistet werden. Gib hier die ID des Forums an bzw 0 um diese Funktion abzuschalten.',

// Start add - Last visit MOD
	'Hidde_last_logon' => 'Anzeige des letzten Besuchs ausblenden',
	'Hidde_last_logon_expain' => 'Wenn auf JA gesetzt, wird die Anzeige des letzten Besuchs f�r alle Benutzer bis auf Administratoren ausgeblendet.',
// End add - Last visit MOD
//
// Start add - Online/Offline/Hidden Mod
	'Online_time' => 'Onlinestatus Zeit',
	'Online_time_explain' => 'Anzahl in Sekunden, die ein Benutzer Online gezeigt wird (verwende keinen Wert kleiner als 60).',
	'Online_setting' => 'Online Status Einstellungen',
	'Online_color' => 'Online Textfarbe',
	'Offline_color' => 'Offline Textfarbe',
	'Hidden_color' => 'Versteckt Textfarbe',
// End add - Online/Offline/Hidden Mod

// Disallow other admins to delete or edit the first admin MOD
	'L_LISTOFADMINEDIT' => 'Blockierte Zugriffe auf den ersten Admin Account',
	'L_LISTOFADMINEDITEXP' => 'Diese Liste beinhaltet die blockierten Zugriffe auf den ersten Admin Account im Forum. Diese Administratoren haben versucht, das Profil des ersten Admins im Forum zu bearbeiten, oder ihn zu l�schen oder zum normalen Nutzer herunterzustufen. Eine �nderung des Profils und/oder der Berechtigungen fand nicht statt und wurde erfolgreich blockiert. Diese Liste kann nur vom ersten Admin des Forums gel�scht werden.',
	'L_LISTOFADMINEDITUSERS' => 'Liste blockierter Zugriffe auf den ersten Admin Account',
	'L_LISTOFADMINTEXT' => 'erfolgreich blockierter Zugriff erfolgte �ber',
	'L_DELETEMSG' => 'Eintr�ge l�schen',
	'L_DELETESUCMSG' => 'Die Eintr�ge wurden erfolgreich gel�scht',
	'L_ADMINEDITMSG' => 'Du hast keine Berechtigung, das Profil und/oder die Berechtigungen des ersten Admin Accounts im Forum zu bearbeiten. <br /><br />Der Zugriffsversuch wurde gespeichert und erfolgreich blockiert!',
	'use_thank' => 'Erlaube Dankesbeitr�ge',
	'Default_avatar' => 'Standardavatar festlegen',
	'Default_avatar_explain' => 'Dies gibt Benutzern, die noch keinen Avatar ausgew�hlt haben, einen Standardavatar. Lege Standardavatare f�r Benutzer und G�ste fest und w�hle aus, ob diese nur f�r Benutzer oder G�ste oder f�r Beide angezeigt werden sollen.',
	'Default_avatar_guests' => 'G�ste',
	'Default_avatar_users' => 'Benutzer',
	'Default_avatar_both' => 'Beide',
	'Default_avatar_none' => 'Niemand',

// Start Optimize Database
	'Optimize' => 'Optimieren',
	'Optimize_explain' => 'Hier kannst du den Inhalt der Tabellen deiner Datenbank optimieren. Auf diese Weise kannst du Daten eliminieren, die leeren Platz verbraucht.<br />Diese Operation sollte regelm��ig durchgef�hrt werden, um deine Datenbank schnell und zuverl�ssig zu halten.',
	'Optimize_DB' => 'Datenbank optimieren',
	'Optimize_Enable_cron' => 'Cron aktivieren',
	'Optimize_Cron_every' => 'Cron alle',
	'Optimize_Cron_every_explain' => 'Bitte beachte, dass auch die Funktion <b>PHP Cron [Globale Einstellung]</b> in <b>Konfiguration &raquo; Icy Phoenix Einstellungen &raquo; Cron</b> aktiviert sein muss.',
	'Optimize_month' => 'Monat',
	'Optimize_2weeks' => '2 Wochen',
	'Optimize_week' => 'Woche',
	'Optimize_3days' => '3 Tage',
	'Optimize_day' => 'Tag',
	'Optimize_6hours' => '6 Stunden',
	'Optimize_hour' => 'Stunde',
	'Optimize_30minutes' => '30 Minuten',
	'Optimize_20seconds' => '20 Sekunden (nur zum Testen)',
	'Optimize_Current_time' => 'Aktuelle Zeit',
	'Optimize_Next_cron_action' => 'n�chste Cron Aktion',
	'Optimize_Performed_Cron' => 'ausgef�hrte Cron',
	'Optimize_Show_not_optimized' => 'Zeige nur nicht optimierte Tabellen',
	'Optimize_Show_begin_for' => 'Zeige nur Tabellen die beginnen mit',
	'Optimize_Configure' => 'Konfigurieren',
	'Optimize_Table' => 'Tabelle',
	'Optimize_Record' => 'Eintr�ge',
	'Optimize_Type' => 'Typ',
	'Optimize_Size' => 'Gr��e',
	'Optimize_Status' => 'Status',
	'Optimize_CheckAll' => 'Alle ausw�hlen',
	'Optimize_UncheckAll' => 'Alle abw�hlen',
	'Optimize_InvertChecked' => 'Auswahl umkehren',
	'Optimize_return' => 'Klicke %shier%s, um zur Datenbankoptimierung zur�ckzukehren.',
	'Optimize_success' => 'Die Datenbank wurde erfolgreich optimiert.',
	'Optimize_NoTableChecked' => '<b>Keine</b> Tabellen ausgew�hlt',
	
// End Optimize Database
// Start add - Global announcement MOD
	'Globalannounce' => 'Globale Ank�ndigung',
// End add - Global announcement MOD

// google bot detector by pukapuka
	'Detector' => 'Google Bot Detektor',
	'Detector_Explain' => 'Der Google Bot Detektor erkennt Besuche des Google Bots auf deiner Seite.<br /><br />',
	'Detector_ID' => '#',
	'Detector_Time' => 'Zeit',
	'Detector_Url' => 'URL',
	'Detector_Clear' => 'Alles l�schen',
	'Detector_No_Bot' => 'Kein Bot gefunden',
	'Detector_Cleared' => 'Erkannte Bots erfolgreich gel�scht.',
	'Click_Return_Detector' => 'Klicke %shier%s, um zum Bot Detektor zur�ckzukehren.',

// added to Auto group mod
	'group_count' => 'Anzahl erforderlicher Beitr�ge',
	'group_count_max' => 'Anzahl maximaler Beitr�ge',
	'group_count_updated' => '%d Mitglieder wurden entfernt, %d Mitglieder wurden zur Gruppe hinzugef�gt',
	'Group_count_enable' => 'F�ge Benutzer automatisch hinzu, wenn sie schreiben',
	'Group_count_update' => 'Hinzuf�gen/Aktualisieren neuer Nutzer',
	'Group_count_delete' => 'L�schen/Aktualisieren alter Nutzer',
	'User_allow_ag' => 'Aktiviere Auto Gruppe',
	'group_count_explain' => 'Wenn Benutzer mehr als diese Anzahl Beitr�ge geschrieben haben <i>(in beliebigen Foren)</i>, werden sie automatisch zu dieser Benutzergruppe hinzugef�gt<br /> Das trifft nur zu, wenn "' . $lang['Group_count_enable'] . '" aktiviert ist.',

// Start add - Bin Mod
	'Bin_forum' => 'Papierkorb-Forum',
	'Bin_forum_explain' => 'F�ge die Forum ID des Forums ein, in welches die Papierkorbbeitr�ge verschoben werden sollen. Trage 0 ein, um die Funktion zu deaktivieren. Du solltest die Forumsberechtigungen bearbeiten und Benutzern das Lesen/Schreiben/Antworten nicht gestatten... oder den Zugang zum Forum ganz verwehren. Nur Moderatoren oder Administratoren sollten derartige Rechte in diesem Forum besitzen.',
// End add - Bin Mod

// Begin Quick Title Edition Mod 1.0.0 by Xavier Olive.
	'Title_infos' => 'Quick Titel Management',
	'Must_select_title' => 'Du musst ein Quick Titel Add-on ausw�hlen',
	'Title_updated' => 'Quick Titel Add-on aktualisiert',
	'Title_added' => 'Quick Titel Add-on hinzugef�gt',
	'Click_return_titleadmin' => 'Klicke %shier%s, um zum Quick Titel Management zur�ckzukehren.',
	'Title_removed' => 'Quick Titel Add-on entfernt',
	'Quick_title_explain' => 'Hier kannst du kurze Texte erstellen, welche du dann per Klick auf einen Button zum Thementitel hinzuf�gen kannst.</br>Wenn du m�chtest, dass der Name des Benutzers, der die �nderung durchgef�hrt hat angezeigt wird, setzte einfach %mod% an die gew�nschte Stelle. Zum Beispiel wird [Link OK | gepr�ft von %mod%] als [Link OK | gepr�ft von ModeratorName] angezeigt. Auf die gleiche Art und Weise kannst du auch das Datum einf�gen, indem du %date% an die gew�nschte Stelle setzt.',
	'Title_head' => 'Quick Titel Add-on',
	'Title_auth' => 'Berechtigungen',
	'Administrator' => 'Administrator',
	'Topic_poster' => 'Themenstarter',
	'Add_new_title_info' => 'Quick Titel Add-on hinzuf�gen',
	'Title_perm_info' => 'Berechtigungen',
	'Title_perm_info_explain' => 'Benutzer mit diesem Level k�nnen das Quick Title Add-on nutzen.',
	'Title_info' => 'Quick Titel Add-on',
// End Quick Title Edition Mod 1.0.0 by Xavier Olive.

// Limit Image Width MOD
	'Available' => 'verf�gbar',
	'Unavailable' => 'nicht verf�gbar',
	'LIW_title' => 'Bildbreiten-Begrenzung',
	'LIW_admin_explain' => 'Diese Seite erlaubt dir das Ein- und Ausschalten der Bildbreitenbegrenzung, sowie das Einstellen der maximalen Bildbreite f�r jedes im Forum eingestellte Bild. Sollte die SQL-Tabelle, welche die Abmessungen aller Bilder enth�lt, zu gro� werden, kannst du sie mit einem Klick auf \'Cache-Tabelle leeren\' leeren.<br /><br />Du kannst auch sehen, ob es m�glich ist, die Bildbreitenbegrenzung auf deinem Webserver zu nutzen, indem du in der \'Kompatibilit�tspr�fung\' Box unten nachschaust.',
	'LIW_compatibility_checks' => 'Kompatibilit�tspr�fung',
	'LIW_mod_config' => 'MOD Konfiguration',

	'LIW_config_updated' => 'Die Bildbreitenbegrenzungs-Konfiguration wurde erfolgreich aktualisiert.',
	'LIW_cache_emptied' => 'Die Cache-Tabelle wurde erfolgreich geleert.',
	'LIW_click_return_config' => 'Klicke %shier%s, um zur Bildbreitenbegrenzungs-Konfigurationsseite zur�ckzukehren.',

	'LIW_getimagesize' => 'getimagesize() URL Unterst�tzung',
	'LIW_getimagesize_explain' => 'Verf�gbar ab PHP 4.0.5',
	'LIW_getimagesize_available' => 'Der MOD ist in der Lage, die Bildabmessungen zu erkennen.',
	'LIW_getimagesize_unavailable' => 'Der MOD ist nicht in der Lage zu erkennen, ob ein Bild zu gro� ist, deshalb wird <i>jedes</i> Bild angepasst.',

	'LIW_urlaware' => 'URL-aware fopen wrappers',
	'LIW_urlaware_explain' => 'Setze allow_url_fopen auf Yes in deiner php.ini',
	'LIW_urlaware_available' => 'Der MOD ist in der Lage, einen Fingerabdruck f�r Bilder zu erstellen und kann die Bildabmessungen im Cache speichern.',
	'LIW_urlaware_unavailable' => 'Der MOD ist nicht in der Lage, einen Fingerabdruck f�r Bilder zu erstellen und kann die Bildabmessungen nicht im Cache speichern.',

	'LIW_openssl' => 'openSSL Erweiterung geladen',
	'LIW_openssl_explain' => 'Lade die openssl.dll Erweiterung in deiner php.ini',
	'LIW_openssl_available' => 'Der MOD ist in der Lage Bildabmessungen von https:// Adressen zu lesen und diese im Cache zu speichern.',
	'LIW_openssl_unavailable' => 'Der MOD ist nicht in der Lage Bildabmessungen von https:// Adressen zu lesen und kann diese nicht im Cache zu speichern.',

	'LIW_enable' => 'Gr��e von Bildern in Beitr�gen �ndern',
	'LIW_enable_explain' => 'W�hle %s um dem Mod die �nderung der Bildgr��e in Beitr�gen zu erlauben.', // Set to	 'Yes'] to ....
	'LIW_sig_enable' => 'Gr��e von Bildern in Signaturen �ndern',
	'LIW_sig_enable_explain' => 'W�hle %s um dem Mod die �nderung der Bildgr��e in Signaturen zu erlauben.',
	'LIW_attach_enable' => 'Gr��e von angeh�ngten Bildern �ndern',
	'LIW_attach_enable_explain' => 'W�hle %s um dem Mod die �nderung der Bildgr��e von angeh�ngten Bildern (mittels Attachment Mod) in Beitr�gen zu erlauben.',
	'LIW_max_width' => 'Maximale Bildbreite',
	'LIW_max_width_explain' => 'Gib die maximale Bildbreite (in Pixeln) eines im Beitrag mittels [img] Tags eingestellten Bildes an.',
	'LIW_empty_cache' => 'Bildabmessungs-Cache leeren',
	'LIW_empty_cache_explain' => 'Die Cache Tabelle enth�lt zurzeit <b>%s</b> Eintr�ge', // Your cache table currently contains <b>312</b> records
	'LIW_empty_cache_note' => 'Beachte, dass das L�schen der Cache-Tabelle dazu f�hrt, dass der MOD alle Bildabmessungen erneut einliest, was zu einer vor�bergehenden Verlangsamung beim laden der Themen f�hren kann.',
	'LIW_empty_cache_button' => 'Cache-Tabelle leeren',

// News
	'xs_news_settings' => 'News Einstellungen',
	'xs_news_show' => 'News Banner anzeigen?',
	'xs_news_show_ticker' => 'News Ticker anzeigen?',
	'xs_news_show_ticker_explain' => 'Das ist der Hauptschalter. Wenn du hier \'Nein\' einstellst, werden keine Ticker mehr angezeigt. Hast du \'Ja\' eingestellt, kannst du die Anzeige der einzelnen Ticker individuell konfigurieren.',
	'xs_news_show_ticker_subtitle' => 'Ticker Untertitel anzeigen?',
	'xs_news_show_ticker_subtitle_explain' => 'W�hle Ja, um \'News Tickers\' �ber den News Tickern anzuzeigen.',
	'xs_news_show_news_subtitle' => 'News Untertitel anzeigen?',
	'xs_news_show_news_subtitle_explain' => 'W�hle Ja, um \'News Items\' �ber den News Items anzuzeigen.',
	'xs_news_dateformat' => 'Datumformat',
	'xs_news_dateformat_helper' => 'Verwendet dieses Format: %s',

// Bantron Mod : Begin
	'Bantron' => 'Bantron',
	'BM_Title' => 'Bantron',
	'BM_Explain' => 'Auf dieser Seite kannst du die Sperren im Forum anzeigen, bearbeiten, hinzuf�gen und l�schen.',

	'BM_Show_bans_by' => 'Zeige gesperrte bei',
	'BM_All' => 'Alle',
	'BM_Show' => 'Anzeigen',

	'BM_IP' => 'IP',
	'BM_Last_visit' => 'Letzter Besuch',
	'BM_Banned' => 'Gesperrt',
	'BM_Expires' => 'Abgelaufen',
	'BM_By' => 'bei',
	'BM_Reasons' => 'Grund',

	'BM_Add_a_new_ban' => 'Neue Sperre hinzuf�gen',
	'BM_Delete_selected_bans' => 'L�sche ausgew�hlte Sperren',

	'BM_Private_reason' => 'Privater Grund',
	'BM_Private_reason_explain' => 'Der hier eingegebene Grund f�r die Sperrung von Benutzernamen, E-Mails, und/oder IP Adressen ist nur als Notiz f�r die Administration gedacht.',

	'BM_Public_reason' => '�ffentlicher Grund',
	'BM_Public_reason_explain' => 'Der hier eingegebene Grund f�r die Sperrung von Benutzernamen, E-Mails, ond/oder IP Adressen wird den gesperrten Benutzern angezeigt, wenn sie versuchen, auf das Forum zuzugreifen.',
	'BM_Generic_reason' => 'Allgemeiner Grund',
	'BM_Mirror_private_reason' => 'Spiegelt privaten Grund wieder',
	'BM_Other' => 'Anderer',

	'BM_Expire_time' => 'Ablaufzeit',
	'BM_Expire_time_explain' => 'Mit der Angabe eines Datums, entweder relativ zum aktuellen Datum oder ein absolutes Datum, wird die Sperre nach diesem Zeitpunkt aufgehoben.',
	'BM_Never' => 'Niemals',
	'BM_After_specified_length_of_time' => 'Nach angegebener Zeitspanne',
	'BM_Minutes' => 'Minute(n)',
	'BM_Hours' => 'Stunde(n)',
	'BM_Days' => 'Tag(e)',
	'BM_Weeks' => 'Woche(n)',
	'BM_Months' => 'Monat(e)',
	'BM_Years' => 'Jahr(e)',
	'BM_After_specified_date' => 'Nach bestimmtem Datum',
	'BM_AM' => 'AM',
	'BM_PM' => 'PM',
	'BM_24_hour' => '24-Stunden',

	'BM_Ban_reasons' => 'Sperrungsgr�nde',
// Bantron Mod : End

	'board_disable_message' => 'Schalte die Nachricht f�r die Deaktivierung des Forums standardm��ig aus.',
	'board_disable_message_texte' => 'Meldung die angezeigt wird, wenn das Forum deaktiviert ist.',

// Start Edit Notes MOD
	'Edit_notes_settings' => 'Bearbeitungsnotizen-Einstellungen',
	'Edit_notes_enable' => 'Bearbeitungsnotizen aktivieren',
	'Edit_notes_enable_explain' => 'Aktiviert oder deaktiviert Bearbeitungsnotizen im Forum',
	'Max_edit_notes' => 'Maximale Anzahl Bearbeitungsnotizen',
	'Max_edit_notes_explain' => 'Gibt die maximale Anzahl von Bearbeitungsnotizen pro Beitrag an.',
	'Edit_notes_permissions' => 'Bearbeitungsnotizen-Berechtigungen',
	'Edit_notes_permissions_explain' => 'Gibt an, welche Benutzer Bearbeitungsnotizen verwenden k�nnen.',
	'Edit_notes_admin' => 'Nur Administratoren',
	'Edit_notes_staff' => 'Team (Admins und Mods)',
	'Edit_notes_reg' => 'Registrierte Benutzer (auch Admins und Mods)',
	'Edit_notes_all' => 'Alle Benutzer (G�ste, registrierte Benutzer, Admins und Mods)',
// End Edit Notes MOD

// BEGIN Disable Registration MOD
	'registration_status' => 'Registrierungen deaktivieren',
	'registration_status_explain' => 'Dieser Mod deaktiviert alle Neuregistrierungen in deinem Forum.',
	'registration_closed' => 'Grund f�r Registrierungsdeaktivierung',
	'registration_closed_explain' => 'Dieser Texte erkl�rt, warum Registrierungen deaktiviert sind. Er wird angezeigt, wenn ein neuer Nutzer versucht, sich zu registrieren. Lasse dieses Feld leer, um einen Standard-Text anzuzeigen',
// END Disable Registration MOD

	'Gender_required' => 'Zwinge Mitglieder, ihr Geschlecht anzugeben',

//admin user list mail
	'Usersname' => 'Benutzername',
	'Admin_Users_List_Mail_Title' => 'Benutzer E-Mail-Liste',
	'Admin_Users_List_Mail_Explain' => 'Hier ist eine Liste der E-Mail Adressen deiner Benutzer',

// Start add - Forum notification MOD
	'Forum_notify' => 'Erlaube Forumsbenachrichtigung',
	'Forum_notify_enabled' => 'Erlauben',
	'Forum_notify_disabled' => 'Nicht erlauben',
// End add - Forum notification MOD

	'Smilie_table_columns' => 'Smiley-Tabelle Spalten',
	'Smilie_table_rows' => 'Smiley-Tabelle Zeilen',
	'Smilie_window_columns' => 'Smiley-Fenster Spalten',
	'Smilie_window_rows' => 'Smiley-Fenster Zeilen',
	'Smilie_single_row' => 'Smiley-Anzeige pro Zeile (z.B.: Schnellantwort Smiley Nummer)',

	'Auth_Rating' => 'Bewertungen',

// Gravatars
	'Enable_gravatars' => 'Gravatare aktivieren',
	'Gravatar_rating' => 'Maximale Gravatar Bewertung',
	'Gravatar_rating_explain' => 'Lies die <a href="http://www.gravatar.com/rating.php" target="_blank">Bewertungsrichtlinien</a> f�r mehr Informationen. W�hle \'keine\' f�r keine Beschr�nkung.',
	'Gravatar_default_image' => 'Gravatar Standardbild',
	'Gravatar_default_image_explain' => 'Wenn kein Gravatar gefunden wurde wird dieses Bild angezeigt. Der Pfad zum Bild ist relativ zum Icy Phoenix Root-Verzeichnis. Lasse dieses Feld leer, um kein Bild anzuzeigen.',

// Admin Account Actions
	'Account_actions' => 'Benutzer-Konto Aktionen',
	'Account_inactive_explain' => 'Hier kannst du alle Benutzer sehen, die nicht aktiviert sind und auf ihre Aktivierung warten. Du kannst diese Benutzerkonten aktivieren oder l�schen.<br />Weiterhin kannst du Befugnisse einstellen und Profile bearbeiten wenn du auf die verschiedenen Links klickst.',
	'Account_active_explain' => 'Hier kannst du alle Benutzer sehen, die aktive Mitglieder sind. Du kannst diese Benutzerkonten aktivieren oder l�schen.<br />Weiterhin kannst du Befugnisse einstellen und Profile bearbeiten wenn du auf die verschiedenen Links klickst.',
	'Account_active' => 'Aktive Benutzer',
	'Account_inactive' => 'Inaktive Benutzer',
	'Account_activate' => 'Markierte aktivieren',
	'Account_deactivate' => 'Markierte deaktivieren',
	'Account_none' => 'Er warten keine Benutzer auf Aktivierung.',
	'Account_total_user' => 'Benutzeranzahl: <b>%d</b> Benutzer',
	'Account_total_users' => 'Benutzeranzahl: <b>%d</b> Benutzer',
	'Account_activation' => 'Aktivierungsmethode',
	'Account_awaits' => 'Wartet auf Aktivierung seit',
	'Account_registered' => 'Registriert seit',
	'Account_delete_users' => 'Bist du sicher dass du diese Benutzer l�schen willst?',
	'Account_delete_user' => 'Bist du sicher dass du diesen Benutzer l�schen willst?',
	'Account_sort_letter' => 'Zeige nur Benutzerkonten beginnend mit',
	'Account_others' => 'andere',
	'Account_all' => 'alle',
	'Account_year' => 'Jahr',
	'Account_years' => 'Jahre',
	'Account_week' => 'Woche',
	'Account_weeks' => 'Wochen',
	'Account_day' => 'Tag',
	'Account_days' => 'Tage',
	'Account_hour' => 'Stunde',
	'Account_hours' => 'Stunden',
	'Account_user_activated' => 'Der Benutzer wurde aktiviert.',
	'Account_users_activated' => 'Die Benutzer wurden aktiviert.',
	'Account_user_deactivated' => 'Der Benutzer wurde deaktiviert.',
	'Account_users_deactivated' => 'Die Benutzer wurden deaktiviert.',
	'Account_user_deleted' => 'Der Benutzer wurde gel�scht.',
	'Account_users_deleted' => 'Die Benutzer wurden gel�scht.',
	'Account_activated' => 'Benutzer-Konto Aktivierung',
	'Account_activated_text' => 'Dein Benutzer-Konto wurde aktiviert',
	'Account_deactivated' => 'Benutzer-Konto Deaktivierung',
	'Account_deactivated_text' => 'Dein Benutzer-Konto wurde deaktiviert',
	'Account_deleted' => 'Benutzer-Konto L�schung',
	'Account_deleted_text' => 'Dein Benutzer-Konto wurde gel�scht',
	'Account_notification' => 'Benachrichtigungsmail gesendet.',

// Acronyms
	'Acronyms_title' => 'Abk�rzungs-Verwaltung',
	'Acronyms_explain' => 'Hier kannst du Abk�rzungen hinzuf�gen, bearbeiten und l�schen. Die hier eingetragenen Abk�rzungen werden dann automatisch in den Beitr�gen hervorgehoben und deren Bedeutung wird mittels Hover-Funktion angezeigt.',
	'Acronym' => 'Abk�rzung',
	'Acronyms' => 'Abk�rzungen',
	'Edit_acronym' => 'Abk�rzung bearbeiten',
	'Description' => 'Bedeutung',
	'Add_new_acronym' => 'Neue Abk�rzung hinzuf�gen',
	'Update_acronym' => 'Abk�rzung aktualisieren',

	'Must_enter_acronym' => 'Du musst eine Abk�rzung und deren Bedeutung eingeben.',
	'No_acronym_selected' => 'Keine Abk�rzung zum bearbeiten ausgew�hlt',

	'Acronym_updated' => 'Die ausgew�hlte Abk�rzung wurde erfolgreich aktualisiert',
	'Acronym_added' => 'Die Abk�rzung wurde erfolgreich hinzugef�gt',
	'Acronym_removed' => 'Die ausgew�hlte Abk�rzung wurde entfernt',

	'Click_return_acronymadmin' => 'Klicke %shier%s, um zur Abk�rzungs-Verwaltung zur�ckzukehren.',
	'Prune_shouts' => 'Shouts automatisch l�schen',
	'Prune_shouts_explain' => 'Anzahl Tage, bevor Shouts gel�scht werden. Gib 0 ein, um diese Funktion zu deaktivieren.',

	'MOD_OS_ForumRules' => 'Olympus-Style Forum Regeln',
	'Forum_rules' => 'Forenregeln',
	'Rules_display_title' => 'Zeige Titel in der Forenregeln-BOX an?',
	'Rules_custom_title' => 'Eigener Titel',
	'Rules_appear_in' => 'Diese Regeln werden angezeigt beim...',
	'Rules_in_viewforum' => 'anzeigen des Forums',
	'Rules_in_viewtopic' => 'anzeigen von Themen im Forum',
	'Rules_in_posting' => 'schreiben/antworten in diesem Forum',

	'Php_Info_Explain' => 'Diese Seite zeigt Information �ber die auf diesem Server installierte PHP Version. Sie beinhaltet Details �ber Module, verf�gbare Variablen und Standard-Einstellungen. Diese Informationen k�nnten beim Diagnostizieren von Problemen hilfreich sein. Beachte, dass einige Webhoster aus Sicherheitsgr�nden die hier angezeigten Informationen minimieren und dir somit gegebenenfalls nicht alles angezeigt werden. Wir empfehlen dir, keine Informationen der Seite an andere rauszugeben, au�en vielleicht an Tema Mitglieder des Supportforums.',

	'IcyPhoenix_Main' => 'Icy Phoenix Homepage',
	'IcyPhoenix_Download' => 'Icy Phoenix Download',
	'IcyPhoenix_Code_Changes' => 'Code Changes Mod',
	'IcyPhoenix_Updates' => 'Icy Phoenix Updates',
	'PhpBB_Upgrade' => 'phpBB Upgrade',
	'Header_Welcome' => 'Willkommen im Icy Phoenix Administrationszentrum',

	'Prune_users' => 'Benutzer l�schen',
	'Prune_Overview' => 'Pruning �bersicht',
	'Prune_title_explain' => 'Hier kannst du die Einstellungen zum automatischen L�schen (Pruning) f�r jedes Forum bearbeiten.',
	'Prune_forum' => 'Forum',
	'Prune_active' => 'Automatisches L�schen aktivieren',
	'Prune_freq' => 'Alle entfernen',
	'Prune_check' => 'Alle ausw�hlen',
	'Prune_days' => 'Tage',
	'Prune_days_explain' => '* Entferne Themen ohne Antworten.',
	'Click_return_admin_po' => 'Klicke %shier%s, um zur Pruning �bersicht zur�ckzukehren.',
	'Prune_update' => 'Die Einstellungen zum automatischen L�schen wurden erfolgreich aktualisiert.',

	'Admin_notepad_title' => 'Notizblock',
	'Admin_notepad_explain' => 'Auf diesem Notizblock k�nnen sich Administratoren Nachrichten hinterlassen.',
	'Allow_generator' => 'Avatar-Generator aktivieren',
	'Avatar_generator_template_path' => 'Avatar Generator Template Pfad',
	'Avatar_generator_template_path_explain' => 'Pfad unterhalb des Icy Phoenix Root-Verzeichnisses f�r Template Bilder, z.B. images/avatars/generator_templates',

// Start Autolinks Mod
	'Autolink_first' => 'Verlinke jedes Schl�sselwort automatisch einmal pro Beitrag',

	'Autolinks_title' => 'Autolinks',
	'Autolinks_explain' => 'Hier kannst du Schl�sselworte, welche in Beitr�gen automatisch in Links umgewandelt werden, hinzuf�gen, bearbeiten oder l�schen. Wenn es sich bei der eingegebenen URL um eine interne Adresse handelt, welche auf ein Forum oder Portal zeigt und du unten &quot;Intern: Ja&quot; ausw�hlst, wird die Session ID mit angeh�ngt.<br /><br /><b>Beispiel:</b> Wenn das <b>Schl�sselwort</b> in einem Beitrag gefunden wird, wird es automatisch mit dem folgenden ersetzt<br /><br />&lt;a href=&quot;<b>URL</b>&quot; title=&quot;<b>Kommentar</b>&quot; style=&quot;<b>Style</b>&quot;&gt;<b>Schl�sselwort</b>&lt;/a&gt;',
	'links_keyword' => 'Schl�sselwort',
	'links_title' => 'Text',
	'links_url' => 'URL',
	'links_comment' => 'Kommentar',
	'links_style' => 'Style',
	'links_forum' => 'Forum f�r Autolink',
	'links_forum2' => 'Forum',
	'links_internal' => 'Intern',
	'Autolinks_add' => 'Autolink hinzuf�gen',
	'Add_keyword' => 'Autolink hinzuf�gen',
	'Autolinks_edit' => 'Autolink bearbeiten',
	'Edit_keyword' => 'Autolink bearbeiten',
// 'Delete_link' => 'Markiere die Box, um den Autolink zu l�schen.',

	'Select_all_forums' => 'Alle Foren',
	'Autolink_added' => 'Autolink erfolgreich hinzugef�gt',
	'Autolink_updated' => 'Autolink erfolgreich aktualisiert',
	'Autolink_removed' => 'Autolink erfolgreich gel�scht',
	'No_autolink_selected' => 'Es wurde kein Autolink zum L�schen ausgew�hlt.',
	'No_autolinks' => 'Es gibt keine Autolinks in der Datenbank.',
	'Must_enter_autolink' => 'Du musst ein Schl�sselwort, Link-Text und eine URL eingeben.',
	'Click_return_autolinkadmin' => 'Klicke %shier%s, um zur Autolink Administration zur�ckzukehren.',
// End Autolinks Mod

// XS BUILD 030

// Login attempts configuration
	'Max_login_attempts' => 'Erlaubte Login-Versuche',
	'Max_login_attempts_explain' => 'Anzahl der erlaubten Login-Versuche, bevor ein Benutzerkonto f�r eine festgelegte Zeit gesperrt wird.',
	'Login_reset_time' => 'Login-Sperrzeit',
	'Login_reset_time_explain' => 'Minuten, die ein Benutzer nach einer �berschreitung der erlaubten Login-Versuche warten muss, bis er sich wieder anmelden kann.',

// XS BUILD 035
// Smilies Order
	'position_new_smilies' => 'Sollen neue Smilies vor oder nach existierenden eingef�gt werden?',
	'smiley_change_position' => 'Einf�geposition �ndern',
	'before' => 'Davor',
	'after' => 'Danach',
	'Move_top' => 'Ganz nach oben',
	'Move_end' => 'Ganz nach unten',

// XS BUILD 037
// Pages Auth
	'auth_view_title' => 'Seitenansicht-Berechtigungen',
	'auth_view_portal' => 'Startseite',
	'auth_view_forum' => 'Forum-�bersicht',
	'auth_view_viewf' => 'Foren ansehen',
	'auth_view_viewt' => 'Themen ansehen',
	'auth_view_faq' => 'FAQ',
	'auth_view_memberlist' => 'Mitgliederliste',
	'auth_view_group_cp' => 'Benutzergruppen',
	'auth_view_profile' => 'Benutzerprofile',
	'auth_view_search' => 'Suche',
	'auth_view_album' => 'Foto-Galerie',
	'auth_view_links' => 'Links',
	'auth_view_calendar' => 'Kalender',
	'auth_view_attachments' => 'Anh�nge',
	'auth_view_download' => 'Downloads',
	'auth_view_pic_upload' => 'Bilder Hochladen (Post Icy Images)',
	'auth_view_kb' => 'Wissensdatenbank',
	'auth_view_ranks' => 'R�nge',
	'auth_view_statistics' => 'Statistiken',
	'auth_view_recent' => 'Neuste Themen',
	'auth_view_referrers' => 'Referrers',
	'auth_view_rules' => 'Regeln',
	'auth_view_site_hist' => 'Seiten Historie',
	'auth_view_shoutbox' => 'Shoutbox',
	'auth_view_viewonline' => 'Wer ist Online?',
	'auth_view_contact_us' => 'Kontakt Seite',
	'auth_view_ajax_chat' => 'Chat',
	'auth_view_ajax_chat_archive' => 'Chat Archiv',
	'auth_view_custom_pages' => 'Benutzerdefinierte Seiten',

// Begin Yahoo Submit Your Site MOD by www.pentapenguin.com
	'Yahoo_search' => 'Yahoo Suche',
	'Yahoo_search_settings' => 'Yahoo Suche Einstellungen',
	'Yahoo_search_settings_explain' => 'Hier kannst du die Einstellungen f�r den Yahoo Submit Your Site MOD vornehmen. F�r mehr Informationen, schau bitte auf die <a href="http://submit.search.yahoo.com/free/request" target="_blank">Yahoo Submit Your Site Webseite</a>.',
	'Yahoo_search_select_forums' => 'Foren ausw�hlen',
	'Yahoo_search_select_forums_explain' => 'W�hle die Foren aus die in diese Liste eingeschlossen werden sollen. Du kannst soviele Foren ausw�hlen wie Du willst, wenn du die STRG Taste (Windows) oder Command Taste (Macintosh) gedr�ckt h�ltst. Standardm��ig sind alle �ffentlich sichtbaren Foren ausgew�hlt.',
	'Yahoo_search_savepath' => 'Speicherort der URL Liste',
	'Yahoo_search_savepath_explain' => 'Gib einen Ort an, wo die URL Liste gespeichert werden soll. Gib den Pfad relativ zum Icy Phoenix Root-Verzeichnis an. -- z.B. wenn du die Datei im Cache Ordner unter <b>www.yoursite.com/cache/</b> speicherst, dann gib <b>cache</b> ein. Beachte das du den CHMOD 777 bei diesem Ordner einstellen musst.',
	'Yahoo_search_additional_urls' => 'Zus�tzliche URLs angeben',
	'Yahoo_search_additional_urls_explain' => 'Gib zus�tzliche URLs an die Yahoo besuchen soll, pro Zeile eine. Du musst die vollst�ndige URL angeben -- z.B. <b>http://www.yoursite.com/yourpage.HTML</b>.',
	'Yahoo_search_compress_file' => 'Die URL Liste komprimieren',
	'Yahoo_search_compress_file_explain' => 'Wenn du Ja f�r diese Option gew�hlt hast, wird die Liste der URLs mit Gzip komprimiert was eine viel kleinere Datei und demzufolge eine kleinere Bandbreite vom Yahoo Bot ergibt. Diese Einstellung funktioniert nicht wenn dein Server kein Gzip unterst�tzt.',
	'Yahoo_search_compression_level' => 'Kompressions-Level f�r die Datei',
	'Yahoo_search_compression_level_explain' => 'W�hle ein Kompressions-Level f�r die Datei. 9 ist die empfohlene Einstellung, es sei denn Du hast Probleme damit, dann solltest du einen kleineren Wert einstellen.',
	'Yahoo_search_generate_file' => 'Datei erstellen',
	'Yahoo_search_error_no_forums' => 'Fehler: keine Foren ausgew�hlt. Gehe zur�ck und w�hle mindestens eins aus.',
	'Yahoo_search_error_no_gzip' => 'Fehler: Entweder Du verwendest eine alte PHP Version, oder dein Webhost st�tzt kein Gzip . Bitte gehe zur�ck und w�hle <b>Nein</b> f�r die <b>Die URL Liste komprimiert</b> Option.',
	'Yahoo_search_error_unopenable_file' => 'Fehler: kann die Datei %s nicht �ffnen.',
	'Yahoo_search_error_unwritable_file' => 'Fehler: kann die Datei %s nicht �berschreiben.',
	'Yahoo_search_error_unclosable_file' => 'Fehler: kann die Datei %s nicht schliessen.',
	'Yahoo_search_error_update_sql' => 'Fehler: kann das Feld: %s nicht aktualisieren.',
	'Yahoo_search_error_unknown_file_error' => 'Fehler: die Datei wurde wegen einem unbekannten Fehler nicht gespeichert.',
	'Yahoo_search_file_done' => 'Die Verarbeitung der URL Listen Datei wurde beendet. Bitte kopiere die folgende URL und f�ge sie in das passende Feld in Yahoo ein:<br /><b>%s</b>',
// Finish Yahoo Submit Your Site MOD by www.pentapenguin.com

// Bookmark Mod
	'Max_bookmarks_links' => 'Maximale Lesezeichen gesendet im link-tag',
	'Max_bookmarks_links_explain' => 'Anzahl der Lesezeichen gesendet im link-tag am Anfang des Dokuments. Diese Information wird z.B. von Mozilla verwendet. Gib 0 ein um diese Funktion zu deaktivieren.',

	'Faq_manager' => 'FAQ Manager',
	'Faq_Rules_manager' => 'FAQ &amp; Regeln',
	'board_rules' => 'Forum Richtlinien',
	'board_faq' => 'Forum FAQ',
	'bbcode_faq' => 'BBCode FAQ',
	'attachment_faq' => 'Attachment FAQ',
	'prillian_faq' => 'Prillian FAQ',
	'bid_faq' => 'Freunde Liste FAQ',


	'Account_active2' => 'Aktive Benutzer',
	'Account_inactive2' => 'Inaktive Benutzer',

// Search Flood Control - added 2.0.20
	'Search_Flood_Interval' => 'Flood-Intervall f�r Suche',
	'Search_Flood_Interval_explain' => 'Anzahl der Sekunden, die ein Benutzer zwischen Suchanfragen warten muss',
	'Confirm_delete_smiley' => 'Bist du sicher, dass dieses Smiley gel�scht werden soll?',
	'Confirm_delete_word' => 'Bist du sicher, dass diese Wortzensur gel�scht werden soll?',
	'Confirm_delete_rank' => 'Bist du sicher, dass dieser Rang gel�scht werden soll?',

// Custom Profile Fields MOD
	'custom_field_notice_admin' => 'Diese Erkl�rungen sind von Dir oder einem anderen Administrator erstellt worden. F�r mehr Informationen, pr�fe die Erkl�rungen unter den Profilfeldern. Felder die mit * gekennzeichnet sind, sind Pflichtfelder. Felder die mit &dagger; gekennzeichnet sind, sind nur f�r Admins sichtbar.',

	'field_deleted' => 'Das angegebene Feld ist gel�scht worden',
	'double_check_delete' => 'Bist du sicher das Profil Feld "%s" komplett aus der Datenbank zu entfernen?',

	'here' => 'Hier',
	'new_field_link' => '<a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">%s</a>',
	'edit_field_link' => '<a href="' . append_sid($filename . '?mode=edit&amp;pfid=x') . '">%s</a>',
	'index_link' => '<a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">%s</a>',
	'field_exists' => 'Dieses Feld existiert bereits.<br /><br />Du kannst versuchen ein <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">neues</a> Profil Feld zu erstellen,<br /><br />oder versuchen ein vorhandenes zu <a href="' . append_sid($filename . '?mode=edit&amp;pfid=x') . '">bearbeiten</a>.',
	'click_here_here' => 'Klicke <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">hier</a> um anderes Profil-Feld hinzuzuf�gen,<br /><br />oder klicke <a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">hier</a> um zum Admin Index zur�ckzukehren.',
	'field_success' => 'Feld erfolgreich hinzugef�gt!<br /><br />Klicke <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">hier</a> um anderes Profil-Feld hinzuzuf�gen,<br /><br />oder klicke <a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">hier</a> um zum Admin Index zur�ckzukehren.',
	'Custom_Profile' => 'Custom Profil Felder',
	'profile_field_created' => 'Profil Feld erstellt',
	'profile_field_updated' => 'Profil Feld aktualisiert',

	'add_field_title' => 'F�ge spezifische Profil Felder hinzu',
	'edit_field_title' => 'Bearbeite spezifische Profil Felder',
	'add_field_explain' => 'Hier kannst du neue Felder f�r deine Benutzer anlegen die in deren Profilen angezeigt werden.',
	'edit_field_explain' => 'Hier kannst du Felder bearbeiten die du bereits f�r deine Benutzer angelegt hast.',

	'add_field_general' => 'Allgemeine Einstellungen',
	'add_field_admin' => 'Administrator Einstellungen',
	'add_field_view' => 'Zeige Einstellungen',
	'add_field_text_field' => 'Text Feld Einstellungen',
	'add_field_text_area' => 'Text Area Einstellungen',
	'add_field_radio_button' => 'Radio Button Einstellungen',
	'add_field_checkbox' => 'Checkbox Einstellungen',

	'default_value' => 'Standard Wert',
	'default_value_explain' => 'Das ist der Standard f�r dieses Feld. Wenn ein Benutzer diesen Wert nicht �ndert, ist das der verwendete Wert. Wenn dies ein erforderliches Feld ist, ist dies der Wert welchen alle vorhandenen Benutzer gesetzt bekommen.',
	'default_value_radio_explain' => 'Trage einen Namen genauso wie im oben angegebenen Verf�gbare Eintr�ge Feld ein.',
	'default_value_checkbox_explain' => 'Gib den Eintrag an der standardm��ig aktiviert ist. Dieser Eintrag muss mit einem oben angegebenen Eintrag �bereinstimmen.',
	'max_length' => 'Maximale L�nge',
	'max_length_explain' => 'Das ist die maximale L�nge f�r dieses Feld. ',
	'max_length_value' => 'Das muss eine Nummer zwischen %d und %d sein.',
	'available_values' => 'Verf�gbare Eintr�ge',
	'available_values_explain' => 'Setze jeden Eintrag auf eine neue Zeile',

	'add_field_view_disclaimer' => 'Alle diese Einstellungen werden als "Nein" behandelt, wenn Benutzern nicht erlaubt ist, dieses Feld anzusehen',

	'add_field_name' => 'Feld Name',
	'add_field_name_explain' => 'Trage den Namen ein, den Du mit diesem Feld verbinden m�chtest.',
	'add_field_description' => 'Feld Beschreibung',
	'add_field_description_explain' => 'Trage eine Beschreibung ein, die du mit diesem Feld verbinden m�chtest. Er wird in kleinem Text unterhalb des Feldnamens, wie dieser Text ist, angezeigt.',
	'add_field_type' => 'Feld Typ',
	'add_field_type_explain' => 'W�hle den Typ des Profil Feldes das du hinzuf�gen m�chtest. Beispiele jedes Feldtyps werden ganz rechts angezeigt.',
	'edit_field_type_explain' => 'W�hle den Typ des Profil Feldes das du �ndern m�chtest. Beispiele jedes Feldtyps werden ganz rechts angezeigt.',
	'add_field_required' => 'Setze als erforderlich',
	'add_field_required_explain' => 'Wenn das Feld als "Erforderlich" gesetzt ist, jeder Benutzer der sich sp�ter registriert <strong>muss</strong> es ausf�llen, und alle vorhandenen Benutzer m�ssen es mit einem Standard Wert ausf�llen.',
	'add_field_user_can_view' => 'Erlaube Benutzern die Ansicht',
	'add_field_user_can_view_explain' => 'Wenn dies auf "Ja" gesetzt ist, ist der Benutzer berechtigt dieses Feld zu sehen und zu bearbeiten. Wenn es auf "Nein" gesetzt ist, k�nnen nur Administratoren diese Feld sehen und bearbeiten. Au�erdem, wenn dieses Feld auf "ja" gesetzt ist, kann es kein erforderliches Feld sein.',
	'view_in_profile' => 'Anzeige im Benutzer Profil',
	'profile_locations_explain' => 'Diese Optionen gelten nur, falls dieses Feld im Benutzer Profil angezeigt wird.',
	'contacts_column' => 'Kontakt Spalte',
	'about_column' => 'Information Spalte',
	'view_in_memberlist' => 'Anzeige in der Mitgliederliste',
	'view_in_topic' => 'Anzeige im Beitrag',
	'topic_locations_explain' => 'Diese Optionen gelten nur, falls dieses Feld in einem Beitrag angezeigt wird.',
	'author_column' => 'Autor Sektion',
	'above' => '�ber ',
	'below' => 'Unter ',

	'textarea' => 'Textarea',
	'textarea_example' => "Das ist ein Beispiel\n   von einer Textarea.",
	'text_field' => 'Text Feld',
	'text_field_example' => 'Das ist ein Beispiel f�r ein Text Feld',
	'radio' => 'Radio Button',
	'radio_example' => 'Das ist ein Beispiel f�r zwei Radio Buttons',
	'checkbox' => 'Checkbox',
	'checkbox_example' => 'Das ist ein Beispiel f�r zwei Checkboxen',

	'profile_field_list' => 'Deine Custom Profil Felder',
	'profile_field_list_explain' => 'Dies sind alle Custom Profil Felder die du f�r dein Forum erstellt hast, mit Links um diese zu bearbeiten oder zu l�schen.',
	'profile_field_id' => 'ID #',
	'profile_field_name' => 'Feld Name',
	'profile_field_action' => 'Aktion',
	'no_profile_fields_exist' => 'keine Custom Profil Felder vorhanden.',

	'enter_a_name' => 'Du <strong>musst</strong> einen Feldnamen angeben<br /><br />Gehe zur�ck und versuche es erneut.',
// END Custom Profile Fields MOD

	'Add' => 'Hinzuf�gen',
	'split_global_announce' => 'Trenne Globale Ank�ndigungen',
	'split_announce' => 'Trenne Ank�ndigungen',
	'split_sticky' => 'Trenne Wichtige',
	'split_topic_split' => 'Trenne Themen',
	'Announce_settings' => 'Ank�ndigungs Einstellungen',
	'Split_settings' => 'Trennungs Einstellungen',
	'Server_Cookies' => 'Server Einstellungen',
	'Disable_Registration_IP_Check' => 'Deaktiviere IP-�berpr�fung in �ffentlichen Blacklist bei Registrierung',
	'Disable_Registration_IP_Check_Explain' => '�berpr�ft jede IP-Adresse bei der Registrierung, wenn nicht deaktiviert. Wird die IP in der Blacklist gefunden, wird die Registrierung blockiert. Das kann auch ungewollt normale Nutzer von der Registrierung ausschlie�en.',
	'Config_explain2' => 'Hier kannst du die Ansicht und Einstellungen f�r den Kalender und die Subforen �ndern.',
	'Forum_postcount' => 'Beitr�ge z�hlen',
	'Use_Captcha' => 'CAPTCHA aktivieren',
	'Use_Captcha_Explain' => 'Wenn CAPTCHA aktiviert ist, wird ein erweiterter Best�tigungs-Code generiert, welcher f�r Bots schwer auszulesen ist (erfordert GD). Wenn deaktiviert wird der Standard Best�tigungs-Code angezeigt.',
	'Sync_Pics_Count' => 'Wenn du auf <b>JA</b> klickst, werden die Z�hler der pers�nlichen Foto-Galerien aller Nutzer synchronisiert.',
	'Pics_Count_Synchronized' => 'Folgende Bildz�hler wurden korrekt synchronisiert:',
	'Pics_Count_Not_Synchronized' => 'Folgende Bildz�hler wurden nicht korrekt synchronisiert:',

// IP - BUILD 001
	'Enable_Digests' => 'Aktiviere Digests',
	'Enable_Digests_PHPCron' => 'Aktiviere Digests PHP Cron',
	'Enable_Digests_PHPCron_Explain' => 'Diese Feature aktiviert eine PHP Emulation des CRON um die E-Mails einmal pro Stunde zu senden. Aber da es PHP Emulation basierend ist, kann es nicht immer exakt ausgef�hrt werden. Das bedeutet, dass die E-Mails manchmal nicht gesendet werden. Wenn dein Server CRON unterst�tzt dann nutze den CRON deines Server anstelle dieser Feature.',

// Ajax Shoutbox - BEGIN
	'Shoutbox_config' => 'AJAX Shoutbox Konfiguration',
	'Shout_read_only' => 'Nur Lesen',
	'Displayed_shouts' => 'Anzuzeigende Shouts',
	'Displayed_shouts_explain' => 'Anzahl der anzuzeigenden Shouts beim Laden der Shoutbox.<br /><i>0 um alle Shouts zu laden.</i>',
	'Stored_shouts' => 'Gespeicherte Shouts',
	'Stored_shouts_explain' => 'Anzahl der Shouts die in der Datenbank bleiben sollen.<br />Dieser Eintrag sollte gleich oder gr��er als die anzuzeigenden Shouts sein.<br /><i>0 speichert alle Shouts.</i>',
	'Shout_guest_allowed' => 'G�ste erlaubt',
	'Shoutbox_flood' => 'Flood Abstand',
	'Shoutbox_flood_explain' => 'Anzahl der Sekunden die ein Benutzer zwischen den Shouts warten muss.',
	'Shoutbox_refreshtime' => 'Aktualisierungs-Rate',
	'Shoutbox_refresh_explain' => 'Zeit der Shoutbox in Millisekunden um neue Nachrichten zu lesen.<br /><i>Dieser Wert sollte �ber 1000 Millisekunden liegen.</i>',
// Ajax Shoutbox - END

/* lang_postcount.php - BEGIN */
	'Postcounts' => 'Beitragsz�hler Verwaltung',
	'Post_count_explain' => 'Hier kannst du den Beitragsz�hler f�r einen bestimmten Benutzer anpassen.',
	'Modify_post_counts' => 'Beitragsz�hler bearbeiten',
	'Post_count_changed' => 'Der Beitragsz�hler des Benutzers wurde erfolgreich bearbeitet.',
	'Click_return_posts_config' => 'Klicke %shier%s, um zur Beitragsz�hler-Verwaltung zur�ckzukehren.',
	'Modify_post_count' => 'Beitragsz�hler bearbeiten',
	'Edit_post_count' => 'Beitragsz�hler von <b>%s</b> bearbeiten',
	'Post_count' => 'Anzahl der Mitteilungen',
/* lang_postcount.php - END */

/* lang_megamail.php - BEGIN */
	'Megamail_Explain' => 'Hier kannst du eine PN (private Nachricht) oder E-Mail an alle Benutzer oder an alle Benutzer einer Gruppe schicken. Diese geschieht normalerweise, indem eine E-Mail �ber die Forum E-Mail-Adresse gesendet wird, auf der alle Empf�nger dieser E-Mail als Blind Carbon Copy (BCC - Blindkopie) eingetragen sind.<br />Dieses modifizierte Script sendet diese E-Mail in mehreren Batches. Dies sollte Timeouts und Serverlastprobleme umgehen. Der Status des Massen E-Mail-Sendens wird in der Datenbank gespeichert. Du kannst dieses Fenster schlie�en, um das Massen E-Mail-Senden zu pausieren (das aktuelle Batch wird noch abgearbeitet). Du kannst sp�ter dort weitermachen, wo du aufgeh�rt hast.<br /><b>Wenn HTML Emails aktiviert sind, solltest du Emails unter Verwendung des HTML Codes schreiben, &lt;br /&gt; f�r ein Zeilenumbruch verwenden.</b><br /><b>Wenn du KOMPLETTE HTML E-Mails senden willst, beachte bitte das dann kein Template oder CSS benutzt wird, und du den kompletten HTML-Code inklusive HEAD und BODY Tags.</b><br /><b>Bitte beachte das Massen-PN nur BBCode unterst�tzt, wenn du eine PN in HTML schreibst, wird diese nicht richtig angezeigt.</b>',
	'megamail_inactive_users' => 'Benutzer, die das Forum in den letzten {DAYS} Tagen nicht besucht haben',
	'megamail_header' => 'Deine E-Mail-Sessions',
	'megamail_id' => 'E-Mail-ID',
	'megamail_batchstart' => 'Bearbeitet',
	'megamail_batchsize' => 'Nachrichten pro Batch',
	'megamail_batchwait' => 'Pause',
	'megamail_created_message' => 'Die Massen-Mail wurde in der Datenbank gespeichert.<br /><br /> Um das Senden zu starten, klicke %shier%s oder warte, bis du per Meta-Refresh dahin weitergeleitet wirst...',
	'megamail_send_message' => 'Das aktuelle Batch (%s - %s) wurde gesendet.<br /><br />Um mit dem Senden fortzufahren, klicke %shier%s oder warte, bis du per Meta-Refresh dahin weitergeleitet wirst...',
	'megamail_status' => 'Status',
	'megamail_proceed' => '%sJetzt fortfahren%s',
	'megamail_done' => 'FERTIG',
	'megamail_none' => 'Es wurden keine Eintr�ge gefunden.',
	'megamail_delete_confirm' => 'M�chtest du diese E-Mail wirklich l�schen?',
	'megamail_deleted' => 'E-Mail erfolgreich gel�scht',
	'megamail_click_return' => 'Klicke %shier%s, um zu Mega E-Mails / PN zur�ckzukehren.',
/* lang_megamail.php - END */

/* lang_admin_voting.php - BEGIN */
	'Admin_Vote_Explain' => 'Umfrage-Ergebnisse (wer hat abgestimmt und wie).',
	'Admin_Vote_Title' => 'Umfrage-Administration',
	'Vote_id' => '#',
	'Poll_topic' => 'Umfrage-Thema',
	'Vote_username' => 'W�hler',
	'Vote_end_date' => 'Umfragedauer',
	'Sort_vote_id' => 'Umfrage ID',
	'Sort_poll_topic' => 'Umfragethema',
	'Sort_vote_start' => 'Startdatum',
	'Submit' => 'Absenden',
	'Select_sort_field' => 'Sortierfeld ausw�hlen',
	'Sort_ascending' => 'Aufsteigend',
	'Sort_descending' => 'Absteigend',
/* lang_admin_voting.php - END */

/* lang_admin_gd_info.php - BEGIN */
	'GD_Title' => 'GD Info',
	'NO_GD' => 'kein GD',
	'GD_Description' => 'Hier kannst du Informationen �ber die aktuell installierte Version der GD Bibliothek abrufen.',
	'GD_Freetype_Support' => 'Freetype Fonts Unterst�tzung:',
	'GD_Freetype_Linkage' => 'Freetype Link Typ:',
	'GD_T1lib_Support' => 'T1lib Unterst�tzung:',
	'GD_Gif_Read_Support' => 'Gif Read Unterst�tzung:',
	'GD_Gif_Create_Support' => 'Gif Create Unterst�tzung:',
	'GD_Jpg_Support' => 'Jpg/Jpeg Unterst�tzung:',
	'GD_Png_Support' => 'Png Unterst�tzung:',
	'GD_Wbmp_Support' => 'WBMP Unterst�tzung:',
	'GD_XBM_Support' => 'XBM Unterst�tzung:',
	'GD_Jis_Mapped_Support' => 'Japanisch Font Unterst�tzung:',
	'GD_True' => 'Ja',
	'GD_False' => 'Nein',
/* lang_admin_gd_info.php - END */

/* lang_admin_captcha.php - BEGIN */
	'VC_Captcha_Config' => 'CAPTCHA Konfiguration',
	'captcha_config_explain' => 'Hier kannst du das Aussehen des Bildes bestimmen, das bei aktivierter Visuellen Best�tigung den Registrierungscode anzeigt.<br />Bedenke bitte das die Lesbarkeit des Best�tigungs-Codes, extrem erschwert oder sogar unm�glich werden kann.',
	'VC_active' => 'Visuelle Best�tigung ist aktiviert!',
	'VC_inactive' => 'Visuelle Best�tigung ist nicht aktiviert!',
	'background_configs' => 'Hintergrund',
	'Click_return_captcha_config' => 'Klicke %shier%s, um zur CAPTCHA Konfiguration zur�ckzukehren.',

	'CAPTCHA_width' => 'Breite des CAPTCHA',
	'CAPTCHA_height' => 'H�he des CAPTCHA',
	'background_color' => 'Hintergrundfarbe',
	'background_color_explain' => 'Angabe in Hexadezimaler Schreibweise (z.B. #0000FF f�r Blau).',
	'pre_letters' => 'Anzahl der Schattenzeichen',
	'pre_letters_explain' => '',
	'great_pre_letters' => 'Schattenzeichen vergr��ern',
	'great_pre_letters_explain' => '',
	'Random' => 'Zuf�llig',
	'random_font_per_letter' => 'Zuf�lliger Schriftsatz pro Zeichen',
	'random_font_per_letter_explain' => 'F�r jedes Zeichen wird ein anderer Schriftsatz benutzt.',

	'back_chess' => 'Schachmuster',
	'back_chess_explain' => 'F�llt den kompletten Hintergrund mit 16 Vierecken.',
	'back_ellipses' => 'Ovale und Kreise',
	'back_arcs' => 'Gebogene Linien',
	'back_lines' => 'Linien',
	'back_image' => 'Hintergrundbild',
	'back_image_explain' => '(Diese Funktion ist derzeitig noch nicht integriert)',

	'foreground_lattice' => 'Vordergrundgitter',
	'foreground_lattice_explain' => '(breite x h�he)<br />Generiert ein Gitter �ber dem CAPTCHA',
	'foreground_lattice_color' => 'Gitterfarbe',
	'foreground_lattice_color_explain' => 'Angabe in Hexdezimal (z.B. #0000FF f�r blau',
	'gammacorrect' => 'Kontrastkorrektur',
	'gammacorrect_explain' => '(0 = aus)<br />ACHTUNG!!! Eine �nderungen des Wertes hat direkte auswirkung auf die Lesbarkeit des CAPTCHA!!',
	'generate_jpeg' => 'Bildformat',
	'generate_jpeg_explain' => 'Das JPEG Format hat eine h�here Kompression als PNG und kann, anhand der Qualit�tseinstellung (max 95%), einen direkten Einfluss auf die Lesbarkeit aus�ben.',
	'generate_jpeg_quality' => 'Qualit�t',
/* lang_admin_captcha.php - END */

/* lang_admin_topic_shadow.php - BEGIN */
	'Del_Before_Date' => 'L�sche alle Schatten Themen bevor %s<br />', // %s = insertion of date
	'Deleted_Topic' => 'L�sche Schatten Themen %s<br />', // %s = topic name
	'Affected_Rows' => '%d bekannte Eintr�ge sind betroffen<br />', // %d = affected rows (not avail with all databases!)
	'Delete_From_Date' => 'Alle Schatten Themen, die vor dem eingegebenen Datum erstellt wurden, werden entfernt.',
	'Delete_Before_Date_Button' => 'L�sche alle vor Datum',
	'No_Shadow_Topics' => 'Keine Schatten Themen gefunden.',
	'Topic_Shadow' => 'Schatten Themen',
	'TS_Desc' => 'Erlaubt das Entfernen von Schatten Themen ohne das eigentliche Thema zu l�schen. Schatten Themen werden erstellt, wenn ein Thema in ein anderes Forum verschoben wird und du ausw�hlst, einen Link im Original-Forum zu belassen.',
	'Month' => 'Monat',
	'Day' => 'Tag',
	'Year' => 'Jahr',
	'Clear' => 'S�ubern',
	'Resync_Ran_On' => 'Resync gelaufen in %s<br />', // %s = insertion of forum name
	'Version' => 'Version',

	'Title' => 'Titel',
	'Moved_To' => 'Verschoben nach',
	'Moved_From' => 'Verschoben von',

/* Modes */
	'topic_time' => 'Themen-Zeit',
	'topic_title' => 'Thementitel',

/* Errors */
	'Error_Month' => 'Deine Eingabe muss zwischen 1 und 12 liegen.',
	'Error_Day' => 'Der eingegebene Tag muss zwischen 1 und 31 liegen.',
	'Error_Year' => 'Das eingegebene Jahr muss zwischen 1970 und 2038 liegen.',
	'Error_Topics_Table' => 'Fehler bei Zugriff auf die Themen-Tabelle.',
/* lang_admin_topic_shadow.php - END */

/* lang_admin_rebuild_search.php - BEGIN */
	'Rebuild_search' => 'Suche aufbauen',
	'Rebuild_search_desc' => 'Damit wird jeder Beitrag in deiner Wissendatenbank indiziert und die Suchetabellen neu aufgebaut. Dies kann einige Zeit dauern. Verlasse diese Seite nicht, bis der Vorgang abgeschlossen ist.',
	'Post_limit' => 'Beitrags-Limit',
	'Time_limit' => 'Zeit-Limit',
	'Refresh_rate' => 'Aktualisierungsrate',

	'Next' => 'N�chster',
	'Finished' => 'Fertig',
/* lang_admin_rebuild_search.php - END */

/* lang_admin_faq_editor.php - BEGIN */
	'faq_editor' => 'Sprache bearbeiten',
	'faq_editor_explain' => 'Dieses Modul erlaub es dir, deine Anh�nge, BBCode und Foren FAQs zu bearbeiten. Du solltest den Bereich <b>phpBB 2 Issues</b> nicht entfernen oder die Beschreibung �ndern genau wie den Bereich <b>�ber Icy Phoenix</b>.',

	'faq_select_language' => 'W�hle die Sprache aus, die du bearbeiten m�chtest.',
	'faq_retrieve' => 'Datei herunterladen',

	'faq_block_delete' => 'Bist du sicher, dass du diesen Block entfernen willst?',
	'faq_quest_delete' => 'Bist du sicher, dass du diese Frage (und seine Antwort) entfernen m�chtest?',

	'faq_quest_edit' => 'Frage &amp; Antwort bearbeiten',
	'faq_quest_create' => 'Neue Frage &amp; Antwort erstellen',

	'faq_quest_edit_explain' => 'Editiere die Frage und die Antwort. �ndere den Block, wenn du magst.',
	'faq_quest_create_explain' => 'Schreibe nun die neue Frage und die neue Antwort und dr�cke danach auf absenden.',

	'faq_block' => 'Block',
	'faq_quest' => 'Frage',
	'faq_answer' => 'Antwort',

	'faq_block_name' => 'Block Name',
	'faq_block_rename' => 'Block umbenennen',
	'faq_block_rename_explain' => '�ndere den Namen des Blocks',

	'faq_block_add' => 'Block hinzuf�gen',
	'faq_quest_add' => 'Frage hinzuf�gen',

	'faq_no_quests' => 'Keine Fragen in dem Block. Das verhindert, dass jegliche Bl�cke nach diesem angezeigt werden k�nnen. L�sche den Block oder f�ge eine oder mehr Fragen hinzu.',
	'faq_no_blocks' => 'Keine Bl�cke definiert. F�ge einen neuen Block hinzu, indem Du ihm unterstehend eine Bezeichnung gibst.',

	'faq_write_file' => 'Die Sprachdatei kann nicht beschrieben werden!',
	'faq_write_file_explain' => 'Du musst die Sprachdateien in language/lang_german/ und allen anderen Sprachen <i>beschreibbar</i> machen, um dieses Tool zu benutzen. Das bedeutet, dass du den <b>chmod Modus auf 666</b> setzen musst. Dies k�nnen die meisten FTP Programme. Auch kannst du den chmod via telnet oder SSH anpassen.',
/* lang_admin_faq_editor.php - END */

/* lang_admin_rules_editor.php - BEGIN */
	'rules_editor' => 'Bearbeite Sprache',
	'rules_editor_explain' => 'Dieses Modul erlaubt dir deine Forum Richtlinien zu bearbeiten oder neu anzuordnen.',

	'rules_select_language' => 'W�hle die Sprache der Datei die du �ndern m�chtest',
	'rules_retrieve' => 'Datei herunterladen',

	'rules_block_delete' => 'Bist du Dir sicher diesen Block zu l�schen?',
	'rules_quest_delete' => 'Bist du Dir sicher diese Frage (und deren Antwort) zu l�schen?',

	'rules_quest_edit' => 'Bearbeite Frage &amp; Antwort',
	'rules_quest_create' => 'Erstelle Frage &amp; Antwort',

	'rules_quest_edit_explain' => 'Bearbeite die Frage und Antwort. �ndere den Block wenn du willst.',
	'rules_quest_create_explain' => 'Gib die neue Frage und Antwort ein und klicke auf Senden.',

	'rules_block' => 'Block',
	'rules_quest' => 'Frage',
	'rules_answer' => 'Antwort',

	'rules_block_name' => 'Block Name',
	'rules_block_rename' => 'Block umbenennen',
	'rules_block_rename_explain' => '�ndert den Namen des Blocks in der Datei',

	'rules_block_add' => 'Block hinzuf�gen',
	'rules_quest_add' => 'Frage hinzuf�gen',

	'rules_no_quests' => 'Keine Fragen in diesem Block. Das verhindert die Anzeige aller m�glichen nachfolgenden Bl�cke. L�sche den Block oder f�ge eine oder mehr Fragen hinzu.',
	'rules_no_blocks' => 'Keine Blocks festgelegt. F�ge einen neuen Block hinzu, indem Du unten den Namen eingibst.',

	'rules_write_file' => 'Konnte nicht zur Sprach-Datei schreiben!',
	'rules_write_file_explain' => 'Du musst die Sprachdateien in language/lang_german/ und allen anderen Sprachen <i>beschreibbar</i> machen, um dieses Tool zu benutzen. Das bedeutet, dass du den <b>chmod Modus auf 666</b> setzen musst. Dies k�nnen die meisten FTP Programme. Auch kannst du den chmod via telnet oder SSH anpassen.',
/* lang_admin_rules_editor.php - END */

/* lang_admin_priv_msgs.php - BEGIN */
	'PM_View_Type' => 'Ansicht',
	'Show_IP' => 'IP-Adresse zeigen',
	'Rows_Per_Page' => 'Zeilen pro Seite',
	'Archive_Feature' => 'Archiv-Erweiterung',
	'Inline' => 'Auf dieser Seite',
	'Pop_up' => 'Als PopUp',
	'Current' => 'Zurzeit',
	'Rows_Plus_5' => '5 Zeilen mehr',
	'Rows_Minus_5' => '5 Zeilen weniger',
	'Enable' => 'Aktivieren',
	'Disable' => 'Deaktivieren',
	'Inserted_Default_Value' => '%s Konfigurationseintrag noch nicht vorhanden, Standardwert eingesetzt<br />', // %s = config name
	'Updated_Config' => 'Aktualisiere Konfigurationseintrag %s<br />', // %s = config item
	'Archive_Table_Inserted' => 'Archivtabelle noch nicht vorhanden, wurde hiermit angelegt<br />',
	'Switch_Normal' => 'In die Standard-Ansicht wechseln',
	'Switch_Archive' => 'In die Archiv-Ansicht wechseln',

/* General */
	'Deleted_Message' => 'Private Nachricht gel�scht - %s <br />', // %s = PM title
	'Archived_Message' => 'Archivierte Nachricht gel�scht - %s <br />', // %s = PM title
	'Archived_Message_No_Delete' => 'Kann %s nicht l�schen, da die Nachricht auch zur Archivierung markiert wurde <br />', // %s = PM title
	'Private_Messages' => 'Private Nachrichten',
	'Private_Messages_Archive' => 'Archivierte Nachrichten',
	'Archive' => 'Archiv',
	'To' => 'An',
	'Subject' => 'Betreff',
	'Sent_Date' => 'Gesendet am',
	'From' => 'Von',
	'Sort' => 'Sortieren',
	'Filter_By' => 'Filtern nach',
	'PM_Type' => 'Ordner',
	'Status' => 'Status',
	'No_PMS' => 'Es sind keine Nachrichten vorhanden, die Ihrer Filterung entsprechen.',
	'Archive_Desc' => 'Hier finden Sie die von Ihnen archivierten Nachrichten. Der Besitzer einer solchen Nachricht (Sender und Empf�nger) hat von dem Augenblick an, in dem Sie seine Nachricht archiviert haben, keinen Zugriff mehr darauf.',
	'Normal_Desc' => 'Alle privaten Nachrichten des Forums k�nnen hier verwaltet werden. Sie k�nnen die Nachrichten der Benutzer lesen, l�schen und archivieren. Im letzten Fall wird die Nachricht des Benutzers ins Archiv des Administrations-Bereichs verschoben.<br /><br /><b>ACHTUNG:</b> Es wird nicht angezeigt, ob die Nachricht Anlagen wie z.B. Bilder enth�lt!',
	'Remove_Old' => 'Nachrichten ohne Besitzer:</a> <span class="gensmall">Nachrichten von gel�schten Benutzern k�nnen manchmal in der Datenbank zur�ckbleiben, welche durch diese Option gel�scht werden.</span>',
	'Remove_Sent' => 'Kopien der gesendeten Nachrichten:</a> <span class="gensmall">Nachrichten in diesem Ordner sind in der Regel �berfl�ssig. Es sei denn, der Besitzer m�chte noch einmal nachvollziehen, was er geschrieben hat. In diesem Fall kann er seine Nachrichten aber auch archivieren und somit diese L�schung umgehen, wenn er m�chte.</span>',
	'Removed_Old' => 'Alle besitzerlosen Nachrichten werden gel�scht...<br />',
	'Removed_Sent' => 'Alle Kopien der gesendeten Nachrichten werden gel�scht...<br />',
	'Utilities' => 'Massen L�schungs Programme',
	'Nivisec_Com' => 'Nivisec.com',

/* PM Types */
	'PM_-1' => 'Alle', //PRIVMSGS_ALL_MAIL = -1
	'PM_0' => 'Posteingang (gelesen)', //PRIVMSGS_READ_MAIL = 0
	'PM_1' => 'Postausgang', //PRIVMSGS_NEW_MAIL = 1
	'PM_2' => 'Gesendet', //PRIVMSGS_SENT_MAIL = 2
	'PM_3' => 'Posteingang (archiviert)', //PRIVMSGS_SAVED_IN_MAIL = 3
	'PM_4' => 'Gesendet (archiviert)', //PRIVMSGS_SAVED_OUT_MAIL = 4
	'PM_5' => 'Posteingang (ungelesen)', //PRIVMSGS_UNREAD_MAIL = 5

/* Errors */
	'Error_Other_Table' => 'Fehler beim Lesen der erforderlichen Tabelle.',
	'Error_PM_Text_Table' => 'Fehler beim Abfragen der Private Messages Text Tabelle.',
	'Error_PM_Table' => 'Fehler beim Abfragen der Private Messages Tabelle.',
	'Error_PM_Archive_Table' => 'Fehler beim Abfragen der Private Messages Archive Tabelle.',
	'No_Message_ID' => 'Keine Nachrichten ID angegeben',
/* lang_admin_priv_msgs.php - END */

/* lang_admin_link.php - BEGIN */
// Categories
	'Link_Categories_Title' => 'Link Kategorie Einstellung',
	'Link_Categories_Explain' => 'In diesem Menu kannst du die Kategorien verwalten: erstellen, bearbeiten, l�schen, sortieren etc.',
	'Category_Permissions' => 'Kategorie Befugnisse',
	'Category_Title' => 'Kategorie Titel',
	'Category_Desc' => 'Kategorie Beschreibung',
	'View_level' => 'Zeige Level',
	'Upload_level' => 'Upload Level',
	'Rate_level' => 'Bewertungs Level',
	'Comment_level' => 'Kommentar Level',
	'Edit_level' => ' Level bearbeiten',
	'Delete_level' => 'Level l�schen',
	'New_category_created' => 'Die neue Kategorie wurde erfolgreich erstellt.',
	'Click_return_link_category' => 'Klicke %shier%s, um zur Kategorie Verwaltung zur�ckzukehren.',
	'Category_updated' => 'Die Kategorie wurde erfolgreich bearbeitet.',
	'Delete_Category' => 'Kategorie l�schen',
	'Delete_Category_Explain' => 'Mit dem nachstehenden Formular kannst du Kategorien zu l�schen.',
	'Category_deleted' => 'Diese Kategorie wurde erfolgreich gel�sch.t',
	'Category_changed_order' => 'Diese Kategorie wurde erfolgreich verschoben.',

// Config
	'Link_Config' => 'Links Konfiguration',
	'Link_config_explain' => 'Hier kannst du die Einstellungen des Link Mods vornehmen.',
	'lock_submit_site' => 'Sperre Benutzer f�r das Eintragen von Seiten.',
	'allow_guest_submit_site' => 'Erlaube G�sten, Seiten zu �bermitteln.',
	'allow_no_logo' => 'Erlaube die �bermittlung einer Seite ohne Banner.',
	'site_logo' => 'Die URL des eigenen Logos (komplette URL)',
	'site_url' => 'Die URL Deiner Webseite',
	'width' => 'Max Breite der Banner',
	'height' => 'Max H�he der Banner',
	'linkspp' => 'Max Links pro Seite',
	'interval' => 'Wie schnell werden die Banner angezeigt',
	'display_logo' => 'Wie viele Banner werden zugleich angezeigt',
	'Link_display_links_logo' => 'Zeige Banner der Links Seite',
	'Link_email_notify' => 'Sende eine E-Mail an alle Administratoren, wenn ein neuer Link hinzugef�gt wurde',
	'Link_pm_notify' => 'Sende eine PM an alle Administratoren, wenn ein neuer Link hinzugef�gt wurde',
	'Link_config_updated' => 'Links Konfiguration wurde erfolgreich bearbeitet',
	'Click_return_link_config' => 'Klicke %shier%s, um zur Links Konfiguration zur�ckzukehren.',

// Link_MOD
	'Links' => 'Links Einstellungen',
	'Links_explain' => 'In diesem Menu gibt es eine �bersicht der vorhandenen Links, ebenfalls k�nnen Links bearbeitet oder gel�scht werden.',
	'Add_link' => 'Link hinzuf�gen',
	'Add_link_explain' => '�ber dieses Menu k�nnen Links hinzugef�gt werden.',
	'Edit_link' => 'Link bearbeiten',
	'Edit_link_explain' => '�ber dieses Menu kann ein Link bearbeitet werden, ebenfalls kann man den ',
	'Delete_link' => 'Link l�schen',
	'Delete_link_explain' => '�ber dieses Menu kann ein Link gel�scht werden, ebenfalls kann man den ',
	'Link_update' => 'Link bearbeiten',
	'Link_delete' => 'Link l�schen',
	'Link_title' => 'Name der Seite',
	'Link_url' => 'URL der Seite',
	'Link_logo_src' => 'Logo (88x31 Pixel, nicht gr��er als 10k)',
	'Link_category' => 'Kategorie',
	'Link_desc' => 'Beschreibung der Seite',
	'link_hits' => 'Klicks',
	'Link_basic_setting' => 'Link Einstellungen',
	'Link_adv_setting' => 'Erweiterte Einstellungen',
	'Link_active' => 'Aktiv Status',

	'Link_admin_add_success' => 'Der Link wurde erfolgreich hinzugef�gt.',
	'Link_admin_add_fail' => 'Der Link konnte nicht hinzugef�gt werden, bitte versuche es sp�ter wieder.',
	'Link_admin_update_success' => 'Der Link wurde erfolgreich bearbeitet.',
	'Link_admin_update_fail' => 'Der Link konnte nicht bearbeitet werden, bitte versuche es sp�ter wieder.',
	'Link_admin_delete_success' => 'Der Link wurde erfolgreich gel�scht.',
	'Link_admin_delete_fail' => 'Der Link konnte nicht gel�scht werden, bitte versuche es sp�ter wieder.',
	'Click_return_lastpage' => 'Klicke %shier%s, um zur vorherigen Seite zur�ckzukehren.',
	'Click_return_admin_links' => 'Klicke %shier%s, um zur Links Verwaltung zur�ckzukehren.',
	'Preview' => 'Vorschau',
	'Search_site' => 'Suche Seite',
	'Search_site_title' => 'Suche Seite Name/Beschreibung:',
/* lang_admin_link.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

// Icy Phoenix - BUILD 009
	'Replace_title' => 'Ersetzen in Beitr�gen',
	'Replace_text' => 'Von dieser Seite aus kannst du W�rter oder Zeilen mit "was auch immer" ersetzen. Dies kann aber NICHT mehr r�ckg�ngig gemacht werden!',
	'Link' => 'Link',
	'Str_old' => 'Jetziger Text',
	'Str_new' => 'Ersetzen mit',
	'No_results' => 'Keine Ergebnisse gefunden',
	'Replaced_count' => 'Gesamt aktualisierte Beitr�ge: %s',

// Icy Phoenix - BUILD 016
	'group_rank' => 'Rang',
	'group_color' => 'Farbe',
	'group_legend' => 'Zeige in Legende',
	'group_legend_short' => 'Legende',
	'group_main' => 'Haupt Gruppe',
	'group_members' => 'Mitglieder',
	'group_update' => '�nderungen anwenden',

/* lang_color_groups.php - BEGIN */
	'Color_Groups' => 'Farb-Gruppen',
	'Manage_Color_Groups' => 'Verwalte Farb-Gruppen',
	'Add_New_Group' => 'Neue Gruppe hinzuf�gen',
	'Color' => 'Farbe',
	'User_Count' => 'Benutzer Z�hler',
	'Color_List' => 'Farb Namen Liste:',
	'Group_Name' => 'Gruppen Name',
	'Define_Users' => 'Benutzer definieren',
	'Color_Group_User_List' => 'Farb Gruppen Benutzer Liste',
	'Options' => 'Optionen',
	'Example' => 'Beispiel',
	'User_List' => 'Komplette Benutzer Liste',
	'Unassigned_User_List' => 'Benutzer ohne Gruppe',
	'Assigned_User_List' => 'Benutzer mit Gruppe',
	'Add_Arrow' => 'Zur Liste hinzuf�gen',
	'Update' => 'Aktualisieren',
	'Updated_Group' => 'Aktualisierte Gruppen Benutzer Liste<br />',
	'Deleted_Group' => 'Gel�schte Gruppe.  Alle Benutzer die in diese Gruppe waren sind nun ohne Gruppen Mitgliedschaft<br />',
	'Hide' => 'Verstecken',
	'Un-hide' => 'Sichtbar machen',
	'Move_Up' => 'Nach oben verschieben',
	'Move_Down' => 'Nach unten verschieben',
	'Group_Hidden' => 'Gruppe versteckt<br />',
	'Group_Unhidden' => 'Gruppe sichtbar<br />',
	'Groups_Updated' => 'Gruppen �nderungen wurden aktualisiert<br />',
	'Moved_Group' => 'Verschobene Gruppen Sortierung<br />',

//Descriptions
	'Manage_Color_Groups_Desc' => 'Aktualisiere Gruppen, f�ge neue Gruppen hinzu oder verwalte die Benutzer eine bestimmten Farb Gruppe.<br />Gruppen bei denen Du "Versteckt" gew�hlte hast, werden nicht auf der Hauptindex Liste angezeigt.',
	'Color_Group_User_List_Desc' => 'L�sche oder f�ge Benutzer zu einer bestimmten Farb Gruppe hinzu.',

//Errors
	'Error_Group_Table' => 'Fehler beim Abfragen der Farb Gruppen Tabelle.',
	'Error_Font_Color' => '<b><u>Achtung:</b></u>  Die angegebene Schrift Farbe scheint ung�ltig zu sein!',
	'Color_Ok' => 'Die angegebene Schrift Farbe scheint g�ltig zu sein.',
	'No_Groups_Exist' => 'Es bestehen keine Gruppen.',
	'Error_Users_Table' => 'Fehler beim Abfragen der Benutzer Tabelle.',
	'Invalid_Group_Add' => '%s ist ein ung�ltiger oder doppelter Gruppen Name.<br />',

//Dynamic
	'Group_Updated' => 'Aktualisierte Farb Gruppe %s<br />',
	'Editing_Group' => 'Zurzeit wird die Benutzer Liste f�r %s bearbeitet.',
	'Invalid_User' => '%s ist ein ung�ltiger Benutzer Name, �berspringen<br />',
	'Invalid_Order_Num' => '%s beinhaltet eine ung�ltige Nummer, aber dies wurde behoben.  Bitte versuche deine Sortierung erneut.',

//New for 1.2.0
	'Users_List' => 'Benutzer Liste',
	'Groups_List' => 'Benutzer Gruppen Liste',
	'List_Info' => '<b>Beachte</b>: <ul><li>Halte STRG gedr�ckt wenn du mehrere Namen ausw�hlen willst. <li>If a user belongs to a user group, and is added to a specific color group, the color group that contains the user will be used; not the one the user group belongs to. <li>The list names are formated as NAME (CURRENT_COLOR_GROUP). There will be no (CURRENT_COLOR_GROUP) if the entry doesn\'t belong to one. <li>If a user is a member of 2 or more user groups, the highest ranking color group will be assigned (you order their appearance on the main page).</ul>',
/* lang_color_groups.php - END */

// Icy Phoenix - BUILD 023
	'Empty_Cache_Main_Question' => 'Wenn du auf JA klickst, werden alle Dateien im cache Verzeichniss gel�scht.<br /><br /><em> Willst du das wirklich tun? </em>',
	'Empty_Cache_Posts_Question' => 'Wenn du auf JA klickst, werden alle vorkompilierten Beitrags-Felder in der Beitrags-Tabelle gel�scht.<br /><br /><em> Willst du das wirklich tun? </em>',
	'Empty_Cache_Thumbs_Question' => 'Wenn du auf JA klickst, werden alle erstellten Thumbnails in den Beitr�gen gel�scht.<br /><br /><em> Willst du das wirklich tun? </em>',
	'Empty_Cache_Success' => 'Cache Ordner erfolgreich geleert.',

	'Copy_Auth' => 'Kopiere Berechtigungen von',
	'Copy_Auth_Explain' => 'Bitte beachte, dass du Berechtigungen nur von Foren kopieren kannst, nicht von Kategorien!!!',

// Icy Phoenix - BUILD 027
/* lang_admin_db_backup.php - BEGIN */
	'SELECT_ALL' => 'Alle ausw�hlen',
	'SELECT_FILE' => 'Datei ausw�hlen',
	'START_BACKUP' => 'Backup starten',
	'START_RESTORE' => 'Wiederherstellung starten',
	'STORE_AND_DOWNLOAD' => 'Speichern und Herunterladen',
	'STORE_LOCAL' => 'Datei lokal speichern',
	'STRUCTURE_ONLY' => 'Nur Struktur',

// Backup
	'ACP_BACKUP' => 'Datenbank Backup',
	'ACP_BACKUP_EXPLAIN' => 'Hier kannst du alle seitenbezogenen Daten sichern. Du kannst das Ergebnis in deinem <b><samp>backup/</samp></b> Ordner speichern, oder direkt herunterladen. Abh�ngig von deinen Server Einstellungen, kannst du dieses Archiv in mehrere Formate komprimieren.<br /><br /><span class="text_red">Das Backup wird in mehreren Schritten ausgef�hrt um PHP Timeouts vorzubeugen: Das Script sollte den Vorgang komplett automatisch ausf�hren, sodass du nur warten musst, bis es beendet ist.</span><br /><br />',

	'BACKUP_OPTIONS' => 'Backup-Optionen',
	'BACKUP_TYPE' => 'Backup-Typ',

	'DATABASE' => 'Datenbank Werkzeuge',
	'DATA_ONLY' => 'Nur Daten',
	'DELETE_BACKUP' => 'Backup l�schen',
	'DELETE_SELECTED_BACKUP' => 'Bist du dir sicher das ausgew�hlte Backup zu l�schen?',
	'DESELECT_ALL' => 'Alle abw�hlen',
	'DOWNLOAD_BACKUP' => 'Sicherung herunterladen',

	'FILE_TYPE' => 'Datei-Typ',
	'FULL_BACKUP' => 'Komplett',

	'BACKUP_TYPE_COMPLETE' => 'Komplett',
	'BACKUP_TYPE_EXTENDED' => 'Umfassend',
	'BACKUP_TYPE_COMPACT' => 'Compact Line Breaks',

	'BACKUP_SUCCESS' => 'Das Backup wurde erfolgreich erstellt.',
	'BACKUP_DELETED' => 'Das Backup wurde erfolgreich gel�scht.',

	'TABLE_SELECT' => 'Tabellen-Auswahl',

	'BACKUP_IN_PROGRESS' => 'Backup wird erstellt...',
	'BACKUP_IN_PROGRESS_TABLE' => 'Sichere Tabelle: <b>%s</b>',
	'BACKUP_IN_PROGRESS_REDIRECT' => 'Du wirst automatisch in ein paar Sekunden zum n�chsten Schritt weitergeleitet',
	'BACKUP_IN_PROGRESS_REDIRECT_CLICK' => 'Wenn du nicht innerhalb von ein paar Sekunden weitergeleitet wirst, kannst du %shier%s klicken',
	'BACKUP_OPTIONS_RETURN' => 'Klicke %shier%s, um zur Backup Verwaltung zur�ckzukehren.',

// Errors
	'Table_Select_Error' => 'Du musst mindestens eine Tabelle ausw�hlen.',

// Restore
	'ACP_RESTORE' => 'Datenbank wiederherstellen',
	'ACP_RESTORE_EXPLAIN' => 'Dies f�hrt eine komplette Wiederherstellung aller deiner Seiten-Tabellen von einer gespeicherten Datei aus. Wenn dein Server es unterst�tzt, kannst du eine Gzip oder bzip2 komprimierte Text-Datei verwenden, welche dann automatisch dekomprimiert wird. <strong>ACHTUNG</strong> Dies wird alle vorhandenen Daten �berschreiben. Die Wiederherstellung kann etwas Zeit in Anspruch nehmen, bitte verlasse diese Seite nicht bis die Wiederherstellung komplett ist. Backups werden in dem <b><samp>backup/</samp></b> Ordner gespeichert. Backups die nicht mit diesem System erstellt wurden, werden wahrscheinlich nicht funktionieren.',
	'RESTORE_OPTIONS' => 'Wiederherstellungs-Optionen',

	'Restore_Success' => 'Die Datenbank wurde erfolgreich wiederhergestellt.<br />Deine Seite sollte nun wieder auf den Stand des gew�hlten Backups sein.',

// Errors
	'No_Backup_Selected' => 'Du hast kein Backup ausgew�hlt, somit kannst du keins wiederherstellen.',
	'Backup_Invalid' => 'Die ausgew�hlte Backup-Datei ist ung�ltig.',
	'RESTORE_FAILURE' => 'Die Backup-Datei hat Fehler.',
/* lang_admin_db_backup.php - END */

/* Logs - BEGIN */
	'LOGS_ACTIONS_FILTER' => 'Aktionen-Filter',
	'LOGS_TITLE' => 'Logs',
	'LOGS_EXPLAIN' => 'Alle relevanten Aktionen wurden in der DB gespeichert.',
	'LOGS_TARGET' => 'Ziel',
	'LOGS_DELETE' => 'Auswahl l�schen',
	'LOGS_DELETE_ALL' => 'Logs Tabelle l�schen',
	'LOGS_DENY' => 'Keine Berechtigung!',
	'LOGS_POST_EDIT' => '�nderte einen Beitrag geschrieben von',
	'LOGS_POST_DELETE' => 'l�schte einen Beitrag von',
	'LOGS_GROUP_JOIN' => 'beantragt Gruppenmitgliedschaft in der Gruppe',
	'LOGS_GROUP_EDIT' => '�nderte Gruppenoptionen von %s',
	'LOGS_GROUP_ADD' => 'f�gte %s zur Gruppe',
	'LOGS_GROUP_TYPE' => '�nderte Gruppe %s, jetzt ist die Gruppe %s',
	'LOGS_GROUP_TYPE_0' => 'ge�ffnet',
	'LOGS_GROUP_TYPE_1' => 'geschlossen',
	'LOGS_GROUP_TYPE_2' => 'versteckt',
	'LOGS_MESSAGE' => 'versendete eine E-Mail zu einem oder mehreren Benutzern, code <b>%s</b>',
	'LOGS_MODCP_DELETE' => 'l�schte ein Thema von %s durch das MODCP',
	'LOGS_MODCP_RECYCLE' => 'verschon ein Thema von %s durch das MODCP in den Papierkorb',
	'LOGS_MODCP_LOCK' => 'sperrte ein Thema von %s durch das MODCP',
	'LOGS_MODCP_UNLOCK' => 'entsperrte ein Thema von %s durch das MODCP',
	'LOGS_MODCP_MOVE' => 'verschob ein Thema von %s durch das MODCP',
	'LOGS_MODCP_MERGE' => 'f�gte ein Thema von %s mit einem anderen durch das MODCP zusammen',
	'LOGS_MODCP_SPLIT' => 'teilte ein Thema %s durch das MODCP',
	'LOGS_TOPIC_BIN' => 'l�schte ein Thema von',
	'LOGS_TOPIC_ATTACK' => 'hacking attempt to message',
	'LOGS_CARD_BAN' => 'gebannt',
	'LOGS_CARD_WARN' => 'verwarnt',
	'LOGS_CARD_UNBAN' => 'entsperrt',
	'LOGS_ADMIN_CAT_ADD' => 'f�gte ein Forum hinzu',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP' => 'DB gesichert %s',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_full' => 'vollst�ndig',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_structure' => '(nur die Struktur)',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_data' => '(nur die Daten)',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_store_and_download' => ', hat sie heruntergeladen und auf dem Webspace gespeichert',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_store' => ', und hat sie auf dem Webspace gespeichert',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_download' => ', und hat sie heruntergeladen',
	'LOGS_ADMIN_DB_UTILITIES_RESTORE' => 'DB wiederhergestellt von',
	'LOGS_ADMIN_BOARD_CONFIG' => '�nderte die Board/Server Einstellungen',
	'LOGS_ADMIN_BOARD_IP_CONFIG' => '�nderte die IcyPhoenix Einstellungen',
	'LOGS_ADMIN_GROUP_NEW' => 'erstellte Gruppe',
	'LOGS_ADMIN_GROUP_DELETE' => 'l�schte Gruppe',
	'LOGS_ADMIN_GROUP_EDIT' => '�nderte Gruppe',
	'LOGS_ADMIN_USER_AUTH' => '�nderte Berechtigungen von',
	'LOGS_ADMIN_GROUP_AUTH' => '�nderte Gruppen Berechtigungen',
	'LOGS_ADMIN_USER_BAN' => 'sperrte jemanden vom ACP aus',
	'LOGS_ADMIN_USER_UNBAN' => 'entsperrte jemanden vom ACP aus',
	'LOGS_ADMIN_USER_DELETE' => 'l�schte Benutzer',
	'LOGS_ADMIN_USER_EDIT' => '�nderte das Profil von',
	'LOGS_CMS_LAYOUT_EDIT' => '�nderte %sdiese%s Seite',
	'LOGS_CMS_LAYOUT_DELETE' => 'l�schte eine Seite [ID=%s]',
	'LOGS_CMS_BLOCK_EDIT' => '�nderte einen Block [ID=%s] auf %sdieser%s Seite',
	'LOGS_CMS_BLOCK_EDIT_LS' => '�nderte einen Block [ID=%s] in einer Standard Seite [%s]',
	'LOGS_CMS_BLOCK_DELETE' => 'l�schte einen Block [ID=%s] auf %sdieser%s Seite',
	'LOGS_CMS_BLOCK_DELETE_LS' => 'l�schte einen Block [ID=%s] in einer Standard-Seite [%s]',
/* Logs - END */

	'SMILEYS_UPDATED' => 'Smilies aktualisiert',

/* ADS - BEGIN */
	'ADS_TITLE' => 'Banner &amp; Sponsoren',
	'ADS_TITLE_EXPLAIN' => 'Dieses Kapitel erlaubt dir die Konfiguration von Banner, Werbungen und Sponsoren um sie auf deiner Seite anzuzeigen. Du kannst unterschiedliche Banner hinzuf�gen und selbst entscheiden, wo und f�r welche Benutzer sie angezeigt werden sollen. Wenn du mehrere Banner f�r die selbe Position festlegst, dann wird von diese Bannern jeweils einer zuf�llig angezeigt.',
	'AD_DES' => 'Beschreibung',
	'AD_TEXT' => 'Inhalt',
	'AD_ENABLED' => 'Freigegeben',
	'AD_STATUS' => 'Status',
	'AD_STATUS_EXPLAIN' => 'W�hle JA aus, wenn du diesen Banner aktivieren m�chtest oder NEIN zum deaktivieren',
	'AD_POSITION' => 'Position',
	'AD_AUTH' => 'Befugnisse',
	'AD_AUTH_EXPLAIN' => 'Benutzer die diese Banner sehen werden',
	'AD_AUTH_GUESTS' => 'Nur G�ste',
	'AD_AUTH_REG' => 'G�ste und Registrierte (Keine ADMINS oder MODS)',
	'AD_AUTH_MOD' => 'Alle au�er Administratoren',
	'AD_AUTH_ADMIN' => 'Alle',
	'AD_FORMAT' => 'Format',
	'AD_POS_GLT' => 'Global Top',
	'AD_POS_GLB' => 'Global Bottom',
	'AD_POS_GLH' => 'Global Header',
	'AD_POS_GLF' => 'Global Footer',
	'AD_POS_FIX' => 'Forum Index Element',
	'AD_POS_FIT' => 'Forum Index Top',
	'AD_POS_FIB' => 'Forum Index Bottom',
	'AD_POS_VFX' => 'View Forum Element',
	'AD_POS_VFT' => 'View Forum Top',
	'AD_POS_VFB' => 'View Forum Bottom',
	'AD_POS_VTX' => 'View Topic Element',
	'AD_POS_VTT' => 'View Topic Top',
	'AD_POS_VTB' => 'View Topic Bottom',
	'AD_POS_NMT' => 'Nav Men� Top',
	'AD_POS_NMB' => 'Nav Men� Bottom',
	'AD_ADD' => 'Banner hinzuf�gen',
	'AD_EDIT' => 'Banner erfolgreich ge�ndert',
	'AD_ADDED' => 'Banner erfolgreich hinzugef�gt',
	'ADS_UPDATE' => 'Banner aktualisieren',
	'AD_UPDATED' => 'Banner erfolgreich aktualisiert',
	'AD_DELETED' => 'Banner erfolgreich gel�scht',
	'CLICK_RETURN_ADS' => 'Klicke %shier%s, um zu den Banner-Einstellungen zur�ckzukehren.',
	'AD_NO_ADS' => 'Keine Banner festgelegt',
	'ERR_AD_ADD' => 'Fehler, bitte f�lle alle ben�tigten Felder aus',
/* ADS - END */

	'FULL_HTML' => 'Full HTML',
	'ACTIONS' => 'Aktionen',
	'EDIT' => 'Bearbeiten',
	'DELETE' => 'L�schen',

// ####################### [ Icy Phoenix Options BEGIN ] #####################
	'MG_Configuration' => 'Icy Phoenix Einstellungen',
	'MG_Configuration_Explain' => 'Hier kannst du einige fortgeschrittene Icy Phoenix Einstellungen vornehmen',

	'MG_Configuration_Headers_Banners' => 'Headers &amp; Banners',
	'MG_Configuration_Queries' => 'SQL Optimierung',
	'MG_Configuration_Permissions' => 'Seiten Befugnisse',
	'MG_Configuration_Posting' => 'Beitragseinstellungen',
	'MG_SW_Precompiled_Posts_Title' => 'Vorkompilierte Beitr�ge',
	'MG_SW_Logins_Title' => 'Login Aufzeichnungen',
	'MG_SW_Edit_Notes_Title' => 'Bearbeitungs Notizen',
	'MG_Configuration_IMG_Posting' => 'Bilder in Beitr�gen',

	'MG_SW_Header_Footer' => 'Header und Footer Mitteilungen',
	'MG_SW_Header_Table' => 'Header Tabelle',
	'MG_SW_Header_Table_Explain' => 'Bei Aktivierung dieser Option wird eine Tabelle auf jeder Seite Oben mit einer speziellen Nachricht angezeigt.',
	'MG_SW_Header_Table_Text' => 'F�ge deinen Text hier ein',
 
	'MG_SW_Empty_Precompiled_Posts' => 'Leere vorkompilierte Beitr�ge',
	'MG_SW_Empty_Precompiled_Posts_Explain' => 'Diese Funktion leert alle vorkompilierten Beitr�ge.',
	'MG_SW_Empty_Precompiled_Posts_Success' => 'Vorkompilierte Beitr�ge korrekt geleert.',
	'MG_SW_Empty_Precompiled_Posts_Fail' => 'Fehler beim Leeren der vorkompilierten Beitr�ge.',
	'MG_SW_Empty_Precompiled_Posts_InProgress' => 'Leeren der Cache Ordner in Bearbeitung...',
	'MG_SW_Empty_Precompiled_Posts_InProgress_Redirect' => 'Du wirst automatisch in 3 Sekunden zum n�chsten Schritt weitergeleitet',
	'MG_SW_Empty_Precompiled_Posts_InProgress_Redirect_Click' => 'Wenn du nicht automatisch in 3 Sekunden weitergeleitet wirst, kannst du %shier%s klicken',
	'MG_SW_Empty_Precompiled_Posts_Redirect_Click' => 'Klicke %shier%s, um zur Cache Verwaltung zur�ckzukehren.',

	'MG_FNF_Header' => 'Schnell-Einstellungen',
	'MG_FNF_Header_Explain' => 'Auf dieser Seite kannst du schnell und einfach einige Schnell-Einstellungen f�r dein Forum vornehmen. Diese Voreinstellungen wurden f�r Benutzer erstellt, um einfach eine Massen�nderung an den Einstellungen vorzunehmen, ohne jede Einstellung einzeln f�r sich �ndern zu m�ssen. Diese Voreinstellungen k�nnen als Grundlage benutzt werden, um sie danach den pers�nlichen Bed�rfnissen anzupassen: z.B. kannst du "Schnell und aufgebracht" ausw�hlen und dann die Einstellungen �ndern, die du nicht magst.<br /><br /><span class="text_red"><b>ACHTUNG, wenn du einmal eine Schnell-Einstellung ausgew�hlt hast, kannst du sie nicht mehr automatisch r�ckg�ngig machen. Du musst sie dann manuell wieder ausw�hlen.</b></span>',
	'MG_FNF_Options_Set' => 'Schnell-Einstellungen',
	'MG_FNF_FNF' => 'Schnell und aufgebracht',
	'MG_FNF_FNF_Explain' => 'Diese Einstellung erh�ht die Geschwindigkeit deines Forums, da viele der Funktionen, welche eine hohe CPU-Belastung oder DB-Zugriffe ben�tigen, deaktiviert werden. Dies ist eine gute Anfangseinstellung f�r eine schnelles Forum.',
	'MG_FNF_MGS' => 'Mighty Gorgon\'s Empfehlung',
	'MG_FNF_MGS_Explain' => 'Diese Einstellung ist ausgewogen und f�r die meisten Seiten zu empfehlen. Einigen Funktionen bleiben aktiviert, w�hrend andere mit hoher CPU-Auslastung deaktiviert sind.',
	'MG_FNF_Full_Features' => 'Alle Funktionen',
	'MG_FNF_Full_Features_Explain' => 'W�hle diese Einstellung aus, wenn du keine Bandbreitenbeschr�nkung hast oder wenn du alle Icy Phoenix Funktionen haben m�chtest. Es kann allerdings sein, dass einige dieser Funktionen nicht mit deinem Server kompatibel sind.',

	'MG_SW_ACRONYMS' => 'Abk�rzungen deaktivieren',
	'MG_SW_ACRONYMS_Explain' => 'Diese Option deaktiviert die Abk�rzungen-Analyse',
	'MG_SW_AUTOLINKS' => 'Autolinks deaktivieren',
	'MG_SW_AUTOLINKS_Explain' => 'Diese Option deaktiviert die Autolinks-Analyse',
	'MG_SW_CENSOR' => 'Wortzensur deaktivieren',
	'MG_SW_CENSOR_Explain' => 'Diese Option deaktiviert die Wortzensur-Analyse',

	'MG_SW_No_Right_Click' => 'Blockiere Rechts Klick',

	'Click_return_config_mg' => 'Klicke %shier%s, um zu den Icy Phoenix Einstellungen zur�ckzukehren.',
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
$lang['1000_Configuration'] = 'Konfiguration'; // admin_board.php, admin_board_extend.php, admin_board_headers_banners.php, admin_board_main.php, admin_board_permissions.php, admin_board_server.php, admin_board_posting.php, admin_board_queries.php, admin_captcha_config.php, admin_upi2db.php
$lang['100_Server_Configuration'] = 'Server Einstellungen'; // admin_board_server.php
$lang['110_Various_Configuration'] = 'Board Einstellungen'; // admin_board.php
$lang['120_MG_Configuration'] = 'Icy Phoenix Einstellungen'; // admin_board_main.php
$lang['125_Language'] = 'Sprachvariable hinzuf�gen'; // admin_lang_user_created.php
$lang['127_Clear_Cache'] = 'Cache l�schen'; // admin_board_clearcache.php
$lang['130_UPI2DB_Mod'] = 'Ungelesene Beitr�ge'; // admin_upi2db.php
$lang['140_MG_Configuration_Headers_Banners'] = 'Headers &amp; Banner'; // admin_board_headers_banners.php
$lang['145_Captcha_Config'] = 'Visuelle Best�tigung'; // admin_captcha_config.php
$lang['150_Similar_topics'] = '�hnliche Themen'; // admin_similar_topics.php
$lang['160_Title_infos'] = 'Quick Titel Verwaltung'; // admin_quick_title.php
$lang['170_LIW'] = 'Bildbreite begrenzen'; // admin_liw.php
$lang['180_MG_Configuration_Permissions'] = 'Seitenbefugnisse'; // admin_board_permissions.php
$lang['190_Spider_Bots'] = 'Spider / Bots'; // admin_bots.php
$lang['192_Google_BOT'] = 'Google Bot Detektor'; // admin_google_bot_detector.php
$lang['195_Yahoo_search'] = 'Yahoo Suche'; // admin_yahoo_search.php
$lang['200_Language'] = 'Sprache'; // admin_lang_extend.php
$lang['210_MG_Quick_Settings'] = 'Schnell-Einstellungen'; // admin_board_quick_settings.php

// General
$lang['1100_General'] = 'Allgemein'; // admin_acronyms.php, admin_autolinks.php, admin_force_read.php, admin_helpdesk.php, admin_liw.php, admin_force_read.php, admin_mass_email.php, admin_megamail.php, admin_notepad.php, admin_quick_title.php, admin_smilies.php, admin_words.php, admin_yahoo_search.php
$lang['100_Acronyms'] = 'Abk�rzungen'; // admin_acronyms.php
$lang['110_Autolinks'] = 'Autolinks'; // admin_autolinks.php
$lang['120_Ads'] = 'Banner &amp; Sponsoren'; // admin_ads.php
$lang['130_Mass_Email'] = 'Massen-E-Mail versenden'; // admin_mass_email.php
$lang['140_Mega_Mail'] = 'Mega Mailer / PN'; // admin_megamail.php
$lang['150_FTR_Config'] = 'FTR Konfiguration'; // admin_force_read.php
$lang['160_FTR_Users'] = 'FTR Benutzer'; // admin_force_read.php
$lang['170_Smilies'] = 'Smilies'; // admin_smilies.php
$lang['180_Word_Censor'] = 'Wortzensur'; // admin_words.php
$lang['200_Notepad'] = 'Admin Notizblock'; // admin_notepad.php
$lang['210_Help_Desk'] = 'Hilfestellung'; // admin_helpdesk.php
$lang['240_Replace_title'] = 'Ersetzen in Beitr�gen'; // admin_replace.php

// Forum
$lang['1200_Forums'] = 'Forum Admin'; // admin_forum_prune.php, admin_forumauth_list.php, admin_forums.php, admin_forums_extend.php, admin_prune_overview.php, admin_topic_shadow.php
$lang['100_Manage'] = 'Verwaltung'; // admin_forums.php
$lang['110_Manage_extend'] = 'Sync. Verwaltung'; // admin_forums_extend.php
$lang['120_Permissions_List'] = 'Berechtigungsliste'; // admin_forumauth_list.php
$lang['122_Permissions_Adv'] = 'Berechtigungen ADV'; // admin_forumauth_adv.php
$lang['125_Permissions_Forum'] = 'Berechtigungen'; // admin_forumauth.php
$lang['130_Prune'] = 'Autom. L�schen'; // admin_forum_prune.php
$lang['140_Prune_Overview'] = 'Auto-L�schen �bersicht'; // admin_prune_overview.php
$lang['150_Topic_Shadow'] = 'Schatten Themen'; // admin_topic_shadow.php

// eXtreme Styles
$lang['1300_Extreme_Styles'] = 'Styles &amp; Templates'; // xs_include.php -> $module_name

// DB Maintenance & Security
$lang['1400_DB_Maintenance'] = 'Datenbank'; // admin_bb_db.php, admin_db_generator.php, admin_db_maintenance.php, admin_db_utilities.php
$lang['100_Actions_LOG'] = 'Aktionen Log'; // admin_logs.php
$lang['110_DB_Admin'] = 'IP MySQLAdmin'; // admin_bb_db.php
$lang['120_Backup_DB'] = 'Datenbank Backup'; // admin_db_utilities.php
$lang['130_Restore_DB'] = 'Datenbank Wiederherstellung'; // admin_db_utilities.php
$lang['135_Restore_DB'] = 'Datenbank Wiederherstellung aus Datei'; // admin_db_utilities.php
$lang['140_Optimize_DB'] = 'Datenbank optimieren'; // admin_db_utilities.php
$lang['150_DB_Maintenance'] = 'Datenbank-Wartung'; // admin_db_maintenance.php
$lang['170_db_update_generator'] = 'DB Update Generator'; // admin_db_generator.php
$lang['180_msqd'] = 'MySQLDumper'; // admin_msqd.php

// IM Portal
$lang['1500_IM_Portal'] = 'Portal'; // admin_blocks.php, admin_blocks_pos.php, admin_blocks_var.php, admin_clear_cache.php, admin_layout.php, admin_portal.php
$lang['100_Portal_Configuration'] = 'Portal Konfiguration'; // admin_portal.php
$lang['110_Page_Management'] = 'Seitenverwaltung'; // admin_layout.php
$lang['115_Page_Management'] = 'Individuelle Seitenverwaltung'; // admin_layout_cp.php
$lang['120_Blocks_Management'] = 'Block Verwaltung'; // admin_blocks.php
$lang['130_Blocks_Position_Tag'] = 'Block Positions-Tag'; // admin_blocks_pos.php
$lang['140_Blocks_Variables'] = 'Block Variablen'; // admin_blocks_var.php
$lang['150_Delete_Cache_Files'] = 'Cachedateien l�schen'; // admin_clear_cache.php

// News
$lang['1600_News_Admin'] = 'News'; // admin_news.php, admin_news_cats.php, admin_xs_news.php, admin_xs_news_xml.php
$lang['100_News_Config'] = 'News Konfiguration'; // admin_news.php
$lang['110_News_Cats'] = 'News Kategorien'; // admin_news_cats.php
$lang['120_XS_News_Config'] = 'News Konfiguration'; // admin_xs_news.php
$lang['130_XS_News'] = 'News Artikel'; // admin_xs_news.php
$lang['140_XS_News_Tickers'] = 'News Ticker'; // admin_xs_news_xml.php

// Users
$lang['1610_Users'] = 'Benutzer'; // admin_account.php, admin_disallow.php, admin_email_list.php, admin_jr_admin.php, admin_postcount.php, admin_priv_msgs.php, admin_profile_fields.php, admin_ranks.php, admin_ug_auth.php, admin_user_ban.php, admin_user_bantron.php, admin_user_register.php, admin_user_search.php, admin_userlist.php, admin_users.php, admin_voting.php
$lang['100_Jr_Admin'] = 'Junior Admin'; // admin_jr_admin.php
$lang['110_Manage'] = 'Verwalten'; // admin_users.php
$lang['113_Permissions_Users'] = 'Berechtigungen'; // admin_ug_auth.php
$lang['116_CMS_Permissions_Users'] = 'CMS Berechtigungen'; // admin_cms_auth.php
$lang['120_Ranks'] = 'Benutzerr�nge'; // admin_ranks.php
$lang['130_Userlist'] = 'Benutzerliste'; // admin_userlist.php
$lang['140_Email_List'] = 'E-Mail-Liste'; // admin_email_list.php
$lang['150_Private_Messages'] = 'Private Nachrichten'; // admin_priv_msgs.php
$lang['160_Account_active'] = 'Aktive Benutzer'; // admin_account.php
$lang['170_Account_inactive'] = 'Inaktive Benutzer'; // admin_account.php
$lang['180_Add_New_User'] = 'Benutzer anlegen'; // admin_user_register.php
$lang['190_Prune_users'] = 'Benutzer l�schen'; // admin_prune_users.php
$lang['200_Disallow'] = 'Benutzernamen verbieten'; // admin_disallow.php
$lang['210_Ban_Management'] = 'Benutzer sperren'; // admin_user_ban.php
$lang['220_Bantron'] = 'Bantron'; // admin_user_bantron.php
$lang['250_Postcount_Config'] = 'Beitragsz�hler anpassen'; // admin_postcount.php
$lang['260_CPF_Add'] = 'Profilfeld hinzuf�gen'; // admin_profile_fields.php
$lang['270_CPF_Edit'] = 'Profilfeld bearbeiten'; // admin_profile_fields.php
$lang['280_User_Search'] = 'Erweiterte Benutzersuche'; // admin_user_search.php
$lang['290_Poll_Results'] = 'Umfrageergebnisse'; // admin_voting.php
$lang['300_Picscount_Config'] = 'Bildz�hler Sync'; // admin_postcount.php

// Groups
$lang['1620_Groups'] = 'Gruppen'; // admin_color_groups.php, admin_groups.php, admin_ug_auth.php
$lang['110_Manage_Groups'] = 'Verwalten'; // admin_groups.php
$lang['120_Color_Groups'] = 'Gruppenfarben'; // admin_color_groups.php
$lang['130_Permissions_Group'] = 'Berechtigungen'; // admin_ug_auth.php

// Topic Rating
$lang['1700_Topic_Rating'] = 'Themen Bewertung'; // admin_rate.php

// Knowledge Base
$lang['1800_KB_title'] = 'Wissensdatenbank'; // admin_kb_art.php, admin_kb_auth.php, admin_kb_cat.php, admin_kb_config.php, admin_kb_custom.php, admin_kb_rebuild_search.php, admin_kb_types.php
$lang['100_KB_Configuration'] = 'Konfiguration'; // admin_kb_config.php
$lang['110_Art_man'] = 'Artikel Verwaltung'; // admin_kb_art.php
$lang['120_Cat_man'] = 'Kategorien'; // admin_kb_cat.php
$lang['130_Types_man'] = 'Artikeltypen'; // admin_kb_types.php
$lang['140_Custom_Field'] = 'Benutzerdef. Felder'; // admin_kb_custom.php
$lang['150_Permissions'] = 'Berechtigungen'; // admin_kb_auth.php
$lang['160_Optimize_tables'] = 'Tabellen optimieren'; // admin_kb_rebuild_search.php

// Attachments
$lang['1900_Attachments'] = 'Dateianh�nge'; // admin_attach_cp.php, admin_attachments.php, admin_extensions.php
$lang['100_Control_Panel'] = 'Kontrollzentrum'; // admin_attach_cp.php
$lang['110_Att_Manage'] = 'Einstellungen'; // admin_attachments.php
$lang['120_Quota_limits'] = 'Quota Grenzen'; // admin_attachments.php
$lang['130_Shadow_attachments'] = 'Versteckte Anh�nge'; // admin_attachments.php
$lang['140_Sync_attachments'] = 'Anh�nge Synchronisieren'; // admin_attachments.php
$lang['150_Extension_control'] = 'Dateiendungen verwalten'; // admin_extensions.php
$lang['160_Extension_group_manage'] = 'Dateiendungsgruppen verwalten'; // admin_extensions.php
$lang['170_Forbidden_extensions'] = 'Verbotene Dateiendungen'; // admin_extensions.php
$lang['180_Special_categories'] = 'Spezialkategorien'; // admin_attachments.php

// Downloads
$lang['2000_Downloads'] = 'Downloads'; // admin_pa_catauth.php, admin_pa_category.php, admin_pa_custom.php, admin_pa_fchecker.php, admin_pa_file.php, admin_pa_license.php, admin_pa_settings.php
$lang['100_Settings'] = 'Konfiguration'; // admin_pa_settings.php
$lang['110_Cat_manage_title'] = 'Kategorieverwaltung'; // admin_pa_category.php
$lang['120_File_manage_title'] = 'Dateiverwaltung'; // admin_pa_file.php
$lang['130_Fchecker'] = 'Dateiwartung'; // admin_pa_fchecker.php
$lang['140_Mfieldtitle'] = 'Benutzerdef. Felder'; // admin_pa_custom.php
$lang['150_License_title'] = 'Lizenzverwaltung'; // admin_pa_license.php
$lang['160_Permissions'] = 'Berechtigungen'; // admin_pa_catauth.php

// Downloads
$lang['2050_Downloads'] = 'Downloads ADV'; // admin_pa_catauth.php, admin_pa_category.php, admin_pa_custom.php, admin_pa_fchecker.php, admin_pa_file.php, admin_pa_license.php, admin_pa_settings.php
$lang['100_DL_Settings'] = 'Konfiguration'; // admin_pa_settings.php

// Links
$lang['2100_Links'] = 'Links'; // admin_links.php, admin_links_cat.php, admin_links_config.php
$lang['100_Configuration'] = 'Konfiguration'; // admin_links_config.php
$lang['110_Category'] = 'Kategorieverwaltung'; // admin_links_cat.php
$lang['120_Add_new'] = 'Link Hinzuf�gen'; // admin_links.php
$lang['130_Link_Manage'] = 'Linkverwaltung'; // admin_links.php

// Album
$lang['2200_Photo_Album'] = 'Foto-Galerie'; // admin_album_auth.php, admin_album_cat.php, admin_album_config_extended.php
$lang['110_Album_Config'] = 'Konfiguration'; // admin_album_config_extended.php
$lang['120_Album_Categories'] = 'Kategorieverwaltung'; // admin_album_cat.php
$lang['130_Album_Permissions'] = 'Berechtigungen'; // admin_album_auth.php
$lang['140_Personal_Galleries'] = 'Pers�nliche Foto-Galerien'; // admin_album_personal.php

// FAQ
$lang['2300_FAQ'] = 'FAQ &amp; Regeln'; // admin_faq_editor.php
$lang['110_FAQ_BBCode'] = 'BBCode-FAQ'; // admin_faq_editor.php
$lang['120_FAQ_Board'] = 'Seiten-FAQ'; // admin_faq_editor.php
$lang['130_FAQ_Rules'] = 'Seiten-Regeln'; // admin_faq_editor.php

// INFO
$lang['2400_INFO'] = 'Info'; // admin_logs.php, admin_phpinfo.php, admin_gd_info.php, admin_referrers.php, admin_google_bot_detector.php
$lang['110_Actions_LOG'] = 'Aktionen Log'; // admin_logs.php
$lang['120_PHP_INFO'] = 'PHP Info'; // admin_phpinfo.php
$lang['130_GD_Info'] = 'GD Info'; // admin_gd_info.php
$lang['140_HTTP_REF'] = 'HTTP Referrers'; // admin_referrers.php
$lang['150_Google_BOT'] = 'Google Bot Detektor'; // admin_google_bot_detector.php

// ####################### [ ACP Navigation END ] #######################

?>