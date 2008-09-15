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

// Categories
$lang['Cat_manage_title'] = 'Gestione categorie';
$lang['File_manage_title'] = 'Gestione file';
$lang['All_files'] = 'Tutti i file';
$lang['Approved_files'] = 'File non accettati';
$lang['Broken_files'] = 'File non presenti';
$lang['File_cat'] = 'File nella categoria';
$lang['Maintenance'] = 'Manutenzione file';
$lang['Approve'] = 'Approva';
$lang['Unapprove'] = 'Disapprova';
$lang['File_mode'] = 'Visualizza';
$lang['Approve_selected'] = 'Approva selezionati';
$lang['Unapprove_selected'] = 'Disapprova selezionati';
$lang['Delete_selected'] = 'Cancella selezionati';
$lang['No_file'] = 'Non ci sono file';
$lang['Acat'] = 'Categoria: Aggiungi';
$lang['Ecat'] = 'Categoria: Modifica';
$lang['Dcat'] = 'Categoria: Cancella';
$lang['Rcat'] = 'Categoria: Riordina';
$lang['Cat_Permissions'] = 'Permessi categoria';
$lang['User_Permissions'] = 'Permessi utente';
$lang['Group_Permissions'] = 'Permessi gruppo';
$lang['User_Global_Permissions'] = 'Permessi globali utente';
$lang['Group_Global_Permissions'] = 'Permessi globali gruppo';
$lang['Acattitle'] = 'Aggiungi categoria';
$lang['Ecattitle'] = 'Edita categoria';
$lang['Dcattitle'] = 'Cancella categoria';
$lang['Rcattitle'] = 'Riordina categorie';
$lang['Catexplain'] = 'Potete utilizzare la sezione "Gestione categorie" per aggiungere, modificare, cancellare e riordinare le categorie. Per poter aggiungere files al database, dovete aver creato almeno una categoria. Potete selezionare un link per gestire le vostre categorie.';
$lang['Rcatexplain'] = 'Potete riordinare le categorie in modo da variare la posizione che viene mostrata nella pagina principale. Per riordinare le categorie, cambiate i numeri nell\'ordine da voi preferito. 1 verr&agrave; mostrato come prima voce, 2 come seconda e via dicendo. Questo non influisce nelle sub categorie.';
$lang['Catadded'] = 'La nuova categoria &egrave; stata aggiunta';
$lang['Catname'] = 'Nome della categoria';
$lang['Catnameinfo'] = 'Questo sar&agrave; il nome della categoria.';
$lang['Catdesc'] = 'Descrizione della categoria';
$lang['Catdescinfo'] = 'Questa &egrave; la descrizione dei files nella categoria';
$lang['Catparent'] = 'Categoria base';
$lang['Catparentinfo'] = 'Se volete che questa categoria sia una sub-categoria, selezionate di quale categoria base questa diventi sub-categoria.';
$lang['Allow_file'] = 'Consenti inserimento file';
$lang['Allow_file_info'] = 'Se non consentite l\'inserimento di files in questa categoria, la stessa diverr&agrave; una categoria di livello superiore a cui potrete aggiungere categorie di ordine inferiore, come nel forum.';
$lang['None'] = 'Nessuna';
$lang['Catedited'] = 'La categoria seleziona &egrave; stata modificata';
$lang['Delfiles'] = 'Cancella i files nella categoria?';
$lang['Do_cat'] = 'Cosa volete fare con le sub categorie incluse in questa categoria?';
$lang['Move_to'] = 'Sposta in';
$lang['Catsdeleted'] = 'Le categorie selezionate sono state cancellate';
$lang['Cdelerror'] = 'Non avete selezionato alcuna categoria da cancellare';
$lang['Rcatdone'] = 'Le categorie selezionate sono state riordinate';

//Catgories Permission
$lang['View'] = 'Mostra';
$lang['Read'] = 'Leggi';
$lang['View_file'] = 'Mostra File';
// MX Addon
$lang['Delete_file'] = 'Cancella File';
$lang['Edit_file'] = 'Modifica File';
// End
$lang['Upload'] = 'Upload File';
$lang['Download_file'] = 'Download File';
$lang['Rate'] = 'Valuta';
$lang['View_comment'] = 'Leggi commenti';
$lang['Post_comment'] = 'Invia commento';
$lang['Edit_comment'] = 'Modifica commento';
$lang['Delete_comment'] = 'Cancella commenti';
$lang['Category_auth_updated'] = 'I permessi della categoria sono stati aggiornati';
$lang['Click_return_catauth'] = 'Clicca %sQUI%s per ritornare ai permessi per le categorie';
$lang['Auth_Control_Category'] = 'Controllo Permessi per le categorie';
$lang['Category_auth_explain'] = 'qui potete modificare i livelli di autorizzazione per ogni categoria. Ricordate che modificando i permessi delle categorie influirete sugli utenti o meglio su quali operazioni essi potranno compiere all\'interno della categoria.';
$lang['Select_a_Category'] = 'Seleziona categoria';
$lang['Look_up_Category'] = 'Cerca categoria';
$lang['Category'] = 'Categoria';
$lang['Auth_Control_Category'] = 'Controllo Permessi per le categorie';

$lang['Category_ALL'] = 'TUTTI';
$lang['Category_REG'] = 'REG';
$lang['Category_PRIVATE'] = 'PRIVATO';
$lang['Category_MOD'] = 'MOD';
$lang['Category_ADMIN'] = 'ADMIN';

// Configuration
$lang['Settings'] = 'Configurazione';
$lang['Settingstitle'] = 'Configurazione Download';
$lang['Settingsexplain'] = 'La sezione che segue, vi permetter&agrave; di personalizzare tutte le opzioni di download.';
$lang['Dbname'] = 'Nome del database';
$lang['Dbnameinfo'] = 'Questo &egrave; il nome del database, come \'Indice download\'';
$lang['Sitename'] = 'Nome del sito';
$lang['Sitenameinfo'] = 'Questo &egrave; il nome del vostro sito per la barra di navigazione, come \'Home\'.';
$lang['Dburl'] = 'Database URL';
$lang['Dburlinfo'] = 'Questo &egrave; l\'URL della directory in cui &egrave; installato';
$lang['Hpurl'] = 'Home page URL';
$lang['Hpurlinfo'] = 'Questo &egrave; l\'URL del vostro portale o della vostra home page';
$lang['Topnum'] = 'Num. Top ';
$lang['Topnuminfo'] = 'Questo indica quanti files verranno mostrati nella classifica Top X Files scaricati';
$lang['Nfdays'] = 'Giorni per nuovi files';
$lang['Nfdaysinfo'] = 'Per quanti giorni un file deve essere mostrato con l\'icona "Nuovi files". Se questo viene indicato come 5, allora tutti i files immessi entro 5 giorni avranno l\'icona "Nuovi Files".';
$lang['Showva'] = 'Mostra \'Mostra tutti i files\'';
$lang['Showvainfo'] = 'Scegliete se mostrare la categoria \'Mostra tutti i files\' assieme alle altre categorie nella pagina principale';
$lang['Php_template'] = 'PHP nei template';
$lang['Php_template_info'] = 'Permette l\'uso del php nei files template';
$lang['Dbdl'] = 'Disabilita Downloads';
$lang['Dbdlinfo'] = 'Questo render&agrave; non disponibile agli utenti. Questa &egrave; una buona opzione per poter modificare il database senza rischi. Solamente gli utenti Admin potranno visualizzare il database';
$lang['Isdisabled'] = 'L\'opzione download non &egrave; al momento disponibile, per favore provate pi&ugrave; tardi.';
$lang['Com_settings'] = 'Configurazione commenti';
$lang['Com_allowh'] = 'Consenti HTML';
$lang['Com_allowb'] = 'Consenti BBCode';
$lang['Com_allows'] = 'Consenti Smileys';
$lang['Com_allowl'] = 'Consenti Links';
$lang['Com_messagel'] = 'Messaggio \'Nessun Links\' di default';
$lang['Com_messagel_info'] = 'Nel caso che non sia consentito inserire un link, questo testo verr&agrave; mostrato al posto dei link stessi';
$lang['Com_allowi'] = 'Consenti Immagini';
$lang['Com_messagei'] = 'Messaggio \'Nessuna immagine\' di default';
$lang['Com_messagei_info'] = 'Se le immagini non sono consentite, questo testo verr&agrave; mostrato in alternativa';
$lang['Max_char'] = 'Numero massimo di caratteri';
$lang['Max_char_info'] = 'Se qualcuno immette un commento superando questo limite in caratteri, verr&agrave;mostrato un messaggio di errore (Limita il commento).';
$lang['Settings_changed'] = 'I vostri settaggi sono stati aggiornati senza errori';
$lang['File_per_page'] = 'Numero di files per pagina';
$lang['File_per_page_info'] = '&egrave; possibile impostare il numero di files per pagina. Se omesso verranno mostrati 20 files per pagina.';
$lang['Hotlink_prevent'] = 'Prevenzione HotLink';
$lang['Hotlinl_prevent_info'] = 'Impostate questo parametro per evitare che i files vengano linkati direttamente da una pagina esterna s';
$lang['Hotlink_allowed'] = 'Domini consentiti per hotlink';
$lang['Hotlink_allowed_info'] = 'Domini consentiti per l\'hotlink sul file (separati da una virgola), p.e. www.icyphoenix.com, www.forumimages.com';
$lang['Default_sort_method'] = 'Metodo di ordinamento predefinito';
$lang['Default_sort_order'] = 'Ordinamento predefinito';
$lang['Max_filesize'] = 'Dimensione massima file';
$lang['Max_filesize_explain'] = 'Dimensione massima per i file. Un valore pari a 0 indica \'illimitato\'. Queste impostazioni sono soggette ai parametri del vostro server. P.E. Se la configurazione del vostro php permette massimo 2 Mega di Upload, questo parametro non pu&ograve; essere sovrascritto dal mod.';
$lang['Upload_directory'] = 'Upload Directory';
$lang['Upload_directory_explain'] = 'Inserire il percorso relativo al vostro forum per impostare una directory per upload dei file. p.e. \'pafiledb/uploads/\' se il vostro forum &egrave; installato su http://www.yourdomain.com/ip e la directory di upload &egrave; posizionata in http://www.yourdomain.com/ip/pafiledb/uploads.';
$lang['Screenshots_directory'] = 'Screenshots Directory';
$lang['Screenshots_directory_explain'] = 'Inserire il percorso relativo al vostro forum per impostare una directory per upload delle schermate . p.e. \'pafiledb/images/screenshots/\' se il vostro forum &egrave; installato su http://www.yourdomain.com/ip  e la directory di upload &egrave; posizionata in http://www.yourdomain.com/ip/pafiledb/images/screenshots.';
$lang['Forbidden_extensions'] = 'Estensioni proibite';
$lang['Forbidden_extensions_explain'] = 'qui potete impostare o rimuovere le estensioni non permesse. Separate ciascuna estensione con la virgola.';
$lang['Permission_settings'] = 'Impostazioni permessi';
$lang['Auth_search'] = 'Permessi di ricerca';
$lang['Auth_search_explain'] = 'Permetti le ricerche a specifici gruppi di utenti';
$lang['Auth_stats'] = 'Permessi statistiche';
$lang['Auth_stats_explain'] = 'Permetti le statistiche a specifici gruppi di utenti';
$lang['Auth_toplist'] = 'Permessi Toplist';
$lang['Auth_toplist_explain'] = 'Permetti la classifica (Toplist) a specifici gruppi di utenti';
$lang['Auth_viewall'] = 'Permessi Elenco globale';
$lang['Auth_viewall_explain'] = 'Permetti la visualizzazione di tutti i file a specifici gruppi di utenti';
$lang['Bytes'] = 'Bytes';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';


// Custom Field
$lang['Afield'] = 'Campo personalizzato: Aggiungi';
$lang['Efield'] = 'Campo personalizzato: Modifica';
$lang['Dfield'] = 'Campo personalizzato: Cancella';
$lang['Mfieldtitle'] = 'Campi personalizzati';
$lang['Afieldtitle'] = 'Aggiungi campo';
$lang['Efieldtitle'] = 'Modifica campo';
$lang['Dfieldtitle'] = 'Cancella campo';
$lang['Fieldexplain'] = 'Potete usare la gestione campi personalizzati. per aggiungere, modificare o rimuovere campi personalizzati. Potete utilizzare i campi personalizzati per aggiungere maggiori dettagli su un file. Per esempio, se volete un campo aggiuntivo per la dimensione del file, potete crearne uno aggiuntivo utilizzando l\'opzione Aggiungi\Modifica.';
$lang['Fieldname'] = 'Nome campo';
$lang['Fieldnameinfo'] = 'Questo &egrave; il nome del campo aggiuntivo, per esempio \'Dimensione File\'.';
$lang['Fielddesc'] = 'Descrizione del campo';
$lang['Fielddescinfo'] = 'Questa &egrave; la descrizione del campo, per esempio \'Dimensione del file in Megabytes\'';
$lang['Fieldadded'] = 'Il campo personalizzato &egrave; stato aggiunto';
$lang['Fieldedited'] = 'Il campo personalizzato selezionato &egrave; stato modificato';
$lang['Dfielderror'] = 'Non avete selezionato nessun campo da cancellare';
$lang['Fieldsdel'] = 'Il campo personalizzato selezionato &egrave; stato cancellato';

$lang['Field_data'] = 'Opzioni';
$lang['Field_data_info'] = 'Inserire le opzioni tra cui l\'utente potr&agrave; scegliere (una per riga).';
$lang['Field_regex'] = 'Espressione regolare';
$lang['Field_regex_info'] = 'Potete richiedere che il campo debba rispondere ad un\'espressione regolare %s(PCRE)%s.';
$lang['Field_order'] = 'Ordine di visualizzazione';

// File
$lang['Afile'] = 'File: Aggiungi';
$lang['Efile'] = 'File: Modifica';
$lang['Dfile'] = 'File: Cancella';
$lang['Afiletitle'] = 'Aggiungi File';
$lang['Efiletitle'] = 'Modifica File';
$lang['Dfiletitle'] = 'Modifica File';
$lang['Fileexplain'] = 'Potete usare la gestione files per aggiungere, modificare e cancellare files.';
$lang['Upload'] = 'Upload File';
$lang['Uploadinfo'] = 'Upload questo file';
$lang['Uploaderror'] = 'Il file esiste gi&agrave;. Per piacere rinominate il file e riprovate di nuovo.';
$lang['Uploaddone'] = 'Il file &egrave; stato uploadato senza errori. L\'URL del file &egrave; ';
$lang['Uploaddone2'] = 'Cliccate qui per inserire questo URL nel campo URL Download.';
$lang['Upload_do_done'] = 'File uploadato senza errori';
$lang['Upload_do_not'] = 'File non uploadato';
$lang['Upload_do_exist'] = 'Il file esiste gi&agrave;';
$lang['Filename'] = 'Nome del file';
$lang['Filenameinfo'] = 'Questo &egrave; il nome del file che state aggiungendo, come \'La mia foto.\'';
$lang['Filesd'] = 'Descrizione breve';
$lang['Filesdinfo'] = 'Questa &egrave; una breve descrizione del file. Questa verr&agrave; mostrata nella pagina che elenca tutti i files in una categoria, per cui questa descrizione deve essere breve';
$lang['Fileld'] = 'Descrizione estesa';
$lang['Fileldinfo'] = 'Questa &egrave; la descrizione estesa del file. Verr&agrave; visualizzata nella pagina informativa del file per cui la descrizione pu&ograve; essere pi&ugrave; lunga';
$lang['Filecreator'] = 'Autore';
$lang['Filecreatorinfo'] = 'Questo &egrave; il nome del creatore del file.';
$lang['Fileversion'] = 'Versione file';
$lang['Fileversioninfo'] = 'Questa &egrave; la versione del file, come 3.0 o 1.3 beta';
$lang['Filess'] = 'URL dello Screenshot ';
$lang['Filessinfo'] = 'Questo &egrave; l\'URL dello screenshot del file. Per esempio se il file &egrave; uno skin di Winamp, lo screenshot potrebbe mostrare Winamp con lo skin. Potete inserire l\'indirizzo dello screenshot oppure ';
$lang['Filess_upload'] = 'Upload uno ScreenShot sul server';
$lang['Filessinfo_upload'] = 'Potete inviare uno ScreenShot cliccando su sfoglia';
$lang['Filess_link'] = 'ScreenShot come Link';
$lang['Filess_link_info'] = 'Se volete che lo ScreenShot venga mostrato come link selezionate si.';
$lang['Filedocs'] = 'URL della documentazione o del manuale';
$lang['Filedocsinfo'] = 'Questo &egrave; l\'URL della documentazione o del manuale del file' ;
$lang['Fileurl'] = 'URL del file';
$lang['Fileurlinfo'] = 'Questo &egrave; l\'url del file da scaricare. Potete inserire manualmente l\'indirizzo o usare il pulsante Sfoglia.';
$lang['File_upload'] = 'Upload file';
$lang['Fileinfo_upload'] = 'Potete effettuare l\'upload del file cliccando su sfoglia';
$lang['Uploaded_file'] = 'File inviato';
$lang['Filepi'] = 'Icona associata';
$lang['Filepiinfo'] = 'Potete selezionare un\'icona da associare al file. Essa verr&agrave; mostrate a fianco del file nell\'elenco generale dei files.';
$lang['Filecat'] = 'Categoria';
$lang['Filecatinfo'] = 'Questa &egrave; la categoria a cui &egrave; associato il file.';
$lang['Filelicense'] = 'Licenza';
$lang['Filelicenseinfo'] = 'Questa &egrave; licenza che l\'utente deve accettare prima di scaricare il file.';
$lang['Filepin'] = 'Pin File';
$lang['Filepininfo'] = 'Potete stabilire se il file deve essere visualizzato o meno in cima alla lista.';
$lang['Fileadded'] = 'Il file selezionato &egrave; stato aggiunto';
// MX Addon
$lang['Filedeleted'] = 'Il file &egrave; stato cancellato';
// End
$lang['Fileedited'] = 'Il file selezionato &egrave; stato modificato';
$lang['Fderror'] = 'Non avete selezionato nessun file da cancellare';
$lang['Filesdeleted'] = 'Il file selezionato &egrave; stato cancellato';
$lang['Filetoobig'] = 'Il file supera la dimensione massima!';
$lang['Approved'] = 'Approvato';
$lang['Not_approved'] = '(Non approvato)';
$lang['Approved_info'] = 'Utilizzare questa opzione per rendere disponibile il file agli utenti e, inoltre, per approvare un file che sia stato mandato da un utente.';
$lang['Fchecker'] = 'File: Manutenzione';
$lang['File_checker'] = 'Manutenzione files';
$lang['File_checker_explain'] = 'In questa sezione &egrave; possibile effettuare controlli su tutti i files nel database e nella directory download.';
$lang['File_saftey'] = 'La manutenzione automatica dei files, cercher&agrave; di cancellare tutti i files e gli screenshots che non sono attualmente necessari e rimuover&agrave; qualsiasi record che faccia riferimento a files non pi&ugrave; presenti cancellando i relativi screenshost non trovati. Se in file non inizia con <span class="text_red">{html_path}</span> allora verr&agrave; saltato per motivi di sicurezza. Assicuratevi che <span class="text_red">{html_path}</span> sia il percorso utilizzato per i vostri files. &egrave; fortemente raccomandato che voi <span class="text_red">{html_path}</span> <a href="' . append_sid("admin_db_utilities.php?perform=backup") . '" class="genmed">Effettuate il backup del database</a> e della dir Upload.<br />';
$lang['File_checker_perform'] = 'Effettua controllo';
$lang['Checker_saved'] = 'Spazio totale recuperato';
$lang['Checker_sp1'] = 'Verifica record per file mancanti...';
$lang['Checker_sp2'] = 'Verifica record per screenshots mancanti...';
$lang['Checker_sp3'] = 'Sto rimuovendo i files non utilizzati...';
$lang['Filedls'] = 'Download Totali';
$lang['Addtional_field'] = 'Campi addizionali';
$lang['File_not_found'] = 'Il file indicato non &egrave; stato trovato';
$lang['SS_not_found'] = 'Lo ScreenShot indicato non &egrave; stato trovato';
// License
$lang['Alicense'] = 'Licenza: Aggiungi';
$lang['Elicense'] = 'Licenza: Modifica';
$lang['Dlicense'] = 'Licenza: Cancella';
$lang['Alicensetitle'] = 'Aggiungi Licenza';
$lang['Elicensetitle'] = 'Modifica Licenza';
$lang['Dlicensetitle'] = 'Cancella Licenza';
$lang['Licenseexplain'] = 'Potete usare la gestione licenze per aggiungere, modificare o eliminare licenze d\'uso. Potete selezionare un tipo di licenza per un file nella sezione aggiungi / modifica. Se un file ha una licenza associata, colui che lo preleva dovr&agrave; accettarne le condizioni prima di scaricare il file.';
$lang['Lname'] = 'Nome Licenza';
$lang['Ltext'] = 'Testo Licenza';
$lang['Licenseadded'] = 'La nuova licenza d\'uso &egrave; stata aggiunta';
$lang['Licenseedited'] = 'La licenza d\'uso selezionata &egrave; stata modificata';
$lang['Lderror'] = 'Non avete selezionato la licenza d\'uso da rimuovere';
$lang['Ldeleted'] = 'La licenza d\'uso selezionata &egrave; stata cancellata';
// MX
$lang['License_title'] = 'Licenza';
// ENd
$lang['Click_return'] = 'Cliccate %sQUI%s per tornare alla pagina precedente';
$lang['Click_edit_permissions'] = 'Clicca %sQUI%s per modificare i permessi di questa categoria';

//Java script messages and php errors
$lang['Cat_name_missing'] = 'Per favore, date un nome alla categoria';
$lang['Cat_conflict'] = 'Non potete avere una categoria senza files internamente ad una categoria che non consente files';
$lang['Cat_id_missing'] = 'Per favore, selezionare una categoria';
$lang['Missing_field'] = 'Per favore, riempite tutti i campi richiesti';

//Fields Types
$lang['Input'] = 'Text Box a linea singola';
$lang['Textarea'] = 'Text Box multilinea';
$lang['Radio'] = 'Buttons Radio a selezione singola';
$lang['Select'] = 'Men&ugrave; a selezione singola';
$lang['Select_multiple'] = 'Men&ugrave; a selezione multipla';
$lang['Checkbox'] = 'Checkbox a selezione multipla';

// MX Addon
$lang['Validation_settings'] = 'Validazione upload';
$lang['Need_validate'] = 'Valida gli  upload?';
$lang['Validator'] = 'Validatore';
$lang['PM_notify'] = 'Invio MP al/ai validatore(i) (n/d)';
$lang['Validator_admin_option'] = 'Admin';
$lang['Validator_mod_option'] = 'Admin e moderatore categoria';

$lang['Allow_comments'] = 'Abilita commenti (n/a)';
$lang['Allow_comments_info'] = 'Abilita/Disabilita commenti in questa categoria.';
$lang['Allow_ratings'] = 'Abilita valutazione (n/a)';
$lang['Allow_ratings_info'] = 'Abilita/Disabilita valutazioni in questa categoria.';

$lang['MCP_title'] = 'Pannello di controllo moderatore';
$lang['MCP_title_explain'] = 'In questa sezione il moderatore potr&agrave; gestire i file';

$lang['Fileadded_not_validated'] = 'Nuovo file inserito. Prima che questo sia reso visibile un moderatore o un admin deve approvare il file stesso.';

?>
