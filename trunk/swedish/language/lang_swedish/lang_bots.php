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
	'BOTS' => 'Hantera Bots',
	'BOTS_EXPLAIN' => '"Bots", "Spiders" eller "Crawlers" �r automatiserade agenter som vanligast anv�nds av s�kmotorer f�r att uppdatera sina databaser. Eftersom de s�llan g�r en korrekt anv�ndning av sessioner kan de snedvrida bes�ks r�knare, �ka belastningen och ibland misslyckas med att indexera webbplatser korrekt. H�r kan du definiera en s�rskild typ av anv�ndare f�r att l�sa dessa problem.',
	'BOT_ACTIVATE' => 'Aktivera',
	'BOT_ACTIVE' => 'Bot aktiva',
	'BOT_ACTIVE_EXPLAIN' => 'Du kan ange om Bot �r till�ten att surfa p� webbplatsen eller inte. Om inst�llt p� Nej, kommer Bot att sparkas ut fr�n webbplatsen.',
	'BOT_ADD' => 'L�gg till Bot',
	'BOT_ADDED' => 'Ny Bot successfullt tillagd.',
	'BOT_AGENT' => 'Agent match',
	'BOT_AGENT_EXPLAIN' => 'En str�ng som matchar Bots webbl�sare agent, partiell matchning �r till�ten.',
	'BOT_COLOR' => 'Bot f�rg',
	'BOT_COLOR_EXPLAIN' => 'HTML kod som anv�nds f�r att visa Bot. Om tom kommer Bot namn att visas med hj�lp av standard Bots f�rg.',
	'BOT_DEACTIVATE' => 'Avaktivera',
	'BOT_DELETED' => 'Bot raderad successfullt.',
	'BOT_EDIT' => 'Redigera Bots',
	'BOT_EDIT_EXPLAIN' => 'H�r kan du l�gga till eller �ndra en befintlig Bot intr�de. Du kan definiera en agent str�ng och/eller en eller flera IP-adresser (eller flera adresser) f�r att matcha. Var f�rsiktig n�r man definierar matchningsalternativs agent str�ngar eller adresser. Du kan �ven ange en stil och ett spr�k som Bot ser forumet anv�nda. P� s� s�tt kan du minska bandbredden genom att anv�nda en enkel stil f�r bots. Kom ih�g att ange l�mpliga beh�righeter f�r den s�rskilda Bot anv�ndargruppen.',
	'BOT_LANG' => 'Bot spr�k',
	'BOT_LANG_EXPLAIN' => 'Spr�ket presenteras f�r Bot eftersom det bl�ddrar.',
	'BOT_LAST_VISIT' => 'Senaste bes�k',
	'BOT_IP' => 'Bot IP adress',
	'BOT_IP_EXPLAIN' => 'Partiella matchningar �r till�tna, separata adresser med kommatecken.',
	'BOT_NAME' => 'Bot namn',
	'BOT_NAME_EXPLAIN' => 'Anv�nds endast f�r din egen information.',
	'BOT_NAME_TAKEN' => 'Namnet anv�nds redan p� ditt forum och kan inte anv�ndas f�r Bot.',
	'BOT_NEVER' => 'Aldrig',
	'BOT_STYLE' => 'Bot stil',
	'BOT_STYLE_EXPLAIN' => 'Stilen som anv�nds f�r forumet av Bot.',
	'BOTS_UPDATE' => 'Uppdatera',
	'BOT_UPDATED' => 'Befintliga Bot uppdaterade successfullt.',

	'BOT_COL_NAME' => 'Namn',
	'BOT_COL_COLOR' => 'F�rg',
	'BOT_COL_AGENT' => 'Agent',
	'BOT_COL_IP' => 'IP',
	'BOT_COL_ACTIVE' => 'Aktiva',
	'BOT_COL_LAST_VISIT' => 'Senaste Bes�ket',
	'BOT_COL_COUNTER' => 'R�knare',

	'CLICK_RETURN_BOTS' => 'Klicka %sh�r%s f�r att �terg� till Bots administration',

	'ERR_BOT_ADD' => 'Du har inte fyllt i alla obligatoriska f�lt, v�nligen g� tillbaka och f�rs�k igen.',
	'ERR_BOT_AGENT_MATCHES_UA' => 'Den Bot agent du levererade liknar den som du anv�nder f�r n�rvarande. Please adjust the agent for this Bot.',
	'ERR_BOT_NO_IP' => 'De IP-adresser som du levererade var ogiltiga eller kunde v�rdnamnet inte l�sas.',
	'ERR_BOT_NO_MATCHES' => 'Du m�ste leverera minst en av en agent eller IP f�r detta Bot matchning.',

	'NO_BOTS' => 'Inga Bots definieras.',
	'NO_BOT' => 'Hittade inga Bot med det angivna ID.',
	'NO_BOT_GROUP' => 'Det g�r inte att hitta s�rskild bot grupp.',
	)
);

?>