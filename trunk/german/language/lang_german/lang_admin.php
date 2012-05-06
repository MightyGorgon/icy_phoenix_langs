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
	'Styles' => 'Styles',

	'Configuration' => 'Konfiguration',
	'Various_Configuration' => 'Konfiguration',
	'Permissions' => 'Berechtigungen',
	'Manage' => 'Einstellungen',
	'manage' => 'Einstellungen',
	'Disallow' => 'Benutzernamen verbieten',
	'Prune' => 'Autom. Löschen',
	'Mass_Email' => 'Massen-E-Mail versenden',
	'Ranks' => 'Ränge',
	'Smilies' => 'Smilies',
	'Ban_Management' => 'Bannen',
	'Word_Censor' => 'Wortzensur',
	'Export' => 'Exportieren',
	'Create_new' => 'Erstellen',
	'Add_new' => 'Hinzufügen',
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
	'Welcome_IP' => 'Willkommen bei Icy Phoenix',
	'Admin_intro' => 'Danke, dass du dich für Icy Phoenix entschieden hast. Auf diesem Bildschirm erhältst du einen Überblick über die Statistiken deines Forums. Wenn du auf diese Seite zurückkehren möchtest, klicke auf den <u>Admin Index</u>-Link im oberen Bedienfeld. Um zu deinem Forum zurückzukehren, klicke oben rechts auf Forum. Die anderen Links auf der linken Seite erlauben es dir, alle wichtigen Bereiche deines Forums zu kontrollieren. In jedem Bereich wird beschrieben, wie die einzelnen Funktionen verwendet werden.',
	'PayPalInfo' => 'Icy Phoenix ist ein Open Source Projekt. Du kannst deine Anerkennung zeigen und die Weiterentwicklung von Icy Phoenix unterstützen, indem du für das Projekt spendest.',
	'Forum_stats' => 'Forum Statistiken',
	'Admin_Index' => 'Admin-Index',
	'Preview_forum' => 'Forumsvorschau',
	'Click_return_admin_index' => 'Klicke %shier%s, um zum Admin-Index zurückzukehren.',
	'Portal' => 'Portal',
	'Preview_Portal' => 'Portal Vorschau',
	'Main_index' => 'Forum',

	'Statistic' => 'Statistik',
	'Value' => 'Wert',
	'Number_posts' => 'Anzahl der Beiträge',
	'Posts_per_day' => 'Beiträge pro Tag',
	'Number_topics' => 'Anzahl der Themen',
	'Topics_per_day' => 'Themen pro Tag',
	'Number_users' => 'Anzahl der Benutzer',
	'Users_per_day' => 'Benutzer pro Tag',
	'Board_started' => 'Board startete am',
	'Avatar_dir_size' => 'Größe des Avatarordners',
	'Database_size' => 'Datenbankgröße',
	'Gzip_compression' => 'Gzip-Kompression',
	'Not_available' => 'Nicht verfügbar',

	'ON' => 'Aktiv', // This is for Gzip compression
	'OFF' => 'Inaktiv',

// DB Utils
	'Database_Utilities' => 'Datenbankfunktionen',

	'Restore' => 'Wiederherstellen',
	'Backup' => 'Backup',
	'Restore_explain' => 'Hiermit werden alle Icy Phoenix Tabellen aus einer Datei wiederhergestellt. Falls es dein Server unterstützt, kannst du auch einen Gzip-komprimierten Text hochladen - er wird automatisch dekomprimiert! <b>ACHTUNG</b>: Es werden alle existierenden Daten überschrieben. Der Vorgang wird einige Zeit dauern, bitte verlasse diese Seite nicht, bis er abgeschlossen wurde.',
	'Backup_explain' => 'Hier kannst du alle Icy Phoenix Tabellen abspeichern. Solltest du noch weitere, eigene Tabellen in derselben Datenbank wie die Icy Phoenix Tabellen haben, die auch gespeichert werden sollen, gib ihre Namen in der \'Zusätzliche Tabellen\'-Textbox an (getrennt mit Kommata). Sollte dein Server es unterstützen, kannst du die Datei(en) auch mit Gzip komprimieren, bevor du sie herunterlädst.',

	'Backup_options' => 'Backup-Optionen',
	'Start_backup' => 'Backup beginnen',
	'Full_backup' => 'Vollständiges Backup',
	'Structure_backup' => 'Nur Struktur-Backup',
	'Data_backup' => 'Nur Daten-Backup',
	'Additional_tables' => 'Zusätzliche Tabellen',
	'phpBB_only' => 'Nur Icy Phoenix eigene Tabellen',
	'Gzip_compress' => 'Gzip-Komprimierungs Datei',
	'Select_file' => 'Wähle eine Datei',
	'Start_Restore' => 'Wiederherstellung beginnen',

	'Restore_success' => 'Die Datenbank wurde wieder hergestellt.<br /><br />Dein Board sollte jetzt wieder den Stand des Backups haben.',
	'Backup_download' => 'Dein Download wird in Kürze beginnen - bitte etwas Geduld',
	'Backups_not_supported' => 'Fehler: dein Datenbanksystem unterstützt Datenbank-Backups nicht!',

	'Restore_Error_uploading' => 'Fehler beim Hochladen der Backup-Datei',
	'Restore_Error_filename' => 'Probleme mit dem Dateinamen, probiere einen anderen',
	'Restore_Error_decompress' => 'Die Gzip-Version kann nicht dekomprimiert werden, nutze bitte eine Nur-Text-Datei',
	'Restore_Error_no_file' => 'Es wurde keine Datei hochgeladen',

// Auth pages
	'Select_a_User' => 'Wähle einen Benutzer',
	'Select_a_Group' => 'Wähle eine Gruppe',
	'Select_a_Forum' => 'Wähle ein Forum',
	'Auth_Control_User' => 'Benutzerrechtekontrolle',
	'Auth_Control_Group' => 'Gruppenrechtekontrolle',
	'Auth_Control_Forum' => 'Forenzugangskontrolle',
// Start add Permission List
	'Auth_list_Control_Forum' => 'Berechtigungen für alle Foren',
// End add Permission List
	'Look_up_User' => 'Benutzer auswählen',
	'Look_up_Group' => 'Gruppe auswählen',
	'Look_up_Forum' => 'Forum auswählen',

	'Group_auth_explain' => 'Du kannst hier die Befugnisse und den Moderator-Status für jede Gruppe einstellen. Vergiss nicht, dass einzelne Benutzerbefugnisse immer noch gültig sind, wenn du die Gruppenbefugnisse änderst (z. B. Zugang zu Foren u. ä.). Sollte dies der Fall sein, wirst du darüber informiert.',
	'User_auth_explain' => 'Du kannst hier die Befugnisse und den Moderator-Status für jeden einzelnen Benutzer einstellen. Vergiss nicht, dass Gruppenbefugnisse immer noch gültig sind, wenn du die Benutzerbefugnisse änderst (z. B. Zugang zu Foren u. ä.). Sollte dies der Fall sein, wirst du darüber informiert.',
	'Forum_auth_explain' => 'Du kannst hier die Zugangsebenen für jedes Forum bestimmen. Es gibt eine einfache und eine fortgeschrittene Methode, dies zu tun. Bei der fortgeschrittenen Methode hast du eine bessere Kontrolle über jedes Forum. Bedenke, dass das Ändern der Zugangsebene beeinflusst, welche Benutzer welche Aktionen im Forum durchführen können.',
// Start add Permission List
	'Forum_auth_list_explain' => 'Hier kannst du die Berechtigungseinstellungen für jedes Forum ändern. Beachte, dass das Ändern von Forenberechtigungen ggf. Benutzern den Zugang zum Forum verwehrt, oder das sie bestimmte Funktionen nicht mehr nutzen können.',
// End add Permission List

	'Simple_mode' => 'Einfache Methode',
	'Advanced_mode' => 'Fortgeschrittene Methode',
	'Moderator_status' => 'Moderatorenstatus',

	'Allowed_Access' => 'Zugang gestattet',
	'Disallowed_Access' => 'Zugang verwehrt',
	'Is_Moderator' => 'ist Moderator',
	'Not_Moderator' => 'kein Moderator',

	'Conflict_warning' => 'Warnung: Autorisationskonflikt',
	'Conflict_access_userauth' => 'Der Benutzer hat auf Grund seiner Gruppenmitgliedschaft immer noch Rechte in diesem Forum. Vielleicht solltest du die Gruppenrechte ändern oder den Benutzer komplett aus der Benutzergruppe entfernen. Die Gruppen mit Rechten (und die dazugehörigen Foren) stehen unten.',
	'Conflict_mod_userauth' => 'Der Benutzer hat immer noch Moderatorenrechte in diesem Forum. Vielleicht solltest du die Gruppenrechte ändern oder den Benutzer komplett aus der Benutzergruppe entfernen. Die Gruppen mit Rechten (und die dazugehörigen Foren) stehen unten.',

	'Conflict_access_groupauth' => 'Der oder die folgenden Benutzer haben auf Grund ihrer Benutzereinstellungen immer noch das Zugangsrecht zu diesem Forum. Vielleicht solltest du diese Einstellungen ändern, um dem Benutzer komplett den Zugang zu verweigern. Die Benutzer mit Rechten (und die dazugehörigen Foren) stehen unten.',
	'Conflict_mod_groupauth' => 'Der oder die folgenden Benutzer haben auf Grund ihrer Benutzereinstellungen immer noch Moderatorenrechte in diesem Forum. Vielleicht solltest du diese Einstellungen ändern, um dem Benutzer komplett die Rechte zu nehmen. Die Benutzer mit Rechten (und die dazugehörigen Foren) stehen unten.',

	'Public' => 'Öffentlich',
	'Private' => 'Privat',
	'Registered' => 'Registriert',
	'Self' => 'Selbst',
	'Administrators' => 'Administratoren',
	'Hidden' => 'Versteckt',

// These are displayed in the drop down boxes for advanced
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
	'Delete' => 'Löschen',
	'Sticky' => 'Wichtig',
	'Announce' => 'Ankündigung',
	'Vote' => 'Umfrage',
	'Pollcreate' => 'Umfrage erstellen',

	'Simple_Permission' => 'Einfache Befugnisse',

	'User_Level' => 'Benutzerebene',
	'Auth_User' => 'Benutzer',
	'Auth_Junior_Admin' => 'Junior Administrator',
	'Auth_Admin' => 'Administrator',
	'Group_memberships' => 'Benutzergruppenmitglieder',
	'Usergroup_members' => 'Diese Gruppe hat die folgenden Mitglieder',

	'Forum_auth_updated' => 'Forumsberechtigungen aktualisiert.',
	'User_auth_updated' => 'Benutzerberechtigungen aktualisiert.',
	'Group_auth_updated' => 'Gruppenberechtigungen aktualisiert.',

	'Auth_updated' => 'Befugnisse wurden aktualisiert.',
	'Click_return_userauth' => 'Klicke %shier%s, um zu den Benutzerrechten zurückzukehren.',
	'Click_return_groupauth' => 'Klicke %shier%s, um zu den Gruppenrechten zurückzukehren.',
	'Click_return_forumauth' => 'Klicke %shier%s, um zu den Forenberechtigungen zurückzukehren.',

// Banning
	'Ban_control' => 'Sperren',
	'Ban_explain' => 'Hier kannst du Benutzer bannen. Du kannst entweder einen bestimmten Benutzer, eine IP-Adresse oder einen Hostnamen sperren. Durch diese Methode kann der Benutzer die Startseite des Forums nicht aufrufen. Um den Benutzer daran zu hindern, sich unter einem anderen Namen anzumelden, kannst du auch bestimmte E-Mail-Adressen sperren. Eine E-Mail-Sperre verhindert nur das Registrieren, nicht das Posten eines Benutzers!',
	'Ban_explain_warn' => 'Bitte beachte, dass, wenn du mehrere IP-Adressen eingibst, alle Adressen zwischen dem Anfang und dem Ende der Sperrliste hinzugefügt werden. Versuche die Anzahl der Adressen klein zu halten, indem du Wildcards einsetzt, wo es möglich ist. Am besten ist es, eine konkrete IP-Adresse anzugeben.',

	'Select_username' => 'Wähle einen Benutzernamen!',
	'Select_ip' => 'Wähle eine IP-Adresse!',
	'Select_email' => 'Wähle eine E-Mail-Adresse!',

	'Ban_username' => 'Einen oder mehrere Benutzer bannen',
	'Ban_username_explain' => 'Wenn du mehrere Benutzer auswählst, kannst du auch mehrere Benutzer auf einmal bannen.',

	'Ban_IP' => 'Eine(n) oder mehrere IP-Adressen/Hostnamen bannen',
	'IP_hostname' => 'IP-Adressen oder Hostname',
	'Ban_IP_explain' => 'Um mehrere verschiedene IP-Adressen oder Hostnamen anzugeben, trenne sie mit Kommata voneinander. Um einen Bereich von IP-Adressen anzugeben, trenne den Anfang und das Ende mit einem Bindestrich (-), benutze * als Platzhalter',

	'Ban_email' => 'Eine oder mehrere E-Mail Adressen bannen',
	'Ban_email_explain' => 'Um mehrere verschiedene E-Mail Adressen anzugeben, trenne sie mit Kommata voneinander. Für einen allgemeinen Benutzernamen benutze ein * (z.B. *@hotmail.de)',

	'Unban_username' => 'Einen oder mehrere Benutzer entsperren',
	'Unban_username_explain' => 'Wenn du mehrere Benutzer auswählst, kannst du auch mehrere Benutzer auf einmal entsperren',

	'Unban_IP' => 'Eine oder mehrere IP-Adressen entsperren',
	'Unban_IP_explain' => 'Wenn du mehrere IP-Adressen auswählst, kannst du auch mehrere IP-Adressen auf einmal entsperren',

	'Unban_email' => 'Eine oder mehrere E-Mail Adressen entsperren',
	'Unban_email_explain' => 'Wenn du mehrere E-Mail Adressen auswählst, kannst du auch mehrere E-Mail Adressen auf einmal entsperren',

	'No_banned_users' => 'Keine gesperrten Benutzernamen',
	'No_banned_ip' => 'Keine gebannten IP-Adressen',
	'No_banned_email' => 'Keine gebannten E-Mail Adressen',

	'Ban_update_sucessful' => 'Die Banliste wurde aktualisiert',
	'Click_return_banadmin' => 'Klicke %shier%s, um zur Sperr-Kontrolle zurückzukehren.',

// Configuration
	'General_Config' => 'Allgemeine Konfiguration',
	'Config_explain' => 'Hier kannst du die allgemeinen Einstellungen deines Forums ändern. Für Benutzer- und Foreneinstellungen nutze bitte die Links auf der linken Seite.',

	'Click_return_config' => 'Klicke %shier%s, um zur allgemeinen Konfiguration zurückzukehren.',

	'General_settings' => 'Allgemeine Boardeinstellungen',
	'Server_name' => 'Domainname',
	'Server_name_explain' => 'Der Name der Domain, auf der das Board läuft',
	'Script_path' => 'Scriptpfad',
	'Script_path_explain' => 'Der Pfad zu Icy Phoenix, relativ zum Domainnamen',
	'Server_port' => 'Server Port',
	'Server_port_explain' => 'Der Port, unter dem dein Server läuft, normalerweise 80. Ändere dies nur, wenn es ein anderer Port ist',
	'Site_name' => 'Name der Seite',
	'Site_desc' => 'Beschreibung der Seite',
	'Board_disable' => 'Seite deaktivieren',
	'Board_disable_explain' => 'Hiermit sperrst du das Forum für alle Benutzer. Administratoren können auf den Administrations-Bereich zugreifen, wenn das Forum gesperrt ist.',
	'Acct_activation' => 'Benutzer-Konto-Freischaltung aktivieren',
	'Acc_None' => 'Keine', // These three entries are the type of activation
	'Acc_User' => 'Per E-Mail',
	'Acc_Admin' => 'Durch den Admin',

	'Abilities_settings' => 'Standard Benutzer- und Seiteneinstellungen',
	'Max_poll_options' => 'Maximale Anzahl der Umfrageoptionen',
	'Flood_Interval' => 'Flood-Intervall',
	'Flood_Interval_explain' => 'Anzahl der Sekunden, die ein Benutzer warten muss, bevor er einen neuen Beitrag schreiben kann',
	'Board_email_form' => 'Benutzer E-Mails über Seite',
	'Board_email_form_explain' => 'Deine Benutzer können sich über die Seite E-Mails schreiben',
	'Topics_per_page' => 'Themen pro Seite',
	'Posts_per_page' => 'Beiträge pro Seite',
	'Hot_threshold' => 'Beiträge, die ein Thema braucht, um ein &quot;heißes&quot; Thema zu werden',
	'Default_style' => 'Standard-Style',
	'Override_style' => 'Style überschreiben',
	'Override_style_explain' => 'Vom Benutzer gewähltes Style überschreiben',
	'Default_language' => 'Standard-Sprache',
	'Date_format' => 'Datumformat',
	'System_timezone' => 'Zeitzone',
	'Enable_gzip' => 'Gzip-Komprimierung aktivieren',
// Start Gzip Compression Level MOD
	'Gzip_level' => 'Gzip Komprimierungsstufe',
	'Gzip_level_explain' => 'Hier kannst du die Gzip-Komprimierungsstufe einstellen (eine Ziffer zwischen 0-9). 0 ist gleichbedeutend mit aus, 1 ist sehr gering und 9 ist das Maximum. 9 ist empfohlen.',
// End Gzip Compression Level MOD
	'Enable_prune' => 'Automatisches löschen aktivieren',
	'Allow_HTML' => 'HTML erlauben',
	'Allow_BBCode' => 'BBCode erlauben',
	'Allowed_tags' => 'Erlaubte HTML-Tags',
	'Allowed_tags_explain' => 'Trenne jeden Tag durch ein Komma',
	'Allow_smilies' => 'Smilies erlauben',
	'Smilies_path' => 'Speicherort für Smilies',
	'Smilies_path_explain' => 'Der Pfad in deinem Icy Phoenix Verzeichnis, in dem die Smilies liegen (z. B. images/smiles)',
	'Allow_sig' => 'Signaturen erlauben',
	'Max_sig_length' => 'Maximale Signaturlänge',
	'Max_sig_length_explain' => 'Die maximale Anzahl an Zeichen, die ein Benutzer in seiner Signatur nutzen darf',
	'Allow_name_change' => 'Namenswechsel erlauben',

	'Avatar_settings' => 'Avatareinstellungen',
	'Allow_local' => 'Galerie-Avatare erlauben',
	'Allow_remote' => 'Avatarremote erlauben',
	'Allow_remote_explain' => 'Avatare, die von einer anderen Site verlinkt werden',
	'Allow_upload' => 'Hochladen von Avataren erlauben',
	'Max_avatar_filesize' => 'Maximale Größe',
	'Max_avatar_filesize_explain' => 'Für hochgeladene Avatare (in Bytes)',
	'Max_avatar_size' => 'Maximale Abmessungen des Avatars',
	'Max_avatar_size_width' => 'Maximale Avatar Breite',
	'Max_avatar_size_height' => 'Maximale Maximale Avatar Höhe',
	'Max_avatar_size_explain' => '(Angaben in Pixel)',
	'Avatar_storage_path' => 'Avatar Speicherpfad',
	'Avatar_storage_path_explain' => 'Der Pfad in deinem Icy Phoenix Verzeichnis, in dem die Avatare liegen (z. B. images/avatars)',
	'Avatar_gallery_path' => 'Avatar Galeriepfad',
	'Avatar_gallery_path_explain' => 'Der Pfad in deinem Icy Phoenix Verzeichnis, in dem die Galerie-Avatare liegen (z. B. images/avatars/gallery)',

	'COPPA_settings' => 'COPPA Einstellungen',
	'COPPA_fax' => 'COPPA Fax Nummer',
	'COPPA_mail' => 'COPPA E-Mail Adresse',
	'COPPA_mail_explain' => 'Zu dieser E-Mail Adresse schicken die Eltern die COPPA Einverständniserklärung',

	'Email_settings' => 'E-Mail Einstellungen',
	'Admin_email' => 'E-Mail Adresse des Administrators',
	'Email_sig' => 'E-Mail Signatur',
	'Email_sig_explain' => 'Diese Signatur wird an alle E-Mails des Administrators angehängt',
	'Use_SMTP' => 'Nutze einen SMTP Server zum Mailen',
	'Use_SMTP_explain' => 'Wähle JA, wenn du möchtest, dass deine E-Mails über einen SMTP-Server gesendet werden',
	'SMTP_server' => 'SMTP-Server Adresse',
	'SMTP_port' => 'SMTP Port',
	'SMTP_username' => 'SMTP Benutzername',
	'SMTP_username_explain' => 'Gib nur dann einen Benutzernamen an, wenn der SMTP-Server dies benötigt',
	'SMTP_password' => 'SMTP Passwort',
	'SMTP_password_explain' => 'Gib nur dann ein Passwort an, wenn der SMTP-Server dies benötigt',

	'Disable_privmsg' => 'Private Nachrichten',
	'Inbox_limits' => 'Maximale Nachrichten im Eingang',
	'Sentbox_limits' => 'Maximale Nachrichten im Ausgang',
	'Savebox_limits' => 'Maximale Anzahl gespeicherter Nachrichten',

	'Cookie_settings' => 'Cookie Einstellungen',
	'Cookie_settings_explain' => 'Hier kannst du einstellen, was für Cookies zum Browser gesendet werden. Meistens stimmen die Standardeinstellungen. Solltest du sie ändern müssen, tue es mit Bedacht, ansonsten kann sich niemand mehr im Forum einloggen.',
	'Cookie_domain' => 'Cookie-Domain',
	'Cookie_name' => 'Cookie-Name',
	'Cookie_path' => 'Cookie-Pfad',
	'Cookie_secure' => 'Sicheres Cookie',
	'Cookie_secure_explain' => 'Falls dein Server auf SSL läuft, aktiviere diese Funktion, ansonsten lasse sie deaktiviert',
	'Session_length' => 'Sessionlänge [ Sekunden ]',
	'SESSION_LAST_VISIT_RESET' => 'Letzten Besuch aktualisieren, wenn Session abgelaufen',
	'SESSION_LAST_VISIT_RESET_EXPLAIN' => 'Wenn du diese Option aktivierst, wird die letzte Besuchszeit aktualisiert, auch wenn die Session bereits abgelaufen ist. Ansonsten wird die letzte Besuchszeit nur aktualisiert, wenn Autologin aktiviert ist und die maximale Login-Zeit noch nicht erreicht wurde.',

// Visual Confirmation
	'Visual_confirm' => 'Aktiviere visuelle Bestätigung',
	'Visual_confirm_explain' => 'Benutzer müssen bei der Registrierung einen durch ein Bild vorgegeben Schlüssel eingeben.',

// Autologin Keys - added 2.0.18
	'Allow_autologin' => 'Erlaube automatisches Einloggen',
	'Allow_autologin_explain' => 'Legt fest, ob Benutzern das automatische Einloggen ermöglicht wird',
	'Autologin_time' => 'Ablaufzeit des Schlüssels für das automatische Einloggen',
	'Autologin_time_explain' => 'Tage, die der Schlüssel für das automatische Einloggen gültig ist, wenn das Board nicht besucht wird. Mit Null läuft der Schlüssel nicht ab.',

// Forum Management
	'Forum_admin' => 'Forum Administration',
	'Forum_admin_explain' => 'Hier kannst du Kategorien und Foren hinzufügen, löschen, bearbeiten und neu anordnen.',
	'Edit_forum' => 'Forum bearbeiten',
	'Create_forum' => 'Neues Forum erstellen',
	'Create_category' => 'Neue Kategorie erstellen',
	'Remove' => 'Entfernen',
	'Action' => 'Aktion',
	'Update_order' => 'Reihenfolge ändern',
	'Config_updated' => 'Konfiguration erfolgreich 	geändert',
	'MOVE_UP' => 'Nach oben',
	'MOVE_DOWN' => 'Nach unten',
	'RESYNC' => 'Resync',
	'No_mode' => 'Kein Modus ausgewählt',
	'Forum_edit_delete_explain' => 'Hier kannst du alle allgemeinen Boardeinstellungen anpassen. Zur Benutzer- und Forenkonfiguration benutze bitte die entsprechenden Links auf der linken Seite',
	'Forum_Expand' => 'Aufklappen',
	'Forum_Collapse' => 'Zuklappen',
	'Forum_Expand_all' => 'Alle aufklappen',
	'Forum_Collapse_all' => 'Alle zuklappen',

	'Move_contents' => 'Alle Inhalte verschieben',
	'Forum_delete' => 'Forum löschen',
	'Forum_delete_explain' => 'Hier kannst du ein Forum oder eine Kategorie löschen und entscheiden, wohin die enthaltenen Themen oder Foren verschoben werden sollen.',

	'Status_locked' => 'Gesperrt',
	'Status_unlocked' => 'Entsperrt',
	'Forum_settings' => 'Allgemeine Foreneinstellungen',
	'Forum_name' => 'Forumsname',
	'Forum_desc' => 'Beschreibung',
	'Forum_status' => 'Forumsstatus',
	'Forum_pruning' => 'Automatisches Löschen',

	'prune_freq' => 'Überprüfe das Themenalter alle',
	'prune_days' => 'Entferne Themen, in denen nichts mehr geschrieben wurde seit',
	'Set_prune_data' => 'Du hast das automatische Löschen für dieses Forum aktiviert, aber weder ein Intervall noch eine Anzahl an Tagen angegeben.',

	'FORUM_SIMILAR_TOPICS' => 'Ähnliche Themen-Box',
	'FORUM_SIMILAR_TOPICS_EXPLAIN' => 'Wenn diese Option aktiviert ist, wird unter jedem Thema eine Box mit ähnlichen Themen angezeigt.',
	'FORUM_TOPIC_VIEWS' => 'Themen-Betrachter',
	'FORUM_TOPIC_VIEWS_EXPLAIN' => 'Wenn du diese Option aktivierst werden alle Benutzer die ein Thema in diesem Forum anschauen, in der Datenbank gespeichert (Um diese Funktion nutzen zu können, musst du auch die Globale Einstellung, Icy Phoenix Einstellungen => SQL Optimierung, aktivieren)',
	'FORUM_TAGS' => 'Forum Tags',
	'FORUM_TAGS_EXPLAIN' => 'Diese Option aktiviert eine Box, die die am häufigsten genutzten Wörter des gesamten Forums anzeigt (Um diese Funktion nutzen zu können, musst du auch die Globale Einstellung in Icy Phoenix Einstellungen => SEO aktivieren)',
	'FORUM_SORT_BOX' => 'Themen Sortierungs-Box',
	'FORUM_SORT_BOX_EXPLAIN' => 'Wenn diese Option aktiviert ist, siehst du eine Box die dir erlaubt, die Themen alphabetisch zu ordnen (Um diese Funktion nutzen zu können, musst du auch die Globale Einstellung in Icy Phoenix Einstellungen aktivieren)',
	'FORUM_KB_MODE' => 'Wissensdatenbank Modus',
	'FORUM_KB_MODE_EXPLAIN' => 'Wenn diese Option aktiviert ist, wird das Forum im Wissensdatenbank Modus gezeigt. (Themen werden ähnlich der Wissensdatenbank aufgelistet)',
	'FORUM_INDEX_ICONS' => 'Index Icons',
	'FORUM_INDEX_ICONS_EXPLAIN' => 'Wenn diese Option aktiviert ist, werden Icons für RSS und Neues Thema im Foren-Index angezeigt (Um diese Funktion nutzen zu können, musst du auch die Globale Einstellung in Icy Phoenix Einstellungen aktivieren)',

	'Move_and_Delete' => 'Verschieben und Löschen',

	'Delete_all_posts' => 'Alle Beiträge löschen',
	'Nowhere_to_move' => 'Kein Ziel zum Verschieben',

	'Edit_Category' => 'Kategorie bearbeiten',
	'Edit_Category_explain' => 'Hier kannst du den Namen einer Kategorie ändern',

	'Forums_updated' => 'Forum- und Kategorieinformationen wurden geändert',

	'Must_delete_forums' => 'Du musst erst alle Foren löschen, bevor du diese Kategorie löschen kannst',

	'Click_return_forumadmin' => 'Klicke %shier%s, um zur Forumsadministration zurückzukehren.',

// Smiley Management
	'smiley_title' => 'Smilies-Bearbeitung',
	'smile_desc' => 'Hier kannst du die Smilies, die die Benutzer in ihren Beiträgen und Privaten Nachrichten einfügen können, hinzufügen, löschen oder bearbeiten. Falls dein Browser es unterstützt, kannst du die Smilies auch per Drag and Drop verändern.',

	'smiley_config' => 'Smiley-Konfiguration',
	'smiley_code' => 'Smiley Code',
	'smiley_url' => 'Smiley Bilddatei',
	'smiley_emot' => 'Smiley Beschreibung',
	'smile_add' => 'Einen neuen Smiley hinzufügen',
	'Smile' => 'Smiley',
	'Emotion' => 'Beschreibung',

	'Select_pak' => 'Wähle Paketdatei (.pak)',
	'replace_existing' => 'Aktuelle Smilies überschreiben',
	'keep_existing' => 'Aktuelle Smilies behalten',
	'smiley_import_inst' => 'Du solltest das Smiley-Paket entpacken und alle Dateien ins jeweilige Smiley-Verzeichnis hochladen. Wähle dann die korrekten Angaben, um das Paket zu installieren.',
	'smiley_import' => 'Smiley-Paketimport',
	'choose_smile_pak' => 'Wähle ein Smiley-Paket (.pak)',
	'import' => 'Smilies importieren',
	'smile_conflicts' => ' Was tun, wenn Konflikte auftreten?',
	'del_existing_smileys' => 'Aktuelle Smilies vor dem Import löschen',
	'import_smile_pack' => 'Smiley-Paket importieren',
	'export_smile_pack' => 'Smiley-Paket erstellen',
	'export_smiles' => 'Um aus deinen jetzigen Smilies ein Paket zu erstellen, klicke %shier%s, um das Paket herunterzuladen. Achte darauf, die .pak-Erweiterung am Ende beizubehalten. Erstelle dann eine Zip-Datei mit allen benutzten Smilies und der .pak-Datei.',

	'smiley_add_success' => 'Der Smiley wurde hinzugefügt',
	'smiley_edit_success' => 'Der Smiley wurde geändert',
	'smiley_import_success' => 'Das Smiley-Paket wurde installiert',
	'smiley_del_success' => 'Der Smiley wurde gelöscht',
	'Click_return_smileadmin' => 'Klicke %shier%s, um zur Smiley-Verwaltung zurückzukehren.',

// User Management
	'User_admin' => 'Benutzer-Administration',
	'User_admin_explain' => 'Hier kannst du die Daten und Optionen eines Nutzers ändern. Um die Befugnisse eines Benutzers zu ändern, benutze bitte die Benutzer- und Gruppenkontrolle.',

	'Look_up_user' => 'Benutzer auswählen',

	'Admin_user_fail' => 'Benutzerprofil konnte nicht geändert werden',
	'Admin_user_updated' => 'Benutzerprofil geändert',
	'Click_return_useradmin' => 'Klicke %shier%s, um zur Benutzeradministration zurückzukehren.',
//Start Quick Administrator User Options and Information MOD
	'Click_return_userprofile' => 'Klicke %shier%s, um zum Benutzerprofil zurückzugelangen.',
//End Quick Administrator User Options and Information MOD
	'User_delete' => 'Diesen Benutzer löschen',
	'User_delete_explain' => 'Klicke hier, um den Benutzer zu löschen - diese Aktion kann nicht rückgängig gemacht werden.',
	'User_deleted' => 'Benutzer wurde gelöscht',

	'User_status' => 'Benutzer ist aktiv',
	'User_allowpm' => 'Darf Private Nachrichten verschicken',
	'User_allowavatar' => 'Darf einen Avatar benutzen',

	'Admin_avatar_explain' => 'Hier kannst du den Avatar des Benutzers ansehen und löschen',

	'User_special' => 'Spezielle Optionen (nur für Administratoren)',
	'User_special_explain' => 'Diese Optionen können nicht von den Benutzern geändert werden. Du kannst hier den Status und andere Optionen der Benutzer festlegen, die den Benutzern selbst nicht zur Verfügung stehen.',

// Group Management
	'Group_administration' => 'Gruppenadministration',
	'Group_admin_explain' => 'Hier kannst du die Benutzergruppen deines Forums überwachen. Du kannst bestehende Gruppen löschen oder bearbeiten oder neue anlegen. Ebenso kannst du Gruppenleiter wählen, den Gruppenstatus auf offen/geschlossen ändern und den Gruppennamen bzw. die Gruppenbeschreibung ändern',
	'Error_updating_groups' => 'Fehler beim Aktualisieren der Gruppe',
	'Updated_group' => 'Die Gruppe wurde abgeändert',
	'Added_new_group' => 'Die Gruppe wurde hinzugefügt',
	'Deleted_group' => 'Die Gruppe wurde gelöscht',
	'New_group' => 'Neue Gruppe erstellen',
	'Edit_group' => 'Gruppe bearbeiten',
	'group_name' => 'Gruppenname',
	'group_description' => 'Gruppenbeschreibung',
	'group_moderator' => 'Gruppenleiter',
	'group_status' => 'Gruppenstatus',
	'group_open' => 'Offene Gruppe',
	'group_closed' => 'Geschlossene Gruppe',
	'group_hidden' => 'Versteckte Gruppe',
	'group_delete' => 'Gelöschte Gruppe',
	'group_delete_check' => 'Diese Gruppe löschen',
	'submit_group_changes' => 'Änderungen übernehmen',
	'reset_group_changes' => 'Zurücksetzen',
	'No_group_name' => 'Bitte gib einen Gruppennamen an',
	'No_group_moderator' => 'Bitte gib einen Gruppenleiter an',
	'No_group_mode' => 'Du musst einen Status für diese Gruppe angeben (offen/geschlossen)',
	'No_group_action' => 'Es wurde keine Aktion ausgewählt',
	'delete_group_moderator' => 'Alten Gruppenleiter entfernen?',
	'delete_moderator_explain' => 'Wenn du den Gruppenleiter wechseln möchtest, wähle die entsprechende Option, um den alten Leiter zu entfernen. Ansonsten wähle die Option nicht und der Benutzer wird ein reguläres Mitglied der Gruppe.',
	'Click_return_groupsadmin' => 'Klicke %shier%s, um zur Gruppenadministration zurückzukehren.',
	'Select_group' => 'Gruppe wählen',
	'Look_up_group' => 'Gruppe finden',

// Prune Administration
	'Forum_Prune' => 'Automatisches löschen',
	'Forum_Prune_explain' => 'Du kannst angeben, dass alle Themen, in denen seit einer gewissen Zeit nichts gepostet wurde, gelöscht werden. Solltest du keine Zahl angeben, werden alle Themen gelöscht. Laufende Umfragen und Ankündigungen sind davon nicht betroffen. Diese Themen müssen manuell entfernt werden.',
	'Do_Prune' => 'Löschen starten',
	'All_Forums' => 'Alle Foren',
	'Prune_topics_not_posted' => 'Themen löschen in denen es keine Antworten gab seit',
	'Topics_pruned' => 'Gelöschte Themen',
	'Posts_pruned' => 'Gelöschte Beiträge',
	'Prune_success' => 'Das automatische Löschen des Forums wurde aktiviert',

// Word censor
	'Words_title' => 'Wortzensur',
	'Words_explain' => 'Hier kannst du Wörter bestimmen, die in den Beiträgen automatisch zensiert werden. Außerdem kann kein Benutzer einen Namen wählen, in dem diese Wörter vorkommen. Du kannst ein * als Platzhalter im Wort-Feld verwenden. Beispiel: Fisch* entfernt Wörter wie Fischbesteck, Fischfang usw., *Fisch entfernt Backfisch, Stockfisch usw.',
	'Word' => 'Wort',
	'Edit_word_censor' => 'Wortzensur ändern',
	'Replacement' => 'Ersatz',
	'Add_new_word' => 'Neues Wort hinzufügen',
	'Update_word' => 'Zensur aktualisieren',

	'Must_enter_word' => 'Ein Wort und ein entsprechender Ersatz sind nötig',
	'No_word_selected' => 'Kein Wort zum Bearbeiten ausgewählt',

	'Word_updated' => 'Die Wortzensur wurde aktualisiert',
	'Word_added' => 'Die Wortzensur wurde eingerichtet',
	'Word_removed' => 'Die Wortzensur wurde entfernt',

	'Click_return_wordadmin' => 'Klicke %shier%s, um zur Wortzensur-Administration zurückzukehren.',

// Mass Email
	'Mass_email_explain' => 'Hier kannst du entweder allen registrierten Benutzern oder einer bestimmten Gruppe eine Nachricht schicken. Diese Nachricht wird an das Postfach des Administrators geschickt und anonym (BCC) an alle Empfänger. Solltest du einer großen Gruppe eine E-Mail schicken, habe etwas Geduld und brich den Vorgang nicht ab. Es ist völlig normal, dass der Vorgang länger dauert und du erhältst eine Rückmeldung, wenn das Skript beendet ist',
	'Compose' => 'Erstellen',

	'Recipients' => 'Empfänger',
	'All_users' => 'Alle Benutzer',

	'Email_successfull' => 'Die Nachricht wurde gesendet',
	'Click_return_massemail' => 'Klicke %shier%s, um zur Massen E-Mail zurückzukehren.',

// Ranks admin
	'Ranks_title' => 'Rang-Administration',
	'Ranks_explain' => 'Hier kannst du Ränge hinzufügen, bearbeiten, anschauen und löschen. Du kannst ebenfalls eigene Ränge erstellen, die du per Benutzeradministration an spezielle Benutzer vergibst.',

	'Add_new_rank' => 'Neuen Rang anlegen',

	'Rank_title' => 'Rangname',
	'Rank_special' => 'Spezialrang',
	'Rank_minimum' => 'Minimum-Beiträge',
	'Rank_maximum' => 'Maximum-Beiträge',
	'Rank_image' => 'Bild zum Rang (relativ zum Forenpfad)',
	'Rank_image_explain' => 'Du kannst hier ein Bild bestimmen, dass dem jeweiligen Rang zugeordnet ist',

	'Must_select_rank' => 'Wähle einen Rang aus',
	'No_assigned_rank' => 'Kein Spezialrang vergeben',

	'Rank_updated' => 'Die Ranginformationen wurden aktualisiert',
	'Rank_added' => 'Der Rang wurde hinzugefügt',
	'Rank_removed' => 'Der Rang wurde gelöscht',
	'No_update_ranks' => 'Der Rang wurde erfolgreich gelöscht. Allerdings wurden Benutzer, denen dieser Rang zugeordnet war, nicht aktualisiert. Du musst den Rang bei diesen Benutzern manuell aktualisieren',

	'Click_return_rankadmin' => 'Klicke %shier%s, um zur Rang-Administration zurückzukehren.',

// Disallow Username Admin
	'Disallow_control' => 'Verbot von Benutzernamen',
	'Disallow_explain' => 'Hier kannst du Benutzernamen überwachen, die nicht genutzt werden dürfen. Du kannst einen Stern (*) als Platzhalter setzen. Beachte, dass du den jeweiligen Benutzer zuerst löschen musst, wenn du einen bereits vergebenen Benutzernamen wählst.',

	'Delete_disallow' => 'Löschen',
	'Delete_disallow_title' => 'Einen verbotenen Namen entfernen',
	'Delete_disallow_explain' => 'Du kannst einen verbotenen Namen entfernen, indem du den Namen aus der Liste auswählst und Löschen anklickst',

	'Add_disallow' => 'Hinzufügen',
	'Add_disallow_title' => 'Einen verbotenen Namen hinzufügen',
	'Add_disallow_explain' => 'Du kannst ein * benutzen, um jegliche Benutzernamen zu verbieten',

	'No_disallowed' => 'Keine verbotenen Benutzernamen',

	'Disallowed_deleted' => 'Der verbotene Benutzername ist nun wieder gestattet',
	'Disallow_successful' => 'Der verbotene Benutzername wurde hinzugefügt',
	'Disallowed_already' => 'Der angegebene Benutzername kann nicht verboten werden. Er existiert entweder schon oder stimmt mit einem existierenden überein.',

	'Click_return_disallowadmin' => 'Klicke %shier%s, um zum Verbot der Benutzernamen zurückzukehren.',

// Styles Admin
	'Styles_admin' => 'Styles Administration',
	'Styles_explain' => 'Hier kannst du Styles (Templates und Themes) hinzufügen, löschen und überwachen.',
	'Styles_addnew_explain' => 'In der folgenden Liste sind alle für dieses Template verfügbaren Themes aufgeführt. Die in der Liste aufgeführten Objekte wurden der Datenbank noch nicht zugefügt. Um ein Theme zu installieren, klicke einfach auf den Installieren-Link neben einem Eintrag',

	'Select_template' => 'Wähle ein Template',

	'Style' => 'Style',
	'Template' => 'Template',
	'Download' => 'Download',

	'Edit_theme' => 'Theme bearbeiten',
	'Edit_theme_explain' => 'Hier kannst du die Einstellungen für das gewählte Theme ändern',

	'Create_theme' => 'Theme erstellen',
	'Create_theme_explain' => 'Hier kannst du ein neues Theme für das gewählte Template erstellen. Wenn du Farben eingibst (für die du Hexdezimalzahlen nutzen solltest), darfst du das # nicht mit angeben - CCCCCC ist z. B. korrekt, #CCCCCC nicht',

	'Export_themes' => 'Theme exportieren',
	'Export_explain' => 'Hier kannst du die Themedaten für ein bestimmtes Template exportieren. Wähle das Template aus der unteren Liste und das Script wird die Themekonfigurationsdatei erstellen und versuchen, sie in den Templatesordner zu speichern. Falls es die Datei nicht selbst speichern kann, kannst du sie runterladen. Um dem Skript das Schreiben der Datei zu ermöglichen, musst du dem gewählten Templateordner Schreibrechte gewähren. Für weitere Informationen siehe den Icy Phoenix Benutzerguide.',

	'Theme_installed' => 'Das gewählte Theme wurde installiert',
	'Style_removed' => 'Der gewählte Style wurde aus der Datenbank entfernt. Um den Style völlig vom System zu entfernen, musst du es aus deinem Templates-Ordner löschen.',
	'Theme_info_saved' => 'Die Themeinformationen für das gewählte Template wurden gespeichert. Du solltest jetzt die Dateizugriffsrechte der theme_info.cfg (und eventueller Verzeichnisse) auf Nur-Lesen zurück stellen',
	'Theme_updated' => 'Das gewählte Theme wurde aktualisiert. Du solltest die neuen Themeeinstellungen jetzt exportieren.',
	'Theme_created' => 'Theme erstellt. Du solltest das Theme jetzt in die Themekonfiguration exportieren, damit es nicht verloren geht oder du es an anderer Stelle einsetzen kannst.',

	'Confirm_delete_style' => 'Diesen Style wirklich löschen?',

	'Download_theme_cfg' => 'Der Exporter konnte nicht in die Themeinformationsdatei schreiben. Klicke auf den unteren Knopf, um die Datei per Browser runterzuladen. Hast du sie runtergeladen, kannst du die Datei in deinen Ordner mit den Templatedateien kopieren. Schließlich kannst du die Dateien zu einem Paket zusammenschließen.',
	'No_themes' => 'Das gewählte Template hat keine verfügbaren Themes. Um ein neues Theme zu erstellen, klicke auf den Theme-erstellen-Link auf der linken Seite',
	'No_template_dir' => 'Konnte das Template-Verzeichnis nicht öffnen. Es ist eventuell nicht lesbar oder existiert nicht (mehr).',
	'Cannot_remove_style' => 'Du kannst den gewählten Style nicht entfernen, da er zum Forumsstandard gehört. Du kannst jedoch einen anderen Forumsstandard wählen und es erneut versuchen.',
	'Style_exists' => 'Der gewählte Stylename existiert bereits, bitte gehe zurück und wähle einen anderen Namen.',

	'Click_return_styleadmin' => 'Klicke %shier%s, um zur Styles Administration zurückzukehren.',

	'Theme_settings' => 'Theme Einstellungen',
	'Theme_element' => 'Theme Element',
	'Simple_name' => 'Einfacher Name',
	'Save_Settings' => 'Einstellungen übernehmen',

	'Stylesheet' => 'CSS-Stylesheet',
	'Stylesheet_explain' => 'Dateiname des CSS-Stylesheets für dieses Theme.',
	'Background_image' => 'Hintergrundbild',
	'Background_color' => 'Hintergrundfarbe',
	'Theme_name' => 'Themename',
	'Link_color' => 'Linkfarbe',
	'Text_color' => 'Textfarbe',
	'VLink_color' => 'Farbe für gesehener Link',
	'ALink_color' => 'Farbe für aktiver Link',
	'HLink_color' => 'Farbe für gewählter Link',
	'Tr_color1' => 'Farbe für Tabellenreihe 1',
	'Tr_color2' => 'Farbe für Tabellenreihe 2',
	'Tr_color3' => 'Farbe für Tabellenreihe 3',
	'Tr_class1' => 'Tabellenreihe Klasse 1',
	'Tr_class2' => 'Tabellenreihe Klasse 2',
	'Tr_class3' => 'Tabellenreihe Klasse 3',
	'Th_color1' => 'Farbe für Tabellenkopf 1',
	'Th_color2' => 'Farbe für Tabellenkopf 2',
	'Th_color3' => 'Farbe für Tabellenkopf 3',
	'Th_class1' => 'Tabellenkopf Klasse 1',
	'Th_class2' => 'Tabellenkopf Klasse 2',
	'Th_class3' => 'Tabellenkopf Klasse 3',
	'Td_color1' => 'Farbe für Tabellenzelle 1',
	'Td_color2' => 'Farbe für Tabellenzelle 2',
	'Td_color3' => 'Farbe für Tabellenzelle 3',
	'Td_class1' => 'Tabellenzelle Klasse 1',
	'Td_class2' => 'Tabellenzelle Klasse 2',
	'Td_class3' => 'Tabellenzelle Klasse 3',

// Admin Userlist Start
	'Userlist' => 'Benutzerliste',
	'Userlist_description' => 'Zeigt eine komplette Liste der Benutzer und erlaubt das Ausführen verschiedener Aktionen mit den Benutzerkonten',

	'Add_group' => 'Zu einer Gruppe hinzufügen',
	'Add_group_explain' => 'Wähle die Gruppe aus, zu welcher der Benutzer hinzugefügt werden soll',

	'Open_close' => 'Auf-/Zuklappen',
	'Active' => 'Aktiv',
	'Group' => 'Gruppe(n)',
	'Rank' => 'Rang',
	'Last_activity' => 'Letzte Aktivität',
	'Never' => 'Niemals',
	'User_manage' => 'Verwalten',
	'Find_all_posts' => 'Finde alle Beiträge',

	'Select_one' => 'Wähle eine Aktion',
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

	'Confirm_user_ban' => 'Bist du sicher, dass du die ausgewählten Benutzer bannen möchtest?',
	'Confirm_user_deleted' => 'Bist du sicher, dass du die ausgewählten Benutzer löschen möchtest?',

	'User_status_updated' => 'Benutzerstatus wurde erfolgreich aktualisiert.',
	'User_banned_successfully' => 'Benutzer wurde(n) erfolgreich gebannt.',
	'User_deleted_successfully' => 'Benutzer wurde(n) erfolgreich gelöscht.',
	'User_add_group_successfully' => 'Benutzer wurde(n) erfolgreich zur Gruppe hinzugefügt.',

	'Click_return_userlist' => 'Klicke %shier%s, um zur Benutzerliste zurückzukehren.',
//
// Admin Userlist End

// Version Check
	'Version_up_to_date' => 'Dein Forum ist auf dem neuesten Stand. Es sind keine Updates für deine phpBB-Version verfügbar.',
	'Version_up_to_date_ip' => 'Dein Forum ist auf dem neuesten Stand. Es sind keine Updates für deine Icy Phoenix Version verfügbar.',
	'Version_not_up_to_date' => 'Dein Forum ist <b>nicht</b> auf dem neuesten Stand. Es sind Updates für deine phpBB-Version verfügbar, bitte besuche <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a>, um die aktuellste Version zu erhalten.',
	'Version_not_up_to_date_ip' => 'Es sind Updates für deine Icy Phoenix Version verfügbar, bitte besuche <a href="http://www.icyphoenix.de/" target="_new">Icy Phoenix</a>, um die aktuellste Version zu erhalten.',
	'Latest_version_info' => 'Die neueste verfügbare Version ist <b>phpBB %s</b>.',
	'Current_version_info' => 'Du verwendest <b>phpBB %s</b>.',
	'Connect_socket_error' => 'Die Verbindung zum phpBB-Server konnte nicht aufgebaut werden. Es trat folgender Fehler auf:<br />%s',
	'Connect_socket_error_ip' => 'Es konnte keine Verbindung zum Icy Phoenix Server hergestellt werden',
	'Socket_functions_disabled' => 'Die Socket-Funktionen konnten nicht benutzt werden.',
	'Mailing_list_subscribe_reminder' => 'Um immer die neuesten Informationen zu Updates von phpBB zu erhalten, solltest du dich <a href="http://www.phpbb.com/support/" target="_new">beim phpBB Newsletter anmelden</a>.',
	'Version_information' => 'Versions-Information',
	'Version_not_checked' => 'Versionsprüfung ist zurzeit deaktiviert. Bitte besuche die Icy Phoenix Support Foren für Informationen über neue Versionen.',

// Advanced Signature Divider Control
	'sig_title' => 'Signaturteiler Einstellungen',
	'sig_divider' => 'Signaturteiler',
	'sig_explain' => 'Hier kannst du einstellen, mit welchen Zeichen die Signatur von den Beiträgen geteilt wird.',

// BIRTHDAY - BEGIN
	'Birthday_required' => 'Die Eingabe des Geburtstags erforderlich machen',
	'Enable_birthday_greeting' => 'Geburtstagsgrüße aktivieren',
	'Birthday_greeting_explain' => 'Benutzer, die einen Geburtstag angegeben haben, können bei Einloggen in das Forum beglückwünscht werden.',
	'Next_birthday_greeting' => 'Jahr des nächsten Geburtstags-Popups',
	'Next_birthday_greeting_explain' => 'Dieses Feld gibt an, in welchem Jahr der Benutzer die nächste Glückwunschbenachrichtigung bekommt.',
	'Wrong_next_birthday_greeting' => 'Das angegebene Jahr des nächsten Geburtstags-Popups war nicht korrekt. Bitte nochmal eingeben.',
	'Max_user_age' => 'Höchstalter',
	'Min_user_age' => 'Mindestalter',
	'Birthday_lookforward' => 'Geburtstagsvorschau',
	'Birthday_lookforward_explain' => 'Anzahl der Tage, die vorausgesehen werden soll',
// BIRTHDAY - END

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
	'Bluecard_limit_2_explain' => 'Die Moderatoren erhalten die erste Benachrichtigung über einen Beitrag, wenn x Benachrichtigungen eingegangen sind.',
	'Report_forum' => 'Benachrichtigungs-Forum',
	'Report_forum_explain' => 'In diesem Forum können die Beitrags-Benachrichtigungen gelistet werden. Gib hier die ID des Forums an bzw 0 um diese Funktion abzuschalten.',

// Start add - Last visit MOD
	'Hidde_last_logon' => 'Anzeige des letzten Besuchs ausblenden',
	'Hidde_last_logon_explain' => 'Wenn auf JA gesetzt, wird die Anzeige des letzten Besuchs für alle Benutzer bis auf Administratoren ausgeblendet.',
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
	'L_LISTOFADMINEDITEXP' => 'Diese Liste beinhaltet die blockierten Zugriffe auf den ersten Admin Account im Forum. Diese Administratoren haben versucht, das Profil des ersten Admins im Forum zu bearbeiten, oder ihn zu löschen oder zum normalen Nutzer herunterzustufen. Eine Änderung des Profils und/oder der Berechtigungen fand nicht statt und wurde erfolgreich blockiert. Diese Liste kann nur vom ersten Admin des Forums gelöscht werden.',
	'L_LISTOFADMINEDITUSERS' => 'Liste blockierter Zugriffe auf den ersten Admin Account',
	'L_LISTOFADMINTEXT' => 'erfolgreich blockierter Zugriff erfolgte über',
	'L_DELETEMSG' => 'Einträge löschen',
	'L_DELETESUCMSG' => 'Die Einträge wurden erfolgreich gelöscht',
	'L_ADMINEDITMSG' => 'Du hast keine Berechtigung, das Profil und/oder die Berechtigungen des ersten Admin Accounts im Forum zu bearbeiten. <br /><br />Der Zugriffsversuch wurde gespeichert und erfolgreich blockiert!',
	'use_thank' => 'Erlaube Dankesbeiträge',
	'Default_avatar' => 'Standardavatar festlegen',
	'Default_avatar_explain' => 'Dies gibt Benutzern, die noch keinen Avatar ausgewählt haben, einen Standardavatar. Lege Standardavatare für Benutzer und Gäste fest und wähle aus, ob diese nur für Benutzer oder Gäste oder für Beide angezeigt werden sollen.',
	'Default_avatar_guests' => 'Gäste',
	'Default_avatar_users' => 'Benutzer',
	'Default_avatar_both' => 'Beide',
	'Default_avatar_none' => 'Niemand',
	'Default_avatar_guests_url' => 'Pfad zum Standard-Aavatar für Gäste',
	'Default_avatar_users_url' => 'Pfad zum Standard-Aavatar für Benutzer',

// Start Optimize Database
	'Optimize' => 'Optimieren',
	'Optimize_explain' => 'Hier kannst du den Inhalt der Tabellen deiner Datenbank optimieren. Auf diese Weise kannst du Daten eliminieren, die leeren Platz verbraucht.<br />Diese Operation sollte regelmäßig durchgeführt werden, um deine Datenbank schnell und zuverlässig zu halten.',
	'Optimize_DB' => 'Datenbank optimieren',
	'Optimize_Enable_cron' => 'Cron aktivieren',
	'Optimize_Cron_every' => 'Cron alle',
	'Optimize_Cron_every_explain' => 'Bitte beachte, dass auch die Funktion <b>PHP Cron [Globale Einstellung]</b> in <b>Admin-Bereich &raquo; Konfiguration &raquo; Einstellungen &raquo; Cron</b> aktiviert sein muss.',
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
	'Optimize_Next_cron_action' => 'nächste Cron Aktion',
	'Optimize_Performed_Cron' => 'ausgeführte Cron',
	'Optimize_Show_not_optimized' => 'Zeige nur nicht optimierte Tabellen',
	'Optimize_Show_begin_for' => 'Zeige nur Tabellen die beginnen mit',
	'Optimize_Configure' => 'Konfigurieren',
	'Optimize_Table' => 'Tabelle',
	'Optimize_Record' => 'Einträge',
	'Optimize_Type' => 'Typ',
	'Optimize_Size' => 'Größe',
	'Optimize_Status' => 'Status',
	'Optimize_CheckAll' => 'Alle auswählen',
	'Optimize_UncheckAll' => 'Alle abwählen',
	'Optimize_InvertChecked' => 'Auswahl umkehren',
	'Optimize_return' => 'Klicke %shier%s, um zur Datenbankoptimierung zurückzukehren.',
	'Optimize_success' => 'Die Datenbank wurde erfolgreich optimiert.',
	'Optimize_NoTableChecked' => '<b>Keine</b> Tabellen ausgewählt',

// End Optimize Database
// Start add - Global announcement MOD
	'Globalannounce' => 'Globale Ankündigung',
// End add - Global announcement MOD

// google bot detector by pukapuka
	'Detector' => 'Google Bot Detektor',
	'Detector_Explain' => 'Der Google Bot Detektor erkennt Besuche des Google Bots auf deiner Seite.<br /><br />',
	'Detector_ID' => '#',
	'Detector_Time' => 'Zeit',
	'Detector_Url' => 'URL',
	'Detector_Clear' => 'Alles löschen',
	'Detector_No_Bot' => 'Kein Bot gefunden',
	'Detector_Cleared' => 'Erkannte Bots erfolgreich gelöscht.',
	'Click_Return_Detector' => 'Klicke %shier%s, um zum Bot Detektor zurückzukehren.',

// added to Auto group mod
	'group_count' => 'Anzahl erforderlicher Beiträge',
	'group_count_max' => 'Anzahl maximaler Beiträge',
	'group_count_updated' => '%d Mitglieder wurden entfernt, %d Mitglieder wurden zur Gruppe hinzugefügt',
	'Group_count_enable' => 'Füge Benutzer automatisch hinzu, wenn sie schreiben',
	'Group_count_update' => 'Hinzufügen/Aktualisieren neuer Nutzer',
	'Group_count_delete' => 'Löschen/Aktualisieren alter Nutzer',
	'User_allow_ag' => 'Aktiviere Auto Gruppe',
	'group_count_explain' => 'Wenn Benutzer mehr als diese Anzahl Beiträge geschrieben haben <i>(in beliebigen Foren)</i>, werden sie automatisch zu dieser Benutzergruppe hinzugefügt<br /> Das trifft nur zu, wenn "' . $lang['Group_count_enable'] . '" aktiviert ist.',

// Start add - Bin Mod
	'Bin_forum' => 'Papierkorb-Forum',
	'Bin_forum_explain' => 'Füge die Forum ID des Forums ein, in welches die Papierkorbbeiträge verschoben werden sollen. Trage 0 ein, um die Funktion zu deaktivieren. Du solltest die Forumsberechtigungen bearbeiten und Benutzern das Lesen/Schreiben/Antworten nicht gestatten&hellip; oder den Zugang zum Forum ganz verwehren. Nur Moderatoren oder Administratoren sollten derartige Rechte in diesem Forum besitzen.',
// End add - Bin Mod

// Begin Quick Title Edition Mod 1.0.0 by Xavier Olive.
	'Title_infos' => 'Quick Titel Management',
	'Must_select_title' => 'Du musst ein Quick Titel Add-on auswählen',
	'Title_updated' => 'Quick Titel Add-on aktualisiert',
	'Title_added' => 'Quick Titel Add-on hinzugefügt',
	'Click_return_titleadmin' => 'Klicke %shier%s, um zum Quick Titel Management zurückzukehren.',
	'Title_removed' => 'Quick Titel Add-on entfernt',
	'Quick_title_explain' => 'Hier kannst du kurze Texte erstellen, welche du dann per Klick auf einen Button zum Thementitel hinzufügen kannst.</br>Wenn du möchtest, dass der Name des Benutzers, der die Änderung durchgeführt hat angezeigt wird, setzte einfach %mod% an die gewünschte Stelle. Zum Beispiel wird [Link OK | geprüft von %mod%] als [Link OK | geprüft von ModeratorName] angezeigt. Auf die gleiche Art und Weise kannst du auch das Datum einfügen, indem du %date% an die gewünschte Stelle setzt.',
	'Title_head' => 'Quick Titel Add-on',
	'Title_auth' => 'Berechtigungen',
	'Administrator' => 'Administrator',
	'Topic_poster' => 'Themenstarter',
	'Add_new_title_info' => 'Quick Titel Add-on hinzufügen',
	'Title_perm_info' => 'Berechtigungen',
	'Title_perm_info_explain' => 'Benutzer mit diesem Level können das Quick Title Add-on nutzen.',
	'Title_info' => 'Quick Titel Add-on',
// End Quick Title Edition Mod 1.0.0 by Xavier Olive.

// Limit Image Width MOD
	'Available' => 'verfügbar',
	'Unavailable' => 'nicht verfügbar',
	'LIW_title' => 'Bildbreiten-Begrenzung',
	'LIW_admin_explain' => 'Diese Seite erlaubt dir das Ein- und Ausschalten der Bildbreitenbegrenzung, sowie das Einstellen der maximalen Bildbreite für jedes im Forum eingestellte Bild. Sollte die SQL-Tabelle, welche die Abmessungen aller Bilder enthält, zu groß werden, kannst du sie mit einem Klick auf \'Cache-Tabelle leeren\' leeren.<br /><br />Du kannst auch sehen, ob es möglich ist, die Bildbreitenbegrenzung auf deinem Webserver zu nutzen, indem du in der \'Kompatibilitätsprüfung\' Box unten nachschaust.',
	'LIW_compatibility_checks' => 'Kompatibilitätsprüfung',
	'LIW_mod_config' => 'MOD Konfiguration',

	'LIW_config_updated' => 'Die Bildbreitenbegrenzungs-Konfiguration wurde erfolgreich aktualisiert.',
	'LIW_cache_emptied' => 'Die Cache-Tabelle wurde erfolgreich geleert.',
	'LIW_click_return_config' => 'Klicke %shier%s, um zur Bildbreitenbegrenzungs-Konfigurationsseite zurückzukehren.',

	'LIW_getimagesize' => 'getimagesize() URL Unterstützung',
	'LIW_getimagesize_explain' => 'Verfügbar ab PHP 4.0.5',
	'LIW_getimagesize_available' => 'Der MOD ist in der Lage, die Bildabmessungen zu erkennen.',
	'LIW_getimagesize_unavailable' => 'Der MOD ist nicht in der Lage zu erkennen, ob ein Bild zu groß ist, deshalb wird <i>jedes</i> Bild angepasst.',

	'LIW_urlaware' => 'URL-aware fopen wrappers',
	'LIW_urlaware_explain' => 'Setze allow_url_fopen auf Yes in deiner php.ini',
	'LIW_urlaware_available' => 'Der MOD ist in der Lage, einen Fingerabdruck für Bilder zu erstellen und kann die Bildabmessungen im Cache speichern.',
	'LIW_urlaware_unavailable' => 'Der MOD ist nicht in der Lage, einen Fingerabdruck für Bilder zu erstellen und kann die Bildabmessungen nicht im Cache speichern.',

	'LIW_openssl' => 'openSSL Erweiterung geladen',
	'LIW_openssl_explain' => 'Lade die openssl.dll Erweiterung in deiner php.ini',
	'LIW_openssl_available' => 'Der MOD ist in der Lage Bildabmessungen von https:// Adressen zu lesen und diese im Cache zu speichern.',
	'LIW_openssl_unavailable' => 'Der MOD ist nicht in der Lage Bildabmessungen von https:// Adressen zu lesen und kann diese nicht im Cache zu speichern.',

	'LIW_enable' => 'Größe von Bildern in Beiträgen ändern',
	'LIW_enable_explain' => 'Wähle %s um dem Mod die Änderung der Bildgröße in Beiträgen zu erlauben.', // Set to	 'Yes'] to ....
	'LIW_sig_enable' => 'Größe von Bildern in Signaturen ändern',
	'LIW_sig_enable_explain' => 'Wähle %s um dem Mod die Änderung der Bildgröße in Signaturen zu erlauben.',
	'LIW_attach_enable' => 'Größe von angehängten Bildern ändern',
	'LIW_attach_enable_explain' => 'Wähle %s um dem Mod die Änderung der Bildgröße von angehängten Bildern (mittels Attachment Mod) in Beiträgen zu erlauben.',
	'LIW_max_width' => 'Maximale Bildbreite',
	'LIW_max_width_explain' => 'Gib die maximale Bildbreite (in Pixeln) eines im Beitrag mittels [img] Tags eingestellten Bildes an.',
	'LIW_empty_cache' => 'Bildabmessungs-Cache leeren',
	'LIW_empty_cache_explain' => 'Die Cache Tabelle enthält zurzeit <b>%s</b> Einträge', // Your cache table currently contains <b>312</b> records
	'LIW_empty_cache_note' => 'Beachte, dass das Löschen der Cache-Tabelle dazu führt, dass der MOD alle Bildabmessungen erneut einliest, was zu einer vorübergehenden Verlangsamung beim laden der Themen führen kann.',
	'LIW_empty_cache_button' => 'Cache-Tabelle leeren',

// News
	'xs_news_settings' => 'News Einstellungen',
	'xs_news_show' => 'News Banner anzeigen?',
	'xs_news_show_ticker' => 'News Ticker anzeigen?',
	'xs_news_show_ticker_explain' => 'Das ist der Hauptschalter. Wenn du hier \'Nein\' einstellst, werden keine Ticker mehr angezeigt. Hast du \'Ja\' eingestellt, kannst du die Anzeige der einzelnen Ticker individuell konfigurieren.',
	'xs_news_show_ticker_subtitle' => 'Ticker Untertitel anzeigen?',
	'xs_news_show_ticker_subtitle_explain' => 'Wähle Ja, um \'News Tickers\' über den News Tickern anzuzeigen.',
	'xs_news_show_news_subtitle' => 'News Untertitel anzeigen?',
	'xs_news_show_news_subtitle_explain' => 'Wähle Ja, um \'News Items\' über den News Items anzuzeigen.',
	'xs_news_dateformat' => 'Datumformat',
	'xs_news_dateformat_helper' => 'Verwendet dieses Format: %s',

// Bantron Mod : Begin
	'Bantron' => 'Bantron',
	'BM_Title' => 'Bantron',
	'BM_Explain' => 'Auf dieser Seite kannst du die Sperren im Forum anzeigen, bearbeiten, hinzufügen und löschen.',

	'BM_Show_bans_by' => 'Zeige gesperrte bei',
	'BM_All' => 'Alle',
	'BM_Show' => 'Anzeigen',

	'BM_IP' => 'IP',
	'BM_Last_visit' => 'Letzter Besuch',
	'BM_Banned' => 'Gesperrt',
	'BM_Expires' => 'Abgelaufen',
	'BM_By' => 'bei',
	'BM_Reasons' => 'Grund',

	'BM_Add_a_new_ban' => 'Neue Sperre hinzufügen',
	'BM_Delete_selected_bans' => 'Lösche ausgewählte Sperren',

	'BM_Private_reason' => 'Privater Grund',
	'BM_Private_reason_explain' => 'Der hier eingegebene Grund für die Sperrung von Benutzernamen, E-Mails, und/oder IP Adressen ist nur als Notiz für die Administration gedacht.',

	'BM_Public_reason' => 'Öffentlicher Grund',
	'BM_Public_reason_explain' => 'Der hier eingegebene Grund für die Sperrung von Benutzernamen, E-Mails, ond/oder IP Adressen wird den gesperrten Benutzern angezeigt, wenn sie versuchen, auf das Forum zuzugreifen.',
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

	'BM_Ban_reasons' => 'Sperrungsgründe',
// Bantron Mod : End

	'board_disable_message' => 'Schalte die Nachricht für die Deaktivierung des Forums standardmäßig aus.',
	'board_disable_message_texte' => 'Meldung die angezeigt wird, wenn das Forum deaktiviert ist.',

// Start Edit Notes MOD
	'Edit_notes_settings' => 'Bearbeitungsnotizen-Einstellungen',
	'Edit_notes_enable' => 'Bearbeitungsnotizen aktivieren',
	'Edit_notes_enable_explain' => 'Aktiviert oder deaktiviert Bearbeitungsnotizen im Forum',
	'Max_edit_notes' => 'Maximale Anzahl Bearbeitungsnotizen',
	'Max_edit_notes_explain' => 'Gibt die maximale Anzahl von Bearbeitungsnotizen pro Beitrag an.',
	'Edit_notes_permissions' => 'Bearbeitungsnotizen-Berechtigungen',
	'Edit_notes_permissions_explain' => 'Gibt an, welche Benutzer Bearbeitungsnotizen verwenden können.',
	'Edit_notes_admin' => 'Nur Administratoren',
	'Edit_notes_staff' => 'Team (Admins und Mods)',
	'Edit_notes_reg' => 'Registrierte Benutzer (auch Admins und Mods)',
	'Edit_notes_all' => 'Alle Benutzer (Gäste, registrierte Benutzer, Admins und Mods)',
// End Edit Notes MOD

// BEGIN Disable Registration MOD
	'registration_status' => 'Registrierungen deaktivieren',
	'registration_status_explain' => 'Dieser Mod deaktiviert alle Neuregistrierungen in deinem Forum.',
	'registration_closed' => 'Grund für Registrierungsdeaktivierung',
	'registration_closed_explain' => 'Dieser Texte erklärt, warum Registrierungen deaktiviert sind. Er wird angezeigt, wenn ein neuer Nutzer versucht, sich zu registrieren. Lasse dieses Feld leer, um einen Standard-Text anzuzeigen',
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
	'Smilie_single_row' => 'Smiley-Anzeige pro Zeile',
	'Smilie_single_row_explain' => 'z.B.: Schnellantwort Smiley Nummer',

	'Auth_Rating' => 'Bewertungen',

// Gravatars
	'Enable_gravatars' => 'Gravatare aktivieren',
	'Gravatar_rating' => 'Maximale Gravatar Bewertung',
	'Gravatar_rating_explain' => 'Lies die <a href="http://www.gravatar.com/rating.php" target="_blank">Bewertungsrichtlinien</a> für mehr Informationen. Wähle \'keine\' für keine Beschränkung.',
	'Gravatar_default_image' => 'Gravatar Standardbild',
	'Gravatar_default_image_explain' => 'Wenn kein Gravatar gefunden wurde wird dieses Bild angezeigt. Der Pfad zum Bild ist relativ zum Icy Phoenix Root-Verzeichnis. Lasse dieses Feld leer, um kein Bild anzuzeigen.',

// Admin Account Actions
	'Account_actions' => 'Benutzer-Konto Aktionen',
	'Account_inactive_explain' => 'Hier kannst du alle Benutzer sehen, die nicht aktiviert sind und auf ihre Aktivierung warten. Du kannst diese Benutzerkonten aktivieren oder löschen.<br />Weiterhin kannst du Befugnisse einstellen und Profile bearbeiten wenn du auf die verschiedenen Links klickst.',
	'Account_active_explain' => 'Hier kannst du alle Benutzer sehen, die aktive Mitglieder sind. Du kannst diese Benutzerkonten aktivieren oder löschen.<br />Weiterhin kannst du Befugnisse einstellen und Profile bearbeiten wenn du auf die verschiedenen Links klickst.',
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
	'Account_delete_users' => 'Bist du sicher dass du diese Benutzer löschen willst?',
	'Account_delete_user' => 'Bist du sicher dass du diesen Benutzer löschen willst?',
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
	'Account_user_deleted' => 'Der Benutzer wurde gelöscht.',
	'Account_users_deleted' => 'Die Benutzer wurden gelöscht.',
	'Account_activated' => 'Benutzer-Konto Aktivierung',
	'Account_activated_text' => 'Dein Benutzer-Konto wurde aktiviert',
	'Account_deactivated' => 'Benutzer-Konto Deaktivierung',
	'Account_deactivated_text' => 'Dein Benutzer-Konto wurde deaktiviert',
	'Account_deleted' => 'Benutzer-Konto Löschung',
	'Account_deleted_text' => 'Dein Benutzer-Konto wurde gelöscht',
	'Account_notification' => 'Benachrichtigungsmail gesendet.',

// Acronyms
	'Acronyms_title' => 'Abkürzungs-Verwaltung',
	'Acronyms_explain' => 'Hier kannst du Abkürzungen hinzufügen, bearbeiten und löschen. Die hier eingetragenen Abkürzungen werden dann automatisch in den Beiträgen hervorgehoben und deren Bedeutung wird mittels Hover-Funktion angezeigt.',
	'Acronym' => 'Abkürzung',
	'Acronyms' => 'Abkürzungen',
	'Edit_acronym' => 'Abkürzung bearbeiten',
	'Description' => 'Bedeutung',
	'Add_new_acronym' => 'Neue Abkürzung hinzufügen',
	'Update_acronym' => 'Abkürzung aktualisieren',

	'Must_enter_acronym' => 'Du musst eine Abkürzung und deren Bedeutung eingeben.',
	'No_acronym_selected' => 'Keine Abkürzung zum bearbeiten ausgewählt',

	'Acronym_updated' => 'Die ausgewählte Abkürzung wurde erfolgreich aktualisiert',
	'Acronym_added' => 'Die Abkürzung wurde erfolgreich hinzugefügt',
	'Acronym_removed' => 'Die ausgewählte Abkürzung wurde entfernt',

	'Click_return_acronymadmin' => 'Klicke %shier%s, um zur Abkürzungs-Verwaltung zurückzukehren.',
	'Prune_shouts' => 'Shouts automatisch löschen',
	'Prune_shouts_explain' => 'Anzahl Tage, bevor Shouts gelöscht werden. Gib 0 ein, um diese Funktion zu deaktivieren.',

	'MOD_OS_ForumRules' => 'Olympus-Style Forum Regeln',
	'Forum_rules' => 'Forenregeln',
	'Rules_display_title' => 'Zeige Titel in der Forenregeln-BOX an?',
	'Rules_custom_title' => 'Eigener Titel',
	'Rules_appear_in' => 'Diese Regeln werden angezeigt beim&hellip;',
	'Rules_in_viewforum' => 'anzeigen des Forums',
	'Rules_in_viewtopic' => 'anzeigen von Themen im Forum',
	'Rules_in_posting' => 'schreiben/antworten in diesem Forum',

	'Php_Info_Explain' => 'Diese Seite zeigt Information über die auf diesem Server installierte PHP Version. Sie beinhaltet Details über Module, verfügbare Variablen und Standard-Einstellungen. Diese Informationen könnten beim Diagnostizieren von Problemen hilfreich sein. Beachte, dass einige Webhoster aus Sicherheitsgründen die hier angezeigten Informationen minimieren und dir somit gegebenenfalls nicht alles angezeigt werden. Wir empfehlen dir, keine Informationen der Seite an andere rauszugeben, außen vielleicht an Tema Mitglieder des Supportforums.',

	'IcyPhoenix_Main' => 'Icy Phoenix Homepage',
	'IcyPhoenix_Download' => 'Icy Phoenix Download',
	'IcyPhoenix_Code_Changes' => 'Code Changes Mod',
	'IcyPhoenix_Updates' => 'Icy Phoenix Updates',
	'PhpBB_Upgrade' => 'phpBB Upgrade',
	'Header_Welcome' => 'Willkommen im Icy Phoenix Administrationszentrum',

	'Prune_users' => 'Benutzer löschen',
	'Prune_Overview' => 'Pruning Übersicht',
	'Prune_title_explain' => 'Hier kannst du die Einstellungen zum automatischen Löschen (Pruning) für jedes Forum bearbeiten.',
	'Prune_forum' => 'Forum',
	'Prune_active' => 'Automatisches Löschen aktivieren',
	'Prune_freq' => 'Alle entfernen',
	'Prune_check' => 'Alle auswählen',
	'Prune_days' => 'Tage',
	'Prune_days_explain' => '* Entferne Themen ohne Antworten.',
	'Click_return_admin_po' => 'Klicke %shier%s, um zur Pruning Übersicht zurückzukehren.',
	'Prune_update' => 'Die Einstellungen zum automatischen Löschen wurden erfolgreich aktualisiert.',

	'Admin_notepad_title' => 'Notizblock',
	'Admin_notepad_explain' => 'Auf diesem Notizblock können sich Administratoren Nachrichten hinterlassen.',
	'Allow_generator' => 'Avatar-Generator aktivieren',
	'Avatar_generator_template_path' => 'Avatar Generator Template Pfad',
	'Avatar_generator_template_path_explain' => 'Pfad unterhalb des Icy Phoenix Root-Verzeichnisses für Template Bilder, z.B. images/avatars/generator_templates',

// Start Autolinks Mod
	'Autolink_first' => 'Verlinke jedes Schlüsselwort automatisch einmal pro Beitrag',

	'Autolinks_title' => 'Autolinks',
	'Autolinks_explain' => 'Hier kannst du Schlüsselworte, welche in Beiträgen automatisch in Links umgewandelt werden, hinzufügen, bearbeiten oder löschen. Wenn es sich bei der eingegebenen URL um eine interne Adresse handelt, welche auf ein Forum oder Portal zeigt und du unten &quot;Intern: Ja&quot; auswählst, wird die Session ID mit angehängt.<br /><br /><b>Beispiel:</b> Wenn das <b>Schlüsselwort</b> in einem Beitrag gefunden wird, wird es automatisch mit dem folgenden ersetzt<br /><br />&lt;a href=&quot;<b>URL</b>&quot; title=&quot;<b>Kommentar</b>&quot; style=&quot;<b>Style</b>&quot;&gt;<b>Schlüsselwort</b>&lt;/a&gt;',
	'links_keyword' => 'Schlüsselwort',
	'links_title' => 'Text',
	'links_url' => 'URL',
	'links_comment' => 'Kommentar',
	'links_style' => 'Style',
	'links_forum' => 'Forum für Autolink',
	'links_forum2' => 'Forum',
	'links_internal' => 'Intern',
	'Autolinks_add' => 'Autolink hinzufügen',
	'Add_keyword' => 'Autolink hinzufügen',
	'Autolinks_edit' => 'Autolink bearbeiten',
	'Edit_keyword' => 'Autolink bearbeiten',
// 'Delete_link' => 'Markiere die Box, um den Autolink zu löschen.',

	'Select_all_forums' => 'Alle Foren',
	'Autolink_added' => 'Autolink erfolgreich hinzugefügt',
	'Autolink_updated' => 'Autolink erfolgreich aktualisiert',
	'Autolink_removed' => 'Autolink erfolgreich gelöscht',
	'No_autolink_selected' => 'Es wurde kein Autolink zum Löschen ausgewählt.',
	'No_autolinks' => 'Es gibt keine Autolinks in der Datenbank.',
	'Must_enter_autolink' => 'Du musst ein Schlüsselwort, Link-Text und eine URL eingeben.',
	'Click_return_autolinkadmin' => 'Klicke %shier%s, um zur Autolink Administration zurückzukehren.',
// End Autolinks Mod

// XS BUILD 030

// Login attempts configuration
	'Max_login_attempts' => 'Erlaubte Login-Versuche',
	'Max_login_attempts_explain' => 'Anzahl der erlaubten Login-Versuche, bevor ein Benutzerkonto für eine festgelegte Zeit gesperrt wird.',
	'Login_reset_time' => 'Login-Sperrzeit',
	'Login_reset_time_explain' => 'Minuten, die ein Benutzer nach einer Überschreitung der erlaubten Login-Versuche warten muss, bis er sich wieder anmelden kann.',

// XS BUILD 035
// Smilies Order
	'position_new_smilies' => 'Sollen neue Smilies vor oder nach existierenden eingefügt werden?',
	'smiley_change_position' => 'Einfügeposition ändern',
	'before' => 'Davor',
	'after' => 'Danach',
	'Move_top' => 'Ganz nach oben',
	'Move_end' => 'Ganz nach unten',

// XS BUILD 037
// Pages Auth
	'auth_view_title' => 'Seitenansicht-Berechtigungen',
	'auth_view_portal' => 'Startseite',
	'auth_view_forum' => 'Forum-Übersicht',
	'auth_view_viewforum' => 'Foren ansehen',
	'auth_view_viewtopic' => 'Themen ansehen',
	'auth_view_faq' => 'FAQ',
	'auth_view_memberlist' => 'Mitgliederliste',
	'auth_view_groupcp' => 'Benutzergruppen',
	'auth_view_profile' => 'Benutzerprofile',
	'auth_view_search' => 'Suche',
	'auth_view_album' => 'Foto-Galerie',
	'auth_view_links' => 'Links',
	'auth_view_calendar' => 'Kalender',
	'auth_view_attachments' => 'Dateianhänge',
	'auth_view_download' => 'Downloads',
	'auth_view_pic_upload' => 'Bilder Hochladen (Post Icy Images)',
	'auth_view_kb' => 'Wissensdatenbank',
	'auth_view_ranks' => 'Ränge',
	'auth_view_statistics' => 'Statistiken',
	'auth_view_recent' => 'Neueste Themen',
	'auth_view_referers' => 'Referers',
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
	'Yahoo_search_settings_explain' => 'Hier kannst du die Einstellungen für den Yahoo Submit Your Site MOD vornehmen. Für mehr Informationen, schau bitte auf die <a href="http://submit.search.yahoo.com/free/request" target="_blank">Yahoo Submit Your Site Webseite</a>.',
	'Yahoo_search_select_forums' => 'Foren auswählen',
	'Yahoo_search_select_forums_explain' => 'Wähle die Foren aus die in diese Liste eingeschlossen werden sollen. Du kannst soviele Foren auswählen wie Du willst, wenn du die STRG Taste (Windows) oder Command Taste (Macintosh) gedrückt hältst. Standardmäßig sind alle öffentlich sichtbaren Foren ausgewählt.',
	'Yahoo_search_savepath' => 'Speicherort der URL Liste',
	'Yahoo_search_savepath_explain' => 'Gib einen Ort an, wo die URL Liste gespeichert werden soll. Gib den Pfad relativ zum Icy Phoenix Root-Verzeichnis an. -- z.B. wenn du die Datei im Cache Ordner unter <b>www.yoursite.com/cache/</b> speicherst, dann gib <b>cache</b> ein. Beachte das du den CHMOD 777 bei diesem Ordner einstellen musst.',
	'Yahoo_search_additional_urls' => 'Zusätzliche URLs angeben',
	'Yahoo_search_additional_urls_explain' => 'Gib zusätzliche URLs an die Yahoo besuchen soll, pro Zeile eine. Du musst die vollständige URL angeben -- z.B. <b>http://www.yoursite.com/yourpage.HTML</b>.',
	'Yahoo_search_compress_file' => 'Die URL Liste komprimieren',
	'Yahoo_search_compress_file_explain' => 'Wenn du Ja für diese Option gewählt hast, wird die Liste der URLs mit Gzip komprimiert was eine viel kleinere Datei und demzufolge eine kleinere Bandbreite vom Yahoo Bot ergibt. Diese Einstellung funktioniert nicht wenn dein Server kein Gzip unterstützt.',
	'Yahoo_search_compression_level' => 'Kompressions-Level für die Datei',
	'Yahoo_search_compression_level_explain' => 'Wähle ein Kompressions-Level für die Datei. 9 ist die empfohlene Einstellung, es sei denn Du hast Probleme damit, dann solltest du einen kleineren Wert einstellen.',
	'Yahoo_search_generate_file' => 'Datei erstellen',
	'Yahoo_search_error_no_forums' => 'Fehler: keine Foren ausgewählt. Gehe zurück und wähle mindestens eins aus.',
	'Yahoo_search_error_no_gzip' => 'Fehler: Entweder Du verwendest eine alte PHP Version, oder dein Webhost stützt kein Gzip . Bitte gehe zurück und wähle <b>Nein</b> für die <b>Die URL Liste komprimiert</b> Option.',
	'Yahoo_search_error_unopenable_file' => 'Fehler: kann die Datei %s nicht öffnen.',
	'Yahoo_search_error_unwritable_file' => 'Fehler: kann die Datei %s nicht überschreiben.',
	'Yahoo_search_error_unclosable_file' => 'Fehler: kann die Datei %s nicht schliessen.',
	'Yahoo_search_error_update_sql' => 'Fehler: kann das Feld: %s nicht aktualisieren.',
	'Yahoo_search_error_unknown_file_error' => 'Fehler: die Datei wurde wegen einem unbekannten Fehler nicht gespeichert.',
	'Yahoo_search_file_done' => 'Die Verarbeitung der URL Listen Datei wurde beendet. Bitte kopiere die folgende URL und füge sie in das passende Feld in Yahoo ein:<br /><b>%s</b>',
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
	'Search_Flood_Interval' => 'Flood-Intervall für Suche',
	'Search_Flood_Interval_explain' => 'Anzahl der Sekunden, die ein Benutzer zwischen Suchanfragen warten muss',
	'Confirm_delete_smiley' => 'Bist du sicher, dass dieses Smiley gelöscht werden soll?',
	'Confirm_delete_word' => 'Bist du sicher, dass diese Wortzensur gelöscht werden soll?',
	'Confirm_delete_rank' => 'Bist du sicher, dass dieser Rang gelöscht werden soll?',

// Custom Profile Fields MOD
	'custom_field_notice_admin' => 'Diese Erklärungen sind von Dir oder einem anderen Administrator erstellt worden. Für mehr Informationen, prüfe die Erklärungen unter den Profilfeldern. Felder die mit * gekennzeichnet sind, sind Pflichtfelder. Felder die mit &dagger; gekennzeichnet sind, sind nur für Admins sichtbar.',

	'field_deleted' => 'Das angegebene Feld ist gelöscht worden',
	'double_check_delete' => 'Bist du sicher das Profil Feld "%s" komplett aus der Datenbank zu entfernen?',

	'here' => 'Hier',
	'new_field_link' => '<a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">%s</a>',
	'edit_field_link' => '<a href="' . append_sid($filename . '?mode=edit&amp;pfid=x') . '">%s</a>',
	'index_link' => '<a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">%s</a>',
	'field_exists' => 'Dieses Feld existiert bereits.<br /><br />Du kannst versuchen ein <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">neues</a> Profil Feld zu erstellen,<br /><br />oder versuchen ein vorhandenes zu <a href="' . append_sid($filename . '?mode=edit&amp;pfid=x') . '">bearbeiten</a>.',
	'click_here_here' => 'Klicke <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">hier</a> um anderes Profil-Feld hinzuzufügen,<br /><br />oder klicke <a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">hier</a> um zum Admin Index zurückzukehren.',
	'field_success' => 'Feld erfolgreich hinzugefügt!<br /><br />Klicke <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">hier</a> um anderes Profil-Feld hinzuzufügen,<br /><br />oder klicke <a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">hier</a> um zum Admin Index zurückzukehren.',
	'Custom_Profile' => 'Custom Profil Felder',
	'profile_field_created' => 'Profil Feld erstellt',
	'profile_field_updated' => 'Profil Feld aktualisiert',

	'add_field_title' => 'Füge spezifische Profil Felder hinzu',
	'edit_field_title' => 'Bearbeite spezifische Profil Felder',
	'add_field_explain' => 'Hier kannst du neue Felder für deine Benutzer anlegen die in deren Profilen angezeigt werden.',
	'edit_field_explain' => 'Hier kannst du Felder bearbeiten die du bereits für deine Benutzer angelegt hast.',

	'add_field_general' => 'Allgemeine Einstellungen',
	'add_field_admin' => 'Administrator Einstellungen',
	'add_field_view' => 'Zeige Einstellungen',
	'add_field_text_field' => 'Text Feld Einstellungen',
	'add_field_text_area' => 'Text Area Einstellungen',
	'add_field_radio_button' => 'Radio Button Einstellungen',
	'add_field_checkbox' => 'Checkbox Einstellungen',

	'default_value' => 'Standard Wert',
	'default_value_explain' => 'Das ist der Standard für dieses Feld. Wenn ein Benutzer diesen Wert nicht ändert, ist das der verwendete Wert. Wenn dies ein erforderliches Feld ist, ist dies der Wert welchen alle vorhandenen Benutzer gesetzt bekommen.',
	'default_value_radio_explain' => 'Trage einen Namen genauso wie im oben angegebenen Verfügbare Einträge Feld ein.',
	'default_value_checkbox_explain' => 'Gib den Eintrag an der standardmäßig aktiviert ist. Dieser Eintrag muss mit einem oben angegebenen Eintrag übereinstimmen.',
	'max_length' => 'Maximale Länge',
	'max_length_explain' => 'Das ist die maximale Länge für dieses Feld. ',
	'max_length_value' => 'Das muss eine Nummer zwischen %d und %d sein.',
	'available_values' => 'Verfügbare Einträge',
	'available_values_explain' => 'Setze jeden Eintrag auf eine neue Zeile',

	'add_field_view_disclaimer' => 'Alle diese Einstellungen werden als "Nein" behandelt, wenn Benutzern nicht erlaubt ist, dieses Feld anzusehen',

	'add_field_name' => 'Feld Name',
	'add_field_name_explain' => 'Trage den Namen ein, den Du mit diesem Feld verbinden möchtest.',
	'add_field_description' => 'Feld Beschreibung',
	'add_field_description_explain' => 'Trage eine Beschreibung ein, die du mit diesem Feld verbinden möchtest. Er wird in kleinem Text unterhalb des Feldnamens, wie dieser Text ist, angezeigt.',
	'add_field_type' => 'Feld Typ',
	'add_field_type_explain' => 'Wähle den Typ des Profil Feldes das du hinzufügen möchtest. Beispiele jedes Feldtyps werden ganz rechts angezeigt.',
	'edit_field_type_explain' => 'Wähle den Typ des Profil Feldes das du ändern möchtest. Beispiele jedes Feldtyps werden ganz rechts angezeigt.',
	'add_field_required' => 'Setze als erforderlich',
	'add_field_required_explain' => 'Wenn das Feld als "Erforderlich" gesetzt ist, jeder Benutzer der sich später registriert <strong>muss</strong> es ausfüllen, und alle vorhandenen Benutzer müssen es mit einem Standard Wert ausfüllen.',
	'add_field_user_can_view' => 'Erlaube Benutzern die Ansicht',
	'add_field_user_can_view_explain' => 'Wenn dies auf "Ja" gesetzt ist, ist der Benutzer berechtigt dieses Feld zu sehen und zu bearbeiten. Wenn es auf "Nein" gesetzt ist, können nur Administratoren diese Feld sehen und bearbeiten. Außerdem, wenn dieses Feld auf "ja" gesetzt ist, kann es kein erforderliches Feld sein.',
	'view_in_profile' => 'Anzeige im Benutzer Profil',
	'profile_locations_explain' => 'Diese Optionen gelten nur, falls dieses Feld im Benutzer Profil angezeigt wird.',
	'contacts_column' => 'Kontakt Spalte',
	'about_column' => 'Information Spalte',
	'view_in_memberlist' => 'Anzeige in der Mitgliederliste',
	'view_in_topic' => 'Anzeige im Beitrag',
	'topic_locations_explain' => 'Diese Optionen gelten nur, falls dieses Feld in einem Beitrag angezeigt wird.',
	'author_column' => 'Autor Sektion',
	'above' => 'Über ',
	'below' => 'Unter ',

	'textarea' => 'Textarea',
	'textarea_example' => "Das ist ein Beispiel\n   von einer Textarea.",
	'text_field' => 'Text Feld',
	'text_field_example' => 'Das ist ein Beispiel für ein Text Feld',
	'radio' => 'Radio Button',
	'radio_example' => 'Das ist ein Beispiel für zwei Radio Buttons',
	'checkbox' => 'Checkbox',
	'checkbox_example' => 'Das ist ein Beispiel für zwei Checkboxen',

	'profile_field_list' => 'Deine Custom Profil Felder',
	'profile_field_list_explain' => 'Dies sind alle Custom Profil Felder die du für dein Forum erstellt hast, mit Links um diese zu bearbeiten oder zu löschen.',
	'profile_field_id' => 'ID #',
	'profile_field_name' => 'Feld Name',
	'profile_field_action' => 'Aktion',
	'no_profile_fields_exist' => 'keine Custom Profil Felder vorhanden.',

	'enter_a_name' => 'Du <strong>musst</strong> einen Feldnamen angeben<br /><br />Gehe zurück und versuche es erneut.',
// END Custom Profile Fields MOD

	'Add' => 'Hinzufügen',
	'split_global_announce' => 'Trenne Globale Ankündigungen',
	'split_announce' => 'Trenne Ankündigungen',
	'split_sticky' => 'Trenne Wichtige',
	'split_topic_split' => 'Trenne Themen',
	'Announce_settings' => 'Ankündigungs Einstellungen',
	'Split_settings' => 'Trennungs Einstellungen',
	'Server_Cookies' => 'Server Einstellungen',
	'ENABLE_CHECK_DNSBL' => 'Aktiviere öffentliche Blacklist IP-Überprüfung beim Registrieren',
	'ENABLE_CHECK_DNSBL_EXPLAIN' => 'Wenn du die IP-Überprüfung beim Registrieren aktivierst, werden die IP-Adressen der Benutzer in öffentlichen Blacklists überprüft. Beachte bitte, dass es durch diese Kontrolle manchmal zu unbeabsichtigten Blockierungen von normalen Benutzern kommen kann, deren IP aus Versehen in die öffentliche Blacklist aufgenomen wurde.',
	'ENABLE_CHECK_DNSBL_POSTING' => 'Aktiviere öffentliche Blacklist IP-Überprüfung beim Beitragschreiben',
	'ENABLE_CHECK_DNSBL_POSTING_EXPLAIN' => 'Wenn du die IP-Überprüfung für das Schreiben von Beiträgen aktivierst, werden die IP-Adressen dieser Benutzer in öffentlichen Blacklists überprüft.',
	'Config_explain2' => 'Hier kannst du die Ansicht und Einstellungen für den Kalender und die Subforen ändern.',
	'Forum_postcount' => 'Beiträge zählen',
	'Use_Captcha' => 'CAPTCHA aktivieren',
	'Use_Captcha_Explain' => 'Wenn CAPTCHA aktiviert ist, wird ein erweiterter Bestätigungs-Code generiert, welcher für Bots schwer auszulesen ist (erfordert GD). Wenn deaktiviert wird der Standard Bestätigungs-Code angezeigt.',
	'Sync_Pics_Count' => 'Wenn du auf <b>JA</b> klickst, werden die Zähler der persönlichen Foto-Galerien aller Nutzer synchronisiert.',
	'Pics_Count_Synchronized' => 'Folgende Bildzähler wurden korrekt synchronisiert:',
	'Pics_Count_Not_Synchronized' => 'Folgende Bildzähler wurden nicht korrekt synchronisiert:',

// IP - BUILD 001
// Ajax Shoutbox - BEGIN
	'Shoutbox_config' => 'AJAX Shoutbox Konfiguration',
	'Shout_read_only' => 'Nur Lesen',
	'Displayed_shouts' => 'Anzuzeigende Shouts',
	'Displayed_shouts_explain' => 'Anzahl der anzuzeigenden Shouts beim Laden der Shoutbox.<br /><i>0 um alle Shouts zu laden.</i>',
	'Stored_shouts' => 'Gespeicherte Shouts',
	'Stored_shouts_explain' => 'Anzahl der Shouts die in der Datenbank bleiben sollen.<br />Dieser Eintrag sollte gleich oder größer als die anzuzeigenden Shouts sein.<br /><i>0 speichert alle Shouts.</i>',
	'Shout_guest_allowed' => 'Gäste erlaubt',
	'Shoutbox_flood' => 'Flood Abstand',
	'Shoutbox_flood_explain' => 'Anzahl der Sekunden die ein Benutzer zwischen den Shouts warten muss.',
// Ajax Shoutbox - END

/* lang_postcount.php - BEGIN */
	'Postcounts' => 'Beitragszähler Verwaltung',
	'Post_count_explain' => 'Hier kannst du den Beitragszähler für einen bestimmten Benutzer anpassen.',
	'Modify_post_counts' => 'Beitragszähler bearbeiten',
	'Post_count_changed' => 'Der Beitragszähler des Benutzers wurde erfolgreich bearbeitet.',
	'Click_return_posts_config' => 'Klicke %shier%s, um zur Beitragszähler-Verwaltung zurückzukehren.',
	'Modify_post_count' => 'Beitragszähler bearbeiten',
	'Edit_post_count' => 'Beitragszähler von <b>%s</b> bearbeiten',
	'Post_count' => 'Anzahl der Mitteilungen',
/* lang_postcount.php - END */

/* lang_megamail.php - BEGIN */
	'Megamail_Explain' => 'Hier kannst du eine PN (private Nachricht) oder E-Mail an alle Benutzer oder an alle Benutzer einer Gruppe schicken. Diese geschieht normalerweise, indem eine E-Mail über die Forum E-Mail-Adresse gesendet wird, auf der alle Empfänger dieser E-Mail als Blind Carbon Copy (BCC - Blindkopie) eingetragen sind.<br />Dieses modifizierte Script sendet diese E-Mail in mehreren Batches. Dies sollte Timeouts und Serverlastprobleme umgehen. Der Status des Massen E-Mail-Sendens wird in der Datenbank gespeichert. Du kannst dieses Fenster schließen, um das Massen E-Mail-Senden zu pausieren (das aktuelle Batch wird noch abgearbeitet). Du kannst später dort weitermachen, wo du aufgehört hast.<br /><b>Wenn HTML Emails aktiviert sind, solltest du Emails unter Verwendung des HTML Codes schreiben, &lt;br /&gt; für ein Zeilenumbruch verwenden.</b><br /><b>Wenn du KOMPLETTE HTML E-Mails senden willst, beachte bitte das dann kein Template oder CSS benutzt wird, und du den kompletten HTML-Code inklusive HEAD und BODY Tags.</b><br /><b>Bitte beachte das Massen-PN nur BBCode unterstützt, wenn du eine PN in HTML schreibst, wird diese nicht richtig angezeigt.</b>',
	'megamail_inactive_users' => 'Benutzer, die das Forum in den letzten {DAYS} Tagen nicht besucht haben',
	'megamail_header' => 'Deine E-Mail-Sessions',
	'megamail_id' => 'E-Mail-ID',
	'megamail_batchstart' => 'Bearbeitet',
	'megamail_batchsize' => 'Nachrichten pro Batch',
	'megamail_batchwait' => 'Pause',
	'megamail_created_message' => 'Die Massen-Mail wurde in der Datenbank gespeichert.<br /><br /> Um das Senden zu starten, klicke %shier%s oder warte, bis du per Meta-Refresh dahin weitergeleitet wirst&hellip;',
	'megamail_send_message' => 'Das aktuelle Batch (%s - %s) wurde gesendet.<br /><br />Um mit dem Senden fortzufahren, klicke %shier%s oder warte, bis du per Meta-Refresh dahin weitergeleitet wirst&hellip;',
	'megamail_status' => 'Status',
	'megamail_proceed' => '%sJetzt fortfahren%s',
	'megamail_done' => 'FERTIG',
	'megamail_none' => 'Es wurden keine Einträge gefunden.',
	'megamail_delete_confirm' => 'Möchtest du diese E-Mail wirklich löschen?',
	'megamail_deleted' => 'E-Mail erfolgreich gelöscht',
	'megamail_click_return' => 'Klicke %shier%s, um zu Mega E-Mails / PN zurückzukehren.',
/* lang_megamail.php - END */

/* lang_admin_voting.php - BEGIN */
	'Admin_Vote_Explain' => 'Umfrage-Ergebnisse (wer hat abgestimmt und wie).',
	'Admin_Vote_Title' => 'Umfrage-Administration',
	'Vote_id' => '#',
	'Poll_topic' => 'Umfrage-Thema',
	'Vote_username' => 'Wähler',
	'Vote_end_date' => 'Umfrage-Dauer',
	'Sort_vote_id' => 'Umfrage-ID',
	'Sort_poll_topic' => 'Umfrage-Thema',
	'Sort_poll_title' => 'Umfrage-Titel',
	'Sort_poll_start' => 'Start Datum',
	'Sort_poll_end' => 'End Datum',
	'Submit' => 'Absenden',
	'Select_sort_field' => 'Sortierfeld auswählen',
	'Sort_ascending' => 'Aufsteigend',
	'Sort_descending' => 'Absteigend',
/* lang_admin_voting.php - END */

/* lang_admin_gd_info.php - BEGIN */
	'GD_Title' => 'GD Info',
	'NO_GD' => 'kein GD',
	'GD_Description' => 'Hier kannst du Informationen über die aktuell installierte Version der GD Bibliothek abrufen.',
	'GD_Freetype_Support' => 'Freetype Fonts Unterstützung:',
	'GD_Freetype_Linkage' => 'Freetype Link Typ:',
	'GD_T1lib_Support' => 'T1lib Unterstützung:',
	'GD_Gif_Read_Support' => 'Gif Read Unterstützung:',
	'GD_Gif_Create_Support' => 'Gif Create Unterstützung:',
	'GD_Jpg_Support' => 'Jpg/Jpeg Unterstützung:',
	'GD_Png_Support' => 'Png Unterstützung:',
	'GD_Wbmp_Support' => 'WBMP Unterstützung:',
	'GD_XBM_Support' => 'XBM Unterstützung:',
	'GD_Jis_Mapped_Support' => 'Japanisch Font Unterstützung:',
	'GD_True' => 'Ja',
	'GD_False' => 'Nein',
/* lang_admin_gd_info.php - END */

/* lang_admin_captcha.php - BEGIN */
	'VC_Captcha_Config' => 'CAPTCHA Konfiguration',
	'captcha_config_explain' => 'Hier kannst du das Aussehen des Bildes bestimmen, das bei aktivierter Visuellen Bestätigung den Registrierungscode anzeigt.<br />Bedenke bitte das die Lesbarkeit des Bestätigungs-Codes, extrem erschwert oder sogar unmöglich werden kann.',
	'VC_active' => 'Visuelle Bestätigung ist aktiviert!',
	'VC_inactive' => 'Visuelle Bestätigung ist nicht aktiviert!',
	'background_configs' => 'Hintergrund',
	'Click_return_captcha_config' => 'Klicke %shier%s, um zur CAPTCHA Konfiguration zurückzukehren.',

	'CAPTCHA_width' => 'Breite des CAPTCHA',
	'CAPTCHA_height' => 'Höhe des CAPTCHA',
	'background_color' => 'Hintergrundfarbe',
	'background_color_explain' => 'Angabe in Hexadezimaler Schreibweise (z.B. #0000FF für Blau).',
	'pre_letters' => 'Anzahl der Schattenzeichen',
	'pre_letters_explain' => '',
	'great_pre_letters' => 'Schattenzeichen vergrößern',
	'great_pre_letters_explain' => '',
	'Random' => 'Zufällig',
	'random_font_per_letter' => 'Zufälliger Schriftsatz pro Zeichen',
	'random_font_per_letter_explain' => 'Für jedes Zeichen wird ein anderer Schriftsatz benutzt.',

	'back_chess' => 'Schachmuster',
	'back_chess_explain' => 'Füllt den kompletten Hintergrund mit 16 Vierecken.',
	'back_ellipses' => 'Ovale und Kreise',
	'back_arcs' => 'Gebogene Linien',
	'back_lines' => 'Linien',
	'back_image' => 'Hintergrundbild',
	'back_image_explain' => '(Diese Funktion ist derzeitig noch nicht integriert)',

	'foreground_lattice' => 'Vordergrundgitter',
	'foreground_lattice_explain' => '(breite x höhe)<br />Generiert ein Gitter über dem CAPTCHA',
	'foreground_lattice_color' => 'Gitterfarbe',
	'foreground_lattice_color_explain' => 'Angabe in Hexdezimal (z.B. #0000FF für blau',
	'gammacorrect' => 'Kontrastkorrektur',
	'gammacorrect_explain' => '(0 = aus)<br />ACHTUNG!!! Eine Änderungen des Wertes hat direkte auswirkung auf die Lesbarkeit des CAPTCHA!!',
	'generate_jpeg' => 'Bildformat',
	'generate_jpeg_explain' => 'Das JPEG Format hat eine höhere Kompression als PNG und kann, anhand der Qualitätseinstellung (max 95%), einen direkten Einfluss auf die Lesbarkeit ausüben.',
	'generate_jpeg_quality' => 'Qualität',
/* lang_admin_captcha.php - END */

/* lang_admin_topic_shadow.php - BEGIN */
	'Del_Before_Date' => 'Lösche alle Schatten Themen bevor %s<br />', // %s = insertion of date
	'Deleted_Topic' => 'Lösche Schatten Themen %s<br />', // %s = topic name
	'Affected_Rows' => '%d bekannte Einträge sind betroffen<br />', // %d = affected rows (not avail with all databases!)
	'Delete_From_Date' => 'Alle Schatten Themen, die vor dem eingegebenen Datum erstellt wurden, werden entfernt.',
	'Delete_Before_Date_Button' => 'Lösche alle vor Datum',
	'No_Shadow_Topics' => 'Keine Schatten Themen gefunden.',
	'Topic_Shadow' => 'Schatten Themen',
	'TS_Desc' => 'Erlaubt das Entfernen von Schatten Themen ohne das eigentliche Thema zu löschen. Schatten Themen werden erstellt, wenn ein Thema in ein anderes Forum verschoben wird und du auswählst, einen Link im Original-Forum zu belassen.',
	'Month' => 'Monat',
	'Day' => 'Tag',
	'Year' => 'Jahr',
	'Clear' => 'Säubern',
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

	'Next' => 'Nächster',
	'Finished' => 'Fertig',
/* lang_admin_rebuild_search.php - END */

/* lang_admin_faq_editor.php - BEGIN */
	'faq_editor' => 'Sprache bearbeiten',
	'faq_editor_explain' => 'Dieses Modul erlaub es dir, deine Anhänge, BBCode und Foren FAQs zu bearbeiten. Du solltest den Bereich <b>phpBB 2 Issues</b> nicht entfernen oder die Beschreibung ändern genau wie den Bereich <b>Über Icy Phoenix</b>.',

	'faq_select_language' => 'Wähle die Sprache aus, die du bearbeiten möchtest.',
	'faq_retrieve' => 'Datei herunterladen',

	'faq_block_delete' => 'Bist du sicher, dass du diesen Block entfernen willst?',
	'faq_quest_delete' => 'Bist du sicher, dass du diese Frage (und seine Antwort) entfernen möchtest?',

	'faq_quest_edit' => 'Frage &amp; Antwort bearbeiten',
	'faq_quest_create' => 'Neue Frage &amp; Antwort erstellen',

	'faq_quest_edit_explain' => 'Editiere die Frage und die Antwort. Ändere den Block, wenn du magst.',
	'faq_quest_create_explain' => 'Schreibe nun die neue Frage und die neue Antwort und drücke danach auf absenden.',

	'faq_block' => 'Block',
	'faq_quest' => 'Frage',
	'faq_answer' => 'Antwort',

	'faq_block_name' => 'Block Name',
	'faq_block_rename' => 'Block umbenennen',
	'faq_block_rename_explain' => 'Ändere den Namen des Blocks',

	'faq_block_add' => 'Block hinzufügen',
	'faq_quest_add' => 'Frage hinzufügen',

	'faq_no_quests' => 'Keine Fragen in dem Block. Das verhindert, dass jegliche Blöcke nach diesem angezeigt werden können. Lösche den Block oder füge eine oder mehr Fragen hinzu.',
	'faq_no_blocks' => 'Keine Blöcke definiert. Füge einen neuen Block hinzu, indem Du ihm unterstehend eine Bezeichnung gibst.',

	'faq_write_file' => 'Die Sprachdatei kann nicht beschrieben werden!',
	'faq_write_file_explain' => 'Du musst die Sprachdateien in language/lang_german/ und allen anderen Sprachen <i>beschreibbar</i> machen, um dieses Tool zu benutzen. Das bedeutet, dass du den <b>chmod Modus auf 666</b> setzen musst. Dies können die meisten FTP Programme. Auch kannst du den chmod via telnet oder SSH anpassen.',
/* lang_admin_faq_editor.php - END */

/* lang_admin_rules_editor.php - BEGIN */
	'rules_editor' => 'Bearbeite Sprache',
	'rules_editor_explain' => 'Dieses Modul erlaubt dir deine Forum Richtlinien zu bearbeiten oder neu anzuordnen.',

	'rules_select_language' => 'Wähle die Sprache der Datei die du ändern möchtest',
	'rules_retrieve' => 'Datei herunterladen',

	'rules_block_delete' => 'Bist du Dir sicher diesen Block zu löschen?',
	'rules_quest_delete' => 'Bist du Dir sicher diese Frage (und deren Antwort) zu löschen?',

	'rules_quest_edit' => 'Bearbeite Frage &amp; Antwort',
	'rules_quest_create' => 'Erstelle Frage &amp; Antwort',

	'rules_quest_edit_explain' => 'Bearbeite die Frage und Antwort. Ändere den Block wenn du willst.',
	'rules_quest_create_explain' => 'Gib die neue Frage und Antwort ein und klicke auf Senden.',

	'rules_block' => 'Block',
	'rules_quest' => 'Frage',
	'rules_answer' => 'Antwort',

	'rules_block_name' => 'Block Name',
	'rules_block_rename' => 'Block umbenennen',
	'rules_block_rename_explain' => 'Ändert den Namen des Blocks in der Datei',

	'rules_block_add' => 'Block hinzufügen',
	'rules_quest_add' => 'Frage hinzufügen',

	'rules_no_quests' => 'Keine Fragen in diesem Block. Das verhindert die Anzeige aller möglichen nachfolgenden Blöcke. Lösche den Block oder füge eine oder mehr Fragen hinzu.',
	'rules_no_blocks' => 'Keine Blocks festgelegt. Füge einen neuen Block hinzu, indem Du unten den Namen eingibst.',

	'rules_write_file' => 'Konnte nicht zur Sprach-Datei schreiben!',
	'rules_write_file_explain' => 'Du musst die Sprachdateien in language/lang_german/ und allen anderen Sprachen <i>beschreibbar</i> machen, um dieses Tool zu benutzen. Das bedeutet, dass du den <b>chmod Modus auf 666</b> setzen musst. Dies können die meisten FTP Programme. Auch kannst du den chmod via telnet oder SSH anpassen.',
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
	'Deleted_Message' => 'Private Nachricht gelöscht - %s <br />', // %s = PM title
	'Archived_Message' => 'Archivierte Nachricht gelöscht - %s <br />', // %s = PM title
	'Archived_Message_No_Delete' => 'Kann %s nicht löschen, da die Nachricht auch zur Archivierung markiert wurde <br />', // %s = PM title
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
	'Archive_Desc' => 'Hier finden Sie die von Ihnen archivierten Nachrichten. Der Besitzer einer solchen Nachricht (Sender und Empfänger) hat von dem Augenblick an, in dem Sie seine Nachricht archiviert haben, keinen Zugriff mehr darauf.',
	'Normal_Desc' => 'Alle privaten Nachrichten des Forums können hier verwaltet werden. Sie können die Nachrichten der Benutzer lesen, löschen und archivieren. Im letzten Fall wird die Nachricht des Benutzers ins Archiv des Administrations-Bereichs verschoben.<br /><br /><b>ACHTUNG:</b> Es wird nicht angezeigt, ob die Nachricht Anlagen wie z.B. Bilder enthält!',
	'Remove_Old' => 'Nachrichten ohne Besitzer:</a> <span class="gensmall">Nachrichten von gelöschten Benutzern können manchmal in der Datenbank zurückbleiben, welche durch diese Option gelöscht werden.</span>',
	'Remove_Sent' => 'Kopien der gesendeten Nachrichten:</a> <span class="gensmall">Nachrichten in diesem Ordner sind in der Regel überflüssig. Es sei denn, der Besitzer möchte noch einmal nachvollziehen, was er geschrieben hat. In diesem Fall kann er seine Nachrichten aber auch archivieren und somit diese Löschung umgehen, wenn er möchte.</span>',
	'Removed_Old' => 'Alle besitzerlosen Nachrichten werden gelöscht&hellip;<br />',
	'Removed_Sent' => 'Alle Kopien der gesendeten Nachrichten werden gelöscht&hellip;<br />',
	'Utilities' => 'Massen Löschungs Programme',
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
	'Link_Categories_Explain' => 'In diesem Menu kannst du die Kategorien verwalten: erstellen, bearbeiten, löschen, sortieren etc.',
	'Category_Permissions' => 'Kategorie Befugnisse',
	'Category_Title' => 'Kategorie Titel',
	'Category_Desc' => 'Kategorie Beschreibung',
	'View_level' => 'Zeige Level',
	'Upload_level' => 'Upload Level',
	'Rate_level' => 'Bewertungs Level',
	'Comment_level' => 'Kommentar Level',
	'Edit_level' => ' Level bearbeiten',
	'Delete_level' => 'Level löschen',
	'New_category_created' => 'Die neue Kategorie wurde erfolgreich erstellt.',
	'Click_return_link_category' => 'Klicke %shier%s, um zur Kategorie Verwaltung zurückzukehren.',
	'Category_updated' => 'Die Kategorie wurde erfolgreich bearbeitet.',
	'Delete_Category' => 'Kategorie löschen',
	'Delete_Category_Explain' => 'Mit dem nachstehenden Formular kannst du Kategorien zu löschen.',
	'Category_deleted' => 'Diese Kategorie wurde erfolgreich gelöscht.',
	'Category_changed_order' => 'Diese Kategorie wurde erfolgreich verschoben.',

// Config
	'Link_Config' => 'Links Konfiguration',
	'Link_config_explain' => 'Hier kannst du die Einstellungen des Link Mods vornehmen.',
	'lock_submit_site' => 'Sperre Benutzer für das Eintragen von Seiten.',
	'allow_guest_submit_site' => 'Erlaube Gästen, Seiten zu übermitteln.',
	'allow_no_logo' => 'Erlaube die Übermittlung einer Seite ohne Banner.',
	'site_logo' => 'Die URL des eigenen Logos (komplette URL)',
	'site_url' => 'Die URL Deiner Webseite',
	'width' => 'Max Breite der Banner',
	'height' => 'Max Höhe der Banner',
	'linkspp' => 'Max Links pro Seite',
	'interval' => 'Wie schnell werden die Banner angezeigt',
	'display_logo' => 'Wie viele Banner werden zugleich angezeigt',
	'Link_display_links_logo' => 'Zeige Banner der Links Seite',
	'Link_email_notify' => 'Sende eine E-Mail an alle Administratoren, wenn ein neuer Link hinzugefügt wurde',
	'Link_pm_notify' => 'Sende eine PM an alle Administratoren, wenn ein neuer Link hinzugefügt wurde',
	'Link_config_updated' => 'Links Konfiguration wurde erfolgreich bearbeitet',
	'Click_return_link_config' => 'Klicke %shier%s, um zur Links Konfiguration zurückzukehren.',

// Link_MOD
	'Links' => 'Links Einstellungen',
	'Links_explain' => 'In diesem Menu gibt es eine Übersicht der vorhandenen Links, ebenfalls können Links bearbeitet oder gelöscht werden.',
	'Add_link' => 'Link hinzufügen',
	'Add_link_explain' => 'Über dieses Menu können Links hinzugefügt werden.',
	'Edit_link' => 'Link bearbeiten',
	'Edit_link_explain' => 'Über dieses Menu kann ein Link bearbeitet werden, ebenfalls kann man den ',
	'Delete_link' => 'Link löschen',
	'Delete_link_explain' => 'Über dieses Menu kann ein Link gelöscht werden, ebenfalls kann man den ',
	'Link_update' => 'Link bearbeiten',
	'Link_delete' => 'Link löschen',
	'Link_title' => 'Name der Seite',
	'Link_url' => 'URL der Seite',
	'Link_logo_src' => 'Logo (88x31 Pixel, nicht größer als 10k)',
	'Link_category' => 'Kategorie',
	'Link_desc' => 'Beschreibung der Seite',
	'link_hits' => 'Klicks',
	'Link_basic_setting' => 'Link Einstellungen',
	'Link_adv_setting' => 'Erweiterte Einstellungen',
	'Link_active' => 'Aktiv Status',

	'Link_admin_add_success' => 'Der Link wurde erfolgreich hinzugefügt.',
	'Link_admin_add_fail' => 'Der Link konnte nicht hinzugefügt werden, bitte versuche es später wieder.',
	'Link_admin_update_success' => 'Der Link wurde erfolgreich bearbeitet.',
	'Link_admin_update_fail' => 'Der Link konnte nicht bearbeitet werden, bitte versuche es später wieder.',
	'Link_admin_delete_success' => 'Der Link wurde erfolgreich gelöscht.',
	'Link_admin_delete_fail' => 'Der Link konnte nicht gelöscht werden, bitte versuche es später wieder.',
	'Click_return_lastpage' => 'Klicke %shier%s, um zur vorherigen Seite zurückzukehren.',
	'Click_return_admin_links' => 'Klicke %shier%s, um zur Links Verwaltung zurückzukehren.',
	'Preview' => 'Vorschau',
	'Search_site' => 'Suche Seite',
	'Search_site_title' => 'Suche Seite Name/Beschreibung:',
/* lang_admin_link.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

// Icy Phoenix - BUILD 009
	'Replace_title' => 'Ersetzen in Beiträgen',
	'Replace_text' => 'Von dieser Seite aus kannst du Wörter oder Zeilen mit "was auch immer" ersetzen. Dies kann aber NICHT mehr rückgängig gemacht werden!',
	'Link' => 'Link',
	'Str_old' => 'Jetziger Text',
	'Str_new' => 'Ersetzen mit',
	'No_results' => 'Keine Ergebnisse gefunden',
	'Replaced_count' => 'Gesamt aktualisierte Beiträge: %s',

// Icy Phoenix - BUILD 016
	'group_rank' => 'Rang',
	'group_color' => 'Farbe',
	'group_legend' => 'Zeige in Legende',
	'group_legend_short' => 'Legende',
	'group_main' => 'Haupt Gruppe',
	'group_members' => 'Mitglieder',
	'group_update' => 'Änderungen anwenden',

/* lang_color_groups.php - BEGIN */
	'Color_Groups' => 'Farb-Gruppen',
	'Manage_Color_Groups' => 'Verwalte Farb-Gruppen',
	'Add_New_Group' => 'Neue Gruppe hinzufügen',
	'Color' => 'Farbe',
	'User_Count' => 'Benutzer Zähler',
	'Color_List' => 'Farb Namen Liste:',
	'Group_Name' => 'Gruppen Name',
	'Define_Users' => 'Benutzer definieren',
	'Color_Group_User_List' => 'Farb Gruppen Benutzer Liste',
	'Options' => 'Optionen',
	'Example' => 'Beispiel',
	'User_List' => 'Komplette Benutzer Liste',
	'Unassigned_User_List' => 'Benutzer ohne Gruppe',
	'Assigned_User_List' => 'Benutzer mit Gruppe',
	'Add_Arrow' => 'Zur Liste hinzufügen',
	'Update' => 'Aktualisieren',
	'Updated_Group' => 'Aktualisierte Gruppen Benutzer Liste<br />',
	'Deleted_Group' => 'Gelöschte Gruppe.  Alle Benutzer die in diese Gruppe waren sind nun ohne Gruppen Mitgliedschaft<br />',
	'Hide' => 'Verstecken',
	'Un-hide' => 'Sichtbar machen',
	'Group_Hidden' => 'Gruppe versteckt<br />',
	'Group_Unhidden' => 'Gruppe sichtbar<br />',
	'Groups_Updated' => 'Gruppen Änderungen wurden aktualisiert<br />',
	'Moved_Group' => 'Verschobene Gruppen Sortierung<br />',

//Descriptions
	'Manage_Color_Groups_Desc' => 'Aktualisiere Gruppen, füge neue Gruppen hinzu oder verwalte die Benutzer eine bestimmten Farb Gruppe.<br />Gruppen bei denen Du "Versteckt" gewählte hast, werden nicht auf der Hauptindex Liste angezeigt.',
	'Color_Group_User_List_Desc' => 'Lösche oder füge Benutzer zu einer bestimmten Farb Gruppe hinzu.',

//Errors
	'Error_Group_Table' => 'Fehler beim Abfragen der Farb Gruppen Tabelle.',
	'Error_Font_Color' => '<b><u>Achtung:</b></u>  Die angegebene Schrift Farbe scheint ungültig zu sein!',
	'Color_Ok' => 'Die angegebene Schrift Farbe scheint gültig zu sein.',
	'No_Groups_Exist' => 'Es bestehen keine Gruppen.',
	'Error_Users_Table' => 'Fehler beim Abfragen der Benutzer Tabelle.',
	'Invalid_Group_Add' => '%s ist ein ungültiger oder doppelter Gruppen Name.<br />',

//Dynamic
	'Group_Updated' => 'Aktualisierte Farb Gruppe %s<br />',
	'Editing_Group' => 'Zurzeit wird die Benutzer Liste für %s bearbeitet.',
	'Invalid_User' => '%s ist ein ungültiger Benutzer Name, überspringen<br />',
	'Invalid_Order_Num' => '%s beinhaltet eine ungültige Nummer, aber dies wurde behoben.  Bitte versuche deine Sortierung erneut.',

//New for 1.2.0
	'Users_List' => 'Benutzer Liste',
	'Groups_List' => 'Benutzer Gruppen Liste',
	'List_Info' => '<b>Beachte</b>: <ul><li>Halte STRG gedrückt wenn du mehrere Namen auswählen willst. <li>If a user belongs to a user group, and is added to a specific color group, the color group that contains the user will be used; not the one the user group belongs to. <li>The list names are formated as NAME (CURRENT_COLOR_GROUP). There will be no (CURRENT_COLOR_GROUP) if the entry doesn\'t belong to one. <li>If a user is a member of 2 or more user groups, the highest ranking color group will be assigned (you order their appearance on the main page).</ul>',
/* lang_color_groups.php - END */

// Icy Phoenix - BUILD 023
	'Empty_Cache_Main_Question' => 'Wenn du auf JA klickst, werden alle Dateien im cache Verzeichniss gelöscht.<br /><br /><em> Willst du das wirklich tun? </em>',
	'Empty_Cache_Posts_Question' => 'Wenn du auf JA klickst, werden alle vorkompilierten Beitrags-Felder in der Beitrags-Tabelle gelöscht.<br /><br /><em> Willst du das wirklich tun? </em>',
	'Empty_Cache_Thumbs_Question' => 'Wenn du auf JA klickst, werden alle erstellten Thumbnails in den Beiträgen gelöscht.<br /><br /><em> Willst du das wirklich tun? </em>',
	'Empty_Cache_Success' => 'Cache Ordner erfolgreich geleert.',

	'Copy_Auth' => 'Kopiere Berechtigungen von',
	'Copy_Auth_Explain' => 'Bitte beachte, dass du Berechtigungen nur von Foren kopieren kannst, nicht von Kategorien!!!',

// Icy Phoenix - BUILD 027
/* lang_admin_db_backup.php - BEGIN */
	'SELECT_ALL' => 'Alle auswählen',
	'SELECT_FILE' => 'Datei auswählen',
	'START_BACKUP' => 'Backup starten',
	'START_RESTORE' => 'Wiederherstellung starten',
	'STORE_AND_DOWNLOAD' => 'Speichern und Herunterladen',
	'STORE_LOCAL' => 'Datei lokal speichern',
	'STRUCTURE_ONLY' => 'Nur Struktur',

// Backup
	'ACP_BACKUP' => 'Datenbank Backup',
	'ACP_BACKUP_EXPLAIN' => 'Hier kannst du alle seitenbezogenen Daten sichern. Du kannst das Ergebnis in deinem <b><samp>backup/</samp></b> Ordner speichern, oder direkt herunterladen. Abhängig von deinen Server Einstellungen, kannst du dieses Archiv in mehrere Formate komprimieren.<br /><br /><span class="text_red">Das Backup wird in mehreren Schritten ausgeführt um PHP Timeouts vorzubeugen: Das Script sollte den Vorgang komplett automatisch ausführen, sodass du nur warten musst, bis es beendet ist.</span><br /><br />',

	'BACKUP_OPTIONS' => 'Backup-Optionen',
	'BACKUP_TYPE' => 'Backup-Typ',

	'DATABASE' => 'Datenbank Werkzeuge',
	'DATA_ONLY' => 'Nur Daten',
	'DELETE_BACKUP' => 'Backup löschen',
	'DELETE_SELECTED_BACKUP' => 'Bist du dir sicher das ausgewählte Backup zu löschen?',
	'DESELECT_ALL' => 'Alle abwählen',
	'DOWNLOAD_BACKUP' => 'Sicherung herunterladen',

	'FILE_TYPE' => 'Datei-Typ',
	'FULL_BACKUP' => 'Komplett',

	'BACKUP_TYPE_COMPLETE' => 'Komplett',
	'BACKUP_TYPE_EXTENDED' => 'Umfassend',
	'BACKUP_TYPE_COMPACT' => 'Compact Line Breaks',

	'BACKUP_SUCCESS' => 'Das Backup wurde erfolgreich erstellt.',
	'BACKUP_DELETED' => 'Das Backup wurde erfolgreich gelöscht.',

	'TABLE_SELECT' => 'Tabellen-Auswahl',

	'BACKUP_IN_PROGRESS' => 'Backup wird erstellt&hellip;',
	'BACKUP_IN_PROGRESS_TABLE' => 'Sichere Tabelle: <b>%s</b>',
	'BACKUP_IN_PROGRESS_REDIRECT' => 'Du wirst automatisch in ein paar Sekunden zum nächsten Schritt weitergeleitet',
	'BACKUP_IN_PROGRESS_REDIRECT_CLICK' => 'Wenn du nicht innerhalb von ein paar Sekunden weitergeleitet wirst, kannst du %shier%s klicken',
	'BACKUP_OPTIONS_RETURN' => 'Klicke %shier%s, um zur Backup Verwaltung zurückzukehren.',

// Errors
	'Table_Select_Error' => 'Du musst mindestens eine Tabelle auswählen.',

// Restore
	'ACP_RESTORE' => 'Datenbank wiederherstellen',
	'ACP_RESTORE_EXPLAIN' => 'Dies führt eine komplette Wiederherstellung aller deiner Seiten-Tabellen von einer gespeicherten Datei aus. Wenn dein Server es unterstützt, kannst du eine Gzip oder bzip2 komprimierte Text-Datei verwenden, welche dann automatisch dekomprimiert wird. <strong>ACHTUNG</strong> Dies wird alle vorhandenen Daten überschreiben. Die Wiederherstellung kann etwas Zeit in Anspruch nehmen, bitte verlasse diese Seite nicht bis die Wiederherstellung komplett ist. Backups werden in dem <b><samp>backup/</samp></b> Ordner gespeichert. Backups die nicht mit diesem System erstellt wurden, werden wahrscheinlich nicht funktionieren.',
	'RESTORE_OPTIONS' => 'Wiederherstellungs-Optionen',

	'Restore_Success' => 'Die Datenbank wurde erfolgreich wiederhergestellt.<br />Deine Seite sollte nun wieder auf den Stand des gewählten Backups sein.',

// Errors
	'No_Backup_Selected' => 'Du hast kein Backup ausgewählt, somit kannst du keins wiederherstellen.',
	'Backup_Invalid' => 'Die ausgewählte Backup-Datei ist ungültig.',
	'RESTORE_FAILURE' => 'Die Backup-Datei hat Fehler.',
/* lang_admin_db_backup.php - END */

/* Logs - BEGIN */
	'LOGS_ACTIONS_FILTER' => 'Aktionen-Filter',
	'LOGS_TITLE' => 'Logs',
	'LOGS_EXPLAIN' => 'Alle relevanten Aktionen wurden in der DB gespeichert.',
	'LOGS_TARGET' => 'Ziel',
	'LOGS_DELETE' => 'Auswahl löschen',
	'LOGS_DELETE_ALL' => 'Logs Tabelle löschen',
	'LOGS_DENY' => 'Keine Berechtigung!',
	'LOGS_POST_EDIT' => 'änderte einen Beitrag geschrieben von',
	'LOGS_POST_DELETE' => 'löschte einen Beitrag von',
	'LOGS_GROUP_JOIN' => 'beantragt Gruppenmitgliedschaft in der Gruppe',
	'LOGS_GROUP_EDIT' => 'änderte Gruppenoptionen von %s',
	'LOGS_GROUP_ADD' => 'fügte %s zur Gruppe',
	'LOGS_GROUP_TYPE' => 'änderte Gruppe %s, jetzt ist die Gruppe %s',
	'LOGS_GROUP_TYPE_0' => 'geöffnet',
	'LOGS_GROUP_TYPE_1' => 'geschlossen',
	'LOGS_GROUP_TYPE_2' => 'versteckt',
	'LOGS_MESSAGE' => 'versendete eine E-Mail zu einem oder mehreren Benutzern, code <b>%s</b>',
	'LOGS_MODCP_DELETE' => 'löschte ein Thema von %s durch das MODCP',
	'LOGS_MODCP_RECYCLE' => 'verschon ein Thema von %s durch das MODCP in den Papierkorb',
	'LOGS_MODCP_LOCK' => 'sperrte ein Thema von %s durch das MODCP',
	'LOGS_MODCP_UNLOCK' => 'entsperrte ein Thema von %s durch das MODCP',
	'LOGS_MODCP_MOVE' => 'verschob ein Thema von %s durch das MODCP',
	'LOGS_MODCP_MERGE' => 'fügte ein Thema von %s mit einem anderen durch das MODCP zusammen',
	'LOGS_MODCP_SPLIT' => 'teilte ein Thema %s durch das MODCP',
	'LOGS_TOPIC_BIN' => 'löschte ein Thema von',
	'LOGS_TOPIC_ATTACK' => 'hacking attempt to message',
	'LOGS_CARD_BAN' => 'gebannt',
	'LOGS_CARD_WARN' => 'verwarnt',
	'LOGS_CARD_UNBAN' => 'entsperrt',
	'LOGS_ADMIN_CAT_ADD' => 'fügte ein Forum hinzu',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP' => 'DB gesichert %s',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_full' => 'vollständig',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_structure' => '(nur die Struktur)',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_data' => '(nur die Daten)',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_store_and_download' => ', hat sie heruntergeladen und auf dem Webspace gespeichert',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_store' => ', und hat sie auf dem Webspace gespeichert',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_download' => ', und hat sie heruntergeladen',
	'LOGS_ADMIN_DB_UTILITIES_RESTORE' => 'DB wiederhergestellt von',
	'LOGS_ADMIN_BOARD_CONFIG' => 'änderte die Board/Server Einstellungen',
	'LOGS_ADMIN_BOARD_IP_CONFIG' => 'änderte die Icy Phoenix Einstellungen',
	'LOGS_ADMIN_GROUP_NEW' => 'erstellte Gruppe',
	'LOGS_ADMIN_GROUP_DELETE' => 'löschte Gruppe',
	'LOGS_ADMIN_GROUP_EDIT' => 'änderte Gruppe',
	'LOGS_ADMIN_USER_AUTH' => 'änderte Berechtigungen von',
	'LOGS_ADMIN_GROUP_AUTH' => 'änderte Gruppen Berechtigungen',
	'LOGS_ADMIN_USER_BAN' => 'sperrte jemanden vom ACP aus',
	'LOGS_ADMIN_USER_UNBAN' => 'entsperrte jemanden vom ACP aus',
	'LOGS_ADMIN_USER_DELETE' => 'löschte Benutzer',
	'LOGS_ADMIN_USER_EDIT' => 'änderte das Profil von',
	'LOGS_CMS_LAYOUT_EDIT' => 'änderte %sdiese%s Seite',
	'LOGS_CMS_LAYOUT_DELETE' => 'löschte eine Seite [ID=%s]',
	'LOGS_CMS_BLOCK_EDIT' => 'änderte einen Block [ID=%s] auf %sdieser%s Seite',
	'LOGS_CMS_BLOCK_EDIT_LS' => 'änderte einen Block [ID=%s] in einer Standardseite [%s]',
	'LOGS_CMS_BLOCK_DELETE' => 'löschte einen Block [ID=%s] auf %sdieser%s Seite',
	'LOGS_CMS_BLOCK_DELETE_LS' => 'löschte einen Block [ID=%s] in einer Standardseite [%s]',
/* Logs - END */

	'SMILEYS_UPDATED' => 'Smilies aktualisiert',

/* ADS - BEGIN */
	'ADS_TITLE' => 'Banner &amp; Sponsoren',
	'ADS_TITLE_EXPLAIN' => 'Dieses Kapitel erlaubt dir die Konfiguration von Banner, Werbungen und Sponsoren um sie auf deiner Seite anzuzeigen. Du kannst unterschiedliche Banner hinzufügen und selbst entscheiden, wo und für welche Benutzer sie angezeigt werden sollen. Wenn du mehrere Banner für die selbe Position festlegst, dann wird von diese Bannern jeweils einer zufällig angezeigt.',
	'AD_DES' => 'Beschreibung',
	'AD_TEXT' => 'Inhalt',
	'AD_ENABLED' => 'Freigegeben',
	'AD_STATUS' => 'Status',
	'AD_STATUS_EXPLAIN' => 'Wähle JA aus, wenn du diesen Banner aktivieren möchtest oder NEIN zum deaktivieren',
	'AD_POSITION' => 'Position',
	'AD_AUTH' => 'Befugnisse',
	'AD_AUTH_EXPLAIN' => 'Benutzer die diese Banner sehen werden',
	'AD_AUTH_GUESTS' => 'Nur Gäste',
	'AD_AUTH_REG' => 'Gäste und Registrierte (Keine ADMINS oder MODS)',
	'AD_AUTH_MOD' => 'Alle außer Administratoren',
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
	'AD_POS_NMT' => 'Nav Menü Top',
	'AD_POS_NMB' => 'Nav Menü Bottom',
	'AD_ADD' => 'Banner hinzufügen',
	'AD_EDIT' => 'Banner erfolgreich geändert',
	'AD_ADDED' => 'Banner erfolgreich hinzugefügt',
	'ADS_UPDATE' => 'Banner aktualisieren',
	'AD_UPDATED' => 'Banner erfolgreich aktualisiert',
	'AD_DELETED' => 'Banner erfolgreich gelöscht',
	'CLICK_RETURN_ADS' => 'Klicke %shier%s, um zu den Banner-Einstellungen zurückzukehren.',
	'AD_NO_ADS' => 'Keine Banner festgelegt',
	'ERR_AD_ADD' => 'Fehler, bitte fülle alle benötigten Felder aus',
/* ADS - END */

	'FULL_HTML' => 'Full HTML',
	'ACTIONS' => 'Aktionen',
	'EDIT' => 'Bearbeiten',
	'DELETE' => 'Löschen',

	// Tickets Submission - BEGIN
	'TICKETS_EMAILS' => 'E-Mail Tickets',
	'TICKETS_EMAILS_EXPLAIN' => 'This section lets you specify several categories which could be chosen in "Contact Us" page when sending emails. For each category one or more email address can be specified, so the user will be allowed to choose a specific subject and the email will be sent to the linked email addresses.',
	'TICKET_CAT' => 'Kategorie',
	'TICKET_CAT_TITLE' => 'Titel',
	'TICKET_CAT_DES' => 'Beschreibung',
	'TICKET_CAT_EMAILS' => 'E-Mail Adressen',
	'TICKET_CAT_EMAILS_EXPLAIN' => 'Insert here all email addresses you want the email to be sent.<br />Separate all addresses by semicolon (a@a.com;b@b.com;c@c.com).',
	'TICKETS_NO_TICKETS' => 'Keine Tickets',
	'TICKETS_NO_TICKET_SEL' => 'Kein Ticket ausgewählt',
	'TICKETS_NO_TICKET_TITLE' => 'Du mußt wenigstens einen Titel eingeben.',
	'TICKETS_DB_ADD' => 'Kategorie hinzufügen',
	'TICKETS_DB_ADDED' => 'Kategorie erfolgreich hinzugefügen',
	'TICKETS_DB_UPDATED' => 'Kategorie erfolgreich geändert',
	'TICKETS_DB_DELETED' => 'Kategorie erfolgreich gelöscht',
	'TICKETS_DB_CLICK' => 'Klicke %shier%s, um zu den E-Mail Tickets zurückzukehren',
	// Tickets Submission - END

	'FORUM_LIMIT_EDIT_TIME' => 'Limit User Post Edit Time',
	'FORUM_LIMIT_EDIT_TIME_EXPLAIN' => 'By enabling this option users will be allowed to edit own messages only within the limit set in Posts configuration of Icy Phoenix (ACP &raquo; Configuration &raquo; Icy Phoenix &raquo; Posting And Messages)',

	// Custom BBCodes - BEGIN
	'BBCODES_CUSTOM_BBCODES' => 'Benutzerdefinierte BBCodes',
	'BBCODES_CUSTOM_BBCODES_EXPLAIN' => 'Der BBCode eine spezielle Umsetzung von HTML und bietet eine größere Kontrolle darüber, was und wie etwas angezeigt wird. Von dieser Seite aus kannst du Benutzerdefinierte BBCodes hinzufügen, löschen und bearbeiten. Um Benutzerdefinierte BBCodes nutzen zu können, musst du es aktivieren: <b>Aktiviere Benutzerdefinierte BBCodes</b> unter <b>Konfiguration &raquo; Grundeinstellungen &raquo; Beiträge und Mitteilungen</b>.',
	'BBCODES_NO_BBCODES' => 'Keine BBCodes',
	'BBCODES_NO_BBCODES_SEL' => 'Kein BBCode ausgewählt',
	'BBCODES_NO_BBCODES_INPUT' => 'Du mußt den BBCode-Tag angeben.',
	'BBCODES_DB_ADD' => 'BBCode hinzufügen',
	'BBCODES_DB_ADDED' => 'BBCode erfolgreich hinzugefügt.',
	'BBCODES_DB_UPDATED' => 'BBCode erfolgreich aktualisiert.',
	'BBCODES_DB_DELETED' => 'BBCode erfolgreich gelöscht.',
	'BBCODES_DB_CLICK' => 'Klicke %shier%s, um zu den Benutzerdefinierte BBCodes zurückzukehren.',

	'BBCODE_ADDED' => 'BBCode erfolgreich hinzugefügt.',
	'BBCODE_EDITED' => 'BBCode erfolgreich geändert.',
	'BBCODE_NOT_EXIST' => 'Der ausgewählte BBCode existiert nicht.',
	'BBCODE_HELPLINE' => 'Hilfe Zeile',
	'BBCODE_HELPLINE_EXPLAIN' => 'Dieses Feld enthält den Maus-Over-Effekt für den BBCode.',
	'BBCODE_HELPLINE_TEXT' => 'Text der Hilfe-Zeile',
	'BBCODE_HELPLINE_TOO_LONG' => 'Der eingegebene Text der Hilfe-Zeile ist zu lang.',

	'BBCODE_INVALID_TAG_NAME' => 'Dein ausgewählter BBCode-Tag Name existiert bereits.',
	'BBCODE_INVALID' => 'Dein erstellter BBCode hat eine ungültige Form.',
	'BBCODE_OPEN_ENDED_TAG' => 'Dein Benutzerdefinierter BBCode muss sowohl einen öffnenden, als auch einen schließenden Tag haben.',
	'BBCODE_TAG' => 'Tag',
	'BBCODE_TAG_TOO_LONG' => 'Dein gewählter Tag-Name ist zu lang.',
	'BBCODE_TAG_DEF_TOO_LONG' => 'Deine eingegebene Tag-Beschreibung ist zu lang, bitte kürze sie.',
	'BBCODE_USAGE' => 'BBCode Beispiele',
	'BBCODE_USAGE_EXAMPLE' => '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN' => 'Hier gibst du an, wie der BBCode verwendet wird. Ersetze alle veränderlichen Eingaben durch entsprechende Token (%ssee below%s).',

	'EXAMPLE' => 'Beispiel:',
	'EXAMPLES' => 'Beispiele:',

	'HTML_REPLACEMENT' => 'HTML-Ersetzung',
	'HTML_REPLACEMENT_EXAMPLE' => '&lt;span style=&quot;background-color: {COLOR};&quot;&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style=&quot;font-family: {SIMPLETEXT1};&quot;&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN' => 'Hier legst du die standard HTML-Ersetzung fest. Do not forget to put back tokens you used above!',

	'TOKEN' => 'Token',
	'TOKENS' => 'Tokens',
	'TOKENS_EXPLAIN' => 'Tokens are placeholders for user input. The input will be validated only if it matches the corresponding definition. If needed, you can number them by adding a number as the last character between the braces, e.g. {TEXT1}, {TEXT2}.<br /><br />Within the HTML replacement you can also use any language string present in your language/ directory like this: {L_<em>&lt;STRINGNAME&gt;</em>} where <em>&lt;STRINGNAME&gt;</em> is the name of the translated string you want to add. For example, {L_WROTE} will be displayed as &quot;wrote&quot; or its translation according to userâ€™s locale.<br /><br /><strong>Please note that only tokens listed below are able to be used within custom BBCodes.</strong>',
	'TOKEN_DEFINITION' => 'Was kann das sein?',
	'TOO_MANY_BBCODES' => 'You cannot create any more BBCodes. Please remove one or more BBCodes then try again.',

	'BBCODES_TOKENS_DESCRIPTION' => '
<b>TEXT</b> &raquo; Any text, including foreign characters, numbers, etc... You should not use this token in HTML tags. Instead try to use IDENTIFIER or SIMPLETEXT.<br />
<b>SIMPLETEXT</b> &raquo; Characters from the latin alphabet (A-Z), numbers, spaces, commas, dots, minus, plus, hyphen and underscore<br />
<b>IDENTIFIER</b> &raquo; Characters from the latin alphabet (A-Z), numbers, hyphen and underscore<br />
<b>NUMBER</b> &raquo; Any series of digits<br />
<b>EMAIL</b> &raquo; A valid e-mail address<br />
<b>URL</b> &raquo; A valid URL using any protocol (http, ftp, etc... cannot be used for javascript exploits). If none is given, &quot;http://&quot; is prefixed to the string.<br />
<b>LOCAL_URL</b> &raquo; A local URL. The URL must be relative to the topic page and cannot contain a server name or protocol.<br />
<b>COLOR</b> &raquo; A HTML colour, can be either in the numeric form <samp>#ff1234</samp> or a <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS colour keyword</a> such as <samp>fuchsia</samp> or <samp>InactiveBorder</samp>',
	// Custom BBCodes - END

	// PLUGINS - BEGIN
	'PLUGINS' => 'Plugins',
	'PLUGINS_EXPLAIN' => 'Hier kannst du die Icy Phoenix Plugins aktivieren bu´zw. deaktivieren.',
	'PLUGINS_FOLDER' => 'Ordner',
	'PLUGINS_NAME' => 'Name',
	'PLUGINS_DESCRIPTION' => 'Beschreibung',
	'PLUGINS_VERSION' => 'Version',
	'PLUGINS_CURRENT_VERSION' => 'Aktuelle Version',
	'PLUGINS_LAST_VERSION' => 'Letzte Version',
	'PLUGINS_INSTALL' => 'Installieren',
	'PLUGINS_UPGRADE' => 'Upgrade',
	'PLUGINS_UNINSTALL' => 'Deinstallieren',
	'PLUGINS_UP_TO_DATE' => 'Aktuell',
	'PLUGINS_NOT_INSTALLED' => 'Nicht installiert',
	'PLUGINS_OUTDATED' => 'Nicht aktuell',
	'PLUGINS_UPDATE_CONFIG' => 'Update Konfiguration',
	'PLUGINS_CONFIG_UPDATED' => 'Plugins-Konfiguration erfolgreich aktualisiert. Hinweis: Du mußt den Admin-Bereich neu laden (F5 drücken), um die Module zu aktualisieren.',
	'PLUGINS_RETURN_CLICK' => 'Klicke %shier%s, um zu den Plugins zurückzukehren.',
	'PLUGINS_NO_PLUGINS' => 'Keine Plugins konfiguriert',
	// PLUGINS - END

	'BBCODE_SETTINGS' => 'BBCode, HTML und Smilies Einstellungen',
	'POSTING_SETTINGS' => 'Beitrags-Einstellungen',

	'POLL_INFINITE' => 'Unbegrenzt&hellip;',
	'POLL_ONGOING' => ' (aktuell)',
	'POLL_COMPLETED' => ' (beendet)',

	'FORUM_LIKES' => 'Gefällt mir Beiträge',
	'FORUM_LIKES_EXPLAIN' => 'Erlaubt den Benutzern einen einzelnen Beitrag in einem Thema als &quot;Gefällt mir&quot; zu markieren (um diese Funktion nutzen zu können, musst du auch die Globale Einstellung, Icy Phoenix Einstellungen => SQL Optimierung, aktivieren)',

	'POSTS_PICS' => 'Beiträge / Bilder',

	'INACTIVE_USER_FEATURE' => 'Verberge diesen Benutzer',
	'INACTIVE_USER_FEATURE_EXPLAIN' => 'Wenn du dies aktivierst, wird dieser Benutzer in Foren und Themen versteckt. Details des Benutzerprofils werden durch anonyme Daten ersetzt. Benutzer werden nur versteckt, wenn sein Benutzerkonto inaktiv ist.',

	'RANK_SHOW_TITLE' => 'Rang Titel anzeigen',
	'RANK_SHOW_TITLE_EXPLAIN' => 'Wenn du dies deaktivierst, wird nur das Rang-Bild angezeigt.',

	'AJAX_CHAT_MSGS_REFRESH' => 'Aktualisierungs-Interval',
	'AJAX_CHAT_MSGS_REFRESH_EXPLAIN' => 'Bitte gib das Zeit-Interval in Sekunden an, indem das System auf neue Chat-Nachrichten überprüft werden soll. Dieser Wert sollte nicht kleiner als 2 Sekunden sein (es wird auf 1 Sekunde geändert, wenn der eingegebene Wert kleiner als 1 ist).',
	'AJAX_CHAT_SESSION_REFRESH' => 'Session Länge',
	'AJAX_CHAT_SESSION_REFRESH_EXPLAIN' => 'Bitte gib die Länge der Chat-Sitzung (Session) ein. Dieser Wert wird dazu benutzt, um zu überprüfen, ob ein Benutzer das Chat-Gespräch verlassen hat. Dieser Wert sollte nicht kleiner als 10 Sekunden sein (es wird auf 5 Sekunden geändert, wenn der eingegebene Wert kleiner als 5 ist).',
	'AJAX_CHAT_LINK_TYPE' => 'Chat-Fenster anpassen',
	'AJAX_CHAT_LINK_TYPE_EXPLAIN' => 'Bitte gib an, ob du ein einfaches Chat-Fenster haben möchtest oder ein Chat-Fenster mit vollständiger Kopf-und Fußzeile (einfaches ist schneller).',
	'AJAX_CHAT_LINK_TYPE_SIMPLE' => 'Einfaches',
	'AJAX_CHAT_LINK_TYPE_FULL' => 'Vollständiges',
	'AJAX_CHAT_NOTIFICATION' => 'Private Chat-Mitteilung',
	'AJAX_CHAT_NOTIFICATION_EXPLAIN' => 'Wenn du diese Funktion aktivierst, wird bei einer privaten Chat-Anfrage, eine Benachrichtigung an den jeweiligen Benutzer geschickt.',
	'AJAX_CHAT_CHECK_ONLINE' => 'Privater Chat-Link nur für Online Benutzer',
	'AJAX_CHAT_CHECK_ONLINE_EXPLAIN' => 'Wenn du diese Funktion aktivierst, wird der private Chat-Link nur bei Benutzern angezeigt, die bereits im Chat sind. Ansonsten wird es für alle Benutzer (die online sind) auf der Website angezeigt.',

// ####################### [ Icy Phoenix Options BEGIN ] #####################
	'IP_CONFIGURATION' => 'Icy Phoenix Einstellungen',
	'IP_CONFIGURATION_EXPLAIN' => 'Hier kannst du einige fortgeschrittene Icy Phoenix Einstellungen vornehmen',

	'MG_SW_Precompiled_Posts_Title' => 'Vorkompilierte Beiträge',
	'MG_SW_Logins_Title' => 'Login Aufzeichnungen',
	'MG_SW_Edit_Notes_Title' => 'Bearbeitungs Notizen',

	'MG_SW_Header_Footer' => 'Header &amp; Footer Mitteilungen',
	'MG_SW_Header_Table' => 'Header Tabelle',
	'MG_SW_Header_Table_Explain' => 'Bei Aktivierung dieser Option wird eine Tabelle auf jeder Seite Oben mit einer speziellen Nachricht angezeigt.',
	'MG_SW_Header_Table_Text' => 'Füge deinen Text hier ein',

	'MG_SW_Empty_Precompiled_Posts' => 'Leere vorkompilierte Beiträge',
	'MG_SW_Empty_Precompiled_Posts_Explain' => 'Diese Funktion leert alle vorkompilierten Beiträge.',
	'MG_SW_Empty_Precompiled_Posts_Success' => 'Vorkompilierte Beiträge korrekt geleert.',
	'MG_SW_Empty_Precompiled_Posts_Fail' => 'Fehler beim Leeren der vorkompilierten Beiträge.',
	'MG_SW_Empty_Precompiled_Posts_InProgress' => 'Leeren der Cache Ordner in Bearbeitung&hellip;',
	'MG_SW_Empty_Precompiled_Posts_InProgress_Redirect' => 'Du wirst automatisch in 3 Sekunden zum nächsten Schritt weitergeleitet',
	'MG_SW_Empty_Precompiled_Posts_InProgress_Redirect_Click' => 'Wenn du nicht automatisch in 3 Sekunden weitergeleitet wirst, kannst du %shier%s klicken',
	'MG_SW_Empty_Precompiled_Posts_Redirect_Click' => 'Klicke %shier%s, um zur Cache Verwaltung zurückzukehren.',

	'MG_FNF_Header' => 'Schnell-Einstellungen',
	'MG_FNF_Header_Explain' => 'Auf dieser Seite kannst du schnell und einfach einige Schnell-Einstellungen für dein Forum vornehmen. Diese Voreinstellungen wurden für Benutzer erstellt, um einfach eine Massenänderung an den Einstellungen vorzunehmen, ohne jede Einstellung einzeln für sich ändern zu müssen. Diese Voreinstellungen können als Grundlage benutzt werden, um sie danach den persönlichen Bedürfnissen anzupassen: z.B. kannst du "Schnell und aufgebracht" auswählen und dann die Einstellungen ändern, die du nicht magst.<br /><br /><span class="text_red"><b>ACHTUNG, wenn du einmal eine Schnell-Einstellung ausgewählt hast, kannst du sie nicht mehr automatisch rückgängig machen. Du musst sie dann manuell wieder auswählen.</b></span>',
	'MG_FNF_Options_Set' => 'Schnell-Einstellungen',
	'MG_FNF_FNF' => 'Schnell und aufgebracht',
	'MG_FNF_FNF_Explain' => 'Diese Einstellung erhöht die Geschwindigkeit deines Forums, da viele der Funktionen, welche eine hohe CPU-Belastung oder DB-Zugriffe benötigen, deaktiviert werden. Dies ist eine gute Anfangseinstellung für eine schnelles Forum.',
	'MG_FNF_MGS' => 'Mighty Gorgon\'s Empfehlung',
	'MG_FNF_MGS_Explain' => 'Diese Einstellung ist ausgewogen und für die meisten Seiten zu empfehlen. Einigen Funktionen bleiben aktiviert, während andere mit hoher CPU-Auslastung deaktiviert sind.',
	'MG_FNF_Full_Features' => 'Alle Funktionen',
	'MG_FNF_Full_Features_Explain' => 'Wähle diese Einstellung aus, wenn du keine Bandbreitenbeschränkung hast oder wenn du alle Icy Phoenix Funktionen haben möchtest. Es kann allerdings sein, dass einige dieser Funktionen nicht mit deinem Server kompatibel sind.',

	'MG_SW_ACRONYMS' => 'Abkürzungen deaktivieren',
	'MG_SW_ACRONYMS_Explain' => 'Diese Option deaktiviert die Abkürzungen-Analyse',
	'MG_SW_AUTOLINKS' => 'Autolinks deaktivieren',
	'MG_SW_AUTOLINKS_Explain' => 'Diese Option deaktiviert die Autolinks-Analyse',
	'MG_SW_CENSOR' => 'Wortzensur deaktivieren',
	'MG_SW_CENSOR_Explain' => 'Diese Option deaktiviert die Wortzensur-Analyse',

	'MG_SW_No_Right_Click' => 'Blockiere Rechts Klick',

	'Click_return_config_mg' => 'Klicke %shier%s, um zu den Icy Phoenix Einstellungen zurückzukehren.',
// ####################### [ Icy Phoenix Options END ] #######################
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

// ####################### [ Icy Phoenix Navigation BEGIN ] #######################
// Use numbers to sort the ACP Navigation menu
// Numbers have to be changed in all /adm/*.php files too

// Configuration
$lang['1000_Configuration'] = 'Konfiguration'; // admin_board.php, admin_config_settings.php, admin_bots.php, admin_captcha_config.php, admin_google_bot_detector.php, admin_lang_user_created.php, admin_upi2db.php
$lang['100_Main_Settings'] = 'Grundeinstellungen'; // admin_config_settings.php
$lang['110_Various_Configuration'] = 'Diverse Einstellungen'; // admin_board.php
$lang['125_Language'] = 'Sprachvariable hinzufügen'; // admin_lang_user_created.php
$lang['127_Clear_Cache'] = 'Cache löschen'; // admin_board_clearcache.php
$lang['130_UPI2DB_Mod'] = 'Ungelesene Beiträge'; // admin_upi2db.php
$lang['140_CAPTCHA'] = 'CAPTCHA'; // admin_captcha.php
$lang['145_Captcha_Config'] = 'Visuelle Bestätigung'; // admin_captcha_config.php
$lang['150_Similar_topics'] = 'Ähnliche Themen'; // admin_similar_topics.php
$lang['160_Title_infos'] = 'Quick Titel Verwaltung'; // admin_quick_title.php
$lang['170_LIW'] = 'Bildbreite begrenzen'; // admin_liw.php
$lang['190_Spider_Bots'] = 'Spider / Bots'; // admin_bots.php
$lang['192_Google_BOT'] = 'Google Bot Detektor'; // admin_google_bot_detector.php
$lang['195_Yahoo_search'] = 'Yahoo Suche'; // admin_yahoo_search.php
$lang['200_Language'] = 'Sprache'; // admin_lang_extend.php
$lang['210_MG_Quick_Settings'] = 'Schnell-Einstellungen'; // admin_board_quick_settings.php

// General
$lang['1100_General'] = 'Allgemein'; // admin_acronyms.php, admin_autolinks.php, admin_force_read.php, admin_helpdesk.php, admin_liw.php, admin_force_read.php, admin_mass_email.php, admin_megamail.php, admin_notepad.php, admin_quick_title.php, admin_smilies.php, admin_words.php, admin_yahoo_search.php
$lang['100_Acronyms'] = 'Abkürzungen'; // admin_acronyms.php
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
$lang['220_Tickets_Emails'] = 'E-Mail Kategorien'; // admin_tickets.php
$lang['230_Custom_BBCodes'] = 'Eigene BBCodes'; // admin_bbcodes.php
$lang['240_Replace_title'] = 'Ersetzen in Beiträgen'; // admin_replace.php

// Forum
$lang['1200_Forums'] = 'Forum Admin'; // admin_forum_prune.php, admin_forumauth_list.php, admin_forums.php, admin_forums_extend.php, admin_prune_overview.php, admin_topic_shadow.php
$lang['100_Manage'] = 'Verwaltung'; // admin_forums.php
$lang['110_Manage_extend'] = 'Sync. Verwaltung'; // admin_forums_extend.php
$lang['120_Permissions_List'] = 'Berechtigungsliste'; // admin_forumauth_list.php
$lang['122_Permissions_Adv'] = 'Berechtigungen ADV'; // admin_forumauth_adv.php
$lang['125_Permissions_Forum'] = 'Berechtigungen'; // admin_forumauth.php
$lang['130_Prune'] = 'Autom. Löschen'; // admin_forum_prune.php
$lang['140_Prune_Overview'] = 'Auto-Löschen Übersicht'; // admin_prune_overview.php
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
$lang['120_Ranks'] = 'Benutzerränge'; // admin_ranks.php
$lang['130_Userlist'] = 'Benutzerliste'; // admin_userlist.php
$lang['140_Email_List'] = 'E-Mail-Liste'; // admin_email_list.php
$lang['150_Private_Messages'] = 'Private Nachrichten'; // admin_priv_msgs.php
$lang['160_Account_active'] = 'Aktive Benutzer'; // admin_account.php
$lang['170_Account_inactive'] = 'Inaktive Benutzer'; // admin_account.php
$lang['180_Add_New_User'] = 'Benutzer anlegen'; // admin_user_register.php
$lang['190_Prune_users'] = 'Benutzer löschen'; // admin_prune_users.php
$lang['200_Disallow'] = 'Benutzernamen verbieten'; // admin_disallow.php
$lang['210_Ban_Management'] = 'Benutzer sperren'; // admin_user_ban.php
$lang['220_Bantron'] = 'Bantron'; // admin_user_bantron.php
$lang['250_Postcount_Config'] = 'Beitragszähler anpassen'; // admin_postcount.php
$lang['260_CPF_Add'] = 'Profilfeld hinzufügen'; // admin_profile_fields.php
$lang['270_CPF_Edit'] = 'Profilfeld bearbeiten'; // admin_profile_fields.php
$lang['280_User_Search'] = 'Erweiterte Benutzersuche'; // admin_user_search.php
$lang['290_Poll_Results'] = 'Umfrageergebnisse'; // admin_voting.php
$lang['300_Picscount_Config'] = 'Bildzähler Sync'; // admin_postcount.php

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
$lang['1900_Attachments'] = 'Dateianhänge'; // admin_attach_cp.php, admin_attachments.php, admin_extensions.php
$lang['100_Control_Panel'] = 'Kontrollzentrum'; // admin_attach_cp.php
$lang['110_Att_Manage'] = 'Einstellungen'; // admin_attachments.php
$lang['120_Quota_limits'] = 'Quota Grenzen'; // admin_attachments.php
$lang['130_Shadow_attachments'] = 'Versteckte Anhänge'; // admin_attachments.php
$lang['140_Sync_attachments'] = 'Anhänge Synchronisieren'; // admin_attachments.php
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
$lang['120_Add_new'] = 'Link Hinzufügen'; // admin_links.php
$lang['130_Link_Manage'] = 'Linkverwaltung'; // admin_links.php

// Album
$lang['2200_Photo_Album'] = 'Foto-Galerie'; // admin_album_auth.php, admin_album_cat.php, admin_album_config_extended.php
$lang['110_Album_Config'] = 'Konfiguration'; // admin_album_config_extended.php
$lang['120_Album_Categories'] = 'Kategorieverwaltung'; // admin_album_cat.php
$lang['130_Album_Permissions'] = 'Berechtigungen'; // admin_album_auth.php
$lang['140_Personal_Galleries'] = 'Persönliche Foto-Galerien'; // admin_album_personal.php

// FAQ
$lang['2300_FAQ'] = 'FAQ &amp; Regeln'; // admin_faq_editor.php
$lang['110_FAQ_BBCode'] = 'BBCode-FAQ'; // admin_faq_editor.php
$lang['120_FAQ_Board'] = 'Seiten-FAQ'; // admin_faq_editor.php
$lang['130_FAQ_Rules'] = 'Seiten-Regeln'; // admin_faq_editor.php

// INFO
$lang['2400_INFO'] = 'Info'; // admin_logs.php, admin_phpinfo.php, admin_gd_info.php, admin_referers.php, admin_google_bot_detector.php
$lang['110_Actions_LOG'] = 'Aktionen Log'; // admin_logs.php
$lang['120_PHP_INFO'] = 'PHP Info'; // admin_phpinfo.php
$lang['130_GD_Info'] = 'GD Info'; // admin_gd_info.php
$lang['140_HTTP_REF'] = 'HTTP Referers'; // admin_referers.php
$lang['150_Google_BOT'] = 'Google Bot Detektor'; // admin_google_bot_detector.php

// STATS
$lang['2500_STATS'] = 'Statistik'; // admin_statistics.php

// CRACKER/TRACKER
$lang['2600_CRACKERTRACKER'] = 'Cracker Tracker'; // admin_cracker_tracker.php

// Plugins
$lang['3000_Plugins'] = 'Plugins'; // admin_plugins.php
$lang['100_Plugins_Modules'] = 'Plugins Module'; // admin_plugins.php

// Cash
$lang['3100_CASH'] = 'Cash / Points'; // admin_cash.php
$lang['110_Cash_Admin'] = 'Cash Management'; // admin_cash.php
$lang['120_Cash_Help'] = 'Hilfe'; // admin_cash.php

// Activity
$lang['3200_ACTIVITY'] = 'Activity / Spiele'; // admin_activity.php, admin_ina_ban.php, admin_ina_bulk_add.php, admin_ina_category.php, admin_ina_disable.php, admin_ina_in_un.php, admin_ina_mass.php, admin_ina_xtras.php
$lang['110_Configuration'] = 'Konfiguration'; // admin_activity.php
$lang['120_Add_Game'] = 'Spiel hinzufügen'; // admin_activity.php
$lang['130_Edit_Games'] = 'Spiel bearbeiten'; // admin_activity.php
$lang['140_User_Ban'] = 'Benutzer bannen'; // admin_ina_ban.php
$lang['150_Bulk_Add_Games'] = 'Bulk Add Games'; // admin_ina_bulk_add.php
$lang['160_Category'] = 'Kategorien-Einstellungen'; // admin_ina_category.php
$lang['170_Char_Settings'] = 'Chars Settings'; // admin_ina_char.php
$lang['180_Hide_Show_Games'] = 'Zeige/Verstecke Spiel'; // admin_ina_disable.php
$lang['190_DB_Adjustments'] = 'DB Adjustments'; // admin_ina_in_un.php
$lang['200_Mass_Change'] = 'Mass Configuration'; // admin_ina_mass.php
$lang['210_Scores_Editor'] = 'Hi-Scores bearbeiten'; // admin_ina_scores.php
$lang['220_Xtras'] = 'Extra Einstellungen'; // admin_ina_xtras.php
$lang['230_Check_Games'] = 'Spiele-Liste'; // admin_ina_xtras.php

// ####################### [ ACP Navigation END ] #######################

?>