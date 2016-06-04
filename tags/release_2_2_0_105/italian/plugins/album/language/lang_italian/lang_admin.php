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
	// 01 - Configuration
	'Album_config' => 'Configurazione',
	'Album_config_explain' => 'Da qui puoi cambiare le impostazioni generali dell\'Album',
	'Album_config_updated' => 'Configurazione dell\'Album aggiornata con successo',
	'Click_return_album_config' => 'Clicca %sQUI%s per tornare alla configurazione dell\'Album',
	'Max_pics' => 'Numero massimo di immagini per ogni categoria (-1 = illimitato)',
	'User_pics_limit' => 'Numero massimo di immagini per categoria per ogni utente (-1 = illimitato)',
	'Moderator_pics_limit' => 'Limite di immagini per categoria per ogni moderatore (-1 = illimitato)',
	'Pics_Approval' => 'Approvazione Immagini',
	'Rows_per_page' => 'Numero di righe nella pagina delle miniature',
	'Cols_per_page' => 'Numero di colonne nella pagina delle miniature',
	'Thumbnail_quality' => 'Qualit&agrave; della miniatura (1-100)',
	'Thumbnail_cache' => 'Cache miniature',
	'Manual_thumbnail' => 'Miniature manuali',
	'GD_version' => 'Ottimizza per la versione del GD',
	'Pic_Desc_Max_Length' => 'Lunghezza massima della descrizione dell\'immagine/commento (bytes)',
	'Hotlink_prevent' => 'Prevenzione Hotlink',
	'Hotlink_allowed' => 'Domini consentiti per gli hotlink (separati da una virgola)',
	'Personal_gallery' => 'Consenti la creazione di gallerie personali',
	'Personal_gallery_limit' => 'Numero di immagini massimo per le gallerie personali (-1 = illimitato)',
	'Personal_gallery_view' => 'Chi pu&ograve; visualizzare le gallerie personali per default',
	'Rate_system' => 'Abilita il sistema di valutazione',
	'Rate_Scale' => 'Scala di valutazione',
	'Comment_system' => 'Abilita i commenti',
	'Thumbnail_Settings' => 'Impostazione Miniature',
	'Quick_Thumbnails' => 'Miniature Veloci',
	'Quick_Thumbnails_explain' => 'Attivando questa opzione il sistema verifica se la miniatura &egrave; stata gi&agrave; generata e cercher&agrave; di inviarla direttamente al browser senza ricorrere alla funzione di generazione miniature. Questa opzione aumenter&agrave; la velocit&agrave; di caricamento delle categorie.',
	'Extra_Settings' => 'Ulteriori Impostazioni',
	'Default_Sort_Method' => 'Metodo Di Ordinamento Predefinito',
	'Default_Sort_Order' => 'Ordinamento',
	'Fullpic_Popup' => 'Visualizza immagini in una nuova finestra',
	'Email_Notification' => 'Abilita la notifica via email all\'invio di una nuova immagine nell\'album (l\'invio avverr&agrave; solo agli amministratori)',
	'Show_Download' => 'Mostra il pulsante DOWNLOAD (per scaricare le foto in formato ZIP) solo a chi ha il permesso per inserire nuove immagini nell\'album (scegliendo SEMPRE il pulsante verr&agrave; mostrato anche a chi non ha i permessi per caricare immagini)',
	'Show_Slideshow' => 'Abilita la possibilità di vedere le foto in sequenza (Slideshow)',
	'Show_Slideshow_Script' => 'Abilita degli effetti di transizione per lo Slideshow',
	'Show_Pic_Size' => 'Mostra le dimensioni dell\'immagine in basso sulla miniatura',
	'Show_IMG_No_GD' => 'Mostra le miniature delle immagini GIF senza ricorrere alle librerie GD (in questo modo le immagini vengono caricate integralmente e poi mostrate in versione ridotta).',
	'Show_GIF_MidThumb' => 'Mostra le immagini GIF a dimensione integrale se sono abilitate le anteprime medie.',
	'Show_Pics_Nav' => 'Mostra il riquadro di Navigazione Delle Immagini nella pagina di visualizzazione immagini',
	'Invert_Nav_Arrows' => 'Inverti le frecce nella visualizzazione delle immagini (freccia destra = immagine pi&ugrave; recente)',
	'Show_Inline_Copyright' => 'Mostra i crediti del mod su una singola riga',
	'Enable_Nuffimage' => 'Abilita la pagina degli Effetti Speciali basata sulla classe creata da Nuffmon',
	'Enable_Sepia_BW' => 'Abilita gli effetti Seppia e Bianco & Nero che richiedono un elevato carico sul processore del server (disabilitare questa opzione se non si vuole caricare troppo la CPU del server)',
	'Show_EXIF_Info' => 'Mostra le informazioni EXIF dell\'immagine',
	'Set_Memory' => 'Imposta un limite di memoria via PHP (MB)',
	'Set_Memory_Explain' => 'Questa funzione pu&ograve; essere utilizzata per aumentare la memoria riservata alle elaborazioni del PHP nel caso in cui le immagini non vengano elaborate completamente. Per evitare che vengano utilizzati valori troppo elevati, il valore massimo viene forzato a 16MB.',
	'LB_Preview' => 'Abilita LightBox Anteprima',
	'LB_Preview_Explain' => 'Questa funzione consente di abilitare la visualizzazione dell\'anteprima dell\'immagine in formato medio quando si punta il mouse su una miniatura',
	'Album_config_notice' => 'Se hai fatto delle modifiche alle impostazioni correnti, e poi hai selezionato un\'altra sezione, ti verr&agrave; proposto di salvare i cambiamenti. <br />Il sistema <b>non</b> salva automaticamente.',
	'Save_sucessfully_confimation' => '%s salvato con successo',
	'Show_Recent_In_Subcats' => 'Mostra immagini recenti nelle sottocategorie',
	'Show_Recent_Instead_of_NoPics' => 'Mostra immagini recenti al posto del messaggio "Nessuna Immagine"',
	'Show_Last_Comments' => 'Mostra il blocco con gli ultimi commenti inviati nell\'indice dell\'Album e nelle Categorie',
	'Album_Index_Settings' => 'Indice Album',
	'Album_Index_Page_Settings' => 'Impostazioni Pagina Indice Album',
	'Show_Index_Subcats' => 'Mostra le sottocategorie nell\'Indice Album',
	'Show_Index_Thumb' => 'Mostra anteprime di categoria nell\'Indice Album',
	'Show_Index_Pics' => 'Mostra il numero di immagini in ciascuna categoria nell\'Indice Album',
	'Show_Index_Comments' => 'Mostra il numero di commenti in ciascuna categoria nell\'Indice Album',
	'Show_Index_Total_Pics' => 'Mostra il numero totale di immagini in ciascuna categoria e nelle sue sottocategorie nell\'Indice Album',
	'Show_Index_Total_Comments' => 'Mostra il totale dei commenti in ciascuna categoria e nelle sue sottocategorie nell\'Indice Album',
	'Show_Index_Last_Comment' => 'Mostra l\'ultimo commento in ciascuna categoria e nelle sue sottocategorie nell\'Indice Album',
	'Show_Index_Last_Pic' => 'Mostra le informazioni sull\'ultima immagine in ciascuna categoria e nelle sue sottocategorie nell\'Indice Album',
	'Line_Break_Subcats' => 'Mostra ogni sottocategoria su una nuova riga',
	'Show_Personal_Gallery_Link' => 'Mostra le gallerie personali in sottocategorie',
	'Album_Personal_Auth_Explain' => 'Con questa impostazione puoi decidere quali gruppi possono essere moderatori di <b>tutte</b> le gallerie personali o semplicemente un accesso riservato',
	'Album_debug_mode' => 'Attiva la modalit&agrave; di debug.<br /><span class="gensmall">Questa funzione generer&agrave; delle informazioni aggiuntive nelle pagine, ed anche alcuni avvisi in cima ado gni pagina.<br />Questa opzione <b>dovrebbe</b> essere usata solo in caso di problemi.</span>',
	'New_Pic_Check_Interval' => 'L\'intervallo di tempo in cui una immagine debba essere considerata nuova.<br /><span class="gensmall"><b>Formato</b> : &lt;numero&gt;&lt;tipo&gt; Dove il tipo pu&ograve; essere h, d, w or m (hour[ore], day[giorni], week[settimane] or month[mesi])<br /> Ad esempio 12H = 12 ore e 12D = 12 giorni e 12W = 12 settimane e 12M = 12 mesi<br />Se nessun tipo viene specificato, il sistema utilizzer&agrave; <b>giorni</b> come impostazione predefinita.</span>',
	'New_Pic_Check_Interval_Desc' => '<span class="gensmall">H = HOURS-ORE, D = DAYS-GIORNI, W = WEEKS-SETTIMANE, M = MONTHS-MESI</span>',
	'New_Pic_Check_Interval_LV' => 'Abilitando questa opzione, il contatore di nuove immagini &egrave; basato sulla data dell\'ultima visita degli utenti e non pi&ugrave; su un intervallo predefinito.',
	'Enable_Show_All_Pics' => 'Abilita la possibilit&agrave; di scegliere la modalit&agrave; di visualizzazione delle gallerie personali (tutte le immagini o solamente la categoria selezionata).<br /> Se impostato a <b>no</b>, soltanto la categoria selezionata viene visualizzata.',
	'Enable_Index_Supercells' => 'Abilita Hypercells nella tabella dell\'indice. <br /><span class="gensmall">Questa opzione abiliter&agrave; gli effetti mouseover sulle colonne.</span>',
	'Show_OTF_Link' => 'Mostra il link "Album OTF" nell\'Indice Album',
	'Show_AllPics_Link' => 'Mostra il link "Tutte Le Immagini" nell\'Indice Album',
	'Show_PG_Link' => 'Mostra il link alle gallerie personali nell\'Indice Album',

	// 02 - Personal Galleries
	'Personal_Galleries' => 'Gallerie Personali',
	'Album_personal_gallery_title' => 'Galleria Personale',
	'Album_personal_gallery_explain' => 'In questa sezione puoi scegliere quali gruppi hanno il permesso per creare e visualizzare le gallerie personali. Queste impostazioni saranno operative solo se viene impostato il livello di accesso "PRIVATO" nella configurazione degli accessi delle gallerie personali.',
	'Click_return_album_personal' => 'Clicca %sQUI%s per tornare alle impostazioni delle gallerie personali',
	'Album_personal_successfully' => 'Le impostazioni sono state aggiornate con successo',
	'Allow_Album_Avatars' => 'Abilita gli utenti ad usare le proprie immagini come avatar',
	'Album_Personal_Settings' => 'Gallerie Personali',
	'Show_Personal_Sub_Cats' => 'Mostra sottocategorie personali nell\'Indice Album',
	'Personal_Gallery_Approval' => 'Approvazione immagini inviate nelle gallerie personali',
	'Personal_Gallery_MOD' => 'Le gallerie personali possono essere moderate dai proprietari',
	'Personal_Sub_Cat_Limit' => 'Numero massimo di sottocategorie (-1 = illimitato)',
	'User_Can_Create_Personal_SubCats' => 'Gli utenti possono creare sottocategorie nelle proprie gallerie personali',
	'Click_return_personal_gallery_index' => 'Clicca %sQUI%s per tornare alla Galleria Personale',
	'Show_Recent_In_Personal_Subcats' => 'Mostra le immagini recenti nelle sottocategorie delle gallerie personali',
	'Show_Recent_Instead_of_Personal_NoPics' => 'Mostra le immagini recenti al posto del messaggio "Nessuna Immagine" nelle gallerie personali',

	// 03 - Categories
	'Categories' => 'Categorie Album',
	'Album_Categories_Title' => 'Gestione Categorie Album',
	'Album_Categories_Explain' => 'In questa sezione si possono gestire le categorie: crea, modifica, elimina, ordina, etc.',
	'Category_Permissions' => 'Permessi Delle Categorie',
	'Category_Title' => 'Titolo Categoria',
	'Category_Desc' => 'Descrizione Categoria',
	'View_level' => 'Livello Per Visualizzare',
	'Upload_level' => 'Livello Per Caricare',
	'Rate_level' => 'Livello Per Valutare',
	'Comment_level' => 'Livello Per Commentare',
	'Edit_level' => ' Livello Per Modificare',
	'Delete_level' => 'Livello Per Cancellare',
	'New_category_created' => 'La nuova categoria &egrave; stata creata con successo',
	'Click_return_album_category' => 'Clicca %sQUI%s per tornare alla gestione delle categorie',
	'Category_updated' => 'Questa categoria &egrave; stata aggiornata con successo',
	'Delete_Category' => 'Elimina Categoria',
	'Delete_Category_Explain' => 'Il modulo sottostante consente di eliminare una categoria e decidere dove spostare le immagini contenute',
	'Delete_all_pics' => 'Elimina tutte le immagini',
	'Category_deleted' => 'Questa categoria &egrave; stata eliminata con successo',
	'Category_changed_order' => 'L\'ordinamento di questa categoria &egrave; stato modificato con successo',
	'Personal_Root_Gallery' => 'Categoria Principale Galleria Personale',
	'Parent_Category' => 'Categoria Superiore (per questa categoria)',
	'Child_Category_Moved' => 'La ccategoria selezionata ha delle sottocategorie. Le sottocategorie sono state spostate nella categoria <b>%s</b>.',
	'No_Self_Refering_Cat' => 'Non puoi impostare la categoria stessa come categoria superiore',
	'Can_Not_Change_Main_Parent' => 'Non puoi impostare questa categoria come superiore alla categoria principale della tua galleria personale',
	'Watermark' => 'WaterMark',
	'Watermark_explain' => 'E\' possibile specificare il watermark da utilizzare in questa categoria. Inserire il percorso del file rispetto al percorso del sito (es.: <b>images/album/mark_fap.png</b>). Il watermark verr&agrave; applicato soltanto se la funzione watermark &egrave; stata abilitata.',
	'Cat_Pics_Synchronize' => 'Sincronizza contatori immagini',
	'Cat_Pics_Synchronized' => 'Tutti i contatori sono stati sincronizzati.',

	// 04 - Permissions
	'Album_Auth_Title' => 'Permessi Album',
	'Album_Auth_Explain' => 'In questa sezione puoi scegliere quali gruppi utenti possono moderare o accedere alle categorie',
	'Select_a_Category' => 'Seleziona una categoria',
	'Look_up_Category' => 'Cerca una categoria',
	'Album_Auth_successfully' => 'Permessi aggiornati con successo',
	'Click_return_album_auth' => 'Clicca %sQUI%s per tornare ai permessi dell\'album',
	'Upload' => 'Carica',
	'Rate' => 'Valuta',
	'Comment' => 'Commenta',

	// 05 - Thumbnails
	'Use_Old_Thumbnails' => 'Usa la vecchia funzione per le miniature',
	'Use_Old_Thumbnails_Explain' => 'Attivando questa opzione verr&agrave; utilizzata la vecchia funzione di generazione anteprime. Dovresti attivare questa opzione solo se hai problemi nella visualizzazione delle immagini quando questa opzione &egrave; disattivata.',

	// 06 - Sorting
	'Album_Category_Sorting' => 'Ordinamento Categorie Album',
	'Album_Category_Sorting_Id' => 'ID',
	'Album_Category_Sorting_Name' => 'Nome',
	'Album_Category_Sorting_Order' => 'Ordinamento (Default)',
	'Album_Category_Sorting_Direction' => 'Direzione Ordinamento (soltanto per ordinamenti di ID e Nome)',
	'Album_Category_Sorting_Asc' => 'Ascendente',
	'Album_Category_Sorting_Desc' => 'Discendente',

	'Album_Picture_Sorting' => 'Ordinamento Immagini Album',
	'Album_Picture_Sorting_Direction' => 'Direzione Ordinamento',

	// 07 - Clear Cache
	'Clear_Cache_Tab' => 'Cache',
	'Clear_Cache' => 'Svuota Cache',
	'Album_clear_cache_confirm' => 'Se utilizzi la cache per le miniature devi svuotarla dopo aver cambiato le impostazioni per le miniature, in modo che possano essere generate di nuovo.<br /><br />Vuoi svuotare la cache ora?',
	'Thumbnail_cache_cleared_successfully' => '<br />La cache delle miniature &egrave; stata svuotata con successo<br />&nbsp;',

	// ACP - Javascript text
	'acp_ask_save_changes' => 'Vuoi salvare i cambiamenti?\n(OK = Si, Annulla = No)',
	'acp_nothing_to_save' => 'Niente da salvare!',
	'acp_settings_changed_ask_save' => 'Hai cambiato le impostazioni. Vuoi salvare i cambiamenti?\n(OK = Si, Annulla = No)',

	// GD Info
	'GD_Info' => 'Info GD',
	'GD_Title' => 'Info GD',
	'GD_Description' => 'Da qui puoi ottenere le informazioni riguardanti la libreria GD Installata',
	'GD_Version' => 'Versione:',
	'GD_Freetype_Support' => 'Supporto Freetype Fonts:',
	'GD_Freetype_Linkage' => 'Tipo di Link Freetype:',
	'GD_T1lib_Support' => 'Supporto T1lib',
	'GD_Gif_Read_Support' => 'Supporto Lettura Gif:',
	'GD_Gif_Create_Support' => 'Supporto Creazione Gif:',
	'GD_Jpg_Support' => 'Supporto Jpg/Jpeg:',
	'GD_Png_Support' => 'Supporto Png:',
	'GD_Wbmp_Support' => 'Supporto WBMP:',
	'GD_XBM_Support' => 'Supporto XBM:',
	'GD_Jis_Mapped_Support' => 'Supporto Fonts Giapponesi:',
	'GD_True' => 'Si',
	'GD_False' => 'No',

	// Multiple Uploads Admin configuration
	'Upload_Settings' => 'Upload',
	'Max_Files_To_Upload' => 'Numero massimo di files che possono essere caricati per volta',
	'Album_upload_settings' => 'Impostazioni Caricamento Album',
	'Max_pregenerated_fields' => 'Numero massimo di campi da pre-generare',
	'Dynamic_field_generation' => 'Abilita l\'aggiunta dinamica di campi di caricamento',
	'Pre_generate_fields' => 'Pre-generare i campi per il caricamento',
	'Propercase_pic_title' => 'Titolo con iniziali maiuscole ad. <i>\'Il Titolo Dell\'Immagine\'</i><br />Se impostato su \'NO\' il nome verr&agrave; generato in questo modo  <i>\'Il titolo dell\'immagine\'</i>',
	'Pic_Resampling' => 'Abilitando questa opzione tutte le immagini caricate verranno ridimensionate e ricompresse, se necessario per rientrare nei limiti impostati nella configurazione dell\'album.',
	'Max_file_size_resampling' => 'Dimensione massima file prima della ricompressione (bytes)',

	// CLowN
	'SP_Album_config' => 'CLowN SP',
	'SP_Album_config_explain' => 'In questa sezione puoi configurare alcune opzioni per l\'Album Service Pack',
	'SP_Album_sp_general' => 'Configurazione Generale',
	'SP_Album_sp_watermark' => 'Configurazione WaterMark (Marchio)',
	'SP_Album_sp_hotornot' => 'Configurazione Hot or Not (Valutazioni)',
	'SP_Rate_type' => 'Scegli come vuoi che venga visualizzata la valutazione',
	'SP_Rate_type_0' => 'Solo immagini',
	'SP_Rate_type_1' => 'Solo numeri',
	'SP_Rate_type_2' => 'Numeri ed immagini',
	'SP_Display_latest' => 'Visualizza il blocco con le ultime immagini inviate',
	'SP_Display_highest' => 'Visualizza il blocco con le immagini con le valutazioni pi&ugrave; elevate',
	'SP_Display_most_viewed' => 'Visualizza il blocco con le immagini pi&ugrave; visualizzate',
	'SP_Display_random' => 'Visualizza il blocco con le immagini casuali',
	'SP_Pic_row' => 'Numero di righe con le anteprime',
	'SP_Pic_col' => 'Numero di colonne con le anteprime',
	'SP_Midthumb_use' => 'Usa anteprime medie',
	'SP_Midthumb_cache' => 'Abilita la cache per le anteprime medie',
	'SP_Midthumb_high' => 'Altezza delle anteprime medie (pixel)',
	'SP_Midthumb_width' => 'Larghezza delle anteprime medie (pixel)',
	'SP_Watermark' => 'Usa WaterMark',
	'SP_Watermark_users' => 'Mostra il WaterMark a tutti gli utenti (se impostato a NO, verr&agrave; visualizzato solo agli ospiti)',
	'SP_Watermark_placent' => 'Mostra il WaterMark nella seguente posizione',
	'SP_Hon_already_rated' => 'Valutazioni illimitate nella pagina Hot or Not',
	'SP_Hon_sep_rating' => 'Memorizza le valutazioni in una tabella separata',
	'SP_Hon_where' => 'Categoria da cui mostrare le immagini valutate (lascia questo campo vuoto per utilizzare tutte le categorie, oppure separa le varie categorie con una virgola se vuoi inserirne pi&ugrave; di una)',
	'SP_Hon_users' => 'Consenti agli ospiti di inserire valutazioni',

	'SP_Disabled' => 'Disabilitato',
	'SP_Enabled' => 'Abilitato',
	'SP_Yes' => 'Si',
	'SP_No' => 'No',
	'SP_Always' => 'Sempre',
	'SP_Submit' => 'Invia',
	'SP_Reset' => 'Annulla',

	// Nuffload
	'Nuffload_Config' => 'Configurazione Nuffload',
	'Enable_Nuffload' => 'Abilita Nuffload',
	'Enable_Nuffload_Explain' => 'Abilitando questa opzione, verr&agrave; attivato il caricamento tramite Nuffload, anzich&eacute; il pannello di caricamento classico.',
	'progress_bar_configuration' => 'Nuffload - Configurazione Barra Avanzamento',
	'perl_uploader' => 'Abilita il caricamento via Perl',
	'path_to_bin' => 'Percorso relativo a cgi-bin rispetto ad Icy Phoenix (ad esempio: <b>./cgi-bin/</b> se Icy Phoenix &egrave; in una sottocartella del dominio)',
	'show_progress_bar' => 'Mostra barra di avanzamento durante il caricamento',
	'close_progress_bar' => 'Chiudi la barra di avanzamento al termine del caricamento',
	'activity_timeout' => 'Tempo massimo per il caricamento (secondi)',
	'simple_format' => 'Mostra una barra di avanzamento meno elaborata',
	'multiple_uploads_configuration' => 'Nuffload - Configurazione Caricamento Multiplo',
	'multiple_uploads' => 'Abilita caricamento multiplo',
	'max_uploads' => 'Numero massimo di campi per il caricamento',
	'zip_uploads' => 'Abilita il caricamento di files ZIP',
	'image_resizing_configuration' => 'Nuffload - Configurazione Riduzione Immagine',
	'image_resizing' => 'Abilita la riduzione dell\'immagine durante il caricamento',
	'image_width' => 'Larghezza Immagine',
	'image_height' => 'Altezza Immagine',
	'image_quality' => 'Qualit&agrave; Immagine',
	)
);
?>