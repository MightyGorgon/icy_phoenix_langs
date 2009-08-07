<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_extend_icy_phoenix.php 55 2009-08-07 09:20:40Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'10_Main_Settings_Icy_Phoenix' => 'Icy Phoenix',
	'20_SQL_Charge' => 'SQL Optimering',
	'30_Posting' => 'Inlägg och Meddelanden',
	'40_IMG_Posting' => 'Bilder I Inlägg',
	'50_Hierarchy_setting' => 'Forum',
	'60_Calendar_settings' => 'Kalender',
	'70_SEO' => 'SEO',
	'80_Security' => 'Loggar Och Säkerhet',
	'90_Cron' => 'Cron',
	)
);

// admin part
if ($lang_extend_admin)
{
	$lang = array_merge($lang, array(
		'Lang_extend_icy_phoenix' => 'Icy Phoenix',

// TAB - Icy Phoenix
		'IP_enable_xs_version_check' => 'Aktivera Icy Phoenix Versions Kontroll',
		'IP_enable_xs_version_check_explain' => 'Aktivera detta alternativ för att kontrollera om en nyare Icy Phoenix version finns tillgänglig att ladda ner varje gång du kommer till ACP. Inaktivera detta alternativ kan påskynda ACP laddningen lite. <br /><b>Notera:</b> Den här kontrollen görs bara en gång per dag och sedan cachad.',

		'IP_disable_email_error' => 'Avaktivera error vid e-post skickning',

		'IP_html_email' => 'HTML E-post',
		'IP_html_email_explain' => 'Aktivera det här alternativet aktiverar HTML e-post, annars kommer det att vara enkel text post',

		'IP_enable_digests' => 'Aktivera Sammandrag',

		'IP_digests_php_cron' => 'Aktivera Sammandrag PHP Cron',
		'IP_digests_php_cron_explain' => 'Denna funktion gör det möjligt för en PHP emulering av CRON som försöker skicka e-post en gång i timmen, men eftersom den är baserad på en PHP-emulering kan det inte vara korrekt avrättad varje gång. Detta innebär att e-post ibland inte kan skickas. Om du kan aktivera CRON  på din server, använder CRON i stället för den här funktionen. Vänligen notera att du också behöver aktivera <b>PHP Cron [Global Switch]</b> i <b>Konfiguration &raquo; Icy Phoenix &raquo; Cron</b>',

		'IP_emails_only_to_admins' => 'E-post Bara Till Administratörer',
		'IP_emails_only_to_admins_explain' => 'Tillåt e-post system bara för att skicka e-postmeddelanden till admins',

		'IP_ajax_features' => 'Aktivera AJAX Funktioner',
		'IP_ajax_features_explain' => 'Vissa AJAX funktioner integreras i webbplatsen',

		'IP_ajax_checks_register' => 'AJAX Koll Vid Registrering',
		'IP_ajax_checks_register_explain' => 'Genom att aktivera detta alternativ kommer vissa realtids kontroller att utföras samtidigt som det fyller i vissa fält i registrerings formuläret (Varning: det här alternativet kan komma att slöa ner registrerings sidan).',

		'IP_inactive_users_memberlists' => 'Inaktiv Användare I Memdlemslistan Och Födelsedags Block',
		'IP_inactive_users_memberlists_explain' => 'Genom att aktivera detta alternativ kommer inaktiva användare att visas i medlemslistan och födelsedagar block.',

		'IP_page_gen' => 'Visa Sido Generations Tid i Sidfoten',

		'IP_switch_header_dropdown' => 'Aktivera Nedrullningsbar meny i sidhuvudet',
		'IP_switch_header_dropdown_explain' => 'Detta kommer att aktivera en rullgardinsmeny i forumets huvud för sökning och inlägg.',

		'IP_show_alpha_bar' => 'Show Alphabetical Sort Bar In View Forum (Global Switch)',
		'IP_show_alpha_bar_explain' => 'Det här alternativet visar en alfabetisk sorterings bar ovanpå visa forum sidan. Du måste även göra det aktivt för singel forum i Forums Management avdelningen.',

		'IP_show_rss_forum_icon' => 'Forum Index Ikoner (Global Switch)',
		'IP_show_rss_forum_icon_explain' => 'Detta alternativ kommer att visa ikoner till vänster på varje forum titel (på Forum Index): RSS, Nytt Ämne. Du måste även göra det aktiverat för ett enda forum i Forum Management avsnitt.',

		'IP_allow_mods_view_self' => 'Tillåt ALLA Moderatorer att Se Själv Auth Ämnen',
		'IP_allow_mods_view_self_explain' => 'Om ett forum har ställts in till SELF AUTH tillgång kan endast administratörer och forum moderatorer använda dessa ämnen genom visaforum och visaämne. Men det finns många funktioner som kan visa innehållet i denna typ av inlägg även om det inte authed: Aktuella Ämnen, Sökmotorer, Senaste Meddelande Block, Slumpmässiga Block, etc. För att förhindra detta, har en extra funktion kodats som inte tillåter icke authed människor tillgång till dessa ämnen via andra vägar. Hursomhelst kan du tillåta ALLA moderatorer (inte bara admins) att visa dessa meddelanden via dessa sekundära vägar. Om du ställer in detta till JA kommer ALLA moderatorer att tillåtas att se innehållet i dessa meddelanden via: Nyligen, Sök, Ämnens relaterade block... Tyvärr om du sätter detta till AV då har AUTHED moderatorer ej nå SJÄLVBÄRANDE AUTHED ämnen genom andra sätt. Funktionen har kodats på detta sätt för att spara extra SQL belastning . Om du inte använder SELF AUTHED forum, då behöver du inte denna funktion överhuvudtaget.',

		'IP_xmas_fx' => 'Jul Snö',
		'IP_xmas_fx_explain' => 'Detta alternativ aktiverar Snö Effekt.',

		'IP_xmas_gfx' => 'Jul Grafik',
		'IP_xmas_gfx_explain' => 'Genom att aktivera det här alternativet kommer Jul Grafik att tillämpas.',

		'IP_select_theme' => 'Ändra Stil',
		'IP_select_theme_explain' => 'Genom att aktivera det här alternativet kommer en vald ruta med alla tillgängliga stilar att läggs till för snabb stil byte.',

		'IP_select_lang' => 'Ändra Språk',
		'IP_select_lang_explain' => 'Genom att aktivera det här alternativet kommer en länk till varje tillgängligt språk att skapas på forum index för snabbt språk byte.',

		'IP_cms_dock' => 'Visa Apple stil Dock i CMS',

		'IP_cms_style' => 'CMS Modern Stil',
		'IP_cms_style_explain' => 'Modern Stil för CMS består i en modern layout med topp transparent meny, med klassisk stil i sidomenyn',

		'IP_split_ga_ann_sticky' => 'Dela Ämne efter Typ',
		'IP_split_ga_ann_sticky_explain' => 'Här kan du välja ett sätt att dela Ämnen efter Typpå visa forum sidan',
		'IP_split_topic_0' => '<p>Alla Ämnes Typer Tillsammans (ingen Delning)</p>',
		'IP_split_topic_1' => '<p>Globala Tillkännagivanden, Tillkännagivanden och Stickies tillsammans, Normal Ämnes Delning</p>',
		'IP_split_topic_2' => '<p>Globala Tillkännagivanden delning, Tillkännagivanden och Stickies gick med tillsammans, Normal Ämnes Delning</p>',
		'IP_split_topic_3' => '<p>Alla Ämnes Typer Delning</p>',

// TAB - SQL Charge
		'IP_fast_n_furious' => 'Snabb och Våldsam',
		'IP_fast_n_furious_explain' => 'Aktivering av detta alternativ gör att några tunga SQL funktioner kommer att avaktiveras, och förhoppningsvis kommer detta att snabba upp din sida!',

		/*
		'IP_db_cron' => 'Database Optimize',
		'IP_db_cron_explain' => 'Enabling this option will enable Database Optimization.',
		*/

		'IP_site_history' => 'Sido Historia',
		'IP_site_history_explain' => 'Aktivering av detta alternativ aktiverar Sido Historia.',

		'IP_global_disable_upi2db' => 'Avaktivera UPI2DB globalt',
		'IP_global_disable_upi2db_explain' => 'Med detta alternativ kan du avaktivera UPI2DB globalt vilket sparar extra minne.',

		'IP_enable_own_icons' => 'Egna Meddelanden Ikoner',
		'IP_enable_own_icons_explain' => 'Genom att aktivera detta alternativ kommer ikoner för ämnen som innehåller egna meddelanden att märkas.',

		'IP_show_forums_online_users' => 'Visa Användare Online I Forum',
		'IP_show_forums_online_users_explain' => 'Detta kommer att aktivera onlineanvändare räkning för varje forum på index.',

		'IP_google_bot_detector' => 'Aktivera GoogleBot Detector',

		'IP_gsearch_guests' => 'Påtvinga  Google Search för gäster',

		'IP_visit_counter_switch' => 'Aktivera Besöks Räknare',

		'IP_enable_new_messages_number' => 'Visa antalet nya meddelanden sedan senaste besök',

		'IP_disable_thanks_topics' => 'Avaktivera Tack',

		'IP_show_thanks_profile' => 'Visa Tack du fått när du tittar i profilen',

		'IP_show_thanks_viewtopic' => 'Visa Tack du fått när du tittar i ämnen',

		'IP_disable_topic_view' => 'Avaktivera "Vem läser detta ämne" (Global Switch)',
		'IP_disable_topic_view_explain' => 'Detta alternativ tillåter dig att avaktivera "Vem läser detta ämne" funktionen (detta sparar SQL utrymme).',

		'IP_disable_referrers' => 'Avaktivera Referrers',
		'IP_disable_referrers_explain' => 'Detta alternativ tillåter dig att avaktivera Referrers funktionen (detta sparar SQL utrymme).',

		'IP_disable_logins' => 'Avaktivera Inloggnings Inspelning',
		'IP_disable_logins_explain' => 'Genom aktivering av detta alternativ  kommer inte Användar Inloggning att bli inspelad mer.',

		'IP_last_logins_n' => 'Antal Inloggningar att Spela in',

		'IP_index_top_posters' => 'Topp Postare :: Forum Index',
		'IP_index_top_posters_explain' => 'Aktivera detta alternativ för att visa topp postare på <b> Forum Index</b>.',

		'IP_index_last_msgs' => 'Senaste Meddelandet :: Forum Index',
		'IP_index_last_msgs_explain' => 'Aktivera detta alternativ för att visa senaste meddelande på <b>Forum Index</b>.',

		'IP_online_last_msgs' => 'Senaste Meddelandet :: Vem Är Online',
		'IP_online_last_msgs_explain' => 'Aktivera detta alternativ för att visa det senaste meddelande på <b>Who Is Online</b>.',

		'IP_last_msgs_n' => 'Antal senaste meddelanden som ska visas.',

		'IP_last_msgs_x' => 'Forum Att Utesluta',
		'IP_last_msgs_x_explain' => 'Vänligen, ange IDs på forum för att vara undantagna i Senaste Meddelande Boxen (du kan skilja varje forum ID med ett kommatecken).',

		'IP_show_chat_online' => 'AJAX Chat Online :: Forum Index',
		'IP_show_chat_online_explain' => 'Aktivera detta alternativ för att visas i <b>Forum Index</b> användare online i AJAX Chat.',

		'IP_index_shoutbox' => 'Shoutbox :: Forum Index',
		'IP_index_shoutbox_explain' => 'Aktivering av detta alternativ kommer att aktivera Shoutbox i <b>Forum Index</b>.',

		'IP_online_shoutbox' => 'Shoutbox :: Vem Är Online',
		'IP_online_shoutbox_explain' => 'Aktivering av detta alternativ kommer att aktivera Shoutbox i <b>Vem Är Online</b>.',

		'IP_img_shoutbox' => 'Inaktivera [img][/img] bbkod i Shoutbox',
		'IP_img_shoutbox_explain' => 'Aktivering av detta alternativ kommer att inaktivera [img][/img] bbkod i Shoutbox.',

		'IP_index_links' => 'Länkar :: Forum Index',
		'IP_index_links_explain' => 'Aktivering av detta alternativ aktiverar Länkar på <b>Forum Index</b>.',

		'IP_index_birthday' => 'Födelsedag :: Forum Index',
		'IP_index_birthday_explain' => 'Aktivering av detta alternativ aktiverar Födelsedagar på <b>Forum Index</b>.',

		'IP_show_random_quote' => 'Slumpmässiga Citat :: Forum Index',
		'IP_show_random_quote_explain' => 'Aktivering av detta alternativ aktiverar att slumpmässiga citat visas på <b>Forum Index</b>',

// TAB - Posting
		'IP_posts_precompiled' => 'Avaktivera förkompilerade inlägg',
		'IP_posts_precompiled_explain' => 'Genom att aktivera detta alternativ kommer visaämne alltid att sammanställa inläggs texten utan att använda förkompilerad text, (detta är långsammare, men det kan vara användbart i vissa fall).',
		
		'IP_read_only_forum' => 'Avaktivera meddelanden i alla forum (Läs läge en annan metod som phpMyAdmin eller MySQLDumper)',
		'IP_read_only_forum_explain' => 'Detta alternativ gör det möjligt att låsa meddelanden i alla forum utan att ändra behörigheter. Detta kan vara användbart för begränsad tid när admins vill hindra användare meddelanden utan att behöva låsa webbplats eller ändra alla forum tillstånd. Administratörer kan fortfarande posta.',

		'IP_allow_drafts' => 'Tillåt Utkast',
		'IP_allow_drafts_explain' => 'Tillåt användare att spara inlägg som utkast',

		'IP_allow_mods_edit_admin_posts' => 'Kan Moderatorer Redigera Admin Inlägg?',
		'IP_allow_mods_edit_admin_posts_explain' => 'Tillåt moderatorer att redigera admin inlägg',

		'IP_force_large_caps_mods' => 'ProperCase ämnesområden',
		'IP_force_large_caps_mods_explain' => 'Ämnes frågor kommer att omvandlas till riktiga fall för alla användare utom admins',

		'IP_show_new_reply_posting' => 'Varna För Nya Svar',
		'IP_show_new_reply_posting_explain' => 'Om du aktiverar detta, kommer en varning att visas när det finns nya svar när du besvarar ett ämne',

		'IP_no_bump' => 'Förbjud stötning inom 24 timmar',
		'IP_no_bump_explain' => 'Aktivera detta alternativ gör att senaste postare inte kan skicka inom 24 timmar från det senaste inlägget om inte någon annan har postat ett svar (gäller aldrig admins)',
		'MODS_ALLOWED' => 'Moderatorer Kan Posta',

		'IP_show_topic_description' => 'Aktivera Ämnes Beskrivningar',
		'IP_show_topic_description_explain' => 'Aktivering av detta alternativ gör det möjligt för Ämnes Beskrivning medan du surfar på forumet',

		'IP_edit_notes' => 'Aktivera Redigera Notering',
		'IP_edit_notes_explain' => 'Aktivering av detta alternativ aktiverar Redigerings Noteringar',

		'IP_edit_notes_n' => 'Maximalt Redigerings Anteckningar',

		'IP_always_show_edit_by' => 'Visa Alltid Post Redigering',
		'IP_always_show_edit_by_explain' => 'Aktivering av detta alternativ kommer alltid att visa "Senast redigerad av..." i meddelandets sidfot när någon ändrar det. Admins redigeringar visas inte som standard',

		'IP_show_social_bookmarks' => 'Socialt Bokmärke',
		'IP_show_social_bookmarks_explain' => 'Visa Socialt Bokmärkes avsnitt när du tittar på ämnen',

		'IP_link_this_topic' => 'Länka detta ämne',
		'IP_link_this_topic_explain' => 'Visa "Länka detta ämne" boxen när du tittar på ämnen',

		'IP_smilies_topic_title' => 'Smileys för Ämnes Titel pch Beskrivning',
		'IP_smilies_topic_title_explain' => 'Aktivering av detta alternativ aktiverar även smileys för Ämnes Titel and Ämnes Beskrivning',

		'IP_enable_colorpicker' => 'Aktivera ColorPicker i postning',

		'IP_quote_iterations' => 'Max antal lämnade citat',

		'IP_disable_ftr' => 'Komplett Inaktivera Tvingad Ämnes Läsning',
		'IP_disable_ftr_explain' => 'Genom att aktivera det här alternativet Tvingad Ämnes Läsning kommer att vara helt avaktiverat',

		'IP_disable_html_guests' => 'Inaktivera HTML-länkar för gäster',

		'IP_birthday_viewtopic' => 'Visa inläggarens Ålder i Inlägg',

		'IP_switch_poster_info_topic' => 'Visa inläggarens Info i Ämnen (Språk, Stil, etc.)',

		'IP_enable_quick_quote' => 'Aktivera Snabb Citat Och Utanför Ämnet',
		'IP_enable_quick_quote_explain' => 'Snabb Citat tillåter användare att citera något inlägg i ett ämne med ett enkelt klick. Denna funktion använder JavaScript, och att aktivera detta kan resultera i stora sidor om det finns många inlägg med mycket text i ett ämne.',

		'IP_allow_all_bbcode' => 'Aktivera alla BBKoder',
		'IP_allow_all_bbcode_explain' => 'Aktivering av detta alternativet gör det möjligt för alla BBKoder i signaturer och andra ställen där de inte brukar vara aktiva. BBKoder som vanligtvis är avaktiverade i signaturen är: IMG, ALBUMIMG och några intensiva formaterings BBKoder. Om du aktiverar detta alternativ, kommer vissa signaturer att konsumera mer utrymme och resurser.',

		'IP_switch_bbcb_active_content' => 'Tillåt BBKod för Aktivt Innehåll i poster',
		'IP_switch_bbcb_active_content_explain' => 'Aktiverar BBKod för Flash, Video, Audio Streams, RealMedia och Quicktime.',

// TAB - Images In Posts
		'IP_auth_view_pic_upload' => 'Bilder Uppladdnings Rättigheter (Posta Icy Bilder)',

		'IP_enable_postimage_org' => 'Aktivera PostImage knapp i post formulär',

		'IP_gd_version' => 'GD Version:',
		'GD_0' => 'Ingen GD',
		'GD_1' => 'GD1',
		'GD_2' => 'GD2',

		'IP_show_img_no_gd' => 'Visa GIF miniatyrbild utan att använda GD biblioteken (full bild läses in och sedan visas bara storleksändringen).',

		'IP_thumbnail_posts' => 'Miniatyrbild i inlägg',
		'IP_thumbnail_posts_explain' => 'Med det här alternativet kommer en miniatyrbild att visas i stället för en fullständig bild när en bild läggs in med IMG BBKod',

		'IP_show_pic_size_on_thumb' => 'Visa bild storlek på miniatyrbild',
		
		'IP_thumbnail_highslide' => 'Använd HighSlide för att visa bilder om miniatyrbilder är aktiverade',
		'IP_thumbnail_highslide_explain' => 'Öppnar bilden framför den aktuella sidan i stället för att öppna den i ett nytt fönster. Mer om <a href="http://www.highslide.com/" target="_blank">HighSlide JS...</a><br />Se till att du tömmer förkompilerad inlägg efter att ha ändrat inställningen!',

		'IP_thumbnail_lightbox' => 'Använd Lightbox JavaScript om Miniatyrbilder är aktiverad',
		'IP_thumbnail_lightbox_explain' => 'Öppnar bilden framför den aktuella sidan i stället för att öppna den i ett nytt fönster. Mer om <a href="http://www.huddletogether.com/projects/lightbox/" target="_blank">Lightbox JS...</a><br />Se till att du tömmer förkompilerade inlägg efter att ha ändrat inställningen!',

		'IP_thumbnail_cache' => 'Miniatyrbilds cache',

		'IP_thumbnail_quality' => 'Miniatyrbilds kvalitet (1-100)',

		'IP_thumbnail_size' => 'Miniatyrbilds storlek (i pixlar)',

// TAB - Forum
		'Lang_extend_categories_hierarchy' => 'Kategorier Hierarki',

		'Category_attachment' => 'Bifogas till',
		'Category_desc' => 'Beskrivning',
		'Category_config_error_fixed' => 'Ett fel i kategorin setup har blivit fixad',
		'Attach_forum_wrong' => 'Du kan inte bifoga ett forum till ett forum',
		'Attach_root_wrong' => 'Du kan inte bifoga ett forum till forum index',
		'Forum_name_missing' => 'Du kan inte skapa ett forum utan namn',
		'Category_name_missing' => 'Du kan inte skapa en kategori utan namn',
		'Only_forum_for_topics' => 'Ämnen kan endast hittas i forum',
		'Delete_forum_with_attachment_denied' => 'Du kan inte radera forum som har under-nivåer',

		'Category_delete' => 'Radera Kategori',
		'Category_delete_explain' => 'I formuläret nedan kan du ta bort en kategori och bestämma vart du vill lägga alla forum och kategorier som den innehåller.',

// forum links type
		'Forum_link_url' => 'Länk URL',
		'Forum_link_url_explain' => 'Ställ in en URI till en Icy Phoenix fil eller en full URL till en extern server',
		'Forum_link_internal' => 'Icy Phoenix Fil',
		'Forum_link_internal_explain' => 'Välj Ja om du åberopar ett program som står i Icy Phoenix dirs',
		'Forum_link_hit_count' => 'Träff räkning',
		'Forum_link_hit_count_explain' => 'Välj Ja om du vill att forumet ska räkna och visa antalet träffar som använder denna länk',
		'Forum_link_with_attachment_deny' => 'Du kan inte ställa ett forum som en länk om det redan har under-nivåer',
		'Forum_link_with_topics_deny' => 'Du kan inte ställa ett forum som en länk om det redan finns ämnen i det',
		'Forum_attached_to_link_denied' => 'Du kan inte bifoga ett forum eller en kategori till en forum länk',

		'Manage_extend' => 'Management +',
		'No_subforums' => 'Inget under-forum',
		'Forum_type' => 'Välj den typ av forum du vill',
		'Presets' => 'Förinställningar',
		'Refresh' => 'Uppdatera',
		'Position_after' => 'Positionera detta forumet efter',
		'Link_missing' => 'Länken saknas',
		'Category_with_topics_deny' => 'Ämnena återstår i detta forum. Du kan inte ändra den till en kategori.',
		'Recursive_attachment' => 'Du kan inte bifoga ett forum till en lägsta nivå till sin egen gren (rekursiv bifogning)',
		'Forum_with_attachment_denied' => 'Du kan inte ändra en kategori med forum som bifogas i ett forum',
		'icon' => 'Ikon',
		'icon_explain' => 'Denna ikon kommer att visas framför forumets titel. Du kan ställa in här en direkt URI eller en $image[] nyckek post (see <i>your_template</i>/<i>your_template</i>.cfg).',

// TAB - Calendar
		'Lang_extend_topic_calendar' => 'Ämne Kalender',

// TAB - SEO
		'IP_url_rw' => 'URL Återskrivning',
		'IP_url_rw_explain' => 'Genom att aktivera det här alternativet URL Återskrivning kommer att aktiveras (HTML länkar i stället för PHP, för bättre bot spidering) för alla.',

		'IP_url_rw_guests' => 'URL Återskrivning För Gäster',
		'IP_url_rw_guests_explain' => 'Genom att aktivera det här alternativet kommer URL Återskrivning att aktiveras endast för gäster och bots.',

		'IP_bots_reg_auth' => 'Bots REG Behörighets Nivå',
		'IP_bots_reg_auth_explain' => 'Genom att aktivera detta alternativ ges Bots samma åtkomstnivå för registrerade användare.',

		'IP_lofi_bots' => 'LoFi För Bots',
		'IP_lofi_bots_explain' => 'Genom att aktivera detta alternativ kommer LoFi att vara aktiverat för bots.',
		
		'IP_adsense_code' => 'Google AdSense Publisher Kod',
		'IP_adsense_code_explain' => 'Sätt här in din Google AdSense Publisher Kod och det kommer att införas i Google Search sidan. Om du inte vill använda den, bara lämna fältet tomt.',

		'IP_google_analytics' => 'Google Analytics Kod',
		'IP_google_analytics_explain' => 'Sätt här in din Google Analytics Kod (Javascript provided by Google site) och det kommer att bli automatiskt infogat längst ned på varje sida.',

//Sitemap
		'Sitemap_settings' => 'Sidokarta Inställningar',

		'IP_sitemap_topic_limit' => 'Google Sidokarta :: Ämne Begränsning',
		'IP_sitemap_topic_limit_explain' => 'Maximalt antal ämnen att hämta med en enda database query',

		'IP_sitemap_announce_priority' => 'Google Sidokarta :: Meddelande Prioritet',
		'IP_sitemap_announce_priority_explain' => 'Prioritet för meddelanden (måste vara ett tal mellan 0.0 &amp; 1.0 inklusive)',

		'IP_sitemap_sticky_priority' => 'Google Sitemap :: Sticky Priority',
		'IP_sitemap_sticky_priority_explain' => 'Prioritet för sticky ämnen (måste vara ett tal mellan 0.0 &amp; 1.0 inklusive)',

		'IP_sitemap_default_priority' => 'Google Sitemap :: Standard Prioritet',
		'IP_sitemap_default_priority_explain' => 'Prioritet för vanliga ämnen (måste vara ett tal mellan 0.0 &amp; 1.0 inklusive)',

		'IP_sitemap_sort' => 'Google Sitemap :: Sorterings Ordning',
		'IP_sitemap_new_first' => 'Nya inlägg först',
		'IP_sitemap_old_first' => 'Gamla inlägg först',

		'Word_graph' => 'TAGGAR',

		'IP_word_graph_max_words' => 'TAGGAR :: Maximalt Ord',
		'IP_word_graph_max_words_explain' => 'Välj det maximala antal ord som ska visas. Ett större antal kan påverka serverns belastning. Det rekommenderade antalet är 250..',

		'IP_word_graph_word_counts' => 'TAGGAR :: Aktivera Ord Räkning',
		'IP_word_graph_word_counts_explain' => 'Visa det totala antalet ord bredvid varje ord?<br />Exempel: <b>Icy Phoenix (365)</b>?',

		'IP_forum_wordgraph' => 'TAGGAR :: Forum Taggar (Global Switch)',
		'IP_forum_wordgraph_explain' => 'Denna funktion gör det möjligt att aktivera en forum baserad tagg tabell längst ner på varje forum. Du måste även göra det aktivt för ett enda forum i Forums Management avsnitt.',

		'Similar_topics' => 'Liknande Ämnen',
		'Similar_topics_explain' => 'Konfigurera sökning av liknande ämnen.',

		'IP_similar_topics' => 'Liknande Ämnen :: Liknande Ämnen (Global Switch)',
		'IP_similar_topics_explain' => 'Detta är den globala switchen för Liknande Ämnen. Om du vill slå på den här funktionen behöver du också göra det aktivt i ett enda forum i Forums Management avsnitt.',

		'IP_similar_topics_desc' => 'Liknande Ämnen :: Ta hänsyn till beskrivning av ett inlägg',

		'IP_similar_stopwords' => 'Liknande Ämnen :: Uteslut stop-ord',

		'IP_similar_max_topics' => 'Liknande Ämnen :: Maximalt antal inlägg att visa',

		'IP_similar_sort_type' => 'Liknande Ämnen :: Sortera efter',
		'IP_similar_sort_type_explain' => 'Välj sorterings metod för liknande ämnen',
		'IP_similar_sort_type_time' => 'Post Tid',
		'IP_similar_sort_type_relev' => 'Relevans',

		'IP_similar_ignore_forums_ids' => 'Liknande Ämnen :: Ignorerade forum',
		'IP_similar_ignore_forums_ids_explain' => 'Ange ID\'s på forum, där liknande frågor kommer att ignoreras (t.ex. test forum, forum för diskussion, etc.). Ett ID per rad.',

// TAB - Logging And Security
		'IP_admin_protect' => 'Skydda Huvud Admin Konto',
		'IP_admin_protect_explain' => 'Aktivering av detta alternativ kommer att lägga större trygghet till Huvud Admin: det kan inte degraderas av andra administratörer eller användare.',

		'IP_db_log_actions' => 'Aktivera DB Åtgärds Logg',
		'IP_db_log_actions_explain' => 'Genom att aktivera det här alternativet kommer alla åtgärder som ändrar DB att lagras i en DB. Om det här alternativet har ställts in som gäller constants.php, då kan det inte inaktiveras i ACP. Om du väljer att få rapporter, dåkommer extra filer att sparas med alla fel inloggade.',

		'IP_mg_log_actions' => 'Aktivera TXT Åtgärds Logg',
		'IP_mg_log_actions_explain' => 'Genom att aktivera det här alternativet kommer alla åtgärder som ändrar DB att lagras i en textfil på servern (filen kommer att sparas i logg mappen). Denna fil är inte lätt att läsa, men det kan vara bra under vissa förutsättningar. Aktivera det bara om du vet vad du gör (webbplats kan slöa ner sig om du aktiverar det).',

		'IP_write_errors_log' => 'Aktivera Sido Errors Logg',
		'IP_write_errors_log_explain' => 'Genom att aktivera det här alternativet kommer alla webbplats fel (dvs. 404 filen saknas, dåligt önskemål, etc.) att vara inloggad på en daglig TXT fil. Kom ihåg att du måste aktivera fel omdirigerade till errors.php i .Htaccess att använda denna funktion (ett exempel är med i. Htaccess bara infoga din domän och decomment raderna).',

		'IP_write_digests_log' => 'Aktivera Sammandrags Logg',
		'IP_write_digests_log_explain' => 'Genom att aktivera det här alternativet kommer alla sammandrag som skickas att vara inloggad på en daglig TXT fil.',

		'IP_logs_path' => 'Sökväg för Loggar (kom ihåg att CHMOD:a denna mapp till 0755 eller 0777 som begärt)',
		'IP_logs_path_explain' => 'Ange sökvägen för fel och andra loggar i förhållande till din root och utan avslutande snedstrecket. Exempel: <b>loggar</b>.',

// TAB - Cron
		'IP_cron_global_switch' => 'Aktivera PHP Cron [Global Switch]',
		'IP_cron_global_switch_explain' => 'Genom att aktivera det här alternativet kommer ett PHP baserat cron att aktiveras: vissa automatiska operationer kommer att genomföras vid fasta tidsintervaller. Den optimala tidsintervallen för varje cron funktion beror på din webbplats trafik och preferenser : Om du inte vet vad dessa inställningar kan påverka, vänligen lämna denna funktion avaktiverad, och du har förmodligen inte någon nytta av den.',

		'IP_cron_files_interval' => 'Filer Executions Cron Intervall',
		'IP_cron_files_interval_explain' => 'Denna typ av cron kan användas för att automatiskt köra vissa filer varje fasta intervall som du bestämmer. De filer som skall verkställas skall läggas i <b>constants.php</b> &raquo; <b>definiera(\'CRON_FILES\', \'\');</b>. Flera filer måste vara åtskilda med kommatecken.<br /><br /><b>Senast körd: ' . (($board_config['cron_files_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y H:i:s', ($board_config['cron_files_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_database_interval' => 'DB Optimerings Cron Intervall',
		'IP_cron_database_interval_explain' => 'Denna funktion kommer att optimera databasen på webbplatsen varje valda intervall.<br /><br /><b>Senast körd: ' . (($board_config['cron_database_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y H:i:s', ($board_config['cron_database_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_cache_interval' => 'Proper Mall Cache Cron Intervall',
		'IP_cron_cache_interval_explain' => 'Templates cache rengörs varje valda intervall.<br /><br /><b>Senast körd: ' . (($board_config['cron_cache_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y H:i:s', ($board_config['cron_cache_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_sql_interval' => 'Propert SQL Cache Cron Intervall',
		'IP_cron_sql_interval_explain' => 'SQL cache rengörs varje valda intervall.<br /><br /><b>Senast körd: ' . (($board_config['cron_sql_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y H:i:s', ($board_config['cron_sql_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_users_interval' => 'Propert Användares Cache Cron Intervall',
		'IP_cron_users_interval_explain' => 'Användares cache rengörs varje valda intervall.<br /><br /><b>Senast körd: ' . (($board_config['cron_users_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y H:i:s', ($board_config['cron_users_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_topics_interval' => 'Propert Ämnes Cache Cron Intervall',
		'IP_cron_topics_interval_explain' => 'Ämnes cache rengörs varje valda intervall.<br /><br /><b>Senast körd: ' . (($board_config['cron_topics_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y H:i:s', ($board_config['cron_topics_last_run']), $board_config['board_timezone'])) . '</b>',

		'Cron_Disabled' => 'Avaktiverad',
		'15M' => '15 Minuter',
		'30M' => '30 Minuter',
		'1H' => '1 Timme',
		'2H' => '2 Timmar',
		'3H' => '3 Timmar',
		'6H' => '6 Timmar',
		'12H' => '12 Timmar',
		'1D' => '1 Dag',
		'3D' => '3 Dagar',
		'7D' => '1 Vecka',
		'14D' => '2 Veckor',
		'30D' => '1 Månad',


// lang_extend_mods_settings.php
		'Lang_extend_mods_settings' => 'Icy Phoenix Inställningar',
		'Configuration_extend' => 'Icy Phoenix',
		'Override_user_choices' => 'Överskriv användarens val',
		)
	);
}

$lang = array_merge($lang, array(
	'CFG_NONE' => 'INGEN',
	'CFG_ALL' => 'ALLA',
	'CFG_REG' => 'REG',
	'CFG_SELF' => 'SJÄLV',
	'CFG_PRIVATE' => 'PRIVAT',
	'CFG_MOD' => 'MOD',
	'CFG_ADMIN' => 'ADMIN',

// lang_extend_categories_hierarchy.php - BEGIN
	'Hierarchy_setting' => 'Forum',
	'Forum_link' => 'Länk omdirigering',
	'Forum_link_visited' => 'Denna länk har besökts %d gånger',

	'Use_sub_forum' => 'Index packning',
	'Index_packing_explain' => 'Välj den nivå på packning du vill ha för index',
	'Medium' => 'Medium',
	'Full' => 'Full',
	'Split_categories' => 'Dela kategorier på index',
	'Use_last_topic_title' => 'Visa de senaste ämnes titlarna på index',
	'Last_topic_title_length' => 'Titel längden på det senaste ämnet på index',
	'Sub_level_links' => 'Under-nivå länkar på index',
	'Sub_level_links_explain' => 'Lägg till länkar till under-nivåer i forumet eller kategori beskrivning',
	'With_pics' => 'Med ikoner',
	'Display_viewonline' => 'Visa visa online informations boxen på index',
	'Never' => 'Aldrig',
	'Root_index_only' => 'Enbart på root index',
	'Always' => 'Alltid',
	'Subforums' => 'Underforum',
// lang_extend_categories_hierarchy.php - END

// lang_extend_topic_calendar.php - BEGIN
	'Calendar_settings' => 'Kalender',
	'Calendar' => 'Kalender',
	'Calendar_scheduler' => 'Schemaläggaren',
	'Calendar_event' => 'Kalender evenemang',
	'Calendar_from_to' => 'Från %s till %s (inklusive)',
	'Calendar_time' => '%s',
	'Calendar_duration' => 'Under',

	'Calendar_week_start' => 'Första dagen i veckan',
	'Calendar_header_cells' => 'Antal celler för att visa på forumets header (0 utan visning)',
	'Calendar_title_length' => 'Längd på titeln som visas i kalenderns celler',
	'Calendar_text_length' => 'Längd på texten som visas i översikts fönstret',
	'Calendar_block_display' => 'Visa kalender raden på forumets huvud',
	'Calendar_display_open' => 'Visa kalender raden på forumets huvud öppnade (om kalendern raden är aktiverad)',
	'Calendar_nb_row' => 'Antal rader per dag i forumets header',
	'Calendar_birthday' => 'Visa födelsedag(ar) i kalendern',
	'Calendar_forum' => 'Visa forum namn under tema titeln i schemaläggaren',

	'Sorry_auth_cal' => 'Tyvärr, men endast %s kan posta kalender händelser i detta forum.',
	'Date_error' => 'dag %d, månad %d, år %d är inte ett giltigt datum',

	'Event_time' => 'Evenemangs tid',
	'Minutes' => 'Minuter',
	'Today' => 'Idag',
	'Yesterday' => 'Igår',
	'All_events' => 'Alla evenemang',

/*
	'Rules_calendar_can' => 'Du <b>kan</b> posta kalender evenemang i detta forum',
	'Rules_calendar_cannot' => 'Du <b>kan ej</b> posta kalender evenemang i detta forum',
*/
	'Rules_calendar_can' => 'Du <b>kan</b> posta kalender händelser',
	'Rules_calendar_cannot' => 'Du <b>kan ej</b> posta kalender händelser',

	'birthday_header' => 'Grattis på födelsedagen!',
	'birthday' => '<b>%s</b> har födelsedag idag!',
// lang_extend_topic_calendar.php - END

	'DB_LOG_ALL' => 'Ja med fel rapporter',
	)
);

?>