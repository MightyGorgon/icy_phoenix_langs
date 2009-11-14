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
  'n_title' => 'News Administration',
  'n_main_title' => 'News Items',
  'n_main_title_explain' => 'From here you can manage the news items.<br /><br />If you wish to change the display status of any particular news item then you will need to edit it.',
  'n_config_title' => 'News Configuration',
  'n_config_title_explain' => 'From here you can alter the settings for News.',
  'n_config_updated' => 'News Configuration updated.',
  'n_add_page_title' => 'Add News Item',
  'n_add_page_title_explain' => 'Use the form below to create a new news item.',
  'n_add_header' => 'Add new News item',
  'n_news_item_added' => 'News Item added.',
  'n_edit_page_title' => 'Edit News Item',
  'n_edit_page_title_explain' => 'Using the form below you can edit the news item.',
  'n_edit_header' => 'Edit existing news item',
  'n_news_delete' => 'Delete News Item.',
  'n_news_delete_explain' => 'Using the form below you can delete a news item.',
  'n_confirm_delete_news' => 'Are you sure you wish to delete this news item?',
  'n_news_item' => 'News Item',
  'n_news_item_display' => 'Display This Item?',
  'n_news_date' => 'News Date',
  'n_create_item' => 'Create New Item',
  'n_create_item_null' => 'Can\'t create a news item with no news text.',
  'n_news_smilies' => 'Enable smileys in this message?',
  'n_smilies_button' => 'Smileys',
  'xs_no_news' => 'There are no news items.',
  'xs_news_invalid_date' => 'You have entered an Invalid Date, the format is: dd/mm/yyyy',
  'n_news_updated' => 'The News item has been updated',
  'n_click_return_newslist' => 'Kattints %side%s to return to the News List',
  'n_xml_title' => 'Ticker Title',
  'n_xml_title_explain' => 'From here you can manage the News Tickers.',
  'n_xml_title_explain_0' => 'If the ticker master switch (status shown above) is set to \'Off\' then altering the display status of any ticker is pointless as it will not be shown as the master setting overrides those settings shown below.<br /><br />However, if the switch is on and you wish to alter the display status of any ticker then you will need to edit it.',
  'n_xml_sub_title' => 'News Tickers.',
  'n_xml_master_switch' => 'The Ticker Master Switch is: <b>%s</b> which means News Tickers <b>%s</b> be displayed.',
  'n_xml_ms_will' => 'will',
  'n_xml_ms_not' => 'will not',
  'xs_news_ticker_settings' => 'Settings for this News Ticker',
  'xs_news_ticker_title' => 'Title for this news ticker:',
  'xs_news_ticker_title_explain' => 'Used in the XML News Feed list to identify each news feed.',
  'xs_news_ticker_show' => 'Show this News Ticker?',
  'xs_news_ticker_feed' => 'XML News Feed',
  'xs_news_ticker_feed_explain' => 'The URL of where the ticker should get the news items to scroll, or the text you wish to scroll.',
  'xs_news_ticker_is_feed' => 'Is this an XML News Feed?',
  'xs_news_ticker_is_feed_explain' => 'If set to \'Yes\' then a valid URL for the feed must be supplied, if set to \'No\' then any text entered into the textarea above will be scrolled.',
  'xs_news_ticker_wh' => 'The Width x Height of the News Ticker.',
  'xs_news_ticker_wh_explain' => 'You may specify the width x height of the news ticker, the defaults are 98% x 20, the width is based on a percentage of the table width while the height is in pixels.',
  'xs_news_ticker_fontsize' => 'Font size for the News Ticker.',
  'xs_news_ticker_fontsize_explain' => 'You may over ride the font size specified in the stylesheet, a setting of 0 (zero) disables this feature.',
  'xs_news_ticker_ss' => 'Scroll Speed',
  'xs_news_ticker_ss_explain' => 'The higher the value the faster the scroll',
  'xs_news_ticker_sd' => 'Scroll Direction',
  'xs_news_left' => 'Left',
  'xs_news_right' => 'Right',
  'n_xml_add_page_title' => 'Add XML News Feed',
  'n_xml_add_page_title_explain' => 'Use the form below to create a new XML News Feed.',
  'n_xml_add_header' => 'Add new XML News Feed',
  'n_xml_news_item_added' => 'News Feed added.',
  'n_xml_edit_page_title' => 'Edit XML News Feed',
  'n_xml_edit_page_title_explain' => 'Using the form below you can edit the XML News Feed.',
  'n_xml_edit_header' => 'Edit existing XML News Feed',
  'n_xml_news_delete' => 'Delete XML News Feed.',
  'n_xml_news_delete_explain' => 'Using the form below you can delete an XML News Feed.',
  'n_xml_confirm_delete_news' => 'Are you sure you wish to delete this news feed?',
  'n_xml_news_item' => 'News Item',
  'n_xml_news_item_display' => 'Display This Item?',
  'n_xml_create_item' => 'Create New Item',
  'n_xml_create_item_null' => 'Can\'t create a News Ticker with no XML Feed URL or text to scroll.',
  'n_xml_no_feeds' => 'There are no XML News Feeds.',
  'n_xml_news_updated' => 'The ticker has been updated',
  'n_xml_click_return_newslist' => 'Kattints %side%s to return to the News Ticker list',
  'n_xml_show' => 'Show',
))
?>