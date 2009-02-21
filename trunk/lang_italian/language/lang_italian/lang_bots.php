<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'BOTS' => 'Gestione bot',
	'BOTS_EXPLAIN' => '"Bots", "spiders" o "crawlers" sono agenti automatizzati usati comunemente dai motori di ricerca per aggiornare i loro database. Dal momento che raramente fanno un uso corretto delle sessioni, possono distorcere il valore del contatore visite, aumentare il carico e talvolta non riescono a indicizzare i siti correttamente. Qui potete definire un tipo speciale di utente in modo tale da ovviare a questi problemi.',
	'BOT_ACTIVATE' => 'Attiva',
	'BOT_ACTIVE' => 'Attiva bot',
	'BOT_ACTIVE_EXPLAIN' => 'Puoi specificare se il bot ha il permesso di navigare il sito. Se questo campo viene impostato su NO il bot non sar&agrave; in grado di visualizzare le pagine del sito.',
	'BOT_ADD' => 'Aggiungi bot',
	'BOT_ADDED' => 'Nuovo bot aggiunto.',
	'BOT_AGENT' => 'Agent match',
	'BOT_AGENT_EXPLAIN' => 'Stringa per confrontare l\'agent identificativo del bot; sono permesse anche corrispondenze parziali.',
	'BOT_COLOR' => 'Colore bot',
	'BOT_COLOR_EXPLAIN' => 'Codice HTML per rappresentare il bot, se il campo viene lasciato vuoto il bot verr&agrave; mostrato usando il colore standard dei bot..',
	'BOT_DEACTIVATE' => 'Disattiva',
	'BOT_DELETED' => 'Bot cancellato.',
	'BOT_EDIT' => 'Modifica bot',
	'BOT_EDIT_EXPLAIN' => 'Qui puoi aggiungere o modificare un bot esistente. Devi definire una stringa agent e/o uno o più indirizzi IP (o gamma di indirizzi) corrispondenti. Fai attenzione definendo le stringhe o gli indirizzi agent corrispondenti. Puoi anche specificare uno stile e una lingua che il bot vedrà nella board. Questo può permetterti di ridurre l\'uso di banda usando uno stile semplice per i bot. Ricorda di mettere le autorizzazioni appropriate al gruppo speciale bot.',
	'BOT_LANG' => 'Lingua del bot',
	'BOT_LANG_EXPLAIN' => 'La lingua che si presenta al bot quando fa ricerca.',
	'BOT_LAST_VISIT' => 'Ultima visita',
	'BOT_IP' => 'Indirizzo IP del bot',
	'BOT_IP_EXPLAIN' => 'Confronti parziali consentiti: separa gli indirizzi con una virgola.',
	'BOT_NAME' => 'Nome del bot',
	'BOT_NAME_EXPLAIN' => 'Utilizzato solo per tua informazione.',
	'BOT_NAME_TAKEN'  => 'Il nome è già in uso nella board e non puoi assegnarlo al bot.',
	'BOT_NEVER' => 'Mai',
	'BOT_STYLE' => 'Stile del bot',
	'BOT_STYLE_EXPLAIN' => 'Lo stile utilizzato dal bot per la board.',
	'BOTS_UPDATE' => 'Aggiorna',
	'BOT_UPDATED' => 'Bot esistente aggiornato con successo.',

	'BOT_COL_NAME' => 'Nome',
	'BOT_COL_COLOR' => 'Colore',
	'BOT_COL_AGENT' => 'Agente',
	'BOT_COL_IP' => 'IP',
	'BOT_COL_ACTIVE' => 'Attivo',
	'BOT_COL_LAST_VISIT' => 'Ultima Visita',
	'BOT_COL_COUNTER' => 'Visite',

	'CLICK_RETURN_BOTS' => 'Clicca %sQUI%s per tornare alla gestione dei bot',

	'ERR_BOT_ADD' => 'Non hai compilato tutti i campi richiesti, torna indietro e completa il modulo.',
	'ERR_BOT_AGENT_MATCHES_UA' => 'L\'agent bot che hai fornito è simile a quello che utilizzi attualmente. Per favore regola l\'agent per questo bot.',
	'ERR_BOT_NO_IP' => 'Gli indirizzi IP che hai fornito non sono validi o l\'hostname non ha potuto essere risolto.',
	'ERR_BOT_NO_MATCHES' => 'Devi fornire almeno un agent o un IP per questo bot.',

	'NO_BOTS' => 'Nessun bot definito.',
	'NO_BOT' => 'Nessun bot trovato con l\'ID specificato.',
	'NO_BOT_GROUP' => 'Impossibile trovare gruppo bot speciale.',
	)
);

?>