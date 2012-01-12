<?php
/**
* Language file variables for the schedule management area.
*
* @see GetLang
*
* @version     $Id: schedule.php,v 1.21 2008/01/16 00:01:46 chris Exp $
* @author Chris <chris@interspire.com>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the schedule area... Please backup before you start!
*/

define('LNG_ScheduleManage', 'Ver cola de envíos programados');

define('LNG_DateScheduled', 'Programado para');
define('LNG_Schedule_Empty', 'No hay nada programado a ser enviado.%s');
define('LNG_NoSchedules_HasAccess', ' Haz clic en el botón "Enviar" de abajo para enviar una email campaña.');

define('LNG_JobPausedSuccess', 'Trabajo pausado con éxito.');
define('LNG_JobPausedFail', 'El trabajo no ha sido pausado con éxito. No puedes pausar trabajos que no hayan sido comenzados.');

define('LNG_JobResumedSuccess', 'El envío de la email campaña ha sido resumida con éxito.');
define('LNG_JobResumedFail', 'El envío de la email campaña no ha sido resumida con éxito.');

define('LNG_UnableToLoadJob', 'No se ha podido cargar el trabajo. Por favor vuelve a intentarlo.');
define('LNG_UnableToEditJob_InProgress', 'No se ha podido editar el trabajo. Está actualmente en progreso. Pausa el trabajo antes de volver a intentarlo.');

define('LNG_Schedule_Edit', 'Editar envio programado');
define('LNG_Help_Schedule_Edit', 'Usa el formulario siguiente para actualizar los detalles de tu email campaña programada.');
define('LNG_ScheduleEditCancel_Prompt', '\u00BFSeguro que quieres cancelar la edici\u00F3n de tu email campa\u00F1a programada?');

define('LNG_JobDeleteSuccess', 'El elemento programado ha sido eliminado con éxito');
define('LNG_JobsDeleteSuccess', 'Los %s elementos programados han sido eliminados con éxito');
define('LNG_JobDeleteFail', 'El elemento programado no ha sido eliminado. No puedes eliminar un elemento programado mientras está en progreso.');
define('LNG_JobsDeleteFail', 'Los %s elementos programados no han sido eliminados. No puedes eliminar un elemento programado mientras está en progreso.');

define('LNG_SendThisNewsletterButton', 'Enviar esta email campaña');

define('LNG_CronWillRunInApproximately', 'Cron (el sistema de envío programado) será ejecutado en: %s');

define('LNG_ChooseSchedulesToDelete', 'Por favor escoge uno o más elementos programados a eliminar antes.');
define('LNG_ConfirmRemoveSchedules', '\u00BFSeguro que quieres quitar estos elementos programados?');
define('LNG_DeleteSchedulePrompt', '\u00BFSeguro que quieres eliminar estos elementos programados?');

define('LNG_Refresh', 'Refrescar');

define('LNG_WaitingForApproval', 'Esperando aprobación');
define('LNG_WaitingForApproval_Description', 'El usuario que ha enviado este email estaba intentado enviar demasiados emails. Haz clic en aprobar para dejar pasar este email, o elimina el evento programado.');
define('LNG_JobApprovedFail_NotAdmin', 'No eres un administrador así que no puedes aprobar este trabajo.');
define('LNG_JobApprovedSuccess', 'Trabajo aprobado con éxito. Será enviado concorde a lo programado.');
define('LNG_JobApprovedFail', 'El trabajo no ha sido aprobado con éxito. Por favor vuelve a intentarlo.');

define('LNG_CannotChangeAScheduleOnceItHasStarted', 'No puedes modificar un evento programado una vez que ha comenzado. Para programar esta email campaña de nuevo, por favor empieza una nueva programación.');

/**
**************************
* Changed/added in NX 1.3
**************************
*/
define('LNG_Schedule_ViewNewsletter', '<a href="%s" target="_blank">Ver</a>');

/**
***************************
* Changed/added in NX 1.3.1
***************************
*/
define('LNG_Help_ScheduleManage', 'Cualquier envío que hayas programado es mostrado a continuación. El campo "Estado" indica cuando será enviado cada email.');

/**
***************************
* Changed/added in NX 1.4
***************************
*/
define('LNG_JobScheduledOK', 'Tu email campaña ha sido programada y será enviada en la fecha y hora que has seleccionado.');

/**
***************************
* Changed/added in 5.0.0
***************************
*/
define('LNG_JobDoesntExist', 'El envío programado que intentas editar no existe. Por favor vuelve a intentarlo.');

/**
***************************
* Changed/added in 5.5.0
***************************
*/
define('LNG_Schedule_NewsletterType', 'Campaign Type');
define('LNG_Schedule_NewsletterType_Newsletter', 'Email Campaign');

?>
