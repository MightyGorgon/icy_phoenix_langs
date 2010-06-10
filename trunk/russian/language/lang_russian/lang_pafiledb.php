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
// Toplist
	'Toplist' => 'Лучшие',
'Select_list' => 'Выберите тип отображения списка',
'Latest_downloads' => 'Новые файлы',
'Most_downloads' => 'Наиболее популярные файлы',
'Rated_downloads' => 'Лучшие файлы',
'Total_new_files' => 'Новые downloads',
'Show' => 'Показать',
'One_week' => '1 неделя',
'Two_week' => '2 недели',
'30_days' => '30 дней',
'New_Files' => 'Всего новых файлов за последние %d дней',
'Last_week' =>'Последняя неделя',
'Last_30_days' => 'Последние 30 дней',
'Show_top' => 'Показать лучшие',
'Or_top' => 'или лучшие',
'Popular_num' => 'Лучшие %d из %d файлов в базе',
'Popular_per' => 'Лучшие %d %% из %d файлов в базе',
'General_Info' => 'Общая информация',
'Downloads_stats' => 'Статистика скачиваний',
'Rating_stats' => 'Статистика оценок',
'Os' => 'Операционные системы',
'Browsers' => 'Браузеры',

// Main
	'Files' => 'Файлы',
'Viewall' => 'Показать все файлы',
'Vainfo' => 'Показать все файлы в базе',
'Jump' => 'Выберите категорию',
'Sub_category' => 'Подкатегория',
'Last_file' => 'Последний файл',

// Sort
	'Sort' => 'Сортировать',
'Name' => 'Имя',
'Update_time' => 'Последнее обновление',


// Category
	'No_files' => 'Файлы не найдены',
'No_files_cat' => 'Нет файлов в этой категории.',
'Cat_not_exist' => 'Выбранная категория не существует.',
'File_not_exist' => 'Выбранный файл не существует.',
'License_not_exist' => 'Выбранная лицензия не существует.',

// File
	'File' => 'Файл',
'Desc' => 'Описание',
'Creator' => 'Автор',
'Version' => 'Версия',
'Scrsht' => 'Скриншот',
'Docs' => 'Сайт',
'Lastdl' => 'Последнее скачивание',
'Never' => 'Никогда',
'Votes' => ' голосов',
'Date' => 'Дата',
'Update_time' => 'Последнее обновление',
'DlRating' => 'Оценка',
'Dls' => ' скачиваний',
'Downloadfile' => 'Скачать файл',
'File_size' => 'Размер файла',
'Not_available' => 'Недоступно!',
'Bytes' => 'байт',
'KB' => 'Килобайт',
'MB' => 'Мегабайт',

'Mirrors' => 'Зеркала',
'Mirrors_explain' => 'Здесь вы можете добавить или отредактировать данные, проверьте всю информацию внимательно!',
'Click_here_mirrors' => 'Нажмите здесь для добавления зеркала',
'Mirror_location' => 'Зеркало',
'Add_new_mirror' => 'Добавить',

//User Upload
	'User_upload' => 'Закачка',

// License
	'License' => 'Лицензионное соглашение',
'Licensewarn' => 'Вы должны принять лицензионное соглашение перед скачиванием',
'Iagree' => 'Я согласен',
'Dontagree' => 'Я не согласен',

// Search
	'Search' => 'Искать',
'Search_for' => 'Искать',
'Results' => 'Результаты для',
'No_matches' => 'Извините, нет соответствий для',
'Matches' => 'соответствий найдены для',
'All' => 'Все категории',
'Choose_cat' => 'Выберите категорию:',
'Include_comments' => 'Включить комментарии',
'Submiter' => 'Добавлено',

// Statistics
'Statistics' => 'Статистика',
'Select_chart_type' => 'Выберите тип таблицы',
'Bars' => 'Столбики',
'Lines' => 'Линии',
'Area' => 'Область',
'Linepoints' => 'Точки линий',
'Points' => 'Точки',
'Chart_header' => 'Статистика файлов - добавляется в базу каждый месяц',
'Chart_legend' => 'Файлы',
'X_label' => 'Месяцы',
'Y_label' => 'Файлы',

// Rate
	'Rate' => 'Оценить файл',
'Rerror' => 'Извините, вы уже голосовали за этот файл.',
'Rateinfo' => 'Вы хотите оценить файл <i>{filename}</i>.<br>Пожалуйста, выберите оценку ниже. 1 - самая плохая, 10 - самая лучшая.',
'Rconf' => 'Вы дали файлу <i>{filename}</i> {rate} баллов.<br>Новый рейтинг файла {newrating}.',
'R1' => '1',
'R2' => '2',
'R3' => '3',
'R4' => '4',
'R5' => '5',
'R6' => '6',
'R7' => '7',
'R8' => '8',
'R9' => '9',
'R10' => '10',
'Not_rated' => 'Нет оценок',

// Email
	'Emailfile' => 'Отправить по E-mail',
'Emailinfo' => 'Если вы хотите рассказать другу об этом файле, то вы можете заполнить и отправить эту форму и e-mail, содержащий информацию о файле будет отправлен другу!<br>Поля, отмеченные * обязательны для заполнения',
'Yname' => 'Ваше имя',
'Yemail' => 'Ваш E-mail адрес',
'Fname' => 'Имя друга',
'Femail' => 'E-mail друга',
'Esub' => 'Тема E-mail',
'Etext' => 'Текст E-mail',
'Defaultmail' => 'Я думаю, что вы можете быть заинтересованы в',
'Semail' => 'Отправить E-mail',
'Econf' => 'Ваш e-mail успешно отправлен.',

// Comments
	'Comments' => 'Комментарии',
'Comments_title' => 'Заголовок комментария',
'Comment_subject' => 'Тема комментария',
'Comment' => 'Комментарий',
'Comment_explain' => 'Введите отзыв о файле в поле ниже!',
'Comment_add' => 'Добавить комментарий',
'Comment_delete' => 'Удалить',
'Comment_posted' => 'Ваш комментарий успешно добавлен',
'Comment_deleted' => 'Комментарий успешно удален',
'Comment_desc' => 'Название',
'No_comments' => 'Нет комментариев.',
'Links_are_ON' => 'Ссылки <u>ВКЛЮЧЕНЫ</u>',
'Links_are_OFF' => 'Ссылки <u>ВЫКЛЮЧЕНЫ</u>',
'Images_are_ON' => 'Изображения <u>ВКЛЮЧЕНЫ</u>',
'Images_are_OFF' => 'Изображения <u>ВЫКЛЮЧЕНЫ</u>',
'Check_message_length' => 'Проверить длину сообщения',
'Msg_length_1' => 'Ваше сообщение состоит из ',
'Msg_length_2' => ' символов.',
'Msg_length_3' => 'У вас есть ',
'Msg_length_4' => ' символов.',
'Msg_length_5' => 'У вас осталось ',
'Msg_length_6' => ' символов.',


// Download
	'Directly_linked' => 'Вы не можете скачать этот файл с другого сайта напрямую!',

//Permission
	'Sorry_auth_view' => 'Извините, но только %s может просматривать эту категорию.',
'Sorry_auth_file_view' => 'Извините, но только %s могут просматривать этот файл.',
'Sorry_auth_upload' => 'Извините, но только %s могут закачивать файлы в эту категорию.',
'Sorry_auth_download' => 'Извините, но только %s могут скачивать файлы в этой категории.',
'Sorry_auth_rate' => 'Извините, но только %s могут оценивать файлы в этой категории.',
'Sorry_auth_view_comments' => 'Извините, но только %s могут просматривать комментарии в этой категории.',
'Sorry_auth_post_comments' => 'Извините, но только %s могут размещать комментарии в этой категории.',
'Sorry_auth_edit_comments' => 'Извините, но только %s могут редактировать комментарии в этой категории.',
'Sorry_auth_delete_comments' => 'Извините, но только %s могут удалять комментарии в этой категории.',
// MX
	'Sorry_auth_edit' => 'Извините, но вы не можете редактировать файлы в этой категории.',
'Sorry_auth_delete' => 'Извините, но вы не можете удалять файлы в этой категории.',
'Sorry_auth_mcp' => 'Извините, но вы не можете модерировать эту категорию.',
'Sorry_auth_approve' => 'Извините, но вы не можете проверять файлы в этой категории.',


// General
	'Category' => 'Категория',
'Error_no_download' => 'Выбранный файл более не существует',
'Options' => 'Опции',
'Click_return' => 'Нажмите %sздесь%s для возврата к предыдущей странице',
'Click_here' => 'Нажмите здесь',
'never' => 'Нет',
'pafiledb_disable' => 'База скачиваний выключена',
'jump' => 'Выберите категорию',
'viewall_disabled' => 'Эта функция отключена администратором.',
'New_file' => 'Новый файл',
'No_new_file' => 'Нет новых файлов',
'None' => 'Нет',
'No_file' => 'Нет файлов',
'View_latest_file' => 'Показать последний файл',

// Toplists mx blocks
	'Recent_Public_Files' => 'Latest dls',
'Random_Public_Files' => 'Random dls',
'Toprated_Public_Files' => 'Toprated dls',
'Most_Public_Files' => 'Самый скачиваемый',
'File_Title' => 'Название',
'File_Desc' => 'Описание',
'Rating' => 'Оценка',
'Dls' => 'Скачан',

// MX Addon
	'Deletefile' => 'Удалить файл',
'Editfile' => 'Редактировать файл',
'pa_MCP' => '[Модератор]',
'Click_return_not_validated' => 'Нажмите %sздесь%s для возврата к предыдущей странице',
	)
);

$lang['Stats_text'] = "Есть  {total_files} файлы  {total_categories} категории <br />";
$lang['Stats_text'] .= "Там были  {total_downloads} загрузок всего <br /><br />";
$lang['Stats_text'] .= "Новейшие файл  <a href={u_newest_file}>{newest_file}</a><br />";
$lang['Stats_text'] .= "Старый файл  <a href={u_oldest_file}>{oldest_file}</a><br /><br />";
$lang['Stats_text'] .= "Средний рейтинг файла  {average}/10<br />";
$lang['Stats_text'] .= "Самый популярный файл на основе рейтингов  <a href={u_popular}>{popular}</a> с рейтингом  {most}/10<br />";
$lang['Stats_text'] .= "Наименее популярной файл на основе рейтингов  <a href={u_lpopular}>{lpopular}</a> с рейтингом  {least}/10<br /><br />";
$lang['Stats_text'] .= "Среднее количество скачиваний каждого файла есть это  {avg_dls}<br />";
$lang['Stats_text'] .= "Самый популярный файл на основе загрузки является  <a href={u_most_dl}>{most_dl}</a> with {most_no} загрузки <br />";
$lang['Stats_text'] .= "Наименее популярной файл на основе загрузки является  <a href={u_least_dl}>{least_dl}</a> with {least_no} загрузки <br />";

?>