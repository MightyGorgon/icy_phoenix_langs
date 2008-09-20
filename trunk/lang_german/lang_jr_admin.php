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
* TheSteffen, KugeLSichA, Tom
*
*/

$lang['None'] = 'Keine';
$lang['Allow_Access'] = 'Zugriff gestatten';

$lang['Jr_Admin'] = 'Junior Admin';
$lang['Options'] = 'Optionen';
$lang['Example'] = 'Beispiel';
$lang['Version'] = 'Version';
$lang['Add_Arrow'] = 'Hinzufügen ->';
$lang['Super_Mod'] = 'Super Moderator';
$lang['Update'] = 'Aktualisieren';
$lang['Modules'] = 'Module';
$lang['Module_Info'] = 'Modul Info';
$lang['Module_Count'] = 'Modul Zähler';
$lang['Modules_Owned'] = '(%d Module)';
$lang['Updated_Permissions'] = 'Benutzermodulberechtigungen aktualisiert<br />';
$lang['Color_Group'] = 'Farbige Gruppe';
$lang['Users_with_Access'] = 'Benutzer mit Zugriff';
$lang['Users_without_Access'] = 'Benutzer ohne Zugriff';
$lang['Check_All'] = 'Alle Auswählen/Abwählen';
$lang['Cat_Check_All'] = 'Kategorie: Auswählen, alle abwählen';
$lang['Edit_Permissions'] = 'Benutzerberechtigungen bearbeiten';
$lang['View_Profile'] = 'Benutzerprofil anzeigen';
$lang['Edit_User_Details'] = 'Benutzerdetails bearbeiten';
$lang['Notes'] = 'Notizen';
$lang['Allow_View'] = 'Benutzern die Ansicht gestatten';
$lang['Start_Date'] = 'Berechtigungen erstmals gewährt am';
$lang['Update_Date'] = 'Berechtigungen zuletzt aktualisiert am';
$lang['Edit_Modules'] = 'Module bearbeiten';
$lang['Rank'] = 'Rang';
$lang['Allow_PM'] = 'PN erlauben';
$lang['Allow_Avatar'] = 'Avatar erlauben';
$lang['User_Active'] = 'Benutzer aktiv';
$lang['User_Info'] = 'Benutzer Info';
$lang['User_Stats'] = 'Benutzer Statistiken';
$lang['Junior_Admin_Info'] = 'Deine Junior Admin Info';
$lang['Admin_Notes'] = 'Admin Notizen';

//Descriptions
$lang['Levels_Page_Desc'] = 'Diese Seite erlaubt es dir, Benutzerlevel zu definieren.  Wähle einen Benutzernamen aus der Liste oder gib den Benutzernamen ein.  Benutzernamen müssen auf jeder Liste mit einem , (Komma) getrennt werden!';
$lang['Permissions_Page_Desc'] = 'Diese Seite erlaubt es dir, einem Benutzer Zugriff auf bestimmte Admin-Module zu geben.<br />Klicke im Tabellenkopf auf den Spaltentitel um die Einträge nach dieser Spalte zu sortieren.';

//Errors
$lang['Error_Users_Table'] = 'Fehler beim Abfragen der Benutzertabelle.';
$lang['Error_Module_Table'] = 'Fehler beim Abfragen der Jr. Admin Modul-Bereichtigungstabelle.';
$lang['Error_Module_ID'] = 'Das angeforderte Modul existiert nicht, oder du bist kein autorisierter Nutzer.';
$lang['Disabled_Color_Groups'] = 'Farbige Gruppen Mod nicht gefunden, Farbgruppenzuweisung nicht möglich.';
$lang['Admin_Note'] = 'Hinweis:  Dieser Benutzer hat volle Administrator Rechte. Alle Restriktionen die du hier einstellst, werden nicht wirksam, bis du den Benutzerlevel für diesen Benutzer von Administrator auf Normaler Benutzer änderst.';
$lang['No_Special_Ranks'] = 'Keine Spezialränge definiert.';

//This is the bookmark ASCII search list!  If you have odd usernames, you should add your own ASCII search numbers.
//It uses a special format.
//
// Smaller-case letters are ignored also.  Don't bother listing them as everything is converted to upper case for eval.
//
// It searches and prepares the bookmark heading IN THE ORDER you have it below.  It will not sort lowest to highest.
//
// Item-Item2 will search the code from item to item2 AND give each their own bookmark heading (ex. A-Z)
// Item&Item2 will search the code from item to item2 BUT NOT give each their own heading, they will appear like 1-9
// You can add single entries, ie 67
// Separate entry areas by a ,
//
$lang['ASCII_Search_Codes'] = '48&57, 65-90';

//Images
// Don't change these unless you need to
$lang['ASC_Image'] = 'images/asc_order.png';
$lang['DESC_Image'] = 'images/desc_order.png';

?>