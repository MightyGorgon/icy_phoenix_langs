<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_dl_help.php 72 2009-11-29 21:23:08Z Mighty Gorgon $
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
	'Dl_no_help_aviable' => 'Für diese Option ist keine Hilfe verfügbar.',

/*
* title of help popup
*/
	'HELP_TITLE' => 'Download MOD Online Hilfe',

/*
* general configuration
*/
	'HELP_Dl_delay_auto_traffic' => 'Gib hier die Anzahl Tage ein, nach denen ein neuer User den ersten automatischen Traffic erhält.<br />Der Zeitraum beginnt mit dem Registrierungsdatum.<br />Gib hier 0 ein, um diese Verzögerung zu deaktivieren.',
	'HELP_Dl_delay_post_traffic' => 'Gib hier die Anzahl Tage ein, nach denen ein neuer User den ersten Traffic für erstellte Beiträge erhält.<br />Der Zeitraum beginnt mit dem Registrierungsdatum.<br />Gib hier 0 ein, um diese Verzögerung zu deaktivieren.',
	'HELP_DL_edit_time' => 'Trage hier die Anzahl Tage ein, die ein geänderter Download markiert bleibt.<br />Gib 0 ein, um diese Funktion abzuschalten.',
	'HELP_Dl_guest_stats_show' => 'Diese Option inkludiert oder exkludiert die Statistikdaten über Gastaktivitäten in den öffentlichen Kategoriestatistiken.<br />Das Script blendet die Daten dabei nur aus, erhebt aber weiterhin alle Daten.<br />Das ACP Statistiktool zeigt dazu immer die kompletten Statistikdaten an.',
	'HELP_Dl_method' => 'Die Methode &quot;alt&quot; sendet die Datei zum Webclient wie sie ist. Diese Methode ist kompatibel zu den meisten Umgebungen, zeigt aber nicht die wirkliche Dateigröße während des Downloads an. Damit kann der Browser des Users auch nicht die Dauer des Downloads errechnen.<br />Die Methode &quot;neu&quot; zeigt hingegen die echte Dateigröße an, kann aber Fehler verursachen.<br />Benutze die Methode &quot;alt&quot;, wenn Du Probleme mit der neuen Downloadmethode hast.<br />Sollten alle Stricke reißen und sehr große Dateien nicht heruntergeladen werden können, so klicke &quot;direkt&quot; an. Mit dieser Methode werden Downloads, die Größer als das aktuell eingestellte Download Limit von PHP sind, direkt verlinkt, um sie ohne Umwege herunterladen zu können.',
	'HELP_Dl_method_quota' => 'Trage hier die Dateigröße ein, ab der die Chunked File Read Funktion für große Dateien verwendet werden soll. Dieses wird nur für die Methode &quot;neu&quot; verwendest.<br />Unterhalb dieser Grenze wird die Datei mittels readfile(), ausgelesen und damit an einem Stück an den Browser des Users geschickt.',
	'HELP_DL_new_time' => 'Trage hier die Anzahl Tage ein, die ein Download nach dem hinzufügen als neu markiert bleibt.<br />Trage 0 ein, um diese Funktion abzuschalten.',
	'HELP_Download_path' => 'Dieses ist der relative Pfad unterhalb Deines phpBB Root Ordners für die Verwaltung der Downloads.<br />Nach der Neuinstallation dieses Paketes ist hier &quot;dl_mod/downloads/&quot; eingestellt.<br />Berücksichtige bei der Umbenennung dieses Ordners die Groß- und Kleinschreibung, wenn Du unter Unix/Linux arbeitest.<br />Wichtig ist der Slash am Ende des Ordnernamens, füge jedoch keinen Slash am Anfang hinzu.<br />Auch müssen dieser und alle enthaltenen Unterordner die Rechte CHMOD 777 haben, damit alle Funktionen korrekt arbeiten.<br />Unterhalb dieses Ordners ist auch mindestens ein weiterer Ordner anzulegen, der die Dateien physisch beinhaltet.<br />Empfohlen wird zumindest ein Ordner je inhaltlich passender Kategoriegruppe.<br />Dieser Ordner ist dann mit der gleichen Mimik wie auch der Hauptordner als Pfad in den Kategorien einzutragen, allerdings ohne diesen Hauptordner (siehe dazu auch die Hilfe in der Kategorieverwaltung).<br />Du kannst die Unterordner mit einem FTP Client oder mit der Toolbox (siehe Link dahin oben rechts auf dieser Seite) anlegen.',
	'HELP_Dl_thumb_max_size' => 'Gib  0 als Dateigröße an, um Thumbnails in allen Kategorien abzuschalten.<br />Wenn Du Thumbnails erlaubst, dann gib in der nächsten Einstellung auch sinnvolle Bildmaße an, die die Thumbnails maximal haben dürfen.<br />Werden Thumbnails deaktiviert, zeigen die Download Details bestehende Thumbnails ebenfalls nicht mehr an.',
	'HELP_Dl_use_ext_blacklist' => 'Wenn Du die Blackliste aktivierst, werden die eingetragenen Dateiendungen beim Hochladen oder Bearbeiten eines Downloads blockiert.',
	'HELP_Dl_enable_post_traffic' => 'Gib mit den folgenden beiden Optionen den Traffic an, den Benutzer erhalten, wenn die ein neues Topic erstellen oder darin antworten, bzw. zitieren.',
	'HELP_Dl_limit_desc_on_index' => 'Schneidet die Download Beschreibungen in den Kategorien nach der hier angegebene Anzahl Zeichen ab.<br />Gib 0 an, um diese Funktion zu deaktivieren.',
	'HELP_Dl_prevent_hotlink' => 'Aktiviere diese Option, wenn Du Links zum direkten Download ausser aus den Download Details unterbinden willst.<br />Diese Option richtet <b>keinen</b> Verzeichnisschutz ein!',
	'HELP_Dl_user_traffic_once' => 'Wähle, ob Downloads den Benutzer nur einmal Traffic abziehen sollen und danach nicht mehr erneut.<br /><b>Beachte:</b><br />Diese Option ändert nicht den Status des Downloads selber!',
	'HELP_Dl_edit_own_downloads' => 'Wenn diese Option eingeschaltet wird, kann jeder Benutzer seine eigenen hochgeladenen Dateien bearbeiten, ohne selber Administrator oder Download Moderator zu sein.<br />Löschen, verschieben und sperren kann die Downloads dann aber weiterhin nur ein Administrator oder Download Moderator.',
	'HELP_Dl_shorten_extern_links' => 'Gib die Länge des angezeigten externen Download Links an.<br />Je nach Länge wird der Link entweder in der Mitte oder von rechts beginnend gekürzt.<br />Lass dieses Feld leer oder gib 0 ein, um diese Funktion abzuschalten.',
	'HELP_Dl_show_footer_legend' => 'Diese Option schaltet die Legende mit den Icons für die unterschiedlichen Download Stati im Fußbereich der Downloads ein oder aus.<br />Die Icons bei den Downloads selber werden dadurch nicht beeinflusst.',
	'HELP_Dl_show_footer_stat' => 'Diese Option schaltet die Statistikzeilen im Fußbereich des Download MODs ein und aus.<br />Die Statistik wird weiterhin Daten sammeln, selbst wenn Du sie ausschaltest.',
	'HELP_Dl_show_real_filetime' => 'Hiermit wird der wirkliche Zeitpunkt der letzten Änderung an den Download Dateien in den jeweiligen Details angezeigt.<br />Dieses ist die genaueste Angabe, selbst dann, wenn Dateien per FTP hochgeladen oder mehrfach geändert wurden, dieses aber nicht protokolliert wurde.',
	'HELP_Dl_visual_confirmation' => 'Aktiviere diese Option, um Benutzer einen angezeigten 5stelligen Bestätigungscode eingeben zulassen, damit der Download der Datei zugelassen wird.<br />Wenn der Benutzer keinen Code eingegeben hat oder der Code falsch ist, wird der MOD nur eine Meldung anzeigen und den Download nicht freigeben.<br />Ist diese Option abgeschaltet, muss der Benutzer keinen Code eingeben und kann direkt aus den Details die Dateien herunterladen.',
	'HELP_Dl_report_broken' => 'Schalte die Möglichkeit an oder aus, defekte Downloads zu melden.<br />Wenn Du dieses auf &quot;nicht für Gäste&quot; einstellst, können nur registrierte Benutzer defekte Downloads melden.',
	'HELP_Dl_report_broken_lock' => 'Wenn diese Option aktiv ist, wird der Download gesperrt, solange er als defekt gemeldet gilt.<br />Dabei wird der Download Button versteckt und kein Benutzer kann diese Datei herunterladen, bis sie von einem Administrator oder Download Moderator wieder entsperrt wurde.',
	'HELP_Dl_report_broken_message' => 'Wenn ein Download als defekt gemeldet wurde, erscheint eine entsprechende Nachricht.<br />Ist diese Option aktiviert, erscheint diese Nachricht nur, wenn der Download auch gleichzeitig gesperrt wurde.<br />In dem Fall dann nicht unter, sondern anstelle des Download Buttons.',
	'HELP_Dl_report_broken_vc' => 'Aktiviert die visuelle Bestätigung, wenn ein Benutzer einen Download als defekt melden will.<br />Nur, wenn der Code dann korrekt angegeben wurde, wird die Meldung gespeichert und den Administratoren, bzw. Download Moderatoren eine Nachricht hierzu gesendet.',
	'HELP_Dl_Links_per_page' => 'Hiermit wird eingestellt, wie viele Downloads in den Kategorien und der ACP Statistik je angezeigter Seite aufgelistet werden.<br />In der Hackliste und in der Gesamtübersicht wird hierzu die Boardeinstellung &quot;Themen je Seite&quot; verwendet.',
	'HELP_Number_recent_dl_on_portal' => 'Die Anzahl letzter Downloads, die der Benutzer auf dem Portal sieht.<br />Dabei wird die letzte Änderungszeit der Downloads verwendet, so dass auch ältere Downloads wieder ganz oben auf der Liste stehen können.',
	'HELP_DL_posts' => 'Jeder Benutzer, auch jeder Administrator und Download Moderator, muss mindestens diese Anzahl Beiträge gepostet haben, um in der Lage zu sein, nicht freie Downloads herunterladen zu können.<br />Es wird dazu dringend empfohlen einen Anti Spam MOD zu installieren, um Spammern Einhalt zu gebieten.<br />Gib hier 0 ein, um diese Funktion abzuschalten.<br />Diese Einstellung ist empfehlenswert für noch junge Boards.',

	'HELP_Dl_physical_quota' => 'Das gesamte physische Limit, die der MOD zum Speichern und Verwalten der Downloads verwenden darf.<br />Wenn dieses Limit erreicht ist, können neue Download nur noch hinzugefügt werden, wenn sie per FTP Client hochgeladen und im ACP mit der Dateiverwaltung hinzugefügt werden.',
	'HELP_Dl_overall_traffic' => 'Das Limit des gesamten Traffics für registrierte Benutzer für alle Downloads und, sofern eingestellt, auch Uploads, der im aktuellen Monat nicht überschritten werden darf.<br />Wenn dieses Limit erreicht ist, wird jeder Download markiert und gesperrt.<br />Uploads werden dann, je nach Einstellung, ebenfalls nicht mehr möglich sein.',
	'HELP_Dl_newtopic_traffic' => 'Für jedes neue Topic, das gepostet wird, bekommt der Autor den hier eingestellten Traffic auf seinem Konto gutgeschrieben.',
	'HELP_Dl_reply_traffic' => 'Der Benutzer bekommt für jede Antwort und jedes Zitat den hier eingestellten Traffic auf seinem Konto gutgeschrieben.',
	'HELP_Dl_stop_uploads' => 'Du kannst mit dieser Option Uploads aktivieren oder gänzlich deaktivieren.<br />Wenn Du dieses deaktivierst, können nur noch Administratoren Dateien mit dem Uploadformular hochladen.<br />Wenn diese Option aktiviert wird, können Benutzer nur abhängig der Kategorie- und Gruppenbefugnisse Dateien hochladen.',
	'HELP_Dl_upload_traffic_count' => 'Wenn diese Option aktiviert ist, werden auch Uploads vom monatlichen Gesamttraffic abgezogen.<br />Bei Erreichen des Gesamttraffics sind dann Uploads ebenfalls nicht mehr möglich und neue Downloads können nur noch mittels FTP Client hochgeladen und im ACP eingebunden werden.',
	'HELP_Dl_thumb_max_dim' => 'Diese Angaben begrenzen die mögliche BildGröße der hochgeladener Thumbnails.<br />Gib hier 0 ein, um Thumbnails zu deaktivieren (nicht empfehlenswert, wenn die Thumbsnail DateGröße angegeben wurde).<br />Bestehende Thumbnails werden nach Änderungen dieser Angaben weiterhin angezeigt, sofern nicht die Dateigröße auf 0 gesetzt wurde.',
	'HELP_Dl_disable_email' => 'Mit dieser Option kannst Du die Benachrichtigungen per E-Mail für neue, bzw. geänderte Downloads ein- oder komplett abschalten.<br />Ist diese Funktion eingeschaltet, kann beim Bearbeiten eines Downloads dieses individuell abgeschaltet werden.<br />Benachrichtigt werden bei aktivierter Funktion jedoch nur die User, die über neue, bzw. geänderte Downloads eine E-Mail erhalten wollen.<br />Die benutzerbezogenen Einstellungen sind hierfür in der Download Konfiguration zu finden, die jeder Benutzer im Fußbereich der Downloads aufrufen kann.',
	'HELP_Dl_disable_popup' => 'Mit dieser Option kannst Du Benachrichtigungen mittels Popup oder Board Nachricht im Forum Kopf für neue, bzw. geänderte Downloads ein- oder komplett abschalten.<br />Ist diese Funktion eingeschaltet, kann beim Bearbeiten eines Downloads dieses individuell abgeschaltet werden.<br />Benachrichtigt werden bei aktivierter Funktion jedoch nur die User, die über neue, bzw. geänderte Downloads das Popup/die Board Nachricht aktiviert haben.<br />Die benutzerbezogenen Einstellungen sind hierfür in der Download Konfiguration zu finden, die jeder Benutzer im Fußbereich der Downloads aufrufen kann.',
	'HELP_Dl_disable_popup_notify' => 'Wird diese Option eingeschaltet, kann man beim Bearbeiten eines Downloads das Protokolieren der Bearbeitungszeit unterbunden werden.',

	'HELP_Dl_stat_perm' => 'Wähle hier, ab welchem Userlevel die Download Statistiken eingesehen werden darf.<br />Wenn Du diese z. B. erst ab Download Moderatoren aktivierst, kann jeder Board Administrator und Download Moderator (NICHT Forum Moderator!) diese Seite öffnen und ansehen.<br />Beachte, dass diese Seite eine extreme Ladezeit haben kann, so dass empfohlen wird, diese Seite nicht für viele zu öffnen, wenn Du ein größeres Board betreibst und/oder viele Downloads bereitstellst.',
	'HELP_Dl_hotlink_action' => 'Hier wird eingestellt, wie sich das Download Script verhalten soll, wenn ein Direktlink zum Download abgefangen wurde (siehe letzte Option).<br />Es wird dann entweder eine Meldung angezeigt (verringert die Serverlast) oder zum Download weitergeleitet (erzeugt zusätzlichen Traffic).',
	'HELP_Dl_use_hacklist' => 'Diese Option schaltet die Hack Liste an oder aus.<br />Wenn sie aktiviert ist, kannst Du beim Hinzufügen oder Bearbeiten eines Downloads Hack Informationen mit erfassen, um den Download in die Hackliste einzufügen.<br />Wenn Du die Hack Liste deaktivierst, wird sie komplett vor allen Benutzern versteckt, als wäre sie nicht vorhanden, sie ist aber jederzeit aktivierbar.<br />Beachte, dass alle Hack Informationen verloren gehen, wenn Du Dateien nach dem Deaktivieren der Hack Liste bearbeitest.',
	'HELP_Dl_icon_free_for_reg' => 'Diese Option schaltet das weiße Download Icon (freier Download für registrierte Benutzer) ebenfalls für Gäste auf weiß.<br />Wenn Du diese Option deaktivierst, sehen Gäste hier das rote Icon anstelle des Weißen.',
	'HELP_Dl_latest_comments' => 'Zeigt die letzten X Kommentare in den Download Details. 0 schaltete diesen Block aus.',
	'HELP_Dl_sort_preform' => 'Mit der Option &quot;Voreinstellung&quot; werden die Downloads für alle Benutzer in allen Kategorien gemäß der Sortierung im ACP angezeigt.<br />Mit der Option &quot;Benutzer&quot; kann der jeweiligen Benutzer selber entscheiden, nach welchen Kriterien sortiert wird und ob er diese fest eingestellt oder mit weiteren Auswahlmöglichkeiten haben möchte.',

/*
* category management
*/
	'HELP_Dl_approve_comments' => 'Wenn Du diese Option deaktivierst, müssen neue Kommentare zunächst von einem Download Moderator oder Administrator freigegeben werden, bevor diese angezeigt werden.',
	'HELP_Dl_cat_rules' => 'Diese Regeln werden während der Kategorieansicht oberhalb der Unterkategorien und Downloads angezeigt.',
	'HELP_Dl_stats_prune' => 'Gib hier die Anzahl der Datensätze ein, die die Statistik für diese Kategorie erreichen darf.<br />Jeder neue Datensatz löscht dann den Ältesten.<br />Gib hier 0 ein, um das Pruning zu deaktivieren, dadurch wächst jedoch die Datenbank immer weiter an.',
	'HELP_Dl_cat_traffic' => 'Gib hier den monatlich maximalen Traffic für diese Kategorie an.<br />Dieser Traffic erhöht nicht den Gesamttraffic!<br />Trage hier 0 ein, um die Begrenzung abzuschalten.',
	'HELP_Dl_cat_path' => 'Hier musst Du einen existierenden Pfad für Deine Downloads angeben.<br />Diese Angabe ist der Name eines Subordners unterhalb des Hauptordners (z. B. &quot;downloads/&quot;), den Du in der allgemeinen Konfiguration angegeben hast.<br />Trage hier nur den Ordnernamen des Subordners mit einem Slash am Ende ein.<br />Zum Beispiel existiert der Ordner &quot;downloads/mods/&quot; den Du als Kategoriepfad &quot;mods/&quot; angeben mußt.<br />Wenn Du dieses Formular absendest, wird der Ordner überprüft. Stelle daher wirklich sicher, dass der Subordner bereits existiert!<br />Wenn der Subordner unterhalb eines anderen Subordners vorhanden ist, dann gib den kompletten Pfad der Hierarchie an.<br />Z. B. wird dann aus &quot;downloads/mods/misc/&quot; der Kategoriepfad &quot;mods/misc/&quot;.<br />Versichere Dich, dass jeder Subordner die Zugriffsrechte CHMOD 777 besitzt und achte auf Groß- und Kleinschreibung der Ordnernamen, wenn Du Unix/Linux verwendest.',
	'HELP_Dl_cat_name' => 'Dies ist der Name der Kategorie, der überall angezeigt wird.<br />Verwende möglichst keine Sonderzeichen, um keine schwerer zu lesenden Einträge in der Jumpbox zu generieren.',

	'HELP_Dl_cat_description' => 'Eine kurze Beschreibung für diese Kategorie.<br />BBCodes sind hier nicht verfügbar.<br />Diese Beschreibung wird auf dem Downloads Index und in den Subkategorien angezeigt.',
	'HELP_Dl_cat_parent' => 'Die oberste Ebene oder eine Kategorie, der diese Kategorie zugordnet werden kann.<br />Mit dieser dynamischen Auswahlliste können hierarchische Strukturen für Deine Downloads erstellt werden.',
	'HELP_Dl_must_approve' => 'Aktiviere diese Option, um neu hochgeladene Download Dateien freizugeben, bevor sie in dieser Kategorie angezeigt werden.<br />Administratoren und Download Moderatoren erhalten über jeden neuen nicht freigegebenen Download eine E-Mail.',
	'HELP_Dl_mod_desc_allow' => 'Aktiviert einen Block für MOD Informationen während dem Hinzufügen oder Bearbeiten von Downloads.',
	'HELP_Dl_statistics' => 'Schaltet detaillierte Statistiken über die Dateien ein.<br />Beachte, dass diese Statistiken zusätzliche Datenbank Queries benötigen und Datensätze in einer separaten Tabelle anlegen.',
	'HELP_Dl_comments' => 'Aktiviere Kommentare für diese Kategorie.<br />Users you can enable with the upcoming drop-downs, can view and/or post comments in this category.<br />Administrators and Download Moderators can edit and delete all comments, and authors can manage their own text.',
	'HELP_Dl_thumb_cat' => 'Diese Option lässt Thumbnails bei den Downloads dieser Kategorie zu.<br />Die Größe der Images ist von den Einstellungen in der allgemeinen Konfiguration des MODs abhängig.',
	'HELP_Dl_bug_tracker_cat' => 'Aktiviert den Bug Tracker für die Downloads dieser Kategorie.<br />Bugs kann dann jeder registrierte Benutzer für den betreffenden Download einstellen, ansehen und auch für alle anderen Kategorien betrachten, sofern auch dort der Bug Tracker aktiviert wurde.<br />Bearbeiten können die Einträge nur Administratoren und Board Moderatoren.<br />Über Änderungen an Bugmeldungen werden dem Urheber betreffende Nachrichten per E-Mail verschickt, ebenso wie an das Teammitglied, welchem ein Bug zugewiesen wurde.',

/*
* file management
*/
	'HELP_Dl_name' => 'Dies ist der Name des Downloads, der überall angezeigt wird.<br />Verwende möglichst keine Sonderzeichen, um Fehler bei der Darstellung zu vermeiden.',
	'HELP_Dl_choose_category' => 'Wähle die Kategorie, die den Download beinhalten soll.<br />Die Datei muss sich bereits in dem Ordner befinden, den Du in der Kategorieverwaltung für die gewählte Kategorie angeben hast, bevor Du diesen Download speicherst.<br />Andernfalls bekommst Du eine Fehlermeldung.',
	'HELP_Dl_file_description' => 'Eine kurze Beschreibung des Downloads.<br />Diese wird auch in der Kategorie angezeigt.<br />BBCodes sind für diesen Text nicht verfügbar.<br />Bitte verfasst einen möglichst kurzen Text, um beim Öffnen der Kategorie die Ladezeit gering zu halten.',
	'HELP_Dl_files_url' => 'Der Dateiname des Downloads.<br />Gib ihn ohne Pfadangaben und ohne führenden Slash an.<br />Die Datei muss vor dem Speichern bereits im Ordner der Kategorie existieren, sonst wird eine Fehlermeldung angezeigt.<br />Beachte auch verbotene Dateiendungen: Dateien, die hierzu zählen, werden abgewiesen.',
	'HELP_Dl_upload_file' => 'Die von Deinem Computer hochzuladene Datei.<br />Stelle sicher, dass die Dateigröße kleiner als die angezeigte Größe ist und die Dateierweiterung nicht in der Liste enthalten ist, die Du unterhalb dieses Feldes sehen kannst.',
	'HELP_Dl_extern' => 'Aktiviere diese Funktion, wenn du in der obigen Zeile eine URL ausserhalb Deines Servers angeben willst (http://www.beispiel.de/media.mp3).<br />Die Funktion &quot;frei&quot; wird dann bedeutungslos.',
	'HELP_Dl_extern_up' => 'Aktiviere diese Funktion, wenn du in dem nachfolgenden Feld eine URL ausserhalb Deines Servers angeben willst (http://www.beispiel.de/media.mp3).<br />Die Funktion &quot;frei&quot; wird dann bedeutungslos.',
	'HELP_Dl_thumb' => 'Dieses Feld kann ein kleines Bild hochladen (beachte die angegebene Dateigröße und Bildmaße unterhalb dieses Feldes), das in den Download Details angezeigt wird.<br />Wenn bereits ein Thumbnail existiert, kannst Du hiermit ein neues hochladen, um das bestehende Bild zu ersetzen.<br />Wenn Du das bestehende Thumbnail mit &quot;löschen&quot; markierst, wird das alte Bild nur entfernt',
	'HELP_Dl_is_free' => 'Aktiviere diese Funktion, wenn der Download unabhängig des Kontos für alle Benutzer möglich sein soll.<br />Wähle frei für reg. Benutzer, um nur registrierten Benutzern einen freien Download zu ermöglichen.',
	'HELP_Dl_traffic' => 'Maximaler Traffic, welcher durch die Datei erzeugt werden darf.<br>Der Wert 0 deaktiviert die Traffickontrolle',

	'HELP_Dl_approve' => 'Diese Einstellung gibt den Download sofort frei, wenn Du dieses Formular absendest.<br />Andernfalls wird dieser Downloads vor den Benutzern versteckt, bis ein Administrator oder Download Moderator den Download freigibt.',
	'HELP_Dl_no_change_edit_time' => 'Wähle diese Option, um die Aktualisierung der Bearbeitungszeit zu unterdrücken.<br />Dieses betrifft nicht die E-Mail und Popup Benachrichtigung/Board Nachricht.',
	'HELP_Dl_disable_popup_files' => 'Wähle diese Option, um die Popup Benachrichtigung/Board Nachricht zu unterdrücken.<br />Dieses betrifft nicht die Bearbeitungszeit oder die E-Mail Benachrichtigungen.',
	'HELP_Dl_disable_email_files' => 'Wähle diese Option, um die E-Mail Benachrichtigung zu unterdrücken.<br />Dieses betrifft nicht die Bearbeitungszeit oder die Popup Benachrichtigung/Board Nachricht.',
	'HELP_Dl_hacklist' => 'Mit dieser Option kannst Du den Download zur Hackliste hinzufügen (diese muss in der allgemeinen Konfiguration des MODs aktiviert sein), wenn Du hier Ja auswählst.<br />Nein fügt diesen Download nicht zur Hackliste hinzu und Extra Informationen anzeigen stellt diesen Block nur in den Download Details dar.',
	'HELP_Dl_hack_version' => 'Angabe über die Version des Downloads.<br />Diese wird nur bei den Downloads angezeigt.<br />Es kann nicht danach gesucht werden.',
	'HELP_Dl_hack_autor' => 'Der Autor der Download Datei.<br />Lasse ihn frei, um die Angabe in den Download Details und der Gesamtübersicht auszusparen.',
	'HELP_Dl_hack_autor_email' => 'E-Mail-Adresse des Autoren.<br />Wird diese nicht angegeben, lässt der MOD diese in den Details und in der Gesamtübersicht ebenfalls aus.',
	'HELP_Dl_hack_autor_website' => 'Webseite des Autoren.<br />Diese URL sollte auf die Webseite, nicht auf die Seite des Downloads verweisen (sind nicht immer die gleichen).<br />Bitte verlinke keine geschützten Seiten oder Seiten mit fragwürdigen Inhalten.',
	'HELP_Dl_hack_dl_url' => 'Die Seite zum alternativen Download der Datei.<br />Dieses kann die Seite des Autoren sein oder eine andere Alternative sein.<br />Bitte keine Dateien direkt verlinken, wenn der Autor das ausdrücklich untersagt.',
	'HELP_Dl_mod_desc' => 'Ausführliche Beschreibung zu der hier eingetragenen MOD.<br />In der Beschreibung können BBCodes und Smilies verwendet werden, Zeilenumbrüche werden ebenfalls berücksichtigt.<br />Diese Angaben werden nur in den Download Details angezeigt.',
	'HELP_Dl_mod_list' => 'Aktiviert diesen Block in den Download Details.<br />Wenn diese Option nicht gewählt ist, wird der gesamte Block in den Download Details ausgeblendet.',
	'HELP_Dl_mod_require' => 'Angaben, welche weiteren MODs dieser Download benötigt, um installiert oder benutzt werden zu können.<br />Diese Angaben werden nur in den Download Details angezeigt.',
	'HELP_Dl_mod_test' => 'Angabe zur Testumgebung dieses Downloads.<br />Hiermit ist die Forenversion gemeint.<br />Umgesetzt wird dieses als phpBB X, wobei X hier anzugeben wäre.<br />Diese Angaben werden nur in den Download Details angezeigt.',
	'HELP_Dl_mod_todo' => 'Hier können die nächsten Tätigkeiten an der MOD angegeben werden, die geplant sind oder aktuell anstehen.<br />Aus diesen Angaben wird die ToDo Liste erstellt, die im Fußbereich der Download aufgerufen werden kann.<br />Mit diesen Angaben kann man anderen Usern den Stand der eigenen MODs aufzeigen.<br />Zeilenumbrüche werden hierbei berücksichtigt, BBCodes sind hier nicht verfügbar.<br />Die ToDo-Liste wird auch dann mit diesen Angaben versorgt, wenn der MOD Block nicht aktiviert wurde.',
	'HELP_Dl_mod_warning' => 'Wichtige Hinweise zur MOD, die unbedingt bei der Installation, Benutzung oder im Zusammenspiel mit anderen MODs zu beachten sind.<br />Dieser Text wird farbig hervorgehoben in den Download Details angezeigt (im Original mit roter Schrift).<br />Zeilenumbrüche werden hierbei berücksichtigt, BBCodes sind hier nicht verfügbar.',

	'HELP_Dl_user_download_limit_flag' => 'Durch diese Funktion kannst du für jeden Benutzer ein Limit für die Anzahl der im Monat möglichen Downloads festlegen. Z.B.: Wenn du dies aktivierst und bei &quot;Maximale Anzahl der im Monat erlaubten Downloads&quot; gleich &quot;30&quot; eingibst, dann kann jder Benutzer nur 30 Dateien im Monat herunterladen. Dieses Limit gilt nicht für Moderatoren und Administrator.',
	'HELP_Dl_user_download_limit' => 'Gib die maximale Anzahl der für jeden Benutzer im Monat erlaubten Downloads an. Dieses Limit muß durch den Switch aktiviert werden, damit es funktioniert. Dieses Limit gilt nicht für Moderatoren und Administrator.',
	)
);

?>