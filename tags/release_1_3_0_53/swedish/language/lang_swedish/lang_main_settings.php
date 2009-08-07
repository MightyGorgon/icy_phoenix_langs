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
$lang['Default_META_Description'] = 'Icy Phoenix �r ett mycket anpassningsbart CMS baserad p� phpBB som g�r att du kan skapa en dynamisk webbplats med m�nga funktioner f�r att driva webb communities.';
$lang['Default_META_Title'] = 'Icy Phoenix';
$lang['Default_META_Author'] = 'Mighty Gorgon And Icy Phoenix Staff :: http://www.icyphoenix.com/';
$lang['Default_META_Copyright'] = '(c) 2001-' . date('Y', time()) . ' Mighty Gorgon';

$lang['REGISTER_MESSAGE'] = '';

$lang['Welcome_Message'] = 'V�lkommen till <span class="topic_glo">Icy Phoenix</span><br />';
$lang['register_pm_subject'] = 'V�lkommen till %s';
$lang['register_pm'] = "Hej!\n\nV�lkommen till %s.\n\nVi hoppas att du ska njuta av din tid p� denna webbplats!\n\nDu �r v�lkommen att ansluta dig och dela med andra eller starta en egen diskussion!\n\n~Njut!\n � [b]%s[/b] � Personal";

$lang['Support_Us'] = 'St�d oss';
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

$lang['PrivacyDisclaimer'] = 'Du samtycker s�rskilt till att dina personuppgifter kommer att behandlas i f�rh�llande till g�llande lagstiftning i �garens land.<br />';

$lang['ENCODING'] = 'iso-8859-1';
//$lang['ENCODING'] = 'utf8';
$lang['ENCODING_ALT'] = 'utf8';
$lang['DIRECTION'] = 'ltr';
$lang['HEADER_LANG'] = 'sv-se';
$lang['HEADER_XML_LANG'] = 'sv-se';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
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