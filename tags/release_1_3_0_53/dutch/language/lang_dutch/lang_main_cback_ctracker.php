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
	'ctracker_settings_on' => 'Ingeschakeld',
	'ctracker_settings_off' => 'Uitgeschakeld',
	'ctracker_ma_on' => 'AAN',
	'ctracker_ma_off' => 'UIT',
	'ctracker_blockmode_0' => 'Uit',
	'ctracker_blockmode_1' => 'Ban gebruiker',
	'ctracker_blockmode_2' => 'Sluit gebruiker',
	'ctracker_complex_1' => '[0-9]',
	'ctracker_complex_2' => '[a-z]',
	'ctracker_complex_3' => '[A-Z]',
	'ctracker_complex_4' => '[0-9][a-z]',
	'ctracker_complex_5' => '[0-9][A-Z]',
	'ctracker_complex_6' => '[0-9][a-z][A-Z]',
	'ctracker_complex_7' => '[0-9][*]',
	'ctracker_complex_8' => '[0-9][a-z][*]',
	'ctracker_complex_9' => '[0-9][a-z][A-Z][*]',
	'ctracker_ipb_new_entry' => 'Nieuwe ingang',
	'ctracker_ipb_added' => 'Ingang is succesvol toegevoegd!',
	'ctracker_ipb_deleted' => 'Ingang is succesvol verwijderd!',
	'ctracker_ipb_add_now' => 'Voeg nieuwe ingang toe',
	'ctracker_mu_success' => 'De gebruiker gemarkeerd als "Lastige gebruiker".',
	'ctracker_mu_success_bbc' => '[cell class="text_orange"]De gebruiker gemarkeerd als "Lastige gebruiker".[/cell]',
	'ctracker_mu_success_html' => '<span class="text_orange">De gebruiker gemarkeerd als "Lastige gebruiker".</span>',
	'ctracker_mu_error_admin' => 'Beheerders en moderators kunnen niet worden gemarkeerd als "Lastige gebruiker"!',
	'ctracker_mu_deleted' => 'De geselecteerde gebruikers zijn succesvol verwijderd van de "Lastige gebruikerslijst".',
	'ctracker_mu_head' => 'Lastige gebruiker',
	'ctracker_error_updating_userdata' => 'CBACK CrackerTracker kan de databaseoperatie in de gebruikerstabel niet uitvoeren.',
	'ctracker_error_database_op' => 'CBACK CrackerTracker kan de databaseoperatie niet uitvoeren.',
	'ctracker_message_dialog_title' => 'CBACK CrackerTracker Professional',


/*
 * Language Strings used for the footer itself
 */
	'ctracker_fdisplay_imgdesc' => 'Forumveiligheid',
	'ctracker_fdisplay_n' => '<a href="http://www.cback.de" target="_blank">Beveiligd</a> met <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a>.',
	'ctracker_fdisplay_c' => 'Beveiligd door <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a><br /><b>%s</b> aanvallen geblokkeerd.',
	'ctracker_fdisplay_g' => '<b>%s</b> aanvallen geblokkeerd',


/*
 * Language Strings for the class_ct_database.php
 */
	'ctracker_error_loading_config' => 'De CrackerTrackerconfiguratie kan niet worden geladen vanuit de database. Heb je het installatiescript uitgevoerd en het bestand "includes/constants.php" bewerkt?',
	'ctracker_error_updating_config' => 'De CrackerTrackerconfiguratie kan niet worden bijgewerkt. Heb je het installatiescript uitgevoerd en het bestand "includes/constants.php" bewerkt?',
	'ctracker_error_loading_blocklist' => 'De CrackerTrackerbloklijst kan niet worden geladen vanuit de database. Heb je het installatiescript uitgevoerd en het bestand "includes/constants.php" bewerkt?',
	'ctracker_error_insert_blocklist' => 'De gegevens kunnen niet worden toegevoegd aan de CrackerTrackerbloklist. Heb je het installatiescript uitgevoerd en het bestand "includes/constants.php" bewerkt?',
	'ctracker_error_delete_blocklist' => 'De gegevens kunnen niet worden verwijderd uit de CrackerTrackerbloklist. Heb je het installatiescript uitgevoerd en het bestand "includes/constants.php" bewerkt?',
	'ctracker_error_login_history' => 'Er is een fout met de databaseoperatie in het CrackerTrackerlogingeschiedenis. Heb je het installatiescript uitgevoerd en het bestand "includes/constants.php" bewerkt?',
	'ctracker_error_del_login_history' => 'De CrackerTrackerinloggschiedenistabel kan niet worden geleegd.',


/*
 * Language Strings used in class_ct_userfunctions.php
 */
	'ctracker_info_search_time' => "Uit veiligheidsoverwegingen is het zoeken %s keer mogelijk binnen %s seconden. Als je het hebt overschreden, moet je moet <span id=\"waittime\">%s</span> seconden wachten voordat je weer een nieuwe zoekproces kan starten. <script type=\"text/javascript\"><!-- \n var wait = %s; var waitt = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout(\"newoutput(\" + i + \")\", i * 1000); } function newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById(\"waittime\").innerHTML = \"0\"; } else { document.getElementById(\"waittime\").innerHTML = (waitt/1000) - waitcounter; } } //--></script>",
	'ctracker_info_regist_time' => "Uit veiligheidsoverwegingen is het registreren alleen mogelijk elke %s seconden. Als dit is overschreden, moet je <span id=\"waittime\">%s</span> seconden wachten voordat je je mag registreren. <script type=\"text/javascript\"><!-- \n var wait = %s; var waitt = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout(\"newoutput(\" + i + \")\", i * 1000); } function newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById(\"waittime\").innerHTML = \"0\"; } else { document.getElementById(\"waittime\").innerHTML = (waitt/1000) - waitcounter; } } //--></script>",
	'ctracker_info_regip_double' => 'Er is al een registratie bekend via dit IP-adres. Uit veiligheidsoverwegingen is maar een registratie mogelijk van hetzelfde IP-adres.',
	'ctracker_info_profile_spammer' => 'Deze registratie is geidentificeerd als een spamaccount! Als je denkt dat het onterecht is, neem dan contact op met de beheerder van dit forum zodat het alsnog goedkeurd kan worden.',
	'ctracker_info_password_minlng' => 'De beheerder heeft bepaald dat een wachtwoord minimaal <b>%s</b> tekens moet bevatten. Je gekozen wachtwoord heeft <b>%s</b> tekens. Klik op "Terug" om een nieuw wachtwoord in te geven.',
	'ctracker_info_password_cmplx' => 'De beheerder heeft bepaald dat een wachtwoord <b>minimaal</b> moet bestaan uit de volgende dingen: %s',
	'ctracker_info_password_cmplx_1' => 'Cijfers',
	'ctracker_info_password_cmplx_2' => 'Kleine letters',
	'ctracker_info_password_cmplx_3' => 'Hoofdletters',
	'ctracker_info_password_cmplx_4' => 'Speciale tekens',
	'ctracker_info_pw_expired' => 'De beheerder heeft bepaald dat een wachtwoord geldig is voor <b>%s dagen</b>. Wij adviseren uit veiligheidsoverwegingen om je wachtwoord te veranderen. (<a href="' . PROFILE_MG . '?mode=editprofile&amp;' . POST_USERS_URL . '=%d">Profiel</a>)',

/*
 * Language Strings used in ct_visual_confirm.php
 */
	'ctracker_login_wrong' => 'De ingegeven bevestigingscode is niet goed!',
	'ctracker_code_dbconn' => 'Het is niet mogelijk om een bevestigingscode te laden vanuit de database! Als je een phpBB Plus installatie hebt moet je ook de interne phpBB-modules installeren voor de bevestigingscode. Lees de referenties van phpBB Plus in de "add_ons" map van de CrackerTracker Modpakket!',
	'ctracker_login_success' => 'Je gebruikersaccount is opnieuw geactiveerd.<br /><br />Klik <a href="%s">hier</a> om terug te gaan om opnieuw in te loggen.',
	'ctracker_code_count' => 'De aantal pogingen voor de bevestigingscode is overschreden voor deze sessie.',

/*
 * Language Strings used in ctracker_login.php
 */
	'ctracker_login_title' => 'CrackerTracker Accountactivatie',
	'ctracker_login_logged' => 'Ingelogde gebruikers kunnen deze site niet bereiken.',
	'ctracker_login_confim' => 'De opgegeven aantal foutieve inlogpogingen voor je account is bereikt. Daarom is je account geblokkeerd. Dit kan worden geactiveerd door gebruik te maken van de bevestigingscode.<br /><br />Typ de volgende code in en klik op "Activeer" om je gebruikersnaam opnieuw toegankelijk te maken. Als dit is gedaan kun je weer opnieuw inloggen.',
	'ctracker_login_button' => 'Activeer',

/*
 * Language Strings for IP Warning Engine
 */
	'ctracker_ipwarn_info' => 'IP Rangscannen voor je gebruikersnaam is <b>%s</b>',
	'ctracker_ipwarn_prof' => 'IP Rangscanner',
	'ctracker_ipwarn_pdes' => 'De IP Rangscanner controleert, als het geactiveerd is, de zoals genaamde IP Rang op veranderingen. Als iemand is ingelogd met jouw account van een andere locatie, dan krijg je een kort bericht (ook als jezelf ergens anders inlogt dan gebruikelijk). Controleer de footer als deze waarschuwingsfunctie is geactiveerd. Misschien heeft een aggressieve gebruiker het geactiveerd. De login is bovendien gebleven, je bent dan in de mogelijkheid om de nodige veranderingen te maken na je activatie.',
	'ctracker_ipwarn_chng' => '<b>&raquo; ADVIES &laquo;</b><br />De IP Rang van je account is veranderd. De actuele loginsessie vindt plaats vanaf <b>%s</b>, de vorige was van <b>%s</b>. Als je niet ingelogd bent van een andere locatie, dan is het misschien een aggressieve gebruiker die gebruik maakt van je account zonder bevoegdheid!.',
	'ctracker_ipwarn_welc' => '<b>&raquo; ADVIES &laquo;</b><br />De IP Rangscanner voor je account is nu niet geintialiseerd. Dit gebeurt na twee loginsessies. Als je wilt dat de scanner word geintialiseerd, dan moet twee loginsessies aanmaken (uitloggen en inloggen).',
	'ctracker_ipwarn_send' => 'instellingen opslaan',

/*
 * Language Strings for Login History
 */
	'ctracker_lhistory_h' => 'Logingeschiedenis',
	'ctracker_lhistory_i' => 'Hier kun je de opgenomen IP-adressen en de logintijd sinds je laatste <b>%s</b> loginsessies bekijken. Je kan ook zien of je account wordt gebruikt door iemand anders. Als er onbekende loginpoggingen of IP-adressen in de logingschiedenis voorkomen, is het mogelijk dat iemand je wachtwoord heeft achterhaald. In dit geval is het verstandig om je wachtwoord te veranderen van je account en ook je e-mail te controleren.',
	'ctracker_lhistory_h1' => 'Logindatum en logintijd',
	'ctracker_lhistory_h2' => 'Opgeslagen IP-adres',
	'ctracker_lhistory_nav' => 'CrackerTracker Logingeschiedenis',
	'ctracker_lhistory_err' => 'Je moet ingelogd zijn om gebruikt te kunnen maken van de functies van CrackerTracker.',
	'ctracker_lhistory_off' => 'Logingeschiedenis is gedeactiveerd door de beheerder.',

/*
 * Other Language Strings used in the Board itself
 */
	'ctracker_gmb_link' => 'De beheerder heeft een belangrijke bericht geschreven voor alle gebruikers. Deze opmerking is te zien hier:<br /><br /><a href="%s">%s</a><br />',
	'ctracker_gmb_mark' => 'Markeer bericht als gelezen',
	'ctracker_gmb_markip' => 'Verwijder tip',
	'ctracker_gmb_loginlink' => 'Logingescheidenis',
	'ctracker_gmb_1stadmin' => 'De instellingen van de eerste beheerder kunnen niet worden veranderd.',
	'ctracker_gmb_pu_1' => '<b>CBACK CrackerTracker - Misconfiguratie</b><br /><br />Poort 21 is gebruikelijk voor FTP Service. Als de forum wordt geconverteerd naar deze poort de forum is dan misschien niet meer normaal uitvoerbaar, omdat browsers gebruikmaken van deze poort voor FTP.',
	'ctracker_gmb_pu_2' => '<b>CBACK CrackerTracker - Misconfiguratie</b><br /><br />De sessielengte is te laag gezet! Misschien wordt je wel altijd uitgelogd van het forum voordat je het kunt corrigeren.',
	'ctracker_gmb_pu_3' => '<b>CBACK CrackerTracker - Misconfiguratie</b><br /><br />De scriptpad begint en eindigt nooit met een slash (/www/) of bevat niet alleen een slash (/)!',
	'ctracker_gmb_pu_4' => '<b>CBACK CrackerTracker - Misconfiguratie</b><br /><br />De servernaam eindigt nooit met een slash (/)!',
	'ctracker_binf_spammer' => 'De spamblokkeersysteem houd je in de gaten. Je hebt de maximum aantal berichten dat je binnen %s seconden hebt bereikt overschreden. Wanneer je weer probeert binnen <b>%s</b> seconden een ander bericht te plaatsen wordt je account <b>geblokkeerd!</b><br /><br />Sorry, maar het is allemaal noodzakelijk uit veiligheidsoverwegingen en om spammen tegen te gaan.',
	'ctracker_binf_sban' => 'De spamblokkeersysteem heeft jouw account geband omdat je wordt geidentificeerd als spammer.',
	'ctracker_sendmail_info' => 'Vanwege veiligheidsmaatregelen is het alleen toegestaan om elke %s minuten een e-mail te versturen.',
	'ctracker_pwreset_info' => 'Vanwege veiligheidsmaatregelen is het niet mogelijk om elke %s minuten een nieuw wachtwoord te versturen. Neem contact op met de beheerder als je een probleem hebt!',
	'ctracker_vc_guest_post' => 'Bevestigingscode voor gasten',
	'ctracker_vc_guest_expl' => 'Typ de volgende code in voordat je een bericht plaatst. Voor gasten is het noodzakelijk voor de veiligheid en het spammen tegen te gaan.',
	'ctracker_dbg_mode' => '<b>CrackerTracker loopt in DEBUG MODE. Dit is niet de permanente modus.<br />Zet het weer terug zodra het mogelijk is.<br /><br /><u>Dit bericht kan niet worden verwijderd!</u></b>',
	)
);

?>