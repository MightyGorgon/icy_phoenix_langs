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

//
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\"
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//


$faq[] = array("--","Introducci�n");
$faq[] = array("�Qu� es el c�digo BBCode?", "BBCode es una implementaci�n especial del HTML. La forma en la que puede usarse BBCode la determina el administrador. Es muy similar al HTML, las etiquetas van entre corchetes [ y ].");


$faq[] = array("--","Formateo de texto");
$faq[] = array("�C�mo crear texto en negrilla, cursiva o subrayado?", "BBCode incluye etiquetas para esto: [b][/b] para negrilla, [u][/u] para subrayar y [i][/i] para cursiva. Las etiquetas se pueden combinar entre si, �es genial! :)");
$faq[] = array("�C�mo cambiar el color o el tama�o del texto?", "Para cambiar el color: [color=][/color]. Puede escribir el nombre del color en ingl�s o el c�digo hexadecimal perteneciente a ese color: p.ej., #FFFFFF, #000000. para crear rojo [color=red]�Hola![/color]. Cambiar el tama�o es similar: [size=][/size], utilizando n�meros del 1 al 29 (�muy grande!)");
$faq[] = array("�Puedo combinar las etiquetas de formato?", "S� :)");


$faq[] = array("--","Haciendo citas de texto o c�digo");
$faq[] = array("Citar texto en las respuestas", "Hay dos formas de hacerlo: con una referencia o sin ella. Para hacerlo con referencia utilice la opcion CITAR del foro al ir a publicar una respuesta; el mensaje que se cite se anexar� al suyo autom�ticamente como: [quote=\"\"][/quote] El otro m�todo (sin referencia) es poner una etiqueta parecida, pero agregando el autor del texto citado, es decir: [quote=\"Anita\"]</b>. Lo que diga Anita debe ir aqu�; recuerde incluir \"\" alrededor del nombre a citar; si no quiere incluir el nombre, s�lo encierre el texto entre las etiquetas [quote][/quote]");
$faq[] = array("Escribiendo c�digo o texto de otro tama�o", "Cuando escriba c�digo ser� puesto en una fuente tipo typewriter, como Courier. Simplemente encierre el texto entre las etiquetas [code][/code] de esta forma: [code]echo \"Esto se supone que es c�digo\";[/code].");


$faq[] = array("--","Creando listas");
$faq[] = array("Creando una lista desordenada", "BBCode soporta dos tipos de listas, desordenadas y ordenadas. Es exactamente como en HTML, solo que con otras etiquetas. Para una lista desordenada use [list][/list], definiendo cada parte de la lista con [*]. Por ejemplo, para hacer una lista de sus animales favoritos use [list][*]Vaca[*]Cuervo[*]Conejo[/list]; esto generar� lo siguiente:<ul><li>Vaca</li><li>Cuervo</li><li>Conejo</li></ul>");
$faq[] = array("Creando una lista ordenada", "El segundo tipo de lista es la ordenada. Para crearla use [list=1][/list] para crear una lista con numeraci�n, o use [list=a][/list] para una con orden alfab�tico. Como antes, cada parte de la lista se especifica con [*] por ejemplo, [list=1][*]Vaca[*]Cuyo[*]Conejo[/list], se mostrar� como: <ol><li>Vaca</li><li>Cuervo</li><li>Conejo</li></ol>");


$faq[] = array("--", "Creando enlaces");
$faq[] = array("Creando un enlace a otro sitio", "phpBB BBCode admite varias formas de hacer un enlace. La primera es con [url=][/url]; por ejemplo, para hacer un enlace a phpBB.com puede usar:[url=http://www.phpbb.com/]�Visite phpBB![/url]. Otra forma es [url]http://www.phpbb.com/[/url]. Este foro tiene tambien los llamados ENLACES M�GICOS; por ejemplo, si teclea www.phpbb.com en su mensaje, aparecer� automaticamente como enlace. Para hacer un enlace a un e-mail deber� poner: [email]alguien@sudireccion.com[/email] o, simplemente, teclear la direcci�n, que se convertir� autom�ticamente en un enlace. Todo esto puede combinarlo con la etiqueta [img][/img] para que el enlace sea una imagen, as�: [url=http://www.phpbb.com/][img]http://www.phpbb.com/images/phplogo.gif[/url][/img]. Los enlaces siempre se abrir�n en una ventana nueva de su navegador.");


$faq[] = array("--", "Publicando im�genes en los mensajes");
$faq[] = array("Agregando una imagen al mensaje", "Para poner una imagen simplemente escriba [img]URL[/img], donde URL es la direcci�n en donde est� su imagen, por ejemplo [img]http://www.phpbbxs.eu/images/leaf_orange.png[/img],. Tambien puede generar enlaces de la siguiente forma: [url=][/url] as� [url=http://www.phpbb.com/][img]http://www.icyphoenix.com/images/leaf_orange.png[/img][/url]");
$faq[] = array("Alineando im�genes y envolviendo al texto", "Este foro tiene etiquetas IMG izquierda-derecha instaladas. Gracias a estas etiquetas, puede alinear un texto a la izquierda o derecha de una imagen. Adem�s, con el uso de estas etiquetas conseguir� que el texto quede alineado con la imagen, cosa imposible con la etiqueta [img] normal. Por ejemplo:<br /><br /><b>Con etiquetas img:</b><br />Una frase realmente realmente <b>[img]</b>phplogo.gif<b>[/img]</b> <b>[img]</b>phplogo.gif<b>[/img]</b> realmente realmente realmente realmente realmente realmente larga. <table width=\"420\" cellpadding=\"5\"><tr><td class=\"quote\"><br />Una frase realmente <img src=\"http://www.phpbbxs.eu/images/leaf_orange.png\" border=\"0\" alt=\"\" /> <img src=\"http://www.phpbbxs.eu/images/leaf_orange.png\" border=\"0\" alt=\"\" /> realmente realmente realmente realmente realmente realmente larga.<br /><br /></td></tr></table><br /> <b>Con etiquetas izquierda y derecha:</b><br />Una frase realmente <b>[img=left]</b>phplogo.gif<b>[/img]</b> <b>[img=right]</b>phplogo.gif<b>[/img]</b> realmente realmente realmente realmente realmente realmente larga. <table width=\"420\" cellpadding=\"5\"><tr><td class=\"quote\"><br /><img src=\"http://www.phpbbxs.eu/images/leaf_orange.png\" border=\"0\" alt=\"\" align=\"left\" /> <img src=\"http://www.phpbbxs.eu/images/leaf_orange.png\" border=\"0\" alt=\"\" align=\"right\" /> Una frase realmente realmente realmente realmente realmente realmente realmente larga.<br /><br /><br /></td></tr></table>") ;

$faq[] = array("--", "Otros");
$faq[] = array("�Puedo agregar mis propias etiquetas?", "No, no en esta version de Icy Phoenix; seguramente ser� posible en versiones posteriores.");

// This ends the BBCode guide entries

?>