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
	'BOTS_EXPLAIN' => '"Bots", "Spiders" eller "Crawlers" är automatiserade agenter som vanligast används av sökmotorer för att uppdatera sina databaser. Eftersom de sällan gör en korrekt användning av sessioner kan de snedvrida besöks räknare, öka belastningen och ibland misslyckas med att indexera webbplatser korrekt. Här kan du definiera en särskild typ av användare för att lösa dessa problem.',
	'BOT_ACTIVATE' => 'Aktivera',
	'BOT_ACTIVE' => 'Bot aktiva',
	'BOT_ACTIVE_EXPLAIN' => 'Du kan ange om Bot är tillåten att surfa på webbplatsen eller inte. Om inställt på Nej, kommer Bot att sparkas ut från webbplatsen.',
	'BOT_ADD' => 'Lägg till Bot',
	'BOT_ADDED' => 'Ny Bot successfullt tillagd.',
	'BOT_AGENT' => 'Agent match',
	'BOT_AGENT_EXPLAIN' => 'En sträng som matchar Bots webbläsare agent, partiell matchning är tillåten.',
	'BOT_COLOR' => 'Bot färg',
	'BOT_COLOR_EXPLAIN' => 'HTML kod som används för att visa Bot. Om tom kommer Bot namn att visas med hjälp av standard Bots färg.',
	'BOT_DEACTIVATE' => 'Avaktivera',
	'BOT_DELETED' => 'Bot raderad successfullt.',
	'BOT_EDIT' => 'Redigera Bots',
	'BOT_EDIT_EXPLAIN' => 'Här kan du lägga till eller ändra en befintlig Bot inträde. Du kan definiera en agent sträng och/eller en eller flera IP-adresser (eller flera adresser) för att matcha. Var försiktig när man definierar matchningsalternativs agent strängar eller adresser. Du kan även ange en stil och ett språk som Bot ser forumet använda. På så sätt kan du minska bandbredden genom att använda en enkel stil för bots. Kom ihåg att ange lämpliga behörigheter för den särskilda Bot användargruppen.',
	'BOT_LANG' => 'Bot språk',
	'BOT_LANG_EXPLAIN' => 'Språket presenteras för Bot eftersom det bläddrar.',
	'BOT_LAST_VISIT' => 'Senaste besök',
	'BOT_IP' => 'Bot IP adress',
	'BOT_IP_EXPLAIN' => 'Partiella matchningar är tillåtna, separata adresser med kommatecken.',
	'BOT_NAME' => 'Bot namn',
	'BOT_NAME_EXPLAIN' => 'Används endast för din egen information.',
	'BOT_NAME_TAKEN' => 'Namnet används redan på ditt forum och kan inte användas för Bot.',
	'BOT_NEVER' => 'Aldrig',
	'BOT_STYLE' => 'Bot stil',
	'BOT_STYLE_EXPLAIN' => 'Stilen som används för forumet av Bot.',
	'BOTS_UPDATE' => 'Uppdatera',
	'BOT_UPDATED' => 'Befintliga Bot uppdaterade successfullt.',

	'BOT_COL_NAME' => 'Namn',
	'BOT_COL_COLOR' => 'Färg',
	'BOT_COL_AGENT' => 'Agent',
	'BOT_COL_IP' => 'IP',
	'BOT_COL_ACTIVE' => 'Aktiva',
	'BOT_COL_LAST_VISIT' => 'Senaste Besöket',
	'BOT_COL_COUNTER' => 'Räknare',

	'CLICK_RETURN_BOTS' => 'Klicka %shär%s för att återgå till Bots administration',

	'ERR_BOT_ADD' => 'Du har inte fyllt i alla obligatoriska fält, vänligen gå tillbaka och försök igen.',
	'ERR_BOT_AGENT_MATCHES_UA' => 'Den Bot agent du levererade liknar den som du använder för närvarande. Please adjust the agent for this Bot.',
	'ERR_BOT_NO_IP' => 'De IP-adresser som du levererade var ogiltiga eller kunde värdnamnet inte lösas.',
	'ERR_BOT_NO_MATCHES' => 'Du måste leverera minst en av en agent eller IP för detta Bot matchning.',

	'NO_BOTS' => 'Inga Bots definieras.',
	'NO_BOT' => 'Hittade inga Bot med det angivna ID.',
	'NO_BOT_GROUP' => 'Det går inte att hitta särskild bot grupp.',
	)
);

?>