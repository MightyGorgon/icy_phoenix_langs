<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

	// ROLES - BEGIN
	'ROLE_CMS_CONTENT_MANAGER' => 'Content Manager',
	'ROLE_CMS_CONTENT_MANAGER_DESCRIPTION' => 'Permessi completi nel CMS.',
	'ROLE_CMS_REVIEWER' => 'Revisore',
	'ROLE_CMS_REVIEWER_DESCRIPTION' => 'Permessi per aggiungere e modificare pagine e blocchi, ma non per rimuoverli.',
	'ROLE_CMS_PUBLISHER' => 'Publisher',
	'ROLE_CMS_PUBLISHER_DESCRIPTION' => 'Permessi per aggiungere contenuti.',
	'ROLE_CMS_USER' => 'Utente',
	'ROLE_CMS_USER_DESCRIPTION' => 'Permessi per visualizzare contenuti.',
	'ROLE_CMS_GUEST' => 'Ospite',
	'ROLE_CMS_GUEST_DESCRIPTION' => 'Nessun permesso specifico.',
	'ROLE_ADMIN_FULL' => 'Full Admin',
	'ROLE_ADMIN_FULL_DESCRIPTION' => 'Accesso completo a tutte le funzioni di amministrazione. Non raccomandato per tutti gli amministratori.',
	'ROLE_ADMIN_STANDARD' => 'Standard Admin',
	'ROLE_ADMIN_STANDARD_DESCRIPTION' => 'Accesso a funzioni standard di amministrazione, ma non a funzioni di sistema.',
	'ROLE_MOD_FULL' => 'Full Moderator',
	'ROLE_MOD_FULL_DESCRIPTION' => 'Accesso a tutti gli strumenti di moderazione.',
	'ROLE_MOD_STANDARD' => 'Standard Moderator',
	'ROLE_MOD_STANDARD_DESCRIPTION' => 'Accesso alla maggior parte degli strumenti di moderazione.',
	'ROLE_MOD_SIMPLE' => 'Simple Moderator',
	'ROLE_MOD_SIMPLE_DESCRIPTION' => 'Accesso soltanto a funzioni di moderazione di base.',
	'ROLE_USER_FULL' => 'Accesso Completo',
	'ROLE_USER_FULL_DESCRIPTION' => 'Accesso a tutte le funzioni disponibili per gli utenti.',
	'ROLE_USER_STANDARD' => 'Accesso Standard',
	'ROLE_USER_STANDARD_DESCRIPTION' => 'Accesso alle sole funzioni standard per gli utenti.',
	'ROLE_USER_LIMITED' => 'Accesso Limitato',
	'ROLE_USER_LIMITED_DESCRIPTION' => 'Accesso limitato solo ad alcune funzioni disponibili per gli utenti.',
	'ROLE_FORUM_FULL' => 'Accesso Completo',
	'ROLE_FORUM_FULL_DESCRIPTION' => 'Accesso completo a tutte le funzioni dei forum. Non raccomandato per utenti normali.',
	'ROLE_FORUM_STANDARD' => 'Accesso Standard',
	'ROLE_FORUM_STANDARD_DESCRIPTION' => 'Accesso alle funzioni pi&ugrave; comuni dei forum.',
	'ROLE_FORUM_NOACCESS' => 'Nessun Accesso',
	'ROLE_FORUM_NOACCES_DESCRIPTIONS' => 'Nessun accesso ai forum.',
	// ROLES - END

	)
);

?>