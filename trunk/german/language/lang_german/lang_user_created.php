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

$lang['DEMO_VAR'] = 'DEMO VAR';
$lang['BBC_Overview'] = '<ul>
						<li><span class="text_green"><b>Was ist Icy Phoenix?</b></span><br /></li>
						<li><a class="post-url" href="http://www.icyphoenix.de/" target="_blank">Icy Phoenix</a> ist ein CMS basierend auf phpBB (ein vollständig skalierbares und hoch anpassbares open-source Bulletin Board basierend auf php) zusätzlich vieler Änderungen und Code Integrationen welche dem Ganzen die Flexibilität verleiht. Die offizielle Homepage für phpBB ist <a class="post-url" href="http://www.phpbb.com/" target="_blank">www.phpbb.com</a>. Icy Phoenix hat einige Funktionen ursprünglich für <acronym title="phpBB eXpertS">phpBB XS Project</acronym> entwickelt, welches von Bicet gegründet wurde und dann von Bicet und Mighty Gorgon weiterentwickelt wurde. Icy Phoenix wurde von <a class="post-url" href="http://www.mightygorgon.com/" target="_blank">Mighty Gorgon</a> geschaffen, nachdem er das <acronym title="phpBB eXpertS">phpBB XS Projekt</acronym> verlassen hatte.<br /><br /></li>
						<li><span class="text_green"><b>Was sind die Hauptmerkmale von Icy Phoenix?</b></span><br /></li>
						<li>
							Icy Phoenix hat viele Funktionen. Die meisten davon sind auf der <a class="post-url" href="http://www.icyphoenix.com/features.php" target="_blank">Features Seite</a> und auf der <a class="post-url" href="http://www.icyphoenix.de/credits.php">Credits Seite</a> aufgelistet. Die wichtigsten sind:<br />
							<ul>
								<li>phpBB bulletin Board und Berechtigungssystem</li>
								<li>CMS Funktionen ermöglichen die Schaffung von neuen Seiten und Blöcken</li>
								<li>Übergreifende Template Integration zwischen allen Seitenabschnitten</li>
								<li>Viele Funktionen können sofort benutzt werden: Foto-Galerie, Downloads, Wissensdatenbank, Links, Chat...</li>
								<li>Startbereit für Mehrsprachigkeit und Mehrfach-Template</li>
								<li>Nahezu 100% XHTML und CSS W3C konform</li>
								<li>...und vieles mehr...</li>
							</ul>
							<br />
						</li>
						<li><span class="text_green"><b>Bietet Icy Phoenix Hilfestellung bei Bugs, Sicherheitsfragen und Verbesserungen?</b></span><br /></li>
						<li>Icy Phoenix ist ein Open-Source Projekt. Wie viele Open-Source Projekte wird es durch hilfsbereite Leute in deren Freizeit betreut. Im Moment gibt es mehrere Personen die bereit sind zu helfen und zu diesem Projekt beizutragen. Wir hoffen, dass diese Gemeinschaft weiter wächst und in der Lage sein wird, die notwendige Unterstützung an alle diese Benutzer zu geben, die Hilfe benötigen.<br /><br /></li>
						<li><span class="text_green"><b>Ist Icy Phoenix einfach zu installieren und von anderen Foren umzuwandeln?</b></span><br /></li>
						<li>Icy Phoenix hat seine eigene Installations-Methode, die den Benutzer Schritt für Schritt durch die Ersteinrichtung leitet. Es wurde eine Upgrade-Datei erstellt, um von einem standard phpBB oder <acronym title="phpBB eXpertS - Icy Phoenix Vorgänger">phpBB XS</acronym> zu Icy Phoenix zu wechseln. Hoffentlich wird es bald eine Konvertierungs-Datei von jedem anderen Forum geben: im Moment ist der einzige Weg von anderen Forum-Systemen zu wechseln, indem man erst zum standard phpBB wechselt (sofern dafür ein Verfahren geschrieben wurde) und dann zu Icy Phoenix upzugraden.<br /><br /></li>
						<li><span class="text_green"><b>Hat Icy Phoenix viele Templates?</b></span><br /></li>
						<li>Ja, im Moment sind einige kostenlose Templates (einige davon mit unterschiedlichen Farbenvariationen) vorhanden und wir arbeiten weiterhin an Neuen. Wenn du an neuen Templates interessiert bist, solltest du regelmäßig das <a class="post-url" href="http://www.icyphoenix.com/forum.php" target="_blank">Support Forum</a> und die <a class="post-url" href="http://www.icyphoenix.com/styles/" target="_blank">Styles Sektion</a> besuchen.<br /><br /></li>
						<li><span class="text_green"><b>Ist Icy Phoenix mehrsprachig?</b></span><br /></li>
						<li>Englisch ist die Hauptsprache in Icy Phoenix, aber es wurde in andere Sprachen übersetzt (alphabetisch geordnet): deutsch, galicisch, holländisch, italienisch, katalanisch, serbisch, spanisch... und weitere werden folgen! Wenn du deine Sprache nicht in dieser Liste finden solltest, dann frage bitte im <a class="post-url" href="http://www.icyphoenix.de/forum.php" target="_blank">Support-Forum</a>. Vielleicht arbeitet gerade jemand an dieser Übersetzung. Dann kannst du beim "Übersetzungs-Team" mitmachen, um deinen Beitrag zu leisten.<br /><br /></li>
						<li><span class="text_green"><b>Wird Icy Phoenix upgraded auf phpBB 3?</b></span><br /></li>
						<li>Dieses Thema ist sehr komplex. Auch wenn Icy Phoenix zu Beginn auf phpBB 2 basierte, sind im Moment viele phpBB 3 Funktionen in Icy Phoenix integriert wurden. Das bedeutet, dass das derzeitige Icy Phoenix auf einer Version von phpBB basiert, die eine Mischung zwischen phpBB 2 und phpBB 3 ist. Der Code wurde stark optimiert. Es benutzt umfangreich den Cache. Du wirst phpBB 3 nicht vermissen.<br /><br /></li>
						<li><span class="text_green"><b>Darf ich dem Icy Phoenix Projekt beitreten?</b></span><br /></li>
						<li>Natürlich. Icy Phoenix ist ein Open-Source Projekt und jeder, der einen kontinuierlichen Beitrag dafür leisten möchte, kann sich für ein Team anmelden.<br /></li>
					</ul>';
$lang['BBC_License'] = '<b>Icy Phoenix</b>, welches von Mighty Gorgon entwickelt wurde, ist ein CMS basierend auf einer premodded Version von phpBB, verschiedener phpBB MODs und mehrerer Funktionen, die von Mighty Gorgon und dem Icy Phoenix Team entwickelt wurden. Da phpBB unter der GNU Lizenz freigegeben ist, ist Icy Phoenix auch unter der GNU Lizenz freigegeben (du kannst die Bedingungen hier nachlesen: <a class="post-url" href="http://www.icyphoenix.de/docs/COPYING" target="_blank">GNU</a>)<br /><br />
					Credits für alle verwendeten MODs und ihre Autoren können unter diesem Link gefunden werden: <a class="post-url" href="http://www.icyphoenix.com/credits.php" target="_blank">Credits</a>.<br /><br />
					phpBB &copy; 2012 <a class="post-url" href="http://www.phpbb.com/" target="_blank">phpBB Group</a>.<br />
					Icy Phoenix &copy; 2012 <a class="post-url" href="http://www.icyphoenix.com/" target="_blank">Icy Phoenix Team</a>.';
$lang['BBC_Requirements'] = 'Bevor du Icy Phoenix installierst solltest du sicher sein, dass die <b>MINDESTANFORDERUNGEN</b> vorhanden sind:
					<ul>
						<li>Mindestens 20 MB freien Speicherplatz in dem Ordner, wo du Icy Phoenix installieren möchtest</li>
						<li>Web Server mit PHP (5.x oder höher) installiert und gestartet (läuft am besten mit Linux + Apache)</li>
						<li>MySQL (5.x oder höher) Datenbank mit mindestens 5MB freien Speicherplatz (natürlich hängt die Größe davon ab, wie groß dein Forum sein wird... 5MB ist genug, für die Anfangsinstallation)</li>
						<li>Erlaubnis haben, CHMOD setzen zu können</li>
					</ul>
					<br /><br />
					Die anderen Erfordernisse (selbst wenn nicht notwendiger Weise benötigt werden) sind für optimale Leistungen von Icy Phoenix empfohlen:
					<ul>
						<li>Webserver mit .htaccess-Fähigkeit</li>
						<li>Apache Rewrite Mod installiert und gestartet</li>
						<li>GD Bibliotheken (mindestens 2.0.28) installiert und gestartet</li>
						<li>Register Globals auf OFF gesetzt</li>
					</ul>';
$lang['BBC_Fresh_Installation'] = '<ol type="1">
						<li>Entpacke das Icy Phoenix Paket in einen Ordner auf deiner Festplatte.</li>
						<li>Kopiere alle Icy Phoenix Dateien in ein Verzeichnis auf deinem Webserver (z.B. /forum/)</li>
						<li>
							Setze die Berechtigung <span class="text_red">CHMOD 777</span> für die folgenden Dateien und Verzeichnisse:<br />
							<ul>
							<li><b>backup/</b></li>
							<li><b>cache/</b></li>
							<li><b>cache/cms/</b></li>
							<li><b>cache/forums/</b></li>
							<li><b>cache/posts/</b></li>
							<li><b>cache/sql/</b></li>
							<li><b>cache/topics/</b></li>
							<li><b>cache/uploads/</b></li>
							<li><b>cache/users/</b></li>
							<li><b>downloads/</b></li>
							<li><b>files/</b></li>
							<li><b>files/album/</b></li>
							<li><b>files/album/cache/</b></li>
							<li><b>files/album/med_cache/</b></li>
							<li><b>files/album/users/</b></li>
							<li><b>files/album/wm_cache/</b></li>
							<li><b>files/images/</b></li>
							<li><b>files/thumbs/</b></li>
							<li><b>files/thumbs/s/</b></li>
							<li><b>images/avatars/</b></li>
							<li><b>logs/</b></li>
							<li><b>logs/logfile_attempt_counter.txt</b></li>
							<li><b>logs/logfile_blocklist.txt</b></li>
							<li><b>logs/logfile_debug_mode.txt</b></li>
							<li><b>logs/logfile_malformed_logins.txt</b></li>
							<li><b>logs/logfile_spammer.txt</b></li>
							<li><b>logs/logfile_worms.txt</b></li>
							</ul>
							<br />
						</li>
						<li>Führe die install.php aus dem install Ordner aus: <b>install/install.php</b> (z.B. <a class="post-url" href="http://www.meineseite.de/icyphoenix/install/install.php">http://www.meineseite.de/forum/install/install.php</a>)</li>
						<li>Fülle alle Felder aus und folge dem Setup bis zum Ende.</li>
						<li>Lösche das Verzeichnis <b>install</b> oder benenne es um.</li>
						<li><a name="ip_customize"></a>Passe das an, was du anpassen möchtest, in Dateien und DB (einige Dateien müssen von Hand angepasst werden, die meisten Änderungen können im Admin-Bereich und CMS vorgenommen werden). Hier eine kurze Liste mit einigen Dateien, die du vielleicht manuell bearbeiten möchtest:
							<ul>
								<li><b>.htaccess</b>: Einstellungen zu deiner Domain und einige Apache Einstellungen.</li>
								<li><b>robots.txt</b>: Pfad zur Sitemap und Bots Regeln anpassen.</li>
								<li><b>favicon.ico</b> und <b>images/favicon.ico</b>: dein Seiten-Icon anpassen.</li>
								<li><b>includes/constants.php</b>: anpassen einiger Konstanten Werte und Haupt-Admin ID setzen.</li>
								<li><b>language/lang_XXX/lang_main_settings.php</b>: einige wichtige Daten über dich, deine Seite und Grundeinstellungen.</li>
								<li><b>templates/default/overall_header*.tpl</b>: hier kannst du teilweise das Aussehen deines Templates ändern (einige Einstellungen können im Admin-Bereich und CMS vorgenommen werden, dann brauchst du die Datei nicht bearbeiten).</li>
							</ul>
						</li>
						<li>Passe die Optionen im Admin-Bereich und CMS an.</li>
						<li>Genieße deine neue Seite <img src="../images/smiles/icon_mrgreen.gif" alt="Enjoy!" title="Enjoy!" />.</li>
					</ol>';
$lang['BBC_Upgrade_phpbb'] = 'Wenn du phpBB 3.0.x benutzt, kannst du folgendes zu Icy Phoenix konvertieren: Foren, Themen, Beiträge und Benutzer - Folge den Anweisungen:<br />
					<ol type="1">
						<li>Login als Administrator in phpBB 3 und sperre das Forum vom ACP aus.</li>
						<li>Erstellen eine vollständige Sicherung deines phpBB 3 (beides, DB und Dateien).</li>
						<li>Installiere Icy Phoenix (<a class="post-url" href="#fresh_installation">Neuinstallation</a>) in der gleichen DB wie phpBB 3, aber mit unterschiedlichen Tabellen-Präfix (am besten wäre es, Icy Phoenix Tabellen mit <i><b>ip_</b></i> Präfix und phpBB 3 Tabellen mit <i><b>phpbb_</b></i> Präfix zu haben). Wenn du Icy Phoenix im selben Verzeichnis installieren willst, wo auch phpBB 3 ist, dann solltest du zuerst die phpBB 3 Dateien löschen/verschieben. Entschuldigung für die erneute Erinnerung, aber ein Backup ist sehr wichtig bevor du diesen Schritt durchführst!</li>
						<li>Login als Administrator in Icy Phoenix und sperre das Forum vom ACP aus.</li>
						<li>Bearbeite die Konstanten in der <b>install/phpbb3_conversion/phpbb3_to_ip.php</b>-Datei, um das richtige Präfix und den Namen anzugeben.</li>
						<li>Lade die <b>install/phpbb3_conversion/phpbb3_to_ip.php</b> zu deinem Icy Phoenix <b>ROOT</b> hoch und rufe sie im Browser auf (z.B. <i><u>http://www.mysite.com/ip/phpbb3_to_ip.php</u></i>).</li>
						<li>Wenn die Konvertierung beendet ist, solltest du alle Benutzer, Foren, Themen und Beiträge in deiner Icy Phoenix DB haben.</li>
						<li>Login in Icy Phoenix und führe fast alle Datenbank-Wartung Skripts im ACP aus (vielleicht musst du die <b>includes/constants.php</b> anpassen, falls deine Hauptadmin ID nicht 2 ist, sonst wirst du den Menüpunkt Datenbank im ACP nicht finden!).</li>
						<li>Passe dein Icy Phoenix Setup an, wie es hier beschrieben ist: ==&gt; <a class="post-url" href="#ip_customize">Anpassungen</a>.</li>
						<li>Entsperre deine Seite.</li>
						<li>Genieße dein neues <b>Icy Phoenix</b> Forum <img src="../images/smiles/icon_mrgreen.gif" alt="Enjoy!" title="Enjoy!" />.</li>
					</ol>';
$lang['BBC_Upgrade_XS'] = 'Wenn du bereits phpBB XS verwendest, kannst du dein Forum einfach aktualisieren, indem du die folgenden Schritte durchführst:<br />
					<ol type="1">
						<li>Melde dich als Administrator an.</li>
						<li>Sperre dein Forum.</li>
						<li>Benne den folgenden Ordner um:
							<ul>
								<li><b>album_mod/upload/</b> ==&gt; <b>files/album/</b></li>
								<li><b>pafiledb/uploads/</b> ==&gt; <b>downloads/</b></li>
							</ul>
						</li>
						<li>Ab diesem Punkt folge bitte den Anweisungen von hier: <a class="post-url" href="#upgrade_ip">Update von Icy Phoenix 1.3.0.53 oder höher</a>.</li>
						<li>Rufe <b>install/install.php</b> in deinem Browser auf und vervollständige das Update indem du Bilder umbenennst und verschiebst (im Album hochgeladene) und ersetze alle alten Links in den Beiträgen: das automatisierte Verfahren sollte diese Tätigkeiten automatisch durchführen, befolge einfach die Anweisungen.</li>
						<li>Lösche den <b>install</b> Ordner.</li>
						<li>Entsperre dein Forum.</li>
						<li>Genieße dein neues <b>Icy Phoenix</b> Forum <img src="../images/smiles/icon_mrgreen.gif" alt="Enjoy!" title="Enjoy!" />.</li>
					</ol>';
$lang['BBC_Upgrade_IP'] = 'Wenn du bereits Icy Phoenix 1.3.0.53 oder höher verwendest, kannst du dein Forum einfach aktualisieren, indem du die folgenden Schritte durchführst:<br />
					<ol type="1">
						<li>Melde dich als Administrator an.</li>
						<li>Sperre dein Forum.</li>
						<li><span class="text_red">Erstelle ein vollständiges Backup aller Dateien und der Datenbank</span> (Wenn du kein Backup hast, frage nicht nach Support! <img src="../images/smiles/icon_mrgreen.gif" alt="Backup Rules!" title="Backup Regeln!" />)</li>
						<li>Hast du ein Backup von allem? Wenn du kein Backup hast, gehe zum vorhergehenden Punkt zurück.</li>
						<li>Kopiere deine aktuelle <b>.htaccess</b> (falls du sie geändert hast) und die <b>config.php</b> und speichere sie an einem sicheren Ort.</li>
						<li>Vielleicht möchtest du auch von deinen persönlichen Seiten ein Backup machen, die du mit dem CMS System erstellt hast (falls du welche erstellt hast).</li>
						<li>Prüfe noch einmal, ob dein Backup in Ordnung ist und speichere es an einem sicheren Ort. <img src="../images/smiles/icon_mrgreen.gif" alt="Backup Rules!" title="Backup Regeln!" /></li>
						<li>Benne den folgenden Ordner um:
							<ul>
								<li><b>files/posted_images</b> ==&gt; <b>files/images</b></li>
							</ul>
						</li>
						<li>Löschen die folgenden Ordner (vergewissere dich, dass du keine Dateien für die von dir installierten Mods benötigst. Aber für diesen Fall solltest du ja ein Backup haben <img src="../images/smiles/icon_mrgreen.gif" alt="Backup Rules!" title="Backup Regeln!" />):
							<ul>
								<li><b>adm</b></li>
								<li><b>includes</b></li>
								<li><b>language</b></li>
								<li><b>templates</b></li>
							</ul>
						</li>
						<li>Lösche <b>alle alten Icy Phoenix Dateien</b> (nicht Ordner) außer <b>config.php</b> in deinem Icy Phoenix <b>Root</b> (vergewissere dich, dass du keine Dateien für deine installierten Mods benötigst. Aber für diesen Fall solltest du ein Backup haben <img src="../images/smiles/icon_mrgreen.gif" alt="Backup Rules!" title="Backup Regeln!" />).</li>
						<li>Bitte achte beim Löschen besonders auf diese Dateien und Ordner:<br />
							<ul>
								<li><b>config.php</b></li>
								<li><b>backup/</b></li>
								<li><b>downloads/</b></li>
								<li><b>images/</b></li>
								<li><b>files/</b></li>
								<li><b>logs/</b></li>
							</ul>
						</li>
						<li>Entpacke das Icy Phoenix Paket in einen Ordner auf deiner Festplatte.</li>
						<li>Lade alle Icy Phoenix Dateien (alle außer <b>config.php</b>) in dasselbe Verzeichnis hoch, wo dein Icy Phoenix installiert ist. Achte darauf, dass alle älteren Dateien mit den neuen ersetzt werden.</li>
						<li>Setzte alle Berechtigungen wie bei <a class="post-url" href="#fresh_installation">Neuinstallation</a> beschrieben.</li>
						<li>Kopiere die Datei <b>install/convert_utf8_nodbal.php</b> (nur die Datei, nicht den Ordner) in deinen <u><b>website root</b></u> und führe sie aus. Das ist notwendig, um deine alte Datenbank in UTF-8 zu konvertieren (z.B. <i><u>http://www.mysite.com/ip/convert_utf8_nodbal.php</u></i>).</li>
						<li>Lösche die Datei <b>convert_utf8_nodbal.php</b> von deinem website root</li>
						<li>Lade das Verzeichnis <b>install</b> in das Root-Verzeichnis deines Webservers hoch und rufe <b>database_update.php</b> im Browser auf (z.B. http://www.meineseite.de/forum/install/database_update.php).</li>
						<li>Rufe <b>install/install.php</b> in deinem Browser auf und vervollständige das Update indem du Bilder umbenennst und verschiebst (im Album hochgeladene) und ersetze alle alten Links in den Beiträgen: das automatisierte Verfahren sollte diese Tätigkeiten automatisch durchführen, befolge einfach die Anweisungen.</li>
						<li>Lösche das Verzeichnis <b>install</b> wieder.</li>
						<li>Passe das an, was du anpassen möchtest, in Dateien und DB (einige Dateien müssen von Hand angepasst werden, die meisten Änderungen können im Admin-Bereich und CMS vorgenommen werden). Hier ist eine kurze Liste einiger Dateien, die du vielleicht von Hand anpassen möchtest:
						</li><li>Entsperre dein Forum.</li>
						<li>Genieße dein neues <b>Icy Phoenix</b> Forum <img src="../images/smiles/icon_mrgreen.gif" alt="Enjoy!" title="Enjoy!" />.</li>
					</ol>';

?>