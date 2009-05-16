<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

// MG CMS - BEGIN
// Some langs borrowed from IM Portal
$lang['CMS_WELCOME'] = 'Benvenuto in Icy Phoenix';
$lang['BP_Title'] = 'Tag posizione dei blocchi';
$lang['BP_Explain'] = 'In questo pannello puoi aggiungere, modificare o rimuovere posizioni dei blocchi che puoi utilizzare nelle pagine del sito. Le posizioni predefinite sono \'header\' (testata), \'footer\' (pi&egrave; di pagina), \'right\' (destra), \'left\' (sinistra) e \'center\' (centro). Queste posizioni corrispondono al layout utilizzato per una specifica pagina del sito. Possono essere aggiunte soltanto aggiunte posizioni per pagine esistenti. Le chiavi di posizione che non esistono nel layout specifico non verranno mostrate nella pagina del sito. Ogni chiave tag di posizione deve essere unica per la pagina del sito.';
$lang['BP_Position'] = 'Posizione carattere';
$lang['BP_Key'] = 'Codice tag posizione';
$lang['BP_Layout'] = 'Pagina sito';
$lang['BP_Add_Position'] = 'Aggiungi una nuova posizione';
$lang['No_bp_selected'] = 'Nessuna posizione &egrave; stata selezionata per la modifica';
$lang['BP_Edit_Position'] = 'Modifica posizione del blocco';
$lang['Must_enter_bp'] = 'Devi inserire una chiave tag di posizione, posizione carattere e pagina del sito';
$lang['BP_updated'] = 'Posizione blocco aggiornata';
$lang['BP_added'] = 'Posizione blocco aggiunta';
$lang['Click_return_bpadmin'] = 'Clicca %sQUI%s per ritornare all\'amministrazione delle posizioni dei blocchi';
$lang['BP_removed'] = 'Posizione blocco rimossa';
$lang['Portal_wide'] = 'Blocco globale sito';

$lang['No_layout_selected'] = 'Nessuna pagina selezionata per la modifica';
$lang['Layout_Title'] = 'Pagine sito';
$lang['Layout_Explain'] = 'In questa sezione puoi aggiungere, modificare o rimuovere le informazioni del layout per le pagine del tuo sito: lo stesso layout pu&ograve; essere utilizzato da diverse pagine del sito. Il layout selezionato deve trovarsi nella cartella layout collocata nella cartella template del forum. Non sar&agrave; possibile cancellare la pagina predefinita del sito. La cancellazione di una pagina del sito cancella le corrispondenti posizioni di blocco per questa pagina e tutti i blocchi a lei assegnati. Inoltre da questa sezione &egrave; possibile modificare i blocchi assegnati a ciascuna pagina e creare pagine nuove con un nome predefinito (se il tuo server lo consente puoi creare ad esempio una nuova pagina chiamata <b>chisiamo.php</b>).';
$lang['Layout_Special_Explain'] = 'In questa sezione puoi aggiungere, modificare o rimuovere blocchi nelle pagine standard del tuo sito (forum, visualizzazione messaggi, lista utenti, downloads, album, ecc.).';
$lang['Layout_Name'] = 'Nome';
$lang['Layout_Template'] = 'File Template';
$lang['Layout_Edit'] = 'Modifica Pagina';
$lang['Layout_Page'] = 'ID Pagina';
$lang['Layout_View'] = 'Permessi visualizzazione';
$lang['Layout_Edit_Perm'] = 'Permessi modifica';
$lang['Layout_Global_Blocks'] = 'Blocchi Globali';
$lang['Layout_Page_Nav'] = 'Blocco Navigazione Pagina (Breadcrumbs)';
$lang['Must_enter_layout'] = 'Devi inserire un nome ed un file del template';
$lang['Layout_updated'] = 'Pagina Aggiornata';
$lang['Click_return_layoutadmin'] = 'Clicca %sQUI%s per ritornare all\'amministrazione della pagina sito';
$lang['Layout_added'] = 'Pagina Aggiunta';
$lang['Layout_removed'] = 'Pagina Rimossa';
$lang['Layout_Add'] = 'Aggiungi Pagina';
$lang['Layout_BP_added'] = 'File di configurazione del layout disponibile: Tag di posizione del blocco inserita automaticamente';
$lang['Layout_default'] = 'Predefinita';
$lang['Layout_make_default'] = 'Imposta come predefinita';

$lang['Blocks_Title'] = 'Gestione Blocchi';
$lang['Blocks_Explain'] = 'In questa sezione &egrave; possibile aggiungere, modificare e rimuovere i blocchi per ogni pagina del sito. E\' possibile scegliere un file di blocco per avere dei contenuti predefiniti oppure &egrave; possibile inserire un contenuto di testo (con HTML o BBCode). La fase di creazione/modifica dei blocchi richiede due fasi: la prima in cui vengono impostate le opzioni generiche del blocco, e la seconda dove possono essere impostate le variabili specifiche del blocco.';
$lang['Blocks_Duplicate_Explain'] = 'In questa sezione &egrave; possibile duplicare blocchi presenti in altre pagine. Vengono mostrati nella lista solo blocchi compatibili con il layout attuale. Per duplicare i blocchi &egrave; sufficiente selezionarli e poi cliccare sul pulsante "Duplica Blocchi" a fondo pagina.';
$lang['Blocks_Creation_01'] = 'Creazione/Modifica Blocco Pagina 1 di 2';
$lang['Blocks_Creation_02'] = 'Creazione/Modifica Blocco Pagina 2 di 2';
$lang['CMS_STANDARD_PAGES'] = 'Pagine Standard';
$lang['CMS_CUSTOM_PAGES'] = 'Pagine CMS';
$lang['CMS_CUSTOM_PAGES_ADV'] = 'Pagine CMS ADV';
$lang['Choose_Layout'] = 'Seleziona Pagina';
$lang['B_Title'] = 'Titolo';
$lang['B_Position'] = 'Posizione';
$lang['B_Active'] = 'Stato';
$lang['B_Display'] = 'Contenuto';
$lang['B_HTML'] = 'HTML';
$lang['B_BBCode'] = 'BBCode';
$lang['B_Type'] = 'Tipo';
$lang['B_Border'] = 'Mostra bordi';
$lang['B_Border_and_Background'] = 'Bordi e sfondo';
$lang['B_Titlebar'] = 'Mostra barra del titolo';
$lang['B_Titlebar_Content'] = 'Barra del titolo';
$lang['B_Background'] = 'Mostra sfondo';
$lang['B_Local'] = 'Localizza barra titolo';
$lang['B_Cache'] = 'Cache?';
$lang['B_Cachetime'] = 'Durata cache';
$lang['B_Groups'] = 'Gruppi utente';
$lang['B_All'] = 'Tutti';
$lang['B_Guests'] = 'Solo visitatori';
$lang['B_Reg'] = 'Utenti registrati';
$lang['B_Mod'] = 'Moderatori';
$lang['B_Admin'] = 'Amministratori';
$lang['B_None'] = 'Nessuno';
$lang['B_Layout'] = 'Pagina Sito';
$lang['B_Layout_Edit'] = 'Modifica Impostazioni Pagina';
$lang['B_Page'] = 'ID Pagina';
$lang['B_Add'] = 'Aggiungi Blocco';
$lang['B_Duplicate'] = 'Duplica Blocchi';
$lang['B_Update'] = 'Aggiorna Blocchi';
$lang['Yes'] = 'Si';
$lang['No'] = 'No';
$lang['Enabled'] = 'Abilitato';
$lang['Disabled'] = 'Disabilitato';
$lang['B_Text'] = 'Testo';
$lang['B_File'] = 'File blocco';
$lang['B_Move_Up'] = 'Sposta su';
$lang['B_Move_Down'] = 'Sposta gi&ugrave;';
$lang['B_View'] = 'Mostra per';
$lang['B_Text_Block'] = 'Blocco di testo o HTML';
$lang['NO_BLOCKS_AVAILABLE'] = 'Nessun blocco in questo layout, clicca su "Aggiungi Blocco" per aggiungerne';
$lang['No_blocks_selected'] = 'Nessun file di blocco selezionato';
$lang['B_Content'] = 'Contenuto';
$lang['B_Blockfile'] = 'File Blocco';
$lang['Block_Edit'] = 'Modifica Blocco';
$lang['Block_updated'] = 'Blocco aggiornato';
$lang['Blocks_updated'] = 'Blocchi aggiornati';
$lang['Must_enter_block'] = 'Devi specificare un titolo per il blocco';
$lang['Block_added'] = 'Blocco aggiunto';
$lang['Blocks_added'] = 'Blocchi aggiunti';
$lang['Blocks_duplicated'] = 'Blocchi duplicati';
$lang['Click_return_blocksadmin'] = 'Clicca %sQUI%s per ritornare alla gestione dei blocchi';
$lang['Block_removed'] = 'Blocco rimosso';
$lang['B_BV_added'] = 'File di configurazione del blocco disponibile: Variabili del blocco aggiunte automaticamente';

$lang['BV_Title'] = 'Variabili blocchi';
$lang['BV_Explain'] = 'Da questo pannello di controllo puoi aggiungere, modificare o modificare le variabili di configurazione dei blocchi che vengono utilizzate per i blocchi nel sito. Queste variabili possono essere configurate attraverso la configurazioni per personalizzare il tuo sito.';
$lang['BV_Label'] = 'Etichetta campo';
$lang['BV_Sub_Label'] = 'Info del campo';
$lang['BV_Name'] = 'Nome configurazione';
$lang['BV_Options'] = 'Opzioni';
$lang['BV_Values'] = 'Valori campo';
$lang['BV_Type'] = 'Tipo controllo';
$lang['BV_Block'] = 'Blocco';
$lang['BV_Add_Variable'] = 'Aggiungi variabile Blocco';
$lang['No_bv_selected'] = 'Nessuna variabile blocco da configurare, clicca su INVIA per salvare il blocco.';
$lang['BV_Edit_Variable'] = 'Modifica variabile Blocco';
$lang['Must_enter_bv'] = 'Devi specificare un etichetta per il campo ed un nome per la configurazione';
$lang['BV_updated'] = 'Variabile di blocco aggiornata';
$lang['BV_added'] = 'Variabile di blocco aggiunta';
$lang['Click_return_bvadmin'] = 'Clicca %sQUI%s per ritornare all\'amministrazione delle Variabili di blocco ';
$lang['Config_Name_Explain'] = 'Non deve contenere spazi';
$lang['Field_Options_Explain'] = 'Obbligatorio per elenco a tendina e <br />radio button (separare con la virgola).';
$lang['Field_Values_Explain'] = 'Obbligatorio per elenco a tendina e <br />radio button (separare con la virgola).';
$lang['BV_removed'] = 'Variabile di blocco rimossa';

$lang['Config_updated'] = 'Configurazione aggiornata';
$lang['Click_return_config'] = 'Clicca %sQUI%s per ritornare alla configurazione';
$lang['Portal_Config'] = 'Configurazione Pagine Sito ';
$lang['Portal_Explain'] = 'In questa pagina puoi impostare la configurazione delle variabili di home page e pagine personalizzate. Le variabili di blocco elencate in questa pagina possono essere create o aggiornate nella sezione <b>Configurazione Variabili di Blocco</b>. I blocchi globali nelle pagine standard del sito possono essere abilitati nella sezione <b>Permessi Visualizzazione</b>.';
$lang['Portal_General_Config'] = 'Configurazione generale';
$lang['Default_Portal'] = 'Pagina sito predefinita';
$lang['Default_Portal_Explain'] = 'Homepage del forum';
$lang['Cache_Enabled'] = 'Abilita il sistema di cache';
$lang['Cache_Enabled_Explain'] = 'Per caricare con maggiore velocit&agrave; le informazioni relative al sito';
$lang['Confirm_delete_item'] = 'Sei sicuro di voler rimuovere questa voce?';
$lang['Cache_cleared'] = 'File rimossi dalla cache';

$lang['cms_pos_header'] = 'Intestazione Pagina';
$lang['cms_pos_headerleft'] = 'Sinistra';
$lang['cms_pos_headercenter'] = 'Cima Pagina Centrale';
$lang['cms_pos_footercenter'] = 'Fondo Pagina Centrale';
$lang['cms_pos_footerright'] = 'Destra';
$lang['cms_pos_footer'] = 'Fondo Pagina';
$lang['cms_pos_nav'] = 'Barra Navigazione';
$lang['cms_pos_left'] = 'Sinistra';
$lang['cms_pos_center'] = 'Centro';
$lang['cms_pos_right'] = 'Destra';
$lang['cms_pos_xsnews'] = 'News (Centro Pagina)';
$lang['cms_pos_centerbottom'] = 'Fondo Pagina Centrale';
$lang['cms_pos_toprow'] = 'Cima';
$lang['cms_pos_column1'] = 'Colonna 1 (Sinistra)';
$lang['cms_pos_column2'] = 'Colonna 2 (Destra)';
$lang['cms_pos_bottomrow'] = 'Fondo';
$lang['cms_pos_ghtop'] = 'Header Alto';
$lang['cms_pos_ghbottom'] = 'Header Basso';
$lang['cms_pos_ghleft'] = 'Header Centro (Sinistra)';
$lang['cms_pos_ghright'] = 'Header Centro (Destra)';

$lang['cms_block_ads'] = 'Annunci';
$lang['cms_block_ajax_shoutbox'] = 'Chat AJAX';
$lang['cms_block_album'] = 'Album';
$lang['cms_block_birthdays'] = 'Compleanni';
$lang['cms_block_calendar'] = 'Calendario';
//$lang['cms_block_center_downloads'] = 'Downloads Centrale';
$lang['cms_block_center_downloads'] = 'Downloads';
$lang['cms_block_clock'] = 'Orologio';
$lang['cms_block_donate'] = 'Donazioni';
$lang['cms_block_dyn_menu'] = 'Menu Dinamico';
//$lang['cms_block_dyn_menu'] = 'Links Veloci';
$lang['cms_block_flash_news'] = 'Flash News';
$lang['cms_block_forum'] = 'News';
$lang['cms_block_forum_attach'] = 'News';
$lang['cms_block_forum_list'] = 'Lista Forum';
$lang['cms_block_full_search'] = 'Ricerca Avanzata';
$lang['cms_block_global_header'] = 'Intestazione Globale';
$lang['cms_block_global_header_simple'] = 'Intestazione Globale Semplice';
$lang['cms_block_gsearch'] = 'Ricerca Google';
$lang['cms_block_gsearch_hor'] = 'Ricerca Google Orizzontale';
$lang['cms_block_index'] = 'Mappa Sito';
$lang['cms_block_jumpbox'] = 'Jumpbox';
$lang['cms_block_kb'] = 'Knowledge Base';
$lang['cms_block_links'] = 'Links';
$lang['cms_block_menu'] = 'Navigazione Sito';
$lang['cms_block_nav_header'] = 'Intestazione';
$lang['cms_block_nav_links'] = 'Mappa Sito';
$lang['cms_block_nav_logo'] = 'Logo';
$lang['cms_block_new_downloads'] = 'Nuovi Downloads';
$lang['cms_block_news'] = 'News';
$lang['cms_block_news_archive'] = 'Archivio News';
$lang['cms_block_news_posters'] = 'Autori News';
$lang['cms_block_online_users'] = 'In Linea';
$lang['cms_block_online_users2'] = 'In Linea';
$lang['cms_block_paypal'] = 'PayPal';
$lang['cms_block_poll'] = 'Sondaggio';
$lang['cms_block_random_attach'] = 'Allegato Casuale';
$lang['cms_block_random_quote'] = 'Citazione Casuale';
$lang['cms_block_random_topics'] = 'Argomento Casuale';
$lang['cms_block_random_topics_ver'] = 'Argomento Casuale';
$lang['cms_block_random_user'] = 'Utente Casuale';
$lang['cms_block_recent_articles'] = 'Articoli Recenti';
$lang['cms_block_recent_topics'] = 'Argomenti Recenti';
$lang['cms_block_recent_topics_wide'] = 'Argomenti Recenti';
$lang['cms_block_referers'] = 'Referenze';
$lang['cms_block_rss'] = 'RSS';
$lang['cms_block_search'] = 'Cerca';
$lang['cms_block_sec_menu'] = 'Menu Extra';
$lang['cms_block_shoutbox'] = 'Shoutbox';
$lang['cms_block_staff'] = 'Staff';
$lang['cms_block_statistics'] = 'Statistiche';
$lang['cms_block_style'] = 'Stile';
$lang['cms_block_top_downloads'] = 'Downloads Popolari';
$lang['cms_block_top_nav'] = 'Navigazione';
$lang['cms_block_top_posters'] = 'Utenti Migliori';
$lang['cms_block_user_block'] = 'Blocco Utente';
$lang['cms_block_users_visited'] = 'Utenti Attivi';
$lang['cms_block_visit_counter'] = 'Contatore Visite';
$lang['cms_block_welcome'] = 'Benvenuto';
$lang['cms_block_wordgraph'] = 'Tags';
$lang['cms_block_xs_news'] = 'News XS';

$lang['cms_var_cms_style'] = 'CMS Stile Moderno';
$lang['cms_var_cms_style_explain'] = 'Lo stile moderno del CMS prevede dei menu in trasparenza in alto, mentre quello classico dei menu laterali';
$lang['cms_var_header_width'] = 'Larghezza Colonna Sinistra Globale';
$lang['cms_var_header_width_explain'] = 'Larghezza della colonna di sinistra globale in pixel (ove applicabile)';
$lang['cms_var_footer_width'] = 'Larghezza Colonna Destra Globale';
$lang['cms_var_footer_width_explain'] = 'Larghezza della colonna di destra globale in pixel (ove applicabile)';
$lang['cms_var_md_cache_file_locking'] = 'Blocco File Di Cache';
$lang['cms_var_md_cache_file_locking_explain'] = 'Questa opzione pu&ograve; evitare la corruzione in caso di errore';
$lang['cms_var_md_cache_write_control'] = 'Controllo Scrittura Cache';
$lang['cms_var_md_cache_write_control_explain'] = 'Verifica la correttezza dei file di cache';
$lang['cms_var_md_cache_read_control'] = 'Controllo Lettura Cache';
$lang['cms_var_md_cache_read_control_explain'] = 'Inclusione di una chiave di controllo nei file di cache';
$lang['cms_var_md_cache_read_type'] = 'Tipo Di Controllo Lettura Cache';
$lang['cms_var_md_cache_read_type_explain'] = 'Tipo di controllo lettura cache (funziona solo se il controllo viene abilitato)';
$lang['cms_var_md_cache_filename_protect'] = 'Protezione File Di Cache';
$lang['cms_var_md_cache_filename_protect_explain'] = 'I nomi dei file di cache vengono criptati per un maggiore livello di sicurezza';
$lang['cms_var_md_cache_serialize'] = 'Codifica Automatica Cache';
$lang['cms_var_md_cache_serialize_explain'] = 'Abilita/disabilita la codifica automatica della cache';

$lang['CMS_Config_updated'] = 'Configurazione Aggiornata Correttamente';
$lang['CMS_Click_return_config'] = 'Clicca %sQUI%s per tornare alla configurazione';
$lang['CMS_Click_return_cms'] = 'Clicca %sQUI%s per tornare alla Gestione CMS';
$lang['CMS_TITLE'] = 'CMS';
$lang['CMS_MANAGEMENT'] = 'CMS';
$lang['CMS_CONFIG'] = 'Configurazione CMS';
$lang['CMS_Guest'] = 'Ospite';
$lang['CMS_Reg'] = 'Registrato';
$lang['CMS_VIP'] = 'VIP';
$lang['CMS_Publisher'] = 'Publisher';
$lang['CMS_Reviewer'] = 'Revisore';
$lang['CMS_Content_Manager'] = 'Manager Contenuti';
$lang['CMS_ACP'] = 'Modifica Questa Pagina';
$lang['CMS_Pages'] = 'Pagine Sito';
$lang['CMS_ID'] = 'ID';
$lang['CMS_Actions'] = 'Modifica';
$lang['CMS_Layout'] = 'Layout';
$lang['CMS_Blocks'] = 'Blocchi';
$lang['CMS_Name'] = 'Nome';
$lang['CMS_Description'] = 'Descrizione';
$lang['CMS_LAYOUT_PAGE_ID'] = 'ID Pagina';
$lang['CMS_LAYOUT_PAGE_ID_EXPLAIN'] = 'Questo ID &egrave; utilizzato dal sistema dei permessi. Caratteri consentiti: alfabetici minuscoli, numeri, underscore, no spazi.';
$lang['CMS_MUST_FILL_ALL_FIELDS'] = 'Devi compilare tutti i campi';
$lang['CMS_Filename'] = 'Nome File';
$lang['CMS_Filename_Explain'] = 'Se specifichi un nome file verr&agrave; creata una nuova pagina con il nome scelto.';
$lang['CMS_Filename_Explain_OK'] = '<i>Il tuo server dovrebbe supportare la creazione automatica di files. Se scegli un nome per il nuovo file, questo dovrebbe venire creato automaticamente.</i>';
$lang['CMS_Filename_Explain_NO'] = '<i>Il tuo server <b>NON CONSENTE</b> la creazione automatica di files. Se vuoi creare una nuova pagina con un nuovo nome dovresti duplicare manualmente il file <b>index_empty.php</b> ed assegnargli il nome che hai scelto in questa casella.</i>';
$lang['CMS_Template'] = 'Template';
$lang['CMS_FileAlreadyExists'] = 'Il file che stai cercando di creare esiste gi&agrave;. Scegli un nome differente.';
$lang['CMS_FileCreationSuccess'] = 'Il file per la nuova pagina &egrave; stato creato automaticamente.';
$lang['CMS_FileCreationError'] = 'Il file non pu&ograve; essere creato automaticamente.';
$lang['CMS_FileCreationManual'] = 'Per cortesia, crea una copia di index_empty.php, rinominalo con il nome che hai scelto nel modulo di creazione della pagina e caricalo nella root del tuo sito.';
$lang['CMS_Permissions'] = 'Permessi';
$lang['CMS_Global_Header'] = 'Header Globale';
$lang['CMS_GLOBAL_BLOCKS'] = 'Blocchi Globali';
$lang['CMS_BREADCRUMBS'] = 'Navigazione';
$lang['CMS_Edit'] = 'Modifica';
$lang['CMS_Delete'] = 'Elimina';
$lang['CMS_Preview'] = 'Anteprima';
$lang['CMS_Configure_Blocks'] = 'Configura Blocchi';
$lang['CMS_PAGES_PERMISSIONS'] = 'Permessi Extra';
$lang['CMS_PAGES_PERMISSIONS_EXPLAIN'] = 'In questa pagina &egrave; possibile configurare i permessi di visualizzazione di alcune pagine del sito e la visualizzazione dei relativi <b>Blocchi Globali</b>. I blocchi globali, se abilitati nella <b>Configurazione CMS</b>, vengono visualizzati solo nelle pagine dove sono stati attivati.';
$lang['CMS_Page'] = 'Pagina';
$lang['CMS_ADS'] = 'Banners &amp; Sponsors';
$lang['CMS_OWNER'] = 'Proprietario';
$lang['CMS_SAVE_CHANGES'] = 'Salva Modifiche';
$lang['CMS_CHANGES_SAVED'] = 'Modifiche Salvate';
//$lang['CMS_'] = '';
// MG CMS - END

// MG CMS MENU - BEGIN
$lang['CMS_MENU_PAGE'] = 'Menu Dinamico';
$lang['CMS_MENU_PAGE_EXPLAIN'] = 'In questa pagina puoi creare menu personalizzati da includere nelle pagine del sito. In fase di creazione di categorie e link puoi specificare se utilizzare un nome standard o una variabile di lingua. Inoltre per ciascun link o categoria &egrave; possibile scegliere i permessi di visualizzazione o specificare se i link debbono aprirsi nella stessa finestra oppure in una nuova.';

$lang['CMS_Menu_New_Menu'] = 'Crea un nuovo blocco menu';
$lang['CMS_Menu_New_cat'] = 'Crea una nuova categoria';
$lang['CMS_Menu_New_link'] = 'Crea un nuovo link';
$lang['CMS_Menu_Edit_menu_links_button'] = 'Modifica links in questo menu';
$lang['CMS_Menu_Edit_cat_button'] = 'Modifica categoria';
$lang['CMS_Menu_Edit_link_button'] = 'Modifica link';
$lang['CMS_Menu_Set_auth'] = 'Permessi';
$lang['CMS_Menu_New_menu_name'] = 'Nome menu';
$lang['CMS_Menu_New_cat_name'] = 'Nome categoria';
$lang['CMS_Menu_New_link_name'] = 'Nome link';
$lang['CMS_Menu_Default_link'] = 'Default link (le impostazioni contrassegnate con un <b>*</b> verranno ignorate)';
$lang['CMS_Menu_No_default_link'] = 'No default link (Impostazioni personalizzate)';
$lang['CMS_Menu_New_menu_des'] = 'Descrizione menu';
$lang['CMS_Menu_New_cat_des'] = 'Descrizione categoria';
$lang['CMS_Menu_New_link_des'] = 'Descrizione link';
$lang['CMS_Menu_Choose_cat'] = 'Scegli la categoria';
$lang['CMS_Menu_Choose_cat_desc'] = 'Scegli la categoria a cui appartiene il link.';
$lang['CMS_Menu_link_status'] = 'Stato';
$lang['CMS_Menu_Icon'] = 'Icona';
$lang['CMS_Menu_No_Icon'] = 'Nessuna Icona';
$lang['CMS_Menu_Standard_Icon'] = 'Icona Standard';
$lang['CMS_Menu_link_external'] = 'Link esterno';
$lang['CMS_Menu_New_link_name_key'] = 'Variabile di lingua (specificata in <b>lang_dyn_menu.php</b>)';
$lang['CMS_Menu_No_lang_key'] = 'No variabile di lingua (usa il nome specificato)';
$lang['CMS_Menu_New_link_url'] = 'URL del link';
$lang['CMS_Menu_New_cat_link_url'] = 'URL della categoria (se non viene inserito l\'URL, cliccando sulla categoria sar&agrave; possibile comprimerla/espanderla)';
$lang['CMS_Menu_Update'] = 'Aggiorna Menu';

$lang['Click_Return_CMS_Menu'] = 'Clicca %sQUI%s per tornare alla pagina di gestione del menu';

$lang['Menu_created'] = 'Menu creato correttamente.';
$lang['Cat_created'] = 'Categoria creata correttamente.';
$lang['Link_created'] = 'Link creato correttamente.';
$lang['Menu_updated'] = 'Menu aggiornato correttamente.';
$lang['Cat_updated'] = 'Categoria aggiornata correttamente.';
$lang['Link_updated'] = 'Link aggiornato correttamente.';
$lang['Menu_deleted'] = 'Menu rimosso.';
$lang['Cat_deleted'] = 'Categoria rimossa.';
$lang['Link_deleted'] = 'Link rimosso.';

$lang['CMS_Menu_Not_Exist'] = 'Questo menu non esiste.';
$lang['CMS_Menu_Items_Not_Exist'] = 'Questo menu non ha categorie, clicca su aggiungi per aggiungerne una nuova.';
$lang['CMS_Menu_No_Cats_Exist'] = 'Questo menu non ha categorie. Prima di aggiungere un link devi creare una categoria.';
$lang['CMS_Menu_Item_Not_Exist'] = 'Questa voce di menu non esiste.';
$lang['CMS_Menu_Item_Add_Edit'] = 'Crea/Modifica Voce Menu';
// MG CMS MENU - END

// CMS - ADV - BEGIN
$lang['CMS_ADV'] = 'CMS ADV';
$lang['CMS_LINKS'] = 'Links';
$lang['CMS_SETTINGS'] = 'Impostazioni';
$lang['CMS_ADV_USERSLIST'] = 'CMS Utenti';
$lang['CMS_ADV_CUSTOM_PAGES'] = 'Pagine Light';
$lang['CMS_ADV_DEFAULT_TEMPLATE'] = 'Default';
$lang['CMS_ADV_DEFAULT_TEMPLATE_OPTION'] = '-- Template di default --';

$lang['BLOCK_MOVE'] = 'Sposta Blocco';
$lang['TURN_ACTIVE'] = 'Attiva/Disattiva Blocco';
$lang['TURN_BORDER'] = 'Attiva/Disattiva Bordi';
$lang['TURN_TITLEBAR'] = 'Attiva/Disattiva Barra del Titolo';
$lang['TURN_LOCAL'] = 'Attiva/Disattiva Localizzazione Titolo';
$lang['TURN_BACKGROUND'] = 'Attiva/Disattiva Sfondo';

$lang['BLOCKS_POSITION_SAVE'] = 'Salva posizione blocchi';
$lang['BLOCKS_POSITION_UPDATED'] = 'Posizione blocchi salvata con successo';

$lang['INVALID_BLOCKS'] = 'Posizione blocchi non valida';
// CMS - ADV - END

?>