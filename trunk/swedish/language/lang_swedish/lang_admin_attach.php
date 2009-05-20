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
	'Shadow_attachments' => 'Skugg Bilagor',
	'Forbidden_extensions' => 'Förbjudna Tillägg',
	'Extension_control' => 'Tilläggs Kontroll',
	'Extension_group_manage' => 'Tilläggs Grupp Kontroll',
	'Special_categories' => 'Särskilda Kategorier',
	'Sync_attachments' => 'Synkronisera Bilagor',
	'Quota_limits' => 'Kvot Gränserna',

// Attachments -> Management
	'Attach_settings' => 'Bilage Inställningar',
	'Manage_attachments_explain' => '<b>Konfigurera Huvud Inställningar för Bilage Mod.</b><br /> Om du trycker på Test-Inställningar knappen, kommer Bilage Mod att göra några System Tester för att vara säker på att Mod kommer att fungera. Om du har problem med att lägga upp filer, kör det här testet för att få ett detaljerat error-meddelande.',
	'Attach_filesize_settings' => 'Bilagor Filstorlek Inställningar',
	'Attach_number_settings' => 'Bilagor Antal Inställningar',
	'Attach_options_settings' => 'Bilagor Alternativ',

	'Upload_directory' => 'Uppladdnings Katalogen',
	'Upload_directory_explain' => 'Ange relativ sökväg för din phpBB2 installation för att vara Bilagors uppladdnings katalog. Till exempel, ange \'filer\' Om din phpBB2 Installation ligger på http://www.yourdomain.com/phpBB2 och Bilagors uppladdnings katalog är lokaliserad på http://www.yourdomain.com/ip/filer.',
	'Attach_img_path' => 'Bilagors Inläggs Ikon',
	'Attach_img_path_explain' => 'Den här bilden visas bredvid Bilagors Länkar i enskilda inlägg. Lämna det här fältet tomt om du inte vill att en ikon ska visas. Den här inställningen kommer att skrivas över av inställningarna i Tillägg Grupper Management.',
	'Attach_topic_icon' => 'Bilagor Ämne Ikon',
	'Attach_topic_icon_explain' => 'Denna bild visas innan ämnen med Bilagor. Lämna det här fältet tomt om du inte vill att en ikon ska visas.',
	'Attach_display_order' => 'Bilagor Visnings Order',
	'Attach_display_order_explain' => 'Välj var du vill visa bifogade filer i Inlägg/PMs i fallande FILTID Ordning (Nyaste Bifogningar Först) eller Stigande FILTID Ordning (Äldsta Bifogningar Först).',
	'Show_apcp' => 'Visa nya Bilagor Inläggs Kontrollpanel',
	'Show_apcp_explain' => 'Välj var du vill visa Bilagor Inläggs Kontrollpanelen (ja) eller den gamla metoden med två boxar för bilags filer och redigera dina inlagda Bilagor (nej) i din inläggs Skärm. Utseendet på det är mycket svårt att förklara, därför är det bästa att prova det.',

	'Max_filesize_attach' => 'Filstorlek',
	'Max_filesize_attach_explain' => 'Maximal filstorlek för Bilagor. Ett värde på 0 menas \'obegränsad\'. Denna inställning är begränsad av din Server Konfiguration. Till exempel, om din php Konfiguration bara tillåter maximalt 2 MB uppladdningar, kan detta inte överskrivas av Mod.',
	'Attach_quota' => 'Bilagor Kvot',
	'Attach_quota_explain' => 'Maximal Diskplats alla bilagor kan ha på ditt Webb utrymme. Värdet 0 betyder \ "obegränsat\'.',
	'Max_filesize_pm' => 'Maximal Filstorlek i Privata Meddelanden Mapp',
	'Max_filesize_pm_explain' => 'Maximal Diskplats Bilagor kan använda i varje Användares Privata Meddelande box. Värdet 0 betyder obegränsat\'.',
	'Default_quota_limit' => 'Standard Kvot Begränsning',
	'Default_quota_limit_explain' => 'välja Standard Kvotgräns automatiskt tilldelat till nyregistrerade användare, och Användare utan definierad Kvotgräns. Alternativet \ "Ingen Kvotgräns \" är till för att inte använda några Bilage Kvoter istället använda standardinställningarna som du har definierat inom denna Management panelen.',

	'Max_attachments' => 'Maximalt Antal Bilagor',
	'Max_attachments_explain' => 'Det maximala antalet bilagor som tillåts i en post.',
	'Max_attachments_pm' => 'Maximalt antal Bilagor i ett Privat Meddelande',
	'Max_attachments_pm_explain' => 'Ange högsta antal bilagor som användaren är tillåten att ha i ett privat meddelande.',

	'Disable_mod' => 'Avaktivera Bilagor Mod',
	'Disable_mod_explain' => 'Alternativet är främst till för att testa nya mallar eller teman, det inaktiverar alla Bilage Funktioner utom Admin Panel.',
	'PM_Attachments' => 'Tillåt Bilagor i Privata meddelanden',
	'PM_Attachments_explain' => 'Tillåt/Tillåt ej bifogning av filer till Privata Meddelanden.',
	'Ftp_upload' => 'Aktivera FTP Uppladdning',
	'Ftp_upload_explain' => 'Aktivera / Inaktivera FTP Uppladdnings alternativ. Om du ställer in den på ja, måste du definiera Bilagor FTP Inställningar och Uppladdnings Katalogen som inte längre används.',
	'Attachment_topic_review' => 'Vill du visa Bilagor i Ämne Gransknings Fönster ?',
	'Attachment_topic_review_explain' => 'Om du väljer ja, kommer alla Bifogade filer att visas i Ämnes Granskningen när du skickar ett svar.',

	'Ftp_server' => 'FTP Uppladdnings Server',
	'Ftp_server_explain' => 'Ange IP-adress eller FTP-värdnamn på den server som används för dina uppladdade filer. Om du lämnar dessa fält tomma, Kommer Servern som ditt phpBB2 Forum är installerat på att användas. Observera att det inte är tillåtet att lägga ftp:// eller något annat till adressen, helt enkelt ftp.foo.com, (vilket som är mycket snabbare), än vanlig IP-adress.',

	'ftp_username' => 'Ditt FTP Användarnamn',
	'ftp_password' => 'Ditt FTP Lösenord',

	'Attach_ftp_path' => 'FTP sökvägen till din uppladdningskatalog',
	'Attach_ftp_path_explain' => 'Katalogen där dina Bilagor kommer att förvaras. Denna katalog behöver inte vara chmodded. Vänligen ange inte din IP-eller FTP-adress här, inmatningsfältet är bara till för FTP Sökväg. <br /> Exempel: /home/web/uploads',
	'Ftp_download_path' => 'Nerladdnings Länk till FTP Sökväg',
	'Ftp_download_path_explain' => 'Ange URL till din FTP Sökväg, där dina Bilagor är lagrade.<br />Om du använder en Remote FTP-server anger du den fullständiga webbadressen, till exempel http://www.mystorage.com/ip/upload.<br />Om du använder din Lokala Värd för att lagra dina filer kan du ange webbadressens sökväg i förhållande till din phpBB2 Katalog, till exempel \'upload\'.<br />Ett snedstreck kommer att tas bort. Lämna det här fältet tomt, Om FTP Sökvägen inte är tillgänglig på Internet. Med det här fältet tomt kan du inte använda den fysiska nedladdnings metoden.',
	'Ftp_passive_mode' => 'Aktivera FTP Passivt Mode',
	'Ftp_passive_mode_explain' => 'PASV kommandot begär att fjärrservern öppnar en port för data anslutning och återskickar adressen till den porten. Fjärrservern lyssnar på den porten och kunden ansluter sig till den.',

	'No_ftp_extensions_installed' => 'Du kan inte använda FTP Upload Methods, eftersom FTP Extensions inte är utarbetat in i din PHP Installation.',

// Attachments -> Shadow Attachments
	'Shadow_attachments_explain' => 'Radera bifogad data från inlägg när filerna saknas i filsystemet, och ta bort filer som inte längre är knutna till något inlägg. Du kan hämta eller visa en fil om du klickar på den, och om inte någon länk finns, då finns inte filen.',
	'Shadow_attachments_file_explain' => 'Radera alla bifogade filer som finns på ditt filsystem och är inte tilldelade i något inlägg.',
	'Shadow_attachments_row_explain' => 'Radera all inlaggd bilags data för filer som inte finns i filsystemet.',
	'Empty_file_entry' => 'Töm Fil Post',

// Attachments -> Sync
	'Sync_thumbnail_recreated' => 'Miniatyrbild skapades för Bilaga: %s', // replace %s with physical Filename
	'Sync_thumbnail_resetted' => 'Miniatyrbild återställd för Bilagor: %s', // replace %s with physical Filename
	'Attach_sync_finished' => 'Bilage Synkronisering Färdig.',
	'Sync_topics' => 'Synkronisera Ämnen',
	'Sync_posts' => 'Synkronisera Inlägg',
	'Sync_thumbnails' => 'Synkronisera  Miniatyrbilder',


// Extensions -> Extension Control
	'Manage_extensions' => 'Hantera Tillägg',
	'Manage_extensions_explain' => 'Hantera dina Fil Tillägg. Om du vill tillåta/inte tillåta en Extension att bli uppladdad, vänligen använd Extension Gruppens Hantering.',
	'Explanation' => 'Förklaring',
	'Extension_group' => 'Tilläggs Grupp',
	'Invalid_extension' => 'Ogiltig Tillägg',
	'Extension_exist' => 'Detta Tillägg %s finns redan', // replace %s with the Extension
	'Unable_add_forbidden_extension' => 'Detta Tillägg %s är förbjuden, du kan inte lägga till den i de tillåtna Tillägg', // replace %s with Extension

// Extensions -> Extension Groups Management
	'Manage_extension_groups' => 'Hantera Tilläggs Grupper',
	'Manage_extension_groups_explain' => 'Lägg till, ta bort och ändra dina Tilläggs Grupper, du kan inaktivera Tilläggs Grupper, tilldela en särskild kategori för dem, ändra nerladdnings mekanismen och du kan definiera ett Uppladdnings ikon som ska visas framför en Bilaga tillhörande Gruppen.',
	'Special_category' => 'Särskild Kategori',
	'Category_images' => 'Bilder',
	'Category_stream_files' => 'Stream Filer',
	'Category_swf_files' => 'Flash Filer',
	'Allowed' => 'Tillåtna',
	'Allowed_forums' => 'Tillåtna Forums',
	'Ext_group_permissions' => 'Grupp Rättigheter',
	'Download_mode' => 'Ladda Ner Mode',
	'Upload_icon' => 'Ladda Upp Ikon',
	'Max_groups_filesize' => 'Maximal Filstorlek',
	'Extension_group_exist' => 'Denna Tilläggs Grupp %s finns redan', // replace %s with the group name
	'Collapse' => '+',
	'Decollapse' => '-',

// Extensions -> Special Categories
	'Manage_categories' => 'Hantera Särskilda Kategorier',
	'Manage_categories_explain' => 'Sätt upp Speciella Parametrar och Villkor för de Speciella Kategorierna tilldelade till en Extension Grupp.',
	'Settings_cat_images' => 'Inställningar för Speciell Kategori: Bilder',
	'Settings_cat_streams' => 'Inställningar för Speciell Kategori: Stream Filer',
	'Settings_cat_flash' => 'Inställningar för Speciell Kategori: Flash Filer',
	'Display_inlined' => 'Visa Bilder Inline',
	'Display_inlined_explain' => 'Välj om du vill visa bilder direkt i inlägget (ja) eller för att visa bilder som en länk ?',
	'Max_image_size' => 'Maximal Bild Dimensioner',
	'Max_image_size_explain' => 'Definiera den högsta tillåtna Bild Dimensionen som skall bifogas (Bredd x Höjd i pixlar).<br />Om det är inställt på 0x0, är denna funktion inaktiverad. Med några bilder kommer inte den här funktionen att fungera på grund av begränsningar i PHP.',
	'Image_link_size' => 'Bild Länk Dimensioner',
	'Image_link_size_explain' => 'Om denna definitions dimension på bilen nås, kommer bilden att visas som en länk, i stället för att visa den inline,<br />om Inline Visning är tillgänglig (Bredd x Höjd i pixlar).<br />Om den är satt till 0x0, är denna funktion inaktiverad. Med några bilder kommer inte den här funktionen att fungera på grund av begränsningar i PHP.',
	'Assigned_group' => 'Tilldelad Grupp',

	'Image_create_thumbnail' => 'Skapa Miniatyrbild',
	'Image_create_thumbnail_explain' => 'Skapa alltid en Miniatyrbild. Denna funktion åsidosätter nästan alla inställningar i denna Särskilda Kategori, utom i Maximala Bild Dimensioner. Med denna funktion kommer en Miniatyrbild att visas inom inlägget, kan Användaren klicka på den för att öppna den verkliga Bild.<br />Observera att denna funktion kräver Imagick installerad, om den inte är installerad eller om felsäkert läge är aktiverat är det möjligt att GD-Extension i PHP kommer att användas. Om Bild-Typen inte stöds av PHP, kommer denna funktion inte att användas.',
	'Image_min_thumb_filesize' => 'Minimal Miniatyrbilds Filstorlek',
	'Image_min_thumb_filesize_explain' => 'Om en bild är mindre än denna definierade Filstorlek kommer ingen Miniatyrbild att skapas, eftersom den är tillräckligt liten.',
	'Image_imagick_path' => 'Imagick Program (Fullständig sökväg)',
	'Image_imagick_path_explain' => 'Skriv in sökvägen till konverterings programmet imagick, normalt /usr/bin/convert (i Windows: C: / imagemagick / Convert.exe).',
	'Image_search_imagick' => 'Sök Imagick',

	'Use_gd2' => 'Utnyttja GD2 Extension',
	'Use_gd2_explain' => 'PHP kan sammanställas med GD1 eller GD2 Tillägg för bild otillbörlig. För att korrekt skapa Miniatyrbild utan imagemagick bilagehanteraren Mod används två olika metoder, baserat på ditt val här. Om din miniatyrbild är i dålig kvalitet eller skruvas upp, försök att ändra denna inställning.',
	'Attachment_version' => 'Bilage Mod Version %s', // %s is the version number

// Extensions -> Forbidden Extensions
	'Manage_forbidden_extensions' => 'Hantera Förbjudna Extensions',
	'Manage_forbidden_extensions_explain' => 'Lägg till eller ta bort det förbjudna tillägget. Tilläggs php, php3 och php4 är förbjudna som standard av säkerhetsskäl, och du kan inte ta bort dem.',
	'Forbidden_extension_exist' => 'Det Förbjudna Tillägget %s finns redan', // replace %s with the extension
	'Extension_exist_forbidden' => 'Tillägget %s är definierade i din tillåtna Extensions, vänligen radera den där innan du lägger till den här.', // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
	'Group_permissions_title' => 'Tilläggs Gruppens Rättigheter -> \'%s\'', // Replace %s with the Groups Name
	'Group_permissions_explain' => 'begränsa den valda Extension Gruppen till Forum valfritt (definierade i Allowed Forum Box). Standard är att tillåta Tilläggs Grupper till alla Forum som användaren har möjlighet att bifoga filer i (normalt sätt bilagehanteraren Mod gjorde det sedan början). Bara lägg till de Forum som du vill att Tilläggs Grupp (Tilläggen inom denna Grupp) som tillåts där, standardnamnet Alla Forum kommer att försvinna när du lägger Forum till listan. Du har möjlighet att på nytt lägga tillbaka alla forum under en viss tidpunkt. Om du lägger till ett Forum till ditt Forum och Rättigheterna är satta till ALLA FORUM kommer inget att ändras. Men om du har ändrat och begränsat tillträde till vissa Forum, måste du gå tillbaka hit för att lägga till ditt nyskapade Forum. Det är enkelt att göra detta automatiskt, men detta kommer att tvinga dig att redigera en massa Filer, därför har jag valt den vägen som det är nu. Tänk på att alla dina Forum kommer att listas här.',
	'Note_admin_empty_group_permissions' => 'NOTERA:<br />Inom nedanstående listade Forum har användarna normalt tillåtelse att bifoga filer, men eftersom ingen Extension Grupp tillåts bifogas där, kan dina användare inte bifoga något. Om de försöker, kommer de att få Error Meddelanden. Kanske du vill ställa in Rättigheter \ Post Filer \ för ADMIN på detta forum.<br /><br />',
	'Add_forums' => 'Lägg till Forum',
	'Add_selected' => 'Lägg till Valda',
	'Perm_all_forums' => 'ALLA FORUM',

// Attachments -> Quota Limits
	'Manage_quotas' => 'Hantera Bilagors Kvot Begränsning',
	'Manage_quotas_explain' => 'Lägg till / ta bort / ändra Kvot Begränsningen. Du kan tilldela dessa Kvot Begränsningar till Användare och Grupper senare. För att tilldela en Kvot Begränsningen till en användare måste du gå till Användare-> Management, välja användaren och du kommer att se Val i botten. För att tilldela en Kvot Begränsning till en Grupp, gå till Grupp->Management, välj Gruppen för att redigera den och du kommer se Konfigurationsinställningar. Om du vill se vilka Användare och Grupper som har tilldelats en särskild Kvot Begränsning, klicka på \'Visa\' till vänster om Kvot Beskrivningen.',
	'Assigned_users' => 'Tilldelade Användare',
	'Assigned_groups' => 'Tilldelade Grupper',
	'Quota_limit_exist' => 'Kvot begränsningen %s finns redan.', // Replace %s with the Quota Description

// Attachments -> Control Panel
	'Control_panel_title' => 'Fil Bilagors Kontroll Panel',
	'Control_panel_explain' => 'Se och hantera alla bilagor baserat på användare, Bilagor, Vyer etc...',
	'File_comment_cp' => 'Fil Kommentar',

// Control Panel -> Search
	'Search_wildcard_explain' => 'Använd * som ett jokertecken för partiella matchningar',
	'Size_smaller_than' => 'Bilagors storlek mindre än (bytes)',
	'Size_greater_than' => 'Bilagors storlek större än (bytes)',
	'Count_smaller_than' => 'Nerladdnings räkning är mindre än',
	'Count_greater_than' => 'Nerladdnings räkning är större än',
	'More_days_old' => 'Mer än så här många dagar gammalt',
	'No_attach_search_match' => 'Inga Bilagor uppfyllde dina sökkriterier',

// Control Panel -> Statistics
	'Number_of_attachments' => 'Antal Bilagor',
	'Total_filesize' => 'Total Filstorlek',
	'Number_posts_attach' => 'Antal inlägg med bifogade filer',
	'Number_topics_attach' => 'Antal ämnen med bilagor',
	'Number_users_attach' => 'Oberoende Användares Postade Bilagor',
	'Number_pms_attach' => 'Totalt Antal Bilagor i Privata Meddelanden',

// Control Panel -> Attachments
	'Statistics_for_user' => 'Bilagor Statistik för %s', // replace %s with username
	'Size_in_kb' => 'Storlek (KB)',
	'Downloads' => 'Nerladdningar',
	'Post_time' => 'Inläggs Tid',
	'Posted_in_topic' => 'Inlagd i Ämne',
	'Submit_changes' => 'Skicka Ändringar',

// Sort Types
	'Sort_Attachments' => 'Bilagor',
	'Sort_Size' => 'Storlek',
	'Sort_Filename' => 'Filnamn',
	'Sort_Comment' => 'Kommentar',
	'Sort_Extension' => 'Tillägg',
	'Sort_Downloads' => 'Nerladdningar',
	'Sort_Posttime' => 'Inläggs Tid',
	'Sort_Posts' => 'Inlägg',

// View Types
	'View_Statistic' => 'Statistik',
	'View_Search' => 'Sök',
	'View_Username' => 'Användarnamn',
	'View_Attachments' => 'Bilagor',

// Successfully updated
	'Attach_config_updated' => 'Bilags Konfigurationen uppdaterad successfullt',
	'Click_return_attach_config' => 'Klicka %sHär%s för att återvända till Bilags Konfigurationen',
	'Test_settings_successful' => 'Inställnings Test färdig, konfigurationen verkar vara bra.',

// Some basic definitions
	'Attachments' => 'Bilagor',
	'Attachment' => 'Bilaga',
	'Extensions' => 'Tillägg',
	'Extension' => 'Tillägg',

// Auth pages
	'Auth_attach' => 'Post Filer',
	'Auth_download' => 'Ladda Ner Filer',
	)
);

?>