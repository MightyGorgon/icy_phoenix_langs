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
$lang['Cmcat_main'] = 'Principale';
$lang['Cmcat_addons'] = 'Moduli';
$lang['Cmcat_other'] = 'Altro';
$lang['Cmcat_help'] = 'Aiuto';

$lang['Cash_Configuration'] = 'Configurazione';
$lang['Cash_Currencies'] = 'Valute';
$lang['Cash_Exchange'] = 'Scambio';
$lang['Cash_Events'] = 'Eventi';
$lang['Cash_Forums'] = 'Forums';
$lang['Cash_Groups'] = 'Gruppi';
$lang['Cash_Help'] = 'Help';
$lang['Cash_Logs'] = 'Log';
$lang['Cash_Settings'] = 'Impostazioni';

$lang['Cmenu_cash_config'] = 'Impostazioni generali applicate a tutte le valute';
$lang['Cmenu_cash_currencies'] = 'Aggiungi, rimuovi o riordina valute';
$lang['Cmenu_cash_settings'] = 'Impostazioni specifiche per ciascuna valuta';
$lang['Cmenu_cash_events'] = 'Quantit&agrave; di valuta da assegnare per evento utente';
$lang['Cmenu_cash_reset'] = 'Azzera o ricalcola Cassa';
$lang['Cmenu_cash_exchange'] = 'Abilita/Disabilita Scambio Valute, tasso di scambio';
$lang['Cmenu_cash_forums'] = 'Attiva o disattiva le valute per ciascun forum';
$lang['Cmenu_cash_groups'] = 'Impostazioni personalizzate per ciascun gruppo utente, livello o rango';
$lang['Cmenu_cash_log'] = 'Visualizza/Elimina operazioni memorizzate nel log del Cash Mod ';
$lang['Cmenu_cash_help'] = 'Help Cash Mod';

// Config
$lang['Cash_config'] = 'Configurazione Cash Mod ';
$lang['Cash_config_explain'] = 'In questa sezione &egrave; possibile impostare i parametri per il  Cash Mod .';

$lang['Cash_admincp'] = 'Modalit&agrave; Pannello di controllo per Cash Mod Admin';
$lang['Cash_adminnavbar'] = 'Barra di navigazione per Cash Mod';
$lang['Sidebar'] = 'Barra laterale';
$lang['Menu'] = 'Men&ugrave;';

$lang['Messages'] = 'Messaggi';
$lang['Spam'] = 'Spam';
$lang['Click_return_cash_config'] = 'Clicca %sQUI%s per  ritornare alla configurazione del Cash Mod ';
$lang['Cash_config_updated'] = 'Configurazione del Cash Mod aggiornata';
$lang['Cash_disabled'] = 'Disabilita Cash Mod';
$lang['Cash_message'] = 'Mostra guadagni nella schermata di conferma Nuovo Messaggio / Risposta.';
$lang['Cash_display_message'] = 'Messaggio da visualizzare per i guadagni';
$lang['Cash_display_message_explain'] = 'Deve essere presente un "%s" all\'interno del messaggio';
$lang['Cash_spam_disable_num'] = 'Numero di messaggi inviati prima di disabilitare i guadagni (prevenzione spam)';
$lang['Cash_spam_disable_time'] = 'Periodo temporale in cui devono essere conteggiati i messaggi (ore)';
$lang['Cash_spam_disable_message'] = 'Messaggio di avviso per disattivazione guadagni';

// Currencies
$lang['Cash_currencies'] = 'Nomi valuta per Cash Mod ';
$lang['Cash_currencies_explain'] = 'In questa sezione &egrave; possibile gestire le varie valute.';

$lang['Click_return_cash_currencies'] = 'Clicca %sQUI%s per ritornare alla gestione delle valute per Cash Mod ';
$lang['Cash_currencies_updated'] = 'Valute per Cash Mod aggiornate';
$lang['Cash_field'] = 'Campo';
$lang['Cash_currency'] = 'Valuta';
$lang['Name_of_currency'] = 'Nome per valuta';
$lang['Default'] = 'Default';
$lang['Cash_order'] = 'Ordinamento';
$lang['Cash_set_all'] = 'Imposta per tutti gli utenti';
$lang['Cash_delete'] = 'Cancella valuta';
$lang['Decimals'] = 'Decimali';

$lang['Cash_confirm_copy'] = 'Copia tutti i dati utenti da %s a %s <br /> Questa operazione non pu&ograve; essere annullata';
$lang['Cash_confirm_delete'] = 'Cancella %s?<br />Questa opzione non pu&ograve; essere annullata';

$lang['Cash_copy_currency'] = 'Copia Dati Valuta';

$lang['Cash_new_currency'] = 'Crea nuova valuta';
$lang['Cash_currency_dbfield'] = 'Nome del campo per valuta';
$lang['Cash_currency_decimals'] = 'Numero di decimali per la valuta';
$lang['Cash_currency_default'] = 'Valore predefinito per la valuta';

$lang['Bad_dbfield'] = 'Nome campo non valido: deve essere nel formato \'user_nome\'<br /><br />%s<br /><br />Esempi:<br />user_points<br />user_cash<br />user_money<br />user_warnings<br /><br />';

// 0 currencies (most admin panels won't work... )
$lang['Insufficient_currencies'] = 'Dovete creare almeno una valuta prima di modificare i parametri';

// Add-ons ?

// Events
$lang['Cash_events'] = 'Eventi per Cash Mod ';
$lang['Cash_events_explain'] = 'In questa sezione potete impostare dei valori di valuta da assegnare per eventi personalizzati.';

$lang['No_events'] = 'Nessun evento in elenco';
$lang['Existing_events'] = 'Eventi esistenti ';
$lang['Add_an_event'] = 'Aggiungi un evento';
$lang['Cash_events_updated'] = 'Evento per Cash Mod aggiornato';
$lang['Click_return_cash_events'] = 'Clicca %sQUI%s per ritornare agli eventi per il Cash Mod';

//Reset
$lang['Cash_reset_title'] = 'Reset Cash Mod ';
$lang['Cash_reset_explain'] = 'In questa sezione &egrave; possibile effettuare un reset globale per i valori delle varie valute';

$lang['Cash_resetting'] = 'Reset Cash in corso';
$lang['User_of'] = 'Utente %s di %s';

$lang['Set_checked'] = 'Imposta le valute selezionate';
$lang['Recount_checked'] = 'Ricalcola le valute selezionate';

$lang['Cash_confirm_reset'] = 'Confermate il reset delle valute selezionate? <br />Questa operazione non pu&ograve; essere annullata';
$lang['Cash_confirm_recount'] = 'Confermate il ricalcolo delle valute selezionate? <br />Questa operazione non pu&ograve; essere annullata..<br /><br />Questa operazione non &egrave; raccomandata per forum con un numero elevato di utenti e/o argomenti.<br /><br />Si raccomanda di disabilitare il forum durante questa operazione. <br /> Potete disabilitare il forum nella voce %sConfigurazione%s';

$lang['Update_successful'] = 'Aggiornamento completato!';
$lang['Click_return_cash_reset'] = 'Clicca %sQUI%s per tornare al reset per il Cash Mod';
$lang['User_updated'] = '%s aggiornato(i)<br />';

// Others

// Exchange
$lang['Cash_exchange'] = 'Scambio Cash Mod ';
$lang['Cash_exchange_explain'] = 'In questa sezione potete attivare lo scambio tra le valute e impostare il tasso di cambio.';

$lang['Exchange_insufficient_currencies'] = 'Non avete creato abbastanza Valute per poter attivare lo scambio <br /> Sono necessarie almeno 2 valute';

// Forums
$lang['Forum_cm_settings'] = 'Impostazione forum per Cash Mod';
$lang['Forum_cm_settings_explain'] = 'Da questo pannello potete impostare in quali forum il Cash Mod &egrave; attivo';

// Groups
$lang['Cash_groups'] = 'Gruppi per Cash Mod ';
$lang['Cash_groups_explain'] = 'In questo pannello potete impostare i privilegi, relativi al Cash Mod, per livelli, gruppi utenti, admin e moderatori';

$lang['Click_return_cash_groups'] = 'Clicca %sQUI%s per ritornare alla gestione di Gruppo per il Cash Mod';
$lang['Cash_groups_updated'] = 'Aggiornamento di gruppo per Cash mod completato';

$lang['Set'] = 'Imposta';
$lang['Up'] = 'Su';
$lang['Down'] = 'Gi&ugrave;';

// Help
$lang['Cmh_support'] = 'Supporto Cash Mod';
$lang['Cmh_troubleshooting'] = 'Supporto';
$lang['Cmh_upgrading'] = 'Aggiornamento';
$lang['Cmh_addons'] = 'Add-Ons';
$lang['Cmh_demo_boards'] = 'Forum Demo';
$lang['Cmh_translations'] = 'Traduzione';
$lang['Cmh_features'] = 'Caratteristiche';

$lang['Cmhe_support'] = 'Informazioni Generali';
$lang['Cmhe_troubleshooting'] = 'Se avete problemi con il Cash Mod, verificate qui per eventuali fix';
$lang['Cmhe_upgrading'] = 'Avete installato la versione %s, gli aggiornamenti saranno inseriti qui';
$lang['Cmhe_addons'] = 'Un elenco di Mod che utilizzano le opzioni di Cash Mod';
$lang['Cmhe_demo_boards'] = 'Un elenco di forum che utilizzando  Cash Mod';
$lang['Cmhe_translations'] = 'Un elenco di traduzioni per Cash Mod';
$lang['Cmhe_features'] = 'Caratteristiche presenti e previste per nuove versioni';

// Logs
$lang['Logs'] = 'Log Cash Mod ';
$lang['Logs_explain'] = 'In questa sezione sono visualizzabili gli eventi memorizzati per  Cash Mod ';

// Settings
$lang['Cash_settings'] = 'Impostazioni Cash Mod ';
$lang['Cash_settings_explain'] = 'In questa sezione potrete impostare i diversi parametri delle varie valute.';


$lang['Display'] = 'Visualizzazione';
$lang['Implementation'] = 'Parametri generali';
$lang['Allowances'] = 'Premi';
$lang['Allowances_explain'] = 'L\'assegnazione di premi richiede il Plugin "Cash Mod Allowances" ';
$lang['Click_return_cash_settings'] = 'Clicca %sQUI%s per ritornare alla sezione impostazioni per Cash Mod ';
$lang['Cash_settings_updated'] = 'Impostazioni Cash Mod aggiornate';

$lang['Cash_enabled'] = 'Abilita valuta';
$lang['Cash_custom_currency'] = 'Valuta personalizzata per il Cash Mod';
$lang['Cash_image'] = 'Mostra la valuta come immagine';
$lang['Cash_imageurl'] = 'Immagine (Relativa al path di Icy Phoenix):';
$lang['Cash_imageurl_explain'] = 'Utilizzate questo parametro per associare una piccola immagine con la Valuta';
$lang['Prefix'] = 'Prefisso';
$lang['Postfix'] = 'Suffisso';
$lang['Cash_currency_style'] = 'Stile Valuta per il Cash Mod';
$lang['Cash_currency_style_explain'] = 'Simbolo Valuta come  ' . $lang['Prefix'] . ' o ' . $lang['Postfix'];
$lang['Cash_display_usercp'] = 'Mostra guadagni nel pannello di controllo utente';
$lang['Cash_display_userpost'] = 'Mostra guadagni nel pannello invio messaggi';
$lang['Cash_display_memberlist'] = 'Mostra guadagni nell\'elenco utenti';

$lang['Cash_amount_per_post'] = 'Valore valuta guadagnato per nuovo argomento';
$lang['Cash_amount_post_bonus'] = 'Valore valuta guadagnato per risposta per l\'autore dell\'argomento';
$lang['Cash_amount_per_reply'] = 'Valore valuta guadagnato per risposta';
$lang['Cash_amount_per_character'] = 'Valore valuta guadagnato per carattere';
$lang['Cash_amount_per_thanks'] = 'Valore valuta guadagnato per ringraziamento ricevuto';
$lang['Cash_maxearn'] = 'Massimo Valore valuta guadagnato per invio messaggio';
$lang['Cash_amount_per_pm'] = 'Valore valuta guadagnato per messaggio privato';
$lang['Cash_include_quotes'] = 'Conteggio citazione per il calcolo valuta per carattere';
$lang['Cash_exchangeable'] = 'Permetti il cambio valuta per utenti';
$lang['Cash_allow_donate'] = 'Permetti la donazione valuta tra utenti';
$lang['Cash_allow_mod_edit'] = 'Permetti ai moderatori di modificare la quantit&agrave; della valuta dell\'utente';
$lang['Cash_allow_negative'] = 'Permetti valori negativi per la valuta';

$lang['Cash_allowance_enabled'] = 'Abilita premi';
$lang['Cash_allowance_amount'] = 'Valore guadagnato come premio';
$lang['Cash_allownace_frequency'] = 'Frequenza assegnazione premi';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_DAY] = 'Giorno';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_WEEK] = 'Settimana';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_MONTH] = 'Mese';
$lang['Cash_allownace_frequencies'][CASH_ALLOW_YEAR] = 'Anno';
$lang['Cash_allowance_next'] = 'Tempo mancante all\'assegnazione dei premi';

// Groups
$lang['Cash_status_type'][CASH_GROUPS_DEFAULT] = 'Predefinito';
$lang['Cash_status_type'][CASH_GROUPS_CUSTOM] = 'Personalizzato';
$lang['Cash_status_type'][CASH_GROUPS_OFF] = 'Off';
$lang['Cash_status'] = 'Stato';

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
$lang['Cash_clause'][CASH_LOG_DONATE] = '<a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> regala <b>%s</b> a <a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a>';

/* argument order: [admin/mod id][admin/mod name][editee id][editee name][Added list][removed list][Set list]

eg.
Joe modified Peter's Cash:
Added 14 gold
Removed $10
Set 3 points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_MODEDIT] = '<a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new">%s</a> ha modificato la Cassa di <a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a>\:<br />Aggiunti <b>%s</b><br />Cancellati <b>%s</b><br />Impostato a <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][currency name]

eg.
Joe created points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_CREATE_CURRENCY] = '<a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> ha creato <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][currency name]

eg.
Joe deleted $
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_DELETE_CURRENCY] = '<a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> ha cancellato <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][old currency name][new currency name]

eg.
Joe renamed silver to gold
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_RENAME_CURRENCY] = '<a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> ha rinominato <b>%s</b> in <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][copied currency name][copied over currency name]

eg.
Joe copied users' gold to points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_COPY_CURRENCY] = '<a href="' . IP_ROOT_PATH . CMS_PAGE_PROFILE . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> ha copiato i <b>%s</b> dell\'utente in <b>%s</b>';

$lang['Log'] = 'Log';
$lang['Action'] = 'Azione';
$lang['Type'] = 'Tipo';
$lang['Cash_all'] = 'Tutto';
$lang['Cash_admin'] = 'Admin';
$lang['Cash_user'] = 'Utente';
$lang['Delete_all_logs'] = 'Cancella tutti i log';
$lang['Delete_admin_logs'] = 'Cancella i log degli admin';
$lang['Delete_user_logs'] = 'Cancella i log degli utenti';
$lang['All'] = 'Tutti';
$lang['Day'] = 'Giorno';
$lang['Week'] = 'Settimana';
$lang['Month'] = 'Mese';
$lang['Year'] = 'Anno';
$lang['Page'] = 'Pagina';
$lang['Per_page'] = 'per pagina';

// Now for some regular stuff...

// User CP
$lang['Donate'] = 'Regala';
$lang['Mod_usercash'] = 'Modifica Saldo';
$lang['Exchange'] = 'Cambio';

// Exchange
$lang['Convert'] = 'Converti';
$lang['Select_one'] = 'Seleziona ';
$lang['Exchange_lack_of_currencies'] = 'Non ci sono abbastanza tipi di valuta per poter effettuare i cambi <br /> Per abilitare questa opzione devono essere attivi almeno due tipi di valuta. <br />Richiedete l\'opzione all\'amministrazione.';
$lang['You_have'] = 'Hai';
$lang['One_worth'] = 'Un %s vale:';
$lang['Cannot_exchange'] = 'Non puoi cambiare attualmente %s ';

// Donate
$lang['Amount'] = 'Quantit&agrave;';
$lang['Donate_to'] = 'Regala a %s';
$lang['Donation_recieved'] = 'Avete ricevuto una donazione da %s';
$lang['Has_donated'] = '%s ti ha regalato [b]%s[/b].' . "\n\n" . '%s ha scritto: ' . "\n";

// Mod Edit
$lang['Add'] = 'Aggiungi';
$lang['Remove'] = 'Rimuovi';
$lang['Omit'] = 'Nessuna Operazione';
$lang['Amount'] = 'Quantit&agrave;';
$lang['Donate_to'] = 'Regala a %s';
$lang['Has_moderated'] = '%s ha modificato il saldo dei tuoi %s';
$lang['Has_added'] = '[*]Aggiunti: [b]%s[/b]' . "\n";
$lang['Has_removed'] = '[*]Rimossi: [b]%s[/b]' . "\n";
$lang['Has_set'] = '[*]Impostato a: [b]%s[/b]' . "\n";

// That's all folks!

?>