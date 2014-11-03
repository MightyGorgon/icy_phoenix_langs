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
	'Dl_no_help_aviable' => 'Det finns ingen hjälp tillgänglig för detta alternativ',

/*
* title of help popup
*/
	'HELP_TITLE' => 'Download MOD Online Hjälp',

/*
* general configuration
*/
	'HELP_Dl_delay_auto_traffic' => 'Ange dagar varefter en ny användare kommer att få den första auto trafiken.<br />Fördröjningen börjar med registreringsdagen.<br />Ange 0 för inaktivering.',
	'HELP_Dl_delay_post_traffic' => 'Ange antal dagar varefter en ny användare kommer att få den första trafik för inlägg.<br />Fördröjningen börjar med registreringsdagen.<br />Ange 0 för inaktivering.',
	'HELP_DL_edit_time' => 'Ange antalet dagar hur länge en redigerad nedladdning kommer att märkas för.<br />Ange 0 för inaktivering.',
	'HELP_Dl_guest_stats_show' => 'Detta alternativ kommer endast inkludera eller exkludera den statistiska datan om gäster från allmänhets kategori statistiken.<br />Scriptet kommer fortfarande samla in alla uppgifter.<br />ACP statistikverktyg visar alltid fullständiga statistiska uppgifter.',
	'HELP_Dl_method' => 'Den "gamla" metoden kommer att skicka filen direkt till webbklienten.<br />Denna metod är kompatibel med de flesta webbmiljö, men kan inte visa den verkliga filstorleken vid nedladdning, så att användar klienten kan inte beräkna den återstående tid för nedladdningen.<br />Den "nya" metoden kommer att visa den verkliga filstorleken, men det kan ge fel.<br />Använd den "gamla" metoden, om du har problem med den nya.<br />Om ingenting fungerar, markera rutan "direkt" för att länka hämtningen direkt till filen på servern om denna är större än PHP minnesgränsen.',
	'HELP_Dl_method_quota' => 'Ställ in filstorleken här från vilken den chunked filen kommer att läsas som en stor fil om du har valt den "nya" nedladdningsmetod.<br />Inom ramen för denna kvot kommer filen att hämtas från Readfile (); och skickas direkt till webbklienten.',
	'HELP_DL_new_time' => 'Ange hur länge en ny nedladdning markeras(i dagar).<br />Ange 0 för inaktivering av denna funktion.',
	'HELP_Download_path' => 'Den relativa sökvägen i din icyphoenix root mapp.<br />Under den första installationen av detta paket hittar du värde "downloads /".<br />Betrakta skiftkänsliga namn när du byter namn på mappen om du använder Unix/Linux.<br />Det snedstreck i slutet av mappnamnet är obligatoriskt, men lägg inte till ett snedstreck i början.<br />Detta och alla ingående undermappar måste vara CHMOD 777 så att alla funktioner ska fungera.<br />Under denna mapp måste du skapa en eller flera undermappar som kommer att innehålla alla fysiska filer.<br />Det rekommenderas att skapa en undermapp för varje logisk grupp av kategorier.<br />Denna undermapp måste anges som en sökväg i kategorin med samma syntax som huvudmappen, men utan att använda huvudmappen (för mer information, läs hjälpen i kategori hanteringen).<br />Du kan skapa fler undermappar genom att använda en ftp-klient eller genom att använda Verktygslådan (se länken längst upp till höger på denna sida).',
	'HELP_Dl_thumb_max_size' => 'Ange 0 som filstorlek för att inaktivera miniatyrer i alla kategorier.<br />Om du tillåter miniatyrbilder ange då användbara bildstorlekar för nya miniatyrbilder.<br />Om du inaktiverar miniatyrbilder kommer du inte att kunna se befintliga miniatyrbilder i nedladdnings detaljerna.',
	'HELP_Dl_use_ext_blacklist' => 'Om du aktiverar den svarta listan, kommer alla angivna filtyper att blockeras för nyuppladdade eller redigerade nedladdningar.',
	'HELP_Dl_enable_post_traffic' => 'Ställ in hur mycket trafik en användare kommer att få för att skapa ett nytt meddelande, svara eller citera etc, i nästa två alternativ.',
	'HELP_Dl_limit_desc_on_index' => 'Skär beskrivningarna efter det angivna antalet tecken.<br />Ange 0 för inaktiveringe.',
	'HELP_Dl_prevent_hotlink' => 'Aktivera det här alternativet om du vill förhindra varje direkt nedladdningslänk från nedladdnings detaljerna.<br />Det här alternativet gör <b>ej</b> bygger skydd mapp!',
	'HELP_Dl_user_traffic_once' => 'Välj om nedladdningar bara ska minska användartrafik vid första nedladdningen.<br />Detta alternativ kommer inte att ändra nedladdnins statusen själv!',
	'HELP_Dl_edit_own_downloads' => 'Om du aktiverar det här alternativet, kommer varje användare att kunna redigera sina egna uppladdade filer.',
	'HELP_Dl_shorten_extern_links' => 'Ange längden på den visade externa nedladdningslänken på nedladdnings detaljerna.<br />Baserat på längden av länken kommer den att skäras på mitten, eller förkortas - med början från höger sida.<br />Lämna detta fält tomt eller ange 0 för inaktivering.',
	'HELP_Dl_show_footer_legend' => 'Detta alternativ kommer att vända legenden på nedladdningens statusikoner i nedladdnings sidfoten på eller av.<br />Ikonerna som är bredvid nedladdningar ändras inte av det här alternativet.',
	'HELP_Dl_show_footer_stat' => 'Detta alternativ kommer att dölja eller visa statistik linjer i nedladdnings sidfoten.',
	'HELP_Dl_show_real_filetime' => 'Visa den verkliga senaste redigerings tiden för ladda ner filer i nedladdnings detaljerna.<br />Detta är den exakta tidskoden, även om filer laddas upp med en ftp-klient eller inte uppdateras under redigerings nedladdningen.',
	'HELP_Dl_visual_confirmation' => 'Aktivera det här alternativet för att tvinga användaren mata in en 5 siffrig bekräftelsekod för att komma åt nedladdningen.<br />Om användaren inte anger koden korrekt visar MOD ett meddelande och stoppar nedladdningen.',
	'HELP_Dl_report_broken' => 'Vrid på eller av funktionen för att rapportera brutna nedladdningar.<br />Om du ställer den på "inte för gäster", kan endast registrerade användare rapportera nedladdningar.',
	'HELP_Dl_report_broken_lock' => 'Om du aktiverar det här alternativet kommer nedladdningen att vara låst när den redovisas som bruten.<br />Det kommer att dölja nedladdningsknappen och ingen kan ladda ner filen tills en administratör eller nedladdnings Moderator har låst upp den.',
	'HELP_Dl_report_broken_message' => 'Om en nedladdning redovisas som bruten, kommer ett meddelande att visas.<br />Om du aktiverar det här alternativet visas meddelandet bara när nedladdningen är låst.<br />I det här fallet inte under utan nedladdningsknappen ersätts.',
	'HELP_Dl_report_broken_vc' => 'Möjliggör visuell bekräftelse om en användare önskar att rapportera en trasig nedladdning.<br />Om koden var korrekt, kommer rapporten att sparas och Administratörer och nedladdnings Moderatorer kommer att informeras via e-post.',
	'HELP_Dl_Links_per_page' => 'Detta alternativ kontrollerar, hur många nedladdningar som kommer att visas på varje kategori och få ACP statistik.<br />I hacklista och översiktslistan, kommer forum inställningen "ämnen per sida" att användas.',
	'HELP_Number_recent_dl_on_portal' => 'Antalet senaste nedladdningar användare kan se på portalen.<br />Notera: Block tolkar den senaste redigerings tiden för denna lista, så det är möjligt att ha en äldre nedladdning på toppen av denna lista.',
	'HELP_DL_posts' => 'Varje användare, Administratör och Nedladdnings Moderator, måste minst ha gjort detta antal inlägg för att kunna ladda ner icke-fria nedladdningar.<br />Det rekommenderas att du också installera ett Anti-Spam MOD för att undvika spam inlägg.<br />Ange 0 för att inaktivera. (rekommenderas för unga forums).',

	'HELP_Dl_physical_quota' => 'Den övergripande fysiska gränsen MOD kommer att kunna använda för att spara och hantera nedladdnings.<br />Om denna gräns nås, kan nya hämtningar bara läggas till när de laddas upp med en ftp-klient och läggs till med filhanteringen i ACP.',
	'HELP_Dl_overall_traffic' => 'Den allmänna gränsen för alla nedladdningar och, om det är aktiverat - omfattar också alla uppladdningar som inte kan överskridas i den aktuella månaden.<br />Efter att ha nått denna gräns kommer varje nedladdning att märkas och låsas och, om de är aktiverade, kommer uppladdningar vara omöjligt också.',
	'HELP_Dl_newtopic_traffic' => 'För varje nytt postat ämne kommer författaren att få in trafik på toppen av sin trafikmängd.',
	'HELP_Dl_reply_traffic' => 'För varje nytt svar och citat kommer användaren att få in trafik på toppen av sin trafikmängd.',
	'HELP_Dl_stop_uploads' => 'Aktivera eller inaktivera uppladdning med detta alternativ.<br />Om du inaktiverar det här alternativet kommer endast administratörer att kunna ladda upp nya filer.<br />Aktivera det här alternativet för att låta användare ladda upp, beroende på kategori- och gruppbehörigheter.',
	'HELP_Dl_upload_traffic_count' => 'Om alternativet är aktiverat, kommer uppladdningar att sänka den månatliga totala trafiken också.<br />Efter att den allmänna gränsen har nåtts kommer någon uppladdning inte att vara möjligt och nya nedladdningar måste laddas upp med en ftp-klient och läggas i ACP.',
	'HELP_Dl_thumb_max_dim' => 'Detta värde kommer att begränsa den möjliga bildstorlek på uppladdade miniatyrbilder.<br />Ange 0 för att inaktivera miniatyrbilder (rekommenderas inte om miniatyrbildens filstorlek redan har ställts in).<br />Befintliga miniatyrbilder kommer fortfarande att visas innan du ändrar detta.',
	'HELP_Dl_disable_email' => 'Aktivera eller inaktivera e-postmeddelande om nya, tillagda eller redigerade nedladdningar.<br />Även när denna funktion är aktiverad här, kan man individuellt avaktivera när du lägger till eller redigerar en nedladdning.<br />Endast användare som har aktiverat e-postmeddelanden om nya eller redigerade nerladdningar i deras nedladdnings konfiguration kommer att ta emot dem.',
	'HELP_Dl_disable_popup' => 'Aktivera eller inaktivera popup-meddelanden eller forum meddelande i forumets header om nya, tillagda eller redigerade nedladdningar.<br />Även när denna funktion är aktiverad här, kan man individuellt avaktivera när du lägger till eller redigerar en nedladdning.<br />Endast användare som har aktiverat popup meddelanden om nya eller redigerade nerladdningar i deras nedladdnings konfiguration kommer att ta emot dem.',
	'HELP_Dl_disable_popup_notify' => 'Om det här alternativet är aktiverat kan du inaktivera den för att ändra redigeringstiden medan du redigerar en nedladdning.',

	'HELP_Dl_stat_perm' => 'Välj från vilken användarnivå användare kan visa nedladdnings statistiks sidan.<br />T.ex. om du aktiverar den för Download Moderatorer, administratörer och nedladdnings moderatorer (inte forum moderator!) kan de öppna och visa den här sidan.<br />Observera att den här sidan kan producera en tung last, så vi rekommenderar att du inte öppna den för massorna om du har en stort forum och/eller hanterar många nedladdningar.',
	'HELP_Dl_hotlink_action' => 'Välj hur nedladdnings skriptet bör reagera när det förhindrar en direkt länk till en nedladdning (se även det sista alternativet).<br />Det kommer att visa ett meddelande (minskar belastningen på servern) eller det omdirigerar till nedladdningen (ger ytterligare trafik).',
	'HELP_Dl_use_hacklist' => 'Växla hacklist på eller av.<br />Om funktionen är aktiverad kan du ange hacka information samtidigt som du lägger till eller redigerar en nedladdning och sätter in nedladdningen i hacklistan.<br />Om du inaktiverar hacklistan kommer den att vara helt dold från varje användare som om den inte är installerad, men du kan aktivera den när som helst.<br />Notera: Varje hack information i nedladdningar kommer att gå förlorade om du redigerar filen efter att hacklistan inaktiverades.',
	'HELP_Dl_icon_free_for_reg' => 'Slå på den vita ikonen för nedladdning (gratis nedladdning för registrerade användare och gäster.)<br />Om du inaktiverar det här alternativet, kommer gästerna se den röda ikonen istället för den vita.',
	'HELP_Dl_latest_comments' => 'Det här alternativet visar den senaste X-kommentaren på nedladdnings detaljerna. Ange 0 för att inaktivera.',
	'HELP_Dl_sort_preform' => 'Alternativet "Preset" kommer att sortera alla nedladdningar i alla kategorier för alla användare som de är sorterade i ACP.<br />Med alternativet "User" kan varje användare välja hur nedladdningar kommer att sorteras för honom/henne även om denna sortering är fast eller utvidgas till andra sorteringskriterier.',

/*
* category management
*/
	'HELP_Dl_approve_comments' => 'Om du inaktiverar det här alternativet, måste varje ny kommentar godkännas av en nedladdnings moderator eller administratör innan andra användare kan se dem.',
	'HELP_Dl_cat_rules' => 'Dessa regler kommer att visas under underkategorierna och nedladdningar medan du tittar på kategori.',
	'HELP_Dl_stats_prune' => 'Ange antal datarader som statistiken för denna kategori kan nå.<br />Varje ny rad raderar den äldsta.<br />Ange 0 för att inaktivera beskärning.',
	'HELP_Dl_cat_traffic' => 'Ange högsta månatliga trafik för denna kategori.<br />Denna trafik ökar inte den totala trafiken!<br />Ange 0 för att inaktivera den gränsen.',
	'HELP_Dl_cat_path' => 'Du måste ange en befintlig sökväg till dina nedladdningar.<br />Detta värde måste vara namnet på en undermapp under huvudmappen (t.ex. downloads/) 
    som du har definierat i huvudkonfigurationen.<br />Ange mappnamn med ett snedstreck i slutet.<br />Till exempel, om mappen existerar "downloads/mods/" måste du ange en kategori sökväg bara "mods/".<br />Om du skickar detta formulär kommer mappen att kontrolleras.<br />Var säker, på att hela undermappen verkligen existerar!<br />Om mappen är en undermapp till en undermapp anger du hela hierarkin här.<br />T.ex. "downloads/mods/misc/" måste anges som kategori sökväg "mods/misc/".<br />Se till att varje undermapp har CHMOD 0777 tillstånd och små bokstäver i mappnamn om du använder Unix/Linux.',
	'HELP_Dl_cat_name' => 'Detta är namnet på den kategori som visas vid varje punkt.<br />Försök att undvika speciella tecken för att undvika förvirrade poster i JumpBox.',

	'HELP_Dl_cat_description' => 'En kort beskrivning för denna kategori.<br />BBKoder är inte tillgängliga här.<br />Denna beskrivning kommer att visas på nedladdningsr index och på underkategorier.',
	'HELP_Dl_cat_parent' => 'Huvudnivån eller en annan kategori denna kategori kan vara förenad med.<br />Med denna dynamiska kombination kan du bygga hierarkiska strukturer för dina nedladdningar.',
	'HELP_Dl_must_approve' => 'Aktivera det här alternativet för att godkänna varje ny uppladdade nedladdnings fil innan den visas i den här kategorin.<br />Administratörer och Nedladdnings Moderatorer kommer att få ett mail om varje ny icke godkänd nedladdning.',
	'HELP_Dl_mod_desc_allow' => 'Aktiverar mod informationsblocket medan du lägger till eller redigerar en nedladdning.',
	'HELP_Dl_statistics' => 'Aktiverar detaljerad statistik om filerna.<br />Observera att denna statistik ger extra databasfrågor och datamängder i en separat tabell.',
	'HELP_Dl_comments' => 'Aktivera kommentar systemet för denna kategori.<br />Användare som du kan aktivera med uppkommande drop-downs, kan visa och/eller skriva kommentarer i denna kategori.<br />Administratörer och Nedladdnings Moderators kan redigera och radera alla kommentarer, och författare kan hantera sin egen text.',
	'HELP_Dl_thumb_cat' => 'Aktivera miniatyrbilder på nedladdningar i denna kategori.<br />Storleken på dessa bilder kommer att baseras på inställningarna i huvud konfigurationen i detta MOD.',
	'HELP_Dl_bug_tracker_cat' => 'Aktiverar Bug Tracker för nedladdningar i denna kategori.<br />Buggar kan postas och ses av varje registrerad användare för de relaterade nedladdningarna och från andra kategorier, om Bug tracker aktiveras globalt.<br />Endast Administratörer och Forum Moderatorer kan hantera buggar.<br />För varje uppdatering av bugg-status kommer, författaren och teammedlem som arbetar med buggar, att få ett e-postmeddelande',

/*
* file management
*/
	'HELP_Dl_name' => 'Detta är namnet på de nedladdningar som visas på de olika platserna.<br />Försök att undvika speciella tecken för att minska visnings fel.',
	'HELP_Dl_choose_category' => 'Välj den kategori som kommer att inkludera denna nedladdning.<br />Filen måste redan sparas i den mapp du har angett i kategori hanteringen innan du kan spara den hämtade filen. <br /> Annars får du ett felmeddelande.',
	'HELP_Dl_file_description' => 'En kort beskrivning för denna nedladdning.<br />Detta kommer att visas i nedladdnings kategorin.<br />BBKoder är avstängda för den här texten.<br />Ange bara en kort beskrivning för att minska tunga data laster samtidigt som du öppnar kategorin.',
	'HELP_Dl_files_url' => 'Filnamnet för denna nedladdning.<br />Ange detta namn utan inledande fil sökväg eller snedstreck.<br />Filen måste finnas innan du sparar den här nedladdningen annars får du ett felmeddelande.<br />Obs! förbjudna filändelser: Varje fil som har ett föbjuden filändelser kommer att blockeras.',
	'HELP_Dl_upload_file' => 'Ladda upp fil från din dator.<br />Var noga med, att filstorleken är mindre än den visade gränsen och filändelsen ingår inte i listan som du kan se under detta fält.',
	'HELP_Dl_extern' => 'Aktivera denna funktion för den externa filen du anger i fältet ovan (http://www.example.com/media.mp3).<br />Funktionen "free" blir obetydlig.',
	'HELP_Dl_extern_up' => 'Aktivera denna funktion för en extern fil som du skriver in i det högra fältet (http://www.example.com/media.mp3). Funktionen "free" blir obetydlig.',
	'HELP_Dl_thumb' => 'Detta fält kan ladda upp en liten bild (notera visnings filstorlek och bild mått under detta fält) för att visa den i nedladdnings detaljerna.<br />Om det redan finns en befintlig miniatyrbild kan du ladda upp en ny för att ersätta den.<br />Kontrollera den befintliga miniatyrbilden för "delete" för att släppa den.',
	'HELP_Dl_is_free' => 'Aktivera denna funktion om nedladdningen är gratis att ladda ner för alla.<br />Trafik konton kommer inte att användas.<br />Välj gratis för reg. Användare för att möjliggöra en gratis nedladdning endast för registrerade användare.',
	'HELP_Dl_traffic' => 'Den maximala trafiken en fil kommer att tillåtas att producera.<br />Värdet 0 inaktiverar trafikkontroll',

	'HELP_Dl_approve' => 'Detta kommer att godkänna nedladdningen direkt när du skickar formuläret.<br />Å andra sidan kommer den här nedladdningen att döljas för användare.',
	'HELP_Dl_no_change_edit_time' => 'Markera detta alternativ för att undertrycka till att uppdatera den senaste redigeringstiden för denna nedladdning.<br />Detta kommer inte att påverka e-post och popup anmälan/forum meddelande.',
	'HELP_Dl_disable_popup_files' => 'Markera detta alternativ för att undertrycka popup anmälan/forum meddelande.<br />Detta påverkar inte de e-postmeddelanden eller uppdatering av den senaste redigerings tiden.',
	'HELP_Dl_disable_email_files' => 'Markera detta alternativ för att undertrycka e-postmeddelande.<br />Detta påverkar inte de e-postmeddelanden eller uppdatering av den senaste redigerings tiden.',
	'HELP_Dl_hacklist' => 'Lägg till denna nedladdning till hacklistan? (detta måste aktiveras i huvudkonfigurationen).<br />Nej. kommer inte att lägga till nedladdningen i hacklistan.<br />\'Visa extra information\' visar detta block endast i nedladdnings detaljerna.',
	'HELP_Dl_hack_version' => 'Deklarationen om nedladdnings frigörande.<br />Detta kommer att vara hela tiden som visas bredvid nedladdning.<br />Du kan inte söka efter detta.',
	'HELP_Dl_hack_autor' => 'Författaren till denna nedladdnings fil.<br />Lämna det här tomt för att dölja detta värde på nedladdnings uppgifterna och helhetssynen.',
	'HELP_Dl_hack_autor_email' => 'E-postadressen till författaren.<br />Om du inte anger det här, kommer det att vara dolt på nedladdnings uppgifterna och helhetssynen.',
	'HELP_Dl_hack_autor_website' => 'Webbplatsen för författaren.<br />Denna URL bör vara webbplatsen för författaren, inte sidan för nedladdning (inte alltid samma).<br />Vänligen skriv inte in länkar till skyddade sidor eller webbplatser med osäkra innehåll.',
	'HELP_Dl_hack_dl_url' => 'Sidan till en alternativ nedladdning för den här filen.<br />Detta kan vara den webbplatsen för författaren eller annan alternativ hemsida.<br />Vänligen skriv inte in länkar för en direkt nedladdning om författaren inte tillåter detta.',
	'HELP_Dl_mod_desc' => 'Detaljerade beskrivningar om MOD.<br />Du kan använda BBKoder och Smileys i denna text.<br />Radmatningar kommer alla att formateras.<br />Denna text kommer endast att visas i nedladdnings detaljerna.',
	'HELP_Dl_mod_list' => 'Aktivera detta block i nedladdnings detaljerna.<br />Om du inte aktiverar det här alternativet kommer det kompletta blocket inte att visas.',
	'HELP_Dl_mod_require' => 'Deklarationer som andra MODs en användare behöver installera eller använda denna nedladdning för.<br />Denna text kommer endast att visas i nedladdnings detaljerna.',
	'HELP_Dl_mod_test' => 'Försäkrar på vilken Icy Phoenix detta MOD testades successfullty.<br />Skriv bara utgåvan från test forumet.<br />Scripter kommer att visa det som phpBB X, så du måste bara ange X här.<br />Denna text kommer endast att visas i nedladdnings detaljerna.',
	'HELP_Dl_mod_todo' => 'Ange nästa steg som du har planerat för detta MOD eller vad som för närvarande är i arbete.<br />Detta kommer att skapa en lista ToDo som kan öppnas från nedladdnings sidfoten.<br />Med denna text kommer en användare att informeras om de senaste statusen för detta MOD.<br />Radmatningar formateras, BB-koder är inte tillgängliga här.<br />Att göra-listan kommer fortfarande att fyllas öven med detta block som inaktiverat.',
	'HELP_Dl_mod_warning' => 'Viktiga råd om detta MOD som måste betraktas på installation med eller interaktion med andra MODs.<br />Denna text kommer endast att visas i nedladdnings detaljerna, och formateras med annan färg (standard teckenfärg är röd).<br />Radmatningar formateras.<br />BB-koder är inte tillgängliga här.',

	'HELP_Dl_user_download_limit_flag' => 'Med det här alternativet kan du ange en gräns för antalet nedladdningar per månad för varje användare. t.ex.: om du aktiverar det här, och om du ställer in "Max antal nedladdningar per månad" är lika med 30, då kan varje användare bara ladda ner 30 filer per månad. Denna gräns kommer inte att tillämpas på administratörer och moderatorer.',
	'HELP_Dl_user_download_limit' => 'Ange maximalt antal nedladdningar som tillåts per månad för varje användare. Denna gräns måste aktiveras med en switch som kallas "Begränsa antalet nedladdningar per månad". Denna gräns kommer inte att tillämpas på administratörer och moderatorer.',
	)
);

?>