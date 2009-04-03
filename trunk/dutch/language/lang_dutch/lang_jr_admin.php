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
	'None' => 'Geen',
	'Allow_Access' => 'Toegang toestaan',
	
	'Jr_Admin' => 'Juniorbeheerder',
	'Options' => 'Opties',
	'Example' => 'Voorbeeld',
	'Version' => 'Versie',
	'Add_Arrow' => 'Toevoegen ->',
	'Super_Mod' => 'Hoofdmoderator',
	'Update' => 'Bijwerken',
	'Modules' => 'Modules',
	'Module_Info' => 'Moduleinfo',
	'Module_Count' => 'Moduleaantal',
	'Modules_Owned' => '(%d modules)',
	'Updated_Permissions' => 'Bijgewerkte gebruikersmodulepermissies<br />',
	'Color_Group' => 'Kleurgroep',
	'Users_with_Access' => 'Gebruikers met toegang',
	'Users_without_Access' => 'Gebruikers zonder toegang',
	'Check_All' => 'Selecteer/Deselecteer alles',
	'Cat_Check_All' => 'Categorie: Selecteer, deselecteer alles',
	'Edit_Permissions' => 'Bewerk gebruikerpermissies',
	'View_Profile' => 'Bekijk gebruikersprofiel',
	'Edit_User_Details' => 'Bewerk gebruikersdetails',
	'Notes' => 'Notities',
	'Allow_View' => 'Gebruiker toestaan om te bekijken',
	'Start_Date' => 'Permissies eerst gegeven op',
	'Update_Date' => 'Permissies laatst bijgewerkt op',
	'Edit_Modules' => 'Bewerk modules',
	'Rank' => 'Rang',
	'Allow_PM' => 'PB toestaan',
	'Allow_Avatar' => 'Avatar toestaan',
	'User_Active' => 'Gebruiker actief',
	'User_Info' => 'Gebruikersinfo',
	'User_Stats' => 'Gebruikersstatistieken',
	'Junior_Admin_Info' => 'Jouw juniorbeheerderinfo',
	'Admin_Notes' => 'Beheerdersnotities',

//Descriptions
	'Levels_Page_Desc' => 'Deze pagina geeft de mogelijkheid om gebruikersniveaus te definieren. Kies gebruikersnamen uit de lijst of geef zelf gebruikersnamen op. Gebruikersnamen moeten gescheiden worden met een , (komma)!',
	'Permissions_Page_Desc' => 'Deze pagina geeft de mogelijkheid een gebruiker toegang tot een beheerdermodule te geven.<br />Je kan op elke tabelopschrift klikken om daarop te sorteren.',

//Errors
	'Error_Users_Table' => 'Fout bij het opvragen van de gebruikerstabel.',
	'Error_Module_Table' => 'Fout bij het opvragen van de Juniorbeheerder modulepermissiestabel.',
	'Error_Module_ID' => 'De opgevraagde module bestaat niet of je bent niet bevoegd.',
	'Disabled_Color_Groups' => 'Kleurgroepen niet gevonden, kleurgroeptoewijzing is niet mogelijk.',
	'Admin_Note' => 'Notitie: Deze gebruiker heeft de volledige beheerdersrechten. Alle restricties die je hier instelt zijn niet werkzaam totdat je de gebruikersniveau van de gebruiker van beheerder naar normale gebruiker veranderd.',
	'No_Special_Ranks' => 'Er is geen speciale rang gedefinieerd.',

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