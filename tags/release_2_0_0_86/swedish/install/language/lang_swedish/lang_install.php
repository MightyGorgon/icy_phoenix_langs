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
	'ENCODING' => 'UTF-8',
	'DIRECTION' => 'ltr',
	'HEADER_LANG' => 'sv-se',
	'HEADER_LANG_XML' => 'sv-se',
	'LEFT' => 'vänster',
	'RIGHT' => 'höger',

	'Welcome_install' => 'Icy Phoenix Installation',
	'Initial_config' => 'Konfiguration',
	'DB_config' => 'Databas konfiguration',
	'Admin_config' => 'Admin konfiguration',
	'continue_upgrade' => 'När du har laddat ner din config fil till din lokala maskin kan du \'Continue Upgrade\' knappen nedan för att gå vidare med uppgraderings processen. Vänligen vänta med att ladda upp config filen tills uppgraderings processen är komplett.',
	'upgrade_submit' => 'Fortsätt uppgradering',

	'Installer_Error' => 'Ett fel har uppstått under installationen',
	'Previous_Install' => 'En tidigare installation har upptäckts',
	'Install_db_error' => 'Ett fel inträffade vid försök att uppdatera databasen',

	'Re_install' => 'Din tidigare installation är fortfarande aktiv.<br /><br />Om du vill installera om Icy Phoenix ska du klicka på Ja knappen nedan. Var medveten om att detta kommer att förstöra alla befintliga uppgifter och ingen backup kommer att göras! Administratörens användarnamn och lösenord som du har använt för att logga in till forumet kommer att återskapas efter ominstallation och inga andra inställningar kommer att behållas.<br /><br />Tänk noga innan du trycker på Ja!',

	'Inst_Step_0' => 'Tack för att du väljer Icy Phoenix. Den här guiden leder dig genom installationsprocessen.<br /><span class="text_red">Observera att du bör ha laddat upp alla Icy Phoenix filer till din server och att den databas du installerar bör redan finns.</span>',

	'Inst_Step_1' => 'För att slutföra denna installation fyll i begärda uppgifter nedan.<br /><span class="text_red">Observera att databasen du ska installera redan borde finnas (Setup förfarande kan inte skapa någon).</span>',

	'Start_Install' => 'Starta installationen',
	'Start_Install_Anyway' => 'Starta installationen ändå',
	'Finish_Install' => 'Slutför installationen',
	'Continue_Install' => 'Fortsätt installationen',

	'CHMOD_Files' => 'Filer &amp; Mapp Behörigheter',
	'CHMOD_OK' => 'Ok',
	'CHMOD_Error' => 'Error',
	'CHMOD_777' => 'CHMOD 777',
	'CHMOD_666' => 'CHMOD 666',
	'CHMOD_Files_Explain_Error' => 'Några fel inträffade vid kontroll av CHMOD behörigheter. Se till att alla filer / mappar från installationspaketet finns och de har rätt CHMOD behörigheter, annars kan inte Icy Phoenix fungera.',
	'Confirm_Install_anyway' => ' Om du har dubbel kontrollerat allt kan du fortsätta genom att klicka på "<i>Starta Installationen Ändå</i>".',
	'CHMOD_Files_Explain_Ok' => 'Alla CHMOD behörigheter verkar vara bra.',
	'Can_Install' => 'Du kan gå vidare till nästa steg.',
	'CHMOD_File_Exists' => 'Denna Fil/Mapp existerar och dess behörigheter har tillämpats korrekt.',
	'CHMOD_File_NotExists' => 'Denna Fil/Mapp existerar inte, vänligen ladda upp den och tillämpa de korrekta CHMOD behörigheterna.',
	'CHMOD_File_Exists_Read_Only' => 'Denna Fil/Mapp existerar men dess behörigheter får inte ändras automatiskt, vänligen tillämpa CHMOD manuellt och klicka sedan på "<i>Starta Installationen Ändå</i>".',
	'CHMOD_File_UnknownError' => 'Okänt fel vid kontroll denna Fil/Mapp. Se till att denna Fil/Mapp finns på servern, att den har rätt CHMOD behörigheter och klicka sedan på "<i>Starta Installationen Ändå</i>".',
	'CHMOD_Apply' => 'Tillämpa CHMOD behörigheter på Icy Phoenix filer och mappar via PHP',
	'CHMOD_Apply_Warn' => 'Observera att inte alla servrar stöder CHMOD via PHP, manuell redigering kan krävas!!!',

	'Default_lang' => 'Standard sido språk',
	'Select_lang' => 'Språk',
	'DB_Host' => 'Databas server värdnamn / DSN',
	'DB_Name' => 'Ditt databas namn',
	'DB_Username' => 'Databas användarnamn',
	'DB_Password' => 'Databas lösenord',
	'Database' => 'Din databas',
	'Install_lang' => 'Välj språk för installation',
	'dbms' => 'Databas typ',
	'Table_Prefix' => 'Prefix för tabeller i databasen',
	'Admin_Username' => 'Administratör användarnamn',
	'Admin_Password' => 'Administratör lösenord',
	'Admin_Password_confirm' => 'Administratör lösenord [ Bekräfta ]',

	'Inst_Step_2' => 'Ditt admin användarnamn har skapats.<br />Vid denna punkt för att slutföra installationen måste du <span class="text_red">ta bort <u>install</u> mappen</span>. Till sist ska du klicka på <b>Slutför Installationen</b> och gå sedan till ACP (Admin Control Panel) och CMS (Content Management System) där du kan hantera alla Icy Phoenix inställningar och preferenser.<br />I ACP kan du justera huvudinställningar och inställningar för hela webbplatsene, (stilar, språk, tid, forum, download, användare, album, etc.) och samtidigt i CMS avsnittet kan du konfigurera alternativ för webbplatsens sidor (definiera behörigheter, lägga till block, skapa nya sidor, skapa ny meny etc.). Du kanske också vill konfigurera <b>.htaccess</b> och <b>lang_main_settings.php</b> (för varje installerat språk) för att finjustera en del andra inställningar, som felrapportering, url, omskrivning, nyckelord, välkomstmeddelande, teckenuppsättning och så vidare.<br /><br />Tack för att du valde Icy Phoenix och kom ihåg att säkerhetskopiera dina db regelbundet.<br /><br />',

	'Unwriteable_config' => 'Din config fil är inte skrivbar. En kopia av config filen kommer att laddas ner till din dator när du klickar på knappen nedan. Du bör ladda upp denna fil till samma katalog där Icy Phoenix har laddats upp. När detta är gjort ska du ta bort installationsmappen och logga in med administratörsnamn och lösenord som du angav på föregående formulär för att besöka admin kontrollcentralen; (en länk visas längst ned på varje skärm när du har loggat in) för att kontrollera den allmänna konfigurationen. Tack för att du valde Icy Phoenix.',
	'Download_config' => 'Ladda ner config',

	'ftp_choose' => 'Välj hämtningsmetod',
	'ftp_option' => '<br />Eftersom FTP-tillägg är aktiverade i denna version av PHP kan du också ges möjlighet att först försöka att automatiskt FTP konfigurationsfilen på plats.',
	'ftp_instructs' => 'Du har valt att FTP filen till kontot innehållande Icy Phoenix automatiskt. Ange informationen nedan för att underlätta denna process. Notera att FTP sökvägen bör vara den exakta sökvägen via FTP till din Icy Phoenix installation som om du FTPing den med användning av alla normala klienter.',
	'ftp_info' => 'Ange din FTP information',
	'Attempt_ftp' => 'Försök till FTP konfigurationsfil på plats',
	'Send_file' => 'Skicka bara filen till mig så FTP:ar jag den manuellt',
	'ftp_path' => 'FTP sökväg till Icy Phoenix',
	'ftp_username' => 'Ditt FTP användarnamn',
	'ftp_password' => 'Ditt FTP lösenord',
	'Transfer_config' => 'Starta överföring',
	'NoFTP_config' => 'Försöket till FTP konfigurationsfilen på plats misslyckades. Vänligen ladda ner konfigurationsfilen och FTP:a den på plats manuellt.',

	'Install' => 'Installera',
	'Upgrade' => 'Uppgradere',

	'Install_Method' => 'Välj din installations metod',
	'Install_No_Ext' => 'PHP konfiguration på din server stödjer inte den databas typ som du har valt',
	'Install_No_PCRE' => 'Icy Phoenix Kräver,  Perl-Compatible Regular Expressions Modul för PHP som din PHP konfiguration ser ut att stödja!',

	'Server_name' => 'Domän namn',
	'Script_path' => 'Script sökväg',
	'Server_port' => 'Server port',
	'Admin_email' => 'Admin e-postadress',

	'IP_Utilities' => 'Icy Phoenix Utilities',
	'Upgrade_Options' => 'Uppgraderings alternativ:',
	'Upgrade_From' => 'Uppgradera till senaste Icy Phoenix',
	'Upgrade_From_Version' => 'från version',
	'Upgrade_From_phpBB' => 'från phpBB eller någon äldre phpBB XS version',
	'Upgrade_Higher' => 'eller högre',

	'IcyPhoenix' => 'Icy Phoenix',
	'phpBB' => 'phpBB',
	'Information' => 'Information',
	'VersionInformation' => 'Server och versions information',
	'NotInstalled' => 'Inte installerad',
	'Current_IP_Version' => 'Installerad Icy Phoenix version',
	'Current_phpBB_Version' => 'Installerad phpBB version',
	'Latest_Release' => 'Senaste utgåva',
	'Version_UpToDate' => 'Version up-to-date',
	'Version_NotUpdated' => 'Version ej uppdaterad',
	'UpdateInProgress' => 'Uppdatering pågår',
	'CleaningInProgress' => 'Fil rensning pågår',
	'UpdateCompleted' => 'Uppdatering komplettd!',
	'UpdateCompleted_phpBB' => 'phpBB uppdatering klar nu kan du uppgradera till Icy Phoenix!',
	'UpdateInProgress_Schema' => 'Uppdatering databasschema',
	'UpdateInProgress_Data' => 'Uppdaterings data',
	'Optimizing_Tables' => 'Optimera tabeller',
	'Progress' => 'Framåtskridande',
	'Done' => 'Klar',
	'NotDone' => 'Inte klar',
	'Result' => 'Resultat',
	'Error' => 'Error',
	'Successful' => 'Successfull',
	'NoErrors' => 'Inga errors',
	'NoUpdate' => 'Inga uppdateringar krävs',
	'phpBB_NotDetected' => 'phpBB har inte upptäcks, skriptet kan inte fortsätta. Kontrollera att du verkligen kör phpBB.',
	'Update_Errors' => 'Vissa frågor misslyckades, uttalanden och felen är listade nedan',

	'DBUpdate_Success' => 'Följande SQL har exekverats successfullt',
	'DBUpdate_Errors' => 'Följande SQL har inte utförts',

	'FileWriting' => 'Fil skrivning',
	'FileCreation_OK' => 'Servern verkar stödja fil skapande och redigering.',
	'FileCreation_OK_Explain' => 'Skriptet försöker automatiskt skapa/redigera alla filer som behövs.',
	'FileCreation_ERROR' => 'Servern stödjer inte skapande av fil och redigering.',
	'FileCreation_ERROR_Explain' => 'Skriptet kan inte skapa / redigera filer åt dig automatiskt. Tyvärr måste du göra det på egen hand.',

	'IcyPhoenix_Version_UpToDate' => 'Din Icy Phoenix version är up-to-date',
	'IcyPhoenix_Version_NotUpToDate' => 'Din Icy Phoenix version är inte up-to-date',
	'IcyPhoenix_Version_NotInstalled' => 'Icy Phoenix är inte installerad',
	'phpBB_Version_UpToDate' => 'Din phpBB version är up-to-date',
	'phpBB_Version_NotUpToDate' => 'Din phpBB version är inte up-to-date',
	'ClickUpdate' => 'Vänligen klicka %sHär%s för att uppdatera!',
	'ClickReturn' => 'Vänligen klicka %sHär%s för att återgå till menyn!',

	'Clean_OldFiles_Explain' => 'Ta bort alla oanvända Icy Phoenix (filer som fortfarande finns på servern från äldre versioner)',
	'ActionUndone' => 'Vänligen observera att denna åtgärd inte kan ångras. Kontrollera att du har en säkerhetskopia!!!',
	'ClickToClean' => 'Vänligen klicka på länken nedan för att fortsätta',
	'FileDeletion_OK' => 'Fil raderad successfullt',
	'FileDeletion_ERROR' => 'Fil kan inte raderas',
	'FileDeletion_NF' => 'Filer kan inte hittas',
	'FilesDeletion_OK' => 'Filer raderade successfullt',
	'FilesDeletion_NO' => 'Filer ej raderade',
	'FilesDeletion_ERROR' => 'Filer kan inte bli automatiskt raderade',
	'FilesDeletion_NF' => 'Filer kan inte hittas',
	'FilesDeletion_None' => 'Inga',
	'FileDeletion_Complete' => 'Fil rensning komplett!',

	'Spoiler' => 'Spoiler',
	'Show' => 'Visa',
	'Hide' => 'Dölj',
	'None' => 'Ingen',
	'Start' => 'Start',

	'Upgrade_Steps' => 'Uppgraderings steg',
	'MakeFullBackup' => 'Gör en fullständig säkerhetskopia (både filer och DB) och förvara den på en säker plats!',
	'Update_phpBB' => 'Uppdatere phpBB DB (om det behövs)',
	'Remove_BBCodeUID' => 'Behandla alla inlägg: ta bort BB-kod UID, ersätt text, ta bort gamla BB-koder',
	'Merge_PostsTables' => 'Slå ihop inläggs tabeller',
	'Update_IcyPhoenix' => 'Uppdatera Icy Phoenix DB',
	'Upload_NewFiles' => 'Ladda upp alla nya filer',
	'Adjust_Config' => 'Uppdatera konstanter i config.php (fungerar bara om filerna är skrivbara)',
	'Adjust_CMSPages' => 'Uppdatera konstanter i CMS sidor (fungerar bara om filerna är skrivbara)',
	'MoveImagesAlbum' => 'Flytta album bilder (tillval: bara om du vill använda postade bilder till undermappar)',
	'MoveImages' => 'Flytta postade bilder (tillval: bara om du vill använda postade bilder till undermappar)',
	'Clean_OldFiles' => 'Rensa gamla filer',

	'ColorsLegend' => 'Färg Legend',
	'ColorsLegendRed' => 'Röd: denna åtgärd krävs och måste utföras manuellt',
	'ColorsLegendOrange' => 'Orange: denna åtgärd krävs och scriptet kan utföra det automatiskt (om kraven är uppfyllda)',
	'ColorsLegendGray' => 'Grå: denna åtgärd kanske inte behövs och kan utföras automatiskt',
	'ColorsLegendBlue' => 'Blå: denna åtgärd är frivillig och kan utföras automatiskt (kan kräva manuella ändringar på vissa filer fast)',
	'ColorsLegendGreen' => 'Grön: denna åtgärd föreslås och kan utföras automatiskt (om kraven är uppfyllda)',

	'FixBirthdays' => 'Fixera Födelsedagar (Uppgradering från Icy Phoenix 1.2 eller under)',
	'FixBirthdaysExplain' => 'Den här funktionen gör att du kan justera alla födelsedagar för kompatibilitet med nya funktioner. Du måste inte köra den här funktionen om du uppgraderar från Icy Phoenix 1.3 eller högre.',
	'FixingBirthdaysInProgress' => 'Fixering av födelsedagar pågår',
	'FixingBirthdaysInProgressRedirect' => 'Du kommer automatiskt att omdirigeras till nästa steg inom tre sekunder',
	'FixingBirthdaysInProgressRedirectClick' => 'Om du inte omdirigeras automatiskt inom tre sekunder kan du klicka %sHär%s',
	'FixingBirthdaysFrom' => 'Födelsedagar modifierat detta steg från %s till %s',
	'FixingBirthdaysTotal' => '%s födelsedagar av %s modifierade hittills',
	'FixingBirthdaysModified' => ' födelsedagar fixering',
	'FixingBirthdaysComplete' => 'Fixering av födelsedagar komplett',
	'BirthdaysPerStep' => 'Antal födelsedagar per steg',

	'FixConstantsInFiles' => 'Fixering konstanter (Uppgradering från Icy Phoenix 1.2 eller under)',
	'FixConstantsInFilesExplain' => 'Fixering alla filer med nya Icy Phoenix konstanter. Du måste inte köra den här funktionen om du uppgraderar från Icy Phoenix 1.3 eller högre.',
	'FixingInProgress' => 'Fixering av filer pågår',
	'FixingComplete' => 'Fixering av filer komplett',
	'ClickToFix' => 'Vänligen klicka på en av länken nedan för att gå vidare',
	'FixAllFiles' => 'Fixering alla filer (både CMS sidor och config.php)',
	'FixCMSPages' => 'Fixering enbart CMS sidor',
	'Fixed' => 'Fixerad',
	'NotFixed' => 'Inte fixerad',
	'FilesProcessed' => 'Filer bearbetas',

	'FixForums' => 'Konvertera Forum (Uppgradering från Icy Phoenix 1.2 eller under)',
	'FixForumsExplain' => 'Denna funktion kommer att konvertera forum och kategorier till det nya formatet. Du måste inte köra den här funktionen om du uppgraderar från Icy Phoenix 1.3 eller högr.',
	'FixingForumsInProgress' => 'Konvertering pågår...',
	'FixingForumsComplete' => 'Arbete komplett!',

	'FixPosts' => 'Fixera inlägg (Uppgradering från Icy Phoenix 1.2 eller under)',
	'FixPosts_Explain' => 'Den här funktionen gör att du kan fixa alla inlägg i ditt forum. Du kan använda funktionen för att: hitta och ersätta all text i dina inlägg, ta bort alla BBKod UID, automatiskt justera adress inlagda bilder. Du måste inte köra den här funktionen om du uppgraderar från Icy Phoenix 1.3 eller högre.',
	'FixPosts_IP2' => 'Fixa inlägg (Uppgradering från Icy Phoenix 1.3)',
	'FixPosts_IP2_Explain' => 'Den här funktionen gör att du kan justera sökvägen för uppladdade bilder, eftersom sökvägen i Icy Phoenix 2.0 skiljer sig från de tidigare versionerna av Icy Phoenix. Du kan använda den här funktionen även till att hitta och byta ut all text i dina inlägg (genom att lämna sökandet fältet tomt kommer ingen ersättare att utföras och endast bildens sökvägar kommer att justeras).',
	'FixingPostsInProgress' => 'Fixing inlägg som pågår',
	'FixingPostsInProgressRedirect' => 'Du kommer automatiskt att omdirigeras till nästa steg inom tre sekunder',
	'FixingPostsInProgressRedirectClick' => 'Om du inte omdirigeras automatiskt inom tre sekunder kan du klicka %sHär%s',
	'FixingPostsFrom' => 'Inlägg modifierade detta steg från %s till %s',
	'FixingPostsTotal' => '%s inlägg av %s modifierade hittills',
	'FixingPostsModified' => ' inlägg fixade',
	'FixingPostsComplete' => 'Fixerings inlägg komplett',
	'SearchWhat' => 'Sök vad',
	'ReplaceWith' => 'Ersätt med',
	'PostsPerStep' => 'Antal inlägg per steg',
	'StartFrom' => 'Starta från posten',
	'RemoveBBCodeUID' => 'Flytta BBKod UID (få det från inläggs tabell)',
	'RemoveBBCodeUID_Guess' => 'Försök att gissa och ta bort BBKod UID',
	'FixPostedImagesPaths' => 'Fixa alla postade bilders sökvägar (justera sökvägar så att de avspeglar användarnas mappar)',

	'FixSignatures' => 'Fixa signaturer (Uppgradering från Icy Phoenix 1.2 eller under)',
	'FixSignatures_Explain' => 'Den här funktionen gör att du kan fixa alla användares signaturer. Du kan använda funktionen för att: hitta och ersätta all text i signaturer, avlägsna alla BBKod UID, automatiskt justera adress på inlagda bilder. Du måste inte köra den här funktionen om du uppgraderar från Icy Phoenix 1.3 eller högre.',
	'FixSignatures_IP2' => 'Fixa signaturer (Uppgradering från Icy Phoenix 1.3)',
	'FixSignatures_IP2_Explain' => 'Den här funktionen gör att du kan justera sökväg på uppladdade bilder, eftersom sökvägen i Icy Phoenix 2.0 skiljer sig från de senaste versionerna av Icy Phoenix. Du kan använda den här funktionen även för att hitta och ersätta en text i signaturer (genom att lämna sökande fältet tomt kommer ingen ersättare att utföras och endast bilders sökvägar kommer att justeras).',
	'FixingSignaturesInProgress' => 'Fixing signaturer pågår',
	'FixingSignaturesFrom' => 'Signaturer modifierade detta steg från %s till %s',
	'FixingSignaturesTotal' => '%s signaturer av %s modifierade hittills',
	'FixingSignaturesModified' => ' signaturer fixade',
	'FixingSignaturesComplete' => 'Fixing signaturer komplett',
	'SignaturesPerStep' => 'Antal signaturers per steg',
	'StartFromSignature' => 'Starta från signatur',

	'FixPics' => 'Fixa Album Bilders Sökväg (Uppgradering från Icy Phoenix 1.2 eller under)',
	'FixPicsExplain' => 'Denna funktion kommer att flytta alla album bilder från huvudmappen till användares undermappar och kommer också att uppdatera databasen med nya sökvägar. Du måste inte köra den här funktionen om du uppgraderar från Icy Phoenix 1.3 eller högre.',
	'FixingPicsInProgress' => 'Fixing bilder pågår',
	'FixingPicsInProgressRedirect' => 'Du kommer automatiskt att omdirigeras till nästa steg inom tre sekunder',
	'FixingPicsInProgressRedirectClick' => 'Om du inte omdirigeras automatiskt inom tre sekunder kan du klicka %sHär%s',
	'FixingPicsFrom' => 'Bilder modifierade detta steg från %s till %s',
	'FixingPicsTotal' => '%s bilder av %s modifierade hittills',
	'FixingPicsModified' => ' bilder fixade',
	'FixingPicsComplete' => 'Fixing bilder komplett',
	'PicStartFrom' => 'Starta från bild',
	'PicsPerStep' => 'Antal bilder per steg',

	'RenMovePics' => 'Byt namn och flytta inlagda bilder (Uppgradering från Icy Phoenix 1.2 eller under)',
	'RenMovePicsExplain' => 'Denna funktion kommer att byta namn och flytta alla postade bilder från huvudmappen till användarnas undermappar: du måste sedan uppdatera inläggs tabellen med hjälp av <i>Fixa Inlägg</i> funktionen för att justera alla sökvägar i inlägg. Du måste inte köra den här funktionen om du uppgraderar från Icy Phoenix 1.3 eller högre.',

	'AddPostedPicsDB' => 'Lägg till uppladdade bilder till DB (Uppgradering från Icy Phoenix 1.3 eller över)',
	'AddPostedPicsDBExplain' => 'Denna funktion kommer att importera alla uppladdade bilder till DB.',

	'COLLIDING_CLEAN_USERNAME' => '<strong>%s</strong> är det rena användarnamn för:',
	'COLLIDING_USERNAMES_FOUND' => 'Kollidera användarnamn hittades på ditt gamla forum. För att fullfölja omvandlingen vänligen ta bort eller byt namn på dessa användare så att det bara finns en användare på ditt gamla forum för varje rent användarnamn.',
	'COLLIDING_USER' => '&raquo; användar id: <strong>%d</strong> användarnamn: <strong>%s</strong> (%d posts)',

	)
);

$lang['BBC_IP_CREDITS_STATIC'] = '
<a href="http://www.icyphoenix.com" title="Icy Phoenix"><img src="./style/icy_phoenix_small.png" alt="Icy Phoenix" title="Icy Phoenix" /></a><br />
<span style="color: #dd2222;"><b>Mighty Gorgon</b></span>&nbsp;<i>(Luca Libralato)</i><br />
<b><i>Projekt Manager Och Huvud Utvecklare</i></b><br />
<br />
<br />
<span style="color: #dd2222;"><b>The Steffen</b></span><br />
<b><i>Sido Administratör</i></b><br />
<br />
<br />
<span style="color: #228822;"><b>Joshua203</b></span><br />
<b><i>Staff Leader</i></b><br />
<br />
<br />
<span style="color: #ff5500;"><b>KasLimon</b></span><br />
<b><i>Junior Utvecklare</i></b><br />
<br />
<br />
<span style="color: #ff5500;"><b>Informpro</b></span><br />
<b><i>Junior Utvecklare</i></b><br />
<br />
<br />
<span style="color: #ff5500;"><b>jhl</b></span><br />
<b><i>Junior Utvecklare</i></b><br />
<br />
<br />
<b><i>Valued Contributors</i></b><br />
<span style="color: #dd2222;"><b>Andrea75</b></span><br />
<span style="color: #228822;"><b>Artie</b></span><br />
<span style="color: #ff5500;"><b>Bicet</b></span>&nbsp;<i>(phpBB XS Utvecklare)</i><br />
<span style="color: #880088;"><b>brandsrus</b></span><br />
<span style="color: #dd2222;"><b>buldo</b></span><br />
<span style="color: #880088;"><b>casimedicos</b></span><br />
<span style="color: #880088;"><b>Chaotic</b></span><br />
<span style="color: #ff5500;"><b>CyberAlien</b></span>&nbsp;<i>(Many Contributions)</i><br />
<span style="color: #880088;"><b>difus</b></span><br />
<span style="color: #228822;"><b>DWho</b></span><br />
<span style="color: #880088;"><b>fracs</b></span><br />
<span style="color: #880088;"><b>ganesh</b></span><br />
<span style="color: #880088;"><b>Hans</b></span><br />
<span style="color: #ff5500;"><b>hpl</b></span>&nbsp;<i>(Junior Developer)</i><br />
<span style="color: #880088;"><b>JANU1535</b></span><br />
<span style="color: #880088;"><b>jz</b></span><br />
<span style="color: #aaff00;"><b>KugeLSichA</b></span><br />
<span style="color: #0000bb;"><b>Limun</b></span><br />
<span style="color: #880088;"><b>Lopalong</b></span><br />
<span style="color: #880088;"><b>moreteavicar</b></span><br />
<span style="color: #880088;"><b>mort</b></span><br />
<span style="color: #880088;"><b>novice programmer</b></span><br />
<span style="color: #dd2222;"><b>ThE KuKa</b></span><br />
<span style="color: #880088;"><b>Tom</b></span><br />
<span style="color: #228822;"><b>TopoMotoV3X</b></span><br />
<span style="color: #aaff00;"><b>TuningBEB2008</b></span><br />
<span style="color: #880088;"><b>z3d0</b></span><br />
<span style="color: #880088;"><b>Zuker</b></span><br />
<br />
';

$lang['BBC_IP_CREDITS'] = '<div class="center-block"><marquee behavior="scroll" direction="up" scrolldelay="120">' . $lang['BBC_IP_CREDITS_STATIC'] . '</marquee></div>';

?>