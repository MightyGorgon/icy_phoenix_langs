<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin.php 110 2009-07-14 08:09:47Z Mighty Gorgon $
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

$lang = array_merge($lang, array (
  'General' => 'Általános',
  'Users' => 'Felhasználók',
  'Groups' => 'Csoportok',
  'Forums' => 'Fórumok',
  'Styles' => 'Sablonok',
  
  'Configuration' => 'Beállítás',
  'Various_Configuration' => 'Various Settings',
  'Permissions' => 'Jogosultságok',
  'Manage' => 'Beállítás',
  'manage' => 'Management',
  'Disallow' => 'Tiltott nevek',
  'Prune' => 'Karbantartás',
  'Mass_Email' => 'Csoportos email',
  'Ranks' => 'Rangok',
  'Smilies' => 'Emotikonok',
  'Ban_Management' => 'Kitiltások',
  'Word_Censor' => 'Cenzúra',
  'Export' => 'Exportálás',
  'Create_new' => 'Készítés',
  'Add_new' => 'Hozzáadás',
  'Backup_DB' => 'Adatbázis kimentése',
  'Restore_DB' => 'Adatbázis visszaállítása',
  'DB_Maintenance' => 'Database Tools',
  'News_Admin' => 'News',
  'News_Cats' => 'News Categories',
  'News_Config' => 'News Configuration',
  'Security' => 'Security',
  'Member_Tries' => 'Member Tries',
  'Quick_Search' => 'Quick Search',
  'Special' => 'Special',
  'Styles_Management' => 'Styles Management',
  'Manage_Bots' => 'Bots Management',
  'Admin_Notepad' => 'Notepad',
  
// Index
  'Admin' => 'Adminisztráció',
  'Not_admin' => 'Nincs jogosultságod az adminisztrációhoz!',
  'Welcome_phpBB' => 'Üdvözlünk a phpBB-ben!',
  'Admin_intro' => 'Köszönjük, hogy a phpBB-t választottad a fórumod megvalósításához. Ebben az ablakban egy gyors áttekintést láthatsz a Fórum néhány adatáról. Erre az oldalra mindig visszatérhetsz, ha a bal oldali menüpontban rákattintasz az <i>Admin kezdõlap</i> linkre. A Fórumba való visszatéréshez kattints a phpBB ikonra, mely szintén a bal oldali menü tetején található meg. A többi hivatkozással a Fórum beállításait változtathatod meg, a legapróbb részletekbe menõen. Minden oldalhoz egy külön kis leírás tartozik, mely segít a beállításokban.',
  'PayPalInfo' => 'Icy Phoenix is an open source project, you can show your appreciation and support future development by donating to the project.',
  'Forum_stats' => 'Fórum statisztika',
  'Admin_Index' => 'Admin kezdõlap',
  'Preview_forum' => 'Fórum elõnézet',
  'Click_return_admin_index' => 'Kattints %side%s, hogy visszatérj az Admin kezdõlapra',
  'Portal' => 'Home Page',
  'Preview_Portal' => 'Preview Home Page',
  'Main_index' => 'Fórum kezdõlap',
  
  'Statistic' => 'Statisztika',
  'Value' => 'Érték',
  'Number_posts' => 'Hozzászólások száma',
  'Posts_per_day' => 'Hozzászólások száma naponta',
  'Number_topics' => 'Témák száma',
  'Topics_per_day' => 'Témák száma naponta',
  'Number_users' => 'Felhasználók száma',
  'Users_per_day' => 'Felhasználók száma naponta',
  'Board_started' => 'Fórum indulása',
  'Avatar_dir_size' => 'Avatar könyvtár mérete',
  'Database_size' => 'Adatbázis mérete',
  'Gzip_compression' => 'Gzip tömörítés',
  'Not_available' => 'Nem elérhetõ',
  
  'ON' => 'Bekapcsolva', // This is for GZip compression
  'OFF' => 'Kikapcsolva',
  
// DB Utils
  'Database_Utilities' => 'Adatbázis eszközök',
  
  'Restore' => 'Visszaállítás',
  'Backup' => 'Kimentés',
  'Restore_explain' => 'Ezzel a funkcióval a phpBB fórum adatbázisának összes tábláját vissza lehet tölteni egy kimentett fájlból. Ha a szerver támogatja a kicsomagolást, akkor egy GZIP-pel tömörített szöveges fájlból is be lehet tölteni. <b>FIGYELEM!</b> Ez felülírja az éppen használt adatbázist! Az adatbázis visszaállítása eltarthat egy ideig, ezért ne menj el addig errõl az oldalról, míg nem jelzi, hogy kész van.',
  'Backup_explain' => 'Ezzel a funkcióval a phpBB fórum adatbázisának összes tábláját ki lehet menteni egy külsõ fájlba. Ha van más, egyéni phpBB-hez tartozó tábla is az adatbázisban, akkor add meg azoknak a neveit is, vesszõvel elválasztva - az alábbi Egyéb táblák mezõbe. Ha támogatja a szerver, akkor használhatsz GZIP tömörítést is, hogy kisebb legyen a letöltendõ fájl mérete.',
  
  'Backup_options' => 'Kimentési beállítások',
  'Start_backup' => 'Kimentés indítása',
  'Full_backup' => 'Teljes kimentés',
  'Structure_backup' => 'Csak az adatbázis felépítésének kimentése',
  'Data_backup' => 'Csak az adatok kimentése',
  'Additional_tables' => 'Egyéb táblák',
  'phpBB_only' => 'Only Icy Phoenix related tables',
  'Gzip_compress' => 'Gzip tömörítés',
  'Select_file' => 'Fájl kiválasztása',
  'Start_Restore' => 'Visszaállítás indítása',
  
  'Restore_success' => 'Az adatbázist sikeresen visszaállítottam!<br /><br />A Fórum visszakerült a kimentés elõtti állapotba.',
  'Backup_download' => 'A letöltés hamarosan elindul, várj a megkezdéséig.',
  'Backups_not_supported' => 'Az adatbázis kimentése nem lehetséges, mivel ez nincs támogatva ebben az adatbázis rendszerben.',
  
  'Restore_Error_uploading' => 'Hiba a kimentett fájl feltöltése közben.',
  'Restore_Error_filename' => 'Hibás fájlnév, válassz egy másik fájlt.',
  'Restore_Error_decompress' => 'A GZIP kitömörítés nem lehetséges, adj meg egy sima szöveges fájlt.',
  'Restore_Error_no_file' => 'A feltöltés sikertelen volt.',
  
// Auth pages
  'Select_a_User' => 'Válassz egy felhasználót',
  'Select_a_Group' => 'Válassz egy csoportot',
  'Select_a_Forum' => 'Válassz egy fórumot',
  'Auth_Control_User' => 'Felhasználói engedélyek beállítása',
  'Auth_Control_Group' => 'Csoportengedélyek beállítása',
  'Auth_Control_Forum' => 'Fórumhoz tartozó jogosultságok beállítása',
// Start add Permission List
  'Auth_list_Control_Forum' => 'All Forums Permissions Control',
// End add Permission List
  'Look_up_User' => 'Felhasználó keresése',
  'Look_up_Group' => 'Csoport keresése',
  'Look_up_Forum' => 'Fórum keresése',
  
  'Group_auth_explain' => 'Itt állíthatsz be jogosultságokat és moderátor jogokat az egyes csoportokhoz. Ne felejtsd el, hogy a csoport jogosultság megváltoztatásával egyes felhasználók még hozzáférhetnek a csoporthoz. Ebben az esetben egy figyelmezetõ üzenetet fogsz kapni.',
  'User_auth_explain' => 'Itt állíthatsz be jogosultságokat és moderátor jogokat az egyes felhasználókhoz. Ne felejtsd el, hogy a felhasználói jogosultság megváltoztatásával egyes felhasználók még hozzáférhetnek egyes fórumokhoz, stb. Ebben az esetben egy figyelmezetõ üzenetet fogsz kapni.',
  'Forum_auth_explain' => 'Itt állíthatod be a hozzáférési jogosultságokat az egyes fórumokhoz, az Egyszerû vagy Bõvített lehetõséget használva. Ne feledd, hogy a jogosultságok megváltoztatásával a felhasználók újabb opciókat, és változtatási lehetõséget érhetnek el.',
// Start add Permission List
  'Forum_auth_list_explain' => 'Alter the authorization levels of each forum. Remember that changing the permission level of forums will affect which users can carry out the various operations within them.',
// End add Permission List
  
  'Simple_mode' => 'Egyszerû mód',
  'Advanced_mode' => 'Bõvített mód',
  'Moderator_status' => 'Moderátori státusz',
  
  'Allowed_Access' => 'Hozzáférés engedélyezve',
  'Disallowed_Access' => 'Hozzáférés megtagadva',
  'Is_Moderator' => 'Moderátor',
  'Not_Moderator' => 'Nem moderátor',
  
  'Conflict_warning' => 'Jogosultság-ütközés',
  'Conflict_access_userauth' => 'Ennek a felhasználónak már van fórum jogosultsága, a csoporttagságon keresztül. Ha ezt meg akarod szüntetni vagy meg akarod változtatni, akkor a felhasználó egyéni jogosultságaiban változtasd meg. A felhasználónak az alábbi jogosultságai vannak:',
  'Conflict_mod_userauth' => 'Ennek a felhasználónak már van moderátori joga ehhez a fórumhoz a csoporttagságon keresztül. Ha ezt meg akarod szüntetni, akkor a felhasználó egyéni jogosultságaiban változtasd meg. A felhasználónak az alábbi jogosultságai vannak:',
  
  'Conflict_access_groupauth' => 'Az egyéni jogosultságok beállításában ennek a felhasználónak már van jogosultsága ehhez a fórumhoz. Ha ezt meg akarod változtatni, akkor a felhasználó egyéni jogosultságaiban tedd meg. A felhasználónak az alábbi jogosultságai vannak:',
  'Conflict_mod_groupauth' => 'Az egyéni jogosultságok beállításában ennek a felhasználónak már van moderátori joga ehhez a fórumhoz. Ha ezt meg akarod szüntetni, akkor a felhasználó egyéni jogosultságaiban változtasd meg. A felhasználónak az alábbi jogosultságai vannak:',
  
  'Public' => 'Nyilvános',
  'Private' => 'Privát',
  'Registered' => 'Regisztrált',
  'Self' => 'Self',
  'Administrators' => 'Adminisztrátor',
  'Hidden' => 'Rejtett',
  
// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
  'Forum_NONE' => 'NONE',
  'Forum_ALL' => 'MINDENKI',
  'Forum_REG' => 'REG',
  'Forum_SELF' => 'SELF',
  'Forum_PRIVATE' => 'PRIVÁT',
  'Forum_MOD' => 'MOD',
  'Forum_JADMIN' => 'J ADMIN',
  'Forum_ADMIN' => 'ADMIN',
  
  'View' => 'Látás',
  'Read' => 'Olvasás',
  'Post' => 'Témanyitás',
  'Reply' => 'Hozzászólás',
  'Edit' => 'Szerkeszt',
  'Delete' => 'Töröl',
  'Sticky' => 'Kiemelt',
  'Announce' => 'Közlemény',
  'Vote' => 'Szavazás',
  'Pollcreate' => 'Szavazás készítése',
  
  'Simple_Permission' => 'Egyszerû jogosultság',
  
  'User_Level' => 'Felhasználószint',
  'Auth_User' => 'Felhasználó',
  'Auth_Junior_Admin' => 'Junior Administrator',
  'Auth_Admin' => 'Adminisztrátor',
  'Group_memberships' => 'Csoporttagságok',
  'Usergroup_members' => 'A következõ felhasználók tartoznak ebbe a csoportba:',
  
  'Forum_auth_updated' => 'Fórum engedélyek frissítve.',
  'User_auth_updated' => 'Felhasználói engedélyek frissítve.',
  'Group_auth_updated' => 'Csoport-jogosultságok frissítve.',
  
  'Auth_updated' => 'A Jogosultságok sikeresen megváltoztak!',
  'Click_return_userauth' => 'Kattints %side%s, hogy visszatérj a Felhasználói jogosultság beállításaihoz.',
  'Click_return_groupauth' => 'Kattints %side%s hogy visszatérj a Csoport jogosultság beállításaihoz.',
  'Click_return_forumauth' => 'Kattints %side%s hogy visszatérj a Fórum jogosultság beállításaihoz.',
  
// Banning
  'Ban_control' => 'Kitiltás',
  'Ban_explain' => 'Ezen az oldalon lehet kitiltani egy vagy több felhasználót, így azok nem tudják betölteni a Fórum kezdõoldalát. Ezt vagy felhasználónév, vagy IP-cím (vagy IP-tartomány), vagy hosztnév megadásával érheted el. Az email-címet is letilthatod, ekkor a felhasználó nem tudja új néven regisztrálni magát. Figyelem, egy email-cím letiltásával még nem biztos, hogy a felhasználó ki lett tiltva a Fórumról; ehhez a felhasználónév, az IP-cím, és az email-cím egyidejû letiltását használd.',
  'Ban_explain_warn' => 'Figyelem! Az IP-tartomány megadásával a kezdõ, és az utolsó IP között az összes cím le lesz tiltva. Lehetõség szerint minél kisebb tartományt adj meg, hogy ne legyen túl nagy az adatbázis mérete, illetve ha túl nagy tartományt adsz meg, elõfordulhat, hogy vétlen felhasználók sem fogják tudni használni a fórumot. Ha muszáj tartományt megadni, akkor lehetõleg minél kisebbet adj meg, de jobb, ha csak az IP-címeket határozol meg.',
  
  'Select_username' => 'Felhasználónév kiválasztása',
  'Select_ip' => 'IP-cím kiválasztása',
  'Select_email' => 'Email-cím kiválasztása',
  
  'Ban_username' => 'Felhasználó kitiltása',
  'Ban_username_explain' => 'A használt operációs rendszertõl és böngészõtõl függõen egyszerre több felhasználót is ki lehet tiltani (kijelöléssel, a CTRL és a SHIFT gomb használatával).',
  
  'Ban_IP' => 'IP-cím, vagy hosztnév letiltása',
  'IP_hostname' => 'IP-címek vagy hosztnevek',
  'Ban_IP_explain' => 'Több IP-cím, vagy hosztnév megadásához vesszõvel válaszd el õket. IP-tartomány megadásához az elsõ és az utolsó szám elé tegyél egy kötõjelet. Jokerkaraktert (*) is használhatsz.',
  
  'Ban_email' => 'Email-cím letiltása',
  'Ban_email_explain' => 'Több email-cím kitiltásához vesszõvel válaszd el a címeket. Jokerkaraktert (*) is használhatsz, pld. *@hotmail.com',
  
  'Unban_username' => 'Felhasználó(k) engedélyezése',
  'Unban_username_explain' => 'A használt operációs rendszertõl és böngészõtõl függõen egyszerre több felhasználót is lehet újraengedélyezni (kijelöléssel, a CTRL és a SHIFT gomb használatával).',
  
  'Unban_IP' => 'IP-cím(ek) vagy hosztnév(ek) engedélyezése',
  'Unban_IP_explain' => 'A használt operációs rendszertõl és böngészõtõl függõen egyszerre több IP-címet is lehet engedélyezni (kijelöléssel, a CTRL és a SHIFT gomb használatával).',
  
  'Unban_email' => 'Email-cím(ek) engedélyezése',
  'Unban_email_explain' => 'A használt operációs rendszertõl és böngészõtõl függõen egyszerre több email-címet is lehet engedélyezni (kijelöléssel, a CTRL és a SHIFT gomb használatával).',
  
  'No_banned_users' => 'Nincsen kitiltott felhasználó.',
  'No_banned_ip' => 'Nincsen letiltott IP-cím',
  'No_banned_email' => 'Nincsen letiltott email-cím',
  
  'Ban_update_sucessful' => 'A kitiltások listája sikeresen megváltozott!',
  'Click_return_banadmin' => 'Kattints %side%s, hogy visszatérj a Kitiltás beállításaihoz.',
  
// Configuration
  'General_Config' => 'Általános beállítások',
  'Config_explain' => 'A Fórum alapvetõ beállításait adhatod meg itt.',
  
  'Click_return_config' => 'Kattints %side%s, hogy visszatérj az Általános beállításokhoz',
  
  'General_settings' => 'Általános beállítások',
  'Server_name' => 'Domain név:',
  'Server_name_explain' => 'A domain név, melyen a Fórum fut',
  'Script_path' => 'Fórum elérési útvonal:',
  'Script_path_explain' => 'A phpBB relatív elérési útvonala, a domain névhez képest',
  'Server_port' => 'Szerver port:',
  'Server_port_explain' => 'A használt port, szinte mindig a 80-as.',
  'Site_name' => 'Oldal neve:',
  'Site_desc' => 'Oldal leírása:',
  'Board_disable' => 'Fórum kikapcsolása:',
  'Board_disable_explain' => 'Ha igenre állítod, a felhasználók nem érhetik el a fórumot. Az Adminsztrátorok ettõl függetlenül beléphetnek az Adminisztrációs panelbe.',
  'Acct_activation' => 'Azonosító aktiválása:',
  'Acc_None' => 'Nincs', // These three entries are the type of activation
  'Acc_User' => 'Felhasználói',
  'Acc_Admin' => 'Adminisztrátori',
  
  'Abilities_settings' => 'Felhasználó és fórum beállítások',
  'Max_poll_options' => 'Választási lehetõségek maximális száma a szavazásokban:',
  'Flood_Interval' => 'Flood idõköz:',
  'Flood_Interval_explain' => 'Ennyi másodpercet kell várni két hozzászólás elküldése között.',
  'Board_email_form' => 'Felhasználói levelezés engedélyezése az oldalon keresztül:',
  'Board_email_form_explain' => 'A felhasználók email üzeneteket küldhetnek egymásnak az oldalon keresztül.',
  'Topics_per_page' => 'Témák oldalaként:',
  'Posts_per_page' => 'Hozzászólások oldalanként:',
  'Hot_threshold' => 'Hozzászólások száma téma népszerûként megjelöléséhez:',
  'Default_style' => 'Kezdõsablon:',
  'Override_style' => 'Felhasználó sablonjának felülírása:',
  'Override_style_explain' => 'Ez esetben mindenki csak a kezdõsablont használhatja.',
  'Default_language' => 'Alapbeállítású nyelv:',
  'Date_format' => 'Dátum formátum:',
  'System_timezone' => 'Rendszer idõzóna:',
  'Enable_gzip' => 'GZIP tömörítés bekapcsolása:',
// Start Gzip Compression Level MOD
  'Gzip_level' => 'Gzip Compression Level',
  'Gzip_level_explain' => 'Here you may change the compression level (a number between 0-9). 0 is equivalent to off, 1 is very low, and 9 is the maximum. 9 is recommended.',
// End Gzip Compression Level MOD
  'Enable_prune' => 'Automatikus karbantartás bekapcsolása:',
  'Allow_HTML' => 'HTML engedélyezése:',
  'Allow_BBCode' => 'BBCode engedélyezése:',
  'Allowed_tags' => 'Engedélyezett HTML tagek:',
  'Allowed_tags_explain' => 'A tageket vesszõvel kell elválasztani.',
  'Allow_smilies' => 'Emotikonok engedélyezése:',
  'Smilies_path' => 'Emotikonok elérési útvonala:',
  'Smilies_path_explain' => 'A phpBB-n belüli elérési út, általában: images/smiles',
  'Allow_sig' => 'Aláírás engedélyezése:',
  'Max_sig_length' => 'Aláírás maximum hossza:',
  'Max_sig_length_explain' => 'Az aláírások maximum hossza karakterben',
  'Allow_name_change' => 'Felhasználónév-váltás engedélyezése:',
  
  'Avatar_settings' => 'Avatar beállítások',
  'Allow_local' => 'Avatar galéria bekapcsolása:',
  'Allow_remote' => 'Távoli avatar engedélyezése:',
  'Allow_remote_explain' => 'Más weboldalról belinkelt avatarok engedélyezése',
  'Allow_upload' => 'Avatar feltöltés engedélyezése:',
  'Max_filesize' => 'Maximum avatar képméret:',
  'Max_filesize_explain' => 'A feltöltött avatar képek legfeljebb ilyen nagyságúak lehetnek.',
  'Max_avatar_size' => 'Maximum avatar felbontás:',
  'Max_avatar_size_explain' => 'Szélesség x Magasság pixelben',
  'Avatar_storage_path' => 'Avatarok elérési útvonala:',
  'Avatar_storage_path_explain' => 'A phpBB-n belüli elérési út, általában: images/avatars',
  'Avatar_gallery_path' => 'Avatar galéria helye:',
  'Avatar_gallery_path_explain' => 'A phpBB-n belüli elérési út, általában: images/avatars/gallery',
  
  'COPPA_settings' => 'COPPA beállítások',
  'COPPA_fax' => 'COPPA fax-szám:',
  'COPPA_mail' => 'COPPA levelezési cím:',
  'COPPA_mail_explain' => 'Az a levélcím, ahova a szülõknek a COPPA regisztrációs kérelmeket kell küldeniük.<br />A COPPA-t az Amerikai Egyesült Államokban használják. Lényege, hogy csak a szülõ engedélyével regisztrálhat a Fórumon a 13 éven aluli gyerek (a szülõnek jóvá kell hagynia gyermeke regisztrációját a megadott címre vagy fax-számra küldött nyilatkozattal).',
  
  'Email_settings' => 'Email beállítások',
  'Admin_email' => 'Az Adminisztrátor email-címe:',
  'Email_sig' => 'Email aláírás:',
  'Email_sig_explain' => 'A fórum által kiküldött levelek végéhez csatolt szöveg',
  'Use_SMTP' => 'SMTP szerver használata emailküldéshez:',
  'Use_SMTP_explain' => 'Kapcsold be, ha egy külsõ email-szervert akarsz használni.',
  'SMTP_server' => 'SMTP szerver címe:',
  'SMTP_username' => 'SMTP felhasználónév:',
  'SMTP_username_explain' => 'Csak akkor töltsd ki, ha szükséges.',
  'SMTP_password' => 'SMTP jelszó:',
  'SMTP_password_explain' => 'Csak akkor töltsd ki, ha szükséges.',
  
  'Disable_privmsg' => 'Privát üzenetküldés:',
  'Inbox_limits' => 'Üzenetek maximális száma az Érkezett fiókban:',
  'Sentbox_limits' => 'Üzenetek maximális száma az Elküldött fiókban:',
  'Savebox_limits' => 'Üzenetek maximális száma az Mentés fiókban:',
  
  'Cookie_settings' => 'Cookie beállítások',
  'Cookie_settings_explain' => 'Itt állíthatod be a felhasználók böngészõinek kiküldött cookie-kat. A legtöbb esetben elegendõek az alapbeállítások, így csak óvatosan változtass rajtuk, mert elõfordulhat, hogy a felhasználók nem fognak tudni belépni',
  'Cookie_domain' => 'Cookie domain:',
  'Cookie_name' => 'Cookie neve:',
  'Cookie_path' => 'Cookie elérési út:',
  'Cookie_secure' => 'Cookie titkosítása:',
  'Cookie_secure_explain' => 'Ha a szerver SSL titkosítással fut, akkor kapcsold be ezt az opciót, különben hagyd kikapcsolva.',
  'Session_length' => 'Session hossz [ másodperc ]:',
  
// Visual Confirmation
  'Visual_confirm' => 'Regisztráció vizuális megerõsítése:',
  'Visual_confirm_explain' => 'A regisztrációnál a felhasználónak be kell írnia egy automatikusan generált vizuális kódot, amivel megerõsíti a regisztrációt (robotok regisztrációja ellen).',
  
// Autologin Keys - added 2.0.18
  'Allow_autologin' => 'Automatikus bejelentkezés engedélyezése:',
  'Allow_autologin_explain' => 'A felhasználók kiválaszthatják-e, hogy automatikusan bejelentkeztesse õket a rendszer a fórum meglátogatáskor.',
  'Autologin_time' => 'Automatikus bejelentkezés lejárata:',
  'Autologin_time_explain' => 'Hány napig érvényes az automatikus bejelentkezéshez szükséges kulcs, ha a felhasználó nem látogatja meg a fórumot. Állítsd 0-ra, hogy soha ne járjon le.',
  
// Forum Management
  'Forum_admin' => 'Fórum adminisztráció',
  'Forum_admin_explain' => 'Innen tudsz új fórumot nyitni, törölni, szerkeszteni, átrendezni, kategorizálni és szinkronizálni.',
  'Edit_forum' => 'Fórum szerkesztése',
  'Create_forum' => 'Új fórum',
  'Create_category' => 'Új témakör',
  'Remove' => 'Eltávolít',
  'Action' => 'Utasítás',
  'Update_order' => 'Frissítési sorrend',
  'Config_updated' => 'A Fórum beállításai sikeresen frissültek!',
  'Move_up' => 'Feljebb',
  'Move_down' => 'Lejjebb',
  'Resync' => 'Szinkronizál',
  'No_mode' => 'Nem lett mód kiválasztva!',
  'Forum_edit_delete_explain' => 'Az alábbi oldallal beállíthatod a fórum legfontosabb tulajdonságait. A Fórum és a Felhasználók beállításához használd a baloldali menüt.',
  
  'Move_contents' => 'Összes tartalom átmozgatása',
  'Forum_delete' => 'Fórum törlése',
  'Forum_delete_explain' => 'Az alábbi oldal segítségével törölhetsz egy fórumot, (vagy kategóriát), megadva, hogy a tartalmazott fórumok (vagy témák) hova kerüljenek át.',
  
  'Status_locked' => 'Lezárt',
  'Status_unlocked' => 'Nyitott',
  'Forum_settings' => 'Általános fórum beállítások',
  'Forum_name' => 'Fórum neve',
  'Forum_desc' => 'Leírás',
  'Forum_status' => 'Fórum státusz',
  'Forum_pruning' => 'Automatikus karbantartás',
  
  'prune_freq' => 'Témák ellenõrzése (ennyi naponta):',
  'prune_days' => 'Témák törlése, melyekbe ennyi napig nem érkezett hozzászólás:',
  'Set_prune_data' => 'Az automatikus karbantartás be van kapcsolva, de ehhez a fórumhoz nincsen megadva a karbantartás gyakorisága. Lépj vissza, és állítsd be.',
  
  'FORUM_SIMILAR_TOPICS' => 'Similar Topics',
  'FORUM_SIMILAR_TOPICS_EXPLAIN' => 'If you enable this option you will see a box with similar topics at the bottom of each topic in this forum (please note that you need also to enable the global switch for this feature in Icy Phoenix Settings => SEO TAB)',
  'FORUM_TOPIC_VIEWS' => 'Topics Viewer',
  'FORUM_TOPIC_VIEWS_EXPLAIN' => 'If you enable this option all users that views topics in this forum will be stored in the DB (please note that you need also to enable the global switch for this feature in Icy Phoenix Settings => SQL TAB)',
  'FORUM_TAGS' => 'Forum Tags',
  'FORUM_TAGS_EXPLAIN' => 'If you enable this option you will see a box with all the most used words in this forum (please note that you need also to enable the global switch for this feature in Icy Phoenix Settings => SEO TAB)',
  'FORUM_SORT_BOX' => 'Topic Sort Box',
  'FORUM_SORT_BOX_EXPLAIN' => 'If you enable this option you will see a box wich allows you to alphabetically sort topics in this forum (please note that you need also to enable the global switch for this feature in Icy Phoenix Settings)',
  'FORUM_KB_MODE' => 'KB Mode',
  'FORUM_KB_MODE_EXPLAIN' => 'If you enable this option this forum will be shown in KB Mode (topics listed like Knowledge Base)',
  'FORUM_INDEX_ICONS' => 'Index Icons',
  'FORUM_INDEX_ICONS_EXPLAIN' => 'If you enable this option you will see icons for RSS and New Topic in Forum Index (please note that you need also to enable the global switch for this feature in Icy Phoenix Settings)',
  
  'Move_and_Delete' => 'Átmozgatás és törlés',
  
  'Delete_all_posts' => 'Összes hozzászólás törlése',
  'Nowhere_to_move' => 'Sehova sem lehet áthelyezni.',
  
  'Edit_Category' => 'Témakör szerkesztése',
  'Edit_Category_explain' => 'Ezzel a témakör nevét változtathatod meg.',
  
  'Forums_updated' => 'A fórum és témakör beállításai sikeresen frissültek!',
  
  'Must_delete_forums' => 'Elõbb az összes fórumot törölnöd kell, hogy törölhesd ezt a kategóriát.',
  
  'Click_return_forumadmin' => 'Kattints %side%s, hogy visszatérj a Fórum beállításaihoz.',
  
// Smiley Management
  'smiley_title' => 'Emotikon beállítások',
  'smile_desc' => 'Ezen az oldalon adhatsz új emotikonokat a fórumhoz, illetve szerkesztheted és törölheted a már meglévõket.',
  
  'smiley_config' => 'Emotikon beállítása',
  'smiley_code' => 'Emotikon kód:',
  'smiley_url' => 'Emotikon képfájl:',
  'smiley_emot' => 'Jelentés:',
  'smile_add' => 'Új emotikon hozzáadása',
  'Smile' => 'Smiley',
  'Emotion' => 'Emotikon',
  
  'Select_pak' => 'Emotikon csomagfájl (.pak) kiválasztása',
  'replace_existing' => 'Jelenlegi emotikonok felülírása',
  'keep_existing' => 'Jelenlegi emotikonok megtartása',
  'smiley_import_inst' => 'Töltsd fel az emotikonok könyvtárába a képeket, és az exportálásnál elkészített *.pak fájlt. Utána a megfelelõ adatok megadásával importálható az emotikon csomag.',
  'smiley_import' => 'Emotikonok importálása',
  'choose_smile_pak' => 'Emotikon csomag kiválasztása (.pak fájl)',
  'import' => 'Emotikonok importálása',
  'smile_conflicts' => 'Aktuális emotikonok:',
  'del_existing_smileys' => 'Telepített emotikonok törlése importálás elõtt',
  'import_smile_pack' => 'Emotikon csomag importálása',
  'export_smile_pack' => 'Emotikon csomag exportálása',
  'export_smiles' => 'Az emotikon csomag exportálásához kattints %sIDE%s, hogy letöltsd a smiles.pak fájlt. Ha át akarod nevezni, akkor figyelj arra, hogy a .pak kiterjesztés megmaradjon. Utána a .pak fájlt és az emotikon képeket tömörítsd be egy fájlba.',
  
  'smiley_add_success' => 'Az emotikon sikeresen bekerült a listába!',
  'smiley_edit_success' => 'Az emotikon beállításai sikeresen megváltoztak!',
  'smiley_import_success' => 'Az emotikon csomag importálása sikeres volt!',
  'smiley_del_success' => 'Az emotikon eltávolítása sikeres volt!',
  'Click_return_smileadmin' => 'Kattints %side%s, hogy visszatérj az emotikonok beállításaihoz',
  
// User Management
  'User_admin' => 'Felhasználói beállítások',
  'User_admin_explain' => 'Ezen az oldalon megadhatod, megváltoztathatod a felhasználók adatait, és néhány általános tulajdonságot állíthatsz be. A jogosultságok kiosztásához használd az egyéni- és csoportjogosultság-kezelõ rendszert.',
  
  'Look_up_user' => 'Felhasználó keresése',
  
  'Admin_user_fail' => 'A felhasználó profiljának frissítése sikertelen volt.',
  'Admin_user_updated' => 'A felhasználó profilja sikeresen módosult!',
  'Click_return_useradmin' => 'Kattints %side%s, hogy visszatérj a Felhasználó beállításokhoz',
//Start Quick Administrator User Options and Information MOD
  'Click_return_userprofile' => 'Kattints %side%s to return to the user\'s profile',
//End Quick Administrator User Options and Information MOD
  'User_delete' => 'Felhasználó törlése',
  'User_delete_explain' => 'Jelöld be, ha törölni akarod a felhasználót. A törlés után nem lehet visszahozni!',
  'User_deleted' => 'A felhasználó sikeresen törölve lett.',
  
  'User_status' => 'Aktív felhasználó',
  'User_allowpm' => 'Küldhet privát üzenetet',
  'User_allowavatar' => 'Beállíthat avatart',
  
  'Admin_avatar_explain' => 'Itt nézheted meg, és törölheted a felhasználó avatarját.',
  
  'User_special' => 'Speciális beállítások',
  'User_special_explain' => 'A felhasználók nem módosíthatják ezeket a mezõket.',
  
// Group Management
  'Group_administration' => 'Csoportok beállítása',
  'Group_admin_explain' => 'Ezzel az oldallal kezelni tudod a Csoportokat, törölheted, módosíthatod õket, és újakat készíthetsz. Válaszhatsz moderátort a csoporthoz, megadhatod, hogy nyílt vagy zárt csoport legyen-e, megadhatod a csoport nevét és leírását.',
  'Error_updating_groups' => 'A frissítés közben hiba történt.',
  'Updated_group' => 'A csoport sikeresen frissült!',
  'Added_new_group' => 'A csoport sikeresen elkészült!',
  'Deleted_group' => 'A csoport sikeresen törölve lett!',
  'New_group' => 'Új csoport',
  'Edit_group' => 'Csoport szerkesztése',
  'group_name' => 'Csoport neve',
  'group_description' => 'Csoport leírása',
  'group_moderator' => 'Csoport moderátor',
  'group_status' => 'Csoport státusz',
  'group_open' => 'Nyitott csoport',
  'group_closed' => 'Zárt csoport',
  'group_hidden' => 'Rejtett csoport',
  'group_delete' => 'Csoport törlése',
  'group_delete_check' => 'Csoport törlése',
  'submit_group_changes' => 'Változások elküldése',
  'reset_group_changes' => 'Változások törlése',
  'No_group_name' => 'Meg kell adnod egy csoportnevet.',
  'No_group_moderator' => 'Adj meg egy Moderátort a csoportnak!',
  'No_group_mode' => 'Meg kell határoznod, hogy nyitott vagy zárt csoport legyen-e.',
  'No_group_action' => 'Nem határoztál meg utasítást.',
  'delete_group_moderator' => 'Régi moderátor törlése?',
  'delete_moderator_explain' => 'Ha meg akarod változtatni a csoport moderátorát, és törölni akarod a régit, akkor jelöld be. Ha nem jelölöd be, akkor a felhasználó sima tag lesz a csoportban.',
  'Click_return_groupsadmin' => 'Kattints %side%s, hogy visszatérj a Csoportok beállításaihoz.',
  'Select_group' => 'Csoport kiválasztása',
  'Look_up_group' => 'Csoport keresése',
  
// Prune Administration
  'Forum_Prune' => 'Fórum karbantartás',
  'Forum_Prune_explain' => 'A Fórum karbantartás minden olyan témát automatikusan töröl, ahova a megadott idõn belül nem érkezik hozzászólás. Ha nem adsz meg idõt. akkor az összes téma törlõdik. Ezzel nem lehet törölni azokat a témákat, ahol aktív szavazás van érvényben, vagy azokat, melyek a kiemelt közlemények kategóriába tartoznak. Ezeket kézzel kell törölnöd.',
  'Do_Prune' => 'Karbantartás indítása',
  'All_Forums' => 'Összes fórum',
  'Prune_topics_not_posted' => 'Témák karbantartása, ahova ennyi ideig nem érkezett új hozzászólás.',
  'Topics_pruned' => 'A témák karbantartása befejezõdött.',
  'Posts_pruned' => 'A hozzászólások karbantartása befejezõdött.',
  'Prune_success' => 'A Fórum karbantartása sikeresen befejezõdött!',
  
// Word censor
  'Words_title' => 'Cenzúra',
  'Words_explain' => 'Ezzel az oldallal olyan szavakat adhatsz meg (szerkeszthetsz, vehetsz el), melyeket automatikusan cenzúráz a fórum. Ezekkel a szavakkal (vagy ilyen szavakat tartalmazó szavakkal) nem regisztrálhatnak új fehasználót. A * jokerkarakter használható, pld. az *lap*-ra az alaplap szó is cenzúrázva lesz, a lap*-ra a lapszám, és a *lap-ra a fõlap szavak is.',
  'Word' => 'Szó',
  'Edit_word_censor' => 'Cenzúrázási szabály szerkesztése',
  'Replacement' => 'Helyettesítõ',
  'Add_new_word' => 'Új szó hozzáadása',
  'Update_word' => 'Cenzúrázási szabály frissítése',
  
  'Must_enter_word' => 'Meg kell adnod egy szót és a helyettesítését.',
  'No_word_selected' => 'Nem választottál ki szót.',
  
  'Word_updated' => 'A kiválaszott cenzúrázási szabály sikeresen frissült!',
  'Word_added' => 'Cenzúrázási szabály sikeresen felvéve!',
  'Word_removed' => 'A kiválasztott cenzúrázási szabály sikeresen törölve lett!',
  
  'Click_return_wordadmin' => 'Kattints %side%s, hogy visszatérj a Cenzúra beállításaihoz.',
  
// Mass Email
  'Mass_email_explain' => 'A Csoportos levél opcióval egy emailt küldhetsz minden felhasználónak, vagy egy adott csoport összes felhasználójának. Az email az adminisztrátori címre postázódik, és egy titkos másolatot kap az összes felhasználó. Ha sok emberrõl van szó, akkor a levélküldés eltarthat egy darabig, ne szakítsd meg a program futását közben. Amint végzett, az oldal értesít errõl.',
  'Compose' => 'Levélírás',
  
  'Recipients' => 'Címzett',
  'All_users' => 'Összes felhasználó',
  
  'Email_successfull' => 'Üzenet elküldve!',
  'Click_return_massemail' => 'Kattints %side%s, hogy visszatérj a Csoportos email menüponthoz.',
  
// Ranks admin
  'Ranks_title' => 'Rangok beállítása',
  'Ranks_explain' => 'Itt állíthatod be a rangokat: hozzáadás, szerkesztés, megtekintés és törlés. Ezenkívül saját rangsort is készíthetsz, melyeket a felhasználók beállításánál hozzárendelhetsz egyes felhasználókhoz.',
  
  'Add_new_rank' => 'Új rang hozzáadása',
  
  'Rank_title' => 'Rang neve',
  'Rank_special' => 'Speciális rang',
  'Rank_minimum' => 'Minimum hozzászólások száma',
  'Rank_maximum' => 'Maximum hozzászólások száma',
  'Rank_image' => 'Rang képének elérési útvonala (relatív elérési út, a phpBB gyökérkönyvtárától)',
  'Rank_image_explain' => 'A rangot reprezentáló kép',
  
  'Must_select_rank' => 'Ki kell választanod egy rangot.',
  'No_assigned_rank' => 'Nincsen speciális rang.',
  
  'Rank_updated' => 'A rang sikeresen megváltozott!',
  'Rank_added' => 'Rang sikeresen felvéve!',
  'Rank_removed' => 'Rang sikeresen törölve!',
  'No_update_ranks' => 'A rang sikeresen törölve lett, bár a felhasználói azonosítók nem frissültek. Ezt kézzel kell megtenned ezeken az azonosítókon',
  
  'Click_return_rankadmin' => 'Kattints %side%s hogy visszaérj a Rangok beállításaihoz.',
  
// Disallow Username Admin
  'Disallow_control' => 'Tiltott felhasználónevek beállítása',
  'Disallow_explain' => 'Itt állíthatod be azokat a felhasználóneveket, melyek nem regisztrálhatóak. Használható a * jokerkarakter. Nem adhatsz meg olyan szót, amelyet már használ valaki, ehhez elõször ki kell törölnöd a felhasználót, és utána tilthatod le.',
  
  'Delete_disallow' => 'Törlés',
  'Delete_disallow_title' => 'Tiltott felhasználónév törlése:',
  'Delete_disallow_explain' => 'Tiltott felhasználónév törlése. Jelöld ki és kattints a Törlés gombra.',
  
  'Add_disallow' => 'Hozzáadás',
  'Add_disallow_title' => 'Tiltott felhasználónév hozzáadása:',
  'Add_disallow_explain' => 'Használhatod a * jokerkaraktert.',
  
  'No_disallowed' => 'Nincsenek letiltott felhasználónevek.',
  
  'Disallowed_deleted' => 'A letiltott felhasználónevet töröltem!',
  'Disallow_successful' => 'A letiltott felhasználónév hozzáadása sikerült!',
  'Disallowed_already' => 'A beírt felhasználónevet nem lehet letiltani; vagy már létezik a listában, vagy létezik a cenzúrázott szavak között, esetleg van ilyen nevû felhasználó.',
  
  'Click_return_disallowadmin' => 'Kattints %side%s, hogy visszatérj a Tiltott felhasználónevek beállításaihoz',
  
// Styles Admin
  'Styles_admin' => 'Stílus beállítások',
  'Styles_explain' => 'Ezen az oldalon felvehetsz, törölhetsz, beállíthatsz stílusokat (sablonokat és témákat).',
  'Styles_addnew_explain' => 'A következõ lista a még nem telepített témákat tartalmazza a jelenlegi sablonaidhoz. A telepítéshez kattints a név melletti "Új telepítés" linkre',
  
  'Select_template' => 'Válassz egy sablont',
  
  'Style' => 'Stílus',
  'Template' => 'Sablon',
  'Download' => 'Letölt',
  
  'Edit_theme' => 'Téma szerkesztése',
  'Edit_theme_explain' => 'Az alábbi ûrlap segítségével a kiválasztott téma beállításait változtathatod meg.',
  
  'Create_theme' => 'Téma készítése',
  'Create_theme_explain' => 'Az alábbi ûrlap segítségével új témákat készíthetsz a jelenlegi sablonaidhoz. A szín megadásánál ne használd a # karaktert. A CCCCCC helyes, a #CCCCCC hibás.',
  
  'Export_themes' => 'Témák exportálása',
  'Export_explain' => 'Ennek az oldalnak a segítségével egy sablonhoz tartozó téma adatait exportálhatod ki. Válaszd ki a sablont az alábbi listából, és az oldal elkészíti a téma konfigurációs fájlját, és megpróbálja elmenteni a kiválasztott sablon könyvtárba. Ha nem lehet elmenteni (nem írható a könyvtár, ezt a webszerveren tudod beállítani), akkor töltsd le, és kézzel másold be.',
  
  'Theme_installed' => 'A kiválasztott témá telepítése sikeresen megtörtént.',
  'Style_removed' => 'A kiválaszott stílus sikeresen törölve lett az adatbázisból. A teljes törléshez a phpBB templates/ könyvtárából is távolítsd el.',
  'Theme_info_saved' => 'A kiválasztott sablonhoz tartózó téma információ sikeresen el lett mentve. Változtasd meg a theme_info.cfg jogosultságait csak olvashatóra (ajánlott az egész sablon könyvtárát is csak olvashatóra átállítani).',
  'Theme_updated' => 'A kiválaszott téma frissült. Most már exportálhatod az új téma beállításait.',
  'Theme_created' => 'A téma elkészült. Most már exportálhatod a konfigurációs fájlba, hogy biztonságosan legyen tárolva.',
  
  'Confirm_delete_style' => 'Biztosan törölni akarod ezt a stílust?',
  
  'Download_theme_cfg' => 'A téma információ fájlt nem lehet írni. Kattints az alábbi gombra, hogy letöltsd, és utána másold be abba a könyvtárba, ahol a sablon fájlok vannak.',
  'No_themes' => 'A kiválasztott sablonhoz nem tartozik téma. Új téma készítéséhez kattints a Hozzáadásra a bal oldalon.',
  'No_template_dir' => 'Nem lehet megnyitni a sablon könyvtárat. Vagy nem olvasható, vagy nem létezik.',
  'Cannot_remove_style' => 'Nem törölheted ezt a stílust, mivel ez az alapbeállítású. Menj vissza és válassz egy másikat.',
  'Style_exists' => 'A kiválasztott stílus neve már létezik, menj vissza és adj meg egy másik nevet.',
  
  'Click_return_styleadmin' => 'Kattints %side%s, hogy visszatérj a Stílus beállításokhoz.',
  
  'Theme_settings' => 'Téma beállítások',
  'Theme_element' => 'Téma elem',
  'Simple_name' => 'Magyarázat',
  'Save_Settings' => 'Beállítások elmentése',
  
  'Stylesheet' => 'CSS stíluslap',
  'Stylesheet_explain' => 'A témához használt CSS stíluslap fájlneve.',
  'Background_image' => 'Háttérkép',
  'Background_color' => 'Háttérszín',
  'Theme_name' => 'Téma neve',
  'Link_color' => 'Linkek színe',
  'Text_color' => 'Szövegszín',
  'VLink_color' => 'Meglátogatott linkek színe',
  'ALink_color' => 'Aktív linkek színe',
  'HLink_color' => 'Link színe, ha felette van az egér',
  'Tr_color1' => 'Táblázat sor elsõ színe',
  'Tr_color2' => 'Táblázat sor második színe',
  'Tr_color3' => 'Táblázat sor harmadik színe',
  'Tr_class1' => 'Táblázat sor elsõ osztálya',
  'Tr_class2' => 'Táblázat sor második osztálya',
  'Tr_class3' => 'Táblázat sor harmadik osztálya',
  'Th_color1' => 'Táblázat fejléc elsõ színe',
  'Th_color2' => 'Táblázat fejléc második színe',
  'Th_color3' => 'Táblázat fejléc harmadik színe',
  'Th_class1' => 'Táblázat fejléc elsõ osztálya',
  'Th_class2' => 'Táblázat fejléc második osztálya',
  'Th_class3' => 'Táblázat fejléc harmadik osztálya',
  'Td_color1' => 'Elsõ cellaszín',
  'Td_color2' => 'Második cellaszín',
  'Td_color3' => 'Harmadik cellaszín',
  'Td_class1' => 'Elsõ cellaosztály',
  'Td_class2' => 'Második cellaosztály',
  'Td_class3' => 'Harmadik cellaosztály',
  
// Admin Userlist Start
  'Userlist' => 'User list',
  'Userlist_description' => 'View a complete list of your users and perform various actions on them',
  
  'Add_group' => 'Add to a Group',
  'Add_group_explain' => 'Select which group to add the selected users to',
  
  'Open_close' => 'Open/Close',
  'Active' => 'Active',
  'Group' => 'Group(s)',
  'Rank' => 'Rank',
  'Last_activity' => 'Last Activity',
  'Never' => 'Never',
  'User_manage' => 'Manage',
  'Find_all_posts' => 'Find All Posts',
  
  'Select_one' => 'Select One',
  'Ban' => 'Ban',
  'Activate_deactivate' => 'Activate/De-activate',
  
  'User_id' => 'User id',
  'User_level' => 'User Level',
  'Ascending' => 'Ascending',
  'Descending' => 'Descending',
  'Show' => 'Show',
  'All' => 'All',
  
  'Member' => 'Member',
  'Pending' => 'Pending',
  
  'Confirm_user_ban' => 'Are you sure you want to ban the selected user(s)?',
  'Confirm_user_deleted' => 'Are you sure you want to delete the selected user(s)?',
  
  'User_status_updated' => 'User(s) status updated successfully!',
  'User_banned_successfully' => 'User(s) banned successfully!',
  'User_deleted_successfully' => 'User(s) deleted successfully!',
  'User_add_group_successfully' => 'User(s) added to group successfully!',
  
  'Click_return_userlist' => 'Kattints %side%s to return to the User List',
//
// Admin Userlist End
  
// Version Check
  'Version_up_to_date' => 'A phpBB-d a legfrissebb, nem érhetõ el újabb verzió.',
  'Version_up_to_date_ip' => 'No updates are available for your version of Icy Phoenix',
  'Version_not_up_to_date' => 'A phpBB-d <b>nem</b> a legfrissebb verziójú! A frissítés elérhetõ a <a href="http://www.phpbb.com/downloads.php" target="_phpBB">phpBB</a>, vagy a <a href="http://download.phpbb.hu" target="_hunphpBB">Magyar phpBB közösség</a> oldalán.',
  'Version_not_up_to_date_ip' => 'Updates are available for your version of Icy Phoenix, please visit <a href="http://www.icyphoenix.com/" target="_new">Icy Phoenix</a> to obtain the latest version.',
  'Latest_version_info' => 'A phpBB legfrissebb elérhetõ verziója a <b>phpBB %s</b>.',
  'Current_version_info' => 'Jelenlegi fórumod verziója: <b>phpBB %s</b>.',
  'Connect_socket_error' => 'Nem sikerült csatlakozni a phpBB szerverhez, a következõ hiba lépett fel:<br />%s',
  'Connect_socket_error_ip' => 'Unable to open connection to Icy Phoenix Server',
  'Socket_functions_disabled' => 'A socket funkciók nem engedélyezettek.',
  'Mailing_list_subscribe_reminder' => 'Hogy mindig azonnal értesülj a phpBB frissítéseirõl, <a href="http://www.phpbb.com/support/" target="_maillist">iratkozz fel a hírlevelünkre</a>.',
  'Version_information' => 'Verzió információ',
  'Version_not_checked' => 'Version checking is currently disabled, please visit Icy Phoenix support forum for information about new Icy Phoenix versions.',
  'sig_title' => 'Advanced Signature Divider Control',
  
// Advanced Signature Divider Control
  'sig_divider' => 'Current Signature Divider',
  'sig_explain' => 'This is where you control what divides the user\'s signature from their post',
  
// Start add - Birthday MOD
  'Birthday_required' => 'Force users to submit a birthday',
  'Enable_birthday_greeting' => 'Enable birthday greetings',
  'Birthday_greeting_expain' => 'Users who have submitted a birth-date can have a birthday greeting when they visit the board',
  'Next_birthday_greeting' => 'Next birthday popup year',
  'Next_birthday_greeting_expain' => 'This field keeps track of the next year the user shall have a birthday greeting',
  'Wrong_next_birthday_greeting' => 'The supplied, next birthday popup year, was not valid, please try again',
  'Max_user_age' => 'Maximum user age',
  'Min_user_age' => 'Minimum user age',
  'Birthday_lookforward' => 'Birthday look forward',
  'Birthday_lookforward_explain' => 'Number of days the script should look forward for users with a birthday',
// End add - Birthday MOD
  
// Start add - Yellow card admin MOD
  'Max_user_bancard' => 'Maximum number of warnings',
  'Max_user_bancard_explain' => 'If a user gets more yellow cards than this limit, the user will be banned',
  'ban_card' => 'Yellow card',
  'ban_card_explain' => 'The user will be banned when he/she is in excess of %d yellow cards',
  'Greencard' => 'Un-ban User',
  'Bluecard' => 'Post Report',
  'Bluecard_limit' => 'Interval of bluecard',
  'Bluecard_limit_explain' => 'Notify the moderators again for every x bluecards given to a post',
  'Bluecard_limit_2' => 'Limit of bluecard',
  'Bluecard_limit_2_explain' => 'First notification to moderators is sent when a post gets this number of blue cards',
  'Report_forum' => 'Report forum',
  'Report_forum_explain' => 'Select the forum where users reports are to be posted, users MUST have at least post/reply access to this forum',
  
// Start add - Last visit MOD
  'Hidde_last_logon' => 'Hidden last logon time',
  'Hidde_last_logon_expain' => 'If this is set to yes, users last logon time is visible only to administrators',
// End add - Last visit MOD
//
// Start add - Online/Offline/Hidden Mod
  'Online_time' => 'Online status time',
  'Online_time_explain' => 'Number of seconds a user must be displayed online (do not use lower value than 60).',
  'Online_setting' => 'Online Status Setting',
  'Online_color' => 'Online text color',
  'Offline_color' => 'Offline text color',
  'Hidden_color' => 'Hidden text color',
// End add - Online/Offline/Hidden Mod
  
// Disallow other admins to delete or edit the first admin MOD
  'L_LISTOFADMINEDIT' => 'Blocked access to the account of the first admin',
  'L_LISTOFADMINEDITEXP' => 'In this list there are located the blocked access to the account of the first admin in the forum. The admins tried to change the profile of the first admin in the forum, to delete the first admin or set him to a normal user. A conversion of the profile data and/or the permissions of the first Admin did not take place and were successfully blocked. This list can be cleared only by the first admin in the forum again.',
  'L_LISTOFADMINEDITUSERS' => 'List of the blocked access to the first admin account',
  'L_LISTOFADMINTEXT' => 'successfully blocked access took place through',
  'L_DELETEMSG' => 'Delete entries',
  'L_DELETESUCMSG' => 'The entries were deleted successfully',
  'L_ADMINEDITMSG' => 'You do not have permission to edit the profile data and/or the permissions of the first admin in the forum.<br /><br />This bad access attempt were noted and successfully blocked !',
  'use_thank' => 'Allow to Thank posts',
  'Default_avatar' => 'Set a default avatar',
  'Default_avatar_explain' => 'This gives users that haven\'t yet selected an avatar, a default one. Set the default avatar for guests and users, and then select whether you want the avatar to be displayed for registered users, guests, both or none.',
  'Default_avatar_guests' => 'Guests',
  'Default_avatar_users' => 'Users',
  'Default_avatar_both' => 'Both',
  'Default_avatar_none' => 'None',
  
// Start Optimize Database
  'Optimize' => 'Optimize',
  'Optimize_explain' => 'Here it\'s possible to optimize the data contained in the tables of the database, and you can remove some parts of the data that contain empty spaces.<br />This operation must be performed regularly so that your database is more reliable and can maintain the highest speed and correct execution.',
  'Optimize_DB' => 'Optimize Database',
  'Optimize_Enable_cron' => 'Enable Cron',
  'Optimize_Cron_every' => 'Cron Every',
  'Optimize_Cron_every_explain' => 'Please note that you need also to enable <b>PHP Cron [Global Switch]</b> in <b>Configuration &raquo; Icy Phoenix &raquo; Cron</b>',
  'Optimize_month' => 'Month',
  'Optimize_2weeks' => '2 weeks',
  'Optimize_week' => 'Week',
  'Optimize_3days' => '3 days',
  'Optimize_day' => 'Day',
  'Optimize_6hours' => '6 hours',
  'Optimize_hour' => 'Hour',
  'Optimize_30minutes' => '30 minutes',
  'Optimize_20seconds' => '20 seconds (only for test)',
  'Optimize_Current_time' => 'Current Time',
  'Optimize_Next_cron_action' => 'Next Cron Action',
  'Optimize_Performed_Cron' => 'Performed Cron',
  'Optimize_Show_not_optimized' => 'Show only tables not optimized',
  'Optimize_Show_begin_for' => 'Show only tables that begin for',
  'Optimize_Configure' => 'Configure',
  'Optimize_Table' => 'Table',
  'Optimize_Record' => 'Record',
  'Optimize_Type' => 'Type',
  'Optimize_Size' => 'Size',
  'Optimize_Status' => 'Status',
  'Optimize_CheckAll' => 'Check All',
  'Optimize_UncheckAll' => 'Uncheck All',
  'Optimize_InvertChecked' => 'Invert Checked',
  'Optimize_return' => 'Kattints %side%s to return to the Optimize Database',
  'Optimize_success' => 'The Database has been successfully optimized',
  'Optimize_NoTableChecked' => '<b>No</b> Tables Checked',
  
// End Optimize Database
// Start add - Global announcement MOD
  'Globalannounce' => 'Global Announce',
// End add - Global announcement MOD
  
// google bot detector by pukapuka
  'Detector' => 'Google Bot Detector',
  'Detector_Explain' => '',
  'Detector_ID' => '#',
  'Detector_Time' => 'Time',
  'Detector_Url' => 'Url',
  'Detector_Clear' => 'Clear All',
  'Detector_No_Bot' => 'No Bot Detected',
  'Detector_Cleared' => 'Detect Information Cleared Successfully',
  'Click_Return_Detector' => 'Kattints %side%s to return to Detector',
  
// added to Auto group mod
  'group_count' => 'Number of required posts',
  'group_count_max' => 'Number of max posts',
  'group_count_updated' => '%d member(s) have been removed, %d members are added to this group',
  'Group_count_enable' => 'Users automatic added when posting',
  'Group_count_update' => 'Add/Update new users',
  'Group_count_delete' => 'Delete/Update old users',
  'User_allow_ag' => 'Activate Auto Group',
  'group_count_explain' => 'When users have posted more posts than this value <i>(in any forum)</i> then they will be added to this usergroup<br/> This only applies if "Users automatic added when posting" are enabled',
  
// Start add - Bin Mod
  'Bin_forum' => 'Bin forum',
  'Bin_forum_explain' => 'Use the forum ID to where topics will be trashed; a value of 0 will disable this feature. You should edit this forum permissions to allow or not allow access/view/post or reply for users.',
// End add - Bin Mod
  
// Begin Quick Title Edition Mod 1.0.0 by Xavier Olive.
  'Title_infos' => 'Quick Title Edition Management',
  'Must_select_title' => 'You must select a quick title add-on',
  'Title_updated' => 'Quick Title Add-on updated',
  'Title_added' => 'Quick Title Add-on added',
  'Click_return_titleadmin' => 'Kattints %side%s to return to Quick Title Management',
  'Title_removed' => 'Quick Title Add-on removed',
  'Quick_title_explain' => 'You can create short bits of text which you will be able to add to the title of a topic, by pushing a single button.<br />If you want the name of the person who performed the action of modifying the title to be shown, just put %mod% where you want it to be placed. For instance, [Link OK | checked by %mod%] will be displayed as [Link OK |checked by ModeratorName]. You can do it exactly the same way to insert the date, by placing %date% wherever you want.',
  'Title_head' => 'Quick Title Add-on',
  'Title_auth' => 'Permissions',
  'Administrator' => 'Administrator',
  'Topic_poster' => 'Topic poster',
  'Add_new_title_info' => 'Add a Quick Title Add-on',
  'Title_perm_info' => 'Permissions',
  'Title_perm_info_explain' => 'Users with these levels will be able to use this Quick Title Add-on',
  'Title_info' => 'Quick Title Add-on',
// End Quick Title Edition Mod 1.0.0 by Xavier Olive.
  
// Limit Image Width MOD
  'Available' => 'Available',
  'Unavailable' => 'Unavailable',
  'LIW_title' => 'Limit Image Width MOD',
  'LIW_admin_explain' => 'This page will allow you to switch the Limit Image Width MOD on and off, as well as setting the maximum width for each image posted at your forum. If you feel that the SQL table which holds the cached image dimensions of all images posted at your forum is getting too large you can empty it by clicking the \'Empty cache table\' button.<br /><br />You can also see whether or not it is possible to run the Limit Image Width MOD at your web server in the \'Compatibility checks\' box below',
  'LIW_compatibility_checks' => 'Compatibility checks',
  'LIW_mod_config' => 'MOD Configuration',
  
  'LIW_config_updated' => 'The Limit Image Width MOD configuration has been successfully updated',
  'LIW_cache_emptied' => 'The cache table has been successfully emptied',
  'LIW_click_return_config' => 'Kattints %side%s to return the Limit Image Width MOD configuration page',
  
  'LIW_getimagesize' => 'getimagesize() URL support',
  'LIW_getimagesize_explain' => 'Available in PHP 4.0.5',
  'LIW_getimagesize_available' => 'The MOD is able to retrieve image dimensions',
  'LIW_getimagesize_unavailable' => 'The MOD cannot check whether or not an image is too large, and therefore will resize <i>any</i> posted image',
  
  'LIW_urlaware' => 'URL-aware fopen wrappers',
  'LIW_urlaware_explain' => 'Set allow_url_fopen to Yes in your php.ini',
  'LIW_urlaware_available' => 'The MOD is able to generate a fingerprint for images so is able to cache the image dimensions',
  'LIW_urlaware_unavailable' => 'The MOD cannot generate a fingerprint of the file, and is therefore unable to cache the image dimensions',
  
  'LIW_openssl' => 'openSSL extension loaded',
  'LIW_openssl_explain' => 'Load the openssl.dll extension in your php.ini',
  'LIW_openssl_available' => 'The MOD in able to retrieve dimensions from https:// images so is able to cache them',
  'LIW_openssl_unavailable' => 'The MOD in unable to retrieve dimensions from https:// images so is unable to cache them',
  
  'LIW_enable' => 'Resize images in posts',
  'LIW_enable_explain' => 'Set to %s to allow the MOD to resize images in posts', // Set to $lang['Yes'] to ....
  'LIW_sig_enable' => 'Resize images in signatures',
  'LIW_sig_enable_explain' => 'Set to %s to allow the MOD to resize images in signatures',
  'LIW_attach_enable' => 'Resize attached images',
  'LIW_attach_enable_explain' => 'Set to %s to allow the MOD to resize images which are attached to a post using the Attachment MOD',
  'LIW_max_width' => 'Maximum image width',
  'LIW_max_width_explain' => 'Specify the maximum width (pixels) of an image posted using the [img] tags',
  'LIW_empty_cache' => 'Empty image dimensions cache',
  'LIW_empty_cache_explain' => 'Your cache table currently contains <b>%s</b> records', // Your cache table currently contains <b>312</b> records
  'LIW_empty_cache_note' => 'Note that emptying the cache table will cause the MOD to cache all image dimensions again, which could result in a temporary slowdown when loading a topic',
  'LIW_empty_cache_button' => 'Empty cache table',
  
// News
  'xs_news_settings' => 'News Settings',
  'xs_news_show' => 'Display News Banner?',
  'xs_news_show_ticker' => 'Display News Ticker?',
  'xs_news_show_ticker_explain' => 'This is a master switch setting this to \'No\' will stop any ticker from being shown, if set to \'Yes\' then the display state of individual tickers can be controlled from their settings.',
  'xs_news_show_ticker_subtitle' => 'Display Ticker subtitle?',
  'xs_news_show_ticker_subtitle_explain' => 'Setting this to Yes will display \'News Tickers\' above the news tickers.',
  'xs_news_show_news_subtitle' => 'Display News subtitle?',
  'xs_news_show_news_subtitle_explain' => 'Setting this to Yes will display \'News Items\' above the news items.',
  'xs_news_dateformat' => 'Date Format',
  'xs_news_dateformat_helper' => 'Using this format: %s',
  
// Bantron Mod : Begin
  'Bantron' => 'Bantron',
  'BM_Title' => 'Bantron',
  'BM_Explain' => 'From this page you can add, edit, view, and remove the bans in place on this board.',
  
  'BM_Show_bans_by' => 'Show bans by',
  'BM_All' => 'All',
  'BM_Show' => 'Show',
  
  'BM_IP' => 'IP',
  'BM_Last_visit' => 'Last Visit',
  'BM_Banned' => 'Banned',
  'BM_Expires' => 'Expires',
  'BM_By' => 'By',
  'BM_Reasons' => 'Reasons',
  
  'BM_Add_a_new_ban' => 'Add a new ban',
  'BM_Delete_selected_bans' => 'Delete selected bans',
  
  'BM_Private_reason' => 'Private reason',
  'BM_Private_reason_explain' => 'This reason for banning the entered usernames, e-mails, and/or IP addresses is kept for note purposes only in the administration.',
  
  'BM_Public_reason' => 'Public reason',
  'BM_Public_reason_explain' => 'This reason for banning the entered usernames, e-mails, and/or IP addresses is displayed to the banned user(s) when they attempt to access the forums.',
  'BM_Generic_reason' => 'Generic reason',
  'BM_Mirror_private_reason' => 'Mirror private reason',
  'BM_Other' => 'Other',
  
  'BM_Expire_time' => 'Expire time',
  'BM_Expire_time_explain' => 'By specifying a date, either in relation to the current date or an absolute date, the ban will become inactive after that point in time.',
  'BM_Never' => 'Never',
  'BM_After_specified_length_of_time' => 'After specified length of time',
  'BM_Minutes' => 'Minute(s)',
  'BM_Hours' => 'Hour(s)',
  'BM_Days' => 'Day(s)',
  'BM_Weeks' => 'Week(s)',
  'BM_Months' => 'Month(s)',
  'BM_Years' => 'Year(s)',
  'BM_After_specified_date' => 'After specified date',
  'BM_AM' => 'AM',
  'BM_PM' => 'PM',
  'BM_24_hour' => '24-Hour',
  
  'BM_Ban_reasons' => 'Ban Reasons',
// Bantron Mod : End
  
  'board_disable_message' => 'Display a message for the deactivation of the site.',
  'board_disable_message_texte' => 'Message which will appear when the site is deactivated',
  
// Start Edit Notes MOD
  'Edit_notes_settings' => 'Edit Notes Settings',
  'Edit_notes_enable' => 'Enable edit notes',
  'Edit_notes_enable_explain' => 'Enable/disable edit notes on the board',
  'Max_edit_notes' => 'Maximum edit notes',
  'Max_edit_notes_explain' => 'Set the maximum number of edit notes per post.',
  'Edit_notes_permissions' => 'Edit notes permissions',
  'Edit_notes_permissions_explain' => 'Set which types of users may use the edit notes.',
  'Edit_notes_admin' => 'Administrators only',
  'Edit_notes_staff' => 'Staff (admins and mods)',
  'Edit_notes_reg' => 'Registered users (admins and mods too)',
  'Edit_notes_all' => 'All users (guests, registered users, admins, and mods)',
// End Edit Notes MOD
  
// BEGIN Disable Registration MOD
  'registration_status' => 'Disable registrations',
  'registration_status_explain' => 'This will disable all new registrations to your board.',
  'registration_closed' => 'Reason of closed registrations',
  'registration_closed_explain' => 'A message that explains why registrations are closed, and appears if a user tries to register. Leave blank to show default explanation text.',
// END Disable Registration MOD
  
  'Gender_required' => 'Force users to submit their gender',
  
//admin user list mail
  'Usersname' => 'Users Name',
  'Admin_Users_List_Mail_Title' => 'List users e-mail',
  'Admin_Users_List_Mail_Explain' => 'Here a list of your users\'s e-mail',
  
// Start add - Forum notification MOD
  'Forum_notify' => 'Allow forum notification',
  'Forum_notify_enabled' => 'Allow',
  'Forum_notify_disabled' => 'Do not allow',
// End add - Forum notification MOD
  
  'Smilie_table_columns' => 'Smileys table columns',
  'Smilie_table_rows' => 'Smileys table rows',
  'Smilie_window_columns' => 'Smileys window columns',
  'Smilie_window_rows' => 'Smileys window rows',
  'Smilie_single_row' => 'Smileys single row number<br /> (I.E.: Quick Reply smileys number)',
  
  'Auth_Rating' => 'Ratings',
  
// Gravatars
  'Enable_gravatars' => 'Enable gravatars',
  'Gravatar_rating' => 'Gravatar maximum rating',
  'Gravatar_rating_explain' => '<a href="http://www.gravatar.com/rating.php" target="_blank">Read the rating guidelines</a> for more information. Set to \'None\' for no restriction.',
  'Gravatar_default_image' => 'Gravatar default image',
  'Gravatar_default_image_explain' => 'If no gravatar was found, the server will return this image. Path to the image is relative to the Icy Phoenix root directory. Leave blank for no image.',
  
// Admin Account Actions
  'Account_actions' => 'Account Actions',
  'Account_inactive_explain' => 'Here you can see all users who are inactive and await their activation. You can activate or delete their accounts.<br />Further you can set their permissions or edit their profile by following the certain links.',
  'Account_active_explain' => 'Here you can see all users who are active members. You can deactivate or delete their accounts.<br />Further you can set their permissions or edit their profile by following the certain links.',
  'Account_active' => 'Active Users',
  'Account_inactive' => 'Inactive Users',
  'Account_activate' => 'Activate marked',
  'Account_deactivate' => 'Deactivate marked',
  'Account_none' => 'There is no user who awaits an activation.',
  'Account_total_user' => 'Amount of user: <b>%d</b> user',
  'Account_total_users' => 'Amount of users: <b>%d</b> users',
  'Account_activation' => 'Activation method',
  'Account_awaits' => 'Awaits activation since',
  'Account_registered' => 'Registered since',
  'Account_delete_users' => 'Are you sure you want to delete these users?',
  'Account_delete_user' => 'Are you sure you want to delete these user?',
  'Account_sort_letter' => 'Show only accounts starting with',
  'Account_others' => 'others',
  'Account_all' => 'all',
  'Account_year' => 'year',
  'Account_years' => 'years',
  'Account_week' => 'week',
  'Account_weeks' => 'weeks',
  'Account_day' => 'day',
  'Account_days' => 'days',
  'Account_hour' => 'hour',
  'Account_hours' => 'hours',
  'Account_user_activated' => 'The user is activated.',
  'Account_users_activated' => 'The users are activated.',
  'Account_user_deactivated' => 'The user is deactivated.',
  'Account_users_deactivated' => 'The users are deactivated.',
  'Account_user_deleted' => 'The user is deleted.',
  'Account_users_deleted' => 'The users are deleted.',
  'Account_activated' => 'Account activation',
  'Account_activated_text' => 'Your account was activated',
  'Account_deactivated' => 'Account deactivation',
  'Account_deactivated_text' => 'Your account was deactivated',
  'Account_deleted' => 'Account deletion',
  'Account_deleted_text' => 'Your account was deleted',
  'Account_notification' => 'Notification mail sent.',
  
// Acronyms
  'Acronyms_title' => 'Acronyms Administration',
  'Acronyms_explain' => 'From this control panel you can add, edit, and remove acronyms that will be automatically added to posts on your forums.',
  'Acronym' => 'Acronym',
  'Acronyms' => 'Acronyms',
  'Edit_acronym' => 'Edit Acronym',
  'Description' => 'Description',
  'Add_new_acronym' => 'Add new acronym',
  'Update_acronym' => 'Update acronym',
  
  'Must_enter_acronym' => 'You must enter a acronym and its description',
  'No_acronym_selected' => 'No acronym selected for editing',
  
  'Acronym_updated' => 'The selected acronym has been successfully updated',
  'Acronym_added' => 'The acronym has been successfully added',
  'Acronym_removed' => 'The selected acronym has been successfully removed',
  
  'Click_return_acronymadmin' => 'Kattints %side%s to return to Acronym Administration',
  'Prune_shouts' => 'Auto prune shouts',
  'Prune_shouts_explain' => 'Number of days before the shouts are deleted. If the value is set to 0, autoprune will be disabled',
  
  'MOD_OS_ForumRules' => 'Olympus-Style Forum Rules',
  'Forum_rules' => 'Forum Rules',
  'Rules_display_title' => 'Display title in the Forum Rules BOX?',
  'Rules_custom_title' => 'Custom title',
  'Rules_appear_in' => 'These Forum Rules appear while ...',
  'Rules_in_viewforum' => 'Viewing this forum',
  'Rules_in_viewtopic' => 'Viewing topics in this forum',
  'Rules_in_posting' => 'Posting/Replying in this forum',
  
  'Php_Info_Explain' => 'This page lists information on the version of PHP installed on this server. It includes details of loaded modules, available variables and default settings. This information may be useful when diagnosing problems. Please be aware that some hosting companies will limit what information is displayed here for security reasons. You are advised to not give out any details on this page except when asked by support or other Team Member on the support forums.',
  
  'IcyPhoenix_Main' => 'Icy Phoenix Home Page',
  'IcyPhoenix_Download' => 'Icy Phoenix Download',
  'IcyPhoenix_Code_Changes' => 'Code Changes Mod',
  'IcyPhoenix_Updates' => 'Icy Phoenix Updates',
  'PhpBB_Upgrade' => 'phpBB Upgrade',
  'Header_Welcome' => 'Welcome on Icy Phoenix Administration Control Panel',
  
  'Prune_users' => 'Prune users',
  'Prune_Overview' => 'Pruning Overview',
  'Prune_title_explain' => 'Here you can manage the pruning Settings of each Forum.',
  'Prune_forum' => 'Forum',
  'Prune_active' => 'Pruning active',
  'Prune_freq' => 'Remove all',
  'Prune_check' => 'Check all',
  'Prune_days' => 'Days',
  'Prune_days_explain' => '* Remove topics that have not been posted to.',
  'Click_return_admin_po' => '%sClick here%s, to return to Pruning Overview',
  'Prune_update' => 'The Prune Settings was successfully updated',
  
  'Admin_notepad_title' => 'Notepad',
  'Admin_notepad_explain' => 'From this panel Administrators can leave memos for each other on the notepad.',
  'Allow_generator' => 'Enable avatar generator',
  'Avatar_generator_template_path' => 'Avatar Generator Template Path',
  'Avatar_generator_template_path_explain' => 'Path under your Icy Phoenix root dir for template images, e.g. images/avatars/generator_templates',
  
// Start Autolinks Mod
  'Autolink_first' => 'Autolink each keyword once per post',
  
  'Autolinks_title' => 'Autolinks',
  'Autolinks_explain' => 'From this control panel you can add, edit and remove keywords that will be automatically replaced with the url in the message posts. If the url you enter is an internal one and points to the forum/portal, ticking the box will have the session ID added to the link.<br /><br />eg. If found, the <b>Keyword</b> in the post will be replaced with the following,<br /><br />&lt;a href="<b>Url</b>" title="<b>Comment</b>" style="<b>Style</b>"&gt;<b>Text</b>&lt;/a&gt;',
  'links_keyword' => 'Keyword',
  'links_title' => 'Text',
  'links_url' => 'Url',
  'links_comment' => 'Comment',
  'links_style' => 'Style',
  'links_forum' => 'Forum for Autolink',
  'links_forum2' => 'Forum',
  'links_internal' => 'Internal',
  'Autolinks_add' => 'Add An Autolink',
  'Add_keyword' => 'Add Autolink',
  'Autolinks_edit' => 'Edit An Autolink',
  'Edit_keyword' => 'Edit Autolink',
// 'Delete_link' => 'Tick box to delete this autolink.',

  'Select_all_forums' => 'All Forums',
  'Autolink_added' => 'Autolink successfully added.',
  'Autolink_updated' => 'Autolink successfully updated.',
  'Autolink_removed' => 'Autolink successfully deleted.',
  'No_autolink_selected' => 'No autolink was selected for deletion.',
  'No_autolinks' => 'There are no Autolinks in the database.',
  'Must_enter_autolink' => 'You must enter a keyword, link text and a url.',
  'Click_return_autolinkadmin' => 'Kattints %side%s to return to Autolink Administration',
// End Autolinks Mod
  
// XS BUILD 030
  
// Login attempts configuration
  'Max_login_attempts' => 'Engedélyezett belépési kísérletek száma:',
  'Max_login_attempts_explain' => 'Legfeljebb ennyiszer próbálkozhat belépni a felhasználó.',
  'Login_reset_time' => 'Belépés zárolásának ideje:',
  'Login_reset_time_explain' => 'Ennyi percet kell várnia a felhasználónak, hogy beléphessen, miután túllépte az engedélyezett belépési kísérletek számát.',
  
// XS BUILD 035
// Smilies Order
  'position_new_smilies' => 'Should new smileys be added before or after existing smileys?',
  'smiley_change_position' => 'Change Insert Location',
  'before' => 'Before',
  'after' => 'After',
  'Move_top' => 'Send to Top',
  'Move_end' => 'Send to End',
  
// XS BUILD 037
// Pages Auth
  'auth_view_title' => 'Page View Auth',
  'auth_view_portal' => 'Home Page',
  'auth_view_forum' => 'Forum',
  'auth_view_viewforum' => 'View Forum',
  'auth_view_viewtopic' => 'View Topic',
  'auth_view_faq' => 'FAQ',
  'auth_view_memberlist' => 'Memberlist',
  'auth_view_groupcp' => 'Usergroups',
  'auth_view_profile' => 'Profile',
  'auth_view_search' => 'Search',
  'auth_view_album' => 'Album',
  'auth_view_links' => 'Links',
  'auth_view_calendar' => 'Calendar',
  'auth_view_attachments' => 'Attachments',
  'auth_view_download' => 'Downloads',
  'auth_view_pic_upload' => 'Pics Upload (Post Icy Images)',
  'auth_view_kb' => 'Knowledge Base',
  'auth_view_ranks' => 'Ranks',
  'auth_view_statistics' => 'Statistics',
  'auth_view_recent' => 'Recent Topics',
  'auth_view_referrers' => 'Referrers',
  'auth_view_rules' => 'Rules',
  'auth_view_site_hist' => 'Site History',
  'auth_view_shoutbox' => 'Shoutbox',
  'auth_view_viewonline' => 'View Online',
  'auth_view_contact_us' => 'Contact Us',
  'auth_view_ajax_chat' => 'Chat',
  'auth_view_ajax_chat_archive' => 'Chat Archive',
  'auth_view_custom_pages' => 'Custom Pages',
  
// Begin Yahoo Submit Your Site MOD by www.pentapenguin.com
  'Yahoo_search' => 'Yahoo Search',
  'Yahoo_search_settings' => 'Yahoo Search Settings',
  'Yahoo_search_settings_explain' => 'Here you can configure settings for the Yahoo Submit Your Site MOD. For more info, please see the <a href="http://submit.search.yahoo.com/free/request" target="_blank">Yahoo Submit Your Site website</a>.',
  'Yahoo_search_select_forums' => 'Select Forums',
  'Yahoo_search_select_forums_explain' => 'Select which forums to include in this list. You may select as many forums as you wish by clicking each forum name while holding down the Ctrl Key (Windows) or the Command Key (Macintosh). By default, all publicly viewable forums are selected.',
  'Yahoo_search_savepath' => 'Save path for the URL list',
  'Yahoo_search_savepath_explain' => 'Enter a location for the URL listing file to be saved. Enter the path relative to the Icy Phoenix base path - i.e. if you save the file in the cache directory in <b>www.yoursite.com/cache/</b>, then enter <b>cache</b>. Remember that you will need to CHMOD the directory to 777.',
  'Yahoo_search_additional_urls' => 'Enter additional URLs',
  'Yahoo_search_additional_urls_explain' => 'Enter additional URLs you would like Yahoo to crawl on one per line. You must enter the full URL - i.e. <b>http://www.yoursite.com/yourpage.html</b>.',
  'Yahoo_search_compress_file' => 'Compress the list of URLs',
  'Yahoo_search_compress_file_explain' => 'If you choose Yes to this option, the list of URLs will be compressed with Gzip which will result in a much smaller file thus less bandwidth from the Yahoo bot. This setting will not work if your server does not have Gzip support.',
  'Yahoo_search_compression_level' => 'Compression level for file',
  'Yahoo_search_compression_level_explain' => 'Choose a compression level for the file. 9 is the recommended setting unless you encounter problems in that case you should make the value lower.',
  'Yahoo_search_generate_file' => 'Generate File',
  'Yahoo_search_error_no_forums' => 'Error: no forums selected. Go back and choose at least one forum.',
  'Yahoo_search_error_no_gzip' => 'Error: either you are using an old version of PHP or your web host does not support Gzip. Please go back and choose <b>No</b> for the <b>Compress the list of URLs</b> option.',
  'Yahoo_search_error_unopenable_file' => 'Error: can not open file %s.',
  'Yahoo_search_error_unwritable_file' => 'Error: can not write to file %s.',
  'Yahoo_search_error_unclosable_file' => 'Error: can not close file %s.',
  'Yahoo_search_error_update_sql' => 'Error: can not update field: %s',
  'Yahoo_search_error_unknown_file_error' => 'Error: the file was not saved due to an unknown error.',
  'Yahoo_search_file_done' => 'The URL listing file has finished processing. Please copy the URL below and paste it in the appropriate field in Yahoo:<br /><b>%s</b>',
// Finish Yahoo Submit Your Site MOD by www.pentapenguin.com

// Bookmark Mod
  'Max_bookmarks_links' => 'Maximum bookmarks send in link-tag',
  'Max_bookmarks_links_explain' => 'Number of bookmarks to send in link-tag at the beginning of the document. This information is e.g. used by Mozilla. Enter 0 to disable this function.',
  
  'Faq_manager' => 'FAQ Manager',
  'Faq_Rules_manager' => 'Faq &amp; Rules',
  'board_rules' => 'Board Rules',
  'board_faq' => 'Board Faq',
  'bbcode_faq' => 'BBcode Faq',
  'attachment_faq' => 'Attachment Faq',
  'prillian_faq' => 'Prillian Faq',
  'bid_faq' => 'Buddy List Faq',
  
  
  'Account_active2' => 'Active Users',
  'Account_inactive2' => 'Inactive Users',
  
// Search Flood Control - added 2.0.20
  'Search_Flood_Interval' => 'Keresés flood idõköz:',
  'Search_Flood_Interval_explain' => 'Ennyi másodpercet kell várni a két keresés között.',
  'Confirm_delete_smiley' => 'Biztosan törölni akarod ezt az emotikont?',
  'Confirm_delete_word' => 'Biztosan törölni akarod ezt a cenzúrázási szabályt?',
  'Confirm_delete_rank' => 'Biztosan törölni akarod ezt a rangot?',
  
// Custom Profile Fields MOD
  'custom_field_notice_admin' => 'These items have been created by you or another administrator. For more information, check the items under the Profile Fields heading in the navbar. Items marked with a * are required fields. Items marked with a &dagger; are only being displayed to admins.',
  
  'field_deleted' => 'The specified field has been deleted',
  'double_check_delete' => 'Are you sure you want to delete profile field "%s" from the database permanently?',
  
  'here' => 'Here',
  'new_field_link' => '<a href="' . append_sid($filename . '?mode=add&pfid=x') . '">%s</a>',
  'edit_field_link' => '<a href="' . append_sid($filename . '?mode=edit&pfid=x') . '">%s</a>',
  'index_link' => '<a href="' . append_sid($filename . 'admin_profile_fields.?mode=edit&pfid=x') . '">%s</a>',
  'field_exists' => 'This field already exists.<br /><br />You can try creating a <a href="' . append_sid($filename . '?mode=add&pfid=x') . '">new</a> profile field,<br /><br />or try <a href="' . append_sid($filename . '?mode=edit&pfid=x') . '">editing</a> the one you already have.',
  'click_here_here' => 'Click <a href="' . append_sid($filename . '?mode=add&pfid=x') . '">Here</a> to add another profile field,<br /><br />or click <a href="' . append_sid($filename . 'admin_profile_fields.?mode=edit&pfid=x') . '">Here</a> to return to the Admin Index.',
  'field_success' => 'Field successfully submitted!<br /><br />Click <a href="' . append_sid($filename . '?mode=add&pfid=x') . '">Here</a> to add another profile field,<br /><br />or click <a href="' . append_sid($filename . 'admin_profile_fields.?mode=edit&pfid=x') . '">Here</a> to return to the Admin Index.',
  'Custom_Profile' => 'Profile Fields',
  'profile_field_created' => 'Profile Field Created',
  'profile_field_updated' => 'Profile Field Updated',
  
  'add_field_title' => 'Add Custom Profile Fields',
  'edit_field_title' => 'Edit Custom Profile Fields',
  'add_field_explain' => 'Here you can create new fields for your users to set in their profiles.',
  'edit_field_explain' => 'Here you can edit fields you have already created for your users to set in their profiles.',
  
  'add_field_general' => 'General Settings',
  'add_field_admin' => 'Administrator Settings',
  'add_field_view' => 'Viewing Settings',
  'add_field_text_field' => 'Text Field Settings',
  'add_field_text_area' => 'Text Area Settings',
  'add_field_radio_button' => 'Radio Button Settings',
  'add_field_checkbox' => 'Checkbox Settings',
  
  'default_value' => 'Default Value',
  'default_value_explain' => 'This is the default for this field. If a new user does not change this value, this is the value they will have. If this is a required field, this is the value that all existing users will be set to.',
  'default_value_radio_explain' => 'Enter a name identical to one written in the available values field.',
  'default_value_checkbox_explain' => 'Enter values that will default to checked. These values must match values in the available values field',
  'max_length' => 'Maximum Length',
  'max_length_explain' => 'This is the maximum length for this field.',
  'max_length_value' => ' This must be a number between %d and %d.',
  'available_values' => 'Available Values',
  'available_values_explain' => 'Put each value on its own line',
  
  'add_field_view_disclaimer' => 'All of these settings will be treated as "no" if users are not allowed to view this field',
  
  'add_field_name' => 'Field Name',
  'add_field_name_explain' => 'Enter the name you want to associate with this field.',
  'add_field_description' => 'Field Description',
  'add_field_description_explain' => 'Enter a description you wish to associate with this field. It will be displayed in small text below the field name, just like this text is.',
  'add_field_type' => 'Field Type',
  'add_field_type_explain' => 'Select the type of profile field you want to add. Examples of each field type are shown to the far right.',
  'edit_field_type_explain' => 'Select the type of profile field you want to change this field to. Examples of each field type are shown to the far right.',
  'add_field_required' => 'Set as Required',
  'add_field_required_explain' => 'If the field is set to "Required", any user that registers later <strong>must</strong> fill it in, and all existing users will have it filled with a default value.',
  'add_field_user_can_view' => 'Allow Users to View',
  'add_field_user_can_view_explain' => 'If this is set to "yes", the user is allowed to view and edit this field. If it is set to "no", only Administrators may view or edit this value. Also, if this is set to "yes", this field cannot be required.',
  'view_in_profile' => 'Viewable in User Profile',
  'profile_locations_explain' => 'These options are for if this field is to be viewed in the user\'s profile.',
  'contacts_column' => 'Contacts Column',
  'about_column' => 'About Column',
  'view_in_memberlist' => 'Viewable in Memberlist',
  'view_in_topic' => 'Viewable in Topic',
  'topic_locations_explain' => 'These options are for if this field is to be viewed in a post.',
  'author_column' => 'Author Section',
  'above' => 'Above ',
  'below' => 'Below ',
  
  'textarea' => 'Textarea',
  'textarea_example' => 'This is an example' . "\n". 'Textarea.',
  'text_field' => 'Text Field',
  'text_field_example' => 'This is an example of a Text Field',
  'radio' => 'Radio Button',
  'radio_example' => 'This is an example of two Radio Buttons',
  'checkbox' => 'Checkbox',
  'checkbox_example' => 'This is an example of two Checkboxes',
  
  'profile_field_list' => 'Your Custom Profile Fields',
  'profile_field_list_explain' => 'These are all of the custom profiles you have created for your board, with links to edit or delete them.',
  'profile_field_id' => 'ID #',
  'profile_field_name' => 'Field Name',
  'profile_field_action' => 'Action',
  'no_profile_fields_exist' => 'No Custom Profile Fields Exist.',
  
  'enter_a_name' => 'You <strong>must</strong> enter a field name<br /><br />Press back and try again',
// END Custom Profile Fields MOD
  'Add' => 'Add',
  
  'split_global_announce' => 'Split Global Announcements',
  'split_announce' => 'Split Announcements',
  'split_sticky' => 'Split Stickies',
  'split_topic_split' => 'Split Topics',
  'Announce_settings' => 'Announcements Settings',
  'Split_settings' => 'Split Settings',
  'Server_Cookies' => 'Server Settings',
  'Disable_Registration_IP_Check' => 'Disable public blacklist IP check upon register',
  'Disable_Registration_IP_Check_Explain' => 'If you disable IP check upon register, then IP\'s will not be checked against the public blacklist. Disabling this may be useful, because sometimes this check may result in unintentional blocking of regular users who have an IP listed by mistake in the public blacklist.',
  'Config_explain2' => 'The form below will allow you to customize calendar and subforums options. You can change appearance and settings.',
  'Forum_postcount' => 'Count user\'s posts',
  'Use_Captcha' => 'Use CAPTCHA',
  'Use_Captcha_Explain' => 'If set to YES, then advanced confirmation code is generated. If set to NO, standard activation code is generated.',
  'Sync_Pics_Count' => 'Clicking <b>YES</b> all users pics counter will be synchronized.',
  'Pics_Count_Synchronized' => 'User\'s pics counters synchronized correctly',
  'Pics_Count_Not_Synchronized' => 'User\'s pics counters not synchronized correctly',
  
// IP - BUILD 001
  'Enable_Digests' => 'Enable Digests',
  'Enable_Digests_PHPCron' => 'Enable Digests PHP Cron',
  'Enable_Digests_PHPCron_Explain' => 'This feature will enable a PHP emulation of the CRON trying to send the emails once per hour, but since it is based on a PHP emulation it may not be correctly executed every time. This means that sometimes emails may not be sent. If you can enable CRON on your server, use CRON instead of this feature.',
  
// Ajax Shoutbox - BEGIN
  'Shoutbox_config' => 'AJAX Shoutbox Configuration',
  'Shout_read_only' => 'Read Only',
  'Displayed_shouts' => 'Displayed Shouts',
  'Displayed_shouts_explain' => 'Number of shouts that will be displayed when loading the shoutbox.<br /><i>0 to load all shouts.</i>',
  'Stored_shouts' => 'Stored Shouts',
  'Stored_shouts_explain' => 'Number of shouts that remain in the database.<br />This value should be equal or higher than the number of displayed shouts.<br /><i>0 to store all shouts.</i>',
  'Shout_guest_allowed' => 'Guest Allowed',
  'Shoutbox_flood' => 'Flood Interval',
  'Shoutbox_flood_explain' => 'Number of seconds a user must wait between shouts.',
  'Shoutbox_refreshtime' => 'Refresh rate',
  'Shoutbox_refresh_explain' => 'Time in milliseconds for the shoutbox to read new messages.<br /><i>This value should be over the 1000 milliseconds.</i>',
// Ajax Shoutbox - END

/* lang_postcount.php - BEGIN */
  'Postcounts' => 'Post Counts Management',
  'Post_count_explain' => 'From here you can edit the post count of a certain user.',
  'Modify_post_counts' => 'Modify Post Counts',
  'Post_count_changed' => 'Success! You have edited a user\'s post count!',
  'Click_return_posts_config' => 'Kattints %side%s to return to the post count configuration',
  'Modify_post_count' => 'Modify post count',
  'Edit_post_count' => 'Edit the post count for <b>%s</b>',
  'Post_count' => 'Number Of Messages',
/* lang_postcount.php - END */

/* lang_megamail.php - BEGIN */
  'Megamail_Explain' => 'This feature allows you to send private messages or email to either all of your users, or all users in a specific group. To do this, an email will be sent out to the administrative email address supplied, with a blind carbon copy sent to all recipients.<br />Emails will be sent in several batches: this should circumvent timeout and server-load issues. The status of the mass mail sending will be saved in the db. You can close the window when you want to pause mass-mail-sending (the current batch will be sent out). You can simply continue later from where you left off.<br /><b>If HTML emails are enabled, then you should write emails using HTML code, inserting &lt;br /&gt; for a line break.</b><br /><b>If you chose to send FULL HTML emails, then remember that no template or css is used, so you have to insert a full html code, including HEAD and BODY tags.</b><br /><b>Please remember that Mass PM supports only BBCode, if you write a PM in HTML then it will not be correctly shown.</b>',
  'megamail_inactive_users' => 'Non visiting users in the last {DAYS} days',
  'megamail_header' => 'Your Email-Sessions',
  'megamail_id' => 'Mail-ID',
  'megamail_batchstart' => 'Processed',
  'megamail_batchsize' => 'Mails per Batch',
  'megamail_batchwait' => 'Pause',
  'megamail_created_message' => 'The Mass Mail has been saved to the database.<br /><br/> To start sending %sclick here%s or wait until the Meta-Refresh takes you there...',
  'megamail_send_message' => 'The Current Batch (%s - %s) has been sent .<br /><br/> To continue sending %sclick here%s or wait until the Meta-Refresh takes you there...',
  'megamail_status' => 'Status',
  'megamail_proceed' => '%sProceed now%s',
  'megamail_done' => 'DONE',
  'megamail_none' => 'No records were found.',
  'megamail_delete_confirm' => 'Do you really want to delete this email?',
  'megamail_deleted' => 'Email deleted successfully',
  'megamail_click_return' => 'Click %sHere%s to return to Mass Emails / PM',
/* lang_megamail.php - END */

/* lang_admin_voting.php - BEGIN */
  'Admin_Vote_Explain' => 'Poll Results (who voted and how they voted).',
  'Admin_Vote_Title' => 'Poll Administration',
  'Vote_id' => '#',
  'Poll_topic' => 'Poll Topic',
  'Vote_username' => 'Voter(s)',
  'Vote_end_date' => 'Vote Duration',
  'Sort_vote_id' => 'Poll Number',
  'Sort_poll_topic' => 'Poll Topic',
  'Sort_vote_start' => 'Start Date',
  'Submit' => 'Submit',
  'Select_sort_field' => 'Select sort field',
  'Sort_ascending' => 'Ascending',
  'Sort_descending' => 'Descending',
/* lang_admin_voting.php - END */

/* lang_admin_gd_info.php - BEGIN */
  'GD_Title' => 'GD Info',
  'NO_GD' => 'No GD',
  'GD_Description' => 'Here you can retrieve information about the currently installed GD library',
  'GD_Freetype_Support' => 'Freetype Fonts Support:',
  'GD_Freetype_Linkage' => 'Freetype Link Type:',
  'GD_T1lib_Support' => 'T1lib Support:',
  'GD_Gif_Read_Support' => 'Gif Read Support:',
  'GD_Gif_Create_Support' => 'Gif Create Support:',
  'GD_Jpg_Support' => 'Jpg/Jpeg Support:',
  'GD_Png_Support' => 'Png Support:',
  'GD_Wbmp_Support' => 'WBMP Support:',
  'GD_XBM_Support' => 'XBM Support:',
  'GD_Jis_Mapped_Support' => 'Japanese Font Support:',
  'GD_True' => 'Yes',
  'GD_False' => 'No',
/* lang_admin_gd_info.php - END */

/* lang_admin_captcha.php - BEGIN */
  'VC_Captcha_Config' => 'CAPTCHA',
  'captcha_config_explain' => 'Here you can determine the appearance of the picture, which indicates the registration code on activated visual confirmation.',
  'VC_active' => 'Visual Confirmation is active!',
  'VC_inactive' => 'Visual Confirmation is not active!',
  'background_configs' => 'Background',
  'Click_return_captcha_config' => 'Kattints %side%s to return to CAPTCHA Configuration',
  
  'CAPTCHA_width' => 'CAPTCHA width',
  'CAPTCHA_height' => 'CAPTCHA height',
  'background_color' => 'Background color',
  'background_color_explain' => 'Indication in hexadecimal (eg. #0000FF for blue).',
  'pre_letters' => 'Number of shade letters',
  'pre_letters_explain' => '',
  'great_pre_letters' => 'Shade letter increase',
  'great_pre_letters_explain' => '',
  'Random' => 'Random',
  'random_font_per_letter' => 'Random font per letter',
  'random_font_per_letter_explain' => 'Each letter uses an random font.',
  
  'back_chess' => 'Chess sample',
  'back_chess_explain' => 'Fill the complete background with 16 rectangles.',
  'back_ellipses' => 'Ellipses',
  'back_arcs' => 'Curved lines',
  'back_lines' => 'Lines',
  'back_image' => 'Background image',
  'back_image_explain' => '(This function is not integrated yet)',
  
  'foreground_lattice' => 'Foreground lattice',
  'foreground_lattice_explain' => '(width x height)<br />Generate a white lattice over the CAPTCHA',
  'foreground_lattice_color' => 'Lattice color',
  'foreground_lattice_color_explain' => 'Indication in hexadecimal (eg. #0000FF for blue).',
  'gammacorrect' => 'Contrast correction',
  'gammacorrect_explain' => '(0 = off)<br />NOTE!!! Changes of the value have direct effect on the legibility of the CAPTCHA!',
  'generate_jpeg' => 'Image type',
  'generate_jpeg_explain' => 'The JPEG format has a higher compression than png and has, through the quality attitude (max 95%), a direct influence on the legibility of the CAPTCHA.',
  'generate_jpeg_quality' => 'Quality',
/* lang_admin_captcha.php - END */

/* lang_admin_topic_shadow.php - BEGIN */
  'Del_Before_Date' => 'Deleted all Shadow Topics before %s<br />', // %s = insertion of date
  'Deleted_Topic' => 'Deleted Shadow Topic %s<br />', // %s = topic name
  'Affected_Rows' => '%d known entries were affected<br />', // %d = affected rows (not avail with all databases!)
  'Delete_From_Date' => 'All Shadow Topics that were created before the entered date will be removed.',
  'Delete_Before_Date_Button' => 'Delete All Before Date',
  'No_Shadow_Topics' => 'No Shadow Topics were found.',
  'Topic_Shadow' => 'Topic Shadow',
  'TS_Desc' => 'Allows the removal of shadow topics without the deletion of the actual message. Shadow topics are created when you move a post to another forum and choose to leave behind a link in the original forum to the new post.',
  'Month' => 'Month',
  'Day' => 'Day',
  'Year' => 'Year',
  'Clear' => 'Clear',
  'Resync_Ran_On' => 'Resync Ran On %s<br />', // %s = insertion of forum name
  'Version' => 'Version',
  
  'Title' => 'Title',
  'Moved_To' => 'Moved To',
  'Moved_From' => 'Moved From',
  
/* Modes */
  'topic_time' => 'Topic Time',
  'topic_title' => 'Topic Title',
  
/* Errors */
  'Error_Month' => 'Your input month must be between 1 and 12',
  'Error_Day' => 'Your input day must be between 1 and 31',
  'Error_Year' => 'Your input year must be between 1970 and 2038',
  'Error_Topics_Table' => 'Error accessing topics table',
/* lang_admin_topic_shadow.php - END */

/* lang_admin_rebuild_search.php - BEGIN */
  'Rebuild_search' => 'Rebuild Search',
  'Rebuild_search_desc' => 'This will index every post in your Knowledge Base, rebuilding the search tables. It may take a long time to process, so please do not move from this page until it is complete.',
  'Post_limit' => 'Post limit',
  'Time_limit' => 'Time limit',
  'Refresh_rate' => 'Refresh rate',
  
  'Next' => 'Next',
  'Finished' => 'Finished',
/* lang_admin_rebuild_search.php - END */

/* lang_admin_faq_editor.php - BEGIN */
  'faq_editor' => 'Edit Language',
  'faq_editor_explain' => 'This module allows you to edit and re-arrange your FAQ, BBCode FAQ and Board Rules . You <u>should not</u> remove or alter the section entitled <b>phpBB 2 Issues</b> or <b>About Icy Phoenix</b>.',
  
  'faq_select_language' => 'Choose the language of the file you want to edit',
  'faq_retrieve' => 'Retrieve File',
  
  'faq_block_delete' => 'Are you sure you want to delete this block?',
  'faq_quest_delete' => 'Are you sure you wish to delete this question (and its answer)?',
  
  'faq_quest_edit' => 'Edit Question & Answer',
  'faq_quest_create' => 'Create New Question & Answer',
  
  'faq_quest_edit_explain' => 'Edit the question and answer. Change the block if you wish.',
  'faq_quest_create_explain' => 'Type the new question and answer and press Submit.',
  
  'faq_block' => 'Block',
  'faq_quest' => 'Question',
  'faq_answer' => 'Answer',
  
  'faq_block_name' => 'Block Name',
  'faq_block_rename' => 'Rename a block',
  'faq_block_rename_explain' => 'Change the name of a block in the file',
  
  'faq_block_add' => 'Add Block',
  'faq_quest_add' => 'Add Question',
  
  'faq_no_quests' => 'No questions in this block. This will prevent any blocks after this one being displayed. Delete the block or add one or more questions.',
  'faq_no_blocks' => 'No blocks defined. Add a new block by typing a name below.',
  
  'faq_write_file' => 'Could not write to the language file!',
  'faq_write_file_explain' => 'You must make the language file in language/lang_english/ or equivalent <i>writable</i> to use this control panel. On UNIX, this means running <code>chmod 666 filename</code>. Most FTP clients can do through the properties sheet for a file, otherwise you can use telnet or SSH.',
/* lang_admin_faq_editor.php - END */

/* lang_admin_rules_editor.php - BEGIN */
  'rules_editor' => 'Edit Language',
  'rules_editor_explain' => 'This module allows you to edit and re-arrange your Board rules. ',
  
  'rules_select_language' => 'Choose the language of the file you want to edit',
  'rules_retrieve' => 'Retrieve File',
  
  'rules_block_delete' => 'Are you sure you want to delete this block?',
  'rules_quest_delete' => 'Are you sure you wish to delete this question (and its answer)?',
  
  'rules_quest_edit' => 'Edit Question & Answer',
  'rules_quest_create' => 'Create New Question & Answer',
  
  'rules_quest_edit_explain' => 'Edit the question and answer. Change the block if you wish.',
  'rules_quest_create_explain' => 'Type the new question and answer and press Submit.',
  
  'rules_block' => 'Block',
  'rules_quest' => 'Question',
  'rules_answer' => 'Answer',
  
  'rules_block_name' => 'Block Name',
  'rules_block_rename' => 'Rename a block',
  'rules_block_rename_explain' => 'Change the name of a block in the file',
  
  'rules_block_add' => 'Add Block',
  'rules_quest_add' => 'Add Question',
  
  'rules_no_quests' => 'No questions in this block. This will prevent any blocks after this one being displayed. Delete the block or add one or more questions.',
  'rules_no_blocks' => 'No blocks defined. Add a new block by typing a name below.',
  
  'rules_write_file' => 'Could not write to the language file!',
  'rules_write_file_explain' => 'You must make the language file in language/lang_english/ or equivalent <i>writable</i> to use this control panel. On UNIX, this means running <code>chmod 666 filename</code>. Most FTP clients can do through the properties sheet for a file, otherwise you can use telnet or SSH.',
/* lang_admin_rules_editor.php - END */

/* lang_admin_priv_msgs.php - BEGIN */
  'PM_View_Type' => 'PM View Type',
  'Show_IP' => 'Show IP Address',
  'Rows_Per_Page' => 'Rows Per Page',
  'Archive_Feature' => 'Archive Feature',
  'Inline' => 'Inline',
  'Pop_up' => 'Pop-up',
  'Current' => 'Current',
  'Rows_Plus_5' => 'Add 5 Rows',
  'Rows_Minus_5' => 'Remove 5 Rows',
  'Enable' => 'Enable',
  'Disable' => 'Disable',
  'Inserted_Default_Value' => '%s Configuration Item did not exist, inserted a default value<br />', // %s = config name
  'Updated_Config' => 'Updated Configuration Item %s<br />', // %s = config item
  'Archive_Table_Inserted' => 'Archive Table did not exist, created it<br />',
  'Switch_Normal' => 'Switch To Normal Mode',
  'Switch_Archive' => 'Switch To Archive Mode',
  
/* General */
  'Deleted_Message' => 'Deleted Private Message - %s <br />', // %s = PM title
  'Archived_Message' => 'Archived Private Message - %s <br />', // %s = PM title
  'Archived_Message_No_Delete' => 'Cannot Delete %s, It Was Marked For Archive As Well <br />', // %s = PM title
  'Private_Messages' => 'Private Messages',
  'Private_Messages_Archive' => 'Private Messages Archive',
  'Archive' => 'Archive',
  'To' => 'To',
  'Subject' => 'Subject',
  'Sent_Date' => 'Sent Date',
  'From' => 'From',
  'Sort' => 'Sort',
  'Filter_By' => 'Filter By',
  'PM_Type' => 'PM Type',
  'Status' => 'Status',
  'No_PMS' => 'No Private Messages Matching Your Sort Criteria To Display',
  'Archive_Desc' => 'Private Messages you have chosen to archive are listed here. Users are no longer able to access these (sender and receiver), but you can view or delete them at any time.',
  'Normal_Desc' => 'All the Private Messages on your board may be managed here. You can read any you\'d like and choose to delete or archive (keep, but users cannot view) the messages as well.',
  'Remove_Old' => 'Orphan PMs:</a> <span class="gensmall">Users who no longer exist could have left PMs behind, this will remove them.</span>',
  'Remove_Sent' => 'Sent Box PMs:</a> <span class="gensmall">PMs in the sent box are just copies of the exact same message that was sent, except assigned to the sender after the other user has read the PM. These are not needed really.</span>',
  'Removed_Old' => 'Removed All Orphan PMs<br />',
  'Removed_Sent' => 'Removed All Sent PMs<br />',
  'Utilities' => 'Mass Deletion Utilities',
  'Nivisec_Com' => 'Nivisec.com',
  
/* PM Types */
  'PM_-1' => 'All Types', //PRIVMSGS_ALL_MAIL = -1
  'PM_0' => 'Read PMs', //PRIVMSGS_READ_MAIL = 0
  'PM_1' => 'New PMs', //PRIVMSGS_NEW_MAIL = 1
  'PM_2' => 'Sent PMs', //PRIVMSGS_SENT_MAIL = 2
  'PM_3' => 'Saved PMs (In)', //PRIVMSGS_SAVED_IN_MAIL = 3
  'PM_4' => 'Saved PMs (Out)', //PRIVMSGS_SAVED_OUT_MAIL = 4
  'PM_5' => 'Unread PMs', //PRIVMSGS_UNREAD_MAIL = 5

/* Errors */
  'Error_Other_Table' => 'Error querying a required table.',
  'Error_PM_Text_Table' => 'Error querying Private Messages Text table.',
  'Error_PM_Table' => 'Error querying Private Messages table.',
  'Error_PM_Archive_Table' => 'Error querying Private Messages Archive table.',
  'No_Message_ID' => 'No message ID was specified.',
/* lang_admin_priv_msgs.php - END */

/* lang_admin_link.php - BEGIN */
// Categories
  'Link_Categories_Title' => 'Link Categories Control',
  'Link_Categories_Explain' => 'On this screen you can manage your categories: create, alter, delete, sort, etc.',
  'Category_Permissions' => 'Category Permissions',
  'Category_Title' => 'Category Title',
  'Category_Desc' => 'Category Description',
  'View_level' => 'View Level',
  'Upload_level' => 'Upload Level',
  'Rate_level' => 'Rate Level',
  'Comment_level' => 'Comment Level',
  'Edit_level' => ' Edit Level',
  'Delete_level' => 'Delete Level',
  'New_category_created' => 'New category has been created successfully',
  'Click_return_link_category' => 'Kattints %side%s to return to the Link Categories Manager',
  'Category_updated' => 'This category has been updated successfully',
  'Delete_Category' => 'Delete Category',
  'Delete_Category_Explain' => 'The form below will allow you to delete a category',
  'Category_deleted' => 'This category has been deleted successfully',
  'Category_changed_order' => 'This category has been changed in order successfully',

// Config
  'Link_Config' => 'Link Config Control',
  'Link_config_explain' => 'You can change the general settings of your link here',
  'lock_submit_site' => 'Lock user submit site',
  'allow_guest_submit_site' => 'Allow guest to submit site',
  'allow_no_logo' => 'Allow submit site without banner',
  'site_logo' => 'The url where your logo can be found (full url)',
  'site_url' => 'Your url of your website',
  'width' => 'Max width of the banners',
  'height' => 'Max height of the banners',
  'linkspp' => 'Max links per page',
  'interval' => 'How fast the banners are displayed',
  'display_logo' => 'How many banners are displayed at once',
  'Link_display_links_logo' => 'Display Links site banner',
  'Link_email_notify' => 'While Link added, send e-mail to all site admins',
  'Link_pm_notify' => 'While Link added, notify all site admins in private message',
  'Link_config_updated' => 'Links configuration has been updated successfully',
  'Click_return_link_config' => 'Kattints %side%s to return to the Link Config Manager',

// Link_MOD
  'Links' => 'Links Management',
  'Links_explain' => 'From this control panel, you can preview all the status of links and edit or remove the selected link.',
  'Add_link' => 'Add Link',
  'Add_link_explain' => 'The form below will allow you to add a link immediately.',
  'Edit_link' => 'Edit Link',
  'Edit_link_explain' => 'The form below will allow you to edit a link\'s detail, and also you can select to ',
  'Delete_link' => 'Delete Link',
  'Delete_link_explain' => 'The form below will allow you to remove a link, and also you can select to ',
  'Link_update' => 'Update link detail',
  'Link_delete' => 'Delete this link',
  'Link_title' => 'Site Name',
  'Link_url' => 'Site URL',
  'Link_logo_src' => 'Site Logo (88x31 pixels, size no more than 10K)',
  'Link_category' => 'Site Category',
  'Link_desc' => 'Site Description',
  'link_hits' => 'Hits',
  'Link_basic_setting' => 'Link Basic Detail',
  'Link_adv_setting' => 'Advanced Setting',
  'Link_active' => 'Active Status',
  
  'Link_admin_add_success' => 'The links was successfully added',
  'Link_admin_add_fail' => 'Unable to add the new link, please try again later',
  'Link_admin_update_success' => 'The links was successfully updated',
  'Link_admin_update_fail' => 'Unable to update the link, please try again later',
  'Link_admin_delete_success' => 'The links was successfully removed',
  'Link_admin_delete_fail' => 'Unable to remove the link, please try again later',
  'Click_return_lastpage' => 'Kattints %side%s to return to the previous page',
  'Click_return_admin_links' => 'Kattints %side%s to return to Links Manage',
  'Preview' => 'Preview',
  'Search_site' => 'Search Site',
  'Search_site_title' => 'Search Site Name/Description:',
/* lang_admin_link.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

// Icy Phoenix - BUILD 009
  'Replace_title' => 'Replace In Posts',
  'Replace_text' => 'From this page you can replace words or lines with whatever you want. This cannot be undone.',
  'Link' => 'Link',
  'Str_old' => 'Current text',
  'Str_new' => 'Replace with',
  'No_results' => 'No results found',
  'Replaced_count' => 'Total posts updated: %s',

// Icy Phoenix - BUILD 016
  'group_rank' => 'Rank',
  'group_color' => 'Color',
  'group_legend' => 'Show in legend',
  'group_legend_short' => 'Legend',
  'group_main' => 'Main group',
  'group_members' => 'Members',
  'group_update' => 'Apply Changes',

/* lang_color_groups.php - BEGIN */
  'Color_Groups' => 'Color Groups',
  'Manage_Color_Groups' => 'Manage Color Groups',
  'Add_New_Group' => 'Add New Group',
  'Color' => 'Color',
  'User_Count' => 'User Count',
  'Color_List' => 'Color Name List:',
  'Group_Name' => 'Group Name',
  'Define_Users' => 'Define Users',
  'Color_Group_User_List' => 'Color Group User List',
  'Options' => 'Options',
  'Example' => 'Example',
  'User_List' => 'Full User List',
  'Unassigned_User_List' => 'Users With No Group',
  'Assigned_User_List' => 'Users With A Group',
  'Add_Arrow' => 'Add To List',
  'Update' => 'Update',
  'Updated_Group' => 'Updated Group User List<br />',
  'Deleted_Group' => 'Deleted Specified Group. All users that were in it have been reset to no group membership<br />',
  'Hide' => 'Hide',
  'Un-hide' => 'Un-hide',
  'Move_Up' => 'Move Up',
  'Move_Down' => 'Move Down',
  'Group_Hidden' => 'Group Hidden<br />',
  'Group_Unhidden' => 'Group Un-hidden<br />',
  'Groups_Updated' => 'Group changes have been updated<br />',
  'Moved_Group' => 'Moved group order<br />',

//Descriptions
  'Manage_Color_Groups_Desc' => 'Update groups, add a new group, or manage the users assigned to a particular color group.<br />Groups that you choose to "Hide" will not show up on the main index list.',
  'Color_Group_User_List_Desc' => 'Add or remove users to a specified color group.',

//Errors
  'Error_Group_Table' => 'Error querying the color groups table.',
  'Error_Font_Color' => '<b><u>Warning:</b></u> The specified font color appears to be invalid!',
  'Color_Ok' => 'The specified font color appears to be valid.',
  'No_Groups_Exist' => 'No groups exist.',
  'Error_Users_Table' => 'Error querying the users table.',
  'Invalid_Group_Add' => '%s is an invalid or duplicate group name.<br />',

//Dynamic
  'Group_Updated' => 'Updated Color Group %s<br />',
  'Editing_Group' => 'Currently editing the user list for %s.',
  'Invalid_User' => '%s is an invalid username, skipping<br />',
  'Invalid_Order_Num' => '%s contained an invalid order number, but it has been fixed. Please try your move up/down again.',

//New for 1.2.0
  'Users_List' => 'Users List',
  'Groups_List' => 'User Groups List',
  'List_Info' => '<b>Notes</b>: <ul><li>Hold CTRL when clicking to select multiple names. <li>If a user belongs to a user group, and is added to a specific color group, the color group that contains the user will be used; not the one the user group belongs to. <li>The list names are formatted as NAME (CURRENT_COLOR_GROUP). There will be no (CURRENT_COLOR_GROUP) if the entry doesn\'t belong to one. <li>If a user is a member of 2 or more user groups, the highest ranking color group will be assigned (you order their appearance on the main page).</ul>',
/* lang_color_groups.php - END */

// Icy Phoenix - BUILD 023
  'Empty_Cache_Main_Question' => 'If you click yes, all files in main cache folder will be permanently deleted.<br /><br /><em> Are you sure you want to do this? </em>',
  'Empty_Cache_Posts_Question' => 'If you click yes, precompiled posts field in posts table will be permanently deleted.<br /><br /><em> Are you sure you want to do this? </em>',
  'Empty_Cache_Thumbs_Question' => 'If you click yes, all thumbnails generated in posts will be permanently deleted.<br /><br /><em> Are you sure you want to do this? </em>',
  'Empty_Cache_Success' => 'Cache folders emptied successfully.',
  
  'Copy_Auth' => 'Copy permissions from',
  'Copy_Auth_Explain' => 'Please note that you can copy permissions only from forums, not from categories!!!',

// Icy Phoenix - BUILD 027
/* lang_admin_db_backup.php - BEGIN */
  'SELECT_ALL' => 'Select all',
  'SELECT_FILE' => 'Select a file',
  'START_BACKUP' => 'Start backup',
  'START_RESTORE' => 'Start restore',
  'STORE_AND_DOWNLOAD' => 'Store and download',
  'STORE_LOCAL' => 'Store file locally',
  'STRUCTURE_ONLY' => 'Structure only',

// Backup
  'ACP_BACKUP' => 'Backup Database',
  'ACP_BACKUP_EXPLAIN' => 'Backup all your site related data. Backup will be stored <b><samp>backup/</samp></b> (make sure this folder is <b>writable</b>) folder so you can download or restore it from the <b>Restore</b> page. Your server configuration may also allow you to save the file in compressed gzip format.<br /><br /><span class="text_red">Backup will be performed on several steps to avoid timeouts: the script should be able to perform the full process all automatically, so you have just to wait it to complete the automated task.</span><br /><br />',
  
  'BACKUP_OPTIONS' => 'Backup Options',
  'BACKUP_TYPE' => 'Backup type',
  
  'DATABASE' => 'Database Utilities',
  'DATA_ONLY' => 'Data only',
  'DELETE_BACKUP' => 'Delete backup',
  'DELETE_SELECTED_BACKUP' => 'Are you sure you want to delete the selected backup?',
  'DESELECT_ALL' => 'Deselect all',
  'DOWNLOAD_BACKUP' => 'Download backup',
  
  'FILE_TYPE' => 'File type',
  'FULL_BACKUP' => 'Full',
  
  'BACKUP_TYPE_COMPLETE' => 'Complete',
  'BACKUP_TYPE_EXTENDED' => 'Extended',
  'BACKUP_TYPE_COMPACT' => 'Compact Line Breaks',
  
  'BACKUP_SUCCESS' => 'The backup file has been created successfully.',
  'BACKUP_DELETED' => 'The backup file has been deleted successfully.',
  
  'TABLE_SELECT' => 'Table select',
  
  'BACKUP_IN_PROGRESS' => 'Backup in progress...',
  'BACKUP_IN_PROGRESS_TABLE' => 'Backing up table: <b>%s</b>',
  'BACKUP_IN_PROGRESS_REDIRECT' => 'You will be automatically redirected to next step in few seconds',
  'BACKUP_IN_PROGRESS_REDIRECT_CLICK' => 'If you are not automatically redirected within few seconds you may click %sHere%s',
  'BACKUP_OPTIONS_RETURN' => 'Click %sHere%s to return to Backup Management',

// Errors
  'Table_Select_Error' => 'You must select at least one table.',

// Restore
  'ACP_RESTORE' => 'Restore Database',
  'ACP_RESTORE_EXPLAIN' => 'This will perform a full restore of all your site tables from a saved file. If your server supports it you may use a gzip or bzip2 compressed text file and it will automatically be decompressed. <strong>WARNING</strong> This will overwrite any existing data. The restore may take a long time to process please do not move from this page until it is complete. Backups are stored in the <samp>backup/</samp> folder and are assumed to be generated by this site backup functions. Restoring backups that were not created by the built in system may not work properly.',
  'RESTORE_OPTIONS' => 'Restore Options',
  
  'Restore_Success' => 'The database has been successfully restored.<br />Your site should be back to the state it was when the backup was made.',
  
// Errors
  'No_Backup_Selected' => 'You haven\'t selected any backup, so you can\'t restore it.',
  'Backup_Invalid' => 'The selected file to backup is invalid.',
  'RESTORE_FAILURE' => 'The backup file may be corrupt.',
/* lang_admin_db_backup.php - END */

/* Logs - BEGIN */
  'LOGS_ACTIONS_FILTER' => 'Actions filter',
  'LOGS_TITLE' => 'Logs',
  'LOGS_EXPLAIN' => 'All relevant actions stored in the DB',
  'LOGS_TARGET' => 'Target',
  'LOGS_DELETE' => 'Delete Selected',
  'LOGS_DELETE_ALL' => 'Empty Logs Table',
  'LOGS_DENY' => 'Not authorized!',
  'LOGS_POST_EDIT' => 'edited a post posted by',
  'LOGS_POST_DELETE' => 'deleted a post posted by',
  'LOGS_GROUP_JOIN' => 'requested to join the group',
  'LOGS_GROUP_EDIT' => 'edited group options of %s',
  'LOGS_GROUP_ADD' => 'added %s to the group',
  'LOGS_GROUP_TYPE' => 'edited group %s status, now the group is %s',
  'LOGS_GROUP_TYPE_0' => 'open',
  'LOGS_GROUP_TYPE_1' => 'closed',
  'LOGS_GROUP_TYPE_2' => 'hidden',
  'LOGS_MESSAGE' => 'message to the user, code <b>%s</b>',
  'LOGS_MODCP_DELETE' => 'deleted some messages in %s through MODCP',
  'LOGS_MODCP_RECYCLE' => 'trashed some messages in %s through MODCP',
  'LOGS_MODCP_LOCK' => 'locked some messages in %s through MODCP',
  'LOGS_MODCP_UNLOCK' => 'unlocked some messages in %s through MODCP',
  'LOGS_MODCP_MOVE' => 'moved some messages in %s through MODCP',
  'LOGS_MODCP_MERGE' => 'merged some messages in %s through MODCP',
  'LOGS_MODCP_SPLIT' => 'splitted some messages in %s through MODCP',
  'LOGS_TOPIC_BIN' => 'trashed a message in',
  'LOGS_TOPIC_ATTACK' => 'hacking attempt to message',
  'LOGS_CARD_BAN' => 'banned',
  'LOGS_CARD_WARN' => 'warned',
  'LOGS_CARD_UNBAN' => 'unbanned',
  'LOGS_ADMIN_CAT_ADD' => 'added a forum category',
  'LOGS_ADMIN_DB_UTILITIES_BACKUP' => 'DB backup %s',
  'LOGS_ADMIN_DB_UTILITIES_BACKUP_full' => 'full',
  'LOGS_ADMIN_DB_UTILITIES_BACKUP_structure' => 'structure only',
  'LOGS_ADMIN_DB_UTILITIES_BACKUP_data' => 'data',
  'LOGS_ADMIN_DB_UTILITIES_BACKUP_store_and_download' => ', downloaded and stored',
  'LOGS_ADMIN_DB_UTILITIES_BACKUP_store' => ', stored',
  'LOGS_ADMIN_DB_UTILITIES_BACKUP_download' => ', downloaded',
  'LOGS_ADMIN_DB_UTILITIES_RESTORE' => 'DB restored from',
  'LOGS_ADMIN_BOARD_CONFIG' => 'edited config settings',
  'LOGS_ADMIN_BOARD_IP_CONFIG' => 'edited Icy Phoenix settings',
  'LOGS_ADMIN_GROUP_NEW' => 'group created',
  'LOGS_ADMIN_GROUP_DELETE' => 'group deleted',
  'LOGS_ADMIN_GROUP_EDIT' => 'group edited',
  'LOGS_ADMIN_USER_AUTH' => 'edited permissions of',
  'LOGS_ADMIN_GROUP_AUTH' => 'edited group permissions',
  'LOGS_ADMIN_USER_BAN' => 'banned someone from ACP',
  'LOGS_ADMIN_USER_UNBAN' => 'unbanned someone from ACP',
  'LOGS_ADMIN_USER_DELETE' => 'user deleted',
  'LOGS_ADMIN_USER_EDIT' => 'profile edited of',
  'LOGS_CMS_LAYOUT_EDIT' => 'edited %sTHIS%s page',
  'LOGS_CMS_LAYOUT_DELETE' => 'deleted a page [ID = %s]',
  'LOGS_CMS_BLOCK_EDIT' => 'edited a block [ID = %s] in %sTHIS%s page',
  'LOGS_CMS_BLOCK_EDIT_LS' => 'edited a block [ID = %s] in a standard page [%s]',
  'LOGS_CMS_BLOCK_DELETE' => 'deleted a block [ID = %s] in %sTHIS%s page',
  'LOGS_CMS_BLOCK_DELETE_LS' => 'deleted a block [ID = %s] in a standard page [%s]',
/* Logs - END */

  'SMILEYS_UPDATED' => 'Smileys Updated',
  
/* ADS - BEGIN */
  'ADS_TITLE' => 'Ads &amp; Sponsors',
  'ADS_TITLE_EXPLAIN' => 'This section allows you to configure banners, ads and sponsors to be shown on your site. You can add different types of banners and decide where these banners have to be shown or which level of users won\'t see them. If you specify more than one banner for a single position, then one banner will be shown randomly among all of those specified for the same position.',
  'AD_DES' => 'Description',
  'AD_TEXT' => 'Content',
  'AD_ENABLED' => 'Enabled',
  'AD_STATUS' => 'Status',
  'AD_STATUS_EXPLAIN' => 'Select YES if you want to enable this ad or NO if you want to disable it',
  'AD_POSITION' => 'Position',
  'AD_AUTH' => 'Permission',
  'AD_AUTH_EXPLAIN' => 'Users who will see this ad',
  'AD_AUTH_GUESTS' => 'Guests only',
  'AD_AUTH_REG' => 'Guests and Registered (not ADMINS and MODS)',
  'AD_AUTH_MOD' => 'All but Administrators',
  'AD_AUTH_ADMIN' => 'All',
  'AD_FORMAT' => 'Format',
  'AD_POS_GLT' => 'Global Top',
  'AD_POS_GLB' => 'Global Bottom',
  'AD_POS_GLH' => 'Global Header',
  'AD_POS_GLF' => 'Global Footer',
  'AD_POS_FIX' => 'Forum Index Element',
  'AD_POS_FIT' => 'Forum Index Top',
  'AD_POS_FIB' => 'Forum Index Bottom',
  'AD_POS_VFX' => 'View Forum Element',
  'AD_POS_VFT' => 'View Forum Top',
  'AD_POS_VFB' => 'View Forum Bottom',
  'AD_POS_VTX' => 'View Topic Element',
  'AD_POS_VTT' => 'View Topic Top',
  'AD_POS_VTB' => 'View Topic Bottom',
  'AD_POS_NMT' => 'Nav Menu Top',
  'AD_POS_NMB' => 'Nav Menu Bottom',
  'AD_ADD' => 'Add Ad',
  'AD_EDIT' => 'Edit Ad',
  'AD_ADDED' => 'Ad added successfully',
  'ADS_UPDATE' => 'Update Ads',
  'AD_UPDATED' => 'Ad updated successfully',
  'AD_DELETED' => 'Ad deleted successfully',
  'CLICK_RETURN_ADS' => 'Click %sHere%s to return to Ads administration',
  'AD_NO_ADS' => 'No ads defined',
  'ERR_AD_ADD' => 'Please fill all required fields',
/* ADS - END */

  'FULL_HTML' => 'Full HTML',
  'ACTIONS' => 'Actions',
  'EDIT' => 'Edit',
  'DELETE' => 'Delete',
  
// Tickets Submission - BEGIN
  'TICKETS_EMAILS' => 'Email Tickets',
  'TICKETS_EMAILS_EXPLAIN' => 'This section lets you specify several categories which could be chosen in "Contact Us" page when sending emails. For each category one or more email address can be specified, so the user will be allowed to choose a specific subject and the email will be sent to the linked email addresses.',
  'TICKET_CAT' => 'Category',
  'TICKET_CAT_TITLE' => 'Title',
  'TICKET_CAT_DES' => 'Description',
  'TICKET_CAT_EMAILS' => 'Email Addresses',
  'TICKET_CAT_EMAILS_EXPLAIN' => 'Insert here all email addresses you want the email to be sent.<br />Separate all addresses by semicolon (a@a.com;b@b.com;c@c.com).',
  'TICKETS_NO_TICKETS' => 'No Tickets',
  'TICKETS_NO_TICKET_SEL' => 'No ticket selected',
  'TICKETS_NO_TICKET_TITLE' => 'You have to enter at least title field',
  'TICKETS_DB_ADD' => 'Add Category',
  'TICKETS_DB_ADDED' => 'Category Added Successfully',
  'TICKETS_DB_UPDATED' => 'Category Updated Successfully',
  'TICKETS_DB_DELETED' => 'Category Deleted Successfully',
  'TICKETS_DB_CLICK' => 'Click %sHere%s to return to Email Tickets',
// Tickets Submission - END

// ####################### [ Icy Phoenix Options BEGIN ] #####################
  'MG_Configuration' => 'Icy Phoenix Settings',
  'MG_Configuration_Explain' => 'Here you can set up some advanced Icy Phoenix Settings',
  
  'MG_Configuration_Headers_Banners' => 'Headers &amp; Banners',
  'MG_Configuration_Queries' => 'SQL Optimization',
  'MG_Configuration_Permissions' => 'Page Permissions',
  'MG_Configuration_Posting' => 'Posting',
  'MG_SW_Precompiled_Posts_Title' => 'Precompiled Posts',
  'MG_SW_Logins_Title' => 'Logins Recording',
  'MG_SW_Edit_Notes_Title' => 'Edit Notes',
  'MG_Configuration_IMG_Posting' => 'Images In Posting',
  
  'MG_SW_Header_Footer' => 'Header and Footer Messages',
  'MG_SW_Header_Table' => 'Header Table',
  'MG_SW_Header_Table_Explain' => 'Enabling this option will be shown a table on each page header with a customized message.',
  'MG_SW_Header_Table_Text' => 'Insert your text here',
  
  'MG_SW_Empty_Precompiled_Posts' => 'Empty precompiled posts',
  'MG_SW_Empty_Precompiled_Posts_Explain' => 'This function allow you to empty all precompiled posts.',
  'MG_SW_Empty_Precompiled_Posts_Success' => 'Precompiled posts emptied correctly.',
  'MG_SW_Empty_Precompiled_Posts_Fail' => 'Errors in emptying precompiled posts.',
  'MG_SW_Empty_Precompiled_Posts_InProgress' => 'Emptying cache folders in progress...',
  'MG_SW_Empty_Precompiled_Posts_InProgress_Redirect' => 'You will be automatically redirected to next step in three seconds',
  'MG_SW_Empty_Precompiled_Posts_InProgress_Redirect_Click' => 'If you are not automatically redirected within three seconds you may click %sHere%s',
  'MG_SW_Empty_Precompiled_Posts_Redirect_Click' => 'Click %sHere%s to return to Cache Management',
  
  'MG_FNF_Header' => 'Quick Settings',
  'MG_FNF_Header_Explain' => 'In this page you can quickly and easily set some of the configuration options of your site. These default configurations have been created to easily allow users to mass change their settings without having to modify each option one by one in the configuration panel. These default settings may be used as a starting point for future customizations: for example you can choose "Fast And Furious" and then modify only the options of this set which you don\'t like.<br /><br /><span class="text_red"><b>Please note that once you have applied one of these set of options you cannot automatically restore your old settings, but you have to set them up again manually.</b></span>',
  'MG_FNF_Options_Set' => 'Set Of Options',
  'MG_FNF_FNF' => 'Fast And Furious',
  'MG_FNF_FNF_Explain' => 'This set of options will increase the speed of your site, because most of the features which requires high CPU charge or DB access will be disabled. This is a good starting point to have a site very fast.',
  'MG_FNF_MGS' => 'Mighty Gorgon\'s Suggested',
  'MG_FNF_MGS_Explain' => 'This set of options is balanced and it is good for most of the sites. Some options will be enabled while some others which requires high CPU load will be switched off.',
  'MG_FNF_Full_Features' => 'Full Features',
  'MG_FNF_Full_Features_Explain' => 'This set of options could be enabled if you don\'t have bandwidth limit or if you like having all Icy Phoenix features enabled. Please notice that some of the features may not be compatible with your server.',
  
  'MG_SW_ACRONYMS' => 'Disable acronyms',
  'MG_SW_ACRONYMS_Explain' => 'This option allows to disable acronyms parsing',
  'MG_SW_AUTOLINKS' => 'Disable autolinks',
  'MG_SW_AUTOLINKS_Explain' => 'This option allows to disable autolinks parsing',
  'MG_SW_CENSOR' => 'Disable word censor',
  'MG_SW_CENSOR_Explain' => 'This option allows to disable word censor parsing',
  
  'MG_SW_No_Right_Click' => 'Block Right Click',
  
  'Click_return_config_mg' => 'Kattints %side%s to return to Icy Phoenix Settings',
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
$lang['1000_Configuration'] = 'Configuration'; // admin_board.php, admin_board_extend.php, admin_board_headers_banners.php, admin_board_main.php, admin_board_permissions.php, admin_board_server.php, admin_board_posting.php, admin_board_queries.php, admin_bots.php, admin_captcha_config.php, admin_google_bot_detector.php, admin_lang_user_created.php, admin_upi2db.php
$lang['100_Server_Configuration'] = 'Server'; // admin_board_server.php
$lang['110_Various_Configuration'] = 'Site'; // admin_board.php
$lang['120_MG_Configuration'] = 'Icy Phoenix'; // admin_board.php
$lang['125_Language'] = 'Custom Lang Vars'; // admin_lang_user_created.php
$lang['127_Clear_Cache'] = 'Clear Cache'; // admin_board_clearcache.php
$lang['130_UPI2DB_Mod'] = 'Unread Posts'; // admin_upi2db.php
$lang['140_MG_Configuration_Headers_Banners'] = 'Headers &amp; Banners'; // admin_board_headers_banners.php
$lang['145_Captcha_Config'] = 'Visual Confirmation'; // admin_captcha_config.php
$lang['150_Similar_topics'] = 'Similar Topics'; // admin_similar_topics.php
$lang['160_Title_infos'] = 'Quick Title Management'; // admin_quick_title.php
$lang['170_LIW'] = 'Limit Image Width'; // admin_liw.php
$lang['180_MG_Configuration_Permissions'] = 'Page Permissions'; // admin_board_permissions.php
$lang['190_Spider_Bots'] = 'Spider / Bots'; // admin_bots.php
$lang['192_Google_BOT'] = 'Google Bot Detector'; // admin_google_bot_detector.php
$lang['195_Yahoo_search'] = 'Yahoo Search'; // admin_yahoo_search.php
$lang['200_Language'] = 'Language'; // admin_lang_extend.php
$lang['210_MG_Quick_Settings'] = 'Quick Settings'; // admin_board_quick_settings.php

// General
$lang['1100_General'] = 'General'; // admin_acronyms.php, admin_autolinks.php, admin_force_read.php, admin_helpdesk.php, admin_liw.php, admin_force_read.php, admin_mass_email.php, admin_megamail.php, admin_notepad.php, admin_quick_title.php, admin_smilies.php, admin_words.php, admin_yahoo_search.php
$lang['100_Acronyms'] = 'Acronyms'; // admin_acronyms.php
$lang['110_Autolinks'] = 'Autolinks'; // admin_autolinks.php
$lang['120_Ads'] = 'Ads &amp; Sponsors'; // admin_ads.php
$lang['130_Mass_Email'] = 'Mass Email'; // admin_mass_email.php
$lang['140_Mega_Mail'] = 'Mass Email / PM'; // admin_megamail.php
$lang['150_FTR_Config'] = 'Force Topic Read'; // admin_force_read.php
$lang['160_FTR_Users'] = 'Force Topic Read Users'; // admin_force_read.php
$lang['170_Smilies'] = 'Smileys'; // admin_smilies.php
$lang['180_Word_Censor'] = 'Word Censor'; // admin_words.php
$lang['200_Notepad'] = 'Admin Notepad'; // admin_notepad.php
$lang['210_Help_Desk'] = 'Help Desk'; // admin_helpdesk.php
$lang['220_Tickets_Emails'] = 'Emails Categories'; // admin_tickets.php
$lang['240_Replace_title'] = 'Replace In Posts'; // admin_replace.php

// Forum
$lang['1200_Forums'] = 'Forum'; // admin_forum_prune.php, admin_forumauth_list.php, admin_forums.php, admin_forums_extend.php, admin_prune_overview.php, admin_topic_shadow.php
$lang['100_Manage'] = 'Management'; // admin_forums.php
$lang['110_Manage_extend'] = 'Advanced Management'; // admin_forums_extend.php
$lang['120_Permissions_List'] = 'Permissions List'; // admin_forumauth_list.php
$lang['122_Permissions_Adv'] = 'Permissions ADV'; // admin_forumauth_adv.php
$lang['125_Permissions_Forum'] = 'Permissions'; // admin_forumauth.php
$lang['130_Prune'] = 'Pruning'; // admin_forum_prune.php
$lang['140_Prune_Overview'] = 'Prune Overview'; // admin_prune_overview.php
$lang['150_Topic_Shadow'] = 'Shadow Topics'; // admin_topic_shadow.php

// eXtreme Styles
$lang['1300_Extreme_Styles'] = 'Styles &amp; Templates'; // xs_include.php -> $module_name

// DB Maintenance & Security
$lang['1400_DB_Maintenance'] = 'DB And Security'; // admin_bb_db.php, admin_db_generator.php, admin_db_maintenance.php, admin_db_utilities.php, admin_logs.php
$lang['100_Actions_LOG'] = 'Actions Log'; // admin_logs.php
$lang['110_DB_Admin'] = 'IP MySQLAdmin'; // admin_bb_db.php
$lang['120_Backup_DB'] = 'DB Backup'; // admin_db_utilities.php, admin_db_backup
$lang['130_Restore_DB'] = 'DB Restore'; // admin_db_utilities.php, admin_db_backup
$lang['135_Restore_DB'] = 'DB Restore From File'; // admin_db_utilities.php
$lang['140_Optimize_DB'] = 'Optimize Database'; // admin_db_utilities.php
$lang['150_DB_Maintenance'] = 'Database Maintenance'; // admin_db_maintenance.php
$lang['170_db_update_generator'] = 'DB Update Generator'; // admin_db_generator.php
$lang['180_msqd'] = 'MySQLDumper'; // admin_msqd.php

// IM Portal
$lang['1500_IM_Portal'] = 'Portal'; // admin_blocks.php, admin_blocks_pos.php, admin_blocks_var.php, admin_clear_cache.php, admin_layout.php, admin_portal.php
$lang['100_Portal_Configuration'] = 'Portal Configuration'; // admin_portal.php
$lang['110_Page_Management'] = 'Page Management'; // admin_layout.php
$lang['115_Page_Management'] = 'Custom Page Management'; // admin_layout_cp.php
$lang['120_Blocks_Management'] = 'Block Management'; // admin_blocks.php
$lang['130_Blocks_Position_Tag'] = 'Block Position Tag'; // admin_blocks_pos.php
$lang['140_Blocks_Variables'] = 'Block Variables'; // admin_blocks_var.php
$lang['150_Delete_Cache_Files'] = 'Delete Cache Files'; // admin_clear_cache.php

// News
$lang['1600_News_Admin'] = 'News'; // admin_news.php, admin_news_cats.php, admin_xs_news.php, admin_xs_news_xml.php
$lang['100_News_Config'] = 'News Configuration'; // admin_news.php
$lang['110_News_Cats'] = 'News Categories'; // admin_news_cats.php
$lang['120_XS_News_Config'] = 'News Ticker Configuration'; // admin_xs_news.php
$lang['130_XS_News'] = 'News Ticker Articles'; // admin_xs_news.php
$lang['140_XS_News_Tickers'] = 'News Ticker'; // admin_xs_news_xml.php

// Users
$lang['1610_Users'] = 'Users'; // admin_account.php, admin_disallow.php, admin_email_list.php, admin_jr_admin.php, admin_postcount.php, admin_priv_msgs.php, admin_profile_fields.php, admin_ranks.php, admin_ug_auth.php, admin_user_ban.php, admin_user_bantron.php, admin_user_register.php, admin_user_search.php, admin_userlist.php, admin_users.php, admin_voting.php
$lang['100_Jr_Admin'] = 'Junior Admin'; // admin_jr_admin.php
$lang['110_Manage'] = 'Manage'; // admin_users.php
$lang['113_Permissions_Users'] = 'Permissions'; // admin_ug_auth.php
$lang['116_CMS_Permissions_Users'] = 'CMS Permissions'; // admin_cms_auth.php
$lang['120_Ranks'] = 'Ranks'; // admin_ranks.php
$lang['130_Userlist'] = 'Userlist'; // admin_userlist.php
$lang['140_Email_List'] = 'Email List'; // admin_email_list.php
$lang['150_Private_Messages'] = 'Private Messages'; // admin_priv_msgs.php
$lang['160_Account_active'] = 'Active Accounts'; // admin_account.php
$lang['170_Account_inactive'] = 'Inactive Accounts'; // admin_account.php
$lang['180_Add_New_User'] = 'Add New User'; // admin_user_register.php
$lang['190_Prune_users'] = 'Prune Users'; // admin_prune_users.php
$lang['200_Disallow'] = 'Disallow Usernames'; // admin_disallow.php
$lang['210_Ban_Management'] = 'Ban Users'; // admin_user_ban.php
$lang['220_Bantron'] = 'Bantron'; // admin_user_bantron.php
$lang['250_Postcount_Config'] = 'Edit Postcounts'; // admin_postcount.php
$lang['260_CPF_Add'] = 'Add Custom Profile Fields'; // admin_profile_fields.php
$lang['270_CPF_Edit'] = 'Edit Custom Profile Fields'; // admin_profile_fields.php
$lang['280_User_Search'] = 'Extended User Search'; // admin_user_search.php
$lang['290_Poll_Results'] = 'Poll Results'; // admin_voting.php
$lang['300_Picscount_Config'] = 'Sync Pics Count'; // admin_postcount.php

// Groups
$lang['1620_Groups'] = 'Groups'; // admin_color_groups.php, admin_groups.php, admin_ug_auth.php
$lang['110_Manage_Groups'] = 'Manage Groups'; // admin_groups.php
$lang['120_Color_Groups'] = 'Colour Groups'; // admin_color_groups.php
$lang['130_Permissions_Group'] = 'Permissions'; // admin_ug_auth.php

// Topic Rating
$lang['1700_Topic_Rating'] = 'Topic Rating'; // admin_rate.php

// Knowledge Base
$lang['1800_KB_title'] = 'Knowledge Base'; // admin_kb_art.php, admin_kb_auth.php, admin_kb_cat.php, admin_kb_config.php, admin_kb_custom.php, admin_kb_rebuild_search.php, admin_kb_types.php
$lang['100_KB_Configuration'] = 'Configuration'; // admin_kb_config.php
$lang['110_Art_man'] = 'Article Management'; // admin_kb_art.php
$lang['120_Cat_man'] = 'Categories Management'; // admin_kb_cat.php
$lang['130_Types_man'] = 'Article Types'; // admin_kb_types.php
$lang['140_Custom_Field'] = 'Custom Fields'; // admin_kb_custom.php
$lang['150_Permissions'] = 'Permissions'; // admin_kb_auth.php
$lang['160_Optimize_tables'] = 'Optimize Tables'; // admin_kb_rebuild_search.php

// Attachments
$lang['1900_Attachments'] = 'Attachments'; // admin_attach_cp.php, admin_attachments.php, admin_extensions.php
$lang['100_Control_Panel'] = 'Control Panel'; // admin_attach_cp.php
$lang['110_Att_Manage'] = 'Management'; // admin_attachments.php
$lang['120_Quota_limits'] = 'Quota Limits'; // admin_attachments.php
$lang['130_Shadow_attachments'] = 'Shadow Attachments'; // admin_attachments.php
$lang['140_Sync_attachments'] = 'Synchronize Attachments'; // admin_attachments.php
$lang['150_Extension_control'] = 'Extension Control'; // admin_extensions.php
$lang['160_Extension_group_manage'] = 'Manage Extension Groups'; // admin_extensions.php
$lang['170_Forbidden_extensions'] = 'Forbidden Extensions'; // admin_extensions.php
$lang['180_Special_categories'] = 'Special Categories'; // admin_attachments.php

// Downloads
$lang['2000_Downloads'] = 'Downloads'; // admin_pa_catauth.php, admin_pa_category.php, admin_pa_custom.php, admin_pa_fchecker.php, admin_pa_file.php, admin_pa_license.php, admin_pa_settings.php
$lang['100_Settings'] = 'Configuration'; // admin_pa_settings.php
$lang['110_Cat_manage_title'] = 'Manage Categories'; // admin_pa_category.php
$lang['120_File_manage_title'] = 'Manage Files'; // admin_pa_file.php
$lang['130_Fchecker'] = 'File Checker'; // admin_pa_fchecker.php
$lang['140_Mfieldtitle'] = 'Custom Fields'; // admin_pa_custom.php
$lang['150_License_title'] = 'Manage Licenses'; // admin_pa_license.php
$lang['160_Permissions'] = 'Permissions'; // admin_pa_catauth.php

// Downloads
$lang['2050_Downloads'] = 'Downloads ADV'; // admin_pa_catauth.php, admin_pa_category.php, admin_pa_custom.php, admin_pa_fchecker.php, admin_pa_file.php, admin_pa_license.php, admin_pa_settings.php
$lang['100_DL_Settings'] = 'Configuration'; // admin_pa_settings.php

// Links
$lang['2100_Links'] = 'Links'; // admin_links.php, admin_links_cat.php, admin_links_config.php
$lang['100_Configuration'] = 'Configuration'; // admin_links_config.php
$lang['110_Category'] = 'Manage Categories'; // admin_links_cat.php
$lang['120_Add_new'] = 'Add Link'; // admin_links.php
$lang['130_Link_Manage'] = 'Manage Links'; // admin_links.php

// Album
$lang['2200_Photo_Album'] = 'Photo Album'; // admin_album_auth.php, admin_album_cat.php, admin_album_config_extended.php
$lang['110_Album_Config'] = 'Configuration'; // admin_album_config_extended.php
$lang['120_Album_Categories'] = 'Manage Categories'; // admin_album_cat.php
$lang['130_Album_Permissions'] = 'Permissions'; // admin_album_auth.php
$lang['140_Personal_Galleries'] = 'Personal Galleries'; // admin_album_personal.php

// FAQ
$lang['2300_FAQ'] = 'FAQ &amp; Rules'; // admin_faq_editor.php
$lang['110_FAQ_BBCode'] = 'BBCode FAQ'; // admin_faq_editor.php
$lang['120_FAQ_Board'] = 'Site FAQ'; // admin_faq_editor.php
$lang['130_FAQ_Rules'] = 'Site Rules'; // admin_faq_editor.php

// INFO
$lang['2400_INFO'] = 'Info'; // admin_logs.php, admin_phpinfo.php, admin_gd_info.php, admin_referrers.php, admin_google_bot_detector.php
$lang['110_Actions_LOG'] = 'Actions Log'; // admin_logs.php
$lang['120_PHP_INFO'] = 'PHP Info'; // admin_phpinfo.php
$lang['130_GD_Info'] = 'GD Info'; // admin_gd_info.php
$lang['140_HTTP_REF'] = 'HTTP Referrers'; // admin_referrers.php
$lang['150_Google_BOT'] = 'Google Bot Detector'; // admin_google_bot_detector.php

// ####################### [ ACP Navigation END ] #######################

?>