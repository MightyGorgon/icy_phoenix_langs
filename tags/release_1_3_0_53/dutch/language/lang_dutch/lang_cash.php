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
* Xore (mods@xore.ca)
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

// Admin menu
$lang['Cmcat_main'] = 'Hoofd'; 
$lang['Cmcat_addons'] = 'Extra\'s'; 
$lang['Cmcat_other'] = 'Anders'; 
$lang['Cmcat_help'] = 'Help'; 

$lang['Cash_Configuration'] = 'Geldconfiguratie'; 
$lang['Cash_Currencies'] = 'Geldvaluta\'s'; 
$lang['Cash_Exchange'] = 'Geld wissselen'; 
$lang['Cash_Events'] = 'Geldgebeurtenis'; 
$lang['Cash_Forums'] = 'Geldforums'; 
$lang['Cash_Groups'] = 'Geldgroepen'; 
$lang['Cash_Help'] = 'Geldhelp'; 
$lang['Cash_Logs'] = 'Geldlogs'; 
$lang['Cash_Settings'] = 'Geldinstellingen'; 

$lang['Cmenu_cash_config'] = 'Standaard geldinstellingen'; 
$lang['Cmenu_cash_currencies'] = 'Toevoegen, bewerken of verwijderen van valuta\'s'; 
$lang['Cmenu_cash_settings'] = 'Gespecificeerde instellingen voor de valuta\'s'; 
$lang['Cmenu_cash_events'] = 'Geldhoeveelheden die worden verstrekt'; 
$lang['Cmenu_cash_reset'] = 'Reset of herstel de geldhoeveelheden'; 
$lang['Cmenu_cash_exchange'] = 'Schakel de wissel in ja of nee, wissel waarden'; 
$lang['Cmenu_cash_forums'] = 'Schakel valuta\'s in voor gespecificeerde forums in'; 
$lang['Cmenu_cash_groups'] = 'Aangepaste instellingen voor groepen, rangen en niveaus'; 
$lang['Cmenu_cash_log'] = 'Bekijk of verwijder gelogde acties door moderators'; 
$lang['Cmenu_cash_help'] = 'Geldhelp'; 

// Config
$lang['Cash_config'] = 'Geldconfiguratie'; 
$lang['Cash_config_explain'] = 'Het veld hieronder laat je de Geld MOD instellen.'; 

$lang['Cash_admincp'] = 'Geld MOD AdminCP status'; 
$lang['Cash_adminnavbar'] = 'Geld MOD Navigatiebalk'; 
$lang['Sidebar'] = 'Navigatiebalk'; 
$lang['Menu'] = 'Menu'; 

$lang['Messages'] = 'Berichten'; 
$lang['Spam'] = 'Spam'; 
$lang['Click_return_cash_config'] = 'Klik %shier%s om terug te keren naar de geldinstellingen'; 
$lang['Cash_config_updated'] = 'Geldinstellingen succesvol bijgewerkt'; 
$lang['Cash_disabled'] = 'Schakel Geld MOD uit'; 
$lang['Cash_message'] = 'Laat de saldo zien in het bevestigingsscherm'; 
$lang['Cash_display_message'] = 'Bericht dat gebruikers krijgen te zien hoeveel ze hebben verdient'; 
$lang['Cash_display_message_explain'] = 'Moet minimaal een keer "%s" in zich hebben'; 
$lang['Cash_spam_disable_num'] = 'Aantal berichten nadat de beloningen niet meer worden bijgewerkt (spambescherming)'; 
$lang['Cash_spam_disable_time'] = 'Tijdsperiode die er minimaal tussen berichten en antwoorden moeten zitten per gebruiker (uren)'; 
$lang['Cash_spam_disable_message'] = 'Spambericht voor geen beloningen'; 

// Currencies
$lang['Cash_currencies'] = 'Geldvaluta\'s';
$lang['Cash_currencies_explain'] = 'Beheer je valuta\'s.';

$lang['Click_return_cash_currencies'] = 'Klik %shier%s om terug te keren naar geldvaluta\'s'; 
$lang['Cash_currencies_updated'] = 'Geld MOD valuta\'s succesvol bijgewerkt'; 
$lang['Cash_field'] = 'Veld'; 
$lang['Cash_currency'] = 'Valuta'; 
$lang['Name_of_currency'] = 'Naam van de valuta'; 
$lang['Default'] = 'Standaard'; 
$lang['Cash_order'] = 'Sorteer'; 
$lang['Cash_set_all'] = 'Stel in voor alle gebruikers'; 
$lang['Cash_delete'] = 'Verwijder valuta'; 
$lang['Decimals'] = 'Decimalen'; 

$lang['Cash_confirm_copy'] = 'Kopieer alle gebruikers %s gegevens naar %s?<br />Dit kan niet ongedaan gemaakt worden'; 
$lang['Cash_confirm_delete'] = 'Verwijder %s?<br />Dit kan niet ongedaan gemaakt worden'; 

$lang['Cash_copy_currency'] = 'Kopieër valutagegevens'; 

$lang['Cash_new_currency'] = 'Maak nieuwe valuta'; 
$lang['Cash_currency_dbfield'] = 'Databaseveld voor valuta'; 
$lang['Cash_currency_decimals'] = 'Aantal decimalen voor valuta'; 
$lang['Cash_currency_default'] = 'Standaardwaarde voor valuta'; 

$lang['Bad_dbfield'] = 'Foutieve veldnaam, moet in deze vorm \'user_woord\'<br /><br />%s<br /><br/>Voorbeelden:<br />user_punten<br />user_contanten<br />user_geld<br />user_waarschuwingen<br /><br />'; 

// 0 currencies (most admin panels won't work... )
$lang['Insufficient_currencies'] = 'Je moet een valutasoort instellen voordat je instellingen kunt wijzigen'; 

// Add-ons ?

// Events
$lang['Cash_events'] = 'Geldgebeurtenissen'; 
$lang['Cash_events_explain'] = 'Het veld hieronder laat je de geldgebeurtenissen instellen.'; 

$lang['No_events'] = 'Er zijn geen gebeurtenissen ingesteld';
$lang['Existing_events'] = 'Bestaande gebeurtenissen';
$lang['Add_an_event'] = 'Voeg een gebeurtenis toe';
$lang['Cash_events_updated'] = 'Geldgebeurtenissen succesvol bijgewerkt';
$lang['Click_return_cash_events'] = 'Klik %shier%s om terug te keren naar geldgebeurtenissen';

//Reset
$lang['Cash_reset_title'] = 'Geld MOD herstellen'; 
$lang['Cash_reset_explain'] = 'Het veld hieronder laat je alle instellingen herstellen, ook voor de gebruikers'; 

$lang['Cash_resetting'] = 'Geld Herstellen'; 
$lang['User_of'] = 'Gebruiker %s van %s'; 

$lang['Set_checked'] = 'Stel geselecteerde valuta\'s in'; 
$lang['Recount_checked'] = 'Herstel geselecteerde valuta\'s'; 

$lang['Cash_confirm_reset'] = 'Bevestiging van geselecteerde valuta\'s?<br />Dit kan niet ongedaan worden gemaakt'; 
$lang['Cash_confirm_recount'] = 'Bevestiging van geselecteerde valuta\'s herstellen?<br />Dit kan niet ongedaan worden gemaakt.<br /><br />Deze actie wordt niet aangeraden voor forums met grote aantallen gebruikers en/of onderwerpen.<br /><br />Het wordt aangeraden dat je je site of forum tijdelijk uitschakelt tijdens deze actie. <br />Je kunt je site of forum uitschakelen via het %sConfiguratie%s scherm'; 

$lang['Update_successful'] = 'Succesvol bijgewerkt!'; 
$lang['Click_return_cash_reset'] = 'Klik %shier%s om terug te keren naar geldherstellen'; 
$lang['User_updated'] = '%s bijgewerkt<br />';

// Others

// Exchange
$lang['Cash_exchange'] = 'Geld MOD omwisselen'; 
$lang['Cash_exchange_explain'] = 'Het veld hieronder laat je de waarden en de omwisselwaarden instellen voor je om te wisselen.'; 

$lang['Exchange_insufficient_currencies'] = 'Je hebt niet genoeg valuta\'s om je te wisselen in te stellen<br />minimaal twee zijn vereist'; 

// Forums
$lang['Forum_cm_settings'] = 'Cash Mod Foruminstellingen';
$lang['Forum_cm_settings_explain'] = 'Schakel in welke forums de Geld Mod gebruiken';

// Groups
$lang['Cash_groups'] = 'Geld MOD Groepeninstellingen'; 
$lang['Cash_groups_explain'] = 'Op dit paneel kun je de privileges en aparte instellingen aanpassen voor de Geld MOD, per rang en/of gebruiker'; 

$lang['Click_return_cash_groups'] = 'Klik %shier%s om terug te keren naar geldgroepen';
$lang['Cash_groups_updated'] = 'Geldgroepen succesvol bijgewerkt';

$lang['Set'] = 'Instellen';
$lang['Up'] = 'Omhoog';
$lang['Down'] = 'Omlaag';

// Help
$lang['Cmh_support'] = 'Geld Mod ondersteuning';
$lang['Cmh_troubleshooting'] = 'Hulp via de website';
$lang['Cmh_upgrading'] = 'Upgrading';
$lang['Cmh_addons'] = 'Addons';
$lang['Cmh_demo_boards'] = 'Demoforums';
$lang['Cmh_translations'] = 'Vertalingen';
$lang['Cmh_features'] = 'Mogelijkheden';

$lang['Cmhe_support'] = 'Standaard Informatie'; 
$lang['Cmhe_troubleshooting'] = 'Als je problemen hebt met de geld MOD kijk dan hier'; 
$lang['Cmhe_upgrading'] = 'Je hebt momenteel versie %s, nieuwere versies worden hier bijgewerkt'; 
$lang['Cmhe_addons'] = 'Een lijst van andere MODS die samen gaan met de Geld MOD'; 
$lang['Cmhe_demo_boards'] = 'Een lijst van Demo sites of forums die deze MOD gebruiken'; 
$lang['Cmhe_translations'] = 'Een lijst met vertalingen voor de Geld MOD'; 
$lang['Cmhe_features'] = 'Een lijst met mogelijkheden voor de Geld MOD'; 

// Logs
$lang['Logs'] = 'Geldlogs'; 
$lang['Logs_explain'] = 'Op dit paneel kun je de gelogde acties zien'; 

// Settings
$lang['Cash_settings'] = 'Geldinstellingen'; 
$lang['Cash_settings_explain'] = 'Op dit paneel kun je diverse geldinstellingen aanpassen.'; 


$lang['Display'] = 'Weergeven'; 
$lang['Implementation'] = 'Implementatie'; 
$lang['Allowances'] = 'Toestemmingen'; 
$lang['Allowances_explain'] = 'Toestemmingen vereisen de geldtoestemmingen plug-in'; 
$lang['Click_return_cash_settings'] = 'Klik %shier%s om terug te keren naar de geldinstellingen'; 
$lang['Cash_settings_updated'] = 'Geldinstellingen succesvol bijgewerkt'; 

$lang['Cash_enabled'] = 'Schakel valuta in';
$lang['Cash_custom_currency'] = 'Eigen valuta voor de Cash Mod';
$lang['Cash_image'] = 'Geef de valuta als een plaatje weer';
$lang['Cash_imageurl'] = 'Afbeelding (relatief aan Icy Phoenix map):';
$lang['Cash_imageurl_explain'] = 'Gebruik dit om een plaatje te koppelen aan de valuta';
$lang['Prefix'] = 'Prefix';
$lang['Postfix'] = 'Postfix';
$lang['Cash_currency_style'] = 'Valuta stijl voor Geld MOD';
$lang['Cash_currency_style_explain'] = 'Valuta symbool als ' . $lang['Prefix'] . ' of ' . $lang['Postfix'];
$lang['Cash_display_usercp'] = 'Laat saldo zien in gebruikersprofiel';
$lang['Cash_display_userpost'] = 'Laat saldo zien in bericht'; 
$lang['Cash_display_memberlist'] = 'Laat saldo zien in gebruikerslijst'; 

$lang['Cash_amount_per_post'] = 'Hoeveelheid geld per nieuw bericht'; 
$lang['Cash_amount_post_bonus'] = 'Hoeveelheid geld per antwoord voor de auteur van het onderwerp'; 
$lang['Cash_amount_per_reply'] = 'Hoeveelheid geld per antwoord'; 
$lang['Cash_amount_per_character'] = 'Hoeveelheid geld per letter of teken'; 
$lang['Cash_amount_per_thanks'] = 'Hoeveelheid geld per ontvangen dankbericht';
$lang['Cash_maxearn'] = 'Maximaal aantal verdiende geld per bericht'; 
$lang['Cash_amount_per_pm'] = 'Hoeveelheid geld per privébericht'; 
$lang['Cash_include_quotes'] = 'Neem de tekens in een bericht van de met een geciteerde bericht ook mee'; 
$lang['Cash_exchangeable'] = 'Sta gebruikers toe om deze valuta om te wisselen'; 
$lang['Cash_allow_donate'] = 'Sta gebruikers toe om geld te doneren aan andere gebruikers'; 
$lang['Cash_allow_mod_edit'] = 'Sta moderators toe om gebruikers geld te bewerken'; 
$lang['Cash_allow_negative'] = 'Sta gebruikers toe om negatieve saldo te hebben'; 

$lang['Cash_allowance_enabled'] = 'Schakel beloningen in'; 
$lang['Cash_allowance_amount'] = 'Hoeveelheid geld verdient'; 
$lang['Cash_allownace_frequency'] = 'Hoe vaak er beloningen worden gegeven'; 
$lang['Cash_allownace_frequencies'][CASH_ALLOW_DAY] = 'Dag'; 
$lang['Cash_allownace_frequencies'][CASH_ALLOW_WEEK] = 'Week'; 
$lang['Cash_allownace_frequencies'][CASH_ALLOW_MONTH] = 'Maand'; 
$lang['Cash_allownace_frequencies'][CASH_ALLOW_YEAR] = 'Jaar'; 
$lang['Cash_allowance_next'] = 'Tijd tot de volgende beloning'; 

// Groups
$lang['Cash_status_type'][CASH_GROUPS_DEFAULT] = 'Standaard'; 
$lang['Cash_status_type'][CASH_GROUPS_CUSTOM] = 'Eigen'; 
$lang['Cash_status_type'][CASH_GROUPS_OFF] = 'Uit'; 
$lang['Cash_status'] = 'Status';

// Cash Mod Log Text
// Note: there isn't really a whole lot i can do about it, if languages use a
// grammar that requires these arguments (%s) to be in a different order, it's stuck in
// this order. The up side is that this is about 10x more comprehensive than the
// last way i did it.
//

/* argument order: [donater id][donater name][currency list][receiver id][receiver name]

eg.
Joe donated 14 gold, $10, 3 points to Peter
*/
$lang['Cash_clause'][CASH_LOG_DONATE] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> gedoneerd <b>%s</b> aan <a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a>';

/* argument order: [admin/mod id][admin/mod name][editee id][editee name][Added list][removed list][Set list]

eg.
Joe modified Peter's Cash:
Added 14 gold
Removed $10
Set 3 points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_MODEDIT] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new">%s</a> heeft bewerkt <a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a>\'s geld:<br />Toegevoegd <b>%s</b><br />Verwijderd <b>%s</b><br />Ingesteld op <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][currency name]

eg.
Joe created points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_CREATE_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> heeft gemaakt <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][currency name]

eg.
Joe deleted $
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_DELETE_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> verwijderd <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][old currency name][new currency name]

eg.
Joe renamed silver to gold
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_RENAME_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> heeft hernoemd <b>%s</b> naar <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][copied currency name][copied over currency name]

eg.
Joe copied users' gold to points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_COPY_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> heeft gebruikers\' <b>%s</b> naar  <b>%s</b>';

$lang['Log'] = 'Log'; 
$lang['Action'] = 'Actie'; 
$lang['Type'] = 'Soort'; 
$lang['Cash_all'] = 'Alle'; 
$lang['Cash_admin'] = 'Beheerder'; 
$lang['Cash_user'] = 'Gebruiker'; 
$lang['Delete_all_logs'] = 'Verwijder alle logs'; 
$lang['Delete_admin_logs'] = 'Verwijder beheerderslogs'; 
$lang['Delete_user_logs'] = 'Verwijder gebruikerslogs'; 
$lang['All'] = 'Alles'; 
$lang['Day'] = 'Dag'; 
$lang['Week'] = 'Week'; 
$lang['Month'] = 'Maand'; 
$lang['Year'] = 'Jaar'; 
$lang['Page'] = 'Pagina'; 
$lang['Per_page'] = 'per pagina';

// Now for some regular stuff...

// User CP
$lang['Donate'] = 'Doneren';
$lang['Mod_usercash'] = 'Bewerk %s\'s geld';
$lang['Exchange'] = 'Omwisselen';

// Exchange
$lang['Convert'] = 'Converteer'; 
$lang['Select_one'] = 'Selecteer een'; 
$lang['Exchange_lack_of_currencies'] = 'Er zijn op dit moment niet genoeg valuta\'s in het system<br />Om dit te gebruiken moet de beheerder minimaal 2 valuta\'s instellen';
$lang['You_have'] = 'Je hebt'; 
$lang['One_worth'] = 'Een %s is waard:'; 
$lang['Cannot_exchange'] = 'Je kunt nu geen %s, omwisselen'; 

// Donate
$lang['Amount'] = 'Hoeveelheid'; 
$lang['Donate_to'] = 'Doneren aan %s'; 
$lang['Donation_recieved'] = 'Je hebt een donatie ontvangen van %s'; 
$lang['Has_donated'] = '%s heeft gedoneerd [b]%s[/b] aan jouw.' . "\n\n" . '%s schreef: ' . "\n";

// Mod Edit
$lang['Add'] = 'Voeg toe'; 
$lang['Remove'] = 'Verwijder'; 
$lang['Omit'] = 'Nalaten'; 
$lang['Amount'] = 'Hoeveelheid'; 
$lang['Donate_to'] = 'Schenk aan %s'; 
$lang['Has_moderated'] = '%s heeft je aantal bewerkt %s'; 
$lang['Has_added'] = '[*]Toegevoegd: [b]%s[/b]\n'; 
$lang['Has_removed'] = '[*]Verwijderd: [b]%s[/b]\n'; 
$lang['Has_set'] = '[*]Ingesteld op: [b]%s[/b]\n'; 

// That's all folks!

?>