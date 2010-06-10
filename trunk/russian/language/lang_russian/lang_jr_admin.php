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

$lang = array_merge($lang, array(
	'None' => 'None',
	'Allow_Access' => 'Полный доступ',

	'Jr_Admin' => 'Младший админ',
	'Options' => 'Опции',
	'Example' => 'Пример',
	'Version' => 'Версия',
	'Add_Arrow' => 'Добавить ->',
	'Super_Mod' => 'Супермодератор',
	'Update' => 'Обновить',
	'Modules' => 'Модули',
	'Module_Info' => 'Информационный модуль',
	'Module_Count' => 'Счетчик модуля',
	'Modules_Owned' => '(%d модулей)',
	'Updated_Permissions' => 'Обновить права доступа пользователя к модулям<br>',
	'Color_Group' => 'Цвет группы',
	'Users_with_Access' => 'Пользователь с доступом',
	'Users_without_Access' => 'Пользователь без доступа',
	'Check_All' => 'Выбрать/отменить выбор всех',
	'Cat_Check_All' => 'Категория: выбрать, отменить выбор всех',
	'Edit_Permissions' => 'Редактировать права доступа пользователя',
	'View_Profile' => 'Просмотреть профиль пользователя',
	'Edit_User_Details' => 'Редактировать детали пользователя',
	'Notes' => 'Заметки',
	'Allow_View' => 'Разрешить пользователю просмотр',
	'Start_Date' => 'Включить изначально предоставленные права',
	'Update_Date' => 'Включить последнии предоставленные права',
	'Edit_Modules' => 'Редактировать модули',
	'Rank' => 'Ранг',
	'Allow_PM' => 'разрешить ЛС',
	'Allow_Avatar' => 'разрешить Аватары',
	'User_Active' => 'Пользователь активирован',
	'User_Info' => 'Информация о пользователе',
	'User_Stats' => 'Статус пользователя',
	'Junior_Admin_Info' => 'Административная информация',
	'Admin_Notes' => 'Заметки Админа',

//Descriptions
	'Levels_Page_Desc' => 'Эта страница позволяет Вам определять пользовательские уровни. Выберите имя пользователя в списке или введите вручную. Имена пользователей ДОЛЖНЫ быть перечислены через , (запятую) в каждом списке!',
    'Permissions_Page_Desc' => 'Эта страница позволяет Вам изменять  Админские права пользователей, а также редактировать их список модулей.<br>Вы может нажать на заголовке таблицы, чтобы использовать сортировку тем по заголовком.',

//Errors
	'Error_Users_Table' => 'Ошибка запроса таблицы пользователей.',
'Error_Module_Table' => 'Ошибка запроса таблицы разрешений модулей Админа.',
'Error_Module_ID' => 'Требуемый модуль не существует, или Вы - незарегистрированный пользователь.',
'Disabled_Color_Groups' => ' Мод цветов групп не найден. Нет возможности назначить цвет группы.',
'Admin_Note' => 'Внимание: Этот пользователь - Администратор. Любые ограничения, устанавливаемые здесь работают, пока Вы не измените его права доступа на Пользователя вместо Администратора.',
'No_Special_Ranks' => 'Неопределены специальные ранги.',

//This is the bookmark ASCII search list!  If you have odd usernames, you should add your own ASCII search numbers.
//It uses a special format.
// Smaller-case letters are ignored also.  Don't bother listing them as everything is converted to upper case for eval.
// It searches and prepares the bookmark heading IN THE ORDER you have it below.  It will not sort lowest to highest.
//
// Item-Item2 will search the code from item to item2 AND give each their own bookmark heading (ex. A-Z)
// Item&Item2 will search the code from item to item2 BUT NOT give each their own heading, they will appear like 1-9
// You can add single entries, ie 67
// Separate entry areas by a ,
//
	'ASCII_Search_Codes' => '48&57, 65-90',

//Images
// Don't change these unless you need to
	'ASC_Image' => 'images/sort_asc.png',
	'DESC_Image' => 'images/sort_desc.png',
	)
);

?>