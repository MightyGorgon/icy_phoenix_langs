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
* Chris Lennert - (calennert@users.sourceforge.net) - (http://lennertmods.sourceforge.net)
* TheSteffen, KugeLSichA, Tom
*
*/

$lang['BBUS_Mod_Title'] = 'Forum Verwendungs-Statistiken';
$lang['BBUS_Misc'] = 'Sonstiges';

$lang['BBUS_ColHeader_PostRate'] = 'Beitragsrate';
$lang['BBUS_ColHeader_PctUTP'] = '%UTP';
$lang['BBUS_ColHeader_PctUTUP'] = '%UTUP';
$lang['BBUS_ColHeader_NewTopics'] = 'Neue Themen';
$lang['BBUS_ColHeader_TopicRate'] = 'Themen Rate';
$lang['BBUS_ColHeader_Topics_Watched'] = 'Beobachtet';
$lang['BBUS_ColHeader_Header'] = 'Titel';
$lang['BBUS_ColHeader_Description'] = 'Beschreibung';

$lang['BBUS_ColHeader_Posts_Explain'] = 'Gesamtzahl aller Beiträge.';
$lang['BBUS_ColHeader_PostRate_Explain'] = 'Durchschnittliche Anzahl von Beiträgen pro Tag.';
$lang['BBUS_ColHeader_PctUTP_Explain'] = 'Prozentzahl der gesamten Beiträge des Benutzers.';
$lang['BBUS_ColHeader_PctUTUP_Explain'] = 'Prozentzahl der gelöschten Beiträge des Benutzers.';
$lang['BBUS_ColHeader_NewTopics_Explain'] = 'Gesamtzahl der neuen Themen pro Benutzer.';
$lang['BBUS_ColHeader_TopicRate_Explain'] = 'Durchschnittliche Anzahl neuer Themen pro Benutzer.';
$lang['BBUS_ColHeader_Topics_Watched_Explain'] = 'Gesamtzahl der beobachteten Themen.';

$lang['BBUS_Col_Descriptions_Caption'] = 'Spalten Beschreibung';

$lang['BBUS_Msg_NoPosts'] = 'Benutzer hat in keinem Forum geschrieben.';
$lang['BBUS_Unpruned_Posts'] = 'Alle bisherigen Beiträge wurden gelöscht.';
$lang['BBUS_Scale_By'] = 'Skalierung:';

// Admin Configuration page
$lang['BBUS_Settings_Caption'] = 'Forum Verwendungs-Statistiken Einstellungen';
$lang['BBUS_Settings_Explain'] = 'Diese Einstellungen erlauben Dir einzustellen, welche Benutzer berechtigt sind die Forum Verwendungs-Statistiken auf einer Benutzer-Profil-Seite anzusehen und verschiedene Optionen (verbunden mit den auf dieser Seite präsentierten Daten) zu konfigurieren. ';

$lang['BBUS_Setting_ViewLevel_Caption'] = 'Ansichts-Level';
$lang['BBUS_Setting_ViewLevel_Note'] = '<i>Beachte</i>: Diese Textbox kann nur gelesen werden (read-only).<br/>Benutze die Checkboxen um den Wert zu anzupassen.';

$lang['BBUS_Setting_ViewLevel_Explain1'] = 'Die Ansichts-Level Einstellung ist eine Summe von einem oder mehr Flags welche festlegt ob ein Benutzer die Forum Verwendungs-Stats auf der Benutzerprofil-Seite sehen kann.<br /><b>Nutze die Checkboxen unten um die Ansicht der Stats für bestimmte Benutzergruppen zu aktivieren oder deaktivieren.</b><br/><br/>Die Ansichts-Level Zugriffs Flags werden wie folgt bestimmt:<br/>';

$lang['BBUS_Setting_ViewLevel_Explain2'] = 'Die häufigste Einstellung für Foren ist 24 (16 + 8). Diese erlaubt Administratoren und Moderatoren, die Forum Verwendungs-Statistiken zu überwachen, während alle anderen Benutzer nur die Standard Benutzerprofilseite angezeigt bekommen.<br/><br/> Es wird empfohlen, dass Du die Ansicht der Statistik (besonders für gro&szlig;e Foren) einschränkst, um Leistungsverminderung zu vermeiden, die aus der Erzeugung von Statistiken für viele Benutzer gleichzeitig entstehen können.';

$lang['BBUS_Setting_ViewOptions_Caption'] = 'Ansichts-Optionen';
$lang['BBUS_Setting_ViewOptions_Note'] = '<i>Beachte</i>: Diese Textbox kann nur gelesen werden (read-only).<br/>Benutze die Checkboxen um diesen Wert zu anzupassen.';
$lang['BBUS_Setting_ViewOptions_Explain1'] = 'Wie die Ansichts-Level Einstellung ist auch die Ansichts-Optionen Einstellung eine Summe von Flags, welche verschiedene Eigenschaften der Forum Verwendungs-Statistik aktiviert oder deaktiviert. <b>Nutze die Checkboxen unten um diese Eigenschaften zu aktiveren oder deaktivieren.</b><br/><br/>Die Ansichts-Optionen Flags werden wie folgt bestimmt:<br/>';
$lang['BBUS_Setting_ViewOptions_Explain2'] = 'Reduziere die Anzahl, um die Serverlast zu reduzieren.';

$lang['BBUS_Settings_Default_Post_Rate_Scaling_Caption'] = 'vorgegebener Beitrags-Skalierungs-Faktor';
$lang['BBUS_Settings_Default_Post_Rate_Scaling_Explain'] = 'Gib hier, für die Beitrags Rate, den entsprechenden Skalierungs-Faktor an.';

$lang['BBUS_Settings_Default_Topic_Rate_Scaling_Caption'] = 'vorgegebener Themen-Skalierungs-Faktor';
$lang['BBUS_Settings_Default_Topic_Rate_Scaling_Explain'] = 'Gib hier, für die Themen Rate, den entsprechenden Skalierungs-Faktor an.';

$lang['BBUS_ViewLevel_Anonymous_Caption'] = 'G&auml;ste';
$lang['BBUS_ViewLevel_Self_Caption'] = 'Selbst';
$lang['BBUS_ViewLevel_Users_Caption'] = 'Benutzer';
$lang['BBUS_ViewLevel_Moderators_Caption'] = 'Moderatoren';
$lang['BBUS_ViewLevel_Admins_Caption'] = 'Administratoren';
$lang['BBUS_ViewLevel_SpecialGrp_Caption'] = 'Spezial Gruppe';

$lang['BBUS_ViewLevel_Anonymous_Explain'] = 'Erlaube G&auml;sten die Ansicht der Stats.';
$lang['BBUS_ViewLevel_Self_Explain'] = 'Erlaube jedem Benutzer die Ansicht seiner/ihrer Stats.';
$lang['BBUS_ViewLevel_Users_Explain'] = 'Erlaube jedem Benutzer die Ansicht der Stats anderer Benutzer.';
$lang['BBUS_ViewLevel_Moderators_Explain'] = 'Erlaube Moderatoren die Ansicht der Stats.';
$lang['BBUS_ViewLevel_Admins_Explain'] = 'Erlaube Administratoren die Ansicht der Stats. (Empfohlen)';
$lang['BBUS_ViewLevel_SpecialGrp_Explain'] = 'Erlaube einer speziell ausgewählten Gruppe die Ansicht der Stats.';

$lang['BBUS_ViewOption_Show_All_Forums_Caption'] = 'Zeige alle Foren, unabh&auml;ngig des Benutzer Beitragsz&auml;hlers.';
$lang['BBUS_ViewOption_PCTUTUP_Column_Visible_Caption'] = 'Zeige %UTUP Spalte in Stats Tabelle';
$lang['BBUS_ViewOption_Misc_Section_Visible_Caption'] = 'Zeige Verschiedene Info Abschnitt';
$lang['BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Caption'] = 'Zeige "Alle ungelöschten Beitr&auml;ge" in verschiedenen Abschnitten';
$lang['BBUS_ViewOption_Viewer_Scalable_PR_Caption'] = 'Beitrags-Skalierungs-Faktor anzeigen';
$lang['BBUS_ViewOption_Viewer_Scalable_TR_Caption'] = 'Themen-Skalierungs-Faktor anzeigen';

$lang['BBUS_ViewOption_Show_All_Forums_Explain'] = '';
$lang['BBUS_ViewOption_PCTUTUP_Column_Visible_Explain'] = '';
$lang['BBUS_ViewOption_Misc_Section_Visible_Explain'] = '';
$lang['BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Explain'] = '';
$lang['BBUS_ViewOption_Viewer_Scalable_PR_Explain'] = '';
$lang['BBUS_ViewOption_Viewer_Scalable_TR_Explain'] = '';

$lang['BBUS_Setting_SpecialGrp_Caption'] = 'Spezial Zugriffs Gruppe';
$lang['BBUS_Setting_SpecialGrp_Explain'] = 'Wähle hier die spezielle Gruppe aus, die die Forum Verwendungs-Statistiken ansehen darf.  <i>Hinweis</i>: Diese Einstellung ist nur wirkungsvoll, wenn einer \' Spezial Gruppe \' (unter Ansichts-Level Einstellung) die Ansicht per "Hacken" erlaubt wurde.';

?>