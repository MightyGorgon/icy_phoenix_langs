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


$faq[] = array("--","Introducción");
$faq[] = array("¿Que es el código BBCode?", "BBCode es una implementación especial del HTML. La forma en la que puede usarse BBCode la determina el administrador. Además, puede deshabilitar BBCode en una publicación base a través del formulario de envío. Es muy similar al HTML, las etiquetas van entre corchetes [ y ]. en lugar de &lt; y &gt; y ofrece un mayor contro sobre que y como se muestra algo. Dependiendo de la plantilla que esté usando puede añadir BBCode en sus mensajes mucho más fácil a través del interfaz clickando a través del área de mensaje en el formulario de envío. Incluso con esto puede encontrar la siguiente guía útil.");


$faq[] = array("--","Formateo de texto");
$faq[] = array("&iquest;Cómo crear texto en negrilla, cursiva o subrayado?", "BBCode incluye etiquetas para esto: [b][/b] para negrilla, [u][/u] para subrayar y [i][/i] para cursiva. Las etiquetas se pueden combinar entre si, ¿es genial! :)");
$faq[] = array("&iquest;Cómo cambiar el color o el tamaño del texto?", "Para cambiar el color: [color=][/color]. Puede escribir el nombre del color en inglés o el código hexadecimal perteneciente a ese color: p.ej., #FFFFFF, #000000. para crear rojo [color=red]¿Hola![/color]. Cambiar el tamaño es similar: [size=][/size], utilizando números del 1 al 29 (¿muy grande!)");
$faq[] = array("&iquest;Puedo combinar las etiquetas de formato?", "Sí :)");


$faq[] = array("--","Haciendo citas de texto o código");
$faq[] = array("Citar texto en las respuestas", "Hay dos formas de hacerlo: con una referencia o sin ella. Para hacerlo con referencia utilice la opción CITAR del foro al ir a publicar una respuesta; el mensaje que se cite se anexará al suyo automáticamente como: [quote=\"\"][/quote] El otro método (sin referencia) es poner una etiqueta parecida, pero agregando el autor del texto citado, es decir: [quote=\"Anita\"]</b>. Lo que diga Anita debe ir aquí; recuerde incluir \"\" alrededor del nombre a citar; si no quiere incluir el nombre, sólo encierre el texto entre las etiquetas [quote][/quote]");
$faq[] = array("Escribiendo código o texto de otro tamaño", "Cuando escriba código será puesto en una fuente tipo typewriter, como Courier. Simplemente encierre el texto entre las etiquetas [code][/code] de esta forma: [code]echo \"Esto se supone que es código\";[/code].");


$faq[] = array("--","Creando listas");
$faq[] = array("Creando una lista desordenada", "BBCode soporta dos tipos de listas, desordenadas y ordenadas. Es exactamente como en HTML, solo que con otras etiquetas. Para una lista desordenada use [list][/list], definiendo cada parte de la lista con [*]. Por ejemplo, para hacer una lista de sus animales favoritos use [list][*]Vaca[*]Cuervo[*]Conejo[/list]; esto generará lo siguiente:<ul><li>Vaca</li><li>Cuervo</li><li>Conejo</li></ul>");
$faq[] = array("Creando una lista ordenada", "El segundo tipo de lista es la ordenada. Para crearla use [list=1][/list] para crear una lista con numeración, o use [list=a][/list] para una con orden alfabético. Como antes, cada parte de la lista se especifica con [*] por ejemplo, [list=1][*]Vaca[*]Cuervo[*]Conejo[/list], se mostrará como: <ol><li>Vaca</li><li>Cuervo</li><li>Conejo</li></ol>");


$faq[] = array("--", "Creando enlaces");
$faq[] = array("Creando un enlace a otro sitio", "phpBB BBCode admite varias formas de hacer un enlace. La primera es con [url=][/url]; por ejemplo, para hacer un enlace a phpBB.com puede usar:[url=http://www.phpbb.com/]¿Visite phpBB![/url]. Otra forma es [url]http://www.phpbb.com/[/url]. Este foro tiene también los llamados ENLACES MáGICOS; por ejemplo, si teclea www.phpbb.com en su mensaje, aparecerá automáticamente como enlace. Para hacer un enlace a un e-mail deberá poner: [email]alguien@sudireccion.com[/email] o, simplemente, teclear la dirección, que se convertirá automáticamente en un enlace. Todo esto puede combinarlo con la etiqueta [img][/img] para que el enlace sea una imagen, así: [url=http://www.phpbb.com/][img]http://www.phpbb.com/images/phplogo.gif[/url][/img]. Los enlaces siempre se abrirán en una ventana nueva de su navegador.");


$faq[] = array("--", "Publicando imágenes en los mensajes");
$faq[] = array("Añadiendo una imágen al mensaje", "Icy Phoenix BBCode incorpora una etiqueta para incluir imágenes en sus mensajes. Dos cosas muy importante debe recordar cuando usa ésta etiqueta que son: muchos usuarios no aprecian que varias imágenes se están mostrando en un mensaje por segundos, la imagen que quieres mostrar debe estar disponible en internet (no podría si sólo existe solo en tu ordenador, por ejemplo, al menos que tengas un servidor web!). Actualmente no hay forma de almacenar imágenes en local en phpbb (todos estos inconvenientes se espera que se aborden en próximas versiones de phpBB). Para mostrar una imagen, debe de rodear la URL de la imagen con las etiquetas <b>[img][/img]</b>. Por ejemplo:<br /><br /><b>[img]</b>http://www.icyphoenix.com/images/logo_ip.png<b>[/img]</b><br /><br />Como se indicó en la sección anterior URL puede envolver una imagen con etiquetas <b>[url][/url]</b> si lo desea, ej.<br /><br /><b>[url=http://www.icyphoenix.com/][img]</b>http://www.icyphoenix.com/images/logo_ip.png<b>[/img][/url]</b><br /><br />Esto generaría:<br /><br /><a href=\"http://www.icyphoenix.com/\" style=\"background-image: none;padding-left: 0px;\" target=\"_blank\"><img src=\"http://www.icyphoenix.com/images/logo_ip.png\" border=\"0\" alt=\"\" /></a><br />");


$faq[] = array("--", "Otros");
$faq[] = array("¿Puedo añadir mis propias etiquetas?", "No, no en esta versión Icy Phoenix. Si domina el PHP puede intentar editar el propio archivo <b>includes/bbcode.php</b> el cual es el archivo responsable de los BBCodes.");

// This ends the BBCode guide entries

?>