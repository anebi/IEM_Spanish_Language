<?php
/**
* Language file variables for the autoresponders area.
*
* @see GetLang
*
* @version     $Id: autoresponders.php,v 1.39 2008/02/15 06:07:47 chris Exp $
* @author Chris <chris@interspire.com>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the autoresponders area... Please backup before you start!
*/

define('LNG_AutorespondersManage', 'Ver autorespuestas');

define('LNG_AutoresponderCreate', '&nbsp;Haz clic en el botón "Crear autorespuesta" siguiente para crear una.');

define('LNG_Autoresponder_Step1', 'Ver autorespuestas');
define('LNG_Autoresponder_Step1_CancelPrompt', '\u00BFSeguro que quieres cancelar la administraci\u00D3n de tus autorespuestas?');

define('LNG_Autoresponders_Step2', LNG_Autoresponder_Step1);

define('LNG_CreateAutoresponder', 'Crear autorespuesta');

define('LNG_CreateAutoresponderCancelButton', '\u00BFSeguro que quieres cancelar la creaci\u00F3n de una nueva autorespuesta?');
define('LNG_CreateAutoresponderHeading', 'Detalles de la nueva autorespuesta');

define('LNG_CreateAutoresponderIntro_Step4', 'Introduce el contenido de tu autorespuesta en el formulario siguiente. Haz clic en el botón "Guardar y salir" cuando hayas terminado.');

define('LNG_EditAutoresponderIntro_Step4', 'Por favor actualiza tu contenido abajo. Haz clic en el botón "Guardar y salir" cuando hayas terminado.');

define('LNG_AutoresponderDetails', 'Detalles de la autorespuesta');

define('LNG_EditAutoresponder', 'Editar una autorespuesta');
define('LNG_EditAutoresponderIntro', 'Completa el formulario siguiente para actualizar la autorespuesta seleccionada. También puedes <a href="#" onClick="LaunchHelp(\'797\'); return false;">aprender más sobre las autorespuestas</a>.');
define('LNG_EditAutoresponderCancelButton', '\u00BFSeguro que quieres cancelar la actualización de esta autorespuesta?');
define('LNG_EditAutoresponderHeading', 'Detalles autorespuesta');

define('LNG_EnterAutoresponderName', 'Por favor introduze un nombre para esta autorespuesta.');
define('LNG_PleaseEnterAutoresonderSubject', 'Por favor introduze un asunto para esta autorespuesta.');

define('LNG_AutoresponderName', 'Nombra esta autorespuesta');

define('LNG_AutoresponderNameIsNotValid', 'Nombre de autorespuesta no válido');
define('LNG_UnableToCreateAutoresponder', 'No se ha podido crear la autorespuesta');

define('LNG_DeleteAutoresponderPrompt', '\u00BFSeguro que quieres eliminar esta autorespuesta?');

define('LNG_UnableToUpdateAutoresponder', 'No se ha podido actualizar la autorespuesta');

define('LNG_AutoresponderDeleteFail', 'No se ha podido eliminar la autorespuesta');
define('LNG_AutoresponderDeleteSuccess', 'Autorespuesta eliminada con éxito');

define('LNG_AutoresponderFormat', 'Formato autorespuesta');
define('LNG_HLP_AutoresponderFormat', '¿En qué formato debería esta autorespuesta ser?');
define('LNG_AutoresponderContent', 'Introduze seguidamente el contenido de tu autorespuesta');

define('LNG_AutoresponderCopySuccess', 'La autorespuesta seleccionada ha sido copiada y puede ser editada abajo.');
define('LNG_AutoresponderCopyFail', 'La autorespuesta no ha sido copiada con éxito.');

define('LNG_AutoresponderSubject', 'Asunto del email');

define('LNG_HLP_AutoresponderSubject', 'El asunto del email de la autorespuesta. Puedes incluir campos personalizados en el asunto simplemente copiando el código deseado en el cuadro de texto.');

define('LNG_Autoresponder_Edit_Disabled', 'No puedes editar esta autorespuesta, no tienes acceso.');
define('LNG_Autoresponder_Copy_Disabled', 'No puedes copiar esta autorespuesta, no tienes acceso.');
define('LNG_Autoresponder_Delete_Disabled', 'No puedes eliminar esta autorespuesta, no tienes acceso.');

define('LNG_UnableToLoadAutoresponder', 'No se ha podido cargar la autorespuesta. Por favor vuelve a intentarlo');

define('LNG_MatchEmail', 'Concordar email');

define('LNG_MatchFormat', 'Concordar formato');

define('LNG_MatchConfirmedStatus', 'Concordar estado confirmación');


define('LNG_SendMultipart', '¿Enviar este email como multiparte?');
define('LNG_SendMultipartExplain', 'Sí, enviar este email como multiparte');

define('LNG_TrackOpens', '¿Rastrear emails HTML abiertos?');
define('LNG_TrackOpensExplain', 'Sí, rastrear los emails HTML abiertos');

define('LNG_TrackLinks', 'Rastrear enlaces abiertos');
define('LNG_HLP_TrackLinks', '¿Deseas rastrear todos los enlaces de esta email campaña? Si es así, podrás ver informes de los enlaces abiertos en la pestaña de estadísticas de la parte superior de la página.');
define('LNG_TrackLinksExplain', 'Sí, rastrear todos los enlaces de esta email campaña');

define('LNG_EmailFormat', 'Formato del email');

define('LNG_AutoresponderFile', 'Autoresponder File');
define('LNG_HLP_AutoresponderFile', 'Upload a html file from your computer to use as your autoresponder');
define('LNG_UploadAutoresponder', 'Upload');
define('LNG_AutoresponderFileEmptyAlert', 'Please choose a file from your computer before trying to upload it.');
define('LNG_AutoresponderFileEmpty', 'Please choose a file from your computer before trying to upload it.');

define('LNG_AutoresponderURL', 'Autoresponder URL');
define('LNG_HLP_AutoresponderURL', 'Import a autoresponder from a url');
define('LNG_ImportAutoresponder', 'Import');
define('LNG_AutoresponderURLEmptyAlert', 'Please enter a url to import the autoresponder from');
define('LNG_AutoresponderURLEmpty', 'Please enter a url to import the autoresponder from');

define('LNG_AutoresponderActivatedSuccessfully', 'The selected autoresponder is now active.');
define('LNG_AutoresponderDeactivatedSuccessfully', 'The selected autoresponder is no longer active.');

define('LNG_Autoresponder_Title_Enable', 'Enable this autoresponder');
define('LNG_Autoresponder_Title_Disable', 'Disable this autoresponder');

define('LNG_ChooseAutoresponders', 'Please choose at least one autoresponders first.');
define('LNG_ActivateAutoresponders', 'Activate the selected autoresponder(s)');
define('LNG_DeactivateAutoresponders', 'Deactivate the selected autoresponder(s)');

define('LNG_Autoresponder_Approved', 'The selected autoresponder has been activated.');
define('LNG_Autoresponders_Approved', 'The %s selected autoresponders have been activated.');

define('LNG_Autoresponder_NotApproved', 'The selected autoresponder couldn\'t be activated. Please try again.');
define('LNG_Autoresponders_NotApproved', 'The %s selected autoresponders couldn\'t be activated. Please try again.');

define('LNG_Autoresponder_Disapproved', 'The selected autoresponder has been deactivated.');
define('LNG_Autoresponders_Disapproved', 'The %s selected autoresponders have been deactivated.');

define('LNG_Autoresponder_NotDisapproved', '1 autoresponder was not disapproved. Please try again.');
define('LNG_Autoresponders_NotDisapproved', '%s autoresponders were not disapproved. Please try again.');

define('LNG_Autoresponder_Deleted', 'The selected autoresponder has been deleted.');
define('LNG_Autoresponders_Deleted', 'The %s selected autoresponders have been deleted.');

define('LNG_Autoresponder_NotDeleted', '1 autoresponder was not deleted. Please try again.');
define('LNG_Autoresponders_NotDeleted', '%s autoresponders were not deleted. Please try again.');

define('LNG_Autoresponder_Details', 'Autoresponder Details');

define('LNG_Autoresponder_OpenedNewsletter', LNG_OpenedNewsletter);
define('LNG_Autoresponder_YesFilterByOpenedNewsletter', LNG_YesFilterByOpenedNewsletter);

define('LNG_Autoresponder_ClickedOnLink', LNG_ClickedOnLink);
define('LNG_Autoresponder_YesFilterByLink', LNG_YesFilterByLink);

define('LNG_ChooseATime', 'Choose a time');
define('LNG_1Day', '1 Day');
define('LNG_2Days', '2 Days');
define('LNG_3Days', '3 Days');
define('LNG_4Days', '4 Days');
define('LNG_5Days', '5 Days');
define('LNG_6Days', '6 Days');
define('LNG_1Week', '1 Week');
define('LNG_2Weeks', '2 Weeks');
define('LNG_3Weeks', '3 Weeks');
define('LNG_1Month', '1 Month');
define('LNG_2Months', '2 Months');
define('LNG_3Months', '3 Months');
define('LNG_4Months', '4 Months');
define('LNG_5Months', '5 Months');
define('LNG_6Months', '6 Months');
define('LNG_7Months', '7 Months');
define('LNG_8Months', '8 Months');
define('LNG_9Months', '9 Months');
define('LNG_10Months', '10 Months');
define('LNG_11Months', '11 Months');
define('LNG_1Year', '1 Year');
define('LNG_2Years', '2 Years');
define('LNG_3Years', '3 Years');

/**
**************************
* Changed/added in NX1.0.5
**************************
*/
define('LNG_HoursDelayed', 'Enviar esta autorespuesta');

define('LNG_TemplateDetails', 'Contenido autorespuesta');

/**
**************************
* Changed/added in NX1.1.1
**************************
*/
define('LNG_AutoresponderFilesCopyFail', 'Las imágenes y/o archivos adjuntos no han sido copiados con éxito.');

/**
**************************
* Changed/added in NX 1.3
**************************
*/
define('LNG_AutoresponderActivateFailed_HasAttachments', 'The autoresponder could not be activated because the administrator has disabled attachments. To enable this autoresponder, please edit it and remove the attachments.');
define('LNG_AutoresponderActivateFailed_HasAttachments_Multiple', '%s autoresponders could not be activated because the administrator has disabled attachments. To enable these autoresponders, please edit them and remove the attachments.');

define('LNG_UnableToLoadImage_Autoresponder_List_Embed', 'Unable to load the following images to embed in the autoresponder. This is most likely because the image does not exist.<br/>%s');
define('LNG_UnableToLoadImage_Autoresponder_List', 'Unable to load the following images in the autoresponder. This is most likely because the image does not exist.<br/>%s');

define('LNG_AutoresponderUpdated', 'Autorespuesta actualizada con éxito. %s');

define('LNG_AutoresponderCreated', 'Tu email de autorespuesta ha sido creado con éxito. %s');

define('LNG_FormatDetails', 'Opciones avanzadas');
// removed
// define('LNG_HTMLFormatDetails','HTML Format Details');

define('LNG_CreateAutoresponderButton', 'Crear una autorespuesta...');


define('LNG_Autoresponder_Size_Over_EmailSize_Maximum_Embed', 'This autoresponder is larger than %s. You will not be able to activate this autoresponder until you reduce the size of the images or attachments, or you can send it without embedded images.');
define('LNG_Autoresponder_Size_Over_EmailSize_Maximum_No_Embed', 'This autoresponder is larger than %s. You will not be able to activate this autoresponder until you reduce the size of the attachments.');

define('LNG_AutoresponderActivateFailed_Over_EmailSize_Maximum_Embed', 'The autoresponder could not be activated because it is larger than %s. You will need to reduce the size of the images or attachments, or you can edit it and disable embedded images.');
define('LNG_AutoresponderActivateFailed_Over_EmailSize_Maximum_Embed_Multiple', '%s autoresponders could not be activated because each one is larger than %s. You will need to reduce the size of the images or attachments, or you can edit each one and disable embedded images.');

define('LNG_AutoresponderActivateFailed_Over_EmailSize_Maximum', 'The autoresponder could not be activated because it is larger than %s. You will need to reduce the size of the attachments.');
define('LNG_AutoresponderActivateFailed_Over_EmailSize_Maximum_Multiple', '%s autoresponders could not be activated because each one is larger than %s. You will need to reduce the size of the attachments.');

define('LNG_Autoresponder_Title_Disable_Too_Big', 'No puedes activar esta autorespuesta por que es demasiado grande.');

// this needs to have no single quotes in it.
define('LNG_Autoresponder_Title_Disable_Too_Big_Alert', LNG_Autoresponder_Title_Disable_Too_Big);

define('LNG_FilterOptions_Autoresponders', 'Opciones de búsqueda');
define('LNG_ShowFilteringOptions_Autoresponders', 'Enviar autorespuesta a');

define('LNG_AutoresponderFilterDetails', 'Filtrar por detalles básicos');

define('LNG_EditAutoresponderIntro_Step3', LNG_EditAutoresponderIntro);


/**
**************************
* Changed/added in NX 5.0
**************************
*/

define('LNG_HLP_AutoresponderName', 'Introduze un nombre para esta autorespuesa. Este nombre será usado para identificarlo en el panel de control y no será mostrado a tus contactos.');

define('LNG_AutoresponderIncludeExisting', '¿Enviar a contactos existentes?');

define('LNG_AutoresponderIncludeExistingExplain', 'Sí, enviar esta autorespuesta a contactos existentes');

define('LNG_HLP_MatchEmail', 'Las autorespuestas sólo serán enviadas a contactos que concuerden con esta dirección email. Puedes especificar todo o parte de la dirección email. Por ejemplo, para enviar sólo a las direcciones hotmail, puedes usar \\\'@hotmail.com\\\'. Para enviar a todas las direcciones emais, simplemente deja el campo en blanco.');

define('LNG_HLP_MatchFormat', 'Las autorespuestas sólo serán enviadas a contactos que hayan seleccionado este formato. Si seleccionas \\\'HTML\\\' entonces esta autorespuesta sólo será enviada a usuarios que hayan seleccionado \\\'HTML\\\' como su formato preferido al suscribirse a tu lista de contactos.');

define('LNG_HLP_MatchConfirmedStatus', 'Las autorespuestas sólo serán enviadas a contactos que hayan confirmado su suscripción. Al usar la opción double-optin en la suscripción, a tus contactos les es enviado un email para confirmar su suscripción. Si han confirmado su suscripción, entonces su estado será \\\'confirmado\\\'. Usualmente es mejor sólo enviar emails a contactos confirmados.');

define('LNG_HLP_SendMultipart', 'Enviar un email multiparte permitirá al gestor de correo del cliente decidir en qué formato (HTML o Texto) mostrar el mail.<br/><br/>Es mejor usar esta opción si no permites a tus contactos escoger el formato (por ej. todos son suscritos como HTML), cuando reciban el email su gestor de correo (por ej. Outlook) automáticamente mostrará el formato correcto.<br/><br/>Si no estás seguro, deja esta opción seleccionada.');

define('LNG_HLP_TrackOpens', '¿Quieres realizar un seguimiento de apertura de emails cuando un contacto reciba una email campaña? Si es así, podrás ver los informes de las pestañas de estadísticas en la parte superior de la página. Esto se aplica sólo a los boletines HTML.');

define('LNG_HLP_EmailFormat', '¿Cómo será esta autorespuesa compuesta y enviada? Selecciona HTML si quieres incluir texto en color, imágenes, tablas y otros elementos HTML. Escoge texto para crear y enviar tu autorespuesta en texto plano. Alternativamente, puedes escoger ambos \\\'HTML y Texto\\\' para crear 2 versiones de tu autorespuesta. Los contactos que puedan ver HTML verán la versión en HTML. Aquellos que no puedan verán sólo la versión de texto plano.');

define('LNG_AutoresponderHasBeenDisabled', 'Para prevenir el envío de una autorepuesta incompleta a tus contactos, esta ha sido marcada como inactiva. Para activar tu autorespuesta haz clic en la \'X\' de la columna activa.');

define('LNG_AutoresponderHasBeenDisabled_Save', 'Para prevenir el envío de una autorepuesta incompleta a tus contactos, esta ha sido marcada como inactiva.<br>Necesitarás activar esta autorespuesta cuando vayas a la página de administración de autorespuestas.');

define('LNG_HLP_Autoresponder_OpenedNewsletter', 'Esta opción te permitirá filtrar contactos que hayan abierto una email campaña en particular enviada a esta lista de contactos. Si seleccionado, sólo a los contactos que hayan abierto el email escogido les será enviada esta autorespuesta. Para enviar a todos los contactos, deja esta opción deseleccionada.');

define('LNG_HLP_Autoresponder_ClickedOnLink', 'Esta opción te permitirá filtrar contactos que hayan clicado en un link en particular de una email campaña enviada a esta lista de contactos. Si seleccionado, sólo a los contactos que hayan clicado el enlace seleccionado les será enviada esta autorespuesta. Para enviar a todos los contactos, deja esta opción deseleccionada.');

define('LNG_HLP_HoursDelayed', '¿Cuánto tiempo después de ser suscrito a tu lista debería el contacto recibir esta autorespuesta? Escoje \\\'Tan pronto como el contacto es suscrito a mi lista\\\' para enviar la autorespuesta a los contactos tan pronto se suscriban a tu lista.<br /><br />Escoge \\\'Después que el contacto haya estado en mi lista por\\\' para enviar la autorespuesta a los nuevos contactos después del período de tiempo específicado.');

define('LNG_Autoresponder_Size_Approximate', 'Esta autorespuesta será aproximádamente %s por contacto.');



define('LNG_Autoresponder_Size_Over_EmailSize_Warning_Embed', 'Esta autorespuesta es más grande que %s lo que significa que les puede llevar un rato a tus contactos a descargarla. Si no incrustaras las imágenes, reducirías el tamaño del email que tus contactos reciben.');
define('LNG_Autoresponder_Size_Over_EmailSize_Warning_No_Embed', 'Esta autorespuesta es más grande que %s lo que significa que les puede llevar un rato a tus contactos a descargarla.');

define('LNG_AutorespondersShowFilteringOptionsOneListExplain', 'Solo a los contactos que concuerden con mi critério de búsqueda (abajo)');
define('LNG_AutorespondersDoNotShowFilteringOptionsOneListExplain', 'A todos los contactos de mi lista con el estado "confirmado"');


define('LNG_AutoresponderAlreadySentTo', "*** IMPORTANTE **** \n\nEsta autorespuesa ya ha sido enviada a %s contactos. Si dejas esta opción seleccionad, todos estos contactos recibirán esta autorespuesta de nuevo. Si no quieres que reciban la autorespuesta de nuevo, simplemente deselecciona esta opción.\n\nLos nuevos contactos que se hayan suscrito a través de un formulario de tu sitio web o que hayan sido añadidos a través de la opción 'Añadir contactos' automáticamente recibirán esta autorespuesta.");

define('LNG_NoAutoresponders', 'Ninguna autorespuesta ha sido creada para esta lista de contactos. Haz clic en el botón <em>Crear una autorespuesta...</em> siguiente para crear una.');

define('LNG_AutoresponderAssign', '&nbsp;Por favor habla con el administrador del sistema para que te asigne una lista de contacto.');


define('LNG_HLP_AutoresponderIncludeExisting', 'Escoge esta opción para enviar la autorespuesta a ambos, nuevos y existentes, contactos de la lista de contactos seleccionada.<br /><br/>Esta opción no será recordada la próxima vez que edites esta autorespuesta.');


define('LNG_Autoresponder_Step1_Intro', 'Las autorespuestas son emails que puedes configurar para que sean enviados automáticamente y a intervalos diferentes a los contactos después de que se hayan suscrito. <a href="#" onClick="LaunchHelp(\'797\'); return false;">Aprende más sobre las autorespuestas</a>.');

define('LNG_Help_AutorespondersManage', LNG_Autoresponder_Step1_Intro);

define('LNG_CreateAutoresponder_Step1_Intro', 'Crear una autorespuesta es un proceso de varios pasos. Empieza introduciendo un nombre y escogiendo quién debería recibirla y haz clic en el botón <em>Siguiente &gt;&gt;</em>. <a href="#" onClick="LaunchHelp(\'797\'); return false;">Obtén ayuda sobre las autorespuestas aquí</a>.');

define('LNG_CreateAutoresponderIntro', LNG_CreateAutoresponder_Step1_Intro);

define('LNG_CreateAutoresponderIntro_Step3', LNG_Autoresponder_Step1_Intro);

define('LNG_AutoresponderCronNotEnabled', 'Antes que tus contactos puedan recibir autorespuestas, necesitas configurar los envíos programados. Por favor ver <a href="#" onclick="LaunchHelp(\'841\'); return false;">este artículo</a> para aprender cómo, o contacta con tu administrador.');

define('LNG_Autoresponder_Name_Reference', 'Este nombre es sólo para tu referéncia y no será mostrado a nadie');
define('LNG_Autoresponder_Filter_Help', 'Rellena los campos para filtrar contactos. No tienes que rellenarlos todos, sólo con los que quieras aplicar el filtro. <a onclick="LaunchHelp(\'832\'); return false;" href="#">Aprende más sobre filtrar contactos.</a>');

define('LNG_SchedulingDetails', 'Opciones de envío');
define('LNG_Autoresponder_Valid_Time', 'Por favor introduze un n\u00FAmero v\u00E1lido para el tiempo de retraso.');

define('LNG_Autoresponder_Send_ASAP', 'Tan pronto como el contacto es suscrito a mi lista');
define('LNG_Autoresponder_Send_Custom', 'Después que el contacto haya estado en mi lista por');

define('LNG_Autoresponder_Period_Hours', 'hora(s)');
define('LNG_Autoresponder_Period_Days', 'día(s)');
define('LNG_Autoresponder_Period_Weeks', 'semana(s)');
define('LNG_Autoresponder_Period_Months', 'mes(es)');
define('LNG_Autoresponder_Period_Years', 'anyo(s)');

define('LNG_Autoresponder_I_Want_To', 'Quiero que');
define('LNG_Autoresponder_From_Scratch', 'Crear el contenido de mi autorespuesta desde cero');
define('LNG_Autoresponder_From_Tpl', 'Usar una plantilla como base de mi autorespuesta');

define('LNG_DeleteAutoresponders', 'Eliminar la(s) autorespuesta(s) seleccionada(s)');

/**
**************************
* Changed/added in 5.6.6
**************************
*/

define('LNG_NoAttachment_Admin', 'Attachments have been disabled. They can be enabled in the Email Settings');
define('LNG_NoAttachment_User', 'Attachments have been disabled by the administrator');


?>
