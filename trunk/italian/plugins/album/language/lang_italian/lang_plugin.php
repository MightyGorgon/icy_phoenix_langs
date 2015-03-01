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
* Smartor (smartor_xp@hotmail.com)
* Lopalong
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
	// Album Index
	'Photo_Album' => 'Album Fotografico',
	'Pics' => 'Immagini',
	'Last_Pic' => 'Ultima Immagine',
	'Public_Categories' => 'Categorie Pubbliche',
	'No_Pics' => 'Nessuna Immagine',
	'Users_Personal_Galleries' => 'Gallerie Personali',
	'Your_Personal_Gallery' => 'Galleria Personale',
	'Recent_Public_Pics' => 'Immagini Recenti Pubbliche',
	'Nav_Separator' => '&nbsp;&raquo;&nbsp;',

	// Category View
	'Category_not_exist' => 'Questa categoria non esiste',
	'Upload_Pic' => 'Carica Immagine',
	'Upload_Pics' => 'Carica Immagini',
	'JUpload_Pic' => 'Carica Immagini con Jupload',
	'Pic_Title' => 'Titolo Immagine',
	'View' => 'Visualizzazioni',
	'Pic_Poster' => 'Autore',
	'Pic_Image' => 'Immagine',
	'Waiting' => ' immagini in attesa di approvazione',

	'Album_view_can' => '<b>Puoi</b> visualizzare le immagini in questa categoria',
	'Album_view_cannot' => '<b>Non puoi</b> visualizzare le immagini in questa categoria',
	'Album_upload_can' => '<b>Puoi</b> caricare nuove immagini in questa categoria',
	'Album_upload_cannot' => '<b>Non puoi</b> caricare nuove immagini in questa categoria',
	'Album_rate_can' => '<b>Puoi</b> valutare le immagini in questa categoria',
	'Album_rate_cannot' => '<b>Non puoi</b> valutare le immagini in questa categoria',
	'Album_comment_can' => '<b>Puoi</b> commentare le immagini in questa categoria',
	'Album_comment_cannot' => '<b>Non puoi</b> commentare le immagini in questa categoria',
	'Album_edit_can' => '<b>Puoi</b> modificare le tue immagini e commenti in questa categoria',
	'Album_edit_cannot' => '<b>Non puoi</b> modificare le tue immagini e commenti in questa categoria',
	'Album_delete_can' => '<b>Puoi</b> eliminare le tue immagini e commenti in questa categoria',
	'Album_delete_cannot' => '<b>Non puoi</b> eliminare le tue immagini e commenti in questa categoria',
	'Album_moderate_can' => '<b>Puoi</b> %smoderare%s questa categoria',

	'Edit_pic' => 'Modifica',
	'Delete_pic' => 'Elimina',
	'Rating' => 'Valutazione',
	'Comments' => 'Commenti',
	'Last_Comment' => 'Ultimo Commento',
	'New_Comment' => 'Nuovo Commento',
	'Not_rated' => '<i>Nessuna Valutazione</i>',
	'Random_Pictures' => 'Immagini Casuali',
	'Highest_Rated_Pictures' => 'Immagini Con Valutazioni Pi&ugrave; Elevate',
	'Most_Viewed_Pictures' => 'Immagini Pi&ugrave; Visualizzate',

	'Avatar_Set' => 'Usa Come Avatar',
	'BBCode_Copy' => 'Copia BBCode',

	// Upload
	'Pic_Desc' => 'Descrizione Immagine',
	'Plain_text_only' => 'Solo Testo',
	'Max_length' => 'Dimensione Massima (bytes)',
	'Upload_pic_from_machine' => 'Carica un\'immagine dal tuo PC',
	'Upload_to_Category' => 'Carica Nella Categoria',
	'Upload_thumbnail_from_machine' => 'Carica la miniatura dal tuo PC (deve essere dello stesso tipo dell\'immagine)',
	'Upload_thumbnail' => 'Carica una miniatura',
	'Upload_thumbnail_explain' => 'La miniatura deve essere dello stesso tipo dell\'immagine',
	'Thumbnail_size' => 'Dimensione Miniatura (pixel)',
	'Filetype_and_thumbtype_do_not_match' => 'L\'immagine e la miniatura debbono essere dello stesso tipo',

	'Upload_no_title' => 'Devi inserire un titolo per l\'immagine',
	'Upload_no_file' => 'Devi inserire il percorso ed il nome del file',
	'Desc_too_long' => 'La descrizione &egrave; troppo lunga',

	'Max_file_size' => 'Dimensione massima (bytes)',
	'Max_width' => 'Larghezza massima (pixel)',
	'Max_height' => 'Altezza massima (pixel)',

	'JPG_allowed' => 'Si possono caricare immagini JPG',
	'PNG_allowed' => 'Si possono caricare immagini PNG',
	'GIF_allowed' => 'Si possono caricare immagini GIF',

	'Album_reached_quota' => 'E\' stato raggiunto il numero massimo di immagini. Non puoi caricare altre immagini. Per ulteriori informazioni contattare l\'amministratore',
	'User_reached_pics_quota' => 'Hai raggiunto il numero massimo di immagini. Non puoi caricare altre immagini. Per ulteriori informazioni contattare l\'amministratore',

	'No_valid_category_selected' => 'Nessuna categoria valida selezionata',
	'No_category_to_upload' => 'Purtroppo non hai ci sono categorie in cui hai i permessi per caricare immagini.',
	'Not_allowed_file_type' => 'Il tipo di file che stai cercando di caricare non &egrave; consentito',
	'Upload_image_size_too_big' => 'L\'immagine che stai cercando di caricare ha dimensioni eccessive',
	'Upload_thumbnail_size_too_big' => 'La dimensione della miniatura &egrave; eccessiva',

	'Missed_pic_title' => 'Devi inserire il titolo dell\'immagine',

	'Click_return_category' => 'Clicca %sQUI%s per tornare alla categoria',
	'Click_return_album_index' => 'Clicca %sQUI%s per tornare all\'Indice dell\'Album',

	'Add_File' => 'Aggiungi File',
	'File_thumbnail_count_mismatch' => 'Il numero di immagini caricate e di miniature non corrisponde',
	'No_thumbnail_for_picture_found' => 'Non sono state trovate le miniature per le immagini caricate (titolo: %s)',
	'No_picture_for_thumbnail_found' => 'Non sono state trovate immagini per le miniature caricate (titolo: %s)',
	'Unknown_file_and_thumbnail_error_mismatch' => 'Errore sconosciuto nel caricamento delle immagini e delle miniature<br />Nome immagine: %s e Nome miniatura: %s<br />',
	'Picture_exceeded_maximum_size_INI' => 'L\'immagine \'%s\' &egrave; troppo grande e non verr&agrave; caricata.<br />',
	'Thumbnail_exceeded_maximum_size_INI' => 'La miniatura \'%s\' &egrave; troppo grande e non verr&agrave; caricata.<br />',
	'Execution_time_exceeded_skipping' => 'Il tempo massimo per l\'esecuzione dello script di caricamento &egrave; stato superato. I seguenti files sono stati saltati:<br />',
	'Skipping_uploaded_picture_file' => '%s<br />',
	'Skipping_uploaded_picture_and_thumbnail_file' => '%s (miniagura: %s)<br />',
	'Album_upload_not_successful' => 'Nessuna delle immagini &egrave; stata caricata<br /><br />',
	'Album_upload_partially_successful' => 'Soltanto una parte delle immagini sono state caricate<br /><br />',
	'No_pictures_selected_for_upload' => 'Nessuna immagine selezionata per il caricamento, oppure c\'&egrave; stato un errore sconosciuto',

	'Bad_upload' => 'Errore nel caricamento',
	'Bad_upload_file_size' => 'Il file (%s) &egrave; troppo grande o corrotto',
	'Album_upload_successful' => 'Le immagini sono state caricate correttamente',
	'Album_upload_need_approval' => 'Le immagini sono state caricate correttamente.<br /><br />Per poterle per&ograve; visualizzare nell\'album devi attendere che l\'amministratore o il moderatore della categoria le approvino.',

	'Rotation' => 'Ruota immagine (senso antiorario) - Gradi',

	'Max_file_size' => 'Dimensione massima consentita (bytes)',
	'Max_width' => 'Larghezza massima prima della conversione (pixel)',
	'Max_height' => 'Altezza massima prima della conversione (pixel)',

	// Album Nuffload
	'time_elapsed' => 'Tempo Trascorso',
	'time_remaining' => 'Tempo Restante',
	'upload_in_progress' => 'Caricamento In Corso',
	'please_wait' => 'Attendere...',
	'uploaded' => 'Caricate %multi_id% di %multi_max% immagini.',
	'no_file_received' => 'Non sono stati inseriti files di immagini',
	'no_thumbnail_file_received' => 'Non sono stati inseriti i files delle miniature',
	'file_too_big' => 'Dimensione del file dell\'immagine troppo grande',
	'thumbnail_too_big' => 'Dimensione del file della miniatura troppo grande',
	'image_res_too_high' => 'Risoluzione immagine troppo elevata',
	'add_field' => 'Aggiungi un campo per il caricamento',
	'remove_field' => 'Rimuovi un campo per il caricamento',
	'ZIP_allowed' => 'Caricamento di files ZIP consentito',

	// View Pic
	'Pic_ID' => 'ID',
	'Pic_Details' => 'Dettagli Immagine',
	'Pic_Size' => 'Dimensione',
	'Pic_Type' => 'Tipo',
	'Pic_BBCode' => 'BBCode',
	'Pic_not_exist' => 'Questa immagine non esiste',
	'Click_enlarge' => 'Clicca sull\'immagine per vederla ingrandita',
	'Prev_Pic' => 'Visualizza Foto Precedente',
	'Next_Pic' => 'Visualizza Foto Successiva',
	'Slideshow' => 'Slide Show',
	'Slideshow_Delay' => 'Ritardo Slide Show',
	'Slideshow_On' => 'Slide Show',
	'Slideshow_Off' => 'Stop Slide Show',
	'Pics_Nav' => 'Navigazione Immagini',
	'Pics_Nav_Next' => 'Immagini Successive',
	'Pics_Nav_Prev' => 'Immagini Precedenti',
	'Pics_Counter' => 'Immagine %s di %s',

	// Edit Pic
	'Edit_Pic_Info' => 'Modifica le informazioni dell\'immagine',
	'Pics_updated_successfully' => 'Le informazioni dell\'immagine sono state aggiornate correttamente',

	// Delete Pic
	'Album_delete_confirm' => 'Sei sicuro di voler cancellare queste immagini?',
	'Pics_deleted_successfully' => 'Queste immagini sono state eliminate correttamente',

	// ModCP
	'Approval' => 'Approvazione',
	'Approve' => 'Approva',
	'Unapprove' => 'Rifiuta',
	'Status' => 'Stato',
	'Locked' => 'Bloccato',
	'Not_approved' => 'Non approvata',
	'Approved' => 'Approvata',
	'Copy' => 'Copia',
	'Move_to_Category' => 'Sposta nella categoria',
	'Pics_moved_successfully' => 'Le immagini sono state spostate correttamente',
	'Copy_to_Category' => 'Copia nella categoria',
	'Pics_copied_successfully' => 'Le immagini sono state copiate correttamente',
	'Pics_locked_successfully' => 'Le immagini sono state bloccate',
	'Pics_unlocked_successfully' => 'Le immagini sono state sbloccate',
	'Pics_approved_successfully' => 'Le immagini sono state approvate',
	'Pics_unapproved_successfully' => 'Le immagini sono state rifiutate',
	'NO_PICS_SPECIFIED' => 'Nessuna immagine selezionata',

	// Rate
	'Current_Rating' => 'Valutazione Corrente',
	'Please_Rate_It' => 'Per favore inserisci la tua valutazione',
	'Login_To_Vote' => 'Devi accedere per poter votare',
	'Already_rated' => 'Hai gi&agrave; inserito la tua valutazione',
	'Own_Pic_Rate' => 'Non puoi valutare le tue immagini',
	'Album_rate_successfully' => 'La valutazione &egrave; stata inserita correttamente.',
	'Click_rate_more' => 'Clicca %sQUI%s per valutare altre immagini.',
	'Hot_Or_Not' => 'Hot Or Not',

	// Comment
	'Comment_no_text' => 'Per favore inserisci il tuo commento',
	'Comment_too_long' => 'Il commento inserito &egrave; troppo lungo',
	'Comment_delete_confirm' => 'Sei sicuro di voler cancellare questo commento?',
	'Pic_Locked' => 'Spiacente, questa immagine &egrave; stata bloccata. Non &egrave; possibile inserire altri commenti.',
	'Post_your_comment' => 'Inserisci Il Tuo Commento',

	// Personal Gallery
	'Personal_Gallery_Explain' => 'Puoi visualizzare le gallerie personali degli altri utenti cliccando sul loro profilo',
	'Personal_gallery_not_created' => 'La galleria personale di %s non &egrave; stata creata',
	'Not_allowed_to_create_personal_gallery' => 'Spiacente, ma non &egrave; possibile creare gallerie personali',
	'Click_return_personal_gallery' => 'Clicca %sQUI%s per tornare alla galleria personale',

	// Download Archive
	'Download_pics' => 'Scarica Immagini (ZIP)',
	'Download_page' => 'Scarica Le Immagini Di Questa Pagina (ZIP)',
	'No_Download_auth' => 'Non sei autorizzato a scaricare le immagini in formato ZIP!',

	// Email Notification
	'Email_Notification' => 'Notifica Email Album',
	'Email_Notification_Explain' => 'Questa impostazione consente agli amministratori di venire avvisati per email quando una nuova immagine viene inserita nell\'album.',
	'Approvation_OK' => 'Approvata',
	'Approvation_NO' => 'Da Approvare',

	// Album Hierarchy Index Table
	'Last_Comment' => 'Ultimo Commento',
	'Last_Comments' => 'Ultimi Commenti',
	'No_Comment_Info' => 'Nessun Commento',
	'No_Pictures_In_Cat' => 'Nessuna Immagine Nella Categoria',
	'Total_Pics' => 'Immagini Totali',
	'Total_Comments' => 'Commenti Totali',
	'Last_Index_Thumbnail' => 'Ultima Immagine',
	'Album_sub_categories' => 'Sottocategorie',
	'No_Public_Galleries' => 'Nessuna Galleria Pubblica',
	'One_Sub_Total_Pics' => '%d Immagine',
	'Multiple_Sub_Total_Pics' => '%d Immagini ',
	'One_new_picture' => '%d Nuova Immagine',
	'Multiple_new_pictures' => '%d Nuove Immagini',

	// Personal Album Hierarchy Index Table
	'Personal_Categories' => 'Galleria Personale',
	'Create_Personal_Categories' => 'Crea Galleria Personale',
	'Personal_Cat_Admin' => 'Amministrazione Categorie Gallerie Personali',
	'Recent_Personal_Pics' => 'Immagini recenti nella Galleria Personale di %s',

	// Album Moderator Control Panel
	'Modcp_check_all' => 'Seleziona Tutte',
	'Modcp_uncheck_all' => 'Deseleziona Tutte',
	'Modcp_inverse_selection' => 'Inverti Selezione',

	'Show_selected_pic_view_mode' => 'Mostra soltanto la categoria personale selezionata',
	'Show_all_pic_view_mode' => 'Mostra tutte le immagini in questa Galleria Personale',

	// Access language strings
	'Album_Can_Manage_Categories' => '<b>Puoi</b> %sgestire%s le categorie nella galleria',
	'No_Personal_Category_admin' => 'Non hai il permesso per gestire le categorie nella tua galleria personale',

	// The picture list of a member (album_mod/album_memberlist.php)
	'Pic_Cat' => 'Categoria',
	'Picture_List_Of_User' => 'Tutte Le Immagini Di %s',
	'Member_Picture_List_Explain' => 'Puoi visualizzare la lista completa delle immagini pubblicate dagli altri membri cliccando sul link presente nel loro profilo',
	'Comment_List_Of_User' => 'Tutti i commenti di %s',
	'Rating_List_Of_User' => 'Tutte le valutazioni di %s',
	'Show_All_Pictures_Of_user' => 'Mostra tutte le immagini di %s',
	'Show_All_Comments_Of_user' => 'Mostra tutti i commenti di %s',
	'Show_All_Ratings_Of_user' => 'Mostra tutte le valutazioni di %s',

	// The pictures list
	'All_Picture_List_Of_User' => 'Tutte Le Immagini',
	'All_Comment_List_Of_User' => 'Tutti i commenti',
	'All_Rating_List_Of_User' => 'Tutte le valutazioni',
	'All_Show_All_Pictures_Of_user' => 'Mostra tutte le immagini',
	'All_Show_All_Comments_Of_user' => 'Mostra tutti i commenti',
	'All_Show_All_Ratings_Of_user' => 'Mostra tutte le valutazioni',

	'Not_commented' => '<i>Nessun Commento</i>',

	// Nuff's Stuff
	'Nuff_Click' => 'Clicca qui per applicare degli Effetti Speciali',
	'Nuff_UnClick' => 'Clicca qui per tornare alla visualizzazione normale',
	'Nuff_Title' => 'Effetti Speciali',
	'Nuff_Explain' => 'Tramite questa pagina &egrave; possibile applicare effetti speciali alle immagini presenti nell\'album.<br />Ricorda che questa operazione pu&ograve; creare molto carico al processore del server per cui sarebbe opportuno non abusarne. Inoltre per alcuni effetti le immagini vengono ridimensionate automaticamente proprio per limitare il carico sulla CPU.',
	'Nuff_Normal' => 'Immagine Normale',
	'Nuff_Normal_Explain' => 'Nessun effetto applicato',
	'Nuff_BW' => 'Black &amp; White',
	'Nuff_BW_Explain' => 'Questo effetto trasformer&agrave; l\'immagine in Bianco & Nero',
	'Nuff_Sepia' => 'Seppia',
	'Nuff_Sepia_Explain' => 'Questo effetto convertir&agrave; l\'immagine in Toni di Seppia',
	'Nuff_Flip' => 'Capovolgimento',
	'Nuff_Flip_Explain' => 'Questa funzione capovolge l\'immagine',
	'Nuff_Mirror' => 'Specchio',
	'Nuff_Mirror_Explain' => 'Questa funzione riflette l\'immagine come davanti ad uno specchio',
	'Nuff_Flip_H' => 'Orizzontale',
	'Nuff_Flip_V' => 'Verticale',
	'Nuff_Rotate' => 'Rotazione (Antioraria)',
	'Nuff_Rotate_Explain' => 'Rotazione dell\'immagine in senso antiorario',
	'Nuff_Resize' => 'Ridimensionamento',
	'Nuff_Resize_Explain' => 'Funzione che consente il ridimensionamento dell\'immagine',
	'Nuff_Resize_W' => 'Larghezza',
	'Nuff_Resize_H' => 'Altezza',
	'Nuff_Resize_No_Resize' => 'Disabilitato',
	'Nuff_Watermark' => 'Watermark',
	'Nuff_Watermark_Explain' => 'Questa funzione consente di sovrapporre un logo all\'immagine',
	'Nuff_Recompress' => 'Ricompressione',
	'Nuff_Recompress_Explain' => 'Questa funzione consente di ricampionare l\'immagine',
	'Nuff_Alpha' => 'Alpha',
	'Nuff_Alpha_Explain' => 'Questo effetto serve per applicare una trasparenza sull\'immagine',
	'Nuff_Blur' => 'Blur',
	'Nuff_Blur_Explain' => 'Questo effetto applica una sfocatura sull\'immagine',
	'Nuff_Scatter' => 'Scatter',
	'Nuff_Scatter_Explain' => 'Questo effetto applica una sfocatura simile al Blur',
	'Nuff_Pixelate' => 'Pixelate',
	'Nuff_Pixelate_Explain' => 'Questo effetto applica una sfocatura simile al Blur',
	'Nuff_Infrared' => 'Infrarossi',
	'Nuff_Infrared_Explain' => 'Questo effetto applica un filtro infrarossi sull\'immagine',
	'Nuff_Tint' => 'Tinta',
	'Nuff_Tint_Explain' => 'Questo effetto applica una tinta rossa sull\'immagine',
	'Nuff_Interlace' => 'Interlace (Linee Orizzontale)',
	'Nuff_Interlace_Explain' => 'Questo effetto inserisce delle bande nere orizzontali nell\'immagine',
	'Nuff_Screen' => 'Screen (Linee Or/Ver)',
	'Nuff_Screen_Explain' => 'Questo effetto inserisce delle bande nere orizzontali e verticali sull\'immagine',
	'Nuff_Stereogram' => 'Stereogramma',
	'Nuff_Stereogram_Explain' => 'Questa funzione converte l\'immagine in uno stereogramma (&egrave; richiesta una immagine di base in bianco e nero a 16 colori)',

	'Pic_Gallery' => 'Galleria Veloce',
	'Select_Pic' => 'Seleziona Immagine',
	'Select_Category' => 'Seleziona Categoria',
	'Title_Description' => 'Titolo &amp; Descrizione',

	// Pic watch
	'No_longer_watching_comment' => 'Non riceverai pi&ugrave; notifiche per i commenti a questa immagine',
	'Watching_comment' => 'Hai attivato la notifica per i commenti su questa immagine',
	'Pic_comment_notification' => 'Notifica Commenti Album',
	'Pic_comment_watch_checkbox' => 'Seleziona la casella per ricevere una notifica per l\'invio di commenti:',
	'Watch_pic' => 'Attiva la notifica per i commenti',
	'Unwatch_pic' => 'Disattiva la notifica per i commenti',
	'Click_return_pic' => 'Clicca %sQUI%s per tornare all\'immagine',

	'Pic_RDF' => 'RSS Feed 1.0',
	'Pic_RSS' => 'RSS Feed 2.0',
	)
);

?>