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
* Antonio Mercurio (roland@phpbbplus.it) www.phpbbplus.it
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

// Statistics Information
$lang['Version_info'] = '<br />Statistics Mod Versione %s <a href="http://www.opentools.de/board">Acyd Burn</a>'; //%s = number
$lang['Install_info'] = 'Installato il %s'; //%s = date
$lang['Viewed_info'] = 'Pagina Statistiche visualizzata %d volte'; //%d = number

// Statistics Mod Language File
// $lang['Board_statistics'] = 'Statistiche'; // Page Title

// Module specific Language Variables
$lang['Uses'] = 'Uso(a)';
$lang['Rank'] = 'Posizione';
$lang['Percent'] = 'Percentuale';
$lang['Graph'] = 'Grafico';

// These Language Variables are available for all installed Modules

$lang['How_many'] = 'Quanti';

// Main Language

// Page Header/Footer
//$lang['Install_info'] = 'Installato: %s'; //%s = date
//$lang['Viewed_info'] = 'Pagina statistiche richiamata %d volte'; //%d = number
$lang['Statistics_title'] = 'Statistiche forum';

// Admin Language
$lang['Statistics_management'] = 'Moduli Statistiche';
$lang['Statistics_config'] = 'Configurazione';

// Statistics Config
$lang['Statistics_config_title'] = 'Configurazione statistiche';

$lang['Return_limit'] = 'Limite';
$lang['Return_limit_desc'] = 'Il numero di voci visualizzato in ogni lista. Valore automaticamente impostato verso i vari moduli.';
$lang['Clear_cache'] = ' Svuota Cache Moduli';
$lang['Clear_cache_desc'] = 'Svuota i dati memorizzati nella cache per tutti moduli';
$lang['Modules_directory'] = 'Directory Moduli';
$lang['Modules_directory_desc'] = 'Directory relativa alla home di Icy Phoenix dove sono installati i moduli. N.B. non utilizzate / o \!';

// Status Messages
$lang['Messages'] = 'Messaggi Amministrativi';
$lang['Updated'] = 'Aggiornati';
$lang['Active'] = 'Attiva';
$lang['Activate'] = 'Attiva';
$lang['Activated'] = 'Attivati';
$lang['Not_active'] = 'Non Attivo';
$lang['Deactivate'] = 'Disattiva';
$lang['Deactivated'] = 'Disattivati';
$lang['Install'] = 'Installa';
$lang['Installed'] = 'Installate';
$lang['Uninstall'] = 'Disinstalla';
$lang['Uninstalled'] = 'Disinstallatata';
$lang['Move_up'] = 'Sposta in alto';
$lang['Move_down'] = 'Sposta in basso';
$lang['Update_time'] = 'Tempo aggiornamento';
$lang['Auth_settings_updated'] = 'Impostazione di autorizzazione  - [Sempre aggiornate]';

// Modules Management
$lang['Back_to_management'] = 'Ritorna alla schermata di amministrazione';
$lang['Statistics_modules_title'] = 'Gestione Moduli Statistiche';

$lang['Module_name'] = 'Nome';
$lang['Directory_name'] = 'Nome Directory';
$lang['Status'] = 'Stato';
$lang['Update_time_minutes'] = 'Tempo di aggiornamento in minuti';
$lang['Update_time_desc'] = 'Intervallo di tempo (in Minuti) per l\'aggiornamento dei dati nella cache.';
$lang['Auto_set_update_time'] = 'Determinare e impostare il valore raccomandato per il tempo di aggiornamento dei dati di qualsiasi modulo installato (e attivo). Attenzione: Il tempo necessario potrebbe essere lungo.';
$lang['Uninstall_module'] = 'Disinstalla modulo';
$lang['Uninstall_module_desc'] = 'Imposta il modulo con il flag "non installato", e quindi lo rende disponibile per nuove installazione. Il modulo non viene rimosso dal file system, dovete rimuoverlo manualmente della directory dei moduli.';
$lang['Active_desc'] = 'Opzione che, qualora il modulo sia attivo, questo viene visualizzato in base ai permessi.';
$lang['Go'] = 'Vai';

$lang['Not_allowed_to_install'] = 'Non e\' possibile installare questo modulo. Probabilmente perche\' non avete installato un MOD necessario per installare questo Modulo. Contattare l\'autore del modulo per ulteriori informazioni o consultate eventuale documentazione.';
$lang['Wrong_stats_mod_version'] = 'Non potete installare questo modulo, perche\' la versione di Statistic Mod installata non corrisponde con quella richiesta. Modulo compatibile con la versione %s.'; // replace %s with Version (2.1.3 for example)
$lang['Module_install_error'] = 'Errori riscontrati durante l\'installazione del modulo. Verificate i messaggi di errore.';

$lang['Preview_debug_info'] = 'Modulo generato in %f secondi. %d queries eseguite.'; // Replace %f with seconds and %d with queries
$lang['Update_time_recommend'] = 'Il Mod raccomanda (in base alle informazioni di debug) un periodo di aggiornamento di <b>%d</b> Minuti.'; // Replace %d with Minutes



// Modules

$lang['module_name__stats_overview_section'] = 'Tabella Riassuntiva Statistiche';

$lang['module_name_admin_statistics'] = 'Administrative Statistics';
$lang['Statistic'] = 'Statistiche';
$lang['Value'] = 'Valore';
$lang['Number_posts'] = 'Numero di messaggi';
$lang['Posts_per_day'] = 'Messaggi per giorno';
$lang['Number_topics'] = 'Numero di argomenti';
$lang['Topics_per_day'] = 'Argomenti per giorno';
$lang['Number_users'] = 'Numero di utenti';
$lang['Users_per_day'] = 'Utenti per giorno';
$lang['Board_started'] = 'Forum attivato il';
$lang['Avatar_dir_size'] = 'Dimensione directory Avatar';
$lang['Database_size'] = 'Dimensione Database';
$lang['Gzip_compression'] ='Compressione Gzip';
$lang['Not_available'] = 'Non disponibile';
$lang['Board_Up_Days'] = 'Giorni da cui la Board &egrave; Attiva';
$lang['Latest_Reg_User'] = 'Ultimo Utente Registrato';
$lang['Latest_Reg_User_Date'] = 'Data di Registrazione Ultimo Utente';
$lang['Most_Ever_Online'] = 'Record Utenti in linea';
$lang['Most_Ever_Online_Date'] = 'Data Record Utenti in linea';
$lang['Disk_usage'] = 'Spazio Occupato sul Disco';
$lang['Title'] = 'Media Post';
$lang['Average_Posts'] = 'Media Post';

$lang['module_name_average_posts_per_user'] = 'Media Post';

$lang['module_name_fastest_users'] = 'Utenti Pi&ugrave; Veloci';
$lang['time_on_forum'] = 'Giorni nel Forum';
$lang['posts_day'] = 'Messaggi al Giorno';
$lang['Statistics'] = 'Statistiche';

$lang['module_name_interesting_topics'] = 'Discussioni Pi&ugrave; Interessanti';
$lang['Rate'] = 'Rating (visite/messaggi)';
$lang['Topic'] = $lang['Topic'];

$lang['module_name_latest_topics'] = 'Ultime Discussioni';
$lang['Rank'] = 'Posizione';
$lang['Latest_Topics'] = 'Ultime Discussioni';
$lang['Post_time'] = 'Orario';

$lang['module_name_month_stat'] = 'Statistiche Mensili';
$lang['New_users'] = 'Nuovi Utenti';
$lang['New_replies'] = 'Messaggi';
$lang['New_topics'] = 'Argomenti';
$lang['Avg_Table'] = 'Media Tabella';
$lang['Sum_Table'] = 'Somma Tabella';

$lang['module_name_most_active_topics'] = 'Argomenti Pi&ugrave; Discussi';

$lang['module_name_most_active_topicstarter'] = 'Utenti che hanno iniziato pi&ugrave; Discussioni';

$lang['module_name_most_logged_on_users'] = 'Utenti Connessi Pi&ugrave; a Lungo';
$lang['Time2'] = 'Tempo Connessione';

$lang['module_name_most_used_languages'] = 'Lingue';
$lang['Language'] = 'Lingua';

$lang['module_name_most_used_styles'] = 'Stili';
$lang['Style'] = 'Stile';

$lang['module_name_most_viewed_topics'] = 'Discussioni Pi&ugrave; Viste';

$lang['module_name_new_posts_by_month'] = 'Numero di Messaggi per Mese';
$lang['Month_jan'] = 'Gen';
$lang['Month_feb'] = 'Feb';
$lang['Month_mar'] = 'Mar';
$lang['Month_apr'] = 'Apr';
$lang['Month_may'] = 'Mag';
$lang['Month_jun'] = 'Giu';
$lang['Month_jul'] = 'Lug';
$lang['Month_aug'] = 'Ago';
$lang['Month_sep'] = 'Sey';
$lang['Month_oct'] = 'Ott';
$lang['Month_nov'] = 'Nov';
$lang['Month_dec'] = 'Dic';
$lang['Year'] = 'Anno';
$lang['Month'] = 'Mese';
$lang['Number'] = 'Numero';
$lang['Posts_month'] = 'Numero di Messaggi per Mese';

$lang['module_name_new_topics_by_month'] = 'Numero di Nuove Discussioni per Mese';
$lang['Topics_month'] = 'Numero di Nuove Discussioni per Mese';

$lang['module_name_new_users_by_month'] = 'Numero di Nuovi Utenti per Mese';
$lang['Signup_month'] = 'Numero di Nuovi Utenti per Mese';

$lang['module_name_posting_by_day_of_week'] = 'Traffico per Giorno della Settimana: Messaggi';
$lang['Traffic_posts'] = 'Traffico per Giorno della Settimana: Messaggi';
$lang['Dow'] = 'Giorno';

$lang['module_name_registrations_by_day_of_week'] = 'Traffico per Giorno della Settimana: Nuovi Utenti';
$lang['Traffic_reg'] = 'Traffico per Giorno della Settimana: Nuovi Utenti';
$lang['Dow'] = 'Giorno';
$lang['New_users'] = 'Nuovi Utenti';

$lang['module_name_site_hist_month_top_posters'] = 'Top Posters di questo mese';
$lang['Month_Var'] = '[%s]'; // %s will be replaced by the current Month

$lang['module_name_site_hist_week_top_posters'] = 'Top Posters di questa settimana';
$lang['Week_Var'] = '[%s]'; // %s will be replaced by the current Week

$lang['module_name_top_attachments'] = 'Allegati Pi&ugrave; Scaricati';
$lang['File_name'] = 'Nome Del File';
$lang['File_comment'] = 'Commenti';

$lang['module_name_top_posters'] = 'Top Posters';

$lang['module_name_top_smilies'] = 'Smileys Pi&ugrave; Usate';
$lang['smiley_url'] = 'Immagine Emoticon';
$lang['smiley_code'] = 'Codice Emoticon';

$lang['module_name_top_words'] = 'Parole Pi&ugrave; Usate';
$lang['Word'] = 'Parola';
$lang['Uses2'] = 'Frequenza';

$lang['module_name_topics_by_day_of_week'] = 'Traffico per Giorno della Settimana: Argomenti';
$lang['Traffic_topics'] = 'Traffico per Giorno della Settimana: Argomenti';

$lang['module_name_users_from_where'] = 'Residenza Utenti';
$lang['From_where_title'] = 'Residenza Utenti';
$lang['From_where'] = 'Residenza';

$lang['module_name_users_gender'] = 'Sesso';
$lang['Users'] = 'Utenti';

$lang['module_name_users_ranks'] = 'Livelli';
$lang['Rank_image'] = 'Immagine Livello';
$lang['Rank_range'] = 'Messaggi Livello';
$lang['Rank_special'] = 'Livello Speciale';

?>