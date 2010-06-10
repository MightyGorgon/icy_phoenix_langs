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
/*
Example for categories
$lang['cat_YOUR_CAT_NAME'] = 'YOUR_CAT_DESCRIPTION';

Example for items
$lang['item_YOUR_ITEM_NAME'] = 'YOUR_ITEM_DESCRIPTION';
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
	'FEATURES' => 'Features',
	'PHPBB2' => 'phpBB2',
	'ICYPHOENIX' => 'Icy Phoenix',
	'PHPBB3' => 'phpBB3',
	'PHPBB_FEATURES_PAGE' => 'Возможности для PHPBB были взяты из официального сайта PHPBB [ <a href="http://www.phpbb.com/about/features/">LINK</a> ]',

/*********/
	'cat_general' => 'Общий ',

	'item_license' => 'Лицензия',
	'bb2_license' => 'GPL',
	'ip_license' => 'GPL',
	'bb3_license' => 'GPL',

	'item_price' => 'Цена лицензии ',
	'bb2_price' => 'Бесплатно ',
	'ip_price' => 'Бесплатно ',
	'bb3_price' => 'Бесплатно ',

	'item_programming' => 'Язык программирования ',
	'bb2_programming' => 'PHP',
	'ip_programming' => 'PHP',
	'bb3_programming' => 'PHP',

	'item_latest' => 'Latest Version',
	'bb2_latest' => '2.0.22',
	'ip_latest' => '1.3.0.53',
	'bb3_latest' => '3.0.2',

	'item_release' => 'Release Date',
	'bb2_release' => '2008/02/17',
	'ip_release' => '2009/07/18',
	'bb3_release' => '2008/07/10',

/*********/
	'cat_basic_features' => 'Основные характеристики',

 'item_utf8' => 'Поддержка UTF-8',
 'item_user_preferences' => 'Пользователь Преференс',
 'item_mod' => 'Замедление',
 'item_admin' => 'Администрирование',
 'item_search_engine' => 'Обработка паука Поискового механизма',
 'item_un_mess_track' => 'Непрочитанный трекинг сообщения',
 'item_pms' => 'Частная Система обмена сообщениями',
 'item_stat' => 'Статистика',

/*********/
	'cat_security' => 'Безопасность',

 'item_perm_ban' => 'Постоянные Запреты',
 'item_temp_ban' => 'Временные Запреты (Приостановка)',
 'item_permission' => 'Разрешения',
 'item_paid_sec' => 'Заплаченная Проверка соответствия программы спецификациям Безопасности',
 'item_form_hand' => 'Обработка Формы',
 'item_t_a_p_h' => 'Печатают Осведомленную Обработку Параметра',
 'item_t_a_d_l' => 'Печатают Осведомленный Уровень Базы данных',
 'item_p_h' => 'Хеширование Пароля',

/*********/
	'cat_antispam' => 'Против спама',

 'item_c_v_c' => 'CAPTCHA Визуальное Подтверждение',
 'item_f_c' => 'Борьба с наводнениями',
 'item_groups' => 'Группы',
 'item_acls' => 'ACLs',
 'item_b_l' => 'Черный список',
 'item_banning' => 'Запрет',
 'item_suspension' => 'Приостановки',
 'item_warn' => 'Предупреждения',
 'item_u_l' => 'Пользователь, Регистрирующий',
 'item_u_p_ip_l' => 'Пользовательская Регистрация IP Поста',
 'item_r_p' => 'Сообщают Посты',
 'item_post_m' => 'Почтовое Замедление',

/*********/
	'cat_datamanagement' => 'Управление данными',

 'item_mysql' => 'MySQL',
 'item_mssql' => 'Сервер MSSQL',
 'item_mssql_odbc' => 'MSSQL ODBC',
 'item_postgre' => 'PostgreSQL',
 'item_ms_access' => 'Доступ MS',
 'item_oracle' => 'Оракул',
 'item_firebird' => 'Firebird',
 'item_sql_lite' => 'SQL_Lite',
 'item_db_back' => 'База данных (система управления базой данных) Резервные копии',
 'item_db_restore' => 'База данных (система управления базой данных) Восстановление',
 'item_p_t_pruning' => 'Пост / Отсечение возможных решений Темы',

/*********/
	'cat_registration' => 'Регистрация',

 'item_coppa' => 'Регистрация COPPA',
 'item_l_r_a' => 'Регистрационные Попытки Предела',
 'item_username_lenght' => 'минимум Набора / максимальная Длина Имени пользователя',
 'item_pass_lenght' => 'минимум Набора / максимальная Длина Пароля',
 'item_l_u_c' => 'Символы Имени пользователя Предела',
 'item_s_p_c_r' => 'Требования Сложности Пароля Набора',
 'item_f_p_c' => 'Изменение Пароля Силы',
 'item_e_mail_address_reusage' => 'Позволяют / Отвергают почтовое Переиспользование Адреса',

/*********/
	'cat_posting' => 'Почтовое отправление',

 'item_t_d_m' => 'Метод Дисплея Темы',
 'bb2_t_d_m' => 'Квартира',
 'ip_t_d_m' => 'Квартира',
 'bb3_t_d_m' => 'Квартира',

 'item_bbcode' => 'BBCode',
 'item_bbcode_custom' => 'Заказные Кнопки BBCode',
 'item_html_in_post' => 'HTML в постах',
 'item_emoticon' => 'Smilies / Эмотиконы',
 'item_quoting' => 'Цитирование',
 'item_q_m_p' => 'Цитируют Множественные Посты',
 'item_f_t' => 'Панель форматирования',
 'item_w_c' => 'Цензоры Word',
 'item_s_h' => 'Выделение Синтаксиса',
 'item_attachments' => 'Вложения',
 'item_p_d' => 'Переносят Проекты',
 'item_polls' => 'Опросы',
 'item_m_p_o_v' => 'Малтипл Пол Опшн, Голосующий',
 'item_u_b_p_t' => 'Пользователь базировал Трекинг Опроса',
 'item_all_dis_v_c' => 'Позволяют / Отвергают Изменение Голосования',
 'item_beaten_p_review' => 'Избитый к почтовому отправлению Обзор',
 'item_p_p' => 'Переносящий Предварительный просмотр',
 'item_flood_control' => 'Борьба с наводнениями',

/*********/
	'cat_attachments' => 'Вложения',

 'item_a_i_t' => 'Автоматические Эскизы Изображения',
 'item_a_t' => 'Типы Вложения',
 'item_m_a' => 'Множественные Вложения',
 'item_a_p' => 'Размещение Вложения',

/*********/
	'cat_caching' => 'Кэширование',

 'item_db_q_c' => 'Кэширование Запроса Базы данных',
 'item_t_c' => 'Кэширование Шаблона',
 'item_a_d' => 'Произвольные Данные',
 'item_m_c_r' => 'Ручная Регенерация Кэша',

/*********/
	'cat_profile' => 'Конфигурация / Memberlist',

 'item_c_p_f' => 'Заказные Поля Конфигурации',
 'item_u_p_s' => 'Пользователь, Переносящий Стэтса',
 'item_u_i_m' => 'Пользовательские Мессенджеры Момента',
 'item_u_p_d' => 'подробности Параметра пользователя',
 'item_m_list_search' => 'Поиск Memberlist',
 'item_u_m_v' => 'Отвергают Нерегистрированному Пользователю Мемберлисту, Рассматривающему',

/*********/
	'cat_search_system' => 'Поисковая система ',

	'item_ft_n' => 'Уроженец Fulltext',
 'item_c_t_s' => 'Настроенный Поиск Темы',
 'item_c_f_s' => 'Настроенный Поиск Форума',
 'item_my_sql_text' => 'MySQL fulltext',
 'item_a_s' => 'Поиск Автора',
 'item_a_search' => 'Усложненный запрос',
 'item_v_a_post' => 'Посмотреть оставшиеся без ответа сообщения ',
 'item_a_n_t' => 'Активный / Новые Темы',
 'item_p_s_l_v' => 'Сообщения Начиная с Последнего Посещения',
 'item_s_f_l' => 'Борьба с наводнениями Поиска',

/*********/
	'cat_forums' => 'Форумы',

	'item_categories' => 'Категории',
'item_p_p_f' => 'Защищённые паролем Форумы',
 'item_f_s_s' => 'Форум Определенные Стили',
 'item_url_l_r_f' => 'Ссылка URL Переадресовывают Форумы',
 'item_f_rules' => 'Правила Форума',
 'item_subforum' => 'Подфорумы',
 'item_last_post' => 'Сигнал отбоя',
 'item_forum_pruning' => 'Отсечение возможных решений Форума',
 'item_d_a_t' => 'Отображают Активные Темы',
 'item_s_t_forums' => 'Подписаться на Форумы',
 'item_s_t_topics' => 'Подписаться на Темы',
 'item_b_t' => 'Отметить Темы',
 'item_t_s' => 'Сортировать Темы',
 'item_p_s' => 'Сортировать Сообщения',
 'item_t_p_t' => 'Трекинг Участия Темы',
 'item_print_t' => 'Печатают Темы',
 'item_e_mail_t' => 'Посылают по электронной почте Темы',

/*********/
	'cat_ucp' => 'Панель управления ',

	'item_u_s' => 'Пользователь Сиг',
 'item_u_a' => 'Аватар Пользователь',
 'item_u_ranks' => 'Ранг Пользователь ',
 'item_u_o_l' => 'Пользователи Онлайн Перечисляют',
 'item_user_p' => 'Пользователь Преференс',
 'item_u_p_s' => 'Параметры настройки Параметра пользователя',
 'item_m_s_pm_post_d' => 'Справляются Сохраненный pm / Переносят Проекты',
 'item_m_book' => 'Управляют Закладками',
 'item_m_attach' => 'Управляют Вложениями',
 'item_m_s_t' => 'Управляют Подписанными Темами',
 'item_c_p_f' => 'Заказные Поля Конфигурации',
 'item_friend_foe_list' => 'Друзья / Список Противника',

/*********/
	'cat_priv_messaging' => 'Личные сообщения ',

	'item_add_pm_folder' => 'Дополнительные папки',
	'item_custom_pm_filter' => 'Настраиваемые правила фильтрации',
	'item_send_multiple_reci' => 'Отправить нескольким адресатам ',
	'item_send_blind_carbon' => 'Отправить скрытую копию углерода ',
	'item_send_to_group' => 'Отправить группы ',
	'item_f_message' => 'Пересылать сообщения ',
	'item_a_book' => 'Адресная книга ',
	'item_message_d' => 'Сообщение Черновики ',
	'item_exp_mess' => 'Экспортировать сообщения ',
	'item_attach_message' => 'Вложения для сообщений ',
	'item_convers_view' => 'Просмотр цепочки ',
	'item_c_m_h_r' => 'Текст сообщения правил обращения с ',

/*********/
	'cat_usergroups' => 'Группы пользователей ',

	'item_g_t' => 'Типы Группы',
 'item_ucp_group_manage' => 'Управление Группы UCP',
 'item_ucp_group_manage_membership' => 'UCP Управляют Членствами Группы',
 'item_m_g_l' => 'Множественные Лидеры Группы',
 'item_c_g_c' => 'Заказные Цвета Группы',
 'item_group_ranks' => 'Ранги Группы',
 'item_group_avatar' => 'Аватары Группы',
 'item_group_based_memberlist' => 'Группа базировал Дисплей Memberlist',

/*********/
	'cat_mcp' => 'Панель управления Модератора',

 'item_global_moder' => 'Глобальные Модераторы',
 'item_forum_moder' => 'Модераторы Форума',
 'item_t_post_m_q' => 'Темы / Переносит Очередь модератора',
 'item_m_r_t_p' => 'Справляются, Сообщили Темы / Посты',
 'item_t_h' => 'Хронология Темы',
 'item_f_t_logs' => 'Форум / Файлы регистрации Темы',
 'item_l_m_l' => 'Ограниченные Файлы регистрации Модератора',
 'item_p_e' => 'Редактирование Поста',
 'item_p_l' => 'Блокировка Поста',
 'item_post_details' => 'Переносят Подробности',
 'item_c_p_author' => 'Автор Поста Изменения',
 'item_quick_mod_tools' => 'Инструментальные средства Quick_Mod',
 'item_moving_t' => 'Двигающиеся Темы',
 'item_m_m_t' => 'Перемещают Множественные Темы',
 'item_merging_t' => 'Объединение Темы',
 'item_merging_p' => 'Объединение сообщений',
 'item_merging_multiple_t' => 'Объединяемые Множественные Темы',
 'item_split_t' => 'Темы Разбиения',
 'item_locking_t' => 'Блокировка Тем',
 'item_deleting_t' => 'Удаление Тем',
 'item_copying_t' => 'Копирование Тем',
 'item_global_topics' => 'Глобальные Темы',
 'item_announcement_t' => 'Темы Объявления',
 'item_s_topics' => 'Липкие Темы',
 'item_mange_bans' => 'Управляют Запретами',
 'item_m_u_w' => 'Управляют Пользователем Варнингом',
 'item_banning_by_username' => 'Запрет Именем пользователя',
 'item_banning_by_email' => 'Запрет Почтовым Адресом',
 'item_banning_by_ip' => 'Запрет Адресом IP',
 'item_user_notes' => 'Пользователь Ноут',

/*********/
	'cat_acp' => 'Администрация Панель управления ',
'item_f_s_b_c' => 'Состояние Основателя / Создатель Совета',
 'item_l_s' => 'Загружают Параметры настройки',
 'item_p_i_u' => 'Сокращают Неактивных Пользователей',
 'item_m_r' => 'Управляют Рангами',
 'item_m_groups' => 'Управляют Группами',
 'item_m_group_membership' => 'Управляют Членствами Группы',
 'item_manage_attach_setting' => 'Управляют Вложениями и Параметры настройки',
 'item_manage_user_attachment' => 'Управляют Пользователем Аттэчментом',
 'item_user_editing' => 'Пользователь, Редактирующий',
 'item_list_group_index' => 'Группы Списка на Индексе',
 'item_topic_icons' => 'Значки Темы',
 'item_mass_e_mail' => 'Масса посылают по электронной почте',
 'item_manage_report_reasons' => 'Управляют Отчетом / Причины Отрицания',
 'item_module_manage' => 'Управление Модулем',
 'item_custom_bbcode' => 'Заказные BBCodes',
 'item_custom_profile_field' => 'Заказные Поля Конфигурации',
 'item_custom_profile_field_placement' => 'Заказные Опции Размещения Полей Конфигурации',
 'item_custom_profile_data_types' => 'Заказные Типы данных Полей Конфигурации',
 'item_manage_bans' => 'Управляют Запретами',
 'item_ban_by_username' => 'Запрет Именем пользователя',
 'item_ban_by_email' => 'Запрет Почтовым Адресом',
 'item_ban_by_ip' => 'Запрет Адресом IP',

/*********/
'cat_styles' => 'Стили',

 'item_s_style' => 'Выбрать Стили',
 'item_install_style' => 'Установить / Управлять Заказными Стилями',
 'item_custom_style' => 'Настроить / Редактировать Шаблоны',
 'item_custom_themes' => 'Настроить / Редактировать Темы',
 'item_custom_imageset' => 'Настроить / Редактировать Изображение',

/*********/
	'cat_permission' => 'Разрешение ',

	'item_g_b_g_p' => 'Группа, Основанная Глобальные Разрешения',
 'item_g_b_m_p' => 'Группа, Основанная Разрешения Модератора',
 'item_g_b_a_p' => 'Группа, Основанная Разрешения Администрирования',
 'item_g_b_f_p' => 'Группа, Основанная Разрешения Форума',
 'item_u_b_g_p' => 'Пользователь, Основанный Глобальные Разрешения',
 'item_u_b_m_p' => 'Пользователь, Основанный Разрешения Модератора',
 'item_u_b_a_p' => 'Пользователь, Основанный Разрешения Администрирования',
 'item_u_b_f_p' => 'Пользователь, Основанный Разрешения Форума',
 'item_admin_perm_roles' => 'Роли Разрешения Администрации',
 'item_user_perm_roles' => 'Пользовательские Роли Разрешения',
 'item_mod_perm_roles' => 'Роли Разрешения Модератора',
 'item_forum_perm_roles' => 'Роли Разрешения Форума',
 'item_mask_perm_multi' => 'Многоуровневые Маски Разрешения',

/*********/
	'cat_notifications' => 'Уведомления ',

	'item_e_mail_true' => 'E-mail',
	'item_instant_mess' => 'Мгновенный обмен сообщениями ',
	'item_book_m' => 'Закладки ',

/*********/
	'cat_localisations' => 'Локализация ',

	'item_s_m_l_p' => 'Поддержка нескольких языков локализации ',
	'item_language' => 'Языки ',
	'bb2_language' => '50+',
	'ip_language' => '6',
	'bb3_language' => '61',
	'item_right_t_left' => 'Справа налево поддержки ',
	'item_l_p_w_edit' => 'Локализация Web-редактор ',

/*********/
'cat_install' => 'Инсталляции / Обновления',

 'item_install_wizard' => 'Инсталляционный Мастер',
 'item_update_wizard' => 'Обновляют Мастера',
 'item_converter_wizard' => 'Мастер Конвертера',
 'item_file_merge_diff_engine' => 'Разность Слияния Файла Обновляют Механизм',

/*********/
	'cat_technical' => 'Технические характеристики ',

	'item_cms_integra' => 'CMS интеграции программного обеспечения ',
	'item_xhtml_compliant' => 'XHTML Соответствует ',

/*********/
	'cat_plugins' => 'Плагины ',

	'item_auth_plug' => 'Auth Плагины ',
	'item_search_plug' => 'Поиск плагинов ',
	'item_cache_plug' => 'Кэш Плагины ',
	'item_hooks_sys' => 'Крючки системы ',
	'item_expand_module' => 'Расширяемые модули ',

/*********/
	'cat_features' => 'Дополнительные Особенности',

 'item_feat_cms' => 'CMS',
 'item_feat_album' => 'Фотогалерея',
 'item_feat_downloads' => 'Загружает Систему',
 'item_feat_kb' => 'База знаний',
 'item_feat_links' => 'Связывает Систему',
 'item_feat_news' => 'Категории Новостей',
 'item_feat_stats' => 'Модули Статистики',
 'item_feat_contact_us' => 'Форма контактов',
 'item_feat_lofi' => 'Представление LoFi',
 'item_feat_ajax_shoutbox' => 'Чат',
 'item_feat_shoutbox' => 'Стандартный Shoutbox',
 'item_feat_calendar' => 'Календарь и Система Событий',
 'item_feat_pm_notifications' => 'pm На Новой Регистрации И День рождения',

/*********/
	'cat_features_acp' => 'Дополнительное пространство Показывает вспомогательный управляющий процессор',

 'item_feat_info' => 'Информация Сервера Во вспомогательном управляющем процессоре',
 'item_feat_db_mntnc' => 'Обслуживание Базы данных',
 'item_feat_mysqladmin' => 'Администрация MySQL',
 'item_feat_editable_f_r' => 'Многоязычные Доступные для редактирования часто задаваемые вопросы и Правила',
 'item_feat_multiple_ranks' => 'Множественные Ранги',

/*********/
 'cat_features_ucp' => 'Дополнительное пространство Показывает UCP',

 'item_feat_ajax_checks' => 'АЯКС Чекс На Регистрации',
 'item_feat_upi2db' => 'Непрочитанные сообщения в БД',
 'item_feat_custom_avatar' => 'Заказное Создание Аватара',
 'item_feat_profile_stats' => 'Статистика Конфигурации и Дополнительная Пользовательская Информация',
 'item_feat_user_self_deactivation' => 'Пользователь Сам Дезактивация',
 'item_feat_login_archive' => 'Хронология Входа в систему',

/*********/
 'cat_features_bbcodes' => 'Дополнительное пространство Показывает BBCodes',

 'item_feat_random_quotes' => 'Случайные Кавычки',
 'item_feat_bbcodes' => 'Интегрированный Блок BBCodes',
 'item_feat_acronyms' => 'Акронимы',
 'item_feat_autolinks' => 'Автоссылки',
 'item_feat_smiley_creator' => 'Создатель Улыбочки',

/*********/
 'cat_features_seo' => 'Дополнительное пространство Показывает SEO',

 'item_feat_url_rewrite' => 'Оптимизация SEO и Перезапись URL',
 'item_feat_rss' => 'Подача RSS',
 'item_feat_referrers' => 'Трекинг Referrers',
 'item_feat_referrers' => 'Трекинг Ботов',
 'item_feat_referrers' => 'Браузеры и Обнаружение OS',
 'item_feat_banners' => 'Заголовки и Управление Рекламами',

/*********/
 'cat_features_forum' => 'Дополнительное пространство Показывает Форум и Почтовое отправление',

 'item_feat_bin' => 'Хлам Тем',
 'item_feat_forum_icons' => 'Значки Форума',
 'item_feat_link_this_topic' => 'Связывают Эту Тему',
 'item_feat_edit_notes' => 'Редактируют Примечания',
 'item_feat_topic_prefixes' => 'Префиксы Темы',
 'item_feat_topic_description' => 'Описание Темы',
 'item_feat_rating' => 'Оценка Темы',
 'item_feat_thanks' => 'Благодарность Темы',
 'item_feat_topic_views' => 'Обозрения Темы',
 'item_feat_digests' => 'Обзоры Тем',
 'item_feat_upload_images' => 'Загрузка Изображений, Перенося',
 'item_feat_quick_reply' => 'Быстрый Ответ',
 'item_feat_social_bookmars' => 'Социальные Закладки',
 'item_feat_ftr' => 'Чтение Темы Силы',
 'item_feat_detailed_notifications' => 'Детальные Уведомления С Сообщениями',

//	'item_feat_' => '',
	)
);

?>