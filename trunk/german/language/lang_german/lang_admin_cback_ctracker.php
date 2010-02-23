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
	'ctracker_module_1' => 'Pr�fsummenscanner',
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
	'ctracker_button_reset' => 'Zur�cksetzen',

	'ctracker_settings_m1' => 'IP Blocker aktivieren',
	'ctracker_settings_e1' => 'Schaltet den IP, Proxy und UserAgent Blocker ein oder aus.',
	'ctracker_settings_m2' => 'IP Blocker Loggr��e',
	'ctracker_settings_e2' => 'Hier kannst du die Anzahl der Eintr�ge f�r die Logdatei des IP Blockers einstellen. Wird die Anzahl �berschritten wird die Logdatei automatisch gel�scht, um Webspace zu sparen.',
	'ctracker_settings_m3' => 'Suchschutz aktivieren',
	'ctracker_settings_e3' => 'Hier kannst du das Suchschutz-System des CrackerTrackers ein- oder ausschalten.',
	'ctracker_settings_m4' => 'Suchzeit f�r Benutzer',
	'ctracker_settings_e4' => 'Zeitspanne die registrierte Benutzer warten m�ssen, wenn das Suchschutz-System aktiviert wird, bis sie erneut suchen k�nnen. (in Sekunden)',
	'ctracker_settings_m5' => 'Suchanzahl f�r Benutzer',
	'ctracker_settings_e5' => 'Hier kannst du einstellen, wie viele Suchanfragen in der oben angegebenen Zeitspanne von registrierten Benutzern durchgef�hrt werden d�rfen. Wenn diese Anzahl �berschritten wird, werden weitere Suchanfragen f�r die oben eingestellte Zeit blockiert, um die Serverbelastung zu reduzieren.',
	'ctracker_settings_m6' => 'Suchzeit f�r G�ste',
	'ctracker_settings_e6' => 'Zeitspanne die G�ste warten m�ssen, wenn das Suchschutz-System aktiviert wird, bis sie erneut suchen k�nnen. (in Sekunden)',
	'ctracker_settings_m7' => 'Suchanzahl f�r G�ste',
	'ctracker_settings_e7' => 'Hier kannst du einstellen, wie viele Suchanfragen in der oben angegebenen Zeitspanne von G�sten durchgef�hrt werden d�rfen. Wenn diese Anzahl �berschritten wird, werden weitere Suchanfragen f�r die oben eingestellte Zeit blockiert, um die Serverbelastung zu reduzieren.',
	'ctracker_settings_m8' => 'Loginschutz einschalten',
	'ctracker_settings_e8' => 'Hier kannst du das Loginschutz-System des CrackerTrackers aktivieren oder deaktivieren.',
	'ctracker_settings_m9' => 'Loggr��e f�r falsche Logins',
	'ctracker_settings_e9' => 'Hier kannst du einstellen, wie viele Eintr�ge in der Logdatei f�r falsche Loginversuche gespeichert werden, bis diese automatisch gel�scht werden, um Webspace zu sparen.',
	'ctracker_settings_m10' => 'Loginanzahl bis Visuelle Best�tigung',
	'ctracker_settings_e10' => 'Wie oft darf ein Benutzer sich fehlerhaft einloggen, bis zum Schutz vor BruteForce Attacken die Visuelle Best�tigung angezeigt wird?',
	'ctracker_settings_m11' => 'Loginhistory',
	'ctracker_settings_e11' => 'Hier kannst du die Login Historie f�r Benutzer aktivieren oder deaktivieren.',
	'ctracker_settings_m12' => 'Eintr�ge in der Login Historie pro Benutzer',
	'ctracker_settings_e12' => 'Hier kannst du einstellen, wie viele erfolgreiche Logins in der Login Historie jedes Users gespeichert werden. Bei der Loginhistorie haben alle Benutzer die M�glichkeit selbst zu pr�fen, ob die Zeiten und IP Adressen ihrer Logins in Ordnung sind.',
	'ctracker_settings_m13' => 'Login IP Funktion',
	'ctracker_settings_e13' => 'Aktiviert oder deaktiviert das Login-IP-System. Jeder Benutzer hat die M�glichkeit auf der Loginsicherheit Seite das System zu aktivieren oder deaktivieren, wenn es an dieser Stelle eingeschaltet wurde. Das IP-Schutz-System pr�ft hier �nderungen der Benutzer IP Adresse und informiert den Benutzer beim n�chsten Login dar�ber, dass der IP Bereich seit dem letzten Login ver�ndert wurde. Hier best�nde dann die M�glichkeit, dass sich jemand von einem anderen Ort aus eingeloggt hat.',
	'ctracker_settings_m14' => 'Spammer-Erkennung',
	'ctracker_settings_e14' => 'Hier kann der Modus f�r die automatische Spammer-Erkennung eingestellt werden.',
	'ctracker_settings_m15' => 'Spammer Zeitspanne',
	'ctracker_settings_e15' => 'Zeitspanne in der Beitr�ge eines Benutzers zur Spammer-Erkennung gez�hlt werden. (in Sekunden)',
	'ctracker_settings_m16' => 'Spammer Postanzahl',
	'ctracker_settings_e16' => 'Erlaubte Anzahl an Posts in der obigen Zeitspanne. Wird dieser Wert �berschritten, wird der User als Spammer identifiziert und die im obigen Modus eingestellte Aktion durchgef�hrt.',
	'ctracker_settings_m17' => 'Spammer Loggr��e',
	'ctracker_settings_e17' => 'Loggr��e in der als Spammer identifizierte Benutzer gespeichert werden.',
	'ctracker_settings_m18' => 'Registrierschutz',
	'ctracker_settings_e18' => 'Hier kannst du den Registrierschutz aktivieren oder deaktivieren.',
	'ctracker_settings_m19' => 'Blockzeit f�r Registrierung',
	'ctracker_settings_e19' => 'Hier kann die Zeitspanne eingestellt werden, die zwischen zwei Registrierungen vergehen muss, ehe ein neuer Benutzer sich wieder registrieren kann. (in Sekunden)',

	'ctracker_settings_m21' => 'IP Watcher',
	'ctracker_settings_e21' => 'Wenn diese Funktion aktiviert wurde, kann sich ein Benutzer mit einer identischen IP Adresse nur einmal registrieren, bis sich jemand mit anderer IP Adresse wieder registriert hat.',
	'ctracker_settings_m22' => 'Passwortg�ltigkeit',
	'ctracker_settings_e22' => 'Aktiviert die �berpr�fung der Passwortg�ltigkeit f�r alle Benutzer.',
	'ctracker_settings_m23' => 'Passwortg�ltigkeit in Tagen',
	'ctracker_settings_e23' => 'Wie lange ist ein Benutzerpasswort g�ltig, ehe ein Hinweis zum �ndern erscheint? (in Tagen)',
	'ctracker_settings_m24' => 'Passwort Komplexit�tskontrolle',
	'ctracker_settings_e24' => 'Diese Funktion �berpr�ft Benutzerpassw�rter auf Komplexit�t.',
	'ctracker_settings_m25' => 'Passwort Komplexit�tsmodus',
	'ctracker_settings_e25' => 'Hier kann eingestellt werden, ob zwingend Zeichen in Passw�rtern vorhanden sein m�ssen.',
	'ctracker_settings_m26' => 'Passwort Mindestl�nge',
	'ctracker_settings_e26' => 'Hier kannst du die Zeichenzahl einstellen, die ein Passwort mindestens haben muss.',
	'ctracker_settings_m27' => 'Passwort Reset Pr�fer',
	'ctracker_settings_e27' => 'Erlaubt einem Benutzer in einer nachfolgend einstellbaren Zeitspanne nur einmal sein Passwort zur�ckzusetzen. Dies verhindert, dass Angreifer diese Funktion ausnutzen k�nnen, um einen Benutzer mit Passwort Resetmails zuzuspammen.',
	'ctracker_settings_m28' => 'Passwort Reset Zeitspanne',
	'ctracker_settings_e28' => 'In welcher Zeitspanne darf ein Benutzer sein Passwort zur�cksetzen? (in Minuten)',
	'ctracker_settings_m29' => 'E-Mail �berwachung',
	'ctracker_settings_e29' => 'Hier kannst du die Funktion aktivieren, dass Benutzer die boardinterne Mailfunktion nur innerhalb einer bestimmten Zeitspanne einmal benutzen d�rfen. Dies verhindert Spamming.',
	'ctracker_settings_m30' => 'E-Mail Zeitspanne',
	'ctracker_settings_e30' => 'Wie viel Zeit darf zwischen zwei E-Mails vergehen, die ein Benutzer �ber die boardinterne Mailfunktion versenden darf? (in Minuten)',
	'ctracker_settings_m31' => 'Auto Wiederherstellung',
	'ctracker_settings_e31' => 'Aktiviert die Funktion automatisch Boardeinstellungen zu sichern. Wenn diese fehlschlagen, kann damit einfach wieder zur letzten funktionierenden Konfiguration zur�ckgekehrt werden.',
	'ctracker_settings_m32' => 'Visuelle Best�tigung f�r G�ste',
	'ctracker_settings_e32' => 'Wenn du diese Funktion einschaltest, m�ssen G�ste beim Schreiben eines neuen Beitrags einen visuellen Code eingeben, damit ihr Post eingetragen wird. Dies sch�tzt vor vollautomatischen Spambots.',
	'ctracker_settings_m33' => 'Wegwerf-Maildienst Schutz',
	'ctracker_settings_e33' => 'CrackerTracker hat intern eine Liste von sogenannten Wegwerf-Maildiensten. Wenn du diese Funktion aktivierst, k�nnen sich keine Benutzer mit einer solchen Mailadresse mehr registrieren, um zum Beispiel die E-Mail Benutzer-Konto Aktivierung zu umgehen.',
	'ctracker_settings_m34' => 'Erkennung von fehlerhafter Konfiguration',
	'ctracker_settings_e34' => 'Wenn du diese Funktion aktiviert hast, pr�ft CrackerTracker bei den allgemeinen Boardeinstellungen von Icy Phoenix die Angaben auf G�ltigkeit. So kannst du dein Board nicht mehr so leicht durch Fehlkonfiguration besch�digen!',
	'ctracker_settings_m35' => 'Spammer Erkennung steigern',
	'ctracker_settings_e35' => 'Wenn du diese Funktion aktivierst, wird CrackerTracker gezielter auf menschlich durchgef�hrte Spam-Registrierungen oder Spam-Beitr�ge achten. Die meisten k�nnen somit erkannt und blockiert werden.',
	'ctracker_settings_m36' => 'Spammer Schl�sselwort �berpr�fung',
	'ctracker_settings_e36' => 'Wenn "Spammer Erkennung steigern" aktiviert wurde, dann kannst du mit dieser Option zuschalten, dass zus�tzlich Schl�sselw�rter in Profil und Beitr�gen gescannt werden, um Spammer als solche zu identifizieren.<br /><br /><b>ACHTUNG:</b> Hier besteht eine h�here Gefahr von Fehlerkennungen f�r neue Benutzer. Es sollte dann st�ndig das Logfile f�r Spammer-Erkennung �berpr�ft werden.',


/*
* Credits page in ACP
*/
	'ctracker_credits_head' => 'Credits',
	'ctracker_credits_subhead' => 'Hier befinden sich ein paar Hinweise und die Credits des CBACK CrackerTrackers. Eine Seite um Dir weitere Informationen zu sicherheitsrelevanten Dingen zu geben, sowie eine M�glichkeit "Danke" zu sagen.',
	'ctracker_credits_donate' => 'Spenden',
	'ctracker_credits_donate_expl' => 'Gef�llt Dir <b>CBACK CrackerTracker Professional</b>? Dann w�re es sehr nett von Dir, wenn du das CBACK Projekt mit einer kleinen PayPal Spende unterst�tzen w�rdest. Weiterentwicklung und Servermiete kosten unser non-profit Projekt viel Geld. Mit einer kleinen Unterst�tzung hilfst Du, dass wir unsere Services wie zum Beispiel den CrackerTracker weiterhin kostenfrei anbieten k�nnen. <br /><br />Vielen Dank f�r die Unterst�tzung!',
	'ctracker_credits_credits' => 'Credits',
	'ctracker_credits_credits_1' => 'Idee &amp; Umsetzung',
	'ctracker_credits_credits_2' => 'Herstellerseite und Supportforum',
	'ctracker_credits_credits_3' => 'Icons',
	'ctracker_credits_credits_4' => 'Offizielle Downloadseite',
	'ctracker_credits_moddownload' => 'CrackerTracker MOD Download',
	'ctracker_credits_thanks' => 'Dank an...',
	'ctracker_credits_thanks_text' => 'An dieser Stelle geht ein Dankesch�n an einige Personen die mir bei der MOD Entwicklung mit Ideen, Tests und mehr zur Seite standen.',
	'ctracker_credits_thanks_to' => '<b>Featureideen, Sicherheitstests und Kontrolllesen</b><br />Tekin Bird�zen<br /><i>(<a href="http://www.cybercosmonaut.de" target="_blank">cYbercOsmOnauT</a>)</i><br /><br /><br /><br /><b>Featurevorschl�ge</b><br />Bernhard Jaud<br /><i>(GenuineParts)</i><br /><br /><br /><br /><b>�bersetzer</b><br />mc-dragon<br /><i>(Englisch)</i><br /><br /><br /><br /><b>Korrektur (Englisch)</b><br />George<br />Sommerset<br /><i>(<a href="http://www.englisch-hilfen.de" target="_blank">www.englisch-hilfen.de</a>)</i><br /><br /><br /><br /><b>Korrektur (Deutsch)</b><br />Johnny (diegoriv)<br /><i>(<a href="http://alpinum.at" target="_blank">Alpinum.at</a>)</i><br /><br /><br /><br /><b>Beta Tester</b><br />Danke an alle Teilnehmer des Beta-Tests,<br />an die CBACK Premium User und nat�rlich auch an<br />einige Kollegen aus der "Modder-Szene", welche bei Beta Tests und Korrekturlesen geholfen haben.</i>',
	'ctracker_credits_info' => 'Noch mehr Sicherheit?',
	'ctracker_credits_info_text' => 'Die perfekte Erweiterung f�r Icy Phoenix und den CrackerTracker: F�r optimale Sicherheit vor b�sen Spambots und Registrierbots empfehlen wir den Mod <b>Advanced Visual Confirmation</b> von AmigaLink. Dieser MOD erweitert die CAPTCHA Funktion von phpBB und von CrackerTracker Professional mit einem komplexeren System, welches nicht von Bots ausgelesen werden kann. Den MOD kann man auf <a href="http://www.amigalink.de" target="_blank">www.AmigaLink.de</a> herunterladen.<br /><br /><br /><br />Wir empfehlen diesen MOD f�r optimale Sicherheit ebenfalls in dein Forum einzubauen!',


/*
* File Hash Check in ACP
*/
	'ctracker_fchk_head' => 'CrackerTracker Pr�fsummenscanner',
	'ctracker_fchk_subhead' => 'Dieser Scanner erzeugt f�r jede PHP Datei deines Forums eine Pr�fsumme, sobald du auf "Erstelle oder aktualisiere Pr�fsummen" klickst. Danach hast du immer die M�glichkeit mit "�berpr�fe Datei�nderungen" festzustellen, ob sich die Dateien seit dem letzten Erzeugen von Pr�fsummen ge�ndert haben oder nicht. Damit kannst du �berwachen, ob sich vielleicht Dateien ge�ndert haben, ohne dass du selbst etwas editiert hast. Dies ist meist ein Anzeichen davon, dass jemand Zugang zu Deinem Foren-Datenbestand bekommen hatte. Achte �brigens auch auf die letzte Pr�fzeit. So siehst Du, ob jemand unbefugt diesen Pr�fsummenscanner aktiviert hat!<br /><br /><br /><b>Information:</b> Nicht alle Server unterst�tzen dieses Feature. Gelegentlich kann es zu Script Timeouts kommen, wenn der Server zu lange braucht, um die Icy Phoenix Dateiliste zu erzeugen. Andere Server brechen den Vorgang ab, da er recht performanceintensiv ist.<br /><br /><br />&raquo; Die letzte Aktualisierung der Dateipr�fsummen fand am <b>%s</b> statt.',
	'ctracker_fchk_funcheader' => 'Funktionen',
	'ctracker_fchk_tableheader' => 'Systemausgabe',
	'ctracker_fchk_option1' => 'Erstelle oder aktualisiere Pr�fsummen',
	'ctracker_fchk_option2' => '�berpr�fe Datei�nderungen',
	'ctracker_fchk_select_action' => 'Bitte w�hle eine Aktion aus!',
	'ctracker_fchk_update_action' => 'Aktualisieren der Dateipr�fsummen wurde vollst�ndig ausgef�hrt!',
	'ctracker_fchk_tablehead1' => 'Dateipfad',
	'ctracker_fchk_tablehead2' => 'Status',
	'ctracker_file_unchanged' => 'UNVER�NDERT',
	'ctracker_file_changed' => 'GE�NDERT',
	'ctracker_file_deleted' => 'GEL�SCHT',


/*
* File Safety Scanner in ACP
*/
	'ctracker_fscan_complete' => 'Der Dateiscan wurde erfolgreich ausgef�hrt. Bitte klicke nun auf "Ergebnisse anzeigen", damit die Liste mit den Pr�fergebnissen angezeigt wird und du die M�glichkeit hast, die Dateien zu korrigieren. <br /><br /><br /><br /><u>HINWEIS:</u><br /><br />Gelegentlich kann es vorkommen, dass CrackerTracker eine Datei als unsicher erkennt. Dies liegt nat�rlich daran, dass PHP Codedateien sehr, sehr unterschiedlich sein k�nnen und gelegentlich ein Programmierer sogar unbedingt m�chte, dass Code von au�en beschrieben werden kann. In diesem Fall - und wirklich NUR wenn du Dir absolut sicher bist und die Datei genauestens �berpr�ft hast - kannst du die entsprechende Datei mit einem Signalkommentar bei der Pr�fung als sicher einstufen, so das du beim n�chsten Scan nicht mehr mit dieser Datei als unsicher konfrontiert wirst. F�ge dazu einfach nach dem Dateibeginn <?php den folgenden Kommentar ein: <br /><br /><br /><i>// CTracker_Ignore: File Checked By Human</i><br /><br /><br />Wenn du Dir unsicher bist kannst du auch auf der <a href="http://www.community.cback.de" target="_blank">CBACK Community</a> genauere Anweisungen f�r die Scanergebnisse, und wie man diese Stellen bereinigen kann, erfahren. Bitte benutze auch die dortige Forensuche, da zu diesen Anfragen sicherlich schon viele beantwortete Threads vorliegen.',
	'ctracker_fscan_unchecked' => 'NICHT �BERPR�FT',
	'ctracker_fscan_ok' => 'SICHER',
	'ctracker_fscan_prob_1' => 'extension.inc nicht / zu sp�t eingebunden',
	'ctracker_fscan_prob_2' => 'IP_ROOT_PATH ist m�glicherweise nicht richtig initialisiert',
	'ctracker_fscan_prob_3' => 'common.php / pagestart.php m�glicherweise nicht oder zu sp�t eingebunden',
	'ctracker_fscan_prob_4' => 'Code in der Datei ist m�glicherweise au�erhalb von Icy Phoenix ausf�hrbar',
	'ctracker_fscan_prob_5' => 'extension.inc fehlt und/oder IP_ROOT_PATH und/oder gesetzte Konstante nicht gefunden',
	'ctracker_fscan_prob_def' => 'Eine undefinierter Fall ist beim Scannen aufgetreten',
	'ctracker_fscan_important' => 'Bitte beachten!',
	'ctracker_fscan_sel_action' => 'Zum Starten der �berpr�fung aller Dateien klicke bitte auf "Dateipr�fung starten". Wenn dies beendet ist, klicke auf "Ergebnisse anzeigen", um die Resultate der �berpr�fung zu sehen. Diese Liste kann jederzeit wieder �ber diesen ACP Punkt abgerufen werden, bis eine neuen Pr�fung gestartet wird.<br /><br /><br />Aus technischen Gr�nden ist es jedoch nicht m�glich eine <u>eindeutige</u> und <u>unfehlbare</u> Auskunft �ber die Sicherheit eines PHP Skriptes zu geben. Wiege Dich also nicht in falschen Sicherheitsvorstellungen! Es kann vorkommen, dass der Scanner eine sichere Datei als unsicher einstuft, und es kann auch passieren, dass dieser Scanner eine Datei als sicher anzeigt die anderweitig eine L�cke aufweist. PHP ist so tiefgehend und Codes sind meist noch von so vielen anderen Faktoren oder Bereichen abh�ngig, dass ein 100%iges Resultat nicht geliefert werden kann. Ansonsten g�be es keine unsicheren Skripte mehr. ;-)<br /><br /><br />Dieser Scanner ist auf einige L�cher in den includes Dateien spezialisiert und sp�rt Bereiche des Forums auf, die von au�en erreichbar sind. Damit bietest du eine Angriffsfl�che die der CrackerTracker nicht �berwachen kann, da CrackerTracker nur innerhalb des Forums arbeitet. Mit diesem Scanner kann man einen Gro�teil dieser Gefahren leicht aufsp�ren und beseitigen.<br /><br /><br />Weitere Hinweise und Anleitungen und Hilfen, wie als unsicher gezeigte Dateien korrigiert werden k�nnen, findest du mit der Suchfunktion auf der CBACK Community!<br /><br /><br />',
	'ctracker_fscan_head' => 'CBACK CrackerTracker Sicherheitsscanner',
	'ctracker_fscan_subhead' => 'Dieser Sicherheitsscanner pr�ft alle PHP Dateien Deines Forums auf gravierende Sicherheitsprobleme und legt hier besonderes Augenmerk darauf, dass keine includes L�cken vorliegen die durch W�rmer ausgenutzt werden. Diese L�cken k�nnen meist so ausgenutzt werden, dass Code von au�en eingeschleust wird ohne andere Boarddateien anzusprechen. Damit bleibt auch das CrackerTracker-System inaktiv und kann die Datei nicht sch�tzen. Mit diesem ACP Modul hast du die M�glichkeit solche L�cken gezielt aufzusp�ren.<br /><br /><br /><b>Bitte beachten:</b> Nicht alle Server unterst�tzen diese Funktion! Bei sehr gro�en Boards kann es durchaus passieren, dass dieses performanceintensive Scansystem die PHP Execution Time �berschreitet. Der Algorithmus des Scanners wurde so gut wie m�glich optimiert, dass sich dies in Grenzen h�lt, aber es kann auf einigen Maschinen dennoch vorkommen. Wir bitten dies zu ber�cksichtigen.<br /><br /><br />&raquo; Die letzte �berpr�fung fand am <b>%s</b> statt.',
	'ctracker_fscan_option1' => 'Dateipr�fung starten',
	'ctracker_fscan_option2' => 'Ergebnisse anzeigen',


/*
* Global message in ACP
*/
	'ctracker_glob_msg_head' => 'Globale Nachricht',
	'ctracker_glob_msg_subhead' => 'Hier kannst du eine globale Nachricht an alle Benutzer hinterlassen. Diese Nachricht ist dann beim n�chsten Login f�r den Benutzer als Meldungsbox sichtbar. Du hast die M�glichkeit entweder auf einen Thread zu verweisen oder einen beliebigen eigenen Text zu schreiben. Ein eigener Text ist allerdings auf 255 Zeichen begrenzt! Das reicht aber aus, wenn du z.B. wegen �nderungen im Template nur schnell darauf hinweisen m�chtest, dass man beispielsweisen den Browser Cache leeren soll. ;)',
	'ctracker_glob_msg_entry' => 'Globale Nachricht erstellen',
	'ctracker_glob_msg_submit' => 'Eintragen',
	'ctracker_glob_msg_reset' => 'Nachricht zur�ckziehen',
	'ctracker_glob_msg_type' => 'Typ der globalen Nachricht',
	'ctracker_glob_type_1' => 'Text',
	'ctracker_glob_type_2' => 'Link',
	'ctracker_glob_msg_txt' => 'Text der globalen Nachricht',
	'ctracker_glob_msg_link' => 'Linkziel in der Nachricht',
	'ctracker_glob_msg_reset' => 'Aktuelle Nachricht zur�ckziehen',
	'ctracker_glob_res_txt' => 'Eine vorher eingetragene Nachricht kann mit einem Klick auf den Button "Aktuelle Nachricht zur�ckziehen" abgeschaltet werden. Die Benutzer erhalten dann die letzte Globale Nachricht nicht mehr weiter.',
	'ctracker_glob_msg_saved' => 'Die globale Nachricht wurde erfolgreich gespeichert.<br /><br />Klicke <a href="%s">hier</a>, um zur CrackerTracker Verwaltung zur�ckzukehren.',
	'ctracker_glob_msg_reset_ok' => 'Die globale Nachricht wurde nun von der Nutzertabelle entfernt. Benutzer bekommen die eingetragene Nachricht nicht mehr angezeigt.<br /><br />Klicke <a href="%s">hier</a>, um zur CrackerTracker Verwaltung zur�ckzukehren.',

/*
* IP &amp; Agent Blocker
*/
	'ctracker_ipb_delete' => 'Eintrag l�schen',
	'ctracker_ipb_blocklist' => 'Blocklisteintr�ge',
	'ctracker_ipb_head' => 'Proxy, IP &amp; UserAgent Blocker',
	'ctracker_ipb_description' => 'Hier kannst du die Blockliste f�r den CrackerTracker Proxy, IP und UserAgent Blocker verwalten. Du kannst sowohl vorhandene Eintr�ge l�schen sowie neue Eintr�ge hinzuf�gen. Bei einem Neueintrag hast du die M�glichkeit den Stern (*) als Jokerzeichen zu benutzen, um beliebige Kombinationen aus dem Filtereintrag in der Liste einzutragen. z.B.: lwp* sperrt lwp-1 genauso wie lwp-simple etc. oder 100.*.*.* sperrt alle IP Adressen die mit 100. beginnen.<br /><br /><b>WARNUNG:</b> Achte darauf, dass du nicht Deinen eigenen UserAgent oder deine eigene IP sperrst. Ansonsten kannst du das Forum nicht mehr betreten!',


/*
* Log Manager
*/
	'ctracker_log_manager_title' => 'Logfile Manager',
	'ctracker_log_manager_subtitle' => 'Hier kannst du alle Logdateien des CrackerTrackers anzeigen und l�schen.',
	'ctracker_log_manager_overview' => 'Log Manager �bersicht',
	'ctracker_log_manager_blocked' => 'CrackerTracker hat bisher <b>%s</b> Attacken blockiert.',
	'ctracker_log_manager_overview' => 'Logdatei �bersicht',
	'ctracker_log_manager_head1' => 'Logname',
	'ctracker_log_manager_head2' => 'Anzahl der Eintr�ge',
	'ctracker_log_manager_head3' => 'Funktionen',
	'ctracker_log_manager_name2' => 'Wurm &amp; Exploit Protection',
	'ctracker_log_manager_name3' => 'IP, Proxy &amp; UserAgent Blocker',
	'ctracker_log_manager_name4' => 'Fehlerhafte Logins',
	'ctracker_log_manager_name5' => 'Blockierte Spammer',
	'ctracker_log_manager_name6' => 'Debug-Eintr�ge',
	'ctracker_log_manager_view' => 'ANSEHEN',
	'ctracker_log_manager_delete' => 'L�SCHEN',
	'ctracker_log_manager_delete_all' => 'Alle Logdateien l�schen',
	'ctracker_log_manager_deleted' => 'Das Logfile wurde erfolgreich gel�scht!',
	'ctracker_log_manager_all_deleted' => 'Alle Logdateien wurden erfolgreich gel�scht!',
	'ctracker_log_manager_showheader1' => 'Diese Logdatei enth�lt aktuell <b>einen</b> Eintrag. Klicke <b><a href="%s">hier</a></b>, um zur Logdatei �bersicht zur�ckzukehren.',
	'ctracker_log_manager_showheader' => 'Diese Logdatei enth�lt aktuell <b>%s</b> Eintr�ge.<br />Klicke <b><a href="%s">hier</a></b>, um zur Logdatei �bersicht zur�ckzukehren.',
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
	'ctracker_footer_head' => 'Footerverwaltung',
	'ctracker_footer_subhead' => 'Hier kannst du ausw�hlen, welchen Footer CrackerTracker in deinem Forum anzeigen soll. Wir bitten darum, dass der Footer und damit der Hinweis zu www.cback.de intakt bleibt!',
	'ctracker_select_footer' => 'Footer ausw�hlen',
	'ctracker_footer_saveit' => 'Footerlayout �bernehmen',
	'ctracker_footer_done' => '�nderungen am Footer Layout wurden erfolgreich gespeichert!',

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
	'ctracker_ma_head' => 'Wartung und Systempr�fung',
	'ctracker_ma_subhead' => 'Hier hast du die M�glichkeit Wartungsfunktionen am CrackerTracker-System durchzuf�hren. Des Weiteren �berpr�ft dieses System automatisch die CrackerTracker Sicherheitsmodule auf Funktion und gibt Dir Hinweise zur Sicherheitsoptimierung Deines Systems.',
	'ctracker_ma_systest' => 'Automatischer Systemtest',
	'ctracker_ma_sectest' => 'Sicherheitstest',
	'ctracker_ma_maint' => 'Wartungsfunktionen',
	'ctracker_ma_name_1' => 'Wurm- &amp; Exploitschutz-System',
	'ctracker_ma_name_2' => 'Variable Control Unit',
	'ctracker_ma_name_3' => 'IP, Proxy &amp; UserAgent Protection Unit',
	'ctracker_ma_name_4' => 'Wurmheuristik Definitionssatz - Anzahl der Definitionen: <b>%s</b>',
	'ctracker_ma_syshead_1' => 'Sicherheitsmodul',
	'ctracker_ma_syshead_2' => 'Status',
	'ctracker_ma_seccheck_1' => 'Pr�fpunkt',
	'ctracker_ma_seccheck_2' => 'Version / Status',
	'ctracker_ma_seccheck_3' => 'Empfehlung',
	'ctracker_ma_seccheck_4' => 'Status',
	'ctracker_ma_scheck_1' => 'PHP Version (<a href="http://www.php.net" target="_blank">Webseite besuchen</a>)',
	'ctracker_ma_scheck_2' => '&raquo; PHP SAFE MODE',
	'ctracker_ma_scheck_3' => '&raquo; PHP GLOBALS',
	'ctracker_ma_scheck_4' => 'Icy Phoenix Version (<a href="http://www.icyphoenix.com" target="_blank">Webseite besuchen</a>)',
	'ctracker_ma_scheck_4a' => '&raquo; Visuelle Best�tigung',
	'ctracker_ma_scheck_4b' => '&raquo; Benutzer-Konto Aktivierung',
	'ctracker_ma_scheck_5' => 'CBACK CrackerTracker (<a href="http://www.cback.de" target="_blank">Webseite besuchen</a>)',
	'ctracker_ma_chmod' => '<b>CHMOD777 Status:</b> ',
	'ctracker_ma_desc_link' => 'JETZT AUSF�HREN',
	'ctracker_ma_desc1' => '<b>IP, Proxy &amp; UserAgent Tabelle leeren</b><br />Hiermit kannst du <u>alle</u> Eintr�ge aus der IP, Proxy &amp; UserAgent Tabelle entfernen.',
	'ctracker_ma_desc2' => '<b>Werkseinstellung: IP, Proxy &amp; UserAgent Blocker</b><br />Hiermit kannst du den Auslieferungszustand der IP, Proxy &amp; UserAgent Datenbanktabelle wiederherstellen. Deine Filter gehen dabei verloren!',
	'ctracker_ma_desc3' => '<b>Login History l�schen</b><br />Hier kannst du alle Eintr�ge in der Login History entfernen, unabh�ngig vom User und unabh�ngig von der eingestellten Speicherzahl pro User.',
	'ctracker_ma_desc4' => '<b>Datei-Hashpr�fungstabelle leeren</b><br />L�scht alle gespeicherten Eintr�ge in der Tabelle f�r den Datei-Hashcheck.',
	'ctracker_ma_desc5' => '<b>Sicherheitsscanner Tabelle leeren</b><br />L�scht alle Ergebnisse, die bei der Datei-Sicherheitspr�fung in der Datenbank gespeichert wurden.',
	'ctracker_ma_succ_main' => 'Vorgang erfolgreich ausgef�hrt!',
	'ctracker_ma_err_main' => 'Vorgang nicht erfolgreich ausgef�hrt!',


/*
* Miserable User Module in ACP...
*/
	'ctracker_mu_subhead' => 'Ein Benutzer verh�lt sich nicht so wie er soll, jedoch besteht die Bef�rchtung, dass er sich bei einem normalen Ban wieder mit anderem Benutzer-Konto anmeldet oder genau das ist sogar schon passiert? Dann gibt es hier die Funktion "Miserable User", eine Funktion, welche relativ h�ufig gew�nscht wurde. Allerdings koppelt das CrackerTracker-System dies nicht an das "Wir l�sen unsinnige Fehlermeldungen aus" System an, welches leicht durchschaubar ist, sondern geht nach dem Prinzip "Don\'t feed the Monkey" vor: Wenn ein Benutzer als Miserable User markiert ist kann lediglich der Administrator seine Posts lesen. F�r andere Benutzer sind die Beitr�ge unsichtbar, folglich kann niemand auf den St�renfried eingehen bis es diesem langweilig wird und er das Forum von sich aus verl�sst.<br /><b>Hinweis: <u>Diese Funktion wirkt sich nur auf die Anzeige der Postings in einem Thread aus.</u> Mit "Zitat" oder "Suche" sieht man die Postings des "Miserable User" weiterhin!</b>',

	'ctracker_mu_select' => 'Benutzer als Miserable User markieren',
	'ctracker_mu_find' => 'Benutzernamen suchen',
	'ctracker_mu_send' => 'Benutzer eintragen',
	'ctracker_mu_entr' => 'Markierte Benutzer',
	'ctracker_mu_uname' => 'Eingetragener Benutzername',
	'ctracker_mu_remove' => 'Eintr�ge entfernen',
	'ctracker_mu_no_defined' => 'Zurzeit sind keine Benutzer als "Miserable User" markiert.',


/*
* Recovery feature in ACP
*/
	'ctracker_rec_head' => 'System Wiederherstellung',
	'ctracker_rec_subhead' => 'Hier hast du die M�glichkeit, die Konfigurationstabelle deines Forums zu sichern oder zur letzten funktionierenden Konfiguration zur�ckzukehren. Wenn du die Funktion in den allgemeinen Einstellungen des CrackerTrackers aktiviert hast, dann wird die Konfigurationstabelle deines Forums jedesmal gesichert, wenn du die Allgemeine Forenkonfiguration �nderst. (ACHTUNG! Es handelt sich <b>NICHT</b> um ein komplettes Datenbankbackup!)<br /><br />Wenn du nicht mehr ins ACP kommst nachdem du Einstellungen ver�ndert hast, dann kannst du die letzte als funktionierend bekannte Konfiguration auch �ber die Notfallkonsole des CrackerTrackers reaktivieren. Lese hierzu den Dateikommentar in der Datei <i>ctracker/emergency.php</i> f�r weitere Instruktionen zur Notfallwiederherstellung der Forenkonfiguration. Bitte beachte, dass diese Datei immer erst vor Benutzung freigegeben werden muss. Wie das geht steht ebenfalls im Dateikommentar.<br /><br /><b>ACHTUNG!</b> Diese Funktion sollte nur bei akuten Problemen benutzt werden!',
	'ctracker_rec_last_saved' => 'Letztes Backup der Konfigurationstabelle: <b>%s</b>',
	'ctracker_rec_never_saved' => 'Die Konfigurationstabelle wurde bislang noch nicht gesichert!',
	'ctracker_rec_backup' => 'Backup der Konfigurationstabelle',
	'ctracker_rec_restore' => 'Wiederherstellen der zuletzt gespeicherten Konfigurationstabelle',
	'ctracker_rec_succ' => 'Der Datenbankvorgang wurde erfolgreich ausgef�hrt.',
	'ctracker_rec_pab' => 'Wiederherstellung erst nach einem erfolgreichen Backup m�glich!',
	)
);
?>