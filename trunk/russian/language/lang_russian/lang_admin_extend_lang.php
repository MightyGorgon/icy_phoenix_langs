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
* Ptirhiik (admin@rpgnet-fr.com)
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
	'Lang_extend_lang_extend' => 'Расширение для языковых пакетов',
 'Lang_extend __ заказной' => 'Заказной языковой пакет',
 'Lang_extend __ phpBB' => 'языковой пакет icyphoenix',
 'Languages' => 'Язык',
 'Lang_management' => 'Управление',
 'Lang_extend' => 'Управление языковыми разширениями',
 'Lang_extend_explain' => 'Здесь Вы можете добавить или изменить языковые клавиши',
 'Lang_extend_pack' => 'Языковой Пакет',
//	'Lang_extend_pack_explain' => 'Это - название пакета, usualy имя МОДНИКА, обращающегося к',
 'Lang_extend_pack_explain' => 'Lang упаковывают название',

 'Lang_extend_entry' => 'вход клавиши Language',
 'Lang_extend_entries' => 'входы клавиши Language',
 'Lang_extend_level_edit' => 'Редактирование',
 'Lang_extend_level_admin' => 'Администрация',
 'Lang_extend_level_normal' => 'Нормальное',

 'Lang_extend_add_entry' => 'Добавляют новый lang ключевой вход',

 'Lang_extend_key_main' => 'Языковое главное ключевой вход',
 'Lang_extend_key_main_explain' => 'Это - основной ключевой вход, usualy единственное',
 'Lang_extend_key_sub' => 'вход клавиши Secondary',
 'Lang_extend_key_sub_explain' => 'в этой секунде вход клавиши уровня является usualy, не используемым',
 'Lang_extend_level' => 'Уровень lang ключевого входа',
 'Lang_extend_level_explain' => 'уровень Администрации может только использоваться в панели конфигурации администрации. Нормальный уровень может использоваться всюду.',

 'Lang_extend_missing_value' => 'Вы должны обеспечить по крайней мере английское значение',
 'Lang_extend_key_missing' => 'Основная клавиша входа отсутствует',
 'Lang_extend_duplicate_entry' => 'Этот вход уже существует (см. % пакета)',

 'Lang_extend_update_done' => 'вход был успешно обновлен. <br/> <br/> Нажмите %sЗдесь%s, чтобы возвратиться к входу. <br/> <br/> Щелчок %sHere%s, чтобы возвратиться к списку входов',
 'Lang_extend_delete_done' => 'вход был успешно удален. <br/> Примечание, которое только настроило ключевые входы, удалено, не основные ключевые входы, если существуют. <br/> <br/> Щелчок %sHere%s, чтобы возвратиться к списку входов',

 'Lang_extend_search' => 'Поиск в языковых входах клавиши',
 'Lang_extend_search_words' => 'Слова, чтобы найти',
 'Lang_extend_search_words_explain' => 'Отдельные слова с пространством',
 'Lang_extend_search_all' => 'Все слова',
 'Lang_extend_search_one' => 'Один из тех',
 'Lang_extend_search_in' => 'Поиск в',
 'Lang_extend_search_in_explain' => 'Точный, где искать',
 'Lang_extend_search_in_key' => 'Клавиши',
 'Lang_extend_search_in_value' => 'Значения',
 'Lang_extend_search_in_both' => 'Оба',
 'Lang_extend_search_all_lang' => 'Все установленные языки',

 'Lang_extend_search_no_words' => 'Никакие слова, чтобы искать обеспеченный. <br/> <br/> Щелчок %sHere%s, чтобы возвратиться к списку пакета.',
 'Lang_extend_search_results' => 'Результаты поиска',
 'Lang_extend_value' => 'Значение',
 'Lang_extend_level_leg' => 'Уровень',

 'Lang_extend_added_modified' => '*',
 'Lang_extend_modified' => 'Измененный',
 'Lang_extend_added' => 'Добавленный',
	)
);

?>