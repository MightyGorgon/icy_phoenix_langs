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
* BigRib (bigrib@gmx.de)
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
	'setup_upi2db' => 'UPI2DB Konfiguration',
	'setup_upi2db_explain' => 'Hier kannst du die diversen Einstellungen des Unread Post Information 2 Database Mod ändern.<br />Ist dieser Mod aktiv, werden die Informationen über ungelesene Beiträge in der Datenbank gespeichert, so dass sie auch nachdem sich ein Benutzer abgemeldet hat nicht verloren gehen.',
	'upi2db_on' => '<strong>UPI2DB Mod aktiv?</strong>',
	'upi2db_on_explain' => 'Hier kannst du den UPI2DB Mod ein- und auschalten oder es dem User überlassen.<br /> Ist der Mod deaktiviert ist das Standard Cookie System aktiv.',
	'user_select' => 'Benutzer-Einstellung',
	'up2db_days' => '<strong>Beiträge automatisch gelesen nach&hellip;</strong>',
	'up2db_days_tagen' => 'Tagen',
	'up2db_days_explain' => 'Anzahl der Tage, wie lange die Post Informationen in der Datenbank gespeichert bleiben.<br /> Alle Themen deren letzte Antwort älter als X Tage ist, werden automatisch als gelesen markiert.<br />Achtung! Je größer die Zahl, desto mehr wird die Datenbank belastet. Standard = 30 Tage',

	'edit_as_new' => '<strong>Bearbeitete Beiträge als ungelesen markieren?</strong>',
	'edit_as_new_explain' => 'Sollen bereits gelesenen Beiträge nach dem Editieren ungelesen markiert werden?',
	'last_edit_as_new' => '<strong>Letzter Beitrag im Thema nach Edit als ungelesen markieren?</strong>',
	'edit_topic_first' => '<strong>Bearbeitete Beiträge in der Thema Ansicht nach oben schieben?</strong>',
	'edit_topic_first_explain' => 'Steht die Option auf "Ja" werden ungelesene bearbeitete Beiträge in der Themen Übersicht als erstes (unter den Ankündigungen und Wichtig) angezeigt bis sie gelesen wurden.',

	'upi2db_condition_setup' => 'UPI2DB Konditionen',
	'upi2db_condition_min_posts' => 'Min. Beiträge',
	'upi2db_condition_min_regdays' => 'Min. Reg. Tage',
	'upi2db_unread_color' => 'Farbcode für Themen Titel (Ungelesener Beitrag)',
	'upi2db_edit_color' => 'Farbcode für Themen Titel (Geänderter Beitrag)',
	'upi2db_mark_color' => 'Farbcode für Themen Titel (Markierter Beitrag)',
	'group_allow_upi2db' => 'Gruppe darf UPI2DB nutzen?',
	'user_allow_upi2db' => 'Benutzer dürfen UPI2DB nutzen?',
	'user_disable_upi2db' => 'UPI2DB Mod sperren',
	'group_user' => 'Benutzer',
	'user_without_group' => '<strong>Benutzer ohne Gruppenzugehörigkeit</strong>',

	'max_new_posts' => '<strong>Maximale Anzahl neuer/editierter Beiträge pro Synchronistation</strong>',
	'max_new_posts_explain' => 'Hier kannst du die maximale Anzahl der "als neu markierte Beiträge" einstellen, die pro Aufruf einer Seite kopiert werden. Diese Option schränkt jedoch nicht die Maximal Anzahl an ungelesenen Beiträgen pro Benutzer ein. Wenn du keine Begrenzung vorgeben willst, dann gib bitte die "0" ein.',
	'max_permanent_topics' => '<strong>Maximale Anzahl der als "permanent gelesene Beiträge" pro Benutzer</strong>',
	'max_permanent_topics_explain' => 'Hier kannst du die maximale Anzahl der Beiträge einstellen, die jeder Benutzer als "Permanent als gelesen" markieren darf. Wenn du keine Begrenzung vorgeben willst, dann gib bitte die "0" ein.',
	'up2db_del_perm' => '<strong>Permanent als gelesen markierte Foren/Beiträe automatisch löschen nach&hellip;</strong>',
	'up2db_del_perm_explain' => 'Hier gibst du an, nach wieviel Tagen "Permanent als gelesen markierte Foren/Themen" automatisch aus der Datenbank gelöscht werden. Diese Option dient dazu, das Einträge von nicht mehr aktiven Usern die Datenbank unnötig belasten',

	'up2db_del_mark' => '<strong>Markierte Beiträge automatisch löschen nach&hellip;</strong>',
	'up2db_del_mark_explain' => 'Hier gibst du an wieviel Tage "Markierte Beiträge" gespeichert bleiben, bevor sie automatisch gelöscht werden. Diese Option dient dazu, die Datenbank nicht unnötig zu überlasten',
	'max_mark_posts' => '<strong>Maximale Anzahl "Markierte Beiträge" pro Benutzer</strong>',
	'max_mark_posts_explain' => 'Anzahl der Beiträge, die ein Benutzer maximal markieren darf.',
	)
);

?>