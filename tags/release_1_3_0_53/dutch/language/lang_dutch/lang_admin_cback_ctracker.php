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
	'ctracker_module_1' => 'Controlesomscanner',
	'ctracker_module_2' => 'Credits',
	'ctracker_module_3' => 'Datascanner',
	'ctracker_module_4' => 'Algemene Nieuws',
	'ctracker_module_5' => 'IP&Agent Blokker',
	'ctracker_module_6' => 'Logbeheer',
	'ctracker_module_7' => 'Onderhoud & Tests',
	'ctracker_module_8' => 'Akelige Gebruiker',
	'ctracker_module_9' => 'Instellingen',
	'ctracker_module_10' => 'Herstellen',
	'ctracker_module_11' => 'Footer',


/*
 * Language Strings used in ACP Modules itself
 */
	'ctracker_wrong_module' => 'Onbekende Modulenummer',
	'ctracker_img_descriptions' => 'Afbeelding',
	'ctracker_set_catname1' => 'IP, Proxy & Gebruikeragent Blokker',
	'ctracker_set_catname2' => 'Zoekschild-Systeem',
	'ctracker_set_catname3' => 'Loginschild-Systeem',
	'ctracker_set_catname4' => 'Automatische Spamherkenning',
	'ctracker_set_catname5' => 'Registreerschild-Systeem',
	'ctracker_set_catname6' => 'Wachtwoordcontrole',
	'ctracker_set_catname7' => 'Algemene Zekerheidsfuncties',
	'ctracker_set_catname8' => 'Overige instellingen',
	'ctracker_settings_head' => 'CrackerTracker Instellingen',
	'ctracker_settings_expl' => 'Hier kan je alle instellingen van CBACK CrackerTracker Veiligheidssysteem aanpassen.',
	'ctracker_button_submit' => 'Instellingen opslaan',
	'ctracker_button_reset' => 'Terugzetten',

	'ctracker_settings_m1' => 'IP Blokker activeren',
	'ctracker_settings_e1' => 'Schakelt de IP, Proxy en Gebruikeragent Blokker in of uit.',
	'ctracker_settings_m2' => 'IP Blokker Logbestandgrootte',
	'ctracker_settings_e2' => 'Hier kun je de aantal bijdragen van het Logbestand voor IP Blokker instellen. Wordt dit aantal overschreden dan wordt de logbestand automatisch verwijderd, om webruimte te besparen.',
	'ctracker_settings_m3' => 'Zoekschild activeren',
	'ctracker_settings_e3' => 'Hier kan je het Zoekschild-systeem van CrackerTracker in- of uitschakelen.',
	'ctracker_settings_m4' => 'Zoektijd voor gebruiker',
	'ctracker_settings_e4' => 'Wachttijd die geregistreerde gebruikers wachten moeten, voordat het Zoekschild-systeem geactiveerd word, tot dat je opnieuw mag zoeken. (in seconden)',
	'ctracker_settings_m5' => 'Zoekaantal voor gebruiker',
	'ctracker_settings_e5' => 'Hier kun je instellen, hoeveel zoekaanvragen er in een aangegeven tijd door de geregistreerde gebruikers mogen worden uitgevoerd. Wanneer deze aantal wordt overschreden, worden verdere zoekaanvragen voor de hierboven ingestelde tijd geblokkeerd, om de serverbelasting te minimaliseren.',
	'ctracker_settings_m6' => 'Zoektijd voor gasten',
	'ctracker_settings_e6' => 'Wachttijd die gasten wachten moeten, voordat het zoekschild-systeem geactiveerd word, tot dat je opnieuw mag zoeken. (in seconden)',
	'ctracker_settings_m7' => 'Zoekaantal voor gasten',
	'ctracker_settings_e7' => 'Hier kun je instellen, hoeveel zoekaanvragen er in een aangegeven tijd door de gasten mogen worden uitgevoerd. Wanneer deze aantal word overschreden, worden verdere zoekaanvragen voor de hierboven ingestelde tijd geblokkeerd, om de serverbelasting te minimaliseren.',
	'ctracker_settings_m8' => 'Loginschild inschakelen',
	'ctracker_settings_e8' => 'Hier kan je de loginschild-systeem van CrackerTracker activeren of deactiveren.',
	'ctracker_settings_m9' => 'Logbestandgrootte van foutieve inlogpoggingen',
	'ctracker_settings_e9' => 'Hier kun je instellen, hoeveel meldingen er in de logbestand voor foutieve inlogpogginen mogen worden opgeslagen, tot dat het automatisch verwijderd wordt, om webruimte te sparen.',
	'ctracker_settings_m10' => 'Loginaantal tot visuele bevestiging',
	'ctracker_settings_e10' => 'Hoe vaak mag een gebruiker foutief inloggen, voordat het Schild voor BruteForce Aanvallen de Visuele Confirmatie aanzet?',
	'ctracker_settings_m11' => 'Inloggeschiedenis',
	'ctracker_settings_e11' => 'Hier kan je de inloggeschiedenis voor de gebruiker activeren of deactiveren.',
	'ctracker_settings_m12' => 'Aantal inlogmomenten in de Inloggeschiedenis per gebruiker',
	'ctracker_settings_e12' => 'Hier kan je instellen, hoeveel achtereenvolgende inlogmomenten er per gebruiker mag worden opgeslagen. Bij de inloggeschiedenis hebben alle gebruikers die mogelijkheid om zelf te controleren, of de tijden en IP-adressen van hun inlogmomenten kloppen.',
	'ctracker_settings_m13' => 'Login IP Functie',
	'ctracker_settings_e13' => 'Activeert of deactiveert het Login-IP-Systeem. Iedere gebruiker heeft de mogelijkheid om op de Inlogveiligheidspagina het systeem te activeren of te deactiveren, wanneer deze optie ingeschakeld wordt. Het IP-Schild-Systeem controleert de veranderingen van gebruikers IP-adres en informeert de gebruiker bij de volgende inlogmoment daarover, dat het IP-adres in de laatste inlogmoment veranderd is. Er bestaat een mogelijkheid, dat iemand van een andere plaats ingelogd heeft.',
	'ctracker_settings_m14' => 'Spamherkenning',
	'ctracker_settings_e14' => 'Hier kan een mate van automatische spamherkenning ingesteld worden.',
	'ctracker_settings_m15' => 'Spam Tijdsperiode',
	'ctracker_settings_e15' => 'Tijdsperiode voor de berichten van gebruikers voordat spamherkenning ingeschakeld wordt. (in seconden)',
	'ctracker_settings_m16' => 'Spamaantal',
	'ctracker_settings_e16' => 'Toegestaande aantal berichten in de hierboven gestelde tijd. Wordt deze waarde overschreden, dan wordt het gebruiker als spammer geidentificeerd en wordt de in hierboven ingestelde actie uitgevoerd.',
	'ctracker_settings_m17' => 'Spamlogbestandgrootte',
	'ctracker_settings_e17' => 'Logbestandgrootte van de spammer geidentificeerde gebruiker die opgeslagen mag worden.',
	'ctracker_settings_m18' => 'Registreerschild',
	'ctracker_settings_e18' => 'Hier kan je de registreerschild activeren of deactiveren.',
	'ctracker_settings_m19' => 'Blokkeertijd voor registratie',
	'ctracker_settings_e19' => 'Hier kun je een tijdsperiode instellen, die tussen twee registraties moet zitten, om te voorkomen dat een nieuwe gebruiker zich niet weer kan registreren. (in seconden)',

	'ctracker_settings_m21' => 'IP Bekijker',
	'ctracker_settings_e21' => 'Wanneer deze functie geactiveerd wordt, kan een gebruiker met dezelfde IP-adres zich alleen nog registreren, nadat iemand anders met een andere IP-adres zich heeft geregisteerd.',
	'ctracker_settings_m22' => 'Wachtwoordgeldigheid',
	'ctracker_settings_e22' => 'Activeert de controle van de geldigheid voor wachtwoorden van alle gebruikers.',
	'ctracker_settings_m23' => 'Wachtwoordgeldigheid in dagen',
	'ctracker_settings_e23' => 'Hoe lang is een gebruikerswachtwoord geldig, voordat er een melding van verschijnt? (in dagen)',
	'ctracker_settings_m24' => 'Wachtwoord complexiteitscontrole',
	'ctracker_settings_e24' => 'Deze functie controleert de gebruikerswachtwoord op complexiteit.',
	'ctracker_settings_m25' => 'Wachtwoordcomplexiteit',
	'ctracker_settings_e25' => 'Hier kan ingesteld worden, hoe complex het wachtwoord moet zijn.',
	'ctracker_settings_m26' => 'Minimum lengte van het wachtwoord',
	'ctracker_settings_e26' => 'Hier kan je een minimum lengte instellen, hoe lang het wachtwoord is.',
	'ctracker_settings_m27' => 'Wachtwoordresetcontrole',
	'ctracker_settings_e27' => 'Sta gebruiker toe om in de eerste volgende tijdsperiode eenmaal zijn wachtwoord terug te zetten. Dit voorkomt, dat hackers deze functie niet kunnen gebruiken om een gebruiker met wachtwoord reset e-mails te spammen.',
	'ctracker_settings_m28' => 'Wachtwoord Reset Tijdsperiode',
	'ctracker_settings_e28' => 'In welke tijdsperiode mag een gebruiker zijn wachtwoord terug laten zetten? (in minuten)',
	'ctracker_settings_m29' => 'E-mailvasthouding',
	'ctracker_settings_e29' => 'Hier kan je de functie activeren, dat gebruikers de forumfunctie om te e-mailen alleen in de beschikbare periode kunnen gebruiken. Dit verhinderd spammen.',
	'ctracker_settings_m30' => 'E-mail Tijdsperiode',
	'ctracker_settings_e30' => 'Hoeveel tijd moet er tussen e-mails zitten, dat een gebruiker weer gebruik mag maken van de forumfunctie om te e-mailen? (in minuten)',
	'ctracker_settings_m31' => 'Automatisch herstellen',
	'ctracker_settings_e31' => 'Activeert de functie die de automatische foruminstellingen bewaart. Wanneer er foutmeldingen zijn, kan er eenvoudig worden teruggekeerd naar de laatst gefunctioneerde configuratie.',
	'ctracker_settings_m32' => 'Visuele bevestiging van gasten',
	'ctracker_settings_e32' => 'Wanneer je deze functie ingeschakeld, moeten gasten bij het schrijven van een nieuwe bericht een visuele bevestiging invoeren, voordat zijn/haar bericht wordt geplaatst. Dit houdt automatische spambots tegen.',
	'ctracker_settings_m33' => 'Tijdelijk e-maildiensten Schild',
	'ctracker_settings_e33' => 'CrackerTracker heeft een interne lijst van zogenaamde tijdelijke e-maildiensten. Wanneer je deze functie activeert, kunnen er geen gebruikers met zo\'n e-mailadres registrerenworden op je forum, om bijvoorbeeld hun e-mailaccountactivering te omzeilen.',
	'ctracker_settings_m34' => 'Herkenning van incorrecte configuratie',
	'ctracker_settings_e34' => 'Wanneer je deze functie hebt geactiveerd, controleert CrackerTracker bij de Algemene Configuratie-instellingen van phpBB de geldigheid. Zo kan je forum niet meer door incorrecte configuratie worden beschadigd!',
	'ctracker_settings_m35' => 'Spammerdetectie Boost',
	'ctracker_settings_e35' => 'Wanneer je deze functie hebt geactiveerd, gaat CrackerTracker menselijke doorgevoerde spamregistraties en spamberichten bekijken. De meeste worden dan herkent en geblokkeerd.',
	'ctracker_settings_m36' => 'Spammer Trefwoordcontrole',
	'ctracker_settings_e36' => 'Wanneer "Spammerdetectie Boost" geactiveerd is, kunnen de trefwoorden in de profiel en berichten gescand worden om zo de spammers te identificeren.<br /><br /><b>WAARSCHUWING:</b> Hier bestaat groot gevaar dat een gebruiker foutief wordt geidentificeerd als spammer. Alstublieft bekijk het logbestand voor Spammerdetectie erop na.',


/*
 * Credits page in ACP
 */
	'ctracker_credits_head' => 'Credits',
	'ctracker_credits_subhead' => 'Hier bevinden een aantal dankberichten en de Credits voor CBACK CrackerTracker. Een pagina om je verder informatie over veiligheidsrelevante dingen te geven, en een mogelijkheid om een dankwoordje te geven.',
	'ctracker_credits_donate' => 'Doneren',
	'ctracker_credits_donate_expl' => 'Bevalt jouw <b>CBACK CrackerTracker Professional</b>? Dan is het zeer netjes van je, wanneer je het CBACK Project met een kleine PayPal donatie te ondersteunen. Verder ontwikkeling en serverhuur kosten van onze non-profit project kost veel geld. Met een kleine ondersteuning help je, dat we onze service bijvoorbeeld de CrackerTracker verder kostenloos kunnen aanbieden. <br /><br />Hartelijk dank voor je ondersteuning!',
	'ctracker_credits_credits' => 'Credits',
	'ctracker_credits_credits_1' => 'Idee & Omzetting',
	'ctracker_credits_credits_2' => 'Auteur en Ondersteuning',
	'ctracker_credits_credits_3' => 'Iconen',
	'ctracker_credits_credits_4' => 'Officiële Downloadwebsite',
	'ctracker_credits_moddownload' => 'CrackerTracker MOD Download',
	'ctracker_credits_thanks' => 'Dank aan...',
	'ctracker_credits_thanks_text' => 'In dit stuk gaan er bedankjes naar enkele personen die betrokken waren bij de MOD Ontwikkeling met ideën, Tests en meer wat hier niet staat.',
	'ctracker_credits_thanks_to' => '<b>Functieideeën, veiligheidstests en leescontrole</b><br />Tekin Birdüzen<br /><i>(<a href="http://www.cybercosmonaut.de" target="_blank">cYbercOsmOnauT</a>)</i><br /><br /><br /><br /><b>Ideën</b><br />Bernhard Jaud<br /><i>(GenuineParts)</i><br /><br /><br /><br /><b>Vertalers</b><br />mc-dragon<br /><i>(Engels)</i><br /><br /><br /><br /><b>Corrector (Engels)</b><br />George<br />Sommerset<br /><i>(<a href="http://www.englisch-hilfen.de" target="_blank">www.englisch-hilfen.de</a>)</i><br /><br /><br /><br /><b>Corrector (Duits)</b><br />Johnny (diegoriv)<br /><i>(<a href="http://alpinum.at" target="_blank">Alpinum.at</a>)</i><br /><br /><br /><br /><b>Betatester</b><br />Dank aan alle deelnemers aan betatests,<br />en de CBACK Premium gebruiker en natuurlijk ook aan<br />enige college\'s uit de "Modder-Szene", welke bij betatests en correcties geholpen hebben.</i>',
	'ctracker_credits_info' => 'Nog meer veiligheid?',
	'ctracker_credits_info_text' => 'De perfecte uitbreiding voor phpBB en de CrackerTracker: Voor optimale veiligheid voor lastige Spambots en Registratiebots is het aanbevolen om deze MOD <b>Advanced Visual Confirmation</b> van AmigaLink te installeren. Deze MOD breidt de CAPTCHA functie van phpBB en van CrackerTracker Professional met een complexe systeem uit, waarmee bots niet overweg kunnen. De MOD kan men vanaf <a href="http://www.amigalink.de" target="_blank">www.AmigaLink.de</a> gedownload worden.<br /><br /><br /><br />Wij adviseren om deze MOD voor optimale veiligheid in elk geval in je forum in te bouwen!',


/*
 * File Hash Check in ACP
 */
	'ctracker_fchk_head' => 'CrackerTracker Controlesomscanner',
	'ctracker_fchk_subhead' => 'Deze scanner onderzoekt elk PHP Data op het forum naar controlesom, zodra je klikt op "Creër of actualiseer controlesom". Daarna is er altijd nog een mogelijkheid om "Dataveranderingen" vast te stellen, sinds het laatste keer dat je controlesomscanner hebt uigevoerd en of er misschien data is veranderd zonder dat jezelf wat bewerkt hebt. Dit is meestal het geval / voorbode dat iemand anders toegang tot je forum-databestanden heeft gehad of heeft. Hou rekening mee met de laatste keer dat deze functie is uitgevoerd. Zo zie je, of iemand anders onbevoegd deze scanner heeft uitgevoerd!<br /><br /><br /><b>Informatie:</b> Niet alle servers ondersteunen deze functie. Dit kan geregeld leiden tot scripttime- outs, wanneer de server te lange tijd nodig heeft om de phpBB bestanden te controleren. Andere servers breken de voortgang of, als er echt te veel servercapaciteit kost.<br /><br /><br />&raquo, De laatste actualisering van deze datacontrolesom is van <b>%s</b>.',
	'ctracker_fchk_funcheader' => 'Functies',
	'ctracker_fchk_tableheader' => 'Systeemuitvoer',
	'ctracker_fchk_option1' => 'Creër of actualiseer controlesom',
	'ctracker_fchk_option2' => 'Verifeer dataveranderingen',
	'ctracker_fchk_select_action' => 'Alstublieft kies een actie uit!',
	'ctracker_fchk_update_action' => 'Actualiseren van datacontrolesom is volledig uitgevoerd!',
	'ctracker_fchk_tablehead1' => 'Datapad',
	'ctracker_fchk_tablehead2' => 'Status',
	'ctracker_file_unchanged' => 'ONVERANDERD',
	'ctracker_file_changed' => 'VERANDERD',
	'ctracker_file_deleted' => 'VERWIJDERD',


/*
 * File Safety Scanner in ACP
 */
	'ctracker_fscan_complete' => 'De bestandenscan is succesvol uitgevoerd. Alstublieft klik op "Toon resultaten", daarmee krijg je een lijst met alle testresultaten en geeft je de mogelijkheid om de bestanden te corrigeren. <br /><br /><br /><br /><u>TIP:</u><br /><br />De gelegenheid kan zich voordoen, dat CrackerTracker een bestand als onveilig herkent. Dat ligt er natuurlijk aan, dat PHP Codebestanden zeer verschillend zijn kunnen en developers willen dat de code ook van buitenaf schrijfbaar is, in deze gevallen - en ALLEEN als je absoluut zeker weet kun je dat CRACKERTRACKER vertellen dat het om een veilige bestand gaat. Je kan in het bestand dan het volgende zetten na <?php: <br /><br /><br /><i>// CTracker_Ignore: File Checked By Human</i><br /><br /><br />Als je niet zeker bent, kijk dan op <a href="http://www.community.cback.de" target="_blank">CBACK Community</a> voor meer instructies.',
	'ctracker_fscan_unchecked' => 'NIET GECONTROLEERD',
	'ctracker_fscan_ok' => 'VEILIG',
	'ctracker_fscan_prob_1' => 'extension.inc niet / te laat ingeclud',
	'ctracker_fscan_prob_2' => 'IP_ROOT_PATH is mogelijke wijs niet goed geinitialiseerd',
	'ctracker_fscan_prob_3' => 'common.php / pagestart.php is mogelijkerwijs niet of te laat includ',
	'ctracker_fscan_prob_4' => 'Code in het bestand is mogelijkerwijs ook buiten phpBB uitvoerbaar',
	'ctracker_fscan_prob_5' => 'extension.inc gefaald en/of IP_ROOT_PATH en/of gezette constanten niet gevonden',
	'ctracker_fscan_prob_def' => 'Een ongedefinieerde fout bij het scannen opgetreden',
	'ctracker_fscan_important' => 'Alstublieft aandacht!',
	'ctracker_fscan_sel_action' => 'Om het starten van het controleren van alle bestanden klik je op "Bestandscontrole starten". Wanneer het geëindigd is, klik je op "Bekijk resultaten", om de resultaten van de controle te bekijken. Deze lijst kan iedere keer weer op deze ACP punt worden opgeroepen, tot een nieuwe controle gestart is.<br /><br /><br />Uit technisch oogpunt is het niet mogelijk om een <u>eenduidige</u> en <u>foutloze</u> uitkomst van de veiligheid van een PHP scripts te geven. Het weegt ook niet op tegen de foute veiligheidsvoorstellingen! Het kan voorkomen, dat de scanner een veilig bestand als onveilig aangeeft en het kan ook gebeuren, dat deze scanner een bestand als zeker aangeeft maar toch een lek in zit. PHP is zo diepgaand en codes zijn meestal nog van vele andere factoren afhankelijk, dat een 100% goed resultaat nooit nagestreeft kan worden. Als het wel zo was dan had men geen onveilige scripts meer. ;-)<br /><br /><br />Deze scanner is gespecialiseerd om veiligheidslekken te detecteren in bestanden. Met deze scanner is het makkelijk te vinden welke risico\'s er zijn en je kunt ze corrigeren.<br /><br /><br />Voor meer details en instructies gebruik CBACK Communtiy!<br /><br /><br /><br />',
	'ctracker_fscan_head' => 'CBACK CrackerTracker Veiligheidsscanner',
	'ctracker_fscan_subhead' => 'Deze veiligheidsscanner controleert alle PHP bestanden op je forum op belangrijke problemen zodat er geen veiligheidslekken zijn die kunnen gebruikt worden door Worms. Deze lekken kan worden gebruikt buiten het forum om zonder gebruik te maken van bestaden van het forum. Het CrackerTracker Systeem deactiveert en kan het bestand niet beveiligen. Met de ACP Module heb je de optie om specifieke lekken te detecteren en om het te corrigeren.<br /><br /><br /><b>Informatie:</b> Niet alle servers ondersteunen deze functie! Bij zeer grote forums kan het noodzakelijke prestatieintensieve scansysteem het PHP uitvoertijd overschrijden. De algoritme van deze scanner is niet geoptimaliseerd, dat het met de limieten om kan gaan, bovendien kan het tot fouten leiden op sommige servers. We adviseren om dit voor lief te nemen.<br /><br /><br />&raquo; De laatste controle heeft plaatsgevonden om <b>%s</b>.',
	'ctracker_fscan_option1' => 'Bestandscontrole starten',
	'ctracker_fscan_option2' => 'Bekijk resultaten',


/*
 * Global message in ACP
 */
	'ctracker_glob_msg_head' => 'Algemeen nieuws',
	'ctracker_glob_msg_subhead' => 'Hier kun je een algemeen bericht achterlaten voor alle gebruikers. Dit bericht wordt dan weergeven bij de volgende inlogmoment van de gebruiker. Je hebt de mogelijkheid om te refereren naar een onderwerp of om een eigen tekst te schrijven (255 tekens).',
	'ctracker_glob_msg_entry' => 'Algemeen nieuws instellen',
	'ctracker_glob_msg_submit' => 'Toevoegen',
	'ctracker_glob_msg_reset' => 'Nieuws annuleren',
	'ctracker_glob_msg_type' => 'Type Algemeen Nieuws',
	'ctracker_glob_type_1' => 'Tekst',
	'ctracker_glob_type_2' => 'Link',
	'ctracker_glob_msg_txt' => 'Tekst voor algemeen nieuws',
	'ctracker_glob_msg_link' => 'Linkbestemming in dit nieuws',
	'ctracker_glob_msg_reset' => 'Huidige nieuws annuleren',
	'ctracker_glob_res_txt' => 'Wanneer je klikt op "Huidige nieuws annuleren" dan wordt een eerder toegevoegd bericht geannuleerd.',
	'ctracker_glob_msg_saved' => 'Het algemeen nieuws is succesvol opgeslagen.<br /><br />Klik <a href="%s">hier</a> om terug te gaan naar CrackerTracker Management.',
	'ctracker_glob_msg_reset_ok' => 'Het algemeen nieuws is verwijderd uit het gebruikerstabel. De toegevoegde nieuws wordt niet meer weergegeven.<br /><br />Klik <a href="%s">hier</a> om terug te gaan naar CrackerTracker Management.',

/*
 * IP&Agent Blocker
 */
	'ctracker_ipb_delete' => 'Verwijder ingang',
	'ctracker_ipb_blocklist' => 'Bloklijst ingangen',
	'ctracker_ipb_head' => 'Proxy, IP & Gebruikeragent Blokker',
	'ctracker_ipb_description' => 'Hier kun je de bloklijst van CrackerTracker Proxy, IP en GebruikerAgent Blokker beheren. Je kan bestaande ingangen verwijderen of nieuwe toevoegen. Met een nieuwe ingang heb je de optie om gebruik te maken van (*) om een combinatie eruit te filteren uit de lijst. Voorbeeld: lwp* staat voor lwp-1 alsmede lwp-simple enz. of 100.*.*.* vertegenwoordigt alle IP-adressen dat begint met 100. .<br /><br /><b>WAARSCHUWING</b> Let erop dat je je eigen e-mailadres of GebruikerAgent niet blokkeert. Anders wordt je van het forum geband en geblokkeerd!',


/*
 * Log Manager
 */
	'ctracker_log_manager_title' => 'Logbestandmanager',
	'ctracker_log_manager_subtitle' => 'Hier kun je alle logbestanden van CrackerTracker weergeven of verwijderen.',
	'ctracker_log_manager_overview' => 'Logmanageroverzicht',
	'ctracker_log_manager_blocked' => 'CrackerTracker heeft tot dit moment <b>%s</b> aanvallen geblokkeerd.',
	'ctracker_log_manager_overview' => 'Logbestandoverzicht',
	'ctracker_log_manager_head1' => 'Lognaaam',
	'ctracker_log_manager_head2' => 'Aantal ingangen',
	'ctracker_log_manager_head3' => 'Functies',
	'ctracker_log_manager_name2' => 'Worm & exploitbescherming',
	'ctracker_log_manager_name3' => 'IP, Proxy & GebruikerAgent Blokker',
	'ctracker_log_manager_name4' => 'Incorrecte logins',
	'ctracker_log_manager_name5' => 'Geblokkeerde spammers',
	'ctracker_log_manager_name6' => 'Debugingangen',
	'ctracker_log_manager_view' => 'BEKIJK',
	'ctracker_log_manager_delete' => 'VERWIJDER',
	'ctracker_log_manager_delete_all' => 'Verwijder alle logbestanden',
	'ctracker_log_manager_deleted' => 'De logbestand is succesvol verwijderd!',
	'ctracker_log_manager_all_deleted' => 'Alle logbestanden zijn succesvol verwijderd!',
	'ctracker_log_manager_showheader1' => 'Er is <b>1</b> ingang in dit logbestand. Klik <b><a href="%s">hier</a></b> om terug te keren naar Logbestandoverzicht.',
	'ctracker_log_manager_showheader' => 'Er zijn <b>%s</b> ingangen in dit logbestand.<br />Klik <b><a href="%s">hier</a></b> om terug te keren naar Logbestandoverzicht.',
	'ctracker_log_manager_showlog' => 'Bekijk Logbestand',
	'ctracker_log_manager_cell_1' => 'Datum / Tijd',
	'ctracker_log_manager_cell_2a' => 'Bron / Welk bestand?',
	'ctracker_log_manager_cell_2b' => 'Gebruikersnaam',
	'ctracker_log_manager_cell_3' => 'Referer',
	'ctracker_log_manager_cell_4' => 'GebruikerAgent',
	'ctracker_log_manager_cell_5' => 'IP-adres',
	'ctracker_log_manager_cell_6' => 'Externe Host',
	'ctracker_log_manager_sysmsg' => 'Laatste schoonmaak van dit logbestand was op <b>%s</b>.',

/*
 * Footer configuration
 */
	'ctracker_footer_head' => 'Footerbeheer',
	'ctracker_footer_subhead' => 'Hier kun je kiezen welke footer CrackerTracker wordt weergeven op je forum. Alstublieft verander geen footer en de link naar www.cback.de!',
	'ctracker_select_footer' => 'Kies footer',
	'ctracker_footer_saveit' => 'Accepteer Footerlayout',
	'ctracker_footer_done' => 'Veranderingen aan de footer zijn succesvol opgeslagen!',

/*
 * Maintenance Module in ACP
 */
	'ctracker_ma_unknown' => '<span class="text_orange">ONBEKEND</span>',
	'ctracker_ma_secure' => '<span class="text_green">VEILIG</span>',
	'ctracker_ma_warning' => '<span class="text_red">WAARSCHWUWING</span>',
	'ctracker_ma_active' => '<span class="text_green">ACTIEF</span>',
	'ctracker_ma_inactive' => '<span class="text_red">INACTIEF</span>',
	'ctracker_ma_ca' => '<span class="text_green">OK</span>',
	'ctracker_ma_ci' => '<span class="text_red">NIET INGESTELD</span>',
	'ctracker_ma_head' => 'Onderhoud- en systeemcontrole',
	'ctracker_ma_subhead' => 'Dit systeemtest test automatisch de CrackerTracker veiligheidsmodules voor functies en toont tips om om je systeem te optimaliseren.',
	'ctracker_ma_systest' => 'Automatische systeemtest',
	'ctracker_ma_sectest' => 'Veiligheidstest',
	'ctracker_ma_maint' => 'Servicefunctie',
	'ctracker_ma_name_1' => 'Worm- & Exploitprotectiesysteem',
	'ctracker_ma_name_2' => 'Variabelecontroleunit',
	'ctracker_ma_name_3' => 'IP, Proxy & GebruikerAgent Protectie Unit',
	'ctracker_ma_name_4' => 'Worm Heuristics Definitions Batch - Aantal definities: <b>%s</b>',
	'ctracker_ma_syshead_1' => 'Veiligheidsmodule',
	'ctracker_ma_syshead_2' => 'Status',
	'ctracker_ma_seccheck_1' => 'Controlepunt',
	'ctracker_ma_seccheck_2' => 'Versie / Status',
	'ctracker_ma_seccheck_3' => 'Referentie',
	'ctracker_ma_seccheck_4' => 'Status',
	'ctracker_ma_scheck_1' => 'PHP Versie (<a href="http://www.php.net" target="_blank">Bezoek website</a>)',
	'ctracker_ma_scheck_2' => '&raquo; PHP SAFE MODE',
	'ctracker_ma_scheck_3' => '&raquo; PHP GLOBALS',
	'ctracker_ma_scheck_4' => 'Icy Phoenix Versie (<a href="http://www.icyphoenix.com" target="_blank">Bezoek website</a>)',
	'ctracker_ma_scheck_4a' => '&raquo; visuele bevestiging',
	'ctracker_ma_scheck_4b' => '&raquo; Accountactivatie',
	'ctracker_ma_scheck_5' => 'CBACK CrackerTracker (<a href="http://www.cback.de" target="_blank">Bezoek website</a>)',
	'ctracker_ma_chmod' => '<b>CHMOD777 Status:</b> ',
	'ctracker_ma_desc_link' => 'NU UITVOEREN',
	'ctracker_ma_desc1' => '<b>Wis IP, Proxy & GebruikerAgent Tabel</b><br />Hier kun je <u>alle</u> ingangen van IP, Proxy & GebruikerAgent Tabel verwijderen.',
	'ctracker_ma_desc2' => '<b>Fabrieksinstelling: IP, Proxy & GebruikerAgent Blokker</b><br />Hier kun je de status herstellen van de IP, Proxy & GebruikerAgent databasetabel voor aanvang van deze mod. Je filters worden bovendien ook verwijderd!',
	'ctracker_ma_desc3' => '<b>Verwijder inloggeschiedenis</b><br />Hier kun je alle ingangen van inloggeschiedenis verwijderen, ongeacht de gebruiker en ongeacht de opgegeven hoeveelheid per gebruiker.',
	'ctracker_ma_desc4' => '<b>Wis bestandhashcontroletabel</b><br />Verwijder alle opgeslagen ingangen van het bestandhashcontroletabel.',
	'ctracker_ma_desc5' => '<b>Wis veiligheidsscannertabel</b><br />Verwijderd alle resultaten die zijn opgeslagen in de database tijdens het scannen.',
	'ctracker_ma_succ_main' => 'Proces is succesvol uitgevoerd!',
	'ctracker_ma_err_main' => 'Proces is niet succesvol uitgevoerd!',


/*
 * Miserable User Module in ACP...
 */
	'ctracker_mu_subhead' => 'Vertelt een gebruiker dat ze zich niet goed gedragen en als ze registreren met een andere gebruikersnaam dat ze worden geband. Er is een functie genaamd "Akelige gebruiker", wat vaak is aangevraagd. De CrackerTracker systeem koppelt dit niet met "We lossen onzinnige foutberichten op", welke te transparant is, maar gaat het volgens het principe van "Don\'t feed the Monkey" te werk: Een "akelige gebruiker" is gemarkeerd, en zijn/haar berichten kunnen alleen worden gelezen door de beheerder. Voor andere gebruikers zijn de berichten onzichtbaar, zodat geen een van de gebruikers in aanraking komt met deze probleemmaker en het forum verlaat.<br /><b>Opmerking: <u>Deze functie werkt alleen in de berichten binnen een onderwerp.</u> Bij gebruik van "Citaat" of "Zoeken" dan wordt de berichten van een "Akelige Gebruiker" wel weergegeven!',
	
	'ctracker_mu_select' => 'Markeer gebruiker als Akelige Gebruiker',
	'ctracker_mu_find' => 'Zoek naar gebruikersnamen',
	'ctracker_mu_send' => 'Geef gebruikersnamen in',
	'ctracker_mu_entr' => 'Markeer gebruikersnamen',
	'ctracker_mu_uname' => 'Toegevoegde gebruikersnaam',
	'ctracker_mu_remove' => 'Verwijder ingangen',
	'ctracker_mu_no_defined' => 'Er zijn geen gebruikers gemarkeerd als "Akelige Gebruiker" op dit moment.',


/*
 * Recovery feature in ACP
 */
	'ctracker_rec_head' => 'Systeemherstel',
	'ctracker_rec_subhead' => 'Hier kan je de configuratietabel backuppen van je forum of je kan terug naar het laatst werkende configuratie. Als je deze functie hebt geactiveerd in de algemene instellingen van CrackerTracker, dan wordt het gebackupt elke keer als je wat veranderd in de Algemene Instellingen. (WAARSCHUWING! Het is <b>NIET</b> een backup van het complete database!)<br /><br />Wanneer je niet in de ACP ben na het veranderen van de instellingen, dan kan je de laatste werkende configuratie terugzetten door gebruik te maken van de console van CrackerTracker. Alstublieft lees de bestandsopmerkingen in <i>ctracker/emergency.php</i> voor meer instructies over de forumconfiguraties in een noodgeval. Alstublieft, dat dit bestand moet wel zijn ingeschakeld voordat je het kan gebruiken.<br /><br /><b>WAARSCHUWING!</b> Deze functie moet je alleen gebruiken met serieuze problemen!',
	'ctracker_rec_last_saved' => 'Laatste backup van de configuratietabel: <b>%s</b>',
	'ctracker_rec_never_saved' => 'De configuratietabel is nog niet gebackupt!',
	'ctracker_rec_backup' => 'Backup van configuratietabel',
	'ctracker_rec_restore' => 'Herstel de configuratietabel met de laatstwerkende instellingen',
	'ctracker_rec_succ' => 'De databaseproces is succesvol uitgevoerd.',
	'ctracker_rec_pab' => 'Herstel is niet beschikbaar voordat je een succesvol backup hebt gemaakt!',
	)
);
?>