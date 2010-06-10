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
* MX-System - (jonohlsson@hotmail.com) - (www.mx-system.com)
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
	'KB_title' => 'Статьи',
'Article' => 'Статья',
'Category' => 'Категория',
'Article_description' => 'Описание',
'Article_type' => 'Тип',
'Article_keywords' => 'Ключевые слова',
'Articles' => 'Статьи',
'Add_article' => 'Добавить статью',
'Click_cat_to_add' => 'Нажмите на категорию для добавления статьи',
'KB_Home' => 'Домашняя БЗ',
'No_articles' => 'Нет статей',
'Article_title' => 'Имя статьи',
'Article_text' => 'Текст статьи',
'Add_article' => 'Опубликовать статью',
'Read_article' => 'Прочитать статью',
'Article_not_exsist' => 'Статья не существует',
'Category_not_exsist' => 'Категория не существует',

	'Edit' => 'Редактировать',

'Article_submitted_Approve' => 'Статья успешно добавлена.<br />Ожидайте подтверждения Вашей статьи Администратором.',
'Article_submitted' => 'Статья успешно добавлена.',
'Click_return_kb' => 'Нажмите %sздесь%s для возврата к Базе знаний',
	'Click_return_article' => 'Нажмите%sЗдесь%s, чтобы вернуться к статье',

	'Article_Edited_Approve' => 'Статья успешно отредактирована.<br />Ожидайте подтверждения Ваших изменений Администратором.',
'Article_Edited' => 'Статья успешно отредактирована.',
'Edit_article' => 'Редактировать статью',

	'KB_title' => 'Статьи',
'KB_art_description' => 'Здесь Вы можете одобрить или удалить статью.',
'Art_man' => 'Модерирование статей',
'Cat_man' => 'Модерирование категорий',
'KB_cat_description' => 'Здесь Вы можете добавлять, редактировать и удалять категории в Базе знаний',
'Art_action' => 'Действие',

//approve
	'Art_edit' => 'Редактировать статью',
'Art_not_approved' => 'Не одобрять',
'Art_approved' => 'Одобрить',
'Approve' => 'Одобрить',
'Un_approve' => 'Отказать',
'Article_approved' => 'Статья одобрена.',
'Article_unapproved' => 'Статья не одобрена.',

//delete
	'Delete' => 'Удалить',
'Confirm_art_delete' => 'Вы уверены, что хотите удалить эту статью?',
'Confirm_art_delete_yes' => '%sДа, я хочу удалить эту статью%s',
'Confirm_art_delete_no' => '%sНет, я не хочу удалять эту статью%s',
'Article_deleted' => 'Статья успешно удалена.',

	'Click_return_article_manager' => 'Нажмите %sздесь%s tдля возврата к Модерированию статей',

//cat manager
	'Create_cat' => 'Создать новую категорию:',
'Create' => 'Создать',
'Cat_settings' => 'Параметры категории',
'Create_description' => 'Здесь Вы можете задать имя новой категории и добавить описание к ней.',
'Cat_created' =>'Категория успешно создана.',
'Click_return_cat_manager' => 'Нажмите %sздесь%s для возврата к Модерированию категорий',
'Edit_description' => 'Здесь вы можете изменить параметры категории',
'Edit_cat' => 'Редактировать категорию',
'Cat_edited' => 'Категория успешно отредактирована.',
'Parent' => 'Родительская',

	'Cat_delete_title' => 'Удалить категорию',
'Cat_delete_desc' => 'Здесь Вы можете удалить категорию и переместить все статьи в другую категорию',
'Cat_deleted' => 'Категория успешно удалена.',
'Delete_all_articles' => 'Удалить статьи',

//configuration
	'KB_config' => 'Настройка БЗ',
'Art_types' => 'Типы статей',
'KB_config_title' => 'Настройка Базы знаний',
'KB_config_explain' => 'Изменение настроек Базы знаний',
'New_title' => 'Разрешить новые статьи',
'New_explain' => 'Разрешает пользователям добавлять новые статьи в Базу знаний',
'Edit_name' => 'Разрешить редактирование',
'Edit_explain' => 'разрешить пользователям редактировать статьи после добавления их в Базу знаний',
'Notify_name' => 'Уведомить по',
'Notify_explain' => 'Выберите, как бы Вы хотели получать уведомления о добавлении новой статьи в Базу знаний',
'PM' =>'ЛС',
'Click_return_kb_config' => 'Нажмите %sздесь%s для возврата к настройке Базы знаний',
'Admin_id_name' => 'ID Админа',
'Admin_id_explain' => 'Это ID пользователя, которому будут высылаться уведомления на ЛС.',
'Approve_new_name' => 'Подтверждать новые статьи',
'Approve_new_explain' => 'Укажите, необходимо ли подтверждать <b>новые</b> статьи или нет',
'Approve_edit_name' => 'Подтверждать редактирование статей',
'Approve_edit_explain' => 'Укажите, необходимо ли подтверждать <b>отредактированные</b> статьи или нет',
'Allow_anon_name' => 'Разрешить гостям публиковать статьи',
'Allow_anon_explain' => 'Выберите, может ли Гость добавлять <b>новые</b> статьи',
'Del_topic' => 'Удалить сообщение',
'Del_topic_explain' => 'Когда вы удаляете сообщение, хотите ли вы сообщить об этом в статью?',
'Allow_comments' => 'Разрешить комментарии',
'Allow_comments_explain' => 'Разрешить пользователям добавлять комментарии к статье',
	'Del_topic' => 'Удалить Тему',
	'Del_topic_explain' => 'удалении статьи, вы хотите чтобы все комментарии этой тему были удалены?',

	'Use_comments' => 'Комментарии',
	'Use_comments_explain' => 'Включить комментарии для статей, которые будут включены в icyphoenix форум',
	'Use_ratings' => 'Рэйтинг',
	'Use_ratings_explain' => 'Включить рэйтинг для статей',

	'Forum_id' => 'ID форума',
	'Forum_id_explain' => 'Нва этом форуме будут публиковаться комментарии к статьям',


// Permissions
	'KB_Auth_Title' => 'Разрешения Кб',
 'KB_Auth_Explain' => 'Выбирите, какая группа пользователей может быть модератором для каждой категории Кб или разрешить только личный доступ доступ',
 'Select_a_Category' => 'Выбирите Категорию',
 'Look_up_Category' => 'Категория Просмотра',
 'KB_Auth_successfully' => 'Автор был  успешно обновлен',
 'Click_return_KB_auth' => 'Нажмите %sЗдесь%s, чтобы возвратиться к Разрешениям Кб',

	'Upload' => 'Загрузка',
	'Rate' => 'Рейтинг',
	'Comment' => 'Комментарии',
	'Approval' => 'Одобрить',
	'Approval_edit' => 'Редактировать Одобрение',

	'Allow_rating' => 'Разрешить оценки',
 'Allow_rating_explain' => 'Разрешить пользователям оценивать статьи.',

	'Allow_anonymos_rating' => 'Разрешить анонимные оценки',
'Allow_anonymos_rating_explain' => 'Если оценки будут активированы, позволяет анонимным пользователям добавлять рейтинги на ваши статьи',

'KB_config_updated'  => 'БЗ Конфигурация успешно обновлена.',
	
	'KB_notify_subject_new' => 'Новая Статья!',
 'KB_notify_subject_edited' => 'Отредактированная Статья!',
 'KB_notify_subject_approved' => 'Одобренная Статья!',
 'KB_notify_subject_unapproved' => 'Неутвержденная Статья!',
 'KB_notify_body' => 'статья одобрена или изменена:',

	'Category_Permissions' => 'Разрешения Категории',
 'Category_Title' => 'Заголовок Категории',
 'Category_Desc' => 'Описание Категории',
 'View_level' => 'Уровень Представления',
 'Upload_level' => 'Уровень Загрузки',
 'Rate_level' => 'Уровень Нормы',
 'Comment_level' => 'Уровень Комментария',
 'Edit_level' => 'Уровень Редактирования',
 'Delete_level' => 'Удалить Уровень',
 'Approval_level' => 'Уровень Одобрения',
 'Approval_edit_level' => 'Уровень Редактирования Одобрения',

/*
	'KB_Rules_post_can' => 'You <b>can</b> post new articles in this category',
	'KB_Rules_post_cannot' => 'You <b>cannot</b> post new articles in this category',
	'KB_Rules_comment_can' => 'You <b>can</b> comment articles in this category',
	'KB_Rules_comment_cannot' => 'You <b>cannot</b> comment articles in this category',
	'KB_Rules_edit_can' => 'You <b>can</b> edit your articles in this category',
	'KB_Rules_edit_cannot' => 'You <b>cannot</b> edit your articles in this category',
	'KB_Rules_delete_can' => 'You <b>can</b> delete your articles in this category',
	'KB_Rules_delete_cannot' => 'You <b>cannot</b> delete your articles in this category',
	'KB_Rules_rate_can' => 'You <b>can</b> rate articles in this category',
	'KB_Rules_rate_cannot' => 'You <b>cannot</b> rate articles in this category',
	'KB_Rules_approval_can' => 'Articles <b>need no</b> approval in this category',
	'KB_Rules_approval_cannot' => 'Articles <b>need</b> approval in this category',
	'KB_Rules_approval_edit_can' => 'Article edits <b>need no</b> approval in this category',
	'KB_Rules_approval_edit_cannot' => 'Article edits <b>need</b> approval in this category',
*/
	'KB_Rules_post_can' => 'Вы <b> можете </b>, переносить новые статьи',
 'KB_Rules_post_cannot' => 'Вы <b> не можете </b>, переносить новые статьи',
 'KB_Rules_comment_can' => 'Вы <b> можете </b> оставить комментарии',
 'KB_Rules_comment_cannot' => 'Вы <b> не можете </b> оставлять комментарии',
 'KB_Rules_edit_can' => 'Вы <b> можете </b>, редактировать свои статьи',
 'KB_Rules_edit_cannot' => 'Вы <b> не можете </b>, редактировать свои статьи',
 'KB_Rules_delete_can' => 'Вы <b> можете </b>, удалить свои статьи',
 'KB_Rules_delete_cannot' => 'Вы <b> не можете </b>, удалять свои статьи',
 'KB_Rules_rate_can' => 'Вы <b> можете </b>, оценивать статьи',
 'KB_Rules_rate_cannot' => 'Вы <b> не можете </b>, оценивать статьи',
 'KB_Rules_approval_can' => 'Статьи <b> не нуждаются </b> в подтверждении',
 'KB_Rules_approval_cannot' => 'Статьи <b> нуждаются </b> в подтверждении',
 'KB_Rules_approval_edit_can' => 'Статьи <b>не нуждаются  </b> в подтверждении',
 'KB_Rules_approval_edit_cannot' => 'Статья <b> потребность </b> в подтверждении',
 'KB_Rules_moderate' => 'Вы <b> можете </b> %Модерировать эту Категорию%s',// %s replaced by a href links, do not remove!
 'KB_Rules_moderate_can' => 'Вы <b> можете </b>, модерировать эту категорию',// %s replaced by a href links, do not remove!
	'Comments_show' => 'Показать комментарии статьи.',
'Comments_show_explain' => 'отображает комментарии на странице',
'Comments_show_title' => 'Комментарии пользователей',

	'Mod_group' => 'KB Модератор Групп',
	'Mod_group_explain' => '- с разрешения администратора KB!',

	'Bump_post' => 'Столкновение статьи должность',
'Bump_post_explain' => 'При редактировании статьи, ответить опубликовано в статье теме уведомления об обновленной статье.',

'Stats_list' => 'Показывать KB статистика',
'Stats_list_explain' => 'Показывать KB статистики в заголовке.',

'Header_banner' => 'Показать Топ Logo',
'Header_banner_explain' => 'Показать KB логотип в заголовке.',

'Comment_info' => 'Настройки Комментарий ',
'Rating_info' => 'Настройки Оценки ',

//types
	'Types_man' => 'Управление типами',
'KB_types_description' => 'Здесь Вы можете добавлять, удалять и редактировать типы статей',
'Create_type' => 'Создать новый тип статьи:',
'Type_created' => 'Новый тип стаей успешно создан.',
'Click_return_type_manager' => 'Нажмите %sздесь%s для возврата к Управлению типами',

'Edit_type' => 'Редактировать тип',
'Edit_type_description' => 'Здесь Вы можете изменить имя типа статей',
'Type_edited' => 'Тип статей успешно изменен.',

	'Type_delete_title' => 'Удалить тип статей',
'Type_delete_desc' => 'Здесь Вы можете удалить тип статей или зменить его.',
'Change_type' => 'Изменить тип статей на',
'Change_and_Delete' => 'Изменить и удалить',
'Type_deleted' => 'Тип статей успешно удален.',

'Pre_text_name' => 'Инструкция по публикации статей',
'Pre_text_header' => 'Заголовок инструкции по публикации статей',
'Pre_text_body' => 'Тело инструкции по публикации статей',
'Pre_text_explain' => 'Этот текст инструкции будет отображаться, когда пользователь будет входить на публикационный форум.',

'Show' => 'Показать',
'Hide' => 'Скрыть',

	'Empty_fields' => 'Пожалуйста, заполните все части формы.',
	'Empty_fields_return' => 'Нажмите %sЗдесь%s чтобы вернуться в форму.',
	'Empty_category' => 'Вы должны выбрать категорию',
'Empty_type'=> 'Вы должны выбрать тип',
'Empty_article_name' => 'Вы должны ввести название статьи',
'Empty_article_desc' => 'Вы должны ввести описание статьи',

	'Read_full_article' => '>>Прочитать всю статью',
'Comments' => 'Посмотреть комментарии',

	'No_add' => 'Вы не можете добавлять новые статьи',
'No_edit' => 'Вы не можете отредактировать эту статью!',
'Post_comments' => 'Опубликовать комментарий',

	'Category_sub' => 'Подкатегория',
'Quick_stats' => 'Быстрый статус',

// added

	'Edited_Article_info' => 'Статья обновлена...',
'No_Articles' => 'Эта категория пустая!',
'Not_authorized' => 'Вы не авторизированы здесь...',
'TOC' => 'Содержание',

// Rate
	'Votes_label' => 'Оценить ',
'Votes' => 'голос(ов)',
'Rate' => 'Оценка статьи',
'ADD_RATING' => '[Оценка статьи]',
'Rerror' => 'Извините, но Вы уже оценивали эту статью.',
'Rateinfo' => 'Вы можете оценить статью <i>{filename}</i>.<br />Пожалуйста, поставте оценку. 1 - отвратительно, 10 - прекрасно.',
'Rconf' => 'Вы поставили <i>{filename}</i> оценку {rate}.<br />Теперь рейтинг стал {newrating}/10.',
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
'Click_return_rate' => 'Нажмите %sздесь%s для возврата к статье',

// Print version
	'Print_version' => '[Версия для печати]',

// Stats
	'Top_toprated' => 'Лучшие статьи',
'Top_most_popular' => 'Самые популярные',
'Top_latest' => 'Последнии статьи',

// Votes check
	'Votes_check_ip' => 'Ошибка оценки - IP-адрес',
'Votes_check_ip_explain' => 'Допускается только одна оценка с одного IP-адреса.',


	'Votes_check_userid' => 'Ошибка оценки - Пользователь',
'Votes_check_userid_explain' => 'Пользователи могут только один раз оченивать каждую статью.',


	'Article_pag' => 'Нумерация статьи',
'Article_pag_explain' => 'Номер статьи отображается в (stats) категории перед номером старницы.',

'Comments_pag' => 'Нумерация комментариев',
'Comments_pag_explain' => 'Номер комментария отображается перед номером страницы.',

	'News_sort' => 'Метод сортировки статей',
'News_sort_explain' => 'Выберите способ сортировки статей в категориях.',

'News_sort_par' =>'ASC или DESC сортировка',
'News_sort_par_explain' => 'ASC - по возрастнию, DESC - по убыванию',

// General strings from the news admin panel

'News_settings' => 'Настройка блока БЗ',
'News_settings_short_explain' => 'Настройка отображения статей на главной страницу.',
'News_settings_explain' => 'Здесь Вы можете изменить настройки для блока БЗ. Эта панель позволяет Вам указать, какие категории будут отображаться в блок отобразит.',

// Update result messages

	'News_updated_return_settings' => 'Настройки блока БЗ успешно изменены.<br /><br />Нажмите %sздесь%s для возврата к главной странице.', // %s's for URI params - DO NOT REMOVE
'News_update_error' => 'Невозможно обновить настройки блока БЗ.<br /><br />Этот МОД разработан для MySQL, свяжитесь с автором при возникновении данной ошибки. Если Вы можете предложить перевод SQL в другие форматы баз данных, пожалуйста, пришлите их:<br />',


// Custom Field
	'Fieldselecttitle' => 'Выберите, что делать',
'Afield' => 'Другую Область: Добавить',
'Efield' => 'Пользовательскую Область: Изменить',
'Dfield' => 'Пользовательскую Область: Удалить',
'Mfieldtitle' => 'Дополнительные поля',
'Afieldtitle'=> 'Добавить поле',
'Efieldtitle' => 'Изменить поле',
'Dfieldtitle' => 'Удалить поле ',
'Fieldexplain' => 'Вы можете использовать пользовательские поля для управления в разделе чтобы добавлять, редактировать и удалять поля. Вы можете использовать настраиваемые поля, чтобы добавить дополнительную информацию о статье.',
'Fieldname' => 'Имя поля',
 'Fieldnameinfo' => 'Это - название поля, например \'File Размер \'',
 'Fielddesc' => 'Описание Поля',
 'Fielddescinfo' => 'Это - описание поля, например \'File Размер в Мегабайтах \'',
'Fieldadded' => 'Пользовательские поля был успешно добавлены',
'Fieldedited' => 'выбранные пользовательские поля  успешно отредактированы',
'Dfielderror' => 'Вы еще не выбрали поля, для удаления',
'Fieldsdel' => 'пользовательские поля, которые вы выбрали, были успешно удалены',

'Field_data' => 'Опции',
'Field_data_info' => 'Введите параметры, которые пользователь может выбирать. По отдельности в новой строке.',
'Field_regex' => 'регулярных выражений ',
'Field_regex_info' => 'Вы можете потребовать ввода поле для соответствия регулярного выражения %s(PCRE)%s.',
'Field_order' => 'Просмотр дисплея ',

//Fields Types

	'Field_Input' => 'Текстовое поле Одиночной линии',
 'Field_Textarea' => 'Многострочное Текстовое поле',
 'Field_Radio' => 'Кнопки с зависимой фиксацией Единственного выбора',
 'Field_Select' => 'Меню Единственного выбора',
 'Field_Select_multiple' => 'Меню Множественного выбора',
 'Field_Checkbox' => 'Переключатель Множественного выбора',

 'Click_return' => 'Нажимите %sЗдесь%s, чтобы возвратиться к предыдущей странице',


// added
	'Cat_all' => 'Все',

	'L_Pages' => 'Pages',
	'L_Pages_explain' => 'Использовать [pages] чтобы разбить статью на страницы',
	'L_Toc' => 'Оглавлении (TOC)',
	'L_Toc_explain' => 'Использовать [toc] комманду чтобы добавить вход в TOC',
	'L_Abstract' => 'Резюме',
	'L_Abstract_explain' => 'Использовать [abstract]...[/abstract] чтобы вставить резюме',

	'L_Title_Format' => 'Заголовок',
	'L_Title_Format_explain' => 'Использовать [title]...[/title] чтобы вставить заголовок',

	'L_Subtitle_Format' => 'Подзаголовок',
	'L_Subtitle_Format_explain' => 'Используйте [subtitle]...[/subtitle] чтобы вставить подзаголовок',

	'L_Subsubtitle_Format' => 'Подподзаголовок',
	'L_Subsubtitle_Format' => 'Используйте [subsubtitle]...[/subsubtitle] чтобы вставить маленький заголовок ',

	'L_Options' => 'Опции:',
	'L_Formatting' => 'Форматирование:',

	'Default_article_id' => 'Набор значений статьи  по умолчанию , для  просмотра статьи',

// Added for v. 2.0
	'KB_comment_prefix' => '[KB] ',

	'Wysiwyg' => 'Использовать WYSIWYG-редактор',
'Wysiwyg_explain' => 'Если включено, стандартный BBCode / HTML / смайлики диалог ввода заменяется WYSIWYG-редактор.',

'Wysiwyg_path' => 'Путь к WYSIWYG программного обеспечения',
'Wysiwyg_path_explain' => 'Это путь (от mxBB / IP корень) в режиме WYSIWYG папку программы, например, \'modules/\', если вы загрузили, например tinemce  / TinyMCE.',

'Formatting_fixup' => 'Fix до форматирования',
'Formatting_fixup_explain' => 'Если включить опцию, текст статьи будет переформатирован: перенос строк, URL обрезает, IMG и некоторые изменения размера BBCode переформатирования и т.д.',

'Addtional_field' => ' Подробнее(по желанию)',

'No_cat_comments_forum_id' => 'Комментарии включены, но вы не указали цель форума icyphoenix категории в КБ ACP - категории',
// Quick Nav
	'Quick_nav' => 'Быстрая навигация Кб',
	'Quick_jump' => 'Вперед',

	'Categories' => 'Категории',
	'Subcategory' => 'Подкатегории',
	)
);

?>