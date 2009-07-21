<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_dl_help.php 33 2009-05-02 16:34:07Z TheSteffen $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* (c) 2005 oxpus (Karsten Ude) <webmaster@oxpus.de> http://www.oxpus.de
* (c) hotschi / demolition fabi / oxpus
* TheSteffen
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
/*
* no help found?
*/
	'Dl_no_help_aviable' => 'Es ist f�r diese Option keine Hilfe verf�gbar',

/*
* title of help popup
*/
	'HELP_TITLE' => 'Download MOD Online Hilfe',

/*
* general configuration
*/
	'HELP_Dl_delay_auto_traffic' => 'Gib hier die Anzahl der Tage ein, nach denen ein neuer Benutzer den ersten automatischen Traffic erh�lt.<br />Der Zeitraum beginnt mit dem Registrierungsdatum.<br />Gib hier 0 ein, um diese Verz�gerung zu deaktivieren.',
	'HELP_Dl_delay_post_traffic' => 'Gib hier die Anzahl der Tage ein, nach denen ein neuer Benutzer den ersten Traffic f�r erstellte Beitr�ge erh�lt.<br />Der Zeitraum beginnt mit dem Registrierungsdatum.<br />Gib hier 0 ein, um diese Verz�gerung zu deaktivieren.',
	'HELP_DL_edit_time' => 'Trage hier die Anzahl Tage ein, die ein ge�nderter Download markiert bleibt.<br />Gib 0 ein, um diese Funktion abzuschalten.',
	'HELP_Dl_guest_stats_show' => 'Diese Option inkludiert oder exkludiert die Statistikdaten �ber Gastaktivit�ten in den �ffentlichen Kategoriestatistiken.<br />Das Script blendet die Daten dabei nur aus, erhebt aber weiterhin alle Daten.<br />Das ACP Statistiktool zeigt dazu immer die kompletten Statistikdaten an.',
	'HELP_Dl_method' => 'Die Methode "alt" sendet die Datei zum Webclient wie sie ist. Diese Methode ist kompatibel zu den meisten Umgebungen, zeigt aber nicht die wirkliche Dateigr��e w�hrend des Downloads an. Damit kann der Browser des Benutzers auch nicht die Dauer des Downloads errechnen.<br />Die Methode "neu" zeigt hingegen die echte Dateigr��e an, kann aber Fehler verursachen.<br />Benutze die Methode "alt", wenn du Probleme mit der neuen Downloadmethode hast.<br />Sollten alle Stricke rei�en und sehr gro�e Dateien nicht heruntergeladen werden k�nnen, so klicke "direkt" an. Mit dieser Methode werden Downloads, die gr��er als das aktuell eingestellte Download Limit von PHP sind, direkt verlinkt, um sie ohne Umwege herunterladen zu k�nnen.',
	'HELP_Dl_method_quota' => 'Trage hier die Dateigr��e ein, ab der die Chunked File Read Funktion f�r gro�e Dateien verwendet werden soll. Dieses wird nur f�r die Methode "neu" verwendest.<br />Unterhalb dieser Grenze wird die Datei mittels readfile(); ausgelesen und damit an einem St�ck an den Browser des Benutzers geschickt.',
	'HELP_DL_new_time' => 'Trage hier die Anzahl Tage ein, die ein Download nach dem hinzuf�gen als neu markiert bleibt.<br />Trage 0 ein, um diese Funktion abzuschalten.',
	'HELP_Download_path' => 'Dieses ist der relative Pfad unterhalb deines Icy Phoenix Root Ordners f�r die Verwaltung der Downloads.<br />Nach der Neuinstallation dieses Paketes ist hier "downloads/" eingestellt.<br />Ber�cksichtige bei der Umbenennung dieses Ordners die Gro�- und Kleinschreibung, wenn du unter Unix/Linux arbeitest.<br />Wichtig ist der Slash am Ende des Ordnernamens, f�ge jedoch keinen Slash am Anfang hinzu.<br />Auch m�ssen dieser und alle enthaltenen Unterordner die Rechte CHMOD 777 haben, damit alle Funktionen korrekt arbeiten.<br />Unterhalb dieses Ordners ist auch mindestens ein weiterer Ordner anzulegen, der die Dateien physisch beinhaltet.<br />Empfohlen wird zumindest ein Ordner je inhaltlich passender Kategoriegruppe.<br />Dieser Ordner ist dann mit der gleichen Mimik wie auch der Hauptordner als Pfad in den Kategorien einzutragen, allerdings ohne diesen Hauptordner (siehe dazu auch die Hilfe in der Kategorieverwaltung).<br />Du kannst die Unterordner mit einem FTP Client oder mit der Toolbox (siehe Link dahin oben rechts auf dieser Seite) anlegen.',
	'HELP_Dl_thumb_max_size' => 'Gib  0 als Dateigr��e an, um Thumbnails in allen Kategorien abzuschalten.<br />Wenn du Thumbnails erlaubst, dann gib in der n�chsten Einstellung auch sinnvolle Bildma�e an, die die Thumbnails maximal haben d�rfen.<br />Werden Thumbnails deaktiviert, zeigen die Download Details bestehende Thumbnails ebenfalls nicht mehr an.',
	'HELP_Dl_use_ext_blacklist' => 'Wenn du die Blackliste aktivierst, werden die eingetragenen Dateiendungen beim Hochladen oder Bearbeiten eines Downloads blockiert.',
	'HELP_Dl_enable_post_traffic' => 'Gib mit den folgenden beiden Optionen den Traffic an, den Benutzer erhalten, wenn die ein neues Topic erstellen oder darin antworten, bzw. zitieren.',
	'HELP_Dl_limit_desc_on_index' => 'Schneidet die Download Beschreibungen in den Kategorien nach der hier angegebene Anzahl Zeichen ab.<br />Gib 0 an, um diese Funktion zu deaktivieren.',
	'HELP_Dl_prevent_hotlink' => 'Aktiviere diese Option, wenn du Links zum direkten Download au�er aus den Download Details unterbinden willst.<br />Diese Option richtet <b>keinen</b> Verzeichnisschutz ein!',
	'HELP_Dl_user_traffic_once' => 'W�hle, ob Downloads den Benutzer nur einmal Traffic abziehen sollen und danach nicht mehr erneut.<br /><b>Beachte:</b><br />Diese Option �ndert nicht den Status des Downloads selber!',
	'HELP_Dl_edit_own_downloads' => 'Wenn diese Option eingeschaltet wird, kann jeder Benutzer seine eigenen hochgeladenen Dateien bearbeiten, ohne selber Administrator oder Download Moderator zu sein.<br />L�schen, verschieben und sperren kann die Downloads dann aber weiterhin nur ein Administrator oder Download Moderator.',
	'HELP_Dl_shorten_extern_links' => 'Gib die L�nge des angezeigten externen Download Links an.<br />Je nach L�nge wird der Link entweder in der Mitte oder von rechts beginnend gek�rzt.<br />Lass dieses Feld leer oder gib 0 ein, um diese Funktion abzuschalten.',
	'HELP_Dl_show_footer_legend' => 'Diese Option schaltet die Legende mit den Icons f�r die unterschiedlichen Download Statistik im Fu�bereich der Downloads ein oder aus.<br />Die Icons bei den Downloads selber werden dadurch nicht beeinflusst.',
	'HELP_Dl_show_footer_stat' => 'Diese Option schaltet die Statistikzeilen im Fu�bereich des Download MODs ein und aus.<br />Die Statistik wird weiterhin Daten sammeln, selbst wenn du sie ausschaltest.',
	'HELP_Dl_show_real_filetime' => 'Hiermit wird der wirkliche Zeitpunkt der letzten �nderung an den Download Dateien in den jeweiligen Details angezeigt.<br />Dieses ist die genaueste Angabe, selbst dann, wenn Dateien per FTP hochgeladen oder mehrfach ge�ndert wurden, dieses aber nicht protokolliert wurde.',
	'HELP_Dl_visual_confirmation' => 'Aktiviere diese Option, um Benutzer einen angezeigten 5stelligen Best�tigungscode eingeben zulassen, damit der Download der Datei zugelassen wird.<br />Wenn der Benutzer keinen Code eingegeben hat oder der Code falsch ist, wird der MOD nur eine Meldung anzeigen und den Download nicht freigeben.<br />Ist diese Option abgeschaltet, muss der Benutzer keinen Code eingeben und kann direkt aus den Details die Dateien herunterladen.',
	'HELP_Dl_report_broken' => 'Schalte die M�glichkeit an oder aus, defekte Downloads zu melden.<br />Wenn du dieses auf "nicht f�r G�ste" einstellst, k�nnen nur registrierte Benutzer defekte Downloads melden.',
	'HELP_Dl_report_broken_lock' => 'Wenn diese Option aktiv ist, wird der Download gesperrt, solange er als defekt gemeldet gilt.<br />Dabei wird der Download Button versteckt und kein Benutzer kann diese Datei herunterladen, bis sie von einem Administrator oder Download Moderator wieder entsperrt wurde.',
	'HELP_Dl_report_broken_message' => 'Wenn ein Download als defekt gemeldet wurde, erscheint eine entsprechende Nachricht.<br />Ist diese Option aktiviert, erscheint diese Nachricht nur, wenn der Download auch gleichzeitig gesperrt wurde.<br />In dem Fall dann nicht unter, sondern anstelle des Download Buttons.',
	'HELP_Dl_report_broken_vc' => 'Aktiviert die visuelle Best�tigung, wenn ein Benutzer einen Download als defekt melden will.<br />Nur, wenn der Code dann korrekt angegeben wurde, wird die Meldung gespeichert und den Administratoren, bzw. Download Moderatoren eine Nachricht hierzu gesendet.',
	'HELP_Dl_Links_per_page' => 'Hiermit wird eingestellt, wie viele Downloads in den Kategorien und der ACP Statistik je angezeigter Seite aufgelistet werden.<br />In der Hackliste und in der Gesamt�bersicht wird hierzu die Boardeinstellung "Themen je Seite" verwendet.',
	'HELP_Number_recent_dl_on_portal' => 'Die Anzahl letzter Downloads, die der Benutzer auf dem Portal sieht.<br />Dabei wird die letzte �nderungszeit der Downloads verwendet, so dass auch �ltere Downloads wieder ganz oben auf der Liste stehen k�nnen.',
	'HELP_DL_posts' => 'Jeder Benutzer, auch jeder Administrator und Download Moderator, muss mindestens diese Anzahl Beitr�ge gepostet haben, um in der Lage zu sein, nicht freie Downloads herunterladen zu k�nnen.<br />Es wird dazu dringend empfohlen einen Anti Spam MOD zu installieren, um Spammern Einhalt zu gebieten.<br />Gib hier 0 ein, um diese Funktion abzuschalten.<br />Diese Einstellung ist empfehlenswert f�r noch junge Boards.',

	'HELP_Dl_physical_quota' => 'Das gesamte physische Limit, die der MOD zum Speichern und Verwalten der Downloads verwenden darf.<br />Wenn dieses Limit erreicht ist, k�nnen neue Download nur noch hinzugef�gt werden, wenn sie per FTP Client hochgeladen und im ACP mit der Dateiverwaltung hinzugef�gt werden.',
	'HELP_Dl_overall_traffic' => 'Das Limit des gesamten Traffics f�r alle Downloads und, sofern eingestellt, auch Uploads, der im aktuellen Monat nicht �berschritten werden darf.<br />Wenn dieses Limit erreicht ist, wird jeder Download markiert und gesperrt.<br />Uploads werden dann, je nach Einstellung, ebenfalls nicht mehr m�glich sein.',
	'HELP_Dl_newtopic_traffic' => 'F�r jedes neue Topic, das gepostet wird, bekommt der Autor den hier eingestellten Traffic auf seinem Konto gutgeschrieben.',
	'HELP_Dl_reply_traffic' => 'Der Benutzer bekommt f�r jede Antwort und jedes Zitat den hier eingestellten Traffic auf seinem Konto gutgeschrieben.',
	'HELP_Dl_stop_uploads' => 'Du kannst mit dieser Option Uploads aktivieren oder g�nzlich deaktivieren.<br />Wenn du dieses deaktivierst, k�nnen nur noch Administratoren Dateien mit dem Uploadformular hochladen.<br />Wenn diese Option aktiviert wird, k�nnen Benutzer nur abh�ngig der Kategorie- und Gruppenbefugnisse Dateien hochladen.',
	'HELP_Dl_upload_traffic_count' => 'Wenn diese Option aktiviert ist, werden auch Uploads vom monatlichen Gesamttraffic abgezogen.<br />Bei Erreichen des Gesamttraffics sind dann Uploads ebenfalls nicht mehr m�glich und neue Downloads k�nnen nur noch mittels FTP Client hochgeladen und im ACP eingebunden werden.',
	'HELP_Dl_thumb_max_dim' => 'Diese Angaben begrenzen die m�gliche Bildgr��e der hochgeladener Thumbnails.<br />Gib hier 0 ein, um Thumbnails zu deaktivieren (nicht empfehlenswert, wenn die Thumbnail Dateigr��e angegeben wurde).<br />Bestehende Thumbnails werden nach �nderungen dieser Angaben weiterhin angezeigt, sofern nicht die Dateigr��e auf 0 gesetzt wurde.',
	'HELP_Dl_disable_email' => 'Mit dieser Option kannst du die Benachrichtigungen per E-Mail f�r neue, bzw. ge�nderte Downloads ein- oder komplett abschalten.<br />Ist diese Funktion eingeschaltet, kann beim Bearbeiten eines Downloads dieses individuell abgeschaltet werden.<br />Benachrichtigt werden bei aktivierter Funktion jedoch nur die Benutzer, die �ber neue, bzw. ge�nderte Downloads eine E-Mail erhalten wollen.<br />Die benutzerbezogenen Einstellungen sind hierf�r in der Download Konfiguration zu finden, die jeder Benutzer im Fu�bereich der Downloads aufrufen kann.',
	'HELP_Dl_disable_popup' => 'Mit dieser Option kannst du Benachrichtigungen mittels Popup oder Board Nachricht im Forum Kopf f�r neue, bzw. ge�nderte Downloads ein- oder komplett abschalten.<br />Ist diese Funktion eingeschaltet, kann beim Bearbeiten eines Downloads dieses individuell abgeschaltet werden.<br />Benachrichtigt werden bei aktivierter Funktion jedoch nur die Benutzer, die �ber neue, bzw. ge�nderte Downloads das Popup/die Board Nachricht aktiviert haben.<br />Die benutzerbezogenen Einstellungen sind hierf�r in der Download Konfiguration zu finden, die jeder Benutzer im Fu�bereich der Downloads aufrufen kann.',
	'HELP_Dl_disable_popup_notify' => 'Wird diese Option eingeschaltet, kann man beim Bearbeiten eines Downloads das Protokolieren der Bearbeitungszeit unterbunden werden.',

	'HELP_Dl_stat_perm' => 'W�hle hier, ab welchem Benutzerlevel die Download Statistiken eingesehen werden darf.<br />Wenn du diese z.B. erst ab Download Moderatoren aktivierst, kann jeder Board Administrator und Download Moderator (NICHT Forum Moderator!) diese Seite �ffnen und ansehen.<br />Beachte, dass diese Seite eine extreme Ladezeit haben kann, so dass empfohlen wird, diese Seite nicht f�r viele zu �ffnen, wenn du ein gr��eres Board betreibst und/oder viele Downloads bereitstellst.',
	'HELP_Dl_hotlink_action' => 'Hier wird eingestellt, wie sich das Download Script verhalten soll, wenn ein Direktlink zum Download abgefangen wurde (siehe letzte Option).<br />Es wird dann entweder eine Meldung angezeigt (verringert die Serverlast) oder zum Download weitergeleitet (erzeugt zus�tzlichen Traffic).',
	'HELP_Dl_use_hacklist' => 'Diese Option schaltet die Hack Liste an oder aus.<br />Wenn sie aktiviert ist, kannst du beim Hinzuf�gen oder Bearbeiten eines Downloads Hack Informationen mit erfassen, um den Download in die Hackliste einzuf�gen.<br />Wenn du die Hack Liste deaktivierst, wird sie komplett vor allen Benutzern versteckt, als w�re sie nicht vorhanden, sie ist aber jederzeit aktivierbar.<br />Beachte, dass alle Hack Informationen verloren gehen, wenn du Dateien nach dem Deaktivieren der Hack Liste bearbeitest.',
	'HELP_Dl_icon_free_for_reg' => 'Diese Option schaltet das wei�e Download Icon (freier Download f�r registrierte Benutzer) ebenfalls f�r G�ste auf wei�.<br />Wenn du diese Option deaktivierst, sehen G�ste hier das rote Icon anstelle des Wei�en.',
	'HELP_Dl_latest_comments' => 'Zeigt die letzten X Kommentare in den Download Details. 0 schaltete diesen Block aus.',
	'HELP_Dl_sort_preform' => 'Mit der Option "Voreinstellung" werden die Downloads f�r alle Benutzer in allen Kategorien gem�� der Sortierung im ACP angezeigt.<br />Mit der Option "Benutzer" kann der jeweiligen Benutzer selber entscheiden, nach welchen Kriterien sortiert wird und ob er diese fest eingestellt oder mit weiteren Auswahlm�glichkeiten haben m�chte.',

/*
* category management
*/
	'HELP_Dl_approve_comments' => 'Wenn du diese Option deaktivierst, m�ssen neue Kommentare zun�chst von einem Download Moderator oder Administrator freigegeben werden, bevor diese angezeigt werden.',
	'HELP_Dl_cat_rules' => 'Diese Regeln werden w�hrend der Kategorieansicht oberhalb der Unterkategorien und Downloads angezeigt.',
	'HELP_Dl_stats_prune' => 'Gib hier die Anzahl der Datens�tze ein, die die Statistik f�r diese Kategorie erreichen darf.<br />Jeder neue Datensatz l�scht dann den �ltesten.<br />Gib hier 0 ein, um das Pruning zu deaktivieren, dadurch w�chst jedoch die Datenbank immer weiter an.',
	'HELP_Dl_cat_traffic' => 'Gib hier den monatlich maximalen Traffic f�r diese Kategorie an.<br />Dieser Traffic erh�ht nicht den Gesamttraffic!<br />Trage hier 0 ein, um die Begrenzung abzuschalten.',
	'HELP_Dl_cat_path' => 'Hier musst du einen existierenden Pfad f�r deine Downloads angeben.<br />Diese Angabe ist der Name eines Subordners unterhalb des Hauptordners (z. B. downloads/), den du in der allgemeinen Konfiguration angegeben hast.<br />Trage hier nur den Ordnernamen des Subordners mit einem Slash am Ende ein.<br />Zum Beispiel existiert der Ordner "downloads/mods/" den du als Kategoriepfad "mods/" angeben musst.<br />Wenn du dieses Formular absendest, wird der Ordner �berpr�ft. Stelle daher wirklich sicher, dass der Subordner bereits existiert!<br />Wenn der Subordner unterhalb eines anderen Subordners vorhanden ist, dann gib den kompletten Pfad der Hierarchie an.<br />Z. B. wird dann aus "downloads/mods/misc/" der Kategoriepfad "mods/misc/".<br />Versichere Dich, dass jeder Subordner die Zugriffsrechte CHMOD 777 besitzt und achte auf Gro�- und Kleinschreibung der Ordnernamen, wenn du Unix/Linux verwendest.',
	'HELP_Dl_cat_name' => 'Dies ist der Name der Kategorie, der �berall angezeigt wird.<br />Verwende m�glichst keine Sonderzeichen, um keine schwerer zu lesenden Eintr�ge in der Jumpbox zu generieren.',

	'HELP_Dl_cat_description' => 'Eine kurze Beschreibung f�r diese Kategorie.<br />BBCodes sind hier nicht verf�gbar.<br />Diese Beschreibung wird auf dem Downloads Index und in den Subkategorien angezeigt.',
	'HELP_Dl_cat_parent' => 'Die oberste Ebene oder eine Kategorie, der diese Kategorie zugordnet werden kann.<br />Mit dieser dynamischen Auswahlliste k�nnen hierarchische Strukturen f�r deine Downloads erstellt werden.',
	'HELP_Dl_must_approve' => 'Aktiviere diese Option, um neu hochgeladene Download Dateien freizugeben, bevor sie in dieser Kategorie angezeigt werden.<br />Administratoren und Download Moderatoren erhalten �ber jeden neuen nicht freigegebenen Download eine E-Mail.',
	'HELP_Dl_mod_desc_allow' => 'Aktiviert einen Block f�r MOD Informationen w�hrend dem Hinzuf�gen oder Bearbeiten von Downloads.',
	'HELP_Dl_statistics' => 'Schaltet detailierte Statistiken �ber die Dateien ein.<br />Beachte, dass diese Statistiken zus�tzliche Datenbank Abfragen ben�tigen und Datens�tze in einer separaten Tabelle anlegen.',
	'HELP_Dl_comments' => 'Aktiviert das Kommentarsystem f�r diese Kategorie.<br />Benutzer die du gem�� den nachfolgenden Drop Downs zul�sst, k�nnen Kommentare ansehen und/oder verfassen.<br />Administratoren und Download Moderatoren k�nnen alle Kommentare l�schen und bearbeiten, die Autoren dagegen nur ihren eigenen Texte bearbeiten.',
	'HELP_Dl_thumb_cat' => 'Diese Option l�sst Thumbnails bei den Downloads dieser Kategorie zu.<br />Die Gr��e der Images ist von den Einstellungen in der allgemeinen Konfiguration des MODs abh�ngig.',
	'HELP_Dl_bug_tracker_cat' => 'Aktiviert den Bug Tracker f�r die Downloads dieser Kategorie.<br />Bugs kann dann jeder registrierte Benutzer f�r den betreffenden Download einstellen, ansehen und auch f�r alle anderen Kategorien betrachten, sofern auch dort der Bug Tracker aktiviert wurde.<br />Bearbeiten k�nnen die Eintr�ge nur Administratoren und Board Moderatoren.<br />�ber �nderungen an Bugmeldungen werden dem Urheber betreffende Nachrichten per E-Mail verschickt, ebenso wie an das Teammitglied, welchem ein Bug zugewiesen wurde.',

/*
* file management
*/
	'HELP_Dl_name' => 'Dies ist der Name des Downloads, der �berall angezeigt wird.<br />Verwende m�glichst keine Sonderzeichen, um Fehler bei der Darstellung zu vermeiden.',
	'HELP_Dl_choose_category' => 'W�hle die Kategorie, die den Download beinhalten soll.<br />Die Datei muss sich bereits in dem Ordner befinden, den du in der Kategorieverwaltung f�r die gew�hlte Kategorie angeben hast, bevor du diesen Download speicherst.<br />Andernfalls bekommst du eine Fehlermeldung.',
	'HELP_Dl_file_description' => 'Eine kurze Beschreibung des Downloads.<br />Diese wird auch in der Kategorie angezeigt.<br />BBCodes sind f�r diesen Text nicht verf�gbar.<br />Bitte verfasst einen m�glichst kurzen Text, um beim �ffnen der Kategorie die Ladezeit gering zu halten.',
	'HELP_Dl_files_url' => 'Der Dateiname des Downloads.<br />Gib ihn ohne Pfadangaben und ohne f�hrenden Slash an.<br />Die Datei muss vor dem Speichern bereits im Ordner der Kategorie existieren, sonst wird eine Fehlermeldung angezeigt.<br />Beachte auch verbotene Dateiendungen: Dateien, die hierzu z�hlen, werden abgewiesen.',
	'HELP_Dl_upload_file' => 'Die von deinem Computer hochzuladene Datei.<br />Stelle sicher, dass die Dateigr��e kleiner als die angezeigte Gr��e ist und die Dateierweiterung nicht in der Liste enthalten ist, die du unterhalb dieses Feldes sehen kannst.',
	'HELP_Dl_extern' => 'Aktiviere diese Funktion, wenn du in der obigen Zeile eine URL au�erhalb Deines Servers angeben willst (http://www.beispiel.de/media.mp3).<br />Die Funktion "frei" wird dann bedeutungslos.',
	'HELP_Dl_extern_up' => 'Aktiviere diese Funktion, wenn du in dem nachfolgenden Feld eine URL au�erhalb deines Servers angeben willst (http://www.beispiel.de/media.mp3).<br />Die Funktion "frei" wird dann bedeutungslos.',
	'HELP_Dl_thumb' => 'Dieses Feld kann ein kleines Bild hochladen (beachte die angegebene Dateigr��e und Bildma�e unterhalb dieses Feldes), das in den Download Details angezeigt wird.<br />Wenn bereits ein Thumbnail existiert, kannst du hiermit ein neues hochladen, um das bestehende Bild zu ersetzen.<br />Wenn du das bestehende Thumbnail mit "l�schen" markierst, wird das alte Bild nur entfernt',
	'HELP_Dl_is_free' => 'Aktiviere diese Funktion, wenn der Download unabh�ngig des Kontos f�r alle Benutzer m�glich sein soll.<br />W�hle frei f�r reg. Benutzer, um nur registrierten Benutzern einen freien Download zu erm�glichen.',
	'HELP_Dl_traffic' => 'Maximaler Traffic, welcher durch die Datei erzeugt werden darf.<br>Der Wert 0 deaktiviert die Traffickontrolle',

	'HELP_Dl_approve' => 'Diese Einstellung gibt den Download sofort frei, wenn du dieses Formular absendest.<br />Andernfalls wird dieser Downloads vor den Benutzern versteckt, bis ein Administrator oder Download Moderator den Download freigibt.',
	'HELP_Dl_no_change_edit_time' => 'W�hle diese Option, um die Aktualisierung der Bearbeitungszeit zu unterdr�cken.<br />Dieses betrifft nicht die E-Mail und Popup Benachrichtigung/Board Nachricht.',
	'HELP_Dl_disable_popup_files' => 'W�hle diese Option, um die Popup Benachrichtigung/Board Nachricht zu unterdr�cken.<br />Dieses betrifft nicht die Bearbeitungszeit oder die E-Mail Benachrichtigungen.',
	'HELP_Dl_disable_email_files' => 'W�hle diese Option, um die E-Mail Benachrichtigung zu unterdr�cken.<br />Dieses betrifft nicht die Bearbeitungszeit oder die Popup Benachrichtigung/Board Nachricht.',
	'HELP_Dl_hacklist' => 'Mit dieser Option kannst du den Download zur Hackliste hinzuf�gen (diese muss in der allgemeinen Konfiguration des MODs aktiviert sein), wenn du hier Ja ausw�hlst.<br />Nein f�gt diesen Download nicht zur Hackliste hinzu und Extra Informationen anzeigen stellt diesen Block nur in den Download Details dar.',
	'HELP_Dl_hack_version' => 'Angabe �ber die Version des Downloads.<br />Diese wird nur bei den Downloads angezeigt.<br />Es kann nicht danach gesucht werden.',
	'HELP_Dl_hack_autor' => 'Der Autor der Download Datei.<br />Lasse ihn frei, um die Angabe in den Download Details und der Gesamt�bersicht auszusparen.',
	'HELP_Dl_hack_autor_email' => 'E-Mail-Adresse des Autoren.<br />Wird diese nicht angegeben, l�sst der MOD diese in den Details und in der Gesamt�bersicht ebenfalls aus.',
	'HELP_Dl_hack_autor_website' => 'Webseite des Autoren.<br />Diese URL sollte auf die Webseite, nicht auf die Seite des Downloads verweisen (sind nicht immer die gleichen).<br />Bitte verlinke keine gesch�tzten Seiten oder Seiten mit fragw�rdigen Inhalten.',
	'HELP_Dl_hack_dl_url' => 'Die Seite zum alternativen Download der Datei.<br />Dieses kann die Seite des Autoren sein oder eine andere Alternative sein.<br />Bitte keine Dateien direkt verlinken, wenn der Autor das ausdr�cklich untersagt.',
	'HELP_Dl_mod_desc' => 'Ausf�hrliche Beschreibung zu der hier eingetragenen MOD.<br />In der Beschreibung k�nnen BBCodes und Smilies verwendet werden, Zeilenumbr�che werden ebenfalls ber�cksichtigt.<br />Diese Angaben werden nur in den Download Details angezeigt.',
	'HELP_Dl_mod_list' => 'Aktiviert diesen Block in den Download Details.<br />Wenn diese Option nicht gew�hlt ist, wird der gesamte Block in den Download Details ausgeblendet.',
	'HELP_Dl_mod_require' => 'Angaben, welche weiteren MODs dieser Download ben�tigt, um installiert oder benutzt werden zu k�nnen.<br />Diese Angaben werden nur in den Download Details angezeigt.',
	'HELP_Dl_mod_test' => 'Angabe zur Testumgebung dieses Downloads.<br />Hiermit ist die Forenversion gemeint.<br />Umgesetzt wird dieses als Icy Phoenix X, wobei X hier anzugeben w�re.<br />Diese Angaben werden nur in den Download Details angezeigt.',
	'HELP_Dl_mod_todo' => 'Hier k�nnen die n�chsten T�tigkeiten an der MOD angegeben werden, die geplant sind oder aktuell anstehen.<br />Aus diesen Angaben wird die ToDo-Liste erstellt, die im Fu�bereich der Download aufgerufen werden kann.<br />Mit diesen Angaben kann man anderen Benutzern den Stand der eigenen MODs aufzeigen.<br />Zeilenumbr�che werden hierbei ber�cksichtigt, BBCodes sind hier nicht verf�gbar.<br />Die ToDo-Liste wird auch dann mit diesen Angaben versorgt, wenn der MOD Block nicht aktiviert wurde.',
	'HELP_Dl_mod_warning' => 'Wichtige Hinweise zur MOD, die unbedingt bei der Installation, Benutzung oder im Zusammenspiel mit anderen MODs zu beachten sind.<br />Dieser Text wird farbig hervorgehoben in den Download Details angezeigt (im Original mit roter Schrift).<br />Zeilenumbr�che werden hierbei ber�cksichtigt, BBCodes sind hier nicht verf�gbar.',

	'HELP_Dl_user_download_limit_flag' => 'Diese Option l�sst dich eine bestimmte Anzahl an Downloads festlegen die jeder Benutzer pro Monat t�tigen kann. z.B.: Wenn du diese Funktion aktivierst und "Maximale Anzahl an Downloads pro Monat" auf 30 setzt, kann jeder Benutzer pro Monat maximal 30 Downloads t�tigen. Diese Beschr�nkung gilt nicht f�r Administratoren und Moderatoren.',
	'HELP_Dl_user_download_limit' => 'Bestimme hier die maximale Anzahl an Downloads die jeder Benutzer t�tigen kann pro Monat. Damit dieses Limit wirksam wird muss es mit der Option "Begrenze die Anzahl der Downloads pro Monat" aktiviert werden. Diese Beschr�nkung gilt nicht f�r Administratoren und Moderatoren.',
	)
);

?>