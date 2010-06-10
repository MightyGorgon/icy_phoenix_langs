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
	'Db_browse' => 'Обзор',
'Db_truncate' => 'Обрезать',
'Db_optimize' => 'Оптимизировать',
'Db_drop' => 'Drop',
'Db_repair' => 'Ремонт',
'Db_structure' => 'Структура',
'Db_explain' => 'объяснить действия',

	'db_table_name' => 'Название таблицы',
 'db_action' => 'Действие',
 'db_type' => 'Тип',
 'db_row_format' => 'Формат Строки',
 'db_rows' => 'Строки',
 'db_avg_r_len' => 'В среднем Длина Строки',
 'db_data_len' => 'Длина Данных',
 'db_max_dat_len' => 'Максимальная Длина Данных',
 'db_index_len' => 'Индексная Длина',
 'db_overhead' => 'Наверху',
 'db_auto_inc' => 'Авто Приращение',
 'db_with_sel' => 'С Выбранными Таблицами:',
 'db_field' => 'Поле',
 'db_type' => 'Тип',
 'db_null' => 'Пустой указатель',
 'db_key' => 'Клавиша',
 'db_default' => 'Значение по умолчанию',
 'db_extra' => 'Дополнительное пространство',

	'db_unauthed' => 'Несанкционированный доступ.',
 'db_tru_warning' => 'действительно ли Вы уверены, что Вы хотите усечь %s?',
 'db_dro_warning' => 'действительно ли Вы уверены, что Вы хотите понизить %s?',
 'db_warning_y' => 'Да',
 'db_warning_n' => 'Нет',
 'db_opt_success' => 'Оптимизировать Таблицу <b> %s </b>, Успешно Законченный.',
 'db_tru_success' => 'Усекают Таблицу <b> %s </b>, Успешно Законченный.',
 'db_dro_success' => 'Таблица Снижения <b> %s </b>, Успешно Законченный.',
 'db_rep_success' => 'Таблица Ремонта <b> %s </b>, Успешно Законченный.',
 'db_explained' => 'Оптимизируют Таблицу: опустошит любые оставшиеся незаконченным биты данных. <br/> Усекают Таблицу: освободит таблицу всех ее информационных наполнений. <br/> Обзор: позволит Вам рассматривать данные в таблице. <br/> Снижение: удалит таблицу из Вашей базы данных.',
 'db_back' => 'Нажмите %sЗдесь%s, чтобы возвратиться к основной странице.',
 'db_change_exp' => 'При использовании этого, Вы будете в состоянии выполнить SQL \такой как, ВСТАВИТЬ В, ИЗМЕНИТЬ ТАБЛИЦУ, ОБНОВИТЬ, УДАЛИТЬ ИЗ, ТАБЛИЦА СНИЖЕНИЯ, ОПИСАТЬ, и т.д.. Добавьте столько, сколько Вы хотите, seperate каждая команда SQL с точкой с запятой.',
 'db_submit_q' => 'Представляют Запрос',
 'db_sql_total' => 'Запрос SQL # %s',
 'db_aff_total' => 'Успешно Законченный. Затронутые Строки: %s',
 'db_no_query' => 'Вы не вводили запрос!',
 'db_sql_field_changed' => 'Измененное Имя поля.',
 'db_sql_query_db' => 'Сделали запрос Вашей Базы данных:',
 'DB_Admin' => 'IP MyAdmin',
	)
);

?>