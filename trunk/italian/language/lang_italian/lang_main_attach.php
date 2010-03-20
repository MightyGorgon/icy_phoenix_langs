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
	// Attachment Mod Main Language Variables

	// Auth Related Entries
	/*
	'Rules_attach_can' => '<b>Puoi</b> allegare i files in questo forum',
	'Rules_attach_cannot' => '<b>Non puoi</b> allegare files in questo forum',
	'Rules_download_can' => '<b>Puoi</b> scaricare gli allegati in questo forum',
	'Rules_download_cannot' => '<b>Non puoi</b> scaricare gli allegati in questo forum',
	*/
	'Rules_attach_can' => '<b>Puoi</b> allegare i files',
	'Rules_attach_cannot' => '<b>Non puoi</b> allegare files',
	'Rules_download_can' => '<b>Puoi</b> scaricare gli allegati',
	'Rules_download_cannot' => '<b>Non puoi</b> scaricare gli allegati',
	'Sorry_auth_view_attach' => 'Autorizzazione insufficiente per scaricare o visualizzare il file allegato',

	// Viewtopic -> Display of Attachments
	'Description' => 'Descrizione', // used in Administration Panel too...
	'Downloaded' => 'Contatore Download',
	'Download' => 'Download', // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
	'Filesize' => 'Dimensione',
	'Viewed' => 'Visualizzato',
	'Download_number' => 'File visto o scaricato %d volta(e)', // replace %d with count
	'Extension_disabled_after_posting' => 'L\'estensione \'%s\' &egrave; stata disattivata da un amministratore, perci&ograve; questo allegato non &egrave; visualizzato.', // used in Posts and PM's, replace %s with mime type

	// Posting/PM -> Initial Display
	'Attach_posting_cp' => 'Gestione allegati',
	'Attach_posting_cp_explain' => 'Se selezionate "Aggiungi allegato", vi verr&agrave; mostrato un box per l\'aggiunta degli Allegati.<br /> Se cliccate su "Allegati inviati", vi verr&agrave; mostrato una lista dei files allegati e vi sar&agrave; possibile  modificarli. <br /> Se volete sostituire l\'allegato (Invia nuova versione), dovete cliccare entrambe i link. Aggiungere l\'allegato come fareste normalmente e, successivamente, non cliccate su "Aggiungi Allegato" ma su "Invia nuova versione" relativo all\'allegato che volete aggiornare.',

	// Posting/PM -> Posting Attachments
	'Add_attachment' => 'Aggiungi allegato',
	'Add_attachment_title' => 'Aggiungi allegato',
	'Add_attachment_explain' => 'Se non si intende allegare un file &egrave; sufficiente non compilare i campi di questa sezione',
	'File_name' => 'Nome del file',
	'File_comment' => 'Descrizione del file',

	// Posting/PM -> Posted Attachments
	'Posted_attachments' => 'Allegati inviati',
	'Options' => 'Opzioni',
	'Update_comment' => 'Aggiorna descrizione',
	'Delete_attachments' => 'Cancella allegati',
	'Delete_attachment' => 'Cancella allegato',
	'Delete_thumbnail' => 'Rimuovi Thumbnail',
	'Upload_new_version' => 'Invia aggiornamento',

	// Errors -> Posting Attachments
	'Invalid_filename' => '%s &egrave; un nome file non valido', // replace %s with given filename
	'Attachment_php_size_na' => 'L\'allegato &egrave; troppo grande.<br />Couldn\'t get the maximum Size defined in PHP.<br />The Attachment Mod is unable to determine the maximum Upload Size defined in the php.ini.',
	'Attachment_php_size_overrun' => 'Allegato troppo grande.<br />Maximum Upload Size: %d MB.<br /> Limite in php.ini, questo limite &egrave; modificabile sono in PHP.ini alla voce \'upload_max_filesiz&egrave;.',
	'FileType_Mismatch' => 'Tipo file non corrispondente',
	'Disallowed_extension' => 'L\'estensione %s non &egrave; permessa su questo forum', // replace %s with extension (e.g. .php)
	'Disallowed_extension_within_forum' => 'Non avete un\'autorizzazione sufficiente per allegare file con questa estensione in questo forum', // replace %s with the Extension
	'Attachment_too_big' => 'Allegato troppo grande.<br />Max : %d %s', // replace %d with maximum file size, %s with size var
	'Attach_quota_reached' => '&egrave; stata raggiunta la dimensione massima per gli allegati. Contattate l\'amministratore del forum per ulteriori informazioni.',
	'Too_many_attachments' => 'Impossibile aggiungere l\'allegato: raggiunto il numero massimo di %d allegati nel messaggio', // replace %d with maximum number of attachments
	'Error_imagesize' => 'L\'allegato immagine deve essere inferiore a  %d pixels larghezza e %d pixels altezza',
	'General_upload_error' => 'Errore in fase di Upload : Impossibile uploadare l\'allegato in %s.', // replace %s with local path

	'Error_empty_add_attachbox' => 'Devi inserire un valore nel Box \'Aggiungi allegato\' ',
	'Error_missing_old_entry' => 'Impossibile aggiornare l\'allegato, non trovo il vecchio allegato',

	// Errors -> PM Related
	'Attach_quota_sender_pm_reached' => 'Spiacenti. La dimensione massima consentita degli allegati nei messaggi privati &egrave; stata raggiunta. Per cortesia cancellate i messaggi con allegati salvati nella vostra cartella privata.',
	'Attach_quota_receiver_pm_reached' => 'Spiacenti. La dimensione massima consentita degli allegati nei messaggi privati di \'%s\' &egrave; stata raggiunta. Per cortesia informate il destinatario di questo problema ed aspettate che abbia reso disponibile lo spazio necessari.',

	// Errors -> Download
	'No_attachment_selected' => 'Non &egrave; stato selezionato un allegato da  visualizzare e/o scaricare.',
	'Error_no_attachment' => 'L\'allegato selezionato non esiste pi&ugrave;',

	// Delete Attachments
	'Confirm_delete_attachments' => 'Siete certi di voler cancellare gli allegati selezionati?',
	'Deleted_attachments' => 'Gli allegati selezionati sono stati cancellati.',
	'Error_deleted_attachments' => 'Impossibile cancellare gli allegati.',
	'Confirm_delete_pm_attachments' => 'Volete veramente cancellare tutti gli allegati in questo messaggio privato?',

	// General Error Messages
	'Attachment_feature_disabled' => 'Gli allegati sono disabilitati.',

	'Directory_does_not_exist' => 'La directory \'%s\' non esiste o non &egrave; raggiungibile.', // replace %s with directory
	'Directory_is_not_a_dir' => 'Verificare se  \'%s\' &egrave; una directory.', // replace %s with directory
	'Directory_not_writeable' => 'Directory \'%s\' non accessibile in scrittura. Dovete creare la directory e settare gli attributi con chmod 777. Verificare inoltre il proprietario della directory.', // replace %s with directory

	'Ftp_error_connect' => 'Impossibile connettersi al server FTP: \'%s\'. Verificare i parametri FTP.',
	'Ftp_error_login' => 'Impossibile connettersi al server FTP. L\'utente \'%s\' o la sua password sono errati. Verificare i parametri FTP.',
	'Ftp_error_path' => 'Directory FTP non accessibile: \'%s\'. Verificare i parametri FTP.',
	'Ftp_error_upload' => 'Impossibile inviare i files nella dir ftp:: \'%s\'. Verificare i parametri FTP.',
	'Ftp_error_delete' => 'Impossibile cancellare i files nella directory: \'%s\'. Verificare i parametri FTP. Altro motivo per la visione di questo messaggio &egrave; dovuto alla cancellazione dell\'allegato. Verificare nella sezione "Allegati Fantasma".',
	'Ftp_error_pasv_mode' => 'Impossibile abilitare/disabilitare la modalit&agrave;  FTP Passive Mode',

	// Attach Rules Window
	'Rules_page' => 'Regole per allegati',
	'Attach_rules_title' => 'Gruppi consentiti e loro dimensioni',
	'Group_rule_header' => '%s -> Dimensione massima file: %s', // Replace first %s with Extension Group, second one with the Size STRING
	'Allowed_extensions_and_sizes' => 'Estensioni e dimensioni consentite',
	'Note_user_empty_group_permissions' => 'N.B.:<br />Siete autorizzati ad allegare files su questo forum, <br /> ma, dato che non &egrave; possibile allegare nessun <b>gruppo di estensioni</b> in quest\'area, <br /> non &egrave; possibile allegare niente. Se tentate, vi sar&agrave; restituito un messaggio d\'errore.<br />',

	// Quota Variables
	'Upload_quota' => 'Upload Quota',
	'Pm_quota' => 'PM Quota',
	'User_upload_quota_reached' => 'Purtroppo avete raggiunto la quota massima per gli upload [ %d %s ]', // replace %d with Size, %s with Size Lang (MB for example)

	// User Attachment Control Panel
	'User_acp_title' => 'User ACP',
	'UACP' => 'Pannello di controllo Allegati',
	'User_uploaded_profile' => 'Caricati: %s',
	'User_quota_profile' => 'Quota: %s',
	'Upload_percent_profile' => '%d%% del totale',

	// Common Variables
	'Attach_search_query' => 'Cerca Allegati',
	'Test_settings' => 'Test Configurazione',
	'Not_assigned' => 'Non assegnato',
	'No_file_comment_available' => 'Nessuna descrizione disponibile',
	'Attachbox_limit' => 'Allegati [%d%%]',
	'No_quota_limit' => 'Nessun limite di quota',
	'Unlimited' => 'Illimitato',
	)
);

?>