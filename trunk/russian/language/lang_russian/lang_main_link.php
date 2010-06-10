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
* OOHOO < webdev@phpbb-tw.net >
* Stefan2k1 and ddonker from www.portedmods.com
* CRLin from http://mail.dhjh.tcc.edu.tw/~gzqbyr/
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
	'Site_links' => 'Избранное',
'Link_lock_submit_site' => 'Подтверждение, что сайт блокирован',
'Link_title' => 'Наименование сайта',
'Link_desc' => 'Описание',
'Link_url' => 'URL сайта',
'Link_logo_src' => 'Логотип сайта (88x31 пикселов, не более 10K), или оставьте пустым:',
'Link_logo_src1' => 'Логотип сайта (88x31 пикселов, не более 10K):',
'Links_Preview' => 'Предосмотр логотипа',
'Link_category' => 'Категория сайта',
'link_hits' => 'Лучшие',
'link_submiter' => 'Разместил',
'Link_us' => 'Ссылка на сайт ',
'Link_us_explain' => 'Вы можете разместить у себя кнопку со ссылкой на наш сайт <b>%s</b>.<br>Используйте следующий HTML код:',
'Link_us_syntax' => '<a href="%s" target="_blank"><img src="%s" width="%d" height="%d" border="0" alt="%s" /></a>',
'Link_register' => 'Добавьте ваш сайт',
'Link_register_guest_rule' => 'Присоеденить зарегистрированного пользователя, для представления вашего сайта.',
'Link_register_rule' => 'Пожалуйста заполните форму ниже и ваш сайт будет помещен после проверки в нашу базу данных.',
'Link_pm_notify_subject' => 'Ссылка добавлена',
'Link_pm_notify_message' => '\n Добавте %s ссылку,\'n теперь идите в управление ссылками и там подтвердите.',
'Link_update_success' => 'Ваша информация записана',
'Link_update_fail' => 'Извините, Ваша информация не была записана, попробуйте снова',
'Link_incomplete' => 'Извините, форма не заполнена полностью, попробуйте снова',
'Link_intval_warning' => 'Извините!! Вы не можете обработать несколько сайтов через минуту, пожалуйста пробуйте снова позже',
'Click_return_links' => 'Нажать %sздесь%s чтобы вернутся в индексы ссылок',
'Please_enter_your' => 'Пожалуйста, введите ваш ',
'No_Logo_img' => '<font color=blue>&#8226;</font>', // Вы можете изменить цвет
'No_Display_Links_Logo' => '<font color=brown>&#8226;</font>', // Не показывать логотип.
'Links_home' => 'Избранное',
'Search_site' => 'Поиск',
'Search_site_title' => 'Название/Описание поисковой машины:',
'Descend_by_hits' => 'По убыванию нажатий',
'Descend_by_joindate' => 'По убыванию даты',
	'Logo' => 'Лого',
	'Site' => 'Сайт',
	'Link_ME' => 'Связаться с пользователем ',
	'Remember_Me' => 'Автоматический вход в систему',
	)
);

?>