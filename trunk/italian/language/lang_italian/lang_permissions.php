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
	'ROLE_PLUGINS_FULL' => 'Accesso Completo',
	'ROLE_PLUGINS_FULL_DESCRIPTION' => 'Accesso completo a tutte le funzioni dei PLUGINS. Non raccomandato per utenti normali.',
	'ROLE_PLUGINS_STANDARD' => 'Accesso Standard',
	'ROLE_PLUGINS_STANDARD_DESCRIPTION' => 'Accesso alle funzioni pi&ugrave; comuni dei PLUGINS.',
	'ROLE_PLUGINS_NOACCESS' => 'Nessun Accesso',
	'ROLE_PLUGINS_NOACCES_DESCRIPTIONS' => 'Nessun accesso ai PLUGINS.',
	// ROLES - END

	)
);

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat' => array(
		'actions' => 'Azioni',
		'blocks' => 'Blocchi',
		'cms' => 'CMS',
		'content' => 'Contenuti',
		'forums' => 'Forum',
		'layouts' => 'Pagine',
		'misc' => 'Misti',
		'permissions' => 'Permessi',
		'plugins_actions' => 'Azioni Plugins',
		'pm' => 'Messaggi privati',
		'polls' => 'Sondaggi',
		'post' => 'Messaggio',
		'post_actions' => 'Azioni messaggio',
		'posting' => 'Inserire',
		'profile' => 'Profilo',
		'settings' => 'Impostazioni',
		'topic_actions' => 'Azioni argomento',
		'user_group' => 'Utenti &amp; Gruppi',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type' => array(
		'a_' => 'Permessi di amministrazione',
		'cms_' => 'Permessi CMS',
		'f_' => 'Permessi forum',
		'm_' => 'Permessi moderatore',
		'pl_' => 'Permessi plugins',
		'u_' => 'Permessi utente',
		'global' => array(
			'm_' => 'Permessi moderatore globale',
		),
	),

	)
);

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board' => array('lang' => 'Pu&ograve; modificare impostazioni forum/controllare aggiornamenti', 'cat' => 'settings'),
	'acl_a_server' => array('lang' => 'Pu&ograve; modificare impostazioni server/communicazione', 'cat' => 'settings'),

	'acl_a_user' => array('lang' => 'Pu&ograve; gestire utenti<br /><em>Comprende anche la possibilit&agrave; di vedere quale browser usa nella lista degli utenti online.</em>', 'cat' => 'user_group'),
	'acl_a_group' => array('lang' => 'Pu&ograve; gestire gruppi', 'cat' => 'user_group'),

	'acl_a_modules' => array('lang' => 'Pu&ograve; gestire moduli', 'cat' => 'permissions'),
	'acl_a_viewauth' => array('lang' => 'Pu&ograve; vedere le maschere permessi', 'cat' => 'permissions'),
	'acl_a_authgroups' => array('lang' => 'Pu&ograve; modificare permessi gruppi individuali', 'cat' => 'permissions'),
	'acl_a_authusers' => array('lang' => 'Pu&ograve; modificare permessi utenti individuali', 'cat' => 'permissions'),
	'acl_a_fauth' => array('lang' => 'Pu&ograve; modificare la classe permessi forum', 'cat' => 'permissions'),
	'acl_a_mauth' => array('lang' => 'Pu&ograve; modificare la classe permessi moderatori', 'cat' => 'permissions'),
	'acl_a_aauth' => array('lang' => 'Pu&ograve; modificare la classe permessi amministrazione', 'cat' => 'permissions'),
	'acl_a_uauth' => array('lang' => 'Pu&ograve; modificare la classe permessi utente', 'cat' => 'permissions'),
	'acl_a_roles' => array('lang' => 'Pu&ograve; gestire ruoli', 'cat' => 'permissions'),
	)
);

// CMS Permissions
$lang = array_merge($lang, array(
	'acl_cms_view' => array('lang' => 'Pu&ograve; visualizzare la gestione del CMS', 'cat' => 'cms'),
	'acl_cms_edit' => array('lang' => 'Pu&ograve; modificare le impostazioni del CMS', 'cat' => 'cms'),

	'acl_cms_l_add' => array('lang' => 'Pu&ograve; aggiungere pagine CMS', 'cat' => 'layouts'),
	'acl_cms_l_edit' => array('lang' => 'Pu&ograve; modificare pagine CMS', 'cat' => 'layouts'),
	'acl_cms_l_delete' => array('lang' => 'Pu&ograve; eliminare pagine CMS', 'cat' => 'layouts'),

	'acl_cms_b_add' => array('lang' => 'Pu&ograve; aggiungere blocchi nelle pagine CMS', 'cat' => 'blocks'),
	'acl_cms_b_edit' => array('lang' => 'Pu&ograve; modificare blocchi nelle pagine CMS', 'cat' => 'blocks'),
	'acl_cms_b_delete' => array('lang' => 'Pu&ograve; eliminare blocchi nelle pagine CMS', 'cat' => 'blocks'),
	)
);

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_html' => array('lang' => 'Pu&ograve; inserire codice HTML nei messaggi', 'cat' => 'post'),

	'acl_f_topicdelete' => array('lang' => 'Pu&ograve; cancellare argomenti', 'cat' => 'actions'),
	)
);

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_topicdelete' => array('lang' => 'Pu&ograve; eliminare argomenti', 'cat' => 'topic_actions'),
	)
);

// Plugins Permissions
$lang = array_merge($lang, array(
	'acl_pl_input' => array('lang' => 'Pu&ograve; inserire contenuti nei Plugins', 'cat' => 'plugins_actions'),
	'acl_pl_edit' => array('lang' => 'Pu&ograve; modificare contenuti nei Plugins', 'cat' => 'plugins_actions'),
	'acl_pl_delete' => array('lang' => 'Pu&ograve; eliminare contenuti nei Plugins', 'cat' => 'plugins_actions'),
	)
);

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_html' => array('lang' => 'Pu&ograve; inserire codice HTML nei messaggi', 'cat' => 'post'),
	)
);

?>