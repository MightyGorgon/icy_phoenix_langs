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
* TheSteffen, KugeLSichA, Tom
*
*/

$lang['setup_upi2db'] = 'UPI2DB Konfiguration';
$lang['setup_upi2db_explain'] = 'Hier kannst Du die diversen Einstellungen des Unread Post Information 2 Database Mod �ndern.<br />Ist dieser Mod aktiv, werden die Informationen �ber ungelesene Beitr�ge in der Datenbank gespeichert, so dass sie auch nachdem sich ein Benutzer abgemeldet hat nicht verloren gehen.';
$lang['upi2db_on'] = 'UPI2DB Mod aktiv?';
$lang['upi2db_on_explain'] = 'Hier kannst du den UPI2DB Mod ein- und auschalten oder es dem User �berlassen.<br /> Ist der Mod deaktiviert ist das Standard Cookie System aktiv.';
$lang['user_select'] = 'User Einstellung';
$lang['up2db_days'] = 'Beitr�ge automatisch gelesen nach&hellip;';
$lang['up2db_days_tagen'] = 'Tagen';
$lang['up2db_days_explain'] = 'Anzahl der Tage, wie lange die Post Informationen in der Datenbank gespeichert bleiben.<br /> Alle Themen deren letzte Antwort �lter als X Tage ist, werden automatisch als gelesen markiert.<br />Achtung! Je gr��er die Zahl, desto mehr wird die Datenbank belastet. Standard = 30 Tage';

$lang['edit_as_new'] = 'Editierte Beitr�ge als ungelesen markieren?';
$lang['edit_as_new_explain'] = 'Sollen bereits gelesenen Beitr�ge nach dem Editieren ungelesen markiert werden?';
$lang['last_edit_as_new'] = 'Letzter Beitrag im Thema nach Edit als ungelesen markieren?';
$lang['edit_topic_first'] = 'Editierte Beitr�ge in der Thema Ansicht nach oben schieben?';
$lang['edit_topic_first_explain'] = 'Steht die Option auf "Ja" werden ungelesene editierte Beitr�ge in der Themen �bersicht als erstes (unter den Ank�ndigungen und Wichtig) angezeigt bis sie gelesen wurden.';

$lang['upi2db_condition_setup'] = 'UPI2DB Konditionen';
$lang['upi2db_condition_min_posts'] = 'Min. Beitr�ge';
$lang['upi2db_condition_min_regdays'] = 'Min. Reg. Tage';
$lang['upi2db_unread_color'] = 'Farbcode f�r Themen Titel (Ungelesener Beitrag)';
$lang['upi2db_edit_color'] = 'Farbcode f�r Themen Titel (Ge�nderter Beitrag)';
$lang['upi2db_mark_color'] = 'Farbcode f�r Themen Titel (Markierter Beitrag)';
$lang['group_allow_upi2db'] = 'Gruppe darf UPI2DB nutzen?';
$lang['user_allow_upi2db'] = 'Benutzer d�rfen UPI2DB nutzen?';
$lang['user_disable_upi2db'] = 'UPI2DB Mod sperren';
$lang['group_user'] = 'Benutzer';
$lang['user_without_group'] = 'Benutzer ohne Gruppenzugeh�rigkeit';

$lang['max_new_posts'] = 'Maximale Anzahl neuer/editierter Beitr�ge pro Synchronistation';
$lang['max_new_posts_explain'] = 'Hier kannst Du die maximale Anzahl der "als neu markierte Beitr�ge" einstellen, die pro Aufruf einer Seite kopiert werden. Diese Option schr�nkt jedoch nicht die Maximal Anzahl an ungelesenen Beitr�gen pro Benutzer ein. Wenn Du keine Begrenzung vorgeben willst, dann gib bitte die "0" ein.';
$lang['max_permanent_topics'] = 'Maximale Anzahl der als "permanent gelesene Beitr�ge" pro Benutzer';
$lang['max_permanent_topics_explain'] = 'Hier kannst du die maximale Anzahl der Beitr�ge einstellen, die jeder Benutzer als "Permanent als gelesen" markieren darf. Wenn Du keine Begrenzung vorgeben willst, dann gib bitte die "0" ein.';
$lang['up2db_del_perm'] = 'Permanent als gelesen markierte Foren/Beitr�e automatisch l�schen nach&hellip;';
$lang['up2db_del_perm_explain'] = 'Hier gibst Du an, nach wieviel Tagen "Permanent als gelesen markierte Foren/Themen" automatisch aus der Datenbank gel�scht werden. Diese Option dient dazu, das Eintr�ge von nicht mehr aktiven Usern die Datenbank unn�tig belasten';

$lang['up2db_del_mark'] = 'Markierte Beitr�ge automatisch l�schen nach&hellip;';
$lang['up2db_del_mark_explain'] = 'Hier gibst Du an wieviel Tage "Markierte Beitr�ge" gespeichert bleiben, bevor sie automatisch gel�scht werden. Diese Option dient dazu, die Datenbank nicht unn�tig zu �berlasten';
$lang['max_mark_posts'] = 'Maximale Anzahl "Markierte Beitr�ge" pro Benutzer';
$lang['max_mark_posts_explain'] = 'Anzahl der Beitr�ge, die ein Benutzer maximal markieren darf.';

?>