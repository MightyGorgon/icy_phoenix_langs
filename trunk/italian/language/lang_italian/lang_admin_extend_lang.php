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

$lang = array_merge($lang, array(
	'Lang_extend_lang_extend' => 'Estensione dei file lingua',
	'Lang_extend__custom' => 'File di lingua personalizzato',
	'Lang_extend__phpBB' => 'File di lingua di Icy Phoenix',

	'Languages' => 'Lingue',
	'Lang_management' => 'Gestione',
	'Lang_extend' => 'Gestione estesa dei file di lingua',
	'Lang_extend_explain' => 'In questa sezione puoi modificare o aggiungere chiavi di lingua',
	'Lang_extend_pack' => 'Pacchetto file di lingua',
	'Lang_extend_pack_explain' => 'Nome del pacchetto',

	'Lang_extend_entry' => 'Chiave di lingua',
	'Lang_extend_entries' => 'Chiavi di lingua',
	'Lang_extend_level_edit' => 'Modifica',
	'Lang_extend_level_admin' => 'Amministrazione',
	'Lang_extend_level_normal' => 'Normale',

	'Lang_extend_add_entry' => 'Aggiungi una nuova chiave di lingua',

	'Lang_extend_key_main' => 'Voce principale della lingua',
	'Lang_extend_key_main_explain' => 'Questa &egrave; la chiave primaria di lingua, in genere l\'unica',
	'Lang_extend_key_sub' => 'Voce secondaria di lingua',
	'Lang_extend_key_sub_explain' => 'Chiave di secondo livello, solitamente non usata',
	'Lang_extend_level' => 'Livello chiave di lingua',
	'Lang_extend_level_explain' => 'Il livello Amministrazione pu&ograve; essere utilizzato solo in ACP. Il livello normale pu&ograve; essere usato ovunque.',

	'Lang_extend_missing_value' => ' devi specificare almeno il valore per l\'inglese',
	'Lang_extend_key_missing' => 'Chiave principale mancante',
	'Lang_extend_duplicate_entry' => 'Questa chiave risulta gi&agrave; utilizzata in un altro pacchetto (pack %)',

	'Lang_extend_update_done' => 'La chiave &egrave; stata inserita correttamente.<br /><br />Clicca %sQui%s per ritornare alla chiave.<br /><br />Clicca %sQui%s per ritornare all\'elenco delle voci.',
	'Lang_extend_delete_done' => 'La chiave &egrave; stata rimossa .<br />Ricorda che solo le chiavi personalizzate verranno rimosse. Quelle principali continueranno ad esistere.<br /><br />Clicca %sQUI%s per ritornare all\'elenco delle voci',

	'Lang_extend_search' => 'Ricerca nelle chiavi di lingua',
	'Lang_extend_search_words' => 'Parole da cercare',
	'Lang_extend_search_words_explain' => 'separa le parole con uno spazio',
	'Lang_extend_search_all' => 'Tutte le parole',
	'Lang_extend_search_one' => 'Una di queste',
	'Lang_extend_search_in' => 'Cerca in',
	'Lang_extend_search_in_explain' => 'specifica dove cercare',
	'Lang_extend_search_in_key' => 'chiavi',
	'Lang_extend_search_in_value' => 'valori',
	'Lang_extend_search_in_both' => 'entrambi',
	'Lang_extend_search_all_lang' => 'Tutte le lingue installate',

	'Lang_extend_search_no_words' => 'Non hai specificato le parole da cercare.<br /><br />Clicca %sQUI%s per ritornare all\'elenco dei pacchetti di lingua.',
	'Lang_extend_search_results' => 'Risultati della ricerca',
	'Lang_extend_value' => 'Valore',
	'Lang_extend_level_leg' => 'Livello',

	'Lang_extend_added_modified' => '*',
	'Lang_extend_modified' => 'Modificato',
	'Lang_extend_added' => 'Aggiunto',
	)
);

?>