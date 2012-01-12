<?php
/**
* Language file variables for the newsletters area. (Now referred to as email campaigns)
*
* @see GetLang
*
* @version     $Id: newsletters.php,v 1.31 2008/01/07 06:54:01 chris Exp $
* @author Chris <chris@interspire.com>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the newsletters area... Please backup before you start!
*/
define('LNG_CreateNewsletterCancelButton', '\u00BFEst\u00E1s seguro de querer cancelar la creaci\u00F3n de una nueva email campa\u00F1a?');
define('LNG_CreateNewsletterHeading', 'Detalles de la email campaña');

define('LNG_CreateNewsletterIntro_Step2', 'Utiliza el formulario que aparece a continuación para crear tu email campaña. También puedes consultar tu email en busca de palabras clave spam y ver el resultado en diferentes clientes de correo electrónico.');
define('LNG_Newsletter_Details', 'Detalles de la email campaña');

define('LNG_EditNewsletterIntro', 'Completa el formulario que aparece a continuación para actualizar la email campaña.');
define('LNG_EditNewsletterCancelButton', '\u00BFSeguro de quieres cancelar la actualizaci\u00F3n de esta email campa\u00F1a?');
define('LNG_EditNewsletterHeading', 'Detalles de la email campaña');

define('LNG_EditNewsletterIntro_Step2', 'Utiliza el formulario que aparece a continuación para actualizar tu email campaña. También puedes consultar tu email en busca de palabras clave spam y ver el resultado en diferentes clientes de correo electrónico.');

define('LNG_EnterNewsletterName', 'Por favor introduze un nombre para tu email campaña.');

define('LNG_NewsletterName', 'Nombre de la email campaña');

define('LNG_NewsletterNameIsNotValid', 'El nombre de la email campaña no es válido');
define('LNG_UnableToCreateNewsletter', 'No es posible crear una email campaña');

define('LNG_HLP_NewsletterName', 'El nombre de la email campaña. Esto es sólo para tu referencia y no será incluido en el email cuando sea enviado.');

define('LNG_UnableToUpdateNewsletter', 'No es posible actualizar la email campaña');

define('LNG_NoNewslettersToDelete', 'Ninguna email campaña fue seleccionada. Por favor vuelve a intentarlo.');
define('LNG_Newsletter_NotDeleted', 'No es posible eliminar la email campaña seleccionada');
define('LNG_Newsletters_NotDeleted', 'No es posible eliminar las %s email campañas seleccionadas');
define('LNG_Newsletter_Deleted', '1 email campaña ha sido eleminada con éxito');
define('LNG_Newsletters_Deleted', '%s email campañas han sido eleminadas con éxito');

define('LNG_Newsletter_NotDeleted_SendInProgress', 'No es posible eliminar la email campaña \'%s\' - actualmente está siendo enviada.');
define('LNG_Newsletters_NotDeleted_SendInProgress', 'No es posible eliminar las email campañas siguientes - \'%s\' - actualmente están siendo enviadas.');

define('LNG_NoNewslettersToAction', LNG_NoNewslettersToDelete);
define('LNG_InvalidNewsletterAction', 'Acción para la email campaña inválido. Por favor vuelve a intentarlo.');

define('LNG_Newsletter_NotApproved', 'No es posible aprobar la email campaña seleccionada');
define('LNG_Newsletters_NotApproved', 'No es posible aprobar las %s email campañas seleccionadas');
define('LNG_Newsletter_Approved', '1 email campaña ha sido activada con éxito');
define('LNG_Newsletters_Approved', '%s email campañas han sido activadas con éxito');

define('LNG_Newsletter_NotDisapproved', 'No es posible desactivar la email campaña seleccionada');
define('LNG_Newsletters_NotDisapproved', 'No es posible desactivar las %s email campañas seleccionadas');
define('LNG_Newsletter_Disapproved', '1 email campaña ha sido desactivada con éxito');
define('LNG_Newsletters_Disapproved', '%s email campañas han sido desactivadas con éxito');

define('LNG_Newsletter_NotArchived', 'No es posible archivar la email campaña seleccionada');
define('LNG_Newsletters_NotArchived', 'No es posible archivar las %s email campañas seleccionadas');
define('LNG_Newsletter_Archived', '1 email campaña ha sido archivada con éxito');
define('LNG_Newsletters_Archived', '%s email campañas han sido archivadas con éxito');

define('LNG_Newsletter_NotUnarchived', 'No es posible desarchivar la email campaña seleccionada');
define('LNG_Newsletters_NotUnarchived', 'No es posible desarchivar las %s email campañas seleccionadas');
define('LNG_Newsletter_Unarchived', '1 email campaña ha sido desarchivada con éxito');
define('LNG_Newsletters_Unarchived', '%s email campañas han sido desarchivadas con éxito');

define('LNG_NewsletterFormat', 'Formato de la email campaña');
define('LNG_NewsletterContent', 'Enter your email campaign content below');

define('LNG_NewsletterCopySuccess', 'La email campaña fue copiada con éxito.');
define('LNG_NewsletterCopyFail', 'La email campaña no fue copiada con éxito.');

// newslettersubject is in language.php
define('LNG_PleaseEnterNewsletterSubject', 'Por favor introduze el asunto de la email campana.');

define('LNG_Newsletter_Send_Disabled_Inactive', 'You cannot send this email campaign because it is inactive.');
define('LNG_Newsletter_Send_Disabled', 'You cannot send this email campaign, you do not have access.');
define('LNG_Newsletter_Edit_Disabled', 'You cannot edit this email campaign, you do not have access.');
define('LNG_Newsletter_Copy_Disabled', 'You cannot copy this email campaign, you do not have access.');
define('LNG_Newsletter_Delete_Disabled', 'You cannot delete this email campaign, you do not have access.');
define('LNG_Newsletter_Delete_Disabled_SendInProgress', 'You cannot delete a email campaign while it is being sent.');

define('LNG_Archive', 'Archivado');

define('LNG_ArchiveNewsletters', 'Archivado');
define('LNG_UnarchiveNewsletters', 'No archivado');
define('LNG_ApproveNewsletters', 'Activado');
define('LNG_DisapproveNewsletters', 'Desactivado');

define('LNG_Newsletter_Title_Enable', 'Activar esta email campaña');
define('LNG_Newsletter_Title_Disable', 'Desactivar esta email campaña');

define('LNG_Newsletter_Title_Archive_Enable', 'Activar archivado de esta email campaña');
define('LNG_Newsletter_Title_Archive_Disable', 'Desactivar archivado de esta email campaña');

define('LNG_NewsletterArchive', 'Archivar email campaña');
define('LNG_NewsletterArchiveExplain', 'Sí, archivar ésta email campaña');

define('LNG_NewsletterIsActive', 'Activar email campaña');
define('LNG_NewsletterIsActiveExplain', 'Sí, ésta email campaña está activa');

define('LNG_NewsletterCannotBeInactiveAndArchive', 'Este email no se incluirá en tu archivo ya que ha sido desactivado. Una vez que haya sido reactivado será incluido en tu archivo.');

define('LNG_UnableToLoadNewsletter', 'No ha sido posible cargar la email campaña. Por favor vuelve a intentarlo.');

define('LNG_NewsletterFile', 'Archivo de la email campaña');
define('LNG_HLP_NewsletterFile', 'Sube un archivo html desde tu ordenador para ser usado como email campaña');
define('LNG_UploadNewsletter', 'Subir');
define('LNG_NewsletterFileEmptyAlert', 'Por favor escoge un archivo de tu ordenador antes de intentar subirlo.');
define('LNG_NewsletterFileEmpty', 'Por favor escoge un archivo de tu ordenador antes de intentar subirlo..');

define('LNG_NewsletterURL', 'URL de la email campaña');
define('LNG_HLP_NewsletterURL', 'Importat una email campaña desde una url');
define('LNG_NewsletterURLEmptyAlert', 'Por favor introduze una URL desde la cual importar la email campaña');
define('LNG_NewsletterURLEmpty', 'Por favor introduze una URL desde la cual importar la email campaña');

define('LNG_NewsletterActivatedSuccessfully', 'La email campaña ha sido activada con éxito');
define('LNG_NewsletterDeactivatedSuccessfully', 'La email campaña ha sido desactivada con éxito');

define('LNG_NewsletterArchive_ActivatedSuccessfully', 'El archivado de la email campaña ha sido activado con éxito');
define('LNG_NewsletterArchive_DeactivatedSuccessfully', 'El archivado de la email campaña ha sido desactivado con éxito');

define('LNG_ChooseNewsletters', 'Por favor escoge una o más email campañas primero.');

define('LNG_LastSent', 'Último envio');
define('LNG_NotSent', 'No enviado');

define('LNG_Newsletter_Edit_Disabled_SendInProgress', 'You cannot edit an email campaign while it is being sent');
define('LNG_Newsletter_ChangeActive_Disabled_SendInProgress', 'You cannot change this status while this email campaign is being sent');


/**
**************************
* Changed/added in NX1.1.1
**************************
*/
define('LNG_NewsletterFilesCopyFail', 'Las imágenes y/o archivos adjuntos para esta email campa¿a no fueron copiados con éxito.');

/**
**************************
* Changed/added in NX 1.3
**************************
*/
define('LNG_CreateNewsletter', 'Crear una email campaña');

define('LNG_EditNewsletter', 'Editar una email campaña');

define('LNG_NewslettersManage', 'Ver email campañas');
define('LNG_Help_NewslettersManage_HasAccess', ' Para crear una email campaña, haga clic en el botón "Crear una email campaña" siguiente.');

define('LNG_HLP_NewsletterSubject', 'El asunto del email. La mayoría de los gestores de correo verán antes el asunto que el contenido del email recibido.<br /><br />Puedes incluir campos personalizados en el asunto haciendo clic en \\\'Campos personalizados\\\' del editor y copiando/pegando el texto resultante en el cuadro de texto del asunto.');

define('LNG_ArchiveHelp', 'Una email campaña puede ser añadida a tu automaticamente generado archivo de email campaña. Puedes activarlo o desactivarlo haciendo clic en la opción de la columna Archivado.');

define('LNG_NewsletterActivateFailed_HasAttachments', 'La email campaña no pudo ser activada debido a que el administrador ha desactivado la opción de adjuntar archivos. Para habilitar esta email campaña, por favor editala y elimina los archivos adjuntos.');
define('LNG_NewsletterActivateFailed_HasAttachments_Multiple', '%s email campañas no pudieron ser activadas debido a que el administrador ha desactivado la opción de adjuntar archivos. Para habilitar estas email campañas, por favor editalas y elimina los archivos adjuntos.');

define('LNG_NewsletterUpdated', 'Tu email campaña ha sido actualizada. %s');

define('LNG_NewsletterCreated', 'u email campaña ha sido guardada. %s');


/**
**************************
* Changed/added in NX 1.4
**************************
*/
define('LNG_Newsletter_Send_Disabled_Resend_Maximum', sprintf('Ya ha tratado de reenviar esta email campaña %s veces y no la puedes enviar més. Por favor, póngase en contacto con el administrador del sistema.',
SENDSTUDIO_RESEND_MAXIMUM));



/**
**************************
* Changed/added in 5.0.0
**************************
*/
define('LNG_CreateNewsletterIntro', 'Escribe un nombre para su campaña y, opcionalmente, elige un formato y plantilla para empezar. Haz clic en <em>Siguiente</em> cuando estés listo para proseguir.');

define('LNG_Help_NewslettersManage', 'Las email campañas son mensajes que son enviados a tus contactos. Usa las email campañas para enviar boletines, promociones o notificaciones por correo electrónico.');

define('LNG_Newsletter_Size_Approximate', 'Ésta email campaña será aproximadamente %s por contacto si las imágenes son embebidas como parte del email.');

define('LNG_HLP_NewsletterFormat', 'HTML y TEXTO permitirá a tus contactos ver tu email en cualquier gestor de correo que deseen. Este tipo de email producirá resultados limitados para las estadísticas y seguimientos.<br><br>Tus contactos deben usar un gestor de correo capaz de interpretar HTML para poder ver tus emails HTML. Los emails HTML producirán los mejores resultados para las estadísticas y seguimientos.<br><br>Los mensajes de sólo texto son visibles en todos los gestores de correo y tienen menos probabilidades de ser reportados como spam debido a la falta de código HTML. Este tipo de correo no es capaz de obtener estadísticas.');

define('LNG_Newsletter_Size_Approximate_Noimages', 'Ésta email campaña será aproximadamente %s por contacto si las imágenes no son embebidas como parte del email.');

define('LNG_HLP_NewsletterArchive', '¿Debería esta email campaña ser archivada? Si es así, aparecerá en los archivos para la lista de contactos a la que esta siendo enviada. Puedes publicar estos archivos en tu sitio web para que tus vistantes web puedan consultarlos.');

define('LNG_HLP_NewsletterIsActive', '¿Debería esta email campaña ser marcada como activa? Email campañas inactivas no pueden ser enviadas a una lista de contactos y deben ser aprobadas primero.');

define('LNG_SendPreviewFrom', 'Enviar previsualización desde');
define('LNG_SendPreviewTo', 'Enviar previsualización a');

/**
**************************
* Changed/added in 5.6.6
**************************
*/

define('LNG_DeleteNewsletterPrompt', 'Deleting this email campaign will also delete all associated statistics. Are you sure you want to delete this email campaign?');

define('LNG_NoAttachment_Admin', 'Attachments have been disabled. They can be enabled in the Email Settings');
define('LNG_NoAttachment_User', 'Attachments have been disabled by the administrator');

define('LNG_NewsletterArchive_DeactivatedWarning', 'When archive is deactivated RSS and web version of the email are disabled');
