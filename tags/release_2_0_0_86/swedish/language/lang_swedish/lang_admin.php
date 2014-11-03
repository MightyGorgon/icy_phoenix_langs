<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin.php 55 2009-08-07 09:20:40Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
*
*/

/**
*
* @Extra credits for this file
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
	'General' => 'Allänt Admin',
	'Users' => 'Användare Admin',
	'Groups' => 'Grupp Admin',
	'Forums' => 'Forum Admin',
	'Styles' => 'Stilar Admin',

	'Configuration' => 'Inställningar',
	'Various_Configuration' => 'Olika inställningar',
	'Permissions' => 'Behörigheter',
	'Manage' => 'Administration',
	'manage' => 'Administration',
	'Disallow' => 'Hindra namn',
	'Prune' => 'Beskärning',
	'Mass_Email' => 'Mass E-epost',
	'Ranks' => 'Rang',
	'Smilies' => 'Smileys',
	'Ban_Management' => 'Bannlysnings kontroll',
	'Word_Censor' => 'Ord censurerare',
	'Export' => 'Exportera',
	'Create_new' => 'Skapa',
	'Add_new' => 'Lägg till',
	'Backup_DB' => 'Backup databas',
	'Restore_DB' => 'Återställ databas',
	'DB_Maintenance' => 'Databas verktyg',
	'News_Admin' => 'Nyheter',
	'News_Cats' => 'Nyhets kategorier',
	'News_Config' => 'Nyhets konfiguration',
	'Security' => 'SÃ¤kerhet',
	'Member_Tries' => 'Medlem försöker',
	'Quick_Search' => 'Snabb sökning',
	'Special' => 'Special',
	'Styles_Management' => 'Stil administration',
	'Manage_Bots' => 'Bots administration',
	'Admin_Notepad' => 'Anteckningar',

// Index
	'Admin' => 'Administration',
	'Not_admin' => 'Du har inte behörighet att administrera detta forum',
	'Welcome_phpBB' => 'Väkommen till Icy Phoenix',
	'Admin_intro' => 'Tack för att du väljer Icy Phoenix som din forum lösning. Den här skärmen ger dig en snabb överblick av alla olika statistik för dit forum. Du kan komma tillbaka till denna sida genom att klicka på <u>Admin Index</u>  länken i den vänstra rutan. För att återgå till Index i ditt forum, klicka på Forum också i den vänstra rutan . Genom de övriga länkarna på vänster sida av den här skärmen kan du kontrollera alla aspekter av ditt forums erfarenhet. Varje skärm kommer att ha anvisningar om hur du använder de verktygen.',
	'PayPalInfo' => 'Icy Phoenix är en öppen källa projekt, om ni är intresserade av att bidra till dess utveckling kan du använda länken nedan.',
	'Forum_stats' => 'Sido statistik',
	'Admin_Index' => 'Admin index',
	'Preview_forum' => 'Förhandsgranska forum',
	'Click_return_admin_index' => 'Klicka %shär%s för att återgå till Admin Index',
	'Portal' => 'Hemsida',
	'Preview_Portal' => 'Förhandsgranska hemsida',
	'Main_index' => 'Forum',

	'Statistic' => 'Statistik',
	'Value' => 'Värde',
	'Number_posts' => 'Antal inlägg',
	'Posts_per_day' => 'Inlägg per dag',
	'Number_topics' => 'Antal ämnen',
	'Topics_per_day' => 'Ämnen per dag',
	'Number_users' => 'Antal användare',
	'Users_per_day' => 'Användare per dag',
	'Board_started' => 'Forum startade',
	'Avatar_dir_size' => 'Avatar katalogens storlek',
	'Database_size' => 'Databas storlek',
	'Gzip_compression' => 'Gzip komprimering',
	'Not_available' => 'Ej tillgänglig',

	'ON' => 'PÅ', // This is for GZip compression
	'OFF' => 'AV',

// DB Utils
	'Database_Utilities' => 'Databas användbarhet',

	'Restore' => 'Återställ',
	'Backup' => 'Backup',
	'Restore_explain' => 'Detta kommer att göra en fullständig återställning av alla Icy Phoenix tabeller från en sparad fil. Om din server stöder det, kan du ladda upp en GZip-komprimerad text fil och den kommer automatiskt att expanderas. <b>VARNING</b>: Detta kommer att skriva över någon befintlig data. Återställningen kan ta lång tid att bearbeta, så du får inte gå ifrån denna sida tills den är klar.',
	'Backup_explain' => 'Här kan du säkerhetskopiera alla dina webbplatsinriktade uppgifter. Om du har några ytterligare anpassade tabeller i samma databas med Icy Phoenix som du vill säkerhetskopiera samt anger deras namn, åtskilda med kommatecken, i Ytterligare tabellers textruta nedan. Om din server stöder det kan du även gzip-komprimera filen för att minska dess storlek innan nedladdning.',

	'Backup_options' => 'Backup alternativ',
	'Start_backup' => 'Starta backup',
	'Full_backup' => 'Full backup',
	'Structure_backup' => 'Enbart-struktur backup',
	'Data_backup' => 'Enbart data backup',
	'Additional_tables' => 'Ytterligare tabeller',
	'phpBB_only' => 'Enbart Icy Phoenix relaterade tabeller',
	'Gzip_compress' => 'Gzip komprimerings fil',
	'Select_file' => 'Välj en fil',
	'Start_Restore' => 'Starta återställning',

	'Restore_success' => 'Databasen har återställts successfullt.<br /><br />Ditt forum ska tillbaka till samma tillstånd som den var när säkerhetskopian gjordes.',
	'Backup_download' => 'Din nedladdningen börjar inom kort; vänligen Vänta tills den börjar.',
	'Backups_not_supported' => 'Tyvärr, men databas backupen stöds inte för närvarande av ditt databassystemet.',

	'Restore_Error_uploading' => 'Error vid uppladdning av backup filen',
	'Restore_Error_filename' => 'Filnamn problem; vänligen prova en alternativ fil',
	'Restore_Error_decompress' => 'Det går inte att dekomprimera en gzip fil, vänligen ladda upp en vanlig text version',
	'Restore_Error_no_file' => 'Ingen fil har lagts upp',

// Auth pages
	'Select_a_User' => 'Välj en Användare',
	'Select_a_Group' => 'Välj en Grupp',
	'Select_a_Forum' => 'Välj ett Forum',
	'Auth_Control_User' => 'Användares behörighets kontroll',
	'Auth_Control_Group' => 'Grupp behörighets kontroll',
	'Auth_Control_Forum' => 'Forum behörighets kontroll',
// Start add Permission List
	'Auth_list_Control_Forum' => 'Alla forums behörighets kontroll',
// End add Permission List
	'Look_up_User' => 'Lås upp användare',
	'Look_up_Group' => 'Lås upp grupp',
	'Look_up_Forum' => 'Lås upp forum',

	'Group_auth_explain' => 'Här kan du ändra behörigheter och moderator status tilldelade till varje användargrupp. Glöm inte att vid byte av grupp behörigheter att enskilda användares behörigheter kan fortfarande tillåta användaren inträde till forum, etc. Du kommer att varnas om detta är fallet.',
	'User_auth_explain' => 'Här kan du ändra behörigheter och moderator status som tilldelats varje enskild användare. Glöm inte vid byte av användare behörigheter att grupp behörigheter fortfarande kan tillåta användaren inträde till forum, etc. Du kommer att varnas om detta är fallet.',
	'Forum_auth_explain' => 'Här kan du ändra tillstånds nivåer på varje forum. Du kommer att ha både en enkel och avancerad metod för att göra detta, där avancerad ger större kontroll över varje forum drift. Kom ihåg att ändring av behörighetsnivå i forum kommer att påverka vilka användare som kan utföra de olika arbetsuppgifterna inom dem.',
// Start add Permission List
	'Forum_auth_list_explain' => 'Här kan du ändra tillstånds nivåer i varje forum. Kom ihåg att ändring av behörighetsnivå i forum kommer att påverka vilka användare som kan utföra de olika arbetsuppgifterna inom dem.',
// End add Permission List

	'Simple_mode' => 'Enkelt mode',
	'Advanced_mode' => 'Avancerad mode',
	'Moderator_status' => 'Moderator status',

	'Allowed_Access' => 'Tillåten åtkomst',
	'Disallowed_Access' => 'Åtkomst nekad',
	'Is_Moderator' => 'Är moderator',
	'Not_Moderator' => 'Ej moderator',

	'Conflict_warning' => 'Tillstånd konflikt varning',
	'Conflict_access_userauth' => 'Denna användare har fortfarande tillgångs rättigheter till detta forum via gruppmedlemskap. Du kanske vill ändra gruppens behörigheter eller ta bort användaren från gruppen för att helt undvika dem att ha tillträdes rätt. Grupperna ger rättigheter (och forum inblandade) är noterat nedan.',
	'Conflict_mod_userauth' => 'Denna användare har fortfarande moderator rättigheter till detta forum via gruppmedlemskap. Du kanske vill ändra gruppens behörigheter eller ta bort användaren från gruppen för att helt undvika dem att ha moderator rättigheter. Grupperna ger rättigheter (och forum inblandade) är noterat nedan.',

	'Conflict_access_groupauth' => 'Följande användare (eller användare) har fortfarande nyttjanderätt till detta forum via sina användare behörigheters inställningar. Du kanske vill ändra deras användare behörigheter att helt undvika dem nyttjanderätt. Användarna ger rättigheter (och forum inblandade) är noterat nedan.',
	'Conflict_mod_groupauth' => 'Följande användare (eller användare) har fortfarande moderator rättigheter till detta forum via sina användare behörigheters inställningar. Du kanske vill ändra deras användare behörigheter att helt undvika dem att ha moderator rättigheter. Användarna ger rättigheter (och forum inblandade) är noterat nedan.',

	'Public' => 'Offentlig',
	'Private' => 'Privat',
	'Registered' => 'Registrerad',
	'Self' => 'Själv',
	'Administrators' => 'Administratörer',
	'Hidden' => 'Dold',

// These are displayed in the drop down boxes for advanced mode forum auth, try and keep them short!
	'Forum_NONE' => 'INGEN',
	'Forum_ALL' => 'ALLA',
	'Forum_REG' => 'REG',
	'Forum_SELF' => 'SJÄLV',
	'Forum_PRIVATE' => 'PRIVAT',
	'Forum_MOD' => 'MOD',
	'Forum_JADMIN' => 'J ADMIN',
	'Forum_ADMIN' => 'ADMIN',

	'View' => 'Granska',
	'Read' => 'Läs',
	'Post' => 'Post',
	'Reply' => 'Svar',
	'Edit' => 'Redigera',
	'Delete' => 'Radera',
	'Sticky' => 'Sticky',
	'Announce' => 'Kungöra',
	'Vote' => 'Rösta',
	'Pollcreate' => 'Skapa enkät',

	'Simple_Permission' => 'Enkla behörigheter',

	'User_Level' => 'Användar nivå',
	'Auth_User' => 'Användare',
	'Auth_Junior_Admin' => 'Junior administratör',
	'Auth_Admin' => 'Administratör',
	'Group_memberships' => 'Användargrupp medlemskap (totalt: %d)',
	'Usergroup_members' => 'Denna grupp har följande medlemmar (totalt: %d)',

	'Forum_auth_updated' => 'Forums behörigheter uppdaterade',
	'User_auth_updated' => 'Användares behörigheter uppdaterade',
	'Group_auth_updated' => 'Grupp behörigheter uppdaterade',

	'Auth_updated' => 'Behörigheter har blivit uppdaterade',
	'Click_return_userauth' => 'Klicka %sHär%s för att återgå till användare behörigheter',
	'Click_return_groupauth' => 'Klicka %sHär%s för att återgå till grupp behörigheter',
	'Click_return_forumauth' => 'Klicka %sHär%s för att återgå till forum behörigheter',

// Banning
	'Ban_control' => 'Bannlysnings Kontroll',
	'Ban_explain' => 'Här kan du kontrollera bannlysning mot användaren. Du kan uppnå detta genom att bannlysa den ena eller båda av en viss användare eller en enskild person eller ett intervall av IP-adresser eller värdnamn. Dessa metoder förhindrar en användare från att nå index sidan på dit forum. För att förhindra en användare från att registrera sig under ett annat Användarnamn kan du även ange en förbjuden e-postadress. Observera att förbjuda en e-postadress inte kommer att hindra användare från att kunna logga in eller skicka till dit forum. Du ska använda en av de första två metoder för att uppnå detta.',
	'Ban_explain_warn' => 'Tänk på att ange ett intervall av IP-adresser resultat i alla adresser mellan början och slut när de läggs till i bannlysningslistan. Försök kommer att göras för att minimera antalet adresser som läggs in i databasen genom att införa jokertecken automatiskt vid behov. Om du verkligen måste skriva en rad, försök att hålla det litet eller ännu bättre bestämmda specifika adresser.',

	'Select_username' => 'Välj ett användarnamn',
	'Select_ip' => 'Välj en IP adress',
	'Select_email' => 'Välj en E-post adress',

	'Ban_username' => 'Bannlys en eller flera särskilda användare',
	'Ban_username_explain' => 'Du kan bannlysa flera användare på en gång med hjälp av lämplig kombination av mus och tangentbord för din dator och webbläsare',

	'Ban_IP' => 'Bannlys en eller flera IP-adresser eller värdnamn',
	'IP_hostname' => 'IP adresser eller värdnamn',
	'Ban_IP_explain' => 'För att ange flera olika IP-adresser eller värdnamn separera dem med kommatecken. För att ange ett intervall av IP-adresser, separera börjar och slutet med ett bindestreck (-); för att ange ett wildcard, använd en asterisk (*).',

	'Ban_email' => 'Bannlys en eller flera e-postadresser',
	'Ban_email_explain' => 'För att ange mer än en e-postadress, separera dem med kommatecken. För att ange ett wildcard användarnamn använd * som t.ex. *@hotmail.com',

	'Unban_username' => 'Bannlys Ej en eller flera särskilda användare',
	'Unban_username_explain' => 'Du kan Bannlys Ej flera användare på en gång med hjälp av lämplig kombination av mus och tangentbord för din dator och webbläsare',

	'Unban_IP' => 'Bannlys Ej en eller flera IP-adresser',
	'Unban_IP_explain' => 'Du kan Bannlys Ej flera olika IP-adresser på en gång med hjälp av lämplig kombination av mus och tangentbord för din dator och webbläsare',

	'Unban_email' => 'Bannlys Ej en eller flera e-postadresser',
	'Unban_email_explain' => 'Du kan Bannlys Ej mer än en e-postadress på en gång med hjälp av lämplig kombination av mus och tangentbord för din dator och webbläsare',

	'No_banned_users' => 'Inga bannlysta användarnamn',
	'No_banned_ip' => 'Inga bannlysta IP adresser',
	'No_banned_email' => 'Inga bannlysta e-post adresser',

	'Ban_update_sucessful' => 'Denna bannlysningslista har blivit uppdaterad successfullt',
	'Click_return_banadmin' => 'Klicka %sHär%s för att återgå till bannlysnings kontrollen',

// Configuration
	'General_Config' => 'Allmänn Konfiguration',
	'Config_explain' => '<b>Formuläret nedan tillåter dig att anpassa alla allmänna forums alternativ. För användare och forum konfiguration, använd de relaterade länkarna på vänster sida.</b>',

	'Click_return_config' => 'Klicka %sHär%s för att återgå till allmänn konfiguration',

	'General_settings' => 'Allmänn forum inställningar',
	'Server_name' => 'Domän Namn',
	'Server_name_explain' => 'Domännamnet ifrån vilken detta forumet körs',
	'Script_path' => 'Script sökväg',
	'Script_path_explain' => 'Sökvägen där Icy Phoenix ligger i förhållande till domännamnet',
	'Server_port' => 'Server Port',
	'Server_port_explain' => 'Porten din server körs på, vanligtvis 80. Ändras endast om den är olika',
	'Site_name' => 'Webbplats namn',
	'Site_desc' => 'Webbplats beskrivning',
	'Board_disable' => 'Avaktivera webbplats',
	'Board_disable_explain' => 'Detta kommer att göra webbplatsen otillgängligt för användare. Administratörer har tillgång till administrations panelen medan webbplatsen är otillgänglig.',
	'Acct_activation' => 'Aktivera kontoaktivering',
	'Acc_None' => 'Ingen', // These three entries are the type of activation
	'Acc_User' => 'Användare',
	'Acc_Admin' => 'Admin',

	'Abilities_settings' => 'Användare och forum grundläggande inställningar',
	'Max_poll_options' => 'Max antal undersöknings alternativ',
	'Flood_Interval' => 'Flood Interval',
	'Flood_Interval_explain' => 'Antalet sekunder en användare måste vänta mellan sina inlägg',
	'Board_email_form' => 'Användar e-post via forum',
	'Board_email_form_explain' => 'Användare skickar e-post till varandra via detta forum',
	'Topics_per_page' => 'Ämnen per sida',
	'Posts_per_page' => 'Inlägg per sida',
	'Hot_threshold' => 'Inlägg för populära trösklar',
	'Default_style' => 'Standard Stil',
	'Override_style' => 'Skriv över användare stil',
	'Override_style_explain' => 'Ersätt användarens stil med standard',
	'Default_language' => 'Standard språk',
	'Date_format' => 'Datum format',
	'System_timezone' => 'System tidszon',
	'Enable_gzip' => 'Aktivera GZip komprimering',
// Start Gzip Compression Level MOD
	'Gzip_level' => 'Gzip komprimerings nivå',
	'Gzip_level_explain' => 'Här kan du ändra komprimerings nivån (ett tal mellan 0-9). 0 motsvarar av, 1 är mycket lågt, och 9 är maximum. 9 är rekommenderat.',
// End Gzip Compression Level MOD
	'Enable_prune' => 'Aktivera forum beskärning',
	'Allow_HTML' => 'Tillåt HTML',
	'Allow_BBCode' => 'Tillåt BBKoder',
	'Allowed_tags' => 'Tillåtna HTML taggar',
	'Allowed_tags_explain' => 'Separera taggar med komma',
	'Allow_smilies' => 'Tillåt smileys',
	'Smilies_path' => 'Smileys lagrings sökväg',
	'Smilies_path_explain' => 'Sökväg under din Icy Phoenix root dir, t.ex. images/smiles',
	'Allow_sig' => 'Tillåt signaturer',
	'Max_sig_length' => 'Maximal signatur längd',
	'Max_sig_length_explain' => 'Maximalt antal tecken i användarens signatur',
	'Allow_name_change' => 'Tillåt användarnamns ändring',

	'Avatar_settings' => 'Avatar inställningar',
	'Allow_local' => 'Aktivera galleri avatars',
	'Allow_remote' => 'Aktivera fjärr avatars',
	'Allow_remote_explain' => 'Avatars länkas från en annan webbplats',
	'Allow_upload' => 'Aktivera avatar uppladdning',
	'Max_filesize' => 'Maximal avatar fil storlek',
	'Max_filesize_explain' => 'För uppladdade avatar filer',
	'Max_avatar_size' => 'Maximal avatar dimensioner',
	'Max_avatar_size_width' => 'Maximal avatar bredd',
	'Max_avatar_size_height' => 'Maximal avatar höjd',
	'Max_avatar_size_explain' => '(Höjd x Bredd i pixlar)',
	'Avatar_storage_path' => 'Avatar lagrings sökväg',
	'Avatar_storage_path_explain' => 'Sökväg under din Icy Phoenix root dir, t.ex. images/avatars',
	'Avatar_gallery_path' => 'Avatar galleri sökväg',
	'Avatar_gallery_path_explain' => 'Sökväg under din Icy Phoenix root dir för förinstallerade bilder, t.ex. images/avatars/gallery',

	'COPPA_settings' => 'COPPA Inställningar',
	'COPPA_fax' => 'COPPA fax nummer',
	'COPPA_mail' => 'COPPA E-postadress',
	'COPPA_mail_explain' => 'Detta är den adress som föräldrarna skickar COPPA registreringsformulär till',

	'Email_settings' => 'E-post inställningar',
	'Admin_email' => 'Admins e-postadress',
	'Email_sig' => 'E-post signatur',
	'Email_sig_explain' => 'Denna text kommer att vara bifogad till alla e-postmeddelanden som skickas från forumet',
	'Use_SMTP' => 'Använd SMTP Server för e-post',
	'Use_SMTP_explain' => 'Säg ja om du vill eller måste skicka e-post via en namngiven server istället för den lokala post funktionen',
	'SMTP_server' => 'SMTP server adress',
	'SMTP_port' => 'SMTP Port',
	'SMTP_username' => 'SMTP Användarnamn',
	'SMTP_username_explain' => 'Ange endast ett användarnamn om din SMTP server kräver det',
	'SMTP_password' => 'SMTP Lösenord',
	'SMTP_password_explain' => 'Ange endast ett lösenord om din SMTP server kräver det',

	'Disable_privmsg' => 'Privata Meddelanden',
	'Inbox_limits' => 'Max inlägg i inkorg',
	'Sentbox_limits' => 'Max inlägg i skicka korgen',
	'Savebox_limits' => 'Max inlägg i spara korgen',

	'Cookie_settings' => 'Cookie inställningar',
	'Cookie_settings_explain' => 'Dessa uppgifter anger hur cookies skickas till din användares webbläsare. I de flesta fall bör standardvärdena för cookie inställningar räcka, men om du behöver ändra dem göra det med omsorg - felaktiga inställningar kan hindra användare från att logga in',
	'Cookie_domain' => 'Cookie domänn',
	'Cookie_name' => 'Cookie namn',
	'Cookie_path' => 'Cookie sökväg',
	'Cookie_secure' => 'Cookie säkerhet',
	'Cookie_secure_explain' => 'Om din server körs via SSL, sätt detta till aktiverad, annars till avaktiverad',
	'Session_length' => 'Session längd [ sekunder ]',
	'SESSION_LAST_VISIT_RESET' => 'Uppdatera senaste besök om session passerat',
	'SESSION_LAST_VISIT_RESET_EXPLAIN' => 'Om du aktiverar det här alternativet, kommer LastVisit tiden för användning att uppdateras även om session gått ut. Annars uppdateras LastVisit tiden  endast om automatisk inloggning är aktiverad och den maximala tidens inloggning har uppnåtts.',

// Visual Confirmation
	'Visual_confirm' => 'Aktivera visuell bekräftelse',
	'Visual_confirm_explain' => 'Kräver att användare skriver in en kod som definieras av en bild när du registrerar.',

// Autologin Keys - added 2.0.18
	'Allow_autologin' => 'Tillåt automatiska inloggningar',
	'Allow_autologin_explain' => 'Anger om användare har tillåtelse att välja att bli automatiskt inloggad när du besöker forumet',
	'Autologin_time' => 'Automatisk inloggnings nyckel löper ut',
	'Autologin_time_explain' => 'Hur länge en automatisk inloggnings nyckel är giltigt i dagar om användaren inte besöker forumet. Sätt till noll för att avaktivera utgången.',

// Forum Management
	'Forum_admin' => 'Forum Administration',
	'Forum_admin_explain' => 'Lägga till, radera, redigera, åter-order och åter synkronisera kategorier och forum',
	'Edit_forum' => 'Redigera forum',
	'Create_forum' => 'Skapa nytt forum',
	'Create_category' => 'Skapa ny kategori',
	'Remove' => 'Flytta',
	'Action' => 'Åtgärd',
	'Update_order' => 'Uppdatera order',
	'Config_updated' => 'Forum konfiguration uppdaterad successfullt',
	'Move_up' => 'Flytta upp',
	'Move_down' => 'Flytta ner',
	'Resync' => 'Resync',
	'No_mode' => 'Inget mode sattes',
	'Forum_edit_delete_explain' => 'Anpassa alla allmänna forum alternativ. För Användare och Forum konfigurationer använd relaterade länkar till vänster',
    'Forum_Expand' => 'Expandera',
	'Forum_Collapse' => 'Minimera',
	'Forum_Expand_all' => 'Expandera allt',
	'Forum_Collapse_all' => 'Minimera allt',
	
	'Move_contents' => 'Flytta allt innehåll',
	'Forum_delete' => 'Radera forum',
	'Forum_delete_explain' => 'Radera ett forum (eller kategori) och bestämma vart du vill lägga alla ämnen (eller forum) de innehöll.',

	'Status_locked' => 'Låst',
	'Status_unlocked' => 'Olåst',
	'Forum_settings' => 'Allmänna forum inställningar',
	'Forum_name' => 'Forum namn',
	'Forum_desc' => 'Beskrivning',
	'Forum_status' => 'Forum status',
	'Forum_pruning' => 'Auto-beskärning',

	'prune_freq' => 'Kontrollera ämnes ålder varje',
	'prune_days' => 'Ta bort inlägg som det inte har postats i',
	'Set_prune_data' => 'Du har aktiverat automatisk prune för detta forum men inte ställt in en frekvens eller antal dagar för att rensa bort. Gå tillbaka och göra det.',

	'FORUM_SIMILAR_TOPICS' => 'Liknande ämnen',
	'FORUM_SIMILAR_TOPICS_EXPLAIN' => 'Om du aktiverar det här alternativet ser du en ruta med liknande frågor i botten av varje ämne i detta forum (observera att du måste även göra det möjligt för den globala switch för den här funktionen i Icy Phoenix Inställningar => SEO TAB)',
	'FORUM_TOPIC_VIEWS' => 'Ämnes Betraktare',
	'FORUM_TOPIC_VIEWS_EXPLAIN' => 'Om du aktiverar det här alternativet kommer alla användare att betrakta inlägg i detta forum att lagras i DB (observera att du måste även göra det möjligt för den globala switch för den här funktionen i Icy Phoenix Inställningar => SQL TAB)',
	'FORUM_TAGS' => 'Forum Taggar',
	'FORUM_TAGS_EXPLAIN' => 'Om du aktiverar det här alternativet ser du en box med alla de mest använda orden i detta forum (observera att du måste även göra det möjligt för den globala switch för den här funktionen i Icy Phoenix Inställningar => SEO TAB)',
	'FORUM_SORT_BOX' => 'Ämnes Sorterings Box',
	'FORUM_SORT_BOX_EXPLAIN' => 'Om du aktiverar det här alternativet ser du en ruta där du kan alfabetiskt kan sortera ämnen i detta forum (observera att du måste även göra det möjligt för den globala switch för den här funktionen i Icy Phoenix Inställningar)',
	'FORUM_KB_MODE' => 'KB Mode',
	'FORUM_KB_MODE_EXPLAIN' => 'Om du aktiverar det här alternativet kommer detta forum att visas i KB Mode (ämnen som är listade likt Kunskaps Basen)',
	'FORUM_INDEX_ICONS' => 'Index Ikoner',
	'FORUM_INDEX_ICONS_EXPLAIN' => 'Om du aktiverar det här alternativet ser du ikoner för RSS och Nya Ämne i forum Index (observera att du måste även göra det möjligt för den globala switch för den här funktionen i Icy Phoenix Inställningar)',

	'Move_and_Delete' => 'Flytta och Radera',

	'Delete_all_posts' => 'Radera alla poster',
	'Nowhere_to_move' => 'Ingenstans att flytta till',

	'Edit_Category' => 'Redigera Kategori',
	'Edit_Category_explain' => 'Använd detta formulär för att ändra en kategoris namn.',

	'Forums_updated' => 'Forum och Kategori information uppdaterad successfullt',

	'Must_delete_forums' => 'Du behöver ta bort alla forum innan du kan ta bort denna kategori',

	'Click_return_forumadmin' => 'Klicka %sHär%s för att återgå till Forum Administration',

// Smiley Management
	'smiley_title' => 'Smiles Redigerings Användbarhet ',
	'smile_desc' => 'Lägg till, ta bort och redigera emotikoner eller smileys som dina användare kan använda i sina inlägg och privata meddelanden. Observera om din webbläsare har stöd för det, du kan också använda dra och släpp för en snabb överenskommelse.',

	'smiley_config' => 'Smiley konfiguration',
	'smiley_code' => 'Smiley kod',
	'smiley_url' => 'Smiley bild fil',
	'smiley_emot' => 'Smiley emotion',
	'smile_add' => 'Lägg till en ny smiley',
	'Smile' => 'Smile',
	'Emotion' => 'Emotion',

	'Select_pak' => 'Välj paket (.pak) Fil',
	'replace_existing' => 'Ersätt befintlig smiley',
	'keep_existing' => 'Behåll befintlig smiley',
	'smiley_import_inst' => 'Du ska packa upp smiley paket och lägga upp alla filer till lämplig Smiley katalog för installationen. Välj sedan rätt information i detta formulär för att importera smiley paket.',
	'smiley_import' => 'Smiley paket import',
	'choose_smile_pak' => 'Välj ett smile paket .pak fil',
	'import' => 'Importera smileys',
	'smile_conflicts' => 'Vad bör göras i händelse av konflikter',
	'del_existing_smileys' => 'Ta bort befintliga smileys före import',
	'import_smile_pack' => 'Importera smiley paket',
	'export_smile_pack' => 'Skapa smiley paket',
	'export_smiles' => 'För att skapa ett smiley paket från dina nuvarande installerade smileys, klicka %sHär%s för att ladda ner smiles.pak filen. Namnde den här filen med något lämpligt namn och se till att behålla .pak fil tillägget. Skapa sedan en zip-fil som innehåller alla dina smiley bilder plus denna .pak konfigurations fil.',

	'smiley_add_success' => 'Smiley var successfullt tillagd',
	'smiley_edit_success' => 'Smiley var successfullt uppdaterad',
	'smiley_import_success' => 'Smiley Paket var importerat successfullt!',
	'smiley_del_success' => 'Smiley var successfullt förflyttad',
	'Click_return_smileadmin' => 'Klicka %sHär%s för att återgå till Smiley Administration',

// User Management
	'User_admin' => 'Användar Administration',
	'User_admin_explain' => 'Ändra dina användares information och vissa alternativ. För att ändra användarens behörigheter, vänligen använd användarens och grupp behörighets systemet.',

	'Look_up_user' => 'Lås upp användare',

	'Admin_user_fail' => 'Kunde inte uppdatera användarens profil.',
	'Admin_user_updated' => 'Användarens profil var successfullt uppdaterad.',
	'Click_return_useradmin' => 'Klicka %sHär%s för att återgå till användar administration',
//Start Quick Administrator User Options and Information MOD
	'Click_return_userprofile' => 'Klicka %sHär%s för att återgå till användarens profil',
//End Quick Administrator User Options and Information MOD
	'User_delete' => 'Radera denna användare',
	'User_delete_explain' => 'Klicka här för att radera denna användare; <u><em>går inte att ångra.</em></u>',
	'User_deleted' => 'Användare var successfullt raderad.',

	'User_status' => 'Användare är aktiv',
	'User_allowpm' => 'Kan skicka Privata Meddelanden',
	'User_allowavatar' => 'Kan visa avatar',

	'Admin_avatar_explain' => 'Se och ta bort användarens nuvarande avatar.',

	'User_special' => 'Särskilt endast-admin fält',
	'User_special_explain' => 'Dessa fält kan inte ändras av användare. Här kan du ställa in deras status och andra alternativ som inte ges till användare.',

// Group Management
	'Group_administration' => 'Grupp Administration',
	'Group_admin_explain' => 'Administrera alla dina användargrupper. Du kan ta bort, skapa och redigera befintliga grupper. Du kan välja moderatorer, växla öppen/sluten grupp och ange gruppens namn och beskrivning',
	'Error_updating_groups' => 'Det uppstod ett fel vid uppdatering av gruppen',
	'Updated_group' => 'Gruppen var successfullt uppdaterad',
	'Added_new_group' => 'Den nya gruppen var successfullt skapad',
	'Deleted_group' => 'Gruppen var successfullt raderad',
	'New_group' => 'Skapa ny grupp',
	'Edit_group' => 'Redigera grupp',
	'group_name' => 'Grupp namn',
	'group_description' => 'Grupp beskrivning',
	'group_moderator' => 'Grupp moderator',
	'group_status' => 'Grupp status',
	'group_open' => 'Öppen grupp',
	'group_closed' => 'Stängd grupp',
	'group_hidden' => 'Dold grupp',
	'group_delete' => 'Radera grupp',
	'group_delete_check' => 'Radera denna grupp',
	'submit_group_changes' => 'Skicka Ändringar',
	'reset_group_changes' => 'Återställ Ändringar',
	'No_group_name' => 'Du måste ange ett namn för denna grupp',
	'No_group_moderator' => 'Du måste ange en moderator för denna grupp',
	'No_group_mode' => 'Du måste ange en mode för denna grupp, öppen eller stängd',
	'No_group_action' => 'Ingen åtgärd angavs',
	'delete_group_moderator' => 'Radera den gamla grupp moderatororn?',
	'delete_moderator_explain' => 'Om du ändrar grupp moderator, markera den här rutan för att ta bort den gamla moderatorn från gruppen.  Annars, markera inte rutan, och användaren kommer att bli en vanlig medlem i gruppen.',
	'Click_return_groupsadmin' => 'Klicka %sHär%s för att återgå till Grupp Administration.',
	'Select_group' => 'Välj en grupp',
	'Look_up_group' => 'Lås upp grupp',

// Prune Administration
	'Forum_Prune' => 'Forum Beskärning',
	'Forum_Prune_explain' => 'Detta kommer att ta bort ett ämne som inte har lagts upp inom det antal dagar som du väljer. Om du inte anger ett antal kommer alla ämnen att tas bort. Det kommer inte att ta bort inlägg i undersökningar som fortfarande pågår eller kommer det att ta bort meddelanden. Du måste ta bort dessa inlägg manuellt.',
	'Do_Prune' => 'Gör beskärning',
	'All_Forums' => 'Alla forum',
	'Prune_topics_not_posted' => 'Beskär ämnen med inga svar på dessa många dagar',
	'Topics_pruned' => 'Ämnen beskurna',
	'Posts_pruned' => 'Post beskuren',
	'Prune_success' => 'Beskärning av forums var successfull',

// Word censor
	'Words_title' => 'Ord Censurering',
	'Words_explain' => 'Lägg till, redigera och förflytta ord som blir automatiskt censurerade på dina forum. Dessutom kommer människor inte vara tillåtna att registrera sig med användarnamn som innehåller dessa ord. Jokertecken (*) godtas i ord fält. Till exempel, *test* matchar avskyvärd, testa * skulle matcha tester * test skulle matcha avskyr.',
	'Word' => 'Ord',
	'Edit_word_censor' => 'Redigera ord censur',
	'Replacement' => 'Ersätter',
	'Add_new_word' => 'Lägg till nytt ord',
	'Update_word' => 'Uppdatera ord censur',

	'Must_enter_word' => 'Du måste skriva in ett ord och dess ersättare',
	'No_word_selected' => 'Inga ord har valts ut för redigering',

	'Word_updated' => 'Det valda ord censurt har successfullt uppdaterat',
	'Word_added' => 'Ord censuret har successfullt blivit tillagd',
	'Word_removed' => 'Det valda ord censuret har successfullt förflyttats',

	'Click_return_wordadmin' => 'Klicka %sHär%s för att återgå till Ord Censor Administration',

// Mass Email
	'Mass_email_explain' => 'Här kan du e-posta ett meddelande till antingen alla dina användare eller alla användare av en viss grupp.  För att göra detta, kommer en e-post att skickas ut till den administrativa e-post adress med en hemlig kopia som skickas till alla mottagare. Om du e-postar en stor grupp människor ha tålamod efter inlämningen och stoppa inte sidan halvvägs genom. Det är normalt för en mass e-post att det tar lång tid och du kommer att meddelas när skriptet har slutfört',
	'Compose' => 'Komponera',

	'Recipients' => 'Mottagare',
	'All_users' => 'Alla användare',

	'Email_successfull' => 'Ditt meddelande har skickats',
	'Click_return_massemail' => 'Klicka %sHär%s för att återgå till Mass E-post formuläret',

// Ranks admin
	'Ranks_title' => 'Rank administration',
	'Ranks_explain' => 'Lägg till, redigera, visa och ta bort rankningar. Du kan också skapa egna rankningar som kan tillämpas på en användare via användarens administration anläggning',

	'Add_new_rank' => 'Lägg till ny rank',

	'Rank_title' => 'Rank titel',
	'Rank_special' => 'Sätt som speciell rank',
	'Rank_minimum' => 'Minsta inlägg',
	'Rank_maximum' => 'Högsta inlägg',
	'Rank_image' => 'Rank bild (I förhållande till Icy Phoenix root sökväg)',
	'Rank_image_explain' => 'Använd detta för att definiera en liten bild med anknytning till rank',

	'Must_select_rank' => 'Du måste välja en rank',
	'No_assigned_rank' => 'Ingen särskilda rank tilldelad',

	'Rank_updated' => 'Ranken var successfullt uppdaterad',
	'Rank_added' => 'Ranken var successfullt tillagd',
	'Rank_removed' => 'Ranken var successfullt raderad',
	'No_update_ranks' => 'Ranken var successfullt raderad. Men, amvändar konton som använder denna rank var inte uppdaterade. Du behöver manuellt återställa ranken för dessa konton',

	'Click_return_rankadmin' => 'Klicka %sHär%s för att återgå till Rank Administration',

// Disallow Username Admin
	'Disallow_control' => 'Användarnamn otillåtet kontroll',
	'Disallow_explain' => 'Här kan du kontrollera användarnamn som inte får användas. Otillåtna användarnamn får innehålla ett jokertecken av *. Observera att du inte kommer att tillåtas att ange något användarnamn som redan har registrerats. Du måste först ta bort det namnet sedan underkänna det.',

	'Delete_disallow' => 'Radera',
	'Delete_disallow_title' => 'Ta bort ett otillåtet användarnamn',
	'Delete_disallow_explain' => 'Du kan ta bort ett otillåtet användarnamn genom att välja användarnamn i listan och klicka radera',

	'Add_disallow' => 'Lägg till',
	'Add_disallow_title' => 'Lägg till ett otillåtet användarnamn',
	'Add_disallow_explain' => 'Du kan underkänna ett användarnamn med hjälp av jokertecken * för att matcha vilket tecken som helst',

	'No_disallowed' => 'Inga nekade användarnamn',

	'Disallowed_deleted' => 'De otillåtna användarnamnen har blivit successfullt förflyttade',
	'Disallow_successful' => 'De otillåtna användarnamnen har blivit successfullt tillagda',
	'Disallowed_already' => 'Det namn du angav kunde inte tillåtas. Det kan redan finns i listan, finns i ord censur, eller en kombination av användarnamn är närvarande.',

	'Click_return_disallowadmin' => 'Klicka %sHär%s för att återgå till otillåtna användarnamn administration',

// Styles Admin
	'Styles_admin' => 'Stil administration',
	'Styles_explain' => 'Lägg till, ta bort och hantera stilar (mallar och teman) tillgänglig för dina användare',
	'Styles_addnew_explain' => 'Följande lista innehåller alla de teman som finns tillgängliga för mallar du för närvarande har. De ingredienser som finns på denna lista har ännu inte installeras i Icy Phoenix databas. För att installera ett tema, bara klicka på installations länken bredvid en post.',

	'Select_template' => 'Välj en mall',

	'Style' => 'Stil',
	'Template' => 'Mall',
	'Download' => 'Nerladdning',

	'Edit_theme' => 'Redigera tema',
	'Edit_theme_explain' => 'I formuläret nedan kan du ändra inställningarna för det valda temat',

	'Create_theme' => 'Skapa tema',
	'Create_theme_explain' => 'Skapa ett nytt tema för en viss mall. När du lägger in färger (bör du använda hexadecimal notation) ska du inte inkludera det ursprungliga #, i.e.. CCCCCC är giltigt, #CCCCCC är inte',

	'Export_themes' => 'Exportera teman',
	'Export_explain' => 'exportera tema data för en viss mall. Välj mall i listan nedan och skriptet skapar temats konfigurationsfil och försöker att spara den till den valda mall katalogen. Om man inte kan spara filen i sig kommer den att ge dig möjlighet att ladda ner den. För att skriptet ksa spara filen måste du ge skrivrättigheter till webbservern för den valda mall katalogen. För mer information om detta se Icy Phoenix användar handbok.',

	'Theme_installed' => 'Det valda temat har installerats successfullt',
	'Style_removed' => 'Den valda stilen har tagits bort från databasen. Att helt ta bort denna stil från datorn måste du ta bort lämplig stil från din mall katalog.',
	'Theme_info_saved' => 'Tema informationen för den valda mallen har sparats. Du bör nu återlämna behörigheterna på theme_info.cfg (och i tillämpliga fall den valda mall katalogen) till read-only',
	'Theme_updated' => 'Det valda temat har uppdaterats. Du bör nu exportera de nya tema inställningarna',
	'Theme_created' => 'Tema skapat. Du bör nu exportera tema till tema konfigureringsfilen för säker förvaring eller användning på annat håll',

	'Confirm_delete_style' => 'Vill du verkligen ta bort den här stilen?',

	'Download_theme_cfg' => 'Exportören kan inte skriva temats informationsfil. Klicka på knappen nedan för att ladda ner den här filen med din webbläsare. När du har laddat ner det kan du överföra den till den katalog som innehåller mallfiler. Du kan sedan paketera filen för distribution eller användning på annat håll om ni så önskar',
	'No_themes' => 'Den mall som du valt har inga teman knutna till sig. För att skapa ett nytt tema klicka på Skapa Nytt länken på vänster sidas panel',
	'No_template_dir' => 'Kunde inte öppna mall katalogen. Det kan vara oläslig för webbservern eller kanske inte finns',
	'Cannot_remove_style' => 'Du kan inte ta bort den valda stilen eftersom den för närvarande är forumets standard. Ändra standardformatmallen och försök igen.',
	'Style_exists' => 'Stil namnet du valt finns redan,gå tillbaka och välja ett annat namn.',

	'Click_return_styleadmin' => 'Klicka %sHär%s för att återgå till Stil Administration',

	'Theme_settings' => 'Tema inställningar',
	'Theme_element' => 'Tema element',
	'Simple_name' => 'Enkelt namn',
	'Save_Settings' => 'Spara inställningar',

	'Stylesheet' => 'CSS Stylesheet',
	'Stylesheet_explain' => 'Filnamn för CSS stylesheet för att använda till detta tema.',
	'Background_image' => 'Bakgrunds bild',
	'Background_color' => 'Bakgrunds färg',
	'Theme_name' => 'Tema namn',
	'Link_color' => 'Länk färg',
	'Text_color' => 'Text färg',
	'VLink_color' => 'Besökt länk färg',
	'ALink_color' => 'Aktiv länk färg',
	'HLink_color' => 'Hover länk färg',
	'Tr_color1' => 'Tabell rad färg 1',
	'Tr_color2' => 'Tabell rad färg 2',
	'Tr_color3' => 'Tabell rad färg 3',
	'Tr_class1' => 'Tabell rad Class 1',
	'Tr_class2' => 'Tabell rad Class 2',
	'Tr_class3' => 'Tabell rad Class 3',
	'Th_color1' => 'Tabell header färg 1',
	'Th_color2' => 'Tabell header färg 2',
	'Th_color3' => 'Tabell header färg 3',
	'Th_class1' => 'Tabell header class 1',
	'Th_class2' => 'Tabell header class 2',
	'Th_class3' => 'Tabell header class 3',
	'Td_color1' => 'Tabell cell färg 1',
	'Td_color2' => 'Tabell cell färg 2',
	'Td_color3' => 'Tabell cell färg 3',
	'Td_class1' => 'Tabell cell class 1',
	'Td_class2' => 'Tabell cell class 2',
	'Td_class3' => 'Tabell cell class 3',

// Admin Userlist Start
	'Userlist' => 'Användar lista',
	'Userlist_description' => 'Se en fullständig lista över dina användare och utför olika åtgärder på dem',

	'Add_group' => 'Lägg till i en grupp',
	'Add_group_explain' => 'Välj vilken grupp att lägga till de valda användarna i',

	'Open_close' => 'Öppen/Stängd',
	'Active' => 'Aktiv',
	'Group' => 'Grupp(er)',
	'Rank' => 'Rank',
	'Last_activity' => 'Senaste aktivitet',
	'Never' => 'Aldrig',
	'User_manage' => 'Hantera',
	'Find_all_posts' => 'Hitta alla inlägg',

	'Select_one' => 'Välj ett',
	'Ban' => 'Bannlys',
	'Activate_deactivate' => 'Aktivera/Av-aktivera',

	'User_id' => 'Användar id',
	'User_level' => 'Användar nivå',
	'Ascending' => 'Stigande',
	'Descending' => 'Fallande',
	'Show' => 'Visa',
	'All' => 'Alla',

	'Member' => 'Medlem',
	'Pending' => 'Avvaktande',

	'Confirm_user_ban' => 'Är du säker på att du vill bannlysa utvalda användare?',
	'Confirm_user_deleted' => 'Är du säker på att du vill radera utvalda användare?',

	'User_status_updated' => 'Användares status uppdaterad successfullt!',
	'User_banned_successfully' => 'Användare bannlyst successfullt!',
	'User_deleted_successfully' => 'Användare raderad successfullt!',
	'User_add_group_successfully' => 'Användare tillagd till grupp successfullt!',

	'Click_return_userlist' => 'Klicka %shär%s för att återgå till Användar Lista',
//
// Admin Userlist End

// Version Check
	'Version_up_to_date' => 'Din installation är aktuell, inga uppdateringar finns tillgängliga för din version av phpBB.',
	'Version_up_to_date_ip' => 'Inga uppdateringar är tillgängliga för din version av Icy Phoenix',
	'Version_not_up_to_date' => 'Din installation fungerar <b>inte</b> tycks vara aktuell. Uppdateringar finns tillgängliga för din version av phpBB, vänligen besök <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a> för att få den senaste versionen.',
	'Version_not_up_to_date_ip' => 'Uppdateringar finns tillgängliga för din version av Icy Phoenix, vänligen besök <a href="http://www.icyphoenix.com/" target="_new">Icy Phoenix</a> för att få den senaste versionen.',
	'Latest_version_info' => 'Den senaste tillgängliga versionen är <b>phpBB %s</b>.',
	'Current_version_info' => 'Du kör <b>phpBB %s</b>.',
	'Connect_socket_error' => 'Det går inte att öppna förbindelsen till phpBB Servern, rapporterat fel är:<br />%s',
	'Connect_socket_error_ip' => 'Det går inte att öppna förbindelsen till Icy Phoenix Servern',
	'Socket_functions_disabled' => 'Det går inte att använda socket funktioner.',
	'Mailing_list_subscribe_reminder' => 'För den senaste informationen om uppdateringar till phpBB, varför inte <a href="http://www.phpbb.com/support/" target="_new">prenumerera på vår e-postlista</a>.',
	'Version_information' => 'Version information',
	'Version_not_checked' => 'Versions kontrollen är för tillfälligt avstängd besök Icy Phoenix support forum för information om nya Icy Phoenix versioner.',

// Advanced Signature Divider Control
	'sig_title' => 'Avancerad signatur divider kontroll',
	'sig_divider' => 'Nuvarande signatur divider',
	'sig_explain' => 'Det är här du kan styra vad som skiljer användarens signatur från sin post',

// Start add - Birthday MOD
	'Birthday_required' => 'Tvinga användare att lämna in en födelsedag',
	'Enable_birthday_greeting' => 'Aktivera födelsedags hälsningar',
	'Birthday_greeting_expain' => 'Användare som har lämnat in ett födelse-datum kan ha en födelsedags hälsning via PM när de besöker forumet. För att aktivera/inaktivera Födelsedags e-post, måste du kontrollera <b>Cron</b> sektionen i <b>Main Settings</b>.',
	'Next_birthday_greeting' => 'Nästa födelsedag popup år',
	'Next_birthday_greeting_expain' => 'Detta fält håller reda på nästa år när användaren skall ha en födelsedags hälsning',
	'Wrong_next_birthday_greeting' => 'Det medföljande födelsedags popup året, var inte giltig, försök igen',
	'Max_user_age' => 'Högsta användare ålder',
	'Min_user_age' => 'Minsta användare ålder',
	'Birthday_lookforward' => 'Födelsedag att se fram emot',
	'Birthday_lookforward_explain' => 'Antal dagar skriptet bör blicka framåt för användare med en födelsedag',
// End add - Birthday MOD

// Start add - Yellow card admin MOD
	'Max_user_bancard' => 'Maximalt antal varningar',
	'Max_user_bancard_explain' => 'Om en användare får flera gula kort än denna gräns, kommer användaren att bannlysas',
	'ban_card' => 'Gult kort',
	'ban_card_explain' => 'Användaren kommer att bannlysas när han/hon är över %d gula kort',
	'Greencard' => 'Bannlys ej användare',
	'Bluecard' => 'Post rapport',
	'Bluecard_limit' => 'Intervall för blåa kort',
	'Bluecard_limit_explain' => 'Meddela moderatorer igen för varje x blåa kort som ges till en post',
	'Bluecard_limit_2' => 'Begränsning av blåa kort',
	'Bluecard_limit_2_explain' => 'Första anmälan till moderatorer skickas när ett inlägg får detta antal blåa kort',
	'Report_forum' => 'Rapportera forum',
	'Report_forum_explain' => 'Välj det forum där användarnas rapporter skall postas, användare MÅSTE ha minst post/svar tillgång till detta forum',

// Start add - Last visit MOD
	'Hidde_last_logon' => 'Dolt senaste inloggnings tid',
	'Hidde_last_logon_expain' => 'Om detta är inställt på Ja, är användare senaste inloggning endast synligt för Administratörer',
// End add - Last visit MOD
//
// Start add - Online/Offline/Hidden Mod
	'Online_time' => 'Online status tid',
	'Online_time_explain' => 'Antal sekunder en användare måste visas online (använd inte lägre värde än 60).',
	'Online_setting' => 'Online status inställning',
	'Online_color' => 'Online text färg',
	'Offline_color' => 'Offline text färg',
	'Hidden_color' => 'Dold text färg',
// End add - Online/Offline/Hidden Mod

// Disallow other admins to delete or edit the first admin MOD
	'L_LISTOFADMINEDIT' => 'Blockerade tillgångar till kontot i första admin',
	'L_LISTOFADMINEDITEXP' => 'I denna förteckning finns placerade blockerade tillgångar till kontot i första admin i forumet. Andra Admins har försökte ändra profil i första admin i forumet, för att ta bort första admin eller ställa honom till en vanlig användare. En omvandling av profilen och/eller behörigheter i första Admin ägde inte rum och var framgångsrikt blockerad. Denna lista kan rensas bara av första admin i forumet igen.',
	'L_LISTOFADMINEDITUSERS' => 'Förteckning över de blockerade tillgångarna till första administratörskonto',
	'L_LISTOFADMINTEXT' => 'Framgångsrikt blockerade tillgångar skedde genom',
	'L_DELETEMSG' => 'Radera poster',
	'L_DELETESUCMSG' => 'Uppgifterna har strukits successfullt',
	'L_ADMINEDITMSG' => 'Du har inte behörighet att redigera profilen och/eller behörigheter i första admin i forumet.<br /><br />Denna dåliga tillgång noterades och blev framgångsrikt blockerad!',
	'use_thank' => 'Tillåt Tacka Inlägg',
	'Default_avatar' => 'Ställ en standard avatar',
	'Default_avatar_explain' => 'Detta ger användare som har valt en avatar, en standard en. Ställ in standard avatar för gäster och användare, och välj sedan om du vill att Avatar ska visas för registrerade användare, gäster, båda eller inget.',
	'Default_avatar_guests' => 'Gäster',
	'Default_avatar_users' => 'Användare',
	'Default_avatar_both' => 'Båda',
	'Default_avatar_none' => 'Ingen',

// Start Optimize Database
	'Optimize' => 'Optimera',
	'Optimize_explain' => 'Optimera och ta bort tomma utrymmen från databasen.<br />Denna operation måste utföras regelbundet så att din databas är mer tillförlitlig och kan upprätthålla högsta hastighet och är korrekt utförd.',
	'Optimize_DB' => 'Optimera databas',
	'Optimize_Enable_cron' => 'Aktivera cron',
	'Optimize_Cron_every' => 'Cron varje',
	'Optimize_Cron_every_explain' => 'Vänligen notera att du även måste aktivera <b>PHP Cron [Global Switch]</b> i <b>Konfigurationen &raquo; Icy Phoenix &raquo; Cron</b>',
	'Optimize_month' => 'Månad',
	'Optimize_2weeks' => '2 veckor',
	'Optimize_week' => 'Vecka',
	'Optimize_3days' => '3 dagar',
	'Optimize_day' => 'Dag',
	'Optimize_6hours' => '6 timmar',
	'Optimize_hour' => 'Timme',
	'Optimize_30minutes' => '30 minuter',
	'Optimize_20seconds' => '20 sekunder (enbart för test)',
	'Optimize_Current_time' => 'Aktuell tid',
	'Optimize_Next_cron_action' => 'Nästa cron åtgärd',
	'Optimize_Performed_Cron' => 'Uppträdande cron',
	'Optimize_Show_not_optimized' => 'Visa endast tabeller inte optimerade',
	'Optimize_Show_begin_for' => 'Visa endast tabeller som börjar på',
	'Optimize_Configure' => 'Konfigurera',
	'Optimize_Table' => 'Tabell',
	'Optimize_Record' => 'Record',
	'Optimize_Type' => 'Typ',
	'Optimize_Size' => 'Storlek',
	'Optimize_Status' => 'Status',
	'Optimize_CheckAll' => 'Kontrollera alla',
	'Optimize_UncheckAll' => 'Avmarkera alla',
	'Optimize_InvertChecked' => 'Invert kontrollerad',
	'Optimize_return' => 'Klicka %sHär%s för att återgå till optimera databas',
	'Optimize_success' => 'Databasen har blivit successfullt optimerad',
	'Optimize_NoTableChecked' => '<b>Inga</b> Tabeller kontrollerade',

// End Optimize Database
// Start add - Global announcement MOD
	'Globalannounce' => 'Global tillkännagivning',
// End add - Global announcement MOD

// google bot detector by pukapuka
	'Detector' => 'Google Bot Detector',
	'Detector_Explain' => '',
	'Detector_ID' => '#',
	'Detector_Time' => 'Tid',
	'Detector_Url' => 'Url',
	'Detector_Clear' => 'Rensa alla',
	'Detector_No_Bot' => 'Ingen bot upptäckts',
	'Detector_Cleared' => 'Identifiera information rensad successfullt',
	'Click_Return_Detector' => 'Klicka %sHär%s för att återgå till detector',

// added to Auto group mod
	'group_count' => 'Antal nödvändiga inlägg',
	'group_count_max' => 'Antal nödvändiga inlägg',
	'group_count_updated' => '%d medlemmar har tagits bort, %d medlemmar är tillagda till den här gruppen',
	'Group_count_enable' => 'Användare som automatiskt läggs till när meddelanden postas',
	'Group_count_update' => 'Lägg till/Uppdatera nya användare',
	'Group_count_delete' => 'Radera/Uppdatera gamla användare',
	'User_allow_ag' => 'Aktivera auto-grupp',
	'group_count_explain' => 'När användare har skickat fler inlägg än detta värde <i>(i något forum)</i> då kommer de att läggas till i denna användargrupp<br/> Detta gäller endast om användare automatiskt läggs till när postning" är aktiverat',

// Start add - Bin Mod
	'Bin_forum' => 'Bin forum',
	'Bin_forum_explain' => 'Använd forum ID dit ämnen kommer att trashed; värdet 0 kommer att inaktivera den här funktionen. Du bör ändra detta forums behörigheter att tillåta eller inte tillåta åtkomst/visa/posta eller svara för användare.',
// End add - Bin Mod

// Begin Quick Title Edition Mod 1.0.0 by Xavier Olive.
	'Title_infos' => 'Snabb titel upplage administration',
	'Must_select_title' => 'Du måste välja en snabb titel add-on',
	'Title_updated' => 'Snabb titel Add-on uppdaterad',
	'Title_added' => 'Snabb titel Add-on tillagd',
	'Click_return_titleadmin' => 'Klicka %sHär%s för att återgå till Snabb Titel Administration',
	'Title_removed' => 'Snabb titel Add-on förflyttad',
	'Quick_title_explain' => 'Du kan skapa korta bitar av text som du kommer att kunna lägga till i titeln på ett ämne, genom att trycka på en enda knapp.<br />Om du vill att namnet på den person som utfört åtgärden att ändra titeln ska visas, bara lägg %mod% var du vill att den ska placeras. Exempelvis, [Länk OK | kontrollerad av %mod%] kommer att visas som [Länk OK |kontrollerad av ModeratorNamn]. Du kan göra det på exakt samma sätt genom att infoga datum %date% vart du vill.',
	'Title_head' => 'Snabb titel Add-on',
	'Title_auth' => 'Behörigheter',
	'Administrator' => 'Administratör',
	'Topic_poster' => 'Ämnes inläggare',
	'Add_new_title_info' => 'Lägg till en snabb titel Add-on',
	'Title_perm_info' => 'Behörigheter',
	'Title_perm_info_explain' => 'Användare med dessa nivåer kommer att kunna använda den här Snabb Titel Add-on',
	'Title_info' => 'Snabb titel Add-on',
// End Quick Title Edition Mod 1.0.0 by Xavier Olive.

// Limit Image Width MOD
	'Available' => 'Tillgänglig',
	'Unavailable' => 'Ej tillgänglig',
	'LIW_title' => 'Begränsa Bild Bredd MOD',
	'LIW_admin_explain' => 'Ändra begränsa bild bredd MOD på och av och sätt den maximala bredden för varje bild som är postad i ditt forum. Om du känner att SQL tabellen som innehar de cache lagrade bild dimensionerna av alla bilder som publiceras på forumet blir för stor, kan du tömma det genom att klicka på \'Töm cache tabell\' knappen.<br /><br />\'Kompatibilitetskontroll\' boxen nedan indikerar om eller inte om detta MOD kommer att fungera med din server.',
	'LIW_compatibility_checks' => 'Kompatibilitets kontroll',
	'LIW_mod_config' => 'MOD Konfiguration',

	'LIW_config_updated' => 'Begränsa bild bredd MOD konfiguration har blivit successfullt uppdaterad',
	'LIW_cache_emptied' => 'Cach tabellen har tömts successfullt',
	'LIW_click_return_config' => 'Klicka %shär%s för att återgå till Begränsa Bild Bredd MOD konfigurations sidan',

	'LIW_getimagesize' => 'få bild storleks() URL support',
	'LIW_getimagesize_explain' => 'Tillgänglig i PHP 4.0.5',
	'LIW_getimagesize_available' => 'Detta MOD är kompetent till att återkalla bild dimensioner',
	'LIW_getimagesize_unavailable' => 'Detta MOD kan inte kontrollera om eller inte en bild är för stor, och därför vill det storleksändra <i>vilken som helst</i> postad bild',

	'LIW_urlaware' => 'URL-medvetna fopen omslag',
	'LIW_urlaware_explain' => 'Sätt allow_url_fopen till Ja i din php.ini',
	'LIW_urlaware_available' => 'MOD kan skapa ett fingeravtryck för bilder så att det kan cacha bild dimensioner',
	'LIW_urlaware_unavailable' => 'MOD kan inte skapa ett fingeravtryck av filen, och kan därför inte cacha bild dimensioner',

	'LIW_openssl' => 'openSSL förlängning laddar',
	'LIW_openssl_explain' => 'Ladda openssl.dll förlängning i din php.ini',
	'LIW_openssl_available' => 'MOD i stånd att hämta dimensioner från https:// bilder så att man kan cacha dem',
	'LIW_openssl_unavailable' => 'MOD inte i stånd att hämta dimensioner från https:// bilder så att man inte kan cacha dem',

	'LIW_enable' => 'Ändra storlek på bilder i inlägg',
	'LIW_enable_explain' => 'Ställ in till %s för att tillåta MOD till att ändra storlek på bilder i inlägg', // Set to $lang['Yes'] to ....
	'LIW_sig_enable' => 'Ändra storlek på bilder i signaturer',
	'LIW_sig_enable_explain' => 'Ställ in till %s för att tillåta MOD till att ändra storlek på bilder i signaturer',
	'LIW_attach_enable' => 'Ändra storlek på bifogade bilder',
	'LIW_attach_enable_explain' => 'Ställ in till %s för att tillåta att ändra storlek på bilder som är bifogade till ett inlägg med hjälp av Attachment MOD',
	'LIW_max_width' => 'Maximal bildbredd',
	'LIW_max_width_explain' => 'Ange största bredd (pixlar) på en bild som postat och använder [img]-taggar',
	'LIW_empty_cache' => 'Töm bild dimensioner cache',
	'LIW_empty_cache_explain' => 'Din cache tabell innehåller för närvarande <b>%s</b> records', // Your cache table currently contains <b>312</b> records
	'LIW_empty_cache_note' => '<b>Notera:</b> Tömmning av cache tabellen kommer att orsaka MOD till att cache alla bild dimensioner igen, vilket kan leda till en tillfällig nedgång vid laddning av ett ämne',
	'LIW_empty_cache_button' => 'Töm cache tabell',

// News
	'xs_news_settings' => 'Nyhets inställningar',
	'xs_news_show' => 'Visa nyhets banner?',
	'xs_news_show_ticker' => 'Visa nyhets ticker?',
	'xs_news_show_ticker_explain' => 'Detta är en huvud switch och ställs den till \'Nej\' stoppas eventuella ticker från att visas, if set to \'Ja\' då visar den enskilda tickers och kan kontrolleras från deras individuella inställningar.',
	'xs_news_show_ticker_subtitle' => 'Visa ticker undertitel?',
	'xs_news_show_ticker_subtitle_explain' => 'Ställ in den här till Ja och detta kommer att visa \'Nyhets Tickers\' ovan nyhets tickers.',
	'xs_news_show_news_subtitle' => 'Visa nyheters undertitel?',
	'xs_news_show_news_subtitle_explain' => 'Ställ in den här till Ja och detta kommer att visa \'Nyhets Poster\' ovan nyhets poster.',
	'xs_news_dateformat' => 'Datum format',
	'xs_news_dateformat_helper' => 'Använder detta format: %s',

// Bantron Mod : Begin
	'Bantron' => 'Bantron',
	'BM_Title' => 'Bantron',
	'BM_Explain' => 'Lägg till, redigera, visa och ta bort bannlysning på plats i detta forum.',

	'BM_Show_bans_by' => 'Visa bannlysning av',
	'BM_All' => 'Alla',
	'BM_Show' => 'Visa',

	'BM_IP' => 'IP',
	'BM_Last_visit' => 'Senaste besöket',
	'BM_Banned' => 'Bannlyst',
	'BM_Expires' => 'Förfaller',
	'BM_By' => 'Av',
	'BM_Reasons' => 'Orsaker',

	'BM_Add_a_new_ban' => 'Lägg till en ny bannlysning',
	'BM_Delete_selected_bans' => 'Radera vald bannlysning',

	'BM_Private_reason' => 'Privat orsak',
	'BM_Private_reason_explain' => 'Detta skäl för att bannlysa användarnamn, e-post och/eller IP-adresser är endast för administratörs syfte.',

	'BM_Public_reason' => 'Offentlig orsak',
	'BM_Public_reason_explain' => 'Detta skäl för att bannlysa användarnamn, e-post och/eller IP-adresser visas för den bannlysta användarna när de försöker gå in på forumet.',
	'BM_Generic_reason' => 'Allmän orsak',
	'BM_Mirror_private_reason' => 'Speglar privata orsaker',
	'BM_Other' => 'Annan',

	'BM_Expire_time' => 'Förfallo tid',
	'BM_Expire_time_explain' => 'Genom att ange ett datum, antingen i förhållande till dagens datum eller ett definitivt datum, kommer bannlysningar att bli inaktiva efter denna tidpunkt.',
	'BM_Never' => 'Aldrig',
	'BM_After_specified_length_of_time' => 'Efter specificerad längd av viss tid',
	'BM_Minutes' => 'Minut(er)',
	'BM_Hours' => 'Timmar',
	'BM_Days' => 'Dag(ar)',
	'BM_Weeks' => 'Vecka',
	'BM_Months' => 'Månad(er)',
	'BM_Years' => 'År',
	'BM_After_specified_date' => 'Efter specificerad datum',
	'BM_AM' => 'AM',
	'BM_PM' => 'PM',
	'BM_24_hour' => '24-Timmar',

	'BM_Ban_reasons' => 'Bannlysnings orsaker',
// Bantron Mod : End

	'board_disable_message' => 'Visa ett meddelande för avaktivering av webbplatsen.',
	'board_disable_message_texte' => 'Meddelande som visas när webbplatsen är avaktiverad',

// Start Edit Notes MOD
	'Edit_notes_settings' => 'Redigera anteckningar inställningar',
	'Edit_notes_enable' => 'Aktivera redigera anteckningar',
	'Edit_notes_enable_explain' => 'Aktivera/inaktivera redigera anteckningar i forumet',
	'Max_edit_notes' => 'Högsta redigera anteckningar',
	'Max_edit_notes_explain' => 'Ange det högsta antalet redigera anteckningar per post.',
	'Edit_notes_permissions' => 'Redigera anteckningar behörigheter',
	'Edit_notes_permissions_explain' => 'Ange vilka typer av användare kan använda redigerings anteckningar.',
	'Edit_notes_admin' => 'Enbart administratörer',
	'Edit_notes_staff' => 'Personal (admins och mods)',
	'Edit_notes_reg' => 'Registrerade användare (admins och mods också)',
	'Edit_notes_all' => 'Alla användare (gäster, registrerade användare, admins, och mods)',
// End Edit Notes MOD

// BEGIN Disable Registration MOD
	'registration_status' => 'Avaktivera registreringar',
	'registration_status_explain' => 'Detta kommer att omöjliggöra alla nyregistreringar i ditt forum.',
	'registration_closed' => 'Orsak för stängda registreringar',
	'registration_closed_explain' => 'Ett meddelande som förklarar varför registreringar är stängda, och visas om en användare försöker att registrera. Lämna tomt för att visa standard förklarings text.',
// END Disable Registration MOD

	'Gender_required' => 'Tvinga användare att ange sitt kön',

//admin user list mail
	'Usersname' => 'Användare namn',
	'Admin_Users_List_Mail_Title' => 'Lista användares e-post',
	'Admin_Users_List_Mail_Explain' => 'Här är en lista över dina användares e-post',

// Start add - Forum notification MOD
	'Forum_notify' => 'Tillåt forum notification',
	'Forum_notify_enabled' => 'Tillåt',
	'Forum_notify_disabled' => 'Tillåt inte',
// End add - Forum notification MOD

	'Smilie_table_columns' => 'Smileys tabell kolumner',
	'Smilie_table_rows' => 'Smileys tabell rader',
	'Smilie_window_columns' => 'Smileys fönster kolumner',
	'Smilie_window_rows' => 'Smileys fönster rader',
	'Smilie_single_row' => 'Smileys enda rad nummer',
	'Smilie_single_row_explain' => 'I.E.: Quick Reply smileys number',

	'Auth_Rating' => 'Värdering',

// Gravatars
	'Enable_gravatars' => 'Aktivera gravatars',
	'Gravatar_rating' => 'Gravatar högsta betyg',
	'Gravatar_rating_explain' => '<a href="http://www.gravatar.com/rating.php" target="_blank">Läs betygs instruktioner</a> för mer information. Sätt till \'Ingen\' för ingen begränsning.',
	'Gravatar_default_image' => 'Gravatar standard bilden',
	'Gravatar_default_image_explain' => 'Om ingen Gravatar hittades, kommer servern att lämna tillbaka den här bilden. Sökväg till bilden i förhållande till Icy Phoenix rotkatalog. Lämna tomt för ingen bild.',

// Admin Account Actions
	'Account_actions' => 'Konto åtgärder',
	'Account_inactive_explain' => 'Användare som är inaktiva, inväntar aktivering eller radering, varje med länkar för att redigera deras rättigheter och/eller profilen.',
	'Account_active_explain' => 'Aktiva medlemmar som kan bli avaktiverade, raderade eller att deras rättigheter och/eller profilen kan bli redigerad.',
	'Account_active' => 'Aktiva användare',
	'Account_inactive' => 'Inaktiva användare',
	'Account_activate' => 'Aktivera markerade',
	'Account_deactivate' => 'Inaktiva markerade',
	'Account_none' => 'Det finns ingen användare som väntar på en aktivering.',
	'Account_total_user' => 'Användare: <b>%d</b> användare',
	'Account_total_users' => 'Antal användare: <b>%d</b> användare',
	'Account_activation' => 'Aktiverings metod',
	'Account_awaits' => 'Väntar på aktivering sedan',
	'Account_registered' => 'Registrerad sedan',
	'Account_delete_users' => 'Är du säker på att du vill ta bort dessa användare?',
	'Account_delete_user' => 'Är du säker på att du vill ta bort denna användare?',
	'Account_sort_letter' => 'Visa endast konton som börjar med',
	'Account_others' => 'andra',
	'Account_all' => 'alla',
	'Account_year' => 'år',
	'Account_years' => 'år',
	'Account_week' => 'vecka',
	'Account_weeks' => 'veckor',
	'Account_day' => 'dag',
	'Account_days' => 'dagar',
	'Account_hour' => 'timme',
	'Account_hours' => 'timmar',
	'Account_user_activated' => 'Användaren är aktiverad.',
	'Account_users_activated' => 'Användarna är aktiverade.',
	'Account_user_deactivated' => 'Användaren är inaktiverad.',
	'Account_users_deactivated' => 'Användarna är avaktiverade.',
	'Account_user_deleted' => 'Användaren är raderad.',
	'Account_users_deleted' => 'Användarna är raderade.',
	'Account_activated' => 'Konto Aktivering',
	'Account_activated_text' => 'Ditt konto är aktiverat',
	'Account_deactivated' => 'Konto avaktivering',
	'Account_deactivated_text' => 'Ditt konto är avaktiverat',
	'Account_deleted' => 'Konto borttaget',
	'Account_deleted_text' => 'Ditt konto har raderats',
	'Account_notification' => 'Meddelande e-post skickad.',

// Acronyms
	'Acronyms_title' => 'Förkortnings Administration',
	'Acronyms_explain' => 'Lägg till, redigera och ta bort förkortningar som läggs automatiskt till inlägg på ditt forum.',
	'Acronym' => 'Förkortning',
	'Acronyms' => 'Förkortningar',
	'Edit_acronym' => 'Redigera förkortning',
	'Description' => 'Beskrivning',
	'Add_new_acronym' => 'Lägg till ny förkortning',
	'Update_acronym' => 'Uppdatera förkortning',

	'Must_enter_acronym' => 'Du måste ange en förkortning och dess beskrivning',
	'No_acronym_selected' => 'Ingen förkortning har valts ut för att redigera',

	'Acronym_updated' => 'Den valda förkortningen har blivit successfullt uppdaterad',
	'Acronym_added' => 'Förkortningen har blivit successfullt tillagd',
	'Acronym_removed' => 'Den valda förkortningen har blivit successfullt förflyttad',

	'Click_return_acronymadmin' => 'Klicka %sHär%s för att återgå till förkortnings administration',
	'Prune_shouts' => 'Auto prune shouts',
	'Prune_shouts_explain' => 'Antal dagar innan shouts skall utgå. Om värdet är satt till 0, autoprune kommer att bli avaktiverat',

	'MOD_OS_ForumRules' => 'Forum regler',
	'Forum_rules' => 'Forum regler',
	'Rules_display_title' => 'Visa titel i forum regler BOX?',
	'Rules_custom_title' => 'Anpassad titel',
	'Rules_appear_in' => 'Dessa regler visas samtidigt...',
	'Rules_in_viewforum' => 'Visa detta forum',
	'Rules_in_viewtopic' => 'Visa ämnen i detta forum',
	'Rules_in_posting' => 'Postning/Svara på detta forum',

	'Php_Info_Explain' => 'Denna sida visar information om vilken version av PHP som är installerad på servern. Den innehåller uppgifter om laddade moduler, tillgängliga variabler och standardinställningar. Denna information kan vara användbar vid diagnostiserings problem. Tänk på att vissa värdföretag begränsar vilken information som visas här av säkerhetsskäl. Du bör inte ge ut någon information på den här sidan, utom när ställer frågor om support eller någon annan Team Medlem i support forumet.',

	'IcyPhoenix_Main' => 'Icy Phoenix hemsida',
	'IcyPhoenix_Download' => 'Icy Phoenix nerladdning',
	'IcyPhoenix_Code_Changes' => 'Kod ändrings Mod',
	'IcyPhoenix_Updates' => 'Icy Phoenix uppdateringar',
	'PhpBB_Upgrade' => 'phpBB uppgradering',
	'Header_Welcome' => 'Välkommen till Icy Phoenix administration kontroll panel',

	'Prune_users' => 'Prune användare',
	'Prune_Overview' => 'Pruning översikt',
	'Prune_title_explain' => 'Hantera beskärnings Inställningar på varje forum.',
	'Prune_forum' => 'Forum',
	'Prune_active' => 'Beskärning aktiv',
	'Prune_freq' => 'Flytta alla',
	'Prune_check' => 'Kontrollera alla',
	'Prune_days' => 'Dagar',
	'Prune_days_explain' => '* Ta bort inlägg som det inte har postats i.',
	'Click_return_admin_po' => '%sKlicka här%s, för att återgå till beskärnings översikt',
	'Prune_update' => 'Beskärnings Inställningarna har uppdaterats',

	'Admin_notepad_title' => 'Notepad',
	'Admin_notepad_explain' => 'Lämna globala minneslappar till andra administratörer.',
	'Allow_generator' => 'Aktivera avatar generator',
	'Avatar_generator_template_path' => 'Avatar generator mall sökväg',
	'Avatar_generator_template_path_explain' => 'Sökväg under din Icy Phoenix root dir för mall bilder, t.ex. images/avatars/generator_templates',

// Start Autolinks Mod
	'Autolink_first' => 'AutoLänka varje sökord en gång per post',

	'Autolinks_title' => 'Autolänkar',
	'Autolinks_explain' => 'Lägg till, redigera och ta bort sökord som automatiskt kommer att ersättas med webbadressen i meddelande inlägget. Om den URL som du anger är en intern en och pekar på forum/portal, kryssar du i rutan kommer sessions-ID att läggas till länken.<br /><br />eg. Om det konstateras, <b>Nyckelord</b> i inlägget kommer detta att ersättas med följande,<br /><br />&lt;a href="<b>Url</b>" title="<b>Kommentar</b>" style="<b>Stil</b>"&gt;<b>Text</b>&lt;/a&gt;',
	'links_keyword' => 'Nyckelord',
	'links_title' => 'Text',
	'links_url' => 'Url',
	'links_comment' => 'Kommentar',
	'links_style' => 'Stil',
	'links_forum' => 'Forum för autolänk',
	'links_forum2' => 'Forum',
	'links_internal' => 'Intern',
	'Autolinks_add' => 'Lägg till en autolänk',
	'Add_keyword' => 'Lägg till autolänk',
	'Autolinks_edit' => 'Redigera en autolänk',
	'Edit_keyword' => 'Redigera autolänk',
// 'Delete_link' => 'Tick box to delete this autolink.',

	'Select_all_forums' => 'Alla forum',
	'Autolink_added' => 'Autolänk successfullt tillagd.',
	'Autolink_updated' => 'Autolänk successfullt uppdaterad.',
	'Autolink_removed' => 'Autolänk successfullt raderad.',
	'No_autolink_selected' => 'Ingen autoLänk valdes för radering.',
	'No_autolinks' => 'Det finns inga autoLänkar i databasen.',
	'Must_enter_autolink' => 'Du måste ange ett sökord, länk text och en url.',
	'Click_return_autolinkadmin' => 'Klicka %sHär%s för att återgå till autolänk administration',
// End Autolinks Mod

// XS BUILD 030

// Login attempts configuration
	'Max_login_attempts' => 'Tillåtna inloggning försök',
	'Max_login_attempts_explain' => 'Antalet tillåtna forum inloggnings försök.',
	'Login_reset_time' => 'Inloggnings lås tid',
	'Login_reset_time_explain' => 'Tid i minuter användaren har att vänta tills han får tillåtelse att logga in igen efter att ha överskridit antalet tillåtna inloggnings försök.',

// XS BUILD 035
// Smilies Order
	'position_new_smilies' => 'Ska nya smileys tillsättas före eller efter befintliga smileys?',
	'smiley_change_position' => 'Ändra sätt läge',
	'before' => 'Före',
	'after' => 'Efter',
	'Move_top' => 'Skicka till topp',
	'Move_end' => 'Skicka till slut',

// XS BUILD 037
// Pages Auth
	'auth_view_title' => 'Sidvisning Auth',
	'auth_view_portal' => 'Hemsida',
	'auth_view_forum' => 'Forum',
	'auth_view_viewforum' => 'Visa forum',
	'auth_view_viewtopic' => 'Visa ämne',
	'auth_view_faq' => 'FAQ',
	'auth_view_memberlist' => 'Medlemslista',
	'auth_view_groupcp' => 'Användargrupper',
	'auth_view_profile' => 'Profil',
	'auth_view_search' => 'Sök',
	'auth_view_album' => 'Album',
	'auth_view_links' => 'Länkar',
	'auth_view_calendar' => 'Kalender',
	'auth_view_attachments' => 'Bilagor',
	'auth_view_download' => 'Nerladdningar',
	'auth_view_pic_upload' => 'Bild uppladdning (Posta Icy Bilder)',
	'auth_view_kb' => 'Kunskapsbas',
	'auth_view_ranks' => 'Värdering',
	'auth_view_statistics' => 'Statistik',
	'auth_view_recent' => 'Aktuella ämnen',
	'auth_view_referrers' => 'Referrers',
	'auth_view_rules' => 'Regler',
	'auth_view_site_hist' => 'Webbplats historia',
	'auth_view_shoutbox' => 'Shoutbox',
	'auth_view_viewonline' => 'Visa online',
	'auth_view_contact_us' => 'Kontakta oss',
	'auth_view_ajax_chat' => 'Chat',
	'auth_view_ajax_chat_archive' => 'Chat arkiv',
	'auth_view_custom_pages' => 'Anpassade sidor',

// Begin Yahoo Submit Your Site MOD by www.pentapenguin.com
	'Yahoo_search' => 'Yahoo sök',
	'Yahoo_search_settings' => 'Yahoo sök inställningar',
	'Yahoo_search_settings_explain' => 'Konfigurera inställningar för Yahoo Skicka Din Webbplats MOD. För mer info, vänligen se <a href="http://submit.search.yahoo.com/free/request" target="_blank">Yahoo Skicka Din Webbplats webbwsida</a>.',
	'Yahoo_search_select_forums' => 'Välj Forums',
	'Yahoo_search_select_forums_explain' => 'Välj vilket forum som ska inkluderas i den här listan. Du kan välja hur många forum du vill genom att klicka på varje forum namn samtidigt som du håller nere Ctrl Key (Windows) eller kommandotangenten (Macintosh). Som standard, är alla offentliga forum utvalda.',
	'Yahoo_search_savepath' => 'Spara sökväg för URL listan',
	'Yahoo_search_savepath_explain' => 'Ange en plats för URL var noterings filen ska sparas. Ange sökväg i förhållande till Icy Phoenix bas sökväg - t.ex. Om du sparar filen i cache-katalogen <b>www.yoursite.com/cache/</b>, ange då <b>cache</b>. Kom ihåg att du behöver CHMOD:a katalogen till 755 eller777 som gäller för din server.',
	'Yahoo_search_additional_urls' => 'Ange ytterligare URLs',
	'Yahoo_search_additional_urls_explain' => 'Ange ytterligare URLs du vill att Yahoo ska genomsöka på, en per rad. Du måste ange den fullständiga URL - t.ex. <b>http://www.yoursite.com/yourpage.html</b>.',
	'Yahoo_search_compress_file' => 'Komprimera listan över URLs',
	'Yahoo_search_compress_file_explain' => 'Om du väljer Ja för det här alternativet och att din servre har Gzip support, kommer en förteckning över webbadresser att komprimerats med GZip som kommer att resultera i en betydligt mindre fil och därmed också mindre bandbredd från Yahoo bot.',
	'Yahoo_search_compression_level' => 'Komprimerings nivå för fil',
	'Yahoo_search_compression_level_explain' => 'Välj en komprimerings nivå för filen. 9 är den rekommenderade inställningen om du inte stöter på problem. Om så är fallet bör du göra det värdet lägre.',
	'Yahoo_search_generate_file' => 'Generera Fil',
	'Yahoo_search_error_no_forums' => 'Error: inget forum valt. Gå tillbaka och välja minst ett forum.',
	'Yahoo_search_error_no_gzip' => 'Error: troligtvis använder du en gammal version av PHP eller har din webb värd inte någon support för Gzip. Vänligen gå tillbaka och välj <b>Nej</b> för <b>Komprimerings listan över URLs</b> alternativen.',
	'Yahoo_search_error_unopenable_file' => 'Error: kan inte öppna filen %s.',
	'Yahoo_search_error_unwritable_file' => 'Error: kan inte skriva till filen %s.',
	'Yahoo_search_error_unclosable_file' => 'Error: kan inte stänga filen %s.',
	'Yahoo_search_error_update_sql' => 'Error: kan inte uppdatera fält: %s',
	'Yahoo_search_error_unknown_file_error' => 'Error: filen sparades inte på grund av ett okänt error.',
	'Yahoo_search_file_done' => 'Webbadressens noterings fil har slutat att bearbetas. Vänligen kopiera URL:n nedan och klistra in den i rätt fält i Yahoo:<br /><b>%s</b>',
// Finish Yahoo Submit Your Site MOD by www.pentapenguin.com

// Bookmark Mod
	'Max_bookmarks_links' => 'Högsta bokmärken som skickas i länk-tagg',
	'Max_bookmarks_links_explain' => 'Antal bokmärken för att skicka i länk-taggen i början av dokumentet. Denna information används till exempel av Mozilla. Ange 0 för att inaktivera den här funktionen.',

	'Faq_manager' => 'FAQ Manager',
	'Faq_Rules_manager' => 'Faq &amp; Regler',
	'board_rules' => 'Forum regler',
	'board_faq' => 'Forum faq',
	'bbcode_faq' => 'BBKod faq',
	'attachment_faq' => 'Tillbehörs faq',
	'prillian_faq' => 'Prillian faq',
	'bid_faq' => 'Kompis Lista faq',


	'Account_active2' => 'Aktiva användare',
	'Account_inactive2' => 'Inaktiva användare',

// Search Flood Control - added 2.0.20
	'Search_Flood_Interval' => 'Sök flood intervall',
	'Search_Flood_Interval_explain' => 'Antal sekunder en användare måste vänta mellan sök begäran',
	'Confirm_delete_smiley' => 'Vill du verkligen ta bort denna smiley?',
	'Confirm_delete_word' => 'Är du säker på att du vill ta bort detta ord censor?',
	'Confirm_delete_rank' => 'Vill du verkligen ta bort denna rank?',

// Custom Profile Fields MOD
	'custom_field_notice_admin' => 'Dessa poster har skapats av dig eller en annan administratör. För mer information, se ex under Profil Fälts rubriken i navigeringen. Poster markerade med * är obligatoriska fält. Poster markerade med en &dagger; visas bara för administratörer.',

	'field_deleted' => 'De specificerade fältet har raderats',
	'double_check_delete' => 'Är du säker på att du vill ta bort profil fältet "%s" från databasen permanent?',

	'here' => 'Här',
	'new_field_link' => '<a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">%s</a>',
	'edit_field_link' => '<a href="' . append_sid($filename . '?mode=edit&amp;pfid=x') . '">%s</a>',
	'index_link' => '<a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">%s</a>',
	'field_exists' => 'Detta fältet finns redan.<br /><br />Du kan prova att skapa ett <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">nytt</a> profil fält,<br /><br />eller försök <a href="' . append_sid($filename . '?mode=edit&amp;pfid=x') . '">redigera</a> det du redan har.',
	'click_here_here' => 'Klicka <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">här</a> för att lägga till ett annat profil fält,<br /><br />eller klicka <a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">här</a> för att återgå till Admin Index.',
	'field_success' => 'Fält successfullt inskickat!<br /><br />Klicka <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">här</a> för att lägga till ett annat profil fält,<br /><br />eller klicka <a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">här</a> för att återgå till Admin Index.',
	'Custom_Profile' => 'Profil fält',
	'profile_field_created' => 'Profil fält skapat',
	'profile_field_updated' => 'Profil fält skapat',

	'add_field_title' => 'Lägg till anpassat profil fält',
	'edit_field_title' => 'Redigera anpassat profil fält',
	'add_field_explain' => 'Skapa nya fält för användarna att ha i sina profiler.',
	'edit_field_explain' => 'Redigera fält du redan har skapat för användarna att ha i sina profiler.',

	'add_field_general' => 'Allmänna inställningar',
	'add_field_admin' => 'Administrator inställningar',
	'add_field_view' => 'Visningsbara inställningar',
	'add_field_text_field' => 'Text fält inställningar',
	'add_field_text_area' => 'Text area inställningar',
	'add_field_radio_button' => 'Radio knapp inställningar',
	'add_field_checkbox' => 'Checkbox inställningar',

	'default_value' => 'Standard värde',
	'default_value_explain' => 'Detta är standard för detta fält. Om en ny användare inte ändrar detta värde är det detta värde de kommer att ha. Om detta är ett obligatoriskt fält är detta värde som alla befintliga användare kommer att vara inställda på.',
	'default_value_radio_explain' => 'Ange ett namn identiskt med ett skrivet i tillgängliga värden fältet.',
	'default_value_checkbox_explain' => 'Ange värden som kommer att falla tillbaka på kontrollen. Dessa värden måste matcha värdena i tillgängliga värden fältet',
	'max_length' => 'Maximal längd',
	'max_length_explain' => 'Detta är den maximala längden för detta fältet.',
	'max_length_value' => ' Detta måste vara ett nummer mellan %d och %d.',
	'available_values' => 'Tillgängliga värden',
	'available_values_explain' => 'Lägg varje värde på en egen rad',

	'add_field_view_disclaimer' => 'Alla dessa inställningar kommer att behandlas som "nej" om användarna inte är tillåtna att visa dessa fält',

	'add_field_name' => 'Fält namn',
	'add_field_name_explain' => 'Ange namnet som du vill associera med detta fält. Du kan anpassa produktionen för flera språk genom att redigera <b>language/lang_XXX/lang_profile_fields.php</b>.',
	'add_field_description' => 'Fält beskrivning',
	'add_field_description_explain' => 'Ange en beskrivning som du vill associera med detta fält. Den kommer att visas i liten text under fältnamnet, precis som den här texten här. Du kan anpassa produktionen för flera språk genom att redigera <b>language/lang_XXX/lang_profile_fields.php</b>.',
	'add_field_type' => 'Fält typ',
	'add_field_type_explain' => 'Välj den typ av profil fält du vill lägga till. Exempel på varje fälttyp visas längst till höger.',
	'edit_field_type_explain' => 'Välj den typ av profil fält du vill ändra detta fält till. Exempel på varje fälttyp visas längst till höger.',
	'add_field_required' => 'Sätt till nödvändigt',
	'add_field_required_explain' => 'Om fältet är inställd på "Nödvändigt", gäller det för alla användare som registrerar senare att de <strong>måste</strong> fylla i det, och alla befintliga användare kommer att ha det ifyllt med ett standardvärde.',
	'add_field_user_can_view' => 'Tillåt användare att se',
	'add_field_user_can_view_explain' => 'Om detta är satt till "ja", har användaren möjlighet att visa och redigera det här fältet. Om detta är inställt på "nej", kan bara Administratörer visa eller ändra detta värde. Även om detta är satt till "ja", kan detta område inte krävas.',
	'view_in_profile' => 'Visningsbart i användar profil',
	'profile_locations_explain' => 'Dessa alternativ finns för om detta fält ska ses i användarnas profil.',
	'contacts_column' => 'Kontakter kolumn',
	'about_column' => 'Om kolumn',
	'view_in_memberlist' => 'Visningsbart i medlemslistan',
	'view_in_topic' => 'Visningsbart i ämne',
	'topic_locations_explain' => 'Dessa alternativ finns för om detta fält ska ses i en post.',
	'author_column' => 'Författare sektion',
	'above' => 'Ovan ',
	'below' => 'Under ',

	'textarea' => 'Textområde',
	'textarea_example' => 'Exempel på ett rullningsbart' . "\n" . 'Textområde.',
	'text_field' => 'Text fält',
	'text_field_example' => 'Exempel på ett text fält',
	'radio' => 'Radio knapp',
	'radio_example' => 'Exempel på två radio knappar',
	'checkbox' => 'Kryssrutor',
	'checkbox_example' => 'Exempel på två kryssrutor',

	'profile_field_list' => 'Ditt anpassade profil fält',
	'profile_field_list_explain' => 'Dessa är alla anpassade profiler som du har skapat för ditt forum, med länkar för att redigera eller ta bort dem.',
	'profile_field_id' => 'ID #',
	'profile_field_name' => 'Fält namn',
	'profile_field_action' => 'Åtgärd',
	'no_profile_fields_exist' => 'Inget anpassat profil fält existerar.',

	'enter_a_name' => 'Du <strong>måste</strong> ange ett fält namn<br /><br />Tryck tillbaka och försök igen',
// END Custom Profile Fields MOD

	'Add' => 'Lägg till',
	'split_global_announce' => 'Dela globala tillkännagivanden',
	'split_announce' => 'Dela tillkännagivanden',
	'split_sticky' => 'Dela stickies',
	'split_topic_split' => 'Dela ämnen',
	'Announce_settings' => 'Tillkännagivanden inställningar',
	'Split_settings' => 'Dela inställningar',
	'Server_Cookies' => 'Server inställningar',
	'ENABLE_CHECK_DNSBL' => 'Aktivera offentligg Svartlista IP check på register',
	'ENABLE_CHECK_DNSBL_EXPLAIN' => 'Om du aktiverar IP check på register, kommer användarnas IP-adress att kontrolleras mot den offentliga svartlistan. Observera att ibland kan denna kontroll leda till oavsiktlig blockering av vanliga användare som har en IP-listad av misstag i den offentliga Svartlistan.',
	'ENABLE_CHECK_DNSBL_POSTING' => 'Aktivera offentligg Svartlista IP kontroll vid postning',
	'ENABLE_CHECK_DNSBL_POSTING_EXPLAIN' => 'Om du aktiverar IP-kontroll vid postning kommer användarens IP-adress att kontrolleras mot den offentliga svartlistan.',
	'Config_explain2' => 'Anpassa kalender och under-forums alternativ, du kan ändra utseende och inställningar.',
	'Forum_postcount' => 'Räkna användarnas inlägg',
	'Use_Captcha' => 'Använd CAPTCHA',
	'Use_Captcha_Explain' => 'Om inställt på JA, kommer den avancerade bekräftelsekoden att genereras. Om inställt på NEJ, är standard bekräftelsekoden genererad.',
	'Sync_Pics_Count' => 'Om du klickar <b>JA</b> kommer alla användares bild räkning att synkroniseras.',
	'Pics_Count_Synchronized' => 'Användares bild räknare synkroniserad korrekt',
	'Pics_Count_Not_Synchronized' => 'Användares bild räknare synkroniserades inte korrekt',

// IP - BUILD 001
// Ajax Shoutbox - BEGIN
	'Shoutbox_config' => 'AJAX Shoutbox Konfiguration',
	'Shout_read_only' => 'Endast läs',
	'Displayed_shouts' => 'Visade Shouts',
	'Displayed_shouts_explain' => 'Antal shouts som ska visas när du laddar shoutboxen.<br /><i>0 för att ladda alla shouts.</i>',
	'Stored_shouts' => 'Lagrade Shouts',
	'Stored_shouts_explain' => 'Antal shouts som stannar kvar i databasen.<br />Detta värde bör vara lika med eller högre än det antal av visade shouts.<br /><i>0 för att lagra alla shouts.</i>',
	'Shout_guest_allowed' => 'Gäst tillåten',
	'Shoutbox_flood' => 'Flood intervall',
	'Shoutbox_flood_explain' => 'Antal sekunder en användare måste vänta mellan shouts.',
// Ajax Shoutbox - END

/* lang_postcount.php - BEGIN */
	'Postcounts' => 'Post Räknings Administration',
	'Post_count_explain' => '<b>Redigera post räkning av en enskild användare.</b>',
	'Modify_post_counts' => 'Modifiera post räkning',
	'Post_count_changed' => 'Framgång! Du har redigerat ett användarnamns inläggs räkning!',
	'Click_return_posts_config' => 'Klicka %sHär%s för att återgå till post räknings konfigurationen',
	'Modify_post_count' => 'Modifiera post räkning',
	'Edit_post_count' => 'Redigera post räkning för <b>%s</b>',
	'Post_count' => 'Antal meddelanden',
/* lang_postcount.php - END */

/* lang_megamail.php - BEGIN */
	'Megamail_Explain' => 'Här kan du e-posta ett meddelande till antingen alla dina användare eller alla användare av en viss grupp. För att göra detta, kommer ett e-post meddelande att skickas ut till den administrativa e-post adress med en hemlig kopia som skickas till alla mottagare.<br />E-postmeddelandet skickas i flera omgångar: detta bör kringgå timeout och server-laddnings utfärdande. Statusen för detta mass utskik kommer att sparas i db. Du kan stänga fönstret, när du vill pausa massa-post-sändningen (den aktuella uppsättningen kommer att skickas ut). Senare kan du helt enkelt fortsätta där du slutade.<br /><b>Om HTML e-post är aktiverat, då kan du skriva breven genom att använda HTML kod, sätt in &lt;br /&gt; för en radbrytning.</b>',
	'megamail_inactive_users' => 'Ingen besökt användare de senaste (DAGAR) dagar',
	'megamail_header' => 'Din e-post-session',
	'megamail_id' => 'Brev-ID',
	'megamail_batchstart' => 'Bearbetar',
	'megamail_batchsize' => 'Meddelande per parti',
	'megamail_batchwait' => 'Paus',
	'megamail_created_message' => 'Massbrev har sparats i databasen.<br /><br/> För att börja skicka %sklicka här%s eller vänta till Meta-Refresh tar dig dit...',
	'megamail_send_message' => 'Den aktuella uppsättningen (%s - %s) har skickats .<br /><br/> Att fortsätta att skicka %sklicka här%s eller vänta tills Meta-Refresh tar dig dit...',
	'megamail_status' => 'Status',
	'megamail_proceed' => '%sFortsätt nu%s',
	'megamail_done' => 'KLART',
	'megamail_none' => 'Inga records hittades.',
	'megamail_delete_confirm' => 'Vill du verkligen ta bort det här mailet?',
	'megamail_deleted' => 'Epost raderades successfullt',
	'megamail_click_return' => 'Klicka %sHär%s för att återgå till Mass E-posten / PM',
/* lang_megamail.php - END */

/* lang_admin_voting.php - BEGIN */
	'Admin_Vote_Explain' => 'Undersöknings results (vem som har röstat och hur de röstat).',
	'Admin_Vote_Title' => 'Undersöknings administration',
	'Vote_id' => '#',
	'Poll_topic' => 'Undersöknings ämne',
	'Vote_username' => 'Röst(er)',
	'Vote_end_date' => 'Röst varaktighet',
	'Sort_vote_id' => 'Undersöknings nummer',
	'Sort_poll_topic' => 'Undersöknings ämne',
	'Sort_poll_title' => 'Undersöknings titel',
	'Sort_poll_start' => 'Start datum',
	'Sort_poll_end' => 'Slut datum',
	'Submit' => 'Skicka',
	'Select_sort_field' => 'Välj sorterings fält',
	'Sort_ascending' => 'Stigande',
	'Sort_descending' => 'Fallande',
/* lang_admin_voting.php - END */

/* lang_admin_gd_info.php - BEGIN */
	'GD_Title' => 'GD Info',
	'NO_GD' => 'Ingen GD',
	'GD_Description' => 'Här kan du hämta information om det installerade GD biblioteket',
	'GD_Freetype_Support' => 'Freetype teckensnitts support:',
	'GD_Freetype_Linkage' => 'Freetype länk typ:',
	'GD_T1lib_Support' => 'T1lib support:',
	'GD_Gif_Read_Support' => 'Gif läsa support:',
	'GD_Gif_Create_Support' => 'Gif skapa support:',
	'GD_Jpg_Support' => 'Jpg/Jpeg support:',
	'GD_Png_Support' => 'Png support:',
	'GD_Wbmp_Support' => 'WBMP support:',
	'GD_XBM_Support' => 'XBM support:',
	'GD_Jis_Mapped_Support' => 'Japansk teckensnitts support:',
	'GD_True' => 'Ja',
	'GD_False' => 'Nej',
/* lang_admin_gd_info.php - END */

/* lang_admin_captcha.php - BEGIN */
	'VC_Captcha_Config' => 'CAPTCHA',
	'captcha_config_explain' => '<b>Bestämm utseendet på bilden, som anger registreringskoden på aktiverad visuell bekräftelse.</b>',
	'VC_active' => 'Visuell bekräftelse är aktiv!',
	'VC_inactive' => 'Visuell bekräftelse är inte aktiv!',
	'background_configs' => 'Bakgrund',
	'Click_return_captcha_config' => 'Klicka %sHär%s för att återgå till CAPTCHA Konfiguration',

	'CAPTCHA_width' => 'CAPTCHA bredd',
	'CAPTCHA_height' => 'CAPTCHA höjd',
	'background_color' => 'Bakgrunds färg',
	'background_color_explain' => 'Angives i hexadecimal (t.ex. #0000FF för blå).',
	'pre_letters' => 'Antal skuggade bokstäver',
	'pre_letters_explain' => '',
	'great_pre_letters' => 'Skugg bokstavs ökning',
	'great_pre_letters_explain' => '',
	'Random' => 'Slumpmässigt',
	'random_font_per_letter' => 'Slumpmässiga teckensnitt per bokstäver',
	'random_font_per_letter_explain' => 'Varje bokstav använder ett slumpmässigt teckensnitt.',

	'back_chess' => 'Schack prov',
	'back_chess_explain' => 'Fyll den kompletta bakgrunden med 16 rektanglar.',
	'back_ellipses' => 'Ellipser',
	'back_arcs' => 'Böjda linjer',
	'back_lines' => 'Linjer',
	'back_image' => 'Bakgrunds bild',
	'back_image_explain' => '(Denna funktion är inte integrerad ännu)',

	'foreground_lattice' => 'Förgrunds galler',
	'foreground_lattice_explain' => '(bredd x höjd)<br />Generera ett vit galler över CAPTCHA',
	'foreground_lattice_color' => 'Galler färg',
	'foreground_lattice_color_explain' => 'Angives i hexadecimal (t.ex. #0000FF för blå).',
	'gammacorrect' => 'Kontrast korrigering',
	'gammacorrect_explain' => '(0 = off)<br />NOTERA!!! Förändringar av värdet har direkt effekt på läsbarheten av CAPTCHA!',
	'generate_jpeg' => 'Bild typ',
	'generate_jpeg_explain' => 'JPEG format har en högre kompression än png, och har genom kvalitetens attityd (max 95%), en direkt inverkan på läsbarheten av CAPTCHA.',
	'generate_jpeg_quality' => 'Kvalitet',
/* lang_admin_captcha.php - END */

/* lang_admin_topic_shadow.php - BEGIN */
	'Del_Before_Date' => 'Radera alla skugg ämnen innan %s<br />', // %s = insertion of date
	'Deleted_Topic' => 'Raderade skugg ämnen %s<br />', // %s = topic name
	'Affected_Rows' => '%d kända poster har påverkats<br />', // %d = affected rows (not avail with all databases!)
	'Delete_From_Date' => 'Alla skugg ämnen som har skapats före den angivna tidpunkten kommer att tas bort.',
	'Delete_Before_Date_Button' => 'Radera alla före datum',
	'No_Shadow_Topics' => 'Inga skugg ämnen hittades.',
	'Topic_Shadow' => 'Ämnes skugga',
	'TS_Desc' => '<b>Avlägsnar skugg ämnen utan att borttagning av det egentliga meddelandet. Skugg ämnen skapas när du flyttar ett inlägg till ett annat forum och väljer att lämna bakom en länk till det förflyttade inlägget.',
	'Month' => 'Månad',
	'Day' => 'Dag',
	'Year' => 'År',
	'Clear' => 'Rensa',
	'Resync_Ran_On' => 'Resync Ran På %s<br />', // %s = insertion of forum name
	'Version' => 'Version',

	'Title' => 'Titel',
	'Moved_To' => 'Flyttad till',
	'Moved_From' => 'Flyttad från',

/* Modes */
	'topic_time' => 'Ämne tid',
	'topic_title' => 'Ämne titel',

/* Errors */
	'Error_Month' => 'Din ingångs månad måste vara mellan 1 och 12',
	'Error_Day' => 'Din ingångs dag måste vara mellan 1 och 31',
	'Error_Year' => 'Ditt ingångs år måste vara mellan 1970 och 2038',
	'Error_Topics_Table' => 'Error åtkomst ämnes tabellen',
/* lang_admin_topic_shadow.php - END */

/* lang_admin_rebuild_search.php - BEGIN */
	'Rebuild_search' => 'Återuppbygg Sök',
	'Rebuild_search_desc' => 'Detta kommer att indexera varje post i Kunskaps Basen, återuppbygga söknings tabeller. Det kan ta lång tid att bearbeta, så du får inte gå ifrån denna sida tills den är klar.',
	'Post_limit' => 'Post begränsning',
	'Time_limit' => 'Tids begränsning',
	'Refresh_rate' => 'Uppdatera rate',

	'Next' => 'Nästa',
	'Finished' => 'Slutförd',
/* lang_admin_rebuild_search.php - END */

/* lang_admin_faq_editor.php - BEGIN */
	'faq_editor' => 'Redigera Språk',
	'faq_editor_explain' => '<b>Redigera och åter låta din FAQ, BBKod FAQ och Forum Regler . Du <u>ska inte</u> ta bort eller ändra rubriken <b>phpBB 2 Issues</b> eller <b>Om Icy Phoenix</b>.',

	'faq_select_language' => 'Välj språk fil du vill redigera',
	'faq_retrieve' => 'Återkalla fil',

	'faq_block_delete' => 'Är du säker på att du vill radera detta block?',
	'faq_quest_delete' => 'Är du säker på att du vill radera denna fråga (och dess svar)?',

	'faq_quest_edit' => 'Redigera Frågor & Svar',
	'faq_quest_create' => 'Skapa ny Frågor & Svar',

	'faq_quest_edit_explain' => 'Redigera frågor och svar. Ändra blocket om du vill.',
	'faq_quest_create_explain' => 'Skriv in de nya frågorna och svar och tryck på Skicka.',

	'faq_block' => 'Block',
	'faq_quest' => 'Fråga',
	'faq_answer' => 'Svar',

	'faq_block_name' => 'Block namn',
	'faq_block_rename' => 'Ändra namn på ett block',
	'faq_block_rename_explain' => 'Ändra namnet på ett block i filen',

	'faq_block_add' => 'Lägg till block',
	'faq_quest_add' => 'Lägg till fråga',

	'faq_no_quests' => 'Inga frågor i detta block. Detta kommer att förhindra varje block efter att detta har visats. Ta bort blocket eller lägg till en eller flera frågor.',
	'faq_no_blocks' => 'Inga block definierats. Lägg till ett nytt block genom att skriva in ett namn nedan.',

	'faq_write_file' => 'Kunde inte skriva till språk filen!',
	'faq_write_file_explain' => 'Du måste göra språk filen i language/lang_english/ eller motsvarande <i>skrivbar</i> för att använda denna kontroll panel. På UNIX, innebär detta att köra <code>chmod 666 filnamn</code>. De flesta FTP klienter kan göra detta genom egenskaps blad för en fil, annars kan du använda telnet eller SSH.',
/* lang_admin_faq_editor.php - END */

/* lang_admin_rules_editor.php - BEGIN */
	'rules_editor' => 'Redigera språk',
	'rules_editor_explain' => 'Redigera och åter redigera ditt Forums regler. ',

	'rules_select_language' => 'Välj språk för den fil du vill redigera',
	'rules_retrieve' => 'Återkalla fil',

	'rules_block_delete' => 'Är du säker på att du vill radera detta block?',
	'rules_quest_delete' => 'Är du säker på att du vill radera denna fråga (och dess svar)?',

	'rules_quest_edit' => 'Redigera Frågor & Svar',
	'rules_quest_create' => 'Skapa nya Frågor & Svar',

	'rules_quest_edit_explain' => 'Redigera frågor och svar. Ändra blocket om du vill.',
	'rules_quest_create_explain' => 'Skriv in de nya frågorna och svar och tryck på Skicka.',

	'rules_block' => 'Block',
	'rules_quest' => 'Fråga',
	'rules_answer' => 'Svar',

	'rules_block_name' => 'Block namn',
	'rules_block_rename' => 'Ändra namn på ett block',
	'rules_block_rename_explain' => 'Ändra namnet på ett block i filen',

	'rules_block_add' => 'Lägg till block',
	'rules_quest_add' => 'Lägg till fråga',

	'rules_no_quests' => 'Inga frågor i detta block. Detta kommer att förhindra varje block efter att detta har visats. Ta bort blocket eller lägg till en eller flera frågor.',
	'rules_no_blocks' => 'Inga block definierats. Lägg till ett nytt block genom att skriva in ett namn nedan.',

	'rules_write_file' => 'Kunde inte skriva till språk filen!',
	'rules_write_file_explain' => 'Du måste göra språk filen i language/lang_english/ eller motsvarande <i>skrivbar</i> för att använda denna kontroll panel. På UNIX, innebär detta att köra <code>chmod 666 filnamn</code>. De flesta FTP klienter kan göra detta genom egenskaps blad för en fil, annars kan du använda telnet eller SSH.',
/* lang_admin_rules_editor.php - END */

/* lang_admin_priv_msgs.php - BEGIN */
	'PM_View_Type' => 'PM visnings typ',
	'Show_IP' => 'Visa IP adress',
	'Rows_Per_Page' => 'Rader per sida',
	'Archive_Feature' => 'Arkiv funktion',
	'Inline' => 'Inline',
	'Pop_up' => 'Pop-up',
	'Current' => 'Nuvarande',
	'Rows_Plus_5' => 'Lägg till 5 rader',
	'Rows_Minus_5' => 'Ta bort 5 rader',
	'Enable' => 'Aktiverad',
	'Disable' => 'Avaktiverad',
	'Inserted_Default_Value' => '%s Konfiguration artikel finns inte, inför ett standardvärde<br />', // %s = config name
	'Updated_Config' => 'Uppdaterade Konfiguration artikel %s<br />', // %s = config item
	'Archive_Table_Inserted' => 'Arkiv tabell finns inte, skapa den<br />',
	'Switch_Normal' => 'Ändra till normal Mode',
	'Switch_Archive' => 'Ändra till arkiv Mode',

/* General */
	'Deleted_Message' => 'Raderde Privat Meddelandet - %s <br />', // %s = PM title
	'Archived_Message' => 'Arkiverade Privata Meddelanden - %s <br />', // %s = PM title
	'Archived_Message_No_Delete' => 'Kan inte radera %s, Det var märkt för arkivet Också <br />', // %s = PM title
	'Private_Messages' => 'Privata Meddelanden',
	'Private_Messages_Archive' => 'Privata Meddelanden arkiv',
	'Archive' => 'Arkiv',
	'To' => 'Till',
	'Subject' => 'Ämne',
	'Sent_Date' => 'Skickat datum',
	'From' => 'Från',
	'Sort' => 'Sortera',
	'Filter_By' => 'Filtrera efter',
	'PM_Type' => 'PM typ',
	'Status' => 'Status',
	'No_PMS' => 'Inga Privata Meddelanden Matchar Dina Sorterings Kriterier Att Visa',
	'Archive_Desc' => 'Privata meddelanden som du har valt att arkivera är listade här. Användare kan inte längre komma åt dessa (avsändare och mottagare), men du kan visa eller ta bort dem när som helst.',
	'Normal_Desc' => 'Alla Privata Meddelanden på ditt forum kan hanteras här. Du kan läsa vilket du vill och kan även välja att ta bort eller arkivera (bevara, men användarna kan inte se) meddelanden.',
	'Remove_Old' => 'Orphan PMs:</a> <span class="gensmall">Användare som inte längre existerar kunde ha lämnat PMS bakom sig, men detta kommer att ta bort dem.</span>',
	'Remove_Sent' => 'Skickat Box PMs:</a> <span class="gensmall">PMs i skickade boxen är bara kopior av exakt samma meddelande som skickades, förutom tilldelade till avsändaren efter att den andra användaren har läst PM. Dessa behövs verkligen inte.</span>',
	'Removed_Old' => 'Borttaget alla Orphan PMs<br />',
	'Removed_Sent' => 'Borttaget alla skickade PMs<br />',
	'Utilities' => 'Mass raderings användbarhet',
	'Nivisec_Com' => 'Nivisec.com',

/* PM Types */
	'PM_-1' => 'Alla Typer', //PRIVMSGS_ALL_MAIL = -1
	'PM_0' => 'Läs PMs', //PRIVMSGS_READ_MAIL = 0
	'PM_1' => 'Nytt PMs', //PRIVMSGS_NEW_MAIL = 1
	'PM_2' => 'Skickat PMs', //PRIVMSGS_SENT_MAIL = 2
	'PM_3' => 'Sparat PMs (In)', //PRIVMSGS_SAVED_IN_MAIL = 3
	'PM_4' => 'Sparat PMs (Out)', //PRIVMSGS_SAVED_OUT_MAIL = 4
	'PM_5' => 'Olästa PMs', //PRIVMSGS_UNREAD_MAIL = 5

/* Errors */
	'Error_Other_Table' => 'Error querying en krävd tabell.',
	'Error_PM_Text_Table' => 'Error querying Privata Meddelande text tabell.',
	'Error_PM_Table' => 'Error querying Privat Meddelande tabell.',
	'Error_PM_Archive_Table' => 'Error querying Privat Meddelande arkiv tabell.',
	'No_Message_ID' => 'Inget meddelande ID var angiven.',
/* lang_admin_priv_msgs.php - END */

/* lang_admin_link.php - BEGIN */
// Categories
	'Link_Categories_Title' => 'Länk kategori kontroll',
	'Link_Categories_Explain' => '<b>Hantera dina kategorier:</b><br /><br /> Skapa, ändra, ta bort, sortera osv.',
	'Category_Permissions' => 'Kategori behörigheter',
	'Category_Title' => 'Kategori titel',
	'Category_Desc' => 'Kategori beskrivning',
	'View_level' => 'Visnings nivå',
	'Upload_level' => 'Uppladdnings nivå',
	'Rate_level' => 'Betygs nivå',
	'Comment_level' => 'Kommentar nivå',
	'Edit_level' => ' Redigera nivå',
	'Delete_level' => 'Radera nivå',
	'New_category_created' => 'Ny kategori har blivit skapad successfullt',
	'Click_return_link_category' => 'Klicka %sHär%s för att återgå till the Länk Kategori Manager',
	'Category_updated' => 'Denna kategori har uppdaterats successfullt',
	'Delete_Category' => 'Radera kategori',
	'Delete_Category_Explain' => 'Radera denna kategori?',
	'Category_deleted' => 'Denna kategori har tagits bort successfullt',
	'Category_changed_order' => 'Denna kategoris ordning har ändrats successfullt',

// Config
	'Link_Config' => 'Länk Config Kontroll',
	'Link_config_explain' => 'Ändra de allmänna inställningarna för din länk här',
	'lock_submit_site' => 'Lås användaren från att komma in på webbplatsen',
	'allow_guest_submit_site' => 'Tillåt gäst (er) att komma in på webbplatsen',
	'allow_no_logo' => 'Tillåt att komma in på webbplatsen utan banner',
	'site_logo' => 'Den url där din logotyp kan hittas (full url)',
	'site_url' => 'Din url till din webbsida',
	'width' => 'Max banner bredd',
	'height' => 'Max banner höjd',
	'linkspp' => 'Max länkar per sida',
	'interval' => 'Hur snabbt bannern ska visas',
	'display_logo' => 'Hur många banners som ska visas på en gång',
	'Link_display_links_logo' => 'Visa länk webbplats banner',
	'Link_email_notify' => 'Medan länken läggs till, skicka e-post till alla webbplats admins',
	'Link_pm_notify' => 'Medan länken läggs till, notera till alla webbplats admins i privat meddelande',
	'Link_config_updated' => 'Länk konfigurationen har uppdaterats successfullt',
	'Click_return_link_config' => 'Klicka %sHär%s för att återgå till the Länk Config Manager',

// Link_MOD
	'Links' => 'Länk Management',
	'Links_explain' => 'Förhandsgranska status på, redigerade eller raderade utvalda länkar.',
	'Add_link' => 'Lägg till länk',
	'Add_link_explain' => 'Lägg till en ny länk.',
	'Edit_link' => 'Redigera länk',
	'Edit_link_explain' => 'Redigera denna länks detaljer. Du kan även välja att ',
	'Delete_link' => 'Radera länk',
	'Delete_link_explain' => 'Radera denna länk. Du kan även välja att ',
	'Link_update' => 'Uppdatera länk detaljer',
	'Link_delete' => 'Radera denna länk',
	'Link_title' => 'Webbplats namn',
	'Link_url' => 'Webbplats URL',
	'Link_logo_src' => 'Webbplats logotyp (88x31 pixlar, fil storlek inte större än 10K)',
	'Link_category' => 'Webbplats kategori',
	'Link_desc' => 'Webbplats beskrivning',
	'link_hits' => 'Träffar',
	'Link_basic_setting' => 'Länk grundläggande detaljer',
	'Link_adv_setting' => 'Avancerad inställning',
	'Link_active' => 'Aktiv status',

	'Link_admin_add_success' => 'Länken var successfullt tillagd',
	'Link_admin_add_fail' => 'Det går inte att lägga till den nya länken, vänligen prova igen senare',
	'Link_admin_update_success' => 'Länken var successfullt uppdaterad',
	'Link_admin_update_fail' => 'Det gick inte att uppdatera länken, vänligen prova igen senare',
	'Link_admin_delete_success' => 'Länken var successfullt förflyttad',
	'Link_admin_delete_fail' => 'Kunde inte ta bort länken, vänligen prova igen senare',
	'Click_return_lastpage' => 'Klicka %sHär%s för att återgå till föregående sida',
	'Click_return_admin_links' => 'Klicka %sHär%s för att återgå till Länk Manage',
	'Preview' => 'Förhandsgranska',
	'Search_site' => 'Sök webbplats',
	'Search_site_title' => 'Sök webbplats Namn/Beskrivning:',
/* lang_admin_link.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

// Icy Phoenix - BUILD 009
	'Replace_title' => 'Ersätt i inlägg',
	'Replace_text' => 'Ersätt ord eller rader med vad du vill.<br /><b>Notera!</b> Detta kan inte ångras.',
	'Link' => 'Länk',
	'Str_old' => 'Nuvarande text',
	'Str_new' => 'Ersätt med',
	'No_results' => 'Inga resultat hittades',
	'Replaced_count' => 'Totalt inlägg uppdaterad: %s',

// Icy Phoenix - BUILD 016
	'group_rank' => 'Rank',
	'group_color' => 'Färg',
	'group_legend' => 'Visa i legend',
	'group_legend_short' => 'Legend',
	'group_main' => 'Huvud grupp',
	'group_members' => 'Medlemmar',
	'group_update' => 'Inför ändringarna',

/* lang_color_groups.php - BEGIN */
	'Color_Groups' => 'Färg grupper',
	'Manage_Color_Groups' => 'Hantera färg grupper',
	'Add_New_Group' => 'Lägg till ny grupp',
	'Color' => 'Färg',
	'User_Count' => 'Användar räkning',
	'Color_List' => 'Färg namn lista:',
	'Group_Name' => 'Grupp namn',
	'Define_Users' => 'Definiera användare',
	'Color_Group_User_List' => 'Färg grupp användar lista',
	'Options' => 'Val',
	'Example' => 'Exempel',
	'User_List' => 'Full användare lista',
	'Unassigned_User_List' => 'Användare med ingen grupp',
	'Assigned_User_List' => 'Användare med en grupp',
	'Add_Arrow' => 'Lägg till i lista',
	'Update' => 'Uppdatera',
	'Updated_Group' => 'Uppdatera grupp användare lista<br />',
	'Deleted_Group' => 'Raderad specificerad grupp. Alla användare som fanns i den har återställts till inte någon gruppmedlemskap<br />',
	'Hide' => 'Gömm',
	'Un-hide' => 'Gömm-ej',
	'Group_Hidden' => 'Grupp gömd<br />',
	'Group_Unhidden' => 'Grupp ej-gömd<br />',
	'Groups_Updated' => 'Grupp förändringar har uppdaterats<br />',
	'Moved_Group' => 'Flyttad grupp ordning<br />',

//Descriptions
	'Manage_Color_Groups_Desc' => 'Uppdatera grupper, lägga till en ny grupp, eller hantera användare som tilldelats en viss färg grupp.<br />Grupper som du väljer att "Dölj" kommer inte att dyka upp på huvudindex listan.',
	'Color_Group_User_List_Desc' => 'Lägg till eller flytta användare till en specificerad färg grupp.',

//Errors
	'Error_Group_Table' => 'Error querying färg grupps tabellen.',
	'Error_Font_Color' => '<b><u>Varning:</b></u> Den specificerade teckenfärgen verkar vara ogiltig!',
	'Color_Ok' => 'Den angivna teckenfärgen verkar vara giltig.',
	'No_Groups_Exist' => 'Inga grupper finns.',
	'Error_Users_Table' => 'Error querying användar tabellen.',
	'Invalid_Group_Add' => '%s är ett ogiltigt eller kopierat grupp namn.<br />',

//Dynamic
	'Group_Updated' => 'Uppdaterad färg grupp %s<br />',
	'Editing_Group' => 'För närvarande redigerars användarlistan för %s.',
	'Invalid_User' => '%s är ett ogiltigt användarnamn, hoppa över<br />',
	'Invalid_Order_Num' => '%s innehöll en ogiltig löpnummer, men det har fastställts. Pröva att flytta upp/ner igen.',

//New for 1.2.0
	'Users_List' => 'Användar lista',
	'Groups_List' => 'Användar grupps lista',
	'List_Info' => '<b>Notera</b>: <ul><li>Håll nere CTRL när du klickar för att markera flera namn. <li>Om en användare tillhör en användargrupp, och skall läggas till i en viss färg grupp, kommer färg gruppen som innehåller användaren att användas; inte den användargruppen tillhör. <li>Listan namn är formaterade som NAMN (CURRENT_COLOR_GROUP). Där kommer inte att vara någon (CURRENT_COLOR_GROUP) om posten inte tillhör en. <li>Om en användare är medlem i 2 eller flera användargrupper, kommer den högst rankade färg gruppen att ges (du beställer deras utseende på huvudsidan).</ul>',
/* lang_color_groups.php - END */

// Icy Phoenix - BUILD 023
	'Empty_Cache_Main_Question' => 'Om du klickar Ja, kommer alla filer i främsta cache mappen att tas bort permanent.<br /><br /><em> Är du säker på att du vill göra detta? </em>',
	'Empty_Cache_Posts_Question' => 'Om du klickar Ja, kommer förkompilerade inläggsfält i inläggs tabellen att tas bort permanent.<br /><br /><em> Är du säker på att du vill göra detta? </em>',
	'Empty_Cache_Thumbs_Question' => 'Om du klickar Ja, kommer alla miniatyrbilder genererade i inlägg att tas bort permanent.<br /><br /><em> Är du säker på att du vill göra detta? </em>',
	'Empty_Cache_Success' => 'Cache mappar tömmdes successfullt.',

	'Copy_Auth' => 'Kopiera behörigheter från',
	'Copy_Auth_Explain' => 'Observera att du kan kopiera behörigheter endast från forum, inte från kategorier!',

// Icy Phoenix - BUILD 027
/* lang_admin_db_backup.php - BEGIN */
	'SELECT_ALL' => 'Välj alla',
	'SELECT_FILE' => 'Välj en fil',
	'START_BACKUP' => 'Starta backup',
	'START_RESTORE' => 'Starta återställning',
	'STORE_AND_DOWNLOAD' => 'Lagra och ladda ner',
	'STORE_LOCAL' => 'Lagra fil lokalt',
	'STRUCTURE_ONLY' => 'Bara Struktur',

// Backup
	'ACP_BACKUP' => 'Backup Databas',
	'ACP_BACKUP_EXPLAIN' =>  'Backup alla webbplatsinriktade uppgifter. Backup kommer att lagras <b><samp>backup/</samp></b> (se till att denna mapp är <b>skrivbar</b>) mappen så att kan du ladda ner eller återställa den från<b>Återställ</b> sidan. Din server konfiguration kan också ge dig möjlighet att spara filen i komprimerad gzip-format.<br /><br /><span class="text_red">Backup kommer att utföras på flera åtgärder för att undvika timeout: skriptet bör kunna utföra en fullständig process alla automatiskt, så du har bara att vänta att slutföra automatiserad uppgifter.</span><br /><br />',

	'BACKUP_OPTIONS' => 'Backup alternativ',
	'BACKUP_TYPE' => 'Backup typ',

	'DATABASE' => 'Databas verktygsprogram',
	'DATA_ONLY' => 'Enbart data',
	'DELETE_BACKUP' => 'Radera backup',
	'DELETE_SELECTED_BACKUP' => 'Är du säker på att du vill ta bort den valda backupen?',
	'DESELECT_ALL' => 'Avmarkera alla',
	'DOWNLOAD_BACKUP' => 'Ladda ner backup',

	'FILE_TYPE' => 'Fil typ',
	'FULL_BACKUP' => 'Full',

	'BACKUP_TYPE_COMPLETE' => 'Komplett',
	'BACKUP_TYPE_EXTENDED' => 'Utökad',
	'BACKUP_TYPE_COMPACT' => 'Kompakt radbrytning',

	'BACKUP_SUCCESS' => 'Backup filen har skapats successfullt.',
	'BACKUP_DELETED' => 'Backup filen har blivit raderad successfullt.',

	'TABLE_SELECT' => 'Tabell vald',

	'BACKUP_IN_PROGRESS' => 'Backup i framsteg...',
	'BACKUP_IN_PROGRESS_TABLE' => 'Backar upp tabell: <b>%s</b>',
	'BACKUP_IN_PROGRESS_REDIRECT' => 'Du kommer att omdirigeras automatiskt till nästa steg om några sekunder',
	'BACKUP_IN_PROGRESS_REDIRECT_CLICK' => 'Om du inte automatiskt omdirigeras inom några sekunder kan du klicka %sHär%s',
	'BACKUP_OPTIONS_RETURN' => 'Klicka %sHär%s för att återgå till Backup Management',
	
// Errors
	'Table_Select_Error' => 'Du måste välja minst en tabell.',

// Restore
	'ACP_RESTORE' => 'Återställ Databas',
	'ACP_RESTORE_EXPLAIN' => 'Återställning av alla webbplatsinriktade tabeller från en sparad backup fil. Om din server stöder det kan du använda en GZip eller BZip2 komprimerad textfil och den kommer automatiskt att expanderas. <strong>VARNING</strong> Detta kommer överskriva befintlig data. Återställningen kan ta lång tid att bearbeta och du får inte flytta från denna sida tills den är klar. Backups lagras i <samp>backup/</samp> mappen och antas vara från denna webbplats backupfunktioner. Återställnings backups som inte har skapats av den inbyggda system kommer inte att fungera korrekt.<br /><br /><strong class="text_red">Observera att om BF som skall återställas är för stor kommer detta skriptet att ta time out och du skulle inte kunna använda webbplatsen igen. Om detta händer kan du prova att ladda ner säkerhetskopian från FTP och sedan återställa den med en annan metod som phpMyAdmin eller MySQLDumper.</strong><br /><br />',
	'RESTORE_OPTIONS' => 'Återställnings Alternativ',

	'Restore_Success' => 'Databasen har återställts successfullt.<br />Din webbplats bör vara tillbaka till det skick som det var när Backup gjordes.',

// Errors
	'No_Backup_Selected' => 'Du har inte valt någon backup, så du kan inte återställa den.',
	'Backup_Invalid' => 'Den valda filen till backup är ogiltig.',
	'RESTORE_FAILURE' => 'Backup filen kan vara korrupt.',
/* lang_admin_db_backup.php - END */

/* Logs - BEGIN */
	'LOGS_ACTIONS_FILTER' => 'Åtgärder filter',
	'LOGS_TITLE' => 'Loggar',
	'LOGS_EXPLAIN' => 'Alla relevanta åtgärder lagrad i DB',
	'LOGS_TARGET' => 'Mål',
	'LOGS_DELETE' => 'Radera markerade',
	'LOGS_DELETE_ALL' => 'Töm logg tabell',
	'LOGS_DENY' => 'Ej godkända!',
	'LOGS_POST_EDIT' => 'redigerat inlägg inlagt av',
	'LOGS_POST_DELETE' => 'raderat inlägg inlagt av',
	'LOGS_GROUP_JOIN' => 'uppmanas att gå med i gruppen',
	'LOGS_GROUP_EDIT' => 'redigerat grupp alternativ för %s',
	'LOGS_GROUP_ADD' => 'tillagd %s till gruppen',
	'LOGS_GROUP_TYPE' => 'redigerad grupp %s status, nu är gruppen %s',
	'LOGS_GROUP_TYPE_0' => 'öppen',
	'LOGS_GROUP_TYPE_1' => 'stängd',
	'LOGS_GROUP_TYPE_2' => 'dold',
	'LOGS_MESSAGE' => 'meddelande till användaren, kod <b>%s</b>',
	'LOGS_MODCP_DELETE' => 'tog bort vissa meddelanden i %s genom MODCP',
	'LOGS_MODCP_RECYCLE' => 'slängde vissa meddelanden i %s genom MODCP',
	'LOGS_MODCP_LOCK' => 'låset vissa meddelanden i %s genom MODCP',
	'LOGS_MODCP_UNLOCK' => 'låste upp vissa meddelanden i %s genom MODCP',
	'LOGS_MODCP_MOVE' => 'flyttade några meddelanden i %s genom MODCP',
	'LOGS_MODCP_MERGE' => 'sammanslog vissa meddelanden i %s genom MODCP',
	'LOGS_MODCP_SPLIT' => 'delade vissa meddelanden i %s genom MODCP',
	'LOGS_TOPIC_BIN' => 'slängde ett meddelande i',
	'LOGS_TOPIC_ATTACK' => 'hackningsförsök på meddelande',
	'LOGS_CARD_BAN' => 'bannlyst',
	'LOGS_CARD_WARN' => 'varnad',
	'LOGS_CARD_UNBAN' => 'ej bannlyst',
	'LOGS_ADMIN_CAT_ADD' => 'lagt till en forum kategori',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP' => 'DB backup %s',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_full' => 'full',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_structure' => 'enbart struktur',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_data' => 'data',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_store_and_download' => ', nerladdad och lagrad',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_store' => ', lagrad',
	'LOGS_ADMIN_DB_UTILITIES_BACKUP_download' => ', nerladdad',
	'LOGS_ADMIN_DB_UTILITIES_RESTORE' => 'DB återställd från',
	'LOGS_ADMIN_BOARD_CONFIG' => 'redigerade config inställningar',
	'LOGS_ADMIN_BOARD_IP_CONFIG' => 'redigerade Icy Phoenix inställningar',
	'LOGS_ADMIN_GROUP_NEW' => 'grupp skapades',
	'LOGS_ADMIN_GROUP_DELETE' => 'grupp raderad',
	'LOGS_ADMIN_GROUP_EDIT' => 'grupp redigerad',
	'LOGS_ADMIN_USER_AUTH' => 'redigerade rättigheter för',
	'LOGS_ADMIN_GROUP_AUTH' => 'redigerade grupp rättigheter',
	'LOGS_ADMIN_USER_BAN' => 'bannlyste någon från ACP',
	'LOGS_ADMIN_USER_UNBAN' => 'bannlyste ej någon från ACP',
	'LOGS_ADMIN_USER_DELETE' => 'användare raderad',
	'LOGS_ADMIN_USER_EDIT' => 'profil redigering för',
	'LOGS_CMS_LAYOUT_EDIT' => 'redigerade %sTHIS%s sida',
	'LOGS_CMS_LAYOUT_DELETE' => 'raderade en sida [ID = %s]',
	'LOGS_CMS_BLOCK_EDIT' => 'redigerade ett block [ID = %s] i %sTHIS%s sidan',
	'LOGS_CMS_BLOCK_EDIT_LS' => 'redigerade ett block [ID = %s] i en standard sida [%s]',
	'LOGS_CMS_BLOCK_DELETE' => 'raderade ett block [ID = %s] i %sTHIS%s sidan',
	'LOGS_CMS_BLOCK_DELETE_LS' => 'raderade ett block [ID = %s] i en standard sida [%s]',
/* Logs - END */

	'SMILEYS_UPDATED' => 'Smileys Uppdaterade',

/* ADS - BEGIN */
	'ADS_TITLE' => 'Annonser &amp; Sponsorer',
	'ADS_TITLE_EXPLAIN' => 'Det här avsnittet tillåter dig att konfigurera banners, annonser och sponsorer som ska visas på din webbplats. Du kan lägga till olika typer av banners och besluta om dessa banners måste visas eller vilken nivå en användare ska ha för att inte se dem. Om du anger mer än en banner för en gemensam ståndpunkt, då kommer den bannern att visas slumpmässigt bland alla dem som anges för samma position.',
	'AD_DES' => 'Beskrivning',
	'AD_TEXT' => 'Innehåll',
	'AD_ENABLED' => 'Aktiverad',
	'AD_STATUS' => 'Status',
	'AD_STATUS_EXPLAIN' => 'Välj Ja om du vill aktivera den här annonsen eller Nej om du vill stänga av den',
	'AD_POSITION' => 'Position',
	'AD_AUTH' => 'Rättigheter',
	'AD_AUTH_EXPLAIN' => 'Användare som kommer att se den här annonsen',
	'AD_AUTH_GUESTS' => 'Enbart gäster',
	'AD_AUTH_REG' => 'Gäster och Registrerade (inte ADMINS och MODSs)',
	'AD_AUTH_MOD' => 'Alla utom administratörer',
	'AD_AUTH_ADMIN' => 'Alla',
	'AD_FORMAT' => 'Format',
	'AD_POS_GLT' => 'Global topp',
	'AD_POS_GLB' => 'Global botten',
	'AD_POS_GLH' => 'Global sidHuvud',
	'AD_POS_GLF' => 'Global sidFot',
	'AD_POS_FIX' => 'Forum index element',
	'AD_POS_FIT' => 'Forum index topp',
	'AD_POS_FIB' => 'Forum index botten',
	'AD_POS_VFX' => 'Visa forum element',
	'AD_POS_VFT' => 'Visa forum topp',
	'AD_POS_VFB' => 'Visa forum botten',
	'AD_POS_VTX' => 'Visa ämnes element',
	'AD_POS_VTT' => 'Visa ämnes topp',
	'AD_POS_VTB' => 'Visa ämnes botten',
	'AD_POS_NMT' => 'Nav meny topp',
	'AD_POS_NMB' => 'Nav meny botten',
	'AD_ADD' => 'Lägg till annons',
	'AD_EDIT' => 'Redigera annons',
	'AD_ADDED' => 'Annons tillagd successfullt',
	'ADS_UPDATE' => 'Uppdatera Annons',
	'AD_UPDATED' => 'Annons uppdaterad successfullt',
	'AD_DELETED' => 'Annons raderad successfullt',
	'CLICK_RETURN_ADS' => 'Klicka %sHär%s för att återgå till annons administration',
	'AD_NO_ADS' => 'Inga annonser definierade',
	'ERR_AD_ADD' => 'Vänligen fyll i alla obligatoriska fält',
/* ADS - END */

    'FULL_HTML' => 'Full HTML',
	'ACTIONS' => 'Åtgärder',
	'EDIT' => 'Redigera',
	'DELETE' => 'Radera',
	
	// Tickets Submission - BEGIN
	'TICKETS_EMAILS' => 'E-post biljetter',
	'TICKETS_EMAILS_EXPLAIN' => 'Det här avsnittet tillåter dig att ange flera kategorier som kan väljas påi "Kontakta oss" sidan när du skickar e-post. För varje kategori kan en eller flera e-postadresser anges, så att användaren ska kunna välja ett specifikt ämne och e-post kommer att skickas till de länkade e-postadresserna.',
	'TICKET_CAT' => 'Kategori',
	'TICKET_CAT_TITLE' => 'Titel',
	'TICKET_CAT_DES' => 'Beskrivning',
	'TICKET_CAT_EMAILS' => 'E-postadresser',
	'TICKET_CAT_EMAILS_EXPLAIN' => 'Insätt här alla e-postadresser som du vill att e-post skickas till.<br />Separera alla adresser med semikolon (a@a.com;b@b.com;c@c.com).',
	'TICKETS_NO_TICKETS' => 'Inga biljetter',
	'TICKETS_NO_TICKET_SEL' => 'Ingen biljett vald',
	'TICKETS_NO_TICKET_TITLE' => 'Du måste ange minst tilet fält',
	'TICKETS_DB_ADD' => 'Lägg till kategori',
	'TICKETS_DB_ADDED' => 'Kategori tillagd successfullt',
	'TICKETS_DB_UPDATED' => 'Kategori uppdaterad successfullt',
	'TICKETS_DB_DELETED' => 'Kategori raderad successfullt',
	'TICKETS_DB_CLICK' => 'Klicka %sHär%s för att återgå till E-post biljetter',
	// Tickets Submission - END

	'FORUM_LIMIT_EDIT_TIME' => 'Begränsa användares inläggs redigeringstid',
	'FORUM_LIMIT_EDIT_TIME_EXPLAIN' => 'Genom att aktivera detta alternativ kommer användare att tillåtas att redigera egna meddelanden endast inom den gräns som anges i inläggs  konfigurationen i Icy Phoenix (ACP &raquo; Konfiguration &raquo; Huvud Inställningar &raquo; Postning Och Meddelanden)',

	// Custom BBCodes - BEGIN
	'BBCODES_CUSTOM_BBCODES' => 'Anpassade BBKoder',
	'BBCODES_CUSTOM_BBCODES_EXPLAIN' => 'BBKod är en speciell variant av HTML ger större kontroll över vad och hur någonting visas. Från den här sidan kan du lägga till, ta bort och redigera anpassade BBKoder. För att kunna använda dessa anpassade BBKoder måste du aktivera <b>Aktivera Anpassade BBKoder</b> i <b>ACP &raquo; Konfiguration &raquo; Huvud Inställningar &raquo; Postning Och Meddelanden</b> sektionen.',
	'BBCODES_NO_BBCODES' => 'Inga BBKoder',
	'BBCODES_NO_BBCODES_SEL' => 'Ingen BBKod vald',
	'BBCODES_NO_BBCODES_INPUT' => 'Du måste fylla i BBKod tagg',
	'BBCODES_DB_ADD' => 'Lägg till BBKod',
	'BBCODES_DB_ADDED' => 'BBKod tillagd successfullt',
	'BBCODES_DB_UPDATED' => 'BBKod uppdaterad successfullt',
	'BBCODES_DB_DELETED' => 'BBKod raderad successfullt',
	'BBCODES_DB_CLICK' => 'Klicka %sHär%s för att återvända till anpassade BBKoder',

	'BBCODE_ADDED' => 'BBKod tillagd successfullt.',
	'BBCODE_EDITED' => 'BBKod redigerad successfullt.',
	'BBCODE_NOT_EXIST' => 'BBKoden du angav existerar inte.',
	'BBCODE_HELPLINE' => 'Hjälp linje',
	'BBCODE_HELPLINE_EXPLAIN' => 'Detta fält innehåller musen över texten i BBKod.',
	'BBCODE_HELPLINE_TEXT' => 'Hjälp linje text',
	'BBCODE_HELPLINE_TOO_LONG' => 'Hjälp linjen du angav är för lång.',

	'BBCODE_INVALID_TAG_NAME' => 'BBKods tagg namn som du valde existerar redan.',
	'BBCODE_INVALID' => 'Din BBKod är konstruerad på ett ogiltigt sätt.',
	'BBCODE_OPEN_ENDED_TAG' => 'Din anpassade BBKod måste innehålla både en öppen och en stängd tagg.',
	'BBCODE_TAG' => 'Tagg',
	'BBCODE_TAG_TOO_LONG' => 'Taggnamnet som du valde är för långt.',
	'BBCODE_TAG_DEF_TOO_LONG' => 'Tagg definitionen som du har anget är för lång, vänligen korta ner din tagg definition.',
	'BBCODE_USAGE' => 'BBKod användning',
	'BBCODE_USAGE_EXAMPLE' => '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN' => 'Här definierar du hur du använder BBKod. Byt ut någon inmatnings variabel av motsvarande token (%ssee below%s).',

	'EXAMPLE' => 'Exempel:',
	'EXAMPLES' => 'Exempel:',

	'HTML_REPLACEMENT' => 'HTML ersättning',
	'HTML_REPLACEMENT_EXAMPLE' => '&lt;span style=&quot;background-color: {COLOR};&quot;&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style=&quot;font-family: {SIMPLETEXT1};&quot;&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN' => 'Här definierar du standard HTML ersättare. Glöm inte att lägga tillbaka token som du använde ovan!',

	'TOKEN' => 'Token',
	'TOKENS' => 'Tokens',
	'TOKENS_EXPLAIN' => 'Tokens är platshållare för användar inlägg. Inlägg kommer endast att valideras om det matchar motsvarande definition. Om det behövs kan du numrera dem genom att lägga till ett nummer som det sista tecknet mellan klammerna, t.ex. {TEXT1}, {TEXT2}.<br /><br />Inom HTML-byte kan du också använda någon språk sträng före ditt språk / katalog som denna: {L_<em>&lt;STRINGNAME&gt;</em>} där <em>&lt;STRINGNAME&gt;</em> är namnet på den översatta strängen som du vill lägga till. Till exempel, {L_WROTE} kommer att visas som &quot;wrote&quot; eller dess översättning enligt användarens plats.<br /><br /><strong>Observera att endast symboliska tokens som anges nedan kan användas inom anpassade BBKoder.</strong>',
	'TOKEN_DEFINITION' => 'Vad kan det vara?',
	'TOO_MANY_BBCODES' => 'Du kan inte skapa några fler BBKoder. Ta bort en eller flera BBKoder och försök sedan igen.',

	'BBCODES_TOKENS_DESCRIPTION' => '
<b>TEXT</b> &raquo; All text, inklusive utländska bokstäver, siffror, etc... Du bör inte använda den här token i HTML-taggar. Istället försök att använda IDENTIFIER eller SIMPLETEXT.<br />
<b>SIMPLETEXT</b> &raquo; Tecken från det latinska alfabetet (A-Z), siffror, mellanslag, kommatecken, punkter, minus, plus, bindestreck och understreck<br />
<b>IDENTIFIER</b> &raquo; Tecken från det latinska alfabetet (A-Z), siffror, bindestreck och understreck<br />
<b>NUMBER</b> &raquo; Varje siffror serie<br />
<b>EMAIL</b> &raquo; En giltig e-postadress<br />
<b>URL</b> &raquo; En giltig URL som använder följande protokoll (http, ftp, etc... kan inte användas för JavaScript utnyttjande). Om inget anges, &quot;http://&quot; prefix till strängen.<br />
<b>LOCAL_URL</b> &raquo; En lokal URL. URL:n måste vara relativ till ämnes sidan och kan inte innehålla ett servernamn eller protokoll.<br />
<b>COLOR</b> &raquo; En HTML färg, kan vara antingen i numerisk form <samp>#ff1234</samp> eller a <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS färg nyckelord</a> såsom <samp>fuchsia</samp> eller <samp>InactiveBorder</samp>',
	// Custom BBCodes - END

	// PLUGINS - BEGIN
	'PLUGINS' => 'Plugin',
	'PLUGINS_EXPLAIN' => 'I denna sektion kan du aktivera eller avaktivera Icy Phoenix Plugins',
	'PLUGINS_FOLDER' => 'Mapp',
	'PLUGINS_NAME' => 'Namn',
	'PLUGINS_DESCRIPTION' => 'Beskrivning',
	'PLUGINS_VERSION' => 'Version',
	'PLUGINS_CURRENT_VERSION' => 'Installerad version',
	'PLUGINS_LAST_VERSION' => 'Senaste version',
	'PLUGINS_INSTALL' => 'Installera',
	'PLUGINS_UPGRADE' => 'Uppgradera',
	'PLUGINS_UNINSTALL' => 'Avinstallera',
	'PLUGINS_UP_TO_DATE' => 'Upp till dags datum',
	'PLUGINS_NOT_INSTALLED' => 'Ej installerad',
	'PLUGINS_OUTDATED' => 'Omodern',
	'PLUGINS_UPDATE_CONFIG' => 'Uppdaterings konfiguration',
	'PLUGINS_CONFIG_UPDATED' => 'Plugin konfiguration uppdaterad successfullt. Notera att du behöver ladda om ACP (F5) för att uppdatera moduler.',
	'PLUGINS_RETURN_CLICK' => 'Klicka %sHär%s för att återgå till Plugins',
	'PLUGINS_NO_PLUGINS' => 'Inga Plugins att konfigurera',
	// PLUGINS - END

	'BBCODE_SETTINGS' => 'BBKod, HTML och Smileys inställningar',
	'POSTING_SETTINGS' => 'Postnings inställningar',

	'POLL_INFINITE' => 'Oändlig...',
	'POLL_ONGOING' => ' (pågående)',
	'POLL_COMPLETED' => ' (färdig)',

	'FORUM_LIKES' => 'Gillar inlägg',
	'FORUM_LIKES_EXPLAIN' => 'Tillåt användare att gilla enskilda inlägg i ett ämne (så måste du aktivera den globala omkopplaren i Icy Phoenix Inställningar [SQL Charge] för att kunna använda den här funktionen)',

	'POSTS_PICS' => 'Inlägg / Bilder',

	'INACTIVE_USER_FEATURE' => 'Makera denna användare',
	'INACTIVE_USER_FEATURE_EXPLAIN' => 'Genom att sätta denna variabel, kommer användaren att maskeras i forum och ämnen. Användarprofiluppgifter kommer att ersättas av anonyma uppgifter. Användaren kommer bara att makeras om dess konto inte är aktivt.',

	'RANK_SHOW_TITLE' => 'Visa rang titel',
	'RANK_SHOW_TITLE_EXPLAIN' => 'Genom att inaktivera detta alternativ kommer endast rank bilden att visas',

	'AJAX_CHAT_MSGS_REFRESH' => 'Uppdatera tidsintervall',
	'AJAX_CHAT_MSGS_REFRESH_EXPLAIN' => 'Ange tidsintervallet i sekunder för systemet att söka efter nya chattmeddelanden. Detta värde bör inte ligga under 2 sekunder (den kommer att tvingas till 1 sekund om ett lägre värde väljs).',
	'AJAX_CHAT_SESSION_REFRESH' => 'Sessions längd',
	'AJAX_CHAT_SESSION_REFRESH_EXPLAIN' => 'Ange chattsession varaktighet. Detta värde används för att kontrollera om användare i chatten lämnat konversationen. Detta värde får inte vara mindre än 10 sekunder (detta värde kommer att tvingas att vara 5 sekunder om ett lägre värde väljs).',
	'AJAX_CHAT_LINK_TYPE' => 'Chat fönster format',
	'AJAX_CHAT_LINK_TYPE_EXPLAIN' => 'Vänligen ange om du vill ha ett förenklat fönster chatt eller ett fönster med full sidhuvud och sidfot (förenklat är renare och snabbare).',
	'AJAX_CHAT_LINK_TYPE_SIMPLE' => 'Förenklad',
	'AJAX_CHAT_LINK_TYPE_FULL' => 'Full',
	'AJAX_CHAT_NOTIFICATION' => 'Privat chat underrättelse',
	'AJAX_CHAT_NOTIFICATION_EXPLAIN' => 'Om du aktiverar det här alternativet, kommer ett meddelande skickas till användaren i händelse av privat chat begäran.',
	'AJAX_CHAT_CHECK_ONLINE' => 'Privat chat länk endast för online användare',
	'AJAX_CHAT_CHECK_ONLINE_EXPLAIN' => 'Om du aktiverar det här alternativet, kommer privat chat länken endast att visar för användare som redan är inne i chaten, annars kommer den att visas för alla användare som är online på sidan.',

	
	
	
	
	
// ####################### [ Icy Phoenix Options BEGIN ] #####################
	'IP_Configuration' => 'Icy Phoenix Inställningar',
	'IP_Configuration_Explain' => '<em><b>Avancerad Icy Phoenix Inställningar</b></em>',

	'MG_SW_Precompiled_Posts_Title' => 'Förkompilerad inlägg',
	'MG_SW_Logins_Title' => 'Inloggnings inspelning',
	'MG_SW_Edit_Notes_Title' => 'Redigera anteckningar',
	
	'MG_SW_Header_Footer' => 'Header tabell meddelanden',
	'MG_SW_Header_Table' => 'Header tabell',
	'MG_SW_Header_Table_Explain' => 'Aktivering av det här alternativet visar ett kundanpassat budskap i rubriken på varje sida.',
	'MG_SW_Header_Table_Text' => 'Sätt in din text här.',
	
	'MG_SW_Empty_Precompiled_Posts' => 'Töm förkompilerade inlägg',
	'MG_SW_Empty_Precompiled_Posts_Explain' => 'Töm alla förkompilerade inlägg.',
	'MG_SW_Empty_Precompiled_Posts_Success' => 'Förkompilerad inlägg tömmdes korrekt.',
	'MG_SW_Empty_Precompiled_Posts_Fail' => 'Errors vid tömning av förkompilerad tjänster.',
    'MG_SW_Empty_Precompiled_Posts_InProgress' => 'Tömmning av cache-mapparna i framsteg...',
	'MG_SW_Empty_Precompiled_Posts_InProgress_Redirect' => 'Du omdirigeras automatiskt till nästa steg inom tre sekunder',
	'MG_SW_Empty_Precompiled_Posts_InProgress_Redirect_Click' => 'Om du inte automatiskt omdirigeras inom tre sekunder kan du klicka %sHär%s',
	'MG_SW_Empty_Precompiled_Posts_Redirect_Click' => 'Klicka %sHär%s för att återgå till Cache Management',
	
	'MG_FNF_Header' => 'Snabb inställningar',
	'MG_FNF_Header_Explain' => '<b>Konfigurations Inställningar för din webbplats.</b><br /> Dessa konfigurations paket har skapats för att enkelt låta användare mass ändra sina inställningar utan att behöva ändra varje alternativ ett och ett i konfigurations panelen, och kan användas som utgångspunkt för framtida anpassningar: Till exempel kan du välja "Snabb och Furious" och sedan ändra endast det alternativ för detta paket som du inte vill ha.<br /><br /><span class="text_red"><b>Vänligen notera! att när du har ansökt om ett av dessa inställningar kan du inte automatiskt återställa gamla inställningar och du måste då ställa upp dem igen manuellt.</b></span>',
	'MG_FNF_Options_Set' => 'Sätt av alternativ',
	'MG_FNF_FNF' => 'Snabb och Rasande ',
	'MG_FNF_FNF_Explain' => 'Dessa alternativ kommer att öka hastigheten på din webbplats, eftersom de flesta av de funktioner som kräver hög CPU kostnad eller BF tillgång kommer att vara avstängda. Detta paket är perfekt om man vill ha en mycket snabb webbplats.',
	'MG_FNF_MGS' => 'Mighty Gorgon\'s Föreslog',
	'MG_FNF_MGS_Explain' => 'Denna uppsättnings alternativ är balanserat och en bra utgångspunkt för de flesta webbplatser. Vissa alternativ är aktiverade medan andra som kräver hög CPU belastning kommer att vara avstängda.',
	'MG_FNF_Full_Features' => 'Fulla funktioner',
	'MG_FNF_Full_Features_Explain' => 'Dessa alternativ kan vara aktiverade om du inte har bandbredds begränsning eller om du vill ha alla Icy Phoenix funktioner aktiverade. Vänligen notera! att vissa av funktionerna kanske inte är kompatibel med din server.',

	'MG_SW_ACRONYMS' => 'Avaktivera förkortningar',
	'MG_SW_ACRONYMS_Explain' => 'Avaktivera förkortnings parsning?',
	'MG_SW_AUTOLINKS' => 'Avaktivera autolänkar',
	'MG_SW_AUTOLINKS_Explain' => 'Avaktivera autolänks parsning?',
	'MG_SW_CENSOR' => 'Avaktivera ord censur',
	'MG_SW_CENSOR_Explain' => 'Avaktivera ord censurering parsning?',

	'MG_SW_No_Right_Click' => 'Blockera höger klick',

	'Click_return_config_mg' => 'Klicka %sHär%s för att återgå till Icy Phoenix Inställningar',
	// ####################### [ Icy Phoenix Options END ] #######################
	)
);

/* Special Cases, Do not bother to change for another language */
$lang['ASC'] = $lang['Sort_Ascending'];
$lang['DESC'] = $lang['Sort_Descending'];
$lang['privmsgs_date'] = $lang['Sent_Date'];
$lang['privmsgs_subject'] = $lang['Subject'];
$lang['privmsgs_from_userid'] = $lang['From'];
$lang['privmsgs_to_userid'] = $lang['To'];
$lang['privmsgs_type'] = $lang['PM_Type'];

// ####################### [ Icy Phoenix Navigation BEGIN ] #######################
// Use numbers to sort the ACP Navigation menu
// Numbers have to be changed in all /adm/*.php files too

// Configuration
$lang['1000_Configuration'] = 'Konfiguration'; // admin_board.php, admin_board_extend.php, admin_board_headers_banners.php, admin_board_main.php, admin_board_permissions.php, admin_board_server.php, admin_board_posting.php, admin_board_queries.php, admin_bots.php, admin_captcha_config.php, admin_google_bot_detector.php, admin_lang_user_created.php, admin_upi2db.php
$lang['100_Server_Configuration'] = 'Server'; // admin_board_server.php
$lang['110_Various_Configuration'] = 'Webbplats'; // admin_board.php
$lang['125_Language'] = 'Anpassad Lang Vars'; // admin_lang_user_created.php
$lang['127_Clear_Cache'] = 'Rensa cache'; // admin_board_clearcache.php
$lang['130_UPI2DB_Mod'] = 'Olästa inlägg'; // admin_upi2db.php
$lang['140_MG_Configuration_Headers_Banners'] = 'Headers &amp; Banners'; // admin_board_headers_banners.php
$lang['145_Captcha_Config'] = 'Visuell bekräftelse'; // admin_captcha_config.php
$lang['150_Similar_topics'] = 'Liknande ämnen'; // admin_similar_topics.php
$lang['160_Title_infos'] = 'Snabb titel administration'; // admin_quick_title.php
$lang['170_LIW'] = 'Begränsad bild bredd'; // admin_liw.php
$lang['190_Spider_Bots'] = 'Spider / Bots'; // admin_bots.php
$lang['192_Google_BOT'] = 'Google Bot Detector'; // admin_google_bot_detector.php
$lang['195_Yahoo_search'] = 'Yahoo sök'; // admin_yahoo_search.php
$lang['200_Language'] = 'Språk'; // admin_lang_extend.php
$lang['210_MG_Quick_Settings'] = 'Snabb inställningar'; // admin_board_quick_settings.php

// General
$lang['1100_General'] = 'Allmänt'; // admin_acronyms.php, admin_autolinks.php, admin_force_read.php, admin_helpdesk.php, admin_liw.php, admin_force_read.php, admin_mass_email.php, admin_megamail.php, admin_notepad.php, admin_quick_title.php, admin_smilies.php, admin_words.php, admin_yahoo_search.php
$lang['100_Acronyms'] = 'Förkortningar'; // admin_acronyms.php
$lang['110_Autolinks'] = 'Autolänkar'; // admin_autolinks.php
$lang['120_Ads'] = 'Annonser &amp; Sponsorer'; // admin_ads.php
$lang['130_Mass_Email'] = 'Mass e-post'; // admin_mass_email.php
$lang['140_Mega_Mail'] = 'Mass e-post / PM'; // admin_megamail.php
$lang['150_FTR_Config'] = 'FTR'; // admin_force_read.php
$lang['160_FTR_Users'] = 'FTR användare'; // admin_force_read.php
$lang['170_Smilies'] = 'Smileys'; // admin_smilies.php
$lang['180_Word_Censor'] = 'Ord censur'; // admin_words.php
$lang['200_Notepad'] = 'Admin notepad'; // admin_notepad.php
$lang['210_Help_Desk'] = 'Help Desk'; // admin_helpdesk.php
$lang['220_Tickets_Emails'] = 'E-post kategorier'; // admin_tickets.php
$lang['230_Custom_BBCodes'] = 'Anpassade BBKoder'; // admin_bbcodes.php
$lang['240_Replace_title'] = 'Ersätt i inlägg'; // admin_replace.php

// Forum
$lang['1200_Forums'] = 'Forum'; // admin_forum_prune.php, admin_forumauth_list.php, admin_forums.php, admin_forums_extend.php, admin_prune_overview.php, admin_topic_shadow.php
$lang['100_Manage'] = 'Administration'; // admin_forums.php
$lang['110_Manage_extend'] = 'Avancerad administration'; // admin_forums_extend.php
$lang['120_Permissions_List'] = 'Behörighets lista'; // admin_forumauth_list.php
$lang['122_Permissions_Adv'] = 'Behörighets ADV'; // admin_forumauth_adv.php
$lang['125_Permissions_Forum'] = 'Behörigheter'; // admin_forumauth.php
$lang['130_Prune'] = 'Beskärning'; // admin_forum_prune.php
$lang['140_Prune_Overview'] = 'Beskärning översikt'; // admin_prune_overview.php
$lang['150_Topic_Shadow'] = 'Skugg Ämnen'; // admin_topic_shadow.php

// eXtreme Styles
$lang['1300_Extreme_Styles'] = 'Stilar &amp; Mallar'; // xs_include.php -> $module_name

// DB Maintenance & Security
$lang['1400_DB_Maintenance'] = 'DB Och Säkerhet'; // admin_bb_db.php, admin_db_generator.php, admin_db_maintenance.php, admin_db_utilities.php, admin_logs.php
$lang['100_Actions_LOG'] = 'Åtgärds logg'; // admin_logs.php
$lang['110_DB_Admin'] = 'IP MySQLAdmin'; // admin_bb_db.php
$lang['120_Backup_DB'] = 'DB Backup'; // admin_db_utilities.php, admin_db_backup
$lang['130_Restore_DB'] = 'DB återställning'; // admin_db_utilities.php, admin_db_backup
$lang['135_Restore_DB'] = 'DB återställning från fil'; // admin_db_utilities.php
$lang['140_Optimize_DB'] = 'Optimera databas'; // admin_db_utilities.php
$lang['150_DB_Maintenance'] = 'Databasunderhåll'; // admin_db_maintenance.php
$lang['170_db_update_generator'] = 'DB uppdaterings generator'; // admin_db_generator.php
$lang['180_msqd'] = 'MySQLDumper'; // admin_msqd.php

// News
$lang['1600_News_Admin'] = 'Nyheter'; // admin_news.php, admin_news_cats.php, admin_xs_news.php, admin_xs_news_xml.php
$lang['100_News_Config'] = 'Nyhets konfiguration'; // admin_news.php
$lang['110_News_Cats'] = 'Nyhets kategorier'; // admin_news_cats.php
$lang['120_XS_News_Config'] = 'Nyhets ticker konfiguration'; // admin_xs_news.php
$lang['130_XS_News'] = 'Nyhets Ticker artiklar'; // admin_xs_news.php
$lang['140_XS_News_Tickers'] = 'Nyhets ticker'; // admin_xs_news_xml.php

// Users
$lang['1610_Users'] = 'Användare'; // admin_account.php, admin_disallow.php, admin_email_list.php, admin_jr_admin.php, admin_postcount.php, admin_priv_msgs.php, admin_profile_fields.php, admin_ranks.php, admin_ug_auth.php, admin_user_ban.php, admin_user_bantron.php, admin_user_register.php, admin_user_search.php, admin_userlist.php, admin_users.php, admin_voting.php
$lang['100_Jr_Admin'] = 'Junior Admin'; // admin_jr_admin.php
$lang['110_Manage'] = 'Hantera'; // admin_users.php
$lang['113_Permissions_Users'] = 'Behörigheter'; // admin_ug_auth.php
$lang['116_CMS_Permissions_Users'] = 'CMS Behörigheter'; // admin_cms_auth.php
$lang['120_Ranks'] = 'Värderingar'; // admin_ranks.php
$lang['130_Userlist'] = 'Användarlista'; // admin_userlist.php
$lang['140_Email_List'] = 'E-post lista'; // admin_email_list.php
$lang['150_Private_Messages'] = 'Privata Meddelanden'; // admin_priv_msgs.php
$lang['160_Account_active'] = 'Aktiva konton'; // admin_account.php
$lang['170_Account_inactive'] = 'Inaktiva konton'; // admin_account.php
$lang['180_Add_New_User'] = 'Lägg till ny användare'; // admin_user_register.php
$lang['190_Prune_users'] = 'Prune användare'; // admin_prune_users.php
$lang['200_Disallow'] = 'Hindra Aanvändarnamn'; // admin_disallow.php
$lang['210_Ban_Management'] = 'Bannlys användare'; // admin_user_ban.php
$lang['220_Bantron'] = 'Bantron'; // admin_user_bantron.php
$lang['250_Postcount_Config'] = 'Redigera posträkning'; // admin_postcount.php
$lang['260_CPF_Add'] = 'Lägg till anpassat profil fält'; // admin_profile_fields.php
$lang['270_CPF_Edit'] = 'Redigera anpassade profil fält'; // admin_profile_fields.php
$lang['280_User_Search'] = 'Utökad användar sökning'; // admin_user_search.php
$lang['290_Poll_Results'] = 'Undersöknings resultat'; // admin_voting.php
$lang['300_Picscount_Config'] = 'Sync bild räkning'; // admin_postcount.php

// Groups
$lang['1620_Groups'] = 'Grupper'; // admin_color_groups.php, admin_groups.php, admin_ug_auth.php
$lang['110_Manage_Groups'] = 'Hantera Grupper'; // admin_groups.php
$lang['120_Color_Groups'] = 'Färg Grupper'; // admin_color_groups.php
$lang['130_Permissions_Group'] = 'Behörigheter'; // admin_ug_auth.php

// Topic Rating
$lang['1700_Topic_Rating'] = 'Ämnes Klassificering'; // admin_rate.php

// Knowledge Base
$lang['1800_KB_title'] = 'Kunskapsbas'; // admin_kb_art.php, admin_kb_auth.php, admin_kb_cat.php, admin_kb_config.php, admin_kb_custom.php, admin_kb_rebuild_search.php, admin_kb_types.php
$lang['100_KB_Configuration'] = 'Konfiguration'; // admin_kb_config.php
$lang['110_Art_man'] = 'Artikel administration'; // admin_kb_art.php
$lang['120_Cat_man'] = 'Kategorier administration'; // admin_kb_cat.php
$lang['130_Types_man'] = 'Artikel typer'; // admin_kb_types.php
$lang['140_Custom_Field'] = 'Anpassade fält'; // admin_kb_custom.php
$lang['150_Permissions'] = 'Behörigheter'; // admin_kb_auth.php
$lang['160_Optimize_tables'] = 'Optimera Tabeller'; // admin_kb_rebuild_search.php

// Attachments
$lang['1900_Attachments'] = 'Bilagor'; // admin_attach_cp.php, admin_attachments.php, admin_extensions.php
$lang['100_Control_Panel'] = 'Kontroll panel'; // admin_attach_cp.php
$lang['110_Att_Manage'] = 'Administration'; // admin_attachments.php
$lang['120_Quota_limits'] = 'Kvot begränsning'; // admin_attachments.php
$lang['130_Shadow_attachments'] = 'Skugg bilagor'; // admin_attachments.php
$lang['140_Sync_attachments'] = 'Synkronisera bilagor'; // admin_attachments.php
$lang['150_Extension_control'] = 'Förlängnings kontroll'; // admin_extensions.php
$lang['160_Extension_group_manage'] = 'Hantera förlängnings grupper'; // admin_extensions.php
$lang['170_Forbidden_extensions'] = 'Förbjudna förlängningar'; // admin_extensions.php
$lang['180_Special_categories'] = 'Särskilda kategorier'; // admin_attachments.php

// Downloads
$lang['2000_Downloads'] = 'Nerladdningar'; // admin_pa_catauth.php, admin_pa_category.php, admin_pa_custom.php, admin_pa_fchecker.php, admin_pa_file.php, admin_pa_license.php, admin_pa_settings.php
$lang['100_Settings'] = 'Konfiguration'; // admin_pa_settings.php
$lang['110_Cat_manage_title'] = 'Hantera kategorier'; // admin_pa_category.php
$lang['120_File_manage_title'] = 'Hantera filer'; // admin_pa_file.php
$lang['130_Fchecker'] = 'Fil kontrollerare'; // admin_pa_fchecker.php
$lang['140_Mfieldtitle'] = 'Anpassade fält'; // admin_pa_custom.php
$lang['150_License_title'] = 'Hantera licenser'; // admin_pa_license.php
$lang['160_Permissions'] = 'Behörigheter'; // admin_pa_catauth.php

// Downloads
$lang['2050_Downloads'] = 'Ladda ner ADV'; // admin_pa_catauth.php, admin_pa_category.php, admin_pa_custom.php, admin_pa_fchecker.php, admin_pa_file.php, admin_pa_license.php, admin_pa_settings.php
$lang['100_DL_Settings'] = 'Konfiguration'; // admin_pa_settings.php

// Links
$lang['2100_Links'] = 'Länkar'; // admin_links.php, admin_links_cat.php, admin_links_config.php
$lang['100_Configuration'] = 'Konfiguration'; // admin_links_config.php
$lang['110_Category'] = 'Hantera kategorier'; // admin_links_cat.php
$lang['120_Add_new'] = 'Lägg till länk'; // admin_links.php
$lang['130_Link_Manage'] = 'Hantera länkar'; // admin_links.php

// Album
$lang['2200_Photo_Album'] = 'Foto Album'; // admin_album_auth.php, admin_album_cat.php, admin_album_config_extended.php
$lang['110_Album_Config'] = 'Konfiguration'; // admin_album_config_extended.php
$lang['120_Album_Categories'] = 'Hantera Kategorier'; // admin_album_cat.php
$lang['130_Album_Permissions'] = 'Behörigheter'; // admin_album_auth.php
$lang['140_Personal_Galleries'] = 'Personliga Gallerier'; // admin_album_personal.php

// FAQ
$lang['2300_FAQ'] = 'FAQ & Regler'; // admin_faq_editor.php
$lang['110_FAQ_BBCode'] = 'BBKod FAQ'; // admin_faq_editor.php
$lang['120_FAQ_Board'] = 'Webbplats FAQ'; // admin_faq_editor.php
$lang['130_FAQ_Rules'] = 'Webbplats regler'; // admin_faq_editor.php

// INFO
$lang['2400_INFO'] = 'Info'; // admin_logs.php, admin_phpinfo.php, admin_gd_info.php, admin_referrers.php, admin_google_bot_detector.php
$lang['110_Actions_LOG'] = 'Åtgärds logg'; // admin_logs.php
$lang['120_PHP_INFO'] = 'PHP info'; // admin_phpinfo.php
$lang['130_GD_Info'] = 'GD info'; // admin_gd_info.php
$lang['140_HTTP_REF'] = 'HTTP referrers'; // admin_referrers.php
$lang['150_Google_BOT'] = 'Google Bot Detector'; // admin_google_bot_detector.php

// STATS
$lang['2500_STATS'] = 'Statistik'; // admin_statistics.php

// CRACKER/TRACKER
$lang['2600_CRACKERTRACKER'] = 'Cracker Tracker'; // admin_cracker_tracker.php

// Plugins
$lang['3000_Plugins'] = 'Plugins'; // admin_plugins.php
$lang['100_Plugins_Modules'] = 'Plugins Moduler'; // admin_plugins.php

// Cash
$lang['3100_CASH'] = 'Cash / Poäng'; // admin_cash.php
$lang['110_Cash_Admin'] = 'Cash Hantering'; // admin_cash.php
$lang['120_Cash_Help'] = 'Hjälp'; // admin_cash.php

// Activity
$lang['3200_ACTIVITY'] = 'Aktivitet / Spel'; // admin_activity.php, admin_ina_ban.php, admin_ina_bulk_add.php, admin_ina_category.php, admin_ina_disable.php, admin_ina_in_un.php, admin_ina_mass.php, admin_ina_xtras.php
$lang['105_DB_Adjustments'] = 'Installera / Avinstallera'; // admin_ina_in_un.php
$lang['110_Configuration'] = 'Konfiguration'; // admin_activity.php
$lang['120_Add_Game'] = 'Lägg till spel'; // admin_activity.php
$lang['130_Edit_Games'] = 'Redigera spel'; // admin_activity.php
$lang['140_User_Ban'] = 'Bannlys användare'; // admin_ina_ban.php
$lang['150_Bulk_Add_Games'] = 'Bulk lägg till spel'; // admin_ina_bulk_add.php
$lang['160_Category'] = 'Hantering kategorier'; // admin_ina_category.php
$lang['170_Char_Settings'] = 'Tecken inställningar'; // admin_ina_char.php
$lang['180_Hide_Show_Games'] = 'Visa/Dölj Spel'; // admin_ina_disable.php
$lang['200_Mass_Change'] = 'Mass konfiguration'; // admin_ina_mass.php
$lang['210_Scores_Editor'] = 'Redigera Hi-Scores'; // admin_ina_scores.php
$lang['220_Xtras'] = 'Extra inställningar'; // admin_ina_xtras.php
$lang['230_Check_Games'] = 'Spel lista'; // admin_ina_xtras.php

// ####################### [ ACP Navigation END ] #######################

?>