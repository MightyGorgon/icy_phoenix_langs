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
	'General' => 'Allm�nt Admin',
	'Users' => 'Anv�ndare Admin',
	'Groups' => 'Grupp Admin',
	'Forums' => 'Forum Admin',
	'Styles' => 'Stilar Admin',

	'Configuration' => 'Inst�llningar',
	'Various_Configuration' => 'Olika Inst�llningar',
	'Permissions' => 'Beh�righeter',
	'Manage' => 'Administration',
	'manage' => 'Administration',
	'Disallow' => 'Hindra namn',
	'Prune' => 'Besk�rning',
	'Mass_Email' => 'Mass E-epost',
	'Ranks' => 'Rang',
	'Smilies' => 'Smileys',
	'Ban_Management' => 'Bannlysnings Kontroll',
	'Word_Censor' => 'Ord Censurerare',
	'Export' => 'Exportera',
	'Create_new' => 'Skapa',
	'Add_new' => 'L�gg till',
	'Backup_DB' => 'Backup Databas',
	'Restore_DB' => '�terst�ll Databas',
	'DB_Maintenance' => 'Databas Verktyg',
	'News_Admin' => 'Nyheter',
	'News_Cats' => 'Nyhets Kategorier',
	'News_Config' => 'Nyhets Konfiguration',
	'Security' => 'S�kerhet',
	'Member_Tries' => 'Medlem F�rs�ker',
	'Quick_Search' => 'Snabb S�kning',
	'Special' => 'Special',
	'Styles_Management' => 'Stil Administration',
	'Manage_Bots' => 'Bots Administration',
	'Admin_Notepad' => 'Anteckningar',

// Index
	'Admin' => 'Administration',
	'Not_admin' => 'Du har inte beh�righet att administrera detta forum',
	'Welcome_phpBB' => 'V�lkommen till Icy Phoenix',
	'Admin_intro' => 'Tack f�r att du v�ljer Icy Phoenix som din forum l�sning. Den h�r sk�rmen ger dig en snabb �verblick av alla olika statistik f�r dit forum. Du kan komma tillbaka till denna sida genom att klicka p� <u>Admin Index</u>  l�nken i den v�nstra rutan. F�r att �terg� till Index i ditt forum, klicka p� Forum ocks� i den v�nstra rutan . Genom de �vriga l�nkarna p� v�nster sida av den h�r sk�rmen kan du kontrollera alla aspekter av ditt forums erfarenhet. Varje sk�rm kommer att ha anvisningar om hur du anv�nder de verktygen.',
	'PayPalInfo' => 'Icy Phoenix �r en �ppen k�lla projekt, om ni �r intresserade av att bidra till dess utveckling kan du anv�nda l�nken nedan.',
	'Forum_stats' => 'Sido Statistik',
	'Admin_Index' => 'Admin Index',
	'Preview_forum' => 'F�rhandsgranska Forum',
	'Click_return_admin_index' => 'Klicka %sH�r%s f�r att �terg� till Admin Index',
	'Portal' => 'Hemsida',
	'Preview_Portal' => 'F�rhandsgranska Hemsida',
	'Main_index' => 'Forum',

	'Statistic' => 'Statistik',
	'Value' => 'V�rde',
	'Number_posts' => 'Antal Inl�gg',
	'Posts_per_day' => 'Inl�gg per dag',
	'Number_topics' => 'Antal �mnen',
	'Topics_per_day' => '�mnen per dag',
	'Number_users' => 'Antal anv�ndare',
	'Users_per_day' => 'Anv�ndare per dag',
	'Board_started' => 'Forum startade',
	'Avatar_dir_size' => 'Avatar katalogens storlek',
	'Database_size' => 'Databas storlek',
	'Gzip_compression' => 'Gzip komprimering',
	'Not_available' => 'Ej tillg�nglig',

	'ON' => 'P�', // This is for GZip compression
	'OFF' => 'AV',

// DB Utils
	'Database_Utilities' => 'Databas Anv�ndbarhet',

	'Restore' => '�terst�ll',
	'Backup' => 'Backup',
	'Restore_explain' => 'Detta kommer att g�ra en fullst�ndig �terst�llning av alla Icy Phoenix tabeller fr�n en sparad fil. Om din server st�der det, kan du ladda upp en GZip-komprimerad text fil och den kommer automatiskt att expanderas. <b>VARNING</b>: Detta kommer att skriva �ver n�gon befintlig data. �terst�llningen kan ta l�ng tid att bearbeta, s� du f�r inte g� ifr�n denna sida tills den �r klar.',
	'Backup_explain' => 'H�r kan du s�kerhetskopiera alla dina webbplatsinriktade uppgifter. Om du har n�gra ytterligare anpassade tabeller i samma databas med Icy Phoenix som du vill s�kerhetskopiera samt anger deras namn, �tskilda med kommatecken, i Ytterligare tabellers textruta nedan. Om din server st�der det kan du �ven gzip-komprimera filen f�r att minska dess storlek innan nedladdning.',

	'Backup_options' => 'Backup alternativ',
	'Start_backup' => 'Starta Backup',
	'Full_backup' => 'Full backup',
	'Structure_backup' => 'Enbart-Struktur backup',
	'Data_backup' => 'Enbart Data backup',
	'Additional_tables' => 'Ytterligare tabeller',
	'phpBB_only' => 'Enbart Icy Phoenix relaterade tabeller',
	'Gzip_compress' => 'Gzip komprimerings fil',
	'Select_file' => 'V�lj en fil',
	'Start_Restore' => 'Starta �terst�llning',

	'Restore_success' => 'Databasen har �terst�llts successfullt.<br /><br />Ditt forum ska tillbaka till samma tillst�nd som den var n�r s�kerhetskopian gjordes.',
	'Backup_download' => 'Din nedladdningen b�rjar inom kort; v�nligen V�nta tills den b�rjar.',
	'Backups_not_supported' => 'Tyv�rr, men databas backupen st�ds inte f�r n�rvarande av ditt databassystemet.',

	'Restore_Error_uploading' => 'Error vid uppladdning av backup filen',
	'Restore_Error_filename' => 'Filnamn problem; v�nligen prova en alternativ fil',
	'Restore_Error_decompress' => 'Det g�r inte att dekomprimera en gzip fil, v�nligen ladda upp en vanlig text version',
	'Restore_Error_no_file' => 'Ingen fil har lagts upp',

// Auth pages
	'Select_a_User' => 'V�lj en Anv�ndare',
	'Select_a_Group' => 'V�lj en Grupp',
	'Select_a_Forum' => 'V�lj ett Forum',
	'Auth_Control_User' => 'Anv�ndares Beh�righets Kontroll',
	'Auth_Control_Group' => 'Grupp Beh�righets Kontroll',
	'Auth_Control_Forum' => 'Forum Beh�righets Kontroll',
// Start add Permission List
	'Auth_list_Control_Forum' => 'Alla Forums Beh�righets Kontroll',
// End add Permission List
	'Look_up_User' => 'L�s upp Anv�ndare',
	'Look_up_Group' => 'L�s upp Grupp',
	'Look_up_Forum' => 'L�s upp Forum',

	'Group_auth_explain' => 'H�r kan du �ndra beh�righeter och moderator status tilldelade till varje anv�ndargrupp. Gl�m inte att vid byte av grupp beh�righeter att enskilda anv�ndares beh�righeter kan fortfarande till�ta anv�ndaren intr�de till forum, etc. Du kommer att varnas om detta �r fallet.',
	'User_auth_explain' => 'H�r kan du �ndra beh�righeter och moderator status som tilldelats varje enskild anv�ndare. Gl�m inte vid byte av anv�ndare beh�righeter att grupp beh�righeter fortfarande kan till�ta anv�ndaren intr�de till forum, etc. Du kommer att varnas om detta �r fallet.',
	'Forum_auth_explain' => 'H�r kan du �ndra tillst�nds niv�er p� varje forum. Du kommer att ha b�de en enkel och avancerad metod f�r att g�ra detta, d�r avancerad ger st�rre kontroll �ver varje forum drift. Kom ih�g att �ndring av beh�righetsniv� i forum kommer att p�verka vilka anv�ndare som kan utf�ra de olika arbetsuppgifterna inom dem.',
// Start add Permission List
	'Forum_auth_list_explain' => 'H�r kan du �ndra tillst�nds niv�er i varje forum. Kom ih�g att �ndring av beh�righetsniv� i forum kommer att p�verka vilka anv�ndare som kan utf�ra de olika arbetsuppgifterna inom dem.',
// End add Permission List

	'Simple_mode' => 'Enkelt Mode',
	'Advanced_mode' => 'Avancerad Mode',
	'Moderator_status' => 'Moderator status',

	'Allowed_Access' => 'Till�ten �tkomst',
	'Disallowed_Access' => '�tkomst Nekad',
	'Is_Moderator' => '�r Moderator',
	'Not_Moderator' => 'Ej Moderator',

	'Conflict_warning' => 'Tillst�nd Konflikt Varning',
	'Conflict_access_userauth' => 'Denna anv�ndare har fortfarande tillg�ngs r�ttigheter till detta forum via gruppmedlemskap. Du kanske vill �ndra gruppens beh�righeter eller ta bort anv�ndaren fr�n gruppen f�r att helt undvika dem att ha tilltr�des r�tt. Grupperna ger r�ttigheter (och forum inblandade) �r noterat nedan.',
	'Conflict_mod_userauth' => 'Denna anv�ndare har fortfarande moderator r�ttigheter till detta forum via gruppmedlemskap. Du kanske vill �ndra gruppens beh�righeter eller ta bort anv�ndaren fr�n gruppen f�r att helt undvika dem att ha moderator r�ttigheter. Grupperna ger r�ttigheter (och forum inblandade) �r noterat nedan.',

	'Conflict_access_groupauth' => 'F�ljande anv�ndare (eller anv�ndare) har fortfarande nyttjander�tt till detta forum via sina anv�ndare beh�righeters inst�llningar. Du kanske vill �ndra deras anv�ndare beh�righeter att helt undvika dem nyttjander�tt. Anv�ndarna ger r�ttigheter (och forum inblandade) �r noterat nedan.',
	'Conflict_mod_groupauth' => 'F�ljande anv�ndare (eller anv�ndare) har fortfarande moderator r�ttigheter till detta forum via sina anv�ndare beh�righeters inst�llningar. Du kanske vill �ndra deras anv�ndare beh�righeter att helt undvika dem att ha moderator r�ttigheter. Anv�ndarna ger r�ttigheter (och forum inblandade) �r noterat nedan.',

	'Public' => 'Offentlig',
	'Private' => 'Privat',
	'Registered' => 'Registrerad',
	'Self' => 'Sj�lv',
	'Administrators' => 'Administrat�rer',
	'Hidden' => 'Dold',

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
	'Forum_NONE' => 'INGEN',
	'Forum_ALL' => 'ALLA',
	'Forum_REG' => 'REG',
	'Forum_SELF' => 'SJ�LV',
	'Forum_PRIVATE' => 'PRIVAT',
	'Forum_MOD' => 'MOD',
	'Forum_JADMIN' => 'J ADMIN',
	'Forum_ADMIN' => 'ADMIN',

	'View' => 'Granska',
	'Read' => 'L�s',
	'Post' => 'Post',
	'Reply' => 'Svar',
	'Edit' => 'Redigera',
	'Delete' => 'Radera',
	'Sticky' => 'Sticky',
	'Announce' => 'Kung�ra',
	'Vote' => 'R�sta',
	'Pollcreate' => 'Skapa Enk�t',

	'Simple_Permission' => 'Enkla Beh�righeter',

	'User_Level' => 'Anv�ndar Niv�',
	'Auth_User' => 'Anv�ndare',
	'Auth_Junior_Admin' => 'Junior Administrat�r',
	'Auth_Admin' => 'Administrat�r',
	'Group_memberships' => 'Anv�ndargrupp Medlemskap (totalt: %d)',
	'Usergroup_members' => 'Denna grupp har f�ljande medlemmar (totalt: %d)',

	'Forum_auth_updated' => 'Forums beh�righeter uppdaterade',
	'User_auth_updated' => 'Anv�ndares beh�righeter uppdaterade',
	'Group_auth_updated' => 'Grupp beh�righeter uppdaterade',

	'Auth_updated' => 'Beh�righeter har blivit uppdaterade',
	'Click_return_userauth' => 'Klicka %sH�r%s f�r att �terg� till Anv�ndare Beh�righeter',
	'Click_return_groupauth' => 'Klicka %sH�r%s f�r att �terg� till Grupp Beh�righeter',
	'Click_return_forumauth' => 'Klicka %sH�r%s f�r att �terg� till Forum Beh�righeter',

// Banning
	'Ban_control' => 'Bannlysnings Kontroll',
	'Ban_explain' => 'H�r kan du kontrollera bannlysning mot anv�ndaren. Du kan uppn� detta genom att bannlysa den ena eller b�da av en viss anv�ndare eller en enskild person eller ett intervall av IP-adresser eller v�rdnamn. Dessa metoder f�rhindrar en anv�ndare fr�n att n� index sidan p� dit forum. F�r att f�rhindra en anv�ndare fr�n att registrera sig under ett annat Anv�ndarnamn kan du �ven ange en f�rbjuden e-postadress. Observera att f�rbjuda en e-postadress inte kommer att hindra anv�ndare fr�n att kunna logga in eller skicka till dit forum. Du ska anv�nda en av de f�rsta tv� metoder f�r att uppn� detta.',
	'Ban_explain_warn' => 'T�nk p� att ange ett intervall av IP-adresser resultat i alla adresser mellan b�rjan och slut n�r de l�ggs till i bannlysningslistan. F�rs�k kommer att g�ras f�r att minimera antalet adresser som l�ggs in i databasen genom att inf�ra jokertecken automatiskt vid behov. Om du verkligen m�ste skriva en rad, f�rs�k att h�lla det litet eller �nnu b�ttre best�mmda specifika adresser.',

	'Select_username' => 'V�lj ett anv�ndarnamn',
	'Select_ip' => 'V�lj en IP adress',
	'Select_email' => 'V�lj en E-post adress',

	'Ban_username' => 'Bannlys en eller flera s�rskilda anv�ndare',
	'Ban_username_explain' => 'Du kan bannlysa flera anv�ndare p� en g�ng med hj�lp av l�mplig kombination av mus och tangentbord f�r din dator och webbl�sare',

	'Ban_IP' => 'Bannlys en eller flera IP-adresser eller v�rdnamn',
	'IP_hostname' => 'IP adresser eller v�rdnamn',
	'Ban_IP_explain' => 'F�r att ange flera olika IP-adresser eller v�rdnamn separera dem med kommatecken. F�r att ange ett intervall av IP-adresser, separera b�rjar och slutet med ett bindestreck (-); f�r att ange ett wildcard, anv�nd en asterisk (*).',

	'Ban_email' => 'Bannlys en eller flera e-postadresser',
	'Ban_email_explain' => 'F�r att ange mer �n en e-postadress, separera dem med kommatecken. F�r att ange ett wildcard anv�ndarnamn anv�nd * som t.ex. *@hotmail.com',

	'Unban_username' => 'Bannlys Ej en eller flera s�rskilda anv�ndare',
	'Unban_username_explain' => 'Du kan Bannlys Ej flera anv�ndare p� en g�ng med hj�lp av l�mplig kombination av mus och tangentbord f�r din dator och webbl�sare',

	'Unban_IP' => 'Bannlys Ej en eller flera IP-adresser',
	'Unban_IP_explain' => 'Du kan Bannlys Ej flera olika IP-adresser p� en g�ng med hj�lp av l�mplig kombination av mus och tangentbord f�r din dator och webbl�sare',

	'Unban_email' => 'Bannlys Ej en eller flera e-postadresser',
	'Unban_email_explain' => 'Du kan Bannlys Ej mer �n en e-postadress p� en g�ng med hj�lp av l�mplig kombination av mus och tangentbord f�r din dator och webbl�sare',

	'No_banned_users' => 'Inga bannlysta anv�ndarnamn',
	'No_banned_ip' => 'Inga bannlysta IP adresser',
	'No_banned_email' => 'Inga bannlysta e-post adresser',

	'Ban_update_sucessful' => 'Denna bannlysningslista har blivit uppdaterad successfullt',
	'Click_return_banadmin' => 'Klicka %sH�r%s f�r att �terg� till Bannlysnings Kontrollen',

// Configuration
	'General_Config' => 'Allm�nn Konfiguration',
	'Config_explain' => '<b>Formul�ret nedan till�ter dig att anpassa alla allm�nna forums alternativ. F�r Anv�ndare och Forum konfiguration, anv�nd de relaterade l�nkarna p� v�nster sida.</b>',

	'Click_return_config' => 'Klicka %sH�r%s f�r att �terg� till Allm�nn Konfiguration',

	'General_settings' => 'Allm�nn Forum Inst�llningar',
	'Server_name' => 'Dom�n Namn',
	'Server_name_explain' => 'Dom�nnamnet ifr�n vilken detta forumet k�rs',
	'Script_path' => 'Script s�kv�g',
	'Script_path_explain' => 'S�kv�gen d�r Icy Phoenix ligger i f�rh�llande till dom�nnamnet',
	'Server_port' => 'Server Port',
	'Server_port_explain' => 'Porten din server k�rs p�, vanligtvis 80. �ndras endast om den �r olika',
	'Site_name' => 'Webbplats namn',
	'Site_desc' => 'Webbplats beskrivning',
	'Board_disable' => 'Avaktivera webbplats',
	'Board_disable_explain' => 'Detta kommer att g�ra webbplatsen otillg�ngligt f�r anv�ndare. Administrat�rer har tillg�ng till Administrations Panelen medan webbplatsen �r otillg�nglig.',
	'Acct_activation' => 'Aktivera kontoaktivering',
	'Acc_None' => 'Ingen', // These three entries are the type of activation
	'Acc_User' => 'Anv�ndare',
	'Acc_Admin' => 'Admin',

	'Abilities_settings' => 'Anv�ndare och Forum Grundl�ggande Inst�llningar',
	'Max_poll_options' => 'Max antal unders�knings alternativ',
	'Flood_Interval' => 'Flood Interval',
	'Flood_Interval_explain' => 'Antalet sekunder en anv�ndare m�ste v�nta mellan sina inl�gg',
	'Board_email_form' => 'Anv�ndar e-post via forum',
	'Board_email_form_explain' => 'Anv�ndare skickar e-post till varandra via detta forum',
	'Topics_per_page' => '�mnen Per Sida',
	'Posts_per_page' => 'Inl�gg Per Sida',
	'Hot_threshold' => 'Inl�gg f�r popul�ra Tr�sklar',
	'Default_style' => 'Standard Stil',
	'Override_style' => 'Skriv �ver anv�ndare stil',
	'Override_style_explain' => 'Ers�tt anv�ndarens stil med standard',
	'Default_language' => 'Standard Spr�k',
	'Date_format' => 'Datum Format',
	'System_timezone' => 'System Tidszon',
	'Enable_gzip' => 'Aktivera GZip Komprimering',
// Start Gzip Compression Level MOD
	'Gzip_level' => 'Gzip Komprimerings Niv�',
	'Gzip_level_explain' => 'H�r kan du �ndra komprimerings niv�n (ett tal mellan 0-9). 0 motsvarar av, 1 �r mycket l�gt, och 9 �r maximum. 9 �r rekommenderat.',
// End Gzip Compression Level MOD
	'Enable_prune' => 'Aktivera Forum Besk�rning',
	'Allow_HTML' => 'Till�t HTML',
	'Allow_BBCode' => 'Till�t BBKoder',
	'Allowed_tags' => 'Till�tna HTML taggar',
	'Allowed_tags_explain' => 'Separera taggar med komma',
	'Allow_smilies' => 'Till�t Smileys',
	'Smilies_path' => 'Smileys Lagrings S�kv�g',
	'Smilies_path_explain' => 'S�kv�g under din Icy Phoenix root dir, t.ex. images/smiles',
	'Allow_sig' => 'Till�t Signaturer',
	'Max_sig_length' => 'Maximal signatur l�ngd',
	'Max_sig_length_explain' => 'Maximalt antal tecken i anv�ndarens signatur',
	'Allow_name_change' => 'Till�t anv�ndarnamns �ndring',

	'Avatar_settings' => 'Avatar Inst�llningar',
	'Allow_local' => 'Aktivera galleri avatars',
	'Allow_remote' => 'Aktivera fj�rr avatars',
	'Allow_remote_explain' => 'Avatars l�nkas fr�n en annan webbplats',
	'Allow_upload' => 'Aktivera avatar uppladdning',
	'Max_filesize' => 'Maximal Avatar Fil Storlek',
	'Max_filesize_explain' => 'F�r uppladdade avatar filer',
	'Max_avatar_size' => 'Maximal Avatar Dimensioner',
	'Max_avatar_size_explain' => '(H�jd x Bredd i pixlar)',
	'Avatar_storage_path' => 'Avatar Lagrings S�kv�g',
	'Avatar_storage_path_explain' => 'S�kv�g under din Icy Phoenix root dir, t.ex. images/avatars',
	'Avatar_gallery_path' => 'Avatar Galleri S�kv�g',
	'Avatar_gallery_path_explain' => 'S�kv�g under din Icy Phoenix root dir f�r f�rinstallerade bilder, t.ex. images/avatars/gallery',

	'COPPA_settings' => 'COPPA Inst�llningar',
	'COPPA_fax' => 'COPPA Fax Nummer',
	'COPPA_mail' => 'COPPA E-post Adress',
	'COPPA_mail_explain' => 'Detta �r den adress som f�r�ldrarna skickar COPPA registreringsformul�r till',

	'Email_settings' => 'E-post Inst�llningar',
	'Admin_email' => 'Admins E-post Adress',
	'Email_sig' => 'E-post Signatur',
	'Email_sig_explain' => 'Denna text kommer att vara bifogad till alla e-postmeddelanden som skickas fr�n forumet',
	'Use_SMTP' => 'Anv�nd SMTP Server f�r e-post',
	'Use_SMTP_explain' => 'S�g ja om du vill eller m�ste skicka e-post via en namngiven server ist�llet f�r den lokala post funktionen',
	'SMTP_server' => 'SMTP Server Adress',
	'SMTP_username' => 'SMTP Anv�ndarnamn',
	'SMTP_username_explain' => 'Ange endast ett anv�ndarnamn om din SMTP server kr�ver det',
	'SMTP_password' => 'SMTP L�senord',
	'SMTP_password_explain' => 'Ange endast ett l�senord om din SMTP server kr�ver det',

	'Disable_privmsg' => 'Privata Meddelanden',
	'Inbox_limits' => 'Max inl�gg i Inkorg',
	'Sentbox_limits' => 'Max inl�gg i Skicka korgen',
	'Savebox_limits' => 'Max inl�gg i Spara korgen',

	'Cookie_settings' => 'Cookie inst�llningar',
	'Cookie_settings_explain' => 'Dessa uppgifter anger hur cookies skickas till din anv�ndares webbl�sare. I de flesta fall b�r standardv�rdena f�r cookie inst�llningar r�cka, men om du beh�ver �ndra dem g�ra det med omsorg - felaktiga inst�llningar kan hindra anv�ndare fr�n att logga in',
	'Cookie_domain' => 'Cookie dom�nn',
	'Cookie_name' => 'Cookie namn',
	'Cookie_path' => 'Cookie s�kv�g',
	'Cookie_secure' => 'Cookie s�kerhet',
	'Cookie_secure_explain' => 'Om din server k�rs via SSL, s�tt detta till aktiverad, annars till avaktiverad',
	'Session_length' => 'Session l�ngd [ sekunder ]',

// Visual Confirmation
	'Visual_confirm' => 'Aktivera Visuell Bekr�ftelse',
	'Visual_confirm_explain' => 'Kr�ver att anv�ndare skriver in en kod som definieras av en bild n�r du registrerar.',

// Autologin Keys - added 2.0.18
	'Allow_autologin' => 'Till�t automatiska inloggningar',
	'Allow_autologin_explain' => 'Anger om anv�ndare har till�telse att v�lja att bli automatiskt inloggad n�r du bes�ker forumet',
	'Autologin_time' => 'Automatisk inloggnings nyckel l�per ut',
	'Autologin_time_explain' => 'Hur l�nge en automatisk inloggnings nyckel �r giltigt i dagar om anv�ndaren inte bes�ker forumet. S�tt till noll f�r att avaktivera utg�ngen.',

// Forum Management
	'Forum_admin' => 'Forum Administration',
	'Forum_admin_explain' => 'L�gga till, radera, redigera, �ter-order och �ter synkronisera kategorier och forum',
	'Edit_forum' => 'Redigera forum',
	'Create_forum' => 'Skapa nytt forum',
	'Create_category' => 'Skapa ny kategori',
	'Remove' => 'Flytta',
	'Action' => '�tg�rd',
	'Update_order' => 'Uppdatera Order',
	'Config_updated' => 'Forum Konfiguration Uppdaterad Successfullt',
	'Move_up' => 'Flytta upp',
	'Move_down' => 'Flytta ner',
	'Resync' => 'Resync',
	'No_mode' => 'Inget mode sattes',
	'Forum_edit_delete_explain' => 'Anpassa alla allm�nna forum alternativ. F�r Anv�ndare och Forum konfigurationer anv�nd relaterade l�nkar till v�nster',

	'Move_contents' => 'Flytta allt inneh�ll',
	'Forum_delete' => 'Radera Forum',
	'Forum_delete_explain' => 'Radera ett forum (eller kategori) och best�mma vart du vill l�gga alla �mnen (eller forum) de inneh�ll.',

	'Status_locked' => 'L�st',
	'Status_unlocked' => 'Ol�st',
	'Forum_settings' => 'Allm�nna Forum Inst�llningar',
	'Forum_name' => 'Forum namn',
	'Forum_desc' => 'Beskrivning',
	'Forum_status' => 'Forum status',
	'Forum_pruning' => 'Auto-besk�rning',

	'prune_freq' => 'Kontrollera �mnes �lder varje',
	'prune_days' => 'Ta bort inl�gg som det inte har postats i',
	'Set_prune_data' => 'Du har aktiverat automatisk prune f�r detta forum men inte st�llt in en frekvens eller antal dagar f�r att rensa bort. G� tillbaka och g�ra det.',

	'FORUM_SIMILAR_TOPICS' => 'Liknande �mnen',
	'FORUM_SIMILAR_TOPICS_EXPLAIN' => 'Om du aktiverar det h�r alternativet ser du en ruta med liknande fr�gor i botten av varje �mne i detta forum (observera att du m�ste �ven g�ra det m�jligt f�r den globala switch f�r den h�r funktionen i Icy Phoenix Inst�llningar => SEO TAB)',
	'FORUM_TOPIC_VIEWS' => '�mnes Betraktare',
	'FORUM_TOPIC_VIEWS_EXPLAIN' => 'Om du aktiverar det h�r alternativet kommer alla anv�ndare att betrakta inl�gg i detta forum att lagras i DB (observera att du m�ste �ven g�ra det m�jligt f�r den globala switch f�r den h�r funktionen i Icy Phoenix Inst�llningar => SQL TAB)',
	'FORUM_TAGS' => 'Forum Taggar',
	'FORUM_TAGS_EXPLAIN' => 'Om du aktiverar det h�r alternativet ser du en box med alla de mest anv�nda orden i detta forum (observera att du m�ste �ven g�ra det m�jligt f�r den globala switch f�r den h�r funktionen i Icy Phoenix Inst�llningar => SEO TAB)',
	'FORUM_SORT_BOX' => '�mnes Sorterings Box',
	'FORUM_SORT_BOX_EXPLAIN' => 'Om du aktiverar det h�r alternativet ser du en ruta d�r du kan alfabetiskt kan sortera �mnen i detta forum (observera att du m�ste �ven g�ra det m�jligt f�r den globala switch f�r den h�r funktionen i Icy Phoenix Inst�llningar)',
	'FORUM_KB_MODE' => 'KB Mode',
	'FORUM_KB_MODE_EXPLAIN' => 'Om du aktiverar det h�r alternativet kommer detta forum att visas i KB Mode (�mnen som �r listade likt Kunskaps Basen)',
	'FORUM_INDEX_ICONS' => 'Index Ikoner',
	'FORUM_INDEX_ICONS_EXPLAIN' => 'Om du aktiverar det h�r alternativet ser du ikoner f�r RSS och Nya �mne i forum Index (observera att du m�ste �ven g�ra det m�jligt f�r den globala switch f�r den h�r funktionen i Icy Phoenix Inst�llningar)',

	'Move_and_Delete' => 'Flytta och Radera',

	'Delete_all_posts' => 'Radera alla poster',
	'Nowhere_to_move' => 'Ingenstans att flytta till',

	'Edit_Category' => 'Redigera Kategori',
	'Edit_Category_explain' => 'Anv�nd detta formul�r f�r att �ndra en kategoris namn.',

	'Forums_updated' => 'Forum och Kategori information uppdaterad successfullt',

	'Must_delete_forums' => 'Du beh�ver ta bort alla forum innan du kan ta bort denna kategori',

	'Click_return_forumadmin' => 'Klicka %sH�r%s f�r att �terg� till Forum Administration',

// Smiley Management
	'smiley_title' => 'Smiles Redigerings Anv�ndbarhet ',
	'smile_desc' => 'L�gg till, ta bort och redigera emotikoner eller smileys som dina anv�ndare kan anv�nda i sina inl�gg och privata meddelanden.',

	'smiley_config' => 'Smiley Konfiguration',
	'smiley_code' => 'Smiley Kod',
	'smiley_url' => 'Smiley Bild Fil',
	'smiley_emot' => 'Smiley Emotion',
	'smile_add' => 'L�gg till en ny Smiley',
	'Smile' => 'Smile',
	'Emotion' => 'Emotion',

	'Select_pak' => 'V�lj Paket (.pak) Fil',
	'replace_existing' => 'Ers�tt Befintlig Smiley',
	'keep_existing' => 'Beh�ll Befintlig Smiley',
	'smiley_import_inst' => 'Du ska packa upp smiley paket och l�gga upp alla filer till l�mplig Smiley katalog f�r installationen. V�lj sedan r�tt information i detta formul�r f�r att importera smiley paket.',
	'smiley_import' => 'Smiley Paket Import',
	'choose_smile_pak' => 'V�lj ett Smile Paket .pak fil',
	'import' => 'Importera Smileys',
	'smile_conflicts' => 'Vad b�r g�ras i h�ndelse av konflikter',
	'del_existing_smileys' => 'Ta bort befintliga smileys f�re import',
	'import_smile_pack' => 'Importera Smiley Paket',
	'export_smile_pack' => 'Skapa Smiley Paket',
	'export_smiles' => 'F�r att skapa ett smiley paket fr�n dina nuvarande installerade smileys, klicka %sH�r%s f�r att ladda ner smiles.pak filen. Namnde den h�r filen med n�got l�mpligt namn och se till att beh�lla .pak fil till�gget. Skapa sedan en zip-fil som inneh�ller alla dina smiley bilder plus denna .pak konfigurations fil.',

	'smiley_add_success' => 'Smiley var successfullt tillagd',
	'smiley_edit_success' => 'Smiley var successfullt uppdaterad',
	'smiley_import_success' => 'Smiley Paket var importerat successfullt!',
	'smiley_del_success' => 'Smiley var successfullt f�rflyttad',
	'Click_return_smileadmin' => 'Klicka %sH�r%s f�r att �terg� till Smiley Administration',

// User Management
	'User_admin' => 'Anv�ndar Administration',
	'User_admin_explain' => '�ndra dina anv�ndares information och vissa alternativ. F�r att �ndra anv�ndarens beh�righeter, v�nligen anv�nd anv�ndarens och grupp beh�righets systemet.',

	'Look_up_user' => 'L�s upp anv�ndare',

	'Admin_user_fail' => 'Kunde inte uppdatera anv�ndarens profil.',
	'Admin_user_updated' => 'Anv�ndarens profil var successfullt uppdaterad.',
	'Click_return_useradmin' => 'Klicka %sH�r%s f�r att �terg� till Anv�ndar Administration',
//Start Quick Administrator User Options and Information MOD
	'Click_return_userprofile' => 'Klicka %sH�r%s f�r att �terg� till anv�ndarens profil',
//End Quick Administrator User Options and Information MOD
	'User_delete' => 'Radera denna anv�ndare',
	'User_delete_explain' => 'Klicka h�r f�r att radera denna anv�ndare; <u><em>g�r inte att �ngra.</em></u>',
	'User_deleted' => 'Anv�ndare var successfullt raderad.',

	'User_status' => 'Anv�ndare �r aktiv',
	'User_allowpm' => 'Kan skicka Privata Meddelanden',
	'User_allowavatar' => 'Kan visa avatar',

	'Admin_avatar_explain' => 'Se och ta bort anv�ndarens nuvarande avatar.',

	'User_special' => 'S�rskilt endast-admin f�lt',
	'User_special_explain' => 'Dessa f�lt kan inte �ndras av anv�ndare. H�r kan du st�lla in deras status och andra alternativ som inte ges till anv�ndare.',

// Group Management
	'Group_administration' => 'Grupp Administration',
	'Group_admin_explain' => 'Administrera alla dina anv�ndargrupper. Du kan ta bort, skapa och redigera befintliga grupper. Du kan v�lja moderatorer, v�xla �ppen/sluten grupp och ange gruppens namn och beskrivning',
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
	'group_open' => '�ppen grupp',
	'group_closed' => 'St�ngd grupp',
	'group_hidden' => 'Dold grupp',
	'group_delete' => 'Radera grupp',
	'group_delete_check' => 'Radera denna grupp',
	'submit_group_changes' => 'Skicka �ndringar',
	'reset_group_changes' => '�terst�ll �ndringar',
	'No_group_name' => 'Du m�ste ange ett namn f�r denna grupp',
	'No_group_moderator' => 'Du m�ste ange en moderator f�r denna grupp',
	'No_group_mode' => 'Du m�ste ange en mode f�r denna grupp, �ppen eller st�ngd',
	'No_group_action' => 'Ingen �tg�rd angavs',
	'delete_group_moderator' => 'Radera den gamla grupp moderatororn?',
	'delete_moderator_explain' => 'Om du �ndrar grupp moderator, markera den h�r rutan f�r att ta bort den gamla moderatorn fr�n gruppen.  Annars, markera inte rutan, och anv�ndaren kommer att bli en vanlig medlem i gruppen.',
	'Click_return_groupsadmin' => 'Klicka %sH�r%s f�r att �terg� till Grupp Administration.',
	'Select_group' => 'V�lj en grupp',
	'Look_up_group' => 'L�s upp grupp',

// Prune Administration
	'Forum_Prune' => 'Forum Besk�rning',
	'Forum_Prune_explain' => 'Detta kommer att ta bort ett �mne som inte har lagts upp inom det antal dagar som du v�ljer. Om du inte anger ett antal kommer alla �mnen att tas bort. Det kommer inte att ta bort inl�gg i unders�kningar som fortfarande p�g�r eller kommer det att ta bort meddelanden. Du m�ste ta bort dessa inl�gg manuellt.',
	'Do_Prune' => 'G�r Besk�rning',
	'All_Forums' => 'Alla Forum',
	'Prune_topics_not_posted' => 'Besk�r �mnen med inga svar p� dessa m�nga dagar',
	'Topics_pruned' => '�mnen beskurna',
	'Posts_pruned' => 'Post beskuren',
	'Prune_success' => 'Besk�rning av forums var successfull',

// Word censor
	'Words_title' => 'Ord Censurering',
	'Words_explain' => 'L�gg till, redigera och f�rflytta ord som blir automatiskt censurerade p� dina forum. Dessutom kommer m�nniskor inte vara till�tna att registrera sig med anv�ndarnamn som inneh�ller dessa ord. Jokertecken (*) godtas i ord f�lt. Till exempel, *test* matchar avskyv�rd, testa * skulle matcha tester * test skulle matcha avskyr.',
	'Word' => 'Ord',
	'Edit_word_censor' => 'Redigera ord censur',
	'Replacement' => 'Ers�tter',
	'Add_new_word' => 'L�gg till nytt ord',
	'Update_word' => 'Uppdatera ord censur',

	'Must_enter_word' => 'Du m�ste skriva in ett ord och dess ers�ttare',
	'No_word_selected' => 'Inga ord har valts ut f�r redigering',

	'Word_updated' => 'Det valda ord censurt har successfullt uppdaterat',
	'Word_added' => 'Ord censuret har successfullt blivit tillagd',
	'Word_removed' => 'Det valda ord censuret har successfullt f�rflyttats',

	'Click_return_wordadmin' => 'Klicka %sH�r%s f�r att �terg� till Ord Censor Administration',

// Mass Email
	'Mass_email_explain' => 'H�r kan du e-posta ett meddelande till antingen alla dina anv�ndare eller alla anv�ndare av en viss grupp.  F�r att g�ra detta, kommer en e-post att skickas ut till den administrativa e-post adress med en hemlig kopia som skickas till alla mottagare. Om du e-postar en stor grupp m�nniskor ha t�lamod efter inl�mningen och stoppa inte sidan halvv�gs genom. Det �r normalt f�r en mass e-post att det tar l�ng tid och du kommer att meddelas n�r skriptet har slutf�rt',
	'Compose' => 'Komponera',

	'Recipients' => 'Mottagare',
	'All_users' => 'Alla Anv�ndare',

	'Email_successfull' => 'Ditt meddelande har skickats',
	'Click_return_massemail' => 'Klicka %sH�r%s f�r att �terg� till Mass E-post formul�ret',

// Ranks admin
	'Ranks_title' => 'Rank Administration',
	'Ranks_explain' => 'L�gg till, redigera, visa och ta bort rankningar. Du kan ocks� skapa egna rankningar som kan till�mpas p� en anv�ndare via anv�ndarens administration anl�ggning',

	'Add_new_rank' => 'L�gg till ny rank',

	'Rank_title' => 'Rank Titel',
	'Rank_special' => 'S�tt som Speciell Rank',
	'Rank_minimum' => 'Minsta Inl�gg',
	'Rank_maximum' => 'H�gsta Inl�gg',
	'Rank_image' => 'Rank Bild (I f�rh�llande till Icy Phoenix root s�kv�g)',
	'Rank_image_explain' => 'Anv�nd detta f�r att definiera en liten bild med anknytning till rank',

	'Must_select_rank' => 'Du m�ste v�lja en rank',
	'No_assigned_rank' => 'Ingen s�rskilda rank tilldelad',

	'Rank_updated' => 'Ranken var successfullt uppdaterad',
	'Rank_added' => 'Ranken var successfullt tillagd',
	'Rank_removed' => 'Ranken var successfullt raderad',
	'No_update_ranks' => 'Ranken var successfullt raderad. Men, amv�ndar konton som anv�nder denna rank var inte uppdaterade. Du beh�ver manuellt �terst�lla ranken f�r dessa konton',

	'Click_return_rankadmin' => 'Klicka %sH�r%s f�r att �terg� till Rank Administration',

// Disallow Username Admin
	'Disallow_control' => 'Anv�ndarnamn Otill�tet Kontroll',
	'Disallow_explain' => 'H�r kan du kontrollera anv�ndarnamn som inte f�r anv�ndas. Otill�tna anv�ndarnamn f�r inneh�lla ett jokertecken av *. Observera att du inte kommer att till�tas att ange n�got anv�ndarnamn som redan har registrerats. Du m�ste f�rst ta bort det namnet sedan underk�nna det.',

	'Delete_disallow' => 'Radera',
	'Delete_disallow_title' => 'Ta bort ett Otill�tet Anv�ndarnamn',
	'Delete_disallow_explain' => 'Du kan ta bort ett otill�tet anv�ndarnamn genom att v�lja anv�ndarnamn i listan och klicka radera',

	'Add_disallow' => 'L�gg till',
	'Add_disallow_title' => 'L�gg till ett otill�tet anv�ndarnamn',
	'Add_disallow_explain' => 'Du kan underk�nna ett anv�ndarnamn med hj�lp av jokertecken * f�r att matcha vilket tecken som helst',

	'No_disallowed' => 'Inga Nekade Anv�ndarnamn',

	'Disallowed_deleted' => 'De otill�tna anv�ndarnamnen har blivit successfullt f�rflyttade',
	'Disallow_successful' => 'De otill�tna anv�ndarnamnen har blivit successfullt tillagda',
	'Disallowed_already' => 'Det namn du angav kunde inte till�tas. Det kan redan finns i listan, finns i ord censur, eller en kombination av anv�ndarnamn �r n�rvarande.',

	'Click_return_disallowadmin' => 'Klicka %sH�r%s f�r att �terg� till Otill�tna Anv�ndarnamn Administration',

// Styles Admin
	'Styles_admin' => 'Stil Administration',
	'Styles_explain' => 'L�gg till, ta bort och hantera stilar (mallar och teman) tillg�nglig f�r dina anv�ndare',
	'Styles_addnew_explain' => 'F�ljande lista inneh�ller alla de teman som finns tillg�ngliga f�r mallar du f�r n�rvarande har. De ingredienser som finns p� denna lista har �nnu inte installeras i Icy Phoenix databas. F�r att installera ett tema, bara klicka p� installations l�nken bredvid en post.',

	'Select_template' => 'V�lj en mall',

	'Style' => 'Stil',
	'Template' => 'Mall',
	'Download' => 'Nerladdning',

	'Edit_theme' => 'Redigera Tema',
	'Edit_theme_explain' => 'I formul�ret nedan kan du �ndra inst�llningarna f�r det valda temat',

	'Create_theme' => 'Skapa Tema',
	'Create_theme_explain' => 'Skapa ett nytt tema f�r en viss mall. N�r du l�gger in f�rger (b�r du anv�nda hexadecimal notation) ska du inte inkludera det ursprungliga #, i.e.. CCCCCC �r giltigt, #CCCCCC �r inte',

	'Export_themes' => 'Exportera Teman',
	'Export_explain' => 'exportera tema data f�r en viss mall. V�lj mall i listan nedan och skriptet skapar temats konfigurationsfil och f�rs�ker att spara den till den valda mall katalogen. Om man inte kan spara filen i sig kommer den att ge dig m�jlighet att ladda ner den. F�r att skriptet ksa spara filen m�ste du ge skrivr�ttigheter till webbservern f�r den valda mall katalogen. F�r mer information om detta se Icy Phoenix anv�ndar handbok.',

	'Theme_installed' => 'Det valda temat har installerats successfullt',
	'Style_removed' => 'Den valda stilen har tagits bort fr�n databasen. Att helt ta bort denna stil fr�n datorn m�ste du ta bort l�mplig stil fr�n din mall katalog.',
	'Theme_info_saved' => 'Tema informationen f�r den valda mallen har sparats. Du b�r nu �terl�mna beh�righeterna p� theme_info.cfg (och i till�mpliga fall den valda mall katalogen) till read-only',
	'Theme_updated' => 'Det valda temat har uppdaterats. Du b�r nu exportera de nya tema inst�llningarna',
	'Theme_created' => 'Tema skapat. Du b�r nu exportera tema till tema konfigureringsfilen f�r s�ker f�rvaring eller anv�ndning p� annat h�ll',

	'Confirm_delete_style' => 'Vill du verkligen ta bort den h�r stilen?',

	'Download_theme_cfg' => 'Export�ren kan inte skriva temats informationsfil. Klicka p� knappen nedan f�r att ladda ner den h�r filen med din webbl�sare. N�r du har laddat ner det kan du �verf�ra den till den katalog som inneh�ller mallfiler. Du kan sedan paketera filen f�r distribution eller anv�ndning p� annat h�ll om ni s� �nskar',
	'No_themes' => 'Den mall som du valt har inga teman knutna till sig. F�r att skapa ett nytt tema klicka p� Skapa Nytt l�nken p� v�nster sidas panel',
	'No_template_dir' => 'Kunde inte �ppna mall katalogen. Det kan vara ol�slig f�r webbservern eller kanske inte finns',
	'Cannot_remove_style' => 'Du kan inte ta bort den valda stilen eftersom den f�r n�rvarande �r forumets standard. �ndra standardformatmallen och f�rs�k igen.',
	'Style_exists' => 'Stil namnet du valt finns redan,g� tillbaka och v�lja ett annat namn.',

	'Click_return_styleadmin' => 'Klicka %sH�r%s f�r att �terg� till Stil Administration',

	'Theme_settings' => 'Tema Inst�llningar',
	'Theme_element' => 'Tema Element',
	'Simple_name' => 'Enkelt Namn',
	'Save_Settings' => 'Spara Inst�llningar',

	'Stylesheet' => 'CSS Stylesheet',
	'Stylesheet_explain' => 'Filnamn f�r CSS stylesheet f�r att anv�nda till detta tema.',
	'Background_image' => 'Bakgrunds Bild',
	'Background_color' => 'Bakgrunds F�rg',
	'Theme_name' => 'Tema Namn',
	'Link_color' => 'L�nk F�rg',
	'Text_color' => 'Text F�rg',
	'VLink_color' => 'Bes�kt L�nk F�rg',
	'ALink_color' => 'Aktiv L�nk F�rg',
	'HLink_color' => 'Hover L�nk F�rg',
	'Tr_color1' => 'Tabell Rad F�rg 1',
	'Tr_color2' => 'Tabell Rad F�rg 2',
	'Tr_color3' => 'Tabell Rad F�rg 3',
	'Tr_class1' => 'Tabell Rad Class 1',
	'Tr_class2' => 'Tabell Rad Class 2',
	'Tr_class3' => 'Tabell Rad Class 3',
	'Th_color1' => 'Tabell Header Colour 1',
	'Th_color2' => 'Tabell Header Colour 2',
	'Th_color3' => 'Tabell Header Colour 3',
	'Th_class1' => 'Tabell Header Class 1',
	'Th_class2' => 'Tabell Header Class 2',
	'Th_class3' => 'Tabell Header Class 3',
	'Td_color1' => 'Tabell Cell F�rg 1',
	'Td_color2' => 'Tabell Cell F�rg 2',
	'Td_color3' => 'Tabell Cell F�rg 3',
	'Td_class1' => 'Tabell Cell Class 1',
	'Td_class2' => 'Tabell Cell Class 2',
	'Td_class3' => 'Tabell Cell Class 3',

// Admin Userlist Start
	'Userlist' => 'Anv�ndar lista',
	'Userlist_description' => 'Se en fullst�ndig lista �ver dina anv�ndare och utf�r olika �tg�rder p� dem',

	'Add_group' => 'L�gg till i en Grupp',
	'Add_group_explain' => 'V�lj vilken grupp att l�gga till de valda anv�ndarna i',

	'Open_close' => '�ppen/St�ngd',
	'Active' => 'Aktiv',
	'Group' => 'Grupp(er)',
	'Rank' => 'Rank',
	'Last_activity' => 'Senaste Aktivitet',
	'Never' => 'Aldrig',
	'User_manage' => 'Hantera',
	'Find_all_posts' => 'Hitta Alla Inl�gg',

	'Select_one' => 'V�lj Ett',
	'Ban' => 'Bannlys',
	'Activate_deactivate' => 'Aktivera/Av-aktivera',

	'User_id' => 'Anv�ndar id',
	'User_level' => 'Anv�ndar Niv�',
	'Ascending' => 'Stigande',
	'Descending' => 'Fallande',
	'Show' => 'Visa',
	'All' => 'Alla',

	'Member' => 'Medlem',
	'Pending' => 'Avvaktande',

	'Confirm_user_ban' => '�r du s�ker p� att du vill bannlysa utvalda anv�ndare?',
	'Confirm_user_deleted' => '�r du s�ker p� att du vill radera utvalda anv�ndare?',

	'User_status_updated' => 'Anv�ndares status uppdaterad successfullt!',
	'User_banned_successfully' => 'Anv�ndare bannlyst successfullt!',
	'User_deleted_successfully' => 'Anv�ndare raderad successfullt!',
	'User_add_group_successfully' => 'Anv�ndare tillagd till grupp successfullt!',

	'Click_return_userlist' => 'Klicka %sh�r%s f�r att �terg� till Anv�ndar Lista',
//
// Admin Userlist End

// Version Check
	'Version_up_to_date' => 'Din installation �r aktuell, inga uppdateringar finns tillg�ngliga f�r din version av phpBB.',
	'Version_up_to_date_ip' => 'Inga uppdateringar �r tillg�ngliga f�r din version av Icy Phoenix',
	'Version_not_up_to_date' => 'Din installation fungerar <b>inte</b> tycks vara aktuell. Uppdateringar finns tillg�ngliga f�r din version av phpBB, v�nligen bes�k <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a> f�r att f� den senaste versionen.',
	'Version_not_up_to_date_ip' => 'Uppdateringar finns tillg�ngliga f�r din version av Icy Phoenix, v�nligen bes�k <a href="http://www.icyphoenix.com/" target="_new">Icy Phoenix</a> f�r att f� den senaste versionen.',
	'Latest_version_info' => 'Den senaste tillg�ngliga versionen �r <b>phpBB %s</b>.',
	'Current_version_info' => 'Du k�r <b>phpBB %s</b>.',
	'Connect_socket_error' => 'Det g�r inte att �ppna f�rbindelsen till phpBB Servern, rapporterat fel �r:<br />%s',
	'Connect_socket_error_ip' => 'Det g�r inte att �ppna f�rbindelsen till Icy Phoenix Servern',
	'Socket_functions_disabled' => 'Det g�r inte att anv�nda socket funktioner.',
	'Mailing_list_subscribe_reminder' => 'F�r den senaste informationen om uppdateringar till phpBB, varf�r inte <a href="http://www.phpbb.com/support/" target="_new">prenumerera p� v�r e-postlista</a>.',
	'Version_information' => 'Version Information',
	'Version_not_checked' => 'Versions kontrollen �r f�r tillf�lligt avst�ngd bes�k Icy Phoenix support forum f�r information om nya Icy Phoenix versioner.',

// Advanced Signature Divider Control
	'sig_title' => 'Avancerad Signatur Divider Kontroll',
	'sig_divider' => 'Nuvarande Signatur Divider',
	'sig_explain' => 'Det �r h�r du kan styra vad som skiljer anv�ndarens signatur fr�n sin post',

// Start add - Birthday MOD
	'Birthday_required' => 'Tvinga anv�ndare att l�mna in en f�delsedag',
	'Enable_birthday_greeting' => 'Aktivera f�delsedags h�lsningar',
	'Birthday_greeting_expain' => 'Anv�ndare som har l�mnat in ett f�delse-datum kan ha en f�delsedags h�lsning n�r de bes�ker forumet',
	'Next_birthday_greeting' => 'N�sta f�delsedag popup �r',
	'Next_birthday_greeting_expain' => 'Detta f�lt h�ller reda p� n�sta �r n�r anv�ndaren skall ha en f�delsedags h�lsning',
	'Wrong_next_birthday_greeting' => 'Det medf�ljande f�delsedags popup �ret, var inte giltig, f�rs�k igen',
	'Max_user_age' => 'H�gsta anv�ndare �lder',
	'Min_user_age' => 'Minsta anv�ndare �lder',
	'Birthday_lookforward' => 'F�delsedag att se fram emot',
	'Birthday_lookforward_explain' => 'Antal dagar skriptet b�r blicka fram�t f�r anv�ndare med en f�delsedag',
// End add - Birthday MOD

// Start add - Yellow card admin MOD
	'Max_user_bancard' => 'Maximalt antal varningar',
	'Max_user_bancard_explain' => 'Om en anv�ndare f�r flera gula kort �n denna gr�ns, kommer anv�ndaren att bannlysas',
	'ban_card' => 'Gult kort',
	'ban_card_explain' => 'Anv�ndaren kommer att bannlysas n�r han/hon �r �ver %d gula kort',
	'Greencard' => 'Bannlys Ej Anv�ndare',
	'Bluecard' => 'Post Rapport',
	'Bluecard_limit' => 'Intervall f�r bl�a kort',
	'Bluecard_limit_explain' => 'Meddela moderatorer igen f�r varje x bl�a kort som ges till en post',
	'Bluecard_limit_2' => 'Begr�nsning av bl�a kort',
	'Bluecard_limit_2_explain' => 'F�rsta anm�lan till moderatorer skickas n�r ett inl�gg f�r detta antal bl�a kort',
	'Report_forum' => 'Rapportera forum',
	'Report_forum_explain' => 'V�lj det forum d�r anv�ndarnas rapporter skall postas, anv�ndare M�STE ha minst post/svar tillg�ng till detta forum',

// Start add - Last visit MOD
	'Hidde_last_logon' => 'Dolt senaste inloggnings tid',
	'Hidde_last_logon_expain' => 'Om detta �r inst�llt p� Ja, �r anv�ndare senaste inloggning endast synligt f�r Administrat�rer',
// End add - Last visit MOD
//
// Start add - Online/Offline/Hidden Mod
	'Online_time' => 'Online status tid',
	'Online_time_explain' => 'Antal sekunder en anv�ndare m�ste visas online (anv�nd inte l�gre v�rde �n 60).',
	'Online_setting' => 'Online Status Inst�llning',
	'Online_color' => 'Online text f�rg',
	'Offline_color' => 'Offline text f�rg',
	'Hidden_color' => 'Dold text f�rg',
// End add - Online/Offline/Hidden Mod

// Disallow other admins to delete or edit the first admin MOD
	'L_LISTOFADMINEDIT' => 'Blockerade tillg�ngar till kontot i f�rsta admin',
	'L_LISTOFADMINEDITEXP' => 'I denna f�rteckning finns placerade blockerade tillg�ngar till kontot i f�rsta admin i forumet. Andra Admins har f�rs�kte �ndra profil i f�rsta admin i forumet, f�r att ta bort f�rsta admin eller st�lla honom till en vanlig anv�ndare. En omvandling av profilen och/eller beh�righeter i f�rsta Admin �gde inte rum och var framg�ngsrikt blockerad. Denna lista kan rensas bara av f�rsta admin i forumet igen.',
	'L_LISTOFADMINEDITUSERS' => 'F�rteckning �ver de blockerade tillg�ngarna till f�rsta administrat�rskonto',
	'L_LISTOFADMINTEXT' => 'Framg�ngsrikt blockerade tillg�ngar skedde genom',
	'L_DELETEMSG' => 'Radera poster',
	'L_DELETESUCMSG' => 'Uppgifterna har strukits successfullt',
	'L_ADMINEDITMSG' => 'Du har inte beh�righet att redigera profilen och/eller beh�righeter i f�rsta admin i forumet.<br /><br />Denna d�liga tillg�ng noterades och blev framg�ngsrikt blockerad!',
	'use_thank' => 'Till�t Tacka Inl�gg',
	'Default_avatar' => 'St�ll en standard avatar',
	'Default_avatar_explain' => 'Detta ger anv�ndare som har valt en avatar, en standard en. St�ll in standard avatar f�r g�ster och anv�ndare, och v�lj sedan om du vill att Avatar ska visas f�r registrerade anv�ndare, g�ster, b�da eller inget.',
	'Default_avatar_guests' => 'G�ster',
	'Default_avatar_users' => 'Anv�ndare',
	'Default_avatar_both' => 'B�da',
	'Default_avatar_none' => 'Ingen',

// Start Optimize Database
	'Optimize' => 'Optimera',
	'Optimize_explain' => 'Optimera och ta bort tomma utrymmen fr�n databasen.<br />Denna operation m�ste utf�ras regelbundet s� att din databas �r mer tillf�rlitlig och kan uppr�tth�lla h�gsta hastighet och �r korrekt utf�rd.',
	'Optimize_DB' => 'Optimera Databas',
	'Optimize_Enable_cron' => 'Aktivera Cron',
	'Optimize_Cron_every' => 'Cron Varje',
	'Optimize_Cron_every_explain' => 'V�nligen notera att du �ven m�ste aktivera <b>PHP Cron [Global Switch]</b> i <b>Konfigurationen &raquo; Icy Phoenix &raquo; Cron</b>',
	'Optimize_month' => 'M�nad',
	'Optimize_2weeks' => '2 veckor',
	'Optimize_week' => 'Vecka',
	'Optimize_3days' => '3 dagar',
	'Optimize_day' => 'Dag',
	'Optimize_6hours' => '6 timmar',
	'Optimize_hour' => 'Timme',
	'Optimize_30minutes' => '30 minuter',
	'Optimize_20seconds' => '20 sekunder (enbart f�r test)',
	'Optimize_Current_time' => 'Aktuell tid',
	'Optimize_Next_cron_action' => 'N�sta Cron �tg�rd',
	'Optimize_Performed_Cron' => 'Upptr�dande Cron',
	'Optimize_Show_not_optimized' => 'Visa endast tabeller inte optimerade',
	'Optimize_Show_begin_for' => 'Visa endast tabeller som b�rjar p�',
	'Optimize_Configure' => 'Konfigurera',
	'Optimize_Table' => 'Tabell',
	'Optimize_Record' => 'Record',
	'Optimize_Type' => 'Typ',
	'Optimize_Size' => 'Storlek',
	'Optimize_Status' => 'Status',
	'Optimize_CheckAll' => 'Kontrollera Alla',
	'Optimize_UncheckAll' => 'Avmarkera Alla',
	'Optimize_InvertChecked' => 'Invert Kontrollerad',
	'Optimize_return' => 'Klicka %sH�r%s f�r att �terg� till Optimera Databas',
	'Optimize_success' => 'Databasen har blivit successfullt optimerad',
	'Optimize_NoTableChecked' => '<b>Inga</b> Tabeller Kontrollerade',

// End Optimize Database
// Start add - Global announcement MOD
	'Globalannounce' => 'Global Tillk�nnagivning',
// End add - Global announcement MOD

// google bot detector by pukapuka
	'Detector' => 'Google Bot Detector',
	'Detector_Explain' => '',
	'Detector_ID' => '#',
	'Detector_Time' => 'Tid',
	'Detector_Url' => 'Url',
	'Detector_Clear' => 'Rensa Alla',
	'Detector_No_Bot' => 'Ingen Bot Uppt�ckts',
	'Detector_Cleared' => 'Identifiera Information Rensad Successfullt',
	'Click_Return_Detector' => 'Klicka %sH�r%s f�r att �terg� till Detector',

// added to Auto group mod
	'group_count' => 'Antal n�dv�ndiga inl�gg',
	'group_count_max' => 'Antal n�dv�ndiga inl�gg',
	'group_count_updated' => '%d medlemmar har tagits bort, %d medlemmar �r tillagda till den h�r gruppen',
	'Group_count_enable' => 'Anv�ndare som automatiskt l�ggs till n�r meddelanden postas',
	'Group_count_update' => 'L�gg till/Uppdatera nya anv�ndare',
	'Group_count_delete' => 'Radera/Uppdatera gamla anv�ndare',
	'User_allow_ag' => 'Aktivera Auto-Grupp',
	'group_count_explain' => 'N�r anv�ndare har skickat fler inl�gg �n detta v�rde <i>(i n�got forum)</i> d� kommer de att l�ggas till i denna anv�ndargrupp<br/> Detta g�ller endast om "' . $lang['Group_count_enable'] . '" �r aktiverat',

// Start add - Bin Mod
	'Bin_forum' => 'Bin forum',
	'Bin_forum_explain' => 'Anv�nd forum ID dit �mnen kommer att trashed; v�rdet 0 kommer att inaktivera den h�r funktionen. Du b�r �ndra detta forums beh�righeter att till�ta eller inte till�ta �tkomst/visa/posta eller svara f�r anv�ndare.',
// End add - Bin Mod

// Begin Quick Title Edition Mod 1.0.0 by Xavier Olive.
	'Title_infos' => 'Snabb Titel Upplage Administration',
	'Must_select_title' => 'Du m�ste v�lja en snabb titel add-on',
	'Title_updated' => 'Snabb Titel Add-on uppdaterad',
	'Title_added' => 'Snabb Titel Add-on tillagd',
	'Click_return_titleadmin' => 'Klicka %sH�r%s f�r att �terg� till Snabb Titel Administration',
	'Title_removed' => 'Snabb Titel Add-on f�rflyttad',
	'Quick_title_explain' => 'Du kan skapa korta bitar av text som du kommer att kunna l�gga till i titeln p� ett �mne, genom att trycka p� en enda knapp.<br />Om du vill att namnet p� den person som utf�rt �tg�rden att �ndra titeln ska visas, bara l�gg %mod% var du vill att den ska placeras. Exempelvis, [L�nk OK | kontrollerad av %mod%] kommer att visas som [L�nk OK |kontrollerad av ModeratorNamn]. Du kan g�ra det p� exakt samma s�tt genom att infoga datum %date% vart du vill.',
	'Title_head' => 'Snabb Titel Add-on',
	'Title_auth' => 'Beh�righeter',
	'Administrator' => 'Administrat�r',
	'Topic_poster' => '�mnes inl�ggare',
	'Add_new_title_info' => 'L�gg till en Snabb Titel Add-on',
	'Title_perm_info' => 'Beh�righeter',
	'Title_perm_info_explain' => 'Anv�ndare med dessa niv�er kommer att kunna anv�nda den h�r Snabb Titel Add-on',
	'Title_info' => 'Snabb Titel Add-on',
// End Quick Title Edition Mod 1.0.0 by Xavier Olive.

// Limit Image Width MOD
	'Available' => 'Tillg�nglig',
	'Unavailable' => 'Ej Tillg�nglig',
	'LIW_title' => 'Begr�nsa Bild Bredd MOD',
	'LIW_admin_explain' => '�ndra Begr�nsa Bild Bredd MOD p� och av och s�tt den maximala bredden f�r varje bild som �r postad i ditt forum. Om du k�nner att SQL tabellen som innehar de cache lagrade bild dimensionerna av alla bilder som publiceras p� forumet blir f�r stor, kan du t�mma det genom att klicka p� \'T�m cache tabell\' knappen.<br /><br />\'Kompatibilitetskontroll\' boxen nedan indikerar om eller inte om detta MOD kommer att fungera med din server.',
	'LIW_compatibility_checks' => 'Kompatibilitets kontroll',
	'LIW_mod_config' => 'MOD Konfiguration',

	'LIW_config_updated' => 'Begr�nsa Bild Bredd MOD konfiguration har blivit successfullt uppdaterad',
	'LIW_cache_emptied' => 'Cach tabellen har t�mts successfullt',
	'LIW_click_return_config' => 'Klicka %sh�r%s f�r att �terg� till Begr�nsa Bild Bredd MOD konfigurations sidan',

	'LIW_getimagesize' => 'f� bild storleks() URL support',
	'LIW_getimagesize_explain' => 'Tillg�nglig i PHP 4.0.5',
	'LIW_getimagesize_available' => 'Detta MOD �r kompetent till att �terkalla bild dimensioner',
	'LIW_getimagesize_unavailable' => 'Detta MOD kan inte kontrollera om eller inte en bild �r f�r stor, och d�rf�r vill det storleks�ndra <i>vilken som helst</i> postad bild',

	'LIW_urlaware' => 'URL-medvetna fopen omslag',
	'LIW_urlaware_explain' => 'S�tt allow_url_fopen till Ja i din php.ini',
	'LIW_urlaware_available' => 'MOD kan skapa ett fingeravtryck f�r bilder s� att det kan cacha bild dimensioner',
	'LIW_urlaware_unavailable' => 'MOD kan inte skapa ett fingeravtryck av filen, och kan d�rf�r inte cacha bild dimensioner',

	'LIW_openssl' => 'openSSL f�rl�ngning laddar',
	'LIW_openssl_explain' => 'Ladda openssl.dll f�rl�ngning i din php.ini',
	'LIW_openssl_available' => 'MOD i st�nd att h�mta dimensioner fr�n https:// bilder s� att man kan cacha dem',
	'LIW_openssl_unavailable' => 'MOD inte i st�nd att h�mta dimensioner fr�n https:// bilder s� att man inte kan cacha dem',

	'LIW_enable' => '�ndra storlek p� bilder i inl�gg',
	'LIW_enable_explain' => 'St�ll in till %s f�r att till�ta MOD till att �ndra storlek p� bilder i inl�gg', // Set to $lang['Yes'] to ....
	'LIW_sig_enable' => '�ndra storlek p� bilder i signaturer',
	'LIW_sig_enable_explain' => 'St�ll in till %s f�r att till�ta MOD till att �ndra storlek p� bilder i signaturer',
	'LIW_attach_enable' => '�ndra storlek p� bifogade bilder',
	'LIW_attach_enable_explain' => 'St�ll in till %s f�r att till�ta att �ndra storlek p� bilder som �r bifogade till ett inl�gg med hj�lp av Attachment MOD',
	'LIW_max_width' => 'Maximal bildbredd',
	'LIW_max_width_explain' => 'Ange st�rsta bredd (pixlar) p� en bild som postat och anv�nder [img]-taggar',
	'LIW_empty_cache' => 'T�m bild dimensioner cache',
	'LIW_empty_cache_explain' => 'Din cache tabell inneh�ller f�r n�rvarande <b>%s</b> records', // Your cache table currently contains <b>312</b> records
	'LIW_empty_cache_note' => '<b>Notera:</b> T�mmning av cache tabellen kommer att orsaka MOD till att cache alla bild dimensioner igen, vilket kan leda till en tillf�llig nedg�ng vid laddning av ett �mne',
	'LIW_empty_cache_button' => 'T�m cache tabell',

// News
	'xs_news_settings' => 'Nyhets Inst�llningar',
	'xs_news_show' => 'Visa Nyhets Banner?',
	'xs_news_show_ticker' => 'Visa Nyhets Ticker?',
	'xs_news_show_ticker_explain' => 'Detta �r en huvud switch och st�lls den till \'Nej\' stoppas eventuella ticker fr�n att visas, if set to \'Ja\' d� visar den enskilda tickers och kan kontrolleras fr�n deras individuella inst�llningar.',
	'xs_news_show_ticker_subtitle' => 'Visa Ticker undertitel?',
	'xs_news_show_ticker_subtitle_explain' => 'St�ll in den h�r till Ja och detta kommer att visa \'Nyhets Tickers\' ovan nyhets tickers.',
	'xs_news_show_news_subtitle' => 'Visa Nyheters undertitel?',
	'xs_news_show_news_subtitle_explain' => 'St�ll in den h�r till Ja och detta kommer att visa \'Nyhets Poster\' ovan nyhets poster.',
	'xs_news_dateformat' => 'Datum Format',
	'xs_news_dateformat_helper' => 'Anv�nder detta format: %s',

// Bantron Mod : Begin
	'Bantron' => 'Bantron',
	'BM_Title' => 'Bantron',
	'BM_Explain' => 'L�gg till, redigera, visa och ta bort bannlysning p� plats i detta forum.',

	'BM_Show_bans_by' => 'Visa bannlysning av',
	'BM_All' => 'Alla',
	'BM_Show' => 'Visa',

	'BM_IP' => 'IP',
	'BM_Last_visit' => 'Senaste Bes�ket',
	'BM_Banned' => 'Bannlyst',
	'BM_Expires' => 'F�rfaller',
	'BM_By' => 'Av',
	'BM_Reasons' => 'Orsaker',

	'BM_Add_a_new_ban' => 'L�gg till en ny bannlysning',
	'BM_Delete_selected_bans' => 'Radera vald bannlysning',

	'BM_Private_reason' => 'Privat orsak',
	'BM_Private_reason_explain' => 'Detta sk�l f�r att bannlysa anv�ndarnamn, e-post och/eller IP-adresser �r endast f�r administrat�rs syfte.',

	'BM_Public_reason' => 'Offentlig orsak',
	'BM_Public_reason_explain' => 'Detta sk�l f�r att bannlysa anv�ndarnamn, e-post och/eller IP-adresser visas f�r den bannlysta anv�ndarna n�r de f�rs�ker g� in p� forumet.',
	'BM_Generic_reason' => 'Allm�n orsak',
	'BM_Mirror_private_reason' => 'Speglar privata orsaker',
	'BM_Other' => 'Annan',

	'BM_Expire_time' => 'F�rfallo tid',
	'BM_Expire_time_explain' => 'Genom att ange ett datum, antingen i f�rh�llande till dagens datum eller ett definitivt datum, kommer bannlysningar att bli inaktiva efter denna tidpunkt.',
	'BM_Never' => 'Aldrig',
	'BM_After_specified_length_of_time' => 'Efter specificerad l�ngd av viss tid',
	'BM_Minutes' => 'Minut(er)',
	'BM_Hours' => 'Timmar',
	'BM_Days' => 'Dag(ar)',
	'BM_Weeks' => 'Vecka',
	'BM_Months' => 'M�nad(er)',
	'BM_Years' => '�r',
	'BM_After_specified_date' => 'Efter specificerad datum',
	'BM_AM' => 'AM',
	'BM_PM' => 'PM',
	'BM_24_hour' => '24-Timmar',

	'BM_Ban_reasons' => 'Bannlysnings Orsaker',
// Bantron Mod : End

	'board_disable_message' => 'Visa ett meddelande f�r avaktivering av webbplatsen.',
	'board_disable_message_texte' => 'Meddelande som visas n�r webbplatsen �r avaktiverad',

// Start Edit Notes MOD
	'Edit_notes_settings' => 'Redigera Anteckningar Inst�llningar',
	'Edit_notes_enable' => 'Aktivera redigera anteckningar',
	'Edit_notes_enable_explain' => 'Aktivera/inaktivera redigera anteckningar i forumet',
	'Max_edit_notes' => 'H�gsta redigera anteckningar',
	'Max_edit_notes_explain' => 'Ange det h�gsta antalet redigera anteckningar per post.',
	'Edit_notes_permissions' => 'Redigera anteckningar beh�righeter',
	'Edit_notes_permissions_explain' => 'Ange vilka typer av anv�ndare kan anv�nda redigerings anteckningar.',
	'Edit_notes_admin' => 'Enbart Administrat�rer',
	'Edit_notes_staff' => 'Personal (admins och mods)',
	'Edit_notes_reg' => 'Registrerade anv�ndare (admins och mods ocks�)',
	'Edit_notes_all' => 'Alla anv�ndare (g�ster, registrerade anv�ndare, admins, och mods)',
// End Edit Notes MOD

// BEGIN Disable Registration MOD
	'registration_status' => 'Avaktivera registreringar',
	'registration_status_explain' => 'Detta kommer att om�jligg�ra alla nyregistreringar i ditt forum.',
	'registration_closed' => 'Orsak f�r st�ngda registreringar',
	'registration_closed_explain' => 'Ett meddelande som f�rklarar varf�r registreringar �r st�ngda, och visas om en anv�ndare f�rs�ker att registrera. L�mna tomt f�r att visa standard f�rklarings text.',
// END Disable Registration MOD

	'Gender_required' => 'Tvinga anv�ndare att ange sitt k�n',

//admin user list mail
	'Usersname' => 'Anv�ndare Namn',
	'Admin_Users_List_Mail_Title' => 'Lista anv�ndares e-post',
	'Admin_Users_List_Mail_Explain' => 'H�r �r en lista �ver dina anv�ndares e-post',

// Start add - Forum notification MOD
	'Forum_notify' => 'Till�t forum notification',
	'Forum_notify_enabled' => 'Till�t',
	'Forum_notify_disabled' => 'Till�t inte',
// End add - Forum notification MOD

	'Smilie_table_columns' => 'Smileys tabell kolumner',
	'Smilie_table_rows' => 'Smileys tabell rader',
	'Smilie_window_columns' => 'Smileys f�nster kolumner',
	'Smilie_window_rows' => 'Smileys f�nster rader',
	'Smilie_single_row' => 'Smileys enda rad nummer<br /> (I.E.: Snabba Svar smileys antal)',

	'Auth_Rating' => 'V�rdering',

// Gravatars
	'Enable_gravatars' => 'Aktivera gravatars',
	'Gravatar_rating' => 'Gravatar H�gsta betyg',
	'Gravatar_rating_explain' => '<a href="http://www.gravatar.com/rating.php" target="_blank">L�s betygs instruktioner</a> f�r mer information. S�tt till \'Ingen\' f�r ingen begr�nsning.',
	'Gravatar_default_image' => 'Gravatar standard bilden',
	'Gravatar_default_image_explain' => 'Om ingen Gravatar hittades, kommer servern att l�mna tillbaka den h�r bilden. S�kv�g till bilden i f�rh�llande till Icy Phoenix rotkatalog. L�mna tomt f�r ingen bild.',

// Admin Account Actions
	'Account_actions' => 'Konto �tg�rder',
	'Account_inactive_explain' => 'Anv�ndare som �r inaktiva, inv�ntar aktivering eller radering, varje med l�nkar f�r att redigera deras r�ttigheter och/eller profilen.',
	'Account_active_explain' => 'Aktiva medlemmar som kan bli avaktiverade, raderade eller att deras r�ttigheter och/eller profilen kan bli redigerad.',
	'Account_active' => 'Aktiva Anv�ndare',
	'Account_inactive' => 'Inaktiva Anv�ndare',
	'Account_activate' => 'Aktivera markerade',
	'Account_deactivate' => 'Inaktiva markerade',
	'Account_none' => 'Det finns ingen anv�ndare som v�ntar p� en aktivering.',
	'Account_total_user' => 'Anv�ndare: <b>%d</b> anv�ndare',
	'Account_total_users' => 'Antal anv�ndare: <b>%d</b> anv�ndare',
	'Account_activation' => 'Aktiverings metod',
	'Account_awaits' => 'V�ntar p� aktivering sedan',
	'Account_registered' => 'Registrerad sedan',
	'Account_delete_users' => '�r du s�ker p� att du vill ta bort dessa anv�ndare?',
	'Account_delete_user' => '�r du s�ker p� att du vill ta bort denna anv�ndare?',
	'Account_sort_letter' => 'Visa endast konton som b�rjar med',
	'Account_others' => 'andra',
	'Account_all' => 'alla',
	'Account_year' => '�r',
	'Account_years' => '�r',
	'Account_week' => 'vecka',
	'Account_weeks' => 'veckor',
	'Account_day' => 'dag',
	'Account_days' => 'dagar',
	'Account_hour' => 'timme',
	'Account_hours' => 'timmar',
	'Account_user_activated' => 'Anv�ndaren �r aktiverad.',
	'Account_users_activated' => 'Anv�ndarna �r aktiverade.',
	'Account_user_deactivated' => 'Anv�ndaren �r inaktiverad.',
	'Account_users_deactivated' => 'Anv�ndarna �r avaktiverade.',
	'Account_user_deleted' => 'Anv�ndaren �r raderad.',
	'Account_users_deleted' => 'Anv�ndarna �r raderade.',
	'Account_activated' => 'Konto Aktivering',
	'Account_activated_text' => 'Ditt konto �r aktiverat',
	'Account_deactivated' => 'Konto avaktivering',
	'Account_deactivated_text' => 'Ditt konto �r avaktiverat',
	'Account_deleted' => 'Konto borttaget',
	'Account_deleted_text' => 'Ditt konto har raderats',
	'Account_notification' => 'Meddelande e-post skickad.',

// Acronyms
	'Acronyms_title' => 'F�rkortnings Administration',
	'Acronyms_explain' => 'L�gg till, redigera och ta bort f�rkortningar som l�ggs automatiskt till inl�gg p� ditt forum.',
	'Acronym' => 'F�rkortning',
	'Acronyms' => 'F�rkortningar',
	'Edit_acronym' => 'Redigera F�rkortning',
	'Description' => 'Beskrivning',
	'Add_new_acronym' => 'L�gg till ny F�rkortning',
	'Update_acronym' => 'Uppdatera F�rkortning',

	'Must_enter_acronym' => 'Du m�ste ange en f�rkortning och dess beskrivning',
	'No_acronym_selected' => 'Ingen f�rkortning har valts ut f�r att redigera',

	'Acronym_updated' => 'Den valda f�rkortningen har blivit successfullt uppdaterad',
	'Acronym_added' => 'F�rkortningen har blivit successfullt tillagd',
	'Acronym_removed' => 'Den valda f�rkortningen har blivit successfullt f�rflyttad',

	'Click_return_acronymadmin' => 'Klicka %sH�r%s f�r att �terg� till F�rkortnings Administration',
	'Prune_shouts' => 'Auto prune shouts',
	'Prune_shouts_explain' => 'Antal dagar innan shouts skall utg�. Om v�rdet �r satt till 0, autoprune kommer att bli avaktiverat',

	'MOD_OS_ForumRules' => 'Forum Regler',
	'Forum_rules' => 'Forum Regler',
	'Rules_display_title' => 'Visa titel i Forum Regler BOX?',
	'Rules_custom_title' => 'Anpassad titel',
	'Rules_appear_in' => 'Dessa regler visas samtidigt...',
	'Rules_in_viewforum' => 'Visa detta forum',
	'Rules_in_viewtopic' => 'Visa �mnen i detta forum',
	'Rules_in_posting' => 'Postning/Svara p� detta forum',

	'Php_Info_Explain' => 'Denna sida visar information om vilken version av PHP som �r installerad p� servern. Den inneh�ller uppgifter om laddade moduler, tillg�ngliga variabler och standardinst�llningar. Denna information kan vara anv�ndbar vid diagnostiserings problem. T�nk p� att vissa v�rdf�retag begr�nsar vilken information som visas h�r av s�kerhetssk�l. Du b�r inte ge ut n�gon information p� den h�r sidan, utom n�r st�ller fr�gor om support eller n�gon annan Team Medlem i support forumet.',

	'IcyPhoenix_Main' => 'Icy Phoenix Hemsida',
	'IcyPhoenix_Download' => 'Icy Phoenix Nerladdning',
	'IcyPhoenix_Code_Changes' => 'Kod �ndrings Mod',
	'IcyPhoenix_Updates' => 'Icy Phoenix Uppdateringar',
	'PhpBB_Upgrade' => 'phpBB Uppgradering',
	'Header_Welcome' => 'V�lkommen till Icy Phoenix Administration Kontroll Panel',

	'Prune_users' => 'Prune anv�ndare',
	'Prune_Overview' => 'Pruning �versikt',
	'Prune_title_explain' => 'Hantera besk�rnings Inst�llningar p� varje Forum.',
	'Prune_forum' => 'Forum',
	'Prune_active' => 'Besk�rning aktiv',
	'Prune_freq' => 'Flytta alla',
	'Prune_check' => 'Kontrollera alla',
	'Prune_days' => 'Dagar',
	'Prune_days_explain' => '* Ta bort inl�gg som det inte har postats i.',
	'Click_return_admin_po' => '%sKlicka h�r%s, f�r att �terg� till Besk�rnings �versikt',
	'Prune_update' => 'Besk�rnings Inst�llningarna har uppdaterats',

	'Admin_notepad_title' => 'Notepad',
	'Admin_notepad_explain' => 'L�mna globala minneslappar till andra Administrat�rer.',
	'Allow_generator' => 'Aktivera avatar generator',
	'Avatar_generator_template_path' => 'Avatar Generator Mall S�kv�g',
	'Avatar_generator_template_path_explain' => 'S�kv�g under din Icy Phoenix root dir f�r mall bilder, t.ex. images/avatars/generator_templates',

// Start Autolinks Mod
	'Autolink_first' => 'AutoL�nka varje s�kord en g�ng per post',

	'Autolinks_title' => 'Autol�nkar',
	'Autolinks_explain' => 'L�gg till, redigera och ta bort s�kord som automatiskt kommer att ers�ttas med webbadressen i meddelande inl�gget. Om den URL som du anger �r en intern en och pekar p� forum/portal, kryssar du i rutan kommer sessions-ID att l�ggas till l�nken.<br /><br />eg. Om det konstateras, <b>Nyckelord</b> i inl�gget kommer detta att ers�ttas med f�ljande,<br /><br />&lt;a href="<b>Url</b>" title="<b>Kommentar</b>" style="<b>Stil</b>"&gt;<b>Text</b>&lt;/a&gt;',
	'links_keyword' => 'Nyckelord',
	'links_title' => 'Text',
	'links_url' => 'Url',
	'links_comment' => 'Kommentar',
	'links_style' => 'Stil',
	'links_forum' => 'Forum f�r Autol�nk',
	'links_forum2' => 'Forum',
	'links_internal' => 'Intern',
	'Autolinks_add' => 'L�gg till en Autol�nk',
	'Add_keyword' => 'L�gg till Autol�nk',
	'Autolinks_edit' => 'Redigera En Autol�nk',
	'Edit_keyword' => 'Redigera Autol�nk',
// 'Delete_link' => 'Tick box to delete this autolink.',

	'Select_all_forums' => 'Alla Forums',
	'Autolink_added' => 'Autol�nk successfullt tillagd.',
	'Autolink_updated' => 'Autol�nk successfullt uppdaterad.',
	'Autolink_removed' => 'Autol�nk successfullt raderad.',
	'No_autolink_selected' => 'Ingen AutoL�nk valdes f�r radering.',
	'No_autolinks' => 'Det finns inga AutoL�nkar i databasen.',
	'Must_enter_autolink' => 'Du m�ste ange ett s�kord, l�nk text och en url.',
	'Click_return_autolinkadmin' => 'Klicka %sH�r%s f�r att �terg� till Autol�nk Administration',
// End Autolinks Mod

// XS BUILD 030

// Login attempts configuration
	'Max_login_attempts' => 'Till�tna inloggning f�rs�k',
	'Max_login_attempts_explain' => 'Antalet till�tna forum inloggnings f�rs�k.',
	'Login_reset_time' => 'Inloggnings l�s tid',
	'Login_reset_time_explain' => 'Tid i minuter anv�ndaren har att v�nta tills han f�r till�telse att logga in igen efter att ha �verskridit antalet till�tna inloggnings f�rs�k.',

// XS BUILD 035
// Smilies Order
	'position_new_smilies' => 'Ska nya smileys tills�ttas f�re eller efter befintliga smileys?',
	'smiley_change_position' => '�ndra S�tt L�ge',
	'before' => 'F�re',
	'after' => 'Efter',
	'Move_top' => 'Skicka till Topp',
	'Move_end' => 'Skicka till Slut',

// XS BUILD 037
// Pages Auth
	'auth_view_title' => 'Sidvisning Auth',
	'auth_view_portal' => 'Hemsida',
	'auth_view_forum' => 'Forum',
	'auth_view_viewforum' => 'Visa Forum',
	'auth_view_viewtopic' => 'Visa �mne',
	'auth_view_faq' => 'FAQ',
	'auth_view_memberlist' => 'Medlemslista',
	'auth_view_groupcp' => 'Anv�ndargrupper',
	'auth_view_profile' => 'Profil',
	'auth_view_search' => 'S�k',
	'auth_view_album' => 'Album',
	'auth_view_links' => 'L�nkar',
	'auth_view_calendar' => 'Kalender',
	'auth_view_attachments' => 'Bilagor',
	'auth_view_download' => 'Nerladdningar',
	'auth_view_pic_upload' => 'Bild Uppladdning (Posta Icy Bilder)',
	'auth_view_kb' => 'Kunskaps Bas',
	'auth_view_ranks' => 'V�rdering',
	'auth_view_statistics' => 'Statistik',
	'auth_view_recent' => 'Aktuella �mnen',
	'auth_view_referrers' => 'Referrers',
	'auth_view_rules' => 'Regler',
	'auth_view_site_hist' => 'Webbplats Historia',
	'auth_view_shoutbox' => 'Shoutbox',
	'auth_view_viewonline' => 'Visa Online',
	'auth_view_contact_us' => 'Kontakta Oss',
	'auth_view_ajax_chat' => 'Chat',
	'auth_view_ajax_chat_archive' => 'Chat Arkiv',
	'auth_view_custom_pages' => 'Anpassade Sidor',

// Begin Yahoo Submit Your Site MOD by www.pentapenguin.com
	'Yahoo_search' => 'Yahoo S�k',
	'Yahoo_search_settings' => 'Yahoo S�k Inst�llningar',
	'Yahoo_search_settings_explain' => 'Konfigurera inst�llningar f�r Yahoo Skicka Din Webbplats MOD. F�r mer info, v�nligen se <a href="http://submit.search.yahoo.com/free/request" target="_blank">Yahoo Skicka Din Webbplats webbwsida</a>.',
	'Yahoo_search_select_forums' => 'V�lj Forums',
	'Yahoo_search_select_forums_explain' => 'V�lj vilket forum som ska inkluderas i den h�r listan. Du kan v�lja hur m�nga forum du vill genom att klicka p� varje forum namn samtidigt som du h�ller nere Ctrl Key (Windows) eller kommandotangenten (Macintosh). Som standard, �r alla offentliga forum utvalda.',
	'Yahoo_search_savepath' => 'Spara s�kv�g f�r URL listan',
	'Yahoo_search_savepath_explain' => 'Ange en plats f�r URL var noterings filen ska sparas. Ange s�kv�g i f�rh�llande till Icy Phoenix bas s�kv�g - t.ex. Om du sparar filen i cache-katalogen <b>www.yoursite.com/cache/</b>, ange d� <b>cache</b>. Kom ih�g att du beh�ver CHMOD:a katalogen till 755 eller777 som g�ller f�r din server.',
	'Yahoo_search_additional_urls' => 'Ange ytterligare URLs',
	'Yahoo_search_additional_urls_explain' => 'Ange ytterligare URLs du vill att Yahoo ska genoms�ka p�, en per rad. Du m�ste ange den fullst�ndiga URL - t.ex. <b>http://www.yoursite.com/yourpage.html</b>.',
	'Yahoo_search_compress_file' => 'Komprimera listan �ver URLs',
	'Yahoo_search_compress_file_explain' => 'Om du v�ljer Ja f�r det h�r alternativet och att din servre har Gzip support, kommer en f�rteckning �ver webbadresser att komprimerats med GZip som kommer att resultera i en betydligt mindre fil och d�rmed ocks� mindre bandbredd fr�n Yahoo bot.',
	'Yahoo_search_compression_level' => 'Komprimerings niv� f�r fil',
	'Yahoo_search_compression_level_explain' => 'V�lj en komprimerings niv� f�r filen. 9 �r den rekommenderade inst�llningen om du inte st�ter p� problem. Om s� �r fallet b�r du g�ra det v�rdet l�gre.',
	'Yahoo_search_generate_file' => 'Generera Fil',
	'Yahoo_search_error_no_forums' => 'Error: inget forum valt. G� tillbaka och v�lja minst ett forum.',
	'Yahoo_search_error_no_gzip' => 'Error: troligtvis anv�nder du en gammal version av PHP eller har din webb v�rd inte n�gon support f�r Gzip. V�nligen g� tillbaka och v�lj <b>Nej</b> f�r <b>Komprimerings listan �ver URLs</b> alternativen.',
	'Yahoo_search_error_unopenable_file' => 'Error: kan inte �ppna filen %s.',
	'Yahoo_search_error_unwritable_file' => 'Error: kan inte skriva till filen %s.',
	'Yahoo_search_error_unclosable_file' => 'Error: kan inte st�nga filen %s.',
	'Yahoo_search_error_update_sql' => 'Error: kan inte uppdatera f�lt: %s',
	'Yahoo_search_error_unknown_file_error' => 'Error: filen sparades inte p� grund av ett ok�nt error.',
	'Yahoo_search_file_done' => 'Webbadressens noterings fil har slutat att bearbetas. V�nligen kopiera URL:n nedan och klistra in den i r�tt f�lt i Yahoo:<br /><b>%s</b>',
// Finish Yahoo Submit Your Site MOD by www.pentapenguin.com

// Bookmark Mod
	'Max_bookmarks_links' => 'H�gsta bokm�rken som skickas i l�nk-tagg',
	'Max_bookmarks_links_explain' => 'Antal bokm�rken f�r att skicka i l�nk-taggen i b�rjan av dokumentet. Denna information anv�nds till exempel av Mozilla. Ange 0 f�r att inaktivera den h�r funktionen.',

	'Faq_manager' => 'FAQ Manager',
	'Faq_Rules_manager' => 'Faq &amp; Regler',
	'board_rules' => 'Forum Regler',
	'board_faq' => 'Forum Faq',
	'bbcode_faq' => 'BBKod Faq',
	'attachment_faq' => 'Tillbeh�rs Faq',
	'prillian_faq' => 'Prillian Faq',
	'bid_faq' => 'Kompis Lista Faq',


	'Account_active2' => 'Aktiva Anv�ndare',
	'Account_inactive2' => 'Inaktiva Anv�ndare',

// Search Flood Control - added 2.0.20
	'Search_Flood_Interval' => 'S�k Flood Intervall',
	'Search_Flood_Interval_explain' => 'Antal sekunder en anv�ndare m�ste v�nta mellan s�k beg�ran',
	'Confirm_delete_smiley' => 'Vill du verkligen ta bort denna Smiley?',
	'Confirm_delete_word' => '�r du s�ker p� att du vill ta bort detta ord censor?',
	'Confirm_delete_rank' => 'Vill du verkligen ta bort denna rank?',

// Custom Profile Fields MOD
	'custom_field_notice_admin' => 'Dessa poster har skapats av dig eller en annan administrat�r. F�r mer information, se ex under Profil F�lts rubriken i navigeringen. Poster markerade med * �r obligatoriska f�lt. Poster markerade med en &dagger; visas bara f�r administrat�rer.',

	'field_deleted' => 'De specificerade f�ltet har raderats',
	'double_check_delete' => '�r du s�ker p� att du vill ta bort profil f�ltet "%s" fr�n databasen permanent?',

	'here' => 'H�r',
	'new_field_link' => '<a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">%s</a>',
	'edit_field_link' => '<a href="' . append_sid($filename . '?mode=edit&amp;pfid=x') . '">%s</a>',
	'index_link' => '<a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">%s</a>',
	'field_exists' => 'Detta f�ltet finns redan.<br /><br />Du kan prova att skapa ett <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">nytt</a> profil f�lt,<br /><br />eller f�rs�k <a href="' . append_sid($filename . '?mode=edit&amp;pfid=x') . '">redigera</a> det du redan har.',
	'click_here_here' => 'Klicka <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">h�r</a> f�r att l�gga till ett annat profil f�lt,<br /><br />eller klicka <a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">h�r</a> f�r att �terg� till Admin Index.',
	'field_success' => 'F�lt successfullt inskickat!<br /><br />Klicka <a href="' . append_sid($filename . '?mode=add&amp;pfid=x') . '">h�r</a> f�r att l�gga till ett annat profil f�lt,<br /><br />eller klicka <a href="' . append_sid('admin_profile_fields.' . PHP_EXT . '?mode=edit&amp;pfid=x') . '">h�r</a> f�r att �terg� till Admin Index.',
	'Custom_Profile' => 'Profil F�lt',
	'profile_field_created' => 'Profil F�lt Skapat',
	'profile_field_updated' => 'Profil F�lt Skapat',

	'add_field_title' => 'L�gg till Anpassat Profil F�lt',
	'edit_field_title' => 'Redigera Anpassat Profil F�lt',
	'add_field_explain' => 'Skapa nya f�lt f�r anv�ndarna att ha i sina profiler.',
	'edit_field_explain' => 'Redigera f�lt du redan har skapat f�r anv�ndarna att ha i sina profiler.',

	'add_field_general' => 'Allm�nna Inst�llningar',
	'add_field_admin' => 'Administrator Inst�llningar',
	'add_field_view' => 'Visningsbara Inst�llningar',
	'add_field_text_field' => 'Text F�lt Inst�llningar',
	'add_field_text_area' => 'Text Area Inst�llningar',
	'add_field_radio_button' => 'Radio Button Inst�llningar',
	'add_field_checkbox' => 'Checkbox Inst�llningar',

	'default_value' => 'Standard V�rde',
	'default_value_explain' => 'Detta �r standard f�r detta f�lt. Om en ny anv�ndare inte �ndrar detta v�rde �r det detta v�rde de kommer att ha. Om detta �r ett obligatoriskt f�lt �r detta v�rde som alla befintliga anv�ndare kommer att vara inst�llda p�.',
	'default_value_radio_explain' => 'Ange ett namn identiskt med ett skrivet i tillg�ngliga v�rden f�ltet.',
	'default_value_checkbox_explain' => 'Ange v�rden som kommer att falla tillbaka p� kontrollen. Dessa v�rden m�ste matcha v�rdena i tillg�ngliga v�rden f�ltet',
	'max_length' => 'Maximal L�ngd',
	'max_length_explain' => 'Detta �r den maximala l�ngden f�r detta f�ltet.',
	'max_length_value' => ' Detta m�ste vara ett nummer mellan %d och %d.',
	'available_values' => 'Tillg�ngliga V�rden',
	'available_values_explain' => 'L�gg varje v�rde p� en egen rad',

	'add_field_view_disclaimer' => 'Alla dessa inst�llningar kommer att behandlas som "nej" om anv�ndarna inte �r till�tna att visa dessa f�lt',

	'add_field_name' => 'F�lt Namn',
	'add_field_name_explain' => 'Skriv in det namn du vill associera med detta f�lt.',
	'add_field_description' => 'F�lt Beskrivning',
	'add_field_description_explain' => 'Ange en beskrivning som du vill associera med detta f�lt. Det kommer att visas i liten text nedanf�r f�lt namnet, precis som denna text �r.',
	'add_field_type' => 'F�lt Typ',
	'add_field_type_explain' => 'V�lj den typ av profil f�lt du vill l�gga till. Exempel p� varje f�lttyp visas l�ngst till h�ger.',
	'edit_field_type_explain' => 'V�lj den typ av profil f�lt du vill �ndra detta f�lt till. Exempel p� varje f�lttyp visas l�ngst till h�ger.',
	'add_field_required' => 'S�tt till N�dv�ndigt',
	'add_field_required_explain' => 'Om f�ltet �r inst�lld p� "N�dv�ndigt", g�ller det f�r alla anv�ndare som registrerar senare att de <strong>m�ste</strong> fylla i det, och alla befintliga anv�ndare kommer att ha det ifyllt med ett standardv�rde.',
	'add_field_user_can_view' => 'Till�t Anv�ndare att Se',
	'add_field_user_can_view_explain' => 'Om detta �r satt till "ja", har anv�ndaren m�jlighet att visa och redigera det h�r f�ltet. Om detta �r inst�llt p� "nej", kan bara Administrat�rer visa eller �ndra detta v�rde. �ven om detta �r satt till "ja", kan detta omr�de inte kr�vas.',
	'view_in_profile' => 'Visningsbart i Anv�ndar Profil',
	'profile_locations_explain' => 'Dessa alternativ finns f�r om detta f�lt ska ses i anv�ndarnas profil.',
	'contacts_column' => 'Kontakter Kolumn',
	'about_column' => 'Om Kolumn',
	'view_in_memberlist' => 'Visningsbart i Medlemslistan',
	'view_in_topic' => 'Visningsbart i �mne',
	'topic_locations_explain' => 'Dessa alternativ finns f�r om detta f�lt ska ses i en post.',
	'author_column' => 'F�rfattare Sektion',
	'above' => 'Ovan ',
	'below' => 'Under ',

	'textarea' => 'Textomr�de',
	'textarea_example' => 'Exempel p� ett rullningsbart' . "\n" . 'Textomr�de.',
	'text_field' => 'Text F�lt',
	'text_field_example' => 'Exempel p� ett Text F�lt',
	'radio' => 'Radio Knapp',
	'radio_example' => 'Exempel p� tv� Radio Knappar',
	'checkbox' => 'Kryssrutor',
	'checkbox_example' => 'Exempel p� tv� Kryssrutor',

	'profile_field_list' => 'Ditt Anpassade Profil F�lt',
	'profile_field_list_explain' => 'Dessa �r alla anpassade profiler som du har skapat f�r ditt forum, med l�nkar f�r att redigera eller ta bort dem.',
	'profile_field_id' => 'ID #',
	'profile_field_name' => 'F�lt Namn',
	'profile_field_action' => '�tg�rd',
	'no_profile_fields_exist' => 'Inget Anpassat Profil F�lt Existerar.',

	'enter_a_name' => 'Du <strong>m�ste</strong> ange ett f�lt namn<br /><br />Tryck tillbaka och f�rs�k igen',
// END Custom Profile Fields MOD

	'Add' => 'L�gg till',
	'split_global_announce' => 'Dela Globala Tillk�nnagivanden',
	'split_announce' => 'Dela Tillk�nnagivanden',
	'split_sticky' => 'Dela Stickies',
	'split_topic_split' => 'Dela �mnen',
	'Announce_settings' => 'Tillk�nnagivanden Inst�llningar',
	'Split_settings' => 'Dela Inst�llningar',
	'Server_Cookies' => 'Server Inst�llningar',
	'Disable_Registration_IP_Check' => 'Avaktivera offentliga svartlistade IP vid registrering',
	'Disable_Registration_IP_Check_Explain' => 'Om du avaktiverar IP kontroll vid registrering och sedan IPs kommer den inte att kontrolleras mot allm�nhetes svartlista. Inaktivera detta kan vara anv�ndbart, eftersom ibland denna kontroll kan leda till oavsiktlig blockering av regelbundna anv�ndare som har en IP angiven av misstag i den offentliga svartlistan.',
	'Config_explain2' => 'Anpassa kalender och under-forums alternativ, du kan �ndra utseende och inst�llningar.',
	'Forum_postcount' => 'R�kna anv�ndarnas inl�gg',
	'Use_Captcha' => 'Anv�nd CAPTCHA',
	'Use_Captcha_Explain' => 'Om inst�llt p� JA, kommer den avancerade bekr�ftelsekoden att genereras. Om inst�llt p� NEJ, �r standard bekr�ftelsekoden genererad.',
	'Sync_Pics_Count' => 'Om du klickar <b>JA</b> kommer alla anv�ndares bild r�kning att synkroniseras.',
	'Pics_Count_Synchronized' => 'Anv�ndares bild r�knare synkroniserad korrekt',
	'Pics_Count_Not_Synchronized' => 'Anv�ndares bild r�knare synkroniserades inte korrekt',

// IP - BUILD 001
	'Enable_Digests' => 'Aktivera Sammandrag',
	'Enable_Digests_PHPCron' => 'Aktivera Sammandrag PHP Cron',
	'Enable_Digests_PHPCron_Explain' => 'Denna funktion g�r det m�jligt f�r en PHP-emulering av cron som f�rs�ker skicka e-post en g�ng i timmen, men eftersom den �r baserad p� en PHP-emulering kan det inte vara korrekt exekverad varje g�ng. Detta inneb�r att e-post ibland inte kan skickas. Om du kan aktivera cron p� din server, anv�nd cron i st�llet f�r den h�r funktionen.',

// Ajax Shoutbox - BEGIN
	'Shoutbox_config' => 'AJAX Shoutbox Konfiguration',
	'Shout_read_only' => 'Endast L�s',
	'Displayed_shouts' => 'Visade Shouts',
	'Displayed_shouts_explain' => 'Antal shouts som ska visas n�r du laddar shoutboxen.<br /><i>0 f�r att ladda alla shouts.</i>',
	'Stored_shouts' => 'Lagrade Shouts',
	'Stored_shouts_explain' => 'Antal shouts som stannar kvar i databasen.<br />Detta v�rde b�r vara lika med eller h�gre �n det antal av visade shouts.<br /><i>0 f�r att lagra alla shouts.</i>',
	'Shout_guest_allowed' => 'G�st Till�ten',
	'Shoutbox_flood' => 'Flood Intervall',
	'Shoutbox_flood_explain' => 'Antal sekunder en anv�ndare m�ste v�nta mellan shouts.',
	'Shoutbox_refreshtime' => 'Uppdatera betyg',
	'Shoutbox_refresh_explain' => 'Tid i millisekunder f�r shoutboxen att l�sa nya meddelanden.<br /><i>Detta v�rde b�r vara �ver 1000 millisekunder.</i>',
// Ajax Shoutbox - END

/* lang_postcount.php - BEGIN */
	'Postcounts' => 'Post R�knings Administration',
	'Post_count_explain' => '<b>Redigera post r�kning av en enskild anv�ndare.</b>',
	'Modify_post_counts' => 'Modifiera Post R�kning',
	'Post_count_changed' => 'Framg�ng! Du har redigerat ett anv�ndarnamns inl�ggs r�kning!',
	'Click_return_posts_config' => 'Klicka %sH�r%s f�r att �terg� till post r�knings konfigurationen',
	'Modify_post_count' => 'Modifiera post r�kning',
	'Edit_post_count' => 'Redigera post r�kning f�r <b>%s</b>',
	'Post_count' => 'Antal Meddelanden',
/* lang_postcount.php - END */

/* lang_megamail.php - BEGIN */
	'Megamail_Explain' => 'H�r kan du e-posta ett meddelande till antingen alla dina anv�ndare eller alla anv�ndare av en viss grupp. F�r att g�ra detta, kommer ett e-post meddelande att skickas ut till den administrativa e-post adress med en hemlig kopia som skickas till alla mottagare.<br />E-postmeddelandet skickas i flera omg�ngar: detta b�r kringg� timeout och server-laddnings utf�rdande. Statusen f�r detta mass utskik kommer att sparas i db. Du kan st�nga f�nstret, n�r du vill pausa massa-post-s�ndningen (den aktuella upps�ttningen kommer att skickas ut). Senare kan du helt enkelt forts�tta d�r du slutade.<br /><b>Om HTML e-post �r aktiverat, d� kan du skriva breven genom att anv�nda HTML kod, s�tt in &lt;br /&gt; f�r en radbrytning.</b>',
	'megamail_inactive_users' => 'Ingen bes�kt anv�ndare de senaste (DAGAR) dagar',
	'megamail_header' => 'Din E-post-Session',
	'megamail_id' => 'Brev-ID',
	'megamail_batchstart' => 'Bearbetar',
	'megamail_batchsize' => 'Meddelande per Parti',
	'megamail_batchwait' => 'Paus',
	'megamail_created_message' => 'Mass Brev har sparats i databasen.<br /><br/> F�r att b�rja skicka %sklicka h�r%s eller v�nta till Meta-Refresh tar dig dit...',
	'megamail_send_message' => 'Den aktuella upps�ttningen (%s - %s) har skickats .<br /><br/> Att forts�tta att skicka %sklicka h�r%s eller v�nta tills Meta-Refresh tar dig dit...',
	'megamail_status' => 'Status',
	'megamail_proceed' => '%sForts�tt nu%s',
	'megamail_done' => 'KLART',
	'megamail_none' => 'Inga records hittades.',
	'megamail_delete_confirm' => 'Vill du verkligen ta bort det h�r mailet?',
	'megamail_deleted' => 'Epost raderades successfullt',
	'megamail_click_return' => 'Klicka %sH�r%s f�r att �terg� till Mass E-posten / PM',
/* lang_megamail.php - END */

/* lang_admin_voting.php - BEGIN */
	'Admin_Vote_Explain' => 'Unders�knings Results (vem som har r�stat och hur de r�stat).',
	'Admin_Vote_Title' => 'Unders�knings Administration',
	'Vote_id' => '#',
	'Poll_topic' => 'Unders�knings �mne',
	'Vote_username' => 'R�st(er)',
	'Vote_end_date' => 'R�st Varaktighet',
	'Sort_vote_id' => 'Unders�knings Nummer',
	'Sort_poll_topic' => 'Unders�knings �mne',
	'Sort_vote_start' => 'Start Datum',
	'Submit' => 'Skicka',
	'Select_sort_field' => 'V�lj sorterings f�lt',
	'Sort_ascending' => 'Stigande',
	'Sort_descending' => 'Fallande',
/* lang_admin_voting.php - END */

/* lang_admin_gd_info.php - BEGIN */
	'GD_Title' => 'GD Info',
	'NO_GD' => 'Ingen GD',
	'GD_Description' => 'H�r kan du h�mta information om det installerade GD biblioteket',
	'GD_Freetype_Support' => 'Freetype Teckensnitts Support:',
	'GD_Freetype_Linkage' => 'Freetype L�nk Typ:',
	'GD_T1lib_Support' => 'T1lib Support:',
	'GD_Gif_Read_Support' => 'Gif L�sa Support:',
	'GD_Gif_Create_Support' => 'Gif Skapa Support:',
	'GD_Jpg_Support' => 'Jpg/Jpeg Support:',
	'GD_Png_Support' => 'Png Support:',
	'GD_Wbmp_Support' => 'WBMP Support:',
	'GD_XBM_Support' => 'XBM Support:',
	'GD_Jis_Mapped_Support' => 'Japanese Font Support:',
	'GD_True' => 'Ja',
	'GD_False' => 'Nej',
/* lang_admin_gd_info.php - END */

/* lang_admin_captcha.php - BEGIN */
	'VC_Captcha_Config' => 'CAPTCHA',
	'captcha_config_explain' => '<b>Best�mm utseendet p� bilden, som anger registreringskoden p� aktiverad visuell bekr�ftelse.</b>',
	'VC_active' => 'Visuell Bekr�ftelse �r aktiv!',
	'VC_inactive' => 'Visuell Bekr�ftelse �r inte aktiv!',
	'background_configs' => 'Bakgrund',
	'Click_return_captcha_config' => 'Klicka %sH�r%s f�r att �terg� till CAPTCHA Konfiguration',

	'CAPTCHA_width' => 'CAPTCHA bredd',
	'CAPTCHA_height' => 'CAPTCHA h�jd',
	'background_color' => 'Bakgrunds f�rg',
	'background_color_explain' => 'Angives i hexadecimal (t.ex. #0000FF f�r bl�).',
	'pre_letters' => 'Antal skuggade bokst�ver',
	'pre_letters_explain' => '',
	'great_pre_letters' => 'Skugg bokstavs �kning',
	'great_pre_letters_explain' => '',
	'Random' => 'Random',
	'random_font_per_letter' => 'Slumpm�ssiga teckensnitt per bokst�ver',
	'random_font_per_letter_explain' => 'Varje bokstav anv�nder ett slumpm�ssigt teckensnitt.',

	'back_chess' => 'Schack prov',
	'back_chess_explain' => 'Fyll den kompletta bakgrunden med 16 rektanglar.',
	'back_ellipses' => 'Ellipser',
	'back_arcs' => 'B�jda linjer',
	'back_lines' => 'Linjer',
	'back_image' => 'Bakgrunds bild',
	'back_image_explain' => '(Denna funktion �r inte integrerad �nnu)',

	'foreground_lattice' => 'F�rgrunds galler',
	'foreground_lattice_explain' => '(bredd x h�jd)<br />Generera ett vit galler �ver CAPTCHA',
	'foreground_lattice_color' => 'Galler f�rg',
	'foreground_lattice_color_explain' => 'Angives i hexadecimal (t.ex. #0000FF f�r bl�).',
	'gammacorrect' => 'Kontrast korrigering',
	'gammacorrect_explain' => '(0 = off)<br />NOTERA!!! F�r�ndringar av v�rdet har direkt effekt p� l�sbarheten av CAPTCHA!',
	'generate_jpeg' => 'Bild typ',
	'generate_jpeg_explain' => 'JPEG format har en h�gre kompression �n png, och har genom kvalitetens attityd (max 95%), en direkt inverkan p� l�sbarheten av CAPTCHA.',
	'generate_jpeg_quality' => 'Kvalitet',
/* lang_admin_captcha.php - END */

/* lang_admin_topic_shadow.php - BEGIN */
	'Del_Before_Date' => 'Radera Alla Skugg �mnen innan %s<br />', // %s = insertion of date
	'Deleted_Topic' => 'Raderade Skugg �mnen %s<br />', // %s = topic name
	'Affected_Rows' => '%d k�nda poster har p�verkats<br />', // %d = affected rows (not avail with all databases!)
	'Delete_From_Date' => 'Alla Skugg �mnen som har skapats f�re den angivna tidpunkten kommer att tas bort.',
	'Delete_Before_Date_Button' => 'Radera Alla F�re Datum',
	'No_Shadow_Topics' => 'Inga Skugg �mnen hittades.',
	'Topic_Shadow' => '�mnes Skugga',
	'TS_Desc' => '<b>Avl�gsnar skugg �mnen utan att borttagning av det egentliga meddelandet. Skugg �mnen skapas n�r du flyttar ett inl�gg till ett annat forum och v�ljer att l�mna bakom en l�nk till det f�rflyttade inl�gget.',
	'Month' => 'M�nad',
	'Day' => 'Dag',
	'Year' => '�r',
	'Clear' => 'Rensa',
	'Resync_Ran_On' => 'Resync Ran P� %s<br />', // %s = insertion of forum name
	'Version' => 'Version',

	'Title' => 'Titel',
	'Moved_To' => 'Flyttad Till',
	'Moved_From' => 'Flyttad Fr�n',

/* Modes */
	'topic_time' => '�mne Tid',
	'topic_title' => '�mne Titel',

/* Errors */
	'Error_Month' => 'Din ing�ngs m�nad m�ste vara mellan 1 och 12',
	'Error_Day' => 'Din ing�ngs dag m�ste vara mellan 1 och 31',
	'Error_Year' => 'Ditt ing�ngs �r m�ste vara mellan 1970 och 2038',
	'Error_Topics_Table' => 'Error �tkomst �mnes tabellen',
/* lang_admin_topic_shadow.php - END */

/* lang_admin_rebuild_search.php - BEGIN */
	'Rebuild_search' => '�teruppbygg S�k',
	'Rebuild_search_desc' => 'Detta kommer att indexera varje post i Kunskaps Basen, �teruppbygga s�knings tabeller. Det kan ta l�ng tid att bearbeta, s� du f�r inte g� ifr�n denna sida tills den �r klar.',
	'Post_limit' => 'Post begr�nsning',
	'Time_limit' => 'Tids begr�nsning',
	'Refresh_rate' => 'Uppdatera rate',

	'Next' => 'N�sta',
	'Finished' => 'Slutf�rd',
/* lang_admin_rebuild_search.php - END */

/* lang_admin_faq_editor.php - BEGIN */
	'faq_editor' => 'Redigera Spr�k',
	'faq_editor_explain' => '<b>Redigera och �ter l�ta din FAQ, BBKod FAQ och Forum Regler . Du <u>ska inte</u> ta bort eller �ndra rubriken <b>phpBB 2 Issues</b> eller <b>Om Icy Phoenix</b>.',

	'faq_select_language' => 'V�lj spr�k fil du vill redigera',
	'faq_retrieve' => '�terkalla Fil',

	'faq_block_delete' => '�r du s�ker p� att du vill radera detta block?',
	'faq_quest_delete' => '�r du s�ker p� att du vill radera denna fr�ga (och dess svar)?',

	'faq_quest_edit' => 'Redigera Fr�gor & Svar',
	'faq_quest_create' => 'Skapa Ny Fr�gor & Svar',

	'faq_quest_edit_explain' => 'Redigera fr�gor och svar. �ndra blocket om du vill.',
	'faq_quest_create_explain' => 'Skriv in de nya fr�gorna och svar och tryck p� Skicka.',

	'faq_block' => 'Block',
	'faq_quest' => 'Fr�ga',
	'faq_answer' => 'Svar',

	'faq_block_name' => 'Block Namn',
	'faq_block_rename' => '�ndra namn p� ett block',
	'faq_block_rename_explain' => '�ndra namnet p� ett block i filen',

	'faq_block_add' => 'L�gg till Block',
	'faq_quest_add' => 'L�gg till Fr�ga',

	'faq_no_quests' => 'Inga fr�gor i detta block. Detta kommer att f�rhindra varje block efter att detta har visats. Ta bort blocket eller l�gg till en eller flera fr�gor.',
	'faq_no_blocks' => 'Inga block definierats. L�gg till ett nytt block genom att skriva in ett namn nedan.',

	'faq_write_file' => 'Kunde inte skriva till spr�k filen!',
	'faq_write_file_explain' => 'Du m�ste g�ra spr�k filen i language/lang_english/ eller motsvarande <i>skrivbar</i> f�r att anv�nda denna kontroll panel. P� UNIX, inneb�r detta att k�ra <code>chmod 666 filnamn</code>. De flesta FTP klienter kan g�ra detta genom egenskaps blad f�r en fil, annars kan du anv�nda telnet eller SSH.',
/* lang_admin_faq_editor.php - END */

/* lang_admin_rules_editor.php - BEGIN */
	'rules_editor' => 'Redigera Spr�k',
	'rules_editor_explain' => 'Redigera och �ter redigera ditt Forums regler. ',

	'rules_select_language' => 'V�lj spr�k f�r den fil du vill redigera',
	'rules_retrieve' => '�terkalla Fil',

	'rules_block_delete' => '�r du s�ker p� att du vill radera detta block?',
	'rules_quest_delete' => '�r du s�ker p� att du vill radera denna fr�ga (och dess svar)?',

	'rules_quest_edit' => 'Redigera Fr�gor & Svar',
	'rules_quest_create' => 'Skapa Nya Fr�gor & Svar',

	'rules_quest_edit_explain' => 'Redigera fr�gor och svar. �ndra blocket om du vill.',
	'rules_quest_create_explain' => 'Skriv in de nya fr�gorna och svar och tryck p� Skicka.',

	'rules_block' => 'Block',
	'rules_quest' => 'Fr�ga',
	'rules_answer' => 'Svar',

	'rules_block_name' => 'Block Namn',
	'rules_block_rename' => '�ndra namn p� ett block',
	'rules_block_rename_explain' => '�ndra namnet p� ett block i filen',

	'rules_block_add' => 'L�gg till Block',
	'rules_quest_add' => 'L�gg till Fr�ga',

	'rules_no_quests' => 'Inga fr�gor i detta block. Detta kommer att f�rhindra varje block efter att detta har visats. Ta bort blocket eller l�gg till en eller flera fr�gor.',
	'rules_no_blocks' => 'Inga block definierats. L�gg till ett nytt block genom att skriva in ett namn nedan.',

	'rules_write_file' => 'Kunde inte skriva till spr�k filen!',
	'rules_write_file_explain' => 'Du m�ste g�ra spr�k filen i language/lang_english/ eller motsvarande <i>skrivbar</i> f�r att anv�nda denna kontroll panel. P� UNIX, inneb�r detta att k�ra <code>chmod 666 filnamn</code>. De flesta FTP klienter kan g�ra detta genom egenskaps blad f�r en fil, annars kan du anv�nda telnet eller SSH.',
/* lang_admin_rules_editor.php - END */

/* lang_admin_priv_msgs.php - BEGIN */
	'PM_View_Type' => 'PM Visnings Typ',
	'Show_IP' => 'Visa IP Adress',
	'Rows_Per_Page' => 'Rader Per Sida',
	'Archive_Feature' => 'Arkiv Funktion',
	'Inline' => 'Inline',
	'Pop_up' => 'Pop-up',
	'Current' => 'Nuvarande',
	'Rows_Plus_5' => 'L�gg till 5 Rader',
	'Rows_Minus_5' => 'Ta bort 5 Rader',
	'Enable' => 'Aktiverad',
	'Disable' => 'Avaktiverad',
	'Inserted_Default_Value' => '%s Konfiguration Artikel finns inte, inf�r ett standardv�rde<br />', // %s = config name
	'Updated_Config' => 'Uppdaterade Konfiguration Artikel %s<br />', // %s = config item
	'Archive_Table_Inserted' => 'Arkiv Tabell finns inte, skapa den<br />',
	'Switch_Normal' => '�ndra Till Normal Mode',
	'Switch_Archive' => '�ndra Till Arkiv Mode',

/* General */
	'Deleted_Message' => 'Raderde Privat Meddelandet - %s <br />', // %s = PM title
	'Archived_Message' => 'Arkiverade Privata Meddelanden - %s <br />', // %s = PM title
	'Archived_Message_No_Delete' => 'Kan Inte Radera %s, Det Var M�rkt F�r Arkivet Ocks� <br />', // %s = PM title
	'Private_Messages' => 'Privata Meddelanden',
	'Private_Messages_Archive' => 'Privata Meddelanden Arkiv',
	'Archive' => 'Arkiv',
	'To' => 'Till',
	'Subject' => '�mne',
	'Sent_Date' => 'Skickat Datum',
	'From' => 'Fr�n',
	'Sort' => 'Sortera',
	'Filter_By' => 'Filtrera Efter',
	'PM_Type' => 'PM Typ',
	'Status' => 'Status',
	'No_PMS' => 'Inga Privata Meddelanden Matchar Dina Sorterings Kriterier Att Visa',
	'Archive_Desc' => 'Privata meddelanden som du har valt att arkivera �r listade h�r. Anv�ndare kan inte l�ngre komma �t dessa (avs�ndare och mottagare), men du kan visa eller ta bort dem n�r som helst.',
	'Normal_Desc' => 'Alla Privata Meddelanden p� ditt forum kan hanteras h�r. Du kan l�sa vilket du vill och kan �ven v�lja att ta bort eller arkivera (bevara, men anv�ndarna kan inte se) meddelanden.',
	'Remove_Old' => 'Orphan PMs:</a> <span class="gensmall">Anv�ndare som inte l�ngre existerar kunde ha l�mnat PMS bakom sig, men detta kommer att ta bort dem.</span>',
	'Remove_Sent' => 'Skickat Box PMs:</a> <span class="gensmall">PMs i skickade boxen �r bara kopior av exakt samma meddelande som skickades, f�rutom tilldelade till avs�ndaren efter att den andra anv�ndaren har l�st PM. Dessa beh�vs verkligen inte.</span>',
	'Removed_Old' => 'Borttaget Alla Orphan PMs<br />',
	'Removed_Sent' => 'Borttaget Alla Skickade PMs<br />',
	'Utilities' => 'Mass Raderings Anv�ndbarhet',
	'Nivisec_Com' => 'Nivisec.com',

/* PM Types */
	'PM_-1' => 'Alla Typer', //PRIVMSGS_ALL_MAIL = -1
	'PM_0' => 'L�s PMs', //PRIVMSGS_READ_MAIL = 0
	'PM_1' => 'Nytt PMs', //PRIVMSGS_NEW_MAIL = 1
	'PM_2' => 'Skickat PMs', //PRIVMSGS_SENT_MAIL = 2
	'PM_3' => 'Sparat PMs (In)', //PRIVMSGS_SAVED_IN_MAIL = 3
	'PM_4' => 'Sparat PMs (Out)', //PRIVMSGS_SAVED_OUT_MAIL = 4
	'PM_5' => 'Ol�sta PMs', //PRIVMSGS_UNREAD_MAIL = 5

/* Errors */
	'Error_Other_Table' => 'Error querying en kr�vd tabell.',
	'Error_PM_Text_Table' => 'Error querying Privata Meddelande Text Tabell.',
	'Error_PM_Table' => 'Error querying Privat Meddelande Tabell.',
	'Error_PM_Archive_Table' => 'Error querying Privat Meddelande Arkiv Tabell.',
	'No_Message_ID' => 'Inget meddelande ID var angiven.',
/* lang_admin_priv_msgs.php - END */

/* lang_admin_link.php - BEGIN */
// Categories
	'Link_Categories_Title' => 'L�nk Kategori Kontroll',
	'Link_Categories_Explain' => '<b>Hantera dina kategorier:</b><br /><br /> Skapa, �ndra, ta bort, sortera osv.',
	'Category_Permissions' => 'Kategori Beh�righeter',
	'Category_Title' => 'Kategori Titel',
	'Category_Desc' => 'Kategori Beskrivning',
	'View_level' => 'Visnings Niv�',
	'Upload_level' => 'Uppladdnings Niv�',
	'Rate_level' => 'Betygs Niv�',
	'Comment_level' => 'Kommentar Niv�',
	'Edit_level' => ' Redigera Niv�',
	'Delete_level' => 'Radera Niv�',
	'New_category_created' => 'Ny kategori har blivit skapad successfullt',
	'Click_return_link_category' => 'Klicka %sH�r%s f�r att �terg� till the L�nk Kategori Manager',
	'Category_updated' => 'Denna kategori har uppdaterats successfullt',
	'Delete_Category' => 'Radera Kategori',
	'Delete_Category_Explain' => 'Radera denna kategori?',
	'Category_deleted' => 'Denna kategori har tagits bort successfullt',
	'Category_changed_order' => 'Denna kategoris ordning har �ndrats successfullt',

// Config
	'Link_Config' => 'L�nk Config Kontroll',
	'Link_config_explain' => '�ndra de allm�nna inst�llningarna f�r din l�nk h�r',
	'lock_submit_site' => 'L�s anv�ndaren fr�n att komma in p� webbplatsen',
	'allow_guest_submit_site' => 'Till�t g�st (er) att komma in p� webbplatsen',
	'allow_no_logo' => 'Till�t att komma in p� webbplatsen utan banner',
	'site_logo' => 'Den url d�r din logotyp kan hittas (full url)',
	'site_url' => 'Din url till din webbsida',
	'width' => 'Max banner bredd',
	'height' => 'Max banner h�jd',
	'linkspp' => 'Max l�nkar per sida',
	'interval' => 'Hur snabbt bannern ska visas',
	'display_logo' => 'Hur m�nga banners som ska visas p� en g�ng',
	'Link_display_links_logo' => 'Visa L�nk webbplats banner',
	'Link_email_notify' => 'Medan L�nken l�ggs till, skicka e-post till alla webbplats admins',
	'Link_pm_notify' => 'Medan L�nken l�ggs till, notera till alla webbplats admins i privat meddelande',
	'Link_config_updated' => 'L�nk konfigurationen har uppdaterats successfullt',
	'Click_return_link_config' => 'Klicka %sH�r%s f�r att �terg� till the L�nk Config Manager',

// Link_MOD
	'Links' => 'L�nk Management',
	'Links_explain' => 'F�rhandsgranska status p�, redigerade eller raderade utvalda l�nkar.',
	'Add_link' => 'L�gg till L�nk',
	'Add_link_explain' => 'L�gg till en ny l�nk.',
	'Edit_link' => 'Redigera L�nk',
	'Edit_link_explain' => 'Redigera denna l�nks detaljer. Du kan �ven v�lja att ',
	'Delete_link' => 'Radera L�nk',
	'Delete_link_explain' => 'Radera denna l�nk. Du kan �ven v�lja att ',
	'Link_update' => 'Uppdatera l�nk detaljer',
	'Link_delete' => 'Radera denna l�nk',
	'Link_title' => 'Webbplats Namn',
	'Link_url' => 'Webbplats URL',
	'Link_logo_src' => 'Webbplats Logotyp (88x31 pixlar, fil storlek inte st�rre �n 10K)',
	'Link_category' => 'Webbplats Kategori',
	'Link_desc' => 'Webbplats Beskrivning',
	'link_hits' => 'Tr�ffar',
	'Link_basic_setting' => 'L�nk Grundl�ggande Detaljer',
	'Link_adv_setting' => 'Avancerad Inst�llning',
	'Link_active' => 'Aktiv Status',

	'Link_admin_add_success' => 'L�nken var successfullt tillagd',
	'Link_admin_add_fail' => 'Det g�r inte att l�gga till den nya l�nken, v�nligen prova igen senare',
	'Link_admin_update_success' => 'L�nken var successfullt uppdaterad',
	'Link_admin_update_fail' => 'Det gick inte att uppdatera l�nken, v�nligen prova igen senare',
	'Link_admin_delete_success' => 'L�nken var successfullt f�rflyttad',
	'Link_admin_delete_fail' => 'Kunde inte ta bort l�nken, v�nligen prova igen senare',
	'Click_return_lastpage' => 'Klicka %sH�r%s f�r att �terg� till f�reg�ende sida',
	'Click_return_admin_links' => 'Klicka %sH�r%s f�r att �terg� till L�nk Manage',
	'Preview' => 'F�rhandsgranska',
	'Search_site' => 'S�k Webbplats',
	'Search_site_title' => 'S�k Webbplats Namn/Beskrivning:',
/* lang_admin_link.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

// Icy Phoenix - BUILD 009
	'Replace_title' => 'Ers�tt I Inl�gg',
	'Replace_text' => 'Ers�tt ord eller rader med vad du vill.<br /><b>Notera!</b> Detta kan inte �ngras.',
	'Link' => 'L�nk',
	'Str_old' => 'Nuvarande text',
	'Str_new' => 'Ers�tt med',
	'No_results' => 'Inga resultat hittades',
	'Replaced_count' => 'Totalt Inl�gg Uppdaterad: %s',

// Icy Phoenix - BUILD 016
	'group_rank' => 'Rank',
	'group_color' => 'F�rg',
	'group_legend' => 'Visa i legend',
	'group_legend_short' => 'Legend',
	'group_main' => 'Huvud grupp',
	'group_members' => 'Medlemmar',
	'group_update' => 'Inf�r �ndringarna',

/* lang_color_groups.php - BEGIN */
	'Color_Groups' => 'F�rg Grupper',
	'Manage_Color_Groups' => 'Hantera F�rg Grupper',
	'Add_New_Group' => 'L�gg till Ny Grupp',
	'Color' => 'F�rg',
	'User_Count' => 'Anv�ndar R�kning',
	'Color_List' => 'F�rg Namn Lista:',
	'Group_Name' => 'Grupp Namn',
	'Define_Users' => 'Definiera Anv�ndare',
	'Color_Group_User_List' => 'F�rg Grupp Anv�ndar Lista',
	'Options' => 'Val',
	'Example' => 'Exempel',
	'User_List' => 'Full Anv�ndare Lista',
	'Unassigned_User_List' => 'Anv�ndare Med Ingen Grupp',
	'Assigned_User_List' => 'Anv�ndare Med En Grupp',
	'Add_Arrow' => 'L�gg till i Lista',
	'Update' => 'Uppdatera',
	'Updated_Group' => 'Uppdatera Grupp Anv�ndare Lista<br />',
	'Deleted_Group' => 'Raderad Specificerad Grupp. Alla anv�ndare som fanns i den har �terst�llts till inte n�gon gruppmedlemskap<br />',
	'Hide' => 'G�mm',
	'Un-hide' => 'G�mm-ej',
	'Move_Up' => 'Flytta Upp',
	'Move_Down' => 'Flytta Ner',
	'Group_Hidden' => 'Grupp G�md<br />',
	'Group_Unhidden' => 'Grupp Ej-G�md<br />',
	'Groups_Updated' => 'Grupp f�r�ndringar har uppdaterats<br />',
	'Moved_Group' => 'Flyttad grupp ordning<br />',

//Descriptions
	'Manage_Color_Groups_Desc' => 'Uppdatera grupper, l�gga till en ny grupp, eller hantera anv�ndare som tilldelats en viss f�rg grupp.<br />Grupper som du v�ljer att "D�lj" kommer inte att dyka upp p� huvudindex listan.',
	'Color_Group_User_List_Desc' => 'L�gg till eller flytta anv�ndare till en specificerad f�rg grupp.',

//Errors
	'Error_Group_Table' => 'Error querying f�rg grupps tabellen.',
	'Error_Font_Color' => '<b><u>Varning:</b></u> Den specificerade teckenf�rgen verkar vara ogiltig!',
	'Color_Ok' => 'Den angivna teckenf�rgen verkar vara giltig.',
	'No_Groups_Exist' => 'Inga grupper finns.',
	'Error_Users_Table' => 'Error querying anv�ndar tabellen.',
	'Invalid_Group_Add' => '%s �r ett ogiltigt eller kopierat grupp namn.<br />',

//Dynamic
	'Group_Updated' => 'Uppdaterad F�rg Grupp %s<br />',
	'Editing_Group' => 'F�r n�rvarande redigerars anv�ndarlistan f�r %s.',
	'Invalid_User' => '%s �r ett ogiltigt anv�ndarnamn, hoppa �ver<br />',
	'Invalid_Order_Num' => '%s inneh�ll en ogiltig l�pnummer, men det har fastst�llts. Pr�va att flytta upp/ner igen.',

//New for 1.2.0
	'Users_List' => 'Anv�ndar Lista',
	'Groups_List' => 'Anv�ndar Grupps Lista',
	'List_Info' => '<b>Notera</b>: <ul><li>H�ll nere CTRL n�r du klickar f�r att markera flera namn. <li>Om en anv�ndare tillh�r en anv�ndargrupp, och skall l�ggas till i en viss f�rg grupp, kommer f�rg gruppen som inneh�ller anv�ndaren att anv�ndas; inte den anv�ndargruppen tillh�r. <li>Listan namn �r formaterade som NAMN (CURRENT_COLOR_GROUP). D�r kommer inte att vara n�gon (CURRENT_COLOR_GROUP) om posten inte tillh�r en. <li>Om en anv�ndare �r medlem i 2 eller flera anv�ndargrupper, kommer den h�gst rankade f�rg gruppen att ges (du best�ller deras utseende p� huvudsidan).</ul>',
/* lang_color_groups.php - END */

// Icy Phoenix - BUILD 023
	'Empty_Cache_Main_Question' => 'Om du klickar Ja, kommer alla filer i fr�msta cache mappen att tas bort permanent.<br /><br /><em> �r du s�ker p� att du vill g�ra detta? </em>',
	'Empty_Cache_Posts_Question' => 'Om du klickar Ja, kommer f�rkompilerade inl�ggsf�lt i inl�ggs tabellen att tas bort permanent.<br /><br /><em> �r du s�ker p� att du vill g�ra detta? </em>',
	'Empty_Cache_Thumbs_Question' => 'Om du klickar Ja, kommer alla miniatyrbilder genererade i inl�gg att tas bort permanent.<br /><br /><em> �r du s�ker p� att du vill g�ra detta? </em>',
	'Empty_Cache_Success' => 'Cache mappar t�mmdes successfullt.',

	'Copy_Auth' => 'Kopiera beh�righeter fr�n',
	'Copy_Auth_Explain' => 'Observera att du kan kopiera beh�righeter endast fr�n forum, inte fr�n kategorier!',

// Icy Phoenix - BUILD 027
/* lang_admin_db_backup.php - BEGIN */
	'SELECT_ALL' => 'V�lj alla',
	'SELECT_FILE' => 'V�lj en fil',
	'START_BACKUP' => 'Starta backup',
	'START_RESTORE' => 'Starta �terst�llning',
	'STORE_AND_DOWNLOAD' => 'Lagra och ladda ner',
	'STORE_LOCAL' => 'Lagra fil lokalt',
	'STRUCTURE_ONLY' => 'Bara Struktur',

// Backup
	'ACP_BACKUP' => 'Backup Databas',
	'ACP_BACKUP_EXPLAIN' =>  'Backup alla webbplatsinriktade uppgifter. Backup kommer att lagras <b><samp>backup/</samp></b> (se till att denna mapp �r <b>skrivbar</b>) mappen s� att kan du ladda ner eller �terst�lla den fr�n<b>�terst�ll</b> sidan. Din server konfiguration kan ocks� ge dig m�jlighet att spara filen i komprimerad gzip-format.<br /><br /><span class="text_red">Backup kommer att utf�ras p� flera �tg�rder f�r att undvika timeout: skriptet b�r kunna utf�ra en fullst�ndig process alla automatiskt, s� du har bara att v�nta att slutf�ra automatiserad uppgifter.</span><br /><br />',

	'BACKUP_OPTIONS' => 'Backup Alternativ',
	'BACKUP_TYPE' => 'Backup typ',

	'DATABASE' => 'Databas Verktygsprogram',
	'DATA_ONLY' => 'Enbart Data',
	'DELETE_BACKUP' => 'Radera backup',
	'DELETE_SELECTED_BACKUP' => '�r du s�ker p� att du vill ta bort den valda backupen?',
	'DESELECT_ALL' => 'Avmarkera alla',
	'DOWNLOAD_BACKUP' => 'Ladda ner backup',

	'FILE_TYPE' => 'Fil typ',
	'FULL_BACKUP' => 'Full',

	'BACKUP_TYPE_COMPLETE' => 'Komplett',
	'BACKUP_TYPE_EXTENDED' => 'Ut�kad',
	'BACKUP_TYPE_COMPACT' => 'Kompakt radbrytning',

	'BACKUP_SUCCESS' => 'Backup filen har skapats successfullt.',
	'BACKUP_DELETED' => 'Backup filen har blivit raderad successfullt.',

	'TABLE_SELECT' => 'Tabell vald',

	'BACKUP_IN_PROGRESS' => 'Backup i framsteg...',
	'BACKUP_IN_PROGRESS_TABLE' => 'Backar upp tabell: <b>%s</b>',
	'BACKUP_IN_PROGRESS_REDIRECT' => 'Du kommer att omdirigeras automatiskt till n�sta steg om n�gra sekunder',
	'BACKUP_IN_PROGRESS_REDIRECT_CLICK' => 'Om du inte automatiskt omdirigeras inom n�gra sekunder kan du klicka %sH�r%s',
	'BACKUP_OPTIONS_RETURN' => 'Klicka %sH�r%s f�r att �terg� till Backup Management',
	
// Errors
	'Table_Select_Error' => 'Du m�ste v�lja minst en tabell.',

// Restore
	'ACP_RESTORE' => '�terst�ll Databas',
	'ACP_RESTORE_EXPLAIN' => '�terst�llning av alla webbplatsinriktade tabeller fr�n en sparad backup fil. Om din server st�der det kan du anv�nda en GZip eller BZip2 komprimerad textfil och den kommer automatiskt att expanderas. <strong>VARNING</strong> Detta kommer �verskriva befintlig data. �terst�llningen kan ta l�ng tid att bearbeta och du f�r inte flytta fr�n denna sida tills den �r klar. Backups lagras i <samp>backup/</samp> mappen och antas vara fr�n denna webbplats backupfunktioner. �terst�llnings backups som inte har skapats av den inbyggda system kommer inte att fungera korrekt.<br /><br /><strong class="text_red">Observera att om BF som skall �terst�llas �r f�r stor kommer detta skriptet att ta time out och du skulle inte kunna anv�nda webbplatsen igen. Om detta h�nder kan du prova att ladda ner s�kerhetskopian fr�n FTP och sedan �terst�lla den med en annan metod som phpMyAdmin eller MySQLDumper.</strong><br /><br />',
	'RESTORE_OPTIONS' => '�terst�llnings Alternativ',

	'Restore_Success' => 'Databasen har �terst�llts successfullt.<br />Din webbplats b�r vara tillbaka till det skick som det var n�r Backup gjordes.',

// Errors
	'No_Backup_Selected' => 'Du har inte valt n�gon backup, s� du kan inte �terst�lla den.',
	'Backup_Invalid' => 'Den valda filen till backup �r ogiltig.',
	'RESTORE_FAILURE' => 'Backup filen kan vara korrupt.',
/* lang_admin_db_backup.php - END */

/* Logs - BEGIN */
	'LOGS_ACTIONS_FILTER' => '�tg�rder filter',
	'LOGS_TITLE' => 'Loggar',
	'LOGS_EXPLAIN' => 'Alla relevanta �tg�rder lagrad i DB',
	'LOGS_TARGET' => 'M�l',
	'LOGS_DELETE' => 'Radera markerade',
	'LOGS_DELETE_ALL' => 'T�m Logg Tabell',
	'LOGS_DENY' => 'Ej godk�nda!',
	'LOGS_POST_EDIT' => 'redigerat inl�gg inlagt av',
	'LOGS_POST_DELETE' => 'raderat inl�gg inlagt av',
	'LOGS_GROUP_JOIN' => 'uppmanas att g� med i gruppen',
	'LOGS_GROUP_EDIT' => 'redigerat grupp alternativ f�r %s',
	'LOGS_GROUP_ADD' => 'tillagd %s till gruppen',
	'LOGS_GROUP_TYPE' => 'redigerad grupp %s status, nu �r gruppen %s',
	'LOGS_GROUP_TYPE_0' => '�ppen',
	'LOGS_GROUP_TYPE_1' => 'st�ngd',
	'LOGS_GROUP_TYPE_2' => 'dold',
	'LOGS_MESSAGE' => 'meddelande till anv�ndaren, kod <b>%s</b>',
	'LOGS_MODCP_DELETE' => 'tog bort vissa meddelanden i %s genom MODCP',
	'LOGS_MODCP_RECYCLE' => 'sl�ngde vissa meddelanden i %s genom MODCP',
	'LOGS_MODCP_LOCK' => 'l�set vissa meddelanden i %s genom MODCP',
	'LOGS_MODCP_UNLOCK' => 'l�ste upp vissa meddelanden i %s genom MODCP',
	'LOGS_MODCP_MOVE' => 'flyttade n�gra meddelanden i %s genom MODCP',
	'LOGS_MODCP_MERGE' => 'sammanslog vissa meddelanden i %s genom MODCP',
	'LOGS_MODCP_SPLIT' => 'delade vissa meddelanden i %s genom MODCP',
	'LOGS_TOPIC_BIN' => 'sl�ngde ett meddelande i',
	'LOGS_TOPIC_ATTACK' => 'hackningsf�rs�k p� meddelande',
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
	'LOGS_ADMIN_DB_UTILITIES_RESTORE' => 'DB �terst�lld fr�n',
	'LOGS_ADMIN_BOARD_CONFIG' => 'redigerade config inst�llningar',
	'LOGS_ADMIN_BOARD_IP_CONFIG' => 'redigerade Icy Phoenix inst�llningar',
	'LOGS_ADMIN_GROUP_NEW' => 'grupp skapades',
	'LOGS_ADMIN_GROUP_DELETE' => 'grupp raderad',
	'LOGS_ADMIN_GROUP_EDIT' => 'grupp redigerad',
	'LOGS_ADMIN_USER_AUTH' => 'redigerade r�ttigheter f�r',
	'LOGS_ADMIN_GROUP_AUTH' => 'redigerade grupp r�ttigheter',
	'LOGS_ADMIN_USER_BAN' => 'bannlyste n�gon fr�n ACP',
	'LOGS_ADMIN_USER_UNBAN' => 'bannlyste ej n�gon fr�n ACP',
	'LOGS_ADMIN_USER_DELETE' => 'anv�ndare raderad',
	'LOGS_ADMIN_USER_EDIT' => 'profil redigering f�r',
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
	'ADS_TITLE_EXPLAIN' => 'Det h�r avsnittet till�ter dig att konfigurera banners, annonser och sponsorer som ska visas p� din webbplats. Du kan l�gga till olika typer av banners och besluta om dessa banners m�ste visas eller vilken niv� en anv�ndare ska ha f�r att inte se dem. Om du anger mer �n en banner f�r en gemensam st�ndpunkt, d� kommer den bannern att visas slumpm�ssigt bland alla dem som anges f�r samma position.',
	'AD_DES' => 'Beskrivning',
	'AD_TEXT' => 'Inneh�ll',
	'AD_ENABLED' => 'Aktiverad',
	'AD_STATUS' => 'Status',
	'AD_STATUS_EXPLAIN' => 'V�lj Ja om du vill aktivera den h�r annonsen eller Nej om du vill st�nga av den',
	'AD_POSITION' => 'Position',
	'AD_AUTH' => 'R�ttigheter',
	'AD_AUTH_EXPLAIN' => 'Anv�ndare som kommer att se den h�r annonsen',
	'AD_AUTH_GUESTS' => 'Enbart G�ster',
	'AD_AUTH_REG' => 'G�ster och Registrerade (inte ADMINS och MODSs)',
	'AD_AUTH_MOD' => 'Alla utom Administrat�rer',
	'AD_AUTH_ADMIN' => 'Alla',
	'AD_FORMAT' => 'Format',
	'AD_POS_GLT' => 'Global Topp',
	'AD_POS_GLB' => 'Global Botten',
	'AD_POS_GLH' => 'Global SidHuvud',
	'AD_POS_GLF' => 'Global SidFot',
	'AD_POS_FIX' => 'Forum Index Element',
	'AD_POS_FIT' => 'Forum Index Topp',
	'AD_POS_FIB' => 'Forum Index Botten',
	'AD_POS_VFX' => 'Visa Forum Element',
	'AD_POS_VFT' => 'Visa Forum Topp',
	'AD_POS_VFB' => 'Visa Forum Botten',
	'AD_POS_VTX' => 'Visa �mnes Element',
	'AD_POS_VTT' => 'Visa �mnes Topp',
	'AD_POS_VTB' => 'Visa �mnes Botten',
	'AD_POS_NMT' => 'Nav Meny Topp',
	'AD_POS_NMB' => 'Nav Meny Botten',
	'AD_ADD' => 'L�gg till Annons',
	'AD_EDIT' => 'Redigera Annons',
	'AD_ADDED' => 'Annons tillagd successfullt',
	'ADS_UPDATE' => 'Uppdatera Annons',
	'AD_UPDATED' => 'Annons uppdaterad successfullt',
	'AD_DELETED' => 'Annons raderad successfullt',
	'CLICK_RETURN_ADS' => 'Klicka %sH�r%s f�r att �terg� till Annons Administration',
	'AD_NO_ADS' => 'Inga annonser definierade',
	'ERR_AD_ADD' => 'V�nligen fyll i alla obligatoriska f�lt',
/* ADS - END */

    'FULL_HTML' => 'Full HTML',
	'ACTIONS' => '�tg�rder',
	'EDIT' => 'Redigera',
	'DELETE' => 'Radera',
	
// ####################### [ Icy Phoenix Options BEGIN ] #####################
	'MG_Configuration' => 'Icy Phoenix Inst�llningar',
	'MG_Configuration_Explain' => '<em><b>Avancerad Icy Phoenix Inst�llningar</b></em>',

	'MG_Configuration_Headers_Banners' => 'Headers &amp; Banners',
	'MG_Configuration_Queries' => 'SQL Optimering',
	'MG_Configuration_Permissions' => 'Sido R�ttigheter',
	'MG_Configuration_Posting' => 'Inl�gg',
	'MG_SW_Precompiled_Posts_Title' => 'F�rkompilerad Inl�gg',
	'MG_SW_Logins_Title' => 'Inloggnings Inspelning',
	'MG_SW_Edit_Notes_Title' => 'Redigera Anteckningar',
	'MG_Configuration_IMG_Posting' => 'Bilder i Inl�gg',

	'MG_SW_Header_Footer' => 'Header Tabell Meddelanden',
	'MG_SW_Header_Table' => 'Header Tabell',
	'MG_SW_Header_Table_Explain' => 'Aktivering av det h�r alternativet visar ett kundanpassat budskap i rubriken p� varje sida.',
	'MG_SW_Header_Table_Text' => 'S�tt in din text h�r.',

	'MG_SW_Empty_Precompiled_Posts' => 'T�m f�rkompilerade inl�gg',
	'MG_SW_Empty_Precompiled_Posts_Explain' => 'T�m alla f�rkompilerade inl�gg.',
	'MG_SW_Empty_Precompiled_Posts_Success' => 'F�rkompilerad inl�gg t�mmdes korrekt.',
	'MG_SW_Empty_Precompiled_Posts_Fail' => 'Errors vid t�mning av f�rkompilerad tj�nster.',
    'MG_SW_Empty_Precompiled_Posts_InProgress' => 'T�mmning av cache-mapparna i framsteg...',
	'MG_SW_Empty_Precompiled_Posts_InProgress_Redirect' => 'Du omdirigeras automatiskt till n�sta steg inom tre sekunder',
	'MG_SW_Empty_Precompiled_Posts_InProgress_Redirect_Click' => 'Om du inte automatiskt omdirigeras inom tre sekunder kan du klicka %sH�r%s',
	'MG_SW_Empty_Precompiled_Posts_Redirect_Click' => 'Klicka %sH�r%s f�r att �terg� till Cache Management',
	
	'MG_FNF_Header' => 'Snabb Inst�llningar',
	'MG_FNF_Header_Explain' => '<b>Konfigurations Inst�llningar f�r din webbplats.</b><br /> Dessa konfigurations paket har skapats f�r att enkelt l�ta anv�ndare mass �ndra sina inst�llningar utan att beh�va �ndra varje alternativ ett och ett i konfigurations panelen, och kan anv�ndas som utg�ngspunkt f�r framtida anpassningar: Till exempel kan du v�lja "Snabb och Furious" och sedan �ndra endast det alternativ f�r detta paket som du inte vill ha.<br /><br /><span class="text_red"><b>V�nligen notera! att n�r du har ans�kt om ett av dessa inst�llningar kan du inte automatiskt �terst�lla gamla inst�llningar och du m�ste d� st�lla upp dem igen manuellt.</b></span>',
	'MG_FNF_Options_Set' => 'S�tt Av Alternativ',
	'MG_FNF_FNF' => 'Snabb och Rasande ',
	'MG_FNF_FNF_Explain' => 'Dessa alternativ kommer att �ka hastigheten p� din webbplats, eftersom de flesta av de funktioner som kr�ver h�g CPU kostnad eller BF tillg�ng kommer att vara avst�ngda. Detta paket �r perfekt om man vill ha en mycket snabb webbplats.',
	'MG_FNF_MGS' => 'Mighty Gorgon\'s F�reslog',
	'MG_FNF_MGS_Explain' => 'Denna upps�ttnings alternativ �r balanserat och en bra utg�ngspunkt f�r de flesta webbplatser. Vissa alternativ �r aktiverade medan andra som kr�ver h�g CPU belastning kommer att vara avst�ngda.',
	'MG_FNF_Full_Features' => 'Fulla Funktioner',
	'MG_FNF_Full_Features_Explain' => 'Dessa alternativ kan vara aktiverade om du inte har bandbredds begr�nsning eller om du vill ha alla Icy Phoenix funktioner aktiverade. V�nligen notera! att vissa av funktionerna kanske inte �r kompatibel med din server.',

	'MG_SW_ACRONYMS' => 'Avaktivera f�rkortningar',
	'MG_SW_ACRONYMS_Explain' => 'Avaktivera f�rkortnings parsning?',
	'MG_SW_AUTOLINKS' => 'Avaktivera autol�nkar',
	'MG_SW_AUTOLINKS_Explain' => 'Avaktivera AutoL�nks parsning?',
	'MG_SW_CENSOR' => 'Avaktivera ord censur',
	'MG_SW_CENSOR_Explain' => 'Avaktivera ord censurering parsning?',

	'MG_SW_No_Right_Click' => 'Blockera H�ger Klick',

	'Click_return_config_mg' => 'Klicka %sH�r%s f�r att �terg� till Icy Phoenix Inst�llningar',
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

// ####################### [ Icy Phoenix Options END ] #######################

// ####################### [ Icy Phoenix Navigation BEGIN ] #######################
// Use numbers to sort the ACP Navigation menu
// Numbers have to be changed in all /adm/*.php files too

// Configuration
$lang['1000_Configuration'] = 'Konfiguration'; // admin_board.php, admin_board_extend.php, admin_board_headers_banners.php, admin_board_main.php, admin_board_permissions.php, admin_board_server.php, admin_board_posting.php, admin_board_queries.php, admin_bots.php, admin_captcha_config.php, admin_google_bot_detector.php, admin_lang_user_created.php, admin_upi2db.php
$lang['100_Server_Configuration'] = 'Server'; // admin_board_server.php
$lang['110_Various_Configuration'] = 'Webbplats'; // admin_board.php
$lang['120_MG_Configuration'] = 'Icy Phoenix'; // admin_board.php
$lang['125_Language'] = 'Anpassad Lang Vars'; // admin_lang_user_created.php
$lang['127_Clear_Cache'] = 'Rensa Cache'; // admin_board_clearcache.php
$lang['130_UPI2DB_Mod'] = 'Ol�sta Inl�gg'; // admin_upi2db.php
$lang['140_MG_Configuration_Headers_Banners'] = 'Headers &amp; Banners'; // admin_board_headers_banners.php
$lang['145_Captcha_Config'] = 'Visuell Bekr�ftelse'; // admin_captcha_config.php
$lang['150_Similar_topics'] = 'Liknande �mnen'; // admin_similar_topics.php
$lang['160_Title_infos'] = 'Snabb Titel Administration'; // admin_quick_title.php
$lang['170_LIW'] = 'Begr�nsad Bild Bredd'; // admin_liw.php
$lang['180_MG_Configuration_Permissions'] = 'Sido Beh�righeter'; // admin_board_permissions.php
$lang['190_Spider_Bots'] = 'Spider / Bots'; // admin_bots.php
$lang['192_Google_BOT'] = 'Google Bot Detector'; // admin_google_bot_detector.php
$lang['195_Yahoo_search'] = 'Yahoo S�k'; // admin_yahoo_search.php
$lang['200_Language'] = 'Spr�k'; // admin_lang_extend.php
$lang['210_MG_Quick_Settings'] = 'Snabb Inst�llningar'; // admin_board_quick_settings.php

// General
$lang['1100_General'] = 'Allm�nt'; // admin_acronyms.php, admin_autolinks.php, admin_force_read.php, admin_helpdesk.php, admin_liw.php, admin_force_read.php, admin_mass_email.php, admin_megamail.php, admin_notepad.php, admin_quick_title.php, admin_smilies.php, admin_words.php, admin_yahoo_search.php
$lang['100_Acronyms'] = 'F�rkortningar'; // admin_acronyms.php
$lang['110_Autolinks'] = 'Autol�nkar'; // admin_autolinks.php
$lang['120_Ads'] = 'Annonser &amp; Sponsorer'; // admin_ads.php
$lang['130_Mass_Email'] = 'Mass E-post'; // admin_mass_email.php
$lang['140_Mega_Mail'] = 'Mass E-post / PM'; // admin_megamail.php
$lang['150_FTR_Config'] = 'FTR'; // admin_force_read.php
$lang['160_FTR_Users'] = 'FTR Anv�ndare'; // admin_force_read.php
$lang['170_Smilies'] = 'Smileys'; // admin_smilies.php
$lang['180_Word_Censor'] = 'Ord Censur'; // admin_words.php
$lang['200_Notepad'] = 'Admin Notepad'; // admin_notepad.php
$lang['210_Help_Desk'] = 'Help Desk'; // admin_helpdesk.php
$lang['240_Replace_title'] = 'Ers�tt i inl�gg'; // admin_replace.php

// Forum
$lang['1200_Forums'] = 'Forum'; // admin_forum_prune.php, admin_forumauth_list.php, admin_forums.php, admin_forums_extend.php, admin_prune_overview.php, admin_topic_shadow.php
$lang['100_Manage'] = 'Administration'; // admin_forums.php
$lang['110_Manage_extend'] = 'Avancerad Administration'; // admin_forums_extend.php
$lang['120_Permissions_List'] = 'Beh�righets Lista'; // admin_forumauth_list.php
$lang['122_Permissions_Adv'] = 'Beh�righets ADV'; // admin_forumauth_adv.php
$lang['125_Permissions_Forum'] = 'Beh�righeter'; // admin_forumauth.php
$lang['130_Prune'] = 'Besk�rning'; // admin_forum_prune.php
$lang['140_Prune_Overview'] = 'Besk�rning �versikt'; // admin_prune_overview.php
$lang['150_Topic_Shadow'] = 'Skugg �mnen'; // admin_topic_shadow.php

// eXtreme Styles
$lang['1300_Extreme_Styles'] = 'Stilar &amp; Mallar'; // xs_include.php -> $module_name

// DB Maintenance & Security
$lang['1400_DB_Maintenance'] = 'DB Och S�kerhet'; // admin_bb_db.php, admin_db_generator.php, admin_db_maintenance.php, admin_db_utilities.php, admin_logs.php
$lang['100_Actions_LOG'] = '�tg�rds Logg'; // admin_logs.php
$lang['110_DB_Admin'] = 'IP MySQLAdmin'; // admin_bb_db.php
$lang['120_Backup_DB'] = 'DB Backup'; // admin_db_utilities.php, admin_db_backup
$lang['130_Restore_DB'] = 'DB �terst�llning'; // admin_db_utilities.php, admin_db_backup
$lang['135_Restore_DB'] = 'DB �terst�llning Fr�n Fil'; // admin_db_utilities.php
$lang['140_Optimize_DB'] = 'Optimera Databas'; // admin_db_utilities.php
$lang['150_DB_Maintenance'] = 'Database Maintenance'; // admin_db_maintenance.php
$lang['170_db_update_generator'] = 'DB Uppdaterings Generator'; // admin_db_generator.php
$lang['180_msqd'] = 'MySQLDumper'; // admin_msqd.php

// IM Portal
$lang['1500_IM_Portal'] = 'Portal'; // admin_blocks.php, admin_blocks_pos.php, admin_blocks_var.php, admin_clear_cache.php, admin_layout.php, admin_portal.php
$lang['100_Portal_Configuration'] = 'Portal Konfiguration'; // admin_portal.php
$lang['110_Page_Management'] = 'Sido Administration'; // admin_layout.php
$lang['115_Page_Management'] = 'Anpassad Sido Administration'; // admin_layout_cp.php
$lang['120_Blocks_Management'] = 'Block Administration'; // admin_blocks.php
$lang['130_Blocks_Position_Tag'] = 'Block Positions Tagg'; // admin_blocks_pos.php
$lang['140_Blocks_Variables'] = 'Block Variabler'; // admin_blocks_var.php
$lang['150_Delete_Cache_Files'] = 'Radera Cache Filer'; // admin_clear_cache.php

// News
$lang['1600_News_Admin'] = 'Nyheter'; // admin_news.php, admin_news_cats.php, admin_xs_news.php, admin_xs_news_xml.php
$lang['100_News_Config'] = 'Nyhets Konfiguration'; // admin_news.php
$lang['110_News_Cats'] = 'Nyhets Kategorier'; // admin_news_cats.php
$lang['120_XS_News_Config'] = 'Nyhets Ticker Konfiguration'; // admin_xs_news.php
$lang['130_XS_News'] = 'Nyhets Ticker Artiklar'; // admin_xs_news.php
$lang['140_XS_News_Tickers'] = 'Nyhets Ticker'; // admin_xs_news_xml.php

// Users
$lang['1610_Users'] = 'Anv�ndare'; // admin_account.php, admin_disallow.php, admin_email_list.php, admin_jr_admin.php, admin_postcount.php, admin_priv_msgs.php, admin_profile_fields.php, admin_ranks.php, admin_ug_auth.php, admin_user_ban.php, admin_user_bantron.php, admin_user_register.php, admin_user_search.php, admin_userlist.php, admin_users.php, admin_voting.php
$lang['100_Jr_Admin'] = 'Junior Admin'; // admin_jr_admin.php
$lang['110_Manage'] = 'Hantera'; // admin_users.php
$lang['113_Permissions_Users'] = 'Beh�righeter'; // admin_ug_auth.php
$lang['116_CMS_Permissions_Users'] = 'CMS Beh�righeter'; // admin_cms_auth.php
$lang['120_Ranks'] = 'V�rderingar'; // admin_ranks.php
$lang['130_Userlist'] = 'Anv�ndarlista'; // admin_userlist.php
$lang['140_Email_List'] = 'E-post Lista'; // admin_email_list.php
$lang['150_Private_Messages'] = 'Privata Meddelanden'; // admin_priv_msgs.php
$lang['160_Account_active'] = 'Aktiva Konton'; // admin_account.php
$lang['170_Account_inactive'] = 'Inaktiva Konton'; // admin_account.php
$lang['180_Add_New_User'] = 'L�gg till ny anv�ndare'; // admin_user_register.php
$lang['190_Prune_users'] = 'Prune Anv�ndare'; // admin_prune_users.php
$lang['200_Disallow'] = 'Hindra Anv�ndarnamn'; // admin_disallow.php
$lang['210_Ban_Management'] = 'Bannlys Anv�ndare'; // admin_user_ban.php
$lang['220_Bantron'] = 'Bantron'; // admin_user_bantron.php
$lang['250_Postcount_Config'] = 'Redigera Postr�kning'; // admin_postcount.php
$lang['260_CPF_Add'] = 'L�gg till Anpassat Profil F�lt'; // admin_profile_fields.php
$lang['270_CPF_Edit'] = 'Redigera Anpassade Profil F�lt'; // admin_profile_fields.php
$lang['280_User_Search'] = 'Ut�kad Anv�ndar S�kning'; // admin_user_search.php
$lang['290_Poll_Results'] = 'Unders�knings Resultat'; // admin_voting.php
$lang['300_Picscount_Config'] = 'Sync Bild R�kning'; // admin_postcount.php

// Groups
$lang['1620_Groups'] = 'Grupper'; // admin_color_groups.php, admin_groups.php, admin_ug_auth.php
$lang['110_Manage_Groups'] = 'Hantera Grupper'; // admin_groups.php
$lang['120_Color_Groups'] = 'F�rg Grupper'; // admin_color_groups.php
$lang['130_Permissions_Group'] = 'Beh�righeter'; // admin_ug_auth.php

// Topic Rating
$lang['1700_Topic_Rating'] = '�mnes Klassificering'; // admin_rate.php

// Knowledge Base
$lang['1800_KB_title'] = 'Kunskaps Bas'; // admin_kb_art.php, admin_kb_auth.php, admin_kb_cat.php, admin_kb_config.php, admin_kb_custom.php, admin_kb_rebuild_search.php, admin_kb_types.php
$lang['100_KB_Configuration'] = 'Konfiguration'; // admin_kb_config.php
$lang['110_Art_man'] = 'Artikel Administration'; // admin_kb_art.php
$lang['120_Cat_man'] = 'Kategorier Administration'; // admin_kb_cat.php
$lang['130_Types_man'] = 'Artikel Typer'; // admin_kb_types.php
$lang['140_Custom_Field'] = 'Anpassade F�lt'; // admin_kb_custom.php
$lang['150_Permissions'] = 'Beh�righeter'; // admin_kb_auth.php
$lang['160_Optimize_tables'] = 'Optimera Tabeller'; // admin_kb_rebuild_search.php

// Attachments
$lang['1900_Attachments'] = 'Bilagor'; // admin_attach_cp.php, admin_attachments.php, admin_extensions.php
$lang['100_Control_Panel'] = 'Kontroll Panel'; // admin_attach_cp.php
$lang['110_Att_Manage'] = 'Administration'; // admin_attachments.php
$lang['120_Quota_limits'] = 'Kvot Begr�nsning'; // admin_attachments.php
$lang['130_Shadow_attachments'] = 'Skugg Bilagor'; // admin_attachments.php
$lang['140_Sync_attachments'] = 'Synkronisera Bilagor'; // admin_attachments.php
$lang['150_Extension_control'] = 'F�rl�ngnings Kontroll'; // admin_extensions.php
$lang['160_Extension_group_manage'] = 'Hantera F�rl�ngnings Grupper'; // admin_extensions.php
$lang['170_Forbidden_extensions'] = 'F�rbjudna F�rl�ngningar'; // admin_extensions.php
$lang['180_Special_categories'] = 'S�rskilda Kategorier'; // admin_attachments.php

// Downloads
$lang['2000_Downloads'] = 'Nerladdningar'; // admin_pa_catauth.php, admin_pa_category.php, admin_pa_custom.php, admin_pa_fchecker.php, admin_pa_file.php, admin_pa_license.php, admin_pa_settings.php
$lang['100_Settings'] = 'Konfiguration'; // admin_pa_settings.php
$lang['110_Cat_manage_title'] = 'Hantera Kategorier'; // admin_pa_category.php
$lang['120_File_manage_title'] = 'Hantera Filer'; // admin_pa_file.php
$lang['130_Fchecker'] = 'Fil Kontrollerare'; // admin_pa_fchecker.php
$lang['140_Mfieldtitle'] = 'Anpassade F�lt'; // admin_pa_custom.php
$lang['150_License_title'] = 'Hantera Licenser'; // admin_pa_license.php
$lang['160_Permissions'] = 'Beh�righeter'; // admin_pa_catauth.php

// Downloads
$lang['2050_Downloads'] = 'Ladda ner ADV'; // admin_pa_catauth.php, admin_pa_category.php, admin_pa_custom.php, admin_pa_fchecker.php, admin_pa_file.php, admin_pa_license.php, admin_pa_settings.php
$lang['100_DL_Settings'] = 'Konfiguration'; // admin_pa_settings.php

// Links
$lang['2100_Links'] = 'L�nkar'; // admin_links.php, admin_links_cat.php, admin_links_config.php
$lang['100_Configuration'] = 'Konfiguration'; // admin_links_config.php
$lang['110_Category'] = 'Hantera Kategorier'; // admin_links_cat.php
$lang['120_Add_new'] = 'L�gg till L�nk'; // admin_links.php
$lang['130_Link_Manage'] = 'Hantera L�nkar'; // admin_links.php

// Album
$lang['2200_Photo_Album'] = 'Foto Album'; // admin_album_auth.php, admin_album_cat.php, admin_album_config_extended.php
$lang['110_Album_Config'] = 'Konfiguration'; // admin_album_config_extended.php
$lang['120_Album_Categories'] = 'Hantera Kategorier'; // admin_album_cat.php
$lang['130_Album_Permissions'] = 'Beh�righeter'; // admin_album_auth.php
$lang['140_Personal_Galleries'] = 'Personliga Gallerier'; // admin_album_personal.php

// FAQ
$lang['2300_FAQ'] = 'FAQ & Regler'; // admin_faq_editor.php
$lang['110_FAQ_BBCode'] = 'BBKod FAQ'; // admin_faq_editor.php
$lang['120_FAQ_Board'] = 'Webbplats FAQ'; // admin_faq_editor.php
$lang['130_FAQ_Rules'] = 'Webbplats Regler'; // admin_faq_editor.php

// INFO
$lang['2400_INFO'] = 'Info'; // admin_logs.php, admin_phpinfo.php, admin_gd_info.php, admin_referrers.php, admin_google_bot_detector.php
$lang['110_Actions_LOG'] = '�tg�rds Logg'; // admin_logs.php
$lang['120_PHP_INFO'] = 'PHP Info'; // admin_phpinfo.php
$lang['130_GD_Info'] = 'GD Info'; // admin_gd_info.php
$lang['140_HTTP_REF'] = 'HTTP Referrers'; // admin_referrers.php
$lang['150_Google_BOT'] = 'Google Bot Detector'; // admin_google_bot_detector.php

// ####################### [ ACP Navigation END ] #######################

?>