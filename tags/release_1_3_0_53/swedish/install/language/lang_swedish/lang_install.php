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
	'LEFT' => 'v�nster',
	'RIGHT' => 'h�ger',

	'Welcome_install' => 'Icy Phoenix Installation',
	'Initial_config' => 'Konfiguration',
	'DB_config' => 'Databas Konfiguration',
	'Admin_config' => 'Admin Konfiguration',
	'continue_upgrade' => 'N�r du har laddat ner din config-fil till din lokala dator kan du\'Forts�tt Upgradera\' kan du klicka p� knappen nedan f�r att g� vidare med uppgraderingsprocessen. V�nligen v�nta att ladda upp konfigureringsfilen tills uppgraderingen �r klar.',
	'upgrade_submit' => 'Forts�tt Upgradera',

	'Installer_Error' => 'Ett fel har uppst�tt under installationen',
	'Previous_Install' => 'En tidigare installation har uppt�ckts',
	'Install_db_error' => 'Ett fel uppstod vid f�rs�k att uppdatera databasen',

	'Re_install' => 'Din tidigare installation �r fortfarande aktiv.<br /><br />Om du vill �ter-installera Icy Phoenix ska du klicka p� Ja-knappen nedan. V�nligen var medveten om att detta kommer att f�rst�ra all befintlig data och inga s�kerhetskopior kommer att g�ras! Administrat�r anv�ndarnamnet och l�senordet som du har anv�nt f�r att logga in p� forumet kommer att �terskapas efter ominstallation och inga andra inst�llningar kommer att beh�llas. <br /> <br /> T�nk noga innan du trycker p� Ja!',

	'Inst_Step_0' => 'Tack f�r att du v�ljer Icy Phoenix. Den h�r guiden hj�lper dig genom installationens processen.<br /><span class="text_red">Observera att du har lagt upp alla Icy Phoenix filer till din server och att den databas som du installerari ska alle redan existera.</span>',

	'Inst_Step_1' => 'F�r att slutf�ra denna installation v�nligen fyll i all information som efterfr�gas nedan.<br /><span class="text_red">V�nligen notera att databasen som du installerar i redan ska existera (Installations proceduren kan inte skapa en).</span>',

	'Start_Install' => 'Starta Installationen',
	'Start_Install_Anyway' => 'Starta Installationen I Alla Fall',
	'Finish_Install' => 'Slutf�r Installationen',
	'Continue_Install' => 'Forts�tt Installationen',

	'CHMOD_Files' => 'Filer &amp; Mapp R�ttigheter',
	'CHMOD_OK' => 'Ok',
	'CHMOD_Error' => 'Fel',
	'CHMOD_777' => 'CHMOD 777',
	'CHMOD_666' => 'CHMOD 666',
	'CHMOD_Files_Explain_Error' => 'Vissa fel uppstod vid verifiering av CHMOD r�ttigheter. V�nligen kontrollera att alla filer/mappar fr�n installationspaketet finns och att de har r�tt CHMOD r�ttigheter, annars kan inte Icy Phoenix k�ras korrekt.',
	'Confirm_Install_anyway' => 'Om du har dubbell kontrollerat allt kan du forts�tta genom att klicka p� "<i>Starta Installationen I Alla Fall</i>".',
	'CHMOD_Files_Explain_Ok' => 'Alla CHMOD r�ttigheter verkar vara bra.',
	'Can_Install' => 'Du kan g� vidare till n�sta steg.',
	'CHMOD_File_Exists' => 'Denna Fil/Mapp existerar och dess r�ttigheter har till�mpats korrekt.',
	'CHMOD_File_NotExists' => 'Denna Fil/Mapp doesn\'t existerar, v�nligen ladda upp den och anv�nd de korrekta CHMOD r�ttigheterna.',
	'CHMOD_File_Exists_Read_Only' => 'Denna Fil/Mapp existerar men dess r�ttigheter kan kanske inte modifierad automatiskt, v�nligen till�mpa CHMOD manuellt och klicka sedan p� "<i>Starta Installationen I Alla Fall</i>".',
	'CHMOD_File_UnknownError' => 'Ok�nt fel vid kontroll av denna Fil/Mapp. V�nligen se till att denna Fil/Mapp existerar p� servern, och att den har r�tt CHMOD r�ttigheter och klicka sedan p� "<i>Starta Installationen I Alla Fall</i>".',
	'CHMOD_Apply' => 'L�gg till CHMOD r�ttigheter till Icy Phoenix filer och mappar via PHP',
	'CHMOD_Apply_Warn' => 'V�nligen notera att inte alla servrar st�djer CHMOD via PHP, manuell redigering kan kr�vas!!!',

	'Default_lang' => 'Standard webbplats spr�k',
	'Select_lang' => 'Spr�k',
	'DB_Host' => 'Databas Server V�rdnamn / DSN',
	'DB_Name' => 'Ditt Databas Namn',
	'DB_Username' => 'Databas Anv�ndarnamn',
	'DB_Password' => 'Databas L�senord',
	'Database' => 'Din Databas',
	'Install_lang' => 'V�lj Spr�k f�r Installationen',
	'dbms' => 'Databas Typ',
	'Table_Prefix' => 'Prefix f�r tabeller i databasen',
	'Admin_Username' => 'Administrat�r Anv�ndarnamn',
	'Admin_Password' => 'Administrat�r L�senord',
	'Admin_Password_confirm' => 'Administrat�r L�senord [ Bekr�fta ]',

	'Inst_Step_2' => 'Ditt admin anv�ndarnamn har blivit skapat.<br />Vid det h�r tillf�llet f�r att slutf�ra installationen m�ste du <span class="text_red">flytta <u>installera</u> och <u>contrib</u> (om du har den p� din server) mappar</span>. Slutligen ska du klicka p� <b>Slutf�r Installationen</b> och sedan tillg� ACP (Admin Control Panel) och CMS (Content Management System) d�r du kan hantera alla Icy Phoenix inst�llningar och preferenser.<br />I ACP kan du justera de viktigaste inst�llningarna och preferenser f�r hela webbplatsen, (stilar, spr�k, tid, forum, nerladdningar, anv�ndare, album, etc.) och samtidigt i CMS avsnittet kan du konfigurera alternativ f�r webb sidor (definiera beh�righeter, l�gga till block, skapa nya sidor, skapa ny meny, etc.). Du kanske �ven vill konfigurera <b>.htaccess</b> och <b>lang_main_settings.php</b> (f�r varje installerad spr�k) att finjustera en del andra �nskem�l, liksom felrapportering, omskrivning av adresser, s�kord, v�lkomstmeddelandet, tecken och s� vidare.<br /><br />Tack f�r att du valde Icy Phoenix och kom ih�g att s�kerhetskopiera din db regelbundet.<br /><br />',

	'Unwriteable_config' => 'Din config fil �r inte skrivbar. En kopia av konfigureringsfilen kommer att laddas ner till din dator n�r du klickar p� knappen nedan. Du skall l�gga upp denna fil igen till samma katalog d�r Icy Phoenix har blivit uppladdad. N�r detta �r gjort b�r du ta bort install mappen och logga in med administrat�rsnamn och l�senord som du angav p� f�reg�ende formul�r f�r att bes�ka admin centrat; (en l�nk kommer att visas l�ngst ned p� varje sk�rm n�r du v�l �r inloggad) f�r att kontrollera den allm�nna konfigurationen. Tack f�r att du v�ljer Icy Phoenix.',
	'Download_config' => 'Ladda Ner Config',

	'ftp_choose' => 'V�lj Nerladdnings Metod',
	'ftp_option' => '<br />Since FTP extensions are enabled in this version of PHP you may also be given the option of first trying to automatically FTP the config file into place.',
	'ftp_instructs' => 'Du har valt att FTP:a filen till det konto som inneh�ller Icy Phoenix automatiskt. V�nligen fyll i informationen nedan f�r att underl�tta denna process. Notera att FTP s�kv�gen ska vara den exakta s�kv�gen via FTP till din Icy Phoenix installation som om du FTP:ar den genom att anv�nda vilken normal klient som helst.',
	'ftp_info' => 'Ange Din FTP Information',
	'Attempt_ftp' => 'F�rs�ker FTP:a konfigureringsfilen p� plats',
	'Send_file' => 'Skicka bara filen till mig och jag FTP:ar den manuellt',
	'ftp_path' => 'FTP s�kv�g till Icy Phoenix',
	'ftp_username' => 'Ditt FTP Anv�ndarnamn',
	'ftp_password' => 'Ditt FTP L�senord',
	'Transfer_config' => 'Start Transfer',
	'NoFTP_config' => 'F�rs�ket att FTP:a konfigureringsfilen till sin plats misslyckades. V�nligen ladda ner config filen och FTP:a den till sin plats manuellt.',

	'Install' => 'Installera',
	'Upgrade' => 'Uppgradera',

	'Install_Method' => 'V�lj din installationsmetod',
	'Install_No_Ext' => 'The PHP konfigurationen p� din server st�djer inte databastypen som du valde',
	'Install_No_PCRE' => 'Icy Phoenix Kr�ver Perl-Compatible Regular Expressions Modulen f�r PHP som din PHP konfiguration inte verkar st�dja!',

	'Server_name' => 'Dom�n Namn',
	'Script_path' => 'Script S�kv�g',
	'Server_port' => 'Server Port',
	'Admin_email' => 'Admin E-post Adress',

	'IP_Utilities' => 'Icy Phoenix Utilities',
	'Upgrade_Options' => 'Uppgraderings Alternativ:',
	'Upgrade_From' => 'Uppgradera till senaste Icy Phoenix',
	'Upgrade_From_Version' => 'fr�n version',
	'Upgrade_From_phpBB' => 'fr�n phpBB eller vilken annan �ldre phpBB XS version',
	'Upgrade_Higher' => 'eller h�gre',

	'IcyPhoenix' => 'Icy Phoenix',
	'phpBB' => 'phpBB',
	'Information' => 'Information',
	'VersionInformation' => 'Server Och Version Information',
	'NotInstalled' => 'Ej Installerad',
	'Current_IP_Version' => 'Installerad Icy Phoenix version',
	'Current_phpBB_Version' => 'Installerad phpBB version',
	'Latest_Release' => 'Senaste sl�ppta',
	'Version_UpToDate' => 'Versionen aktuell',
	'Version_NotUpdated' => 'Version ej uppdaterad',
	'UpdateInProgress' => 'Uppdatering i framsteg',
	'CleaningInProgress' => 'Fil st�dningen p�g�r framskridande',
	'UpdateCompleted' => 'Uppdatering slutf�rd!',
	'UpdateCompleted_phpBB' => 'phpBB uppdateringen slutf�rd, nu kan du uppgradera till Icy Phoenix!',
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
	'NoUpdate' => 'Inga uppdateringar kr�vs',
	'phpBB_NotDetected' => 'phpBB har inte uppt�ckts och skriptet kan inte forts�tta. V�nligen kontrollera att du verkligen k�r phpBB.',
	'Update_Errors' => 'N�gra fr�gor misslyckats, uttalanden och fel noteringar �r listade nedan',

	'DBUpdate_Success' => 'F�ljande SQL har blivit exekverad successfullt',
	'DBUpdate_Errors' => 'F�ljande SQL har inte blivit exekverad',

	'FileWriting' => 'Fil Skrivning',
	'FileCreation_OK' => 'Din server verkar st�dja fil skapande och redigering.',
	'FileCreation_OK_Explain' => 'Skriptet f�rs�ker att automatiskt skapa/redigera alla n�dv�ndiga filer.',
	'FileCreation_ERROR' => 'Din server st�djer inte fil skapning och redigering.',
	'FileCreation_ERROR_Explain' => 'Scriptet kan inte skapa/redigera filer f�r dig automatiskt. Tyv�rr m�ste du g�ra det p� egen hand.',

	'IcyPhoenix_Version_UpToDate' => 'Din Icy Phoenix �r version och �r aktuell',
	'IcyPhoenix_Version_NotUpToDate' => 'Din Icy Phoenix �r version och �r inte aktuell',
	'IcyPhoenix_Version_NotInstalled' => 'Icy Phoenix �r ej installerad',
	'phpBB_Version_UpToDate' => 'Din phpBB �r version och �r aktuell',
	'phpBB_Version_NotUpToDate' => 'Din phpBB �r version och �r inte aktuell',
	'ClickUpdate' => 'V�nligen klicka %sh�r%s f�r uppdatering!',
	'ClickReturn' => 'V�nligen klicka %sh�r%s f�r att �terg� till menyn!',

	'Clean_OldFiles_Explain' => 'Ta bort alla oanv�nda Icy Phoenix (filer som finns kvar p� din server fr�n �ldre versioner)',
	'ActionUndone' => 'V�nligen notera att denna �tg�rd inte kan �ngras. Kontrollera att du har en backup!!!',
	'ClickToClean' => 'V�nligen klicka p� l�nken nedan f�r att forts�tta',
	'FileDeletion_OK' => 'Filen raderad successfullt',
	'FileDeletion_ERROR' => 'Filen kan inte raderas',
	'FileDeletion_NF' => 'Filer kan inte hittas',
	'FilesDeletion_OK' => 'Filer raderade successfullt',
	'FilesDeletion_NO' => 'Filer ej raderade',
	'FilesDeletion_ERROR' => 'Filer kan ej bli automatiskt raderade',
	'FilesDeletion_NF' => 'Filer kan inte hittas',
	'FilesDeletion_None' => 'Ingen',
	'FileDeletion_Complete' => 'Filer st�dade komplett!',

	'Spoiler' => 'Spoiler',
	'Show' => 'Visa',
	'Hide' => 'G�m',
	'None' => 'Ingen',
	'Start' => 'Start',

	'Upgrade_Steps' => 'Uppgraderings Steg',
	'MakeFullBackup' => 'G�r en full backup (b�de filer och DB) och f�rvara den p� ett s�kert st�lle!',
	'Update_phpBB' => 'Uppdatera phpBB DB (om det beh�vs)',
	'Remove_BBCodeUID' => 'Behandla alla inl�gg: flytta BBKod UID, ers�tt text, flytta gamla BBKoder',
	'Merge_PostsTables' => 'Sammanfoga post tabeller',
	'Update_IcyPhoenix' => 'Uppdatera Icy Phoenix DB',
	'Upload_NewFiles' => 'Ladda upp alla nya filer',
	'Adjust_Config' => 'Uppdatera konstanter i config.php (fungerar bara om filerna �r skrivbara)',
	'Adjust_CMSPages' => 'Uppdatera konstanter i CMS sidor (fungerar bara om filerna �r skrivbara)',
	'MoveImagesAlbum' => 'Flytta album bilder (valfritt: bara om du vill anv�nda postade bilder i undermappar)',
	'MoveImages' => 'Flytta postade bilder (valfritt: bara om du vill anv�nda postade bilder i undermappar)',
	'Clean_OldFiles' => 'Rensa Gamla Filer',

	'ColorsLegend' => 'F�rg Legend',
	'ColorsLegendRed' => 'R�d: denna �tg�rd �r n�dv�ndig och m�ste utf�ras manuellt',
	'ColorsLegendOrange' => 'Orange: denna �tg�rd �r n�dv�ndig och skriptet kan g�ra det automatiskt (om kraven �r uppfyllda)',
	'ColorsLegendGray' => 'Gr�: denna �tg�rd �r inte n�dv�ndig och kan utf�ras automatiskt',
	'ColorsLegendBlue' => 'Bl�: denna �tg�rd �r valfri och kan g�ras automatiskt (kan �ven kr�va manuella redigeringar p� vissa filer)',
	'ColorsLegendGreen' => 'Gr�n: denna �tg�rd f�resl�s och kan utf�ras automatiskt (om kraven �r uppfyllda)',

	'FixBirthdays' => 'Fastst�lla F�delsedagar',
	'FixBirthdaysExplain' => 'Denna funktion g�r att du kan anpassa alla f�delsedagar f�r kompatibilitet med nya funktioner.',
	'FixingBirthdaysInProgress' => 'Fastst�llande av f�delsedagar p�g�r',
	'FixingBirthdaysInProgressRedirect' => 'Du kommer att omdirigeras automatiskt till n�sta steg inom tre sekunder',
	'FixingBirthdaysInProgressRedirectClick' => 'Om du inte automatiskt omdirigeras inom tre sekunder kan du klicka %sH�r%s',
	'FixingBirthdaysFrom' => 'F�delsedagar modifierar det h�r steget fr�n %s till %s',
	'FixingBirthdaysTotal' => '%s f�delsedagar av %s modifierade �n s� l�nge',
	'FixingBirthdaysModified' => ' f�delsedagar fastst�llda',
	'FixingBirthdaysComplete' => 'Fastst�llande av f�delsedagar komplett',
	'BirthdaysPerStep' => 'Antal f�delsedagar per steg',

	'FixConstantsInFiles' => 'Fastst�lla Konstanter',
	'FixConstantsInFilesExplain' => 'Fastst�lla alla filer med nya Icy Phoenix konstanter',
	'FixingInProgress' => 'Fastst�llande av filer p�g�r',
	'FixingComplete' => 'Fastst�llande av filer komplett',
	'ClickToFix' => 'V�nligen klicka p� en av l�nkarna nedan f�r att forts�tta',
	'FixAllFiles' => 'Fastst�lla alla filer (b�de CMS sidor och config.php)',
	'FixCMSPages' => 'Fastst�lla enbart CMS sidor',
	'Fixed' => 'Fastst�lld',
	'NotFixed' => 'Ej Fastst�lld',
	'FilesProcessed' => 'Filer bearbetade',

	'FixPosts' => 'Fastst�lla Poster',
	'FixPostsExplain' => 'Denna funktion g�r att du kan fastst�lla alla inl�gg i ditt forum. Du kan anv�nda denna funktionen till att: hitta och ers�tta vilken text som helst i dina poster, flytta alla BBKod UID, automatiskt justera adressen f�r inlagda bilder.',
	'FixingPostsInProgress' => 'Fastst�llande av poster p�g�r',
	'FixingPostsInProgressRedirect' => 'Du kommer att omdirigeras automatiskt till n�sta steg inom tre sekunder',
	'FixingPostsInProgressRedirectClick' => 'Om du inte automatiskt omdirigeras inom tre sekunder kan du klicka %sH�r%s',
	'FixingPostsFrom' => 'Poster modifierade detta steg fr�n %s till %s',
	'FixingPostsTotal' => '%s poster av %s modifierade �n s� l�nge',
	'FixingPostsModified' => ' poster fastst�llda',
	'FixingPostsComplete' => 'Fastst�llande av poster komplett',
	'SearchWhat' => 'S�k vad',
	'ReplaceWith' => 'Ers�tt med',
	'PostsPerStep' => 'Antal poster per steg',
	'StartFrom' => 'Startar fr�n post',
	'RemoveBBCodeUID' => 'Flytta BBKod UID (f�r den fr�n post tabellen)',
	'RemoveBBCodeUID_Guess' => 'F�rs�k att gissa och ta bort BBKod UID',
	'FixPostedImagesPaths' => 'Fastst�ll alla postade bilders s�kv�g (justera s�kv�gar f�r att �terspegla anv�ndarens undermappar)',

	'FixSignatures' => 'Fastst�lla Signaturer',
	'FixSignaturesExplain' => 'Denna funktion g�r att du kan fastst�lla alla anv�ndares signaturer. Du kan anv�nda denna funktionen till att: hitta och ers�tta text i signaturer, flytta alla BBKod UID, automatiskt justera adressen p� inlagda bilder.',
	'FixingSignaturesInProgress' => 'Fastst�llande av signaturer p�g�r',
	'FixingSignaturesFrom' => 'Signaturer modifierade detta steg fr�n %s till %s',
	'FixingSignaturesTotal' => '%s signaturer av %s modifierade �n s� l�nge',
	'FixingSignaturesModified' => ' signaturer fastst�llda',
	'FixingSignaturesComplete' => 'Fastst�llande av signaturer komplett',
	'SignaturesPerStep' => 'Antal signaturer per steg',
	'StartFromSignature' => 'Starta fr�n signaturen',

	'FixPics' => 'Fastst�lla Album Bilds S�kv�g',
	'FixPicsExplain' => 'Denna funktion kommer att flytta alla albumets bilder fr�n huvudmappen till anv�ndarens undermappar och kommer ocks� att uppdatera databasen med nya s�kv�gar',
	'FixingPicsInProgress' => 'Fastst�llande av bilder p�g�r',
	'FixingPicsInProgressRedirect' => 'Du kommer att omdirigeras automatiskt till n�sta steg inom tre sekunder',
	'FixingPicsInProgressRedirectClick' => 'Om du inte automatiskt omdirigeras inom tre sekunder kan du klicka %sH�r%s',
	'FixingPicsFrom' => 'Bilder modifierade detta steg fr�n %s till %s',
	'FixingPicsTotal' => '%s bilder av %s modifierade �n s� l�nge',
	'FixingPicsModified' => 'bilder fastst�llda',
	'FixingPicsComplete' => 'Fastst�llande av bilder komplett',
	'PicStartFrom' => 'Starta fr�n bild',
	'PicsPerStep' => 'Antal bilder per steg',

	'RenMovePics' => 'Byt Namn Och Flytta Postade Bilder',
	'RenMovePicsExplain' => 'Denna funktion kommer att byta namn och flytta alla postade bilder fr�n huvudmappen till anv�ndarens undermappar: du kommer sedan att beh�va uppdatera post tabellen med hj�lp av <i>Fix Posts</i> funktion f�r att justera alla s�kv�gar i posterna',
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
<b><i>V�rderade Bidragsgivare</i></b><br />
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