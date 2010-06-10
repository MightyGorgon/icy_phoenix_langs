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
* (c) 2002 Meik Sievertsen (Acyd Burn)
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
// Auth Related Entries
/*
	'Rules_attach_can' => 'You <b>can</b> attach files in this forum',
	'Rules_attach_cannot' => 'You <b>cannot</b> attach files in this forum',
	'Rules_download_can' => 'You <b>can</b> download files in this forum',
	'Rules_download_cannot' => 'You <b>cannot</b> download files in this forum',
*/
	'Rules_attach_can' => 'Вы <b>можете</b> прикреплять файлы в этом форуме',
'Rules_attach_cannot' => 'Вы <b>не можете</b> прикреплять файлы в этом форуме',
'Rules_download_can' => 'Вы <b>можете</b> скачивать файлы в этом форуме',
'Rules_download_cannot' => 'Вы <b>не можете</b> скачивать файлы в этом форуме',
'Sorry_auth_view_attach' => 'Извините, но вам не разрешено просматривать или скачивать вложения',

// Viewtopic -> Display of Attachments
	'Description' => 'Описание',// used in Administration Panel too...
'Downloaded' => 'Скачан',
'Download' => 'Скачать', // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
'Filesize' => 'Размер файла',
'Viewed' => 'Просмотрено',
'Download_number' => '%d раз', // replace %d with count
'Extension_disabled_after_posting' => 'Расширение \'%s\' отключено администратором, поэтому этот файл не может быть прикреплен.', // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
	'Attach_posting_cp' => 'Панель управления вложениями',
'Attach_posting_cp_explain' => 'Если вы нажмете на Прикрепить файл, то вы увидите управление для прикрепления файлов.<br />Если вы нажмете на Прикрепленные файлы, то вы увидите список уже прикрепленных файлов и сможете их отредактировать.<br />Если вы хотите заменить (закачать новую версию) вложение, то вам надо щелкнуть по двум ссылкам. Добавьте вложение, затем, не нажимая кнопку Вложить, нажмите на кнопке Обновить вложение для обновления файла.',

// Posting/PM -> Posting Attachments
	'Add_attachment' => 'Прикрепить файл',
'Add_attachment_title' => 'Прикрепить файл',
'Add_attachment_explain' => 'Если вы не хотите прикреплять файл, то оставьте поля пустыми',
'File_name' => 'Имя файла',
'File_comment' => 'Комментарий',

// Posting/PM -> Posted Attachments
	'Posted_attachments' => 'Прикрепленные файлы',
'Options' => 'Опции',
'Update_comment' => 'Обновить комментарий',
'Delete_attachments' => 'Удалить вложения',
'Delete_attachment' => 'Удалить вложение',
'Delete_thumbnail' => 'Удалить изображение',
'Upload_new_version' => 'Обновить файл',


// Errors -> Posting Attachments
	'Invalid_filename' => '%s - неправильное имя файла', // replace %s with given filename
'Attachment_php_size_na' => 'Файл слишком большой.<br />Не удаетс получить макс. размер в PHP.<br />Модуль вложений не может определить размер в php.ini.',
'Attachment_php_size_overrun' => 'Вложение слишком большое.<br />Максимальный размер: %d Мб.<br />Заметьте, что размер указан в php.ini, это значение установлено PHP и модуль вложений не может обойти это значение.', // replace %d with ini_get('upload_max_filesize')
'Disallowed_extension' => 'Расширение %s не разрешено', // replace %s with extension (e.g. .php)
'Disallowed_extension_within_forum' => 'Вам не разрешено размещать файлы с расширением %s в этом форуме', // replace %s with the Extension
'Attachment_too_big' => 'Вложение слишком большое.<br />Макс. размер: %d %s', // replace %d with maximum file size, %s with size var
'Attach_quota_reached' => 'Извините, максимальный размер всех вложений превышен. Свяжитесь с администратором форумов для уточнения.',
'Too_many_attachments' => 'Вложение не может быть добавлено, т.к. максимальное кол-во вложений ( %d ) в этом сообщении ограничено', // replace %d with maximum number of attachments
'Error_imagesize' => 'Вложение/изображение должно быть меньше %d пиксел на %d пиксел',
'General_upload_error' => 'Ошибка закачки: не удается закачать вложение в %s.',// replace %s with local path

'Error_empty_add_attachbox' => 'Вам надо ввести данные в \'Прикрепить файл\'',
'Error_missing_old_entry' => 'Не удалось обновить вложение, не удается найти старое вложение',

// Errors -> PM Related
	'Attach_quota_sender_pm_reached' => 'Извините, но максимальный размер вложений в вашей папке ЛС превышен. Пожалуйста, удалите несколько сообщений.',
'Attach_quota_receiver_pm_reached' => 'Извините, но максимальный размер вложений в папке ЛС \'%s\' превышен. Пожалуйста, передайте ему или подождите удаления пользователем.',

// Errors -> Download
	'No_attachment_selected' => 'Вы не выбрали вложение для просмотра или скачивания.',
'Error_no_attachment' => 'Выбранное вложение не существует',

// Delete Attachments
	'Confirm_delete_attachments' => 'Вы действительно хотите удалить выбранные вложения?',
'Deleted_attachments' => 'Выбранные вложения были удалены.',
'Error_deleted_attachments' => 'Не удается удалить вложения.',
'Confirm_delete_pm_attachments' => 'Вы хотите удалить все вложения в этой ЛС?',

// General Error Messages
	'Attachment_feature_disabled' => 'Вложения выключены.',

'Directory_does_not_exist' => 'Папка \'%s\' не существует или не может быть найдена.', // replace %s with directory
'Directory_is_not_a_dir' => 'Пожалуйста, проверьте, что \'%s\' - это папка.', // replace %s with directory
'Directory_not_writeable' => 'Папка \'%s\' только для чтения. Вам надо создать папку и сменить chmod на 777 (или сменить пользователя на владельца httpd) для закачки файлов.<br />Если у вас есть только FTP доступ, то смените \'Атрибут\' папки на rwxrwxrwx.', // replace %s with directory

'Ftp_error_connect' => 'Не удается соединиться с FTP-сервером: \'%s\'. Please check your FTP-Settings.',
'Ftp_error_login' => 'Не удается зайти на FTP-сервер. Имя пользователя \'%s\' или пароль неверны. Пожалуйста, проверьте настройки.',
'Ftp_error_path' => 'Не удается получить доступ к: \'%s\'. Проверьте ваши настройки.',
'Ftp_error_upload' => 'Не удается закачать файлы в: \'%s\'. Проверьте ваши настройки.',
'Ftp_error_delete' => 'Не удается удалить файлы в: \'%s\'. Проверьте ваши настройки.<br />Другой причиной может быть несовместимость вложения.',
'Ftp_error_pasv_mode' => 'Не удалось включить/выключить Пассивный режим FTP',

// Attach Rules Window
	'Rules_page' => 'Правила вложений',
'Attach_rules_title' => 'Разрешенные вложения и их размеры',
'Group_rule_header' => '%s -> Максимальный размер: %s', // Replace first %s with Extension Group, second one with the Size STRING
'Allowed_extensions_and_sizes' => 'Разрешенные расширения и размеры',
'Note_user_empty_group_permissions' => 'ПРИМЕЧАНИЕ:<br />по умолчанию вам разрешено прикреплять файлы в форуме, <br />но если разрешение здесь не указано, <br />То вы не сможете ничего прикрепить. Если вы попробуете, <br />то вы получите сообщение об ошибке.<br />',

// Quota Variables
'Upload_quota' => 'Квота закачек',
'Pm_quota' => 'Квота ЛС',
'User_upload_quota_reached' => 'Извините, вы превысили ваш лимит квоты %d %s', // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
'User_acp_title' => 'Панель пользователя',
'UACP' => 'Панель управления пользователя',
'User_uploaded_profile' => 'Закачано: %s',
'User_quota_profile' => 'Квота: %s',
'Upload_percent_profile' => '%d%% всего',

// Common Variables
'Bytes' => 'Байт',
'KB' => 'Kб',
'MB' => 'Mб',
'Attach_search_query' => 'Поиск вложений',
'Test_settings' => 'Проверка настроек',
'Not_assigned' => 'Не указано',
'No_file_comment_available' => 'Нет комментария',
'Attachbox_limit' => 'Ваш ящик вложений заполнен на %d%%',
'No_quota_limit' => 'Нет ограничения',
'Unlimited' => 'Неограниченная',
	)
);

?>