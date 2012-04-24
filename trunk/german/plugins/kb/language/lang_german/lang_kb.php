<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_kb.php 34 2009-05-07 22:45:10Z TheSteffen $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* MX-System - (jonohlsson@hotmail.com) - (www.mx-system.com)
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
	'KB_title' => 'Wissensdatenbank',
	'Article' => 'Artikel',
	'Category' => 'Kategorie',
	'Article_description' => 'Beschreibung',
	'Article_type' => 'Typ',
	'Article_keywords' => 'Schlüsselwörter',
	'Articles' => 'Artikel',
	'Add_article' => 'Artikel hinzufügen',
	'Click_cat_to_add' => 'Klicke auf eine Kategorie um einen Artikel hinzuzufügen.',
	'KB_Home' => 'KB Start',
	'No_articles' => 'Keine Artikel',
	'Article_title' => 'Artikel Name',
	'Article_text' => 'Artikeltext',
	'Add_article' => 'Artikel hinzufügen',
	'Read_article' => 'Artikel lesen',
	'Article_not_exsist' => 'Artikel existiert nicht',
	'Category_not_exsist' => 'Kategorie existiert nicht',

	'Edit' => 'Bearbeiten',

	'Article_submitted_Approve' => 'Artikel wurde erfolgreich gesendet.<br />Ein Administrator wird sich den Artikel anschauen und entscheiden ob dein Artikel veröffentlicht wird oder nicht.',
	'Article_submitted' => 'Artikel wurde erfolgreich gesendet.',
	'Click_return_kb' => 'Klicke %shier%s, um zur Wissensdatenbank zurückzukehren.',
	'Click_return_article' => 'Klicke %shier%s, um zum Artikel zurückzukehren.',

	'Article_Edited_Approve' => 'Der Artikel wurde erfolgreich bearbeitet.<br />Es wird eine erneute Freischaltung benötigt bis er veröffentlicht wird.',
	'Article_Edited' => 'Artikel erfolgreich bearbeitet',
	'Edit_article' => 'Artikel bearbeiten',

	'KB_title' => 'Wissensdatenbank',
	'KB_art_description' => 'Hier kannst du Artikel freischalten oder löschen.',
	'Art_man' => 'Artikel Manager',
	'Cat_man' => 'Kategorie Manager',
	'KB_cat_description' => 'Hier kannst du Kategorien für die Wissensdatenbank hinzufügen, bearbeiten oder löschen.',
	'Art_action' => 'Aktion',

//approve
	'Art_edit' => 'Artikel bearbeiten',
	'Art_not_approved' => 'Nicht veröffentlicht',
	'Art_approved' => 'Veröffentlicht',
	'Approve' => 'Veröffentlichen',
	'Un_approve' => 'Veröffentlichung zurückziehen',
	'Article_approved' => 'Artikel ist jetzt veröffentlicht.',
	'Article_unapproved' => 'Artikel ist jetzt nicht mehr veröffentlicht.',

//delete
	'Delete' => 'Löschen',
	'Confirm_art_delete' => 'Bist du Dir sicher, dass du diesen Artikel löschen möchtest?',
	'Confirm_art_delete_yes' => '%sJa, ich möchte den/die Artikel löschen.%s',
	'Confirm_art_delete_no' => '%sNein, ich bin mir nicht sicher.%s',
	'Article_deleted' => 'Artikel erfolgreich gelöscht',

	'Click_return_article_manager' => 'Klicke %shier%s, um zum Artikel Manager zurückzukehren.',

//cat manager
	'Create_cat' => 'Erstellen einer neuen Kategorie:',
	'Create' => 'Erstellen',
	'Cat_settings' => 'Kategorie Einstellungen',
	'Create_description' => 'Hier kannst du den Namen einer Kategorie ändern und/oder eine Beschreibung hinzufügen.',
	'Cat_created' => 'Kategorie erfolgreich erstellt.',
	'Click_return_cat_manager' => 'Klicke %shier%s, um zum Kategorie Manager zurückkehren',
	'Edit_description' => 'Hier kannst du die Einstellungen deiner Kategorie ändern.',
	'Edit_cat' => 'Kategorie bearbeiten',
	'Cat_edited' => 'Kategorie erfolgreich geändert.',
	'Parent' => 'übergeordnet',

	'Cat_delete_title' => 'Kategorie löschen',
	'Cat_delete_desc' => 'Hier kannst du eine Kategorie löschen und deine Artikel in eine neue Kategorie verschieben.',
	'Cat_deleted' => 'Kategorie erfolgreich gelöscht.',
	'Delete_all_articles' => 'Artikel gelöscht',

//configuration
	'KB_config' => 'KB Konfiguration',
	'Art_types' => 'Artikel Typen',
	'KB_config_title' => 'Wissensdatenbank Konfiguration',
	'KB_config_explain' => 'Ändern der Konfiguration deiner Wissensdatenbank',
	'New_title' => 'Neue Artikel erlauben',
	'New_explain' => 'Erlaubt es den Benutzern, neue Artikel für die Wissensdatenbank zu verfassen',
	'Edit_name' => 'Änderungen erlauben',
	'Edit_explain' => 'Erlaubt es Benutzern ihre Artikel nach dem Schreiben zu ändern.',
	'Notify_name' => 'Informiere mich per',
	'Notify_explain' => 'Wähle, auf welchem Wege du bei neuen Artikeln informiert werden möchtest.',
	'PM' => 'PN',
	'Click_return_kb_config' => 'Klicke %shier%s, um zur Wissensdatenbank Konfiguration zurückzukehren.',
	'Admin_id_name' => 'Admin-ID',
	'Admin_id_explain' => 'Dies ist die Benutzer ID an welche die PNs geschickt werden.',
	'Approve_new_name' => 'Neue Artikel veröffentlichen',
	'Approve_new_explain' => 'Wähle, ob <b />neue</b /> Artikel eine Freischaltung benötigen.',
	'Approve_edit_name' => 'Geänderte Artikel veröffentlichen',
	'Approve_edit_explain' => 'Wähle, ob <b />geänderte</b /> Artikel eine Freischaltung benötigen.',
	'Allow_anon_name' => 'Erlaube anonymen Benutzern neue Artikel zu schreiben.',
	'Allow_anon_explain' => 'Wähle, ob <b />neue</b /> Artikel von anonymen Benutzern erstellt werden können.',
	'Del_topic' => 'Lösche Beitrag',
	'Del_topic_explain' => 'Wenn du einen Artikel löschst, willst du dann auch die Kommentare dazu löschen?',

	'Use_comments' => 'Kommentare',
	'Use_comments_explain' => 'Erlaubst du Kommentare zu Deinen Artikeln?',
	'Use_ratings' => 'Bewertungen',
	'Use_ratings_explain' => 'Erlaubst du den Benutzern, Bewertungen zu den Artikeln abzugeben?',

	'Forum_id' => 'Forum-ID',
	'Forum_id_explain' => 'Dies ist das Forum in der die Kommentare zu Artikeln gespeichert werden.',


// Permissions
	'KB_Auth_Title' => 'KB Berechtigungen',
	'KB_Auth_Explain' => 'Hier kannst du die Benutzergruppen auswählen, die in den einzelnen Kategorien Moderator sind oder nur privaten Zugriff haben sollen.',
	'Select_a_Category' => 'Kategorie auswählen',
	'Look_up_Category' => 'Kategorie ansehen',
	'KB_Auth_successfully' => 'Auth wurde erfolgreich aktualisiert.',
	'Click_return_KB_auth' => 'Klicke %shier%s, um zu den KB Berechtigungen zurückzukehren.',

	'Upload' => 'Upload',
	'Rate' => 'Bewerten',
	'Comment' => 'Kommentieren',
	'Approval' => 'Genehmigen',
	'Approval_edit' => 'Genehmigung bearbeiten',

	'Allow_rating' => 'Bewertungen erlauben',
	'Allow_rating_explain' => 'Benutzer können Artikel bewerten.',

	'Allow_anonymos_rating' => 'Erlaube anonyme Bewertungen',
	'Allow_anonymos_rating_explain' => 'Wenn Bewertungen aktiviert sind, ist es auch anonymen Benutzern gestattet, Artikel zu bewerten.',

	'KB_config_updated' => 'Die Konfiguration der Wissensdatenbank wurde erfolgreich aktualisiert.',

	'KB_notify_subject_new' => 'Neuer Artikel!',
	'KB_notify_subject_edited' => 'Bearbeiteter Artikel!',
	'KB_notify_subject_approved' => 'Genehmigter Artikel!',
	'KB_notify_subject_unapproved' => 'Ungenehmigter Artikel!',
	'KB_notify_body' => 'Ein Artikel wurde vorgeschlagen oder verändert:

',

	'Category_Permissions' => 'Kategorie-Berechtigungen',
	'Category_Title' => 'Kategorie-Titel',
	'Category_Desc' => 'Kategorie-Beschreibung',
	'View_level' => 'Ansicht',
	'Upload_level' => 'Upload',
	'Rate_level' => 'Bewerten',
	'Comment_level' => 'Kommentieren',
	'Edit_level' => ' Bearbeiten',
	'Delete_level' => 'Löschen',
	'Approval_level' => 'Genehmigungen',
	'Approval_edit_level' => 'Genehmigungen Bearbeiten',

/*
	'KB_Rules_post_can' => 'You <b>can</b> post new articles in this category',
	'KB_Rules_post_cannot' => 'You <b>cannot</b> post new articles in this category',
	'KB_Rules_comment_can' => 'You <b>can</b> comment articles in this category',
	'KB_Rules_comment_cannot' => 'You <b>cannot</b> comment articles in this category',
	'KB_Rules_edit_can' => 'You <b>can</b> edit your articles in this category',
	'KB_Rules_edit_cannot' => 'You <b>cannot</b> edit your articles in this category',
	'KB_Rules_delete_can' => 'You <b>can</b> delete your articles in this category',
	'KB_Rules_delete_cannot' => 'You <b>cannot</b> delete your articles in this category',
	'KB_Rules_rate_can' => 'You <b>can</b> rate articles in this category',
	'KB_Rules_rate_cannot' => 'You <b>cannot</b> rate articles in this category',
	'KB_Rules_approval_can' => 'Articles <b>need no</b> approval in this category',
	'KB_Rules_approval_cannot' => 'Articles <b>need</b> approval in this category',
	'KB_Rules_approval_edit_can' => 'Article edits <b>need no</b> approval in this category',
	'KB_Rules_approval_edit_cannot' => 'Article edits <b>need</b> approval in this category',
*/
	'KB_Rules_post_can' => 'Du <b>kannst</b> neue Artikel in dieser Kategorie erstellen.',
	'KB_Rules_post_cannot' => 'Du <b>kannst keine</b> neue Artikel in dieser Kategorie erstellen.',
	'KB_Rules_comment_can' => 'Du <b>kannst</b> Artikel in dieser Kategorie kommentieren.',
	'KB_Rules_comment_cannot' => 'Du <b>kannst keine</b> Artikel in dieser Kategorie kommentieren.',
	'KB_Rules_edit_can' => 'Du <b>kannst</b> deine Artikel in dieser Kategorie bearbeiten.',
	'KB_Rules_edit_cannot' => 'Du <b>kannst</b> deine Artikel in dieser Kategorie <b>nicht</b> bearbeiten.',
	'KB_Rules_delete_can' => 'Du <b>kannst</b> deine Artikel in dieser Kategorie löschen.',
	'KB_Rules_delete_cannot' => 'Du <b>kannst</b> deine Artikel in dieser Kategorie <b>nicht</b> löschen.',
	'KB_Rules_rate_can' => 'Du <b>kannst</b> Artikel in dieser Kategorie bewerten.',
	'KB_Rules_rate_cannot' => 'Du <b>kannst keine</b> Artikel in dieser Kategorie bewerten.',
	'KB_Rules_approval_can' => 'Artikel in dieser Kategorie benötigen <b>keine</b> Freischaltung.',
	'KB_Rules_approval_cannot' => 'Artikel in dieser Kategorie <b>benötigen</b> eine Freischaltung',
	'KB_Rules_approval_edit_can' => 'Bearbeitete Artikel in dieser Kategorie benötigen <b>keine</b> Freischaltung',
	'KB_Rules_approval_edit_cannot' => 'Bearbeitete Artikel in dieser Kategorie <b>benötigen</b> eine Freischaltung',
	'KB_Rules_moderate' => 'Du <b>kannst</b> %sdiese Kategorie moderieren%s', // %s replaced by a href links, do not remove!
	'KB_Rules_moderate_can' => 'Du <b>kannst</b> %sdiese Kategorie moderieren%s', // %s replaced by a href links, do not remove!

	'Comments_show' => 'Zeige Artikel Kommentare',
	'Comments_show_explain' => '- zeige Artikel Kommentare auch auf der Artikelseite',
	'Comments_show_title' => 'Benutzerkommentare',

	'Mod_group' => 'KB Moderator Gruppe',
	'Mod_group_explain' => '- mit KB Admin Berechtigungen!',

	'Bump_post' => 'Artikel Beitrag im Forum beim Editieren',
	'Bump_post_explain' => 'Wenn ein Artikel bearbeitet wurde, wird eine Antwort auf das Thema des Artikels im Forum geschrieben.',

	'Stats_list' => 'Zeige KB Statistiken',
	'Stats_list_explain' => 'Zeigt KB Statistiken im Kopf',

	'Header_banner' => 'Zeige Top Logo',
	'Header_banner_explain' => 'Zeigt das KB Logo im Kopf',

	'Comment_info' => 'Kommentar Einstellungen',
	'Rating_info' => 'Bewertungseinstellungen',


//types
	'Types_man' => 'Typ Manager',
	'KB_types_description' => 'Hier kannst du die verschiedenen Typen von Artikeln hinzufügen, bearbeiten oder löschen.',
	'Create_type' => 'Neuen Artikeltyp erstellen:',
	'Type_created' => 'Artikeltyp erfolgreich erstellt',
	'Click_return_type_manager' => 'Klicke %shier%s, um zum Typ Manager zurückzukehren.',

	'Edit_type' => 'Typ bearbeiten',
	'Edit_type_description' => 'Hier kannst du den Namen des Typs bearbeiten',
	'Type_edited' => 'Artikeltyp erfolgreich bearbeitet',

	'Type_delete_title' => 'Artikeltyp löschen',
	'Type_delete_desc' => 'Hier kannst du den Artikeltyp, den du löschst, für die Artikel ändern, denen dieser Artikeltyp zugeordnet ist.',
	'Change_type' => 'Artikeltyp ändern in',
	'Change_and_Delete' => 'Ändern und Löschen',
	'Type_deleted' => 'Artikeltyp erfolgreich gelöscht',

	'Pre_text_name' => 'Instruktionen zur Artikelerstellung',
	'Pre_text_header' => 'Anweisungstitel zur Artikelerstellung',
	'Pre_text_body' => 'Instruktionen zur Artikelerstellung',
	'Pre_text_explain' => 'Diese Instruktionen werden Nutzern oben im Artikelerstellungsformular angezeigt.',

	'Show' => 'Anzeigen',
	'Hide' => 'Verstecken',

	'Empty_fields' => 'Bitte fülle alle Teile des Formulars aus.',
	'Empty_fields_return' => 'Klicke %shier%s, um zum Formular zurückzukehren.',
	'Empty_category' => 'Du musst eine Kategorie auswählen',
	'Empty_type' => 'Du musst einen Typ auswählen',
	'Empty_article_name' => 'Du musst einen Artikelnamen eingeben',
	'Empty_article_desc' => 'Du musst eine Artikelbeschreibung eingeben',

	'Read_full_article' => '&#8226; Vollständigen Artikel lesen',
	'Comments' => 'Kommentare',

	'No_add' => 'Du kannst keinen neuen Artikel hinzufügen.',
	'No_edit' => 'Du kannst diesen Artikel nicht bearbeiten!',
	'Post_comments' => '[Kommentar schreiben]',

	'Category_sub' => 'Sub-Kategorien',
	'Quick_stats' => 'Schnell-Statistik',

// added

	'Edited_Article_info' => 'Artikel aktualisiert von ',
	'No_Articles' => 'Diese Kategorie ist leer.',
	'Not_authorized' => 'Du bist nicht autorisiert!',
	'TOC' => 'Inhalte',

// Rate
	'Votes_label' => 'Bewertung',
	'Votes' => 'Stimme(n)',
	'No_votes' => 'Keine Stimmen',
	'Rate' => 'Artikel bewerten',
	'ADD_RATING' => '[Artikel bewerten]',
	'Rerror' => 'Du hast diesen Artikel bereits bewertet.',
	'Rateinfo' => 'Du bist dabei, den Artikel <i>{filename}</i> zu bewerten.<br />Bitte wähle eine Wertung aus. 1 ist die schlechteste, 10 die beste.',
	'Rconf' => 'Du hast den Artikel <i>{filename}</i> mit {rate} bewertet.<br />Das ergibt eine neue Wertung von {newrating}/10.',
	'R1' => '1',
	'R2' => '2',
	'R3' => '3',
	'R4' => '4',
	'R5' => '5',
	'R6' => '6',
	'R7' => '7',
	'R8' => '8',
	'R9' => '9',
	'R10' => '10',
	'Click_return_rate' => 'Klicke %shier%s, um zum Artikel zurückzukehren.',

// Print version
	'Print_version' => '[Druckansicht]',

// Stats
	'Top_toprated' => 'Beste Artikel',
	'Top_most_popular' => 'Populärste Artikel',
	'Top_latest' => 'Neueste Artikel',

// Votes check
	'Votes_check_ip' => 'IP Adressen bei Bewertungen prüfen',
	'Votes_check_ip_explain' => 'Pro IP-Adresse ist nur eine Stimme zulässig.',

	'Votes_check_userid' => 'Benutzer bei Bewertungen prüfen',
	'Votes_check_userid_explain' => 'Benutzer dürfen nur einmal abstimmen.',

	'Article_pag' => 'Artikel Seitenaufteilung',
	'Article_pag_explain' => 'Anzahl der Artikel pro Kategorie, bevor Seitenumbrüche erstellt werden.',

	'Comments_pag' => 'Kommentar Seitenaufteilung',
	'Comments_pag_explain' => 'Anzahl der Kommentare pro Artikel, bevor Seitenumbrüche erstellt werden.',

	'News_sort' => 'Artikel Sortierungsmethode',
	'News_sort_explain' => 'Legt fest, wie Artikel in einer Kategorie sortiert werden',

	'News_sort_par' => 'Aufsteigend oder Absteigend sortieren',
	'News_sort_par_explain' => 'Legt die Sortierreihenfolge fest',

// General strings from the news admin panel

	'News_settings' => 'KB Block Einstellungen',
	'News_settings_short_explain' => 'Konfiguriere Optionen für die Startseiten-News.',
	'News_settings_explain' => 'Hier kannst du die Konfiguration für den KB Block bearbeiten. Stelle ein, aus welche Kategorien Artikel im KB Block auf der Startseite dargestellt werden sollen.',

// Update result messages

	'News_updated_return_settings' => 'KB Block Einstellungen erfolgreich aktualisiert.<br /><br />Klicke %shier%s, um zur Hauptseite zurückzukehren.', // %s's for URI params - DO NOT REMOVE
	'News_update_error' => 'Die KB Block Einstellungen konnten <b>nicht</b> aktualisiert werden.<br />',

// Custom Field
	'Fieldselecttitle' => 'Wähle aus was du tun möchtest',
	'Afield' => 'Benutzerdefiniertes Feld hinzufügen',
	'Efield' => 'Benutzerdefiniertes Feld bearbeiten',
	'Dfield' => 'Benutzerdefiniertes Feld löschen',
	'Mfieldtitle' => 'Benutzerdefinierte Felder',
	'Afieldtitle' => 'Feld hinzufügen',
	'Efieldtitle' => 'Feld bearbeiten',
	'Dfieldtitle' => 'Feld löschen',
	'Fieldexplain' => 'Du kannst diese Seite verwenden, um benutzerdefinierte Felder hinzuzufügen, zu bearbeiten und zu löschen. Du kannst mit benutzerdefinierten Feldern mehr Informationen zu deinen Artikeln hinzufügen.',
	'Fieldname' => 'Feldname',
	'Fieldnameinfo' => 'Der Name des Feldes, z.B. &quot;Dateigröße&quot;',
	'Fielddesc' => 'Feldbeschreibung',
	'Fielddescinfo' => 'Eine Beschreibung des Feldes, z.B. &quot;Größe in MB&quot;',
	'Fieldadded' => 'Das benutzerdefinierte Feld wurde erfolgreich hinzugefügt',
	'Fieldedited' => 'Das benutzerdefinierte Feld wurde erfolgreich bearbeitet',
	'Dfielderror' => 'Du hast keine Felder zum löschen ausgewählt',
	'Fieldsdel' => 'Die ausgewählten benutzerdefinierten Felder wurden erfolgreich gelöscht',

	'Field_data' => 'Optionen',
	'Field_data_info' => 'Gib die Optionen ein, aus denen der Benutzer wählen kann. Verwende für jede Option eine neue Zeile (Eingabetaste).',
	'Field_regex' => 'Regulärer Ausdruck',
	'Field_regex_info' => 'Das Eingabefeld muss eventuell einer Perl Compatible Regular Expression (kurz %sPCRE%s) entsprechen.',
	'Field_order' => 'Anzeige-Reihenfolge',

//Fields Types

	'Field_Input' => 'Einzeilige Text Box',
	'Field_Textarea' => 'Mehrzeilige Text Box',
	'Field_Radio' => 'Einfachauswahl Options-Buttons',
	'Field_Select' => 'Einfachauswahl Menü',
	'Field_Select_multiple' => 'Mehrfachauswahl Menü',
	'Field_Checkbox' => 'Mehrfachauswahl Checkbox',

	'Click_return' => 'Klicke %shier%s, um zur vorhergehenden Seite zurückzukehren.',

// added
	'Cat_all' => 'Alle',

	'L_Pages' => 'Seiten',
	'L_Pages_explain' => 'Verwende [pages], um den Artikel in Seiten aufzuteilen.',
	'L_Toc' => 'Inhaltstabelle (TOC)',
	'L_Toc_explain' => 'Verwende [toc], um einen Eintrag zur Inhaltstabelle (Table Of Contents - TOC) hinzuzufügen.',
	'L_Abstract' => 'Zusammenfassung',
	'L_Abstract_explain' => 'Verwende [abstract]&hellip;[/abstract], um eine Zusammenfassung einzufügen.',

	'L_Title_Format' => 'Titel',
	'L_Title_Format_explain' => 'Verwende [title]&hellip;[/title], um einen Haupt-Titel einzufügen.',

	'L_Subtitle_Format' => 'Untertitel',
	'L_Subtitle_Format_explain' => 'Verwende [subtitle]&hellip;[/subtitle], um einen Untertitel einzufügen.',

	'L_Subsubtitle_Format' => 'Minititel',
	'L_Subsubtitle_Format' => 'Verwende [subsubtitle]&hellip;[/subsubtitle], um einen kleinen Titel einzufügen.',

	'L_Options' => 'Optionen:',
	'L_Formatting' => 'Formatierung:',

	'Default_article_id' => 'Standardartikel für den Artikel Betrachter',

// Added for v. 2.0
	'KB_comment_prefix' => '[KB] ',

	'Wysiwyg' => 'Wysiwyg Editor benutzen',
	'Wysiwyg_explain' => 'Wenn aktiviert, wird der Standard BBCode/HTML/Smilies Eingabedialog durch den wysiwyg Editor ersetzt.',

	'Wysiwyg_path' => 'Pfad zur wysiwyg Software',
	'Wysiwyg_path_explain' => 'Das ist der Pfad (vom /Icy Phoenix Root Pfad) zum Verzeichnis der wysiwyg Software, z.B. <i>modules/</i> wenn du tinymce ins Verzeichnis <i>modules/tinymce/</i> hochgeladen hast.',

	'Formatting_fixup' => 'Formatierung korrigieren',
	'Formatting_fixup_explain' => 'Wenn aktiviert, wird der Text in den Artikeln neu formatiert: Worttrennungen, URL-Kürzungen, Größenanpassung von Bildern sowie einige BBCode-Reformatierungen.',

	'Addtional_field' => 'Mehr Informationen (optional)',

	'No_cat_comments_forum_id' => 'Kommentare sind aktiviert aber es ist kein Zielforum für Kommentare definiert. Öffne das ACP und stelle unter &quot;KB - Kategorien&quot; das Forum ein.',

// Quick Nav
	'Quick_nav' => 'Quick KB Navigation',
	'Quick_jump' => 'Los',

	'Categories' => 'Kategorien',
	'Subcategory' => 'Unterkategorien',
	)
);

?>