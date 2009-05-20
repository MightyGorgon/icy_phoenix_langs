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
	'setup_upi2db' => 'UPI2DB Konfiguration',
	'setup_upi2db_explain' => 'Ändra inställningar för Oläst Post Information 2 Databas Mod.',
	'upi2db_on' => '<strong>UPI2DB Mod aktiva?</strong>',
	'upi2db_on_explain' => 'Sätt på/av UPI2DB Mod eller låt dina användare göra detta.<br />Om du stänger av detta mod  kommer standard cookie systemet att vara aktivt.',
	'user_select' => 'Användar Inställningar',
	'up2db_days' => '<strong>Inlägg kommer automatiskt att sättas som lästa efter&hellip;</strong>',
	'up2db_days_tagen' => 'Dagar',
	'up2db_days_explain' => 'Antal dagar, som inlägg kommer att sparas som olästa i databasen.<br />Efter dessa dagar, kommer alla äldre inlägg att markeras som lästa.<br />Uppmärksamhet! Ju fler dagar du använder, desto mer påverkar databasens beroende på storleken på ditt forum! <strong>Standard = 30 Dagar</strong>',

	'edit_as_new' => '<strong>Markera redigerade inlägg som nya?</strong>',
	'edit_as_new_explain' => 'Markera inlägg efter redigering som olästa?',
	'last_edit_as_new' => '<strong>Markera senaste inlägg i ett ämne efter redigering som oläst?</strong>',
	'edit_topic_first' => '<strong>Visa redigerade inlägg i början på ämnes visningen?</strong>',
	'edit_topic_first_explain' => 'Om satt till "Nej", kommer alla redigerade inlägg markeras som olästa att sorteras in mellan andra ämnen (standard). Om satt till "Ja" kommer alla redigerade ämnen markeras som olästa och visas högst upp på ämneslistan, tills de har lästs.',

	'upi2db_condition_setup' => 'UPI2DB Villkor',
	'upi2db_condition_min_posts' => 'Minsta antalet inlägg',
	'upi2db_condition_min_regdays' => 'Minsta antalet av registrerade dagar',
	'upi2db_unread_color' => 'Färgkod för ämnes titel (olästa inlägg)',
	'upi2db_edit_color' => 'Färgkod för ämnes titel (redigerade inlägg)',
	'upi2db_mark_color' => 'Färgkod för ämnes titel (markerade inlägg)',
	'group_allow_upi2db' => 'Tillåt Grupper att använda UPI2DB?',
	'user_allow_upi2db' => 'Tillåt användare att använda UPI2DB?',
	'user_disable_upi2db' => 'Inaktivera UPI2DB Mod',
	'group_user' => 'Användare',
	'user_without_group' => '<strong>Användare utan något gruppmedlemskap</strong>',

	'max_new_posts' => '<strong>Maximalt antal nya/redigera inlägg</strong>',
	'max_new_posts_explain' => 'Ange här det högsta antalet olästa inlägg per användare',
	'max_permanent_topics' => '<strong>Maximalt antal permanent märkerade inlägg per användare</strong>',
	'max_permanent_topics_explain' => 'Ange här det högsta antalet inlägg varje användare kan markera som "varaktigt märkt som läst". Ange "0" för att ställa in antal ämnen till obegränsade.',
	'up2db_del_perm' => '<strong>Reducera permanent markerade Forum/Ämnen efter...</strong>',
	'up2db_del_perm_explain' => 'Ange här det antal dagar, "Permanent markerade som lästa Forum/Ämnen" kommer att bli reducerade från databasen. Detta alternativ minskar databasens storlek genom datarader från inaktiva användare',

	'up2db_del_mark' => '<strong>Reducera markerade inlägg efter...</strong>',
	'up2db_del_mark_explain' => 'Ange här det antal dagar "markerade tjänster" kommer att lagras innan de reduceras för att undvika tunga databas belastningar',
	'max_mark_posts' => '<strong>Maximalt antal "markerade poster" per användare</strong>',
	'max_mark_posts_explain' => 'Det maximala antalet inlägg en användare kan markera.',
	)
);

?>