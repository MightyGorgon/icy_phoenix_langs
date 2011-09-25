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
* @Icy Phoenix is based on phpBB
* @copyright (c) 2008 phpBB Group
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	die('Hacking attempt');
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_PERMISSIONS_EXPLAIN' => '
		<p>I permessi sono molto specifici e raggruppati in quattro sezioni importanti, che sono:</p>

		<h2>Permessi globali</h2>
		<p>Questi sono usati per controllare l\'accesso a livello globale e si applicano all\'intera board. Sono suddivisi in permessi utenti, permessi gruppi, amministratori e moderatori globali.</p>

		<h2>Permessi forum</h2>
		<p>Questi sono usati per controllare l\'accesso a livello di singolo forum. Sono suddivisi in permessi forum, moderatori, permessi forum utenti e permessi forum gruppi.</p>

		<h2>Ruolo permessi</h2>
		<p>Questi sono usati per generare diversi insiemi di permessi per i vari tipi di permesso, che successivamente possono essere assegnati su base di ruolo. I ruoli predefiniti dovrebbero permettere la gestione di board grandi e piccole, in ogni caso all\'interno di ciascuna delle quattro sezioni puoi aggiungere/modificare/eliminare ruoli a seconda delle tue necessit&agrave;.</p>

		<h2>Permessi assegnati</h2>
		<p>Questi servono per visualizzare facilmente i permessi effettivi assegnati a utenti, moderatori (globali e di forum), amministratori o forum.</p>

		<br />

		<p>Per ulteriori informazioni su parametrizzazione e gestione dei permessi sul tuo phpBB3, leggi <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Capitolo 1.5 della Quick Start Guide</a>.</p>
	',

	'ACL_NEVER' => 'Mai',
	'ACL_SET' => 'Imposta permessi',
	'ACL_SET_EXPLAIN' => 'I permessi sono basati su un semplice sistema <samp>SI</samp>/<samp>NO</samp>. Impostare un\'opzione su <samp>MAI</samp>, per un utente o gruppo, esclude ogni altro valore assegnatogli. Se non vuoi assegnare un valore per l\'opzione, per questo utente o gruppo, seleziona <samp>NO</samp>. Se da altre parti sono assegnati valori per queste opzioni saranno usate come preferenza, altrimenti sar&agrave; considerato <samp>MAI</samp>. Ogni oggetto selezionato (con la casella di fronte) copier&agrave; il set permessi che hai definito.',
	'ACL_SETTING' => 'Impostazione',

	'ACL_TYPE_A_' => 'Permessi amministratore',
	'ACL_TYPE_CMS_' => 'Permessi CMS',
	'ACL_TYPE_F_' => 'Permessi forum',
	'ACL_TYPE_M_' => 'Permessi moderatore',
	'ACL_TYPE_PL_' => 'Permessi Plugins',
	'ACL_TYPE_U_' => 'Permessi utente',

	'ACL_TYPE_GLOBAL_A_' => 'Permessi amministratore',
	'ACL_TYPE_GLOBAL_CMS_' => 'Permessi CMS',
	'ACL_TYPE_GLOBAL_M_' => 'Permessi moderatore globale',
	'ACL_TYPE_GLOBAL_PL_' => 'Permessi Plugins',
	'ACL_TYPE_GLOBAL_U_' => 'Permessi utente',
	'ACL_TYPE_LOCAL_CMS_' => 'Permessi CMS',
	'ACL_TYPE_LOCAL_CMSL_' => 'Permessi pagine CMS',
	'ACL_TYPE_LOCAL_CMSLS_' => 'Permessi pagine standard CMS',
	'ACL_TYPE_LOCAL_CMSB_' => 'Permessi blocchi CMS',
	'ACL_TYPE_LOCAL_F_' => 'Permessi forum',
	'ACL_TYPE_LOCAL_M_' => 'Permessi moderatore forum',

	'ACL_NO' => 'No',
	'ACL_VIEW' => 'Visualizza permessi',
	'ACL_VIEW_EXPLAIN' => 'Qui puoi vedere effettivamente quali permessi hanno utente/gruppo. Un quadrato rosso indica che utente/gruppo non ha il permesso, un quadrato verde indica che utente/gruppo ha il permesso.',
	'ACL_YES' => 'S&igrave;',

	'ACP_ADMIN_ROLES' => 'Ruoli Amministratore',
	'ACP_CMS_ROLES' => 'Ruoli CMS',
	'ACP_FORUM_ROLES' => 'Ruoli Forum',
	'ACP_MOD_ROLES' => 'Ruoli Moderatore',
	'ACP_PLUGINS_ROLES' => 'Ruoli Plugins',
	'ACP_USER_ROLES' => 'Ruoli Globali',

	'ACP_ADMINISTRATORS_EXPLAIN' => 'Qui puoi assegnare i permessi amministratore ad utenti o gruppi. Tutti gli utenti con permessi da amministratore possono accedere al pannello di controllo amministratore.',
	'ACP_FORUM_MODERATORS_EXPLAIN' => 'Qui puoi assegnare utenti e gruppi come moderatori di forum. Per assegnare l\'accesso di utenti ai forum, per definire i permessi di moderazione globale o di amministratore, usa la pagina adatta.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN' => 'Qui puoi modificare quali utenti e gruppi possono accedere a quali forum. Per assegnare moderatori o definire amministratori, usa la pagina adatta.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN' => 'Qui puoi assegnare i permessi moderatore globale ad utenti o gruppi. Questi moderatori sono come i normali moderatori, solo che possono accedere a qualsiasi forum della board.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN' => 'Qui puoi assegnare i permessi forum ai gruppi.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN' => 'Qui puoi assegnare i permessi globali ai gruppi - permessi utente, permessi di moderazione globale e permessi amministratore. I permessi utente includono possibilit&agrave; quali l\'uso di avatar, l\'invio di messaggi privati, eccetera; i permessi di moderatore globale quelle di approvare messaggi, gestire argomenti, gestire i ban, eccetera; infine i permessi amministratore quelle di modificare i permessi, definire BBCodes personalizzati, gestire forum, eccetera. I permessi utente individuali dovrebbero essere cambiati in rare occasioni: il metodo consigliato &egrave; di inserire gli utenti in gruppi per poi assegnare i permessi al gruppo.',
	'ACP_ADMIN_ROLES_EXPLAIN' => 'Gestione ruoli per i permessi amministratori. I ruoli sono permessi veri e propri, se cambi un ruolo tutte le figure ai quali &egrave; assegnato subiranno una variazione di permessi.',
	'ACP_CMS_ROLES_EXPLAIN' => 'Gestione ruoli per i permessi CMS. I ruoli sono permessi veri e propri, se cambi un ruolo tutte le figure ai quali &egrave; assegnato subiranno una variazione di permessi.',
	'ACP_FORUM_ROLES_EXPLAIN' => 'Gestione ruoli per i permessi forum. I ruoli sono permessi veri e propri, se cambi un ruolo tutte le figure ai quali &egrave; assegnato subiranno una variazione di permessi.',
	'ACP_MOD_ROLES_EXPLAIN' => 'Gestione ruoli per i permessi moderatori. I ruoli sono permessi veri e propri, se cambi un ruolo tutte le figure ai quali &egrave; assegnato subiranno una variazione di permessi.',
	'ACP_PLUGINS_ROLES_EXPLAIN' => 'Gestione ruoli per i permessi plugins. I ruoli sono permessi veri e propri, se cambi un ruolo tutte le figure ai quali &egrave; assegnato subiranno una variazione di permessi.',
	'ACP_USER_ROLES_EXPLAIN' => 'Gestione ruoli per i permessi utenti. I ruoli sono permessi veri e propri, se cambi un ruolo tutte le figure ai quali &egrave; assegnato subiranno una variazione di permessi.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN' => 'Qui puoi assegnare i permessi forum agli utenti.',
	'ACP_USERS_PERMISSIONS_EXPLAIN' => 'Qui puoi assegnare i permessi globali ai gruppi - permessi utente, permessi di moderazione globale e permessi amministratore. I permessi utente includono possibilit&agrave; quali l\'uso di avatar, l\'invio di messaggi privati, eccetera; i permessi di moderatore globale quelle di approvare messaggi, gestire argomenti, gestire i ban, eccetera; infine i permessi amministratore quelle di modificare i permessi, definire BBCodes personalizzati, gestire forum, eccetera. Per modificare le impostazioni ad un gran numero di utenti, il sistema di Permessi gruppi &egrave; sicuramente da preferire. I permessi utente individuali dovrebbero essere cambiati in rare occasioni: il metodo consigliato &egrave; di inserire gli utenti in gruppi per poi assegnare i permessi al gruppo.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN' => 'Qui puoi vedere i permessi amministratore assegnati agli utenti/gruppi selezionati.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN' => 'Qui puoi vedere i permessi moderatore globale assegnati agli utenti/gruppi selezionati.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN' => 'Qui puoi vedere i permessi forum assegnati agli utenti/gruppi e forum selezionati.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN' => 'Qui puoi vedere i permessi moderatore forum assegnati agli utenti/gruppi e forum selezionati.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN' => 'Qui puoi vedere i permessi utente assegnati agli utenti/gruppi selezionati.',

	'ADD_GROUPS' => 'Aggiungi gruppi',
	'ADD_PERMISSIONS' => 'Aggiungi permessi',
	'ADD_USERS' => 'Aggiungi utenti',
	'ADVANCED_PERMISSIONS' => 'Permessi avanzati',
	'ALL_GROUPS' => 'Seleziona tutti i gruppi',
	'ALL_NEVER' => 'Tutti <samp>MAI</samp>',
	'ALL_NO' => 'Tutti <samp>NO</samp>',
	'ALL_USERS' => 'Seleziona tutti gli utenti',
	'ALL_YES' => 'Tutti <samp>SI</samp>',
	'APPLY_ALL_PERMISSIONS' => 'Applica tutti i permessi',
	'APPLY_PERMISSIONS' => 'Applica i permessi',
	'APPLY_PERMISSIONS_EXPLAIN' => 'Permessi e ruoli definiti per questa figura saranno applicato solo ad essa e a tutte le figure selezionate.',
	'AUTH_UPDATED' => 'I permessi sono stati aggiornati.',

	'CREATE_ROLE' => 'Crea ruolo',
	'CREATE_ROLE_FROM' => 'Copia impostazioni da…',
	'CUSTOM' => 'Personalizzato…',

	'DEFAULT' => 'Predefinito',
	'DELETE_ROLE' => 'Cancella ruolo',
	'DELETE_ROLE_CONFIRM' => 'Sei sicuro di voler rimuovere questo ruolo? Le figure a cui &egrave; assegnato <strong>non</strong> perderanno le loro impostazioni dei permessi.',
	'DISPLAY_ROLE_ITEMS' => 'Visualizza figure che usano questo ruolo',

	'EDIT_PERMISSIONS' => 'Modifica permessi',
	'EDIT_ROLE' => 'Modifica ruolo',

	'GROUPS_NOT_ASSIGNED' => 'Nessun gruppo assegnato a questo ruolo',

	'ITEMS_SELECTED' => 'Elementi selezionati',

	'LOOK_UP_GROUP' => 'Cerca gruppo',
	'LOOK_UP_USER' => 'Cerca utente',
	'LOOK_UP_CMS_L' => 'Seleziona pagina',
	'LOOK_UP_CMS_LS' => 'Seleziona pagina standard',
	'LOOK_UP_CMS_B' => 'Seleziona blocco',

	'MANAGE_GROUPS' => 'Gestione gruppi',
	'MANAGE_USERS' => 'Gestione utenti',

	'NO_AUTH_SETTING_FOUND' => 'Impostazioni permesso non definite.',
	'NO_ROLE_ASSIGNED' => 'Nessun ruolo assegnato…',
	'NO_ROLE_ASSIGNED_EXPLAIN' => 'Impostare questo ruolo non cambia i permessi a destra. Se vuoi cambiare/rimuovere tutti i permessi dovresti usare il collegamento “Tutti <samp>NO</samp>”.',
	'NO_ROLE_AVAILABLE' => 'Nessun ruolo disponibile',
	'NO_ROLE_NAME_SPECIFIED' => 'Devi dare un nome al ruolo.',
	'NO_ROLE_SELECTED' => 'Il ruolo non &egrave; stato trovato.',
	'NO_USER_GROUP_SELECTED' => 'Non hai selezionato alcun utente o gruppo.',

	'ONLY_FORUM_DEFINED' => 'Nella tua selezione hai definito solo forum. Seleziona almeno un utente o gruppo.',

	'PERMISSION_APPLIED_TO_ALL' => 'Permessi e ruoli saranno anche applicati a tutti gli oggetti selezionati',
	'PLUS_SUBFORUMS' => '+Subforum',

	'REMOVE_PERMISSIONS' => 'Rimuovi permessi',
	'REMOVE_ROLE' => 'Rimuovi ruolo',
	'RESULTING_PERMISSION' => 'Permesso risultante',
	'ROLE' => 'Ruolo',
	'ROLE_ADD_SUCCESS' => 'Ruolo aggiunto.',
	'ROLE_ASSIGNED_TO' => 'Utenti/Gruppi assegnati a %s',
	'ROLE_DELETED' => 'Ruolo rimosso.',
	'ROLE_DESCRIPTION' => 'Descrizione ruolo',

	'ROLE_ADMIN_FORUM' => 'Admin forum',
	'ROLE_ADMIN_FULL' => 'Admin globale',
	'ROLE_ADMIN_STANDARD' => 'Admin standard',
	'ROLE_ADMIN_USERGROUP' => 'Admin utenti/gruppi',
	'ROLE_FORUM_BOT' => 'Accesso bot',
	'ROLE_FORUM_FULL' => 'Accesso totale',
	'ROLE_FORUM_LIMITED' => 'Accesso limitato',
	'ROLE_FORUM_LIMITED_POLLS' => 'Accesso limitato + sondaggi',
	'ROLE_FORUM_NOACCESS' => 'Accesso negato',
	'ROLE_FORUM_ONQUEUE' => 'In coda moderatore',
	'ROLE_FORUM_POLLS' => 'Accesso standard + sondaggi',
	'ROLE_FORUM_READONLY' => 'Accesso sola lettura',
	'ROLE_FORUM_STANDARD' => 'Accesso standard',
	'ROLE_MOD_FULL' => 'Moderatore totale',
	'ROLE_MOD_QUEUE' => 'Coda moderatore',
	'ROLE_MOD_SIMPLE' => 'Moderatore semplice',
	'ROLE_MOD_STANDARD' => 'Moderatore standard',
	'ROLE_USER_FULL' => 'Tutte le caratteristiche',
	'ROLE_USER_LIMITED' => 'Caratteristiche limitate',
	'ROLE_USER_NOAVATAR' => 'Niente Avatar',
	'ROLE_USER_NOPM' => 'Niente MP',
	'ROLE_USER_STANDARD' => 'Caratteristiche standard',

	'ROLE_DESCRIPTION_ADMIN_FORUM' => 'Pu&ograve; accedere alla gestione forum e alle impostazioni di permessi forum.',
	'ROLE_DESCRIPTION_ADMIN_FULL' => 'Ha accesso a tutte le funzioni di amministratore della board.<br />Non consigliato.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD' => 'Ha accesso a molte caratteristiche amministratore ma non pu&ograve; usare strumenti server o di sistema.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP' => 'Pu&ograve; gestire gruppi e utenti: pu&ograve; cambiare permessi, impostazioni, gestire ban e gestire livelli.',
	'ROLE_DESCRIPTION_FORUM_BOT' => 'Questo ruolo &egrave; consigliato per bots e spiders.',
	'ROLE_DESCRIPTION_FORUM_FULL' => 'Pu&ograve; usare tutte le caratteristiche forum, compreso l\'invio di annunci e importanti. Pu&ograve; anche ignorare il limite di flood.<br />Non consigliato per utenti normali.',
	'ROLE_DESCRIPTION_FORUM_LIMITED' => 'Pu&ograve; usare alcune caratteristiche forum, ma non pu&ograve; allegare file o usare icone argomenti.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS' => 'Come l\'Accesso limitato ma pu&ograve; anche creare sondaggi.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS' => 'Non pu&ograve; vedere o accedere al forum.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE' => 'Pu&ograve; usare molte caratteristiche forum compresi gli allegati, ma messaggi e argomenti devono essere approvati da un moderatore.',
	'ROLE_DESCRIPTION_FORUM_POLLS' => 'Come l\'accesso standard ma pu&ograve; anche creare sondaggi.',
	'ROLE_DESCRIPTION_FORUM_READONLY' => 'Pu&ograve; leggere il forum ma non pu&ograve; creare nuovi argomenti o rispondere ai messaggi.',
	'ROLE_DESCRIPTION_FORUM_STANDARD' => 'Pu&ograve; usare molte caratteristiche forum compresi gli allegati e la cancellazione dei propri argomenti, ma non pu&ograve; bloccare i propri argomenti e non pu&ograve; creare sondaggi.',
	'ROLE_DESCRIPTION_MOD_FULL' => 'Pu&ograve; usare tutte le caratteristiche di moderatore, compreso il ban.',
	'ROLE_DESCRIPTION_MOD_QUEUE' => 'Pu&ograve; usare la coda moderatore per validare e modificare messaggi, ma nulla di pi&ugrave;.',
	'ROLE_DESCRIPTION_MOD_SIMPLE' => 'Pu&ograve; solo usare azioni base sugli argomenti. Non pu&ograve; inviare richiami o usare la coda moderatore.',
	'ROLE_DESCRIPTION_MOD_STANDARD' => 'Pu&ograve; usare molti strumenti da moderatore, ma non pu&ograve; bannare utenti o cambiare l\'autore dei messaggi.',
	'ROLE_DESCRIPTION_USER_FULL' => 'Pu&ograve; usare tutte le caratteristiche forum disponibili per gli utenti, compreso cambiare il nome utente e ignorare il limite di flood.<br />Non consigliato.',
	'ROLE_DESCRIPTION_USER_LIMITED' => 'Ha accesso ad alcune delle caratteristiche utente. Allegati, e-mail, o messaggi istantanei non sono concessi.',
	'ROLE_DESCRIPTION_USER_NOAVATAR' => 'Ha un set di caratteristiche limitato e non pu&ograve; usare l\'avatar.',
	'ROLE_DESCRIPTION_USER_NOPM' => 'Ha un set di caratteristiche limitato e non pu&ograve; usare i messaggi privati.',
	'ROLE_DESCRIPTION_USER_STANDARD' => 'Ha accesso a molte ma non tutte le caratteristiche utente. Non pu&ograve; cambiare nome utente o ignorare il limite di flood.',

	'ROLE_DESCRIPTION_EXPLAIN' => 'Puoi inserire un breve spiegazione delle funzioni del ruolo o a cosa &egrave; preposto. Il testo inserito sar&agrave; visibile anche dentro le schermate permessi.',
	'ROLE_DESCRIPTION_LONG' => 'La descrizione del ruolo &egrave; troppo lunga, il limite &egrave; di 4000 caratteri.',
	'ROLE_DETAILS' => 'Dettagli ruolo',
	'ROLE_EDIT_SUCCESS' => 'Ruolo modificato.',
	'ROLE_NAME' => 'Nome ruolo',
	'ROLE_NAME_ALREADY_EXIST' => 'Un ruolo di nome <strong>%s</strong> esiste gi&agrave; per il tipo di permesso specificato.',
	'ROLE_NOT_ASSIGNED' => 'Il ruolo non &egrave; ancora stato assegnato.',

	'SELECTED_BLOCK_NOT_EXIST' => 'Il blocco selezionato non esiste.',
	'SELECTED_LAYOUT_NOT_EXIST' => 'La pagina CMS selezionata non esiste.',
	'SELECTED_LAYOUT_SPECIAL_NOT_EXIST' => 'La pagina standard selezionata non esiste.',

	'SELECTED_FORUM_NOT_EXIST' => 'Il forum selezionato non esiste.',
	'SELECTED_GROUP_NOT_EXIST' => 'Gruppo(i) selezionato(i) non esistente(i).',
	'SELECTED_USER_NOT_EXIST' => 'Utente(i) selezionato(i) non esistente(i).',
	'SELECT_FORUM_SUBFORUM_EXPLAIN' => 'Il forum che selezioni qui includer&agrave; tutti i subforum nella selezione.',
	'SELECT_ROLE' => 'Seleziona ruolo…',
	'SELECT_TYPE' => 'Seleziona tipo',
	'SET_PERMISSIONS' => 'Imposta permessi',
	'SET_ROLE_PERMISSIONS' => 'Imposta permessi ruolo',
	'SET_USERS_PERMISSIONS' => 'Imposta permessi utenti',
	'SET_USERS_FORUM_PERMISSIONS' => 'Imposta permessi forum degli utenti',

	'TRACE_DEFAULT' => 'Come predefinito ogni permesso &egrave; <samp>NO</samp> (non impostato). Il permesso pu&ograve; quindi essere sovrascritto da altre impostazioni.',
	'TRACE_FOR' => 'Traccia per',
	'TRACE_GLOBAL_SETTING' => '%s (globale)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER' => 'Il permesso di gruppo &egrave; impostato su <samp>MAI</samp> come il risultato totale, quindi il vecchio risultato &egrave; mantenuto.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL' => 'Il permesso di gruppo per questo forum &egrave; impostato su <samp>MAI</samp> come il risultato totale, quindi il vecchio risultato &egrave; mantenuto.',
	'TRACE_GROUP_NEVER_TOTAL_NO' => 'Il permesso di gruppo &egrave; impostato su <samp>MAI</samp> che diventa il nuovo valore totale dato che non era ancora impostato (impostato su <samp>NO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL' => 'Il permesso di gruppo per questo forum &egrave; impostato su <samp>MAI</samp> che diventa il nuovo valore totale dato che non era ancora impostato (impostato su <samp>NO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES' => 'Il permesso di gruppo &egrave; impostato su <samp>MAI</samp> che sovrascrive il totale <samp>SI</samp> a <samp>MAI</samp> per questo utente.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL' => 'Il permesso di gruppo per questo forum &egrave; impostato su <samp>MAI</samp> che sovrascrive il totale <samp>SI</samp> a <samp>MAI</samp> per questo utente.',
	'TRACE_GROUP_NO' => 'Il permesso &egrave; <samp>NO</samp> per questo gruppo, quindi il vecchio risultato &egrave; mantenuto.',
	'TRACE_GROUP_NO_LOCAL' => 'Il permesso &egrave; <samp>NO</samp> per questo gruppo all\'interno di questo forum, quindi il vecchio risultato &egrave; mantenuto.',
	'TRACE_GROUP_YES_TOTAL_NEVER' => 'Il permesso di gruppo &egrave; impostato su <samp>SI</samp> ma il totale <samp>MAI</samp> non pu&ograve; essere sovrascritto.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL' => 'Il permesso di gruppo per questo forum &egrave; impostato su <samp>SI</samp> ma il totale <samp>MAI</samp> non pu&ograve; essere sovrascritto.',
	'TRACE_GROUP_YES_TOTAL_NO' => 'Il permesso di gruppo &egrave; impostato su <samp>SI</samp> che diventa il nuovo valore totale dato che non era ancora impostato (impostato su <samp>NO</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL' => 'Il permesso di gruppo per questo forum &egrave; impostato su <samp>SI</samp> che diventa il nuovo valore totale dato che non era ancora impostato (impostato su <samp>NO</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES' => 'Il permesso di gruppo &egrave; impostato su <samp>SI</samp> ed il permesso totale &egrave; gi&agrave; impostato su <samp>SI</samp>, quindi il risultato totale &egrave; mantenuto.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL' => 'Il permesso di gruppo per questo forum &egrave; impostato su <samp>SI</samp> ed il permesso totale &egrave; gi&agrave; impostato su <samp>SI</samp>, quindi il risultato totale &egrave; mantenuto.',
	'TRACE_PERMISSION' => 'Traccia permesso - %s',
	'TRACE_RESULT' => 'Trace risultato',
	'TRACE_SETTING' => 'Impostazione tracciamento',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES' => 'I permessi forum utente indipendenti determinano il valore <samp>SI</samp> ma il permesso totale &egrave; gi&agrave; impostato su <samp>SI</samp>, cos&igrave; il risultato totale &egrave; mantenuto. %sTraccia permesso globale%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER' => 'I permessi forum utente indipendenti determinano il valore <samp>SI</samp> che sovrascrive l\'attuale risultato locale <samp>MAI</samp>. %sTraccia permesso globale%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT' => 'I permessi forum utente indipendenti determinano il valore <samp>MAI</samp> che non influenza il permesso locale. %sTraccia permesso globale%s',

	'TRACE_USER_FOUNDER' => 'L\'utente ha l\'impostazione di fondatore, per cui i permessi amministratore sono impostati su <samp>SI</samp> come predefinito.',
	'TRACE_USER_KEPT' => 'Il permesso utente &egrave; <samp>NO</samp> cos&igrave; il vecchio risultato totale &egrave; mantenuto.',
	'TRACE_USER_KEPT_LOCAL' => 'Il permesso utente per questo forum &egrave; <samp>NO</samp> cos&igrave; il vecchio risultato totale &egrave; mantenuto.',
	'TRACE_USER_NEVER_TOTAL_NEVER' => 'Il permesso utente &egrave; impostato su <samp>MAI</samp> e il valore totale &egrave; impostato su <samp>MAI</samp>, quindi non cambia nulla.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL' => 'Il permesso utente per questo forum &egrave; impostato su <samp>MAI</samp> e il valore totale &egrave; impostato su <samp>MAI</samp>, quindi non cambia nulla.',
	'TRACE_USER_NEVER_TOTAL_NO' => 'Il permesso utente &egrave; impostato su <samp>MAI</samp> che diventa il valore totale dato che era impostato su <samp>NO</samp>.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL' => 'Il permesso utente per questo forum &egrave; impostato su <samp>MAI</samp> che diventa il valore totale dato che era impostato su <samp>NO</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES' => 'Il permesso utente &egrave; impostato su <samp>MAI</samp> e sovrascrive il precedente <samp>SI</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL' => 'Il permesso utente per questo forum &egrave; impostato su <samp>MAI</samp> e sovrascrive il precedente <samp>SI</samp>.',
	'TRACE_USER_NO_TOTAL_NO' => 'Il permesso utente &egrave; <samp>NO</samp> e il valore totale era impostato su <samp>NO</samp> quindi va a <samp>MAI</samp> di default.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL' => 'Il permesso utente per questo forum &egrave; <samp>NO</samp> e il valore totale era impostato su <samp>NO</samp> quindi va a <samp>MAI</samp> di default.',
	'TRACE_USER_YES_TOTAL_NEVER' => 'Il permesso utente &egrave; impostato su <samp>SI</samp> ma il totale <samp>MAI</samp> non pu&ograve; essere sovrascritto.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL' => 'Il permesso utente per questo forum &egrave; impostato su <samp>SI</samp> ma il totale <samp>MAI</samp> non pu&ograve; essere sovrascritto.',
	'TRACE_USER_YES_TOTAL_NO' => 'Il permesso utente &egrave; impostato su <samp>SI</samp> che diventa il valore totale dato che era impostato su <samp>NO</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL' => 'Il permesso utente per questo forum &egrave; impostato su <samp>SI</samp> che diventa il valore totale dato che era impostato su <samp>NO</samp>.',
	'TRACE_USER_YES_TOTAL_YES' => 'Il permesso utente &egrave; impostato su <samp>SI</samp> e il valore totale &egrave; impostato su <samp>SI</samp>, quindi nulla &egrave; cambiato.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL' => 'Il permesso utente per questo forum &egrave; impostato su <samp>SI</samp> e il valore totale &egrave; impostato su <samp>SI</samp>, quindi nulla &egrave; cambiato.',
	'TRACE_WHO' => 'Chi',
	'TRACE_TOTAL' => 'Totale',

	'USERS_NOT_ASSIGNED' => 'Nessun utente assegnato a questo ruolo',
	'USER_IS_MEMBER_OF_DEFAULT' => '&egrave; un membro dei seguenti gruppi predefiniti',
	'USER_IS_MEMBER_OF_CUSTOM' => '&egrave; un membro dei seguenti gruppi personalizzati',
	'USERNAMES_EXPLAIN' => 'Inserisci un nome utente per riga.',

	'VIEW_ASSIGNED_ITEMS' => 'Vedi figure assegnate',
	'VIEW_LOCAL_PERMS' => 'Permessi locali',
	'VIEW_GLOBAL_PERMS' => 'Permessi globali',
	'VIEW_PERMISSIONS' => 'Vedi permessi',

	'WRONG_PERMISSION_TYPE' => 'Il tipo di permesso selezionato &egrave; errato.',
	'WRONG_PERMISSION_SETTING_FORMAT' => 'Le impostazioni dei permessi sono in un formato sbagliato e phpBB non &egrave; in grado di processarli correttamente.',
	)
);

?>