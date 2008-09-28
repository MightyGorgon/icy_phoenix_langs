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

$lang['None'] = 'Nessuno';
$lang['Allow_Access'] = 'Permetti l\'accesso';

$lang['Jr_Admin'] = 'Junior Admin';
$lang['Options'] = 'Opzioni';
$lang['Example'] = 'Esempio';
$lang['Version'] = 'Versione';
$lang['Add_Arrow'] = 'Aggiungi ->';
$lang['Super_Mod'] = 'Super Moderatore';
$lang['Update'] = 'Aggiorna';
$lang['Modules'] = 'Moduli';
$lang['Module_Info'] = 'Info Modulo';
$lang['Module_Count'] = 'Conteggio Moduli';
$lang['Modules_Owned'] = '(%d Moduli)';
$lang['Updated_Permissions'] = 'Permessi moduli aggiornati<br />';
$lang['Color_Group'] = 'Colore Gruppo';
$lang['Users_with_Access'] = 'Utenti con accesso';
$lang['Users_without_Access'] = 'Utenti Senza accesso';
$lang['Check_All'] = 'Seleziona / Deseleziona tutto';
$lang['Cat_Check_All'] = 'Categoria: Seleziona / Deseleziona tutto';
$lang['Edit_Permissions'] = 'Modifica permessi utente';
$lang['View_Profile'] = 'Mostra profilo utente';
$lang['Edit_User_Details'] = 'Modifica dettagli utente';
$lang['Notes'] = 'Note';
$lang['Allow_View'] = 'Consenti la visione all\'utente';
$lang['Start_Date'] = 'Permessi concessi per la prima volta il ';
$lang['Update_Date'] = 'Permessi aggiornati';
$lang['Edit_Modules'] = 'Modifica moduli';
$lang['Rank'] = 'Livello';
$lang['Allow_PM'] = 'Permetti MP';
$lang['Allow_Avatar'] = 'Permetti Avatar';
$lang['User_Active'] = 'Utente attivo';
$lang['User_Info'] = 'Info utente';
$lang['User_Stats'] = 'Statistiche utente';
$lang['Junior_Admin_Info'] = 'Informazioni su Junior Admin';
$lang['Admin_Notes'] = 'Note dell\'admin';

//Descriptions
$lang['Levels_Page_Desc'] = 'Questa pagina contiene le funzioni che vi permettono di definire il livello utenti. Selezionate un nome utente dalla lista o inseritene uno manualmente. I nomi degli utenti DEVONO essere separati da una , (virgola) in ciascuna lista!';
$lang['Permissions_Page_Desc'] = 'Questa pagina vi permette di modificare alcune opzioni dello junior admin. <br /> potete cliccare sull\'intestazione di ciascuna casella per ordinare la tabella in base all\'intestazione della colonna selezionata.';

//Errors
$lang['Error_Users_Table'] = 'Errore durante l\'interrogazione della tabella utenti.';
$lang['Error_Module_Table'] = 'Errore interrogando la tabella permessi dello junior admin.';
$lang['Error_Module_ID'] = 'Il modulo non esiste o non siete autorizzati.';
$lang['Disabled_Color_Groups'] = 'Mod Gruppi cromatici non trovato, non posso assegnare un colore al gruppo.';
$lang['Admin_Note'] = 'N.B. Questo utente &egrave; un Amministratore. Qualsiasi restrizione impostata non funzioner&agrave; sino a che non modificherete il livello di accesso come Utente invece che Amministratore.';
$lang['No_Special_Ranks'] = 'Nessun livello speciale definito.';

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
// Seperate entry areas by a ,
//
$lang['ASCII_Search_Codes'] = '48&57, 65-90';

//Images
// Don't change these unless you need to
$lang['ASC_Image'] = 'images/sort_asc.png';
$lang['DESC_Image'] = 'images/sort_desc.png';

?>