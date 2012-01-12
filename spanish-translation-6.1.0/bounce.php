<?php

/**
* Language file variables for the jobs bouncing area.
*
* @see GetLang
*
* @version     $Id: bounce.php,v 1.24 2008/03/05 03:02:59 scott Exp $
* @author Chris <chris@interspire.com>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the jobs bouncing area... Please backup before you start!
*/

// we need some variables from the lists language file.
require_once(dirname(__FILE__) . '/lists.php');

define('LNG_BadLogin_Details', 'No se ha podido iniciar sesión usando los detalles introducidos, el servidor devolvió el siguiente error: %s<br/>Por favor verifica los detalles y vuelve a intentarlo.');

define('LNG_Bounce_No_ImapSupport_Heading', 'Procesar emails rebotados');

define('LNG_Bounce_Step1', 'Procesar emails rebotados');
define('LNG_Bounce_CancelPrompt', '\u00BFSeguro que quieres cancelar el procesamiento de los emals rebotados?');

define('LNG_Bounce_Step2', 'Procesar emails rebotados');

define('LNG_Bounce_Step3', 'Procesar emails rebotados');
define('LNG_StartProcessing', 'Empezar procesamiento');

define('LNG_BounceUsername', LNG_ListBounceUsername);
define('LNG_HLP_BounceUsername', 'Introduze el nombre de usuario para la cuenta de rebotados.<br/>Esto puede ser \\\'usuario\\\' o \\\'usuario@dominio.com\\\' dependiendo del proveedor.');

define('LNG_BouncePassword', LNG_ListBouncePassword);
define('LNG_HLP_BouncePassword', 'Introduze la contraseña para la cuenta email de los rebotados.');

define('LNG_BounceResults_InProgress_Message', 'Por favor espera mientras intentamos procesar %s email(s) encontrados en la cuenta...');

define('LNG_BounceResults_InProgress_HardBounces_Many', '%s rebotes duros han sido encontrados hasta la fecha');
define('LNG_BounceResults_InProgress_HardBounces_One', '1 rebote duro ha sido encontrado hasta la fecha');

define('LNG_BounceResults_InProgress_SoftBounces_Many', '%s rebotes suaves han sido encontrados hasta la fecha');
define('LNG_BounceResults_InProgress_SoftBounces_One', '1 rebote suave ha sido encontrado hasta la fecha');

define('LNG_BounceResults_InProgress_EmailsIgnored_Many', '%s emails han sido ignorados hasta la fecha.');
define('LNG_BounceResults_InProgress_EmailsIgnored_One', '1 email ha sido ignorado hasta la fecha.');

define('LNG_BounceResults_HardBounces_Many', '%s emails han sido procesados como "rebote duro"');
define('LNG_BounceResults_HardBounces_One', '1 email ha sido procesado como "rebote duro"');

define('LNG_BounceResults_SoftBounces_Many', '%s emails han sido procesados como "rebote suave"');
define('LNG_BounceResults_SoftBounces_One', '1 email ha sido procesado como "rebote suave"');

define('LNG_BounceResults_Finished', 'Procesar emails rebotados');
define('LNG_BounceResults_Message_Multiple', '%s emails han sido encontrados en la cuenta email.');
define('LNG_BounceResults_Message_One', '1 email ha sido encontrado en la cuenta email.');

define('LNG_ViewBounceStatistics', 'Ver estadísticas rebotados');

/**
**************************
* Changed/Added in NX1.0.5
**************************
*/

define('LNG_BounceServer', LNG_ListBounceServer);
define('LNG_HLP_BounceServer', 'Introduze el nombre del servidor email al cual conectar y procesar los emails rebotados. Este puede ser en formato de sólo nombrehost o puede incluir un puerto alternativo con nombrehost:puerto');

define('LNG_AddOwnBounceRules', '<br/>Tu o tu administrador puede modificar las reglas de de rebotados usadas editando el archivo admin/resources/user_bounce_rules.php.');

define('LNG_BounceDetailsSaved', 'Detalles servidor de emails rebotados guardados con éxito.');


/**
**************************
* Changed/Added in NX1.0.7
**************************
*/
define('LNG_BounceResults_InProgress_Progress', 'Procesando %s de %s emails');

/**
**************************
* Changed/Added in NX 1.3
**************************
*/
define('LNG_BounceLogin_Successful', 'Se ha iniciado sesión con éxito en la cuenta email.');
define('LNG_Bounce_TestHeading', 'Probar configuración email rebotados');

define('LNG_Bounce_StartTesting', 'Probando tu cuenta de "rebotados"... <br />Este proceso puede llegar a tardar 2 minutos...');

/**
**************************
* Changed/Added in NX 1.4
**************************
*/
define('LNG_BounceResults_InProgress_EmailsDeleted_Many', '%s emails han sido limpiados hasta la fecha.');
define('LNG_BounceResults_InProgress_EmailsDeleted_One', '1 email ha sido limpiado hasta la fecha.');

define('LNG_BounceResults_EmailsIgnored_Many', '%s emails han sido ignorados en la cuenta email. Estos pueden ser mensajes no relacionados con los rebotes (por ejemplo, spam) o no concuerdan con ninguna de las reglas de procesamiento de rebotados.' . LNG_AddOwnBounceRules);
define('LNG_BounceResults_EmailsIgnored_One', '1 email ha sido ignorado en la cuenta email. Este puede ser un mensaje no relacionado con los rebotes (por ejemplo, spam) o no concuerda con ninguna de las reglas de procesamiento de rebotados' . LNG_AddOwnBounceRules);

define('LNG_BounceResults_EmailsDeleted_Many', '%s emails han sido limpiados en la cuenta email. Seguramente son autorespuestas (por ejemplo, fuera de oficina).');
define('LNG_BounceResults_EmailsDeleted_One', '1 email ha sido limpiado en la cuenta email. Seguramente sea una autorespuesta (por ejemplo, fuera de oficina).');

define('LNG_AgreeToDelete', 'Debes estar deacuerdo que los mensajes serán eliminados de tu bandeja de entrada antes de poder proceder.');

define('LNG_BounceResults_Intro', 'Los emails rebotados de tu cuenta han sido procesados con éxito.');

/**
**************************
* Changed/Added in NX 1.4.1
**************************
*/
// these first two are used by cron bounce processing.
define('LNG_BadLogin_Subject_Cron', 'Detalles inválidos de inicio de sesión para el procesamiento de rebotados');


/**
**************************
* Changed/Added in 5.0.0
**************************
*/
define('LNG_BadLogin_Details_Cron', "El procesamiento automático de emails rebotados ha intentado iniciar sesión en la cuenta email (nombre de usuario '%s' en el servidor email '%s') pero fue incapaz.\n\nHa recibido el siguiente mensaje de error: '%s'.\n\nInicia sesión al panel de control aquí: %s\n\nEdita la lista de contactos aquí: %s\n\Entonces comprueba que el nombre de usuario, contraseña y el servidor email sean correctos. Puede que necesites usar las opciones de 'Configuración extra email' para corregir el error.\n\nUna vez que lo hayas hecho, haz clic en el botón 'Testear configuración rebotados' para comprobar que funciona.\n\nUna vez hayas confirmado que los detalles funcionan correctamente, haz clic en 'Guardar' para asegurarte que tus cambios son guardados.\n");

define('LNG_BounceAccountEmpty', 'Esta cuenta email no contiene ningún email que procesar.');
define('LNG_Bounce_No_ImapSupport_Intro', 'Tu servidor no tiene instalado el módulo requerido para procesar rebotados. Por favor contacta con tu proveedor de alojamiento o administrador de sistemas y pideles que te instalen el módulo "PHP-IMAP".<br/>Para más infomación, ver <a href="http://www.php.net/imap" target="_blank">esta página</a> en el sitio web de PHP.');
define('LNG_Bounce_Step3_Intro', 'Haz clic en el botón de abajo para comprobar y procesar los emails rebotados en la cuenta email que has introducido.');
define('LNG_HLP_SaveBounceServerDetails', '¿Quieres guardar los detalles del servidor de los emails rebotados para esta campaña y así no tener que volver a introducirlos? Si es así, marca esta casilla.');
define('LNG_Bounce_Step2_Intro', 'Procesando los emails rebotados, puedes remover aquellos contactos de tu lista que tengan una dirección de email inválida, no puedan recibir emails por tener la bandeja de entrada llena, etc.');

define('LNG_SelectAContactList', 'Selecciona una lista de contactos');

define('LNG_SelectContactList_Explain', 'Procesar los emails rebotados para');

/**
*************************
* Changed/added in 5.5.0
*************************
*/
// This warning is deprecated for 5.6.
define('LNG_ExplainBounceDeleteAll', 'Warning: This option is dangerous to use if multiple lists use the same bounce account. <a href="#" onClick="LaunchHelp(\'%%WHITELABEL_INFOTIPS%%\',\'845\'); return false;">Why?</a>');

/**
*************************
* Changed/added in 5.6.0
*************************
*/

define('LNG_SaveBounceServerDetails','Save Bounce Server Details?');
define('LNG_SaveBounceServerDetailsExplain','Yes, save these details so I don\'t have to re-enter them');

define('LNG_Bounce_NoLists', 'No Contact Lists have been created. Please create a contact list before processing bounces.');
define('LNG_Bounce_CreateList', 'Create a Contact List...');

define('LNG_Bounce_Step1_Intro', 'Processing bounced emails will clear your list of bad email addressess and reduce the chance of your mail server being blacklisted.');

define('LNG_SelectBounceEmail', 'Process Bounces for');
define('LNG_WhyListsGrouped', 'Why are multiple lists grouped together?');
define('LNG_BounceProcessHelp', 'Bounce Processing Help');
define('LNG_HLP_SelectBounceEmail', 'Select a list or group of lists to process bounce emails for.<br /><br />Lists with common bounce details are grouped together and can be processed at the same time.');
define('LNG_Bounce_PleaseChooseList', 'Please choose a list first.');

define('LNG_BounceIWouldLikeTo', 'I Would Like to');
define('LNG_Bounce_Auto_Process', 'Process bounces automatically (recommended - <a href="#" id="auto_explain">why?</a>)');
define('LNG_Bounce_Auto_Process_Steps', 'To have bounced emails processed automatically, follow these steps');
define('LNG_Bounce_Auto_Process_Step1', 'Go to the <a href="%s" target="_blank">edit page</a> for the "%s" list');
define('LNG_Bounce_Auto_Process_Step2', 'Click the "Bounce Account Details" checkbox and fill in the details');
define('LNG_Bounce_Auto_Process_Step3', 'Setup the cron script on your web server');
define('LNG_Bounce_Auto_Process_Step4', 'Enable bounce processing on the "<a href="%s" target="_blank">Cron Settings</a>" page');
define('LNG_Bounce_Auto_Process_Step5', 'Congratulations, you have just setup automatic bounce processing!');
define('LNG_Bounce_Auto_Button', 'OK, Thanks for the Help');

define('LNG_Bounce_Why_Group_Lists', 'Lists with the same bounce server and username are grouped together. This is because bounce emails from these lists go into the same mailbox, so can be processed at the same time.');
define('LNG_Bounce_Why_Use_Auto', 'Automatic bounce processing is more reliable because it is not susceptible to web browser timeouts. It only needs to be set up once, so it will run even if forgotten about.');
define('LNG_Bounce_Why_Not_Manual', 'Manual bounce processing is susceptible to web browser timeouts, so it may not complete. Also, it needs to be run regularly and forgetting to do so could lead to the sending sever being blacklisted.');
define('LNG_Bounce_Auto_Process_Why', 'Why is automatic bounce processing recommended?');
define('LNG_Bounce_Manual_Process_Why', 'Why is manual bounce processing not recommended?');
define('LNG_Bounce_Manual_Process', 'Process bounces manually (not recommended - <a href="#" id="manual_explain">why?</a>)');

define('LNG_Bounce_Help_HowTo', 'Read the bounce processing "How to" guide for step-by-step help');
define('LNG_Bounce_Help_Work', 'How does bounce processing work?');
define('LNG_Bounce_Help_Customise', 'How to customize bounce processing rules yourself');
define('LNG_Bounce_Help_Gmail', 'Can I use a Gmail account to handle bounced emails');
define('LNG_Bounce_Help_More', 'See more bounce processing help');

define('LNG_Bounce_Connecting', 'Connecting to Mail Server...');
define('LNG_Bounce_Connecting_Msg', 'Please wait while we attempt to connect to your mail server.');
define('LNG_Bounce_Connecting_To', 'Connecting to %s...');

define('LNG_Bounce_Connection_Failed', 'We were unable to login to your mail server (%s). The error message and possible solutions are shown below.');
define('LNG_Bounce_Connection_Success', 'A connection to your mail server (%s) was established successfully! Click the button below to find bounces now.');
define('LNG_Bounce_Find_Email_Step', 'Process Bounces for %s');
define('LNG_Bounce_Remove_Contact_Step', 'Process Bounces for %s');
define('LNG_Bounce_Review_Settings', '<< Review Bounce Settings');
define('LNG_Bounce_Find_Bounces', 'Find Bounces >>');
define('LNG_Bounce_Finding_Bounces', 'Finding Bounces...');
define('LNG_Bounce_Attempt_To_Find', 'Please wait as we attempt to find bounced emails. Do not close this window.');

define('LNG_Bounce_Help_PossibleSolutions', 'Possible solutions are shown below. Click on a link for more information:');
define('LNG_Bounce_Help_PossibleSolutions_Unknown', "We weren't able to find specific information regarding this error but possible solutions are shown below:");

define('LNG_Bounce_Error_Unknown', '(An Unknown Error Has Occurred)');

define('LNG_Bounce_Error_CertFailure', 'SSL Certificate Has Expired Or Is Invalid');
define('LNG_Bounce_Help_CertFailure1', 'Use the "Do not validate certificate" option');

define('LNG_Bounce_Error_InvalidServer', 'Invalid Server');
define('LNG_Bounce_Help_InvalidServer1', 'Double-check the bounce server name');

define('LNG_Bounce_Error_TimeOut', 'Connection Timed Out');
define('LNG_Bounce_Help_TimeOut1', 'Verify your server is not firewalled');
define('LNG_Bounce_Help_TimeOut2', 'Try using a different protocol or port combination');

define('LNG_Bounce_Error_LoginFailed', 'Login Failed');
define('LNG_Bounce_Help_LoginFailed1', 'Check your username and password');

define('LNG_Bounce_Error_ConnRefused', 'Connection Refused');

define('LNG_Bounce_Error_SSLFailed', 'SSL Negotiation Failed');
define('LNG_Bounce_Help_SSLFailed1', 'Try using the "Do not use SSL" and/or the "Do not use TLS" options');

define('LNG_Bounce_Error_InvalidSpec', 'Invalid Remote Specification');
define('LNG_Bounce_Help_InvalidSpec1', 'The PHP software on your server may need SSL support enabled');

define('LNG_Bounce_Found_None_Summary', 'No hard or soft bounce emails were found. There are %d other emails to delete.');
define('LNG_Bounce_Found_Summary', '<b>%s</b> bounced emails were found. There are <b>%s hard bounces</b> and <b>%s soft bounces</b>. You can flag them as inactive or remove them from your list(s) below.');
define('LNG_Bounce_Flag_Hard_Bounces_Inactive', 'Flag Hard Bounces as Inactive (Recommended)');
define('LNG_Bounce_Delete_Hard_Bounces', 'Permanently Delete Hard Bounces From My List(s)');
define('LNG_Bounce_Flag_Soft_Bounces_Inactive', 'Flag Soft Bounces as Inactive (Not Recommended)');
define('LNG_Bounce_Flag_Hard_Bounces_Inactive_Intro', 'A hard bounce indicates an email address for a contact which is invalid or does not exist. <br />Choose this option to mark hard bounces as inactive so you do not send to those contacts again.');
define('LNG_Bounce_Flag_Soft_Bounces_Inactive_Intro', 'A soft bounce indicates a temporary problem, such as a full inbox or deliverability issues.<br />Choose this option to mark soft bounces as inactive so you do not send to those contacts again.');
define('LNG_Bounce_Delete_Hard_Bounces_Intro', 'A hard bounce indicates an email address for a contact which is invalid or does not exist. <br />Choose this option to permanently delete all contacts whose email addresses are invalid.');
define('LNG_Bounce_Process_Now', 'Process Bounces Now');
define('LNG_Bounce_Delete_Now', 'Delete Emails Now');
define('LNG_BounceResults_InProgress', 'Processing Bounces...');
define('LNG_Bounce_PleaseChooseOption', 'Please choose at least one option for processing bounces.');

define('LNG_Bounce_Process_Success', '<b>%d bounces</b> have been processed successfully. Click the button below to process bounces for another list.');
define('LNG_Bounce_Process_Once_More', 'Process Bounces for Another List');
define('LNG_Bounce_Process_Finished', 'I\'m Finished');
define('LNG_Bounce_Finished_Step', 'Process Bounces for %s');
