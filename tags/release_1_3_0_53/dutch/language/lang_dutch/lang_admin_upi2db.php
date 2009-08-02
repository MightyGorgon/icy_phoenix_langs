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
* BigRib (bigrib@gmx.de)
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
	'setup_upi2db' => 'UPI2DB Configuratie',
	'setup_upi2db_explain' => 'Hier kun je de diverse instellingen voor de Unread Post Information 2 Database Mod veranderen.<br />Is deze MOD actief, dan wordt de informatie van ongelezen berichten in de database opgeslagen, zo dat de informatie ook nadat een gebruiker zich heeft uitgelogd bewaart blijft en niet verloren gaat.',
	'upi2db_on' => '<strong>UPI2DB Mod actief?</strong>',
	'upi2db_on_explain' => 'Hier kun je de UPI2DB Mod innschakelen en uitschakelen of het aan de gebruiker overlaten.<br /> Is deze MOD niet actief dan is het cookiesysteem in werking.',
	'user_select' => 'Gebruikersinstellingen',
	'up2db_days' => '<strong>Berichten automatisch gelezen na&hellip;</strong>', 
	'up2db_days_tagen' => 'Dagen', 
	'up2db_days_explain' => 'Aantal dagen, hoeveel dagen de berichtinformatie in de database bewaart blijft.<br /> Alle onderwerpen met laatste reactie ouder dan X dagen, worden automatisch als gelezen gemarkeerd.<br />Waarschuwing! Hoe groter het aantal, des te meer je de database belast. Standaard = 30 dagen',
	
	'edit_as_new' => '<strong>Bewerkte berichten als ongelezen markeren?',
	'edit_as_new_explain' => 'Zullen de gelezen berichten na bewerken ongelezen gemarkeerd moeten worden?</strong>',
	'last_edit_as_new' => '<strong>Laatste bericht in een onderwerp na bewerken als ongelezen markeren?</strong>',
	'edit_topic_first' => '<strong>Bewerkte berichten in het onderwerpweergave naar boven verplaatsen</strong>',
	'edit_topic_first_explain' => 'Staat de optie op "Ja" dan worden ongelezen bewerkte berichten in de onderwerpenweergave als eerste (onder de mededelingen en vastgepinde onderwerpen) weergegeven totdat ze gelezen zijn.',
	
	'upi2db_condition_setup' => 'UPI2DB Condities',
	'upi2db_condition_min_posts' => 'Minimum aantal berichten',
	'upi2db_condition_min_regdays' => 'Minimum aantal geregistreerde dagen',
	'upi2db_unread_color' => 'Onderwerptitelkleur (ongelezen bericht)',
	'upi2db_edit_color' => 'Onderwerptitelkleur (bewerkte bericht)',
	'upi2db_mark_color' => 'Onderwerptitelkleur (gemarkeerde bericht)',
	'group_allow_upi2db' => 'Groep mag gebruikmaken van UPI2DB?',
	'user_allow_upi2db' => 'Gebruikers mogen gebruikmaken van UPI2DB?',
	'user_disable_upi2db' => 'UPI2DB Mod uitschakelen', 
	'group_user' => 'Gebruiker',
	'user_without_group' => '<strong>Gebruiker zonder enkele groepslidmaatschap</strong>',
	
	'max_new_posts' => '<strong>Maximum aantal nieuwe of bewerkte berichten</strong>',
	'max_new_posts_explain' => 'Geef een maximum aantal ongelezen berichten per gebruiker in',
	'max_permanent_topics' => '<strong>Maximum aantal permanent gelezen onderwerpen per gebruiker</strong>',
	'max_permanent_topics_explain' => 'Hier kun je de maximum aantal "permanent gelezen onderwerpen" per gebruiker instellen. Wanneer je geen beperking wil, geef dan een "0" in.',
	'up2db_del_perm' => '<strong>Ruim permanent gemarkeerde forums/onderwerpen op na...</strong>',
	'up2db_del_perm_explain' => 'Hier geef je aan, na hoeveel dagen "permanent als gelezen gemarkeerde forums/onderwerpen" automatisch uit de database verwijderd wordt.',
	
	'up2db_del_mark' => '<strong>Ruim gemarkeerde berichten op na...</strong>',
	'up2db_del_mark_explain' => 'Geef de aantal dagen in dat "gemarkeerde berichten" bewaart worden voordat het wordt opgeruimd',
	'max_mark_posts' => '<strong>Maximum aantal "gemarkeerde berichten" per gebruiker</strong>',
	'max_mark_posts_explain' => 'De maximum aantal berichten dat een gebruiker kan markeren.',
	)
);

?>