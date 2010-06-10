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
                           
   Переведено на русский: Мельников Николай(zver) zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
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
	'ctracker_settings_on' => 'Включено ',
	'ctracker_settings_off' => 'Выключено ',
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
	'ctracker_ipb_new_entry' => 'Новая Запись ',
	'ctracker_ipb_added' => 'Вступление успешно добавлен !',
	'ctracker_ipb_deleted' => 'Вступление успешно удалены! ',
	'ctracker_ipb_add_now' => 'Добавить запись ',
	'ctracker_mu_success' => 'Пользователь был отмечен как "Несчастная пользователя ".',
	'ctracker_mu_success_bbc' => '[cell class="text_orange"]Пользователь был отмечен как  "Miserable User".[/cell]',
	'ctracker_mu_success_html' => '<span class="text_orange">Пользователь был отмечен как  "Miserable User".</span>',
	'ctracker_mu_error_admin' => 'Администраторы и модераторы не могут быть помечены как  "Miserable User"!',
	'ctracker_mu_deleted' => 'Выбранные пользователь (ей) были удалены из  "Miserable User" Userlist successfully.',
	'ctracker_mu_head' => 'Miserable User',
	'ctracker_error_updating_userdata' => ' CrackerTracker не мог запустить базу данных операций в Usertable .',
	'ctracker_error_database_op' => 'CrackerTracker couldn\'t run the database operation correctly.',
	'ctracker_message_dialog_title' => 'CBACK CrackerTracker Профессиональный ',


/*
* Language Strings used for the footer itself
*/
	'ctracker_fdisplay_imgdesc' => 'Совет Безопасности ',
	'ctracker_fdisplay_n' => '<a href="http://www.cback.de" target="_blank">Security</a> with <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a>.',
	'ctracker_fdisplay_c' => 'Protected by <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a><br /><b>%s</b> Attacks blocked.',
	'ctracker_fdisplay_g' => '<b>%s</b> Attacks blocked',


/*
* Language Strings for the class_ct_database.php
*/
	'ctracker_error_loading_config' => 'Не мог CrackerTracker конфигурации \'t be loaded from the database. Have you run the installation script and edited the file "includes/constants.php" correctly?',
	'ctracker_error_updating_config' => 'Не мог CrackerTracker конфигурации \'t be updated. Have you run the installation script and edited the file "includes/constants.php" correctly?',
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
	'ctracker_login_wrong' => 'Visual код подтверждения Вы ввели неправильный !',
	'ctracker_code_dbconn' => 'Couldn\'t load the Visual Confirmation Code from the database! If you have phpBB-Plus you must install the phpBB international modules for the Visual Confirmation. Please read the references to phpBB-Plus in the "add_ons" folder of the CrackerTracker MOD Package!',
	'ctracker_login_success' => 'Your Account has been reactivated.<br /><br />Click <a href="%s">HERE</a> to go back to Login.',
	'ctracker_code_count' => 'The number of entries of Visual Confirmation has exceeded the limit for this session.',

/*
* Language Strings used in ctracker_login.php
*/
	'ctracker_login_title' => 'CrackerTracker Account Activation',
	'ctracker_login_logged' => 'Logged In Users cannot access the site.',
	'ctracker_login_confim' => 'Число ошибочных регистраций в системе для учетной записи была достигнута . Therefore your Account has been locked and will have to be reactivated using Visual Confirmation.<br /><br />Please type in the following code and click on "Unlock" to unlock your account. When this is done you can log in again.',
	'ctracker_login_button' => 'Активировать ',

/*
* Language Strings for IP Warning Engine
*/
	'ctracker_ipwarn_info' => 'IP Диапазон сканирования на ваш счет  <b>%s</b>',
	'ctracker_ipwarn_prof' => 'IP Range Scanner',
	'ctracker_ipwarn_pdes' => 'The IP Range Scanner checks the so-called IP Range for changes. If someone has logged into your account from another location you will get a short message (also if you are or have previously logged in from a different location).<br /> Please check the footer to see if the warning feature is still activated, as an aggressor could have deactivated this. Your Login however remains active, so you still have the ability to make changes after this warning.',
	'ctracker_ipwarn_chng' => '<b>&raquo; ADVICE &laquo;</b><br />The IP Range for your account has changed. The actual Login took place from <b>%s</b>, the previous from <b>%s</b>. If you didn\'t log on previously from another location, then maybe an aggressor has used your account without authorization!',
	'ctracker_ipwarn_welc' => '<b>&raquo; ADVICE &laquo;</b><br />The IP Range Scanner for your Account has not been initialised yet. This happens after two Logins. If you would like to initialise the Scanner now, please log in and out twice.',
	'ctracker_ipwarn_send' => 'accept settings',

/*
* Language Strings for Login History
*/
	'ctracker_lhistory_h' => 'Войти История ',
	'ctracker_lhistory_i' => 'View your recorded IP addresses and the login-times for your last <b>%s</b> login\'s and see if your account was used by someone else. If there are unknown log-in times or IP addresses in the Login History - it is possible that someone knows your password. In this case you should change the password for your account and also check your e-mail account URL.',
	'ctracker_lhistory_h1' => 'Войти Дата и время " ',
	'ctracker_lhistory_h2' => 'Сохраненные IP адрес ',
	'ctracker_lhistory_nav' => 'CrackerTracker Login History',
	'ctracker_lhistory_err' => 'Вы должны войти в систему, чтобы использовать возможности CrackerTracker .',
	'ctracker_lhistory_off' => 'Войти истории был отключен администратором .',

/*
* Other Language Strings used in the Board itself
*/
	'ctracker_gmb_link' => 'Администрация написал важную записку всем пользователям. Это примечание может быть замечено здесь: <br/> <br/> <href =" % s"> %s </a> <br/>',
 'ctracker_gmb_mark' => 'Чтение Поста Метки',
 'ctracker_gmb_markip' => 'Удаляют совет',
 'ctracker_gmb_loginlink' => 'Защита при входе в систему',
 'ctracker_gmb_1stadmin' => 'Установка или Параметры настройки первой Администрации не может быть изменен.',
 'ctracker_gmb_pu_1' => '<b> CrackerTracker - Misconfiguration </b> <br/> <br/> Порт 21 используется для Служб FTP. Если Форум будет предписан использовать этот Порт, то Форум больше не будет выполнимой программой. Это - то, потому что Браузеры используют этот Порт для FTP также.',
 'ctracker_gmb_pu_2' => '<b> CrackerTracker - Misconfiguration </b> <br/> <br/> длина Сеанса установлен уменьшенный! и Вы будете всегда зарегистрированы из Форума прежде, чем Вы сможете исправить установку.',
 'ctracker_gmb_pu_3' => '<b> CrackerTracker - Misconfiguration </b> <br/> <br/> Путь скрипта начинает и/или заканчивает любой без Косой черты (/WWW/), или doesn \'t только содержат Косую черту (/)!',
 'ctracker_gmb_pu_4' => '<b> CrackerTracker - Misconfiguration </b> <br/> <br/> Имя сервера doesn \'t заканчиваются Косой чертой (/)!',
 'ctracker_binf_spammer' => 'Система обеспечения безопасности Против спама решил, что Вы достигли своего максимального числа постов в течение %s секунд. Если Вы попытаетесь написать другой пост в пределах <b> %s </b> секунды, то Ваша учетная запись будет блокированный <b>! </b> <br/> <br/> Пожалуйста ждите! поскольку это необходимо для того, чтобы блокировать спаммеров.',
 'ctracker_binf_sban' => 'Блокировка Спама запретил Вашу учетную запись, потому что Вы были идентифицированы как спаммер.',
 'ctracker_sendmail_info' => 'из-за соображений безопасности Вам только разрешают послать электронной почте каждые %s минуты.',
 'ctracker_pwreset_info' => 'из-за соображений безопасности это не возможно, чтобы послать новому паролю каждые %s минуты. Пожалуйста войдите в контакт с администратором, если у Вас есть трудности!',
 'ctracker_vc_guest_post' => 'Визуальное Подтверждение для Гостей',
 'ctracker_vc_guest_expl' => 'Безопасность Против спама: Пожалуйста введите следующий код прежде, чем отправить Ваше сообщение.',
 'ctracker_dbg_mode' => '<b> CrackerTracker выполняется на РЕЖИМЕ ОТЛАДКИ. Это не должно быть постоянным условием. <br/> Пожалуйста задержанный к нормальному режиму как можно скорее. <br/> <br/> <u> Это сообщение не может быть удален! </u> </b>',
 )
);

?>