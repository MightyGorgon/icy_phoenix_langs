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
	<h2>Cookie-Richtlinien</h2><br />

	<p>Wie die meisten Webseiten verwendet diese Website Cookies.</p><br />

	<p>Cookies sind kleine Textdateien, die von deinem Browser auf deinem Computer / Gerät gespeichert sind. Sie werden für viele Dinge verwendet, wie zum Beispiel daran zu erinnern, ob du die Seite vorher besucht hast, damit du angemeldet bleibst - oder um uns zu helfen, einige Statistiken zu erarbeiten. Sie enthalten Informationen über die Verwendung deines Computers, aber keine persönlichen Informationen über dich (z.B. speichern wir nicht deinen Namen).</p><br />

	<p><strong>Diese Richtlinie erklärt, wie Cookies auf dieser Website im Allgemeinen verwendet werden.</strong></p><br />

	<p>Durch die Nutzung dieser Website erklärst du dich damit einverstanden, dass diese Cookie-Richtlinie bei jedem Zugriff auf die Website auf jedem Gerät zutrifft.</p><br />

	<p>Änderungen an dieser Richtlinie werden hier veröffentlicht. Wir behalten uns das Recht vor, diese Cookie-Richtlinie von Zeit zu Zeit zu ändern und diese Änderungen werden mit Veröffentlichung wirksam. Mit der weiteren Nutzung der Website stimmst du automatisch allen Änderungen zu.</p><br />

	<p>Wir können Informationen automatisch beim Aufrufen der Website unter Verwendung von Cookies sammeln.</p><br />

	<p>Die Cookies erlauben uns deinen Computer / Gerät zu identifizieren und erfahren dadurch Details über deinen letzten Besuch.</p><br />

	<p>Du kannst Cookies auch nicht erlauben. Wenn du dies machst, können wir eine fehlerfreie Benutzung dieser Seite nicht garantieren. Wenn du keine Cookies zulässt, kannst du dich z.B. nicht anmelden.</p><br />

	<p>Die von Cookies gesammelten Informationen identifizieren dich nicht persönlich. Sie enthalten allgemeine Informationen über deine Computereinstellungen, deine Verbindung zum Internet z.B. Betriebssystem, IP-Adresse, dein Browser Modell und Zeiten des Aufenthalts auf der Website und deinen Standort.</p><br />

	<p>Die meisten Internet-Browser akzeptieren Cookies automatisch. Wenn du es möchtest, kannst du die Einstellungen deines Browsers ändern, um Cookies zu löschen oder die automatische Akzeptanz zu verhindern.</p><br />

	<p>Diese Links erklären, wie du Cookies über deinen Browser einstellen kannst - denke daran, dass deaktivierte Cookies in deinem Browser für alle Websites gelten und nicht nur für diese:</p>

	<ul>
		<li><p><strong>Internet Explorer</strong> <a href="http://support.microsoft.com/kb/278835">http://support.microsoft.com/kb/278835</a></p></li>
		<li><p><strong>Chrome:</strong> <a href="https://support.google.com/chrome/answer/95647?hl=de">https://support.google.com/chrome/answer/95647?hl=de</a></p></li>
		<li><p><strong>Safari:</strong> <a href="https://support.apple.com/kb/PH21411?locale=de_DE&viewlocale=de_DE">https://support.apple.com/kb/PH21411?locale=de_DE&viewlocale=de_DE</a> (or <a href="https://support.apple.com/de-de/HT201265">https://support.apple.com/de-de/HT201265</a> für mobile Versionen)</p></li>
		<li><p><strong>Firefox:</strong> <a href="https://support.mozilla.org/de/kb/cookies-erlauben-und-ablehnen">https://support.mozilla.org/de/kb/cookies-erlauben-und-ablehnen</a></p></li>
		<li><p><strong>Blackberries:</strong> <a href="http://docs.blackberry.com/en/smartphone_users/deliverables/32004/Turn_off_cookies_in_the_browser_60_1072866_11.jsp">http://docs.blackberry.com/en/smartphone_users/deliverables/ 32004/Turn_off_cookies_in_the_browser_60_1072866_11.jsp</a></p></li>
		<li><p><strong>Android:</strong> <a href="https://support.google.com/accounts/answer/61416?hl=de">https://support.google.com/accounts/answer/61416?hl=de</a></p></li>
		<li><p><strong>Opera:</strong> <a href="http://www.opera.com/browser/tutorials/security/privacy/">http://www.opera.com/browser/tutorials/security/privacy/</a></p></li>
	</ul>

	<br /><br /><br />

	<h4>Arten von Cookie, die während Ihres Besuchs auf der Website verwendet werden können</h4><br />

	<p>Die folgenden Arten von Cookie werden auf dieser Website verwendet. Wir führen nicht jedes einzelne verwendete Cookie (nach Namen) auf - aber für jede Art von Cookie sagen wir dir, wie du es kontrollieren kannst.</p><br />
	<ol>
		<li><p><strong>Seiten Verwaltung und Personalisierung von Cookies</strong>: wird verwendet, um deine Identität oder Sitzung auf der Website zu pflegen und wiederholte Besuche auf der Website zu erkennen. Diese Cookies können nicht einzeln deaktiviert werden, aber Sie können Ihre Browser-Einstellung ändern, um alle Cookies zu verweigern (siehe oben), wenn du es nicht akzeptieren möchtest.</p></li>
		<li><p><strong>Analytics Cookies</strong>: werden verwendet, um zu beobachten, wie Besucher sich auf der Website bewegen und wie sie die Seite erreicht haben. Dadurch können nur Gesamtzahlen (keine persönlichen) gesehen werden. Zum Beispiel, welcher Inhalt den Nutzern am meisten gefällt. Dies kannst du abwählen, wenn du magst: <a href="https://tools.google.com/dlpage/gaoptout">https://tools.google.com/dlpage/gaoptout</a></p></li>
		<li>
			<p><strong>Drittanbieter-Service-Cookies</strong>: Soziale Medien, Video und andere Dienstleistungen, die wir anbieten, werden von anderen Firmen geführt. Diese Unternehmen können Cookies auf deinem Computer benutzen, wenn du sie auf unserer Website verwendest oder wenn du bereits bei ihnen angemeldet bist.</p>
			<p>Hier findest du eine Liste von Anbietern, bei denen du mehr über spezifische Dienstleistungen und deren Verwendung von Cookies erfahren kannst:</p>
			<ul>
				<li><p><strong>Facebook</strong> Datenrichtlinie: <a href="http://www.facebook.com/about/privacy/your-info-on-other">http://www.facebook.com/about/privacy/your-info-on-other</a></p></li>
				<li><p><strong>Twitter</strong> Datenschutzrichtlinie: <a href="https://twitter.com/privacy">https://twitter.com/privacy</a></p></li>
				<li><p><strong>Google und YouTube</strong> Datenschutzerklärung: <a href="https://www.google.com/intl/de/policies/privacy/">https://www.google.com/intl/de/policies/privacy/</a></p></li>
			</ul>
		</li>
	</ol>
	',

	'PRIVACY_POLICY' => '
	<h2>Datenschutz-Bestimmungen</h2><br />

	<p>Durch die Nutzung dieser Website erklärst du dich ausdrücklich mit diesen Bedingungen einverstanden, wann immer du die Website mit irgendeinem Gerät besuchst. Diese Datenschutzerklärung ist Bestandteil unserer Geschäftsbedingungen.</p><br />

	<p>Änderungen an diesen Bestimmungen werden hier veröffentlicht. Wir behalten uns das Recht vor, diese Datenschutz-Bestimmungen von Zeit zu Zeit zu ändern und diese Änderungen werden mit Veröffentlichung wirksam. Mit der weiteren Nutzung der Website stimmst du automatisch allen Änderungen zu.</p><br />

	<p>Wir verpflichten uns die persönlichen Informationen zu schützen und sagen dir, wie wir die von dir erhalten Informationen nutzen.</p><br /><br />

	<h4>Warum wir Informationen über dich sammeln</h4><br />

	<p>Informationen über dich helfen uns die Website anzupassen, sich an dich zu erinnern und ihre Nützlichkeit für dich zu verbessern. Wir können diese Informationen verwenden, um dich über Änderungen an der Website oder Produkte, Dienstleistungen oder Werbung von uns und anderen (mit deiner Zustimmung) zu informieren. Es kann uns auch helfen, Artikel und Dienstleistungen für dich auszuwählen. Informationen über dich helfen uns, Platz für Werbetreibende von Produkten und Dienstleistungen zu verkaufen, die für Sie relevant sind, damit wir die Website weiterhin über die Werbung finanzieren können und du kanst die Website weiterhin kostenlos nutzen. Wir können dir Administrations- und Werbe-E-Mails über die Website und Updates über die Website senden. Wir können deine Besuche auf der Website personalisieren und das Design und den Stil der Website entwickeln, um die angebotenen Dienstleistungen zu verbessern. Möglicherweise mußt du dich mit Ihnen über einen Kommentar, den Sie eingereicht haben, oder Material, das Sie auf der Website veröffentlicht haben, kontaktieren oder um deine Identität von Zeit zu Zeit zu überprüfen.</p><br />

	<h4>Welche Informationen sammeln wir von dir?</h4><br />

	<p>Wir können Informationen von dir sammeln, wenn du ein Online-Anmeldeformular für eine der auf unserer Website verfügbaren Dienste (z.B. Chatbereiche, Profilseite, Foren usw.) ausfüllen. Die Art der Informationen, die wir sammeln, umfasst beispielsweise deinen Namen, deine Postanschrift, deine E-Mail-Adresse, Telefonnummern, Geschlecht, Vorlieben und einige weitere Details.</p><br />

	<p>Wir sammeln druch Cookies Informationen über deine Nutzung der Website und Dienstleistungen. Weitere Informationen zu Cookies findest du in unserer Cookie-Richtlinie, die Bestandteil dieser Datenschutzerklärung ist.</p><br /><br />

	<h4>Wie wir sicherstellen, dass der Datenschutz eingehalten wird</h4><br />

	<p>Wir bemühen uns sicherzustellen, dass deine Daten sicher gespeichert und vor unberechtigtem Zugriff geschützt werden. Wir haben Sicherheitsmaßnahmen, um deine Informationen zu schützen, die wir regelmäßig überwachen. Leider können wir dies, trotz unserer Maßnahmen, nicht garantieren, dass deine Informationen zu jeder Zeit 100% sicher bleiben werden. Die anhaltenden Bemühungen der Hacker, auch die neuesten Sicherheitssysteme zu besiegen, bedeutet, dass wir dieses Versprechen niemals machen können.</p><br />

	<p>Bitte beachte, dass öffentliche Informationen über Chat-Bereiche, deine Profilseite, Kommentarbereiche, Foren oder andere öffentliche Dienste auch von anderen Personen genutzt werden können. Wir sind nicht für deine öffentlichen Informationen verantwortlich, die du auf dieser Seite schreibst.</p><br /><br />

	<h4>Offenlegung von Informationen und Zustimmung</h4><br />

	<p>Wir werden Ihre personenbezogenen Daten nicht für Direktmarketing-Aktivitäten nutzen oder diese Informationen für Ihre Direktmarketing-Aktivitäten ohne Ihre Zustimmung an Dritte weitergeben. Durch Direktmarketing-Aktivitäten verstehen wir die Kommunikation direkt an Einzelpersonen (per E-Mail, Post oder Telefon) von Werbe- oder Marketingmaterial.</p><br />

	<p>Wenn du deine Einwilligung erteilt hast, kannst du uns später noch mitteilen, dass du keine Direktvermarktung oder Informationen von uns oder unseren verbundenen Unternehmen oder Dritten erhalten möchtest bzw. dass wir keine deiner Daten an Dritte weitergeben. Bitte informiere uns über den Button &quot;Kontakt&quot;.</p><br />

	<p>Wir können Details über die Nutzung der Website an andere Unternehmen, z.B. Nutzungsmuster für Werbetreibende und andere Geschäftspartner, mitteilen. Die weitergebenen Informationen, werden keine personenbezogenen Daten enthalten, mit denen du identifiziert werden kannst.</p><br />

	<p>Wir bemühen uns, unbefugte Offenlegungen deiner persönlichen Daten durch andere Personen zu verhindern, aber wir sind nicht verantwortlich für irgendwelche unbefugten Veröffentlichungen oder sonstige Sicherheitsverletzungen oder für die Handlungen anderer, wenn die Informationen mit deiner Erlaubnis weitergeleitet wurde oder mit der Erlaubnis von irgendjemand anderem als uns oder unseren verbundenen Unternehmen.</p><br />

	<p>Wir können die in diesen Bestimmungen beschriebenen Informationen infolge eines Verkaufs, einer Fusion, einer Konsolidierung, eines Kontrollwechsels, einer Übertragung von Vermögenswerten oder einer Reorganisation unseres Unternehmens an Dritte übertragen, verkaufen oder abtreten.</p><br /><br />

	<h4>Erhalte deine persönlichen Informationen</h4><br />

	<p>Wenn du eine Kopie der persönlichen Daten erhalten möchtest, die wir von dir besitzen oder irgendwelche anderen Fragen oder Bedenken hast, wie wir sammeln und deine personenbezogenen Daten verwenden, schreib uns bitte (einschließlich der vollständigen Angaben zu deiner Anfrage) &quot;Kontakt&quot;-Formular, und wir werden dir mitteilen, wie man uns eine offizielle Anfrage sendet. Wir berechnen eine Bearbeitungsgebühr (die den gesetzlich zulässigen Höchstbetrag nicht überschreitet), um einen Antrag auf Zugang zu personenbezogenen Daten zu erfüllen.</p><br />

	',

	)
);

?>