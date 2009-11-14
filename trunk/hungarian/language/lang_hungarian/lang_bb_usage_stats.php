<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin.php 110 2009-07-14 08:09:47Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
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

$lang = array_merge($lang, array (
  'BBUS_Mod_Title' => 'Oldalhasználati statisztika',
  'BBUS_Misc' => 'Egyebek',
  'BBUS_ColHeader_PostRate' => 'Hozzászólás aránya',
  'BBUS_ColHeader_PctUTP' => '%UTP',
  'BBUS_ColHeader_PctUTUP' => '%UTUP',
  'BBUS_ColHeader_NewTopics' => 'Új témák',
  'BBUS_ColHeader_TopicRate' => 'Topic Rate',
  'BBUS_ColHeader_Topics_Watched' => 'Figyelt',
  'BBUS_ColHeader_Header' => 'Fejléc',
  'BBUS_ColHeader_Description' => 'Meghatározás',
  'BBUS_ColHeader_Posts_Explain' => 'Összes hozzászólás száma.',
  'BBUS_ColHeader_PostRate_Explain' => 'Legtöbb hozzászólás per nap.',
  'BBUS_ColHeader_PctUTP_Explain' => 'A felhasználóra jutó hozzászólások százalékban.',
  'BBUS_ColHeader_PctUTUP_Explain' => 'A nem kitisztított hozzászólások száma százalékosan.',
  'BBUS_ColHeader_NewTopics_Explain' => 'Összes, a felhasználó által indított, téma.',
  'BBUS_ColHeader_TopicRate_Explain' => 'A legtöbb egy napon indított téma.',
  'BBUS_ColHeader_Topics_Watched_Explain' => 'A figyelt témák száma.',
  'BBUS_Col_Descriptions_Caption' => 'Oszlop meghatározásai',
  'BBUS_Msg_NoPosts' => 'A felhasználó nem szólt hozzá egy témához sem.',
  'BBUS_Unpruned_Posts' => 'Összes kitisztított hozzászólás',
  'BBUS_Scale_By' => 'Scale By:',
  'BBUS_Settings_Caption' => 'Oldalhasználati statisztika beállításai',
  'BBUS_Settings_Explain' => 'Ez a beállítás lehetõvé teszi, hogy a felhasználói profilban meg lehessen nézni, és be lehessen állítani az oldalhasználati statisztikákat.',
  'BBUS_Setting_ViewLevel_Caption' => 'Láthatóság szintje',
  'BBUS_Setting_ViewLevel_Note' => '<i>Megjegyzés</i>: Csak olvasható szövegdoboz.<br/>Használd a változtatásához a jelölõket.',
  'BBUS_Setting_ViewLevel_Explain1' => 'A láthatósági szint beállítása egy több tényezõtõl függõ szám, ami megmutatja, hogy egy felhasználó láthatja-e az oldalfelhasználási statiosztikákat, vagy sem a felhasználói profilokban. <b>Használd a kis jelölõket attól függõen, hogy az adott felhasználók számára engedélyezve vagy tiltva legyen a megtekintés.</b><br/><br/>A láthatóság szintjéhez az alábbi beállítások vannak:<br/>',
  'BBUS_Setting_ViewLevel_Explain2' => '<br/>Az általános beállítás a legtöbb fórumon 24 (16 + 8) szokott lenni, azaz az adminisztrátorok és a moderátorok megtekinthetik a felhasználói statisztikákat. Minden más felhasználó csak az alap felhasználói profil oldalt fogja látni.<br/><br/>Ajánlott, hogy élj ezekkel a megszorításokkal, ugyanis egy nagyobb fórumhoz a statisztika elkészítése nagy erõforrásokat igényel, és ez nem akkor tûnik fel, amikor csak egy-egy felhasználó kéri le ezeket, hanem akkor, amikor több felhasználó egyidejûleg szeretne több statisztikát is megtekinteni.',
  'BBUS_Setting_ViewOptions_Caption' => 'Látható opciók',
  'BBUS_Setting_ViewOptions_Note' => '<i>Megjegyzés</i>: Csak olvasható szövegdoboz.<br/>Használd a változtatásához a jelölõket.',
  'BBUS_Setting_ViewOptions_Explain1' => 'Hasonlóan a láthatóság szintjéhez, itt is be kell jelölni az engedélyezett statisztikai opciókat. <b>Használd a jelölõnégyzeteket a tulajdonság engedélyezéséhez vagy tiltásához.</b><br/><br/>Az alábbi opciók érhetõek el::<br/>',
  'BBUS_Setting_ViewOptions_Explain2' => '',
  'BBUS_Settings_Default_Post_Rate_Scaling_Caption' => 'Alapértelmezett hozzászólás arányának növelése tényezõ',
  'BBUS_Settings_Default_Post_Rate_Scaling_Explain' => 'Az a tényezõ, ami alkalmazásra kerül a hozzászólás arányáról készült statisztika oszlopának léptékeként',
  'BBUS_Settings_Default_Topic_Rate_Scaling_Caption' => 'Alapértelmezett témaértékelési skálabeosztás',
  'BBUS_Settings_Default_Topic_Rate_Scaling_Explain' => 'Ez az érték a Témaértékelés statisztika oszlopának a beosztása lesz.',
  'BBUS_ViewLevel_Anonymous_Caption' => 'Anonymus',
  'BBUS_ViewLevel_Self_Caption' => 'Önmaga',
  'BBUS_ViewLevel_Users_Caption' => 'Felhasználók',
  'BBUS_ViewLevel_Moderators_Caption' => 'Moderátorok',
  'BBUS_ViewLevel_Admins_Caption' => 'Adminisztrátorok',
  'BBUS_ViewLevel_SpecialGrp_Caption' => 'Speciális csoport',
  'BBUS_ViewLevel_Anonymous_Explain' => 'Anonymus felhasználóknak engedélyezve van a statisztikák megtekintése.',
  'BBUS_ViewLevel_Self_Explain' => 'A felhasználóknak engedélyezve van a saját statisztikáinak megtekintése.',
  'BBUS_ViewLevel_Users_Explain' => 'Minden felhasználóknak engedélyezve van a statisztikák megtekintése.',
  'BBUS_ViewLevel_Moderators_Explain' => 'A moderátoroknak engedélyezve van a statisztikák megtekintése.',
  'BBUS_ViewLevel_Admins_Explain' => 'Az adminisztrátoroknak engedélyezve van a statisztikák megtekintése. (Ajánlott)',
  'BBUS_ViewLevel_SpecialGrp_Explain' => 'Egy speciális csoportnak engedélyezve van a statisztikák megtekintése.',
  'BBUS_ViewOption_Show_All_Forums_Caption' => 'Minden fórum megtekintése, amit a felhasználó a hozzászólásaival figyelmen kívül hagyott.',
  'BBUS_ViewOption_PCTUTUP_Column_Visible_Caption' => '%UTUP oszlop megjetenítése a statisztikai táblázatban',
  'BBUS_ViewOption_Misc_Section_Visible_Caption' => 'Egyéb információk rész megjelenítése',
  'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Caption' => '"Összes kitisztítatlan hozzászólás" megjelenítése az egyéb részben',
  'BBUS_ViewOption_Viewer_Scalable_PR_Caption' => 'Viewer Scalable Post Rate',
  'BBUS_ViewOption_Viewer_Scalable_TR_Caption' => 'Viewer Scalable Topic Rate',
  'BBUS_ViewOption_Show_All_Forums_Explain' => '',
  'BBUS_ViewOption_PCTUTUP_Column_Visible_Explain' => '',
  'BBUS_ViewOption_Misc_Section_Visible_Explain' => '',
  'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Explain' => '',
  'BBUS_ViewOption_Viewer_Scalable_PR_Explain' => '',
  'BBUS_ViewOption_Viewer_Scalable_TR_Explain' => '',
  'BBUS_Setting_SpecialGrp_Caption' => 'Hozzáférés speciális csoportja',
  'BBUS_Setting_SpecialGrp_Explain' => 'Azon speciális csoport meghatározása, amelynek joga van az oldalhasználati statisztikákat megnézni. <i>Megjegyzés</i>: Ez a beállítás csak akkor van figyelembe véve, ha a \'Speciális csoport\' meg van jelölve, mint engedély a láthatósági szintnél.',
))
?>