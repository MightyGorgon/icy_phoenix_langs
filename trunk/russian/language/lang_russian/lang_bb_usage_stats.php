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
* Chris Lennert - (calennert@users.sourceforge.net) - (http://lennertmods.sourceforge.net)
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
	'BBUS_Mod_Title' => 'Статистика Использования панели',
 'BBUS_Misc' => 'Разное',

	'BBUS_ColHeader_PostRate' => 'Присвоить рейтинг сообщению',
 'BBUS_ColHeader_PctUTP' => '%UTP',
 'BBUS_ColHeader_PctUTUP' => '%UTUP',
 'BBUS_ColHeader_NewTopics' => 'Новые Темы',
 'BBUS_ColHeader_TopicRate' => 'Норма Темы',
 'BBUS_ColHeader_Topics_Watched' => 'Смотревший',
 'BBUS_ColHeader_Header' => 'Заголовок',
 'BBUS_ColHeader_Description' => 'Описание',

	'BBUS_ColHeader_Posts_Explain' => 'Общее количество сообщений.',
 'BBUS_ColHeader_PostRate_Explain' => 'Среднее количество сообщений в день.',
 'BBUS_ColHeader_PctUTP_Explain' => 'Процент от пользователя \полные сообщения.',
 'BBUS_ColHeader_PctUTUP_Explain' => 'Процент от пользователя \общее количество несокращенные сообщения.',
 'BBUS_ColHeader_NewTopics_Explain' => 'Общее количество новых тем инициированных  пользователем.',
 'BBUS_ColHeader_TopicRate_Explain' => 'Среднее количество новых тем.',
 'BBUS_ColHeader_Topics_Watched_Explain' => 'Общее количество тем просмотр.',

	'BBUS_Col_Descriptions_Caption' => 'Описания Столбца',

 'BBUS_Msg_NoPosts' => 'Пользователь не зарегистрирован ни на одном форумы.',
 'BBUS_Unpruned_Posts' => 'Полные сокращенные посты',
 'BBUS_Scale_By' => 'Масштаб:',

// Admin Configuration page
	'BBUS_Settings_Caption' => 'Параметры настройки Статистики Использования управления',
 'BBUS_Settings_Explain' => 'Эти параметры настройки позволяют Вам конфигурировать, какие участники форума могут рассмотреть статистику использования управления по пользователю \страница Конфигурации и конфигурировать различные опции, связанные с данными, представленными на той странице.',
	
	'BBUS_Setting_ViewLevel_Caption' => 'Открыть Уровень',
 'BBUS_Setting_ViewLevel_Note' => '<i> Примечание </i>: Текстовое поле только для чтения. <br/> Использование переключатели, чтобы изменить это значение.',
	
	'BBUS_Setting_ViewLevel_Explain1' => 'установка уровня представления является составной суммой одного или более флажков, которые все вместе определяют, будет ли данный пользователь видеть статистику использования платы по странице Параметра пользователя. <b> Использование флажки ниже, чтобы допустить или отключить рассмотрение использования stats специфическими классами пользователей. </b> <br/> <br/> флажки доступа Уровня Представления определены следующим образом: <br/>',

 'BBUS_Setting_ViewLevel_Explain2' => '<br/> самая общая установка для многих плат будет 24 (16 + 8), который позволяет администраторам и модераторам контролировать статистику использования платы, в то время как всем другим пользователям подарят только основную страницу Параметра пользователя. <br/> <br/> рекомендуется, чтобы Вы ограничили рассмотрение статистики, особенно для больших плат, чтобы избежать проблем деградации производительности, являющихся результатом stats, сгенерируемого для многих пользователей в то же самое время.',

 'BBUS_Setting_ViewOptions_Caption' => 'Рассматривают Опции',
 'BBUS_Setting_ViewOptions_Note' => '<i> Примечание </i>: Textbox только для чтения. <br/> Использование переключатели, чтобы изменить это значение.',
 'BBUS_Setting_ViewOptions_Explain1' => 'Как Уровень Представления, установка View Options - сумма флажков, которые допускают и отключают различные особенности Статистики Использования Совета. <b> Использование флажки ниже, чтобы допустить или отключить эти особенности. </b> <br/> <br/> флажки Опции Представления определены следующим образом: <br/>',
 'BBUS_Setting_ViewOptions_Explain2' =>'',

	'BBUS_Settings_Default_Post_Rate_Scaling_Caption' => 'Заданный по умолчанию Коэффициент сообщений Масштабирования Нормы',
 'BBUS_Settings_Default_Post_Rate_Scaling_Explain' => 'Устанавливает коэффициент масштабирования значения по умолчанию, относился к значениям в Норме сообщений stats столбец.',

 'BBUS_Settings_Default_Topic_Rate_Scaling_Caption' => 'Заданный по умолчанию Коэффициент Масштабирования Нормы Темы',
 'BBUS_Settings_Default_Topic_Rate_Scaling_Explain' => 'Устанавливает коэффициент масштабирования значения по умолчанию, относился к значениям в Норме Темы stats столбец.',
	'BBUS_ViewLevel_Anonymous_Caption' => 'Анонимный',
 'BBUS_ViewLevel_Self_Caption' => 'Сам',
 'BBUS_ViewLevel_Users_Caption' => 'Пользователи',
 'BBUS_ViewLevel_Moderators_Caption' => 'Модераторы',
 'BBUS_ViewLevel_Admins_Caption' => 'Администрация',
 'BBUS_ViewLevel_SpecialGrp_Caption' => 'Специальная Группа',

	'BBUS_ViewLevel_Anonymous_Explain' => 'Позволяют анонимным пользователям рассматривать статистику.',
 'BBUS_ViewLevel_Self_Explain' => 'Позволяют каждому пользователю рассматривать его/ее собственный статистику.',
 'BBUS_ViewLevel_Users_Explain' => 'Позволяют любым пользователям рассматривать других пользователей \' статистику. ',
 'BBUS_ViewLevel_Moderators_Explain' => 'Позволяют модераторам рассматривать статистику.',
 'BBUS_ViewLevel_Admins_Explain' => 'Позволяют администраторам рассматривать статистику. (Рекомендуется)',
 'BBUS_ViewLevel_SpecialGrp_Explain' => 'Позволяют назначенной специальной группе пользователей рассматривать статистику.',

	'BBUS_ViewOption_Show_All_Forums_Caption' => 'Показывают Все Форумы, независимо от пользователя \количеств сообщений.',
 'BBUS_ViewOption_PCTUTUP_Column_Visible_Caption' => 'Отображать %UTUP Столбец в Таблице Статистики',
 'BBUS_ViewOption_Misc_Section_Visible_Caption' => 'Отображать Разный Раздел Информации',
 'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Caption' => 'Дисплей "Полные Несокращенные Посты" в Разделе Misc',
 'BBUS_ViewOption_Viewer_Scalable_PR_Caption' => 'просмотр Масштаба рейтинга сообщений',
 'BBUS_ViewOption_Viewer_Scalable_TR_Caption' => 'просмотр Масштабируемая рейтинга тем',

	'BBUS_ViewOption_Show_All_Forums_Explain' => '',
	'BBUS_ViewOption_PCTUTUP_Column_Visible_Explain' => '',
	'BBUS_ViewOption_Misc_Section_Visible_Explain' => '',
	'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Explain' => '',
	'BBUS_ViewOption_Viewer_Scalable_PR_Explain' => '',
	'BBUS_ViewOption_Viewer_Scalable_TR_Explain' => '',

	'BBUS_Setting_SpecialGrp_Caption' => 'Специальная Группа Доступа',
 'BBUS_Setting_SpecialGrp_Explain' => 'Назначает специальную группу, которой позволят рассмотреть статистику использования платы. <i> Примечание </i>:эта установка будет только иметь эффект, если \'Special Группе \' поставьте флажок в Уровне Представления выше. ',
	)
);

?>