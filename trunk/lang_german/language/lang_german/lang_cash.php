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
* TheSteffen, KugeLSichA, Tom,Carsten
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
$lang['Cmcat_main'] = 'Allgemeines';
$lang['Cmcat_addons'] = 'Erweiterungen';
$lang['Cmcat_other'] = 'Sonstiges';
$lang['Cmcat_help'] = 'Hilfe';

$lang['Cash_Configuration'] = 'Cash Konfiguration';
$lang['Cash_Currencies'] = 'Cash W�hrungen';
$lang['Cash_Exchange'] = 'Cash W�hrungswechsel';
$lang['Cash_Events'] = 'Cash Ereignisse';
$lang['Cash_Forums'] = 'Cash Foren';
$lang['Cash_Groups'] = 'Cash Gruppen';
$lang['Cash_Help'] = 'Cash Hilfe';
$lang['Cash_Logs'] = 'Cash Logs';
$lang['Cash_Settings'] = 'Cash Einstellungen';

$lang['Cmenu_cash_config'] = 'Globale Cash Mod Einstellungen die alle W�hrungen betreffen';
$lang['Cmenu_cash_currencies'] = 'Andere W�hrungen hinzuf�gen, l�schen oder anders ordnen';
$lang['Cmenu_cash_settings'] = 'W�hrungsspezifische Einstellungen';
$lang['Cmenu_cash_events'] = 'Die Geld Mengen, die bei Ereignissen vergeben werden, einstellen';
$lang['Cmenu_cash_reset'] = 'Kontost�nde zur�cksetzen oder neu berechnen';
$lang['Cmenu_cash_exchange'] = 'W�hrungswechsel aktivieren/deaktivieren, Wechselkurse einstellen';
$lang['Cmenu_cash_forums'] = 'W�hrungen je Forum an- oder ausschalten';
$lang['Cmenu_cash_groups'] = 'Einstellungen f�r bestimmte Benutzergruppen, R�nge und Benutzerebenen';
$lang['Cmenu_cash_log'] = 'Protokollierte Cash Mod Aktionen';
$lang['Cmenu_cash_help'] = 'Cash Mod Hilfe';

// Config
$lang['Cash_config'] = 'Cash Mod Konfiguration';
$lang['Cash_config_explain'] = 'Mit den Eingabefelder unten kannst du deine Cash Mod Konfiguration ver�ndern.';

$lang['Cash_admincp'] = 'Cash Mod Administrations Modus';
$lang['Cash_adminnavbar'] = 'Cash Mod Navigation';
$lang['Sidebar'] = 'Sidebar';
$lang['Menu'] = 'Men�';

$lang['Messages'] = 'Nachrichten';
$lang['Spam'] = 'Spam';
$lang['Click_return_cash_config'] = 'Klicke %shier%s, um zum Cash Mod zur�ckzukehren';
$lang['Cash_config_updated'] = 'Cash Mod Konfiguration ge�ndert';
$lang['Cash_disabled'] = 'Cash Mod deaktivieren';
$lang['Cash_message'] = 'Verdienst auf dem Beitrags-Best�tigungs Bildschirm anzeigen';
$lang['Cash_display_message'] = 'Nachricht zum anzeigen der Benutzerverdienste';
$lang['Cash_display_message_explain'] = 'Es muss exakt ein "%s" enthalten sein.';
$lang['Cash_spam_disable_num'] = 'Anzahl an Posts, die zur Verdienstsperrung f�hrt (Spamvorsorge)';
$lang['Cash_spam_disable_time'] = 'Zeitspanne bis zur Entsperrung der Verdienste (Stunden)';
$lang['Cash_spam_disable_message'] = 'Spamwarnung im Falle von Verdienstsperrung';

// Currencies
$lang['Cash_currencies'] = 'Cash Mod W�hrungen';
$lang['Cash_currencies_explain'] = 'Mit den Eingabefeldern unten kannst du deine W�hrungen ver�ndern.';

$lang['Click_return_cash_currencies'] = 'Klicke %shier%s, um zu den Cash Mod W�hrungen zur�ckzukehren';
$lang['Cash_currencies_updated'] = 'Cash Mod W�hrungen ge�ndert';
$lang['Cash_field'] = 'Spaltenname';
$lang['Cash_currency'] = 'W�hrung';
$lang['Name_of_currency'] = 'W�hrungsname';
$lang['Default'] = 'Anfangswert';
$lang['Cash_order'] = 'Reihenfolge';
$lang['Cash_set_all'] = 'F�r alle Benutzer festlegen';
$lang['Cash_delete'] = 'W�hrung l�schen';
$lang['Decimals'] = 'Nachkommastellen';

$lang['Cash_confirm_copy'] = 'Die %s aller Benutzer in %s umwandeln?<br />Diese Aktion kann nicht r�ckg�ngig gemacht werden';
$lang['Cash_confirm_delete'] = '%s l�schen?<br />Diese Aktion kann nicht r�ckg�ngig gemacht werden';

$lang['Cash_copy_currency'] = 'W�hrungsdaten kopieren';

$lang['Cash_new_currency'] = 'Neue W�hrung erstellen';
$lang['Cash_currency_dbfield'] = 'Datenbank Spaltenname der W�hrung';
$lang['Cash_currency_decimals'] = 'Anzahl an Nachkommastellen f�r die W�hrung';
$lang['Cash_currency_default'] = 'Anfangswert f�r die W�hrung';

$lang['Bad_dbfield'] = 'Fehlerhafter Spaltenname, der Spaltenname muss in der Form \'user_word\' sein.<br /><br />%s<br /><br/>Beispiele:<br />user_points<br />user_cash<br />user_money<br />user_warnings<br /><br />';

// 0 currencies (most admin panels won't work... )
$lang['Insufficient_currencies'] = 'Du musst W�hrungen erstellen bevor du Einstellungen �ndern kannst';

// Add-ons ?

// Events
$lang['Cash_events'] = 'Cash Mod Ereignisse';
$lang['Cash_events_explain'] = 'Mit den Eingabefeldern unten kannst du die Geldmengen einstellen, die f�r selbsterstellte Ereignisse vergeben werden, einstellen.';

$lang['No_events'] = 'Keine Ereignisse vorhanden';
$lang['Existing_events'] = 'Vorhandene Ereignisse';
$lang['Add_an_event'] = 'Ereignis hinzuf�gen';
$lang['Cash_events_updated'] = 'Cash Ereignisse ge�ndert';
$lang['Click_return_cash_events'] = 'Klicke %shier%s, um zu den Cash Ereignissen zur�ckzukehren';

//Reset
$lang['Cash_reset_title'] = 'Cash Mod Zur�cksetzen';
$lang['Cash_reset_explain'] = 'Mit den Eingabefeldern unten kannst du die Geldmenge aller Benutzer zur�cksetzen.';

$lang['Cash_resetting'] = 'Cash Zur�cksetzen';
$lang['User_of'] = 'Benutzer %s von %s';

$lang['Set_checked'] = 'Ausgew�hlte W�hrungen zur�cksetzen';
$lang['Recount_checked'] = 'Ausgew�hlte W�hrungen neu z�hlen';

$lang['Cash_confirm_reset'] = 'Zur�cksetzen der ausgew�hlten W�hrungen best�tigen?<br />Diese Aktion kann nicht r�ckg�ngig gemacht werden';
$lang['Cash_confirm_recount'] = 'Neuz�hlen der ausgew�hlten W�hrungen best�tigen?<br />Diese Aktion kann nicht r�ckg�ngig gemacht werden.<br /><br />Diese Aktion wird Boards mit vielen Benutzern und/oder Themen nicht empfohlen.<br /><br />Es wird empfohlen das Board w�hrend dieser Aktion zu deaktivieren. <br />Du kannst das Board �ber die %sKonfiguration%s deaktivieren.';

$lang['Update_successful'] = '�nderung erfolgreich!';
$lang['Click_return_cash_reset'] = 'Klicke %shier%s, um zur Cash Zur�cksetzung zur�ck zu kehren';
$lang['User_updated'] = '%s ge�ndert<br />';

// Others

// Exchange
$lang['Cash_exchange'] = 'Cash Mod W�hrungswechsel';
$lang['Cash_exchange_explain'] = 'Mit den Eingabefelder unten kannst du den relativen Wert der W�hrungen ver�ndern und Benutzern den W�hrungswechsel erlauben.';

$lang['Exchange_insufficient_currencies'] = 'Du hast nicht genug W�hrungen erstellt um Wechselkurse zu erstellen<br />Mindestens 2 werden vorrausgesetzt';

// Forums
$lang['Forum_cm_settings'] = 'Cash Mod Foren Einstellungen';
$lang['Forum_cm_settings_explain'] = 'In diesem Bereich kannst du einstellen, in welchen Foren der Cash Mod aktiviert ist.';

// Groups
$lang['Cash_groups'] = 'Cash Mod Gruppen';
$lang['Cash_groups_explain'] = 'In diesem Bereich kannst du besondere Privilegien f�r R�nge, Benutzergruppen, Administratoren und Moderatoren einstellen';

$lang['Click_return_cash_groups'] = 'Klicke %shier%s,um zu den Cash Gruppen zur�ckzukehren';
$lang['Cash_groups_updated'] = 'Cash Gruppen ge�ndert';

$lang['Set'] = 'Festlegen';
$lang['Up'] = 'Hoch';
$lang['Down'] = 'Runter';

// Help
$lang['Cmh_support'] = 'Cash Mod Support';
$lang['Cmh_troubleshooting'] = 'Problembehandlung';
$lang['Cmh_upgrading'] = 'Upgrading';
$lang['Cmh_addons'] = 'Erweiterungen';
$lang['Cmh_demo_boards'] = 'Demo Boards';
$lang['Cmh_translations'] = '�bersetzungen';
$lang['Cmh_features'] = 'Funktionen';

$lang['Cmhe_support'] = 'Allgemeine Informationen';
$lang['Cmhe_troubleshooting'] = 'Wenn du Probleme mit dem Cash Mod hast, gucke hier nach ob es L�sungen gibt';
$lang['Cmhe_upgrading'] = 'Du hast momentan Version %s, Upgrades zur neusten Version werden hier gepostet';
$lang['Cmhe_addons'] = 'Eine Liste an MODs, die nutzen von Cash Mod Funktionalit�t machen';
$lang['Cmhe_demo_boards'] = 'Eine Liste von Demo Boards, die den Cash Mod benutzen';
$lang['Cmhe_translations'] = 'Eine Liste von �bersetzungen f�r den Cash Mod';
$lang['Cmhe_features'] = 'Eine Liste von Funktionen des Cash Mods, und Entwicklung von zuk�nftigen Versionen';

// Logs
$lang['Logs'] = 'Cash Mod Logs';
$lang['Logs_explain'] = 'In diesem Bereich kannst du protokollierte Cash Mod Ereignisse einsehen';

// Settings
$lang['Cash_settings'] = 'Cash Mod Einstellungen';
$lang['Cash_settings_explain'] = 'Mit den Eingabefeldern unten kannst du alle W�hrungseinstellungen ver�ndern.';


$lang['Display'] = 'Anzeige';
$lang['Implementation'] = 'Verdienste';
$lang['Allowances'] = 'Taschengelder';
$lang['Allowances_explain'] = 'Taschengelder setzen das Cash Mod Taschengeld Plug-in vorraus';
$lang['Click_return_cash_settings'] = 'Klicke %shier%s um zu den Cash Mod Einstellungen zur�ckzukehren';
$lang['Cash_settings_updated'] = 'Cash Mod Einstellungen ge�ndert';

$lang['Cash_enabled'] = 'W�hrung aktivieren';
$lang['Cash_custom_currency'] = 'Cash Mod W�hrung';
$lang['Cash_image'] = 'Die W�hrung als ein Bild anzeigen';
$lang['Cash_imageurl'] = 'Bild (Relativ zum Icy Phoenix Root-Pfad):';
$lang['Cash_imageurl_explain'] = 'Benutze dies um ein kleines Bild f�r die W�hrung zu verwenden';
$lang['Prefix'] = 'Vorangestellt';
$lang['Postfix'] = 'Nachgestellt';
$lang['Cash_currency_style'] = 'W�hrungsplatzierung f�r den Cash Mod';
$lang['Cash_currency_style_explain'] = 'W�hrungssymbol ' . $lang['Prefix'] . ' oder ' . $lang['Postfix'];
$lang['Cash_display_usercp'] = 'Kontostand im Benutzerprofil anzeigen';
$lang['Cash_display_userpost'] = 'Kontostand im Post Profil anzeigen';
$lang['Cash_display_memberlist'] = 'Kontostand in der Mitglierderliste anzeigen';

$lang['Cash_amount_per_post'] = 'Verdienst f�r ein neues Thema';
$lang['Cash_amount_post_bonus'] = 'Zus�tzlicher Verdienst f�r den Themenautor pro Antwort';
$lang['Cash_amount_per_reply'] = 'Verdienst pro Antwort';
$lang['Cash_amount_per_character'] = 'Verdienst pro Zeichen';
$lang['Cash_amount_per_thanks'] = 'Verdienst pro empfangener Danksagung';
$lang['Cash_maxearn'] = 'Maximaler Verdienst pro Antwort';
$lang['Cash_amount_per_pm'] = 'Verdienst f�r eine Private Nachricht';
$lang['Cash_include_quotes'] = 'Zitate f�r den Verdienst pro Zeichen mitz�hlen';
$lang['Cash_exchangeable'] = 'Benutzern erlauben, W�hrungen zu wechseln';
$lang['Cash_allow_donate'] = 'Benutzern erlauben Geld zu verschenken';
$lang['Cash_allow_mod_edit'] = 'Moderatoren das ver�ndern der Kontost�nde der Benutzer erlauben';
$lang['Cash_allow_negative'] = 'Benutzern erlauben negative Kontost�nde zu haben';

$lang['Cash_allowance_enabled'] = 'Taschengelder aktivieren';
$lang['Cash_allowance_amount'] = 'Taschengeldh�he';
$lang['Cash_allownace_frequency'] = 'Wie oft wird das Taschengeld ausgezahlt?';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_DAY] = 't�glich';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_WEEK] = 'w�chentlich';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_MONTH] = 'monatlich';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_YEAR] = 'j�hrlich';
$lang['Cash_allowance_next'] = 'Zeit bis zum n�chsten Taschengeld';

// Groups
$lang['Cash_status_type'][CASH_GROUPS_DEFAULT] = 'Standard';
$lang['Cash_status_type'][CASH_GROUPS_CUSTOM] = 'Benutzerdefiniert';
$lang['Cash_status_type'][CASH_GROUPS_OFF] = 'Aus';
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
$lang['Cash_clause'][CASH_LOG_DONATE] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> verschenkte <b>%s</b> an <a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a>';

/* argument order: [admin/mod id][admin/mod name][editee id][editee name][Added list][removed list][Set list]

eg.
Joe modified Peter's Cash:
Added 14 gold
Removed $10
Set 3 points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_MODEDIT] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new">%s</a> �nderte <a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a>\'s Kontostand:<br />F�gte <b>%s</b><br />Entfernte <b>%s</b><br />Setzte Kontostand auf <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][currency name]

eg.
Joe created points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_CREATE_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> erstellte <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][currency name]

eg.
Joe deleted $
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_DELETE_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> l�schte <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][old currency name][new currency name]

eg.
Joe renamed silver to gold
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_RENAME_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> benannte <b>%s</b> in <b>%s</b> um';

/* argument order: [admin/mod id][admin/mod name][copied currency name][copied over currency name]

eg.
Joe copied users' gold to points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_COPY_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> wandelte die <b>%s</b> aller Benutzer in <b>%s</b> um';

$lang['Log'] = 'Log';
$lang['Action'] = 'Aktion';
$lang['Type'] = 'Typ';
$lang['Cash_all'] = 'Alle';
$lang['Cash_admin'] = 'Administrator';
$lang['Cash_user'] = 'Benutzer';
$lang['Delete_all_logs'] = 'Alle Eintragungen l�schen';
$lang['Delete_admin_logs'] = 'Administratoreintragungen l�schen';
$lang['Delete_user_logs'] = 'Benutzereintragungen l�schen';
$lang['All'] = 'Alle';
$lang['Day'] = 'Tag';
$lang['Week'] = 'Woche';
$lang['Month'] = 'Monat';
$lang['Year'] = 'Jahr';
$lang['Page'] = 'Seite';
$lang['Per_page'] = 'pro Seite';

// Now for some regular stuff...

// User CP
$lang['Donate'] = 'Schenken';
$lang['Mod_usercash'] = 'Kontostand ver�ndern';
$lang['Exchange'] = 'Wechselkurse';

// Exchange
$lang['Convert'] = 'Umzuwechselnde Menge';
$lang['Select_one'] = 'W�hle eine W�hrung';
$lang['Exchange_lack_of_currencies'] = 'Es gibt nicht genug W�hrungen, damit du wechseln kannst<br />Damit du diese Funktion benutzen kannst, muss der Administrator mindestens 2 W�hrungen erstellen';
$lang['You_have'] = 'Du hast';
$lang['One_worth'] = 'Der Wert von 1 %s betr�gt:';
$lang['Cannot_exchange'] = 'Du kannst momentan %s nicht wechseln';

// Donate
$lang['Amount'] = 'Menge';
$lang['Donate_to'] = 'An %s verschenken';
$lang['Donation_recieved'] = 'Du hast ein Geschenk von %s erhalten';
$lang['Has_donated'] = '%s hat dir [b]%s[/b] geschenkt. \n\n%s schrieb:\n';

// Mod Edit
$lang['Add'] = 'Hinzuf�gen';
$lang['Remove'] = 'Entfernen';
$lang['Omit'] = 'Auslassen';
$lang['Amount'] = 'Kontostand';
$lang['Donate_to'] = 'An %s verschenken';
$lang['Has_moderated'] = '%s hat deine %s moderiert';
$lang['Has_added'] = '[*]Hinzugef�gt: [b]%s[/b]\n';
$lang['Has_removed'] = '[*]Entfernt: [b]%s[/b]\n';
$lang['Has_set'] = '[*]Gesetzt auf: [b]%s[/b]\n';

// That's all folks!

?>