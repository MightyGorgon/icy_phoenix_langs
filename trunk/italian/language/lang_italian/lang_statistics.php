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

$lang = array_merge($lang, array(
	// Statistics Information
	'Version_info' => '<br />Statistiche programmate da <a href="http://www.icyphoenix.com/">Mighty Gorgon</a> basate su Statistics Mod Versione %s <a href="http://www.opentools.de/board">Acyd Burn</a>', //%s = number
	'Install_info' => 'Installato il %s', //%s = date
	'Viewed_info' => 'Pagina Statistiche visualizzata %d volte', //%d = number

	// Statistics Mod Language File
	//'Board_statistics' => 'Statistiche', // Page Title

	// Module specific Language Variables
	'Uses' => 'Uso(a)',
	'Rank' => 'Posizione',
	'Percent' => 'Percentuale',
	'Graph' => 'Grafico',

	// These Language Variables are available for all installed Modules
	'How_many' => 'Quanti',

	// Main Language

// Page Header/Footer
	//'Install_info' => 'Installato: %s', //%s = date
	//'Viewed_info' => 'Pagina statistiche richiamata %d volte', //%d = number
	'Statistics_title' => 'Statistiche forum',

	// Admin Language
	'Statistics_management' => 'Moduli Statistiche',
	'Statistics_config' => 'Configurazione',

	// Statistics Config
	'Statistics_config_title' => 'Configurazione statistiche',

	'Return_limit' => 'Limite',
	'Return_limit_desc' => 'Il numero di voci visualizzato in ogni lista. Valore automaticamente impostato verso i vari moduli.',
	'Clear_cache' => ' Svuota Cache Moduli',
	'Clear_cache_desc' => 'Svuota i dati memorizzati nella cache per tutti moduli',
	'Modules_directory' => 'Directory Moduli',
	'Modules_directory_desc' => 'Directory relativa alla home di Icy Phoenix dove sono installati i moduli. N.B. non utilizzate / o \!',

	// Status Messages
	'Messages' => 'Messaggi Amministrativi',
	'Updated' => 'Aggiornati',
	'Active' => 'Attiva',
	'Activate' => 'Attiva',
	'Activated' => 'Attivati',
	'Not_active' => 'Non Attivo',
	'Deactivate' => 'Disattiva',
	'Deactivated' => 'Disattivati',
	'Install' => 'Installa',
	'Installed' => 'Installate',
	'Uninstall' => 'Disinstalla',
	'Uninstalled' => 'Disinstallatata',
	'Update_time' => 'Tempo aggiornamento',
	'Auth_settings_updated' => 'Impostazione di autorizzazione  - [Sempre aggiornate]',

	// Modules Management
	'Back_to_management' => 'Ritorna alla schermata di amministrazione',
	'Statistics_modules_title' => 'Gestione Moduli Statistiche',

	'Module_name' => 'Nome',
	'Module_file_name' => 'Nome Modulo',
	'Modules_order_update' => 'Moduli Aggiornati',
	'Directory_name' => 'Nome Directory',
	'Status' => 'Stato',
	'Update_time_minutes' => 'Tempo di aggiornamento in minuti',
	'Update_time_desc' => 'Intervallo di tempo (in Minuti) per l\'aggiornamento dei dati nella cache.',
	'AUTO_SET_UPDATE_TIME' => 'Determina e imposta il valore raccomandato per il periodo di aggiornamento dei dati dei moduli installati (e attivi).<br />Attenzione: Il tempo necessario potrebbe essere lungo.',
	'STAT_BLOCKS_SORT' => '<i>Consiglio: puoi variare l\'ordine dei moduli usando il &quot;Drag and Drop&quot;.</i>',
	'Uninstall_module' => 'Disinstalla modulo',
	'Uninstall_module_desc' => 'Imposta il modulo con il flag "non installato", e quindi lo rende disponibile per nuove installazione. Il modulo non viene rimosso dal file system, dovete rimuoverlo manualmente della directory dei moduli.',
	'Active_desc' => 'Opzione che, qualora il modulo sia attivo, questo viene visualizzato in base ai permessi.',
	'Go' => 'Vai',
	'Update_Modules' => 'Aggiorna Moduli',

	'Not_allowed_to_install' => 'Non e\' possibile installare questo modulo. Probabilmente perche\' non avete installato un MOD necessario per installare questo Modulo. Contattare l\'autore del modulo per ulteriori informazioni o consultate eventuale documentazione.',
	'Wrong_stats_mod_version' => 'Non potete installare questo modulo, perche\' la versione di Statistic Mod installata non corrisponde con quella richiesta. Modulo compatibile con la versione %s.', // replace %s with Version (2.1.3 for example)
	'Module_install_error' => 'Errori riscontrati durante l\'installazione del modulo. Verificate i messaggi di errore.',

	'Preview_debug_info' => 'Modulo generato in %f secondi. %d queries eseguite.', // Replace %f with seconds and %d with queries
	'Update_time_recommend' => 'Il Mod raccomanda (in base alle informazioni di debug) un periodo di aggiornamento di <b>%d</b> Minuti.', // Replace %d with Minutes

	// Modules
	'module_name__stats_overview_section' => 'Tabella Riassuntiva Statistiche',

	'module_name_admin_statistics' => 'Statistiche Amministrative',
	'Statistic' => 'Statistiche',
	'Value' => 'Valore',
	'Number_posts' => 'Numero di messaggi',
	'Posts_per_day' => 'Messaggi per giorno',
	'Number_topics' => 'Numero di argomenti',
	'Topics_per_day' => 'Argomenti per giorno',
	'Number_users' => 'Numero di utenti',
	'Users_per_day' => 'Utenti per giorno',
	'Board_started' => 'Forum attivato il',
	'Avatar_dir_size' => 'Dimensione directory Avatar',
	'Database_size' => 'Dimensione Database',
	'Gzip_compression' => 'Compressione Gzip',
	'Not_available' => 'Non disponibile',
	'Board_Up_Days' => 'Giorni da cui la Board &egrave; Attiva',
	'Latest_Reg_User' => 'Ultimo Utente Registrato',
	'Latest_Reg_User_Date' => 'Data di Registrazione Ultimo Utente',
	'Most_Ever_Online' => 'Record Utenti in linea',
	'Most_Ever_Online_Date' => 'Data Record Utenti in linea',
	'Disk_usage' => 'Spazio Occupato sul Disco',
	'Title' => 'Media Post',
	'Average_Posts' => 'Media Post',

	'module_name_average_posts_per_user' => 'Media Post',

	'module_name_age_clusters' => 'Fasce Et&agrave;',
	'AGE' => 'Et&agrave;',
	'LESS_THAN' => 'Meno di',
	'MORE_THAN' => 'Pi&ugrave; di',

	'module_name_fastest_users' => 'Utenti Pi&ugrave; Veloci',
	'time_on_forum' => 'Giorni nel Forum',
	'posts_day' => 'Messaggi al Giorno',
	'Statistics' => 'Statistiche',

	'module_name_interesting_topics' => 'Discussioni Pi&ugrave; Interessanti',
	'Rate' => 'Rating (visite/messaggi)',
	'Topic' => 'Argomento',

	'module_name_latest_topics' => 'Ultime Discussioni',
	'Rank' => 'Posizione',
	'Latest_Topics' => 'Ultime Discussioni',
	'Post_time' => 'Orario',

	'module_name_month_stat' => 'Statistiche Mensili',
	'New_users' => 'Nuovi Utenti',
	'New_replies' => 'Messaggi',
	'New_topics' => 'Argomenti',
	'Avg_Table' => 'Media Tabella',
	'Sum_Table' => 'Somma Tabella',

	'module_name_most_active_topics' => 'Argomenti Pi&ugrave; Discussi',

	'module_name_most_active_topicstarter' => 'Utenti che hanno iniziato pi&ugrave; Discussioni',

	'module_name_most_logged_on_users' => 'Utenti Connessi Pi&ugrave; a Lungo',
	'Time2' => 'Tempo Connessione',

	'module_name_most_used_languages' => 'Lingue',
	'Language' => 'Lingua',

	'module_name_most_used_styles' => 'Stili',
	'Style' => 'Stile',

	'module_name_most_viewed_topics' => 'Discussioni Pi&ugrave; Viste',

	'module_name_new_posts_by_month' => 'Numero di Messaggi per Mese',
	'Month_jan' => 'Gen',
	'Month_feb' => 'Feb',
	'Month_mar' => 'Mar',
	'Month_apr' => 'Apr',
	'Month_may' => 'Mag',
	'Month_jun' => 'Giu',
	'Month_jul' => 'Lug',
	'Month_aug' => 'Ago',
	'Month_sep' => 'Set',
	'Month_oct' => 'Ott',
	'Month_nov' => 'Nov',
	'Month_dec' => 'Dic',
	'Year' => 'Anno',
	'Month' => 'Mese',
	'Number' => 'Numero',
	'Posts_month' => 'Numero di Messaggi per Mese',

	'module_name_new_topics_by_month' => 'Numero di Nuove Discussioni per Mese',
	'Topics_month' => 'Numero di Nuove Discussioni per Mese',

	'module_name_new_users_by_month' => 'Numero di Nuovi Utenti per Mese',
	'Signup_month' => 'Numero di Nuovi Utenti per Mese',

	'module_name_posting_by_day_of_week' => 'Traffico per Giorno della Settimana: Messaggi',
	'Traffic_posts' => 'Traffico per Giorno della Settimana: Messaggi',
	'Dow' => 'Giorno',

	'module_name_registrations_by_day_of_week' => 'Traffico per Giorno della Settimana: Nuovi Utenti',
	'Traffic_reg' => 'Traffico per Giorno della Settimana: Nuovi Utenti',
	'Dow' => 'Giorno',
	'New_users' => 'Nuovi Utenti',

	'module_name_site_hist_daily_stats_current_week' => 'Statistiche Settimanali',

	'module_name_site_hist_hours_stats_current_day' => 'Statistiche Odierne',

	'module_name_site_hist_month_top_posters' => 'Top Posters Mese Corrente',
	'Month_Var' => '[%s]', // %s will be replaced by the current Month

	'module_name_site_hist_monthly_stats_current_year' => 'Statistiche Mensili',

	'module_name_site_hist_week_top_posters' => 'Top Posters Settimana Corrente',
	'Week_Var' => '[%s]', // %s will be replaced by the current Week

	'module_name_top_attachments' => 'Allegati Pi&ugrave; Scaricati',
	'File_name' => 'Nome Del File',
	'File_comment' => 'Commenti',

	'module_name_top_posters' => 'Top Posters',

	'module_name_top_smilies' => 'Smileys Pi&ugrave; Usati',
	'smiley_url' => 'Immagine',
	'smiley_code' => 'Codice',

	'module_name_top_words' => 'Parole Pi&ugrave; Usate',
	'Word' => 'Parola',
	'Uses2' => 'Frequenza',

	'module_name_topics_by_day_of_week' => 'Traffico per Giorno della Settimana: Argomenti',
	'Traffic_topics' => 'Traffico per Giorno della Settimana: Argomenti',

	'module_name_users_from_where' => 'Residenza Utenti',
	'From_where_title' => 'Residenza Utenti',
	'From_where' => 'Residenza',

	'module_name_users_gender' => 'Sesso',
	'Users' => 'Utenti',

	'module_name_users_ranks' => 'Livelli',
	'Rank_image' => 'Immagine Livello',
	'Rank_range' => 'Messaggi Livello',
	'Rank_special' => 'Livello Speciale',
	)
);

?>