<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_cash.php 34 2009-05-07 22:45:10Z TheSteffen $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Xore (mods@xore.ca)
* TheSteffen, KugeLSichA, Tom, Carsten
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
$lang['Cmcat_main'] = 'glaven';
$lang['Cmcat_addons'] = 'dodajanje';
$lang['Cmcat_other'] = 'drugo';
$lang['Cmcat_help'] = 'pomoè';

$lang['Cash_Configuration'] = 'denar&nbsp;konfiguracija';
$lang['Cash_Currencies'] = 'denar&nbsp; denarne enote';
$lang['Cash_Exchange'] = 'denar&nbsp;izmenjava';
$lang['Cash_Events'] = 'denar&nbsp;dogodki';
$lang['Cash_Forums'] = 'denar&nbsp;Forumi';
$lang['Cash_Groups'] = 'denar&nbsp;skupine';
$lang['Cash_Help'] = 'denar&nbsp;pomoè';
$lang['Cash_Logs'] = 'denar&nbsp;beleženje';
$lang['Cash_Settings'] = 'denar&nbsp;nastavitve';

$lang['Cmenu_cash_config'] = 'globalni naèin nastavitev denarja ki zavzame effekt vseh denarnih enot';
$lang['Cmenu_cash_currencies'] = 'dodaj, odstrani ali ponovno naroèi denarne enote';
$lang['Cmenu_cash_settings'] = 'specifiène nastavitve za vsako denarno enoto';
$lang['Cmenu_cash_events'] = 'dogodki denarnih zneskov se izvajajo pri uporabniku';
$lang['Cmenu_cash_reset'] = 'resetiraj ali ponovno naroèi denarni znesek';
$lang['Cmenu_cash_exchange'] = 'omogoèi/neomogoèi denarno izmenjavo enot, izmenjavo ocen';
$lang['Cmenu_cash_forums'] = 'vklopi denarne enote ali izklopi za vsak forum';
$lang['Cmenu_cash_groups'] = 'nastavitve po meri za specifiène uporabniške skupine, vrsto in ravni';
$lang['Cmenu_cash_log'] = 'poglej/ izbriši prijavljen naèin delovanja denarja';
$lang['Cmenu_cash_help'] = 'naèin pomoèi denarja';

// Config
$lang['Cash_config'] = 'naèin konfiguracije denarja';
$lang['Cash_config_explain'] = 'Nastavi svoj naèin konfiguracije denarja.';

$lang['Cash_admincp'] = 'naèin denarja AdminCP naèin';
$lang['Cash_adminnavbar'] = 'navigacijska vrstica za naèin denarja';
$lang['Sidebar'] = 'starnska vrstica';
$lang['Menu'] = 'Meni';

$lang['Messages'] = 'sporoèila';
$lang['Spam'] = 'smet';
$lang['Click_return_cash_config'] = 'klikni %tukaj%s za vrnitev v naèin konfiguracije denarja';
$lang['Cash_config_updated'] = 'naèin konfiguracije denarja je bil uspešno posodobljen';
$lang['Cash_disabled'] = 'onemogoèi naèin denarja';
$lang['Cash_message'] = 'prikaži zaslužek v objavi/odgovori na potrditvenem zaslonu';
$lang['Cash_display_message'] = 'sporoèilo za prikaz uporabnikovega zaslužka';
$lang['Cash_display_message_explain'] = 'moram imeti toèno en "%s" v tem';
$lang['Cash_spam_disable_num'] = 'število objav  za onemogoèanje zaslužka po tem (spam prevention)';
$lang['Cash_spam_disable_time'] = 'èasovno obdobje preko katerega morajo objave presegati(hours)';
$lang['Cash_spam_disable_message'] = 'sporoèilo za napoved nièelnega zasluška';

// Currencies
$lang['Cash_currencies'] = 'naèin denarnih enot';
$lang['Cash_currencies_explain'] = 'upravljaj svoje denarne enote.';

$lang['Click_return_cash_currencies'] = 'klikni %stukaj%s za vrnitev v to naèin denarnih enot';
$lang['Cash_currencies_updated'] = 'naèin denarnih enot je bil posodobljen uspešno';
$lang['Cash_field'] = 'polje';
$lang['Cash_currency'] = 'denarna enota';
$lang['Name_of_currency'] = 'ime denarna enota';
$lang['Default'] = 'Privzeto';
$lang['Cash_order'] = 'naroèi';
$lang['Cash_set_all'] = 'nastavi za vse uporabnike';
$lang['Cash_delete'] = 'izbriši denarno enoto';
$lang['Decimals'] = 'Decimalke';

$lang['Cash_confirm_copy'] = 'kopiraj vse uporabnikške %s podatke %s?<br />to ni mogoèe razveljaviti';
$lang['Cash_confirm_delete'] = 'izbriši %s?<br />to ni mogoèe razveljaviti';

$lang['Cash_copy_currency'] = 'kopiraj podatke denarnih enot';

$lang['Cash_new_currency'] = 'ustvari nove denarne enote';
$lang['Cash_currency_dbfield'] = 'baza podatkov polj za denarne enote';
$lang['Cash_currency_decimals'] = 'število decimalk za denarne enote';
$lang['Cash_currency_default'] = 'privzete vrednosti za denarne enote';

$lang['Bad_dbfield'] = 'slabo ime polja,mora biti v obliki  \'user_word\'<br /><br />%s<br /><br />Examples:<br />user_points<br />user_cash<br />user_money<br />user_warnings<br /><br />';

// 0 currencies (most admin panels won't work... )
$lang['Insufficient_currencies'] = 'Ustvariti morate denarne enote, preden boste lahko spremeni nastavitve';

// Add-ons ?

// Events
$lang['Cash_events'] = 'naèin denarnih dogodkov';
$lang['Cash_events_explain'] = 'nastvi denarne zneske za dogodke po meri.';

$lang['No_events'] = 'ni naštetih dogodkov';
$lang['Existing_events'] = 'obstojeèi dogodki';
$lang['Add_an_event'] = 'dodaj dogodek';
$lang['Cash_events_updated'] = 'denarni dogodek je bil posodobljen uspešno';
$lang['Click_return_cash_events'] = 'klikni %stukaj%s za vrnitev v dogodke denarja';

//Reset
$lang['Cash_reset_title'] = 'naèin resetiranja denarja';
$lang['Cash_reset_explain'] = 'aktivirajte globalno resetiranje za vse uporabnike denarnih zneskov';

$lang['Cash_resetting'] = 'resetiranje denarja';
$lang['User_of'] = 'Uporabnik %s tega %s';

$lang['Set_checked'] = 'nastavi preverjene denarne enote';
$lang['Recount_checked'] = 'ponovno štetje preverjenih denarnih enot';

$lang['Cash_confirm_reset'] = 'potrdi resetiranje izbrane denarne enote?<br />to ni mogoèe razveljaviti';
$lang['Cash_confirm_recount'] = 'potrdi ponovno štetje izbrane denarne enote?<br />to ni mogoèe razveljaviti.<br /><br />To dejanje ni priporoèljivo za plošèe z veliko veliko kolièino uporabnikov v / ali temah.<br /><br />Priporoèljivo je, da onemogoèite svoj plošèo, medtem ko se ukrep se dogaja. <br />lahko onemogoèite svojo plošèo preko %skonfiguracij%s';

$lang['Update_successful'] = 'posoditev uspešna!';
$lang['Click_return_cash_reset'] = 'klikni %stukaj%s za vrnitev v  resetiranje denarja';
$lang['User_updated'] = '%s posodobljeno<br />';

// Others

// Exchange
$lang['Cash_exchange'] = 'naèin denarnega izmenjavanja';
$lang['Cash_exchange_explain'] = 'nastavi relativno vrednost za svoje denarne enote, in omogoèi uporabnikom izmenjavo.';

$lang['Exchange_insufficient_currencies'] = 'nimate narejenih dovolj denarnih enot za stopnjo izmenjave<br />vsaj dva sta potrebna';

// Forums
$lang['Forum_cm_settings'] = 'naèin nastavitev foruma denarja';
$lang['Forum_cm_settings_explain'] = 'nastavi kateri forum ima omogoèen denarni naèin';

// Groups
$lang['Cash_groups'] = 'naèin skupine denarja';
$lang['Cash_groups_explain'] = 'nastavi posebne privilegije vrstam, uporabniške skupine, administrator in moderator';

$lang['Click_return_cash_groups'] = 'klikni %stukaj%s za vrnitev v skupino denarja';
$lang['Cash_groups_updated'] = 'skupina denarja je bila uspešno posodobljena';

$lang['Set'] = 'nastavi';
$lang['Up'] = 'gor';
$lang['Down'] = 'dol';

// Help
$lang['Cmh_support'] = 'naèin podpore denarja';
$lang['Cmh_troubleshooting'] = 'odpravljanje težav';
$lang['Cmh_upgrading'] = 'nadgrajevanje';
$lang['Cmh_addons'] = 'dodajanje';
$lang['Cmh_demo_boards'] = 'vzorèna plošèa';
$lang['Cmh_translations'] = 'prevod';
$lang['Cmh_features'] = 'Funkcije';

$lang['Cmhe_support'] = 'glavne informacije';
$lang['Cmhe_troubleshooting'] = 'èe imate probleme z naèinom denarja, klikni tukaj za popravilo';
$lang['Cmhe_upgrading'] = 'vaša trenutna verzija je  %s,nadgradnja bo objavila tukaj najnovejšo verzijo';
$lang['Cmhe_addons'] = 'seznam naèinov ki izkorišèajo funkcije denarnih naèinov';
$lang['Cmhe_demo_boards'] = 'seznam poskusnih plošè ki uporabljajo naèin denarja';
$lang['Cmhe_translations'] = 'seznam prevodov za denarni naèin';
$lang['Cmhe_features'] = 'seznam denarnih naèinov funkcij, in razvoj prihajajoèe verzije';

// Logs
$lang['Logs'] = 'dnevnik denarnega naèina';
$lang['Logs_explain'] = 'dogodki vpisanih denarnih naèinov';

// Settings
$lang['Cash_settings'] = 'nastavitve denarnega naèina';
$lang['Cash_settings_explain'] = 'nastavi po meri vse denarne enote.';


$lang['Display'] = 'prikaz';
$lang['Implementation'] = 'vzorèen';
$lang['Allowances'] = 'nadomestila';
$lang['Allowances_explain'] = 'nadomestilo potrebuje naèin denarja vklopljenih nadomestil';
$lang['Click_return_cash_settings'] = 'klikni %stukajs za vrnitev v nastavitve denarnega naèina';
$lang['Cash_settings_updated'] = 'nastavitve denarnega naèina so bile uspešno nadgrajene';

$lang['Cash_enabled'] = 'omogoèi denarne enote';
$lang['Cash_custom_currency'] = 'denarne enote po meri za denarni naèin';
$lang['Cash_image'] = 'prikaži denarne enote kot sliko';
$lang['Cash_imageurl'] = 'slika (Relative to Icy Phoenix root path):';
$lang['Cash_imageurl_explain'] = 'Uporabite to, da doloèiš majhno slièico, povezano z denarno enoto';
$lang['Prefix'] = 'predpona';
$lang['Postfix'] = 'poprava objav';
$lang['Cash_currency_style'] = 'stil denarnih enot za denarni naèin';
$lang['Cash_currency_style_explain'] = 'simbol denarnih enot kot so  ' . $lang['Prefix'] . ' ali ' . $lang['Postfix'];
$lang['Cash_display_usercp'] = 'pokaži zaslužek v uporabniškemCp';
$lang['Cash_display_userpost'] = 'pokaži zaslužek v objavi profila';
$lang['Cash_display_memberlist'] = 'pokaži zaslužek v seznamu èlanov';

$lang['Cash_amount_per_post'] = 'znesek denarja asluženga na novo temo';
$lang['Cash_amount_post_bonus'] = 'znesek bonusa zasluženega za odziv na temo avtorja';
$lang['Cash_amount_per_reply'] = 'znesek denarja zasluženega na odgovor';
$lang['Cash_amount_per_character'] = 'znesek denarja zasluženega na karakter';
$lang['Cash_amount_per_thanks'] = 'znesek denarja zasluženega za prejete zahvale';
$lang['Cash_maxearn'] = 'najveèji znesek denarja zasluženega z objavami';
$lang['Cash_amount_per_pm'] = 'znesek denarja zasluženega na osebno sporoèilo';
$lang['Cash_include_quotes'] = 'Vkljuèi ponudbe pri izraèunu denarja po znaèaju';
$lang['Cash_exchangeable'] = 'dovoli uporabnikom izmenjavo te denarne enote';
$lang['Cash_allow_donate'] = 'dovoli uporabnikom doniranje njihovega denarja za ostale uporabnike';
$lang['Cash_allow_mod_edit'] = 'dovoli moderatorju urejanje uporabnikovega denarja';
$lang['Cash_allow_negative'] = 'dovoli uporabnikom negativni denarni znesek';

$lang['Cash_allowance_enabled'] = 'omogoèi nadomestilo';
$lang['Cash_allowance_amount'] = 'znesek denarja zasluženega kot nadomestilo';
$lang['Cash_allownace_frequency'] = 'kok pogosto so dana nadomestila';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_DAY] = 'Dan';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_WEEK] = 'Teden';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_MONTH] = 'Mesec';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_YEAR] = 'leto';
$lang['Cash_allowance_next'] = 'èas med naslednjim nadomestilom';

// Groups
$lang['Cash_status_type'][CASH_GROUPS_DEFAULT] = 'privzeto';
$lang['Cash_status_type'][CASH_GROUPS_CUSTOM] = 'Po meri';
$lang['Cash_status_type'][CASH_GROUPS_OFF] = 'izklopljeno';
$lang['Cash_status'] = 'Stanje';

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
$lang['Cash_clause'][CASH_LOG_DONATE] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> donated <b>%s</b> to <a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a>';

/* argument order: [admin/mod id][admin/mod name][editee id][editee name][Added list][removed list][Set list]

eg.
Joe modified Peter's Cash:
Added 14 gold
Removed $10
Set 3 points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_MODEDIT] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new">%s</a> edited <a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a>\'s Cash:<br />Added <b>%s</b><br />Removed <b>%s</b><br />Set to <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][currency name]

eg.
Joe created points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_CREATE_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> created <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][currency name]

eg.
Joe deleted $
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_DELETE_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> deleted <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][old currency name][new currency name]

eg.
Joe renamed silver to gold
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_RENAME_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> renamed <b>%s</b> to <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][copied currency name][copied over currency name]

eg.
Joe copied users' gold to points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_COPY_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> copied users\' <b>%s</b> to <b>%s</b>';

$lang['Log'] = 'beležnica';
$lang['Action'] = 'dejanje';
$lang['Type'] = 'Tip';
$lang['Cash_all'] = 'vse';
$lang['Cash_admin'] = 'Administrator';
$lang['Cash_user'] = 'Uporabnik';
$lang['Delete_all_logs'] = 'zbriši vse dnevnike';
$lang['Delete_admin_logs'] = 'izbriši administratrjev dnevnik';
$lang['Delete_user_logs'] = 'izbriši uporabnikov dnevnik';
$lang['All'] = 'vse';
$lang['Day'] = 'Dan';
$lang['Week'] = 'teden';
$lang['Month'] = 'Mesec';
$lang['Year'] = 'leto';
$lang['Page'] = 'stran';
$lang['Per_page'] = 'na stran';

// Now for some regular stuff...

// User CP
$lang['Donate'] = 'Doniraj';
$lang['Mod_usercash'] = 'prilagodi %s\'s denar';
$lang['Exchange'] = 'izmenjava';

// Exchange
$lang['Convert'] = 'pretvori';
$lang['Select_one'] = 'izberi eno';
$lang['Exchange_lack_of_currencies'] = 'nimate dovolj denarnih enot da bi bili sposobni izmenjave <br />funkcijo omogoèite tako , da vaš administrator ustvari vsaj dve denarne enote';
$lang['You_have'] = 'Imate';
$lang['One_worth'] = 'eden  %s je vreden:';
$lang['Cannot_exchange'] = 'ne morete izmenjavati %s, denarnih enot';

// Donate
$lang['Amount'] = 'znesek';
$lang['Donate_to'] = 'Doniraj v  %s';
$lang['Donation_recieved'] = 'prejeli ste donacijo od %s';
$lang['Has_donated'] = '%s je bilo donirano [b]%s[/b] vam.' . "\n\n" . '%s napisano: ' . "\n";

// Mod Edit
$lang['Add'] = 'dodaj';
$lang['Remove'] = 'odstrani';
$lang['Omit'] = 'izpusti';
$lang['Amount'] = 'znesek';
$lang['Donate_to'] = 'Doniraj v %s';
$lang['Has_moderated'] = '%s je uredil stanje vašega %s';
$lang['Has_added'] = '[*]dodano: [b]%s[/b]' . "\n";
$lang['Has_removed'] = '[*]Odstranjeno: [b]%s[/b]' . "\n";
$lang['Has_set'] = '[*]Nastavi na: [b]%s[/b]' . "\n";

// That's all folks!

?>