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
	'Already_Rated' => 'Ваш Рейтинг: <b>%d</b>', //%d = their rate
	'Rate_Stats' => '<b>%.2f</b>', //%.2f = average, %d = min, %d = max, %d # of ratings
	'Rate' => 'Рейтинг',
	'Choose_Rating' => 'Выберите Рейтинг ',
	'Topic_Rated' => 'Тема была оценена. ',
	'Anon_Rate_Disabled' => 'Анонимные пользователи не могут оценить ',
	'Not_Authorized_To_Rate' => 'Вы не авторизованы, чтобы оценить эту тему ',
	'Change_Rating' => 'Изменение Рейтинг ',
	'View_Details' => '<a href="%s" title="View Details">View detailed info</a>', //%s = detailed URL
	'View_Details_2' => '<a href="%s" title="View Details">View detailed info</a>', //%s = detailed URL
	'Username_Gave_Rate_of_Max' => '<b>%s</b> рейтинг этой темы <b>%d</b> of a possible <b>%d</b> on %s.', //%s = username, %d = user rate, %d = max rate, %s = date with create_date()
	'Detailed_Rating' => 'Подробный Рейтинг ',
	'Details_For_Topic' => 'Рейтинг данные &nbsp;&raquo;&nbsp;<b>%s</b>', //%s = topic title
	'Or_Someone_From_IP' => '(ip logged)', // makes it smaller for smaller res screens
	'Disable_Rating_ON' => ' Отключить Рейтинг в этом сообщении ',
	'Summary' => 'Резюме Рейтинг ',
	'Topic_Rating_Details' => 'Подробная информация Рубрика Рейтинг ',

	'Anonymous' => 'Анонимный ',
	'All_Forums' => 'Все форумы ',

	'Max_Rate' => 'Макс Рейтинг ',
	'User_Rate' => 'Рейтинг Пользователей',
	'Rate_Date' => 'Дата Оценки',
	'Rate_Time' => 'Время Оценки',
	'Rate_Order' => 'количество Оценок',

	'No_Topics_Rated' => 'Нет тем которые были оценены ',
	'Top_Topics' => 'Топ  %d Оценка темы ', //%d = number of topics
	'Top_Topics_For_Forum' => 'Топ  %d Оценка темы для %s', //%d = number of topics, %s is forum name
	'For_Forum' => '%s Только ', //%s = forum name
	'Last_Rated' => 'Последние Оценки ',
	'Number_of_Rates' => '# Голосуйте ',
	'Rating' => 'Рейтинг ',
	'Min' => 'Min',
	'Max' => 'Max',
	'Min_Rating' => 'Мин Рейтинг ',
	'By_Forum' => 'Список по форуму ',
	'Details_For_Topic' => '<b>%s</b>', //%s = topic title

//admin
	'Status' => 'Статус ',
	'Auth_Description' => 'Описания ',
	'NONE' => 'Рейтинг является полностью нетрудоспособным и не рейтинг бар будет отображаться над тем ',
	'ALL' => 'Все пользователи могут оценивать и в панели, которая включает в себя анонимными и зарегистрированными ',
	'REG' => 'Только зарегистрированные пользователи могут оценивать, но каждый может просматривать бар ',
	'PRIVATE' => 'Только зарегистрированные пользователи могут оценивать и просматривать бар ',
	'MOD' => 'Только модераторы форума и администраторы могут оценивать и каждый может просмотреть бар ',
	'ADMIN' => 'Только администраторы могут оценивать и каждый может просмотреть бар ',
	'Allow_Poster_To_Disable_Rating' => 'Разрешить сообщениям отключить Способность Рейтинг ',
	'Allow_Detailed_Ratings_Page' => 'Позволяют пользователям просматривать подробные Оценки Page ',
	'Max_Rating' => 'Макс Рейтинг (1 to MAX)',
	'Allow_Users_To_ReRate' => 'Разрешить пользователям менять свой рейтинг ',
	'Check_Anon_IP' => 'Проверить Анонимный пользователь IP при голосовании, чтобы увидеть, если они ве уже оценили ',
	'Anon_Rate_ID' => 'Следующая Анонимный пользователь рейтинг  IP.<br />изменить это, если вы знаете, что делаете, и действительно нужно .<br />Настройка его на большее значение, чем то, что перечисленные это очень плохая идея ',
	'Big_Page_Number' => 'Количество тем, которые отображаются на отдельной странице оценок (if you choose to use it)',
	'Main_Page_Number' => 'Количество тем для отображения на основном дисплее страницы  (if you choose to use it)',
	'Header_Page_Number' => 'Количество тем для отображения на дисплее заголовке страницы (if you choose to use it)',
	'Mass_Update' => 'Массовое Обновление',
	'Purge_Old_Ratings' => 'Чистки Старый Оценки ',
	'Min_Rates' => 'Минимальное количество рейтеров Рубрика Иметь до показа на Лучшие Списки ',
	'Purge' => 'Чистка ',
	'Purged' => 'Очищенные ',
	'Purge_Desc' => 'Чистки рейтинги удалены темы, которые могли бы каким-то образом не была первоначально удалили с этой темой. ',
	'Clear' => 'Ясно ',
	'Clear_Desc' => 'Ясно  <b>ALL</b> Ваши данные рейтинг . Только делать это, если у вас возникли проблемы или необычных хотите  <b>удалить все </b> данные голосования . Щелкните на поле, а также типа "Да" в поле рядом с ним .',
	'Complete' => 'Полный ',
	'Authorization' => 'Разрешение ',
	'rate_average' => 'Средняя ставка ',
	'rate_minimum' => 'Минимальная ставка ',
	'rate_maximum' => 'Максимальная ставка ',
	'Number_of_Rates' => 'Количество ставок ',
	'Rank2' => '#',
	'Rating' => 'Рейтинг ',

//Error Messages
	'Database_Error' => 'Ошибка базы данных ',
	'Error_Dbase_Config' => 'Ошибка при получении или обновлении конфигурации данных .',
	'Error_Dbase_Ratings' => 'Ошибка при получении или обновлении данных Оценки .',
	'Error_Dbase_Auth' => 'Ошибка при получении или обновлении данных Оценки Авторизация .',
	'No_Topic_ID' => 'Нет темы было указано, чтобы получить данные .',
	)
);

?>