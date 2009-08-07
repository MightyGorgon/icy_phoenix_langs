<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_cash.php 97 2009-05-01 17:18:07Z Mighty Gorgon $
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
$lang['Cmcat_main'] = 'Huvudsaklig';
$lang['Cmcat_addons'] = 'Add-ons';
$lang['Cmcat_other'] = 'Annan';
$lang['Cmcat_help'] = 'Hjälp';

$lang['Cash_Configuration'] = 'Cash&nbsp;Konfiguration';
$lang['Cash_Currencies'] = 'Cash&nbsp;Valutor';
$lang['Cash_Exchange'] = 'Cash&nbsp;Växel ';
$lang['Cash_Events'] = 'Cash&nbsp;Evenemang';
$lang['Cash_Forums'] = 'Cash&nbsp;Forum';
$lang['Cash_Groups'] = 'Cash&nbsp;Grupper';
$lang['Cash_Help'] = 'Cash&nbsp;Hjälp';
$lang['Cash_Logs'] = 'Cash&nbsp;Logg';
$lang['Cash_Settings'] = 'Cash&nbsp;Inställningar';

$lang['Cmenu_cash_config'] = 'Global Cash Mod inställningar som påverkar alla Valutor';
$lang['Cmenu_cash_currencies'] = 'Lägg till, Ta bort eller ändra ordningen Valutor';
$lang['Cmenu_cash_settings'] = 'Specifika inställningar för varje Valuta';
$lang['Cmenu_cash_events'] = 'Cash Belopp att ge ut på användarens evenemang';
$lang['Cmenu_cash_reset'] = 'Återställ eller Omräkna Cash belopp';
$lang['Cmenu_cash_exchange'] = 'Aktivera/Avaktivera Valutaväxling, valutakurser';
$lang['Cmenu_cash_forums'] = 'Vrid Valutor på eller av för varje forum';
$lang['Cmenu_cash_groups'] = 'Anpassade inställningar för specifika användargrupper, rangordning och nivåer';
$lang['Cmenu_cash_log'] = 'Visa/Radera Inloggad Cash Mod åtgärder';
$lang['Cmenu_cash_help'] = 'Cash Mod hjälp';

// Config
$lang['Cash_config'] = 'Cash Mod Konfiguration';
$lang['Cash_config_explain'] = 'I formuläret nedan kan du ställa in din Cash Mod konfiguration.';

$lang['Cash_admincp'] = 'Cash Mod AdminCP Mode';
$lang['Cash_adminnavbar'] = 'Cash Mod Navbar';
$lang['Sidebar'] = 'Sidomeny';
$lang['Menu'] = 'Meny';

$lang['Messages'] = 'Meddelanden';
$lang['Spam'] = 'Spam';
$lang['Click_return_cash_config'] = 'Klicka %sHär%s för att återvända till Cash Mod Konfiguration';
$lang['Cash_config_updated'] = 'Cash Mod Konfiguration Uppdaterad Successfullt';
$lang['Cash_disabled'] = 'Inaktivera Cash Mod';
$lang['Cash_message'] = 'Visa Vinst i Post/Svara bekräftelse skärm';
$lang['Cash_display_message'] = 'Meddelande för att visa användarens resultat';
$lang['Cash_display_message_explain'] = 'Måste ha exakt en "%s" i den';
$lang['Cash_spam_disable_num'] = 'Antal inlägg för att inaktivera resultat efter (spam prevention)';
$lang['Cash_spam_disable_time'] = 'Tidsperiod under vilken dessa inlägg skall överstiga (timmar)';
$lang['Cash_spam_disable_message'] = 'Spam tillkännagivande för noll resultat';

// Currencies
$lang['Cash_currencies'] = 'Cash Mod Valutor';
$lang['Cash_currencies_explain'] = 'I formuläret nedan kan du hantera dina valutor.';

$lang['Click_return_cash_currencies'] = 'Klicka %sHär%s för att återgå till Cash Mod Valutor';
$lang['Cash_currencies_updated'] = 'Cash Mod Valutor Uppdaterad Successfullt';
$lang['Cash_field'] = 'Fält';
$lang['Cash_currency'] = 'Valuta';
$lang['Name_of_currency'] = 'Namn På Valutan';
$lang['Default'] = 'Standard';
$lang['Cash_order'] = 'Ordning';
$lang['Cash_set_all'] = 'Ange för alla användare';
$lang['Cash_delete'] = 'Radera Allmänt ';
$lang['Decimals'] = 'Decimaler';

$lang['Cash_confirm_copy'] = 'Kopiera alla användares %s data till %s?<br />Detta kan inte ångras';
$lang['Cash_confirm_delete'] = 'Radera %s?<br />Detta kan inte ångras';

$lang['Cash_copy_currency'] = 'Kopiera Valuta Data';

$lang['Cash_new_currency'] = 'Skapa Ny Valuta';
$lang['Cash_currency_dbfield'] = 'Databas fält för valuta';
$lang['Cash_currency_decimals'] = 'Antal decimaler för valuta';
$lang['Cash_currency_default'] = 'Standardvärdet för valuta';

$lang['Bad_dbfield'] = 'Dåligt Fältnamn måste vara i format \'user_word\'<br /><br />%s<br /><br/>Exempel:<br />user_points<br />user_cash<br />user_money<br />user_warnings<br /><br />';

// 0 currencies (most admin panels won't work... )
$lang['Insufficient_currencies'] = 'Du måste skapa Valutor innan du kan ändra inställningarna';

// Add-ons ?

// Events
$lang['Cash_events'] = 'Cash Mod Evenemang';
$lang['Cash_events_explain'] = 'I formuläret nedan kan du ställa kontanta belopp som skall lämnas för anpassade evenemang.';

$lang['No_events'] = 'Inga evenemang listade';
$lang['Existing_events'] = 'Existing Evenemang';
$lang['Add_an_event'] = 'Lägg till ett evenemang';
$lang['Cash_events_updated'] = 'Cash Evenemang Uppdaterad Successfullt';
$lang['Click_return_cash_events'] = 'Klicka %sHär%s för att återgå till Cash Evenemang';

//Reset
$lang['Cash_reset_title'] = 'Cash Mod Återställning';
$lang['Cash_reset_explain'] = 'I formuläret nedan kan du aktivera en global återställning av alla användare\' Cash belopp';

$lang['Cash_resetting'] = 'Cash Återställa';
$lang['User_of'] = 'Användare %s av %s';

$lang['Set_checked'] = 'Ställ kontrollerade valutor';
$lang['Recount_checked'] = 'Recount kontrollerade valutor';

$lang['Cash_confirm_reset'] = 'Bekräfta återställning av utvalda valutor?<br />Detta kan inte ångras';
$lang['Cash_confirm_recount'] = 'Bekräfta återräkning av utvalda valutor?<br />Detta kan inte ångras.<br /><br />Denna åtgärd är inte att rekommendera för forum med stora mängder användare och/eller ämnen.<br /><br />Det rekommenderas att du stänger av ditt forum medan denna åtgärd sker. <br />Du kan avaktivera ditt forum via %sConfiguration%s';

$lang['Update_successful'] = 'Uppdatering framgångsrik!';
$lang['Click_return_cash_reset'] = 'Klicka %sHär%s för att återgå till Cash Reset';
$lang['User_updated'] = '%s uppdaterad<br />';

// Others

// Exchange
$lang['Cash_exchange'] = 'Cash Mod Exchange';
$lang['Cash_exchange_explain'] = 'I formuläret nedan kan du ange det relativa värdet av dina valutor, och göra det möjligt för användare att utbyta.';

$lang['Exchange_insufficient_currencies'] = 'Du har inte tillräckligt med Valutor för att skapa en valutakurs<br />Minst 2 krävs';

// Forums
$lang['Forum_cm_settings'] = 'Cash Mod Forum Inställningar';
$lang['Forum_cm_settings_explain'] = 'Från den här panelen kan du ställa in vilket forum som har Cash Mod aktiverat';

// Groups
$lang['Cash_groups'] = 'Cash Mod Grupper';
$lang['Cash_groups_explain'] = 'Från den här panelen kan du ange särskilda privilegier som grader, användargrupper, administratörer och moderatorer';

$lang['Click_return_cash_groups'] = 'Klicka %sHär%s för att återgå till Cash Grupper';
$lang['Cash_groups_updated'] = 'Cash Groups Uppdaterad Successfullt';

$lang['Set'] = 'Ange';
$lang['Up'] = 'Upp';
$lang['Down'] = 'Ner';

// Help
$lang['Cmh_support'] = 'Cash Mod Support';
$lang['Cmh_troubleshooting'] = 'Felsökning';
$lang['Cmh_upgrading'] = 'Uppgradering';
$lang['Cmh_addons'] = 'Add-Ons';
$lang['Cmh_demo_boards'] = 'Demo Forum';
$lang['Cmh_translations'] = 'Översättningar';
$lang['Cmh_features'] = 'Funktioner';

$lang['Cmhe_support'] = 'Allmänn Information';
$lang['Cmhe_troubleshooting'] = 'Om du har problem med Cash Mod, kolla här efter korrigeringar';
$lang['Cmhe_upgrading'] = 'Du har för närvarande version %s, uppgraderingar kommer att läggas ut här på den senaste versionen';
$lang['Cmhe_addons'] = 'En lista över MODs som drar fördel av Cash Mod funktioner';
$lang['Cmhe_demo_boards'] = 'En lista över några demo forum som använder Cash Mod';
$lang['Cmhe_translations'] = 'En lista med översättningar för Cash Mod';
$lang['Cmhe_features'] = 'En lista över Cash Mod funktioner, och utveckling av framtida versioner';

// Logs
$lang['Logs'] = 'Cash Mod Logg';
$lang['Logs_explain'] = 'Från den här panelen kan du se inloggade Cash Mod evenemang';

// Settings
$lang['Cash_settings'] = 'Cash Mod Inställningar';
$lang['Cash_settings_explain'] = 'I formuläret nedan kan du anpassa alla valutainställningarna.';


$lang['Display'] = 'Visa';
$lang['Implementation'] = 'Genomförande';
$lang['Allowances'] = 'Ersättningar';
$lang['Allowances_explain'] = 'Ersättningar kräver Cash Mod Ersättningar plug-in';
$lang['Click_return_cash_settings'] = 'Klicka %sHär%s för att återgå till Cash Mod Inställningar';
$lang['Cash_settings_updated'] = 'Cash Mod Inställningar Uppdaterad Successfullt';

$lang['Cash_enabled'] = 'Aktivera Valuta';
$lang['Cash_custom_currency'] = 'Anpassad Valuta för Cash Mod';
$lang['Cash_image'] = 'Visa valuta som en bild';
$lang['Cash_imageurl'] = 'Bild (i förhållande till phpBB2 rotsökväg):';
$lang['Cash_imageurl_explain'] = 'Används för att definiera en liten bild i samband med valuta';
$lang['Prefix'] = 'Prefix';
$lang['Postfix'] = 'Postfix';
$lang['Cash_currency_style'] = 'Valuta stil för Cash Mod';
$lang['Cash_currency_style_explain'] = 'Valutasymbol som ' . $lang['Prefix'] . ' eller ' . $lang['Postfix'];
$lang['Cash_display_usercp'] = 'Visa vinstmedel i AnvändarKp';
$lang['Cash_display_userpost'] = 'Visa vinstmedel i Post Profil';
$lang['Cash_display_memberlist'] = 'Visa vinstmedel i Medlemslistan';

$lang['Cash_amount_per_post'] = 'Belopp i kontanter som intjänats per nytt ämne';
$lang['Cash_amount_post_bonus'] = 'Storleken på bonusen som tjänats per svar för ämnes författaren';
$lang['Cash_amount_per_reply'] = 'Belopp i kontanter som intjänats per svar';
$lang['Cash_amount_per_character'] = 'Belopp i kontanter som intjänats per karaktär';
$lang['Cash_amount_per_thanks'] = 'Belopp i kontanter som intjänats per tack';
$lang['Cash_maxearn'] = 'Maximalt belopp i kontanter som intjänats för inlägg';
$lang['Cash_amount_per_pm'] = 'Belopp i kontanter som intjänats per privat meddelande';
$lang['Cash_include_quotes'] = 'Inkludera citat vid beräkningen av kontanter per karaktär';
$lang['Cash_exchangeable'] = 'Tillåt användare att utbyta denna valuta';
$lang['Cash_allow_donate'] = 'Tillåt användare att donera sina pengar till andra användare';
$lang['Cash_allow_mod_edit'] = 'Låt moderatorer redigera användarens cash';
$lang['Cash_allow_negative'] = 'Tillåt användare att ha negativa kontant belopp';

$lang['Cash_allowance_enabled'] = 'Aktivera avdrag';
$lang['Cash_allowance_amount'] = 'Belopp i kontanter tjänat som avdrag';
$lang['Cash_allownace_frequency'] = 'Hur ofta avdrag medges';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_DAY] = 'Dag';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_WEEK] = 'Vecka';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_MONTH] = 'Månad';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_YEAR] = 'År';
$lang['Cash_allowance_next'] = 'Tid till nästa ersättning';

// Groups
$lang['Cash_status_type'][CASH_GROUPS_DEFAULT] = 'Standard';
$lang['Cash_status_type'][CASH_GROUPS_CUSTOM] = 'Anpassad';
$lang['Cash_status_type'][CASH_GROUPS_OFF] = 'Av';
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
$lang['Cash_clause'][CASH_LOG_DONATE] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> donerat <b>%s</b> till <a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a>';

/* argument order: [admin/mod id][admin/mod name][editee id][editee name][Added list][removed list][Set list]

eg.
Joe modified Peter's Cash:
Added 14 gold
Removed $10
Set 3 points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_MODEDIT] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new">%s</a> redigerad <a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a>\'s Cash:<br />Tillagd <b>%s</b><br />Förflyttad <b>%s</b><br />Sätt till <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][currency name]

eg.
Joe created points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_CREATE_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> skapad <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][currency name]

eg.
Joe deleted $
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_DELETE_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> raderad <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][old currency name][new currency name]

eg.
Joe renamed silver to gold
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_RENAME_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> namnändrad <b>%s</b> to <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][copied currency name][copied over currency name]

eg.
Joe copied users' gold to points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_COPY_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> kopiera användare\' <b>%s</b> to <b>%s</b>';

$lang['Log'] = 'Logg';
$lang['Action'] = 'Åtgärd';
$lang['Type'] = 'Typ';
$lang['Cash_all'] = 'Alla';
$lang['Cash_admin'] = 'Admin';
$lang['Cash_user'] = 'Användare';
$lang['Delete_all_logs'] = 'Radera alla logger';
$lang['Delete_admin_logs'] = 'Radera admin logger';
$lang['Delete_user_logs'] = 'Radera användare logger';
$lang['All'] = 'Alla';
$lang['Day'] = 'Dag';
$lang['Week'] = 'Vecka';
$lang['Month'] = 'Månad';
$lang['Year'] = 'År';
$lang['Page'] = 'Sida';
$lang['Per_page'] = 'per sida';

// Now for some regular stuff...

// User CP
$lang['Donate'] = 'Donera';
$lang['Mod_usercash'] = 'Modifiera %s\'s Cash';
$lang['Exchange'] = 'Exchange';

// Exchange
$lang['Convert'] = 'Konvertera';
$lang['Select_one'] = 'Välj en';
$lang['Exchange_lack_of_currencies'] = 'Det finns inte nog med Valutor för att du ska kunna utbyta<br />För att aktivera denna funktion, måste din admin skapa minst 2 valutor';
$lang['You_have'] = 'Du har';
$lang['One_worth'] = 'En %s är sämst:';
$lang['Cannot_exchange'] = 'Du kan inte utbyta %s, aktuell';

// Donate
$lang['Amount'] = 'Belopp';
$lang['Donate_to'] = 'Donera till %s';
$lang['Donation_recieved'] = 'Du har fått en donation från %s';
$lang['Has_donated'] = '%s har donerat [b]%s[/b] till dig.' . "\n\n" . '%s skrev: ' . "\n";

// Mod Edit
$lang['Add'] = 'Lägg till';
$lang['Remove'] = 'Flytta';
$lang['Omit'] = 'Uteslut';
$lang['Amount'] = 'Belopp';
$lang['Donate_to'] = 'Donera till %s';
$lang['Has_moderated'] = '%s har redigerat saldot på ditt %s';
$lang['Has_added'] = '[*]Tillagd: [b]%s[/b]' . "\n";
$lang['Has_removed'] = '[*]Förflyttad: [b]%s[/b]' . "\n";
$lang['Has_set'] = '[*]Sätt till: [b]%s[/b]' . "\n";

// That's all folks!

?>