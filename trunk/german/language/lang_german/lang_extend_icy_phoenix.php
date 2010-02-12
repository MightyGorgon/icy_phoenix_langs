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
	'10_Main_Settings_Icy_Phoenix' => 'Icy Phoenix',
	'20_SQL_Charge' => 'SQL Optimierung',
	'30_Posting' => 'Beitr�ge und Mitteilungen',
	'40_IMG_Posting' => 'Bilder in Beitr�gen',
	'50_Hierarchy_setting' => 'Forum',
	'60_Calendar_settings' => 'Kalender',
	'70_SEO' => 'SEO',
	'80_Security' => 'Logs und Sicherheit',
	'90_Cron' => 'Cron',
	)
);

// admin part
if ($lang_extend_admin)
{
	$lang = array_merge($lang, array(
		'Lang_extend_icy_phoenix' => 'Icy Phoenix',

// TAB - Icy Phoenix
		'IP_enable_xs_version_check' => 'Aktiviere Icy Phoenix Versions �berpr�fung',
		'IP_enable_xs_version_check_explain' => 'Bei Aktivierung dieser Option wird bei jedem ACP Besuch �berpr�ft ob eine neuere Icy Phoenix Version zum Download verf�gbar ist. Die Deaktivierung dieser Option kann das Laden des ACPs etwas erh�hen. Wie auch immer, beachte das diese �berpr�fung nur einmal am Tag stattfindet und dann im Cache abgelegt wird.',

		'IP_disable_email_error' => 'Deaktiviere Fehlermeldungen beim E-Mail versenden',

		'IP_html_email' => 'HTML E-Mail',
		'IP_html_email_explain' => 'Bei Aktivierung dieser Option, werden HTML E-Mails aktiviert, andernfalls werden sie in reinem Text Format gesendet',

		'IP_enable_digests' => 'Aktiviere Digests',

		'IP_digests_php_cron' => 'Aktiviere Digest PHP Cron',
		'IP_digests_php_cron_explain' => 'Diese Eigenschaft erm�glicht einer PHP-Emulation des CRON, dieses versucht die E-Mails einmal pro Stunde zu senden. Da es auf einer PHP-Emulation basiert, kann es m�glicherweise nicht jedesmal richtig durchgef�hrt werden. Dies hei�t, dass manchmal E-Mails m�glicherweise nicht gesendet werden k�nnen. Wenn du CRON auf deinem Server erm�glichen kannst, dann verwende diese M�glichkeit stattdessen. Please note that you need also to enable <b>PHP Cron [Global Switch]</b> in <b>Configuration &raquo; Icy Phoenix &raquo; Cron</b>',

		'IP_emails_only_to_admins' => 'E-Mails nur zu Admins',
		'IP_emails_only_to_admins_explain' => 'Erlaube dem E-Mail System nur E-Mails an Admins zu senden',

		'IP_ajax_features' => 'Aktiviere AJAX Funktionen',
		'IP_ajax_features_explain' => 'Einige AJAX Funktionen in die Seite integrieren',

		'IP_ajax_checks_register' => 'AJAX �berpr�fung w�hrend der Registrierung',
		'IP_ajax_checks_register_explain' => 'Bei Aktivierung dieser Option, werden einige Echtzeit�berpr�fungen ausgef�hrt, wenn einige Felder auf der Registrierungs-Seite ausgef�llt werden (Achtung: Diese Option kann die Registrierungs-Seite etwas verlangsamen).',

		'IP_inactive_users_memberlists' => 'Inaktive Benutzer in der Mitgliederliste und Geburtstags-Block',
		'IP_inactive_users_memberlists_explain' => 'Bei Aktivierung dieser Option, werden inaktive Benutzer in der Mitgliederliste und Geburtstags-Block angezeigt.',

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

		'IP_cms_dock' => 'Zeige Apple Style Dock im CMS',

		'IP_cms_style' => 'Aktiviere AJAX im CMS',
		'IP_cms_style_explain' => 'Bei Aktivierung dieser Option, werden die AJAX Funktionen im CMS aktiviert',

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

		'IP_site_history' => 'Seiten Statistik',
		'IP_site_history_explain' => 'Bei Aktivierung dieser Option, werden einige zus�tzlichen Statistiken in der DB gespeichert (z.B. t�gliche Besuche, Beitr�ge, usw.)',

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

		'IP_show_thanks_profile' => 'Zeigt "Erhaltene Danksagungen" beim Anschauen eines Profils an',

		'IP_show_thanks_viewtopic' => 'Zeigt "Erhaltene Danksagungen" beim Lesen von Themen an',

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

		'IP_forum_limit_edit_time_interval' => 'Limit Edit Time Interval (Minutes)',
		'IP_forum_limit_edit_time_interval_explain' => 'This sets the time interval for users to be allowed to edit own messages. Set to ZERO for no limits (feature should be enabled on a per forum basis in Forums Management)',

		'IP_force_large_caps_mods' => 'Themen-Betreff anpassen',
		'IP_force_large_caps_mods_explain' => 'Der Betreff jedes Themas wird angepa�t, indem der erste Buchstabe jedes Wortes gro� geschrieben wird. (au�er f�r Admins)',

		'IP_show_new_reply_posting' => 'Vor neuen Antworten-Warn-System',
		'IP_show_new_reply_posting_explain' => 'Wenn du diese Option aktivierst, wird eine Warnung angezeigt, wenn beim Schreiben einer Antwort zwischenzeitlich ein neuer Eintrag gemacht wurde.',

		'IP_no_bump' => 'Verbiete doppelte Beitr�ge innerhalb von 24 Stunden',
		'IP_no_bump_explain' => 'Bei Aktivierung dieser Option, ist der letzte Poster in einem Thema nicht mehr in der Lage innerhalb von 24 Stunden eine Antwort auf seinen Beitrag zu verfassen. Es sei denn ein anderer Benutzer hat bereits auf seinen Beitrag geantwortet.',
		'MODS_ALLOWED' => 'Moderatoren k�nnen schreiben',

		'IP_display_tags_box' => 'TAGS :: Themen-Tags anzeigen',
		'IP_display_tags_box_explain' => 'Bei Aktivierung dieser Option werden Themen-Tags aktiviert (Tags k�nnen zur Indexierung sinnvoll sein): Tags k�nnen nur durch Admins eingef�gt / bearbeitet werden (oder Moderatoren, wenn du den Switch aktivierst) um Spam zu vermeiden',

		'IP_allow_moderators_edit_tags' => 'TAGS :: Erlaubt Moderatoren Tags zu bearbeiten',
		'IP_allow_moderators_edit_tags_explain' => 'Bei Aktivierung dieser Option wird es den Moderatoren erlaubt, Themen-Tags zu bearbeiten',

		'IP_show_topic_description' => 'Aktiviere Beschreibung f�r Themen',
		'IP_show_topic_description_explain' => 'Bei Aktivierung dieser Option wird die Themen-Beschreibung beim Schreiben eines neuen Themas und in der Forenansicht angezeigt.',

		'IP_edit_notes' => 'Aktiviere Bearbeitungs Anmerkungen',
		'IP_edit_notes_explain' => 'Bei Aktivierung dieser Option, werden die Bearbeitungs Anmerkungen aktiviert',

		'IP_edit_notes_n' => 'Maximale Bearbeitungs Anmerkungen',

		'IP_always_show_edit_by' => 'Zeige in Eintr�gen "Zuletzt bearbeitet von"',
		'IP_always_show_edit_by_explain' => 'Wenn du diese Option aktivierst, wird in Beitr�gen "Zuletzt bearbeitet von..." in ge�nderten Nachrichten angezeigt. �nderungen von Admins werden weiterhin nicht angezeigt.',

		'IP_show_social_bookmarks' => '�ffentliche Lesezeichen',
		'IP_show_social_bookmarks_explain' => 'Zeige �ffentliche Lesezeichen bei den Themen',

		'IP_link_this_topic' => 'Verlinke dieses Thema',
		'IP_link_this_topic_explain' => 'Zeigt die "Verlinke dieses Thema" Box beim Lesen eines Themas.',

		'IP_smilies_topic_title' => 'Smilies f�r Themen Titel und Beschreibung',
		'IP_smilies_topic_title_explain' => 'Bei Aktivierung dieser Option, werden Smilies f�r Themen Titel und Themen Beschreibung aktiviert',

		'IP_enable_colorpicker' => 'Aktiviere Farbauswahl bei Eintr�gen',

		'IP_quote_iterations' => 'Anzahl verschachtelter Zitate',

		'IP_ftr_disable' => 'Deaktivierung des Force Topic Read',
		'IP_ftr_disable_explain' => 'Bei Aktivierung dieser Option, wird der Force Topic Read deaktiviert',

		'IP_disable_html_guests' => 'Deaktiviere HTML Links f�r G�ste',

		'IP_birthday_viewtopic' => 'Zeige Poster\'s Alter in Themen',

		'IP_switch_poster_info_topic' => 'Zeige Poster\'s Info in Themen (Sprache, Style, etc.)',

		'IP_enable_quick_quote' => 'Aktiviere Schnellzitat',
		'IP_enable_quick_quote_explain' => 'Das Schnellzitat erlaubt den Benutzern mittels eines Klicks einen Beitrag zu zitieren. Diese Funktion verwendet Javascript. Die Aktivierung kann lange Beitr�ge zur Folge haben, wenn viele Beitr�ge mit langen Texten in den Themen vorhanden sind.',

		'IP_allow_html_only_for_admins' => 'Aktiviere HTML nur f�r Administratoren',
		'IP_allow_html_only_for_admins_explain' => 'Enabling this option will allow administrators to use HTML tags in posts. Please notice that this feature may lead to security issues or wrong page formatting if not used properly.',

		'IP_enable_custom_bbcodes' => 'Aktiviere eigene BBCodes',
		'IP_enable_custom_bbcodes_explain' => 'This option will enable customized BBCodes created in ACP.',

		'IP_allow_all_bbcode' => 'Aktiviere alle BBCodes',
		'IP_allow_all_bbcode_explain' => 'Bei Aktivierung dieser Option, werden alle BBCodes in der Signatur und anderen Teilen aktiviert, wo sie noch nicht aktiviert sind.',

		'IP_switch_bbcb_active_content' => 'Erlaube BBCode f�r aktive Inhalte in Beitr�gen',
		'IP_switch_bbcb_active_content_explain' => 'Aktiviert BBCode f�r Flash, Video, Audio Streams, RealMedia und Quicktime.',

// TAB - Images In Posts
		'IP_auth_view_pic_upload' => 'Bilder hochladen Erlaubnis (Post Icy Images)',

		'IP_enable_postimage_org' => 'Aktiviere "PostImage" Button beim Beitrag erfassen',

		'IP_gd_version' => 'GD Version:',
		'GD_0' => 'kein GD',
		'GD_1' => 'GD1',
		'GD_2' => 'GD2',

		'IP_show_img_no_gd' => 'Zeige GIF Thumbnails ohne Verwendung der GD Bibliotheken (komplettes Bild wird geladen und dann nur verkleinert angezeigt).',

		'IP_thumbnail_posts' => 'Thumbnails in Beitr�gen',
		'IP_thumbnail_posts_explain' => 'Mit dieser Option wird ein Thumbnail anstatt des kompletten Bildes in einem Beitrag angezeigt, wenn der IMG BBCode verwendet wird',

		'IP_show_pic_size_on_thumb' => 'Zeige die Bildgr��e in den Thumbnails',

		'IP_thumbnail_highslide' => 'Benutze HighSlide JavaScript f�r die Bildanzeige wenn Thumbnails aktiviert sind',
		'IP_thumbnail_highslide_explain' => '�ffnet das Bild vor der aktuellen Seite, ohne ein neues Fenster zu �ffnen. Mehr �ber <a href="http://www.highslide.com/" target="_blank">HighSlide JS...</a><br />Stelle sicher das du die vorkompilierten Beitr�ge leerst wenn du hier eine Einstellung ver�ndert hast!',

		'IP_thumbnail_lightbox' => 'Benutze Lightbox JavaScript f�r die Bildanzeige wenn Thumbnails aktiviert sind',
		'IP_thumbnail_lightbox_explain' => '�ffnet das Bild vor der aktuellen Seite, ohne ein neues Fenster zu �ffnen. Mehr �ber <a href="http://www.huddletogether.com/projects/lightbox/" target="_blank">Lightbox JS...</a><br />Stelle sicher das du die vorkompilierten Beitr�ge leerst wenn du hier eine Einstellung ver�ndert hast!<br />Wenn du HighSlide aktiviert hast, wird diese Einstellung ignoriert.',

		'IP_thumbnail_cache' => 'Thumbnails Cache',

		'IP_thumbnail_quality' => 'Thumbnails Qualit�t (1-100)',

		'IP_thumbnail_size' => 'Thumbnails Gr��e (in Pixel)',

// TAB - Forum
		'Lang_extend_categories_hierarchy' => 'Kategorien-Hierarchie',

		'Category_attachment' => 'Angef�gt an',
		'Category_desc' => 'Beschreibung',
		'Category_config_error_fixed' => 'Ein Fehler in den Kategorie-Einstellungen wurde korrigiert',
		'Attach_forum_wrong' => 'Du kannst kein Forum an ein Forum anf�gen',
		'Attach_root_wrong' => 'Du kannst kein Forum an den Foren-Index anf�gen',
		'Forum_name_missing' => 'Du kannst kein Forum ohne Namen anlegen',
		'Category_name_missing' => 'Du kannst keine Kategorie ohne Namen anlegen',
		'Only_forum_for_topics' => 'Themen k�nnen nur in Foren gefunden werden',
		'Delete_forum_with_attachment_denied' => 'Du kannst keine Foren l�schen, die Sub-Level enthalten',

		'Category_delete' => 'L�sche Kategorie',
		'Category_delete_explain' => 'Hier kannst du eine Kategorie l�schen und bestimmen, wohin alle darin enthaltenen Foren und Kategorien verschoben werden sollen.',

// forum links type
		'Forum_link_url' => 'Link URL',
		'Forum_link_url_explain' => 'Du kannst hier die URL zu einem Icy Phoenix Prog. setzen oder eine vollst�ndige URL zu einem externen Server',
		'Forum_link_internal' => 'Icy Phoenix Prog',
		'Forum_link_internal_explain' => 'W�hle Ja, wenn du ein Programm aufrufen m�chtest, welches im Icy Phoenix Directory liegt',
		'Forum_link_hit_count' => 'Hits Z�hler',
		'Forum_link_hit_count_explain' => 'W�hle Ja wenn du m�chtest, das das Board die Klicks z�hlt und auch darstellt',
		'Forum_link_with_attachment_deny' => 'Du kannst kein Forum als Link definieren, wenn es schon Sub-Level hat',
		'Forum_link_with_topics_deny' => 'Du kannst kein Forum als Link definieren, wenn es schon Themen enth�lt',
		'Forum_attached_to_link_denied' => 'Du kannst kein Forum oder eine Kategorie einem Forum Link zuordnen',

		'Manage_extend' => 'Einstellungen +',
		'No_subforums' => 'Keine Unterforen',
		'Forum_type' => 'W�hle die Art des Forums',
		'Presets' => 'Voreinstellungen',
		'Refresh' => 'Aktualisieren',
		'Position_after' => 'Positioniere dieses Forum nach',
		'Link_missing' => 'Der Link fehlt',
		'Category_with_topics_deny' => 'Es befinden sich noch Beitr�ge in diesem Forum. Du kannst es nicht in eine Kategorie umwandeln.',
		'Recursive_attachment' => 'Du kannst ein Forum nicht an das untere Ende seines eigenen Zweiges anh�ngen (rekursiver Anhang)',
		'Forum_with_attachment_denied' => 'Du kannst keine Kategorie mit Foren zu einem eigenen Forum umwandeln',
		'icon' => 'Icon',
		'icon_explain' => 'Dieses Icon wird vor dem Forumsnamen angezeigt. Du kannst eine direkte URL angeben oder den $image[] Key Eintrag (siehe <i>dein_template</i>/<i>dein_template.cfg</i>).',

// TAB - Calendar
		'Lang_extend_topic_calendar' => 'Topic Kalender',

// TAB - SEO
		'IP_url_rw' => 'URL Rewrite',
		'IP_url_rw_explain' => 'Bei Aktivierung dieser Option wird URL Rewrite f�r jeden eingeschalten (HTML Links anstelle von PHP, f�r besseres spidern der Suchrobots).',

		'IP_url_rw_guests' => 'URL Rewrite f�r G�ste',
		'IP_url_rw_guests_explain' => 'Bei Aktivierung dieser Option, wird URL Rewrite nur f�r G�ste und Bots aktiviert.',

		'IP_bots_reg_auth' => 'Registrierungserlaubnis f�r Bots',
		'IP_bots_reg_auth_explain' => 'Wenn diese Option aktiviert wird, ist es m�glich das sich Bots registrieren.',

		'IP_lofi_bots' => 'LoFi f�r Bots',
		'IP_lofi_bots_explain' => 'Bei Aktivierung dieser Option, wird LoFi f�r die Bots aktiviert.',

		'IP_adsense_code' => 'Google AdSense Publisher Code',
		'IP_adsense_code_explain' => 'F�ge hier deinen Google AdSense Publisher Code ein und er wird in der Google Suchen Seite eingef�gt. Wenn du dies nicht nutzen willst, lasse das Feld einfach leer.',

		'IP_google_analytics' => 'Google Analytics Code',
		'IP_google_analytics_explain' => 'F�ge hier deinen Google Analytics Code ein (der Javascript code der von Google zur Verf�gung gestellt wird) und dieser wird automatisch im Fu� jeder Seite eingef�gt.',

//Sitemap
		'Sitemap_settings' => 'Sitemap Einstellungen',

		'IP_sitemap_topic_limit' => 'Google Sitemap :: Themen-Limit',
		'IP_sitemap_topic_limit_explain' => 'Maximale Anzahl von Themen, die mit einer einzigen Datenbankabrfage ausgelesen werden',

		'IP_sitemap_announce_priority' => 'Google Sitemap :: Ank�ndigungspriorit�t',
		'IP_sitemap_announce_priority_explain' => 'Priorit�t f�r Ank�ndigungen (muss eine Zahl zwischen 0.0 &amp; 1.0 sein)',

		'IP_sitemap_sticky_priority' => 'Google Sitemap :: Wichtig-Priorit�t',
		'IP_sitemap_sticky_priority_explain' => 'Priorit�t f�r Wichtige Themen (muss eine Zahl zwischen 0.0 &amp; 1.0 sein)',

		'IP_sitemap_default_priority' => 'Google Sitemap :: Normal-Priorit�t',
		'IP_sitemap_default_priority_explain' => 'Priorit�t f�r normale Themen (muss eine Zahl zwischen 0.0 &amp; 1.0 sein)',

		'IP_sitemap_sort' => 'Google Sitemap :: Sortierordnung',
		'IP_sitemap_new_first' => 'Neue Beitr�ge zuerst',
		'IP_sitemap_old_first' => 'Alte Beitr�ge zuerst',

//Tags
		'IP_word_graph_max_words' => 'TAGS :: Maximale W�rter',
		'IP_word_graph_max_words_explain' => 'W�hle die max. Anzahl an W�rtern die angezeigt werden. Eine hohe Zahl k�nnte den Server belasten. Der empfohlene Wert ist 250.',

		'IP_word_graph_word_counts' => 'TAGS :: Aktiviere Wort Z�hlungen',
		'IP_word_graph_word_counts_explain' => 'Die Gesamtzahl der W�rter wird neben jedem Wort angezeigt, wie z.B. <b>Icy Phoenix (365)</b>?',

		'IP_forum_wordgraph' => 'TAGS :: Forum Wortdiagramm',
		'IP_forum_wordgraph_explain' => 'Dieses Feature aktiviert ein forumbasierendes Wortdiagramm am Ende jedes Forums',

		'IP_forum_tags_type' => 'TAGS :: Forum Tags Type',
		'IP_forum_tags_type_explain' => 'You can choose whether to display Wordgraph (word taken from search tables) or Tags (tags specified in topics)',
		'IP_forum_tags_type_tags' => 'Tags',
		'IP_forum_tags_type_wordgraph' => 'Wordgraph',

		'Similar_topics' => '�hnliche Themen',
		'Similar_topics_explain' => 'Auf dieser Seite kannst du die Konfiguration f�r die �hnlichen Themen vornehmen.',

		'IP_similar_topics' => '�hnliche Themen :: �hnliche Themen aktivieren',
		'IP_similar_topics_explain' => 'This is the global switch for Similar Topics. If you want to switch on this feature you will need also to enable single forums in Forums Management section.',

		'IP_similar_topics_desc' => '�hnliche Themen :: Auf dieser Seite kannst du die Konfiguration f�r die �hnlichen Themen vornehmen.',

		'IP_similar_stopwords' => '�hnliche Themen :: Auszuschlie�ende Stop-W�rter',

		'IP_similar_max_topics' => '�hnliche Themen :: Maximale Menge der anzuzeigenden Themen',

		'IP_similar_sort_type' => '�hnliche Themen :: Sortiere nach',
		'IP_similar_sort_type_explain' => 'W�hle Sortierung der �hnlichen Themen',
		'IP_similar_sort_type_time' => 'Beitragszeit',
		'IP_similar_sort_type_relev' => 'Bedeutung',

		'IP_similar_ignore_forums_ids' => '�hnliche Themen :: ignorierte Foren',
		'IP_similar_ignore_forums_ids_explain' => 'Gib die IDs der Foren an, in denen �hnliche Themen ignoriert werden (zum Beispiel test forum, forum f�r talk, etc.). Eine ID pro Zeile.',

// TAB - Logging And Security
		'IP_admin_protect' => 'Sch�tze Hauptadmin Account',
		'IP_admin_protect_explain' => 'Bei Aktivierung dieser Option, wird mehr Sicherheit dem Haupt Admin Account hinzugef�gt',

		'IP_db_log_actions' => 'Aktiviere DB Aktionen Log',
		'IP_db_log_actions_explain' => 'Bei Aktivierung dieser Option werden alle Aktionen, die die DB �ndern, in der Datenbank gespeichert. Wurde diese Option in der constans.php als &quot;true&quot; gesetzt, so kann sie nicht durch das ACP abgeschaltet werden. Willst du noch zus�tzlich alle Fehler gespeichert haben, werden diese in einer extra Datei gesichert.',

		'IP_mg_log_actions' => 'Aktiviere TXT Actions Log',
		'IP_mg_log_actions_explain' => 'Aktiviere diese Option und es wird jede Aktion, die die DB �ndert, in einer Textdatei auf unter dem Benutzer gespeichert (Datei wird im LOGS Ordner gespeichert). Diese Datei ist nicht einfach zu lesen, aber es kann unter bestimmten Bedingungen n�tzlich sein. Aktiviere es nur, wenn du wei�t was du machst (die Seite kann nach der Aktivierung langsamer sein).',

		'IP_write_errors_log' => 'Aktivere Fehler Log',
		'IP_write_errors_log_explain' => 'Bei Aktivierung dieser Option werden alle Fehler f�r jeden Tag einzeln in einem Textdokument gespeichert.',

		'IP_write_digests_log' => 'Aktiviere Digests Log',
		'IP_write_digests_log_explain' => 'Bei Aktivierung dieser Option werden alle versandten Digests f�r jeden Tag einzeln in einem Textdokument gespeichert.',

		'IP_logs_path' => 'Pfad f�r Logs (setze f�r diesen Ordner CHMOD 0777)',
		'IP_logs_path_explain' => 'Gib hier den Pfad f�r die Fehler und andere Logs, relativ zum Forenpfad, ohne Slash am Ende ein. Zum Beispiel: <b>logs</b>.',

// TAB - Cron
		'IP_cron_global_switch' => 'Aktiviere PHP Cron [Globale Einstellung]',
		'IP_cron_global_switch_explain' => 'Bei Aktivierung dieser Option wird der PHP-basierende Cron aktiviert: einige automatische Arbeiten werden in bestimmten Intervallen ausgef�hrt. Der optimale Zeitabstand f�r jeden Cron h�ngt von der Auslastung und den Einstellungen der Seite ab: Wenn du nicht wei�t was diese Einstellungen bedeuten, dann lass diese Funktion deaktiviert, denn du wirst sie wahrscheinlich nicht ben�tigen.',

		'IP_cron_files_interval' => 'Dateiausf�hrungs Cron Intervall',
		'IP_cron_files_interval_explain' => 'Diese Art von Cron wird von dir bestimmte Dateien automatisch ausf�hren in dem Intervall das du bestimmst. Die Dateien die ausgef�hrt werden sollen m�ssen in <b>constants.php</b> &raquo; <b>define(\'CRON_FILES\', \'\');</b> definiert sein. Bei mehrere Dateien m�ssen diese mit einem Komma getrennt werden.<br /><br /><b>Letzte Ausf�hrung: ' . (($config['cron_files_last_run'] == 0) ? 'Niemals' : create_date('d M Y H:i:s', ($config['cron_files_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_database_interval' => 'DB Optimierungs Cron Intervall',
		'IP_cron_database_interval_explain' => 'Diese Funktion wird deine Datenbank in dem von dir bestimmten Intervall optimieren.<br /><br /><b>Letzte Ausf�hrung: ' . (($config['cron_database_last_run'] == 0) ? 'Niemals' : create_date('d M Y H:i:s', ($config['cron_database_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_cache_interval' => 'Templates Cache Cron Intervall',
		'IP_cron_cache_interval_explain' => 'Der Template Cache wird in diesem Intervall gel�scht.<br /><br /><b>Letzte Ausf�hrung: ' . (($config['cron_cache_last_run'] == 0) ? 'Niemals' : create_date('d M Y H:i:s', ($config['cron_cache_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_sql_interval' => 'SQL Cache Cron Intervall',
		'IP_cron_sql_interval_explain' => 'Der SQL Cache wird in diesem Intervall gel�scht.<br /><br /><b>Letzte Ausf�hrung: ' . (($config['cron_sql_last_run'] == 0) ? 'Niemals' : create_date('d M Y H:i:s', ($config['cron_sql_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_users_interval' => 'Benutzer Cache Cron Intervall',
		'IP_cron_users_interval_explain' => 'Der Benutzer Cache wird in diesem Intervall gel�scht.<br /><br /><b>Letzte Ausf�hrung: ' . (($config['cron_users_last_run'] == 0) ? 'Niemals' : create_date('d M Y H:i:s', ($config['cron_users_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_topics_interval' => 'Themen Cache Cron Intervall',
		'IP_cron_topics_interval_explain' => 'Der Themen Cache wird in diesem Intervall gel�scht.<br /><br /><b>Letzte Ausf�hrung: ' . (($config['cron_topics_last_run'] == 0) ? 'Niemals' : create_date('d M Y H:i:s', ($config['cron_topics_last_run']), $config['board_timezone'])) . '</b>',

		'Cron_Disabled' => 'Deaktiviert',
		'15M' => '15 Minuten',
		'30M' => '30 Minuten',
		'1H' => '1 Stunde',
		'2H' => '2 Stunden',
		'3H' => '3 Stunden',
		'6H' => '6 Stunden',
		'12H' => '12 Stunden',
		'1D' => '1 Tag',
		'3D' => '3 Tage',
		'7D' => '1 Woche',
		'14D' => '2 Wochen',
		'30D' => '1 Monat',


// lang_extend_mods_settings.php
		'Lang_extend_mods_settings' => 'Mods settings Sprach-Pack',
		'Configuration_extend' => 'Kalender &amp; Subforen',
		'Override_user_choices' => 'Benutzereinstellungen �berschreiben',
		)
	);
}

$lang = array_merge($lang, array(
	'CFG_NONE' => 'KEINER',
	'CFG_ALL' => 'ALLE',
	'CFG_REG' => 'REG',
	'CFG_SELF' => 'SELBST',
	'CFG_PRIVATE' => 'PRIVAT',
	'CFG_MOD' => 'MODS',
	'CFG_ADMIN' => 'ADMIN',

// lang_extend_categories_hierarchy.php - BEGIN
	'Hierarchy_setting' => 'Kategorie Hierarchie Einstellungen',
	'Forum_link' => 'Link Weiterleitung',
	'Forum_link_visited' => 'Dieser Link wurde %d mal besucht',

	'Use_sub_forum' => 'Unterforen Anzeige (Komprimierung):',
	'Index_packing_explain' => 'Gibt an, wie die Unterforen im Index angezeigt werden.',
	'Medium' => 'Mittel',
	'Full' => 'Komprimiert',
	'Split_categories' => 'Kategorien im Index aufteilen:',
	'Use_last_topic_title' => 'Zeige die Titel der letzten Themen im Index:',
	'Last_topic_title_length' => 'Titell�nge des letzten Themas im Index:',
	'Sub_level_links' => 'Unterforenlinks im Index:',
	'Sub_level_links_explain' => 'F�ge Links zu den Unterforen in der Forum oder Kategorie Beschreibung hinzu',
	'With_pics' => 'Mit Icons',
	'Display_viewonline' => 'Wer ist Online Box einschalten:',
	'Never' => 'Nie',
	'Root_index_only' => 'Nur im Index',
	'Always' => 'Immer',
	'Subforums' => 'Unterforen',
// lang_extend_categories_hierarchy.php - END

// lang_extend_topic_calendar.php - BEGIN
	'Calendar_settings' => 'Kalender Einstellungen',
	'Calendar' => 'Kalender',
	'Calendar_scheduler' => 'Planer',
	'Calendar_event' => 'Kalender Termin',
	'Calendar_from_to' => 'Vom %s bis %s',
	'Calendar_time' => '%s',
	'Calendar_duration' => 'Dauer',

	'Calendar_week_start' => 'Erster Wochentag',
	'Calendar_header_cells' => 'Anzahl der Zellen die im Board Header angezeigt werden (0 f�r keine Anzeige)',
	'Calendar_title_length' => 'L�nge des Titels welcher in den Kalender Zellen angezeigt wird',
	'Calendar_text_length' => 'L�nge des Textes, welcher im �bersichtsfenster angezeigt wird',
	'Calendar_block_display' => 'Zeige die Kalender Reihe im Board Index',
	'Calendar_display_open' => 'Zeige die Kalender Reihe im Forum Index ge�ffnet (Wenn Kalender Reihen aktiviert sind)',
	'Calendar_nb_row' => 'Anzahl der Reihen pro Tag im Board Header',
	'Calendar_birthday' => 'Zeige Geburtstage im Kalender an',
	'Calendar_forum' => 'Den Namen des Forums unter dem Thematitel im Planer anzeigen',

	'Sorry_auth_cal' => 'Nur %s kann in diesem Forum Termine in den Kalender eintragen.',
	'Date_error' => '%d/%d/%d ist kein g�ltiges Datum',

	'Event_time' => 'Termin Zeit',
	'Minutes' => 'Minuten',
	'Today' => 'Heute',
	'Yesterday' => 'Gestern',
	'All_events' => 'Alle Ereignisse',

/*
	'Rules_calendar_can' => 'You <b>can</b> post calendar events in this forum',
	'Rules_calendar_cannot' => 'You <b>cannot</b> post calendar events in this forum',
*/
	'Rules_calendar_can' => 'Du <b>kannst</b> Kalender-Ereignisse eintragen.',
	'Rules_calendar_cannot' => 'Du <b>kannst keine</b> Kalender-Ereignisse eintragen.',

	'birthday_header' => 'Happy Birthday!',
	'birthday' => '<b>%s</b> hat heute Geburtstag.',
// lang_extend_topic_calendar.php - END

	'DB_LOG_ALL' => 'Ja, mit Fehlerberichten',
	)
);

?>