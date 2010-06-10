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
/**
*
* @Extra credits for this file
* Mark D. Hamill (mhamill@computer.org)
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
// This block goes as default text in the emailed digest (mail_digests.php)
	'digest_introduction' => 'Поскольку Вы просили, вот последний обзор объявлений, повешенных на'. $board_config ['sitename']. 'форумы. Пожалуйста приходите и присоединитесь к обсуждению!',
 'digest_from_text_name' => $board_config['sitename'] . ' Digest Robot',
 'digest_from_email_address' => $board_config['board_email'],
 'digest_subject_line' => $board_config['sitename'] . ' Digests',
'digest_disclaimer_html' => "\n" . 'This digest is being sent to registered members of <a href="' . DIGEST_SITE_URL . '">' . $board_config['sitename'] . '</a> forums and only because you explicitly requested it. ' . $board_config['sitename'] . ' is completely commercial free. Your email address is never disclosed to outside parties. See our <a href="' . DIGEST_SITE_URL . 'faq.' . PHP_EXT . '">FAQ</a> for more information on our privacy policies. You can change or delete your subscription by logging into ' . $board_config['sitename'] . ' from the <a href="' . DIGEST_SITE_URL . 'digests.' . PHP_EXT . '">Digest Page</a>. (You must be logged in to change your digest settings.) If you have questions or feedback on the format of this digest please send it to the <a href="mailto:' . $board_config['board_email'] . '">' . $board_config['sitename'] . ' Webmaster</a>.',
	'digest_disclaimer_text' => "\n" . 'This digest is being sent to registered members of ' . $board_config['sitename'] . ' forums and only because you explicitly requested it. ' . $board_config['sitename'] . ' is completely commercial free. Your email address is never disclosed to outside parties. See our FAQ for more information on our privacy policies. You can change or delete your subscription by logging into ' . $board_config['sitename'] . ' from the Digest Page. (You must be logged in to change your digest settings.) If you have questions or feedback on the format of this digest please send it to the ' . $board_config['board_email'] . '.',
	'digest_forum' => 'Форум: ',
 'digest_topic' => 'Тема:',
 'digest_link' => 'Ссылка',
 'digest_post_time' => 'Почтовое Время',
 'digest_author' => 'Автор',
 'digest_message_excerpt' => 'Выбор Сообщения',
 'digest_posted_by' => 'Зарегистрированный',
 'digest_posted_at' => 'в',
 'digest_forums_message_digest' => 'Профиль сообщения Форумов',//used in <head> tag
 'digest_salutation' => 'Дорогой',
 'digest_your_digest_options' => 'Ваши опции обзора:',
 'digest_format' => 'Формат:',
 'digest_show_message_text' => 'Текст Сообщения Показа:',
 'digest_show_my_messages' => 'Показывать Мои Сообщения:',
 'digest_frequency' => 'Частота Обзора:',
 'digest_show_only_new_messages' => 'Показывать только новые сообщения с прошлого раза, когда я вошел:',
 'digest_send_if_no_new_messages' => 'Посылать обзор если нет новых сообщений:',
 'digest_period_24_hrs' => '24 часа',
 'digest_period_1_week' => '1 неделя',
 'digest_no_new_messages' => 'нет новых сообщений для форумов, которые Вы выбрали.',
 'digest_message_size' => 'символы Maximum при содействии сообщения в обзоре:',
 'digest_summary' => 'Резюме Обзора',
 'digest_a_total_of' => 'В общей сложности',
 'digest_were_emailed' => 'Выбранные были посланы по электронной почте.',
 'digest_server_date' => 'Дата Сервера:',
 'digest_server_hour' => 'Час Сервера:',
 'digest_server_time_zone' => 'Часовой пояс Сервера:',
 'digest_or' => 'или',
 'digest_a_digest_containing' => 'обзор, содержащий',
 'digest_posts_was_sent_to' => 'Сообщение отосланно',

// This block goes on the digest settings user interface page (digests.php)
	'digest_page_title' => 'Обзоры',
 'digest_explanation' => 'Обзоры являются почтовыми резюме объявлений, повешенных здесь, которые периодически посылают Вам. Обзоры можно посылать ежедневно, или еженедельно в любой час дня Вы выбираете. Вы можете определить те специфические форумы, для которых Вы хотите резюме сообщения, или Вы можете выбрать получать все сообщения для всех форумов, для которых Вам разрешают доступ. <br/> <br/>'." \n". 'Совместимый с нашими обзорами конфиденциальности не содержат "спама", и при этом Ваш адрес электронной почты не подключен в любом случае с рекламными объявлениями. Вы можете, конечно, отменить свою подписку обзора в любое время, просто возвращаясь к этой странице. Большинство пользователей находит, что обзоры очень полезны. Мы поощряем Вас давать этому попытку!'. "\n",
 'digest_wanted' => '<b> Тип Требуемого Обзора: </b> <br/> (Еженедельные обзоры посылают в воскресенье)',
 'digest_none' => 'Нет ни одного (Аннулирует подписку)',
 'digest_daily' => 'Ежедневно',
 'digest_weekly' => 'Еженедельно',
 'digest_format_short' => 'Формат Обзора:',
 'digest_format' => '<b> Формат Обзора: </b> <br/> (HTML строго рекомендуется, если Ваша почтовая программа не может отобразить HTML)',
 'digest_html' => 'HTML',
 'digest_text' => 'Текст',
 'digest_excerpt' => '<b> Выборка Дисплея Сообщения: </b>',
 'digest_yes' => 'Да',
 'digest_no' => 'Нет',
 'digest_l_show_my_messages' => '<b> Показ мои сообщения в обзоре: </b>',
 'digest_l_show_new_only' => '<b> Показать новые сообщения только: </b> <br/> (Это отфильтрует любые объявления, повешенные до даты и времени, Вы продолжаетесь посещаемые, который был бы иначе включен в обзор.)',
 'digest_send_if_no_msgs' => '<b> Посылать обзор, если  новые объявления не были повешены: </b>',
 'digest_hour_to_send' => '<b> Время дня, чтобы послать обзор: </b> <br/> (Это - время, основанное на часовом поясе, который Вы устанавливаете в своей конфигурации. Если Вы изменяете свой часовой пояс конфигурации, и Вы хотите, чтобы обзоры прибыли в то же самое время дня, тогда изменяют это значение также.)',
 'digest_hour_to_send_short' => 'посланный обзор Времени (основанный на часовом поясе в Вашей конфигурации):',
 'digest_midnight' => 'Полночь',
	'digest_1am' => '1 AM',
	'digest_2am' => '2 AM',
	'digest_3am' => '3 AM',
	'digest_4am' => '4 AM',
	'digest_5am' => '5 AM',
	'digest_6am' => '6 AM',
	'digest_7am' => '7 AM',
	'digest_8am' => '8 AM',
	'digest_9am' => '9 AM',
	'digest_10am' => '10 AM',
	'digest_11am' => '11 AM',
	'digest_12pm' => '12 PM',
	'digest_1pm' => '1 PM',
	'digest_2pm' => '2 PM',
	'digest_3pm' => '3 PM',
	'digest_4pm' => '4 PM',
	'digest_5pm' => '5 PM',
	'digest_6pm' => '6 PM',
	'digest_7pm' => '7 PM',
	'digest_8pm' => '8 PM',
	'digest_9pm' => '9 PM',
	'digest_10pm' => '10 PM',
	'digest_11pm' => '11 PM',
	'digest_click_return' => 'Нажмите %sЗдесь%s, чтобы возвратиться к параметрам настройки Обзоров',// %s's here are for uris, do not remove!
 'digest_select_forums' => '<b> Посылают обзоры за этими форумами: </b>',
 'digest_create' => 'Ваши параметры настройки обзора были успешно созданы',
 'digest_modify' => 'Ваши параметры настройки обзора были успешно обновлены',
 'digest_unsubscribe' => 'Вы были аннулированы на подписку и больше не будете получать обзор',
 'digest_no_forums_selected' => 'Вы не выбрали форумов, таким образом Вы будете аннулированы на подписку',
 'digest_all_forums' => 'Все Подписанные Форумы',
 'digest_submit_text' => 'Производят Изменения Обзора',
 'digest_reset_text' => 'Сброс',
 'digest_size' => '<b> символы Maximum, чтобы отобразить при содействии сообщения: </b> <br/> (Предостережение: установка этого слишком высоко может сделать для очень длинных обзоров. Ссылка обеспечена для каждого сообщения, которое позволит Вам видеть полное информационное наполнение сообщения.)',
 'digest_size_50' => '50',
	'digest_size_100' => '100',
	'digest_size_150' => '150',
	'digest_size_300' => '300',
	'digest_size_600' => '600',
	'digest_size_max' => 'Максимум (32000)',
	'digest_version_text' => 'Версия',
	)
);

?>