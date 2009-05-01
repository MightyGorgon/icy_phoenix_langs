<?PHP
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

/*
* no help found?
*/
$lang['Dl_no_help_aviable'] = 'Nessun aiuto disponibile per l\'opzione selezionata';

/*
* title of help popup
*/
$lang['HELP_TITLE'] = 'Download MOD Online Help';

/*
* general configuration
*/
$lang['HELP_Dl_delay_auto_traffic'] = 'In questa parte viene specificato dopo quanti giorni dall\'iscrizione verr&agrave; assegnato il traffico all\'utente.<br />I giorni verranno contati a partire da quello di iscrizione.<br />Inserire il valore 0 per assegnare il traffico immediatamente dopo l\'iscrizione.';
$lang['HELP_Dl_delay_post_traffic'] = 'In questa parte viene specificato dopo quanti giorni verranno assegnato il traffico generato dai messaggi scritti.<br />I giorni verranno contati a partire da quello di iscrizione.<br />Inserire il valore 0 per assegnare il traffico immediatamente.';
$lang['HELP_DL_edit_time'] = 'Specifica il numero di giorni per il quale un file modificato verr&agrave; considerato come nuovo.<br />Inserire 0 per disabilitare questa funzione.';
$lang['HELP_Dl_guest_stats_show'] = 'Questa opzione includer&agrave; o meno i dati relativi ai visitatori nelle statistiche pubbliche.<br />I dati memorizzati continueranno, comunque, a campione <strong>anche</strong> quelli relativi ai visitatori.<br />Le statistiche mostrate nell\'ACP includeranno sempre anche i dati relativi ai visitatori.';
$lang['HELP_Dl_method'] = 'Il <strong>vecchio</strong> metodo invier&agrave; il file al client dell\'utente.<br />Questo metodo &egrave; compatibile con la maggior parte dei client web ma potrebbe non visualizzare la dimensione reale durante il download, impedendo al client di calcolare il tempo rimanente.<br />Il <strong>nuovo</strong> metodo visualizzer&agrave; la dimensione reale del file ma potrebbe generare errori.<br />Utilizza il metodo <strong>vecchio</strong> in caso di problemi.';
$lang['HELP_Dl_method_quota'] = 'Imposta la dimensione del file a partire dalla quale il file verr&agrave; considerato come <em>di grandi dimensioni</em>.<br />Questa opzione &egrave; valida solo per il metodo di download <strong>nuovo</strong> detto anche <em>chunked file</em>.<br />Se il file ha una dimensione inferiore lo stesso verr&agrave; inviato direttamente al web client.';
$lang['HELP_DL_new_time'] = 'Specifica il numero di giorni in cui un file viene considerato come <strong>nuovo</strong>.<br />Inserire 0 per disabilitare questa funzione.';
$lang['HELP_Download_path'] = 'Il percorso relativo alla cartella principale di Icy Phoenix.<br />In caso di installazione standard del mod questo valore &egrave; impostato come <strong>download/</strong>.<br />Se il sito &egrave; ospitato in un server Linux/Unix ricordati che, in questo caso, il sistema considera la differenza tra maiuscole e minuscole.<br />Assicurati di inserire il carattere <strong>/</strong> al termine della cartella ma di <em>non inserirlo</em> all\'inizio.<br />Questa cartella, ed eventuali cartelle interne, devono avere i permessi globali di scrittura e lettura ovvero <strong>CHMOD 777</strong> in modo che tutte le operazioni relative ai file possano essere eseguite senza errori<br />All\'interno di questa cartella devi creare una o pi&ugrave; cartelle che conterranno fisicamente i file.<br />Ti suggeriamo di creare le cartelle nidificate in modo da rispettare le categorie assegnate.<br />Queste cartelle devono essere inserite come percorso di categoria utilizzando la stessa sintassi della cartella di download <em>escludendo</em> la cartella download (<em>ulteriori informazioni sono mostrate nella sezione categorie</em>).<br />Puoi creare diverse cartelle interne tramite un client ftp o utilizzando il <strong>Toolbox</strong> (vedi il link in alto in questa pagina).';
$lang['HELP_Dl_thumb_max_size'] = 'Inserisci 0 come dimensione del file per disabilitare le miniature in tutte le categorie.<br />Nel caso tu permetta le miniature specifica la dimensione dell\'immagine da usare come miniatura.<br />Disattivando la visualizzazione delle miniature anche quelle presenti non saranno visualizzate.';
$lang['HELP_Dl_use_ext_blacklist'] = 'Se si abilita la <strong>blacklist</strong> tutti i file con le estensioni indicate non verranno accettati sia in upload, sia in aggiornamento.';
$lang['HELP_Dl_enable_post_traffic'] = 'Imposta la quantit&agrave; di traffico assegnata all\'utente per la creazione di nuovi argomenti, risposte o citazione.';
$lang['HELP_Dl_limit_desc_on_index'] = 'Taglia la descrizione dopo il numero di caratteri specificato.<br />Inserire 0 per disabilitare questa funzione.';
$lang['HELP_Dl_prevent_hotlink'] = 'Abilita questa opzione se vuoi evitare il download diretto del file.<br />Questa opzione <strong>NON</strong> crea una cartella protetta!';
$lang['HELP_Dl_user_traffic_once'] = 'Specifica se un download deve diminuire il traffico dell\'utente solo la prima volta che scarica il file.<br />Questa opzione <strong>NON</strong> modifica lo stato di download!';
$lang['HELP_Dl_edit_own_downloads'] = 'Se abiliti questa opzione, ciascun utente potr&agrave; modificare i file da lui inviati.';
$lang['HELP_Dl_shorten_extern_links'] = 'Specifica la lunghezza del link esterno visualizzato nei dettagli del download.<br />In base a questa lunghezza il link visualizzato verr&agrave; ridotto sino a rispettare la lunghezza specificata.<br />Lascia questo campo vuoto o inserisci 0 per disabilitare questa funzione.';
$lang['HELP_Dl_show_footer_legend'] = 'Questa operazione abilita o disabilita la legenda con lo stato del download nel pi&egrave; di pagina.<br />Le icone che possono essere visualizzate non saranno modificate da questa opzione.';
$lang['HELP_Dl_show_footer_stats'] = 'Questa opzione permette di attivare o disattivare le righe relative alle statistiche nel pi&egrave; di pagina della sezione download.<br />I dati ai fini statistici vengono raccolti indipendentemente dallo stato di questa opzione.';
$lang['HELP_Dl_show_real_filetime'] = 'Tramite questa opzione &egrave; possibile visualizzare la data reale di modifica nei dettagli di download.<br />Questo &egrave; l\'esatto timecode anche se il file viene uploadato con un client ftp.';
$lang['HELP_Dl_visual_confirmation'] = 'Attivando questa opzione l\'utente sar&agrave; obbligato ad inserire un codice di conferma di 5 caratteri per poter effettuare il download. Se l\'utente non inserir&agrave; il codice o ne inserisce uno errato il download non inizier&agrave;.';
$lang['HELP_Dl_report_broken'] = 'Attiva o disattiva la possibilit&agrave; di segnalare i download non funzionanti.<br />Se si imposta "non per i visitatori", soltanto gli utenti registrati potranno segnare un download non funzionante.';
$lang['HELP_Dl_report_broken_lock'] = 'Se si abilita questa opzione il download sar&agrave; bloccato sino a che sar&agrave; segnalato come non funzionante.<br />Il pulsante di download non sar&agrave; visualizzato e nessun utente potr&agrave; effettuare il download sino a che un amministratore o un moderatore provvederanno a sbloccarlo.';
$lang['HELP_Dl_report_broken_message'] = 'Se un download &egrave; segnalato come non funzionante, il sistema visualizzer&agrave; un messaggio di avviso.<br /> Se si abilita questa opzione questo messaggio verr&agrave; visualizzato anche quando il download &egrave; bloccato.<br />In questo caso il messaggio verr&agrave; visualizzato al posto del pulsante di download e non sotto di esso.';
$lang['HELP_Dl_report_broken_vc'] = 'Abilita una conferma visuale nel caso di segnalazione di un download non funzionante.<br />La segnalazione di download verr&agrave; elaborata solo se il codice inserito &egrave; esatto.';
$lang['HELP_Dl_Links_per_page'] = 'Questa opzione controlla il numero di file elencato per singola pagina e nelle statistiche nell\'ACP.<br />Nelle altre pagine verra&agrave; utilizzata l\'opzione indicata dall\'impostazione <strong>messaggi per pagina</strong>.';
$lang['HELP_Number_recent_dl_on_portal'] = 'Il numero degli ultimi download elencato nel portale.<br />Il blocco utilizza il valore <em>ultima modifica</em> relativo al file, di conseguenza &egrave; possibile che un file vecchio venga visualizzato nell\'elenco.';
$lang['HELP_DL_posts'] = 'Ogni utente, compreso amministratori e moderatori dell\'area Download, devono aver scritto almeno il numero di messaggi specificato per poter effettuare il download dei file non liberi.<br />Per attivare questa opzione &egrave; <strong>fortemente consigliata</strong> l\'installazione di un sistema antispam per evitare l\'inserimento di messaggi atti a raggiungere questo limite..<br />Inserire 0 per disabilitare questa funzione.';
$lang['HELP_Dl_physical_quota'] = 'Il limite totale in cui il MOD sar&agrave; in grado di utilizzare e memorizzare i download.<br />Se questo limite viene raggiunto i nuovi file potranno essere aggiunti soltanto attraverso un client FTP e gestiti attraverso l\'ACP di gestione dei file.';
$lang['HELP_Dl_overall_traffic'] = 'Il limite totale di traffico per i download e, se abilitati, per gli upload relativi al mese in corso.<br />Se questo limite viene raggiunto ciascun file verr&agrave; bloccato impedendone il download e, se attivo, non sar&agrave; possibile effettuare upload di nuovi file o modifiche di quelli presenti.';
$lang['HELP_Dl_newtopic_traffic'] = 'Per ciascuno nuovo argomento inserito l\'autore vedr&agrave; il traffico a lui assegnato aumentato del valore indicato.';
$lang['HELP_Dl_reply_traffic'] = 'Per ciascuna risposta inserita l\'autore vedr&agrave; il traffico a lui assegnato aumentato del valore indicato.';
$lang['HELP_Dl_stop_uploads'] = 'Questa opzione rende possibile abilitare/disabilitare gli upload.<br />Se si disabilita questa opzione solo l\'utente con i diritti amministrativi potr&agrave; inserire nuovi file.<br />Abilita questa opzione per permettere l\'upload da parte degli utenti, in funzione delle categorie e dei permessi utente e/o gruppo.';
$lang['HELP_Dl_upload_traffic_count'] = 'Se l\'opzione &egrave; abilitato, gli upload incideranno sul traffico globale mensile.<br />Una volta raggiunto il limite globale di traffico i nuovi file potranno essere inseriti solo attraverso un client FTP ed aggiunti tramite l\'ACP.';
$lang['HELP_Dl_thumb_max_dim'] = 'Questo valore limita la dimensione dell\'immagine relativa alla miniatura.<br />Inserire il valore 0 per disabilitare le miniature (non raccomandato se si imposta la dimensione del file miniatura).<br />Le miniature esistenti verranno comunque visualizzate sino a che anche la dimensione del file miniatura verr&agrave; impostato a 0.';
$lang['HELP_Dl_disable_email'] = 'Questa opzione abilita o disabilita la notifica via email per l\'inserimento di nuovi file o per la modifica di quelli esistenti.<br />Se questa opzione &egrave; abilitata potr&agrave; essere gestita per singolo file durante l\'aggiunta o la modifica di un download.<br /> Il sistema avviser&agrave; via email quegli utenti che hanno attivato l\'opzione di avviso.<br />Gli utenti possono accedere alla configurazione dal pi&egrave; di pagina della sezione download.';
$lang['HELP_Dl_disable_popup'] = 'Questa opzione abilita o disabilita la notifica via popup/messaggio per l\'inserimento di nuovi file o per la modifica di quelli esistenti.<br />Se questa opzione &egrave; abilitata potr&agrave; essere gestita per singolo file durante l\'aggiunta o la modifica di un download.<br /> Il sistema avviser&agrave; tramite un popup o un messaggio nel pi&egrave; di pagina quegli utenti che hanno attivato l\'opzione di avviso.<br />Gli utenti possono accedere alla configurazione dal pi&egrave; di pagina della sezione download.';
$lang['HELP_Dl_disable_popup_notify'] = 'Se si attiva questa opzione puoi modificare la modifica della data del file durante la modifica di un download.';
$lang['HELP_Dl_stat_perm'] = 'Selezionare da quale livello utente &egrave; possibile accedere alle statistiche.<br />P. E. se volete che le statistiche siano visualizzabili a partire dai moderatori della sezione download selezionate <strong>Moderatori Download</strong>.<br />Ricordiamo che questa pagina causa un intensa attivit&agrave; sul server che ospita il forum per cui si suggerisce di non rendere pubblicamente visibile questa pagina.';
$lang['HELP_Dl_hotlink_action'] = 'Qui puoi scegliere come lo script reagir&agrave; se qualcuno tenta di effettuare un download attraverso il link diretto.<br />Verr&agrave; visualizzato un messaggio o reindirizzer&agrave; verso il la pagina in cui sono indicati i dati di download del file.';
$lang['HELP_Dl_use_hacklist'] = 'Questa opzione attiva o disattiva l\'hack list.<br />Se questa opzione &egrave; attiva sar&agrave; possibile inserire le informazioni relative durante le operazioni di amministrazione di un file.<br />Se questa opzione viene disabilitata non verr&agrave; mostrata agli utenti come se non fosse mai stata installata.<br />Se si disabilita questa funzione tutti i dati relativi inseriti andranno persi.';

/*
* category management
*/
$lang['HELP_Dl_approve_comments'] = 'Se si disabilita questa opzione ogni commento inserito dovr&agrave; essere approvato da un moderatore o da un amministratore prima di essere visualizzato.';
$lang['HELP_Dl_cat_rules'] = 'Queste regole verranno visualizzate anche per le sub categorie e download e durante la consultazione della categoria.';
$lang['HELP_Dl_stats_prune'] = 'Inserire il numero di righe delle statistiche che questa categoria pu&ograve; raggiungere.<br />Ogni riga canceller&agrave; la pi&ugrave; vecchia.<br />Inserire il valore 0 per disattivare questo limite..';
$lang['HELP_Dl_cat_traffic'] = 'Specificare il traffico massimo mensile per questa categoria.<br />.Questo valore non incrementa il valore globale.<br />Inserire 0 per rimuovere il limite.';
$lang['HELP_Dl_cat_path'] = 'Qui devi specificare un percorso esistente per il download.<br />Questo valore deve essere quello di una cartella inserita in quella principale (p.e. downloads/) che &egrave; stata definita nella configurazione generale.<br />Specificare il nome della cartella chiudendolo con il carattere <strong>/</strong>.<br />Per esempio se la cartella associata alla categoria &egrave; <strong>downloads/mods/</strong> dovrai inserire nel "percorso della categoria" <strong>mods/</strong>.<br />Se si invia questa configurazione verr&agrave; effettuato un controllo.<br />Assicuratevi che la cartella inserita esista.<br />Assegnare i diritti di scrittura globale (<strong>CHMOD 777</strong>) per evitare errori.<br />Ricordatevi che il sistema Linux conosce la differenza tra maiuscole e minuscole.';
$lang['HELP_Dl_cat_name'] = 'Questo &egrave; il nome della categoria che sar&agrave; visualizzata.<br />Evita i caratteri speciali per evitare problemi con lo jumpbox.';
$lang['HELP_Dl_cat_description'] = 'Descrizione breve di questa categoria.<br />I BBCode non sono disponibili.<br />Questa descrizione verr&agrave; visualizzata nell\'indice dei download e nelle sub categorie.';
$lang['HELP_Dl_cat_parent'] = 'Livello principale o altra categoria in cui inserire questa categoria.<br />Tramite questo drop down dinamico puoi creare una struttura gerarchica per i download..';
$lang['HELP_Dl_must_approve'] = 'Abilita questa opzione per approvare ogni nuovo upload prima che il file venga reso disponibile nella categoria.<br />Gli Amministratori e moderatori verranno avvistati tramite email per ogni nuovo file inserito.';
$lang['HELP_Dl_mod_desc_allow'] = 'Abilita il blocco di informazioni durante l\'inserimento o l\'aggiornamento di un file.<br />Questa informazione pu&ograve; essere modificata solo da un amministratore o da un moderatore della sezione download.';
$lang['HELP_Dl_statistics'] = 'Abilita le statistiche estese per i file.<br />Tenete presente che queste statistiche generano queries addizionali e dataset in altre tabelle.';
$lang['HELP_Dl_comments'] = 'Attiva il sistema di commenti per questa categoria.<br />Puoi abilitare gli utenti ad inserire commenti in questa categoria.<br />Gli amministratori e i moderatori possono modificare o cancellare i commenti. Gli autori possono gestire i loro commenti.';
$lang['HELP_Dl_thumb_cat'] = 'Questa opzione abilita le miniature per questa categoria.<br />La dimensione di queste immagini pu&ograve; essere impostata nella configurazione principale di questo MOD.';

/*
* file management
*/
$lang['HELP_Dl_name'] = 'Questo &egrave; il nome del download che verr&agrave; visualizzato in varie parti.<br />Evita i caratteri speciali per non causare errori di visualizzazione.';
$lang['HELP_Dl_choose_category'] = 'Scegli le categoria in cui includere il download.<br />Il file deve essere gi&agrave; presente nella cartella associata alla categoria, in caso contrario verr&agrave; visualizzato un messaggio di errore.';
$lang['HELP_Dl_file_description'] = 'Descrizione breve per questo download.<br />Questa descrizione verr&agrave; visualizzata nella categoria del download.<br />BBCode non attivi per questo testo.<br />Inserisci un testo breve per evitare un appesantimento quando si accede alla categoria.';
$lang['HELP_Dl_files_url'] = 'Nome del file per questo download.<br />Inserire il nome senza percorso o caratteri <strong>\</strong> <strong>/</strong>.<br />Il file deve essere presente per evitare messaggi di errore.<br />Se l\'estensione del file &egrave; tra quelle proibite questo verr&agrave; bloccato.';
$lang['HELP_Dl_upload_file'] = 'Invia il file dal tuo computer.<br />Assicurati che la dimensione del file sia inferiore a quello indicato e che l\'estensione non sia compresa tra quelle mostrate di seguito.';
$lang['HELP_Dl_extern'] = 'Attiva questa funzione per i file ubicati aldifuori del sistema di forum ((http://www.example.com/media.mp3).<br />La funzione <strong>libero</strong> non viene considerata in questo caso.';
$lang['HELP_Dl_extern_up'] = 'Attiva questa funzione per i file ubicati aldifuori del sistema di forum ((http://www.example.com/media.mp3).<br />La funzione <strong>libero</strong> non viene considerata in questo caso.';
$lang['HELP_Dl_thumb'] = 'In questo campo &egrave; possibile effettuare l\'upload di una piccola immagine ( verifica la dimensione del file e dell\'immagine) da visualizzare nei dettagli del download.<br />Se esiste gi&agrave; un\'immagine questa operazione causer&agrave; la sovrascrittura con quella nuova.<br />Seleziona <em>elimina</em> se vuoi semplicemente rimuovere la miniatura esistente.';
$lang['HELP_Dl_is_free'] = 'Se si attiva questa funzione il download sar&agrave; libero per tutti.<br />La gestione del traffico verr&agrave; ignorata.<br />Seleziona <strong>Libero per utenti registrati</strong> se vuoi che il download sia permesso solo agli utenti registrati.';
$lang['HELP_Dl_traffic'] = 'Il valore massimo di traffico generato da un file.<br />Il valore 0 disattiva il controllo sul traffico.';
$lang['HELP_Dl_approve'] = 'Questa operazione render&agrave; immediatamente disponibile il download a tutti gli utenti.<br />Qualsiasi altra operazione nasconder&agrave; questo download a tutti gli utenti..';
$lang['HELP_Dl_no_change_edit_time'] = 'Seleziona questa opzione per impedire l\'aggiornamento della data per questo download.<br />Questa opzione non influisce sugli avvisi.';
$lang['HELP_Dl_disable_popup'] = 'Seleziona questa opzione per disattivare l\'avviso via popup.<br />Questo non influir&agrave; sugli avvisi via email o sull\'aggiornamento per l\'ultima modifica.';
$lang['HELP_Dl_disable_email'] = 'Seleziona questa opzione per disattivare l\'avviso via email.<br />Questo non influir&agrave; sugli avvisi via popup o sull\'aggiornamento per l\'ultima modifica.';
$lang['HELP_Dl_hacklist'] = 'Questa opzione permette di aggiungere questo download all\'hacklist (che deve essere attiva).<br />Per eseguire questa operazione seleziona <strong>SI</strong>.<br />Mostra informazioni aggiuntive visualizzer&agrave; questo blocco sono nei dettagli del download.';
$lang['HELP_Dl_hack_version'] = 'Versione del download.<br />Questa informazione sar&agrave; visualizzata nei download.<br />Non &egrave; possibile utilizzare questo campo nelle ricerche.';
$lang['HELP_Dl_hack_autor'] = 'L\'Autore di questo file.<br />Se non si compila il campo questo non verr&agrave; visualizzato.';
$lang['HELP_Dl_hack_autor_email'] = 'Indirizzo email dell\'autore.<br />Se non si compila il campo questo non verr&agrave; visualizzato.';
$lang['HELP_Dl_hack_autor_website'] = 'Sito dell\'autore.<br />Indicare la home page dell\'autore non la pagina in cui &egrave; presente il file.<br />Non inserite link a siti protetti o dal contenuto non conforme.';
$lang['HELP_Dl_hack_dl_url'] = 'Download alternativo per questo file.<br />Pu&ograve; essere il sito dell\'autore o un altro sito.<br />EVITARE il link diretto a file senza il permesso dell\'autore.';
$lang['HELP_Dl_mod_desc'] = 'Descrizione dettagliata del  MOD.<br />Puoi utilizzare i BBCode e gli Smilie .<br />Questo testo verr&agrave; mostrato solo nei dettagli del download.';
$lang['HELP_Dl_mod_list'] = 'Attiva questo blocco nei dettagli del download.<br />Se non si abilita questa opzione il blocco non verr&agrave; visualizzato.';
$lang['HELP_Dl_mod_require'] = 'Altri MOD necessari per installare questo download.<br />Il testo verr&agrave; visualizzato solo nei dettagli del download.';
$lang['HELP_Dl_mod_test'] = 'MOD Icy Phoenix con cui &egrave; stato testato correttamente.<br />Inserire solo la versione di Icy Phoenix<br />Il testo verr&agrave; visualizzato solo nei dettagli del download.';
$lang['HELP_Dl_mod_todo'] = 'In questa sezione puoi inserire gli eventuali lavori in corso.<br />Questo creer&agrave; la sezione ToDo List che potr&agrave; essere visualizzata e aperta dal pi&egrave; di pagina.<br />Con questo blocco di testo gli utenti potranno essere informati riguardo allo stato dello sviluppo di questo mod.<br />BBCode non attivi.<br />La ToDo list rimarr&agrave; attiva anche se questo blocco non verr&agrave; visualizzato.';
$lang['HELP_Dl_mod_warning'] = 'Avvisi importanti relativi all\'installazione di questo MOD in presenza di altri MOD.<br /><br />Il testo verr&agrave; visualizzato solo nei dettagli del download formattato con un altro coloro (rosso &egrave; il valore predefinito).<br />BBCODE non attivi';

$lang['HELP_Dl_user_download_limit_flag'] = 'Questa opzione consente di impostare un limite massimo di downloads mensili per ciascun utente. Ad esempio se attivi questo limite e lo imposti a 30, ogni utente potr&agrave; scaricare al massimo 30 files per mese. Il limite non viene applicato ad amministratori e moderatori.';
$lang['HELP_Dl_user_download_limit'] = 'Imposta in questo campo il numero massimo di downloads mensili consentito a ciascun utente. Questo limite deve essere attivato per poter funzionare ("Abilita controllo numero di downloads mensili"). Il limite non viene applicato ad amministratori e moderatori.';

?>