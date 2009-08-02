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
* (c) 2005 oxpus (Karsten Ude) <webmaster@oxpus.de> http://www.oxpus.de
* (c) hotschi / demolition fabi / oxpus
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
* no help found?
*/
	'Dl_no_help_aviable' => 'Er is geen hulp beschikbaar voor deze optie',

/*
* title of help popup
*/
	'HELP_TITLE' => 'Download MOD Onlinehulp',

/*
* general configuration
*/
	'HELP_Dl_delay_auto_traffic' => 'Geef het aantal dagen in dat een gebruiker automatisch verkeer krijgt.<br />Dit start vanaf de dag van de registratie.<br />Zet op nul om dit uit te schakelen.',
	'HELP_Dl_delay_post_traffic' => 'Geef het aantal dagen in naar waarnaar de gebruiker verkeer gaat krijgen na het plaatsen van berichten.<br />Dit start vanaf de dag van registratie.<br />Zet op nul om uit te schakelen.',
	'HELP_DL_edit_time' => 'Vul hier de tijdsduur in van hoelang een bewerkte download wordt gemarkeerd.<br />Zet op nul om deze functie uit te schakelen.',
	'HELP_Dl_guest_stats_show' => 'Deze optie zal alleen statistieken voor gasten naar buiten brengen.<br />Echter wordt voor beheerders dan nog steeds alle gegevens bewaard.<br />Deze functie zit in het beheerderspaneel.',
	'HELP_Dl_method' => 'De "oude" methode verzond het bestand direct naar de browser.<br />Deze methode kan voor bijna alle browsers worden gebruikt maar dan kon de echt bestandsgrootte niet worden bepaald en niet bepaald worden hoelang het nog zou duren.<br />De nieuwe methode doet dit wel goed maar kan soms fouten opleveren.<br />Gebruik de oude als je problemen hebt met de nieuwe.<br />Als helemaal niks lijkt te werken controleer dan het veld zodat alles direct wordt gedownload. Dit vereist wel een aardige PHP geheugenlimiet.',
	'HELP_Dl_method_quota' => 'Geef hier de downloadgrootte handmatig in. Dit is handig als het bestand erg groot is en je voor de nieuwe methode hebt gekozen.<br />Hieronder zal het bestand door een PHP functie worden binnengehaald, en zal dan direct naar de browser worden verzonden.',
	'HELP_DL_new_time' => 'Geef hier het aantal dagen in dat de download gemarkeerd moet zijn.<br />Zet op nul om deze functie uit te schakelen.',
	'HELP_Download_path' => 'Het relatieve path naar je Icy Phoenix rootmap.<br />De eerste keer van je installatie vind je deze map: "dl_mod/downloads/".<br />Dit is enkel wanneer Linux gebruikt wordt!.<br />De slash aan het eind van de naam is belangrijk, anders werkt het niet. Aan het begin hoeft geen slash te staan.<br />Deze map en alle submappen moeten de CHMOD 777 hebben anders krijg je fouten en werken de functies niet.<br />Onder deze map moet je 1 of meerdere submappen maken voor bestanden via het beheerderspaneel.<br />Het is aangeraden een submap voor elke groep te maken zodat niet alles snel vol komt te zitten.<br />Deze submappen moeten worden ingevoerd relatief aan het root path van de downloads MOD. Meer hierover bij categoriebeheer.<br />Je kan submappen maken via de FTP of door de Toolbox (Zie de link in de rechterhoek van de pagina).',
	'HELP_Dl_thumb_max_size' => 'Zet nul als waarde om plaatjes in alle categorieën uit te zetten.<br />Als je ze wel toestaat vul dan alstublieft nuttige namen in.<br />Als je de plaatjes uitgeschakeld kan je ook de huidige niet meer zien.',
	'HELP_Dl_use_ext_blacklist' => 'Als je een zwarte lijst toevoegt zullen alle nieuwe of gewijzigde downloads met deze extensie worden geweigerd.',
	'HELP_Dl_enable_post_traffic' => 'Zet hier het aantal verkeer neer dat een gebruiker krijgt bij het maken van onderwerpen en het plaatsen van berichten.',
	'HELP_Dl_limit_desc_on_index' => 'Knip de omschrijvingen uit als ze over het dit aantal tekens komen.<br />Zet op nul om deze functie uit te zetten.',
	'HELP_Dl_prevent_hotlink' => 'Deze optie aanzetten betekend dat je zonder op de downloadpagina te kijken een bestand kan downloaden.<br />Deze optie maakt <strong>geen</strong> mapbeveiliging!',
	'HELP_Dl_user_traffic_once' => 'Kies of iets downloaden de gebruikers verkeer verlaagd. Dit hoeft enkel de eerste keer<br /><strong>NB:</strong><br />Deze optie zal de downloadstatus zelf niet veranderen!',
	'HELP_Dl_edit_own_downloads' => 'Als je deze optie aanzet kan iedereen zijn eigen downloads aanpassen zonder beheerder of downloadmoderator te zijn.',
	'HELP_Dl_shorten_extern_links' => 'Voer de lengte van de externe downloadlink in. <br />Gebaseerd op de lengte word de link wellicht wat in het midden verkort.<br />Zet dit op nul als je deze functie wilt uitschakelen.',
	'HELP_Dl_show_footer_legend' => 'Deze optie maakt een legenda aan de onderkant van de pagina van alle iconen die de Download MOD gebruikt.<br />De gebruikte iconen kunnen door deze optie niet worden veranderd.',
	'HELP_Dl_show_footer_stat' => 'Met deze optie kan je de statistieken aan de onderkant van het forum aan en uit zetten.<br />De statistieken zullen nog steeds gegevens verzamelen als je het uitzet, enkel wordt het dan niet meer weergegeven.',
	'HELP_Dl_show_real_filetime' => 'Hiermee kan je in de downloaddetails weergeven wanneer de download voor het laatst is aangepast.<br />Dit is de exacte tijdcode en dus volledig betrouwbaar, op welke manier er ook geupload is.',
	'HELP_Dl_visual_confirmation' => 'Deze optie aanzetten zorgt dat de gebruikers een vijftekencode moeten invullen. Dit is tegen bots.<br />Als de code meerdere malen fout word ingevoerd word de download gestopt en kan de gebruiker niet verder.',
	'HELP_Dl_report_broken' => 'Zet de functie voor het rapporteren van gebroken links aan of uit.<br />Als je het op niet voor gasten zet kunnen enkel geregistreerde gebruikers de downloads rapporteren.',
	'HELP_Dl_report_broken_lock' => 'Als je deze optie aanzet wordt een download gesloten die gerapporteerd is.<br />De download is dan niet te downloaden tot een beheerder of downloadmoderator de download weer opent.',
	'HELP_Dl_report_broken_message' => 'Als een download is gesloten omdat hij geraporteerd is daarover een bericht gezet.<br />Als je dit toestaat zal dit bericht ook komen wanneer een download normaal geblokkeerd is',
	'HELP_Dl_report_broken_vc' => 'Zet de bevestigingscode aan bij het rapporteren van een download.<br />Enkel als de code goed is word het report verstuurd en de beheerders en downloadmoderator krijgen dan een e-mail',
	'HELP_Dl_Links_per_page' => 'Deze optie controleert het aantal downloads op een pagina voor de statistieken in het beheerderspaneel.<br />In de lijst wordt de optie: onderwerpen per pagina gebruikt.',
	'HELP_Number_recent_dl_on_portal' => 'Het aantal laatste downloads dat gebruikers ziet op de portaalpagina.<br />Het blok gebruikt de laatste tijden voor het blok van alle downloads. Dus als je weinig downloads hebt is het mogelijk dat je hele oude downloads ziet.',
	'HELP_DL_posts' => 'Elke gebruikers kan een limiet niet overschreden voor downloads. Ook de beheerders en downloadmoderators niet.<br />Het is aan te raden ook een Anti-Spam MOD te installeren omdat mensen anders gaan spammen voor berichten.<br />Zet op 0 om uit te schakelen, dit is aan te raden voor kleine forums.',

	'HELP_Dl_physical_quota' => 'Downloads kunnen worden opgeslagen in het beheerderspaneel.<br />Als deze limiet gehaald is kunnen downloads nog enkel via de FTP worden toegevoegd.',
	'HELP_Dl_overall_traffic' => 'Dit totale limiet van het aantal downloads over de hele maand kan niet overschreden worden.<br />Als deze limiet wel gehaald wordt, wordt de download gemarkeerd en geblokkeerd. Dan kan ook niemand hem meer downloaden.',
	'HELP_Dl_newtopic_traffic' => 'Voor elk nieuw geopende onderwerp krijgt de gebruiker het hier aantal ingevulde verkeer erbij gestort.',
	'HELP_Dl_reply_traffic' => 'De gebruiker zal voor elke reactie die hij plaatst verkeer krijgen.',
	'HELP_Dl_stop_uploads' => 'Je kan uploads met deze uploads toestaan of niet.<br />Als je het niet toestaat kunnen enkel beheerders bestanden uploaden.<br />Als je het wel toestaat kunnen enkel gebruikers met de juiste permissies het.',
	'HELP_Dl_upload_traffic_count' => 'Als deze optie aanstaat is het verkeer lager dan anders komend totaal.<br />Als dit limiet is gehaald kunnen er enkel nog maar via het beheerderspaneel en de FTP downloads worden geupload.',
	'HELP_Dl_thumb_max_dim' => 'Deze waarde kan misschien de grootte van de bestanden beinvloeden.<br />Zet op 0 om het plaatje uit te zetten (niet aan te raden).<br />Bestaande plaatjes worden ook weggehaald als de waarde op 0 word gezet.',
	'HELP_Dl_disable_email' => 'Met deze optie bepaal je of e-mailberichten door het forum voor de downloaddatabase kunnen worden verstuurd.',
	'HELP_Dl_disable_popup' => 'Met deze optie maak je het mogelijk dat mensen een pop-up bericht krijgen als er een nieuwe download beschikbaar is in een bepaalde categorie..<br />Als deze optie aan staat kan je per download bepalen of er een pop-up voor word gedaan of niet.<br />Enkel een gebruik die dit zelf aan heeft gezet zal de pop-up dan zien, niet iedereen.<br />Ze kunnen deze instellingen aan de onderkant van de downloadpagina vinden en aanpassen.',
	'HELP_Dl_disable_popup_notify' => 'Als je deze optie aanzet kunnen gebruikers enkel beperkte tijd hun download aanpassen.',
	
	'HELP_Dl_stat_perm' => 'Selecteer hier welk gebruikersniveau iemand op de downloadspagina heeft.<br />Als je iemand de rang downloadmoderator geeft kan hij dus ook deze pagina ok. Let op! Een forummoderator is iets anders!<br />Let wel dat dit een pagina is met hoge laadtijd en het is niet aan te raden deze keer op keer voor niks te laden.',
	'HELP_Dl_hotlink_action' => 'Hier kies je hoe het downloadscript zal reageren als je het download.<br />Het zal een bericht weergeven of je rechtstreeks naar de download doorsturen.',
	'HELP_Dl_use_hacklist' => 'Deze optie zet de hacklijst aan en uit.<br />Als het ingeschakeld is kunnen gebruikers hacks toevoegen aan de lijst voor enkele downloads zodat deze de downloadende gebruikers kunnen helpen.<br />Als je het niet wilt toestaan word de hele lijst verborgen maar je kan het altijd voor wel toestaan. Dan komt de lijst weer terug.<br />Let op! Je verliest wel alle hacks als je het bestand wijzigt terwijl de hacklijst uitstaat.',
	'HELP_Dl_icon_free_for_reg' => 'Deze optie veranderd het witte icoontje (gratis download voor geregistreerde gebruikers) ook voor gasten in wit.<br />Als je deze optie uitzet zullen gasten in plaats van wit, rood zien.',
	'HELP_Dl_latest_comments' => 'Deze optie geeft een aantal opmerkingen weer als je hem inschakelt. Vul hier nul in het blok uit te zetten.',
	'HELP_Dl_sort_preform' => 'De optie "Preset" zal alle downloads in het beheerderspaneel sorteren.<br />Met de optie "Gebruiker" kan gekozen worden op welke manier deze weergegeven gaan worden.',

/*
* category management
*/
	'HELP_Dl_approve_comments' => 'Als je deze optie uitschakelt dan zal een moderator elke reactie eerst moeten goedkeuren voordat andere gebruikers hem kunnen zien.',
	'HELP_Dl_cat_rules' => 'Deze regels worden bij de downloads en overal in de categorie weergegeven.',
	'HELP_Dl_stats_prune' => 'Zet het nummer van aantal regels dat er mogen komen voor de statistieken.<br />Elke nieuwe die over de limiet gaat verwijderd de oudste<br />Zet op nul op uit te zetten.',
	'HELP_Dl_cat_traffic' => 'Vul een maximum aantal verkeer voor deze categorie in.<br />Dit verkeer zal niet opgeteld worden bij het algemene verkeer!<br />Zet op nul voor geen limiet.',
	'HELP_Dl_cat_path' => 'Hier moet je een bestaande pad naar al je downloads invullen.<br />Dit moet een submap zijn van je Icy Phoenix installatie.(voorbeeld: /downloads) <br />Vul de mapnaam in met een slash op het eind .<br />Als de map bijvoorbeeld downloads/mods is moet je bij pad dit invullen: mods/".<br />Als je dit formulier verzend is de map opgesteld.<br />Wees zeker dat deze map echt bestaat!<br />Als het is een submap is dan moet je het ook zo invullen.<br />Voorbeeld: Het pad is downloads/mods/download dat je dan: mods/download/ invult.<br />Als je een Linux server hebt zorg dan dat de map 777 geCHMOD is.',
	'HELP_Dl_cat_name' => 'Dit is de naam van de categorie die overal getoond word.<br />Probeer speciale tekens te vermijden aangezien dit problemen kan opleveren.',

	'HELP_Dl_cat_description' => 'Een kleine omschrijving voor deze categorie.<br />BBcodes zijn hier niet mogelijk.<br />Deze beschrijving wordt op de index van de downloadpagina en bij alle subcategorieen weergegeven.',
	'HELP_Dl_cat_parent' => 'De categorie boven deze categorie.<br />Met dit dynamische menu kan je elke structuur maken die je wilt.',
	'HELP_Dl_must_approve' => 'Zet dit op Ja als je wilt dat een downloadmoderator of beheerder elke nieuwe download in deze categorie moet goedkeuren.<br />Zij zullen een e-mail krijgen bij ongekeurde downloads.',
	'HELP_Dl_mod_desc_allow' => 'Staat modinformatieblok toe bij het toevoegen of veranderen van downloads.',
	'HELP_Dl_statistics' => 'Sta details over de bestanden toe.<br />Deze details moeten de database wel meer query\'s laten uitvoeren en dit kan tijd kosten.',
	'HELP_Dl_comments' => 'Activeer het opmerkingensysteem.<br />Gebruikers die je dit toestaat kunnen bestanden bekijken en plaatsen.<br />Beheerders en downloadmoderators kunnen alles zien en bewerken/verwijderen, de makers kunnen hun eigen bewerken.',
	'HELP_Dl_thumb_cat' => 'Deze optie staat plaatjes bij downloads toe.<br />De grootte van deze plaatjes moet worden installatie bij de algemene configuratie.',
	'HELP_Dl_bug_tracker_cat' => 'Opent de bugtracker in deze categorie.<br />Bugs kunnen worden geplaatst en beken worden door iedere gebruiker in deze categorie.<br />Enkel beheerders en moderators kunnen deze bugs in behandeling nemen.<br />Bij elke verandering met betrekking tot de bug worden het teamlid die aan de bug werkt en de bugmelder geinformeerd met een e-mailbericht.',

/*
* file management
*/
	'HELP_Dl_name' => 'Dit zijn de namen van de downloads die op verschillende plaatsen worden weergegeven.',
	'HELP_Dl_choose_category' => 'Kies de categorie voor deze download.<br />Het bestanden moet eerst in de eerder aangegeven map staan voordat ze opgeslagen worden.<br />Anders krijg je een foutmelding.',
	'HELP_Dl_file_description' => 'Een kleine omschrijving van de download.<br />Dit word ook in de downloadcategorie gezet.<br />BBCodes kunnen hierin niet gebruikt worden.<br />Vul hier enkel een klein tekst in anders krijgt het forum een hoge laadtijd.',
	'HELP_Dl_files_url' => 'De bestandsnaam van deze download.<br />Vul hier de naam in zonder slash of pad.<br />Het bestanden moet al geupload zijn voordat je het toevoegt anders komt er een foutmelding.<br />Let op bij verboden extensies de bestanden zonder pardon geblokkeerd worden.',
	'HELP_Dl_upload_file' => 'Upload het bestand van je computer.<br />Als de extensie van je bestand niet overeenkomt maar een van de hieronder genoemden kan de bestandsgrootte afwijken.',
	'HELP_Dl_extern' => 'Externe uploads activeren.',
	'HELP_Dl_extern_up' => 'Klik hier als je de functie externe uploads wil toevoegen (http://www.voorbeeld.nl/media.mp3)',
	'HELP_Dl_thumb' => 'Hier kan je een klein plaatje uploaden voor onder de downloaddetails.<br />Als er al een is kan je hier je nieuwe uploaden en het veranderen.<br />Enkel bij het al bestaande plaatje op "verwijder" drukken.',
	'HELP_Dl_is_free' => 'Deze optie inschakelen maakt de download gratis voor iedereen.<br />Verkeer zal dan niet worden gebruikt.<br />Kiezen voor enkele geregistreerde gebruikers gratis of iedereen is mogelijk.',
	'HELP_Dl_traffic' => 'Het maximale verkeer dat wordt toegestaan in de procedure.<br />Een waarde van nul schakelt het verkeer uit.',

	'HELP_Dl_approve' => 'Dit zal de download goedkeuren en zal meteen kunnen worden gedownload.<br />Anders wordt de download verborgen voor gebruikers.',
	'HELP_Dl_no_change_edit_time' => 'Controleer deze optie om te zorgen dat er niet meer of beperkte tijd kan worden aangepast na de toevoeging.<br />Dit zal notificaties niet uitmaken.',
	'HELP_Dl_disable_popup_files' => 'Zet deze optie aan als je geen pop-ups wil, ongeacht wat de gebruiker invult.',
	'HELP_Dl_disable_email_files' => 'Zet deze optie aan voor de stoppen van de berichten sturend door de Download MOD.<br />Dit heeft geen effect voor pop-up berichten van het forum op het moment.',
	'HELP_Dl_hacklist' => 'Met deze knop kan je de download toevoegen aan de lijst (moet wel toegestaan zijn) als hier Ja gezet word.<br />Op Nee zetten veroorzaakte dat de download niet toegevoegd word!',
	'HELP_Dl_hack_version' => 'De versie van de download.<br />Dit zit altijd in de download.<br />Je kan er niet op zoeken.',
	'HELP_Dl_hack_autor' => 'De uploader van de download.<br />Laat dit leeg als je wilt dat dit op de downloadpagina niet weergegeven zal worden.',
	'HELP_Dl_hack_autor_email' => 'Het e-mail adres van de uploader.<br />Laat dit leeg als je wilt dat dit op de downloadpagina niet weergegeven zal worden.',
	'HELP_Dl_hack_autor_website' => 'De website van de uploader.<br />Dit moet niet de pagina van de Download zijn!<br />Vul geen content in naar verboden sites of sites die verborgen zijn.',
	'HELP_Dl_hack_dl_url' => 'De pagina voor een alternatieve download van het bestand.<br />Dit kan de website van de uploader zijn of een andere site.<br />Vul geen direct link in als de auteur hier geen toestemming toe geeft.',
	'HELP_Dl_mod_desc' => 'Gedetailleerde omschrijvingen van de downloads.<br />Je kan hier BBCodes en smilies gebruiken.<br />Dit wordt alleen bij de downloaddetails weergegeven.',
	'HELP_Dl_mod_list' => 'Activeer dit blok in de downloaddetails.<br />Als je deze optie niet aanzet wordt het hele blok niet weergegeven.',
	'HELP_Dl_mod_require' => 'Enkele MODs die enkel geinstalleerd moeten zijn voor deze download.<br />Deze tekst zal enkel worden weergegeven in de downloaddetails.',
	'HELP_Dl_mod_test' => 'Kijk hier op welke phpBB versie dit is getest.<br />Zet hier enkel de versie van je testforum.<br />Het script zal het laten zien als phpBB X, Dus je moet enkel hier de X (versienummer) zetten.<br />Deze tekst zal enkel worden weergegeven in de downloaddetails.',
	'HELP_Dl_mod_todo' => 'Hier kan je de volgende stappen in de ontwikkeling van de download plaatsen.<br />Dit maakt een doenlijst aan de onderkant van de pagina.<br />Met deze lijst kan de gebruiker zien wat er nog verwacht wordt.<br />Het is nog steeds enkel tekst, BBCodes zijn niet toegestaan..<br />Zelfs als het blok is uitgeschakeld word de doenlijst weergegeven.',
	'HELP_Dl_mod_warning' => 'Belangrijk advies over de MOD die de downloaders moeten weten.<br />Deze tekst word in een andere kleur getoond (standaard is dit rood).<br />Enkel gewone tekst!<br />BBCodes kunnen niet gebruikt worden.',

	'HELP_Dl_user_download_limit_flag' => 'This option lets you specify a limit for the number of downloads per month for each user. E.G.: if you enable this and if you set the "Max number of downloads per month" equal to 30, then each user can download only 30 files per month. This limit won\'t be applied to administrators and moderators.',
	'HELP_Dl_user_download_limit' => 'Specify the maximum number of downloads allowed per month for each user. This limit has to be enabled with the switch called "Limit number of downloads per month". This limit doesn\'t apply to administrators and moderators.',
	)
);

?>