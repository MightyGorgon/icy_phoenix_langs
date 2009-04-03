<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_user_search.php 61 2008-10-30 09:25:26Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Adam Alkins (phpbb at rasadam dot com)
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
	'Search_invalid_username' => 'Ongeldige gebruikersnaam opgegeven om te zoeken', 
	'Search_invalid_email' => 'Ongeldig e-mailadres opgegeven om te zoeken', 
	'Search_invalid_ip' => 'Ongeldig IP-adres opgegeven om te zoeken', 
	'Search_invalid_group' => 'Ongeldige groep opgegeven om te zoeken', 
	'Search_invalid_date' => 'Ongeldige datum opgegeven om te zoeken', 
	'Search_invalid_postcount' => 'Ongeldig aantal berichten opgegeven om te zoeken', 
	'Search_invalid_userfield' => 'Ongeldige profielinformatie opgegeven om te zoeken', 
	'Search_invalid_lastvisited' => 'Ongeldige laatste bezoekdatum opgegeven om te zoeken', 
	'Search_invalid_language' => 'Ongeldige taal gekozen', 
	'Search_invalid_style' => 'Ongeldige stijl gekozen', 
	'Search_invalid_timezone' => 'Ongeldige tijdzone gekozen', 
	'Search_invalid_moderators' => 'Ongeldig forum gekozen', 
	'Search_invalid' => 'Ongeldige zoekopdracht', 
	'Search_invalid_day' => 'De opgegeven dag is ongeldig', 
	'Search_invalid_month' => 'De opgegeven maand is ongeldig', 
	'Search_invalid_year' => 'Het opgegeven jaar is ongeldig', 
	'Search_no_regexp' => 'De database ondersteunt geen zoekopdrachten met reguliere expressies', 
	'Search_for_username' => 'Zoeken naar gebruikersnamen die overeenkomen met %s', 
	'Search_for_email' => 'Zoeken naar e-mailadressen die overeenkomen met %s', 
	'Search_for_ip' => 'Zoeken naar IP-adressen die overeenkomen met %s', 
	'Search_for_date' => 'Zoeken naar gebruikers die zijn geregistreerd op %s %d-%d-%d', 
	'Search_for_group' => 'Zoeken naar groepsleden van %s', 
	'Search_for_banned' => 'Zoeken naar gebande gebruikers', 
	'Search_for_admins' => 'Zoeken naar beheerders', 
	'Search_for_mods' => 'Zoeken naar moderators', 
	'Search_for_disabled' => 'Zoeken naar uitgeschakelde gebruikers', 
	'Search_for_disabled_pms' => 'Zoeken naar gebruikers met privé berichten uitgeschakeld', 
	'Search_for_postcount_greater' => 'Zoeken naar gebruikers die meer dan %d berichten hebben geplaatst', 
	'Search_for_postcount_lesser' => 'Zoeken naar gebruikers die minder dan %d berichten hebben geplaatst', 
	'Search_for_postcount_range' => 'Zoeken naar gebruikers die tussen de %d en %d berichten hebben geplaatst', 
	'Search_for_postcount_equals' => 'Zoeken naar gebruikers die %d berichten hebben geplaatst', 
	'Search_for_userfield_icq' => 'Zoeken naar gebruikers met een ICQ-adres dat overeenkomt met %s', 
	'Search_for_userfield_yahoo' => 'Zoeken naar gebruikers met een Yahoo-IM-adres dat overeenkomt met %s', 
	'Search_for_userfield_aim' => 'Zoeken naar gebruikers met een AIM-adres dat overeenkomt met %s', 
	'Search_for_userfield_msn' => 'Zoeken naar gebruikers met een MSN-adres dat overeenkomt met %s', 
	'Search_for_userfield_website' => 'Zoeken naar gebruikers met website waarvan het adres overeenkomt met %s', 
	'Search_for_userfield_location' => 'Zoeken naar gebruikers waarvan de woonplaats overeenkomt met %s', 
	'Search_for_userfield_interests' => 'Zoeken naar gebruikers waarvan de interesses overeenkomen met %s', 
	'Search_for_userfield_occupation' => 'Zoeken naar gebruikers waarvan het beroep overeenkomt met %s', 
	'Search_for_lastvisited_inthelast' => 'Zoeken naar gebruikers die de laatste %s %s het forum hebben bezocht', 
	'Search_for_lastvisited_afterthelast' => 'Zoeken naar gebruikers die na de laatste %s %s het forum hebben bezocht', 
	'Search_for_language' => 'Zoeken naar gebruikers die %s als hun taal hebben ingesteld', 
	'Search_for_timezone' => 'Zoeken naar gebruikers die hun tijdzone hebben ingesteld op GMT %s', 
	'Search_for_style' => 'Zoeken naar gebruikers die %s als hun stijl hebben ingesteld', 
	'Search_for_moderators' => 'Zoeken naar moderators van het forum -> %s', 
	'Search_users_advanced' => 'Uitgebreid zoeken naar gebruikers', 
	'Search_users_explain' => 'Met deze module kun je uitgebreid zoeken naar gebruikers met behulp van verschillende criteria. Lees de omschrijvingen onder elk veld om de zoekmogelijkheden goed te begrijpen.', 
	'Search_username_explain' => 'Hier kun je een zoekopdracht geven die geen onderscheid maakt tussen hoofdletters en kleine letters. Als je slechts een deel van de te zoeken gebruikersnaam weet, kun je * (een sterretje) gebruiken als wildcard. Als je de reguliere expressies aanvinkt kun je zoeken op basis van een reguliere expressie. <strong>NB:</strong> Reguliere expressies werken alleen in MySQL, PostgreSQL en Oracle 10g+.', 
	'Search_email_explain' => 'Geef een (een deel van) het e-mailadres van een gebruiker. Er wordt geen onderscheid gemaakt tussen hoofdletters en kleine letters. Als je slechts een deel van het e-mailadres weet, kun je * (een sterretje) gebruiken als joker. Als je de reguliere expressies aanvinkt kun je zoeken op basis van een reguliere expressie. <strong>NB:</strong> Reguliere expressies werken alleen in MySQL, PostgreSQL en Oracle 10g+.', 
	'Search_ip_explain' => 'Zoeken naar gebruikers die een bericht hebben geplaatst vanaf een bepaald IP-adres of een reeks IP-adressen. Als je slechts een deel van het IP-adres weet, kun je * (een sterretje) gebruiken als joker. NB: als het laatste getal (achter de 3e punt) 255 is, wordt dat gezien als de hele reeks van IP-adressen in dat domein, dus 10.0.0.255 is hetzelfde als 10.0.0.* (.255 als laatste getal is trouwens gereserveerd en komt niet voor). Dit kun je gebruiken in een reeks, bijvoorbeeld: 10.0.0.5-10.0.0.255 is hetzelfde als "10.0.0.*" Je zou in plaats hiervan aan moeten geven 10.0.0.5-10.0.0.254', 
	'Search_users_joined' => 'Geregistreerde gebruikers', 
	'Search_users_lastvisited' => 'Gebruikers die het forum hebben bezocht', 
	'in_the_last' => 'gedurende de laatste', 
	'after_the_last' => 'na de laatste', 
	'Before' => 'Voor', 
	'After' => 'Na', 
	'Search_users_joined_explain' => 'Zoeken naar gebruikers die geregistreerd zijn voor of na (en op) een bepaalde datum. De datum moet worden ingevuld als JJJJ/MM/DD.', 
	'Search_users_groups_explain' => 'Zoek naar alle leden van de geselecteerde groep.', 
	'Administrators' => 'Beheerder', 
	'Banned_users' => 'Gebande gebruikers', 
	'Disabled_users' => 'Uitgeschakelde gebruikers', 
	'Users_disabled_pms' => 'Zoeken naar gebruikers met privéberichten uitgeschakeld', 
	'Search_users_misc_explain' => 'Beheerder - Alle gebruikers met beheerdersrechten; Moderatoren - Alle moderators; Gebande gebruikers - Alle accounts die zijn geband van de forums; Uitgeschakelde gebruikers - Alle gebruikers waarvan het account is uitgeschakeld (hetzij handmatig, hetzij dat het e-mailadres nooit is geverifieerd); Gebruikers met privéberichten uitgeschakeld - Gebruikers bij wie de rechten voor privéberichten zijn uitgeschakeld (via gebruikersbeheer)', 
	'Postcount' => 'Aantal berichten', 
	'Equals' => 'gelijk aan', 
	'Greater_than' => 'groter dan', 
	'Less_than' => 'minder dan', 
	'Search_users_postcount_explain' => 'Je kunt zoeken naar gebruikers aan de hand van het aantal geplaatste berichten. Je kunt zoeken op een bepaalde waarde, groter dan of kleiner dan een bepaalde waarde of tussen 2 waarden. Om tussen 2 waarden te zoeken kies je "gelijk aan" en geef je in de onderste en bovenste waarde met ertussen een streepje (-), bijvoorbeeld: 10-15', 
	'Userfield' => 'Profielveld', 
	'Search_users_userfield_explain' => 'Zoeken naar gebruikers aan de hand van verschillende velden in hun profiel. Jokers kunnen worden gebruikt door een sterretje (*) in te voeren. Als je de reguliere expressies aanvinkt kun je zoeken op basis van een reguliere expressie. <strong>NB:</strong> Reguliere expressies werken alleen in MySQL, PostgreSQL en Oracle 10g+.', 
	'Search_users_lastvisited_explain' => 'Je kunt zoeken naar gebruikers aan de hand van de datum van hun laatste bezoek', 
	'Search_users_language_explain' => 'Je kunt zoeken naar gebruikers die een bepaalde taal hebben ingesteld in hun profiel', 
	'Search_users_timezone_explain' => 'Je kunt zoeken naar gebruikers die een bepaalde tijdzone hebben ingesteld in hun profiel', 
	'Search_users_style_explain' => 'Je kunt zoeken naar gebruikers die een bepaalde stijl hebben ingesteld', 
	'Moderators_of' => 'Moderators van', 
	'Search_users_moderators_explain' => 'Je kunt zoeken naar gebruikers met moderatorrechten in een bepaald forum. Moderatorrechten worden herkend door bepaalde gebruikersrechten of door lid van een groep te zijn met de juiste groepspermissies.', 
	'Regular_expression' => 'Reguliere expressies?', 
	
	'Manage' => 'Beheer', 
	'Search_users_new' => '%s resulteerde in %d resulta(a)t(en). Geef een <a href="%s">nieuwe zoekopdracht</a> in.', 
	'Banned' => 'Geband', 
	'Not_banned' => 'Niet geband', 
	'Search_no_results' => 'Er zijn geen gebruikers gevonden die voldoen aan de opgegeven zoekcriteria. Probeer een nieuwe zoekopdracht. Als je zoekt op gebruikersnaam, e-mailadres of IP-adres, kun je jokers gebruiken door een * (een sterretje) in te vullen.', 
	'Account_status' => 'Accountstatus', 
	'Sort_options' => 'Sorteeropties:', 
	'Last_visit' => 'Laatste bezoek', 
	'Day' => 'dag', 
	)
);

?>