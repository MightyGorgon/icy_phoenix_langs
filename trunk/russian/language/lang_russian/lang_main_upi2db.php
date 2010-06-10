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
* BigRib (bigrib@gmx.de)
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
	'Search_no_new' => 'Нет новых или отредактированных сообщений с последнего посещения',
 'Neue_Beitraege' => 'Непрочитанные сообщения',
 'Editierte_Beitraege' => 'Отредактированные сообщения',
 'Ungelesen_Markiert' => 'Отмеченный как непрочитанный',
 'Permanent_Gelesen' => 'Всегда чтение',
 'Posts' => 'Посты',
 'Unreaded_post' => 'Непрочитанные сообщения',
 'New_edited_post' => 'Отредактированные сообщения',
 'New_edited_posts' => 'Отредактированные сообщения',
 'Unreaded_posts' => 'Непрочитанные сообщения',
 'upi2db_post_edit' => 'Отредактированные',
 'upi2db_post_new' => 'Новые',
 'upi2db_post_and' => '&amp;',
 'upi2db_always_read' => 'тема Метки как постоянное чтение',
 'upi2db_always_read_unset' => 'Снимают выделение темы как постоянного чтения',
 'upi2db_always_read_cant_set' => 'Тема может \'t быть отмеченным как постоянное чтение',
 'upi2db_always_read_no_more' => 'Вам не разрешают отметить дополнительные темы как надолго читающийся.',
 'upi2db_always_read_is_set' => 'Тема отмечен как постоянное чтение',
 'upi2db_always_read_is_unset' => 'Тема больше не отмечен как постоянное чтение',
 'no_always_read' => 'Никакие темы, отмеченные как постоянное чтение',
 'x_always_read' => 'Представление как постоянное чтение отметил темы',
 'upi2db_which_system' => 'Какую систему Вы хотите использовать, чтобы обработать новые посты?',
 'upi2db_which_system_explain' => 'Подробная информация о различных системах может быть найден в <a href="faq.' . PHP_EXT . '">FAQ\'s</a>.',
 'cookie_system' => 'Система Куки-файла',
 'upi2db_system' => 'Система UPI2DB',
 'upi2db_mark_post' => 'Отметить это сообщение',
 'upi2db_unmark_post' => 'Снять выделение с этого сообщения',
 'upi2db_post_cant_mark' => 'Это сообщение не может быть отмечено.',
 'upi2db_post_marked' => 'Сообщение отмечено.',
 'upi2db_post_unmarked' => 'Сообщение больше не отмечено.',
 'upi2db_post_cant_mark' => 'Вам не разрешают отметить дополнительные посты.',
 'always_read_icon' => 'Надолго чтение',
 'upi2db_always_read_forum_short' => 'Метка как постоянное чтение',
 'upi2db_always_read_forum' => 'Отмечают этот форум как постоянное чтение',
 'upi2db_always_read_forum_unset_short' => 'Снимают выделение как постоянное чтение',
 'upi2db_always_read_forum_unset' => 'Снимают выделение этого форума как постоянного чтения',
 'upi2db_forum_is_always_read' => 'Этот форум отмечен как постоянное чтение',
 'upi2db_forum_isnt_always_read' => 'Этот форум больше не отмечен как постоянное чтение',
 'upi2db_cat_cant_mark_always_read' => 'Категории может \'t собираться надолго читать',
 'upi2db_new_word' => 'Дополнительная маркировка для новых постов?',
 'upi2db_new_word_explain' => 'Должен тема с новыми постами быть отмеченным с "Новым:"?',
 'upi2db_edit_word' => 'Дополнительная маркировка для отредактированных постов?',
 'upi2db_edit_word_explain' => 'Должен тема с отредактированными постами быть отмеченным с "Отредактированным:"',
 'upi2db_unread_color' => 'Цветной заголовок темы, если есть новые сообщения',
 'upi2db_unread_disp_posts' => 'Показывают новым и/или отредактированным Постам',
 'Click_return_search' => '%sНажмите Здесь%s, чтобы возвратиться к последней странице',
 'Click_return_portal' => '%sНажмите Здесь%s, чтобы возвратиться к порталу',
 'mark_edit' => 'пост Метки как отредактировано (будет подсвечен как непрочитанный другим пользователям)',
 'upi2db_news_is_mark_unread' => 'Новости, отмеченные как непрочитанный',
 'upi2db_news_is_mark_read' => 'Новости, отмеченные как читающийся',
 'upi2db_mark_news_read' => 'новости Метки как читающийся',
 'upi2db_mark_news_unread' => 'Новости Метки как непрочитанный',
 'upi2db_search_mark_read' => 'СИНЯК',
 'upi2db_submit_mark_read' => 'Метка Как Чтение',
 'upi2db_submit_topic_mark_read' => 'Выбранные темы были отмечены как читающийся',

 'upi2db_mark_post_unread' => 'Отмечают, это переносит как непрочитанный',
 'upi2db_mark_post_unread_cant' => 'Этот пост не может быть отмечен как непрочитанный.',
 'upi2db_mark_post_is_unread' => 'Пост был отмечен как непрочитанный.',

 'upi2db_first_use_txt' => 'Вы теперь в состоянии использовать систему UPI2DB и все ее функции. Вы можете найти больше подробностей в странице часто задаваемых вопросов.',

 'upi2db_u' => 'U',
 'upi2db_m' => 'М.',
 'upi2db_p' => 'P',
 'upi2db_unread' => 'Непрочитанные сообщения',
 'upi2db_marked' => 'Отмеченные сообщения',
 'upi2db_perm_read' => 'Постоянное Чтение',
	)
);

?>