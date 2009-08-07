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
	'ctracker_module_8' => 'El�ndig Anv�ndare',
	'ctracker_module_9' => 'Inst�llningar',
	'ctracker_module_10' => 'Recovery',
	'ctracker_module_11' => 'Footer',


/*
* Language Strings used in ACP Modules itself
*/
	'ctracker_wrong_module' => 'Ok�nt modul antal',
	'ctracker_img_descriptions' => 'Bild',
	'ctracker_set_catname1' => 'IP, Proxy & UserAgent Blocker',
	'ctracker_set_catname2' => 'S�k Skydds System',
	'ctracker_set_catname3' => 'Inloggnings Skydds System',
	'ctracker_set_catname4' => 'Automatisk Spam Uppt�ckt',
	'ctracker_set_catname5' => 'Registrerings Skydds System',
	'ctracker_set_catname6' => 'Kontrollera L�senord',
	'ctracker_set_catname7' => 'Allm�nna S�kerhets Funktioner',
	'ctracker_set_catname8' => 'Andra Inst�llningar',
	'ctracker_settings_head' => 'CrackerTracker Inst�llningar',
	'ctracker_settings_expl' => '<b>Anpassa alla Inst�llningar av CrackerTracker Security System.</b>',
	'ctracker_button_submit' => 'Spara Inst�llningar',
	'ctracker_button_reset' => '�terst�ll',

	'ctracker_settings_m1' => 'Aktivera IP Blocker',
	'ctracker_settings_e1' => 'Aktivera eller Avaktivera IP, Proxy och UserAgent Blocker.',
	'ctracker_settings_m2' => 'IP Blocker Logg storlek',
	'ctracker_settings_e2' => 'Ange antal poster f�r loggfilen av IP blocker. Om antalet poster �verskrider gr�nsen, kommer loggfilen automatiskt att raderas f�r att spara Webb utrymme.',
	'ctracker_settings_m3' => 'Aktivera S�k Skydd',
	'ctracker_settings_e3' => 'Aktivera eller inaktivera S�k Skydd System.',
	'ctracker_settings_m4' => 'S�k Tid f�r anv�ndare',
	'ctracker_settings_e4' => 'Om S�k skydd �r aktiverat: St�ll v�ntetiden (i sekunder) f�r registrerade anv�ndare innan de kan s�ka en g�ng till. ',
	'ctracker_settings_m5' => 'Antal S�kningar f�r anv�ndare',
	'ctracker_settings_e5' => 'Ange antalet s�kningar som registrerade anv�ndare kan g�ra under tiden som anges ovan. Om detta antal �verskrids kommer ytterligare s�kningar att blockeras under den tid som anges ovan f�r att minska serverns belastning.',
	'ctracker_settings_m6' => 'S�k Tid f�r g�ster',
	'ctracker_settings_e6' => 'S�tt Tids perioden (i sekunder) g�ster f�r v�nta om S�k Skydds Systemet �r aktiverat.',
	'ctracker_settings_m7' => 'Antal S�kningar f�r g�ster',
	'ctracker_settings_e7' => 'St�ll in hur m�nga s�kningar i en angiven tidsperiod g�ster f�r g�ra?. Om antalet �verstiger gr�nsen kommer ytterligare s�kningar att blockeras under den tid som anges ovan f�r att minska serverns belastning.',
	'ctracker_settings_m8' => 'S�tt p� Inloggnings Skydd',
	'ctracker_settings_e8' => 'Aktivera eller Inaktivera Inloggnings Skydd System f�r CrackerTracker.',
	'ctracker_settings_m9' => 'Logg storlek f�r fel Inloggningar',
	'ctracker_settings_e9' => 'S�tt hur m�nga felaktiga Inloggnings f�rs�k som ska sparas f�re de �r automatiskt raderade f�r att spara Webb utrymme.',
	'ctracker_settings_m10' => 'Antal Inloggningar upp till Visuell Bekr�ftelse',
	'ctracker_settings_e10' => 'S�tt hur ofta en anv�ndare kan misslyckas med inloggningen innan skyddet av BruteForce Attacks �r aktiverat och Visuell Bekr�ftelse �r beg�rd.',
	'ctracker_settings_m11' => 'Inloggnings Historia',
	'ctracker_settings_e11' => 'Aktivera eller Inaktivera Inloggnings Historia f�r anv�ndare.',
	'ctracker_settings_m12' => 'Poster i Inloggnings Historia per anv�ndare',
	'ctracker_settings_e12' => 'S�tt hur m�nga successfulla Inloggningar fr�n varje anv�ndare som ska sparas i Inloggnings Historia. Varje anv�ndare har ett alternativ att kontrollera tiden och IP adresser f�r deras Inloggning.',
	'ctracker_settings_m13' => 'Inloggnings IP Funktion',
	'ctracker_settings_e13' => '<b>Aktivera eller Inaktivera Inloggnings IP System:</b> IP Skydds Systemet kontrollerar efter �ndringar i IP adresser. Varje anv�ndare har som alternativ att aktivera eller avaktivera System p� Inloggnings S�kerhets sidan. Anv�ndaren kommer att bli informerad om deras IP Range har blivit modifierad sedan deras senaste Inloggning, och/eller om n�gon har loggat p� fr�n en annan plats.',
	'ctracker_settings_m14' => 'Spammer Uppt�ckt',
	'ctracker_settings_e14' => 'S�tt mode f�r Automatisk Spammer Uppt�ckt.',
	'ctracker_settings_m15' => 'Spammer Tids Period',
	'ctracker_settings_e15' => 'S�tt tids perioden (i sekunder) f�r n�r en anv�ndares post kommer att r�knas f�r Spammer uppt�ckt.',
	'ctracker_settings_m16' => 'Spammer Post antal',
	'ctracker_settings_e16' => 'S�tt det till�tna antal av poster f�r en viss tidsperiod. Om detta antal �verskrids kommer anv�ndaren att identifieras som Spammare.',
	'ctracker_settings_m17' => 'Spammer Loggstorlek',
	'ctracker_settings_e17' => 'S�tt Logg storlek i (Kb) n�r anv�ndare identifieras som Spammare och blir inspelad.',
	'ctracker_settings_m18' => 'Registrerings Skydd',
	'ctracker_settings_e18' => 'Aktivera eller Inaktivera Registrerings Skydd.',
	'ctracker_settings_m19' => 'Block Tid f�r Registrering',
	'ctracker_settings_e19' => 'S�tt tiden (i sekunder) som �r till�ten mellan tv� registreringar.',

	'ctracker_settings_m21' => 'IP Bevakare',
	'ctracker_settings_e21' => 'Genom att aktivera denna funktion kan en anv�ndare med samma IP-adress bara registrera en g�ng tills n�gon har anm�lt sig fr�n en annan IP-adress.',
	'ctracker_settings_m22' => 'L�senord Giltighet',
	'ctracker_settings_e22' => 'Aktivera eller Inaktivera Kontroll av Giltigheten p� L�senordet f�r alla anv�ndare.',
	'ctracker_settings_m23' => 'Giltighet av L�senord i dagar',
	'ctracker_settings_e23' => 'S�tt hur l�nge (i dagar) Anv�ndar l�senord kommer att vara giltigt innan anv�ndaren meddelas att l�senordet b�r �ndras.',
	'ctracker_settings_m24' => 'L�senord Komplexitets Kontroll',
	'ctracker_settings_e24' => 'Aktivera denna funktion f�r att kontrollera komplexitet i Anv�ndares l�senord.',
	'ctracker_settings_m25' => 'L�senord Komplexitets Mode',
	'ctracker_settings_e25' => 'S�tt erforderliga Tecken i l�senordet.',
	'ctracker_settings_m26' => 'L�senord Minsta l�ngd',
	'ctracker_settings_e26' => 'S�tt det minsta antalet bokst�ver i ett l�senord.',
	'ctracker_settings_m27' => 'L�senord �terst�ll Checker',
	'ctracker_settings_e27' => 'Aktivering av detta g�r att du kan �terst�lla ett l�senord en g�ng under en viss tid (f�r anv�ndare). Detta hindrar angripare fr�n att anv�nda den h�r funktionen f�r att spamma anv�ndare genom att �terst�lla post.',
	'ctracker_settings_m28' => 'L�senord Nollst�ll tidperiod',
	'ctracker_settings_e28' => 'Tids period (i minuter) som anv�ndare kan �terst�lla sina l�senord.',
	'ctracker_settings_m29' => 'E-post �vervakning',
	'ctracker_settings_e29' => 'Aktivera eller Inaktivera denna funktion d�r anv�ndare bara kan anv�nda det interna Forumets Mail funktion en g�ng p� viss tid. Detta f�rhindrar spamming.',
	'ctracker_settings_m30' => 'E-post Span I Tid',
	'ctracker_settings_e30' => 'Tids period (i minuter) mellan att tv� E-Post anv�ndare kan skicka genom att anv�nda den interna Mail Funktionen.',
	'ctracker_settings_m31' => 'Auto �terh�mtning',
	'ctracker_settings_e31' => 'Aktivera eller Inaktivera funktionen f�r att spara inst�llningarna i Forumet automatiskt. Om detta inte fungerar kan du anv�nda sista k�nda k�r konfigurationen.',
	'ctracker_settings_m32' => 'Visuell Bekr�ftelse f�r G�ster',
	'ctracker_settings_e32' => 'Genom att aktivera denna funktion, m�ste G�ster ange en visuell kod innan de kan l�gga in n�gra nya poster. Detta skyddar automatiskt mot Spam-bots.',
	'ctracker_settings_m33' => 'Disponibel-Mailservice Skydd',
	'ctracker_settings_e33' => 'cTracker har en intern lista �ver s� kallade Disponibel-Mailservices. Genom att aktivera denna funktion kan anv�ndare med s�dana e-postadresser inte registrera.',
	'ctracker_settings_m34' => 'Identifiering av felaktig konfiguration',
	'ctracker_settings_e34' => 'Genom att aktivera denna funktion kontroller CrackerTracker de allm�nna inst�llningarna f�r Icy Phoenix giltighetsvillkor. S� du kan inte skada din webbplats genom felkonfigurering!',
	'ctracker_settings_m35' => 'Spammer Detektion Boost',
	'ctracker_settings_e35' => 'Genom att aktivera denna funktion kommer cTracker att titta efter Spammers eller Spam-Posts. De flesta av dem kommer att bli blockerade.',
	'ctracker_settings_m36' => 'Spammer Nyckelord Kontroll',
	'ctracker_settings_e36' => 'Genom att aktivera "Spammer Detektion Boost", kommer nyckelord i Profilen och/eller Poster att bli scannade f�r identifiering av Spammers.<br /><b>V�nligen Notera:</b> Det finns en m�jlighet att uppt�cka falska uppgifter fr�n nya anv�ndare. V�nligen kontrollera loggfilen f�r Spammer detektion.',


/*
* Credits page in ACP
*/
	'ctracker_credits_head' => 'Ber�m',
	'ctracker_credits_subhead' => 'Ber�m av CBACK CrackerTracker. H�r ger vi dig mer information om s�kerhet och detta �r ocks� ett s�tt att s�ga "Tack".',
	'ctracker_credits_donate' => 'Donera',
	'ctracker_credits_donate_expl' => 'Gillar du <b>CBACK CrackerTracker Professional</b>? D� vore det trevligt om du donerade till CBACK Project genom att anv�nda en PayPal Donering f�r att bidra till att minska kostnaderna f�r servern. Detta kommer att hj�lpa oss att vidareutveckla och att g� vidare med v�ra ideella projekt; S� att vi kommer att kunna ge ut CrackerTracker gratis i framtiden. <br /><br />Tack s� mycket f�r ert st�d.',
	'ctracker_credits_credits' => 'Ber�m',
	'ctracker_credits_credits_1' => 'Ide & Genomf�rande',
	'ctracker_credits_credits_2' => 'F�rfattare och Support',
	'ctracker_credits_credits_3' => 'Ikoner',
	'ctracker_credits_credits_4' => 'Officiell Nerladdnings sida',
	'ctracker_credits_moddownload' => 'CrackerTracker MOD Download',
	'ctracker_credits_thanks' => 'Tack till...',
	'ctracker_credits_thanks_text' => 'Jag vill s�ga ett stort tack till f�ljande personer:',
	'ctracker_credits_thanks_to' => '<b>Ideer, S�kerhets tester och Proofreading</b><br />Tekin Bird�zen<br /><i>(<a href="http://www.cybercosmonaut.de" target="_blank">cYbercOsmOnauT</a>)</i><br /><br /><br /><br /><b>Ideer:</b><br />Bernhard Jaud<br /><i>(GenuineParts)</i><br /><br /><br /><br /><b>�vers�ttare (English)</b><br />Marc Renninger<br /><i>(mc-dragon)</i><br /><br /><br /><br /><b>Korrekturl�sare (English)</b><br />George <br />Sommerset<br /><i>(<a href="http://www.englisch-hilfen.de" target="_blank">www.englisch-hilfen.de</a>)</i><br /><br /><br /><br /><b>Beta Tester</b><br />Tack till alla deltagare i Beta-Tester<br />till CBACK Premium anv�ndare och givetvis till<br />v�ra kollegor p� "Mod-Scene" som hj�lpte till med Beta Tester och korrekturl�sning, ocks�.</i>',
	'ctracker_credits_info' => 'Mer S�kerhet?',
	'ctracker_credits_info_text' => 'Det perfekta till�gget f�r Icy Phoenix och CrackerTracker: F�r optimal s�kerhet rekommenderar vi Mod <b>Avancerad Visuell Bekr�ftelse</b> av AmigaLink. Detta MOD expanderar CAPTCHA inslag i phpBB och CrackerTracker Professional med ett mer komplext system som inte kan l�sas av Bots. Detta MOD kan du ladda ner fr�n <a href="http://www.amigalink.de" target="_blank">www.AmigaLink.de</a>.<br /><br /><br /><br />Vi f�resl�r att du ocks� integrerar detta MOD i ditt Forum f�r ytterligare s�kerhet.',


/*
* File Hash Check in ACP
*/
	'ctracker_fchk_head' => 'CrackerTracker Kontrollsumma Scanner',
	'ctracker_fchk_subhead' => '<b>Skapa en kontrollsumme av varje PHP fil i ditt Forum.</b><br /> Klicka p� "Skapa eller uppgradera Checksumma". Efter�t har du m�jlighet att med \ "Verifiera Fil �ndringar \" f�r att avg�ra om de filer som har �ndrats sedan f�rra g�ngen producerar kontrollsummor. Om filerna har �ndrats utan din k�nnedom kan det vara ett tecken p� att n�gon hade f�tt tillg�ng till din forum webbplats. Var uppm�rksam p� den senaste g�ngen som du kontrollerade s� att en obeh�rig person inte aktiverat kontrollsumme scannern!<br /><br /><b>V�nligen Notera:</b> Inte alla servrar st�der den h�r funktionen. Ibland kan det komma en Script Timeout om servern tar f�r l�ng tid p� sig att producera Icy Phoenix fillistan. Andra servrar stoppar f�rfarandet eftersom det �r ganska prestanda intensivt.<br /><br />&raquo; Den sista f�rverkligande av fil kontrollen totalt �gde rum <b>%s</b>.',
	'ctracker_fchk_funcheader' => 'Funktioner',
	'ctracker_fchk_tableheader' => 'System Output',
	'ctracker_fchk_option1' => 'Skapa eller uppgradera Kontrollsumma',
	'ctracker_fchk_option2' => 'Verifiera Fil �ndringar',
	'ctracker_fchk_select_action' => 'V�nligen V�lj en �tg�rd!',
	'ctracker_fchk_update_action' => 'Kontrollsumman var uppdaterad!',
	'ctracker_fchk_tablehead1' => 'Fil s�kv�g',
	'ctracker_fchk_tablehead2' => 'State',
	'ctracker_file_unchanged' => 'OF�R�NDRAD',
	'ctracker_file_changed' => 'MODIFIERAD',
	'ctracker_file_deleted' => 'RADERAD',


/*
* File Safety Scanner in ACP
*/
	'ctracker_fscan_complete' => 'The File scan was executed successfully. V�nligen klicka p� "Visa Resultat" f�r att se resultaten. Du kan korrigera filerna.<br /><br /><br /><u>V�nligen Notera:</u><br /><br />Ibland kan det h�nda att CrackerTracker uppt�cker en fil som os�ker. Detta kan intr�ffa n�r PHP-filer kan vara mycket olika, och ibland vill en utvecklare att koden skall kunna skrivas utifr�n. I detta fall - och endast om du �r absolut s�ker p� att du kan ber�tta f�r CrackerTracker att filen �r s�ker. F�r att g�ra detta l�gga till i filen i b�rjan "EFTER"? Php - f�ljande kod: <br /><br /><i>// CTracker_Ignore: File Checked By Human</i><br /><br />Om du �r os�ker p� vad du ska g�ra kan du ocks� bes�ka <a href="http://www.community.cback.de" target="_blank">CBACK Community</a> f�r mer detaljerade instruktioner.',
	'ctracker_fscan_unchecked' => 'EJ KONTROLLERAD',
	'ctracker_fscan_ok' => 'S�KER',
	'ctracker_fscan_prob_1' => 'extension.inc ej / eller inkluderad f�r sent',
	'ctracker_fscan_prob_2' => 'IP_ROOT_PATH f�r inte initieras korrekt',
	'ctracker_fscan_prob_3' => 'common.php / pagestart.php kan inte har inkluderats eller inkluderats f�r sent.',
	'ctracker_fscan_prob_4' => 'Kod i filen �r m�jligen k�rbar bortom Icy Phoenix',
	'ctracker_fscan_prob_5' => 'extension.inc saknas och / eller IP_ROOT_PATH och / eller konstant ej hittad',
	'ctracker_fscan_prob_def' => 'Ett odefinierat fall intr�ffade under scanning',
	'ctracker_fscan_important' => 'V�nligen L�s Detta!',
	'ctracker_fscan_sel_action' => 'F�r att starta kontrollen av alla filer v�nligen klicka p� "Starta Filkontroll". N�r detta �r klart klicka p� "Visa resultat" f�r att visa resultatet av kontrollen. Denna lista kan h�mtas som helst med hj�lp av ACP tills en ny kontroll startas.<br /><br />Av tekniska sk�l �r det inte m�jligt att ge <u>entydig</u> och <u>trofast</u> information om s�kerheten av ett PHP Script. S� var inte alltf�r s�ker. Det kan h�nda att skannern klassificerar en s�ker fil som os�ket, och vice versa. PHP koden �r komplicerad - s� det kan inte vara ett hundra procent garanterat s� att d�r inte kan vara os�kra skript l�ngre. ;-)<br /><br />Denna scanner �r specialiserad f�r att uppt�cka s�kerhetsh�l i inkluderade filer. Med denna skanner kan du l�tt hitta dessa risker och r�tta till dem.<br /><br />F�r mer detaljerad instruktion v�nligen bes�k CBACK Community!<br /><br />',
	'ctracker_fscan_head' => 'CBACK CrackerTracker S�kerhets Scanner',
	'ctracker_fscan_subhead' => 'S�kerhets scannern kontrollerar alla PHP filer i ditt Forum f�r att f�rs�ka att hitta s�kerheth�l som skulle kunna utnyttjas av Worms. Dessa h�l kan n�s fr�n utsidan Icy Phoenix genom att inte ha skydd av forumets s�kerhet, eller CrackerTracker System. Denna scan ger en m�jlighet att r�tta till dessa filer.<br /><br /><b>V�nligen notera:</b> Algoritmen f�r denna skanner �r b�st optimalt men inte alla servrar st�djer denna funktion! Med mycket stora Forum kan det h�nda att detta prestandabaserade intensiva Scan-systemet �verskrider PHP Verkst�llighetstiden tid och misslyckas.<br /><br /><b><em>V�nligen beakta detta om det misslyckas.</em></b><br /><br />&raquo; Den sista kontrollen �gde rum den <b>%s</b>.',
	'ctracker_fscan_option1' => 'Starta Filkontroll',
	'ctracker_fscan_option2' => 'Visa Resultat',


/*
* Global message in ACP
*/
	'ctracker_glob_msg_head' => 'Globalt Meddelande',
	'ctracker_glob_msg_subhead' => '<b>L�mna ett �vergripande meddelande till alla anv�ndare.</b><br /> Detta meddelande kommer att ses av anv�ndaren vid dennes n�sta Inloggning. Du har m�jlighet att antingen h�nvisa till en tr�d eller skriva din egen text.<br /><b>Notera:</b> Det finns en inf�rande text gr�ns p� (255 tecken).',
	'ctracker_glob_msg_entry' => 'St�ll globala meddelande',
	'ctracker_glob_msg_submit' => 'Infoga',
	'ctracker_glob_msg_reset' => 'Avbryt Meddelande',
	'ctracker_glob_msg_type' => 'Typ av globalt meddelande',
	'ctracker_glob_type_1' => 'Text',
	'ctracker_glob_type_2' => 'L�nk',
	'ctracker_glob_msg_txt' => 'Text av globalt meddelande',
	'ctracker_glob_msg_link' => 'L�nk Destination i meddelandet',
	'ctracker_glob_msg_reset' => 'Avbryt aktuellt meddelande',
	'ctracker_glob_res_txt' => 'N�r du klickar p� "Avbryt aktuellt meddelande" kommer vilket som helst aktuellt meddelandet avbrytas.',
	'ctracker_glob_msg_saved' => 'Det globala meddelandet var successfullt sparta.<br /><br />Klicka <a href="%s">H�R</a> f�r att g� tillbaka till CrackerTracker Management.',
	'ctracker_glob_msg_reset_ok' => 'Det globala meddelandet var raderat fr�n anv�ndar tabellen. Hela meddelandet kommer inte att visas l�ngre.<br /><br />Klicka <a href="%s">H�R</a> f�r att g� tillbaka till CrackerTracker Management.',

/*
* IP&Agent Blocker
*/
	'ctracker_ipb_delete' => 'Ta bort post',
	'ctracker_ipb_blocklist' => 'Blockera list poster',
	'ctracker_ipb_head' => 'Proxy, IP & UserAgent Blocker',
	'ctracker_ipb_description' => '<b>Hantera blockeringslistan f�r cTracker Proxy, IP och UserAgent Blocker.</b><br /> Du kan ta bort befintliga poster och / eller l�gga till nya. Med en ny post har du m�jlighet att anv�nda (*) f�r att ange valfri kombination av filter i listan. Till exempel: lwp* l�ser lwp-1 liksom lwp-simple etc. eller 100.*.*.* l�ser alla IP-Adresser som b�rjar med 100. .<br /><br /><b>F�RSIKTIGHET</b> Var noga med att du inte l�ser din egen UserAgent och IP-adress. Annars �r du ute ur ditt Forum!',


/*
* Log Manager
*/
	'ctracker_log_manager_title' => 'Loggfil Manager',
	'ctracker_log_manager_subtitle' => 'Visa eller radera alla Loggfiler fr�n CrackerTracker.',
	'ctracker_log_manager_overview' => 'Logg Manager �versikt',
	'ctracker_log_manager_blocked' => 'CrackerTracker har blockerat <b>%s</b> attacker hittils.',
	'ctracker_log_manager_overview' => 'Loggfil �versikt',
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
	'ctracker_log_manager_showheader1' => 'Det finns <b>en</b> post i denna logg fil. Klicka <b><a href="%s">H�R</a></b> f�r att g� tillbaka till Loggfil �versikten.',
	'ctracker_log_manager_showheader' => 'Det finns <b>%s</b> poster i denna logg fil.<br />Klicka<b><a href="%s">H�R</a></b> f�r att g� tillbaka till Loggfil �versikten.',
	'ctracker_log_manager_showlog' => 'Granska Loggfil',
	'ctracker_log_manager_cell_1' => 'Datum / Tid',
	'ctracker_log_manager_cell_2a' => '�verklagande',
	'ctracker_log_manager_cell_2b' => 'Anv�ndarnamn',
	'ctracker_log_manager_cell_3' => 'H�nvisning',
	'ctracker_log_manager_cell_4' => 'Anv�ndarAgent',
	'ctracker_log_manager_cell_5' => 'IP Adress',
	'ctracker_log_manager_cell_6' => 'Remote Host',
	'ctracker_log_manager_sysmsg' => 'Senaste rensning av Loggfilen var <b>%s</b>.',

/*
* Footer configuration
*/
	'ctracker_footer_head' => 'Sidfot Management',
	'ctracker_footer_subhead' => 'V�lj vilken sidfot CrackerTracker ska visa i ditt Forum. V�nligen �ndra inte sidfoten och l�nken till www.cback.de!',
	'ctracker_select_footer' => 'V�lj Sidfot',
	'ctracker_footer_saveit' => 'Acceptera Sidfots Layout',
	'ctracker_footer_done' => '�ndringen p� Sidfoten var sparad successfullt!',

/*
* Maintenance Module in ACP
*/
	'ctracker_ma_unknown' => '<span class="text_orange">OK�ND</span>',
	'ctracker_ma_secure' => '<span class="text_green">S�KER</span>',
	'ctracker_ma_warning' => '<span class="text_red">VARNING</span>',
	'ctracker_ma_active' => '<span class="text_green">AKTIV</span>',
	'ctracker_ma_inactive' => '<span class="text_red">INAKTIV</span>',
	'ctracker_ma_ca' => '<span class="text_green">OK</span>',
	'ctracker_ma_ci' => '<span class="text_red">INTE SATT</span>',
	'ctracker_ma_head' => 'Underh�ll och System kontroll',
	'ctracker_ma_subhead' => 'Systemet kontrollerar automatiskt granskning av cTracker s�kerhets moduler f�r funktioner, och visar tips om hur du optimerar ditt system.',
	'ctracker_ma_systest' => 'Automatisk System Test',
	'ctracker_ma_sectest' => 'S�kerhets Test',
	'ctracker_ma_maint' => 'Service Funktion',
	'ctracker_ma_name_1' => 'Worm & Exploit skydd System',
	'ctracker_ma_name_2' => 'Variabel Kontroll Enhet',
	'ctracker_ma_name_3' => 'IP, Proxy & Anv�ndarAgent Skydd Enhet',
	'ctracker_ma_name_4' => 'Worm HEURISTIK Definitioner Sats - Antal Definitioner: <b>%s</b>',
	'ctracker_ma_syshead_1' => 'S�kerhets Modul',
	'ctracker_ma_syshead_2' => 'Status',
	'ctracker_ma_seccheck_1' => 'Checkpoint',
	'ctracker_ma_seccheck_2' => 'Version / Status',
	'ctracker_ma_seccheck_3' => 'Referens',
	'ctracker_ma_seccheck_4' => 'Status',
	'ctracker_ma_scheck_1' => 'PHP Version (<a href="http://www.php.net" target="_blank">Bes�k Webbsida</a>)',
	'ctracker_ma_scheck_2' => '&raquo; PHP SAFE MODE',
	'ctracker_ma_scheck_3' => '&raquo; PHP GLOBALS',
	'ctracker_ma_scheck_4' => 'Icy Phoenix Version (<a href="http://www.icyphoenix.com" target="_blank">Bes�k Webbsida</a>)',
	'ctracker_ma_scheck_4a' => '&raquo; Visuell Bekr�ftelse',
	'ctracker_ma_scheck_4b' => '&raquo; Konto Aktivering',
	'ctracker_ma_scheck_5' => 'CBACK CrackerTracker (<a href="http://www.cback.de" target="_blank">Bes�k Webbsida</a>)',
	'ctracker_ma_chmod' => '<b>CHMOD777 Status:</b> ',
	'ctracker_ma_desc_link' => 'EXECUTE NU',
	'ctracker_ma_desc1' => '<b>Rensa IP, Proxy & Anv�ndarAgent Tabell</b><br />Radera <u>alla</u> poster fr�n IP, Proxy & Anv�ndarAgent Tabell.',
	'ctracker_ma_desc2' => '<b>Factory inst�llning: IP, Proxy & Anv�ndarAgent Blocker</b><br />�terst�ll standard status av unders�kningsperioden, Proxy & anv�ndaragent databastabellerna. Dina filter f�rsvinner dock!',
	'ctracker_ma_desc3' => '<b>Radera Login History</b><br />Radera alla poster fr�n Inloggnings Historian, oberoende av anv�ndaren eller justera antalet sparningar per anv�ndare.',
	'ctracker_ma_desc4' => '<b>Rensa Fil-Hash kontrolltabell</b><br />Radera alla sparade poster fr�n Fil-Hashcheck tabellen.',
	'ctracker_ma_desc5' => '<b>Rensa S�kerhets scanner Tabell</b><br />Radera alla resultat som var lagrade under fil s�kerhets unders�kningen av data basen.',
	'ctracker_ma_succ_main' => 'Processen utf�rdes successfullt!',
	'ctracker_ma_err_main' => 'Processen utf�rdes unsuccessfullt!',


/*
* Miserable User Module in ACP...
*/
	'ctracker_mu_subhead' => 'En anv�ndare taggad som "El�ndig anv�ndare" kommer enbart att ha sina poster tillg�ngliga f�r sig sj�lv och till Admin f�r forumet. Detta f�ruts�tter att de snart kommer att tr�ttna p� att inte f� n�got svar p� sina tr�dar och inl�gg och l�mnar forumet.<br /><br /><b>Notera:</b> Denna funktion g�r bara att inl�ggen f�rsvinner fr�n en tr�d. Anv�ndning av "Citera" eller "S�k" kommer att avsl�ja de dolda posterna"!',

	'ctracker_mu_select' => 'Markera anv�ndare som El�ndig Anv�ndare',
	'ctracker_mu_find' => 'Leta efter Anv�ndarnamn',
	'ctracker_mu_send' => 'Ange Anv�ndarnamn',
	'ctracker_mu_entr' => 'Markerade Anv�ndarnamn',
	'ctracker_mu_uname' => 'Angivna Anv�ndarnamn',
	'ctracker_mu_remove' => 'Radera Poster',
	'ctracker_mu_no_defined' => 'Det finns inga anv�ndare markerade som "El�ndig Anv�ndare" just nu.',


/*
* Recovery feature in ACP
*/
	'ctracker_rec_head' => 'System �terh�mtning',
	'ctracker_rec_subhead' => 'S�kerhets kopiera Konfigurations Tabellen fr�n ditt Forum eller kan du g� till den senaste k�rda konfigurationen. Om du har aktiverat denna funktion i de allm�nna inst�llningarna av CrackerTracker, d� blir den s�kerhets kopierad varje g�ng du �ndrar Allm�nna Inst�llningar. (VARNING! Det �r <b>EJ</b> en Backup av hela den kompletta databasen!)<br /><br />N�r du inte �r i ACP efter att du har �ndrat inst�llningar, kan du aktivera den sista k�rda konfigurationen med hj�lp av Emergency Console i CrackerTracker, ocks�. V�nligen l�s fil kommentarerna i <i>ctracker/emergency.php</i> f�r mer instruktion av Forum konfigurationer i en n�dsituation. V�nligen notera, att denna fil m�ste vara aktiverad innan du anv�nder den.<br /><br /><b>VARNING!</b> Denna funktion skall endast anv�ndas n�r det finns ett allvarligt problem!',
	'ctracker_rec_last_saved' => 'Senaste Backup p� Konfigurations Tabellen: <b>%s</b>',
	'ctracker_rec_never_saved' => 'Konfigurations Tabellen har ej blivit s�kerhets kopierad �n!',
	'ctracker_rec_backup' => '<span class="gen">Backup Konfigurations Tabellen</span>',
	'ctracker_rec_restore' => '<span class="gen">�terskapa den senaste k�rda Konfigurations Tabellen</span>',
	'ctracker_rec_succ' => '<span class="gen">Databas processen har blivit utf�rd successfull.</span>',
	'ctracker_rec_pab' => '<span class="gen">�terh�mtning �r ej tillg�ngligt f�re du har gjort en successfult Backup!</span>',
	)
);
?>