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

//
// Attachment Mod Admin Language Variables
//

// Modules, this replaces the keys used
$lang['Control_Panel'] = 'Pannello di controllo';
$lang['Shadow_attachments'] = 'Allegati fantasma';
$lang['Forbidden_extensions'] = 'Estensioni proibite';
$lang['Extension_control'] = 'Gestione estensioni';
$lang['Extension_group_manage'] = 'Gruppo estensioni';
$lang['Special_categories'] = 'Categorie speciali';
$lang['Sync_attachments'] = 'Sincronizza allegati';
$lang['Quota_limits'] = 'Limite Quota';

// Attachments -> Management
$lang['Attach_settings'] = 'Configurazione allegati';
$lang['Manage_attachments_explain'] = 'In questa sezione potete configurare le opzioni principali della gestione allegati (<strong>Attachment Mod</strong>). Se selezionate "Test configurazione" il sistema effettuer&agrave; qualche test per verificare il corretto funzionamento. Se avete problemi durante l\'uso di questo Mod, lanciate questo test, per avere un rapporto dettagliato dell\'errore.';
$lang['Attach_filesize_settings'] = 'Dimensione allegati';
$lang['Attach_number_settings'] = 'Numero di allegati';
$lang['Attach_options_settings'] = 'Opzioni allegati';

$lang['Upload_directory'] = 'Upload Directory';
$lang['Upload_directory_explain'] = 'Inserire la directory in cui salvare i files. Es.: <b>files</b> se il forum &egrave; http://www.yourdomain.com/ip e la dir allegati &egrave; http://www.yourdomain.com/ip/files.';
$lang['Attach_img_path'] = 'Icona allegati';
$lang['Attach_img_path_explain'] = 'L\'immagine &egrave; utilizzata per indicare i messaggi che contengono allegati. Se questo campo resta vuoto nessuna immagine verr&agrave; mostrata.';
$lang['Attach_topic_icon'] = 'Icona allegati nell\'argomento ';
$lang['Attach_topic_icon_explain'] = 'L\'immagine &egrave; utilizzata per indicare argomenti che hanno messaggi con allegati. Se questo campo resta vuoto nessuna immagine verr&agrave; mostrata.';
$lang['Attach_display_order'] = 'Ordinamento allegati"';
$lang['Attach_display_order_explain'] = 'In questa sezione potete scegliere come ordinare gli allegati nei messaggi (compresi quelli privati) in modo Discendente (prima i pi&ugrave; recenti) o in modo Ascendente (prima i pi&ugrave; vecchi).';
$lang['Show_apcp'] = 'Mostra la nuova interfaccia per la  gestione allegati';
$lang['Show_apcp_explain'] = 'Scegliete se mostrare la nuova versione dell\'interfaccia di gestione Allegati (si) o la vecchia interfaccia con due box per Allegare e Modificare gli allegati (no). Questa interfaccia &egrave; inclusa nella sezione di invio messaggi. Descrivere la differenza tra i due metodi &egrave; difficile, per chi vi suggeriamo di provarla per apprezzarne la differenza.';

$lang['Max_filesize_attach'] = 'Dimensione file';
$lang['Max_filesize_attach_explain'] = 'Indica la dimensione massima degli allegati in bytes. Se posta a 0 non ci saranno limiti per gli allegati. Questo valore &egrave; limitato dalla configurazione del PHP nel server, ovvero se nel php.ini &egrave; specificato MAX UPLOAD SIZE=2, allora la dimensione massima sar&agrave; pari a questo valore.';
$lang['Attach_quota'] = 'Spazio HDD da destinare ai files';
$lang['Attach_quota_explain'] = 'Spazio sul disco destinato agli allegati .';
$lang['Max_filesize_pm'] = 'Dimensione massima allegati nei messaggi privati';
$lang['Max_filesize_pm_explain'] = 'Dimensione massima degli allegati nei messaggi privati';
$lang['Default_quota_limit'] = 'Quota di default';
$lang['Default_quota_limit_explain'] = 'In questa sezione &egrave; possibile selezionare il valore di quota di default per i nuovi utenti e per quelli che non hanno un limite di quota definito. L\'opzione \'Nessun limite di quota\' indica che nessun limite viene imposto, invece di quello da voi definito come valore di default.';

$lang['Max_attachments'] = 'Numero massimo di allegati in un messaggio';
$lang['Max_attachments_explain'] = 'Il numero massimo di allegati in un messaggio';
$lang['Max_attachments_pm'] = 'Numero massimo di allegati in un messaggio privato';
$lang['Max_attachments_pm_explain'] = 'Il numero massimo di allegati in un messaggio privato';

$lang['Disable_mod'] = 'Disabilita gli  allegati';
$lang['Disable_mod_explain'] = 'Questa operazione rende inattivo il MOD allegati, principalmente per poter effettuare qualche test. Resta visibile solo il pannello di controllo.';
$lang['PM_Attachments'] = 'Allegati nei messaggi privati';
$lang['PM_Attachments_explain'] = 'Permetti o meno gli allegati nei messaggi privati.';
$lang['Ftp_upload'] = 'Abilita FTP Upload';
$lang['Ftp_upload_explain'] = 'Abilita/Disabilita la trasmissione via FTP dei files. Se si attiva questa opzione sar&agrave; necessario specificare i parametri FTP. La directory Upload non verr&agrave; pi&ugrave; usata.';
$lang['Attachment_topic_review'] = 'Mostrare gli allegati nella finestra "Revisione Argomento" ?';
$lang['Attachment_topic_review_explain'] = 'Se selezionate si, tutti i file allegati verranno mostrati nella  "revisione argomenti" quando si risponde ad un messaggio.';

$lang['Ftp_server'] = 'FTP Upload Server';
$lang['Ftp_server_explain'] = 'Indicare l\'indirizzo IP o l\'hostname FTP del server usato per i files uploadati. Se non compilate questi campi, verr&agrave; utilizzato il server su cui avete installato Icy Phoenix. Evitate di aggiungere ftp:// o simili, &egrave; sufficiente scrivere p.e. ftp.dominio.com o, cosa molto pi&ugrave; veloce, il semplice indirizzo IP.';

$lang['Attach_ftp_path'] = 'FTP Path relativo alla directory upload';
$lang['Attach_ftp_path_explain'] = 'La directory in cui saranno salvati gli allegati. Questa dir non deve essere modificata con il chmod. Non inserire l\'indirizzo IP o quello FTP, questo campo deve contenere solo il percorso ftp. <br /> p.e. : /home/web/uploads.';
$lang['Ftp_download_path'] = 'Download Link verso il Path FTP';
$lang['Ftp_download_path_explain'] = 'Indicare il percorso in cui i vostri allegati sono salvati. Inserire il percorso completo, p.e. www.miodominio.com/ip/upload. Non inserire il carattere <b>/</b> al termine. Lasciate questo campo non compilato se avete il percorso esterno al vostro server web, ma, in questo caso non potrete utilizzare l\'opzione di download fisico.';
$lang['Ftp_passive_mode'] = 'Abilita modo passivo per FTP';
$lang['Ftp_passive_mode_explain'] = 'Il comando PASV richiede che il server remoto apra una porta per la connessione dati, restituendo l\'indirizzo della porta. Il server remoto si mette in attesa su questa porta ed il client si connette ad essa.';

$lang['No_ftp_extensions_installed'] = 'Non siete in grado di usare il metodo di upload via FTP in quanto le estensioni FTP non sono stati compilati nella vostra installazione di PHP.';

// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain'] = 'In questa sezione &egrave; possibile cancellare i riferimenti ad allegati i cui files non sono presenti nel vostro filesystem oppure cancellare i files che non fanno pi&ugrave; riferimento a nessun messaggio. Potete effettuare il download o visualizzare un file cliccandoci sopra. Se non ci sono link visibili allora il file o i files non esistono.';
$lang['Shadow_attachments_file_explain'] = 'Cancellare tutti i files relativi ad allegati che non sono riconducibili a messaggi esistenti.';
$lang['Shadow_attachments_row_explain'] = 'Cancellate tutti i riferimenti ai files che non sono pi&ugrave; presenti sul sistema';
$lang['Empty_file_entry'] = 'File vuoto';

// Attachments -> Sync
$lang['Sync_thumbnail_resetted'] = 'Thumbnail resettato per l\'allegato: %s'; // replace %s with physical Filename
$lang['Attach_sync_finished'] = 'Sincronizzazione allegati completata.';

// Extensions -> Extension Control
$lang['Manage_extensions'] = 'Gestione estensioni';
$lang['Manage_extensions_explain'] = 'In questa sezione &egrave; possibile gestire le estensioni dei files. Se volete permettere o vietare particolari estensioni, utilizzare il pannello di controllo relativo.';
$lang['Explanation'] = 'Descrizione';
$lang['Extension_group'] = 'Gruppo estensione';
$lang['Invalid_extension'] = 'Estensione non valida';
$lang['Extension_exist'] = 'L\'estensione %s &egrave; gi&agrave; presente'; // replace %s with the Extension
$lang['Unable_add_forbidden_extension'] = 'L\'estensione %s non &egrave; consentita, non &egrave; possibile aggiungerla alle estensioni consentite'; // replace %s with Extension

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'Gestione raggruppamento  di estensioni';
$lang['Manage_extension_groups_explain'] = 'In questa sezione &egrave; possibile aggiungere, cancellare e/o modificare i raggruppamenti di estensione, disabilitarli, assegnare loro una categoria speciale, cambiare il meccanismo di download, associare un icona che verr&agrave; mostrata dove sia presente un file riconducibile al raggruppamento.';
$lang['Special_category'] = 'Categoria speciale';
$lang['Category_images'] = 'Immagini';
$lang['Category_stream_files'] = 'Stream Files';
$lang['Category_swf_files'] = 'Flash Files';
$lang['Allowed'] = 'Consentito';
$lang['Allowed_forums'] = 'Forum consentiti';
$lang['Ext_group_permissions'] = 'Permessi di gruppo';
$lang['Download_mode'] = 'Modalit&agrave; download';
$lang['Upload_icon'] = 'Icona associata';
$lang['Max_groups_filesize'] = 'Dimensione massima';
$lang['Extension_group_exist'] = 'Il raggruppamento di estensioni %s esiste gi&agrave;'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = 'Gestione categorie speciali';
$lang['Manage_categories_explain'] = 'In questo pannello &egrave; possibile gestire le estensioni speciali. .';
$lang['Settings_cat_images'] = 'Configurazione per categoria: Immagini';
$lang['Settings_cat_streams'] = 'Configurazione per categoria: Files streams';
$lang['Settings_cat_flash'] = 'Configurazione per categoria: Flash Files';
$lang['Display_inlined'] = 'Mostra immagini';
$lang['Display_inlined_explain'] = 'Mostra le immagini nel messaggio o indica solo il link per il download?';
$lang['Max_image_size'] = 'Dimensione massima dell\'immagine';
$lang['Max_image_size_explain'] = 'Specificate la dimensione massima di un immagine allegata (Larg. x Alt. in pixel).Se si setta questa opzione a 0 x 0 questa verr&agrave; disattivata. Con alcune immagini questa opzione non funziona a causa delle limitazioni  PHP.';
$lang['Image_link_size'] = 'Dimensione Image Link ';
$lang['Image_link_size_explain'] = 'Se viene raggiunta o superata la dimensione specificata dell\'immagine questa verr&agrave; mostrata come link invece di essere visualizzata <br />se l\'opzione "mostra immagini"  &egrave; attiva (Larghezza x altezza  in pixels).<br />Se si setta questa opzione a 0 x 0 questa verr&agrave; disattivata. Con alcune immagini questa opzione non funziona a causa delle limitazioni  PHP.';
$lang['Assigned_group'] = 'Gruppo assegnato';

$lang['Image_create_thumbnail'] = 'Crea  Thumbnail';
$lang['Image_create_thumbnail_explain'] = 'Crea sempre Thumbnail. Questa opzione ha la priorit&agrave; su tutte le altre in questa categoria speciale, con esclusione della dimensione massima dell\'immagine. Se si attiva questa opzione verr&agrave; mostrato un Thumbnail al posto dell\'immagine. Cliccandoci sopra verr&agrave; mostrata l\'immagine intera<br /> Ricordate che questa opzione richiede che nel server sia installato Imagick, se ci&ograve; non fosse (o il sistema girasse in Safe Mode) verr&agrave; utilizzata l\'estensione GD o PHP. Se il tipo di immagine non fosse previsto, questa opzione non verr&agrave; usata.';
$lang['Image_min_thumb_filesize'] = 'Dimensione minima';
$lang['Image_min_thumb_filesize_explain'] = 'Se l\'immagine &egrave; pi&ugrave; piccola di questa dimensione, il Thumbnail non verr&agrave; creato.';
$lang['Image_imagick_path'] = 'Imagick Program (Percorso completo)';
$lang['Image_imagick_path_explain'] = 'Inserire il percorso completo del programma di conversione di Imagick, normalmente /usr/bin/convert (su server windows c:/imagemagick/convert.exe).';
$lang['Image_search_imagick'] = 'Cerca Imagick';

$lang['Use_gd2'] = 'Usa le estensioni GD2 ';
$lang['Use_gd2_explain'] = 'PHP pu&ograve; essere compilato con le estensioni GD1 o GD2 per la manipolazione delle immagini. Per creare le miniature senza Image Magic vengono usati due metodi diversi, bastati sulla vostra selezione. Se le vostre miniature non sono decenti, provate a cambiare queste impostazioni.';
$lang['Attachment_version'] = 'File Attachment Version %s'; // %s is the version number

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = 'Gestione estensioni proibite';
$lang['Manage_forbidden_extensions_explain'] = 'In questa sezione &egrave; possibile modificare le estensioni proibite. Le estensioni php, php3 and php4 sono proibite di default e non &egrave; possibile attivarle per motivi di sicurezza.';
$lang['Forbidden_extension_exist'] = 'L\'estensione %s esiste gi&agrave;'; // replace %s with the extension
$lang['Extension_exist_forbidden'] = 'L\'estensione %s &egrave; presente nelle estensioni consentite, per cortesia rimuovetela prima di proibirla.';  // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
$lang['Group_permissions_title'] = 'Permessi <b>Gruppo di estensioni</b> -> \'%s\''; // Replace %s with the Groups Name
$lang['Group_permissions_explain'] = 'In questa sezione &egrave; possibile limitare il raggruppamento di estensioni (o Gruppo di estensioni) a determinati forums (definiti nel Box \'forum consentit&igrave;. La configurazione di default per i gruppi di estensione &egrave; di consentire gli allegati del gruppo selezionato in tutti i forums (come all\'origine di questo Mod). Per limitare l\'inserimento di allegati riferiti al gruppo di estensioni, inserite il nome dei forum in cui ci&ograve; sar&agrave; permesso, la configurazione di default \'TUTTI I FORUMS\' mostrando solo i forum che avete selezionato. Potrete annullare la limitazione in qualsiasi momento. Se creerete un nuovo forum con tutti i forum abilitati, non ci saranno variazioni. Se applicate delle restrizioni d\'accesso ad alcuni forum, &egrave; opportuno verificarle quando aggiungete nuovi forum, dato che dette restrizioni possono essere annullate dalla creazione di nuovi forum . Sarebbe facile automatizzare questa operazione, in tale caso sareste costretti a modificare diversi file, perci&ograve; &egrave; stata scelta questa soluzione. Ricordate che visualizzerete l\'elenco completo dei vostri Forums.';
$lang['Note_admin_empty_group_permissions'] = 'N.B.:<br />Nei forum elencati, i vostri utenti sono normalmente autorizzati ad allegare files, <br /> ma, dato che non &egrave; possibile allegare nessun <b>gruppo di estensioni</b> , <br />ai vostri utenti non sar&agrave;  possibile allegare niente. Se tenteranno,  sar&agrave; loro restituito un messaggio d\'errore.<br /> Forse &egrave; opportuno settare i permessi di <b>Allega files</b> solo agli user Admin in questi forum, per evitare questo messaggio di errore.';
$lang['Add_forums'] = 'Aggiungi forum';
$lang['Add_selected'] = 'Aggiungi selezionati';
$lang['Perm_all_forums'] = 'TUTTI I FORUMS';

// Attachments -> Quota Limits
$lang['Manage_quotas'] = 'Gestione Limite di Quota allegati';
$lang['Manage_quotas_explain'] = 'In questa sezione sarete in grado di aggiungere/rimuovere/modificare il Limite di Quota . In seguito potrete assegnare queste "quote" ad utenti e user. Per associare la Quota ad un utente dovete andare nella sezione che vi permette la loro gestione (Utente/Gestione) alla fine della schermata verr&agrave; visualizzata l\'opzione relativa. La stessa opzione &egrave; visibile nella sezione Gruppi -> Gestione. Se volete visualizzare quale gruppo(i) o utente(i) sono associati ad uno specifico limite di quota, Cliccate su \'visualizza\' a sinistra della descrizione della Quota.';
$lang['Assigned_users'] = 'Utenti assegnati';
$lang['Assigned_groups'] = 'Gruppi assegnati';
$lang['Quota_limit_exist'] = 'Il limite di Quota %s esiste gi&agrave;.'; // Replace %s with the Quota Description

// Attachments -> Control Panel
$lang['Control_panel_title'] = 'Pannello di controllo allegati';
$lang['Control_panel_explain'] = 'In questa sezione &egrave; possibile visualizzare e gestire gli allegati.';
$lang['File_comment_cp'] = 'Descrizione file(s)';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = 'Utilizzare * come carattere jolly ';
$lang['Size_smaller_than'] = 'Allegato pi&ugrave; piccolo di  (bytes)';
$lang['Size_greater_than'] = 'Allegato pi&ugrave; grande di (bytes)';
$lang['Count_smaller_than'] = 'Conteggio download inferiore a ';
$lang['Count_greater_than'] = 'Conteggio download superiore a ';
$lang['More_days_old'] = 'Pi&ugrave; vecchio di ';
$lang['No_attach_search_match'] = 'Nessun allegato soddisfa le condizioni di ricerca';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Numero di allegati';
$lang['Total_filesize'] = 'Dimensione totale';
$lang['Number_posts_attach'] = 'Numero di messaggi con allegati';
$lang['Number_topics_attach'] = 'Numero di argomenti con allegati';
$lang['Number_users_attach'] = 'Utenti che hanno inviato allegati';
$lang['Number_pms_attach'] = 'Numero totale di allegati nei messaggi privati';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = 'Statistiche allegati per %s'; // replace %s with username
$lang['Size_in_kb'] = 'Dimensione (KB)';
$lang['Downloads'] = 'Downloads';
$lang['Post_time'] = 'Data invio';
$lang['Posted_in_topic'] = 'Relativo all\'argomento';
$lang['Submit_changes'] = 'Conferma variazioni';

// Sort Types
$lang['Sort_Attachments'] = 'Allegati';
$lang['Sort_Size'] = 'Dimensione';
$lang['Sort_Filename'] = 'Nome del file';
$lang['Sort_Comment'] = 'Commenti';
$lang['Sort_Extension'] = 'Estensione';
$lang['Sort_Downloads'] = 'Downloads';
$lang['Sort_Posttime'] = 'Data invio';
$lang['Sort_Posts'] = 'Invii';

// View Types
$lang['View_Statistic'] = 'Statistiche';
$lang['View_Search'] = 'Ricerca';
$lang['View_Username'] = 'Nome utente';
$lang['View_Attachments'] = 'Allegati';

// Successfully updated
$lang['Attach_config_updated'] = 'Configurazione allegati completata senza errori';
$lang['Click_return_attach_config'] = 'Clicca %sQUI%s per tornare alla configurazione allegati';
$lang['Test_settings_successful'] = 'Il test della configurazione &egrave; andato a buon fine.';

// Some basic definitions
$lang['Attachments'] = 'Allegati';
$lang['Attachment'] = 'Allegato';
$lang['Extensions'] = 'Estensioni';
$lang['Extension'] = 'Estensione';

// Auth pages
$lang['Auth_attach'] = 'Invia files';
$lang['Auth_download'] = 'Download files';

?>