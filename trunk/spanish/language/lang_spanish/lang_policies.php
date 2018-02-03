<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

	'COOKIE_POLICY' => '
	<h2>Política de Cookie</h2><br />

	<p>Como la mayoría de los sitios web, este sitio web utiliza cookies.</p><br />

	<p>Las cookies son pequeños archivos de texto almacenados en su PC/Dispositivo por su navegador. Se utilizan para muchas cosas, como recordar si has visitado el sitio antes, para que permanezcas conectado - o para ayudarnos a elaborar algunas estadísticas. Contienen información sobre el uso de su pc o dispositivo pero no incluyen información personal acerca de usted (no almacenan su nombre, por ejemplo).</p><br />

	<p><strong>Esta política explica cómo se usan las cookies en este sitio web en general.</strong></p><br />

	<p>Al acceder a este sitio web, acepta que esta Política de cookies se aplicará cada vez que acceda al sitio web en cualquier dispositivo.</p><br />

	<p>Cualquier cambio a esta política será publicado aquí. Nos reservamos el derecho de variar esta Política de Cookies de vez en cuando y dichos cambios entrarán en vigor tan pronto como se publiquen. Su uso continuo del Sitio Web constituye su acuerdo con todos los cambios.</p><br />

	<p>Podemos recopilar información automáticamente cuando visita el sitio web, utilizando cookies.</p><br />

	<p>Las cookies nos permiten identificar su PC/Dispositivo y encontrar detalles sobre su última visita.</p><br />

	<p>Puede elegir, a continuación, no permitir cookies. Si lo hace, no podemos garantizar que su experiencia con el sitio web sea tan buena como si usted permite cookies. Si no permite cookies, no podrá iniciar sesión, por ejemplo.</p><br />

	<p>La información recopilada por las cookies no lo identifica personalmente; Incluye información general sobre la configuración de su PC o dispositivo, su conexión a Internet, p. ej. sistema operativo y plataforma, dirección IP, sus patrones de navegación y tiempos de navegación en el sitio web y su ubicación.</p><br />

	<p>La mayoría de los navegadores de Internet aceptan las cookies automáticamente, pero puede cambiar la configuración de su navegador para borrar las cookies o evitar la aceptación automática si lo prefiere.</p><br />

	<p>Estos enlaces explican cómo puedes controlar las cookies a través de tu navegador. Recuerda que si desactivas las cookies en tu navegador, estas opciones se aplicarán a todos los sitios web, no solo a este:</p>

	<ul>
		<li><p><strong>Internet Explorer</strong> <a href="http://support.microsoft.com/kb/278835">http://support.microsoft.com/kb/278835</a></p></li>
		<li><p><strong>Chrome:</strong> <a href="http://support.google.com/chrome/bin/answer.py?hl=en-GB&amp;answer=95647">http://support.google.com/chrome/bin/answer.py?hl=en-GB&amp;answer=95647</a></p></li>
		<li><p><strong>Safari:</strong> <a href="http://docs.info.apple.com/article.html?path=Safari/5.0/en/9277.html">http://docs.info.apple.com/article.html?path=Safari/5.0/en/9277.html</a> (or <a href="http://support.apple.com/kb/HT1677">http://support.apple.com/kb/HT1677</a> para versiones de móviles)</p></li>
		<li><p><strong>Firefox:</strong> <a href="http://support.mozilla.org/en-US/kb/Enabling%20and%20disabling%20cookies">http://support.mozilla.org/en-US/kb/ Enabling%20and%20disabling%20cookies</a></p></li>
		<li><p><strong>Blackberries:</strong> <a href="http://docs.blackberry.com/en/smartphone_users/deliverables/32004/Turn_off_cookies_in_the_browser_60_1072866_11.jsp">http://docs.blackberry.com/en/smartphone_users/deliverables/ 32004/Turn_off_cookies_in_the_browser_60_1072866_11.jsp</a></p></li>
		<li><p><strong>Android:</strong> <a href="http://support.google.com/mobile/bin/answer.py?hl=en&amp;answer=169022">http://support.google.com/mobile/bin/answer.py?hl=en&amp;answer=169022</a></p></li>
		<li><p><strong>Opera:</strong> <a href="http://www.opera.com/browser/tutorials/security/privacy/">http://www.opera.com/browser/tutorials/security/privacy/</a></p></li>
	</ul>

	<br /><br /><br />

	<h4>Tipos de cookies que se pueden utilizar durante su visita al sitio web</h4><br />

	<p>Los siguientes tipos de cookies se utilizan en este sitio. No enumeramos todas las cookies utilizadas por nombre, pero para cada tipo de cookie le decimos cómo puede controlar su uso.</p><br />
	<ol>
		<li><p><strong>Cookies de administración del sitio y personalización </ strong>: se utilizan para mantener su identidad o sesión en el sitio web y para reconocer las visitas repetidas al sitio web. Estas cookies no se pueden desactivar de forma individual, pero puede cambiar la configuración de su navegador para rechazar todas las cookies (ver arriba) si no desea aceptarlas.</p></li>
		<li><p><strong>Cookies de Google Analytics </ strong>: se utiliza para supervisar cómo se mueven los visitantes por el sitio web y cómo lo han alcanzado. Esto se utiliza para que podamos ver cifras totales (no individuales) sobre qué tipos de usuarios de contenido disfrutan más, por ejemplo. Usted puede optar por salir de estos si lo desea: <a href="https://tools.google.com/dlpage/gaoptout">https://tools.google.com/dlpage/gaoptout</a></p></li>
		<li>
			<p><strong>Cookies de servicio de terceros </ strong>: el intercambio social, video y otros servicios que ofrecemos son gestionados por otras empresas. Estas empresas pueden eliminar las cookies en su computadora cuando las usa en nuestro sitio o si ya está conectado a ellas.</p>
			<p>Aquí está una lista de lugares donde puede encontrar más información sobre servicios específicos que podemos usar y su uso de cookies:</p>
			<ul>
				<li><p>Política de uso de datos de <strong>Facebook:</strong> <a href="http://www.facebook.com/about/privacy/your-info-on-other">http://www.facebook.com/about/privacy/your-info-on-other</a></p></li>
				<li><p>Política de Privacidad de <strong>Twitter:</strong> <a href="https://twitter.com/privacy">https://twitter.com/privacy</a></p></li>
				<li><p>Política de Cookies de <strong>Google And YouTube:</strong> <a href="http://www.google.com/intl/en/policies/privacy/faq/#toc-cookies">http://www.google.com/intl/en/policies/privacy/faq/#toc-cookies</a> (Google standard terms).</p></li>
			</ul>
		</li>
	</ol>
	',

	'POLÍTICA DE PRIVACIDAD' => '
	<h2>Política de Privacidad</h2><br />

	<p>Al acceder al sitio web, usted acepta estar sujeto a estos términos y condiciones siempre que acceda al sitio web en cualquier dispositivo. Esta Política de privacidad forma parte y se incorpora a los Términos y condiciones de nuestro sitio web.</p><br />

	<p>Cualquier cambio de esta política será publicado aquí. Nos reservamos el derecho de modificar esta Política de Privacidad de vez en cuando y dichos cambios entrarán en vigencia tan pronto como se publiquen. El uso continuado del sitio web constituye su aceptación de todos estos cambios.</p><br />

	<p>Nos comprometemos a proteger la información personal que nos proporciona y le informamos cómo utilizamos la información que recopilamos sobre usted.</p><br /><br />

	<h4>¿Por qué recopilamos información sobre usted?</h4><br />

	<p>Podemos usar su información para ayudarnos a personalizar el sitio web, a recordarlo y a mejorar su utilidad para usted. Podemos usar esta información para notificarle sobre cambios en el sitio web o productos, servicios o promociones nuestros o de otros (con su consentimiento) que creemos que podría encontrar de interés. También puede ayudarnos a elegir artículos y servicios que creemos que le interesarán. La información sobre usted nos ayuda a vender espacio a los anunciantes de los productos y servicios relevantes para usted, de modo que podamos continuar financiando el Sitio web mediante publicidad y puede seguir utilizando el sitio web de forma gratuita. Es posible que le enviemos correos electrónicos administrativos y promocionales relacionados con el sitio web y actualizaciones sobre el sitio web. Podemos personalizar sus visitas al sitio web y desarrollar el diseño y el estilo del sitio web para mejorar los servicios que se le brindan. Es posible que tengamos que comunicarnos con usted acerca de un comentario que haya enviado o material que haya publicado en el sitio web o para verificar su identidad de vez en cuando..</p><br />

	<h4>¿Qué información recopilamos de usted?</h4><br />

	<p>Podemos recopilar información de usted cuando rellena un formulario de registro en línea para cualquiera de los servicios disponibles en nuestro sitio web (por ejemplo, áreas de chat, su página de perfil, foros, etc.). El tipo de información que recopilaremos incluye, por ejemplo, su nombre, dirección postal, dirección de correo electrónico, números de teléfono, sexo, preferencias y algunos otros detalles.</p><br />

	<p>Recopilamos información sobre su uso del sitio web y los servicios que ofrece a través de las cookies. Para obtener más información sobre las cookies, consulte nuestra Política de cookies, que forma parte de esta Política de privacidad.</p><br /><br />

	<h4>¿Cómo aseguramos que se mantenga la privacidad?</h4><br />

	<p>Nos esforzamos para garantizar que sus datos se almacenen de forma segura y para evitar el acceso no autorizado. Tenemos medidas de seguridad para proteger su información, que monitoreamos regularmente. Lamentablemente, a pesar de nuestras medidas, debido a la naturaleza de Internet, no podemos garantizar que su información permanezca en todo momento 100% segura. Los continuos esfuerzos de los piratas informáticos para derrotar incluso el más nuevo de los sistemas de seguridad significa que nunca podemos hacer esta promesa.</p><br />

	<p>Tenga en cuenta que si divulga información en las áreas de chat, su página de Perfil, áreas de comentarios, foros u otros servicios públicos, es posible que otras personas puedan usar esta información. No somos responsables de la divulgación de la información que publique de esta manera.</p><br /><br />

	<h4>Revelando su información y su consentimiento</h4><br />

	<p>No haremos uso de su información personal para actividades de marketing directo, ni suministraremos esta información a terceros para sus actividades de marketing directo sin su consentimiento. Por actividades de marketing directo, nos referimos a la comunicación directa a individuos particulares (por correo electrónico, publicación o teléfono) de cualquier material publicitario o de marketing.</p><br />

	<p>Si después de haber dado su consentimiento, posteriormente decide que ya no desea recibir marketing directo o información de nosotros, nuestras compañías asociadas o terceros o que ya no desea que pasemos su información a terceros, notifíquenos a través del Contáctenos; formar.</p><br />

	<p>Podemos divulgar detalles sobre el uso del sitio web a otros negocios, p. Ej. para demostrar patrones de uso para anunciantes y otros socios comerciales. La información que transmitimos no incluirá ninguna información personal por la cual pueda ser identificado.</p><br />

	<p>Nos esforzamos por evitar divulgaciones no autorizadas de su información personal por otras personas, pero no somos responsables de ninguna divulgación no autorizada u otras infracciones de seguridad o por las acciones de terceros si la información se les pasó con su autoridad o con la autoridad de cualquier persona que no sea nosotros o nuestras compañías asociadas.</p><br />

	<p>Podemos transferir, vender o ceder a terceros cualquier información descrita en esta política como resultado de una venta, fusión, consolidación, cambio de control, transferencia de activos o reorganización de nuestro foro.</p><br /><br />

	<h4>Obtención de su información personal</h4><br />

	<p>Si desea recibir una copia de la información personal que tenemos sobre usted, o tiene otras consultas o inquietudes sobre la forma en que recopilamos y utilizamos su información personal, escríbanos (incluidos los detalles completos de su solicitud) mediante el uso de Contáctenos o formulario e instruiremos sobre cómo enviarnos una solicitud oficial. Podemos cobrar una tarifa de administración (que no exceda el máximo permitido por la ley) en relación con el cumplimiento de una solicitud de acceso a información personal.</p><br />

	',

	)
);

?>