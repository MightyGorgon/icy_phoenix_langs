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
* Chris Lennert - (calennert@users.sourceforge.net) - (http://lennertmods.sourceforge.net)
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

$lang = array_merge($lang, array(
	'BBUS_Mod_Title' => 'Estad&iacute;sticas del uso del foro',
	'BBUS_Misc' => 'Miscel&aacute;nea',

	'BBUS_ColHeader_PostRate' => 'Valorar mensaje',
	'BBUS_ColHeader_PctUTP' => '%UTP',
	'BBUS_ColHeader_PctUTUP' => '%UTUP',
	'BBUS_ColHeader_NewTopics' => 'Nuevos temas',
	'BBUS_ColHeader_TopicRate' => 'Valorar tema',
	'BBUS_ColHeader_Topics_Watched' => 'Observados',
	'BBUS_ColHeader_Header' => 'Cabecera',
	'BBUS_ColHeader_Description' => 'Descripci&oacute;n',

	'BBUS_ColHeader_Posts_Explain' => 'N&uacute;mero total de mensajes.',
	'BBUS_ColHeader_PostRate_Explain' => 'Media de mensajes por d&iacute;a.',
	'BBUS_ColHeader_PctUTP_Explain' => 'Porcentaje de usuario\'s n&uacute;mero total de mensajes.',
	'BBUS_ColHeader_PctUTUP_Explain' => 'Porcentaje de usuario\'s n&uacute;mero total de mensajes no borrados.',
	'BBUS_ColHeader_NewTopics_Explain' => 'N&uacute;mero total de nuevos temas hechos por el usuario.',
	'BBUS_ColHeader_TopicRate_Explain' => 'Media de los nuevos temas hechos por d&iacute;a.',
	'BBUS_ColHeader_Topics_Watched_Explain' => 'N&uacute;mero total de temas observados.',

	'BBUS_Col_Descriptions_Caption' => 'Descripci&oacute;n de la columna',

	'BBUS_Msg_NoPosts' => 'El usuario no tiene mensajes en ning&uacute;n foro.',
	'BBUS_Unpruned_Posts' => 'Total mensajes borrados',
	'BBUS_Scale_By' => 'Ratio por:',

// Admin Configuration page
	'BBUS_Settings_Caption' => 'Ajuste de las estad&iacute;sticas del foro',
	'BBUS_Settings_Explain' => 'Con estos ajustes podr&aacute; configurar c&oacute;mo ver&aacute;n los usuarios las estad&iacute;sticas de cada usuario en su perfil, y configurar varios ajustes.', 

	'BBUS_Setting_ViewLevel_Caption' => 'Nivel para poder ver las estad&iacute;sticas',
	'BBUS_Setting_ViewLevel_Note' => '<i>Nota</i>: Textbox es s&oacute;lo para lectura.<br />Use los checkboxes para modificar los valores.',

	'BBUS_Setting_ViewLevel_Explain1' => 'Los ajustes de nivel son varios valores con los que se mostrar&aacute; la informaci&oacute;n de las estad&iacute;sticas. <b>Use los checkboxes para habilitar o deshabilitar ciertas caracter&iacute;sticas.</b><br /><br />Los niveles de acceso son los siguientes:<br />',

	'BBUS_Setting_ViewLevel_Explain2' => '<br />Lo m&aacute;s normal es 24 (16 + 8), que permite a administradores y moderadores seguir las estad&iacute;sticas completas del foro, mientras que a los usuarios se les muestra el perfil de siempre.<br /><br /><strong>Es lo recomendado para no sobrecargar el servidor ante muchas peticiones de estad&iacute;sticas por parte de numerosos usuarios a la vez.</strong>',

	'BBUS_Setting_ViewOptions_Caption' => 'Opciones a mostrar',
	'BBUS_Setting_ViewOptions_Note' => '<i>Nota</i>: Textbox es s&oacute;lo para lectura. <br/>Use los checkboxes para modificar los valores.',
	'BBUS_Setting_ViewOptions_Explain1' => 'Como los ajustes de nivel, las opciones de mostrar son varios valores con los que se mostrar&aacute; la informaci&oacute;n de las estad&iacute;sticas.  <b>Use los checkboxes para habilitar o deshabilitar ciertas caracter&iacute;sticas.</b><br/><br/>Los niveles de acceso son los siguientes:<br/>',
	'BBUS_Setting_ViewOptions_Explain2' => '',

	'BBUS_Settings_Default_Post_Rate_Scaling_Caption' => 'Ratio por defecto en los mensajes',
	'BBUS_Settings_Default_Post_Rate_Scaling_Explain' => 'Aplica el n&uacute;mero de ratio para la columna de estad&iacute;sticas de los mensajes.',

	'BBUS_Settings_Default_Topic_Rate_Scaling_Caption' => 'Ratio por defecto en los temas',
	'BBUS_Settings_Default_Topic_Rate_Scaling_Explain' => 'Aplica el n&uacute;mero de ratio para la columna de estad&iacute;sticas de los temas.',

	'BBUS_ViewLevel_Anonymous_Caption' => 'An&oacute;nimo',
	'BBUS_ViewLevel_Self_Caption' => 'Uno mismo', 
	'BBUS_ViewLevel_Users_Caption' => 'Usuarios',
	'BBUS_ViewLevel_Moderators_Caption' => 'Moderadores',
	'BBUS_ViewLevel_Admins_Caption' => 'Administradores',
	'BBUS_ViewLevel_SpecialGrp_Caption' => 'Grupo especial',

	'BBUS_ViewLevel_Anonymous_Explain' => 'Permitir a los usuarios an&oacute;nimos ver estad&iacute;sticas.', 
	'BBUS_ViewLevel_Self_Explain' => 'Permitir a cada usuario ver sus estad&iacute;sticas.',  
	'BBUS_ViewLevel_Users_Explain' => 'Permitir a los usuarios ver las estad&iacute;sticas de otros usuarios.',
	'BBUS_ViewLevel_Moderators_Explain' => 'Permitir ver estad&iacute;sticas a los moderadores.',
	'BBUS_ViewLevel_Admins_Explain' => 'Permitir ver estad&iacute;sticas a los administradores (recomendado).',
	'BBUS_ViewLevel_SpecialGrp_Explain' => 'Permitir a un grupo designado especial ver estad&iacute;sticas.',

	'BBUS_ViewOption_Show_All_Forums_Caption' => 'Mostrar todos los foros sin tener en cuenta el n&uacute;mero de mensajes de los usuarios.',
	'BBUS_ViewOption_PCTUTUP_Column_Visible_Caption' => 'Mostrar la columna %UTUP en la tabla de estad&iacute;sticas',
	'BBUS_ViewOption_Misc_Section_Visible_Caption' => 'Mostrar la informaci&oacute;n de miscel&aacute;nea ', 
	'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Caption' => 'Mostrar los mensajes no borrados en la secci&oacute;n principal',
	'BBUS_ViewOption_Viewer_Scalable_PR_Caption' => 'Ver el n&uacute;mero de ratio de los mensajes', 
	'BBUS_ViewOption_Viewer_Scalable_TR_Caption' => 'Ver el n&uacute;mero de ratio de los temas',

	'BBUS_ViewOption_Show_All_Forums_Explain' => '',
	'BBUS_ViewOption_PCTUTUP_Column_Visible_Explain' => '',
	'BBUS_ViewOption_Misc_Section_Visible_Explain' => '',
	'BBUS_ViewOption_Misc_TotPrunedPosts_Visible_Explain' => '',
	'BBUS_ViewOption_Viewer_Scalable_PR_Explain' => '',
	'BBUS_ViewOption_Viewer_Scalable_TR_Explain' => '',

	'BBUS_Setting_SpecialGrp_Caption' => 'Acceso especial de grupo',
	'BBUS_Setting_SpecialGrp_Explain' => 'Asignar el grupo especial que tiene acceso a las estad&iacute;sticas.  <i>Nota</i>: S&oacute;lo funcionar&aacute; si est&aacute; activa la opci&oacute;n de \'Permitir grupo especial\'.',
	)
);

?>