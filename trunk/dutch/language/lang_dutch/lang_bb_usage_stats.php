<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_bb_usage_stats.php 97 2009-05-01 17:18:07Z Mighty Gorgon $
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
	'BBUS_Mod_Title' => 'Forumstatistieken',
	'BBUS_Misc' => 'Diversen',
	
	'BBUS_ColHeader_PostRate' => 'Berichtbeoordeling',
	'BBUS_ColHeader_PctUTP' => '%UTP',
	'BBUS_ColHeader_PctUTUP' => '%UTUP',
	'BBUS_ColHeader_NewTopics' => 'Nieuwe onderwerpen',
	'BBUS_ColHeader_TopicRate' => 'Onderwerpbeoordeling',
	'BBUS_ColHeader_Topics_Watched' => 'Gevolgd',
	'BBUS_ColHeader_Header' => 'Hoofd',
	'BBUS_ColHeader_Description' => 'Omschrijving',
	
	'BBUS_ColHeader_Posts_Explain' => 'Totaal aantal berichten.',
	'BBUS_ColHeader_PostRate_Explain' => 'Gemiddelde berichten per dag.',
	'BBUS_ColHeader_PctUTP_Explain' => 'Percentage van gebruikers totale berichten.',
	'BBUS_ColHeader_PctUTUP_Explain' => 'Percentage van gebruikers totaal opgeruimde berichten.',
	'BBUS_ColHeader_NewTopics_Explain' => 'Totaal aantal onderwerpen die de gebruiker is gestart.',
	'BBUS_ColHeader_TopicRate_Explain' => 'Gemiddelde nieuwe onderwerpen die zijn gestart per dag.',
	'BBUS_ColHeader_Topics_Watched_Explain' => 'Totaal aantal onderwerpen dat gevolgd wordt.',
	
	'BBUS_Col_Descriptions_Caption' => 'Kolomomschrijvingen',
	
	'BBUS_Msg_NoPosts' => 'Gebruiker heeft nog geen berichten geplaatst in een forum.',
	'BBUS_Unpruned_Posts' => 'Totaal berichten opgeruimd van',
	'BBUS_Scale_By' => 'Schaal:',
	
// Admin Configuration page
	'BBUS_Settings_Caption' => 'Forumstatistiekinstellingen',
	'BBUS_Settings_Explain' => 'Deze instellingen staan je toe om te beheren welke gebruikers de forumstatistieken mogen bekijken op de gebruikersprofielpagina en je kunt verschillende instellingen beheren gerelateerd aan de gegevens op deze pagina.',
	
	'BBUS_Setting_ViewLevel_Caption' => 'Weergaveniveau',
	'BBUS_Setting_ViewLevel_Note' => '<i>Opmerking</i>: Tekstbox is alleen-lezen.<br/>Gebruik de boxen om deze waarden te veranderen.',
	
	'BBUS_Setting_ViewLevel_Explain1' => 'Het toegangsniveau is een som van 1 of meer vinkjes, die samen bepalen welke de gebruikersgroepen statistieken mogen bekijken op de gebruikersprofielpagina.  <b>Gebruik de onderstaande vinkjes om het weergeven van statistieken bij bepaalde gebruikersniveaus te activeren of te deactiveren.</b><br/><br/>De weergaveniveauinstellingen zijn als volgt:<br/>',
	
	'BBUS_Setting_ViewLevel_Explain2' => '<br/>De standaardinstelling voor veel sites zal 24 (16 + 8) zijn, Hierbij sta je beheerders en moderators toe om de forumstatistieken te bekijken, terwijl alle andere gebruikers slechts een standaard gebruikersprofielpagina zullen zien.<br/><br/> Het wordt aanbevolen om restricties te stellen aan het bekijken van de statistieken, met name voor grotere sites, om vertraging van de site, door het laden van statistieken voor meerdere gebruikers tegelijk te voorkomen.',
	
	'BBUS_Setting_ViewOptions_Caption' => 'Weergaveopties',
	'BBUS_Setting_ViewOptions_Note' => '<i>Opmerking</i>: Tekstbox is alleen-lezen.<br/>Gebruik de boxen om deze waarden te veranderen.',
	'BBUS_Setting_ViewOptions_Explain1' => 'Net als weergaveniveau, is de weergaveinstelling, een opsomming van vinkjes, die samen de opties van de statistieken mod bepalen. <b>Gebruik de vinkjes hieronder om bepaalde opties in of uit te schakelen.</b><br/><br/>De weergaveinstellingen zijn als volgt:<br/>',
	'BBUS_Setting_ViewOptions_Explain2' => '',
	
	'BBUS_Settings_Default_Post_Rate_Scaling_Caption' => 'Standaard berichtbeoordelingsschaal',
	'BBUS_Settings_Default_Post_Rate_Scaling_Explain' => 'Zet de standaard beoordelingsschaal toepasbaar met waarden in de berichtbeoordelingskolom.',
	
	'BBUS_Settings_Default_Topic_Rate_Scaling_Caption' => 'Standaard onderwerpbeoordelingschaal',
	'BBUS_Settings_Default_Topic_Rate_Scaling_Explain' => 'Zet de standaard beoordelingschaal toepasbaar met waarden in het onderwerpbeoordelingskolom.',
	
	'BBUS_ViewLevel_Anonymous_Caption' => 'Anoniem',
	'BBUS_ViewLevel_Self_Caption' => 'Eigen',
	'BBUS_ViewLevel_Users_Caption' => 'Gebruikers',
	'BBUS_ViewLevel_Moderators_Caption' => 'Moderators',
	'BBUS_ViewLevel_Admins_Caption' => 'Beheerders',
	'BBUS_ViewLevel_SpecialGrp_Caption' => 'Speciale groep',
	
	'BBUS_ViewLevel_Anonymous_Explain' => 'Sta anonieme gebruikers toe statistieken te bekijken.',
	'BBUS_ViewLevel_Self_Explain' => 'Sta iedere gebruiker toe zijn/haar eigen statistieken te bekijken.',
	'BBUS_ViewLevel_Users_Explain' => 'Sta alle gebruikers toe statistieken van anderen te bekijken.',
	'BBUS_ViewLevel_Moderators_Explain' => 'Sta moderators toe statistieken te bekijken.',
	'BBUS_ViewLevel_Admins_Explain' => 'Sta beheerders toe statistieken te bekijken. (aanbevolen)',
	'BBUS_ViewLevel_SpecialGrp_Explain' => 'Sta een speciale gebruikersgroep toe statistieken te bekijken.',
	
	'BBUS_ViewOption_Show_All_Forums_Caption' => 'Alle forums, ongeacht de berichten van een gebruiker weergeven.',
	'BBUS_ViewOption_PCTUTUP_Column_Visible_Caption' => '%UTUP kolom in statistiekentabel weergeven',
	'BBUS_ViewOption_Misc_Section_Visible_Caption' => 'Diverse informatiesectie weergeven',
	'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Caption' => '"Totaal onopgeruimde berichten" in diverse sectie weergeven',
	'BBUS_ViewOption_Viewer_Scalable_PR_Caption' => 'Schaalbare berichtbeoordeling weergeven',
	'BBUS_ViewOption_Viewer_Scalable_TR_Caption' => 'Schaalbare onderwerpbeoordeling weergeven',
	
	'BBUS_ViewOption_Show_All_Forums_Explain' => '',
	'BBUS_ViewOption_PCTUTUP_Column_Visible_Explain' => '',
	'BBUS_ViewOption_Misc_Section_Visible_Explain' => '',
	'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Explain' => '',
	'BBUS_ViewOption_Viewer_Scalable_PR_Explain' => '',
	'BBUS_ViewOption_Viewer_Scalable_TR_Explain' => '',
	
	'BBUS_Setting_SpecialGrp_Caption' => 'Speciale toegangsgroep',
	'BBUS_Setting_SpecialGrp_Explain' => 'Wijs de speciale groep toe die de rechten heeft om de forumstatistieken te bekijken.  <i>Let op</i>: Deze instellingen werken alleen als de \'Speciale groep\' optie is ingeschakeld bij weergaveniveau hierboven.',
	)
);

?>