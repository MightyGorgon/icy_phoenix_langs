<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_main_cback_ctracker.php 96 2009-04-27 16:48:19Z Mighty Gorgon $
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* Christian Knerr (cback) - (www.cback.de)
* Lopalong
*
*/

/**
* English Language File for the CBACK Cracker Tracker
*
* @author Christian Knerr (cback)
* @translator Marc Renninger (mc-dragon)
* @package ctracker
* @version 5.0.0
* @since 21.07.2006 - 17:26:28
* @copyright (c) 2006 www.cback.de
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
	'ctracker_settings_on' => 'Aktiverad',
	'ctracker_settings_off' => 'Avaktiverad',
	'ctracker_ma_on' => 'PÅ',
	'ctracker_ma_off' => 'AV',
	'ctracker_blockmode_0' => 'Av',
	'ctracker_blockmode_1' => 'Bannlys Användare',
	'ctracker_blockmode_2' => 'Lås Användare',
	'ctracker_complex_1' => '[0-9]',
	'ctracker_complex_2' => '[a-z]',
	'ctracker_complex_3' => '[A-Z]',
	'ctracker_complex_4' => '[0-9][a-z]',
	'ctracker_complex_5' => '[0-9][A-Z]',
	'ctracker_complex_6' => '[0-9][a-z][A-Z]',
	'ctracker_complex_7' => '[0-9][*]',
	'ctracker_complex_8' => '[0-9][a-z][*]',
	'ctracker_complex_9' => '[0-9][a-z][A-Z][*]',
	'ctracker_ipb_new_entry' => 'Ny post',
	'ctracker_ipb_added' => 'Post har lagts till successfullt!',
	'ctracker_ipb_deleted' => 'Post successfullt raderad!',
	'ctracker_ipb_add_now' => 'Lägg till post',
	'ctracker_mu_success' => 'Användaren har markerats som en "Eländig Användare".',
	'ctracker_mu_success_bbc' => '[cell class="text_orange"]Användaren har markerats som en "Eländig Användare".[/cell]',
	'ctracker_mu_success_html' => '<span class="text_orange">Användaren har markerats som en "Eländig Användare".</span>',
	'ctracker_mu_error_admin' => 'Admins eller Moderator kan inte markeras som "Eländig Användare"!',
	'ctracker_mu_deleted' => 'Den valda användarn har raderats från "Eländig Användare" Användarlistan successfullt.',
	'ctracker_mu_head' => 'Eländig Användare',
	'ctracker_error_updating_userdata' => 'CrackerTracker kunde inte köra databas operationen i Användartabellen.',
	'ctracker_error_database_op' => 'CrackerTracker kunde inte köra databas operationen korrekt.',
	'ctracker_message_dialog_title' => 'CBACK CrackerTracker Professional',


/*
* Language Strings used for the footer itself
*/
	'ctracker_fdisplay_imgdesc' => 'Forum Säkerhet',
	'ctracker_fdisplay_n' => '<a href="http://www.cback.de" target="_blank">Säkerhet</a> with <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a>.',
	'ctracker_fdisplay_c' => 'Skyddas av <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a><br /><b>%s</b> Attacker blockerade.',
	'ctracker_fdisplay_g' => '<b>%s</b> Attacker blockerade',


/*
* Language Strings for the class_ct_database.php
*/
	'ctracker_error_loading_config' => 'CrackerTracker Konfigurationen kunde inte laddas från databasen. Har du kört installationsskriptet och redigerat filen "includes/constants.php" korrekt?',
	'ctracker_error_updating_config' => 'CrackerTracker Konfigurationen kunde inte uppdateras . Har du kört installationsskriptet och redigerat filen "includes/constants.php" korrekt?',
	'ctracker_error_loading_blocklist' => 'CrackerTracker Blocklista kunde inte laddas från databasen. Har du kört installationsskriptet och redigerat filen "includes/constants.php" korrekt?',
	'ctracker_error_insert_blocklist' => 'Uppgifterna kunde inte läggas till CrackerTracker Blocklistan. Har du kört installationsskriptet och redigerat filen "includes/constants.php" korrekt?',
	'ctracker_error_delete_blocklist' => 'Uppgifterna kunde inte tas bort från CrackerTracker Blocklistan. Har du kört installationsskriptet och redigerat filen "includes/constants.php" korrekt?',
	'ctracker_error_login_history' => 'Det har skett ett misstag med databasens verksamhet inom CrackerTracker Inloggnings Historia. Har du kört installationsskriptet och redigerat filen "includes/constants.php" korrekt?',
	'ctracker_error_del_login_history' => 'CrackerTracker Inloggnings Historia Tabell kunde inte tömmas.',


/*
* Language Strings used in class_ct_userfunctions.php
*/
	'ctracker_info_search_time' => "Av säkerhetsskäl är sökning endast möjlig %s gånger inom %s sekunder. Om detta antal överskrids, måste du vänta <span id=\"waittime\">%s</span> sekunder, tills du kan genomföra nästa sökning. <script type=\"text/javascript\"><!-- \n var vänta = %s; var vänta = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout(\"newoutput(\" + i + \")\", i * 1000); } funktion newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById(\"waittime\").innerHTML = \"0\"; } annars { document.getElementById(\"waittime\").innerHTML = (waitt/1000) - waitcounter; } } //--></script>",
	'ctracker_info_regist_time' => "Av säkerhetsskäl är bara registrering möjlig varje %s sekund. Om detta antal överskrids, måste du vänta <span id=\"waittime\">%s</span> sekunder, tills du kan genomföra en ny registrering. <script type=\"text/javascript\"><!-- \n var vänta = %s; var vänta = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout(\"newoutput(\" + i + \")\", i * 1000); } funktion newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById(\"waittime\").innerHTML = \"0\"; } annars { document.getElementById(\"waittime\").innerHTML = (waitt/1000) - waitcounter; } } //--></script>",
	'ctracker_info_regip_double' => 'Det har redan gjorts en registrering från denna IP-adress. Av säkerhetsskäl är endast en registrering från samma IP-adress möjligt.',
	'ctracker_info_profile_spammer' => 'Denna registrering har identifierats som ett spam-konto! Om du tror att detta var fel, kontakta Administratören för detta forum.',
	'ctracker_info_password_minlng' => 'Administratören kräver att lösenordet måste innehålla minst <b>%s</b> tecken. Ditt valda lösenord har bara <b>%s</b> tecken. Vänligen gå tillbaka och ange ett nytt lösenord.',
	'ctracker_info_password_cmplx' => 'Administratören kräver att lösenordet måste innehålla <b>minimum</b> följande saker: %s',
	'ctracker_info_password_cmplx_1' => 'Figurer',
	'ctracker_info_password_cmplx_2' => 'Lägre fall',
	'ctracker_info_password_cmplx_3' => 'Stora bokstäver',
	'ctracker_info_password_cmplx_4' => 'Specialtecken',
	'ctracker_info_pw_expired' => 'Administratören har beslutat att ett lösenord är giltigt enbart i <b>%s dagar</b>. Vi rekommenderar av säkerhetsskäl att du ändrar ditt lösenord nu. (<a href="' . PROFILE_MG . '?mode=editprofile&amp;' . POST_USERS_URL . '=%d">Profil</a>)',

/*
* Language Strings used in ct_visual_confirm.php
*/
	'ctracker_login_wrong' => 'Visuell Bekräftelse Koden du skrev var felaktig!',
	'ctracker_code_dbconn' => 'Kunde inte ladda Visuell Bekräftelse Koden från databasen! Om du har phpBB-Plus måste du installera phpBB internationella moduler för Visuell Bekräftelse. Vänligen läs hänvisningar till phpBB-Plus i "add_ons" mappen i CrackerTracker MOD Paketet!',
	'ctracker_login_success' => 'Ditt konto har återaktiverats.<br /><br />Klicka <a href="%s">HÄR</a> för att återgå till Inloggningen.',
	'ctracker_code_count' => 'Antalet poster i Visuell Bekräftelse har överskridit gränsen för denna session.',

/*
* Language Strings used in ctracker_login.php
*/
	'ctracker_login_title' => 'CrackerTracker Konto Aktivering',
	'ctracker_login_logged' => 'Inloggade användare kan inte ansluta till webbplatsen.',
	'ctracker_login_confim' => 'Antalet felaktiga Inloggningar för ditt Konto har uppnåtts. Därför är ditt konto låst och kommer att behövas återaktiveras genom att du använder Visuell Bekräftelse.<br /><br />Vänligen skriv in följande kod och klicka på "Lås upp" för att låsa upp ditt konto. När detta är gjort kan du logga in på nytt.',
	'ctracker_login_button' => 'Aktivera',

/*
* Language Strings for IP Warning Engine
*/
	'ctracker_ipwarn_info' => 'IP Range Scanning för ditt Konto är <b>%s</b>',
	'ctracker_ipwarn_prof' => 'IP Range Scanner',
	'ctracker_ipwarn_pdes' => 'IP Range Scanner kontrollerar den så kallade IP-Range efter förändringar. Om någon har loggat in på ditt konto från en annan plats kommer du få ett kort meddelande (även om du är inloggad från olika platser).<br /> Kontrollera sidfoten för att se om varnings funktionen fortfarande är aktiverad eftersom en angripare kan ha avaktiverat detta. Din Inloggning förblir dock aktiv, vilket medför att du fortfarande har möjlighet att göra ändringar efter denna varning.',
	'ctracker_ipwarn_chng' => '<b>&raquo; RÅDGIVNING &laquo;</b><br />IP Range för ditt konto har ändrats. Den faktiska Inloggningen skedde från <b>%s</b>, den tidigare från <b>%s</b>. Om du inte loggade in från en annan plats, då kanske en angripare har använt ditt konto utan tillstånd!',
	'ctracker_ipwarn_welc' => '<b>&raquo; RÅDGIVNING &laquo;</b><br />IP Range Scanner för ditt Konto har inte påbörjas ännu. Detta sker efter två Inloggningar. Om du vill initiera Scanner nu, logga då in och ut två gånger.',
	'ctracker_ipwarn_send' => 'Godkänn Inställningar',

/*
* Language Strings for Login History
*/
	'ctracker_lhistory_h' => 'Inloggnings Historia',
	'ctracker_lhistory_i' => 'Här kan du se dina inspelade IP-adresser och inloggnings-tider för dina sista <b>%s</b> inloggningar och se om ditt konto har använts av någon annan. Om det finns okända inloggnings tider eller IP-adresser i Inloggnings Historian - är det möjligt att någon vet ditt lösenord. I detta fall bör du ändra lösenordet för kontot och även kontrollera ditt e-postkonto URL.',
	'ctracker_lhistory_h1' => 'Inloggnings Datum och Tid',
	'ctracker_lhistory_h2' => 'Sparad IP adress',
	'ctracker_lhistory_nav' => 'CrackerTracker Inloggnings Historia',
	'ctracker_lhistory_err' => 'Du måste vara inloggad för att använda funktionerna i CrackerTracker.',
	'ctracker_lhistory_off' => 'Inloggnings Historia var avaktiverad av Admin.',

/*
* Other Language Strings used in the Board itself
*/
	'ctracker_gmb_link' => 'Administratören har skrivit ett viktigt meddelande till alla användare. Denna notering kan ses här:<br /><br /><a href="%s">%s</a><br />',
	'ctracker_gmb_mark' => 'Markera Post Läst',
	'ctracker_gmb_markip' => 'Ta bort tips',
	'ctracker_gmb_loginlink' => 'Inloggnings Säkerhet',
	'ctracker_gmb_1stadmin' => 'Setup eller Inställningar för första Admin kan inte ändras.',
	'ctracker_gmb_pu_1' => '<b>CrackerTracker - Felkonfigurerad</b><br /><br />Port 21 används för FTP Tjänster. Om Forumet riktas till att använda denna Port kommer Forumet inte längre att vara körbart. Detta beror på att Webbläsaren använder denna port för FTP också.',
	'ctracker_gmb_pu_2' => '<b>CrackerTracker - Felkonfigurerad</b><br /><br />Sessions längden är inställd under storleken! och du kommer alltid att vara utloggad från forumet innan du rättar till inställningen.',
	'ctracker_gmb_pu_3' => '<b>CrackerTracker - Felkonfigurerad</b><br /><br />Script-sökvägen börjar och/eller avslutas utan ett snedstreck (/www/) eller inte \ "eller inte bara innehåller ett snedstreck (/)!',
	'ctracker_gmb_pu_4' => '<b>CrackerTracker - Felkonfigurerad</b><br /><br />Server-namnet avslutas inte med ett snedstreck (/) !',
	'ctracker_binf_spammer' => 'Anti-Spam Trygghetssystemet har fastställt att du har nått ditt högsta antal inlägg inom %s sekunder. Om du försöker skriva ett annat inlägg inom <b>%s</b> sekunder, kommer ditt konto att <b>blockeras!</b><br /><br />Vänligen vänta! eftersom detta är nödvändigt för att blockera spammare.',
	'ctracker_binf_sban' => 'Spam Block Systemet har bannlyst ditt konto eftersom du har identifierats som en spammare.',
	'ctracker_sendmail_info' => 'På grund av säkerhetsskäl är du endast tillåten att skicka e-post varje %s minut.',
	'ctracker_pwreset_info' => 'På grund av säkerhetsskäl är det inte möjligt att skicka ett nytt lösenord varje %s minut. Vänligen kontakta administratören om du har problem!',
	'ctracker_vc_guest_post' => 'Visuell Bekräftelse för Gäster',
	'ctracker_vc_guest_expl' => 'Anti-Spam Säkerhet: Vänligen Fyll i följande kod innan du skickar in ditt inlägg.',
	'ctracker_dbg_mode' => '<b>CrackerTracker körs i DEBUG MODE. Detta bör inte vara ett permanent tillstånd.<br />Vänligen sätt tillbaka till normalt läge så snart som möjligt.<br /><br /><u>Detta meddelande kan inte raderas!</u></b>',
	)
);

?>