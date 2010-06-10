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
* Xore (mods@xore.ca)
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

// Admin menu
$lang ['Cmcat_main'] = 'Главное';
$lang ['Cmcat_addons'] = 'Дополнения';
$lang ['Cmcat_other'] = 'Другой';
$lang ['Cmcat_help'] = 'Помощь';

$lang ['Cash_Configuration'] = 'Cash&nbsp; Конфигурация';
$lang ['Cash_Currencies'] = 'Cash&nbsp; Валюты';
$lang ['Cash_Exchange'] = 'Cash&nbsp; Обмен';
$lang ['Cash_Events'] = 'Cash&nbsp; События';
$lang ['Cash_Forums'] = 'Cash&nbsp; Форумы';
$lang ['Cash_Groups'] = 'Cash&nbsp; Группы';
$lang ['Cash_Help'] = 'Cash&nbsp; Помощь';
$lang ['Cash_Logs'] = 'Cash&nbsp; Файлы регистрации';
$lang ['Cash_Settings'] = 'Cash&nbsp; Параметры настройки';

$lang ['Cmenu_cash_config'] = 'Глобальные Наличные Ультрасовременные Параметры настройки, которые затрагивают все Валюты';
$lang ['Cmenu_cash_currencies'] = 'Добавляют, Удалите или переупорядочьте Валюты';
$lang ['Cmenu_cash_settings'] = 'Определенные параметры настройки для каждой Валюты';
$lang ['Cmenu_cash_events'] = 'Наличное Количество, чтобы выделить на пользовательских событиях';
$lang ['Cmenu_cash_reset'] = 'Сброс или количество Наличных денег Пересчета';
$lang ['Cmenu_cash_exchange'] = 'Допускает/Отключает Обмену валюты, обменные курсы';
$lang ['Cmenu_cash_forums'] = 'Валюты Поворота вкл. или выкл. для каждого форума';
$lang ['Cmenu_cash_groups'] = 'Заказные Параметры настройки для определенного usergroups, рангов и уровни';
$lang ['Cmenu_cash_log'] = 'Рассматривает/Удаляет Зарегистрированные Наличные Ультрасовременные действия';
$lang ['Cmenu_cash_help'] = 'Наличный  помогает';

// Config
$lang ['Cash_config'] = 'Наличная Ультрасовременная Конфигурация';
$lang ['Cash_config_explain'] = 'Набор Ваша Наличная Ультрасовременная конфигурация.';

$lang ['Cash_admincp'] = 'Наличный Режим Модника Админкпа';
$lang ['Cash_adminnavbar'] = 'Наличный Модник Нэвбэр';
$lang ['Sidebar'] = 'Врезка';
$lang ['Menu'] = 'Меню';

$lang ['Messages'] = 'Сообщения';
$lang ['Spam'] = 'Спам';
$lang ['Click_return_cash_config'] = 'Нажмите %sЗдесь%s, чтобы возвратиться к Наличной Ультрасовременной Конфигурации';
$lang ['Cash_config_updated'] = 'Наличная Ультрасовременная Конфигурация, Обновленная Успешно';
$lang ['Cash_disabled'] = 'Отключает Наличного Модника';
$lang ['Cash_message'] = 'Доход Показа в подтверждении Поста/Ответа показывает на экране';
$lang ['Cash_display_message'] = 'Сообщение, чтобы отобразить пользовательские доходы';
$lang ['Cash_display_message_explain'] = 'Должен иметь точно один" %s" в нем';
$lang ['Cash_spam_disable_num'] = 'Количество сообщений, чтобы отключить доход после (предотвращение спама)';
$lang ['Cash_spam_disable_time'] = 'Период времени, по которому эти посты должны превысить (часы)';
$lang ['Cash_spam_disable_message'] = 'объявление Спама за нулевые доходы';

// Currencies
$lang ['Cash_currencies'] = 'Наличные Ультрасовременные Валюты';
$lang ['Cash_currencies_explain'] = 'Управляет Вашими валютами.';

$lang ['Click_return_cash_currencies'] = 'Нажмите %sЗдесь%s, чтобы возвратиться к Наличным Ультрасовременным Валютам';
$lang ['Cash_currencies_updated'] = 'Наличные Ультрасовременные Валюты, Обновленные Успешно';
$lang ['Cash_field'] = 'Поле';
$lang ['Cash_currency'] = 'Валюта';
$lang ['Name_of_currency'] = 'Название Валюты';
$lang ['Default'] = 'по умолчанию';
$lang ['Cash_order'] = 'Заказ';
$lang ['Cash_set_all'] = 'Набор для всех пользователей';
$lang ['Cash_delete'] = 'Удаляет Валюту';
$lang ['Decimals'] = 'Десятичные числа';

$lang ['Cash_confirm_copy'] = 'Копирует всего пользователя \%s данные к %s? <br/> Это не может быть уничтожено';
$lang ['Cash_confirm_delete'] = 'Удаляет %s? <br/> Это не может быть уничтожено';

$lang ['Cash_copy_currency'] = 'Данные Валюты Копии';

$lang ['Cash_new_currency'] = 'Создает новую Валюту';
$lang ['Cash_currency_dbfield'] = 'поле Database для валюты';
$lang ['Cash_currency_decimals'] = 'Число десятичных чисел для валюты';
$lang ['Cash_currency_default'] = 'Значение по умолчанию для валюты';

$lang ['Bad_dbfield'] = 'Плохое имя поля, должен быть в форме \'user_word \' <br/> <br/> %s <br/> <br/> Примеры: <br/> user_points <br/> user_cash <br/> user_money <br/> user_warnings <br/> <br/> ';
// 0 currencies (most admin panels won't work... )
$lang['Insufficient_currencies'] = 'Вы должны создать Валюты прежде, чем Вы сможете изменить параметры настройки';

// Add-ons ?

// Events
$lang ['Cash_events'] = 'Наличные Ультрасовременные События';
$lang ['Cash_events_explain'] = 'наличные деньги Набора составляет, чтобы быть данным для заказных событий.';

$lang ['No_events'] = 'Никакие события, перечисленные';
$lang ['Existing_events'] = 'Существующие События';
$lang ['Add_an_event'] = 'Добавляют случай';
$lang ['Cash_events_updated'] = 'Наличные События, Обновленные Успешно';
$lang ['Click_return_cash_events'] = 'Нажмите %sЗдесь%s, чтобы возвратиться к Наличным Событиям';

//Reset
$lang ['Cash_reset_title'] = 'Наличный Ультрасовременный Сброс';
$lang ['Cash_reset_explain'] = 'Активизирует глобальный сброс всех пользователей \' Наличное количество';

$lang ['Cash_resetting'] = 'Сброс Наличных денег';
$lang ['User_of'] = 'Пользователь %s %s';

$lang ['Set_checked'] = 'Набор проверил валюты';
$lang ['Recount_checked'] = 'Пересчет проверил валюты';

$lang ['Cash_confirm_reset'] = 'Подтверждает сброс выбранных валют? <br/> Это не может быть уничтожено';
$lang ['Cash_confirm_recount'] = 'Подтверждает пересчет выбранных валют? <br/> Это не может быть уничтожено. <br/> <br/> Это действие не рекомендуется для плат с большим большое количество пользователей и/или тем. <br/> <br/> рекомендуется, чтобы Вы отключили свою плату, в то время как это действие происходит. <br/> Вы можете отключить свою плату через %sConfiguration%s';

$lang ['Update_successful'] = 'успешное Обновление!';
$lang ['Click_return_cash_reset'] = 'Нажмите %sЗдесь%s, чтобы возвратиться к Наличному Сбросу';
$lang ['User_updated'] = '%s обновленный <br/>';

// Others

// Exchange
$lang ['Cash_exchange'] = 'Наличный Ультрасовременный Обмен';
$lang ['Cash_exchange_explain'] = 'Набор относительное значение Ваших валют, и дает возможность пользователям обменять.';

$lang ['Exchange_insufficient_currencies'] = 'Вы надеваете \'t, имеют достаточно многие Валюты, созданные, чтобы создать обменные курсы <br/>, По крайней мере 2 требуются';
// Forums
$lang ['Forum_cm_settings'] = 'Наличные Ультрасовременные Параметры настройки Форума';
$lang ['Forum_cm_settings_explain'] = 'Набор, у каких форумов есть Наличный Модник, допущенный';
// Groups
$lang ['Cash_groups'] = 'Наличные Ультрасовременные Группы';
$lang ['Cash_groups_explain'] = 'Набор специальные привилегии на рангах, usergroups, администраторах и модераторы';

$lang ['Click_return_cash_groups'] = 'Нажмите %sЗдесь%s, чтобы возвратиться к Наличным Группам';
$lang ['Cash_groups_updated'] = 'Наличные Группы, Обновленные Успешно';

$lang ['Set'] = 'Набор';
$lang ['Up'] ='';
$lang ['Down'] = 'Вниз';

// Help
$lang ['Cmh_support'] = 'Наличная Ультрасовременная Поддержка';
$lang ['Cmh_troubleshooting'] = 'Диагностика';
$lang ['Cmh_upgrading'] = 'Обновление';
$lang ['Cmh_addons'] = 'Дополнения';
$lang ['Cmh_demo_boards'] = 'Демонстрационные Советы';
$lang ['Cmh_translations'] = 'Трансляции';
$lang ['Cmh_features'] = 'Особенности';

$lang ['Cmhe_support'] = 'Общая информация';
$lang ['Cmhe_troubleshooting'] = 'Если Вы \'re, имеющий проблемы с Наличным Модником, проверьте здесь для местоположений';
$lang ['Cmhe_upgrading'] = 'у Вас в настоящее время есть версия %s, обновления будут зарегистрированы здесь к последней версии';
$lang ['Cmhe_addons'] = 'список МОДНИКОВ, которые используют в своих интересах Наличные Ультрасовременные \'s особенности';
$lang ['Cmhe_demo_boards'] = 'список некоторых демонстрационных плат, которые используют Наличного Модника';
$lang ['Cmhe_translations'] = 'список трансляций для Наличного Модника';
$lang ['Cmhe_features'] = 'список Наличных Ультрасовременных особенностей \'s, и разработка на будущих версиях';

// Logs
$lang['Logs'] = 'Наличные Файлы регистрации';
$lang['Logs_explain'] = 'Зарегистрированные Наличные Ультрасовременные события';

// Settings
$lang ['Cash_settings'] = 'Наличные Ультрасовременные Параметры настройки';
$lang ['Cash_settings_explain'] = 'Настраивает все Параметры настройки Валюты.';


$lang ['Display'] = 'Дисплей';
$lang ['Implementation'] = 'Реализация';
$lang ['Allowances'] = 'Пособия';
$lang ['Allowances_explain'] = 'Пособия требует Наличного Ультрасовременного дополнения к программе Пособий';
$lang ['Click_return_cash_settings'] = 'Нажимает %sHere%s, чтобы возвратиться к Наличным Ультрасовременным Параметрам настройки';
$lang ['Cash_settings_updated'] = 'Наличные Ультрасовременные Параметры настройки, Обновленные Успешно';

$lang ['Cash_enabled'] = 'Допускает Валюте';
$lang ['Cash_custom_currency'] = 'Заказная Валюта для Наличного Модника';
$lang ['Cash_image'] = 'Отображает валюту как изображение';
$lang ['Cash_imageurl'] = 'Изображение (Относительно Ледяного Финикса внедряют путь):';
$lang ['Cash_imageurl_explain'] = 'Использует это, чтобы определить маленькое изображение, связанное с валютой';
$lang ['Prefix'] = 'Префикс';
$lang ['Postfix'] = 'Постфикс';
$lang ['Cash_currency_style'] = 'стиль Валюты для Наличного Модника';
$lang ['Cash_currency_style_explain'] = 'Обозначение денежной единицы как'. $lang ['Prefix']. 'или'. $lang ['Postfix'];
$lang ['Cash_display_usercp'] = 'доход Показа в UserCp';
$lang ['Cash_display_userpost'] = 'доход Показа в Почтовой Конфигурации';
$lang ['Cash_display_memberlist'] = 'доход Показа в Memberlist';

$lang ['Cash_amount_per_post'] = 'Сумма наличными, заработанная за новую тему';
$lang ['Cash_amount_post_bonus'] = 'Количество наличных денег премии, заработанных за ответ для темы, создает';
$lang ['Cash_amount_per_reply'] = 'Сумма наличными, заработанная за ответ';
$lang ['Cash_amount_per_character'] = 'Сумма наличными, заработанная за символ';
$lang ['Cash_amount_per_thanks'] = 'Сумма наличными, заработанная за спасибо, полученное';
$lang ['Cash_maxearn'] = 'Максимальная сумма наличными, заработанная для того, чтобы перенести';
$lang ['Cash_amount_per_pm'] = 'Сумма наличными, заработанная при содействии частного сообщения';
$lang ['Cash_include_quotes'] = 'Включает кавычки, вычисляя наличные деньги за символ';
$lang ['Cash_exchangeable'] = 'Позволяет пользователям обменивать эту валюту';
$lang ['Cash_allow_donate'] = 'Позволяет пользователям жертвовать свои наличные деньги другим пользователям';
$lang ['Cash_allow_mod_edit'] = 'Позволяет модераторам редактировать пользователя \наличные деньги';
$lang ['Cash_allow_negative'] = 'Позволяет пользователям иметь отрицательное наличное количество';

$lang ['Cash_allowance_enabled'] = 'Допускает пособиям';
$lang ['Cash_allowance_amount'] = 'Сумма наличными, заработанная как пособия';
$lang ['Cash_allownace_frequency'] = 'Как часто пособия даны';
$lang ['Cash_allownace_frequencies'] [CASH_ALLOW_DAY] = 'День';
$lang ['Cash_allownace_frequencies'] [CASH_ALLOW_WEEK] = 'Неделя';
$lang ['Cash_allownace_frequencies'] [CASH_ALLOW_MONTH] = 'Месяц';
$lang ['Cash_allownace_frequencies'] [CASH_ALLOW_YEAR] = 'Год';
$lang ['Cash_allowance_next'] = 'Время до следующего пособия';

// Groups
$lang['Cash_status_type'][CASH_GROUPS_DEFAULT] = 'по умолчанию';
$lang['Cash_status_type'][CASH_GROUPS_CUSTOM] = 'Обычный';
$lang['Cash_status_type'][CASH_GROUPS_OFF] = 'Off';
$lang['Cash_status'] = 'Статус';

// Cash Mod Log Text
// Note: there isn't really a whole lot i can do about it, if languages use a
// grammar that requires these arguments (%s) to be in a different order, it's stuck in
// this order. The up side is that this is about 10x more comprehensive than the
// last way i did it.
//

/* argument order: [donater id][donater name][currency list][receiver id][receiver name]

eg.
Joe donated 14 gold, $10, 3 points to Peter
*/
$lang['Cash_clause'][CASH_LOG_DONATE] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> donated <b>%s</b> to <a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a>';

/* argument order: [admin/mod id][admin/mod name][editee id][editee name][Added list][removed list][Set list]

eg.
Joe modified Peter's Cash:
Added 14 gold
Removed $10
Set 3 points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_MODEDIT] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new">%s</a> edited <a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a>\'s Cash:<br />Added <b>%s</b><br />Removed <b>%s</b><br />Set to <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][currency name]

eg.
Joe created points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_CREATE_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> created <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][currency name]

eg.
Joe deleted $
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_DELETE_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> deleted <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][old currency name][new currency name]

eg.
Joe renamed silver to gold
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_RENAME_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> renamed <b>%s</b> to <b>%s</b>';

/* argument order: [admin/mod id][admin/mod name][copied currency name][copied over currency name]

eg.
Joe copied users' gold to points
*/
$lang['Cash_clause'][CASH_LOG_ADMIN_COPY_CURRENCY] = '<a href="' . IP_ROOT_PATH . PROFILE_MG . '?mode=viewprofile&amp;' . POST_USERS_URL . '=%s" target="_new"><b>%s</b></a> copied users\' <b>%s</b> to <b>%s</b>';

$lang['Log'] = 'Файл';
$lang['Action'] = 'Действие';
$lang['Type'] = 'Тип';
$lang['Cash_all'] = 'Все';
$lang['Cash_admin'] = 'Администратор';
$lang['Cash_user'] = 'Пользователь';
$lang['Delete_all_logs'] = 'Удалить все журналы';
$lang['Delete_admin_logs'] = 'Удалить журналы админа';
$lang['Delete_user_logs'] = 'Удалить журналы пользователя';
$lang['All'] = 'Все';
$lang['Day'] = 'День';
$lang['Week'] = 'Неделя';
$lang['Month'] = 'Месяц';
$lang['Year'] = 'Год';
$lang['Page'] = 'Страницу';
$lang['Per_page'] = 'на странице';

// Now for some regular stuff...

// User CP
$lang['Donate'] = 'Пожертвование';
$lang['Mod_usercash'] = 'изменить %s\'s наличные';
$lang['Exchange'] = 'Exchange';

// Exchange
$lang['Convert'] = 'Конвертировать';
$lang['Select_one'] = 'Выбрать один';
$lang['Exchange_lack_of_currencies'] = 'Там Арен \' т достаточно валюты для вас, чтобы иметь возможность обмена <br /> Чтобы активировать эту функцию, ваш администратор должен создать по крайней мере две валюты';
$lang['You_have'] = 'Вы';
$lang['One_worth'] = 'Один %s is worth:';
$lang['Cannot_exchange'] = 'Вы не можете обменять %s, в настоящее время';

// Donate
$lang['Amount'] = 'Сумма';
$lang['Donate_to'] = 'Пожертвование в %s';
$lang['Donation_recieved'] = 'Вы получили пожертвование %s';
$lang['Has_donated'] = '%s Было пожертвовано [b]%s[/b] Вам.' . "\n\n" . '%s wrote: ' . "\n";

// Mod Edit
$lang['Add'] = 'Добавить';
$lang['Remove'] = 'Удалить';
$lang['Omit'] = 'Опустить';
$lang['Amount'] = 'Сумма';
$lang['Donate_to'] = 'Пожертвований %s';
$lang['Has_moderated'] = '%s отредактировал остаток на вашем %s';
$lang['Has_added'] = '[*]Добавленно: [b]%s[/b]' . "\n";
$lang['Has_removed'] = '[*]Удаленно: [b]%s[/b]' . "\n";
$lang['Has_set'] = '[*]Набранно: [b]%s[/b]' . "\n";

// That's all folks!

?>