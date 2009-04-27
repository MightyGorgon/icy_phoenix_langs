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

// Album Index
$lang['Photo_Album'] = 'Album Fotografico';
$lang['Pics'] = 'Immagini';
$lang['Last_Pic'] = 'Ultima Immagine';
$lang['Public_Categories'] = 'Categorie Pubbliche';
$lang['No_Pics'] = 'Nessuna Immagine';
$lang['Users_Personal_Galleries'] = 'Gallerie Personali';
$lang['Your_Personal_Gallery'] = 'Galleria Personale';
$lang['Recent_Public_Pics'] = 'Immagini Recenti Pubbliche';
$lang['Nav_Separator'] = '&nbsp;&raquo;&nbsp;';

// Category View
$lang['Category_not_exist'] = 'Questa categoria non esiste';
$lang['Upload_Pic'] = 'Carica Immagine';
$lang['Upload_Pics'] = 'Carica Immagini';
$lang['JUpload_Pic'] = 'Carica Immagini con Jupload';
$lang['Pic_Title'] = 'Titolo Immagine';
$lang['View'] = 'Visualizzazioni';
$lang['Pic_Poster'] = 'Autore';
$lang['Pic_Image'] = 'Immagine';
$lang['Waiting'] = ' immagini in attesa di approvazione';

$lang['Album_view_can'] = '<b>Puoi</b> visualizzare le immagini in questa categoria';
$lang['Album_view_cannot'] = '<b>Non puoi</b> visualizzare le immagini in questa categoria';
$lang['Album_upload_can'] = '<b>Puoi</b> caricare nuove immagini in questa categoria';
$lang['Album_upload_cannot'] = '<b>Non puoi</b> caricare nuove immagini in questa categoria';
$lang['Album_rate_can'] = '<b>Puoi</b> valutare le immagini in questa categoria';
$lang['Album_rate_cannot'] = '<b>Non puoi</b> valutare le immagini in questa categoria';
$lang['Album_comment_can'] = '<b>Puoi</b> commentare le immagini in questa categoria';
$lang['Album_comment_cannot'] = '<b>Non puoi</b> commentare le immagini in questa categoria';
$lang['Album_edit_can'] = '<b>Puoi</b> modificare le tue immagini e commenti in questa categoria';
$lang['Album_edit_cannot'] = '<b>Non puoi</b> modificare le tue immagini e commenti in questa categoria';
$lang['Album_delete_can'] = '<b>Puoi</b> eliminare le tue immagini e commenti in questa categoria';
$lang['Album_delete_cannot'] = '<b>Non puoi</b> eliminare le tue immagini e commenti in questa categoria';
$lang['Album_moderate_can'] = '<b>Puoi</b> %smoderare%s questa categoria';

$lang['Edit_pic'] = 'Modifica';
$lang['Delete_pic'] = 'Elimina';
$lang['Rating'] = 'Valutazione';
$lang['Comments'] = 'Commenti';
$lang['Last_Comment'] = 'Ultimo Commento';
$lang['New_Comment'] = 'Nuovo Commento';
$lang['Not_rated'] = '<i>Nessuna Valutazione</i>';
$lang['Random_Pictures'] = 'Immagini Casuali';
$lang['Highest_Rated_Pictures'] = 'Immagini Con Valutazioni Pi&ugrave; Elevate';
$lang['Most_Viewed_Pictures'] = 'Immagini Pi&ugrave; Visualizzate';

$lang['Avatar_Set'] = 'Usa Come Avatar';
$lang['BBCode_Copy'] = 'Copia BBCode';

// Upload
$lang['Pic_Desc'] = 'Descrizione Immagine';
$lang['Plain_text_only'] = 'Solo Testo';
$lang['Max_length'] = 'Dimensione Massima (bytes)';
$lang['Upload_pic_from_machine'] = 'Carica un\'immagine dal tuo PC';
$lang['Upload_to_Category'] = 'Carica Nella Categoria';
$lang['Upload_thumbnail_from_machine'] = 'Carica la miniatura dal tuo PC (deve essere dello stesso tipo dell\'immagine)';
$lang['Upload_thumbnail'] = 'Carica una miniatura';
$lang['Upload_thumbnail_explain'] = 'La miniatura deve essere dello stesso tipo dell\'immagine';
$lang['Thumbnail_size'] = 'Dimensione Miniatura (pixel)';
$lang['Filetype_and_thumbtype_do_not_match'] = 'L\'immagine e la miniatura debbono essere dello stesso tipo';

$lang['Upload_no_title'] = 'Devi inserire un titolo per l\'immagine';
$lang['Upload_no_file'] = 'Devi inserire il percorso ed il nome del file';
$lang['Desc_too_long'] = 'La descrizione &egrave; troppo lunga';

$lang['Max_file_size'] = 'Dimensione massima (bytes)';
$lang['Max_width'] = 'Larghezza massima (pixel)';
$lang['Max_height'] = 'Altezza massima (pixel)';

$lang['JPG_allowed'] = 'Si possono caricare immagini JPG';
$lang['PNG_allowed'] = 'Si possono caricare immagini PNG';
$lang['GIF_allowed'] = 'Si possono caricare immagini GIF';

$lang['Album_reached_quota'] = 'E\' stato raggiunto il numero massimo di immagini. Non puoi caricare altre immagini. Per ulteriori informazioni contattare l\'amministratore';
$lang['User_reached_pics_quota'] = 'Hai raggiunto il numero massimo di immagini. Non puoi caricare altre immagini. Per ulteriori informazioni contattare l\'amministratore';

$lang['No_valid_category_selected'] = 'Nessuna categoria valida selezionata';
$lang['No_category_to_upload'] = 'Purtroppo non hai ci sono categorie in cui hai i permessi per caricare immagini.';
$lang['Not_allowed_file_type'] = 'Il tipo di file che stai cercando di caricare non &egrave; consentito';
$lang['Upload_image_size_too_big'] = 'L\'immagine che stai cercando di caricare ha dimensioni eccessive';
$lang['Upload_thumbnail_size_too_big'] = 'La dimensione della miniatura &egrave; eccessiva';

$lang['Missed_pic_title'] = 'Devi inserire il titolo dell\'immagine';

$lang['Click_return_category'] = 'Clicca %sQUI%s per tornare alla categoria';
$lang['Click_return_album_index'] = 'Clicca %sQUI%s per tornare all\'Indice dell\'Album';

$lang['Add_File'] = 'Aggiungi File';
$lang['File_thumbnail_count_mismatch'] = 'Il numero di immagini caricate e di miniature non corrisponde';
$lang['No_thumbnail_for_picture_found'] = 'Non sono state trovate le miniature per le immagini caricate (titolo: %s)';
$lang['No_picture_for_thumbnail_found'] = 'Non sono state trovate immagini per le miniature caricate (titolo: %s)';
$lang['Unknown_file_and_thumbnail_error_mismatch'] = 'Errore sconosciuto nel caricamento delle immagini e delle miniature<br />Nome immagine: %s e Nome miniatura: %s<br />';
$lang['Picture_exceeded_maximum_size_INI'] = 'L\'immagine \'%s\' &egrave; troppo grande e non verr&agrave; caricata.<br />';
$lang['Thumbnail_exceeded_maximum_size_INI'] = 'La miniatura \'%s\' &egrave; troppo grande e non verr&agrave; caricata.<br />';
$lang['Execution_time_exceeded_skipping'] = 'Il tempo massimo per l\'esecuzione dello script di caricamento &egrave; stato superato. I seguenti files sono stati saltati:<br />';
$lang['Skipping_uploaded_picture_file'] = '%s<br/>';
$lang['Skipping_uploaded_picture_and_thumbnail_file'] = '%s (miniagura: %s)<br/>';
$lang['Album_upload_not_successful'] = 'Nessuna delle immagini &egrave; stata caricata<br/><br/>';
$lang['Album_upload_partially_successful'] = 'Soltanto una parte delle immagini sono state caricate<br/><br/>';
$lang['No_pictures_selected_for_upload'] = 'Nessuna immagine selezionata per il caricamento, oppure c\'&egrave; stato un errore sconosciuto';

//$lang['Bad_upload_file_size'] = 'Il file che stai cercando di caricare &egrave; troppo grande oppure &egrave; corrotto';
//$lang['Album_upload_successful'] = 'L\'immagine &egrave; stata caricata correttamente';
//$lang['Album_upload_need_approval'] = 'La tua immagine &egrave; stata caricata correttamente.<br /><br />Tuttavia l\'immagine deve essere approvata dall\'amministratore o da un moderatore prima di essere pubblicata.';

$lang['Bad_upload'] = 'Errore nel caricamento';
$lang['Bad_upload_file_size'] = 'Il file (%s) &egrave; troppo grande o corrotto';
$lang['Album_upload_successful'] = 'Le immagini sono state caricate correttamente';
$lang['Album_upload_need_approval'] = 'Le immagini sono state caricate correttamente.<br /><br />Per poterle per&ograve; visualizzare nell\'album devi attendere che l\'amministratore o il moderatore della categoria le approvino.';

$lang['Rotation'] = 'Ruota immagine (senso antiorario) - Gradi';

$lang['Max_file_size'] = 'Dimensione massima consentita (bytes)';
$lang['Max_width'] = 'Larghezza massima prima della conversione (pixel)';
$lang['Max_height'] = 'Altezza massima prima della conversione (pixel)';

// Album Nuffload
$lang['time_elapsed'] = 'Tempo Trascorso';
$lang['time_remaining'] = 'Tempo Restante';
$lang['upload_in_progress'] = 'Caricamento In Corso';
$lang['please_wait'] = 'Attendere...';
$lang['uploaded'] = 'Caricate %multi_id% di %multi_max% immagini.';
$lang['no_file_received'] = 'Non sono stati inseriti files di immagini';
$lang['no_thumbnail_file_received'] = 'Non sono stati inseriti i files delle miniature';
$lang['file_too_big'] = 'Dimensione del file dell\'immagine troppo grande';
$lang['thumbnail_too_big'] = 'Dimensione del file della miniatura troppo grande';
$lang['image_res_too_high'] = 'Risoluzione immagine troppo elevata';
$lang['add_field'] = 'Aggiungi un campo per il caricamento';
$lang['remove_field'] = 'Rimuovi un campo per il caricamento';
$lang['ZIP_allowed'] = 'Caricamento di files ZIP consentito';

// View Pic
$lang['Pic_ID'] = 'ID';
$lang['Pic_Details'] = 'Dettagli Immagine';
$lang['Pic_Size'] = 'Dimensione';
$lang['Pic_Type'] = 'Tipo';
$lang['Pic_BBCode'] = 'BBCode';
$lang['Pic_not_exist'] = 'Questa immagine non esiste';
$lang['Click_enlarge'] = 'Clicca sull\'immagine per vederla ingrandita';
$lang['Prev_Pic'] = 'Visualizza Foto Precedente';
$lang['Next_Pic'] = 'Visualizza Foto Successiva';
$lang['Slideshow'] = 'Slide Show';
$lang['Slideshow_Delay'] = 'Ritardo Slide Show';
$lang['Slideshow_On'] = 'Slide Show';
$lang['Slideshow_Off'] = 'Stop Slide Show';
$lang['Pics_Nav'] = 'Navigazione Immagini';
$lang['Pics_Nav_Next'] = 'Immagini Successive';
$lang['Pics_Nav_Prev'] = 'Immagini Precedenti';
$lang['Pics_Counter'] = 'Immagine %s di %s';

// Edit Pic
$lang['Edit_Pic_Info'] = 'Modifica le informazioni dell\'immagine';
$lang['Pics_updated_successfully'] = 'Le informazioni dell\'immagine sono state aggiornate correttamente';

// Delete Pic
$lang['Album_delete_confirm'] = 'Sei sicuro di voler cancellare queste immagini?';
$lang['Pics_deleted_successfully'] = 'Queste immagini sono state eliminate correttamente';

// ModCP
$lang['Approval'] = 'Approvazione';
$lang['Approve'] = 'Approva';
$lang['Unapprove'] = 'Rifiuta';
$lang['Status'] = 'Stato';
$lang['Locked'] = 'Bloccato';
$lang['Not_approved'] = 'Non approvata';
$lang['Approved'] = 'Approvata';
$lang['Copy'] = 'Copia';
$lang['Move_to_Category'] = 'Sposta nella categoria';
$lang['Pics_moved_successfully'] = 'Le immagini sono state spostate correttamente';
$lang['Copy_to_Category'] = 'Copia nella categoria';
$lang['Pics_copied_successfully'] = 'Le immagini sono state copiate correttamente';
$lang['Pics_locked_successfully'] = 'Le immagini sono state bloccate';
$lang['Pics_unlocked_successfully'] = 'Le immagini sono state sbloccate';
$lang['Pics_approved_successfully'] = 'Le immagini sono state approvate';
$lang['Pics_unapproved_successfully'] = 'Le immagini sono state rifiutate';

// Rate
$lang['Current_Rating'] = 'Valutazione Corrente';
$lang['Please_Rate_It'] = 'Per favore inserisci la tua valutazione';
$lang['Login_To_Vote'] = 'Devi accedere per poter votare';
$lang['Already_rated'] = 'Hai gi&agrave; inserito la tua valutazione';
$lang['Own_Pic_Rate'] = 'Non puoi valutare le tue immagini';
$lang['Album_rate_successfully'] = 'La valutazione &egrave; stata inserita correttamente.';
$lang['Click_rate_more'] = 'Clicca %sQUI%s per valutare altre immagini.';
$lang['Hot_Or_Not'] = 'Hot Or Not';

// Comment
$lang['Comment_no_text'] = 'Per favore inserisci il tuo commento';
$lang['Comment_too_long'] = 'Il commento inserito &egrave; troppo lungo';
$lang['Comment_delete_confirm'] = 'Sei sicuro di voler cancellare questo commento?';
$lang['Pic_Locked'] = 'Spiacente, questa immagine &egrave; stata bloccata. Non &egrave; possibile inserire altri commenti.';
$lang['Post_your_comment'] = 'Inserisci Il Tuo Commento!';

// Personal Gallery
$lang['Personal_Gallery_Explain'] = 'Puoi visualizzare le gallerie personali degli altri utenti cliccando sul loro profilo';
$lang['Personal_gallery_not_created'] = 'La galleria personale di %s non &egrave; stata creata';
$lang['Not_allowed_to_create_personal_gallery'] = 'Spiacente, ma non &egrave; possibile creare gallerie personali';
$lang['Click_return_personal_gallery'] = 'Clicca %sQUI%s per tornare alla galleria personale';

// Download Archive
$lang['Download_pics'] = 'Scarica Immagini (ZIP)';
$lang['Download_page'] = 'Scarica Le Immagini Di Questa Pagina (ZIP)';
$lang['No_Download_auth'] = 'Non sei autorizzato a scaricare le immagini in formato ZIP!';

// Email Notification
$lang['Email_Notification'] = 'Notifica Email Album';
$lang['Email_Notification_Explain'] = 'Questa impostazione consente agli amministratori di venire avvisati per email quando una nuova immagine viene inserita nell\'album.';
$lang['Approvation_OK'] = 'Approvata';
$lang['Approvation_NO'] = 'Da Approvare';

// Album Hierarchy Index Table
$lang['Last_Comment'] = 'Ultimo Commento';
$lang['Last_Comments'] = 'Ultimi Commenti';
$lang['No_Comment_Info'] = 'Nessun Commento';
$lang['No_Pictures_In_Cat']= 'Nessuna Immagine Nella Categoria';
$lang['Total_Pics'] = 'Immagini Totali';
$lang['Total_Comments'] = 'Commenti Totali';
$lang['Last_Index_Thumbnail'] = 'Ultima Immagine';
$lang['Album_sub_categories'] = 'Sottocategorie';
$lang['No_Public_Galleries'] = 'Nessuna Galleria Pubblica';
$lang['One_Sub_Total_Pics'] = '%d Immagine';
$lang['Multiple_Sub_Total_Pics'] = '%d Immagini ';
$lang['One_new_picture'] = '%d Nuova Immagine';
$lang['Multiple_new_pictures'] = '%d Nuove Immagini';

// Personal Album Hierarchy Index Table
$lang['Personal_Categories'] = 'Galleria Personale';
$lang['Create_Personal_Categories'] = 'Crea Galleria Personale';
$lang['Personal_Cat_Admin'] = 'Amministrazione Categorie Gallerie Personali';
$lang['Recent_Personal_Pics'] = 'Immagini recenti nella Galleria Personale di %s';

// Album Moderator Control Panel
$lang['Modcp_check_all'] = 'Seleziona Tutte';
$lang['Modcp_uncheck_all'] = 'Deseleziona Tutte';
$lang['Modcp_inverse_selection'] = 'Inverti Selezione';

$lang['Show_selected_pic_view_mode'] = 'Mostra soltanto la categoria personale selezionata';
$lang['Show_all_pic_view_mode'] = 'Mostra tutte le immagini in questa Galleria Personale';

// Access language strings
$lang['Album_Can_Manage_Categories'] = '<b>Puoi</b> %sgestire%s le categorie nella galleria';
$lang['No_Personal_Category_admin'] = 'Non hai il permesso per gestire le categorie nella tua galleria personale';

// The picture list of a member (album_mod/album_memberlist.php)
$lang['Pic_Cat'] = 'Categoria';
$lang['Picture_List_Of_User'] = 'Tutte Le Immagini Di %s';
$lang['Member_Picture_List_Explain'] = 'Puoi visualizzare la lista completa delle immagini pubblicate dagli altri membri cliccando sul link presente nel loro profilo';
$lang['Comment_List_Of_User'] = 'Tutti i commenti di %s';
$lang['Rating_List_Of_User'] = 'Tutte le valutazioni di %s';
$lang['Show_All_Pictures_Of_user'] = 'Mostra tutte le immagini di %s';
$lang['Show_All_Comments_Of_user'] = 'Mostra tutti i commenti di %s';
$lang['Show_All_Ratings_Of_user'] = 'Mostra tutte le valutazioni di %s';

// The pictures list
$lang['All_Picture_List_Of_User'] = 'Tutte Le Immagini';
$lang['All_Comment_List_Of_User'] = 'Tutti i commenti';
$lang['All_Rating_List_Of_User'] = 'Tutte le valutazioni';
$lang['All_Show_All_Pictures_Of_user'] = 'Mostra tutte le immagini';
$lang['All_Show_All_Comments_Of_user'] = 'Mostra tutti i commenti';
$lang['All_Show_All_Ratings_Of_user'] = 'Mostra tutte le valutazioni';

$lang['Not_commented'] = '<i>Nessun Commento</i>';

// Nuff's Stuff
$lang['Nuff_Click'] = 'Clicca qui per applicare degli Effetti Speciali';
$lang['Nuff_UnClick'] = 'Clicca qui per tornare alla visualizzazione normale';
$lang['Nuff_Title'] = 'Effetti Speciali';
$lang['Nuff_Explain'] ='Tramite questa pagina &egrave; possibile applicare effetti speciali alle immagini presenti nell\'album.<br />Ricorda che questa operazione pu&ograve; creare molto carico al processore del server per cui sarebbe opportuno non abusarne. Inoltre per alcuni effetti le immagini vengono ridimensionate automaticamente proprio per limitare il carico sulla CPU.';
$lang['Nuff_Normal'] = 'Immagine Normale';
$lang['Nuff_Normal_Explain'] = 'Nessun effetto applicato';
$lang['Nuff_BW'] = 'Black & White';
$lang['Nuff_BW_Explain'] = 'Questo effetto trasformer&agrave; l\'immagine in Bianco & Nero';
$lang['Nuff_Sepia'] = 'Seppia';
$lang['Nuff_Sepia_Explain'] = 'Questo effetto convertir&agrave; l\'immagine in Toni di Seppia';
$lang['Nuff_Flip'] = 'Capovolgimento';
$lang['Nuff_Flip_Explain'] = 'Questa funzione capovolge l\'immagine';
$lang['Nuff_Mirror'] = 'Specchio';
$lang['Nuff_Mirror_Explain'] = 'Questa funzione riflette l\'immagine come davanti ad uno specchio';
$lang['Nuff_Flip_H'] = 'Orizzontale';
$lang['Nuff_Flip_V'] = 'Verticale';
$lang['Nuff_Rotate'] = 'Rotazione (Antioraria)';
$lang['Nuff_Rotate_Explain'] = 'Rotazione dell\'immagine in senso antiorario';
$lang['Nuff_Resize'] = 'Ridimensionamento';
$lang['Nuff_Resize_Explain'] = 'Funzione che consente il ridimensionamento dell\'immagine';
$lang['Nuff_Resize_W'] = 'Larghezza';
$lang['Nuff_Resize_H'] = 'Altezza';
$lang['Nuff_Resize_No_Resize'] = 'Disabilitato';
$lang['Nuff_Watermark'] = 'Watermark';
$lang['Nuff_Watermark_Explain'] = 'Questa funzione consente di sovrapporre un logo all\'immagine';
$lang['Nuff_Recompress'] = 'Ricompressione';
$lang['Nuff_Recompress_Explain'] = 'Questa funzione consente di ricampionare l\'immagine';
$lang['Nuff_Alpha'] = 'Alpha';
$lang['Nuff_Alpha_Explain'] = 'Questo effetto serve per applicare una trasparenza sull\'immagine';
$lang['Nuff_Blur'] = 'Blur';
$lang['Nuff_Blur_Explain'] = 'Questo effetto applica una sfocatura sull\'immagine';
$lang['Nuff_Scatter'] = 'Scatter';
$lang['Nuff_Scatter_Explain'] = 'Questo effetto applica una sfocatura simile al Blur';
$lang['Nuff_Pixelate'] = 'Pixelate';
$lang['Nuff_Pixelate_Explain'] = 'Questo effetto applica una sfocatura simile al Blur';
$lang['Nuff_Infrared'] = 'Infrarossi';
$lang['Nuff_Infrared_Explain'] = 'Questo effetto applica un filtro infrarossi sull\'immagine';
$lang['Nuff_Tint'] = 'Tinta';
$lang['Nuff_Tint_Explain'] = 'Questo effetto applica una tinta rossa sull\'immagine';
$lang['Nuff_Interlace'] = 'Interlace (Linee Orizzontale)';
$lang['Nuff_Interlace_Explain'] = 'Questo effetto inserisce delle bande nere orizzontali nell\'immagine';
$lang['Nuff_Screen'] = 'Screen (Linee Or/Ver)';
$lang['Nuff_Screen_Explain'] = 'Questo effetto inserisce delle bande nere orizzontali e verticali sull\'immagine';
$lang['Nuff_Stereogram'] = 'Stereogramma';
$lang['Nuff_Stereogram_Explain'] = 'Questa funzione converte l\'immagine in uno stereogramma (&egrave; richiesta una immagine di base in bianco e nero a 16 colori)';

$lang['Pic_Gallery'] = 'Galleria Veloce';
$lang['Select_Pic'] = 'Seleziona Immagine';
$lang['Select_Category'] = 'Seleziona Categoria';
$lang['Title_Description'] = 'Titolo &amp; Descrizione';

// Pic watch
$lang['No_longer_watching_comment'] = 'Non riceverai pi&ugrave; notifiche per i commenti a questa immagine';
$lang['Watching_comment'] = 'Hai attivato la notifica per i commenti su questa immagine';
$lang['Pic_comment_notification'] = 'Notifica Commenti Album';
$lang['Pic_comment_watch_checkbox'] = 'Seleziona la casella per ricevere una notifica per l\'invio di commenti:';
$lang['Watch_pic'] = 'Attiva la notifica per i commenti';
$lang['Unwatch_pic'] = 'Disattiva la notifica per i commenti';
$lang['Click_return_pic'] = 'Clicca %sQUI%s per tornare all\'immagine';

$lang['Pic_RDF'] = 'RSS Feed 1.0';
$lang['Pic_RSS'] = 'RSS Feed 2.0';

?>