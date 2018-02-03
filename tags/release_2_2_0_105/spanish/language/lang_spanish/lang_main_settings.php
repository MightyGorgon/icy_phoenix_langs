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
$lang['Default_META_Description'] = 'Icy Phoenix es un CMS altamente personalizable basado en phpBB que le permite crear un sitio dinámico con un montón de características para mantener comunidades web';
$lang['Default_META_Title'] = 'Icy Phoenix';
$lang['Default_META_Author'] = 'Mighty Gorgon y Equipo de Icy Phoenix :: http://www.icyphoenix.com/';
$lang['Default_META_Copyright'] = '(c) 2001-' . gmdate('Y') . ' Mighty Gorgon';
$lang['Extra_Meta'] = '';

$lang['REGISTER_MESSAGE'] = '';

$lang['Welcome_Message'] = 'Bienvenido a <span class="topic_glo">Icy Phoenix</span><br />';
$lang['register_pm_subject'] = 'Bienvenido a %s';
$lang['register_pm'] = "Hola!\n\nBienvenido/a a %s.\n\nEsperemos que disfrute de este sitio web. Siéntase libre de participar o crear temas en este foro.\n\nUn saludo,\nEl Equipo de %s";

$lang['Support_Us'] = 'Apóyanos';
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

$lang['PrivacyDisclaimer'] = 'Está de acuerdo con que sus datos personales sean tratados con la ley actual que hay en el país del propietario de la web.<br />';

$lang['ENCODING'] = 'UTF-8';
$lang['DIRECTION'] = 'ltr';
$lang['USER_LANG'] = 'es-es';
$lang['HEADER_LANG'] = 'es-es';
$lang['HEADER_LANG_XML'] = 'es-es';
$lang['HEADER_LANG_JQUERY'] = 'es-ES';
$lang['HEADER_OG_LANG'] = 'es_ES';
$lang['LEFT'] = 'izquierda';
$lang['RIGHT'] = 'derecha';
$lang['DATE_FORMAT'] = 'd F y H:i'; // This should be changed to the default date format for your language, php date() format
$lang['DATE_FORMAT_DATE'] = 'd/m/Y';
$lang['DATE_FORMAT_TIME'] = 'H.i';
$lang['DATE_FORMAT_MG'] = 'd/m/Y - H:i';
$lang['DATE_FORMAT_CHAT'] = 'd/m/Y - H.i.s';
$lang['DATE_FORMAT_VF'] = 'd M Y';
$lang['DATE_FORMAT_DATE_JQUI_JQ'] = 'dd/mm/yy'; // You can only use one of these three formats: dd/mm/yy, mm/dd/yy, yy/mm/dd
$lang['DATE_FORMAT_TIME_JQUI_JQ'] = 'hh:ss';
$lang['DATE_FORMAT_DATE_JQUI_PHP'] = 'd/m/Y'; // You can only use one of these three formats: d/m/Y, m/d/Y, Y/m/d
$lang['DATE_FORMAT_TIME_JQUI_PHP'] = 'H.i';
$lang['DATE_FORMAT_DATE_MYSQL_PHP'] = 'dmy'; // You can only use one of these three formats: dmy, mdy, ymd (this is used to convert dates from MySQL and PHP and vice versa, all dates are with leading zeroes)
$lang['DATE_FORMAT_BIRTHDAY'] = 'd F Y';
$lang['DATE_FORMAT_CALENDAR'] = 'd F Y'; // This should be changed to the default date format for your language, php date() format
$lang['JOINED_DATE_FORMAT'] = 'F Y'; // Date format of Joined date, php date() format
$lang['NUMBER_FORMAT_DECIMALS'] = 0;
$lang['NUMBER_FORMAT_DECIMALS_SEP'] = '.';
$lang['NUMBER_FORMAT_THOUSANDS_SEP'] = ',';
$lang['NUMBER_FORMAT_DATE_SEP'] = '/';
$lang['NUMBER_FORMAT_TIME_SEP'] = ':';

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.

$lang['TRANSLATION_INFO'] = '&nbsp;Traducción al Español por <a href="http://www.foroxerbar.com/" target="_blank">xerbar</a>';
$lang['TRANSLATION'] = '&nbsp;Traducción al Español por <a href="http://www.foroxerbar.com/" target="_blank">xerbar</a>';

?>