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
* Philipp Kordowich
* TheSteffen, KugeLSichA, Tom
*
*/

// Language file for DB Maintenance Mod

$lang['DB_Maintenance'] = 'Datenbank-Wartung';
$lang['DB_Maintenance_Description'] = 'Hier kannst du die Datenbank auf Inkonsistenzen und Fehler �berpr�fen.<br />
	<b>Achtung:</b> Manche Vorg�nge brauchen einige Zeit zur Ausf�hrung. Dein Board ist w�hrend der Ausf�hrung der Funktionen <b>gesperrt</b>.</br />
	<br />
	<b>Es sollte immer ein Backup gemacht werden, bevor eine der unteren Funktionen genutzt wird!</b>';
$lang['Function'] = 'Funktion';
$lang['Function_Description'] = 'Beschreibung';

$lang['Incomplete_configuration'] = 'Es wurde keine Einstellung f�r <b>%s</b> in der Konfiguration des Boards gefunden. DB Maintenance kann ohne diese Einstellung nicht ausgef�hrt werden.<br />
	Eventuell hast du bei der Installation vergessen, die angegebenen SQL-Befehle auszuf�hren.';
$lang['dbtype_not_supported'] = 'Leider unterst�tzt diese Funktion deine Datenbank nicht';
$lang['no_function_specified'] = 'Es wurde keine Funktion gew�hlt';
$lang['function_unknown'] = 'Die gew�hlte Funktion ist nicht definiert';
$lang['Old_MySQL_Version'] = 'Leider unterst�tzt deine MySQL-Version diese Funktion nicht. Bitte benutze Version 3.23.17 oder neuer.';

$lang['Back_to_DB_Maintenance'] = 'Zur�ck zur Datenbank-Wartung';
$lang['Processing_time'] = 'DB Maintenance ben�tigte %f Sekunden zur Durchf�hrung der Operationen';

$lang['Lock_db'] = 'Sperre das Board';
$lang['Unlock_db'] = 'Entsperre das Board';
$lang['Already_locked'] = 'Das Board war bereits gesperrt';
$lang['Ignore_unlock_command'] = 'Das Board war bei Start der Funktion bereits gesperrt. Es wird nicht entsperrt';
$lang['Delay_info'] = 'Warte drei Sekunden, damit Datenbanktransaktionen beendet werden k�nnen...';

$lang['Affected_row'] = 'Ein betroffener Datensatz';
$lang['Affected_rows'] = '%d betroffene Datens�tze';
$lang['Done'] = 'Erledigt';
// The following variable is used when nothing hat to be fixed in the database. It needs the complete paragraph-tag.
// If you do not want a message to be displayed in these cases, just leave the variable empty.
$lang['Nothing_to_do'] = "<p class=\"gen\"><i>Keine Arbeit notwendig :-)</i></p>\n";

// Names for new records in several tables
$lang['New_cat_name'] = 'Wiederhergestellte Foren';
$lang['New_forum_name'] = 'Wiederhergestellte Themen';
$lang['New_topic_name'] = 'Wiederhergestellte Beitr�ge';
$lang['Restored_topic_name'] = 'Wiederhergestelltes Thema';
$lang['New_poster_name'] = 'Wiederhergestellter Beitrag'; // Name for Poster of a restored post

// Functions available
// Usage: $mtnc[] = array(internal Name, Name of Function, Description of Function, Warning Message (leef empty to avoid), Number of Check function (Integer))
// Use $mtnc[] = array('--', '', '', '', 0) for a space row (you can us a different check function)
$mtnc[] = array('statistic',
	'Statistiken',
	'Zeigt statistische Daten �ber die Datenbank und das Board an.',
	'',
	0);
$mtnc[] = array('config',
	'Konfiguration',
	'Erm�glicht die Konfiguration von DB Maintenance.',
	'',
	5);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('check_user',
	'Pr�fe Benutzer- und Gruppen-Tabellen',
	'Diese Funktion pr�ft die Benutzer- und die Gruppen-Tabellen auf Fehler. Fehlende Einbenutzer-Gruppen werden wieder hergestellt.',
	'Alle Gruppen ohne Mitglied werden durch diese Aktion verloren gehen. Fortfahren?',
	0);
$mtnc[] = array('check_post',
	'Pr�fe Beitrags- und Themen-Tabellen',
	'Diese Funktion pr�ft die Beitrags- und die Themen-Tabellen auf Fehler.',
	'Alle Beitr�ge ohne gespeichertem Text werden durch diese Aktion verloren gehen. Fortfahren?',
	0);
$mtnc[] = array('check_vote',
	'Pr�fe Umfrage-Tabellen',
	'Diese Funktion pr�ft die Umfrage-Tabellen auf Fehler.',
	'Alle Abstimmungsdaten ohne zugeh�rige Abstimmung werden durch diese Aktion verloren gehen. Fortfahren?',
	0);
$mtnc[] = array('check_pm',
	'Pr�fe Private Nachrichten-Tabellen',
	'Diese Funktion pr�ft die Private Nachrichten-Tabellen auf Fehler.',
	'Ungelesene Nachrichten werden durch diese Aktion gel�scht, wenn entweder der Absender oder der Empf�nger nicht existiert. Fortfahren?',
	0);
$mtnc[] = array('check_config',
	'Pr�fe Konfigurations-Tabelle',
	'Diese Funktion pr�ft die Konfigurations-Tabelle auf fehlende Eintr�ge.',
	'',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('check_search_wordmatch',
	'Pr�fe die Wort-Verkn�pfungs-Tabelle',
	'Diese Funktion pr�ft die Wort-Verkn�pfungs-Tabelle auf Fehler. Diese Tabelle wird f�r die Suchfunktion verwendet.',
	'',
	0);
$mtnc[] = array('check_search_wordlist',
	'Pr�fe die Wort-Liste-Tabelle',
	'Diese Funktion entfernt nicht mehr ben�tigte Eintr�ge der Wort-Liste-Tabelle. Diese Tabelle wird f�r die Suchfunktion verwendet.',
	'Die Ausf�hrung dieser Funktion kann einige Zeit ben�tigen. Die Ausf�hrung dieser Funktion ist nicht notwendig, kann aber zu einer Reduzierung der Datenbankgr��e f�hren. Fortfahren?',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('synchronize_post',
	'Synchronisiere Foren und Themen',
	'Diese Funktion synchronisiert die Beitragsz�hler und die Beitragsdaten in den Foren und Themen.',
	'Die Ausf�hrung dieser Funktion kann einige Zeit ben�tigen. Wenn der Server die Funktion set_time_limit() nicht zul�sst, kann diese Funktion durch PHP abgebrochen werden. Dadurch gehen keine Daten verloren, aber manche Daten k�nnten nicht aktualisiert werden. Fortfahren?',
	0);
$mtnc[] = array('synchronize_user',
	'Synchronisiere Beitragsz�hler der Benutzer',
	'Diese Funktion synchronisiert die Zahl der Beitr�ge der Benutzer.',
	'<b>Achtung:</b> durch die Pruning-Funktion gel�schte Beitr�ge werden normalerweise nicht von der Zahl der Beitr�ge der Benutzer abgezogen. Wird diese Funktion ausgef�hrt, so ber�cksichtigen die Z�hler diese Beitr�ge nicht mehr und k�nnen nicht wiederhergestellt werden. Fortfahren?',
	6);
$mtnc[] = array('synchronize_mod_state',
	'Synchronisiere Moderatoren-Status',
	'Diese Funktion synchronisiert den Moderatoren-Status in der Benutzer-Tabelle.',
	'',
	0);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('reset_date',
	'Setze Datum des letzten Beitrags zur�ck',
	'Diese Funktion setzt das Datum des letzten Beitrags zur�ck, wenn es in der Zukunft liegt. Damit k�nnen Probleme gel�st werden, bei denen Benutzer eine Nachricht bekommen, dass sie so kurz nach dem letzten Beitrag keinen weiteren schreiben k�nnen.',
	'Alle Zeiten von Beitr�gen in der Zukunft werden auf die aktuelle Zeit gesetzt. Fortfahren?',
	0);
$mtnc[] = array('reset_sessions',
	'Setze alle Sitzungs-Daten zur�ck',
	'Diese Funktion setzt alle aktiven Sitzungen zur�ck, in dem die Sitzungs-Tabelle geleert wird.',
	'Alle derzeit aktiven Benutzer werden ihre Sitzungsdaten inkl. ihrer Suchergebnisse verlieren. Fortfahren?',
	0);
$mtnc[] = array('--', '', '', '', 8);
$mtnc[] = array('sync_topics_subjects',
	'Synchronize topics subjects',
	'This function will synchronize topic subjects in first post of each topics You won\'t need this function under normal conditions.',
	'This will synchronize topic subjects in first post of each topic. The site will not be accessible during this time. Proceed?',
	0);
$mtnc[] = array('rebuild_search_index',
	'Suchindex neu aufbauen',
	'Diese Funktion baut den Index neu auf, der f�r die Suche verwendet wird. Im Normalfall wird diese Funktion nicht ben�tigt.',
	'Diese Funktion wird den kompletten Suchindex l�schen und neu aufbauen. Diese Option kann mehrere Stunden ben�tigen, in denen das Board nicht verf�gbar sein wird. Fortfahren?',
	7);
$mtnc[] = array('proceed_rebuilding',
	'Neuaufbau fortsetzen',
	'Mit dieser Funkrion kann der Neuaufbau des Suchindex forgesetzt werden, wenn er unterbrochen wurde.',
	'',
	4);
$mtnc[] = array('--', '', '', '', 1);
$mtnc[] = array('check_db',
	'�berpr�fe die Datenbank',
	'Diese Funktion �berpr�ft die Datenbank auf Fehler.',
	'',
	1);
$mtnc[] = array('optimize_db',
	'Optimiere die Datenbank',
	'Diese Funktion optimiert die Datenbank. Dies kann die Gr��e der Datenbank reduzieren, wenn viele Datens�tze gel�scht wurden oder �hnliche Aktionen durchgef�hrt wurden.',
	'',
	1);
$mtnc[] = array('repair_db',
	'Repariere die Datenbank',
	'Diese Funktion repariert Fehler in der Datenbank.',
	'Diese Funktion sollte nur genutzt werden, wenn bei der �berpr�fung der Datenbank Fehler gemeldet wurden. Fortfahren?',
	1);
$mtnc[] = array('--', '', '', '', 0);
$mtnc[] = array('reset_auto_increment',
	'Wiederherstellen der automatischen Z�hler',
	'Diese Funktion stellt die automatischen Z�hler (auto increment) in den Datenbank-Tabellen wieder her. Diese Funktion sollte nur durchgef�hrt werden, wenn Probleme beim Einf�gen neuer Datens�tze auftreten.',
	'Sollen die automatischen Z�hler wirklich wiederhergestellt werden? Auch wenn dadurch keine Daten verloren gehen, sollte die Funktion nur wenn unbedingt n�tig ausgef�hrt werden.',
	0);
$mtnc[] = array('heap_convert',
	'Konvertiere Sitzungs-Tabelle',
	'Diese Funktion konvertiert die Sitzungs-Tabelle zum HEAP-Tabellen-Typ. Dies wird normalerweise automatisch w�hrend der Installation gemacht, um die Geschwindigkeit von phpBB etwas zu verbessern. Diese Funktion sollte nur ausgef�hrt werden, wenn die Sitzungs-Tabelle keine HEAP-Tabelle ist.',
	'Soll die Tabelle wirklich konvertiert werden?',
	2);
$mtnc[] = array('--', '', '', '', 3);
$mtnc[] = array('unlock_db',
	'Board entsperren',
	'Diese Funktion hebt die Sperre des Boards auf, wenn das Board nach einer abgebrochenen Funktion weiter gesperrt ist.',
	'',
	3);

// Function specific vars

// statistic
$lang['Statistic_title'] = 'Board- und Datenbank-Statistik';
$lang['Database_table_info'] = 'Die Datenbank-Statistik ermittelt drei verschiedene Werte: die aller Tabellen der Datenbank, die der Tabellen, die standardm��ig bei phpBB enthalten sind (Kerntabellen) sowie alle Tabellen, die mit dem Prefix der Board-Tabellen anfangen (erweiterte Tabellen).';
$lang['Board_statistic'] = 'Board-Statistik';
$lang['Database_statistic'] = 'Datenbank-Statistik';
$lang['Version_info'] = 'Versions-Informationen';
$lang['Thereof_deactivated_users'] = 'davon deaktiviert';
$lang['Thereof_Moderators'] = 'davon Moderatoren';
$lang['Thereof_Administrators'] = 'davon Administratoren';
$lang['Users_with_Admin_Privileges'] = 'Benutzer mit Admin-Rechten';
$lang['Number_tables'] = 'Anzahl der Tabellen';
$lang['Number_records'] = 'Anzahl der Datens�tze';
$lang['DB_size'] = 'Gr��e der Datenbank';
$lang['Thereof_phpbb_core'] = 'davon phpBB-Kerntabellen';
$lang['Thereof_phpbb_advanced'] = 'davon erweiterte phpBB-Tabellen';
$lang['Version_of_board'] = 'Version des Boards';
$lang['Version_of_mod'] = 'Version von DB Maintenance';
$lang['Version_of_PHP'] = 'Version von PHP';
$lang['Version_of_MySQL'] = 'Version von MySQL';
// config
$lang['Config_title'] = 'DB Maintenance Konfiguration';
$lang['Config_info'] = 'Die folgenden Einstellungen erlauben es, die Arbeitsweise von DB Maintenance anzupassen. Bitte beachte, dass eine fehlerhafte Konfiguration zu unerwarteten Fehlern f�hren kann.';
$lang['General_Config'] = 'Allgemeine Konfiguration';
$lang['Rebuild_Config'] = 'Konfiguration des Neuaufbaus des Suchindexes';
$lang['Current_Rebuild_Config'] = 'Konfiguration des aktuellen Neuaufbaus';
$lang['Rebuild_Settings_Explain'] = 'Diese Einstellungen passen das Verhalten von DB Maintenance beim Neuaufbau des Suchindexes an.';
$lang['Current_Rebuild_Settings_Explain'] = 'Diese Einstellungen werden von DB Maintenance verwendet, um den aktuellen Status des Neuaufbaus zu speichern. Im Normalfall d�rften keine �nderungen an diesen Werten erforderlich sein.';
$lang['Disallow_postcounter'] = 'Deaktiviere Synchronisation der Beitragz�hlers der Benutzer';
$lang['Disallow_postcounter_Explain'] = 'Deaktiviert die Synchronisation der Beitragz�hlers der Benutzer. Du kannst diese Funktion deaktivieren, wenn du nicht willst, das geprunte Beitr�ge von den Beitragsz�hlern der Benutzer abgezogen werden.';
$lang['Disallow_rebuild'] = 'Deaktiviere den Neuaufbau des Suchindexes';
$lang['Disallow_rebuild_Explain'] = 'Deaktiviert den Neuaufbau des Suchindexes. Ein unterbrochener Neuaufbau kann dennoch fortgesetzt werden.';
$lang['Rebuildcfg_Timelimit'] = 'Maximale Ausf�hrungszeit f�r den Neuaufbau (in Sekunden)';
$lang['Rebuildcfg_Timelimit_Explain'] = 'Maximale Zeit f�r einen Durchgang beim Neuaufbau (Standard: 240). Dieser Wert beschr�nkt die Ausf�hrungszeit, selbst wenn eine l�ngere Ausf�hrung m�glich w�re.';
$lang['Rebuildcfg_Timeoverwrite'] = 'Fester Wert f�r Ausf�hrungszeit (in Sekunden)';
$lang['Rebuildcfg_Timeoverwrite_Explain'] = 'Fester Wert, der f�r die verf�gbare Ausf�hrungszeit angesetz werden soll (Standard: 0). Bei 0 erfolgt eine automatische Berechnung, jeder anderer Wert �berschreibt das Ergebnis der automatischen Berechnung.';
$lang['Rebuildcfg_Maxmemory'] = 'Maximale Beitragsgr��e f�r den Neuaufbau (in KB)';
$lang['Rebuildcfg_Maxmemory_Explain'] = 'Maximale Gr��e der Beitr�ge, die in einem Durchgang indiziert werden (Standard: 500). Wenn die Summe der Beitragsgr��en diesen Wert �berschreitet, so wird kein weiterer Beitrag im aktuellen Durchgang mehr indiziert.';
$lang['Rebuildcfg_Minposts'] = 'Minimale Zahl an Beitr�gen pro Durchgang';
$lang['Rebuildcfg_Minposts_Explain'] = 'Minimale Zahl an Beitr�gen, die in einem Durchgang indiziert werden (Standard: 3). Definiert die Zahl der Beitr�ge, die in einem Durchgang mindestens indiziert werden.';
$lang['Rebuildcfg_PHP3Only'] = 'Benutze ausschlie�lich die PHP 3-kompatible Standard-Methode f�r die Indizierung';
$lang['Rebuildcfg_PHP3Only_Explain'] = 'DB Maintenance nutzt eine optimierte Methode f�r die Indizierung, wenn PHP 4.0.5 oder neuer benutzt wird. Du kannst die optimierte Methode deaktivieren, so dass DB Maintenance die Standard-Methode des Boards verwendet.';
$lang['Rebuildcfg_PHP4PPS'] = 'Pro Sekunde indizierte Beitr�ge bei Verwendung der optimierten Methode';
$lang['Rebuildcfg_PHP4PPS_Explain'] = 'Angenommene Zahl von Beitr�gen, die in einer Sekunde indiziert werden k�nnen, wenn die optimierte Methode verwendet wird (Standard: 8).';
$lang['Rebuildcfg_PHP3PPS'] = 'Pro Sekunde indizierte Beitr�ge bei Verwendung der Standard-Methode';
$lang['Rebuildcfg_PHP3PPS_Explain'] = 'Angenommene Zahl von Beitr�gen, die in einer Sekunde indiziert werden k�nnen, wenn die Standard-Methode verwendet wird (Standard: 1).';
$lang['Rebuild_Pos'] = 'Letzter indizierter Beitrag';
$lang['Rebuild_Pos_Explain'] = 'ID des letzten erfolgreich indizierten Beitrags. Hat den Wert -1 wenn der Neuaufbau abgeschlossen ist.';
$lang['Rebuild_End'] = 'Letzter zu indizierender Beitrag';
$lang['Rebuild_End_Explain'] = 'ID des letzten zu indizierenden Beitrags. Hat den Wert 0 wenn der Neuaufbau abgeschlossen ist.';
$lang['Dbmtnc_config_updated'] = 'Konfiguration ge�ndert';
$lang['Click_return_dbmtnc_config'] = 'Klicke %shier%s, um zur Konfiguration zur�ckzukehren';
// check_user
$lang['Checking_user_tables'] = 'Pr�fe Benutzer- und Gruppen-Tabellen';
$lang['Checking_missing_anonymous'] = 'Pr�fe auf fehlendes Gast-Benutzer-Konto';
$lang['Anonymous_recreated'] = 'Gast-Benutzer-Konto wiederhergestellt';
$lang['Checking_incorrect_pending_information'] = 'Pr�fe auf fehlerhaften Wartend-Status';
$lang['Updating_invalid_pendig_user'] = 'Fehlerhafter Wartend-Status eines Benutzers aktualisiert';
$lang['Updating_invalid_pendig_users'] = 'Fehlerhafter Wartend-Status %d Benutzer aktualisiert';
$lang['Updating_pending_information'] = 'Aktualisiere Wartend-Status von Einbenutzer-Gruppen';
$lang['Checking_missing_user_groups'] = 'Pr�fe auf Benutzer mit mehreren oder keiner Einbenutzer-Gruppe';
$lang['Found_multiple_SUG'] = 'Benutzer mit mehreren Einbenutzer-Gruppen wurden gefunden';
$lang['Resolving_user_id'] = 'L�se Gruppen der Benutzer auf';
$lang['Removing_groups'] = 'Entferne Gruppen';
$lang['Removing_user_groups'] = 'Entferne Gruppen-Benutzer-Zuordnung';
$lang['Recreating_SUG'] = 'Stelle Einbenutzergruppen f�r Benutzer wieder her';
$lang['Checking_for_invalid_moderators'] = 'Pr�fe auf fehlerhafte Gruppen-Moderatoren';
$lang['Updating_Moderator'] = 'Lege aktuellen Benutzer als Gruppen-Moderator f�r Gruppe fest';
$lang['Checking_moderator_membership'] = '�berpr�fe die Mitgliedschaft der Gruppen-Moderatoren in der Gruppe';
$lang['Updating_mod_membership'] = 'Aktualisiere Mitgliedschaften der Gruppen-Moderatoren';
$lang['Moderator_added'] = 'Gruppen-Moderator der Gruppe hinzugef�gt';
$lang['Moderator_changed_pending'] = 'Wartend-Status des Gruppen-Moderators aktualisiert';
$lang['Remove_invalid_user_data'] = 'Entferne fehlerhafte Benutzer-Daten in der Gruppen-Benutzer-Zuordnung';
$lang['Remove_empty_groups'] = 'Entferne leere Gruppen';
$lang['Remove_invalid_group_data'] = 'Entferne fehlerhafte Gruppen-Daten in Gruppen-Benutzer-Zuordnung';
$lang['Checking_ranks'] = 'Pr�fe auf fehlerhafte R�nge';
$lang['Invalid_ranks_found'] = 'Benutzer mit ung�ltigem Rang gefunden';
$lang['Removing_invalid_ranks'] = 'Entferne ung�ltigen Rang';
$lang['Checking_themes'] = 'Pr�fe auf fehlerhafte Styles-Einstellungen';
$lang['Updating_users_without_style'] = 'Aktualisiere Benutzer ohne gew�lten Style';
$lang['Default_theme_invalid'] = '<b>Achtung:</b> Der Standard-Style ist ung�ltig. Bitte pr�fe die Konfiguration des Boards.';
$lang['Updating_themes'] = 'Aktualisiere ung�ltige Styles auf Styls %d';
$lang['Checking_theme_names'] = 'Pr�fe auf fehlerhafte Style-Bezeichnungen';
$lang['Removing_invalid_theme_names'] = 'Entferne fehlerhafte Style-Bezeichnungen';
$lang['Checking_languages'] = 'Pr�fe auf fehlerhafte Spracheinstellungen';
$lang['Invalid_languages_found'] = 'Benutzer mit ung�ltiger Sprachauswahl wurden gefunden';
$lang['Default_language_invalid'] = '<b>Achtung:</b> Die Standard-Sprache ist ung�ltig. Bitte pr�fe die Konfiguration des Boards.';
$lang['English_language_invalid'] = '<b>Achtung:</b> Die Standard-Sprache ist ung�ltig und die englischen Sprachdateien existieren nicht. Du musst das Verzeichnis <b>lang_english</b> wiederherstellen.';
$lang['Changing_language'] = '�ndere Sprache \'%s\' zu \'%s\'';
$lang['Remove_invalid_ban_data'] = 'Entferne ung�ltige Bann-Einstellungen';
$lang['Remove_invalid_session_keys'] = 'Entferne ung�ltige Session-Keys';
// check_post
$lang['Checking_post_tables'] = 'Pr�fe Beitrags- und Themen-Tabellen';
$lang['Checking_invalid_forums'] = 'Pr�fe auf Foren mit ung�ltiger Kategorie';
$lang['Invalid_forums_found'] = 'Foren mit ung�ltiger Kategorie gefunden';
$lang['Setting_category'] = 'Verschiebe Foren in Kategorie \'%s\'';
$lang['Checking_posts_wo_text'] = 'Pr�fe auf Beitr�ge ohne Text';
$lang['Posts_wo_text_found'] = 'Beitr�ge ohne Text gefunden';
$lang['Deleting_post_wo_text'] = '%d (Thema: %s (%d); Benutzer: %s (%d))';
$lang['Deleting_Posts'] = 'L�sche Beitrags-Daten';
$lang['Checking_topics_wo_post'] = 'Pr�fe auf Themen ohne Beitrag';
$lang['Topics_wo_post_found'] = 'Themen ohne Beitrag gefunden';
$lang['Deleting_topics'] = 'L�sche Themen-Daten';
$lang['Checking_invalid_topics'] = 'Pr�fe auf Themen mit ung�ltigem Forum';
$lang['Invalid_topics_found'] = 'Themen mit ung�ltigem Forum gefunden';
$lang['Setting_forum'] = 'Verschieben Themen in Forum \'%s\'';
$lang['Checking_invalid_posts'] = 'Pr�fe auf Beitr�ge mit ung�ltigem Thema';
$lang['Invalid_posts_found'] = 'Beitr�ge mit ung�ltigem Theme gefunden';
$lang['Setting_topic'] = 'Verschiebe Beitr�ge %s in Thema \'%s\' (%d) in Forum \'%s\'';
$lang['Checking_invalid_forums_posts'] = 'Pr�fe auf Beitr�ge mit ung�ltigem Forum';
$lang['Invalid_forum_posts_found'] = 'Beitr�ge mit ung�ltigem Forum gefunden';
$lang['Setting_post_forum'] = '%d: Verschiebe von Forum \'%s\' (%d) nach \'%s\' (%d)';
$lang['Checking_texts_wo_post'] = 'Pr�fe auf Beitragstexte ohne Beitrag';
$lang['Invalid_texts_found'] = 'Texte ohne Beitrag gefunden';
$lang['Recreating_post'] = 'Stelle Beitrag %d wieder her und verschiebe in in Thema \'%s\' in Forum \'%s\'<br />Auszug: %s';
$lang['Checking_invalid_topic_posters'] = 'Pr�fe Themen auf ung�ltige Poster';
$lang['Invalid_topic_poster_found'] = 'Themen mit ung�ltigem Poster gefunden';
$lang['Updating_topic'] = 'Aktualisiere Thema %d (Poster: %d -&gt; %d)';
$lang['Checking_invalid_posters'] = 'Pr�fe Beitr�ge auf ung�ltige Poster';
$lang['Invalid_poster_found'] = 'Beitr�ge mit ung�ltigem Poster gefunden';
$lang['Updating_posts'] = 'Aktualisiere Beitr�ge';
$lang['Checking_moved_topics'] = 'Pr�fe verschobene Beitr�ge';
$lang['Deleting_invalid_moved_topics'] = 'L�sche ung�ltige verschobene Beitr�ge';
$lang['Updating_invalid_moved_topic'] = 'Aktualisiere ung�ltige Verschiebe-Information f�r einen Beitrag';
$lang['Updating_invalid_moved_topics'] = 'Aktualisiere ung�ltige Verschiebe-Information f�r %d Beitr�ge';
$lang['Checking_prune_settings'] = 'Pr�fe auf ung�ltige Prune-Einstellungen';
$lang['Removing_invalid_prune_settings'] = 'Entferne ung�ltige Prune-Einstellungen';
$lang['Updating_invalid_prune_setting'] = 'Aktualisiere ung�ltige Prune-Einstellungen von einem Forum';
$lang['Updating_invalid_prune_settings'] = 'Aktualisiere ung�ltige Prune-Einstellungen von %d Foren';
$lang['Checking_topic_watch_data'] = 'Pr�fe auf ung�ltige beobachtete Themen';
$lang['Checking_auth_access_data'] = 'Pr�fe auf ung�ltige Gruppenberechtigungs-Daten';
$lang['Must_synchronize'] = 'Du musst die Beitragsdaten synchronisieren, bevor du das Board nutzen kannst. Klicke hier, um fortzusetzen.';
// check_vote
$lang['Checking_vote_tables'] = 'Pr�fe Umfrage-Tabellen';
$lang['Checking_votes_wo_topic'] = 'Pr�fe auf Umfragen ohne zugeh�riges Thema';
$lang['Votes_wo_topic_found'] = 'Umfragen ohne Thema gefunden';
$lang['Invalid_vote'] = '%s (%d) - Beginn: %s - Ende: %s';
$lang['Deleting_votes'] = 'L�sche Umfragen';
$lang['Checking_votes_wo_result'] = 'Pr�fe auf Umfragen ohne Ergebnis';
$lang['Votes_wo_result_found'] = 'Umfragen ohne Ergebnis gefunden';
$lang['Checking_topics_vote_data'] = 'Pr�fe Umfrage-Daten in Themen-Tabelle';
$lang['Updating_topics_wo_vote'] = 'Aktualisiere als Umfrage markierte Themen ohne zugeordnete Umfrage';
$lang['Updating_topics_w_vote'] = 'Aktualisiere nicht als Umfrage markierte Themen mit zugeh�riger Umfrage';
$lang['Checking_results_wo_vote'] = 'Pr�fe auf Ergebnisse ohne zugeh�rige Umfrage';
$lang['Results_wo_vote_found'] = 'Ergebnisse ohne Umfrage gefunden';
$lang['Invalid_result'] = 'L�sche Ergebnis: %s (Stimmen: %d)';
$lang['Checking_voters_data'] = 'Pr�fe auf ung�ltige Umfragen-Daten';
// check_pm
$lang['Checking_pm_tables'] = 'Pr�fe Private Nachrichten-Tabellen';
$lang['Checking_pms_wo_text'] = 'Pr�fe auf Private Nachrichten ohne Text';
$lang['Pms_wo_text_found'] = 'Private Nachrichten ohne Text gefunden';
$lang['Deleting_pn_wo_text'] = '%d (Betreff: %s; Absender: %s (%d); Empf�nger: %s (%d))';
$lang['Deleting_Pms'] = 'L�sche Daten der Privaten Nachrichten';
$lang['Checking_texts_wo_pm'] = 'Pr�fe auf Texte von Privaten Nachrichten ohne zugeh�rige Nachricht';
$lang['Deleting_pm_texts'] = 'L�sche ung�ltige Texte von Privaten Nachrichten';
$lang['Checking_invalid_pm_senders'] = 'Pr�fe Private Nachrichten auf ung�ltige Absender';
$lang['Invalid_pm_senders_found'] = 'Private Nachrichten mit ung�ltigem Absender gefunden';
$lang['Updating_pms'] = 'Aktualisiere Private Nachrichten';
$lang['Checking_invalid_pm_recipients'] = 'Pr�fe Private Nachrichten auf ung�ltige Empf�nger';
$lang['Invalid_pm_recipients_found'] = 'Private Nachrichten mit ung�ltigem Empf�nger gefunden';
$lang['Checking_pm_deleted_users'] = 'Pr�fe Private Nachrichten auf gel�schte Absender oder Empf�nger';
$lang['Invalid_pm_users_found'] = 'Private Nachrichten mit gel�schtem Absender oder Empf�nger gefunden';
$lang['Deleting_pms'] = 'L�sche Private Nachrichten';
$lang['Synchronize_new_pm_data'] = 'Aktualisiere Z�hler f�r neue Private Nachrichten';
$lang['Synchronizing_users'] = 'Aktualisiere Benutzer';
$lang['Synchronizing_user'] = 'Aktualisiere Benutzer %s (%d)';
$lang['Synchronize_unread_pm_data'] = 'Aktualisiere Z�hler f�r ungelesene Private Nachrichten';
// check_config
$lang['Checking_config_table'] = 'Pr�fe Konfigurations-Tabelle';
$lang['Checking_config_entries'] = 'Pr�fe Konfigurations-Eintr�ge';
$lang['Restoring_config'] = 'Stelle Konfigurationseintr�ge wieder her';
// check_search_wordmatch
$lang['Checking_search_wordmatch_tables'] = 'Pr�fe Wort-Verkn�pfungs-Tabelle';
$lang['Checking_search_data'] = 'Pr�fe auf ung�ltige Daten f�r die Suchfunktion';
// check_search_wordlist
$lang['Checking_search_wordlist_tables'] = 'Pr�fe Wort-Liste-Tabelle';
$lang['Checking_search_words'] = 'Pr�fe auf unn�tige Suchw�rter';
$lang['Removing_part_invalid_words'] = 'Entferne einen Teil der unn�tigen Suchw�rter';
$lang['Removing_invalid_words'] = 'Entferne unn�tige Suchw�rter';
// synchronize topics subjects
$lang['Sync_topics_subjects'] = 'Synchronize topics subjects';
$lang['Sync_topics_subjects_progress'] = 'Synchronization in progress';
// rebuild_search_index
$lang['Rebuilding_search_index'] = 'Baue Suchindex neu auf';
$lang['Deleting_search_tables'] = 'Leere Such-Tabellen';
$lang['Reset_search_autoincrement'] = 'Setze Z�hler der Suchtabellen zur�ck';
$lang['Preparing_config_data'] = 'Konfiguriere Daten';
$lang['Can_start_rebuilding'] = 'Der Suchindex kann nun wieder aufgebaut werden';
$lang['Click_once_warning'] = '<b>Den Link bitte nur einmal anklicken!</b> - es kann mehrere Minuten dauern, bis eine neue Seite angezeigt wird.';
// proceed_rebuilding
$lang['Preparing_to_proceed'] = 'Bereite Tabellen zur Wiederaufnahme vor';
$lang['Preparing_search_tables'] = 'Bereite Suchtabellen zur Wiederaufnahme vor';
// perform_rebuild
$lang['Click_or_wait_to_proceed'] = 'Klicke hier, um fortzufahren oder warte einen Moment';
$lang['Indexing_progress'] = '%d von %d Beitr�gen (%01.1f%%) wurden indiziert. Letzter indizierter Beitrag: %d';
$lang['Indexing_finished'] = 'Der Index wurde erfolgreich neu aufgebaut';
// synchronize_post
$lang['Synchronize_posts'] = 'Synchronisiere Beitrags-Daten';
$lang['Synchronize_topic_data'] = 'Synchronisiere Themen';
$lang['Synchronizing_topics'] = 'Aktualisiere Themen';
$lang['Synchronizing_topic'] = 'Aktualisiere Thema %d (%s)';
$lang['Synchronize_moved_topic_data'] = 'Synchronisiere verschobene Themen';
$lang['Inconsistencies_found'] = 'In der Datenbank wurden Inkonsistenzen gefunden. %sPr�fe bitte die Beitrags- und Themen-Tabellen%s';
$lang['Synchronizing_moved_topics'] = 'Aktualisiere verschobene Themen';
$lang['Synchronizing_moved_topic'] = 'Aktualisiere verschobenens Thema %d -&gt; %d (%s)';
$lang['Synchronize_forum_topic_data'] = 'Synchronisiere Themen-Daten der Foren';
$lang['Synchronizing_forums'] = 'Aktualisiere Foren';
$lang['Synchronizing_forum'] = 'Aktualisiere Forum %d (%s)';
$lang['Synchronize_forum_data_wo_topic'] = 'Synchronisiere Foren ohne Themen';
$lang['Synchronize_forum_post_data'] = 'Synchronisiere Beitrags-Daten der Foren';
$lang['Synchronize_forum_data_wo_post'] = 'Synchronisiere Foren ohne Beitrag';
// synchronize_user
$lang['Synchronize_post_counters'] = 'Synchronisiere Beitragsz�hler';
$lang['Synchronize_user_post_counter'] = 'Synchronisiere Beitragsz�hler der Benutzer';
$lang['Synchronizing_user_counter'] = 'Aktualisiere Benutzer %s (%d): %d -&gt; %d';
// synchronize_mod_state
$lang['Synchronize_moderators'] = 'Synchronisiere Moderator-Status in der Benutzer-Tabelle';
$lang['Getting_moderators'] = 'Ermittele Moderatoren';
$lang['Checking_non_moderators'] = 'Pr�fe auf Benutzer mit Moderator-Status, die kein Forum moderieren';
$lang['Updating_mod_state'] = 'Aktualisiere Moderator-Status der Benutzer';
$lang['Changing_moderator_status'] = 'Aktualisiere Moderator-Status des Benutzers %s (%d)';
$lang['Checking_moderators'] = 'Pr�fe auf Benutzer ohne Moderator-Status, die mindestens ein Forum moderieren';
// reset_date
$lang['Resetting_future_post_dates'] = 'Setze Zeiten des letzten Beitrags in der Zukunft zur�ck';
$lang['Checking_post_dates'] = 'Pr�fe Zeiten in den Beitr�gen';
$lang['Checking_pm_dates'] = 'Pr�fe Zeiten in den Privaten Nachrichten';
$lang['Checking_email_dates'] = 'Pr�fe Zeiten in den E-Mails';
// reset_sessions
$lang['Resetting_sessions'] = 'Setze Sitzungs-Daten zur�ck';
$lang['Deleting_session_tables'] = 'Leere Sitzungs- und Suchergebnis-Tabellen';
$lang['Restoring_session'] = 'Stelle Sitzung des aktuellen Benutzers wieder her';
// check_db
$lang['Checking_db'] = '�berpr�fe Datenbank';
$lang['Checking_tables'] = '�berpr�fe Tabellen';
$lang['Table_OK'] = 'in Ordnung';
$lang['Table_HEAP_info'] = 'Befehl steht f�r HEAP-Tabllen nicht zur Verf�gung';
// repair_db
$lang['Repairing_db'] = 'Repariere Datenbank';
$lang['Repairing_tables'] = 'Repariere Tabellen';
// optimize_db
$lang['Optimizing_db'] = 'Optimiere Datenbank';
$lang['Optimizing_tables'] = 'Optimiere Tabellen';
$lang['Optimization_statistic'] = 'Die Optimierung reduzierte die Gr��e der Tabellen von %s auf %s. Das ist eine Reduzierung von %s oder %01.2f%%.';
// reset_auto_increment
$lang['Reset_ai'] = 'Stelle automatische Z�hler wieder her';
$lang['Ai_message_update_table'] = 'Tabelle aktualisiert';
$lang['Ai_message_no_update'] = 'Kein Update notwendig';
$lang['Ai_message_update_table_old_mysql'] = 'Tabelle aktualisiert'; // Used if an old version of MySQL is used which does not allow a table check before updating the table
// heap_convert
$lang['Converting_heap'] = 'Konvertiere die Sitzungs-Tabelle in den HEAP-Tabellen-Typ';
// unlock_db
$lang['Unlocking_db'] = 'Entsperre Datenbank';

// Emergency Recovery Console
$lang['Forum_Home'] = 'Foren-�bersicht';
$lang['ERC'] = 'Notfallkonsole';
$lang['Submit_text'] = 'Absenden';
$lang['Select_Language'] = 'W�hle eine Sprache aus';
$lang['No_selectable_language'] = 'Keine ausw�hlbare Sprache existiert';
$lang['Select_Option'] = 'W�hle eine Option';
$lang['Option_Help'] = 'Hinweise zu den Optionen';
$lang['Authenticate_methods'] = 'Es gibt zwei Wege, um sich zu authentifizieren';
$lang['Authenticate_methods_help_text'] = 'Du musst dich authentifizieren, um �nderungen an der Board-Konfiguration vorzunehmen.
	Dies ist auf zwei verschiedene Wege m�glich: Als erstes kannst du dich authentifizieren, in dem du den Benutzernamen und das
	Passwort eines aktiven Admin-Accounts eingibst (vorzuziehende Methode). Als zweites kannst du dich authentifizieren, in dem du den Benutzernamen und das Passwort des Datenbank-Accounts eingibst, den das Board verwendet.';
$lang['Authenticate_user_only'] = 'Du musst dich mit einem aktiven Administrator-Account authentifizieren';
$lang['Authenticate_user_only_help_text'] = 'Du musst dich authentifizieren, um �nderungen an der Board-Konfiguration
	vorzunehmen. Du kannst dich authentifizieren, in dem du den Benutzernamen und das Passwort eines aktiven Admin-Accounts eingibst.';
$lang['Admin_Account'] = 'Administrator-Account des Boards';
$lang['Database_Login'] = 'Datenbank-Account';
$lang['Username'] = 'Benutzername';
$lang['Password'] = 'Passwort';
$lang['Auth_failed'] = 'Authentifizierung gescheitert!';
$lang['Return_ERC'] = 'Zur�ck zur Notfallkonsole';
$lang['cur_setting'] = 'Aktuelle Einstellung';
$lang['rec_setting'] = 'Empfohlene Einstellung';
$lang['secure'] = 'Sicher';
$lang['secure_yes'] = 'ja (https)';
$lang['secure_no'] = 'nein (http)';
$lang['domain'] = 'Domain';
$lang['port'] = 'Port';
$lang['path'] = 'Pfad';
$lang['Cookie_domain'] = 'Dom�ne des Cookie';
$lang['Cookie_name'] = 'Name des Cookie';
$lang['Cookie_path'] = 'Pfad des Cookie';
$lang['select_language'] = 'W�hle eine neue Sprache aus';
$lang['select_theme'] = 'W�hle ein neues Style aus';
$lang['reset_thmeme'] = 'Stelle das Standard-Style wieder her';
$lang['new_admin_user'] = 'Benutzer, dem Admin-Rechte gew�hrt werden sollen';
$lang['dbms'] = 'Typ der Datenbank';
$lang['DB_Host'] = 'Rechnername des Datenbank-Servers / DSN';
$lang['DB_Name'] = 'Name der Datenbank';
$lang['DB_Username'] = 'Benutzername der Datenbank';
$lang['DB_Password'] = 'Passwort der Datenbank';
$lang['Table_Prefix'] = 'Vorspann der Tabelle';
$lang['New_config_php'] = "Das ist deine neue config.$phpEx";
// Options
$lang['cls'] = 'L�sche alle Sitzungen';
$lang['ecf'] = 'L�sche Cache Ordner';
$lang['fdt'] = 'Korrektur def_tree.php';
$lang['rdb'] = 'Repariere Datenbank-Tabellen';
$lang['cct'] = '�berpr�fe Konfigurations-Tabelle';
$lang['rpd'] = 'Setze Pfad-Daten zur�ck';
$lang['rcd'] = 'Setze Cookie-Daten zur�ck';
$lang['rld'] = 'Setze Sprach-Daten zur�ck';
$lang['rtd'] = 'Setze Style-Daten zur�ck';
$lang['dgc'] = 'Deaktiviere GZip-Komprimierung';
$lang['cbl'] = 'L�sche Bann-Liste';
$lang['raa'] = 'Entferne alle Administratoren';
$lang['mua'] = 'Gew�hre einem Benutzer Admin-Rechte';
$lang['rcp'] = 'Stelle config.php wieder her';
// Info for options
$lang['cls_info'] = 'Wenn fortgefahren wird, werden alle Sitzungsdaten gel�scht.';
$lang['ecf_info'] = 'Wenn fortgefahren wird, wird der Cache Ordner geleert.';
$lang['fdt_info'] = 'Wenn fortgefahren wird, wird die Datei def_tree.php repariert.';
$lang['rdb_info'] = 'Wenn fortgefahren wird, werden die Tabellen in der Datenbank repariert.';
$lang['cct_info'] = 'Wenn fortgefahren wird, wird die Konfigurations-Tabelle gepr�ft und fehlende Eintr�ge wieder hergesetellt.';
$lang['rpd_info'] = 'Wenn fortgefahren wird, werden die Konfigurations-Einstellungen ge�ndert, sofern die empfohlene Einstellung ausgew�hlt ist.';
$lang['rcd_info'] = 'Wenn fortgefahren wird, werden die Cookie-Daten aktualisiert. Die Option, ob ein sicheres Cookie erstellt werden soll oder nicht, kann unter \'Setze Pfad-Daten zur�ck\' gefunden werden.';
$lang['rld_info'] = 'Wenn fortgefahren wird, wird die ausgew�hlte Sprache sowohl f�r das Board als auch f�r den zur Authentifizierung genutzen Benutzer verwendet.';
$lang['rtd_info'] = 'Wenn forgefahren wird, wird entweder der ausgew�hlte Style sowohl f�r das Board als auch f�r den zur Authentifizierung genutzen Benutzer verwendet oder der Standard-Style (Icy Phoenix) wiederhergestellt und f�r Board und Benutzer verwendet.';
$lang['rtd_info_no_theme'] = 'Wenn forgefahren wird, wird der Standard-Style (Icy Phoenix) wiederhergestellt und sowohl f�r das Board als auch f�r den zur Authentifizierung genutzen Benutzer verwendet.';
$lang['dgc_info'] = 'Wenn fortgefahren wird, wird die GZip Komprimierung deaktiviert.';
$lang['cbl_info'] = 'Wenn fortgefahren wird, wird die Bann-Liste und die Liste der verbotenen Benutzernamen gel�scht.';
$lang['raa_info'] = 'Wenn fortgefahren wird, werden alle Adminstratoren zu normalen Benutzern ge�ndert. Wenn ein Admin-Account zur Authentifizierung genutzt wird, beh�lt dieser die Admin-Rechte.';
$lang['mua_info'] = 'Wenn fortgefahren wird, erh�lt der ausgew�hlte Benutzer Admin-Rechte. Gleichzeitig wird der Benutzer auf Aktiv geschaltet.';
$lang['rcp_info'] = 'Wenn fortgefahren wird, wird eine neue config.php mit den angegebenen Daten erstellt.';
// Success messages for options
$lang['cls_success'] = 'Alle Sitzungsdaten wurden erfolgreich gel�scht.';
$lang['ecf_success'] = 'Cache erfolgreich geleert.';
$lang['fdt_success'] = 'def_tree.php erfolgreich wiederhergestellt.';
$lang['rdb_success'] = 'Die Tabellen der Datenbank wurden repariert.';
$lang['rpd_success'] = 'Die Konfigurations-Einstellungen wurden erfolgreich aktualisiert.';
$lang['cct_success'] = 'Die Konfigurations-Tabelle wurde erfolgreich repariert.';
$lang['rcd_success'] = 'Die Cookie-Daten wurden erfolgreich aktualisiert.';
$lang['rld_success'] = 'Die Spracheinstellungen wurden erfolgreich aktualisiert.';
$lang['rld_failed'] = 'Die erforderlichen Sprach-Dateien (lang_main.' . $phpEx . ' und lang_admin.' . $phpEx . ') existieren nicht.';
$lang['rtd_restore_success'] = 'Der Standard-Style wurde erfolgreich wiederhergestellt.';
$lang['rtd_success'] = 'Die Style-Einstellungen wurden erfolgreich aktualisiert.';
$lang['dgc_success'] = 'Die GZip-Komprimierung wurde erfolgreich deaktiviert.';
$lang['cbl_success'] = 'Die Bann-Liste und die Liste der verbotenen Benutzernamen werden erfolgreich gel�scht.';
$lang['cbl_success_anonymous'] = 'Die Bann-Liste und die Liste der verbotenen Benutzernamen werden erfolgreich gel�scht. Das Gast-Benutzer-Konto wurde wiederhergestellt. Da f�r das Gast-Benutzer-Konto evtl. die zugeh�rigen Gruppen fehlen, sollte die Funktion &quot;Pr�fe Benutzer- und Gruppen-Tabellen&quot; im Hauptteil von DB Maintenance ausgef�hrt werden.';
$lang['raa_success'] = 'Alle Administratoren wurden erfolgreich zu normalen Benutzern umgewandelt.';
$lang['mua_success'] = 'Der ausgew�hlte Benutzer hat nun Admin-Rechte.';
$lang['mua_failed'] = '<b>Fehler:</b> Der ausgew�hlte Benutzer existiert nicht oder hat schon Admin-Rechte.';
$lang['rcp_success'] = "Kopiere diesen Text in eine Textdatei, benenne sie in <b>config.$phpEx</b> um und lade sie in das Hauptverzeichnis des Forums hoch. Stelle dabei sicher, dass sich vor dem <b>&lt;?php</b> und nach dem <b>?&gt;</b> kein Zeichen wie ein Leerzeichen oder ein Zeilenwechsel befindet.<br />
Du kannst die Datei auch auf deinen Computer %sherunterladen%s.";
// Text for success messages
$lang['Removing_admins'] = 'Entferne Administratoren';
// Help Text
$lang['Option_Help_Text'] = '<p>Wenn du eine Fehlermeldung erh�lst, dass bei der Erstellung einer Session bzw. Sitzung ein Fehler aufgetreten ist (oder so �hnlich), kannst du die Sitzungsdaten mit <b>L�sche alle Sitzungen</b> l�schen. Wenn du Probleme beim Zugriff auf Datenbank-Tabellen hast, so kannst du diese mit <b>Repariere Datenbank-Tabellen</b> reparieren. <b>�berpr�fe Konfigurations-Tabelle</b> �berpr�ft die Konfiguartions-Tabelle auf fehlende Eintr�ge, was bei verschiedensten Problemen helfen kann.</p>
<p>Wenn du dich nicht anmelden kannst oder nicht auf den Administrations-Bereich zugreifen kannst, kann ein Fehler bei den Pfad- oder Cookie-Einstellungen vorliegen. Du kannst sie unter <b>Setze Pfad-Daten zur�ck</b> oder <b>Setze Cookie-Daten zur�ck</b> �ndern. Du kannst auch die Spracheinstellungen unter <b>Setze Sprach-Daten zur�ck</b> bzw. die Style-Einstellungen unter <b>Setze Style-Daten zur�ck</b> zur�cksetzen.</p>
<p>Wenn nach der Aktivierung der GZip-Komprimierung Probleme auftreten, so kannst du sie mit <b>Deaktiviere GZip-Komprimierung</b> ausschalten.</p>
<p>Wenn du das Passwort zu deinem Benutzernamen vergessen hast, kannst du einem Benutzer Admin-Rechte geben, indem du <b> Gew�hre einem Benutzer Admin-Rechte</b> ausw�hlst. Dadurch wird der Benutzer auch aktiviert, so dass du einen kurz zuvor erstelltes Benutzer-Konto verwenden kannst. Wenn du keinen neuen Benutzer erstellen kannst, kannst du die Bann-Liste mit <b> L�sche Bann-Liste</b> l�schen (dies stelle auch das Gast-Benutzer-Konto wieder her).</p>
<p>Wenn dein Board gehackt wurde, solltest du alle Admin-Accounts entfernen, indem du <b>Entferne alle Administratoren</b> entfernst. (Die Accounts selbst werden nicht gel�scht sondern nur die Admin-Rechte entfernt.)</p>
<p>Wenn du die config.php wiederherstellen musst, kannst du dies mit <b>Stelle config.php wieder her</b> machen.</p>';

$lang['dbmntc_Invalid_Option'] = 'Ung�ltige Option';

?>