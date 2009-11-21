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

$lang = array_merge($lang, array (
  'None' => 'Nem',
  'Allow_Access' => 'Hozzáférés elfogadva',
  
  'Jr_Admin' => 'Junior Admin',
  'Options' => 'Opciók',
  'Example' => 'Példa',
  'Version' => 'Verzió',
  'Add_Arrow' => 'Hozzáad ->',
  'Super_Mod' => 'Szuper Moderátor',
  'Update' => 'Frissít',
  'Modules' => 'Modulok',
  'Module_Info' => 'Modulinformáció',
  'Module_Count' => 'Modulszámláló',
  'Modules_Owned' => '(%d Modul)',
  'Updated_Permissions' => 'Felhasználói modul jogosultságai frissítve<br />',
  'Color_Group' => 'Csoport színe',
  'Users_with_Access' => 'Jogosultsággal rendelkezõ felhasználók',
  'Users_without_Access' => 'Jogosultsággal nem rendelkezõ felhasználók',
  'Check_All' => 'Mindet kijelöl/nem-jelöl',
  'Cat_Check_All' => 'Kategória: Mindet kijelöl, nem-jelöl',
  'Edit_Permissions' => 'Felhasználói jogosultságok szerkesztése',
  'View_Profile' => 'Felhasználói profil megnézése',
  'Edit_User_Details' => 'Felhasználó részletek szerkesztése',
  'Notes' => 'Notesz',
  'Allow_View' => 'Allow User To View',
  'Start_Date' => 'Elsõ jogosultság megadása: ',
  'Update_Date' => 'Jogosultságok utolsó frissítése: ',
  'Edit_Modules' => 'Modulok szerkesztése',
  'Rank' => 'Rang',
  'Allow_PM' => 'PÜ engedélyezve',
  'Allow_Avatar' => 'Avatar engedélyezve',
  'User_Active' => 'Aktív felhasználó',
  'User_Info' => 'Felhasználói információ',
  'User_Stats' => 'Felhasználói statisztika',
  'Junior_Admin_Info' => 'A te Junior Admin Információd',
  'Admin_Notes' => 'Adminisztrátori Notesz',

//Descriptions
  'Levels_Page_Desc' => 'Ezzel az oldalhoz való hozzáférést felhasználó szinten tudod kezelni. A Felhasználóneveket vesszõvel KELL elválasztanod!',
  'Permissions_Page_Desc' => 'This page allows you to change certain admin only user options and also edit their module list.<br />You may click on each table heading to apply sorting by that heading.',

//Errors
  'Error_Users_Table' => 'Hiba a felhasználói tábla lekérésekor.',
  'Error_Module_Table' => 'Hiba a Jr Admin modul jogosultság táblájának lekérésekor.',
  'Error_Module_ID' => 'A kért modul nem létezik, vagy nincs joga a felhasználónak azt olvasni.',
  'Disabled_Color_Groups' => 'A Csoportszín modult nem találom, nem meghatározható a csoport színe.',
  'Admin_Note' => 'Megjegyzés: Ez a felhasználó egy adminisztrátor szintû felhasználó. Minden változtatás vagy megszorítás érvényesítéséhez adminisztrátornak kell lenned.',
  'No_Special_Ranks' => 'Nincs speciális rang meghatározva.',

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
  'ASC_Image' => 'images/asc_order.png',
  'DESC_Image' => 'images/desc_order.png',
  )
);

?>