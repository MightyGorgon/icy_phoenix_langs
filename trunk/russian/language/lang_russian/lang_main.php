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
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
*
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

$lang['BBC_IP_CREDITS_STATIC'] = '
<a href="http://www.icyphoenix.com" title="Icy Phoenix"><img src="http://www.icyphoenix.com/images/logo_ip.png" alt="Icy Phoenix" title="Icy Phoenix" /></a><br />
<span style="color: #ff5500;"><b>Mighty Gorgon</b></span><br />
<i>(Luca Libralato)</i><br />
<b><i>Developer</i></b><br />
Interests: Heroes Of Might And Magic III, 69, #FF5522<br />
Location: Homer\'s Head<br />
<br />
<br />
<span style="color: #dd2222;"><b>Bicet</b></span><br />
<b><i>phpBB XS Developer</i></b><br />
<br />
<br />
<span style="color: #dd2222;"><b>hpl</b></span><br />
<b><i>Some Special Contributions</i></b><br />
<br />
<br />
<b><i>Valued Contributors</i></b><br />
<span style="color: #228822;"><b>Andrea75</b></span><br />
<span style="color: #dd2222;"><b>Artie</b></span><br />
<span style="color: #0000bb;"><b>brandsrus</b></span><br />
<span style="color: #228822;"><b>buldo</b></span><br />
<span style="color: #228822;"><b>casimedicos</b></span><br />
<span style="color: #228822;"><b>Chaotic</b></span><br />
<span style="color: #dd2222;"><b>CyberAlien</b></span><br />
<span style="color: #228822;"><b>difus</b></span><br />
<span style="color: #228822;"><b>DWho</b></span><br />
<span style="color: #228822;"><b>fracs</b></span><br />
<span style="color: #880088;"><b>ganesh</b></span><br />
<span style="color: #228822;"><b>JANU1535</b></span><br />
<span style="color: #880088;"><b>jz</b></span><br />
<span style="color: #228822;"><b>KasLimon</b></span><br />
<span style="color: #aaff00;"><b>KugeLSichA</b></span><br />
<span style="color: #0000bb;"><b>Limun</b></span><br />
<span style="color: #880088;"><b>Lopalong</b></span><br />
<span style="color: #228822;"><b>moreteavicar</b></span><br />
<span style="color: #228822;"><b>novice programmer</b></span><br />
<span style="color: #228822;"><b>ThE KuKa</b></span><br />
<span style="color: #ff7700;"><b>TheSteffen</b></span><br />
<span style="color: #0000bb;"><b>Tom</b></span><br />
<span style="color: #228822;"><b>z3d0</b></span><br />
<span style="color: #228822;"><b>Zuker</b></span><br />
<br />
Interests: Icy Phoenix<br />
Location: <a href="http://www.icyphoenix.com/">http://www.icyphoenix.com</a>
';

$lang['BBC_IP_CREDITS'] = '<div class="center-block"><marquee behavior="scroll" direction="up" scrolldelay="120">' . $lang['BBC_IP_CREDITS_STATIC'] . '</marquee></div>';

$lang = array_merge($lang, array(
	'Home' => 'Портал',
	'Forum' => 'Форум',
	'Category' => 'Категория',
	'Topic' => 'Тема',
	'Topics' => 'Темы',
	'Replies' => 'Ответов',
	'Views' => 'Просмотров',
	'Post' => 'Сообщение',
	'Posts' => 'Сообщений',
	'Posted' => 'Добавлено',
	'Username' => 'Имя',
	'Password' => 'Пароль',
	'Email' => 'Имейл',
	'Poster' => 'Автор',
	'Author' => 'Автор',
	'Time' => 'Время',
	'Hours' => 'Часы',
	'Message' => 'Сообщение',

	'1_Day' => 'за последний день',
	'7_Days' => 'за последние 7 дней',
	'2_Weeks' => 'за последние 2 недели',
	'1_Month' => 'за последний месяц',
	'3_Months' => 'за последние 3 месяца',
	'6_Months' => 'за последние 6 месяцев',
	'1_Year' => 'за последний год',

	'Go' => 'Перейти',
	'Jump_to' => 'Перейти',
	'Submit' => 'Отправить',
	'Reset' => 'Вернуть',
	'Cancel' => 'Отмена',
	'Preview' => 'Предпросмотр',
	'Confirm' => 'Подтвердите',
	'Spellcheck' => 'Подтвердите',
	'Yes' => 'Да',
	'No' => 'Нет',
	'Enabled' => 'Включено',
	'Disabled' => 'Выключено',
	'Error' => 'Ошибка',

	'GO' => 'Go',
	'JUMP_TO' => 'Перейти',
	'SUBMIT' => 'Отправить',
	'RESET' => 'Вернуть',
	'CANCEL' => 'Отмена',
	'PREVIEW' => 'Предпросмотр',
	'CONFIRM' => 'Подтвердите',
	'YES' => 'Да',
	'NO' => 'Нет',
	'ENABLED' => 'Включено',
	'DISABLED' => 'Выключено',
	'ERROR' => 'Ошибка',

	'Next' => 'След.',
	'Previous' => 'Пред.',
	'Goto_page' => 'На страницу',
	'Joined' => 'Зарегистрирован',
	'IP_Address' => 'Адрес IP',

	'Select_forum' => 'Выберите форум',
	'View_latest_post' => 'Посмотреть последнее сообщение',
	'View_newest_post' => 'Самое новое сообщение',
	'Page_of' => 'Страница <b>%d</b> из <b>%d</b>', // Replaces with: Page 1 of 2 for example

	'ICQ' => 'ICQ',
	'AIM' => 'AIM ',
	'MSNM' => 'MSN Live',
	'YIM' => 'Yahoo Messenger',
	'SKYPE' => 'Skype',
	'Forum_Index' => 'Форум',  // eg. sitename Forum Index, %s can be removed if you prefer

	'Post_new_topic' => 'Начать новую тему',
	'Reply_to_topic' => 'Ответить на тему',
	'Reply_with_quote' => 'Ответить с цитатой',

	'Click_return_topic' => '%sВернуться в тему%s', // %s's here are for uris, do not remove!
	'Click_return_login' => '%sПопробовать ещё раз%s',
	'Click_return_forum' => '%sПопробовать ещё раз%s',
	'Click_view_message' => '%sПросмотреть ваше сообщение%s',
	'Click_return_modcp' => '%sВернуться к панели модерации%s',
	'Click_return_group' => '%sВернуться к информации о группах%s',

	'Admin_panel' => 'ACP',

	'Board_disabled' => 'Извините, абонент временно недоступен. Попробуйте зайти позднее. Sorry, but this site is currently unavailable. Please try again later.',

// Global Header strings
	'Registered_users' => 'Зарегистрированные пользователи:',
	'Browsing_forum' => 'Сейчас этот раздел просматривают:',
	'Online_users_zero_total' => 'Сейчас посетителей на форуме: <b>0</b>, из них  ',
	'Online_users_total' => 'Сейчас посетителей на Профише: <b>%d</b>, из них ',
	'Online_user_total' => 'Сейчас посетителей на Профише: <b>%d</b>, из них ',
	'AC_Online_users_zero_total' => 'Сейчас посетителей в чате <b>0</b> из них: ',
	'AC_Online_users_total' => 'Сейчас посетителей в чате <b>0</b> из них: ',
	'AC_Online_user_total' => 'Всего в чате <b>1</b> : ',
	'Reg_users_zero_total' => 'зарегистрированные: оффлайн, ',
	'Reg_users_total' => 'Регистрированных: %d, ',
	'Reg_user_total' => 'Регистрированных: %d, ',
	'Hidden_users_zero_total' => 'Скрытых: 0 и ',
	'Hidden_user_total' => 'Скрытых: %d и ',
	'Hidden_users_total' => 'Скрытых: %d и ',
	'Guest_users_zero_total' => 'гостей: 0',
	'Guest_users_total' => 'Гостей: %d',
	'Guest_user_total' => 'Гостей: %d',
	'Record_online_users' => 'Больше всего посетителей (<b>%s</b>) здесь было %s', // first %s = number of users, second %s is the date.

	'Admin_online_color' => '%sАдминистратор%s',
	'Mod_online_color' => '%sМодератор%s',

	'You_last_visit' => 'Вы последний раз заходили %s', // %s replaced by date/time
	'Current_time' => 'Текущее время %s', // %s replaced by time

	'Search_new' => 'Найти сообщения с вашего последнего посещения',
	'Search_your_posts' => 'Найти ваши сообщения',
	'Search_unanswered' => 'Найти сообщения без ответов',

	'Register' => 'Регистрация',
	'Profile' => 'Профиль',
	'Edit_profile' => 'Редактировать ваш профиль',
	'Search' => 'Поиск',
	'Memberlist' => 'Пользователи',
	'FAQ' => 'FAQ',
	'KB_title' => 'Статьи',
	'BBCode_guide' => 'Руководство по BBCode',
	'Usergroups' => 'Группы',
	'Last_Post' => 'Последнее сообщение',
	'Moderator' => 'Модератор',
	'Moderators' => 'Модераторы',

// Stats block text
	'Posted_articles_zero_total' => 'Наши пользователи не умеют писать', // Number of posts
	'Posted_articles_total' => 'Наши пользователи оставили сообщений: <b>%d</b>', // Number of posts
	'Posted_article_total' => 'Наши пользователи оставили сообщений: <b>%d</b>', // Number of posts
	'Registered_users_zero_total' => 'У нас нет зарегистрированных пользователей', // # registered users
	'Registered_users_total' => 'Всего зарегистрированных пользователей: <b>%d</b>', // # registered users
	'Registered_user_total' => 'Всего зарегистрированных пользователей: <b>%d</b>', // # registered users
	'Newest_user' => 'Последний зарегистрированный пользователь: <b>%s%s%s</b>', // a href, username, /a

	'No_new_posts_last_visit' => 'Нет новых сообщений с последнего посещения',

	'No_new_posts_global_announcement' => 'Нет новых сообщений [ Глобал. Объявл. ]',
	'New_posts_global_announcement' => 'Новые сообщения [ Глобал. Объявл. ]',
	'No_new_posts_announcement' => 'Нет новых сообщений [ Объявл. ]',
	'New_posts_announcement' => 'Новые сообщения [ Объявл. ]',
	'No_new_posts_sticky' => 'Нет новых сообщений [ Важн. Тема ]',
	'New_posts_sticky' => 'Новые сообщения [ Важн. Тема ]',
	'No_new_posts_locked' => 'Нет новых сообщений [ Тема закрыта ]',
	'New_posts_locked' => 'Новые сообщения [ Тема закрыта ]',
	'No_new_posts' => 'Нет новых сообщений',
	'New_posts' => 'Новые сообщения',
	'New_post' => 'Новое сообщение',
	'No_new_posts_hot' => 'Нет новых сообщений [ Популярная тема ]',
	'New_posts_hot' => 'Новые сообщения [ Популярная тема ]',

	'Forum_no_new_posts' => 'Нет новых сообщений [ Форум ]',
	'Forum_new_posts' => 'Новые сообщения [ Форум ]',
	'Cat_no_new_posts' => 'Нет новых сообщений [ Категория ]',
	'Cat_new_posts' => 'Новые сообщения [ Категория ]',
	'Forum_is_locked' => 'Форум закрыт',

// Login
	'Enter_password' => 'Введите ваше имя и пароль для входа на форум.',
	'Login' => 'Войти',
	'Logout' => 'Выход',
	'Forgotten_password' => 'Я забыл пароль',
	'AUTOLOGIN' => 'Автоматически входить при каждом посещении',
	'Error_login' => 'Вы ввели неверное/неактивное имя пользователя или неверный пароль.',

// Index page
	'No_Posts' => 'Нет сообщений',
	'No_forums' => 'Здесь нет форумов',

	'Private_Message' => 'Личное сообщение',
	'Private_Messages' => 'Личные сообщения',
	'Who_is_Online' => 'Кто сейчас на форуме',

	'Mark_all_forums' => 'Отметить все форумы прочтёнными',
	'Forums_marked_read' => 'Все форумы были отмечены как прочтённые',

// Viewforum
	'View_forum' => 'Просмотр форума',

	'Forum_not_exist' => 'Форума, который вы выбрали, не существует.',
	'Reached_on_error' => 'Вы попали на эту страницу из-за ошибки.',

	'Display_topics' => 'Показать темы',
	'All_Topics' => 'Все темы',

	'Topic_News_nb' => '<b>Объявление:</b>',
	'Topic_global_announcement_nb' => 'Глобал.Объявл.',
	'Topic_Announcement_nb' => 'Announcement',
	'Topic_Sticky_nb' => 'Важная тема',
	'Topic_Moved_nb' => 'Перемещено',
	'Topic_Poll_nb' => 'Голосование',
	'Topic_Event_nb' => 'Событие',
	'Topic_Announcement' => '<b>Объявление:</b>',
	'Topic_Sticky' => '<b>Важные темы:</b>',
	'Topic_Moved' => '<b>Перемещено:</b>',
	'Topic_Poll' => '<b>Голосование:</b>',
	'Topic_Event' => '<b>Событие:</b>',
	'Topic_global_announcement' => '<b>Глобал.Объявл.:</b>',
	'Post_global_announcement' => 'Глобал.Объявл.',


	'Mark_all_topics' => 'Отметить все темы прочтёнными',
	'Topics_marked_read' => 'Все темы в этом форуме были отмечены как прочтённые',

/*
	'Rules_post_can' => 'You <b>can</b> post new topics in this forum',
	'Rules_post_cannot' => 'You <b>cannot</b> post new topics in this forum',
	'Rules_reply_can' => 'You <b>can</b> reply to topics in this forum',
	'Rules_reply_can_own' => 'You <b>can</b> reply to your topics in this forum',
	'Rules_reply_cannot' => 'You <b>cannot</b> reply to topics in this forum',
	'Rules_edit_can' => 'You <b>can</b> edit your posts in this forum',
	'Rules_edit_cannot' => 'You <b>cannot</b> edit your posts in this forum',
	'Rules_delete_can' => 'You <b>can</b> delete your posts in this forum',
	'Rules_delete_cannot' => 'You <b>cannot</b> delete your posts in this forum',
	'Rules_vote_can' => 'You <b>can</b> vote in polls in this forum',
	'Rules_vote_cannot' => 'You <b>cannot</b> vote in polls in this forum',
*/
	'Rules_post_can' => 'Вы <b>можете</b> начинать темы',
	'Rules_post_cannot' => 'Вы <b>не можете</b> начинать темы',
	'Rules_reply_can' => 'Вы <b>можете</b> отвечать на сообщения',
	'Rules_reply_can_own' => 'Вы <b>можете</b> отвечать на свои сообщения',
	'Rules_reply_cannot' => 'Вы <b>не можете</b> отвечать на сообщения',
	'Rules_edit_can' => 'Вы <b>можете</b> редактировать свои сообщения',
	'Rules_edit_cannot' => 'Вы <b>не можете</b> редактировать свои сообщения',
	'Rules_delete_can' => 'Вы <b>можете</b> удалять свои сообщения',
	'Rules_delete_cannot' => 'Вы <b>не можете</b> удалять свои сообщения',
	'Rules_vote_can' => 'Вы <b>можете</b> голосовать в опросах',
	'Rules_vote_cannot' => 'Вы <b>не можете</b> голосовать в опросах',
	'Rules_moderate' => 'Вы <b>можете</b> %sмодерировать этот форум%s', // %s replaced by a href links, do not remove!

// 'No_topics_post_one' => 'There are no posts in this forum.<br />Click on the <b>Post New Topic</b> link on this page to post one.',
	'No_topics_post_one' => 'В этом форуме пока нет сообщений<br />Щёлкните <b>Начать новую тему</b>, и ваше сообщение станет первым.',

// Viewtopic
	'View_topic' => 'Просмотр темы',

	'Guest' => 'Гость',
	'Post_subject' => 'Заголовок сообщения',
	'View_next_topic' => 'Следующая тема',
	'View_previous_topic' => 'Предыдущая тема',
	'Submit_vote' => 'Проголосовать',
	'View_results' => 'Результаты',

	'No_newer_topics' => 'В этом форуме нет более новых тем',
	'No_older_topics' => 'В этом форуме нет более старых тем',
	'Topic_post_not_exist' => 'Темы, которую вы запросили, не существует.',
	'No_posts_topic' => 'В этой теме нет сообщений',

	'Display_posts' => 'Показать сообщения',
	'All_Posts' => 'Все сообщения',
	'Newest_First' => 'Начиная с новых',
	'Oldest_First' => 'Начиная со старых',

	'Back_to_top' => 'Вернуться к началу',
	'Back_to_bottom' => 'Вниз страницы',

	'Read_profile' => 'Посмотреть профиль',
	'Send_email' => 'Послать автору имейл',
	'Visit_website' => 'Посетить сайт автора',
	'ICQ_status' => 'Статус ICQ',
	'Edit_delete_post' => 'Изменить/удалить это сообщение',
	'View_IP' => 'Показать IP адрес автора',
	'Delete_post' => 'Удалить сообщение',

	'wrote' => 'писал(а)', // proceeds the username and is followed by the quoted text
	'Quote' => 'Цитата', // comes before bbcode quote output.
	'Code' => 'Код', // comes before bbcode code output.

	'Edited_time_total' => 'Последний раз редактировалось: %s (%s), всего редактировалось %d раз', // Last edited by me on 12 Oct 2001; edited 1 time in total
	'Edited_times_total' => 'Последний раз редактировалось: %s (%s), всего редактировалось %d раз(а)', // Last edited by me on 12 Oct 2001; edited 2 times in total

	'Lock_topic' => 'Закрыть тему',
	'Unlock_topic' => 'Вновь открыть тему',
	'Move_topic' => 'Перенести тему',
	'Delete_topic' => 'Удалить тему',
	'Split_topic' => 'Разделить тему',

	'Stop_watching_topic' => 'Перестать следить за ответами',
	'Start_watching_topic' => 'Следить за ответами в теме',
	'No_longer_watching' => 'Вы больше не следите за ответами в этой теме',
	'You_are_watching' => 'Теперь вы следите за ответами в этой теме',

	'Total_votes' => 'Всего голосов',

// Posting/Replying (Not private messaging!)
	'Message_body' => 'Сообщение',
	'Topic_review' => 'Обзор темы',

	'No_post_mode' => 'Не указан режим сообщения', // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normally)

	'Post_a_new_topic' => 'Начать новую тему',
	'Post_a_reply' => 'Ответить',
	'Post_topic_as' => 'Статус создаваемой темы',
	'Edit_Post' => 'Редактировать сообщение',
	'Options' => 'Настройки',

	'PM_Read' => 'ЛС проочитано',
	'PM_Unread' => 'ЛС непрочитано',
	'PM_Replied' => 'ЛС отвечено',

	'Post_Announcement' => 'Объявление',
	'New_post_Announcement' => 'Новое Объявление',
	'Post_Sticky' => 'Важная тема',
	'New_post_Sticky' => 'Новая важная тема',
	'Post_Normal' => 'Обычная',

	'Confirm_delete' => 'Вы уверены, что хотите удалить это сообщение?',
	'Confirm_delete_poll' => 'Вы уверены, что хотите удалить этот опрос?',

	'Flood_Error' => 'Вы не можете отправить следующее сообщение сразу после предыдущего. Пожалуйста, попробуйте чуть позже.',
	'Empty_subject' => 'Вы должны указать заголовок сообщения, когда начинаете новую тему.',
	'Empty_message' => 'Вы должны ввести текст сообщения.',
	'Forum_locked' => 'Этот форум закрыт, вы не можете писать новые сообщения и редактировать старые.',
	'Topic_locked' => 'Эта тема закрыта, вы не можете писать ответы и редактировать сообщения.',
	'No_post_id' => 'Вы должны выбрать сообщение для редактирования',
	'No_topic_id' => 'Вы должны выбрать тему для ответа',
	'No_valid_mode' => 'Вы можете только создавать темы, отвечать и редактировать сообщения. Вернитесь и попробуйте ещё раз.',
	'No_such_post' => 'Сообщение отсутствует. Вернитесь и попробуйте ещё раз.',
	'Edit_own_posts' => 'Извините, вы можете редактировать только ваши собственные сообщения.',
	'Delete_own_posts' => 'Извините, вы можете удалять только ваши собственные сообщения.',
	'Cannot_delete_replied' => 'Извините, вы не можете удалить сообщение, на которое были получены ответы.',
	'Cannot_delete_poll' => 'Извините, вы не можете удалить активный опрос.',
	'Empty_poll_title' => 'Вы должны ввести заголовок для опроса.',
	'To_few_poll_options' => 'Вы должны ввести не менее двух вариантов ответа.',
	'To_many_poll_options' => 'Вы попытались ввести слишком много вариантов ответа.',
	'Post_has_no_poll' => 'В этом сообщении нет опроса.',
	'Already_voted' => 'Вы уже голосовали в этом опросе.',
	'No_vote_option' => 'Вы должны указать вариант ответа при голосовании.',

	'Add_poll' => 'Добавить опрос',
	'Add_poll_explain' => 'Если вы не хотите добавлять опрос к вашему сообщению, оставьте поля пустыми.',
	'Poll_question' => 'Вопрос',
	'Poll_option' => 'Вариант ответа',
	'Add_option' => 'Добавить вариант',
	'Update' => 'Обновить',
	'Delete' => 'Удалить',
	'Poll_for' => 'Опрос должен идти',
	'Days' => 'Дней', // This is used for the Run poll for ... Days + in admin_forums for pruning
	'Poll_for_explain' => '[ Введите 0 или оставьте поле пустым, чтобы опрос не кончался ]',
	'Delete_poll' => 'Удалить опрос',

	'Disable_HTML_post' => 'Отключить в этом сообщении HTML',
	'Disable_ACRO_AUTO_post' => 'Отключить в этом сообщении акронимы и автолинки',
	'Disable_BBCode_post' => 'Отключить в этом сообщении BBCode',
	'Disable_Smilies_post' => 'Отключить в этом сообщении смайлики',

	'HTML_is_ON' => 'HTML <u>ВКЛЮЧЕН</u>',
	'HTML_is_OFF' => 'HTML <u>ВЫКЛЮЧЕН</u>',
	'BBCode_is_ON' => '%sBBCode%s <u>ВКЛЮЧЕН</u>', // %s are replaced with URI pointing to FAQ
	'BBCode_is_OFF' => '%sBBCode%s <u>ВЫКЛЮЧЕН</u>',
	'Smilies_are_ON' => 'Смайлики <u>ВКЛЮЧЕНЫ</u>',
	'Smilies_are_OFF' => 'Смайлики <u>ВЫКЛЮЧЕНЫ</u>',

	'Attach_signature' => 'Присоединить подпись (подпись можно изменять в профиле)',
	'Notify' => 'Сообщать мне о получении ответа',
	'Delete_post' => 'Удалить это сообщение',

	'Stored' => 'Ваше сообщение было успешно добавлено.',
	'Deleted' => 'Ваше сообщение было успешно удалено.',
	'Poll_delete' => 'Ваш опрос был успешно удалён.',
	'Vote_cast' => 'Ваш голос был учтён.',

	'Topic_reply_notification' => 'Уведомление об ответе в теме',

	'Emoticons' => 'Смайлики',
	'More_emoticons' => 'Дополнительные смайлики',

// Private Messaging
	'Private_Messaging' => 'Личные сообщения',

	'Login_check_pm' => 'Войти и проверить личные сообщения',
	'New_pms' => 'Новых сообщений: %d', // You have 2 new messages
	'New_pm' => 'Новых сообщений: %d', // You have 1 new message
	'No_new_pm' => 'Новых сообщений нет',
	'Unread_pms' => 'Непрочитанных сообщений: %d',
	'Unread_pm' => 'Непрочитанных сообщений: %d',
	'No_unread_pm' => 'Нет непрочитанных сообщений',
	'You_new_pm' => 'Вам пришло новое личное сообщение',
	'You_new_pms' => 'Вам пришли новые личные сообщения',
	'You_no_new_pm' => 'У вас нет новых личных сообщений',

	'Unread_message' => 'Непрочитанное сообщение',
	'Read_message' => 'Прочитанное сообщение',

	'Read_pm' => 'Прочитать сообщение',
	'Post_new_pm' => 'Написать новое сообщение',
	'Post_reply_pm' => 'Ответить на сообщение',
	'Post_quote_pm' => 'Ответить с цитатой',
	'Edit_pm' => 'Редактировать сообщение',

	'Inbox' => 'Входящие',
	'Outbox' => 'Исходящие',
	'Savebox' => 'Сохраненные',
	'Sentbox' => 'Отправленные',
	'Flag' => 'Флаг',
	'Subject' => 'Тема',
	'From' => 'От',
	'To' => 'Кому',
	'Date' => 'Дата',
	'Mark' => 'Отметка',
	'Sent' => 'Отправлено',
	'Saved' => 'Сохранено',
	'Delete_marked' => 'Удалить отмеченное',
	'Delete_all' => 'Удалить все',
	'Save_marked' => 'Сохранить отмеченное',
	'Download_marked' => 'Загрузить отмеченные',
	'Mailbox' => 'Почтовый ящик',
	'Save_message' => 'Сохранить сообщение',
	'Delete_message' => 'Удалить сообщение',
	'Next_privmsg' => 'Следующее сообщение',
	'Previous_privmsg' => 'Предыдущее сообщение',
	'No_newer_pm' => 'Сообщений новее нет.',
	'No_older_pm' => 'Сообщений старше нет.',
	'Display_messages' => 'Показать сообщения', // Followed by number of days/weeks/months
	'All_Messages' => 'Все сообщения',

	'No_messages_folder' => 'В этой папке нет сообщений',

	'PM_disabled' => 'Возможность отправки личных сообщений на этих форумах была отключена.',
	'Cannot_send_privmsg' => 'Извините, вам не разрешено отправлять личные сообщения.',
	'No_to_user' => 'Вы должны указать имя получателя этого сообщения.',
	'No_such_user' => 'Извините, но такого пользователя не существует.',

	'Disable_HTML_pm' => 'Отключить в этом сообщении HTML',
	'Disable_ACRO_AUTO_pm' => 'Отключить в этом сообщении акронимы и автолинки',
	'Disable_BBCode_pm' => 'Отключить в этом сообщении BBCode',
	'Disable_Smilies_pm' => 'Отключить в этом сообщении смайлики',

	'Message_sent' => 'Ваше сообщение было отправлено.',

	'Click_return_inbox' => '%sВернуться в папку &laquo;Входящие&raquo;%s',
	'Click_return_index' => '%sВернуться к списку форумов%s',

	'Send_a_new_message' => 'Отправить личное сообщение',
	'Send_a_reply' => 'Ответить на личное сообщение',
	'Edit_message' => 'Редактировать личное сообщение',

	'Notification_subject' => 'Вам пришло новое личное сообщение!',

	'Find_username' => 'Найти пользователя',
	'Find' => 'Найти',
	'No_match' => 'Не найдено.',

	'No_post_id' => 'Не указан ID',
	'No_such_folder' => 'Такой папки нет',
	'No_folder' => 'Не указана папка',

	'Mark_all' => 'Выделить все',
	'Unmark_all' => 'Снять выделение',

	'Confirm_delete_pm' => 'Вы уверены, что хотите удалить это сообщение?',
	'Confirm_delete_pms' => 'Вы уверены, что хотите удалить эти сообщения?',

	'Inbox_size' => 'Ваша папка &laquo;Входящие&raquo; заполнена на %d%%', // eg. Your Inbox is 50% full
	'Sentbox_size' => 'Ваша папка &laquo;Отправленные&raquo; заполнена на %d%%',
	'Savebox_size' => 'Ваша папка &laquo;Сохраненные&raquo; заполнена на %d%%',

	'Click_view_privmsg' => '%sПерейти в папку &laquo;Входящие&raquo;%s',

// Profiles/Registration
	'Viewing_user_profile' => 'Профиль пользователя %s', // %s is username
	'About_user' => 'О пользователе %s', // %s is username
//Start Quick Administrator User Options and Information MOD
	'Quick_admin_options' => 'Быстрый Админдоступ к информации и опциям пользователя',
	'Admin_edit_profile' => 'Редактировать профиль',
	'Admin_edit_permissions' => 'Редактировать права доступа',
	'User_active' => 'Юзер <b>онлайн</b>',
	'User_not_active' => 'Юзер <b>оффлайн</b>',
	'Username_banned' => 'Юзер <b>забанен</b>',
	'Username_not_banned' => 'Юзер <b>не</b> забанен',
	'User_email_banned' => 'Имейл юзера [ %s ] <b>забанен/b>',
	'User_email_not_banned' => 'Имейл юзера <b>не</b>забанен',
//End Quick Administrator User Options and Information MOD
	'Preferences' => 'Личные настройки',
	'Items_required' => 'Поля отмеченные * обязательны к заполнению, если не указано обратное.',
	'Registration_info' => 'Регистрационная информация',
	'Profile_info' => 'Профиль',
	'Profile_info_warn' => 'Эта информация будет в открытом доступе',
	'Avatar_panel' => 'Управление аватарой',
	'Avatar_gallery' => 'Галерея аватар',

	'Website' => 'Вебсайт',
	'Location' => 'Откуда',
	'Contact' => 'Связь',
	'Email_address' => 'адрес E-mail',
	'Email' => 'E-mail',
	'Send_private_message' => 'Послать личное сообщение',
	'Hidden_email' => '[ Скрыт ]',
	'Search_user_posts' => 'Найти сообщения пользователя',
	'Interests' => 'Интересы',
	'Occupation' => 'Род деятельности',
	'Poster_rank' => 'Звание',

	'Total_posts' => 'Всего сообщений',
	'User_post_pct_stats' => '%.2f%% всех сообщений', // 1.25% of total
	'User_post_day_stats' => '%.2f сообщений в день', // 1.5 posts per day
	'Search_user_posts' => 'Найти сообщения пользователя %s', // Find all posts by username
	'Search_user_topics_started' => 'Найти темы начатые пользователем %s', // Find all topics started by username

	'No_user_id_specified' => 'Извините, такого пользователя не существует',
	'Wrong_Profile' => 'Вы не можете редактировать не свой профиль.',

// Invision View Profile - BEGIN
	'Invision_Active_Stats' => 'Статистика',
	'Invision_Communicate' => 'Связь',
	'Invision_Info' => 'Информация',
	'Invision_Member_Group' => 'Членство в группах',
	'Invision_Member_Title' => 'Название группы',
	'Invision_Most_Active' => 'Наиболее активен',
	'Invision_Most_Active_Posts' => '%s сообщений в форуме',
	'Invision_Details' => 'Детали',
	'Invision_PPD_Stats' => 'Сообщений в день',
	'Invision_Signature' => 'Подпись',
	'Invision_Website' => 'Домашняя страница',
	'Invision_Total_Posts' => 'Всего сообщений',
	'Invision_User_post_pct_stats' => '( %.2f%% всех сообщений форума )',
	'Invision_User_post_day_stats' => '%.2f сообщений в день',
	'Invision_Search_user_posts' => 'Найти все сообщения пользователя',
	'Invision_Posting_details' => 'Детали',
// Invision View Profile - END

	'Only_one_avatar' => 'Может быть указан только один тип аватары',
	'File_no_data' => 'Файл в URL не содержит данных',
	'No_connection_URL' => 'Соединение по данной ссылке не может быть произведено',
	'Incomplete_URL' => 'Введенный URL неполон',
	'Wrong_remote_avatar_format' => 'Адрес удаленной аватары недействителен',
	'No_send_account_inactive' => 'Извините, но ваш пароль не может быть восстановлен, поскольку ваша учетная запись в настоящее время неактивна. Пожалуйста, обратитесь к администратору форума за дополнительной информацией.',

	'Always_smile' => 'Смайлики всегда включены',
	'Always_html' => 'HTML всегда включён',
	'Always_bbcode' => 'BBCode всегда включён',
	'Always_add_sig' => 'Всегда присоединять мою подпись',
	'Always_notify' => 'Всегда сообщать мне об ответах',
	'Always_notify_explain' => 'Когда кто-нибудь ответит на тему, в которую вы писали, вам высылается e-mail. Это можно также настроить при размещении сообщения.',

	'Board_style' => 'Внешний вид форума',
	'Board_lang' => 'Язык',
	'No_themes' => 'В базе нет цветовых схем',
	'Timezone' => 'Часовой пояс',
	'Date_format' => 'Формат даты',
	'Date_format_explain' => 'Синтаксис идентичен функции <a href="http://www.php.net/date" target="_other">date()</a> языка PHP',
	'Signature' => 'Подпись',
	'Signature_explain' => 'Это текст, который можно добавлять к размещаемым вами сообщениям. Длина его ограничена %d символами.',
	'Public_view_email' => 'Всегда показывать мой адрес e-mail',

	'Current_password' => 'Текущий пароль',
	'New_password' => 'Новый пароль',
	'Confirm_password' => 'Подтвердите пароль',
	'Confirm_password_explain' => 'Вы должны указать ваш текущий пароль, если хотите изменить его или поменять свой адрес e-mail.',
	'password_if_changed' => 'Указывайте пароль только если вы хотите его поменять',
	'password_confirm_if_changed' => 'Подтверждать пароль нужно в том случае, если вы изменили его выше.',

	'Avatar' => 'Аватара',
	'Avatar_explain' => 'Показывает небольшое изображение под информацией о вас в сообщениях. Может быть показано только одно изображение, шириной не более %d пикселов, высотой не более %d пикселов и объёмом не более %d кб. Удаленная аватара будет автоматически подогнана под размер.',
	'Upload_Avatar_file' => 'Загрузить аватару с вашего компьютера',
	'Upload_Avatar_URL' => 'Загрузить аватар с URL',
	'Upload_Avatar_URL_explain' => 'Введите URL по которому находится файл с изображением, он будет скопирован на этот сайт.',
	'Pick_local_Avatar' => 'Выбрать аватар из галереи',
	'Link_remote_Avatar' => 'Показывать аватар с другого сервера',
	'Link_remote_Avatar' => 'Показывать аватар с другого сервера',
'Link_remote_Avatar_explain' => 'Введите URL изображения, на которое вы хотите сослаться.',
'Avatar_URL' => 'URL изображения Аватара',
'Select_from_gallery' => 'Выбрать Аватар из галереи',
'View_avatar_gallery' => 'Показать галерею',


	'Select_avatar' => 'Выберите Аватар',
'Return_profile' => 'Вернуться к профилю',
'Select_category' => 'Выберите категорию',

'Delete_Image' => 'Удалить изображение',
'Current_Image' => 'Текущее изображение',

	 'Notify_on_privmsg' => 'Уведомлять о новых личных сообщениях',
'Popup_on_privmsg' => 'Открывать новое окно при новом личном сообщении',
'Popup_on_privmsg_explain' => 'В некоторых шаблонах может открываться новое окно браузера с уведомлением о приходе нового личного сообщения.',
'Hide_user' => 'Скрывать ваше пребывание на форуме',

'Profile_updated' => 'Ваш профиль был изменен',
'Profile_updated_inactive' => 'Ваш профиль был изменен, но вы изменили важные данные, так что теперь ваша учетная запись неактивна. Проверьте ваш почтовый ящик, чтобы узнать как вновь активизировать учетную запись или, если требуется одобрение администратора, подождите пока это сделает администратор.',

'Password_mismatch' => 'Введенные пароли не совпадают.',
'Current_password_mismatch' => 'Введённый вами пароль не совпадает с паролем из базы.',
'Password_long' => 'Ваш пароль должен быть не длиннее 32 символов.',
'Too_many_registers' => 'Вы сделали слишком много попыток зарегистрироваться. Пожалуйста, повторите попытку позже.',
'Username_taken' => 'Извините, пользователь с таким именем уже существует.',
'Username_invalid' => 'Извините, но это имя содержит неподходящие символы (например \').',
'Username_disallowed' =>'Извините, но это имя было запрещено к использованию.',
'Email_taken' => 'Извините, этот адрес e-mail уже занят другим пользователем.',
'Email_banned' => 'Тзвините, этот адрес e-mail находится в черном списке.',
'Email_invalid' => 'Извините, этот адрес e-mail неправилен.',
'Signature_too_long' => 'Слишком длинная подпись.',
'Fields_empty' => 'Вы должны заполнить обязательные поля.',
'Avatar_filetype' => 'Файл аватара должен быть .jpg, .gif или .png',
'Avatar_filesize' => 'Объем файла аватара должен быть не более %d KB', // The avatar image file size must be less than 6 KB
'Avatar_imagesize' => 'Аватар должен быть не больше %d пикселов в ширину и %d пикселов в высоту',


	'Welcome_subject' => 'Добро пожаловать на форумы %s', // Welcome to my.com forums
'New_account_subject' => 'Новый пользователь',
'Account_activated_subject' => 'Учетная запись активизирована',

'Account_added' => 'Спасибо за регистрацию, учетная запись была создана. Вы можете войти в систему, используя ваше имя и пароль.',
'Account_inactive' => 'Учетная запись была создана. На этом форуме требуется активизация учетной записи, ключ для активизации был выслан на введённый вами адрес. Проверьте вашу почту для более подробной информации.',
'Account_inactive_admin' => 'Учётная запись была создана. На этом форуме требуется активизация новой учётной записи администраторами. Им был отправлен e-mail, и, как только они активизируют вашу учётную запись, вы получите уведомление.',
'Account_active' => 'Ваша учетная запись была активизирована. Спасибо за регистрацию.',
'Account_active_admin' => 'Ваша учетная запись была активизирована.',
'Reactivate' => 'Вновь активизировать учетную запись.',
'Already_activated' => 'Вы уже активизировали свою учетную запись.',
'COPPA' => 'Ваша учётная запись была создана, но теперь она должна быть одобрена, более подробная информация была выслана вам по e-mail.',

'Registration' => 'Условия регистрации',
'Reg_agreement' => 'Хотя администраторы и модераторы этого форума стараются удалять или редактировать неприемлемые сообщения как можно быстрее, все сообщения просмотреть невозможно. Таким образом вы признаёте,  что сообщения на этих форумах отражают точки зрения их авторов, а не администрации форумов (кроме сообщений, размещённых её представителями) и администрация не может быть ответственна за их содержание.<br /><br /> Вы соглашаетесь не размещать оскорбительных, угрожающих, клеветнических сообщений, порнографических сообщений, призывов к национальной розни и прочих сообщений, могущих нарушить соответствующие законы. Попытки размещения таких сообщений могут привести к вашему немедленному отключению от форумов (при этом ваш провайдер будет поставлен в известность). IP адреса всех сообщений сохраняются для возможности проведения такой политики. Вы соглашаетесь с тем, что администраторы форума имеют право удалить, отредактировать, перенести или закрыть любую тему в любое время по своему усмотрению. Как пользователь вы согласны с тем, что введённая вами информация будет храниться в базе данных. Хотя эта информация не будет открыта третьим лицам без вашего разрешения, администрация форумов не может быть ответственна за действия хакеров, которые могут привести к несанкционированному доступу к ней.<br /><br /> Эти форумы используют cookies для хранения информации на вашем компьютере. Эти cookie не содержат никакой информации из введённой вами и служат лишь для улучшения качества работы форумов. Ваш e-mail адрес используется лишь для подтверждения вашей регистрации и пароля (и для высылки нового пароля если вы забудете текущий).<br /><br />Нажатием на кнопку регистрации вы подтверждаете своё согласие с этими условиями',
'Agree_under_13' => 'Я согласен с этими условиями и мне <b>меньше</b> 13 лет',
'Agree_over_13' => 'Я согласен с этими условиями и мне 13 лет или <b>больше</b>',
'Agree_not' => 'Я не согласен с этими условиями',

'Wrong_activation' => 'Введённый вами ключ активизации не совпадает с хранящимся в базе.',
'Send_password' => 'Прислать новый пароль',
'Password_updated' => 'Новый пароль был создан, проверьте почтовый ящик, чтобы узнать как его активизировать.',
'No_email_match' => 'Введенный вами адрес e-mail не совпадает с записанным на этого пользователя.',
'New_password_activation' => 'Активизация нового пароля',
'Password_activated' => 'Ваша учетная запись была вновь активизирована. Для входа в систему используйте пароль из присланного вам письма.',
'Send_email_msg' => 'Отправить e-mail',
'No_user_specified' => 'Пользователь не был выбран',
'User_prevent_email' => 'Пользователь не желает получать e-mail. Попробуйте послать ему/ей личное сообщение.',
'User_not_exist' => 'Пользователя не существует',
'CC_email' => 'Отправить копию сообщения самому себе',
'Email_message_desc' => 'Сообщение будет отправлено в виде простого текста, не включайте в него HTML или BBCode. В качестве обратного адреса будет показываться ваш адрес e-mail.',
'Flood_email_limit' => 'Вы не можете отправить ещё один e-mail сразу после предыдущего, попробуйте сделать это попозже.',
'Recipient' => 'Получатель',
'Email_sent' => 'Сообщение было отправлено.',
'Send_email' => 'Отправить e-mail',
'Empty_subject_email' => 'Вы должны указать тему сообщения.',
'Empty_message_email' => 'Вы должны указать текст сообщения для отправки.',

// Visual confirmation system strings
	'Confirm_code_wrong' => 'Введенный вами код подтверждения был неправильным',
// 'Too_many_registers' => 'Вы превысили количество попыток регистрации за один сеанс. Пожалуйста, повторите попытку позже.',
'Confirm_code_impaired' => 'Если вы по каким-либо причинам не можете прочитать этот код, свяжитесь с %sАдминистратором%s для получения помощи.',
'Confirm_code' => 'Код подтверждения',
'Confirm_code_explain' => 'Введите код точно так же, как вы его видите на экране. Не перепутайте регистр.',


// Members list
'Select_sort_method' => 'Упорядочить по',
'Sort' => 'Упорядочить',
'Sort_Top_Ten' => 'десять самых активных участников',
'Sort_Joined' => 'дате регистрации',
'Sort_Username' => 'имени пользователя',
'Sort_Location' => 'местонахождению',
'Sort_Posts' => 'количеству сообщений',
'Sort_Email' => 'адресу E-mail',
'Sort_Website' => 'адресу сайта',
'Sort_Ascending' => 'по возрастанию',
'Sort_Descending' => 'по убыванию',
'Order' => '',



// Group control panel
	'Group_Control_Panel' => 'Панель управления группами',
'Group_member_details' => 'Информация о членстве в группах',
'Group_member_join' => 'Вступить в группу',

'Group_Information' => 'Информация о группе',
'Group_name' => 'Название группы',
'Group_description' => 'Описание группы',
'Group_membership' => 'Членство в группе',
'Group_Members' => 'Члены в группе',
'Group_Moderator' => 'Модератор группы',
'Pending_members' => 'Кандидаты в члены группы',

'Group_type' => 'Тип группы',
'Group_open' => 'Группа с открытым членством',
'Group_closed' => 'Группа с закрытым членством',
'Group_hidden' => 'Скрытая группа',

'Current_memberships' => 'Являетесь членом групп',
'Non_member_groups' => 'Не являетесь членом групп',
'Memberships_pending' => 'Кандидат в члены групп',

'No_groups_exist' => 'Нет ни одной группы',
'Group_not_exist' => 'Такой группы не существует',

'Join_group' => 'Вступить в группу',
'No_group_members' => 'В этой группе нет ни одного члена',
'Group_hidden_members' => 'Эта группа скрыта, вы не можете просмотреть её состав',
'No_pending_group_members' => 'В этой группе нет кандидатов в члены',
'Group_joined' => 'Вы попросили о вступлении в группу.<br />Когда вашу просьбу одобрит модератор группы, вам будет прислано уведомление.',
'Group_request' => 'Была подана просьба о вступлении в группу.',
'Group_approved' => 'Ваша просьба была удовлетворена.',
'Group_added' => 'Вы были включены в группу.',
'Already_member_group' => 'Вы уже являетесь членом этой группы',
'User_is_member_group' => 'Пользователь уже является членом этой группы',
'Group_type_updated' => 'Тип группы успешно изменен.',

'Could_not_add_user' => 'Выбранного пользователя не существует.',
'Could_not_anon_user' => 'Вы не можете сделать анонимного пользователя членом группы.',

'Confirm_unsub' => 'Вы уверены, что хотите выйти из этой группы?',
'Confirm_unsub_pending' => 'Вы уверены, что хотите отказаться от участия в этой группе? Ваша просьба о вступлении не была ни удовлетворена, ни отклонена!',

'Unsub_success' => 'Вы успешно покинули эту группу.',

'Approve_selected' => 'Одобрить выделенное',
'Deny_selected' => 'Отклонить выделенное',
'Not_logged_in' => 'Вы должны войти в систему, прежде чем вступать в группу.',
'Remove_selected' => 'Удалить выделенное',
'Add_member' => 'Добавить члена группы',
'Not_group_moderator' => 'Вы не являетесь модератором группы и не можете выполнить данное действие.',

'Login_to_join' => 'Войдите в систему, чтобы менять свое членство в группах',
'This_open_group' => 'Это группа с открытым членством, вы можете подать просьбу о вступлении',
'This_closed_group' => 'Это группа с закрытым членством, новые пользователи не принимаются',
'This_hidden_group' => 'Это скрытая группа, автоматическое добавление пользователей не разрешается',
'Member_this_group' => 'Вы член этой группы',
'Pending_this_group' => 'Вы кандидат в члены этой группы',
'Are_group_moderator' => 'Вы модератор этой группы',
'None' => 'Нет',

'Subscribe' => 'Подписаться',
'Unsubscribe' => 'Отписаться',
'View_Information' => 'Просмотреть информацию',

// Search
	'Search_query' => 'Запрос',
'Search_options' => 'Параметры запроса',

'Search_keywords' => 'Ключевые слова',
'Search_keywords_explain' => 'Вы можете использовать <u>AND</u> чтобы определить слова, которые должны быть в результатах, <u>OR</u> для слов, которые могут быть в результатах, и <u>NOT</u> для слов, которых в результатах быть не должно. Используйте * в качестве шаблона для частичного совпадения.',
'Search_author' => 'Поиск по автору',
'Search_author_explain' => 'Используйте * в качестве шаблона',

'Search_for_any' => 'Искать любое слово/поиск с языком запросов',
'Search_for_all' => 'Искать все слова',
'Search_title_msg' => 'Искать в названиях тем и текстах сообщений',
'Search_msg_only' => 'Искать только в текстах сообщений',

'Return_first' => 'Показывать первые', // followed by xxx characters in a select box
'characters_posts' => 'символов сообщений',

'Search_previous' => 'Время размещения', // followed by days, weeks, months, year, all in a select box

'Sort_by' => 'Упорядочить по',
'Sort_Time' => 'времени размещения',
'Sort_Post_Subject' => 'заголовку сообщения',
'Sort_Topic_Title' => 'теме',
'Sort_Author' => 'автору',
'Sort_Forum' => 'форуму',

'Display_results' => 'Показывать результаты как',
'All_available' => 'Все имеющиеся',
'No_searchable_forums' => 'У вас нет доступа к поиску ни в одном из форумов на сайте.',

'No_search_match' => 'Подходящих тем или сообщений не найдено',
'Found_search_match' => 'Результатов поиска: %d', // eg. Search found 1 match
'Found_search_matches' => 'Результатов поиска: %d', // eg. Search found 24 matches

'Close_window' => 'Закрыть окно',

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
	'Sorry_auth_announce' => 'Извините, только %s могут размещать обьявления на этом форуме.',
'Sorry_auth_sticky' => 'Извините, только %s могут размещать прилепленные темы на этом форуме.',
'Sorry_auth_read' => 'Извините, только %s могут читать сообщения на этом форуме.',
'Sorry_auth_post' => 'Извините, только %s могут начинать темы на этом форуме.',
'Sorry_auth_reply' => 'Извините, только %s могут отвечать на сообщения на этом форуме.',
'Sorry_auth_edit' => 'Извините, только %s могут редактировать сообщения на этом форуме.',
'Sorry_auth_delete' => 'Извините, только %s могут удалять сообщения на этом форуме.',
'Sorry_auth_vote' => 'Извините, только %s могут голосовать в опросах этого форума.',

// These replace the %s in the above strings
	'Auth_Anonymous_Users' => '<b>гости</b>',
'Auth_Registered_Users' => '<b>зарегистрированные пользователи</b>',
'Auth_Users_granted_access' => '<b>пользователи со специальными правами доступа</b>',
'Auth_Moderators' => '<b>модераторы</b>',
'Auth_Administrators' => '<b>администраторы</b>',

'Not_Moderator' => 'Вы не являетесь модератором этого форума.',
'Not_Authorised' => 'Нет доступа',

'You_been_banned' => 'Вам был закрыт доступ к форуму.<br />Обратитесь к вэбмастеру или администратору форумов за дополнительной информацией.',

// Viewonline
	'Reg_users_zero_online' => 'Сейчас на форуме зарегистрированных пользователей: 0 и ', // There are 5 Registered and
'Reg_users_online' => 'Сейчас на форуме зарегистрированных пользователей:  %d и ', // There are 5 Registered and
'Reg_user_online' => 'Сейчас на форуме зарегистрированных пользователей: %d и ', // There is 1 Registered and
'Hidden_users_zero_online' => 'Скрытых пользователей: 0', // 6 Hidden users online
'Hidden_users_online' => 'Скрытых пользователей: %d', // 6 Hidden users online
'Hidden_user_online' => 'Скрытых пользователей: %d', // 6 Hidden users online
'Guest_users_online' => 'Сейчас на форуме гостей: %d', // There are 10 Guest users online
'Guest_users_zero_online' => 'Сейчас на форуме гостей: 0', // There are 10 Guest users online
'Guest_user_online' => 'Сейчас на форуме гостей: %d', // There is 1 Guest user online
'No_users_browsing' => 'Этот форум сейчас никто не просматривает',

'Online_explain' => 'Эти данные основаны на активности пользователей за последние пять минут',

'Forum_Location' => 'Место на форуме',
'Last_updated' => 'Последнее изменение',

'Forum_index' => 'Список форумов',
'Logging_on' => 'Вход в систему',
'Posting_message' => 'Размещение сообщения',
'Searching_forums' => 'Поиск по форуму',
'Viewing_profile' => 'Просмотр профиля',
'Viewing_online' => 'Просмотр &laquo;Кто сейчас на форуме&raquo;',
'Viewing_member_list' => 'Просмотр списка пользователей',
'Viewing_priv_msgs' => 'Просмотр личных сообщений',
'Viewing_FAQ' => 'Просмотр FAQ',
'Viewing_RSS' => 'Просмотр RSS',         // RSS Feed Mod 


// Moderator Control Panel
	'Mod_CP' => 'Панель модерации',
'Mod_CP_explain' => 'Здесь вы можете проводить массовую модерацию этого форума. Вы можете закрывать, открывать, перемещать или удалять любое количество тем.',

'Select' => 'Выбрать',
'Delete' => 'Удалить',
'Move' => 'Переместить',
'Lock' => 'Закрыть',
'Unlock' => 'Открыть',

'Topics_Removed' => 'Выбранные темы были успешно удалены из базы данных.',
'Topics_Locked' => 'Выбранные темы были закрыты.',
'Topics_Moved' =>'Выбранные темы были перемещены.',
'Topics_Unlocked' => 'Выбранные темы были открыты.',
'No_Topics_Moved' =>'Не было перенесено ни одной темы.',

'Confirm_delete_topic' => 'Вы действительно хотите удалить выбранные темы?',
'Confirm_lock_topic' => 'Вы действительно хотите закрыть выбранные темы?',
'Confirm_unlock_topic' => 'Вы действительно хотите открыть выбранные темы?',
'Confirm_move_topic' =>'Вы действительно хотите переместить выбранные темы?',

'Move_to_forum' => 'Переместить в форум',
'Leave_shadow_topic' => 'Оставить ссылку в старом форуме.',

'Split_Topic' => 'Разделение темы',
'Split_Topic_explain' => 'С использованием этой формы вы можете разделить тему на две либо выбирая сообщения по одному, либо разбив по выбранному сообщению',
'Split_title' => 'Заголовок новой темы',
'Split_forum' => 'Форум для новой темы',
'Split_posts' => 'Отделить выбранные сообщения',
'Split_after' => 'Отделить все сообщения после выбранного',
'Topic_split' => 'Выбранная тема была успешно отделена',

'Too_many_error' => 'Вы выбрали слишком много сообщений. Вы можете выбрать только одно сообщение, чтобы отделить все сообщения после него.',

'None_selected' => 'Вы не выбрали ни одной темы для совершения этой операции. Вернитесь назад и выберите.',
'New_forum' => 'Новый форум',

'This_posts_IP' => 'IP адрес для этого сообщения',
'Other_IP_this_user' => 'Другие IP адреса с которых писал этот пользователь',
'Users_this_IP' => 'Пользователи, писавшие с этого IP',
'IP_info' => 'Информация об IP адресе',
'Lookup_IP' => 'Посмотреть хост для IP',


// Errors (not related to a specific failure on a page)
	'Information' => 'Информация',
'Critical_Information' => 'Критическая информация',

'General_Error' => 'Общая ошибка',
'Critical_Error' => 'Критическая ошибка',
'An_error_occured' => 'Произошла ошибка',
'A_critical_error' => 'Произошла критическая ошибка',

	'Admin_reauthenticate' => 'Чтобы управлять сайтом, Вы должны повторно подтвердить себя.',

	'Topic_description' => 'Описание Вашей темы',
// 'Description' => 'Topic Description',

	'Guestbook' => 'Гостевая книга',
	'Viewing_guestbook' => 'Прочитанная Гостевая книга',

	'Click_return_preferences' => 'Нажимите %sЗдесь%s, чтобы возвратиться к Персональным настройкам',

	'Warn_new_post' => 'есть один новый ответ. Пожалуйста посмотрите новые ответы в теме и напишите ваше сообщение.',

	'Today_at' => '<b class="date-today">Сегодня</b> at ',
	'Yesterday_at' => '<b class="date-yesterday">Вчера</b> at ',
	'TODAY' => '<b class="date-today">Сегодня</b>',
	'YESTERDAY' => '<b class="date-yesterday">Вчера</b>',

// Birthday - BEGIN
	'Birthday' => 'День рождения',
 'No_birthday_specify' => 'Нет Указанных',
 'Age' => 'Возраст',
 'Wrong_birthday_format' => 'формат дня рождения был введен неправильно.',
 'Birthday_to_high' => 'Жаль, этот сайт, не принимает пользователей, старших чем %d годы',
 'Birthday_require' => 'Ваш День рождения требуется на этом сайте',
 'Birthday_to_low' => 'Жаль, этот сайт, не принимает пользователей, моложе чем %d годы',
 'Submit_date_format' => 'd-m-Y',//php date() format - Note: ONLY d, m and Y may be used and SHALL ALL be used (different separators are accepted)
 'Birthday_greeting_today' => 'Мы хотели бы выразить самые лучшие пожелания при достижении %s годы сегодня.', //%s is substituted with the users age
 'Birthday_greeting_prev' => 'Поздравляем Вас с днем рождения %s годами на %s.', //%s is substituted with the users age, and birthday
 'Greeting_Messaging' => 'Поздравления',
 'Birthday_today' => 'Пользователей с днем рождения сегодня:',
 'Birthday_week' => 'Пользователей с днем рождения в течение следующих %d дней:',
 'Nobirthday_week' => 'Нет пользователей с наступившим днем рожденья  %d дни',//%d заменяют с числом дней
 'Nobirthday_today' => 'Нет пользователей с наступившим днем рожденья сегодня',
 'Year' => 'Год',
 'Month' => 'Месяц',
 'Day' => 'День',


// Birthday - END

// Start add - Gender MOD
	'Gender' => 'Пол', //used in users profile to display witch gender he/she is
'Male' => 'Мужской',
'Female'=> 'Женский',
'No_gender_specify' => 'Не указан',
	'Gender_require' => 'Требуется указать Ваш пол на этом сайте',
// End add - Gender MOD

// Start add - Who viewed a topic MOD
	'Topic_view_users' => 'Список пользователей, просмотревших тему',
'Topic_time' => 'Последний просмотр',
'Topic_count' => 'Показать число',
'Topic_view_count' => 'Число просмотров тем',
// End add - Who viewed a topic MOD

// Start add - Yellow card admin MOD
	'Give_G_card'=>'Заново активировать пользователя',
'Give_Y_card'=> 'Выслать предупреждение #%d',
'Give_R_card'=> 'Забанить пользователя сейчас',
'Ban_update_sucessful' => 'Список банов успешно обновлен',
'Ban_update_green' => 'Пользователь заново активирован',
'Ban_update_yellow' => 'Пользователь получил предупреждение, сейчас у него %d предупреждений из максимальных %d',
'Ban_update_red' => 'Пользователь забанен',
'Ban_reactivate' => 'Аккаунт заново активирован',
'Ban_warning' => 'Вы получили предупреждение',
'Ban_blocked' => 'Ваш аккаунт заблокирован',
'Click_return_viewtopic' => 'Нажмите %sздесь%s для возврата в тему',
/*
	'Rules_ban_can' => 'You <b>can</b> ban other users in this forum',
	'Rules_greencard_can' => 'You <b>can</b> un-ban users in this forum',
	'Rules_bluecard_can' => 'You <b>can</b> report post to moderators in this forum',
*/
'Rules_ban_can' => 'Вы <b>можете</b> забанить других пользователей в этом форуме',
'user_no_email' => 'У пользователя нет email, поэтому сообщение не может быть отправлено. Вы должны отправить ЛС пользователю.',
'user_already_banned' => 'Выбранный пользователь уже забанен',
'Ban_no_admin' => 'Этот пользователь - администратор, поэтому он не может быть предупрежден или забанен',
'Rules_greencard_can' => 'Вы <b>можете</b> разбанить пользователей в этом форуме',
'Rules_bluecard_can' => 'Вы <b>можете</b> отправить отчет модераторам в этом форуме',
'Give_b_card' => 'Отправить отчет о сообщении модераторам этого форума',
'Clear_b_card' => 'У сообщения %d синих карт. Нажав на кнопку вы их удалите.',
'No_moderators' => 'В данном форуме нет модераторов, отчет не может быть отправлен!',
'Post_repported' => 'Отчет был отправлен %d модераторам',
'Post_repported_1' => 'Отчет был отправлен модератору',
'Post_repport' => 'Отчет о сообщении', //Subject in email notification
'Post_reset' => 'Синие карты для этого сообщения удалены',
'Search_only_bluecards' => 'Искать только сообщения с синими картами',
'Send_message' => 'Нажмите %sздесь%s для отправки сообщения модераторам или <br />',
'Send_PM_user' => 'Нажмите %sздесь%s для отправки ЛС пользователю или',
'Link_to_post' => 'Нажмите %sздесь%s для перехода к сообщению 
--------------------------------

',
	'Post_a_report' => 'Отправить отчет',
'Report_stored' => 'Ваш отчет успешно введен',
'Send_report' => 'Нажмите %sздесь%s для перехода к оригинальному сообщению',
'Red_card_warning' => 'Вы собираетесь дать пользователю %s красную карту, это действие забанит пользователя, вы уверены?',
'Yellow_card_warning' => 'Вы собираетесь дать пользователю %s желтую карту, это действие отправит пользователю предупреждение, вы уверены?',
'Green_card_warning' => 'Вы собираетесь дать пользователю %s зеленую карту, это действие разбанит пользователя, вы уверены?',
'Blue_card_warning' => 'Вы собираетесь дать сообщению синюю карту, это действие отправит модераторам уведомление, вы действительно этого хотите?',
'Clear_blue_card_warning' => 'Вы собираетесь удалить синие карты с этого сообщения, вы уверены?',
'Warnings' => 'Предупреждений: %d', //shown beside users post, if any warnings given to the user
'Banned' => 'Забанено',//shown beside users post, if user are banned

// Last visit - BEGIN
	'Last_logon' => 'Последнее Посещение',
 'Hidde_last_logon' => 'Скрытых',
 'Never_last_logon' => 'Никогда',
 'Users_today_zero_total' => 'Всего <b> 0 </b> пользователи посетили этот сайт:',
 'Users_today_total' => 'Всего <b> %d </b> пользователи посетили этот сайт:',
 'User_today_total' => 'Всего <b> %d </b> пользователь посетил этот сайт:',
 'Users_lasthour_explain' => ', %d в течение прошлого часа.',

	'Users_lasthour_none_explain' => '', //shown if no one has visited in the last hour, fill if you like

	'Years' => 'Года',
	'Year' => 'Год',
	'Weeks' => 'недели',
	'Week' => 'неделя',
	'Day' => 'День',
	'Total_online_time' => 'Нахождение в Онлайн',
 'Last_online_time' => 'Нахождение в Онлайн',
 'Number_of_visit' => 'Колличество посещений',
 'Number_of_pages' => 'Колличество хитов страницы',

// Last visit - END

	'total_site_hits_key' => '%V% Просмотр страниц с тех пор %D%.',

	'Message_too_short' => 'Кароткие Сообщения',

// Start add - Online/Offline/Hidden Mod
	'Online' => 'В сети',
	'Offline' => 'Не всети',
	'Hidden' => 'Невидимых',

	'Online_status' => 'Статус',
// End add - Online/Offline/Hidden Mod
	'Download' => 'Загрузки',

//signature editor
	'sig_edit_link' => 'Подпись',
	'sig_description' => 'Редактировать подпись (<b>Предпросмотр включен</b>)',
'sig_edit' => 'Редактировать подпись',
'sig_current' => 'Подпись сейчас',
'sig_none' => 'Подпись недоступна',
'sig_save' => 'Сохранить',
'sig_save_message' => 'Подпись успешно сохранена!',

	'Statistics' => 'Статистика',

// Start add - Global announcement MOD
	'Globalannounce' => 'Главные Объявления',
	'Globalannounce' => 'Новые Главные Объявления',
// End add - Global announcement MOD
	'Global_Announcements' => 'Глобальные Объявления',
 'Объявления' => 'Объявления',
 'Sticky_Topics' => 'Прикрепленные Темы',
 'Announcements_and_Sticky' => 'Объявления и Прикрепленные Темы',
// db_update generator
	'Db_update_generator' => 'Генератор Обновления БД',
 'Instructions' => 'Инструкция',
 'SQL_instructions' => '<p> Эта часть программного обеспечения создаст файлы PHP, который позволит Вам обновить свою базу данных, используя Ваш браузер. Есть несколько вещей, о которых Вы должны позаботиться, когда Вы вставите SQL в блок ниже. <br/> Прежде всего, удостоверьтесь, что каждый запрос SQL заканчивается точкой с запятой ;) (. В противном случае созданный файл будет дефектным. Затем, гарантируйте, что таблицы имеют" phpbb _ "префикс. Это будет автоматически заменено маленьким кусочком кода, который дает возможность Вам использовать db_update.php файл на любом форуме независимо от того, во что установлен префикс таблицы. </p>',
 'Enter_SQL' => '<strong> Вводят SQL </strong>',
 'Enter_SQL_explain' => '<strong> MySQL </strong> является общей \'s самая популярная открытая исходная база данных, распознанная за ее скорость и надежность.',
 'Output_SQL' => '<strong> Вывод SQL </strong>',
 'Output_SQL_explain' => 'Копируют и вставляют текст от текстовой области справа в пустой файл. Сохраните файл как <u> db_update.php </u> и передайте его на свой сервер. Выполните используя ваш браузер. <br/> <br/> Альтернативно, нажмите кнопку загрузки, чтобы загрузить файл непосредственно на Ваш компьютер <strong> (рекомендуемый) </strong>.',
 'Download' => 'Загрузка',

 'TOP_POSTERS' => 'Важное сообщение',

// TELL A FRIEND
	'Tell_Friend' => 'Email другу.',
'Tell_Friend_Sender_User' => 'Ваше имя:',
'Tell_Friend_Sender_Email' => 'Ваш Email:',
'Tell_Friend_Reciever_User' => 'Имя друга:',
'Tell_Friend_Reciever_Email' => 'Email друга:',
'Tell_Friend_Msg' => 'Сообщение:',
'Tell_Friend_Title' => 'Рассказать',
'Tell_Friend_Body' => 'Привет,\nЯ прочитал тему >>{TOPIC}<< на {SITENAME} и подумал, что ты можешь заинтересоваться этим. Здесь ссылка: {LINK}\n\nПрочитай! Также зарегистрируйся и ответь, что ты думаешь по этому поводу.',

// Begin Thanks Mod
	'thankful' => 'Пользователи сказавшие Спасибо',
	'thanks_to' => 'Сказать Спасибо за полезную тему',
	'thanks_end' => ':',
	'thanks_alt' => 'Поблагодарить за тему',
	'thanks_add_rate' => 'Сказать спасибо автору за полезную тему',
	'thanked_before' => 'Вы уже сказали спасибо',
	'thanks_add' => 'Ваше спасибо принято',
	'thanks_not_logged' => 'Вы должны войти чтоб сказать спасибо за сообщение',
	'thanks2' => 'Большое Спасибо!<br />',
// End Thanks Mod

//Begin Lo-Fi Mod
	'Lofi' => 'Lo-Fi Версия',
// 'Full_Version' => 'Full Version',
	'Full_Version' => 'Это "Lo-Fi" версия нашего основного содержимого. Для просмотра полной версии, пожалуйста, нажмите здесь.',
	'quote_lofi' => 'Цитата',
	'edit_lofi' => 'Редактировать',
	'ip_lofi' => 'IP',
	'del_lofi' => 'Удалить',
	'profile_lofi' => 'Профиль',
	'pm_lofi' => 'PM',
	'email_lofi' => 'E-mail',
	'website_lofi' => 'ВебСайт',
	'icq_lofi' => 'ICQ',
	'aim_lofi' => 'AIM',
	'yim_lofi' => 'YIM',
	'msnm_lofi' => 'MSN',
	'quick_lofi' => 'Быстрый Ответ',
	'new_pm_lofi' => 'Отправить по PM',
//End Lo-Fi Mod

// Retroactive Signature MOD
	'Retro_sig' => 'Прикрепить мою подпись к моим сообщениям',
 'Retro_sig_explain' => 'добавление/редактирование Вашей подписи, IcyPhoenix обычно применяет это только к новым сообщениям',
 'Retro_sig_checkbox' => 'Проверить, чтобы прикрепить Вашу подпись к Вашим ранне написаным сообщениям',
// End Retro Sig MOD

	'legend' => 'Легенда',
	'users' => 'Пользователи',
//added to autogroup mod
	'No_more' => 'больше пользователей принял',
 'No_add_allowed' => 'автоматическое пользовательское суммирование не позволен',
 'Join_auto' => 'Вы можете присоединиться к этой группе, так как Ваш почтовый счет соответствует критериям группы',

 // merge topics
	'Merge' => 'Объединить',
 'Merge_topic' => 'Объединить с темой',
 'Topics_Merged' => 'выбранные темы были объединены.',
 'No_Topics_Merged' => 'Нет тем для объединения.',
 'Confirm_merge_topic' => 'действительно ли Вы уверены, что Вы хотите объединить выбранные тему/темы?',

	'Downloads' => 'Загрузки',

// Start add - Bin Mod
	'Move_bin' => 'Переместить эту тему в архив',
 'Topics_Moved_bin' => 'выбранные темы были перемещены в архив.',
 'Bin_disabled' => 'Архив был заблокирован',
 'Bin_recycle' => 'Повтор',

// End add - Bin Mod
	'Recent_topics' => 'Недавние Темы', //Recent Topics

 'Topics_Title_Edited' => 'названия выбранных тем были отредактированы.',
 'Edit_title' => 'Редактировать Названия',
	'PM' => 'PM',

// Start Advanced IP Tools Pack MOD
	'Moderator_ip_information' => 'Информация по IP только для модераторов',
 'Registered_ip_address' => 'Зарегистрированный IP адрес',
 'Registered_hostname' => 'Зарегистрированный hostname',
 'Other_registered_ips' => 'Другие пользователи, регистрирующиеся от %s',//%s, является IP адресом
 'Other_posted_ips' => 'адреса IP этот пользователь отправил от',
 'Search_ip' => 'Поиск должностей IP адресом',
 'Search_ip_explain' => 'Входят в IP адрес в формат как <u> 127.0.0.1 </u> - ты можешь использовать * как групповой символ  <u> 127.*.*.1 </u>',
 'IP' => 'IP',
 'Whois' => 'Whois',
 'Browser' => 'Браузер',
 'No_other_registered_ips' => 'Никакие другие пользователи зарегистрировались под этим IP адресом.',
 'No_other_posted_ips' => 'Этот пользователь не писал сообщений.',
 'Not_recorded' => 'Не зарегистрированный',
 'Logins' => 'Логины',
 'No_logins' => 'Нет логинов зарегистрированых для этого пользователя.',


// End Advanced IP Tools Pack MOD

	'LIW_click_image' => 'Нажмите, чтобы просмотреть изображение в оригинальном размере',
 'LIW_click_image_explain' => 'Нажимите на изображение, чтобы рассмотреть его в оригинальном размере',
// Mighty Gorgon - Full Album Pack - BEGIN
	'Album' => 'Альбом',
	'Personal_Gallery' => 'Личная Галлерея',
	'Personal_Gallery_Of_User' => 'Личная Галлерея для %s',
	'Personal_Gallery_Of_User_Profile' => 'Личная Галлерея для %s (%d Изображение)',
	'Show_All_Pic_View_Mode_Profile' => 'Показывает Все Изображения В Личной Галерее %s (без sub кошек)',
 'Not_allowed_to_view_album' => 'Извините, Вам не разрешено проссматривать альбом.',
 'Not_allowed_to_upload_album' => 'Извините, Вам не разрешено передавать новый рис. к альбому. Пожалуйста обратитесь к владельцу альбома для получения дополнительной информации.',
 'Album_empty' => 'нет изображений в альбоме <br/>, Нажмите <b> Загрузка Новый Рис. </b> ссылку на этой странице, чтобы перейти.',
 'Album_empty2' => 'нет изображений в альбоме.',
 'Upload_New_Pic' => 'Загрузить новое изображение',
 'Pic_Title' => 'Заголовок Изображения',
 'Pic_Title_Explain' => 'очень важно дать Вашему изображению название.',
 'Pic_Upload' => 'Загрузка Изображения',
 'Pic_Upload_Explain' => 'Разрешено загружать JPG и PNG формат. Максимальный размер файла - %s байты. Максимальное разрешение изображения - %sx%s пиксели.',
 'Album_full' => 'Извините, альбом достиг максимального колличества изображений. Пожалуйста обратитесь к владельцу  альбома для получения дополнительной информации.',
 'Album_upload_successful' => 'Спасибо, Ваше изображение успешно загружено',
 'Click_return_album' => 'Нажмите %sЗдесь%s, чтобы возвратиться к Альбому.',
 'Invalid_upload' => 'Недопустимая Загрузка <br/> <br/> Ваше изображение является слишком большим, или не правильного формата.',
 'Image_too_big' => 'Извините, Ваш размер изображения является слишком большим.',
 'Uploaded_by' => 'Загружено',
 'Category_locked' => 'Извините, Вы не можете загружать, потому что эта категория была блокирована администрацией. Пожалуйста обратитесь к  владельцу альбома альбома для получения дополнительной информации.',
 'View_Album_Index' => 'Индекс Альбома',
 'View_Album_Personal' => 'Просмотр Личного Альбома пользователя',
 'View_Pictures' => 'Рассматривающие Изображения или Почтовое отправление/Чтение комментирует в Альбоме',
 'Album_Search' => 'Поиск в Альбоме',
 'Pic_Name' => 'Название картинки',
 'Описание' => 'Описание',
 'Search_Contents' => 'который содержит:',
 'Search_Found' => 'Поиск, найденный',
 'Search_Matches' => 'Пары:',

// Mighty Gorgon - Full Album Pack - END

// News
	'xs_latest_news' => 'Последние Новости',
 'xs_no_news' => 'Нет Статей.',
 'xs_news_version' => 'Версия Новостей XS: %s',
 'xs_news_ticker_feed' => 'Источник Подачи XML: %s',
 'xs_no_ticker' => 'нет никаких определенных Сводок новостей, пожалуйста посетите вспомогательный управляющий процессор, чтобы создать тот.',
 'xs_news_ticker_title' => 'Сводка новостей',
 'xs_news_tickers_title' => 'Сводки новостей',
 'xs_news_item_title' => 'Статья',
 'xs_news_items_title' => 'Статьи',
 'hide' => 'Скрыть',
 'show' => 'Показ',
 'Welcome' => 'Добро пожаловать',
 'birthdays' => 'Дни рождения',


//Battle of the Sexes
	'male_zero_total' => '<b> 0 </b> Участников Мужского пола', // # registered male users
 'male_total' => '<b> %d </b> Участники Мужского пола', // # registered male users
 'male_one_total' => '<b> %d </b> Участник Мужского пола', // # registered male users
 'female_zero_total' => 'У Нас есть <b> 0 </b> Участниц', // # registered female users
 'female_total' => 'У Нас есть <b> %d </b> Участниц', // # registered female users
 'female_one_total' => 'У Нас есть <b> %d </b> Участница', // # registered female users
 'unknown_total' => '& <b> %d </b> Участники, Которых Только Дон \'t Знают',
 'unknown_one_total' => '& <b> %d </b> Участник, Которого Только Doesn \'t Знают',
 'unknown_zero_total' =>'',
 'battle_of_sexes' => 'Сражение Полов:',

 'who_viewed' => 'Тема \представления',
 'BoardRules' => 'Правила',

 'View_post' => 'Почта Представления',
 'Post_review' => 'Почтовый Обзор',
 'View_next_post' => 'Посмотреть следующую Почту',
 'View_previous_post' => 'Посмотреть предыдущую Почту',
 'No_newer_posts' => 'нет никаких более новых должностей на этом форуме',
 'No_older_posts' => 'нет никаких старших должностей на этом форуме',

 'StaffSite' => 'Администрация Сайта',
 'Staff_level' => array ('Администратор', 'Модератор'),
 'Staff_forums' => 'Форумы',
 'Staff_stats' => 'Статистика',
 'Staff_user_topic_day_stats' => '%.2f тем в день', // %.2f = topics per day
 'Staff_period' => 'с тех пор %d дни', // %d = days
 'Staff_contact' => 'Контакты',
 'Staff_messenger' => 'Послать почту',


// Start Edit Notes MOD
	'Edit_notes' => 'Редактировать Примечания',
 'Delete_note' => 'Удалить Примечание',
 'Edited_by' => 'Отредактированный',
 'Confirm_delete_edit_note' => 'Вы уверены что хотите удалить примечание?',
 'Edit_note_deleted' => 'примечание редактирования был успешно удален.',

// End Edit Notes MOD
//Referrers Mod
'Referrers' => 'Http рефферал',
 'Viewing_Referrers' => 'Просмотр Рефферала',
//Referrers Mod End

	'Recent_topics' => 'Недавние Темы',
 'Recent_today' => 'Сегодня',
 'Recent_yesterday' => 'Вчера',
 'Recent_last24' => 'Прошлые 24 Часа',
 'Recent_lastweek' => 'Прошлая Неделя',
 'Recent_lastXdays' => 'Прошлые %s дни',
 'Recent_last' => 'Последние',
 'Recent_days' => 'Дни',
 'Recent_first' => 'запустил %s',
 'Recent_first_poster' => '%s',
 'Recent_select_mode' => 'режим Select:',
 'Recent_showing_posts' => 'Показывающие сообщения:',
 'Recent_title_one' => '%s тема %s', // %s = topics; %s = sort method
 'Recent_title_more' => '%s темы %s', // %s = topics; %s = sort method
 'Recent_title_today' => 'сегодня',
 'Recent_title_yesterday' => 'вчера',
 'Recent_title_last24' => 'в течении 24 часов',
 'Recent_title_lastweek' => 'в течении недели',
 'Recent_title_lastXdays' => 'в течении %s дней', // %s = days
 'Recent_no_topics' => 'темы не были найдены.',
 'Recent_wrong_mode' => 'Вы выбрали неправильный режим.',
 'Recent_click_return' => 'Нажмите %sЗдесь%s, чтобы возвратиться на сайт.',

 'Profile_view_option' => 'окно Pop up на Представлении Конфигурации',
 'Profile_viewed' => 'Просмотр моего профиля',


// BEGIN Disable Registration MOD
	'registration_status' => 'Извините, но регистрация  в настоящее время закрыта. Пожалуйста попытайтесь зарегистрироваться позже.',

// END Disable Registration MOD

	'PostHighlight' => 'Выделение',
	'QuickQuote' => 'Быстрая Цитата',
	'Randomquote' => 'Случайная Цитата',

// Mod User CP Organize
	'Cpl_Navigation' => 'Контрольная Панель',
// 'Cpl_Settings_Options' => 'Settings And Options',
	'Cpl_Settings_Options' => 'Параметры Настройки',
	'Cpl_Board_Settings' => 'Параметры Настройки Сайта',
	'Cpl_NewMSG' => 'Отправить Новое Сообщение',
	'Cpl_Click_Return_Cpl' => 'Нажмите %sЗдесь%s чтобы вернуться в Панель Управления',
	'Cpl_Personal_Profile' => 'Личный Профиль',
	'Cpl_More_info' => 'Подпись',

	'Forbidden_characters' => 'символы  для имен пользователя являются a-z, 0-9.',

 'Topics_per_page' => 'Тем на Страницу',
 'Posts_per_page' => 'Сообщений на Страницу',
 'Hot_threshold' => 'Популярный Порог сообщений',

	'Mod_CP_first_post' => 'Первое Сообщение',
	'Mod_CP_topic_count' => '<b> %s </b> тема найдена.',
 'Mod_CP_topics_count' => '<b> %s </b> темы найдены.',
 'Mod_CP_no_topics' => 'Нет тем по вашему запросу.',
 'Mod_CP_sticky' => 'Прикрепленная',
 'Mod_CP_announce' => 'Объявление',
 'Mod_CP_global' => 'Объединяются',
 'Mod_CP_normal' => 'Нормализуют',
 'Display_sticky' => 'Прикрепленная',
 'Display_announce' => 'Объявление',
 'Display_global' => 'Глобальное Объявление',
 'Display_poll' => 'Опрос',
 'Display_shadow' => 'Перемещенная',
 'Display_locked' => 'Заблокированная',
 'Display_unlocked' => 'Незамкнутый',
 'Display_unread' => 'Непрочитанная',
 'Display_unanswered' => 'Оставшаяся без ответа',
 'Display_all' => 'Все',
 'Mod_CP_confirm_delete_polls' => 'Вы уверены, что хотите удалить опросы?',
 'Mod_CP_poll_removed' => 'выбранный опрос был успешно удален из темы.',
 'Mod_CP_polls_removed' => 'выбранные опросы были успешно удалены из тем.',
 'Mod_CP_topic_removed' => 'выбранная тема был успешно удалена из базы данных.',
 'Mod_CP_topic_moved' => 'выбранная тема была перемещена из <b> %s </b> в <b> %s </b>.', // %s = old/new forum
 'Mod_CP_topics_moved' => 'выбранные темы были перемещены из <b> %s </b> в <b> %s </b>.', // %s = old/new forum
 'Mod_CP_topic_locked' => 'выбранная тема была заблокирована.',
 'Mod_CP_topic_unlocked' => 'выбранная тема была разблокирована.',
 'Mod_CP_topics_sticked' => 'выбранные темы были sticked.',
 'Mod_CP_topic_sticked' => 'выбранная тема был sticked.',
 'Mod_CP_topics_announced' => 'выбранные темы объявили.',
 'Mod_CP_topic_announced' => 'выбранная тема объявили.',
 'Mod_CP_topics_globalized' => 'выбранные темы были объединены.',
 'Mod_CP_topic_globalized' => 'выбранная тема был объединена.',
 'Mod_CP_topics_normalized' => 'выбранные темы были нормализованы.',
 'Mod_CP_topic_normalized' => 'выбранная тема был нормализована.',
 'Mod_CP_click_return_topic' => 'Нажмите %sЗдесь%s, чтобы возвратиться к старой теме или %sЗдесь%s, чтобы возвратиться к новой.',


	't_starter' => 'Вы не можете благодарить себя',
 'Watched_Topics' => 'Просматриваемые Темы',
 'No_Watched_Topics' => 'Вы не можете просматривать темы тем',
 'Watched_Topics_Started' => 'Начало Темы',
 'Watched_Topics_Stop' => 'Прекратить Просматривать',

 'Stop_watching_forum' => 'Прекратить Просматривать  форум',
 'Start_watching_forum' => 'КТо Просматривают этот форум',
 'No_longer_watching_forum' => 'Вы больше не просматриваете этот форум.',
 'You_are_watching_forum' => 'Вы просматриваете  этот форум.',

 'UCP_SubscForums' => 'Подписанный Список Форумов',
 'UCP_NoSubscForums' => 'У Вас нет подписанных Форумов',
 'UCP_SubscForums_Flag' => 'Флаг',
 'UCP_SubscForums_Forum' => 'Форум',
 'UCP_SubscForums_Forum_subscribed' => 'Форум, Подписанный',
 'UCP_SubscForums_Forum_already_subscribed' => 'Вы уже подписаны на этот Форум',
 'UCP_SubscForums_Click_return_forum' => 'Нажмите %sЗдесь%s, чтобы возвратиться к Форуму',
 'UCP_SubscForums_Topics' => 'Темы',
 'UCP_SubscForums_Posts' => 'Должности',
 'UCP_SubscForums_LastPost' => 'Сигнал отбоя',
 'UCP_SubscForums_UnSubscribe' => 'Неподписываются',
 'UCP_SubscForums_NewTopic' => 'Новая Тема',

 'profile_main' => 'Общая Информация',
 'profile_explain' => 'Добро пожаловать в Группу Контроля за работой пользователей. Отсюда Вы можете контролировать, просмотреть и обновить свой профиль. Вы можете также послать сообщения другим пользователям (если разрешено).',
 'your_activity' => 'Твой Профиль',

 'Gravatar' => 'ГР Аватар',
 'Gravatar_explain' => 'Если у Вас есть аккаунт на <a href="http://www.gravatar.com" target="_blank">ГР Аватар</a>, войдите в свой аккаунт и у становите свой аватар на сайте.',

 'private_msg_review_title' => 'Сообщение Ты \'re, Отвечающий На',
 'private_msg_review_error' => 'Ошибка, Находя Частное Сообщение!',

 'BSH_Viewing_Topic' => 'Просмотр Темы: % %t',
 'BSH_Viewing_Post' => '%sПросмот Сообщений%s',
 'BSH_Viewing_Profile' => 'Просматривающих %u % \Профиль',
 'BSH_Viewing_Groups' => '%sПросмотр Групп%s',
 'BSH_Viewing_Forums' => 'Просмотр Форума: % %f',
 'BSH_Index' => '%sПросмотр Главной страницы%s',
 'BSH_Searching_Forums' => '%sПоиск форумов%s',
 'BSH_Viewing_Onlinelist' => '%sПросмотр кто онлайн%s',
 'BSH_Viewing_Messages' => '%sПросмот Личных Сообщений%s',
 'BSH_Viewing_Memberlist' => '%sПросмот Всех Пользователей%s',
 'BSH_Login' => '%sВход%s',
 'BSH_Logout' => '%sВыход%s',
 'BSH_Editing_Profile' => '%sРедактировать Профиль%s',
 'BSH_Viewing_ACP' => '%sПросмот ACP%s',
 'BSH_Moderating_Forum' => '%sМодерирование Форума%s',
 'BSH_Viewing_FAQ' => '%sПросмотреть FAQ%s',
 'BSH_Viewing_Category' => 'Просмотр Категории: % %c',

 'Board_statistic' => 'Статистика',
 'Database_statistic' => 'Статистика БД',
 'Version_info' => 'информация Версии',
 'Thereof_deactivated_users' => 'Колличество неактивных пользователей',
 'Thereof_Moderators' => 'Колличество Модераторов',
 'Thereof_Junior_Administrators' => 'Колличество Младших Администраторов',
 'Thereof_Administrators' => 'Колличество Администраторов',
 'Deactivated_Users' => 'Пользователи ждущие Активации',
 'Users_with_Mod_Privileges' => 'Пользователи с правами Модератора',
 'Users_with_Junior_Admin_Privileges' => 'Пользователи  привилегиями младшего администратора',
 'Users_with_Admin_Privileges' => 'Пользователи с привилегиями администратора',
 'DB_size' => 'Размер базы данных',
 'Version_of_ip' => 'Версия <href = "http://www.icyphoenix.ru/"> Ледяной Финикс </a>',
 'Version_of_board' => 'Версия <href = "http://www.phpbb.com"> phpBB </a>',
 'Version_of_PHP' => 'Версия <href = "http://www.php.net/"> PHP </a>',
 'Version_of_MySQL' => 'Версия <href = "http://www.mysql.com/"> MySQL </a>',
 'Download_post' => 'Загрузить Сообщение',

 'Download_topic' => 'Тема Загрузки',
 'Always_swear' => 'Всегда позволяют',

 'Shoutbox' => 'Мини Чат',
 'Shoutbox_date' => 'd м. Y h:i:s',
 'Shout_censor' => '<b> Текст удален! </b>',
 'Shout_refresh' => 'Отправить',
 'Shout_text' => 'Ваш текст',
 'Viewing_Shoutbox' => 'Просмотр Чата',
 'Censor' => 'Цензор',

 'Edit_post_time' => 'Редактировать время сообщения',
 'Edit_post_time_xs' => 'Редактировать',
 'Topic_time_xs' => 'время Темы',
 'Post_time' => 'Время Сообщения',
 'Post_time_successfull_edited' => '<b> Время успешно обновлено. после 3 секунд будет закрыто </b></span><br /><span class="postdetails"> окно.',

	'staff_message' => 'Сообщение От Администрации',

 'Board_Rules' => 'Правила Форума',
 'Forum_Rules' => 'Правила Форума',
 'Show_avatars' => 'Показывать Аватар в Теме',
 'Show_signatures' => 'Показывать подпись в Теме',
 'Acronym' => 'Акроним',
 'Acronyms' => 'Акронимы',
 'User_Number' => 'Пользователь #',
 'Member_Count' => 'Участники',
 'Reply_message' => 'Ответил на сообщение',
 'Click_read_topic' => 'Нажмите %sЗдесь%s, чтобы прочитать', // %s's here are for uris, do not remove!
 'Create_with_generator' => 'Создать Аватар, используя Генератор Аватара',
 'View_avatar_generator' => 'Генератор Аватара',
 'Adv_Search' => 'Усложненный запрос',
 'Search_Explain' => 'Поиск по Сайту',
 'Login_attempts_exceeded' => 'максимальное колличество попыток входа в систему %s был превышен. Вы не сможете войти в течение следующих %s минут.',
 'Please_remove_install_contrib' => 'Пожалуйста гарантируйте и установку / и каталоги contrib/, удалены',
 'Search_Engines' => 'Поисковые Боты:',
 'Bots_browsing_forum' => 'Поисковые Боты, просматривающие этот форум:',
 'Debug_On' => 'Отладка ВКЛ.',
 'Debug_Off' => 'Отладка ВЫКЛ.',
 'Page_Generation_Time' => 'Страница сгенирирована',
 'Memory_Usage' => 'Память',
 'SQL_Queries' => 'запросы SQL',
 'Search_new2' => 'Новое сообщение',
 'Search_new_p' => 'Сообщения начиная с последнего посещения',
 'Show_In_Portal' => 'Показ на Первой странице',
 'Not_Auth_View' => 'У Вас нет прав просматривать эту страницу.',
 'Site_Hist' => 'История Сайта',
 'Links' => 'Ссылки',
 'Print_View' => 'Версия для печати',
 'Browsing_topic' => 'Пользователи, просматривающие эту тему:',
 'Sudoku' => 'Судоку',
 'Bookmarks' => 'Закладки',
 'Set_Bookmark' => 'Набор закладок для этой темы',
 'Remove_Bookmark' => 'Удалить закладку для этой темы',
 'No_Bookmarks' => 'У Вас нет Закладок',
 'Always_set_bm' => 'закладка Набора автоматически, перенося',
 'Found_bookmark' => 'Вы установили закладку %d.',// eg. Search found 1 match
 'Found_bookmarks' => 'Вы установили закладки %d.',// eg. Search found 24 matches
 'More_bookmarks' => 'Больше закладок...',// For mozilla navigation bar




//RSS Reader Help
	'RSS' => 'RSS',
	'Rss_news_help' => 'Что это?',
	'Rss_news_help_title' => 'RSS помощь',
	'Rss_news_help_header' => 'Что такое каналы и как ими пользоваться??',
	'Rss_news_help_explain' => 'RSS канал - это регулярно обновляемая сводка содержимого сайта по определенной тематике со ссылками на полную версию этого содержимого.Примеры программ для чтения RSS новостей Бесплатные:FeedReader - поддерживает много языков, включая русский и Abilon - русскоязычный и очень компактный (600кБ) RSS-ридер. <br /><br /><b>Attention:</b> For subscribing to Website feeds a <a href="http://www.feedreader.com/" target="new">Feed-Reader</a>',
	'Rss_news_help_header_2' => '<b>Какие RSS и Atom?</b>',
	'Rss_news_help_explain_2' => 'RSS и Atom являются два формата каналов. Большинство программ для чтения каналов поддерживают оба формата. В настоящее время атома 0,3 и 2,0 RSS поддерживают нас.',
	'Rss_news_help_header_3' => '<b>Как я могу использовать новости?</b>',
	'Rss_news_help_explain_3' => 'Для начала используйте программу <a href="http://www.rssowl.org/" target="new">http://www.rssowl.org/</a>.<br /><br />Afterwards you can in the program:<br /><br /><b>1.</b> Search for RSS links on our side. (Extras => Search for new feeds on web page) <b>or</b><br /><b>2.</b> add one of the following feed URL`s:',
	'L_url_rss_explain' => 'URL для тем с форума.',
	'L_url_rss_news_explain' => 'URL для новостей с форума.',
	'L_url_rss_atom_explain' => 'URL для Atom RSS Feed.',
	'Rss_news_help_rights' => 'Мы имеем право закрыть канал RSS новостей без причины.',
	'Rss_news_feeds' => 'RSS News Feeds',

	'Quick_Reply' => 'Быстрый Ответ',
	'Mod_CP_sticky2' => 'Прикрепить',
	'Mod_CP_announce2' => 'Объявить',
	'Mod_CP_global2' => 'Объеденить',
	'Mod_CP_normal2' => 'Нормально',

	'Search_Flood_Error' => 'Вы не можете воспользоваться поиском, попробуйте попробуйте воспользоваться заново через несколько минут.',

// Custom Profile Fields MOD
	'custom_field_notice' => 'Эти пункты были созданы администратором. Они могут или возможно, не являются публично видимыми. Пункты, отмеченные с *, являются обязательными.',
	'and' => ' И ',
// END Custom Profile Fields MOD

'dsbl' => 'Ваш адрес IP <href =" % url % "> внесен в черный список </a>. <br/> Регистрация заблокирована.',
 'Emails_Only_To_Admins_Error' => 'Вы можете использовать почтовую систему, чтобы послать электронную почту только администрации.',
 'Wordgraph' => 'Тэги',
 'Viewing_wordgraph' => 'Просмотр Тэгов',
 'Links_For_Guests' => '<b> Вы должны быть зарегистрированы, чтобы  увидеть эту ссылку </b>',
 'Новый' => 'N',
 'New_Label' => 'Новый',
 'New_Messages_Label' => 'Новые Сообщения',
 'Show_Personal_Gallery' => 'Просмотреть пользователя \личную галерею',
 'Login_Status' => 'Состояние',
 'Login_Hidden' => 'Скрытый',
 'Login_Visible' => 'Видимый',
 'Login_Default' => 'Значение по умолчанию',
 'Errors_Not_Found' => 'требуемый адрес не может быть найден на этом сервере',
 'Errors_000' => 'Неизвестная ошибка',
 'Errors_000_Full' => 'требуемый адрес возвращает неизвестный код ошибки. <br/> Ошибки были регистрированы к журналу регистрации, и мы проверим, что за проблема.',
 'Errors_400' => 'Ошибка 400',
 'Errors_400_Full' => 'требуемый адрес не является правильным адресом.',
 'Errors_401' => 'Ошибка 401 - Ошибка Разрешения',
 'Errors_401_Full' => 'Вы получаете это сообщение, потому что у Вас нет прав для обращения к этому адресу.',
 'Errors_403' => 'Ошибка 403',
 'Errors_403_Full' => 'Обращаются к этому адресу, запрещен.',
 'Errors_404' => 'Ошибка 404 - Файл, Не Найденный',
 'Errors_404_Full' => 'адрес, который Вы просили, не доступен на этом сервере. Вы, возможно, написали адрес c орфографическими ошибками, или что Вы ищете, возможно, было удалено.',
 'Errors_500' => 'Ошибка 500 - ошибка Конфигурации',
 'Errors_500_Full' => 'адрес Вы просили возвращения ошибка конфигурации. <br/> Ошибки были регистрированы к журналу регистрации, и мы выполним проверку как можно скорее.',
 'Errors_Email_Subject' => 'Ошибки:',
 'Errors_Email_Addrress_Prefix' => 'xs_errors',
 'Errors_Email_Body' => 'ошибка произошла на Вашем сайте. Пожалуйста проверьте журнал регистрации.',
 'Remote_avatar_no_image' => 'изображение %s не существует',
 'Remote_avatar_error_filesize' => 'изображение по пределу размера для аватаров (%d Байты)',
 'Remote_avatar_error_dimension' => 'изображение по пределу размерности для аватаров (%d x %d пиксели)',
 'How_Many_Chatters' => 'есть <b> %d </b> пользователь (и) в чате теперь',
 'Who_Are_Chatting' => '<b> %s </b>',
 'Click_to_join_chat' => 'Нажмите, чтобы присоединиться к чату',
 'ChatBox' => 'Чат',
 'log_out_chat' => 'Вы вышли из чата',
 'Send' => 'Отослать',
 'Login_to_join_chat' => 'Вход в систему, чтобы присоединиться к чату',


// Hacks List
/* General */
	'Hacks_List' => 'Кредиты',
 'Page_Desc' => 'Этот модуль позволяет Вам добавлять/редактировать/удалять список текущих кредитов  работы/мод, установленные на Вашей плате. Они отображены для пользователей, когда они посещают credits.php страницу.',
 'Deleted_Hack' => 'Удаленный кредит на ультрасовременный %s от списка. <br/>',
 'Updated_Hack' => 'Обновленная информация кредита для ультрасовременного %s. <br/>',
 'Added_Hack' => 'Добавленная информация для ультрасовременного %s. <br/>',
 'Status' => 'Статус',
 'No_Website' => 'Нет доступных Сайтов.',
 'No_Hacks' => 'Нет кредитов, чтобы отобразить.',
 'Add_New_Hack' => 'Добавить Новый Кредит',
 'User_Viewable' => 'Скрываются От Пользовательского Списка?',
 'Hack_Name' => 'Название Мода',
//'Description' => 'Описание',
 'Required' => 'Необходимые',
 'Author_Email' => 'Email Автора',
 'Version' => 'Версия',
 'Download_URL' => 'Место Загрузки',

/* Errors */
 'Error_Hacks_List_Table' => 'Ошибка, запрашивая Таблицы Списка работ.',
 'Required_Field_Missing' => 'Вы не можете вводить всю запрошенную информацию.',
 'Error_File_Opening' => 'Вы не можете открыть файл: %s',


//====================================================
// Mighty Gorgon - LANG - BEGIN
// Mighty Gorgon - Full Album Pack - BEGIN
	'Newest_pic' => 'Последнее Изображение', // Album Addon
	'Random_pic' => 'Случайное Изображение', // Album Addon
	'Click_enlarge_pic' => 'Нажмите на Изображение чтобы увеличить',
// Mighty Gorgon - Full Album Pack - END
// Mighty Gorgon - HTTP AGENTS - BEGIN
	'Last_Used_IP' => 'Последний используемый IP',
	'Last_Used_OS' => 'OS',
	'Last_Used_Browser' => 'Браузер',
	'Last_Used_Referer' => 'Реферал',
// Mighty Gorgon - HTTP AGENTS - END
// Mighty Gorgon - Enhanced Online - BEGIN
	'Users_Admins' => 'Администраторы',
	'Users_Mods' => 'Модераторы',
	'Users_Global_Mods' => 'Главные Модераторы',
	'Users_Regs' => 'Пользователи',
	'Users_Guests' => 'Гости',
	'Users_Hidden' => 'Скрытые',
// Mighty Gorgon - Enhanced Online - END
// Mighty Gorgon - Power Memberlist - BEGIN
	'Fast' => 'Быстро',
	'Standard' => 'Стандарт',
	'Style' => 'Стиль',
	'User_Contacts' => 'Контакты',
	'Memberlist_Users_Display' => 'Пользователей на странице:',
	'Sort_LastLogon' => 'Последнее посещение',
	'Sort_Birthday' => 'День Рождения',
// Mighty Gorgon - Power Memberlist - END
// Mighty Gorgon - Multiple Ranks - BEGIN
	'Staff' => 'Штат',
	'Rank' => 'Звание',
	'Rank_Header' => 'Звания',
	'Rank_Image' => 'Изображение Звания',
	'Rank_Posts_Count' => 'Автоматические звания в сообщениях',
	'Rank_Days_Count' => 'Автоматические звания в день',
	'Rank_Min_Des' => 'Минимальные сообщения/дни',
	'Rank_Min_M' => 'Минимум Сообщений',
	'Rank_Max_M' => 'Максимум Сообщений',
	'Rank_Min_D' => 'Минимум Дней',
	'Rank_Max_D' => 'Максимум Дней',
	'Rank_Special' => 'Индивидульное Звание',
	'Rank_Special_Guest' => 'Индивидуальное для Гостей',
	'Rank_Special_Banned' => 'Индивидуальное звание для забанненых',
	'Current_Rank_Image' => 'Current Звание изображения',
	'No_Rank' => 'Нет назначенныз Званий',
	'No_Rank_Image' => 'Нет изображений для Звания',
	'No_Rank_Special' => 'Нет индивидуального назначенного Звания',
	'Memberlist_Administrator' => 'Администратор',
	'Memberlist_Moderator' => 'Модератор',
	'Memberlist_User' => 'Пользователь',
	'Guest_User' => 'Гость',
	'Banned_User' => 'Забанненый',
	'Rank1_title' => 'Звание 1 Title',
	'Rank2_title' => 'Звание 2 Title',
	'Rank3_title' => 'Звание 3 Title',
	'Rank4_title' => 'Звание 4 Title',
	'Rank5_title' => 'Звание 5 Title',
// Mighty Gorgon - Multiple Ranks - END
// Mighty Gorgon - Nav Links - BEGIN
	'QUICK_LINKS' => 'Меню',
	'MAIN_LINKS' => 'Основные Ссылки',
 'TOOLS_LINKS' => 'Инструментальные средства',
 'NEWS_LINKS' => 'Новости',
 'USERS_LINKS' => 'Пользователи &amp; Группы',
 'INFO_LINKS' => 'Информация',
 'SPONSORS_LINKS' => 'Спонсоры',
 'HelpDesk' => 'Плата Помощи',
 'AvatarGenerator' => 'Генератор Аватара',
 'DBGenerator' => 'SQL на Генератор PHP',
 'NEWS_CAT' => 'Категории Новостей',
 'NEWS_ARC' => 'Архив Новостей',

// Mighty Gorgon - Nav Links - END
	'Activity' => 'Игры',
	'Games' => 'Игры',
	'Trohpy' => 'Трофеи Игры',
	'quick_links_games' => 'Меню Игры',

	'By' => 'By',
	'No_Icon_Image' => 'Нет Иконки',
	'Change_Style' => 'Стиль',
	'Change_Lang' => 'Язык',
	'Permissions_List' => 'Расширенный Список',
	'IP_TEAM' => 'Команда Icy Phoenix',

//	'' => '',
// Mighty Gorgon - LANG - END

// New MG - BEGIN
	'Nav_Separator' => '&nbsp;&raquo;&nbsp;',
	'WeatherForecast' => 'Прогноз Погоды',
	'ErrorNotFound' => 'Файл не найден!',
	'MGC_Users_Online' => 'MGC Пользователи онлайн',
	'MGC_User_Servertime' => 'Дата',
	'MGC_User_Nickname' => 'Имя Пользователя',
	'MGC_User_Server' => 'Сервер',
	'MGC_User_IP' => 'IP',
	'MGC_User_ID' => 'ID',
	'MGC_User_Client_Version' => 'MGC Версия',

	'Country_Flag' => 'Флаг Страны',
	'Select_Country' => 'Выбрать Страну',
	'Extra_profile_info' => 'Дополнительная информация Профиля',
// 'Extra_profile_info_explain' => 'You can add extra information about yourself or about your hobbies. You can also add photos. You can use some bbcodes as when you post or make your signature. There is a <b>%d</b> character limit (if 0 then no limit)',
	'Extra_profile_info_explain' => 'ВЫ можете добавить дополнительную информацию о себе  или о своем хобби. Вы можете также добавить фотографии. Вы можете использовать некоторый bb коды, когда Вы отправляете или делаете свою подпись.',
 'Extra_window' => 'Открыть в отдельном окне',
 'Extra_too_long' => 'Ваша дополнительная область является слишком длинной (максимальное <b> %d </b>, значение)',
 'UserLike' => 'Пользователь likes',
 'UserDisLike' => 'Пользователю не нравится',
 'UserLikeIns' => 'Три вещи которые Вам нравятся',
 'UserDisLikeIns' => 'Три вещи которые Вам не нравятся',
 'UserPhone' => 'Телефонный номер',
 'UserSport' => 'Спорт/Команда',
 'UserMusic' => 'Музыка/Группы',
 'UserNoInfo' => 'Нет Доступной Информация',
 'Last_Seen' => 'Последние Онлайн',


// New MG - END

// MG CMS - BEGIN
	'CMS_TITLE' => 'CMS',
	'CMS_MANAGEMENT' => 'CMS Управление',
	'CMS_CONFIG' => 'CMS Конфигурации',
	'CMS_ACP' => 'Редактировать эту Страницу',
	'CUSTOM_PAGE' => 'Настроить Страницу',
// MG CMS - END

// Icy Phoenix - BUILD 001
	'SimilarTopics' => 'Подобные Темы',
	'Chat' => 'Чат',
	'Digests' => 'Просмотры',

	 'CPL_REG_INFO_EXPLAIN' => 'Имя пользователя, адрес электронной почты и пароль',
 'CPL_PROFILE_INFO_EXPLAIN' => 'Общая информация контактов, управление, день рождения, интересы и другая информация',
 'CPL_PROFILE_VIEWED_EXPLAIN' => 'Пользователи, которые просматривали Вашу конфигурацию',
 'CPL_AVATAR_PANEL_EXPLAIN' => 'Аватар является небольшим изображением, которое Вы можете связать со своим именем',
 'CPL_SIG_EDIT_EXPLAIN' => 'Ваша Подпись: Вы можете составить текст, который будет прикреплен снизу',
 'CPL_PREFERENCES_EXPLAIN' => 'Общие персональные настройки для почтового отправления и чтения сообщений',
 'CPL_BOARD_SETTINGS_EXPLAIN' => 'Глобальные параметры настройки относительно времени, шаблона и языка',
 'Calendar_settings_EXPLAIN' => 'Параметры настройки относительно календарного блока',
 'Hierarchy_setting_EXPLAIN' => 'Параметры настройки относительно разбиения типа подфорумов и тем',
 'LOGIN_SEC_EXPLAIN' => 'Если допущено этот раздел дает возможность Вам контролировать все входы в систему своего имени пользователя',
 'CPL_OWN_POSTS_EXPLAIN' => 'Ищут в Ваших сообщениях на форуме',
 'CPL_OWN_PICTURES_EXPLAIN' => 'Посещают Вашу личную галерею',
 'CPL_INBOX_EXPLAIN' => 'Ящик для приема сообщений: содержит личные сообщения, которые Вы получали',
 'CPL_SAVEBOX_EXPLAIN' => 'Сохраненные Сообщения: содержит личные сообщения, которые Вы сохранили',
 'CPL_OUTBOX_EXPLAIN' => 'Ящик для посылки сообщений: содержит личные сообщения, которые Вы послали, но которые еще не были прочитаны',
 'CPL_SENTBOX_EXPLAIN' => 'Sentbox: содержит частные сообщения, которые Вы послали и которые были прочитаны',
 'CPL_BOOKMARKS_EXPLAIN' => 'Вы назначили все закладки для тем',
 'WATCHED_TOPICS_EXPLAIN' => 'Просмотр списка всех тем',
 'CPL_SUBSCFORUMS_EXPLAIN' => 'форумы на которые Вы подписальсь',
 'DIGESTS_EXPLAIN' => 'просмотр электронной почты, которые посылают автоматически с выборкой новых объявлений, повешенных на форуме',
 'DRAFTS_EXPLAIN' => 'Управление Вашими Проектами',

// Ajax Shoutbox - BEGIN
	'Ajax_Shoutbox' => 'Мини Чат',
	'Ajax_Chat' => 'Чат',
	'Ajax_Archive' => 'Архив Чата',
	'Shoutbox_flooderror' => 'Вы не можете писать сообщения. Пожалуйста попытайтесь снова в течении нескольких секунд.',
 'Shoutbox_no_auth' => 'Извините, только регистрированные пользователи могут использовать Мини Чат',
 'Shoutbox_loading' => 'Идет загрузка Мини Чата...',
// Errors
	'Shoutbox_unable' => 'Извините, действие couldn \'t уже выполнено. Пожалуйста попробуйте снова.',
 'Shoutbox_empty' => 'Нет сообщений в БД',
 'Shoutbox_no_mode' => 'Не правильно определен режим',
// Archive
	'Shouts' => 'Голос',
 'Статистика' => 'Статистика',
 'Total_shouts' => 'Полные Голоса',
 'Stored_shouts' => 'Сохраненные Голоса',
 'My_shouts' => 'Мои Голоса',
 'Today_shouts' => 'Голоса за прошлые 24 часа',
 'Top_Ten_Shouters' => 'Лучшие Десять Подружек преступника',
// Online list
	'Online_total' => 'Общий',
	'Online_registered' => 'Пользователи',
	'Online_guests' => 'Гости',
	'Who_is_Chatting' => 'Кто в Чате',
	'Shoutbox_online_explain' => 'Эти данные основаны на активности пользователей за последние 30 секунд',
// Ajax Shoutbox - END

	'Contact_us' => 'Обратная связь',
	'Contact_us_explain' => 'С этой страницы Вы можете отправить нам письмо на email',
	'Session_invalid' => 'Ошибка. Пожалуйста повторите форму ввода.',

// Icy Phoenix - BUILD 007
	'Reg_Username_Short' => 'Это имя пользователя слишком короткое',
'Reg_Username_Long' => 'Это имя пользователя слишком длинное',
'Reg_Username_Taken' => 'Это имя пользователя не доступно',
'Reg_Username_Free' => 'Это имя пользователя разрешено',
'Reg_PWD_Short' => 'Этот пароль слишком короткий',
'Reg_PWD_Easy' => 'Этот пароль слишком простой',
'Reg_PWD_OK' => 'Этот пароль OK',
'Reg_Email_Invalid' => 'этот адрес электронной почты является недействительным или уже есть в БД',
'Reg_Email_OK' => 'этот адрес электронной почты в порядке',

// Moved here from lang_adv_time.php
	'time_mode' => 'Управление Временем',
	'time_mode_text' => 'разница между летним времеменем и обычным временем для вашей страны (от 0 до 120 минут, как правило, 60). <br /> <br /> <strong> * Режим характеризуется звездочка используется по умолчанию на этом форуме, и рекомендовал его администратором. </ STRONG>',
	'time_mode_auto' => 'Автоматический режим...',
	'time_mode_full_pc' => 'Ваше время на компьютере',
	'time_mode_server_pc' => 'всемирного времени, часовой пояс / Летнее /> <br <span STYLE="margin-left: 25"> с компьютера </ span>',
	'time_mode_full_server' => 'Местное время Сервера',
	'time_mode_manual' => 'Ручной Режим...',
	'time_mode_dst' => 'DST Включить',
	'time_mode_dst_server' => 'Сервером',
	'time_mode_dst_time_lag' => 'DST разница во времени',
	'time_mode_dst_mn' => 'минут',
	'time_mode_timezone' => 'Часовой Пояс',

	'dst_time_lag_error' => 'Ошибка во времени. Вы должны указать число минут между 0 и 120. ',

	'dst_enabled_mode' => ' [Летнее время включено]',
	'full_server_mode' => 'Синхронизация времени сервера и форума',
	'server_pc_mode' => 'Время синхронизировано с сервером - Часовой Пояс/Летнее время с Вашим компьютером',
	'full_pc_mode' => 'Время синхронизированно с временем Вашего компьютера',

	'Smileys_Per_Page' => 'Смайлики на странице',

/* lang_site_hist.php - BEGIN */
	'Site_history' => 'История Сайта',
	'Month' => 'Месяц',
	'Week_day' => 'День недели',
	'Not_availble' => 'Не доступно',
	'Total_users' => 'Максимум Пользователей',
	'Reg_users' => 'Зарегистрированные Пользователи',
	'Hidden_users' => 'Скрытые Пользователи',
	'Guests_users' => 'Гости',
	'New_users' => 'Новые Пользователи',
	'New_topics' => 'Новые Темы',
	'New_posts_reply' => 'Сообщения/Ответы',
	'Most_online' => 'Большинство пользователей онлайн %s',
	'Most_online_week' => 'Большинство пользователей онлай в течении прошедших 7 дней',
	'Last_24' => 'Большинство пользователей онлайн в течении прошедших %s Часов',
	'Top_Posting_Users' => 'Лучшие сообщения пользователей',
	'Top_Posting_Users_week' => 'Лучшие сообщения пользователей этой недели [%s]',
	'Rank' => 'Звания',
	'Percent' => 'Процент',
	'Graph' => 'График',
	'Top_Visiting_Users' => 'Время нахождения на сайте',
/* lang_site_hist.php - END */

/* lang_referrers.php - BEGIN */
	'Referrers_Title' => 'Http Управление рефералами',
	'Referrers_Cleared' => 'Щчистить Реферралов',
	'Referrers_Clear' => 'Удалить все',
	'Click_Return_Referrers' => 'Нажмите %sЗдесь%s чтобы вернуть к Рефералам',
	'Referrers' => 'Http Реферал',
	'Referrer_host' => 'Реферал\'s Host',
	'Referrer_url' => 'Реферал\'s Url',
	'Referrer_ip' => 'Реферал\'s IP',
	'Referrer_hits' => 'Hits',
	'Referrer_first' => 'Первый Визит',
	'Referrer_last' => 'Последний Визит',
	'Viewing_Referrers' => 'Просмотр Рефералов',
/* lang_referrers.php - END */

/* lang_prune_users.php - BEGIN */
// add to prune inactive
	'X_Days' => '%d Дней',
	'X_Weeks' => '%d Недель',
	'X_Months' => '%d Месяцев',
	'X_Years' => '%d Лет',

	'Confirm_delete_user' => 'Вы действительно уверены, что хотите удалить этого Пользователя?',
 'Prune_no_users' => 'Нет пользователей для удаления',
 'Prune_users_number' => 'следующие %d пользователи будут удалены:',

 'Prune_user_list' => 'Пользователи, которые будут удалены',
 'Prune_on_click' => 'Вы собираетесь удалить %d пользователей. Действительно ли Вы хотите выполнить эту операцию?',
 'Prune_Action' => 'Нажмите ссылку ниже чтобы выполнить операцию',
 'Prune_users_explain' => 'Сокращение пользователей!. Вы можете выбрать одну из трех ссылок: удалить старых пользователей, которые не зарегистрированы, удалите старых пользователей, которые  не вошли, удалите пользователей, которые  не активизировали свои учетные записи. <p/> <b> Примечание: </b> нет  функции отмены.',

/* lang_prune_users.php - END */

/* lang_avatar_generator.php - BEGIN */
	'Avatar_Generator' => 'Аватар Генератор',
	'Available' => 'Доступные аватары',
	'Random' => 'Случайный',
	'Avatar_Text' => 'Пожалуйста, введите текст, который вы хотели бы видить на вашем Аватар:',
'Avatar_Preview' => 'Предварительный Аватар',
'Your_Avatar' => 'Ваш аватар',
'Submit_Avatar' => 'Отправить аватар',
/* lang_avatar_generator.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

	'Upload_Image_Local' => 'Загрузить Изображение ',
'Uploaded_Images_Local' => 'Загруженные изображения',
 'Upload_Image_Local_Explain' => 'Выбирите файл, который будет загружен',
 'Uploaded_Image_Success' => 'изображение было загружено успешно.',
 'Uploaded_Image_BBC' => 'Вы можете использовать этот BBCode, чтобы перенести это изображение.',
 'Upload_Image_Empty' => 'Вы можете использовать загрузки \'t..., Вы знаете!',
 'Upload_File_Too_Big' => 'файл, который Вы пытаетесь загрузить, является слишком большим! Максимальный позволенный размер:',
 'Upload_File_Type_Allowed' => 'Только эти типы файла могут быть загружены',
 'Upload_Insert_Image' => 'Вставить BBCode',
 'Upload_Close' => 'Закрыть',
 'BBCode' => 'BBCode',
 'HTML' => 'HTML',


	'No_News' => 'Нет Новостей ',

	'Email_confirm' => 'Подтверждение Вашего Email',
 'Email_mismatch' => 'Адреса электронной почты, которые Вы ввели, не соответствуют.',

 'View_ballot' => 'Избирательный бюллетень Представления',
 'Full_edit' => 'Переключить на полную форму редактирования',
 'Save_changes' => 'Сохранить',
 'No_subject' => '(Нет тем)',
 'Edit_quick_post' => 'Быстрое редактирование этого сообщения',
 'AJAX_search_results' => 'быстрый поиск нашел %s тем с ключевыми словами по вашему запросу. Нажмите здесь, чтобы посмотреть эти темы',
 'AJAX_search_result' => 'быстрый поиск нашел одну тему с ключевыми словами по вашему запросу. Нажмите здесь, чтобы посмотреть эту тему',
 'More_matches_username' => 'одно имя пользователя соответствовало Вашему запросу. Пожалуйста выберите пользователя из блока выше.',
 'No_username' => 'Вы должны ввести имя пользователя.',
 'AJAX_quick_search_results' => 'быстрый поиск нашел %s тем с ключевыми словами. <br/> На правой стороне Вы можете видеть первые результаты. <br/> Нажимают на ПОИСК чтобы получить полный список результата.',
 'AJAX_quick_search_result' => 'быстрый поиск нашел одну тему с ключевыми словами. <br/> На правой стороне Вы можете видеть результат.',

 'Icon_Description' => 'Описание Значка',

 'Feature_Disabled' => 'Эта особенность заблокирован.',

// Resend Activation - BEGIN
	'Resend_activation_email' => 'Выслать письмо с кодом активации',
'Invalid_activation' => 'Активация Учетной записи пользователя  может быть выполнена только администратором.',
'No_actkey' => 'Не существующий ключ активации для вашей учетной записи. Пожалуйста, свяжитесь с администратором конференции для получения дополнительной информации. ',
'Send_actmail_flood_error' => 'Вы не можете сделать еще один запрос, пожалуйста, повторите попытку через некоторое время.',
'Resend_activation_email_done' => 'активации по электронной почте было отправлено. Пожалуйста, проверьте свою электронную почту для получения дополнительной информации. ',
	// Resend Activation - END

	'Bots_Group' => 'Боты',
'Bots_Color' => 'Цвет Боты',
'Active_Users_Group' => 'Активные пользователи',
'Active_Users_Color' => 'Цвет для Активных  пользователей',
'Group_Default_Membership' => 'Группа по умолчанию ',
'Group_Default_Membership_Explain' => 'Выберите группу по умолчанию для пользователей, чтобы присвоить звание и цвет.',
'User_Color' => 'Цвет пользователя ',
'User_Color_Explain' => 'Если вы указываете цвет для данного пользователя то будут заменены групповые цвета по умолчанию, если вы укажете 1 группы в списке выше. Используйте шестнадцатеричный код без <b> # </ B> пример: ff0000 это код RED. ',
'No_Groups_Membership' => 'Нет Групп',
'No_Default_Group' => 'Нет Групп по умолчанию',
'Group_members_updated' => 'Обновление членов групп прошло успешно.',
'Colorize_All' => 'Раскрасить всех участников',
'Colorize_Selected' => 'Раскрасить выбранные',

	'CompanyWho' => 'Компания',
	'CompanyWhere' => 'Как с нами связаться',
	'CompanyServices' => 'Услуги',
	'CompanyProducts' => 'Продукт',

	'ShareThisTopic' => 'Экспорт этой темы',

	'Remove_cookies' => 'Удалить Cookies набор на данном сайте',
'Cookies_deleted' => 'Все печенье были удалены. Теперь Вы вышли из системы. <br /> Чтобы завершить удаление, необходимо закрыть браузер.',
'Delete_cookies' => 'Удалить Cookies',
'Cookies_confirm' => 'Вы уверены, что хотите удалить все куки, установленным этим сайтом? <br /> <br /> Это действие также будет выполнен выход из системы.',
	
	'CustomIcy' => 'CustomIcy',

	'Drafts' => 'Проекты',
	 'Drafts_Action' => 'Действие',
 'Drafts_Save' => 'Сохранить',
 'Drafts_Load' => 'Загрузить',
 'Drafts_Saved' => 'Этот Проект был сохранен',
 'Drafts_Loaded' => 'Проект загружен',
 'Drafts_No_Drafts' => 'Нет сохраненных проектов',
 'Drafts_Delete_Sel' => 'Удалить выбранные',
 'Drafts_Save_Question' => '<br/> <br/> действительно ли Вы уверены, что хотите сохранить это сообщение как проект? <br/> <br/> Пожалуйста отметьте,только  сообщения будет сохранено, в то время как от всех других параметров настройки откажутся.',
 'Drafts_Delete_Question' => '<br/> <br/> действительно ли Вы уверены, что Вы хотите удалить выбранные проекты?',
 'Drafts_Type' => 'Черновой Тип',
 'Drafts_Subject' => 'Черновая Тема',
 'Drafts_NT' => 'Новая тема',
 'Drafts_NM' => 'Ответ',
 'Drafts_NPM' => 'Личное Сообщение',

	'CannotEditAdminsPosts' => 'Вы не можете редактировать сообщения администратора',
 'Random_Number' => 'Случайное число',

 'New_download' => 'новая загрузка была передана или обновлена. <br/> Нажмите %sЗдесь%s, чтобы посмотреть.',
 'Dl_bug_tracker' => ' Bug Трэкер',
 'Downloads_ADV' => 'Загрузить РЕКЛАМУ',

 'TopicUseful' => 'действительно ли эта тема была полезеной?',
 'Article' => 'Статья',
 'Comments' => 'Комментарии',

 'Sitemap' => 'Карта сайта',

 'Delete_My_Account' => 'Удалить Учетную запись',
 'Delete_My_Account_Explain' => 'Если Вы хотите удалить свою учетную запись на этом сайте, пожалуйста пошлите запрос, используя эту форму, и Ваша учетная запись будет заблокирована как можно скорее. <br/> Пожалуйста определите "Удаление Учетной записи" по теме и (если Вы желаете), напишите причину в нескольких словах.',

 'KB_MODE_ON' => 'Включить режим Кбайта',
 'KB_MODE_OFF' => 'Отключить режим Кбайта',

 'Go_To_Page_Number' => 'Искать, чтобы пронумеровать страницы',

 'Admin_Emails' => 'Администраторы может послать по электронной почте меня информация',
 'Allow_PM_IN' => 'Позволяют пользователям посылать мне частные сообщения',
 'Allow_PM_IN_Explain' => 'Отмечают, что системные администраторы, модераторы и друзья всегда будут в состоянии послать Вам сообщения.',
 'Allow_PM_IN_SEND_ERROR' => 'пользователю, которому Вы пытаетесь послать сообщение, не смог получить, потому что он или она заблокировала доступ для Личных Сообщений.',

// 'UCP_ZEBRA' => 'Friends &amp; Foes',
	'UCP_ZEBRA' => 'Управление Друзьями',
	'UCP_ZEBRA_FOES' => 'Управление нежелаемыми пользователями',
 'UCP_ZEBRA_FRIENDS' => 'Управление Друзьями',

 'ADD_FOES' => 'Добавить новых нежелаемых пользователей',
 'ADD_FOES_EXPLAIN' => 'Вы можете ввести несколько имен пользователя каждого в новую строку.',
 'YOUR_FOES' => 'Ваши Враги',
 'YOUR_FOES_EXPLAIN' => 'Чтобы удалить имена пользователя выбирают их, и нажмите для выбора. <br/> Совет: используйте CTRL, чтобы выбрать/снять нескольких элементов.',
 'FOE_MESSAGE' => 'Сообщение от нежелаемого пользователя',
 'FOES_EXPLAIN' => 'Нежелаемые являются пользователями, которые будут проигнорированы по умолчанию. Сообщения этим пользователям  будут полностью не видимы. Личные сообщения от нежелаемых пользователей все еще разрешены. Пожалуйста отметьте, чтобы Вы не смогли игнорировать модераторов или администраторов.',
 'FOES_UPDATED' => 'Ваш список нежелаемых пользователей был обновлен успешно.',
 'FOES_UPDATE_ERROR' => 'Ваш список нежелаемых пользователей НЕ был обновлен.',
 'NO_FOES' => 'Нет нежелаемых пользователей в настоящее время',


	'ADD_FRIENDS' => 'Добавить Друга',
 'ADD_FRIENDS_EXPLAIN' => 'Вы можете ввести несколько имен пользователя, каждог в отдельную строку.',
 'YOUR_FRIENDS' => 'Ваши друзья',
 'YOUR_FRIENDS_EXPLAIN' => 'Чтобы удалить именя пользователя выбирите их, и нажмите для выбора. <br/> Совет: используйте CTRL, чтобы выбрать/снять выбранные строки.',
 'FRIEND_MESSAGE' => 'Сообщение от друга',
 'FRIENDS' => 'Друзья',
 'FRIENDS_EXPLAIN' => 'позволит вам быстрый доступ к членам с которыми вы общаетесь чаще. Если шаблон имеет соответствующей поддержки какой-либо сообщения, сделанные от друга, можно выделить.',
 'FRIENDS_UPDATED' => 'Ваш список друзей был обновлен успешно.',
 'FRIENDS_UPDATE_ERROR' => 'Ваш список друзей НЕ был обновлен.',
 'FRIENDS_ONLINE' => 'Друзья Онлайн',
 'FRIENDS_HIDDEN' => 'Друзья Скрытые',
 'FRIENDS_OFFLINE' => 'Друзья Офлайн',
 'NO_FRIENDS' => 'Нет Друзей в настоящее время',
 'NO_FRIENDS_OFFLINE' => 'Нет друзей офлайн',
 'NO_FRIENDS_ONLINE' => 'Нет друзей онлайн',

 'Default' => 'Значение по умолчанию',

 'Reserved_Author' => '[СКРЫТЫЙ]',
 'Reserved_Topic' => '[ЗАРЕЗЕРВИРОВАННАЯ ТЕМА]',
 'Reserved_Post' => '[ЗАРЕЗЕРВИРОВАННЫЙ ПОСТ]',

 'THANKS_RECEIVED' => 'Спасибо, полученное',

 'RECENT_USER_ACTIVITY' => 'Последние действия пользователя',
 'USER_TOPICS_STARTED' => 'Темы, начатые',
 'USER_POSTS' => 'Сообщений письменных',
 'USER_TOPICS_VIEWS' => 'Темы, проссматриваемые',
 'RECENT_USER_STARTED_TITLE' => 'начатый %s',
 'RECENT_USER_STARTED_NAV' => 'Темы, начатые %s',
 'RECENT_USER_POSTS_TITLE' => 'который %s зарегистрировал в',
 'RECENT_USER_POSTS_NAV' => 'Темы, которые %s зарегистрировал в',
 'RECENT_USER_VIEWS_TITLE' => 'рассматриваемый %s',
 'RECENT_USER_VIEWS_NAV' => 'Темы, рассматриваемые %s',

 'WARN_NO_BUMP' => 'Вы - последняя эмблема в этой теме: Вы не можете написать новые сообщения в течение 24 часов.',

 'LINK_THIS_TOPIC' => 'Связать эту тему',
 'LINK_URL' => 'URL',
 'LINK_BBCODE' => 'BBCode',
 'LINK_HTML' => 'HTML',

 'NEWS_POSTED' => 'Просмотр Новостей',
 'TOPICS_POSTED' => 'Поиск темы  начался',
 'POSTS_POSTED' => 'Ищут во всех пользовательских сообщениях',

 'ACCOUNT_DELETION_REQUEST' => 'Пользователь %s просил удалить учетную запись.',

 'SORT_TOPICS' => 'Вид темы ',
 'SORT_TOPICS_NEWEST' => 'Самые новые',
 'SORT_TOPICS_OLDEST' => 'Самые старые',

 'EDIT_POST_DETAILS' => 'Подробности Редактирования Изображений ',
 'CURRENT_POSTER' => 'Текущая изображений',
 'NEW_POSTER' => 'Новая изображений',
 'DETAILS_CHANGED' => '<b> успешно изменино. </b></span><br /><span class="Подробности сообщения"> это окно будет закрыто через 3 секунды.',

 'Переадресуйте' => 'Переадресовывают',
 'Redirect_to' => 'Если Ваш браузер не поддерживает  перенаправление пожалуйста, нажмите %sЗдесь%s, для переадресации',

 'InProgress' => 'В продвижении',

 'HAPPY_BIRTHDAY' => 'С днем рождения',

 'ЗАГРУЗИТЕ' => 'Загрузка',
 'ЗАГРУЖЕННЫЙ' => 'Загруженный',
 'РАЗМЕР ФАЙЛА' => 'Размер файла',
 'ИМЯ ФАЙЛА' => 'Имя файла',
 'FILE_NOT_AUTH' => 'У Вас нет прав загружать этот файл',
 'SHOW_POSTS_FROM' => 'Показ переносит от',
 'SHOW_POSTS_TO' => 'к',

 'SEE_MORE_DETAILS' => 'Видят больше подробностей...',
 'НЕИЗВЕСТНОЕ' => 'Неизвестное',
 'MASS_PM' => 'Масса ПОПОЛУДНИ',
 'TEXT_FORMAT' => 'Формат',
 'ОТПРАВИТЕЛЬ' => 'Отправитель',
 'PM_NOTIFICATION' => 'Привет, <br/> <br/> Вы получили новое личное сообщение к своей учетной записи на ("SITENAME"). <br/> <br/> Вы можете рассмотреть свое новое сообщение, нажав на следующую ссылку: <br/> <br/> {U_INBOX} <br/> <br/>',

 'GSEARCH' => 'Поиск Google',
 'GSEARCH_ENGINE' => 'Использовать Поисковой механизм Google',
 'SEARCH_WHAT' => 'Поиск, что',
 'SEARCH_WHERE' => 'Поиск, где',
 'SEARCH_THIS_FORUM' => 'Искать на этом форуме...',
 'SEARCH_THIS_TOPIC' => 'Искать в этой теме...',
 'VF_ALL_TOPICS' => 'Все Темы',

 'WHITE_LIST_MESSAGE' => 'Этот сайт требуют подтверждения учетной записи через электронную почту. Пожалуйста, проверте ваш почтовый ящик или папку спам чтоб найти письмо для активации',
 'CLICK_RETURN_HOME' => 'Нажмите %sЗдесь%s, чтобы вернуться к Первой странице',

 'WEEK_DAY_SUNDAY' => 'воскресенье',
 'WEEK_DAY_MONDAY' => ' понедельник',
 'WEEK_DAY_TUESDAY' => ' вторник',
 'WEEK_DAY_WEDNESDAY' => ' среда',
 'WEEK_DAY_THURSDAY' => ' четверг',
 'WEEK_DAY_FRIDAY' => ' пятница',
 'WEEK_DAY_SATURDAY' => ' суббота',

 'RATINGS' => 'Оценки',

 'ERROR_TABLE' => 'не возможно выполнить запрос %s таблицы',

 'SMILEYS' => 'Смайлики',
 'SMILEYS_NO_CATEGORIES' => 'Нет определенной категории',
 'SMILEYS_CATEGORY' => 'Категория',
 'SMILEYS_GALLERY' => 'Галерея Смайлов',
 'SMILEYS_STANDARD' => 'Стандартные Смайлы',

 'QUICK_LIST' => 'Полный Список',
 'NORMAL_LIST' => 'Нормальный Список',

 'RETURN_PAGE' => '%sПерейти к предыдущей странице%s',
 'FILE_NOT_FOUND' => 'Файл, не найден',
 'FSOCK_DISABLED' => 'FSOCK, Заблокирован',

 'MANAGEMENT' => 'Управление',
 'SORT_ORDER' => 'Вид',
 'SORT_DIR' => 'руководство Вида',

 'TIME_YEAR' => 'Год',
 'TIME_MONTH' => 'Месяц',
 'TIME_DAY' => 'День',
 'TIME_HOUR' => 'Час',
 'TIME_MINUTE' => 'Минута',
 'TIME_SECOND' => 'Секунда',

 'CONTACTS' => 'Контакты',


	// Event Registration - BEGIN
	'Reg_Title' => 'Случайная Регистрация ',
 'Post_Registration' => 'Случайная Регистрация ',
 'Add_registration' => 'Добавить Регистрацию',
 'Add_reg_explain' => '&nbsp; &bull; Проверьте <i>, Активировать </i>, чтобы показать регистрационный бланк для этого сообщения. Непроверьте, чтобы скрыть это. <br/> &nbsp; &bull; Проверьте <i> Сброс </i>, чтобы удалить все текущие регистрации для этой формы. <br/> &nbsp; &bull; Введите число в <i> Слоты </i>, чтобы ограничить регистрацию для опции. "0" или пустой = неограниченный.',
 'reg_activate' => 'Активация',
 'reg_reset' => 'Сброс',
 'Reg_Insert' => 'Вы регистрированы.',
 'Reg_Change' => 'Регистрация изменина.',
 'Reg_Confirm' => 'Регистрация подтверждена.',
 'Reg_Unregister' => 'Регистрация отменена.',
 'Reg_Max_Registrations' => 'максимум регистраций для этой опции достигнуто. Регистрация не возможна.',
 'Reg_No_Slots_Left' => 'Нет слотов для регистрации.',
 'Reg_One_Slot_Left' => 'Один слот, для регистрации.',
 'Reg_Slots_Left' => '%s слоты, оставленные, чтобы регистрироваться.',
 'Reg_Self_Unregister' => 'Отмена',
 'Reg_Own_Confirmation' => 'Подтверждение',
 'Reg_Own_Confirmed' => 'подтвержденный',
 'Reg_Green_Option' => 'Зеленый',
 'Reg_Blue_Option' => 'Синий',
 'Reg_Red_Option' => 'Красный',
 'Reg_Value_Max_Registrations' => 'Слоты',
 'Reg_Do' => 'Зарегистрировались',
 'Reg_Maybe' => 'Не Уверен',
 'Reg_Dont' => 'Не сейчас',
 'Reg_Head_Username' => 'Пользователь:',
 'Reg_Head_Time' => 'Дата:',
 'Reg_for' => 'Выполненно для регистрации ',
 'Reg_for_explain' => 'Введите 0 или поле пустым для бесконечной регистрации',
 'Reg_no_options_specified' => 'Вы должны определить по крайней мере одну опцию, чтобы для регистрации .',
 'Reg_event_date' => '<b>Случая дата: </b>',
	// Event Registration - END

	'REPLY_PREFIX_OLD' => 'Re:',
'REPLY_PREFIX' => 'Re:',

'READ_ONLY_FORUM' => 'Извините, но в настоящее время форум установлен в <b> READ ONLY </ режим> Ь, который означает, что вы не можете отправлять сообщения, даже если у вас есть права. Пожалуйста, повторите попытку позже. ',
	// Tickets Submission - BEGIN
	'TICKET_CAT' => 'Категория',
	// Tickets Submission - END

	)
);

/*Special Cases, Do not bother to change for another language */
$lang['YES'] = $lang['yes'];
$lang['NO'] = $lang['no'];
$lang['HL_File_Error'] = $lang['Error_File_Opening'];

$lang['Prune_commands'] = array();

// here you can make more entries if needed
$lang['Prune_commands'][0] = 'Prune non-posting users';
$lang['Prune_explain'][0] = 'Who have never posted, <b>excluding</b> new users from the past %d days';
$lang['Prune_commands'][1] = 'Prune inactive users';
$lang['Prune_explain'][1] = 'Who have never logged in, <b>excluding</b> new users from the past %d days';
$lang['Prune_commands'][2] = 'Prune non-activated users';
$lang['Prune_explain'][2] = 'Who have never been activated, <b>excluding</b> new users from the past %d days';
$lang['Prune_commands'][3] = 'Prune long-time-since users';
$lang['Prune_explain'][3] = 'Who have not visited for 60 days, <b>excluding</b> new users from the past %d days';
$lang['Prune_commands'][4] = 'Prune not posting so often users';
$lang['Prune_explain'][4] = 'Who have less than an average of 1 post for every 10 days while registered, <b>excluding</b> new users from the past %d days';
$lang['Prune_commands'][5] = 'Prune non-posting and non-visiting users';
$lang['Prune_explain'][5] = 'Who have never posted and not visited recently, <b>excluding</b> new users from the past %d days';
// Timezones - BEGIN
$lang['All_times'] = 'Часовой пояс: % S '; // eg. All times are GMT - 12 Hours (times from next block)

// Time zones short
$lang['tzs']['-12'] = 'GMT - 12 Часов';
$lang['tzs']['-11'] = 'GMT - 11 Часов';
$lang['tzs']['-10'] = 'GMT - 10 Часов';
$lang['tzs']['-9'] = 'GMT - 9 Часов';
$lang['tzs']['-8'] = 'GMT - 8 Часов';
$lang['tzs']['-7'] = 'GMT - 7 Часов';
$lang['tzs']['-6'] = 'GMT - 6 Часов';
$lang['tzs']['-5'] = 'GMT - 5 Часов';
$lang['tzs']['-4'] = 'GMT - 4 Часов';
$lang['tzs']['-3.5'] = 'GMT - 3.5 Часов';
$lang['tzs']['-3'] = 'GMT - 3 Часов';
$lang['tzs']['-2'] = 'GMT - 2 Часов';
$lang['tzs']['-1'] = 'GMT - 1 Часов';
$lang['tzs']['0'] = 'GMT';
$lang['tzs']['1'] = 'GMT + 1 Часов';
$lang['tzs']['2'] = 'GMT + 2 Часов';
$lang['tzs']['3'] = 'GMT + 3 Часов';
$lang['tzs']['3.5'] = 'GMT + 3.5 Часов';
$lang['tzs']['4'] = 'GMT + 4 Часов';
$lang['tzs']['4.5'] = 'GMT + 4.5 Часов';
$lang['tzs']['5'] = 'GMT + 5 Часов';
$lang['tzs']['5.5'] = 'GMT + 5.5 Часов';
$lang['tzs']['6'] = 'GMT + 6 Часов';
$lang['tzs']['6.5'] = 'GMT + 6.5 Часов';
$lang['tzs']['7'] = 'GMT + 7 Часов';
$lang['tzs']['8'] = 'GMT + 8 Часов';
$lang['tzs']['9'] = 'GMT + 9 Часов';
$lang['tzs']['9.5'] = 'GMT + 9.5 Часов';
$lang['tzs']['10'] = 'GMT + 10 Часов';
$lang['tzs']['11'] = 'GMT + 11 Часов';
$lang['tzs']['12'] = 'GMT + 12 Часов';
$lang['tzs']['13'] = 'GMT + 13 Часов';

// These are displayed in the timezone select box
$lang['tz']['-12'] = '(GMT -12 Hours) Eniwetok, Kwajalein';
$lang['tz']['-11'] = '(GMT -11 Hours) Midway Island, Samoa';
$lang['tz']['-10'] = '(GMT -10 Hours) Hawaii';
$lang['tz']['-9'] = '(GMT -9 Hours) Alaska';
$lang['tz']['-8'] = '(GMT -8 Hours) Pacific Time (US &amp; Canada)';
$lang['tz']['-7'] = '(GMT -7 Hours) Mountain Time (US &amp; Canada)';
$lang['tz']['-6'] = '(GMT -6 Hours) Central Time (US &amp; Canada), Mexico City';
$lang['tz']['-5'] = '(GMT -5 Hours) Eastern Time (US &amp; Canada), Bogota, Lima, Quito';
$lang['tz']['-4'] = '(GMT -4 Hours) Atlantic Time (Canada), Caracas, La Paz';
$lang['tz']['-3.5'] = '(GMT -3.5 Hours) Newfoundland';
$lang['tz']['-3'] = '(GMT -3 Hours) Brazil, Buenos Aires, Georgetown';
$lang['tz']['-2'] = '(GMT -2 Hours) Mid-Atlantic';
$lang['tz']['-1'] = '(GMT -1 Hour) Azores, Cape Verde Islands';
$lang['tz']['0'] = '(GMT) Western Europe Time, London, Lisbon, Casablanca, Monrovia';
$lang['tz']['1'] = '(GMT +1 Hour) CET(Central Europe Time), Brussels, Madrid, Paris';
$lang['tz']['2'] = '(GMT +2 Hours) EET(Eastern Europe Time), Kaliningrad, South Africa';
$lang['tz']['3'] = '(GMT +3 Hours) Baghdad, Kuwait, Riyadh, Moscow, St. Petersburg';
$lang['tz']['3.5'] = '(GMT +3.5 Hours) Tehran';
$lang['tz']['4'] = '(GMT +4 Hours) Abu Dhabi, Muscat, Baku, Tbilisi';
$lang['tz']['4.5'] = '(GMT +4.5 Hours) Kabul';
$lang['tz']['5'] = '(GMT +5 Hours) Ekaterinburg, Islamabad, Karachi, Tashkent';
$lang['tz']['5.5'] = '(GMT +5.5 Hours) Bombay, Calcutta, Madras, New Delhi';
$lang['tz']['5.75'] = '(GMT +5.75 Hours) Kathmandu';
$lang['tz']['6'] = '(GMT +6 Hours) Almaty, Dhaka, Colombo';
$lang['tz']['6.5'] = '(GMT +6.5 Hours)';
$lang['tz']['7'] = '(GMT +7 Hours) Bangkok, Hanoi, Jakarta';
$lang['tz']['8'] = '(GMT +8 Hours) Beijing, Perth, Singapore, Hong Kong, Urumqi';
$lang['tz']['9'] = '(GMT +9 Hours) Tokyo, Seoul, Osaka, Sapporo, Yakutsk';
$lang['tz']['9.5'] = '(GMT +9.5 Hours) Adelaide, Darwin';
$lang['tz']['10'] = '(GMT +10 Hours) EAST(East Australian Standard), Guam';
$lang['tz']['11'] = '(GMT +11 Hours) Magadan, Solomon Islands, New Caledonia';
$lang['tz']['12'] = '(GMT +12 Hours) Auckland, Fiji, Kamchatka, Marshall Island';
$lang['tz']['13'] = '(GMT +13 Hours) Nuku\'alofa';
// Timezones - END

$lang['datetime']['Sunday'] = $lang['WEEK_DAY_SUNDAY'];
$lang['datetime']['Monday'] = $lang['WEEK_DAY_MONDAY'];
$lang['datetime']['Tuesday'] = $lang['WEEK_DAY_TUESDAY'];
$lang['datetime']['Wednesday'] = $lang['WEEK_DAY_WEDNESDAY'];
$lang['datetime']['Thursday'] = $lang['WEEK_DAY_THURSDAY'];
$lang['datetime']['Friday'] = $lang['WEEK_DAY_FRIDAY'];
$lang['datetime']['Saturday'] = $lang['WEEK_DAY_SATURDAY'];
$lang['datetime']['Sun'] = 'Вс';
$lang['datetime']['Mon'] = 'Пн';
$lang['datetime']['Tue'] = 'Вт';
$lang['datetime']['Wed'] = 'Ср';
$lang['datetime']['Thu'] = 'Чт';
$lang['datetime']['Fri'] = 'Пт';
$lang['datetime']['Sat'] = 'Сб';
$lang['datetime']['January'] = 'Январь';
$lang['datetime']['February'] = 'Февраль';
$lang['datetime']['March'] = 'Март';
$lang['datetime']['April'] = 'Апрель';
$lang['datetime']['May'] = 'Май';
$lang['datetime']['June'] = 'Июнь';
$lang['datetime']['July'] = 'Илюль';
$lang['datetime']['August'] = 'Август';
$lang['datetime']['September'] = 'Сентябрь';
$lang['datetime']['October'] = 'Октябрь';
$lang['datetime']['November'] = 'Ноябрь';
$lang['datetime']['December'] = 'Декабрь';
$lang['datetime']['Jan'] = 'Янв';
$lang['datetime']['Feb'] = 'Фев';
$lang['datetime']['Mar'] = 'Мар';
$lang['datetime']['Apr'] = 'Апр';
$lang['datetime']['May'] = 'Май';
$lang['datetime']['Jun'] = 'Июн';
$lang['datetime']['Jul'] = 'Июл';
$lang['datetime']['Aug'] = 'Авг';
$lang['datetime']['Sep'] = 'Сен';
$lang['datetime']['Oct'] = 'Окт';
$lang['datetime']['Nov'] = 'Ноя';
$lang['datetime']['Dec'] = 'Дек';
$lang['datetime']['Jan'] = $lang['datetime']['JAN'];
$lang['datetime']['Feb'] = $lang['datetime']['FEB'];
$lang['datetime']['Mar'] = $lang['datetime']['MAR'];
$lang['datetime']['Apr'] = $lang['datetime']['APR'];
$lang['datetime']['May'] = $lang['datetime']['MAY'];
$lang['datetime']['Jun'] = $lang['datetime']['JUN'];
$lang['datetime']['Jul'] = $lang['datetime']['JUL'];
$lang['datetime']['Aug'] = $lang['datetime']['AUG'];
$lang['datetime']['Sep'] = $lang['datetime']['SEP'];
$lang['datetime']['Oct'] = $lang['datetime']['OCT'];
$lang['datetime']['Nov'] = $lang['datetime']['NOV'];
$lang['datetime']['Dec'] = $lang['datetime']['DEC'];

// NOTE: Please do not translate the following 4 lines!
// They are automatically translated into your language
$lang['day_short'] = array($lang['datetime']['Sun'], $lang['datetime']['Mon'], $lang['datetime']['Tue'], $lang['datetime']['Wed'], $lang['datetime']['Thu'], $lang['datetime']['Fri'], $lang['datetime']['Sat']);
$lang['day_long'] = array($lang['datetime']['Sunday'], $lang['datetime']['Monday'], $lang['datetime']['Tuesday'], $lang['datetime']['Wednesday'], $lang['datetime']['Thursday'], $lang['datetime']['Friday'], $lang['datetime']['Saturday']);
$lang['month_short'] = array($lang['datetime']['JAN'], $lang['datetime']['FEB'], $lang['datetime']['MAR'], $lang['datetime']['APR'], $lang['datetime']['MAY'], $lang['datetime']['JUN'], $lang['datetime']['JUL'], $lang['datetime']['AUG'], $lang['datetime']['SEP'], $lang['datetime']['OCT'], $lang['datetime']['NOV'], $lang['datetime']['DEC']);
$lang['month_long'] = array($lang['datetime']['January'], $lang['datetime']['February'], $lang['datetime']['March'], $lang['datetime']['April'], $lang['datetime']['May'], $lang['datetime']['June'], $lang['datetime']['July'], $lang['datetime']['August'], $lang['datetime']['September'], $lang['datetime']['October'], $lang['datetime']['November'], $lang['datetime']['December']);

//$lang[''] = '';

//====================================================
// Do not insert anything below this line
//====================================================

?>