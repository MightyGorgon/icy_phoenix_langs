<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/* translation
                           
   ���������� �� �������: ��������� �������(zver) zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
It is translated into Russian: Mel'nikov Nikolay(zver)   zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
                    
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
	'ctracker_settings_on' => '�������� ',
	'ctracker_settings_off' => '��������� ',
	'ctracker_ma_on' => 'ON',
	'ctracker_ma_off' => 'OFF',
	'ctracker_blockmode_0' => 'Off',
	'ctracker_blockmode_1' => 'Ban User',
	'ctracker_blockmode_2' => 'Lock User',
	'ctracker_complex_1' => '[0-9]',
	'ctracker_complex_2' => '[a-z]',
	'ctracker_complex_3' => '[A-Z]',
	'ctracker_complex_4' => '[0-9][a-z]',
	'ctracker_complex_5' => '[0-9][A-Z]',
	'ctracker_complex_6' => '[0-9][a-z][A-Z]',
	'ctracker_complex_7' => '[0-9][*]',
	'ctracker_complex_8' => '[0-9][a-z][*]',
	'ctracker_complex_9' => '[0-9][a-z][A-Z][*]',
	'ctracker_ipb_new_entry' => '����� ������ ',
	'ctracker_ipb_added' => '���������� ������� �������� !',
	'ctracker_ipb_deleted' => '���������� ������� �������! ',
	'ctracker_ipb_add_now' => '�������� ������ ',
	'ctracker_mu_success' => '������������ ��� ������� ��� "���������� ������������ ".',
	'ctracker_mu_success_bbc' => '[cell class="text_orange"]������������ ��� ������� ���  "Miserable User".[/cell]',
	'ctracker_mu_success_html' => '<span class="text_orange">������������ ��� ������� ���  "Miserable User".</span>',
	'ctracker_mu_error_admin' => '�������������� � ���������� �� ����� ���� �������� ���  "Miserable User"!',
	'ctracker_mu_deleted' => '��������� ������������ (��) ���� ������� ��  "Miserable User" Userlist successfully.',
	'ctracker_mu_head' => 'Miserable User',
	'ctracker_error_updating_userdata' => ' CrackerTracker �� ��� ��������� ���� ������ �������� � Usertable .',
	'ctracker_error_database_op' => 'CrackerTracker couldn\'t run the database operation correctly.',
	'ctracker_message_dialog_title' => 'CBACK CrackerTracker ���������������� ',


/*
* Language Strings used for the footer itself
*/
	'ctracker_fdisplay_imgdesc' => '����� ������������ ',
	'ctracker_fdisplay_n' => '<a href="http://www.cback.de" target="_blank">Security</a> with <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a>.',
	'ctracker_fdisplay_c' => 'Protected by <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a><br /><b>%s</b> Attacks blocked.',
	'ctracker_fdisplay_g' => '<b>%s</b> Attacks blocked',


/*
* Language Strings for the class_ct_database.php
*/
	'ctracker_error_loading_config' => '�� ��� CrackerTracker ������������ \'t be loaded from the database. Have you run the installation script and edited the file "includes/constants.php" correctly?',
	'ctracker_error_updating_config' => '�� ��� CrackerTracker ������������ \'t be updated. Have you run the installation script and edited the file "includes/constants.php" correctly?',
	'ctracker_error_loading_blocklist' => 'The CrackerTracker Blocklist couldn\'t be loaded from the Database. Have you run the installation script and edited the file "includes/constants.php" correctly?',
	'ctracker_error_insert_blocklist' => 'The data couldn\'t be added to CrackerTracker Blocklist. Have you run the installation script and edited the file "includes/constants.php" correctly?',
	'ctracker_error_delete_blocklist' => 'The data couldn\'t be removed from the CrackerTracker Blocklist. Have you run the installation script and edited the file "includes/constants.php" correctly?',
	'ctracker_error_login_history' => 'There has been an error with the database operation inside CrackerTracker Login History. Have you run the installation script and edited the file "includes/constants.php" correctly?',
	'ctracker_error_del_login_history' => 'The CrackerTracker Login History Table couldn\'t be emptied.',


/*
* Language Strings used in class_ct_userfunctions.php
*/
	'ctracker_info_search_time' => "For safety reasons the search is only possible %s times within %s seconds. If this number was exceeded, you must now wait <span id=\"waittime\">%s</span> seconds, until you can implement the next search. <script type=\"text/javascript\"><!-- \n var wait = %s; var waitt = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout(\"newoutput(\" + i + \")\", i * 1000); } function newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById(\"waittime\").innerHTML = \"0\"; } else { document.getElementById(\"waittime\").innerHTML = (waitt/1000) - waitcounter; } } //--></script>",
	'ctracker_info_regist_time' => "For safety reasons, registration is only possible every %s seconds. If this number was exceeded, you must now wait <span id=\"waittime\">%s</span> seconds, before you can submit a new registration. <script type=\"text/javascript\"><!-- \n var wait = %s; var waitt = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout(\"newoutput(\" + i + \")\", i * 1000); } function newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById(\"waittime\").innerHTML = \"0\"; } else { document.getElementById(\"waittime\").innerHTML = (waitt/1000) - waitcounter; } } //--></script>",
	'ctracker_info_regip_double' => 'There has already been a registration from this IP-Address. From security reasons only one registration from the same IP address is possible.',
	'ctracker_info_profile_spammer' => 'This registration was identified as a spam account! If you think that this was in error, please contact the Administrator of this forum.',
	'ctracker_info_password_minlng' => 'The Administrator requires that the password must contain at minimum <b>%s</b> characters. Your chosen password has only <b>%s</b> characters. Please go back and enter a new password.',
	'ctracker_info_password_cmplx' => 'The Administrator requires that the password must contain at <b>minimum</b> the following things: %s',
	'ctracker_info_password_cmplx_1' => 'Figures',
	'ctracker_info_password_cmplx_2' => 'Lower case',
	'ctracker_info_password_cmplx_3' => 'Capitals',
	'ctracker_info_password_cmplx_4' => 'Special Characters',
	'ctracker_info_pw_expired' => 'The Administrator has decided that a password is only valid for <b>%s days</b>. We recommend for security reasons that you change your password now. (<a href="' . PROFILE_MG . '?mode=editprofile&amp;' . POST_USERS_URL . '=%d">Profile</a>)',

/*
* Language Strings used in ct_visual_confirm.php
*/
	'ctracker_login_wrong' => 'Visual ��� ������������� �� ����� ������������ !',
	'ctracker_code_dbconn' => 'Couldn\'t load the Visual Confirmation Code from the database! If you have phpBB-Plus you must install the phpBB international modules for the Visual Confirmation. Please read the references to phpBB-Plus in the "add_ons" folder of the CrackerTracker MOD Package!',
	'ctracker_login_success' => 'Your Account has been reactivated.<br /><br />Click <a href="%s">HERE</a> to go back to Login.',
	'ctracker_code_count' => 'The number of entries of Visual Confirmation has exceeded the limit for this session.',

/*
* Language Strings used in ctracker_login.php
*/
	'ctracker_login_title' => 'CrackerTracker Account Activation',
	'ctracker_login_logged' => 'Logged In Users cannot access the site.',
	'ctracker_login_confim' => '����� ��������� ����������� � ������� ��� ������� ������ ���� ���������� . Therefore your Account has been locked and will have to be reactivated using Visual Confirmation.<br /><br />Please type in the following code and click on "Unlock" to unlock your account. When this is done you can log in again.',
	'ctracker_login_button' => '������������ ',

/*
* Language Strings for IP Warning Engine
*/
	'ctracker_ipwarn_info' => 'IP �������� ������������ �� ��� ����  <b>%s</b>',
	'ctracker_ipwarn_prof' => 'IP Range Scanner',
	'ctracker_ipwarn_pdes' => 'The IP Range Scanner checks the so-called IP Range for changes. If someone has logged into your account from another location you will get a short message (also if you are or have previously logged in from a different location).<br /> Please check the footer to see if the warning feature is still activated, as an aggressor could have deactivated this. Your Login however remains active, so you still have the ability to make changes after this warning.',
	'ctracker_ipwarn_chng' => '<b>&raquo; ADVICE &laquo;</b><br />The IP Range for your account has changed. The actual Login took place from <b>%s</b>, the previous from <b>%s</b>. If you didn\'t log on previously from another location, then maybe an aggressor has used your account without authorization!',
	'ctracker_ipwarn_welc' => '<b>&raquo; ADVICE &laquo;</b><br />The IP Range Scanner for your Account has not been initialised yet. This happens after two Logins. If you would like to initialise the Scanner now, please log in and out twice.',
	'ctracker_ipwarn_send' => 'accept settings',

/*
* Language Strings for Login History
*/
	'ctracker_lhistory_h' => '����� ������� ',
	'ctracker_lhistory_i' => 'View your recorded IP addresses and the login-times for your last <b>%s</b> login\'s and see if your account was used by someone else. If there are unknown log-in times or IP addresses in the Login History - it is possible that someone knows your password. In this case you should change the password for your account and also check your e-mail account URL.',
	'ctracker_lhistory_h1' => '����� ���� � ����� " ',
	'ctracker_lhistory_h2' => '����������� IP ����� ',
	'ctracker_lhistory_nav' => 'CrackerTracker Login History',
	'ctracker_lhistory_err' => '�� ������ ����� � �������, ����� ������������ ����������� CrackerTracker .',
	'ctracker_lhistory_off' => '����� ������� ��� �������� ��������������� .',

/*
* Other Language Strings used in the Board itself
*/
	'ctracker_gmb_link' => '������������� ������� ������ ������� ���� �������������. ��� ���������� ����� ���� �������� �����: <br/> <br/> <href =" % s"> %s </a> <br/>',
 'ctracker_gmb_mark' => '������ ����� �����',
 'ctracker_gmb_markip' => '������� �����',
 'ctracker_gmb_loginlink' => '������ ��� ����� � �������',
 'ctracker_gmb_1stadmin' => '��������� ��� ��������� ��������� ������ ������������� �� ����� ���� �������.',
 'ctracker_gmb_pu_1' => '<b> CrackerTracker - Misconfiguration </b> <br/> <br/> ���� 21 ������������ ��� ����� FTP. ���� ����� ����� ��������� ������������ ���� ����, �� ����� ������ �� ����� ���������� ����������. ��� - ��, ������ ��� �������� ���������� ���� ���� ��� FTP �����.',
 'ctracker_gmb_pu_2' => '<b> CrackerTracker - Misconfiguration </b> <br/> <br/> ����� ������ ���������� �����������! � �� ������ ������ ���������������� �� ������ ������, ��� �� ������� ��������� ���������.',
 'ctracker_gmb_pu_3' => '<b> CrackerTracker - Misconfiguration </b> <br/> <br/> ���� ������� �������� �/��� ����������� ����� ��� ����� ����� (/WWW/), ��� doesn \'t ������ �������� ����� ����� (/)!',
 'ctracker_gmb_pu_4' => '<b> CrackerTracker - Misconfiguration </b> <br/> <br/> ��� ������� doesn \'t ������������� ����� ������ (/)!',
 'ctracker_binf_spammer' => '������� ����������� ������������ ������ ����� �����, ��� �� �������� ������ ������������� ����� ������ � ������� %s ������. ���� �� ����������� �������� ������ ���� � �������� <b> %s </b> �������, �� ���� ������� ������ ����� ������������� <b>! </b> <br/> <br/> ���������� �����! ��������� ��� ���������� ��� ����, ����� ����������� ���������.',
 'ctracker_binf_sban' => '���������� ����� �������� ���� ������� ������, ������ ��� �� ���� ���������������� ��� �������.',
 'ctracker_sendmail_info' => '��-�� ����������� ������������ ��� ������ ��������� ������� ����������� ����� ������ %s ������.',
 'ctracker_pwreset_info' => '��-�� ����������� ������������ ��� �� ��������, ����� ������� ������ ������ ������ %s ������. ���������� ������� � ������� � ���������������, ���� � ��� ���� ���������!',
 'ctracker_vc_guest_post' => '���������� ������������� ��� ������',
 'ctracker_vc_guest_expl' => '������������ ������ �����: ���������� ������� ��������� ��� ������, ��� ��������� ���� ���������.',
 'ctracker_dbg_mode' => '<b> CrackerTracker ����������� �� ������ �������. ��� �� ������ ���� ���������� ��������. <br/> ���������� ����������� � ����������� ������ ��� ����� ������. <br/> <br/> <u> ��� ��������� �� ����� ���� ������! </u> </b>',
 )
);

?>