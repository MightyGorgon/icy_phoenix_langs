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
* Vjacheslav Trushkin (http://www.stsoftware.biz)
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
	'Extreme_Styles' => 'eXtreme стили',
'xs_title' => 'МОД eXtreme стилей',

'xs_file' => 'Файл',
'xs_template' => 'Шаблон',
'xs_id' => 'ID',
'xs_style' => 'Стиль',
'xs_styles' => 'Стили',
'xs_users' => 'Пользователи',
'xs_options' => 'Опции',
'xs_comment' => 'Коментарии',
'xs_upload_time' => 'Время загрузки',
'xs_select' => 'Выбрать',

'xs_continue' => 'Продолжить',       // кнопка

'xs_click_here_lc' => 'нажать',
'xs_edit_lc' =>'Редактировать',


/*
* navigation
*/
	'xs_config_shownav' => array(
		 'Конфигурация',
        'Установить стиль',
        'Удалить стиль',
        'Стиль по умолчанию',
        'Править Кеш',
        'Импорт стилей',
        'Экспортировать стиль',
        'Клонировать стиль',
        'Скачать стиль',
        'Редактировать шаблоны',
        'Редактировать стиль',
        'Экспортировать базу',
        'Проверка обновлений',
	),

/*
* frame_top.tpl
*/
	'xs_menu_lc' => 'Меню мода extreme стилей ',
'xs_support_forum_lc' => 'Форум поддержки',
'xs_download_styles_lc' => 'Загрузить стили',
'xs_install_styles_lc' => 'Установить стили',

/*
* index.tpl
*/

	'xs_main_comment1' => 'Это меню мода eXtreme стилей. Есть довольно много функций в пределах этого интерфейса, так что эта страница - здесь как пример.<br /><br />Обратите внимание: Этот мод заменяет phpBB управление стилей. Вы найдете те же функции что и по умолчанию в phpBB , но эти функции теперь оптимизированы и имеют дополнительные возможности.<br /><br />Если у вас есть любые вопросы, пожалуйста посетите <a href="http://www.phpbbstyles.com" target="_blank">форум поддержки</a> где вы можете получить помощь для этого мода.',
'xs_main_comment2' => 'Мод eXtreme стилей позволяет admin хранить полные стили в .style files. Стили сохранены в маленьком сжатом файле, это экономит время скачивания/загрузки большого количества файлов. Файлы стиля сжаты так что скачивание/загрузка, намного более эффективенее чем скачивание/загрузка обычных файлов стиля.',
'xs_main_comment3' => 'Все функции phpBB управления стилями заменены модом eXtreme стили.<br /><br /><a href="{URL}">Нажать</a> для просмотра меню.',
'xs_main_title' => 'Меню управления eXtreme стилями',
'xs_menu' => 'Меню eXtreme стилей',

'xs_manage_styles' => 'Управление стилями',
'xs_import_export_styles' => 'Импорт/Экспорт стилей',
'xs_install_uninstall_styles' => 'Инсталировать/Деинсталировать стили',
'xs_edit_templates' => 'Редактировать шаблоны',
'xs_other_functions' => 'Другие функции',

'xs_configuration' => 'Конфигурация',
'xs_configuration_explain' => 'Здесь вы можете изменять конфигурацию eXtreme стилей.',
'xs_default_style' => 'Стиль по умолчанию',
'xs_default_style_explain' => 'Здесь вы можете изменять стиль форума по умолчанию и переключать пользователей с одного стиля на другой.',
'xs_manage_cache' => 'Управление кэшем',
'xs_manage_cache_explain' => 'Здесь вы можете управлять кэшированными файлами.',
'xs_import_styles' => 'Импортировать стили',
'xs_import_styles_explain' => 'Здесь вы можете скачать и инсталировать .style files.',
'xs_export_styles' => 'Экспортировать стили',
'xs_export_styles_explain' => 'Здесь вы можете сохранить стиль для вашего форума как .style file и это легко передается другому форуму или вебсайту.',
'xs_clone_styles' => 'Копировать стили',
'xs_clone_styles_explain' => 'Здесь вы можете быстро скопировать стили или целый шаблон.',
'xs_download_styles' => 'Скачать стили',
'xs_download_styles_explain' => 'Здесь вы можете быстро загрузить и устанавить стили с вебсайтов. Вы можете формировать список вебсайтов самостоятельно.',
'xs_install_styles' => 'Установить стили',
'xs_install_styles_explain' => 'Здесь вы можете установить стили, которые уже загружены на ваш форум.',
'xs_uninstall_styles' => 'Удалить стили',
'xs_uninstall_styles_explain' => 'Здесь вы можете удалить стили для вашего форума.',
'xs_edit_templates_explain' => 'Здесь вы можете редактировать tpl файлы онлайн.',
'xs_edit_styles_data' => 'Редактирование данных стилей',
'xs_edit_styles_data_explain' => 'Здесь вы можете редактировать измененый стиль. Это доступно большиму количеству стилей, не доступно только в стилях основанных на css файлах.',
'xs_export_styles_data' => 'Экпорт данных стилей',
'xs_export_styles_data_explain' => 'Здесь вы можете записать и изменить theme_info.cfg стиля.',
'xs_check_for_updates' => 'Проверка для обновления',
'xs_check_for_updates_explain' => 'Здесь вы можете проверить обновлённые версии стилей и модов, установленных на вашем форуме.',

'xs_set_configuration_lc' => 'набор конфигурации',
'xs_set_default_style_lc' => 'набор стиля по умолчанию',
'xs_manage_cache_lc' => 'управление Кешем',
'xs_import_styles_lc' => 'импортировать стили',
'xs_export_styles_lc' => 'экспортировать стили',
'xs_clone_styles_lc' =>'копировать стили',
'xs_uninstall_styles_lc' => 'удалить стили',
'xs_edit_templates_lc' => 'редактировать шаблоны',
'xs_edit_styles_data_lc' => 'редактировать данные стилей',
'xs_export_styles_data_lc' => 'экспортировать данные стилей',
'xs_check_for_updates_lc' => 'проверить для обновления',

/*
* ftp.tpl, ftp functions
*/

'xs_ftp_comment1' => 'Чтобы использовать эту функцию, вы должны выбрать метод загрузки файла. Если вы выбираете FTP, то пароль не будет сохранен и eXtreme стили будут просить у вас пароль каждый раз, когда вы выбираете функции, которые требуют FTP доступа. Если вы выбираете локальную файловую систему, удостовертесь, что требуемая дериктория доступна.',
'xs_ftp_comment2' => 'Чтобы использовать эту функцию, вы должны установить FTP доступ. Пароль не будет сохранен, и eXtreme стили будут просить у вас пароль каждый раз, когда вы выбираете функции, который требуется для доступа на FTP .',
'xs_ftp_comment3' => 'Предупреждение: FTP доступ отсутствует на этом сервере. Вы не сможете использовать eXtreme стили, которые требуют FTP доступа.',

'xs_ftp_title' => 'FTP конфигурация',

'xs_ftp_explain' => 'FTP используется для загрузки новых стилей. Если вы хотите использовать преимущуства  импорта стилей, тогда вы должны указать соответствующее FTP. Делаются попытки авто-обнаружения стилей.',

'xs_ftp_error_fatal' => 'FTP функции отсутствуют на этом сервере. Не могу продолжать.',
'xs_ftp_error_connect' => 'FTP ошибка: не может соеденится с {HOST}',
'xs_ftp_error_login' => 'FTP ошибка: не может войти',
'xs_ftp_error_chdir' => 'FTP ошибка: не может изменить директорию на {DIR}',
'xs_ftp_error_nonphpbbdir' => 'FTP ошибка: неправильная директория. Нет файлов phpBB в этой директории',
'xs_ftp_error_noconnect' => 'Не может соеденится с ftp сервером',
'xs_ftp_error_login2' =>'Неверный ftp логин и (или) пароль',

'xs_ftp_log_disabled' => 'ftp функции отсутствуют на этом сервере. скрипт не может работать дальше.',
'xs_ftp_log_connecting' => 'соединение с {HOST}',
'xs_ftp_log_noconnect' => 'нет соединения с {HOST}',
'xs_ftp_log_connected' => 'соединение. вход в...',
'xs_ftp_log_nologin' => 'не входит как {USER}',
'xs_ftp_log_loggedin' => 'входит в',
'xs_ftp_log_end' => 'окончание работы скрипта',
'xs_ftp_log_nopwd' => 'Ошибка: не может восстановить текущую директорию',
'xs_ftp_log_nomkdir' => 'Ошибка: не может создать дирректорию {DIR}',
'xs_ftp_log_mkdir' => 'создать дирректорию {DIR}',
'xs_ftp_log_nochdir' => 'Ошибка: не может изменить директорию к {DIR}',
'xs_ftp_log_normdir' => 'Ошибка: не может удалить директорию {DIR}',
'xs_ftp_log_rmdir' => 'удаление директории {DIR}',
'xs_ftp_log_chdir' => 'изменение директории к {DIR}',
'xs_ftp_log_noupload' => 'Ошибка: не может загрузить файл {FILE}',
'xs_ftp_log_upload' => 'загружается файл {FILE}',
'xs_ftp_log_nochmod' => 'Предупреждение: не тот chmod файла {FILE}',
'xs_ftp_log_chmod' => 'chmod файла {FILE}  {MODE}',
'xs_ftp_log_invalidcommand' => 'Ошибка: неизвестная команда: {COMMAND}',
'xs_ftp_log_chdir2' => 'изменение текущей директории назад к {DIR}',
'xs_ftp_log_nochdir2' => 'не измененять директории к {DIR}',

'xs_ftp_config' => 'Конфигурация FTP',
'xs_ftp_select_method' => 'Выбрать метод загрузки',
'xs_ftp_select_local' => 'Выбрать локальную файловую систему (не требует конфигурации)',
'xs_ftp_select_ftp' => 'Выбрать FTP (параметры ftp выбираются ниже)',

'xs_ftp_settings' => 'FTP параметры',
'xs_ftp_host' => 'FTP Хост',
'xs_ftp_login' => 'FTP вход',
'xs_ftp_path' => 'FTP путь для phpBB',
'xs_ftp_pass' => 'FTP пароль',
'xs_ftp_remotedir' => 'Удалить директорию',

'xs_ftp_host_guess' => ' (обычно "{HOST}" [<a href="javascript: void(0)" onclick="{CLICK}">хост</a>])',
'xs_ftp_login_guess' => ' (обычно "{LOGIN}" [<a href="javascript: void(0)" onclick="{CLICK}">хост</a>])',
'xs_ftp_path_guess' => ' (обычно "{PATH}" [<a href="javascript: void(0)" onclick="{CLICK}">патч</a>])',


/*
* config.tpl
*/
	'xs_config_updated' => 'Конфигурания обновлена.',
'xs_config_updated_explain' => 'Вы должны обновить эту страницу прежде, чем новая конфигурация вступит в силу. <a href="{URL}">Нажать</a> для обновления страницы.',
'xs_config_warning' => 'Предупреждение: Кеш не может записаться.',
'xs_config_warning_explain' => 'Кеш не записан. eXtreme стили могут папытаться устранить эту проблемму.<br /><a href="{URL}">Нажать</a> чтобы изменить доступ на Кеш дерикторию.<br /><br />Если Кеш не работает на вашем сервере по некоторым причинам не волнуйтесь - eXtreme стили<br />форума работают достаточно быстро и без Кеш.',

'xs_config_maintitle' => 'Конфигурация мода eXtreme стилей',
'xs_config_subtitle' => 'Это конфигурация для eXtreme стилей. Если вы не понимаете, не изменяйте ее.',
'xs_config_title' => 'Параметры eXtreme мод стиля v{VERSION}',
'xs_config_cache' => 'Кеш конфигурация',

'xs_config_navbar' => 'Показ на левой рамке:',
'xs_config_navbar_explain' => 'Вы можете выбрать какие пункты показать на левой рамке в admin разделе.',

'xs_config_def_template' => 'Директория шаблона по умолчанию',
'xs_config_def_template_explain' => 'Если требуемый tpl файл не найден в текущей директории шаблона (если использовали неправильные моды phpBB) тогда система шаблона ищет такой же файл в связанной дерриктории (подобно тому, как если бы текущий шаблон - "myTemplate" требует файл "myTemplate/myfile.tpl" и этого файла нет, файл будеи искаться в "subSilver/myfile.tpl"). Можно отменить это.',

'xs_config_check_switches' => 'Проверьте параметры при компилировании',
'xs_config_check_switches_explain' => 'Здесь проверяются ошибки в шаблонах. Выключение этого ускорит компиляцию, но компилятор может пропустить некоторые ошибки в шаблонах, если они есть.<br /><br />Сильная проверка проверит шаблоны на ошибки и автоматически устранит их (есть немного известных опечаток в различных модах). Работает медленнее чем простая проверка.<br /><br />Но иногда шаблон выглядит неправильно только, когда проверка на ошибки не работала; это случается из-за плохого кодирования html станиц, кто бы ни написал tpl файл, если Вы хотите устранить ошибки.<br /><br />Если Кеш поврежден, то выключите это для более быстрой компиляции.',
'xs_config_check_switches_0' => 'Выкл.',
'xs_config_check_switches_1' => 'Подробная проверка',
'xs_config_check_switches_2' => 'Обычная проверка',

'xs_config_show_errors' => 'Показ ошибок, когда файлы неправильно включены в tpl файлы',
'xs_config_show_error_explain' => 'Здесь включаются/выключаются ошибки в tpl файлах внесенные пользователем &lt;!-- INCLUDE filename --&gt;',

'xs_config_tpl_comments' => 'Добавить tpl имя файла в html',
'xs_config_tpl_comments_explain' => 'Здесь добавлются комментарии к коду html, которые позволяют проектировщикам стиля обнаруживать, какой tpl файл используется.',

'xs_config_use_cache' => 'Использовать Кеш',
'xs_config_use_cache_explain' => 'Кеш сохраняется на диск  и это ускоряет формирование шаблонов, потому что не надо собирать шаблон каждый раз при демонстрации.',

'xs_config_auto_compile' => 'Автоматическая запись Кеш',
'xs_config_auto_compile_explain' => 'Здесь автоматически соберутся шаблоны, которые - не Кешируются и запишутся в дерикторию Кешировния.',

'xs_config_auto_recompile' => 'Автоматически обновлять Кеш',
'xs_config_auto_recompile_explain' => ' Здесь автоматически соберутся шаблоны, если шаблон был изменен.',

'xs_config_php' => 'Расширение имен файла Кеш',
'xs_config_php_explain' => 'Это - расширение Кешируемых файлов. Файлы сохраняются в формате php, так что расширение по умолчанию - "php". Не забудте про точку :-)))',

'xs_config_back' => '<a href="{URL}">Нажать</a> чтобы вернуть конфигурацию.',
'xs_config_sql_error' => 'Неудачное обновление основной конфигурации {VAR}',
// Debug info
	'xs_debug_header' => 'Информация отладки',
'xs_debug_explain' => 'Информация отладки используемая, чтобы найти проблемы при конфигурировании Кеш.',
'xs_debug_vars' => 'Проверка шаблона',
'xs_debug_tpl_name' => 'Имя файла шаблона:',
'xs_debug_cache_filename' => 'Имя файла Кеш:',
'xs_debug_data' => 'Данные отладки:',

'xs_check_hdr' => 'Проверка Кеш для %s',
'xs_check_filename' => 'Ошибка: неправильное имя файла',
'xs_check_openfile1' => 'Ошибка: не могу открыть файл "%s". Буду пробывать создать директорию...',
'xs_check_openfile2' => 'Ошибка: не могу открыть файл "%s" в течение второго раза. Отказ...',
'xs_check_nodir' => 'Проверка "%s" - нет директории.',
'xs_check_nodir2' => 'Ошибка: не могу создать дерикторию "%s" - Вы, возможно, должны проверить разрешения.',
'xs_check_createddir' => 'Создается директория "%s"',
'xs_check_dir' => 'Проверка "%s" - директория существует.',
'xs_check_ok' => 'Файл "%s" открыт для записи. Кажется все в порядке.',

	'xs_error_demo_edit' => 'Вы не можете редактировать файл в демонстрационном режиме',
	'xs_error_not_installed' => 'критический модник Стилей не установлен. Вы забыли загрузить в includes/template.php',

/*
* chmod
*/
'xs_chmod' => 'CHMOD',
'xs_chmod_return' => '<br /><br /><a href="{URL}">Нажмите</a> чтобы вернуть конфигурацию.',
'xs_chmod_message1' => 'Конфигурация изменена.',
'xs_chmod_error1' => 'Не могу изменить доступ Кеш дерриктории',


/*
* default style
*/
	'xs_def_title' => 'Набор стиля по умолчанию',
'xs_def_explain' => 'Здесь вы можете быстро изменить стиль форума по умолчанию и также переключить пользователей от одного стиля к другому.',

'xs_styles_set_default' => 'набор по умолчанию',
'xs_styles_no_override' => 'применить пользовательские настройки',
'xs_styles_do_override' => 'отменить пользовательские настройки',
'xs_styles_switch_all' => 'переключить всех пользователей к этому стилю',
'xs_styles_switch_all2' => 'переключаь всех пользователей:',
'xs_styles_defstyle' => 'стиль по умолчанию',
'xs_styles_available' => 'Доступные стили',
'xs_styles_make_public' => 'сделать стиль публичным',
'xs_styles_make_admin' => 'сделать стиль только для администратора',
'xs_styles_users' => 'Список пользователей',

/*
* cache management
*/
	'xs_manage_cache_explain2' => 'Здесь вы можете собирать или удалять кэшированные файлы для стилей.',
'xs_clear_all_lc' => 'очистить всё',
'xs_compile_all_lc' => 'компилировать всё',
'xs_clear_cache_lc' => 'очистить Кеш',
'xs_compile_cache_lc' => 'компиляция Кеш',
'xs_cache_confirm' => 'Если вы имеете много стилей, это может загрузить сервер. Вы уверены, что хотите продолжить?',

'xs_cache_nowrite' => 'Ошибка: не найдена Кеш дериктория',
'xs_cache_log_deleted' => 'Удален {FILE}',
'xs_cache_log_nodelete' => 'Ошибка: файл не удаляется {FILE}',
'xs_cache_log_nothing' => 'Нет ничего для удаления шаблона {TPL}',
'xs_cache_log_nothing2' => 'Нет ничего для удаления в Кеш дериктории',
'xs_cache_log_count' => 'Удалено {NUM} файлов',
'xs_cache_log_count2' => 'Ошибка удаления {NUM} файлов',
'xs_cache_log_compiled' => 'Компиляция: {NUM} файлов',
'xs_cache_log_errors' => 'Ошибки: {NUM}',
'xs_cache_log_noaccess' => 'Ошибка: не найдена дериктория {DIR}',
'xs_cache_log_compiled2' => 'Компиляция: {FILE}',
'xs_cache_log_nocompile' => 'Ошибка компилирования: {FILE}',

/*
* export/import/download/clone
*/
	'xs_import_explain' => 'Здесь Вы можете импортировать стили.Здесь Вы можете также автоматически установить и модернизировать стили.<br /><br />Предупреждение: If you have added any mods (except for eXtreme Styles mod) on this forum then you should be careful when importing styles because styles might not be compatible with your forum. You can only install styles that have the same modifications as the other styles that you\'ve configured on your forums.',

'xs_import_lc' => 'импорт',
'xs_list_files_lc' => 'список файлов',
'xs_delete_file_lc' => 'удалить файл',
'xs_export_style_lc' => 'экспортировать стиль',

'xs_import_no_cached' => 'Нет кэшированных стилей для импорта',
'xs_add_styles' => 'Добавить стиль',
'xs_add_styles_web' => 'загрузить с вебсайта',
'xs_add_styles_web_get' => 'Загрузить',
'xs_add_styles_copy' => 'Копировать с локального файла',
'xs_add_styles_copy_get' => 'Копировать',
'xs_add_styles_upload' => 'Загрузка на копьютер',
'xs_add_styles_upload_get' => 'Загрузка',

'xs_export_style' => 'Экспортировать стиль',
'xs_export_style_explain' => 'Здесь Вы можете экспортировать стиль как отдельный файл. Отдельный файл является очень маленьким - smaller than a .zip file (because it is compressed with gzip, which works better than zip) and all styles inside is a single file. In turn, it is very easy to transfer styles from one forum to another.<br /><br />This feature also allows you to upload exported styles using ftp to a server. This system allows you to transfer a style to another forum quickly without manually copying it.',

'xs_export_style_title' => 'Экспортировать шаблон "{TPL}"',
'xs_export_tpl_name' => 'Экспортировать как (имя шаблона)',
'xs_export_style_names' => 'Выбрать стиль(и) для экспорта',
'xs_export_style_name' => 'Экспортировать стиль (имя стиля)',
'xs_export_style_comment' => 'Коментарии',
'xs_export_where' => 'Где экспортировать',
'xs_export_where_download' => 'Загрузить как файл',
'xs_export_where_store' => 'Store как файл на сервере',
'xs_export_where_store_dir' => 'Директория',
'xs_export_where_ftp' => 'Загрузка через FTP',
'xs_export_filename' => 'Экспортировать имя файла',

'xs_download_explain2' => 'Здесь Вы можете быстро разгружать и устанавливать стили непосредственно с различных вебсайтов. Кликните по названию сайта и вы будете переадресованы к странице загрузки стилей.<br /><br />Вы можете также управлять списком вебсайтов.',

'xs_download_locations' => 'Адрес закачки',
'xs_edit_link' => 'Редактировать ссылку',
'xs_add_link' => 'Добавить ссылку',
'xs_link_title' => 'Название соединения',
'xs_link_url' => 'Сылка URL',
'xs_delete' => 'Удалить',

'xs_style_header_error_file' => 'Не открывается локальный файл',
'xs_style_header_error_server' => 'Ошибка на сервере: ',
'xs_style_header_error_invalid' => 'Неправильный заголовок файла',
'xs_style_header_error_reason' => 'Ошибка чтения заголовка файла: ',
'xs_style_header_error_incomplete' => 'Файл не полный',
'xs_style_header_error_incomplete2' => 'Неверный размер файла. Вероятно файл неполон.',
'xs_style_header_error_invalid2' => 'Испорченый файл. Предположительно, файл не совместим с модом eXtreme стилей или неправильная версия.',
'xs_error_cannot_open' => 'Файл не открывается.',
'xs_error_decompress_style' => 'Ошибка, архивированного файла. Вероятно файл ипорчен.',
'xs_error_cannot_create_file' => 'Не могу создать файл "{FILE}"',
'xs_error_cannot_create_tmp' => 'Не могу создать временный файл "{FILE}"',
'xs_import_invalid_file' => 'Испорченный файл',
'xs_import_incomplete_file' => 'Неполный файл',
'xs_import_uploaded' => 'Стиль загружен.',
'xs_import_installed' => 'Стиль загружен и инсталирован.',
'xs_import_notinstall' => 'Стиль загружен, но ошибка инсталяции стиля (sql error).',
'xs_import_notinstall2' => 'Стиль загружен, но ошибка инсталяции стиля: не найден стиль в theme_info.cfg',
'xs_import_notinstall3' => 'Стиль загружен, но ошибка инсталяции стиля: не найден "{STYLE}" в theme_info.cfg',
'xs_import_notinstall4' => 'Стиль загружен, но ошибка инсталяции стиля: не могу получить затем themes_id информацию',
'xs_import_notinstall5' => 'Стиль загружен, но ошибка инсталяции стиля: не могу модернизировать таблицу стилей',
'xs_import_nodownload' => 'Не могу загрузить стиль с {URL}',
'xs_import_nodownload2' => 'Не могу скопировать стиль с {URL}',
'xs_import_nodownload3' => 'Файл не загружен.',
'xs_import_uploaded2' => 'Стиль загружен. Вы можете теперь импортировать его.<br /><br /><a href="{URL}">Нажать</a> для импорта стиля.',
'xs_import_uploaded3' => 'Стиль скопирован. Вы можете теперь импортировать его.<br /><br /><a href="{URL}">Нажать</a> для импорта стиля.',
'xs_import_uploaded4' => 'Стиль загружен. Вы можете теперь импортировать его.<br /><br /><a href="{URL}">Нажать</a> для импорта стиля.',
'xs_export_no_open_dir' => 'Не могу открыть директорию {DIR}',
'xs_export_no_open_file' => 'Не могу открыть файл {FILE}',
'xs_export_no_read_file' => 'Ошибка чтения файла {FILE}',
'xs_no_theme_data' => 'Не могу получить данные стиля для отобранного шаблона',
'xs_no_style_info' => 'Не могу получить информацию стиля',
'xs_export_noselect_themes' => 'Вы должны выбрать по крайней мере один стиль',
'xs_export_error' => 'Не могу экспортировать шаблон "{TPL}": ',
'xs_export_error2' => 'Не могу экспортировать шаблон "{TPL}": стиль пуст',
'xs_export_saved' => 'Стиль записан как "{FILE}"',
'xs_export_error_uploading' => 'Ошибка загрузки файла',
'xs_export_uploaded' => 'Файл загружен.',
'xs_clone_taken' => 'Это название стиля уже используется.',
'xs_error_new_row' => 'Не могу вставить новый ряд в таблицу.',
'xs_theme_cloned' => 'Копировать стиль.',
'xs_invalid_style_name' => 'Неправильное имя стиля.',
'xs_clone_style_exists' => 'Этот шаблон уже существует',
'xs_clone_no_select' => 'Вы должны выбрать по крайней мере один стиль, чтобы копировать.',
'xs_no_themes' => 'Стиль не существует в базе.',

'xs_import_back' => '<a href="{URL}">Нажать</a> чтобы вернуться на страницу импорта стилей.',
'xs_import_back_download' => '<a href="{URL}" target="main">Нажмите здесь</a> чтобы вернуть закачки.',
'xs_export_back' => '<a href="{URL}">Нажать</a> чтобы вернуться на страницу экспорта стилей.',
'xs_clone_back' => '<a href="{URL}">Нажать</a> чтобы вернуться на страницу копирования стилей.',
'xs_download_back' => '<a href="{URL}">Нажать</a> чтобы вернуться на страницу загрузки.',

'xs_import_tpl' => 'Импорт шаблона "{TPL}"',
'xs_import_tpl_comment' => 'Здесь вы можете загружать шаблон на ваш форум. Если шаблон с этим названием уже существует на вашем форуме, то автоматически сохранятся старые файлы, так что это может также использоваться, чтобы модернизировать стили.<br /><br />Также можете автоматически установить стили. Если Вы хотите установить стиль после импортирования, это тогда выбирает один или более стилей ниже.',
'xs_import_tpl_filename' => 'Имя файла:',
'xs_import_tpl_tplname' => 'Имя шаблона:',
'xs_import_tpl_comment2' => 'Коментарии:',
'xs_import_select_styles' => 'Выбрать стиль(и) для инсталяции:',
'xs_import_install_def_lc' => 'сделать стиль форума по умолчанию',
'xs_import_install_style' => 'Установить стиль:',
'xs_import' => 'Импортировать',

'xs_import_list_contents' => 'Содержание файла: ',
'xs_import_list_filename' => 'Имя файла: ',
'xs_import_list_template' => 'Шаблон: ',
'xs_import_list_comment' => 'Комментарии: ',
'xs_import_list_styles' => 'Стиль(и): ',
'xs_import_list_files' => 'Файлы ({NUM}):',
'xs_import_download_lc' => 'загрузить файл',
'xs_import_view_lc' => 'просмотреть файл',
'xs_import_file_size' => '({NUM} bytes)',

'xs_import_nogzip' => 'Эта функция требует gz сжатия, и очевидно что не поддерживается на этом сервере.',
'xs_import_nowrite_cache' => 'Не может записать Кеш. Эта функция требует, чтобы Кеш был перезаписываемым. Проверить конфигурацию мода.<br /><br /><a href="{URL1}">Нажать</a> чтобы сделать Кеш перезаписываемым.<br /><br /><a href="{URL2}">Нажать</a> чтобы вернуться на страницу импорта.',

'xs_import_download_warning' => 'Здесь вы можете с других вэб сайтов быстро загрузить стили используя особенности загрузки стилей',

'xs_clone_style' => 'Копировать стиль',
'xs_clone_style_explain' => 'Здесь вы можете быстро копировать стиль или целый шаблон.<br /><br />Опасность: Если вы копируете шаблон, удостоверьтесь, что автор оригинального шаблона позволяет Вам сделать это (если это не является subSilver - вы можете сделать то, что Вы хотите с subSilver). Обычно авторы позволяют изменять их стили, но измененный стиль не принадлежит вам.',
'xs_clone_style_explain2' => 'Здесь вы можете создать новый стиль из шаблона. Здесь не будут копироваться файлы - просто добавится вход в вашу базу стилей. И старый и новый стиль разделит те же самые шаблоны.',
'xs_clone_style_explain3' => 'Введите имя стиля который собираетесь создать и нажмите кнопку "Копирование".',
'xs_clone_style_explain4' => 'Здесь вы можете копировать шаблон. Вы можете также копировать все стили, связанные с тем шаблоном. После этого вы можете благополучно редактировать tpl файлы для нового шаблона не затрагивая старый.',

'xs_clone_style_lc' => 'копировать стиль',
'xs_clone_style2' => 'Копировать стиль "{STYLE}":',
'xs_clone_style3' => 'Копировать шаблон "{STYLE}"',
'xs_clone_newdir_name' => 'Новый шаблон (дирректория) название:',
'xs_clone_select' => 'Выберите стиль (и), чтобы копировать:',
'xs_clone_select_explain' => 'Вы должны выбрать по крайней мере один стиль.',
'xs_clone_newname' => 'Имя нового стиля:',


/*
* install/uninstall
*/
	'xs_install_styles_explain2' => 'Это список стилей Вашего форума, которые не установлены. Нажмите "инсталировать", чтобы выбрать стиль который вы хотите установить, выберите один или несколько и нажмите на кнопку.',
'xs_uninstall_styles_explain2' => 'Это лист стилей инсталированный на ваш форум. Нажмите "деинсталировать" чтобы выбрать стили форума для удаления. Деинсталирование является безопасным - все пользователи кто использует деинсталированный стиль будут переключены к стилю форума по умолчанию. Также, деинсталяция автоматически удалит Кеш для стиля.',

'xs_install' => 'Установка',
'xs_install_lc' => 'установка',
'xs_uninstall' => 'Удаление',
'xs_remove_files' => 'Удаление файлов',
'xs_style_removed' => 'Стиль удален.',
'xs_uninstall_lc' => 'удаление',
'xs_uninstall2_lc' => ' удаление файлов',

'xs_install_back' => '<a href="{URL}">Нажать</a> чтобы вернуться в инсталяцию стилей.',
'xs_uninstall_back' => '<a href="{URL}">Нажать</a> чтобы вернуться в деинсталяцию стили.',
'xs_goto_default' => '<a href="{URL}">Нажать</a> чтобы изменить стиль по умолчанию.',

'xs_install_installed' => 'Стиль(и) установлены.',
'xs_install_error' => 'Ошибка при установке стиля.',
'xs_install_none' => 'Нет новых стилей, для установки. Все доступные стили уже установлены.',

'xs_uninstall_default' => 'Вы не можете удалить стиль по умолчанию. Изменить стиль по умолчанию: <a href="{URL}">нажмите сюда</a>.',

/*
* export theme_info.cfg
*/
	'xs_export_styles_data_explain2' => 'Позволяет вам записать стиль в theme_info.cfg. Это нужно для того чтобы передавать базу стилей от одного форума к другому.<br /><br />Note: If you are using the eXtreme Styles export feature to move a style to another forum you don\'t need to save theme_info.cfg - it is done automatically by the style export feature.',
'xs_export_styles_data_explain3' => 'Выберите стили, которые Вы хотите экспортировать.',

'xs_export_data_back' => '<a href="{URL}">Нажать</a> чтобы вернуться на страницу экспорта стилей.',
'xs_export_style_data_lc' => 'дата экпорта стиля',

'xs_export_data_saved' => 'Дата экспорта.',


/*
* edit templates (file manager)
*/
	'xs_edit_template_comment1' => 'Позволяет вам редактировать шаблоны. Браузер показывает только файлы редакции таблиц',
'xs_edit_template_comment2' => 'Позволяет вам редактировать шаблоны.',
'xs_edit_file_saved' => 'Файл записан.',
'xs_edit_not_found' => 'Файл не существует.',
'xs_edittpl_back_dir' => '<a href="{URL}">Нажать</a> чтобы вернутся к управлению файлом.',

'xs_fileman_browser' => 'Выбрать файл',
'xs_fileman_directory' => 'Директория:',
'xs_fileman_dircount' => 'Директории ({COUNT}):',
'xs_fileman_filter' => 'Фильтр',
'xs_fileman_filter_ext' => 'Покажите только файлы с расширением:',
'xs_fileman_filter_content' => 'Показать только файлы которые содержат:',
'xs_fileman_filter_clear' => 'Оцистить фильтр',
'xs_fileman_filename' => 'Имя файла',
'xs_fileman_filesize' => 'Размер',
'xs_fileman_filetime' => 'Модификация',
'xs_fileman_options' => 'Опции',
'xs_fileman_time_today' => '(сегодня)',
'xs_fileman_edit_lc' => 'редактирование',

'xs_fileedit_search_nomatch' => 'Сравнение не найдено',
'xs_fileedit_search_match1' => 'Заменить 1 сравнение',
'xs_fileedit_search_matches' => "Replaced ' + count + ' matches",
'xs_fileedit_noundo' => 'Не возможно вернуть',
'xs_fileedit_undo_complete' => 'восстановить разорванное соединение',
'xs_fileedit_edit_name' => 'Редактировать файл:',
'xs_fileedit_location' => 'Расположение:',
'xs_fileedit_reload_lc' =>'пезагрузка файла',
'xs_fileedit_download_lc' => 'загрузить файл',
'xs_fileedit_trim' => 'Автоматически расставлять пробелы в начале и конце файла.',
'xs_fileedit_functions' => 'Редактирование функций',
'xs_fileedit_replace1' => 'Заменить ',
'xs_fileedit_replace2' => ' с ',
'xs_fileedit_replace_first_lc' => 'заменить сперва match',
'xs_fileedit_replace_all_lc' =>'заменить все matches',
'xs_fileedit_replace_undo_lc' => 'отменить изменения',
'xs_fileedit_backups' =>'Резервные копии',
'xs_fileedit_backups_save_lc' =>'записать резевную копию',
'xs_fileedit_backups_show_lc' => 'показать соеденения',
'xs_fileedit_backups_restore_lc' => 'восстановить',
'xs_fileedit_backups_download_lc' => 'загрузить',
'xs_fileedit_backups_delete_lc' => 'удалить',
'xs_fileedit_upload' => 'Загрузить',
'xs_fileedit_upload_file' => 'Загрузить файл:',

/*
* edit styles data (theme_info)
*/
	'xs_data_head_stylesheet' => 'CSS Талица стилей',
'xs_data_body_background' => 'Фоновая картинка',
'xs_data_body_bgcolor' => 'Цвет фона',
'xs_data_style_name' => 'Название стиля',
'xs_data_body_link' => 'Цвет соединения',
'xs_data_body_text' => 'Цвет текста',
'xs_data_body_vlink' => 'Цвет посещённой ссылки',
'xs_data_body_alink' => 'Цвет активной ссылки',
'xs_data_body_hlink' => 'Цвет ссылки при наведении мыши',
'xs_data_tr_color' => 'Цвет колонки таблицы %s',
'xs_data_tr_class' => 'Класс колонки таблицы %s',
'xs_data_th_color' => 'Цвет заголовка таблицы %s',
'xs_data_th_class' => 'Класс заголовка таблицы %s',
'xs_data_td_color' => 'Цвет ячейки таблицы %s',
'xs_data_td_class' => 'Класс ячейки таблицы %s',
'xs_data_fontface' => 'Вид шрифта %s',
'xs_data_fontsize' => 'Размер шрифта %s',
'xs_data_fontcolor' => 'Цвет шрифта %s',
'xs_data_span_class' => 'Размер отступа %s',
'xs_data_img_size_poll' => 'Polling размер картинки [px]',
'xs_data_img_size_privmsg' => 'Размер статуса приватного сообщения [px]',
'xs_data_theme_public' => 'Общий стиль (1 or 0)',
'xs_data_unknown' => 'Описание не доступно (%s)',

'xs_edittpl_error_updating' => 'Ошибка обновления стиля.',
'xs_edittpl_style_updated' => 'Обновленный стиль.',
'xs_invalid_style_id' => 'Ошибочный id стиля.',

'xs_edittpl_back_edit' => '<a href="{URL}">Нажмите здесь</a> чтобы вернуться к редактированию.',
'xs_edittpl_back_list' => '<a href="{URL}">Нажмите здесь</a> чтобы вернуть лист стилей.',

'xs_editdata_explain' => 'Здесь вы можете редактировать базу установленных стилей. Некоторые стили не используют базу стилей, а используют css файлы вместо этого или ипользуют базу не полностью.',
'xs_editdata_var' => 'Переменная',
'xs_editdata_value' => 'Значение',
'xs_editdata_comment' => 'Коментарии',

/*
* updates
*/

	'xs_updates' => 'Обновления',
'xs_updates_comment' => 'Здесь проверяется обновления стилей и модов. Это работает только с темами, которые имеют совместимую информацию модернизации.',
'xs_updates_comment2' => 'Результат проверки версии.',
'xs_update_total1' => 'Итого: {NUM} тем',
'xs_update_info1' => 'Здесь администратор проверит доступные обновления phpBB, модов и стилей, установленных на вашем форуме. Когда это находит доступные обновления, показывает вам место, где Вы можете закачать обновленный файл.<br /><br />Эта функция требует, чтобы socketы были разрешены. Большинство бесплатных хостеров не имеет этого, если этот форум находится на бесплатных ресурсах (подобно lycos), тогда Вы не можете использовать особенность обновления, но если этот форум находится на нормальном сервере, тогда все должно работать.<br /><br />Когда вы нажимаете "продолжить", скрипт проверяет программное обеспечение установленное на ваш форум. Если ваш вебсайт не быстрый, это может занять некоторое время. Будьте терпеливы, и Дон \'t щелкает "остановкой" в вашем браузере, если процесс отсрочен. Если этот сервер  или вебсайт обновлений не быстрые, тогда скрипт может прекратить выполнение обновления - если это случается, что вы должны увеличить время timeout.',
'xs_update_name' => 'Имя',
'xs_update_type' => 'Тип',
'xs_update_current_version' => 'Ваша версия',
'xs_update_latest_version' => 'Последняя версия',
'xs_update_downloadinfo' => 'Загрузить URL',
'xs_update_timeout' => 'Скрипт обновления timeout (сек.):',
'xs_update_continue' => 'Продолжить',


	'xs_update_total2' => 'Ошибка: {NUM}',
'xs_update_total3' => 'Доступные обновления: {NUM} items',
'xs_update_select1' => 'Выберите пункт для модернизации',
'xs_update_types' => array(
                0 => 'Неизвестный',
                1 => 'Стиль',
                2 => 'Мод',
                3 => 'phpBB',
		4 => 'Icy Phoenix'
	),
	'xs_update_fileinfo' => 'Больше информации',
'xs_update_nothing' => 'Нечего обновлять.',
'xs_update_noupdate' => 'Вы используете последнюю версию.',

'xs_update_error_url' => 'Ошибка: не может восстановить url %s',
'xs_update_error_noitem' => 'Ошибка: Нет информации для обновления',
'xs_update_error_noconnect' => 'Ошибка: Не может соеденится с сервером обновлений',

'xs_update_download' => 'загрузить',
'xs_update_downloadinfo2' => 'загрузить/инфо',
'xs_update_info' => 'Сайт',

'xs_permission_denied' => 'Доступ отклонен',

'xs_download_lc' => 'загрузить',
'xs_info_lc' => 'инфо',

/*
* style configuration
*/
	'Template_Config' => 'Конфигурация шаблона',
'xs_style_configuration' => 'Конфигурация шаблона',
	)
);

?>