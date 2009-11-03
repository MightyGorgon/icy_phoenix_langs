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
	'Dl_no_help_aviable' => 'Det finns ingen hj�lp tillg�nglig f�r detta alternativ',

/*
* title of help popup
*/
	'HELP_TITLE' => 'Download MOD Online Hj�lp',

/*
* general configuration
*/
	'HELP_Dl_delay_auto_traffic' => 'Ange h�r dagarna efter en ny anv�ndare kommer att f� det f�rsta automatiska traffic.<br />F�rdr�jningen b�rjar med registrerings dagen.<br />Ange 0 h�r f�r att avaktivera.',
	'HELP_Dl_delay_post_traffic' => 'Ange h�r det antal dagar varefter en ny anv�ndare kommer att f� det f�rsta traffic f�r inl�gg.<br />F�rdr�jningen b�rjar med registrerings dagen.<br />Ange 0 h�r f�r att avaktivera.',
	'HELP_DL_edit_time' => 'Ange h�r det antal dagar hur l�nge en redigerad nedladdning kommer att vara m�rkt.<br />Ange 0 f�r att inaktivera.',
	'HELP_Dl_guest_stats_show' => 'Detta alternativ kommer endast att innefatta eller utesluta statistisk data om g�sterna fr�n den allm�nna kategori statistiken.<br />Skriptet kommer fortfarande att samla in alla uppgifter.<br />ACP statistik verktyget visar alltid de fullst�ndiga statistiska uppgifterna.',
	'HELP_Dl_method' => 'Den "gamla" metoden kommer att skicka filen direkt till webbklienten.<br />Denna metod �r kompatibel med de flesta webb-milj�er, men kan inte visa den verkliga filstorlek vid nedladdning, s� att anv�ndaren, klienten kan inte ber�kna den �terst�ende nedladdningstiden.<br />Den "nya" metoden kommer att visa den verkliga filstorlek, men den kan producera fel.<br />Anv�nd den "gamla" metoden, om du har problem med den nya.<br />Om ingenting vill fungera, markerar rutan "direkt" f�r att l�nka nerladdningen direkt till filen p� servern om detta blir "bibber" �n PHP minnes gr�ns.',
	'HELP_Dl_method_quota' => 'St�ll filstorlek h�r som p� Chunked fil och som kommer att l�sas som en stor fil om du har valt den "nya" nerladdnings metoden.<br />Enligt denna kvot kommer filen att h�mtas fr�n readfile(); och skickas direkt till webb klienten.',
	'HELP_DL_new_time' => 'Ange h�r det antal dagar hur l�nge en ny nedladdning kommer att m�rkas (I Dagar).<br />Ange 0 f�r att inaktivera den h�r funktionen.',
	'HELP_Download_path' => 'Den relativa s�kv�g under din icyphoenix root mapp.<br />Under f�rsta installationen av detta paket hittar du h�r v�rdet "downloads/".<br />I h�nsynsl�sa fall kommer k�nsliga namn att d�pa dessa mappar om du anv�nder Unix/Linux.<br />Snedstrecket i slutet av mappnamn kommer att vara viktigt, men l�gg inte till ett snedstreck i b�rjan.<br />Detta och alla inkluderade undermappar m�ste vara p� CHMOD 777, f�r att l�ta alla funktioner arbeta felfritt.<br />Under denna mapp m�ste du skapa en eller flera undermappar som inneh�ller alla fysiska filer.<br />Det rekommenderas att skapa en undermapp f�r varje logisk grupp av kategorier.<br />Denna undermapp m�ste tas upp som s�kv�gen i kategorin med samma syntax som fr�msta mappen, men utan att anv�nda huvud mappen (f�r mer hj�lp,l�s i kategorihantering).<br />Du kan skapa flera undermappar genom att anv�nda en ftp-klient eller genom att anv�nda Toolbox (se l�nken �verst till h�ger p� denna sida).',
	'HELP_Dl_thumb_max_size' => 'Ange 0 i filstorlek f�r att avaktivera miniatyrbilder i alla kategorier.<br />Om du till�ter miniatyrbilder, ange d� anv�ndbar bildstorlek f�r nya miniatyrer.<br />Om du inaktiverar miniatyrer kan du inte se befintliga miniatyrer i nerladdnings detaljer.',
	'HELP_Dl_use_ext_blacklist' => 'Om du aktiverar svartlistan kommer alla filtyper att blockeras f�r nya upplagda eller redigerade nerladdningar.',
	'HELP_Dl_enable_post_traffic' => 'Ange m�ngden traffic en anv�ndare kommer att f� f�r att skapa nya fr�gor, svar eller citat som i de kommande tv� alternativen.',
	'HELP_Dl_limit_desc_on_index' => 'Sk�r beskrivningar efter angivna antal tecken.<br />S�tt 0 h�r f�r att inaktivera.',
	'HELP_Dl_prevent_hotlink' => 'Aktivera detta alternativ om du vill f�rhindra varje direkt nedladdnings l�nk med undantag fr�n nerladdnings detaljer.<br />Detta alternativ inneb�r <b>inte</b> att skapa ett mapp skydd!',
	'HELP_Dl_user_traffic_once' => 'V�lj om nerladdningar endast ska minska anv�ndarens traffic f�rsta g�ngen han laddar ner.<br />Detta alternativ kommer INTE att �ndra nerladdnings status sj�lva!',
	'HELP_Dl_edit_own_downloads' => 'Om du aktiverar detta alternativ kan varje anv�ndare redigera sina egna uppladdade filer.',
	'HELP_Dl_shorten_extern_links' => 'Ange l�ngden p� den visade externa nedladdningsl�nken p� nerladdnings detaljerna.<br />Baserat p� l�ngden p� l�nken kommer den att besk�ras i mitten eller f�rkortas i b�rjan fr�n h�ger sida.<br />L�mna det h�r f�ltet tomt eller ange 0 f�r att inaktivera.',
	'HELP_Dl_show_footer_legend' => 'Detta alternativ kommer att v�nda legenden p� nedladdnings statusikonen p� h�mtningssidans sidfot till p� och av.<br />De ikoner som du hittar bredvid nerladdningar kommer inte att �ndras genom detta alternativ.',
	'HELP_Dl_show_footer_stat' => 'Detta alternativ kommer att d�lja eller visa statistik linjer i nerladdnings sidfoten.',
	'HELP_Dl_show_real_filetime' => 'visa den verkliga senaste �ndrade tiden f�r nedladdning av filer i nerladdnings detaljerna.<br />Detta �r den exaktaste tidskoden och �ven filer kommer att laddas upp med en ftp-klient eller inte uppdateras medan du redigerar nerladdningar.',
	'HELP_Dl_visual_confirmation' => 'Aktivera det h�r alternativet att l�ta anv�ndaren ange ett 5 siffrig bekr�ftelsekod f�r att f� tillg�ng nedladdningen.<br />Om anv�ndaren inte anger koden eller om koden �r fel kommer MOD bara att visa ett meddelande och stoppa nedladdningen.',
	'HELP_Dl_report_broken' => 'S�tt funktionen p� eller av f�r att rapportera brutna nerladdningar.<br />Om du vill s�tta den till "inte f�r g�ster, kan bara registrerade anv�ndare rapportera nerladdningar.',
	'HELP_Dl_report_broken_lock' => 'Om du aktiverar det h�r alternativet blir nedladdningen l�st n�r den rapporteras som bruten.<br />Detta kommer att d�lja nerladdnings knappen och anv�ndaren kan inte ladda ner filen f�r�n en Administrat�r eller Nerladdnings Moderator har l�st upp nerladdningen.',
	'HELP_Dl_report_broken_message' => 'Om en nedladdning rapporterades som bruten kommer ett meddelande om detta att visas.<br />Om du aktiverar det h�r alternativet kommer meddelandet bara att dyka upp n�r nedladdningen �r l�st.<br />I detta fall inte under, utan i st�llet n�r nedladdnings knappen �r ersatt.',
	'HELP_Dl_report_broken_vc' => 'Aktiverar en visuell bekr�ftelse om en anv�ndare vill rapportera en bruten nerladdning.<br />om koden var korrekt kommer rapporten att sparas och Administrat�rer och Nerladdnings Moderatorer kommer att informeras med ett e-post meddelande.',
	'HELP_Dl_Links_per_page' => 'Detta alternativ kontrollerar, hur m�nga nedladdningar som kommer att visas p� varje sida och ACP-statistik.<br />I hacklistan och �versikts listan kommer forum inst�llningen "inl�gg per sida" att anv�ndas.',
	'HELP_Number_recent_dl_on_portal' => 'Antalet senaste nerladdningar som anv�ndaren vill se p� portalen.<br />Notera: Blocket anv�nder den senaste �ndra tiden f�r denna lista, s� det kan vara m�jligt att ha en �ldre nerladdning i toppen av listan.',
	'HELP_DL_posts' => 'Varje anv�ndare, inte ens varje Administrato�r och Nerladdnings Moderator, m�ste ha postat ett minimum av poster f�r att kunna ladda ner "inte gratis" nedladdningar.<br />Det rekommenderas att installera ett Anti Spam MOD, ocks�,  f�r att undvika spam poster.<br />Ange 0 f�r att inaktivera. (rekommenderas f�r unga forum).',

	'HELP_Dl_physical_quota' => 'Den totala fysiska begr�nsning som MOD kommer att kunna anv�nda f�r att lagra och hantera nerladdningar.<br />Om denna gr�ns n�s, kan nya nerladdningar endast l�ggas till n�r de laddas upp med en ftp-klient och l�ggs till med filhanteringen i ACP.',
	'HELP_Dl_overall_traffic' => 'Den �vergripande gr�ns f�r alla nerladdningar och, om aktiverad alla inlagda ocks�, som inte kan �verskridas under den aktuella m�naden.<br />Efter att ha n�tt denna gr�ns, kommer varje nedladdning likartade att vara m�rkta och l�sta, kommer det att vara om�jliga att ladda upp, ocks�.',
	'HELP_Dl_newtopic_traffic' => 'F�r varje nytt postat �mne f�r f�rfattaren upp traffic till toppen av sitt traffic belopp.',
	'HELP_Dl_reply_traffic' => 'Anv�ndaren kommer att f� f�r varje nytt svar och citat upp traffic p� toppen av sitt traffic belopp.',
	'HELP_Dl_stop_uploads' => 'Aktivera eller inaktivera uppladdningar med detta alternativ.<br />Om du inaktiverar det h�r alternativet kommer endast administrat�rer att kunna ladda upp nya filer.<br />Aktivera det h�r alternativet f�r att till�ta anv�ndare att ladda upp beroende p� vilken kategori och grupp r�ttigheter.',
	'HELP_Dl_upload_traffic_count' => 'Om alternativet �r aktiverat, inlagda kommer att s�nka ner den m�nadsvisa totala traffic, ocks�.<br />Efter den allm�nna gr�nsen kommer att n�s, kommer inga uppladdningar att vara m�jliga och nya nerladdningar m�ste laddas upp med en ftp-klient och l�ggas i ACP.',
	'HELP_Dl_thumb_max_dim' => 'Detta v�rde kommer att begr�nsa eventuella bilders storlek av uppladdade miniatyrbilder.<br />Skriv 0 h�r f�r att inaktivera miniatyrbilder (rekommenderas inte, om miniatyrbildsida filstorlek s�tts).<br />Befintliga miniatyrer f�re �ndring av detta kommer fortfarande att visas.',
	'HELP_Dl_disable_email' => 'Aktivera eller inaktivera e-postmeddelanden om nya tillagda eller redigerade nerladdningar.<br />Medan denna funktion �r aktiverad h�r kan den individuellt avaktiveras samtidigt som du l�gger till eller redigerar en nerladdning.<br />Endast anv�ndare som har aktiverat e-postmeddelanden om nya eller redigerade nerladdningar i sin nerladdnings konfiguration kommer att f� dem.',
	'HELP_Dl_disable_popup' => 'aktivera eller inaktivera popup-meddelanden eller forum meddelande i forumet rubrikinformation om nya, tillagda eller redigerade nerladdningar.<br />Medan denna funktion �r aktiverad h�r kan den individuellt avaktiveras samtidigt som du l�gger till eller redigerar en nerladdning.<br />Endast anv�ndare som har aktiverat popup-meddelanden om nya eller redigerade nerladdningar i sin nerladdnings konfiguration kommer att f� dem.',
	'HELP_Dl_disable_popup_notify' => 'Om detta alternativ �r aktiverat kan du avaktivera det f�r att �ndra tid medan du redigerar en nedladdning.',

	'HELP_Dl_stat_perm' => 'V�lj fr�n vilken anv�ndarniv� en upsides anv�ndaren kan granska den nerladdade statistik sidan.<br />T.ex. mm du g�r det m�jligt f�r Nerladdnings Moderatorer varje Forum administrat�r och nerladdnings moderatorer (INTE forum moderator!) som kan �ppna och visa den h�r sidan.<br />Observera att denna sida kan producera en tung belastning, s� vi rekommenderar att inte �ppna den f�r massor om du har ett st�rre forum och/eller hanterar m�nga nerladdningar.',
	'HELP_Dl_hotlink_action' => 'V�lj hur nerladdnings skriptet b�r reagera, samtidigt som det f�rhindrar en direkt l�nk till en nedladdning (se �ven det sista alternativet).<br />Det kommer att visa ett meddelande (minskar server belastning) eller redirects till nedladdning (ger ytterligare traffic).',
	'HELP_Dl_use_hacklist' => '�ndra hacklistan till att vara p� eller av.<br />Om den �r aktiverad kan du ange hack information samtidigt som du l�gger till eller redigerar en nerladdning och f�r att l�gga tll nerladdningen i hacklistan.<br />Om du vill inaktiverar hacklistan s� att den helt d�ljs f�r varje anv�ndare som du aldrig har installerat det, men du kan aktivera det n�r som helst.<br />Observera att varje hack information i nedladdningar kommer att g� f�rlorade om du redigerar filen efter att hack listan har inaktiverats.',
	'HELP_Dl_icon_free_for_reg' => '�ndra den vita ikonen f�r nerladdningar (gratis f�r registrerade anv�ndare) och f�r g�ster.)<br />Om du inaktiverar det h�r alternativet, kommer g�ster att se den r�da ikonen i st�llet f�r den vita.',
	'HELP_Dl_latest_comments' => 'Detta alternativ visar den senaste X kommentaren p� nerladdnings detaljer. Ange 0 f�r att inaktivera.',
	'HELP_Dl_sort_preform' => 'Alternativet "F�rinst�lld" kommer att sortera alla nedladdningar i alla kategorier f�r alla anv�ndare som de �r sorterade i ACP.<br />Med alternativet "Anv�ndare" kan varje anv�ndare v�lja, hur nerladdningar kommer att sorteras f�r honom/henne och om denna sortering kommer att fastst�llas eller ut�kas med annan sorterings kriterier.',

/*
* category management
*/
	'HELP_Dl_approve_comments' => 'Om du inaktiverar det h�r alternativet, m�ste varje ny kommentar godk�nnas av en nedladdnings moderator eller administrat�r innan andra anv�ndare kan se dem.',
	'HELP_Dl_cat_rules' => 'Dessa regler kommer att visas under under-kategorier och nerladdningar medan du tittar p� kategorin.',
	'HELP_Dl_stats_prune' => 'Ange antal data rader av statistik f�r denna kategori som kan n�s.<br />Varje ny rad kommer att ta bort de �ldsta.<br />Skriv 0 h�r f�r att inaktivera besk�rning.',
	'HELP_Dl_cat_traffic' => 'Ange h�gsta m�nadsvisa traffic f�r denna kategori.<br />Denna traffic �kar inte den totala traffic!<br />Skriv 0 h�r f�r att inaktivera gr�nsen.',
	'HELP_Dl_cat_path' => 'H�r m�ste du ange en befintlig s�kv�g till din nerladdningar.<br />Detta v�rde m�ste vara namnet p� en undermapp under huvudmappen (t.ex. downloads/) som du har angett i huvud konfigurationen.<br />Ange h�r mappnamn med ett snedstreck i slutet.<br />Till exempel finns det i mappen "downloads/mods/" du m�ste bara ange i kategori v�gen "mods/".<br />Om du skickar detta formul�r kommer mappen att kontrolleras.<br />Var noga, med att den inmatade undermappen verkligen finns!<br />Om mappen �r en undermapp i en undermapp, ange fullst�ndig hierarki h�r.<br />T.ex. "downloads/mods/misc/" skall vara inf�rd som kategori s�kv�g "mods/misc/".<br />Var noga med att varje undermapp kommer att ha r�ttigheterna CHMOD 777 och beaktande skiftl�gesk�nsliga mappnamn om du anv�nder Unix/Linux.',
	'HELP_Dl_cat_name' => 'Detta �r namnet p� den kategori som kommer att visas vid varje punkt.<br />F�rs�k att undvika speciella tecken f�r att undvika att det f�rv�xlas poster i hoppboxen.',

	'HELP_Dl_cat_description' => 'En kort beskrivning f�r denna kategori.<br />BBKoder �r inte tillg�ngliga h�r.<br />Denna beskrivning kommer att visas p� nerladdningarnas index och underkategorier.',
	'HELP_Dl_cat_parent' => 'Huvud niv� eller en annan kategori som denna kategori kan f�renas med.<br />Med denna dynamiska nedrullningsbara kan du bygga en hierarkisk struktur f�r dina nerladdningar.',
	'HELP_Dl_must_approve' => 'Aktivera detta alternativ f�r att godk�nna varje ny uppladdad nerladdnings fil innan den kommer att visas i denna kategori.<br />Administrat�rer och Nerladdnings Moderatorer kommer att f� ett e-postmeddelanden om varje ny icke godk�nd nerladdning.',
	'HELP_Dl_mod_desc_allow' => 'Aktivera mod informations blocket samtidigt samtidigt som man l�gger till eller �ndrar en nerladdning.',
	'HELP_Dl_statistics' => 'Aktiverar detaljerad statistik om filerna.<br />Observera att denna statistik kommer att producera ytterligare databasfr�gor och uppgiftsupps�ttningar i en separat tabell.',
	'HELP_Dl_comments' => 'Aktivera kommentar systemet f�r denna kategori.<br />Anv�ndare som du kan aktivera med denna drop downs som kan visa och/eller skriva kommentarer i den h�r kategorin.<br />Administrat�rer och Nerladdnings Moderatorer kan redigera och ta bort alla kommentarer, och f�rfattarna kan hantera sina egna texter.',
	'HELP_Dl_thumb_cat' => 'Aktivera Miniatyrbilder p� nerladdningar i denna kategori.<br />Storleken p� dessa bilder kommer att baseras p� inst�llningarna i de huvud konfiguration av detta MOD.',
	'HELP_Dl_bug_tracker_cat' => 'Aktiverar Bug Tracker f�r nerladdningar i denna kategori.<br />Buggar kan skickas och visas f�r varje registrerad anv�ndare f�r de n�rst�ende nerladdningar och andra kategorier, om bug tracker �r aktiverad globallt.<br />Enbart Administrat�rer och Forum Moderatorer kan hantera buggarna.<br />F�r varje uppdatering p� bugg meddelandet kommer f�rfattaren att f� ett e-postmeddelande, och team medlemmen, som ska arbeta med felet, kommer att informeras ocks�',

/*
* file management
*/
	'HELP_Dl_name' => 'Detta �r namnet p� nedladdningar, som kommer att visas p� olika platser.<br />F�rs�k att undvika speciella tecken f�r att minska visa fel.',
	'HELP_Dl_choose_category' => 'V�lj den kategori som kommer att inkludera denna nedladdning.<br />Filen m�ste redan vara sparad i den mapp du har angett i kategori hanteringen innan du kommer att spara denna nedladdning.<br />Annars f�r du ett felmeddelande.',
	'HELP_Dl_file_description' => 'En kort beskrivning f�r denna nedladdning.<br />Detta kommer att visas i nedladdnings kategorin, ocks�.<br />BBKoder �r avst�ngda f�r denna text.<br />Ange endast en kort text som minskar att tung data laddas medan kategorin �ppnas.',
	'HELP_Dl_files_url' => 'Filnamnet f�r denna nedladdning.<br />Ange detta namn utan en ledande fils�kv�g eller snedstreck.<br />Filen m�ste finnas f�re du sparar nedladdningen annars kommer du att f� ett felmeddelande.<br />Observera f�rbjudna fil till�gg: Varje fil som har ett f�rbjudet till�gg kommer att blockeras.',
	'HELP_Dl_upload_file' => 'Ladda upp fil fr�n din dator.<br />Var noga, filstorleken blir mindre �n den som visas och filens till�gg kommer inte att inkluderas i listan som du kan se under detta f�lt.',
	'HELP_Dl_extern' => 'Aktivera denna funktion f�r en extern fil som du kommer att ange i omr�det ovan (http://www.example.com/media.mp3).<br />Funktionen "gratis" blir obetydlig.',
	'HELP_Dl_extern_up' => 'Aktivera denna funktion f�r en extern fil som du kommer att ange i h�ger f�lt (http://www.example.com/media.mp3).<br />Funktionen "gratis" blir obetydlig.',
	'HELP_Dl_thumb' => 'Detta f�lt kan ladda upp en liten bild (notera visar filstorlek och bild dimensioner under detta f�lt) f�r att visa den i Nedladdnings Detaljerna.<br />Om det redan finns en miniatyrbild kan du l�gga upp en ny f�r att ers�tta den.<br />Kontrollera befintlig miniatyrbild f�r "ta bort" du kan bara sl�ppa den.',
	'HELP_Dl_is_free' => 'Aktivera denna funktion om nedladdningen b�r vara gratis att ladda ner f�r alla.<br />Traffic konton kommer inte att anv�ndas.<br />V�lj gratis f�r reg. Anv�ndare och g�r det m�jligt f�r en gratis nedladdning endast f�r registrerade anv�ndare.',
	'HELP_Dl_traffic' => 'Den h�gsta Traffic en fil kommer att till�tas att producera.<br />V�rdet 0 inaktiveras Traffic kontroll',

	'HELP_Dl_approve' => 'Detta kommer att godk�nna nedladdningen omedelbart om du skickar detta formul�r.<br />� andra sidan kommer den h�r nedladdningen att vara dold f�r anv�ndare.',
	'HELP_Dl_no_change_edit_time' => 'Kontrollera det h�r alternativet f�r att st�vja att uppdatera den senaste �ndrade tiden f�r denna nedladdning.<br />Detta kommer inte att p�verka e-post och popup meddelande/Forum meddelande.',
	'HELP_Dl_disable_popup_files' => 'Kontrollera det h�r alternativet f�r att undertrycka popup meddelande/Forum meddelande.<br />Detta kommer inte att p�verka e-postmeddelanden eller uppdatera den sista redigerings tiden.',
	'HELP_Dl_disable_email_files' => 'Kontrollera det h�r alternativet f�r att undertrycka e-post meddelandet.<br />Detta kommer inte att p�verka e-postmeddelanden eller uppdatera den sista redigerings tiden.',
	'HELP_Dl_hacklist' => 'L�gg till den h�r nedladdningen till hacklistan (detta m�ste vara aktiverat i huvud konfiguration) Om du v�ljer Ja h�r.<br />Nej kommer inte att l�gga till nedladdningen till hacklist.<br />Visar extra information, kommer bara att visa detta block i nedladdnings detaljerna.',
	'HELP_Dl_hack_version' => 'Deklarationen om n�r nedladdningen sl�pps.<br />Detta kommer alltid att visas bredvid Nerladdningen.<br />Du kan inte s�ka efter detta.',
	'HELP_Dl_hack_autor' => 'Upphovsmannen till denna nedladdnings filen.<br />L�mna tomt f�r att d�lja detta v�rde vid nedladdnings informationen och helhetssyn.',
	'HELP_Dl_hack_autor_email' => 'E-postadress f�r f�rfattaren.<br />Om du inte anger den h�r, kommer den att vara dold p� Nedladdnings information och helhetssyn.',
	'HELP_Dl_hack_autor_website' => 'Webbsida f�r f�rfattaren.<br />Denna URL b�r vara f�rfattarens webbplats, inte sidan f�r att ladda ner (inte alltid den samma).<br />V�nligen skicka inte in l�nkar till skyddade webbplatser eller webbplatser med tveksamt inneh�ll.',
	'HELP_Dl_hack_dl_url' => 'Sidan till en alternativ nerladdning av denna fil.<br />Detta kan vara webbplatsen f�r upphovsmannen eller en annan alternativ webbplats.<br />V�nligen ange inte l�nkar till direkt nerladdning om upphovsmannen inte till�ter detta.',
	'HELP_Dl_mod_desc' => 'Detaljerade beskrivningar av hela MOD.<br />Du kan anv�nda BBKoder och Smileys i denna text.<br />Line feeds kommer att formateras ocks�.<br />Denna text kommer endast att visas i nerladdnings detaljerna.',
	'HELP_Dl_mod_list' => 'Aktivera detta block i nerladdnings detaljerna.<br />If you do not enable this option, the complete block will not be displayed.',
	'HELP_Dl_mod_require' => 'Deklarationer med andra MODs beh�ver en anv�ndare installera eller anv�nda den h�r Nerladdningen.<br />Denna text kommer endast att visas i nerladdnings detaljerna.',
	'HELP_Dl_mod_test' => 'F�rklarar p� vilket Icy Phoenix detta MOD var testat successfullt.<br />Ange bara publiceringen fr�n prov forumet.<br />Skriptet kommer att visa det som phpBB X, s� du m�ste bara ange X h�r.<br />Denna text kommer endast att visas i nerladdnings detaljerna.',
	'HELP_Dl_mod_todo' => 'Ange n�sta steg som du har planerat f�r detta MOD eller som �r i arbete.<br />Detta kommer att skapa ToDo lista som kan �ppnas fr�n nerladdningar sidfoten.<br />Med denna text kan anv�ndaren f� information om den senaste statusen f�r detta MOD.<br />Line fl�den kommer att formateras, BBKoder �r inte tillg�ngliga h�r.<br />ToDo Listan kommer fortfarande att vara fylld �ven om detta block kommer att avaktiveras.',
	'HELP_Dl_mod_warning' => 'Viktigt tips om detta MOD som m�ste betraktas vid installation, anv�ndning eller interaktion med andra MODs.<br />Denna text kommer att visas i nerladdnings detaljerna och formateras med en annan f�rg (per standard �r teckenf�rgen r�d).<br />Line feeds kommer att formateras.<br />BBKoder �r inte tillg�ngliga h�r.',

	'HELP_Dl_user_download_limit_flag' => 'Med detta alternativ kan du ange en gr�ns f�r antalet nedladdningar per m�nad f�r varje anv�ndare. EXEMPEL.: Om du g�r detta och om du st�ller in "Max antal nedladdningar per m�nad" �r lika med 30, d� kan varje anv�ndare bara ladda ner 30 �renden per m�nad. Denna gr�ns till�mpas inte av administrat�rer och moderatorer.',
	'HELP_Dl_user_download_limit' => 'Ange det h�gsta antalet nerladdningar per m�nad f�r varje anv�ndare. Denna gr�ns m�ste aktiveras med switchen kallad "Begr�nsa antalet nedladdningar per m�nad". Denna gr�ns till�mpas inte av administrat�rer och moderatorer.',
	)
);

?>