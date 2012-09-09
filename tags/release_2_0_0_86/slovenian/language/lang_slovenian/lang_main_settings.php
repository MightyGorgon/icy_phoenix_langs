<!-- TemplateBeginEditable name="EditRegion1" -->
<?php
/**
*
* @package bistly
* @version $Id: lang_main_settings.php 86 2011-08-30 16:44:23Z bistly $
* @copyright (c) 2011 bistly
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* bistly
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
$lang['Default_META_Copyright'] = '(c) 2001-' . gmdate('Y') . ' Mighty Gorgon';
$lang['Extra_Meta'] = '';

$lang['REGISTER_MESSAGE'] = '';

$lang['Welcome_Message'] = 'Willkommen na Spletno stran <span class="topic_glo">Icy Phoenix</span><br />';
$lang['register_pm_subject'] = 'Willkommen na Spletno stran %s';
$lang['register_pm'] = "\nHvala ker ste postali clan/ica portala: %s.\n\n\nUpam,da vam bo forum tako v pomoc kot zabavo.Sicer je zunej cela poplava forumov,ampak ce ga imajo vsi,ga mamo lahko tudi mi.\n\nVeseli bomo vaših prispevkov,komentarjev in nasploh vašega sodelovanja.Postavljajte vprašanja na tematiko,ki vas zanima,delite vaše izkušnje\n\nNaprošamo vas,da si preberete naš:[url=http://www.tvojaSpletnastran.com[/url] \n\nZaželeno je,da uporabniki foruma v svojo prvo objavo na forumu vkljucijo kratko osebno predstavitev,ce vam ni odvec...! [url=http://www.tvojaSpletnastran.com[/url] \n\nProsimo pošljite link svojim prijateljem in znancem, da se nam bodo lahko tudi oni pridružili.
. \n\n\nŽelimo vam veliko zabave in objav na spletnih straneh.\n\nLep pozdrav,\n%s";

$lang['Support_Us'] = 'Podprite nas';
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
$lang['PrivacyDisclaimer'] = 'Ne misli da si dober ce se najboljši med najslabšimi! .<br />';

$lang['ENCODING'] = 'UTF-8';
$lang['DIRECTION'] = 'ltr';
$lang['USER_LANG'] = 'de-de';
$lang['HEADER_LANG'] = 'de-de';
$lang['HEADER_LANG_XML'] = 'de-de';
$lang['HEADER_LANG_JQUERY'] = 'de-DE';
$lang['LEFT'] = 'links';
$lang['RIGHT'] = 'rechts';
$lang['DATE_FORMAT'] = 'd F y H:i'; // Dies sollte in das Standard Datums-Format deiner Sprache geändert werden, php date() format
$lang['DATE_FORMAT_DATE'] = 'd.m.Y';
$lang['DATE_FORMAT_TIME'] = 'H:i';
$lang['DATE_FORMAT_MG'] = 'd.m.Y - H:i';
$lang['DATE_FORMAT_CHAT'] = 'd.m.Y - H:i:s';
$lang['DATE_FORMAT_VF'] = 'd M Y';
$lang['DATE_FORMAT_DATE_JQUI_JQ'] = 'dd.mm.yy'; // You can only use one of these three formats: dd/mm/yy, mm/dd/yy, yy/mm/dd
$lang['DATE_FORMAT_TIME_JQUI_JQ'] = 'hh:ss';
$lang['DATE_FORMAT_DATE_JQUI_PHP'] = 'd.m.Y'; // You can only use one of these three formats: d/m/Y, m/d/Y, Y/m/d
$lang['DATE_FORMAT_TIME_JQUI_PHP'] = 'H.i';
$lang['DATE_FORMAT_DATE_MYSQL_PHP'] = 'ymd'; // You can only use one of these three formats: dmy, mdy, ymd (this is used to convert dates from MySQL and PHP and vice versa, all dates are with leading zeroes)
$lang['DATE_FORMAT_BIRTHDAY'] = 'd. F Y';
$lang['DATE_FORMAT_CALENDAR'] = 'd.m.Y'; // Dies sollte in das Standard Datums-Format deiner Sprache geändert werden, php date() format
$lang['JOINED_DATE_FORMAT'] = 'F Y'; // Datums-Format der Anmeldung, php date() format
$lang['NUMBER_FORMAT_DECIMALS'] = 0;
$lang['NUMBER_FORMAT_DECIMALS_SEP'] = '.';
$lang['NUMBER_FORMAT_THOUSANDS_SEP'] = ',';
$lang['NUMBER_FORMAT_DATE_SEP'] = '/';
$lang['NUMBER_FORMAT_TIME_SEP'] = ':';

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION_INFO'] = 'Slovenski prevod:by bistly<a href="mailto:bistly@mail.com" onclick="this.target=\'_blank\'">bistly@mail.com</a>';
$lang['TRANSLATION'] = '';

?>
<!-- TemplateEndEditable -->