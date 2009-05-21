<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_extend_icy_phoenix.php 96 2009-04-27 16:48:19Z Mighty Gorgon $
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
	'20_SQL_Charge' => 'SQL Optimalisatie',
	'30_Posting' => 'Berichtinstellingen',
	'40_IMG_Posting' => 'Afbeeldingen in berichten',
	'50_Hierarchy_setting' => 'Forum',
	'60_Calendar_settings' => 'Kalender',
	'70_SEO' => 'SEO',
	'80_Security' => 'Logs en veiligheid',
	'90_Cron' => 'Cron',
	)
);

// admin part
if ( $lang_extend_admin )
{
	$lang = array_merge($lang, array(
		'Lang_extend_icy_phoenix' => 'Icy Phoenix',

// TAB - Icy Phoenix
		'IP_enable_xs_version_check' => 'Schakel Icy Phoenix versiecontrole in',
		'IP_enable_xs_version_check_explain' => 'Inschakeling van deze optie betekent dat, als er een nieuwe versie van Icy Phoenix beschikbaar is om te downloaden wordt weergegeven in de ACP. Uitschakeling van deze optie versnelt je beheerderspaneel een klein beetje. <br /><b>NB:</b> Deze controle wordt maar één keer per dag gedaan en dan opgeslagen.',

		'IP_disable_email_error' => 'Schakel fouten uit bij e-mail versturen',
	
		'IP_html_email' => 'HTML E-mail',
		'IP_html_email_explain' => 'Inschakeling van deze optie betekent dat er HTML e-mailberichten worden verstuurd, anders is dat een simpele tekstbericht',

		'IP_enable_digests' => 'Schakel Digests in',

		'IP_digests_php_cron' => 'Schakel Digests PHP Cron in',
		'IP_digests_php_cron_explain' => 'Deze functie schakelt een PHP emulatie van een cron in om e-mail per uur te verzenden, maar sinds het is gebaseerd op een PHP emulatie kan het niet altijd succesvol worden uitgevoerd. Dat betekend dat soms de e-mail niet verzonden kunnen worden. Als je cron ingeschakeld hebt op je server, gebruik dan cron in deze functie.',
	
		'IP_emails_only_to_admins' => 'E-mails alleen naar beheerders',
		'IP_emails_only_to_admins_explain' => 'Alleen het e-mailsysteem toestaan om te kunnen mailen naar beheerders',
	
		'IP_ajax_features' => 'AJAX functies inschakelen',
		'IP_ajax_features_explain' => 'Sommige AJAX functies zijn geintegreerd in deze website.',
	
		'IP_ajax_checks_register' => 'AJAX controle tijdens registratie',
		'IP_ajax_checks_register_explain' => 'Deze optie inschakelen betekent dat, het mogelijk is dat er realtime controles plaatsvinden van sommige velden die ingevuld moeten worden bij registratie (waarschuwing: deze optie kan je registratiepagina vertragen).',

		'IP_inactive_users_memberlists' => 'Inactieve gebruikers in gebruikerslijst en verjaardagenblok',
		'IP_inactive_users_memberlists_explain' => 'Deze optie inschakelen betekent dat, inactieve gebruikers worden weergegeven in de gebruikerslijst en verjaardagenblok.',
	
		'IP_page_gen' => 'Paginaopbouwtijd in footer weergeven',
	
		'IP_switch_header_dropdown' => 'Dropdownmenu in header activeren',
		'IP_switch_header_dropdown_explain' => 'Dit activeert een dropdownmenu in de forumheader voor het zoeken en voor berichten',
	
		'IP_show_alpha_bar' => 'Geef alfabetisch volgordebalk weer in de viewforum (hoofdinstelling)',
		'IP_show_alpha_bar_explain' => 'Deze optie laat een alfabetische volgordebalk zin boven aan de viewforumpagina. Je moet het ook voor elke forum instellen in de forumbeheer.',

		'IP_show_rss_forum_icon' => 'Forumindexiconen',
		'IP_show_rss_forum_icon_explain' => 'Deze optie geeft rechts van elke forumtitel iconen weer (op Forumindex): RSS, New Topic...',
	
		'IP_allow_mods_view_self' => 'Sta alle moderators toe om SELF AUTH onderwerpen te bekijken',
		'IP_allow_mods_view_self_explain' => 'Als een forum is ingesteld op SELF AUTH toegang, alleen beheerders en forummoderators kunnen deze onderwerpen bekijken. Bovendien zijn er meerdere functies die zulke inhoud van deze aard weergeven maar niet geauthoriseerd zijn om dit te bekijken: Recente onderwerpen, zoeken, recente berichtenblokken, willekeurige onderwerpenblokken, etc. Om dit te voorkomen is er een extra functie gecodeerd welke toestaat om niet geauthoriseerde gebruikers toegang te bieden via andere wegen. Aan de andere kant je kan ook alle moderators (niet alleen beheerders) toestaan om deze berichten te bekijken via de andere wegen. Als je dit naar JA hebt gezet dan zijn alle moderators in staat om alle inhoud van deze berichten te bekijken: Recent, zoeken, onderwerpgerelateerde blokken... Maar als je het op UIT hebt gezet zijn alleen de geauthoriseerde moderators die hun eigen geauthoriseerde onderwerpen mogen bekijken via de andere wegen. De functie is zo gecodeerd om extra SQL- ruimte te besparen. Als je niet gebrukmaakt van SELF AUTH forums, dan heb je deze functie niet nodig.',
		
		'IP_xmas_fx' => 'Kerstsneeuw',
		'IP_xmas_fx_explain' => 'Deze optie schakelt kerstsneeuw in.',

		'IP_xmas_gfx' => 'Kerstafbeeldingen',
		'IP_xmas_gfx_explain' => 'Bij inschakeling van deze optie worden de kerstafbeeldingen toegepast.',
	
		'IP_select_theme' => 'Stijl veranderen',
		'IP_select_theme_explain' => 'Deze optie inschakelen betekent dat, er een selectieveld met alle beschikbare stijlen worden toegevoegd voor snelle overschakeling naar andere stijlen.',
	
		'IP_select_lang' => 'Taal veranderen',
		'IP_select_lang_explain' => 'Deze optie inschakelen betekent dat, er een link dan beschikbaar voor iedere taal op het forumindex, voor snelle overschakeling naar een andere taal.',
	
		'IP_cms_dock' => 'Geef Apple stijldock in CMS weer',
		
		'IP_cms_style' => 'CMS Moderne stijl',
		'IP_cms_style_explain' => 'Moderne stijl voor CMS houdt in een moderne lay-out met een transparante menu, terwijl de klassieke stijl een menu aan de zijkant heeft',

		'IP_split_ga_ann_sticky' => 'Onderwerp op type splitsen',
		'IP_split_ga_ann_sticky_explain' => 'Vanaf hier kun je kiezen of je onderwerptypes wilt splitsen op de forumpagina',
		'IP_split_topic_0' => '<p>Alle onderwerptypes bij elkaar (niet splitsen)</p>',
		'IP_split_topic_1' => '<p>Forummededelingen, mededelingen en vastgepinde onderwerpen bij elkaar, normale onderwerpen splitsen</p>',
		'IP_split_topic_2' => '<p>Forummededelingen gesplitst, mededelingen en vastgepinde onderwerpen bij elkaar, normale onderwerpen splitsen</p>',
		'IP_split_topic_3' => '<p>Alle onderwerptypen splitsen</p>',

// TAB - SQL Charge
		'IP_fast_n_furious' => 'Snel en handig',
		'IP_fast_n_furious_explain' => 'Deze optie inschakelen betekent dat, sommige grote SQL functies worden uitgeschakeld, om hopelijk je website te versnellen!',

		/*
		'IP_db_cron' => 'Database optimaliseren',
		'IP_db_cron_explain' => 'Deze optie inschakelen betekent dat er een optimisatieproces plaatsvindt om het forum snel te houden.',
		*/
	
		'IP_site_history' => 'Sitegeschiedenis',
		'IP_site_history_explain' => 'Deze optie inschakelen betekent dat, er een geschiedenis voor deze website wordt bijgehouden.',
	
		'IP_global_disable_upi2db' => 'Schakel UPI2DB geheel uit',
		'IP_global_disable_upi2db_explain' => 'Deze optie schakelt UPI2DB geheel uit om extra geheugen te besparen.',
	
		'IP_enable_own_icons' => 'Eigen berichticonen',
		'IP_enable_own_icons_explain' => 'Bij inschakeling van deze optie worden de iconen voor de onderwerpen, welke eigen berichten bevat, gemarkeerd.',
	
		'IP_show_forums_online_users' => 'Geef aantal gebruikers weer dit online zijn in de forums',
		'IP_show_forums_online_users_explain' => 'Dit schakelt een bezoekersteller in voor elk forum op de index.',
	
		'IP_google_bot_detector' => 'Googlebotdetector inschakelen',
		
		'IP_gsearch_guests' => 'Forceer Google zoeken voor gasten',
	
		'IP_visit_counter_switch' => 'Schakel bezoekersteller in',

		'IP_enable_new_messages_number' => 'Geef de aantal nieuwe berichten weer sinds laatste bezoek',
	
		'IP_disable_thanks_topics' => 'Dankknop in onderwerpvenster uitschakelen',
	
		'IP_show_thanks_profile' => 'Geef aantal ontvangen dankberichten weer in de profiel',
	
		'IP_show_thanks_viewtopic' => 'Geef aantal ontvangen dankberichten weer in de onderwerpen',

		'IP_disable_topic_view' => 'Schakel "Wie heeft dit onderwerp gelezen" uit',
		'IP_disable_topic_view_explain' => 'Deze optie staat je toe om "Wie heeft dit onderwerp gelezen" functie uit te schakelen (dit verminderd SQL ruimte).',
	
		'IP_disable_referrers' => 'Schakel Referrers uit',
		'IP_disable_referrers_explain' => 'Deze optie staat toe om de Referrers functie uit te schakelen (dit verminderd SQL ruimte).',
	
		'IP_disable_logins' => 'Schakel inlogopname uit',
		'IP_disable_logins_explain' => 'Bij uitschakeling van deze optie worden de inlogpogingen niet meer opgenomen.',
	
		'IP_last_logins_n' => 'Aantal inlogpogingen om op te nemen',
	
		'IP_index_top_posters' => 'Top Posters :: Forumindex',
		'IP_index_top_posters_explain' => 'Inschakeling van deze optie betekent dat, de top posters worden weergegeven op <b>Forum Index</b>.',
	
		'IP_index_last_msgs' => 'Laatste berichten :: Forumindex',
		'IP_index_last_msgs_explain' => 'Deze optie inschakelen betekent dat, de laatste berichten worden weergegeven op <b>Forumindex</b>.',
	
		'IP_online_last_msgs' => 'Laatste berichten :: Wie is online',
		'IP_online_last_msgs_explain' => 'Deze optie inschakelen betekent dat, de laatste berichten worden weergegeven op <b>Wie is online</b>.',
	
		'IP_last_msgs_n' => 'Aantal laatste berichten om weer te geven.',

		'IP_last_msgs_x' => 'Forum om uit te sluiten',
		'IP_last_msgs_x_explain' => 'Geef alstublieft de IDs in van de forums, die niet moeten worden meegenomen in de laatste berichtenveld (je kan elk ID scheiden met een komma).',

		'IP_show_chat_online' => 'AJAX Chat Online :: Forumindex',
		'IP_show_chat_online_explain' => 'Deze optie inschakelen betekent dat, de gebruikers die online zijn in AJAX chat worden weergegeven op <b>Forum Index</b>.',
	
		'IP_index_shoutbox' => 'Shoutbox :: Forumindex',
		'IP_index_shoutbox_explain' => 'Deze optie inschakelen betekent dat, de shoutbox wordt weergegeven op <b>Forumindex</b>.',
	
		'IP_online_shoutbox' => 'Shoutbox :: Wie is online',
		'IP_online_shoutbox_explain' => 'Deze optie inschakelen betekent dat, de shoutbox wordt weergegeven op <b>Wie is Online</b>.',
	
		'IP_img_shoutbox' => '[img][/img] bbcode in de shoutbox uitschakelen',
		'IP_img_shoutbox_explain' => 'Deze optie uitschakelen betekent dat, [img][/img] bbcode niet in de shoutbox gebruikt kan worden.',
	
		'IP_index_links' => 'Links :: Forumindex',
		'IP_index_links_explain' => 'Deze optie inschakelen betekent dat, de links op de<b>Forumindex</b> worden weergegeven.',
	
		'IP_index_birthday' => 'Verjaardagen :: Forum Index',
		'IP_index_birthday_explain' => 'Deze optie inschakelen betekent dat, de verjaardagen op de<b>Forumindex</b> worden weergegeven.',
	
		'IP_show_random_quote' => 'Willekeurige citaten :: Forum Index',
		'IP_show_random_quote_explain' => 'Deze optie inschakelen betekent dat, de willekeurige citaten op de<b>Forumindex</b> worden weergegeven',

// TAB - Posting
		'IP_posts_precompiled' => 'Vooropgebouwde berichten uitschakelen',
		'IP_posts_precompiled_explain' => 'Bij inschakelen van deze optie, viewtopic moet alle berichten opnieuw opbouwen zonder vooropgebouwde tekst, (dit is langzamer, maar kan nuttig zijn in sommige gevallen).',
	
		'IP_allow_drafts' => 'Sta concept toe',
		'IP_allow_drafts_explain' => 'Sta gebruikers toe om berichten op te slaan als concept',
	
		'IP_allow_mods_edit_admin_posts' => 'Kunnen moderators berichten van beheerders bewerken?',
		'IP_allow_mods_edit_admin_posts_explain' => 'Sta moderators toe om berichten van beheerders te bewerken',
	
		'IP_force_large_caps_mods' => 'HoofdLetter onderwerpen',
		'IP_force_large_caps_mods_explain' => 'Onderwerptitels worden geconverteerd naar HoofdLetter titels voor alle gebruikers, behalve voor de beheerders',
	
		'IP_show_new_reply_posting' => 'Waarschuwen voor nieuwe reacties',
		'IP_show_new_reply_posting_explain' => 'Als je dit inschakelt, een waarschuwing wordt weer gegeven als er nieuwe reacties zijn voordat je wilt reageren in een onderwerp',

		'IP_no_bump' => 'Verbied omhooghalen binnen 24 uur',
		'IP_no_bump_explain' => 'Inschakeling van deze optie betekent dat, voor wie het laatst heeft gereageerd niet meer in de mogelijk is om een bericht te plaatsen binnen de 24 uur voordat iemand anders een bericht heeft geplaatst',
		'MODS_ALLOWED' => 'Moderators kunnen berichten plaatsen',
		
		'IP_show_topic_description' => 'Schakel onderwerpomschrijving in',
		'IP_show_topic_description_explain' => 'Inschakeling van deze optie betekent dat, onderwerpomschrijving wordt ingeschakeld als je een bericht wilt plaatsen maar ook tijdens het bladeren in de forums wordt weergegeven',

		'IP_edit_notes' => 'Schakel bewerknotities in',
		'IP_edit_notes_explain' => 'Inschakeling van deze optie betekent dat bewerknotities ingeschakeld worden',

		'IP_edit_notes_n' => 'Maximum aantal bewerknotities',
	
		'IP_always_show_edit_by' => 'Altijd de laatste bewerking bij een bericht weergeven',
		'IP_always_show_edit_by_explain' => 'Inschakeling van deze optie betekent dat er altijd "Laatst bewerkt door..." wordt weergegeven onderaan de bericht welke door iemand is bewerkt. Bewerkingen door beheerders worden standaard niet weergegeven',
	
		'IP_show_social_bookmarks' => 'Sociale favorieten',
		'IP_show_social_bookmarks_explain' => 'Geef sociale favorietensectie weer tijdens het bekijken van een onderwerp',
	
		'IP_link_this_topic' => 'Link naar dit onderwerp',
		'IP_link_this_topic_explain' => 'Geef "Link dit onderwerp" veld weer tijdens het bekijken van een onderwerp',

		'IP_smilies_topic_title' => 'Smilies voor onderwerptitels en omschrijvingen',
		'IP_smilies_topic_title_explain' => 'Deze optie inschakelen betekent dat, smilies in onderwerptitels en omschrijvingen gebruikt mogen worden',
	
		'IP_enable_colorpicker' => 'Schakel ColorPicker in',
	
		'IP_quote_iterations' => 'Maximum aantal geneste citaten',
	
		'IP_disable_ftr' => 'Schakel forceer onderwerp lezen compleet uit',
		'IP_disable_ftr_explain' => 'Bij inschakeling van deze optie wordt forceer onderwerp lezen compleet uitgeschakeld',
	
		'IP_disable_html_guests' => 'Schakel HTML links uit voor gasten',
	
		'IP_birthday_viewtopic' => 'Leeftijd van de gebruiker in onderwerpen weergeven',
	
		'IP_switch_poster_info_topic' => 'Informatie van gebruiker in onderwerpen (taal, stijl, enz.) weergeven',
	
		'IP_enable_quick_quote' => 'Schakel snelle citaat en off topic in',
		'IP_enable_quick_quote_explain' => 'Snelle citaat staat gebruikers in staat om in een bericht te citeren met een simpele klik. Deze functie maakt gebruik van JavaScript en inschakeling daarvan kan resulteren in lange pagina\'s met een grote hoeveelheid tekst in een onderwerp.',

		'IP_allow_all_bbcode' => 'Schakel alle BBCodes in',
		'IP_allow_all_bbcode_explain' => 'Deze optie inschakelen betekent dat, alle BBCodes zijn dan ingeschakeld om te gebruiken in de onderschrift en op ander plaatsen waar dit kan worden gebruikt. BBCodes wat normaal is uitgeschakeld in onderschriften zijn IMG, ALBUMIMG en sommige andere intensieve BBCodes. Als je deze optie inschakelt, sommige onderschriften resulteren in meer schijfgebruik en langere laadtijd.',
	
		'IP_switch_bbcb_active_content' => 'BBCode voor actieve inhoud in berichten toestaan',
		'IP_switch_bbcb_active_content_explain' => 'BBCode voor Flash, Video, Audiostreams, RealMedia en Quicktime activeren.',

// TAB - Images In Posts
		'IP_auth_view_pic_upload' => 'Afbeeldingenuploadpermissies (plaats Icy- afbeeldingen)',
	
		'IP_enable_postimage_org' => 'Schakel PostImage button in op het berichtenformulier',
	
		'IP_gd_version' => 'GD Versie:',
		'GD_0' => 'Geen GD',
		'GD_1' => 'GD1',
		'GD_2' => 'GD2',

		'IP_show_img_no_gd' => 'GIF thumbnails zonder gebruik te maken van GD bibliotheek (volledige afbeeldingen worden dan geladen en worden verkleind) weergeven.',
	
		'IP_thumbnail_posts' => 'Thumbnails in berichten',
		'IP_thumbnail_posts_explain' => 'Met deze optie wordt een thumbnail weergegeven in plaats van de volledige afbeelding wanneer je gebruikmaakt van de IMG BBCode',
	
		'IP_show_pic_size_on_thumb' => 'De afbeeldingsgrootte op de thumbnail weergeven',

		'IP_thumbnail_highslide' => 'Gebruik HighSlide om afbeeldingen weer te geven als thumbnails is ingeschakeld',
		'IP_thumbnail_highslide_explain' => 'De afbeelding openen in de hoofd van de huidige pagina in plaats van het openen in een nieuwe venster. Meer hierover <a href="http://www.highslide.com/" target="_blank">HighSlide JS...</a><br />Zorg dat je de vooropgebouwde berichten leegmaakt voor dat je deze instelling veranderd!',

		'IP_thumbnail_lightbox' => 'LightBox JavaScript gebruiken als thumbnails is ingeschakeld',
		'IP_thumbnail_lightbox_explain' => 'De afbeelding openen in de hoofd van de huidige pagina in plaats van het openen in een nieuwe venster. Meer hierover <a href="http://www.huddletogether.com/projects/lightbox/" target="_blank">Lightbox JS...</a><br />Zorg dat je de vooropgebouwde berichten leegmaakt voor dat je deze instelling veranderd!',

		'IP_thumbnail_cache' => 'Thumbnailcache',
	
		'IP_thumbnail_quality' => 'Thumbnailkwaliteit (1-100)',
	
		'IP_thumbnail_size' => 'Thumbnailgrootte (in pixels)',

// TAB - Forum
		'Lang_extend_categories_hierarchy' => 'Categorie Hierarchie',
	
		'Category_attachment' => 'Toevoegen aan',
		'Category_desc' => 'Omschrijving',
		'Category_config_error_fixed' => 'Een fout in de categorieinstellingen is opgelost',
		'Attach_forum_wrong' => 'Je kan geen forum in een forum toevoegen',
		'Attach_root_wrong' => 'Je kan geen forum toevoegen aan de forumindex',
		'Forum_name_missing' => 'Je kan geen forum toevoegen zonder een naam',
		'Category_name_missing' => 'Je kan geen categorie toevoegen zonder een naam',
		'Only_forum_for_topics' => 'Onderwerpen kunnen alleen worden gevonden in forums',
		'Delete_forum_with_attachment_denied' => 'Je kan geen forums met subniveaus verwijderen',

		'Category_delete' => 'Verwijder categorie',
		'Category_delete_explain' => 'Hier kan je een categorie verwijderen en vaststellen, waarheen alle forums en categorieën die in een categorie bevinden naar toe worden verplaatst.',

// forum links type
		'Forum_link_url' => 'Link URL',
		'Forum_link_url_explain' => 'Je kan hier een link aangeven naar een phpbb onderdeel of een absolute url naar een andere server.',
		'Forum_link_internal' => 'Icy Phoenix bestand',
		'Forum_link_internal_explain' => 'Kies ja als je een programma wil aanroepen dat een onderdeel van phpbb is.',
		'Forum_link_hit_count' => 'Klikkenteller',
		'Forum_link_hit_count_explain' => 'Kies ja als je wilt dat het forum de aantal klikken bijhoudt en ook weergeeft',
		'Forum_link_with_attachment_deny' => 'Je kan geen forum als een link definieren, als het al subforums bevat.',
		'Forum_link_with_topics_deny' => 'Je kan geen forum als een link definieren, als het al onderwerpen bevat.',
		'Forum_attached_to_link_denied' => 'Je kan geen forum of een categorie toevoegen in een forumlink.',
	
		'Manage_extend' => 'Instellingen +',
		'No_subforums' => 'Geen subforums',
		'Forum_type' => 'Kies wat voor soort forum je wilt',
		'Presets' => 'Voorinstellingen',
		'Refresh' => 'Vernieuwen',
		'Position_after' => 'Positioneer dit forum na',
		'Link_missing' => 'De link ontbreekt',
		'Category_with_topics_deny' => 'Er bevindt zich nog berichten in dit forum. Je kan het niet naar een categorie veranderen.',
		'Recursive_attachment' => 'Je kan een forum niet koppelen aan het laagste niveau van zijn eigen gedeelte (recursief koppelen)',
		'Forum_with_attachment_denied' => 'Je kan geen categorie veranderen met forums die toegevoegd zijn in een forum',
		'icon' => 'Icoon',
		'icon_explain' => 'Deze icoon wordt voor de forumnamen weergegeven. Je kan een directe URL ingeven of de $image[] sleutel (bekijk <i>jouw_template</i>/<i>jouw_template.cfg</i>) gebruiken.',

// TAB - Calendar
		'Lang_extend_topic_calendar' => 'Kalender',

	// TAB - SEO
		'IP_url_rw' => 'URL Rewrite',
		'IP_url_rw_explain' => 'Deze optie inschakelen betekent dat, URL rewrite wordt ingeschakeld (HTML links in plaats van PHP, voor een beter zoekmogelijkheid van zoekbotten).',
	
		'IP_url_rw_guests' => 'URL Rewrite voor gasten',
		'IP_url_rw_guests_explain' => 'Deze optie inschakelen betekent dat, URL Rewrite wordt ingeschakeld voor gasten en bots.',
		
		'IP_bots_reg_auth' => 'Bots REG Permissieniveau',
		'IP_bots_reg_auth_explain' => 'Bij inschakeling van deze optie krijgen bots dezelfde rechten als geregistreerde gebruikers.',
	
		'IP_lofi_bots' => 'LoFi voor bots',
		'IP_lofi_bots_explain' => 'Deze optie inschakelen betekent dat, de optie LoFi wordt ingeschakeld voor bots.',
		
		'IP_adsense_code' => 'Google AdSense Publisher Code',
		'IP_adsense_code_explain' => 'Geef je Google AdSense Publisher Code in het wordt gebruikt voor de Google zoekpagina. Als je dat niet wilt gebruiken, laat dan dit veld leeg.',

		'IP_google_analytics' => 'Google Analytics Code',
		'IP_google_analytics_explain' => 'Geef je Google Analytics Code  in (de Javascript wordt verkregen via de Google website) en wordt automatisch toegevoegd aan de footer van elke pagina (onzichtbaar).',

//Sitemap
		'Sitemap_settings' => 'Sitemapinstellingen',
	
		'IP_sitemap_topic_limit' => 'Google Sitemap :: Onderwerplimiet',
		'IP_sitemap_topic_limit_explain' => 'Aantal onderwerpen om weer te geven in een enkele databasequery',
	
		'IP_sitemap_announce_priority' => 'Google Sitemap :: Mededelingprioriteit',
		'IP_sitemap_announce_priority_explain' => 'Prioriteit voor mededelingen (moet een getal zijn tussen 0.0 &amp; 1.0)',
	
		'IP_sitemap_sticky_priority' => 'Google Sitemap :: Vastgepinde onderwerpprioriteit',
		'IP_sitemap_sticky_priority_explain' => 'Prioriteit voor vastgepinde onderwerpen (moet een getal zijn tussen 0.0 &amp; 1.0)',
	
		'IP_sitemap_default_priority' => 'Google Sitemap :: Standaardprioriteit',
		'IP_sitemap_default_priority_explain' => 'Prioriteit voor regulaire onderwerpen (moet een getal zijn tussen 0.0 &amp; 1.0)',
	
		'IP_sitemap_sort' => 'Google Sitemap :: Sorteervolgorde',
		'IP_sitemap_new_first' => 'Nieuwe berichten eerst',
		'IP_sitemap_old_first' => 'Oude berichten eerst',
	
		'Word_graph' => 'TAGS',
	
		'IP_word_graph_max_words' => 'TAGS :: Maximum aantal woorden',
		'IP_word_graph_max_words_explain' => 'Selecteer een maximum aantal woorden om weer te geven. Een hogere aantal zorgt voor een grotere serverbelasting. De aanbevolen aantal is 250.',

		'IP_word_graph_word_counts' => 'TAGS :: Schakel woordaantallen in',
		'IP_word_graph_word_counts_explain' => 'Geef de totaal aantal keer weer dat een woord voorkomt naast elk woord.<br />Bijv. <b>Icy Phoenix (365)</b>',
	
		'IP_forum_wordgraph' => 'TAGS :: Forumtags',
		'IP_forum_wordgraph_explain' => 'Deze functie schakelt forumgebaseerde tagstabel in onder aan elk forum',
	
		'Similar_topics' => 'Vergelijkbare onderwerpen',
		'Similar_topics_explain' => 'Configureer zoeken naar vergelijkbare onderwerpen.',
	
		'IP_similar_topics' => 'Vergelijkbare onderwerpen :: Schakel vergelijkbare onderwerpen in',
		'IP_similar_topics_explain' => 'Dit is een hoofdinstelling voor vergelijkbare onderwerpen. Als je deze functie inschakelt moet je nog voor elk forum deze nog instellen in het forumbeheer.',
	
		'IP_similar_topics_desc' => 'Vergelijkbare onderwerpen :: Bekijk ook de omschrijvingen van de onderwerpen',
	
		'IP_similar_stopwords' => 'Vergelijkbare onderwerpen :: exclusief stopwoorden',
	
		'IP_similar_max_topics' => 'Vergelijkbare onderwerpen :: maximum aantal onderwerpen om weer te geven',
	
		'IP_similar_sort_type' => 'Vergelijkbare onderwerpen :: sorteren op',
		'IP_similar_sort_type_explain' => 'Selecteer sorteervolgorde voor de vergelijkbare onderwerpen',
		'IP_similar_sort_type_time' => 'Berichttijd',
		'IP_similar_sort_type_relev' => 'Relevantie',

		'IP_similar_ignore_forums_ids' => 'Vergelijkbare onderwerpen :: Genegeerde forums',
		'IP_similar_ignore_forums_ids_explain' => 'Geef de ID\'s van forums in, welke door de vergelijkbare onderwerpen worden genegeerd (bijvoorbeeld testforum, forum voor off-topic, etc.). Een ID per regel.',

// TAB - Logging And Security
		'IP_admin_protect' => 'Hoofdbeheerdersaccount beveiligen',
		'IP_admin_protect_explain' => 'Deze optie inschakelen betekent dat, er meer beveiliging voor de hoofdbeheerder wordt ingeschakeld',

		'IP_db_log_actions' => 'Enable DB Actions Log',
		'IP_db_log_actions_explain' => 'By enabling this option any action that modifies the DB will be stored in a the DB. If this option has been set as true in constants.php, then cannot be disabled in ACP. If you select to have the reports, then extra files will be stored with all errors logged.',

		'IP_mg_log_actions' => 'Schakel opslaan van de acties in bestand in',
		'IP_mg_log_actions_explain' => 'Bij inschakeling van deze optie wordt elke actie dat met de database wordt uitgevoerd opgeslagen in een tekstbestand op de server (bestand wordt opgeslagen in de LOGS map). Dit bestand is niet gemakkelijk om te lezen, maar is wel bruikbaar in sommige situaties. Schakel het alleen in als je weet wat je doet (de website kan langzamer worden als je het inschakelt).',
	
		'IP_write_digests_log' => 'Schakel digestslog in',
		'IP_write_digests_log_explain' => 'Bij inschakeling van deze optie worden alle digests gelogd in een dagelijkse tekstbestand.',
		
		'IP_write_errors_log' => 'Schakel foutenlog in',
		'IP_write_errors_log_explain' => 'Bij inschakeling van deze optie worden alle fouten gelogd in een dagelijkse tekstbestand.',
		
		'IP_logs_path' => 'Pad voor de logs (houdt er rekening mee dat je deze map moet CHMODen naar 0755 of 0777)',
		'IP_logs_path_explain' => 'Geef een pad in voor de fouten en andere logs, relatief aan je rootmap en zonder een slash aan het eind. Voorbeeld: <b>logs</b>.',

// TAB - Cron
		'IP_cron_global_switch' => 'Enable PHP Cron [Global Switch]',
		'IP_cron_global_switch_explain' => 'By enabling this option a PHP based cron will be activated: some automatic operations will be executed at fixed time intervals. The optimal time range for each cron feature depends on your site traffic and preferences: if you don\'t know what these settings may impact, please leave this feature disabled, you probably don\'t need it.',

		'IP_cron_files_interval' => 'Files Executions Cron Interval',
		'IP_cron_files_interval_explain' => 'This kind of cron may be used to automatically run certain files every fixed interval you decide. The files to be executed must be added in <b>constants.php</b> &raquo; <b>define(\'CRON_FILES\', \'\');</b>. Multiple files must be separated by comma.<br /><br /><b>Last run: ' . (($board_config['cron_files_last_run'] == 0) ? 'NEVER' : create_date('d M Y H:i:s', ($board_config['cron_files_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_database_interval' => 'DB Optimization Cron Interval',
		'IP_cron_database_interval_explain' => 'This feature will optimize the database of the site every chosen interval.<br /><br /><b>Last run: ' . (($board_config['cron_database_last_run'] == 0) ? 'NEVER' : create_date('d M Y H:i:s', ($board_config['cron_database_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_cache_interval' => 'Tidy Templates Cache Cron Interval',
		'IP_cron_cache_interval_explain' => 'Templates cache is cleaned every chosen interval.<br /><br /><b>Last run: ' . (($board_config['cron_cache_last_run'] == 0) ? 'NEVER' : create_date('d M Y H:i:s', ($board_config['cron_cache_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_sql_interval' => 'Tidy SQL Cache Cron Interval',
		'IP_cron_sql_interval_explain' => 'SQL cache is cleaned every chosen interval.<br /><br /><b>Last run: ' . (($board_config['cron_sql_last_run'] == 0) ? 'NEVER' : create_date('d M Y H:i:s', ($board_config['cron_sql_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_users_interval' => 'Tidy Users Cache Cron Interval',
		'IP_cron_users_interval_explain' => 'Users cache is cleaned every chosen interval.<br /><br /><b>Last run: ' . (($board_config['cron_users_last_run'] == 0) ? 'NEVER' : create_date('d M Y H:i:s', ($board_config['cron_users_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_topics_interval' => 'Tidy Topics Cache Cron Interval',
		'IP_cron_topics_interval_explain' => 'Topics cache is cleaned every chosen interval.<br /><br /><b>Last run: ' . (($board_config['cron_topics_last_run'] == 0) ? 'NEVER' : create_date('d M Y H:i:s', ($board_config['cron_topics_last_run']), $board_config['board_timezone'])) . '</b>',

		'Cron_Disabled' => 'Disabled',
		'15M' => '15 Minutes',
		'30M' => '30 Minutes',
		'1H' => '1 Hour',
		'2H' => '2 Hours',
		'3H' => '3 Hours',
		'6H' => '6 Hours',
		'12H' => '12 Hours',
		'1D' => '1 Day',
		'3D' => '3 Days',
		'7D' => '1 Week',
		'14D' => '2 Weeks',
		'30D' => '1 Month',


// lang_extend_mods_settings.php
		'Lang_extend_mods_settings' => 'Icy Phoenix Instellingen',
		'Configuration_extend' => 'Icy Phoenix',
		'Override_user_choices' => 'Overschrijf gebruikerskeuzes',
		)
	);
}

$lang = array_merge($lang, array(
	'CFG_NONE' => 'GEEN',
	'CFG_ALL' => 'ALL',
	'CFG_REG' => 'REG',
	'CFG_SELF' => 'SELF',
	'CFG_PRIVATE' => 'PRIVE',
	'CFG_MOD' => 'MOD',
	'CFG_ADMIN' => 'ADMIN',

// lang_extend_categories_hierarchy.php - BEGIN
	'Hierarchy_setting' => 'Forum',
	'Forum_link' => 'Linkredirectie',
	'Forum_link_visited' => 'Deze link is %d keer bezocht',

	'Use_sub_forum' => 'Subforumsaanzicht (comprimering):',
	'Index_packing_explain' => 'Geef aan, hoe de subforums op index weergegeven moet worden.',
	'Medium' => 'Medium',
	'Full' => 'Volledig',
	'Split_categories' => 'Categorieën op de index splitsen',
	'Use_last_topic_title' => 'Geef de titel van de laatste onderwerptitel weer op de index:',
	'Last_topic_title_length' => 'Titellengte van de laatste onderwerptitel op de index:',
	'Sub_level_links' => 'Subforumlinks op index',
	'Sub_level_links_explain' => 'Voeg links aan subforums in de forum of categorieomschrijving toe',
	'With_pics' => 'Met iconen',
	'Display_viewonline' => 'Wie is online? weergeven:',
	'Never' => 'Nooit',
	'Root_index_only' => 'Alleen op de index',
	'Always' => 'Altijd',
	'Subforums' => 'Subforums',
// lang_extend_categories_hierarchy.php - END

// lang_extend_topic_calendar.php - BEGIN
	'Calendar_settings' => 'Kalender',
	'Calendar' => 'Kalender',
	'Calendar_scheduler' => 'Planner',
	'Calendar_event' => 'Kalenderevenement',
	'Calendar_from_to' => 'Van %s tot %s (inclusief)',
	'Calendar_time' => '%s',
	'Calendar_duration' => 'Duur',

	'Calendar_week_start' => 'Eerste dag van de week',
	'Calendar_header_cells' => 'Aantal cellen die in de forumheader weergegeven worden (0 voor het niet weergeven)',
	'Calendar_title_length' => 'Lengte van de titel, welke in de kalendercellen wordt weergegeven',
	'Calendar_text_length' => 'Lengte van de tekst, welke in de overzichtsvenster wordt weergegeven',
	'Calendar_block_display' => 'Kalenderregel in forumheader weergeven',
	'Calendar_display_open' => 'Kalenderregel in forumheader geopend weergeven (als kalenderregel is ingeschakeld)',
	'Calendar_nb_row' => 'Aantal regels per dag in de forumheader',
	'Calendar_birthday' => 'Verjaardag(en) in de kalender weergeven',
	'Calendar_forum' => 'De forumnaam onder de onderwerptitel in planner weergeven',
	
	'Sorry_auth_cal' => 'Sorry, maar alleen %s kunnen kalenderevenementen plaatsen in dit forum.',
	'Date_error' => 'dag %d, maand %d, jaar %d is geen geldige datum',

	'Event_time' => 'Evenementstijd',
	'Minutes' => 'Minuten',
	'Today' => 'Vandaag',
	'Yesterday' => 'Gisteren',
	'All_events' => 'Alle evenementen',

/*
	'Rules_calendar_can' => 'You <b>can</b> post calendar events in this forum',
	'Rules_calendar_cannot' => 'You <b>cannot</b> post calendar events in this forum',
*/
	'Rules_calendar_can' => 'Je <b>mag</b> kalenderevenementen plaatsen',
	'Rules_calendar_cannot' => 'Je <b>mag geen</b> kalenderevenementen plaatsen',

	'birthday_header' => 'Gefeliciteerd met je verjaardag!',
	'birthday' => '<b>%s</b> is jarig vandaag!',
// lang_extend_topic_calendar.php - END

	'DB_LOG_ALL' => 'Ja met foutrapporten',
	)
);

?>