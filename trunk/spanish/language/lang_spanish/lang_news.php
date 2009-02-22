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
	'Regular_Post' => 'Mensaje normal (no se mostrar� como noticia)',
	'Current_Selection' => 'Selecci�n actual',
	'Select_News_Category' => 'Seleccionar categor�a de noticia',
	'News' => 'Noticias',
	'News_Cmx' => '<b>Noticia:</b>&nbsp;',
	'Auth_News' => 'Noticias',
	'View_Comments' => 'Ver comentario(s)',
	'Read_More' => 'Leer m�s',
	'News_Categories' => 'Categor�as de noticias',

// Admin Stuff

// News Config
	'Add_news_categories' => 'A�adir categor�a a las noticias',
	'News_Configuration' => 'Configuraci�n de las noticias',
	'News_Add_Description' => 'Desde este panel puede a�adir nuevas categor�as',
	'Icon' => 'Icono de la noticia',
	'Add_new_category' => 'A�adir nueva categor�a de noticias',

	'Click_return_newsadmin' => 'Pulse %saqu�%s para volver a administrar noticias.',
	'Category_Deleted' => 'Categor�a de noticias eliminada.',
	'Category_Updated' => 'Categor�a de noticias actualizada.',
	'Category_Added' => 'Categor�a de noticias a�adida.',

	'News_Editing_Utility' => 'Edici�n de categor�as de noticias',
	'News_Config' => 'Configuraci�n de categor�as de noticias',
	'News_Explain' => 'Desde esta p�gina puede a�adir, quitar y editar categor�as de noticias.',

	'Enable_News' => 'Permitir publicar noticias',
	'News_Path' => 'Ruta de iconos de noticias',
	'News_Path_Explain' => 'Ruta de su Icy Phoenix, ej: images/news',

	'News_explain' => 'Desde esta p�gina puede configurar el Mod Slashdot News por CMX.',
	'News_settings' => 'Opciones de noticias',

	'News_trim' => 'Resumen de noticias',
	'News_trim_explain' => 'Especifique el n�mero m�ximo de caracteres hasta que se divida la noticia (0 = sin resumen).',

	'News_topic_trim' => 'Resumen del t�tulo de los mensajes',
	'News_topic_trim_explain' => 'Especifique el n�mero m�ximo de caracteres hasta que se divida el mensaje (0 = sin cortes).',

	'News_item_num' => 'N�mero de noticias a mostrar',
	'News_item_num_explain' => 'El n�mero de noticias mostradas por defecto.',

	'RSS_Configuration' => 'Configuraci�n de noticias RSS',
	'Enable_RSS' => 'Habilitar RSS ',
	'Enable_RSS_explain' => 'RSS le permite dejar a otras webs publicar noticias suyas en la de usted o informar en tiempo real a otros usuarios desde otras aplicaciones diferentes a su navegador web actual.',

	'Feed_Description' => 'Descripci�n del RSS',
	'Feed_Description_Explain' => 'Breve descripci�n de las noticias en RSS.',

	'Feed_Language' => 'Idioma del RSS',
	'Feed_Language_Explain' => 'El idioma especifica el canal en el que est� escrito. Puede utilizar valores definidos en el W3C.',

	'Feed_TTL' => 'RSS TEA (Tiempo entre actualizaci�n)',
	'Feed_TTL_Explain' => 'TEA es el n�mero de minutos de margen establecido en el RSS entre cada actualizaci�n.',

	'Feed_Category' => 'Categor�a RSS',

	'Feed_Image' => 'Imagen RSS',
	'Feed_Image_Explain' => 'Una imagen asociada con las noticias RSS. (S�lo puede ser una foto peque�a, como un bot�n).',

	'Feed_Image_Desc' => 'Descripci�n de la imagen RSS',

// New
	'Articles' => 'Art�culos',
	'Archives' => 'Archivos',
	'Categories' => 'Categor�as',

	'News_base_url' => 'URL de la base de noticias',
	'News_base_url_explain' => 'La localizaci�n del archivo �ndice de sus noticias.<br />Por ejemplo, http://midominio.com.',
	'Show_RSS_abstract' => 'Ense�ar abstractos en RSS.',

	'News_index_file' => 'Archivo �ndice de noticias',
	'News_index_file_explain' => 'Indica el nombre del archivo �ndice de noticias. Por ejemplo, news_index.php',
	)
);

?>