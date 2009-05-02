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
* TheSteffen, KugeLSichA, Tom
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

$lang['Index'] = 'Icy Phoenix';
$lang['Default_META_Keywords'] = 'phpbb, forum, icy phoenix, icyphoenix, icy, phoenix, php, portal, cms, premodded, community, open source, mods, templates';
$lang['Default_META_Description'] = 'Icy Phoenix ist ein sehr anpassbares CMS-System, welches auf phpBB basiert. Dieses erlaubt Ihnen die Erstellung dynamischen Seiten mit vielen besonderen Fähigkeiten.';
$lang['Default_META_Title'] = 'Icy Phoenix';
$lang['Default_META_Author'] = 'Mighty Gorgon And Icy Phoenix Staff :: http://www.icyphoenix.com/';
$lang['Default_META_Copyright'] = '(c) 2001-' . date('Y', time()) . ' Mighty Gorgon';

$lang['REGISTER_MESSAGE'] = '';

$lang['Welcome_Message'] = 'Willkommen bei <span class="topic_glo">Icy Phoenix</span><br />';
$lang['register_pm_subject'] = 'Willkommen bei %s';
$lang['register_pm'] = 'Hallo!\n\nWillkommen bei %s.\n\nWir hoffen du genießt die Zeit hier auf unserer Seite! <br /><br />Fühle dich frei um mitzumachen und mit anderen deine Erfahrungen auszutauschen oder deine eigene Diskussion zu starten!<br /><br />~Viel Spaß!<br />%s';

$lang['Support_Us'] = 'Unterstützt uns';
$lang['PayPal'] = '<img src="images/paypal.gif" alt="' . $lang['Support_Us'] . '" title="' . $lang['Support_Us'] . '" />';
/* Beispiel Code den du hinzufügen kannst... Ersetze ihn mit deinem eigenen.
$lang['PayPal'] = '
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick" />
<input type="image" src="images/paypal.gif" name="submit" alt="' . $lang['Support_Us'] . '" style="border-width:0px;" />
<input type="hidden" name="encrypted" value="" />
</form>
';
*/

$lang['OwnerSiteOwner'] = 'Mighty Gorgon';
$lang['OwnerSite'] = 'Icy Phoenix';
$lang['OwnerCompany'] = 'Icy Phoenix';
$lang['OwnerDetails'] = 'Icy Phoenix';
$lang['OwnerAdrress'] = 'Italy';
$lang['OwnerServer'] = 'Icy Phoenix';

$lang['PrivacyDisclaimer'] = 'Du erklärst dich ausdrücklich damit einverstanden, dass deine persönlichen Daten vertraulich nach der aktuellen Gesetzgebung (des Landes des Seiteninhabers) behandelt werden.<br />';

$lang['ENCODING'] = 'ISO-8859-1';
//$lang['ENCODING'] = 'UTF-8';
$lang['ENCODING_ALT'] = 'UTF-8';
$lang['DIRECTION'] = 'ltr';
$lang['HEADER_LANG'] = 'de-de';
$lang['HEADER_XML_LANG'] = 'de-de';
$lang['LEFT'] = 'links';
$lang['RIGHT'] = 'rechts';
$lang['DATE_FORMAT'] = 'd F y H:i'; // Dies sollte in das Standard Datums-Format deiner Sprache geändert werden, php date() format
$lang['DATE_FORMAT_MG'] = 'Y/m/d - H:i';
$lang['DATE_FORMAT_VF'] = 'd M Y';
$lang['DATE_FORMAT_BIRTHDAY'] = 'd. F Y';
$lang['DATE_FORMAT2'] = 'd. F Y'; // Dies sollte in das Standard Datums-Format deiner Sprache geändert werden, php date() format
$lang['JOINED_DATE_FORMAT'] = 'F Y'; // Datums-Format der Anmeldung, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.

$lang['TRANSLATION_INFO'] = 'Deutsche Übersetzung durch <a href="http://www.icyphoenix.de" target="_blank">IcyPhoenix.de</a>';
$lang['TRANSLATION'] = '';

?>