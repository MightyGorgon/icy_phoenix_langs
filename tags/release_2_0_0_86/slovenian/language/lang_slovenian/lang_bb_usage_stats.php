<?php
/**
*
* @package Intero
* @version $Id: lang_bb_usage_stats.php 33 2011-05-02 16:34:07Z 
* @copyright (c) 2011
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
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
	'BBUS_Mod_Title' => 'statistica uporabe krova',
	'BBUS_Misc' => 'me�ano',

	'BBUS_ColHeader_PostRate' => 'ocena objave',
	'BBUS_ColHeader_PctUTP' => '%UTP',
	'BBUS_ColHeader_PctUTUP' => '%UTUP',
	'BBUS_ColHeader_NewTopics' => 'Nova tema',
	'BBUS_ColHeader_TopicRate' => 'ocena teme',
	'BBUS_ColHeader_Topics_Watched' => 'gledano',
	'BBUS_ColHeader_Header' => 'glava',
	'BBUS_ColHeader_Description' => 'opis',

	'BBUS_ColHeader_Posts_Explain' => 'skupno �tevilo objav.',
	'BBUS_ColHeader_PostRate_Explain' => 'povprecno �tevilo objav na dan.',
	'BBUS_ColHeader_PctUTP_Explain' => 'procent uporabnikov na vse objav.',
	'BBUS_ColHeader_PctUTUP_Explain' => 'procent uporabnikov na vse neobrezanih objav.',
	'BBUS_ColHeader_NewTopics_Explain' => 'skupno �tevilo novih tem ustvarjenih prek uporabnikov.',
	'BBUS_ColHeader_TopicRate_Explain' => 'povprecno �tevilo novih tem ustvarjenih na dan.',
	'BBUS_ColHeader_Topics_Watched_Explain' => 'skupno �tevilo tem ki so gledane.',

	'BBUS_Col_Descriptions_Caption' => 'opis stolpca',

	'BBUS_Msg_NoPosts' => 'uporabnik ni nicesar objavil v nobenih forumih.',
	'BBUS_Unpruned_Posts' => 'vse obrezane objave',
	'BBUS_Scale_By' => 'obseg prek:',

// Admin Configuration page
	'BBUS_Settings_Caption' => 'plo�ca uporabnih statisticnih nastavitev',
	'BBUS_Settings_Explain' => 'te nastavitve omogocajo da se odlocite katero plo�co uporabnik lahko vidi v plo�ci uporabne statistike na uporabnika profilna stran in da premisli o mo�nih opcijah povezanih z predstavitvijo na strani.',

	'BBUS_Setting_ViewLevel_Caption' => 'poglej stopnjo',
	'BBUS_Setting_ViewLevel_Note' => '<i>Note</i>: besedilno okence je samo-berljivo.<br />uporabi potrditveno polje za spremembo te vrednosti.',

	'BBUS_Setting_ViewLevel_Explain1' => 'pogled stopnje nastavitev je sestavljena vsota ene ali vecih zastavic ki zbirateljsko dolocajo kjerkoli bo uporabnik videl plo�co uporabne statistike na uprabni�ki profilni strani.<b>uporabi potrditveno polje spodaj omogoci ali neomogoci vpogled uporabnih statistik preko dolocenih razredov uporabnikov.</b><br /><br />pogled stanja omogoca zastavica ki je definirana sledece:<br />',

	'BBUS_Setting_ViewLevel_Explain2' => '<br />najpogostej�e nastavitve za vecino plo�c bodo 24 (16 + 8),ki omogocajo administratorju in moderatorju  spremlanje plo�ce uporabnih statistik, medtem ko bodo vsi ostali uporabniki predstavljeni z osnovnimi uporabni�kimi profili strani.<br /><br /> to je priporoceno da omejite vpogled statisistike, zlasti za velike plo�ce, da se izognete izvedbi poni�evalnih problemov  ki iz  statistike prihajajo generirano z vecih uporabnikov istocasno.',

	'BBUS_Setting_ViewOptions_Caption' => 'poglej mo�nosti',
	'BBUS_Setting_ViewOptions_Note' => '<i>Note</i>: besedilno okence je samo-berljivo.<br />uporabi potrditveno polje za spremembo te vrednosti.',
	'BBUS_Setting_ViewOptions_Explain1' => 'stopnja pogleda v�ec mi je, pogled mo�nosti nastavitev je vsota zastavic ki omogocajo ali neomogocajo razlicne funkcije plo�ce uporabnih statistik Mod. <b>uporabi potrditveno polja spodaj za omogociti ali neomogociti funkcijo.</b><br /><br />pogled mo�nosti zastavic je definiran sledece:<br />',
	'BBUS_Setting_ViewOptions_Explain2' => '',

	'BBUS_Settings_Default_Post_Rate_Scaling_Caption' => 'privzete ocene objav osvojenih faktorjev',
	'BBUS_Settings_Default_Post_Rate_Scaling_Explain' => 'nastavi privzet osvojen faktor uporabljen v statisticnem stolpcu ocen objav.',

	'BBUS_Settings_Default_Topic_Rate_Scaling_Caption' => 'privzete ocene tem osvojenih faktorjev',
	'BBUS_Settings_Default_Topic_Rate_Scaling_Explain' => 'nastavi privzeto osvojen faktor uporabljen v statisticnem stolpcu ocen tem.',

	'BBUS_ViewLevel_Anonymous_Caption' => 'neznan',
	'BBUS_ViewLevel_Self_Caption' => 'jaz',
	'BBUS_ViewLevel_Users_Caption' => 'uporabnik',
	'BBUS_ViewLevel_Moderators_Caption' => 'Moderator',
	'BBUS_ViewLevel_Admins_Caption' => 'Administrator',
	'BBUS_ViewLevel_SpecialGrp_Caption' => 'posebna skupina',

	'BBUS_ViewLevel_Anonymous_Explain' => 'dovoli neznanim uporabnikom vpogled v statistiko.',
	'BBUS_ViewLevel_Self_Explain' => 'dovoli vsem uporabnikom vpogled v njen/njegov statistiko.',
	'BBUS_ViewLevel_Users_Explain' => 'dovoli bilokerim uporabnikom vpogled v druge uporabni�ke statistike.',
	'BBUS_ViewLevel_Moderators_Explain' => 'dovoli moderatorju vpogled v statistiko.',
	'BBUS_ViewLevel_Admins_Explain' => 'dovoli administratorju vpogled v statistiko. (Priporoceno)',
	'BBUS_ViewLevel_SpecialGrp_Explain' => 'dovoli posebni uporabni�ki skupini vpogled v statistiko.',

	'BBUS_ViewOption_Show_All_Forums_Caption' => 'prika�i vse forume, brezobzirno uporabni�ko �tetje objav.',
	'BBUS_ViewOption_PCTUTUP_Column_Visible_Caption' => 'prikaz %UTUP stolpec in Stats Tabla',
	'BBUS_ViewOption_Misc_Section_Visible_Caption' => 'prikazan me�an predel informacij',
	'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Caption' => ' prika�i "vse neobrezane objave" v  Misc Sekciji',
	'BBUS_ViewOption_Viewer_Scalable_PR_Caption' => 'gledalcevo merilo ocen objav',
	'BBUS_ViewOption_Viewer_Scalable_TR_Caption' => 'gledalcevo merilo ocen tem',

	'BBUS_ViewOption_Show_All_Forums_Explain' => '',
	'BBUS_ViewOption_PCTUTUP_Column_Visible_Explain' => '',
	'BBUS_ViewOption_Misc_Section_Visible_Explain' => '',
	'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Explain' => '',
	'BBUS_ViewOption_Viewer_Scalable_PR_Explain' => '',
	'BBUS_ViewOption_Viewer_Scalable_TR_Explain' => '',

	'BBUS_Setting_SpecialGrp_Caption' => 'posebna dostopna skupina',
	'BBUS_Setting_SpecialGrp_Explain' => 'imenovanje posebne skupine ki vam bo omogocala vpogled plo�ce uporabne statistike. <i>Note</i>: te nastavitve bodo imele effekt samo ce je zastavica \'posebna ekipa\' omogocena v pogledu stopnji vi�je.',

	)
);

?>