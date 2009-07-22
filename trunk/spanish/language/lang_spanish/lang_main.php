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
<span style="color: #ff5500;"><b>Mighty Gorgon</b></span><br />
<i>(Luca Libralato)</i><br />
<b><i>Programador</i></b><br />
Intereses: Heroes Of Might and Magic III, 69, #FF5522<br />
Localitzaci�n: Homer\'s Head<br />
<br />
<br />
<span style="color: #dd2222;"><b>Bicet</b></span><br />
<b><i>Programador phpBB XS</i></b><br />
<br />
<br />
<span style="color: #dd2222;"><b>Bicet</b></span><br />
<b><i>Programador phpBB XS</i></b><br />
<br />
<br />
<b><i>Contribuciones valiosas</i></b><br />
<span style="color: #228822;"><b>Andrea75</b></span><br />
<span style="color: #dd2222;"><b>Artie</b></span><br />
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
<span style="color: #228822;"><b>KasLimon</b></span><br />
<span style="color: #aaff00;"><b>KugeLSichA</b></span><br />
<span style="color: #0000bb;"><b>Limun</b></span><br />
<span style="color: #880088;"><b>Lopalong</b></span><br />
<span style="color: #228822;"><b>moreteavicar</b></span><br />
<span style="color: #228822;"><b>novice programmer</b></span><br />
<span style="color: #228822;"><b>ThE KuKa</b></span><br />
<span style="color: #ff7700;"><b>TheSteffen</b></span><br />
<span style="color: #0000bb;"><b>Tom</b></span><br />
<span style="color: #228822;"><b>z3d0</b></span><br />
<span style="color: #228822;"><b>Zuker</b></span><br />
<br />
Intereses: Icy Phoenix<br />
Localizaci�n: <a href="http://www.icyphoenix.com/">http://www.icyphoenix.com</a>
';

$lang['BBC_IP_CREDITS'] = '<div class="center-block"><marquee behavior="scroll" direction="up" scrolldelay="120">' . $lang['BBC_IP_CREDITS_STATIC'] . '</marquee></div>';

$lang = array_merge($lang, array(
	'Home' => 'Portal',
	'Forum' => 'Foro',
	'Category' => 'Categor�a',
	'Topic' => 'Tema',
	'Topics' => 'Temas',
	'Replies' => 'Respuestas',
	'Views' => 'Lecturas',
	'Post' => 'Mensaje',
	'Posts' => 'Mensajes',
	'Posted' => 'Publicado',
	'Username' => 'Nombre de usuario',
	'Password' => 'Contrase�a',
	'Email' => 'Correo',
	'Poster' => 'Autor',
	'Author' => 'Autor',
	'Time' => 'Hora',
	'Hours' => 'Horas',
	'Message' => 'Mensaje',

	'1_Day' => '1 d�a',
	'7_Days' => '7 d�as',
	'2_Weeks' => '2 semanas',
	'1_Month' => '1 mes',
	'3_Months' => '3 meses',
	'6_Months' => '6 meses',
	'1_Year' => '1 a�o',

	'Go' => 'Ir',
	'Jump_to' => 'Saltar a',
	'Submit' => 'Enviar',
	'Reset' => 'Restablecer',
	'Cancel' => 'Cancelar',
	'Preview' => 'Vista previa',
	'Confirm' => 'Confirmar',
	'Spellcheck' => 'Ortograf�a',
	'Yes' => 'S�',
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
	'Goto_page' => 'Ir a la p�gina',
	'Joined' => 'Registrado',
	'IP_Address' => 'Direcci�n IP',

	'Select_forum' => 'Seleccione un foro',
	'View_latest_post' => 'Ver �ltimo mensaje',
	'View_newest_post' => 'Ver mensaje m�s reciente',
	'Page_of' => 'P�gina <b>%d</b> de <b>%d</b>', // Replaces with: Page 1 of 2 for example

	'ICQ' => 'N�mero de ICQ',
	'AIM' => 'Direcci�n AIM',
	'MSNM' => 'MSN Messenger',
	'YIM' => 'Yahoo Messenger',
	'SKYPE' => 'Skype',
	'Forum_Index' => 'Foro',  // eg. sitename Forum Index, %s can be removed if you prefer

	'Post_new_topic' => 'Publicar nuevo tema',
	'Reply_to_topic' => 'Responder al tema',
	'Reply_with_quote' => 'Responder citando',

	'Click_return_topic' => 'Pulse %saqu�%s para volver al tema', // %s's here are for uris, do not remove!
	'Click_return_login' => 'Pulse %saqu�%s para intentar de nuevo',
	'Click_return_forum' => 'Pulse %saqu�%s para volver al foro',
	'Click_view_message' => 'Pulse %saqu�%s para ver su mensaje',
	'Click_return_modcp' => 'Pulse %saqu�%s para volver al panel de control del moderador',
	'Click_return_group' => 'Pulse %saqu�%s para volver a la informaci�n de grupo',

	'Admin_panel' => 'Ir al ACP',

	'Board_disabled' => 'Lo sentimos, pero este foro est� moment�neamente deshabilitado. Por favor, intente ingresar de nuevo pasados unos minutos.',

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
	'Record_online_users' => 'El n�mero m�ximo de usuarios conectados a la vez fue de <b>%s</b> el %s', // first %s = number of users, second %s is the date.

	'Admin_online_color' => '%sAdministrador%s',
	'Mod_online_color' => '%sModerador%s',

	'You_last_visit' => 'Su �ltima visita fue el %s', // %s replaced by date/time
	'Current_time' => 'Fecha y hora actual: %s', // %s replaced by time

	'Search_new' => 'Ver mensajes desde su �ltima visita',
	'Search_your_posts' => 'Ver sus mensajes',
	'Search_unanswered' => 'Ver mensajes sin respuestas',

	'Register' => 'Registrarse',
	'Profile' => 'Perfil',
	'Edit_profile' => 'Editar su perfil',
	'Search' => 'Buscar',
	'Memberlist' => 'Lista de usuarios',
	'FAQ' => 'FAQ',
	'KB_title' => 'Biblioteca',
	'BBCode_guide' => 'Gu�a de BBCode',
	'Usergroups' => 'Grupos de usuarios',
	'Last_Post' => '�ltimo mensaje',
	'Moderator' => 'Moderador',
	'Moderators' => 'Moderadores',

// Stats block text
	'Posted_articles_zero_total' => 'Mensajes en total: <b>0</b>', // Number of posts
	'Posted_articles_total' => 'Mensajes en total: <b>%d</b>', // Number of posts
	'Posted_article_total' => 'Mensajes en total: <b>%d</b>', // Number of posts
	'Registered_users_zero_total' => 'Tenemos <b>0</b> usuarios registrados', // # registered users
	'Registered_users_total' => 'Tenemos <b>%d</b> usuarios registrados', // # registered users
	'Registered_user_total' => 'Tenemos <b>%d</b> usuario registrado', // # registered users
	'Newest_user' => 'El �ltimo usuario registrado es <b>%s%s%s</b>', // a href, username, /a

	'No_new_posts_last_visit' => 'No hay nuevos mensajes desde su �ltima visita',

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
	'Cat_no_new_posts' => 'No hay nuevos mensajes [Categor�a]',
	'Cat_new_posts' => 'Nuevos mensajes [Categor�a]',
	'Forum_is_locked' => 'Foro bloqueado',

// Login
	'Enter_password' => 'Por favor, ingrese su nombre de usuario y contrase�a para conectarse.',
	'Login' => 'Conectarse',
	'Logout' => 'Desconectarse',
	'Forgotten_password' => 'He olvidado mi contrase�a',
	'AUTOLOGIN' => 'Conectarme autom�ticamente en cada visita',
	'Error_login' => 'Ha ingresado un nombre de usuario incorrecto o deshabilitado, o una contrase�a no v�lida.',

// Index page
	'No_Posts' => 'No hay mensajes',
	'No_forums' => 'No hay foros',

	'Private_Message' => 'Mensaje privado',
	'Private_Messages' => 'Mensajes privados',
	'Who_is_Online' => 'Qui�n est� conectado',

	'Mark_all_forums' => 'Marcar todos los foros como le�dos',
	'Forums_marked_read' => 'Todos los foros han sido marcados como le�dos',

// Viewforum
	'View_forum' => 'Ver foro',

	'Forum_not_exist' => 'El foro que ha seleccionado no existe.',
	'Reached_on_error' => 'Ha llegado a esta p�gina debido a un error.',

	'Display_topics' => 'Mostrar temas anteriores',
	'All_Topics' => 'Todos los temas',

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


	'Mark_all_topics' => 'Marcar todos los temas como le�dos',
	'Topics_marked_read' => 'Todos los temas de este foro han sido marcados como le�dos',

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
	'No_topics_post_one' => 'No hay mensajes en este foro.<br />Pulse en <b>Publicar nuevo tema</b> en esta p�gina para crear uno.',

// Viewtopic
	'View_topic' => 'Ver tema',

	'Guest' => 'Invitado',
	'Post_subject' => '<b>T�tulo del mensaje</b>',
	'View_next_topic' => 'Ver siguiente tema',
	'View_previous_topic' => 'Ver tema anterior',
	'Submit_vote' => 'Enviar voto',
	'View_results' => 'Ver resultados',

	'No_newer_topics' => 'No hay temas m�s nuevos en este foro',
	'No_older_topics' => 'No hay temas anteriores en este foro',
	'Topic_post_not_exist' => 'El tema o mensaje solicitado no existe',
	'No_posts_topic' => 'Este tema no tiene mensajes',

	'Display_posts' => 'Mostrar mensajes anteriores',
	'All_Posts' => 'Todos los mensajes',
	'Newest_First' => 'El m�s reciente primero',
	'Oldest_First' => 'El m�s antiguo primero',

	'Back_to_top' => 'Volver arriba',
	'Back_to_bottom' => 'P�gina inferior',

	'Read_profile' => 'Ver perfil del usuario',
	'Send_email' => 'Enviar correo al usuario',
	'Visit_website' => 'Visitar sitio web del usuario',
	'ICQ_status' => 'Estado ICQ',
	'Edit_delete_post' => 'Editar/Borrar este mensaje',
	'View_IP' => 'Ver direcci�n IP del autor',
	'Delete_post' => 'Borrar este tema',

	'wrote' => 'Escribi�', // proceeds the username and is followed by the quoted text
	'Quote' => 'Cita', // comes before bbcode quote output.
	'Code' => 'C�digo', // comes before bbcode code output.

	'Edited_time_total' => '�ltima edici�n por %s el %s; editado %d vez', // Last edited by me on 12 Oct 2001; edited 1 time in total
	'Edited_times_total' => '�ltima edici�n por %s el %s; editado %d veces', // Last edited by me on 12 Oct 2001; edited 2 times in total

	'Lock_topic' => 'Bloquear este tema',
	'Unlock_topic' => 'Desbloquear este tema',
	'Move_topic' => 'Mover este tema',
	'Delete_topic' => 'Borrar este tema',
	'Split_topic' => 'Separar este tema',

	'Stop_watching_topic' => 'Dejar de observar este tema',
	'Start_watching_topic' => 'Observar este tema por respuestas',
	'No_longer_watching' => 'Ya no se le notificar� de nuevas respuestas a este tema',
	'You_are_watching' => 'A partir de ahora se le notificar� de nuevas respuestas en este tema',

	'Total_votes' => 'Total de votos',

// Posting/Replying (Not private messaging!)
	'Message_body' => 'Cuerpo del mensaje',
	'Topic_review' => 'Revisar el tema',

	'No_post_mode' => 'No se especific� un modo de mensaje', // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

	'Post_a_new_topic' => 'Publicar un nuevo tema',
	'Post_a_reply' => 'Publicar una respuesta',
	'Post_topic_as' => 'Publicar tema como',
	'Edit_Post' => 'Editar mensaje',
	'Options' => 'Opciones',

	'PM_Read' => 'MP le�do',
	'PM_Unread' => 'MP sin leer',
	'PM_Replied' => 'MP respondido',

	'Post_Announcement' => 'Anuncio',
	'New_post_Announcement' => 'Nuevo anuncio',
	'Post_Sticky' => 'Nota',
	'New_post_Sticky' => 'Nueva nota',
	'Post_Normal' => 'Normal',

	'Confirm_delete' => '�Est� seguro de que quiere borrar este mensaje?',
	'Confirm_delete_poll' => '�Est� seguro de que quiere borrar esta encuesta?',

	'Flood_Error' => 'No puede publicar otro tema tan r�pido despu�s del �ltimo. Intente nuevamente en unos momentos.',
	'Empty_subject' => 'Debe especificar un asunto cuando cree un nuevo tema.',
	'Empty_message' => 'Debe escribir un texto al crear un mensaje.',
	'Forum_locked' => 'Este foro est� bloqueado: no se puede publicar, responder, ni editar mensajes en este tema.',
	'Topic_locked' => 'El tema est� bloqueado: no pueden editarse ni agregar mensajes.',
	'No_post_id' => 'Debe elegir un mensaje para modificar',
	'No_topic_id' => 'Debe elegir un tema para agregar una respuesta',
	'No_valid_mode' => 'S�lo puede ingresar, responder, editar o citar mensajes. Por favor, vuelva e int�ntelo nuevamente.',
	'No_such_post' => 'No existe el mensaje. Por favor, vuelva e intente nuevamente.',
	'Edit_own_posts' => 'Lo sentimos, pero s�lo puede editar sus propios mensajes.',
	'Delete_own_posts' => 'Lo sentimos, pero s�lo puede borrar sus propios mensajes.',
	'Cannot_delete_replied' => 'Lo sentimos, pero no puede borrar mensajes que han sido respondidos.',
	'Cannot_delete_poll' => 'Lo sentimos, pero no puede borrar encuestas activas.',
	'Empty_poll_title' => 'Debe crear un t�tulo para su encuesta.',
	'To_few_poll_options' => 'Debe crear al menos 2 opciones en la encuesta.',
	'To_many_poll_options' => 'Ha excedido la cantidad posible de opciones de encuesta.',
	'Post_has_no_poll' => 'Este mensaje no tiene encuesta.',
	'Already_voted' => 'Ya ha votado en esta encuesta.',
	'No_vote_option' => 'Debe elegir una opci�n cuando vota.',

	'Add_poll' => 'Agregar encuesta',
	'Add_poll_explain' => 'Si no desea agregar una encuesta a su tema, deje este campo en blanco.',
	'Poll_question' => 'Pregunta de la encuesta',
	'Poll_option' => 'Opci�n de la encuesta',
	'Add_option' => 'Agregar opci�n',
	'Update' => 'Actualizar',
	'Delete' => 'Borrar',
	'Poll_for' => 'Ejecutar encuesta durante',
	'Days' => 'D�as', // This is used for the Run poll for ... Days + in admin_forums for pruning
	'Poll_for_explain' => '[ Escriba 0 o deje en blanco para que la encuesta nunca termine ]',
	'Delete_poll' => 'Borrar encuesta',

	'Disable_HTML_post' => 'Deshabilitar HTML en este mensaje',
	'Disable_ACRO_AUTO_post' => 'Deshabilitar siglas y autoenlaces en este mensaje',
	'Disable_BBCode_post' => 'Deshabilitar BBCode en este mensaje',
	'Disable_Smilies_post' => 'Deshabilitar emoticonos en este mensaje',

	'HTML_is_ON' => 'HTML est� <u>ON</u>',
	'HTML_is_OFF' => 'HTML est� <u>OFF</u>',
	'BBCode_is_ON' => '%sBBCode%s est� <u>ON</u>', // %s are replaced with URI pointing to FAQ
	'BBCode_is_OFF' => '%sBBCode%s est� <u>OFF</u>',
	'Smilies_are_ON' => 'Emoticonos est�n <u>ON</u>',
	'Smilies_are_OFF' => 'Emoticonos est�n <u>OFF</u>',

	'Attach_signature' => 'Adjuntar firma (la firma se puede cambiar en el perfil)',
	'Notify' => 'Notificarme cuando se publique una respuesta',
	'Delete_post' => 'Borrar este mensaje',

	'Stored' => 'Su mensaje se ha publicado correctamente',
	'Deleted' => 'Su mensaje se ha borrado correctamente',
	'Poll_delete' => 'Su encuesta se ha borrado correctamente',
	'Vote_cast' => 'Su voto se ha publicado',

	'Topic_reply_notification' => 'Notificaci�n de respuesta al tema',

	'Emoticons' => 'Emoticonos',
	'More_emoticons' => 'Ver m�s emoticonos',

// Private Messaging
	'Private_Messaging' => 'Mensajes privados',

	'Login_check_pm' => 'Con�ctese para revisar sus mensajes',
	'New_pms' => 'Tiene %d mensajes nuevos', // You have 2 new messages
	'New_pm' => 'Tiene %d mensaje nuevo', // You have 1 new message
	'No_new_pm' => 'No tiene mensajes privados nuevos',
	'Unread_pms' => 'Tiene %d mensajes privados no le�dos',
	'Unread_pm' => 'Tiene %d mensaje privado no le�do',
	'No_unread_pm' => 'No tiene mensajes no le�dos',
	'You_new_pm' => 'Tiene un nuevo mensaje privado en la bandeja de entrada',
	'You_new_pms' => 'Tiene nuevos mensajes privados en la bandeja de entrada',
	'You_no_new_pm' => 'No tiene mensajes privados nuevos',

	'Unread_message' => 'Mensaje no le�do',
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
	'Cannot_send_privmsg' => 'Lo sentimos, pero el administrador le ha desactivado la opci�n de enviar mensajes privados.',
	'No_to_user' => 'Debe especificar un nombre de usuario a quien mandar este mensaje.',
	'No_such_user' => 'Lo sentimos, pero no existe ese usuario.',

	'Disable_HTML_pm' => 'Deshabilitar HTML en este mensaje',
	'Disable_ACRO_AUTO_pm' => 'Deshabilitar siglas y autoenlaces en este mensaje',
	'Disable_BBCode_pm' => 'Deshabilitar BBCode en este mensaje',
	'Disable_Smilies_pm' => 'Deshabilitar emoticonos en este mensaje',

	'Message_sent' => 'Su mensaje se ha enviado',

	'Click_return_inbox' => 'Pulse %saqu�%s para volver a su bandeja de entrada',
	'Click_return_index' => 'Pulse %saqu�%s para volver al �ndice',

	'Send_a_new_message' => 'Enviar un nuevo mensaje privado',
	'Send_a_reply' => 'Responder a un mensaje privado',
	'Edit_message' => 'Editar mensaje privado',

	'Notification_subject' => '�Ha recibido un nuevo mensaje privado!',

	'Find_username' => 'Buscar un usuario',
	'Find' => 'Buscar',
	'No_match' => 'No se hallaron coincidencias.',

	'No_post_id' => 'No se especific� un ID de mensaje',
	'No_such_folder' => 'La carpeta no existe',
	'No_folder' => 'No se especific� una carpeta',

	'Mark_all' => 'Marcar todos',
	'Unmark_all' => 'Desmarcar todos',

	'Confirm_delete_pm' => '�Est� seguro de que desea borrar este mensaje?',
	'Confirm_delete_pms' => '�Est� seguro de que desea borrar estos mensajes?',

	'Inbox_size' => 'Su bandeja de entrada est� %d%% llena', // eg. Your Inbox is 50% full
	'Sentbox_size' => 'Su bandeja de enviados est� %d%% llena',
	'Savebox_size' => 'Su bandeja de guardados est� %d%% llena',

	'Click_view_privmsg' => 'Pulse %saqu�%s para ver su bandeja de entrada',

// Profiles/Registration
	'Viewing_user_profile' => 'Viendo perfil :: %s', // %s is username
	'About_user' => 'Todo sobre %s', // %s is username
//Start Quick Administrator User Options and Information MOD
	'Quick_admin_options' => 'Administraci�n r�pida de opciones de usuario e informaci�n',
	'Admin_edit_profile' => 'Editar perfil del usuario',
	'Admin_edit_permissions' => 'Editar permisos de usuarios',
	'User_active' => 'El usuario <b>est�</b> activo',
	'User_not_active' => 'El usuario <b>no est�</b> activo',
	'Username_banned' => 'El usuario <b>est�</b> excluido',
	'Username_not_banned' => 'El usuario <b>no est�</b> excluido',
	'User_email_banned' => 'Correo del usuario [ %s ] <b>est�</b> excluido',
	'User_email_not_banned' => 'Correo del usuario <b>no est�</b> excluido',
//End Quick Administrator User Options and Information MOD
	'Preferences' => 'Preferencias',
	'Items_required' => 'Los campos marcados con * son obligatorios a menos que se especifique lo contrario.',
	'Registration_info' => 'Informaci�n de registro',
	'Profile_info' => 'Informaci�n de perfil',
	'Profile_info_warn' => 'Esta informaci�n ser� visible a todos',
	'Avatar_panel' => 'Panel de control de avatar',
	'Avatar_gallery' => 'Galer�a de avatares',

	'Website' => 'Sitio web',
	'Location' => 'Ubicaci�n',
	'Contact' => 'Contactar con',
	'Email_address' => 'Direcci�n de correo',
	'Email' => 'Correo',
	'Send_private_message' => 'Enviar mensaje privado',
	'Hidden_email' => '[ Oculto ]',
	'Search_user_posts' => 'Buscar los mensajes de este usuario',
	'Interests' => 'Intereses',
	'Occupation' => 'Ocupaci�n',
	'Poster_rank' => 'Rango del autor',

	'Total_posts' => 'Cantidad total de mensajes',
	'User_post_pct_stats' => '%.2f%% del total', // 1.25% of total
	'User_post_day_stats' => '%.2f mensajes por d�a', // 1.5 posts per day
	'Search_user_posts' => 'Buscar todos los mensajes de %s', // Find all posts by username
	'Search_user_topics_started' => 'Buscar todos los mensajes que empiezan por %s', // Find all topics started by username

	'No_user_id_specified' => 'Lo sentimos, pero ese usuario no existe.',
	'Wrong_Profile' => 'No puede modificar un perfil que no sea el suyo.',

// Invision View Profile - BEGIN
	'Invision_Active_Stats' => 'Estad�sticas',
	'Invision_Communicate' => 'Comun�quese',
	'Invision_Info' => 'Informaci�n',
	'Invision_Member_Group' => 'Grupos',
	'Invision_Member_Title' => 'Rango',
	'Invision_Most_Active' => 'Mas activo en',
	'Invision_Most_Active_Posts' => '%s mensajes en este foro',
	'Invision_Details' => 'Detalles del autor',
	'Invision_PPD_Stats' => 'Mensajes por d�a',
	'Invision_Signature' => 'Firma',
	'Invision_Website' => 'P�gina web',
	'Invision_Total_Posts' => 'Mensajes acumulados en total',
	'Invision_User_post_pct_stats' => '( %.2f%% del total de los mensajes del foro )',
	'Invision_User_post_day_stats' => '%.2f mensajes por d�a',
	'Invision_Search_user_posts' => 'Buscar todos los mensajes de este usuario',
	'Invision_Posting_details' => 'Detalles del mensaje',
// Invision View Profile - END

	'Only_one_avatar' => 'S�lo se puede especificar un tipo de avatar',
	'File_no_data' => 'El archivo en la URL que ha proporcionado no contiene informaci�n (vac�o)',
	'No_connection_URL' => 'No se pudo conectar con la URL proporcionada',
	'Incomplete_URL' => 'La URL ingresada no es v�lida',
	'Wrong_remote_avatar_format' => 'La URL del avatar remoto no es v�lida',
	'No_send_account_inactive' => 'Lo sentimos, pero actualmente no se le puede enviar su contrase�a ya que su cuenta est� desactivada. Por favor, contacte con el administrador para m�s informaci�n.',

	'Always_smile' => 'Siempre habilitar emoticonos',
	'Always_html' => 'Siempre permitir HTML',
	'Always_bbcode' => 'Siempre permitir BBCode',
	'Always_add_sig' => 'Siempre adjuntar mi firma',
	'Always_notify' => 'Siempre notificarme de respuestas',
	'Always_notify_explain' => 'Env�a un e-mail cuando alguien responde a un tema en que ha participado. Esta opci�n puede ser cambiada individualmente en cada mensaje desde la opci�n correspondiente en el formulario de publicaci�n del mensaje.',

	'Board_style' => 'Estilo del foro',
	'Board_lang' => 'Idioma del foro',
	'No_themes' => 'No hay estilos disponibles',
	'Timezone' => 'Zona horaria',
	'Date_format' => 'Formato de fecha',
	'Date_format_explain' => 'La sintaxis es id�ntica a la funci�n de PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> function.',
	'Signature' => 'Firma',
	'Signature_explain' => 'Este es un bloque de texto que se puede agregar a los mensajes que publique. Hay un l�mite de %d caracteres',
	'Public_view_email' => 'Mostrar siempre mi direcci�n de correo',

	'Current_password' => 'Contrase�a actual',
	'New_password' => 'Nueva contrase�a',
	'Confirm_password' => 'Confirmar nueva contrase�a',
	'Confirm_password_explain' => 'Debe confirmar su contrase�a actual si quiere cambiar �sta o e-mail',
	'password_if_changed' => 'Ingrese su contrase�a s�lo si desea cambiarla',
	'password_confirm_if_changed' => 'Confirme su contrase�a s�lo si est� cambi�ndola',

	'Avatar' => 'Avatar',
	'Avatar_explain' => 'Muestra una peque�a imagen bajo su nombre y rango en cada mensaje. S�lo puede mostrarse una imagen, y ni su ancho ni su alto puede superar los %d p�xeles. El tama�o del archivo no puede exceder de los %d KB.',
	'Upload_Avatar_file' => 'Subir un avatar desde su PC',
	'Upload_Avatar_URL' => 'Subir un avatar desde una URL',
	'Upload_Avatar_URL_explain' => 'Ingrese la URL del avatar, �ste ser� copiado a este sitio.',
	'Pick_local_Avatar' => 'Elegir un avatar de la galer�a',
	'Link_remote_Avatar' => 'Vincular a un avatar fuera de este sitio',
	'Link_remote_Avatar_explain' => 'Ingrese la URL donde se halla el avatar.',
	'Avatar_URL' => 'URL de la imagen del avatar',
	'Select_from_gallery' => 'Elegir avatar de la galer�a',
	'View_avatar_gallery' => 'Ver galer�a',

	'Select_avatar' => 'Elegir avatar',
	'Return_profile' => 'Cancelar avatar',
	'Select_category' => 'Elegir categor�a',

	'Delete_Image' => 'Borrar imagen',
	'Current_Image' => 'Imagen actual',

	'Notify_on_privmsg' => 'Notificar de nuevos mensajes privados',
	'Popup_on_privmsg' => 'Desplegar nueva ventana cuando haya mensaje privado nuevo',
	'Popup_on_privmsg_explain' => 'Algunas plantillas pueden tratar de abrir una ventana nueva para informarle de un nuevo mensaje.',
	'Hide_user' => 'Ocultar mi estado de conexi�n (conectado/oculto)',

	'Profile_updated' => 'Su perfil ha sido actualizado',
	'Profile_updated_inactive' => 'Su perfil ha sido actualizado. Sin embargo ha cambiado informaci�n vital y su cuenta est� ahora desactivada. Revise su correo para saber c�mo reactivarla o, si se necesita que un administrador la reactive, espere y ser� notificado.',

	'Password_mismatch' => 'Las contrase�as ingresadas no coinciden.',
	'Current_password_mismatch' => 'La contrase�a que ha ingresado no coincide con la que est� almacenada en la base de datos.',
	'Password_long' => 'Su contrase�a no puede exceder los 32 caracteres.',
	'Too_many_registers' => 'Usted ha efectuado demasiados intentos de registro. Por favor, intentelo de nuevo mas tarde.',
	'Username_taken' => 'Lo sentimos, pero ese nombre de usuario ya est� en uso.',
	'Username_invalid' => 'Lo sentimos, pero ese nombre de usuario contiene caracteres no v�lidos.',
	'Username_disallowed' => 'Lo sentimos, pero ese nombre de usuario ha sido prohibido.',
	'Email_taken' => 'Lo sentimos, pero esa direcci�n de correo ya se encuentra registrada por otro usuario.',
	'Email_banned' => 'Lo sentimos, pero esa direcci�n de correo ha sido excluida.',
	'Email_invalid' => 'Lo sentimos, pero esa direcci�n de correo es inv�lida.',
	'Signature_too_long' => 'Su firma es muy larga.',
	'Fields_empty' => 'Debe completar los campos requeridos.',
	'Avatar_filetype' => 'El tipo de imagen del avatar debe ser .jpg, .gif o .png',
	'Avatar_filesize' => 'El tama�o de la imagen del avatar debe ser menor a %d KB', // The avatar image file size must be less than 6 KB
	'Avatar_imagesize' => 'La imagen del avatar debe tener menos de %d p�xeles de ancho y %d p�xeles de alto.',

	'Welcome_subject' => 'Bienvenido al foro de %s', // Welcome to my.com forums
	'New_account_subject' => 'Nueva cuenta de usuario',
	'Account_activated_subject' => 'Cuenta activada',

	'Account_added' => 'Gracias por registrarse. Su cuenta ha sido creada. Ahora puede conectarse con su nombre de usuario y contrase�a',
	'Account_inactive' => 'Su cuenta fue creada. Sin embargo, este foro requiere que active su cuenta. Una clave de activaci�n ha sido enviada a su correo. Rev�selo para m�s informaci�n sobre c�mo completar la activaci�n.',
	'Account_inactive_admin' => 'Su cuenta fue creada. Sin embargo, este foro requiere que un administrador active su cuenta. Se ha enviado un correo para notificar al administrador. Se le enviar� un correo cuando �ste la active.',
	'Account_active' => 'Su cuenta ha sido activada. Gracias por registrarse.',
	'Account_active_admin' => 'La cuenta ha sido activada.',
	'Reactivate' => '�Reactive su cuenta!',
	'Already_activated' => 'Ya ha activado su cuenta.',
	'COPPA' => 'Su cuenta ha sido creada, pero debe ser aprobada. Por favor, revise su correo para m�s detalles.',

	'Registration' => 'Condiciones de registro',
	'Reg_agreement' => 'Si bien los administradores y moderadores de este foro tratar�n de eliminar o modificar cualquier material cuestionable lo m�s r�pido que puedan, es imposible revisar todos los mensajes. Por lo tanto, usted es consciente de que los mensajes en este foro son las opiniones y expresiones de sus autores y no de los administradores y moderadores (con excepci�n de los mensajes de estas personas).<br /><br />Usted est� de acuerdo con no enviar mensajes que puedan ser abusivos, obscenos, vulgares, amenazantes, de �ndole sexual, o cualquier otro material que de alguna forma viole leyes vigentes en su territorio. Si publicase material de esa �ndole, su cuenta de acceso al foro ser� cancelada y su proveedor de acceso a internet ser� informado. La direcci�n IP de todos los mensajes es guardada para ayudar a cumplir estas normas. Usted est� de acuerdo en que los administradores y moderadores de este foro tienen el derecho de modificar, cerrar, bloquear, mover y/o borrar cualquier tema o mensaje seg�n ellos lo consideren necesario. Como usuario, usted permite que toda la informaci�n ingresada se almacene en una base de datos. Si bien esta informaci�n no ser� entregada ni distribuida a terceros, los administradores y moderadores no son responsables por cualquier mensaje no convencional que exponga esa informaci�n, y tampoco pueden responsabilizarse por intentos de hackers que puedan llevar a que esta informaci�n confidencial sea descubierta.<br /><br />Este foro usa "cookies" para almacenar informaci�n en su ordenador. No contienen ninguno de sus datos personales, s�lo sirven para mejorar su interfaz. La direcci�n de correo s�lo se usa para confirmar sus detalles de registro y contrase�a (y para enviarle una nueva en caso de que la olvide).<br /><br />Pulsando en el enlace para registrarse, usted muestra su conformidad con estos t�rminos y condiciones.',

	'Agreement' => 'Acuerdo',
	'Agree_under_13' => 'Estoy de acuerdo con estos t�rminos y condiciones y tengo menos de 13 a�os de edad',
	'Agree_over_13' => 'Estoy de acuerdo con estos t�rminos y condiciones y tengo m�s de o exactamente 13 a�os de edad',
	'Agree_not' => 'No estoy de acuerdo con estos t�rminos y condiciones',
	'Agree_checkbox' => 'Acepto espec�ficamente estos t�rminos',
	'Agree_checkbox_Error' => 'Necesita marcar el recuadro "ACEPTO" en la parte inferior de la p�gina para registrarse!',

	'Wrong_activation' => 'La clave de activaci�n no coincide con ninguna cuenta de la base de datos.',
	'Send_password' => 'Env�enme una nueva contrase�a',
	'Password_updated' => 'Se ha creado una nueva contrase�a; por favor, revise su correo para m�s detalles sobre c�mo activarla.',
	'No_email_match' => 'La direcci�n de e-mail que ha ingresado no coincide con ninguna cuenta de usuario de nuestra base de datos.',
	'New_password_activation' => 'Activaci�n de nueva contrase�a',
	'Password_activated' => 'Su cuenta ha sido reactivada. Para conectarse, por favor, use la contrase�a provista en el correo que ha recibido.',

	'Send_email_msg' => 'Enviar un e-mail',
	'No_user_specified' => 'No ha especificado un usuario',
	'User_prevent_email' => 'Este usuario no desea recibir correo. Trate de enviarle un mensaje privado.',
	'User_not_exist' => 'El usuario especificado no existe',
	'CC_email' => 'Enviar una copia de este correo a usted mismo',
	'Email_message_desc' => 'Este mensaje se enviar� como texto simple, as� que no incluya c�digo HTML o BBCode. La respuesta para este mensaje llegar� a su direcci�n de e-mail registrado.',
	'Flood_email_limit' => 'No puede enviar otro correo en este momento. Intente de nuevo m�s tarde.',
	'Recipient' => 'Destinatario',
	'Email_sent' => 'El correo ha sido enviado.',
	'Send_Email' => 'Enviar correo',
	'Empty_sender_email' => 'Debe especificar un remitente en el e-mail.',
	'Empty_subject_email' => 'Debe especificar un asunto para el correo.',
	'Empty_message_email' => 'Debe ingresar un mensaje para que el correo pueda ser enviado.',


// Visual confirmation system strings
	'Confirm_code_wrong' => 'El c�digo de confirmaci�n que ha ingresado es incorrecto.',
//	'Too_many_registers' => 'Ha excedido el n�mero de intentos de registro. Int�ntelo m�s tarde.',
	'Confirm_code_impaired' => 'Aseg�rese de escribir bien su direcci�n de correo. El correo de activaci�n de su cuenta de usuario (para comprobar que el correo que pone es realmente suyo) llegar� ah�. Tan s�lo suele tardar en llegar unos minutos desde que se registra. Puede que est� en la carpeta de <b>"Correo no deseado"</b>, sobre todo en cuentas tipo <b>Hotmail</b> y <b>MSN</b>. Verif�quelo y active su cuenta.<br /> Si tiene problemas para leer este c�digo, contacte con el %sAdministrador%s para asistencia.',
	'Confirm_code' => 'C�digo de confirmaci�n',
	'Confirm_code_explain' => 'Ingrese el c�digo exactamente como lo ve. El c�digo distingue entre may�sculas y min�sculas; los ceros tienen una l�nea diagonal que los cruza.',



// Members list
	'Select_sort_method' => 'Elija un m�todo para ordenar',
	'Sort' => 'Ordenar',
	'Sort_Top_Ten' => 'Los 10 usuarios que m�s escriben',
	'Sort_Joined' => 'Fecha de registro',
	'Sort_Username' => 'Nombre',
	'Sort_Location' => 'Ubicaci�n',
	'Sort_Posts' => 'Cantidad de mensajes',
	'Sort_Email' => 'e-mail',
	'Sort_Website' => 'Sitio web',
	'Sort_Ascending' => 'Ascendente',
	'Sort_Descending' => 'Descendente',
	'Order' => 'Orden',


// Group control panel
	'Group_Control_Panel' => 'Panel de control de grupos',
	'Group_member_details' => 'Detalles de usuarios del grupo',
	'Group_member_join' => 'Unirse a un grupo',

	'Group_Information' => 'Informaci�n de grupo',
	'Group_name' => 'Nombre del grupo',
	'Group_description' => 'Descripci�n del grupo',
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
	'Group_hidden_members' => 'Este grupo est� oculto; no puede ver sus componentes',
	'No_pending_group_members' => 'Este grupo no tiene usuarios pendientes',
	'Group_joined' => 'Se ha suscrito correctamente a este grupo.<br />Ser� notificado cuando su suscripci�n sea aprobada por el moderador del grupo.',
	'Group_request' => 'Se ha realizado una petici�n para unirse al grupo',
	'Group_approved' => 'Su petici�n ha sido aprobada.',
	'Group_added' => 'Ha sido agregado a este grupo.',
	'Already_member_group' => 'Usted ya es miembro de este grupo',
	'User_is_member_group' => 'El usuario ya es miembro de este grupo',
	'Group_type_updated' => 'Se ha actualizado correctamente el tipo de grupo',
	'Could_not_add_user' => 'El usuario seleccionado no existe',
	'Could_not_anon_user' => 'No puede unirse an�nimamente a un grupo',
	'Confirm_unsub' => '�Est� seguro de que quiere cancelar su suscripci�n a este grupo?',
	'Confirm_unsub_pending' => 'Su suscripci�n a este grupo no ha sido aprobada todav�a. �Est� seguro de que desea cancelar la suscripci�n?',
	'Unsub_success' => 'Su suscripci�n a este grupo ha sido cancelada',
	'Approve_selected' => 'Aprobar los seleccionados',
	'Deny_selected' => 'Denegar los seleccionados',
	'Not_logged_in' => 'Debe estar conectado para unirse a un grupo',
	'Remove_selected' => 'Borrar los seleccionados',
	'Add_member' => 'Agregar usuario',
	'Not_group_moderator' => 'Usted no es el moderador de este grupo, por lo que no puede ejecutar esta acci�n.',
	'Login_to_join' => 'Con�ctese para administrar la pertenencia al grupo',
	'This_open_group' => 'Este es un grupo abierto: pulse aqu� para pedir unirse',
	'This_closed_group' => 'Este es un grupo cerrado: no se aceptan m�s usuarios',
	'This_hidden_group' => 'Este es un grupo oculto: no se permite agregar autom�ticamente usuarios',
	'Member_this_group' => 'Usted es miembro de este grupo',
	'Pending_this_group' => 'Su pertenencia a este grupo est� pendiente',
	'Are_group_moderator' => 'Usted es el moderador de este grupo',
	'None' => 'Ninguno',
	'Subscribe' => 'Suscribirse',
	'Unsubscribe' => 'Cancelar suscripci�n',
	'View_Information' => 'Ver informaci�n',

// Search
	'Search_query' => 'B�squeda',
	'Search_options' => 'Opciones de b�squeda',

	'Search_keywords' => 'Buscar por palabras clave',
	'Search_keywords_explain' => 'Puede usar <u>AND</u> para definir palabras que deben estar en los resultados, <u>OR</u> para definir palabras que podr�an estar en los resultados, y <u>NOT</u> para definir palabras que no deber�an estar en los resultados. Use * como comod�n para buscar partes de una palabra',
	'Search_author' => 'Buscar por autor',
	'Search_author_explain' => 'Use * como comod�n para buscar partes de una palabra',
	'Search_author_topic_starter' => 'Buscar solo temas empezados por este autor',

	'Search_for_any' => 'Buscar cualquiera de los t�rminos o usar la b�squeda tal cual se escribi�',
	'Search_for_all' => 'Buscar todas las palabras',
	'Search_title_msg' => 'Buscar en t�tulos y texto de los mensajes',
	'Search_title_only' => 'Buscar solo el t�tulo del tema',
	'Search_msg_only' => 'Buscar s�lo en el texto de los mensajes',

	'Return_first' => 'Mostrar los primeros', // followed by xxx characters in a select box
	'characters_posts' => 'Caracteres de los mensajes',

	'Search_previous' => 'Buscar los anteriores', // followed by days, weeks, months, year, all in a select box

	'Sort_by' => 'Ordenar por',
	'Sort_Time' => 'Fecha de publicaci�n',
	'Sort_Post_Subject' => 'Asunto del mensaje',
	'Sort_Topic_Title' => 'T�tulo del tema',
	'Sort_Author' => 'Autor',
	'Sort_Forum' => 'Foro',

	'Display_results' => 'Mostrar resultados como',
	'All_available' => 'Todos los disponibles',
	'No_searchable_forums' => 'No tiene permisos para realizar b�squedas en este foro.',

	'No_search_match' => 'No hay temas ni mensajes que coincidan con su criterio de b�squeda',
	'Found_search_match' => 'Se encontr� %d resultado', // eg. Search found 1 match
	'Found_search_matches' => 'Se encontraron %d resultados', // eg. Search found 24 matches

	'Close_window' => 'Cerrar ventana',

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
	'Sorry_auth_announce' => 'Lo sentimos, pero s�lo %s pueden publicar anuncios en este foro.',
	'Sorry_auth_sticky' => 'Lo sentimos, pero s�lo %s pueden publicar mensajes permanentes en este foro.',
	'Sorry_auth_read' => 'Lo sentimos, pero s�lo %s pueden leer temas en este foro.',
	'Sorry_auth_post' => 'Lo sentimos, pero s�lo %s pueden publicar temas en este foro.',
	'Sorry_auth_reply' => 'Lo sentimos, pero s�lo %s pueden responder mensajes en este foro.',
	'Sorry_auth_edit' => 'Lo sentimos, pero s�lo %s pueden modificar mensajes en este foro.',
	'Sorry_auth_delete' => 'Lo sentimos, pero s�lo %s pueden borrar mensajes en este foro.',
	'Sorry_auth_vote' => 'Lo sentimos, pero s�lo %s pueden votar en encuestas en este foro.',

// These replace the %s in the above strings
	'Auth_Anonymous_Users' => '<b>Usuarios invitados</b>',
	'Auth_Registered_Users' => '<b>Usuarios registrados</b>',
	'Auth_Self_Users' => '<b>Usuarios espec�ficos</b>',
	'Auth_Users_granted_access' => '<b>Usuarios con permisos especiales</b>',
	'Auth_Moderators' => '<b>Moderadores</b>',
	'Auth_Administrators' => '<b>Administradores</b>',

	'Not_Moderator' => 'Usted no es moderador de este foro.',
	'Not_Authorized' => 'No autorizado',

	'You_been_banned' => 'Se le ha denegado el acceso a este foro.<br />Por favor, contacte con el administrador o un moderador para m�s informaci�n.',

// Viewonline
	'Reg_users_zero_online' => 'Hay 0 usuarios registrados y ', // There are 5 Registered and
	'Reg_users_online' => 'Hay %d usuarios registrados y ', // There are 5 Registered and
	'Reg_user_online' => 'Hay %d usuario registrado y ', // There is 1 Registered and
	'Hidden_users_zero_online' => '0 ocultos conectados', // 6 Hidden users online
	'Hidden_users_online' => '%d ocultos conectados', // 6 Hidden users online
	'Hidden_user_online' => '%d oculto conectado', // 6 Hidden users online
	'Guest_users_online' => 'Hay %d usuarios an�nimos conectados', // There are 10 Guest users online
	'Guest_users_zero_online' => 'Hay 0 usuarios an�nimos conectados', // There are 10 Guest users online
	'Guest_user_online' => 'Hay %d usuario an�nimo conectado', // There is 1 Guest user online
	'No_users_browsing' => 'No hay usuarios viendo el foro en este momento',

	'Online_explain' => 'Estos datos est�n basados en la actividad de usuarios de los �ltimos 5 minutos',
	'Online_today' => 'Estos datos est�n basados en la actividad de usuarios en las �ltimas 24 horas',

	'Forum_Location' => 'Ubicaci�n en el foro',
	'Last_updated' => '�ltima actualizaci�n',

	'Forum_index' => '�ndice del foro',
	'Portal' => 'Portal',
	'Logging_on' => 'Conect�ndose',
	'Posting_message' => 'Publicando un mensaje',
	'Searching_forums' => 'Buscando en los foros',
	'Viewing_profile' => 'Viendo perfil',
	'Viewing_HACKSLIST' => 'Viendo la lista de MODs',
	'Viewing_online' => 'Viendo qui�n est� conectado',
	'Viewing_member_list' => 'Viendo la lista de usuarios',
	'Viewing_priv_msgs' => 'Viendo mensajes privados',
	'Viewing_FAQ' => 'Viendo las preguntas frecuentes',
	'Viewing_KB' => 'Viendo biblioteca',
	'Viewing_RSS' => 'RSS',


// Moderator Control Panel
	'Mod_CP' => 'Panel de control del moderador',
	'Mod_CP_explain' => 'Usando el formulario siguiente puede ejecutar operaciones masivas de moderaci�n en este foro. Puede bloquear, desbloquear, mover o eliminar cualquier n�mero de temas.',

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
	'No_Topics_Moved' => 'No se ha movido ning�n tema.',

	'Confirm_delete_topic' => '�Est� seguro de que quiere borrar el/los tema(s) seleccionado(s)?',
	'Confirm_lock_topic' => '�Est� seguro de que quiere cerrar el/los tema(s) seleccionado(s)?',
	'Confirm_unlock_topic' => '�Est� seguro de que quiere desbloquear el/los tema(s) seleccionado(s)?',
	'Confirm_move_topic' => '�Est� seguro de que quiere mover el/los tema(s) seleccionado(s)?',

	'Move_to_forum' => 'Mover al foro',
	'Leave_shadow_topic' => 'Dejar enlace de referencia sombreado en el foro anterior.',

	'Split_Topic' => 'Panel de control para divisi�n de temas',
	'Split_Topic_explain' => 'Usando el siguiente formulario puede separar un tema en dos, ya sea seleccionando los mensajes individualmente o separ�ndolos a partir de determinado mensaje',
	'Split_title' => 'T�tulo del nuevo tema',
	'Split_forum' => 'Foro donde colocar el tema nuevo',
	'Split_posts' => 'Separar los mensajes seleccionados',
	'Split_after' => 'Separar a partir del mensaje seleccionado',
	'Topic_split' => 'El tema seleccionado ha sido separado correctamente',

	'Too_many_error' => 'Ha seleccionado m�s de un mensaje. S�lo puede seleccionar un mensaje para separar el tema a partir de �l',

	'None_selected' => 'No ha seleccionado ning�n tema donde aplicar esta acci�n. Por favor, vuelva atr�s y seleccione por lo menos uno.',
	'New_forum' => 'Nuevo foro',

	'This_posts_IP' => 'Direcci�n IP para este mensaje',
	'Other_IP_this_user' => 'Otras direcciones IP que este usuario ha usado para crear mensajes',
	'Users_this_IP' => 'Usuarios publicando mensajes desde esta direcci�n IP',
	'IP_info' => 'Informaci�n IP',
	'Lookup_IP' => 'Buscar direcci�n IP',

// Errors (not related to a specific failure on a page)
	'Information' => 'Informaci�n',
	'Critical_Information' => 'Informaci�n cr�tica',

	'General_Error' => 'Error general',
	'Critical_Error' => 'Error cr�tico',
	'An_error_occured' => 'Ha ocurrido un error',
	'A_critical_error' => 'Ha ocurrido un error cr�tico',
	'Admin_reauthenticate' => 'Para administrar el foro, debe identificarse de nuevo.',

	'Topic_description' => 'Descripci�n de su tema',
// 'Description' => 'Descripci�n del tema',

	'Guestbook' => 'Libro de visitas',
	'Viewing_guestbook' => 'Leer libro de visitas',

	'Click_return_preferences' => 'Pulse %saqu�%s para volver a preferencias',

	'Warn_new_post' => 'Hay por lo menos una nueva contestaci�n en este tema. Por favor, repase las nuevas respuestas en la revisi�n del tema y vuelva a enviar su mensaje.',

	'Today_at' => '<b class="date-today">Hoy</b> a las ',
	'Yesterday_at' => '<b class="date-yesterday">Ayer</b> a las ',
	'TODAY' => '<b class="date-today">Hoy</b>',
	'YESTERDAY' => '<b class="date-yesterday">Ayer</b>',

// Birthday - BEGIN
	'Birthday' => 'Fecha de nacimiento',
	'No_birthday_specify' => 'No especificada',
	'Age' => 'Edad',
	'Wrong_birthday_format' => 'El formato de la fecha de nacimiento es incorrecto.',
	'Birthday_to_high' => 'Lo sentimos, pero no admitimos  usuarios mayores de %d a�os',
	'Birthday_require' => 'La fecha de nacimiento es un dato obligatorio.',
	'Birthday_to_low' => 'Lo sentimos, pero no se admiten usuarios menores de %d a�os',
	'Submit_date_format' => 'd-m-Y', //php date() format - Note: ONLY d, m and Y may be used and SHALL ALL be used (different seperators are accepted)
	'Birthday_greeting_today' => 'Queremos desearle un feliz %s cumplea�os.<br /><br />&nbsp;',//%s is substituted with the users age
	'Birthday_greeting_prev' => 'Con un poco de retraso, ya que cumpliste %s a�os en %s, te deseamos un feliz cumplea�os.<br /><br />&nbsp;',//%s is substituted with the users age, and birthday 
	'Greeting_Messaging' => 'Felicidades',
	'Birthday_today' => 'Hoy es el cumplea�os de: ',
	'Birthday_week' => 'En los pr�ximos %d d�as, cumplen a�os los siguientes usuarios:',
	'Nobirthday_week' => 'No hay usuarios que cumplan a�os en los pr�ximos %d d�as', // %d is substitude with the number of days
	'Nobirthday_today' => 'Ning�n usuario cumple a�os hoy',
	'Year' => 'A�o',
	'Month' => 'Mes',
	'Day' => 'D�a',
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
	'Topic_time' => '�ltima vez',
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
	'Click_return_viewtopic' => 'Pulse %saqu�%s para volver al tema',
/*
	'Rules_ban_can' => '<b>Puede</b> expulsar a otros usuarios',
	'Rules_greencard_can' => '<b>Puede</b> quitar Tarjetas verdes',
	'Rules_bluecard_can' => '<b>Puede</b> Reportar mensajes a los Moderadores',
*/
	'Rules_ban_can' => '<b>Puede</b> expulsar a otros usuarios',
	'Rules_greencard_can' => '<b>Puede</b> quitar tarjetas verdes',
	'Rules_bluecard_can' => '<b>Puede</b> reportar mensajes a los moderadores',
	'user_no_email' => 'El usuario no tiene correo, por lo tanto, no le ha llegado  ninguna notificacion acerca de esta acci�n. Puede enviarle un MP',
	'user_already_banned' => 'El usuario hab�a sido baneado con anterioridad',
	'Ban_no_admin' =>'El usuario es un administrador, por lo tanto no puede ser advertido o expulsado',
	'Give_b_card' => 'Enviar tarjeta azul (informar a los moderadores de este foro)',
	'Clear_b_card' => 'El mensaje ya tiene %d tarjetas azules. Si presiona aqu� se borraran todas',
	'No_moderators' => 'El foro no tiene moderadores, no se ha podido notificar',
	'Post_repported' => 'El mensaje ha sido notificado a %d moderadores',
	'Post_repported_1' => 'El mensaje ha sido notificado al moderador',
	'Post_repport' => 'T�tulo de la notificaci�n:', //Subject in email notification
	'Post_reset' => 'Se han reiniciado las tarjetas azules en este mensaje',
	'Search_only_bluecards' => 'B�squeda solamente entre los mensajes con las tarjetas azules',
	'Send_message' => 'Pulse %saqu�%s para escribir un mensaje a los moderadores o <br />',
	'Send_PM_user' => 'Pulse %saqu�%s para escribir un MP a este usuario o',
	'Link_to_post' => 'Pulse %saqu�%s para volver al mensaje
--------------------------------

',
	'Post_a_report' => 'Mensaje a reportar',
	'Report_stored' => 'Su notificaci�n se ha incorporado correctamente',
	'Send_report' => 'Pulse %saqu�%s para ir de nuevo al mensaje original',
	'Red_card_warning' => 'Est� a punto de aplicar una tarjeta roja al usuario: %s con ello prohibir� al usuario la entrada al foro. �Est� seguro de querer expulsar al usuario?',
	'Yellow_card_warning' => 'Est� a punto de aplicar una tarjeta amarilla al usuario: %s con ello se enviar� una advertencia al usuario. �Est� seguro de querer enviar una advertencia al usuario?',
	'Green_card_warning' => 'Est� a punto de aplicar una tarjeta verde al usuario: %s con ello readmitir� a este usuario en el foro. �Est� seguro de querer readmitirle?',
	'Blue_card_warning' => 'Est� a punto de aplicar una tarjeta azul al mensaje, con lo que los moderadores del foro recibir�n una notificaci�n sobre �l. �Est� seguro de querer hacerlo?',
	'Clear_blue_card_warning' => 'Est� a punto de reajustar el contador de tarjetas azules para este mensaje. �Quiere continuar? ',
	'Warnings' => 'Avisos : %d', //shown beside users post, if any warnings given to the user
	'Banned' => 'Baneado',//shown beside users post, if user are banned

// Last visit - BEGIN
	'Last_logon' => '�ltima visita',
	'Hidde_last_logon' => 'Oculto',
	'Never_last_logon' => 'Nunca',
	'Users_today_zero_total' => 'Ning�n usuarios ha visitado este sitio hoy: ',
	'Users_today_total' => 'En total, <b>%d</b> usuarios han visitado este sitio hoy: ',
	'User_today_total' => 'En total, <b>%d</b> usuario ha visitado este sitio hoy: ',
	'Users_lasthour_explain' => ', %d en la �ltima hora.',
	'Users_lasthour_none_explain' => '', //showen of none have visited the last hour, fill if you like

	'Years' => 'A�os',
	'Year' => 'A�o',
	'Weeks' => 'Semanas',
	'Week' => 'Semana',
	'Day' => 'D�a',
	'Total_online_time' => 'Duraci�n total de conexi�n',
	'Last_online_time' => '�ltima duraci�n de conexi�n',
	'Number_of_visit' => 'N�mero de visitas',
	'Number_of_pages' => 'N�mero de hits en p�ginas',
// Last visit - END

	'total_site_hits_key' => '%V% p�ginas vistas desde %D%.',

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
	'sig_description' => 'Editar firma (<b>previsualizaci�n incluida</b>)',
	'sig_edit' => 'Editar firma',
	'sig_current' => 'Firma actual',
	'sig_none' => 'No hay firma disponible',
	'sig_save' => 'Guardar',
	'sig_save_message' => 'Firma guardada correctamente',

	'Statistics' => 'Estad�sticas',

// Start add - Global announcement MOD
	'Globalannounce' =>'Anuncio global',
	'Globalannounce' =>'Nuevo anuncio global',
// End add - Global announcement MOD
	'Global_Announcements' => 'anuncio global',
	'Announcements' => 'Anuncios',
	'Sticky_Topics' => 'Notas importantes',
	'Announcements_and_Sticky' => 'Anuncios y notas importantes',
// db_update generator
	'Db_update_generator' => 'Generador de actualizaci�n de BD',
	'Instructions' => 'Instrucciones',
	'SQL_instructions' => 'Este peque�o programa crear� un archivo PHP para poder actualizar su base de datos desde su navegador. Hay algunas cosas que debe cuidar al insertar una consulta SQL en el �rea de texto de abajo.<br />Antes de nada, aseg�rese de que la consulta SQL termina con un punto y coma (;), pues si no, el archivo creado no ser� apto para su uso. Despu�s, aseg�rese de que las tablas tengan el prefijo phpbb_. De todos modos, esto ser� sustituido autom�ticamente por un peque�o pedazo de c�digo que le permitir� utilizar el archivo db_update.php en cualquier foro sin importar el prefijo de la tabla.',
	'Enter_SQL' => 'Introduzca la consulta SQL',
	'Enter_SQL_explain' => 'MySQL es una popular base de datos reconocida mundialmente',
	'Output_SQL' => 'Salida SQL',
	'Output_SQL_explain' => 'Copie y pegue el texto en el �rea de texto. Guarde el archivo resultante como <u>db_update.php</u> y s�balo a au servidor. Ejecute el archivo desde su navegador.<br /><br />O, si lo prefiere, pulse el bot�n de descarga para descargar el archivo directamente a su ordenador (recomendado).',
	'Download' => 'Descargar consulta',

	'TOP_POSTERS' => 'Los que mas escriben',

// TELL A FRIEND
	'TELL_FRIEND' => 'Correo a un amigo',
	'TELL_FRIEND_SENDER_USER' => 'Su nombre:',
	'TELL_FRIEND_SENDER_EMAIL' => 'Su correo:',
	'TELL_FRIEND_RECEIVER_USER' => 'Nombre de su amigo:',
	'TELL_FRIEND_RECEIVER_EMAIL' => 'Correo de su amigo:',
	'TELL_FRIEND_WRONG_EMAIL' => 'No ha introducido una direcci�n de e-mail v�lida.',
	'TELL_FRIEND_MSG' => 'Su mensaje:',
	'TELL_FRIEND_TITLE' => 'Correo a un amigo',
	'TELL_FRIEND_BODY' => 'Hola,\n. Acabo de leer este tema &raquo;{TOPIC}&laquo; en los foros de {SITENAME} y creo que podria interesarte. Aqu� tienes este enlace: {LINK}\n\nVe y lee, y si quieres responder puedes registrarte para tener tu propia cuenta.',

// Begin Thanks Mod
	'thankful' => 'Gente agradecida',
	'thanks_to' => 'Gracias por el tema tan �til,',
	'thanks_end' => ':',
	'thanks_alt' => 'Mensaje de gracias',
	'thanks_add_rate' => 'Gracias al autor por este tema tan �til',
	'thanked_before' => 'Ya ha dado las gracias en este tema',
	'thanks_add' => 'Se han dado sus gracias',
	'thanks_not_logged' => 'Necesita identificarse para agradecer a alguien un mensaje o tema',
	'thanks2' => 'Gracias, gracias, gracias...<br />',
// End Thanks Mod

//Begin Lo-Fi MOD
	'Lofi' => 'Versi�n reducida del foro - (Lo-Fi)',
// 'Full_Version' => 'Versi�n Completa',
	'Full_Version' => 'Est� utilizando la versi�n (Lo-Fi). Para ver la versi�n completa del foro, haga clic aqu�.',
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
	'quick_lofi' => 'Respuesta r�pida',
	'new_pm_lofi' => 'Enviar un MP',
//End Lo-Fi Mod

// Retroactive Signature MOD
	'Retro_sig' => 'Adjuntar mi firma a mis mensajes anteriores',
	'Retro_sig_explain' => 'Si a�ade o edita su firma, phpBB normalmente s�lo la aplica a los futuros mensajes',
	'Retro_sig_checkbox' => 'Marcar aqu� para adjuntar su firma a los mensajes anteriores',
// End Retro Sig MOD

	'legend' => 'Leyenda: ',
	'users' => 'Usuarios',
//added to autogroup mod
	'No_more' => 'no se aceptan m�s usuarios',
	'No_add_allowed' => 'el auto ingreso de usuario no esta permitido',
	'Join_auto' => 'Usted puede ingresar en este grupo, pues su cantidad de mensajes est� dentro del criterio de este grupo',

// merge topics
	'Merge' => 'Fusionar',
	'Merge_topic' => 'Fusionar este tema',
	'Topics_Merged' => 'Los temas seleccionados han sido fusionados.',
	'No_Topics_Merged' => 'No se han fusionado temas.',
	'Confirm_merge_topic' => '�Esta seguro de que quiere fusionar los temas seleccionados?',

	'Downloads' => 'Descargas',

// Start add - Bin Mod
	'Move_bin' => 'Mover este tema a la papelera',
	'Topics_Moved_bin' => 'Los temas seleccionados se han movido a la papelera.',
	'Bin_disabled' => 'La papelera ha sido deshabilitada',
	'Bin_recycle' => 'Reciclar',
// End add - Bin Mod
	'Recent_topics' => 'Temas recientes', // Recent Topics

	'Topics_Title_Edited' => 'El t�tulo seleccionado del tema se ha editado.',
	'Edit_title' => 'Edici�n de t�tulo',
	'PM' => 'MP',

// Start Advanced IP Tools Pack MOD
	'Moderator_ip_information' => 'La informaci�n sobre direcci�n IP es para moderadores',
	'Registered_ip_address' => 'Direcci�n IP registrada',
	'Registered_hostname' => 'Nombre de dominio registrado',
	'Other_registered_ips' => 'Otros usuarios registrados desde %s', //%s is the IP address
	'Other_posted_ips' => 'Direcciones IP desde donde este usuario ha escrito',
	'Search_ip' => 'Buscar en mensajes por direcci�n IP',
	'Search_ip_explain' => 'Introduzca la direcci�n IP en este formato <u>127.0.0.1</u> -- Puede usar * como comod�n para b�squedas m�s generales: <u>127.*.*.1</u>',
	'IP' => 'IP',
	'Whois' => 'Whois',
	'Browser' => 'Navegador',
	'No_other_registered_ips' => 'No hay otros usuarios registrados con esta direcci�n IP.',
	'No_other_posted_ips' => 'Este usuario no ha escrito ning�n mensaje.',
	'Not_recorded' => 'No guardada',
	'Logins' => 'Identificaciones',
	'No_logins' => 'No hay identificaciones guardadas de este usuario.',
// End Advanced IP Tools Pack MOD

	'LIW_click_image' => 'Pulse para ver esta imagen en su tama�o original',
	'LIW_click_image_explain' => 'Pulse en la imagen para verla en su tama�o original',
// Mighty Gorgon - Full Album Pack - BEGIN
	'Album' => '�lbum',
	'Personal_Gallery' => 'Galer�a personal',
	'Personal_Gallery_Of_User' => 'Galer�a personal de %s',
	'Personal_Gallery_Of_User_Profile' => 'Galer�a personal de %s (%d imagenes)',
	'Show_All_Pic_View_Mode_Profile' => 'Mostrar todas las im�genes de la galer�a personal de %s (sin subcategor�as)',
	'Not_allowed_to_view_album' => 'Perd�n, usted no tiene permitido ver el �lbum.',
	'Not_allowed_to_upload_album' => 'Perd�n, usted no tiene permitido subir im�genes al �lbum. Por favor, contacte con el administrador para m�s informaci�n.',
	'Album_empty' => 'No hay im�genes en el �lbum<br />Pulse en el enlace <b>Subir nueva imagen</b> de esta p�gina para subir una.',
	'Album_empty2' => 'No hay im�genes en el �lbum.',
	'Upload_New_Pic' => 'Subir nueva imagen.',
	'Pic_Title' => 'T�tulo de la imagen',
	'Pic_Title_Explain' => 'Es muy importante para su imagen elegir un buen t�tulo. Podria ser un nombre, o un asunto que haga que otros quieran ver la imagen.',
	'Pic_Upload' => 'Subir imagen',
	'Pic_Upload_Explain' => 'Los tipos permitidos son JPG, GIF y PNG. El tama�o m�ximo del archivo es %s bytes. Las dimensiones m�ximas de la imagen son %sx%s pixels.',
	'Album_full' => 'Perd�n, el �lbum ya tiene el n�mero m�ximo de im�genes permitidas. Por favor, contacte con el administrador para m�s informaci�n.',
	'Album_upload_successful' => 'Gracias, su imagen ha sido subida correctamente.',
	'Click_return_album' => 'Pulse %saqu�%s para volver al �lbum.',
	'Invalid_upload' => 'Subida inv�lida<br /><br />Su imagen es muy grande o ese tipo no est� permitido.',
	'Image_too_big' => 'Perd�n, las dimensiones de su imagen son demasiado grandes.',
	'Uploaded_by' => 'Subida por',
	'Category_locked' => 'Perdone, usted no puede subir im�genes, porque la categor�a est� cerrada por el administrador. Por favor, contacte con �l para m�s informaci�n.',
	'View_Album_Index' => 'Indice del �lbum',
	'View_Album_Personal' => 'Viendo galer�a personal de un usuario',
	'View_Pictures' => 'Viendo im�genes o enviando/leyendo comentarios en el �lbum',
	'Album_Search' => 'Buscando en el �lbum',
	'Pic_Name' => 'Nombre de la imagen',
	'Description' => 'Descripci�n',
	'Search_Contents' => ' que contenga: ',
	'Search_Found' => 'Busqueda encontrada ',
	'Search_Matches' => 'Iguales:',
// Mighty Gorgon - Full Album Pack - END

// News
	'xs_latest_news' => '�ltimas noticias',
	'xs_no_news' => 'No hay art�culos de noticias.',
	'xs_news_version' => 'Versi�n de noticias Icy Phoenix: %s',
	'xs_news_ticker_feed' => 'Entrada de sindicaci�n XML: %s',
	'xs_no_ticker' => 'No hay entradas de noticias definidas. Por favor, vaya al ACP para crear una.',
	'xs_news_ticker_title' => 'Entrada de noticia',
	'xs_news_tickers_title' => 'Entrada de noticias',
	'xs_news_item_title' => 'Noticia',
	'xs_news_items_title' => 'Noticias',
	'hide' => 'Ocultar',
	'show' => 'Mostrar',
	'Welcome' => 'Bienvenido',
	'birthdays' => 'Cumplea�os',

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
	'Post_review' => 'Enviar revisi�n',
	'View_next_post' => 'Ver mensaje siguiente',
	'View_previous_post' => 'Ver mensaje anterior',
	'No_newer_posts' => 'No hay mensajes nuevos en este foro',
	'No_older_posts' => 'No hay mensajes antiguos en este foro',

	'StaffSite' => 'Equipo del sitio',
	'Staff_level' => array('Administrador','Moderador'),
	'Staff_forums' => 'Foros',
	'Staff_stats' => 'Estad�sticas',
	'Staff_user_topic_day_stats' => '%.2f temas por d�a', // %.2f = topics per day
	'Staff_period' => 'desde %d d�as', // %d = days
	'Staff_contact' => 'Contactar',
	'Staff_messenger' => 'Messenger',
// Start Edit Notes MOD
	'Edit_notes' => 'Notas de edici�n',
	'Delete_note' => 'Borrar nota',
	'Edited_by' => 'Editado por',
	'Confirm_delete_edit_note' => '�Est� seguro de querer borrar esta nota de edici�n?',
	'Edit_note_deleted' => 'La nota de edici�n ha sido borrada.',
// End Edit Notes MOD
//Referrers Mod
	'Referrers' => 'Referidos',
	'Viewing_Referrers' => 'Viendo referidos',
//Referrers Mod End

	'Recent_topics' => 'Temas recientes',
	'Recent_today' => 'Hoy',
	'Recent_yesterday' => 'Ayer',
	'Recent_last24' => '�ltimas 24 horas',
	'Recent_lastweek' => '�ltima semana',
	'Recent_lastXdays' => '�ltimos %s d�as',
	'Recent_last' => '�ltimo',
	'Recent_days' => 'D�as',
	'Recent_first' => 'creado %s',
	'Recent_first_poster' => '%s',
	'Recent_select_mode' => 'Seleccione modo:',
	'Recent_showing_posts' => 'Mostrar mensajes:',
	'Recent_title_one' => '%s tema %s', // %s = topics; %s = sort method
	'Recent_title_more' => '%s temas %s', // %s = topics; %s = sort method
	'Recent_title_today' => ' de hoy',
	'Recent_title_yesterday' => ' de ayer',
	'Recent_title_last24' => ' de las �ltimas 24 horas',
	'Recent_title_lastweek' => ' de la �ltima semana',
	'Recent_title_lastXdays' => ' de los �ltimos %s d�as', // %s = days
	'Recent_no_topics' => 'No se encontraron temas.',
	'Recent_wrong_mode' => 'Usted ha seleccionado un modo incorrecto.',
	'Recent_click_return' => 'Pulse %saqu�%s para volver al sitio m�s reciente.',

	'Profile_view_option' => 'Ventana emergente de vistas de perfil',
	'Profile_viewed' => 'Mis vistas de perfil',

// BEGIN Disable Registration MOD
	'registration_status' => 'Perd�n, pero los registros de nuevos usuarios en este foro esta actualmente deshabilitados. Por favor, int�ntelo mas tarde.',
// END Disable Registration MOD

	'PostHighlight' => 'Seleccionar texto',
	'QuickQuote' => 'Cita r�pida',
	'Randomquote' => 'Cita aleatoria',

// Mod User CP Organize
	'Cpl_Navigation' => 'Perfil',
// 'Cpl_Settings_Options' => 'Ajustes y opciones',
	'Cpl_Settings_Options' => 'Ajustes y opciones',
	'Cpl_Board_Settings' => 'Ajustes del foro',
	'Cpl_NewMSG' => 'Enviar nuevo mensaje',
	'Cpl_Click_Return_Cpl' => 'O pulse %saqu�%s para volver a su perfil',
	'Cpl_Personal_Profile' => 'Perfil personal',
	'Cpl_More_info' => 'Suscripciones',

	'Forbidden_characters' => 'Los caracteres permitidos para nombres de usuario son a-z, 0-9, -, _ y espacios.',

	'Topics_per_page' => 'Temas por p�gina',
	'Posts_per_page' => 'Mensajes por p�gina',
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
	'Display_unread' => 'No le�do',
	'Display_unanswered' => 'No contestado',
	'Display_all' => 'Todo',
	'Mod_CP_confirm_delete_polls' => '�Est� seguro de querer borrar esta(s) encuesta(s)?',
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
	'Mod_CP_click_return_topic' => 'Pulse %saqu�%s para volver al otro tema o %saqu�%s para volver al nuevo.',

	't_starter' => 'No puede darse las gracias a usted mismo...',
	'Watched_Topics' => 'Temas observados',
	'No_Watched_Topics' => 'No est� observando ning�n tema',
	'Watched_Topics_Started' => 'Inicio del tema',
	'Watched_Topics_Stop' => 'Parar de observar',

	'Stop_watching_forum' => 'Parar de observar este foro',
	'Start_watching_forum' => 'Observar este foro por mensajes',
	'No_longer_watching_forum' => 'No est� observando este foro desde hace tiempo.',
	'You_are_watching_forum' => 'Est� observando este foro.',

	'UCP_SubscForums' => 'Lista de foros suscritos',
	'UCP_NoSubscForums' => 'No est� suscrito a ning�n foro',
	'UCP_SubscForums_Flag' => 'Bandera',
	'UCP_SubscForums_Forum' => 'Foro',
	'UCP_SubscForums_Forum_subscribed' => 'Foro suscrito',
	'UCP_SubscForums_Forum_already_subscribed' => 'Ya est� suscrito a este foro',
	'UCP_SubscForums_Click_return_forum' => 'Pulse %saqu�%s para volver al foro',
	'UCP_SubscForums_Topics' => 'Temas',
	'UCP_SubscForums_Posts' => 'Mensajes',
	'UCP_SubscForums_LastPost' => '�ltimo mensaje',
	'UCP_SubscForums_UnSubscribe' => 'Quitar suscripci�n',
	'UCP_SubscForums_NewTopic' => 'Nuevo tema',

	'profile_main' => 'Informaci�n general',
	'profile_explain' => 'Bienvenido al perfil de usuario. Desde aqu� puede ver y actualizar su perfil, preferencias, foros y temas suscritos, etc. Puede enviar mensajes a otros usuarios (si est� permitido).',
	'your_activity' => 'Su perfil',

	'Gravatar' => 'Gravatar',
	'Gravatar_explain' => 'Si tiene un <a href="http://www.gravatar.com" target="_blank">gravatar</a>, introduzca la direcci�n de correo que tiene como registrado.',

	'private_msg_review_title' => 'Mensaje de respuesta para',
	'private_msg_review_error' => 'Error buscando mensaje privado',

	'BSH_Viewing_Topic' => 'Viendo el tema: %t%',
	'BSH_Viewing_Post' => '%sViendo un mensaje%s',
	'BSH_Viewing_Profile' => 'Viendo el perfil de %u%',
	'BSH_Viewing_Groups' => '%sViendo los grupos%s',
	'BSH_Viewing_Forums' => 'Viendo el foro: %f%',
	'BSH_Index' => '%sViendo el �ndice de foros%s',
	'BSH_Searching_Forums' => '%sBuscando en los foros%s',
	'BSH_Viewing_Onlinelist' => '%sViendo lista de conectados%s',
	'BSH_Viewing_Messages' => '%sViendo mensajes privados%s',
	'BSH_Viewing_Memberlist' => '%sViendo lista de usuarios%s',
	'BSH_Login' => '%sConect�ndose%s',
	'BSH_Logout' => '%sDesconect�ndose%s',
	'BSH_Editing_Profile' => '%sEditando perfil%s',
	'BSH_Viewing_ACP' => '%sViendo ACP%s',
	'BSH_Moderating_Forum' => '%sModerando foros%s',
	'BSH_Viewing_FAQ' => '%sViendo FAQ%s',
	'BSH_Viewing_Category' => 'Viendo categor�a: %c%',

	'Board_statistic' => 'Estad�sticas del foro',
	'Database_statistic' => 'Estad�sticas de la base de datos',
	'Version_info' => 'Informaci�n de versi�n',
	'Thereof_deactivated_users' => 'N�mero de usuarios no activados',
	'Thereof_Moderators' => 'N�mero de moderadores',
	'Thereof_Junior_Administrators' => 'N�mero de administradores junior',
	'Thereof_Administrators' => 'N�mero de administradores',
	'Deactivated_Users' => 'Usuarios que necesitan activaci�n',
	'Users_with_Mod_Privileges' => 'Usuarios con privilegios de moderador',
	'Users_with_Junior_Admin_Privileges' => 'Usuarios con privilegios de administrador junior',
	'Users_with_Admin_Privileges' => 'Usuarios con privilegios de administrador',
	'DB_size' => 'Tama�o de la base de datos',
	'Version_of_ip' => 'Versi�n de <a href="http://www.icyphoenix.com/">Icy Phoenix</a>',
	'Version_of_board' => 'Versi�n de <a href="http://www.phpbb.com">phpBB</a>',
	'Version_of_PHP' => 'Versi�n de <a href="http://www.php.net/">PHP</a>',
	'Version_of_MySQL' => 'Versi�n de <a href="http://www.mysql.com/">MySQL</a>',
	'Download_post' => 'Descargar mensaje',

	'Download_topic' => 'Descargar tema',
	'Always_swear' => 'Permitir palabras prohibidas',

	'Shoutbox' => 'Cuadro de charla',
	'Shoutbox_date' => ' d m Y h:i:s',
	'Shout_censor' => '�Charla borrada!',
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
	'Click_read_topic' => 'Pulse %saqu�%s para leerlo', // %s's here are for uris, do not remove!
	'Create_with_generator' => 'Crear avatar usando el generador de avatares',
	'View_avatar_generator' => 'Generar avatar',
	'Adv_Search' => 'B�squeda avanzada',
	'Search_Explain' => 'Buscar dentro de este sitio',
	'Login_attempts_exceeded' => 'El n�mero m�ximo %s de intentos de conexi�n ha sido sobrepasado. No se le permite conectarse durante los pr�ximos %s minutos.',
	'Please_remove_install_contrib' => 'Por favor, aseg�rese de que los directorios install/ y contrib/ han sido borrados',
	'Search_Engines' => 'Robots de motores de b�squeda:',
	'Bots_browsing_forum' => 'Robots de motores de b�squeda navegando en este foro:',
	'Debug_On' => 'Debug on',
	'Debug_Off' => 'Debug off',
	'Page_Generation_Time' => 'P�gina generada en:',
	'Memory_Usage' => 'Memoria',
	'SQL_Queries' => 'Consultas SQL',
	'Search_new2' => 'Nuevos mensajes',
	'Search_new_p' => 'Mensajes desde su �ltima visita',
	'Show_In_Portal' => 'Mostrar en portal',
	'Not_Auth_View' => 'No est� autorizado a ver esta p�gina.',
	'Site_Hist' => 'Historial del sitio',
	'Links' => 'Enlaces',
	'Print_View' => 'Versi�n imprimible',
	'Browsing_topic' => 'Usuarios navegando en este tema:',
	'Sudoku' => 'Sudoku',
	'Bookmarks' => 'Marcadores',
	'Set_Bookmark' => 'Fijar este tema como marcador',
	'Remove_Bookmark' => 'Quitar este tema de los marcadores',
	'No_Bookmarks' => 'No tiene temas marcados',
	'Always_set_bm' => 'Fijar como marcador autom�ticamente cuando escribe un mensaje',
	'Found_bookmark' => 'Se encontr� %d marcador.', // eg. Search found 1 match
	'Found_bookmarks' => 'Se encontraron %d marcadores.', // eg. Search found 24 matches
	'More_bookmarks' => 'M�s marcadores...', // For mozilla navigation bar

//RSS Reader Help
	'RSS' => 'RSS',
	'Rss_news_help' => '�Qu� es esto?',
	'Rss_news_help_title' => 'Ayuda del lector RSS',
	'Rss_news_help_header' => '�Qu� son los feeds y c�mo puedo usarlos?',
	'Rss_news_help_explain' => 'Un feed es un sistema de resumen, que se va actualizando para, as�, estar al d�a de las noticias de una web.<br /><br /><b>Atenci�n:</b> Para suscribirse a un feed es necesario <a href="http://www.rssowl.org/" target="new">Un lector de feed</a> . Al hacer clic en un feed sin el lector de feeds RSS o ATOM, aparecer� en el navegador texto sin formato.',
	'Rss_news_help_header_2' => '<b>�Qu� son RSS y Atom?</b>',
	'Rss_news_help_explain_2' => 'Son dos formatos de los feeds. Muchos lectores de feed soportan ambos formatos. Actualmente soportamos Atom 0.3 y RSS 2.0.',
	'Rss_news_help_header_3' => '<b>�C�mo uso el lector de RSS?</b>',
	'Rss_news_help_explain_3' => 'Para empezar, necesita un lector de feeds. Encontrar� un ejemplo en <a href="http://www.rssowl.org/" target="new">http://www.rssowl.org/</a>.<br /><br />Luego podr� usar el programa:<br /><br /><b>1.</b> Busque el enlace de RSS en nuestro sitio. <b>o</b><br /><b>2.</b> A�ada algunas de las siguientes URL:',
	'L_url_rss_explain' => 'URL para todos los temas del foro.',
	'L_url_rss_news_explain' => 'URL s�lo para el foro de noticias.',
	'L_url_rss_atom_explain' => 'URL para el feed Atom RSS.',
	'Rss_news_help_rights' => 'Nos reservamos el derecho de interrumpir el feed de este foro en cualquier momento. Nuestros feeds del foro no se podr�n ver desde fuera.',
	'Rss_news_feeds' => 'Sindicaci�n RSS',

	'Quick_Reply' => 'Respuesta r�pida',
	'Mod_CP_sticky2' => 'Nota',
	'Mod_CP_announce2' => 'Anuncio',
	'Mod_CP_global2' => 'Global',
	'Mod_CP_normal2' => 'Normal',

	'Search_Flood_Error' => 'No puede hacer otra b�squeda tan pronto tras la �ltima realizada. Por favor, int�ntelo de nuevo tras unos segundos.',

// Custom Profile Fields MOD
	'custom_field_notice' => 'Estos campos han sido creados por un administrador. Pueden o no pueden ser visibles al p�blico. Los campos marcados con un * son campos obligatorios.',
	'and' => ' y ',
// END Custom Profile Fields MOD

	'dsbl' => 'Su direcci�n IP est� en la <a href="%url%">Lista de spammers</a>. <br />Su intento de registro ha sido bloqueado.',
	'Emails_Only_To_Admins_Error' => 'Puede usar el sistema de correo para enviar correo s�lo a los administradores.',
	'Wordgraph' => 'Palabras m�s usadas',
	'Viewing_wordgraph' => 'Mirando en las palabras m�s usadas',
	'Links_For_Guests' => '<b>Debe estar registrado para ver este enlace.</b>',
	'New' => 'N',
	'New_Label' => 'Nuevos',
	'New_Messages_Label' => 'Nuevos mensajes',
	'Show_Personal_Gallery' => 'Ver la galer�a personal del usuario',
	'Login_Status' => 'Estado de conexi�n',
	'Login_Hidden' => 'Oculto',
	'Login_Visible' => 'Visible',
	'Login_Default' => 'Por defecto',
	'Errors_Not_Found' => 'La direcci�n solicitada no se ha encontrado en este servidor',
	'Errors_000' => 'Error desconocido',
	'Errors_000_Full' => 'La direcci�n solicitada devuelve un c�digo de error desconocido.<br />Los errores se han copiado al log y comprobaremos el problema lo antes posible.',
	'Errors_400' => 'Error 400',
	'Errors_400_Full' => 'La direcci�n solicitada no es una direcci�n v�lida.',
	'Errors_401' => 'Error 401 - Error de autorizaci�n',
	'Errors_401_Full' => 'Est� recibiendo este mensaje porque no le autorizan a tener acceso a esta direcci�n.',
	'Errors_403' => 'Error 403',
	'Errors_403_Full' => 'Acceso a esta direcci�n prohibido.',
	'Errors_404' => 'Error 404 - Archivo no encontrado',
	'Errors_404_Full' => 'La direcci�n que ha solicitado no est� disponible en este servidor. Puede tener un error en la direcci�n o lo qu� est� buscando pudo haber sido quitado.',
	'Errors_500' => 'Error 500 - Error de configuraci�n',
	'Errors_500_Full' => 'La direcci�n que ha solicitado devuelve un error de configuraci�n.<br />Los errores se han copiado log y comprobaremos el problema lo antes posible.',
	'Errors_Email_Subject' => 'Errores: ',
	'Errors_Email_Addrress_Prefix' => 'xs_errors',
	'Errors_Email_Body' => 'Un error ha ocurrido en su sitio. Por favor, revise el archivo log.',
	'Remote_avatar_no_image' => 'La imagen %s no existe',
	'Remote_avatar_error_filesize' => 'La imagen pesa m�s del l�mite permitido (%d bytes)',
	'Remote_avatar_error_dimension' => 'La imagen es m�s grande de lo permitido (%d x %d pixels)',
	'How_Many_Chatters' => 'Hay <b>%d</b> usuario(s) en el chat',
	'Who_Are_Chatting' => '<b>%s</b>',
	'Click_to_join_chat' => 'Pulse para ingresar en el chat',
	'ChatBox' => 'Sala de chat',
	'log_out_chat' => 'Usted se ha identificado correctamente en el chat',
	'Send' => 'Enviar',
	'Login_to_join_chat' => 'Identificarse para ingresar al chat',

// Hacks List
/* General */
	'Hacks_List' => 'Cr�ditos',
	'Page_Desc' => 'Este m�dulo le permite a�adir/editar/borrar la lista de los actuales hacks/mods que hay en su web. Esta lista se muestra a los usuarios cuando visitan la p�gina hacks_list.php.',
	'Deleted_Hack' => 'Borrar hack %s de la lista.<br />',
	'Updated_Hack' => 'Actualizar informaci�n para el MOD %s.<br />',
	'Added_Hack' => 'A�adir informaci�n para el MOD %s.<br />',
	'Status' => 'Estado',
	'No_Website' => 'Ninguna web disponible.',
	'No_Hacks' => 'Ning�n hack para mostrar.',
	'Add_New_Hack' => 'A�adir un nuevo MOD',
	'User_Viewable' => '�Ocultar la lista de hacks a los usuarios?',
	'Hack_Name' => 'Nombre del hack',
//	'Description' => 'Descripci�n',
	'Required' => 'Requerido',
	'Author_Email' => 'Correo del autor',
	'Version' => 'Versi�n',
	'Download_URL' => 'Enlace para descargar',

/* Errors */
	'Error_Hacks_List_Table' => 'Error consultando la tabla de hacks.',
	'Required_Field_Missing' => 'Falta informaci�n requerida en el formulario anterior.',
	'Error_File_Opening' => 'Imposible abrir el fichero: %s',

//====================================================
// Mighty Gorgon - LANG - BEGIN
// Mighty Gorgon - Full Album Pack - BEGIN
	'Newest_pic' => '�ltima imagen', // Album Addon
	'Random_pic' => 'Imagen aleatoria', // Album Addon
	'Click_enlarge_pic' => 'Pulse en la imagen para maximizarla',
// Mighty Gorgon - Full Album Pack - END
// Mighty Gorgon - HTTP AGENTS - BEGIN
	'Last_Used_IP' => '�ltima IP usada',
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
	'Fast' => 'R�pido',
	'Standard' => 'Est�ndar',
	'Style' => 'Estilo',
	'User_Contacts' => 'Contactar',
	'Memberlist_Users_Display' => 'Usuarios por p�gina:',
	'Sort_LastLogon' => '�ltima identificaci�n',
	'Sort_Birthday' => 'Cumplea�os',
// Mighty Gorgon - Power Memberlist - END
// Mighty Gorgon - Multiple Ranks - BEGIN
	'Staff' => 'Equipo',
	'Rank' => 'Rango',
	'Rank_Header' => 'Rangos',
	'Rank_Image' => 'Imagen',
	'Rank_Posts_Count' => 'Rangos autom�ticos por mensajes',
	'Rank_Days_Count' => 'Rangos autom�ticos por d�as',
	'Rank_Min_Des' => 'Mensajes/d�as m�nimos',
	'Rank_Min_M' => 'Mensajes m�nimos',
	'Rank_Max_M' => 'Mensajes m�ximos',
	'Rank_Min_D' => 'D�as m�nimos',
	'Rank_Max_D' => 'D�as m�ximos',
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
	'Rank1_title' => 'T�tulo rango 1',
	'Rank2_title' => 'T�tulo rango 2',
	'Rank3_title' => 'T�tulo rango 3',
	'Rank4_title' => 'T�tulo rango 4',
	'Rank5_title' => 'T�tulo rango 5',
// Mighty Gorgon - Multiple Ranks - END
// Mighty Gorgon - Nav Links - BEGIN
	'QUICK_LINKS' => 'Navegaci�n',
	'MAIN_LINKS' => 'Principal',
	'TOOLS_LINKS' => 'Herramientas',
	'NEWS_LINKS' => 'Noticias',
	'USERS_LINKS' => 'Usuarios &amp; grupos',
	'INFO_LINKS' => 'Info',
	'SPONSORS_LINKS' => 'Patrocinadores',
	'HelpDesk' => 'Ayuda',
	'AvatarGenerator' => 'Avatar',
	'DBGenerator' => 'SQL a PHP ',
	'NEWS_CAT' => 'Categor�as',
	'NEWS_ARC' => 'Archivo',
// Mighty Gorgon - Nav Links - END
	'Activity' => 'Juegos',
	'Games' => 'Juegos',
	'Trohpy' => 'Trofeos en juegos',
	'quick_links_games' => 'Men� de juegos',

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
	'WeatherForecast' => 'Parte meteorol�gico',
	'ErrorNotFound' => '�Archivo no encontrado!',
	'MGC_Users_Online' => 'Usuarios conectados MGC',
	'MGC_User_Servertime' => 'Fecha',
	'MGC_User_Nickname' => 'Nombre',
	'MGC_User_Server' => 'Servidor',
	'MGC_User_IP' => 'IP',
	'MGC_User_ID' => 'ID',
	'MGC_User_Client_Version' => 'Versi�n MGC',

	'Country_Flag' => 'Bandera del pa�s',
	'Select_Country' => 'Seleccionar pa�s',
	'Extra_profile_info' => 'Informaci�n extra del perfil',
// 'Extra_profile_info_explain' => 'You can add extra information about yourself or about your hobbies. You can also add photos. You can use some bbcodes as when you post or make your signature. There is a <b>%d</b> character limit (if 0 then no limit)',
	'Extra_profile_info_explain' => 'Puede a�adir informaci�n extra acerca de usted o acerca de sus aficiones. Puede a�adir fotos. Puede usar algunos BBCodes como cuando escribe un mensaje o una firma.',
	'Extra_window' => 'Abrir en otra ventana',
	'Extra_too_long' => 'Su campo extra es muy largo (max. <b>%d</b> caracteres permitidos)',
	'UserLike' => 'Al usuario le gusta',
	'UserDisLike' => 'Al usuario no le gusta',
	'UserLikeIns' => 'Tres cosas que le gusten',
	'UserDisLikeIns' => 'Tres cosas que no le gusten',
	'UserPhone' => 'N�mero de tel�fono',
	'UserSport' => 'Deporte/equipo',
	'UserMusic' => 'M�sica/grupos',
	'UserNoInfo' => 'Informaci�n no disponible',
	'Last_Seen' => '�ltima conexi�n',
// New MG - END

// MG CMS - BEGIN
	'CMS_TITLE' => 'CMS',
	'CMS_MANAGEMENT' => 'Administraci�n CMS',
	'CMS_CONFIG' => 'Configuraci�n CMS',
	'CMS_ACP' => 'Editar esta p�gina',
	'CUSTOM_PAGE' => 'P�gina personalizada',
// MG CMS - END

// Icy Phoenix - BUILD 001
	'SimilarTopics' => 'Temas parecidos',
	'Chat' => 'Chat',
	'Digests' => 'Resumen',

	'CPL_REG_INFO_EXPLAIN' => 'Nombre, direcci�n de correo y contrase�a',
	'CPL_PROFILE_INFO_EXPLAIN' => 'Informaci�n general del contacto, messenger, sexo, cumplea�os, intereses y otra informaci�n',
	'CPL_PROFILE_VIEWED_EXPLAIN' => 'Usuarios que han visto su perfil',
	'CPL_AVATAR_PANEL_EXPLAIN' => 'El avatar es una imagen peque�a que puede vincular a su nombre de usuario',
	'CPL_SIG_EDIT_EXPLAIN' => 'Editor de firma: puede definir el texto que quiere adjuntar en la parte inferior de cada mensaje suyo en el foro',
	'CPL_PREFERENCES_EXPLAIN' => 'Configuraci�n general cuando escribe, notificaciones y mensajes',
	'CPL_BOARD_SETTINGS_EXPLAIN' => 'Configuraciones globales como el tiempo, plantilla y lenguaje',
	'Calendar_settings_EXPLAIN' => 'Configuraciones mientras observa el calendario',
	'Hierarchy_setting_EXPLAIN' => 'Configuraciones observando los subforos y tipo de separaci�n de temas',
	'LOGIN_SEC_EXPLAIN' => 'Si esta opci�n est� activada, podr� supervisar todas las conexiones de su usuario',
	'CPL_OWN_POSTS_EXPLAIN' => 'Buscar sus mensajes',
	'CPL_OWN_PICTURES_EXPLAIN' => 'Visitar su galer�a personal del �lbum',
	'CPL_INBOX_EXPLAIN' => 'Bandeja de entrada: esta carpeta contiene los mensajes privados que usted recibe',
	'CPL_SAVEBOX_EXPLAIN' => 'Mensajes guardados: esta carpeta contiene los mensajes privados que usted ha guardado',
	'CPL_OUTBOX_EXPLAIN' => 'Bandeja de salida: esta carpeta contiene los mensajes privados que usted ha enviado pero que a�n no han sido le�dos',
	'CPL_SENTBOX_EXPLAIN' => 'Mensajes enviados: esta carpeta contiene los mensajes privados que usted ha enviado y que ya han sido le�dos',
	'CPL_BOOKMARKS_EXPLAIN' => 'Todos los marcadores que ha asignado a los temas',
	'WATCHED_TOPICS_EXPLAIN' => 'La lista de todos los temas que ha observado',
	'CPL_SUBSCFORUMS_EXPLAIN' => 'Los foros a los que est� suscrito para recibir notificaciones de nuevos temas',
	'DIGESTS_EXPLAIN' => 'Los res�menes son e-mails peri�dicos que se env�an autom�ticamente con un extracto de los mensajes que se han escrito en el foro',
	'DRAFTS_EXPLAIN' => 'Administrar sus borradores',

// Ajax Shoutbox - BEGIN
	'Ajax_Shoutbox' => 'Chat del foro',
	'Ajax_Chat' => 'Chat',
	'Ajax_Archive' => 'Archivo',
	'Shoutbox_flooderror' => 'No se puede enviar un mensaje tan pronto despu�s de publicar el �ltimo. Por favor, int�ntelo de nuevo tras unos momentos.',
	'Shoutbox_no_auth' => 'Lo sentimos, s�lo los usuarios registrados pueden utilizar el chat del foro',
	'Shoutbox_loading' => 'Cargando chat del foro',
// Errors
	'Shoutbox_unable' => 'Lo sentimos, esta acci�n no se ha podido realizar. Por favor, int�ntelo de nuevo.',
	'Shoutbox_empty' => 'No hay mensajes en la base de datos',
	'Shoutbox_no_mode' => 'No se ha especificado ning�n modo v�lido',
// Archive
	'Shouts' => 'Comentarios',
	'Statistics' => 'Estad�sticas',
	'Total_shouts' => 'Comentarios en total',
	'Stored_shouts' => 'Comentarios guardados',
	'My_shouts' => 'Mis comentarios',
	'Today_shouts' => 'Comentarios de las �ltimas 24 horas',
	'Top_Ten_Shouters' => 'Top 10 de comentaristas',
// Online list
	'Online_total' => 'Total',
	'Online_registered' => 'Usuarios',
	'Online_guests' => 'Invitados',
	'Who_is_Chatting' => 'Qui�n est� chateando',
	'Shoutbox_online_explain' => 'Esta informaci�n est� basada en los usuarios activos de los �ltimos 30 segundos',
// Ajax Shoutbox - END

	'Contact_us' => 'Cont�ctenos',
	'Contact_us_explain' => 'Usando esta p�gina, usted puede enviarnos un correo',
	'Session_invalid' => 'Sesi�n inv�lida. Por favor, vuelva a enviar el formulario.',

// Icy Phoenix - BUILD 007
	'Reg_Username_Short' => ' este nombre de usuario es demasiado corto',
	'Reg_Username_Long' => ' este nombre de usuario es demasiado largo',
	'Reg_Username_Taken' => ' este nombre de usuario no est� disponible',
	'Reg_Username_Free' => ' este nombre de usuario est� disponible',
	'Reg_PWD_Short' => 'Esta contrase�a es demasiado corta',
	'Reg_PWD_Easy' => 'Esta contrase�a es demasiado larga',
	'Reg_PWD_OK' => 'Esta contrase�a es correcta',
	'Reg_Email_Invalid' => ' esta direcci�n de correo no es v�lida o ya est� en nuestra base de datos',
	'Reg_Email_OK' => ' esta direcci�n de correo es correcta',

// Moved here from lang_adv_time.php
	'time_mode' => 'Administraci�n de hora',
	'time_mode_text' => 'La DST es la diferencia entre el horario solar y la hora real usada en su pa�s (entre 0 y 120 minutos).<br /><br />* El modo marcado por el asterisco es utilizado por defecto en este foro, y es el recomendado por su administrador.',
	'time_mode_auto' => 'Modos autom�ticos...',
	'time_mode_full_pc' => 'La hora de su ordenador',
	'time_mode_server_pc' => 'Hora del servidor universal, zona horaria/DST<br /><span STYLE="margin-left: 25">de su ordenador</span>',
	'time_mode_full_server' => 'Hora del servidor local',
	'time_mode_manual' => 'Modo manual...',
	'time_mode_dst' => 'Habilitar DST',
	'time_mode_dst_server' => 'Por el servidor',
	'time_mode_dst_time_lag' => 'Diferencia DST',
	'time_mode_dst_mn' => 'min',
	'time_mode_timezone' => 'Zona horaria',

	'dst_time_lag_error' => 'Error del valor de diferencia DST. Debe escribir un n�mero de minutos entre 0 y 120.',

	'dst_enabled_mode' => ' [DST habilitado]',
	'full_server_mode' => 'Hora sincronizada con la hora del servidor del foro',
	'server_pc_mode' => 'Hora sincronizada con el servidor - zona horaria/DST con su ordenador',
	'full_pc_mode' => 'Hora sincronizada con su hora del ordenador',

	'Smileys_Per_Page' => 'Emoticonos por p�gina',

/* lang_site_hist.php - BEGIN */
	'Site_history' => 'Historial del sitio',
	'Month' => 'Mes', 
	'Week_day' => 'D�a de la semana', 
	'Not_availble' => 'No disponible', 
	'Total_users' => 'Usuarios m�ximos', 
	'Reg_users' => 'Usuarios registrados', 
	'Hidden_users' => 'Usuarios ocultos', 
	'Guests_users' => 'Usuarios invitados', 
	'New_users' => 'Nuevos usuarios', 
	'New_topics' => 'Nuevos temas', 
	'New_posts_reply' => 'Mensajes/respuestas', 
	'Most_online' => 'La mayor�a de usuarios conectados fue %s', 
	'Most_online_week' => 'La mayor�a de usuarios conectados en los �ltimos 7 d�as', 
	'Last_24' => 'La mayor�a de usuarios conectados en las �ltimas %s horas', 
	'Top_Posting_Users' => 'Top usuarios escribiendo',
	'Top_Posting_Users_week' => 'Top usuarios escribiendo esta semana [%s]',
	'Rank' => 'Rango',
	'Percent' => 'Por ciento',
	'Graph' => 'Gr�fico',
	'Top_Visiting_Users' => 'La mayor�a de usuarios que sobrepasa la hora',
/* lang_site_hist.php - END */

/* lang_referrers.php - BEGIN */
	'Referrers_Title' => 'Administraci�n de referidos',
	'Referrers_Cleared' => 'Referidos limpiado',
	'Referrers_Clear' => 'Borrar todos',
	'Click_Return_Referrers' => 'Pulse %saqu�%s para volver a referidos',
	'Referrers' => 'Referidos',
	'Referrer_host' => 'Dominio referido',
	'Referrer_url' => 'URL referido',
	'Referrer_ip' => 'IP referido',
	'Referrer_hits' => 'Hits',
	'Referrer_first' =>'Primera visita',
	'Referrer_last' => '�ltima visita',
	'Viewing_Referrers' => 'Viendo referidos',
/* lang_referrers.php - END */

/* lang_prune_users.php - BEGIN */
// add to prune inactive
	'X_Days' => '%d d�as',
	'X_Weeks' => '%d semanas',
	'X_Months' => '%d meses',
	'X_Years' => '%d a�os',

	'Confirm_delete_user' => '�Seguro que quiere eliminar este/estos usuario/s? ',
	'Prune_no_users' => 'N�ng�n usuario borrado',
	'Prune_users_number' => '%d usuarios borrados: esta es la lista con sus nombres',

	'Prune_user_list' => 'Usuarios/as que ser�n borrados/as',
	'Prune_on_click' => 'Est� a punto de borrar %d usuarios/as. �Desea continuar?',
	'Prune_Action' => 'Presione el enlace de abajo para ejecutar',
	'Prune_users_explain' => 'En esta p�gina podr� borrar usuarios/as inactivos/as desde hace mucho tiempo. Tienes tres enlaces: uno para borrar usuarios/as que nunca han escrito, otro para borrar usuarios/as que nunca se han logueado, y otro para borrar usuarios/as que nunca activaron su cuenta.<p/><b> Nota:</b> Esta no es una funci�n que pueda deshacerse luego; todos los usuarios de la lista ser�n definitivamente borrados tras ejecutar el enlace.', 
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

	'Upload_Image_Local' => 'Subir imagen',
	'Uploaded_Images_Local' => 'Im�genes subidas',
	'Upload_Image_Local_Explain' => 'Seleccione el archivo que quiere subir',
	'Uploaded_Image_Success' => 'Esta imagen ha sido subida correctamente.',
	'Uploaded_Image_BBC' => 'Puede utilizar este BBCode para publicar esta imagen.',
	'Upload_Image_Empty' => 'No puede subir al aire... �Ya lo sabe!',
	'Upload_File_Too_Big' => '�El archivo que est� intentando subir es demasiado grande! Tama�o m�ximo permitido:',
	'Upload_File_Type_Allowed' => 'S�lo este tipo de archivos pueden subirse',
	'Upload_Insert_Image' => 'Insertar BBCode',
	'Upload_Close' => 'Cerrar',
	'BBCode' => 'BBCode',
	'HTML' => 'HTML',

	'No_News' => 'No hay noticias',

	'Email_confirm' => 'Confirmar su direcci�n de e-mail',
	'Email_mismatch' => 'Las direcciones de e-mail introducidas no son iguales.',

	'View_ballot' => 'Viendo votaci�n',
	'Full_edit' => 'Seleccionar para editar completamente el formulario',
	'Save_changes' => 'Guardar',
	'No_subject' => '(Ning�n tema)',
	'Edit_quick_post' => 'Edici�n r�pida de este mensaje',
	'AJAX_search_results' => 'La b�squeda r�pida ha encontrado %s temas con la palabra clave en el t�tulo del tema. Pulse aqu� para ver estos temas',
	'AJAX_search_result' => 'La b�squeda r�pida ha encontrado un tema con la palabra clave en el t�tulo del tema. Pulse aqu� para ver este tema',
	'More_matches_username' => 'M�s de un usuario ha marcado su consulta. Por favor, seleccione el usuario del marco superior.',
	'No_username' => 'Tiene que introducir un nombre de usuario.',
	'AJAX_quick_search_results' => 'La b�squeda r�pida ha encontrado %s temas con las palabras clave.<br />En la derecha puede ver los primeros resultados.<br />Pulse en BUSCAR para obtener el listado completo de resultados.',
	'AJAX_quick_search_result' => 'La b�squeda r�pida ha encontrado un tema con las palabras clave.<br />En la derecha puede ver el resultado de la b�squeda.',

	'Icon_Description' => 'Descripci�n de iconos',

	'Feature_Disabled' => 'Esta caracter�stica est� deshabilitada.',

// Resend Activation - BEGIN
	'Resend_activation_email' => 'Reenviar el correo de activaci�n',
	'Invalid_activation' => 'Las cuentas de usuarios solo pueden ser activadas por los administradores.',
	'No_actkey' => 'Esta no es la clave de activaci�n para su cuenta. Por favor, contacte con el administrador del foro para m�s informaci�n.',
	'Send_actmail_flood_error' => 'Usted no puede hacer otra petici�n respecto a la �ltima tan seguido; por favor, intentelo de nuevo en unos momentos.',
	'Resend_activation_email_done' => 'El correo de activaci�n ha sido enviado. Por favor, revise su correo para mayor informaci�n.',
// Resend Activation - END

	'Bots_Group' => 'Robots',
	'Bots_Color' => 'Color de robots',
	'Active_Users_Group' => 'Usuarios activos',
	'Active_Users_Color' => 'Color de usuarios activos',
	'Group_Default_Membership' => 'Grupo por defecto',
	'Group_Default_Membership_Explain' => 'Seleccione un grupo por defecto para el usuario, para asignarle rango y color.',
	'User_Color' => 'Color de usuario',
	'User_Color_Explain' => 'Si ha especificado un color para este usuario, este ser� sobreescrito por el grupo por defecto si especifica un grupo en la casilla de arriba. Utilize el c�digo hexacedimal con <b>#</b> ejemplo: ff0000 es el color ROJO.',
	'No_Groups_Membership' => 'No pertenece a ning�n grupo',
	'No_Default_Group' => 'Sin grupo por defecto',
	'Group_members_updated' => 'Usuario del grupo actualizados correctamente.',
	'Colorize_All' => 'Colorear todos los usuarios',
	'Colorize_Selected' => 'Colorear los seleccionados',

	'CompanyWho' => 'La compa��a',
	'CompanyWhere' => 'Como encontrarnos',
	'CompanyServices' => 'Servicios',
	'CompanyProducts' => 'Productos',

	'ShareThisTopic' => 'Compartir este tema',

	'Remove_cookies' => 'Borrar cookies de esta web',
	'Cookies_deleted' => 'Todas las cookies han sido borradas. Ahora no est� identificado.<br />Para finalizar, debe cerrar su navegador ahora.',
	'Delete_cookies' => 'Borrar cookies',
	'cookies_confirm' => 'Est� seguro que desea borrar todas las cookies de esta web?<br /><br />Esta acci�n tambi�n cerrar� la sesi�n de su usuario.',

	'CustomIcy' => 'Personalizaci�n Icy',

	'Drafts' => 'Borradores',
	'Drafts_Action' => 'Acci�n',
	'Drafts_Save' => 'Guardar',
	'Drafts_Load' => 'Cargar',
	'Drafts_Saved' => 'Este borrador ha sido guardado',
	'Drafts_Loaded' => 'Borrador cargado',
	'Drafts_No_Drafts' => 'No hay borradores guardados',
	'Drafts_Delete_Sel' => 'Borrar seleccionado',
	'Drafts_Save_Question' => '<br /><br />�Esta seguro que quiere guardar este mensaje como borrador?<br /><br />Tenga en cuenta que solo se guardar� el cuerpo del mensaje, todas las dem�s configuraciones se perder�n.',
	'Drafts_Delete_Question' => '<br /><br />�Esta seguro que quiere borrar los borradores seleccionados?',
	'Drafts_Type' => 'Tipo de borrador',
	'Drafts_Subject' => 'T�tulo del borrador',
	'Drafts_NT' => 'Nuevo tema',
	'Drafts_NM' => 'Responder',
	'Drafts_NPM' => 'Mensaje privado',

	'CannotEditAdminsPosts' => 'No puede editar los mensajes de administradores',
	'Random_Number' => 'N�mero aleatorio',

	'New_download' => 'La nueva descarga se ha actualizado o subido.<br />Pulse %saqu�%s para verla.',
	'Dl_bug_tracker' => 'Bug tracker',
	'Downloads_ADV' => 'Descargas ADV',

	'TopicUseful' => '�Este tema fue �til?',
	'Article' => 'Art�culo',
	'Comments' => 'Comentarios',

	'Sitemap' => 'Mapa del sitio',

	'Delete_My_Account' => 'Borrar cuenta',
	'Delete_My_Account_Explain' => 'Si desea borrar su cuenta de usuario en esta web, por favor env�e una solicitud utilizando este formulario y su cuenta ser� borrada tan pronto como sea posible.<br />Por favor, especifique "Borrar cuenta" en el t�tulo y (si lo desea) escriba la raz�n en pocas palabras.',

	'KB_MODE_ON' => 'Habilitar biblioteca',
	'KB_MODE_OFF' => 'Deshabilitar biblioteca',

	'Go_To_Page_Number' => 'Ir a la p�gina',

	'Admin_Emails' => 'Los administradores pueden enviarme informaci�n',
	'Allow_PM_IN' => 'Permitir a los usuarios enviarme mensajes privados',
	'Allow_PM_IN_Explain' => 'Tenga en cuenta que administradores, moderadores y amigos siempre podr�n enviarle mensajes.',
	'Allow_PM_IN_SEND_ERROR' => 'El usuario al cual intenta enviarle un MP no puede recibirlo porqu� as� lo ha decidido en las configuraciones de su cuenta de usuario.',

// 'UCP_ZEBRA' => 'Friends &amp; Foes',
	'UCP_ZEBRA' => 'Administraci�n de amigos',
	'UCP_ZEBRA_FOES' => 'Administrar ignorados',
	'UCP_ZEBRA_FRIENDS' => 'Administrar amigos',

	'ADD_FOES' => 'A�adir nuevos ignorados',
	'ADD_FOES_EXPLAIN' => 'Puede introducir varios nombres de usuario en una l�nea diferente.',
	'YOUR_FOES' => 'Sus ignorados',
	'YOUR_FOES_EXPLAIN' => 'Para borrar usuarios seleccione los que desea y presione enviar.<br />Nota: utilice CTRL para seleccionar/deseleccionar m�ltiples cuentas.',
	'FOE_MESSAGE' => 'Mensaje de ignorado',
	'FOES_EXPLAIN' => 'Ignorados son usuarios que ser�n ignorados por defecto. Mensajes por esos usuarios no ser�n completamente visibles. Mensajes personales de ignorados siguen siendo permitidos. Por favor, tenga en cuenta que no puede ignorar moderadores o administradores.',
	'FOES_UPDATED' => 'Su lista de ignorados ha sido actualizada correctamente.',
	'FOES_UPDATE_ERROR' => 'Su lista de ignorados NO ha sido actualizada.',
	'NO_FOES' => 'Actualmente no hay ignorados definidos',

	'ADD_FRIENDS' => 'A�adir nuevos amigos',
	'ADD_FRIENDS_EXPLAIN' => 'Puede introducir varios nombres de usuario en una l�nea diferente.',
	'YOUR_FRIENDS' => 'Sus amigos',
	'YOUR_FRIENDS_EXPLAIN' => 'Para borrar usuarios seleccione los que desea y presione enviar.<br />Nota: utilice CTRL para seleccionar/deseleccionar m�ltiples cuentas.',
	'FRIEND_MESSAGE' => 'Mensaje de amigo',
	'FRIENDS' => 'Amigos',
	'FRIENDS_EXPLAIN' => 'Los amigos le permite tener acceso r�pido con usuarios y comunicarse con frecuencia. Si la plantilla lo soporta, sus amigos ser�n destacados visualmente.',
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

	'WARN_NO_BUMP' => 'Eres el �ltimo usuario que ha enviado un mensaje en este tema: no puedo escribir nuevos mensajes antes de 24 horas desde su �ltimo mensaje.',

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
	'DETAILS_CHANGED' => '<b>Detalles del mensaje cambiados correctamente.</b></span><br /><span class="postdetails">Esta ventana se cerrar� en 3 segundos.',

	'Redirect' => 'Redireccionar',
	'Redirect_to' => 'Si su navegador no soporta la redirecci�n meta, por favor haga click %sAQU�% para ser redirigido',

	'InProgress' => 'En progreso',

	'HAPPY_BIRTHDAY' => 'Feliz cumplea�os',

	'DOWNLOAD' => 'Descargar',
	'DOWNLOADED' => 'Descargado',
	'FILESIZE' => 'Tama�o del archivo',
	'FILENAME' => 'Nombre del archivo',
	'FILE_NOT_AUTH' => 'No esta autorizado para descargar este archivo',
	'SHOW_POSTS_FROM' => 'Mostrar los mensajes de',
	'SHOW_POSTS_TO' => 'a',

	'SEE_MORE_DETAILS' => 'Ver m�s detalles...',
	'UNKNOWN' => 'Desconocido',
	'MASS_PM' => 'MP masivo',
	'TEXT_FORMAT' => 'Formato',
	'SENDER' => 'Remitente',
	'PM_NOTIFICATION' => 'Hola,<br /><br />Ha recibido un nuevo mensaje privado en su cuenta de "{SITENAME}".<br /><br />Puede ver su mensaje haciendo click en el siguiente enlace:<br /><br />{U_INBOX}<br /><br />',

	'GSEARCH' => 'B�squeda Google',
	'GSEARCH_ENGINE' => 'Utilizar sistema de b�squeda Google',
	'SEARCH_WHAT' => 'Buscar que',
	'SEARCH_WHERE' => 'Buscar en',
	'SEARCH_THIS_FORUM' => 'Buscar en este foro...',
	'SEARCH_THIS_TOPIC' => 'Buscar en este tema...',
	'VF_ALL_TOPICS' => 'Todos los temas',

	'WHITE_LIST_MESSAGE' => 'Este foro requiere confirmaci�n de cuenta a trav�s de e-mail. Por favor, verifique que este dominio est� en la lista blanca de su sistema de antispam o nunca recibir� el mensaje de activaci�n.',
	'CLICK_RETURN_HOME' => 'Pulse %saqu�%s para volver a la p�gina principal',

	'WEEK_DAY_SUNDAY' => 'Domingo',
	'WEEK_DAY_MONDAY' => 'Lunes',
	'WEEK_DAY_TUESDAY' => 'Martes',
	'WEEK_DAY_WEDNESDAY' => 'Mi�rcoles',
	'WEEK_DAY_THURSDAY' => 'Jueves',
	'WEEK_DAY_FRIDAY' => 'Viernes',
	'WEEK_DAY_SATURDAY' => 'S�bado',

	'RATINGS' => 'Valoraciones',

	'ERROR_TABLE' => 'No se ha podido consultar la tabla %s',

	'SMILEYS' => 'Emoticonos',
	'SMILEYS_NO_CATEGORIES' => 'No hay categor�as definidas',
	'SMILEYS_CATEGORY' => 'Categor�a',
	'SMILEYS_GALLERY' => 'Galer�a de emoticonos',
	'SMILEYS_STANDARD' => 'Emoticonos est�ndares',

	'QUICK_LIST' => 'Lista completa',
	'NORMAL_LIST' => 'Lista normal',

	'RETURN_PAGE' => '%sVolver a la p�gina anterior%s',
	'FILE_NOT_FOUND' => 'Archivo no encontrado',
	'FSOCK_DISABLED' => 'FSOCK deshabilitado',

	'MANAGEMENT' => 'Gesti�n',
	'SORT_ORDER' => 'Ordenar por',
	'SORT_DIR' => 'Direcci�n de ordenaci�n',

	'TIME_YEAR' => 'A�o',
	'TIME_MONTH' => 'Mes',
	'TIME_DAY' => 'D�a',
	'TIME_HOUR' => 'Hora',
	'TIME_MINUTE' => 'Minuto',
	'TIME_SECOND' => 'Segundo',

	'CONTACTS' => 'Contactos',

	// Event Registration - BEGIN
	'Reg_Title' => 'Registro de eventos',
	'Post_Registration' => 'Registro de eventos',
	'Add_registration' => 'A�adir nuevo evento',
	'Add_reg_explain' => '&nbsp;&bull; Marque <i>activar</i> para mostrar el formulario de registro para este mensaje. Desmarcar para ocultarlo.<br />&nbsp;&bull; Marque <i>reset</i> para eliminar todos los registros actuales del formulario.<br />&nbsp;&bull; Introduzca un n�mero en <i>registros</i> para limitarlos. "0" o en blanco = ilimitado.',
	'reg_activate' => 'Activar',
	'reg_reset' => 'Borrar',
	'Reg_Insert' => 'Se ha registrado en este evento.',
	'Reg_Change' => 'Registro cambiado.',
	'Reg_Confirm' => 'Registro confirmado.',
	'Reg_Unregister' => 'Registro cancelado.',
	'Reg_Max_Registrations' => 'Se ha superado el m�ximo de registros para esta opci�n. No se acceptan mas registros.',
	'Reg_No_Slots_Left' => 'Registros completos.',
	'Reg_One_Slot_Left' => 'Solo se permite un registro mas.',
	'Reg_Slots_Left' => 'A�n se permiten %s registros.',
	'Reg_Self_Unregister' => 'No registrado',
	'Reg_Own_Confirmation' => 'Confirmaci�n',
	'Reg_Own_Confirmed' => 'confirmado',
	'Reg_Green_Option' => 'Opci�n verde',
	'Reg_Blue_Option' => 'Opci�n azul',
	'Reg_Red_Option' => 'Opci�n roja',
	'Reg_Value_Max_Registrations' => 'Registros',
	'Reg_Do' => 'Registrarse',
	'Reg_Maybe' => 'No estoy seguro',
	'Reg_Dont' => 'No en este momento',
	'Reg_Head_Username' => 'Usuario:',
	'Reg_Head_Time' => 'Fecha:',
	'Reg_for' => 'Ejecutar el registro para',
	'Reg_for_explain' => '[ Introduzca 0 o deje en blanco para no poner fecha final de registro ]',
	'Reg_no_options_specified' => 'Debe especificar al menos una opci�n para registrarse.',
	'Reg_event_date' => '<b>Fecha del evento: </b>',
	// Event Registration - END

	'REPLY_PREFIX_OLD' => 'Re: ',
	'REPLY_PREFIX' => 'Re: ',

	'READ_ONLY_FORUM' => 'Lo sentimos, pero actualmente el foro solo funciona en <b>MODO DE LECTURA</b>, esto significa que no puede publicar nuevos mensajes. Int�ntelo mas tarde.',

	)
);

/*Special Cases, Do not bother to change for another language */
$lang['YES'] = $lang['Yes'];
$lang['NO'] = $lang['No'];
$lang['HL_File_Error'] = $lang['Error_File_Opening'];

$lang['Prune_commands'] = array();

// here you can make more entries if needed
$lang['Prune_commands'][0] = 'Borrar usuarios/as que no escriben';
$lang['Prune_explain'][0] = 'De quienes nunca han posteado, <b>Excluir</b> nuevos usuarios a partir de %d d�as';
$lang['Prune_commands'][1] = 'Borrar usuarios/as inactivos/as';
$lang['Prune_explain'][1] = 'De quienes nunca se han logueado, <b>Excluir</b> nuevos usuarios a partir de %d d�as';
$lang['Prune_commands'][2] = 'Borrar usuarios/as que no han activado su cuenta';
$lang['Prune_explain'][2] = 'De quienes nunca han activado su cuenta, <b>Excluir</b> nuevos usuarios a partir de %d d�as';
$lang['Prune_commands'][3] = 'Borrar usuarios/as que no nos visitan'; 
$lang['Prune_explain'][3] = 'De quienes no nos visitan desde hace 60 d�as, <b>Excluir</b> nuevos usuarios a partir de %d d�as'; 
$lang['Prune_commands'][4] = 'Borrar usuarios/as que no escriben regularmente'; 
$lang['Prune_explain'][4] = 'De quienes tienen menos de un 1 env�o por cada 10 d�as de registro, <b>Excluir</b> nuevos usuarios a partir de %d d�as';
$lang['Prune_commands'][5] = 'Borrar usuarios que no escriben y no visitan el foro';
$lang['Prune_explain'][5] = 'De quieres nunca han enviado un mensaje y no han visitado el foro recientemente, <b>excluyendo</b> los nuevos usuarios de los �ltimos %d d�as';

// Timezones - BEGIN
$lang['All_times'] = 'Todas las horas son %s'; // eg. All times are GMT - 12 Hours (times from next block)

// Time zones short
$lang['tzs']['-12'] = 'GMT - 12 horas';
$lang['tzs']['-11'] = 'GMT - 11 horas';
$lang['tzs']['-10'] = 'GMT - 10 horas';
$lang['tzs']['-9'] = 'GMT - 9 horas';
$lang['tzs']['-8'] = 'GMT - 8 horas';
$lang['tzs']['-7'] = 'GMT - 7 horas';
$lang['tzs']['-6'] = 'GMT - 6 horas';
$lang['tzs']['-5'] = 'GMT - 5 horas';
$lang['tzs']['-4'] = 'GMT - 4 horas';
$lang['tzs']['-3.5'] = 'GMT - 3.5 horas';
$lang['tzs']['-3'] = 'GMT - 3 horas';
$lang['tzs']['-2'] = 'GMT - 2 horas';
$lang['tzs']['-1'] = 'GMT - 1 hora';
$lang['tzs']['0'] = 'GMT';
$lang['tzs']['1'] = 'GMT + 1 hora';
$lang['tzs']['2'] = 'GMT + 2 horas';
$lang['tzs']['3'] = 'GMT + 3 horas';
$lang['tzs']['3.5'] = 'GMT + 3.5 horas';
$lang['tzs']['4'] = 'GMT + 4 horas';
$lang['tzs']['4.5'] = 'GMT + 4.5 horas';
$lang['tzs']['5'] = 'GMT + 5 horas';
$lang['tzs']['5.5'] = 'GMT + 5.5 horas';
$lang['tzs']['6'] = 'GMT + 6 horas';
$lang['tzs']['6.5'] = 'GMT + 6.5 horas';
$lang['tzs']['7'] = 'GMT + 7 horas';
$lang['tzs']['8'] = 'GMT + 8 horas';
$lang['tzs']['9'] = 'GMT + 9 horas';
$lang['tzs']['9.5'] = 'GMT + 9.5 horas';
$lang['tzs']['10'] = 'GMT + 10 horas';
$lang['tzs']['11'] = 'GMT + 11 horas';
$lang['tzs']['12'] = 'GMT + 12 horas';
$lang['tzs']['13'] = 'GMT + 13 horas';

// These are displayed in the timezone select box
$lang['tz']['-12'] = '(GMT -12 horas) Eniwetok, Kwajalein';
$lang['tz']['-11'] = '(GMT -11 horas) Midway Island, Samoa';
$lang['tz']['-10'] = '(GMT -10 horas) Hawaii';
$lang['tz']['-9'] = '(GMT -9 horas) Alaska';
$lang['tz']['-8'] = '(GMT -8 horas) Pacific Time (US &amp; Canada)';
$lang['tz']['-7'] = '(GMT -7 horas) Mountain Time (US &amp; Canada)';
$lang['tz']['-6'] = '(GMT -6 horas) Central Time (US &amp; Canada), Mexico City';
$lang['tz']['-5'] = '(GMT -5 horas) Eastern Time (US &amp; Canada), Bogota, Lima, Quito';
$lang['tz']['-4'] = '(GMT -4 horas) Atlantic Time (Canada), Caracas, La Paz';
$lang['tz']['-3.5'] = '(GMT -3.5 horas) Newfoundland';
$lang['tz']['-3'] = '(GMT -3 horas) Brazil, Buenos Aires, Georgetown';
$lang['tz']['-2'] = '(GMT -2 horas) Mid-Atlantic';
$lang['tz']['-1'] = '(GMT -1 hora) Azores, Cape Verde Islands';
$lang['tz']['0'] = '(GMT) Western Europe Time, London, Lisbon, Casablanca, Monrovia';
$lang['tz']['1'] = '(GMT +1 hora) CET(Central Europe Time), Brussels, Madrid, Paris';
$lang['tz']['2'] = '(GMT +2 horas) EET(Eastern Europe Time), Kaliningrad, South Africa';
$lang['tz']['3'] = '(GMT +3 horas) Baghdad, Kuwait, Riyadh, Moscow, St. Petersburg';
$lang['tz']['3.5'] = '(GMT +3.5 horas) Tehran';
$lang['tz']['4'] = '(GMT +4 horas) Abu Dhabi, Muscat, Baku, Tbilisi';
$lang['tz']['4.5'] = '(GMT +4.5 horas) Kabul';
$lang['tz']['5'] = '(GMT +5 horas) Ekaterinburg, Islamabad, Karachi, Tashkent';
$lang['tz']['5.5'] = '(GMT +5.5 horas) Bombay, Calcutta, Madras, New Delhi';
$lang['tz']['5.75'] = '(GMT +5.75 horas) Kathmandu';
$lang['tz']['6'] = '(GMT +6 horas) Almaty, Dhaka, Colombo';
$lang['tz']['6.5'] = '(GMT +6.5 horas)';
$lang['tz']['7'] = '(GMT +7 horas) Bangkok, Hanoi, Jakarta';
$lang['tz']['8'] = '(GMT +8 horas) Beijing, Perth, Singapore, Hong Kong, Urumqi';
$lang['tz']['9'] = '(GMT +9 horas) Tokyo, Seoul, Osaka, Sapporo, Yakutsk';
$lang['tz']['9.5'] = '(GMT +9.5 horas) Adelaide, Darwin';
$lang['tz']['10'] = '(GMT +10 horas) EAST(East Australian Standard), Guam';
$lang['tz']['11'] = '(GMT +11 horas) Magadan, Solomon Islands, New Caledonia';
$lang['tz']['12'] = '(GMT +12 horas) Auckland, Fiji, Kamchatka, Marshall Island';
$lang['tz']['13'] = '(GMT +13 horas) Nuku\'alofa';
// Timezones - END

$lang['datetime']['Sunday'] = 'Domingo';
$lang['datetime']['Monday'] = 'Lunes';
$lang['datetime']['Tuesday'] = 'Martes';
$lang['datetime']['Wednesday'] = 'Mi�rcoles';
$lang['datetime']['Thursday'] = 'Jueves';
$lang['datetime']['Friday'] = 'Viernes';
$lang['datetime']['Saturday'] = 'S�bado';
$lang['datetime']['Sun'] = 'Dom';
$lang['datetime']['Mon'] = 'Lun';
$lang['datetime']['Tue'] = 'Mar';
$lang['datetime']['Wed'] = 'Mi�';
$lang['datetime']['Thu'] = 'Jue';
$lang['datetime']['Fri'] = 'Vie';
$lang['datetime']['Sat'] = 'S�b';
$lang['datetime']['January'] = 'Enero';
$lang['datetime']['February'] = 'Febrero';
$lang['datetime']['March'] = 'Marzo';
$lang['datetime']['April'] = 'Abril';
$lang['datetime']['May'] = 'Mayo';
$lang['datetime']['June'] = 'Junio';
$lang['datetime']['July'] = 'Julio';
$lang['datetime']['August'] = 'Agosto';
$lang['datetime']['September'] = 'Septiembre';
$lang['datetime']['October'] = 'Octubre';
$lang['datetime']['November'] = 'Noviembre';
$lang['datetime']['December'] = 'Diciembre';
$lang['datetime']['JAN'] = 'Ene';
$lang['datetime']['FEB'] = 'Feb';
$lang['datetime']['MAR'] = 'Mar';
$lang['datetime']['APR'] = 'Abr';
$lang['datetime']['MAY'] = 'May';
$lang['datetime']['JUN'] = 'Jun';
$lang['datetime']['JUL'] = 'Jul';
$lang['datetime']['AUG'] = 'Ago';
$lang['datetime']['SEP'] = 'Sep';
$lang['datetime']['OCT'] = 'Oct';
$lang['datetime']['NOV'] = 'Nov';
$lang['datetime']['DEC'] = 'Dic';

// NOTE: Please do not translate the following 4 lines!
// They are automatically translated into your language
$lang['day_short'] = array($lang['datetime']['Sun'], $lang['datetime']['Mon'], $lang['datetime']['Tue'], $lang['datetime']['Wed'], $lang['datetime']['Thu'], $lang['datetime']['Fri'], $lang['datetime']['Sat']);
$lang['day_long'] = array($lang['datetime']['Sunday'], $lang['datetime']['Monday'], $lang['datetime']['Tuesday'], $lang['datetime']['Wednesday'], $lang['datetime']['Thursday'], $lang['datetime']['Friday'], $lang['datetime']['Saturday']);
$lang['month_short'] = array($lang['datetime']['JAN'], $lang['datetime']['FEB'], $lang['datetime']['MAR'], $lang['datetime']['APR'], $lang['datetime']['MAY'], $lang['datetime']['JUN'], $lang['datetime']['JUL'], $lang['datetime']['AUG'], $lang['datetime']['SEP'], $lang['datetime']['OCT'], $lang['datetime']['NOV'], $lang['datetime']['DEC']);
$lang['month_long'] = array($lang['datetime']['January'], $lang['datetime']['February'], $lang['datetime']['March'], $lang['datetime']['April'], $lang['datetime']['May'], $lang['datetime']['June'], $lang['datetime']['July'], $lang['datetime']['August'], $lang['datetime']['September'], $lang['datetime']['October'], $lang['datetime']['November'], $lang['datetime']['December']);

//$lang[''] = '';

//====================================================
// Do not insert anything below this line
//====================================================

?>