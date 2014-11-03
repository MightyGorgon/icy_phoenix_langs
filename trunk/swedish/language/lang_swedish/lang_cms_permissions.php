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
		<p>Behörigheter är mycket detaljerad och grupperas i fyra huvudavsnitt, som är:</p>

		<h2>Globala Behörigheter</h2>
		<p>Dessa används för att styra åtkomst på global nivå och gäller för hela bulletin board. De är vidare indelade i Användarbehörigheter, Gruppbehörigheter, Administratörs och Globala moderatorer.</p>

		<h2>Forum Baserade Behörigheter</h2>
		<p>Dessa används för att styra åtkomst på ett per forums grundval. De är vidare indelade i Forum Behörigheter, Forum Moderatorer, Användarnas Forum Behörigheter och Grupp Forums Behörigheter.</p>

		<h2>Behörighets Regler</h2>
		<p>Dessa används för att skapa olika uppsättningar av behörigheter för de olika behörighetstyperna som senare ska kunna tilldelas på ett rollbaserat underlag. Standard roller bör omfatta administration av bulletin boards stora och små, ​​och även inom var och en av de fyra divisionerna, du kan lägga till/redigera/ta bort roller som du tycker passar.</p>

		<h2>Behörighets Masks</h2>
		<p>Dessa används för att visa gällande behörigheter som tilldelats Användare, Moderatorer (lokala och globala), Administratörer eller Forum.</p>

		<br />

		<p>För mer information om hur du konfigurerar och hanterar behörigheter på ditt phpBB3 forum, se <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Kapitel 1.5 av vår Snabb Starts Guide</a>.</p>
	',

	'ACL_NEVER' => 'Aldrig',
	'ACL_SET' => 'Inställnings behörigheter',
	'ACL_SET_EXPLAIN' => 'Behörigheter är baserade på ett enkelt <samp>JA</samp>/<samp>NEJ</samp> system. Ställa in ett alternativ till <samp>ALDRIG</samp> för en användare eller användargrupp åsidosätter något annat värde som tilldelats det. Om du inte vill tilldela ett värde för ett alternativ för denna användare eller grupp väljer du <samp>NEJ</samp>. Om värden tilldelas för detta alternativ på andra håll kommer de att användas i stället, annars är <samp>ALDRIG</samp> antaget. Alla objekt som är markerade (med kryssrutan framför dem) kommer att kopiera tillstånd som du definierade.',
	'ACL_SETTING' => 'Inställning',

	'ACL_TYPE_A_' => 'Administrativa behörigheter',
	'ACL_TYPE_CMS_' => 'CMS behörigheter',
	'ACL_TYPE_F_' => 'Forum behörigheter',
	'ACL_TYPE_M_' => 'Moderativa behörigheter',
	'ACL_TYPE_PL_' => 'Plugins behörigheter',
	'ACL_TYPE_U_' => 'Användar behörigheter',

	'ACL_TYPE_GLOBAL_A_' => 'Administrativa behörigheter',
	'ACL_TYPE_GLOBAL_CMS_' => 'CMS behörigheter',
	'ACL_TYPE_GLOBAL_M_' => 'Globala Moderators behörigheter',
	'ACL_TYPE_GLOBAL_PL_' => 'Plugins behörigheter',
	'ACL_TYPE_GLOBAL_U_' => 'Användar behörigheter',
	'ACL_TYPE_LOCAL_CMS_' => 'CMS behörigheter',
	'ACL_TYPE_LOCAL_CMSL_' => 'CMS sidors behörigheter',
	'ACL_TYPE_LOCAL_CMSS_' => 'CMS standard sidors behörigheter',
	'ACL_TYPE_LOCAL_CMSB_' => 'CMS blocks behörigheter',
	'ACL_TYPE_LOCAL_F_' => 'Forum behörigheter',
	'ACL_TYPE_LOCAL_M_' => 'Forum Moderators behörigheter',

	'ACL_NO' => 'Nej',
	'ACL_VIEW' => 'Viewing behörigheter',
	'ACL_VIEW_EXPLAIN' => 'Här kan du se de effektiva behörigheter som användaren / gruppen har. En röd kvadrat indikerar att användaren / gruppen inte har tillåtelse, visas en grön fyrkant har användaren / gruppen tillstånd.',
	'ACL_YES' => 'Ja',

	'ACP_ADMIN_ROLES' => 'Admin Roller',
	'ACP_CMS_ROLES' => 'CMS Roller',
	'ACP_FORUM_ROLES' => 'Forum Roller',
	'ACP_MOD_ROLES' => 'Moderator Roller',
	'ACP_PLUGINS_ROLES' => 'Plugins Roller',
	'ACP_USER_ROLES' => 'Globala Roller',

	'ACP_ADMINISTRATORS_EXPLAIN' => 'Här kan du tilldela administratörsbehörighet för användare eller grupper. Alla användare med administratörsbehörighet kan se administrations kontrollpanelen.',
	'ACP_FORUM_MODERATORS_EXPLAIN' => 'Här kan du tilldela användare och grupper till forum moderatorer. För att tilldela användare tillgång till forum, för att definiera globala moderativa behörigheter eller administratörer använd lämplig sida.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN' => 'Här kan du ändra vilka användare och grupper som kan komma åt vilka forum. För att tilldela moderatorer eller fastställa administratörer använd lämplig sida.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN' => 'Här kan du kopiera forum behörigheter från ett forum till ett eller flera andra forum.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN' => 'Här kan du tilldela globala moderators behörigheter till användare eller grupper. Dessa moderatorer är som vanliga moderatorer förutom att de har tillgång till alla forum på forumet.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN' => 'Här kan du tilldela forum behörigheter till grupper.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN' => 'Här kan du tilldela globala behörigheter till grupper - användarbehörighet, globala moderator behörigheter och administratörsbehörigheter. Användarbehörighet inkluderar funktioner som användning av avatarer, skicka privata meddelanden, med mera; globala moderator behörigheter såsom godkänna inlägg, hantera frågor, hantera förbud, med mera. och slutligen administratörsbehörighet såsom annan behörighet, definiera egna BBKoder, hantera forum, med mera. Enskilda användare behörigheter bör endast ändras i sällsynta fall, den föredragna metoden är att sätta användarna i grupper och tilldela gruppens behörighet.',
	'ACP_ADMIN_ROLES_EXPLAIN' => 'Roller för administrativa behörigheter. Roller är effektiva tillstånd, om du ändrar en rolls objekt som redan har denna roll kommer deras behörigheter att ändras också.',
	'ACP_CMS_ROLES_EXPLAIN' => 'Roller för CMS behörigheter. Roller är effektiva behörigheter, om du ändrar ett roll objekt som har denna roll kommer deras behörigheter att ändras också.',
	'ACP_FORUM_ROLES_EXPLAIN' => 'Roller för forum behörigheter. Roller är effektiva behörigheter, om du ändrar ett roll objekt som har denna roll kommer deras behörigheter att ändras också.',
	'ACP_MOD_ROLES_EXPLAIN' => 'Roller för moderativa behörigheter. Roller är effektiva behörigheter, om du ändrar ett roll objekt som har denna roll kommer deras behörigheter att ändras också.',
	'ACP_PLUGINS_ROLES_EXPLAIN' => 'Roller för Plugins behörigheter. Roller är effektiva behörigheter, om du ändrar ett roll objekt som har denna roll kommer deras behörigheter att ändras också.',
	'ACP_USER_ROLES_EXPLAIN' => 'Roles for user behörigheter. Roller är effektiva behörigheter, om du ändrar ett roll objekt som har denna roll kommer deras behörigheter att ändras också.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN' => 'Här kan du tilldela forum behörigheter till användare.',
	'ACP_USERS_PERMISSIONS_EXPLAIN' => 'Här kan du tilldela globala behörigheter till användare - användarbehörighet, globala moderator behörigheter och administratörsbehörigheter. Användarbehörighet inkluderar funktioner som användning av avatarer, skicka privata meddelanden, med mera.; globala moderator behörigheter såsom godkänna inlägg, hantera frågor, hantera förbud, med mera och slutligen administratörsbehörighet såsom en annan behörighet, definiera egna BBKoder, hantera forum, med mera. För att ändra dessa inställningar för ett stort antal användaregruppers behörighets systemet att föredra. Användarens behörigheter bör endast ändras i sällsynta fall, den föredragna metoden är att sätta användarna i grupper och tilldela gruppens behörigheter.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN' => 'Här kan du se de effektiva administrativa behörigheter som tilldelats de valda användarna/grupperna.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN' => 'Här kan du se de globala moderative behörigheter som tilldelats de valda användarna/grupperna.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN' => 'Här kan du se forumets behörigheter som tilldelats de valda användarna/grupperna och forum.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN' => 'Här kan du se forum moderatorbehörigheter som tilldelats de valda användarna/grupperna och forum.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN' => 'Här kan du se de effektiva användar behörigheter som tilldelats de valda användarna/grupperna.',

	'ADD_GROUPS' => 'Lägg till grupper',
	'ADD_PERMISSIONS' => 'Lägg till rättigheter',
	'ADD_USERS' => 'Lägg till användare',
	'ADVANCED_PERMISSIONS' => 'Avancerade rättigheter',
	'ALL_GROUPS' => 'Välj alla grupper',
	'ALL_NEVER' => 'Alla <samp>ALDRIG</samp>',
	'ALL_NO' => 'Alla <samp>NEJ</samp>',
	'ALL_USERS' => 'Välj alla användare',
	'ALL_YES' => 'Alla <samp>JA</samp>',
	'APPLY_ALL_PERMISSIONS' => 'Tillämpa alla rättigheter',
	'APPLY_PERMISSIONS' => 'Tillämpa rättigheter',
	'APPLY_PERMISSIONS_EXPLAIN' => 'Rättigheterna och roll som definierats för denna post kommer endast att tillämpas på denna post och alla markerade objekt.',
	'AUTH_UPDATED' => 'Rättigheter har blivit uppdaterade.',

	'COPY_PERMISSIONS_CONFIRM' => 'Är du säker på att du vill utföra den här operationen? Var medveten om att detta kommer att skriva över befintliga behörigheter på de utvalda målen.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN' => 'Käll forum du vill kopiera behörigheter från.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN' => 'Destinations forum som du vill att de kopierade behörigheterna tillämpas på.',
	'COPY_PERMISSIONS_FROM' => 'Kopiera permissions från',
	'COPY_PERMISSIONS_TO' => 'Tillämpa rättigheter till',

	'CREATE_ROLE' => 'Skapa roll',
	'CREATE_ROLE_FROM' => 'Använd inställningar från…',
	'CUSTOM' => 'Anpassad...',

	'DEFAULT' => 'Standard',
	'DELETE_ROLE' => 'Radera roll',
	'DELETE_ROLE_CONFIRM' => 'Är du säker på att du vill ta bort denna roll? Produkter med denna roll kommer <strong>inte</strong> att förlorar sina behörighetsinställningar.',
	'DISPLAY_ROLE_ITEMS' => 'Visa objekt som använder denna roll',

	'EDIT_PERMISSIONS' => 'Redigera rättigheter',
	'EDIT_ROLE' => 'Redigera roll',

	'GROUPS_NOT_ASSIGNED' => 'Ingen grupp tilldelas denna roll',

	'ITEMS_SELECTED' => 'Artiklar valda',

	'LOOK_UP_GROUP' => 'Lås upp användargrupp',
	'LOOK_UP_USER' => 'Lås upp användare',
	'LOOK_UP_CMS_L' => 'Välj sida',
	'LOOK_UP_CMS_L_EXPLAIN' => 'Sidans namn följs av sidans id mellan hakparenteser för referenser',
	'LOOK_UP_CMS_S' => 'Välj standard sida',
	'LOOK_UP_CMS_S_EXPLAIN' => 'Sidans namn följs av sidans id mellan hakparenteser för referenser',
	'LOOK_UP_CMS_B' => 'Välj block',
	'LOOK_UP_CMS_B_EXPLAIN' => 'Block namn följs av block id mellan hakparenteser för referenser',

	'MANAGE_GROUPS' => 'Hantera grupper',
	'MANAGE_USERS' => 'Hantera användare',

	'NO_AUTH_SETTING_FOUND' => 'Behörighetsinställningar inte definierade.',
	'NO_ROLE_ASSIGNED' => 'Ingen roll tilldelad…',
	'NO_ROLE_ASSIGNED_EXPLAIN' => 'Inställning till denna roll ändra inte behörigheter till höger. Om du vill ej sätta / ta bort alla behörigheter ska du använda “Alla <samp>NEJ</samp>” länkar.',
	'NO_ROLE_AVAILABLE' => 'Ingen roll tillgängligg',
	'NO_ROLE_NAME_SPECIFIED' => 'Vänligen ge rollen ett namn.',
	'NO_ROLE_SELECTED' => 'Roll kunde inte hittas.',
	'NO_USER_GROUP_SELECTED' => 'Du har inte valt någon användare eller grupp.',

	'ONLY_FORUM_DEFINED' => 'Du definierade bara forum i ditt val. Vänligen välj också minst en användare eller en grupp.',

	'PERMISSION_APPLIED_TO_ALL' => 'Tillstånd och roll kommer också att tillämpas på alla markerade objekt',
	'PLUS_SUBFORUMS' => '+Underforum',

	'REMOVE_PERMISSIONS' => 'Ta bort behörigheter',
	'REMOVE_ROLE' => 'Ta bort roll',
	'RESULTING_PERMISSION' => 'Resulterande behörigheter',
	'ROLE' => 'Roll',
	'ROLE_ADD_SUCCESS' => 'Roll successfullt tillagd.',
	'ROLE_ASSIGNED_TO' => 'Användare/Grupper tilldelade till %s',
	'ROLE_DELETED' => 'Roll successfullt flyttad.',
	'ROLE_DESCRIPTION' => 'Roll beskrivning',

	'ROLE_ADMIN_FORUM' => 'Forum Admin',
	'ROLE_ADMIN_FULL' => 'Full Admin',
	'ROLE_ADMIN_STANDARD' => 'Standard Admin',
	'ROLE_ADMIN_USERGROUP' => 'Användare och Grupp Admin',
	'ROLE_FORUM_BOT' => 'Bot Access',
	'ROLE_FORUM_FULL' => 'Full Access',
	'ROLE_FORUM_LIMITED' => 'Begränsad Access',
	'ROLE_FORUM_LIMITED_POLLS' => 'Begränsad Access + Enkäter',
	'ROLE_FORUM_NOACCESS' => 'Ingen Access',
	'ROLE_FORUM_ONQUEUE' => 'På Moderations Kö',
	'ROLE_FORUM_POLLS' => 'Standard Access + Enkäter',
	'ROLE_FORUM_READONLY' => 'Läs Endast Access',
	'ROLE_FORUM_STANDARD' => 'Standard Access',
	'ROLE_FORUM_NEW_MEMBER' => 'Nyregistrerade användare',
	'ROLE_MOD_FULL' => 'Full Moderator',
	'ROLE_MOD_QUEUE' => 'Kö Moderator',
	'ROLE_MOD_SIMPLE' => 'Enkel Moderator',
	'ROLE_MOD_STANDARD' => 'Standard Moderator',
	'ROLE_USER_FULL' => 'Alla egenskaper',
	'ROLE_USER_LIMITED' => 'Begränsade egenskaper',
	'ROLE_USER_NOAVATAR' => 'Ingen Avatar',
	'ROLE_USER_NOPM' => 'Inga Privata Meddelande',
	'ROLE_USER_STANDARD' => 'Standard egenskaper',
	'ROLE_USER_NEW_MEMBER' => 'Nyregistrerad användare',


	'ROLE_DESCRIPTION_ADMIN_FORUM' => 'Kan ha tillgång till forum hantering och forum rättigheters inställningarna.',
	'ROLE_DESCRIPTION_ADMIN_FULL' => 'Har tillgång till alla administrativa funktioner på detta forum.<br />Ej att rekommendera.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD' => 'Har tillgång till de flesta administrativa funktioner men har inte tillåtelse att använda server eller system relaterade verktyg.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP' => 'Kan hantera grupper och användare: Kan ändra rättigheter, inställningar, hantera bannlysning, och hantera rankningar.',
	'ROLE_DESCRIPTION_FORUM_BOT' => 'Denna rill är att rekommendera för bots och sökspindlar.',
	'ROLE_DESCRIPTION_FORUM_FULL' => 'Kan använda alla forum funktioner, inklusive postning av meddelande och stickies. Kan också ignorera flood begränsning.<br />Ej att rekommendera för normala användare.',
	'ROLE_DESCRIPTION_FORUM_LIMITED' => 'Kan använda någon forum funktioner, men kan inte bifoga filer eller användning av post ikoner.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS' => 'Per begränsad åtkomst, men kan också skapa omröstningar.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS' => 'Kan varken se eller komma åt forumet.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE' => 'Kan använda de flesta forum funktioner, inklusive bilagor, men inlägg och trådar måste godkännas av en moderator.',
	'ROLE_DESCRIPTION_FORUM_POLLS' => 'Som normal tillgång, men kan också skapa omröstningar.',
	'ROLE_DESCRIPTION_FORUM_READONLY' => 'Kan läsa forumet, men kan inte skapa nya trådar eller svara på inlägg.',
	'ROLE_DESCRIPTION_FORUM_STANDARD' => 'Kan använda de flesta forum funktioner, inklusive bilagor och radera egna ämnen, men kan inte låsa egna trådar, och kan inte skapa undersökningar.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER' => 'En roll för medlemmar i den särskilda nyregistrerade användar gruppen; innehåller <samp>ALDRIG</samp> behörigheter för att låsa funktioner för nya användare.',
	'ROLE_DESCRIPTION_MOD_FULL' => 'Kan använda alla moderations funktioner, bland annat bannlysning.',
	'ROLE_DESCRIPTION_MOD_QUEUE' => 'Kan använda moderationskö för att validera och redigera inlägg, men inget annat.',
	'ROLE_DESCRIPTION_MOD_SIMPLE' => 'Kan endast använda grundläggande ämnes åtgärder. Kan inte skicka varningar eller använda modereringskön.',
	'ROLE_DESCRIPTION_MOD_STANDARD' => 'Kan använda de flesta moderations verktyg, men kan inte förbjuda användare eller ändra inläggs författaren.',
	'ROLE_DESCRIPTION_USER_FULL' => 'Kan använda alla tillgängliga forum funktioner för användare, inklusive att ändra användarnamn eller ignorera flood gränsen.<br />Ej att rekommendera.',
	'ROLE_DESCRIPTION_USER_LIMITED' => 'Kan komma åt en del av användarfunktionerna. Bilagor, e-post eller snabbmeddelanden är inte tillåtna.',
	'ROLE_DESCRIPTION_USER_NOAVATAR' => 'Har en begränsad uppsättning funktioner och är inte tillåten att använda Avatar-funktionen.',
	'ROLE_DESCRIPTION_USER_NOPM' => 'Har en begränsad uppsättning funktioner, och är inte tillåten att använda privata meddelanden.',
	'ROLE_DESCRIPTION_USER_STANDARD' => 'Kan komma åt de flesta men inte alla användarfunktioner. Kan inte ändra användarnamn eller ignorera flood gränsen, till exempel.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER' => 'En roll för medlemmar i den särskilda nyregistrerade användare gruppen; innehåller <samp>ALDRIG</samp> behörigheter för att låsa funktioner för nya användare.',

	'ROLE_DESCRIPTION_EXPLAIN' => 'Du har tillåtelse att ange en kort förklarning om vad rollen innebär eller för vad den är menad för. Texten du anger här kommer att visas inom rättighetsskärmen också.',
	'ROLE_DESCRIPTION_LONG' => 'Roll bskrivningen är för lång, vänligen begränsa den till 4000 tecken.',
	'ROLE_DETAILS' => 'Roll detaljer',
	'ROLE_EDIT_SUCCESS' => 'Roll successfullt redigerad.',
	'ROLE_NAME' => 'Rollnamn',
	'ROLE_NAME_ALREADY_EXIST' => 'En roll med namnet <strong>%s</strong> finns redan för den angivna rättighets typen.',
	'ROLE_NOT_ASSIGNED' => 'Roll har inte tilldelats ännu.',

	'SELECTED_BLOCK_NOT_EXIST' => 'Det valda blocket(n) existerar inte.',
	'SELECTED_LAYOUT_NOT_EXIST' => 'Den valda CMS sida(or) existerar inte.',
	'SELECTED_LAYOUT_SPECIAL_NOT_EXIST' => 'Den valda standardsida (er) existerar inte.',

	'SELECTED_FORUM_NOT_EXIST' => 'Det valda forumet(en) existerar inte.',
	'SELECTED_GROUP_NOT_EXIST' => 'Den valda gruppen(er) existerar inte.',
	'SELECTED_USER_NOT_EXIST' => 'Vald användare(n) existerar inte.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN' => 'Forumet du väljer här kommer att inkludera alla underforum i urvalet.',
	'SELECT_ROLE' => 'Välj roll…',
	'SELECT_TYPE' => 'Välj typ',
	'SET_PERMISSIONS' => 'Sätt behörigheter',
	'SET_ROLE_PERMISSIONS' => 'Sätt roll behörigheter',
	'SET_USERS_PERMISSIONS' => 'Sätt användares behörigheter',
	'SET_USERS_FORUM_PERMISSIONS' => 'Sätt användares forum behörigheter',

	'TRACE_DEFAULT' => 'Som standard är varje behörighet <samp>NEJ</samp> (ej satt). Så behörigheter kan skrivas över av andra inställningars.',
	'TRACE_FOR' => 'Spåra efter',
	'TRACE_GLOBAL_SETTING' => '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER' => 'Denna grupps behörighet är satt till <samp>ALDRIG</samp> som det totala resultatet så det gamla resultatet behålls.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL' => 'Denna grupps behörighet för detta forum är satt till <samp>ALDRIG</samp> som det totala resultatet så det gamla resultatet behålls.',
	'TRACE_GROUP_NEVER_TOTAL_NO' => 'Denna grupps behörighet är satt till <samp>ALDRIG</samp> som blir det nya totala värdet eftersom det inte var satt ännu (inställd på <samp>NEJ</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL' => 'Denna grupps behörighet för detta forum är satt till <samp>ALDRIG</samp> som blir det nya totala värdet eftersom det inte var satt ännu (inställd på <samp>NEJ</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES' => 'Denna grupps behörighet är satt till <samp>ALDRIG</samp> som skriver över det totala <samp>JA</samp> till <samp>ALDRIG</samp> för denna användare.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL' => 'Denna grupps behörighet för detta forum är satt till <samp>ALDRIG</samp> som skriver över det totala <samp>JA</samp> till <samp>ALDRIG</samp> för denna användare.',
	'TRACE_GROUP_NO' => 'Behörigheterna är <samp>NEJ</samp> för denna grupp, så det gamla totala värdet behålls.',
	'TRACE_GROUP_NO_LOCAL' => 'Behörigheterna är <samp>NEJ</samp> för denna grupp inom detta forum så det gamla totala värdet behålls.',
	'TRACE_GROUP_YES_TOTAL_NEVER' => 'Denna grupps behörighet är satt till <samp>JA</samp> men det totala <samp>ALDRIG</samp> kan inte skrivas över.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL' => 'Denna grupps behörighet för detta forum är satt till <samp>JA</samp> men det totala <samp>ALDRIG</samp> kan inte skrivas över.',
	'TRACE_GROUP_YES_TOTAL_NO' => 'Denna grupps behörighet är satt till <samp>JA</samp> som blir det nya totala värdet eftersom det inte var satt ännu (inställd på <samp>NEJ</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL' => 'Denna grupps behörighet för detta forum är satt till <samp>JA</samp> som blir det nya totala värdet eftersom det inte var satt ännu (inställd på <samp>NEJ</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES' => 'Denna grupps behörighet är satt till <samp>JA</samp> och det totala tillståndet är redan inställd på <samp>JA</samp>, så det totala resultatet behålls.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL' => 'Denna grupps behörighet för detta forum är satt till <samp>JA</samp> och det totala tillståndet är redan inställd på <samp>JA</samp>, så det totala resultatet behålls.',
	'TRACE_PERMISSION' => 'Spårnings behörigheter - %s',
	'TRACE_RESULT' => 'Spårnings result',
	'TRACE_SETTING' => 'Spårnings inställning',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES' => 'Forumets oberoende användartillstånd utvärderas till <samp>JA</samp> men det totala tillståndet är redan inställd på <samp>JA</samp>, så det totala resultatet behålls. %Spåra globala tillstånd%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER' => 'Forumets oberoende användartillstånd utvärderas till <samp>JA</samp> som skriver över det aktuella lokala resultatet <samp>ALDRIG</samp>. %sSpåra globala tillstånd%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT' => 'Forumets oberoende användartillstånd utvärderas till <samp>ALDRIG</samp> som inte påverkar det lokala tillståndet. %sSpåra globala tillstånd%s',

	'TRACE_USER_FOUNDER' => 'Användaren är en av grundarna, därför är alltid admin behörigheter inställd på <samp>JA</samp>.',
	'TRACE_USER_KEPT' => 'Användarens behörigheter är <samp>NEJ</samp> så det gamla totala värdet behålls.',
	'TRACE_USER_KEPT_LOCAL' => 'Användarens behörigheter för detta forum är <samp>NEJ</samp> så det gamla totala värdet behålls.',
	'TRACE_USER_NEVER_TOTAL_NEVER' => 'Användarens behörigheter är satt till <samp>ALDRIG</samp> och det totala värdet är satt till <samp>ALDRIG</samp>, så inget är ändrat.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL' => 'Användarens behörigheter för detta forum är satt till <samp>ALDRIG</samp> och det totala värdet är satt till <samp>ALDRIG</samp>, så inget är ändrat.',
	'TRACE_USER_NEVER_TOTAL_NO' => 'Användarens behörigheter är satt till <samp>ALDRIG</samp> som blir det totala värdet eftersom det var satt till NEJ.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL' => 'Användarens behörigheter för detta forum är satt till <samp>ALDRIG</samp> som blir det totala värdet eftersom det var satt till NEJ.',
	'TRACE_USER_NEVER_TOTAL_YES' => 'Användarens behörigheter är satt till <samp>ALDRIG</samp> och skriver över den tidigare <samp>JA</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL' => 'Användarens behörigheter för detta forum är satt till <samp>ALDRIG</samp> och skriver över den tidigare <samp>JA</samp>.',
	'TRACE_USER_NO_TOTAL_NO' => 'Användarens behörigheter är <samp>NEJ</samp> och det sammanlagda värdet var satt till NEJ så det är standard till <samp>ALDRIG</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL' => 'Användarens behörigheter för detta forum är satt till <samp>NEJ</samp> och det sammanlagda värdet var satt till NEJ så det är standard till <samp>ALDRIG</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER' => 'Användarens behörigheter är satt till <samp>JA</samp> men det totala <samp>ALDRIG</samp> kan inte skrivas över.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL' => 'Användarens behörigheter för detta forum är satt till <samp>JA</samp> men det totala <samp>ALDRIG</samp> kan inte skrivas över.',
	'TRACE_USER_YES_TOTAL_NO' => 'Användarens behörigheter är satt till <samp>JA</samp> som blir det totala värdet eftersom det var satt till <samp>NEJ</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL' => 'Användarens behörigheter för detta forum är satt till <samp>JA</samp> som blir det totala värdet eftersom det var satt till <samp>NEJ</samp>.',
	'TRACE_USER_YES_TOTAL_YES' => 'Användarens behörigheter är satt till <samp>JA</samp> och det sammanlagda värdet var satt till <samp>JA</samp>, så inget har ändrats.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL' => 'Användarens behörigheter för detta forum är satt till <samp>JA</samp> och det totala värdet är satt till <samp>JA</samp>, så inget har ändrats.',
	'TRACE_WHO' => 'Vem',
	'TRACE_TOTAL' => 'Totalt',

	'USERS_NOT_ASSIGNED' => 'Ingen användare som tilldelats denna roll',
	'USER_IS_MEMBER_OF_DEFAULT' => 'är medlem i följande fördefinierade grupper',
	'USER_IS_MEMBER_OF_CUSTOM' => 'är medlem i följande användardefinierade grupper',
	'USERNAMES_EXPLAIN' => 'Placera varje användarnamn på en separat rad.',

	'VIEW_ASSIGNED_ITEMS' => 'Visa tilldelade poster',
	'VIEW_LOCAL_PERMS' => 'Lokala behörigheter',
	'VIEW_GLOBAL_PERMS' => 'Globala behörigheter',
	'VIEW_PERMISSIONS' => 'Visa behörigheter',

	'WRONG_PERMISSION_TYPE' => 'Fel behörighets typ vald.',
	'WRONG_PERMISSION_SETTING_FORMAT' => 'Behörighets inställningarna är i fel format, phpBB kan inte bearbeta dem på rätt sätt.',
	)
);

?>