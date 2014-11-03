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
    '05_Server_Settings' => 'Server',
	'10_Main_Settings_Icy_Phoenix' => 'Icy Phoenix',
	'15_Various_Settings' => 'Olika inställningar',
	'20_SQL_Charge' => 'SQL Optimering',
	'25_Users' => 'Användare',
	'30_Posting' => 'Inlägg och Meddelanden',
	'40_IMG_Posting' => 'Bilder i inlägg',
	'50_Hierarchy_setting' => 'Forum',
	'60_Calendar_settings' => 'Kalender',
	'70_SEO' => 'SEO',
	'80_Security' => 'Loggar och Säkerhet',
	'90_Cron' => 'Cron',
	)
);

// admin part
if ($lang_extend_admin)
{
	$lang = array_merge($lang, array(
		'Lang_extend_icy_phoenix' => 'Icy Phoenix',
		
// TAB - SERVER
		'SITE_META_KEYWORDS' => 'Meta nyckelord',
		'SITE_META_KEYWORDS_SWITCH' => 'Aktivera meta nyckelord från DB',
		'SITE_META_KEYWORDS_SWITCH_EXPLAIN' => 'Om du aktiverar meta nyckelord, därefter kommer nyckelord som anges ovan att användas  i HTML-sidor i stället för nyckelord som definieras i <i>lang_main_settings.php</i>.',
		'SITE_META_DESCRIPTION' => 'Meta beskrivning',
		'SITE_META_DESCRIPTION_SWITCH' => 'Aktivera meta beskrivning från DB',
		'SITE_META_DESCRIPTION_SWITCH_EXPLAIN' => 'Om du aktiverar meta beskrivning från db, då kommer beskrivningen som anges ovan att användas i HTML-sidor i stället för beskrivningen som anges i <i>lang_main_settings.php</i>.',
		'SITE_META_AUTHOR' => 'Meta Författare',
		'SITE_META_AUTHOR_SWITCH' => 'Aktivera meta författare från DB',
		'SITE_META_AUTHOR_SWITCH_EXPLAIN' => 'Om du aktiverar meta författare, då kommer författare som anges ovan att användas i HTML-sidor i stället för författaren som anges i <i>lang_main_settings.php</i>.',
		'SITE_META_COPYRIGHT' => 'Meta copyright',
		'SITE_META_COPYRIGHT_SWITCH' => 'Aktivera meta copyright från DB',
		'SITE_META_COPYRIGHT_SWITCH_EXPLAIN' => 'Om du aktiverar meta copyright, då kommer copyrighten som anges ovan att användas i HTML-sidor i stället för copyrighten som anges i <i>lang_main_settings.php</i>.',

// TAB - SITE
		'IP_mobile_style_disable' => 'Inaktivera Mobila Enheters Detektion',
		'IP_mobile_style_disable_explain' => 'Vanligtvis när en mobil enhet anslutes till webbplatsen, <b>Mobil</b> stil aktiveras automatiskt (kan det manuellt stängas av av varje användare). Om du vill inaktivera denna automatiska detektering, bara välj det här alternativet.',	

// TAB - Icy Phoenix
		'IP_enable_xs_version_check' => 'Aktivera Icy Phoenix Versions Kontroll',
		'IP_enable_xs_version_check_explain' => 'Aktivera detta alternativ för att kontrollera om en nyare Icy Phoenix version finns tillgänglig att ladda ner varje gång du kommer till ACP. Inaktivera detta alternativ kan påskynda ACP laddningen lite. <br /><b>Notera:</b> Den här kontrollen görs bara en gång per dag och sedan cachad.',

		'IP_disable_email_error' => 'Avaktivera error vid e-post skickning',

		'IP_html_email' => 'HTML E-post',
		'IP_html_email_explain' => 'Aktivera det här alternativet aktiverar HTML e-post, annars kommer det att vara enkel text post',

		'IP_emails_only_to_admins' => 'E-post bara till administratörer',
		'IP_emails_only_to_admins_explain' => 'Tillåt e-post system bara för att skicka e-postmeddelanden till admins',

		'IP_ajax_features_title' => 'AJAX Funktioner',
		
		'IP_ajax_features' => 'Aktivera AJAX Funktioner',
		'IP_ajax_features_explain' => 'Vissa AJAX funktioner integreras i webbplatsen',

		'IP_ajax_checks_register' => 'AJAX koll vid registrering',
		'IP_ajax_checks_register_explain' => 'Genom att aktivera detta alternativ kommer vissa realtids kontroller att utföras samtidigt som det fyller i vissa fält i registrerings formuläret (Varning: det här alternativet kan komma att slöa ner registrerings sidan).',

		'IP_inactive_users_memberlists' => 'Inaktiv användare i memdlemslistan och födelsedags block',
		'IP_inactive_users_memberlists_explain' => 'Genom att aktivera detta alternativ kommer inaktiva användare att visas i medlemslistan och födelsedagars block.',

		'IP_page_gen' => 'Visa sido generations tid i sidfoten',

		'IP_switch_header_dropdown' => 'Aktivera nedrullningsbar meny i sidhuvudet',
		'IP_switch_header_dropdown_explain' => 'Detta kommer att aktivera en rullgardinsmeny i forumets huvud för sökning och inlägg.',

		'IP_show_alpha_bar' => 'Visa Alfabetisk Sorterings Bar I Visnings Forum (Global Switch)',
		'IP_show_alpha_bar_explain' => 'Det här alternativet visar en alfabetisk sorterings bar ovanpå visa forum sidan. Du måste även göra det aktivt för singel forum i Forums Management avdelningen.',

		'IP_show_rss_forum_icon' => 'Forum index ikoner (Global Switch)',
		'IP_show_rss_forum_icon_explain' => 'Detta alternativ kommer att visa ikoner till vänster på varje forum titel (på Forum Index): RSS, Nytt ämne. Du måste även göra det aktiverat för ett enda forum i Forum Management avsnitt.',

		'IP_allow_mods_view_self' => 'Tillåt ALLA Moderatorer att själv se Auth ämnen',
		'IP_allow_mods_view_self_explain' => 'Om ett forum har ställts in till SELF AUTH tillgång kan endast administratörer och forum moderatorer använda dessa ämnen genom visa forum och visa ämne. Men det finns många funktioner som kan visa innehållet i denna typ av inlägg även om det inte är authed: Aktuella ämnen, Sökmotorer, Senaste Meddelande Block, Slumpmässiga Block, etc. För att förhindra detta, har en extra funktion kodats som inte tillåter icke authed människor tillgång till dessa ämnen via andra vägar. Hursomhelst kan du tillåta ALLA moderatorer (inte bara admins) att visa dessa meddelanden via dessa sekundära vägar. Om du ställer in detta till JA kommer ALLA moderatorer att tillåtas att se innehållet i dessa meddelanden via: Nyligen, Sök, Ämnens relaterade block... Tyvärr om du sätter detta till AV då har AUTHED moderatorer ej då SJÄLVBÄRANDE AUTHED ämnen genom andra sätt. Funktionen har kodats på detta sätt för att spara extra SQL belastning . Om du inte använder SELF AUTHED forum, då behöver du inte denna funktion överhuvudtaget.',

		'IP_xmas_fx' => 'Jul Snö',
		'IP_xmas_fx_explain' => 'Detta alternativ aktiverar Snö Effekt.',

		'IP_xmas_gfx' => 'Jul Grafik',
		'IP_xmas_gfx_explain' => 'Genom att aktivera det här alternativet kommer Jul Grafik att tillämpas.',

		'IP_select_theme' => 'Ändra stil',
		'IP_select_theme_explain' => 'Genom att aktivera det här alternativet kommer en vald ruta med alla tillgängliga stilar att läggas till för att snabbt byta stil.',

		'IP_select_lang' => 'Ändra Språk',
		'IP_select_lang_explain' => 'Genom att aktivera det här alternativet kommer en länk till varje tillgängligt språk att skapas på forum index för snabbt språk byte.',

		'IP_cms_dock' => 'Visa Apple stil Dock i CMS',

		'IP_cms_style' => 'CMS Modern Stil',
		'IP_cms_style_explain' => 'Modern stil för CMS består av en modern layout med topp transparent meny, med klassisk stil i sidomenyn',

		'IP_split_ga_ann_sticky' => 'Dela ämne efter typ',
		'IP_split_ga_ann_sticky_explain' => 'Här kan du välja ett sätt att dela ämnen efter typ på visa forum sidor',
		'IP_split_topic_0' => '<p>Alla ämnes typer tillsammans (ingen delning)</p>',
		'IP_split_topic_1' => '<p>Globala tillkännagivanden, Tillkännagivanden och Stickies tillsammans, Normal ämnes delning</p>',
		'IP_split_topic_2' => '<p>Globala tillkännagivande delning, Tillkännagivanden och Stickies gick med tillsammans, Normal ämnes delning</p>',
		'IP_split_topic_3' => '<p>Alla ämnes typers delning</p>',

// TAB - SQL Charge
		'IP_fast_n_furious' => 'Snabb och Våldsam',
		'IP_fast_n_furious_explain' => 'Aktivering av detta alternativ gör att några tunga SQL funktioner kommer att avaktiveras, och förhoppningsvis kommer detta att snabba upp din sida!',

		/*
		'IP_db_cron' => 'Database Optimize',
		'IP_db_cron_explain' => 'Enabling this option will enable Database Optimization.',
		*/

		'IP_site_history' => 'Sido historia',
		'IP_site_history_explain' => 'Aktivering av detta alternativ aktiverar Sido Historia.',
		
		'IP_active_sessions' => 'Begränsa antalet sessioner',
		'IP_active_sessions_explain' => '<b>VAR FÃ–RSIKTIG</b> med detta värde: detta nummer är det maximalt tillåtna antalet sessioner, om gränsen är nådd kommer webbplatsen inte vara tillgängligg. Om du inte vet hur man konfigurerar denna gräns, lämna det till 0 (NOLL).',

		'IP_global_disable_upi2db' => 'Avaktivera UPI2DB globalt',
		'IP_global_disable_upi2db_explain' => 'Med detta alternativ kan du avaktivera UPI2DB globalt vilket sparar extra minne.',

		'IP_enable_own_icons' => 'Egna meddelanden ikoner',
		'IP_enable_own_icons_explain' => 'Genom att aktivera detta alternativ kommer ikoner för ämnen som innehåller egna meddelanden att märkas.',

		'IP_show_forums_online_users' => 'Visa AnvÃ¤ndare Online i Forum',
		'IP_show_forums_online_users_explain' => 'Detta kommer att aktivera onlineanvändares räkning för varje forum på index.',

		'IP_google_bot_detector' => 'Aktivera GoogleBot Detector',

		'IP_gsearch_guests' => 'Påtvinga  Google Sök för gäster',

		'IP_visit_counter_switch' => 'Aktivera besöks räknare',

		'IP_enable_new_messages_number' => 'Visa antalet nya meddelanden sedan senaste besök',

		'IP_disable_thanks_topics' => 'Avaktivera Tack',

		'IP_show_thanks_profile' => 'Visa Tack du fått när du tittar i profilen',

		'IP_show_thanks_viewtopic' => 'Visa Tack du fått när du tittar i ämnen',
		
		'IP_disable_likes_posts' => 'Avaktivera inläggsgillningar (Global Switch)',
		'IP_disable_likes_posts_explain' => 'Detta alternativ tillåter dig att avaktiver globala &quot;Gilla detta inläggs Post&quot; funktion',

		'IP_disable_topic_view' => 'Avaktivera "Vem läser detta ä¤mne" (Global Switch)',
		'IP_disable_topic_view_explain' => 'Detta alternativ tillåter dig att avaktivera "Vem läser detta ämne" funktionen (detta sparar SQL utrymme).',

		'IP_disable_referrers' => 'Avaktivera Hänvisning',
		'IP_disable_referrers_explain' => 'Detta alternativ tillåter dig att avaktivera hänvisnings funktionen (detta sparar SQL utrymme).',

		'IP_disable_logins' => 'Avaktivera inloggnings inspelning',
		'IP_disable_logins_explain' => 'Genom aktivering av detta alternativ  kommer inte användar inloggning att bli inspelad mer.',

		'IP_last_logins_n' => 'Antal inloggningar att spela in',

		'IP_index_top_posters' => 'Topp Postare :: Forum Index',
		'IP_index_top_posters_explain' => 'Aktivera detta alternativ för att visa topp postare på <b> Forum Index</b>.',

		'IP_index_last_msgs' => 'Senaste Meddelandet :: Forum Index',
		'IP_index_last_msgs_explain' => 'Aktivera detta alternativ för att visa senaste meddelande på <b>Forum Index</b>.',

		'IP_online_last_msgs' => 'Senaste Meddelandet :: Vem är Online',
		'IP_online_last_msgs_explain' => 'Aktivera detta alternativ för att visa det senaste meddelande på <b>Vem är Online</b>.',

		'IP_last_msgs_n' => 'Antal senaste meddelanden som ska visas.',

		'IP_last_msgs_x' => 'Forum att utesluta',
		'IP_last_msgs_x_explain' => 'Vänligen, ange IDs på forum för att vara undantagna i Senaste Meddelande Boxen (du kan skilja varje forum ID med ett kommatecken).',

		'IP_show_chat_online' => 'AJAX Chat Online :: Forum Index',
		'IP_show_chat_online_explain' => 'Aktivera detta alternativ för att visas i <b>Forum Index</b> användare online i AJAX Chat.',

		'IP_index_shoutbox' => 'Shoutbox :: Forum Index',
		'IP_index_shoutbox_explain' => 'Aktivering av detta alternativ kommer att aktivera Shoutbox i <b>Forum Index</b>.',

		'IP_online_shoutbox' => 'Shoutbox :: Vem är Online',
		'IP_online_shoutbox_explain' => 'Aktivering av detta alternativ kommer att aktivera Shoutbox i <b>Vem är Online</b>.',

		'IP_img_shoutbox' => 'Inaktivera [img][/img] bbkod i Shoutbox',
		'IP_img_shoutbox_explain' => 'Aktivering av detta alternativ kommer att inaktivera [img][/img] bbkod i Shoutbox.',

		'IP_index_links' => 'Länkar :: Forum Index',
		'IP_index_links_explain' => 'Aktivering av detta alternativ aktiverar länkar på <b>Forum Index</b>.',

		'IP_index_birthday' => 'Födelsedag :: Forum Index',
		'IP_index_birthday_explain' => 'Aktivering av detta alternativ aktiverar födelsedagar på <b>Forum Index</b>.',

		'IP_show_random_quote' => 'Slumpmässiga Citat :: Forum Index',
		'IP_show_random_quote_explain' => 'Aktivering av detta alternativ aktiverar att slumpmässiga citat visas på <b>Forum Index</b>',
		
// Spam Section
		'IP_spam_measures_header' => 'Spam Åtgärder',

		'IP_spam_posts_number' => 'SPAM - Minsta antal tjänster för att undvika spam åtgärder',
		'IP_spam_posts_number_explain' => 'Tills en användare når det angivna antalet inlägggs spam kommer åtgärder att hållas på plats (de med SPAM prefixet här nedan)',
		'IP_spam_p_0' => 'Inaktiverad',
		'IP_spam_p_3' => '3',
		'IP_spam_p_5' => '5',
		'IP_spam_p_10' => '10',
		'IP_spam_p_20' => '20',

		'IP_spam_disable_url' => 'SPAM - Inaktivera URLs i inlägg',
		'IP_spam_disable_url_explain' => 'Den här funktionen tar bort alla webbadresser i inlägg och ersätter HTTP med H ** P, denna funktion kommer att vara kvar i minsta inläggg som anges i fältet ovan. Administratörer kommer att se det ursprungliga meddelandet i alla fall.',

		'IP_spam_hide_signature' => 'SPAM - Inaktivera signatur och webb i inläggg',
		'IP_spam_hide_signature_explain' => 'Denna funktion kommer att dölja signaturen och personlig hemside information för alla de användare som inte når ett minimum av inlägg som anges i fältet ovan. Administratörer kommer att se signaturen ändå.',

		'IP_spam_post_edit_interval' => 'SPAM - Inaktivera post redigering',
		'IP_spam_post_edit_interval_explain' => 'Genom att aktivera den här funktionen, kommer alla användare som inte nådde erforderlig mängd inlägg att inte kunna redigera sina inlägg efter det angivna intervallet',
		'IP_time_15m' => '15 Minuter',
		'IP_time_30m' => '30 Minuter',
		'IP_time_1h' => '1 Timme',
		'IP_time_2h' => '2 Timmar',
		'IP_time_6h' => '6 Timmar',
		'IP_time_12h' => '12 Timmar',
		'IP_time_24h' => '24 Timmar',

// TAB - Posting
		'IP_posts_precompiled' => 'Avaktivera förkompilerade inlägg',
		'IP_posts_precompiled_explain' => 'Genom att aktivera detta alternativ visas ämne alltid för att sammanställa inläggs texten utan att använda förkompilerad text, (detta är långsammare, men det kan vara användbart i vissa fall).',
		
		'IP_read_only_forum' => 'Avaktivera meddelanden i alla forum (Läs läge en annan metod som phpMyAdmin eller MySQLDumper)',
		'IP_read_only_forum_explain' => 'Detta alternativ gör det möjligt att läsa meddelanden i alla forum utan attändra behörigheter. Detta kan vara användbart för begränsad tid när admins vill hindra användare meddelanden utan att behöva läsa webbplats eller ändra alla forums tillstånd. Administratörer kan fortfarande posta.',

		'IP_allow_drafts' => 'Tillåt utkast',
		'IP_allow_drafts_explain' => 'Tillåt användare att spara inlägg som utkast',

		'IP_allow_mods_edit_admin_posts' => 'Kan moderatorer redigera admin inlägg?',
		'IP_allow_mods_edit_admin_posts_explain' => 'Tillåt moderatorer att redigera admin inlägg',
		
		'IP_forum_limit_edit_time_interval' => 'Begränsa redigerings tidsintervall',
		'IP_forum_limit_edit_time_interval_explain' => 'Detta ställer in tidsintervallet för användarna att få redigera egna meddelanden. Sätt till NOLL för inga gränser (funktion bör kunna aktiveras per kategori grund i forum hanteringen). Denna inställning kommer att tillämpas för alla användare oavsett deras antal inlägg, så det skiljer sig från liknande antispam-funktioner som bara gäller för användare som inte nådde en viss mängd inlägg.',

		'IP_force_large_caps_mods' => 'ProperCase ämnesområden',
		'IP_force_large_caps_mods_explain' => 'Ämnes frågor kommer att omvandlas till riktiga fall för alla användare utom admins',

		'IP_show_new_reply_posting' => 'Varna för nya svar',
		'IP_show_new_reply_posting_explain' => 'Om du aktiverar detta, kommer en varning att visas när det finns nya svar när du besvarar ett ämne',

		'IP_no_bump' => 'Förbjud stötning inom 24 timmar',
		'IP_no_bump_explain' => 'Aktivera detta alternativ gör att senaste postare inte kan skicka inom 24 timmar från det senaste inlägget om inte någon annan har postat ett svar (gäller aldrig admins)',
		'MODS_ALLOWED' => 'Moderatorer kan posta',
		
		'IP_robots_index_topics_no_replies' => 'Aktivera robots indexerings ämnen inga svar',
		'IP_robots_index_topics_no_replies_explain' => 'Aktivera det här alternativet gör det möjligt för indexering efter ämnen utan svar, annars kommer ämnen utan svar inte att indexeras',
		
		'IP_display_tags_box' => 'TAGGAR :: Visa Ämnes Taggar',
		'IP_display_tags_box_explain' => 'Aktivera det här alternativet gör det möjligt för Ämnes Taggar (taggar kan användas för indexerings ändamål): taggar kan infogas / redigeras enbart av administratörer (och moderatorer om du aktiverar brytaren nedan) för att undvika spam',
		
		'IP_allow_moderators_edit_tags' => 'TAGGAR :: Tillåt Moderatorer Redigera Taggar',
		'IP_allow_moderators_edit_tags_explain' => 'Aktivera det här alternativet tillåter Moderatorer att ändra inläggs taggar',

		'IP_show_topic_description' => 'Aktivera ämnes beskrivningar',
		'IP_show_topic_description_explain' => 'Aktivering av detta alternativ gör det möjligt för ämnes beskrivning medan du surfar på forumet',

		'IP_edit_notes' => 'Aktivera redigera notering',
		'IP_edit_notes_explain' => 'Aktivering av detta alternativ aktiverar redigerings noteringar',

		'IP_edit_notes_n' => 'Maximalt redigerings anteckningar',

		'IP_always_show_edit_by' => 'Visa alltid post redigering',
		'IP_always_show_edit_by_explain' => 'Aktivering av detta alternativ kommer alltid att visa "Senast redigerad av..." i meddelandets sidfot när någon ändrar det. Admins redigeringar visas inte som standard',

		'IP_show_social_bookmarks' => 'Socialt Bokmärke',
		'IP_show_social_bookmarks_explain' => 'Visa Socialt Bokmärkes avsnitt när du tittar på ämnen',

		'IP_link_this_topic' => 'Länka detta ämne',
		'IP_link_this_topic_explain' => 'Visa "Länka detta ämne" boxen när du tittar på ämnen',

		'IP_smilies_topic_title' => 'Smileys för ämnes titel och beskrivning',
		'IP_smilies_topic_title_explain' => 'Aktivering av detta alternativ aktiverar även smileys för ämnes titel och ämnes beskrivning',

		'IP_enable_colorpicker' => 'Aktivera ColorPicker i postning',

		'IP_quote_iterations' => 'Max antal lämnade citat',

		'IP_ftr_disable' => 'Inaktivera Tvinga Ämnes Läs',
		'IP_ftr_disable_explain' => 'Genom att aktivera det här alternativet blir Force Topic Läs avaktiverats',

		'IP_disable_html_guests' => 'Inaktivera HTML-länkar för gäster',

		'IP_birthday_viewtopic' => 'Visa inläggarens ålder i inlägg',

		'IP_switch_poster_info_topic' => 'Visa inläggarens info i ämnen (Språk, Stil, etc.)',

		'IP_enable_quick_quote' => 'Aktivera snabb citat och utanör ämnet',
		'IP_enable_quick_quote_explain' => 'Snabb citat tillåter användare att citera något inlägg i ett ämne med ett enkelt klick. Denna funktion använder JavaScript, och att aktivera detta kan resultera i stora sidor om det finns många inlägg med mycket text i ett ä¤mne.',
		
		'IP_allow_html_only_for_admins' => 'Aktivera HTML för enbart Administratörer',
		'IP_allow_html_only_for_admins_explain' => 'Aktivering av detta alternativ kommer att tillåta administratörer att använda HTML-taggar i inlägg. Observera att denna funktion kan leda till säkerhetsproblem eller fel sidformatering om den inte anvÃ¤nds på rätt sätt.',
		
		'IP_enable_custom_bbcodes' => 'Aktivera anpassade BBKoder',
		'IP_enable_custom_bbcodes_explain' => 'Detta alternativ möjliggör skräddarsydda BBKoder skapade i ACP.',

		'IP_allow_all_bbcode' => 'Aktivera alla BBKoder',
		'IP_allow_all_bbcode_explain' => 'Aktivering av detta alternativet gör det möjligt för alla BBKoder i signaturer och andra ställen där de inte brukar vara aktiva. BBKoder som vanligtvis är avaktiverade i signaturen: IMG, ALBUMIMG och några intensiva formaterings BBKoder. Om du aktiverar detta alternativ, kommer vissa signaturer att konsumera mer utrymme och resurser.',

		'IP_switch_bbcb_active_content' => 'Tillåt BBKod för aktivt innehåll i poster',
		'IP_switch_bbcb_active_content_explain' => 'Aktiverar BBKod för Flash, Video, Audio Streams, RealMedia och Quicktime.',

// TAB - Images In Posts
		'IP_auth_view_pic_upload' => 'Bilder uppladdnings rättigheter (Posta Icy Bilder)',

		'IP_enable_postimage_org' => 'Aktivera PostImage knapp i post formulär.',

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
		'Forum_link_url_explain' => 'Ställ in en URL till en Icy Phoenix fil eller en full URL till en extern server',
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
		'icon_explain' => 'Denna ikon kommer att visas framför forumets titel. Du kan ställa in här en direkt URL eller en $image[] nyckel post (se <i>your_template</i>/<i>your_template</i>.cfg).',

// TAB - Calendar
		'Lang_extend_topic_calendar' => 'Ämne Kalender',

// TAB - SEO
		'IP_url_rw' => 'URL Återskrivning',
		'IP_url_rw_explain' => 'Genom att aktivera det här alternativet URL Återskrivning kommer att aktiveras (HTML länkar i stället för PHP, för bättre bot spidering) för alla.',

		'IP_url_rw_guests' => 'URL återskrivning för gäster',
		'IP_url_rw_guests_explain' => 'Genom att aktivera det hÃ¤r alternativet kommer URL återskrivning att aktiveras endast för gäster och bots.',

		'IP_bots_reg_auth' => 'Bots REG behörighets nivå',
		'IP_bots_reg_auth_explain' => 'Genom att aktivera detta alternativ ges Bots samma åtkomstnivå för registrerade användare.',

		'IP_lofi_bots' => 'LoFi för Bots',
		'IP_lofi_bots_explain' => 'Genom att aktivera detta alternativ kommer LoFi att vara aktiverat för bots.',
		
		'IP_seo_cyrillic' => 'Cyrillic Chars Omvandling',
		'IP_seo_cyrillic_explain' => 'Genom att aktivera det här alternativet kommer några kyrilliska tecken att konverteras till latinska tecken (inte i inläggen, men i nyckelord, taggar och var den rena sträng funktionen används).',
		
		'IP_adsense_code' => 'Google AdSense Publisher Kod',
		'IP_adsense_code_explain' => 'Sätt här in din Google AdSense Publisher Kod och det kommer att införas i Google Search sidan. Om du inte vill använda den, bara lämna fältet tomt.',

		'IP_google_analytics' => 'Google Analytics Kod',
		'IP_google_analytics_explain' => 'Sätt här in din Google Analytics Kod (Javascript provided by Google site) och det kommer att bli automatiskt infogat längst ned på varje sida.',

//Sitemap
		'Sitemap_settings' => 'Sidokarta Inställningar',

		'IP_sitemap_topic_limit' => 'Google Sidokarta :: Ämnes Begränsning',
		'IP_sitemap_topic_limit_explain' => 'Maximalt antal ämnen att hämta med en enda database query',

		'IP_sitemap_announce_priority' => 'Google Sidokarta :: Meddelande Prioritet',
		'IP_sitemap_announce_priority_explain' => 'Prioritet för meddelanden (måste vara ett tal mellan 0.0 &amp; 1.0 inklusive)',

		'IP_sitemap_sticky_priority' => 'Google Sitemap :: Sticky Prioritet',
		'IP_sitemap_sticky_priority_explain' => 'Prioritet fÃ¶r sticky Ã¤mnen (mÃ¥ste vara ett tal mellan 0.0 &amp; 1.0 inklusive)',

		'IP_sitemap_default_priority' => 'Google Sitemap :: Standard Prioritet',
		'IP_sitemap_default_priority_explain' => 'Prioritet för vanliga ämnen (måste vara ett tal mellan 0.0 &amp; 1.0 inklusive)',

		'IP_sitemap_sort' => 'Google Sitemap :: Sorterings Ordning',
		'IP_sitemap_new_first' => 'Nya inlägg först',
		'IP_sitemap_old_first' => 'Gamla inlägg först',
		
//Tags
		'IP_word_graph_max_words' => 'TAGGAR :: Maximalt Ord',
		'IP_word_graph_max_words_explain' => 'Välj det maximala antal ord som ska visas. Ett större antal kan påverka serverns belastning. Det rekommenderade antalet är 250..',

		'IP_word_graph_word_counts' => 'TAGGAR :: Aktivera ord räkning',
		'IP_word_graph_word_counts_explain' => 'Visa det totala antalet ord bredvid varje ord?<br />Exempel: <b>Icy Phoenix (365)</b>?',

		'IP_forum_wordgraph' => 'TAGGAR :: Forum Taggar (Global Switch)',
		'IP_forum_wordgraph_explain' => 'Denna funktion gör det möjligt att aktivera en forum baserad tagg tabell längst ner på varje forum. Du måste även göra det aktivt för ett enda forum i Forums Management avsnitt.',
		
		'IP_forum_tags_type' => 'TAGS :: Forum Taggar Typ',
		'IP_forum_tags_type_explain' => 'Du kan välja om du vill visa Wordgraph (ord tas från sökmotor tabeller) eller taggar (taggar specificerade i ämnen)',
		'IP_forum_tags_type_tags' => 'Taggar',
		'IP_forum_tags_type_wordgraph' => 'Wordgraph',

		'Similar_topics' => 'Liknande ämnen',
		'Similar_topics_explain' => 'Konfigurera sökning av liknande ämnen.',

		'IP_similar_topics' => 'Liknande Ã¤mnen :: Liknande ämnen (Global Switch)',
		'IP_similar_topics_explain' => 'Detta är den globala switchen för liknande ämnen. Om du vill slå på den här funktionen behöver du också göra det aktivt i ett enda forum i Forums Management avsnittet.',

		'IP_similar_topics_desc' => 'Liknande ämnen :: Ta hänsyn till beskrivning av ett inlägg',

		'IP_similar_stopwords' => 'Liknande ämnen :: Uteslut stop-ord',

		'IP_similar_max_topics' => 'Liknande ämnen :: Maximalt antal inlägg att visa',

		'IP_similar_sort_type' => 'Liknande Ã¤mnen :: Sortera efter',
		'IP_similar_sort_type_explain' => 'Välj sorterings metod för liknande ämnen',
		'IP_similar_sort_type_time' => 'Post Tid',
		'IP_similar_sort_type_relev' => 'Relevans',

		'IP_similar_ignore_forums_ids' => 'Liknande ämnen :: Ignorerade forum',
		'IP_similar_ignore_forums_ids_explain' => 'Ange ID\'s på forum, där liknande frågor kommer att ignoreras (t.ex. test forum, forum för diskussion, etc.). Ett ID per rad.',

// TAB - Logging And Security
		'IP_admin_protect' => 'Skydda huvud admin konto',
		'IP_admin_protect_explain' => 'Aktivering av detta alternativ kommer att lägga större trygghet till huvud admin: det kan inte degraderas av andra administratörer eller användare.',
		
		'IP_ip_admins_only' => 'Visa IP Adresser till enbart Admins',
		'IP_ip_admins_only_explain' => 'Aktivera det här alternativet tillåter endast administratörer att visa IP-adresser i forum och profiler (inaktivera det här alternativet kan även tillåta moderatorer att visa IP-adresser).',

		'IP_db_log_actions' => 'Aktivera DB åtgärds logg',
		'IP_db_log_actions_explain' => 'Genom att aktivera det här alternativet kommer alla åtgärder som ändrar DB att lagras i en DB. Om det här alternativet har ställts in som gäller constants.php, då kan det inte inaktiveras i ACP. Om du väljer att få rapporter, då kommer extra filer att sparas med alla fel inloggade.',

		'IP_mg_log_actions' => 'Aktivera TXT åtgärds logg',
		'IP_mg_log_actions_explain' => 'Genom att aktivera det här alternativet kommer alla åtgårder som ändrar DB att lagras i en textfil på servern (filen kommer att sparas i logg mappen). Denna fil är inte lätt att läsa, men det kan vara bra under vissa förutsättningar. Aktivera det bara om du vet vad du gör (webbplats kan slöa ner sig om du aktiverar det).',

		'IP_write_errors_log' => 'Aktivera sido errors logg',
		'IP_write_errors_log_explain' => 'Genom att aktivera det här alternativet kommer alla webbplats fel (dvs. 404 filen saknas, dåligt önskemål, etc.) att vara inloggad på en daglig TXT fil. Kom ihåg att du måste aktivera fel omdirigerade till errors.php i .Htaccess att använda denna funktion (ett exempel är med i. Htaccess bara infoga din domän och decomment raderna).',

		'IP_write_digests_log' => 'Aktivera Sammandrags Logg',
		'IP_write_digests_log_explain' => 'Genom att aktivera det här alternativet kommer alla sammandrag som skickas att vara inloggad på en daglig TXT fil.',

		'IP_logs_path' => 'Sökväg för loggar (kom ihåg att CHMOD:a denna mapp till 0755 eller 0777 som begärt)',
		'IP_logs_path_explain' => 'Ange sökvägen för fel och andra loggar i förhållande till din root och utan avslutande snedstrecket. Exempel: <b>loggar</b>.',

// TAB - Cron
		'IP_cron_global_switch' => 'Aktivera PHP Cron [Global Switch]',
		'IP_cron_global_switch_explain' => 'Genom att aktivera det här alternativet kommer ett PHP baserat cron att aktiveras: vissa automatiska operationer kommer att genomföras vid fasta tidsintervaller. Den optimala tidsintervallen för varje cron funktion beror på din webbplats trafik och preferenser : Om du inte vet vad dessa inställningar kan påverka, vänligen lämna denna funktion avaktiverad, och du har förmodligen inte någon nytta av den.',
		
		'IP_cron_digests_interval' => 'Digests PHP Cron',
		'IP_cron_digests_interval_explain' => 'Den här funktionen vill aktivera en PHP emulering av CRON som försöker skicka e-post en gång per timme, men eftersom den är baserad på en PHP-emulering är den kanske inte korrekt exekverad varje gång. Det innebär att ibland får e-post inte skickas. Om du kan aktivera CRON på din server, välj <b>Server Cron</b> och se till att du aktiverar filen manuellt för att låta digere köras via servern.<br /><br /><b>Senast körd: ' . (($config['cron_digests_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y  - H.i.s', ($config['cron_digests_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_birthdays_interval' => 'Födelsedags PHP Cron',
		'IP_cron_birthdays_interval_explain' => 'Den här funktionen vill aktivera en PHP emulation av CRON som försöker skicka födelsedags hälsnings e-post, men eftersom den är baserad på en PHP emulation är den kanske inte korrekt exekverad varje gång. Det innebÃ¤r att ibland får e-post inte skickas.<br /><br /><b>Senast körd: ' . (($config['cron_birthdays_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y  - H.i.s', ($config['cron_birthdays_last_run']), $config['board_timezone'])) . '</b>',

		'IP_cron_files_interval' => 'Filer Executions Cron Intervall',
		'IP_cron_files_interval_explain' => 'Denna typ av cron kan användas för att automatiskt köra vissa filer varje fasta intervall som du bestämmer. De filer som skall verkställas skall läggas i <b>constants.php</b> &raquo; <b>definiera(\'CRON_FILES\', \'\');</b>. Flera filer måste vara åtskilda med kommatecken.<br /><br /><b>Senast körd: ' . (($board_config['cron_files_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y H:i:s', ($board_config['cron_files_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_database_interval' => 'DB Optimerings Cron Intervall',
		'IP_cron_database_interval_explain' => 'Denna funktion kommer att optimera databasen på webbplatsen varje valda intervall.<br /><br /><b>Senast körd: ' . (($board_config['cron_database_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y H:i:s', ($board_config['cron_database_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_cache_interval' => 'Proper Mall Cache Cron Intervall',
		'IP_cron_cache_interval_explain' => 'Mall cache rengörs varje valda intervall.<br /><br /><b>Senast körd: ' . (($board_config['cron_cache_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y H:i:s', ($board_config['cron_cache_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_sql_interval' => 'Propert SQL Cache Cron Intervall',
		'IP_cron_sql_interval_explain' => 'SQL cache rengörs varje valda intervall.<br /><br /><b>Senast körd: ' . (($board_config['cron_sql_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y H:i:s', ($board_config['cron_sql_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_users_interval' => 'Propert AnvÃ¤ndares Cache Cron Intervall',
		'IP_cron_users_interval_explain' => 'Användares cache rengörs varje valda intervall.<br /><br /><b>Senast körd: ' . (($board_config['cron_users_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y H:i:s', ($board_config['cron_users_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_topics_interval' => 'Propert Ämnes Cache Cron Intervall',
		'IP_cron_topics_interval_explain' => 'Ämnes cache rengörs varje valda intervall.<br /><br /><b>Senast körd: ' . (($board_config['cron_topics_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y H:i:s', ($board_config['cron_topics_last_run']), $board_config['board_timezone'])) . '</b>',
		
		'IP_cron_sessions_interval' => 'Tidy Sessions Cron Interval',
		/*'IP_cron_sessions_interval_explain' => 'Sessions tabell städas varje valda intervall.<br /><br /><b>Senast körd: ' . (($config['cron_sessions_last_run'] == 0) ? '($board_config['cron_topics_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y H:i:s', ($board_config['cron_topics_last_run']), $board_config['board_timezone'])' : create_date('d M Y  - H.i.s', ($config['cron_sessions_last_run']), $config['board_timezone'])) . '</b>',*/

		'Cron_Disabled' => 'Avaktiverad',
		'Cron_Server' => 'Server Cron',
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
	'List' => 'Lista',
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
	'Date_error' => 'dag %d, månad %d, År % är inte ett giltigt datum',

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