<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/* translation
                           
   Переведено на русский: Мельников Николай(zver) zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
It is translated into Russian: Mel'nikov Nikolay(zver)   zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
                    
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
$lang['Default_META_Description'] = 'Ледяной Феникс настраиваемый CMS на основе PHPBB, которая позволяет создавать динамический сайт с большим количеством функций для общения веб-сообществ. ';
$lang['Default_META_Title'] = 'Icy Phoenix';
$lang['Default_META_Author'] = 'Mighty Gorgon и Icy Phoenix Персонал  :: http://www.icyphoenix.com/';
$lang['Default_META_Copyright'] = '(c) 2001-' . gmdate('Y') . ' Mighty Gorgon';
$lang['Extra_Meta'] = '';

$lang['REGISTER_MESSAGE'] = '';

$lang['Welcome_Message'] = 'Добро пожаловать  <span class="topic_glo">Icy Phoenix</span><br />';
$lang['register_pm_subject'] = 'Добро пожаловать  %s';
$lang['register_pm'] = "Привет !\n\nДобро пожаловать  %s.\n\nНадеемся, вам понравится на этом сайте! \n\nВы можете присоединиться и поделиться с другими или начать свою собственную дискуссию! \n\n~Enjoy!\n » [b]%s[/b] « Staff";

$lang['Support_Us'] = 'Поддержите нас ';
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

$lang['PrivacyDisclaimer'] = 'Мы определенно не соглашаемся, что ваши личные данные будут обрабатываться в отношении действующего законодательства в стране владельца сайта. <br />';

$lang['ENCODING'] = 'ISO-8859-1';
//$lang['ENCODING'] = 'UTF-8';
$lang['ENCODING_ALT'] = 'UTF-8';
$lang['DIRECTION'] = 'ltr';
$lang['HEADER_LANG'] = 'en-gb';
$lang['HEADER_XML_LANG'] = 'en-gb';
$lang['LEFT'] = 'слева ';
$lang['RIGHT'] = 'право ';
$lang['DATE_FORMAT'] = 'd F y H:i'; // This should be changed to the default date format for your language, php date() format
$lang['DATE_FORMAT_MG'] = 'Y/m/d - H:i';
$lang['DATE_FORMAT_VF'] = 'd M Y';
$lang['DATE_FORMAT_BIRTHDAY'] = 'd F Y';
$lang['DATE_FORMAT2'] = 'd F Y'; // This should be changed to the default date format for your language, php date() format
$lang['JOINED_DATE_FORMAT'] = 'F Y'; // Date format of Joined date, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.

$lang['TRANSLATION_INFO'] = '';
$lang['TRANSLATION'] = '';

?>