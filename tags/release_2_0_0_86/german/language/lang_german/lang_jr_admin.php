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
* Nivisec.com (support@nivisec.com)
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
	'None' => 'Keine',
	'Allow_Access' => 'Zugriff gestatten',

	'Jr_Admin' => 'Junior Admin',
	'Options' => 'Optionen',
	'Example' => 'Beispiel',
	'Version' => 'Version',
	'Add_Arrow' => 'Hinzufügen ->',
	'Super_Mod' => 'Super Moderator',
	'Update' => 'Aktualisieren',
	'Modules' => 'Module',
	'Module_Info' => 'Modul Info',
	'Module_Count' => 'Modul Zähler',
	'Modules_Owned' => '(%d Module)',
	'Updated_Permissions' => 'Benutzermodulberechtigungen aktualisiert<br />',
	'Color_Group' => 'Farbige Gruppe',
	'Users_with_Access' => 'Benutzer mit Zugriff',
	'Users_without_Access' => 'Benutzer ohne Zugriff',
	'Check_All' => 'Alle Auswählen/Abwählen',
	'Cat_Check_All' => 'Kategorie: Auswählen, alle abwählen',
	'Edit_Permissions' => 'Benutzerberechtigungen bearbeiten',
	'View_Profile' => 'Benutzerprofil anzeigen',
	'Edit_User_Details' => 'Benutzerdetails bearbeiten',
	'Notes' => 'Notizen',
	'Allow_View' => 'Benutzern die Ansicht gestatten',
	'Start_Date' => 'Berechtigungen erstmals gewährt am',
	'Update_Date' => 'Berechtigungen zuletzt aktualisiert am',
	'Edit_Modules' => 'Module bearbeiten',
	'Rank' => 'Rang',
	'Allow_PM' => 'PN erlauben',
	'Allow_Avatar' => 'Avatar erlauben',
	'User_Active' => 'Benutzer aktiv',
	'User_Info' => 'Benutzer Info',
	'User_Stats' => 'Benutzer Statistiken',
	'Junior_Admin_Info' => 'Deine Junior Admin Info',
	'Admin_Notes' => 'Admin Notizen',

//Descriptions
	'Levels_Page_Desc' => 'Diese Seite erlaubt es dir, Benutzerlevel zu definieren.  Wähle einen Benutzernamen aus der Liste oder gib den Benutzernamen ein.  Benutzernamen müssen auf jeder Liste mit einem , (Komma) getrennt werden!',
	'Permissions_Page_Desc' => 'Diese Seite erlaubt es dir, einem Benutzer Zugriff auf bestimmte Admin-Module zu geben.<br />Klicke im Tabellenkopf auf den Spaltentitel um die Einträge nach dieser Spalte zu sortieren.',

//Errors
	'Error_Users_Table' => 'Fehler beim Abfragen der Benutzertabelle.',
	'Error_Module_Table' => 'Fehler beim Abfragen der Jr. Admin Modul-Bereichtigungstabelle.',
	'Error_Module_ID' => 'Das angeforderte Modul existiert nicht, oder du bist kein autorisierter Nutzer.',
	'Disabled_Color_Groups' => 'Farbige Gruppen Mod nicht gefunden, Farbgruppenzuweisung nicht möglich.',
	'Admin_Note' => 'Hinweis:  Dieser Benutzer hat volle Administrator Rechte. Alle Restriktionen die du hier einstellst, werden nicht wirksam, bis du den Benutzerlevel für diesen Benutzer von Administrator auf Normaler Benutzer änderst.',
	'No_Special_Ranks' => 'Keine Spezialränge definiert.',

//This is the bookmark ASCII search list!  If you have odd usernames, you should add your own ASCII search numbers.
//It uses a special format.
// Smaller-case letters are ignored also.  Don't bother listing them as everything is converted to upper case for eval.
// It searches and prepares the bookmark heading IN THE ORDER you have it below.  It will not sort lowest to highest.
//
// Item-Item2 will search the code from item to item2 AND give each their own bookmark heading (ex. A-Z)
// Item&Item2 will search the code from item to item2 BUT NOT give each their own heading, they will appear like 1-9
// You can add single entries, ie 67
// Separate entry areas by a ,
//
	'ASCII_Search_Codes' => '48&57, 65-90',

//Images
// Don't change these unless you need to
	'ASC_Image' => 'images/sort_asc.png',
	'DESC_Image' => 'images/sort_desc.png',
	)
);

?>