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
$lang['Cmcat_help'] = 'pomo�';

$lang['Cash_Configuration'] = 'denar&nbsp;konfiguracija';
$lang['Cash_Currencies'] = 'denar&nbsp; denarne enote';
$lang['Cash_Exchange'] = 'denar&nbsp;izmenjava';
$lang['Cash_Events'] = 'denar&nbsp;dogodki';
$lang['Cash_Forums'] = 'denar&nbsp;Forumi';
$lang['Cash_Groups'] = 'denar&nbsp;skupine';
$lang['Cash_Help'] = 'denar&nbsp;pomo�';
$lang['Cash_Logs'] = 'denar&nbsp;bele�enje';
$lang['Cash_Settings'] = 'denar&nbsp;nastavitve';

$lang['Cmenu_cash_config'] = 'globalni na�in nastavitev denarja ki zavzame effekt vseh denarnih enot';
$lang['Cmenu_cash_currencies'] = 'dodaj, odstrani ali ponovno naro�i denarne enote';
$lang['Cmenu_cash_settings'] = 'specifi�ne nastavitve za vsako denarno enoto';
$lang['Cmenu_cash_events'] = 'dogodki denarnih zneskov se izvajajo pri uporabniku';
$lang['Cmenu_cash_reset'] = 'resetiraj ali ponovno naro�i denarni znesek';
$lang['Cmenu_cash_exchange'] = 'omogo�i/neomogo�i denarno izmenjavo enot, izmenjavo ocen';
$lang['Cmenu_cash_forums'] = 'vklopi denarne enote ali izklopi za vsak forum';
$lang['Cmenu_cash_groups'] = 'nastavitve po meri za specifi�ne uporabni�ke skupine, vrsto in ravni';
$lang['Cmenu_cash_log'] = 'poglej/ izbri�i prijavljen na�in delovanja denarja';
$lang['Cmenu_cash_help'] = 'na�in pomo�i denarja';

// Config
$lang['Cash_config'] = 'na�in konfiguracije denarja';
$lang['Cash_config_explain'] = 'Nastavi svoj na�in konfiguracije denarja.';

$lang['Cash_admincp'] = 'na�in denarja AdminCP na�in';
$lang['Cash_adminnavbar'] = 'navigacijska vrstica za na�in denarja';
$lang['Sidebar'] = 'starnska vrstica';
$lang['Menu'] = 'Meni';

$lang['Messages'] = 'sporo�ila';
$lang['Spam'] = 'smet';
$lang['Click_return_cash_config'] = 'klikni %tukaj%s za vrnitev v na�in konfiguracije denarja';
$lang['Cash_config_updated'] = 'na�in konfiguracije denarja je bil uspe�no posodobljen';
$lang['Cash_disabled'] = 'onemogo�i na�in denarja';
$lang['Cash_message'] = 'prika�i zaslu�ek v objavi/odgovori na potrditvenem zaslonu';
$lang['Cash_display_message'] = 'sporo�ilo za prikaz uporabnikovega zaslu�ka';
$lang['Cash_display_message_explain'] = 'moram imeti to�no en "%s" v tem';
$lang['Cash_spam_disable_num'] = '�tevilo objav  za onemogo�anje zaslu�ka po tem (spam prevention)';
$lang['Cash_spam_disable_time'] = '�asovno obdobje preko katerega morajo objave presegati(hours)';
$lang['Cash_spam_disable_message'] = 'sporo�ilo za napoved ni�elnega zaslu�ka';

// Currencies
$lang['Cash_currencies'] = 'na�in denarnih enot';
$lang['Cash_currencies_explain'] = 'upravljaj svoje denarne enote.';

$lang['Click_return_cash_currencies'] = 'klikni %stukaj%s za vrnitev v to na�in denarnih enot';
$lang['Cash_currencies_updated'] = 'na�in denarnih enot je bil posodobljen uspe�no';
$lang['Cash_field'] = 'polje';
$lang['Cash_currency'] = 'denarna enota';
$lang['Name_of_currency'] = 'ime denarna enota';
$lang['Default'] = 'Privzeto';
$lang['Cash_order'] = 'naro�i';
$lang['Cash_set_all'] = 'nastavi za vse uporabnike';
$lang['Cash_delete'] = 'izbri�i denarno enoto';
$lang['Decimals'] = 'Decimalke';

$lang['Cash_confirm_copy'] = 'kopiraj vse uporabnik�ke %s podatke %s?<br />to ni mogo�e razveljaviti';
$lang['Cash_confirm_delete'] = 'izbri�i %s?<br />to ni mogo�e razveljaviti';

$lang['Cash_copy_currency'] = 'kopiraj podatke denarnih enot';

$lang['Cash_new_currency'] = 'ustvari nove denarne enote';
$lang['Cash_currency_dbfield'] = 'baza podatkov polj za denarne enote';
$lang['Cash_currency_decimals'] = '�tevilo decimalk za denarne enote';
$lang['Cash_currency_default'] = 'privzete vrednosti za denarne enote';

$lang['Bad_dbfield'] = 'slabo ime polja,mora biti v obliki  \'user_word\'<br /><br />%s<br /><br />Examples:<br />user_points<br />user_cash<br />user_money<br />user_warnings<br /><br />';

// 0 currencies (most admin panels won't work... )
$lang['Insufficient_currencies'] = 'Ustvariti morate denarne enote, preden boste lahko spremeni nastavitve';

// Add-ons ?

// Events
$lang['Cash_events'] = 'na�in denarnih dogodkov';
$lang['Cash_events_explain'] = 'nastvi denarne zneske za dogodke po meri.';

$lang['No_events'] = 'ni na�tetih dogodkov';
$lang['Existing_events'] = 'obstoje�i dogodki';
$lang['Add_an_event'] = 'dodaj dogodek';
$lang['Cash_events_updated'] = 'denarni dogodek je bil posodobljen uspe�no';
$lang['Click_return_cash_events'] = 'klikni %stukaj%s za vrnitev v dogodke denarja';

//Reset
$lang['Cash_reset_title'] = 'na�in resetiranja denarja';
$lang['Cash_reset_explain'] = 'aktivirajte globalno resetiranje za vse uporabnike denarnih zneskov';

$lang['Cash_resetting'] = 'resetiranje denarja';
$lang['User_of'] = 'Uporabnik %s tega %s';

$lang['Set_checked'] = 'nastavi preverjene denarne enote';
$lang['Recount_checked'] = 'ponovno �tetje preverjenih denarnih enot';

$lang['Cash_confirm_reset'] = 'potrdi resetiranje izbrane denarne enote?<br />to ni mogo�e razveljaviti';
$lang['Cash_confirm_recount'] = 'potrdi ponovno �tetje izbrane denarne enote?<br />to ni mogo�e razveljaviti.<br /><br />To dejanje ni priporo�ljivo za plo��e z veliko veliko koli�ino uporabnikov v / ali temah.<br /><br />Priporo�ljivo je, da onemogo�ite svoj plo��o, medtem ko se ukrep se dogaja. <br />lahko onemogo�ite svojo plo��o preko %skonfiguracij%s';

$lang['Update_successful'] = 'posoditev uspe�na!';
$lang['Click_return_cash_reset'] = 'klikni %stukaj%s za vrnitev v  resetiranje denarja';
$lang['User_updated'] = '%s posodobljeno<br />';

// Others

// Exchange
$lang['Cash_exchange'] = 'na�in denarnega izmenjavanja';
$lang['Cash_exchange_explain'] = 'nastavi relativno vrednost za svoje denarne enote, in omogo�i uporabnikom izmenjavo.';

$lang['Exchange_insufficient_currencies'] = 'nimate narejenih dovolj denarnih enot za stopnjo izmenjave<br />vsaj dva sta potrebna';

// Forums
$lang['Forum_cm_settings'] = 'na�in nastavitev foruma denarja';
$lang['Forum_cm_settings_explain'] = 'nastavi kateri forum ima omogo�en denarni na�in';

// Groups
$lang['Cash_groups'] = 'na�in skupine denarja';
$lang['Cash_groups_explain'] = 'nastavi posebne privilegije vrstam, uporabni�ke skupine, administrator in moderator';

$lang['Click_return_cash_groups'] = 'klikni %stukaj%s za vrnitev v skupino denarja';
$lang['Cash_groups_updated'] = 'skupina denarja je bila uspe�no posodobljena';

$lang['Set'] = 'nastavi';
$lang['Up'] = 'gor';
$lang['Down'] = 'dol';

// Help
$lang['Cmh_support'] = 'na�in podpore denarja';
$lang['Cmh_troubleshooting'] = 'odpravljanje te�av';
$lang['Cmh_upgrading'] = 'nadgrajevanje';
$lang['Cmh_addons'] = 'dodajanje';
$lang['Cmh_demo_boards'] = 'vzor�na plo��a';
$lang['Cmh_translations'] = 'prevod';
$lang['Cmh_features'] = 'Funkcije';

$lang['Cmhe_support'] = 'glavne informacije';
$lang['Cmhe_troubleshooting'] = '�e imate probleme z na�inom denarja, klikni tukaj za popravilo';
$lang['Cmhe_upgrading'] = 'va�a trenutna verzija je  %s,nadgradnja bo objavila tukaj najnovej�o verzijo';
$lang['Cmhe_addons'] = 'seznam na�inov ki izkori��ajo funkcije denarnih na�inov';
$lang['Cmhe_demo_boards'] = 'seznam poskusnih plo�� ki uporabljajo na�in denarja';
$lang['Cmhe_translations'] = 'seznam prevodov za denarni na�in';
$lang['Cmhe_features'] = 'seznam denarnih na�inov funkcij, in razvoj prihajajo�e verzije';

// Logs
$lang['Logs'] = 'dnevnik denarnega na�ina';
$lang['Logs_explain'] = 'dogodki vpisanih denarnih na�inov';

// Settings
$lang['Cash_settings'] = 'nastavitve denarnega na�ina';
$lang['Cash_settings_explain'] = 'nastavi po meri vse denarne enote.';


$lang['Display'] = 'prikaz';
$lang['Implementation'] = 'vzor�en';
$lang['Allowances'] = 'nadomestila';
$lang['Allowances_explain'] = 'nadomestilo potrebuje na�in denarja vklopljenih nadomestil';
$lang['Click_return_cash_settings'] = 'klikni %stukajs za vrnitev v nastavitve denarnega na�ina';
$lang['Cash_settings_updated'] = 'nastavitve denarnega na�ina so bile uspe�no nadgrajene';

$lang['Cash_enabled'] = 'omogo�i denarne enote';
$lang['Cash_custom_currency'] = 'denarne enote po meri za denarni na�in';
$lang['Cash_image'] = 'prika�i denarne enote kot sliko';
$lang['Cash_imageurl'] = 'slika (Relative to Icy Phoenix root path):';
$lang['Cash_imageurl_explain'] = 'Uporabite to, da dolo�i� majhno sli�ico, povezano z denarno enoto';
$lang['Prefix'] = 'predpona';
$lang['Postfix'] = 'poprava objav';
$lang['Cash_currency_style'] = 'stil denarnih enot za denarni na�in';
$lang['Cash_currency_style_explain'] = 'simbol denarnih enot kot so  ' . $lang['Prefix'] . ' ali ' . $lang['Postfix'];
$lang['Cash_display_usercp'] = 'poka�i zaslu�ek v uporabni�kemCp';
$lang['Cash_display_userpost'] = 'poka�i zaslu�ek v objavi profila';
$lang['Cash_display_memberlist'] = 'poka�i zaslu�ek v seznamu �lanov';

$lang['Cash_amount_per_post'] = 'znesek denarja aslu�enga na novo temo';
$lang['Cash_amount_post_bonus'] = 'znesek bonusa zaslu�enega za odziv na temo avtorja';
$lang['Cash_amount_per_reply'] = 'znesek denarja zaslu�enega na odgovor';
$lang['Cash_amount_per_character'] = 'znesek denarja zaslu�enega na karakter';
$lang['Cash_amount_per_thanks'] = 'znesek denarja zaslu�enega za prejete zahvale';
$lang['Cash_maxearn'] = 'najve�ji znesek denarja zaslu�enega z objavami';
$lang['Cash_amount_per_pm'] = 'znesek denarja zaslu�enega na osebno sporo�ilo';
$lang['Cash_include_quotes'] = 'Vklju�i ponudbe pri izra�unu denarja po zna�aju';
$lang['Cash_exchangeable'] = 'dovoli uporabnikom izmenjavo te denarne enote';
$lang['Cash_allow_donate'] = 'dovoli uporabnikom doniranje njihovega denarja za ostale uporabnike';
$lang['Cash_allow_mod_edit'] = 'dovoli moderatorju urejanje uporabnikovega denarja';
$lang['Cash_allow_negative'] = 'dovoli uporabnikom negativni denarni znesek';

$lang['Cash_allowance_enabled'] = 'omogo�i nadomestilo';
$lang['Cash_allowance_amount'] = 'znesek denarja zaslu�enega kot nadomestilo';
$lang['Cash_allownace_frequency'] = 'kok pogosto so dana nadomestila';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_DAY] = 'Dan';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_WEEK] = 'Teden';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_MONTH] = 'Mesec';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_YEAR] = 'leto';
$lang['Cash_allowance_next'] = '�as med naslednjim nadomestilom';

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

$lang['Log'] = 'bele�nica';
$lang['Action'] = 'dejanje';
$lang['Type'] = 'Tip';
$lang['Cash_all'] = 'vse';
$lang['Cash_admin'] = 'Administrator';
$lang['Cash_user'] = 'Uporabnik';
$lang['Delete_all_logs'] = 'zbri�i vse dnevnike';
$lang['Delete_admin_logs'] = 'izbri�i administratrjev dnevnik';
$lang['Delete_user_logs'] = 'izbri�i uporabnikov dnevnik';
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
$lang['Exchange_lack_of_currencies'] = 'nimate dovolj denarnih enot da bi bili sposobni izmenjave <br />funkcijo omogo�ite tako , da va� administrator ustvari vsaj dve denarne enote';
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
$lang['Has_moderated'] = '%s je uredil stanje va�ega %s';
$lang['Has_added'] = '[*]dodano: [b]%s[/b]' . "\n";
$lang['Has_removed'] = '[*]Odstranjeno: [b]%s[/b]' . "\n";
$lang['Has_set'] = '[*]Nastavi na: [b]%s[/b]' . "\n";

// That's all folks!

?>