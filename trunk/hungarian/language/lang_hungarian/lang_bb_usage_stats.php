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
  'BBUS_Mod_Title' => 'Oldalhaszn�lati statisztika',
  'BBUS_Misc' => 'Egyebek',
  'BBUS_ColHeader_PostRate' => 'Hozz�sz�l�s ar�nya',
  'BBUS_ColHeader_PctUTP' => '%UTP',
  'BBUS_ColHeader_PctUTUP' => '%UTUP',
  'BBUS_ColHeader_NewTopics' => '�j t�m�k',
  'BBUS_ColHeader_TopicRate' => 'Topic Rate',
  'BBUS_ColHeader_Topics_Watched' => 'Figyelt',
  'BBUS_ColHeader_Header' => 'Fejl�c',
  'BBUS_ColHeader_Description' => 'Meghat�roz�s',
  'BBUS_ColHeader_Posts_Explain' => '�sszes hozz�sz�l�s sz�ma.',
  'BBUS_ColHeader_PostRate_Explain' => 'Legt�bb hozz�sz�l�s per nap.',
  'BBUS_ColHeader_PctUTP_Explain' => 'A felhaszn�l�ra jut� hozz�sz�l�sok sz�zal�kban.',
  'BBUS_ColHeader_PctUTUP_Explain' => 'A nem kitiszt�tott hozz�sz�l�sok sz�ma sz�zal�kosan.',
  'BBUS_ColHeader_NewTopics_Explain' => '�sszes, a felhaszn�l� �ltal ind�tott, t�ma.',
  'BBUS_ColHeader_TopicRate_Explain' => 'A legt�bb egy napon ind�tott t�ma.',
  'BBUS_ColHeader_Topics_Watched_Explain' => 'A figyelt t�m�k sz�ma.',
  'BBUS_Col_Descriptions_Caption' => 'Oszlop meghat�roz�sai',
  'BBUS_Msg_NoPosts' => 'A felhaszn�l� nem sz�lt hozz� egy t�m�hoz sem.',
  'BBUS_Unpruned_Posts' => '�sszes kitiszt�tott hozz�sz�l�s',
  'BBUS_Scale_By' => 'Scale By:',
  'BBUS_Settings_Caption' => 'Oldalhaszn�lati statisztika be�ll�t�sai',
  'BBUS_Settings_Explain' => 'Ez a be�ll�t�s lehet�v� teszi, hogy a felhaszn�l�i profilban meg lehessen n�zni, �s be lehessen �ll�tani az oldalhaszn�lati statisztik�kat.',
  'BBUS_Setting_ViewLevel_Caption' => 'L�that�s�g szintje',
  'BBUS_Setting_ViewLevel_Note' => '<i>Megjegyz�s</i>: Csak olvashat� sz�vegdoboz.<br/>Haszn�ld a v�ltoztat�s�hoz a jel�l�ket.',
  'BBUS_Setting_ViewLevel_Explain1' => 'A l�that�s�gi szint be�ll�t�sa egy t�bb t�nyez�t�l f�gg� sz�m, ami megmutatja, hogy egy felhaszn�l� l�thatja-e az oldalfelhaszn�l�si statiosztik�kat, vagy sem a felhaszn�l�i profilokban. <b>Haszn�ld a kis jel�l�ket att�l f�gg�en, hogy az adott felhaszn�l�k sz�m�ra enged�lyezve vagy tiltva legyen a megtekint�s.</b><br/><br/>A l�that�s�g szintj�hez az al�bbi be�ll�t�sok vannak:<br/>',
  'BBUS_Setting_ViewLevel_Explain2' => '<br/>Az �ltal�nos be�ll�t�s a legt�bb f�rumon 24 (16 + 8) szokott lenni, azaz az adminisztr�torok �s a moder�torok megtekinthetik a felhaszn�l�i statisztik�kat. Minden m�s felhaszn�l� csak az alap felhaszn�l�i profil oldalt fogja l�tni.<br/><br/>Aj�nlott, hogy �lj ezekkel a megszor�t�sokkal, ugyanis egy nagyobb f�rumhoz a statisztika elk�sz�t�se nagy er�forr�sokat ig�nyel, �s ez nem akkor t�nik fel, amikor csak egy-egy felhaszn�l� k�ri le ezeket, hanem akkor, amikor t�bb felhaszn�l� egyidej�leg szeretne t�bb statisztik�t is megtekinteni.',
  'BBUS_Setting_ViewOptions_Caption' => 'L�that� opci�k',
  'BBUS_Setting_ViewOptions_Note' => '<i>Megjegyz�s</i>: Csak olvashat� sz�vegdoboz.<br/>Haszn�ld a v�ltoztat�s�hoz a jel�l�ket.',
  'BBUS_Setting_ViewOptions_Explain1' => 'Hasonl�an a l�that�s�g szintj�hez, itt is be kell jel�lni az enged�lyezett statisztikai opci�kat. <b>Haszn�ld a jel�l�n�gyzeteket a tulajdons�g enged�lyez�s�hez vagy tilt�s�hoz.</b><br/><br/>Az al�bbi opci�k �rhet�ek el::<br/>',
  'BBUS_Setting_ViewOptions_Explain2' => '',
  'BBUS_Settings_Default_Post_Rate_Scaling_Caption' => 'Alap�rtelmezett hozz�sz�l�s ar�ny�nak n�vel�se t�nyez�',
  'BBUS_Settings_Default_Post_Rate_Scaling_Explain' => 'Az a t�nyez�, ami alkalmaz�sra ker�l a hozz�sz�l�s ar�ny�r�l k�sz�lt statisztika oszlop�nak l�pt�kek�nt',
  'BBUS_Settings_Default_Topic_Rate_Scaling_Caption' => 'Alap�rtelmezett t�ma�rt�kel�si sk�labeoszt�s',
  'BBUS_Settings_Default_Topic_Rate_Scaling_Explain' => 'Ez az �rt�k a T�ma�rt�kel�s statisztika oszlop�nak a beoszt�sa lesz.',
  'BBUS_ViewLevel_Anonymous_Caption' => 'Anonymus',
  'BBUS_ViewLevel_Self_Caption' => '�nmaga',
  'BBUS_ViewLevel_Users_Caption' => 'Felhaszn�l�k',
  'BBUS_ViewLevel_Moderators_Caption' => 'Moder�torok',
  'BBUS_ViewLevel_Admins_Caption' => 'Adminisztr�torok',
  'BBUS_ViewLevel_SpecialGrp_Caption' => 'Speci�lis csoport',
  'BBUS_ViewLevel_Anonymous_Explain' => 'Anonymus felhaszn�l�knak enged�lyezve van a statisztik�k megtekint�se.',
  'BBUS_ViewLevel_Self_Explain' => 'A felhaszn�l�knak enged�lyezve van a saj�t statisztik�inak megtekint�se.',
  'BBUS_ViewLevel_Users_Explain' => 'Minden felhaszn�l�knak enged�lyezve van a statisztik�k megtekint�se.',
  'BBUS_ViewLevel_Moderators_Explain' => 'A moder�toroknak enged�lyezve van a statisztik�k megtekint�se.',
  'BBUS_ViewLevel_Admins_Explain' => 'Az adminisztr�toroknak enged�lyezve van a statisztik�k megtekint�se. (Aj�nlott)',
  'BBUS_ViewLevel_SpecialGrp_Explain' => 'Egy speci�lis csoportnak enged�lyezve van a statisztik�k megtekint�se.',
  'BBUS_ViewOption_Show_All_Forums_Caption' => 'Minden f�rum megtekint�se, amit a felhaszn�l� a hozz�sz�l�saival figyelmen k�v�l hagyott.',
  'BBUS_ViewOption_PCTUTUP_Column_Visible_Caption' => '%UTUP oszlop megjeten�t�se a statisztikai t�bl�zatban',
  'BBUS_ViewOption_Misc_Section_Visible_Caption' => 'Egy�b inform�ci�k r�sz megjelen�t�se',
  'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Caption' => '"�sszes kitiszt�tatlan hozz�sz�l�s" megjelen�t�se az egy�b r�szben',
  'BBUS_ViewOption_Viewer_Scalable_PR_Caption' => 'Viewer Scalable Post Rate',
  'BBUS_ViewOption_Viewer_Scalable_TR_Caption' => 'Viewer Scalable Topic Rate',
  'BBUS_ViewOption_Show_All_Forums_Explain' => '',
  'BBUS_ViewOption_PCTUTUP_Column_Visible_Explain' => '',
  'BBUS_ViewOption_Misc_Section_Visible_Explain' => '',
  'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Explain' => '',
  'BBUS_ViewOption_Viewer_Scalable_PR_Explain' => '',
  'BBUS_ViewOption_Viewer_Scalable_TR_Explain' => '',
  'BBUS_Setting_SpecialGrp_Caption' => 'Hozz�f�r�s speci�lis csoportja',
  'BBUS_Setting_SpecialGrp_Explain' => 'Azon speci�lis csoport meghat�roz�sa, amelynek joga van az oldalhaszn�lati statisztik�kat megn�zni. <i>Megjegyz�s</i>: Ez a be�ll�t�s csak akkor van figyelembe v�ve, ha a \'Speci�lis csoport\' meg van jel�lve, mint enged�ly a l�that�s�gi szintn�l.',
))
?>