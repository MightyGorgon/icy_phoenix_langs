<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

$lang['ENCODING'] = 'iso-8859-1';
$lang['ENCODING_ALT'] = 'utf8';
$lang['DIRECTION'] = 'ltr';
$lang['HEADER_LANG'] = 'it';
$lang['HEADER_XML_LANG'] = 'it';
$lang['LEFT'] = 'sinistra';
$lang['RIGHT'] = 'destra';

$lang['Welcome_install'] = 'Installazione di Icy Phoenix';
$lang['Initial_config'] = 'Configurazione';
$lang['DB_config'] = 'Configurazione Database';
$lang['Admin_config'] = 'Configurazione Amministrazione';
$lang['continue_upgrade'] = 'Dopo aver scaricato il file di configurazione sul tuo computer puoi cliccare sul bottone \"Continua l\'Aggiornamento\" qui sotto per avanzare con il processo di aggiornamento. Caricare il file di configurazione aspetta la fine del processo di aggiornamento.';
$lang['upgrade_submit'] = 'Continua Aggiornamento';

$lang['Installer_Error'] = 'Si &egrave; verificato un errore durante l\'installazione';
$lang['Previous_Install'] = 'E\' stata rilevata una precedente installazione';
$lang['Install_db_error'] = 'Si &egrave; verificato un errore durante l\'aggiornamento del database';

$lang['Re_install'] = 'La tua installazione precedente &egrave; ancora attiva. <br /><br />Se vuoi installare di nuovo Icy Phoenix clicca il bottone di conferma qui sotto. Sappi che questa operazione distrugger&agrave; tutti i dati esistenti, non verr&agrave; fatto alcun backup! Username e Password dell\'amministratore che hai usato per entrare nel forum verranno ricreate dopo la nuova installazione, nessun altra impostazione verr&agrave; mantenuta. <br /><br />Pensaci bene prima di CONFERMARE!';

$lang['Inst_Step_0'] = 'Grazie per aver scelto Icy Phoenix. Questa procedura guidata ti aiuter&agrave; a completare l\'installazione.<br /><span class="text_red">Prima di procedere assicurati di aver caricato tutti i files necessari sul tuo server e di avere un database con tutti i dati d\'accesso.</span>';

$lang['Inst_Step_1'] = 'Per completare correttamente l\'installazione devi riempire tutti i campi sottostanti.<br /><span class="text_red">Prima di procedere assicurati di avere tutti i dati di accesso per il database (il database in cui vuoi installare Icy Phoenix deve essere gi&agrave; esistente, perch&acute; la procedura di installazione non pu&ograve; crearne uno!).</span>';

$lang['Start_Install'] = 'Inizia Installazione';
$lang['Start_Install_Anyway'] = 'Inizia Installazione Comunque';
$lang['Finish_Install'] = 'Termina Installazione';
$lang['Continue_Install'] = 'Prosegui Installazione';

$lang['CHMOD_Files'] = 'Permessi Files &amp; Cartelle';
$lang['CHMOD_OK'] = 'Ok';
$lang['CHMOD_Error'] = 'Errore';
$lang['CHMOD_777'] = 'CHMOD 777';
$lang['CHMOD_666'] = 'CHMOD 666';
$lang['CHMOD_Files_Explain_Error'] = 'Si sono verificati degli errori durante la verifica dei permessi a files e cartelle. Assicurati che tutti i files del pacchetto siano stati caricati correttamente sul server ed abbiano i permessi corretti, altrimenti Icy Phoenix potrebbe non funzionare correttamente..';
$lang['Confirm_Install_anyway'] = 'Se sei sicuro di aver caricato tutti i files ed aver applicato i permessi correttamente allora puoi proseguire cliccando su "<i>' . $lang['Start_Install_Anyway'] . '</i>".';
$lang['CHMOD_Files_Explain_Ok'] = 'Files e Cartelle sembrano avere i permessi impostati correttamente.';
$lang['Can_Install'] = 'Puoi proseguire con l\'installazione.';
$lang['CHMOD_File_Exists'] = 'Permessi impostati correttamente per questo File/Cartella';
$lang['CHMOD_File_NotExists'] = 'Questo File/Cartella non esiste, per favore effettua l\'upload ed applica i permessi corretti';
$lang['CHMOD_File_Exists_Read_Only'] = 'Questo File/Cartella esiste ma i permessi non possono essere impostati automaticamente, per favore impostali manualmente (se non lo hai gi&agrave; fatto) e poi clicca su "<i>' . $lang['Start_Install_Anyway'] . '</i>".';
$lang['CHMOD_File_UnknownError'] = 'Errore sconosciuto. Per favore verifica che questo File/Cartella esista sul server, abbia i permessi assegnati correttamente e poi clicca su "<i>' . $lang['Start_Install_Anyway'] . '</i>".';
$lang['CHMOD_Apply'] = 'Applica automaticamente i permessi CHMOD alle cartelle di Icy Phoenix.';
$lang['CHMOD_Apply_Warn'] = 'Attenzione, non tutti i server supportano CHMOD via PHP, potrebbero essere necessari interventi manuali!!!';

$lang['Default_lang'] = 'Lingua predefinita';
$lang['Select_lang'] = 'Lingua';
$lang['DB_Host'] = 'Database Server Hostname / DSN';
$lang['DB_Name'] = 'Nome Database';
$lang['DB_Username'] = 'Username Database';
$lang['DB_Password'] = 'Password Database';
$lang['Database'] = 'Il Tuo Database';
$lang['Install_lang'] = 'Scegli una Lingua per l\'Installazione';
$lang['dbms'] = 'Tipo di Database';
$lang['Table_Prefix'] = 'Prefisso Tabelle Database';
$lang['Admin_Username'] = 'Username Amministratore';
$lang['Admin_Password'] = 'Password Amministratore';
$lang['Admin_Password_confirm'] = 'Password Amministratore [ Conferma ]';

$lang['Inst_Step_2'] = 'L\'account di Amministratore &egrave; stato creato.<br />Prima di poter procedere oltre &egrave; necessario <span class="text_red">eliminare la cartella <b>install</b> e la cartella <b>contrib</b> (se presente)</span> dallo spazio web.<br />Dopo aver effettuato queste modifiche, clicca sul pulsante <b>Termina Installazione</b> per essere reindirizzato sul sito. Una volta effettuato l\'accesso &egrave; consigliabile accedere Pannello Di Amministrazione (ACP) per poter configurare le impostazioni principali (lingua, stili, forum, download, album, permessi, ecc.). Le impostazioni riguardanti le pagine del sito, i blocchi, i menu personalizzati e l\'accesso alle varie pagine del sito debbono essere gestiti tramite la sezione CMS (Content Management System). Altre impostazioni sono contenute nei files <b>.htaccess</b> e <b>lang_main_settings.php</b> dove &egrave; possibile personalizzare ad esempio le parole chiave, il titolo del sito, le pagine di errore ed altre impostazioni.<br /><br />Grazie per aver scelto Icy Phoenix, e ricordati di effettuare periodicamente dei backup del tuo database.<br /><br />';

$lang['Unwriteable_config'] = 'Il programma di installazione non riesce a scrivere il file config.php automaticamente. Puoi scaricare una copia del tuo file di configurazione cliccando sul bottone qui sotto. Devi caricare questo file nella stessa directory di Icy Phoenix. Successivamente potrai eliminare la cartella install e potrai effettuare l\'accesso con nome e password di amministrazione che hai fornito nel modulo precedente e andare nel pannello di controllo (un link apparir&agrave; in fondo ad ogni pagina dopo che sei entrato) per verificare le impostazioni generali di configurazione. Grazie per aver scelto Icy Phoenix.';
$lang['Download_config'] = 'Scarica il file di Configurazione';

$lang['ftp_choose'] = 'Scegli Metodo Scaricamento';
$lang['ftp_option'] = '<br />Poich&egrave; le estensioni FTP non sono disponibili in questa versione di  PHP usa l\'opzione di caricare automaticamente via ftp il file di configurazione.';
$lang['ftp_instructs'] = 'Hai scelto di caricare automaticamente via ftp il file sull\'account che contiene Icy Phoenix. Inserisci le informazioni per facilitare il processo. Il percorso FTP deve essere il percorso esatto dell\'installazione di Icy Phoenix come se stessi caricando via ftp con un normale programma client.';
$lang['ftp_info'] = 'Inserisci le Tue Informazioni FTP';
$lang['Attempt_ftp'] = 'Tentativo di caricare via FTP il file di configurazione';
$lang['Send_file'] = 'Inviatemi il file e lo caricher&ograve; via FTP manualmente';
$lang['ftp_path'] = 'Percorso FTP per Icy Phoenix';
$lang['ftp_username'] = 'Il tuo Username FTP';
$lang['ftp_password'] = 'La tua Password FTP';
$lang['Transfer_config'] = 'Inizio Trasferimento';
$lang['NoFTP_config'] = 'Il tentativo di trasferire il file via FTP &egrave; fallito. Scarica il file config e trasferiscilo sul server manualmente.';

$lang['Install'] = 'Installa';
$lang['Upgrade'] = 'Aggiorna';

$lang['Install_Method'] = 'Scegli un metodo di installazione';
$lang['Install_No_Ext'] = 'La configurazione php del tuo server non supporta il tipo di database che hai scelto';
$lang['Install_No_PCRE'] = 'Icy Phoenix Richiede il Perl-Compatible Regular Expressions Module. La tua configurazione PHP non lo supporta!';

$lang['Server_name'] = 'Nome Dominio';
$lang['Script_path'] = 'Percorso Script';
$lang['Server_port'] = 'Porta';
$lang['Admin_email'] = 'Indirizzo Email Amministratore';

$lang['IP_Utilities'] = 'Icy Phoenix Utility';
$lang['Upgrade_Options'] = 'Opzioni Aggiornamento:';
$lang['Upgrade_From'] = 'Aggiorna all\'ultima versione di Icy Phoenix';
$lang['Upgrade_From_Version'] = 'dalla versione';
$lang['Upgrade_From_phpBB'] = 'da qualunque versione di phpBB o phpBB XS';
$lang['Upgrade_Higher'] = 'o superiore';

$lang['IcyPhoenix'] = 'Icy Phoenix';
$lang['phpBB'] = 'phpBB';
$lang['Information'] = 'Informazioni';
$lang['VersionInformation'] = 'Informazioni Server E Versione';
$lang['NotInstalled'] = 'Non installato';
$lang['Current_IP_Version'] = 'Icy Phoenix versione installata';
$lang['Current_phpBB_Version'] = 'phpBB versione installata';
$lang['Latest_Release'] = 'Ultima versione';
$lang['Version_UpToDate'] = 'Versione aggiornata';
$lang['Version_NotUpdated'] = 'Versione non aggiornata';
$lang['UpdateInProgress'] = 'Aggiornamento in corso';
$lang['CleaningInProgress'] = 'Rimozione files in corso';
$lang['UpdateCompleted'] = 'Aggiornamento completato!';
$lang['UpdateInProgress_Schema'] = 'Aggiornamento struttura tabelle';
$lang['UpdateInProgress_Data'] = 'Aggiornamento dati';
$lang['Optimizing_Tables'] = 'Ottimizzazione tabelle';
$lang['Progress'] = 'In corso';
$lang['Done'] = 'Completato';
$lang['NotDone'] = 'Non Completato';
$lang['Result'] = 'Risultato';
$lang['Error'] = 'Errore';
$lang['Successful'] = 'Correttamente';
$lang['NoErrors'] = 'Nessun errore';
$lang['NoUpdate'] = 'Nessun aggiornamento richiesto';
$lang['phpBB_NotDetected'] = 'phpBB non &egrave; stato rilevato. Per favore verifica che phpBB sia correttamente installato.';
$lang['Update_Errors'] = 'Alcune query hanno restituito degli errori';

$lang['DBUpdate_Success'] = 'Le seguenti SQL sono state eseguite correttamente';
$lang['DBUpdate_Errors'] = 'Le seguenti SQL hanno restituito degli errori';

$lang['FileWriting'] = 'Scrittura Files';
$lang['FileCreation_OK'] = 'Il tuo server sembrerebbe supportare la creazione / modifica automatica dei files.';
$lang['FileCreation_OK_Explain'] = 'Questo script cercher&agrave; di creare / modificare automaticamente i files necessari.';
$lang['FileCreation_ERROR'] = 'Il tuo server non supporta la creazione / modifica dei files.';
$lang['FileCreation_ERROR_Explain'] = 'Questo script non pu&ograve; creare / modificare automaticamente i files necessari. Purtroppo dovrai farlo a mano..';

$lang['IcyPhoenix_Version_UpToDate'] = 'La tua versione di Icy Phoenix &egrave; aggiornata';
$lang['IcyPhoenix_Version_NotUpToDate'] = 'La tua versione di Icy Phoenix non &egrave; aggiornata';
$lang['IcyPhoenix_Version_NotInstalled'] = 'Icy Phoenix non &egrave; installato';
$lang['phpBB_Version_UpToDate'] = 'Your phpBB is version is up-to-date';
$lang['phpBB_Version_NotUpToDate'] = 'Your phpBB is version is not up-to-date';
$lang['ClickUpdate'] = 'Clicca %sQUI%s per aggiornare!';
$lang['ClickReturn'] = 'Clicca %sQUI%s per tornare al menu!';

$lang['Clean_OldFiles_Explain'] = 'Rimuovi tutti i files inutilizzati di Icy Phoenix (files rimasti sul server da vecchie versioni)';
$lang['ActionUndone'] = 'Questa procedura non pu&ograve; essere annullata, i files eliminati non potranno essere ripristinati. Fai un backup prima di lanciarla!!!';
$lang['ClickToClean'] = 'Clicca sul link sottostante per procedere';
$lang['FileDeletion_OK'] = 'Il file &egrave; stato eliminato correttamente';
$lang['FileDeletion_ERROR'] = 'Il file non pu&ograve; essere eliminato';
$lang['FileDeletion_NF'] = 'Il file non &egrave; stato trovato';
$lang['FilesDeletion_OK'] = 'Files eliminati correttamente';
$lang['FilesDeletion_NO'] = 'Files non eliminati';
$lang['FilesDeletion_ERROR'] = 'Files non possono essere eliminati automaticamente';
$lang['FilesDeletion_NF'] = 'Files non trovati';
$lang['FilesDeletion_None'] = 'Nessuno';
$lang['FileDeletion_Complete'] = 'Pulizia files completata!';

$lang['Spoiler'] = 'Spoiler';
$lang['Show'] = 'Mostra';
$lang['Hide'] = 'Nascondi';
$lang['None'] = 'Nessuno';
$lang['Start'] = 'Inizia';

$lang['Upgrade_Steps'] = 'Passi per completare l\'aggiornamento';
$lang['MakeFullBackup'] = 'Fai un backup completo di files e DB e tienilo in un posto sicuro!';
$lang['Update_phpBB'] = 'Aggiornamento phpBB';
$lang['MoveImages'] = 'Spostamento Immagini (opzionale: da lanciare soltanto se vuoi memorizzare le immagini in sottocartelle per ogni utente)';
$lang['Adjust_CMSPages'] = 'Aggiornamento costanti nelle pagine CMS (affinch&eacute; la procedura venga completata correttamente le pagine del CMS devono avere permessi di scrittura)';
$lang['Remove_BBCodeUID'] = 'Rimozione BBCode UID';
$lang['Merge_PostsTables'] = 'Unisci Tabelle Messaggi';
$lang['Update_IcyPhoenix'] = 'Aggiornamento Icy Phoenix';
$lang['Clean_OldFiles'] = 'Rimuovi files non pi&ugrave; utilizzati';
$lang['Adjust_Config'] = 'Aggiornamento costanti nel config.php (affinch&eacute; la procedura venga completata correttamente config.php deve avere i permessi di scrittura)';
$lang['Upload_NewFiles'] = 'Carica i files della nuova versione';

$lang['FixConstantsInFiles'] = 'Aggiornamento nuove costanti';
$lang['FixConstantsInFilesExplain'] = 'Aggiornamento delle nuove costanti nei files del CMS';
$lang['FixingInProgress'] = 'Aggiornamento files in corso';
$lang['FixingComplete'] = 'Aggiornamento files completato';
$lang['ClickToFix'] = 'Clicca su uno dei link sottostanti per procedere';
$lang['FixAllFiles'] = 'Modifica tutti i files necessari (pagine CMS e config.php)';
$lang['FixCMSPages'] = 'Modifica soltanto le pagine CMS';
$lang['Fixed'] = 'Corretto';
$lang['NotFixed'] = 'Non corretto';
$lang['FilesProcessed'] = 'Files processati';

$lang['FixPosts'] = 'Correggi Messaggi';
$lang['FixPostsExplain'] = 'Questa funzione serve per correggere i messaggi del forum. Si pu&ograve; utilizzare per: sostituire del testo all\'interno dei messaggi, eliminare il BBCode UID, modificare l\'indirizzo delle immagini inviate.';
$lang['FixingPostsInProgress'] = 'Correzione messaggi in corso';
$lang['FixingPostsInProgressRedirect'] = 'Verrai automaticamente reindirizzato al passo successivo in tre secondi';
$lang['FixingPostsInProgressRedirectClick'] = 'Se il reindirizzamento automatico non dovesse funzionare, puoi cliccare %sQUI%s';
$lang['FixingPostsFrom'] = 'Messaggi modificati in questo ciclo da %s a %s';
$lang['FixingPostsTotal'] = '%s messaggi modificati su un totale di %s ';
$lang['FixingPostsModified'] = ' messaggi modificati';
$lang['FixingPostsComplete'] = 'Correzione messaggi completata';
$lang['SearchWhat'] = 'Cerca nel testo';
$lang['ReplaceWith'] = 'Sostituisci con';
$lang['PostsPerStep'] = 'Numero messaggi per ciclo';
$lang['StartFrom'] = 'Inizia dal messaggio';
$lang['RemoveBBCodeUID'] = 'Elimina i BBCode UID (presi dalla tabella messaggi)';
$lang['RemoveBBCodeUID_Guess'] = 'Cerca di rimuovere tutti i codici che somigliano a BBCode UID';
$lang['FixPostedImagesPaths'] = 'Correggi tutti i percorsi delle immagini inviate (aggiungendo la sottocartella utente)';

$lang['FixPics'] = 'Correggi Immagini Album';
$lang['FixPicsExplain'] = 'Questa funzione serve per spostare le immagini dell\'album nelle sottocartelle degli utenti e aggiornare il database con i nuovi percorsi';
$lang['FixingPicsInProgress'] = 'Correzione immagini album in corso';
$lang['FixingPicsInProgressRedirect'] = 'Verrai automaticamente reindirizzato al passo successivo in tre secondi';
$lang['FixingPicsInProgressRedirectClick'] = 'Se il reindirizzamento automatico non dovesse funzionare, puoi cliccare %sQUI%s';
$lang['FixingPicsFrom'] = 'Immagini modificate in questo ciclo da %s a %s';
$lang['FixingPicsTotal'] = '%s immagini modificate su un totale di %s ';
$lang['FixingPicsModified'] = ' immagini modificate';
$lang['FixingPicsComplete'] = 'Correzione immagini completata';
$lang['PicStartFrom'] = 'Inizia dall\'immagine numero';
$lang['PicsPerStep'] = 'Numero di immagini per ciclo';

$lang['RenMovePics'] = 'Rinomina E Sposta Immagini Inviate';
$lang['RenMovePicsExplain'] = 'Questa funzione rinomina e sposta tutte le immagini inviate dagli utenti che si trovano nella cartella principale muovendole in sottocartelle per utente: se lanci questa applicazione avrai bisogno poi di modificare tutti i messaggi tramite la funzione <i>Correggi Messaggi</i>';

$lang['BBC_IP_CREDITS_STATIC'] = '
<a href="http://www.icyphoenix.com" title="Icy Phoenix"><img src="./style/icy_phoenix_small.png" alt="Icy Phoenix" title="Icy Phoenix" /></a><br />
<span style="color: #FF5500;"><b>Mighty Gorgon</b></span><br />
<i>(Luca Libralato)</i><br />
<b><i>Developer</i></b><br />
Interests: Heroes Of Might And Magic III, 69, #FF5522<br />
Location: Homer\'s Head<br />
<br />
<br />
<span style="color: #DD2222;"><b>hpl</b></span><br />
<i>(Alessandro Drago)</i><br />
<b><i>Developer</i></b><br />
Interests: CMS, little animals<br />
Location: Global Header<br />
<br />
<br />
<span style="color: #DD2222;"><b>Bicet</b></span><br />
<b><i>phpBB XS Developer</i></b><br />
<br />
<br />
<b><i>Valued Contributors</i></b><br />
<span style="color: #228844;"><b>Andrea75</b></span><br />
<span style="color: #DD2222;"><b>Artie</b></span><br />
<span style="color: #228844;"><b>buldo</b></span><br />
<span style="color: #228844;"><b>casimedicos</b></span><br />
<span style="color: #DD2222;"><b>CyberAlien</b></span><br />
<span style="color: #800080;"><b>darkone</b></span><br />
<span style="color: #228844;"><b>difus</b></span><br />
<span style="color: #800080;"><b>fare85</b></span><br />
<span style="color: #228844;"><b>fracs</b></span><br />
<span style="color: #800080;"><b>ganesh</b></span><br />
<span style="color: #228844;"><b>JANU1535</b></span><br />
<span style="color: #800080;"><b>jz</b></span><br />
<span style="color: #228844;"><b>KasLimon</b></span><br />
<span style="color: #AAFF00;"><b>KugeLSichA</b></span><br />
<span style="color: #228844;"><b>Lopalong</b></span><br />
<span style="color: #228844;"><b>moreteavicar</b></span><br />
<span style="color: #228844;"><b>Nikola</b></span><br />
<span style="color: #228844;"><b>novice programmer</b></span><br />
<span style="color: #228844;"><b>ThE KuKa</b></span><br />
<span style="color: #FF7700;"><b>TheSteffen</b></span><br />
<span style="color: #0000BB;"><b>Tom</b></span><br />
<span style="color: #228844;"><b>z3d0</b></span><br />
<span style="color: #228844;"><b>Zuker</b></span><br />
<br />
Interests: Icy Phoenix<br />
Location: <a href="http://www.icyphoenix.com/">http://www.icyphoenix.com</a>
';

$lang['BBC_IP_CREDITS'] = '<div class="center-block"><marquee behavior="scroll" direction="up" scrolldelay="120">' . $lang['BBC_IP_CREDITS_STATIC'] . '</marquee></div>';

?>