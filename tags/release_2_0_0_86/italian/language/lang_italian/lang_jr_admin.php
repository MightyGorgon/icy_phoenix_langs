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
* Antonio Mercurio (roland@phpbbplus.it) www.phpbbplus.it
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
	'None' => 'Nessuno',
	'Allow_Access' => 'Permetti l\'accesso',

	'Jr_Admin' => 'Junior Admin',
	'Options' => 'Opzioni',
	'Example' => 'Esempio',
	'Version' => 'Versione',
	'Add_Arrow' => 'Aggiungi ->',
	'Super_Mod' => 'Super Moderatore',
	'Update' => 'Aggiorna',
	'Modules' => 'Moduli',
	'Module_Info' => 'Info Modulo',
	'Module_Count' => 'Conteggio Moduli',
	'Modules_Owned' => '(%d Moduli)',
	'Updated_Permissions' => 'Permessi moduli aggiornati<br />',
	'Color_Group' => 'Colore Gruppo',
	'Users_with_Access' => 'Utenti con accesso',
	'Users_without_Access' => 'Utenti Senza accesso',
	'Check_All' => 'Seleziona / Deseleziona tutto',
	'Cat_Check_All' => 'Categoria: Seleziona / Deseleziona tutto',
	'Edit_Permissions' => 'Modifica permessi utente',
	'View_Profile' => 'Mostra profilo utente',
	'Edit_User_Details' => 'Modifica dettagli utente',
	'Notes' => 'Note',
	'Allow_View' => 'Consenti la visione all\'utente',
	'Start_Date' => 'Permessi concessi per la prima volta il ',
	'Update_Date' => 'Permessi aggiornati',
	'Edit_Modules' => 'Modifica moduli',
	'Rank' => 'Livello',
	'Allow_PM' => 'Permetti MP',
	'Allow_Avatar' => 'Permetti Avatar',
	'User_Active' => 'Utente attivo',
	'User_Info' => 'Info utente',
	'User_Stats' => 'Statistiche utente',
	'Junior_Admin_Info' => 'Informazioni su Junior Admin',
	'Admin_Notes' => 'Note dell\'admin',

	//Descriptions
	'Levels_Page_Desc' => 'Questa pagina contiene le funzioni che vi permettono di definire il livello utenti. Selezionate un nome utente dalla lista o inseritene uno manualmente. I nomi degli utenti DEVONO essere separati da una , (virgola) in ciascuna lista!',
	'Permissions_Page_Desc' => 'Questa pagina vi permette di modificare alcune opzioni dello junior admin. <br /> potete cliccare sull\'intestazione di ciascuna casella per ordinare la tabella in base all\'intestazione della colonna selezionata.',

	//Errors
	'Error_Users_Table' => 'Errore durante l\'interrogazione della tabella utenti.',
	'Error_Module_Table' => 'Errore interrogando la tabella permessi dello junior admin.',
	'Error_Module_ID' => 'Il modulo non esiste o non siete autorizzati.',
	'Disabled_Color_Groups' => 'Mod Gruppi cromatici non trovato, non posso assegnare un colore al gruppo.',
	'Admin_Note' => 'N.B. Questo utente &egrave; un Amministratore. Qualsiasi restrizione impostata non funzioner&agrave; sino a che non modificherete il livello di accesso come Utente invece che Amministratore.',
	'No_Special_Ranks' => 'Nessun livello speciale definito.',

	//This is the bookmark ASCII search list!  If you have odd usernames, you should add your own ASCII search numbers.
	//It uses a special format.
	// Smaller-case letters are ignored also.  Don't bother listing them as everything is converted to upper case for eval.
	// It searches and prepares the bookmark heading IN THE ORDER you have it below.  It will not sort lowest to highest.
	//
	// Item-Item2 will search the code from item to item2 AND give each their own bookmark heading (ex. A-Z)
	// Item&Item2 will search the code from item to item2 BUT NOT give each their own heading, they will appear like 1-9
	// You can add single entries, ie 67
	// Seperate entry areas by a ,
	//
	'ASCII_Search_Codes' => '48&57, 65-90',

	//Images
	// Don't change these unless you need to
	'ASC_Image' => 'images/sort_asc.png',
	'DESC_Image' => 'images/sort_desc.png',
	)
);

?>