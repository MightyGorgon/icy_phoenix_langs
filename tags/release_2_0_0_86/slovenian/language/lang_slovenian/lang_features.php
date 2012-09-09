<?php
/**
*
* @package Intero
* @version $Id: lang_features.php 33 2011-03-08 22:02:266 
* @copyright (c) 2011
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/*
Example for categories
$lang['cat_YOUR_CAT_NAME'] = 'YOUR_CAT_DESCRIPTION';

Example for items
$lang['item_YOUR_ITEM_NAME'] = 'YOUR_ITEM_DESCRIPTION';
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
'FEATURES' => 'Funkcije',
	'PHPBB2' => 'phpBB2',
	'ICYPHOENIX' => 'Dragonfloty',
	'PHPBB3' => 'phpBB3',
	'PHPBB_FEATURES_PAGE' => 'Funkcije za phpBB so bile vzete iz uradne strani phpBB [ <a href="http://www.phpbb.com/about/features/">LINK</a> ]',

/*********/
	'cat_general' => 'Splošno',

	'item_license' => 'Lincenca',
	'bb2_license' => 'GPL',
	'ip_license' => 'GPL',
	'bb3_license' => 'GPL',

	'item_price' => 'Cena licence',
	'bb2_price' => 'Brezplacno',
	'ip_price' => 'Brezplacno',
	'bb3_price' => 'Brezplacno',

	'item_programming' => 'Programski Jezik',
	'bb2_programming' => 'PHP',
	'ip_programming' => 'PHP',
	'bb3_programming' => 'PHP',

	'item_latest' => 'Najnovejša Verzija',
	'bb2_latest' => '2.0.22',
	'ip_latest' => '1.3.0.53',
	'bb3_latest' => '3.0.2',

	'item_release' => 'Datum izdaje',
	'bb2_release' => '2011/04/16',
	'ip_release' => '2010/08/23',
	'bb3_release' => '2011/09/11',

/*********/
	'cat_basic_features' => 'Osnovne Funkcije',

	'item_utf8' => 'UTF-8 Podpora',
	'item_user_preferences' => 'Uporabniške nastavitve',
	'item_mod' => 'Moderatorji',
	'item_admin' => 'Administratorji',
	'item_search_engine' => 'Iskalnik pajek Obnašanje',
	'item_un_mess_track' => 'Sledenje neprebranih sporocil',
	'item_pms' => 'Sistem zasebnih sporocil',
	'item_stat' => 'Statistika',

/*********/
	'cat_security' => 'Varnost',

	'item_perm_ban' => 'Stalne prepovedi',
	'item_temp_ban' => 'Zacasne prepovedi (Suspension)',
	'item_permission' => 'Dovoljenja',
	'item_paid_sec' => 'Revizija placanih Varnostnih kod',
	'item_form_hand' => 'Oddaja obrazca',
	'item_t_a_p_h' => 'Ravnanje z zavednimi parametri ',
	'item_t_a_d_l' => 'Type Aware baza podatkov',
	'item_p_h' => 'Skrivanje gesel',

/*********/
	'cat_antispam' => 'Anti-Spam',

	'item_c_v_c' => 'CAPTCHA Vizualna potrditev',
	'item_f_c' => 'Kontrola poplav',
	'item_groups' => 'Skupine',
	'item_acls' => 'ACLs',
	'item_b_l' => 'Crna lista',
	'item_banning' => 'Prepovedi',
	'item_suspension' => 'Zacasne prepovedi',
	'item_warn' => 'Opozorila',
	'item_u_l' => 'Zapis uporabnikov',
	'item_u_p_ip_l' => 'Zapis IP uporabnikov, ki objavljajo',
	'item_r_p' => 'Prijava objav',
	'item_post_m' => 'Editiranje objav',

/*********/
	'cat_datamanagement' => 'Managment podatkov',

	'item_mysql' => 'MySQL',
	'item_mssql' => 'MSSQL Server',
	'item_mssql_odbc' => 'MSSQL ODBC',
	'item_postgre' => 'PostgreSQL',
	'item_ms_access' => 'MS Access',
	'item_oracle' => 'Oracle',
	'item_firebird' => 'Firebird',
	'item_sql_lite' => 'SQL_Lite',
	'item_db_back' => 'Varnostne kopije (DBMS) Baze podatkov',
	'item_db_restore' => 'Restoriranje (DBMS) Baze podatkov',
	'item_p_t_pruning' => 'Obrezovanje Objav/ tem',

/*********/
	'cat_registration' => 'Regsitracija',

	'item_coppa' => 'COPPA Registracija',
	'item_l_r_a' => 'Limit števila registracij',
	'item_username_lenght' => 'Nastavi min / max Dolino uporabniškega imena',
	'item_pass_lenght' => 'Nastavi min / max Dolžino gesla',
	'item_l_u_c' => 'Meja znakov uporabniškega imea',
	'item_s_p_c_r' => 'Nastavi zahteve za zahtevnost gesla',
	'item_f_p_c' => 'Prisili spremembo gesla',
	'item_e_mail_address_reusage' => 'Dovoli / Prepreci ponovno uporabo elektronskega naslova',

/*********/
	'cat_posting' => 'Objavljanje',

	'item_t_d_m' => 'Metoda prikaza tem',
	'bb2_t_d_m' => 'Ravno',
	'ip_t_d_m' => 'Ravno',
	'bb3_t_d_m' => 'Ravno',

	'item_bbcode' => 'BBKoda',
	'item_bbcode_custom' => 'BBCode gumbi po meri',
	'item_html_in_post' => 'HTML v objavah',
	'item_emoticon' => 'Smeškoti / Ikone custev',
	'item_quoting' => 'Citiranje',
	'item_q_m_p' => 'Citiranje vec objav',
	'item_f_t' => 'Preoblikovanje vrstice dodatkov',
	'item_w_c' => 'Word Censors',
	'item_s_h' => 'Skladno oznacevanje',
	'item_attachments' => 'Priponke',
	'item_p_d' => 'Osnutki objav',
	'item_polls' => 'Ankete',
	'item_m_p_o_v' => 'Vecizbirno glasovanje na anketah',
	'item_u_b_p_t' => 'Sledenje ankete za uporabnike',
	'item_all_dis_v_c' => 'Dovoli / Ne dovoli menjavo glasova',
	'item_beaten_p_review' => 'Beaten-to-Posting Predogled',
	'item_p_p' => 'Predogled objav',
	'item_flood_control' => 'Kontrola poplav',

/*********/
	'cat_attachments' => 'Priponke',

	'item_a_i_t' => 'Avtomatski prikaz slicic',
	'item_a_t' => 'vrste priponk',
	'item_m_a' => 'Vec priponk',
	'item_a_p' => 'Postavitev priponke',

/*********/
	'cat_caching' => 'Vsebina v predpomnilniku',

	'item_db_q_c' => 'Database Query shranjevanje v predpomnilnik',
	'item_t_c' => 'Shranjevanje template v predpomnilnik ',
	'item_a_d' => 'Arbitrary Podatki',
	'item_m_c_r' => 'Rocno osveževanje predpomnilnika',

/*********/
	'cat_profile' => 'Profil / Seznam clanov',

	'item_c_p_f' => 'Polja profila po meri',
	'item_u_p_s' => 'Statistika objav uporabnika',
	'item_u_i_m' => 'Uporabnikovi Instant Messengerji',
	'item_u_p_d' => 'Profilni detajli uporabnika',
	'item_m_list_search' => 'Iskanje po seznamu clanov',
	'item_u_m_v' => 'Prepreci ne-registriranim uporabnikom ogled seznama clanov',

/*********/
	'cat_search_system' => 'Sistem iskanja',

	'item_ft_n' => 'Fulltext Native',
	'item_c_t_s' => 'Kostumizirano iskanje tem',
	'item_c_f_s' => 'Kostumizirao iskanje po forumu',
	'item_my_sql_text' => 'MySQL fulltext',
	'item_a_s' => 'Iskanje po avtorju',
	'item_a_search' => 'Napredno iskanje',
	'item_v_a_post' => 'Prikaz neprebranih objav',
	'item_a_n_t' => 'Aktivne / Nove teme',
	'item_p_s_l_v' => 'Objave od mojega zadnjega obiska naprej',
	'item_s_f_l' => 'Iskanje kontrole poplav',

/*********/
	'cat_forums' => 'Forumi',

	'item_categories' => 'Kategorije',
	'item_p_p_f' => 'Forumi zašciteni z geslom',
	'item_f_s_s' => 'Forum z specificnim stilom',
	'item_url_l_r_f' => 'Forumi z URL preusmeritvijo linkov',
	'item_f_rules' => 'Pravila foruma',
	'item_subforum' => 'Podforumi',
	'item_last_post' => 'Zadnja objava',
	'item_forum_pruning' => 'Obrazovanje foruma',
	'item_d_a_t' => 'Prikaži aktivne teme',
	'item_s_t_forums' => 'Naroci se na forume',
	'item_s_t_topics' => 'Naroci se na teme',
	'item_b_t' => 'Zaznamuj teme',
	'item_t_s' => 'Sortiranje tem',
	'item_p_s' => 'Sortiranje objav',
	'item_t_p_t' => 'Sledenje tem v katerih sodelujem',
	'item_print_t' => 'Natisni teme',
	'item_e_mail_t' => 'Pošlji teme na elektronski naslov',

/*********/
	'cat_ucp' => 'Nadzorna plošca uporabnika',

	'item_u_s' => 'Podpisi uporabnika',
	'item_u_a' => 'Avatar uporabnika',
	'item_u_ranks' => 'Uvrstitev uporabnika',
	'item_u_o_l' => 'Seznam online uporabnikov',
	'item_user_p' => 'Preference uporabnika',
	'item_u_p_s' => 'Nastavite uporabnikovega profila',
	'item_m_s_pm_post_d' => 'Uredi shranjena ZS  / Osnutke objav',
	'item_m_book' => 'Uredi zaznamke',
	'item_m_attach' => 'Uredi priponke',
	'item_m_s_t' => 'Uredi sledece teme',
	'item_c_p_f' => 'Polja profila po meri',
	'item_friend_foe_list' => 'Seznam prijateljev / Sovražnikov',

/*********/
	'cat_priv_messaging' => 'Zasebna sporocila',

	'item_add_pm_folder' => 'Dodatna ZS mapa',
	'item_custom_pm_filter' => 'Prilagodljiv Filter pravil za ZS',
	'item_send_multiple_reci' => 'Pošlji vecim prejemnikom',
	'item_send_blind_carbon' => 'Pošlji slepe carbon kopije',
	'item_send_to_group' => 'Pošlji skupinam',
	'item_f_message' => 'Posreduj sporocila',
	'item_a_book' => 'Seznam naslovov',
	'item_message_d' => 'Osnutki sporocil',
	'item_exp_mess' => 'Izvozi sporocila',
	'item_attach_message' => 'Priponke sporocil',
	'item_convers_view' => 'Pregled pogovorov',
	'item_c_m_h_r' => 'Prilagodljiva pravila Prejemanja sporocil',

/*********/
	'cat_usergroups' => 'Skupine uporabnikov',

	'item_g_t' => 'Vrste skupin',
	'item_ucp_group_manage' => 'Urejevalec UCP skupin',
	'item_ucp_group_manage_membership' => 'Clanstvo skupine urejevalcev UCP',
	'item_m_g_l' => 'Vec voditeljev skupin',
	'item_c_g_c' => 'Barve skupin po meri',
	'item_group_ranks' => 'Ocena skupine',
	'item_group_avatar' => 'Avatar skupine',
	'item_group_based_memberlist' => 'Prikaz clanov skupine',

/*********/
	'cat_mcp' => 'Nadzorna plošca moderatorjev',

	'item_global_moder' => 'Globalni moderatorji',
	'item_forum_moder' => 'Moderatorji foruma',
	'item_t_post_m_q' => 'Teme / Objave , ki cakajo na odobrenje moderatorjev',
	'item_m_r_t_p' => 'Urejaj prijavljene Teme / Objave',
	'item_t_h' => 'Zgodovina objav',
	'item_f_t_logs' => 'Zapis Forumov / Tem ',
	'item_l_m_l' => 'Lokaliziran zapis moderatorjev',
	'item_p_e' => 'Editiranje objave',
	'item_p_l' => 'Zaklepanje objave',
	'item_post_details' => 'Detajli objave',
	'item_c_p_author' => 'Zamenjaj avtorja objave',
	'item_quick_mod_tools' => 'Quick_Mod Orodja',
	'item_moving_t' => 'Premikanje tem',
	'item_m_m_t' => 'Premik vecih tem',
	'item_merging_t' => 'Združevanje tem',
	'item_merging_p' => 'Združevanje objav',
	'item_merging_multiple_t' => 'Loci teme',
	'item_locking_t' => 'Zaklepanje tem',
	'item_deleting_t' => 'Brisanje tem',
	'item_copying_t' => 'Kopiranje tem',
	'item_global_topics' => 'Globalne teme',
	'item_announcement_t' => 'Teme najavljanja',
	'item_s_topics' => 'Aktualne teme',
	'item_mange_bans' => 'Urejanje banov',
	'item_m_u_w' => 'Urejaj opozorila uporabnikov',
	'item_banning_by_username' => 'Bannanje po Uporabniških imenih',
	'item_banning_by_email' => 'Bannanje po elektronskih naslovih',
	'item_banning_by_ip' => 'Bannanje po IP naslovih',
	'item_user_notes' => 'Zapiski uporabnika',

/*********/
	'cat_acp' => 'Nadzorna plošca administratorja',

	'item_f_s_b_c' => 'Status Ustanovitelja / Glavnega ustanovitelja',
	'item_l_s' => 'Nalaganje nastavitev',
	'item_p_i_u' => 'Odstarnjevanje neaktivnih clanov',
	'item_m_r' => 'Urejaj ranke',
	'item_m_groups' => 'Urejaj skupine',
	'item_m_group_membership' => 'Urejaj clanstvo skupin',
	'item_manage_attach_setting' => 'Urejaj priponke in nastavitve',
	'item_manage_user_attachment' => 'Urejaj uporabnikove priponke',
	'item_user_editing' => 'Editiranje uporanbikov',
	'item_list_group_index' => 'Pokaži skupine na indexu',
	'item_topic_icons' => 'Ikone tem',
	'item_mass_e_mail' => 'Masovna elektronska pisma',
	'item_manage_report_reasons' => 'Urejaj vzroke Prijave / Zanikanja',
	'item_module_manage' => 'Managment modula',
	'item_custom_bbcode' => 'BBCode po meri',
	'item_custom_profile_field' => 'Polja profila po meri',
	'item_custom_profile_field_placement' => 'Postavitev profilnih polj po meri',
	'item_custom_profile_data_types' => 'Vrste profilnih polj po meri',
	'item_manage_bans' => 'Urejanje banov',
	'item_ban_by_username' => 'Bannanje po Uporabniških imenih',
	'item_ban_by_email' => 'Bannanje po elektronskih naslovih',
	'item_ban_by_ip' => 'Bannanje po IP naslovih',

/*********/
	'cat_styles' => 'Stili',

	'item_s_style' => 'Stili na voljo',
	'item_install_style' => 'Namesti / Uredi stile po meri',
	'item_custom_style' => 'Kostumiziraj / Editiraj Template',
	'item_custom_themes' => 'Kostumiziraj / Editiraj Teme',
	'item_custom_imageset' => 'Kostumiziraj / Editiraj Komplet slik',

/*********/
	'cat_permission' => 'Dovoljenja',

	'item_g_b_g_p' => 'Group Based Global Dovoljenja',
	'item_g_b_m_p' => 'Group Based Dovoljenja Moderatorjev',
	'item_g_b_a_p' => 'Group Based Dovoljenja Administratorjev',
	'item_g_b_f_p' => 'Group Based Dovoljenja Foruma',
	'item_u_b_g_p' => 'Uporabnikova Based Global Dovoljenja',
	'item_u_b_m_p' => 'Uporabnikova Based Moderator Dovoljenja',
	'item_u_b_a_p' => 'Uporabnikova Based Administrator Dovoljenja',
	'item_u_b_f_p' => 'Uporabnikova Based Forum Dovoljenja',
	'item_admin_perm_roles' => 'Administratova vloga dovoljenj',
	'item_user_perm_roles' => 'Uporabnikova vloga dovoljenj',
	'item_mod_perm_roles' => 'Moderatororjeva vloga dovoljenj',
	'item_forum_perm_roles' => 'Forum vloga dovoljenj',
	'item_mask_perm_multi' => 'Multi-level Permission Masks',

/*********/
	'cat_notifications' => 'Obvestila',

	'item_e_mail_true' => 'Elektronska pošta',
	'item_instant_mess' => 'Instant Messaging',
	'item_book_m' => 'Zaznamki',

/*********/
	'cat_localisations' => 'Lokalizacija',

	'item_s_m_l_p' => 'Podpora za vec jezikovnih paketov',
	'item_language' => 'Jeziki',
	'bb2_language' => '50+',
	'ip_language' => '6',
	'bb3_language' => '61',
	'item_right_t_left' => 'Desno proti levi podpora',
	'item_l_p_w_edit' => 'Jezikovni paket za web-editor',

/*********/
	'cat_install' => 'Inštalacije / Posodobitve',

	'item_install_wizard' => 'Carovnik za inštalacije',
	'item_update_wizard' => 'Carovnik za posodobitve',
	'item_converter_wizard' => 'Carovnik za pretvorbo',
	'item_file_merge_diff_engine' => 'File Merge Diff Update Engine',

/*********/
	'cat_technical' => 'Tehnicne lastnosti',

	'item_cms_integra' => 'CMS integracija programske opreme',
	'item_xhtml_compliant' => 'XHTML Compliant',

/*********/
	'cat_plugins' => 'Dodatki',

	'item_auth_plug' => 'Auth Dodatki',
	'item_search_plug' => 'Dodatki za iskanje',
	'item_cache_plug' => 'Dodatki za predpomnilnik',
	'item_hooks_sys' => 'Hooks Sistem',
	'item_expand_module' => 'Razširljivi moduli',

/*********/
	'cat_features' => 'Dodatne funkcije',

	'item_feat_cms' => 'CMS',
	'item_feat_album' => 'Galerija slik',
	'item_feat_downloads' => 'Sistem za prenose',
	'item_feat_kb' => 'Baza podatkov',
	'item_feat_links' => 'Sistem linkov',
	'item_feat_news' => 'Kategorije novic',
	'item_feat_stats' => 'Modul statistike',
	'item_feat_contact_us' => 'Obrazec za kontakt',
	'item_feat_lofi' => 'LoFi Pogled',
	'item_feat_ajax_shoutbox' => 'AJAX Shoutbox',
	'item_feat_shoutbox' => 'Standardni Shoutbox',
	'item_feat_calendar' => 'Sistem za koledarje in dogodke',
	'item_feat_pm_notifications' => 'PM On New Registration And Birthday',

/*********/
	'cat_features_acp' => 'Dodatne funkcije ACP',

	'item_feat_info' => 'Informacije o serverju v ACP',
	'item_feat_db_mntnc' => 'Popravilo baze podatkov',
	'item_feat_mysqladmin' => 'MySQL Admin',
	'item_feat_editable_f_r' => 'Editiranje FAQ in pravila v vec jezikih',
	'item_feat_multiple_ranks' => 'Vec rankov',

/*********/
	'cat_features_ucp' => 'Ekstra funkcije UCP',

	'item_feat_ajax_checks' => 'AJAX pregled ob registraciji',
	'item_feat_upi2db' => 'Neprebrane objave v DB',
	'item_feat_custom_avatar' => 'Osebna slicica po meri',
	'item_feat_profile_stats' => 'Statistika profila in ekstra informacije uporabnika',
	'item_feat_user_self_deactivation' => 'Samodeaktivacija uproabnika',
	'item_feat_login_archive' => 'Zgodovina vpisov',

/*********/
	'cat_features_bbcodes' => 'Ekstra funkcije BBCodes',

	'item_feat_random_quotes' => 'Nakljucno citiranje',
	'item_feat_bbcodes' => 'Integirran BBCodes Box',
	'item_feat_acronyms' => 'Kratice',
	'item_feat_autolinks' => 'Autolinki',
	'item_feat_smiley_creator' => 'Ustvarjalec smeškov',

/*********/
	'cat_features_seo' => 'Ekstra funkcije SEO',

	'item_feat_url_rewrite' => 'SEO optimizacija in URL Prepis',
	'item_feat_rss' => 'RSS Feed',
	'item_feat_referrers' => 'Sledenje napotiteljev',
	'item_feat_referrers' => 'Sledenje bot-ov',
	'item_feat_referrers' => 'Zaznavanje OS in brskalnika',
	'item_feat_banners' => 'Managment podpisov in reklam',

/*********/
	'cat_features_forum' => 'Ekstra funkcije Forum and Posting',

	'item_feat_bin' => 'Smeti tem',
	'item_feat_forum_icons' => 'Ikone foruma',
	'item_feat_link_this_topic' => 'Link do teme',
	'item_feat_edit_notes' => 'Editiranje zapiskov',
	'item_feat_topic_prefixes' => 'Predpona teme',
	'item_feat_topic_description' => 'Opis teme',
	'item_feat_rating' => 'Ocena teme',
	'item_feat_thanks' => 'Zahvala teme',
	'item_feat_topic_views' => 'Ogledi teme',
	'item_feat_digests' => 'Vzorci teme',
	'item_feat_upload_images' => 'Nakaganje slike med objavljanjem',
	'item_feat_quick_reply' => 'Hiter odgovor',
	'item_feat_social_bookmars' => 'Socialni zaznamki',
	'item_feat_ftr' => 'Oznaki temo kot prebrano',
	'item_feat_detailed_notifications' => 'Podrobna obvestila z sporocili',

//	'item_feat_' => '',
	)
);

?>