<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_jr_admin.php 61 2008-10-30 09:25:26Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Nivisec.com (support@nivisec.com)
* Lopalong
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
	'None' => 'Ingen',
	'Allow_Access' => 'Tillåt Access',

	'Jr_Admin' => 'Junior Admin',
	'Options' => 'Alternativ',
	'Example' => 'Exempel',
	'Version' => 'Version',
	'Add_Arrow' => 'Lägg till ->',
	'Super_Mod' => 'Super moderator',
	'Update' => 'Uppdatera',
	'Modules' => 'Moduler',
	'Module_Info' => 'Modul info',
	'Module_Count' => 'Modul räkning',
	'Modules_Owned' => '(%d Moduler)',
	'Updated_Permissions' => 'Uppdaterad användar modul rättigheter<br />',
	'Color_Group' => 'Färg grupp',
	'Users_with_Access' => 'Användare med åtkomst',
	'Users_without_Access' => 'Användare utan åtkomst',
	'Check_All' => 'Välj / Avmarkera alla',
	'Cat_Check_All' => 'Kategori: Välj / Avmarkera alla',
	'Edit_Permissions' => 'Redigera användar behörigheter',
	'View_Profile' => 'Granska användar profil',
	'Edit_User_Details' => 'Redigera användar detaljer',
	'Notes' => 'Notering',
	'Allow_View' => 'Tillåt användare att granska',
	'Start_Date' => 'Behörigheter först utfärdad på',
	'Update_Date' => 'Behörigheter senast uppdaterad på',
	'Edit_Modules' => 'Redigera moduler',
	'Rank' => 'Rank',
	'Allow_PM' => 'Tillåt PM',
	'Allow_Avatar' => 'Tillåt avatar',
	'User_Active' => 'Användare aktiva',
	'User_Info' => 'Användar info',
	'User_Stats' => 'Användar statistik',
	'Junior_Admin_Info' => 'Din junior admin info',
	'Admin_Notes' => 'Admin Notering',

//Descriptions
	'Levels_Page_Desc' => 'Den här sidan tillåter dig att definiera användarnivåer.  Välj ett användarnamn från listan för att lägga till eller skriv in det manuellt. Användarnamn MÅSTE vara åtskilda av ett , (komma) på varje lista!',
	'Permissions_Page_Desc' => 'Ändra vissa admin, bara användaralternativ men även redigera deras modul lista.<br />Du kan klicka på varje tabell rubrik för att tillämpa sortering av denna rubrik.',

//Errors
	'Error_Users_Table' => 'Error querying användarnas tabell.',
	'Error_Module_Table' => 'Error querying Jr Admin modul rättighets tabell.',
	'Error_Module_ID' => 'Den begärda modulen finns inte eller är du inte en behörig användare.',
	'Disabled_Color_Groups' => 'Färg gruppers mod hittades inte, omöjligt att tilldela en färg grupp.',
	'Admin_Note' => 'Notis:  Denna användare är klassificerat som en Administratör Nivå Användare.  Eventuella restriktioner som här inte kommer att fungera tills du ändrar deras tillgång till Användare i stället för Administratär.',
	'No_Special_Ranks' => 'Inga särskilda rankningar definierade.',

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