<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, array(
// Main Stuff.
	'Regular_Post' => 'Mensaje normal (no se mostrar&aacute; como noticia)',
	'Current_Selection' => 'Selecci&oacute;n actual',
	'Select_News_Category' => 'Seleccionar categor&iacute;a de noticia',
	'News' => 'Noticias',
	'News_Cmx' => '<b>Noticia:</b>&nbsp;',
	'Auth_News' => 'Noticias',
	'View_Comments' => 'Ver comentario(s)',
	'Read_More' => 'Leer m&aacute;s',
	'News_Categories' => 'Categor&iacute;as de noticias',

// Admin Stuff

// News Config
	'Add_news_categories' => 'A&ntilde;adir categor&iacute;a a las noticias',
	'News_Configuration' => 'Configuraci&oacute;n de las noticias',
	'News_Add_Description' => 'Desde este panel puede a&ntilde;adir nuevas categor&iacute;as',
	'Icon' => 'Icono de la noticia',
	'Add_new_category' => 'A&ntilde;adir nueva categor&iacute;a de noticias',

	'Click_return_newsadmin' => 'Pulse %saqu&iacute;%s para volver a administrar noticias.',
	'Category_Deleted' => 'Categor&iacute;a de noticias eliminada.',
	'Category_Updated' => 'Categor&iacute;a de noticias actualizada.',
	'Category_Added' => 'Categor&iacute;a de noticias a&ntilde;adida.',

	'News_Editing_Utility' => 'Edici&oacute;n de categor&iacute;as de noticias',
	'News_Config' => 'Configuraci&oacute;n de categor&iacute;as de noticias',
	'News_Explain' => 'Desde esta p&aacute;gina puede a&ntilde;adir, quitar y editar categor&iacute;as de noticias.',

	'Enable_News' => 'Permitir publicar noticias',
	'News_Path' => 'Ruta de iconos de noticias',
	'News_Path_Explain' => 'Ruta de su Icy Phoenix, ej: images/news',

	'News_explain' => 'Desde esta p&aacute;gina puede configurar el Mod Slashdot News por CMX.',
	'News_settings' => 'Opciones de noticias',

	'News_trim' => 'Resumen de noticias',
	'News_trim_explain' => 'Especifique el n&uacute;mero m&aacute;ximo de caracteres hasta que se divida la noticia (0 = sin resumen).',

	'News_topic_trim' => 'Resumen del t&iacute;tulo de los mensajes',
	'News_topic_trim_explain' => 'Especifique el n&uacute;mero m&aacute;ximo de caracteres hasta que se divida el mensaje (0 = sin cortes).',

	'News_item_num' => 'N&uacute;mero de noticias a mostrar',
	'News_item_num_explain' => 'El n&uacute;mero de noticias mostradas por defecto.',

	'RSS_Configuration' => 'Configuraci&oacute;n de noticias RSS',
	'Enable_RSS' => 'Habilitar RSS ',
	'Enable_RSS_explain' => 'RSS le permite dejar a otras webs publicar noticias suyas en la de usted o informar en tiempo real a otros usuarios desde otras aplicaciones diferentes a su navegador web actual.',

	'Feed_Description' => 'Descripci&oacute;n del RSS',
	'Feed_Description_Explain' => 'Breve descripci&oacute;n de las noticias en RSS.',

	'Feed_Language' => 'Idioma del RSS',
	'Feed_Language_Explain' => 'El idioma especifica el canal en el que est&aacute; escrito. Puede utilizar valores definidos en el W3C.',

	'Feed_TTL' => 'RSS TEA (Tiempo entre actualizaci&oacute;n)',
	'Feed_TTL_Explain' => 'TEA es el n&uacute;mero de minutos de margen establecido en el RSS entre cada actualizaci&oacute;n.',

	'Feed_Category' => 'Categor&iacute;a RSS',

	'Feed_Image' => 'Imagen RSS',
	'Feed_Image_Explain' => 'Una imagen asociada con las noticias RSS. (S&oacute;lo puede ser una foto peque&ntilde;a, como un bot&oacute;n).',

	'Feed_Image_Desc' => 'Descripci&oacute;n de la imagen RSS',

// New
	'Articles' => 'Art&iacute;culos',
	'Archives' => 'Archivos',
	'Categories' => 'Categor&iacute;as',

	'News_base_url' => 'URL de la base de noticias',
	'News_base_url_explain' => 'La localizaci&oacute;n del archivo &iacute;ndice de sus noticias.<br />Por ejemplo, http://midominio.com.',
	'Show_RSS_abstract' => 'Ense&ntilde;ar abstractos en RSS.',

	'News_index_file' => 'Archivo &iacute;ndice de noticias',
	'News_index_file_explain' => 'Indica el nombre del archivo &iacute;ndice de noticias. Por ejemplo, news_index.php',
	)
);

?>