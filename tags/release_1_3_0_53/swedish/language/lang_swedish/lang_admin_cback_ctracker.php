<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin_cback_ctracker.php 96 2009-04-27 16:48:19Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Christian Knerr (cback) - (www.cback.de)
* Lopalong
*
*/

/**
* English Language File for the CBACK Cracker Tracker
*
* @author Christian Knerr (cback)
* @translator Marc Renninger (mc-dragon)
* @package ctracker
* @version 5.0.0
* @since 21.07.2006 - 17:26:28
* @copyright (c) 2006 www.cback.de
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
/*
* Language Strings used for the ACP Menu points
*/
	'ctracker_module_category' => 'CrackerTracker',
	'ctracker_module_1' => 'Checksum Scanner',
	'ctracker_module_2' => 'Credits',
	'ctracker_module_3' => 'Filscanner',
	'ctracker_module_4' => 'Globala Nyheter',
	'ctracker_module_5' => 'IP &amp; Agent Blocker',
	'ctracker_module_6' => 'Logg Manager',
	'ctracker_module_7' => 'Maintenance & Tester',
	'ctracker_module_8' => 'Eländig Användare',
	'ctracker_module_9' => 'Inställningar',
	'ctracker_module_10' => 'Recovery',
	'ctracker_module_11' => 'Footer',


/*
* Language Strings used in ACP Modules itself
*/
	'ctracker_wrong_module' => 'Okänt modul antal',
	'ctracker_img_descriptions' => 'Bild',
	'ctracker_set_catname1' => 'IP, Proxy & UserAgent Blocker',
	'ctracker_set_catname2' => 'Sök Skydds System',
	'ctracker_set_catname3' => 'Inloggnings Skydds System',
	'ctracker_set_catname4' => 'Automatisk Spam Upptäckt',
	'ctracker_set_catname5' => 'Registrerings Skydds System',
	'ctracker_set_catname6' => 'Kontrollera Lösenord',
	'ctracker_set_catname7' => 'Allmänna Säkerhets Funktioner',
	'ctracker_set_catname8' => 'Andra Inställningar',
	'ctracker_settings_head' => 'CrackerTracker Inställningar',
	'ctracker_settings_expl' => '<b>Anpassa alla Inställningar av CrackerTracker Security System.</b>',
	'ctracker_button_submit' => 'Spara Inställningar',
	'ctracker_button_reset' => 'Återställ',

	'ctracker_settings_m1' => 'Aktivera IP Blocker',
	'ctracker_settings_e1' => 'Aktivera eller Avaktivera IP, Proxy och UserAgent Blocker.',
	'ctracker_settings_m2' => 'IP Blocker Logg storlek',
	'ctracker_settings_e2' => 'Ange antal poster för loggfilen av IP blocker. Om antalet poster överskrider gränsen, kommer loggfilen automatiskt att raderas för att spara Webb utrymme.',
	'ctracker_settings_m3' => 'Aktivera Sök Skydd',
	'ctracker_settings_e3' => 'Aktivera eller inaktivera Sök Skydd System.',
	'ctracker_settings_m4' => 'Sök Tid för användare',
	'ctracker_settings_e4' => 'Om Sök skydd är aktiverat: Ställ väntetiden (i sekunder) för registrerade användare innan de kan söka en gång till. ',
	'ctracker_settings_m5' => 'Antal Sökningar för användare',
	'ctracker_settings_e5' => 'Ange antalet sökningar som registrerade användare kan göra under tiden som anges ovan. Om detta antal överskrids kommer ytterligare sökningar att blockeras under den tid som anges ovan för att minska serverns belastning.',
	'ctracker_settings_m6' => 'Sök Tid för gäster',
	'ctracker_settings_e6' => 'Sätt Tids perioden (i sekunder) gäster får vänta om Sök Skydds Systemet är aktiverat.',
	'ctracker_settings_m7' => 'Antal Sökningar för gäster',
	'ctracker_settings_e7' => 'Ställ in hur många sökningar i en angiven tidsperiod gäster får göra?. Om antalet överstiger gränsen kommer ytterligare sökningar att blockeras under den tid som anges ovan för att minska serverns belastning.',
	'ctracker_settings_m8' => 'Sätt på Inloggnings Skydd',
	'ctracker_settings_e8' => 'Aktivera eller Inaktivera Inloggnings Skydd System för CrackerTracker.',
	'ctracker_settings_m9' => 'Logg storlek för fel Inloggningar',
	'ctracker_settings_e9' => 'Sätt hur många felaktiga Inloggnings försök som ska sparas före de är automatiskt raderade för att spara Webb utrymme.',
	'ctracker_settings_m10' => 'Antal Inloggningar upp till Visuell Bekräftelse',
	'ctracker_settings_e10' => 'Sätt hur ofta en användare kan misslyckas med inloggningen innan skyddet av BruteForce Attacks är aktiverat och Visuell Bekräftelse är begärd.',
	'ctracker_settings_m11' => 'Inloggnings Historia',
	'ctracker_settings_e11' => 'Aktivera eller Inaktivera Inloggnings Historia för användare.',
	'ctracker_settings_m12' => 'Poster i Inloggnings Historia per användare',
	'ctracker_settings_e12' => 'Sätt hur många successfulla Inloggningar från varje användare som ska sparas i Inloggnings Historia. Varje användare har ett alternativ att kontrollera tiden och IP adresser för deras Inloggning.',
	'ctracker_settings_m13' => 'Inloggnings IP Funktion',
	'ctracker_settings_e13' => '<b>Aktivera eller Inaktivera Inloggnings IP System:</b> IP Skydds Systemet kontrollerar efter ändringar i IP adresser. Varje användare har som alternativ att aktivera eller avaktivera System på Inloggnings Säkerhets sidan. Användaren kommer att bli informerad om deras IP Range har blivit modifierad sedan deras senaste Inloggning, och/eller om någon har loggat på från en annan plats.',
	'ctracker_settings_m14' => 'Spammer Upptäckt',
	'ctracker_settings_e14' => 'Sätt mode för Automatisk Spammer Upptäckt.',
	'ctracker_settings_m15' => 'Spammer Tids Period',
	'ctracker_settings_e15' => 'Sätt tids perioden (i sekunder) för när en användares post kommer att räknas för Spammer upptäckt.',
	'ctracker_settings_m16' => 'Spammer Post antal',
	'ctracker_settings_e16' => 'Sätt det tillåtna antal av poster för en viss tidsperiod. Om detta antal överskrids kommer användaren att identifieras som Spammare.',
	'ctracker_settings_m17' => 'Spammer Loggstorlek',
	'ctracker_settings_e17' => 'Sätt Logg storlek i (Kb) när användare identifieras som Spammare och blir inspelad.',
	'ctracker_settings_m18' => 'Registrerings Skydd',
	'ctracker_settings_e18' => 'Aktivera eller Inaktivera Registrerings Skydd.',
	'ctracker_settings_m19' => 'Block Tid för Registrering',
	'ctracker_settings_e19' => 'Sätt tiden (i sekunder) som är tillåten mellan två registreringar.',

	'ctracker_settings_m21' => 'IP Bevakare',
	'ctracker_settings_e21' => 'Genom att aktivera denna funktion kan en användare med samma IP-adress bara registrera en gång tills någon har anmält sig från en annan IP-adress.',
	'ctracker_settings_m22' => 'Lösenord Giltighet',
	'ctracker_settings_e22' => 'Aktivera eller Inaktivera Kontroll av Giltigheten på Lösenordet för alla användare.',
	'ctracker_settings_m23' => 'Giltighet av Lösenord i dagar',
	'ctracker_settings_e23' => 'Sätt hur länge (i dagar) Användar lösenord kommer att vara giltigt innan användaren meddelas att lösenordet bör ändras.',
	'ctracker_settings_m24' => 'Lösenord Komplexitets Kontroll',
	'ctracker_settings_e24' => 'Aktivera denna funktion för att kontrollera komplexitet i Användares lösenord.',
	'ctracker_settings_m25' => 'Lösenord Komplexitets Mode',
	'ctracker_settings_e25' => 'Sätt erforderliga Tecken i lösenordet.',
	'ctracker_settings_m26' => 'Lösenord Minsta längd',
	'ctracker_settings_e26' => 'Sätt det minsta antalet bokstäver i ett lösenord.',
	'ctracker_settings_m27' => 'Lösenord Återställ Checker',
	'ctracker_settings_e27' => 'Aktivering av detta gör att du kan återställa ett lösenord en gång under en viss tid (för användare). Detta hindrar angripare från att använda den här funktionen för att spamma användare genom att Återställa post.',
	'ctracker_settings_m28' => 'Lösenord Nollställ tidperiod',
	'ctracker_settings_e28' => 'Tids period (i minuter) som användare kan återställa sina lösenord.',
	'ctracker_settings_m29' => 'E-post Övervakning',
	'ctracker_settings_e29' => 'Aktivera eller Inaktivera denna funktion där användare bara kan använda det interna Forumets Mail funktion en gång på viss tid. Detta förhindrar spamming.',
	'ctracker_settings_m30' => 'E-post Span I Tid',
	'ctracker_settings_e30' => 'Tids period (i minuter) mellan att två E-Post användare kan skicka genom att använda den interna Mail Funktionen.',
	'ctracker_settings_m31' => 'Auto Återhämtning',
	'ctracker_settings_e31' => 'Aktivera eller Inaktivera funktionen för att spara inställningarna i Forumet automatiskt. Om detta inte fungerar kan du använda sista kända kör konfigurationen.',
	'ctracker_settings_m32' => 'Visuell Bekräftelse för Gäster',
	'ctracker_settings_e32' => 'Genom att aktivera denna funktion, måste Gäster ange en visuell kod innan de kan lägga in några nya poster. Detta skyddar automatiskt mot Spam-bots.',
	'ctracker_settings_m33' => 'Disponibel-Mailservice Skydd',
	'ctracker_settings_e33' => 'cTracker har en intern lista över så kallade Disponibel-Mailservices. Genom att aktivera denna funktion kan användare med sådana e-postadresser inte registrera.',
	'ctracker_settings_m34' => 'Identifiering av felaktig konfiguration',
	'ctracker_settings_e34' => 'Genom att aktivera denna funktion kontroller CrackerTracker de allmänna inställningarna för Icy Phoenix giltighetsvillkor. Så du kan inte skada din webbplats genom felkonfigurering!',
	'ctracker_settings_m35' => 'Spammer Detektion Boost',
	'ctracker_settings_e35' => 'Genom att aktivera denna funktion kommer cTracker att titta efter Spammers eller Spam-Posts. De flesta av dem kommer att bli blockerade.',
	'ctracker_settings_m36' => 'Spammer Nyckelord Kontroll',
	'ctracker_settings_e36' => 'Genom att aktivera "Spammer Detektion Boost", kommer nyckelord i Profilen och/eller Poster att bli scannade för identifiering av Spammers.<br /><b>Vänligen Notera:</b> Det finns en möjlighet att upptäcka falska uppgifter från nya användare. Vänligen kontrollera loggfilen för Spammer detektion.',


/*
* Credits page in ACP
*/
	'ctracker_credits_head' => 'Beröm',
	'ctracker_credits_subhead' => 'Beröm av CBACK CrackerTracker. Här ger vi dig mer information om säkerhet och detta är också ett sätt att säga "Tack".',
	'ctracker_credits_donate' => 'Donera',
	'ctracker_credits_donate_expl' => 'Gillar du <b>CBACK CrackerTracker Professional</b>? Då vore det trevligt om du donerade till CBACK Project genom att använda en PayPal Donering för att bidra till att minska kostnaderna för servern. Detta kommer att hjälpa oss att vidareutveckla och att gå vidare med våra ideella projekt; Så att vi kommer att kunna ge ut CrackerTracker gratis i framtiden. <br /><br />Tack så mycket för ert stöd.',
	'ctracker_credits_credits' => 'Beröm',
	'ctracker_credits_credits_1' => 'Ide & Genomförande',
	'ctracker_credits_credits_2' => 'Författare och Support',
	'ctracker_credits_credits_3' => 'Ikoner',
	'ctracker_credits_credits_4' => 'Officiell Nerladdnings sida',
	'ctracker_credits_moddownload' => 'CrackerTracker MOD Download',
	'ctracker_credits_thanks' => 'Tack till...',
	'ctracker_credits_thanks_text' => 'Jag vill säga ett stort tack till följande personer:',
	'ctracker_credits_thanks_to' => '<b>Ideer, Säkerhets tester och Proofreading</b><br />Tekin Birdüzen<br /><i>(<a href="http://www.cybercosmonaut.de" target="_blank">cYbercOsmOnauT</a>)</i><br /><br /><br /><br /><b>Ideer:</b><br />Bernhard Jaud<br /><i>(GenuineParts)</i><br /><br /><br /><br /><b>Översättare (English)</b><br />Marc Renninger<br /><i>(mc-dragon)</i><br /><br /><br /><br /><b>Korrekturläsare (English)</b><br />George <br />Sommerset<br /><i>(<a href="http://www.englisch-hilfen.de" target="_blank">www.englisch-hilfen.de</a>)</i><br /><br /><br /><br /><b>Beta Tester</b><br />Tack till alla deltagare i Beta-Tester<br />till CBACK Premium användare och givetvis till<br />våra kollegor på "Mod-Scene" som hjälpte till med Beta Tester och korrekturläsning, också.</i>',
	'ctracker_credits_info' => 'Mer Säkerhet?',
	'ctracker_credits_info_text' => 'Det perfekta tillägget för Icy Phoenix och CrackerTracker: För optimal säkerhet rekommenderar vi Mod <b>Avancerad Visuell Bekräftelse</b> av AmigaLink. Detta MOD expanderar CAPTCHA inslag i phpBB och CrackerTracker Professional med ett mer komplext system som inte kan läsas av Bots. Detta MOD kan du ladda ner från <a href="http://www.amigalink.de" target="_blank">www.AmigaLink.de</a>.<br /><br /><br /><br />Vi föreslår att du också integrerar detta MOD i ditt Forum för ytterligare säkerhet.',


/*
* File Hash Check in ACP
*/
	'ctracker_fchk_head' => 'CrackerTracker Kontrollsumma Scanner',
	'ctracker_fchk_subhead' => '<b>Skapa en kontrollsumme av varje PHP fil i ditt Forum.</b><br /> Klicka på "Skapa eller uppgradera Checksumma". Efteråt har du möjlighet att med \ "Verifiera Fil ändringar \" för att avgöra om de filer som har ändrats sedan förra gången producerar kontrollsummor. Om filerna har ändrats utan din kännedom kan det vara ett tecken på att någon hade fått tillgång till din forum webbplats. Var uppmärksam på den senaste gången som du kontrollerade så att en obehörig person inte aktiverat kontrollsumme scannern!<br /><br /><b>Vänligen Notera:</b> Inte alla servrar stöder den här funktionen. Ibland kan det komma en Script Timeout om servern tar för lång tid på sig att producera Icy Phoenix fillistan. Andra servrar stoppar förfarandet eftersom det är ganska prestanda intensivt.<br /><br />&raquo; Den sista förverkligande av fil kontrollen totalt ägde rum <b>%s</b>.',
	'ctracker_fchk_funcheader' => 'Funktioner',
	'ctracker_fchk_tableheader' => 'System Output',
	'ctracker_fchk_option1' => 'Skapa eller uppgradera Kontrollsumma',
	'ctracker_fchk_option2' => 'Verifiera Fil ändringar',
	'ctracker_fchk_select_action' => 'Vänligen Välj en åtgärd!',
	'ctracker_fchk_update_action' => 'Kontrollsumman var uppdaterad!',
	'ctracker_fchk_tablehead1' => 'Fil sökväg',
	'ctracker_fchk_tablehead2' => 'State',
	'ctracker_file_unchanged' => 'OFÖRÄNDRAD',
	'ctracker_file_changed' => 'MODIFIERAD',
	'ctracker_file_deleted' => 'RADERAD',


/*
* File Safety Scanner in ACP
*/
	'ctracker_fscan_complete' => 'The File scan was executed successfully. Vänligen klicka på "Visa Resultat" för att se resultaten. Du kan korrigera filerna.<br /><br /><br /><u>Vänligen Notera:</u><br /><br />Ibland kan det hända att CrackerTracker upptäcker en fil som osäker. Detta kan inträffa när PHP-filer kan vara mycket olika, och ibland vill en utvecklare att koden skall kunna skrivas utifrån. I detta fall - och endast om du är absolut säker på att du kan berätta för CrackerTracker att filen är säker. För att göra detta lägga till i filen i början "EFTER"? Php - följande kod: <br /><br /><i>// CTracker_Ignore: File Checked By Human</i><br /><br />Om du är osäker på vad du ska göra kan du också besöka <a href="http://www.community.cback.de" target="_blank">CBACK Community</a> för mer detaljerade instruktioner.',
	'ctracker_fscan_unchecked' => 'EJ KONTROLLERAD',
	'ctracker_fscan_ok' => 'SÄKER',
	'ctracker_fscan_prob_1' => 'extension.inc ej / eller inkluderad för sent',
	'ctracker_fscan_prob_2' => 'IP_ROOT_PATH får inte initieras korrekt',
	'ctracker_fscan_prob_3' => 'common.php / pagestart.php kan inte har inkluderats eller inkluderats för sent.',
	'ctracker_fscan_prob_4' => 'Kod i filen är möjligen körbar bortom Icy Phoenix',
	'ctracker_fscan_prob_5' => 'extension.inc saknas och / eller IP_ROOT_PATH och / eller konstant ej hittad',
	'ctracker_fscan_prob_def' => 'Ett odefinierat fall inträffade under scanning',
	'ctracker_fscan_important' => 'Vänligen Läs Detta!',
	'ctracker_fscan_sel_action' => 'För att starta kontrollen av alla filer vänligen klicka på "Starta Filkontroll". När detta är klart klicka på "Visa resultat" för att visa resultatet av kontrollen. Denna lista kan hämtas som helst med hjälp av ACP tills en ny kontroll startas.<br /><br />Av tekniska skäl är det inte möjligt att ge <u>entydig</u> och <u>trofast</u> information om säkerheten av ett PHP Script. Så var inte alltför säker. Det kan hända att skannern klassificerar en säker fil som osäket, och vice versa. PHP koden är komplicerad - så det kan inte vara ett hundra procent garanterat så att där inte kan vara osäkra skript längre. ;-)<br /><br />Denna scanner är specialiserad för att upptäcka säkerhetshål i inkluderade filer. Med denna skanner kan du lätt hitta dessa risker och rätta till dem.<br /><br />För mer detaljerad instruktion vänligen besök CBACK Community!<br /><br />',
	'ctracker_fscan_head' => 'CBACK CrackerTracker Säkerhets Scanner',
	'ctracker_fscan_subhead' => 'Säkerhets scannern kontrollerar alla PHP filer i ditt Forum för att försöka att hitta säkerhethål som skulle kunna utnyttjas av Worms. Dessa hål kan nås från utsidan Icy Phoenix genom att inte ha skydd av forumets säkerhet, eller CrackerTracker System. Denna scan ger en möjlighet att rätta till dessa filer.<br /><br /><b>Vänligen notera:</b> Algoritmen för denna skanner är bäst optimalt men inte alla servrar stödjer denna funktion! Med mycket stora Forum kan det hända att detta prestandabaserade intensiva Scan-systemet överskrider PHP Verkställighetstiden tid och misslyckas.<br /><br /><b><em>Vänligen beakta detta om det misslyckas.</em></b><br /><br />&raquo; Den sista kontrollen ägde rum den <b>%s</b>.',
	'ctracker_fscan_option1' => 'Starta Filkontroll',
	'ctracker_fscan_option2' => 'Visa Resultat',


/*
* Global message in ACP
*/
	'ctracker_glob_msg_head' => 'Globalt Meddelande',
	'ctracker_glob_msg_subhead' => '<b>Lämna ett övergripande meddelande till alla användare.</b><br /> Detta meddelande kommer att ses av användaren vid dennes nästa Inloggning. Du har möjlighet att antingen hänvisa till en tråd eller skriva din egen text.<br /><b>Notera:</b> Det finns en införande text gräns på (255 tecken).',
	'ctracker_glob_msg_entry' => 'Ställ globala meddelande',
	'ctracker_glob_msg_submit' => 'Infoga',
	'ctracker_glob_msg_reset' => 'Avbryt Meddelande',
	'ctracker_glob_msg_type' => 'Typ av globalt meddelande',
	'ctracker_glob_type_1' => 'Text',
	'ctracker_glob_type_2' => 'Länk',
	'ctracker_glob_msg_txt' => 'Text av globalt meddelande',
	'ctracker_glob_msg_link' => 'Länk Destination i meddelandet',
	'ctracker_glob_msg_reset' => 'Avbryt aktuellt meddelande',
	'ctracker_glob_res_txt' => 'När du klickar på "Avbryt aktuellt meddelande" kommer vilket som helst aktuellt meddelandet avbrytas.',
	'ctracker_glob_msg_saved' => 'Det globala meddelandet var successfullt sparta.<br /><br />Klicka <a href="%s">HÄR</a> för att gå tillbaka till CrackerTracker Management.',
	'ctracker_glob_msg_reset_ok' => 'Det globala meddelandet var raderat från användar tabellen. Hela meddelandet kommer inte att visas längre.<br /><br />Klicka <a href="%s">HÄR</a> för att gå tillbaka till CrackerTracker Management.',

/*
* IP&Agent Blocker
*/
	'ctracker_ipb_delete' => 'Ta bort post',
	'ctracker_ipb_blocklist' => 'Blockera list poster',
	'ctracker_ipb_head' => 'Proxy, IP & UserAgent Blocker',
	'ctracker_ipb_description' => '<b>Hantera blockeringslistan för cTracker Proxy, IP och UserAgent Blocker.</b><br /> Du kan ta bort befintliga poster och / eller lägga till nya. Med en ny post har du möjlighet att använda (*) för att ange valfri kombination av filter i listan. Till exempel: lwp* låser lwp-1 liksom lwp-simple etc. eller 100.*.*.* låser alla IP-Adresser som börjar med 100. .<br /><br /><b>FÖRSIKTIGHET</b> Var noga med att du inte låser din egen UserAgent och IP-adress. Annars är du ute ur ditt Forum!',


/*
* Log Manager
*/
	'ctracker_log_manager_title' => 'Loggfil Manager',
	'ctracker_log_manager_subtitle' => 'Visa eller radera alla Loggfiler från CrackerTracker.',
	'ctracker_log_manager_overview' => 'Logg Manager Översikt',
	'ctracker_log_manager_blocked' => 'CrackerTracker har blockerat <b>%s</b> attacker hittils.',
	'ctracker_log_manager_overview' => 'Loggfil Översikt',
	'ctracker_log_manager_head1' => 'Loggnamn',
	'ctracker_log_manager_head2' => 'Antal poster',
	'ctracker_log_manager_head3' => 'Funktioner',
	'ctracker_log_manager_name2' => 'Worm & Exploit Skydd',
	'ctracker_log_manager_name3' => 'IP, Proxy & UserAgent Blocker',
	'ctracker_log_manager_name4' => 'Felaktiga Inloggningar',
	'ctracker_log_manager_name5' => 'Blockerade Spammers',
	'ctracker_log_manager_name6' => 'Debug Poster',
	'ctracker_log_manager_view' => 'GRANSKA',
	'ctracker_log_manager_delete' => 'RADERA',
	'ctracker_log_manager_delete_all' => 'Radera Alla Loggfiler',
	'ctracker_log_manager_deleted' => 'Loggfilen har blivit raderad successfullt!',
	'ctracker_log_manager_all_deleted' => 'Alla logg filer har blivit raderade successfullt!',
	'ctracker_log_manager_showheader1' => 'Det finns <b>en</b> post i denna logg fil. Klicka <b><a href="%s">HÄR</a></b> för att gå tillbaka till Loggfil översikten.',
	'ctracker_log_manager_showheader' => 'Det finns <b>%s</b> poster i denna logg fil.<br />Klicka<b><a href="%s">HÄR</a></b> för att gå tillbaka till Loggfil översikten.',
	'ctracker_log_manager_showlog' => 'Granska Loggfil',
	'ctracker_log_manager_cell_1' => 'Datum / Tid',
	'ctracker_log_manager_cell_2a' => 'Överklagande',
	'ctracker_log_manager_cell_2b' => 'Användarnamn',
	'ctracker_log_manager_cell_3' => 'Hänvisning',
	'ctracker_log_manager_cell_4' => 'AnvändarAgent',
	'ctracker_log_manager_cell_5' => 'IP Adress',
	'ctracker_log_manager_cell_6' => 'Remote Host',
	'ctracker_log_manager_sysmsg' => 'Senaste rensning av Loggfilen var <b>%s</b>.',

/*
* Footer configuration
*/
	'ctracker_footer_head' => 'Sidfot Management',
	'ctracker_footer_subhead' => 'Välj vilken sidfot CrackerTracker ska visa i ditt Forum. Vänligen ändra inte sidfoten och länken till www.cback.de!',
	'ctracker_select_footer' => 'Välj Sidfot',
	'ctracker_footer_saveit' => 'Acceptera Sidfots Layout',
	'ctracker_footer_done' => 'Ändringen på Sidfoten var sparad successfullt!',

/*
* Maintenance Module in ACP
*/
	'ctracker_ma_unknown' => '<span class="text_orange">OKÄND</span>',
	'ctracker_ma_secure' => '<span class="text_green">SÄKER</span>',
	'ctracker_ma_warning' => '<span class="text_red">VARNING</span>',
	'ctracker_ma_active' => '<span class="text_green">AKTIV</span>',
	'ctracker_ma_inactive' => '<span class="text_red">INAKTIV</span>',
	'ctracker_ma_ca' => '<span class="text_green">OK</span>',
	'ctracker_ma_ci' => '<span class="text_red">INTE SATT</span>',
	'ctracker_ma_head' => 'Underhåll och System kontroll',
	'ctracker_ma_subhead' => 'Systemet kontrollerar automatiskt granskning av cTracker säkerhets moduler för funktioner, och visar tips om hur du optimerar ditt system.',
	'ctracker_ma_systest' => 'Automatisk System Test',
	'ctracker_ma_sectest' => 'Säkerhets Test',
	'ctracker_ma_maint' => 'Service Funktion',
	'ctracker_ma_name_1' => 'Worm & Exploit skydd System',
	'ctracker_ma_name_2' => 'Variabel Kontroll Enhet',
	'ctracker_ma_name_3' => 'IP, Proxy & AnvändarAgent Skydd Enhet',
	'ctracker_ma_name_4' => 'Worm HEURISTIK Definitioner Sats - Antal Definitioner: <b>%s</b>',
	'ctracker_ma_syshead_1' => 'Säkerhets Modul',
	'ctracker_ma_syshead_2' => 'Status',
	'ctracker_ma_seccheck_1' => 'Checkpoint',
	'ctracker_ma_seccheck_2' => 'Version / Status',
	'ctracker_ma_seccheck_3' => 'Referens',
	'ctracker_ma_seccheck_4' => 'Status',
	'ctracker_ma_scheck_1' => 'PHP Version (<a href="http://www.php.net" target="_blank">Besök Webbsida</a>)',
	'ctracker_ma_scheck_2' => '&raquo; PHP SAFE MODE',
	'ctracker_ma_scheck_3' => '&raquo; PHP GLOBALS',
	'ctracker_ma_scheck_4' => 'Icy Phoenix Version (<a href="http://www.icyphoenix.com" target="_blank">Besök Webbsida</a>)',
	'ctracker_ma_scheck_4a' => '&raquo; Visuell Bekräftelse',
	'ctracker_ma_scheck_4b' => '&raquo; Konto Aktivering',
	'ctracker_ma_scheck_5' => 'CBACK CrackerTracker (<a href="http://www.cback.de" target="_blank">Besök Webbsida</a>)',
	'ctracker_ma_chmod' => '<b>CHMOD777 Status:</b> ',
	'ctracker_ma_desc_link' => 'EXECUTE NU',
	'ctracker_ma_desc1' => '<b>Rensa IP, Proxy & AnvändarAgent Tabell</b><br />Radera <u>alla</u> poster från IP, Proxy & AnvändarAgent Tabell.',
	'ctracker_ma_desc2' => '<b>Factory inställning: IP, Proxy & AnvändarAgent Blocker</b><br />Återställ standard status av undersökningsperioden, Proxy & användaragent databastabellerna. Dina filter försvinner dock!',
	'ctracker_ma_desc3' => '<b>Radera Login History</b><br />Radera alla poster från Inloggnings Historian, oberoende av användaren eller justera antalet sparningar per användare.',
	'ctracker_ma_desc4' => '<b>Rensa Fil-Hash kontrolltabell</b><br />Radera alla sparade poster från Fil-Hashcheck tabellen.',
	'ctracker_ma_desc5' => '<b>Rensa Säkerhets scanner Tabell</b><br />Radera alla resultat som var lagrade under fil säkerhets undersökningen av data basen.',
	'ctracker_ma_succ_main' => 'Processen utfördes successfullt!',
	'ctracker_ma_err_main' => 'Processen utfördes unsuccessfullt!',


/*
* Miserable User Module in ACP...
*/
	'ctracker_mu_subhead' => 'En användare taggad som "Eländig användare" kommer enbart att ha sina poster tillgängliga för sig själv och till Admin för forumet. Detta förutsätter att de snart kommer att tröttna på att inte få något svar på sina trådar och inlägg och lämnar forumet.<br /><br /><b>Notera:</b> Denna funktion gör bara att inläggen försvinner från en tråd. Användning av "Citera" eller "Sök" kommer att avslöja de dolda posterna"!',

	'ctracker_mu_select' => 'Markera användare som Eländig Användare',
	'ctracker_mu_find' => 'Leta efter Användarnamn',
	'ctracker_mu_send' => 'Ange Användarnamn',
	'ctracker_mu_entr' => 'Markerade Användarnamn',
	'ctracker_mu_uname' => 'Angivna Användarnamn',
	'ctracker_mu_remove' => 'Radera Poster',
	'ctracker_mu_no_defined' => 'Det finns inga användare markerade som "Eländig Användare" just nu.',


/*
* Recovery feature in ACP
*/
	'ctracker_rec_head' => 'System Återhämtning',
	'ctracker_rec_subhead' => 'Säkerhets kopiera Konfigurations Tabellen från ditt Forum eller kan du gå till den senaste körda konfigurationen. Om du har aktiverat denna funktion i de allmänna inställningarna av CrackerTracker, då blir den säkerhets kopierad varje gång du ändrar Allmänna Inställningar. (VARNING! Det är <b>EJ</b> en Backup av hela den kompletta databasen!)<br /><br />När du inte är i ACP efter att du har ändrat inställningar, kan du aktivera den sista körda konfigurationen med hjälp av Emergency Console i CrackerTracker, också. Vänligen läs fil kommentarerna i <i>ctracker/emergency.php</i> för mer instruktion av Forum konfigurationer i en nödsituation. Vänligen notera, att denna fil måste vara aktiverad innan du använder den.<br /><br /><b>VARNING!</b> Denna funktion skall endast användas när det finns ett allvarligt problem!',
	'ctracker_rec_last_saved' => 'Senaste Backup på Konfigurations Tabellen: <b>%s</b>',
	'ctracker_rec_never_saved' => 'Konfigurations Tabellen har ej blivit säkerhets kopierad än!',
	'ctracker_rec_backup' => '<span class="gen">Backup Konfigurations Tabellen</span>',
	'ctracker_rec_restore' => '<span class="gen">Återskapa den senaste körda Konfigurations Tabellen</span>',
	'ctracker_rec_succ' => '<span class="gen">Databas processen har blivit utförd successfull.</span>',
	'ctracker_rec_pab' => '<span class="gen">Återhämtning är ej tillgängligt före du har gjort en successfult Backup!</span>',
	)
);
?>