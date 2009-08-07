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
	'Allow_Access' => 'Till�t Access',

	'Jr_Admin' => 'Junior Admin',
	'Options' => 'Alternativ',
	'Example' => 'Exempel',
	'Version' => 'Version',
	'Add_Arrow' => 'L�gg Till ->',
	'Super_Mod' => 'Super Moderator',
	'Update' => 'Uppdatera',
	'Modules' => 'Moduler',
	'Module_Info' => 'Modul Info',
	'Module_Count' => 'Modul R�kning',
	'Modules_Owned' => '(%d Moduler)',
	'Updated_Permissions' => 'Uppdaterad Anv�ndar Modul R�ttigheter<br />',
	'Color_Group' => 'F�rg Grupp',
	'Users_with_Access' => 'Anv�ndare Med �tkomst',
	'Users_without_Access' => 'Anv�ndare Utan �tkomst',
	'Check_All' => 'V�lj / Avmarkera Alla',
	'Cat_Check_All' => 'Kategori: V�lj / Avmarkera Alla',
	'Edit_Permissions' => 'Redigera Anv�ndar Beh�righeter',
	'View_Profile' => 'Granska Anv�ndar Profil',
	'Edit_User_Details' => 'Redigera Anv�ndar Detaljer',
	'Notes' => 'Notering',
	'Allow_View' => 'Till�t Anv�ndare Att Granska',
	'Start_Date' => 'Beh�righeter F�rst Utf�rdad P�',
	'Update_Date' => 'Beh�righeter Senast Uppdaterad P�',
	'Edit_Modules' => 'Redigera Moduler',
	'Rank' => 'Rank',
	'Allow_PM' => 'Till�t PM',
	'Allow_Avatar' => 'Till�t Avatar',
	'User_Active' => 'Anv�ndare Aktiva',
	'User_Info' => 'Anv�ndar Info',
	'User_Stats' => 'Anv�ndar Statistik',
	'Junior_Admin_Info' => 'Din Junior Admin Info',
	'Admin_Notes' => 'Admin Notering',

//Descriptions
	'Levels_Page_Desc' => 'Den h�r sidan till�ter dig att definiera anv�ndarniv�er.  V�lj ett anv�ndarnamn fr�n listan f�r att l�gga till eller skriv in det manuellt. Anv�ndarnamn M�STE vara �tskilda av ett , (komma) p� varje lista!',
	'Permissions_Page_Desc' => '�ndra vissa admin, bara anv�ndaralternativ men �ven redigera deras modul lista.<br />Du kan klicka p� varje tabell rubrik f�r att till�mpa sortering av denna rubrik.',

//Errors
	'Error_Users_Table' => 'Error querying anv�ndarnas tabell.',
	'Error_Module_Table' => 'Error querying Jr Admin modul r�ttighets tabell.',
	'Error_Module_ID' => 'Den beg�rda modulen finns inte eller �r du inte en beh�rig anv�ndare.',
	'Disabled_Color_Groups' => 'F�rg Gruppers Mod hittades inte, om�jligt att tilldela en f�rg grupp.',
	'Admin_Note' => 'Notis:  Denna anv�ndare �r klassificerat som en Administrat�r Niv� Anv�ndare.  Eventuella restriktioner som h�r inte kommer att fungera tills du �ndrar deras tillg�ng till Anv�ndare i st�llet f�r Administrat�r.',
	'No_Special_Ranks' => 'Inga s�rskilda rankningar definierade.',

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