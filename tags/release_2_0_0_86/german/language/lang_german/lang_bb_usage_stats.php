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
	'BBUS_Mod_Title' => 'Forum Verwendungs-Statistiken',
	'BBUS_Misc' => 'Sonstiges',

	'BBUS_ColHeader_PostRate' => 'Beitragsrate',
	'BBUS_ColHeader_PctUTP' => '%UTP',
	'BBUS_ColHeader_PctUTUP' => '%UTUP',
	'BBUS_ColHeader_NewTopics' => 'Neue Themen',
	'BBUS_ColHeader_TopicRate' => 'Themen Rate',
	'BBUS_ColHeader_Topics_Watched' => 'Beobachtet',
	'BBUS_ColHeader_Header' => 'Titel',
	'BBUS_ColHeader_Description' => 'Beschreibung',

	'BBUS_ColHeader_Posts_Explain' => 'Gesamtzahl aller Beiträge.',
	'BBUS_ColHeader_PostRate_Explain' => 'Durchschnittliche Anzahl von Beiträgen pro Tag.',
	'BBUS_ColHeader_PctUTP_Explain' => 'Prozentzahl der gesamten Beiträge des Benutzers.',
	'BBUS_ColHeader_PctUTUP_Explain' => 'Prozentzahl der gelöschten Beiträge des Benutzers.',
	'BBUS_ColHeader_NewTopics_Explain' => 'Gesamtzahl der neuen Themen pro Benutzer.',
	'BBUS_ColHeader_TopicRate_Explain' => 'Durchschnittliche Anzahl neuer Themen pro Benutzer.',
	'BBUS_ColHeader_Topics_Watched_Explain' => 'Gesamtzahl der beobachteten Themen.',

	'BBUS_Col_Descriptions_Caption' => 'Spalten Beschreibung',

	'BBUS_Msg_NoPosts' => 'Benutzer hat in keinem Forum geschrieben.',
	'BBUS_Unpruned_Posts' => 'Alle bisherigen Beiträge wurden gelöscht.',
	'BBUS_Scale_By' => 'Skalierung:',

// Admin Configuration page
	'BBUS_Settings_Caption' => 'Forum Verwendungs-Statistiken Einstellungen',
	'BBUS_Settings_Explain' => 'Diese Einstellungen erlauben Dir einzustellen, welche Benutzer berechtigt sind die Forum Verwendungs-Statistiken auf einer Benutzer-Profil-Seite anzusehen und verschiedene Optionen (verbunden mit den auf dieser Seite präsentierten Daten) zu konfigurieren. ',

	'BBUS_Setting_ViewLevel_Caption' => 'Ansichts-Level',
	'BBUS_Setting_ViewLevel_Note' => '<i>Beachte</i>: Diese Textbox kann nur gelesen werden (read-only).<br />Benutze die Checkboxen um den Wert zu anzupassen.',

	'BBUS_Setting_ViewLevel_Explain1' => 'Die Ansichts-Level Einstellung ist eine Summe von einem oder mehr Flags welche festlegt ob ein Benutzer die Forum Verwendungs-Stats auf der Benutzerprofil-Seite sehen kann.<br /><b>Nutze die Checkboxen unten um die Ansicht der Stats für bestimmte Benutzergruppen zu aktivieren oder deaktivieren.</b><br /><br />Die Ansichts-Level Zugriffs Flags werden wie folgt bestimmt:<br />',

	'BBUS_Setting_ViewLevel_Explain2' => 'Die häufigste Einstellung für Foren ist 24 (16 + 8). Diese erlaubt Administratoren und Moderatoren, die Forum Verwendungs-Statistiken zu überwachen, während alle anderen Benutzer nur die Standard Benutzerprofilseite angezeigt bekommen.<br /><br /> Es wird empfohlen, dass du die Ansicht der Statistik (besonders für gro&szlig;e Foren) einschränkst, um Leistungsverminderung zu vermeiden, die aus der Erzeugung von Statistiken für viele Benutzer gleichzeitig entstehen können.',

	'BBUS_Setting_ViewOptions_Caption' => 'Ansichts-Optionen',
	'BBUS_Setting_ViewOptions_Note' => '<i>Beachte</i>: Diese Textbox kann nur gelesen werden (read-only).<br />Benutze die Checkboxen um diesen Wert zu anzupassen.',
	'BBUS_Setting_ViewOptions_Explain1' => 'Wie die Ansichts-Level Einstellung ist auch die Ansichts-Optionen Einstellung eine Summe von Flags, welche verschiedene Eigenschaften der Forum Verwendungs-Statistik aktiviert oder deaktiviert. <b>Nutze die Checkboxen unten um diese Eigenschaften zu aktiveren oder deaktivieren.</b><br /><br />Die Ansichts-Optionen Flags werden wie folgt bestimmt:<br />',
	'BBUS_Setting_ViewOptions_Explain2' => 'Reduziere die Anzahl, um die Serverlast zu reduzieren.',

	'BBUS_Settings_Default_Post_Rate_Scaling_Caption' => 'vorgegebener Beitrags-Skalierungs-Faktor',
	'BBUS_Settings_Default_Post_Rate_Scaling_Explain' => 'Gib hier, für die Beitrags Rate, den entsprechenden Skalierungs-Faktor an.',

	'BBUS_Settings_Default_Topic_Rate_Scaling_Caption' => 'vorgegebener Themen-Skalierungs-Faktor',
	'BBUS_Settings_Default_Topic_Rate_Scaling_Explain' => 'Gib hier, für die Themen Rate, den entsprechenden Skalierungs-Faktor an.',

	'BBUS_ViewLevel_Anonymous_Caption' => 'G&auml;ste',
	'BBUS_ViewLevel_Self_Caption' => 'Selbst',
	'BBUS_ViewLevel_Users_Caption' => 'Benutzer',
	'BBUS_ViewLevel_Moderators_Caption' => 'Moderatoren',
	'BBUS_ViewLevel_Admins_Caption' => 'Administratoren',
	'BBUS_ViewLevel_SpecialGrp_Caption' => 'Spezial Gruppe',

	'BBUS_ViewLevel_Anonymous_Explain' => 'Erlaube G&auml;sten die Ansicht der Stats.',
	'BBUS_ViewLevel_Self_Explain' => 'Erlaube jedem Benutzer die Ansicht seiner/ihrer Stats.',
	'BBUS_ViewLevel_Users_Explain' => 'Erlaube jedem Benutzer die Ansicht der Stats anderer Benutzer.',
	'BBUS_ViewLevel_Moderators_Explain' => 'Erlaube Moderatoren die Ansicht der Stats.',
	'BBUS_ViewLevel_Admins_Explain' => 'Erlaube Administratoren die Ansicht der Stats. (Empfohlen)',
	'BBUS_ViewLevel_SpecialGrp_Explain' => 'Erlaube einer speziell ausgewählten Gruppe die Ansicht der Stats.',

	'BBUS_ViewOption_Show_All_Forums_Caption' => 'Zeige alle Foren, unabh&auml;ngig des Benutzer Beitragsz&auml;hlers.',
	'BBUS_ViewOption_PCTUTUP_Column_Visible_Caption' => 'Zeige %UTUP Spalte in Stats Tabelle',
	'BBUS_ViewOption_Misc_Section_Visible_Caption' => 'Zeige Verschiedene Info Abschnitt',
	'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Caption' => 'Zeige "Alle ungelöschten Beitr&auml;ge" in verschiedenen Abschnitten',
	'BBUS_ViewOption_Viewer_Scalable_PR_Caption' => 'Beitrags-Skalierungs-Faktor anzeigen',
	'BBUS_ViewOption_Viewer_Scalable_TR_Caption' => 'Themen-Skalierungs-Faktor anzeigen',

	'BBUS_ViewOption_Show_All_Forums_Explain' => '',
	'BBUS_ViewOption_PCTUTUP_Column_Visible_Explain' => '',
	'BBUS_ViewOption_Misc_Section_Visible_Explain' => '',
	'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Explain' => '',
	'BBUS_ViewOption_Viewer_Scalable_PR_Explain' => '',
	'BBUS_ViewOption_Viewer_Scalable_TR_Explain' => '',

	'BBUS_Setting_SpecialGrp_Caption' => 'Spezial Zugriffs Gruppe',
	'BBUS_Setting_SpecialGrp_Explain' => 'Wähle hier die spezielle Gruppe aus, die die Forum Verwendungs-Statistiken ansehen darf.  <i>Hinweis</i>: Diese Einstellung ist nur wirkungsvoll, wenn einer \' Spezial Gruppe \' (unter Ansichts-Level Einstellung) die Ansicht per "Hacken" erlaubt wurde.',
	)
);

?>