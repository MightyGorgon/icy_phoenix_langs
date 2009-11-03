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
* Ptirhiik (admin@rpgnet-fr.com)
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

$lang['Lang_extend_lang_extend'] = 'Estensione dei file lingua';
$lang['Lang_extend__custom'] = 'File di lingua personalizzato';
$lang['Lang_extend__phpBB'] = 'File di lingua di Icy Phoenix';

$lang['Languages'] = 'Lingue';
$lang['Lang_management'] = 'Gestione';
$lang['Lang_extend'] = 'Gestione estesa dei file di lingua';
$lang['Lang_extend_explain'] = 'In questa sezione puoi modificare o aggiungere chiavi di lingua';
$lang['Lang_extend_pack'] = 'Pacchetto file di lingua';
//$lang['Lang_extend_pack_explain'] = 'Questo &egrave; il nome del pacchetto, generalmente coincide con il nome del MOD a cui fa riferimento';
$lang['Lang_extend_pack_explain'] = 'Nome del pacchetto';

$lang['Lang_extend_entry'] = 'Chiave di lingua';
$lang['Lang_extend_entries'] = 'Chiavi di lingua';
$lang['Lang_extend_level_edit'] = 'Modifica';
$lang['Lang_extend_level_admin'] = 'Amministrazione';
$lang['Lang_extend_level_normal'] = 'Normale';

$lang['Lang_extend_add_entry'] = 'Aggiungi una nuova chiave di lingua';

$lang['Lang_extend_key_main'] = 'Voce principale della lingua';
$lang['Lang_extend_key_main_explain'] = 'Questa &egrave; la chiave primaria di lingua, in genere l\'unica';
$lang['Lang_extend_key_sub'] = 'Voce secondaria di lingua';
$lang['Lang_extend_key_sub_explain'] = 'Chiave di secondo livello, solitamente non usata';
$lang['Lang_extend_level'] = 'Livello chiave di lingua';
$lang['Lang_extend_level_explain'] = 'Il livello Amministrazione pu&ograve; essere utilizzato solo in ACP. Il livello normale pu&ograve; essere usato ovunque.';

$lang['Lang_extend_missing_value'] = ' devi specificare almeno il valore per l\'inglese';
$lang['Lang_extend_key_missing'] = 'Chiave principale mancante';
$lang['Lang_extend_duplicate_entry'] = 'Questa chiave risulta gi&agrave; utilizzata in un altro pacchetto (pack %)';

$lang['Lang_extend_update_done'] = 'La chiave &egrave; stata inserita correttamente.<br /><br />Clicca %sQui%s per ritornare alla chiave.<br /><br />Clicca %sQui%s per ritornare all\'elenco delle voci.';
$lang['Lang_extend_delete_done'] = 'La chiave &egrave; stata rimossa .<br />Ricorda che solo le chiavi personalizzate verranno rimosse. Quelle principali continueranno ad esistere.<br /><br />Clicca %sQUI%s per ritornare all\'elenco delle voci';

$lang['Lang_extend_search'] = 'Ricerca nelle chiavi di lingua';
$lang['Lang_extend_search_words'] = 'Parole da cercare';
$lang['Lang_extend_search_words_explain'] = 'separa le parole con uno spazio';
$lang['Lang_extend_search_all'] = 'Tutte le parole';
$lang['Lang_extend_search_one'] = 'Una di queste';
$lang['Lang_extend_search_in'] = 'Cerca in';
$lang['Lang_extend_search_in_explain'] = 'specifica dove cercare';
$lang['Lang_extend_search_in_key'] = 'chiavi';
$lang['Lang_extend_search_in_value'] = 'valori';
$lang['Lang_extend_search_in_both'] = 'entrambi';
$lang['Lang_extend_search_all_lang'] = 'Tutte le lingue installate';

$lang['Lang_extend_search_no_words'] = 'Non hai specificato le parole da cercare.<br /><br />Clicca %sQUI%s per ritornare all\'elenco dei pacchetti di lingua.';
$lang['Lang_extend_search_results'] = 'Risultati della ricerca';
$lang['Lang_extend_value'] = 'Valore';
$lang['Lang_extend_level_leg'] = 'Livello';

$lang['Lang_extend_added_modified'] = '*';
$lang['Lang_extend_modified'] = 'Modificato';
$lang['Lang_extend_added'] = 'Aggiunto';

?>