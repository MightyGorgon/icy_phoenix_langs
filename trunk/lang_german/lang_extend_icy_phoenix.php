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
* TheSteffen, KugeLSichA, Tom
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	die('Hacking attempt');
}

$lang['10_Main_Settings_Icy_Phoenix'] = 'Icy Phoenix';
$lang['20_SQL_Charge'] = 'SQL Optimierung';
$lang['30_Posting'] = 'Beiträge und Mitteilungen';
$lang['40_IMG_Posting'] = 'Bilder in Beiträgen';
$lang['50_Hierarchy_setting'] = 'Forum';
$lang['60_Calendar_settings'] = 'Kalender';
$lang['70_SEO'] = 'SEO';

// admin part
if ( $lang_extend_admin )
{
	$lang['Lang_extend_icy_phoenix'] = 'Icy Phoenix';

	// TAB - Icy Phoenix
	$lang['IP_enable_xs_version_check'] = 'Aktiviere Icy Phoenix Versions Überprüfung';
	$lang['IP_enable_xs_version_check_explain'] = 'Bei Aktivierung dieser Option wird bei jedem ACP Besuch überprüft ob eine neuere Icy Phoenix Version zum Download verfügbar ist. Die Deaktivierung dieser Option kann das Laden des ACPs etwas erhöhen. Wie auch immer, beachte das diese Überprüfung nur einmal am Tag stattfindet und dann im Cache abgelegt wird.';

	$lang['IP_disable_email_error'] = 'Deaktiviere Fehlermeldungen beim E-Mail versenden';

	$lang['IP_html_email'] = 'HTML E-Mail';
	$lang['IP_html_email_explain'] = 'Bei Aktivierung dieser Option, werden HTML E-Mails aktiviert, andernfalls werden sie in reinem Text Format gesendet';

	$lang['IP_enable_digests'] = 'Aktiviere Digests';

	$lang['IP_digests_php_cron'] = 'Aktiviere Digest PHP Cron';
	$lang['IP_digests_php_cron_explain'] = 'Diese Eigenschaft ermöglicht einer PHP-Emulation des CRON, dieses versucht die E-Mails einmal pro Stunde zu senden. Da es auf einer PHP-Emulation basiert, kann es möglicherweise nicht jedesmal richtig durchgeführt werden. Dies heißt, dass manchmal E-Mails möglicherweise nicht gesendet werden können. Wenn du CRON auf deinem Server ermöglichen kannst, dann verwende diese Möglichkeit stattdessen.';

	$lang['IP_emails_only_to_admins'] = 'E-Mails nur zu Admins';
	$lang['IP_emails_only_to_admins_explain'] = 'Erlaube dem E-Mail System nur E-Mails an Admins zu senden';

	$lang['IP_ajax_features'] = 'Aktiviere AJAX Funktionen';
	$lang['IP_ajax_features_explain'] = 'Einige AJAX Funktionen in die Seite integrieren';

	$lang['IP_ajax_checks_register'] = 'AJAX Überprüfung während der Registrierung';
	$lang['IP_ajax_checks_register_explain'] = 'Bei Aktivierung dieser Option, werden einige Echtzeitüberprüfungen ausgeführt, wenn einige Felder auf der Registrierungs-Seite ausgefüllt werden (Achtung: Diese Option kann die Registrierungs-Seite etwas verlangsamen).';

	$lang['IP_inactive_users_memberlists'] = 'Inaktive Benutzer in der Mitgliederliste und Geburtstags\' Block';
	$lang['IP_inactive_users_memberlists_explain'] = 'Bei Aktivierung dieser Option, werden inaktive Benutzer in der Mitgliederliste und Geburtstags\' Block angezeigt.';

	$lang['IP_page_gen'] = 'Zeige Seiten Generierungs Zeit im Footer';

	$lang['IP_switch_header_dropdown'] = 'Aktiviere Dropdown Menu im Header';
	$lang['IP_switch_header_dropdown_explain'] = 'Dies aktiviert ein Dropdown Menu im Header für die Suche und für die Beiträge';

	$lang['IP_show_alpha_bar'] = 'Zeige alphabetische Sortierleiste in der Forum-Ansicht';
	$lang['IP_show_alpha_bar_explain'] = 'Diese Option zeigt in der Forum-Ansicht (viewforum.php) eine Leiste, um die Themen alphabetisch sortieren lassen zu können.';

	$lang['IP_show_rss_forum_icon'] = 'Forum Index Icons';
	$lang['IP_show_rss_forum_icon_explain'] = 'Diese Option zeigt Icons rechts von jedem Forumtitel an (im Forum Index): RSS, New Topic...';

	$lang['IP_allow_mods_view_self'] = 'Erlaube allen Moderatoren die SELF AUTH Themen anzuzeigen';
	$lang['IP_allow_mods_view_self_explain'] = 'Wenn ein Forum auf SELF AUTH Zugriff gesetzt wurde, können nur Administratoren und Moderatoren die entsprechenden Foren betreten. However there are many features that may show contents of these kind of posts even if not authed: Recent Topics, Search, Recent Messages Blocks, Random Topics Blocks, etc. To prevent this, an extra feature has been coded which doesn\'t allow not authed people to access these topics via secondary ways. Anyway you can allow ALL moderators (not only admins) to view these messages through these secondary ways. If you set this to YES then ALL moderators will be allowed to see the content of these messages through: Recent, Search, Topics related blocks... Unfortunately if you switch this OFF then neither AUTHED moderators may access SELF AUTHED topics through secondary ways. The feature has been coded in this way to save extra SQL charge. If you don\'t use SELF AUTHED forums, then you don\'t need this function as well.';

	$lang['IP_xmas_fx'] = 'Weihnachts Schnee';
	$lang['IP_xmas_fx_explain'] = 'Diese Option aktiviert den Schneefall Effekt.';

	$lang['IP_xmas_gfx'] = 'Weihnachts Grafiken';
	$lang['IP_xmas_gfx_explain'] = 'Bei Aktivierung dieser Option werden Weihnachtsgrafiken angezeigt.';

	$lang['IP_select_theme'] = 'Style Wechsel';
	$lang['IP_select_theme_explain'] = 'Bei Aktivierung dieser Option, wird eine Auswahl Box zum schnellen wechseln aller verfügbaren Styles angezeigt.';

	$lang['IP_select_lang'] = 'Sprach Wechsel';
	$lang['IP_select_lang_explain'] = 'Bei Aktivierung dieser Option, wird eine Auswahl Box zum schnellen wechseln aller verfügbaren Sprachen angezeigt.';

	$lang['IP_cms_dock'] = 'Zeige Apple Style Dock in CMS';

	$lang['IP_cms_style'] = 'CMS in einem moderneren Style anzeigen';
	$lang['IP_cms_style_explain'] = 'Der Moderne Style für das CMS beinhaltet ein neues Layout und eine transparente Navigation die über der CMS Verwaltung angebracht ist, hingegen hat der klassische Style ein seitlich angebrachtes Menü.';

	$lang['IP_mg_log_actions'] = 'Aktiviere TXT Actions Log';
	$lang['IP_mg_log_actions_explain'] = 'Aktiviere diese Option und es wird jede Aktion, die die DB ändert, in einer Textdatei auf unter dem Benutzer gespeichert (Datei wird im LOGS Ordner gespeichert). Diese Datei ist nicht einfach zu lesen, aber es kann unter bestimmten Bedingungen nützlich sein. Aktiviere es nur, wenn du weißt was du machst (die Seite kann nach der Aktivierung langsamer sein).';

	$lang['IP_admin_protect'] = 'Schütze Hauptadmin Account';
	$lang['IP_admin_protect_explain'] = 'Bei Aktivierung dieser Option, wird mehr Sicherheit dem Haupt Admin Account hinzugefügt';

	$lang['IP_split_ga_ann_sticky'] = 'Spaltet Themen nach Typ auf';
	$lang['IP_split_ga_ann_sticky_explain'] = 'Hier kannst du eine Variante auswählen um Themen in der Forum-Ansicht (viewforum.php) entsprechend aufzuteilen';
	$lang['IP_split_topic_0'] = 'Alle Themen Typen zusammen (kein Split)';
	$lang['IP_split_topic_1'] = 'Globale Ankündigungen, Ankündigungen und Wichtige Themen zusammen, Normale Themen werden abgetrennt';
	$lang['IP_split_topic_2'] = 'Globale Ankündigungen werden abgetrennt, Ankündigungen und Wichtige Themen sind zusammen, Normale Themen abgetrennt';
	$lang['IP_split_topic_3'] = 'Alle Themen Typen werden abgetrennt dargestellt';

	$lang['IP_write_errors_log'] = 'Aktivere Fehler Log';
	$lang['IP_write_errors_log_explain'] = 'Bei Aktivierung dieser Option werden alle Fehler für jeden Tag einzeln in einem Textdokument gespeichert.';

	$lang['IP_write_digests_log'] = 'Aktiviere Digests Log';
	$lang['IP_write_digests_log_explain'] = 'Bei Aktivierung dieser Option werden alle versandten Digests für jeden Tag einzeln in eiemn Textdokument gespeichert.';

	$lang['IP_logs_path'] = 'Pfad für Logs (setze für diesen Ordner CHMOD 0777)';
	$lang['IP_logs_path_explain'] = 'Gib hier den Pfad für die Fehler und andere Logs, relativ zum Forenpfad, ohne Slash am Ende ein. Zum Beispiel: <b>logs</b>.';

	// TAB - SQL Charge
	$lang['IP_fast_n_furious'] = 'Fast And Furious';
	$lang['IP_fast_n_furious_explain'] = 'Bei Aktivierung dieser Option, werden einige große SQL Funktionen abgeschaltet in der Hoffnung das deine Seite dadurch schneller wird!';

	$lang['IP_db_cron'] = 'Datenbank Optimierung';
	$lang['IP_db_cron_explain'] = 'Bei Aktivierung dieser Option, wird die Datenbank Optimierung aktiviert';

	$lang['IP_site_history'] = 'Seiten Historie';
	$lang['IP_site_history_explain'] = 'Bei Aktivierung dieser Option, wird die Seiten Historie aktiviert';

	$lang['IP_global_disable_upi2db'] = 'Deaktiviere UPI2DB komplett';
	$lang['IP_global_disable_upi2db_explain'] = 'Mit dieser Option kannst du UPI2DB vollständig abschalten, dadurch sparst du extra Speicherplatz.';

	$lang['IP_enable_own_icons'] = 'Themen-Icon eigener Nachrichten';
	$lang['IP_enable_own_icons_explain'] = 'Aktiviere diese Option und es wird ein anderes Icon für Themen, die eigene Nachrichten enthalten, angezeigt.';

	$lang['IP_show_forums_online_users'] = 'Zeige Online Benutzer im jeweiligen Forum';
	$lang['IP_show_forums_online_users_explain'] = 'Dies aktiviert die Online Benutzer Anzeige für jedes Forum im Index';

	$lang['IP_google_bot_detector'] = 'Aktiviere GoogleBot Erkennung';

	$lang['IP_visit_counter_switch'] = 'Aktiviere Besucher Zähler';

	$lang['IP_enable_new_messages_number'] = 'Zeige die Anzahl der neuen Nachrichten seid dem Letzten Besuch';

	$lang['IP_disable_thanks_topics'] = 'Deaktiviere Bedanken Button in der Themen-Ansicht (viewtopic.php)';

	$lang['IP_show_thanks_profile'] = 'Zeigt "Erhaltene Danksagungen" beim Anschauen eines Profils an';

	$lang['IP_show_thanks_viewtopic'] = 'Zeigt "Erhaltene Danksagungen" beim Lesen von Themen an';

	$lang['IP_disable_topic_view'] = '"Thema angesehen von" deaktivieren';
	$lang['IP_disable_topic_view_explain'] = 'Diese Option deaktiviert "Thema angesehen von"-Funktion (dies reduziert SQL-Platz).';

	$lang['IP_disable_referrers'] = 'Referer deaktivieren';
	$lang['IP_disable_referrers_explain'] = 'Diese Option deaktiviert die Referer Funktion (dies reduziert SQL-Platz).';

	$lang['IP_disable_logins'] = 'Deaktiviere Login Aufzeichnungen';
	$lang['IP_disable_logins_explain'] = 'Bei Aktivierung dieser Option, werden die Logins der Benutzer nicht mehr aufgezeichnet';

	$lang['IP_last_logins_n'] = 'Anzahl der aufzuzeichnenden Logins';

	$lang['IP_index_top_posters'] = 'Top Posters :: Forum Index';
	$lang['IP_index_top_posters_explain'] = 'Bei Aktivierung dieser Option werden alle Top Poster im <b>Forum Index</b> angezeigt.';

	$lang['IP_index_last_msgs'] = 'Letzte Nachrichten :: Forum Index';
	$lang['IP_index_last_msgs_explain'] = 'Bei Aktivierung dieser Option, werden die letzten Nachrichten im <b>Forum Index</b> angezeigt.';

	$lang['IP_online_last_msgs'] = 'Letzte Nachrichten :: Wer ist online';
	$lang['IP_online_last_msgs_explain'] = 'Bei Aktivierung dieser Option, werden die letzten Nachrichten im <b>Wer ist online</b> angezeigt.';

	$lang['IP_last_msgs_n'] = 'Anzahl der letzten Nachrichten die angezeigt werden sollen.';

	$lang['IP_last_msgs_x'] = 'auszuschließende Foren';
	$lang['IP_last_msgs_x_explain'] = 'Bitte, trage hier die IDs der Foren ein die in der Letzte Nachrichten Box ausgeschlossen werden sollen (Du kannst jede Foren ID mit Komma trennen).';

	$lang['IP_show_chat_online'] = 'AJAX Chat Online :: Forum Index';
	$lang['IP_show_chat_online_explain'] = 'Aktiviere diese Option um im <b>Forum Index</b> die online Benutzer zu zeigen, die im AJAX Chat sind.';

	$lang['IP_index_shoutbox'] = 'Shoutbox :: Forum Index';
	$lang['IP_index_shoutbox_explain'] = 'Bei Aktivierung dieser Option, wird die Shoutbox im <b>Forum Index</b> angezeigt.';

	$lang['IP_online_shoutbox'] = 'Shoutbox :: Wer ist online';
	$lang['IP_online_shoutbox_explain'] = 'Bei Aktivierung dieser Option, wird die Shoutbox im <b>Wer ist online</b> angezeigt.';

	$lang['IP_img_shoutbox'] = 'Deaktiviere [img][/img] BBCode in der Shoutbox';
	$lang['IP_img_shoutbox_explain'] = 'Bei Aktivierung dieser Option, wird der [img][/img] BBCode in der Shoutbox deaktiviert.';

	$lang['IP_index_links'] = 'Links :: Forum Index';
	$lang['IP_index_links_explain'] = 'Bei Aktivierung dieser Option, werden Links im <b>Forum Index</b> aktiviert.';

	$lang['IP_index_birthday'] = 'Birthday :: Forum Index';
	$lang['IP_index_birthday_explain'] = 'Bei Aktivierung dieser Option, werden die Geburtstage im <b>Forum Index</b> aktiviert.';

	$lang['IP_show_random_quote'] = 'Zufallszitat :: Forum Index';
	$lang['IP_show_random_quote_explain'] = 'Bei Aktivierung dieser Option, werden die Zufallszitate im <b>Forum Index</b> angezeigt.';

	// TAB - Posting
	$lang['IP_posts_precompiled'] = 'Deaktiviere precompiled Beiträge';
	$lang['IP_posts_precompiled_explain'] = 'Bei Aktivierung dieser Option, kompiliert die viewtopic.php den Beitrags Text, ohne den precompiled Text zu verwenden (dies ist langsamer, aber kann in manchen Fällen nützlich sein).';

	$lang['IP_allow_drafts'] = 'Erlaube Entwürfe';
	$lang['IP_allow_drafts_explain'] = 'Erlaubt den Benutzern ihre Beiträge als Entwürfe zu speichern';

	$lang['IP_allow_mods_edit_admin_posts'] = 'Erlaube Moderatoren die Bearbeitung von Administrator Beiträgen';
	$lang['IP_allow_mods_edit_admin_posts_explain'] = 'Erlaubt Moderatoren die Beiträge von Administratoren zu bearbeiten';

	$lang['IP_force_large_caps_mods'] = 'Passender Betreff';
	$lang['IP_force_large_caps_mods_explain'] = 'Der Themen-Betreff wird zu einem passenden Betreff für alle Benutzer außer Admins umgewandelt';

	$lang['IP_show_new_reply_posting'] = 'Vor neuen Antworten warnen';
	$lang['IP_show_new_reply_posting_explain'] = 'Wenn du diese Option aktivierst, wird eine Warnung angezeigt, wenn beim Schreiben einer Antwort zwischenzeitlich ein neuer Eintrag gemacht wurde.';

	$lang['IP_no_bump'] = 'Verbiete doppelte Beiträge innerhalb von 24 Stunden';
	$lang['IP_no_bump_explain'] = 'Bei Aktivierung dieser Option, ist der letzte Poster in einem Thema nicht mehr in der Lage innerhalb von 24 Stunden eine Antwort auf seinen Beitrag zu verfassen. Es sei denn ein anderer Benutzer hat bereits auf seinen Beitrag geantwortet.';

	$lang['IP_edit_notes'] = 'Aktiviere Bearbeitungs Anmerkungen';
	$lang['IP_edit_notes_explain'] = 'Bei Aktivierung dieser Option, werden die Bearbeitungs Anmerkungen aktiviert';

	$lang['IP_edit_notes_n'] = 'maximale Bearbeitungs Anmerkungen';

	$lang['IP_always_show_edit_by'] = 'Zeige in Einträgen editiert von';
	$lang['IP_always_show_edit_by_explain'] = 'Wenn du diese Option aktivierst, wird in Einträgen  "Zuletzt editiert von..." in geänderten Nachrichten angezeigt. Änderungen von Admins werden weiterhin nicht angezeigt.';

	$lang['IP_show_social_bookmarks'] = 'Öffentliche Lesezeichen';
	$lang['IP_show_social_bookmarks_explain'] = 'Zeige Öffentliche Lesezeichen bei den Themen';

	$lang['IP_link_this_topic'] = 'Verlinke dieses Thema';
	$lang['IP_link_this_topic_explain'] = 'Zeigt die "Verlinke dieses Thema" Box beim Lesen eines Themas.';

	$lang['IP_smilies_topic_title'] = 'Smilies für Themen Titel und Beschreibung';
	$lang['IP_smilies_topic_title_explain'] = 'Bei Aktivierung dieser Option, werden Smilies für Themen Titel und Themen Beschreibung aktiviert';

	$lang['IP_enable_colorpicker'] = 'Aktiviere Farbauswahl bei Einträgen';

	$lang['IP_quote_iterations'] = 'Anzahl verschachtelter Zitate';

	$lang['IP_disable_ftr'] = 'Komplette Deaktivierung des Force Topic Read';
	$lang['IP_disable_ftr_explain'] = 'Bei Aktivierung dieser Option, wird der Force Topic Read komplett abgeschaltet';

	$lang['IP_disable_html_guests'] = 'Deaktiviere HTML Links für Gäste';

	$lang['IP_birthday_viewtopic'] = 'Zeige Poster\'s Alter in Themen';

	$lang['IP_switch_poster_info_topic'] = 'Zeige Poster\'s Info in Themen (Sprache, Style, etc.)';

	$lang['IP_enable_quick_quote'] = 'Aktiviere Schnellzitat';
	$lang['IP_enable_quick_quote_explain'] = 'Das Schnellzitat erlaubt den Benutzern mittels eines Klicks einen Beitrag zu zitieren. Dieses Funktion verwendet Javascript. Die Aktivierung kann lange Beiträge zur Folge haben, wenn viele Beiträge mit langen Texten in den Themen vorhanden sind.';

	$lang['IP_allow_all_bbcode'] = 'Aktiviere alle BBCodes';
	$lang['IP_allow_all_bbcode_explain'] = 'Bei Aktivierung dieser Option, werden alle BBCodes in der Signatur und anderen Teilen aktiviert, wo sie noch nicht aktiviert sind.';

	$lang['IP_switch_bbcb_active_content'] = 'Erlaube BBCode für aktive Inhalte in Beiträgen';
	$lang['IP_switch_bbcb_active_content_explain'] = 'Aktiviert BBCode für Flash, Video, Audio Streams, RealMedia und Quicktime.';

	// TAB - Images In Posts
	$lang['IP_auth_view_pic_upload'] = 'Bilder hochladen Erlaubnis (Post Icy Images)';

	$lang['IP_enable_postimage_org'] = 'Aktiviere "PostImage" Button beim Beitrag erfassen';

	$lang['IP_gd_version'] = 'GD Version:';
	$lang['GD_0'] = 'kein GD';
	$lang['GD_1'] = 'GD1';
	$lang['GD_2'] = 'GD2';

	$lang['IP_show_img_no_gd'] = 'Zeige GIF thumbnails ohne Verwendung der GD Bibliotheken (komplettes Bld wird geladen und dann nur verkleinert angezeigt).';

	$lang['IP_thumbnail_posts'] = 'Thumbnails in Beiträgen';
	$lang['IP_thumbnail_posts_explain'] = 'Mit dieser Option wird ein Thumbnail anstatt des kompletten Bildes in einem Beitrag angezeigt, wenn der IMG BBCode verwendet wird';

	$lang['IP_show_pic_size_on_thumb'] = 'Zeige die Bildgröße in den Thumbnails';

	$lang['IP_thumbnail_lightbox'] = 'Benutze Lightbox JavaScript wenn Thumbnails aktiviert sind';
	$lang['IP_thumbnail_lightbox_explain'] = 'Öffnet das Bild vor der aktuellen Seite, ohne ein neues Fenster zu öffnen. Mehr über <a href="http://www.huddletogether.com/projects/lightbox/" target="_blank">Lightbox JS...</a><br />Stelle sicher das du die vorkompilierten Beiträge leerst wenn du hier eine Einstellung verändert hast!';

	$lang['IP_thumbnail_cache'] = 'Thumbnails Cache';

	$lang['IP_thumbnail_quality'] = 'Thumbnails Qualität (1-100)';

	$lang['IP_thumbnail_size'] = 'Thumbnails Größe (in Pixel)';

	// TAB - Forum
	$lang['Lang_extend_categories_hierarchy'] = 'Kategorien-Hierarchie';

	$lang['Category_attachment'] = 'Angefügt an';
	$lang['Category_desc'] = 'Beschreibung';
	$lang['Category_config_error_fixed'] = 'Ein Fehler in den Kategorie-Einstellungen wurde korrigiert';
	$lang['Attach_forum_wrong'] = 'Du kannst kein Forum an ein Forum anfügen';
	$lang['Attach_root_wrong'] = 'Du kannst kein Forum an den Foren-Index anfügen';
	$lang['Forum_name_missing'] = 'Du kannst kein Forum ohne Namen anlegen';
	$lang['Category_name_missing'] = 'Du kannst keine Kategorie ohne Namen anlegen';
	$lang['Only_forum_for_topics'] = 'Themen können nur in Foren gefunden werden';
	$lang['Delete_forum_with_attachment_denied'] = 'Du kannst keine Foren löschen, die Sub-Level enthalten';

	$lang['Category_delete'] = 'Lösche Kategorie';
	$lang['Category_delete_explain'] = 'Hier kannst Du eine Kategorie löschen und bestimmen, wohin alle darin enthaltenen Foren und Kategorien verschoben werden sollen.';

	// forum links type
	$lang['Forum_link_url'] = 'Link URL';
	$lang['Forum_link_url_explain'] = 'Du kannst hier die URL zu einem phpBB Prog. setzen oder eine vollständige URL zu einem externen Server';
	$lang['Forum_link_internal'] = 'phpBB Prog';
	$lang['Forum_link_internal_explain'] = 'Wähle Ja, wenn Du ein Programm aufrufen möchtest, welches im phpBB Directory liegt';
	$lang['Forum_link_hit_count'] = 'Hits Zähler';
	$lang['Forum_link_hit_count_explain'] = 'Wähle Ja wenn Du möchtest, das das Board die Klicks zählt und auch darstellt';
	$lang['Forum_link_with_attachment_deny'] = 'Du kannst kein Forum als Link definieren, wenn es schon Sub-Level hat';
	$lang['Forum_link_with_topics_deny'] = 'Du kannst kein Forum als Link definieren, wenn es schon Themen enthält';
	$lang['Forum_attached_to_link_denied'] = 'Du kannst kein Forum oder eine Kategorie einem Forum Link zuordnen';

	$lang['Manage_extend'] = 'Einstellungen +';
	$lang['No_subforums'] = 'Keine Unterforen';
	$lang['Forum_type'] = 'Wähle die Art des Forums';
	$lang['Presets'] = 'Voreinstellungen';
	$lang['Refresh'] = 'Aktualisieren';
	$lang['Position_after'] = 'Positioniere dieses Forum nach';
	$lang['Link_missing'] = 'Der Link fehlt';
	$lang['Category_with_topics_deny'] = 'Es befinden sich noch Beiträge in diesem Forum. Du kannst es nicht in eine Kategorie umwandeln.';
	$lang['Recursive_attachment'] = 'Du kannst ein Forum nicht an das untere Ende seines eigenen Zweiges anhängen (rekursiver Anhang)';
	$lang['Forum_with_attachment_denied'] = 'Du kannst keine Kategorie mit Foren zu einem eigenen Forum umwandeln';
	$lang['icon'] = 'Icon';
	$lang['icon_explain'] = 'Dieses Icon wird vor dem Forumsnamen angezeigt. Du kannst eine direkte URL angeben oder den $image[] Key Eintrag (siehe <i>dein_template</i>/<i>dein_template.cfg</i>).';

	// TAB - Calendar
	$lang['Lang_extend_topic_calendar'] = 'Topic Kalender';

	// TAB - SEO
	$lang['IP_url_rw'] = 'URL Rewrite';
	$lang['IP_url_rw_explain'] = 'Bei Aktivierung dieser Option wird URL Rewrite für jeden eingeschalten (HTML Links anstelle von PHP, für besseres spidern der Suchrobots).';

	$lang['IP_url_rw_guests'] = 'URL Rewrite für Gäste';
	$lang['IP_url_rw_guests_explain'] = 'Bei Aktivierung dieser Option, wird URL Rewrite nur für Gäste und Bots aktiviert.';

	$lang['IP_lofi_bots'] = 'LoFi für Bots';
	$lang['IP_lofi_bots_explain'] = 'Bei Aktivierung dieser Option, wird LoFi für die Bots aktiviert.';

	//Sitemap
	$lang['Sitemap_settings'] = 'Sitemap Einstellungen';

	$lang['IP_sitemap_topic_limit'] = 'Google Sitemap :: Themen-Limit';
	$lang['IP_sitemap_topic_limit_explain'] = 'Maximale Anzahl von Themen, die mit einer einzigen Datenbankabrfage ausgelesen werden';

	$lang['IP_sitemap_announce_priority'] = 'Google Sitemap :: Ankündigungspriorität';
	$lang['IP_sitemap_announce_priority_explain'] = 'Priorität für Ankündigungen (muss eine Zahl zwischen 0.0 &amp; 1.0 sein)';

	$lang['IP_sitemap_sticky_priority'] = 'Google Sitemap :: Wichtig-Priorität';
	$lang['IP_sitemap_sticky_priority_explain'] = 'Priorität für Wichtige Themen (muss eine Zahl zwischen 0.0 &amp; 1.0 sein)';

	$lang['IP_sitemap_default_priority'] = 'Google Sitemap :: Normal-Priorität';
	$lang['IP_sitemap_default_priority_explain'] = 'Priorität für normale Themen (muss eine Zahl zwischen 0.0 &amp; 1.0 sein)';

	$lang['IP_sitemap_sort'] = 'Google Sitemap :: Sortierordnung';
	$lang['IP_sitemap_new_first'] = 'Neue Beiträge zuerst';
	$lang['IP_sitemap_old_first'] = 'Alte Beiträge zuerst';

	$lang['Word_graph'] = 'TAGS';

	$lang['IP_word_graph_max_words'] = 'TAGS :: Maximale Wörter';
	$lang['IP_word_graph_max_words_explain'] = 'Wähle die max. Anzahl an Wörtern die angezeigt werden. Eine hohe Zahl könnte den Server belasten. Der empfohlene Wert ist 250.';

	$lang['IP_word_graph_word_counts'] = 'TAGS :: Aktiviere Wort Zählungen';
	$lang['IP_word_graph_word_counts_explain'] = 'Die Gesamtzahl der Wörter wird neben jedem Wort angezeigt, wie z.B. <b>Icy Phoenix (365)</b>?';

	$lang['IP_forum_wordgraph'] = 'TAGS :: Forum Wortdiagramm';
	$lang['IP_forum_wordgraph_explain'] = 'Dieses Feature aktiviert ein forumbasierendes Wortdiagramm am Ende jedes Forums';

	$lang['Similar_topics'] = 'Ähnliche Themen';
	$lang['Similar_topics_explain'] = 'Auf dieser Seite kannst du die Konfiguration für die Ähnlichen Themen vornehmen.';

	$lang['IP_similar_topics'] = 'Ähnliche Themen :: Ähnliche Themen aktivieren';

	$lang['IP_similar_topics_desc'] = 'Ähnliche Themen :: Auf dieser Seite kannst du die Konfiguration für die Ähnlichen Themen vornehmen.';

	$lang['IP_similar_stopwords'] = 'Ähnliche Themen :: Auszuschließende Stop-Wörter';

	$lang['IP_similar_max_topics'] = 'Ähnliche Themen :: Maximale Menge der anzuzeigenden Themen';

	$lang['IP_similar_sort_type'] = 'Ähnliche Themen :: Sortiere nach';
	$lang['IP_similar_sort_type_explain'] = 'Wähle Sortierung der Ähnlichen Themen';
	$lang['IP_similar_sort_type_time'] = 'Beitragszeit';
	$lang['IP_similar_sort_type_relev'] = 'Bedeutung';

	$lang['IP_similar_ignore_forums_ids'] = 'Ähnliche Themen :: ignorierte Foren';
	$lang['IP_similar_ignore_forums_ids_explain'] = 'Gib die IDs der Foren an, in denen Ähnliche Themen ignoriert werden (zum Beispiel test forum, forum für talk, etc.). Eine ID pro Zeile.';


	// lang_extend_mods_settings.php
	$lang['Lang_extend_mods_settings'] = 'Mods settings Sprach-Pack';
	$lang['Configuration_extend'] = 'Kalender &amp; Subforen';
	$lang['Override_user_choices'] = 'Benutzereinstellungen überschreiben';
}

$lang['CFG_NONE'] = 'NONE';
$lang['CFG_ALL'] = 'ALL';
$lang['CFG_REG'] = 'REG';
$lang['CFG_SELF'] = 'SELF';
$lang['CFG_PRIVATE'] = 'PRIVATE';
$lang['CFG_MOD'] = 'MOD';
$lang['CFG_ADMIN'] = 'ADMIN';

// lang_extend_categories_hierarchy.php - BEGIN
$lang['Hierarchy_setting'] = 'Kategorie Hierarchie Einstellungen';
$lang['Forum_link'] = 'Link Weiterleitung';
$lang['Forum_link_visited'] = 'Dieser Link wurde %d mal besucht';
$lang['Redirect'] = 'Weiterleiten';
$lang['Redirect_to'] = 'Wenn Dein Browser keine META Weiterleitung unterstützt klicke bitte %shier%';

$lang['Use_sub_forum'] = 'Unterforen Anzeige (Komprimierung):';
$lang['Index_packing_explain'] = 'Gibt an, wie die Unterforen im Index angezeigt werden.';
$lang['Medium'] = 'Mittel';
$lang['Full'] = 'Komprimiert';
$lang['Split_categories'] = 'Kategorien im Index aufteilen:';
$lang['Use_last_topic_title'] = 'Zeige die Titel der letzten Themen im Index:';
$lang['Last_topic_title_length'] = 'Titellänge des letzten Themas im Index:';
$lang['Sub_level_links'] = 'Unterforenlinks im Index:';
$lang['Sub_level_links_explain'] = 'Füge Links zu den Unterforen in der Forum oder Kategorie Beschreibung hinzu';
$lang['With_pics'] = 'Mit Icons';
$lang['Display_viewonline'] = 'Wer ist Online Box einschalten:';
$lang['Never'] = 'Nie';
$lang['Root_index_only'] = 'Nur im Index';
$lang['Always'] = 'Immer';
$lang['Subforums'] = 'Unterforen';
// lang_extend_categories_hierarchy.php - END

// lang_extend_topic_calendar.php - BEGIN
$lang['Calendar_settings'] = 'Kalender Einstellungen';
$lang['Calendar'] = 'Kalender';
$lang['Calendar_scheduler'] = 'Planer';
$lang['Calendar_event'] = 'Kalender Termin';
$lang['Calendar_from_to'] = 'Vom %s bis %s';
$lang['Calendar_time'] = '%s';
$lang['Calendar_duration'] = 'Dauer';

$lang['Calendar_week_start'] = 'Erster Wochentag';
$lang['Calendar_header_cells'] = 'Anzahl der Zellen die im Board Header angezeigt werden (0 für keine Anzeige)';
$lang['Calendar_title_length'] = 'Länge des Titels welcher in den Kalender Zellen angezeigt wird';
$lang['Calendar_text_length'] = 'Länge des Textes, welcher im Übersichtsfenster angezeigt wird';
$lang['Calendar_block_display'] = 'Zeige die Kalender Reihe im Board Index';
$lang['Calendar_display_open'] = 'Zeige die Kalender Reihe im Forum Index geöffnet (Wenn Kalender Reihen aktiviert sind)';
$lang['Calendar_nb_row'] = 'Anzahl der Reihen pro Tag im Board Header';
$lang['Calendar_birthday'] = 'Zeige Geburtstage im Kalendar an';
$lang['Calendar_forum'] = 'Den Namen des Forums unter dem Thematitel im Planer anzeigen';

$lang['Sorry_auth_cal'] = 'Nur %s kann in diesem Forum Termine in den Kalender eintragen.';
$lang['Date_error'] = '%d/%d/%d ist kein gültiges Datum';

$lang['Event_time'] = 'Termin Zeit';
$lang['Minutes'] = 'Minuten';
$lang['Today'] = 'Heute';
$lang['Yesterday'] = 'Gestern';
$lang['All_events'] = 'Alle Ereignisse';





$lang['Rules_calendar_can'] = 'Du <b>kannst</b> Kalender-Ereignisse in diesem Forum eintragen.';
$lang['Rules_calendar_cannot'] = 'Du <b>kannst keine</b> Kalender-Ereignisse in diesem Forum eintragen.';

$lang['birthday_header'] = 'Happy Birthday!';
$lang['birthday'] = '<b>%s</b> hat heute Geburtstag.';
// lang_extend_topic_calendar.php - END

//$lang[''] = '';

?>