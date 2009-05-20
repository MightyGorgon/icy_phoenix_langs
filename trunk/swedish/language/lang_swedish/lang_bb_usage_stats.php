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
* Chris Lennert - (calennert@users.sourceforge.net) - (http://lennertmods.sourceforge.net)
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
	'BBUS_Mod_Title' => 'Forum Anv�ndnings Statistik',
	'BBUS_Misc' => 'Miscellaneous',

	'BBUS_ColHeader_PostRate' => 'Post V�rdering',
	'BBUS_ColHeader_PctUTP' => '%UTP',
	'BBUS_ColHeader_PctUTUP' => '%UTUP',
	'BBUS_ColHeader_NewTopics' => 'Nya �mnen',
	'BBUS_ColHeader_TopicRate' => '�mnes V�rdering',
	'BBUS_ColHeader_Topics_Watched' => 'Bevakad',
	'BBUS_ColHeader_Header' => 'Huvud',
	'BBUS_ColHeader_Description' => 'Beskrivning',

	'BBUS_ColHeader_Posts_Explain' => 'Totalt antal inl�gg.',
	'BBUS_ColHeader_PostRate_Explain' => 'Genomsnittligt antal inl�gg per dag.',
	'BBUS_ColHeader_PctUTP_Explain' => 'Procentandel av anv�ndarens totala inl�gg.',
	'BBUS_ColHeader_PctUTUP_Explain' => 'Procentandel av anv�ndarens totala un-beskurna inl�gg.',
	'BBUS_ColHeader_NewTopics_Explain' => 'Totalt antal nya �mnen som initierats av anv�ndaren.',
	'BBUS_ColHeader_TopicRate_Explain' => 'Genomsnittligt antal nya �mnen som inletts per dag.',
	'BBUS_ColHeader_Topics_Watched_Explain' => 'Totalt antal inl�gg som bevakas.',

	'BBUS_Col_Descriptions_Caption' => 'Kolumn Beskrivningar',

	'BBUS_Msg_NoPosts' => 'Anv�ndare har inte postat i n�got forum.',
	'BBUS_Unpruned_Posts' => 'Totalt beskurna inl�gg',
	'BBUS_Scale_By' => 'Skala i:',

// Admin Configuration page
	'BBUS_Settings_Caption' => 'Forumets Anv�ndningstatistiks Inst�llningar',
	'BBUS_Settings_Explain' => 'Med dessa inst�llningar kan du st�lla in vilka forum anv�ndare som kan granska forumets anv�ndningsstatistik p� en anv�ndares Profil sida och konfigurera olika alternativ i fr�ga om de uppgifter som presenteras p� denna sida.',

	'BBUS_Setting_ViewLevel_Caption' => 'Visa Niv�',
	'BBUS_Setting_ViewLevel_Note' => '<i>Notera</i>: Textruta �r l�s-enbart.<br/>Anv�nd kryssrutorna f�r att �ndra detta v�rde.',

	'BBUS_Setting_ViewLevel_Explain1' => 'Visnings niv� �r en komposit summa av en eller flera flaggor att gemensamt avg�ra om en viss anv�ndare kommer att se forumets anv�ndningsstatistik p� Anv�ndarprofil sidan.  <b>Anv�nd kryssrutorna nedan f�r att aktivera eller inaktivera visning av anv�ndnings statistik av olika klasser av anv�ndare.</b><br/><br/>Visa Niv� tillg�ngs flaggor �r definierade enligt f�ljande:<br/>',

	'BBUS_Setting_ViewLevel_Explain2' => '<br/>Den vanligaste inst�llningen f�r m�nga forum kommer att vara 24 (16 + 8), som g�r det m�jligt f�r administrat�rer och moderatorer att �vervaka forumets anv�ndningsstatistik, medan alla andra anv�ndare kommer att presenteras med endast den grundl�ggande Anv�ndar Profil sidan.<br/><br/> Det rekommenderas att du begr�nsar visning av statistik, s�rskilt f�r stora forum, f�r att undvika prestandaf�rs�mring till f�ljd av att det skapas f�r m�nga anv�ndare samtidigt.',

	'BBUS_Setting_ViewOptions_Caption' => 'Visa Alternativ',
	'BBUS_Setting_ViewOptions_Note' => '<i>Notera</i>: Textruta �r l�s-enbart.<br/>Anv�nd kryssrutorna f�r att �ndra detta v�rde.',
	'BBUS_Setting_ViewOptions_Explain1' => 'Liksom Visa Niv�, Visa Val �r en summa av flaggor att aktivera och avaktivera olika funktioner i Forumets Anv�ndningstatistik Mod. <b>Anv�nd kryssrutorna nedan f�r att aktivera eller inaktivera dessa funktioner.</b><br/><br/>Visa Alternativ flaggor definieras enligt f�ljande:<br/>',
	'BBUS_Setting_ViewOptions_Explain2' => '',

	'BBUS_Settings_Default_Post_Rate_Scaling_Caption' => 'Standard Post V�rdering Skal Faktor',
	'BBUS_Settings_Default_Post_Rate_Scaling_Explain' => 'St�ller in Standard Skal Faktor till�mpad till v�rden i Post V�rderings statistik kolumn.',

	'BBUS_Settings_Default_Topic_Rate_Scaling_Caption' => 'Standard �mne V�rdering Skal Faktor',
	'BBUS_Settings_Default_Topic_Rate_Scaling_Explain' => 'St�ller in Standard Skal Faktor till�mpad till v�rden i �mne V�rdering statistik kolumn.',

	'BBUS_ViewLevel_Anonymous_Caption' => 'Anonyma',
	'BBUS_ViewLevel_Self_Caption' => 'Sj�lv',
	'BBUS_ViewLevel_Users_Caption' => 'Anv�ndare',
	'BBUS_ViewLevel_Moderators_Caption' => 'Moderatorer',
	'BBUS_ViewLevel_Admins_Caption' => 'Admins',
	'BBUS_ViewLevel_SpecialGrp_Caption' => 'S�rskild Grupp',

	'BBUS_ViewLevel_Anonymous_Explain' => 'Till�t anonyma anv�ndare att granska statistik.',
	'BBUS_ViewLevel_Self_Explain' => 'Till�t varje anv�ndare att se hans/hennes egen statistik.',
	'BBUS_ViewLevel_Users_Explain' => 'Till�t alla anv�ndare att granska andra anv�ndares statistik.',
	'BBUS_ViewLevel_Moderators_Explain' => 'Till�t moderatorer att granska statistik.',
	'BBUS_ViewLevel_Admins_Explain' => 'Till�t administrat�rer att granska statistik. (Rekommenderas)',
	'BBUS_ViewLevel_SpecialGrp_Explain' => 'Till�t en utsedd s�rskild anv�ndargrupp att granska statistik.',

	'BBUS_ViewOption_Show_All_Forums_Caption' => 'Visa alla forum, oavsett anv�ndarnamnets inl�ggs r�kning.',
	'BBUS_ViewOption_PCTUTUP_Column_Visible_Caption' => 'Visa %UTUP Kolumn i Stats Tabell',
	'BBUS_ViewOption_Misc_Section_Visible_Caption' => 'Visa Blandad Info Sektion',
	'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Caption' => 'Visa "Totalt Un-beskurna Inl�gg "i Misc Sektion',
	'BBUS_ViewOption_Viewer_Scalable_PR_Caption' => 'Tittares Skalbara Post V�rdering',
	'BBUS_ViewOption_Viewer_Scalable_TR_Caption' => 'Tittares Skalbara �mne V�rdering',

	'BBUS_ViewOption_Show_All_Forums_Explain' => '',
	'BBUS_ViewOption_PCTUTUP_Column_Visible_Explain' => '',
	'BBUS_ViewOption_Misc_Section_Visible_Explain' => '',
	'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Explain' => '',
	'BBUS_ViewOption_Viewer_Scalable_PR_Explain' => '',
	'BBUS_ViewOption_Viewer_Scalable_TR_Explain' => '',

	'BBUS_Setting_SpecialGrp_Caption' => 'S�rskild  Access Grupp',
	'BBUS_Setting_SpecialGrp_Explain' => 'Utser den s�rskilda grupp som kommer att till�tas att visa forumets anv�ndningsstatistik. <i>Notera</i>: Denna inst�llning kommer bara att ha en effekt om \'S�rskild Grupp\' flaggan �r aktiverat i Visa Niv� nedan.',
	)
);

?>