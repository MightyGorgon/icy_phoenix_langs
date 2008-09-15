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

// 01 - Configuration
$lang['Album_config'] = 'Configurazione';
$lang['Album_config_explain'] = 'Da qui puoi cambiare le impostazioni generali dell\'Album';
$lang['Album_config_updated'] = 'Configurazione dell\'Album aggiornata con successo';
$lang['Click_return_album_config'] = 'Clicca %sQUI%s per tornare alla configurazione dell\'Album';
$lang['Max_pics'] = 'Numero massimo di immagini per ogni categoria (-1 = illimitato)';
$lang['User_pics_limit'] = 'Numero massimo di immagini per categoria per ogni utente (-1 = illimitato)';
$lang['Moderator_pics_limit'] = 'Limite di immagini per categoria per ogni moderatore (-1 = illimitato)';
$lang['Pics_Approval'] = 'Approvazione Immagini';
$lang['Rows_per_page'] = 'Numero di righe nella pagina delle miniature';
$lang['Cols_per_page'] = 'Numero di colonne nella pagina delle miniature';
$lang['Thumbnail_quality'] = 'Qualit&agrave; della miniatura (1-100)';
$lang['Thumbnail_cache'] = 'Cache miniature';
$lang['Manual_thumbnail'] = 'Miniature manuali';
$lang['GD_version'] = 'Ottimizza per la versione del GD';
$lang['Pic_Desc_Max_Length'] = 'Lunghezza massima della descrizione dell\'immagine/commento (bytes)';
$lang['Hotlink_prevent'] = 'Prevenzione Hotlink';
$lang['Hotlink_allowed'] = 'Domini consentiti per gli hotlink (separati da una virgola)';
$lang['Personal_gallery'] = 'Consenti la creazione di gallerie personali';
$lang['Personal_gallery_limit'] = 'Numero di immagini massimo per le gallerie personali (-1 = illimitato)';
$lang['Personal_gallery_view'] = 'Chi pu&ograve; visualizzare le gallerie personali per default';
$lang['Rate_system'] = 'Abilita il sistema di valutazione';
$lang['Rate_Scale'] = 'Scala di valutazione';
$lang['Comment_system'] = 'Abilita i commenti';
$lang['Thumbnail_Settings'] = 'Impostazione Miniature';
$lang['Quick_Thumbnails'] = 'Miniature Veloci';
$lang['Quick_Thumbnails_explain'] = 'Attivando questa opzione il sistema verifica se la miniatura &egrave; stata gi&agrave; generata e cercher&agrave; di inviarla direttamente al browser senza ricorrere alla funzione di generazione miniature. Questa opzione aumenter&agrave; la velocit&agrave; di caricamento delle categorie.';
$lang['Extra_Settings'] = 'Ulteriori Impostazioni';
$lang['Default_Sort_Method'] = 'Metodo Di Ordinamento Predefinito';
$lang['Default_Sort_Order'] = 'Ordinamento';
$lang['Fullpic_Popup'] = 'Visualizza immagini in una nuova finestra';
$lang['Email_Notification'] = 'Abilita la notifica via email all\'invio di una nuova immagine nell\'album (l\'invio avverr&agrave; solo agli amministratori)';
$lang['Show_Download'] = 'Mostra il pulsante DOWNLOAD (per scaricare le foto in formato ZIP) solo a chi ha il permesso per inserire nuove immagini nell\'album (scegliendo SEMPRE il pulsante verr&agrave; mostrato anche a chi non ha i permessi per caricare immagini)';
$lang['Show_Slideshow'] = 'Abilita la possibilità di vedere le foto in sequenza (Slideshow)';
$lang['Show_Slideshow_Script'] = 'Abilita degli effetti di transizione per lo Slideshow';
$lang['Show_Pic_Size'] = 'Mostra le dimensioni dell\'immagine in basso sulla miniatura';
$lang['Show_IMG_No_GD'] = 'Mostra le miniature delle immagini GIF senza ricorrere alle librerie GD (in questo modo le immagini vengono caricate integralmente e poi mostrate in versione ridotta).';
$lang['Show_GIF_MidThumb'] = 'Mostra le immagini GIF a dimensione integrale se sono abilitate le anteprime medie.';
$lang['Show_Pics_Nav'] = 'Mostra il riquadro di Navigazione Delle Immagini nella pagina di visualizzazione immagini';
$lang['Invert_Nav_Arrows'] = 'Inverti le frecce nella visualizzazione delle immagini (freccia destra = immagine pi&ugrave; recente)';
$lang['Show_Inline_Copyright'] = 'Mostra i crediti del mod su una singola riga';
$lang['Enable_Nuffimage'] = 'Abilita la pagina degli Effetti Speciali basata sulla classe creata da Nuffmon';
$lang['Enable_Sepia_BW'] = 'Abilita gli effetti Seppia e Bianco & Nero che richiedono un elevato carico sul processore del server (disabilitare questa opzione se non si vuole caricare troppo la CPU del server)';
$lang['Show_EXIF_Info'] = 'Mostra le informazioni EXIF dell\'immagine';
$lang['Set_Memory'] = 'Imposta un limite di memoria via PHP (MB)';
$lang['Set_Memory_Explain'] = 'Questa funzione pu&ograve; essere utilizzata per aumentare la memoria riservata alle elaborazioni del PHP nel caso in cui le immagini non vengano elaborate completamente. Per evitare che vengano utilizzati valori troppo elevati, il valore massimo viene forzato a 16MB.';
$lang['LB_Preview'] = 'Abilita LightBox Anteprima';
$lang['LB_Preview_Explain'] = 'Questa funzione consente di abilitare la visualizzazione dell\'anteprima dell\'immagine in formato medio quando si punta il mouse su una miniatura';
$lang['Album_config_notice'] = 'Se hai fatto delle modifiche alle impostazioni correnti, e poi hai selezionato un\'altra sezione, ti verr&agrave; proposto di salvare i cambiamenti. <br />Il sistema <b>non</b> salva automaticamente.';
$lang['Save_sucessfully_confimation'] = '%s salvato con successo';
$lang['Show_Recent_In_Subcats'] = 'Mostra immagini recenti nelle sottocategorie';
$lang['Show_Recent_Instead_of_NoPics'] = 'Mostra immagini recenti al posto del messaggio "Nessuna Immagine"';
$lang['Show_Last_Comments'] = 'Mostra il blocco con gli ultimi commenti inviati nell\'indice dell\'Album e nelle Categorie';
$lang['Album_Index_Settings'] = 'Indice Album';
$lang['Album_Index_Page_Settings'] = 'Impostazioni Pagina Indice Album';
$lang['Show_Index_Subcats'] = 'Mostra le sottocategorie nell\'Indice Album';
$lang['Show_Index_Thumb'] = 'Mostra anteprime di categoria nell\'Indice Album';
$lang['Show_Index_Pics'] = 'Mostra il numero di immagini in ciascuna categoria nell\'Indice Album';
$lang['Show_Index_Comments'] = 'Mostra il numero di commenti in ciascuna categoria nell\'Indice Album';
$lang['Show_Index_Total_Pics'] = 'Mostra il numero totale di immagini in ciascuna categoria e nelle sue sottocategorie nell\'Indice Album';
$lang['Show_Index_Total_Comments'] = 'Mostra il totale dei commenti in ciascuna categoria e nelle sue sottocategorie nell\'Indice Album';
$lang['Show_Index_Last_Comment'] = 'Mostra l\'ultimo commento in ciascuna categoria e nelle sue sottocategorie nell\'Indice Album';
$lang['Show_Index_Last_Pic'] = 'Mostra le informazioni sull\'ultima immagine in ciascuna categoria e nelle sue sottocategorie nell\'Indice Album';
$lang['Line_Break_Subcats'] = 'Mostra ogni sottocategoria su una nuova riga';
$lang['Show_Personal_Gallery_Link'] = 'Mostra le gallerie personali in sottocategorie';
$lang['Album_Personal_Auth_Explain'] = 'Con questa impostazione puoi decidere quali gruppi possono essere moderatori di <b>tutte</b> le gallerie personali o semplicemente un accesso riservato';
$lang['Album_debug_mode'] = 'Attiva la modalit&agrave; di debug.<br /><span class="gensmall">Questa funzione generer&agrave; delle informazioni aggiuntive nelle pagine, ed anche alcuni avvisi in cima ado gni pagina.<br />Questa opzione <b>dovrebbe</b> essere usata solo in caso di problemi.</span>';
$lang['New_Pic_Check_Interval'] = 'L\'intervallo di tempo in cui una immagine debba essere considerata nuova.<br /><span class="gensmall"><b>Formato</b> : &lt;numero&gt;&lt;tipo&gt; Dove il tipo pu&ograve; essere h, d, w or m (hour[ore], day[giorni], week[settimane] or month[mesi])<br /> Ad esempio 12H = 12 ore e 12D = 12 giorni e 12W = 12 settimane e 12M = 12 mesi<br />Se nessun tipo viene specificato, il sistema utilizzer&agrave; <b>giorni</b> come impostazione predefinita.</span>';
$lang['New_Pic_Check_Interval_Desc'] = '<span class="gensmall">H = HOURS-ORE, D = DAYS-GIORNI, W = WEEKS-SETTIMANE, M = MONTHS-MESI</span>';
$lang['New_Pic_Check_Interval_LV'] = 'Abilitando questa opzione, il contatore di nuove immagini &egrave; basato sulla data dell\'ultima visita degli utenti e non pi&ugrave; su un intervallo predefinito.';
$lang['Enable_Show_All_Pics'] = 'Abilita la possibilit&agrave; di scegliere la modalit&agrave; di visualizzazione delle gallerie personali (tutte le immagini o solamente la categoria selezionata).<br /> Se impostato a <b>no</b>, soltanto la categoria selezionata viene visualizzata.';
$lang['Enable_Index_Supercells'] = 'Abilita Hypercells nella tabella dell\'indice. <br /><span class="gensmall">Questa opzione abiliter&agrave; gli effetti mouseover sulle colonne.</span>';
$lang['Show_OTF_Link'] = 'Mostra il link "Album OTF" nell\'Indice Album';
$lang['Show_AllPics_Link'] = 'Mostra il link "Tutte Le Immagini" nell\'Indice Album';
$lang['Show_PG_Link'] = 'Mostra il link alle gallerie personali nell\'Indice Album';

// 02 - Personal Galleries
$lang['Personal_Galleries'] = 'Gallerie Personali';
$lang['Album_personal_gallery_title'] = 'Galleria Personale';
$lang['Album_personal_gallery_explain'] = 'In questa sezione puoi scegliere quali gruppi hanno il permesso per creare e visualizzare le gallerie personali. Queste impostazioni saranno operative solo se viene impostato il livello di accesso "PRIVATO" nella configurazione degli accessi delle gallerie personali.';
$lang['Click_return_album_personal'] = 'Clicca %sQUI%s per tornare alle impostazioni delle gallerie personali';
$lang['Album_personal_successfully'] = 'Le impostazioni sono state aggiornate con successo';
$lang['Allow_Album_Avatars'] = 'Abilita gli utenti ad usare le proprie immagini come avatar';
$lang['Album_Personal_Settings'] = 'Gallerie Personali';
$lang['Show_Personal_Sub_Cats'] = 'Mostra sottocategorie personali nell\'Indice Album';
$lang['Personal_Gallery_Approval'] = 'Approvazione immagini inviate nelle gallerie personali';
$lang['Personal_Gallery_MOD'] = 'Le gallerie personali possono essere moderate dai proprietari';
$lang['Personal_Sub_Cat_Limit'] = 'Numero massimo di sottocategorie (-1 = illimitato)';
$lang['User_Can_Create_Personal_SubCats'] = 'Gli utenti possono creare sottocategorie nelle proprie gallerie personali';
$lang['Click_return_personal_gallery_index'] = 'Clicca %sQUI%s per tornare alla Galleria Personale';
$lang['Show_Recent_In_Personal_Subcats'] = 'Mostra le immagini recenti nelle sottocategorie delle gallerie personali';
$lang['Show_Recent_Instead_of_Personal_NoPics'] = 'Mostra le immagini recenti al posto del messaggio "Nessuna Immagine" nelle gallerie personali';

// 03 - Categories
$lang['Categories'] = 'Categorie Album';
$lang['Album_Categories_Title'] = 'Gestione Categorie Album';
$lang['Album_Categories_Explain'] = 'In questa sezione si possono gestire le categorie: crea, modifica, elimina, ordina, etc.';
$lang['Category_Permissions'] = 'Permessi Delle Categorie';
$lang['Category_Title'] = 'Titolo Categoria';
$lang['Category_Desc'] = 'Descrizione Categoria';
$lang['View_level'] = 'Livello Per Visualizzare';
$lang['Upload_level'] = 'Livello Per Caricare';
$lang['Rate_level'] = 'Livello Per Valutare';
$lang['Comment_level'] = 'Livello Per Commentare';
$lang['Edit_level'] = ' Livello Per Modificare';
$lang['Delete_level'] = 'Livello Per Cancellare';
$lang['New_category_created'] = 'La nuova categoria &egrave; stata creata con successo';
$lang['Click_return_album_category'] = 'Clicca %sQUI%s per tornare alla gestione delle categorie';
$lang['Category_updated'] = 'Questa categoria &egrave; stata aggiornata con successo';
$lang['Delete_Category'] = 'Elimina Categoria';
$lang['Delete_Category_Explain'] = 'Il modulo sottostante consente di eliminare una categoria e decidere dove spostare le immagini contenute';
$lang['Delete_all_pics'] = 'Elimina tutte le immagini';
$lang['Category_deleted'] = 'Questa categoria &egrave; stata eliminata con successo';
$lang['Category_changed_order'] = 'L\'ordinamento di questa categoria &egrave; stato modificato con successo';
$lang['Personal_Root_Gallery'] = 'Categoria Principale Galleria Personale';
$lang['Parent_Category'] = 'Categoria Superiore (per questa categoria)';
$lang['Child_Category_Moved'] = 'La ccategoria selezionata ha delle sottocategorie. Le sottocategorie sono state spostate nella categoria <b>%s</b>.';
$lang['No_Self_Refering_Cat'] = 'Non puoi impostare la categoria stessa come categoria superiore';
$lang['Can_Not_Change_Main_Parent'] = 'Non puoi impostare questa categoria come superiore alla categoria principale della tua galleria personale';
$lang['Watermark'] = 'WaterMark';
$lang['Watermark_explain'] = 'E\' possibile specificare il watermark da utilizzare in questa categoria. Inserire il percorso del file rispetto al percorso del sito (es.: <b>images/album/mark_fap.png</b>). Il watermark verr&agrave; applicato soltanto se la funzione watermark &egrave; stata abilitata.';
$lang['Cat_Pics_Synchronize'] = 'Sincronizza contatori immagini';
$lang['Cat_Pics_Synchronized'] = 'Tutti i contatori sono stati sincronizzati.';

// 04 - Permissions
$lang['Album_Auth_Title'] = 'Permessi Album';
$lang['Album_Auth_Explain'] = 'In questa sezione puoi scegliere quali gruppi utenti possono moderare o accedere alle categorie';
$lang['Select_a_Category'] = 'Seleziona una categoria';
$lang['Look_up_Category'] = 'Cerca una categoria';
$lang['Album_Auth_successfully'] = 'Permessi aggiornati con successo';
$lang['Click_return_album_auth'] = 'Clicca %sQUI%s per tornare ai permessi dell\'album';
$lang['Upload'] = 'Carica';
$lang['Rate'] = 'Valuta';
$lang['Comment'] = 'Commenta';

// 05 - Thumbnails
$lang['Use_Old_Thumbnails'] = 'Usa la vecchia funzione per le miniature';
$lang['Use_Old_Thumbnails_Explain'] = 'Attivando questa opzione verr&agrave; utilizzata la vecchia funzione di generazione anteprime. Dovresti attivare questa opzione solo se hai problemi nella visualizzazione delle immagini quando questa opzione &egrave; disattivata.';

// 06 - Sorting
$lang['Album_Category_Sorting'] = 'Ordinamento Categorie Album';
$lang['Album_Category_Sorting_Id'] = 'ID';
$lang['Album_Category_Sorting_Name'] = 'Nome';
$lang['Album_Category_Sorting_Order'] = 'Ordinamento (Default)';
$lang['Album_Category_Sorting_Direction'] = 'Direzione Ordinamento (soltanto per ordinamenti di ID e Nome)';
$lang['Album_Category_Sorting_Asc'] = 'Ascendente';
$lang['Album_Category_Sorting_Desc'] = 'Discendente';

// 07 - Clear Cache
$lang['Clear_Cache_Tab'] = 'Cache';
$lang['Clear_Cache'] = 'Svuota Cache';
$lang['Album_clear_cache_confirm'] = 'Se utilizzi la cache per le miniature devi svuotarla dopo aver cambiato le impostazioni per le miniature, in modo che possano essere generate di nuovo.<br /><br />Vuoi svuotare la cache ora?';
$lang['Thumbnail_cache_cleared_successfully'] = '<br />La cache delle miniature &egrave; stata svuotata con successo<br />&nbsp;';

// ACP - Javascript text
$lang['acp_ask_save_changes'] = 'Vuoi salvare i cambiamenti?\n(OK = Si, Annulla = No)';
$lang['acp_nothing_to_save'] = 'Niente da salvare!';
$lang['acp_settings_changed_ask_save'] = 'Hai cambiato le impostazioni. Vuoi salvare i cambiamenti?\n(OK = Si, Annulla = No)';

// GD Info
$lang['GD_Info'] = 'Info GD';
$lang['GD_Title'] = 'Info GD';
$lang['GD_Description'] = 'Da qui puoi ottenere le informazioni riguardanti la libreria GD Installata';
$lang['GD_Version'] = 'Versione:';
$lang['GD_Freetype_Support'] = 'Supporto Freetype Fonts:';
$lang['GD_Freetype_Linkage'] = 'Tipo di Link Freetype:';
$lang['GD_T1lib_Support'] = 'Supporto T1lib';
$lang['GD_Gif_Read_Support'] = 'Supporto Lettura Gif:';
$lang['GD_Gif_Create_Support'] = 'Supporto Creazione Gif:';
$lang['GD_Jpg_Support'] = 'Supporto Jpg/Jpeg:';
$lang['GD_Png_Support'] = 'Supporto Png:';
$lang['GD_Wbmp_Support'] = 'Supporto WBMP:';
$lang['GD_XBM_Support'] = 'Supporto XBM:';
$lang['GD_Jis_Mapped_Support'] = 'Supporto Fonts Giapponesi:';
$lang['GD_True'] = 'Si';
$lang['GD_False'] = 'No';

// Multiple Uploads Admin configuration
$lang['Upload_Settings'] = 'Upload';
$lang['Max_Files_To_Upload'] = 'Numero massimo di files che possono essere caricati per volta';
$lang['Album_upload_settings'] = 'Impostazioni Caricamento Album';
$lang['Max_pregenerated_fields'] = 'Numero massimo di campi da pre-generare';
$lang['Dynamic_field_generation'] = 'Abilita l\'aggiunta dinamica di campi di caricamento';
$lang['Pre_generate_fields'] = 'Pre-generare i campi per il caricamento';
$lang['Propercase_pic_title'] = 'Titolo con iniziali maiuscole ad. <i>\'Il Titolo Dell\'Immagine\'</i><br />Se impostato su \'NO\' il nome verr&agrave; generato in questo modo  <i>\'Il titolo dell\'immagine\'</i>';
$lang['Pic_Resampling'] = 'Abilitando questa opzione tutte le immagini caricate verranno ridimensionate e ricompresse, se necessario per rientrare nei limiti impostati nella configurazione dell\'album.';
$lang['Max_file_size_resampling'] = 'Dimensione massima file prima della ricompressione (bytes)';

// CLowN
$lang['SP_Album_config'] = 'CLowN SP';
$lang['SP_Album_config_explain'] = 'In questa sezione puoi configurare alcune opzioni per l\'Album Service Pack';
$lang['SP_Album_sp_general'] = 'Configurazione Generale';
$lang['SP_Album_sp_watermark'] = 'Configurazione WaterMark (Marchio)';
$lang['SP_Album_sp_hotornot'] = 'Configurazione Hot or Not (Valutazioni)';
$lang['SP_Rate_type'] = 'Scegli come vuoi che venga visualizzata la valutazione';
$lang['SP_Rate_type_0'] = 'Solo immagini';
$lang['SP_Rate_type_1'] = 'Solo numeri';
$lang['SP_Rate_type_2'] = 'Numeri ed immagini';
$lang['SP_Display_latest'] = 'Visualizza il blocco con le ultime immagini inviate';
$lang['SP_Display_highest'] = 'Visualizza il blocco con le immagini con le valutazioni pi&ugrave; elevate';
$lang['SP_Display_most_viewed'] = 'Visualizza il blocco con le immagini pi&ugrave; visualizzate';
$lang['SP_Display_random'] = 'Visualizza il blocco con le immagini casuali';
$lang['SP_Pic_row'] = 'Numero di righe con le anteprime';
$lang['SP_Pic_col'] = 'Numero di colonne con le anteprime';
$lang['SP_Midthumb_use'] = 'Usa anteprime medie';
$lang['SP_Midthumb_cache'] = 'Abilita la cache per le anteprime medie';
$lang['SP_Midthumb_high'] = 'Altezza delle anteprime medie (pixel)';
$lang['SP_Midthumb_width'] = 'Larghezza delle anteprime medie (pixel)';
$lang['SP_Watermark'] = 'Usa WaterMark';
$lang['SP_Watermark_users'] = 'Mostra il WaterMark a tutti gli utenti (se impostato a NO, verr&agrave; visualizzato solo agli ospiti)';
$lang['SP_Watermark_placent'] = 'Mostra il WaterMark nella seguente posizione';
$lang['SP_Hon_already_rated'] = 'Valutazioni illimitate nella pagina Hot or Not';
$lang['SP_Hon_sep_rating'] = 'Memorizza le valutazioni in una tabella separata';
$lang['SP_Hon_where'] = 'Categoria da cui mostrare le immagini valutate (lascia questo campo vuoto per utilizzare tutte le categorie, oppure separa le varie categorie con una virgola se vuoi inserirne pi&ugrave; di una)';
$lang['SP_Hon_users'] = 'Consenti agli ospiti di inserire valutazioni';

$lang['SP_Disabled'] = 'Disabilitato';
$lang['SP_Enabled'] = 'Abilitato';
$lang['SP_Yes'] = 'Si';
$lang['SP_No'] = 'No';
$lang['SP_Always'] = 'Sempre';
$lang['SP_Submit'] = 'Invia';
$lang['SP_Reset'] = 'Annulla';

// Nuffload
$lang['Nuffload_Config'] = 'Configurazione Nuffload';
$lang['Enable_Nuffload'] = 'Abilita Nuffload';
$lang['Enable_Nuffload_Explain'] = 'Abilitando questa opzione, verr&agrave; attivato il caricamento tramite Nuffload, anzich&eacute; il pannello di caricamento classico.';
$lang['progress_bar_configuration'] = 'Nuffload - Configurazione Barra Avanzamento';
$lang['perl_uploader'] = 'Abilita il caricamento via Perl';
$lang['path_to_bin'] = 'Percorso relativo a cgi-bin rispetto ad Icy Phoenix (ad esempio: <b>./cgi-bin/</b> se Icy Phoenix &egrave; in una sottocartella del dominio)';
$lang['show_progress_bar'] = 'Mostra barra di avanzamento durante il caricamento';
$lang['close_progress_bar'] = 'Chiudi la barra di avanzamento al termine del caricamento';
$lang['activity_timeout'] = 'Tempo massimo per il caricamento (secondi)';
$lang['simple_format'] = 'Mostra una barra di avanzamento meno elaborata';
$lang['multiple_uploads_configuration'] = 'Nuffload - Configurazione Caricamento Multiplo';
$lang['multiple_uploads'] = 'Abilita caricamento multiplo';
$lang['max_uploads'] = 'Numero massimo di campi per il caricamento';
$lang['zip_uploads'] = 'Abilita il caricamento di files ZIP';
$lang['image_resizing_configuration'] = 'Nuffload - Configurazione Riduzione Immagine';
$lang['image_resizing'] = 'Abilita la riduzione dell\'immagine durante il caricamento';
$lang['image_width'] = 'Larghezza Immagine';
$lang['image_height'] = 'Altezza Immagine';
$lang['image_quality'] = 'Qualit&agrave; Immagine';

?>