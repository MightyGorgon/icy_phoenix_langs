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
// Main Stuff.
	'Regular_Post' => 'Регулярне сообщения(Не показанный как новости)',
 'Current_Selection' => 'Текущий Выбор',
 'Select_News_Category' => 'Избранная категория новостей',
 'News' => 'Новости',
 'News_Cmx' => '<b> Новости: </b> &nbsp;',
 'Auth_News' => 'Новости',
 'View_Comments' => 'Просмотр Комментарий',
 'Read_More' => 'Прочитанный Больше',
 'News_Categories' => 'Категория Новостей',

// Admin Stuff

// News Config
 'Add_news_categories' => 'Добавить Категорию Новостей',
 'News_Configuration' => 'Конфигурация Новостей',
 'News_Add_Description' => 'Добавить новые категории новостей',
 'image' => 'Изображение для Новостей',
 'Add_new_category' => 'Добавить новую категорию новостей',

 'Click_return_newsadmin' => 'Нажмите  %sЗдесь%s, чтобы возвратиться к Администрированию Новостей',
 'Category_Deleted' => 'категория Новостей, успешно удаленна',
 'Category_Updated' => 'категория Новостей, успешно обновленна',
 'Category_Added' => 'категория Новостей успешно добавлена',

 'News_Editing_Utility' => 'Редактирование Категории Новостей',
 'News_Config' => 'Конфигурация Категории Новостей',
 'News_Explain' => 'Добавте, удалите и отредактируйте категории новостей.',

 'Enable_News' => '<strong> Позволить регистрацию новостей </strong>',
 'News_Path' => '<strong> путь изображений для Новостей </strong>',
 'News_Path_Explain' => 'Путь под Вашим icyphoenix внедряют директора, например, изображения/новости',

 'News_explain' => 'Формируют Мод Новостей Slashdot CMX.',
 'News_settings' => 'Параметры настройки Новостей',

 'News_trim' => '<strong> Максимальное количество символов </strong>',
 'News_trim_explain' => 'Максимальное количество символов в предпросмотре новости (0 = не урезают).',

 'News_topic_trim' => '<strong> Максимальное количество символов в названии темы </strong>',
 'News_topic_trim_explain' => 'Максимальное количество символов в названии новости. (0 = не урезают).',

 'News_item_num' => '<strong> Количество новостей, отображаемых в блоке новостей (на главной странице) </strong>',
 'News_item_num_explain' => 'количество новостей которые будут показаны в news_viewnews.php.',

 'RSS_Configuration' => 'Параметры Новостей RSS',
 'Enable_RSS' => '<strong> Позволяют Объединение в синдикаты RSS </strong>',
 'Enable_RSS_explain' => 'RSS позволяет другим вебсайтам получать доступ к Вашим новостям и показывать их на сайтах',

 'Feed_Description' => '<strong> Описание Подачи </strong>',
 'Feed_Description_Explain' => 'Фраза или предложение, описывающее подачу.',

 'Feed_Language' => '<strong> Язык Подачи </strong>',
 'Feed_Language_Explain' => 'Вы можете использовать установки, определенные W3C.',

 'Feed_TTL' => '<strong> Подача TTL </strong>',
 'Feed_TTL_Explain' => 'TTL является числом в минутах, указывая, как долго канал может припрятаться про запас прежде, чем освежить из источника.',

 'Feed_Category' => '<strong> Категория Подачи </strong>',

 'Feed_Image' => '<strong> Изображение Подачи </strong>',
 'Feed_Image_Explain' => 'изображение, которое будет связано с Вашей подачей новостей. (Может только быть маленькое изображение размера кнопки)',

 'Feed_Image_Desc' => '<strong> Описание Изображения Подачи </strong>',

// New
 'Articles' => 'Статьи',
 'Archives' => 'Архив',
 'Categories' => 'Категории',

 'News_base_url' => '<strong> Базовый унифицированный указатель информационного ресурса  Новостей </strong>',
 'News_base_url_explain' => 'местоположение Вашего файла индекса новостей. <br/> то есть. http://mydomain.com/, Ваш файл индекса новостей расположен здесь.',
 'Show_RSS_abstract' => '<strong> Резюме Показа в Корме RSS. </strong>',

 'News_index_file' => '<strong> Файл Индекса Новостей </strong>',
 'News_index_file_explain' => 'название файла индекса новостей. то есть news_index.php.',

	)
);

?>