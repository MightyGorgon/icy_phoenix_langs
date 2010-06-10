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
	'bbcb_mg_lang' => 'lang_english',

	'wrote' => 'Написал',
	'Quote' => 'Цитата',
	'Code' => 'Код',
	'Hide' => 'Скрыть',
	'Show' => 'Показать',
	'Download' => 'Загрузка',
	'Syntax' => 'Синтаксис',
	'Select' => 'Выбор',
	'ReviewPost' => 'Просмотр Сообщений',
	'OffTopic' => 'ОФФТопик',
	'OpenNewWindow' => 'Нажмите чтобы открыть изображение в новом окне',
	'C++' => 'C++',
	'PhpCode' => 'Php',

	'Close_Tags' => 'Закрыть Тэги',
 'Styles_tip' => 'Совет: Стили могут быть применены быстро к выбранному тексту.',

// Smiley Creator
	'bbcode_sc_help' => 'Создатель смайлика: [schild=1] Текст [/schild] Создает смайлик  с Вашим текстом',
 'Smiley_creator' => 'Создатель смайликов',
 'SC_shieldtext' => 'Текст смайлика',
 'SC_fontcolor' => 'Текстовый Цвет',
 'SC_shadowcolor' => 'Теневой Цвет',
 'SC_shieldshadow' => 'Ограждают Тень',
 'SC_shieldshadow_on' => 'Активизируют',
 'SC_shieldshadow_off' => 'Дезактивируют',
 'SC_smiliechooser' => 'Выбор смайлика',
 'SC_random_smilie' => 'Случайный смайлик ',
 'SC_default_smilie' => 'Стандартный смайлик',
 'SC_create_smilie' => 'Создать',
 'SC_stop_creating' => 'Отмена',
 'SC_error' => 'Вот является Ваш Экран - Вы забыли Текст...',
 'SC_another_shield' => 'Вы хотите создать другой смайлик?',
 'SC_notext_error' => 'Вы не можете создать смайлик без Текста',

	'bbcode_b_help' => 'Жирный текст: [b]text[/b] (alt+b)',
	'bbcode_i_help' => 'Курсив: [i]text[/i] (alt+i)',
	'bbcode_u_help' => 'Подчеркнутый: [u]text[/u] (alt+u)',
	'bbcode_q_help' => 'Цитата: [quote]text[/quote] (alt+q)',
	'bbcode_c_help' => 'Код дисплея: [code]code[/code] (alt+c)',
	'bbcode_l_help' => 'Список: [list]text[/list] (alt+l)',
	'bbcode_o_help' => 'Нумерованный список: [list=]text[/list] (alt+o)',
	'bbcode_p_help' => 'Вставить изображение: [img]http://image_url[/img] (alt+p)',
	'bbcode_w_help' => 'Вставить URL: [url]http://url[/url] or [url=http://url]URL text[/url] (alt+w)',
	'bbcode_a_help' => 'Закрыть все BBCode теги',
	'bbcode_s_help' => 'Цвет шрифта: [color=red]text[/color] Tip: you can also use color=#FF0000',
	'bbcode_f_help' => 'Размер шрифта: [size=x-small]small text[/size]',

	'Font_color' => 'Цвет шрифта',
 'color_default' => 'Значение по умолчанию',
 'color_dark_red' => 'Темно-красный',
 'color_red' => 'Красный',
 'color_orange' => 'Апельсин',
 'color_brown' => 'Браун',
 'color_yellow' => 'Желтый',
 'color_green' => 'Зеленый',
 'color_olive' => 'Маслина',
 'color_cyan' => 'Голубой',
 'color_blue' => 'Синий',
 'color_dark_blue' => 'Темно-синий',
 'color_indigo' => 'Индиго',
 'color_violet' => 'Фиалка',
 'color_white' => 'Белый',
 'color_black' => 'Черный',

	'color_cadet_blue' => 'Кадет, Синий',
 'color_coral' => 'Алголоподобный язык программирования',
 'color_crimson' => 'Темно-красный',
 'color_dark_grey' => 'Темный Серый',
 'color_dark_orchid' => 'Темная Орхидея',
 'color_gold' => 'Золото',
 'color_gray' => 'Полутон',
 'color_light_blue' => 'Светло-голубой',
 'color_light_cyan' => 'Освещают Голубой',
 'color_light_green' => 'Светло-зеленый',
 'color_light_grey' => 'Освещают Серый',
 'color_light_orange' => 'Светло-оранжевый',
 'color_peach' => 'Персик',
 'color_power_orange' => 'Апельсин',
 'color_sea_green' => 'Море, Зеленое',
 'color_silver' => 'Серебро',
 'color_tomato' => 'Помидор',
 'color_turquoise' => 'Бирюзовый',
 'color_chocolate' => 'Шоколад',
 'color_deepskyblue' => 'Глубокое Синее Небо',
 'color_midnightblue' => 'Полночь, Синяя',
 'color_darkgreen' => 'Зеленый',

	'Font_size' => 'Размер Шрифта',
 'font_tiny' => 'Крошечный',
 'font_small' => 'Маленький',
 'font_medium' => 'Передающая среда',
 'font_normal' => 'Нормальный',
 'font_large' => 'Большой',
 'font_huge' => 'Огромный',
 'font_xl' => 'XL',

// Font Type
	'Font_Type' => 'Шрифт',
 'Font_Arial' => 'Arial',
 'Font_Arial_black' => 'Arial, Черный',
 'Font_Comic_sans_ms' => 'MS Комика Сэнса',
 'Font_Courier_new' => 'Курьер, Новый',
 'Font_Impact' => 'Воздействие',
 'Font_Lucida_console' => 'Пульт Lucida',
 'Font_Lucida_sans_unicode' => 'Лукида Сэнс Уникоуд',
 'Font_Microsoft_sans_serif' => 'Гротесковый шрифт Microsoft',
 'Font_Symbol' => 'Символ',
 'Font_Tahoma' => 'Tahoma',
 'Font_Times_new_roman' => 'Времена Новых римлянин',
 'Font_Traditional_arabic' => 'Традиционный арабский язык',
 'Font_Trebuchet_ms' => 'MS Trebuchet',
 'Font_Verdana' => 'Verdana',
 'Font_Webdings' => 'Webdings',
 'Font_Wingdings' => 'Wingdings',

// Alt Buttons
	'bbcb_mg_colorpicker' => 'Цветное Устройство выбора',
 'bbcb_mg_j' => 'Выравнивают',
 'bbcb_mg_r' => 'Право',
 'bbcb_mg_c' => 'Центр',
 'bbcb_mg_l' => 'Левый',
 'bbcb_mg_b' => 'Полужирный',
 'bbcb_mg_i' => 'Курсив',
 'bbcb_mg_u' => 'Подчеркивание',
 'bbcb_mg_s' => 'Удар',
 'bbcb_mg_f' => 'Постепенное изменение',
 'bbcb_mg_g' => 'Градиент',
 'bbcb_mg_tab' => 'Таблица',
 'bbcb_mg_td' => 'Ячейка',
 'bbcb_mg_md' => 'Шатер вниз',
 'bbcb_mg_mu' => 'Шатер',
 'bbcb_mg_ml' => 'Шатер, оставленный',
 'bbcb_mg_mr' => 'право Шатра',
 'bbcb_mg_code' => 'Код',
 'bbcb_mg_phpbbmod' => 'phpBB Ультрасовременный Шаблон',
 'bbcb_mg_quote' => 'Цитата',
 'bbcb_mg_spoil' => 'Сполер',
 'bbcb_mg_highlight' => 'Выделение',
 'bbcb_mg_url' => 'Url',
 'bbcb_mg_eml' => 'Электронная почта',
 'bbcb_mg_img' => 'Изображение',
 'bbcb_mg_imgl' => 'Изображение, Оставленное',
 'bbcb_mg_imgr' => 'Право Изображения',
 'bbcb_mg_albumimg' => 'Изображение Альбома',
 'bbcb_mg_flsh' => 'Перепрограммируемый',
 'bbcb_mg_vid' => 'Видео',
 'bbcb_mg_gvid' => 'Видео Google',
 'bbcb_mg_youtube' => 'YouTube',
 'bbcb_mg_ram' => 'ОЗУ',
 'bbcb_mg_strm' => 'Поток',
 'bbcb_mg_emff' => 'EMFF (MP3)',
 'bbcb_mg_lst' => 'Список',
 'bbcb_mg_hr' => 'Горизонтальная строка',
 'bbcb_mg_bullet' => 'Пункт маркированного списка',
 'bbcb_mg_sup' => 'Sup',
 'bbcb_mg_sub' => 'Sub',
 'bbcb_mg_lsto' => 'Заказанный Список',
 'bbcb_mg_fade' => 'Прозрачность',
 'bbcb_mg_spoiler' => 'Помеха',
 'bbcb_mg_cell' => 'Ячейка',
 'bbcb_mg_grad' => 'Градиент',
 'bbcb_mg_upload_img' => 'изображение Загрузки к PostImage.org и добавляют это к сообщению',
 'bbcb_mg_posticyimage' => 'изображение Загрузки и добавляют это к сообщению',
 'bbcb_mg_albumimgl' => 'Оставленное Изображение Альбома',
 'bbcb_mg_albumimgr' => 'Право Изображения Альбома',
 'bbcode_help' => 'Помощь BBCode',

 'xs_bbc_hide_message' => 'Скрытое Сообщение',
 'xs_bbc_hide_quote_message' => 'Цитированное Скрытое Сообщение, которое все еще скрыто.',
 'xs_bbc_hide_message_explain' => 'Жаль, но Вы должны быть регистрированы и также перенести ответ, чтобы рассмотреть это сообщение.',

 'bbcode_url' => 'Введите URL (например http://www.icyphoenix.ru)',
 'bbcode_url_title' => 'Ввtlbnt заголовок ссылки',
 'bbcode_url_empty' => 'Вы didn \'t ввели url',
 'bbcode_url_errors' => 'Ошибка!',
	)
);

// JavaScript Text - BEGIN
// Forms
$js_lang = array();

$js_lang ['s_formerrors'] = 'Вы должны вставить какой-нибудь текст, чтобы отправить сообщение';
$js_lang ['s_gen_error'] = ':: Ошибка::\n\n';
$js_lang ['s_url_insert'] = 'Вставить URL (например http://www.icyphoenix.ru/)';
$js_lang ['s_url_insert_tip'] = 'http://';
$js_lang ['s_url_error'] = 'Вы didn \'t ввели любой URL';
$js_lang ['s_url_title_insert'] = 'Вводит заголовок ссылки';
$js_lang ['s_url_title_insert_tip'] = 'Ссылка';
$js_lang ['s_url_title_error'] = 'Вы didn \'t написали имя страницы';
$js_lang ['s_email_insert'] = 'Вводит Почтовый Адрес';
$js_lang ['s_email_insert_tip'] = 'yourname@yourdomain.com';
$js_lang ['s_email_error'] = 'Вы didn \'t пишет Почтовый Адрес';
$js_lang ['s_img_insert'] = 'Вводит URL изображения';
$js_lang ['s_img_error'] = 'Вы didn \'t пишет URL изображения';
$js_lang ['s_albumimg_insert'] = 'Вводит идентификатор Изображения Альбома';
$js_lang ['s_albumimg_insert_tip'] = 'идентификатор';
$js_lang ['s_albumimg_error'] = 'Вы didn \'t пишет идентификатор Изображения Альбома';
$js_lang ['s_ram_insert'] = 'Пожалуйста напишите Реальный URL файла Носителей';
$js_lang ['s_stream_insert'] = 'Пожалуйста напишите звуковой URL файла';
$js_lang ['s_video_insert'] = 'Пожалуйста напишите видео URL файла';
$js_lang ['s_video_w_insert'] = 'Пожалуйста определите видео ширину файла';
$js_lang ['s_video_w_error'] = 'Вы didn \'t определяет видео ширину файла';
$js_lang ['s_video_h_insert'] = 'Пожалуйста определите видео высоту файла';
$js_lang ['s_video_h_error'] = 'Вы didn \'t определяет видео высоту файла';
$js_lang ['s_googlevideo_insert'] = 'Пожалуйста напишите идентификатор файла Видео Google';
$js_lang ['s_youtube_insert'] = 'Пожалуйста напишите идентификатор файла YouTube';
$js_lang ['s_emff_insert'] = 'Пожалуйста напишите mp3 URL файла';
$js_lang ['s_flash_insert'] = 'Пожалуйста напишите Перепрограммируемый URL файла';
$js_lang ['s_flash_w_insert'] = 'Пожалуйста определите flash ширину файла';
$js_lang ['s_flash_w_error'] = 'Вы didn \'t определяет flash ширину файла';
$js_lang ['s_flash_h_insert'] = 'Пожалуйста определите flash высоту файла';
$js_lang ['s_flash_h_error'] = 'Вы didn \'t определяет flash высоту файла';
$js_lang ['s_id_insert_tip'] = 'идентификатор';
$js_lang ['s_id_insert_error'] = 'Вы didn \'t определяет идентификатор';
$js_lang ['s_file_insert_error'] = 'Вы didn \'t определяет URL файла';
$js_lang ['s_grad_select'] = 'Пожалуйста выберите текст сначала';
$js_lang ['s_grad_error'] = 'Это только работает для меньше чем 120 символов';
$js_lang ['s_grad_path'] = 'includes/grad.htm';
$js_lang ['s_view_more_code'] = 'Рассматривает больше кода';
$js_lang ['s_image_upload'] = 'изображение Загрузки к PostImage.org и добавляет это к сообщению';
$js_lang ['s_posticyimage'] = 'изображение Загрузки и добавляет это к сообщению';

// Helpline messages
$js_lang ['s_a_help'] = 'Закрыть все открытые тэги';
$js_lang ['s_b_help'] = 'текст Bold: [b] текст [/b]';
$js_lang ['s_i_help'] = 'текст Italic: [i] текст [/i]';
$js_lang ['s_u_help'] = 'текст Underline: [u] текст [/u]';
$js_lang ['s_strike_help'] = 'текст Strike: [Strike] текст [/Strike]';
$js_lang ['s_quote_help'] = 'текст цитата: [Quote] текст [/Quote]';
$js_lang ['s_code_help'] = 'дисплей Кода: [code] код [/code]';
$js_lang ['s_phpbbmod_help'] = 'phpBB моделирование Шаблонов';
$js_lang ['s_highlight_help'] = 'Выделение: [highlight = # FFFFAA] текст [/highlight]';
$js_lang ['s_img_help'] = 'изображение Вставки: [img] http://image_url [/img]';
$js_lang ['s_imgl_help'] = 'изображение Вставки с выравниванием по левому краю: [img align=left] http://image_url [/img]';
$js_lang ['s_imgr_help'] = 'изображение Вставки с выравниванием по правому краю: [img align=right] http://image_url [/img]';
$js_lang ['s_albumimg_help'] = 'изображение Вставки от альбома: [albumimg] идентификатор Рис. Альбома [/albumimg]';
$js_lang ['s_albumimgl_help'] = 'изображение Вставки от альбома с выравниванием по левому краю: [albumimg align=left] идентификатор Рис. Альбома [/albumimg]';
$js_lang ['s_albumimgr_help'] = 'изображение Вставки от альбома с выравниванием по правому краю: [albumimg align=right] идентификатор Рис. Альбома [/albumimg]';
$js_lang ['s_url_help'] = 'URL Вставки: [URL] http://url [/URL] или [url=http://url] текст URL [/URL]';
$js_lang ['s_fc_help'] = 'цвет Шрифта: [color=red] текст [/color] (Совет: Вы можете также использовать цвет = # FF0000)';
$js_lang ['s_fs_help'] = 'размер Шрифта: [size=9] маленький текст [/size]';
$js_lang ['s_ft_help'] = 'тип Шрифта: [font=Andalus] текст [/font]';
$js_lang ['s_table_help'] = 'Таблица Вставки: [table] текст [/table]';
$js_lang ['s_td_help'] = 'Столбец таблицы Вставки: [td] текст [/td]';
$js_lang ['s_mail_help'] = 'Электронная почта Вставки: [email] Электронная почта Здесь [/email]';
$js_lang ['s_grad_help'] = 'текст градиента Вставки';
$js_lang ['s_right_help'] = 'текст Set выравнивается к праву: [align=right] текст [/align]';
$js_lang ['s_left_help'] = 'текст Set выравнивается к левому: [align=left] текст [/align]';
$js_lang ['s_center_help'] = 'текст Set выравнивается, чтобы центрироваться: [align=center] текст [/align]';
$js_lang ['s_justify_help'] = 'текст Justify: [align=justify] текст [/align]';
$js_lang ['s_marqr_help'] = 'текст Marque к Праву: [marquee direction=right] текст [/marquee]';
$js_lang ['s_marql_help'] = 'текст Marque к Левому: [marquee direction=left] текст [/marquee]';
$js_lang ['s_marqu_help'] = 'текст Marque к: [marquee direction=up] текст [/marquee]';
$js_lang ['s_marqd_help'] = 'текст Marque к вниз: [marquee direction=down] текст [/marquee]';
$js_lang ['s_sup_help'] = 'Верхний индекс: [sup] текст [/sup]';
$js_lang ['s_sub_help'] = 'Нижний индекс: [sub] текст [/sub]';
$js_lang ['s_hr_help'] = 'H-строка Вставки [час]';
$js_lang ['s_bullet_help'] = 'пункт маркированного списка Вставки [*]';
$js_lang ['s_video_help'] = 'Вставляет видео файл: [video ширина = # высота = #] URL файла [/video]';
$js_lang ['s_googlevideo_help'] = 'Вставляет файл Видео Google: [googlevideo] идентификатор Видео Google [/googlevideo]';
$js_lang ['s_youtube_help'] = 'Вставляет видео файл YouTube: [youtube] YouTube идентификатор [/youtube]';
$js_lang ['s_quick_help'] = 'видео Quicktime: [quick] http://quicktime_video_url/ [/quick]';
$js_lang ['s_flash_help'] = 'Вставляет flash файл: [flash = # высота = #] перепрограммируемый URL [/flash]';
$js_lang ['s_ram_help'] = 'Вставляет Реальный файл Носителей: [ram] URL Файла [/ram]';
$js_lang ['s_stream_help'] = 'Вставляет потоковый файл: [stream] URL Файла [/stream]';
$js_lang ['s_emff_help'] = 'Вставляет mp3 файл: [emff] URL Файла [/emff]';
$js_lang ['s_fade_help'] = 'Постепенное изменение: [opacity] текст [/opacity] или [opacity] [img] http://image_url/ [/img] [/opacity]';
$js_lang ['s_spoiler_help'] = 'Помеха: [spoiler] текст [/spoiler]';
$js_lang ['s_cell_help'] = 'Ячейка: [cell] текст [/cell]';
$js_lang ['s_list_help'] = 'Список: [list] текст [/list] (Совет: Вы можете использовать [*], чтобы вставить маркер)';
$js_lang ['s_listo_help'] = 'список Ordered: [list=1|a] текст [/list] (Совет: Вы можете использовать [*], чтобы вставить маркер)';
$js_lang ['s_help_help'] = 'Открывает Помощь BBCode';
$js_lang ['s_image_upload_help'] = 'изображение Загрузки к PostImage.org и добавляет это к сообщению';
$js_lang ['s_posticyimage_help'] = 'изображение Загрузки и добавляет это к сообщению';
$js_lang ['s_smiley_creator'] = 'Создатель смайликов: [smiley=1] Текст [/smiley] вставляют улыбочку с текстом';

// Please do not remove this!!!
foreach ($js_lang as $k => $v)
{
	$lang[$k] = $v;
}

$javascript_lang_vars = '';
foreach ($js_lang as $k => $v)
{
	$javascript_lang_vars .= 'var ' . $k . ' = \'' . str_replace("'", "\'", $v) . '\';' . "\n";
}

$lang['JAVASCRIPT_LANG_VARS'] = $javascript_lang_vars;
unset($js_lang);
// JavaScript Text - END

?>