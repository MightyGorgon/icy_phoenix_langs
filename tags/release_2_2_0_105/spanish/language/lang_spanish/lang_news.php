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
	'Regular_Post' => 'Mensaje normal (no se mostrará como noticia)',
	'Current_Selection' => 'Selección actual',
	'Select_News_Category' => 'Seleccionar categoría de noticia',
	'News' => 'Noticias',
	'News_Cmx' => '<b>Noticia:</b>&nbsp;',
	'Auth_News' => 'Noticias',
	'View_Comments' => 'Ver comentario(s)',
	'Read_More' => 'Leer más',
	'News_Categories' => 'Categorías de noticias',

// Admin Stuff

// News Config
	'Add_news_categories' => 'Añadir categoría a las noticias',
	'News_Configuration' => 'Configuración de las noticias',
	'News_Add_Description' => 'Desde este panel puede añadir nuevas categorías',
	'Icon' => 'Icono de la noticia',
	'Add_new_category' => 'Añadir nueva categoría de noticias',

	'Click_return_newsadmin' => 'Pulse %saqui%s para volver a administración de noticias.',
	'Category_Deleted' => 'Categoría de noticias eliminada correctamente.',
	'Category_Updated' => 'Categoría de noticias actualizada correctamente.',
	'Category_Added' => 'Categoría de noticias añadida correctamente.',

	'News_Editing_Utility' => 'Edición de categorías de noticias',
	'News_Config' => 'Configuración de categorías de noticias',
	'News_Explain' => 'Desde esta página puede añadir, quitar y editar categorías de noticias.',

	'Enable_News' => '<strong>Permitir publicar noticias</strong>',
	'News_Path' => '<strong>Ruta de iconos de noticias</strong>',
	'News_Path_Explain' => 'Ruta de su Icy Phoenix, ej: images/news',

	'News_explain' => 'Desde esta página puede configurar el Mod Slashdot News por CMX.',
	'News_settings' => 'Opciones de noticias',

	'News_trim' => '<strong>Ajuste de la Longitud de las noticias</strong>',
	'News_trim_explain' => 'Especifique el número máximo de caracteres hasta que se divida la noticia (0 = sin resumen).',

	'News_topic_trim' => '<strong>Ajuste de la longitud del tema de las noticias</strong>',
	'News_topic_trim_explain' => 'Especifique el número máximo de caracteres hasta que se divida el mensaje (0 = sin cortes).',

	'News_item_num' => '<strong>Número de noticias a mostrar</strong>',
	'News_item_num_explain' => 'El número de noticias mostradas por defecto en news_viewnews.php.',

	'RSS_Configuration' => 'Configuración de noticias RSS',
	'Enable_RSS' => '<strong>Habilitar RSS</strong>',
	'Enable_RSS_explain' => 'RSS le permite dejar a otras webs publicar noticias suyas en la de usted o informar en tiempo real a otros usuarios desde otras aplicaciones diferentes a su navegador web actual.',

	'Feed_Description' => '<strong>Descripción del RSS</strong>',
	'Feed_Description_Explain' => 'Breve descripción de las noticias en RSS..',

	'Feed_Language' => '<strong>Idioma del RSS</strong>',
	'Feed_Language_Explain' => 'El idioma especifica el canal en el que está escrito. Puede utilizar valores definidos en el W3C.',

	'Feed_TTL' => '<strong>RSS TEA (Tiempo entre actualización)</strong>',
	'Feed_TTL_Explain' => 'TEA es el número de minutos de margen establecido en el RSS entre cada actualización.',

	'Feed_Category' => '<strong>Categoría RSS</strong>',

	'Feed_Image' => '<strong>Imagen RSS</strong>',
	'Feed_Image_Explain' => 'Una imagen asociada con las noticias RSS. (Sólo puede ser una foto pequeña, como un botón).',

	'Feed_Image_Desc' => '<strong>Descripción de la imagen RSS</strong>',

// New
	'Articles' => 'Artículos',
	'Archives' => 'Archivos',
	'Categories' => 'Categorías',

	'News_base_url' => '<strong>URL de la base de noticias</strong>',
	'News_base_url_explain' => 'La localización del archivo índice de sus noticias.<br />Por ejemplo, http://midominio.com.',
	'Show_RSS_abstract' => '<strong>Enseñar abstractos en RSS.</strong>',

	'News_index_file' => '<strong>Archivo índice de noticias</strong>',
	'News_index_file_explain' => 'Indica el nombre del archivo índice de noticias. Por ejemplo, news_index.php',
	)
);

?>