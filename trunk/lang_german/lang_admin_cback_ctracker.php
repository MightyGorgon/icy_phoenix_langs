<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin_cback_ctracker.php 49 2008-09-15 20:00:00Z TheSteffen $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Christian Knerr (cback) - (www.cback.de)
* TheSteffen, KugeLSichA, Tom
*
*/

/**
* English Language File for the CBACK Cracker Tracker
*
* @author Christian Knerr (cback)
* @translator Marc Renninger (mc-dragon)
* @package ctracker
* @version 5.0.0
* @since 21.07.2006 - 17:26:28
* @copyright (c) 2006 www.cback.de
*
*/


/*
 * Language Strings used for the ACP Menu points
 */
$lang['ctracker_module_category'] = 'CrackerTracker';
$lang['ctracker_module_1'] = 'Prüfsummenscanner';
$lang['ctracker_module_2'] = 'Credits';
$lang['ctracker_module_3'] = 'Dateiscanner';
$lang['ctracker_module_4'] = 'Globale Nachricht';
$lang['ctracker_module_5'] = 'IP&Agent Blocker';
$lang['ctracker_module_6'] = 'Logmanager';
$lang['ctracker_module_7'] = 'Wartung & Tests';
$lang['ctracker_module_8'] = 'Miserable Benutzer';
$lang['ctracker_module_9'] = 'Einstellungen';
$lang['ctracker_module_10'] = 'Wiederherstellen';
$lang['ctracker_module_11'] = 'Footer';


/*
 * Language Strings used in ACP Modules itself
 */
$lang['ctracker_wrong_module'] = 'Unbekannte Modulnummer';
$lang['ctracker_img_descriptions'] = 'Bild';
$lang['ctracker_set_catname1'] = 'IP, Proxy & UserAgent Blocker';
$lang['ctracker_set_catname2'] = 'Suchschutz-System';
$lang['ctracker_set_catname3'] = 'Loginschutz-System';
$lang['ctracker_set_catname4'] = 'Automatische Spammererkennung';
$lang['ctracker_set_catname5'] = 'Registrierschutz-System';
$lang['ctracker_set_catname6'] = 'Passwortkontrolle';
$lang['ctracker_set_catname7'] = 'Allgemeine Sicherheitsfunktionen';
$lang['ctracker_set_catname8'] = 'Sonstige Einstellungen';
$lang['ctracker_settings_head'] = 'CrackerTracker Einstellungen';
$lang['ctracker_settings_expl'] = 'Hier kannst Du alle Einstellungen des CBACK CrackerTracker Sicherheitssystems anpassen.';
$lang['ctracker_button_submit'] = 'Einstellungen speichern';
$lang['ctracker_button_reset'] = 'Zurücksetzen';

$lang['ctracker_settings_m1'] = 'IP Blocker aktivieren';
$lang['ctracker_settings_e1'] = 'Schaltet den IP, Proxy und UserAgent Blocker ein oder aus.';
$lang['ctracker_settings_m2'] = 'IP Blocker Loggröße';
$lang['ctracker_settings_e2'] = 'Hier kannst Du die Anzahl der Einträge für die Logdatei des IP Blockers einstellen. Wird die Anzahl überschritten wird die Logdatei automatisch gelöscht, um Webspace zu sparen.';
$lang['ctracker_settings_m3'] = 'Suchschutz aktivieren';
$lang['ctracker_settings_e3'] = 'Hier kannst Du das Suchschutz-System des CrackerTrackers ein- oder ausschalten.';
$lang['ctracker_settings_m4'] = 'Suchzeit für Benutzer';
$lang['ctracker_settings_e4'] = 'Zeitspanne die registrierte Benutzer warten müssen, wenn das Suchschutz-System aktiviert wird, bis sie erneut suchen können. (in Sekunden)';
$lang['ctracker_settings_m5'] = 'Suchanzahl für Benutzer';
$lang['ctracker_settings_e5'] = 'Hier kannst Du einstellen, wie viele Suchanfragen in der oben angegebenen Zeitspanne von registrierten Benutzern durchgeführt werden dürfen. Wenn diese Anzahl überschritten wird, werden weitere Suchanfragen für die oben eingestellte Zeit blockiert, um die Serverbelastung zu reduzieren.';
$lang['ctracker_settings_m6'] = 'Suchzeit für Gäste';
$lang['ctracker_settings_e6'] = 'Zeitspanne die Gäste warten müssen, wenn das Suchschutz-System aktiviert wird, bis sie erneut suchen können. (in Sekunden)';
$lang['ctracker_settings_m7'] = 'Suchanzahl für Gäste';
$lang['ctracker_settings_e7'] = 'Hier kannst Du einstellen, wie viele Suchanfragen in der oben angegebenen Zeitspanne von Gästen durchgeführt werden dürfen. Wenn diese Anzahl überschritten wird, werden weitere Suchanfragen für die oben eingestellte Zeit blockiert, um die Serverbelastung zu reduzieren.';
$lang['ctracker_settings_m8'] = 'Loginschutz einschalten';
$lang['ctracker_settings_e8'] = 'Hier kannst Du das Loginschutz-System des CrackerTrackers aktivieren oder deaktivieren.';
$lang['ctracker_settings_m9'] = 'Loggröße für falsche Logins';
$lang['ctracker_settings_e9'] = 'Hier kannst Du einstellen, wie viele Einträge in der Logdatei für falsche Loginversuche gespeichert werden, bis diese automatisch gelöscht werden, um Webspace zu sparen.';
$lang['ctracker_settings_m10'] = 'Loginanzahl bis Visuelle Bestätigung';
$lang['ctracker_settings_e10'] = 'Wie oft darf ein Benutzer sich fehlerhaft einloggen, bis zum Schutz vor BruteForce Attacken die Visuelle Bestätigung angezeigt wird?';
$lang['ctracker_settings_m11'] = 'Loginhistory';
$lang['ctracker_settings_e11'] = 'Hier kannst Du die Login History für Benutzer aktivieren oder deaktivieren.';
$lang['ctracker_settings_m12'] = 'Einträge in der Login History pro Benutzer';
$lang['ctracker_settings_e12'] = 'Hier kannst Du einstellen, wie viele erfolgreiche Logins in der Login History jedes Users gespeichert werden. Bei der Loginhistory haben alle Benutzer die Möglichkeit selbst zu prüfen, ob die Zeiten und IP Adressen ihrer Logins in Ordnung sind.';
$lang['ctracker_settings_m13'] = 'Login IP Funktion';
$lang['ctracker_settings_e13'] = 'Aktiviert oder deaktiviert das Login-IP-System. Jeder Benutzer hat die Möglichkeit auf der Loginsicherheit Seite das System zu aktivieren oder deaktivieren, wenn es an dieser Stelle eingeschaltet wurde. Das IP-Schutz-System prüft hier Änderungen der Benutzer IP Adresse und informiert den Benutzer beim nächsten Login darüber, dass der IP Bereich seit dem letzten Login verändert wurde. Hier bestünde dann die Möglichkeit, dass sich jemand von einem anderen Ort aus eingeloggt hat.';
$lang['ctracker_settings_m14'] = 'Spammererkennung';
$lang['ctracker_settings_e14'] = 'Hier kann der Modus für die automatische Spammererkennung eingestellt werden.';
$lang['ctracker_settings_m15'] = 'Spammer Zeitspanne';
$lang['ctracker_settings_e15'] = 'Zeitspanne in der Posts eines Benutzers zur Spammererkennung gezählt werden. (in Sekunden)';
$lang['ctracker_settings_m16'] = 'Spammer Postanzahl';
$lang['ctracker_settings_e16'] = 'Erlaubte Anzahl an Posts in der obigen Zeitspanne. Wird dieser Wert überschritten, wird der User als Spammer identifiziert und die im obigen Modus eingestellte Aktion durchgeführt.';
$lang['ctracker_settings_m17'] = 'Spammer Loggröße';
$lang['ctracker_settings_e17'] = 'Loggröße in der als Spammer identifizierte Benutzer gespeichert werden.';
$lang['ctracker_settings_m18'] = 'Registrierschutz';
$lang['ctracker_settings_e18'] = 'Hier kannst Du den Registrierschutz aktivieren oder deaktivieren.';
$lang['ctracker_settings_m19'] = 'Blockzeit für Registrierung';
$lang['ctracker_settings_e19'] = 'Hier kann die Zeitspanne eingestellt werden, die zwischen zwei Registrierungen vergehen muss, ehe ein neuer Benutzer sich wieder registrieren kann. (in Sekunden)';

$lang['ctracker_settings_m21'] = 'IP Watcher';
$lang['ctracker_settings_e21'] = 'Wenn diese Funktion aktiviert wurde, kann sich ein Benutzer mit einer identischen IP Adresse nur einmal registrieren, bis sich jemand mit anderer IP Adresse wieder registriert hat.';
$lang['ctracker_settings_m22'] = 'Passwortgültigkeit';
$lang['ctracker_settings_e22'] = 'Aktiviert die Überprüfung der Passwortgültigkeit für alle Benutzer.';
$lang['ctracker_settings_m23'] = 'Passwortgültigkeit in Tagen';
$lang['ctracker_settings_e23'] = 'Wie lange ist ein Benutzerpasswort gültig, ehe ein Hinweis zum Ändern erscheint? (in Tagen)';
$lang['ctracker_settings_m24'] = 'Passwort Komplexitätskontrolle';
$lang['ctracker_settings_e24'] = 'Diese Funktion überprüft Benutzerpasswörter auf Komplexität.';
$lang['ctracker_settings_m25'] = 'Passwort Komplexitätsmodus';
$lang['ctracker_settings_e25'] = 'Hier kann eingestellt werden, ob zwingend Zeichen in Passwörtern vorhanden sein müssen.';
$lang['ctracker_settings_m26'] = 'Passwort Mindestlänge';
$lang['ctracker_settings_e26'] = 'Hier kannst Du die Zeichenzahl einstellen, die ein Passwort mindestens haben muss.';
$lang['ctracker_settings_m27'] = 'Passwort Reset Prüfer';
$lang['ctracker_settings_e27'] = 'Erlaubt einem Benutzer in einer nachfolgend einstellbaren Zeitspanne nur einmal sein Passwort zurückzusetzen. Dies verhindert, dass Angreifer diese Funktion ausnutzen können, um einen Benutzer mit Passwort Resetmails zuzuspammen.';
$lang['ctracker_settings_m28'] = 'Passwort Reset Zeitspanne';
$lang['ctracker_settings_e28'] = 'In welcher Zeitspanne darf ein Benutzer sein Passwort zurücksetzen? (in Minuten)';
$lang['ctracker_settings_m29'] = 'E-Mail Überwachung';
$lang['ctracker_settings_e29'] = 'Hier kannst Du die Funktion aktivieren, dass Benutzer die boardinterne Mailfunktion nur innerhalb einer bestimmten Zeitspanne einmal benutzen dürfen. Dies verhindert Spamming.';
$lang['ctracker_settings_m30'] = 'E-Mail Zeitspanne';
$lang['ctracker_settings_e30'] = 'Wie viel Zeit darf zwischen zwei E-Mails vergehen, die ein Benutzer über die boardinterne Mailfunktion versenden darf? (in Minuten)';
$lang['ctracker_settings_m31'] = 'Auto Wiederherstellung';
$lang['ctracker_settings_e31'] = 'Aktiviert die Funktion automatisch Boardeinstellungen zu sichern. Wenn diese fehlschlagen, kann damit einfach wieder zur letzten funktionierenden Konfiguration zurückgekehrt werden.';
$lang['ctracker_settings_m32'] = 'Visuelle Bestätigung für Gäste';
$lang['ctracker_settings_e32'] = 'Wenn Du diese Funktion einschaltest, müssen Gäste beim Schreiben eines neuen Beitrags einen visuellen Code eingeben, damit ihr Post eingetragen wird. Dies schützt vor vollautomatischen Spambots.';
$lang['ctracker_settings_m33'] = 'Wegwerf-Maildienst Schutz';
$lang['ctracker_settings_e33'] = 'CrackerTracker hat intern eine Liste von sogenannten Wegwerf-Maildiensten. Wenn Du diese Funktion aktivierst, können sich keine Benutzer mit einer solchen Mailadresse mehr registrieren, um zum Beispiel die E-Mail Benutzer-Konto Aktivierung zu umgehen.';
$lang['ctracker_settings_m34'] = 'Erkennung von fehlerhafter Konfiguration';
$lang['ctracker_settings_e34'] = 'Wenn Du diese Funktion aktiviert hast, prüft CrackerTracker bei den allgemeinen Boardeinstellungen von phpBB die Angaben auf Gültigkeit. So kannst Du Dein Board nicht mehr so leicht durch Fehlkonfiguration beschädigen!';
$lang['ctracker_settings_m35'] = 'Spammer Erkennung erhöhen';
$lang['ctracker_settings_e35'] = 'Wenn Du diese Funktion aktivierst, wird CrackerTracker gezielter auf menschlich durchgeführte Spamregistrierungen oder Spamposts achten. Die meisten können somit erkannt und blockiert werden.';
$lang['ctracker_settings_m36'] = 'Spammer Schlüsselwort Überprüfung';
$lang['ctracker_settings_e36'] = 'Wenn "Spammer Detection Boost" aktiviert wurde, dann kannst Du mit dieser Option zuschalten, dass zusätzlich Schlüsselwörter in Profil und Posts gescannt werden, um Spammer als solche zu identifizieren.<br /><br /><b>ACHTUNG:</b> Hier besteht eine höhere Gefahr von Fehlerkennungen für neue User. Es sollte dann ständig das Logfile für Spammer Detection überprüft werden.';


/*
 * Credits page in ACP
 */
$lang['ctracker_credits_head'] = 'Credits';
$lang['ctracker_credits_subhead'] = 'Hier befinden sich ein paar Hinweise und die Credits des CBACK CrackerTrackers. Eine Seite um Dir weitere Informationen zu sicherheitsrelevanten Dingen zu geben, sowie eine Möglichkeit "Danke" zu sagen.';
$lang['ctracker_credits_donate'] = 'Spenden';
$lang['ctracker_credits_donate_expl'] = 'Gefällt Dir <b>CBACK CrackerTracker Professional</b>? Dann wäre es sehr nett von Dir, wenn Du das CBACK Projekt mit einer kleinen PayPal Spende unterstützen würdest. Weiterentwicklung und Servermiete kosten unser non-profit Projekt viel Geld. Mit einer kleinen Unterstützung hilfst Du, dass wir unsere Services wie zum Beispiel den CrackerTracker weiterhin kostenfrei anbieten können. <br /><br />Vielen Dank für die Unterstützung!';
$lang['ctracker_credits_credits'] = 'Credits';
$lang['ctracker_credits_credits_1'] = 'Idee & Umsetzung';
$lang['ctracker_credits_credits_2'] = 'Herstellerseite und Supportforum';
$lang['ctracker_credits_credits_3'] = 'Icons';
$lang['ctracker_credits_credits_4'] = 'Offizielle Downloadseite';
$lang['ctracker_credits_moddownload'] = 'CrackerTracker MOD Download';
$lang['ctracker_credits_thanks'] = 'Dank an...';
$lang['ctracker_credits_thanks_text'] = 'An dieser Stelle geht ein Dankeschön an einige Personen die mir bei der MOD Entwicklung mit Ideen, Tests und mehr zur Seite standen.';
$lang['ctracker_credits_thanks_to'] = '<b>Featureideen, Sicherheitstests und Kontrolllesen</b><br />Tekin Birdüzen<br /><i>(<a href="http://www.cybercosmonaut.de" target="_blank">cYbercOsmOnauT</a>)</i><br /><br /><br /><br /><b>Featurevorschläge</b><br />Bernhard Jaud<br /><i>(GenuineParts)</i><br /><br /><br /><br /><b>Übersetzer</b><br />mc-dragon<br /><i>(Englisch)</i><br /><br /><br /><br /><b>Korrektur (Englisch)</b><br />George<br />Sommerset<br /><i>(<a href="http://www.englisch-hilfen.de" target="_blank">www.englisch-hilfen.de</a>)</i><br /><br /><br /><br /><b>Korrektur (Deutsch)</b><br />Johnny (diegoriv)<br /><i>(<a href="http://alpinum.at" target="_blank">Alpinum.at</a>)</i><br /><br /><br /><br /><b>Beta Tester</b><br />Danke an alle Teilnehmer des Beta-Tests,<br />an die CBACK Premium User und natürlich auch an<br />einige Kollegen aus der "Modder-Szene", welche bei Beta Tests und Korrekturlesen geholfen haben.</i>';
$lang['ctracker_credits_info'] = 'Noch mehr Sicherheit?';
$lang['ctracker_credits_info_text'] = 'Die perfekte Erweiterung für phpBB und den CrackerTracker: Für optimale Sicherheit vor bösen Spambots und Registrierbots empfehlen wir den Mod <b>Advanced Visual Confirmation</b> von AmigaLink. Dieser MOD erweitert die CAPTCHA Funktion von phpBB und von CrackerTracker Professional mit einem komplexeren System, welches nicht von Bots ausgelesen werden kann. Den MOD kann man auf <a href="http://www.amigalink.de" target="_blank">www.AmigaLink.de</a> herunterladen.<br /><br /><br /><br />Wir empfehlen diesen MOD für optimale Sicherheit ebenfalls in Dein Forum einzubauen!';


/*
 * File Hash Check in ACP
 */
$lang['ctracker_fchk_head'] = 'CrackerTracker Prüfsummenscanner';
$lang['ctracker_fchk_subhead'] = 'Dieser Scanner erzeugt für jede PHP Datei Deines Forums eine Prüfsumme, sobald Du auf "Erstelle oder aktualisiere Prüfsummen" klickst. Danach hast Du immer die Möglichkeit mit "Überprüfe Dateiänderungen" festzustellen, ob sich die Dateien seit dem letzten Erzeugen von Prüfsummen geändert haben oder nicht. Damit kannst Du überwachen, ob sich vielleicht Dateien geändert haben, ohne das Du selbst etwas editiert hast. Dies ist meist ein Anzeichen davon, dass jemand Zugang zu Deinem Foren-Datenbestand bekommen hatte. Achte übrigens auch auf die letzte Prüfzeit. So siehst Du, ob jemand unbefugt diesen Prüfsummenscanner aktiviert hat!<br /><br /><br /><b>Information:</b> Nicht alle Server unterstützen dieses Feature. Gelegentlich kann es zu Script Timeouts kommen, wenn der Server zu lange braucht, um die phpBB Dateiliste zu erzeugen. Andere Server brechen den Vorgang ab, da er recht performanceintensiv ist.<br /><br /><br />&raquo; Die letzte Aktualisierung der Dateiprüfsummen fand am <b>%s</b> statt.';
$lang['ctracker_fchk_funcheader'] = 'Funktionen';
$lang['ctracker_fchk_tableheader'] = 'Systemausgabe';
$lang['ctracker_fchk_option1'] = 'Erstelle oder aktualisiere Prüfsummen';
$lang['ctracker_fchk_option2'] = 'Überprüfe Dateiänderungen';
$lang['ctracker_fchk_select_action'] = 'Bitte wähle eine Aktion aus!';
$lang['ctracker_fchk_update_action'] = 'Aktualisieren der Dateiprüfsummen wurde vollständig ausgeführt!';
$lang['ctracker_fchk_tablehead1'] = 'Dateipfad';
$lang['ctracker_fchk_tablehead2'] = 'Status';
$lang['ctracker_file_unchanged'] = 'UNVERÄNDERT';
$lang['ctracker_file_changed'] = 'GEÄNDERT';
$lang['ctracker_file_deleted'] = 'GELÖSCHT';


/*
 * File Safety Scanner in ACP
 */
$lang['ctracker_fscan_complete'] = 'Der Dateiscan wurde erfolgreich ausgeführt. Bitte klicke nun auf "Ergebnisse anzeigen", damit die Liste mit den Prüfergebnissen angezeigt wird und Du die Möglichkeit hast, die Dateien zu korrigieren. <br /><br /><br /><br /><u>HINWEIS:</u><br /><br />Gelegentlich kann es vorkommen, dass CrackerTracker eine Datei als unsicher erkennt. Dies liegt natürlich daran, dass PHP Codedateien sehr, sehr unterschiedlich sein können und gelegentlich ein Programmierer sogar unbedingt möchte, dass Code von außen beschrieben werden kann. In diesem Fall - und wirklich NUR wenn Du Dir absolut sicher bist und die Datei genauestens überprüft hast - kannst Du die entsprechende Datei mit einem Signalkommentar bei der Prüfung als sicher einstufen, sodass Du beim nächsten Scan nicht mehr mit dieser Datei als unsicher konfrontiert wirst. Füge dazu einfach nach dem Dateibeginn <?php den folgenden Kommentar ein: <br /><br /><br /><i>// CTracker_Ignore: File Checked By Human</i><br /><br /><br />Wenn Du Dir unsicher bist kannst Du auch auf der <a href="http://www.community.cback.de" target="_blank">CBACK Community</a> genauere Anweisungen für die Scanergebnisse, und wie man diese Stellen bereinigen kann, erfahren. Bitte benutze auch die dortige Forensuche, da zu diesen Anfragen sicherlich schon viele beantwortete Threads vorliegen.';
$lang['ctracker_fscan_unchecked'] = 'NICHT ÜBERPRÜFT';
$lang['ctracker_fscan_ok'] = 'SICHER';
$lang['ctracker_fscan_prob_1'] = 'extension.inc nicht / zu spät eingebunden';
$lang['ctracker_fscan_prob_2'] = '$phpbb_root_path ist möglicherweise nicht richtig initialisiert';
$lang['ctracker_fscan_prob_3'] = 'common.php / pagestart.php möglicherweise nicht oder zu spät eingebunden';
$lang['ctracker_fscan_prob_4'] = 'Code in der Datei ist möglicherweise außerhalb von phpBB ausführbar';
$lang['ctracker_fscan_prob_5'] = 'extension.inc fehlt und/oder $phpbb_root_path und/oder gesetzte Konstante nicht gefunden';
$lang['ctracker_fscan_prob_def'] = 'Eine undefinierter Fall ist beim Scannen aufgetreten';
$lang['ctracker_fscan_important'] = 'Bitte beachten!';
$lang['ctracker_fscan_sel_action'] = 'Zum Starten der Überprüfung aller Dateien klicke bitte auf "Dateiprüfung starten". Wenn dies beendet ist, klicke auf "Ergebnisse anzeigen", um die Resultate der Überprüfung zu sehen. Diese Liste kann jederzeit wieder über diesen ACP Punkt abgerufen werden, bis eine neuen Prüfung gestartet wird.<br /><br /><br />Aus technischen Gründen ist es jedoch nicht möglich eine <u>eindeutige</u> und <u>unfehlbare</u> Auskunft über die Sicherheit eines PHP Skriptes zu geben. Wiege Dich also nicht in falschen Sicherheitsvorstellungen! Es kann vorkommen, dass der Scanner eine sichere Datei als unsicher einstuft, und es kann auch passieren, dass dieser Scanner eine Datei als sicher anzeigt die anderweitig eine Lücke aufweist. PHP ist so tiefgehend und Codes sind meist noch von so vielen anderen Faktoren oder Bereichen abhängig, dass ein 100%iges Resultat nicht geliefert werden kann. Ansonsten gäbe es keine unsicheren Skripte mehr. ;-)<br /><br /><br />Dieser Scanner ist auf einige Löcher in den includes Dateien spezialisiert und spürt Bereiche des Forums auf, die von außen erreichbar sind. Damit bietest Du eine Angriffsfläche die der CrackerTracker nicht überwachen kann, da CrackerTracker nur innerhalb des Forums arbeitet. Mit diesem Scanner kann man einen Großteil dieser Gefahren leicht aufspüren und beseitigen.<br /><br /><br />Weitere Hinweise und Anleitungen und Hilfen, wie als unsicher gezeigte Dateien korrigiert werden können, findest Du mit der Suchfunktion auf der CBACK Community!<br /><br /><br />';
$lang['ctracker_fscan_head'] = 'CBACK CrackerTracker Sicherheitsscanner';
$lang['ctracker_fscan_subhead'] = 'Dieser Sicherheitsscanner prüft alle PHP Dateien Deines Forums auf gravierende Sicherheitsprobleme und legt hier besonderes Augenmerk darauf, dass keine includes Lücken vorliegen die durch Würmer ausgenutzt werden. Diese Lücken können meist so ausgenutzt werden, dass Code von außen eingeschleust wird ohne andere Boarddateien anzusprechen. Damit bleibt auch das CrackerTracker-System inaktiv und kann die Datei nicht schützen. Mit diesem ACP Modul hast Du die Möglichkeit solche Lücken gezielt aufzuspüren.<br /><br /><br /><b>Bitte beachten:</b> Nicht alle Server unterstützen diese Funktion! Bei sehr großen Boards kann es durchaus passieren, dass dieses performanceintensive Scansystem die PHP Execution Time überschreitet. Der Algorithmus des Scanners wurde so gut wie möglich optimiert, dass sich dies in Grenzen hält, aber es kann auf einigen Maschinen dennoch vorkommen. Wir bitten dies zu berücksichtigen.<br /><br /><br />&raquo; Die letzte Überprüfung fand am <b>%s</b> statt.';
$lang['ctracker_fscan_option1'] = 'Dateiprüfung starten';
$lang['ctracker_fscan_option2'] = 'Ergebnisse anzeigen';


/*
 * Global message in ACP
 */
$lang['ctracker_glob_msg_head'] = 'Globale Nachricht';
$lang['ctracker_glob_msg_subhead'] = 'Hier kannst Du eine globale Nachricht an alle Benutzer hinterlassen. Diese Nachricht ist dann beim nächsten Login für den Benutzer als Meldungsbox sichtbar. Du hast die Möglichkeit entweder auf einen Thread zu verweisen oder einen beliebigen eigenen Text zu schreiben. Ein eigener Text ist allerdings auf 255 Zeichen begrenzt! Das reicht aber aus, wenn Du z.B. wegen Änderungen im Template nur schnell darauf hinweisen möchtest, dass man beispielsweisen den Browser Cache leeren soll. ;)';
$lang['ctracker_glob_msg_entry'] = 'Globale Nachricht erstellen';
$lang['ctracker_glob_msg_submit'] = 'Eintragen';
$lang['ctracker_glob_msg_reset'] = 'Nachricht zurückziehen';
$lang['ctracker_glob_msg_type'] = 'Typ der globalen Nachricht';
$lang['ctracker_glob_type_1'] = 'Text';
$lang['ctracker_glob_type_2'] = 'Link';
$lang['ctracker_glob_msg_txt'] = 'Text der globalen Nachricht';
$lang['ctracker_glob_msg_link'] = 'Linkziel in der Nachricht';
$lang['ctracker_glob_msg_reset'] = 'Aktuelle Nachricht zurückziehen';
$lang['ctracker_glob_res_txt'] = 'Eine vorher eingetragene Nachricht kann mit einem Klick auf den Button "Aktuelle Nachricht zurückziehen" abgeschaltet werden. Die Benutzer erhalten dann die letzte Globale Nachricht nicht mehr weiter.';
$lang['ctracker_glob_msg_saved'] = 'Die globale Nachricht wurde erfolgreich gespeichert.<br /><br />Klicke <a href="%s">HIER</a> um zurück zur CrackerTracker Verwaltung zu gelangen.';
$lang['ctracker_glob_msg_reset_ok'] = 'Die globale Nachricht wurde nun von der Nutzertabelle entfernt. Benutzer bekommen die eingetragene Nachricht nicht mehr angezeigt.<br /><br />Klicke <a href="%s">HIER</a> um zurück zur CrackerTracker Verwaltung zu gelangen.';
$lang['ctracker_dbg_mode'] = '<b>CrackerTracker l&auml;uft im DEBUG MODE. Dies sollte kein Dauerzustand sein.<br />Bitte stelle wieder den normalen Modus ein, sobald Du es nicht mehr ben&ouml;tigst.<br /><br /><u>Diese Meldung kann nicht gel&ouml;scht werden!</u></b>';

/*
 * IP&Agent Blocker
 */
$lang['ctracker_ipb_delete'] = 'Eintrag löschen';
$lang['ctracker_ipb_blocklist'] = 'Blocklisteinträge';
$lang['ctracker_ipb_head'] = 'Proxy, IP & UserAgent Blocker';
$lang['ctracker_ipb_description'] = 'Hier kannst Du die Blockliste für den CrackerTracker Proxy, IP und UserAgent Blocker verwalten. Du kannst sowohl vorhandene Einträge löschen sowie neue Einträge hinzufügen. Bei einem Neueintrag hast Du die Möglichkeit den Stern (*) als Jokerzeichen zu benutzen, um beliebige Kombinationen aus dem Filtereintrag in der Liste einzutragen. z.B.: lwp* sperrt lwp-1 genauso wie lwp-simple etc. oder 100.*.*.* sperrt alle IP Adressen die mit 100. beginnen.<br /><br /><b>WARNUNG:</b> Achte darauf, dass Du nicht Deinen eigenen UserAgent oder Deine eigene IP sperrst. Ansonsten kannst Du das Forum nicht mehr betreten!';


/*
 * Log Manager
 */
$lang['ctracker_log_manager_title'] = 'Logfile Manager';
$lang['ctracker_log_manager_subtitle'] = 'Hier kannst Du alle Logdateien des CrackerTrackers anzeigen und löschen.';
$lang['ctracker_log_manager_overview'] = 'Log Manager Übersicht';
$lang['ctracker_log_manager_blocked'] = 'CrackerTracker hat bisher <b>%s</b> Attacken blockiert.';
$lang['ctracker_log_manager_overview'] = 'Logdatei Übersicht';
$lang['ctracker_log_manager_head1'] = 'Logname';
$lang['ctracker_log_manager_head2'] = 'Anzahl der Einträge';
$lang['ctracker_log_manager_head3'] = 'Funktionen';
$lang['ctracker_log_manager_name2'] = 'Wurm & Exploit Protection';
$lang['ctracker_log_manager_name3'] = 'IP, Proxy & UserAgent Blocker';
$lang['ctracker_log_manager_name4'] = 'Fehlerhafte Logins';
$lang['ctracker_log_manager_name5'] = 'Blockierte Spammer';
$lang['ctracker_log_manager_name6'] = 'Debug-Einträge';
$lang['ctracker_log_manager_view'] = 'ANSEHEN';
$lang['ctracker_log_manager_delete'] = 'LÖSCHEN';
$lang['ctracker_log_manager_delete_all'] = 'Alle Logdateien löschen';
$lang['ctracker_log_manager_deleted'] = 'Das Logfile wurde erfolgreich gelöscht!';
$lang['ctracker_log_manager_all_deleted'] = 'Alle Logdateien wurden erfolgreich gelöscht!';
$lang['ctracker_log_manager_showheader1'] = 'Diese Logdatei enthält aktuell <b>einen</b> Eintrag. Klicke <b><a href="%s">HIER</a></b>, um zur Logdatei Übersicht zurückzukehren.';
$lang['ctracker_log_manager_showheader'] = 'Diese Logdatei enthält aktuell <b>%s</b> Einträge.<br />Klicke <b><a href="%s">HIER</a></b>, um zur Logdatei Übersicht zurückzukehren.';
$lang['ctracker_log_manager_showlog'] = 'Logdatei ansehen';
$lang['ctracker_log_manager_cell_1'] = 'Datum / Zeit';
$lang['ctracker_log_manager_cell_2a'] = 'Aufruf';
$lang['ctracker_log_manager_cell_2b'] = 'Benutzername';
$lang['ctracker_log_manager_cell_3'] = 'Referer';
$lang['ctracker_log_manager_cell_4'] = 'UserAgent';
$lang['ctracker_log_manager_cell_5'] = 'IP Adresse';
$lang['ctracker_log_manager_cell_6'] = 'Remote Host';
$lang['ctracker_log_manager_sysmsg'] = 'Letzte Bereinigung der Logdatei fand am <b>%s</b> statt.';


/*
 * Footer configuration
 */
$lang['ctracker_footer_head'] = 'Footerverwaltung';
$lang['ctracker_footer_subhead'] = 'Hier kannst Du auswählen, welchen Footer CrackerTracker in Deinem Forum anzeigen soll. Wir bitten darum, dass der Footer und damit der Hinweis zu www.cback.de intakt bleibt!';
$lang['ctracker_select_footer'] = 'Footer auswählen';
$lang['ctracker_footer_saveit'] = 'Footerlayout übernehmen';
$lang['ctracker_footer_done'] = 'Änderungen am Footer Layout wurden erfolgreich gespeichert!';


/*
 * Maintenance Module in ACP
 */
$lang['ctracker_ma_unknown'] = '<span class="text_orange">UNBEKANNT</span>';
$lang['ctracker_ma_secure'] = '<span class="text_green">SICHER</span>';
$lang['ctracker_ma_warning'] = '<span class="text_red">WARNUNG</span>';
$lang['ctracker_ma_active'] = '<span class="text_green">AKTIV</span>';
$lang['ctracker_ma_inactive'] = '<span class="text_red">INAKTIV</span>';
$lang['ctracker_ma_on'] = 'EINGESCHALTET';
$lang['ctracker_ma_off'] = 'AUSGESCHALTET';
$lang['ctracker_ma_ca'] = '<span class="text_green">OK</span>';
$lang['ctracker_ma_ci'] = '<span class="text_red">NICHT GESETZT</span>';
$lang['ctracker_ma_head'] = 'Wartung und Systemprüfung';
$lang['ctracker_ma_subhead'] = 'Hier hast Du die Möglichkeit Wartungsfunktionen am CrackerTracker-System durchzuführen. Des Weiteren überprüft dieses System automatisch die CrackerTracker Sicherheitsmodule auf Funktion und gibt Dir Hinweise zur Sicherheitsoptimierung Deines Systems.';
$lang['ctracker_ma_systest'] = 'Automatischer Systemtest';
$lang['ctracker_ma_sectest'] = 'Sicherheitstest';
$lang['ctracker_ma_maint'] = 'Wartungsfunktionen';
$lang['ctracker_ma_name_1'] = 'Wurm- & Exploitschutz-System';
$lang['ctracker_ma_name_2'] = 'Variable Control Unit';
$lang['ctracker_ma_name_3'] = 'IP, Proxy & UserAgent Protection Unit';
$lang['ctracker_ma_name_4'] = 'Wurmheuristik Definitionssatz - Anzahl der Definitionen: <b>%s</b>';
$lang['ctracker_ma_syshead_1'] = 'Sicherheitsmodul';
$lang['ctracker_ma_syshead_2'] = 'Status';
$lang['ctracker_ma_seccheck_1'] = 'Prüfpunkt';
$lang['ctracker_ma_seccheck_2'] = 'Version / Status';
$lang['ctracker_ma_seccheck_3'] = 'Empfehlung';
$lang['ctracker_ma_seccheck_4'] = 'Status';
$lang['ctracker_ma_scheck_1'] = 'PHP Version (<a href="http://www.php.net" target="_blank">Webseite besuchen</a>)';
$lang['ctracker_ma_scheck_2'] = '&raquo; PHP SAFE MODE';
$lang['ctracker_ma_scheck_3'] = '&raquo; PHP GLOBALS';
$lang['ctracker_ma_scheck_4'] = 'phpBB Version (<a href="http://www.phpbb.com" target="_blank">Webseite besuchen</a>)';
$lang['ctracker_ma_scheck_4a'] = '&raquo; Visuelle Bestätigung';
$lang['ctracker_ma_scheck_4b'] = '&raquo; Benutzer-Konto Aktivierung';
$lang['ctracker_ma_scheck_5'] = 'CBACK CrackerTracker (<a href="http://www.cback.de" target="_blank">Webseite besuchen</a>)';
$lang['ctracker_ma_chmod'] = '<b>CHMOD777 Status:</b> ';
$lang['ctracker_ma_desc_link'] = 'JETZT AUSFÜHREN';
$lang['ctracker_ma_desc1'] = '<b>IP, Proxy & UserAgent Tabelle leeren</b><br />Hiermit kannst Du <u>alle</u> Einträge aus der IP, Proxy & UserAgent Tabelle entfernen.';
$lang['ctracker_ma_desc2'] = '<b>Werkseinstellung: IP, Proxy & UserAgent Blocker</b><br />Hiermit kannst Du den Auslieferungszustand der IP, Proxy & UserAgent Datenbanktabelle wiederherstellen. Deine Filter gehen dabei verloren!';
$lang['ctracker_ma_desc3'] = '<b>Login History löschen</b><br />Hier kannst Du alle Einträge in der Login History entfernen, unabhängig vom User und unabhängig von der eingestellten Speicherzahl pro User.';
$lang['ctracker_ma_desc4'] = '<b>Datei-Hashprüfungstabelle leeren</b><br />Löscht alle gespeicherten Einträge in der Tabelle für den Datei-Hashcheck.';
$lang['ctracker_ma_desc5'] = '<b>Sicherheitsscanner Tabelle leeren</b><br />Löscht alle Ergebnisse, die bei der Datei-Sicherheitsprüfung in der Datenbank gespeichert wurden.';
$lang['ctracker_ma_succ_main'] = 'Vorgang erfolgreich ausgeführt!';
$lang['ctracker_ma_err_main'] = 'Vorgang nicht erfolgreich ausgeführt!';


/*
 * Miserable User Module in ACP...
 */
$lang['ctracker_mu_subhead'] = 'Ein Benutzer verhält sich nicht so wie er soll, jedoch besteht die Befürchtung, dass er sich bei einem normalen Ban wieder mit anderem Benutzer-Konto anmeldet oder genau das ist sogar schon passiert? Dann gibt es hier die Funktion "Miserable User", eine Funktion, welche relativ häufig gewünscht wurde. Allerdings koppelt das CrackerTracker-System dies nicht an das "Wir lösen unsinnige Fehlermeldungen aus" System an, welches leicht durchschaubar ist, sondern geht nach dem Prinzip "Don\'t feed the Monkey" vor: Wenn ein Benutzer als Miserable User markiert ist kann lediglich der Administrator seine Posts lesen. Für andere Benutzer sind die Beiträge unsichtbar, folglich kann niemand auf den Störenfried eingehen bis es diesem langweilig wird und er das Forum von sich aus verlässt.<br /><b>Hinweis: <u>Diese Funktion wirkt sich nur auf die Anzeige der Postings in einem Thread aus.</u> Mit "Zitat" oder "Suche" sieht man die Postings des "Miserable User" weiterhin!</b>';

$lang['ctracker_mu_select'] = 'Benutzer als Miserable User markieren';
$lang['ctracker_mu_find'] = 'Benutzernamen suchen';
$lang['ctracker_mu_send'] = 'Benutzer eintragen';
$lang['ctracker_mu_entr'] = 'Markierte Benutzer';
$lang['ctracker_mu_uname'] = 'Eingetragener Benutzername';
$lang['ctracker_mu_remove'] = 'Einträge entfernen';
$lang['ctracker_mu_no_defined'] = 'Zur Zeit sind keine Benutzer als "Miserable User" markiert.';


/*
 * Recovery feature in ACP
 */
$lang['ctracker_rec_head'] = 'System Wiederherstellung';
$lang['ctracker_rec_subhead'] = 'Hier hast Du die Möglichkeit, die Konfigurationstabelle Deines Forums zu sichern oder zur letzten funktionierenden Konfiguration zurückzukehren. Wenn Du die Funktion in den allgemeinen Einstellungen des CrackerTrackers aktiviert hast, dann wird die Konfigurationstabelle Deines Forums jedesmal gesichert, wenn Du die Allgemeine Forenkonfiguration änderst. (ACHTUNG! Es handelt sich <b>NICHT</b> um ein komplettes Datenbankbackup!)<br /><br />Wenn Du nicht mehr ins ACP kommst nachdem Du Einstellungen verändert hast, dann kannst Du die letzte als funktionierend bekannte Konfiguration auch über die Notfallkonsole des CrackerTrackers reaktivieren. Lese hierzu den Dateikommentar in der Datei <i>ctracker/emergency.php</i> für weitere Instruktionen zur Notfallwiederherstellung der Forenkonfiguration. Bitte beachte, dass diese Datei immer erst vor Benutzung freigegeben werden muss. Wie das geht steht ebenfalls im Dateikommentar.<br /><br /><b>ACHTUNG!</b> Diese Funktion sollte nur bei akuten Problemen benutzt werden!';
$lang['ctracker_rec_last_saved'] = 'Letztes Backup der Konfigurationstabelle: <b>%s</b>';
$lang['ctracker_rec_never_saved'] = 'Die Konfigurationstabelle wurde bislang noch nicht gesichert!';
$lang['ctracker_rec_backup'] = 'Backup der Konfigurationstabelle';
$lang['ctracker_rec_restore'] = 'Wiederherstellen der zuletzt gespeicherten Konfigurationstabelle';
$lang['ctracker_rec_succ'] = 'Der Datenbankvorgang wurde erfolgreich ausgeführt.';
$lang['ctracker_rec_pab'] = 'Wiederherstellung erst nach einem erfolgreichen Backup möglich!';

?>