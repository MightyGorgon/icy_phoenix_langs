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
  'ctracker_settings_on' => 'Enged�lyez',
  'ctracker_settings_off' => 'Letilt',
  'ctracker_ma_on' => 'ON',
  'ctracker_ma_off' => 'OFF',
  'ctracker_blockmode_0' => 'Kikapcsol',
  'ctracker_blockmode_1' => 'Banol�s',
  'ctracker_blockmode_2' => 'Z�rol�s',
  'ctracker_complex_1' => '[0-9]',
  'ctracker_complex_2' => '[a-z]',
  'ctracker_complex_3' => '[A-Z]',
  'ctracker_complex_4' => '[0-9][a-z]',
  'ctracker_complex_5' => '[0-9][A-Z]',
  'ctracker_complex_6' => '[0-9][a-z][A-Z]',
  'ctracker_complex_7' => '[0-9][*]',
  'ctracker_complex_8' => '[0-9][a-z][*]',
  'ctracker_complex_9' => '[0-9][a-z][A-Z][*]',
  'ctracker_ipb_new_entry' => 'New Entry',
  'ctracker_ipb_added' => 'Entry successfully added!',
  'ctracker_ipb_deleted' => 'Entry successfully deleted!',
  'ctracker_ipb_add_now' => 'Add Entry',
  'ctracker_mu_success' => 'The user has been marked as a "Miserable User".',
  'ctracker_mu_success_bbc' => '[cell class="text_orange"]The user has been marked as a "Miserable User".[/cell]',
  'ctracker_mu_success_html' => '<span class="text_orange">The user has been marked as a "Miserable User".</span>',
  'ctracker_mu_error_admin' => 'Admin\'s or Mod\'s cannot be marked as "Miserable User"!',
  'ctracker_mu_deleted' => 'The chosen users have been deleted from the "Miserable User" Userlist successfully.',
  'ctracker_mu_head' => 'Miserable User',
  'ctracker_error_updating_userdata' => 'CrackerTracker couldn\'t run the database operation in the Usertable.',
  'ctracker_error_database_op' => 'CrackerTracker couldn\'t run the database operation correctly.',
  'ctracker_message_dialog_title' => 'CBACK CrackerTracker Professional',
  'ctracker_fdisplay_imgdesc' => 'Biztons�gos oldal',
  'ctracker_fdisplay_n' => '<a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a> <a href="http://www.cback.de" target="_blank">Biztons�g</a>.',
  'ctracker_fdisplay_c' => 'A <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a><br /><b>%s</b> t�mad�st kiv�dett.',
  'ctracker_fdisplay_g' => '<b>%s</b> t�mad�s kiv�dve',
  'ctracker_error_loading_config' => 'The CrackerTracker Configuration couldn\'t be loaded from the database. Have you run the installation script and edited the file "includes/constants.php" correctly?',
  'ctracker_error_updating_config' => 'The CrackerTracker Configuration couldn\'t be updated. Have you run the installation script and edited the file "includes/constants.php" correctly?',
  'ctracker_error_loading_blocklist' => 'The CrackerTracker Blocklist couldn\'t be loaded from the Database. Have you run the installation script and edited the file "includes/constants.php" correctly?',
  'ctracker_error_insert_blocklist' => 'The data couldn\'t be added to CrackerTracker Blocklist. Have you run the installation script and edited the file "includes/constants.php" correctly?',
  'ctracker_error_delete_blocklist' => 'The data couldn\'t be removed from the CrackerTracker Blocklist. Have you run the installation script and edited the file "includes/constants.php" correctly?',
  'ctracker_error_login_history' => 'There has been an error with the database operations inside CrackerTracker Login History. Have you run the installation script and edited the file "includes/constants.php" correctly?',
  'ctracker_error_del_login_history' => 'The CrackerTracker Login History Table couldn\'t be emptied.',
  'ctracker_info_search_time' => 'For safety reasons the search is only possible %s times within %s seconds. If this number was exceeded, you must now wait <span id="waittime">%s</span> seconds, until you can implement the next search. <script type="text/javascript"><!-- 
 var wait = %s; var waitt = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout("newoutput(" + i + ")", i * 1000); } function newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById("waittime").innerHTML = "0"; } else { document.getElementById("waittime").innerHTML = (waitt/1000) - waitcounter; } } //--></script>',
  'ctracker_info_regist_time' => 'For safety reasons, registration is only possible every %s seconds. If this number was exceeded, you must now wait <span id="waittime">%s</span> seconds, before you can submit a new registration. <script type="text/javascript"><!-- 
 var wait = %s; var waitt = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout("newoutput(" + i + ")", i * 1000); } function newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById("waittime").innerHTML = "0"; } else { document.getElementById("waittime").innerHTML = (waitt/1000) - waitcounter; } } //--></script>',
  'ctracker_info_regip_double' => 'There has already been a registration from this IP-Address. From security reasons only one registration from the same IP address is possible.',
  'ctracker_info_profile_spammer' => 'This registration was identified as a spam account! If you think that this was in error, please contact the Administrator of this forum.',
  'ctracker_info_password_minlng' => 'The Administrator requires that the password must contain at minimum <b>%s</b> characters. Your chosen password has only <b>%s</b> characters. Please go back and enter a new password.',
  'ctracker_info_password_cmplx' => 'Az adminisztr�tor �ltal meghat�rozott <b>minim�lis</b> jelsz� k�vetelm�nye: %s',
  'ctracker_info_password_cmplx_1' => 'Sz�mok',
  'ctracker_info_password_cmplx_2' => 'Kisbet�k',
  'ctracker_info_password_cmplx_3' => 'Nagybet�k',
  'ctracker_info_password_cmplx_4' => 'Speci�lis karakterek',
  'ctracker_info_pw_expired' => 'Az adminisztr�tor elrendez�se szerint egy jelsz� �lettartama <b>%s na</b>. Biztons�gi okokb�l aj�nlott, hogy azonnal v�ltoztasd meg a jelszavad. (<a href="PROFILE_MG?mode=editprofile&amp;POST_USERS_URL=%d">Profile</a>)',
  'ctracker_login_wrong' => 'A visszakapott k�pi meger�s�t� k�d helytelen volt!',
  'ctracker_code_dbconn' => 'Couldn\'t load the Visual Confirmation Code from the database! If you have phpBB-Plus you must install the phpBB international modules for the Visual Confirmation. Please read the references to phpBB-Plus in the "add_ons" folder of the CrackerTracker MOD Package!',
  'ctracker_login_success' => 'A hozz�f�r�sed ism�t akt�v.<br /><br />Kattints <a href="%s">IDE</a> az ism�telt bejelentkez�shez.',
  'ctracker_code_count' => 'El�rted a K�pi meger�s�t�s korl�tj�t ebben a munkafolyamatban.',
  'ctracker_login_title' => 'CrackerTracker hozz�f�r�s aktiv�l�sa',
  'ctracker_login_logged' => 'Bejelentkezett felhaszn�l�k nem f�rhetnek hozz� ehez az oldalhoz.',
  'ctracker_login_confim' => 'A hozz�f�r�seddel el�rted a megengedett hib�s bejelentkez�sek hat�r�t. Ez�rt a hozz�f�r�sedet letiltottuk �s aktiv�lnod kell k�pi meger�s�t�ssel.<br /><br />K�rlek add meg azt, amit a k�pen olvasol, �s kattints az "Aktiv�l�s" gombra. Ha helyes karaktereket adsz meg, akkor ism�t pr�b�lkozhatsz a bejelentkez�ssel.',
  'ctracker_login_button' => 'Aktiv�l�s',
  'ctracker_ipwarn_info' => 'IP Range Scanning for your Account is <b>%s</b>',
  'ctracker_ipwarn_prof' => 'IP Range Scanner',
  'ctracker_ipwarn_pdes' => 'If activated, the IP Range Scanner checks the so-called IP Range for changes. If someone has logged into your account from another location you will get a short message (also if you are logged on from different locations).<br /> Please check the footer to see if the warning feature is still activated, as an aggressor could have deactivated this. Your Login remains active however, thus you still have the ability to make changes after the activation.',
  'ctracker_ipwarn_chng' => '<b>&raquo; ADVICE &laquo;</b><br />The IP Range for your account has changed. The actual Login took place from <b>%s</b>, the previous from <b>%s</b>. If you didn\'t log on from another location, then maybe an aggressor has used your account without authorisation!',
  'ctracker_ipwarn_welc' => '<b>&raquo; ADVICE &laquo;</b><br />The IP Range Scanner for your Account has not been initialised yet. This happens after two Logins. If you would like to initialise the Scanner now, then log in and out twice.',
  'ctracker_ipwarn_send' => 'Be�ll�t�sok elfogad�sa',
  'ctracker_lhistory_h' => 'Bejelentkez�s t�rt�nete',
  'ctracker_lhistory_i' => 'Itt az utols� <b>%s</b> bejelentkez�sed IP c�m�t l�thatod, �s ha feljegyezted te is a bejelentkez�sedkor aktu�lis IP c�medet, akkor tudod ellen�rizni, hogy rajtad k�v�l ki m�s haszn�lja a hozz�f�r�sedet. Ha ismeretlen IP c�met vagy id�t tal�lsz ebben a list�ban, akkor nagy az es�lye, hogy valaki megtudta a jelszavad, �s azt a tudtodon k�v�l haszn�lja. Ilyenkor egyszer�en v�ltoztasd meg a jelszavad, �s k�ld�nk neked egy aktiv�l� email-t.',
  'ctracker_lhistory_h1' => 'Bejelentkez�s d�tuma �s ideje',
  'ctracker_lhistory_h2' => 'Elmentett IP c�mek',
  'ctracker_lhistory_nav' => 'CrackerTracker bejelentkez�s t�rt�nete',
  'ctracker_lhistory_err' => 'Musz�j bejelentkezned, hogy l�sd a CrackerTracker adatait.',
  'ctracker_lhistory_off' => 'A bejelentkez�s napl�z�s�t le�ll�totta az adminisztr�tor',
  'ctracker_gmb_link' => 'The Admin has written an important note to all users. This note can be seen here:<br /><br /><a href="%s">%s</a><br />',
  'ctracker_gmb_mark' => 'Mark Post Read',
  'ctracker_gmb_markip' => 'Remove tip',
  'ctracker_gmb_loginlink' => 'Biztons�gos Bejelentkez�s',
  'ctracker_gmb_1stadmin' => 'The Setup or Settings of the first Admin cannot be changed.',
  'ctracker_gmb_pu_1' => '<b>CrackerTracker - Misconfiguration</b><br /><br />Port 21 is used for FTP Services. If the Forum is directed to use this Port, the Forum will no longer be executable. This is because Browsers use this Port for FTP as well.',
  'ctracker_gmb_pu_2' => '<b>CrackerTracker - Misconfiguration</b><br /><br />The Session length is set undersize! and you will always be logged out of the Forum before you can correct the setting.',
  'ctracker_gmb_pu_3' => '<b>CrackerTracker - Misconfiguration</b><br /><br />The Script-path begins and/or ends either without a Slash (/www/) or doesn\'t only contain the Slash (/)!',
  'ctracker_gmb_pu_4' => '<b>CrackerTracker - Misconfiguration</b><br /><br />The Server-name doesn\'t end with a Slash (/) !',
  'ctracker_binf_spammer' => 'The Anti-Spam Security System has determined that you have reached your maximum number of posts within %s seconds. If you try to write another post within <b>%s</b> seconds, your account will be <b>blocked!</b><br /><br />Please wait! as this is necessary for security reasons.',
  'ctracker_binf_sban' => 'The Spam Block System has banned your account because you have been identified as a spammer.',
  'ctracker_sendmail_info' => 'Due to security reasons you are only allowed to send an e-mail every %s minutes.',
  'ctracker_pwreset_info' => 'Due to security reasons it is not possible to send a new password every %s minutes. Please contact the administrator if you are having difficulties!',
  'ctracker_vc_guest_post' => 'Visual Confirmation for Guests',
  'ctracker_vc_guest_expl' => 'Anti-Spam Security: Please enter the following code before submitting your post.',
  'ctracker_dbg_mode' => '<b>CrackerTracker runs on DEBUG MODE. This should not be a permanent condition.<br />Please set back to normal mode as soon as possible.<br /><br /><u>This message cannot be deleted!</u></b>',
))
?>