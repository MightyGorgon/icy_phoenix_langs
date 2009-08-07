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
	'xs_users' => 'Anv�ndare',
	'xs_options' => 'Alternativ',
	'xs_comment' => 'Kommentar',
	'xs_upload_time' => 'Uppladdnings Tid',
	'xs_select' => 'V�lj',

	'xs_continue' => 'Forts�tt',	// button

	'xs_click_here_lc' => 'klicka h�r',
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

	'xs_main_comment1' => 'eXtreme Styles mod huvud meny. Det finns en hel del funktioner inom detta gr�nssnitt, s� den h�r sidan �r h�r som en v�gledning. Det finns en kort f�rklaring av varje funktion under funktionsnamnet.<br /><br />Notera: Detta mod ers�tter Icy Phoenix stilars management. Du hittar standard Icy Phoenix funktioner i denna lista, men dessa funktioner �r nu optimerade och har extra funktioner.<br /><br />Om du har n�gra fr�gor, bes�k <a href="http://www.stsoftware.biz/forum" target="_blank">support forum</a> d�r du kan f� hj�lp med detta mod.',
	'xs_main_comment2' => 'eXtreme Styles mod till�ter en admin att lagra hela stilar i .style files. Stilar lagras i en liten komprimerad fil och genom att g�ra s� h�r sparars problem med att ladda ner/ladda upp m�nga filer. Stil filer �r komprimerade s� h�mta/ladda upp �r mycket effektivare �n att ladda ner/ladda upp vanliga stil filer.',
	'xs_main_comment3' => 'Alla funktioner med Icy Phoenix stil hantering ers�tts med eXtreme Styles mod.<br /><br /><a href="{URL}">Klicka h�r</a> f�r att se menyn.',
	'xs_main_title' => 'eXtreme Styles Navigerings Meny',
	'xs_menu' => 'eXtreme Styles Meny',

	'xs_manage_styles' => 'Hantera Stilar',
	'xs_import_export_styles' => 'Importera/Exportera Stilar',
	'xs_install_uninstall_styles' => 'Installera/Avinstallera Stilar',
	'xs_edit_templates' => 'Redigera Mallar',
	'xs_other_functions' => 'Andra Funktioner',

	'xs_configuration' => 'Konfiguration',
	'xs_configuration_explain' => '�ndra eXtreme Styles konfigurationen.',
	'xs_default_style' => 'Standard Stil',
	'xs_default_style_explain' => '�ndra standard forum stilen och �ndra �ver fr�n en stil till en annan.',
	'xs_manage_cache' => 'Hantera Cache',
	'xs_manage_cache_explain' => 'Hantera cached filer.',
	'xs_import_styles' => 'Importera Stilar',
	'xs_import_styles_explain' => 'Ladda ner och installera .style files.',
	'xs_export_styles' => 'Exportera Stilar',
	'xs_export_styles_explain' => 'Spara en stil fr�n ditt forum som en .stil fil och sedan enkelt transportera den till ett annat forum eller en annan webbsida.',
	'xs_clone_styles' => 'Klona Stilar',
	'xs_clone_styles_explain' => 'Snabb klona stilar eller en hel mall.',
	'xs_download_styles' => 'Ladda Ner Stilar',
	'xs_download_styles_explain' => 'Snabb nerladdning och installera stilar fr�n webbsidor. Du kan konfigurera en lista p� webbsidor sj�lv.',
	'xs_install_styles' => 'Installera Stilar',
	'xs_install_styles_explain' => 'Installera stilar som redan �r uppladdade till ditt forum.',
	'xs_uninstall_styles' => 'Avinstallera Stilar',
	'xs_uninstall_styles_explain' => 'Flytta stilar fr�n ditt forum.',
	'xs_edit_templates_explain' => 'Redigera tpl filer online.',
	'xs_edit_styles_data' => 'Redigera Stil Data',
	'xs_edit_styles_data_explain' => 'Redigera stil variabler. Det anv�nds av vissa stilar, men de flesta stilar anv�nder en css-fil ist�llet.',
	'xs_export_styles_data' => 'Exportera Stil Data',
	'xs_export_styles_data_explain' => 'Spara stil variabler till theme_info.cfg.',
	'xs_check_for_updates' => 'Kontrollera efter Uppdateringar',
	'xs_check_for_updates_explain' => 'Kontrollera efter uppdaterade versioner av stilar och mods som �r installerade i ditt forum.',

	'xs_set_configuration_lc' => 's�tt konfiguration',
	'xs_set_default_style_lc' => 's�tt standard stilen',
	'xs_manage_cache_lc' => 'hantera cache',
	'xs_import_styles_lc' => 'importera stilar',
	'xs_export_styles_lc' => 'exportera stilar',
	'xs_clone_styles_lc' => 'klona stilar',
	'xs_uninstall_styles_lc' => 'avinstallera stilar',
	'xs_edit_templates_lc' => 'redigera mallar',
	'xs_edit_styles_data_lc' => 'redigera stil data',
	'xs_export_styles_data_lc' => 'exportera stil data',
	'xs_check_for_updates_lc' => 's�k efter uppdateringar',

/*
* ftp.tpl, ftp functions
*/

	'xs_ftp_comment1' => 'F�r att kunna anv�nda den h�r funktionen m�ste du v�lja fil �verf�rings metoden. Om du v�ljer FTP, sedan kommer inte ett l�senord att lagras och eXtreme Styles kommer att fr�ga dig efter ett l�senord varje g�ng du v�ljer funktioner som kr�ver FTP-�tkomst. Om du v�ljer lokala filsystemet s� var s�ker p� att alla katalogerna �r skrivbara.',
	'xs_ftp_comment2' => 'F�r att kunna anv�nda den h�r funktionen m�ste du st�lla in FTP-inst�llningar. Ett l�senord kommer inte att lagras och eXtreme Styles kommer att fr�ga dig efter ett l�senord varje g�ng du v�ljer funktioner som kr�ver FTP-�tkomst.',
	'xs_ftp_comment3' => 'Varning: FTP-funktioner �r avst�ngda p� den h�r servern. Du kommer inte att kunna anv�nda eXtreme Styles funktioner som kr�ver FTP-�tkomst.',

	'xs_ftp_title' => 'FTP Konfiguration',

	'xs_ftp_explain' => 'FTP anv�nds f�r att ladda upp nya stilar. Om du vill anv�nda import stils funktionen b�r du konfigurera FTP inst�llningar f�ljaktligen. eXtreme Styles f�rs�ker att automatiskt identifiera inst�llningar n�r och om m�jligt.',

	'xs_ftp_error_fatal' => 'FTP funktioner �r avst�ngda p� den h�r servern. Kan inte forts�tta.',
	'xs_ftp_error_connect' => 'FTP error: kan inte ansluta till {HOST}',
	'xs_ftp_error_login' => 'FTP error: kan inte logga in',
	'xs_ftp_error_chdir' => 'FTP error: kan inte �ndra katalog till {DIR}',
	'xs_ftp_error_nonphpbbdir' => 'FTP error: du har angett ogiltig katalog. Det finns inga Icy Phoenix filer i den katalogen',
	'xs_ftp_error_noconnect' => 'Kan inte ansluta till ftp-servern',
	'xs_ftp_error_login2' => 'Ogiltig ftp inloggning eller l�senord',

	'xs_ftp_log_disabled' => 'ftp funktioner �r avst�ngda p� den h�r servern. Skriptet kan inte forts�tta.',
	'xs_ftp_log_connecting' => 'ansluter till {HOST}',
	'xs_ftp_log_noconnect' => 'kan inte ansluta till {HOST}',
	'xs_ftp_log_connected' => 'ansluten. loggar in...',
	'xs_ftp_log_nologin' => 'kan inte logga in som {USER}',
	'xs_ftp_log_loggedin' => 'loggad in',
	'xs_ftp_log_end' => 'f�rdiga verkst�llande script',
	'xs_ftp_log_nopwd' => 'error: kan inte h�mta aktuella katalogen',
	'xs_ftp_log_nomkdir' => 'error: kan inte skapa katalogen {DIR}',
	'xs_ftp_log_mkdir' => 'skapade katalogen {DIR}',
	'xs_ftp_log_nochdir' => 'error: kan inte �ndra katalog till {DIR}',
	'xs_ftp_log_normdir' => 'error: kan inte flytta katalog {DIR}',
	'xs_ftp_log_rmdir' => 'f�rflyttad katalog {DIR}',
	'xs_ftp_log_chdir' => '�ndrade katalog till {DIR}',
	'xs_ftp_log_noupload' => 'error: kan inte ladda upp filen {FILE}',
	'xs_ftp_log_upload' => 'upplagda filen {FILE}',
	'xs_ftp_log_nochmod' => 'varning: kan inte chmod fil {FILE}',
	'xs_ftp_log_chmod' => 'chmod fil {FILE} till {MODE}',
	'xs_ftp_log_invalidcommand' => 'error: ok�nt kommando: {COMMAND}',
	'xs_ftp_log_chdir2' => '�ndra nuvarande katalog tillbaka till {DIR}',
	'xs_ftp_log_nochdir2' => 'kan inte byta katalog till {DIR}',

	'xs_ftp_config' => 'FTP Konfiguration',
	'xs_ftp_select_method' => 'V�lj uppladdnings metod',
	'xs_ftp_select_local' => 'Anv�nd lokala filsystemet (ingen konfiguration kr�vs)',
	'xs_ftp_select_ftp' => 'Anv�nd FTP (s�tt ftp inst�llningar nedan)',

	'xs_ftp_settings' => 'FTP Inst�llningar',
	'xs_ftp_host' => 'FTP V�rd',
	'xs_ftp_login' => 'FTP Inloggning',
	'xs_ftp_path' => 'FTP S�kv�gen till Icy Phoenix',
	'xs_ftp_pass' => 'FTP L�senord',
	'xs_ftp_remotedir' => 'Otillg�nglig  Katalog',

	'xs_ftp_host_guess' => ' (probably "{HOST}" [<a href="javascript: void(0)" onclick="{CLICK}">s�tt v�rd</a>])',
	'xs_ftp_login_guess' => ' (probably "{LOGIN}" [<a href="javascript: void(0)" onclick="{CLICK}">s�tt v�rd</a>])',
	'xs_ftp_path_guess' => ' (probably "{PATH}" [<a href="javascript: void(0)" onclick="{CLICK}">s�tt s�kv�g</a>])',


/*
* config.tpl
*/
	'xs_config_updated' => 'Konfiguration uppdaterad.',
	'xs_config_updated_explain' => 'Du beh�ver uppdatera sidan innan den nya konfigurationen kan tr�da i kraft. <a href="{URL}">Klicka h�r</a> f�r att uppdatera sidan.',
	'xs_config_warning' => 'Varning: cache kan inte skrivas.',
	'xs_config_warning_explain' => 'Cache katalogen �r inte skrivbar. eXtreme Styles kan f�rs�ka att �tg�rda problemet.<br /><a href="{URL}">Klicka h�r</a> f�r att f�rs�ka �ndra tillg�ng till cache katalogen.<br /><br />Om cacheen inte fungerar p� din server av n�gon anledning var inte orolig - eXtreme Styles<br />�kar forum hastigheten m�nga g�nger �ven utan cache.',

	'xs_config_maintitle' => 'eXtreme Styles mod Konfiguration',
	'xs_config_subtitle' => 'Konfigurationen f�r eXtreme Styles. Om du inte f�rst�r vad vissa variabler g�r �ndra d� inte dem.',
	'xs_config_title' => 'eXtreme Styles mod v{VERSION} inst�llningar',
	'xs_config_cache' => 'Cache konfiguration',

	'xs_config_navbar' => 'Visa i v�nstra ramen:',
	'xs_config_navbar_explain' => 'Du kan v�lja vilka objekt som ska visas i v�nstra ramen i Admin Kontroll Panel.',

	'xs_config_def_template' => 'Standard Mallens Katalog',
	'xs_config_def_template_explain' => 'Om en obligatoriskt tpl fil inte finns i nuvarande mall katalogen (som skulle kunna h�nda om du modded Icy Phoenix felaktigt) d� kommer mallsystem att leta efter samma fil i en tillh�rande katalog (om den nuvarande mallen �r "myTemplate" och skriptet kr�ver filen "myTemplate/myfile.tpl" och om filen inte �r d�r d� kommer mallsystemet att leta efter den filen som "default/myfile.tpl"). St�ll in till tom f�r att inaktivera den h�r funktionen.',

	'xs_config_check_switches' => 'Kontrollera v�xlingar medan sammanst�llningen',
	'xs_config_check_switches_explain' => 'Denna funktion kontrollerar efter fel i mallar. Att st�nga av den kommer att p�skynda sammanst�llning, men kompilatorn kan hoppa �ver n�gra fel i mallar om den inneh�ller fel.<br /><br />Smart kontroll kontrollerar mallar efter fel och automatiskt �tg�rdar alla k�nda fel (det finns n�gra k�nda skrivfel i olika mods). Fungerar lite l�ngsammare �n enkel kontroll.<br /><br />Men ibland ser mallarna korrekt ut endast n�r fel kontrollen �r avaktiverad, det h�r h�nder p� grund av d�lig HTML kodning - kontakta den som skrev tpl filen om du vill r�tta till felet.<br /><br />Om cache-funktionen �r avst�ngd, st�ng d� av detta f�r snabbare sammanst�llning.',
	'xs_config_check_switches_0' => 'Av',
	'xs_config_check_switches_1' => 'Smart kontroll',
	'xs_config_check_switches_2' => 'Enkel kontroll',

	'xs_config_show_errors' => 'Visar fel n�r filerna �r felaktigt inkluderade i tpl filer',
	'xs_config_show_error_explain' => 'Denna funktion aktiverar/avaktiverar fel i tpl filer som anv�ndaren anv�nder felaktigt &lt;!-- INKLUDERAR filnamn --&gt;',

	'xs_config_tpl_comments' => 'L�gg till tpl filnamn i html',
	'xs_config_tpl_comments_explain' => 'Denna funktion l�gger till kommentarer till html-koden som g�r att stilens formgivare kan uppt�cka vilken tpl fil som visas.',

	'xs_config_use_cache' => 'Anv�nd cache',
	'xs_config_use_cache_explain' => 'Cache sparas p� h�rddisken och det kommer att p�skynda mallens system eftersom det inte skulle finnas n�got behov av att sammanst�lla mallen varje g�ng det visas.',

	'xs_config_auto_compile' => 'Automatiskt spara cache',
	'xs_config_auto_compile_explain' => 'Detta kommer att automatiskt sammanst�lla mallar som inte �r cachade och spara dessa till cache katalogen.',

	'xs_config_auto_recompile' => 'Automatiskt �terst�lla cache',
	'xs_config_auto_recompile_explain' => 'Detta kommer automatiskt att �terst�lla mallar om en mall har �ndrats.',

	'xs_config_php' => 'Till�gg av cache filnamn',
	'xs_config_php_explain' => 'Detta �r Till�gg av cachade filer. Filer �r lagrade i php-format s� standardtill�gget �r "php". Ta inte med prick',

	'xs_config_back' => '<a href="{URL}">Klicka h�r</a> f�r att �terg� till konfigurationen.',
	'xs_config_sql_error' => 'Det gick inte att uppdatera allm�nna konfigurationen f�r {VAR}',

// Debug info
	'xs_debug_header' => 'Debug info',
	'xs_debug_explain' => 'Detta �r debug info. Anv�nds f�r att hitta/�tg�rda problem n�r man konfigurerar cache.',
	'xs_debug_vars' => 'Mall variabler',
	'xs_debug_tpl_name' => 'Mall filnamn:',
	'xs_debug_cache_filename' => 'Cache filnamn:',
	'xs_debug_data' => 'Debug data:',

	'xs_check_hdr' => 'Kontrollera cache f�r %s',
	'xs_check_filename' => 'Error: ogiltigt filnamn',
	'xs_check_openfile1' => 'Error: kan inte �ppna filen "%s". Kommer att f�rs�ka skapa kataloger...',
	'xs_check_openfile2' => 'Error: kan inte �ppna filen "%s" f�r andra g�ngen. Ger upp...',
	'xs_check_nodir' => 'Kontrollerar "%s" - ingen s�dan katalog.',
	'xs_check_nodir2' => 'Error: g�r inte att skapa katalogen "%s" - du kanske beh�ver kontrollera beh�righeter.',
	'xs_check_createddir' => 'Skapad katalog "%s"',
	'xs_check_dir' => 'Kontrollerar "%s" - katalogens existens.',
	'xs_check_ok' => '�ppnar fil "%s" f�r skrivning. Allt verkar vara ok.',
	'xs_error_demo_edit' => 'Du kan inte redigera filen i demol�ge',
	'xs_error_not_installed' => 'eXtreme Styles �r inte installerat. Du har gl�mt att ladda upp includes/template.php',

/*
* chmod
*/
	'xs_chmod' => 'CHMOD',
	'xs_chmod_return' => '<br /><br /><a href="{URL}">Klicka h�r</a> f�r att �terg� till konfigurationen.',
	'xs_chmod_message1' => 'Konfigurationen �ndrad.',
	'xs_chmod_error1' => 'Kan inte �ndra tillg�ngs mode till cache katalogen',


/*
* default style
*/
	'xs_def_title' => 'S�tt Standard Stil',
	'xs_def_explain' => 'Denna funktion till�ter dig att du snabbt kan �ndra standard forum stil och �ven v�xla anv�ndare fr�n ett format till ett annat.',

	'xs_styles_set_default' => 's�tt som standard',
	'xs_styles_no_override' => '�sidos�tt inte anv�ndar inst�llningar',
	'xs_styles_do_override' => '�sidos�tt anv�ndar inst�llningar',
	'xs_styles_switch_all' => 'v�xla alla anv�ndare till denna stil',
	'xs_styles_switch_all2' => 'v�xla alla anv�ndare till:',
	'xs_styles_defstyle' => 'standard stil',
	'xs_styles_available' => 'Tillg�ngliga stilar',
	'xs_styles_make_public' => 'g�r stil offentlig',
	'xs_styles_make_admin' => 'g�r stil admin-bara',
	'xs_styles_users' => 'Anv�ndare Lista',


/*
* cache management
*/
	'xs_manage_cache_explain2' => 'Denna funktion till�ter dig att sammanst�lla eller ta bort cachade filer f�r stilar.',
	'xs_clear_all_lc' => 'rensa alla',
	'xs_compile_all_lc' => 'sammanst�ll alla',
	'xs_clear_cache_lc' => 'rensa cache',
	'xs_compile_cache_lc' => 'sammanst�ll cache',
	'xs_cache_confirm' => 'Om du har m�nga stilar kan detta v�lla stora server belastningar. �r du s�ker p� att du vill forts�tta?',

	'xs_cache_nowrite' => 'Error: kan inte komma �t cache katalogen',
	'xs_cache_log_deleted' => 'Raderade {FILE}',
	'xs_cache_log_nodelete' => 'Error: kan inte radera filen {FILE}',
	'xs_cache_log_nothing' => 'Ingenting att radera f�r mall {TPL}',
	'xs_cache_log_nothing2' => 'Ingenting att radera i cache katalogen',
	'xs_cache_log_count' => 'Successfullt raderade {NUM} filer',
	'xs_cache_log_count2' => 'Error raderar {NUM} filer',
	'xs_cache_log_compiled' => 'Sammanst�ll: {NUM} filer',
	'xs_cache_log_errors' => 'Errors: {NUM}',
	'xs_cache_log_noaccess' => 'Error: kan inte komma �t katalog {DIR}',
	'xs_cache_log_compiled2' => 'Sammanst�ll: {FILE}',
	'xs_cache_log_nocompile' => 'Error sammanst�llning: {FILE}',

/*
* export/import/download/clone
*/
	'xs_import_explain' => 'Importera stilar. Du kan ocks� automatiskt installera och uppdatera stilar.<br /><br />Notera: Om du har lagt till n�gra mods (med undantag f�r eXtreme Styles mod) p� detta forum s� ska du vara f�rsiktig n�r du importerar stilar eftersom stilarna kanske inte �r f�renligt med ditt forum. Du kan bara installera stilar som har samma �ndringar som de andra stilarna som du har konfigurerade p� ditt forum.',

	'xs_import_lc' => 'importera',
	'xs_list_files_lc' => 'lista filer',
	'xs_delete_file_lc' => 'radera fil',
	'xs_export_style_lc' => 'exportera stil',

	'xs_import_no_cached' => 'Det finns inga cachade stilar att importera',
	'xs_add_styles' => 'L�gg till Stilar',
	'xs_add_styles_web' => 'Ladda ner fr�n webben',
	'xs_add_styles_web_get' => 'Ta den',
	'xs_add_styles_copy' => 'Kopiera fr�n lokal fil',
	'xs_add_styles_copy_get' => 'Kopiera',
	'xs_add_styles_upload' => 'Ladda Upp fr�n datorn',
	'xs_add_styles_upload_get' => 'Ladda Upp',

	'xs_export_style' => 'Exportera Stil',
	'xs_export_style_explain' => 'Exportera en stil som en enda fil. Denna enda fil �r mycket liten - mindre �n en .Zip fil (eftersom den �r komprimerad med gzip, som fungerar b�ttre �n zip) och alla stilar som ing�r �r en enda fil. I geng�ld �r det mycket enkelt att �verf�ra stilar fr�n ett forum till ett annat.<br /><br />Den h�r funktionen till�ter dig �ven att ladda upp exporterade stilar genom anv�ndning av ftp till en server. Detta system g�r att du kan �verf�ra ett format till ett annat forum snabbt utan att manuellt kopiera den.',

	'xs_export_style_title' => 'Exportera Mall "{TPL}"',
	'xs_export_tpl_name' => 'Exportera som (mallnamn)',
	'xs_export_style_names' => 'V�lj stil(ar) att exportera',
	'xs_export_style_name' => 'Stil att exportera (stil namn)',
	'xs_export_style_comment' => 'Kommentar',
	'xs_export_where' => 'Exportera Vart',
	'xs_export_where_download' => 'Ladda ner som fil',
	'xs_export_where_store' => 'Lagra som fil p� servern',
	'xs_export_where_store_dir' => 'Katalog',
	'xs_export_where_ftp' => 'Ladda Upp via FTP',
	'xs_export_filename' => 'Exportera filnamn',

	'xs_download_explain2' => 'Snabbt ladda ner och installera stilar direkt fr�n olika webbplatser. Klicka p� l�nken intill webbplatsens namn och du kommer att omdirigeras till en stil nerladdnings sida.<br /><br />Du kan ocks� hantera listan �ver webbplatser.',

	'xs_download_locations' => 'Nerladdnings Plats',
	'xs_edit_link' => 'Redigera L�nk',
	'xs_add_link' => 'L�gg till L�nk',
	'xs_link_title' => 'L�nk Titel',
	'xs_link_url' => 'L�nk URL',
	'xs_delete' => 'Radera',

	'xs_style_header_error_file' => 'Kan inte �ppna lokal fil',
	'xs_style_header_error_server' => 'Error p� servern: ',
	'xs_style_header_error_invalid' => 'Ogiltigt fil huvud',
	'xs_style_header_error_reason' => 'Error vid l�sning av fil huvud: ',
	'xs_style_header_error_incomplete' => 'Filen �r ofullst�ndig',
	'xs_style_header_error_incomplete2' => 'Ogiltig filstorlek. F�rmodligen �r filen ofullst�ndig.',
	'xs_style_header_error_invalid2' => 'Ogiltig fil. F�rmodligen,�r filen inte en eXtreme Styles mod-kompatibel stil eller ogiltig version.',
	'xs_error_cannot_open' => 'Kan inte �ppna filen.',
	'xs_error_decompress_style' => 'Error dekompression fil. F�rmodligen �r filen skadad.',
	'xs_error_cannot_create_file' => 'Kan inte skapa fil "{FILE}"',
	'xs_error_cannot_create_tmp' => 'Kan inte skapa tempor�r fil "{FILE}"',
	'xs_import_invalid_file' => 'Ogiltig fil',
	'xs_import_incomplete_file' => 'Ofullst�ndig fil',
	'xs_import_uploaded' => 'Stil uppladdad.',
	'xs_import_installed' => 'Stil uppladdad och installerad.',
	'xs_import_notinstall' => 'Stil uppladdad, men fel vid installering av stil (sql error).',
	'xs_import_notinstall2' => 'Stil uppladdad, men fel vid installering av stil: inga stilar funna i theme_info.cfg',
	'xs_import_notinstall3' => 'Stil uppladdad, men fel vid installering av stil: ingen post f�r "{STYLE}" funnen i theme_info.cfg',
	'xs_import_notinstall4' => 'Stil uppladdad, men fel vid installering av stil: kunde inte f� n�sta themes_id information',
	'xs_import_notinstall5' => 'Stil uppladdad, men fel vid installering av stil: kunde inte uppdatera stil tabellen',
	'xs_import_nodownload' => 'Kan inte ladda ner stilen fr�n {URL}',
	'xs_import_nodownload2' => 'Kan inte kopiera stilen fr�n {URL}',
	'xs_import_nodownload3' => 'Fil ej uppladdad.',
	'xs_import_uploaded2' => 'Stil nerladdad. Nu kan du importera den.<br /><br /><a href="{URL}">Klicka h�r</a> f�r att importera stil.',
	'xs_import_uploaded3' => 'Stil kopierad. Nu kan du importera den.<br /><br /><a href="{URL}">Klicka h�r</a> f�r att importera stil.',
	'xs_import_uploaded4' => 'Stil uppladdad. Nu kan du importera den.<br /><br /><a href="{URL}">Klicka h�r</a> f�r att importera stil.',
	'xs_export_no_open_dir' => 'Kan inte �ppna katalog {DIR}',
	'xs_export_no_open_file' => 'Kan inte �ppna filen {FILE}',
	'xs_export_no_read_file' => 'Error l�sning av fil {FILE}',
	'xs_no_theme_data' => 'Kunde inte f� stil data f�r utvald mall',
	'xs_no_style_info' => 'Kunde inte f� stil information',
	'xs_export_noselect_themes' => 'Du ska v�lja minst en stil',
	'xs_export_error' => 'Kan inte exportera mall "{TPL}": ',
	'xs_export_error2' => 'Kan inte exportera mall "{TPL}": stilen �r tom',
	'xs_export_saved' => 'Stil �r sparad som "{FILE}"',
	'xs_export_error_uploading' => 'Error uppladdning av fil',
	'xs_export_uploaded' => 'Fil uppladdad.',
	'xs_clone_taken' => 'Denna stils namn anv�nds redan.',
	'xs_error_new_row' => 'Det gick inte att infoga ny rad i tabellen.',
	'xs_theme_cloned' => 'Stil klonad.',
	'xs_invalid_style_name' => 'Ogiltigt stil namn.',
	'xs_clone_style_exists' => 'Denna mall finns redan',
	'xs_clone_no_select' => 'Du ska v�lja minst en stil att klona.',
	'xs_no_themes' => 'Stilen hittades inte i databasen.',

	'xs_import_back' => '<a href="{URL}">Klicka h�r</a> f�r att �terg� till importera stilar sidan.',
	'xs_import_back_download' => '<a href="{URL}" target="main">Klicka h�r</a> f�r att �terg� till nerladdningar.',
	'xs_export_back' => '<a href="{URL}">Klicka h�r</a> f�r att �terg� till exportera stilar sidan.',
	'xs_clone_back' => '<a href="{URL}">Klicka h�r</a> f�r att �terg� till klona stilar sidan.',
	'xs_download_back' => '<a href="{URL}">Klicka h�r</a> f�r att �terg� till nerladdningssidan.',

	'xs_import_tpl' => 'Importera Mall "{TPL}"',
	'xs_import_tpl_comment' => 'Ladda Upp en mall till ditt forum. Om mallen med detta namn redan finns p� ditt forum kommer den h�r funktionen automatiskt att skriva �ver gamla filer s� det ocks� kan anv�ndas f�r att uppdatera stilar.<br /><br />Denna funktion kan ocks� automatiskt installera stilar. Om du vill installera en stil efter att du har importerat den v�lj d� en eller flera stilar nedan.',
	'xs_import_tpl_filename' => 'Filnamn:',
	'xs_import_tpl_tplname' => 'Mall namn:',
	'xs_import_tpl_comment2' => 'Kommentar:',
	'xs_import_select_styles' => 'V�lj stil(ar) att installera:',
	'xs_import_install_def_lc' => 'G�r standard forum stil',
	'xs_import_install_style' => 'Installera stil:',
	'xs_import' => 'Importera',

	'xs_import_list_contents' => 'Inneh�ll i filen: ',
	'xs_import_list_filename' => 'Filnamn: ',
	'xs_import_list_template' => 'Mall: ',
	'xs_import_list_comment' => 'Kommentar: ',
	'xs_import_list_styles' => 'Stil(ar): ',
	'xs_import_list_files' => 'Filer ({NUM}):',
	'xs_import_download_lc' => 'ladda ner fil',
	'xs_import_view_lc' => 'granska fil',
	'xs_import_file_size' => '({NUM} bytes)',

	'xs_import_nogzip' => 'Den h�r funktionen kr�ver gz komprimering, och uppenbarligen st�ds inte den p� den h�r servern.',
	'xs_import_nowrite_cache' => 'Kan inte skriva till cache. Den h�r funktionen kr�ver att cache ska vara skrivbar. Kontrollera mod konfiguration.<br /><br /><a href="{URL1}">Klicka h�r</a> f�r att g�ra cache skrivbar.<br /><br /><a href="{URL2}">Klicka h�r</a> f�r att �terg� till import sidan.',

	'xs_import_download_warning' => 'Detta kommer att ta dig till en extern webbsida d�r du snabbt kan ladda ner stilar med ett par enkla klick med hj�lp av eXtreme Styles import funktionen.',

	'xs_clone_style' => 'Klona Stil',
	'xs_clone_style_explain' => 'Snabbt klona stil eller hela mallen.<br /><br />Varning: Om du kopierar mallen fr�ga �garen av denna ursprungliga mallen om du f�r g�ra detta (om det inte �r subSilver - med den kan du g�ra vad du vill med subSilver). Vanligtvis medger �garna �ndring av deras stilar, men �ndrade stilar skall inte distribueras.',
	'xs_clone_style_explain2' => 'Skapa ny stil f�r en mall. Den h�r funktionen kommer inte att kopiera n�gra filer - det kommer att l�gga in poster i databasen f�r din nya stil. B�de gamla och nya stilar kommer att dela samma mallar.',
	'xs_clone_style_explain3' => 'Ange namn f�r nya stilen som du vill skapa och klicka p� "klon" knappen.',
	'xs_clone_style_explain4' => 'Denna funktion till�ter dig att klona en mall. Du kan ocks� kopiera alla stilar som �r associerade med den mallen. Senare kan du s�kert redigera tpl filer f�r ny mall och den gamla mallen kommer inte att p�verkas.',

	'xs_clone_style_lc' => 'klona stil',
	'xs_clone_style2' => 'Klona stil "{STYLE}":',
	'xs_clone_style3' => 'Klona Mall "{STYLE}"',
	'xs_clone_newdir_name' => 'Ny mall (katalog) namn:',
	'xs_clone_select' => 'V�lj stil(ar) att klona:',
	'xs_clone_select_explain' => 'Du ska v�lja minst en stil.',
	'xs_clone_newname' => 'Ny stil namn:',


/*
* install/uninstall
*/
	'xs_install_styles_explain2' => 'Detta �r en lista �ver stilar som laddats upp p� ditt forum, men inte installerade. Klicka p� "installera" l�nken f�r den stil som du vill installera, eller v�lj flera stilar och klicka p� skicka knappen.',
	'xs_uninstall_styles_explain2' => 'Detta �r en lista �ver stilar som �r installerade p� ditt forum. Klicka p� "avinstallera" l�nk f�r att ta bort vissa stilar fr�n forumet. Avinstallation �r s�ker - alla anv�ndare som anv�nder stilarna som avinstallerats kommer att kopplas om till standard forum stilen. Ocks� avinstalleraren kommer automatiskt att bort cachen f�r stilen.',

	'xs_install' => 'Installera',
	'xs_install_lc' => 'installera',
	'xs_uninstall' => 'Avinstallera',
	'xs_remove_files' => 'Flytta Filer',
	'xs_style_removed' => 'Stil F�rflyttad.',
	'xs_uninstall_lc' => 'avinstallera',
	'xs_uninstall2_lc' => 'avinstallera och radera filer',

	'xs_install_back' => '<a href="{URL}">Klicka h�r</a> f�r att �terv�nda till stil installationen.',
	'xs_uninstall_back' => '<a href="{URL}">Klicka h�r</a> f�r att �terv�nda till stil avinstallationen.',
	'xs_goto_default' => '<a href="{URL}">Klicka h�r</a> f�r att �ndra standard stilen.',

	'xs_install_installed' => 'Stil(ar) installerad.',
	'xs_install_error' => 'Error installera stil.',
	'xs_install_none' => 'Det finns inga nya stilar att installera. Alla tillg�ngliga stilar �r redan installerade.',

	'xs_uninstall_default' => 'Du kan inte ta bort standard mallen. Om du vill �ndra standard mallen <a href="{URL}">klicka h�r</a>.',

/*
* export theme_info.cfg
*/
	'xs_export_styles_data_explain2' => 'Denna funktion sparar stil uppgifter i theme_info.cfg. Det kan anv�ndas f�r att spara databasinformation innan stilar fr�n ett forum till en annat �verl�tes.<br /><br />Notera: Om du anv�nder eXtreme Styles export-funktionen f�r att flytta ett format till ett annat forum beh�ver du inte spara theme_info.cfg - det g�rs automatiskt av stil export funktionen.',
	'xs_export_styles_data_explain3' => 'V�lj stilar som du vill exportera.',

	'xs_export_data_back' => '<a href="{URL}">Klicka h�r</a> f�r att �terv�nda till export stil data sida.',
	'xs_export_style_data_lc' => 'exportera stil data',

	'xs_export_data_saved' => 'Data exporteras.',

/*
* edit templates (file manager)
*/
	'xs_edit_template_comment1' => 'Redigera mallar. Fil Bl�ddring visar bara redigerbara filer.',
	'xs_edit_template_comment2' => 'Redigera mallar.',
	'xs_edit_file_saved' => 'Filen �r sparad.',
	'xs_edit_not_found' => 'Filen hittades inte.',
	'xs_edittpl_back_dir' => '<a href="{URL}">Klicka h�r</a> f�r att �terv�nda till filhanteraren.',

	'xs_fileman_browser' => 'Fil Bl�ddraren',
	'xs_fileman_directory' => 'Katalog:',
	'xs_fileman_dircount' => 'Kataloger ({COUNT}):',
	'xs_fileman_filter' => 'Filtrera',
	'xs_fileman_filter_ext' => 'Visa endast filer med till�gg:',
	'xs_fileman_filter_content' => 'Visa bara filer som inneh�ller:',
	'xs_fileman_filter_clear' => 'Rensa Filter',
	'xs_fileman_filename' => 'Filnamn',
	'xs_fileman_filesize' => 'Storlek',
	'xs_fileman_filetime' => 'Modifiering',
	'xs_fileman_options' => 'Alternativ',
	'xs_fileman_time_today' => '(idag)',
	'xs_fileman_edit_lc' => 'redigera',

	'xs_fileedit_search_nomatch' => 'Matchningen hittades inte',
	'xs_fileedit_search_match1' => 'Ersatt 1 matchning',
	'xs_fileedit_search_matches' => "Ersatt ' + r�kna + ' matchningar",
	'xs_fileedit_noundo' => 'Det finns inget att �ngra',
	'xs_fileedit_undo_complete' => 'Gamla inneh�ll �terst�llda',
	'xs_fileedit_edit_name' => 'Redigera filen:',
	'xs_fileedit_location' => 'Plats:',
	'xs_fileedit_reload_lc' => 'ladda om filen',
	'xs_fileedit_download_lc' => 'ladda ner filen',
	'xs_fileedit_trim' => 'Automatiskt trim blanksteg i b�rjan och slutet av filen.',
	'xs_fileedit_functions' => 'Redigera Funktionerna',
	'xs_fileedit_replace1' => 'Ers�tt ',
	'xs_fileedit_replace2' => ' med ',
	'xs_fileedit_replace_first_lc' => 'ers�tt f�rsta matchning',
	'xs_fileedit_replace_all_lc' => 'ers�tt alla matchningar',
	'xs_fileedit_replace_undo_lc' => '�ngra ers�ttning',
	'xs_fileedit_backups' => 'Backups',
	'xs_fileedit_backups_save_lc' => 'spara backup',
	'xs_fileedit_backups_show_lc' => 'visa inneh�ll',
	'xs_fileedit_backups_restore_lc' => '�terst�ll',
	'xs_fileedit_backups_download_lc' => 'ladda ner',
	'xs_fileedit_backups_delete_lc' => 'radera',
	'xs_fileedit_upload' => 'Ladda upp',
	'xs_fileedit_upload_file' => 'Ladda upp fil:',

/*
* edit styles data (theme_info)
*/
	'xs_data_head_stylesheet' => 'CSS Stylesheet',
	'xs_data_body_background' => 'Bakgrunds Bild',
	'xs_data_body_bgcolor' => 'Bakgrunds F�rg',
	'xs_data_style_name' => 'Stil Namn',
	'xs_data_body_link' => 'L�nk F�rg',
	'xs_data_body_text' => 'Text F�rg',
	'xs_data_body_vlink' => 'Bes�kt L�nk F�rg',
	'xs_data_body_alink' => 'Aktiv L�nk F�rg',
	'xs_data_body_hlink' => 'Hover L�nk F�rg',
	'xs_data_tr_color' => 'Tabell Rad F�rg %s',
	'xs_data_tr_class' => 'Tabell Rad Class %s',
	'xs_data_th_color' => 'Tabell Header F�rg %s',
	'xs_data_th_class' => 'Tabell Header Class %s',
	'xs_data_td_color' => 'Tabell Cell F�rg %s',
	'xs_data_td_class' => 'Tabell Cell Class %s',
	'xs_data_fontface' => 'Teckensnitts Face %s',
	'xs_data_fontsize' => 'Teckensnitts Storlek %s',
	'xs_data_fontcolor' => 'Teckensnitts F�rg %s',
	'xs_data_span_class' => 'Span Class %s',
	'xs_data_img_size_poll' => 'Unders�kningar Bildstorlek [px]',
	'xs_data_img_size_privmsg' => 'Privat Meddelande Status storlek [px]',
	'xs_data_theme_public' => 'Offentlig Stil (1 eller 0)',
	'xs_data_unknown' => 'Beskrivningen �r inte tillg�nglig (%s)',

	'xs_edittpl_error_updating' => 'Error uppdatering stil.',
	'xs_edittpl_style_updated' => 'Stil uppdaterad.',
	'xs_invalid_style_id' => 'Ogiltig stil id.',

	'xs_edittpl_back_edit' => '<a href="{URL}">Klicka h�r</a> f�r att �terv�nda till redigering.',
	'xs_edittpl_back_list' => '<a href="{URL}">Klicka h�r</a> f�r att �terv�nda till stil listan.',

	'xs_editdata_explain' => 'Redigera databasens data f�r installerade stilar. Vissa stilar ignorerar databas v�rden och anv�nder css-filer i st�llet, och vissa stilar anv�nder endast en del av databasens v�rde.',
	'xs_editdata_var' => 'Variabel',
	'xs_editdata_value' => 'V�rde',
	'xs_editdata_comment' => 'Kommentar',

/*
* updates
*/

	'xs_updates' => 'Uppdateringar',
	'xs_updates_comment' => 'Kontrollera efter uppdateringar av vissa stilar och mods. Det fungerar bara med poster som har relevant uppdaterad information.',
	'xs_updates_comment2' => 'Detta �r resultatet av versions kontrollen.',
	'xs_update_total1' => 'Totalt: {NUM} poster',
	'xs_update_info1' => 'Denna administrat�rs funktionen s�ker efter tillg�ngliga uppdateringar av phpBB vissa mods, och vissa stilar installerade p� dit forum. N�r det finns tillg�ngliga uppdateringar visar den l�nken d�r du kan ladda ner den uppdaterade filen.<br /><br />Den h�r funktionen kr�ver att sockets ska vara aktiverad. P� de flesta gratis webbhotellen har inte denna funktion, s� om detta forum ligger p� en fri v�rd (som Lycos) s� kan du inte anv�nda funktionen, men om detta forum ligger p� normal server b�r allt vara okej.<br /><br />N�r du klickar p� "Forts�tt" kommer skriptet att kontrollera all programvara som �r installerad p� forumet. Om din webbplats �r l�ngsam kan det ta lite tid. Ha t�lamod och klicka inte p� "stopp" i din webbl�sare om processen f�rsenas. Om servern �r l�ngsam eller uppdatera webbplatsen �r l�ngsam d� kan skriptet ta timeout - Om detta intr�ffar b�r du �ka timeout-v�rdet.',
	'xs_update_name' => 'Namn',
	'xs_update_type' => 'Typ',
	'xs_update_current_version' => 'Din version',
	'xs_update_latest_version' => 'Senaste version',
	'xs_update_downloadinfo' => 'Nerladdnings URL',
	'xs_update_timeout' => 'Uppdatera script timeout (sekunder):',
	'xs_update_continue' => 'Forts�tt',


	'xs_update_total2' => 'Errors: {NUM}',
	'xs_update_total3' => 'Uppdaterar tillg�ngliga: {NUM} poster',
	'xs_update_select1' => 'V�lj poster att uppdatera',
	'xs_update_types' => array(
		0 => 'Ok�nd',
		1 => 'Stil',
		2 => 'Mod',
		3 => 'phpBB',
		4 => 'Icy Phoenix'
	),
	'xs_update_fileinfo' => 'Mer info',
	'xs_update_nothing' => 'Det finns ingenting att uppdatera.',
	'xs_update_noupdate' => 'Du anv�nder den senaste versionen.',

	'xs_update_error_url' => 'Error: kan inte h�mta url %s',
	'xs_update_error_noitem' => 'Error: Ingen uppdaterings information tillg�nglig',
	'xs_update_error_noconnect' => 'Error: Kan inte ansluta till uppdaterad server',

	'xs_update_download' => 'ladda ner',
	'xs_update_downloadinfo2' => 'nerladdning/info',
	'xs_update_info' => 'webbsida',

	'xs_permission_denied' => 'R�ttigheter Nekade',

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