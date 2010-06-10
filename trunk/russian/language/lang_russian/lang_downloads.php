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
* (c) 2005 oxpus (Karsten Ude) <webmaster@oxpus.de> http://www.oxpus.de
* (c) hotschi / demolition fabi / oxpus
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
/*
* mod version string
*/
	'Dl_mod_version' => 'Download MOD v%s&nbsp;&copy;(c) 2002 - 2007 by Hotschi, Demolition Fabi, OXPUS',

/*
* general messages after successfull data managements
*/
	'Click_return_categoryadmin' => 'Нажмите %sздесь%  чтобы вернуться к категории администрации ',
	'Click_return_dl_config' => 'Нажмите %sздесь%  чтобы вернуться к конфигурации загрузки ',
	'Click_return_downloadadmin' => 'Нажмите %sздесь%  чтобы вернуться к администрации загрузки ',
	'Click_return_downloads' => 'Нажмите %sздесь%  чтобы вернуться к загрузки Категории ',
	'Click_return_download_details' => 'Нажмите %sздесь%  чтобы вернуться к загрузке ',
	'Click_return_file_management' => 'Нажмите %sздесь%  чтобы вернуться в файловый менеджер ',
	'Click_return_modcp_approve' => 'Нажмите %sздесь%  чтобы вернуться в несанкционированных загрузки ',
	'Click_return_modcp_manage' => 'Нажмите %sздесь%  чтобы вернуться к панели модератора  ',
	'Click_return_user_traffic_admin' => 'Нажмите %sздесь% для изменения трафика других пользователей ',
	'Click_return_usergroup_traffic_admin' => 'Нажмите %sздесь% для изменения движения другого группу, ',

/*
* message strings
*/
	'Dl_category_added' => 'Категория, добавленная',
 'Dl_category_updated' => 'Категория обновленна',
 'Dl_category_removed' => 'Категория удаленна успешно',
 'DL_upload_error' => 'Ошибка, передавая этот файл. Пожалуйста возвратитесь и повторите. <br/> Контакт администрация, если эта ошибка все еще существует.',
 'Dl_approve_overview' => 'есть %s неутвержденные загрузки. Нажмите в этом месте, чтобы одобрить их.',
 'Dl_approve_overview_one' => 'есть %s неутвержденная загрузка. Нажмите в этом месте, чтобы одобрить это.',
 'Dl_config_updated' => 'конфигурация Загрузки, сохраненная успешно',
 'Dl_confirm_cat_delete' => 'Вы действительно хотите удалить категорию <b> %s </b>?',
 'Dl_confirm_delete_multiple_files' => 'Вы действительно хотите удалить их <b> %d загрузки </b>?',
 'Dl_confirm_delete_single_file' => 'Вы действительно хотите удалить загрузку <b> %s </b>?',
 'Dl_delete_cat_and_files' => 'Удалить эту категорию и все файлы в ней',
 'Dl_delete_cat_confirm' => 'Выбирите категорию, для которой каждая загрузка будет перемещена, или использовать другую опцию',
 'Dl_delete_cat_only' => 'Удалить только эту категорию',
 'Dl_delete_file_confirm' => 'Также удаляют файл (ы)',
 'Dl_empty_category' => 'Эта категория не содержит загрузок',
 'Dl_no_access' => 'Нет доступа! <br/> <br/> Вы не имеете никаких прав загрузить этот файл!',
 'Dl_no_category' => 'нет никаких категорий. Добавьте новую категорию прежде, чем Вы установите любые разрешения.',
  'Dl_no_category_index' => 'Этот раздел загрузки не содержит категорий',
 'Dl_no_external_url' => 'Вы должны ввести правильный url, если Вы хотите представить внешнюю загрузку!',
 'Dl_no_filename_entered' => 'Вы должны выбрать файл, если Вы хотите передать его!',
 'Dl_no_groups_for_traffic' => 'Группы пользователей не найдены!!! <br/> <br/> Добавте группу пользователей прежде, чем Вы установите трафик загрузки для этого',
 'Dl_no_more_remain_traffic' => 'квота трафика для загрузок в %s был достигнут в течение этого месяца. Вы должны Ждать до следующего месяца или спросить администратора.',
 'Dl_no_permission' => 'Нет доступа! <br/> <br/> Вы не имеете никаких прав сделать это!',
 'Dl_no_upload_traffic' => 'Жаль, но никакого оставленного трафика загрузки. Пожалуйста войдите в контакт с администрацией, если Вы хотите передать этот файл',
 'Dl_path_not_exist' => 'путь категории <b> %s </b> не существует! <br/> Нажмите назад и вводят другое имя пути <br/> или создают эту папку с управлением файлами.',
 'Dl_permission_updated' => 'разрешения Загрузки, сохраненные успешно',
 'Dl_user_config_saved' => 'Пользовательская конфигурация для загрузок, обновленных успешно <br/> <br/> Нажмите %sЗдесь%s, чтобы возвратиться к загрузкам',
 'Download_added' => 'Загрузка была добавлена',
 'Download_removed' => 'Загрузка была удалена',
 'Download_updated' => 'информация была обновлена',
 'New_download' => 'новая загрузка была передана или обновлена. <br/> Нажмите %sЗдесь%s, чтобы пойти непосредственно в загрузки.',
 'Dl_confirm_cat_stats_delete' => 'действительно ли Вы уверены, что Вы хотите удалить статистику из категории <b> %s </b>?',
 'Dl_confirm_all_stats_delete' => 'действительно ли Вы уверены, что Вы хотите удалить всю статистику?',
 'Dl_confirm_cat_comments_delete' => 'действительно ли Вы уверены, что Вы хотите удалить комментарии из категории <b> %s </b>?',
 'Dl_confirm_all_comments_delete' => 'действительно ли Вы уверены, что Вы хотите удалить все комментарии?',
 'Dl_file_not_found' => '<b> файл %s не был найден! </b> <br/> <br/> Удостовертесь, что этот файл существует в папке %s!',
 'Dl_no_change_edit_time' => 'не регистрируют это обновление',
 'Dl_thumb_upload' => 'Изображение переданно успешно',
 'Dl_thumb_del' => 'Изображение удалено успешно',
 'Dl_thumb_to_big' => 'Изображение является слишком большим! <br/> Пожалуйста используйте меньший файл или изображение с меньшими размерностями. <br/> Использование обратная кнопка Вашего браузера, чтобы повторить загрузку.',
 'Dl_hotlink_permission' => 'Вам не разрешают загрузить этот файл, связываясь с администрацией!',
 'Dl_vc_permission' => 'код подтверждения для этой загрузки был неправильным. Пожалуйста возвратитесь и повторите.',
 'Dl_report_broken_vc_mismatch' => 'код подтверждения для этого отчета был неправильным. Пожалуйста возвратитесь и повторите.',
 'Dl_vc_not_found' => 'код подтверждения не мог быть найден. Пожалуйста возвратитесь и повторите.',
/*
* page descriptions
*/
	'Dl_page_dl_hackslist' => 'Список Хаков',
	'Dl_page_downloads' => 'Загрузки',

/*
* commands
*/
	'Add_new_download' => 'Добавить новаю загрузку',
 'Dl_add' => 'Добавить',
 'Dl_add_category' => 'Добавить категорию',
 'Dl_approve' => 'Одобрить',
 'Dl_check_file_sizes' => 'Проверяют размеры файла',
 'Dl_check_thumbnails' => 'Проверяют эскизы',
 'Dl_delete' => 'Удаляют',
 'Dl_down' => 'Вниз',
 'Dl_edit' => 'Редактирование',
 'Dl_go' => 'Искать',
 'Dl_klick_to_rate' => 'Норма',
 'Dl_lock' => 'Блокировка',
 'Dl_mark_all' => 'Отметить все',
 'Dl_move' => 'Двигать в',
 'Dl_set' => 'Набор',
 'Dl_unmark' => 'Снять все выделения',
 'Dl_up' => 'UP',
 'Dl_delete_cat' => 'Удалить Категорию',
 'Dl_stats_delete' => 'Удалить Статистику',
 'Dl_stats_delete_all' => 'Удалить всю Статистику',
 'Dl_comments_delete' => 'Удалить Комментарии',
 'Dl_comments_delete_all' => 'Удалить все Комментарии',
 'Dl_sub_sort_asc' => 'Вид все входы этого возрастания категории',
 'Dl_sub_sort_asc_zero' => 'возрастание категорий главного Вида',

/*
* categories related
*/
	'Dl_cat_description' => 'Описание',
 'Dl_cat_files' => 'Файлы',
 'Dl_cat_index' => 'Высший уровень',
 'Dl_cat_name' => 'Категория',
 'Dl_cat_parent' => 'Родительская категория',
 'Dl_cat_path' => 'Путь',
 'Dl_cat_title' => 'Загрузки - Категории',
 'Dl_choose_category' => 'Выбирите категорию',
 'Dl_mod_desc_allow' => 'Позволить детализировал описания',
 'Dl_must_approve' => 'Загрузки к этой категории должены быть одобрены',
 'Dl_statistics' => 'Допустить детализировал статистику',
 'Dl_stats_prune' => 'Сократить статистику',
 'Dl_stats_delete' => 'Удалить статистику',
 'Dl_stats_delete_all' => 'Удалить всю статистику',
 'Dl_comments_delete' => 'Удалить комментарии',
 'Dl_comments_delete_all' => 'Удалить все комментарии',
 'Dl_cat_traffic' => 'квота Трафика (в настоящее время aviable: %s)',
 'Dl_cat_traffic_off' => 'квота Трафика (в настоящее время прочь)',
 'Dl_cat_traffic_main' => '%s трафик уехал в эту категорию',
 'Dl_thumb_cat' => 'Позволяют эскизы',
 'Dl_approve_comments' => 'Автоматически одобряют каждый новый комментарий',
 'Dl_cat_rules' => 'Правила',

/*
* traffic related
*/
	'Dl_auto_traffic' => 'Автоматический трафик загрузки',
 'Dl_enable_post_traffic' => 'Допустить суммированию трафика для того, чтобы перенести',
 'Dl_group_auto_traffic' => 'Трафик для usergroups',
 'Dl_newtopic_traffic' => 'трафик Загрузки для каждой недавно созданной темы',
 'Dl_overall_traffic' => 'Трафик для всех файлов в месяц',
 'Dl_remain_overall_traffic' => 'Сохранение полным Трафиком в течение этого месяца:',
 'Dl_reply_traffic' => 'трафик Загрузки для каждого поста, ответа или кавычки',
 'Dl_traffic' => 'максимальный трафик',
 'Dl_user_auto_traffic' => 'Трафик для пользователей',
 'Single_user_traffic_title' => 'Трафик для отдельного пользователя',
 'Трафик' => 'Трафик',
 'Traffic_now' => 'В настоящее время на учетной записи',
 'Usergroup_traffic_title' => 'Трафик для членов usergroup',
 'Users_traffic_title' => 'Трафик для всех пользователей',
 'Dl_user_traffic_once' => 'Уменьшают пользовательский трафик только однажды за загрузку',
 'Dl_can_download_traffic' => 'Вы уже загрузили этот файл. <br/> администратор позволил Вам загружать снова, не платя трафик за это.',
 'Dl_can_download_traffic_footer' => '<b> администратор позволил Вам  загружать загруженные файлы снова, не платя трафик за них. </b> <br/> <br/>',
 'Traffic_all_users_admin_explain' => 'Добавляют или устанавливают трафик для всех пользователей.',
 'Traffic_single_user_admin_explain' => 'Добавляют или устанавливают трафик для отдельного пользователя.',
 'Traffic_usergroup_admin_explain' => 'Добавляют или устанавливают трафик для всех членов usergroup.',
 'Dl_auto_traffic_explain' => 'Набор трафик, который все пользователи или все члены usergroup будут получать каждый месяц для загрузок.',
/*
* auth values
*/
	'Dl_permissions_all' => 'разрешения Набора для всех пользователей',
 'Dl_auth_dl' => 'Загрузка',
 'Dl_auth_mod' => 'Умеренный',
 'Dl_auth_up' => 'Загрузка',
 'Dl_auth_view' => 'Представление',
 'Dl_permissions' => 'Разрешения для членов следующих usergroups',
 'Dl_stop_uploads' => 'Отключают загрузки',
 'Dl_stat_perm' => 'Разрешение к странице статистики от userlevel',
 'Dl_stat_perm_all' => 'Все',
 'Dl_stat_perm_user' => 'Регистрированные пользователи',
 'Dl_stat_perm_mod' => 'Загружают модераторы',
 'Dl_stat_perm_admin' => 'администраторы Совета',
 'Dl_auth_cread' => 'комментарии Чтения',
 'Dl_auth_cpost' => 'Пишут комментарии',
 'Dl_perm_all' => 'Все',
 'Dl_perm_reg' => 'Регистрированные Пользователи',
 'Dl_perm_grg' => 'Группы Пользователей',

/*
* hacks and mods related
*/
	'Dl_hack_autor' => 'Автор',
 'Dl_hack_autor_email' => 'Автор посылают по электронной почте',
 'Dl_hack_autor_website' => 'вебсайт Автора',
 'Dl_hack_dl_url' => 'Альтернативная Загрузка',
 'Dl_hack_version' => 'Версия Нудной работы',
 'Dl_hacklist' => 'Список в Hacklist',
 'Dl_hacks_list' => 'Hacklist',
 'Dl_mod_desc' => 'Как ультрасовременные работы',
 'Dl_mod_list' => 'Отображают дополнительную информацию',
 'Dl_mod_require' => 'Требует',
 'Dl_mod_test' => 'Мод проверка на/с',
 'Dl_mod_todo' => 'Todo',
 'Dl_mod_warning' => 'Предупреждения',

/*
* moderator panel
*/
	'Dl_modcp_approve' => 'Панель Модератора - Одобрить Загрузки',
 'Dl_modcp_edit' => 'Панель Модератора - Загрузка Редактирования',
 'Dl_modcp_manage' => 'Панель Модератора - Управлять Загрузками',
 'Dl_modcp_mod_auth' => 'Вы <b> можете </b> %sмодерировать эту категорию%s',

/*
* ACP file management
*/
	'Dl_check_filesizes_result' => 'Все файлы современны, и никакие ошибки не были найдены',
 'Dl_check_filesizes_result_error' => 'следующие файлы не могут быть проверены:',
 'Dl_manage' => 'Управление Файла',
 'Dl_manage_content_count' => '%s Входы',
 'Dl_manage_create_dir' => 'Создать эту папку',
 'Dl_manage_empty_folder' => 'Эта папка пуста...',
 'Dl_manage_explain' => 'Управляют файлами загрузок. Вы можете использовать следующие функции: <br/> <br/> - Удаляют, или перемещение отменило файлы <br/> - Объединение назначенные файлы без существующей категории к существующему <br/> - Обзор, файлы (<i> Значение по умолчанию после открытия управления </i>) <br/> - Создают новую папку <br/> - Удаляют пустые папки <br/> - Проверка размер файла для каждого не внешняя загрузка <br/> <br/> <b> Внимание: </b> <br/> Этот инструмент не будет заменять клиента FTP! <br/> Функции как передача, перемещение каждого файла или замена файлов не возможны с этим инструментом!',
 'Dl_physical_quota' => 'Физическая квота полные файлы',
 'Dl_unassigned_files' => 'Проверить отмененные загрузки',

/*
* statistics
*/
	'Dl_latest_downloads' => 'Последние Загрузки',
 'Dl_latest_uploads' => 'Последние Загрузки',
 'Dl_downloads_cur_month' => 'Загрузки за Текущий Месяц',
 'Dl_downloads_overall' => 'Загрузки Повсюду',
 'Dl_downloads_count' => 'Загрузки',
 'Dl_downloads_traffic' => 'Повсюду Загружают Трафик',
 'Dl_uploads_count' => 'Загрузки',
 'Dl_uploads_traffic' => 'Повсюду Передают Трафик',
 'Dl_pos' => 'На месте продажи',
 'Dl_time' => 'Время',
 'Dl_stats' => 'Загружают статистику',
 'Dl_direction' => 'Действие',
 'Dl_browser' => 'Web-браузер',
 'Dl_ip' => 'Адрес IP',
 'Dl_traffic_cur_month' => 'Трафик в этом месяце',
 'Dl_traffic_overall' => 'Трафик повсюду',
 'Dl_guest_stat_delete' => 'Удаляют все данные для гостей',
 'Dl_no_filter' => '-никакой фильтр - ',
 'Dl_total_entries' => 'Найденные Входы',
 'Dl_filter' => 'Фильтр',
 'Dl_filter_string' => 'Использование * или % как указатель места заполнения',
 'Dl_guest_stats_admin' => 'Показывают данным гостей также',
 'Dl_stat_edit' => 'отредактированный',

/*
* comments
*/
	'Dl_comment' => 'Комментарий',
 'Dl_comments' => 'Комментарии',
 'Dl_last_comment' => 'Последний комментарий',
 'Dl_post_comment' => 'Написали',
 'Dl_view_comments' => 'Показ',
 'Dl_comment_edited' => 'Комментарий, последний отредактированный на %s',
 'Dl_comment_write' => 'Писать комментарий',
 'Dl_comment_show' => 'Показывают всем комментариям для этой загрузки',
 'Dl_comment_delete' => 'Удалить',
 'Dl_comment_edit' => 'Редактирование',
 'Dl_comment_added' => 'Комментарий успешно добавил',
 'Dl_comment_updated' => 'Комментарий, успешно обновленны',
 'Dl_must_be_approve_comment' => 'Этот комментарий должен быть одобрен модератором или администратором!',
 'Dl_approve_overview_one_comment' => 'есть один неутвержденный комментарий. Нажмите текст, чтобы проверить.',
 'Dl_approve_overview_comments' => 'есть %s неутвержденные комментарии. Нажмите текст, чтобы проверить их.',

/*
* ACP management main page
*/
	'Dl_acp_traffic_management' => 'Управление квотами трафика и авто предварительные наборы',
 'Dl_acp_categories_management' => 'Управление категориями и их разрешения',
 'Dl_acp_config_management' => 'Набор общая конфигурация',
 'Dl_acp_files_management' => 'Управление загрузками',
 'Dl_acp_stats_management' => 'Представление и статистика проверки',
 'Dl_acp_managemant_page' => 'Загрузить Мод администрирование',
 'Dl_acp_managemant_page_explain' => 'параметры настройки Администрирования и функции для МОДА Загрузки. <br/> Выбирают одну из функций ниже, чтобы изменить ее параметры настройки.',
/*
* global strings
*/
	'Dl_account' => 'у Вас есть <b> %s </b> трафик, оставленный в этом месяце.',
 'Dl_add_user' => 'Эта загрузка прибавляет <b> %s </b> <b> %s </b>',
 'Dl_all' => 'Все',
 'Dl_Bytes' => 'B',
 'Dl_Bytes_long' => 'Байты',
 'Dl_change_user' => 'и последний отредактированный на <b> %s </b> <b> %s </b>',
 'Dl_config' => 'конфигурация Загрузки',
 'Dl_days' => 'Дни',
 'Dl_default_sort' => 'сортировка Значения по умолчанию',
 'Dl_delay_auto_traffic' => 'авто трафик Задержки для нового Пользователя',
 'Dl_delay_post_traffic' => 'трафик Задержки для постов для нового Пользователя',
 'Dl_direct_download' => 'прямой',
 'Dl_detail' => 'Подробности',
 'Dl_disable_email' => 'Отключают, регистрируют за электронную почту',
 'Dl_disable_popup' => 'Отключают, регистрируют при содействии всплывающего сообщения / сообщения платы',
 'Dl_disable_email_files' => 'Отключают, регистрируют за электронную почту',
 'Dl_disable_popup_files' => 'Отключают, регистрируют при содействии всплывающего сообщения / сообщения платы',
 'Dl_download' => 'Загрузка',
 'DL_edit' => 'Обновленная загрузка',
 'DL_edit_time' => 'Число дней отредактированная загрузка будет отмечен',
 'Dl_extern' => 'Внешний',
 'Dl_extern_up' => 'Внешний',
 'Dl_file_description' => 'Описание',
 'Dl_file_name' => 'Файл',
 'Dl_file_size' => 'Размер',
 'Dl_files_title' => 'Файлы',
 'Dl_files_url' => 'URL',
 'Dl_free' => 'Бесплатная закачка',
 'Dl_function' => 'Функция',
 'Dl_GB' => 'Гб',
 'Dl_group_name' => 'Названия группы',
 'Dl_guest_stats_show' => 'Показывают гостям в детальной статистике категории',
 'Dl_hotlink_action' => 'действие Ссылки для прямых ссылок загрузки',
 'Dl_hotlink_action_one' => 'переадресовывают к подробностям',
 'Dl_hotlink_action_two' => 'отображают сообщение',
 'Dl_info' => 'Информация',
 'Dl_is_free' => 'Бесплатная закачка',
 'Dl_is_free_reg' => 'Бесплатный для регистрированных пользователей',
 'Dl_KB' => 'Кб',
 'Dl_klicks' => 'Загрузок за Месяц',
 'Dl_last_time' => 'Последняя загрузка на <b> %s </b>',
 'Dl_last_time_extern' => 'Последняя загрузка от внешнего URL на <b> %s </b>',
 'Dl_limit_desc_on_index' => 'Ограничивают описания Загрузки на Индексе',
 'Dl_Links_per_page' => 'Загрузки за страницу',
 'Dl_MB' => 'Мб',
 'Dl_method' => 'метод Загрузки',
 'Dl_method_new' => 'Новый',
 'Dl_method_old' => 'Старый',
 'Dl_method_quota' => 'Квота для chunked файла читают метод',
 'Dl_modcp_capprove' => 'Одобрить комментарии',
 'Dl_must_be_approved' => 'Эта загрузка должен быть одобрен администратором или модератором этой категории.',
 'Dl_name' => 'Название',
 'DL_new' => 'Новая загрузка',
 'DL_new_time' => 'Количество дней новая загрузка будет отмечен',
 'Dl_no' => 'Нет',
 'Dl_no_config' => 'Пользовательская блокированная конфигурация',
 'Dl_no_last_time' => 'нет загрузки рассчитывал до сих пор...',
 'Dl_no_mod_todo' => 'Нет Мод Тодо \пока',
 'Dl_not_availible' => 'Не availible',
 'Dl_order' => 'Вид',
 'Dl_overall_klicks' => 'Полные нажатия',
 'Dl_klicks_total' => 'Нажимов в Месяц / Общее количество',
 'Dl_overview' => 'список Overview для всех загрузок',
 'DL_posts' => 'Число Постов пользователь должен получить доступ загрузки',
 'Dl_prevent_hotlink' => 'Предотвращают ссылки от прямых загрузок',
 'Dl_rating' => 'Оценка',
 'Dl_real_filetime' => 'Последняя модификация файла',
 'Dl_search_author' => 'Для пользователей, которые передали или изменили загрузки',
 'Dl_show_footer_legend' => 'легенда Показа на нижнем колонтитуле загрузки',
 'Dl_show_footer_stat' => 'статистика Показа по нижнему колонтитулу загрузки',
 'Dl_show_real_filetime' => 'Показывают времени последней модификации файла на подробностях загрузки',
 'Dl_sort_preform' => 'Выполняют сортировку',
 'Dl_sort_acp' => 'Предварительно установленный',
 'Dl_sort_user' => 'Пользователь',
 'Dl_sort_user_opt' => 'Вид загружает для',
 'Dl_sort_user_ext' => 'с другими критериями',
 'Dl_thumb' => 'Изображение',
 'Dl_thumb_dim_size' => 'Изображение максимальный размер %s x %s пиксели, и размер файла должен быть меньшим чем %s.',
 'Dl_thumb_max_dim' => 'Максимальный размер в пикселях X * Y',
 'Dl_thumb_max_size' => 'Максимальный размер файла изображения',
 'Dl_total_stat' => 'есть полные загрузки %s с размером %s / %s включая %s внешние Загрузки.',
 'Dl_unapproved' => '<br/> <span = "gensmall"> [неутвержденный] </span>',
 'Dl_upload' => 'Передают файл',
 'Dl_upload_file' => 'Загрузка',
 'Dl_upload_max_filesize' => 'Максимальный размер файла, который позволен для загрузок: %s',
 'Dl_upload_traffic' => 'размер файла загрузок уменьшит полный трафик. Расцените это при выборе размера файла!',
 'Dl_upload_traffic_count' => 'Также уменьшают полный трафик для загрузок',
 'Dl_use_hacklist' => 'Активизируют hacklist',
 'Dl_users_without_group' => 'Пользователи без членства в usergroup',
 'Dl_white_explain' => 'Бесплатная закачка без трафика значат регистрированных пользователей',
 'Dl_yes' => 'Да',
 'Dl_yes_reg' => 'Да для <br/> reg. Пользователь',
 'Download_path' => 'Путь к Вашим загрузкам, например, <b> загружает / </b>',
 'Загрузки' => 'Загрузки',
 'Must_select_download' => 'Выбирают загрузку.',
 'Number_recent_dl_on_portal' => 'Число недавних загрузок, которые отображены на портале',
 'Recent_downloads' => 'Недавние загрузки',
 'User_allow_fav_download_email' => 'Допускают электронным почтам для изменений к любимым загрузкам',
 'User_allow_fav_download_popup' => 'Допускают плате messag для изменений к любимым загрузкам',
 'User_allow_new_download_email' => 'Допускают электронным почтам для новых загрузок',
 'User_allow_new_download_popup' => 'Допускают сообщению платы для новых загрузок',
 'User_download_email' => 'Электронная почта <br/> уведомление',
 'User_download_popup' => 'Совет <br/> Сообщение',
 'User_download_notify_type' => 'Тип сообщения платы',
 'User_download_notify_type_popup' => 'Всплывающий',
 'User_download_notify_type_message' => 'Сообщение на борту заголовка',
 'Dl_edit_own_downloads' => 'Пользователь может редактировать собственные файлы',
 'Dl_report_confirm_code' => 'Пожалуйста введите код подтверждения здесь, чтобы сообщить об этой загрузке как ломающийся:',
 'Dl_shorten_extern_links' => 'Сокращают отображенную внешнюю ссылку загрузки',
 'Dl_physical_quota_explain' => 'Если эта квота (в настоящее время %s в использовании) достигнута, больше загрузок, будет позволен',
'Dl_blue_explain' => 'Больше полного трафика уехал!',
  'Dl_blue_explain_file' => 'Больше трафика файла уехал!',
  'Dl_blue_explain_foot' => 'Больше полного трафика или трафика файла/категории уехал!',
 'Dl_green_explain' => 'Загрузка! Никакие дедукции от учетной записи пользователя.',
 'Dl_grey_explain' => 'Загрузка! Внешний источник. Никакие дедукции от учетной записи пользователя.',
 'Dl_red_explain' => 'Недостаточно трафика или постов <br/> (%s требуемые посты). Не рассылайте спам! Спаммеры будут автоматически блокированы!',
 'Dl_red_explain_alt' => 'Недостаточно трафика или постов (%s требуемые посты). Не рассылайте спам! Спаммеры будут автоматически блокированы!',
 'Dl_red_explain_perm' => 'Никакие права загрузить!',
 'Dl_yellow_explain' => 'Загрузка! Трафик будет вычитаться от учетной записи пользователя.',
 'Dl_config_explain' => 'Включает или отключает различные функции и/или параметры настройки.',
 'Dl_cat_edit_explain' => 'Управляют категориями для МОДА Загрузки.',

/*
* build in add on cash to traffic
*/
	'Dl_cash_to_traffic' => 'Обменные наличные деньги к трафику',
 'Dl_cash_to_traffic_explain' => 'Набор обмен между наличными валютами и трафиком загрузки. Обмен изменит одну полную стоимость валюты к введенному количеству трафика.',
 'Dl_cash_currency' => 'Наличная валюта',
 'Dl_cash_exchange' => 'Обмен: 1 %s в %s трафик',
 'Dl_cash_current_amount' => 'у Вас есть %s %s',

/*
* new on Download MOD 5.0.10: Blacklist for filetypes
*/
	'Dl_ext_blacklist' => 'Поместить в черный список идентификаторы типа файла',
 'Dl_use_ext_blacklist' => 'Включить черный список для идентификаторов типа файла',
 'Dl_extention' => 'Новый запрещенный файл extention',
 'Dl_extentions' => 'Запрещенный extentions файла' ,
 'Dl_add_extention' => 'Добавляют Файл extention',
 'Dl_confirm_delete_extention' => 'действительно ли Вы уверены, что Вы хотите понизить extention <b> %s </b>?',
 'Dl_confirm_delete_extentions' => 'действительно ли Вы уверены, что Вы хотите понизить extentions <b> %s </b>?',
 'Dl_delete_extention_confirm' => 'файл Снижения extention от черного списка',
 'Dl_delete_extentions_confirm' => 'файл Снижения extentions от черного списка',
 'Extention_removed' => 'Файл extention успешно пониженный от черного списка.',
 'Extentions_removed' => 'Файл extentions успешно пониженный от черного списка.',
 'Click_return_extblacklistadmin' => 'Нажмите %sЗдесь%s, чтобы возвратить Файлу extention черный список',
 'Dl_forbidden_extention' => 'Этот файл extention в настоящее время не позволяется! <br/> Пожалуйста возвратитесь и используйте другой тип файла.',
 'Dl_forbidden_ext_explain' => 'Запрещенный файл extentions: %s',
 'Dl_ext_blacklist_explain' => 'Вводят файл extentions, которые должны быть не пущены в передачу с этим МОДом. <br/> запрещенный файл extentions добавленный в Ледяном вспомогательном управляющем процессоре Финикса будет также использоваться. <br/> Это doesn \'t включают существующие загрузки.',
/*
* new on Download MOD 5.0.12: Disable time edit informations
*/
	'Dl_disable_popup_notify' => 'Разрешить отключение исправления информацию времени скачек',

/*
* new on Download MOD 5.0.15: Banlist and report broken downloads
*/
	'Dl_acp_banlist' => 'Бан Лист',
 'Dl_user_id' => 'Пользовательский ID',
 'Dl_confirm_delete_ban_values' => 'действительно ли Вы уверены, что Вы хотите удалить эти banlist входы?',
 'Dl_banlist_updated' => 'Banlist, успешно обновленный',
 'Dl_banned' => 'Вы запрещены и неспособны загрузить любой файл!',
 'Click_return_banlistadmin' => 'Нажмите %sЗдесь%s, чтобы возвратиться к banlist',
 'Dl_broken' => 'Сообщить о плохой загрузке',
 'Dl_broken_mod' => 'Сброс сломанное состояние загрузки',
 'Dl_broken_cur' => 'Эта загрузка в настоящее время сообщают как ломающийся',
 'Dl_report_broken' => 'Позволяют сообщать сломанных загрузок',
 'Dl_a_guest' => 'гость',
 'Dl_favorite_add' => 'Уведомляют меня об изменениях к этой загрузке',
 'Dl_favorite_drop' => 'Удалить уведомления об этой загрузке',
 'Dl_favorite' => 'Загрузить Фаворитов',
 'Dl_acp_banlist_explain' => 'Вводят различные значения, чтобы запретить доступ к загрузкам. <br/> Каждое значение будет использоваться одновременно, даже если они будут введены как один набор данных.',
/*
* new on Download MOD 5.1.0
*/
	'Dl_report_broken_lock' => 'Отключить загрузку, в то время как о ней сообщают как ломающийся',
 'Dl_report_broken_message' => 'примечание отображения о сломанной загрузке, только если это также заблокировано',
 'Dl_report_broken_vc' => 'Дают возможность визуальному подтверждению сообщить о сломанной загрузке',
 'Dl_visual_confirmation' => 'Дают возможность визуальному подтверждению загрузить файл',
 'Dl_off_guests' => 'Не для гостей',

/*
* new on Download MOD 5.1.1
*/
	'Dl_icon_free_for_reg' => 'Display the white download icon for guests',

/*
* new on Download MOD 5.1.3
*/
	'Dl_latest_comments' => 'Displays the latest X comments on download details',

/*
* new on Download MOD 5.2.0 - The Bug Tracker !!!!!!!!!!!! -------------  * :-(((((
*/
	'Dl_bug_tracker' => 'Ошибки Трэкера',
 'Dl_bug_tracker_file' => 'для этой загрузки',
 'Dl_bug_tracker_cat' => 'Допускают Буксиру Ошибки',

 'Confirm_delete_bug_report' => 'действительно ли Вы уверены, что Вы хотите удалить это сообщение об ошибках?',
 'Dl_bug_report_id' => 'идентификатор Отчета',
 'Dl_bug_report_title' => 'Заголовок Отчета',
 'Dl_bug_report_title_details' => 'Отчет',
 'Dl_bug_report_text' => 'Описание',
 'Dl_bug_report_date' => 'Явился',
 'Dl_bug_report_php' => 'PHP',
 'Dl_bug_report_db' => 'ДБ',
 'Dl_bug_report_forum' => 'Форум',
 'Dl_bug_report_file' => 'Загрузка',
 'Dl_bug_report_author' => 'Сообщенный',
 'Dl_bug_report_assigned' => 'Назначенный на',
 'Dl_bug_report_assign_date' => 'Назначенный в',
 'Dl_bug_report_status' => 'Состояние',
 'Dl_bug_report_status_date' => 'В прошлый раз состояния',
 'Dl_bug_report_detail' => 'Подробности',
 'Dl_bug_report_history' => 'Хронология',
 'Dl_bug_report_reassign' => 'переназначают',
 'Dl_bug_report_assign' => 'назначают',
 'Dl_bug_report_unassigned' => 'отмененный',
 'Dl_no_bug_tracker' => 'Никакие найденные отчеты',
 'Dl_bug_report_no_title' => 'Вы не ввели заголовок для этого сообщения об ошибках!',
 'Dl_bug_report_no_text' => 'Вы не ввели описание для этого сообщения об ошибках!',
 'Dl_bug_report_added' => 'Сообщение об ошибках успешно добавил',
 'Click_return_bug_tracker' => 'Нажvbnt %sPltcm%s, чтобы возвратиться к буксиру ошибки.',
 'Dl_bug_report_status_text' => 'текст Some для нового состояния (будет послан за электронную почту автору этого сообщения об ошибках)',
 'Dl_bug_report_status_update' => 'обновляют состояние',
 'Dl_filter_bt_own' => 'Показывают моим отчетам',
 'Dl_filter_bt_assign' => 'Показывают моему assigns',

 'Dl_user_download_limit_flag' => 'число Предела загрузок в месяц',
 'Dl_user_download_limit' => 'Максимальное число загрузок в месяц',
	)
);

$lang['Dl_report_status'][0] = 'новый ';
$lang['Dl_report_status'][1] = 'рассматривать ';
$lang['Dl_report_status'][2] = 'в ходе ';
$lang['Dl_report_status'][3] = 'в ожидании ';
$lang['Dl_report_status'][4] = 'финиш ';
$lang['Dl_report_status'][5] = 'упал ';
$lang['Dl_bug_report_email_status'] = 'Это сообщение для нового статуса :
--------------------
%s
--------------------';

?>