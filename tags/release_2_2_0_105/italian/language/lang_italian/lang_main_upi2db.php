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
* Antonio Mercurio (roland@phpbbplus.it) www.phpbbplus.it
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

$lang = array_merge($lang, array(
	'Search_no_new' => 'Nessun nuovo messaggio dall\'ultima visita',
	'UPI2DB_UNREAD_POSTS' => 'Messaggi non letti',
	'UPI2DB_EDITED_POSTS' => 'Messaggi modificati',
	'UPI2DB_MARKED_POSTS' => 'Contrassegnati come non letti',
	'UPI2DB_PERMANENT_POSTS' => 'Contrassegnati come permanentemente letti',
	'Posts' => 'Messaggi',
	'Unreaded_post' => 'Messaggio non letto',
	'New_edited_post' => 'Messaggio modificato',
	'New_edited_posts' => 'Messaggi modificati',
	'Unreaded_posts' => 'Messaggi non letti',
	'upi2db_post_edit' => 'Modificato',
	'upi2db_post_new' => 'Nuovo',
	'upi2db_post_and' => ' &amp; ',
	'upi2db_always_read' => 'Contrassegna l\'argomento come permanentemente letto',
	'upi2db_always_read_unset' => 'Togli il contrassegno di permanentemente letto',
	'upi2db_always_read_cant_set' => 'L\'argomento non pu&ograve; essere impostato come permanentemente letto',
	'upi2db_always_read_no_more' => 'Non sei autorizzato ad impostare altri argomenti come permanentementi letti.',
	'upi2db_always_read_is_set' => 'L\'argomento &egrave; stato contrassegnato come permanentemente letto',
	'upi2db_always_read_is_unset' => 'L\'argomento non &egrave; pi&ugrave; contrassegnato come permanentemente letto',
	'no_always_read' => 'Rimuovi il contrassegno di permanentemente letto',
	'x_always_read' => 'Visualizza come argomenti permanentemente letti ',
	'upi2db_which_system' => 'Quale sistema vuoi usare per i nuovi messaggi?',
	'upi2db_which_system_explain' => 'Informazioni dettagliate sui diversi sistemi si trovano nelle FAQ.',
	'cookie_system' => 'Sistema Cookie',
	'upi2db_system' => 'Sistema UPI2DB',
	'upi2db_mark_post' => 'Contrassegna questo messaggio',
	'upi2db_unmark_post' => 'Togli il contrassegno a questo messaggo',
	'upi2db_post_cant_mark' => 'Questo messaggio non pu&ograve; essere contrassegnato.',
	'upi2db_post_marked' => 'Messaggio contrassegnato.',
	'upi2db_post_unmarked' => 'Rimosso il contrassegno.',
	'upi2db_post_cant_mark' => 'Non sei autorizzato ad impostare ulteriori contrassegni.',
	'always_read_icon' => 'Permanentemente Letto',
	'upi2db_always_read_forum_short' => 'Contrassegna forum permanentemente letto',
	'upi2db_always_read_forum' => 'Contrassegna questo forum come permanentemente letto',
	'upi2db_always_read_forum_unset_short' => 'Rimuovi contrassegno permanentemente letto',
	'upi2db_always_read_forum_unset' => 'Rimuovi da questo forum il contrassegno di permanentemente letto',
	'upi2db_forum_is_always_read' => 'Questo forum &egrave; contrassegnato come permanentemente letto',
	'upi2db_forum_isnt_always_read' => 'Il contrassegno di permanentemente letto &egrave; stato rimosso da questo forum',
	'upi2db_cat_cant_mark_always_read' => 'Le categorie non possono essere impostate come permanentemente lette',
	'upi2db_new_word' => 'Contrassegno speciale per i nuovi messaggi?',
	'upi2db_new_word_explain' => 'Un argomento con nuovi interventi deve essere contrassegnato con "' . $lang['upi2db_post_new'] . ':" ?' ,
	'upi2db_edit_word' => 'Contrassegno speciale per messaggi modificati?',
	'upi2db_edit_word_explain' => 'Un argomento con nuovi interventi deve essere contrassegnato con "' . $lang['upi2db_post_edit'] . ':"',
	'upi2db_unread_color' => 'Colora il titolo dell\'argomento quando ci sono nuovi messaggi',
	'upi2db_unread_disp_posts' => 'Messaggi nuovi o modificati',
	'Click_return_search' => 'Clicca %sQUI%s per tornare all\'ultima pagina visitata',
	'Click_return_portal' => 'CLicca %sQUI%s per tornare alla Home Page',
	'mark_edit' => 'Contrassegna il messaggio come non letto',
	'upi2db_news_is_mark_unread' => 'News contrassegnate come non lette',
	'upi2db_news_is_mark_read' => 'News contrassegnate come lette',
	'upi2db_mark_news_read' => 'News contrassegnata come letta',
	'upi2db_mark_news_unread' => 'News contrassegnata come non letta',
	'upi2db_search_mark_read' => 'MAR',
	'upi2db_submit_mark_read' => 'Contrassegna come letto',
	'upi2db_submit_topic_mark_read' => 'Gli argomenti selezionati sono stati contrassegnati come letti',

	'upi2db_mark_post_unread' => 'Contrassegna questo messaggio come non letto',
	'upi2db_mark_post_unread_cant' => 'Questo messaggio non pu&ograve; essere contrassegnato come non letto.',
	'upi2db_mark_post_is_unread' => 'Il messaggio &egrave; stato contrassegnato come non letto.',

	'upi2db_first_use_txt' => 'Da questo momento puoi utilizzare il sistema UPI2DB. Ulteriori dettagli si trovano nelle FAQ.',

	'upi2db_u' => 'U',
	'upi2db_m' => 'M',
	'upi2db_p' => 'P',
	'upi2db_unread' => 'Messaggi Non Letti',
	'upi2db_marked' => 'Messaggi Contrassegnati',
	'upi2db_perm_read' => 'Permanentemente Letti',
	)
);

?>