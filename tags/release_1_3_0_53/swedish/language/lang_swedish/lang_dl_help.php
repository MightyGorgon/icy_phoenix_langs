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
	'HELP_Dl_delay_auto_traffic' => 'Ange här dagarna efter en ny användare kommer att få det första automatiska traffic.<br />Fördröjningen börjar med registrerings dagen.<br />Ange 0 här för att avaktivera.',
	'HELP_Dl_delay_post_traffic' => 'Ange här det antal dagar varefter en ny användare kommer att få det första traffic för inlägg.<br />Fördröjningen börjar med registrerings dagen.<br />Ange 0 här för att avaktivera.',
	'HELP_DL_edit_time' => 'Ange här det antal dagar hur länge en redigerad nedladdning kommer att vara märkt.<br />Ange 0 för att inaktivera.',
	'HELP_Dl_guest_stats_show' => 'Detta alternativ kommer endast att innefatta eller utesluta statistisk data om gästerna från den allmänna kategori statistiken.<br />Skriptet kommer fortfarande att samla in alla uppgifter.<br />ACP statistik verktyget visar alltid de fullständiga statistiska uppgifterna.',
	'HELP_Dl_method' => 'Den "gamla" metoden kommer att skicka filen direkt till webbklienten.<br />Denna metod är kompatibel med de flesta webb-miljöer, men kan inte visa den verkliga filstorlek vid nedladdning, så att användaren, klienten kan inte beräkna den återstående nedladdningstiden.<br />Den "nya" metoden kommer att visa den verkliga filstorlek, men den kan producera fel.<br />Använd den "gamla" metoden, om du har problem med den nya.<br />Om ingenting vill fungera, markerar rutan "direkt" för att länka nerladdningen direkt till filen på servern om detta blir "bibber" än PHP minnes gräns.',
	'HELP_Dl_method_quota' => 'Ställ filstorlek här som på Chunked fil och som kommer att läsas som en stor fil om du har valt den "nya" nerladdnings metoden.<br />Enligt denna kvot kommer filen att hämtas från readfile(); och skickas direkt till webb klienten.',
	'HELP_DL_new_time' => 'Ange här det antal dagar hur länge en ny nedladdning kommer att märkas (I Dagar).<br />Ange 0 för att inaktivera den här funktionen.',
	'HELP_Download_path' => 'Den relativa sökväg under din icyphoenix root mapp.<br />Under första installationen av detta paket hittar du här värdet "downloads/".<br />I hänsynslösa fall kommer känsliga namn att döpa dessa mappar om du använder Unix/Linux.<br />Snedstrecket i slutet av mappnamn kommer att vara viktigt, men lägg inte till ett snedstreck i början.<br />Detta och alla inkluderade undermappar måste vara på CHMOD 777, för att låta alla funktioner arbeta felfritt.<br />Under denna mapp måste du skapa en eller flera undermappar som innehåller alla fysiska filer.<br />Det rekommenderas att skapa en undermapp för varje logisk grupp av kategorier.<br />Denna undermapp måste tas upp som sökvägen i kategorin med samma syntax som främsta mappen, men utan att använda huvud mappen (för mer hjälp,läs i kategorihantering).<br />Du kan skapa flera undermappar genom att använda en ftp-klient eller genom att använda Toolbox (se länken överst till höger på denna sida).',
	'HELP_Dl_thumb_max_size' => 'Ange 0 i filstorlek för att avaktivera miniatyrbilder i alla kategorier.<br />Om du tillåter miniatyrbilder, ange då användbar bildstorlek för nya miniatyrer.<br />Om du inaktiverar miniatyrer kan du inte se befintliga miniatyrer i nerladdnings detaljer.',
	'HELP_Dl_use_ext_blacklist' => 'Om du aktiverar svartlistan kommer alla filtyper att blockeras för nya upplagda eller redigerade nerladdningar.',
	'HELP_Dl_enable_post_traffic' => 'Ange mängden traffic en användare kommer att få för att skapa nya frågor, svar eller citat som i de kommande två alternativen.',
	'HELP_Dl_limit_desc_on_index' => 'Skär beskrivningar efter angivna antal tecken.<br />Sätt 0 här för att inaktivera.',
	'HELP_Dl_prevent_hotlink' => 'Aktivera detta alternativ om du vill förhindra varje direkt nedladdnings länk med undantag från nerladdnings detaljer.<br />Detta alternativ innebär <b>inte</b> att skapa ett mapp skydd!',
	'HELP_Dl_user_traffic_once' => 'Välj om nerladdningar endast ska minska användarens traffic första gången han laddar ner.<br />Detta alternativ kommer INTE att ändra nerladdnings status själva!',
	'HELP_Dl_edit_own_downloads' => 'Om du aktiverar detta alternativ kan varje användare redigera sina egna uppladdade filer.',
	'HELP_Dl_shorten_extern_links' => 'Ange längden på den visade externa nedladdningslänken på nerladdnings detaljerna.<br />Baserat på längden på länken kommer den att beskäras i mitten eller förkortas i början från höger sida.<br />Lämna det här fältet tomt eller ange 0 för att inaktivera.',
	'HELP_Dl_show_footer_legend' => 'Detta alternativ kommer att vända legenden på nedladdnings statusikonen på hämtningssidans sidfot till på och av.<br />De ikoner som du hittar bredvid nerladdningar kommer inte att ändras genom detta alternativ.',
	'HELP_Dl_show_footer_stat' => 'Detta alternativ kommer att dölja eller visa statistik linjer i nerladdnings sidfoten.',
	'HELP_Dl_show_real_filetime' => 'visa den verkliga senaste ändrade tiden för nedladdning av filer i nerladdnings detaljerna.<br />Detta är den exaktaste tidskoden och även filer kommer att laddas upp med en ftp-klient eller inte uppdateras medan du redigerar nerladdningar.',
	'HELP_Dl_visual_confirmation' => 'Aktivera det här alternativet att låta användaren ange ett 5 siffrig bekräftelsekod för att få tillgång nedladdningen.<br />Om användaren inte anger koden eller om koden är fel kommer MOD bara att visa ett meddelande och stoppa nedladdningen.',
	'HELP_Dl_report_broken' => 'Sätt funktionen på eller av för att rapportera brutna nerladdningar.<br />Om du vill sätta den till "inte för gäster, kan bara registrerade användare rapportera nerladdningar.',
	'HELP_Dl_report_broken_lock' => 'Om du aktiverar det här alternativet blir nedladdningen låst när den rapporteras som bruten.<br />Detta kommer att dölja nerladdnings knappen och användaren kan inte ladda ner filen förän en Administratör eller Nerladdnings Moderator har låst upp nerladdningen.',
	'HELP_Dl_report_broken_message' => 'Om en nedladdning rapporterades som bruten kommer ett meddelande om detta att visas.<br />Om du aktiverar det här alternativet kommer meddelandet bara att dyka upp när nedladdningen är låst.<br />I detta fall inte under, utan i stället när nedladdnings knappen är ersatt.',
	'HELP_Dl_report_broken_vc' => 'Aktiverar en visuell bekräftelse om en användare vill rapportera en bruten nerladdning.<br />om koden var korrekt kommer rapporten att sparas och Administratörer och Nerladdnings Moderatorer kommer att informeras med ett e-post meddelande.',
	'HELP_Dl_Links_per_page' => 'Detta alternativ kontrollerar, hur många nedladdningar som kommer att visas på varje sida och ACP-statistik.<br />I hacklistan och översikts listan kommer forum inställningen "inlägg per sida" att användas.',
	'HELP_Number_recent_dl_on_portal' => 'Antalet senaste nerladdningar som användaren vill se på portalen.<br />Notera: Blocket använder den senaste ändra tiden för denna lista, så det kan vara möjligt att ha en äldre nerladdning i toppen av listan.',
	'HELP_DL_posts' => 'Varje användare, inte ens varje Administratoör och Nerladdnings Moderator, måste ha postat ett minimum av poster för att kunna ladda ner "inte gratis" nedladdningar.<br />Det rekommenderas att installera ett Anti Spam MOD, också,  för att undvika spam poster.<br />Ange 0 för att inaktivera. (rekommenderas för unga forum).',

	'HELP_Dl_physical_quota' => 'Den totala fysiska begränsning som MOD kommer att kunna använda för att lagra och hantera nerladdningar.<br />Om denna gräns nås, kan nya nerladdningar endast läggas till när de laddas upp med en ftp-klient och läggs till med filhanteringen i ACP.',
	'HELP_Dl_overall_traffic' => 'Den övergripande gräns för alla nerladdningar och, om aktiverad alla inlagda också, som inte kan överskridas under den aktuella månaden.<br />Efter att ha nått denna gräns, kommer varje nedladdning likartade att vara märkta och låsta, kommer det att vara omöjliga att ladda upp, också.',
	'HELP_Dl_newtopic_traffic' => 'För varje nytt postat ämne får författaren upp traffic till toppen av sitt traffic belopp.',
	'HELP_Dl_reply_traffic' => 'Användaren kommer att få för varje nytt svar och citat upp traffic på toppen av sitt traffic belopp.',
	'HELP_Dl_stop_uploads' => 'Aktivera eller inaktivera uppladdningar med detta alternativ.<br />Om du inaktiverar det här alternativet kommer endast administratörer att kunna ladda upp nya filer.<br />Aktivera det här alternativet för att tillåta användare att ladda upp beroende på vilken kategori och grupp rättigheter.',
	'HELP_Dl_upload_traffic_count' => 'Om alternativet är aktiverat, inlagda kommer att sänka ner den månadsvisa totala traffic, också.<br />Efter den allmänna gränsen kommer att nås, kommer inga uppladdningar att vara möjliga och nya nerladdningar måste laddas upp med en ftp-klient och läggas i ACP.',
	'HELP_Dl_thumb_max_dim' => 'Detta värde kommer att begränsa eventuella bilders storlek av uppladdade miniatyrbilder.<br />Skriv 0 här för att inaktivera miniatyrbilder (rekommenderas inte, om miniatyrbildsida filstorlek sätts).<br />Befintliga miniatyrer före ändring av detta kommer fortfarande att visas.',
	'HELP_Dl_disable_email' => 'Aktivera eller inaktivera e-postmeddelanden om nya tillagda eller redigerade nerladdningar.<br />Medan denna funktion är aktiverad här kan den individuellt avaktiveras samtidigt som du lägger till eller redigerar en nerladdning.<br />Endast användare som har aktiverat e-postmeddelanden om nya eller redigerade nerladdningar i sin nerladdnings konfiguration kommer att få dem.',
	'HELP_Dl_disable_popup' => 'aktivera eller inaktivera popup-meddelanden eller forum meddelande i forumet rubrikinformation om nya, tillagda eller redigerade nerladdningar.<br />Medan denna funktion är aktiverad här kan den individuellt avaktiveras samtidigt som du lägger till eller redigerar en nerladdning.<br />Endast användare som har aktiverat popup-meddelanden om nya eller redigerade nerladdningar i sin nerladdnings konfiguration kommer att få dem.',
	'HELP_Dl_disable_popup_notify' => 'Om detta alternativ är aktiverat kan du avaktivera det för att ändra tid medan du redigerar en nedladdning.',

	'HELP_Dl_stat_perm' => 'Välj från vilken användarnivå en upsides användaren kan granska den nerladdade statistik sidan.<br />T.ex. mm du gör det möjligt för Nerladdnings Moderatorer varje Forum administratör och nerladdnings moderatorer (INTE forum moderator!) som kan öppna och visa den här sidan.<br />Observera att denna sida kan producera en tung belastning, så vi rekommenderar att inte öppna den för massor om du har ett större forum och/eller hanterar många nerladdningar.',
	'HELP_Dl_hotlink_action' => 'Välj hur nerladdnings skriptet bör reagera, samtidigt som det förhindrar en direkt länk till en nedladdning (se även det sista alternativet).<br />Det kommer att visa ett meddelande (minskar server belastning) eller redirects till nedladdning (ger ytterligare traffic).',
	'HELP_Dl_use_hacklist' => 'Ändra hacklistan till att vara på eller av.<br />Om den är aktiverad kan du ange hack information samtidigt som du lägger till eller redigerar en nerladdning och för att lägga tll nerladdningen i hacklistan.<br />Om du vill inaktiverar hacklistan så att den helt döljs för varje användare som du aldrig har installerat det, men du kan aktivera det när som helst.<br />Observera att varje hack information i nedladdningar kommer att gå förlorade om du redigerar filen efter att hack listan har inaktiverats.',
	'HELP_Dl_icon_free_for_reg' => 'Ändra den vita ikonen för nerladdningar (gratis för registrerade användare) och för gäster.)<br />Om du inaktiverar det här alternativet, kommer gäster att se den röda ikonen i stället för den vita.',
	'HELP_Dl_latest_comments' => 'Detta alternativ visar den senaste X kommentaren på nerladdnings detaljer. Ange 0 för att inaktivera.',
	'HELP_Dl_sort_preform' => 'Alternativet "Förinställd" kommer att sortera alla nedladdningar i alla kategorier för alla användare som de är sorterade i ACP.<br />Med alternativet "Användare" kan varje användare välja, hur nerladdningar kommer att sorteras för honom/henne och om denna sortering kommer att fastställas eller utökas med annan sorterings kriterier.',

/*
* category management
*/
	'HELP_Dl_approve_comments' => 'Om du inaktiverar det här alternativet, måste varje ny kommentar godkännas av en nedladdnings moderator eller administratör innan andra användare kan se dem.',
	'HELP_Dl_cat_rules' => 'Dessa regler kommer att visas under under-kategorier och nerladdningar medan du tittar på kategorin.',
	'HELP_Dl_stats_prune' => 'Ange antal data rader av statistik för denna kategori som kan nås.<br />Varje ny rad kommer att ta bort de äldsta.<br />Skriv 0 här för att inaktivera beskärning.',
	'HELP_Dl_cat_traffic' => 'Ange högsta månadsvisa traffic för denna kategori.<br />Denna traffic ökar inte den totala traffic!<br />Skriv 0 här för att inaktivera gränsen.',
	'HELP_Dl_cat_path' => 'Här måste du ange en befintlig sökväg till din nerladdningar.<br />Detta värde måste vara namnet på en undermapp under huvudmappen (t.ex. downloads/) som du har angett i huvud konfigurationen.<br />Ange här mappnamn med ett snedstreck i slutet.<br />Till exempel finns det i mappen "downloads/mods/" du måste bara ange i kategori vägen "mods/".<br />Om du skickar detta formulär kommer mappen att kontrolleras.<br />Var noga, med att den inmatade undermappen verkligen finns!<br />Om mappen är en undermapp i en undermapp, ange fullständig hierarki här.<br />T.ex. "downloads/mods/misc/" skall vara införd som kategori sökväg "mods/misc/".<br />Var noga med att varje undermapp kommer att ha rättigheterna CHMOD 777 och beaktande skiftlägeskänsliga mappnamn om du använder Unix/Linux.',
	'HELP_Dl_cat_name' => 'Detta är namnet på den kategori som kommer att visas vid varje punkt.<br />Försök att undvika speciella tecken för att undvika att det förväxlas poster i hoppboxen.',

	'HELP_Dl_cat_description' => 'En kort beskrivning för denna kategori.<br />BBKoder är inte tillgängliga här.<br />Denna beskrivning kommer att visas på nerladdningarnas index och underkategorier.',
	'HELP_Dl_cat_parent' => 'Huvud nivå eller en annan kategori som denna kategori kan förenas med.<br />Med denna dynamiska nedrullningsbara kan du bygga en hierarkisk struktur för dina nerladdningar.',
	'HELP_Dl_must_approve' => 'Aktivera detta alternativ för att godkänna varje ny uppladdad nerladdnings fil innan den kommer att visas i denna kategori.<br />Administratörer och Nerladdnings Moderatorer kommer att få ett e-postmeddelanden om varje ny icke godkänd nerladdning.',
	'HELP_Dl_mod_desc_allow' => 'Aktivera mod informations blocket samtidigt samtidigt som man lägger till eller ändrar en nerladdning.',
	'HELP_Dl_statistics' => 'Aktiverar detaljerad statistik om filerna.<br />Observera att denna statistik kommer att producera ytterligare databasfrågor och uppgiftsuppsättningar i en separat tabell.',
	'HELP_Dl_comments' => 'Aktivera kommentar systemet för denna kategori.<br />Användare som du kan aktivera med denna drop downs som kan visa och/eller skriva kommentarer i den här kategorin.<br />Administratörer och Nerladdnings Moderatorer kan redigera och ta bort alla kommentarer, och författarna kan hantera sina egna texter.',
	'HELP_Dl_thumb_cat' => 'Aktivera Miniatyrbilder på nerladdningar i denna kategori.<br />Storleken på dessa bilder kommer att baseras på inställningarna i de huvud konfiguration av detta MOD.',
	'HELP_Dl_bug_tracker_cat' => 'Aktiverar Bug Tracker för nerladdningar i denna kategori.<br />Buggar kan skickas och visas för varje registrerad användare för de närstående nerladdningar och andra kategorier, om bug tracker är aktiverad globallt.<br />Enbart Administratörer och Forum Moderatorer kan hantera buggarna.<br />För varje uppdatering på bugg meddelandet kommer författaren att få ett e-postmeddelande, och team medlemmen, som ska arbeta med felet, kommer att informeras också',

/*
* file management
*/
	'HELP_Dl_name' => 'Detta är namnet på nedladdningar, som kommer att visas på olika platser.<br />Försök att undvika speciella tecken för att minska visa fel.',
	'HELP_Dl_choose_category' => 'Välj den kategori som kommer att inkludera denna nedladdning.<br />Filen måste redan vara sparad i den mapp du har angett i kategori hanteringen innan du kommer att spara denna nedladdning.<br />Annars får du ett felmeddelande.',
	'HELP_Dl_file_description' => 'En kort beskrivning för denna nedladdning.<br />Detta kommer att visas i nedladdnings kategorin, också.<br />BBKoder är avstängda för denna text.<br />Ange endast en kort text som minskar att tung data laddas medan kategorin öppnas.',
	'HELP_Dl_files_url' => 'Filnamnet för denna nedladdning.<br />Ange detta namn utan en ledande filsökväg eller snedstreck.<br />Filen måste finnas före du sparar nedladdningen annars kommer du att få ett felmeddelande.<br />Observera förbjudna fil tillägg: Varje fil som har ett förbjudet tillägg kommer att blockeras.',
	'HELP_Dl_upload_file' => 'Ladda upp fil från din dator.<br />Var noga, filstorleken blir mindre än den som visas och filens tillägg kommer inte att inkluderas i listan som du kan se under detta fält.',
	'HELP_Dl_extern' => 'Aktivera denna funktion för en extern fil som du kommer att ange i området ovan (http://www.example.com/media.mp3).<br />Funktionen "gratis" blir obetydlig.',
	'HELP_Dl_extern_up' => 'Aktivera denna funktion för en extern fil som du kommer att ange i höger fält (http://www.example.com/media.mp3).<br />Funktionen "gratis" blir obetydlig.',
	'HELP_Dl_thumb' => 'Detta fält kan ladda upp en liten bild (notera visar filstorlek och bild dimensioner under detta fält) för att visa den i Nedladdnings Detaljerna.<br />Om det redan finns en miniatyrbild kan du lägga upp en ny för att ersätta den.<br />Kontrollera befintlig miniatyrbild för "ta bort" du kan bara släppa den.',
	'HELP_Dl_is_free' => 'Aktivera denna funktion om nedladdningen bör vara gratis att ladda ner för alla.<br />Traffic konton kommer inte att användas.<br />Välj gratis för reg. Användare och gör det möjligt för en gratis nedladdning endast för registrerade användare.',
	'HELP_Dl_traffic' => 'Den högsta Traffic en fil kommer att tillåtas att producera.<br />Värdet 0 inaktiveras Traffic kontroll',

	'HELP_Dl_approve' => 'Detta kommer att godkänna nedladdningen omedelbart om du skickar detta formulär.<br />Å andra sidan kommer den här nedladdningen att vara dold för användare.',
	'HELP_Dl_no_change_edit_time' => 'Kontrollera det här alternativet för att stävja att uppdatera den senaste ändrade tiden för denna nedladdning.<br />Detta kommer inte att påverka e-post och popup meddelande/Forum meddelande.',
	'HELP_Dl_disable_popup_files' => 'Kontrollera det här alternativet för att undertrycka popup meddelande/Forum meddelande.<br />Detta kommer inte att påverka e-postmeddelanden eller uppdatera den sista redigerings tiden.',
	'HELP_Dl_disable_email_files' => 'Kontrollera det här alternativet för att undertrycka e-post meddelandet.<br />Detta kommer inte att påverka e-postmeddelanden eller uppdatera den sista redigerings tiden.',
	'HELP_Dl_hacklist' => 'Lägg till den här nedladdningen till hacklistan (detta måste vara aktiverat i huvud konfiguration) Om du väljer Ja här.<br />Nej kommer inte att lägga till nedladdningen till hacklist.<br />Visar extra information, kommer bara att visa detta block i nedladdnings detaljerna.',
	'HELP_Dl_hack_version' => 'Deklarationen om när nedladdningen släpps.<br />Detta kommer alltid att visas bredvid Nerladdningen.<br />Du kan inte söka efter detta.',
	'HELP_Dl_hack_autor' => 'Upphovsmannen till denna nedladdnings filen.<br />Lämna tomt för att dölja detta värde vid nedladdnings informationen och helhetssyn.',
	'HELP_Dl_hack_autor_email' => 'E-postadress för författaren.<br />Om du inte anger den här, kommer den att vara dold på Nedladdnings information och helhetssyn.',
	'HELP_Dl_hack_autor_website' => 'Webbsida för författaren.<br />Denna URL bör vara författarens webbplats, inte sidan för att ladda ner (inte alltid den samma).<br />Vänligen skicka inte in länkar till skyddade webbplatser eller webbplatser med tveksamt innehåll.',
	'HELP_Dl_hack_dl_url' => 'Sidan till en alternativ nerladdning av denna fil.<br />Detta kan vara webbplatsen för upphovsmannen eller en annan alternativ webbplats.<br />Vänligen ange inte länkar till direkt nerladdning om upphovsmannen inte tillåter detta.',
	'HELP_Dl_mod_desc' => 'Detaljerade beskrivningar av hela MOD.<br />Du kan använda BBKoder och Smileys i denna text.<br />Line feeds kommer att formateras också.<br />Denna text kommer endast att visas i nerladdnings detaljerna.',
	'HELP_Dl_mod_list' => 'Aktivera detta block i nerladdnings detaljerna.<br />If you do not enable this option, the complete block will not be displayed.',
	'HELP_Dl_mod_require' => 'Deklarationer med andra MODs behöver en användare installera eller använda den här Nerladdningen.<br />Denna text kommer endast att visas i nerladdnings detaljerna.',
	'HELP_Dl_mod_test' => 'Förklarar på vilket Icy Phoenix detta MOD var testat successfullt.<br />Ange bara publiceringen från prov forumet.<br />Skriptet kommer att visa det som phpBB X, så du måste bara ange X här.<br />Denna text kommer endast att visas i nerladdnings detaljerna.',
	'HELP_Dl_mod_todo' => 'Ange nästa steg som du har planerat för detta MOD eller som är i arbete.<br />Detta kommer att skapa ToDo lista som kan öppnas från nerladdningar sidfoten.<br />Med denna text kan användaren få information om den senaste statusen för detta MOD.<br />Line flöden kommer att formateras, BBKoder är inte tillgängliga här.<br />ToDo Listan kommer fortfarande att vara fylld även om detta block kommer att avaktiveras.',
	'HELP_Dl_mod_warning' => 'Viktigt tips om detta MOD som måste betraktas vid installation, användning eller interaktion med andra MODs.<br />Denna text kommer att visas i nerladdnings detaljerna och formateras med en annan färg (per standard är teckenfärgen röd).<br />Line feeds kommer att formateras.<br />BBKoder är inte tillgängliga här.',

	'HELP_Dl_user_download_limit_flag' => 'Med detta alternativ kan du ange en gräns för antalet nedladdningar per månad för varje användare. EXEMPEL.: Om du gör detta och om du ställer in "Max antal nedladdningar per månad" är lika med 30, då kan varje användare bara ladda ner 30 ärenden per månad. Denna gräns tillämpas inte av administratörer och moderatorer.',
	'HELP_Dl_user_download_limit' => 'Ange det högsta antalet nerladdningar per månad för varje användare. Denna gräns måste aktiveras med switchen kallad "Begränsa antalet nedladdningar per månad". Denna gräns tillämpas inte av administratörer och moderatorer.',
	)
);

?>