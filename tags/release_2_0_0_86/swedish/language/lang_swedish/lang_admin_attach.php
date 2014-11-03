<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin_attach.php 76 2009-01-31 21:11:24Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* (c) 2002 Meik Sievertsen (Acyd Burn)
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
// Modules, this replaces the keys used
	'Control_Panel' => 'Kontrollpanelen',
	'Shadow_attachments' => 'Skugg bilagor',
	'Forbidden_extensions' => 'Förbjudna tillägg',
	'Extension_control' => 'Tilläggs kontroll',
	'Extension_group_manage' => 'Tilläggs grupp kontroll',
	'Special_categories' => 'Särskilda kategorier',
	'Sync_attachments' => 'Synkronisera bilagor',
	'Quota_limits' => 'Kvot gränserna',

// Attachments -> Management
	'Attach_settings' => 'Bilage inställningar',
	'Manage_attachments_explain' => '<b>Konfigurera huvud inställningar för bilage Mod.</b><br /> Om du trycker på Test-Inställningar knappen, kommer bilage Mod att göra några System Tester för att vara säker på att Mod kommer att fungera. Om du har problem med att lägga upp filer, kör det här testet för att få ett detaljerat error-meddelande.',
	'Attach_filesize_settings' => 'Bilagor filstorlek inställningar',
	'Attach_number_settings' => 'Bilagor antal inställningar',
	'Attach_options_settings' => 'Bilagor alternativ',

	'Upload_directory' => 'Uppladdnings Katalogen',
	'Upload_directory_explain' => 'Ange relativ sökvög för din phpBB2 installation för att vara Bilagors uppladdnings katalog. Till exempel, ange \'filer\' Om din phpBB2 installation ligger på http://www.yourdomain.com/phpBB2 och bilagors uppladdnings katalog är lokaliserad pÃ¥ http://www.yourdomain.com/ip/filer.',
	'Attach_img_path' => 'Bilagors inläggs ikon',
	'Attach_img_path_explain' => 'Den är bilden visas bredvid bilagors länkar i enskilda inlägg. Lämna det här fältet tomt om du inte vill att en ikon ska visas. Den här inställningen kommer att skrivas över av inställningarna i Tillägg Grupper Management.',
	'Attach_topic_icon' => 'Bilagor ämnes ikon',
	'Attach_topic_icon_explain' => 'Denna bild visas innan ämnen med bilagor. Lämna det här fältet tomt om du inte vill att en ikon ska visas.',
	'Attach_display_order' => 'Bilagor visnings ordning',
	'Attach_display_order_explain' => 'Välj var du vill visa bifogade filer i Inlägg/PMs i fallande FILTID Ordning (nyaste bifogningar först) eller stigande FILTIDS ordning (äldsta bifogningar först).',
	'Show_apcp' => 'Visa nya bilagor inläggs kontrollpanel',
	'Show_apcp_explain' => 'Välj var du vill visa bilagor inläggs kontrollpanelen (ja) eller den gamla metoden med två boxar för bilags filer och redigera dina inlagda bilagor (nej) i din inläggs skärm. Utseendet på det är mycket svårt att förklara, därför är det bästa att prova det.',

	'Max_filesize_attach' => 'Filstorlek',
	'Max_filesize_attach_explain' => 'Maximal filstorlek för bilagor. Ett värde på 0 menas \'obegränsad\'. Denna inställning är begränsad av din Server Konfiguration. Till exempel, om din php konfiguration bara tillåter maximalt 2 MB uppladdningar, kan detta inte överskrivas av Mod.',
	'Attach_quota' => 'Bilagor kvot',
	'Attach_quota_explain' => 'Maximal diskplats alla bilagor kan ha på ditt Webb utrymme. Värdet 0 betyder \ "obegränsat\'.',
	'Max_filesize_pm' => 'Maximal filstorlek i Privata Meddelanden mapp',
	'Max_filesize_pm_explain' => 'Maximal diskplats bilagor kan användas i varje användares Privata Meddelande box. Värdet 0 betyder obegränsat\'.',
	'Default_quota_limit' => 'Standard kvot begränsning',
	'Default_quota_limit_explain' => 'Välja standard kvotgräns automatiskt tilldelat till nyregistrerade användare, och användare utan definierad kvotgräns. Alternativet \ "Ingen kvotgräns \" är till för att inte använda några bilage kvoter istället använda standardinställningarna som du har definierat inom denna management panelen.',

	'Max_attachments' => 'Maximalt antal bilagor',
	'Max_attachments_explain' => 'Det maximala antalet bilagor som tillåts i en post.',
	'Max_attachments_pm' => 'Maximalt antal bilagor i ett Privat Meddelande',
	'Max_attachments_pm_explain' => 'Ange högsta antal bilagor som användaren är tillåten att ha i ett privat meddelande.',

	'Disable_mod' => 'Avaktivera bilagor Mod',
	'Disable_mod_explain' => 'Alternativet är främst till för att testa nya mallar eller teman, det inaktiverar alla bilage funktioner utom Admin Panel.',
	'PM_Attachments' => 'TillÃ¥t bilagor i Privata Meddelanden',
	'PM_Attachments_explain' => 'Tillåt/Tillåt ej bifogning av filer till Privata Meddelanden.',
	'Ftp_upload' => 'Aktivera FTP Uppladdning',
	'Ftp_upload_explain' => 'Aktivera / Inaktivera FTP Uppladdnings alternativ. Om du ställer in den på ja, måste du definiera bilagor FTP Inställningar och Uppladdnings Katalogen som inte längre används.',
	'Attachment_topic_review' => 'Vill du visa bilagor i ämnes gransknings fönster ?',
	'Attachment_topic_review_explain' => 'Om du väljer ja, kommer alla bifogade filer att visas i ämnes granskningen när du skickar ett svar.',

	'Ftp_server' => 'FTP Uppladdnings Server',
	'Ftp_server_explain' => 'Ange IP-adress eller FTP-värdnamn på den server som används för dina uppladdade filer. Om du lämnar dessa fält tomma, kommer Servern som ditt phpBB2 Forum är installerat på att användas. Observera att det inte är tillåtet att lägga ftp:// eller något annat till adressen, helt enkelt ftp.foo.com, (vilket är mycket snabbare), än vanlig IP-adress.',

	'ftp_username' => 'Ditt FTP Användarnamn',
	'ftp_password' => 'Ditt FTP Lösenord',

	'Attach_ftp_path' => 'FTP sökvägen till din uppladdningskatalog',
	'Attach_ftp_path_explain' => 'Katalogen där dina bilagor kommer att förvaras. Denna katalog behöver inte vara chmodded. Vänligen ange inte din IP-eller FTP-adress här, inmatningsfältet är bara till för FTP sökväg. <br /> Exempel: /home/web/uploads',
	'Ftp_download_path' => 'Nerladdnings länk till FTP sökväg',
	'Ftp_download_path_explain' => 'Ange URL till din FTP sökväg, där dina bilagor är lagrade.<br />Om du använder en Remote FTP-server anger du den fullständiga webbadressen, till exempel http://www.mystorage.com/ip/upload.<br />Om du använder din Lokala Värd för att lagra dina filer kan du ange webbadressens sökväg i förhållande till din phpBB2 katalog, till exempel \'upload\'.<br />Ett snedstreck kommer att tas bort. Lämna det här fältet tomt, Om FTP sökvägen inte är tillgänglig på Internet. Med det här fältet tomt kan du inte använda den fysiska nedladdnings metoden.',
	'Ftp_passive_mode' => 'Aktivera FTP Passivt Mode',
	'Ftp_passive_mode_explain' => 'PASV kommandot begär att fjärrservern öppnar en port för data anslutning och återskickar adressen till den porten. Fjärrservern lyssnar på den porten och kunden ansluter sig till den.',

	'No_ftp_extensions_installed' => 'Du kan inte använda FTP Upload Methods, eftersom FTP Extensions inte är utarbetat in i din PHP Installation.',

// Attachments -> Shadow Attachments
	'Shadow_attachments_explain' => 'Radera bifogad data från inlägg när filerna saknas i filsystemet, och ta bort filer som inte längre är knutna till något inlägg. Du kan hämta eller visa en fil om du klickar på den, och om inte någon länk finns, då finns inte filen.',
	'Shadow_attachments_file_explain' => 'Radera alla bifogade filer som finns på ditt filsystem och är inte tilldelade i något inlägg.',
	'Shadow_attachments_row_explain' => 'Radera all inlaggd bilags data för filer som inte finns i filsystemet.',
	'Empty_file_entry' => 'Töm fil post',

// Attachments -> Sync
	'Sync_thumbnail_recreated' => 'Miniatyrbild skapades för bilaga: %s', // replace %s with physical Filename
	'Sync_thumbnail_resetted' => 'Miniatyrbild återställd för bilagor: %s', // replace %s with physical Filename
	'Attach_sync_finished' => 'Bilage synkronisering färdig.',
	'Sync_topics' => 'Synkronisera ämnen',
	'Sync_posts' => 'Synkronisera inlägg',
	'Sync_thumbnails' => 'Synkronisera  miniatyrbilder',


// Extensions -> Extension Control
	'Manage_extensions' => 'Hantera tillägg',
	'Manage_extensions_explain' => 'Hantera dina fil tillägg. Om du vill tillåta/inte tillåta en Extension att bli uppladdad, vänligen använd Extension Gruppens Hantering.',
	'Explanation' => 'Förklaring',
	'Extension_group' => 'Tilläggs grupp',
	'Invalid_extension' => 'Ogiltig tillägg',
	'Extension_exist' => 'Detta tillägg %s finns redan', // replace %s with the Extension
	'Unable_add_forbidden_extension' => 'Detta tillägg %s är förbjuden, du kan inte lägga till den i de tillåtna tilläggen', // replace %s with Extension

// Extensions -> Extension Groups Management
	'Manage_extension_groups' => 'Hantera tilläggs grupper',
	'Manage_extension_groups_explain' => 'Lägg till, ta bort och ändra dina tilläggs grupper, du kan inaktivera tilläggs Grupper, tilldela en särskild kategori för dem, ändra nerladdnings mekanismen och du kan definiera en uppladdnings ikon som ska visas framför en bilaga tillhörande gruppen.',
	'Special_category' => 'Särskild kategori',
	'Category_images' => 'Bilder',
	'Category_stream_files' => 'Stream filer',
	'Category_swf_files' => 'Flash filer',
	'Allowed' => 'Tillåtna',
	'Allowed_forums' => 'Tillåtna forum',
	'Ext_group_permissions' => 'Grupp rättigheter',
	'Download_mode' => 'Ladda ner mode',
	'Upload_icon' => 'Ladda upp ikon',
	'Max_groups_filesize' => 'Maximal filstorlek',
	'Extension_group_exist' => 'Denna tilläggs grupp %s finns redan', // replace %s with the group name
	'Collapse' => '+',
	'Decollapse' => '-',

// Extensions -> Special Categories
	'Manage_categories' => 'Hantera Särskilda kategorier',
	'Manage_categories_explain' => 'Sätt upp Speciella Parametrar och Villkor för de speciella kategorierna tilldelade till en Extension Grupp.',
	'Settings_cat_images' => 'Inställningar för Speciell Kategori: Bilder',
	'Settings_cat_streams' => 'Inställningar för Speciell Kategori: Stream Filer',
	'Settings_cat_flash' => 'Inställningar för Speciell Kategori: Flash Filer',
	'Display_inlined' => 'Visa bilder inline',
	'Display_inlined_explain' => 'Välj om du vill visa bilder direkt i inlägget (ja) eller för att visa bilder som en länk ?',
	'Max_image_size' => 'Maximal bild dimension',
	'Max_image_size_explain' => 'Definiera den högsta tillåtna bild dimensionen som skall bifogas (bredd x höjd i pixlar).<br />Om det är inställt på 0x0, är denna funktion inaktiverad. Med några bilder kommer inte den här funktionen att fungera på grund av begränsningar i PHP.',
	'Image_link_size' => 'Bild länk dimensioner',
	'Image_link_size_explain' => 'Om denna definitions dimension på bilden nås, kommer bilden att visas som en länk, i stället för att visa den inline,<br />om inline visning är tillgänglig (bredd x höjd i pixlar).<br />Om den är satt till 0x0, är denna funktion inaktiverad. Med några bilder kommer inte den här funktionen att fungera på grund av begränsningar i PHP.',
	'Assigned_group' => 'Tilldelad grupp',

	'Image_create_thumbnail' => 'Skapa miniatyrbild',
	'Image_create_thumbnail_explain' => 'Skapa alltid en miniatyrbild. Denna funktion åsidosätter nästan alla inställningar i denna särskilda kategori, utom i maximala bild dimensioner. Med denna funktion kommer en miniatyrbild att visas inom inlägget, kan användaren klicka på den för att öppna den verkliga bilden.<br />Observera att denna funktion kräver Imagick installerad, om den inte är installerad eller om felsäkert läge är aktiverat är det möjligt att GD-Extension i PHP kommer att användas. Om Bild-Typen inte stöds av PHP, kommer denna funktion inte att användas.',
	'Image_min_thumb_filesize' => 'Minimal miniatyrbilds filstorlek',
	'Image_min_thumb_filesize_explain' => 'Om en bild är mindre än denna definierade filstorlek kommer ingen miniatyrbild att skapas, eftersom den är tillräckligt liten.',
	'Image_imagick_path' => 'Imagick Program (fullständig sökväg)',
	'Image_imagick_path_explain' => 'Skriv in sökvägen till konverterings programmet imagick, normalt /usr/bin/convert (i Windows: C: / imagemagick / Convert.exe).',
	'Image_search_imagick' => 'Sök Imagick',

	'Use_gd2' => 'Utnyttja GD2 Extension',
	'Use_gd2_explain' => 'PHP kan sammanställas med GD1 eller GD2 tillägg för bild otillbärlig. FÃ¶r att korrekt skapa miniatyrbild utan imagemagick bilagehanteraren Mod används två olika metoder, baserat på ditt val här. Om din miniatyrbild är i dålig kvalitet eller skruvas upp, försök att ändra denna inställning.',
	'Attachment_version' => 'Bilage Mod Version %s', // %s is the version number

// Extensions -> Forbidden Extensions
	'Manage_forbidden_extensions' => 'Hantera förbjudna extensions',
	'Manage_forbidden_extensions_explain' => 'Lägg till eller ta bort det förbjudna tillägget. Tilläggs php, php3 och php4 är förbjudna som standard av säkerhetsskäl, och du kan inte ta bort dem.',
	'Forbidden_extension_exist' => 'Det förbjudna tillägget %s finns redan', // replace %s with the extension
	'Extension_exist_forbidden' => 'Tillägget %s är definierade i dina tillåtna Extensions, vänligen radera den där innan du lägger till den här.', // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
	'Group_permissions_title' => 'Tilläggs gruppens rättigheter -> \'%s\'', // Replace %s with the Groups Name
	'Group_permissions_explain' => 'Begränsa den valda Extension Gruppen till valfritt forum (definierade i Allowed Forum Box). Standard är att tillåta tilläggs grupper till alla forum som anvÃ¤ndaren har möjlighet att bifoga filer i (normalt sätt bilagehanteraren Mod gjorde det sedan början). Bara lägg till de forum som du vill till tillåggs grupp (tilläggen inom denna grupp) som tillåts där, standardnamnet alla forum kommer att försvinna när du lägger forum till listan. Du har möjlighet att på nytt lägga tillbaka alla forum under en viss tidpunkt. Om du lägger till ett forum till ditt forum och rättigheterna är satta till ALLA FORUM kommer inget att ändras. Men om du har ändrat och begränsat tillträde till vissa forum, måste du gå tillbaka hit för att lägga till ditt nyskapade forum. Det är enkelt att göra detta automatiskt, men detta kommer att tvinga dig att redigera en massa filer, därför har jag valt den vägen som det är nu. Tänk på att alla dina forum kommer att listas här.',
	'Note_admin_empty_group_permissions' => 'NOTERA:<br />Inom nedanstående listade forum har användarna normalt tillåtelse att bifoga filer, men eftersom ingen Extension Grupp tillåts bifogas där, kan dina användare inte bifoga något. Om de försöker, kommer de att få Error Meddelanden. Kanske du vill ställa in rättigheter \ Post Filer \ för ADMIN på detta forum.<br /><br />',
	'Add_forums' => 'Lägg till forum',
	'Add_selected' => 'Lägg till valda',
	'Perm_all_forums' => 'ALLA FORUM',

// Attachments -> Quota Limits
	'Manage_quotas' => 'Hantera bilagors kvot begränsning',
	'Manage_quotas_explain' => 'Lägg till / ta bort / ändra kvot begränsningen. Du kan tilldela dessa kvot begränsningar till användare och grupper senare. För att tilldela en kvot begränsning till en användare måste du gå till Användar-> Management, välja användaren och du kommer att se val i botten. För att tilldela en kvot begränsning till en grupp, gå till Grupp->Management, välj Gruppen för att redigera den och du kommer se konfigurationsinställningar. Om du vill se vilka användare och grupper som har tilldelats en särskild kvot begränsning, klicka på \'Visa\' till vänster om kvot beskrivningen.',
	'Assigned_users' => 'Tilldelade användare',
	'Assigned_groups' => 'Tilldelade grupper',
	'Quota_limit_exist' => 'Kvot begränsningen %s finns redan.', // Replace %s with the Quota Description

// Attachments -> Control Panel
	'Control_panel_title' => 'Fil bilagors kontroll panel',
	'Control_panel_explain' => 'Se och hantera alla bilagor baserat på användare, Bilagor, Vyer etc...',
	'File_comment_cp' => 'Fil kommentar',

// Control Panel -> Search
	'Search_wildcard_explain' => 'Använd * som ett jokertecken för partiella matchningar',
	'Size_smaller_than' => 'Bilagors storlek mindre än (bytes)',
	'Size_greater_than' => 'Bilagors storlek större än (bytes)',
	'Count_smaller_than' => 'Nerladdnings räkning är mindre än',
	'Count_greater_than' => 'Nerladdnings räkning är större än',
	'More_days_old' => 'Mer än så här många dagar gammalt',
	'No_attach_search_match' => 'Inga bilagor uppfyllde dina sökkriterier',

// Control Panel -> Statistics
	'Number_of_attachments' => 'Antal bilagor',
	'Total_filesize' => 'Total filstorlek',
	'Number_posts_attach' => 'Antal inlägg med bifogade filer',
	'Number_topics_attach' => 'Antal ämnen med bilagor',
	'Number_users_attach' => 'Oberoende användares postade bilagor',
	'Number_pms_attach' => 'Totalt antal bilagor i privata meddelanden',

// Control Panel -> Attachments
	'Statistics_for_user' => 'Bilagor statistik för %s', // replace %s with username
	'Size_in_kb' => 'Storlek (KB)',
	'Downloads' => 'Nerladdningar',
	'Post_time' => 'Inläggs tid',
	'Posted_in_topic' => 'Inlagd i ämne',
	'Submit_changes' => 'Skicka ändringar',

// Sort Types
	'Sort_Attachments' => 'Bilagor',
	'Sort_Size' => 'Storlek',
	'Sort_Filename' => 'Filnamn',
	'Sort_Comment' => 'Kommentar',
	'Sort_Extension' => 'Tillägg',
	'Sort_Downloads' => 'Nerladdningar',
	'Sort_Posttime' => 'Inläggs tid',
	'Sort_Posts' => 'Inlägg',

// View Types
	'View_Statistic' => 'Statistik',
	'View_Search' => 'Sök',
	'View_Username' => 'Användarnamn',
	'View_Attachments' => 'Bilagor',

// Successfully updated
	'Attach_config_updated' => 'Bilags konfigurationen uppdaterad successfullt',
	'Click_return_attach_config' => 'Klicka %sHär%s för att återvända till bilags konfigurationen',
	'Test_settings_successful' => 'Inställnings test färdig, konfigurationen verkar vara bra.',

// Some basic definitions
	'Attachments' => 'Bilagor',
	'Attachment' => 'Bilaga',
	'Extensions' => 'Tillägg',
	'Extension' => 'Tillägg',

// Auth pages
	'Auth_attach' => 'Post filer',
	'Auth_download' => 'Ladda ner filer',
	)
);

?>