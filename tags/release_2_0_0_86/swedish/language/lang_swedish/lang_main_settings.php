<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_main_settings.php 96 2009-04-27 16:48:19Z Mighty Gorgon $
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
$lang['Default_META_Description'] = 'Icy Phoenix är ett mycket anpassningsbart CMS baserad på phpBB som gör att du kan skapa en dynamisk webbplats med många funktioner för att driva webb communities.';
$lang['Default_META_Title'] = 'Icy Phoenix';
$lang['Default_META_Author'] = 'Mighty Gorgon And Icy Phoenix Staff :: http://www.icyphoenix.com/';
$lang['Default_META_Copyright'] = '(c) 2001-' . date('Y', time()) . ' Mighty Gorgon';

$lang['REGISTER_MESSAGE'] = '';

$lang['Welcome_Message'] = 'Välkommen till <span class="topic_glo">Icy Phoenix</span><br />';
$lang['register_pm_subject'] = 'Välkommen till %s';
$lang['register_pm'] = "Hej!\n\nVälkommen till %s.\n\nVi hoppas att du ska njuta av din tid på denna webbplats!\n\nDu är välkommen att ansluta dig och dela med andra eller starta en egen diskussion!\n\nNjut!\n [b]%s[/b] Personal";

$lang['Support_Us'] = 'Stöd oss';
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

$lang['PrivacyDisclaimer'] = 'Du samtycker särskilt till att dina personuppgifter kommer att behandlas i förhållande till gällande lagstiftning i ägarens land.<br />';

$lang['ENCODING'] = 'UTF-8';
$lang['DIRECTION'] = 'ltr';
$lang['USER_LANG'] = 'sv-se';
$lang['HEADER_LANG'] = 'sv-se';
$lang['HEADER_XML_LANG'] = 'sv-se';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] = 'd F y H:i'; // This should be changed to the default date format for your language, php date() format
$lang['DATE_FORMAT_DATE'] = 'Y/m/d';
$lang['DATE_FORMAT_TIME'] = 'H.i';
$lang['DATE_FORMAT_MG'] = 'Y/m/d - H:i';
$lang['DATE_FORMAT_CHAT'] = 'Y/m/d - H.i.s';
$lang['DATE_FORMAT_VF'] = 'd M Y';
$lang['DATE_FORMAT_DATE_JQUI_JQ'] = 'yy/mm/dd'; // You can only use one of these three formats: dd/mm/yy, mm/dd/yy, yy/mm/dd
$lang['DATE_FORMAT_TIME_JQUI_JQ'] = 'hh:ss';
$lang['DATE_FORMAT_DATE_JQUI_PHP'] = 'Y/m/d'; // You can only use one of these three formats: d/m/Y, m/d/Y, Y/m/d
$lang['DATE_FORMAT_TIME_JQUI_PHP'] = 'H.i';
$lang['DATE_FORMAT_DATE_MYSQL_PHP'] = 'ymd'; // You can only use one of these three formats: dmy, mdy, ymd (this is used to convert dates from MySQL and PHP and vice versa, all dates are with leading zeroes)
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

$lang['TRANSLATION_INFO'] = '';
$lang['TRANSLATION'] = '';

?>