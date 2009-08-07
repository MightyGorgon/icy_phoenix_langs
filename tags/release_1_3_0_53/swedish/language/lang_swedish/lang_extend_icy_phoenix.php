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
	'30_Posting' => 'Inl�gg och Meddelanden',
	'40_IMG_Posting' => 'Bilder I Inl�gg',
	'50_Hierarchy_setting' => 'Forum',
	'60_Calendar_settings' => 'Kalender',
	'70_SEO' => 'SEO',
	'80_Security' => 'Loggar Och S�kerhet',
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
		'IP_enable_xs_version_check_explain' => 'Aktivera detta alternativ f�r att kontrollera om en nyare Icy Phoenix version finns tillg�nglig att ladda ner varje g�ng du kommer till ACP. Inaktivera detta alternativ kan p�skynda ACP laddningen lite. <br /><b>Notera:</b> Den h�r kontrollen g�rs bara en g�ng per dag och sedan cachad.',

		'IP_disable_email_error' => 'Avaktivera error vid e-post skickning',

		'IP_html_email' => 'HTML E-post',
		'IP_html_email_explain' => 'Aktivera det h�r alternativet aktiverar HTML e-post, annars kommer det att vara enkel text post',

		'IP_enable_digests' => 'Aktivera Sammandrag',

		'IP_digests_php_cron' => 'Aktivera Sammandrag PHP Cron',
		'IP_digests_php_cron_explain' => 'Denna funktion g�r det m�jligt f�r en PHP emulering av CRON som f�rs�ker skicka e-post en g�ng i timmen, men eftersom den �r baserad p� en PHP-emulering kan det inte vara korrekt avr�ttad varje g�ng. Detta inneb�r att e-post ibland inte kan skickas. Om du kan aktivera CRON  p� din server, anv�nder CRON i st�llet f�r den h�r funktionen. V�nligen notera att du ocks� beh�ver aktivera <b>PHP Cron [Global Switch]</b> i <b>Konfiguration &raquo; Icy Phoenix &raquo; Cron</b>',

		'IP_emails_only_to_admins' => 'E-post Bara Till Administrat�rer',
		'IP_emails_only_to_admins_explain' => 'Till�t e-post system bara f�r att skicka e-postmeddelanden till admins',

		'IP_ajax_features' => 'Aktivera AJAX Funktioner',
		'IP_ajax_features_explain' => 'Vissa AJAX funktioner integreras i webbplatsen',

		'IP_ajax_checks_register' => 'AJAX Koll Vid Registrering',
		'IP_ajax_checks_register_explain' => 'Genom att aktivera detta alternativ kommer vissa realtids kontroller att utf�ras samtidigt som det fyller i vissa f�lt i registrerings formul�ret (Varning: det h�r alternativet kan komma att sl�a ner registrerings sidan).',

		'IP_inactive_users_memberlists' => 'Inaktiv Anv�ndare I Memdlemslistan Och F�delsedags Block',
		'IP_inactive_users_memberlists_explain' => 'Genom att aktivera detta alternativ kommer inaktiva anv�ndare att visas i medlemslistan och f�delsedagar block.',

		'IP_page_gen' => 'Visa Sido Generations Tid i Sidfoten',

		'IP_switch_header_dropdown' => 'Aktivera Nedrullningsbar meny i sidhuvudet',
		'IP_switch_header_dropdown_explain' => 'Detta kommer att aktivera en rullgardinsmeny i forumets huvud f�r s�kning och inl�gg.',

		'IP_show_alpha_bar' => 'Show Alphabetical Sort Bar In View Forum (Global Switch)',
		'IP_show_alpha_bar_explain' => 'Det h�r alternativet visar en alfabetisk sorterings bar ovanp� visa forum sidan. Du m�ste �ven g�ra det aktivt f�r singel forum i Forums Management avdelningen.',

		'IP_show_rss_forum_icon' => 'Forum Index Ikoner (Global Switch)',
		'IP_show_rss_forum_icon_explain' => 'Detta alternativ kommer att visa ikoner till v�nster p� varje forum titel (p� Forum Index): RSS, Nytt �mne. Du m�ste �ven g�ra det aktiverat f�r ett enda forum i Forum Management avsnitt.',

		'IP_allow_mods_view_self' => 'Till�t ALLA Moderatorer att Se Sj�lv Auth �mnen',
		'IP_allow_mods_view_self_explain' => 'Om ett forum har st�llts in till SELF AUTH tillg�ng kan endast administrat�rer och forum moderatorer anv�nda dessa �mnen genom visaforum och visa�mne. Men det finns m�nga funktioner som kan visa inneh�llet i denna typ av inl�gg �ven om det inte authed: Aktuella �mnen, S�kmotorer, Senaste Meddelande Block, Slumpm�ssiga Block, etc. F�r att f�rhindra detta, har en extra funktion kodats som inte till�ter icke authed m�nniskor tillg�ng till dessa �mnen via andra v�gar. Hursomhelst kan du till�ta ALLA moderatorer (inte bara admins) att visa dessa meddelanden via dessa sekund�ra v�gar. Om du st�ller in detta till JA kommer ALLA moderatorer att till�tas att se inneh�llet i dessa meddelanden via: Nyligen, S�k, �mnens relaterade block... Tyv�rr om du s�tter detta till AV d� har AUTHED moderatorer ej n� SJ�LVB�RANDE AUTHED �mnen genom andra s�tt. Funktionen har kodats p� detta s�tt f�r att spara extra SQL belastning . Om du inte anv�nder SELF AUTHED forum, d� beh�ver du inte denna funktion �verhuvudtaget.',

		'IP_xmas_fx' => 'Jul Sn�',
		'IP_xmas_fx_explain' => 'Detta alternativ aktiverar Sn� Effekt.',

		'IP_xmas_gfx' => 'Jul Grafik',
		'IP_xmas_gfx_explain' => 'Genom att aktivera det h�r alternativet kommer Jul Grafik att till�mpas.',

		'IP_select_theme' => '�ndra Stil',
		'IP_select_theme_explain' => 'Genom att aktivera det h�r alternativet kommer en vald ruta med alla tillg�ngliga stilar att l�ggs till f�r snabb stil byte.',

		'IP_select_lang' => '�ndra Spr�k',
		'IP_select_lang_explain' => 'Genom att aktivera det h�r alternativet kommer en l�nk till varje tillg�ngligt spr�k att skapas p� forum index f�r snabbt spr�k byte.',

		'IP_cms_dock' => 'Visa Apple stil Dock i CMS',

		'IP_cms_style' => 'CMS Modern Stil',
		'IP_cms_style_explain' => 'Modern Stil f�r CMS best�r i en modern layout med topp transparent meny, med klassisk stil i sidomenyn',

		'IP_split_ga_ann_sticky' => 'Dela �mne efter Typ',
		'IP_split_ga_ann_sticky_explain' => 'H�r kan du v�lja ett s�tt att dela �mnen efter Typp� visa forum sidan',
		'IP_split_topic_0' => '<p>Alla �mnes Typer Tillsammans (ingen Delning)</p>',
		'IP_split_topic_1' => '<p>Globala Tillk�nnagivanden, Tillk�nnagivanden och Stickies tillsammans, Normal �mnes Delning</p>',
		'IP_split_topic_2' => '<p>Globala Tillk�nnagivanden delning, Tillk�nnagivanden och Stickies gick med tillsammans, Normal �mnes Delning</p>',
		'IP_split_topic_3' => '<p>Alla �mnes Typer Delning</p>',

// TAB - SQL Charge
		'IP_fast_n_furious' => 'Snabb och V�ldsam',
		'IP_fast_n_furious_explain' => 'Aktivering av detta alternativ g�r att n�gra tunga SQL funktioner kommer att avaktiveras, och f�rhoppningsvis kommer detta att snabba upp din sida!',

		/*
		'IP_db_cron' => 'Database Optimize',
		'IP_db_cron_explain' => 'Enabling this option will enable Database Optimization.',
		*/

		'IP_site_history' => 'Sido Historia',
		'IP_site_history_explain' => 'Aktivering av detta alternativ aktiverar Sido Historia.',

		'IP_global_disable_upi2db' => 'Avaktivera UPI2DB globalt',
		'IP_global_disable_upi2db_explain' => 'Med detta alternativ kan du avaktivera UPI2DB globalt vilket sparar extra minne.',

		'IP_enable_own_icons' => 'Egna Meddelanden Ikoner',
		'IP_enable_own_icons_explain' => 'Genom att aktivera detta alternativ kommer ikoner f�r �mnen som inneh�ller egna meddelanden att m�rkas.',

		'IP_show_forums_online_users' => 'Visa Anv�ndare Online I Forum',
		'IP_show_forums_online_users_explain' => 'Detta kommer att aktivera onlineanv�ndare r�kning f�r varje forum p� index.',

		'IP_google_bot_detector' => 'Aktivera GoogleBot Detector',

		'IP_gsearch_guests' => 'P�tvinga  Google Search f�r g�ster',

		'IP_visit_counter_switch' => 'Aktivera Bes�ks R�knare',

		'IP_enable_new_messages_number' => 'Visa antalet nya meddelanden sedan senaste bes�k',

		'IP_disable_thanks_topics' => 'Avaktivera Tack',

		'IP_show_thanks_profile' => 'Visa Tack du f�tt n�r du tittar i profilen',

		'IP_show_thanks_viewtopic' => 'Visa Tack du f�tt n�r du tittar i �mnen',

		'IP_disable_topic_view' => 'Avaktivera "Vem l�ser detta �mne" (Global Switch)',
		'IP_disable_topic_view_explain' => 'Detta alternativ till�ter dig att avaktivera "Vem l�ser detta �mne" funktionen (detta sparar SQL utrymme).',

		'IP_disable_referrers' => 'Avaktivera Referrers',
		'IP_disable_referrers_explain' => 'Detta alternativ till�ter dig att avaktivera Referrers funktionen (detta sparar SQL utrymme).',

		'IP_disable_logins' => 'Avaktivera Inloggnings Inspelning',
		'IP_disable_logins_explain' => 'Genom aktivering av detta alternativ  kommer inte Anv�ndar Inloggning att bli inspelad mer.',

		'IP_last_logins_n' => 'Antal Inloggningar att Spela in',

		'IP_index_top_posters' => 'Topp Postare :: Forum Index',
		'IP_index_top_posters_explain' => 'Aktivera detta alternativ f�r att visa topp postare p� <b> Forum Index</b>.',

		'IP_index_last_msgs' => 'Senaste Meddelandet :: Forum Index',
		'IP_index_last_msgs_explain' => 'Aktivera detta alternativ f�r att visa senaste meddelande p� <b>Forum Index</b>.',

		'IP_online_last_msgs' => 'Senaste Meddelandet :: Vem �r Online',
		'IP_online_last_msgs_explain' => 'Aktivera detta alternativ f�r att visa det senaste meddelande p� <b>Who Is Online</b>.',

		'IP_last_msgs_n' => 'Antal senaste meddelanden som ska visas.',

		'IP_last_msgs_x' => 'Forum Att Utesluta',
		'IP_last_msgs_x_explain' => 'V�nligen, ange IDs p� forum f�r att vara undantagna i Senaste Meddelande Boxen (du kan skilja varje forum ID med ett kommatecken).',

		'IP_show_chat_online' => 'AJAX Chat Online :: Forum Index',
		'IP_show_chat_online_explain' => 'Aktivera detta alternativ f�r att visas i <b>Forum Index</b> anv�ndare online i AJAX Chat.',

		'IP_index_shoutbox' => 'Shoutbox :: Forum Index',
		'IP_index_shoutbox_explain' => 'Aktivering av detta alternativ kommer att aktivera Shoutbox i <b>Forum Index</b>.',

		'IP_online_shoutbox' => 'Shoutbox :: Vem �r Online',
		'IP_online_shoutbox_explain' => 'Aktivering av detta alternativ kommer att aktivera Shoutbox i <b>Vem �r Online</b>.',

		'IP_img_shoutbox' => 'Inaktivera [img][/img] bbkod i Shoutbox',
		'IP_img_shoutbox_explain' => 'Aktivering av detta alternativ kommer att inaktivera [img][/img] bbkod i Shoutbox.',

		'IP_index_links' => 'L�nkar :: Forum Index',
		'IP_index_links_explain' => 'Aktivering av detta alternativ aktiverar L�nkar p� <b>Forum Index</b>.',

		'IP_index_birthday' => 'F�delsedag :: Forum Index',
		'IP_index_birthday_explain' => 'Aktivering av detta alternativ aktiverar F�delsedagar p� <b>Forum Index</b>.',

		'IP_show_random_quote' => 'Slumpm�ssiga Citat :: Forum Index',
		'IP_show_random_quote_explain' => 'Aktivering av detta alternativ aktiverar att slumpm�ssiga citat visas p� <b>Forum Index</b>',

// TAB - Posting
		'IP_posts_precompiled' => 'Avaktivera f�rkompilerade inl�gg',
		'IP_posts_precompiled_explain' => 'Genom att aktivera detta alternativ kommer visa�mne alltid att sammanst�lla inl�ggs texten utan att anv�nda f�rkompilerad text, (detta �r l�ngsammare, men det kan vara anv�ndbart i vissa fall).',
		
		'IP_read_only_forum' => 'Avaktivera meddelanden i alla forum (L�s l�ge en annan metod som phpMyAdmin eller MySQLDumper)',
		'IP_read_only_forum_explain' => 'Detta alternativ g�r det m�jligt att l�sa meddelanden i alla forum utan att �ndra beh�righeter. Detta kan vara anv�ndbart f�r begr�nsad tid n�r admins vill hindra anv�ndare meddelanden utan att beh�va l�sa webbplats eller �ndra alla forum tillst�nd. Administrat�rer kan fortfarande posta.',

		'IP_allow_drafts' => 'Till�t Utkast',
		'IP_allow_drafts_explain' => 'Till�t anv�ndare att spara inl�gg som utkast',

		'IP_allow_mods_edit_admin_posts' => 'Kan Moderatorer Redigera Admin Inl�gg?',
		'IP_allow_mods_edit_admin_posts_explain' => 'Till�t moderatorer att redigera admin inl�gg',

		'IP_force_large_caps_mods' => 'ProperCase �mnesomr�den',
		'IP_force_large_caps_mods_explain' => '�mnes fr�gor kommer att omvandlas till riktiga fall f�r alla anv�ndare utom admins',

		'IP_show_new_reply_posting' => 'Varna F�r Nya Svar',
		'IP_show_new_reply_posting_explain' => 'Om du aktiverar detta, kommer en varning att visas n�r det finns nya svar n�r du besvarar ett �mne',

		'IP_no_bump' => 'F�rbjud st�tning inom 24 timmar',
		'IP_no_bump_explain' => 'Aktivera detta alternativ g�r att senaste postare inte kan skicka inom 24 timmar fr�n det senaste inl�gget om inte n�gon annan har postat ett svar (g�ller aldrig admins)',
		'MODS_ALLOWED' => 'Moderatorer Kan Posta',

		'IP_show_topic_description' => 'Aktivera �mnes Beskrivningar',
		'IP_show_topic_description_explain' => 'Aktivering av detta alternativ g�r det m�jligt f�r �mnes Beskrivning medan du surfar p� forumet',

		'IP_edit_notes' => 'Aktivera Redigera Notering',
		'IP_edit_notes_explain' => 'Aktivering av detta alternativ aktiverar Redigerings Noteringar',

		'IP_edit_notes_n' => 'Maximalt Redigerings Anteckningar',

		'IP_always_show_edit_by' => 'Visa Alltid Post Redigering',
		'IP_always_show_edit_by_explain' => 'Aktivering av detta alternativ kommer alltid att visa "Senast redigerad av..." i meddelandets sidfot n�r n�gon �ndrar det. Admins redigeringar visas inte som standard',

		'IP_show_social_bookmarks' => 'Socialt Bokm�rke',
		'IP_show_social_bookmarks_explain' => 'Visa Socialt Bokm�rkes avsnitt n�r du tittar p� �mnen',

		'IP_link_this_topic' => 'L�nka detta �mne',
		'IP_link_this_topic_explain' => 'Visa "L�nka detta �mne" boxen n�r du tittar p� �mnen',

		'IP_smilies_topic_title' => 'Smileys f�r �mnes Titel pch Beskrivning',
		'IP_smilies_topic_title_explain' => 'Aktivering av detta alternativ aktiverar �ven smileys f�r �mnes Titel and �mnes Beskrivning',

		'IP_enable_colorpicker' => 'Aktivera ColorPicker i postning',

		'IP_quote_iterations' => 'Max antal l�mnade citat',

		'IP_disable_ftr' => 'Komplett Inaktivera Tvingad �mnes L�sning',
		'IP_disable_ftr_explain' => 'Genom att aktivera det h�r alternativet Tvingad �mnes L�sning kommer att vara helt avaktiverat',

		'IP_disable_html_guests' => 'Inaktivera HTML-l�nkar f�r g�ster',

		'IP_birthday_viewtopic' => 'Visa inl�ggarens �lder i Inl�gg',

		'IP_switch_poster_info_topic' => 'Visa inl�ggarens Info i �mnen (Spr�k, Stil, etc.)',

		'IP_enable_quick_quote' => 'Aktivera Snabb Citat Och Utanf�r �mnet',
		'IP_enable_quick_quote_explain' => 'Snabb Citat till�ter anv�ndare att citera n�got inl�gg i ett �mne med ett enkelt klick. Denna funktion anv�nder JavaScript, och att aktivera detta kan resultera i stora sidor om det finns m�nga inl�gg med mycket text i ett �mne.',

		'IP_allow_all_bbcode' => 'Aktivera alla BBKoder',
		'IP_allow_all_bbcode_explain' => 'Aktivering av detta alternativet g�r det m�jligt f�r alla BBKoder i signaturer och andra st�llen d�r de inte brukar vara aktiva. BBKoder som vanligtvis �r avaktiverade i signaturen �r: IMG, ALBUMIMG och n�gra intensiva formaterings BBKoder. Om du aktiverar detta alternativ, kommer vissa signaturer att konsumera mer utrymme och resurser.',

		'IP_switch_bbcb_active_content' => 'Till�t BBKod f�r Aktivt Inneh�ll i poster',
		'IP_switch_bbcb_active_content_explain' => 'Aktiverar BBKod f�r Flash, Video, Audio Streams, RealMedia och Quicktime.',

// TAB - Images In Posts
		'IP_auth_view_pic_upload' => 'Bilder Uppladdnings R�ttigheter (Posta Icy Bilder)',

		'IP_enable_postimage_org' => 'Aktivera PostImage knapp i post formul�r',

		'IP_gd_version' => 'GD Version:',
		'GD_0' => 'Ingen GD',
		'GD_1' => 'GD1',
		'GD_2' => 'GD2',

		'IP_show_img_no_gd' => 'Visa GIF miniatyrbild utan att anv�nda GD biblioteken (full bild l�ses in och sedan visas bara storleks�ndringen).',

		'IP_thumbnail_posts' => 'Miniatyrbild i inl�gg',
		'IP_thumbnail_posts_explain' => 'Med det h�r alternativet kommer en miniatyrbild att visas i st�llet f�r en fullst�ndig bild n�r en bild l�ggs in med IMG BBKod',

		'IP_show_pic_size_on_thumb' => 'Visa bild storlek p� miniatyrbild',
		
		'IP_thumbnail_highslide' => 'Anv�nd HighSlide f�r att visa bilder om miniatyrbilder �r aktiverade',
		'IP_thumbnail_highslide_explain' => '�ppnar bilden framf�r den aktuella sidan i st�llet f�r att �ppna den i ett nytt f�nster. Mer om <a href="http://www.highslide.com/" target="_blank">HighSlide JS...</a><br />Se till att du t�mmer f�rkompilerad inl�gg efter att ha �ndrat inst�llningen!',

		'IP_thumbnail_lightbox' => 'Anv�nd Lightbox JavaScript om Miniatyrbilder �r aktiverad',
		'IP_thumbnail_lightbox_explain' => '�ppnar bilden framf�r den aktuella sidan i st�llet f�r att �ppna den i ett nytt f�nster. Mer om <a href="http://www.huddletogether.com/projects/lightbox/" target="_blank">Lightbox JS...</a><br />Se till att du t�mmer f�rkompilerade inl�gg efter att ha �ndrat inst�llningen!',

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
		'Only_forum_for_topics' => '�mnen kan endast hittas i forum',
		'Delete_forum_with_attachment_denied' => 'Du kan inte radera forum som har under-niv�er',

		'Category_delete' => 'Radera Kategori',
		'Category_delete_explain' => 'I formul�ret nedan kan du ta bort en kategori och best�mma vart du vill l�gga alla forum och kategorier som den inneh�ller.',

// forum links type
		'Forum_link_url' => 'L�nk URL',
		'Forum_link_url_explain' => 'St�ll in en URI till en Icy Phoenix fil eller en full URL till en extern server',
		'Forum_link_internal' => 'Icy Phoenix Fil',
		'Forum_link_internal_explain' => 'V�lj Ja om du �beropar ett program som st�r i Icy Phoenix dirs',
		'Forum_link_hit_count' => 'Tr�ff r�kning',
		'Forum_link_hit_count_explain' => 'V�lj Ja om du vill att forumet ska r�kna och visa antalet tr�ffar som anv�nder denna l�nk',
		'Forum_link_with_attachment_deny' => 'Du kan inte st�lla ett forum som en l�nk om det redan har under-niv�er',
		'Forum_link_with_topics_deny' => 'Du kan inte st�lla ett forum som en l�nk om det redan finns �mnen i det',
		'Forum_attached_to_link_denied' => 'Du kan inte bifoga ett forum eller en kategori till en forum l�nk',

		'Manage_extend' => 'Management +',
		'No_subforums' => 'Inget under-forum',
		'Forum_type' => 'V�lj den typ av forum du vill',
		'Presets' => 'F�rinst�llningar',
		'Refresh' => 'Uppdatera',
		'Position_after' => 'Positionera detta forumet efter',
		'Link_missing' => 'L�nken saknas',
		'Category_with_topics_deny' => '�mnena �terst�r i detta forum. Du kan inte �ndra den till en kategori.',
		'Recursive_attachment' => 'Du kan inte bifoga ett forum till en l�gsta niv� till sin egen gren (rekursiv bifogning)',
		'Forum_with_attachment_denied' => 'Du kan inte �ndra en kategori med forum som bifogas i ett forum',
		'icon' => 'Ikon',
		'icon_explain' => 'Denna ikon kommer att visas framf�r forumets titel. Du kan st�lla in h�r en direkt URI eller en $image[] nyckek post (see <i>your_template</i>/<i>your_template</i>.cfg).',

// TAB - Calendar
		'Lang_extend_topic_calendar' => '�mne Kalender',

// TAB - SEO
		'IP_url_rw' => 'URL �terskrivning',
		'IP_url_rw_explain' => 'Genom att aktivera det h�r alternativet URL �terskrivning kommer att aktiveras (HTML l�nkar i st�llet f�r PHP, f�r b�ttre bot spidering) f�r alla.',

		'IP_url_rw_guests' => 'URL �terskrivning F�r G�ster',
		'IP_url_rw_guests_explain' => 'Genom att aktivera det h�r alternativet kommer URL �terskrivning att aktiveras endast f�r g�ster och bots.',

		'IP_bots_reg_auth' => 'Bots REG Beh�righets Niv�',
		'IP_bots_reg_auth_explain' => 'Genom att aktivera detta alternativ ges Bots samma �tkomstniv� f�r registrerade anv�ndare.',

		'IP_lofi_bots' => 'LoFi F�r Bots',
		'IP_lofi_bots_explain' => 'Genom att aktivera detta alternativ kommer LoFi att vara aktiverat f�r bots.',
		
		'IP_adsense_code' => 'Google AdSense Publisher Kod',
		'IP_adsense_code_explain' => 'S�tt h�r in din Google AdSense Publisher Kod och det kommer att inf�ras i Google Search sidan. Om du inte vill anv�nda den, bara l�mna f�ltet tomt.',

		'IP_google_analytics' => 'Google Analytics Kod',
		'IP_google_analytics_explain' => 'S�tt h�r in din Google Analytics Kod (Javascript provided by Google site) och det kommer att bli automatiskt infogat l�ngst ned p� varje sida.',

//Sitemap
		'Sitemap_settings' => 'Sidokarta Inst�llningar',

		'IP_sitemap_topic_limit' => 'Google Sidokarta :: �mne Begr�nsning',
		'IP_sitemap_topic_limit_explain' => 'Maximalt antal �mnen att h�mta med en enda database query',

		'IP_sitemap_announce_priority' => 'Google Sidokarta :: Meddelande Prioritet',
		'IP_sitemap_announce_priority_explain' => 'Prioritet f�r meddelanden (m�ste vara ett tal mellan 0.0 &amp; 1.0 inklusive)',

		'IP_sitemap_sticky_priority' => 'Google Sitemap :: Sticky Priority',
		'IP_sitemap_sticky_priority_explain' => 'Prioritet f�r sticky �mnen (m�ste vara ett tal mellan 0.0 &amp; 1.0 inklusive)',

		'IP_sitemap_default_priority' => 'Google Sitemap :: Standard Prioritet',
		'IP_sitemap_default_priority_explain' => 'Prioritet f�r vanliga �mnen (m�ste vara ett tal mellan 0.0 &amp; 1.0 inklusive)',

		'IP_sitemap_sort' => 'Google Sitemap :: Sorterings Ordning',
		'IP_sitemap_new_first' => 'Nya inl�gg f�rst',
		'IP_sitemap_old_first' => 'Gamla inl�gg f�rst',

		'Word_graph' => 'TAGGAR',

		'IP_word_graph_max_words' => 'TAGGAR :: Maximalt Ord',
		'IP_word_graph_max_words_explain' => 'V�lj det maximala antal ord som ska visas. Ett st�rre antal kan p�verka serverns belastning. Det rekommenderade antalet �r 250..',

		'IP_word_graph_word_counts' => 'TAGGAR :: Aktivera Ord R�kning',
		'IP_word_graph_word_counts_explain' => 'Visa det totala antalet ord bredvid varje ord?<br />Exempel: <b>Icy Phoenix (365)</b>?',

		'IP_forum_wordgraph' => 'TAGGAR :: Forum Taggar (Global Switch)',
		'IP_forum_wordgraph_explain' => 'Denna funktion g�r det m�jligt att aktivera en forum baserad tagg tabell l�ngst ner p� varje forum. Du m�ste �ven g�ra det aktivt f�r ett enda forum i Forums Management avsnitt.',

		'Similar_topics' => 'Liknande �mnen',
		'Similar_topics_explain' => 'Konfigurera s�kning av liknande �mnen.',

		'IP_similar_topics' => 'Liknande �mnen :: Liknande �mnen (Global Switch)',
		'IP_similar_topics_explain' => 'Detta �r den globala switchen f�r Liknande �mnen. Om du vill sl� p� den h�r funktionen beh�ver du ocks� g�ra det aktivt i ett enda forum i Forums Management avsnitt.',

		'IP_similar_topics_desc' => 'Liknande �mnen :: Ta h�nsyn till beskrivning av ett inl�gg',

		'IP_similar_stopwords' => 'Liknande �mnen :: Uteslut stop-ord',

		'IP_similar_max_topics' => 'Liknande �mnen :: Maximalt antal inl�gg att visa',

		'IP_similar_sort_type' => 'Liknande �mnen :: Sortera efter',
		'IP_similar_sort_type_explain' => 'V�lj sorterings metod f�r liknande �mnen',
		'IP_similar_sort_type_time' => 'Post Tid',
		'IP_similar_sort_type_relev' => 'Relevans',

		'IP_similar_ignore_forums_ids' => 'Liknande �mnen :: Ignorerade forum',
		'IP_similar_ignore_forums_ids_explain' => 'Ange ID\'s p� forum, d�r liknande fr�gor kommer att ignoreras (t.ex. test forum, forum f�r diskussion, etc.). Ett ID per rad.',

// TAB - Logging And Security
		'IP_admin_protect' => 'Skydda Huvud Admin Konto',
		'IP_admin_protect_explain' => 'Aktivering av detta alternativ kommer att l�gga st�rre trygghet till Huvud Admin: det kan inte degraderas av andra administrat�rer eller anv�ndare.',

		'IP_db_log_actions' => 'Aktivera DB �tg�rds Logg',
		'IP_db_log_actions_explain' => 'Genom att aktivera det h�r alternativet kommer alla �tg�rder som �ndrar DB att lagras i en DB. Om det h�r alternativet har st�llts in som g�ller constants.php, d� kan det inte inaktiveras i ACP. Om du v�ljer att f� rapporter, d�kommer extra filer att sparas med alla fel inloggade.',

		'IP_mg_log_actions' => 'Aktivera TXT �tg�rds Logg',
		'IP_mg_log_actions_explain' => 'Genom att aktivera det h�r alternativet kommer alla �tg�rder som �ndrar DB att lagras i en textfil p� servern (filen kommer att sparas i logg mappen). Denna fil �r inte l�tt att l�sa, men det kan vara bra under vissa f�ruts�ttningar. Aktivera det bara om du vet vad du g�r (webbplats kan sl�a ner sig om du aktiverar det).',

		'IP_write_errors_log' => 'Aktivera Sido Errors Logg',
		'IP_write_errors_log_explain' => 'Genom att aktivera det h�r alternativet kommer alla webbplats fel (dvs. 404 filen saknas, d�ligt �nskem�l, etc.) att vara inloggad p� en daglig TXT fil. Kom ih�g att du m�ste aktivera fel omdirigerade till errors.php i .Htaccess att anv�nda denna funktion (ett exempel �r med i. Htaccess bara infoga din dom�n och decomment raderna).',

		'IP_write_digests_log' => 'Aktivera Sammandrags Logg',
		'IP_write_digests_log_explain' => 'Genom att aktivera det h�r alternativet kommer alla sammandrag som skickas att vara inloggad p� en daglig TXT fil.',

		'IP_logs_path' => 'S�kv�g f�r Loggar (kom ih�g att CHMOD:a denna mapp till 0755 eller 0777 som beg�rt)',
		'IP_logs_path_explain' => 'Ange s�kv�gen f�r fel och andra loggar i f�rh�llande till din root och utan avslutande snedstrecket. Exempel: <b>loggar</b>.',

// TAB - Cron
		'IP_cron_global_switch' => 'Aktivera PHP Cron [Global Switch]',
		'IP_cron_global_switch_explain' => 'Genom att aktivera det h�r alternativet kommer ett PHP baserat cron att aktiveras: vissa automatiska operationer kommer att genomf�ras vid fasta tidsintervaller. Den optimala tidsintervallen f�r varje cron funktion beror p� din webbplats trafik och preferenser : Om du inte vet vad dessa inst�llningar kan p�verka, v�nligen l�mna denna funktion avaktiverad, och du har f�rmodligen inte n�gon nytta av den.',

		'IP_cron_files_interval' => 'Filer Executions Cron Intervall',
		'IP_cron_files_interval_explain' => 'Denna typ av cron kan anv�ndas f�r att automatiskt k�ra vissa filer varje fasta intervall som du best�mmer. De filer som skall verkst�llas skall l�ggas i <b>constants.php</b> &raquo; <b>definiera(\'CRON_FILES\', \'\');</b>. Flera filer m�ste vara �tskilda med kommatecken.<br /><br /><b>Senast k�rd: ' . (($board_config['cron_files_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y H:i:s', ($board_config['cron_files_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_database_interval' => 'DB Optimerings Cron Intervall',
		'IP_cron_database_interval_explain' => 'Denna funktion kommer att optimera databasen p� webbplatsen varje valda intervall.<br /><br /><b>Senast k�rd: ' . (($board_config['cron_database_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y H:i:s', ($board_config['cron_database_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_cache_interval' => 'Proper Mall Cache Cron Intervall',
		'IP_cron_cache_interval_explain' => 'Templates cache reng�rs varje valda intervall.<br /><br /><b>Senast k�rd: ' . (($board_config['cron_cache_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y H:i:s', ($board_config['cron_cache_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_sql_interval' => 'Propert SQL Cache Cron Intervall',
		'IP_cron_sql_interval_explain' => 'SQL cache reng�rs varje valda intervall.<br /><br /><b>Senast k�rd: ' . (($board_config['cron_sql_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y H:i:s', ($board_config['cron_sql_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_users_interval' => 'Propert Anv�ndares Cache Cron Intervall',
		'IP_cron_users_interval_explain' => 'Anv�ndares cache reng�rs varje valda intervall.<br /><br /><b>Senast k�rd: ' . (($board_config['cron_users_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y H:i:s', ($board_config['cron_users_last_run']), $board_config['board_timezone'])) . '</b>',

		'IP_cron_topics_interval' => 'Propert �mnes Cache Cron Intervall',
		'IP_cron_topics_interval_explain' => '�mnes cache reng�rs varje valda intervall.<br /><br /><b>Senast k�rd: ' . (($board_config['cron_topics_last_run'] == 0) ? 'ALDRIG' : create_date('d M Y H:i:s', ($board_config['cron_topics_last_run']), $board_config['board_timezone'])) . '</b>',

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
		'30D' => '1 M�nad',


// lang_extend_mods_settings.php
		'Lang_extend_mods_settings' => 'Icy Phoenix Inst�llningar',
		'Configuration_extend' => 'Icy Phoenix',
		'Override_user_choices' => '�verskriv anv�ndarens val',
		)
	);
}

$lang = array_merge($lang, array(
	'CFG_NONE' => 'INGEN',
	'CFG_ALL' => 'ALLA',
	'CFG_REG' => 'REG',
	'CFG_SELF' => 'SJ�LV',
	'CFG_PRIVATE' => 'PRIVAT',
	'CFG_MOD' => 'MOD',
	'CFG_ADMIN' => 'ADMIN',

// lang_extend_categories_hierarchy.php - BEGIN
	'Hierarchy_setting' => 'Forum',
	'Forum_link' => 'L�nk omdirigering',
	'Forum_link_visited' => 'Denna l�nk har bes�kts %d g�nger',

	'Use_sub_forum' => 'Index packning',
	'Index_packing_explain' => 'V�lj den niv� p� packning du vill ha f�r index',
	'Medium' => 'Medium',
	'Full' => 'Full',
	'Split_categories' => 'Dela kategorier p� index',
	'Use_last_topic_title' => 'Visa de senaste �mnes titlarna p� index',
	'Last_topic_title_length' => 'Titel l�ngden p� det senaste �mnet p� index',
	'Sub_level_links' => 'Under-niv� l�nkar p� index',
	'Sub_level_links_explain' => 'L�gg till l�nkar till under-niv�er i forumet eller kategori beskrivning',
	'With_pics' => 'Med ikoner',
	'Display_viewonline' => 'Visa visa online informations boxen p� index',
	'Never' => 'Aldrig',
	'Root_index_only' => 'Enbart p� root index',
	'Always' => 'Alltid',
	'Subforums' => 'Underforum',
// lang_extend_categories_hierarchy.php - END

// lang_extend_topic_calendar.php - BEGIN
	'Calendar_settings' => 'Kalender',
	'Calendar' => 'Kalender',
	'Calendar_scheduler' => 'Schemal�ggaren',
	'Calendar_event' => 'Kalender evenemang',
	'Calendar_from_to' => 'Fr�n %s till %s (inklusive)',
	'Calendar_time' => '%s',
	'Calendar_duration' => 'Under',

	'Calendar_week_start' => 'F�rsta dagen i veckan',
	'Calendar_header_cells' => 'Antal celler f�r att visa p� forumets header (0 utan visning)',
	'Calendar_title_length' => 'L�ngd p� titeln som visas i kalenderns celler',
	'Calendar_text_length' => 'L�ngd p� texten som visas i �versikts f�nstret',
	'Calendar_block_display' => 'Visa kalender raden p� forumets huvud',
	'Calendar_display_open' => 'Visa kalender raden p� forumets huvud �ppnade (om kalendern raden �r aktiverad)',
	'Calendar_nb_row' => 'Antal rader per dag i forumets header',
	'Calendar_birthday' => 'Visa f�delsedag(ar) i kalendern',
	'Calendar_forum' => 'Visa forum namn under tema titeln i schemal�ggaren',

	'Sorry_auth_cal' => 'Tyv�rr, men endast %s kan posta kalender h�ndelser i detta forum.',
	'Date_error' => 'dag %d, m�nad %d, �r %d �r inte ett giltigt datum',

	'Event_time' => 'Evenemangs tid',
	'Minutes' => 'Minuter',
	'Today' => 'Idag',
	'Yesterday' => 'Ig�r',
	'All_events' => 'Alla evenemang',

/*
	'Rules_calendar_can' => 'Du <b>kan</b> posta kalender evenemang i detta forum',
	'Rules_calendar_cannot' => 'Du <b>kan ej</b> posta kalender evenemang i detta forum',
*/
	'Rules_calendar_can' => 'Du <b>kan</b> posta kalender h�ndelser',
	'Rules_calendar_cannot' => 'Du <b>kan ej</b> posta kalender h�ndelser',

	'birthday_header' => 'Grattis p� f�delsedagen!',
	'birthday' => '<b>%s</b> har f�delsedag idag!',
// lang_extend_topic_calendar.php - END

	'DB_LOG_ALL' => 'Ja med fel rapporter',
	)
);

?>