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
	'BBUS_Mod_Title' => 'Forum Användnings Statistik',
	'BBUS_Misc' => 'Miscellaneous',

	'BBUS_ColHeader_PostRate' => 'Post Värdering',
	'BBUS_ColHeader_PctUTP' => '%UTP',
	'BBUS_ColHeader_PctUTUP' => '%UTUP',
	'BBUS_ColHeader_NewTopics' => 'Nya Ämnen',
	'BBUS_ColHeader_TopicRate' => 'Ämnes Värdering',
	'BBUS_ColHeader_Topics_Watched' => 'Bevakad',
	'BBUS_ColHeader_Header' => 'Huvud',
	'BBUS_ColHeader_Description' => 'Beskrivning',

	'BBUS_ColHeader_Posts_Explain' => 'Totalt antal inlägg.',
	'BBUS_ColHeader_PostRate_Explain' => 'Genomsnittligt antal inlägg per dag.',
	'BBUS_ColHeader_PctUTP_Explain' => 'Procentandel av användarens totala inlägg.',
	'BBUS_ColHeader_PctUTUP_Explain' => 'Procentandel av användarens totala un-beskurna inlägg.',
	'BBUS_ColHeader_NewTopics_Explain' => 'Totalt antal nya ämnen som initierats av användaren.',
	'BBUS_ColHeader_TopicRate_Explain' => 'Genomsnittligt antal nya ämnen som inletts per dag.',
	'BBUS_ColHeader_Topics_Watched_Explain' => 'Totalt antal inlägg som bevakas.',

	'BBUS_Col_Descriptions_Caption' => 'Kolumn Beskrivningar',

	'BBUS_Msg_NoPosts' => 'Användare har inte postat i något forum.',
	'BBUS_Unpruned_Posts' => 'Totalt beskurna inlägg',
	'BBUS_Scale_By' => 'Skala i:',

// Admin Configuration page
	'BBUS_Settings_Caption' => 'Forumets Användningstatistiks Inställningar',
	'BBUS_Settings_Explain' => 'Med dessa inställningar kan du ställa in vilka forum användare som kan granska forumets användningsstatistik på en användares Profil sida och konfigurera olika alternativ i fråga om de uppgifter som presenteras på denna sida.',

	'BBUS_Setting_ViewLevel_Caption' => 'Visa Nivå',
	'BBUS_Setting_ViewLevel_Note' => '<i>Notera</i>: Textruta är läs-enbart.<br/>Använd kryssrutorna för att ändra detta värde.',

	'BBUS_Setting_ViewLevel_Explain1' => 'Visnings nivå är en komposit summa av en eller flera flaggor att gemensamt avgöra om en viss användare kommer att se forumets användningsstatistik på Användarprofil sidan.  <b>Använd kryssrutorna nedan för att aktivera eller inaktivera visning av användnings statistik av olika klasser av användare.</b><br/><br/>Visa Nivå tillgångs flaggor är definierade enligt följande:<br/>',

	'BBUS_Setting_ViewLevel_Explain2' => '<br/>Den vanligaste inställningen för många forum kommer att vara 24 (16 + 8), som gör det möjligt för administratörer och moderatorer att övervaka forumets användningsstatistik, medan alla andra användare kommer att presenteras med endast den grundläggande Användar Profil sidan.<br/><br/> Det rekommenderas att du begränsar visning av statistik, särskilt för stora forum, för att undvika prestandaförsämring till följd av att det skapas för många användare samtidigt.',

	'BBUS_Setting_ViewOptions_Caption' => 'Visa Alternativ',
	'BBUS_Setting_ViewOptions_Note' => '<i>Notera</i>: Textruta är läs-enbart.<br/>Använd kryssrutorna för att ändra detta värde.',
	'BBUS_Setting_ViewOptions_Explain1' => 'Liksom Visa Nivå, Visa Val är en summa av flaggor att aktivera och avaktivera olika funktioner i Forumets Användningstatistik Mod. <b>Använd kryssrutorna nedan för att aktivera eller inaktivera dessa funktioner.</b><br/><br/>Visa Alternativ flaggor definieras enligt följande:<br/>',
	'BBUS_Setting_ViewOptions_Explain2' => '',

	'BBUS_Settings_Default_Post_Rate_Scaling_Caption' => 'Standard Post Värdering Skal Faktor',
	'BBUS_Settings_Default_Post_Rate_Scaling_Explain' => 'Ställer in Standard Skal Faktor tillämpad till värden i Post Värderings statistik kolumn.',

	'BBUS_Settings_Default_Topic_Rate_Scaling_Caption' => 'Standard Ämne Värdering Skal Faktor',
	'BBUS_Settings_Default_Topic_Rate_Scaling_Explain' => 'Ställer in Standard Skal Faktor tillämpad till värden i Ämne Värdering statistik kolumn.',

	'BBUS_ViewLevel_Anonymous_Caption' => 'Anonyma',
	'BBUS_ViewLevel_Self_Caption' => 'Själv',
	'BBUS_ViewLevel_Users_Caption' => 'Användare',
	'BBUS_ViewLevel_Moderators_Caption' => 'Moderatorer',
	'BBUS_ViewLevel_Admins_Caption' => 'Admins',
	'BBUS_ViewLevel_SpecialGrp_Caption' => 'Särskild Grupp',

	'BBUS_ViewLevel_Anonymous_Explain' => 'Tillåt anonyma användare att granska statistik.',
	'BBUS_ViewLevel_Self_Explain' => 'Tillåt varje användare att se hans/hennes egen statistik.',
	'BBUS_ViewLevel_Users_Explain' => 'Tillåt alla användare att granska andra användares statistik.',
	'BBUS_ViewLevel_Moderators_Explain' => 'Tillåt moderatorer att granska statistik.',
	'BBUS_ViewLevel_Admins_Explain' => 'Tillåt administratörer att granska statistik. (Rekommenderas)',
	'BBUS_ViewLevel_SpecialGrp_Explain' => 'Tillåt en utsedd särskild användargrupp att granska statistik.',

	'BBUS_ViewOption_Show_All_Forums_Caption' => 'Visa alla forum, oavsett användarnamnets inläggs räkning.',
	'BBUS_ViewOption_PCTUTUP_Column_Visible_Caption' => 'Visa %UTUP Kolumn i Stats Tabell',
	'BBUS_ViewOption_Misc_Section_Visible_Caption' => 'Visa Blandad Info Sektion',
	'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Caption' => 'Visa "Totalt Un-beskurna Inlägg "i Misc Sektion',
	'BBUS_ViewOption_Viewer_Scalable_PR_Caption' => 'Tittares Skalbara Post Värdering',
	'BBUS_ViewOption_Viewer_Scalable_TR_Caption' => 'Tittares Skalbara Ämne Värdering',

	'BBUS_ViewOption_Show_All_Forums_Explain' => '',
	'BBUS_ViewOption_PCTUTUP_Column_Visible_Explain' => '',
	'BBUS_ViewOption_Misc_Section_Visible_Explain' => '',
	'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Explain' => '',
	'BBUS_ViewOption_Viewer_Scalable_PR_Explain' => '',
	'BBUS_ViewOption_Viewer_Scalable_TR_Explain' => '',

	'BBUS_Setting_SpecialGrp_Caption' => 'Särskild  Access Grupp',
	'BBUS_Setting_SpecialGrp_Explain' => 'Utser den särskilda grupp som kommer att tillåtas att visa forumets användningsstatistik. <i>Notera</i>: Denna inställning kommer bara att ha en effekt om \'Särskild Grupp\' flaggan är aktiverat i Visa Nivå nedan.',
	)
);

?>