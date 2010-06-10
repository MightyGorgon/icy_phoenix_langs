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
* Smartor (smartor_xp@hotmail.com)
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
// Album Index
'Photo_Album' => 'Фотоальбом',
'Pics' => 'Фото',
'Last_Pic' => 'Последнее фото',
'Public_Categories' => 'Общие категории',
'No_Pics' => 'Нет фото',
'Users_Personal_Galleries' => 'Личные галереи пользователей',
'Your_Personal_Gallery' => 'Ваша личная галерея',
'Recent_Public_Pics' => 'Последние фотографии',
	'Nav_Separator' => '&nbsp;&raquo;&nbsp;',

// Category View
	'Category_not_exist' => 'Категория не существует',
'Upload_Pic' => 'Загрузить фото',
	'Upload_Pics' => 'Загрузить фотографии',
	'JUpload_Pic' => 'Загрузить несколько фотографий с JUpload',
	'Pic_Title' => 'Заголовок фото',
	'View' => 'Просмотр',
	'Pic_Poster' => 'Постер',
	'Pic_Image' => 'Изображение',
	'Waiting' => ' изображение(я) в ожидании подтверждения',

/*
	'Album_upload_can' => 'You <b>can</b> upload new pics in this category',
	'Album_upload_cannot' => 'You <b>cannot</b> upload new pics in this category',
	'Album_rate_can' => 'You <b>can</b> rate pics in this category',
	'Album_rate_cannot' => 'You <b>cannot</b> rate pics in this category',
	'Album_comment_can' => 'You <b>can</b> post comments to pics in this category',
	'Album_comment_cannot' => 'You <b>cannot</b> post comments to pics in this category',
	'Album_edit_can' => 'You <b>can</b> edit your pics and comments in this category',
	'Album_edit_cannot' => 'You <b>cannot</b> edit your pics and comments in this category',
	'Album_delete_can' => 'You <b>can</b> delete your pics and comments in this category',
	'Album_delete_cannot' => 'You <b>cannot</b> delete your pics and comments in this category',
*/
	'Album_view_can' => 'Вы <b>можете</b> просматривать фото',
	'Album_view_cannot' => 'Вы <b>не можете</b> просматривать фото',
	'Album_upload_can' => 'Вы <b>можете</b> закачивать новые фото в этой категории',
'Album_upload_cannot' => 'Вы <b>не можете</b> закачивать новые фото в этой категории',
'Album_rate_can' => 'Вы <b>можете</b> оценивать фото в этой категории',
'Album_rate_cannot' => 'Вы <b>не можете</b> оценивать фото в этой категории',
'Album_comment_can' => 'Вы <b>можете</b> размещать комментарии в этой категории',
'Album_comment_cannot' => 'Вы <b>не можете</b> размещать комментарии в этой категории',
'Album_edit_can' => 'Вы <b>можете</b> ваши фото и комментарии в этой категории',
'Album_edit_cannot' => 'Вы <b>не можете</b> редактировать ваши фото и комментарии в этой категории',
'Album_delete_can' => 'Вы <b>можете</b> удалять ваши фото и комментарии в этой категории',
'Album_delete_cannot' => 'Вы <b>не можете</b> удалять ваши фото и комментарии в этой категории',
'Album_moderate_can' => 'Вы <b>можете</b> %sмодерировать%s эту категорию',

	'Edit_pic' => 'Редактировать',
'Delete_pic' => 'Удалить',
'Rating' => 'Оценить',
'Comments' => 'Комментарии',
'New_Comment' => 'Новый комментарий',

'Not_rated' => '<i>нет оценки</i>',
	'Random_Pictures' => 'Случайное изображение',
	'Highest_Rated_Pictures' => 'Фотографии с высоким рейтингом',
	'Most_Viewed_Pictures' => 'Популярные фотографии',

	'Avatar_Set' => 'Сделать Аватар',
	'BBCode_Copy' => 'Копировать BBCode',

// Upload
	'Pic_Desc' => 'Описание фото',
'Plain_text_only' => 'Только текст',
'Max_length' => 'Макс.длина (байт)',
'Upload_pic_from_machine' => 'Закачать фото с вашего компьютера',
'Upload_to_Category' => 'Закачать в категорию',
'Upload_thumbnail_from_machine' => 'Закачать значок с вашего компьютера (должен совпадать с вашей фото)',
'Upload_thumbnail' => 'Закачать изображение',
'Upload_thumbnail_explain' => 'Тип файла должен совпадать',
'Thumbnail_size' => 'Размер изображения (пиксел)',
'Filetype_and_thumbtype_do_not_match' => 'Ваше фото и изображение должны быть одного типа',

	'Upload_no_title' => 'Вы должны ввести заголовок',
'Upload_no_file' => 'Вы должны ввести имя файла и путь к нему',
'Desc_too_long' => 'Ваше описание слишком длинное',

	'JPG_allowed' => 'Разрешены JPG',
'PNG_allowed' => 'Разрешены PNG',
'GIF_allowed' => 'Разрешены GIF',

	'Album_reached_quota' => 'Эта категория превышает квоту изображений. Вы не можете больше закачивать. Свяжитесь с администратором для большей информации',
'User_reached_pics_quota' => 'Вы превысили квоту фотографий. Вы не можете больше закачивать. Свяжитесь с администратором для большей информации',

	'No_valid_category_selected' => 'Нет выбранной категории альбома',
	'No_category_to_upload' => 'Извините,  нет категорий в которую Вы моглибы произвести загрузку.',
	'Not_allowed_file_type' => 'Тип Вашего файла не поддерживается',
	'Upload_image_size_too_big' => 'Ваш размер изображения является слишком большим',
	'Upload_thumbnail_size_too_big' => 'Ваш размер эскиза является слишком большим',

	'Missed_pic_title' => 'Вы должны ввести заголовок',

	'Click_return_category' => 'Нажмите %sздесь%s для возврата к категории',
'Click_return_album_index' => 'Нажмите %sздесь%s для возврата к главной странице',

	'Add_File' => 'Добавить файл',
	'File_thumbnail_count_mismatch' => 'колличество загруженных картинок и эскизов doesn \'t соответствие',
 'No_thumbnail_for_picture_found' => 'не был никаким эскизом, найденным для загруженной картинки (названный: %s)',
 'No_picture_for_thumbnail_found' => 'не был никаким изображением, найденным для переданного эскиза (названный: %s)',
 'Unknown_file_and_thumbnail_error_mismatch' => 'ошибка Uknown был поднят, загружая картинку и эскиз <br/> названное Изображение: %s и Эскиз назвали: %s <br/>',
 'Picture_exceeded_maximum_size_INI' => 'Изображение, названное \' % s \', является слишком большим. Изображение пропущено. <br/>',
 'Thumbnail_exceeded_maximum_size_INI' => 'Эскиз, названный \' % s \', является слишком большим. Изображение и эскиз пропущено. <br/>',
 'Execution_time_exceeded_skipping' => 'максимальное время выполнение было превышено. Следующие файлы не были загружены: <br/>',
 'Skipping_uploaded_picture_file' => '%s <br/>',
 'Skipping_uploaded_picture_and_thumbnail_file' => '%s (эскиз: %s) <br/>',
 'Album_upload_not_successful' => 'Ни одна из Ваших картинок не  загружена  <br/> <br/>',
 'Album_upload_partially_successful' => 'Только часть Ваших изображений было успешно передано  <br/> <br/>',
 'No_pictures_selected_for_upload' => 'Нет выбранных изображений для загрузки или неизвестная ошибка',

// 'Bad_upload_file_size' => 'Your uploaded file is too large or corrupted',
// 'Album_upload_successful' => 'Your pic has been uploaded successfully',
// 'Album_upload_need_approval' => 'Your pic has been uploaded successfully.<br /><br />But the feature Pic Approval has been enabled so your pic must be approved by a administrator or a moderator before posting',

	'Bad_upload' => 'Плохая загрузка',
 'Bad_upload_file_size' => 'Ваш переданный файл (%s) является слишком большим или поврежденным',
 'Album_upload_successful' => 'Ваше изображение (я) было передано успешно',
 'Album_upload_need_approval' => 'Ваше изображение (я) было передано успешно. <br/> <br/>, Но Одобрение Рис. особенности был допущен так, Ваш рис. должен быть одобрен администратором или модератором перед отправлением.',
	'Rotation' => 'Поворот (против часовой стрелки)',

	'Max_file_size' => 'Максимальный размер файла (байт):',
	'Max_width' => 'Максимальная ширина изображения (пикселей):',
	'Max_height' => 'Максимальная высота изображения (пикселей):',

// Album Nuffload
	'Time_elapsed' => 'прошедшее Время',
'Time_remaining' => 'Остальное Время',
'Upload_in_progress' => 'Загрузка',
'Please_wait' => 'Пожалуйста, подождите ...',
'uploaded' => 'Загружено %multi_id% из  %multi_max% изображения.',
'No_file_received' => 'Нет полученного изображения',
'No_thumbnail_file_received' => 'Нет полученной миниатюры',
'File_too_big' => 'Слишком большой размер изображения',
'Thumbnail_too_big' => ' Миниатюра Слишком большого размера',
'Image_res_too_high' => 'Разрешение изображения слишком большое',
'Add_field' => 'Добавить файл загрузки',
'Remove_field' => ' Удалить из поля Загрузку файлов ',
'ZIP_allowed' => 'Разрешенные к загрузке файлов ZIP',

// View Pic
	'Pic_ID' => 'ID',
	'Pic_Details' => 'Информация о изображении',
	'Pic_Size' => 'Размер',
	'Pic_Type' => 'Тип изображения',
	'Pic_BBCode' => 'BBCode',
	'Pic_not_exist' => 'Фото не существует',
	'Click_enlarge' => 'Нажмите чтобы увеличить',
	'Prev_Pic' => 'Предыдущее изображение',
	'Next_Pic' => 'Следующее изображение',
	'Slideshow' => 'Слайд Шоу',
	'Slideshow_Delay' => 'Задержка Слайд Шоу',
	'Slideshow_On' => 'Слайд Шоу',
	'Slideshow_Off' => 'Остановить Слайд Шоу',
	'Pics_Nav' => 'Передвижение Изображения',
	'Pics_Nav_Next' => 'Следующее Фото',
	'Pics_Nav_Prev' => 'Предыдущее Фото',
	'Pics_Counter' => 'Просмотр Фото %s of %s',

// Edit Pic
	'Edit_Pic_Info' => 'Изменитьинформацию фото',
	'Pics_updated_successfully' => 'Ваша информация была успешно обновлена',

// Delete Pic
	'Album_delete_confirm' => 'Вы хотите удалить эти фото?',
	'Pics_deleted_successfully' => 'Фотографии удалены',

// ModCP
	'Approval' => 'Проверка',
'Approve' => 'Разрешить',
'Unapprove' => 'Запретить',
'Status' => 'Состояние',
'Locked' => 'Заблокировано',
'Not_approved' => 'Не проверено',
'Approved' => 'Проверено',
	'Copy' => 'Копировать',
	'Move_to_Category' => 'Переместить в категорию',
	'Pics_moved_successfully' => 'Ваши фото успешно перемещены',
	'Copy_to_Category' => 'Копировать в Категорию',
	'Pics_copied_successfully' => 'Ваши фото были успешно скопированы ',
	'Pics_locked_successfully' => 'Ваши фото успешно заблокированы',
'Pics_unlocked_successfully' => 'Ваши фото успешно разблокированы',
'Pics_approved_successfully' => 'Ваши фото успешно проверены',
'Pics_unapproved_successfully' => 'Ваши фото успешно запрещены',

// Rate
	'Current_Rating' => 'Оценка',
'Please_Rate_It' => 'Оцените',
	'Login_To_Vote' => 'Пожалуйста, войдите чтобы проголосовать',
	'Already_rated' => 'Вы уже оценили это фото',
	'Own_Pic_Rate' => 'Вы не можете отдать голос для фотографии',
	'Album_rate_successfully' => 'Фото успешно оценено.',
	'Click_rate_more' => 'Нажмите %sздесь% чтобы увидеть больше фотографий.',
	'Hot_Or_Not' => 'Лучшее или нет',

// Comment
	'Comment_no_text' => 'Вы должны ввести комментарий',
'Comment_too_long' => 'Ваш комментарий сликом длинный',
'Comment_delete_confirm' => 'Удалить комментарий?',
'Pic_Locked' => 'Извините, фото заблокировано. Вы больше не можете размещать комментарии',
	'Post_your_comment' => 'Пожалуста, введите свой комментарий!',

// Personal Gallery
	'Personal_Gallery_Explain' => 'Вы можете просматривать личные галереи других пользователей, нажав на ссылку в их профиле',
'Personal_gallery_not_created' => 'Личная галерея %s пуста или не была создана',
'Not_allowed_to_create_personal_gallery' => 'Извините, только администраторам разрешено создавать личные галереи',
'Click_return_personal_gallery' => 'Нажмите %sздесь%s для возврата к личной галерее',

// Download Archive
	'Download_pics' => 'Загрузить Фото (ZIP)',
	'Download_page' => 'Загрузить Фото на эту страницу (ZIP)',
	'No_Download_auth' => 'У вас нет прав архивировать этот альбом',

// Email Notification
	'Email_Notification' => 'Уведомление Альбома по Email',
 'Email_Notification_Explain' => 'Эта установка позволяет администрации получать уведомление, когда новое изображение добавлено в альбом',
 'Approvation_OK' => 'Одобрить',
 'Approvation_NO' => 'Чтобы быть Одобренным',


// Album Hierarchy Index Table
	'Last_Comment' => 'Последний Комментарий',
	'Last_Comments' => 'Последние Комментарии',
	'No_Comment_Info' => 'Нет Комментариев',
	'No_Pictures_In_Cat' => 'В категориях нет изображений',
	'Total_Pics' => 'Всего Изображений',
	'Total_Comments' => 'Всего Комментариев',
	'Last_Index_Thumbnail' => 'Последнее Изображение',
	'One_Sub_Total_Pics' => '%d Изображение',
	'Multiple_Sub_Total_Pics' => '%d Изображения',
	'Album_sub_categories' => 'Подкатегория',
	'No_Public_Galleries' => 'Нет публичных категорий',
	'One_new_picture' => '%d Новое Изображение',
	'Multiple_new_pictures' => '%d Новые Изображения',

// Personal Album Hierarchy Index Table
	'Personal_Categories' => 'Личная Галлерея',
	'Create_Personal_Categories' => 'Создать личную Галлерею',
	'Personal_Cat_Admin' => 'Личная Галлерея Администратора',
	'Recent_Personal_Pics' => 'Фото из личной Галлереи %s',

// Album Moderator Control Panel
	'Modcp_check_all' => 'Проверить Все',
	'Modcp_uncheck_all' => 'Снять Все',
	'Modcp_inverse_selection' => 'Обратный выбор',

	'Show_selected_pic_view_mode' => 'Показывать только выбранные категории личных Галерей',
	'Show_all_pic_view_mode' => 'Показать все фотографии в личной галереи',

// Access language strings
	'Album_Can_Manage_Categories' => 'Вы <b>можете</b> %sУправлять%s этой категорией',
	'No_Personal_Category_admin' => 'Вы не можете управлять личным категориями этой галереи',

// The picture list of a member (album_memberlist.php)
	'Pic_Cat' => 'Категория',
	'Picture_List_Of_User' => 'Все изображения %s',
	'Member_Picture_List_Explain' => 'Вы можете просмотреть полный список фотографий, предоставленные другими пользователями, перейдя по ссылке в их профиле',
	'Comment_List_Of_User' => 'Все Комментарии %s',
	'Rating_List_Of_User' => 'Все рейтинги %s',
	'Show_All_Pictures_Of_user' => 'Показать все изображения %s',
	'Show_All_Comments_Of_user' => 'Показать все комментарии %s',
	'Show_All_Ratings_Of_user' => 'показать все рейтинги %s',

// The pictures list
	'All_Picture_List_Of_User' => 'Все Изображения',
	'All_Comment_List_Of_User' => 'Все комментарии',
	'All_Rating_List_Of_User' => 'Все Рейтинги',
	'All_Show_All_Pictures_Of_user' => 'Показать все Изображения',
	'All_Show_All_Comments_Of_user' => 'Показать все Комментарии',
	'All_Show_All_Ratings_Of_user' => 'Показать все Рейтинги',

	'Not_commented' => '<i>Не комментировали</i>',

// Nuff's Stuff
	'Nuff_Click' => 'Нажимите здесь, чтобы применить Специальные Эффекты',
 'Nuff_UnClick' => 'Нажмите здесь для нормальной визуализации',
 'Nuff_Title' => 'Специальные Эффекты',
 'Nuff_Explain' => 'Применить несколько эффектов к изображениям. <br/> Помните, что  <i> <b> будет сильная нагрузка на сервер</b> </i>, пожалуйста не нарушайте режим эксплуатации. Некоторые эффекты автоматически изменяют размеры изображения вывода',
 'Nuff_Normal' => 'Нормальное Изображение',
 'Nuff_Normal_Explain' => 'Нет примененных эффектов',
 'Nuff_BW' => 'Черно-белый',
 'Nuff_BW_Explain' => 'Преобразовать изображение в Черно-белый',
 'Nuff_Sepia' => 'Тон Сепии',
 'Nuff_Sepia_Explain' => 'Применить настройку сепии к изображению',
 'Nuff_Flip' => 'Транспонирование',
 'Nuff_Flip_Explain' => 'Нажмите изображение',
 'Nuff_Mirror' => 'Зеркало',
 'Nuff_Mirror_Explain' => 'Зеркало изображение',
 'Nuff_Flip_H' => 'Горизонтальная',
 'Nuff_Flip_V' => 'Вертикальная',
 'Nuff_Rotate' => 'Вращение Картинки (против часовой стрелки)',
 'Nuff_Rotate_Explain' => 'Вращает изображения, против часовой стрелки',
 'Nuff_Resize' => 'Изменить размеры',
 'Nuff_Resize_Explain' => 'Размер Изображения',
 'Nuff_Resize_W' => 'Ширина',
 'Nuff_Resize_H' => 'Высота',
 'Nuff_Resize_No_Resize' => 'Нет размеров',
 'Nuff_Watermark' => 'Водяной знак',
 'Nuff_Watermark_Explain' => 'Применить водяной знак к изображению',
 'Nuff_Recompress' => 'Повторно',
 'Nuff_Recompress_Explain' => 'Повторно сжимать изображение',
 'Nuff_Alpha' => 'Альфа',
 'Nuff_Alpha_Explain' => 'Накладывают альфа-канал к изображению',
 'Nuff_Blur' => 'Размытие',
 'Nuff_Blur_Explain' => 'Применить фильтр размытия к изображению',
 'Nuff_Pixelate' => 'Инфракрасный',
 'Nuff_Pixelate_Explain' => 'Применить фильтр инфаркрасного к изображению',
 'Nuff_Scatter' => 'Разброс',
 'Nuff_Scatter_Explain' => 'Применяют фильтр разброса к изображению',
 'Nuff_Infrared' => 'Инфракрасный',
 'Nuff_Infrared_Explain' => 'Применяют инфракрасный фильтр к изображению',
 'Nuff_Tint' => 'Оттенок',
 'Nuff_Tint_Explain' => 'Применить красный оттенок к изображению',
 'Nuff_Interlace' => 'Чередуются (Горизонтальные Строки)',
 'Nuff_Interlace_Explain' => 'Накладывают чередовать канал к изображению',
 'Nuff_Screen' => 'Экран (Строки Версии Hor)',
 'Nuff_Screen_Explain' => 'Накладывают канал экрана к изображению',
 'Nuff_Stereogram' => 'Stereograph',
 'Nuff_Stereogram_Explain' => 'Преобразовывают изображение в stereograph (черно-белые требуемых 16 битов)',

	'Pic_Gallery' => 'OTF Галлерея',
	'Select_Pic' => 'Выбор Изображения',
	'Select_Category' => 'Выбор Категории',
	'Title_Description' => 'Название &amp; Описание',

// Pic watch
	'No_longer_watching_comment' => 'Вы больше не смотрите этот рис. за комментариями',
 'Watching_comment' => 'Вы теперь смотрите этот рис. за комментариями',
 'Pic_comment_notification' => 'Уведомление Комментария Альбома',
 'Pic_comment_watch_checkbox' => 'Флажок, который будет зарегистрирован относительно комментариев рис.:',
 'Watch_pic' => 'Смотрят этот рис. за комментариями',
 'Unwatch_pic' => 'Прекращают смотреть этот рис. за комментариями',
 'Click_return_pic' => 'Нажмите %sЗдесь%s, чтобы возвратиться к изображению',

	'Pic_RDF' => 'RSS Feed 1.0',
	'Pic_RSS' => 'RSS Feed 2.0',
	)
);

?>