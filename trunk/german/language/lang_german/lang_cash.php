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
$lang['Cmcat_main'] = 'Allgemeines';
$lang['Cmcat_addons'] = 'Erweiterungen';
$lang['Cmcat_other'] = 'Sonstiges';
$lang['Cmcat_help'] = 'Hilfe';

$lang['Cash_Configuration'] = 'Cash Konfiguration';
$lang['Cash_Currencies'] = 'Cash Währungen';
$lang['Cash_Exchange'] = 'Cash Währungswechsel';
$lang['Cash_Events'] = 'Cash Ereignisse';
$lang['Cash_Forums'] = 'Cash Foren';
$lang['Cash_Groups'] = 'Cash Gruppen';
$lang['Cash_Help'] = 'Cash Hilfe';
$lang['Cash_Logs'] = 'Cash Logs';
$lang['Cash_Settings'] = 'Cash Einstellungen';

$lang['Cmenu_cash_config'] = 'Globale Cash Mod Einstellungen die alle Währungen betreffen';
$lang['Cmenu_cash_currencies'] = 'Andere Währungen hinzufügen, löschen oder anders ordnen';
$lang['Cmenu_cash_settings'] = 'Währungsspezifische Einstellungen';
$lang['Cmenu_cash_events'] = 'Die Geld Mengen, die bei Ereignissen vergeben werden, einstellen';
$lang['Cmenu_cash_reset'] = 'Kontostände zurücksetzen oder neu berechnen';
$lang['Cmenu_cash_exchange'] = 'Währungswechsel aktivieren/deaktivieren, Wechselkurse einstellen';
$lang['Cmenu_cash_forums'] = 'Währungen je Forum an- oder ausschalten';
$lang['Cmenu_cash_groups'] = 'Einstellungen für bestimmte Benutzergruppen, Ränge und Benutzerebenen';
$lang['Cmenu_cash_log'] = 'Protokollierte Cash Mod Aktionen';
$lang['Cmenu_cash_help'] = 'Cash Mod Hilfe';

// Config
$lang['Cash_config'] = 'Cash Mod Konfiguration';
$lang['Cash_config_explain'] = 'Mit den Eingabefelder unten kannst du deine Cash Mod Konfiguration verändern.';

$lang['Cash_admincp'] = 'Cash Mod Administrations Modus';
$lang['Cash_adminnavbar'] = 'Cash Mod Navigation';
$lang['Sidebar'] = 'Sidebar';
$lang['Menu'] = 'Menü';

$lang['Messages'] = 'Nachrichten';
$lang['Spam'] = 'Spam';
$lang['Click_return_cash_config'] = 'Klicke %shier%s, um zum Cash Mod zurückzukehren.';
$lang['Cash_config_updated'] = 'Cash Mod Konfiguration geändert.';
$lang['Cash_disabled'] = 'Cash Mod deaktivieren';
$lang['Cash_message'] = 'Verdienst auf dem Beitrags-Bestätigungs Bildschirm anzeigen.';
$lang['Cash_display_message'] = 'Nachricht zum anzeigen der Benutzerverdienste';
$lang['Cash_display_message_explain'] = 'Es muss exakt ein "%s" enthalten sein.';
$lang['Cash_spam_disable_num'] = 'Anzahl an Posts, die zur Verdienstsperrung führt (Spamvorsorge)';
$lang['Cash_spam_disable_time'] = 'Zeitspanne bis zur Entsperrung der Verdienste (Stunden)';
$lang['Cash_spam_disable_message'] = 'Spamwarnung im Falle von Verdienstsperrung';

// Currencies
$lang['Cash_currencies'] = 'Cash Mod Währungen';
$lang['Cash_currencies_explain'] = 'Mit den Eingabefeldern unten kannst du deine Währungen verändern.';

$lang['Click_return_cash_currencies'] = 'Klicke %shier%s, um zu den Cash Mod Währungen zurückzukehren.';
$lang['Cash_currencies_updated'] = 'Cash Mod Währungen geändert';
$lang['Cash_field'] = 'Spaltenname';
$lang['Cash_currency'] = 'Währung';
$lang['Name_of_currency'] = 'Währungsname';
$lang['Default'] = 'Anfangswert';
$lang['Cash_order'] = 'Reihenfolge';
$lang['Cash_set_all'] = 'Für alle Benutzer festlegen';
$lang['Cash_delete'] = 'Währung löschen';
$lang['Decimals'] = 'Nachkommastellen';

$lang['Cash_confirm_copy'] = 'Die %s aller Benutzer in %s umwandeln?<br />Diese Aktion kann nicht rückgängig gemacht werden';
$lang['Cash_confirm_delete'] = '%s löschen?<br />Diese Aktion kann nicht rückgängig gemacht werden';

$lang['Cash_copy_currency'] = 'Währungsdaten kopieren';

$lang['Cash_new_currency'] = 'Neue Währung erstellen';
$lang['Cash_currency_dbfield'] = 'Datenbank Spaltenname der Währung';
$lang['Cash_currency_decimals'] = 'Anzahl an Nachkommastellen für die Währung';
$lang['Cash_currency_default'] = 'Anfangswert für die Währung';

$lang['Bad_dbfield'] = 'Fehlerhafter Spaltenname, der Spaltenname muss in der Form \'user_word\' sein.<br /><br />%s<br /><br />Beispiele:<br />user_points<br />user_cash<br />user_money<br />user_warnings<br /><br />';

// 0 currencies (most admin panels won't work... )
$lang['Insufficient_currencies'] = 'Du musst Währungen erstellen bevor du Einstellungen ändern kannst';

// Add-ons ?

// Events
$lang['Cash_events'] = 'Cash Mod Ereignisse';
$lang['Cash_events_explain'] = 'Mit den Eingabefeldern unten kannst du die Geldmengen einstellen, die für selbsterstellte Ereignisse vergeben werden, einstellen.';

$lang['No_events'] = 'Keine Ereignisse vorhanden';
$lang['Existing_events'] = 'Vorhandene Ereignisse';
$lang['Add_an_event'] = 'Ereignis hinzufügen';
$lang['Cash_events_updated'] = 'Cash Ereignisse geändert';
$lang['Click_return_cash_events'] = 'Klicke %shier%s, um zu den Cash Ereignissen zurückzukehren.';

//Reset
$lang['Cash_reset_title'] = 'Cash Mod Zurücksetzen';
$lang['Cash_reset_explain'] = 'Mit den Eingabefeldern unten kannst du die Geldmenge aller Benutzer zurücksetzen.';

$lang['Cash_resetting'] = 'Cash Zurücksetzen';
$lang['User_of'] = 'Benutzer %s von %s';

$lang['Set_checked'] = 'Ausgewählte Währungen zurücksetzen';
$lang['Recount_checked'] = 'Ausgewählte Währungen neu zählen';

$lang['Cash_confirm_reset'] = 'Zurücksetzen der ausgewählten Währungen bestätigen?<br />Diese Aktion kann nicht rückgängig gemacht werden';
$lang['Cash_confirm_recount'] = 'Neuzählen der ausgewählten Währungen bestätigen?<br />Diese Aktion kann nicht rückgängig gemacht werden.<br /><br />Diese Aktion wird Boards mit vielen Benutzern und/oder Themen nicht empfohlen.<br /><br />Es wird empfohlen das Board während dieser Aktion zu deaktivieren. <br />Du kannst das Board über die %sKonfiguration%s deaktivieren.';

$lang['Update_successful'] = 'Änderung erfolgreich!';
$lang['Click_return_cash_reset'] = 'Klicke %shier%s, um zur Cash Zurücksetzung zurück zu kehren';
$lang['User_updated'] = '%s geändert<br />';

// Others

// Exchange
$lang['Cash_exchange'] = 'Cash Mod Währungswechsel';
$lang['Cash_exchange_explain'] = 'Mit den Eingabefelder unten kannst du den relativen Wert der Währungen verändern und Benutzern den Währungswechsel erlauben.';

$lang['Exchange_insufficient_currencies'] = 'Du hast nicht genug Währungen erstellt um Wechselkurse zu erstellen<br />Mindestens 2 werden vorrausgesetzt';

// Forums
$lang['Forum_cm_settings'] = 'Cash Mod Foren Einstellungen';
$lang['Forum_cm_settings_explain'] = 'In diesem Bereich kannst du einstellen, in welchen Foren der Cash Mod aktiviert ist.';

// Groups
$lang['Cash_groups'] = 'Cash Mod Gruppen';
$lang['Cash_groups_explain'] = 'In diesem Bereich kannst du besondere Privilegien für Ränge, Benutzergruppen, Administratoren und Moderatoren einstellen';

$lang['Click_return_cash_groups'] = 'Klicke %shier%s,um zu den Cash Gruppen zurückzukehren.';
$lang['Cash_groups_updated'] = 'Cash Gruppen geändert';

$lang['Set'] = 'Festlegen';
$lang['Up'] = 'Hoch';
$lang['Down'] = 'Runter';

// Help
$lang['Cmh_support'] = 'Cash Mod Support';
$lang['Cmh_troubleshooting'] = 'Problembehandlung';
$lang['Cmh_upgrading'] = 'Upgrading';
$lang['Cmh_addons'] = 'Erweiterungen';
$lang['Cmh_demo_boards'] = 'Demo Boards';
$lang['Cmh_translations'] = 'Übersetzungen';
$lang['Cmh_features'] = 'Funktionen';

$lang['Cmhe_support'] = 'Allgemeine Informationen';
$lang['Cmhe_troubleshooting'] = 'Wenn du Probleme mit dem Cash Mod hast, gucke hier nach ob es Lösungen gibt';
$lang['Cmhe_upgrading'] = 'Du hast momentan Version %s, Upgrades zur neuesten Version werden hier gepostet';
$lang['Cmhe_addons'] = 'Eine Liste an MODs, die nutzen von Cash Mod Funktionalität machen';
$lang['Cmhe_demo_boards'] = 'Eine Liste von Demo Boards, die den Cash Mod benutzen';
$lang['Cmhe_translations'] = 'Eine Liste von Übersetzungen für den Cash Mod';
$lang['Cmhe_features'] = 'Eine Liste von Funktionen des Cash Mods, und Entwicklung von zukünftigen Versionen';

// Logs
$lang['Logs'] = 'Cash Mod Logs';
$lang['Logs_explain'] = 'In diesem Bereich kannst du protokollierte Cash Mod Ereignisse einsehen';

// Settings
$lang['Cash_settings'] = 'Cash Mod Einstellungen';
$lang['Cash_settings_explain'] = 'Mit den Eingabefeldern unten kannst du alle Währungseinstellungen verändern.';


$lang['Display'] = 'Anzeige';
$lang['Implementation'] = 'Verdienste';
$lang['Allowances'] = 'Taschengelder';
$lang['Allowances_explain'] = 'Taschengelder setzen das Cash Mod Taschengeld Plug-in vorraus';
$lang['Click_return_cash_settings'] = 'Klicke %shier%s, um zu den Cash Mod Einstellungen zurückzukehren.';
$lang['Cash_settings_updated'] = 'Cash Mod Einstellungen geändert';

$lang['Cash_enabled'] = 'Währung aktivieren';
$lang['Cash_custom_currency'] = 'Cash Mod Währung';
$lang['Cash_image'] = 'Die Währung als ein Bild anzeigen';
$lang['Cash_imageurl'] = 'Bild (Relativ zum Icy Phoenix Root-Pfad):';
$lang['Cash_imageurl_explain'] = 'Benutze dies um ein kleines Bild für die Währung zu verwenden';
$lang['Prefix'] = 'Vorangestellt';
$lang['Postfix'] = 'Nachgestellt';
$lang['Cash_currency_style'] = 'Währungsplatzierung für den Cash Mod';
$lang['Cash_currency_style_explain'] = 'Währungssymbol ' . $lang['Prefix'] . ' oder ' . $lang['Postfix'];
$lang['Cash_display_usercp'] = 'Kontostand im Benutzerprofil anzeigen';
$lang['Cash_display_userpost'] = 'Kontostand im Post Profil anzeigen';
$lang['Cash_display_memberlist'] = 'Kontostand in der Mitglierderliste anzeigen';

$lang['Cash_amount_per_post'] = 'Verdienst für ein neues Thema';
$lang['Cash_amount_post_bonus'] = 'Zusätzlicher Verdienst für den Themenautor pro Antwort';
$lang['Cash_amount_per_reply'] = 'Verdienst pro Antwort';
$lang['Cash_amount_per_character'] = 'Verdienst pro Zeichen';
$lang['Cash_amount_per_thanks'] = 'Verdienst pro empfangener Danksagung';
$lang['Cash_maxearn'] = 'Maximaler Verdienst pro Antwort';
$lang['Cash_amount_per_pm'] = 'Verdienst für eine Private Nachricht';
$lang['Cash_include_quotes'] = 'Zitate für den Verdienst pro Zeichen mitzählen';
$lang['Cash_exchangeable'] = 'Benutzern erlauben, Währungen zu wechseln';
$lang['Cash_allow_donate'] = 'Benutzern erlauben Geld zu verschenken';
$lang['Cash_allow_mod_edit'] = 'Moderatoren das verändern der Kontostände der Benutzer erlauben';
$lang['Cash_allow_negative'] = 'Benutzern erlauben negative Kontostände zu haben';

$lang['Cash_allowance_enabled'] = 'Taschengelder aktivieren';
$lang['Cash_allowance_amount'] = 'Taschengeldhöhe';
$lang['Cash_allownace_frequency'] = 'Wie oft wird das Taschengeld ausgezahlt?';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_DAY] = 'täglich';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_WEEK] = 'wöchentlich';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_MONTH] = 'monatlich';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_YEAR] = 'jährlich';
$lang['Cash_allowance_next'] = 'Zeit bis zum nächsten Taschengeld';

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
$lang['Cash_clause'][CASH_LOG_DONATE] = '<a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> verschenkte <b>%s</b> an <a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a>';

/* argument order: [admin/mod id][admin/mod name][editee id][editee name][Added list][removed list][Set list]

eg.
Joe modified Peter's Cash:
Added 14 gold
Removed $10
Set 3 points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_MODEDIT] = '<a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new">%s</a> änderte <a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a>\'s Kontostand:<br />Fügte <b>%s</b><br />Entfernte <b>%s</b><br />Setzte Kontostand auf <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][currency name]

eg.
Joe created points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_CREATE_CURRENCY] = '<a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> erstellte <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][currency name]

eg.
Joe deleted $
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_DELETE_CURRENCY] = '<a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> löschte <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][old currency name][new currency name]

eg.
Joe renamed silver to gold
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_RENAME_CURRENCY] = '<a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> benannte <b>%s</b> in <b>%s</b> um';

/* argument order: [admin/mod id][admin/mod name][copied currency name][copied over currency name]

eg.
Joe copied users' gold to points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_COPY_CURRENCY] = '<a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> wandelte die <b>%s</b> aller Benutzer in <b>%s</b> um';

$lang['Log'] = 'Log';
$lang['Action'] = 'Aktion';
$lang['Type'] = 'Typ';
$lang['Cash_all'] = 'Alle';
$lang['Cash_admin'] = 'Administrator';
$lang['Cash_user'] = 'Benutzer';
$lang['Delete_all_logs'] = 'Alle Eintragungen löschen';
$lang['Delete_admin_logs'] = 'Administratoreintragungen löschen';
$lang['Delete_user_logs'] = 'Benutzereintragungen löschen';
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
$lang['Mod_usercash'] = 'Kontostand verändern';
$lang['Exchange'] = 'Wechselkurse';

// Exchange
$lang['Convert'] = 'Umzuwechselnde Menge';
$lang['Select_one'] = 'Wähle eine Währung';
$lang['Exchange_lack_of_currencies'] = 'Es gibt nicht genug Währungen, damit du wechseln kannst<br />Damit du diese Funktion benutzen kannst, muss der Administrator mindestens 2 Währungen erstellen';
$lang['You_have'] = 'Du hast';
$lang['One_worth'] = 'Der Wert von 1 %s beträgt:';
$lang['Cannot_exchange'] = 'Du kannst momentan %s nicht wechseln';

// Donate
$lang['Amount'] = 'Menge';
$lang['Donate_to'] = 'An %s verschenken';
$lang['Donation_recieved'] = 'Du hast ein Geschenk von %s erhalten';
$lang['Has_donated'] = '%s hat dir [b]%s[/b] geschenkt.' . "\n\n" . '%s schrieb: ' . "\n";

// Mod Edit
$lang['Add'] = 'Hinzufügen';
$lang['Remove'] = 'Entfernen';
$lang['Omit'] = 'Auslassen';
$lang['Amount'] = 'Kontostand';
$lang['Donate_to'] = 'An %s verschenken';
$lang['Has_moderated'] = '%s hat deine %s moderiert';
$lang['Has_added'] = '[*]Hinzugefügt: [b]%s[/b]' . "\n";
$lang['Has_removed'] = '[*]Entfernt: [b]%s[/b]' . "\n";
$lang['Has_set'] = '[*]Gesetzt auf: [b]%s[/b]' . "\n";

// That's all folks!

?>