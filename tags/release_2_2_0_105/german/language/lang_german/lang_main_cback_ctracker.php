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
* Lopalong
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
	'ctracker_settings_on' => 'Aktivieren',
	'ctracker_settings_off' => 'Deaktivieren',
	'ctracker_ma_on' => 'Eingeschaltet',
	'ctracker_ma_off' => 'Ausgeschaltet',
	'ctracker_blockmode_0' => 'Ausgeschaltet',
	'ctracker_blockmode_1' => 'Benutzer bannen',
	'ctracker_blockmode_2' => 'Benutzer sperren',
	'ctracker_complex_1' => '[0-9]',
	'ctracker_complex_2' => '[a-z]',
	'ctracker_complex_3' => '[A-Z]',
	'ctracker_complex_4' => '[0-9][a-z]',
	'ctracker_complex_5' => '[0-9][A-Z]',
	'ctracker_complex_6' => '[0-9][a-z][A-Z]',
	'ctracker_complex_7' => '[0-9][*]',
	'ctracker_complex_8' => '[0-9][a-z][*]',
	'ctracker_complex_9' => '[0-9][a-z][A-Z][*]',
	'ctracker_ipb_new_entry' => 'Neueintrag',
	'ctracker_ipb_added' => 'Eintrag erfolgreich hinzugefügt!',
	'ctracker_ipb_deleted' => 'Eintrag erfolgreich gelöscht!',
	'ctracker_ipb_add_now' => 'Eintrag hinzufügen',
	'ctracker_mu_success' => 'Der Benutzer wurde als "Miserable User" markiert und wird ab sofort Probleme beim Surfen in deinem Forum haben. ;)',
	'ctracker_mu_success_bbc' => '[cell class="text_orange"]Der Benutzer wurde als "Miserable User" markiert und wird ab sofort Probleme beim Surfen in Deinem Forum haben. ;)[/cell]',
	'ctracker_mu_success_html' => '<span class="text_orange">Der Benutzer wurde als "Miserable User" markiert und wird ab sofort Probleme beim Surfen in Deinem Forum haben. ;)</span>',
	'ctracker_mu_error_admin' => 'ADMINS oder MODs können nicht als Miserable User markiert werden!',
	'ctracker_mu_deleted' => 'Der gewählte Benutzer wurde erfolgreich von der Miserable User Benutzerliste entfernt.',
	'ctracker_mu_head' => 'Miserable Benutzer',
	'ctracker_error_updating_userdata' => 'CrackerTracker konnte die Datenbankoperationen in der Benutzertabelle nicht ausführen.',
	'ctracker_error_database_op' => 'CrackerTracker konnte die Datenbankoperation nicht korrekt durchführen.',
	'ctracker_message_dialog_title' => 'CBACK CrackerTracker Professional',


/*
* Language Strings used for the footer itself
*/
	'ctracker_fdisplay_imgdesc' => 'Forensicherheit',
	'ctracker_fdisplay_n' => '<a href="http://www.cback.de" target="_blank">Sicherheit</a> durch <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a>.',
	'ctracker_fdisplay_c' => 'Geschützt durch <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a><br /><b>%s</b> abgewehrte Angriffe.',
	'ctracker_fdisplay_g' => '<b>%s</b> Angriffe abgewehrt',


/*
* Language Strings for the class_ct_database.php
*/
	'ctracker_error_loading_config' => 'Die CrackerTracker Konfiguration konnte nicht von der Datenbank geladen werden. Hast Du das Installationsskript ausgeführt und die Datei "includes/constants.php" korrekt editiert?',
	'ctracker_error_updating_config' => 'Die CrackerTracker Konfiguration konnte nicht aktualisiert werden. Hast Du das Installationsskript ausgeführt und die Datei "includes/constants.php" korrekt editiert?',
	'ctracker_error_loading_blocklist' => 'Die CrackerTracker Blockliste konnte nicht von der Datenbank geladen werden. Hast Du das Installationsskript ausgeführt und die Datei "includes/constants.php" korrekt editiert?',
	'ctracker_error_insert_blocklist' => 'Der Datensatz konnte nicht in die CrackerTracker Blockliste eingefügt werden. Hast Du das Installationsskript ausgeführt und die Datei "includes/constants.php" korrekt editiert?',
	'ctracker_error_delete_blocklist' => 'Der Datensatz konnte nicht von der CrakerTracker Blockliste entfernt werden. Hast Du das Installationsskript ausgeführt und die Datei "includes/constants.php" korrekt editiert?',
	'ctracker_error_login_history' => 'Es trat ein Fehler bei den Datenbankoperationen innerhalb der CrackerTracker Login History auf. Hast Du das Installationsskript ausgeführt und die Datei "includes/constants.php" korrekt editiert?',
	'ctracker_error_del_login_history' => 'Die CrackerTracker Login History Tabelle konnte nicht geleert werden.',


/*
* Language Strings used in class_ct_userfunctions.php
*/
	'ctracker_info_search_time' => "Aus Sicherheitsgründen ist die Suche nur %s mal innerhalb %s Sekunden möglich. Diese Anzahl wurde überschritten. Daher musst du nun <span id=\"waittime\">%s</span> Sekunden warten, bis Du den nächsten Suchvorgang ausführen kannst. <script type=\"text/javascript\"><!-- \n var wait = %s; var waitt = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout(\"newoutput(\" + i + \")\", i * 1000); } function newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById(\"waittime\").innerHTML = \"0\"; } else { document.getElementById(\"waittime\").innerHTML = (waitt/1000) - waitcounter; } } //--></script>",
	'ctracker_info_regist_time' => "Aus Sicherheitsgründen ist eine Registrierung nur alle %s Sekunden möglich. Diese Anzahl wurde überschritten. Daher musst du nun <span id=\"waittime\">%s</span> Sekunden warten, bis Du eine weitere Registrierung vornehmen kannst. <script type=\"text/javascript\"><!-- \n var wait = %s; var waitt = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout(\"newoutput(\" + i + \")\", i * 1000); } function newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById(\"waittime\").innerHTML = \"0\"; } else { document.getElementById(\"waittime\").innerHTML = (waitt/1000) - waitcounter; } } //--></script>",
	'ctracker_info_regip_double' => 'Es fand bereits eine Registrierung von dieser IP Adresse statt. Aus Sicherheitsgründen darf man sich nacheinander lediglich einmal von der gleichen IP Adresse registrieren!',
	'ctracker_info_profile_spammer' => 'Dieser Registrierversuch wurde als Spammer-Benutzer-Konto identifiziert! Wenn du denkst, dass das ist eine fehlerhafte Erkennung ist, dann wende Dich bitte an den Administrator dieses Forums, damit dieser Dir ein Benutzer-Konto erstellen kann!',
	'ctracker_info_password_minlng' => 'Der Administrator hat eingestellt, dass das Passwort aus mindestens <b>%s</b> Zeichen bestehen muss. Dein gewähltes Passwort war aber nur <b>%s</b> Zeichen lang. Bitte klicke auf "Zurück" um die Angaben zu korrigieren.',
	'ctracker_info_password_cmplx' => 'Der Administrator hat eingestellt, dass das Passwort <b>mindestens</b> folgende Dinge enthalten muss: %s',
	'ctracker_info_password_cmplx_1' => 'Zahlen',
	'ctracker_info_password_cmplx_2' => 'Kleinbuchstaben',
	'ctracker_info_password_cmplx_3' => 'Großbuchstaben',
	'ctracker_info_password_cmplx_4' => 'Sonderzeichen',
	'ctracker_info_pw_expired' => 'Der Administrator hat eingestellt, dass ein Passwort nur für <b>%s Tage</b> gültig sein darf. Wir empfehlen aus Sicherheitsgründen, dass du dein Passwort jetzt änderst. Klicke hierzu auf &quot;<a href="' . CMS_PAGE_PROFILE . '?mode=editprofile&amp;' . POST_USERS_URL . '=%d">Profil</a>&quot;.',

/*
* Language Strings used in ct_visual_confirm.php
*/
	'ctracker_login_wrong' => 'Der eingegebene visuelle Bestätigungscode war leider nicht korrekt!',
	'ctracker_code_dbconn' => 'Konnte visuellen Bestätigungscode nicht von der Datenbank laden! Wenn du ein phpBB Plus hast musst du die phpBB-eigenen Module für die Visuelle Bestätigung nachinstallieren. Lies hierzu bitte im Ordner "add_ons" des CrackerTracker MODPaketes die Hinweise zu phpBB Plus!',
	'ctracker_login_success' => 'Dein Benutzer-Konto wurde nun wieder freischaltet.<br /><br />Klicke <a href="%s">hier</a>, um zur Loginseite zu gelangen.',
	'ctracker_code_count' => 'Die maximale Anzahl der Eingabeversuche für die Visuelle Bestätigung wurde für diese Session überschritten.',

/*
* Language Strings used in login_captcha.php
*/
	'ctracker_login_title' => 'CrackerTracker Benutzer-Konto-Freischaltung',
	'ctracker_login_logged' => 'Eingeloggte Benutzer können diese Seite nicht aufrufen.',
	'ctracker_login_confim' => 'Die eingestellte Anzahl fehlerhafter Loginversuche für dein Benutzer-Konto wurde erreicht. Zum Schutz deines Benutzer-Kontos wurde dieser nun für den Login gesperrt und muss von Dir über die visuelle Bestätigung wieder freigeschaltet werden.<br /><br />Bitte trage dazu nun den folgenden Buchstaben- und Zahlencode in das Eingabefeld ein und drücke auf den Button "Freischalten", um dein Benutzer-Konto wieder freizuschalten. Wenn dies getan ist, kannst du Dich wie gewohnt über die Loginseite einloggen.',
	'ctracker_login_button' => 'Freischalten',

/*
* Language Strings for IP Warning Engine
*/
	'ctracker_ipwarn_info' => 'IP Range Scanning für dein Benutzer-Konto ist <b>%s</b>',
	'ctracker_ipwarn_prof' => 'IP Range Scanner',
	'ctracker_ipwarn_pdes' => 'Der IP Range Scanner prüft, wenn aktiviert, die sogenannte IP Range auf Veränderungen. Wenn sich jemand mit deinem Benutzer-Konto von einer anderen Position aus eingeloggt hat, wirst Du darüber mit einer kurzen Nachricht informiert (Natürlich auch, wenn du Dich selbst von verschiedenen Positionen aus einloggst. ;-)). Bitte schaue im Footer nach, ob die Warnfunktion noch aktiviert ist, falls ein Angreifer diese deaktiviert hat. Die Protokollierung bleibt jedoch bestehen, damit Du nach der Aktivierung noch die Möglichkeit hast Veränderungen zu prüfen.',
	'ctracker_ipwarn_chng' => '<b>&raquo; HINWEIS &laquo;</b><br />Die IP Range für dein Benutzer-Konto hat sich verändert. Der aktuelle Login fand von <b>%s</b> statt, der vorherige von <b>%s</b>. Wenn du Dich nicht selbst von einer anderen Position aus eingeloggt hast, dann besteht die Möglichkeit, dass jemand unberechtigt dein Benutzer-Konto benutzt hat!',
	'ctracker_ipwarn_welc' => '<b>&raquo; HINWEIS &laquo;</b><br />Der IP Range Scanner für dein Benutzer-Konto ist noch nicht initialisiert. Dies ist nach 2 Logins der Fall. Wenn du den Scanner jetzt initialisieren möchtest, dann logge Dich bitte zweimal aus und wieder ein.',
	'ctracker_ipwarn_send' => 'Einstellungen speichern',

/*
* Language Strings for Login History
*/
	'ctracker_lhistory_h' => 'Login History',
	'ctracker_lhistory_i' => 'Hier kannst du das Protokoll Deiner letzten <b>%s</b> Logins ansehen und anhand der IP Adressen und Zeiten überprüfen, ob auch wirklich nur Du derjenige bist, der dieses Benutzer-Konto nutzt. Sollten unbekannte Loginzeiten oder IP Adressen in der Login History auftreten, besteht die Möglichkeit, dass jemand dein Passwort ausgespäht hat. In diesem Fall solltest du das Passwort für dein Benutzer-Konto ändern und ggf. Deinen Mailkonto überprüfen.',
	'ctracker_lhistory_h1' => 'Login Datum und Zeit',
	'ctracker_lhistory_h2' => 'gespeicherte IP Adresse',
	'ctracker_lhistory_nav' => 'CrackerTracker Login History',
	'ctracker_lhistory_err' => 'Sie müssen eingeloggt sein, um diese Funktionen des CrackerTrackers nutzen zu können!',
	'ctracker_lhistory_off' => 'Login History wurde vom Admin deaktiviert.',

/*
* Other Language Strings used in the Board itself
*/
	'ctracker_gmb_link' => 'Der Administrator hat einen wichtigen Hinweis für alle Benutzer hinterlassen. Dieser kann nachfolgend abgerufen werden:<br /><br /><a href="%s">%s</a><br />',
	'ctracker_gmb_mark' => 'Nachricht als gelesen markieren',
	'ctracker_gmb_markip' => 'Hinweis ausblenden',
	'ctracker_gmb_loginlink' => 'Loginsicherheit',
	'ctracker_gmb_1stadmin' => 'Die Berechtigungen oder Einstellungen des ersten Admins können nicht verändert werden!',
	'ctracker_gmb_pu_1' => '<b>CrackerTracker - Erkennung von Fehlkonfiguration</b><br /><br />Port 21 wird für FTP Dienste verwendet. Wenn das Forum auf diesen Port umgestellt wird, ist es normalerweise nicht mehr lauffähig, da Browser diesen Port ebenfalls als FTP Dienst handhaben.',
	'ctracker_gmb_pu_2' => '<b>CrackerTracker - Erkennung von Fehlkonfiguration</b><br /><br />Die Sessionlänge ist zu klein eingestellt! Du wirst dadurch möglicherweise ständig aus dem Forum ausgeloggt, bevor Du die Einstellung wieder korrigieren kannst.',
	'ctracker_gmb_pu_3' => '<b>CrackerTracker - Erkennung von Fehlkonfiguration</b><br /><br />Der Skript Pfad beginnt und/oder endet entweder nicht mit einem Slash (/www/) oder besteht nicht ausschließlich aus dem Slash (/)!',
	'ctracker_gmb_pu_4' => '<b>CrackerTracker - Erkennung von Fehlkonfiguration</b><br /><br />Der Servername darf nicht mit einem Slash (/) enden!',
	'ctracker_binf_spammer' => 'Das Spammerschutz-System beobachtet Dich! Du hast die höchste eingestellte Anzahl Posts innerhalb von %s Sekunden erreicht. Wenn du vor <b>%s</b> Sekunden wieder versuchst einen Post zu schreiben, wird dein Benutzer-Konto <b>gesperrt!</b><br /><br />Bitte warte also die angegebene Zeit, bis Du erneut postest. Wir bitten die Unannehmlichkeiten zu entschuldigen, dies ist lediglich eine Maßnahme zur Sicherheit des Forums.',
	'ctracker_binf_sban' => 'Das Spammer-Blocksystem hat nun dein Benutzer-Konto gebannt / gesperrt, da Du als Spammer identifiziert wurdest.',
	'ctracker_sendmail_info' => 'Aus Sicherheitsgründen kannst du leider nur alle %s Minuten eine E-Mail senden!',
	'ctracker_pwreset_info' => 'Aus Sicherheitsgründen ist es leider nur möglich, dass du Dir alle %s Minuten die Passwort-Reset Mail zuschicken kannst. Wenn du dein Benutzer-Konto dringend benötigst und Probleme beim Versenden der Passwort Reset Mail aufgetreten sind, dann kontaktiere bitte den Administrator dieses Forums!',
	'ctracker_vc_guest_post' => 'Visuelle Bestätigung für Gäste',
	'ctracker_vc_guest_expl' => 'Bitte trage den nachfolgenden Zahlen- / Buchstabencode in das Eingabefeld ein bevor du Deinen Post abschickst. Für Gäste dieses Forums ist diese Maßnahme zum Schutz vor automatischen Spambots erforderlich.',
	'ctracker_dbg_mode' => '<b>CrackerTracker läuft im DEBUG MODE. Dies sollte kein Dauerzustand sein.<br />Bitte stelle wieder den normalen Modus ein, sobald du es nicht mehr benötigst.<br /><br /><u>Diese Meldung kann nicht gelöscht werden!</u></b>',
	)
);

?>