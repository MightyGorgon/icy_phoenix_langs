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
$lang['Cmcat_help'] = 'Hj�lp';

$lang['Cash_Configuration'] = 'Cash&nbsp;Konfiguration';
$lang['Cash_Currencies'] = 'Cash&nbsp;Valutor';
$lang['Cash_Exchange'] = 'Cash&nbsp;V�xel ';
$lang['Cash_Events'] = 'Cash&nbsp;Evenemang';
$lang['Cash_Forums'] = 'Cash&nbsp;Forum';
$lang['Cash_Groups'] = 'Cash&nbsp;Grupper';
$lang['Cash_Help'] = 'Cash&nbsp;Hj�lp';
$lang['Cash_Logs'] = 'Cash&nbsp;Logg';
$lang['Cash_Settings'] = 'Cash&nbsp;Inst�llningar';

$lang['Cmenu_cash_config'] = 'Global Cash Mod inst�llningar som p�verkar alla Valutor';
$lang['Cmenu_cash_currencies'] = 'L�gg till, Ta bort eller �ndra ordningen Valutor';
$lang['Cmenu_cash_settings'] = 'Specifika inst�llningar f�r varje Valuta';
$lang['Cmenu_cash_events'] = 'Cash Belopp att ge ut p� anv�ndarens evenemang';
$lang['Cmenu_cash_reset'] = '�terst�ll eller Omr�kna Cash belopp';
$lang['Cmenu_cash_exchange'] = 'Aktivera/Avaktivera Valutav�xling, valutakurser';
$lang['Cmenu_cash_forums'] = 'Vrid Valutor p� eller av f�r varje forum';
$lang['Cmenu_cash_groups'] = 'Anpassade inst�llningar f�r specifika anv�ndargrupper, rangordning och niv�er';
$lang['Cmenu_cash_log'] = 'Visa/Radera Inloggad Cash Mod �tg�rder';
$lang['Cmenu_cash_help'] = 'Cash Mod hj�lp';

// Config
$lang['Cash_config'] = 'Cash Mod Konfiguration';
$lang['Cash_config_explain'] = 'I formul�ret nedan kan du st�lla in din Cash Mod konfiguration.';

$lang['Cash_admincp'] = 'Cash Mod AdminCP Mode';
$lang['Cash_adminnavbar'] = 'Cash Mod Navbar';
$lang['Sidebar'] = 'Sidomeny';
$lang['Menu'] = 'Meny';

$lang['Messages'] = 'Meddelanden';
$lang['Spam'] = 'Spam';
$lang['Click_return_cash_config'] = 'Klicka %sH�r%s f�r att �terv�nda till Cash Mod Konfiguration';
$lang['Cash_config_updated'] = 'Cash Mod Konfiguration Uppdaterad Successfullt';
$lang['Cash_disabled'] = 'Inaktivera Cash Mod';
$lang['Cash_message'] = 'Visa Vinst i Post/Svara bekr�ftelse sk�rm';
$lang['Cash_display_message'] = 'Meddelande f�r att visa anv�ndarens resultat';
$lang['Cash_display_message_explain'] = 'M�ste ha exakt en "%s" i den';
$lang['Cash_spam_disable_num'] = 'Antal inl�gg f�r att inaktivera resultat efter (spam prevention)';
$lang['Cash_spam_disable_time'] = 'Tidsperiod under vilken dessa inl�gg skall �verstiga (timmar)';
$lang['Cash_spam_disable_message'] = 'Spam tillk�nnagivande f�r noll resultat';

// Currencies
$lang['Cash_currencies'] = 'Cash Mod Valutor';
$lang['Cash_currencies_explain'] = 'I formul�ret nedan kan du hantera dina valutor.';

$lang['Click_return_cash_currencies'] = 'Klicka %sH�r%s f�r att �terg� till Cash Mod Valutor';
$lang['Cash_currencies_updated'] = 'Cash Mod Valutor Uppdaterad Successfullt';
$lang['Cash_field'] = 'F�lt';
$lang['Cash_currency'] = 'Valuta';
$lang['Name_of_currency'] = 'Namn P� Valutan';
$lang['Default'] = 'Standard';
$lang['Cash_order'] = 'Ordning';
$lang['Cash_set_all'] = 'Ange f�r alla anv�ndare';
$lang['Cash_delete'] = 'Radera Allm�nt ';
$lang['Decimals'] = 'Decimaler';

$lang['Cash_confirm_copy'] = 'Kopiera alla anv�ndares %s data till %s?<br />Detta kan inte �ngras';
$lang['Cash_confirm_delete'] = 'Radera %s?<br />Detta kan inte �ngras';

$lang['Cash_copy_currency'] = 'Kopiera Valuta Data';

$lang['Cash_new_currency'] = 'Skapa Ny Valuta';
$lang['Cash_currency_dbfield'] = 'Databas f�lt f�r valuta';
$lang['Cash_currency_decimals'] = 'Antal decimaler f�r valuta';
$lang['Cash_currency_default'] = 'Standardv�rdet f�r valuta';

$lang['Bad_dbfield'] = 'D�ligt F�ltnamn m�ste vara i format \'user_word\'<br /><br />%s<br /><br/>Exempel:<br />user_points<br />user_cash<br />user_money<br />user_warnings<br /><br />';

// 0 currencies (most admin panels won't work... )
$lang['Insufficient_currencies'] = 'Du m�ste skapa Valutor innan du kan �ndra inst�llningarna';

// Add-ons ?

// Events
$lang['Cash_events'] = 'Cash Mod Evenemang';
$lang['Cash_events_explain'] = 'I formul�ret nedan kan du st�lla kontanta belopp som skall l�mnas f�r anpassade evenemang.';

$lang['No_events'] = 'Inga evenemang listade';
$lang['Existing_events'] = 'Existing Evenemang';
$lang['Add_an_event'] = 'L�gg till ett evenemang';
$lang['Cash_events_updated'] = 'Cash Evenemang Uppdaterad Successfullt';
$lang['Click_return_cash_events'] = 'Klicka %sH�r%s f�r att �terg� till Cash Evenemang';

//Reset
$lang['Cash_reset_title'] = 'Cash Mod �terst�llning';
$lang['Cash_reset_explain'] = 'I formul�ret nedan kan du aktivera en global �terst�llning av alla anv�ndare\' Cash belopp';

$lang['Cash_resetting'] = 'Cash �terst�lla';
$lang['User_of'] = 'Anv�ndare %s av %s';

$lang['Set_checked'] = 'St�ll kontrollerade valutor';
$lang['Recount_checked'] = 'Recount kontrollerade valutor';

$lang['Cash_confirm_reset'] = 'Bekr�fta �terst�llning av utvalda valutor?<br />Detta kan inte �ngras';
$lang['Cash_confirm_recount'] = 'Bekr�fta �terr�kning av utvalda valutor?<br />Detta kan inte �ngras.<br /><br />Denna �tg�rd �r inte att rekommendera f�r forum med stora m�ngder anv�ndare och/eller �mnen.<br /><br />Det rekommenderas att du st�nger av ditt forum medan denna �tg�rd sker. <br />Du kan avaktivera ditt forum via %sConfiguration%s';

$lang['Update_successful'] = 'Uppdatering framg�ngsrik!';
$lang['Click_return_cash_reset'] = 'Klicka %sH�r%s f�r att �terg� till Cash Reset';
$lang['User_updated'] = '%s uppdaterad<br />';

// Others

// Exchange
$lang['Cash_exchange'] = 'Cash Mod Exchange';
$lang['Cash_exchange_explain'] = 'I formul�ret nedan kan du ange det relativa v�rdet av dina valutor, och g�ra det m�jligt f�r anv�ndare att utbyta.';

$lang['Exchange_insufficient_currencies'] = 'Du har inte tillr�ckligt med Valutor f�r att skapa en valutakurs<br />Minst 2 kr�vs';

// Forums
$lang['Forum_cm_settings'] = 'Cash Mod Forum Inst�llningar';
$lang['Forum_cm_settings_explain'] = 'Fr�n den h�r panelen kan du st�lla in vilket forum som har Cash Mod aktiverat';

// Groups
$lang['Cash_groups'] = 'Cash Mod Grupper';
$lang['Cash_groups_explain'] = 'Fr�n den h�r panelen kan du ange s�rskilda privilegier som grader, anv�ndargrupper, administrat�rer och moderatorer';

$lang['Click_return_cash_groups'] = 'Klicka %sH�r%s f�r att �terg� till Cash Grupper';
$lang['Cash_groups_updated'] = 'Cash Groups Uppdaterad Successfullt';

$lang['Set'] = 'Ange';
$lang['Up'] = 'Upp';
$lang['Down'] = 'Ner';

// Help
$lang['Cmh_support'] = 'Cash Mod Support';
$lang['Cmh_troubleshooting'] = 'Fels�kning';
$lang['Cmh_upgrading'] = 'Uppgradering';
$lang['Cmh_addons'] = 'Add-Ons';
$lang['Cmh_demo_boards'] = 'Demo Forum';
$lang['Cmh_translations'] = '�vers�ttningar';
$lang['Cmh_features'] = 'Funktioner';

$lang['Cmhe_support'] = 'Allm�nn Information';
$lang['Cmhe_troubleshooting'] = 'Om du har problem med Cash Mod, kolla h�r efter korrigeringar';
$lang['Cmhe_upgrading'] = 'Du har f�r n�rvarande version %s, uppgraderingar kommer att l�ggas ut h�r p� den senaste versionen';
$lang['Cmhe_addons'] = 'En lista �ver MODs som drar f�rdel av Cash Mod funktioner';
$lang['Cmhe_demo_boards'] = 'En lista �ver n�gra demo forum som anv�nder Cash Mod';
$lang['Cmhe_translations'] = 'En lista med �vers�ttningar f�r Cash Mod';
$lang['Cmhe_features'] = 'En lista �ver Cash Mod funktioner, och utveckling av framtida versioner';

// Logs
$lang['Logs'] = 'Cash Mod Logg';
$lang['Logs_explain'] = 'Fr�n den h�r panelen kan du se inloggade Cash Mod evenemang';

// Settings
$lang['Cash_settings'] = 'Cash Mod Inst�llningar';
$lang['Cash_settings_explain'] = 'I formul�ret nedan kan du anpassa alla valutainst�llningarna.';


$lang['Display'] = 'Visa';
$lang['Implementation'] = 'Genomf�rande';
$lang['Allowances'] = 'Ers�ttningar';
$lang['Allowances_explain'] = 'Ers�ttningar kr�ver Cash Mod Ers�ttningar plug-in';
$lang['Click_return_cash_settings'] = 'Klicka %sH�r%s f�r att �terg� till Cash Mod Inst�llningar';
$lang['Cash_settings_updated'] = 'Cash Mod Inst�llningar Uppdaterad Successfullt';

$lang['Cash_enabled'] = 'Aktivera Valuta';
$lang['Cash_custom_currency'] = 'Anpassad Valuta f�r Cash Mod';
$lang['Cash_image'] = 'Visa valuta som en bild';
$lang['Cash_imageurl'] = 'Bild (i f�rh�llande till phpBB2 rots�kv�g):';
$lang['Cash_imageurl_explain'] = 'Anv�nds f�r att definiera en liten bild i samband med valuta';
$lang['Prefix'] = 'Prefix';
$lang['Postfix'] = 'Postfix';
$lang['Cash_currency_style'] = 'Valuta stil f�r Cash Mod';
$lang['Cash_currency_style_explain'] = 'Valutasymbol som ' . $lang['Prefix'] . ' eller ' . $lang['Postfix'];
$lang['Cash_display_usercp'] = 'Visa vinstmedel i Anv�ndarKp';
$lang['Cash_display_userpost'] = 'Visa vinstmedel i Post Profil';
$lang['Cash_display_memberlist'] = 'Visa vinstmedel i Medlemslistan';

$lang['Cash_amount_per_post'] = 'Belopp i kontanter som intj�nats per nytt �mne';
$lang['Cash_amount_post_bonus'] = 'Storleken p� bonusen som tj�nats per svar f�r �mnes f�rfattaren';
$lang['Cash_amount_per_reply'] = 'Belopp i kontanter som intj�nats per svar';
$lang['Cash_amount_per_character'] = 'Belopp i kontanter som intj�nats per karakt�r';
$lang['Cash_amount_per_thanks'] = 'Belopp i kontanter som intj�nats per tack';
$lang['Cash_maxearn'] = 'Maximalt belopp i kontanter som intj�nats f�r inl�gg';
$lang['Cash_amount_per_pm'] = 'Belopp i kontanter som intj�nats per privat meddelande';
$lang['Cash_include_quotes'] = 'Inkludera citat vid ber�kningen av kontanter per karakt�r';
$lang['Cash_exchangeable'] = 'Till�t anv�ndare att utbyta denna valuta';
$lang['Cash_allow_donate'] = 'Till�t anv�ndare att donera sina pengar till andra anv�ndare';
$lang['Cash_allow_mod_edit'] = 'L�t moderatorer redigera anv�ndarens cash';
$lang['Cash_allow_negative'] = 'Till�t anv�ndare att ha negativa kontant belopp';

$lang['Cash_allowance_enabled'] = 'Aktivera avdrag';
$lang['Cash_allowance_amount'] = 'Belopp i kontanter tj�nat som avdrag';
$lang['Cash_allownace_frequency'] = 'Hur ofta avdrag medges';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_DAY] = 'Dag';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_WEEK] = 'Vecka';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_MONTH] = 'M�nad';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_YEAR] = '�r';
$lang['Cash_allowance_next'] = 'Tid till n�sta ers�ttning';

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
$lang['Cash_clause'][CASH_LOG_ADMIN_MODEDIT] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new">%s</a> redigerad <a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a>\'s Cash:<br />Tillagd <b>%s</b><br />F�rflyttad <b>%s</b><br />S�tt till <b>%s</b>';

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
$lang['Cash_clause'][CASH_LOG_ADMIN_RENAME_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> namn�ndrad <b>%s</b> to <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][copied currency name][copied over currency name]

eg.
Joe copied users' gold to points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_COPY_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> kopiera anv�ndare\' <b>%s</b> to <b>%s</b>';

$lang['Log'] = 'Logg';
$lang['Action'] = '�tg�rd';
$lang['Type'] = 'Typ';
$lang['Cash_all'] = 'Alla';
$lang['Cash_admin'] = 'Admin';
$lang['Cash_user'] = 'Anv�ndare';
$lang['Delete_all_logs'] = 'Radera alla logger';
$lang['Delete_admin_logs'] = 'Radera admin logger';
$lang['Delete_user_logs'] = 'Radera anv�ndare logger';
$lang['All'] = 'Alla';
$lang['Day'] = 'Dag';
$lang['Week'] = 'Vecka';
$lang['Month'] = 'M�nad';
$lang['Year'] = '�r';
$lang['Page'] = 'Sida';
$lang['Per_page'] = 'per sida';

// Now for some regular stuff...

// User CP
$lang['Donate'] = 'Donera';
$lang['Mod_usercash'] = 'Modifiera %s\'s Cash';
$lang['Exchange'] = 'Exchange';

// Exchange
$lang['Convert'] = 'Konvertera';
$lang['Select_one'] = 'V�lj en';
$lang['Exchange_lack_of_currencies'] = 'Det finns inte nog med Valutor f�r att du ska kunna utbyta<br />F�r att aktivera denna funktion, m�ste din admin skapa minst 2 valutor';
$lang['You_have'] = 'Du har';
$lang['One_worth'] = 'En %s �r s�mst:';
$lang['Cannot_exchange'] = 'Du kan inte utbyta %s, aktuell';

// Donate
$lang['Amount'] = 'Belopp';
$lang['Donate_to'] = 'Donera till %s';
$lang['Donation_recieved'] = 'Du har f�tt en donation fr�n %s';
$lang['Has_donated'] = '%s har donerat [b]%s[/b] till dig.' . "\n\n" . '%s skrev: ' . "\n";

// Mod Edit
$lang['Add'] = 'L�gg till';
$lang['Remove'] = 'Flytta';
$lang['Omit'] = 'Uteslut';
$lang['Amount'] = 'Belopp';
$lang['Donate_to'] = 'Donera till %s';
$lang['Has_moderated'] = '%s har redigerat saldot p� ditt %s';
$lang['Has_added'] = '[*]Tillagd: [b]%s[/b]' . "\n";
$lang['Has_removed'] = '[*]F�rflyttad: [b]%s[/b]' . "\n";
$lang['Has_set'] = '[*]S�tt till: [b]%s[/b]' . "\n";

// That's all folks!

?>