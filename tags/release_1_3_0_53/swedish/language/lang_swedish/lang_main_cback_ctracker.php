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
	'ctracker_ma_on' => 'P�',
	'ctracker_ma_off' => 'AV',
	'ctracker_blockmode_0' => 'Av',
	'ctracker_blockmode_1' => 'Bannlys Anv�ndare',
	'ctracker_blockmode_2' => 'L�s Anv�ndare',
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
	'ctracker_ipb_add_now' => 'L�gg till post',
	'ctracker_mu_success' => 'Anv�ndaren har markerats som en "El�ndig Anv�ndare".',
	'ctracker_mu_success_bbc' => '[cell class="text_orange"]Anv�ndaren har markerats som en "El�ndig Anv�ndare".[/cell]',
	'ctracker_mu_success_html' => '<span class="text_orange">Anv�ndaren har markerats som en "El�ndig Anv�ndare".</span>',
	'ctracker_mu_error_admin' => 'Admins eller Moderator kan inte markeras som "El�ndig Anv�ndare"!',
	'ctracker_mu_deleted' => 'Den valda anv�ndarn har raderats fr�n "El�ndig Anv�ndare" Anv�ndarlistan successfullt.',
	'ctracker_mu_head' => 'El�ndig Anv�ndare',
	'ctracker_error_updating_userdata' => 'CrackerTracker kunde inte k�ra databas operationen i Anv�ndartabellen.',
	'ctracker_error_database_op' => 'CrackerTracker kunde inte k�ra databas operationen korrekt.',
	'ctracker_message_dialog_title' => 'CBACK CrackerTracker Professional',


/*
* Language Strings used for the footer itself
*/
	'ctracker_fdisplay_imgdesc' => 'Forum S�kerhet',
	'ctracker_fdisplay_n' => '<a href="http://www.cback.de" target="_blank">S�kerhet</a> with <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a>.',
	'ctracker_fdisplay_c' => 'Skyddas av <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a><br /><b>%s</b> Attacker blockerade.',
	'ctracker_fdisplay_g' => '<b>%s</b> Attacker blockerade',


/*
* Language Strings for the class_ct_database.php
*/
	'ctracker_error_loading_config' => 'CrackerTracker Konfigurationen kunde inte laddas fr�n databasen. Har du k�rt installationsskriptet och redigerat filen "includes/constants.php" korrekt?',
	'ctracker_error_updating_config' => 'CrackerTracker Konfigurationen kunde inte uppdateras . Har du k�rt installationsskriptet och redigerat filen "includes/constants.php" korrekt?',
	'ctracker_error_loading_blocklist' => 'CrackerTracker Blocklista kunde inte laddas fr�n databasen. Har du k�rt installationsskriptet och redigerat filen "includes/constants.php" korrekt?',
	'ctracker_error_insert_blocklist' => 'Uppgifterna kunde inte l�ggas till CrackerTracker Blocklistan. Har du k�rt installationsskriptet och redigerat filen "includes/constants.php" korrekt?',
	'ctracker_error_delete_blocklist' => 'Uppgifterna kunde inte tas bort fr�n CrackerTracker Blocklistan. Har du k�rt installationsskriptet och redigerat filen "includes/constants.php" korrekt?',
	'ctracker_error_login_history' => 'Det har skett ett misstag med databasens verksamhet inom CrackerTracker Inloggnings Historia. Har du k�rt installationsskriptet och redigerat filen "includes/constants.php" korrekt?',
	'ctracker_error_del_login_history' => 'CrackerTracker Inloggnings Historia Tabell kunde inte t�mmas.',


/*
* Language Strings used in class_ct_userfunctions.php
*/
	'ctracker_info_search_time' => "Av s�kerhetssk�l �r s�kning endast m�jlig %s g�nger inom %s sekunder. Om detta antal �verskrids, m�ste du v�nta <span id=\"waittime\">%s</span> sekunder, tills du kan genomf�ra n�sta s�kning. <script type=\"text/javascript\"><!-- \n var v�nta = %s; var v�nta = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout(\"newoutput(\" + i + \")\", i * 1000); } funktion newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById(\"waittime\").innerHTML = \"0\"; } annars { document.getElementById(\"waittime\").innerHTML = (waitt/1000) - waitcounter; } } //--></script>",
	'ctracker_info_regist_time' => "Av s�kerhetssk�l �r bara registrering m�jlig varje %s sekund. Om detta antal �verskrids, m�ste du v�nta <span id=\"waittime\">%s</span> sekunder, tills du kan genomf�ra en ny registrering. <script type=\"text/javascript\"><!-- \n var v�nta = %s; var v�nta = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout(\"newoutput(\" + i + \")\", i * 1000); } funktion newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById(\"waittime\").innerHTML = \"0\"; } annars { document.getElementById(\"waittime\").innerHTML = (waitt/1000) - waitcounter; } } //--></script>",
	'ctracker_info_regip_double' => 'Det har redan gjorts en registrering fr�n denna IP-adress. Av s�kerhetssk�l �r endast en registrering fr�n samma IP-adress m�jligt.',
	'ctracker_info_profile_spammer' => 'Denna registrering har identifierats som ett spam-konto! Om du tror att detta var fel, kontakta Administrat�ren f�r detta forum.',
	'ctracker_info_password_minlng' => 'Administrat�ren kr�ver att l�senordet m�ste inneh�lla minst <b>%s</b> tecken. Ditt valda l�senord har bara <b>%s</b> tecken. V�nligen g� tillbaka och ange ett nytt l�senord.',
	'ctracker_info_password_cmplx' => 'Administrat�ren kr�ver att l�senordet m�ste inneh�lla <b>minimum</b> f�ljande saker: %s',
	'ctracker_info_password_cmplx_1' => 'Figurer',
	'ctracker_info_password_cmplx_2' => 'L�gre fall',
	'ctracker_info_password_cmplx_3' => 'Stora bokst�ver',
	'ctracker_info_password_cmplx_4' => 'Specialtecken',
	'ctracker_info_pw_expired' => 'Administrat�ren har beslutat att ett l�senord �r giltigt enbart i <b>%s dagar</b>. Vi rekommenderar av s�kerhetssk�l att du �ndrar ditt l�senord nu. (<a href="' . PROFILE_MG . '?mode=editprofile&amp;' . POST_USERS_URL . '=%d">Profil</a>)',

/*
* Language Strings used in ct_visual_confirm.php
*/
	'ctracker_login_wrong' => 'Visuell Bekr�ftelse Koden du skrev var felaktig!',
	'ctracker_code_dbconn' => 'Kunde inte ladda Visuell Bekr�ftelse Koden fr�n databasen! Om du har phpBB-Plus m�ste du installera phpBB internationella moduler f�r Visuell Bekr�ftelse. V�nligen l�s h�nvisningar till phpBB-Plus i "add_ons" mappen i CrackerTracker MOD Paketet!',
	'ctracker_login_success' => 'Ditt konto har �teraktiverats.<br /><br />Klicka <a href="%s">H�R</a> f�r att �terg� till Inloggningen.',
	'ctracker_code_count' => 'Antalet poster i Visuell Bekr�ftelse har �verskridit gr�nsen f�r denna session.',

/*
* Language Strings used in ctracker_login.php
*/
	'ctracker_login_title' => 'CrackerTracker Konto Aktivering',
	'ctracker_login_logged' => 'Inloggade anv�ndare kan inte ansluta till webbplatsen.',
	'ctracker_login_confim' => 'Antalet felaktiga Inloggningar f�r ditt Konto har uppn�tts. D�rf�r �r ditt konto l�st och kommer att beh�vas �teraktiveras genom att du anv�nder Visuell Bekr�ftelse.<br /><br />V�nligen skriv in f�ljande kod och klicka p� "L�s upp" f�r att l�sa upp ditt konto. N�r detta �r gjort kan du logga in p� nytt.',
	'ctracker_login_button' => 'Aktivera',

/*
* Language Strings for IP Warning Engine
*/
	'ctracker_ipwarn_info' => 'IP Range Scanning f�r ditt Konto �r <b>%s</b>',
	'ctracker_ipwarn_prof' => 'IP Range Scanner',
	'ctracker_ipwarn_pdes' => 'IP Range Scanner kontrollerar den s� kallade IP-Range efter f�r�ndringar. Om n�gon har loggat in p� ditt konto fr�n en annan plats kommer du f� ett kort meddelande (�ven om du �r inloggad fr�n olika platser).<br /> Kontrollera sidfoten f�r att se om varnings funktionen fortfarande �r aktiverad eftersom en angripare kan ha avaktiverat detta. Din Inloggning f�rblir dock aktiv, vilket medf�r att du fortfarande har m�jlighet att g�ra �ndringar efter denna varning.',
	'ctracker_ipwarn_chng' => '<b>&raquo; R�DGIVNING &laquo;</b><br />IP Range f�r ditt konto har �ndrats. Den faktiska Inloggningen skedde fr�n <b>%s</b>, den tidigare fr�n <b>%s</b>. Om du inte loggade in fr�n en annan plats, d� kanske en angripare har anv�nt ditt konto utan tillst�nd!',
	'ctracker_ipwarn_welc' => '<b>&raquo; R�DGIVNING &laquo;</b><br />IP Range Scanner f�r ditt Konto har inte p�b�rjas �nnu. Detta sker efter tv� Inloggningar. Om du vill initiera Scanner nu, logga d� in och ut tv� g�nger.',
	'ctracker_ipwarn_send' => 'Godk�nn Inst�llningar',

/*
* Language Strings for Login History
*/
	'ctracker_lhistory_h' => 'Inloggnings Historia',
	'ctracker_lhistory_i' => 'H�r kan du se dina inspelade IP-adresser och inloggnings-tider f�r dina sista <b>%s</b> inloggningar och se om ditt konto har anv�nts av n�gon annan. Om det finns ok�nda inloggnings tider eller IP-adresser i Inloggnings Historian - �r det m�jligt att n�gon vet ditt l�senord. I detta fall b�r du �ndra l�senordet f�r kontot och �ven kontrollera ditt e-postkonto URL.',
	'ctracker_lhistory_h1' => 'Inloggnings Datum och Tid',
	'ctracker_lhistory_h2' => 'Sparad IP adress',
	'ctracker_lhistory_nav' => 'CrackerTracker Inloggnings Historia',
	'ctracker_lhistory_err' => 'Du m�ste vara inloggad f�r att anv�nda funktionerna i CrackerTracker.',
	'ctracker_lhistory_off' => 'Inloggnings Historia var avaktiverad av Admin.',

/*
* Other Language Strings used in the Board itself
*/
	'ctracker_gmb_link' => 'Administrat�ren har skrivit ett viktigt meddelande till alla anv�ndare. Denna notering kan ses h�r:<br /><br /><a href="%s">%s</a><br />',
	'ctracker_gmb_mark' => 'Markera Post L�st',
	'ctracker_gmb_markip' => 'Ta bort tips',
	'ctracker_gmb_loginlink' => 'Inloggnings S�kerhet',
	'ctracker_gmb_1stadmin' => 'Setup eller Inst�llningar f�r f�rsta Admin kan inte �ndras.',
	'ctracker_gmb_pu_1' => '<b>CrackerTracker - Felkonfigurerad</b><br /><br />Port 21 anv�nds f�r FTP Tj�nster. Om Forumet riktas till att anv�nda denna Port kommer Forumet inte l�ngre att vara k�rbart. Detta beror p� att Webbl�saren anv�nder denna port f�r FTP ocks�.',
	'ctracker_gmb_pu_2' => '<b>CrackerTracker - Felkonfigurerad</b><br /><br />Sessions l�ngden �r inst�lld under storleken! och du kommer alltid att vara utloggad fr�n forumet innan du r�ttar till inst�llningen.',
	'ctracker_gmb_pu_3' => '<b>CrackerTracker - Felkonfigurerad</b><br /><br />Script-s�kv�gen b�rjar och/eller avslutas utan ett snedstreck (/www/) eller inte \ "eller inte bara inneh�ller ett snedstreck (/)!',
	'ctracker_gmb_pu_4' => '<b>CrackerTracker - Felkonfigurerad</b><br /><br />Server-namnet avslutas inte med ett snedstreck (/) !',
	'ctracker_binf_spammer' => 'Anti-Spam Trygghetssystemet har fastst�llt att du har n�tt ditt h�gsta antal inl�gg inom %s sekunder. Om du f�rs�ker skriva ett annat inl�gg inom <b>%s</b> sekunder, kommer ditt konto att <b>blockeras!</b><br /><br />V�nligen v�nta! eftersom detta �r n�dv�ndigt f�r att blockera spammare.',
	'ctracker_binf_sban' => 'Spam Block Systemet har bannlyst ditt konto eftersom du har identifierats som en spammare.',
	'ctracker_sendmail_info' => 'P� grund av s�kerhetssk�l �r du endast till�ten att skicka e-post varje %s minut.',
	'ctracker_pwreset_info' => 'P� grund av s�kerhetssk�l �r det inte m�jligt att skicka ett nytt l�senord varje %s minut. V�nligen kontakta administrat�ren om du har problem!',
	'ctracker_vc_guest_post' => 'Visuell Bekr�ftelse f�r G�ster',
	'ctracker_vc_guest_expl' => 'Anti-Spam S�kerhet: V�nligen Fyll i f�ljande kod innan du skickar in ditt inl�gg.',
	'ctracker_dbg_mode' => '<b>CrackerTracker k�rs i DEBUG MODE. Detta b�r inte vara ett permanent tillst�nd.<br />V�nligen s�tt tillbaka till normalt l�ge s� snart som m�jligt.<br /><br /><u>Detta meddelande kan inte raderas!</u></b>',
	)
);

?>