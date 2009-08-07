<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_xs.php 55 2009-08-07 09:20:40Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Vjacheslav Trushkin (http://www.stsoftware.biz)
* Lopalong
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
	'Extreme_Styles' => 'eXtreme Styles',
	'xs_title' => 'eXtreme Styles mod',

	'xs_file' => 'Fil',
	'xs_template' => 'Mall',
	'xs_id' => 'ID',
	'xs_style' => 'Stil',
	'xs_styles' => 'Stilar',
	'xs_users' => 'Användare',
	'xs_options' => 'Alternativ',
	'xs_comment' => 'Kommentar',
	'xs_upload_time' => 'Uppladdnings Tid',
	'xs_select' => 'Välj',

	'xs_continue' => 'Fortsätt',	// button

	'xs_click_here_lc' => 'klicka här',
	'xs_edit_lc' => 'redigera',

/*
* navigation
*/
	'xs_config_shownav' => array(
		'Konfiguration',
		'Installera Stilar',
		'Avinstallera Stilar',
		'Standard Stil',
		'Hantera Cache',
		'Importera Stilar',
		'Exportera Stilar',
		'Klona Stilar',
		'Ladda Ner Stilar',
		'Redigera Mallar',
		'Redigera Stilar',
		'Exportera Databas',
		'Kontrollera Uppdateringar',
	),

/*
* frame_top.tpl
*/
	'xs_menu_lc' => 'extreme styles mod meny',
	'xs_support_forum_lc' => 'support forum',
	'xs_download_styles_lc' => 'ladda ner stilar',
	'xs_install_styles_lc' => 'installera stilar',

/*
* index.tpl
*/

	'xs_main_comment1' => 'eXtreme Styles mod huvud meny. Det finns en hel del funktioner inom detta gränssnitt, så den här sidan är här som en vägledning. Det finns en kort förklaring av varje funktion under funktionsnamnet.<br /><br />Notera: Detta mod ersätter Icy Phoenix stilars management. Du hittar standard Icy Phoenix funktioner i denna lista, men dessa funktioner är nu optimerade och har extra funktioner.<br /><br />Om du har några frågor, besök <a href="http://www.stsoftware.biz/forum" target="_blank">support forum</a> där du kan få hjälp med detta mod.',
	'xs_main_comment2' => 'eXtreme Styles mod tillåter en admin att lagra hela stilar i .style files. Stilar lagras i en liten komprimerad fil och genom att göra så här sparars problem med att ladda ner/ladda upp många filer. Stil filer är komprimerade så hämta/ladda upp är mycket effektivare än att ladda ner/ladda upp vanliga stil filer.',
	'xs_main_comment3' => 'Alla funktioner med Icy Phoenix stil hantering ersätts med eXtreme Styles mod.<br /><br /><a href="{URL}">Klicka här</a> för att se menyn.',
	'xs_main_title' => 'eXtreme Styles Navigerings Meny',
	'xs_menu' => 'eXtreme Styles Meny',

	'xs_manage_styles' => 'Hantera Stilar',
	'xs_import_export_styles' => 'Importera/Exportera Stilar',
	'xs_install_uninstall_styles' => 'Installera/Avinstallera Stilar',
	'xs_edit_templates' => 'Redigera Mallar',
	'xs_other_functions' => 'Andra Funktioner',

	'xs_configuration' => 'Konfiguration',
	'xs_configuration_explain' => 'Ändra eXtreme Styles konfigurationen.',
	'xs_default_style' => 'Standard Stil',
	'xs_default_style_explain' => 'Ändra standard forum stilen och ändra över från en stil till en annan.',
	'xs_manage_cache' => 'Hantera Cache',
	'xs_manage_cache_explain' => 'Hantera cached filer.',
	'xs_import_styles' => 'Importera Stilar',
	'xs_import_styles_explain' => 'Ladda ner och installera .style files.',
	'xs_export_styles' => 'Exportera Stilar',
	'xs_export_styles_explain' => 'Spara en stil från ditt forum som en .stil fil och sedan enkelt transportera den till ett annat forum eller en annan webbsida.',
	'xs_clone_styles' => 'Klona Stilar',
	'xs_clone_styles_explain' => 'Snabb klona stilar eller en hel mall.',
	'xs_download_styles' => 'Ladda Ner Stilar',
	'xs_download_styles_explain' => 'Snabb nerladdning och installera stilar från webbsidor. Du kan konfigurera en lista på webbsidor själv.',
	'xs_install_styles' => 'Installera Stilar',
	'xs_install_styles_explain' => 'Installera stilar som redan är uppladdade till ditt forum.',
	'xs_uninstall_styles' => 'Avinstallera Stilar',
	'xs_uninstall_styles_explain' => 'Flytta stilar från ditt forum.',
	'xs_edit_templates_explain' => 'Redigera tpl filer online.',
	'xs_edit_styles_data' => 'Redigera Stil Data',
	'xs_edit_styles_data_explain' => 'Redigera stil variabler. Det används av vissa stilar, men de flesta stilar använder en css-fil istället.',
	'xs_export_styles_data' => 'Exportera Stil Data',
	'xs_export_styles_data_explain' => 'Spara stil variabler till theme_info.cfg.',
	'xs_check_for_updates' => 'Kontrollera efter Uppdateringar',
	'xs_check_for_updates_explain' => 'Kontrollera efter uppdaterade versioner av stilar och mods som är installerade i ditt forum.',

	'xs_set_configuration_lc' => 'sätt konfiguration',
	'xs_set_default_style_lc' => 'sätt standard stilen',
	'xs_manage_cache_lc' => 'hantera cache',
	'xs_import_styles_lc' => 'importera stilar',
	'xs_export_styles_lc' => 'exportera stilar',
	'xs_clone_styles_lc' => 'klona stilar',
	'xs_uninstall_styles_lc' => 'avinstallera stilar',
	'xs_edit_templates_lc' => 'redigera mallar',
	'xs_edit_styles_data_lc' => 'redigera stil data',
	'xs_export_styles_data_lc' => 'exportera stil data',
	'xs_check_for_updates_lc' => 'sök efter uppdateringar',

/*
* ftp.tpl, ftp functions
*/

	'xs_ftp_comment1' => 'För att kunna använda den här funktionen måste du välja fil överförings metoden. Om du väljer FTP, sedan kommer inte ett lösenord att lagras och eXtreme Styles kommer att fråga dig efter ett lösenord varje gång du väljer funktioner som kräver FTP-åtkomst. Om du väljer lokala filsystemet så var säker på att alla katalogerna är skrivbara.',
	'xs_ftp_comment2' => 'För att kunna använda den här funktionen måste du ställa in FTP-inställningar. Ett lösenord kommer inte att lagras och eXtreme Styles kommer att fråga dig efter ett lösenord varje gång du väljer funktioner som kräver FTP-åtkomst.',
	'xs_ftp_comment3' => 'Varning: FTP-funktioner är avstängda på den här servern. Du kommer inte att kunna använda eXtreme Styles funktioner som kräver FTP-åtkomst.',

	'xs_ftp_title' => 'FTP Konfiguration',

	'xs_ftp_explain' => 'FTP används för att ladda upp nya stilar. Om du vill använda import stils funktionen bör du konfigurera FTP inställningar följaktligen. eXtreme Styles försöker att automatiskt identifiera inställningar när och om möjligt.',

	'xs_ftp_error_fatal' => 'FTP funktioner är avstängda på den här servern. Kan inte fortsätta.',
	'xs_ftp_error_connect' => 'FTP error: kan inte ansluta till {HOST}',
	'xs_ftp_error_login' => 'FTP error: kan inte logga in',
	'xs_ftp_error_chdir' => 'FTP error: kan inte ändra katalog till {DIR}',
	'xs_ftp_error_nonphpbbdir' => 'FTP error: du har angett ogiltig katalog. Det finns inga Icy Phoenix filer i den katalogen',
	'xs_ftp_error_noconnect' => 'Kan inte ansluta till ftp-servern',
	'xs_ftp_error_login2' => 'Ogiltig ftp inloggning eller lösenord',

	'xs_ftp_log_disabled' => 'ftp funktioner är avstängda på den här servern. Skriptet kan inte fortsätta.',
	'xs_ftp_log_connecting' => 'ansluter till {HOST}',
	'xs_ftp_log_noconnect' => 'kan inte ansluta till {HOST}',
	'xs_ftp_log_connected' => 'ansluten. loggar in...',
	'xs_ftp_log_nologin' => 'kan inte logga in som {USER}',
	'xs_ftp_log_loggedin' => 'loggad in',
	'xs_ftp_log_end' => 'färdiga verkställande script',
	'xs_ftp_log_nopwd' => 'error: kan inte hämta aktuella katalogen',
	'xs_ftp_log_nomkdir' => 'error: kan inte skapa katalogen {DIR}',
	'xs_ftp_log_mkdir' => 'skapade katalogen {DIR}',
	'xs_ftp_log_nochdir' => 'error: kan inte ändra katalog till {DIR}',
	'xs_ftp_log_normdir' => 'error: kan inte flytta katalog {DIR}',
	'xs_ftp_log_rmdir' => 'förflyttad katalog {DIR}',
	'xs_ftp_log_chdir' => 'ändrade katalog till {DIR}',
	'xs_ftp_log_noupload' => 'error: kan inte ladda upp filen {FILE}',
	'xs_ftp_log_upload' => 'upplagda filen {FILE}',
	'xs_ftp_log_nochmod' => 'varning: kan inte chmod fil {FILE}',
	'xs_ftp_log_chmod' => 'chmod fil {FILE} till {MODE}',
	'xs_ftp_log_invalidcommand' => 'error: okänt kommando: {COMMAND}',
	'xs_ftp_log_chdir2' => 'ändra nuvarande katalog tillbaka till {DIR}',
	'xs_ftp_log_nochdir2' => 'kan inte byta katalog till {DIR}',

	'xs_ftp_config' => 'FTP Konfiguration',
	'xs_ftp_select_method' => 'Välj uppladdnings metod',
	'xs_ftp_select_local' => 'Använd lokala filsystemet (ingen konfiguration krävs)',
	'xs_ftp_select_ftp' => 'Använd FTP (sätt ftp inställningar nedan)',

	'xs_ftp_settings' => 'FTP Inställningar',
	'xs_ftp_host' => 'FTP Värd',
	'xs_ftp_login' => 'FTP Inloggning',
	'xs_ftp_path' => 'FTP Sökvägen till Icy Phoenix',
	'xs_ftp_pass' => 'FTP Lösenord',
	'xs_ftp_remotedir' => 'Otillgänglig  Katalog',

	'xs_ftp_host_guess' => ' (probably "{HOST}" [<a href="javascript: void(0)" onclick="{CLICK}">sätt värd</a>])',
	'xs_ftp_login_guess' => ' (probably "{LOGIN}" [<a href="javascript: void(0)" onclick="{CLICK}">sätt värd</a>])',
	'xs_ftp_path_guess' => ' (probably "{PATH}" [<a href="javascript: void(0)" onclick="{CLICK}">sätt sökväg</a>])',


/*
* config.tpl
*/
	'xs_config_updated' => 'Konfiguration uppdaterad.',
	'xs_config_updated_explain' => 'Du behöver uppdatera sidan innan den nya konfigurationen kan träda i kraft. <a href="{URL}">Klicka här</a> för att uppdatera sidan.',
	'xs_config_warning' => 'Varning: cache kan inte skrivas.',
	'xs_config_warning_explain' => 'Cache katalogen är inte skrivbar. eXtreme Styles kan försöka att åtgärda problemet.<br /><a href="{URL}">Klicka här</a> för att försöka ändra tillgång till cache katalogen.<br /><br />Om cacheen inte fungerar på din server av någon anledning var inte orolig - eXtreme Styles<br />ökar forum hastigheten många gånger även utan cache.',

	'xs_config_maintitle' => 'eXtreme Styles mod Konfiguration',
	'xs_config_subtitle' => 'Konfigurationen för eXtreme Styles. Om du inte förstår vad vissa variabler gör ändra då inte dem.',
	'xs_config_title' => 'eXtreme Styles mod v{VERSION} inställningar',
	'xs_config_cache' => 'Cache konfiguration',

	'xs_config_navbar' => 'Visa i vänstra ramen:',
	'xs_config_navbar_explain' => 'Du kan välja vilka objekt som ska visas i vänstra ramen i Admin Kontroll Panel.',

	'xs_config_def_template' => 'Standard Mallens Katalog',
	'xs_config_def_template_explain' => 'Om en obligatoriskt tpl fil inte finns i nuvarande mall katalogen (som skulle kunna hända om du modded Icy Phoenix felaktigt) då kommer mallsystem att leta efter samma fil i en tillhörande katalog (om den nuvarande mallen är "myTemplate" och skriptet kräver filen "myTemplate/myfile.tpl" och om filen inte är där då kommer mallsystemet att leta efter den filen som "default/myfile.tpl"). Ställ in till tom för att inaktivera den här funktionen.',

	'xs_config_check_switches' => 'Kontrollera växlingar medan sammanställningen',
	'xs_config_check_switches_explain' => 'Denna funktion kontrollerar efter fel i mallar. Att stänga av den kommer att påskynda sammanställning, men kompilatorn kan hoppa över några fel i mallar om den innehåller fel.<br /><br />Smart kontroll kontrollerar mallar efter fel och automatiskt åtgärdar alla kända fel (det finns några kända skrivfel i olika mods). Fungerar lite långsammare än enkel kontroll.<br /><br />Men ibland ser mallarna korrekt ut endast när fel kontrollen är avaktiverad, det här händer på grund av dålig HTML kodning - kontakta den som skrev tpl filen om du vill rätta till felet.<br /><br />Om cache-funktionen är avstängd, stäng då av detta för snabbare sammanställning.',
	'xs_config_check_switches_0' => 'Av',
	'xs_config_check_switches_1' => 'Smart kontroll',
	'xs_config_check_switches_2' => 'Enkel kontroll',

	'xs_config_show_errors' => 'Visar fel när filerna är felaktigt inkluderade i tpl filer',
	'xs_config_show_error_explain' => 'Denna funktion aktiverar/avaktiverar fel i tpl filer som användaren använder felaktigt &lt;!-- INKLUDERAR filnamn --&gt;',

	'xs_config_tpl_comments' => 'Lägg till tpl filnamn i html',
	'xs_config_tpl_comments_explain' => 'Denna funktion lägger till kommentarer till html-koden som gör att stilens formgivare kan upptäcka vilken tpl fil som visas.',

	'xs_config_use_cache' => 'Använd cache',
	'xs_config_use_cache_explain' => 'Cache sparas på hårddisken och det kommer att påskynda mallens system eftersom det inte skulle finnas något behov av att sammanställa mallen varje gång det visas.',

	'xs_config_auto_compile' => 'Automatiskt spara cache',
	'xs_config_auto_compile_explain' => 'Detta kommer att automatiskt sammanställa mallar som inte är cachade och spara dessa till cache katalogen.',

	'xs_config_auto_recompile' => 'Automatiskt återställa cache',
	'xs_config_auto_recompile_explain' => 'Detta kommer automatiskt att återställa mallar om en mall har ändrats.',

	'xs_config_php' => 'Tillägg av cache filnamn',
	'xs_config_php_explain' => 'Detta är Tillägg av cachade filer. Filer är lagrade i php-format så standardtillägget är "php". Ta inte med prick',

	'xs_config_back' => '<a href="{URL}">Klicka här</a> för att återgå till konfigurationen.',
	'xs_config_sql_error' => 'Det gick inte att uppdatera allmänna konfigurationen för {VAR}',

// Debug info
	'xs_debug_header' => 'Debug info',
	'xs_debug_explain' => 'Detta är debug info. Används för att hitta/åtgärda problem när man konfigurerar cache.',
	'xs_debug_vars' => 'Mall variabler',
	'xs_debug_tpl_name' => 'Mall filnamn:',
	'xs_debug_cache_filename' => 'Cache filnamn:',
	'xs_debug_data' => 'Debug data:',

	'xs_check_hdr' => 'Kontrollera cache för %s',
	'xs_check_filename' => 'Error: ogiltigt filnamn',
	'xs_check_openfile1' => 'Error: kan inte öppna filen "%s". Kommer att försöka skapa kataloger...',
	'xs_check_openfile2' => 'Error: kan inte öppna filen "%s" för andra gången. Ger upp...',
	'xs_check_nodir' => 'Kontrollerar "%s" - ingen sådan katalog.',
	'xs_check_nodir2' => 'Error: går inte att skapa katalogen "%s" - du kanske behöver kontrollera behörigheter.',
	'xs_check_createddir' => 'Skapad katalog "%s"',
	'xs_check_dir' => 'Kontrollerar "%s" - katalogens existens.',
	'xs_check_ok' => 'Öppnar fil "%s" för skrivning. Allt verkar vara ok.',
	'xs_error_demo_edit' => 'Du kan inte redigera filen i demoläge',
	'xs_error_not_installed' => 'eXtreme Styles är inte installerat. Du har glömt att ladda upp includes/template.php',

/*
* chmod
*/
	'xs_chmod' => 'CHMOD',
	'xs_chmod_return' => '<br /><br /><a href="{URL}">Klicka här</a> för att återgå till konfigurationen.',
	'xs_chmod_message1' => 'Konfigurationen ändrad.',
	'xs_chmod_error1' => 'Kan inte ändra tillgångs mode till cache katalogen',


/*
* default style
*/
	'xs_def_title' => 'Sätt Standard Stil',
	'xs_def_explain' => 'Denna funktion tillåter dig att du snabbt kan ändra standard forum stil och även växla användare från ett format till ett annat.',

	'xs_styles_set_default' => 'sätt som standard',
	'xs_styles_no_override' => 'åsidosätt inte användar inställningar',
	'xs_styles_do_override' => 'åsidosätt användar inställningar',
	'xs_styles_switch_all' => 'växla alla användare till denna stil',
	'xs_styles_switch_all2' => 'växla alla användare till:',
	'xs_styles_defstyle' => 'standard stil',
	'xs_styles_available' => 'Tillgängliga stilar',
	'xs_styles_make_public' => 'gör stil offentlig',
	'xs_styles_make_admin' => 'gör stil admin-bara',
	'xs_styles_users' => 'Användare Lista',


/*
* cache management
*/
	'xs_manage_cache_explain2' => 'Denna funktion tillåter dig att sammanställa eller ta bort cachade filer för stilar.',
	'xs_clear_all_lc' => 'rensa alla',
	'xs_compile_all_lc' => 'sammanställ alla',
	'xs_clear_cache_lc' => 'rensa cache',
	'xs_compile_cache_lc' => 'sammanställ cache',
	'xs_cache_confirm' => 'Om du har många stilar kan detta vålla stora server belastningar. Är du säker på att du vill fortsätta?',

	'xs_cache_nowrite' => 'Error: kan inte komma åt cache katalogen',
	'xs_cache_log_deleted' => 'Raderade {FILE}',
	'xs_cache_log_nodelete' => 'Error: kan inte radera filen {FILE}',
	'xs_cache_log_nothing' => 'Ingenting att radera för mall {TPL}',
	'xs_cache_log_nothing2' => 'Ingenting att radera i cache katalogen',
	'xs_cache_log_count' => 'Successfullt raderade {NUM} filer',
	'xs_cache_log_count2' => 'Error raderar {NUM} filer',
	'xs_cache_log_compiled' => 'Sammanställ: {NUM} filer',
	'xs_cache_log_errors' => 'Errors: {NUM}',
	'xs_cache_log_noaccess' => 'Error: kan inte komma åt katalog {DIR}',
	'xs_cache_log_compiled2' => 'Sammanställ: {FILE}',
	'xs_cache_log_nocompile' => 'Error sammanställning: {FILE}',

/*
* export/import/download/clone
*/
	'xs_import_explain' => 'Importera stilar. Du kan också automatiskt installera och uppdatera stilar.<br /><br />Notera: Om du har lagt till några mods (med undantag för eXtreme Styles mod) på detta forum så ska du vara försiktig när du importerar stilar eftersom stilarna kanske inte är förenligt med ditt forum. Du kan bara installera stilar som har samma ändringar som de andra stilarna som du har konfigurerade på ditt forum.',

	'xs_import_lc' => 'importera',
	'xs_list_files_lc' => 'lista filer',
	'xs_delete_file_lc' => 'radera fil',
	'xs_export_style_lc' => 'exportera stil',

	'xs_import_no_cached' => 'Det finns inga cachade stilar att importera',
	'xs_add_styles' => 'Lägg till Stilar',
	'xs_add_styles_web' => 'Ladda ner från webben',
	'xs_add_styles_web_get' => 'Ta den',
	'xs_add_styles_copy' => 'Kopiera från lokal fil',
	'xs_add_styles_copy_get' => 'Kopiera',
	'xs_add_styles_upload' => 'Ladda Upp från datorn',
	'xs_add_styles_upload_get' => 'Ladda Upp',

	'xs_export_style' => 'Exportera Stil',
	'xs_export_style_explain' => 'Exportera en stil som en enda fil. Denna enda fil är mycket liten - mindre än en .Zip fil (eftersom den är komprimerad med gzip, som fungerar bättre än zip) och alla stilar som ingår är en enda fil. I gengäld är det mycket enkelt att överföra stilar från ett forum till ett annat.<br /><br />Den här funktionen tillåter dig även att ladda upp exporterade stilar genom användning av ftp till en server. Detta system gör att du kan överföra ett format till ett annat forum snabbt utan att manuellt kopiera den.',

	'xs_export_style_title' => 'Exportera Mall "{TPL}"',
	'xs_export_tpl_name' => 'Exportera som (mallnamn)',
	'xs_export_style_names' => 'Välj stil(ar) att exportera',
	'xs_export_style_name' => 'Stil att exportera (stil namn)',
	'xs_export_style_comment' => 'Kommentar',
	'xs_export_where' => 'Exportera Vart',
	'xs_export_where_download' => 'Ladda ner som fil',
	'xs_export_where_store' => 'Lagra som fil på servern',
	'xs_export_where_store_dir' => 'Katalog',
	'xs_export_where_ftp' => 'Ladda Upp via FTP',
	'xs_export_filename' => 'Exportera filnamn',

	'xs_download_explain2' => 'Snabbt ladda ner och installera stilar direkt från olika webbplatser. Klicka på länken intill webbplatsens namn och du kommer att omdirigeras till en stil nerladdnings sida.<br /><br />Du kan också hantera listan över webbplatser.',

	'xs_download_locations' => 'Nerladdnings Plats',
	'xs_edit_link' => 'Redigera Länk',
	'xs_add_link' => 'Lägg till Länk',
	'xs_link_title' => 'Länk Titel',
	'xs_link_url' => 'Länk URL',
	'xs_delete' => 'Radera',

	'xs_style_header_error_file' => 'Kan inte öppna lokal fil',
	'xs_style_header_error_server' => 'Error på servern: ',
	'xs_style_header_error_invalid' => 'Ogiltigt fil huvud',
	'xs_style_header_error_reason' => 'Error vid läsning av fil huvud: ',
	'xs_style_header_error_incomplete' => 'Filen är ofullständig',
	'xs_style_header_error_incomplete2' => 'Ogiltig filstorlek. Förmodligen är filen ofullständig.',
	'xs_style_header_error_invalid2' => 'Ogiltig fil. Förmodligen,är filen inte en eXtreme Styles mod-kompatibel stil eller ogiltig version.',
	'xs_error_cannot_open' => 'Kan inte öppna filen.',
	'xs_error_decompress_style' => 'Error dekompression fil. Förmodligen är filen skadad.',
	'xs_error_cannot_create_file' => 'Kan inte skapa fil "{FILE}"',
	'xs_error_cannot_create_tmp' => 'Kan inte skapa temporär fil "{FILE}"',
	'xs_import_invalid_file' => 'Ogiltig fil',
	'xs_import_incomplete_file' => 'Ofullständig fil',
	'xs_import_uploaded' => 'Stil uppladdad.',
	'xs_import_installed' => 'Stil uppladdad och installerad.',
	'xs_import_notinstall' => 'Stil uppladdad, men fel vid installering av stil (sql error).',
	'xs_import_notinstall2' => 'Stil uppladdad, men fel vid installering av stil: inga stilar funna i theme_info.cfg',
	'xs_import_notinstall3' => 'Stil uppladdad, men fel vid installering av stil: ingen post för "{STYLE}" funnen i theme_info.cfg',
	'xs_import_notinstall4' => 'Stil uppladdad, men fel vid installering av stil: kunde inte få nästa themes_id information',
	'xs_import_notinstall5' => 'Stil uppladdad, men fel vid installering av stil: kunde inte uppdatera stil tabellen',
	'xs_import_nodownload' => 'Kan inte ladda ner stilen från {URL}',
	'xs_import_nodownload2' => 'Kan inte kopiera stilen från {URL}',
	'xs_import_nodownload3' => 'Fil ej uppladdad.',
	'xs_import_uploaded2' => 'Stil nerladdad. Nu kan du importera den.<br /><br /><a href="{URL}">Klicka här</a> för att importera stil.',
	'xs_import_uploaded3' => 'Stil kopierad. Nu kan du importera den.<br /><br /><a href="{URL}">Klicka här</a> för att importera stil.',
	'xs_import_uploaded4' => 'Stil uppladdad. Nu kan du importera den.<br /><br /><a href="{URL}">Klicka här</a> för att importera stil.',
	'xs_export_no_open_dir' => 'Kan inte öppna katalog {DIR}',
	'xs_export_no_open_file' => 'Kan inte öppna filen {FILE}',
	'xs_export_no_read_file' => 'Error läsning av fil {FILE}',
	'xs_no_theme_data' => 'Kunde inte få stil data för utvald mall',
	'xs_no_style_info' => 'Kunde inte få stil information',
	'xs_export_noselect_themes' => 'Du ska välja minst en stil',
	'xs_export_error' => 'Kan inte exportera mall "{TPL}": ',
	'xs_export_error2' => 'Kan inte exportera mall "{TPL}": stilen är tom',
	'xs_export_saved' => 'Stil är sparad som "{FILE}"',
	'xs_export_error_uploading' => 'Error uppladdning av fil',
	'xs_export_uploaded' => 'Fil uppladdad.',
	'xs_clone_taken' => 'Denna stils namn används redan.',
	'xs_error_new_row' => 'Det gick inte att infoga ny rad i tabellen.',
	'xs_theme_cloned' => 'Stil klonad.',
	'xs_invalid_style_name' => 'Ogiltigt stil namn.',
	'xs_clone_style_exists' => 'Denna mall finns redan',
	'xs_clone_no_select' => 'Du ska välja minst en stil att klona.',
	'xs_no_themes' => 'Stilen hittades inte i databasen.',

	'xs_import_back' => '<a href="{URL}">Klicka här</a> för att återgå till importera stilar sidan.',
	'xs_import_back_download' => '<a href="{URL}" target="main">Klicka här</a> för att återgå till nerladdningar.',
	'xs_export_back' => '<a href="{URL}">Klicka här</a> för att återgå till exportera stilar sidan.',
	'xs_clone_back' => '<a href="{URL}">Klicka här</a> för att återgå till klona stilar sidan.',
	'xs_download_back' => '<a href="{URL}">Klicka här</a> för att återgå till nerladdningssidan.',

	'xs_import_tpl' => 'Importera Mall "{TPL}"',
	'xs_import_tpl_comment' => 'Ladda Upp en mall till ditt forum. Om mallen med detta namn redan finns på ditt forum kommer den här funktionen automatiskt att skriva över gamla filer så det också kan användas för att uppdatera stilar.<br /><br />Denna funktion kan också automatiskt installera stilar. Om du vill installera en stil efter att du har importerat den välj då en eller flera stilar nedan.',
	'xs_import_tpl_filename' => 'Filnamn:',
	'xs_import_tpl_tplname' => 'Mall namn:',
	'xs_import_tpl_comment2' => 'Kommentar:',
	'xs_import_select_styles' => 'Välj stil(ar) att installera:',
	'xs_import_install_def_lc' => 'Gör standard forum stil',
	'xs_import_install_style' => 'Installera stil:',
	'xs_import' => 'Importera',

	'xs_import_list_contents' => 'Innehåll i filen: ',
	'xs_import_list_filename' => 'Filnamn: ',
	'xs_import_list_template' => 'Mall: ',
	'xs_import_list_comment' => 'Kommentar: ',
	'xs_import_list_styles' => 'Stil(ar): ',
	'xs_import_list_files' => 'Filer ({NUM}):',
	'xs_import_download_lc' => 'ladda ner fil',
	'xs_import_view_lc' => 'granska fil',
	'xs_import_file_size' => '({NUM} bytes)',

	'xs_import_nogzip' => 'Den här funktionen kräver gz komprimering, och uppenbarligen stöds inte den på den här servern.',
	'xs_import_nowrite_cache' => 'Kan inte skriva till cache. Den här funktionen kräver att cache ska vara skrivbar. Kontrollera mod konfiguration.<br /><br /><a href="{URL1}">Klicka här</a> för att göra cache skrivbar.<br /><br /><a href="{URL2}">Klicka här</a> för att återgå till import sidan.',

	'xs_import_download_warning' => 'Detta kommer att ta dig till en extern webbsida där du snabbt kan ladda ner stilar med ett par enkla klick med hjälp av eXtreme Styles import funktionen.',

	'xs_clone_style' => 'Klona Stil',
	'xs_clone_style_explain' => 'Snabbt klona stil eller hela mallen.<br /><br />Varning: Om du kopierar mallen fråga ägaren av denna ursprungliga mallen om du får göra detta (om det inte är subSilver - med den kan du göra vad du vill med subSilver). Vanligtvis medger Ägarna ändring av deras stilar, men ändrade stilar skall inte distribueras.',
	'xs_clone_style_explain2' => 'Skapa ny stil för en mall. Den här funktionen kommer inte att kopiera några filer - det kommer att lägga in poster i databasen för din nya stil. Både gamla och nya stilar kommer att dela samma mallar.',
	'xs_clone_style_explain3' => 'Ange namn för nya stilen som du vill skapa och klicka på "klon" knappen.',
	'xs_clone_style_explain4' => 'Denna funktion tillåter dig att klona en mall. Du kan också kopiera alla stilar som är associerade med den mallen. Senare kan du säkert redigera tpl filer för ny mall och den gamla mallen kommer inte att påverkas.',

	'xs_clone_style_lc' => 'klona stil',
	'xs_clone_style2' => 'Klona stil "{STYLE}":',
	'xs_clone_style3' => 'Klona Mall "{STYLE}"',
	'xs_clone_newdir_name' => 'Ny mall (katalog) namn:',
	'xs_clone_select' => 'Välj stil(ar) att klona:',
	'xs_clone_select_explain' => 'Du ska välja minst en stil.',
	'xs_clone_newname' => 'Ny stil namn:',


/*
* install/uninstall
*/
	'xs_install_styles_explain2' => 'Detta är en lista över stilar som laddats upp på ditt forum, men inte installerade. Klicka på "installera" länken för den stil som du vill installera, eller välj flera stilar och klicka på skicka knappen.',
	'xs_uninstall_styles_explain2' => 'Detta är en lista över stilar som är installerade på ditt forum. Klicka på "avinstallera" länk för att ta bort vissa stilar från forumet. Avinstallation är säker - alla användare som använder stilarna som avinstallerats kommer att kopplas om till standard forum stilen. Också avinstalleraren kommer automatiskt att bort cachen för stilen.',

	'xs_install' => 'Installera',
	'xs_install_lc' => 'installera',
	'xs_uninstall' => 'Avinstallera',
	'xs_remove_files' => 'Flytta Filer',
	'xs_style_removed' => 'Stil Förflyttad.',
	'xs_uninstall_lc' => 'avinstallera',
	'xs_uninstall2_lc' => 'avinstallera och radera filer',

	'xs_install_back' => '<a href="{URL}">Klicka här</a> för att återvända till stil installationen.',
	'xs_uninstall_back' => '<a href="{URL}">Klicka här</a> för att återvända till stil avinstallationen.',
	'xs_goto_default' => '<a href="{URL}">Klicka här</a> för att ändra standard stilen.',

	'xs_install_installed' => 'Stil(ar) installerad.',
	'xs_install_error' => 'Error installera stil.',
	'xs_install_none' => 'Det finns inga nya stilar att installera. Alla tillgängliga stilar är redan installerade.',

	'xs_uninstall_default' => 'Du kan inte ta bort standard mallen. Om du vill ändra standard mallen <a href="{URL}">klicka här</a>.',

/*
* export theme_info.cfg
*/
	'xs_export_styles_data_explain2' => 'Denna funktion sparar stil uppgifter i theme_info.cfg. Det kan användas för att spara databasinformation innan stilar från ett forum till en annat överlåtes.<br /><br />Notera: Om du använder eXtreme Styles export-funktionen för att flytta ett format till ett annat forum behöver du inte spara theme_info.cfg - det görs automatiskt av stil export funktionen.',
	'xs_export_styles_data_explain3' => 'Välj stilar som du vill exportera.',

	'xs_export_data_back' => '<a href="{URL}">Klicka här</a> för att återvända till export stil data sida.',
	'xs_export_style_data_lc' => 'exportera stil data',

	'xs_export_data_saved' => 'Data exporteras.',

/*
* edit templates (file manager)
*/
	'xs_edit_template_comment1' => 'Redigera mallar. Fil Bläddring visar bara redigerbara filer.',
	'xs_edit_template_comment2' => 'Redigera mallar.',
	'xs_edit_file_saved' => 'Filen är sparad.',
	'xs_edit_not_found' => 'Filen hittades inte.',
	'xs_edittpl_back_dir' => '<a href="{URL}">Klicka här</a> för att återvända till filhanteraren.',

	'xs_fileman_browser' => 'Fil Bläddraren',
	'xs_fileman_directory' => 'Katalog:',
	'xs_fileman_dircount' => 'Kataloger ({COUNT}):',
	'xs_fileman_filter' => 'Filtrera',
	'xs_fileman_filter_ext' => 'Visa endast filer med tillägg:',
	'xs_fileman_filter_content' => 'Visa bara filer som innehåller:',
	'xs_fileman_filter_clear' => 'Rensa Filter',
	'xs_fileman_filename' => 'Filnamn',
	'xs_fileman_filesize' => 'Storlek',
	'xs_fileman_filetime' => 'Modifiering',
	'xs_fileman_options' => 'Alternativ',
	'xs_fileman_time_today' => '(idag)',
	'xs_fileman_edit_lc' => 'redigera',

	'xs_fileedit_search_nomatch' => 'Matchningen hittades inte',
	'xs_fileedit_search_match1' => 'Ersatt 1 matchning',
	'xs_fileedit_search_matches' => "Ersatt ' + räkna + ' matchningar",
	'xs_fileedit_noundo' => 'Det finns inget att ångra',
	'xs_fileedit_undo_complete' => 'Gamla innehåll återställda',
	'xs_fileedit_edit_name' => 'Redigera filen:',
	'xs_fileedit_location' => 'Plats:',
	'xs_fileedit_reload_lc' => 'ladda om filen',
	'xs_fileedit_download_lc' => 'ladda ner filen',
	'xs_fileedit_trim' => 'Automatiskt trim blanksteg i början och slutet av filen.',
	'xs_fileedit_functions' => 'Redigera Funktionerna',
	'xs_fileedit_replace1' => 'Ersätt ',
	'xs_fileedit_replace2' => ' med ',
	'xs_fileedit_replace_first_lc' => 'ersätt första matchning',
	'xs_fileedit_replace_all_lc' => 'ersätt alla matchningar',
	'xs_fileedit_replace_undo_lc' => 'ångra ersättning',
	'xs_fileedit_backups' => 'Backups',
	'xs_fileedit_backups_save_lc' => 'spara backup',
	'xs_fileedit_backups_show_lc' => 'visa innehåll',
	'xs_fileedit_backups_restore_lc' => 'återställ',
	'xs_fileedit_backups_download_lc' => 'ladda ner',
	'xs_fileedit_backups_delete_lc' => 'radera',
	'xs_fileedit_upload' => 'Ladda upp',
	'xs_fileedit_upload_file' => 'Ladda upp fil:',

/*
* edit styles data (theme_info)
*/
	'xs_data_head_stylesheet' => 'CSS Stylesheet',
	'xs_data_body_background' => 'Bakgrunds Bild',
	'xs_data_body_bgcolor' => 'Bakgrunds Färg',
	'xs_data_style_name' => 'Stil Namn',
	'xs_data_body_link' => 'Länk Färg',
	'xs_data_body_text' => 'Text Färg',
	'xs_data_body_vlink' => 'Besökt Länk Färg',
	'xs_data_body_alink' => 'Aktiv Länk Färg',
	'xs_data_body_hlink' => 'Hover Länk Färg',
	'xs_data_tr_color' => 'Tabell Rad Färg %s',
	'xs_data_tr_class' => 'Tabell Rad Class %s',
	'xs_data_th_color' => 'Tabell Header Färg %s',
	'xs_data_th_class' => 'Tabell Header Class %s',
	'xs_data_td_color' => 'Tabell Cell Färg %s',
	'xs_data_td_class' => 'Tabell Cell Class %s',
	'xs_data_fontface' => 'Teckensnitts Face %s',
	'xs_data_fontsize' => 'Teckensnitts Storlek %s',
	'xs_data_fontcolor' => 'Teckensnitts Färg %s',
	'xs_data_span_class' => 'Span Class %s',
	'xs_data_img_size_poll' => 'Undersökningar Bildstorlek [px]',
	'xs_data_img_size_privmsg' => 'Privat Meddelande Status storlek [px]',
	'xs_data_theme_public' => 'Offentlig Stil (1 eller 0)',
	'xs_data_unknown' => 'Beskrivningen är inte tillgänglig (%s)',

	'xs_edittpl_error_updating' => 'Error uppdatering stil.',
	'xs_edittpl_style_updated' => 'Stil uppdaterad.',
	'xs_invalid_style_id' => 'Ogiltig stil id.',

	'xs_edittpl_back_edit' => '<a href="{URL}">Klicka här</a> för att återvända till redigering.',
	'xs_edittpl_back_list' => '<a href="{URL}">Klicka här</a> för att återvända till stil listan.',

	'xs_editdata_explain' => 'Redigera databasens data för installerade stilar. Vissa stilar ignorerar databas värden och använder css-filer i stället, och vissa stilar använder endast en del av databasens värde.',
	'xs_editdata_var' => 'Variabel',
	'xs_editdata_value' => 'Värde',
	'xs_editdata_comment' => 'Kommentar',

/*
* updates
*/

	'xs_updates' => 'Uppdateringar',
	'xs_updates_comment' => 'Kontrollera efter uppdateringar av vissa stilar och mods. Det fungerar bara med poster som har relevant uppdaterad information.',
	'xs_updates_comment2' => 'Detta är resultatet av versions kontrollen.',
	'xs_update_total1' => 'Totalt: {NUM} poster',
	'xs_update_info1' => 'Denna administratörs funktionen söker efter tillgängliga uppdateringar av phpBB vissa mods, och vissa stilar installerade på dit forum. När det finns tillgängliga uppdateringar visar den länken där du kan ladda ner den uppdaterade filen.<br /><br />Den här funktionen kräver att sockets ska vara aktiverad. På de flesta gratis webbhotellen har inte denna funktion, så om detta forum ligger på en fri värd (som Lycos) så kan du inte använda funktionen, men om detta forum ligger på normal server bör allt vara okej.<br /><br />När du klickar på "Fortsätt" kommer skriptet att kontrollera all programvara som är installerad på forumet. Om din webbplats är långsam kan det ta lite tid. Ha tålamod och klicka inte på "stopp" i din webbläsare om processen försenas. Om servern är långsam eller uppdatera webbplatsen är långsam då kan skriptet ta timeout - Om detta inträffar bör du öka timeout-värdet.',
	'xs_update_name' => 'Namn',
	'xs_update_type' => 'Typ',
	'xs_update_current_version' => 'Din version',
	'xs_update_latest_version' => 'Senaste version',
	'xs_update_downloadinfo' => 'Nerladdnings URL',
	'xs_update_timeout' => 'Uppdatera script timeout (sekunder):',
	'xs_update_continue' => 'Fortsätt',


	'xs_update_total2' => 'Errors: {NUM}',
	'xs_update_total3' => 'Uppdaterar tillgängliga: {NUM} poster',
	'xs_update_select1' => 'Välj poster att uppdatera',
	'xs_update_types' => array(
		0 => 'Okänd',
		1 => 'Stil',
		2 => 'Mod',
		3 => 'phpBB',
		4 => 'Icy Phoenix'
	),
	'xs_update_fileinfo' => 'Mer info',
	'xs_update_nothing' => 'Det finns ingenting att uppdatera.',
	'xs_update_noupdate' => 'Du använder den senaste versionen.',

	'xs_update_error_url' => 'Error: kan inte hämta url %s',
	'xs_update_error_noitem' => 'Error: Ingen uppdaterings information tillgänglig',
	'xs_update_error_noconnect' => 'Error: Kan inte ansluta till uppdaterad server',

	'xs_update_download' => 'ladda ner',
	'xs_update_downloadinfo2' => 'nerladdning/info',
	'xs_update_info' => 'webbsida',

	'xs_permission_denied' => 'Rättigheter Nekade',

	'xs_download_lc' => 'ladda ner',
	'xs_info_lc' => 'info',

/*
* style configuration
*/
	'Template_Config' => 'Mall Config',
	'xs_style_configuration' => 'Mall Konfiguration',
	)
);

?>