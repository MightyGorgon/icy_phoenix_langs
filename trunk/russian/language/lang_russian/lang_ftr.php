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
* aUsTiN-Inc - (austin_inc@hotmail.com) - (phpbb-amod.com)
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
// Commonly Used
	'Ftr_msg_error' => 'Ошибка',
	'Ftr_msg_success' => 'Успех ',

// Buttons
	'Ftr_select_button' => ' Выбор ',
	'Ftr_change_button' => ' Изменение  ',
	'Ftr_delete_button' => ' Удалить ',
	'Ftr_save_button' => ' Сохранить ',

// Admin Panel
	'Ftr_admin_users' => 'FTR: Пользователи, Которые просматривали Тему',
 'Ftr_total_user_error' => 'Ошибка, Получая Полных Пользователей.',
 'Ftr_username' => '<strong> Имя пользователя </strong>',
 'Ftr_post_date_time' => '<strong> Рассматриваемая Почтовая Дата &amp; Время </strong>',
 'Ftr_admin_user_delete' => 'FTR: Завершите Пользовательское Удаление',
 'Ftr_user_del_success' => 'Все Пользователи были успешно Удалены.',
 'Ftr_save_config' => 'FTR: Сохраните Конфигурацию',
 'Ftr_save_config_success' => 'Новые Параметры настройки Конфигурации были Сохранены.',
 'Ftr_select_forum' => 'FTR: Выберите Форум',
 'Ftr_forum_choose' => '<strong> Выбор Форум: </strong>',
 'Ftr_set_config' => 'FTR: Конфигурация Набора',
 'Ftr_topic_choose' => 'Выбирают тему, чтобы вынудить их читать:',
 'Ftr_message' => 'Вводят сообщение, Пользователь (и) получит сообщение им рассмотреть эту тему.',
 'Ftr_config' => 'FTR: Конфигурация',
 'Ftr_post_changed' => '<strong> Удалить флажки FTR: </strong> <br/> Это вынуждает \'all \' участники Перечитать пост. ',
 'Ftr_current_topic' => '<strong> Текущая Тема FTR: </strong>',
 'Ftr_current_message' => '<strong> Текущее сообщение: </strong>',
 'Ftr_default' => 'Выбирают Форум',
 'Ftr_default2' => 'Выбирают Тему',

// Added in 1.0.2
	'Ftr_user_deleted' => 'Удаленный Пользователь!',
 'Ftr_deactivate' => '<strong> Дезактивируют FTR? </strong> <br/> <span = "gensmall"> <b> Да </b> выключит FTR (Пожалуйста отметьте, что эта установка может быть отменена <b> <i> вспомогательный управляющий процессор &raquo; Конфигурация &raquo; Ледяной Финикс &raquo; Почтовое отправление и Сообщения &raquo; Полностью отключите Чтение Темы Силы </i> </b>). </span>',
 'Ftr_whos_effected' => '<strong>, Кто вынужден читать этому? </strong> <br/> <span = "gensmall"> \'New Участники \' только затрагивают новую регистрацию. </span> ',
 'Ftr_whos_effected_a' => 'Все Участники',
 'Ftr_whos_effected_n' => 'Новые Участники',
 'Ftr_deactivate_y' => 'Да',
 'Ftr_deactivate_n' => 'Нет',
 'Ftr_effected_1' => 'Только Новые Пользователи Вилл быть Вынужденным Читать Этому.',
 'Ftr_effected_2' => 'Все Участники Вилл быть Вынужденным Читать Этому.',
 'Ftr_active_1' => 'Вы Отключили FTR. Никто не будет Вынужден Читать Этому.',
 'Ftr_active_2' => 'Вы Активизировали FTR!',
	)
);

?>