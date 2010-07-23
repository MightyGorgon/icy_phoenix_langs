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

$lang['Index'] = 'Icy Phoenix';
$lang['Default_META_Keywords'] = 'phpbb, forum, icy phoenix, icyphoenix, icy, phoenix, php, portal, cms, premodded, community, open source, mods, templates';
$lang['Default_META_Description'] = 'Icy Phoenix is an highly customizable CMS based on phpBB which allows you to create a dynamic site with a lot of features for powering web communities.';
$lang['Default_META_Title'] = 'Icy Phoenix';
$lang['Default_META_Author'] = 'Mighty Gorgon and Icy Phoenix Staff :: http://www.icyphoenix.com/';
$lang['Default_META_Copyright'] = '(c) 2001-' . gmdate('Y') . ' Mighty Gorgon';

$lang['REGISTER_MESSAGE'] = '';

$lang['Welcome_Message'] = 'Bienvenido a <span class="topic_glo">Icy Phoenix</span><br />';
$lang['register_pm_subject'] = 'Bienvenido a %s';
$lang['register_pm'] = "Hola!\n\nBienvenido a %s.\n\nEsperemos que disfrute de esta web. Si&eacute;ntase libre de participar o crear los temas en este foro.\n\nUn saludo,\nEquipo de %s";

$lang['Support_Us'] = 'Ay&uacute;danos';
$lang['PayPal'] = '<img src="images/paypal.gif" alt="' . $lang['Support_Us'] . '" title="' . $lang['Support_Us'] . '" />';
/* Example of code you may add... replace with your own code.
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

$lang['PrivacyDisclaimer'] = 'Est&aacute; de acuerdo con que sus datos personales sean tratados con la ley actual que hay en el pa&iacute;s del propietario de la web.<br />';

$lang['ENCODING'] = 'UTF-8';
$lang['DIRECTION'] = 'ltr';
$lang['HEADER_LANG'] = 'es-es';
$lang['HEADER_XML_LANG'] = 'es-es';
$lang['LEFT'] = 'izquierda';
$lang['RIGHT'] = 'derecha';
$lang['DATE_FORMAT'] = 'd F y H:i'; // This should be changed to the default date format for your language, php date() format
$lang['DATE_FORMAT_DATE'] = 'd/m/Y';
$lang['DATE_FORMAT_TIME'] = 'H:i';
$lang['DATE_FORMAT_MG'] = 'd/m/Y - H:i';
$lang['DATE_FORMAT_VF'] = 'd M Y';
$lang['DATE_FORMAT_BIRTHDAY'] = 'd F Y';
$lang['DATE_FORMAT2'] = 'd F Y'; // This should be changed to the default date format for your language, php date() format
$lang['JOINED_DATE_FORMAT'] = 'F Y'; // Date format of Joined date, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.

$lang['TRANSLATION_INFO'] = '&nbsp;Traducci&oacute;n al Espa&ntilde;ol por <a href="http://www.icyphoenix.es/" target="_blank">Icy Phoenix Espa&ntilde;a</a>';
$lang['TRANSLATION'] = '&nbsp;Traducci&oacute;n al Espa&ntilde;ol por <a href="http://www.icyphoenix.es/" target="_blank">Icy Phoenix Espa&ntilde;a</a>';

?>