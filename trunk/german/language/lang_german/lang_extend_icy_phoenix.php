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
	'05_Server_Settings' => 'Server',
	'10_Site_Settings' => 'Standard-Einstellungen',
	'15_Various_Settings' => 'Diverse Einstellungen',
	'20_SQL_Charge' => 'SQL Optimierung',
	'25_Users' => 'Benutzer',
	'27_Social_Networks' => 'Soziale Netzwerke',
	'30_Posting' => 'Beiträge und Mitteilungen',
	'40_IMG_Posting' => 'Bilder in Beiträgen',
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

// TAB - SERVER
		'SITE_META_KEYWORDS' => 'Meta Schlüsselwörter',
		'SITE_META_KEYWORDS_SWITCH' => 'Aktiviere Meta Schlüsselwörter von der DB',
		'SITE_META_KEYWORDS_SWITCH_EXPLAIN' => 'Wenn du Meta Schlüsselwörter aktivierst, dann werden die oben angegebenen Schlüsselwörter auf den html Seiten benutzt. Sonst werden die Schlüsselwörter aus <i>lang_main_settings.php</i> verwendet.',
		'SITE_META_DESCRIPTION' => 'Meta Beschreibung',
		'SITE_META_DESCRIPTION_SWITCH' => 'Aktiviere Meta Beschreibung von der DB',
		'SITE_META_DESCRIPTION_SWITCH_EXPLAIN' => 'Wenn du Meta Beschreibung aktivierst, dann wird die oben angegebene Beschreibung auf den html Seiten benutzt. Sonst wird die Beschreibung aus <i>lang_main_settings.php</i> verwendet.</i>.',
		'SITE_META_AUTHOR' => 'Meta Verfasser',
		'SITE_META_AUTHOR_SWITCH' => 'Aktiviere Meta Verfasser von der DB',
		'SITE_META_AUTHOR_SWITCH_EXPLAIN' => 'Wenn du Meta Verfasser aktivierst, dann wird der oben angegebene Verfasser auf den html Seiten benutzt. Sonst wird der Verfasser aus <i>lang_main_settings.php</i> verwendet.</i>.',
		'SITE_META_COPYRIGHT' => 'Meta Copyright',
		'SITE_META_COPYRIGHT_SWITCH' => 'Aktiviere Meta Copyright von der DB',
		'SITE_META_COPYRIGHT_SWITCH_EXPLAIN' => 'Wenn du Meta Copyright aktivierst, dann wird der oben angegebene Copyright auf den html Seiten benutzt. Sonst wird der Copyright aus <i>lang_main_settings.php</i> verwendet.</i>.',

// TAB - SITE
		'IP_mobile_style_disable' => 'Deaktiviere Mobile Geräte Erkennung',
		'IP_mobile_style_disable_explain' => 'Normalerweise wird für mobile Geräte der <b>Mobile</b> Style automatisch aktiviert (es kann von jedem Benutzer selbst deaktiviert werden). Wähle diese Funktion, wenn du die automatische Erkennung ausschalten möchtest.',

// TAB - Icy Phoenix
		'IP_enable_xs_version_check' => 'Aktiviere Icy Phoenix Versions Überprüfung',
		'IP_enable_xs_version_check_explain' => 'Bei Aktivierung dieser Option wird bei jedem ACP Besuch überprüft ob eine neuere Icy Phoenix Version zum Download verfügbar ist. Die Deaktivierung dieser Option kann das Laden des ACPs etwas erhöhen. Wie auch immer, beachte das diese Überprüfung nur einmal am Tag stattfindet und dann im Cache abgelegt wird.',

		'IP_disable_email_error' => 'Deaktiviere Fehlermeldungen beim E-Mail versenden',

		'IP_html_email' => 'HTML E-Mail',
		'IP_html_email_explain' => 'Bei Aktivierung dieser Option, werden HTML E-Mails aktiviert, andernfalls werden sie in reinem Text Format gesendet',

		'IP_emails_only_to_admins' => 'E-Mails nur zu Admins',
		'IP_emails_only_to_admins_explain' => 'Erlaube dem E-Mail System nur E-Mails an Admins zu senden',

		'IP_ajax_features_title' => 'AJAX Funktionen',

		'IP_ajax_features' => 'Aktiviere AJAX Funktionen',
		'IP_ajax_features_explain' => 'Einige AJAX Funktionen in die Seite integrieren',

		'IP_ajax_checks_register' => 'AJAX Überprüfung während der Registrierung',
		'IP_ajax_checks_register_explain' => 'Bei Aktivierung dieser Option, werden einige Echtzeitüberprüfungen ausgeführt, wenn einige Felder auf der Registrierungs-Seite ausgefüllt werden (Achtung: Diese Option kann die Registrierungs-Seite etwas verlangsamen).',

		'IP_inactive_users_memberlists' => 'Inaktive Benutzer in der Mitgliederliste und Geburtstags\' Block',
		'IP_inactive_users_memberlists_explain' => 'Bei Aktivierung dieser Option, werden inaktive Benutzer in der Mitgliederliste und Geburtstags\' Block angezeigt.',

		'IP_page_gen' => 'Zeige Seiten Generierungs Zeit im Footer',

		'IP_switch_header_dropdown' => 'Aktiviere Dropdown Menu im Header',
		'IP_switch_header_dropdown_explain' => 'Dies aktiviert ein Dropdown Menu im Header für die Suche und für die Beiträge',

		'IP_show_alpha_bar' => 'Zeige alphabetische Sortierleiste in der Forum-Ansicht',
		'IP_show_alpha_bar_explain' => 'Diese Option zeigt in der Forum-Ansicht (viewforum.php) eine Leiste, um die Themen alphabetisch sortieren lassen zu können.',

		'IP_show_rss_forum_icon' => 'Forum Index Icons',
		'IP_show_rss_forum_icon_explain' => 'Diese Option zeigt Icons rechts von jedem Forumtitel an (im Forum Index): RSS, Neues Thema&hellip;',

		'IP_allow_mods_view_self' => 'Erlaube allen Moderatoren die SELF AUTH Themen anzuzeigen',
		'IP_allow_mods_view_self_explain' => 'Wenn ein Forum auf SELF AUTH Zugriff gesetzt wurde, können nur Administratoren und Moderatoren die entsprechenden Foren betreten. However there are many features that may show contents of these kind of posts even if not authed: Recent Topics, Search, Recent Messages Blocks, Random Topics Blocks, etc. To prevent this, an extra feature has been coded which doesn\'t allow not authed people to access these topics via secondary ways. Anyway you can allow ALL moderators (not only admins) to view these messages through these secondary ways. If you set this to YES then ALL moderators will be allowed to see the content of these messages through: Recent, Search, Topics related blocks&hellip; Unfortunately if you switch this OFF then neither AUTHED moderators may access SELF AUTHED topics through secondary ways. The feature has been coded in this way to save extra SQL charge. If you don\'t use SELF AUTHED forums, then you don\'t need this function as well.',

		'IP_xmas_fx' => 'Weihnachts Schnee',
		'IP_xmas_fx_explain' => 'Diese Option aktiviert den Schneefall Effekt.',

		'IP_xmas_gfx' => 'Weihnachts Grafiken',
		'IP_xmas_gfx_explain' => 'Bei Aktivierung dieser Option werden Weihnachtsgrafiken angezeigt.',

		'IP_select_theme' => 'Style Wechsel',
		'IP_select_theme_explain' => 'Bei Aktivierung dieser Option, wird eine Auswahl Box zum schnellen wechseln aller verfügbaren Styles angezeigt.',

		'IP_select_lang' => 'Sprach Wechsel',
		'IP_select_lang_explain' => 'Bei Aktivierung dieser Option, wird eine Auswahl Box zum schnellen wechseln aller verfügbaren Sprachen angezeigt.',

		'IP_cms_dock' => 'Zeige Apple Style Dock im CMS',

		'IP_cms_style' => 'Aktiviere AJAX im CMS',
		'IP_cms_style_explain' => 'Bei Aktivierung dieser Option, werden die AJAX Funktionen im CMS aktiviert',

		'IP_split_ga_ann_sticky' => 'Spaltet Themen nach Typ auf',
		'IP_split_ga_ann_sticky_explain' => 'Hier kannst du eine Variante auswählen um Themen in der Forum-Ansicht (viewforum.php) entsprechend aufzuteilen',
		'IP_split_topic_0' => 'Alle Themen Typen zusammen (kein Split)',
		'IP_split_topic_1' => 'Globale Ankündigungen, Ankündigungen und Wichtige Themen zusammen, Normale Themen werden abgetrennt',
		'IP_split_topic_2' => 'Globale Ankündigungen werden abgetrennt, Ankündigungen und Wichtige Themen sind zusammen, Normale Themen abgetrennt',
		'IP_split_topic_3' => 'Alle Themen Typen werden abgetrennt dargestellt',

// TAB - SQL Charge
		'IP_fast_n_furious' => 'Fast And Furious',
		'IP_fast_n_furious_explain' => 'Bei Aktivierung dieser Option, werden einige große SQL Funktionen abgeschaltet in der Hoffnung, dass deine Seite dadurch schneller wird!',

		/*
		'IP_db_cron' => 'Datenbank Optimierung',
		'IP_db_cron_explain' => 'Bei Aktivierung dieser Option, wird die Datenbank Optimierung aktiviert',
		*/

		'IP_site_history' => 'Seiten Statistik',
		'IP_site_history_explain' => 'Bei Aktivierung dieser Option, werden einige zusätzlichen Statistiken in der DB gespeichert (z.B. tägliche Besuche, Beiträge, usw.)',

		'IP_active_sessions' => 'Anzahl der Sessions (Sitzungen) begrenzen',
		'IP_active_sessions_explain' => '<b>ACHTUNG:</b> Sei vorsichtig mit diesem Wert. Diese Zahl ist die maximal zulässige Anzahl von Sitzungen, wenn das Limit erreicht ist kann auf die Website nicht mehr zugegriffen werden. Lass diesen Eintrag bei 0 (NULL), wenn du dir nicht sicher bist.',

		'IP_global_disable_upi2db' => 'Deaktiviere UPI2DB komplett',
		'IP_global_disable_upi2db_explain' => 'Mit dieser Option kannst du UPI2DB vollständig abschalten, dadurch sparst du extra Speicherplatz.',

		'IP_enable_own_icons' => 'Themen-Icon eigener Nachrichten',
		'IP_enable_own_icons_explain' => 'Aktiviere diese Option und es wird ein anderes Icon für Themen, die eigene Nachrichten enthalten, angezeigt.',

		'IP_show_forums_online_users' => 'Zeige Online Benutzer im jeweiligen Forum',
		'IP_show_forums_online_users_explain' => 'Dies aktiviert die Online Benutzer Anzeige für jedes Forum im Index',

		'IP_google_bot_detector' => 'Aktiviere GoogleBot Erkennung',

		'IP_gsearch_guests' => 'Zwingt Gäste zur Google Suche',

		'IP_visit_counter_switch' => 'Aktiviere Besucher Zähler',

		'IP_enable_new_messages_number' => 'Zeige die Anzahl der neuen Nachrichten seit dem letzten Besuch',

		'IP_disable_thanks_topics' => 'Deaktiviere Bedanken Button (komplett)',

		'IP_show_thanks_profile' => 'Zeigt &quot;Erhaltene Danksagungen&quot; beim Anschauen eines Profils an',

		'IP_show_thanks_viewtopic' => 'Zeigt &quot;Erhaltene Danksagungen&quot; beim Lesen von Themen an',

		'IP_disable_likes_posts' => 'Disable Posts Like (Global Switch)',
		'IP_disable_likes_posts_explain' => 'This option allows you to disable globally &quot;Like This Post&quot; feature',

		'IP_disable_topic_view' => '&quot;Thema angesehen von&quot; (komplett) deaktivieren',
		'IP_disable_topic_view_explain' => 'Diese Option deaktiviert die &quot;Thema angesehen von&quot;-Funktion (dies reduziert SQL-Platz).',

		'IP_disable_referers' => 'Referer deaktivieren',
		'IP_disable_referers_explain' => 'Diese Option deaktiviert die Referer Funktion (dies reduziert SQL-Platz).',

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

		'IP_last_msgs_x' => 'Auszuschließende Foren',
		'IP_last_msgs_x_explain' => 'Bitte, trage hier die IDs der Foren ein die in der Letzte Nachrichten Box ausgeschlossen werden sollen (Du kannst jede Foren ID mit Komma trennen).',

		'IP_show_chat_online' => 'AJAX Chat Online :: Forum Index',
		'IP_show_chat_online_explain' => 'Aktiviere diese Option um im <b>Forum Index</b> die online Benutzer anzuzeigen, die im AJAX Chat sind.',

		'IP_index_shoutbox' => 'Shoutbox :: Forum Index',
		'IP_index_shoutbox_explain' => 'Bei Aktivierung dieser Option, wird die Shoutbox im <b>Forum Index</b> angezeigt.',

		'IP_online_shoutbox' => 'Shoutbox :: Wer ist online',
		'IP_online_shoutbox_explain' => 'Bei Aktivierung dieser Option, wird die Shoutbox im <b>Wer ist online</b> angezeigt.',

		'IP_img_shoutbox' => 'Deaktiviere [img][/img] BBCode in der Shoutbox',
		'IP_img_shoutbox_explain' => 'Bei Aktivierung dieser Option, wird der [img][/img] BBCode in der Shoutbox deaktiviert.',

		'IP_index_birthday' => 'Geburtstag :: Forum Index',
		'IP_index_birthday_explain' => 'Bei Aktivierung dieser Option, werden die Geburtstage im <b>Forum Index</b> aktiviert.',

		'IP_show_random_quote' => 'Zufallszitat :: Forum Index',
		'IP_show_random_quote_explain' => 'Bei Aktivierung dieser Option, werden die Zufallszitate im <b>Forum Index</b> angezeigt.',

// TAB - Users
		'IP_user_allow_pm_register' => 'Erlaube PN (Private Nachrichten) für neue Benutzer',
		'IP_user_allow_pm_register_explain' => 'Bei Aktivierung dieser Option können auch neu registrierte Benutzer PN (Private NAchrichten) schreiben. Bei Deaktivierung können neue Benutzer keine PN senden, außer ein Admin erlaubt es für den jeweiligen Benutzer.',

// Spam Section
		'IP_spam_measures_header' => 'Spam Maßnahmen',

		'IP_spam_posts_number' => 'SPAM - Minimale Beiträge um Spam Maßnahmen zu vermeiden',
		'IP_spam_posts_number_explain' => 'Bis ein Benutzer die angegebene Beitragszahl erreicht, werden diese Spam Maßnahmen ausgeführt (die nachstehenden mit SPAM Präfix)',
		'IP_spam_p_0' => 'Deaktiviert',
		'IP_spam_p_3' => '3',
		'IP_spam_p_5' => '5',
		'IP_spam_p_10' => '10',
		'IP_spam_p_20' => '20',

		'IP_spam_disable_url' => 'SPAM - Deaktiviere URLs in Beiträgen',
		'IP_spam_disable_url_explain' => 'Diese Funktion entfernt alle URLs in den jeweiligen Beiträgen und ersetzt HTTP mit H**P, solange, bis die oben angegebenen Minimalen Beiträge erreicht sind. Administratoren bekommen weiterhin den original Beitrag angezeigt.',

		'IP_spam_hide_signature' => 'SPAM - Deaktiviere Signatur und Web in Beiträgen',
		'IP_spam_hide_signature_explain' => 'Diese Funktion versteckt die Signatur und persönliche Webseiten Informationen aller Benutzer, die die oben angegebenen Minimalen Beiträge noch nicht erreicht haben. Administratoren bekommen weiterhin die Signatur angezeigt.',

		'IP_spam_post_edit_interval' => 'SPAM - Deaktiviere Beitrag bearbeiten',
		'IP_spam_post_edit_interval_explain' => 'Durch Aktivierung dieser Funktion werden alle Benutzer, die die oben angegebenen Minimalen Beiträge noch nicht erreicht haben, nicht in der Lage sein, ihre Beiträge innerhalb der angegeben Zeit zu ändern.',
		'IP_time_15m' => '15 Minuten',
		'IP_time_30m' => '30 Minuten',
		'IP_time_1h' => '1 Stunde',
		'IP_time_2h' => '2 Stunden',
		'IP_time_6h' => '6 Stunden',
		'IP_time_12h' => '12 Stunden',
		'IP_time_24h' => '24 Stunden',

// TAB - Social networks
		'Enable_Social_Networks_Login' => 'Aktiviere soziales Netzwerk Login (Global Switch)',
		'Enable_Social_Networks_Login_Explain' => 'Erlaube Benutzer das Anmelden und Registrieren mit ihrem bestehenden sozialen Netzwerk Konto.',
		'Facebook_Login_Settings' => 'Facebook Login Einstellungen',
		'Facebook_Login_Settings_explain' => 'Bitte folge diesen Anweisungen, um deine App-ID und App-Secret zu bekommen:<br />- Besuche diese Seite: <a href="https://developers.facebook.com/" target="_blank">Facebook Developers website</a>.<br />- Melde dich mit deinem Facebook Konto an.<br />- Register as a Developer<br />- Erstelle eine neue App.<br />- Deaktiviere "Sandbox-Modus".<br />- Füge deine App Domain hinzu, ohne http/https und ohne www (z.B. icyphoenix.de).<br />- Aktiviere diese Option "Webseite mit Facebook-Anmeldung" und füge deine Website-URL hinzu, mit http/https und mit www (z.B. http://www.icyphoenix.de).<br />- Speichere die Änderungen.<br />- Trage deine App ID und App Secret nachstehend ein.',
		'Enable_Facebook_Login' => 'Aktiviere Facebook Login',
		'Enable_Facebook_Login_explain' => 'Erlaube Benutzer das Anmelden und Registrieren mit ihrem Facebook Konto. Denke daran deine App-Daten (ID/Secret) unten einzutragen.',
		'Facebook_App_ID' => 'App-ID',
		'Facebook_App_Secret' => 'App-Secret',

// TAB - Posting
		'IP_posts_precompiled' => 'Deaktiviere Precompiled Beiträge für Gäste',
		'IP_posts_precompiled_explain' => 'Bei Aktivierung dieser Option, analysiert die viewtopic.php den Beitrags-Text für Gäste, ohne den Precompiled Text zu verwenden (dies ist langsamer, aber kann in manchen Fällen nützlich sein).',

		'IP_read_only_forum' => 'Deaktiviere das Schreiben in allen Foren (NUR LESEN Modus)',
		'IP_read_only_forum_explain' => 'Diese Option sperrt das Schreiben von neuen Beiträgen im Forum komplett, ohne die Berechtigungen ändern zu müssen. Dies kann für eine kurze Zeit recht hilfreich sein, da nur das Lesen erlaubt ist. Administratoren können weiterhin Beiträge schreiben.',

		'IP_allow_drafts' => 'Erlaube Entwürfe',
		'IP_allow_drafts_explain' => 'Erlaubt den Benutzern ihre Beiträge als Entwürfe zu speichern',

		'IP_allow_mods_edit_admin_posts' => 'Erlaube Moderatoren die Bearbeitung von Administrator Beiträgen',
		'IP_allow_mods_edit_admin_posts_explain' => 'Erlaubt Moderatoren die Beiträge von Administratoren zu bearbeiten',

		'IP_forum_limit_edit_time_interval' => 'Zeitspanne zum Ändern begrenzen',
		'IP_forum_limit_edit_time_interval_explain' => 'Diese Einstellung betrifft Benutzer, die ihre eigenen Beiträge bearbeiten dürfen. Trage 0 (NULL) für keine Einschränkungen ein (Funktion muß über die Forum Verwaltung in jedem Forum einzeln aktiviert werden). Diese Einstellung gilt für alle Benutzer, unabhängig der Anzahl ihrer Beiträge, dadurch unterscheidet es sich von der ähnlichen Antispam-Funktion, die nur für Benutzer gilt, die noch nicht die bestimmte Anzahl an Beiträgen erreicht haben.',

		'IP_force_large_caps_mods' => 'Themen-Betreff anpassen',
		'IP_force_large_caps_mods_explain' => 'Der Betreff jedes Themas wird angepasst, indem der erste Buchstabe jedes Wortes groß geschrieben wird. (außer für Admins)',

		'IP_show_new_reply_posting' => 'Vor neuen Antworten-Warn-System',
		'IP_show_new_reply_posting_explain' => 'Wenn du diese Option aktivierst, wird eine Warnung angezeigt, wenn beim Schreiben einer Antwort zwischenzeitlich ein neuer Eintrag gemacht wurde.',

		'IP_no_bump' => 'Verbiete doppelte Beiträge innerhalb von 24 Stunden',
		'IP_no_bump_explain' => 'Bei Aktivierung dieser Option, ist der letzte Poster in einem Thema nicht mehr in der Lage innerhalb von 24 Stunden eine Antwort auf seinen Beitrag zu verfassen. Es sei denn ein anderer Benutzer hat bereits auf seinen Beitrag geantwortet.',
		'MODS_ALLOWED' => 'Moderatoren können schreiben',

		'IP_robots_index_topics_no_replies' => 'Aktiviere Robots Indexierung für Themen ohne Antwort',
		'IP_robots_index_topics_no_replies_explain' => 'Wenn du diese Option aktivierst, werden Themen ohne eine Antwort von Robots NICHT indexiert (noindex), ansonsten werden diese Themen auch indexiert und sind somit in Suchmaschinen auffindbar.',

		'IP_use_jquery_tags' => 'TAGS :: Aktiviere jQuery Tags',
		'IP_use_jquery_tags_explain' => 'Wenn du diese Option aktivierst, können jQuery Themen-Tags beim Schreiben oder Bearbeiten eines Themas verwendet werden (sehr effizient und schöne Tags-Eingabe).',

		'IP_display_tags_box' => 'TAGS :: Themen Tags anzeigen',
		'IP_display_tags_box_explain' => 'Bei Aktivierung dieser Option werden die Themen Tags angezeigt (Tags können zum Indexieren benutzt werden): Tags können nur von Administratoren hinzugefügt oder geändert werden (oder Moderatoren, wenn du die unten stehende Option aktiviert wird) um Spam vorzubeugen.',

		'IP_allow_moderators_edit_tags' => 'TAGS :: Erlaubt Moderatoren Tags zu ändern',
		'IP_allow_moderators_edit_tags_explain' => 'Wenn du diese Option aktivierst, dürfen Moderatoren Tags bearbeiten.',

		'IP_show_topic_description' => 'Aktiviere Beschreibung für Themen',
		'IP_show_topic_description_explain' => 'Bei Aktivierung dieser Option wird die Themen-Beschreibung beim Schreiben eines neuen Themas und in der Forenansicht angezeigt.',

		'IP_edit_notes' => 'Aktiviere Bearbeitungs Anmerkungen',
		'IP_edit_notes_explain' => 'Bei Aktivierung dieser Option, werden die Bearbeitungs Anmerkungen aktiviert',

		'IP_edit_notes_n' => 'maximale Bearbeitungs Anmerkungen',

		'IP_always_show_edit_by' => 'Zeige in Einträgen &quot;Zuletzt bearbeitet von&hellip;&quot;',
		'IP_always_show_edit_by_explain' => 'Wenn du diese Option aktivierst, wird in Einträgen &quot;Zuletzt bearbeitet von&hellip;&quot; in geänderten Nachrichten angezeigt. Änderungen von Admins werden weiterhin nicht angezeigt.',

		'IP_enable_featured_image' => 'Aktiviere Themen Bild',
		'IP_enable_featured_image_explain' => 'Wenn du diese Option aktivierst, können Benutzer ein Bild hochladen, das dann als &quot;Besonderes Bild&quot; im Thema verwendet wird.',

		'IP_show_social_bookmarks' => 'Öffentliche Lesezeichen',
		'IP_show_social_bookmarks_explain' => 'Zeige Öffentliche Lesezeichen bei den Themen',

		'IP_link_this_topic' => 'Verlinke dieses Thema',
		'IP_link_this_topic_explain' => 'Zeigt die &quot;Verlinke dieses Thema&quot; Box beim Lesen eines Themas.',

		'IP_smilies_topic_title' => 'Smilies für Themen-Titel und Beschreibung',
		'IP_smilies_topic_title_explain' => 'Bei Aktivierung dieser Option, werden Smilies für Themen Titel und Themen Beschreibung aktiviert',

		'IP_enable_colorpicker' => 'Aktiviere Farbauswahl bei Einträgen',

		'IP_quote_iterations' => 'Anzahl verschachtelter Zitate',

		'IP_ftr_disable' => 'Deaktivierung des Force Topic Read',
		'IP_ftr_disable_explain' => 'Bei Aktivierung dieser Option, wird der Force Topic Read deaktiviert',

		'IP_disable_html_guests' => 'Deaktiviere HTML Links für Gäste',

		'IP_birthday_viewtopic' => 'Zeige Poster\'s Alter in Themen',

		'IP_switch_poster_info_topic' => 'Zeige Poster\'s Info in Themen (Sprache, Style, etc.)',

		'IP_enable_quick_quote' => 'Aktiviere Schnellzitat',
		'IP_enable_quick_quote_explain' => 'Das Schnellzitat erlaubt den Benutzern mittels eines Klicks einen Beitrag zu zitieren. Diese Funktion verwendet JavaScript. Die Aktivierung kann lange Beiträge zur Folge haben, wenn viele Beiträge mit langen Texten in den Themen vorhanden sind.',

		'IP_allow_html_only_for_admins' => 'Aktiviere HTML nur für Administratoren',
		'IP_allow_html_only_for_admins_explain' => 'Wenn diese Option aktiviert ist, können Administratorer HTML-Tags in Beiträgen verwenden. Bitte beachte, dass diese Funktion bei falscher Verwendung ein Sicherheitsrisiko sein kann bzw. zu falschen Seitendarstellung führen kann.',

		'IP_enable_custom_bbcodes' => 'Aktiviere Benutzerdefinierte BBCodes',
		'IP_enable_custom_bbcodes_explain' => 'Aktiviere die Erstellung von Benutzerdefinierten BBCodes im ACP.',

		'IP_allow_all_bbcode' => 'Aktiviere alle BBCodes',
		'IP_allow_all_bbcode_explain' => 'Bei Aktivierung dieser Option, werden alle BBCodes in der Signatur und anderen Teilen aktiviert, wo sie noch nicht aktiviert sind.',

		'IP_switch_bbcb_active_content' => 'Erlaube BBCode für aktive Inhalte in Beiträgen',
		'IP_switch_bbcb_active_content_explain' => 'Aktiviert BBCode für Flash, Video, Audio Streams, RealMedia und Quicktime.',

// TAB - Images In Posts
		'IP_auth_view_pic_upload' => 'Bilder hochladen beim Beitrag schreiben erlauben',

		'IP_enable_postimage_org' => 'Aktiviere den &quot;Bilder hochladen&quot; Button beim Beitrag erfassen.',

		'IP_gd_version' => 'GD Version:',
		'GD_0' => 'kein GD',
		'GD_1' => 'GD1',
		'GD_2' => 'GD2',

		'IP_show_img_no_gd' => 'Zeige GIF Thumbnails ohne Verwendung der GD Bibliotheken (komplettes Bild wird geladen und dann nur verkleinert angezeigt).',

		'IP_thumbnail_posts' => 'Thumbnails in Beiträgen',
		'IP_thumbnail_posts_explain' => 'Mit dieser Option wird ein Thumbnail anstatt des kompletten Bildes in einem Beitrag angezeigt, wenn der IMG BBCode verwendet wird',

		'IP_show_pic_size_on_thumb' => 'Zeige die Bildgröße in den Thumbnails',

		'IP_thumbnail_highslide' => 'Benutze HighSlide JavaScript für die Bildanzeige wenn Thumbnails aktiviert sind',
		'IP_thumbnail_highslide_explain' => 'Öffnet das Bild vor der aktuellen Seite, ohne ein neues Fenster zu öffnen. Mehr über <a href="http://www.highslide.com/" target="_blank">HighSlide JS&hellip;</a><br />Stelle sicher das du die vorkompilierten Beiträge leerst wenn du hier eine Einstellung verändert hast!',

		'IP_thumbnail_cache' => 'Thumbnails Cache',

		'IP_thumbnail_quality' => 'Thumbnails Qualität (1-100)',

		'IP_thumbnail_size' => 'Thumbnails Größe (in Pixel)',

// TAB - Forum
		'Lang_extend_categories_hierarchy' => 'Kategorien-Hierarchie',

		'Category_attachment' => 'Einfügen in',
		'Category_desc' => 'Beschreibung',
		'Category_config_error_fixed' => 'Ein Fehler in den Kategorie-Einstellungen wurde korrigiert',
		'Attach_forum_wrong' => 'Du kannst kein Forum an ein Forum anfügen',
		'Attach_root_wrong' => 'Du kannst kein Forum an den Foren-Index anfügen',
		'Forum_name_missing' => 'Du kannst kein Forum ohne Namen anlegen',
		'Category_name_missing' => 'Du kannst keine Kategorie ohne Namen anlegen',
		'Only_forum_for_topics' => 'Themen können nur in Foren gefunden werden',
		'Delete_forum_with_attachment_denied' => 'Du kannst keine Foren löschen, die Sub-Level enthalten',

		'Category_delete' => 'Lösche Kategorie',
		'Category_delete_explain' => 'Hier kannst du eine Kategorie löschen und bestimmen, wohin alle darin enthaltenen Foren und Kategorien verschoben werden sollen.',

// forum links type
		'Forum_link_url' => 'Link URL',
		'Forum_link_url_explain' => 'Du kannst hier die URL zu einem Icy Phoenix Prog. setzen oder eine vollständige URL zu einem externen Server',
		'Forum_link_internal' => 'Icy Phoenix Prog',
		'Forum_link_internal_explain' => 'Wähle Ja, wenn du ein Programm aufrufen möchtest, welches im Icy Phoenix Directory liegt',
		'Forum_link_hit_count' => 'Hits Zähler',
		'Forum_link_hit_count_explain' => 'Wähle Ja wenn du möchtest, dass das Board die Klicks zählt und auch darstellt',
		'Forum_link_with_attachment_deny' => 'Du kannst kein Forum als Link definieren, wenn es schon Sub-Level hat',
		'Forum_link_with_topics_deny' => 'Du kannst kein Forum als Link definieren, wenn es schon Themen enthält',
		'Forum_attached_to_link_denied' => 'Du kannst kein Forum oder eine Kategorie einem Forum Link zuordnen',

		'Manage_extend' => 'Einstellungen +',
		'No_subforums' => 'Keine Unterforen',
		'Forum_type' => 'Wähle die Art des Forums',
		'Presets' => 'Voreinstellungen',
		'Refresh' => 'Aktualisieren',
		'Position_after' => 'Positioniere dieses Forum nach',
		'Link_missing' => 'Der Link fehlt',
		'Category_with_topics_deny' => 'Es befinden sich noch Beiträge in diesem Forum. Du kannst es nicht in eine Kategorie umwandeln.',
		'Recursive_attachment' => 'Du kannst ein Forum nicht an das untere Ende seines eigenen Zweiges anhängen (rekursiver Anhang)',
		'Forum_with_attachment_denied' => 'Du kannst keine Kategorie mit Foren zu einem eigenen Forum umwandeln',
		'icon' => 'Icon',
		'icon_explain' => 'Dieses Icon wird vor dem Forumsnamen angezeigt. Du kannst eine direkte URL angeben oder den $image[] Key Eintrag (siehe <i>dein_template</i>/<i>dein_template.cfg</i>).',

// TAB - Calendar
		'Lang_extend_topic_calendar' => 'Themen Kalender',

// TAB - SEO
		'IP_url_rw' => 'URL Rewrite',
		'IP_url_rw_explain' => 'Bei Aktivierung dieser Option wird URL Rewrite für jeden eingeschalten (HTML Links anstelle von PHP, für besseres spidern der Suchrobots).',

		'IP_url_rw_guests' => 'URL Rewrite für Gäste',
		'IP_url_rw_guests_explain' => 'Bei Aktivierung dieser Option, wird URL Rewrite nur für Gäste und Bots aktiviert.',

		'IP_bots_reg_auth' => 'Registrierungserlaubnis für Bots',
		'IP_bots_reg_auth_explain' => 'Wenn diese Option aktiviert wird, ist es möglich das sich Bots registrieren.',

		'IP_lofi_bots' => 'LoFi für Bots',
		'IP_lofi_bots_explain' => 'Bei Aktivierung dieser Option, wird LoFi für die Bots aktiviert.',

		'IP_seo_cyrillic' => 'Kyrillische Zeichen Konvertierung',
		'IP_seo_cyrillic_explain' => 'Wenn diese Option aktiviert wird, werden einige kyrillische Zeichen zu lateinischen Zeichen konvertiert (nicht in den Beiträgen, aber in den Schlüsselwörtern, Tags und dort, wo die clean strings Funktion benutzt wird).',

		'IP_adsense_code' => 'Google AdSense Publisher Code',
		'IP_adsense_code_explain' => 'Füge hier deinen Google AdSense Publisher Code ein und er wird in der Google Suchen Seite eingefügt. Wenn du dies nicht nutzen willst, lasse das Feld einfach leer.',

		'IP_google_analytics' => 'Google Analytics Code',
		'IP_google_analytics_explain' => 'Füge hier deinen Google Analytics Code ein (der Javascript code der von Google zur Verfügung gestellt wird) und dieser wird automatisch im Fuß jeder Seite eingefügt.',

		'IP_google_custom_search' => 'Eigener Code für Google-Suche',
		'IP_google_custom_search_explain' => 'Gib hier deinen eigenen Code für die Google-Suche ein, damit die gsearch.php Funktion (erlaubt den Gästen die Google-Suche, um einige SQL-Abfragen zu sparen) aktiviert wird.',

//Sitemap
		'Sitemap_settings' => 'Sitemap Einstellungen',

		'IP_sitemap_topic_limit' => 'Google Sitemap :: Themen-Limit',
		'IP_sitemap_topic_limit_explain' => 'Maximale Anzahl von Themen, die mit einer einzigen Datenbankabrfage ausgelesen werden',

		'IP_sitemap_announce_priority' => 'Google Sitemap :: Ankündigungspriorität',
		'IP_sitemap_announce_priority_explain' => 'Priorität für Ankündigungen (muss eine Zahl zwischen 0.0 &amp; 1.0 sein)',

		'IP_sitemap_sticky_priority' => 'Google Sitemap :: Wichtig-Priorität',
		'IP_sitemap_sticky_priority_explain' => 'Priorität für Wichtige Themen (muss eine Zahl zwischen 0.0 &amp; 1.0 sein)',

		'IP_sitemap_default_priority' => 'Google Sitemap :: Normal-Priorität',
		'IP_sitemap_default_priority_explain' => 'Priorität für normale Themen (muss eine Zahl zwischen 0.0 &amp; 1.0 sein)',

		'IP_sitemap_sort' => 'Google Sitemap :: Sortierordnung',
		'IP_sitemap_new_first' => 'Neue Beiträge zuerst',
		'IP_sitemap_old_first' => 'Alte Beiträge zuerst',

//Tags
		'IP_word_graph_max_words' => 'TAGS :: Maximale Wörter',
		'IP_word_graph_max_words_explain' => 'Wähle die max. Anzahl an Wörtern die angezeigt werden. Eine hohe Zahl könnte den Server belasten. Der empfohlene Wert ist 250.',

		'IP_word_graph_word_counts' => 'TAGS :: Aktiviere Wort Zählungen',
		'IP_word_graph_word_counts_explain' => 'Die Gesamtzahl der Wörter wird neben jedem Wort angezeigt, wie z.B. <b>Icy Phoenix (365)</b>?',

		'IP_forum_wordgraph' => 'TAGS :: Forum Wortdiagramm',
		'IP_forum_wordgraph_explain' => 'Dieses Feature aktiviert ein forumbasierendes Wortdiagramm am Ende jedes Forums',

		'IP_forum_tags_type' => 'TAGS :: Forum Tags Type',
		'IP_forum_tags_type_explain' => 'Du kannst auswählen, ob der Wordgraph (Wörter von der Search-Tabelle) oder Tags (Tags die in den Themen angegeben wurden) angezeigt werden.',
		'IP_forum_tags_type_tags' => 'Tags',
		'IP_forum_tags_type_wordgraph' => 'Wordgraph',

		'Similar_topics' => 'Ähnliche Themen',
		'Similar_topics_explain' => 'Auf dieser Seite kannst du die Konfiguration für die Ähnlichen Themen vornehmen.',

		'IP_similar_topics' => 'Ähnliche Themen :: Ähnliche Themen aktivieren',
		'IP_similar_topics_explain' => 'Dies ist der Hauptschalter für Ähnliche Themen. Wenn du diese Funktion nutzen möchtest, musst du in dem jeweiligen Forum (Forum-Verwaltung) auch die Ähnliche Themen-Box aktivieren.',

		'IP_similar_topics_desc' => 'Ähnliche Themen :: Auf dieser Seite kannst du die Konfiguration für die Ähnlichen Themen vornehmen.',

		'IP_similar_stopwords' => 'Ähnliche Themen :: Auszuschließende Stop-Wörter',

		'IP_similar_max_topics' => 'Ähnliche Themen :: Maximale Menge der anzuzeigenden Themen',

		'IP_similar_sort_type' => 'Ähnliche Themen :: Sortiere nach',
		'IP_similar_sort_type_explain' => 'Wähle Sortierung der Ähnlichen Themen',
		'IP_similar_sort_type_time' => 'Beitragszeit',
		'IP_similar_sort_type_relev' => 'Bedeutung',

		'IP_similar_ignore_forums_ids' => 'Ähnliche Themen :: ignorierte Foren',
		'IP_similar_ignore_forums_ids_explain' => 'Gib die IDs der Foren an, in denen Ähnliche Themen ignoriert werden (zum Beispiel test forum, forum für talk, etc.). Eine ID pro Zeile.',

// TAB - Logging And Security
		'IP_ip_admins_only' => 'IP Adressen nur Admins anzeigen',
		'IP_ip_admins_only_explain' => 'Bei Aktivierung dieser Option werden die IP Adressen der Benutzer in den jeweiligen Foren und Profilen nur den Administratoren angezeigt (durch Deaktivierung dieser Option können auch Moderatoren die IPs sehen).',

		'IP_db_log_actions' => 'Aktiviere DB Aktionen Log',
		'IP_db_log_actions_explain' => 'Bei Aktivierung dieser Option werden alle Aktionen, die die DB ändern, in der Datenbank gespeichert. Wurde diese Option in der constans.php als &quot;true&quot; gesetzt, so kann sie nicht durch das ACP abgeschaltet werden. Willst du noch zusätzlich alle Fehler gespeichert haben, werden diese in einer extra Datei gesichert.',

		'IP_mg_log_actions' => 'Aktiviere TXT Actions Log',
		'IP_mg_log_actions_explain' => 'Aktiviere diese Option und es wird jede Aktion, die die DB ändert, in einer Textdatei auf unter dem Benutzer gespeichert (Datei wird im LOGS Ordner gespeichert). Diese Datei ist nicht einfach zu lesen, aber es kann unter bestimmten Bedingungen nützlich sein. Aktiviere es nur, wenn du weißt was du machst (die Seite kann nach der Aktivierung langsamer sein).',

		'IP_write_errors_log' => 'Aktivere Fehler Log',
		'IP_write_errors_log_explain' => 'Bei Aktivierung dieser Option werden alle Fehler für jeden Tag einzeln in einem Textdokument gespeichert.',

		'IP_write_digests_log' => 'Aktiviere Digests Log',
		'IP_write_digests_log_explain' => 'Bei Aktivierung dieser Option werden alle versandten Digests für jeden Tag einzeln in einem Textdokument gespeichert.',

		'IP_logs_path' => 'Pfad für Logs (setze für diesen Ordner CHMOD 0777)',
		'IP_logs_path_explain' => 'Gib hier den Pfad für die Fehler und andere Logs, relativ zum Forenpfad, ohne Slash am Ende ein. Zum Beispiel: <b>logs</b>.',

// TAB - Cron
		'IP_cron_global_switch' => 'Aktiviere PHP Cron [Globale Einstellung]',
		'IP_cron_global_switch_explain' => 'Bei Aktivierung dieser Option wird der PHP-basierende Cron aktiviert: einige automatische Arbeiten werden in bestimmten Intervallen ausgeführt. Der optimale Zeitabstand für jeden Cron hängt von der Auslastung und den Einstellungen der Seite ab: Wenn du nicht weißt was diese Einstellungen bedeuten, dann lass diese Funktion deaktiviert, denn du wirst sie wahrscheinlich nicht benötigen.',

		'IP_cron_digests_interval' => 'Digests PHP Cron',
		'IP_cron_digests_interval_explain' => 'Diese Feature aktiviert eine PHP Emulation des CRON um die E-Mails einmal pro Stunde zu senden. Aber da es PHP Emulation basierend ist, kann es nicht immer exakt ausgeführt werden. Das bedeutet, dass die E-Mails manchmal nicht gesendet werden. Wenn dein Server CRON unterstützt dann nutze den CRON deines Server anstelle dieser Feature.<br /><br /><b>Last run: ' . (($config['cron_digests_last_run'] == 0) ? 'NEVER' : create_date('d M Y  - H.i.s', ($config['cron_digests_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_birthdays_interval' => 'Geburtstags PHP Cron',
		'IP_cron_birthdays_interval_explain' => 'Diese Feature aktiviert eine PHP Emulation des CRON um zu versuchen, die Glückwünsche zum Geburtstag per E-Mail zu versenden. Da es PHP Emulation basierend ist, kann es nicht immer exakt ausgeführt werden. Das bedeutet, dass die E-Mails manchmal nicht gesendet werden.<br /><br /><b>Last run: ' . (($config['cron_birthdays_last_run'] == 0) ? 'NEVER' : create_date('d M Y  - H.i.s', ($config['cron_birthdays_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_files_interval' => 'Dateiausführungs Cron Intervall',
		'IP_cron_files_interval_explain' => 'Diese Art von Cron wird von dir bestimmte Dateien automatisch ausführen in dem Intervall das du bestimmst. Die Dateien die ausgeführt werden sollen müssen in <b>constants.php</b> &raquo; <b>define(\'CRON_FILES\', \'\');</b> definiert sein. Bei mehrere Dateien müssen diese mit einem Komma getrennt werden.<br /><br /><b>Letzte Ausführung: ' . (($config['cron_files_last_run'] == 0) ? 'Niemals' : create_date('d M Y H:i:s', ($config['cron_files_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_database_interval' => 'DB Optimierungs Cron Intervall',
		'IP_cron_database_interval_explain' => 'Diese Funktion wird deine Datenbank in dem von dir bestimmten Intervall optimieren.<br /><br /><b>Letzte Ausführung: ' . (($config['cron_database_last_run'] == 0) ? 'Niemals' : create_date('d M Y H:i:s', ($config['cron_database_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_cache_interval' => 'Templates Cache Cron Intervall',
		'IP_cron_cache_interval_explain' => 'Der Template Cache wird in diesem Intervall gelöscht.<br /><br /><b>Letzte Ausführung: ' . (($config['cron_cache_last_run'] == 0) ? 'Niemals' : create_date('d M Y H:i:s', ($config['cron_cache_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_sql_interval' => 'SQL Cache Cron Intervall',
		'IP_cron_sql_interval_explain' => 'Der SQL Cache wird in diesem Intervall gelöscht.<br /><br /><b>Letzte Ausführung: ' . (($config['cron_sql_last_run'] == 0) ? 'Niemals' : create_date('d M Y H:i:s', ($config['cron_sql_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_users_interval' => 'Benutzer Cache Cron Intervall',
		'IP_cron_users_interval_explain' => 'Der Benutzer Cache wird in diesem Intervall gelöscht.<br /><br /><b>Letzte Ausführung: ' . (($config['cron_users_last_run'] == 0) ? 'Niemals' : create_date('d M Y H:i:s', ($config['cron_users_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_topics_interval' => 'Themen Cache Cron Intervall',
		'IP_cron_topics_interval_explain' => 'Der Themen Cache wird in diesem Intervall gelöscht.<br /><br /><b>Letzte Ausführung: ' . (($config['cron_topics_last_run'] == 0) ? 'Niemals' : create_date('d M Y H:i:s', ($config['cron_topics_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_sessions_interval' => 'Sessions-Säuberung Cron Intervall',
		'IP_cron_sessions_interval_explain' => 'Sessions Tabellen werden in diesem Intervall geleert.<br /><br /><b>Letzte Ausführung: ' . (($config['cron_sessions_last_run'] == 0) ? 'Niemals' : create_date('d M Y H:i:s', ($config['cron_sessions_last_run']), $config['board_timezone'])) . '</b>',

		'Cron_Disabled' => 'Deaktiviert',
		'Cron_Server' => 'Server Cron',
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


// lang_extend_settings.php
		'Lang_extend_settings' => 'Icy Phoenix Einstellungen',
		'Configuration_extend' => 'Kalender &amp; Unterforen',
		'Override_user_choices' => 'Benutzereinstellungen überschreiben',
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
	'List' => 'Liste',
	'Medium' => 'Mittel',
	'Full' => 'Komprimiert',
	'Split_categories' => 'Kategorien im Index aufteilen:',
	'Use_last_topic_title' => 'Zeige die Titel der letzten Themen im Index:',
	'Last_topic_title_length' => 'Titellänge des letzten Themas im Index:',
	'Sub_level_links' => 'Unterforenlinks im Index:',
	'Sub_level_links_explain' => 'Füge Links zu den Unterforen in der Forum oder Kategorie Beschreibung hinzu.',
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
	'Calendar_header_cells' => 'Anzahl der Zellen die im Board Header angezeigt werden (0 für keine Anzeige)',
	'Calendar_title_length' => 'Länge des Titels welcher in den Kalender Zellen angezeigt wird',
	'Calendar_text_length' => 'Länge des Textes, welcher im Übersichtsfenster angezeigt wird',
	'Calendar_block_display' => 'Zeige die Kalender Reihe im Board Index',
	'Calendar_display_open' => 'Zeige die Kalender Reihe im Forum Index geöffnet (Wenn Kalender Reihen aktiviert sind)',
	'Calendar_nb_row' => 'Anzahl der Reihen pro Tag im Board Header',
	'Calendar_birthday' => 'Zeige Geburtstage im Kalender an',
	'Calendar_forum' => 'Den Namen des Forums unter dem Thematitel im Planer anzeigen',

	'Sorry_auth_cal' => 'Nur %s kann in diesem Forum Termine in den Kalender eintragen.',
	'Date_error' => 'Tag %d, Monat %d, Jahr %d ist kein gültiges Datum',

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