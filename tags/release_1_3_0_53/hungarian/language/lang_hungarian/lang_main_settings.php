<?php
/**
*
* @package Icy Phoenix
* @version $Id: lang_admin.php 110 2009-07-14 08:09:47Z Mighty Gorgon $
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

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array (
  'Index' => 'Icy Phoenix',
  'Default_META_Keywords' => 'phpbb, forum, icy phoenix, icyphoenix, icy, phoenix, php, portal, cms, premodded, community, open source, mods, templates',
  'Default_META_Description' => 'Az Icy Phoenix egy teljesen személyre szabható CMS phpBB alapokon. Egyszer¿en készíthet¿ vele olyan dinamikos portál, mely minden webes közösség igényét ki tudja elégíteni.',
  'Default_META_Title' => 'Mandriva Linux',
  'Default_META_Author' => 'Mighty Gorgon és az Icy Phoenix Staff :: http://www.icyphoenix.com/',
  'Default_META_Copyright' => '(c) 2001-' . date('Y', time()) . ' Mighty Gorgon',
  'REGISTER_MESSAGE' => '',
  'Welcome_Message' => 'Üdvözöl az <span class="topic_glo">Icy Phoenix</span><br />',
  'register_pm_subject' => 'Üdvözlünk %s',
  'register_pm' => 'Helló!<br /><br />Üdvözöljük %s. <br /><br />Örülünk, hogy csatlakoztál a Mandriva Közösséghez! <br /><br />Csatlakozz bátran és oszd meg másokkal véleményed!<br /><br />~Sok sikert!<br />&bull; %s &bull; A fõnökség',
  'Support_Us' => 'Támogass minket',
  'PayPal' => '
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_s-xclick" />
  <input type="image" src="images/paypal.gif" name="submit" alt="' . $lang['Support_Us'] . '" style="border-width:0px;" />
  <input type="hidden" name="encrypted" value="" />
</form>
',
  'OwnerSiteOwner' => 'Mighty Gorgon',
  'OwnerSite' => 'Icy Phoenix',
  'OwnerCompany' => 'Icy Phoenix',
  'OwnerDetails' => 'Icy Phoenix',
  'OwnerAdrress' => 'Italy',
  'OwnerServer' => 'Icy Phoenix',
  'PrivacyDisclaimer' => 'El kell fogadnod, hogy a személyes adataid védelmérõl az oldal tulajdonosának orszának törvényei szerint fognak gondoskodni.<br />',
  'ENCODING' => 'ISO-8859-2',
  'ENCODING_ALT' => 'UTF-8',
  'DIRECTION' => 'ltr',
  'HEADER_LANG' => 'hu-hu',
  'HEADER_XML_LANG' => 'hu-hu',
  'LEFT' => 'bal',
  'RIGHT' => 'jobb',
  'DATE_FORMAT' => 'y F d H:i',  // This should be changed to the default date format for your language, php date() format
  'DATE_FORMAT_MG' => 'Y/m/d - H:i',
  'DATE_FORMAT_VF' => 'Y M d',
  'DATE_FORMAT_BIRTHDAY' => 'Y F d',
  'DATE_FORMAT2' => 'Y F d', // This should be changed to the default date format for your language, php date() format
  'JOINED_DATE_FORMAT' => 'Y F',  // Date format of Joined date, php date() format
  'TRANSLATION_INFO' => 'Fordította: <a href="http://mandrivalinux.hu">Gergely Lónyai</a>',
  'TRANSLATION' => 'A fordítás a <a href="http://mandrivalinux.hu" target="_blank" class="copyright">Mandriva Linux</a> gondozásában készült. Kérjük észrevételeidet küld el a fordító címére, vagy a a href="http://mandrivalinux.hu" target="_blank">közösségi oldalunkra</a>.'
))

?>
