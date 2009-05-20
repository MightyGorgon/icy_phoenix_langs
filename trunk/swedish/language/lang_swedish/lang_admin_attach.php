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
	'Forbidden_extensions' => 'F�rbjudna Till�gg',
	'Extension_control' => 'Till�ggs Kontroll',
	'Extension_group_manage' => 'Till�ggs Grupp Kontroll',
	'Special_categories' => 'S�rskilda Kategorier',
	'Sync_attachments' => 'Synkronisera Bilagor',
	'Quota_limits' => 'Kvot Gr�nserna',

// Attachments -> Management
	'Attach_settings' => 'Bilage Inst�llningar',
	'Manage_attachments_explain' => '<b>Konfigurera Huvud Inst�llningar f�r Bilage Mod.</b><br /> Om du trycker p� Test-Inst�llningar knappen, kommer Bilage Mod att g�ra n�gra System Tester f�r att vara s�ker p� att Mod kommer att fungera. Om du har problem med att l�gga upp filer, k�r det h�r testet f�r att f� ett detaljerat error-meddelande.',
	'Attach_filesize_settings' => 'Bilagor Filstorlek Inst�llningar',
	'Attach_number_settings' => 'Bilagor Antal Inst�llningar',
	'Attach_options_settings' => 'Bilagor Alternativ',

	'Upload_directory' => 'Uppladdnings Katalogen',
	'Upload_directory_explain' => 'Ange relativ s�kv�g f�r din phpBB2 installation f�r att vara Bilagors uppladdnings katalog. Till exempel, ange \'filer\' Om din phpBB2 Installation ligger p� http://www.yourdomain.com/phpBB2 och Bilagors uppladdnings katalog �r lokaliserad p� http://www.yourdomain.com/ip/filer.',
	'Attach_img_path' => 'Bilagors Inl�ggs Ikon',
	'Attach_img_path_explain' => 'Den h�r bilden visas bredvid Bilagors L�nkar i enskilda inl�gg. L�mna det h�r f�ltet tomt om du inte vill att en ikon ska visas. Den h�r inst�llningen kommer att skrivas �ver av inst�llningarna i Till�gg Grupper Management.',
	'Attach_topic_icon' => 'Bilagor �mne Ikon',
	'Attach_topic_icon_explain' => 'Denna bild visas innan �mnen med Bilagor. L�mna det h�r f�ltet tomt om du inte vill att en ikon ska visas.',
	'Attach_display_order' => 'Bilagor Visnings Order',
	'Attach_display_order_explain' => 'V�lj var du vill visa bifogade filer i Inl�gg/PMs i fallande FILTID Ordning (Nyaste Bifogningar F�rst) eller Stigande FILTID Ordning (�ldsta Bifogningar F�rst).',
	'Show_apcp' => 'Visa nya Bilagor Inl�ggs Kontrollpanel',
	'Show_apcp_explain' => 'V�lj var du vill visa Bilagor Inl�ggs Kontrollpanelen (ja) eller den gamla metoden med tv� boxar f�r bilags filer och redigera dina inlagda Bilagor (nej) i din inl�ggs Sk�rm. Utseendet p� det �r mycket sv�rt att f�rklara, d�rf�r �r det b�sta att prova det.',

	'Max_filesize_attach' => 'Filstorlek',
	'Max_filesize_attach_explain' => 'Maximal filstorlek f�r Bilagor. Ett v�rde p� 0 menas \'obegr�nsad\'. Denna inst�llning �r begr�nsad av din Server Konfiguration. Till exempel, om din php Konfiguration bara till�ter maximalt 2 MB uppladdningar, kan detta inte �verskrivas av Mod.',
	'Attach_quota' => 'Bilagor Kvot',
	'Attach_quota_explain' => 'Maximal Diskplats alla bilagor kan ha p� ditt Webb utrymme. V�rdet 0 betyder \ "obegr�nsat\'.',
	'Max_filesize_pm' => 'Maximal Filstorlek i Privata Meddelanden Mapp',
	'Max_filesize_pm_explain' => 'Maximal Diskplats Bilagor kan anv�nda i varje Anv�ndares Privata Meddelande box. V�rdet 0 betyder obegr�nsat\'.',
	'Default_quota_limit' => 'Standard Kvot Begr�nsning',
	'Default_quota_limit_explain' => 'v�lja Standard Kvotgr�ns automatiskt tilldelat till nyregistrerade anv�ndare, och Anv�ndare utan definierad Kvotgr�ns. Alternativet \ "Ingen Kvotgr�ns \" �r till f�r att inte anv�nda n�gra Bilage Kvoter ist�llet anv�nda standardinst�llningarna som du har definierat inom denna Management panelen.',

	'Max_attachments' => 'Maximalt Antal Bilagor',
	'Max_attachments_explain' => 'Det maximala antalet bilagor som till�ts i en post.',
	'Max_attachments_pm' => 'Maximalt antal Bilagor i ett Privat Meddelande',
	'Max_attachments_pm_explain' => 'Ange h�gsta antal bilagor som anv�ndaren �r till�ten att ha i ett privat meddelande.',

	'Disable_mod' => 'Avaktivera Bilagor Mod',
	'Disable_mod_explain' => 'Alternativet �r fr�mst till f�r att testa nya mallar eller teman, det inaktiverar alla Bilage Funktioner utom Admin Panel.',
	'PM_Attachments' => 'Till�t Bilagor i Privata meddelanden',
	'PM_Attachments_explain' => 'Till�t/Till�t ej bifogning av filer till Privata Meddelanden.',
	'Ftp_upload' => 'Aktivera FTP Uppladdning',
	'Ftp_upload_explain' => 'Aktivera / Inaktivera FTP Uppladdnings alternativ. Om du st�ller in den p� ja, m�ste du definiera Bilagor FTP Inst�llningar och Uppladdnings Katalogen som inte l�ngre anv�nds.',
	'Attachment_topic_review' => 'Vill du visa Bilagor i �mne Gransknings F�nster ?',
	'Attachment_topic_review_explain' => 'Om du v�ljer ja, kommer alla Bifogade filer att visas i �mnes Granskningen n�r du skickar ett svar.',

	'Ftp_server' => 'FTP Uppladdnings Server',
	'Ftp_server_explain' => 'Ange IP-adress eller FTP-v�rdnamn p� den server som anv�nds f�r dina uppladdade filer. Om du l�mnar dessa f�lt tomma, Kommer Servern som ditt phpBB2 Forum �r installerat p� att anv�ndas. Observera att det inte �r till�tet att l�gga ftp:// eller n�got annat till adressen, helt enkelt ftp.foo.com, (vilket som �r mycket snabbare), �n vanlig IP-adress.',

	'ftp_username' => 'Ditt FTP Anv�ndarnamn',
	'ftp_password' => 'Ditt FTP L�senord',

	'Attach_ftp_path' => 'FTP s�kv�gen till din uppladdningskatalog',
	'Attach_ftp_path_explain' => 'Katalogen d�r dina Bilagor kommer att f�rvaras. Denna katalog beh�ver inte vara chmodded. V�nligen ange inte din IP-eller FTP-adress h�r, inmatningsf�ltet �r bara till f�r FTP S�kv�g. <br /> Exempel: /home/web/uploads',
	'Ftp_download_path' => 'Nerladdnings L�nk till FTP S�kv�g',
	'Ftp_download_path_explain' => 'Ange URL till din FTP S�kv�g, d�r dina Bilagor �r lagrade.<br />Om du anv�nder en Remote FTP-server anger du den fullst�ndiga webbadressen, till exempel http://www.mystorage.com/ip/upload.<br />Om du anv�nder din Lokala V�rd f�r att lagra dina filer kan du ange webbadressens s�kv�g i f�rh�llande till din phpBB2 Katalog, till exempel \'upload\'.<br />Ett snedstreck kommer att tas bort. L�mna det h�r f�ltet tomt, Om FTP S�kv�gen inte �r tillg�nglig p� Internet. Med det h�r f�ltet tomt kan du inte anv�nda den fysiska nedladdnings metoden.',
	'Ftp_passive_mode' => 'Aktivera FTP Passivt Mode',
	'Ftp_passive_mode_explain' => 'PASV kommandot beg�r att fj�rrservern �ppnar en port f�r data anslutning och �terskickar adressen till den porten. Fj�rrservern lyssnar p� den porten och kunden ansluter sig till den.',

	'No_ftp_extensions_installed' => 'Du kan inte anv�nda FTP Upload Methods, eftersom FTP Extensions inte �r utarbetat in i din PHP Installation.',

// Attachments -> Shadow Attachments
	'Shadow_attachments_explain' => 'Radera bifogad data fr�n inl�gg n�r filerna saknas i filsystemet, och ta bort filer som inte l�ngre �r knutna till n�got inl�gg. Du kan h�mta eller visa en fil om du klickar p� den, och om inte n�gon l�nk finns, d� finns inte filen.',
	'Shadow_attachments_file_explain' => 'Radera alla bifogade filer som finns p� ditt filsystem och �r inte tilldelade i n�got inl�gg.',
	'Shadow_attachments_row_explain' => 'Radera all inlaggd bilags data f�r filer som inte finns i filsystemet.',
	'Empty_file_entry' => 'T�m Fil Post',

// Attachments -> Sync
	'Sync_thumbnail_recreated' => 'Miniatyrbild skapades f�r Bilaga: %s', // replace %s with physical Filename
	'Sync_thumbnail_resetted' => 'Miniatyrbild �terst�lld f�r Bilagor: %s', // replace %s with physical Filename
	'Attach_sync_finished' => 'Bilage Synkronisering F�rdig.',
	'Sync_topics' => 'Synkronisera �mnen',
	'Sync_posts' => 'Synkronisera Inl�gg',
	'Sync_thumbnails' => 'Synkronisera  Miniatyrbilder',


// Extensions -> Extension Control
	'Manage_extensions' => 'Hantera Till�gg',
	'Manage_extensions_explain' => 'Hantera dina Fil Till�gg. Om du vill till�ta/inte till�ta en Extension att bli uppladdad, v�nligen anv�nd Extension Gruppens Hantering.',
	'Explanation' => 'F�rklaring',
	'Extension_group' => 'Till�ggs Grupp',
	'Invalid_extension' => 'Ogiltig Till�gg',
	'Extension_exist' => 'Detta Till�gg %s finns redan', // replace %s with the Extension
	'Unable_add_forbidden_extension' => 'Detta Till�gg %s �r f�rbjuden, du kan inte l�gga till den i de till�tna Till�gg', // replace %s with Extension

// Extensions -> Extension Groups Management
	'Manage_extension_groups' => 'Hantera Till�ggs Grupper',
	'Manage_extension_groups_explain' => 'L�gg till, ta bort och �ndra dina Till�ggs Grupper, du kan inaktivera Till�ggs Grupper, tilldela en s�rskild kategori f�r dem, �ndra nerladdnings mekanismen och du kan definiera ett Uppladdnings ikon som ska visas framf�r en Bilaga tillh�rande Gruppen.',
	'Special_category' => 'S�rskild Kategori',
	'Category_images' => 'Bilder',
	'Category_stream_files' => 'Stream Filer',
	'Category_swf_files' => 'Flash Filer',
	'Allowed' => 'Till�tna',
	'Allowed_forums' => 'Till�tna Forums',
	'Ext_group_permissions' => 'Grupp R�ttigheter',
	'Download_mode' => 'Ladda Ner Mode',
	'Upload_icon' => 'Ladda Upp Ikon',
	'Max_groups_filesize' => 'Maximal Filstorlek',
	'Extension_group_exist' => 'Denna Till�ggs Grupp %s finns redan', // replace %s with the group name
	'Collapse' => '+',
	'Decollapse' => '-',

// Extensions -> Special Categories
	'Manage_categories' => 'Hantera S�rskilda Kategorier',
	'Manage_categories_explain' => 'S�tt upp Speciella Parametrar och Villkor f�r de Speciella Kategorierna tilldelade till en Extension Grupp.',
	'Settings_cat_images' => 'Inst�llningar f�r Speciell Kategori: Bilder',
	'Settings_cat_streams' => 'Inst�llningar f�r Speciell Kategori: Stream Filer',
	'Settings_cat_flash' => 'Inst�llningar f�r Speciell Kategori: Flash Filer',
	'Display_inlined' => 'Visa Bilder Inline',
	'Display_inlined_explain' => 'V�lj om du vill visa bilder direkt i inl�gget (ja) eller f�r att visa bilder som en l�nk ?',
	'Max_image_size' => 'Maximal Bild Dimensioner',
	'Max_image_size_explain' => 'Definiera den h�gsta till�tna Bild Dimensionen som skall bifogas (Bredd x H�jd i pixlar).<br />Om det �r inst�llt p� 0x0, �r denna funktion inaktiverad. Med n�gra bilder kommer inte den h�r funktionen att fungera p� grund av begr�nsningar i PHP.',
	'Image_link_size' => 'Bild L�nk Dimensioner',
	'Image_link_size_explain' => 'Om denna definitions dimension p� bilen n�s, kommer bilden att visas som en l�nk, i st�llet f�r att visa den inline,<br />om Inline Visning �r tillg�nglig (Bredd x H�jd i pixlar).<br />Om den �r satt till 0x0, �r denna funktion inaktiverad. Med n�gra bilder kommer inte den h�r funktionen att fungera p� grund av begr�nsningar i PHP.',
	'Assigned_group' => 'Tilldelad Grupp',

	'Image_create_thumbnail' => 'Skapa Miniatyrbild',
	'Image_create_thumbnail_explain' => 'Skapa alltid en Miniatyrbild. Denna funktion �sidos�tter n�stan alla inst�llningar i denna S�rskilda Kategori, utom i Maximala Bild Dimensioner. Med denna funktion kommer en Miniatyrbild att visas inom inl�gget, kan Anv�ndaren klicka p� den f�r att �ppna den verkliga Bild.<br />Observera att denna funktion kr�ver Imagick installerad, om den inte �r installerad eller om fels�kert l�ge �r aktiverat �r det m�jligt att GD-Extension i PHP kommer att anv�ndas. Om Bild-Typen inte st�ds av PHP, kommer denna funktion inte att anv�ndas.',
	'Image_min_thumb_filesize' => 'Minimal Miniatyrbilds Filstorlek',
	'Image_min_thumb_filesize_explain' => 'Om en bild �r mindre �n denna definierade Filstorlek kommer ingen Miniatyrbild att skapas, eftersom den �r tillr�ckligt liten.',
	'Image_imagick_path' => 'Imagick Program (Fullst�ndig s�kv�g)',
	'Image_imagick_path_explain' => 'Skriv in s�kv�gen till konverterings programmet imagick, normalt /usr/bin/convert (i Windows: C: / imagemagick / Convert.exe).',
	'Image_search_imagick' => 'S�k Imagick',

	'Use_gd2' => 'Utnyttja GD2 Extension',
	'Use_gd2_explain' => 'PHP kan sammanst�llas med GD1 eller GD2 Till�gg f�r bild otillb�rlig. F�r att korrekt skapa Miniatyrbild utan imagemagick bilagehanteraren Mod anv�nds tv� olika metoder, baserat p� ditt val h�r. Om din miniatyrbild �r i d�lig kvalitet eller skruvas upp, f�rs�k att �ndra denna inst�llning.',
	'Attachment_version' => 'Bilage Mod Version %s', // %s is the version number

// Extensions -> Forbidden Extensions
	'Manage_forbidden_extensions' => 'Hantera F�rbjudna Extensions',
	'Manage_forbidden_extensions_explain' => 'L�gg till eller ta bort det f�rbjudna till�gget. Till�ggs php, php3 och php4 �r f�rbjudna som standard av s�kerhetssk�l, och du kan inte ta bort dem.',
	'Forbidden_extension_exist' => 'Det F�rbjudna Till�gget %s finns redan', // replace %s with the extension
	'Extension_exist_forbidden' => 'Till�gget %s �r definierade i din till�tna Extensions, v�nligen radera den d�r innan du l�gger till den h�r.', // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
	'Group_permissions_title' => 'Till�ggs Gruppens R�ttigheter -> \'%s\'', // Replace %s with the Groups Name
	'Group_permissions_explain' => 'begr�nsa den valda Extension Gruppen till Forum valfritt (definierade i Allowed Forum Box). Standard �r att till�ta Till�ggs Grupper till alla Forum som anv�ndaren har m�jlighet att bifoga filer i (normalt s�tt bilagehanteraren Mod gjorde det sedan b�rjan). Bara l�gg till de Forum som du vill att Till�ggs Grupp (Till�ggen inom denna Grupp) som till�ts d�r, standardnamnet Alla Forum kommer att f�rsvinna n�r du l�gger Forum till listan. Du har m�jlighet att p� nytt l�gga tillbaka alla forum under en viss tidpunkt. Om du l�gger till ett Forum till ditt Forum och R�ttigheterna �r satta till ALLA FORUM kommer inget att �ndras. Men om du har �ndrat och begr�nsat tilltr�de till vissa Forum, m�ste du g� tillbaka hit f�r att l�gga till ditt nyskapade Forum. Det �r enkelt att g�ra detta automatiskt, men detta kommer att tvinga dig att redigera en massa Filer, d�rf�r har jag valt den v�gen som det �r nu. T�nk p� att alla dina Forum kommer att listas h�r.',
	'Note_admin_empty_group_permissions' => 'NOTERA:<br />Inom nedanst�ende listade Forum har anv�ndarna normalt till�telse att bifoga filer, men eftersom ingen Extension Grupp till�ts bifogas d�r, kan dina anv�ndare inte bifoga n�got. Om de f�rs�ker, kommer de att f� Error Meddelanden. Kanske du vill st�lla in R�ttigheter \ Post Filer \ f�r ADMIN p� detta forum.<br /><br />',
	'Add_forums' => 'L�gg till Forum',
	'Add_selected' => 'L�gg till Valda',
	'Perm_all_forums' => 'ALLA FORUM',

// Attachments -> Quota Limits
	'Manage_quotas' => 'Hantera Bilagors Kvot Begr�nsning',
	'Manage_quotas_explain' => 'L�gg till / ta bort / �ndra Kvot Begr�nsningen. Du kan tilldela dessa Kvot Begr�nsningar till Anv�ndare och Grupper senare. F�r att tilldela en Kvot Begr�nsningen till en anv�ndare m�ste du g� till Anv�ndare-> Management, v�lja anv�ndaren och du kommer att se Val i botten. F�r att tilldela en Kvot Begr�nsning till en Grupp, g� till Grupp->Management, v�lj Gruppen f�r att redigera den och du kommer se Konfigurationsinst�llningar. Om du vill se vilka Anv�ndare och Grupper som har tilldelats en s�rskild Kvot Begr�nsning, klicka p� \'Visa\' till v�nster om Kvot Beskrivningen.',
	'Assigned_users' => 'Tilldelade Anv�ndare',
	'Assigned_groups' => 'Tilldelade Grupper',
	'Quota_limit_exist' => 'Kvot begr�nsningen %s finns redan.', // Replace %s with the Quota Description

// Attachments -> Control Panel
	'Control_panel_title' => 'Fil Bilagors Kontroll Panel',
	'Control_panel_explain' => 'Se och hantera alla bilagor baserat p� anv�ndare, Bilagor, Vyer etc...',
	'File_comment_cp' => 'Fil Kommentar',

// Control Panel -> Search
	'Search_wildcard_explain' => 'Anv�nd * som ett jokertecken f�r partiella matchningar',
	'Size_smaller_than' => 'Bilagors storlek mindre �n (bytes)',
	'Size_greater_than' => 'Bilagors storlek st�rre �n (bytes)',
	'Count_smaller_than' => 'Nerladdnings r�kning �r mindre �n',
	'Count_greater_than' => 'Nerladdnings r�kning �r st�rre �n',
	'More_days_old' => 'Mer �n s� h�r m�nga dagar gammalt',
	'No_attach_search_match' => 'Inga Bilagor uppfyllde dina s�kkriterier',

// Control Panel -> Statistics
	'Number_of_attachments' => 'Antal Bilagor',
	'Total_filesize' => 'Total Filstorlek',
	'Number_posts_attach' => 'Antal inl�gg med bifogade filer',
	'Number_topics_attach' => 'Antal �mnen med bilagor',
	'Number_users_attach' => 'Oberoende Anv�ndares Postade Bilagor',
	'Number_pms_attach' => 'Totalt Antal Bilagor i Privata Meddelanden',

// Control Panel -> Attachments
	'Statistics_for_user' => 'Bilagor Statistik f�r %s', // replace %s with username
	'Size_in_kb' => 'Storlek (KB)',
	'Downloads' => 'Nerladdningar',
	'Post_time' => 'Inl�ggs Tid',
	'Posted_in_topic' => 'Inlagd i �mne',
	'Submit_changes' => 'Skicka �ndringar',

// Sort Types
	'Sort_Attachments' => 'Bilagor',
	'Sort_Size' => 'Storlek',
	'Sort_Filename' => 'Filnamn',
	'Sort_Comment' => 'Kommentar',
	'Sort_Extension' => 'Till�gg',
	'Sort_Downloads' => 'Nerladdningar',
	'Sort_Posttime' => 'Inl�ggs Tid',
	'Sort_Posts' => 'Inl�gg',

// View Types
	'View_Statistic' => 'Statistik',
	'View_Search' => 'S�k',
	'View_Username' => 'Anv�ndarnamn',
	'View_Attachments' => 'Bilagor',

// Successfully updated
	'Attach_config_updated' => 'Bilags Konfigurationen uppdaterad successfullt',
	'Click_return_attach_config' => 'Klicka %sH�r%s f�r att �terv�nda till Bilags Konfigurationen',
	'Test_settings_successful' => 'Inst�llnings Test f�rdig, konfigurationen verkar vara bra.',

// Some basic definitions
	'Attachments' => 'Bilagor',
	'Attachment' => 'Bilaga',
	'Extensions' => 'Till�gg',
	'Extension' => 'Till�gg',

// Auth pages
	'Auth_attach' => 'Post Filer',
	'Auth_download' => 'Ladda Ner Filer',
	)
);

?>