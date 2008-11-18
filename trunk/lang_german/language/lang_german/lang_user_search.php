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
* Adam Alkins (phpbb at rasadam dot com)
* TheSteffen, KugeLSichA, Tom,Carsten
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
    'Search_invalid_username' => 'Ung�ltiger Benutzername eingegeben',
    'Search_invalid_email' => 'Ung�ltige E-Mail Adresse eingegeben',
    'Search_invalid_ip' => 'Ung�ltige IP Adresse eingegeben',
    'Search_invalid_group' => 'Ung�ltige Gruppe eingegeben',
    'Search_invalid_date' => 'Ung�ltiges Datum eingegeben',
    'Search_invalid_postcount' => 'Ung�ltige Beitragsanzahl eingegeben',
    'Search_invalid_userfield' => 'Ung�ltige Benutzerfelddaten eingegeben',
    'Search_invalid_lastvisited' => 'Ung�ltige Daten f�r Suche nach Letztem Besuch eingegeben',
    'Search_invalid_language' => 'Ung�ltige Sprache ausgew�hlt',
    'Search_invalid_style' => 'Ung�ltiger Style ausgew�hlt',
    'Search_invalid_timezone' => 'Ung�ltige Zeitzone ausgew�hlt',
    'Search_invalid_moderators' => 'Ung�ltiges Forum ausgew�hlt',
    'Search_invalid' => 'Ung�ltige Suche',
    'Search_invalid_day' => 'Der eingegebene Tag ist ung�ltig.',
    'Search_invalid_month' => 'Der eingegebene Monat ist ung�ltig.',
    'Search_invalid_year' => 'Das eingegebene Jahr ist ung�ltig.',
    'Search_no_regexp' => 'Deine Datenbank unterst�tzt die Regular Expression Suche nicht.',
    'Search_for_username' => 'Die Suche nach Benutzernamen mit %s',
    'Search_for_email' => 'Die Suche nach E-Mail Adressen mit %s',
    'Search_for_ip' => 'Die Suche nach IP Adressen mit %s',
    'Search_for_date' => 'Die Suche nach Benutzern, die sich %s %d/%d/%d angemeldet haben',
    'Search_for_group' => 'Die Suche nach Gruppenmitgliedern von %s',
    'Search_for_banned' => 'Die Suche nach gesperrten Benutzern',
    'Search_for_admins' => 'Die Suche nach Administratoren',
    'Search_for_mods' => 'Die Suche nach Moderatoren',
    'Search_for_disabled' => 'Die Suche nach deaktivierten Benutzern',
    'Search_for_disabled_pms' => 'Die Suche nach Benutzern mit deaktivierter PN Funktion',
    'Search_for_postcount_greater' => 'Die Suche nach Benutzern mit mehr als %d Beitr�gen',
    'Search_for_postcount_lesser' => 'Die Suche nach Benutzern mit weniger als %d Beitr�gen',
    'Search_for_postcount_range' => 'Die Suche nach Benutzern mit mit einem Beitragsz�hler zwischen %d und %d',
    'Search_for_postcount_equals' => 'Die Suche nach Benutzern mit mit %d Beitr�gen',
    'Search_for_userfield_icq' => 'Die Suche nach Benutzern mit deren ICQ Nummer %s beinhaltet',
    'Search_for_userfield_yahoo' => 'Die Suche nach Benutzern deren Yahoo IM Adresse %s beinhaltet',
    'Search_for_userfield_aim' => 'Die Suche nach Benutzern deren AIM Adresse %s beinhaltet',
    'Search_for_userfield_msn' => 'Die Suche nach Benutzern deren MSN Messenger Adresse %s beinhaltet',
    'Search_for_userfield_website' => 'Die Suche nach Benutzern mit einer Website deren Adresse %s beinhaltet',
    'Search_for_userfield_location' => 'Die Suche nach Benutzern deren Wohnort %s ist',
    'Search_for_userfield_interests' => 'Die Suche nach Benutzern deren Interessen %s beinhaltet',
    'Search_for_userfield_occupation' => 'Die Suche nach Benutzern deren Beruf %s ist',
    'Search_for_lastvisited_inthelast' => 'Die Suche nach Benutzern, die das Forum das letzte mal in den letzten %s %s besucht haben',
    'Search_for_lastvisited_afterthelast' => 'Die Suche nach Benutzern, die das Forum das letzte mal vor den letzten %s %s besucht haben',
    'Search_for_language' => 'Die Suche nach Benutzern, die %s als Sprache gew�hlt haben',
    'Search_for_timezone' => 'Die Suche nach Benutzern, die GMT %s als Zeitzone eingestellt haben',
    'Search_for_style' => 'Die Suche nach Benutzern, die %s als Style nutzen',
    'Search_for_moderators' => 'Die Suche nach Moderatoren des Forums -> %s',
    'Search_users_advanced' => 'Erweiterte Benutzersuche',
    'Search_users_explain' => 'Dieses Modul erlaubt die Suche nach Benutzern anhand einer Vielzahl von Kriterien. Bitte lies dir die Beschreibungen unter jedem Feld durch, um die jeweilige Suchfunktion zu verstehen.',
    'Search_username_explain' => 'Hier kannst du nach Benutzernamen suchen (Gro�- Kleinschreibung wird nicht unterschieden). Wenn du nach Teilen eines Benutzernamens suchen m�chtest, verwende * (Sternchen) als Platzhalter. Klicke die Regul�re Ausdr�cke Box (<i>engl. regular expression</i>) an, wenn du nach regul�ren Ausdr�cken in der Datenbank suchen m�chtest. <strong>Hinweis:</strong> Regul�re Ausdr�cke funktionieren nur mit MySQL, PostgreSQL und Oracle 10g+.',
    'Search_email_explain' => 'Gib die E-Mail Adresse des Benutzers ein (Gro�- Kleinschreibung wird nicht unterschieden). Wenn du nach Teilen der E-Mail Adresse suchen m�chtest, verwende * (Sternchen) als Platzhalter. Klicke die Regul�re Ausdr�cke Box (<i>engl. regular expression</i>) an, wenn du nach regul�ren Ausdr�cken in der Datenbank suchen m�chtest. <strong>Hinweis:</strong> Regul�re Ausdr�cke funktionieren nur mit MySQL, PostgreSQL und Oracle 10g+.',
    'Search_ip_explain' => 'Suche nach Benutzern, die Beitr�ge von einer bestimmten IP Adresse geschrieben haben (xxx.xxx.xxx.xxx), mit Platzhalter (xxx.xxx.xxx.*) oder IP-Bereich (xxx.xxx.xxx.xxx-yyy.yyy.yyy.yyy). Hinweis: Ist das letzte Oktett .255 wird dies als Bereich aller IPs in diesem Oktett gewertet. Wenn du <b>10.0.0.255</b> wird dies gleich interpretiert wie <b>10.0.0.*</b> (normalerweise ist keine IP .255 zugewiesen). Wenn du einen Bereich von <b>10.0.0.5-10.0.0.255</b> ist dies auch gleichbedeutend mit <b>10.0.0.*</b>. Du solltest dann <b>10.0.0.5-10.0.0.254</b> eingeben.',
    'Search_users_joined' => 'Benutzer, die sich angemeldet haben',
    'Search_users_lastvisited' => 'Benutzer, die das Forum das letzte mal besucht haben',
    'in_the_last' => 'in den letzten',
    'after_the_last' => 'vor den letzten',
    'Before' => 'vor',
    'After' => 'nach',
    'Search_users_joined_explain' => 'Suche nach Benutzern, die sich vor oder nach (und an) einem bestimmten Datum angemeldet haben. Das Datumsformat ist JJJJ/MM/TT (Jahr/Monat/Tag).',
    'Search_users_groups_explain' => 'Zeige alle Mitglieder der ausgew�hlten Gruppe.',
    'Administrators' => 'Administrator',
    'Banned_users' => 'Gesperrte Benutzer',
    'Disabled_users' => 'Deaktivierte Benutzer',
    'Users_disabled_pms' => 'Benutzer mit deaktivierter PN Funktion',
    'Search_users_misc_explain' => 'Administratoren - Alle Benutzer mit Administrator-Rechten; Moderatoren - Alle Forum-Moderatoren; Gesperrte Benutzer - Alle Benutzer, die vom Forum ausgeschlossen wurden; Deaktivierte Benutzer - Alle deaktivieren Benutzer (entweder manuell deaktiviert, oder neue E-Mail nicht verifiziert); Benutzer mit deaktivierter PN-Funktion - W�hlt alle Benutzer aus, die keine Privaten Nachrichten senden d�rfen (per Benutzerverwaltung deaktiviert)',
    'Postcount' => 'Beitragsz�hler',
    'Equals' => 'ist Gleich',
    'Greater_than' => 'gr��er als',
    'Less_than' => 'kleiner als',
    'Search_users_postcount_explain' => 'Du kannst nach Benutzern basierend auf der Beitragsanzahl suchen. Dabei gibt es meherere M�glichkeiten: exakter Wert; Wert gr��er/kleiner als; zwischen 2 Werten suchen. Um zwischen zwei Werten zu suchen, w�hle "ist Gleich" aus und gibt die beiden Werte mit Strich (-) getrennt ein z.B. 10-15',
    'Userfield' => 'Benutzerfelder',
    'Search_users_userfield_explain' => 'Suche nach Benutzern basierend auf verschiedenen Feldern des Profils. Verwende Stern (*) als Platzhalter. Klicke die Regul�re Ausdr�cke Box (<i>engl. regular expression</i>) an, wenn du nach regul�ren Ausdr�cken in der Datenbank suchen m�chtest. <strong>Hinweis:</strong> Regul�re Ausdr�cke funktionieren nur mit MySQL, PostgreSQL und Oracle 10g+.',
    'Search_users_lastvisited_explain' => 'Du kannst mit dieser Option nach Benutzern basierend auf dem Datum des letzten Logins suchen.',
    'Search_users_language_explain' => 'Dies zeigt dir die Benutzer an, welche eine bestimmte Sprache in ihrem Profil eingestellt haben.',
    'Search_users_timezone_explain' => 'Benutzer, die eine bestimmte Zeitzone in ihrem Profil ausgew�hlt haben.',
    'Search_users_style_explain' => 'Dies zeigt dir die Benutzer an, welche einen bestimmten Style gew�hlt haben.',
    'Moderators_of' => 'Moderatoren von',
    'Search_users_moderators_explain' => 'Suche nach Benutzern mit Moderatoren-Rechten in einem bestimmten Forum. Moderatoren-Rechte werden entweder an den Benutzerberechtigungen erkannt oder an der Mitgliedschaft in einer Gruppe mit Moderatoren-Rechten.',
    'Regular_expression' => 'Regul�rer Ausdruck?',

    'Manage' => 'Verwalten',
    'Search_users_new' => '%s ergab %d Resultate. <a href="%s">Erneute Suche</a> starten.',
    'Banned' => 'Gesperrt',
    'Not_banned' => 'nicht gesperrt',
    'Search_no_results' => 'Keine Benutzer entsprechen deinen Suchkriterien. Bitte starte eine erneute Suche. Wenn du nach Benutzernamen oder E-Mail Adressen suchst, solltest du f�r teilweise Suchbegriffe den Platzhalter Stern (*) werwenden.',
    'Account_status' => 'Benutzerkonto Status',
    'Sort_options' => 'Sortieroptionen:',
    'Last_visit' => 'Letzter Besuch',
    'Day' => 'Tag',
	)
);

?>