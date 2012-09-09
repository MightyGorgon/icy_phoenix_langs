<?php
/**
*
* @package Intero
* @version $Id: lang_extend_icy_phoenix.php 43 2009-07-16 10:33:26Z TheSteffen $
* @copyright (c) 2008 Intero
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* TheSteffen, KugeLSichA, Tom, Carsten
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
	'10_Main_Settings_Icy_Phoenix' => 'Intero',
	'20_SQL_Charge' => 'SQL Optimierung',
	'30_Posting' => 'Beitr�ge und Mitteilungen',
	'40_IMG_Posting' => 'Bilder in Beitr�gen',
	'50_Hierarchy_setting' => 'Forum',
	'60_Calendar_settings' => 'Koledar',
	'70_SEO' => 'SEO',
	'80_Security' => 'Logs und Sicherheit',
	'90_Cron' => 'Cron',
	)
);

// admin part
if ($lang_extend_admin)
{
	$lang = array_merge($lang, array(
		'Lang_extend_icy_phoenix' => 'Intero',

// TAB - Intero
		'IP_enable_xs_version_check' => 'Aktiviere Intero Versions �berpr�fung',
		'IP_enable_xs_version_check_explain' => 'Bei Aktivierung dieser Option wird bei jedem ACP Besuch �berpr�ft ob eine neuere Intero Version zum Download verf�gbar ist. Die Deaktivierung dieser Option kann das Laden des ACPs etwas erh�hen. Wie auch immer, beachte das diese �berpr�fung nur einmal am Tag stattfindet und dann im Cache abgelegt wird.',

		'IP_disable_email_error' => 'Deaktiviere Fehlermeldungen beim E-Mail versenden',

		'IP_html_email' => 'HTML E-Mail',
		'IP_html_email_explain' => 'Bei Aktivierung dieser Option, werden HTML E-Mails aktiviert, andernfalls werden sie in reinem Text Format gesendet',

		'IP_enable_digests' => 'Aktiviere Digests',

		'IP_digests_php_cron' => 'Aktiviere Digest PHP Cron',
		'IP_digests_php_cron_explain' => 'Diese Eigenschaft erm�glicht einer PHP-Emulation des CRON, dieses versucht die E-Mails einmal pro Stunde zu senden. Da es auf einer PHP-Emulation basiert, kann es m�glicherweise nicht jedesmal richtig durchgef�hrt werden. Dies hei�t, dass manchmal E-Mails m�glicherweise nicht gesendet werden k�nnen. Wenn du CRON auf deinem Server erm�glichen kannst, dann verwende diese M�glichkeit stattdessen. Please note that you need also to enable <b>PHP Cron [Global Switch]</b> in <b>Configuration &raquo; Intero &raquo; Cron</b>',

		'IP_emails_only_to_admins' => 'E-Mails nur zu Admins',
		'IP_emails_only_to_admins_explain' => 'Erlaube dem E-Mail System nur E-Mails an Admins zu senden',

		'IP_ajax_features' => 'Aktiviere AJAX Funktionen',
		'IP_ajax_features_explain' => 'Einige AJAX Funktionen in die Seite integrieren',

		'IP_ajax_checks_register' => 'AJAX �berpr�fung w�hrend der Registrierung',
		'IP_ajax_checks_register_explain' => 'Bei Aktivierung dieser Option, werden einige Echtzeit�berpr�fungen ausgef�hrt, wenn einige Felder auf der Registrierungs-Seite ausgef�llt werden (Achtung: Diese Option kann die Registrierungs-Seite etwas verlangsamen).',

		'IP_inactive_users_memberlists' => 'Inaktive Benutzer in der Mitgliederliste und Geburtstags\' Block',
		'IP_inactive_users_memberlists_explain' => 'Bei Aktivierung dieser Option, werden inaktive Benutzer in der Mitgliederliste und Geburtstags\' Block angezeigt.',

		'IP_page_gen' => 'Zeige Seiten Generierungs Zeit im Footer',

		'IP_switch_header_dropdown' => 'Aktiviere Dropdown Menu im Header',
		'IP_switch_header_dropdown_explain' => 'Dies aktiviert ein Dropdown Menu im Header f�r die Suche und f�r die Beitr�ge',

		'IP_show_alpha_bar' => 'Zeige alphabetische Sortierleiste in der Forum-Ansicht',
		'IP_show_alpha_bar_explain' => 'Diese Option zeigt in der Forum-Ansicht (viewforum.php) eine Leiste, um die Themen alphabetisch sortieren lassen zu k�nnen.',

		'IP_show_rss_forum_icon' => 'Forum Index Icons',
		'IP_show_rss_forum_icon_explain' => 'Diese Option zeigt Icons rechts von jedem Forumtitel an (im Forum Index): RSS, New Topic...',

		'IP_allow_mods_view_self' => 'Erlaube allen Moderatoren die SELF AUTH Themen anzuzeigen',
		'IP_allow_mods_view_self_explain' => 'Wenn ein Forum auf SELF AUTH Zugriff gesetzt wurde, k�nnen nur Administratoren und Moderatoren die entsprechenden Foren betreten. However there are many features that may show contents of these kind of posts even if not authed: Recent Topics, Search, Recent Messages Blocks, Random Topics Blocks, etc. To prevent this, an extra feature has been coded which doesn\'t allow not authed people to access these topics via secondary ways. Anyway you can allow ALL moderators (not only admins) to view these messages through these secondary ways. If you set this to YES then ALL moderators will be allowed to see the content of these messages through: Recent, Search, Topics related blocks... Unfortunately if you switch this OFF then neither AUTHED moderators may access SELF AUTHED topics through secondary ways. The feature has been coded in this way to save extra SQL charge. If you don\'t use SELF AUTHED forums, then you don\'t need this function as well.',

		'IP_xmas_fx' => 'Weihnachts Schnee',
		'IP_xmas_fx_explain' => 'Diese Option aktiviert den Schneefall Effekt.',

		'IP_xmas_gfx' => 'Weihnachts Grafiken',
		'IP_xmas_gfx_explain' => 'Bei Aktivierung dieser Option werden Weihnachtsgrafiken angezeigt.',

		'IP_select_theme' => 'Style Wechsel',
		'IP_select_theme_explain' => 'Bei Aktivierung dieser Option, wird eine Auswahl Box zum schnellen wechseln aller verf�gbaren Styles angezeigt.',

		'IP_select_lang' => 'Sprach Wechsel',
		'IP_select_lang_explain' => 'Bei Aktivierung dieser Option, wird eine Auswahl Box zum schnellen wechseln aller verf�gbaren Sprachen angezeigt.',

		'IP_cms_dock' => 'Zeige Apple Style Dock in CMS',

		'IP_cms_style' => 'CMS in einem moderneren Style anzeigen',
		'IP_cms_style_explain' => 'Der Moderne Style f�r das CMS beinhaltet ein neues Layout und eine transparente Navigation die �ber der CMS Verwaltung angebracht ist, hingegen hat der klassische Style ein seitlich angebrachtes Men�.',

		'IP_split_ga_ann_sticky' => 'Spaltet Themen nach Typ auf',
		'IP_split_ga_ann_sticky_explain' => 'Hier kannst du eine Variante ausw�hlen um Themen in der Forum-Ansicht (viewforum.php) entsprechend aufzuteilen',
		'IP_split_topic_0' => 'Alle Themen Typen zusammen (kein Split)',
		'IP_split_topic_1' => 'Globale Ank�ndigungen, Ank�ndigungen und Wichtige Themen zusammen, Normale Themen werden abgetrennt',
		'IP_split_topic_2' => 'Globale Ank�ndigungen werden abgetrennt, Ank�ndigungen und Wichtige Themen sind zusammen, Normale Themen abgetrennt',
		'IP_split_topic_3' => 'Alle Themen Typen werden abgetrennt dargestellt',

// TAB - SQL Charge
		'IP_fast_n_furious' => 'Fast And Furious',
		'IP_fast_n_furious_explain' => 'Bei Aktivierung dieser Option, werden einige gro�e SQL Funktionen abgeschaltet in der Hoffnung das deine Seite dadurch schneller wird!',

		/*
		'IP_db_cron' => 'Datenbank Optimierung',
		'IP_db_cron_explain' => 'Bei Aktivierung dieser Option, wird die Datenbank Optimierung aktiviert',
		*/

		'IP_site_history' => 'Seiten Historie',
		'IP_site_history_explain' => 'Bei Aktivierung dieser Option, wird die Seiten Historie aktiviert',

		'IP_global_disable_upi2db' => 'Deaktiviere UPI2DB komplett',
		'IP_global_disable_upi2db_explain' => 'Mit dieser Option kannst du UPI2DB vollst�ndig abschalten, dadurch sparst du extra Speicherplatz.',

		'IP_enable_own_icons' => 'Themen-Icon eigener Nachrichten',
		'IP_enable_own_icons_explain' => 'Aktiviere diese Option und es wird ein anderes Icon f�r Themen, die eigene Nachrichten enthalten, angezeigt.',

		'IP_show_forums_online_users' => 'Zeige Online Benutzer im jeweiligen Forum',
		'IP_show_forums_online_users_explain' => 'Dies aktiviert die Online Benutzer Anzeige f�r jedes Forum im Index',

		'IP_google_bot_detector' => 'Aktiviere GoogleBot Erkennung',

		'IP_gsearch_guests' => 'Zwingt G�ste zur Google Suche',

		'IP_visit_counter_switch' => 'Aktiviere Besucher Z�hler',

		'IP_enable_new_messages_number' => 'Zeige die Anzahl der neuen Nachrichten seit dem letzten Besuch',

		'IP_disable_thanks_topics' => 'Deaktiviere Bedanken Button (komplett)',

		'IP_show_thanks_profile' => 'Zeigt "Danke erhalten" beim Anschauen eines Profils an',

        'IP_show_thanks_viewtopic' => 'Zeigt "Danke erhalten" beim Lesen von Themen an',

        'IP_show_thanks_given_profile' => 'Zeigt "Danke gesagt" beim Anschauen eines Profils an',

        'IP_show_thanks_given_viewtopic' => 'Zeigt "Danke gesagt" beim Lesen von Themen an',

		'IP_disable_topic_view' => '"Thema angesehen von" (komplett) deaktivieren',
		'IP_disable_topic_view_explain' => 'Diese Option deaktiviert die "Thema angesehen von"-Funktion (dies reduziert SQL-Platz).',

		'IP_disable_referrers' => 'Referer deaktivieren',
		'IP_disable_referrers_explain' => 'Diese Option deaktiviert die Referer Funktion (dies reduziert SQL-Platz).',

		'IP_disable_logins' => 'Deaktiviere Login Aufzeichnungen',
		'IP_disable_logins_explain' => 'Bei Aktivierung dieser Option, werden die Logins der Benutzer nicht mehr aufgezeichnet',

		'IP_last_logins_n' => 'Anzahl der aufzuzeichnenden Logins',

		'IP_index_top_posters' => 'Top Poster :: Forum Index',
		'IP_index_top_posters_explain' => 'Bei Aktivierung dieser Option werden alle Top Poster im <b>Forum Index</b> angezeigt.',

		'IP_index_last_msgs' => 'Letzte Nachrichten :: Forum Index',
		'IP_index_last_msgs_explain' => 'Bei Aktivierung dieser Option, werden die letzten Nachrichten im <b>Forum Index</b> angezeigt.',

		'IP_online_last_msgs' => 'Letzte Nachrichten :: Wer ist online',
		'IP_online_last_msgs_explain' => 'Bei Aktivierung dieser Option, werden die letzten Nachrichten im <b>Wer ist online</b> angezeigt.',

		'IP_last_msgs_n' => 'Anzahl der letzten Nachrichten die angezeigt werden sollen.',

		'IP_last_msgs_x' => 'auszuschlie�ende Foren',
		'IP_last_msgs_x_explain' => 'Bitte, trage hier die IDs der Foren ein die in der Letzte Nachrichten Box ausgeschlossen werden sollen (Du kannst jede Foren ID mit Komma trennen).',

		'IP_show_chat_online' => 'AJAX Chat Online :: Forum Index',
		'IP_show_chat_online_explain' => 'Aktiviere diese Option um im <b>Forum Index</b> die online Benutzer anzuzeigen, die im AJAX Chat sind.',

		'IP_index_shoutbox' => 'Shoutbox :: Forum Index',
		'IP_index_shoutbox_explain' => 'Bei Aktivierung dieser Option, wird die Shoutbox im <b>Forum Index</b> angezeigt.',

		'IP_online_shoutbox' => 'Shoutbox :: Wer ist online',
		'IP_online_shoutbox_explain' => 'Bei Aktivierung dieser Option, wird die Shoutbox im <b>Wer ist online</b> angezeigt.',

		'IP_img_shoutbox' => 'Deaktiviere [img][/img] BBCode in der Shoutbox',
		'IP_img_shoutbox_explain' => 'Bei Aktivierung dieser Option, wird der [img][/img] BBCode in der Shoutbox deaktiviert.',

		'IP_index_links' => 'Links :: Forum Index',
		'IP_index_links_explain' => 'Bei Aktivierung dieser Option, werden Links im <b>Forum Index</b> aktiviert.',

		'IP_index_birthday' => 'Birthday :: Forum Index',
		'IP_index_birthday_explain' => 'Bei Aktivierung dieser Option, werden die Geburtstage im <b>Forum Index</b> aktiviert.',

		'IP_show_random_quote' => 'Zufallszitat :: Forum Index',
		'IP_show_random_quote_explain' => 'Bei Aktivierung dieser Option, werden die Zufallszitate im <b>Forum Index</b> angezeigt.',

// TAB - Posting
		'IP_posts_precompiled' => 'Deaktiviere precompiled Beitr�ge',
		'IP_posts_precompiled_explain' => 'Bei Aktivierung dieser Option, kompiliert die viewtopic.php den Beitrags Text, ohne den precompiled Text zu verwenden (dies ist langsamer, aber kann in manchen F�llen n�tzlich sein).',

		'IP_read_only_forum' => 'Deaktiviere das Schreiben in allen Foren (NUR LESEN Modus)',
		'IP_read_only_forum_explain' => 'This options allows to lock posting in all forums without having to change permissions. This may be useful for limited periods of time when admins would like to disallow users posting without having to lock the site or change all forum authorizations. Admins will still be able to post.',

		'IP_allow_drafts' => 'Erlaube Entw�rfe',
		'IP_allow_drafts_explain' => 'Erlaubt den Benutzern ihre Beitr�ge als Entw�rfe zu speichern',

		'IP_allow_mods_edit_admin_posts' => 'Erlaube Moderatoren die Bearbeitung von Administrator Beitr�gen',
		'IP_allow_mods_edit_admin_posts_explain' => 'Erlaubt Moderatoren die Beitr�ge von Administratoren zu bearbeiten',

		'IP_force_large_caps_mods' => 'Themen-Betreff anpassen',
		'IP_force_large_caps_mods_explain' => 'Der Betreff jedes Themas wird angepa�t, indem der erste Buchstabe jedes Wortes gro� geschrieben wird. (au�er f�r Admins)',

		'IP_show_new_reply_posting' => 'Vor neuen Antworten-Warn-System',
		'IP_show_new_reply_posting_explain' => 'Wenn du diese Option aktivierst, wird eine Warnung angezeigt, wenn beim Schreiben einer Antwort zwischenzeitlich ein neuer Eintrag gemacht wurde.',

		'IP_no_bump' => 'Verbiete doppelte Beitr�ge innerhalb von 24 Stunden',
		'IP_no_bump_explain' => 'Bei Aktivierung dieser Option, ist der letzte Poster in einem Thema nicht mehr in der Lage innerhalb von 24 Stunden eine Antwort auf seinen Beitrag zu verfassen. Es sei denn ein anderer Benutzer hat bereits auf seinen Beitrag geantwortet.',
		'MODS_ALLOWED' => 'Moderatoren k�nnen schreiben',

		'IP_show_topic_description' => 'Aktiviere Beschreibung f�r Themen',
		'IP_show_topic_description_explain' => 'Bei Aktivierung dieser Option wird die Themen-Beschreibung beim Schreiben eines neuen Themas und in der Forenansicht angezeigt.',

		'IP_edit_notes' => 'Aktiviere Bearbeitungs Anmerkungen',
		'IP_edit_notes_explain' => 'Bei Aktivierung dieser Option, werden die Bearbeitungs Anmerkungen aktiviert',

		'IP_edit_notes_n' => 'maximale Bearbeitungs Anmerkungen',

		'IP_always_show_edit_by' => 'Zeige in Eintr�gen editiert von',
		'IP_always_show_edit_by_explain' => 'Wenn du diese Option aktivierst, wird in Eintr�gen  "Zuletzt editiert von..." in ge�nderten Nachrichten angezeigt. �nderungen von Admins werden weiterhin nicht angezeigt.',

		'IP_show_social_bookmarks' => '�ffentliche Lesezeichen',
		'IP_show_social_bookmarks_explain' => 'Zeige �ffentliche Lesezeichen bei den Themen',

		'IP_link_this_topic' => 'Verlinke dieses Thema',
		'IP_link_this_topic_explain' => 'Zeigt die "Verlinke dieses Thema" Box beim Lesen eines Themas.',

		'IP_smilies_topic_title' => 'Smilies f�r Themen Titel und Beschreibung',
		'IP_smilies_topic_title_explain' => 'Bei Aktivierung dieser Option, werden Smilies f�r Themen Titel und Themen Beschreibung aktiviert',

		'IP_enable_colorpicker' => 'Aktiviere Farbauswahl bei Eintr�gen',

		'IP_quote_iterations' => 'Anzahl verschachtelter Zitate',

		'IP_disable_ftr' => 'Komplette Deaktivierung des Force Topic Read',
		'IP_disable_ftr_explain' => 'Bei Aktivierung dieser Option, wird der Force Topic Read komplett abgeschaltet',

		'IP_disable_html_guests' => 'Deaktiviere HTML Links f�r G�ste',

		'IP_birthday_viewtopic' => 'Zeige Poster\'s Alter in Themen',

		'IP_switch_poster_info_topic' => 'Zeige Poster\'s Info in Themen (Sprache, Style, etc.)',

		'IP_enable_quick_quote' => 'Aktiviere Schnellzitat',
		'IP_enable_quick_quote_explain' => 'Das Schnellzitat erlaubt den Benutzern mittels eines Klicks einen Beitrag zu zitieren. Diese Funktion verwendet Javascript. Die Aktivierung kann lange Beitr�ge zur Folge haben, wenn viele Beitr�ge mit langen Texten in den Themen vorhanden sind.',

		'IP_allow_all_bbcode' => 'Aktiviere alle BBCodes',
		'IP_allow_all_bbcode_explain' => 'Bei Aktivierung dieser Option, werden alle BBCodes in der Signatur und anderen Teilen aktiviert, wo sie noch nicht aktiviert sind.',

		'IP_switch_bbcb_active_content' => 'Erlaube BBCode f�r aktive Inhalte in Beitr�gen',
		'IP_switch_bbcb_active_content_explain' => 'Aktiviert BBCode f�r Flash, Video, Audio Streams, RealMedia und Quicktime.',

// TAB - Images In Posts
		'IP_auth_view_pic_upload' => 'Dovoljenje za nalaganje slik (Objavi BB Slike)',

		'IP_enable_postimage_org' => 'Omogoci gumb ObjaviSliko v obrazcu za objave',

		'IP_gd_version' => 'GD Verzija:',
		'GD_0' => 'Brez GD',
		'GD_1' => 'GD1',
		'GD_2' => 'GD2',

		'IP_show_img_no_gd' => 'Prika�i GIF slicice brez uporabe GD knji�nice (polna velikost slike se nalo�i potem pa poka�i povecavo).',

		'IP_thumbnail_posts' => 'Slicice v objavah',
		'IP_thumbnail_posts_explain' => 'Z to opcijo bo slicica prikazana namesto polne velikosti kadar bo slika objavljena z uporabo BBkode',

		'IP_show_pic_size_on_thumb' => 'Prika�i velikost slike v slicici',

		'IP_thumbnail_highslide' => 'Omogoci polni prikaz ce so slicice omogocene',
		'IP_thumbnail_highslide_explain' => 'Odpre sliko pred trenutno stranjo namesto v novem oknu. Vec o tem <a href="http://www.highslide.com/" target="_blank">HighSlide JS...</a><br />Prepricajte se da ste izpraznili vnaprej pripravljene objave po spremembi nastavitev!',

		'IP_thumbnail_lightbox' => 'Use Lightbox JavaScript if thumbnails are enabled',
		'IP_thumbnail_lightbox_explain' => 'Opens the image in front of the current page instead of opening it in a new window. More about <a href="http://www.huddletogether.com/projects/lightbox/" target="_blank">Lightbox JS...</a><br />Make sure you empty the precompiled posts after changing this setting!<br />If you have enabled HighSlide, then this setting will be ignored.',

		'IP_thumbnail_cache' => 'Predpomnilnik slicic',

		'IP_thumbnail_quality' => 'Kvaliteta slicic (1-100)',

		'IP_thumbnail_size' => 'Velikost slicic (in pixels)',

// TAB - Forum
		'Lang_extend_categories_hierarchy' => 'Hierarhija Kategorij',

		'Category_attachment' => 'Pripeto h',
		'Category_desc' => 'Opis',
		'Category_config_error_fixed' => 'Napaka v nastavitvah kategorij je bila popravljena',
		'Attach_forum_wrong' => 'Ne morete pripeti foruma na forum',
		'Attach_root_wrong' => 'Ne morete pripeti foruma na index foruma',
		'Forum_name_missing' => 'Ne morete ustvariti foruma brez imena',
		'Category_name_missing' => 'Ne morete ustvariti kategorije brez imena',
		'Only_forum_for_topics' => 'Teme so najdene samo v forumu',
		'Delete_forum_with_attachment_denied' => 'Ne morete izbrisati foruma ce imate sub-levele',

		'Category_delete' => 'Izbri�i kategorijo',
		'Category_delete_explain' => 'Obrazec spodaj vam bo dovolil izbris kategorije ter izbiro kam �elite dati vse forume in kategorije ki jih vsebuje',

// forum links type
		'Forum_link_url' => 'Povezava URL',
		'Forum_link_url_explain' => 'Nastavi URI server na Blog datoteko ali polni URL do zunanjega serverja ',
		'Forum_link_internal' => 'Blog datoteka',
		'Forum_link_internal_explain' => 'Izberite da, ce sklicujete program, ki stoji v imenikih direktorija',
		'Forum_link_hit_count' => '�tetje zadetkov',
		'Forum_link_hit_count_explain' => 'Izberite da, ce �elite da board �teje in poka�e �tevilo zadetkov z uporabo te povezave ',
		'Forum_link_with_attachment_deny' => 'Ne morete podati foruma kot povezave ce ima obstojece podkategorije',
		'Forum_link_with_topics_deny' => 'Ne morete podati foruma kot povezave ce ima obstojece teme',
		'Forum_attached_to_link_denied' => 'Ne morete pripeti foruma ali kategorije na povezavo foruma',

		'Manage_extend' => 'Vodstvo +',
		'No_subforums' => 'Brez pod-forumov',
		'Forum_type' => 'Izberite tip foruma ki ga �elite',
		'Presets' => 'Prednastavitve',
		'Refresh' => 'Osve�i',
		'Position_after' => 'Postavite ta forum po',
		'Link_missing' => 'Manjkajoca povezava',
		'Category_with_topics_deny' => 'Tema ostaja na tem forumu. Ne morete je spremeniti v kategorijo.',
		'Recursive_attachment' => 'Ne morete pripeti foruma na najni�je levele njegove veje',
		'Forum_with_attachment_denied' => 'Ne morete spremeniti kategorije ki imajo pripete forume v forume',
		'icon' => 'Ikona',
		'icon_explain' => 'Ta ikona bo prikazana pred naslovom foruma. Lahko nastavite direkten URI ali $image[] vnos kljuca (see <i>your_template</i>/<i>your_template</i>.cfg).',

// TAB - Calendar
		'Lang_extend_topic_calendar' => 'Koledar tem',

// TAB - SEO
		'IP_url_rw' => 'URL Prepis',
		'IP_url_rw_explain' => 'Z omogocanjem te funkcije bo omogocen URL prepis (HTML povezave namesto PHP, za bolj�i bot spidering) za vse.',

		'IP_url_rw_guests' => 'URL Prepis Za Goste',
		'IP_url_rw_guests_explain' => 'Z omogocanjem te fukcije bo ta funkcija na voljo za goste in bot-e.',

		'IP_bots_reg_auth' => 'Stopnja dovoljenja REG za bot-e',
		'IP_bots_reg_auth_explain' => 'Z omogocanjem te funkcije bo Bot-om dana enaka stopnja dovoljenj kot registriranim uporabnikom',

		'IP_lofi_bots' => 'LoFi Za Bot-e',
		'IP_lofi_bots_explain' => 'Z omogocanjem te funkcije bo LoFi omogocen za Bot-e.',

		'IP_adsense_code' => 'Google AdSense Publisher Koda',
		'IP_adsense_code_explain' => 'Tukaj vstavite va�o Google AdSense Publisher Kodo In bo vnesena na iskalno stran Google. Ce ne �elite te funkcije samo pustite prazno.',

		'IP_google_analytics' => 'Google Analytics Koda',
		'IP_google_analytics_explain' => 'Tukaj vstavite va�o Google Analytics Kodo (Javascript je podana z strani Google-a) in bo avtomatsko vne�ena na dno vsake strani.',

//Sitemap
		'Sitemap_settings' => 'Nastavitve kazala',

		'IP_sitemap_topic_limit' => 'Google Zemljevid spleti�ca :: Limit tem',
		'IP_sitemap_topic_limit_explain' => 'Najvecje dovoljeno �tevilo tem, ki jih prinese ena poizvedba podatkov',

		'IP_sitemap_announce_priority' => 'Google Zemljevid spleti�ca :: Prioriteta obvestil',
		'IP_sitemap_announce_priority_explain' => 'Prioriteta za obvestila (Mora biti �tevilo med 0.0 &amp; 1.0 vkljucno)',

		'IP_sitemap_sticky_priority' => 'Google Zemljevid spleti�ca :: Prioriteta vrocih tem',
		'IP_sitemap_sticky_priority_explain' => 'Prioriteta za vroce teme (Mora biti �tevilo med 0.0 &amp; 1.0 vkljucno)',

		'IP_sitemap_default_priority' => 'Google Zemljevid spleti�ca :: Privzeta prioriteta',
		'IP_sitemap_default_priority_explain' => 'Prioriteta za normalne teme (Mora biti �tevilo med 0.0 &amp; 1.0 vkljucno)',

		'IP_sitemap_sort' => 'Google Zemljevid spleti�ca :: Red sortiranja',
		'IP_sitemap_new_first' => 'Najprej nove objave',
		'IP_sitemap_old_first' => 'Najprej stare objave',

		'Word_graph' => 'OZNAKE',

		'IP_word_graph_max_words' => 'OZNAKE :: Maksimalno �tevilo besed',
		'IP_word_graph_max_words_explain' => 'Izberi najvecje �tevilo besed za prikaz. Vecje �tevilo lahko vpliva na nalaganje serverja. Priporocena vrednost je 250.',

		'IP_word_graph_word_counts' => 'OZNAKE :: Omogoci �tetje besed',
		'IP_word_graph_word_counts_explain' => 'Prika�i skupno �tevilo besed eno zraven druge?<br />Primer: <b>Blog (365)</b>?',

		'IP_forum_wordgraph' => 'OZNAKE :: Oznake na forumu (Global Switch)',
		'IP_forum_wordgraph_explain' => 'Ta funkcija bo omogocila tabelo oznak baziranih na forumu na dnu vsakega foruma. Naknadno boste morali omogociti tudi posamezne forume v Urejevalcu Forumov.',

		'Similar_topics' => 'Podobne Teme',
		'Similar_topics_explain' => 'Konfiguriraj iskanje podobnih tem.',

		'IP_similar_topics' => 'Podobne Teme :: Podobne Teme (Global Switch)',
		'IP_similar_topics_explain' => 'To je global switch Za podobne si teme. Ce �elite omogociti to funkcijo boste morali omogociti tudi posamezne forume v Urejevalcu Forumov.',

		'IP_similar_topics_desc' => 'Podobne Teme :: Vkljuci tudi opis teme',

		'IP_similar_stopwords' => 'Podobne Teme :: Izkljuci stop-besede',

		'IP_similar_max_topics' => 'Podobne Teme :: Maksimalno �tevilo prikaza tem',

		'IP_similar_sort_type' => 'Podobne Teme :: Sortiraj po',
		'IP_similar_sort_type_explain' => 'Izberi metodo sortiranja podobnih tem',
		'IP_similar_sort_type_time' => 'Cas objave',
		'IP_similar_sort_type_relev' => 'Pomemnost',

		'IP_similar_ignore_forums_ids' => 'Podobne Teme :: Ignorirani forumi',
		'IP_similar_ignore_forums_ids_explain' => 'Vstavi ID foruma, v katerem dobo podobne teme ignorirane (za primer test forum, forum za pogovarjanje, itd.). En ID na linijo.',

// TAB - Logging And Security
		'IP_admin_protect' => 'Za�citi Glavni Racun Administratorja',
		'IP_admin_protect_explain' => 'Omogocanje te funkcije bo omogocilo dodatno za�cito Glavnemu Administratorju: pomeni da ga ne more degradirati nobeden od drugih administratojev ali uporabnikoc.',

		'IP_db_log_actions' => 'Omogoci DB Actions Zabele�bo',
		'IP_db_log_actions_explain' => 'Omogocanje te funkcije bo karkoli v zvzezi z DB will shranilo v DB. Ce je bila ta opcija oznacena z true v constants.php, in ne more biti onemogocena v ACP. Ce izbere�, da bo� imel porocila, potem bodo dodatne datoteke spravljene z ostalimi porocili o napakah.',

		'IP_mg_log_actions' => 'Omogoci TXT Actions Zabele�bo',
		'IP_mg_log_actions_explain' => 'Omogocanje te funkcije bo any action that modifies the DB will be stored in a text file on the server (file will be stored in the LOGS folder). This file is not easy to read, but it may be useful under certain conditions. Enable it only if you know what your doing (site may slow down if you enable it).',

		'IP_write_errors_log' => 'Omogoci Zabele�bo Napak na strani',
		'IP_write_errors_log_explain' => 'Omogocanje te funkcije bo zabele�ilo vse napake (i.e. 404 file missing, bad requests, etc) dnevno shranilo v TXT datoteko. Ne pozabite da morate omogociti preusmeritev napak iz errors.php v .htaccess za uporabo te funkcije (Primer najdete v .htaccess, samo vstavite svojo domeno in dekomentirajte linije).',

		'IP_write_digests_log' => 'Omogoci Zabele�bo povzetkov',
		'IP_write_digests_log_explain' => 'Omogocanje te funkcije bo zapisalo vse poslane povzetke v TXT datoteko.',

		'IP_logs_path' => 'Pot za bele�be (ne pozabite CHMOD -ati to datoteko na 0755 ali 0777 kot je zahtevano)',
		'IP_logs_path_explain' => 'Vnesite pot za bele�bo napak in drugih stvari pomembnih za jedro ter brez koncne po�evnice . Primer: <b>logs</b>.',

// TAB - Cron
		'IP_cron_global_switch' => 'Omogoci PHP Cron [Global Switch]',
		'IP_cron_global_switch_explain' => 'Omogocanje te funkcije v PHP bazeranem cron-u bo aktivirano: nekatere automatske funkcije bodo opravljene v dolocenih casovnih intervalih. Optimalen razpon casa za vsako cron funkcijo je odvisen od prometa in preferenc na strani: ce ne veste na kaj lahko te nastavitve vplivajo, prosimo pustite to funkcijo onemogoceno, verjetno jo ne rabite.',

		'IP_cron_files_interval' => 'Izvajanje Cron Intervalov datotek',
		'IP_cron_files_interval_explain' => 'Ta vrsta cron se lahko uporablja za samodejni zagon dolocene datoteke vsak dolocenega interval, ki ga dolocite. Datoteke, ki se izvajajo, je treba dodati v <b>constants.php</b> &raquo; <b>define(\'CRON_FILES\', \'\');</b>. Vec datotek mora biti locenih z vejico.<br /><br /><b>Zadnji potek: ' . (($board_config['cron_files_last_run'] == 0) ? 'NEVER' : create_date('d M Y H:i:s', ($board_config['cron_files_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_database_interval' => 'DB Optimizacija v Cron Intervalu',
		'IP_cron_database_interval_explain' => 'Ta funkcija bo optimizirala podatkovno bazo ob vsakem dolocenem intervalu.<br /><br /><b>Zadnji potek: ' . (($board_config['cron_database_last_run'] == 0) ? 'NEVER' : create_date('d M Y H:i:s', ($board_config['cron_database_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_cache_interval' => 'Ci�cenje Templates pomnilnika v Cron intervalu',
		'IP_cron_cache_interval_explain' => 'Pomnilnik templat bo o�ci�cen ob vsakem dolocenem intervalu.<br /><br /><b>Zadnji potek: ' . (($board_config['cron_cache_last_run'] == 0) ? 'NEVER' : create_date('d M Y H:i:s', ($board_config['cron_cache_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_sql_interval' => 'Tidy SQL Cache Cron Interval',
		'IP_cron_sql_interval_explain' => 'SQL je oci�cen ob vsakem dolocenem intervalu.<br /><br /><b>Zadnji potek: ' . (($board_config['cron_sql_last_run'] == 0) ? 'NEVER' : create_date('d M Y H:i:s', ($board_config['cron_sql_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_users_interval' => 'Ci�cenje uporabni�kega pomnilnika v Cron Intervalu',
		'IP_cron_users_interval_explain' => 'Uporabni�ki pomnilnik je oci�cen ob vsakem dolocenem intervalu.<br /><br /><b>Zadnji potek: ' . (($board_config['cron_users_last_run'] == 0) ? 'NEVER' : create_date('d M Y H:i:s', ($board_config['cron_users_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_topics_interval' => 'Ci�cenje pomnilnika tem v Cron Intervalu',
		'IP_cron_topics_interval_explain' => 'Pomnilnik tem je oci�cen ob vsakem dolocenem intervalu.<br /><br /><b>Zadnji potek: ' . (($board_config['cron_topics_last_run'] == 0) ? 'NEVER' : create_date('d M Y H:i:s', ($board_config['cron_topics_last_run']), $board_config['board_timezone'])) . '</b>',

		'Cron_Disabled' => 'DOnemogoceno',
		'15M' => '15 Minut',
		'30M' => '30 Minut',
		'1H' => '1 Ura',
		'2H' => '2 Ure',
		'3H' => '3 ure',
		'6H' => '6 Ur',
		'12H' => '12 Ur',
		'1D' => '1 Dam',
		'3D' => '3 Dni',
		'7D' => '1 Teden',
		'14D' => '2 Tedna',
		'30D' => '1 Mesec',


// lang_extend_mods_settings.php
		'Lang_extend_mods_settings' => 'Nastavitve bloga',
		'Configuration_extend' => 'Blog',
		'Override_user_choices' => 'Prepi�i izbire uporabnika',
		)
	);
}

$lang = array_merge($lang, array(
	'CFG_NONE' => 'NOBENO',
	'CFG_ALL' => 'VSE',
	'CFG_REG' => 'REGISTARCIJA',
	'CFG_SELF' => 'SAMO',
	'CFG_PRIVATE' => 'PRIVATNO',
	'CFG_MOD' => 'MODERATOR',
	'CFG_ADMIN' => 'ADMINISTRATOR',

// lang_extend_categories_hierarchy.php - BEGIN
	'Hierarchy_setting' => 'Forum',
	'Forum_link' => 'Preusmeritev Povezave',
	'Forum_link_visited' => 'Ta povezava je bila obiskana %d krat',

	'Use_sub_forum' => 'Stiskanje indeksa',
	'Index_packing_explain' => 'Izberite stopnjo stiskanja za index',
	'Medium' => 'Srednje',
	'Full' => 'Polno',
	'Split_categories' => 'Razdeli kategorije na indeksu',
	'Use_last_topic_title' => 'Poka�i naslove zadnjih tem na indeksu',
	'Last_topic_title_length' => 'Dol�ina naslova zadnje teme na indeksu',
	'Sub_level_links' => 'Pod-kategorije na indeksu',
	'Sub_level_links_explain' => 'Dodaj povezave na po-kategorije na opisu foruma ali kategorije',
	'With_pics' => 'Z ikonami',
	'Display_viewonline' => 'Prika�i viewonline Informacijsko onkno na indeksu',
	'Never' => 'Nikoli',
	'Root_index_only' => 'Samo na jedru indeksa',
	'Always' => 'Vedno',
	'Subforums' => 'podforumi',
// lang_extend_categories_hierarchy.php - END

// lang_extend_topic_calendar.php - BEGIN
	'Calendar_settings' => 'Koledar',
	'Calendar' => 'Koledar',
	'Calendar_scheduler' => 'Planer',
	'Calendar_event' => 'Dogodki na koledarju',
	'Calendar_from_to' => 'Od %s do %s (vkljucno)',
	'Calendar_time' => '%s',
	'Calendar_duration' => 'Med',

	'Calendar_week_start' => 'Prvi dan tedna',
	'Calendar_header_cells' => 'Dol�ina prikazanih celic na glavi deske (0 za opcijo brez prikaza)',
	'Calendar_title_length' => 'Dol�ina naslovov prikazanih v celicah koledarja',
	'Calendar_text_length' => 'Dol�ina teksta prikazanega na predoglednem oknu',
	'Calendar_block_display' => 'Prika�i vrstico z koledarjem v glavi deske',
	'Calendar_display_open' => 'Prika�i vrstico z koledarjem v glavi deske odprto (ce je vrstica z koledarjem omogocena)',
	'Calendar_nb_row' => '�tevilo vrstic na dan v glavi deske',
	'Calendar_birthday' => 'Prika�i rojstne dneve v koledarju',
	'Calendar_forum' => 'Prikadi ime foruma pod naslovom teme v planerju',

	'Sorry_auth_cal' => 'Oprostite, ampak samo %s lahko objavijo dogodke v tem forumu.',
	'Date_error' => 'dan %d, mesec %d, leto %d je neveljaven datum',

	'Event_time' => 'Cas dogodka',
	'Minutes' => 'Minute',
	'Today' => 'Danes',
	'Yesterday' => 'Vceraj',
	'All_events' => 'Vsi dogodki',

/*
	'Rules_calendar_can' => '<b>Imate mo�nost</b> objave dogodke na koledar v tem forumu',
	'Rules_calendar_cannot' => '<b>Nimate mo�nosti</b> objave dogodkov v tem forumu',
*/
	'Rules_calendar_can' => '<b>Imate mo�nost</b> objaviti dogodke na koledar',
	'Rules_calendar_cannot' => '<b>Nimate mo�nosti</b> objave dogodkov na koledar',

	'birthday_header' => 'Vse najbolj�e!',
	'birthday' => '<b>%s</b> ima danes rojstni dan!',
// lang_extend_topic_calendar.php - END

	'DB_LOG_ALL' => 'DA z reporti napak',
	)
);

?>