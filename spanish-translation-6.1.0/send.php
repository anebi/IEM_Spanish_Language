<?php
/**
* Language file variables for the send management area.
*
* @see GetLang
*
* @version     $Id: send.php,v 1.36 2008/03/04 07:43:44 chris Exp $
* @author Chris <chris@interspire.com>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the send area... Please backup before you start!
*/

define('LNG_NoLiveNewsletters', 'None of your email campaigns are active.%s');

define('LNG_Send_CancelPrompt', 'Are you sure you want to cancel sending an email campaign?');


define('LNG_SendMailingList', LNG_MailingList);
define('LNG_HLP_SendMailingList', 'Haz clic en los nombres de las listas de contactos a las que quieras enviar la email campaña. Puedes enviar a múltiples listas simplemente haciendo clic en el nombre de cada una de ellas.');

define('LNG_Send_Step2_Intro', 'Use the form below to choose the recipients to receive this email campaign.');

define('LNG_NewsletterDetails', 'Email Campaign Details');


define('LNG_SendMultipart', '¿Enviar este email como multiparte?');
define('LNG_SendMultipartExplain', 'Sí, enviar este email como multiparte');

define('LNG_TrackOpens', '¿Rastrear emails HTML abiertos?');
define('LNG_TrackOpensExplain', 'Sí, rastrear los emails HTML abiertos');

define('LNG_TrackLinks', '¿Rastrear enlaces abiertos');
define('LNG_HLP_TrackLinks', 'Rastrear todos los enlaces abiertos de este email. Después de ser enviado el email, puedes ver los detalles de los enlaces abiertos desde la página de estadísticas.');
define('LNG_TrackLinksExplain', 'Sí, rastrear los enlaces abiertos de esta email campaña');

define('LNG_SelectNewsletterToSend', 'Por favor selecciona una email campaña');

define('LNG_SendImmediately', '¿Enviar tu email campaña ahora?');
define('LNG_HLP_SendImmediately', '¿Quieres enviar esta email campaña inmediatamente? Si no, deselecciona esta casilla y podrás escoger una fecha y hora concreta en la cual enviar la email campaña.');
define('LNG_SendImmediatelyExplain', 'Sí, enviar mi email campaña ahora (deseleccionar para programar envío)');

define('LNG_SelectNewsletterPreviewPrompt', 'Por favor selecciona una email campa\u00F1a primero.');
define('LNG_SelectNewsletterPrompt', 'Selecciona de la lista la email campa\u00F1a a enviar.');

define('LNG_ReadMore', '¿Por qué aproximadamente?');

define('LNG_EnterSendFromName','Please enter a \\\'From name\\\'');
define('LNG_EnterSendFromEmail','Please enter a \\\'From email\\\'');
define('LNG_EnterReplyToEmail','Please enter a \\\'Reply-To email\\\'');
define('LNG_EnterBounceEmail','Please enter a \\\'Bounce email\\\'');

define('LNG_CronSendOptions', 'Opciones de envío programado');
define('LNG_SendTime', 'Hora de envío');
define('LNG_SendDate', 'Fecha de envío');
define('LNG_HLP_SendTime', 'Seleccciona la hora y la fecha a la que quieras que tu email campaña sea enviada.');
define('LNG_NotifyOwner', '¿Notificar al propietario sobre el envío?');
define('LNG_HLP_NotifyOwner', '¿Notificar al propietario/s de la lista cuando el envío comienze y cuando termine?');
define('LNG_NotifyOwnerExplain', 'Sí, notificar al propietario/s de la lista cuando el envío comienze y termine');

define('LNG_StartSending', 'Enviar mi email campaña ahora');
define('LNG_Send_Step4_Intro', 'Para enviar tu email campaña ahora, simplemente haz clic en el botón <em>Enviar mi email campaña ahora</em>.');

define('LNG_Send_TotalRecipients', 'Será enviada a un total de <b>%s</b> contacto(s)');


define('LNG_Send_Step4_CronIntro', 'Para enviar tu email campaña usando el sistema de envío programado, simplemente haz clic en el botón <em>Programar envío<em> de abajo.');

define('LNG_Send_Step4_CannotSendInPast', 'Has intentado programar un envío en el pasado. Por favor escoge una fecha futura.');

define('LNG_Send_Step5', 'Tu email campaña está siendo enviada...');
define('LNG_Send_NumberLeft_One', '1 email está esperando a ser enviado');
define('LNG_Send_NumberLeft_Many', '%s emails aun están en la cola esperando a ser enviados');

define('LNG_Send_NumberSent_One', '1 email ha sido enviado a tu contactos hasta la fecha');
define('LNG_Send_NumberSent_Many', '%s emails han sido enviados a tu contactos hasta la fecha');

define('LNG_Send_TimeSoFar', '%s han pasado desde que empezaste el envío');
define('LNG_Send_TimeLeft', '%s faltan aún hasta que el envío termine');

define('LNG_Send_Finished', 'La email campaña seleccionada ha sido enviada. Ha tardado %s en completarse.');
define('LNG_SendReport_Intro', 'La email campaña seleccionada ha sido enviada. Ha tardado %s en completarse.');

define('LNG_PauseSending', 'Pausar envío (Siempre puedes continuar después)');
define('LNG_Send_Paused_Heading', 'Envío pausado');
define('LNG_Send_Paused_Success', 'El envio de tu email campaña ha sido pausado. Puedes reanudar el envóo haciendo clic en el enlace <em>Pausa<em> en la página de las <em>Email Campañas<m>');
define('LNG_Send_Paused_Failure', 'Algo ha fallado al intentar pausar el envóo de tu email campaña.');
define('LNG_Send_Paused', 'Puedes renaudar el envóo de tu email campaña desde la página "Ver email campañas".<br/>');

define('LNG_JobScheduled', 'El envío ha sido programado para el %s');
define('LNG_JobNotScheduled', 'Tu envío no ha sido programado para el %s');

define('LNG_SendFinished', 'El envóo de tu email campaña ha sido completado.');

define('LNG_ApproveScheduledSend', 'Programar envío');
define('LNG_CancelScheduledSend', 'No enviar mi email campaña');

/**
* different helptips for sending a newsletter for "date subscribed", "opened newsletter" and "clicked link".
*/
define('LNG_Send_FilterByDate', LNG_FilterByDate);

define('LNG_Send_OpenedNewsletter', LNG_OpenedNewsletter);

define('LNG_Send_ClickedOnLink', LNG_ClickedOnLink);


/**
**************************
* Changed/Added in NX 1.3
**************************
*/
define('LNG_Send_NewsletterSubject', 'El asunto de tu email campaña es <b>%s</b>');

define('LNG_Send_Step1', 'Enviar una email campaña');
define('LNG_Send_Step2', 'Enviar una email campaña');
define('LNG_Send_Step3', 'Enviar una email campaña');
define('LNG_SendNewsletter', 'Enviar una email campaña');
define('LNG_Send_Step4', 'Enviar una email campaña');

define('LNG_NoLiveNewsletters_HasAccess', ' Por favor dirigete a la página <a href="index.php?Page=Newsletters">Ver email campañas</a> y activa la email campaña.');

define('LNG_FilterOptions_Send', '¿A quién la quieres enviar?');
define('LNG_ShowFilteringOptions_Send', 'Quiero:');

/**
*************************
* Changed/Added in NX 1.4
*************************
*/
define('LNG_Send_Finished_Heading', 'Email Campaign Sending Report');

define('LNG_Send_Resend', 'Resend Your Email Campaign');
define('LNG_Send_Resend_Intro', 'To resend this email campaign to the recipients who didn\'t receive it the first time, click the "Start Sending" button below.');
define('LNG_Send_Resend_TotalRecipients', 'Total recipient(s) left to send to: %s');
define('LNG_Send_Resend_Count_One', 'You have tried to resend this email campaign 1 time. You can only resend this email campaign %s more times.');
define('LNG_Send_Resend_Count_One_OneLeft', 'You have tried to resend this email campaign 1 time. You can only resend this email campaign 1 more time.');
define('LNG_Send_Resend_Count_Many', 'You have tried to resend this email campaign %s times. You can only resend this email campaign %s more times.');
define('LNG_Send_Resend_Count_Many_OneLeft', 'You have tried to resend this email campaign %s times. You can only resend this email campaign 1 more time.');
define('LNG_Send_Resend_Count_Maximum', 'You have already tried to resend this email campaign %s times and you cannot send it any more. Please contact your system administrator.');

define('LNG_SendReport_Failure_Link', '<a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Click here for more information ]</a>');
define('LNG_SendReport_Failure_Reason_20', 'there was a problem with the mail server. Check with your system administrator to see if there if there is a problem with the mail server, or if there is a limit on the number of emails you are allowed to send per hour.');

define('LNG_SendProblem_Report_Invalid_Heading', 'Invalid Report');
define('LNG_SendProblem_Report_Invalid_Intro', 'The report you have chosen is invalid. Please try again');
define('LNG_SendProblem_InvalidReportURL', LNG_SendProblem_Report_Invalid_Intro);

define('LNG_SendProblem_Report_MailServer_Problem_Heading', 'Problem with mail server');

define('LNG_SendProblem_Report_SMTPMailServer_Problem_Heading', 'Problem with mail server');

define('LNG_Send_Step4_ChooseNewsletter', 'Please choose an email campaign to send.');

/**
*************************
* Changed/Added in NX 1.4.1
*************************
*/

define('LNG_Send_NoCronEnabled_Explain_NotAdmin', 'This email campaign will be sent immediately. If you\'d like the ability to schedule your email campaigns please contact your administrator.');

/**
*************************
* Changed/Added in NX 1.5
*************************
*/
define('LNG_HLP_SendNewsletter', '¿Qué email campaña te gustaría enviar a tus contactos?');

define('LNG_HLP_SendMultipart', 'Sending a multipart email will let the contacts email program decide which format (HTML or Text) to display the email in.<br/><br/>It is best to use this if you don\\\'t give your contacts a choice to which format they receive (e.g. they all subscribe as HTML), when they receive the email their email program will automatically show the correct format.<br/><br/>If unsure, leave this option ticked.');

define('LNG_HLP_TrackOpens', 'Track opening of emails when a contact receives an email. This only applies to HTML email campaigns.');

define('LNG_SendSize_One', 'Esta email campaña será enviada aproximadamente a 1 contacto.');

define('LNG_Send_SubscriberList', 'Tu email campaña será enviada a <b>%s</b>');

define('LNG_SendReport_Success_One', 'La email campaña seleccionada fue enviada con éxito a 1 contacto');
define('LNG_SendReport_Success_Many', 'La email campaña seleccionada fue enviada con éxito a %s contactos');

define('LNG_HLP_Send_FilterByDate', 'This option will allow you to only send to contacts who have subscribed before, after or between particular dates. To send to all contacts, leave this option unticked.');

define('LNG_HLP_Send_OpenedNewsletter', 'This option will allow you to send only to contacts who have opened a particular email campaign or autoresponder sent to this contact list. To send to all contacts, leave this option unticked.');

define('LNG_HLP_Send_ClickedOnLink', 'This option will allow you to send only to contacts who have clicked on a particular link in an email campaign or autoresponder that was sent to this contact list. To search for all contacts, leave this option unticked.');

define('LNG_SendShowFilteringOptionsExplain', 'Enviar un email a los contactos que cumplan con mi criterio de búsqueda de la(s) lista(s) seleccionada(s)');
define('LNG_SendDoNotShowFilteringOptionsExplain', 'Enviar un email a todos los contactos de la(s) lista(s) seleccionada(s)');

define('LNG_SendShowFilteringOptionsOneListExplain', 'Enviar un email a los contactos de mi lista que cumplan con mi criterio de búsqueda');
define('LNG_SendDoNotShowFilteringOptionsOneListExplain', 'Enviar un email a todos los contactos de de mi lista');

define('LNG_SendReport_Failure_One', 'The email campaign was not sent to 1 contact. Once the problem(s) have been fixed, you can resend your email campaign to this contact.');
define('LNG_SendReport_Failure_Many', 'The email campaign was not sent to %s contacts. Once the problem(s) have been fixed, you can resend your email campaign to these contacts.');

define('LNG_SendReport_Failure_Reason_Many', '%s contacts did not receive an email because %s');
define('LNG_SendReport_Failure_Reason_One', '1 contact did not receive an email because %s');
define('LNG_SendReport_Failure_Reason_1', 'there was a problem with their contact information. For example, they unsubscribed between when you started sending the email campaign and when we were trying to send to them.');

define('LNG_SendReport_Failure_Reason_10', 'they would have received a blank email. If you are sending a html only email campaign to a text only contact, there is nothing to send to this particular contact. Instead of sending a blank email, no email was sent. To fix this, go to "View Contacts", choose your contact list and search for contacts who are set to receive "Text" formatted emails. You will need to change them to receive HTML formatted emails.');

define('LNG_SendProblem_Report_Subscriber_Problem_Heading', 'Problem with contacts');
define('LNG_SendProblem_Report_Subscriber_Problem_Intro', 'The following contacts have been unsubscribed from your list before your email campaign was sent to them');

define('LNG_SendProblem_Report_Email_Problem_Heading', 'Problem with contacts');
define('LNG_SendProblem_Report_Email_Problem_Intro', 'The following contacts were not sent the email campaign because they are most likely set to receive Text-Only emails, they cannot receive HTML-only emails. You can edit your email campaign to include both a HTML version and a Text version, or you can edit the contacts to allow them to receive HTML emails.');

define('LNG_SendProblem_Report_MailServer_Problem_Intro', 'The following contacts were not sent an email because the mail server did not accept the email. This could be because the mail server was down or because your system administrator has set a limit on the number of emails you can send per hour. Please contact your system administrator or hosting company and see if they have a limit on the number of emails you can send per hour.');

define('LNG_SendProblem_Report_SMTPMailServer_Problem_Intro', 'The following contacts were not sent an email because the mail server did not accept the email. Please check your SMTP server details and try again. If you are unsure of this, please contact your system administrator.');

define('LNG_Send_Step5_KeepBrowserWindowOpen', '<div style="padding:10px; background-color:#FAD163">Please keep this browser window open. If you close it, your email campaign will stop sending which means some of your contacts will not receive your email.</div>');

define('LNG_Send_Step1_Intro', 'Antes de poder enviar una email campaña, por favor selecciona la(s) lista(s) deseada(s).');

define('LNG_Send_Step3_Intro', 'Rellena el formulario siguiente para enviar la email campaña. Si no estás seguro del significado de cualquier opción avanzada puedes saltartela.');

define('LNG_ReadMoreWhyApprox', 'If you are scheduling this email campaign to be sent at a later date, then the number of people it is sent to may change as people subscribe or unsubscribe from your contact list.');

define('LNG_SendToTestListWarning', 'This email campaign has not been sent before. You should send it to a test list before you send it to your contacts.');

define('LNG_Send_Step1_ChooseListToSendTo', 'Please choose one or more contact list to send your email campaign to.');

define('LNG_Send_Not_Completed', 'Su tu email no puede ser enviado será marcado en la página <em>Ver email campañas</em> con la opción de reenviarlo');

define('LNG_SendShowSegmentOptionsExplain', 'Enviar un email a todos los contactos de el/los segmento(s) seleccionado(s)');
define('LNG_SegmentDetails', 'Seleccionar segmento(s)');
define('LNG_SendToSegment', LNG_Segments);
define('LNG_HLP_SendToSegment', 'To send to multiple segments at once, simply tick the segments you want to send to. Please note that only segments containing at least one active contact (those which haven\\\'t bounced or been unsubscribed) will be shown here.');
define('LNG_Send_Step1_ChooseSegmentToSendTo', 'Please choose one or more segment to send your email campaign to.');

define('LNG_Send_Subscribers_Search_Step2', 'Use the form below to choose which contacts receive your email. You don\'t have to fill in all fields, only the ones you want to filter on. ' . LNG_GuideToFiltering);

define('LNG_SendMyEmailCampaignOn', 'Send My Email Campaign on');
define('LNG_Schedule_At', 'at');
define('LNG_AdvancedSendingOptions', 'Configuraciones avanzadas (Opcional)');
define('LNG_WhichCampaignToSend', 'Configuraciones de la email campaña');
define('LNG_WhichEmailToSend', 'Enviar esta email campaña');
define('LNG_SelectFirstNameOption', 'Selecciona el campo pers. para "Nombre"');
define('LNG_SelectLastNameOption', 'Selecciona el campo pers. para "Apellido"');
define('LNG_ConfirmCancelSend', '¿Estás seguro de querer cancelar el envio de tu email campaña? Si lo cancelas no será enviada.');
define('LNG_ConfirmCancelSchedule', '¿Estás seguro de querer cancelar la programación de envio de tu email campaña? Si la cancelas no será enviada.');
define('LNG_PopupSendWarning', '*** Importante, leed por favor ***\n\nUna ventana emergente aparecer\u00E1 ahora a trav\u00E9s de la cual tu email campa\u00F1a ser\u00E1 enviada. Por favor no cerrar la ventana. Cuando la email campa\u00F1a haya sido enviada la ventana se cerrar\u00E1 autom\u00E1ticamente. Si cierras la ventana tu email campa\u00F1a no ser\u00E1 enviada.');

/**
**************************
* Changed/Added in 5.5.0
**************************
*/
define('LNG_Send_NewsletterName', 'Your email campaign is called <b>%s</b>');

/**
**************************
* Changed/Added in 5.5.5
**************************
*/
define('LNG_Send_TotalRecipients_Cron', 'It will be sent to approximately <b>%s</b> contact(s)');

/**
**************************
* Changed/Added in 5.5.8
**************************
*/
define('LNG_SendReport_Failure_Reason_30', 'there was a problem sending to this email. Either it is invalid (if so, double-check the email address), or the SMTP server information you have provided is not correct (if so, check with your system administrator).');

/**
**************************
* Changed/Added in 5.6.6
**************************
*/

define('LNG_SendNewsletterArchive_DeactivatedWarning', 'Archive is deactivated for this email campaign, as a result RSS and web version of the email will be disabled.');
