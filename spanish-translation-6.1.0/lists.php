<?php
/**
* Language file variables for the mailing lists area. This includes creating, editing, deleting, managing.
*
* @see GetLang
*
* @version     $Id: lists.php,v 1.38 2008/02/18 06:41:11 chris Exp $
* @author Chris <chris@interspire.com>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the mailing lists area... Please backup before you start!
*/
define('LNG_CreateMailingListHeading', 'Detalles de la nueva lista');

define('LNG_ListName', 'Nombre de la lista');
define('LNG_ListOwnerName', 'Nombre del propietario de la lista');
define('LNG_ListOwnerEmail', 'Email del propietario de la lista');
define('LNG_ListBounceEmail', 'Email para los correos rebotados');
define('LNG_ListReplyToEmail', 'Email para las respuestas');

define('LNG_UnableToCreateList', 'No se puede crear la lista');


define('LNG_HLP_ListName', 'El nombre de la lista que figurará tanto en el Panel de Control como en tus formularios de suscripción.');

define('LNG_UnableToUpdateList', 'No se puede actualizar la lista');

define('LNG_ChooseList', 'Por favor escoge una o más listas antes.');
define('LNG_ChooseMultipleLists', 'Para efectuar esta acción, necesitas escoger más de una lista.');

define('LNG_ListCopyFail', 'La lista seleccionada no puede ser copiada.');

define('LNG_ListBounceServer', 'Nombre servidor de la cuenta');
define('LNG_HLP_ListBounceServer', 'Esta cuenta es usada para procesar los emails rebotados. Si introduces tu servidor de email, usuario y contraseña, podrás procesar los emails rebotados usando un trabajo cron.');

define('LNG_ListBounceUsername', 'Usuario de la cuenta');
define('LNG_HLP_ListBounceUsername', 'Esta cuenta es usada para procesar los emails rebotados. Si introduces tu servidor de email, usuario y contraseña, podrás procesar los emails rebotados usando un trabajo cron.');

define('LNG_ListBouncePassword', 'Contraseña de la cuenta');
define('LNG_HLP_ListBouncePassword', 'Esta cuenta es usada para procesar los emails rebotados. Si introduces tu servidor de email, usuario y contraseña, podrás procesar los emails rebotados usando un trabajo cron.');

define('LNG_IMAPAccount', 'Cuenta de email IMAP');
define('LNG_IMAPAccountExplain', 'Sí, esta es una cuenta  IMAP');
define('LNG_HLP_IMAPAccount', '¿Es una cuenta de email imap? Si no es una cuenta imap, es una cuenta POP3.');

define('LNG_UseExtraMailSettingsExplain', 'Sí, usar configuraciones de cuenta adicionales');
define('LNG_HLP_UseExtraMailSettings', 'Puede que necesites configurar opciones extra para conectar a la cuenta para los emails rebotados. Si es así, marca esta opción y elige/rellena la información requerida. Si no estás seguro, deja esta opción desmarcada.');

define('LNG_MergeSuccessful', '%s lists have been merged together successfully');
define('LNG_MergeUnsuccessful', '%s lists couldn\\\'t be merged together.');

define('LNG_ListCopyDisabled', 'You cannot copy this list because you do not have access.');
define('LNG_ListEditDisabled', 'You cannot edit this list because you do not have access.');
define('LNG_ListDeleteDisabled', 'You cannot delete this list because you do not have access.');
define('LNG_ListCopyDisabled_TooMany', 'You cannot copy this list, you have reached the maximum you can create');

define('LNG_BounceAccountDetails', 'Detalles cuenta de emails rebotados');

define('LNG_ArchiveLists', 'Archivados');


/**
**************************
* Changed/added in NX1.0.5
**************************
*/
define('LNG_UseExtraMailSettings', 'Usar configuraciones adicionales');


/**
**************************
* Changed/added in NX 1.3
**************************
*/
define('LNG_TestBounceSettings', 'Probar cuenta');
define('LNG_TestBounceSettings_Server_Alert', 'Por favor introduze el nombre del servidor para los emails rebotados.');
define('LNG_TestBounceSettings_Username_Alert', 'Por favor introduze el nombre de usuario para los emails rebotados.');
define('LNG_TestBounceSettings_Password_Alert', 'Por favor introduze la contrase\u00F1a para los emails rebotados.');

define('LNG_Bounce_Checking', '<span style="font-family: Tahoma, Verdana; font-size: 12px;">Checking your bounce account details.<br/><br/>This may take up to 2 minutes, please wait...</span>');

define('LNG_PredefinedCustomFields', 'Detalles de la empresa');
define('LNG_CompanyName', 'Nombre de la empresa');
define('LNG_CompanyAddress', 'Dirección de la empresa');
define('LNG_CompanyPhone', 'Teléfono de la empresa');
define('LNG_HLP_CompanyName', 'Puedes añadir el nombre de tu empresa aquí para ser utilizado como campo personalizado en tus mensajes de correo electrónico y adherirte así al acto CAN-SPAM. <br> <br> El acto CAN-SPAM dicta que debes incluir detalles de tu empresa en tus mensajes de correo electrónico.');
define('LNG_HLP_CompanyAddress', 'Puedes añadir la dirección de tu empresa aquí para ser utilizado como campo personalizado en tus mensajes de correo electrónico y adherirte así al acto CAN-SPAM. <br> <br> El acto CAN-SPAM dicta que debes incluir detalles de tu empresa en tus mensajes de correo electrónico.');
define('LNG_HLP_CompanyPhone', 'Puedes añadir el número de teléfono de tu empresa aquí para ser utilizado como campo personalizado en tus mensajes de correo electrónico y adherirte así al acto CAN-SPAM. <br> <br> El acto CAN-SPAM dicta que debes incluir detalles de tu empresa en tus mensajes de correo electrónico.');

define('LNG_NotifyOwner', 'Notificar al propietario de la lista');
define('LNG_NotifyOwnerExplain', 'Sí, enviar al propietario de la lista notificaciones de las suscripciones y desuscripciones');



/**
**************************
* Changed/added in NX 1.4
**************************
*/
define('LNG_ExtraMailSettingsNoValidate_field', 'Do not validate certificate');
define('LNG_ExtraMailSettingsNoValidate', 'Extra Mail Settings: Do not validate certificate');
define('LNG_HLP_ExtraMailSettingsNoValidate', 'Please check this option if you do not want to validate SSL ceritifcate. You need to select this option if you need to connect to a mail server that uses self-signed certificate. If unsure, leave this unticked.');

define('LNG_ExtraMailSettingsNoTLS_field', 'Do not use TLS');
define('LNG_ExtraMailSettingsNoTLS', 'Extra Mail Settings: No TLS');
define('LNG_HLP_ExtraMailSettingsNoTLS', 'Please check this option if you do not want to use TLS to connect to the bounce server. If unsure, leave this unticked.');

define('LNG_ExtraMailSettingsNoSSL_field', 'Do not use SSL');
define('LNG_ExtraMailSettingsNoSSL', 'Extra Mail Settings: No SSL');
define('LNG_HLP_ExtraMailSettingsNoSSL', 'Please check this option if you do not want to use SSL to connect to the bounce server. If unsure, leave this unticked.');

define('LNG_ExtraMailSettingsOthers_field', 'Others');
define('LNG_ExtraMailSettingsOthers', 'Other Extra Mail Settings');
define('LNG_HLP_ExtraMailSettingsOthers', 'Please add any other extra options that may be required to properly connect to a bounce email account.');

define('LNG_YesProcessBounces', 'Sí, quiero procesar los emails rebotados para esta lista');
define('LNG_ProcessBounceGuideLink', '¿Qué son los emails rebotados y cómo son procesados?');
define('LNG_ProcessBouncesLabel', 'Procesar emails rebotados');
define('LNG_ProcessBounceDelete', 'Entiendo que los emails rebotados serán eliminados de la bandeja de entrada que estoy usando para manejarlos');
define('LNG_AgreeDeleteLabel', 'Acepto el borrado de emails');

define('LNG_ListOwnerEmailNotValidEmail', 'The list owners email address is not valid. Please enter a valid email address.');
define('LNG_ListBounceEmailNotValidEmail', 'The bounce email address is not valid. Please enter a valid email address.');
define('LNG_ListReplyToEmailNotValidEmail', 'The reply-to email address is not valid. Please enter a valid email address.');


/**
**************************
* Changed/added in NX 1.4.1
**************************
*
* These were changed again for NX 5.0
*
*/

/**
**************************
* Changed/added in 5.0.0
**************************
*/

define('LNG_DeleteAllSubscribers', 'Eliminar los contactos de la(s) lista(s) selecionada(s)');
define('LNG_DeleteAllSubscribersPrompt', 'Are you sure you want to delete all contacts from this contact list?');
define('LNG_ListDeleteAllSubscribersFail', 'Unable to delete all contacts from this contact list');
define('LNG_ListDeleteAllSubscribersSuccess', 'All contacts from this contact list deleted successfully');

define('LNG_ListsDeleteAllSubscribersFail', 'Unable to delete all contacts from these contact lists');
define('LNG_ListsDeleteAllSubscribersSuccess', 'All contacts from these contact list deleted successfully');

define('LNG_AllListSubscribersChangedFormat', 'All contacts have been updated to receive email campaigns in \'%s\' format.');
define('LNG_AllListSubscribersNotChangedFormat', 'All contacts could not been changed to receive email campaigns in \'%s\' format. Please try again.');

define('LNG_AllListSubscribersChangedStatus', 'All contacts have had their status changed to status \'%s\'.');

define('LNG_AllListSubscribersChangedConfirm', 'All contacts have had their status changed to \'%s\'.');
define('LNG_AllListSubscribersNotChangedConfirm', 'All contacts have not had their status changed to \'%s\'.');

define('LNG_MergeDuplicatesRemoved_Success', 'Successfully removed %s duplicate contact(s) from the new merged list.');
define('LNG_MergeDuplicatesRemoved_Fail', 'Failed to remove %s duplicate contact(s) from the new merged list.');

define('LNG_Lists_DeleteAllSubscribers_Disabled', 'You cannot delete contacts from this because you do not have access.');

define('LNG_AllListSubscribersNotChangedStatus', 'All contacts have not had their status changed to \'%s\'.');

define('LNG_CreateMailingListIntro', LNG_Help_ListsManage);

define('LNG_HLP_NotifyOwner', 'Si esta opción está seleccionada, el propietario de la lista de contactos será notificado por correo electrónico cada vez que alguien se suscriba o desuscriba de esta lista de contactos.');

define('LNG_CreateListCancelButton', '\u00BFEst\u00E1s seguro de querer cancelar la creaci\u00F3n de la nueva lista de contactos?');

define('LNG_EditMailingList', 'Editar lista de contactos');
define('LNG_EditMailingListIntro', 'Completa el formulario siguiente para actualizar la lista de contactos seleccionada.');
define('LNG_EditListCancelButton', '\u00BFSeguro de quieres cancelar la actualizaci\u00F3n de esta lista de contactos?');
define('LNG_EditMailingListHeading', 'Detalles lista de contactos');

define('LNG_EnterOwnerName', 'Please enter the name of the person who owns this contact list.');
define('LNG_EnterOwnerEmail', 'Please enter the email address of the person who owns this contact list.');
define('LNG_EnterReplyToEmail', 'Please enter the default \'Reply-To\' address for this contact list.');
define('LNG_EnterBounceEmail', 'Please enter the default \'Bounce\' address for this contact list.');

define('LNG_ListCreated', 'Tu lista de contacto ha sido guardada con éxito.');


define('LNG_ListDeleteFail', 'An error occurred while trying to delete the selected contact list.');
define('LNG_ListsDeleteFail', 'An error occurred while trying to delete the selected contact lists.');

define('LNG_ListDeleteSuccess', 'The selected contact list has been deleted successfully');
define('LNG_ListsDeleteSuccess', 'The selected contact lists have been deleted successfully');

define('LNG_RSS_Tip', 'Haz clic aquí para ver los emails archivados enviados a esta lista de contactos.');

define('LNG_CreateMailingList', 'Crear lista de contactos');

define('LNG_ListsManage', 'Ver lista de contactos');

define('LNG_HLP_ListOwnerName', 'The name of the person who owns this list. This is the default name used when you send an email campaign to this contact list.');
define('LNG_HLP_ListOwnerEmail', 'Emails are sent to this address when someone subscribes or unsubscribes from your contact list.<br/>This is also the default \\\'From\\\' email address used when sending an email campaign to this contact list.');
define('LNG_HLP_ListBounceEmail', 'This is the default bounce address used when you send an email campaign to this contact list. This is used if an invalid email address has been added to your contact list.');
define('LNG_HLP_ListReplyToEmail', 'This is the default reply address used when you send an email campaign to this contact list.');

define('LNG_ListOwner','Propietario&nbsp;Lista');

define('LNG_ListDoesntExist', 'La lista de contactos que está tratando de editar no existe. Por favor, inténtalo de nuevo.');

define('LNG_Delete_Lists', 'Eliminar la(s) lista(s) seleccionada(s)');

define('LNG_ListNameIsNotValid', 'Por favor introduze un nombre para la lista.');
define('LNG_EnterListName', LNG_ListNameIsNotValid);

define('LNG_ListOwnerNameIsNotValid', 'Por favor introduze el nombre del propietario de la lista.');
define('LNG_ListOwnerEmailIsNotValid', 'Por favor introduze un correo electrónico válido para el propietario de la lista.');
define('LNG_ListBounceEmailIsNotValid', 'Por favor introduze un correo electrónico válido para los emails rebotados.');
define('LNG_ListReplyToEmailIsNotValid', 'Por favor introduze un correo electrónico válido para las respuestas.');

define('LNG_ListUpdated', 'La lista de contactos seleccionada ha sido actualizada con éxito.');
define('LNG_MergeLists', 'Combinar las listas seleccionadas');
define('LNG_ListCopySuccess', 'La lista seleccionada ha sido copiada con éxito.');

define('LNG_Add_Customfields_To_List', 'Campos personalizados');
define('LNG_HLP_AddTheseFields', 'Selecciona los campos personalizados que deseas asociar con esta lista.');

/**
*************************
* Changed/added in 5.5.0
*************************
*/

define('LNG_ProcessBounceDeleteAll', 'Remove all emails from the inbox, not just bounce emails');
define('LNG_ProcessBounceDeleteAll_ManualPrompt', 'Ticking this option means that all emails in the bounce account inbox will be deleted. Are you sure?');
define('LNG_ProcessBounceDeleteAll_AutoPrompt', 'Ticking this option means that all emails in the bounce account inbox will be deleted every time automatic bounce processing runs. Are you sure?');
define('LNG_HLP_ProcessBounceDeleteAll', 'If ticked, all emails in the bounce account\\\'s inbox will be deleted every time bounce processing runs. You should tick this option if this email account is only used to process bounces.');
define('LNG_AddTheseFields', 'Añadir estos campos a la lista');

/**
*************************
* Changed/added in 5.6.6
*************************
*/

define('LNG_DeleteListPrompt', 'Deleting this contact list will also delete all associated statistics. Are you sure you want to delete this contact list?');
