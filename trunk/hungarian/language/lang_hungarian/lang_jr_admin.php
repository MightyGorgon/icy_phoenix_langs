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
  'Allow_Access' => 'Hozz�f�r�s elfogadva',
  'Jr_Admin' => 'Junior Admin',
  'Options' => 'Opci�k',
  'Example' => 'P�lda',
  'Version' => 'Verzi�',
  'Add_Arrow' => 'Hozz�ad ->',
  'Super_Mod' => 'Szuper Moder�tor',
  'Update' => 'Friss�t',
  'Modules' => 'Modulok',
  'Module_Info' => 'Modulinform�ci�',
  'Module_Count' => 'Modulsz�ml�l�',
  'Modules_Owned' => '(%d Modul)',
  'Updated_Permissions' => 'Felhaszn�l�i modul jogosults�gai friss�tve<br />',
  'Color_Group' => 'Csoport sz�ne',
  'Users_with_Access' => 'Jogosults�ggal rendelkez� felhaszn�l�k',
  'Users_without_Access' => 'Jogosults�ggal nem rendelkez� felhaszn�l�k',
  'Check_All' => 'Mindet kijel�l/nem-jel�l',
  'Cat_Check_All' => 'Kateg�ria: Mindet kijel�l, nem-jel�l',
  'Edit_Permissions' => 'Felhaszn�l�i jogosults�gok szerkeszt�se',
  'View_Profile' => 'Felhaszn�l�i profil megn�z�se',
  'Edit_User_Details' => 'Felhaszn�l� r�szletek szerkeszt�se',
  'Notes' => 'Notesz',
  'Allow_View' => 'Allow User To View',
  'Start_Date' => 'Els� jogosults�g megad�sa: ',
  'Update_Date' => 'Jogosults�gok utols� friss�t�se: ',
  'Edit_Modules' => 'Modulok szerkeszt�se',
  'Rank' => 'Rang',
  'Allow_PM' => 'P� enged�lyezve',
  'Allow_Avatar' => 'Avatar enged�lyezve',
  'User_Active' => 'Akt�v felhaszn�l�',
  'User_Info' => 'Felhaszn�l�i inform�ci�',
  'User_Stats' => 'Felhaszn�l�i statisztika',
  'Junior_Admin_Info' => 'A te Junior Admin Inform�ci�d',
  'Admin_Notes' => 'Adminisztr�tori Notesz',
  'Levels_Page_Desc' => 'Ezzel az oldalhoz val� hozz�f�r�st felhaszn�l� szinten tudod kezelni. A Felhaszn�l�neveket vessz�vel KELL elv�lasztanod!',
  'Permissions_Page_Desc' => 'This page allows you to change certain admin only user options and also edit their module list.<br />You may click on each table heading to apply sorting by that heading.',
  'Error_Users_Table' => 'Hiba a felhaszn�l�i t�bla lek�r�sekor.',
  'Error_Module_Table' => 'Hiba a Jr Admin modul jogosults�g t�bl�j�nak lek�r�sekor.',
  'Error_Module_ID' => 'A k�rt modul nem l�tezik, vagy nincs joga a felhaszn�l�nak azt olvasni.',
  'Disabled_Color_Groups' => 'A Csoportsz�n modult nem tal�lom, nem meghat�rozhat� a csoport sz�ne.',
  'Admin_Note' => 'Megjegyz�s: Ez a felhaszn�l� egy adminisztr�tor szint� felhaszn�l�. Minden v�ltoztat�s vagy megszor�t�s �rv�nyes�t�s�hez adminisztr�tornak kell lenned.',
  'No_Special_Ranks' => 'Nincs speci�lis rang meghat�rozva.',
  'ASCII_Search_Codes' => '48&57, 65-90',
  'ASC_Image' => 'images/asc_order.png',
  'DESC_Image' => 'images/desc_order.png',
))
?>