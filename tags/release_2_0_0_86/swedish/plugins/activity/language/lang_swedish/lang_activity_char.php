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
* aUsTiN-Inc 2003/5 (austin@phpbb-amod.com) - (http://phpbb-amod.com)
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	die('Not Authorized.'); // Admin
}

#==== Page Titles
$lang['amp_char_create_char_page_title'] = 'Skapa ett spel karaktär';
$lang['amp_char_edit_char_page_title'] = 'Redigera din karaktär';
$lang['amp_char_save_char_page_title'] = 'Karaktär redigerad';
$lang['amp_char_profile_char_page_title'] = 'Spel profil';
$lang['amp_char_delete_char_page_title'] = 'Karaktär raderad';
$lang['amp_char_char_shop_page_title'] = 'Karaktärs shop';
$lang['amp_char_char_shop_preview_title'] = 'Förhandsgranska effekter';
$lang['amp_char_char_shop_save_title'] = 'Karaktär shop';
#================

$lang['amp_char_topic_link'] = 'Visa min karaktär';

$lang['amp_char_other_chars'] = 'Andra medlemmars karaktär';

$lang['amp_char_link_back'] = 'Karaktär sida';
$lang['amp_char_cp_chars'] = 'Välj en karaktär';
$lang['amp_char_cp_gender_m'] = 'Man karaktär';
$lang['amp_char_cp_gender_f'] = 'Kvinno karaktär';
$lang['amp_char_cp_name'] = 'Karaktär namn';
$lang['amp_char_cp_gender'] = 'Karaktär kön';
$lang['amp_char_cp_gender_m'] = 'Man';
$lang['amp_char_cp_gender_f'] = 'Kvinna';
$lang['amp_char_cp_age'] = 'Karaktär ålder';
$lang['amp_char_cp_age_exp'] = 'Års värde exempel: 5 bör vara 5 år gammal';
$lang['amp_char_cp_from'] = 'Karaktär från';
$lang['amp_char_cp_intrests'] = 'Karaktär intresse';
$lang['amp_char_cp_submit'] = ' Skapa karaktär ';
$lang['amp_char_cp_error_name'] = 'Ett karaktärs namn krävs.';
$lang['amp_char_cp_error_gender'] = 'Ett karaktärs kön krävs.';
$lang['amp_char_cp_error_character'] = 'En karaktär krävs.';
$lang['amp_char_cp_error_age'] = 'En karaktärs ålder krävs.';
$lang['amp_char_error_msg'] = 'Klicka %L% För att gå tillbaka till föregående sida.';
$lang['amp_char_error_msg_here'] = '<i>Här</i>';
$lang['amp_char_cp_success'] = 'Din karaktärs statistik har uppdaterats.';
$lang['amp_char_cp_name_exists'] = 'Tyvärr det namnet används redan.';
$lang['amp_char_years'] = 'År gammal';
$lang['amp_char_edit_exp'] = 'Detta är hur andra användare ser din karaktärs profil. Du kan redigera den nedan.';
$lang['amp_char_no_intrests'] = 'Inga listade';
$lang['amp_char_no_from'] = 'Inte specificerat';
$lang['amp_char_cp_ge'] = 'GE (Game Experience)';
$lang['amp_char_cp_ge_level'] = 'GE Nivå';
$lang['amp_char_last_played'] = 'Senaste spel som spelades';
$lang['amp_char_last_played_exp'] = '%G% In %T% Mode On %D%.';
$lang['amp_char_total_games'] = 'Totalt spelade speld';
$lang['amp_char_total_games_exp'] = '%T% Spel.';
$lang['amp_char_total_trophies'] = 'Totala pokaler: %T%';
$lang['amp_char_hof_member'] = 'Hall Of Fame-medlem: %A%';
$lang['amp_char_time_spent'] = 'Tid: %T%';
$lang['amp_char_hof_member_y'] = 'Ja';
$lang['amp_char_hof_member_n'] = 'Nej';
$lang['amp_char_cp_your_edits'] = 'Det är här du kan ändra din profil framträdanden.';
$lang['amp_char_cp_not_enough_ge'] = 'Tyvärr har du inte tillräckligt med GE för att utföra den här åtgärden.';
$lang['amp_char_cp_cost'] = '%T% GE Poäng för denna åtgärd.';
$lang['amp_char_cp_ge_total'] = 'Du har %T% GE Poäng tillgängliga att spendera.';
$lang['amp_char_cp_save_char'] = 'Spara ändringar';
$lang['amp_char_cp_did_change_char'] = 'Ändrade du tecken ovanför?';
$lang['amp_char_cp_error_change'] = 'Du måste ange om du ändrat din karaktär eller inte.';
$lang['amp_char_pro_no_char'] = 'Den här användaren har inte skapat en karaktär än.';
$lang['amp_char_pro_views'] = 'Jag har setts %T% gånger.';
$lang['amp_char_create_char_link'] = 'Skapa en karaktär';
$lang['amp_char_goto_shop_link'] = 'Karaktär shop';
$lang['amp_char_cp_saying'] = 'Karaktär säger';
$lang['amp_char_cp_title'] = 'Karaktär titel';
$lang['amp_char_cp_delete'] = 'Radera min karaktär';
$lang['amp_char_cp_delete_confirm'] = 'Är du säker på att du vill radera din karaktär? Detta <b>KAN INTE</b> ångras!';
$lang['amp_char_cp_delete_complete'] = 'Karaktär raderad';
$lang['amp_char_cp_delete_error'] = 'Du måste skapa en karaktär innan du raderar den.';

#==== Shop
$lang['amp_char_shop_options'] = 'Setup dina färger & effekter';
$lang['amp_char_shop_options_name'] = 'Karaktär namns alternativ';
$lang['amp_char_shop_options_saying'] = 'Karaktär säger alternativ';
$lang['amp_char_shop_options_title'] = 'Karaktär titel alternativ';
$lang['amp_char_shop_color'] = 'Färg';
$lang['amp_char_shop_effect'] = 'Effekt';
$lang['amp_char_shop_cost'] = 'GE Kostnad';
$lang['amp_char_shop_cost_yes'] = '%T% GE Poäng';
$lang['amp_char_shop_cost_no'] = 'Gratis';
$lang['amp_char_shop_spendable'] = 'Du har %T% GE Poäng att spendera.';

$lang['amp_char_shop_color_blue'] = 'Blå';
$lang['amp_char_shop_color_green'] = 'Grön';
$lang['amp_char_shop_color_black'] = 'Svart';
$lang['amp_char_shop_color_white'] = 'Vit';
$lang['amp_char_shop_color_green'] = 'Grön';
$lang['amp_char_shop_color_yellow'] = 'Gul';
$lang['amp_char_shop_color_red'] = 'Röd';
$lang['amp_char_shop_color_violet'] = 'Violet';
$lang['amp_char_shop_color_cyan'] = 'Cyan';

$lang['amp_char_shop_option_color'] = 'Färg';
$lang['amp_char_shop_option_shadow'] = 'Skugga';
$lang['amp_char_shop_option_glow'] = 'Glöd';
$lang['amp_char_shop_option_bold'] = 'Fet';
$lang['amp_char_shop_option_italic'] = 'Kursiv';
$lang['amp_char_shop_option_underline'] = 'Understruken';

$lang['amp_char_shop_button_save'] = 'Skicka ändringar';
$lang['amp_char_shop_button_preview'] = 'Förhandsvisning final';

$lang['amp_char_shop_preview_1'] = 'Förhandsgranska användarnamn';
$lang['amp_char_shop_preview_2'] = 'Förhandsgranska titel';
$lang['amp_char_shop_preview_3'] = 'Förhandsgranska säger';

$lang['amp_char_shop_not_enough_ge'] = 'Tyvärr har du inte tillräckligt med GE för att utföra denna uppgift.';
$lang['amp_char_shop_save'] = ' Spara inställningar ';

#==== ACP
$lang['amp_char_change_title_1'] = 'Allmänna inställningar';
$lang['amp_char_change_char'] = 'Mängd av GE För att ändra en karaktär:';
$lang['amp_char_change_name'] = 'Mängd av GE För att ändra ett karaktärs namn:';
$lang['amp_char_change_title'] = 'Mängd av GE För att ändra en karaktärs titel:';
$lang['amp_char_change_saying'] = 'Mängd av GE För att ändra en karaktärs yttrande:';
$lang['amp_char_change_gender'] = 'Mängd av GE För att ändra ett karaktärs kön:';
$lang['amp_char_change_from'] = 'Mängd av GE För att ändra en karaktärs plats:';
$lang['amp_char_change_intrests'] = 'Mängd av GE För att ändra ett karaktärs ålder:';

$lang['amp_char_change_title_2'] = 'Shop särskilda kostnader';
$lang['amp_char_change_title_c'] = 'GE Kostnaden för att lägga till Char titels färg effekter';
$lang['amp_char_change_title_g'] = 'GE Kostnaden för att lägga till Char titels glöd effekter';
$lang['amp_char_change_title_s'] = 'GE Kostnaden för att lägga till Char titels skugg effekter';
$lang['amp_char_change_title_b'] = 'GE Kostnaden för att lägga till Char titels fet effekter';
$lang['amp_char_change_title_i'] = 'GE Kostnaden för att lägga till Char titels kursiv effekter';
$lang['amp_char_change_title_u'] = 'GE Kostnaden för att lägga till Char titels understrukens effekter';
$lang['amp_char_change_name_c'] = 'GE Kostnaden för att lägga till Char namns färg effekter';
$lang['amp_char_change_name_g'] = 'GE Kostnaden för att lägga till Char namns glöd effekter';
$lang['amp_char_change_name_s'] = 'GE Kostnaden för att lägga till Char namns skugg effekter';
$lang['amp_char_change_name_b'] = 'GE Kostnaden för att lägga till Char namns fet effekter';
$lang['amp_char_change_name_i'] = 'GE Kostnaden för att lägga till Char namns kursiv effekter';
$lang['amp_char_change_name_u'] = 'GE Kostnaden för att lägga till Char namns understrukens effekter';
$lang['amp_char_change_saying_c'] = 'GE Kostnaden för att lägga till Char framhållande färg effekter';
$lang['amp_char_change_saying_g'] = 'GE Kostnaden för att lägga till Char framhållande glöd effekter';
$lang['amp_char_change_saying_s'] = 'GE Kostnaden för att lägga till Char framhållande skugg effekter';
$lang['amp_char_change_saying_b'] = 'GE Kostnaden för att lägga till Char framhållande fet effekter';
$lang['amp_char_change_saying_i'] = 'GE Kostnaden för att lägga till Char framhållande kursiv effekter';
$lang['amp_char_change_saying_u'] = 'GE Kostnaden för att lägga till Char framhållande understrukens effekter';

$lang['amp_char_change_title_3'] = 'Visaämne &amp; Visa profil inställningar';
$lang['amp_char_change_viewtopic'] = 'Visa länk i inlägg';
$lang['amp_char_change_viewprofile'] = 'Visa karaktörs profiler i Användar Profiler';

$lang['amp_char_change_title_4'] = 'GE Belönings inställningar';
$lang['amp_char_change_warning'] = 'Dessa inställningar kommer endast att träda i kraft för användare som har en karaktär.';
$lang['amp_char_change_per_game'] = 'GE Belöning per spel som spelas';
$lang['amp_char_change_per_score'] = 'GE Belöning om användaren slår personligt rekord';
$lang['amp_char_change_per_trophy'] = 'GE Belöning om användaren vinner en trofé';

$lang['amp_char_save_shop'] = 'Spara inställningar';

$lang['amp_char_settings_saved'] = 'Karaktär inställningar sparad.';
$lang['amp_char_settings_back'] = 'Klicka %sHär%s för att återgå till menyn.';
$lang['char'] = 'Karaktär';

?>