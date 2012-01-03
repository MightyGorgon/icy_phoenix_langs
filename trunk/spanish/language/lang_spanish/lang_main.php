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

$lang['BBC_IP_CREDITS_STATIC'] = '
<a href="http://www.icyphoenix.com" title="Icy Phoenix"><img src="http://www.icyphoenix.com/images/logo_ip.png" alt="Icy Phoenix" title="Icy Phoenix" /></a><br />
<span style="color: #dd2222;"><b>Mighty Gorgon</b></span>&nbsp;<i>(Luca Libralato)</i><br />
<b><i>Programador</i></b><br />
<br />
<br />
<span style="color: #ff5500;"><b>hpl</b></span><br />
<b><i>Junior Developer</i></b><br />
<br />
<br />
<span style="color: #ff5500;"><b>KasLimon</b></span><br />
<b><i>Junior Developer</i></b><br />
<br />
<br />
<span style="color: #ff5500;"><b>Informpro</b></span><br />
<b><i>Junior Developer</i></b><br />
<br />
<br />
<b><i>Contribuciones valiosas</i></b><br />
<span style="color: #228822;"><b>Andrea75</b></span><br />
<span style="color: #dd2222;"><b>Artie</b></span><br />
<span style="color: #dd2222;"><b>Bicet</b></span>&nbsp;<i>(phpBB XS Developer)</i><br />
<span style="color: #0000bb;"><b>brandsrus</b></span><br />
<span style="color: #228822;"><b>buldo</b></span><br />
<span style="color: #228822;"><b>casimedicos</b></span><br />
<span style="color: #228822;"><b>Chaotic</b></span><br />
<span style="color: #dd2222;"><b>CyberAlien</b></span><br />
<span style="color: #228822;"><b>difus</b></span><br />
<span style="color: #228822;"><b>DWho</b></span><br />
<span style="color: #228822;"><b>fracs</b></span><br />
<span style="color: #880088;"><b>ganesh</b></span><br />
<span style="color: #228822;"><b>JANU1535</b></span><br />
<span style="color: #880088;"><b>jz</b></span><br />
<span style="color: #aaff00;"><b>KugeLSichA</b></span><br />
<span style="color: #0000bb;"><b>Limun</b></span><br />
<span style="color: #880088;"><b>Lopalong</b></span><br />
<span style="color: #228822;"><b>moreteavicar</b></span><br />
<span style="color: #228822;"><b>novice programmer</b></span><br />
<span style="color: #228822;"><b>ThE KuKa</b></span><br />
<span style="color: #ff7700;"><b>TheSteffen</b></span><br />
<span style="color: #0000bb;"><b>Tom</b></span><br />
<span style="color: #aaff00;"><b>TuningBEB2008</b></span><br />
<span style="color: #228822;"><b>z3d0</b></span><br />
<span style="color: #228822;"><b>Zuker</b></span><br />
<span style="color: #228822;"><b>Tiolalu</b></span><br />
<br />
';
$lang['BBC_IP_CREDITS'] = '<div class="center-block"><marquee behavior="scroll" direction="up" scrolldelay="120">' . $lang['BBC_IP_CREDITS_STATIC'] . '</marquee></div>';

$lang = array_merge($lang, array(
	'Home' => 'Portal',
	'Forum' => 'Foro',
	'Category' => 'Categor&iacute;a',
	'Topic' => 'Tema',
	'Topics' => 'Temas',
	'Replies' => 'Respuestas',
	'Views' => 'Lecturas',
	'Post' => 'Mensaje',
	'Posts' => 'Mensajes',
	'Posted' => 'Publicado',
	'Username' => 'Nombre de usuario',
	'Password' => 'Contrase&ntilde;a',
	'Email' => 'Correo',
	'Poster' => 'Autor',
	'Author' => 'Autor',
	'Time' => 'Hora',
	'Horas' => 'Horas',
	'Message' => 'Mensaje',

	'1_Day' => '1 d&iacute;a',
	'7_Days' => '7 d&iacute;as',
	'2_Weeks' => '2 semanas',
	'1_Month' => '1 mes',
	'3_Months' => '3 meses',
	'6_Months' => '6 meses',
	'1_Year' => '1 a&ntilde;o',

	'Go' => 'Ir',
	'Jump_to' => 'Saltar a',
	'Submit' => 'Enviar',
	'Reset' => 'Restablecer',
	'Cancel' => 'Cancelar',
	'Preview' => 'Vista previa',
	'Confirm' => 'Confirmar',
	'Spellcheck' => 'Ortograf&iacute;a',
	'Yes' => 'S&iacute;',
	'No' => 'No',
	'Enabled' => 'Activado',
	'Disabled' => 'Desactivado',
	'Error' => 'Error',

	'GO' => 'Ir',
	'JUMP_TO' => 'Ir a',
	'SUBMIT' => 'Enviar',
	'RESET' => 'Reset',
	'CANCEL' => 'Cancelar',
	'PREVIEW' => 'Vista previa',
	'CONFIRM' => 'Confirmar',
	'YES' => 'Si',
	'NO' => 'No',
	'ENABLED' => 'Activado',
	'DISABLED' => 'Desactivado',
	'ERROR' => 'Error',

	'Next' => 'Siguiente',
	'Previous' => 'Anterior',
	'Goto_page' => 'Ir a la p&aacute;gina',
	'Joined' => 'Registrado',
	'IP_Address' => 'Direcci&oacute;n IP',

	'Select_forum' => 'Seleccione un foro',
	'View_latest_post' => 'Ver &uacute;ltimo mensaje',
	'View_newest_post' => 'Ver mensaje m&aacute;s reciente',
	'Page_of' => 'P&aacute;gina <b>%d</b> de <b>%d</b>', // Replaces with: Page 1 of 2 for example

	'AIM' => 'Direcci&oacute;n AIM',
	'ICQ' => 'N&uacute;mero de ICQ',
	'JABBER' => 'Jabber',
	'MSNM' => 'MSN Messenger',
	'SKYPE' => 'Skype',
	'YIM' => 'Yahoo Messenger',
	'Forum_Index' => 'Foro',  // eg. sitename Forum Index, %s can be removed if you prefer

	'Post_new_topic' => 'Publicar nuevo tema',
	'Reply_to_topic' => 'Responder al tema',
	'Reply_with_quote' => 'Responder citando',

    'Click_return_login' => 'Pulse %saqu&iacute;%s para intentar de nuevo',
    'Click_return_index' => 'Pulse %saqu&iacute;%s para volver al &iacute;ndice',
    'Click_return_forum' => 'Pulse %saqu&iacute;%s para volver al foro', 
    'Click_return_topic' => 'Pulse %saqu&iacute;%s para volver al tema', // %s's here are for uris, do not remove! 
    'Click_return_viewtopic' => 'Pulse %saqu&iacute;%s para volver al Tema',
    'Click_return_modcp' => 'Pulse %saqu&iacute;%s para volver al panel de control del moderador',
    'Click_return_profile' => 'Pulse %saqu&iacute;%s para volver al Pefil',
    'Click_return_preferences' => 'Pulse %saqu&iacute;%s para volver a Preferencias',
    'Click_return_group' => 'Pulse %saqu&iacute;%s para volver a la informaci&oacute;n de grupo',  
    'Click_return_inbox' => 'Pulse %saqu&iacute;%s para volver a su bandeja de entrada',
    'Click_view_message' => 'Pulse %saqu&iacute;%s para ver su mensaje',
    'Click_view_privmsg' => 'Pulse %saqu&iacute;%s para ver su bandeja de entrada',

	'Admin_panel' => 'Ir al ACP',

	'Board_disabled' => 'Lo sentimos, pero este foro est&aacute; moment&aacute;neamente deshabilitado. Por favor, intente ingresar de nuevo pasados unos minutos.',

// Global Header strings
	'Registered_users' => 'Usuarios registrados conectados:',
	'Browsing_forum' => 'Usuarios viendo este foro:',
	'Online_users_zero_total' => 'En total hay <b>0</b> usuarios conectados :: ',
	'Online_users_total' => 'En total hay <b>%d</b> usuarios conectados :: ',
	'Online_user_total' => 'En total hay <b>%d</b> usuario conectado :: ',
	'AC_Online_users_zero_total' => 'En total hay <b>0</b> usuarios en el chat: ',
	'AC_Online_users_total' => 'En total hay <b>%d</b> usuarios en el chat: ',
	'AC_Online_user_total' => 'En total hay <b>1</b> usuario en el chat: ',
	'Reg_users_zero_total' => '0 registrados, ',
	'Reg_users_total' => '%d registrados, ',
	'Reg_user_total' => '%d registrado, ',
	'Hidden_users_zero_total' => '0 ocultos y ',
	'Hidden_user_total' => '%d oculto y ',
	'Hidden_users_total' => '%d ocultos y ',
	'Guest_users_zero_total' => '0 invitados',
	'Guest_users_total' => '%d invitados',
	'Guest_user_total' => '%d invitado',
	'Record_online_users' => 'El n&uacute;mero m&aacute;ximo de usuarios conectados a la vez fue de <b>%s</b> el %s', // first %s = number of users, second %s is the date.

	'Admin_online_color' => '%sAdministrador%s',
	'Mod_online_color' => '%sModerador%s',

	'You_last_visit' => 'Su &uacute;ltima visita fue el %s', // %s replaced by date/time
	'Current_time' => 'Fecha y hora actual: %s', // %s replaced by time

	'Search_new' => 'Ver mensajes desde su &uacute;ltima visita',
	'Search_your_posts' => 'Ver sus mensajes',
	'Search_unanswered' => 'Ver mensajes sin respuestas',

	'Register' => 'Registrarse',
	'Profile' => 'Perfil',
	'Edit_profile' => 'Editar su perfil',
	'Search' => 'Buscar',
	'Memberlist' => 'Lista de usuarios',
	'FAQ' => 'FAQ',
	'KB_title' => 'Biblioteca',
	'BBCode_guide' => 'Gu&iacute;a de BBCode',
	'Usergroups' => 'Grupos de usuarios',
	'Last_Post' => '&Uacute;ltimo mensaje',
	'Moderator' => 'Moderador',
	'Moderators' => 'Moderadores',

// Stats block text
	'Posted_articles_zero_total' => 'Mensajes en total: <b>0</b>', // Number of posts
	'Posted_articles_total' => 'Mensajes en total: <b>%d</b>', // Number of posts
	'Posted_article_total' => 'Mensajes en total: <b>%d</b>', // Number of posts
	'Registered_users_zero_total' => 'Tenemos <b>0</b> usuarios registrados', // # registered users
	'Registered_users_total' => 'Tenemos <b>%d</b> usuarios registrados', // # registered users
	'Registered_user_total' => 'Tenemos <b>%d</b> usuario registrado', // # registered users
	'Newest_user' => 'El &uacute;ltimo usuario registrado es <b>%s%s%s</b>', // a href, username, /a

	'No_new_posts_last_visit' => 'No hay nuevos mensajes desde su &uacute;ltima visita',

	'No_new_posts_global_announcement' => 'No hay nuevos [ Anun. Globales ]',
	'New_posts_global_announcement' => 'Nuevo [ Anun. Global ]',
	'No_new_posts_announcement' => 'No hay nuevos [ Anuncios ]',
	'New_posts_announcement' => 'Nuevo [ Anuncio ]',
	'No_new_posts_sticky' => 'No hay nuevas [ Notas ]',
	'New_posts_sticky' => 'Nueva [ Nota ]',
	'No_new_posts_locked' => 'No hay nuevos mensajes [ Bloqueado ]',
	'New_posts_locked' => 'Nuevos mensajes [ Bloqueado ]',
	'No_new_posts' => 'No hay nuevos mensajes ',
	'New_posts' => 'Nuevos mensajes',
	'New_post' => 'Nuevo mensaje',
	'No_new_posts_hot' => 'No hay nuevos mensajes [ Popular ]',
	'New_posts_hot' => 'Nuevos mensajes [ Popular ]',

	'Forum_no_new_posts' => 'No hay nuevos mensajes [Foro]',
	'Forum_new_posts' => 'Nuevos mensajes [Foro]',
	'Cat_no_new_posts' => 'No hay nuevos mensajes [Categor&iacute;a]',
	'Cat_new_posts' => 'Nuevos mensajes [Categor&iacute;a]',
	'Forum_is_locked' => 'Foro bloqueado',

// Login
	'Enter_password' => 'Por favor, ingrese su nombre de usuario y contrase&ntilde;a para conectarse.',
	'Login' => 'Conectarse',
	'Logout' => 'Desconectarse',
	'Forgotten_password' => 'He olvidado mi contrase&ntilde;a',
	'AUTOLOGIN' => 'Conectarme autom&aacute;ticamente en cada visita',
	'Error_login' => 'Ha ingresado un nombre de usuario incorrecto o deshabilitado, o una contrase&ntilde;a no v&aacute;lida.',

// Index page
	'No_Posts' => 'No hay mensajes',
	'No_forums' => 'No hay foros',

	'Private_Message' => 'Mensaje privado',
	'Private_Messages' => 'Mensajes privados',
	'Who_is_Online' => 'Qui&eacute;n est&aacute; conectado',

	'Mark_all_forums' => 'Marcar todos los foros como le&iacute;dos',
	'Forums_marked_read' => 'Todos los foros han sido marcados como le&iacute;dos',

// Viewforum
	'View_forum' => 'Ver foro',

	'Reached_on_error' => 'Ha llegado a esta p&aacute;gina debido a un error.',

	'Display_topics' => 'Mostrar temas anteriores',
	'ALL_TOPICS' => 'Todos los Topicos',

	'Topic_News_nb' => 'Noticia',
	'Topic_global_announcement_nb' => 'Anuncio global',
	'Topic_Announcement_nb' => 'Anuncio',
	'Topic_Sticky_nb' => 'Nota',
	'Topic_Moved_nb' => 'Movido',
	'Topic_Poll_nb' => 'Encuesta',
	'Topic_Event_nb' => 'Evento',
	'Topic_Announcement' => '<b>Anuncio:</b>',
	'Topic_Sticky' => '<b>Nota:</b>',
	'Topic_Moved' => '<b>Movido:</b>',
	'Topic_Poll' => '<b>Encuesta:</b>',
	'Topic_Event' => '<b>Evento:</b>',
	'Topic_global_announcement' => '<b>Anuncio global:</b>',
	'Post_global_announcement' => 'Anuncio global',


	'Mark_all_topics' => 'Marcar todos los temas como le&iacute;dos',
	'Topics_marked_read' => 'Todos los temas de este foro han sido marcados como le&iacute;dos',

/*
	'Rules_post_can' => '<b>Puede</b> crear mensajes',
	'Rules_post_cannot' => '<b>No puede</b> crear mensajes',
	'Rules_reply_can' => '<b>Puede</b> responder temas',
	'Rules_reply_can_own' => '<b>Puede</b> contestar sus temas en este foro',
	'Rules_reply_cannot' => '<b>No puede</b> responder temas',
	'Rules_edit_can' => '<b>Puede</b> editar sus mensajes',
	'Rules_edit_cannot' => '<b>No puede</b> editar sus mensajes',
	'Rules_delete_can' => '<b>Puede</b> borrar sus mensajes',
	'Rules_delete_cannot' => '<b>No puede</b> borrar sus mensajes',
	'Rules_vote_can' => '<b>Puede</b> votar en encuestas',
	'Rules_vote_cannot' => '<b>No puede</b> votar en encuestas',
*/
	'Rules_post_can' => '<b>Puede</b> crear mensajes',
	'Rules_post_cannot' => '<b>No puede</b> crear mensajes',
	'Rules_reply_can' => '<b>Puede</b> responder temas',
	'Rules_reply_can_own' => '<b>Puede</b> contestar sus temas en este foro',
	'Rules_reply_cannot' => '<b>No puede</b> responder temas',
	'Rules_edit_can' => '<b>Puede</b> editar sus mensajes',
	'Rules_edit_cannot' => '<b>No puede</b> editar sus mensajes',
	'Rules_delete_can' => '<b>Puede</b> borrar sus mensajes',
	'Rules_delete_cannot' => '<b>No puede</b> borrar sus mensajes',
	'Rules_vote_can' => '<b>Puede</b> votar en encuestas',
	'Rules_vote_cannot' => '<b>No puede</b> votar en encuestas',
	'Rules_moderate' => '<b>Puede</b> %smoderar este foro%s', // %s replaced by a href links, do not remove!

// 'No_topics_post_one' => 'There are no posts in this forum.<br />Click on the <b>Post New topic</b> link on this page to post one.',
	'No_topics_post_one' => 'No hay mensajes en este foro.<br />Pulse en <b>Publicar nuevo tema</b> en esta p&aacute;gina para crear uno.',

// Viewtopic
	'View_topic' => 'Ver tema',

	'Guest' => 'Invitado',
	'Post_subject' => '<b>T&iacute;tulo del mensaje</b>',
	'View_next_topic' => 'Ver siguiente tema',
	'View_previous_topic' => 'Ver tema anterior',
	'Submit_vote' => 'Enviar voto',
	'View_results' => 'Ver resultados',

	'No_newer_topics' => 'No hay temas m&aacute;s nuevos en este foro',
	'No_older_topics' => 'No hay temas anteriores en este foro',
	'No_posts_topic' => 'Este tema no tiene mensajes',

	'Display_posts' => 'Mostrar mensajes anteriores',
	'ALL_POSTS' => 'Todos los Posts',
	'Newest_First' => 'El m&aacute;s reciente primero',
	'Oldest_First' => 'El m&aacute;s antiguo primero',

	'Back_to_top' => 'Volver arriba',
	'Back_to_bottom' => 'P&aacute;gina inferior',

	'Read_profile' => 'Ver perfil del usuario',
	'Send_email' => 'Enviar correo al usuario',
	'Visit_website' => 'Visitar sitio web del usuario',
	'ICQ_status' => 'Estado ICQ',
	'Edit_delete_post' => 'Editar/Borrar este mensaje',
	'View_IP' => 'Ver direcci&oacute;n IP del autor',
	'Delete_post' => 'Borrar este tema',

	'wrote' => 'Escribi&oacute;', // proceeds the username and is followed by the quoted text
	'Quote' => 'Cita', // comes before bbcode quote output.
	'Code' => 'C&oacute;digo', // comes before bbcode code output.

	'Edited_time_total' => '&Uacute;ltima edici&oacute;n por %s el %s; editado %d vez', // Last edited by me on 12 Oct 2001; edited 1 time in total
	'Edited_times_total' => '&Uacute;ltima edici&oacute;n por %s el %s; editado %d veces', // Last edited by me on 12 Oct 2001; edited 2 times in total

	'Lock_topic' => 'Bloquear este tema',
	'Unlock_topic' => 'Desbloquear este tema',
	'Move_topic' => 'Mover este tema',
	'Delete_topic' => 'Borrar este tema',
	'Split_topic' => 'Separar este tema',

	'Stop_watching_topic' => 'Dejar de observar este tema',
	'Start_watching_topic' => 'Observar este tema por respuestas',
	'No_longer_watching' => 'Ya no se le notificar&aacute; de nuevas respuestas a este tema',
	'You_are_watching' => 'A partir de ahora se le notificar&aacute; de nuevas respuestas en este tema',

	'Total_votes' => 'Total de votos',

// Posting/Replying (Not private messaging!)
	'Message_body' => 'Cuerpo del mensaje',
	'Topic_review' => 'Revisar el tema',

	'No_post_mode' => 'No se especific&oacute; un modo de mensaje', // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

	'Post_a_new_topic' => 'Publicar un nuevo tema',
	'Post_a_reply' => 'Publicar una respuesta',
	'Post_topic_as' => 'Publicar tema como',
	'Edit_Post' => 'Editar mensaje',
	'Options' => 'Opciones',

	'PM_Read' => 'MP le&iacute;do',
	'PM_Unread' => 'MP sin leer',
	'PM_Replied' => 'MP respondido',

	'Post_Announcement' => 'Anuncio',
	'New_post_Announcement' => 'Nuevo anuncio',
	'Post_Sticky' => 'Nota',
	'New_post_Sticky' => 'Nueva nota',
	'Post_Normal' => 'Normal',

	'Confirm_delete' => '&iquest;Est&aacute; seguro de que quiere borrar este mensaje?',
	'Confirm_delete_poll' => '&iquest;Est&aacute; seguro de que quiere borrar esta encuesta?',

	'Flood_Error' => 'No puede publicar otro tema tan r&aacute;pido despu&eacute;s del &uacute;ltimo. Intente nuevamente en unos momentos.',
	'Empty_subject' => 'Debe especificar un asunto cuando cree un nuevo tema.',
	'Empty_message' => 'Debe escribir un texto al crear un mensaje.',
	'Forum_locked' => 'Este foro est&aacute; bloqueado: no se puede publicar, responder, ni editar mensajes en este tema.',
	'Topic_locked' => 'El tema est&aacute; bloqueado: no pueden editarse ni agregar mensajes.',
	'No_post_id' => 'Debe elegir un mensaje para modificar',
	'No_topic_id' => 'Debe elegir un tema para agregar una respuesta',
	'No_valid_mode' => 'S&oacute;lo puede ingresar, responder, editar o citar mensajes. Por favor, vuelva e int&eacute;ntelo nuevamente.',
	'No_such_post' => 'No existe el mensaje. Por favor, vuelva e intente nuevamente.',
	'Edit_own_posts' => 'Lo sentimos, pero s&oacute;lo puede editar sus propios mensajes.',
	'Delete_own_posts' => 'Lo sentimos, pero s&oacute;lo puede borrar sus propios mensajes.',
	'Cannot_delete_replied' => 'Lo sentimos, pero no puede borrar mensajes que han sido respondidos.',
	'Cannot_delete_poll' => 'Lo sentimos, pero no puede borrar encuestas activas.',
	'Empty_poll_title' => 'Debe crear un t&iacute;tulo para su encuesta.',
	'To_few_poll_options' => 'Debe crear al menos 2 opciones en la encuesta.',
	'To_many_poll_options' => 'Ha excedido la cantidad posible de opciones de encuesta.',
	'Post_has_no_poll' => 'Este mensaje no tiene encuesta.',
	'Already_voted' => 'Ya ha votado en esta encuesta.',
	'No_vote_option' => 'Debe elegir una opci&oacute;n cuando vota.',

	'Add_poll' => 'Agregar encuesta',
	'Add_poll_explain' => 'Si no desea agregar una encuesta a su tema, deje este campo en blanco.',
	'Poll_question' => 'Pregunta de la encuesta',
	'Poll_option' => 'Opci&oacute;n de la encuesta',
	'Add_option' => 'Agregar opci&oacute;n',
	'Update' => 'Actualizar',
	'Delete' => 'Borrar',
	'Poll_for' => 'Ejecutar encuesta durante',
	'Days' => 'D&iacute;as', // This is used for the Run poll for ... Days + in admin_forums for pruning
	'Poll_for_explain' => '[ Escriba 0 o deje en blanco para que la encuesta nunca termine ]',
	'Delete_poll' => 'Borrar encuesta',

	'POST_ENABLE_BBCODE' => 'Activar BBCode en este mensaje',
	'POST_ENABLE_SMILEYS' => 'Activar Emoticonos en este mensaje',
	'POST_ENABLE_HTML' => 'Activar HTML en este mensaje',
	'POST_ENABLE_ACRO_AUTO' => 'Activar acr&oacute;nimos y autoenlaces en este mensaje',
	'Disable_HTML_post' => 'Deshabilitar HTML en este mensaje',
	'Disable_ACRO_AUTO_post' => 'Deshabilitar siglas y autoenlaces en este mensaje',
	'Disable_BBCode_post' => 'Deshabilitar BBCode en este mensaje',
	'Disable_Smilies_post' => 'Deshabilitar emoticonos en este mensaje',

	'HTML_is_ON' => 'HTML est&aacute; <u>ON</u>',
	'HTML_is_OFF' => 'HTML est&aacute; <u>OFF</u>',
	'BBCode_is_ON' => '%sBBCode%s est&aacute; <u>ON</u>', // %s are replaced with URI pointing to FAQ
	'BBCode_is_OFF' => '%sBBCode%s est&aacute; <u>OFF</u>',
	'Smilies_are_ON' => 'Emoticonos est&aacute;n <u>ON</u>',
	'Smilies_are_OFF' => 'Emoticonos est&aacute;n <u>OFF</u>',

	'Attach_signature' => 'Adjuntar firma (la firma se puede cambiar en el perfil)',
	'Notify' => 'Notificarme cuando se publique una respuesta',
	'Delete_post' => 'Borrar este mensaje',

	'Stored' => 'Su mensaje se ha publicado correctamente',
	'Deleted' => 'Su mensaje se ha borrado correctamente',
	'Poll_delete' => 'Su encuesta se ha borrado correctamente',
	'Vote_cast' => 'Su voto se ha publicado',

	'Topic_reply_notification' => 'Notificaci&oacute;n de respuesta al tema',

	'Emoticons' => 'Emoticonos',
	'More_emoticons' => 'Ver m&aacute;s emoticonos',

// Private Messaging
	'Private_Messaging' => 'Mensajes privados',

	'Login_check_pm' => 'Con&eacute;ctese para revisar sus mensajes',
	'New_pms' => 'Tiene %d mensajes nuevos', // You have 2 new messages
	'New_pm' => 'Tiene %d mensaje nuevo', // You have 1 new message
	'No_new_pm' => 'No tiene mensajes privados nuevos',
	'Unread_pms' => 'Tiene %d mensajes privados no le&iacute;dos',
	'Unread_pm' => 'Tiene %d mensaje privado no le&iacute;do',
	'No_unread_pm' => 'No tiene mensajes no le&iacute;dos',
	'You_new_pm' => 'Tiene un nuevo mensaje privado en la bandeja de entrada',
	'You_new_pms' => 'Tiene nuevos mensajes privados en la bandeja de entrada',
	'You_no_new_pm' => 'No tiene mensajes privados nuevos',

	'Unread_message' => 'Mensaje no le&iacute;do',
	'Read_message' => 'Leer mensaje',

	'Read_pm' => 'Leer mensaje',
	'Post_new_pm' => 'Enviar mensaje',
	'Post_reply_pm' => 'Responder mensaje',
	'Post_quote_pm' => 'Citar mensaje',
	'Edit_pm' => 'Modificar mensaje',

	'Inbox' => 'Bandeja de entrada',
	'Outbox' => 'Bandeja de salida',
	'Savebox' => 'Bandeja de guardados',
	'Sentbox' => 'Bandeja de enviados',
	'Flag' => '*',
	'Subject' => 'Asunto',
	'From' => 'De',
	'To' => 'Para',
	'Date' => 'Fecha',
	'Mark' => 'Seleccionar',
	'Sent' => 'Enviado',
	'Saved' => 'Guardado',
	'Delete_marked' => 'Borrar los seleccionados',
	'Delete_all' => 'Borrar todos',
	'Save_marked' => 'Guardar los seleccionados',
	'Download_marked' => 'Descargar los seleccionados',
	'Mailbox' => 'Mailbox',
	'Save_message' => 'Guardar mensaje',
	'Delete_message' => 'Borrar mensaje',
	'Next_privmsg' => 'Siguiente mensaje privado',
	'Previous_privmsg' => 'Anterior mensaje privado',
	'No_newer_pm' => 'No hay mensajes privados nuevos.',
	'No_older_pm' => 'No hay mensajes privados antiguos',
	'Display_messages' => 'Mostrar mensajes de los anteriores', // Followed by number of days/weeks/months
	'All_Messages' => 'Todos los mensajes',

	'No_messages_folder' => 'No tiene mensajes en esta carpeta',

	'PM_disabled' => 'Se han desactivado los mensajes privados en este foro',
	'Cannot_send_privmsg' => 'Lo sentimos, pero el administrador le ha desactivado la opci&oacute;n de enviar mensajes privados.',
	'No_to_user' => 'Debe especificar un nombre de usuario a quien mandar este mensaje.',

	'Disable_HTML_pm' => 'Deshabilitar HTML en este mensaje',
	'Disable_ACRO_AUTO_pm' => 'Deshabilitar siglas y autoenlaces en este mensaje',
	'Disable_BBCode_pm' => 'Deshabilitar BBCode en este mensaje',
	'Disable_Smilies_pm' => 'Deshabilitar emoticonos en este mensaje',

	'Message_sent' => 'Su mensaje se ha enviado',

	
	

	'Send_a_new_message' => 'Enviar un nuevo mensaje privado',
	'Send_a_reply' => 'Responder a un mensaje privado',
	'Edit_message' => 'Editar mensaje privado',

	'Notification_subject' => '&iexcl;Ha recibido un nuevo mensaje privado!',

	'FIND_USERNAME' => 'Buscar un Usuario',
	'Find' => 'Buscar',
	'No_match' => 'No se hallaron coincidencias.',

	'No_post_id' => 'No se especific&oacute; un ID de mensaje',
	'No_such_folder' => 'La carpeta no existe',
	'No_folder' => 'No se especific&oacute; una carpeta',

	'Mark_all' => 'Marcar todos',
	'Unmark_all' => 'Desmarcar todos',

	'Confirm_delete_pm' => '&iquest;Est&aacute; seguro de que desea borrar este mensaje?',
	'Confirm_delete_pms' => '&iquest;Est&aacute; seguro de que desea borrar estos mensajes?',

	'Inbox_size' => 'Su bandeja de entrada est&aacute; %d%% llena', // eg. Your Inbox is 50% full
	'Sentbox_size' => 'Su bandeja de enviados est&aacute; %d%% llena',
	'Savebox_size' => 'Su bandeja de guardados est&aacute; %d%% llena',

	

// Profiles/Registration
	'Viewing_user_profile' => 'Viendo perfil :: %s', // %s is username
	'About_user' => 'Todo sobre %s', // %s is username
//Start Quick Administrator User Options and Information MOD
	'Quick_admin_options' => 'Administraci&oacute;n r&aacute;pida de opciones de usuario e informaci&oacute;n',
	'Admin_edit_profile' => 'Editar perfil del usuario',
	'Admin_edit_permissions' => 'Editar permisos de usuarios',
	'User_active' => 'El usuario <b>est&aacute;</b> activo',
	'User_not_active' => 'El usuario <b>no est&aacute;</b> activo',
	'Username_banned' => 'El usuario <b>est&aacute;</b> excluido',
	'Username_not_banned' => 'El usuario <b>no est&aacute;</b> excluido',
    'USER_BAN' => 'Banear',
    'USER_UNBAN' => 'Desbanear',

	'User_email_banned' => 'Correo del usuario [ %s ] <b>est&aacute;</b> excluido',
	'User_email_not_banned' => 'Correo del usuario <b>no est&aacute;</b> excluido',
//End Quick Administrator User Options and Information MOD
	'Preferences' => 'Preferencias',
	'Items_required' => 'Los campos marcados con * son obligatorios a menos que se especifique lo contrario.',
	'Registration_info' => 'Informaci&oacute;n de registro',
	'Profile_info' => 'Informaci&oacute;n de perfil',
	'Profile_info_warn' => 'Esta informaci&oacute;n ser&aacute; visible a todos',
	'Avatar_panel' => 'Panel de control de avatar',
	'Avatar_gallery' => 'Galer&iacute;a de avatares',

	'Website' => 'Sitio web',
	'Location' => 'Ubicaci&oacute;n',
	'Contact' => 'Contactar con',
	'Email_address' => 'Direcci&oacute;n de correo',
	'Email' => 'Correo',
	'Send_private_message' => 'Enviar mensaje privado',
	'Hidden_email' => '[ Oculto ]',
	'Search_user_posts' => 'Buscar los mensajes de este usuario',
	'Interests' => 'Intereses',
	'Occupation' => 'Ocupaci&oacute;n',
	'Poster_rank' => 'Rango del autor',

	'Total_posts' => 'Cantidad total de mensajes',
	'User_post_pct_stats' => '%.2f%% del total', // 1.25% of total
	'User_post_day_stats' => '%.2f mensajes por d&iacute;a', // 1.5 posts per day
	'Search_user_posts' => 'Buscar todos los mensajes de %s', // Find all posts by username
	'Search_user_topics_started' => 'Buscar todos los mensajes que empiezan por %s', // Find all topics started by username

	'Wrong_Profile' => 'No puede modificar un perfil que no sea el suyo.',

// Invision View Profile - BEGIN
	'Invision_Active_Stats' => 'Estad&iacute;sticas',
	'Invision_Communicate' => 'Comun&iacute;quese',
	'Invision_Info' => 'Informaci&oacute;n',
	'Invision_Member_Group' => 'Grupos',
	'Invision_Member_Title' => 'Rango',
	'Invision_Most_Active' => 'Mas activo en',
	'Invision_Most_Active_Posts' => '%s mensajes en este foro',
	'Invision_Details' => 'Detalles del autor',
	'Invision_PPD_Stats' => 'Mensajes por d&iacute;a',
	'Invision_Signature' => 'Firma',
	'Invision_Website' => 'P&aacute;gina web',
	'Invision_Total_Posts' => 'Mensajes acumulados en total',
	'Invision_User_post_pct_stats' => '( %.2f%% del total de los mensajes del foro )',
	'Invision_User_post_day_stats' => '%.2f mensajes por d&iacute;a',
	'Invision_Search_user_posts' => 'Buscar todos los mensajes de este usuario',
	'Invision_Posting_details' => 'Detalles del mensaje',
// Invision View Profile - END

	'Only_one_avatar' => 'S&oacute;lo se puede especificar un tipo de avatar',
	'File_no_data' => 'El archivo en la URL que ha proporcionado no contiene informaci&oacute;n (vac&iacute;o)',
	'No_connection_URL' => 'No se pudo conectar con la URL proporcionada',
	'Incomplete_URL' => 'La URL ingresada no es v&aacute;lida',
	'Wrong_remote_avatar_format' => 'La URL del avatar remoto no es v&aacute;lida',
	'No_send_account_inactive' => 'Lo sentimos, pero actualmente no se le puede enviar su contrase&ntilde;a ya que su cuenta est&aacute; desactivada. Por favor, contacte con el administrador para m&aacute;s informaci&oacute;n.',

	'Always_smile' => 'Siempre habilitar emoticonos',
	'Always_html' => 'Siempre permitir HTML',
	'Always_bbcode' => 'Siempre permitir BBCode',
	'Always_add_sig' => 'Siempre adjuntar mi firma',
	'Always_notify' => 'Siempre notificarme de respuestas',
	'Always_notify_explain' => 'Env&iacute;a un e-mail cuando alguien responde a un tema en que ha participado. Esta opci&oacute;n puede ser cambiada individualmente en cada mensaje desde la opci&oacute;n correspondiente en el formulario de publicaci&oacute;n del mensaje.',

	'Board_style' => 'Estilo del foro',
	'Board_lang' => 'Idioma del foro',
	'No_themes' => 'No hay estilos disponibles',
	'Timezone' => 'Zona horaria',
	'Date_format' => 'Formato de fecha',
	'Date_format_explain' => 'La sintaxis es id&eacute;ntica a la funci&oacute;n de PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> function.',
	'Signature' => 'Firma',
	'Signature_explain' => 'Este es un bloque de texto que se puede agregar a los mensajes que publique. Hay un l&iacute;mite de %d caracteres',
	'Public_view_email' => 'Mostrar siempre mi direcci&oacute;n de correo',

	'Current_password' => 'Contrase&ntilde;a actual',
	'New_password' => 'Nueva contrase&ntilde;a',
	'Confirm_password' => 'Confirmar nueva contrase&ntilde;a',
	'Confirm_password_explain' => 'Debe confirmar su contrase&ntilde;a actual si quiere cambiar &eacute;sta o e-mail',
	'password_if_changed' => 'Ingrese su contrase&ntilde;a s&oacute;lo si desea cambiarla',
	'password_confirm_if_changed' => 'Confirme su contrase&ntilde;a s&oacute;lo si est&aacute; cambi&aacute;ndola',

	'Avatar' => 'Avatar',
	'Avatar_explain' => 'Muestra una peque&ntilde;a imagen bajo su nombre y rango en cada mensaje. S&oacute;lo puede mostrarse una imagen, y ni su ancho ni su alto puede superar los %d p&iacute;xeles. El tama&ntilde;o del archivo no puede exceder de los %d KB.',
	'Upload_Avatar_file' => 'Subir un avatar desde su PC',
	'Upload_Avatar_URL' => 'Subir un avatar desde una URL',
	'Upload_Avatar_URL_explain' => 'Ingrese la URL del avatar, &eacute;ste ser&aacute; copiado a este sitio.',
	'Pick_local_Avatar' => 'Elegir un avatar de la galer&iacute;a',
	'Link_remote_Avatar' => 'Vincular a un avatar fuera de este sitio',
	'Link_remote_Avatar_explain' => 'Ingrese la URL donde se halla el avatar.',
	'Avatar_URL' => 'URL de la imagen del avatar',
	'Select_from_gallery' => 'Elegir avatar de la galer&iacute;a',
	'View_avatar_gallery' => 'Ver galer&iacute;a',

	'Select_avatar' => 'Elegir avatar',
	'Return_profile' => 'Cancelar avatar',
	'Select_category' => 'Elegir categor&iacute;a',

	'Delete_Image' => 'Borrar imagen',
	'Current_Image' => 'Imagen actual',

	'Notify_on_privmsg' => 'Notificar de nuevos mensajes privados',
	'Popup_on_privmsg' => 'Desplegar nueva ventana cuando haya mensaje privado nuevo',
	'Popup_on_privmsg_explain' => 'Algunas plantillas pueden tratar de abrir una ventana nueva para informarle de un nuevo mensaje.',
	'Hide_user' => 'Ocultar mi estado de conexi&oacute;n (conectado/oculto)',

	'Profile_updated' => 'Su perfil ha sido actualizado',
	'Profile_updated_inactive' => 'Su perfil ha sido actualizado. Sin embargo ha cambiado informaci&oacute;n vital y su cuenta est&aacute; ahora desactivada. Revise su correo para saber c&oacute;mo reactivarla o, si se necesita que un administrador la reactive, espere y ser&aacute; notificado.',

	'Password_mismatch' => 'Las contrase&ntilde;as ingresadas no coinciden.',
	'Current_password_mismatch' => 'La contrase&ntilde;a que ha ingresado no coincide con la que est&aacute; almacenada en la base de datos.',
	'Password_long' => 'Su contrase&ntilde;a no puede exceder los 32 caracteres.',
	'Username_taken' => 'Lo sentimos, pero ese nombre de usuario ya est&aacute; en uso.',
	'Username_invalid' => 'Lo sentimos, pero ese nombre de usuario contiene caracteres no v&aacute;lidos.',
	'Username_disallowed' => 'Lo sentimos, pero ese nombre de usuario ha sido prohibido.',
	'Email_taken' => 'Lo sentimos, pero esa direcci&oacute;n de correo ya se encuentra registrada por otro usuario.',
	'Email_banned' => 'Lo sentimos, pero esa direcci&oacute;n de correo ha sido excluida.',
	'Email_invalid' => 'Lo sentimos, pero esa direcci&oacute;n de correo es inv&aacute;lida.',
	'Signature_too_long' => 'Su firma es muy larga.',
	'Fields_empty' => 'Debe completar los campos requeridos.',
	'Avatar_filetype' => 'El tipo de imagen del avatar debe ser .jpg, .gif o .png',
	'Avatar_filesize' => 'El tama&ntilde;o de la imagen del avatar debe ser menor a %d KB', // The avatar image file size must be less than 6 KB
	'Avatar_imagesize' => 'La imagen del avatar debe tener menos de %d p&iacute;xeles de ancho y %d p&iacute;xeles de alto.',

	'Welcome_subject' => 'Bienvenido al foro de %s', // Welcome to my.com forums
	'New_account_subject' => 'Nueva cuenta de usuario',
	'Account_activated_subject' => 'Cuenta activada',

	'Account_added' => 'Gracias por registrarse. Su cuenta ha sido creada. Ahora puede conectarse con su nombre de usuario y contrase&ntilde;a',
	'Account_inactive' => 'Su cuenta fue creada. Sin embargo, este foro requiere que active su cuenta. Una clave de activaci&oacute;n ha sido enviada a su correo. Rev&iacute;selo para m&aacute;s informaci&oacute;n sobre c&oacute;mo completar la activaci&oacute;n.',
	'Account_inactive_admin' => 'Su cuenta fue creada. Sin embargo, este foro requiere que un administrador active su cuenta. Se ha enviado un correo para notificar al administrador. Se le enviar&aacute; un correo cuando &eacute;ste la active.',
	'Account_active' => 'Su cuenta ha sido activada. Gracias por registrarse.',
	'Account_active_admin' => 'La cuenta ha sido activada.',
	'Reactivate' => '&iexcl;Reactive su cuenta!',
	'Already_activated' => 'Ya ha activado su cuenta.',
	'COPPA' => 'Su cuenta ha sido creada, pero debe ser aprobada. Por favor, revise su correo para m&aacute;s detalles.',

	'Registration' => 'Condiciones de registro',
	'Reg_agreement' => 'Si bien los administradores y moderadores de este foro tratar&aacute;n de eliminar o modificar cualquier material cuestionable lo m&aacute;s r&aacute;pido que puedan, es imposible revisar todos los mensajes. Por lo tanto, usted es consciente de que los mensajes en este foro son las opiniones y expresiones de sus autores y no de los administradores y moderadores (con excepci&oacute;n de los mensajes de estas personas).<br /><br />Usted est&aacute; de acuerdo con no enviar mensajes que puedan ser abusivos, obscenos, vulgares, amenazantes, de &iacute;ndole sexual, o cualquier otro material que de alguna forma viole leyes vigentes en su territorio. Si publicase material de esa &iacute;ndole, su cuenta de acceso al foro ser&aacute; cancelada y su proveedor de acceso a internet ser&aacute; informado. La direcci&oacute;n IP de todos los mensajes es guardada para ayudar a cumplir estas normas. Usted est&aacute; de acuerdo en que los administradores y moderadores de este foro tienen el derecho de modificar, cerrar, bloquear, mover y/o borrar cualquier tema o mensaje seg&uacute;n ellos lo consideren necesario. Como usuario, usted permite que toda la informaci&oacute;n ingresada se almacene en una base de datos. Si bien esta informaci&oacute;n no ser&aacute; entregada ni distribuida a terceros, los administradores y moderadores no son responsables por cualquier mensaje no convencional que exponga esa informaci&oacute;n, y tampoco pueden responsabilizarse por intentos de hackers que puedan llevar a que esta informaci&oacute;n confidencial sea descubierta.<br /><br />Este foro usa "cookies" para almacenar informaci&oacute;n en su ordenador. No contienen ninguno de sus datos personales, s&oacute;lo sirven para mejorar su interfaz. La direcci&oacute;n de correo s&oacute;lo se usa para confirmar sus detalles de registro y contrase&ntilde;a (y para enviarle una nueva en caso de que la olvide).<br /><br />Pulsando en el enlace para registrarse, usted muestra su conformidad con estos t&eacute;rminos y condiciones.',

	'Agreement' => 'Acuerdo',
	'Agree_under_13' => 'Estoy de acuerdo con estos t&eacute;rminos y condiciones y tengo menos de 13 a&ntilde;os de edad',
	'Agree_over_13' => 'Estoy de acuerdo con estos t&eacute;rminos y condiciones y tengo m&aacute;s de o exactamente 13 a&ntilde;os de edad',
	'Agree_not' => 'No estoy de acuerdo con estos t&eacute;rminos y condiciones',
	'Agree_checkbox' => 'Acepto espec&iacute;ficamente estos t&eacute;rminos',
	'Agree_checkbox_Error' => 'Necesita marcar el recuadro "ACEPTO" en la parte inferior de la p&aacute;gina para registrarse!',

	'Wrong_activation' => 'La clave de activaci&oacute;n no coincide con ninguna cuenta de la base de datos.',
	'Send_password' => 'Env&iacute;enme una nueva contrase&ntilde;a',
	'Password_updated' => 'Se ha creado una nueva contrase&ntilde;a; por favor, revise su correo para m&aacute;s detalles sobre c&oacute;mo activarla.',
	'No_email_match' => 'La direcci&oacute;n de e-mail que ha ingresado no coincide con ninguna cuenta de usuario de nuestra base de datos.',
	'New_password_activation' => 'Activaci&oacute;n de nueva contrase&ntilde;a',
	'Password_activated' => 'Su cuenta ha sido reactivada. Para conectarse, por favor, use la contrase&ntilde;a provista en el correo que ha recibido.',

	'Send_email_msg' => 'Enviar un e-mail',
	'No_user_specified' => 'No ha especificado un usuario',
	'User_prevent_email' => 'Este usuario no desea recibir correo. Trate de enviarle un mensaje privado.',
	'User_not_exist' => 'El usuario especificado no existe',
	'CC_email' => 'Enviar una copia de este correo a usted mismo',
	'Email_message_desc' => 'Este mensaje se enviar&aacute; como texto simple, as&iacute; que no incluya c&oacute;digo HTML o BBCode. La respuesta para este mensaje llegar&aacute; a su direcci&oacute;n de e-mail registrado.',
	'Flood_email_limit' => 'No puede enviar otro correo en este momento. Intente de nuevo m&aacute;s tarde.',
	'Recipient' => 'Destinatario',
	'Email_sent' => 'El correo ha sido enviado.',
	'Send_Email' => 'Enviar correo',
	'Empty_sender_email' => 'Debe especificar un remitente en el e-mail.',
	'Empty_subject_email' => 'Debe especificar un asunto para el correo.',
	'Empty_message_email' => 'Debe ingresar un mensaje para que el correo pueda ser enviado.',

// Visual confirmation system strings
	'CONFIRM_CODE_WRONG' => 'El c&oacute;digo de confirmaci&oacute;n que ha ingresado es incorrecto.',
	'TOO_MANY_ATTEMPTS' => 'Ha excedido el n&uacute;mero de intentos de registro permitidos. Int&eacute;ntelo m&aacute;s tarde.',
	'CONFIRM_CODE_IMPAIRED' => 'Aseg&uacute;rese de escribir bien su direcci&oacute;n de correo. El correo de activaci&oacute;n de su cuenta de usuario (para comprobar que el correo que pone es realmente suyo) llegar&aacute; ah&iacute;. Tan s&oacute;lo suele tardar en llegar unos minutos desde que se registra. Puede que est&eacute; en la carpeta de <b>"Correo no deseado"</b>, sobre todo en cuentas tipo <b>Hotmail</b> y <b>MSN</b>. Verif&iacute;quelo y active su cuenta.<br /> Si tiene problemas para leer este c&oacute;digo, contacte con el %sAdministrador%s para asistencia.',
	'CONFIRM_CODE' => 'C&oacute;digo de confirmaci&oacute;n',
	'CONFIRM_CODE_EXPLAIN' => 'Ingrese el c&oacute;digo exactamente como lo ve. No hay ceros.',

// Members list
	'Select_sort_method' => 'Elija un m&eacute;todo para ordenar',
	'Sort' => 'Ordenar',
	'SORT_TOP_TEN' => 'Los 10 usuarios que m&aacute;s escriben',
	'SORT_JOINED' => 'Fecha de registro',
	'SORT_USERNAME' => 'Nombre',
	'SORT_LOCATION' => 'Ubicaci&oacute;n',
	'SORT_POSTS' => 'Cantidad de mensajes',
	'SORT_EMAIL' => 'e-mail',
	'SORT_WEBSITE' => 'Sitio web',
	'Sort_Ascending' => 'Ascendente',
	'Sort_Descending' => 'Descendente',
	'Order' => 'Orden',

// Group control panel
	'Group_Control_Panel' => 'Panel de control de grupos',
	'Group_member_details' => 'Detalles de usuarios del grupo',
	'Group_member_join' => 'Unirse a un grupo',

	'Group_Information' => 'Informaci&oacute;n de grupo',
	'Group_name' => 'Nombre del grupo',
	'Group_description' => 'Descripci&oacute;n del grupo',
	'Group_membership' => 'Pertenecencia al grupo',
	'Group_Members' => 'Usuarios del grupo',
	'Group_Moderator' => 'Moderador del grupo',
	'Pending_members' => 'Usuarios pendientes',

	'Group_type' => 'Tipo de grupo',
	'Group_open' => 'Grupo abierto',
	'Group_closed' => 'Grupo cerrado',
	'Group_hidden' => 'Grupo oculto',

	'Current_memberships' => 'Usuarios actuales',
	'Non_member_groups' => 'Grupos donde no es usuario',
	'Memberships_pending' => 'Pertenencias al grupo pendientes',

	'No_groups_exist' => 'No existen grupos',
	'Group_not_exist' => 'No existe ese grupo',

	'Join_group' => 'Unirse a grupo',
	'No_group_members' => 'Este grupo no tiene usuarios',
	'Group_hidden_members' => 'Este grupo est&aacute; oculto; no puede ver sus componentes',
	'No_pending_group_members' => 'Este grupo no tiene usuarios pendientes',
	'Group_joined' => 'Se ha suscrito correctamente a este grupo.<br />Ser&aacute; notificado cuando su suscripci&oacute;n sea aprobada por el moderador del grupo.',
	'Group_request' => 'Se ha realizado una petici&oacute;n para unirse al grupo',
	'Group_approved' => 'Su petici&oacute;n ha sido aprobada.',
	'Group_added' => 'Ha sido agregado a este grupo.',
	'Already_member_group' => 'Usted ya es miembro de este grupo',
	'User_is_member_group' => 'El usuario ya es miembro de este grupo',
	'Group_type_updated' => 'Se ha actualizado correctamente el tipo de grupo',
	'Could_not_add_user' => 'El usuario seleccionado no existe',
	'Could_not_anon_user' => 'No puede unirse an&oacute;nimamente a un grupo',
	'Confirm_unsub' => '&iquest;Est&aacute; seguro de que quiere cancelar su suscripci&oacute;n a este grupo?',
	'Confirm_unsub_pending' => 'Su suscripci&oacute;n a este grupo no ha sido aprobada todav&iacute;a. &iquest;Est&aacute; seguro de que desea cancelar la suscripci&oacute;n?',
	'Unsub_success' => 'Su suscripci&oacute;n a este grupo ha sido cancelada',
	'Approve_selected' => 'Aprobar los seleccionados',
	'Deny_selected' => 'Denegar los seleccionados',
	'Not_logged_in' => 'Debe estar conectado para unirse a un grupo',
	'Remove_selected' => 'Borrar los seleccionados',
	'Add_member' => 'Agregar usuario',
	'Not_group_moderator' => 'Usted no es el moderador de este grupo, por lo que no puede ejecutar esta acci&oacute;n.',
	'Login_to_join' => 'Con&eacute;ctese para administrar la pertenencia al grupo',
	'This_open_group' => 'Este es un grupo abierto: pulse aqu&iacute; para pedir unirse',
	'This_closed_group' => 'Este es un grupo cerrado: no se aceptan m&aacute;s usuarios',
	'This_hidden_group' => 'Este es un grupo oculto: no se permite agregar autom&aacute;ticamente usuarios',
	'Member_this_group' => 'Usted es miembro de este grupo',
	'Pending_this_group' => 'Su pertenencia a este grupo est&aacute; pendiente',
	'Are_group_moderator' => 'Usted es el moderador de este grupo',
	'None' => 'Ninguno',
	'Subscribe' => 'Suscribirse',
	'Unsubscribe' => 'Cancelar suscripci&oacute;n',
	'View_Information' => 'Ver informaci&oacute;n',

// Search
	'Search_query' => 'B&uacute;squeda',
	'Search_options' => 'Opciones de b&uacute;squeda',

	'Search_keywords' => 'Buscar por palabras clave',
	'Search_keywords_explain' => 'Puede usar <u>AND</u> para definir palabras que deben estar en los resultados, <u>OR</u> para definir palabras que podr&iacute;an estar en los resultados, y <u>NOT</u> para definir palabras que no deber&iacute;an estar en los resultados. Use * como comod&iacute;n para buscar partes de una palabra',
	'Search_author' => 'Buscar por autor',
	'Search_author_explain' => 'Use * como comod&iacute;n para buscar partes de una palabra',
	'Search_author_topic_starter' => 'Buscar solo temas empezados por este autor',

	'Search_for_any' => 'Buscar cualquiera de los t&eacute;rminos o usar la b&uacute;squeda tal cual se escribi&oacute;',
	'Search_for_all' => 'Buscar todas las palabras',
	'Search_title_msg' => 'Buscar en t&iacute;tulos y texto de los mensajes',
	'Search_title_only' => 'Buscar solo el t&iacute;tulo del tema',
	'Search_msg_only' => 'Buscar s&oacute;lo en el texto de los mensajes',

	'Return_first' => 'Mostrar los primeros', // followed by xxx characters in a select box
	'characters_posts' => 'Caracteres de los mensajes',

	'Search_previous' => 'Buscar los anteriores', // followed by days, weeks, months, year, all in a select box

	'Sort_by' => 'Ordenar por',
	'Sort_Time' => 'Fecha de publicaci&oacute;n',
	'Sort_Post_Subject' => 'Asunto del mensaje',
	'Sort_Topic_Title' => 'T&iacute;tulo del tema',
	'Sort_Author' => 'Autor',
	'Sort_Forum' => 'Foro',

	'Display_results' => 'Mostrar resultados como',
	'All_available' => 'Todos los disponibles',
	'No_searchable_forums' => 'No tiene permisos para realizar b&uacute;squedas en este foro.',

	'No_search_match' => 'No hay temas ni mensajes que coincidan con su criterio de b&uacute;squeda',
	'Found_search_match' => 'Se encontr&oacute; %d resultado', // eg. Search found 1 match
	'Found_search_matches' => 'Se encontraron %d resultados', // eg. Search found 24 matches

	'Close_window' => 'Cerrar ventana',

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
	'Sorry_auth_announce' => 'Lo sentimos, pero s&oacute;lo %s pueden publicar anuncios en este foro.',
	'Sorry_auth_sticky' => 'Lo sentimos, pero s&oacute;lo %s pueden publicar mensajes permanentes en este foro.',
	'Sorry_auth_read' => 'Lo sentimos, pero s&oacute;lo %s pueden leer temas en este foro.',
	'Sorry_auth_post' => 'Lo sentimos, pero s&oacute;lo %s pueden publicar temas en este foro.',
	'Sorry_auth_reply' => 'Lo sentimos, pero s&oacute;lo %s pueden responder mensajes en este foro.',
	'Sorry_auth_edit' => 'Lo sentimos, pero s&oacute;lo %s pueden modificar mensajes en este foro.',
	'Sorry_auth_delete' => 'Lo sentimos, pero s&oacute;lo %s pueden borrar mensajes en este foro.',
	'Sorry_auth_vote' => 'Lo sentimos, pero s&oacute;lo %s pueden votar en encuestas en este foro.',

// These replace the %s in the above strings
	'Auth_Anonymous_Users' => '<b>Usuarios invitados</b>',
	'Auth_Registered_Users' => '<b>Usuarios registrados</b>',
	'Auth_Self_Users' => '<b>Usuarios espec&iacute;ficos</b>',
	'Auth_Users_granted_access' => '<b>Usuarios con permisos especiales</b>',
	'Auth_Moderators' => '<b>Moderadores</b>',
	'Auth_Administrators' => '<b>Administradores</b>',

	'Not_Moderator' => 'Usted no es moderador de este foro.',
	'Not_Authorized' => 'No autorizado',

	'You_been_banned' => 'Se le ha denegado el acceso a este foro.<br />Por favor, contacte con el administrador o un moderador para m&aacute;s informaci&oacute;n.',

// Viewonline
	'Reg_users_zero_online' => 'Hay 0 usuarios registrados y ', // There are 5 Registered and
	'Reg_users_online' => 'Hay %d usuarios registrados y ', // There are 5 Registered and
	'Reg_user_online' => 'Hay %d usuario registrado y ', // There is 1 Registered and
	'Hidden_users_zero_online' => '0 ocultos conectados', // 6 Hidden users online
	'Hidden_users_online' => '%d ocultos conectados', // 6 Hidden users online
	'Hidden_user_online' => '%d oculto conectado', // 6 Hidden users online
	'Guest_users_online' => 'Hay %d usuarios an&oacute;nimos conectados', // There are 10 Guest users online
	'Guest_users_zero_online' => 'Hay 0 usuarios an&oacute;nimos conectados', // There are 10 Guest users online
	'Guest_user_online' => 'Hay %d usuario an&oacute;nimo conectado', // There is 1 Guest user online
	'No_users_browsing' => 'No hay usuarios viendo el foro en este momento',

	'ONLINE_EXPLAIN' => 'Estos datos est&aacute;n basados en la actividad de usuarios de los &uacute;ltimos 5 minutos',
	'ONLINE_TODAY' => 'Estos datos est&aacute;n basados en la actividad de usuarios en las &uacute;ltimas 24 horas',

	'Forum_Location' => 'Ubicaci&oacute;n en el foro',
	'Last_updated' => '&Uacute;ltima actualizaci&oacute;n',

	'Forum_index' => '&Iacute;ndice del foro',
	'Portal' => 'Portal',
	'Logging_on' => 'Conect&aacute;ndose',
	'Posting_message' => 'Publicando un mensaje',
	'Searching_forums' => 'Buscando en los foros',
	'Viewing_profile' => 'Viendo perfil',
	'Viewing_HACKSLIST' => 'Viendo la lista de MODs',
	'Viewing_online' => 'Viendo qui&eacute;n est&aacute; conectado',
	'Viewing_member_list' => 'Viendo la lista de usuarios',
	'Viewing_priv_msgs' => 'Viendo mensajes privados',
	'Viewing_FAQ' => 'Viendo las preguntas frecuentes',
	'Viewing_KB' => 'Viendo biblioteca',
	'Viewing_RSS' => 'RSS',


// Moderator Control Panel
	'Mod_CP' => 'Panel de control del moderador',
	'Mod_CP_explain' => 'Usando el formulario siguiente puede ejecutar operaciones masivas de moderaci&oacute;n en este foro. Puede bloquear, desbloquear, mover o eliminar cualquier n&uacute;mero de temas.',

	'Select' => 'Seleccionar',
	'Delete' => 'Borrar',
	'Move' => 'Mover',
	'Copy' => 'Copiar',
	'Lock' => 'Bloquear',
	'Unlock' => 'Desbloquear',

	'Topics_Removed' => 'Los temas seleccionados han sido borrados correctamente.',
	'Topics_Locked' => 'Los temas seleccionados han sido cerrados.',
	'Topics_Moved' => 'Los temas seleccionados han sido movidos.',
	'Topics_Unlocked' => 'Los temas seleccionados han sido desbloqueados.',
	'No_Topics_Moved' => 'No se ha movido ning&uacute;n tema.',

	'Confirm_delete_topic' => '&iquest;Est&aacute; seguro de que quiere borrar el/los tema(s) seleccionado(s)?',
	'Confirm_lock_topic' => '&iquest;Est&aacute; seguro de que quiere cerrar el/los tema(s) seleccionado(s)?',
	'Confirm_unlock_topic' => '&iquest;Est&aacute; seguro de que quiere desbloquear el/los tema(s) seleccionado(s)?',
	'Confirm_move_topic' => '&iquest;Est&aacute; seguro de que quiere mover el/los tema(s) seleccionado(s)?',

	'Move_to_forum' => 'Mover al foro',
	'Leave_shadow_topic' => 'Dejar enlace de referencia sombreado en el foro anterior.',

	'Split_Topic' => 'Panel de control para divisi&oacute;n de temas',
	'Split_Topic_explain' => 'Usando el siguiente formulario puede separar un tema en dos, ya sea seleccionando los mensajes individualmente o separ&aacute;ndolos a partir de determinado mensaje',
	'Split_title' => 'T&iacute;tulo del nuevo tema',
	'Split_forum' => 'Foro donde colocar el tema nuevo',
	'Split_posts' => 'Separar los mensajes seleccionados',
	'Split_after' => 'Separar a partir del mensaje seleccionado',
	'Topic_split' => 'El tema seleccionado ha sido separado correctamente',

	'Too_many_error' => 'Ha seleccionado m&aacute;s de un mensaje. S&oacute;lo puede seleccionar un mensaje para separar el tema a partir de &eacute;l',

	'None_selected' => 'No ha seleccionado ning&uacute;n tema donde aplicar esta acci&oacute;n. Por favor, vuelva atr&aacute;s y seleccione por lo menos uno.',
	'New_forum' => 'Nuevo foro',

	'This_posts_IP' => 'Direcci&oacute;n IP para este mensaje',
	'Other_IP_this_user' => 'Otras direcciones IP que este usuario ha usado para crear mensajes',
	'Users_this_IP' => 'Usuarios publicando mensajes desde esta direcci&oacute;n IP',
	'IP_info' => 'Informaci&oacute;n IP',
	'Lookup_IP' => 'Buscar direcci&oacute;n IP',

// Errors (not related to a specific failure on a page)
	'Information' => 'Informaci&oacute;n',
	'Critical_Information' => 'Informaci&oacute;n cr&iacute;tica',

	'General_Error' => 'Error general',
	'Critical_Error' => 'Error cr&iacute;tico',
	'An_error_occured' => 'Ha ocurrido un error',
	'A_critical_error' => 'Ha ocurrido un error cr&iacute;tico',
	'Admin_reauthenticate' => 'Para administrar el foro, debe identificarse de nuevo.',

	'Topic_description' => 'Descripci&oacute;n de su tema',
// 'Description' => 'Descripci&oacute;n del tema',

	'Guestbook' => 'Libro de visitas',
	'Viewing_guestbook' => 'Leer libro de visitas',


	'Warn_new_post' => 'Hay por lo menos una nueva contestaci&oacute;n en este tema. Por favor, repase las nuevas respuestas en la revisi&oacute;n del tema y vuelva a enviar su mensaje.',

	'Today_at' => '<b class="date-today">Hoy</b> a las ',
	'Yesterday_at' => '<b class="date-yesterday">Ayer</b> a las ',
	'TODAY' => '<b class="date-today">Hoy</b>',
	'YESTERDAY' => '<b class="date-yesterday">Ayer</b>',

// Birthday - BEGIN
	'Birthday' => 'Fecha de nacimiento',
	'No_birthday_specify' => 'No especificada',
	'Age' => 'Edad',
	'Wrong_birthday_format' => 'El formato de la fecha de nacimiento es incorrecto.',
	'Birthday_to_high' => 'Lo sentimos, pero no admitimos  usuarios mayores de %d a&ntilde;os',
	'Birthday_require' => 'La fecha de nacimiento es un dato obligatorio.',
	'Birthday_to_low' => 'Lo sentimos, pero no se admiten usuarios menores de %d a&ntilde;os',
	'Submit_date_format' => 'd-m-Y', //php date() format - Note: ONLY d, m and Y may be used and SHALL ALL be used (different seperators are accepted)
	'Birthday_greeting_today' => 'Queremos desearle un feliz %s cumplea&ntilde;os.',//%s is substituted with the users age
	'Birthday_greeting_prev' => 'Con un poco de retraso, ya que cumpliste %s a&ntilde;os en %s, te deseamos un feliz cumplea&ntilde;os.',//%s is substituted with the users age, and birthday 
	'Greeting_Messaging' => 'Felicidades',
	'Birthday_today' => 'Hoy es el cumplea&ntilde;os de: ',
	'Birthday_week' => 'En los pr&oacute;ximos %d d&iacute;as, cumplen a&ntilde;os los siguientes usuarios:',
	'Nobirthday_week' => 'No hay usuarios que cumplan a&ntilde;os en los pr&oacute;ximos %d d&iacute;as', // %d is substitude with the number of days
	'Nobirthday_today' => 'Ning&uacute;n usuario cumple a&ntilde;os hoy',
	'Year' => 'A&ntilde;o',
	'Month' => 'Mes',
	'Day' => 'D&iacute;a',
// Birthday - END

// Start add - Gender MOD
	'Gender' => 'Sexo',//used in users profile to display witch gender he/she is
	'Male' => 'Masculino',
	'Female' => 'Femenino',
	'No_gender_specify' => 'Sin especificar',
	'Gender_require' => 'En esta web debe especificar su sexo.',
// End add - Gender MOD

// Start add - Who viewed a topic MOD
	'Topic_view_users' => 'Lista de los usuarios que han visto este tema',
	'Topic_time' => '&Uacute;ltima vez',
	'Topic_count' => 'Veces',
	'Topic_view_count' => 'Contador de vistas del tema',
// End add - Who viewed a topic MOD

// Start add - Yellow card admin MOD
	'Give_G_card' => 'Reactivar usuario',
	'Give_Y_card' => 'Sacar tarjeta amarilla #%d',
	'Give_R_card' => 'Expulsar a este usuario',
	'Ban_update_sucessful' => 'La lista de expulsados ha sido actualizada correctamente',
	'Ban_update_green' => 'El usuario ha sido reactivado',
	'Ban_update_yellow' => 'El usuario ha recibido una tarjeta amarilla, ahora tiene %d tarjetas de un maximo de %d amarillas',
	'Ban_update_red' => 'El usuario ha sido baneado',
	'Ban_reactivate' => 'Su cuenta ha sido reactivada',
	'Ban_warning' => 'Ha recibido una tarjeta amarilla, advertencia',
	'Ban_blocked' => 'Su cuenta ha sido bloqueada',
	
/*
	'Rules_ban_can' => '<b>Puede</b> expulsar a otros usuarios',
	'Rules_greencard_can' => '<b>Puede</b> quitar Tarjetas verdes',
	'Rules_bluecard_can' => '<b>Puede</b> Reportar mensajes a los Moderadores',
*/
	'Rules_ban_can' => '<b>Puede</b> expulsar a otros usuarios',
	'Rules_greencard_can' => '<b>Puede</b> quitar tarjetas verdes',
	'Rules_bluecard_can' => '<b>Puede</b> reportar mensajes a los moderadores',
	'user_no_email' => 'El usuario no tiene correo, por lo tanto, no le ha llegado  ninguna notificacion acerca de esta acci&oacute;n. Puede enviarle un MP',
	'user_already_banned' => 'El usuario hab&iacute;a sido baneado con anterioridad',
	'Ban_no_admin' =>'El usuario es un administrador, por lo tanto no puede ser advertido o expulsado',
	'Give_b_card' => 'Enviar tarjeta azul (informar a los moderadores de este foro)',
	'Clear_b_card' => 'El mensaje ya tiene %d tarjetas azules. Si presiona aqu&iacute; se borraran todas',
	'No_moderators' => 'El foro no tiene moderadores. No se ha podido notificar',
	'Post_reported' => 'El mensaje ha sido notificado a %d moderadores',
	'Post_reported_1' => 'El mensaje ha sido notificado al moderador',
	'Post_report' => 'T&iacute;tulo de la notificaci&oacute;n:', //Subject in email notification
	'Post_reset' => 'Se han reiniciado las tarjetas azules en este mensaje',
	'Search_only_bluecards' => 'B&uacute;squeda solamente entre los mensajes con las tarjetas azules',
	'Send_message' => 'Pulse %saqu&iacute;%s para escribir un mensaje a los moderadores o <br />',
	'Send_PM_user' => 'Pulse %saqu&iacute;%s para escribir un MP a este usuario o',
	'Link_to_post' => 'Pulse %saqu&iacute;%s para volver al mensaje
--------------------------------

',
	'Post_a_report' => 'Mensaje a reportar',
	'Report_stored' => 'Su notificaci&oacute;n se ha incorporado correctamente',
	'Send_report' => 'Pulse %saqu&iacute;%s para ir de nuevo al mensaje original',
	'Red_card_warning' => 'Est&aacute; a punto de aplicar una tarjeta roja al usuario: %s con ello prohibir&aacute; al usuario la entrada al foro. &iquest;Est&aacute; seguro de querer expulsar al usuario?',
	'Yellow_card_warning' => 'Est&aacute; a punto de aplicar una tarjeta amarilla al usuario: %s con ello se enviar&aacute; una advertencia al usuario. &iquest;Est&aacute; seguro de querer enviar una advertencia al usuario?',
	'Green_card_warning' => 'Est&aacute; a punto de aplicar una tarjeta verde al usuario: %s con ello readmitir&aacute; a este usuario en el foro. &iquest;Est&aacute; seguro de querer readmitirle?',
	'Blue_card_warning' => 'Est&aacute; a punto de aplicar una tarjeta azul al mensaje, con lo que los moderadores del foro recibir&aacute;n una notificaci&oacute;n sobre &eacute;l. &iquest;Est&aacute; seguro de querer hacerlo?',
	'Clear_blue_card_warning' => 'Est&aacute; a punto de reajustar el contador de tarjetas azules para este mensaje. &iquest;Quiere continuar? ',
	'Warnings' => 'Avisos : %d', //shown beside users post, if any warnings given to the user
	'Banned' => 'Baneado',//shown beside users post, if user are banned

// Last visit - BEGIN
	'Last_logon' => '&Uacute;ltima visita',
	'Hidde_last_logon' => 'Oculto',
	'Never_last_logon' => 'Nunca',
	'Users_today_zero_total' => 'Ning&uacute;n usuarios ha visitado este sitio hoy: ',
	'Users_today_total' => 'En total, <b>%d</b> usuarios han visitado este sitio hoy: ',
	'User_today_total' => 'En total, <b>%d</b> usuario ha visitado este sitio hoy: ',
	'Users_lasthour_explain' => ', %d en la &uacute;ltima hora.',
	'Users_lasthour_none_explain' => '', //showen of none have visited the last hour, fill if you like

	'Years' => 'A&ntilde;os',
	'Year' => 'A&ntilde;o',
	'Weeks' => 'Semanas',
	'Week' => 'Semana',
	'Day' => 'D&iacute;a',
	'Total_online_time' => 'Duraci&oacute;n total de conexi&oacute;n',
	'Last_online_time' => '&Uacute;ltima duraci&oacute;n de conexi&oacute;n',
	'Number_of_visit' => 'N&uacute;mero de visitas',
	'Number_of_pages' => 'N&uacute;mero de hits en p&aacute;ginas',
// Last visit - END

	'total_site_hits_key' => '%V% p&aacute;ginas vistas desde %D%.',

	'Message_too_short' => 'Mensaje demasiado corto',

// Start add - Online/Offline/Hidden Mod
	'Online' => 'Conectado',
	'Offline' => 'Desconectado',
	'Hidden' => 'Oculto',

	'Online_status' => 'Estado',
// End add - Online/Offline/Hidden Mod
	'Download' => 'Descargar',

//signature editor
	'sig_edit_link' => 'Firma',
	'sig_description' => 'Editar firma (<b>previsualizaci&oacute;n incluida</b>)',
	'sig_edit' => 'Editar firma',
	'sig_current' => 'Firma actual',
	'sig_none' => 'No hay firma disponible',
	'sig_save' => 'Guardar',
	'sig_save_message' => 'Firma guardada correctamente',

	'Statistics' => 'Estad&iacute;sticas',

// Start add - Global announcement MOD
	'Globalannounce' => 'Anuncio global',
	'Globalannounce' => 'Nuevo anuncio global',
// End add - Global announcement MOD
	'Global_Announcements' => 'Anuncio global',
	'Announcements' => 'Anuncios',
	'Sticky_Topics' => 'Notas importantes',
	'Announcements_and_Sticky' => 'Anuncios y notas importantes',
// db_update generator
	'Db_update_generator' => 'Generador de actualizaci&oacute;n de BD',
	'Instructions' => 'Instrucciones',
	'SQL_instructions' => 'Este peque&ntilde;o programa crear&aacute; un archivo PHP para poder actualizar su base de datos desde su navegador. Hay algunas cosas que debe cuidar al insertar una consulta SQL en el &aacute;rea de texto de abajo.<br />Antes de nada, aseg&uacute;rese de que la consulta SQL termina con un punto y coma (;), pues si no, el archivo creado no ser&aacute; apto para su uso. Despu&eacute;s, aseg&uacute;rese de que las tablas tengan el prefijo phpbb_. De todos modos, esto ser&aacute; sustituido autom&aacute;ticamente por un peque&ntilde;o pedazo de c&oacute;digo que le permitir&aacute; utilizar el archivo db_update.php en cualquier foro sin importar el prefijo de la tabla.',
	'Enter_SQL' => 'Introduzca la consulta SQL',
	'Enter_SQL_explain' => 'MySQL es una popular base de datos reconocida mundialmente',
	'Output_SQL' => 'Salida SQL',
	'Output_SQL_explain' => 'Copie y pegue el texto en el &aacute;rea de texto. Guarde el archivo resultante como <u>db_update.php</u> y s&uacute;balo a au servidor. Ejecute el archivo desde su navegador.<br /><br />O, si lo prefiere, pulse el bot&oacute;n de descarga para descargar el archivo directamente a su ordenador (recomendado).',
	'Download' => 'Descargar consulta',

	'TOP_POSTERS' => 'Los que mas escriben',

// TELL A FRIEND
	'TELL_FRIEND' => 'Correo a un amigo',
	'TELL_FRIEND_SENDER_USER' => 'Su nombre:',
	'TELL_FRIEND_SENDER_EMAIL' => 'Su correo:',
	'TELL_FRIEND_RECEIVER_USER' => 'Nombre de su amigo:',
	'TELL_FRIEND_RECEIVER_EMAIL' => 'Correo de su amigo:',
	'TELL_FRIEND_WRONG_EMAIL' => 'No ha introducido una direcci&oacute;n de e-mail v&aacute;lida.',
	'TELL_FRIEND_MSG' => 'Su mensaje:',
	'TELL_FRIEND_TITLE' => 'Correo a un amigo',
	'TELL_FRIEND_BODY' => 'Hola,\n. Acabo de leer este tema &raquo;{TOPIC}&laquo; en los foros de {SITENAME} y creo que podria interesarte. Aqu&iacute; tienes este enlace: {LINK}\n\nVe y lee, y si quieres responder puedes registrarte para tener tu propia cuenta.',

// Begin Thanks Mod
	'thankful' => 'Gente agradecida',
	'thanks_to' => 'Gracias por el tema tan &uacute;til,',
	'thanks_end' => ':',
	'thanks_alt' => 'Mensaje de gracias',
	'thanks_add_rate' => 'Gracias al autor por este tema tan &uacute;til',
	'thanked_before' => 'Ya ha dado las gracias en este tema',
	'thanks_add' => 'Se han dado sus gracias',
	'thanks_not_logged' => 'Necesita identificarse para agradecer a alguien un mensaje o tema',
	'thanks2' => 'Gracias, gracias, gracias...<br />',
// End Thanks Mod

//Begin Lo-Fi MOD
	'Lofi' => 'Versi&oacute;n reducida del foro - (Lo-Fi)',
// 'Full_Version' => 'Versi&oacute;n Completa',
	'Full_Version' => 'Est&aacute; utilizando la versi&oacute;n (Lo-Fi). Para ver la versi&oacute;n completa del foro, haga clic aqu&iacute;.',
	'quote_lofi' => 'Citar',
	'edit_lofi' => 'Editar',
	'ip_lofi' => 'IP',
	'del_lofi' => 'Borrar',
	'profile_lofi' => 'Perfil',
	'pm_lofi' => 'MP',
	'email_lofi' => 'Correo',
	'website_lofi' => 'Sitio web',
	'icq_lofi' => 'ICQ',
	'aim_lofi' => 'AIM',
	'yim_lofi' => 'YIM',
	'msnm_lofi' => 'MSN',
	'quick_lofi' => 'Respuesta r&aacute;pida',
	'new_pm_lofi' => 'Enviar un MP',
//End Lo-Fi Mod

// Retroactive Signature MOD
	'Retro_sig' => 'Adjuntar mi firma a mis mensajes anteriores',
	'Retro_sig_explain' => 'Si a&ntilde;ade o edita su firma, phpBB normalmente s&oacute;lo la aplica a los futuros mensajes',
	'Retro_sig_checkbox' => 'Marcar aqu&iacute; para adjuntar su firma a los mensajes anteriores',
// End Retro Sig MOD

	'legend' => 'Leyenda: ',
	'users' => 'Usuarios',
//added to autogroup mod
	'No_more' => 'no se aceptan m&aacute;s usuarios',
	'No_add_allowed' => 'el auto ingreso de usuario no esta permitido',
	'Join_auto' => 'Usted puede ingresar en este grupo, pues su cantidad de mensajes est&aacute; dentro del criterio de este grupo',

// merge topics
	'Merge' => 'Fusionar',
	'Merge_topic' => 'Fusionar este tema',
	'Topics_Merged' => 'Los temas seleccionados han sido fusionados.',
	'No_Topics_Merged' => 'No se han fusionado temas.',
	'Confirm_merge_topic' => '&iquest;Esta seguro de que quiere fusionar los temas seleccionados?',

	'Downloads' => 'Descargas',

// Start add - Bin Mod
	'Move_bin' => 'Mover este tema a la papelera',
	'Topics_Moved_bin' => 'Los temas seleccionados se han movido a la papelera.',
	'Bin_disabled' => 'La papelera ha sido deshabilitada',
	'Bin_recycle' => 'Reciclar',
// End add - Bin Mod
	'Recent_topics' => 'Temas recientes', // Recent Topics

	'Topics_Title_Edited' => 'El t&iacute;tulo seleccionado del tema se ha editado.',
	'Edit_title' => 'Edici&oacute;n de t&iacute;tulo',
	'PM' => 'MP',

// Start Advanced IP Tools Pack MOD
	'Moderator_ip_information' => 'La informaci&oacute;n sobre direcci&oacute;n IP es para moderadores',
	'Registered_ip_address' => 'Direcci&oacute;n IP registrada',
	'Registered_hostname' => 'Nombre de dominio registrado',
	'Other_registered_ips' => 'Otros usuarios registrados desde %s', //%s is the IP address
	'Other_posted_ips' => 'Direcciones IP desde donde este usuario ha escrito',
	'Search_ip' => 'Buscar en mensajes por direcci&oacute;n IP',
	'Search_ip_explain' => 'Introduzca la direcci&oacute;n IP en este formato <u>127.0.0.1</u> -- Puede usar * como comod&iacute;n para b&uacute;squedas m&aacute;s generales: <u>127.*.*.1</u>',
	'IP' => 'IP',
	'Whois' => 'Whois',
	'Browser' => 'Navegador',
	'No_other_registered_ips' => 'No hay otros usuarios registrados con esta direcci&oacute;n IP.',
	'No_other_posted_ips' => 'Este usuario no ha escrito ning&uacute;n mensaje.',
	'Not_recorded' => 'No guardada',
	'Logins' => 'Identificaciones',
	'No_logins' => 'No hay identificaciones guardadas de este usuario.',
// End Advanced IP Tools Pack MOD

	'LIW_click_image' => 'Pulse para ver esta imagen en su tama&ntilde;o original',
	'LIW_click_image_explain' => 'Pulse en la imagen para verla en su tama&ntilde;o original',
// Mighty Gorgon - Full Album Pack - BEGIN
	'Album' => '&Aacute;lbum',
	'Personal_Gallery' => 'Galer&iacute;a personal',
	'Personal_Gallery_Of_User' => 'Galer&iacute;a personal de %s',
	'Personal_Gallery_Of_User_Profile' => 'Galer&iacute;a personal de %s (%d imagenes)',
	'Show_All_Pic_View_Mode_Profile' => 'Mostrar todas las im&aacute;genes de la galer&iacute;a personal de %s (sin subcategor&iacute;as)',
	'Not_allowed_to_view_album' => 'Perd&oacute;n, usted no tiene permitido ver el &aacute;lbum.',
	'Not_allowed_to_upload_album' => 'Perd&oacute;n, usted no tiene permitido subir im&aacute;genes al &aacute;lbum. Por favor, contacte con el administrador para m&aacute;s informaci&oacute;n.',
	'Album_empty' => 'No hay im&aacute;genes en el &aacute;lbum<br />Pulse en el enlace <b>Subir nueva imagen</b> de esta p&aacute;gina para subir una.',
	'Album_empty2' => 'No hay im&aacute;genes en el &aacute;lbum.',
	'Upload_New_Pic' => 'Subir nueva imagen.',
	'Pic_Title' => 'T&iacute;tulo de la imagen',
	'Pic_Title_Explain' => 'Es muy importante para su imagen elegir un buen t&iacute;tulo. Podria ser un nombre, o un asunto que haga que otros quieran ver la imagen.',
	'Pic_Upload' => 'Subir imagen',
	'Pic_Upload_Explain' => 'Los tipos permitidos son JPG, GIF y PNG. El tama&ntilde;o m&aacute;ximo del archivo es %s bytes. Las dimensiones m&aacute;ximas de la imagen son %sx%s pixels.',
	'Album_full' => 'Perd&oacute;n, el &aacute;lbum ya tiene el n&uacute;mero m&aacute;ximo de im&aacute;genes permitidas. Por favor, contacte con el administrador para m&aacute;s informaci&oacute;n.',
	'Album_upload_successful' => 'Gracias, su imagen ha sido subida correctamente.',
	'Click_return_album' => 'Pulse %saqu&iacute;%s para volver al &aacute;lbum.',
	'Invalid_upload' => 'Subida inv&aacute;lida<br /><br />Su imagen es muy grande o ese tipo no est&aacute; permitido.',
	'Image_too_big' => 'Perd&oacute;n, las dimensiones de su imagen son demasiado grandes.',
	'Uploaded_by' => 'Subida por',
	'Category_locked' => 'Perdone, usted no puede subir im&aacute;genes, porque la categor&iacute;a est&aacute; cerrada por el administrador. Por favor, contacte con &eacute;l para m&aacute;s informaci&oacute;n.',
	'View_Album_Index' => 'Indice del &aacute;lbum',
	'View_Album_Personal' => 'Viendo galer&iacute;a personal de un usuario',
	'View_Pictures' => 'Viendo im&aacute;genes o enviando/leyendo comentarios en el &aacute;lbum',
	'Album_Search' => 'Buscando en el &aacute;lbum',
	'Pic_Name' => 'Nombre de la imagen',
	'Description' => 'Descripci&oacute;n',
	'Search_Contents' => ' que contenga: ',
	'Search_Found' => 'Busqueda encontrada ',
	'Search_Matches' => 'Coincidencias:',
// Mighty Gorgon - Full Album Pack - END

// News
	'xs_latest_news' => '&Uacute;ltimas noticias',
	'xs_no_news' => 'No hay art&iacute;culos de noticias.',
	'xs_news_version' => 'Versi&oacute;n de noticias Icy Phoenix: %s',
	'xs_news_ticker_feed' => 'Entrada de sindicaci&oacute;n XML: %s',
	'xs_no_ticker' => 'No hay entradas de noticias definidas. Por favor, vaya al ACP para crear una.',
	'xs_news_ticker_title' => 'Entrada de noticia',
	'xs_news_tickers_title' => 'Entrada de noticias',
	'xs_news_item_title' => 'Noticia',
	'xs_news_items_title' => 'Noticias',
	'hide' => 'Ocultar',
	'show' => 'Mostrar',
	'Welcome' => 'Bienvenido',
	'birthdays' => 'Cumplea&ntilde;os',

//Battle of the Sexes
	'male_zero_total' => '<b>0</b> usuarios masculinos', // # registered male users
	'male_total' => '<b>%d</b> usuarios masculinos', // # registered male users
	'male_one_total' => '<b>%d</b> usuario masculino', // # registered male users
	'female_zero_total' => '<b>0</b> usuarias femeninas', // # registered female users
	'female_total' => '<b>%d</b> usuarias femeninas', // # registered female users
	'female_one_total' => '<b>%d</b> usuaria femenina', // # registered female users
	'unknown_total' => 'y <b>%d</b> usuarios que no se sabe su sexo',
	'unknown_one_total' => 'y <b>%d</b> usuario que no se sabe su sexo',
	'unknown_zero_total' => '',
	'battle_of_sexes' => 'La batalla de los sexos: ',

	'who_viewed' => 'Vistas del tema',
	'BoardRules' => 'Normas',

	'View_post' => 'Ver mensaje',
	'Post_review' => 'Enviar revisi&oacute;n',
	'View_next_post' => 'Ver mensaje siguiente',
	'View_previous_post' => 'Ver mensaje anterior',
	'No_newer_posts' => 'No hay mensajes nuevos en este foro',
	'No_older_posts' => 'No hay mensajes antiguos en este foro',

	'StaffSite' => 'Equipo del sitio',
	'Staff_level' => array('Administrador','Moderador'),
	'Staff_forums' => 'Foros',
	'Staff_stats' => 'Estad&iacute;sticas',
	'Staff_user_topic_day_stats' => '%.2f temas por d&iacute;a', // %.2f = topics per day
	'Staff_period' => 'desde %d d&iacute;as', // %d = days
	'Staff_contact' => 'Contactar',
	'Staff_messenger' => 'Messenger',
// Start Edit Notes MOD
	'Edit_notes' => 'Notas de edici&oacute;n',
	'Delete_note' => 'Borrar nota',
	'Edited_by' => 'Editado por',
	'Confirm_delete_edit_note' => '&iquest;Est&aacute; seguro de querer borrar esta nota de edici&oacute;n?',
	'Edit_note_deleted' => 'La nota de edici&oacute;n ha sido borrada.',
// End Edit Notes MOD
//Referrers Mod
	'Referrers' => 'Referidos',
	'Viewing_Referrers' => 'Viendo referidos',
//Referrers Mod End

	'Recent_topics' => 'Temas recientes',
	'Recent_today' => 'Hoy',
	'Recent_yesterday' => 'Ayer',
	'Recent_last24' => '&Uacute;ltimas 24 horas',
	'Recent_lastweek' => '&Uacute;ltima semana',
	'Recent_lastXdays' => '&Uacute;ltimos %s d&iacute;as',
	'Recent_last' => '&Uacute;ltimo',
	'Recent_days' => 'D&iacute;as',
	'Recent_first' => 'creado %s',
	'Recent_first_poster' => '%s',
	'Recent_select_mode' => 'Seleccione modo:',
	'Recent_showing_posts' => 'Mostrar mensajes:',
	'Recent_title_one' => '%s tema %s', // %s = topics; %s = sort method
	'Recent_title_more' => '%s temas %s', // %s = topics; %s = sort method
	'Recent_title_today' => ' de hoy',
	'Recent_title_yesterday' => ' de ayer',
	'Recent_title_last24' => ' de las &uacute;ltimas 24 horas',
	'Recent_title_lastweek' => ' de la &uacute;ltima semana',
	'Recent_title_lastXdays' => ' de los &uacute;ltimos %s d&iacute;as', // %s = days
	'Recent_no_topics' => 'No se encontraron temas.',
	'Recent_wrong_mode' => 'Usted ha seleccionado un modo incorrecto.',
	'Recent_click_return' => 'Pulse %saqu&iacute;%s para volver al sitio m&aacute;s reciente.',

	'Profile_view_option' => 'Ventana emergente de vistas de perfil',
	'Profile_viewed' => 'Mis vistas de perfil',

// BEGIN Disable Registration MOD
	'registration_status' => 'Perd&oacute;n, pero los registros de nuevos usuarios en este foro esta actualmente deshabilitados. Por favor, int&eacute;ntelo mas tarde.',
// END Disable Registration MOD

	'PostHighlight' => 'Seleccionar texto',
	'QuickQuote' => 'Cita r&aacute;pida',
	'Randomquote' => 'Cita aleatoria',

// Mod User CP Organize
	'Cpl_Navigation' => 'Perfil',
// 'Cpl_Settings_Options' => 'Ajustes y opciones',
	'Cpl_Settings_Options' => 'Ajustes y opciones',
	'Cpl_Board_Settings' => 'Ajustes del foro',
	'Cpl_NewMSG' => 'Enviar nuevo mensaje',
	'Cpl_Click_Return_Cpl' => 'O pulse %saqu&iacute;%s para volver a su perfil',
	'Cpl_Personal_Profile' => 'Perfil personal',
	'Cpl_More_info' => 'Suscripciones',

	'Forbidden_characters' => 'Los caracteres permitidos para nombres de usuario son a-z, 0-9, -, _ y espacios.',

	'Topics_per_page' => 'Temas por p&aacute;gina',
	'Posts_per_page' => 'Mensajes por p&aacute;gina',
	'Hot_threshold' => 'Mensajes populares',

	'Mod_CP_first_post' => 'Primer mensaje',
	'Mod_CP_topic_count' => '<b>%s</b> tema encontrado.',
	'Mod_CP_topics_count' => '<b>%s</b> temas encontrados.',
	'Mod_CP_no_topics' => 'No hay temas con ese criterio.',
	'Mod_CP_sticky' => 'Nota',
	'Mod_CP_announce' => 'Anuncio',
	'Mod_CP_global' => 'Global',
	'Mod_CP_normal' => 'Normal',
	'Display_sticky' => 'Nota importante',
	'Display_announce' => 'Anuncio',
	'Display_global' => 'Anuncio global',
	'Display_poll' => 'Encuesta',
	'Display_shadow' => 'Movido',
	'Display_locked' => 'Cerrar',
	'Display_unlocked' => 'Abrir',
	'Display_unread' => 'No le&iacute;do',
	'Display_unanswered' => 'No contestado',
	'Display_all' => 'Todo',
	'Mod_CP_confirm_delete_polls' => '&iquest;Est&aacute; seguro de querer borrar esta(s) encuesta(s)?',
	'Mod_CP_poll_removed' => 'La encuesta seleccionada ha sido borrada de este tema.',
	'Mod_CP_polls_removed' => 'Las encuestas seleccionadas han sido borradas de estos temas.',
	'Mod_CP_topic_removed' => 'El tema seleccionado ha sido borrado de la base de datos.',
	'Mod_CP_topic_moved' => 'El tema seleccionado ha sido movido desde <b>%s</b> a <b>%s</b>.', // %s = old/new forum
	'Mod_CP_topics_moved' => 'Los temas seleccionados han sido movidos desde <b>%s</b> a <b>%s</b>.', // %s = old/new forum
	'Mod_CP_topic_locked' => 'El tema seleccionado ha sido cerrado.',
	'Mod_CP_topic_unlocked' => 'El tema seleccionado ha sido abierto.',
	'Mod_CP_topics_sticked' => 'Los temas seleccionados han sido pasados a notas.',
	'Mod_CP_topic_sticked' => 'El tema seleccionado ha pasado a nota.',
	'Mod_CP_topics_announced' => 'Los temas seleccionados han sido anunciados.',
	'Mod_CP_topic_announced' => 'El tema seleccionado ha sido anunciado.',
	'Mod_CP_topics_globalized' => 'Los temas seleccionados han sido globalizados.',
	'Mod_CP_topic_globalized' => 'El tema seleccionado ha sido globalizado.',
	'Mod_CP_topics_normalized' => 'Los temas seleccionados han sido normalizados.',
	'Mod_CP_topic_normalized' => 'El tema seleccionado ha sido normalizado.',
	'Mod_CP_click_return_topic' => 'Pulse %saqu&iacute;%s para volver al otro tema o %saqu&iacute;%s para volver al nuevo.',

	't_starter' => 'No puede darse las gracias a usted mismo...',
	'Watched_Topics' => 'Temas observados',
	'No_Watched_Topics' => 'No est&aacute; observando ning&uacute;n tema',
	'Watched_Topics_Started' => 'Inicio del tema',
	'Watched_Topics_Stop' => 'Parar de observar',

	'Stop_watching_forum' => 'Parar de observar este foro',
	'Start_watching_forum' => 'Observar este foro por mensajes',
	'No_longer_watching_forum' => 'No est&aacute; observando este foro desde hace tiempo.',
	'You_are_watching_forum' => 'Est&aacute; observando este foro.',

	'UCP_SubscForums' => 'Lista de foros suscritos',
	'UCP_NoSubscForums' => 'No est&aacute; suscrito a ning&uacute;n foro',
	'UCP_SubscForums_Flag' => 'Bandera',
	'UCP_SubscForums_Forum' => 'Foro',
	'UCP_SubscForums_Forum_subscribed' => 'Foro suscrito',
	'UCP_SubscForums_Forum_already_subscribed' => 'Ya est&aacute; suscrito a este foro',
	'UCP_SubscForums_Click_return_forum' => 'Pulse %saqu&iacute;%s para volver al foro',
	'UCP_SubscForums_Topics' => 'Temas',
	'UCP_SubscForums_Posts' => 'Mensajes',
	'UCP_SubscForums_LastPost' => '&Uacute;ltimo mensaje',
	'UCP_SubscForums_UnSubscribe' => 'Quitar suscripci&oacute;n',
	'UCP_SubscForums_NewTopic' => 'Nuevo tema',

	'profile_main' => 'Informaci&oacute;n general',
	'profile_explain' => 'Bienvenido al perfil de usuario. Desde aqu&iacute; puede ver y actualizar su perfil, preferencias, foros y temas suscritos, etc. Puede enviar mensajes a otros usuarios (si est&aacute; permitido).',
	'your_activity' => 'Su perfil',

	'Gravatar' => 'Gravatar',
	'Gravatar_explain' => 'Si tiene un <a href="http://www.gravatar.com" target="_blank">gravatar</a>, introduzca la direcci&oacute;n de correo que tiene como registrado.',

	'private_msg_review_title' => 'Mensaje de respuesta para',
	'private_msg_review_error' => 'Error buscando mensaje privado',

	'BSH_Viewing_Topic' => 'Viendo el tema: %t%',
	'BSH_Viewing_Post' => '%sViendo un mensaje%s',
	'BSH_Viewing_Profile' => 'Viendo el perfil de %u%',
	'BSH_Viewing_Groups' => '%sViendo los grupos%s',
	'BSH_Viewing_Forums' => 'Viendo el foro: %f%',
	'BSH_Index' => '%sViendo el &iacute;ndice de foros%s',
	'BSH_Searching_Forums' => '%sBuscando en los foros%s',
	'BSH_Viewing_Onlinelist' => '%sViendo lista de conectados%s',
	'BSH_Viewing_Messages' => '%sViendo mensajes privados%s',
	'BSH_Viewing_Memberlist' => '%sViendo lista de usuarios%s',
	'BSH_Login' => '%sConect&aacute;ndose%s',
	'BSH_Logout' => '%sDesconect&aacute;ndose%s',
	'BSH_Editing_Profile' => '%sEditando perfil%s',
	'BSH_Viewing_ACP' => '%sViendo ACP%s',
	'BSH_Moderating_Forum' => '%sModerando foros%s',
	'BSH_Viewing_FAQ' => '%sViendo FAQ%s',
	'BSH_Viewing_Category' => 'Viendo categor&iacute;a: %c%',

	'Board_statistic' => 'Estad&iacute;sticas del foro',
	'Database_statistic' => 'Estad&iacute;sticas de la base de datos',
	'Version_info' => 'Informaci&oacute;n de versi&oacute;n',
	'Thereof_deactivated_users' => 'N&uacute;mero de usuarios no activados',
	'Thereof_Moderators' => 'N&uacute;mero de moderadores',
	'Thereof_Junior_Administrators' => 'N&uacute;mero de administradores junior',
	'Thereof_Administrators' => 'N&uacute;mero de administradores',
	'Deactivated_Users' => 'Usuarios que necesitan activaci&oacute;n',
	'Users_with_Mod_Privileges' => 'Usuarios con privilegios de moderador',
	'Users_with_Junior_Admin_Privileges' => 'Usuarios con privilegios de administrador junior',
	'Users_with_Admin_Privileges' => 'Usuarios con privilegios de administrador',
	'DB_size' => 'Tama&ntilde;o de la base de datos',
	'Version_of_ip' => 'Versi&oacute;n de <a href="http://www.icyphoenix.com/">Icy Phoenix</a>',
	'Version_of_board' => 'Versi&oacute;n de <a href="http://www.phpbb.com">phpBB</a>',
	'Version_of_PHP' => 'Versi&oacute;n de <a href="http://www.php.net/">PHP</a>',
	'Version_of_MySQL' => 'Versi&oacute;n de <a href="http://www.mysql.com/">MySQL</a>',
	'Download_post' => 'Descargar mensaje',

	'Download_topic' => 'Descargar tema',
	'Always_swear' => 'Permitir palabras prohibidas',

	'Shoutbox' => 'Cuadro de charla',
	'Shoutbox_date' => ' d m Y H:i:s',
	'Shout_censor' => '&iexcl;Mensaje borrado!',
	'Shout_refresh' => 'Refrescar',
	'Shout_text' => 'Su texto',
	'Viewing_Shoutbox' => 'Viendo charla',
	'Censor' => 'Censurar',

	'Edit_post_time' => 'Editar fecha de este mensaje',
	'Edit_post_time_xs' => 'Editar',
	'Topic_time_xs' => 'Fecha del tema',
	'Post_time' => 'Fecha del mensaje',
	'Post_time_successfull_edited' => '<b>Fecha actualizada correctamente.</b></span><br /><span class="postdetails">Esta ventana se cerrara en 3 segundos.',

	'staff_message' => 'Mensaje del equipo',

	'Board_Rules' => 'Normas del foro',
	'Forum_Rules' => 'Normas del Foro',
	'Show_avatars' => 'Mostrar avatares en el tema',
	'Show_signatures' => 'Mostrar firmas en el tema',
	'Acronym' => 'Sigla',
	'Acronyms' => 'Siglas',
	'User_Number' => 'Usuario #',
	'Member_Count' => 'Usuarios',
	'Reply_message' => 'Mensaje respondido',
	'Click_read_topic' => 'Pulse %saqu&iacute;%s para leerlo', // %s's here are for uris, do not remove!
	'Create_with_generator' => 'Crear avatar usando el generador de avatares',
	'View_avatar_generator' => 'Generar avatar',
	'Adv_Search' => 'B&uacute;squeda avanzada',
	'Search_Explain' => 'Buscar dentro de este sitio',
	'Please_remove_install_contrib' => 'Por favor, aseg&uacute;rese de que los directorios install/ y contrib/ han sido borrados',
	'Search_Engines' => 'Robots de motores de b&uacute;squeda:',
	'Bots_browsing_forum' => 'Robots de motores de b&uacute;squeda navegando en este foro:',
	'Debug_On' => 'Debug on',
	'Debug_Off' => 'Debug off',
	'Page_Generation_Time' => 'P&aacute;gina generada en:',
	'Memory_Usage' => 'Memoria',
	'SQL_Queries' => 'Consultas SQL',
	'Search_new2' => 'Nuevos mensajes',
	'Search_new_p' => 'Mensajes desde su &uacute;ltima visita',
	'Show_In_Portal' => 'Mostrar en portal',
	'Not_Auth_View' => 'No est&aacute; autorizado a ver esta p&aacute;gina.',
	'Site_Hist' => 'Historial del sitio',
	'Links' => 'Enlaces',
	'Print_View' => 'Versi&oacute;n imprimible',
	'Browsing_topic' => 'Usuarios navegando en este tema:',
	'Sudoku' => 'Sudoku',
	'Bookmarks' => 'Marcadores',
	'Set_Bookmark' => 'Fijar este tema como marcador',
	'Remove_Bookmark' => 'Quitar este tema de los marcadores',
	'No_Bookmarks' => 'No tiene temas marcados',
	'Always_set_bm' => 'Fijar como marcador autom&aacute;ticamente cuando escribe un mensaje',
	'Found_bookmark' => 'Se encontr&oacute; %d marcador.', // eg. Search found 1 match
	'Found_bookmarks' => 'Se encontraron %d marcadores.', // eg. Search found 24 matches
	'More_bookmarks' => 'M&aacute;s marcadores...', // For mozilla navigation bar

//RSS Reader Help
	'RSS' => 'RSS',
	'Rss_news_help' => '&iquest;Qu&eacute; es esto?',
	'Rss_news_help_title' => 'Ayuda del lector RSS',
	'Rss_news_help_header' => '&iquest;Qu&eacute; son los feeds y c&oacute;mo puedo usarlos?',
	'Rss_news_help_explain' => 'Un feed es un sistema de resumen, que se va actualizando para, as&iacute;, estar al d&iacute;a de las noticias de una web.<br /><br /><b>Atenci&oacute;n:</b> Para suscribirse a un feed es necesario <a href="http://www.rssowl.org/" target="new">Un lector de feed</a> . Al hacer clic en un feed sin el lector de feeds RSS o ATOM, aparecer&aacute; en el navegador texto sin formato.',
	'Rss_news_help_header_2' => '<b>&iquest;Qu&eacute; son RSS y Atom?</b>',
	'Rss_news_help_explain_2' => 'Son dos formatos de los feeds. Muchos lectores de feed soportan ambos formatos. Actualmente soportamos Atom 0.3 y RSS 2.0.',
	'Rss_news_help_header_3' => '<b>&iquest;C&oacute;mo uso el lector de RSS?</b>',
	'Rss_news_help_explain_3' => 'Para empezar, necesita un lector de feeds. Encontrar&aacute; un ejemplo en <a href="http://www.rssowl.org/" target="new">http://www.rssowl.org/</a>.<br /><br />Luego podr&aacute; usar el programa:<br /><br /><b>1.</b> Busque el enlace de RSS en nuestro sitio. <b>o</b><br /><b>2.</b> A&ntilde;ada algunas de las siguientes URL:',
	'L_url_rss_explain' => 'URL para todos los temas del foro.',
	'L_url_rss_news_explain' => 'URL s&oacute;lo para el foro de noticias.',
	'L_url_rss_atom_explain' => 'URL para el feed Atom RSS.',
	'Rss_news_help_rights' => 'Nos reservamos el derecho de interrumpir el feed de este foro en cualquier momento. Nuestros feeds del foro no se podr&aacute;n ver desde fuera.',
	'Rss_news_feeds' => 'Sindicaci&oacute;n RSS',

	'Quick_Reply' => 'Respuesta r&aacute;pida',
	'Mod_CP_sticky2' => 'Nota',
	'Mod_CP_announce2' => 'Anuncio',
	'Mod_CP_global2' => 'Global',
	'Mod_CP_normal2' => 'Normal',

	'Search_Flood_Error' => 'No puede hacer otra b&uacute;squeda tan pronto tras la &uacute;ltima realizada. Por favor, int&eacute;ntelo de nuevo tras unos segundos.',

// Custom Profile Fields MOD
	'custom_field_notice' => 'Estos campos han sido creados por un administrador. Pueden o no pueden ser visibles al p&uacute;blico. Los campos marcados con un * son campos obligatorios.',
	'and' => ' y ',
// END Custom Profile Fields MOD

	'dsbl' => 'Su direcci&oacute;n IP est&aacute; en la <a href="%url%">Lista de spammers</a>. <br />Su intento de registro ha sido bloqueado.',
	'Emails_Only_To_Admins_Error' => 'Puede usar el sistema de correo para enviar correo s&oacute;lo a los administradores.',
	'Wordgraph' => 'Palabras m&aacute;s usadas',
	'Viewing_wordgraph' => 'Mirando en las palabras m&aacute;s usadas',
	'Links_For_Guests' => '<b>Debe estar registrado para ver este enlace.</b>',
	'New' => 'N',
	'New_Label' => 'Nuevos',
	'New_Messages_Label' => 'Nuevos mensajes',
	'Show_Personal_Gallery' => 'Ver la galer&iacute;a personal del usuario',
	'Login_Status' => 'Estado de conexi&oacute;n',
	'Login_Hidden' => 'Oculto',
	'Login_Visible' => 'Visible',
	'Login_Default' => 'Por defecto',
	'ERRORS_NOT_FOUND' => 'La direcci&oacute;n solicitada no se ha encontrado en este servidor',
	'ERRORS_000' => 'Error desconocido',
	'ERRORS_000_FULL' => 'La direcci&oacute;n solicitada devuelve un c&oacute;digo de error desconocido.<br />Los errores se han copiado al log y comprobaremos el problema lo antes posible.',
	'ERRORS_400' => 'Error 400',
	'ERRORS_400_FULL' => 'La direcci&oacute;n solicitada no es una direcci&oacute;n v&aacute;lida.',
	'ERRORS_401' => 'Error 401 - Error de autorizaci&oacute;n',
	'ERRORS_401_FULL' => 'Est&aacute; recibiendo este mensaje porque no le autorizan a tener acceso a esta direcci&oacute;n.',
	'ERRORS_403' => 'Error 403',
	'ERRORS_403_FULL' => 'Acceso a esta direcci&oacute;n prohibido.',
	'Errors_404' => 'Error 404 - Archivo no encontrado',
	'Errors_404_Full' => 'La direcci&oacute;n que ha solicitado no est&aacute; disponible en este servidor. Puede tener un error en la direcci&oacute;n o lo qu&eacute; est&aacute; buscando pudo haber sido quitado.',
	'ERRORS_500' => 'Error 500 - Error de configuraci&oacute;n',
	'ERRORS_500_FULL' => 'La direcci&oacute;n que ha solicitado devuelve un error de configuraci&oacute;n.<br />Los errores se han copiado log y comprobaremos el problema lo antes posible.',
	'ERRORS_EMAIL_SUBJECT' => 'Errores: ',
	'ERRORS_EMAIL_ADDRESS_PREFIX' => 'xs_errors',
	'ERRORS_EMAIL_BODY' => 'Un error ha ocurrido en su sitio. Por favor, revise el archivo log.',
	'Remote_avatar_no_image' => 'La imagen %s no existe',
	'Remote_avatar_error_filesize' => 'La imagen pesa m&aacute;s del l&iacute;mite permitido (%d bytes)',
	'Remote_avatar_error_dimension' => 'La imagen es m&aacute;s grande de lo permitido (%d x %d pixels)',
	'How_Many_Chatters' => 'Hay <b>%d</b> usuario(s) en el chat',
	'Who_Are_Chatting' => '<b>%s</b>',
	'Click_to_join_chat' => 'Pulse para ingresar en el chat',
	'ChatBox' => 'Sala de chat',
	'log_out_chat' => 'Usted se ha identificado correctamente en el chat',
	'Send' => 'Enviar',
	'Login_to_join_chat' => 'Identificarse para ingresar al chat',

// Hacks List
/* General */
	'Hacks_List' => 'Cr&eacute;ditos',
	'Page_Desc' => 'Este m&oacute;dulo le permite a&ntilde;adir/editar/borrar la lista de los actuales hacks/mods que hay en su web. Esta lista se muestra a los usuarios cuando visitan la p&aacute;gina hacks_list.php.',
	'Deleted_Hack' => 'Borrar hack %s de la lista.<br />',
	'Updated_Hack' => 'Actualizar informaci&oacute;n para el MOD %s.<br />',
	'Added_Hack' => 'A&ntilde;adir informaci&oacute;n para el MOD %s.<br />',
	'Status' => 'Estado',
	'No_Website' => 'Ninguna web disponible.',
	'No_Hacks' => 'Ning&uacute;n hack para mostrar.',
	'Add_New_Hack' => 'A&ntilde;adir un nuevo MOD',
	'User_Viewable' => '&iquest;Ocultar la lista de hacks a los usuarios?',
	'Hack_Name' => 'Nombre del hack',
//	'Description' => 'Descripci&oacute;n',
	'Required' => 'Requerido',
	'Author_Email' => 'Correo del autor',
	'Version' => 'Versi&oacute;n',
	'Download_URL' => 'Enlace para descargar',

/* Errors */
	'Error_Hacks_List_Table' => 'Error consultando la tabla de hacks.',
	'Required_Field_Missing' => 'Falta informaci&oacute;n requerida en el formulario anterior.',
	'Error_File_Opening' => 'Imposible abrir el fichero: %s',

//====================================================
// Mighty Gorgon - LANG - BEGIN
// Mighty Gorgon - Full Album Pack - BEGIN
	'Newest_pic' => '&Uacute;ltima imagen', // Album Addon
	'Random_pic' => 'Imagen aleatoria', // Album Addon
	'Click_enlarge_pic' => 'Pulse en la imagen para maximizarla',
// Mighty Gorgon - Full Album Pack - END
// Mighty Gorgon - HTTP AGENTS - BEGIN
	'Last_Used_IP' => '&Uacute;ltima IP usada',
	'Last_Used_OS' => 'SO',
	'Last_Used_Browser' => 'Navegador',
	'Last_Used_Referer' => 'Referido',
// Mighty Gorgon - HTTP AGENTS - END
// Mighty Gorgon - Enhanced Online - BEGIN
	'Users_Admins' => 'Administradores',
	'Users_Mods' => 'Moderadores',
	'Users_Global_Mods' => 'Moderadores globales',
	'Users_Regs' => 'Usuarios',
	'Users_Guests' => 'Invitados',
	'Users_Hidden' => 'Ocultos',
// Mighty Gorgon - Enhanced Online - END
// Mighty Gorgon - Power Memberlist - BEGIN
	'Style' => 'Estilo',
	'User_Contacts' => 'Contactar',
	'Memberlist_Users_Display' => 'Usuarios por p&aacute;gina:',
	'SORT_FAST' => 'R&aacute;pido',
	'SORT_STANDARD' => 'Est&aacute;ndar',
	'SORT_RANK' => 'Rango',
	'SORT_STAFF' => 'Staff',
	'SORT_STYLE' => 'Estilo',
	'SORT_LASTLOGON' => '&Uacute;ltima Conexi&oacute;n',
	'SORT_BIRTHDAY' => 'Cumplea&ntilde;os',
	'SORT_ONLINE' => 'En l&iacute;nea',
	'ASCENDING' => 'Ascendente',
	'DESCENDING' => 'Descendente',
	'LESS_THAN' => 'Menor que',
	'EQUAL_TO' => 'Igual a',
	'MORE_THAN' => 'M&aacute;s que',
	'BEFORE' => 'Antes',
	'AFTER' => 'Despu&eacute;s',
// Mighty Gorgon - Power Memberlist - END
// Mighty Gorgon - Multiple Ranks - BEGIN
	'Staff' => 'Equipo',
	'Rank' => 'Rango',
	'Rank_Header' => 'Rangos',
	'Rank_Image' => 'Imagen',
	'Rank_Posts_Count' => 'Rangos autom&aacute;ticos por mensajes',
	'Rank_Days_Count' => 'Rangos autom&aacute;ticos por d&iacute;as',
	'Rank_Min_Des' => 'Mensajes/d&iacute;as m&iacute;nimos',
	'Rank_Min_M' => 'Mensajes m&iacute;nimos',
	'Rank_Max_M' => 'Mensajes m&aacute;ximos',
	'Rank_Min_D' => 'D&iacute;as m&iacute;nimos',
	'Rank_Max_D' => 'D&iacute;as m&aacute;ximos',
	'Rank_Special' => 'Rango especial',
	'Rank_Special_Guest' => 'Rango especial para invitados',
	'Rank_Special_Banned' => 'Rango especial para expulsados',
	'Current_Rank_Image' => 'Imagen de rango actual',
	'No_Rank' => 'Sin rango asignado',
	'No_Rank_Image' => 'Sin imagen de rango',
	'No_Rank_Special' => 'Sin rango especial asignado',
	'Memberlist_Administrator' => 'Administrador',
	'Memberlist_Moderator' => 'Moderador',
	'Memberlist_User' => 'Usuario',
	'Guest_User' => 'Invitado',
	'Banned_User' => 'Baneado',
	'Rank1_title' => 'T&iacute;tulo rango 1',
	'Rank2_title' => 'T&iacute;tulo rango 2',
	'Rank3_title' => 'T&iacute;tulo rango 3',
	'Rank4_title' => 'T&iacute;tulo rango 4',
	'Rank5_title' => 'T&iacute;tulo rango 5',
// Mighty Gorgon - Multiple Ranks - END

// Mighty Gorgon - Nav Links - BEGIN
	'QUICK_LINKS' => 'Navegaci&oacute;n',
	'MAIN_LINKS' => 'Principal',
	'NEWS_LINKS' => 'Noticias',
	'INFO_LINKS' => 'Info',
	'USERS_LINKS' => 'Usuarios y Grupos',
	'SELECT_STYLE' => 'Estilo',
	'SELECT_LANG' => 'Idioma',
	'RSS_FEEDS' => 'RSS Feeds',
	'SPONSORS_LINKS' => 'Patrocinadores',
	'TOOLS_LINKS' => 'Herramientas',
	'HelpDesk' => 'Ayuda',
	'AvatarGenerator' => 'Avatar',
	'DBGenerator' => 'SQL a PHP ',
	'LINK_ACP' => 'Panel de Administraci&oacute;n',
	'LINK_CMS' => 'CMS',
	'LINK_HOME' => 'Inicio',
	'LINK_PROFILE' => 'Perfil',
	'LINK_FORUM' => 'Foro',
	'LINK_BOARDRULES' => 'Reglas',
	'LINK_FAQ' => 'Preguntas Frecuentes',
	'LINK_SEARCH' => 'Buscar',
	'LINK_SITEMAP' => 'Mapa del sitio',
	'LINK_ALBUM' => '&Aacute;lbum',
	'LINK_CALENDAR' => 'Calendario',
	'LINK_DOWNLOADS' => 'Descargas',
	'LINK_BOOKMARKS' => 'Marcadores',
	'LINK_DRAFTS' => 'Borradores',
	'LINK_UPLOADED_IMAGES' => 'Im&aacute;genes Subidas',
	'LINK_AJAX_SHOUTBOX' => 'Chat',
	'LINK_LINKS' => 'Enlaces',
	'LINK_CONTACT_US' => 'Contacta con Nosotros',
	'LINK_SUDOKU' => 'Sudoku',

	'LINK_NEWS_CAT' => 'Categor&iacute;as de Noticias',
	'LINK_NEWS_ARC' => 'Archivo de Noticias',
	'LINK_NEW_MESSAGES' => 'Mensajes Nuevos',
	'LINK_DISPLAY_UNREAD_S' => 'No le&iacute;dos',
	'LINK_DISPLAY_MARKED_S' => 'Marcados',
	'LINK_DISPLAY_PERMANENT_S' => 'Permanentemente',
	'LINK_DIGESTS' => 'Bolet&iacute;n',

	'LINK_CREDITS' => 'Cr&eacute;ditos',
	'LINK_REFERRERS' => 'Referidos HTTP',
	'LINK_VIEWONLINE' => 'Usuarios en l&iacute;nea',
	'LINK_STATISTICS' => 'Estad&iacute;sticas',
	'LINK_DELETE_COOKIES' => 'Borrar Cookies',

	'LINK_MEMBERLIST' => 'Lista de Miembros',
	'LINK_USERGROUPS' => 'Grupos',
	'LINK_RANKS' => 'Rangos',
	'LINK_STAFF' => 'Staff',
// Mighty Gorgon - Nav Links - END

	'Activity' => 'Juegos',
	'Games' => 'Juegos',
	'Trohpy' => 'Trofeos en juegos',
	'quick_links_games' => 'Men&uacute; de juegos',

	'By' => 'Por',
	'No_Icon_Image' => 'Sin icono',
	'Change_Style' => 'Estilo',
	'Change_Lang' => 'Lenguaje',
	'Permissions_List' => 'Lista de permisos',
	'IP_TEAM' => 'Equipo Icy Phoenix',

//	'' => '',
// Mighty Gorgon - LANG - END

// New MG - BEGIN
	'Nav_Separator' => '&nbsp;&raquo;&nbsp;',
	'WeatherForecast' => 'Parte meteorol&oacute;gico',
	'ErrorNotFound' => '&iexcl;Archivo no encontrado!',
	'MGC_Users_Online' => 'Usuarios conectados MGC',
	'MGC_User_Servertime' => 'Fecha',
	'MGC_User_Nickname' => 'Nombre',
	'MGC_User_Server' => 'Servidor',
	'MGC_User_IP' => 'IP',
	'MGC_User_ID' => 'ID',
	'MGC_User_Client_Version' => 'Versi&oacute;n MGC',

	'Country_Flag' => 'Bandera del pa&iacute;s',
	'Select_Country' => 'Seleccionar pa&iacute;s',
	'Extra_profile_info' => 'Informaci&oacute;n extra del perfil',
// 'Extra_profile_info_explain' => 'You can add extra information about yourself or about your hobbies. You can also add photos. You can use some bbcodes as when you post or make your signature. There is a <b>%d</b> character limit (if 0 then no limit)',
	'Extra_profile_info_explain' => 'Puede a&ntilde;adir informaci&oacute;n extra acerca de usted o acerca de sus aficiones. Puede a&ntilde;adir fotos. Puede usar algunos BBCodes como cuando escribe un mensaje o una firma.',
	'Extra_window' => 'Abrir en otra ventana',
	'Extra_too_long' => 'Su campo extra es muy largo (max. <b>%d</b> caracteres permitidos)',
	'UserLike' => 'Al usuario le gusta',
	'UserDisLike' => 'Al usuario no le gusta',
	'UserLikeIns' => 'Tres cosas que le gusten',
	'UserDisLikeIns' => 'Tres cosas que no le gusten',
	'UserPhone' => 'N&uacute;mero de tel&eacute;fono',
	'UserSport' => 'Deporte/equipo',
	'UserMusic' => 'M&uacute;sica/grupos',
	'UserNoInfo' => 'Informaci&oacute;n no disponible',
	'LAST_SEEN' => '&Uacute;ltima conexi&oacute;n',
// New MG - END

// MG CMS - BEGIN
	'CMS_TITLE' => 'CMS',
	'CMS_MANAGEMENT' => 'Administraci&oacute;n CMS',
	'CMS_CONFIG' => 'Configuraci&oacute;n',
	'CMS_SETTINGS' => 'Preferencias',
	'CMS_ACP' => 'Editar esta p&aacute;gina',
	'CUSTOM_PAGE' => 'P&aacute;gina personalizada',
// MG CMS - END

// Icy Phoenix - BUILD 001
	'SimilarTopics' => 'Temas parecidos',
	'Chat' => 'Chat',
	'DIGESTS' => 'Resumen',

	'CPL_REG_INFO_EXPLAIN' => 'Nombre, direcci&oacute;n de correo y contrase&ntilde;a',
	'CPL_PROFILE_INFO_EXPLAIN' => 'Informaci&oacute;n general del contacto, messenger, sexo, cumplea&ntilde;os, intereses y otra informaci&oacute;n',
	'CPL_PROFILE_VIEWED_EXPLAIN' => 'Usuarios que han visto su perfil',
	'CPL_AVATAR_PANEL_EXPLAIN' => 'El avatar es una imagen peque&ntilde;a que puede vincular a su nombre de usuario',
	'CPL_SIG_EDIT_EXPLAIN' => 'Editor de firma: puede definir el texto que quiere adjuntar en la parte inferior de cada mensaje suyo en el foro',
	'CPL_PREFERENCES_EXPLAIN' => 'Configuraci&oacute;n general cuando escribe, notificaciones y mensajes',
	'CPL_BOARD_SETTINGS_EXPLAIN' => 'Configuraciones globales como el tiempo, plantilla y lenguaje',
	'Calendar_settings_EXPLAIN' => 'Configuraciones mientras observa el calendario',
	'Hierarchy_setting_EXPLAIN' => 'Configuraciones observando los subforos y tipo de separaci&oacute;n de temas',
	'LOGIN_SEC_EXPLAIN' => 'Si esta opci&oacute;n est&aacute; activada, podr&aacute; supervisar todas las conexiones de su usuario',
	'CPL_OWN_POSTS_EXPLAIN' => 'Buscar sus mensajes',
	'CPL_OWN_PICTURES_EXPLAIN' => 'Visitar su galer&iacute;a personal del &aacute;lbum',
	'CPL_INBOX_EXPLAIN' => 'Bandeja de entrada: esta carpeta contiene los mensajes privados que usted recibe',
	'CPL_SAVEBOX_EXPLAIN' => 'Mensajes guardados: esta carpeta contiene los mensajes privados que usted ha guardado',
	'CPL_OUTBOX_EXPLAIN' => 'Bandeja de salida: esta carpeta contiene los mensajes privados que usted ha enviado pero que a&uacute;n no han sido le&iacute;dos',
	'CPL_SENTBOX_EXPLAIN' => 'Mensajes enviados: esta carpeta contiene los mensajes privados que usted ha enviado y que ya han sido le&iacute;dos',
	'CPL_BOOKMARKS_EXPLAIN' => 'Todos los marcadores que ha asignado a los temas',
	'WATCHED_TOPICS_EXPLAIN' => 'La lista de todos los temas que ha observado',
	'CPL_SUBSCFORUMS_EXPLAIN' => 'Los foros a los que est&aacute; suscrito para recibir notificaciones de nuevos temas',
	'DIGESTS_EXPLAIN' => 'Los res&uacute;menes son e-mails peri&oacute;dicos que se env&iacute;an autom&aacute;ticamente con un extracto de los mensajes que se han escrito en el foro',
	'DRAFTS_EXPLAIN' => 'Administrar sus borradores',

// Ajax Shoutbox - BEGIN
	'Ajax_Shoutbox' => 'Chat del foro',
	'Ajax_Chat' => 'Chat',
	'Ajax_Archive' => 'Archivo',
	'Shoutbox_flooderror' => 'No se puede enviar un mensaje tan pronto despu&eacute;s de publicar el &uacute;ltimo. Por favor, int&eacute;ntelo de nuevo tras unos momentos.',
	'Shoutbox_no_auth' => 'Lo sentimos, s&oacute;lo los usuarios registrados pueden utilizar el chat del foro',
	'Shoutbox_loading' => 'Cargando chat del foro',
// Errors
	'Shoutbox_unable' => 'Lo sentimos, esta acci&oacute;n no se ha podido realizar. Por favor, int&eacute;ntelo de nuevo.',
	'Shoutbox_empty' => 'No hay mensajes en la base de datos',
	'Shoutbox_no_mode' => 'No se ha especificado ning&uacute;n modo v&aacute;lido',
// Archive
	'Shouts' => 'Comentarios',
	'Statistics' => 'Estad&iacute;sticas',
	'Total_shouts' => 'Comentarios en total',
	'Stored_shouts' => 'Comentarios guardados',
	'My_shouts' => 'Mis comentarios',
	'Today_shouts' => 'Comentarios de las &uacute;ltimas 24 horas',
	'Top_Ten_Shouters' => 'Top 10 de comentaristas',
// Online list
	'Online_total' => 'Total',
	'Online_registered' => 'Usuarios',
	'Online_guests' => 'Invitados',
	'Who_is_Chatting' => 'Qui&eacute;n est&aacute; chateando',
	'Shoutbox_online_explain' => 'Esta informaci&oacute;n est&aacute; basada en los usuarios activos de los &uacute;ltimos 30 segundos',
// Ajax Shoutbox - END

	'Contact_us' => 'Cont&aacute;ctenos',
	'Contact_us_explain' => 'Usando esta p&aacute;gina, usted puede enviarnos un correo',
	'Session_invalid' => 'Sesi&oacute;n inv&aacute;lida. Por favor, vuelva a enviar el formulario.',

// Icy Phoenix - BUILD 007
	'Reg_Username_Short' => ' este nombre de usuario es demasiado corto',
	'Reg_Username_Long' => ' este nombre de usuario es demasiado largo',
	'Reg_Username_Taken' => ' este nombre de usuario no est&aacute; disponible',
	'Reg_Username_Free' => ' este nombre de usuario est&aacute; disponible',
	'Reg_PWD_Short' => 'Esta contrase&ntilde;a es demasiado corta',
	'Reg_PWD_Easy' => 'Esta contrase&ntilde;a es demasiado larga',
	'Reg_PWD_OK' => 'Esta contrase&ntilde;a es correcta',
	'Reg_Email_Invalid' => ' esta direcci&oacute;n de correo no es v&aacute;lida o ya est&aacute; en nuestra base de datos',
	'Reg_Email_OK' => ' esta direcci&oacute;n de correo es correcta',

// Moved here from lang_adv_time.php
	'time_mode' => 'Administraci&oacute;n de hora',
	'time_mode_text' => 'La DST es la diferencia entre el horario solar y la hora real usada en su pa&iacute;s (entre 0 y 120 minutos).',
	'time_mode_auto' => 'Modos autom&aacute;ticos...',
	'time_mode_full_pc' => 'La hora de su ordenador',
	'time_mode_server_pc' => 'Hora del servidor universal, zona horaria/DST<br /><span STYLE="margin-left: 25">de su ordenador</span>',
	'time_mode_full_server' => 'Hora del servidor local',
	'time_mode_manual' => 'Modo manual...',
	'time_mode_dst' => 'Habilitar DST',
	'time_mode_dst_server' => 'Por el servidor',
	'time_mode_dst_time_lag' => 'Diferencia DST',
	'time_mode_dst_mn' => 'min',
	'time_mode_dst_mn_explain' => 'Tiempo expresado en minutos',
	'time_mode_timezone' => 'Zona horaria',

	'dst_time_lag_error' => 'Error del valor de diferencia DST. Debe escribir un n&uacute;mero de minutos entre 0 y 120.',

	'dst_enabled_mode' => ' [DST habilitado]',
	'full_server_mode' => 'Hora sincronizada con la hora del servidor del foro',
	'server_pc_mode' => 'Hora sincronizada con el servidor - zona horaria/DST con su ordenador',
	'full_pc_mode' => 'Hora sincronizada con su hora del ordenador',

	'Smileys_Per_Page' => 'Emoticonos por p&aacute;gina',

/* lang_site_hist.php - BEGIN */
	'Site_history' => 'Historial del sitio',
	'Month' => 'Mes', 
	'Week_day' => 'D&iacute;a de la semana', 
	'Not_availble' => 'No disponible', 
	'Total_users' => 'Usuarios m&aacute;ximos', 
	'Reg_users' => 'Usuarios registrados', 
	'Hidden_users' => 'Usuarios ocultos', 
	'Guests_users' => 'Usuarios invitados', 
	'New_users' => 'Nuevos usuarios', 
	'New_topics' => 'Nuevos temas', 
	'New_posts_reply' => 'Mensajes/respuestas', 
	'Most_online' => 'La mayor&iacute;a de usuarios conectados fue %s', 
	'Most_online_week' => 'La mayor&iacute;a de usuarios conectados en los &uacute;ltimos 7 d&iacute;as', 
	'Last_24' => 'La mayor&iacute;a de usuarios conectados en las &uacute;ltimas %s horas', 
	'Top_Posting_Users' => 'Top usuarios escribiendo',
	'Top_Posting_Users_week' => 'Top usuarios escribiendo esta semana [%s]',
	'Rank' => 'Rango',
	'Percent' => 'Por ciento',
	'Graph' => 'Gr&aacute;fico',
	'Top_Visiting_Users' => 'La mayor&iacute;a de usuarios que sobrepasa la hora',
/* lang_site_hist.php - END */

/* lang_referrers.php - BEGIN */
	'Referrers_Title' => 'Administraci&oacute;n de referidos',
	'Referrers_Cleared' => 'Referidos limpiado',
	'Referrers_Clear' => 'Borrar todos',
	'Click_Return_Referrers' => 'Pulse %saqu&iacute;%s para volver a referidos',
	'Referrers' => 'Referidos',
	'Referrer_host' => 'Dominio referido',
	'Referrer_url' => 'URL referido',
	'Referrer_ip' => 'IP referido',
	'Referrer_hits' => 'Hits',
	'Referrer_first' =>'Primera visita',
	'Referrer_last' => '&Uacute;ltima visita',
	'Viewing_Referrers' => 'Viendo referidos',
/* lang_referrers.php - END */

/* lang_prune_users.php - BEGIN */
// add to prune inactive
	'X_DAYS' => '%d d&iacute;as',
	'X_WEEKS' => '%d semanas',
	'X_MONTHS' => '%d meses',
	'X_YEARS' => '%d a&ntilde;os',

	'Confirm_delete_user' => '&iquest;Seguro que quiere eliminar este/estos usuario/s? ',
	'Prune_no_users' => 'N&iacute;ng&uacute;n usuario borrado',
	'Prune_users_number' => '%d usuarios borrados: esta es la lista con sus nombres',

	'Prune_user_list' => 'Usuarios/as que ser&aacute;n borrados/as',
	'Prune_on_click' => 'Est&aacute; a punto de borrar %d usuarios/as. &iquest;Desea continuar?',
	'Prune_Action' => 'Presione el enlace de abajo para ejecutar',
	'Prune_users_explain' => 'En esta p&aacute;gina podr&aacute; borrar usuarios/as inactivos/as desde hace mucho tiempo. Tienes tres enlaces: uno para borrar usuarios/as que nunca han escrito, otro para borrar usuarios/as que nunca se han logueado, y otro para borrar usuarios/as que nunca activaron su cuenta.<p/><b> Nota:</b> Esta no es una funci&oacute;n que pueda deshacerse luego; todos los usuarios de la lista ser&aacute;n definitivamente borrados tras ejecutar el enlace.', 
/* lang_prune_users.php - END */

/* lang_avatar_generator.php - BEGIN */
	'Avatar_Generator' => 'Generador de avatar',
	'Available' => 'Avatares disponibles',
	'Random' => 'Avatar aleatorio',
	'Avatar_Text' => 'Por favor, introduzca el texto para su avatar:',
	'Avatar_Preview' => 'Visualizar avatar',
	'Your_Avatar' => 'Su avatar',
	'Submit_Avatar' => 'Enviar avatar',
/* lang_avatar_generator.php - END */

/* lang_.php - BEGIN */
/* lang_.php - END */

	'Uploading' => 'Subiendo...',
	'Upload_Image_Local' => 'Subir imagen',
	'Uploaded_Images_Local' => 'Im&aacute;genes subidas',
	'Upload_Image_Local_Explain' => 'Seleccione el archivo que quiere subir',
	'Uploaded_Image_Success' => 'Esta imagen ha sido subida correctamente.',
	'Uploaded_Image_BBC' => 'Puede utilizar este BBCode para publicar esta imagen.',
	'Upload_Image_Empty' => 'No puede subir al aire... &iexcl;Ya lo sabe!',
	'Upload_File_Too_Big' => '&iexcl;El archivo que est&aacute; intentando subir es demasiado grande! Tama&ntilde;o m&aacute;ximo permitido:',
	'Upload_File_Error' => 'Error Desconocido',
	'Upload_File_Error_Size' => 'Tama&ntilde;o de archivo no permitido',
	'Upload_File_Error_Type' => 'Tipo de archivo no permitido',
	'Upload_File_Type_Allowed' => 'S&oacute;lo este tipo de archivos pueden subirse',
	'Upload_Insert_Image' => 'Insertar BBCode',
	'Upload_Close' => 'Cerrar',
	'BBCode' => 'BBCode',
	'HTML' => 'HTML',

	'No_News' => 'No hay noticias',

	'Email_confirm' => 'Confirmar su direcci&oacute;n de e-mail',
	'Email_mismatch' => 'Las direcciones de e-mail introducidas no son iguales.',

	'View_ballot' => 'Viendo votaci&oacute;n',
	'Full_edit' => 'Seleccionar para editar completamente el formulario',
	'Save_changes' => 'Guardar',
	'No_subject' => '(Ning&uacute;n tema)',
	'Edit_quick_post' => 'Edici&oacute;n r&aacute;pida de este mensaje',
	'AJAX_search_results' => 'La b&uacute;squeda r&aacute;pida ha encontrado %s temas con la palabra clave en el t&iacute;tulo del tema. Pulse aqu&iacute; para ver estos temas',
	'AJAX_search_result' => 'La b&uacute;squeda r&aacute;pida ha encontrado un tema con la palabra clave en el t&iacute;tulo del tema. Pulse aqu&iacute; para ver este tema',
	'More_matches_username' => 'M&aacute;s de un usuario ha marcado su consulta. Por favor, seleccione el usuario del marco superior.',
	'No_username' => 'Tiene que introducir un nombre de usuario.',
	'AJAX_quick_search_results' => 'La b&uacute;squeda r&aacute;pida ha encontrado %s temas con las palabras clave.<br />En la derecha puede ver los primeros resultados.<br />Pulse en BUSCAR para obtener el listado completo de resultados.',
	'AJAX_quick_search_result' => 'La b&uacute;squeda r&aacute;pida ha encontrado un tema con las palabras clave.<br />En la derecha puede ver el resultado de la b&uacute;squeda.',

	'Icon_Description' => 'Descripci&oacute;n de iconos',

	'Feature_Disabled' => 'Esta caracter&iacute;stica est&aacute; deshabilitada.',

// Resend Activation - BEGIN
	'Resend_activation_email' => 'Reenviar el correo de activaci&oacute;n',
	'Invalid_activation' => 'Las cuentas de usuarios solo pueden ser activadas por los administradores.',
	'No_actkey' => 'Esta no es la clave de activaci&oacute;n para su cuenta. Por favor, contacte con el administrador del foro para m&aacute;s informaci&oacute;n.',
	'Send_actmail_flood_error' => 'Usted no puede hacer otra petici&oacute;n respecto a la &uacute;ltima tan seguido; por favor, intentelo de nuevo en unos momentos.',
	'Resend_activation_email_done' => 'El correo de activaci&oacute;n ha sido enviado. Por favor, revise su correo para mayor informaci&oacute;n.',
// Resend Activation - END

	'Bots_Group' => 'Robots',
	'Bots_Color' => 'Color de robots',
	'Active_Users_Group' => 'Usuarios activos',
	'Active_Users_Color' => 'Color de usuarios activos',
	'Group_Default_Membership' => 'Grupo por defecto',
	'Group_Default_Membership_Explain' => 'Seleccione un grupo por defecto para el usuario, para asignarle rango y color.',
	'User_Color' => 'Color de usuario',
	'User_Color_Explain' => 'Si ha especificado un color para este usuario, este ser&aacute; sobreescrito por el grupo por defecto si especifica un grupo en la casilla de arriba. Utilize el c&oacute;digo hexacedimal con <b>#</b> ejemplo: ff0000 es el color ROJO.',
	'No_Groups_Membership' => 'No pertenece a ning&uacute;n grupo',
	'No_Default_Group' => 'Sin grupo por defecto',
	'Group_members_updated' => 'Usuario del grupo actualizados correctamente.',
	'Colorize_All' => 'Colorear todos los usuarios',
	'Colorize_Selected' => 'Colorear los seleccionados',

	'CompanyWho' => 'La compa&ntilde;&iacute;a',
	'CompanyWhere' => 'Como encontrarnos',
	'CompanyServices' => 'Servicios',
	'CompanyProducts' => 'Productos',

	'ShareThisTopic' => 'Compartir este tema',

	'Remove_cookies' => 'Borrar cookies de esta web',
	'Cookies_deleted' => 'Todas las cookies han sido borradas. Ahora no est&aacute; identificado.<br />Para finalizar, debe cerrar su navegador ahora.',
	'Delete_cookies' => 'Borrar cookies',
	'cookies_confirm' => 'Est&aacute; seguro que desea borrar todas las cookies de esta web?<br /><br />Esta acci&oacute;n tambi&eacute;n cerrar&aacute; la sesi&oacute;n de su usuario.',

	'CustomIcy' => 'Personalizaci&oacute;n Icy',

	'Drafts' => 'Borradores',
	'Drafts_Action' => 'Acci&oacute;n',
	'Drafts_Save' => 'Guardar',
	'Drafts_Load' => 'Cargar',
	'Drafts_Saved' => 'Este borrador ha sido guardado',
	'Drafts_Loaded' => 'Borrador cargado',
	'Drafts_No_Drafts' => 'No hay borradores guardados',
	'Drafts_Delete_Sel' => 'Borrar seleccionado',
	'Drafts_Save_Question' => '<br /><br />&iquest;Esta seguro que quiere guardar este mensaje como borrador?<br /><br />Tenga en cuenta que solo se guardar&aacute; el cuerpo del mensaje, todas las dem&aacute;s configuraciones se perder&aacute;n.',
	'Drafts_Delete_Question' => '<br /><br />&iquest;Esta seguro que quiere borrar los borradores seleccionados?',
	'Drafts_Type' => 'Tipo de borrador',
	'Drafts_Subject' => 'T&iacute;tulo del borrador',
	'Drafts_NT' => 'Nuevo tema',
	'Drafts_NM' => 'Responder',
	'Drafts_NPM' => 'Mensaje privado',

	'CannotEditAdminsPosts' => 'No puede editar los mensajes de administradores',
	'Random_Number' => 'N&uacute;mero aleatorio',

	'New_download' => 'La nueva descarga se ha actualizado o subido.<br />Pulse %saqu&iacute;%s para verla.',
	'Dl_bug_tracker' => 'Bug tracker',
	'Downloads_ADV' => 'Descargas ADV',

	'TopicUseful' => '&iquest;Este tema fue &uacute;til?',
	'Article' => 'Art&iacute;culo',
	'Comments' => 'Comentarios',

	'Sitemap' => 'Mapa del sitio',

	'Delete_My_Account' => 'Borrar cuenta',
	'Delete_My_Account_Explain' => 'Si desea borrar su cuenta de usuario en esta web, por favor env&iacute;e una solicitud utilizando este formulario y su cuenta ser&aacute; borrada tan pronto como sea posible.<br />Por favor, especifique "Borrar cuenta" en el t&iacute;tulo y (si lo desea) escriba la raz&oacute;n en pocas palabras.',

	'KB_MODE_ON' => 'Habilitar biblioteca',
	'KB_MODE_OFF' => 'Deshabilitar biblioteca',

	'Go_To_Page_Number' => 'Ir a la p&aacute;gina',

	'Admin_Emails' => 'Los administradores pueden enviarme informaci&oacute;n',
	'Allow_PM_IN' => 'Permitir a los usuarios enviarme mensajes privados',
	'Allow_PM_IN_Explain' => 'Tenga en cuenta que administradores, moderadores y amigos siempre podr&aacute;n enviarle mensajes.',
	'Allow_PM_IN_SEND_ERROR' => 'El usuario al cual intenta enviarle un MP no puede recibirlo porqu&eacute; as&iacute; lo ha decidido en las configuraciones de su cuenta de usuario.',

// 'UCP_ZEBRA' => 'Friends &amp; Foes',
	'UCP_ZEBRA' => 'Administraci&oacute;n de amigos',
	'UCP_ZEBRA_FOES' => 'Administrar ignorados',
	'UCP_ZEBRA_FRIENDS' => 'Administrar amigos',

	'ADD_FOES' => 'A&ntilde;adir nuevos ignorados',
	'ADD_FOES_EXPLAIN' => 'Puede introducir varios nombres de usuario en una l&iacute;nea diferente.',
	'YOUR_FOES' => 'Sus ignorados',
	'YOUR_FOES_EXPLAIN' => 'Para borrar usuarios seleccione los que desea y presione enviar.<br />Nota: utilice CTRL para seleccionar/deseleccionar m&uacute;ltiples cuentas.',
	'FOE_MESSAGE' => 'Mensaje de ignorado',
	'FOES_EXPLAIN' => 'Ignorados son usuarios que ser&aacute;n ignorados por defecto. Mensajes por esos usuarios no ser&aacute;n completamente visibles. Mensajes personales de ignorados siguen siendo permitidos. Por favor, tenga en cuenta que no puede ignorar moderadores o administradores.',
	'FOES_UPDATED' => 'Su lista de ignorados ha sido actualizada correctamente.',
	'FOES_UPDATE_ERROR' => 'Su lista de ignorados NO ha sido actualizada.',
	'NO_FOES' => 'Actualmente no hay ignorados definidos',

	'ADD_FRIENDS' => 'A&ntilde;adir nuevos amigos',
	'ADD_FRIENDS_EXPLAIN' => 'Puede introducir varios nombres de usuario en una l&iacute;nea diferente.',
	'YOUR_FRIENDS' => 'Sus amigos',
	'YOUR_FRIENDS_EXPLAIN' => 'Para borrar usuarios seleccione los que desea y presione enviar.<br />Nota: utilice CTRL para seleccionar/deseleccionar m&uacute;ltiples cuentas.',
	'FRIEND_MESSAGE' => 'Mensaje de amigo',
	'FRIENDS' => 'Amigos',
	'FRIENDS_EXPLAIN' => 'Los amigos le permite tener acceso r&aacute;pido con usuarios y comunicarse con frecuencia. Si la plantilla lo soporta, sus amigos ser&aacute;n destacados visualmente.',
	'FRIENDS_UPDATED' => 'Su lista de amigos ha sido actualizada correctamente.',
	'FRIENDS_UPDATE_ERROR' => 'Su lista de amigos NO ha sido actualizada.',
	'FRIENDS_ONLINE' => 'Conectado',
	'FRIENDS_HIDDEN' => 'Oculto',
	'FRIENDS_OFFLINE' => 'Desconectado',
	'NO_FRIENDS' => 'Actualmente no hay amigos definidos',
	'NO_FRIENDS_OFFLINE' => 'No hay amigos desconectados',
	'NO_FRIENDS_ONLINE' => 'No hay amigos conectados',

	'Default' => 'Por defecto',

	'Reserved_Author' => '[ OCULTO ]',
	'Reserved_Topic' => '[ TEMA RESERVADO ]',
	'Reserved_Post' => '[ MENSAJE RESERVADO ]',

	'THANKS_RECEIVED' => 'Gracias recibidas',

	'RECENT_USER_ACTIVITY' => 'Actividad reciente de usuarios',
	'USER_TOPICS_STARTED' => 'Temas empezados',
	'USER_POSTS' => 'Mensajes escritos',
	'USER_TOPICS_VIEWS' => 'Temas vistos',
	'RECENT_USER_STARTED_TITLE' => 'empezado por %s',
	'RECENT_USER_STARTED_NAV' => 'Tema empezado por %s',
	'RECENT_USER_POSTS_TITLE' => 'y se ha publicado en %s',
	'RECENT_USER_POSTS_NAV' => 'Temas publicados en %s',
	'RECENT_USER_VIEWS_TITLE' => 'visto por %s',
	'RECENT_USER_VIEWS_NAV' => 'Temas vistos por %s',

	'WARN_NO_BUMP' => 'Eres el &uacute;ltimo usuario que ha enviado un mensaje en este tema: no puedo escribir nuevos mensajes antes de 24 horas desde su &uacute;ltimo mensaje.',

	'LINK_THIS_TOPIC' => 'Enlazar este tema',
	'LINK_URL' => 'URL',
	'LINK_BBCODE' => 'BBCode',
	'LINK_HTML' => 'HTML',

	'NEWS_POSTED' => 'Buscar noticias publicadas',
	'TOPICS_POSTED' => 'Buscar temas empezados',
	'POSTS_POSTED' => 'Buscar todos los mensajes del usuario',

	'ACCOUNT_DELETION_REQUEST' => 'El usuario %s ha solicitado que se elimine su cuenta del foro.',

	'SORT_TOPICS' => 'Ordenar temas',
	'SORT_TOPICS_NEWEST' => 'Mas nuevos',
	'SORT_TOPICS_OLDEST' => 'Mas viejos',

	'EDIT_POST_DETAILS' => 'Editar detalles del mensaje',
	'CURRENT_POSTER' => 'Escritor actual',
	'NEW_POSTER' => 'Nuevo escritor',
	'DETAILS_CHANGED' => '<b>Detalles del mensaje cambiados correctamente.</b></span><br /><span class="postdetails">Esta ventana se cerrar&aacute; en 3 segundos.',

	'Redirect' => 'Redireccionar',
	'Redirect_to' => 'Si su navegador no soporta la redirecci&oacute;n meta, por favor haga click %sAQU&Iacute;% para ser redirigido',

	'InProgress' => 'En progreso',

	'HAPPY_BIRTHDAY' => 'Feliz cumplea&ntilde;os',

	'DOWNLOAD' => 'Descargar',
	'DOWNLOADED' => 'Descargado',
	'FILESIZE' => 'Tama&ntilde;o del archivo',
	'FILENAME' => 'Nombre del archivo',
	'FILE_NOT_AUTH' => 'No esta autorizado para descargar este archivo',
	'SHOW_POSTS_FROM' => 'Mostrar los mensajes de',
	'SHOW_POSTS_TO' => 'a',

	'SEE_MORE_DETAILS' => 'Ver m&aacute;s detalles...',
	'UNKNOWN' => 'Desconocido',
	'MASS_PM' => 'MP masivo',
	'TEXT_FORMAT' => 'Formato',
	'SENDER' => 'Remitente',
	'PM_NOTIFICATION' => 'Hola,<br /><br />Ha recibido un nuevo mensaje privado en su cuenta de "{SITENAME}".<br /><br />Puede ver su mensaje haciendo click en el siguiente enlace:<br /><br />{U_INBOX}<br /><br />',

	'GSEARCH' => 'B&uacute;squeda Google',
	'GSEARCH_ENGINE' => 'Utilizar sistema de b&uacute;squeda Google',
	'SEARCH_WHAT' => 'Buscar que',
	'SEARCH_WHERE' => 'Buscar en',
	'SEARCH_THIS_FORUM' => 'Buscar en este foro...',
	'SEARCH_THIS_TOPIC' => 'Buscar en este tema...',
	'VF_ALL_TOPICS' => 'Todos los temas',

	'WHITE_LIST_MESSAGE' => 'Este foro requiere confirmaci&oacute;n de cuenta a trav&eacute;s de e-mail. Por favor, verifique que este dominio est&aacute; en la lista blanca de su sistema de antispam o nunca recibir&aacute; el mensaje de activaci&oacute;n.',
	'CLICK_RETURN_HOME' => 'Pulse %saqu&iacute;%s para volver a la p&aacute;gina principal',


	'RATINGS' => 'Valoraciones',

	'ERROR_TABLE' => 'No se ha podido consultar la tabla %s',

	'SMILEYS' => 'Emoticonos',
	'SMILEYS_NO_CATEGORIES' => 'No hay categor&iacute;as definidas',
	'SMILEYS_CATEGORY' => 'Categor&iacute;a',
	'SMILEYS_GALLERY' => 'Galer&iacute;a de emoticonos',
	'SMILEYS_STANDARD' => 'Emoticonos est&aacute;ndares',

	'QUICK_LIST' => 'Lista completa',
	'NORMAL_LIST' => 'Lista normal',

	'RETURN_PAGE' => '%sVolver a la p&aacute;gina anterior%s',
	'FILE_NOT_FOUND' => 'Archivo no encontrado',
	'FSOCK_DISABLED' => 'FSOCK deshabilitado',

	'MANAGEMENT' => 'Gesti&oacute;n',
	'SORT_ORDER' => 'Ordenar por',
	'SORT_DIR' => 'Direcci&oacute;n de ordenaci&oacute;n',


	'CONTACTS' => 'Contactos',

	// Event Registration - BEGIN
	'Reg_Title' => 'Registro de eventos',
	'Post_Registration' => 'Registro de eventos',
	'Add_registration' => 'A&ntilde;adir nuevo evento',
	'Add_reg_explain' => '&nbsp;&bull; Marque <i>activar</i> para mostrar el formulario de registro para este mensaje. Desmarcar para ocultarlo.<br />&nbsp;&bull; Marque <i>reset</i> para eliminar todos los registros actuales del formulario.<br />&nbsp;&bull; Introduzca un n&uacute;mero en <i>registros</i> para limitarlos. "0" o en blanco = ilimitado.',
	'reg_activate' => 'Activar',
	'reg_reset' => 'Borrar',
	'Reg_Insert' => 'Se ha registrado en este evento.',
	'Reg_Change' => 'Registro cambiado.',
	'Reg_Confirm' => 'Registro confirmado.',
	'Reg_Unregister' => 'Registro cancelado.',
	'Reg_Max_Registrations' => 'Se ha superado el m&aacute;ximo de registros para esta opci&oacute;n. No se acceptan mas registros.',
	'Reg_No_Slots_Left' => 'Registros completos.',
	'Reg_One_Slot_Left' => 'Solo se permite un registro mas.',
	'Reg_Slots_Left' => 'A&uacute;n se permiten %s registros.',
	'Reg_Self_Unregister' => 'No registrado',
	'Reg_Own_Confirmation' => 'Confirmaci&oacute;n',
	'Reg_Own_Confirmed' => 'confirmado',
	'Reg_Green_Option' => 'Opci&oacute;n verde',
	'Reg_Blue_Option' => 'Opci&oacute;n azul',
	'Reg_Red_Option' => 'Opci&oacute;n roja',
	'Reg_Value_Max_Registrations' => 'Registros',
	'Reg_Do' => 'Registrarse',
	'Reg_Maybe' => 'No estoy seguro',
	'Reg_Dont' => 'No en este momento',
	'Reg_Head_Username' => 'Usuario:',
	'Reg_Head_Time' => 'Fecha:',
	'Reg_for' => 'Ejecutar el registro para',
	'Reg_for_explain' => '[ Introduzca 0 o deje en blanco para no poner fecha final de registro ]',
	'Reg_no_options_specified' => 'Debe especificar al menos una opci&oacute;n para registrarse.',
	'Reg_event_date' => '<b>Fecha del evento: </b>',
	// Event Registration - END

	'REPLY_PREFIX_OLD' => 'Re: ',
	'REPLY_PREFIX' => 'Re: ',

	'READ_ONLY_FORUM' => 'Lo sentimos, pero actualmente el foro solo funciona en <b>MODO DE LECTURA</b>, esto significa que no puede publicar nuevos mensajes. Int&eacute;ntelo mas tarde.',

	// Tickets Submission - BEGIN
	'TICKET_CAT' => 'Categor&iacute;a',
	// Tickets Submission - END

	'LIMIT_EDIT_TIME_WARN' => 'Lo siento, pero s&oacute;lo puede editar el mensaje en los primeros <b>%d</b> minutos despu&eacute;s de enviarlo.',
	'CLEAN_NAME' => 'Nombre limpio',
	'CLEAN_NAME_EXPLAIN' => 'S&oacute;lo caracteres alfanum&eacute;ricos y guiones',
	'TOPIC_TAGS' => 'Etiquetas y Palabras Clave',
	'TOPIC_TAGS_EXPLAIN' => 'Separe cada etiqueta usando una coma',
	'TOPIC_TAGS_CLOUDS' => 'Nube de Etiquetas y Palabras Clave',
	'TOPIC_TAGS_LIST' => 'Lista de Etiquetas y Palabras Clave',
	'TAG_COUNT' => 'Contador',
	'TAG_TEXT' => 'Etiqueta',
    'TAGS_TEXT' => 'Etiquetas',
	'TAGS_SEARCH' => 'Buscar etiqueta...',
	'TAGS_SEARCH_NO_RESULTS' => 'No se encontraron etiquetas!',
    'TAG_RESULTS' => 'Etiqueta seleccionada: <b>%s</b>',
	
	'TAGS_NO_TAGS' => 'No se ha definido ninguna etiqueta',
	'TAGS_NO_TAG' => 'La etiqueta especificada no existe',

	'SQL_ERROR_OCCURRED' => 'Ocurri&oacute; un error SQL cuando se intent&oacute; mostrar esta p&aacute;gina. Por favor contacte el Administrador del Sitio si este problema persiste.',

	'PLUGIN_DISABLED' => 'Este plugin est&aacute; desactivado por el momento.',

	'AJAX_SHOUTBOX' => 'Chat',
	'AJAX_SHOUTBOX_PVT' => 'Chat Privado',
	'AJAX_SHOUTBOX_PVT_LINK' => 'Conversar directamente con este usuario',
	'AJAX_SHOUTBOX_PVT_ALERT' => 'Tiene una petici&oacute;n de conversaci&oacute;n privada',

	// COMMON DB - BEGIN
	'SELECT_SORT_METHOD' => 'Ordenar por',
	'ORDER' => 'M&eacute;todo de orden',
	'SUBMIT' => 'Enviar',
	'DATE' => 'Fecha',
	'USERID' => 'ID de Usuario',
	'USERNAME' => 'Nombre de Usuario',
	'EMAIL' => 'Email',
	'WEBSITE' => 'Sitio Web',
	'EDIT' => 'Editar',
	'DELETE' => 'Eliminar',
	'YES' => 'S&iacute;',
	'NO' => 'No',

	'DB_ITEM_VIEW' => 'Ver Campo',
	'DB_ITEM_UPDATED' => 'Campo actualizado correctamente',
	'DB_ITEM_ADD' => 'A&ntilde;adir Campo',
	'DB_ITEM_ADDED' => 'Campo a&ntilde;adido correctamente',
	'DB_ITEM_REMOVED' => 'Campo eliminado correctamente',
	'DB_ITEM_NO_ITEMS' => 'No hay campos',
	'DB_ITEM_CLICK_VIEW_ITEM' => 'Haga clic %saqu&iacute;%s para ver los datos a&ntilde;adidos',
	'DB_ITEM_CLICK_RETURN_ITEMS' => 'Haga clic %saqu&iacute;%s para volver a la lista',
	// COMMON DB - END

	'LOGIN_ATTEMPTS_EXCEEDED' => 'El n&uacute;mero m&aacute;ximo de %s intentos de conexi&oacute;n ha sido excedido. No podr&aacute; intentar conectarse en los pr&oacute;ximos %s minutos.',
	'LOGIN_CONFIRM_EXPLAIN' => 'Para prevenir cuentas creadas en lote, el sitio requiere que escriba este c&oacute;digo de confirmaci&oacute;n tras varios intentos fallidos de conexi&oacute;n. El c&oacute;digo es mostrado en la imagen que ve m&aacute;s abavo. Si no puede leer el c&oacute;digo por favor contacte con el %sAdministrador%s.',
	'LOGIN_ERROR_ATTEMPTS' => 'Ha excedido el n&uacute;mero m&aacute;ximo de intentos de conexi&oacute;n. En adici&oacute;n a su nombre de usuario y contrase&ntilde;a, deber&aacute; escribir el c&oacute;digo de confirmaci&oacute;n de la imagen que ve m&aacute;s abajo.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE' => 'No ha sido autenticado por Apache.',
	'LOGIN_ERROR_PASSWORD' => 'Ha especificado una contrase&ntilde;a incorrecta. Por favor compruebe su contrase&ntilde;a e int&eacute;ntelo de nuevo. Si sigue teniendo problemas por favor contacte al %sAdministrador%s.',
	'LOGIN_ERROR_PASSWORD_CONVERT' => 'No ha sido posible convertir su contrase&ntilde;a cuando se actualiz&oacute; el software del sitio. Por favor %ssolicite una nueva contrase&ntilde;a%s. Si sigue tieniendo problemas, por favor contacte al %sAdministrador%s.',
	'LOGIN_ERROR_USERNAME' => 'Ha especificado un nombre de usuario incorrecto. Por favor compru&eacute;belo e int&eacute;ntelo de nuevo. Tenga en cuenta que el campo s&iacute; que distingue entre may&uacute;sculas y min&uacute;sculas. Si sigue teniendo problemas por favor contacte al %sAdministrador%s.',
	'NO_PASSWORD_SUPPLIED' => 'No se puede conectar sin una contrase&ntilde;a.',
	'ACTIVE_ERROR' => 'El nombre de usuario especificado est&aacute; actualmente inactivo. Si tiene problemas activando su cuenta por favor contacte al %sAdministrador%s.',

	'Bytes' => 'Bytes',
	'KB' => 'KB',
	'MB' => 'MB',
	'GB' => 'GB',

	'NO_EVENTS' => 'No hay eventos planificados',
	'EVENT_START_DATE' => 'Fecha de inicio',
	'EVENT_START_TIME' => 'Hora de inicio',
	'EVENT_END_DATE' => 'Fecha de fin',
	'EVENT_END_TIME' => 'Hora de fin',
	'EVENT_TITLE' => 'Evento',
	'EVENT_FORUM' => 'Categor&iacute;a',

	'MAX_OPTIONS_SELECT' => 'Debe seleccionar hasta <strong>%d</strong> opciones',
	'MAX_OPTION_SELECT' => 'Debe seleccionar <strong>una</strong> opci&oacute;n',
	'NO_POLLS' => 'No hay encuestas',
	'NO_VOTE_OPTION' => 'Debe especificar una opci&oacute;n cuando vota.',
	'NO_VOTES' => 'No hay votos',
	'POLL_ENDED_AT' => 'La encuesta termin&oacute; el %s',
	'POLL_MAX_OPTIONS' => 'M&aacute;ximo de opciones',
	'POLL_MAX_OPTIONS_EXPLAIN' => 'N&uacute;mero m&aacute;ximo de opciones seleccionables por usuarios',
	'POLL_NO_GUESTS' => 'Lo siento, pero los Invitados no pueden votar',
	'POLL_RUN_TILL' => 'La encuesta corre hasta %s',
	'POLL_VOTE_CHANGE' => 'Permitir cambio de voto',
	'POLL_VOTED_OPTION' => 'Usted vot&oacute; por esta opci&oacute;n',
	'TOO_MANY_VOTE_OPTIONS' => 'Ha intentado votar demasiadas opciones.',
	'VIEW_POLL' => 'Ver la encuesta',
	'VOTE_SUBMITTED' => 'Su voto se ha guardado.',
	'VOTE_CONVERTED' => 'No se puede cambiar votos en encuestas convertidas.',

	'FORM_INVALID' => 'El formulario que ha enviado es inv&aacute;lido. Intente enviarlo de nuevo.',

	'NO_USERS_FOUND' => 'No se encontraron usuarios',
	'POST_IP' => 'Direcci&oacute;n IP',
	'FIND_USERNAME' => 'Encontrar un miembro',
	'FIND_USERNAME_HIDE' => 'Ocultar el formulario &quot;Encontrar un miembro&quot;',
	'FIND_USERNAME_EXPLAIN' => 'Use este formulario para buscar miembros espec&iacute;ficos. No debe rellenar todos los campos. Para encontrar datos parciales, use * como comod&iacute;n. Cuando introduzca fechas use el formato <kbd>AAAA-MM-DD</kbd>, por ejemplo <samp>2004-02-29</samp>. Use las casillas de selecci&oacute;n para seleccionar uno o m&aacute;s nombres de usuario (muchos nombres de usuario pueden ser aceptados dependiendo de el formulario mismo) y haga clic en el bot&oacute;n Seleccionar Marcados para volver al formulario anterior.',

	'AUTH_NONE' => 'NINGUNO',
	'AUTH_ALL' => 'TODOS',
	'AUTH_REG' => 'REGISTRADOS',
	'AUTH_SELF' => 'PROPIOS',
	'AUTH_PRIVATE' => 'PRIVADO',
	'AUTH_MOD' => 'MODERADORES',
	'AUTH_JADMIN' => 'ADMIN JUNIOR',
	'AUTH_ADMIN' => 'ADMIN',

	'SHARE' => 'Compartir',
	'LIKE' => 'Me gusta',
	'UNLIKE' => 'No me gusta',
	'LIKE_POST' => 'Me gusta este mensaje',
	'UNLIKE_POST' => 'No me gusta este mensaje',
	'LIKE_TIME' => 'Fecha',
	'LIKE_RECAP' => 'Usuarios a los que les gusta este mensaje',
	'LIKE_COUNTER_YOU' => 'Te gusta este mensaje',
	'LIKE_COUNTER_YOU_OTHERS_SINGLE' => 'A t&iacute; y a otro usuario os gusta este mensaje',
	'LIKE_COUNTER_YOU_OTHERS' => 'A t&iacute; y a %s usuarios os gusta este mensaje',
	'LIKE_COUNTER_OTHERS' => 'A %s usuarios les gusta este mensaje',
	'LIKE_COUNTER_OTHERS_SINGLE' => 'A un usuario le gusta este mensaje',

	'FRIENDSHIP_STATUS' => 'Estado de amistad',
	'FRIEND_ADD' => 'A&ntilde;adir como amigo',
	'FRIEND_REMOVE' => 'Eliminar de mis amigos',
	'FOE_ADD' => 'A&ntilde;adir como enemigo',
	'FOE_REMOVE' => 'Eliminar de mis enemigos',
    'SOCIAL_NETWORKS' => 'Redes Sociales',
	'USER_FIRST_NAME' => 'Nombre',
	'USER_LAST_NAME' => 'Apellidos',
	'FACEBOOK' => 'Facebook',
	'TWITTER' => 'Twitter',

    'INACTIVE_USER' => 'Usuario Inactivo',
    'SEARCH_MIN_CHARS' => 'Necesita introducir como minimo %s letras para usar la busqueda.',

    'EXTRA_STATS_SHOW' => 'Mostrar Estad&iacute;sticas Extra',
    'EXTRA_STATS_HIDE' => 'Esconder Estad&iacute;sticas Extra',
    'RESERVED' => 'Reservado',
'VIEW_TOPICS_DAYS' => 'Display topics from previous days',
	'VIEW_TOPICS_DIR' => 'Display topic order direction',
	'VIEW_TOPICS_KEY' => 'Display topics ordering by',
	'VIEW_POSTS_DAYS' => 'Display posts from previous days',
	'VIEW_POSTS_DIR' => 'Display post order direction',
	'VIEW_POSTS_KEY' => 'Display posts ordering by',

	'AUTHOR' => 'Autor',
	'POST_TIME' => 'Hora',
	'REPLIES' => 'Respuestas',
	'SUBJECT' => 'Objetivo',
	'VIEWS' => 'Vistas',

	'INVALID' => 'Data invalida.',
	'TOO_LARGE' => 'El valor es demasiado grande.',
	'TOO_LONG' => 'El valor es demasiado largo.',
	'TOO_SHORT' => 'El valor es demasiado corto.',
	'TOO_SMALL' => 'El valor es demasiado peque&ntilde;o.',
	'WRONG_DATA' => 'Data invalida.',

	'ERROR_NO_ATTACHMENT' => 'El archivo que intenta descargar, no existe.',
	'NO_FORUM' => 'El Foro selecionado, no existe.',
	'NO_TOPIC' => 'El Topico &oacute; Post que busca, no existe.',
	'NO_USER' => 'Lo sentimos, pero este Usuario no existe',

	'AJAX_SEARCH' => 'Buscar...',

	'FLICKR' => 'Flickr',
	'GOOGLEPLUS' => 'Google Plus',
	'LINKEDIN' => 'LinkedIn',
	'YOUTUBE' => 'YouTube',

	'MOBILE_STYLE_ENABLE' => 'Habilitar estilo Movil',
	'MOBILE_STYLE_DISABLE' => 'Deshabilitar estilo Movil',

	'INVALID_SESSION' => 'Session invalida. Si el problema persiste, contacte con el Administrador.',

	'BACK_TO_TOP' => 'Arriba',
	'BACK_TO_PREV' => 'Volver a Pagina previa',

	'CMS_EDIT_PARENT_BLOCK' => 'Editar bloque padre',

	'UPI2DB_DISABLED' => 'UPI2DB Deshabilitado',
	'UPI2DB_LINK_U' => 'UPI2DB No leeidos',
	'UPI2DB_LINK_M' => 'UPI2DB Markados',
	'UPI2DB_LINK_P' => 'UPI2DB Permanentes',
	'UPI2DB_LINK_FULL' => 'UPI2DB Info completa',
	'NEW_POSTS_LINK' => 'Nuevos',
	'LOGIN_LOGOUT_LINK' => 'Conectar/Desconectar',
	'MENU_EMPTY_LINK' => 'Enlace vacio',

	'IP_BLACKLISTED' => 'Su IP %s ha sido blockeada por encontrarse en la lista negra. Para mas Informac&iacute;on visite <a href="%s">%s</a>.',

	)
);
	
/*Special Cases, Do not bother to change for another language */
$lang['YES'] = $lang['Yes'];
$lang['NO'] = $lang['No'];
$lang['HL_File_Error'] = $lang['Error_File_Opening'];

$lang['Prune_commands'] = array();
// here you can make more entries if needed
$lang['Prune_commands'][0] = 'Borrar usuarios/as que no escriben';
$lang['Prune_explain'][0] = 'De quienes nunca han posteado, <b>Excluir</b> nuevos usuarios a partir de %d d&iacute;as';
$lang['Prune_commands'][1] = 'Borrar usuarios/as inactivos/as';
$lang['Prune_explain'][1] = 'De quienes nunca se han logueado, <b>Excluir</b> nuevos usuarios a partir de %d d&iacute;as';
$lang['Prune_commands'][2] = 'Borrar usuarios/as que no han activado su cuenta';
$lang['Prune_explain'][2] = 'De quienes nunca han activado su cuenta, <b>Excluir</b> nuevos usuarios a partir de %d d&iacute;as';
$lang['Prune_commands'][3] = 'Borrar usuarios/as que no nos visitan'; 
$lang['Prune_explain'][3] = 'De quienes no nos visitan desde hace 60 d&iacute;as, <b>Excluir</b> nuevos usuarios a partir de %d d&iacute;as'; 
$lang['Prune_commands'][4] = 'Borrar usuarios/as que no escriben regularmente'; 
$lang['Prune_explain'][4] = 'De quienes tienen menos de un 1 env&iacute;o por cada 10 d&iacute;as de registro, <b>Excluir</b> nuevos usuarios a partir de %d d&iacute;as';
$lang['Prune_commands'][5] = 'Borrar usuarios que no escriben y no visitan el foro';
$lang['Prune_explain'][5] = 'De quieres nunca han enviado un mensaje y no han visitado el foro recientemente, <b>excluyendo</b> los nuevos usuarios de los &uacute;ltimos %d d&iacute;as';

// Timezones - BEGIN
$lang['All_times'] = 'Todas las horas son %s'; // eg. All times are GMT - 12 Horas (times from next block)

// Time zones short
$lang['tz'] = array(
	'-12' => 'UTC - 12 Horas',
	'-11' => 'UTC - 11 Horas',
	'-10' => 'UTC - 10 Horas',
	'-9.5' => 'UTC - 9:30 Horas',
	'-9' => 'UTC - 9 Horas',
	'-8' => 'UTC - 8 Horas',
	'-7' => 'UTC - 7 Horas',
	'-6' => 'UTC - 6 Horas',
	'-5' => 'UTC - 5 Horas',
	'-4.5' => 'UTC - 4:30 Horas',
	'-4' => 'UTC - 4 Horas',
	'-3.5' => 'UTC - 3:30 Horas',
	'-3' => 'UTC - 3 Horas',
	'-2' => 'UTC - 2 Horas',
	'-1' => 'UTC - 1 Hora',
	'0' => 'UTC',
	'1' => 'UTC + 1 Hora',
	'2' => 'UTC + 2 Horas',
	'3' => 'UTC + 3 Horas',
	'3.5' => 'UTC + 3:30 Horas',
	'4' => 'UTC + 4 Horas',
	'4.5' => 'UTC + 4:30 Horas',
	'5' => 'UTC + 5 Horas',
	'5.5' => 'UTC + 5:30 Horas',
	'5.75' => 'UTC + 5:45 Horas',
	'6' => 'UTC + 6 Horas',
	'6.5' => 'UTC + 6:30 Horas',
	'7' => 'UTC + 7 Horas',
	'8' => 'UTC + 8 Horas',
	'8.75' => 'UTC + 8:45 Horas',
	'9' => 'UTC + 9 Horas',
	'9.5' => 'UTC + 9:30 Horas',
	'10' => 'UTC + 10 Horas',
	'10.5' => 'UTC + 10:30 Horas',
	'11' => 'UTC + 11 Horas',
	'11.5' => 'UTC + 11:30 Horas',
	'12' => 'UTC + 12 Horas',
	'12.75' => 'UTC + 12:45 Horas',
	'13' => 'UTC + 13 Horas',
	'14' => 'UTC + 14 Horas',
	'dst' => '[ <abbr title="Daylight Saving Time">DST</abbr> ]',
);

// These are displayed in the timezone select box
$lang['tz_zones'] = array(
	'-12' => '[UTC - 12] Baker Island Time',
	'-11' => '[UTC - 11] Niue Time, Samoa Standard Time',
	'-10' => '[UTC - 10] Hawaii-Aleutian Standard Time, Cook Island Time',
	'-9.5' => '[UTC - 9:30] Marquesas Islands Time',
	'-9' => '[UTC - 9] Alaska Standard Time, Gambier Island Time',
	'-8' => '[UTC - 8] Pacific Standard Time',
	'-7' => '[UTC - 7] Mountain Standard Time',
	'-6' => '[UTC - 6] Central Standard Time',
	'-5' => '[UTC - 5] Eastern Standard Time',
	'-4.5' => '[UTC - 4:30] Venezuelan Standard Time',
	'-4' => '[UTC - 4] Atlantic Standard Time',
	'-3.5' => '[UTC - 3:30] Newfoundland Standard Time',
	'-3' => '[UTC - 3] Amazon Standard Time, Central Greenland Time',
	'-2' => '[UTC - 2] Fernando de Noronha Time, South Georgia &amp; the South Sandwich Islands Time',
	'-1' => '[UTC - 1] Azores Standard Time, Cape Verde Time, Eastern Greenland Time',
	'0' => '[UTC] Western European Time, Greenwich Mean Time',
	'1' => '[UTC + 1] Central European Time, West African Time',
	'2' => '[UTC + 2] Eastern European Time, Central African Time',
	'3' => '[UTC + 3] Moscow Standard Time, Eastern African Time',
	'3.5' => '[UTC + 3:30] Iran Standard Time',
	'4' => '[UTC + 4] Gulf Standard Time, Samara Standard Time',
	'4.5' => '[UTC + 4:30] Afghanistan Time',
	'5' => '[UTC + 5] Pakistan Standard Time, Yekaterinburg Standard Time',
	'5.5' => '[UTC + 5:30] Indian Standard Time, Sri Lanka Time',
	'5.75' => '[UTC + 5:45] Nepal Time',
	'6' => '[UTC + 6] Bangladesh Time, Bhutan Time, Novosibirsk Standard Time',
	'6.5' => '[UTC + 6:30] Cocos Islands Time, Myanmar Time',
	'7' => '[UTC + 7] Indochina Time, Krasnoyarsk Standard Time',
	'8' => '[UTC + 8] Chinese Standard Time, Australian Western Standard Time, Irkutsk Standard Time',
	'8.75' => '[UTC + 8:45] Southeastern Western Australia Standard Time',
	'9' => '[UTC + 9] Japan Standard Time, Korea Standard Time, Chita Standard Time',
	'9.5' => '[UTC + 9:30] Australian Central Standard Time',
	'10' => '[UTC + 10] Australian Eastern Standard Time, Vladivostok Standard Time',
	'10.5' => '[UTC + 10:30] Lord Howe Standard Time',
	'11' => '[UTC + 11] Solomon Island Time, Magadan Standard Time',
	'11.5' => '[UTC + 11:30] Norfolk Island Time',
	'12' => '[UTC + 12] New Zealand Time, Fiji Time, Kamchatka Standard Time',
	'12.75' => '[UTC + 12:45] Chatham Islands Time',
	'13' => '[UTC + 13] Tonga Time, Phoenix Islands Time',
	'14' => '[UTC + 14] Line Island Time',
);
// Timezones - END

// Dates And Times - BEGIN
$lang = array_merge($lang, array(
	'WEEK_DAY_SUNDAY' => 'Domingo',
	'WEEK_DAY_MONDAY' => 'Lunes',
	'WEEK_DAY_TUESDAY' => 'Martes',
	'WEEK_DAY_WEDNESDAY' => 'Miercoles',
	'WEEK_DAY_THURSDAY' => 'Jueves',
	'WEEK_DAY_FRIDAY' => 'Viernes',
	'WEEK_DAY_SATURDAY' => 'Sabado',

	'TIME_YEAR' => 'A&ntilde;o',
	'TIME_MONTH' => 'Mes',
	'TIME_DAY' => 'Dia',
	'TIME_HOUR' => 'Hora',
	'TIME_MINUTE' => 'Minuto',
	'TIME_SECOND' => 'Segundo',

	// The value is only an example and will get replaced by the current time on view
	'dateformats' => array(
		'd M Y, H:i' => '01 Ene 2007, 13:37',
		'd M Y H:i' => '01 Ene 2007 13:37',
		'M jS, \'y, H:i' => 'Ene 1st, \'07, 13:37',
		'D M d, Y g:i a' => 'Lun Ene 01, 2007 1:37 pm',
		'F jS, Y, g:i a' => 'Enero 1º, 2007, 1:37 pm',
		'|d M Y|, H:i' => 'Hoy, 13:37 / 01 Ene 2007, 13:37',
		'|F jS, Y|, g:i a' => 'Hoy, 1:37 pm / Enero 1º, 2007, 1:37 pm'
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat' => 'D M d, Y g:i a', // Mon Jan 01, 2007 1:37 pm

	)
);

$lang['datetime'] = array(
	'TODAY' => 'Hoy',
	'TOMORROW' => 'Ma&ntilde;ana',
	'YESTERDAY' => 'Ayer',
	'AGO' => array(
		0 => 'hace menos de un minuto',
		1 => 'hace %d minutos',
		2 => 'hace %d minutos',
		60=> 'hace una hora',
	),

	'Sunday' => 'Domingo',
	'Monday' => 'Lunes',
	'Tuesday' => 'Martes',
	'Wednesday' => 'Miercoles',
	'Thursday' => 'Jueves',
	'Friday' => 'Viernes',
	'Saturday' => 'Sabado',

	'Sun' => 'Dom',
	'Mon' => 'Lun',
	'Tue' => 'Mar',
	'Wed' => 'Mie',
	'Thu' => 'Jue',
	'Fri' => 'Vie',
	'Sat' => 'Sab',

	'SUN_S' => 'Do',
	'MON_S' => 'Lu',
	'TUE_S' => 'Ma',
	'WED_S' => 'Mi',
	'THU_S' => 'Ju',
	'FRI_S' => 'Vi',
	'SAT_S' => 'Sa',

	'January' => 'Enero',
	'February' => 'Febrero',
	'March' => 'Marzo',
	'April' => 'Abril',
	'May' => 'Mayo',
	'June' => 'Junio',
	'July' => 'Julio',
	'August' => 'Agosto',
	'September' => 'Septiembre',
	'October' => 'Octobre',
	'November' => 'Noviembre',
	'December' => 'Diciembre',

	'JAN' => 'Ene',
	'FEB' => 'Feb',
	'MAR' => 'Mar',
	'APR' => 'Abr',
	'MAY' => 'May',
	'JUN' => 'Jun',
	'JUL' => 'Jul',
	'AUG' => 'Ago',
	'SEP' => 'Sep',
	'OCT' => 'Oct',
	'NOV' => 'Nov',
	'DEC' => 'Dic',

	'Jan_short' => 'Ene',
	'Feb_short' => 'Feb',
	'Mar_short' => 'Mar',
	'Apr_short' => 'Abr',
	'May_short' => 'May',
	'Jun_short' => 'Jun',
	'Jul_short' => 'Jul',
	'Aug_short' => 'Ago',
	'Sep_short' => 'Sep',
	'Oct_short' => 'Oct',
	'Nov_short' => 'Nov',
	'Dec_short' => 'Dic',
);

$lang['day_short'] = array($lang['datetime']['Sun'], $lang['datetime']['Mon'], $lang['datetime']['Tue'], $lang['datetime']['Wed'], $lang['datetime']['Thu'], $lang['datetime']['Fri'], $lang['datetime']['Sat']);

$lang['day_long'] = array($lang['datetime']['Sunday'], $lang['datetime']['Monday'], $lang['datetime']['Tuesday'], $lang['datetime']['Wednesday'], $lang['datetime']['Thursday'], $lang['datetime']['Friday'], $lang['datetime']['Saturday']);

$lang['month_short'] = array($lang['datetime']['JAN'], $lang['datetime']['FEB'], $lang['datetime']['MAR'], $lang['datetime']['APR'], $lang['datetime']['MAY'], $lang['datetime']['JUN'], $lang['datetime']['JUL'], $lang['datetime']['AUG'], $lang['datetime']['SEP'], $lang['datetime']['OCT'], $lang['datetime']['NOV'], $lang['datetime']['DEC']);

$lang['month_long'] = array($lang['datetime']['January'], $lang['datetime']['February'], $lang['datetime']['March'], $lang['datetime']['April'], $lang['datetime']['May'], $lang['datetime']['June'], $lang['datetime']['July'], $lang['datetime']['August'], $lang['datetime']['September'], $lang['datetime']['October'], $lang['datetime']['November'], $lang['datetime']['December']);
// Dates And Times - END
//====================================================
// Do not insert anything below this line
//====================================================

?>