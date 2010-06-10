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
* UseLess
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
'n_title' => 'XS-News Управление',

'n_main_title' => 'XS-News Новости.',
'n_main_title_explain' => 'Здесь Вы можете редактировать новости.<br /><br />Если Вы хотите поменяеть состояние отображения новости, то Вам необходимо отредактировать ее.',

// Config
'n_config_title' => 'XS-News Конфигурация',
'n_config_title_explain' => 'Здесь Вы можете настроить XS-News.',
'n_config_updated' => 'XS-News Конфигурация обновлена.',

// Add menu item
	'n_add_page_title' => 'Добавить новость',
'n_add_page_title_explain' => 'Используйте эту форму для создания новой новости.',
'n_add_header' => 'Добавить новую новость.',
'n_news_item_added' => 'Новость добавлена.',

// edit menu item
'n_edit_page_title' => 'Редактировать новость',
'n_edit_page_title_explain' => 'Используйте эту форму для редактирования новости.',
'n_edit_header' => 'Редактировать эту новость',

// Delete
'n_news_delete' => 'Удалить новость.',
'n_news_delete_explain' => 'Используйте эту форму для удаления новости.',
'n_confirm_delete_news' => 'Вы уверены, что хотите удалить эту новость?',

// General Settings used by Add/Edit Menu item
	'n_news_item' => 'Новость',
'n_news_item_display' => 'Отображать?',

'n_news_date' => 'Дата новости',

'n_create_item' => 'Создать новое сообщение',
'n_create_item_null' => 'Нельзя создать новость, не указав ее текст.',

'n_news_smilies' => 'Включить смайлы в тексте?',
'n_smilies_button' => 'Смайлы',

'xs_no_news' => 'Нет новостей.',
'xs_news_invalid_date' => 'Ошибка в дате, формат ввода: ДД/ММ/ГГГГ',
'n_news_updated' => 'Новости успешно обновлены',
'n_click_return_newslist' => 'Нажмите %sздесь%s для возврата к списку новостей',

// News XML Settings
	'n_xml_title' => 'Управление XS-News лентами',
'n_xml_title_explain' => 'Здесь Вы можете управлять новостными лентами.',
'n_xml_title_explain_0' => 'Если статус ленты новостей (показанный выше) установлен в \'Off\', то изменение статуса показа любой ленты бессмысленно, поскольку отображения не произойдет ни для одного объекта, показанного ниже.<br /><br />Но, если если статус у становлен в \'On\' и Вы хотите изменить статус показа любой ленты, то Вам необходимо отредактировать ее.',
'n_xml_sub_title' => 'XS-News ленты.',
'n_xml_master_switch' => 'Статус ленты новостей: <b>%s</b> и значит, что ленты новостей <b>%s</b> отображаться.',
'n_xml_ms_will' => 'будут',
'n_xml_ms_not' => 'не будут',

'xs_news_ticker_settings' => 'Настройка ленты новостей',
'xs_news_ticker_title' => 'Название ленты новостей:',
'xs_news_ticker_title_explain' => 'Используемый в XML News Feed список, для идентификации каждой новости.',
'xs_news_ticker_show' => 'Показывать эту ленту новостей?',
'xs_news_ticker_feed' => 'XML News Feed',
'xs_news_ticker_feed_explain' => 'Полный URL для указания ленте новостей где получать пункты новостей',
'xs_news_ticker_is_feed' => 'Это - XML News Feed?',
'xs_news_ticker_is_feed_explain' => 'Если установить \'Да\', то по URL будет производиться попытка выбрать пункты новостей, если установить \'No\', то будет прокрычиваться любой текст, отображаемый по указанному URL.',
'xs_news_ticker_wh' => 'Ширина x Высота ленты Новостей.',
'xs_news_ticker_wh_explain' =>'Вы можете определить ширину и высоту ленты новостей, по умолчанию - 98 % x 20, ширина базируется на проценте от ширины таблицы, в то время как высота указывается в пикселах.',
'xs_news_ticker_fontsize' => 'Размер шрифта, используемый в ленте новостей',
'xs_news_ticker_fontsize_explain' => 'Вы можете сами указать размер шрифта для отображения новостей. Значение 0 отключает эту функцию.',
'xs_news_ticker_ss' => 'Скорость прокрутки',
'xs_news_ticker_ss_explain' => 'Чем больше значение, тем больше скорость',
'xs_news_ticker_sd' => 'Направление прокрутки',
'xs_news_left' => 'Влево',
'xs_news_right' =>'Вправо',

// Add menu item
'n_xml_add_page_title' => 'Добавление XML News Feed',
'n_xml_add_page_title_explain' => 'Используйте эту форму для добавления XML News Feed.',
'n_xml_add_header' => 'Добавить новую XML News Feed',
'n_xml_news_item_added' => 'XML News Feed добавлена.',

// edit menu item
'n_xml_edit_page_title' => 'Редактирование XML News Feed',
'n_xml_edit_page_title_explain' => 'используйте эту форму для редактирования XML News Feed.',
'n_xml_edit_header' => 'Редактировать XML News Feed',

// Delete
	'n_xml_news_delete' => 'Удаление XML News Feed.',
'n_xml_news_delete_explain' => 'Используйте эту форму для удаления XML News Feed.',
'n_xml_confirm_delete_news' => 'вы уверены, что хотите удалить указанную XML News Feed?',

// General Settings used by Add/Edit Menu item
	'n_xml_news_item' => 'Новость',
'n_xml_news_item_display' => 'Отображать?',

'n_xml_create_item' => 'Создать новую ленту',
'n_xml_create_item_null' => 'Не возможно создать ленту новостей без указания XML Feed URL или текста для прокрутки.',

'n_xml_no_feeds' => 'Нет XML News Feeds.',
'n_xml_news_updated' => 'Лента была обновлена',
'n_xml_click_return_newslist' => 'Нажмите %sздесь%s для возврата к списку новостных лент',

'n_xml_show' =>'Показать',
'n_xml_title' => 'Название ленты',

	)
);

?>