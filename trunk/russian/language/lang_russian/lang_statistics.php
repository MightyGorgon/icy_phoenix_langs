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
* Nivisec.com (support@nivisec.com)
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

// Original Statistics Mod (c) 2002 Nivisec - http://nivisec.com/mods

$lang = array_merge($lang, array(
// If you want to credit the Author on the Statistics Page, uncomment the second line.
// 'Version_info' => '<br />Statistics Mod Version %s', //%s = number
	'Version_info' => '<br />Statistics recoded by <a href="http://www.icyphoenix.com/">Mighty Gorgon</a> based on Statistics Mod Version %s &copy; 2002 <a href="http://www.opentools.de/board">Acyd Burn</a>',

// These Language Variables are available for all installed Modules
	'Rank' => 'Оценка',
'Percent' => 'Процент',
'Graph' => 'График',
'Uses' => 'Использует',
'How_many' => 'Сколько',

// Main Language

// Page Header/Footer
	'Install_info' => 'Установлено %s', //%s = date
'Viewed_info' => 'Страница статистики загружена %d раз', //%d = number
'Statistics_title' => 'Статистика форума',


// Admin Language
	'Statistics_management' => 'Модули статистики',
'Statistics_config' => 'Конфигурация статистики',

// Statistics Config
	'Statistics_config_title' => 'Конфигурация статистики',

'Return_limit' => 'Лимит выводов',
'Return_limit_desc' => 'Количество пунктов, включенное в каждую оценку. Значение будет автоматически пропущено модулями, если указано здесь.',
'Clear_cache' => 'Очистить кэш модулей',
'Clear_cache_desc' => 'Очистить весь кэш модулей',
'Modules_directory' => 'Папка модулей',
'Modules_directory_desc' => 'Папка phpBB, где расположены все модули. Заметьте, что / или \ не должен быть использован!',

// Status Messages
	'Messages' => 'Сообщения администратора',
'Updated' => 'Обновлено',
'Active' => 'Активно',
'Activate' => 'Активировать',
'Activated' => 'Активировано',
'Not_active' => 'Неактивно',
'Deactivate' => 'Деактивировать',
'Deactivated' => 'Деактивировано',
'Install' => 'Установить',
'Installed' => 'Установлено',
'Uninstall' => 'Удалить',
'Uninstalled' => 'Удалено',
'Move_up' => 'Вверх',
'Move_down' => 'Вниз',
'Update_time' => 'Время обновления',
'Auth_settings_updated' => 'Параметры авторизации - [Постоянно обновлены]',

// Modules Management
	'Back_to_management' => 'Вернуться к странице управления модулями',
'Statistics_modules_title' => 'Модуль статистики',

'Module_name' => 'Имя',
'Directory_name' => 'Имя папки',
'Status' => 'Состояние',
'Update_time_minutes' => 'Время обновления в минутах',
'Update_time_desc' => 'Интервал (в минутах) до обновления данных.',
'Auto_set_update_time' => 'Определить и установить рекомендуемое значение для каждого активного и установленного модуля. Заметьте, что это может занять времени.',
'Uninstall_module' => 'Удалить модуль',
'Uninstall_module_desc' => 'Отмечает модуль как "не установлен", так что вы можете установить его заново. Модуль не удаляется из вашей системы, вамм придется вручную удалить модуль для полного удаления.',
'Active_desc' => 'Опция, если модуль активен, то он будет показан в зависимости от разрешений.',
'Go' => 'Вперед',
'Update_Modules' => 'Обновление Модулей',

'Not_allowed_to_install' => 'Вы не можете установить этот модуль. Чаще всего это происходит, если не установлен модуль, от которого зависит этот модуль. Пожалуйста, свяжитесь с автором этого модуля, если у вас есть вопросы и если эта информация не помогает вам.',
'Wrong_stats_mod_version' => 'Вы не можете установить этот модуль, потому что версия вашего модуля статистики не соответствует версии, необходимой модулю. Для установки модуля вам нужна версия %s или выше.', // replace %s with Version (2.1.3 for example)
'Module_install_error' => 'Произошла ошибка при установке данного модуля. Скорей всего некоторые команды SQL не могут быть выполнены, проверьте ошибки ниже.',

'Preview_debug_info' => 'Этот модуль был сгенерирован за %f секунд: %d запросов выполнено.', // Replace %f with seconds and %d with queries
'Update_time_recommend' => 'Модуль статистики (в зависимости от настроек) имеет время обновления: <b>%d</b> минут.', // Replace %d with Minutes

// Modules

	'module_name __ stats_overview_section' => 'Краткий обзор Статистики',

 'module_name_admin_statistics' => 'Административная Статистика',
 'Statistic' => 'Статистика',
 'Value' => 'Значение',
 'Number_posts' => 'Колличество сообений',
 'Posts_per_day' => 'Сообщений в день',
 'Number_topics' => 'Колличество тем',
 'Topics_per_day' => 'Темы в день',
 'Number_users' => 'Колличество пользователей',
 'Users_per_day' => 'Пользователей в день',
 'Board_started' => 'Совет начался',
 'Avatar_dir_size' => 'размер каталога Avatar',
 'Database_size' => 'размер Базы данных',
 'Gzip_compression' => 'сжатие Gzip',
 'Not_available' => 'Не доступный',
 'Board_Up_Days' => 'Совет Дня',
 'Latest_Reg_User' => 'Последний зарегистрированный Пользователь',
 'Latest_Reg_User_Date' => 'Дата регистрации последнего пользователя',
 'Most_Ever_Online' => 'Большинство Пользователей Когда-либо Онлайн',
 'Most_Ever_Online_Date' => 'Большинство Пользователей Когда-либо Сетевая Дата',
 'Disk_usage' => 'Дисковое Использование',
 'Title' => 'Средние колличество сообщений Пользователя',
 'Average_Posts' => 'Средние колличество сообщений Пользователя:',

 'module_name_average_posts_per_user' => 'Средние Посты За Пользователя',

 'module_name_age_clusters' => 'Кластеры Возраста',
 'AGE' => 'Возраст',
 'LESS_THAN' => 'Меньше чем',
 'MORE_THAN' => 'Больше чем',

 'module_name_fastest_users' => 'Самые Лучшие Пользователи',
 'time_on_forum' => 'Дней на форуме',
 'posts_day' => 'Сообщения в день',
 'Statistics' => 'Статистика',

 'module_name_interesting_topics' => 'Большинство Интересных Тем',
 'Rate' => 'Норма (обозрения/сообщения)',
 'Topic' => 'Тема',

 'module_name_latest_topics' => 'Последние Темы',
 'Rank' => 'Ранг',
 'Latest_Topics' => 'Последние Темы',
 'Post_time' => 'Почтовое время',

 'module_name_month_stat' => 'Статистика за месяц',
 'New_users' => 'Новых Пользователей',
 'New_replies' => 'Новых Ответов',
 'New_topics' => 'Новых Тем',
 'Avg_Table' => 'Среднее число Таблицы',
 'Sum_Table' => 'Сумма Таблицы',

 'module_name_most_active_topics' => 'Большинство Активных Тем',

 'module_name_most_active_topicstarter' => 'Самый активный пользователь в Темах',

 'module_name_most_logged_on_users' => 'Наиболее Вошедший Пользователи',
 'Time2' => 'Вошел Время',

 'module_name_most_used_languages' => 'Языки',
 'Язык' => 'Язык',

 'module_name_most_used_styles' => 'Стили',
 'Style' => 'Стиль',

 'module_name_most_viewed_topics' => 'Наиболее просматриваемые Темы',
 'Month_jan' => 'Январь',
 'Month_feb' => 'Февраль',
 'Month_mar' => 'март',
 'Month_apr' => 'Апрель',
 'Month_may' => 'май',
 'Month_jun' => 'Июнь',
 'Month_jul' => 'Июль',
 'Month_aug' => 'Август',
 'Month_sep' => 'Сентябрь',
 'Month_oct' => 'Октябрь',
 'Month_nov' => 'Ноябрь',
 'Month_dec' => 'Декабрь',
 'Year' => 'Год',
 'Month' => 'Месяц',
 'Number' => 'Число',

	'module_name_new_posts_by_month' => 'Новые сообщения за Месяц',
 'Posts_month' => 'Колличество новых сообщений за месяцу',

 'module_name_new_topics_by_month' => 'Новых Тем за Месяц',
 'Topics_month' => 'Колличество новых тем за месяц',

 'module_name_new_users_by_month' => 'Новых Пользователей за Месяц',
 'Signup_month' => 'Количество новых пользователей за месяц',

 'module_name_posting_by_day_of_week' => 'Трафик за неделю: Сообщения',
 'Traffic_posts' => 'Трафик за неделю: Почтовые отправления',
 'Dow' => 'День',

 'module_name_registrations_by_day_of_week' => 'Трафик за неделю: Регистрация',
 'Traffic_reg' => 'Трафик за неделю: Регистрация',
 'New_users' => 'Новые Пользователи',

 'module_name_site_hist_daily_stats_current_week' => 'Ежедневная Статистика за неделю',

 'module_name_site_hist_hours_stats_current_day' => 'Статистика за текущий день',

 'module_name_site_hist_month_top_posters' => 'Почтовые отправления Пользователям за месяц',
 'Month_Var' => '[%s]',// %s will be replaced by the current Month

 'module_name_site_hist_monthly_stats_current_year' => 'Ежемесячная статистика за год',

 'module_name_site_hist_week_top_posters' => 'Почтовые отправления пользователям за неделю',
 'Week_Var' => '[%s]',// %s will be replaced by the current Week

 'module_name_top_attachments' => 'Основные загружаемые файлы',
 'File_name' => 'Имя файла',
 'File_comment' => 'Комментарий Файла',

 'module_name_top_posters' => 'Превышают Эмблемы',

 'module_name_top_smilies' => 'Наиболее Используемые Смайлики',
 'smiley_url' => 'Изображение',
 'smiley_code' => 'Код',

 'module_name_top_words' => 'Наиболее Используемые слова',
 'Word' => 'Слова',
 'Uses2' => 'Использование',

 'module_name_topics_by_day_of_week' => 'Трафик за неделю: Темы',
 'Traffic_topics' => 'Трафик за неделю: Темы',
 'Dow' => 'День',

 'module_name_users_from_where' => 'Местоположение Пользователя',
 'From_where_title' => 'Где пользователи',
 'From_where' => 'где',

 'module_name_users_gender' => 'Пол',
 'Пользователи' => 'Пользователи',

 'module_name_users_ranks' => 'Звание',
 'Rank_image' => 'Изображение Звания',
 'Rank_range' => 'Ранжируют сообщения',
 'Rank_special' => 'Индивидуальное Звание',
	)
);

?>