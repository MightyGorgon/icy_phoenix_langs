<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin.php 110 2009-07-14 08:09:47Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
*
*/

/**
*
* @Extra credits for this file
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
  'Levels_Page_Desc' => 'Ezzel az oldalhoz való hozzáférést felhasználó szinten tudod kezelni. A Felhasználóneveket vesszõvel KELL elválasztanod!',
  'Permissions_Page_Desc' => 'This page allows you to change certain admin only user options and also edit their module list.<br />You may click on each table heading to apply sorting by that heading.',
  'Error_Users_Table' => 'Hiba a felhasználói tábla lekérésekor.',
  'Error_Module_Table' => 'Hiba a Jr Admin modul jogosultság táblájának lekérésekor.',
  'Error_Module_ID' => 'A kért modul nem létezik, vagy nincs joga a felhasználónak azt olvasni.',
  'Disabled_Color_Groups' => 'A Csoportszín modult nem találom, nem meghatározható a csoport színe.',
  'Admin_Note' => 'Megjegyzés: Ez a felhasználó egy adminisztrátor szintû felhasználó. Minden változtatás vagy megszorítás érvényesítéséhez adminisztrátornak kell lenned.',
  'No_Special_Ranks' => 'Nincs speciális rang meghatározva.',
  'ASCII_Search_Codes' => '48&57, 65-90',
  'ASC_Image' => 'images/asc_order.png',
  'DESC_Image' => 'images/desc_order.png',
))
?>