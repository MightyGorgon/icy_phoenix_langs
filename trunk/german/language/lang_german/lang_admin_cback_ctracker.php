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
* Christian Knerr (cback) - (www.cback.de)
* TheSteffen, KugeLSichA, Tom, Carsten
*
*/

/**
* German Language File for the CBACK Cracker Tracker
*
* @author Christian Knerr (cback)
* @translator Marc Renninger (mc-dragon)
* @package ctracker
* @version 5.0.0
* @since 21.07.2006 - 17:26:28
* @copyright (c) 2006 www.cback.de
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
/*
* Language Strings used for the ACP Menu points
*/
	'ctracker_module_category' => 'CrackerTracker',
	'ctracker_module_1' => 'Prüfsummenscanner',
	'ctracker_module_2' => 'Credits',
	'ctracker_module_3' => 'Dateiscanner',
	'ctracker_module_4' => 'Globale Nachricht',
	'ctracker_module_5' => 'IP &amp; Agent Blocker',
	'ctracker_module_6' => 'Logmanager',
	'ctracker_module_7' => 'Wartung &amp; Tests',
	'ctracker_module_8' => 'Miserable Benutzer',
	'ctracker_module_9' => 'Einstellungen',
	'ctracker_module_10' => 'Wiederherstellen',
	'ctracker_module_11' => 'Footer',


/*
* Language Strings used in ACP Modules itself
*/
	'ctracker_wrong_module' => 'Unbekannte Modulnummer',
	'ctracker_img_descriptions' => 'Bild',
	'ctracker_set_catname1' => 'IP, Proxy &amp; UserAgent Blocker',
	'ctracker_set_catname2' => 'Suchschutz-System',
	'ctracker_set_catname3' => 'Loginschutz-System',
	'ctracker_set_catname4' => 'Automatische Spammer-Erkennung',
	'ctracker_set_catname5' => 'Registrierschutz-System',
	'ctracker_set_catname6' => 'Passwortkontrolle',
	'ctracker_set_catname7' => 'Allgemeine Sicherheitsfunktionen',
	'ctracker_set_catname8' => 'Sonstige Einstellungen',
	'ctracker_settings_head' => 'CrackerTracker Einstellungen',
	'ctracker_settings_expl' => 'Hier kannst du alle Einstellungen des CBACK CrackerTracker Sicherheitssystems anpassen.',
	'ctracker_button_submit' => 'Einstellungen speichern',
	'ctracker_button_reset' => 'Zurücksetzen',

	'ctracker_settings_m1' => 'IP Blocker aktivieren',
	'ctracker_settings_e1' => 'Schaltet den IP, Proxy und UserAgent Blocker ein oder aus.',
	'ctracker_settings_m2' => 'IP Blocker Loggröße',
	'ctracker_settings_e2' => 'Hier kannst du die Anzahl der Einträge für die Logdatei des IP Blockers einstellen. Wird die Anzahl überschritten wird die Logdatei automatisch gelöscht, um Webspace zu sparen.',
	'ctracker_settings_m3' => 'Suchschutz aktivieren',
	'ctracker_settings_e3' => 'Hier kannst du das Suchschutz-System des CrackerTrackers ein- oder ausschalten.',
	'ctracker_settings_m4' => 'Suchzeit für Benutzer',
	'ctracker_settings_e4' => 'Zeitspanne die registrierte Benutzer warten müssen, wenn das Suchschutz-System aktiviert wird, bis sie erneut suchen können. (in Sekunden)',
	'ctracker_settings_m5' => 'Suchanzahl für Benutzer',
	'ctracker_settings_e5' => 'Hier kannst du einstellen, wie viele Suchanfragen in der oben angegebenen Zeitspanne von registrierten Benutzern durchgeführt werden dürfen. Wenn diese Anzahl überschritten wird, werden weitere Suchanfragen für die oben eingestellte Zeit blockiert, um die Serverbelastung zu reduzieren.',
	'ctracker_settings_m6' => 'Suchzeit für Gäste',
	'ctracker_settings_e6' => 'Zeitspanne die Gäste warten müssen, wenn das Suchschutz-System aktiviert wird, bis sie erneut suchen können. (in Sekunden)',
	'ctracker_settings_m7' => 'Suchanzahl für Gäste',
	'ctracker_settings_e7' => 'Hier kannst du einstellen, wie viele Suchanfragen in der oben angegebenen Zeitspanne von Gästen durchgeführt werden dürfen. Wenn diese Anzahl überschritten wird, werden weitere Suchanfragen für die oben eingestellte Zeit blockiert, um die Serverbelastung zu reduzieren.',
	'ctracker_settings_m8' => 'Loginschutz einschalten',
	'ctracker_settings_e8' => 'Hier kannst du das Loginschutz-System des CrackerTrackers aktivieren oder deaktivieren.',
	'ctracker_settings_m9' => 'Loggröße für falsche Logins',
	'ctracker_settings_e9' => 'Hier kannst du einstellen, wie viele Einträge in der Logdatei für falsche Loginversuche gespeichert werden, bis diese automatisch gelöscht werden, um Webspace zu sparen.',
	'ctracker_settings_m10' => 'Loginanzahl bis Visuelle Bestätigung',
	'ctracker_settings_e10' => 'Wie oft darf ein Benutzer sich fehlerhaft einloggen, bis zum Schutz vor BruteForce Attacken die Visuelle Bestätigung angezeigt wird?',
	'ctracker_settings_m11' => 'Loginhistory',
	'ctracker_settings_e11' => 'Hier kannst du die Login Historie für Benutzer aktivieren oder deaktivieren.',
	'ctracker_settings_m12' => 'Einträge in der Login Historie pro Benutzer',
	'ctracker_settings_e12' => 'Hier kannst du einstellen, wie viele erfolgreiche Logins in der Login Historie jedes Users gespeichert werden. Bei der Loginhistorie haben alle Benutzer die Möglichkeit selbst zu prüfen, ob die Zeiten und IP Adressen ihrer Logins in Ordnung sind.',
	'ctracker_settings_m13' => 'Login IP Funktion',
	'ctracker_settings_e13' => 'Aktiviert oder deaktiviert das Login-IP-System. Jeder Benutzer hat die Möglichkeit auf der Loginsicherheit Seite das System zu aktivieren oder deaktivieren, wenn es an dieser Stelle eingeschaltet wurde. Das IP-Schutz-System prüft hier Änderungen der Benutzer IP Adresse und informiert den Benutzer beim nächsten Login darüber, dass der IP Bereich seit dem letzten Login verändert wurde. Hier bestünde dann die Möglichkeit, dass sich jemand von einem anderen Ort aus eingeloggt hat.',
	'ctracker_settings_m14' => 'Spammer-Erkennung',
	'ctracker_settings_e14' => 'Hier kann der Modus für die automatische Spammer-Erkennung eingestellt werden.',
	'ctracker_settings_m15' => 'Spammer Zeitspanne',
	'ctracker_settings_e15' => 'Zeitspanne in der Beiträge eines Benutzers zur Spammer-Erkennung gezählt werden. (in Sekunden)',
	'ctracker_settings_m16' => 'Spammer Postanzahl',
	'ctracker_settings_e16' => 'Erlaubte Anzahl an Posts in der obigen Zeitspanne. Wird dieser Wert überschritten, wird der User als Spammer identifiziert und die im obigen Modus eingestellte Aktion durchgeführt.',
	'ctracker_settings_m17' => 'Spammer Loggröße',
	'ctracker_settings_e17' => 'Loggröße in der als Spammer identifizierte Benutzer gespeichert werden.',
	'ctracker_settings_m18' => 'Registrierschutz',
	'ctracker_settings_e18' => 'Hier kannst du den Registrierschutz aktivieren oder deaktivieren.',
	'ctracker_settings_m19' => 'Blockzeit für Registrierung',
	'ctracker_settings_e19' => 'Hier kann die Zeitspanne eingestellt werden, die zwischen zwei Registrierungen vergehen muss, ehe ein neuer Benutzer sich wieder registrieren kann. (in Sekunden)',

	'ctracker_settings_m21' => 'IP Watcher',
	'ctracker_settings_e21' => 'Wenn diese Funktion aktiviert wurde, kann sich ein Benutzer mit einer identischen IP Adresse nur einmal registrieren, bis sich jemand mit anderer IP Adresse wieder registriert hat.',
	'ctracker_settings_m22' => 'Passwortgültigkeit',
	'ctracker_settings_e22' => 'Aktiviert die Überprüfung der Passwortgültigkeit für alle Benutzer.',
	'ctracker_settings_m23' => 'Passwortgültigkeit in Tagen',
	'ctracker_settings_e23' => 'Wie lange ist ein Benutzerpasswort gültig, ehe ein Hinweis zum Ändern erscheint? (in Tagen)',
	'ctracker_settings_m24' => 'Passwort Komplexitätskontrolle',
	'ctracker_settings_e24' => 'Diese Funktion überprüft Benutzerpasswörter auf Komplexität.',
	'ctracker_settings_m25' => 'Passwort Komplexitätsmodus',
	'ctracker_settings_e25' => 'Hier kann eingestellt werden, ob zwingend Zeichen in Passwörtern vorhanden sein müssen.',
	'ctracker_settings_m26' => 'Passwort Mindestlänge',
	'ctracker_settings_e26' => 'Hier kannst du die Zeichenzahl einstellen, die ein Passwort mindestens haben muss.',
	'ctracker_settings_m27' => 'Passwort Reset Prüfer',
	'ctracker_settings_e27' => 'Erlaubt einem Benutzer in einer nachfolgend einstellbaren Zeitspanne nur einmal sein Passwort zurückzusetzen. Dies verhindert, dass Angreifer diese Funktion ausnutzen können, um einen Benutzer mit Passwort Resetmails zuzuspammen.',
	'ctracker_settings_m28' => 'Passwort Reset Zeitspanne',
	'ctracker_settings_e28' => 'In welcher Zeitspanne darf ein Benutzer sein Passwort zurücksetzen? (in Minuten)',
	'ctracker_settings_m29' => 'E-Mail Überwachung',
	'ctracker_settings_e29' => 'Hier kannst du die Funktion aktivieren, dass Benutzer die boardinterne Mailfunktion nur innerhalb einer bestimmten Zeitspanne einmal benutzen dürfen. Dies verhindert Spamming.',
	'ctracker_settings_m30' => 'E-Mail Zeitspanne',
	'ctracker_settings_e30' => 'Wie viel Zeit darf zwischen zwei E-Mails vergehen, die ein Benutzer über die boardinterne Mailfunktion versenden darf? (in Minuten)',
	'ctracker_settings_m31' => 'Auto Wiederherstellung',
	'ctracker_settings_e31' => 'Aktiviert die Funktion automatisch Boardeinstellungen zu sichern. Wenn diese fehlschlagen, kann damit einfach wieder zur letzten funktionierenden Konfiguration zurückgekehrt werden.',
	'ctracker_settings_m32' => 'Visuelle Bestätigung für Gäste',
	'ctracker_settings_e32' => 'Wenn du diese Funktion einschaltest, müssen Gäste beim Schreiben eines neuen Beitrags einen visuellen Code eingeben, damit ihr Post eingetragen wird. Dies schützt vor vollautomatischen Spambots.',
	'ctracker_settings_m33' => 'Wegwerf-Maildienst Schutz',
	'ctracker_settings_e33' => 'CrackerTracker hat intern eine Liste von sogenannten Wegwerf-Maildiensten. Wenn du diese Funktion aktivierst, können sich keine Benutzer mit einer solchen Mailadresse mehr registrieren, um zum Beispiel die E-Mail Benutzer-Konto Aktivierung zu umgehen.',
	'ctracker_settings_m34' => 'Erkennung von fehlerhafter Konfiguration',
	'ctracker_settings_e34' => 'Wenn du diese Funktion aktiviert hast, prüft CrackerTracker bei den allgemeinen Boardeinstellungen von Icy Phoenix die Angaben auf Gültigkeit. So kannst du dein Board nicht mehr so leicht durch Fehlkonfiguration beschädigen!',
	'ctracker_settings_m35' => 'Spammer Erkennung steigern',
	'ctracker_settings_e35' => 'Wenn du diese Funktion aktivierst, wird CrackerTracker gezielter auf menschlich durchgeführte Spam-Registrierungen oder Spam-Beiträge achten. Die meisten können somit erkannt und blockiert werden.',
	'ctracker_settings_m36' => 'Spammer Schlüsselwort Überprüfung',
	'ctracker_settings_e36' => 'Wenn "Spammer Erkennung steigern" aktiviert wurde, dann kannst du mit dieser Option zuschalten, dass zusätzlich Schlüsselwörter in Profil und Beiträgen gescannt werden, um Spammer als solche zu identifizieren.<br /><br /><b>ACHTUNG:</b> Hier besteht eine höhere Gefahr von Fehlerkennungen für neue Benutzer. Es sollte dann ständig das Logfile für Spammer-Erkennung überprüft werden.',


/*
* Credits page in ACP
*/
	'ctracker_credits_head' => 'Credits',
	'ctracker_credits_subhead' => 'Hier befinden sich ein paar Hinweise und die Credits des CBACK CrackerTrackers. Eine Seite um Dir weitere Informationen zu sicherheitsrelevanten Dingen zu geben, sowie eine Möglichkeit "Danke" zu sagen.',
	'ctracker_credits_donate' => 'Spenden',
	'ctracker_credits_donate_expl' => 'Gefällt Dir <b>CBACK CrackerTracker Professional</b>? Dann wäre es sehr nett von Dir, wenn du das CBACK Projekt mit einer kleinen PayPal Spende unterstützen würdest. Weiterentwicklung und Servermiete kosten unser non-profit Projekt viel Geld. Mit einer kleinen Unterstützung hilfst Du, dass wir unsere Services wie zum Beispiel den CrackerTracker weiterhin kostenfrei anbieten können. <br /><br />Vielen Dank für die Unterstützung!',
	'ctracker_credits_credits' => 'Credits',
	'ctracker_credits_credits_1' => 'Idee &amp; Umsetzung',
	'ctracker_credits_credits_2' => 'Herstellerseite und Supportforum',
	'ctracker_credits_credits_3' => 'Icons',
	'ctracker_credits_credits_4' => 'Offizielle Downloadseite',
	'ctracker_credits_moddownload' => 'CrackerTracker MOD Download',
	'ctracker_credits_thanks' => 'Dank an&hellip;',
	'ctracker_credits_thanks_text' => 'An dieser Stelle geht ein Dankeschön an einige Personen die mir bei der MOD Entwicklung mit Ideen, Tests und mehr zur Seite standen.',
	'ctracker_credits_thanks_to' => '<b>Featureideen, Sicherheitstests und Kontrolllesen</b><br />Tekin Birdüzen<br /><i>(<a href="http://www.cybercosmonaut.de" target="_blank">cYbercOsmOnauT</a>)</i><br /><br /><br /><br /><b>Featurevorschläge</b><br />Bernhard Jaud<br /><i>(GenuineParts)</i><br /><br /><br /><br /><b>Übersetzer</b><br />mc-dragon<br /><i>(Englisch)</i><br /><br /><br /><br /><b>Korrektur (Englisch)</b><br />George<br />Sommerset<br /><i>(<a href="http://www.englisch-hilfen.de" target="_blank">www.englisch-hilfen.de</a>)</i><br /><br /><br /><br /><b>Korrektur (Deutsch)</b><br />Johnny (diegoriv)<br /><i>(<a href="http://alpinum.at" target="_blank">Alpinum.at</a>)</i><br /><br /><br /><br /><b>Beta Tester</b><br />Danke an alle Teilnehmer des Beta-Tests,<br />an die CBACK Premium User und natürlich auch an<br />einige Kollegen aus der "Modder-Szene", welche bei Beta Tests und Korrekturlesen geholfen haben.</i>',
	'ctracker_credits_info' => 'Noch mehr Sicherheit?',
	'ctracker_credits_info_text' => 'Die perfekte Erweiterung für Icy Phoenix und den CrackerTracker: Für optimale Sicherheit vor bösen Spambots und Registrierbots empfehlen wir den Mod <b>Advanced Visual Confirmation</b> von AmigaLink. Dieser MOD erweitert die CAPTCHA Funktion von phpBB und von CrackerTracker Professional mit einem komplexeren System, welches nicht von Bots ausgelesen werden kann. Den MOD kann man auf <a href="http://www.amigalink.de" target="_blank">www.AmigaLink.de</a> herunterladen.<br /><br /><br /><br />Wir empfehlen diesen MOD für optimale Sicherheit ebenfalls in dein Forum einzubauen!',


/*
* File Hash Check in ACP
*/
	'ctracker_fchk_head' => 'CrackerTracker Prüfsummenscanner',
	'ctracker_fchk_subhead' => 'Dieser Scanner erzeugt für jede PHP Datei deines Forums eine Prüfsumme, sobald du auf "Erstelle oder aktualisiere Prüfsummen" klickst. Danach hast du immer die Möglichkeit mit "Überprüfe Dateiänderungen" festzustellen, ob sich die Dateien seit dem letzten Erzeugen von Prüfsummen geändert haben oder nicht. Damit kannst du überwachen, ob sich vielleicht Dateien geändert haben, ohne dass du selbst etwas editiert hast. Dies ist meist ein Anzeichen davon, dass jemand Zugang zu Deinem Foren-Datenbestand bekommen hatte. Achte übrigens auch auf die letzte Prüfzeit. So siehst Du, ob jemand unbefugt diesen Prüfsummenscanner aktiviert hat!<br /><br /><br /><b>Information:</b> Nicht alle Server unterstützen dieses Feature. Gelegentlich kann es zu Script Timeouts kommen, wenn der Server zu lange braucht, um die Icy Phoenix Dateiliste zu erzeugen. Andere Server brechen den Vorgang ab, da er recht performanceintensiv ist.<br /><br /><br />&raquo; Die letzte Aktualisierung der Dateiprüfsummen fand am <b>%s</b> statt.',
	'ctracker_fchk_funcheader' => 'Funktionen',
	'ctracker_fchk_tableheader' => 'Systemausgabe',
	'ctracker_fchk_option1' => 'Erstelle oder aktualisiere Prüfsummen',
	'ctracker_fchk_option2' => 'Überprüfe Dateiänderungen',
	'ctracker_fchk_select_action' => 'Bitte wähle eine Aktion aus!',
	'ctracker_fchk_update_action' => 'Aktualisieren der Dateiprüfsummen wurde vollständig ausgeführt!',
	'ctracker_fchk_tablehead1' => 'Dateipfad',
	'ctracker_fchk_tablehead2' => 'Status',
	'ctracker_file_unchanged' => 'UNVERÄNDERT',
	'ctracker_file_changed' => 'GEÄNDERT',
	'ctracker_file_deleted' => 'GELÖSCHT',


/*
* File Safety Scanner in ACP
*/
	'ctracker_fscan_complete' => 'Der Dateiscan wurde erfolgreich ausgeführt. Bitte klicke nun auf "Ergebnisse anzeigen", damit die Liste mit den Prüfergebnissen angezeigt wird und du die Möglichkeit hast, die Dateien zu korrigieren. <br /><br /><br /><br /><u>HINWEIS:</u><br /><br />Gelegentlich kann es vorkommen, dass CrackerTracker eine Datei als unsicher erkennt. Dies liegt natürlich daran, dass PHP Codedateien sehr, sehr unterschiedlich sein können und gelegentlich ein Programmierer sogar unbedingt möchte, dass Code von außen beschrieben werden kann. In diesem Fall - und wirklich NUR wenn du Dir absolut sicher bist und die Datei genauestens überprüft hast - kannst du die entsprechende Datei mit einem Signalkommentar bei der Prüfung als sicher einstufen, so das du beim nächsten Scan nicht mehr mit dieser Datei als unsicher konfrontiert wirst. Füge dazu einfach nach dem Dateibeginn <?php den folgenden Kommentar ein: <br /><br /><br /><i>// CTracker_Ignore: File Checked By Human</i><br /><br /><br />Wenn du Dir unsicher bist kannst du auch auf der <a href="http://www.community.cback.de" target="_blank">CBACK Community</a> genauere Anweisungen für die Scanergebnisse, und wie man diese Stellen bereinigen kann, erfahren. Bitte benutze auch die dortige Forensuche, da zu diesen Anfragen sicherlich schon viele beantwortete Threads vorliegen.',
	'ctracker_fscan_unchecked' => 'NICHT ÜBERPRÜFT',
	'ctracker_fscan_ok' => 'SICHER',
	'ctracker_fscan_prob_1' => 'extension.inc nicht / zu spät eingebunden',
	'ctracker_fscan_prob_2' => 'IP_ROOT_PATH ist möglicherweise nicht richtig initialisiert',
	'ctracker_fscan_prob_3' => 'common.php / pagestart.php möglicherweise nicht oder zu spät eingebunden',
	'ctracker_fscan_prob_4' => 'Code in der Datei ist möglicherweise außerhalb von Icy Phoenix ausführbar',
	'ctracker_fscan_prob_5' => 'extension.inc fehlt und/oder IP_ROOT_PATH und/oder gesetzte Konstante nicht gefunden',
	'ctracker_fscan_prob_def' => 'Eine undefinierter Fall ist beim Scannen aufgetreten',
	'ctracker_fscan_important' => 'Bitte beachten!',
	'ctracker_fscan_sel_action' => 'Zum Starten der Überprüfung aller Dateien klicke bitte auf "Dateiprüfung starten". Wenn dies beendet ist, klicke auf "Ergebnisse anzeigen", um die Resultate der Überprüfung zu sehen. Diese Liste kann jederzeit wieder über diesen ACP Punkt abgerufen werden, bis eine neuen Prüfung gestartet wird.<br /><br /><br />Aus technischen Gründen ist es jedoch nicht möglich eine <u>eindeutige</u> und <u>unfehlbare</u> Auskunft über die Sicherheit eines PHP Skriptes zu geben. Wiege Dich also nicht in falschen Sicherheitsvorstellungen! Es kann vorkommen, dass der Scanner eine sichere Datei als unsicher einstuft, und es kann auch passieren, dass dieser Scanner eine Datei als sicher anzeigt die anderweitig eine Lücke aufweist. PHP ist so tiefgehend und Codes sind meist noch von so vielen anderen Faktoren oder Bereichen abhängig, dass ein 100%iges Resultat nicht geliefert werden kann. Ansonsten gäbe es keine unsicheren Skripte mehr. ;-)<br /><br /><br />Dieser Scanner ist auf einige Löcher in den includes Dateien spezialisiert und spürt Bereiche des Forums auf, die von außen erreichbar sind. Damit bietest du eine Angriffsfläche die der CrackerTracker nicht überwachen kann, da CrackerTracker nur innerhalb des Forums arbeitet. Mit diesem Scanner kann man einen Großteil dieser Gefahren leicht aufspüren und beseitigen.<br /><br /><br />Weitere Hinweise und Anleitungen und Hilfen, wie als unsicher gezeigte Dateien korrigiert werden können, findest du mit der Suchfunktion auf der CBACK Community!<br /><br /><br />',
	'ctracker_fscan_head' => 'CBACK CrackerTracker Sicherheitsscanner',
	'ctracker_fscan_subhead' => 'Dieser Sicherheitsscanner prüft alle PHP Dateien Deines Forums auf gravierende Sicherheitsprobleme und legt hier besonderes Augenmerk darauf, dass keine includes Lücken vorliegen die durch Würmer ausgenutzt werden. Diese Lücken können meist so ausgenutzt werden, dass Code von außen eingeschleust wird ohne andere Boarddateien anzusprechen. Damit bleibt auch das CrackerTracker-System inaktiv und kann die Datei nicht schützen. Mit diesem ACP Modul hast du die Möglichkeit solche Lücken gezielt aufzuspüren.<br /><br /><br /><b>Bitte beachten:</b> Nicht alle Server unterstützen diese Funktion! Bei sehr großen Boards kann es durchaus passieren, dass dieses performanceintensive Scansystem die PHP Execution Time überschreitet. Der Algorithmus des Scanners wurde so gut wie möglich optimiert, dass sich dies in Grenzen hält, aber es kann auf einigen Maschinen dennoch vorkommen. Wir bitten dies zu berücksichtigen.<br /><br /><br />&raquo; Die letzte Überprüfung fand am <b>%s</b> statt.',
	'ctracker_fscan_option1' => 'Dateiprüfung starten',
	'ctracker_fscan_option2' => 'Ergebnisse anzeigen',


/*
* Global message in ACP
*/
	'ctracker_glob_msg_head' => 'Globale Nachricht',
	'ctracker_glob_msg_subhead' => 'Hier kannst du eine globale Nachricht an alle Benutzer hinterlassen. Diese Nachricht ist dann beim nächsten Login für den Benutzer als Meldungsbox sichtbar. Du hast die Möglichkeit entweder auf einen Thread zu verweisen oder einen beliebigen eigenen Text zu schreiben. Ein eigener Text ist allerdings auf 255 Zeichen begrenzt! Das reicht aber aus, wenn du z.B. wegen Änderungen im Template nur schnell darauf hinweisen möchtest, dass man beispielsweisen den Browser Cache leeren soll. ;)',
	'ctracker_glob_msg_entry' => 'Globale Nachricht erstellen',
	'ctracker_glob_msg_submit' => 'Eintragen',
	'ctracker_glob_msg_reset' => 'Nachricht zurückziehen',
	'ctracker_glob_msg_type' => 'Typ der globalen Nachricht',
	'ctracker_glob_type_1' => 'Text',
	'ctracker_glob_type_2' => 'Link',
	'ctracker_glob_msg_txt' => 'Text der globalen Nachricht',
	'ctracker_glob_msg_link' => 'Linkziel in der Nachricht',
	'ctracker_glob_msg_reset' => 'Aktuelle Nachricht zurückziehen',
	'ctracker_glob_res_txt' => 'Eine vorher eingetragene Nachricht kann mit einem Klick auf den Button "Aktuelle Nachricht zurückziehen" abgeschaltet werden. Die Benutzer erhalten dann die letzte Globale Nachricht nicht mehr weiter.',
	'ctracker_glob_msg_saved' => 'Die globale Nachricht wurde erfolgreich gespeichert.<br /><br />Klicke <a href="%s">hier</a>, um zurück zur CrackerTracker Verwaltung zu gelangen.',
	'ctracker_glob_msg_reset_ok' => 'Die globale Nachricht wurde nun von der Nutzertabelle entfernt. Benutzer bekommen die eingetragene Nachricht nicht mehr angezeigt.<br /><br />Klicke <a href="%s">hier</a>, um zurück zur CrackerTracker Verwaltung zu gelangen.',

/*
* IP &amp; Agent Blocker
*/
	'ctracker_ipb_delete' => 'Eintrag löschen',
	'ctracker_ipb_blocklist' => 'Blocklisteinträge',
	'ctracker_ipb_head' => 'Proxy, IP &amp; UserAgent Blocker',
	'ctracker_ipb_description' => 'Hier kannst du die Blockliste für den CrackerTracker Proxy, IP und UserAgent Blocker verwalten. Du kannst sowohl vorhandene Einträge löschen sowie neue Einträge hinzufügen. Bei einem Neueintrag hast du die Möglichkeit den Stern (*) als Jokerzeichen zu benutzen, um beliebige Kombinationen aus dem Filtereintrag in der Liste einzutragen. z.B.: lwp* sperrt lwp-1 genauso wie lwp-simple etc. oder 100.*.*.* sperrt alle IP Adressen die mit 100. beginnen.<br /><br /><b>WARNUNG:</b> Achte darauf, dass du nicht Deinen eigenen UserAgent oder deine eigene IP sperrst. Ansonsten kannst du das Forum nicht mehr betreten!',


/*
* Log Manager
*/
	'ctracker_log_manager_title' => 'Logfile Manager',
	'ctracker_log_manager_subtitle' => 'Hier kannst du alle Logdateien des CrackerTrackers anzeigen und löschen.',
	'ctracker_log_manager_overview' => 'Log Manager Übersicht',
	'ctracker_log_manager_blocked' => 'CrackerTracker hat bisher <b>%s</b> Attacken blockiert.',
	'ctracker_log_manager_overview' => 'Logdatei Übersicht',
	'ctracker_log_manager_head1' => 'Logname',
	'ctracker_log_manager_head2' => 'Anzahl der Einträge',
	'ctracker_log_manager_head3' => 'Funktionen',
	'ctracker_log_manager_name2' => 'Wurm &amp; Exploit Protection',
	'ctracker_log_manager_name3' => 'IP, Proxy &amp; UserAgent Blocker',
	'ctracker_log_manager_name4' => 'Fehlerhafte Logins',
	'ctracker_log_manager_name5' => 'Blockierte Spammer',
	'ctracker_log_manager_name6' => 'Debug-Einträge',
	'ctracker_log_manager_view' => 'ANSEHEN',
	'ctracker_log_manager_delete' => 'LÖSCHEN',
	'ctracker_log_manager_delete_all' => 'Alle Logdateien löschen',
	'ctracker_log_manager_deleted' => 'Das Logfile wurde erfolgreich gelöscht!',
	'ctracker_log_manager_all_deleted' => 'Alle Logdateien wurden erfolgreich gelöscht!',
	'ctracker_log_manager_showheader1' => 'Diese Logdatei enthält aktuell <b>einen</b> Eintrag. Klicke <b><a href="%s">hier</a></b>, um zur Logdatei Übersicht zurückzukehren.',
	'ctracker_log_manager_showheader' => 'Diese Logdatei enthält aktuell <b>%s</b> Einträge.<br />Klicke <b><a href="%s">hier</a></b>, um zur Logdatei Übersicht zurückzukehren.',
	'ctracker_log_manager_showlog' => 'Logdatei ansehen',
	'ctracker_log_manager_cell_1' => 'Datum / Zeit',
	'ctracker_log_manager_cell_2a' => 'Aufruf',
	'ctracker_log_manager_cell_2b' => 'Benutzername',
	'ctracker_log_manager_cell_3' => 'Referer',
	'ctracker_log_manager_cell_4' => 'UserAgent',
	'ctracker_log_manager_cell_5' => 'IP Adresse',
	'ctracker_log_manager_cell_6' => 'Remote Host',
	'ctracker_log_manager_sysmsg' => 'Letzte Bereinigung der Logdatei fand am <b>%s</b> statt.',

/*
* Footer configuration
*/
	'ctracker_footer_head' => 'Footer-Verwaltung',
	'ctracker_footer_subhead' => 'Hier kannst du auswählen, welchen Footer CrackerTracker in deinem Forum anzeigen soll. Wir bitten darum, dass der Footer und damit der Hinweis zu www.cback.de intakt bleibt!',
	'ctracker_select_footer' => 'Footer auswählen',
	'ctracker_footer_saveit' => 'Footer-Layout übernehmen',
	'ctracker_footer_done' => 'Änderungen am Footer Layout wurden erfolgreich gespeichert!',

/*
* Maintenance Module in ACP
*/
	'ctracker_ma_unknown' => '<span class="text_orange">UNBEKANNT</span>',
	'ctracker_ma_secure' => '<span class="text_green">SICHER</span>',
	'ctracker_ma_warning' => '<span class="text_red">WARNUNG</span>',
	'ctracker_ma_active' => '<span class="text_green">AKTIV</span>',
	'ctracker_ma_inactive' => '<span class="text_red">INAKTIV</span>',
	'ctracker_ma_ca' => '<span class="text_green">OK</span>',
	'ctracker_ma_ci' => '<span class="text_red">NICHT GESETZT</span>',
	'ctracker_ma_head' => 'Wartung und Systemprüfung',
	'ctracker_ma_subhead' => 'Hier hast du die Möglichkeit Wartungsfunktionen am CrackerTracker-System durchzuführen. Des Weiteren überprüft dieses System automatisch die CrackerTracker Sicherheitsmodule auf Funktion und gibt Dir Hinweise zur Sicherheitsoptimierung Deines Systems.',
	'ctracker_ma_systest' => 'Automatischer Systemtest',
	'ctracker_ma_sectest' => 'Sicherheitstest',
	'ctracker_ma_maint' => 'Wartungsfunktionen',
	'ctracker_ma_name_1' => 'Wurm- &amp; Exploitschutz-System',
	'ctracker_ma_name_2' => 'Variable Control Unit',
	'ctracker_ma_name_3' => 'IP, Proxy &amp; UserAgent Protection Unit',
	'ctracker_ma_name_4' => 'Wurmheuristik Definitionssatz - Anzahl der Definitionen: <b>%s</b>',
	'ctracker_ma_syshead_1' => 'Sicherheitsmodul',
	'ctracker_ma_syshead_2' => 'Status',
	'ctracker_ma_seccheck_1' => 'Prüfpunkt',
	'ctracker_ma_seccheck_2' => 'Version / Status',
	'ctracker_ma_seccheck_3' => 'Empfehlung',
	'ctracker_ma_seccheck_4' => 'Status',
	'ctracker_ma_scheck_1' => 'PHP Version (<a href="http://www.php.net" target="_blank">Webseite besuchen</a>)',
	'ctracker_ma_scheck_2' => '&raquo; PHP SAFE MODE',
	'ctracker_ma_scheck_3' => '&raquo; PHP GLOBALS',
	'ctracker_ma_scheck_4' => 'Icy Phoenix Version (<a href="http://www.icyphoenix.com" target="_blank">Webseite besuchen</a>)',
	'ctracker_ma_scheck_4a' => '&raquo; Visuelle Bestätigung',
	'ctracker_ma_scheck_4b' => '&raquo; Benutzer-Konto Aktivierung',
	'ctracker_ma_scheck_5' => 'CBACK CrackerTracker (<a href="http://www.cback.de" target="_blank">Webseite besuchen</a>)',
	'ctracker_ma_chmod' => '<b>CHMOD777 Status:</b> ',
	'ctracker_ma_desc_link' => 'JETZT AUSFÜHREN',
	'ctracker_ma_desc1' => '<b>IP, Proxy &amp; UserAgent Tabelle leeren</b><br />Hiermit kannst du <u>alle</u> Einträge aus der IP, Proxy &amp; UserAgent Tabelle entfernen.',
	'ctracker_ma_desc2' => '<b>Werkseinstellung: IP, Proxy &amp; UserAgent Blocker</b><br />Hiermit kannst du den Auslieferungszustand der IP, Proxy &amp; UserAgent Datenbanktabelle wiederherstellen. Deine Filter gehen dabei verloren!',
	'ctracker_ma_desc3' => '<b>Login History löschen</b><br />Hier kannst du alle Einträge in der Login History entfernen, unabhängig vom User und unabhängig von der eingestellten Speicherzahl pro User.',
	'ctracker_ma_desc4' => '<b>Datei-Hashprüfungstabelle leeren</b><br />Löscht alle gespeicherten Einträge in der Tabelle für den Datei-Hashcheck.',
	'ctracker_ma_desc5' => '<b>Sicherheitsscanner Tabelle leeren</b><br />Löscht alle Ergebnisse, die bei der Datei-Sicherheitsprüfung in der Datenbank gespeichert wurden.',
	'ctracker_ma_succ_main' => 'Vorgang erfolgreich ausgeführt!',
	'ctracker_ma_err_main' => 'Vorgang nicht erfolgreich ausgeführt!',


/*
* Miserable User Module in ACP...
*/
	'ctracker_mu_subhead' => 'Ein Benutzer verhält sich nicht so wie er soll, jedoch besteht die Befürchtung, dass er sich bei einem normalen Ban wieder mit anderem Benutzer-Konto anmeldet oder genau das ist sogar schon passiert? Dann gibt es hier die Funktion "Miserable User", eine Funktion, welche relativ häufig gewünscht wurde. Allerdings koppelt das CrackerTracker-System dies nicht an das "Wir lösen unsinnige Fehlermeldungen aus" System an, welches leicht durchschaubar ist, sondern geht nach dem Prinzip "Don\'t feed the Monkey" vor: Wenn ein Benutzer als Miserable User markiert ist kann lediglich der Administrator seine Posts lesen. Für andere Benutzer sind die Beiträge unsichtbar, folglich kann niemand auf den Störenfried eingehen bis es diesem langweilig wird und er das Forum von sich aus verlässt.<br /><b>Hinweis: <u>Diese Funktion wirkt sich nur auf die Anzeige der Postings in einem Thread aus.</u> Mit "Zitat" oder "Suche" sieht man die Postings des "Miserable User" weiterhin!</b>',

	'ctracker_mu_select' => 'Benutzer als Miserable User markieren',
	'ctracker_mu_find' => 'Benutzernamen suchen',
	'ctracker_mu_send' => 'Benutzer eintragen',
	'ctracker_mu_entr' => 'Markierte Benutzer',
	'ctracker_mu_uname' => 'Eingetragener Benutzername',
	'ctracker_mu_remove' => 'Einträge entfernen',
	'ctracker_mu_no_defined' => 'Zurzeit sind keine Benutzer als "Miserable User" markiert.',


/*
* Recovery feature in ACP
*/
	'ctracker_rec_head' => 'System Wiederherstellung',
	'ctracker_rec_subhead' => 'Hier hast du die Möglichkeit, die Konfigurationstabelle deines Forums zu sichern oder zur letzten funktionierenden Konfiguration zurückzukehren. Wenn du die Funktion in den allgemeinen Einstellungen des CrackerTrackers aktiviert hast, dann wird die Konfigurationstabelle deines Forums jedesmal gesichert, wenn du die Allgemeine Forenkonfiguration änderst. (ACHTUNG! Es handelt sich <b>NICHT</b> um ein komplettes Datenbankbackup!)<br /><br />Wenn du nicht mehr ins ACP kommst nachdem du Einstellungen verändert hast, dann kannst du die letzte als funktionierend bekannte Konfiguration auch über die Notfallkonsole des CrackerTrackers reaktivieren. Lese hierzu den Dateikommentar in der Datei <i>ctracker/emergency.php</i> für weitere Instruktionen zur Notfallwiederherstellung der Forenkonfiguration. Bitte beachte, dass diese Datei immer erst vor Benutzung freigegeben werden muss. Wie das geht steht ebenfalls im Dateikommentar.<br /><br /><b>ACHTUNG!</b> Diese Funktion sollte nur bei akuten Problemen benutzt werden!',
	'ctracker_rec_last_saved' => 'Letztes Backup der Konfigurationstabelle: <b>%s</b>',
	'ctracker_rec_never_saved' => 'Die Konfigurationstabelle wurde bislang noch nicht gesichert!',
	'ctracker_rec_backup' => 'Backup der Konfigurationstabelle',
	'ctracker_rec_restore' => 'Wiederherstellen der zuletzt gespeicherten Konfigurationstabelle',
	'ctracker_rec_succ' => 'Der Datenbankvorgang wurde erfolgreich ausgeführt.',
	'ctracker_rec_pab' => 'Wiederherstellung erst nach einem erfolgreichen Backup möglich!',
	)
);
?>