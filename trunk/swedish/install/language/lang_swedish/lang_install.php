<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ENCODING' => 'ISO-8859-1',
	'ENCODING_ALT' => 'UTF-8',
	'DIRECTION' => 'ltr',
	'HEADER_LANG' => 'sv-se',
	'HEADER_XML_LANG' => 'sv-se',
	'LEFT' => 'vänster',
	'RIGHT' => 'höger',

	'Welcome_install' => 'Icy Phoenix Installation',
	'Initial_config' => 'Konfiguration',
	'DB_config' => 'Databas Konfiguration',
	'Admin_config' => 'Admin Konfiguration',
	'continue_upgrade' => 'När du har laddat ner din config-fil till din lokala dator kan du\'Fortsätt Upgradera\' kan du klicka på knappen nedan för att gå vidare med uppgraderingsprocessen. Vänligen vänta att ladda upp konfigureringsfilen tills uppgraderingen är klar.',
	'upgrade_submit' => 'Fortsätt Upgradera',

	'Installer_Error' => 'Ett fel har uppstått under installationen',
	'Previous_Install' => 'En tidigare installation har upptäckts',
	'Install_db_error' => 'Ett fel uppstod vid försök att uppdatera databasen',

	'Re_install' => 'Din tidigare installation är fortfarande aktiv.<br /><br />Om du vill åter-installera Icy Phoenix ska du klicka på Ja-knappen nedan. Vänligen var medveten om att detta kommer att förstöra all befintlig data och inga säkerhetskopior kommer att göras! Administratör användarnamnet och lösenordet som du har använt för att logga in på forumet kommer att återskapas efter ominstallation och inga andra inställningar kommer att behållas. <br /> <br /> Tänk noga innan du trycker på Ja!',

	'Inst_Step_0' => 'Tack för att du väljer Icy Phoenix. Den här guiden hjälper dig genom installationens processen.<br /><span class="text_red">Observera att du har lagt upp alla Icy Phoenix filer till din server och att den databas som du installerari ska alle redan existera.</span>',

	'Inst_Step_1' => 'För att slutföra denna installation vänligen fyll i all information som efterfrågas nedan.<br /><span class="text_red">Vänligen notera att databasen som du installerar i redan ska existera (Installations proceduren kan inte skapa en).</span>',

	'Start_Install' => 'Starta Installationen',
	'Start_Install_Anyway' => 'Starta Installationen I Alla Fall',
	'Finish_Install' => 'Slutför Installationen',
	'Continue_Install' => 'Fortsätt Installationen',

	'CHMOD_Files' => 'Filer &amp; Mapp Rättigheter',
	'CHMOD_OK' => 'Ok',
	'CHMOD_Error' => 'Fel',
	'CHMOD_777' => 'CHMOD 777',
	'CHMOD_666' => 'CHMOD 666',
	'CHMOD_Files_Explain_Error' => 'Vissa fel uppstod vid verifiering av CHMOD rättigheter. Vänligen kontrollera att alla filer/mappar från installationspaketet finns och att de har rätt CHMOD rättigheter, annars kan inte Icy Phoenix köras korrekt.',
	'Confirm_Install_anyway' => 'Om du har dubbell kontrollerat allt kan du fortsätta genom att klicka på "<i>Starta Installationen I Alla Fall</i>".',
	'CHMOD_Files_Explain_Ok' => 'Alla CHMOD rättigheter verkar vara bra.',
	'Can_Install' => 'Du kan gå vidare till nästa steg.',
	'CHMOD_File_Exists' => 'Denna Fil/Mapp existerar och dess rättigheter har tillämpats korrekt.',
	'CHMOD_File_NotExists' => 'Denna Fil/Mapp doesn\'t existerar, vänligen ladda upp den och använd de korrekta CHMOD rättigheterna.',
	'CHMOD_File_Exists_Read_Only' => 'Denna Fil/Mapp existerar men dess rättigheter kan kanske inte modifierad automatiskt, vänligen tillämpa CHMOD manuellt och klicka sedan på "<i>Starta Installationen I Alla Fall</i>".',
	'CHMOD_File_UnknownError' => 'Okänt fel vid kontroll av denna Fil/Mapp. Vänligen se till att denna Fil/Mapp existerar på servern, och att den har rätt CHMOD rättigheter och klicka sedan på "<i>Starta Installationen I Alla Fall</i>".',
	'CHMOD_Apply' => 'Lägg till CHMOD rättigheter till Icy Phoenix filer och mappar via PHP',
	'CHMOD_Apply_Warn' => 'Vänligen notera att inte alla servrar stödjer CHMOD via PHP, manuell redigering kan krävas!!!',

	'Default_lang' => 'Standard webbplats språk',
	'Select_lang' => 'Språk',
	'DB_Host' => 'Databas Server Värdnamn / DSN',
	'DB_Name' => 'Ditt Databas Namn',
	'DB_Username' => 'Databas Användarnamn',
	'DB_Password' => 'Databas Lösenord',
	'Database' => 'Din Databas',
	'Install_lang' => 'Välj Språk för Installationen',
	'dbms' => 'Databas Typ',
	'Table_Prefix' => 'Prefix för tabeller i databasen',
	'Admin_Username' => 'Administratör Användarnamn',
	'Admin_Password' => 'Administratör Lösenord',
	'Admin_Password_confirm' => 'Administratör Lösenord [ Bekräfta ]',

	'Inst_Step_2' => 'Ditt admin användarnamn har blivit skapat.<br />Vid det här tillfället för att slutföra installationen måste du <span class="text_red">flytta <u>installera</u> och <u>contrib</u> (om du har den på din server) mappar</span>. Slutligen ska du klicka på <b>Slutför Installationen</b> och sedan tillgå ACP (Admin Control Panel) och CMS (Content Management System) där du kan hantera alla Icy Phoenix inställningar och preferenser.<br />I ACP kan du justera de viktigaste inställningarna och preferenser för hela webbplatsen, (stilar, språk, tid, forum, nerladdningar, användare, album, etc.) och samtidigt i CMS avsnittet kan du konfigurera alternativ för webb sidor (definiera behörigheter, lägga till block, skapa nya sidor, skapa ny meny, etc.). Du kanske även vill konfigurera <b>.htaccess</b> och <b>lang_main_settings.php</b> (för varje installerad språk) att finjustera en del andra önskemål, liksom felrapportering, omskrivning av adresser, sökord, välkomstmeddelandet, tecken och så vidare.<br /><br />Tack för att du valde Icy Phoenix och kom ihåg att säkerhetskopiera din db regelbundet.<br /><br />',

	'Unwriteable_config' => 'Din config fil är inte skrivbar. En kopia av konfigureringsfilen kommer att laddas ner till din dator när du klickar på knappen nedan. Du skall lägga upp denna fil igen till samma katalog där Icy Phoenix har blivit uppladdad. När detta är gjort bör du ta bort install mappen och logga in med administratörsnamn och lösenord som du angav på föregående formulär för att besöka admin centrat; (en länk kommer att visas längst ned på varje skärm när du väl är inloggad) för att kontrollera den allmänna konfigurationen. Tack för att du väljer Icy Phoenix.',
	'Download_config' => 'Ladda Ner Config',

	'ftp_choose' => 'Välj Nerladdnings Metod',
	'ftp_option' => '<br />Since FTP extensions are enabled in this version of PHP you may also be given the option of first trying to automatically FTP the config file into place.',
	'ftp_instructs' => 'Du har valt att FTP:a filen till det konto som innehåller Icy Phoenix automatiskt. Vänligen fyll i informationen nedan för att underlätta denna process. Notera att FTP sökvägen ska vara den exakta sökvägen via FTP till din Icy Phoenix installation som om du FTP:ar den genom att använda vilken normal klient som helst.',
	'ftp_info' => 'Ange Din FTP Information',
	'Attempt_ftp' => 'Försöker FTP:a konfigureringsfilen på plats',
	'Send_file' => 'Skicka bara filen till mig och jag FTP:ar den manuellt',
	'ftp_path' => 'FTP sökväg till Icy Phoenix',
	'ftp_username' => 'Ditt FTP Användarnamn',
	'ftp_password' => 'Ditt FTP Lösenord',
	'Transfer_config' => 'Start Transfer',
	'NoFTP_config' => 'Försöket att FTP:a konfigureringsfilen till sin plats misslyckades. Vänligen ladda ner config filen och FTP:a den till sin plats manuellt.',

	'Install' => 'Installera',
	'Upgrade' => 'Uppgradera',

	'Install_Method' => 'Välj din installationsmetod',
	'Install_No_Ext' => 'The PHP konfigurationen på din server stödjer inte databastypen som du valde',
	'Install_No_PCRE' => 'Icy Phoenix Kräver Perl-Compatible Regular Expressions Modulen för PHP som din PHP konfiguration inte verkar stödja!',

	'Server_name' => 'Domän Namn',
	'Script_path' => 'Script Sökväg',
	'Server_port' => 'Server Port',
	'Admin_email' => 'Admin E-post Adress',

	'IP_Utilities' => 'Icy Phoenix Utilities',
	'Upgrade_Options' => 'Uppgraderings Alternativ:',
	'Upgrade_From' => 'Uppgradera till senaste Icy Phoenix',
	'Upgrade_From_Version' => 'från version',
	'Upgrade_From_phpBB' => 'från phpBB eller vilken annan äldre phpBB XS version',
	'Upgrade_Higher' => 'eller högre',

	'IcyPhoenix' => 'Icy Phoenix',
	'phpBB' => 'phpBB',
	'Information' => 'Information',
	'VersionInformation' => 'Server Och Version Information',
	'NotInstalled' => 'Ej Installerad',
	'Current_IP_Version' => 'Installerad Icy Phoenix version',
	'Current_phpBB_Version' => 'Installerad phpBB version',
	'Latest_Release' => 'Senaste släppta',
	'Version_UpToDate' => 'Versionen aktuell',
	'Version_NotUpdated' => 'Version ej uppdaterad',
	'UpdateInProgress' => 'Uppdatering i framsteg',
	'CleaningInProgress' => 'Fil städningen pågår framskridande',
	'UpdateCompleted' => 'Uppdatering slutförd!',
	'UpdateCompleted_phpBB' => 'phpBB uppdateringen slutförd, nu kan du uppgradera till Icy Phoenix!',
	'UpdateInProgress_Schema' => 'Uppdatering databasschema',
	'UpdateInProgress_Data' => 'Uppdatera data',
	'Optimizing_Tables' => 'Optimera tabeller',
	'Progress' => 'Framskridande',
	'Done' => 'Gjord',
	'NotDone' => 'Ej Gjord',
	'Result' => 'Resultat',
	'Error' => 'Fel',
	'Successful' => 'Successfull',
	'NoErrors' => 'Inga Fel',
	'NoUpdate' => 'Inga uppdateringar krävs',
	'phpBB_NotDetected' => 'phpBB har inte upptäckts och skriptet kan inte fortsätta. Vänligen kontrollera att du verkligen kör phpBB.',
	'Update_Errors' => 'Några frågor misslyckats, uttalanden och fel noteringar är listade nedan',

	'DBUpdate_Success' => 'Följande SQL har blivit exekverad successfullt',
	'DBUpdate_Errors' => 'Följande SQL har inte blivit exekverad',

	'FileWriting' => 'Fil Skrivning',
	'FileCreation_OK' => 'Din server verkar stödja fil skapande och redigering.',
	'FileCreation_OK_Explain' => 'Skriptet försöker att automatiskt skapa/redigera alla nödvändiga filer.',
	'FileCreation_ERROR' => 'Din server stödjer inte fil skapning och redigering.',
	'FileCreation_ERROR_Explain' => 'Scriptet kan inte skapa/redigera filer för dig automatiskt. Tyvärr måste du göra det på egen hand.',

	'IcyPhoenix_Version_UpToDate' => 'Din Icy Phoenix är version och är aktuell',
	'IcyPhoenix_Version_NotUpToDate' => 'Din Icy Phoenix är version och är inte aktuell',
	'IcyPhoenix_Version_NotInstalled' => 'Icy Phoenix är ej installerad',
	'phpBB_Version_UpToDate' => 'Din phpBB är version och är aktuell',
	'phpBB_Version_NotUpToDate' => 'Din phpBB är version och är inte aktuell',
	'ClickUpdate' => 'Vänligen klicka %shär%s för uppdatering!',
	'ClickReturn' => 'Vänligen klicka %shär%s för att återgå till menyn!',

	'Clean_OldFiles_Explain' => 'Ta bort alla oanvända Icy Phoenix (filer som finns kvar på din server från äldre versioner)',
	'ActionUndone' => 'Vänligen notera att denna åtgärd inte kan ångras. Kontrollera att du har en backup!!!',
	'ClickToClean' => 'Vänligen klicka på länken nedan för att fortsätta',
	'FileDeletion_OK' => 'Filen raderad successfullt',
	'FileDeletion_ERROR' => 'Filen kan inte raderas',
	'FileDeletion_NF' => 'Filer kan inte hittas',
	'FilesDeletion_OK' => 'Filer raderade successfullt',
	'FilesDeletion_NO' => 'Filer ej raderade',
	'FilesDeletion_ERROR' => 'Filer kan ej bli automatiskt raderade',
	'FilesDeletion_NF' => 'Filer kan inte hittas',
	'FilesDeletion_None' => 'Ingen',
	'FileDeletion_Complete' => 'Filer städade komplett!',

	'Spoiler' => 'Spoiler',
	'Show' => 'Visa',
	'Hide' => 'Göm',
	'None' => 'Ingen',
	'Start' => 'Start',

	'Upgrade_Steps' => 'Uppgraderings Steg',
	'MakeFullBackup' => 'Gör en full backup (både filer och DB) och förvara den på ett säkert ställe!',
	'Update_phpBB' => 'Uppdatera phpBB DB (om det behövs)',
	'Remove_BBCodeUID' => 'Behandla alla inlägg: flytta BBKod UID, ersätt text, flytta gamla BBKoder',
	'Merge_PostsTables' => 'Sammanfoga post tabeller',
	'Update_IcyPhoenix' => 'Uppdatera Icy Phoenix DB',
	'Upload_NewFiles' => 'Ladda upp alla nya filer',
	'Adjust_Config' => 'Uppdatera konstanter i config.php (fungerar bara om filerna är skrivbara)',
	'Adjust_CMSPages' => 'Uppdatera konstanter i CMS sidor (fungerar bara om filerna är skrivbara)',
	'MoveImagesAlbum' => 'Flytta album bilder (valfritt: bara om du vill använda postade bilder i undermappar)',
	'MoveImages' => 'Flytta postade bilder (valfritt: bara om du vill använda postade bilder i undermappar)',
	'Clean_OldFiles' => 'Rensa Gamla Filer',

	'ColorsLegend' => 'Färg Legend',
	'ColorsLegendRed' => 'Röd: denna åtgärd är nödvändig och måste utföras manuellt',
	'ColorsLegendOrange' => 'Orange: denna åtgärd är nödvändig och skriptet kan göra det automatiskt (om kraven är uppfyllda)',
	'ColorsLegendGray' => 'Grå: denna åtgärd är inte nödvändig och kan utföras automatiskt',
	'ColorsLegendBlue' => 'Blå: denna åtgärd är valfri och kan göras automatiskt (kan även kräva manuella redigeringar på vissa filer)',
	'ColorsLegendGreen' => 'Grön: denna åtgärd föreslås och kan utföras automatiskt (om kraven är uppfyllda)',

	'FixBirthdays' => 'Fastställa Födelsedagar',
	'FixBirthdaysExplain' => 'Denna funktion gör att du kan anpassa alla födelsedagar för kompatibilitet med nya funktioner.',
	'FixingBirthdaysInProgress' => 'Fastställande av födelsedagar pågår',
	'FixingBirthdaysInProgressRedirect' => 'Du kommer att omdirigeras automatiskt till nästa steg inom tre sekunder',
	'FixingBirthdaysInProgressRedirectClick' => 'Om du inte automatiskt omdirigeras inom tre sekunder kan du klicka %sHär%s',
	'FixingBirthdaysFrom' => 'Födelsedagar modifierar det här steget från %s till %s',
	'FixingBirthdaysTotal' => '%s födelsedagar av %s modifierade än så länge',
	'FixingBirthdaysModified' => ' födelsedagar fastställda',
	'FixingBirthdaysComplete' => 'Fastställande av födelsedagar komplett',
	'BirthdaysPerStep' => 'Antal födelsedagar per steg',

	'FixConstantsInFiles' => 'Fastställa Konstanter',
	'FixConstantsInFilesExplain' => 'Fastställa alla filer med nya Icy Phoenix konstanter',
	'FixingInProgress' => 'Fastställande av filer pågår',
	'FixingComplete' => 'Fastställande av filer komplett',
	'ClickToFix' => 'Vänligen klicka på en av länkarna nedan för att fortsätta',
	'FixAllFiles' => 'Fastställa alla filer (både CMS sidor och config.php)',
	'FixCMSPages' => 'Fastställa enbart CMS sidor',
	'Fixed' => 'Fastställd',
	'NotFixed' => 'Ej Fastställd',
	'FilesProcessed' => 'Filer bearbetade',

	'FixPosts' => 'Fastställa Poster',
	'FixPostsExplain' => 'Denna funktion gör att du kan fastställa alla inlägg i ditt forum. Du kan använda denna funktionen till att: hitta och ersätta vilken text som helst i dina poster, flytta alla BBKod UID, automatiskt justera adressen för inlagda bilder.',
	'FixingPostsInProgress' => 'Fastställande av poster pågår',
	'FixingPostsInProgressRedirect' => 'Du kommer att omdirigeras automatiskt till nästa steg inom tre sekunder',
	'FixingPostsInProgressRedirectClick' => 'Om du inte automatiskt omdirigeras inom tre sekunder kan du klicka %sHär%s',
	'FixingPostsFrom' => 'Poster modifierade detta steg från %s till %s',
	'FixingPostsTotal' => '%s poster av %s modifierade än så länge',
	'FixingPostsModified' => ' poster fastställda',
	'FixingPostsComplete' => 'Fastställande av poster komplett',
	'SearchWhat' => 'Sök vad',
	'ReplaceWith' => 'Ersätt med',
	'PostsPerStep' => 'Antal poster per steg',
	'StartFrom' => 'Startar från post',
	'RemoveBBCodeUID' => 'Flytta BBKod UID (får den från post tabellen)',
	'RemoveBBCodeUID_Guess' => 'Försök att gissa och ta bort BBKod UID',
	'FixPostedImagesPaths' => 'Fastställ alla postade bilders sökväg (justera sökvägar för att återspegla användarens undermappar)',

	'FixSignatures' => 'Fastställa Signaturer',
	'FixSignaturesExplain' => 'Denna funktion gör att du kan fastställa alla användares signaturer. Du kan använda denna funktionen till att: hitta och ersätta text i signaturer, flytta alla BBKod UID, automatiskt justera adressen på inlagda bilder.',
	'FixingSignaturesInProgress' => 'Fastställande av signaturer pågår',
	'FixingSignaturesFrom' => 'Signaturer modifierade detta steg från %s till %s',
	'FixingSignaturesTotal' => '%s signaturer av %s modifierade än så länge',
	'FixingSignaturesModified' => ' signaturer fastställda',
	'FixingSignaturesComplete' => 'Fastställande av signaturer komplett',
	'SignaturesPerStep' => 'Antal signaturer per steg',
	'StartFromSignature' => 'Starta från signaturen',

	'FixPics' => 'Fastställa Album Bilds Sökväg',
	'FixPicsExplain' => 'Denna funktion kommer att flytta alla albumets bilder från huvudmappen till användarens undermappar och kommer också att uppdatera databasen med nya sökvägar',
	'FixingPicsInProgress' => 'Fastställande av bilder pågår',
	'FixingPicsInProgressRedirect' => 'Du kommer att omdirigeras automatiskt till nästa steg inom tre sekunder',
	'FixingPicsInProgressRedirectClick' => 'Om du inte automatiskt omdirigeras inom tre sekunder kan du klicka %sHär%s',
	'FixingPicsFrom' => 'Bilder modifierade detta steg från %s till %s',
	'FixingPicsTotal' => '%s bilder av %s modifierade än så länge',
	'FixingPicsModified' => 'bilder fastställda',
	'FixingPicsComplete' => 'Fastställande av bilder komplett',
	'PicStartFrom' => 'Starta från bild',
	'PicsPerStep' => 'Antal bilder per steg',

	'RenMovePics' => 'Byt Namn Och Flytta Postade Bilder',
	'RenMovePicsExplain' => 'Denna funktion kommer att byta namn och flytta alla postade bilder från huvudmappen till användarens undermappar: du kommer sedan att behöva uppdatera post tabellen med hjälp av <i>Fix Posts</i> funktion för att justera alla sökvägar i posterna',
	)
);

$lang['BBC_IP_CREDITS_STATIC'] = '
<a href="http://www.icyphoenix.com" title="Icy Phoenix"><img src="./style/icy_phoenix_small.png" alt="Icy Phoenix" title="Icy Phoenix" /></a><br />
<span style="color: #FF5500;"><b>Mighty Gorgon</b></span><br />
<i>(Luca Libralato)</i><br />
<b><i>Utvecklare</i></b><br />
Intressen: Heroes Of Might And Magic III, 69, #FF5522<br />
Plats: Homer\'s Head<br />
<br />
<br />
<span style="color: #DD2222;"><b>hpl</b></span><br />
<i>(Alessandro Drago)</i><br />
<b><i>Utvecklare</i></b><br />
Intressen: CMS, little animals<br />
Plats: Global Header<br />
<br />
<br />
<span style="color: #DD2222;"><b>Bicet</b></span><br />
<b><i>phpBB XS Utvecklare</i></b><br />
<br />
<br />
<b><i>Värderade Bidragsgivare</i></b><br />
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
Intressen: Icy Phoenix<br />
Plats: <a href="http://www.icyphoenix.com/">http://www.icyphoenix.com</a>
';

$lang['BBC_IP_CREDITS'] = '<div class="center-block"><marquee behavior="scroll" direction="up" scrolldelay="120">' . $lang['BBC_IP_CREDITS_STATIC'] . '</marquee></div>';

?>