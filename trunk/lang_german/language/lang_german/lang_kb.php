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
    'Article_keywords' => 'Schl�sselw�rter',
    'Articles' => 'Artikel',
    'Add_article' => 'Artikel hinzuf�gen',
    'Click_cat_to_add' => 'Klicke auf eine Kategorie um einen Artikel hinzuzuf�gen',
    'KB_Home' => 'KB Start',
    'No_articles' => 'Keine Artikel',
    'Article_title' => 'Artikel Name',
    'Article_text' => 'Artikeltext',
    'Add_article' => 'Artikel hinzuf�gen',
    'Read_article' => 'Artikel lesen',
    'Article_not_exsist' => 'Artikel exsistiert nicht',
    'Category_not_exsist' => 'Kategorie existiert nicht',

    'Edit' => 'Bearbeiten',

    'Article_submitted_Approve' => 'Artikel wurde erfolgreich gesendet.<br />Ein Administrator wird sich den Artikel anschauen und entscheiden ob Dein Artikel ver�ffentlicht wird oder nicht.',
    'Article_submitted' => 'Artikel wurde erfolgreich gesendet.',
    'Click_return_kb' => '%sKlicke hier%s um zur Wissensdatenbank zur�ckzukehren.',
    'Click_return_article' => '%sKlicke hier%s um zum Artikel zur�ckzukehren.',

    'Article_Edited_Approve' => 'Der Artikel wurde erfolgreich bearbeitet.<br />Es wird eine erneute Freischaltung ben�tigt bis er ver�ffentlicht wird.',
    'Article_Edited' => 'Artikel erfolgreich bearbeitet',
    'Edit_article' => 'Artikel bearbeiten',

    'KB_title' => 'Wissensdatenbank',
    'KB_art_description' => 'Hier kannst Du Artikel freischalten oder l�schen.',
    'Art_man' => 'Artikel Manager',
    'Cat_man' => 'Kategorie Manager',
    'KB_cat_description' => 'Hier kannst Du Kategorien f�r die Wissensdatenbank hinzuf�gen, bearbeiten oder l�schen.',
    'Art_action' => 'Aktion',

//approve
    'Art_edit' => 'Artikel bearbeiten',
    'Art_not_approved' => 'Nicht ver�ffentlicht',
    'Art_approved' => 'Ver�ffentlicht',
    'Approve' => 'Ver�ffentlichen',
    'Un_approve' => 'Ver�ffentlichung zur�ckziehen',
    'Article_approved' => 'Artikel ist jetzt ver�ffentlicht.',
    'Article_unapproved' => 'Artikel ist jetzt nicht mehr ver�ffentlicht.',

//delete
    'Delete' => 'L�schen',
    'Confirm_art_delete' => 'Bist du Dir sicher, dass du diesen Artikel l�schen m�chtest?',
    'Confirm_art_delete_yes' => '%sJa, ich m�chte den/die Artikel l�schen.%s',
    'Confirm_art_delete_no' => '%sNein, ich bin mir nicht sicher.%s',
    'Article_deleted' => 'Artikel erfolgreich gel�scht',

    'Click_return_article_manager' => '%sKlicke hier%s um zum Artikel Manager zur�ckzukehren',

//cat manager
    'Create_cat' => 'Erstellen einer neuen Kategorie:',
    'Create' => 'Erstellen',
    'Cat_settings' => 'Kategorie Einstellungen',
    'Create_description' => 'Hier kannst Du den Namen einer Kategorie �ndern und/oder eine Beschreibung hinzuf�gen.',
    'Cat_created' => 'Kategorie erfolgreich erstellt.',
    'Click_return_cat_manager' => '%sKlicke hier%s um zum Kategorie Manager zur�ckkehren',
    'Edit_description' => 'Hier kannst Du die Einstellungen deiner Kategorie �ndern.',
    'Edit_cat' => 'Kategorie bearbeiten',
    'Cat_edited' => 'Kategorie erfolgreich ge�ndert.',
    'Parent' => '�bergeordnet',

    'Cat_delete_title' => 'Kategorie l�schen',
    'Cat_delete_desc' => 'Hier kannst Du eine Kategorie l�schen und deine Artikel in eine neue Kategorie verschieben.',
    'Cat_deleted' => 'Kategorie erfolgreich gel�scht.',
    'Delete_all_articles' => 'Artikel gel�scht',

//configuration
    'KB_config' => 'KB Konfiguration',
    'Art_types' => 'Artikel Typen',
    'KB_config_title' => 'Wissensdatenbank Konfiguration',
    'KB_config_explain' => '�ndern der Konfiguration deiner Wissensdatenbank',
    'New_title' => 'Neue Artikel erlauben',
    'New_explain' => 'Erlaubt es den Benutzern, neue Artikel f�r die Wissensdatenbank zu verfassen',
    'Edit_name' => '�nderungen erlauben',
    'Edit_explain' => 'Erlaubt es Benutzern ihre Artikel nach dem posten zu �ndern.',
    'Notify_name' => 'Informiere mich per',
    'Notify_explain' => 'W�hle auf welchem Wege Du bei neuen Artikeln informiert werden willst',
    'PM' => 'PN',
    'Click_return_kb_config' => '%sKlicke hier%s um zur Wissensdatenbank Konfiguration zur�ckzukehren',
    'Admin_id_name' => 'Admin-ID',
    'Admin_id_explain' => 'Dies ist die Benutzer ID an welche die PNs geschickt werden.',
    'Approve_new_name' => 'Neue Artikel ver�ffentlichen',
    'Approve_new_explain' => 'W�hle, ob <b />neue</b /> Artikel eine Freischaltung ben�tigen',
    'Approve_edit_name' => 'Ge�nderte Artikel ver�ffentlichen',
    'Approve_edit_explain' => 'W�hle, ob <b />ge�nderte</b /> Artikel eine Freischaltung ben�tigen',
    'Allow_anon_name' => 'Erlaube anonymen Benutzern neue Artikel zu schreiben',
    'Allow_anon_explain' => 'W�hle, ob <b />neu</b /> Artikel von anonymen User erstellt werden k�nnen',
    'Del_topic' => 'L�sche Beitrag',
    'Del_topic_explain' => 'Wenn Du einen Artikel l�schst, willst Du dann auch die Kommentare dazu l�schen?',

    'Use_comments' => 'Kommentare',
    'Use_comments_explain' => 'Erlaubst Du Kommentare zu Deinen Artikeln',
    'Use_ratings' => 'Bewertungen',
    'Use_ratings_explain' => 'Erlaube den Benutzern, Bewertungen zu den Artikeln abzugeben',

    'Forum_id' => 'Forum-ID',
    'Forum_id_explain' => 'Dies ist das Forum in der die Kommentare zu Artikeln gespeichert werden.',


// Permissions
    'KB_Auth_Title' => 'KB Berechtigungen',
    'KB_Auth_Explain' => 'Hier kannst du die Benutzergruppen ausw�hlen, die in den einzelnen Kategorien Moderator sind oder nur privaten Zugriff haben sollen.',
    'Select_a_Category' => 'Kategorie ausw�hlen',
    'Look_up_Category' => 'Kategorie ansehen',
    'KB_Auth_successfully' => 'Auth wurde erfolgreich aktualisiert',
    'Click_return_KB_auth' => '%sKlicke Here%s, um zu den KB Berechtigungen zur�ckzukehren.',

    'Upload' => 'Upload',
    'Rate' => 'Bewerten',
    'Comment' => 'Kommentieren',
    'Approval' => 'Genehmigen',
    'Approval_edit' => 'Genehmigung bearbeiten',

    'Allow_rating' => 'Bewertungen erlauben',
    'Allow_rating_explain' => 'Benutzer k�nnen Artkiel bewerten.',

    'Allow_anonymos_rating' => 'Erlaube anonyme Bewertungen',
    'Allow_anonymos_rating_explain' => 'Wenn Bewertungen aktiviert sind, ist es auch anonymen Benutzern gestattet, Artikel zu bewerten.',

    'KB_config_updated' => 'Die Konfiguration der Wissensdatenbank wurde erfolgreich aktualisiert.',

    'KB_notify_subject_new' => 'Neuer Artikel!',
    'KB_notify_subject_edited' => 'Bearbeiteter Artikel!',
    'KB_notify_subject_approved' => 'Genehmigter Artikel!',
    'KB_notify_subject_unapproved' => 'Ungenehmigter Artikel!',
    'KB_notify_body' => 'Ein Artikel wurde vorgeschlagen oder ver�ndert:

',

    'Category_Permissions' => 'Kategorie-Berechtigungen',
    'Category_Title' => 'Kategorie-Titel',
    'Category_Desc' => 'Kategorie-Beschreibung',
    'View_level' => 'Ansicht',
    'Upload_level' => 'Upload',
    'Rate_level' => 'Bewerten',
    'Comment_level' => 'Kommentieren',
    'Edit_level' => ' Editieren',
    'Delete_level' => 'L�schen',
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
    'KB_Rules_delete_can' => 'Du <b>kannst</b> deine Artikel in dieser Kategorie l�schen.',
    'KB_Rules_delete_cannot' => 'Du <b>kannst</b> deine Artikel in dieser Kategorie <b>nicht</b> l�schen.',
    'KB_Rules_rate_can' => 'Du <b>kannst</b> Artikel in dieser Kategorie bewerten.',
    'KB_Rules_rate_cannot' => 'Du <b>kannst keine</b> Artikel in dieser Kategorie bewerten.',
    'KB_Rules_approval_can' => 'Artikel in dieser Kategorie ben�tigen <b>keine</b> Freischaltung',
    'KB_Rules_approval_cannot' => 'Artikel in dieser Kategorie <b>ben�tigen</b> eine Freischaltung',
    'KB_Rules_approval_edit_can' => 'Bearbeitete Artikel in dieser Kategorie ben�tigen <b>keine</b> Freischaltung',
    'KB_Rules_approval_edit_cannot' => 'Bearbeitete Artikel in dieser Kategorie <b>ben�tigen</b> eine Freischaltung',
    'KB_Rules_moderate' => 'Du <b>kannst</b> %sdiese Kategorie moderieren%s', // %s replaced by a href links, do not remove!
    'KB_Rules_moderate_can' => 'Du <b>kannst</b> %sdiese Kategorie moderieren%s', // %s replaced by a href links, do not remove!

    'Comments_show' => 'Zeige Artikel Kommentare',
    'Comments_show_explain' => '- zeige Artikel Kommentare auch auf der Artikelseite',
    'Comments_show_title' => 'Benutzerkommentare',

    'Mod_group' => 'KB Moderator Gruppe',
    'Mod_group_explain' => '- mit KB Admin Berechtigungen!',

    'Bump_post' => 'Artikel Beitrag im Forum beim Editieren',
    'Bump_post_explain' => 'Wenn ein Artikel bearbeitet wurde, wird eine Antwort auf das Thema des Artikels im Forum geposted.',

    'Stats_list' => 'Zeige KB Statistiken',
    'Stats_list_explain' => 'Zeigt KB Statistiken im Kopf',

    'Header_banner' => 'Zeige Top Logo',
    'Header_banner_explain' => 'Zeigt das KB Logo im Kopf',

    'Comment_info' => 'Kommentar Einstellungen',
    'Rating_info' => 'Bewertungseinstellungen',


//types
    'Types_man' => 'Typ Manager',
    'KB_types_description' => 'Hier kannst du die verschiedenen Typen von Artikeln hinzuf�gen, bearbeiten oder l�schen.',
    'Create_type' => 'Neuen Artikeltyp erstellen:',
    'Type_created' => 'Artikeltyp erfolgreich erstellt',
    'Click_return_type_manager' => '%sKlicke hier%s um zum Typ Manager zur�ckzukehren',

    'Edit_type' => 'Typ bearbeiten',
    'Edit_type_description' => 'Hier kannst du den Namen des Typs bearbeiten',
    'Type_edited' => 'Artikeltyp erfolgreich bearbeitet',

    'Type_delete_title' => 'Artikeltyp l�schen',
    'Type_delete_desc' => 'Hier kannst du den Artikeltyp, den du l�schst, f�r die Artikel �ndern, denen dieser Artikeltyp zugeordnet ist.',
    'Change_type' => 'Artikeltyp �ndern in',
    'Change_and_Delete' => '�ndern und L�schen',
    'Type_deleted' => 'Artikeltyp erfolgreich gel�scht',

    'Pre_text_name' => 'Instruktionen zur Artikelerstellung',
    'Pre_text_header' => 'Anweisungstitel zur Artikelerstellung',
    'Pre_text_body' => 'Instruktionen zur Artikelerstellung',
    'Pre_text_explain' => 'Diese Instruktionen werden Nutzern oben im Artikelerstellungsformular angezeigt.',

    'Show' => 'Anzeigen',
    'Hide' => 'Verstecken',

    'Empty_fields' => 'Bitte f�lle alle Teile des Formulars aus.',
    'Empty_fields_return' => '%sKlicke hier%s um zum Formular zur�ckzukehren',
    'Empty_category' => 'Du musst eine Kategorie ausw�hlen',
    'Empty_type' => 'Du musst einen Typ ausw�hlen',
    'Empty_article_name' => 'Du musst einen Artikelnamen eingeben',
    'Empty_article_desc' => 'Du musst eine Artikelbeschreibung eingeben',

    'Read_full_article' => '>> Vollst�ndigen Artikel lesen',
    'Comments' => 'Kommentare',

    'No_add' => 'Du kannst keinen neuen Artikel hinzuf�gen.',
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
    'Rateinfo' => 'Du bist dabei, den Artikel <i>{filename}</i> zu bewerten.<br />Bitte w�hle eine Wertung aus. 1 ist die schlechteste, 10 die beste.',
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
    'Click_return_rate' => '%sKlicke hier%s, um zum Artikel zur�ckzukehren.',

// Print version
    'Print_version' => '[Druckansicht]',

// Stats
    'Top_toprated' => 'Beste Artikel',
    'Top_most_popular' => 'Popul�rste Artikel',
    'Top_latest' => 'Neueste Artikel',

// Votes check
    'Votes_check_ip' => 'IP Adressen bei Bewertungen pr�fen',
    'Votes_check_ip_explain' => 'Pro IP-Adresse ist nur eine Stimme zul�ssig.',

    'Votes_check_userid' => 'Benutzer bei Bewertungen pr�fen',
    'Votes_check_userid_explain' => 'Benutzer d�rfen nur einmal abstimmen.',

    'Article_pag' => 'Artikel Seitenaufteilung',
    'Article_pag_explain' => 'Anzahl der Artikel pro Kategorie, bevor Seitenumbr�che erstellt werden.',

    'Comments_pag' => 'Kommentar Seitenaufteilung',
    'Comments_pag_explain' => 'Anzahl der Kommentare pro Artikel, bevor Seitenumbr�che erstellt werden.',

    'News_sort' => 'Artikel Sortierungsmethode',
    'News_sort_explain' => 'Legt fest, wie Artikel in einer Kategorie sortiert werden',

    'News_sort_par' => 'Aufsteigend oder Absteigend sortieren',
    'News_sort_par_explain' => 'Legt die Sortierreihenfolge fest',

// General strings from the news admin panel

    'News_settings' => 'KB Block Einstellungen',
    'News_settings_short_explain' => 'Konfiguriere Optionen f�r die Startseiten-News.',
    'News_settings_explain' => 'Hier kannst du die Konfiguration f�r den KB Block bearbeiten. Stelle ein, aus welche Kategorien Artikel im KB Block auf der Startseite dargestellt werden sollen.',

// Update result messages

    'News_updated_return_settings' => 'KB Block Einstellungen erfolgreich aktualisiert.<br /><br />%sKlicke hier%s um zur Hauptseite zur�ckzukehren.', // %s's for URI params - DO NOT REMOVE
    'News_update_error' => 'Die KB Block Einstellungen konnten <b>nicht</b> aktualisiert werden.<br />',

// Custom Field
    'Fieldselecttitle' => 'W�hle aus was du tun m�chtest',
    'Afield' => 'Benutzerdefiniertes Feld hinzuf�gen',
    'Efield' => 'Benutzerdefiniertes Feld bearbeiten',
    'Dfield' => 'Benutzerdefiniertes Feld l�schen',
    'Mfieldtitle' => 'Benutzerdefinierte Felder',
    'Afieldtitle' => 'Feld hinzuf�gen',
    'Efieldtitle' => 'Feld bearbeiten',
    'Dfieldtitle' => 'Feld l�schen',
    'Fieldexplain' => 'Du kannst diese Seite verwenden, um benutzerdefinierte Felder hinzuzuf�gen, zu bearbeiten und zu l�schen. Du kannst mit benutzerdefinierten Feldern mehr Informationen zu deinen Artikeln hinzuf�gen.',
    'Fieldname' => 'Feldname',
    'Fieldnameinfo' => 'Der Name des Feldes, z.B. &quot;Dateigr��e&quot;',
    'Fielddesc' => 'Feldbeschreibung',
    'Fielddescinfo' => 'Eine Beschreibing des Feldes, z.B. &quot;Gr��e in MB&quot;',
    'Fieldadded' => 'Das benutzerdefinierte Feld wurde erfolgreich hinzugef�gt',
    'Fieldedited' => 'Das benutzerdefinierte Feld wurde erfolgreich bearbeitet',
    'Dfielderror' => 'Du hast keine Felder zum l�schen ausgew�hlt',
    'Fieldsdel' => 'Die ausgew�hlten benutzerdefinierten Felder wurden erfolgreich gel�scht',

    'Field_data' => 'Optionen',
    'Field_data_info' => 'Gib die Optionen ein, aus denen der Benutzer w�hlen kann. Verwende f�r jede Option eine neue Zeile (Eingabetaste).',
    'Field_regex' => 'Regul�rer Ausdruck',
    'Field_regex_info' => 'Das Eingabefeld muss eventuell einer Perl Compatible Regular Expression (kurz %sPCRE%s) entsprechen.',
    'Field_order' => 'Anzeige-Reihenfolge',

//Fields Types

    'Field_Input' => 'Einzeilige Text Box',
    'Field_Textarea' => 'Mehrzeilige Text Box',
    'Field_Radio' => 'Einfachauswahl Options-Buttons',
    'Field_Select' => 'Einfachauswahl Men�',
    'Field_Select_multiple' => 'Mehrfachauswahl Men�',
    'Field_Checkbox' => 'Mehrfachauswahl Checkbox',

    'Click_return' => '%sKlicke hier%s, um zur vorhergehenden Seite zur�ckzukehren.',

// added
    'Cat_all' => 'Alle',

    'L_Pages' => 'Seiten',
    'L_Pages_explain' => 'Verwende [pages], um den Artikel in Seiten aufzuteilen.',
    'L_Toc' => 'Inhaltstabelle (TOC)',
    'L_Toc_explain' => 'Verwende [toc], um einen Eintrag zur Intaltstabelle (Table Of Contents - TOC) hinzuzuf�gen',
    'L_Abstract' => 'Zusammenfassung',
    'L_Abstract_explain' => 'Verwende [abstract]...[/abstract], um eine Zusammenfassung einzuf�gen',

    'L_Title_Format' => 'Titel',
    'L_Title_Format_explain' => 'Verwende [title]...[/title], um einen Haupt-Titel einzuf�gen',

    'L_Subtitle_Format' => 'Untertitel',
    'L_Subtitle_Format_explain' => 'Verwende [subtitle]...[/subtitle], um einen Untertitel einzuf�gen',

    'L_Subsubtitle_Format' => 'Minititel',
    'L_Subsubtitle_Format' => 'Verwende [subsubtitle]...[/subsubtitle], um einen kleinen Titel einzuf�gen',

    'L_Options' => 'Optionen:',
    'L_Formatting' => 'Formatierung:',

    'Default_article_id' => 'Standardartikel f�r den Artikel Betrachter',

// Added for v. 2.0
    'KB_comment_prefix' => '[KB] ',

    'Wysiwyg' => 'Wysiwyg Editor benutzen',
    'Wysiwyg_explain' => 'Wenn aktiviert, wird der Standard BBCode/HTML/Smilies Eingabedialog durch den wysiwyg Editor ersetzt.',

    'Wysiwyg_path' => 'Pfad zur wysiwyg Software',
    'Wysiwyg_path_explain' => 'Das ist der Pfad (vom /Icy Phoenix root pfad) zum Verzeichnis der wysiwyg Software, z.B. <i>modules/</i> wenn du tinemce ins Verzeichnis <i>modules/tinymce/</i> hochgeladen hast.',

    'Formatting_fixup' => 'Formatierung korrigieren',
    'Formatting_fixup_explain' => 'Wenn aktiviert, wird der Text in den Artikeln neu formatiert: Worttrennungen, URL-K�rzungen, Gr��enanpassung von Bildern sowie einige BBCode reformatierungen.',

    'Addtional_field' => 'Mehr Informationen (optional)',

    'No_cat_comments_forum_id' => 'Kommentare sind aktiviert aber es ist kein Zielforum f�r Kommentare definiert. �ffne das ACP und stelle unter &quot;KB - Kategorien&quot; das Forum ein.',

// Quick Nav
    'Quick_nav' => 'Quick KB Navigation',
    'Quick_jump' => 'Los',

    'Categories' => 'Kategorien',
    'Subcategory' => 'Unterkategorien',
	)
);

?>