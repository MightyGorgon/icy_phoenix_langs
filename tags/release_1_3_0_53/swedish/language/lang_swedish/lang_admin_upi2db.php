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
	'setup_upi2db_explain' => '�ndra inst�llningar f�r Ol�st Post Information 2 Databas Mod.',
	'upi2db_on' => '<strong>UPI2DB Mod aktiva?</strong>',
	'upi2db_on_explain' => 'S�tt p�/av UPI2DB Mod eller l�t dina anv�ndare g�ra detta.<br />Om du st�nger av detta mod  kommer standard cookie systemet att vara aktivt.',
	'user_select' => 'Anv�ndar Inst�llningar',
	'up2db_days' => '<strong>Inl�gg kommer automatiskt att s�ttas som l�sta efter&hellip;</strong>',
	'up2db_days_tagen' => 'Dagar',
	'up2db_days_explain' => 'Antal dagar, som inl�gg kommer att sparas som ol�sta i databasen.<br />Efter dessa dagar, kommer alla �ldre inl�gg att markeras som l�sta.<br />Uppm�rksamhet! Ju fler dagar du anv�nder, desto mer p�verkar databasens beroende p� storleken p� ditt forum! <strong>Standard = 30 Dagar</strong>',

	'edit_as_new' => '<strong>Markera redigerade inl�gg som nya?</strong>',
	'edit_as_new_explain' => 'Markera inl�gg efter redigering som ol�sta?',
	'last_edit_as_new' => '<strong>Markera senaste inl�gg i ett �mne efter redigering som ol�st?</strong>',
	'edit_topic_first' => '<strong>Visa redigerade inl�gg i b�rjan p� �mnes visningen?</strong>',
	'edit_topic_first_explain' => 'Om satt till "Nej", kommer alla redigerade inl�gg markeras som ol�sta att sorteras in mellan andra �mnen (standard). Om satt till "Ja" kommer alla redigerade �mnen markeras som ol�sta och visas h�gst upp p� �mneslistan, tills de har l�sts.',

	'upi2db_condition_setup' => 'UPI2DB Villkor',
	'upi2db_condition_min_posts' => 'Minsta antalet inl�gg',
	'upi2db_condition_min_regdays' => 'Minsta antalet av registrerade dagar',
	'upi2db_unread_color' => 'F�rgkod f�r �mnes titel (ol�sta inl�gg)',
	'upi2db_edit_color' => 'F�rgkod f�r �mnes titel (redigerade inl�gg)',
	'upi2db_mark_color' => 'F�rgkod f�r �mnes titel (markerade inl�gg)',
	'group_allow_upi2db' => 'Till�t Grupper att anv�nda UPI2DB?',
	'user_allow_upi2db' => 'Till�t anv�ndare att anv�nda UPI2DB?',
	'user_disable_upi2db' => 'Inaktivera UPI2DB Mod',
	'group_user' => 'Anv�ndare',
	'user_without_group' => '<strong>Anv�ndare utan n�got gruppmedlemskap</strong>',

	'max_new_posts' => '<strong>Maximalt antal nya/redigera inl�gg</strong>',
	'max_new_posts_explain' => 'Ange h�r det h�gsta antalet ol�sta inl�gg per anv�ndare',
	'max_permanent_topics' => '<strong>Maximalt antal permanent m�rkerade inl�gg per anv�ndare</strong>',
	'max_permanent_topics_explain' => 'Ange h�r det h�gsta antalet inl�gg varje anv�ndare kan markera som "varaktigt m�rkt som l�st". Ange "0" f�r att st�lla in antal �mnen till obegr�nsade.',
	'up2db_del_perm' => '<strong>Reducera permanent markerade Forum/�mnen efter...</strong>',
	'up2db_del_perm_explain' => 'Ange h�r det antal dagar, "Permanent markerade som l�sta Forum/�mnen" kommer att bli reducerade fr�n databasen. Detta alternativ minskar databasens storlek genom datarader fr�n inaktiva anv�ndare',

	'up2db_del_mark' => '<strong>Reducera markerade inl�gg efter...</strong>',
	'up2db_del_mark_explain' => 'Ange h�r det antal dagar "markerade tj�nster" kommer att lagras innan de reduceras f�r att undvika tunga databas belastningar',
	'max_mark_posts' => '<strong>Maximalt antal "markerade poster" per anv�ndare</strong>',
	'max_mark_posts_explain' => 'Det maximala antalet inl�gg en anv�ndare kan markera.',
	)
);

?>