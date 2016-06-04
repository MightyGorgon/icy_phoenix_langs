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

$lang['KB_title'] = 'Knowledge Base';
$lang['Article'] = 'Articolo';
$lang['Category'] = 'Categoria';
$lang['Article_description'] = 'Descrizione';
$lang['Article_type'] = 'Tipo';
$lang['Article_keywords'] = 'Parole Chiave';
$lang['Articles'] = 'Articoli';
$lang['Add_article'] = 'Aggiungi Articolo';
$lang['Click_cat_to_add'] = 'Clicca su una Categoria per aggiungere un Articolo';
$lang['KB_Home'] = 'KB Home';
$lang['No_articles'] = 'Nessun Articolo';
$lang['Article_title'] = 'Titolo Articolo';
$lang['Article_text'] = 'Testo Articolo';
$lang['Add_article'] = 'Invia Articolo';
$lang['Read_article'] = 'Sta leggendo un Articolo';
$lang['Article_not_exsist'] = 'L\'Articolo non esiste';
$lang['Category_not_exsist'] = 'La Categoria non esiste';

$lang['Edit'] = 'Modifica';

$lang['Article_submitted_Approve'] = 'Articolo inviato senza problemi.<br />Un Amministratore esaminer&agrave; il tuo articolo e decider&agrave; se sia il caso di pubblicarlo cosicch&egrave; sia disponibile per gli Utenti.';
$lang['Article_submitted'] = 'Articolo inviato senza problemi.';
$lang['Click_return_kb'] = 'Clicca %sQUI%s per ritornare alla Knowledge Base';
$lang['Click_return_article'] = 'Clicca %sQUI%s per ritornare all\'articolo';


$lang['Article_Edited_Approve'] = 'Articolo Modificato senza problemi.<br />L\'articolo dovr&agrave; essere riapprovato prima che gli utenti lo possano vedere nuovamente.';
$lang['Article_Edited'] = 'Articolo Modificato senza problemi.';
$lang['Edit_article'] = 'Modifica Articolo';

$lang['KB_title'] = 'Knowledge Base';
$lang['KB_art_description'] = 'Da qui puoi approvare gli articoli in modo che gli utenti li possano vedere, oppure li puoi eliminare.';
$lang['Art_man'] = 'Gestione Articoli';
$lang['Cat_man'] = 'Gestione Categorie';
$lang['KB_cat_description'] = 'Da qui puoi aggiungere, modificare, o eliminare delle categorie nella Knowledge Base';
$lang['Art_action'] = 'Azione';

//approve
$lang['Art_edit'] = 'Articoli Modificati';
$lang['Art_not_approved'] = 'Non Approvati';
$lang['Art_approved'] = 'Approvati';
$lang['Approve'] = 'Approva';
$lang['Un_approve'] = 'Disapprova';
$lang['Article_approved'] = 'L\'articolo ora &egrave; Approvato.';
$lang['Article_unapproved'] = 'L\'articolo ora &egrave; Disapprovato.';

//delete
$lang['Delete'] = 'Elimina';
$lang['Confirm_art_delete'] = 'Sei sicuro di voler eliminare questo articolo?';
$lang['Confirm_art_delete_yes'] = '%sSi, voglio eliminare questo articolo%s';
$lang['Confirm_art_delete_no'] = '%sNo, non voglio eliminare questo articolo%s';
$lang['Article_deleted'] = 'Articolo Eliminato senza problemi.';

$lang['Click_return_article_manager'] = 'Clicca %sQUI%s per ritornare alla Gestione Articoli';

//cat manager
$lang['Create_cat'] = 'Crea Nuova Categoria:';
$lang['Create'] = 'Crea';
$lang['Cat_settings'] = 'Impostazioni Categoria';
$lang['Create_description'] = 'Da qui puoi cambiare il nome della categoria e aggiungere una descrizione alla nuova categoria.';
$lang['Cat_created'] = 'Categoria Creata senza problemi.';
$lang['Click_return_cat_manager'] = 'Clicca %sQUI%s per ritornare alla Gestione Categorie';
$lang['Edit_description'] = 'Da qui puoi modificare le impostazioni della tua categoria';
$lang['Edit_cat'] = 'Modifica Categoria';
$lang['Cat_edited'] = 'Categoria Modificata senza problemi.';
$lang['Parent'] = 'Padre';

$lang['Cat_delete_title'] = 'Elimina Categoria';
$lang['Cat_delete_desc'] = 'Da qui puoi eliminare una categoria e spostare tutti gli articoli in una nuova categoria';
$lang['Cat_deleted'] = 'Categoria Eliminata';
$lang['Delete_all_articles'] = 'Elimina Articoli';

//configuration
$lang['KB_config'] = 'Configurazione KB';
$lang['Art_types'] = 'Tipi di Articoli';
$lang['KB_config_title'] = 'Configurazione Knowledge Base';
$lang['KB_config_explain'] = 'Cambia la configurazione della tua Knowledge Base';
$lang['New_title'] = 'Permetti Nuovi Articoli';
$lang['New_explain'] = 'Permetti agli utenti di inviare alla tua Knowledge Base nuovi articoli';
$lang['Edit_name'] = 'Permetti Modifiche';
$lang['Edit_explain'] = 'Permetti agli utenti di modificare i loro articoli dopo averli inviati';
$lang['Notify_name'] = 'Inviami notifica tramite';
$lang['Notify_explain'] = 'Scegli in che modo essere notificato dell\'invio di nuovi articoli';
$lang['PM'] = 'PM';
$lang['Click_return_kb_config'] = 'Clicca %sQUI%s per ritornare alla Configurazione Knowledge Base';
$lang['Admin_id_name'] = 'ID Amministratore';
$lang['Admin_id_explain'] = 'Questo &egrave; l\'Id dell\'Amministratore a cui sar&agrave; spedita la notifica via PM.';
$lang['Approve_new_name'] = 'Approvazione Articoli Nuovi';
$lang['Approve_new_explain'] = 'Cambia l\'impostazione per cui gli articoli <b />nuovi</b /> debbano essere approvati oppure no';
$lang['Approve_edit_name'] = 'Approvazione Articoli Modificati';
$lang['Approve_edit_explain'] = 'Cambia l\'impostazione per cui gli articoli <b />modificati</b /> debbano essere approvati oppure no';
$lang['Allow_anon_name'] = 'Permetti l\'invio di articoli da parte degli Anonimi';
$lang['Allow_anon_explain'] = 'Cambia l\'impostazione per cui gli articoli <b />nuovi</b /> possano essere inviati dagli Anonimi';
$lang['Del_topic'] = 'Elimina Discussione';
$lang['Del_topic_explain'] = 'Quando Elimini un articolo vuoi eliminare anche la Discussione contenente i commenti?';
$lang['Use_comments'] = 'Permetti Commenti';
$lang['Use_comments_explain'] = 'Permetti agli Utenti di aggiungere i loro commenti agli Articoli';
$lang['Use_ratings'] = 'Valutazione';
$lang['Use_ratings_explain'] = 'Permetti agli Utenti di dare una valutazione agli Articoli';
$lang['Forum_id'] = 'ID del Forum';
$lang['Forum_id_explain'] = 'Questo &egrave; il Forum in cui verrano salvati i commenti agli articoli';


// Permissions
$lang['KB_Auth_Title'] = 'Permessi KB';
$lang['KB_Auth_Explain'] = 'Da qui puoi scegliere quali gruppi di utenti possono moderare le categorie della kb o che hanno possono avervi accesso nel caso le categorie fossero ad accesso privato.';
$lang['Select_a_Category'] = 'Seleziona Categoria';
$lang['Look_up_Category'] = 'Cerca Categoria';
$lang['KB_Auth_successfully'] = 'I permessi sono stati modificati senza problemi';
$lang['Click_return_KB_auth'] = 'Clicca %sQUI%s per ritornare ai Permessi KB';

$lang['Upload'] = 'Upload';
$lang['Rate'] = 'Valutazione';
$lang['Comment'] = 'Commenti';
$lang['Approval'] = 'Approvazione';
$lang['Approval_edit'] = 'Approvazione Modifica';

$lang['Allow_rating'] = 'Permetti Valutazione';
$lang['Allow_rating_explain'] = 'Gli Utenti hanno il permesso di valutare gli articoli.';

$lang['Allow_anonymos_rating'] = 'Permetti agli Anonimi di votare';
$lang['Allow_anonymos_rating_explain'] = 'Se il sistema di valutazione &egrave; attivo, permette agli Utenti Anonimi di votare';

$lang['KB_config_updated'] = 'Configurazione di Knowledge Base Aggiornata senza problemi.';

$lang['KB_notify_subject_new'] = 'Nuovo Articolo!';
$lang['KB_notify_subject_edited'] = 'Articolo Modificato!';
$lang['KB_notify_subject_approved'] = 'Articolo Approvato!';
$lang['KB_notify_subject_unapproved'] = 'Articolo Disapprovato!';
$lang['KB_notify_body'] = 'E\' stato inviato o modificato un articolo:

';

$lang['Category_Permissions'] = 'Permessi Categoria';
$lang['Category_Title'] = 'Titolo Categoria';
$lang['Category_Desc'] = 'Descrizione Categoria';
$lang['View_level'] = 'Livello Visione';
$lang['Upload_level'] = 'Livello Upload';
$lang['Rate_level'] = 'Livello Votazione';
$lang['Comment_level'] = 'Livello Commenti';
$lang['Edit_level'] = 'Livello Modifica';
$lang['Delete_level'] = 'Livello Elimina';
$lang['Approval_level'] = 'Livello Approvazione';
$lang['Approval_edit_level'] = 'Livello Approvazione Modifica';

$lang['KB_Rules_post_can'] = '<b>Puoi</b> inserire nuovi articoli in questa categoria';
$lang['KB_Rules_post_cannot'] = '<b>Non Puoi</b> inserire nuovi articoli in questa categoria';
$lang['KB_Rules_comment_can'] = '<b>Puoi</b> commentare gli articoli in questa categoria';
$lang['KB_Rules_comment_cannot'] = '<b>Non Puoi</b> commentare gli articoli in questa categoria';
$lang['KB_Rules_edit_can'] = '<b>Puoi</b> modificare gli articoli in questa categoria';
$lang['KB_Rules_edit_cannot'] = '<b>Non Puoi</b> modificare gli articoli in questa categoria';
$lang['KB_Rules_delete_can'] = '<b>Puoi</b> eliminare gli articoli in questa categoria';
$lang['KB_Rules_delete_cannot'] = '<b>Non Puoi</b> eliminare gli articoli in questa categoria';
$lang['KB_Rules_rate_can'] = '<b>Puoi</b> votare gli articoli in questa categoria';
$lang['KB_Rules_rate_cannot'] = '<b>Non Puoi</b> votare gli articoli in questa categoria';
$lang['KB_Rules_approval_can'] = 'Gli Articoli <b>non devono</b> essere approvati in questa categoria';
$lang['KB_Rules_approval_cannot'] = 'Gli Articoli <b>devono</b> essere approvati in questa categoria';
$lang['KB_Rules_approval_edit_can'] = 'Gli Articoli Modificati <b>non devono</b> essere approvati in questa categoria';
$lang['KB_Rules_approval_edit_cannot'] = 'Gli Articoli Modificati <b>devono</b> essere approvati in questa categoria';
$lang['KB_Rules_moderate'] = '<b>Puoi</b> %smoderare questa categoria%s'; // %s replaced by a href links, do not remove!
$lang['KB_Rules_moderate_can'] = '<b>Non Puoi</b> moderare questa categoria'; // %s replaced by a href links, do not remove!

$lang['Comments_show'] = 'Visualizza commenti agli articoli.';
$lang['Comments_show_explain'] = '- visualizza i commenti anche nella pagina degli articoli';
$lang['Comments_show_title'] = 'Commenti degli Utenti';

$lang['Mod_group'] = 'Gruppo Moderatori KB';
$lang['Mod_group_explain'] = '- con permesso di Admin per KB!';

$lang['Bump_post'] = 'Post di Bumping per l\'articolo';
$lang['Bump_post_explain'] = 'Quando si modifica un articolo, viene inviata una risposta nella discussione dell\'articolo che ne notifica l\'aggiornamento.';

$lang['Stats_list'] = 'Visualizza Statistiche KB';
$lang['Stats_list_explain'] = 'Visualizza le Statistiche di KB nell\'header.';

$lang['Header_banner'] = 'Visualizza Logo';
$lang['Header_banner_explain'] = 'Visualizza Logo Kb nell\'header.';

$lang['Comment_info'] = 'Impostazioni Commenti';
$lang['Rating_info'] = 'Impostazioni Valutazioni';


//types
$lang['Types_man'] = 'Gestione Tipi';
$lang['KB_types_description'] = 'Da qui puoi aggiungere, modificare o eliminare i vari tipi di articolo';
$lang['Create_type'] = 'Crea Nuovo Tipo di Articolo:';
$lang['Type_created'] = 'Tipo di Articolo Creato senza problemi.';
$lang['Click_return_type_manager'] = 'Clicca %sQUI%s per ritornare alla Gestione dei Tipi di Articoli';

$lang['Edit_type'] = 'Modifica Tipo di Articolo';
$lang['Edit_type_description'] = 'Da qui puoi modificare il nome del Tipo di Articolo';
$lang['Type_edited'] = 'Tipo di Articolo Modificato senza problemi.';

$lang['Type_delete_title'] = 'Elimina Tipo di Articolo';
$lang['Type_delete_desc'] = 'Da qui puoi cambiare il tipo degli articoli il cui tipo sta per essere eliminato.';
$lang['Change_type'] = 'Cambia il tipo di articolo in';
$lang['Change_and_Delete'] = 'Cambia ed Elimina';
$lang['Type_deleted'] = 'Tipo di Articolo Eliminato senza problemi.';

$lang['Pre_text_name'] = 'Istruzioni Invio Articoli';
$lang['Pre_text_header'] = 'Header Istruzioni Invio Articoli';
$lang['Pre_text_body'] = 'Corpo Istruzioni Invio Articoli';
$lang['Pre_text_explain'] = 'Queste sono le istruzioni visualizzate per gli utenti in cima al Forum d\'Invio Articoli.';
$lang['Show'] = 'Visualizza';
$lang['Hide'] = 'Nascondi';
$lang['Empty_fields'] = 'Per cortesia compila in tutte le sue parti il form.';
$lang['Empty_fields_return'] = 'Clicca %sQUI%s per ritornare al form.';

$lang['Empty_category'] = 'Devi selezionare una Categoria';
$lang['Empty_type']= 'Devi selezionare un Tipo';

$lang['Empty_article_name'] = 'Devi inserire il titolo dell\'articolo';
$lang['Empty_article_desc'] = 'Devi inserire la descrizione dell\'articolo';

$lang['Read_full_article'] = '&#8226; Leggi Tutto l\'Articolo';
$lang['Comments'] = 'Commenti';

$lang['No_add'] = 'Non puoi Aggiungere un nuovo articolo!';
$lang['No_edit'] = 'Non puoi Modificare questo articolo!';
$lang['Post_comments'] = 'Invia i tuoi Commenti';

$lang['Category_sub'] = 'SottoCategorie';
$lang['quick_stats'] = 'Statistiche';

// added
$lang['Edited_Article_info'] = 'Articolo aggiornato da ';
$lang['No_Articles'] = 'Questa categoria &egrave; vuota!';
$lang['Not_authorized'] = 'Diritti insufficienti per completare l\'operazione.';
$lang['TOC'] = 'Contenuti';

// Rate
$lang['Votes_label'] = 'Valutazioni ';
$lang['Votes'] = 'voto(i)';
$lang['No_votes'] = 'Nessun voto';
$lang['Rate'] = 'Valuta articolo';
$lang['ADD_RATING'] = '[Valuta articolo]';
$lang['Rerror'] = 'Spiacenti. Avete gi&agrave; valutato questo articolo.';
$lang['Rateinfo'] = 'State per valutare l\'articolo relativo a <i>{filename}</i>.<br /> Selezionate una valutazione tra 1 (peggiore) e 10 (migliore).';
$lang['Rconf'] = 'Avete valutato  <i>{filename}</i> {rate}.<br />Dopo questa valutazione il file ha raggiunto una valutazione di {newrating}/10.';
$lang['R1'] = '1';
$lang['R2'] = '2';
$lang['R3'] = '3';
$lang['R4'] = '4';
$lang['R5'] = '5';
$lang['R6'] = '6';
$lang['R7'] = '7';
$lang['R8'] = '8';
$lang['R9'] = '9';
$lang['R10'] = '10';
$lang['Click_return_rate'] = 'Cliccate %sQUI%s per ritornare all\'articolo';


// Print version
$lang['Print_version'] = 'Versione stampabile';

// Stats
$lang['Top_toprated'] = 'Articoli pi&ugrave; valutati';
$lang['Top_most_popular'] = 'Pi&ugrave; popolari';
$lang['Top_latest'] = 'Ultimi articoli';

// Votes check
$lang['Votes_check_ip'] = 'Verifica voto - ip';
$lang['Votes_check_ip_explain'] = 'E\' permesso un solo voto per indirizzo IP.';

$lang['Votes_check_userid'] = 'Verifica voto - utente';
$lang['Votes_check_userid_explain'] = 'Ogni utente pu&ograve; votare una volta sola..';

$lang['Article_pag'] = 'Paginazione articoli';
$lang['Article_pag_explain'] = 'Il numero di articoli  in una categoria (o nelle statistiche) prima di visualizzare una nuova pagina.';

$lang['Comments_pag'] = 'Paginazione commenti';
$lang['Comments_pag_explain'] = 'Numero di commenti prima di visualizzare una nuova pagina.';

$lang['News_sort'] = 'Metodo di ordinamento articoli';
$lang['News_sort_explain'] = 'Impostare il metodo di ordinamento degli articoli all\'interno di una categoria.';

$lang['News_sort_par'] = 'Ordinamento ASC o DISC';
$lang['News_sort_par_explain'] = '';


// General strings from the news admin panel

$lang['News_settings'] = "Impostazione blocco KB";
$lang['News_settings_short_explain'] = "Configurazione opzioni per il blocco.";
$lang['News_settings_explain'] = "Da qui potete configurare per il blocco KB. Questa sezione vi permette di estrarre le categoria da visualizzare nel blocco.";

// Update result messages

$lang['News_updated_return_settings'] = "Configurazione blocco KB aggiornata senza problemi.<br /><br />Cliccate %sQUI%s per ritornare alla pagina principale."; // %s's for URI params - DO NOT REMOVE
$lang['News_update_error'] = "Impossibile aggiornare la configurazione del blocco KB.<br /><br />Questo blocco &egrave; progettato per MySQL. Contattate l\'autore per la soluzione di eventuali problemi. Se siete in grado di effettuare una traduzione da SQL in altro formato database, inviatela a:<br />";


// Custom Field
$lang['Fieldselecttitle'] = 'Seleziona cosa fare';
$lang['Afield'] = 'Campo Personalizzato: Aggiungi';
$lang['Efield'] = 'Campo Personalizzato: Modifica';
$lang['Dfield'] = 'Campo Personalizzato: Elimina';
$lang['Mfieldtitle'] = 'Campi Personalizzati';
$lang['Afieldtitle'] = 'Aggiungi Campo';
$lang['Efieldtitle'] = 'Modifica Campo';
$lang['Dfieldtitle'] = 'Elimina Campo';
$lang['Fieldexplain'] = 'Puoi usare la gestione dei campi personalizzati per aggiungere, modificare ed eliminare i campi personalizzati. Puoi usare i campi personalizzati per aggiungere maggiori informazioni ad un articolo.';
$lang['Fieldname'] = 'Nome Campo';
$lang['Fieldnameinfo'] = 'Questo &egrave; il nome del campo, ad esempio \'Dimensione del File\'';
$lang['Fielddesc'] = 'Descrizione Campo';
$lang['Fielddescinfo'] = 'Questa &egrave; la descrizione del campo per esempio \'Dimensione del File in Megabytes\'';
$lang['Fieldadded'] = 'Il Campo Personalizzato &egrave; stato aggiunto senza problemi';
$lang['Fieldedited'] = 'Il Campo Personalizzato &egrave; stato modificato senza problemi';
$lang['Dfielderror'] = 'Non hai selezionato nessun campo da eliminare';
$lang['Fieldsdel'] = 'Il Campo Personalizzato selezionato &egrave; stato eliminato senza problemi';

$lang['Field_data'] = 'Opzioni';
$lang['Field_data_info'] = 'Immetti le opzioni fra cui l\'utente pu&ograve; scegliere. Separa tutte le opzioni con una nuova linea (premendo invio).';
$lang['Field_regex'] = 'Regular Expression';
$lang['Field_regex_info'] = 'Puoi richiedere che il campo inserito combaci con una regular expression %s(PCRE)%s.';
$lang['Field_order'] = 'Ordine di visualizzazione';

//Fields Types

$lang['Field_Input'] = 'Box di Testo a Linea Singola';
$lang['Field_Textarea'] = 'Box di Testo a Linea Multipla';
$lang['Field_Radio'] = 'Pulsante di scelta Singolo';
$lang['Field_Select'] = 'Menu a selezione Singola';
$lang['Field_Select_multiple'] = 'Menu a selezione Multipla';
$lang['Field_Checkbox'] = 'Pulsante di scelta Multipla';

$lang['Click_return'] = 'Clicca %sQUI%s per ritornare alla pagina precedente';

// added
$lang['Cat_all'] = "Tutte";

$lang['L_Pages'] = "Pages";
$lang['L_Pages_explain'] = "Usa il comando '[pages]' per dividere l\'articolo in pi&ugrave; pagine";
$lang['L_Toc'] = "Tabella dei Contenuti(TOC)";
$lang['L_Toc_explain'] = "Usa il comando '[toc]' per aggiungere una voce al TOC";
$lang['L_Abstract'] = "Sommario (Abstract)";
$lang['L_Abstract_explain'] = "Usa i comandi '[abstract]...[/abstract]' per inserire il sommarrio";

$lang['L_Title_Format'] = "Titolo (Title)";
$lang['L_Title_Format_explain'] = "Usa i comandi '[title]...[/title]' per inserire un titolo principale";

$lang['L_Subtitle_Format'] = "Sottotitolo (Subtitle)";
$lang['L_Subtitle_Format_explain'] = "Usa i comandi '[subtitle]...[/subtitle]' per inserire un sottotitolo";

$lang['L_Subsubtitle_Format'] = "Sottosottotitolo (Subsubtitle)";
$lang['L_Subsubtitle_Format'] = "Usa i comandi '[subsubtitle]...[/subsubtitle]' per inserire un piccolo header";

$lang['L_Options'] = "Opzioni:";
$lang['L_Formatting'] = "Formattazione:";

$lang['Default_article_id'] = "Imposta l\'articolo di default per colui che lo legge";

// Added for v. 2.0
$lang['KB_comment_prefix'] = '[KB] ';

$lang['Wysiwyg'] = 'Usa un editor wysiwyg';
$lang['Wysiwyg_explain'] = 'Se abilitato il dialogo standard bbcode/html/smilies, sar&agrave; rimpiazzato da un editor wysiwyg.';

$lang['Wysiwyg_path'] = 'Percorso del software wysiwyg';
$lang['Wysiwyg_path_explain'] = 'Questo &egrave; il percorso (da mxBB/ip root) alla cartella del software wysiwyg, es \'modules/\' se hai messo tinemce in modules/tinymce.';

$lang['Formatting_fixup'] = 'Fix Formattazione';
$lang['Formatting_fixup_explain'] = 'Se abilitato, il testo dell\'articolo verr&agrave; riformattato: wordwrapping, url truncates, img resizing, some bbcode reformatting etc';

$lang['Addtional_field'] = 'Maggiori Informazioni (opzionale)';

$lang['No_cat_comments_forum_id'] = 'I commenti sono abilitati, ma non hai specificato un forum d\'appoggio  in Categorie nel menu Kb del Pannello d\'Amministrazione';

// quick Nav
$lang['quick_nav'] = 'Navigazione Veloce KB';
$lang['quick_jump'] = 'Vai';
//added by Bicet
$lang['Categories'] = 'Categorie';
$lang['Subcategory'] = 'SottoCategoria';

?>
