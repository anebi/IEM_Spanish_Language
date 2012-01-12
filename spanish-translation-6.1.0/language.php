<?php
/**
* Language file variables. These are used all over the place - menus, paging, searching, templates, newsletters and so on.
*
* @see GetLang
*
* @version     $Id: language.php,v 1.153 2008/02/22 04:45:13 chris Exp $
* @author Chris <chris@interspire.com>
*
* @package SendStudio
* @subpackage Language
*/

define('LNG_EmailAddress', 'Direccion de email');

define('LNG_ControlPanel', "Panel de Control");
define('LNG_Statistics', "Estadísticas");
define('LNG_Forms', 'Formularios para páginas web');
define('LNG_Settings', "Configuración");
define('LNG_Go', 'Ir');
define('LNG_ShowHelp', 'Ayuda');
define('LNG_HideHelp', 'Esconder ayuda');
define('LNG_Logout', 'Cerrar sesión');
define('LNG_To', 'Hasta');
define('LNG_From', 'De');
define('LNG_N/A', 'N/A');

define('LNG_Action', 'Acción');

define('LNG_ViewAll', 'View All');

define('LNG_Page', 'Página');
define('LNG_Of', 'de');

define('LNG_GoToFirst', 'Ir a primera página');
define('LNG_GoToLast', 'Ir a última página');

define('LNG_Delete_Selected', 'Eliminar seleccionados');

define('LNG_NumberFormat_Dec', '.');
define('LNG_NumberFormat_Thousands', ',');
define('LNG_DateFormat', 'd M Y');
define('LNG_Quickstats_DateFormat', 'd-M-Y');
define('LNG_TimeFormat', 'F j Y, g:i a');
define('LNG_UserDateFormat', 'g:i a, d M Y');
define('LNG_Stats_TimeFormat', 'g:i a');

define('LNG_Yesterday_Date', 'Ayer');
define('LNG_Today_Date', 'Hoy');
define('LNG_Tomorrow_Date', 'Mañana');

define('LNG_Yesterday_Time', 'Ayer @ %s');
define('LNG_Today_Time', 'Hoy @ %s');
define('LNG_Tomorrow_Time', 'Mañana @ %s');

define('LNG_ViewingResultsFor', 'Viendo resultados para');

define('LNG_Home', "Inicio");

define('LNG_Either_Confirmed', 'Ambos confirmados y desconfirmados');
define('LNG_Either_Format', 'Cualquier formato');
define('LNG_Either_Status', 'Cualquier estado');

define('LNG_Total', "Total");

define('LNG_Yes', 'Sí');
define('LNG_No', 'No');

define('LNG_ShowMore', 'Mostrar más');
define('LNG_HideMore', 'Esconder más');

define('LNG_Created', 'Creado el');
define('LNG_Date_Created', 'Date Created');


define('LNG_Mon', 'Lun');
define('LNG_Tue', 'Mar');
define('LNG_Wed', 'Mie');
define('LNG_Thu', 'Jue');
define('LNG_Fri', 'Vie');
define('LNG_Sat', 'Sab');
define('LNG_Sun', 'Dom');

define('LNG_Jan', 'Ene');
define('LNG_Feb', 'Feb');
define('LNG_Mar', 'Mar');
define('LNG_Apr', 'Abr');
define('LNG_May', 'May');
define('LNG_Jun', 'Jun');
define('LNG_Jul', 'Jul');
define('LNG_Aug', 'Ago');
define('LNG_Sep', 'Sep');
define('LNG_Oct', 'Oct');
define('LNG_Nov', 'Nov');
define('LNG_Dec', 'Dic');

define('LNG_HoldMouseOver', "Mantenga el ratón sobre el texto subrayado para obtener más información");

define('LNG_PagingNext', "Siguiente");
define('LNG_PagingBack', "Anterior");

define('LNG_Next', "Siguiente >>");
define('LNG_Back', "Anterior");
define('LNG_ResultsPerPage',"Resultados por página");

define('LNG_ErrCouldntLoadTemplate', 'No se ha podido cargar la plantilla: %s');
define('LNG_PageTitle', 'Inicio');
define('LNG_Edit', 'Editar');
define('LNG_Delete', 'Eliminar');
define('LNG_Save', 'Guardar');
define('LNG_SaveAndExit', 'Guardar y salir');
define('LNG_Cancel', 'Cancelar');
define('LNG_Copy', 'Copiar');

define('LNG_Password', 'Contraseña');
define('LNG_PasswordConfirm', 'Contraseña (Confirmar)');
define('LNG_PasswordConfirmAlert', 'Por favor confirma tu nueva contraseña');
define('LNG_PasswordsDontMatch', 'Your passwords don\'t match. Please try again.');

define('LNG_GoBack', 'Volver');
define('LNG_NoAccess', 'Permiso denegado. Usted no tiene acceso a esta área o para llevar a cabo la acción solicitada. Por favor, póngase en contacto con su administrador.');

define('LNG_ConfirmCancel', '¿Estás seguro de querer cancelar?');

define('LNG_MyAccount', 'Mi cuenta');

define('LNG_Format_Text', 'Texto');
define('LNG_Format_HTML', 'HTML');
define('LNG_Format_TextAndHTML', 'HTML y Texto');


define('LNG_HTMLContent', 'Contenido HTML');
define('LNG_TextContent', 'Contenido Texto');

define('LNG_HTMLPreview', 'Previsualizar HTML');
define('LNG_TextPreview', 'Previsualizar Texto');

define('LNG_Step1', 'Paso 1');
define('LNG_Step2', 'Paso 2');
define('LNG_Step3', 'Paso 3');
define('LNG_Step4', 'Paso 4');

define('LNG_CustomFieldRequired_Popup', '* ');
define('LNG_PopupCloseWindow', '[ x Cerrar ]');

define('LNG_View', 'Ver');

define('LNG_Menu_MailingLists_Bounce', 'Procesar e-mails rebotados');

define('LNG_Menu_Templates_Title', 'Crea, administra y elimina tus plantillas.');

define('LNG_Menu_Statistics_Title', 'Ver estadísticas');
define('LNG_Menu_Statistics_Newsletters', 'Estadísticas email campañas');
define('LNG_Menu_Statistics_Users', 'Estadísticas cuentas usuario');
define('LNG_Menu_Statistics_Autoresponders', 'Estadísticas autorespestas');

define('LNG_RSS', 'RSS');


define('LNG_Email', 'Dirección de email');
define('LNG_HLP_Email', 'Dirección de email');

define('LNG_FilterEmailAddress', LNG_Email);

define('LNG_ConfirmedStatus', 'Confirmación de estado');
define('LNG_FilterConfirmedStatus', LNG_ConfirmedStatus);

define('LNG_Active', 'Activo');

define('LNG_Inactive', 'Inactivo');

define('LNG_Confirmed', 'Confirmado');
define('LNG_Unconfirmed', 'Desconfirmado');

define('LNG_UnableToOpenFile', 'No se puede abrir el archivo \'%s\'');
define('LNG_EmptyFile', 'El archivo \'%s\' está vacío');

define('LNG_FilterSearch', 'Filtrar por detalles básicos');

define('LNG_OK', 'Deacuerdo');

define('LNG_Preview', 'Previsualizar');
define('LNG_SelectTemplate', 'Por favor selecciona la plantilla a previsualizar.');
define('LNG_ChooseTemplate', 'Plantilla email');
define('LNG_HLP_ChooseTemplate', 'Elige una plantilla de email pre-diseñada como base de tu email campaña. Para crear una nueva plantilla, utiliza el menú de plantillas de la parte superior de la página.');

define('LNG_Preview_Template', 'Previsualización más grande');

define('LNG_SelectAll', 'Seleccionar todo');
define('LNG_UnselectAll', 'Deseleccionar todo');

define('LNG_PleaseChooseAction', 'Por favor esgoge una acción antes.');
define('LNG_ConfirmSubscriberChanges', '\u00BFSeguro que quieres llevar a cabo la acci\u00F3n seleccionada? No se puede deshacer.');
define('LNG_BulkAction', 'Acción en bloque');
define('LNG_ChooseAction', 'Escoge una acción');

define('LNG_ConfirmChanges', '\u00BFSeguro que quieres llevar a cabo la acci\u00F3n seleccionada? No se puede deshacer.');
define('LNG_NextButton', 'Siguiente &raquo;');

define('LNG_FileNotUploadedSuccessfully', 'El archivo no se ha cargado con éxito. Por favor, inténtalo de nuevo.');
define('LNG_FileNotUploadedSuccessfully_TooBig', 'El archivo no se ha cargado con éxito. Puede ser demasiado grande para cargar a través de su navegador.');

define('LNG_None', 'Ninguno');

define('LNG_CopyPrefix', 'Copia de '); // this is used for lists, templates and newsletters.

define('LNG_MergePrefix', 'Merge de '); // this is used for lists.

define('LNG_Bounced', 'Rebotado');
define('LNG_Unsubscribed', 'Desuscrito');
define('LNG_AllStatus', 'Cualquier estado');

define('LNG_Attachments', 'Archivos adjuntos');
define('LNG_HLP_Attachments', 'Para agregar un archivo adjunto, haga clic en el botón Examinar y seleccione un archivo de su ordenador. Una vez que ha seleccionado un archivo, puede añadir otro archivo adjunto y así sucesivamente. Puedes subir 5 archivos adjuntos en cualquier momento.');
define('LNG_ExistingAttachments', 'Archivos adjuntos existentes:');

define('LNG_UnableToCreateDirectory', 'No se puede crear el directorio para guardar los archivos adjuntos. Por favor, comprueba los permisos de tu servidor o póngase en contacto con su administrador.');

define('LNG_FileUploadSuccessful_One', 'Successfully uploaded one file.');
define('LNG_FileUploadSuccessful_Many', 'Successfully uploaded %s files.');
define('LNG_FileUploadFailure', 'Unable to upload the following files:');
define('LNG_FileExtensionNotValid', 'File extension %s is not allowed to be uploaded.');
define('LNG_NotUploadedFile', 'This file was not uploaded through the browser.');
define('LNG_FileTooBig', 'File is too big (%s). Must be less than %s');
define('LNG_UnableToUploadFile', 'Unable to upload the file.');
define('LNG_DirectoryNotWritable', 'The destination directory \'%s\' is not writable. Please check the permissions on that directory and try again or contact your administrator.');

define('LNG_HLP_DeleteAttachment', 'Check the box to delete this attachment. The attachment will be deleted after you have saved your work. This cannot be undone.');
define('LNG_DeleteAttachment', 'Delete Attachment? ');

define('LNG_FileDeleteSuccessful_One', 'Successfully deleted one file.');
define('LNG_FileDeleteSuccessful_Many', 'Successfully deleted %s files.');
define('LNG_FileDeleteFailure', 'Unable to delete the following files:');
define('LNG_FileNotFound', 'File not found');

define('LNG_ChangeStatus_Active', 'Change Status (Active)');
define('LNG_ChangeStatus_Inactive', 'Change Status (Inactive)');

define('LNG_Status_Active', 'Activo');
define('LNG_Status_Inactive', 'Inactivo');
define('LNG_Status_Confirmed', 'Confirmado');
define('LNG_Status_Unconfirmed', 'Desconfirmado');

// used in forms.


define('LNG_NoTemplate', 'Sin plantilla');

define('LNG_Global', 'Global');

// used anywhere to do with lists.
define('LNG_CustomFields', 'Filtrar por campos personalizados');
define('LNG_CustomFields_Manage', 'Ver campos personalizados');

// used for preview emails.
define('LNG_SendPreview', 'Previsualizar tu email campaña');

define('LNG_EnterPreviewEmail', 'Por favor introduze una dirección de correo electrónico.');
define('LNG_NoContentToEmail', 'No hay contenido, por lo que no se ha enviado el email de previsualización.');
define('LNG_NoEmailAddressSupplied', 'Ninguna dirección de correo electrónico fue indicada. Por favor vuelve a intentarlo.');

define('LNG_PreviewEmailSent', 'Una previsualización fue enviada a la dirección de correo electrónico %s.');

define('LNG_Send', 'Enviar');
define('LNG_Resume', 'Resumir');
define('LNG_Pause', 'Pausar');

define('LNG_DefaultUnsubscribeFooter_html', '<br/><a href="%%UNSUBSCRIBELINK%%">Haz clic aquó para desuscribirte</a>');
// need to use " so \n gets processed correctly.
define('LNG_DefaultUnsubscribeFooter_text', "\nHaz clic aquó para desuscribirte: %%UNSUBSCRIBELINK%%");

define('LNG_DefaultModifyFooter_html', '<br/><a href="%%MODIFYLINK%%">Haz clic aquó para actualizar tus detalles</a>');
// need to use " so \n gets processed correctly.
define('LNG_DefaultModifyFooter_text', "\nHaz clic aquó para actualizar tus detalles: %%MODIFYLINK%%");

define('LNG_TimeTaken_Seconds_One', '1 segundo');
define('LNG_TimeTaken_Seconds_Many', '%s segundos');

define('LNG_TimeTaken_Minutes_One', '1 minuto');
define('LNG_TimeTaken_Minutes_Many', '%s minutos');

define('LNG_TimeTaken_Hours_One', '1 hora');
define('LNG_TimeTaken_Hours_One_Minutes', '1 hora, %s minutos');
define('LNG_TimeTaken_Hours_Many', '%s horas');
define('LNG_TimeTaken_Hours_Many_Minutes', '%s hora, %s minutos');

define('LNG_TimeTaken_Days_One', '1 día');
define('LNG_TimeTaken_Days_One_Hours', '1 día, %s horas');
define('LNG_TimeTaken_Days_Many', '%s días');
define('LNG_TimeTaken_Days_Many_Hours', '%s días, %s horas');

define('LNG_TimeTaken_Months_One', '1 mes');
define('LNG_TimeTaken_Months_One_Days', '1 mes, %s días');
define('LNG_TimeTaken_Months_Many', '%s meses');
define('LNG_TimeTaken_Months_Many_Days', '%s meses, %s días');

define('LNG_TimeTaken_Years_One', '1 año');
define('LNG_TimeTaken_Years_Many', '%s años');

define('LNG_CronNotEnabled', 'El envío cron no ha sido activado. Por favor habla con tu administrador para configurarlo.');

define('LNG_Custom', 'Personalizado');

define('LNG_ShowCustomFields', 'Campo personalizado');
define('LNG_InsertUnsubscribeLink', 'Enlace desuscriptor');

/** Only if Addon enabled **/
define('LNG_InsertSurveyLink', 'Insert Survey Link...');
define('LNG_SurveysInsert_Editor', 'Insert Survey Link');
define('LNG_Surveys_tinymceIModalInsert', 'Insert Survey Link');
define('LNG_Surveys_tinymceIModalCancel', 'Cancel');


define('LNG_Approve', 'Approve');
define('LNG_Approved', 'Approved');
define('LNG_Disapprove', 'Disapprove');
define('LNG_Disapproved', 'Disapproved');

define('LNG_NewsletterSubject', 'Email Subject');
define('LNG_Subject', 'Subject');
define('LNG_Name', 'Name');

define('LNG_YesFilterByCustomDate', 'Sí, filtrado por el campo \'%s\'');

define('LNG_AlreadySentTo_Heading', 'Last Send Information');
define('LNG_AlreadySentTo_SoFar', 'Sent to %s / %s so far');

// used by "manage schedule" page.
define('LNG_AlreadySentTo', ' (Enviado a %s / %s)');

define('LNG_ShowFilteringOptions', 'Mostrar opciones de filtrado');
define('LNG_ShowFilteringOptionsExplain', 'Sí, mostrar opciones de filtrado en la siguiente página');

/**
* Common custom field stuff.
* This is used by searching, exporting.
*/
define('LNG_YesFilterByDate', 'Sí, filtrar por fecha de suscripción');
define('LNG_After', 'Después');
define('LNG_Before', 'Antes');
define('LNG_Between', 'Entre');
define('LNG_Exactly', 'Exactamente');
define('LNG_AND', 'Y');


define('LNG_ExportFileDeleted', 'El archivo de exportación seleccionado ha sido suprimido.');
define('LNG_ExportFileNotDeleted', 'El archivo de exportación no ha sido suprimido. Por favor vuelve a intentarlo.');

/**
* Jobs
*/
define('LNG_Waiting', 'Esperando');
define('LNG_Job_Waiting', 'Será enviado en');
define('LNG_Job_Complete', 'Completado');
define('LNG_Job_InProgress', 'En progreso');
define('LNG_Job_Paused', 'Pausado');
define('LNG_WaitingToSend', 'Esperando envío'); // this is used if 2 cron jobs have not run yet, so we can't work out the time difference.
define('LNG_ImapSupportMissing', 'El soporte IMAP no es soportado. Los emails rebotados no podrán ser procesados sin el soporte IMAP.');


define('LNG_AnyList', '-- Todas las listas --');

/**
* Subscriber stuff.
*/
define('LNG_UserChooseFormat', 'Formato de la email campaña');
define('LNG_Unknown', 'Desconocido');
define('LNG_SubscribeRequestDate', 'Fecha solicitud contacto');

define('LNG_Subscriber_NotSubscribed', 'El email \'%s\' no está suscrito a esta lista');

define('LNG_ViewSchedule', 'View Sending Schedule');

/**
* Handles importing / uploading of a template / newsletter / autoresponder.
*/
define('LNG_UploadedFileEmpty', 'Uploaded file is empty. Please try again.');
define('LNG_UploadedFileBad', 'Unable to upload file. Please try again.');
define('LNG_UploadFileTooBig', 'Unable to upload file. It is too large. Please try a smaller file.');

define('LNG_UploadedFileCantBeRead', 'Unable to read uploaded file. Please try again.');
define('LNG_URLIsEmpty', 'URL is empty. Please try again.');
define('LNG_URLCantBeRead', 'Unable to fetch url. Please make sure it is valid and then try again.');
define('LNG_NoCurlOrFopen', 'Unfortunately your server cannot open remote files.<br/>Please ask your system administrator to enable curl or remote fopen support.');

/**
* Used for the settings page and the users page.
*/
define('LNG_UseSMTP', 'Use SMTP Server');
define('LNG_UseSMTPExplain', 'Yes, use an SMTP server');

define('LNG_SmtpServer', 'SMTP Server');
define('LNG_HLP_SmtpServer', 'Choose to use the default SMTP server specified from the settings page, or choose to use a custom SMTP server for this client.');

define('LNG_SmtpServerIntro', 'Mail Server Details');
define('LNG_SmtpServerName', 'SMTP Hostname');
define('LNG_HLP_SmtpServerName', 'Enter the SMTP host name here, such as &quot;192.168.0.50&quot; or &quot;mail.mysite.com&quot;');
define('LNG_SmtpServerUsername', 'SMTP Username');
define('LNG_HLP_SmtpServerUsername', 'If your SMTP server requires authentication, enter the username here.');
define('LNG_SmtpServerPassword', 'SMTP Password');
define('LNG_HLP_SmtpServerPassword', 'If your SMTP server requires authentication, enter the password here.');
define('LNG_SmtpServerPort', 'SMTP Port');
define('LNG_HLP_SmtpServerPort', 'To use a non-standard SMTP port (the default is 25), enter it here.');

/**
* Used by the email class and testsmtp scripts.
*/
define('LNG_UnableToConnectToEmailServer', 'Unable to connect to mail server: %s');
define('LNG_UnableToSendEmail_MailFrom', 'Unable to set mail from address.');
define('LNG_UnableToSendEmail_RcptTo', 'Unable to set receipt to address.');
define('LNG_UnableToSendEmail_Data', 'Unable to set data.');
define('LNG_UnableToSendEmail_DataWriting', 'Unable to send data.');
define('LNG_UnableToSendEmail_DataFinished', 'Unable to send "." to server.');
define('LNG_UnableToConnectToMailServer_EHLO', 'Unable to send "EHLO" command.');
define('LNG_UnableToConnectToMailServer_RequiresAuthentication', 'Server requires authentication but no username or password has been set.');
define('LNG_UnableToConnectToMailServer_AuthLogin', 'Unable to send "auth login" to server.');
define('LNG_UnableToConnectToMailServer_AuthLoginNotSupported', 'Unable to authenticate with server. Doesn\'t support "AUTH LOGIN"');
define('LNG_UnableToConnectToMailServer_UsernameNotWritten', 'Unable to authenticate with server. Username not written.');
define('LNG_UnableToConnectToMailServer_PasswordNotWritten', 'Unable to authenticate with server. Password not written.');

/**
* Used with newsletters, templates, autoresponders, form creation
*/
define('LNG_ImportWebsite', 'Import');

define('LNG_HTML_Using_Editor', 'Create content using the WYSIWYG editor below');
define('LNG_Editor_Import_Website', 'Import a file from a web site');
define('LNG_Editor_Use_URL', 'Use an existing URL');
define('LNG_Text_Type', 'Type text into the text box below');
define('LNG_Editor_Import_File_Wait', 'Importing file, please wait...');
define('LNG_Editor_Import_Website_Wait', 'Importing website, please wait...');
define('LNG_Editor_ProblemImportingWebsite', 'There was a problem importing from the specified url. Please try again.');
define('LNG_Editor_ChooseWebsiteToImport', 'Please type in the full url of the website you want to import.');
define('LNG_Editor_ImportButton', 'Import');

/**
* Used for sending and autoresponders
*/
define('LNG_EmbedImages', 'Embed Images as Attachments?');
define('LNG_EmbedImagesExplain', 'Yes, embed images in the content');

define('LNG_SendTo_FirstName', 'My &quot;First Name&quot; Custom Field is');

define('LNG_SendTo_LastName', 'My &quot;Last Name&quot; Custom Field is');

define('LNG_SelectNameOption', 'Please select your "name" custom field');

// used all over the place with newsletters
define('LNG_CreateNewsletterButton', 'Create an Email Campaign...');
define('LNG_NoNewsletters', 'No email campaigns have been created.%s');

// used by autoresponders & stats
define('LNG_SentWhen', 'Sent');
define('LNG_Immediately', 'Immediately after signup');
define('LNG_HoursAfter_One', '1 hour after signup');
define('LNG_HoursAfter_Many', '%s hours after signup');

define('LNG_ClickedOnLink', 'Clicked On Link');
define('LNG_YesFilterByLink', 'Yes, filter by link');
define('LNG_LoadingMessage', 'Cargando, por favor espera...');
define('LNG_FilterAnyLink', 'Cualquier enlace');

define('LNG_OpenedNewsletter', 'Abierto una email campaña');
define('LNG_YesFilterByOpenedNewsletter', 'Sí, filtrar por email campañas abiertas');
define('LNG_FilterAnyNewsletter', 'Cualquier email campana');

define('LNG_UnableToOpenPopupWindow', 'Error: No se ha podido abrir la ventana necesaria del navegador web. Por favor comprueba que hayas deshabilitado el bloqueador popup y que no tengas algún script de Norton internet security, ZoneAlarm o cualquier otro que pueda estar bloqueando al navegador web de abir ventanas y vuelve a intentarlo.');



/**
* used by sending and forms.
*/
define('LNG_SendFromName', 'Enviar desde este nombre:');

define('LNG_SendFromEmail', 'Enviar desde este email');

define('LNG_ReplyToEmail', 'Enviar respuestas a');

define('LNG_BounceEmail', 'Enviar emails rebotados a');

/**
* Searching custom fields.
*/
define('LNG_Filter_Number', 'Filter Number Field');

define('LNG_Filter_Checkbox', 'Filter Checkbox Field');
define('LNG_HLP_Filter_Checkbox', 'To restrict filtering of this field, tick the options you want to search for.');

define('LNG_Filter_Date', 'Filter Date Field');

define('LNG_Filter_Dropdown', 'Filter Dropdown Field');
define('LNG_HLP_Filter_Dropdown', 'To filter searching of this field, choose an option you want to search for.');

define('LNG_Filter_Radiobutton', 'Filter Radio Button Field');
define('LNG_HLP_Filter_Radiobutton', 'To filter searching of this field, choose an option you want to search for.');

define('LNG_Filter_Text', 'Filtrar por campo de texto');
define('LNG_HLP_Filter_Text', 'Para filtrar buscando en este campo, introduze algún texto que debería aparecer. Este será encontrado en cualquiera de los textos sin importar una concordáncia exacta.');

define('LNG_Link_WebVersion', 'Web Version of Email');
define('LNG_Link_Unsubscribe', 'Unsubscribe Link');


define('LNG_SendingSystem_From', 'email@domain.com');
define('LNG_UserLimitReached', 'You have reached your maximum number of users and cannot create any more.');

define('LNG_User_OverQuota_Email', 'Hi,
This email is to notify you that user \'%s\' (email address %s) has scheduled a newsletter to go out on %s. They have gone over their %s limit by %s email(s).

%s

You can email them by clicking "Reply" in your email program.
');
define('LNG_User_OverLimit_MaxEmails', 'maximum number of emails');
define('LNG_User_OverLimit_PerMonth', 'maximum number of emails per month');
define('LNG_User_OverQuota_StoppedSend', 'The send has been disapproved.');
define('LNG_User_OverQuota_Subject', 'User over-quota notification');

define('LNG_User_OverQuota_ToUser_Email', 'Hi,
This email is to notify you that your send, scheduled to go out on %s has gone over your %s limit by %s email(s).

%s

You can email the administrator by clicking "Reply" in your email program.
');

define('LNG_User_OverQuota_ToUser_Subject', 'Over-quota notification');

/**
**************************
* Changed/Added in NX1.0.5
**************************
*/

/**
* these MUST be space separated.
* This is only used to display the date/time options when sending a newsletter
* and has to be in the correct format and only contain the 3 options mentioned:
* - 'd' for day
* - 'm' for month
* - 'y' for year
* The order does not matter but the values do.
*/
define('LNG_DateTimeBoxFormat', 'd m y');


/**
**************************
* Changed/Added in NX1.0.7
**************************
*/


/**
**************************
* Changed/Added in NX1.1.3
**************************
*/
define('LNG_PreviewEmailNotSent', 'A preview couldn\'t be sent to the email address %s: %s');


/**
**************************
* Changed/Added in NX 1.3
**************************
*/
define('LNG_TestSMTPSettings', 'Test SMTP Settings');
define('LNG_HLP_TestSMTPSettings', 'Enter an email address to send a test using the smtp details above.');
define('LNG_EnterTestEmail', 'Please enter an email address to send a test to');
define('LNG_EnterSMTPServer', 'Please enter your smtp server name to test');

define('LNG_TestSendingSubject', 'Test Email System');
define('LNG_TestSendingEmail', "Hi,\nThis is a test of the emailing system. If you received this ok, then everything is working as it should."); // this is in double quotes because of the newline.

define('LNG_SendTestIntro', 'Test Sending');
define('LNG_TestEmailAddress', 'Test Sending System');
define('LNG_HLP_TestEmailAddress', 'Enter an email address to test the sending system (uses the SMTP server details provided above if applicable).');

define('LNG_TestEmailSent', 'A test email has been successfully sent to the email address %s.');

define('LNG_TestEmailNotSent', 'A test email has not been successfully sent to the email address %s: %s');

define('LNG_UnableToLoadImage_Newsletter_List_Embed', 'Unable to load the following images to embed in the email campaign:<br/>%s');
define('LNG_UnableToLoadImage_Newsletter_List', 'Unable to load the following images in the email campaign:<br/>%s');
define('LNG_UnableToLoadImage', '- <a href="%s" target="_blank">%s</a> (%s)<br/>');

define('LNG_Bytes', ' B');
define('LNG_KiloBytes', ' KB');
define('LNG_MegaBytes', ' MB');
define('LNG_GigaBytes', ' GB');

define('LNG_GetTextContent', 'Obtener contenido del editor');

define('LNG_ImageInsert_Editor', 'Insertar o modificar una imagen');

define('LNG_ModifyLinkPlaceholder', 'Haz clic aquí para actualuzar tus detalles');
define('LNG_SendToFriendLinkPlaceholder', 'Haz clic aquí para para enviar este email a un amigo');

define('LNG_UnableToDelete', 'No se puede eliminar el archivo');


define('LNG_AllOfTheFollowing', 'Todos los siguientes');
define('LNG_AnyOfTheFollowing', 'Cualquiera de los siguientes');

define('LNG_Menu_Templates_Create', 'Craer plantilla personalizada');
define('LNG_Menu_Templates_Manage_BuiltIn', 'Plantillas incorporadas');
define('LNG_Templates_BuiltIn', LNG_Menu_Templates_Manage_BuiltIn);

define('LNG_Menu_Newsletters_Create', 'Crear una email campaña');
define('LNG_Menu_Newsletters_Manage', 'Ver email campañas');
define('LNG_Menu_Newsletters_Send', 'Enviar una email campaña');
define('LNG_Menu_Newsletters_ManageSchedule', 'Ver cola de envíos programados');
define('LNG_Menu_Newsletters_Title', 'Crear, ver y eliminar tus email campañas.');

define('LNG_Menu_Autoresponders_Title', 'Crear, ver y eliminar tus autorespuestas.');
define('LNG_Menu_Autoresponders_Manage', 'Ver autorespuestas');
define('LNG_Menu_Autoresponders_Create', 'Crear una autorespuesta');


define('LNG_ActiveEmailCampaignHelp', 'Una email campaña puede hacerse activa e inactiva. Una email campaña inactiva no podrá ser enviada, mientras que una activa sí lo podrá ser. Puedes usar ésta opción si deseas crear una email campaña que necesita ser aprobada antes de poder ser enviada donde una persona crea una email campaña inactiva y otra la aprueba y \\\'Activa\\\' para ser enviada.');

define('LNG_ActiveAutoresponderHelp', 'Una email campaña también puede hacerse activa e inactiva. Una email campaña inactiva no podrá ser enviada, mientras que una activa sí lo podrá ser. Puedes usar ésta opción si deseas crear una email campaña que necesita ser aprobada antes de poder ser enviada donde una persona crea una email campaña inactiva y otra la aprueba y \\\'Activa\\\' para ser enviada.');

define('LNG_HLP_SendPreview', 'Introduze tu dirección de correo electrónico y haz clic en el botón \\\'Previsualizar tu email campaña\\\' para recibir una copia de este email. Si deseas enviar a varias direcciones puedes separarlas mediante el uso de una coma - por ejemplo email@domain.com, email2@domain.com.<br/><br/>Si has subido nuevos archivos adjuntos, éstos no serán incluidos como parte de la previsualización del email.');

define('LNG_SendNewsletterButton', 'Enviar una email campaña...');

define('LNG_NoNewsletters_HasAccess', ' Por favor haz clic en el botón "Crear una email campaña" para crear una.');

define('LNG_Format_Text_Description', 'Text only emails are viewable in all email clients and are less likely to be reported as spam due to the lack of HTML code. This type of email will not be able to obtain results for open rates.');

define('LNG_Newsletter_Size_Over_EmailSize_Maximum', 'Esta email campaña es más grande que %s. No serás capaza de enviar esta email campaña hasta que reduzcas el tamaño de las imágenes o archivos adjuntos, o puedes enviar la email campaña sin incrustar las imágenes.');

define('LNG_Editor_Upload_File', 'Subir un archivo desde mi ordenador');

define('LNG_Templates_User', 'Plantillas personalizadas');

define('LNG_SpamHeading_RuleBroken', 'Reglas rotas');
define('LNG_SpamHeading_Score', 'Puntuación');
define('LNG_Spam_Heading_intro_text', 'La versión <b>texto</b> de tu email rompe las siguientes reglas spam:');
define('LNG_Spam_Heading_intro_html', 'La versión <b>HTML</b> de tu email rompe las siguientes reglas spam:');
define('LNG_Spam_Heading_intro_notspam_text', 'La versión <b>texto</b> de tu email no rompe ninguna regla spam.');
define('LNG_Spam_Heading_intro_notspam_html', 'La versión <b>HTML</b> de tu email no rompe ninguna regla spam.');

define('LNG_Spam_Rating_Message', '<br />Su email fue puntuado <span style="font-size:15px; font-weight:bold">%s</span> en el umbral spam del  %s. %s');

define('LNG_Spam_Rating_notspam', 'Esto significa que hay una alta posibilidad que tu email sea entregado, pero no está garantizado.');
define('LNG_Spam_Rating_alert', 'Si bien su calificación de spam no supera el umbral, es recomendable eliminar las palabras clave spam antes de enviar el email.');
define('LNG_Spam_Rating_spam', 'Esto significa que tu email contiene una gran cantidad de palabras clave relacionadas con el spam . Es altamente recomendable que las elimines o sustituyas antes de proseguir con el envio.');

define('LNG_Banned_Manage_NoList_Message', 'administrar tu lista de supresión');
define('LNG_Banned_Add_NoList_Message', 'añadir una dirección de correo electrónico a tu lista de supresión');

define('LNG_Menu_Templates_Description', '\'Las plantillas\' son disenos pre-definidos en los que basar los nuevos emails.');

define('LNG_Menu_Home_Description', 'Volver a la página de inicio.');
define('LNG_Menu_Forms_Description', 'Los formularios web permiten a la gente suscribirse, darse de baja, modificar sus datos y reenviar tus emails a sus amigos.');
define('LNG_Menu_Users_Own_Description', 'Editar los detalles de tu cuenta personal');
define('LNG_Menu_Settings_Description', 'La configuración del sistema controla la principal funcionalidad de la aplicación.');
define('LNG_Menu_Help_Description', 'Ver tutoriales y artículos sobre la funcionalidad y mejora de tus email campanas.');
define('LNG_Menu_Logout_Description', 'Salir del sistema.');
define('LNG_Logo_Description', 'Volver a la página de inicio.');

define('LNG_SpamKeywordsCheck', 'Chequea tu email en busca de spam');
define('LNG_SpamKeywordsCheck_Button', 'Buscar palabras clave spam');

define('LNG_EmailClientCompatibility', 'Compatibilidad gestores de correo');
define('LNG_EmailClientCompatibility_Button', 'Ver en diferentes gestores de correo');

define('LNG_MiscellaneousOptions', 'Varias opciones');

define('LNG_Recommended', '(Recomendado)');

define('LNG_Search_HaveClicked', 'Ha clicado');
define('LNG_Search_HaveNotClicked', 'No ha clicado');
define('LNG_Search_HaveOpened', 'Ha abierto');
define('LNG_Search_HaveNotOpened', 'No ha abierto');

define('LNG_OriginalHTMLVersion', 'Versión HTML original');

define('LNG_DesignRules_Header', '<b>Normas de formato del email</b><br/><br/>');

define('LNG_DesignRules_Intro', 'A continuación se muestra una lista de varios gestores de correo y las diferentes reglas de formato que pueden haber sido rotas.<br/><br/>Para ver el resultado del email en un gestor de correo específico, haga clic en el enlace correspondiente de arriba.');

define('LNG_Autoresponder_Count_None', '');
define('LNG_Autoresponder_Count_One', ' (1 autorespuesta)');
define('LNG_Autoresponder_Count_Many', ' (%s autorespuestas)');

define('LNG_MaximumFileSizeReached', 'You are trying to upload file larger than the server would allow you to upload. The maximum file size imposed by the server is: %s');

define('LNG_NewsletterDefaultTextContents', "Tu gestor de correo no puede leer este email.\nPara verlo en línea, por favor ir aquí: %%webversion%%\n\n\nPara dejar de recibir estos emails:%%unsubscribelink%%");

define('LNG_DesignRules_NoRulesBroken', 'El correo debería mostrarse correctamente.');

define('LNG_EmailValidation', 'Validación del email');

define('LNG_Format_', '');
define('LNG_FormType_', '');


/**
***************************
* Changed/Added in NX 1.3.1
***************************
*/

define('LNG_ShowFilteringOptionsLabel_Manage', 'Muéstrame:');
define('LNG_ShowFilteringOptionsLabel_Export', 'Quiero que:');

/**
***************************
* Changed/Added in NX 1.3.2
***************************
*/
define('LNG_Users', "Cuentas de usuario");

/**
***************************
* Changed/Added in NX 1.3.3
***************************
*/
define('LNG_DesignRules_PrintNotFinishedLoading', 'The list of broken rules is not yet loaded. Please wait untill this list has completed loading before trying to print.');
define('LNG_DesignRules_LoadingRules', 'Loading rules for %s');

/**
***************************
* Changed/Added in NX 1.4
***************************
*/

define('LNG_WhatDoesThisMean', 'What does this mean?');

define('LNG_Loading_Stats','Loading, please wait...');

define('LNG_AlreadySentTo_Partial', '(Partially Sent)');
define('LNG_ResendTipHeading', 'Resend your email campaign');

define('LNG_Resend', 'Resend');

define('LNG_NoneOfTheFollowing', 'None of the following');

define('LNG_Loading_SendingPreview', 'Sending preview email...');

define('LNG_UserDateHeader', 'Hora del sistema: %s - (%s)');
define('LNG_LoggedInAs', 'Has iniciado sesión como "%s" | ');

define('LNG_Job_Resend', 'Reenviando');
define('LNG_JobResendSuccess', 'Your email campaign has been set up to re-send. It will send as soon as possible.');
define('LNG_JobResendFail', 'Your email campaign has not been set up to re-send. Please try again.');

define('LNG_CurrentUserReport', 'Cuentas de usuario actualmente asignadas: %s&nbsp;/&nbsp;cuentas de administrador: %s&nbsp;(Tu licencia te permite crear %s cuenta más)');
define('LNG_CurrentUserReport_Multiple', 'Cuentas de usuario actualmente asignadas: %s&nbsp;/&nbsp;cuentas de administrador: %s&nbsp;(Tu licencia te permite crear %s cuentas más)');

define('LNG_SendPreview_Loading', 'Enviando previsualización...');

define('LNG_CronSkippedProblem', 'Your cron job has not been triggered for its last %s expected runs. You should contact your host to make sure that it is still functional.');

define('LNG_TestModeEnabled', 'Your application is currently in test mode. This means no emails will be sent when you try to send an email campaign.');

define('LNG_Spam_Guide_Heading', 'Chequea tu email en busca de spam');

define('LNG_SmtpDefault', 'Use my default SMTP server');
define('LNG_SmtpDefaultSettings', 'Use my default mail settings');
define('LNG_SmtpCustom', 'Let me specify my own SMTP server details');

define('LNG_UseDefaultMail', 'Default Mail');
define('LNG_HLP_UseDefaultMail', 'Choose this option if you don\\\'t have your own SMTP server and want to use the default mail settings for your server. If you need to send more than a few hundred emails each week, many hosts require you to have your own SMTP server.');

define('LNG_Add_Banned_From_File', 'Quiero subir un archivo que contiene las direcciones de email/dominios a suprimir');

define('LNG_ProblemWithLocalMailServer', 'The local mail server did not accept your email. Please contact your host or systems administrator.');

define('LNG_OR', 'OR');

define('LNG_BounceError_NoDetails', 'No email account details were supplied. Please try again.');

/**
***************************
* Changed/Added in NX 1.4.1
***************************
*/
define('LNG_UseSMTP_User', LNG_UseSMTP);
define('LNG_HLP_UseSMTP_User', LNG_HLP_UseSMTP . ' The SMTP server configured here will override all other SMTP settings for this user.');
define('LNG_FileTooBig_Server', 'The file is too big and cannot be uploaded. It must be less than %s. If you need to increase this size, contact your systems administrator or web host and ask them to increase the PHP "upload_max_filesize" setting.');
define('LNG_FilePartiallyUploaded', 'The file was not uploaded correctly. Please try again.');
define('LNG_FileTooBig_NoSpace', 'The file was not uploaded as the server has run out of space or you have reached your disk quota. Please contact your systems administrator or web host.');
define('LNG_FileUploadProblem_NoTmpDir', 'The file was not uploaded as the server does not have a temporary directory set up correctly. Please contact your systems administrator or web host and ask them to set the PHP "upload_tmp_dir" setting.');

/**
***************************
* Changed/Added in v5.0
***************************
*/

define('LNG_DateSubscribed', 'Fecha en que se agrego');
define('LNG_VisibleFields','Campos visibles');
define('LNG_HLP_VisibleFields','Elige los campos que serán vistos para esta lista cuando estés en la página Ver Contactos de la misma.');
define('LNG_ShowTheseFields','Mostrar estos campos');
define('LNG_SelectFields','Por favor selecciona al menos un campo a mostrar para esta lista.');

define('LNG_Subscribers', 'Contactos');

define('LNG_HLP_FilterFormat', 'Esta opción te permitirá buscar contactos que se hayan suscrito eligiendo un formato concreto. Para buscar en todos los contactos, elige la opción \\\'Cualquier formato\\\'.');

define('LNG_Subscriber_Count_Many', ' (%s contactos activos)');
define('LNG_Subscriber_Count_One', ' (1 contacto activo)');

define('LNG_HLP_FilterEmailAddress', 'Esta opción te permitirá buscar contactos con un nombre de dominio concreto o partes de su dirección de email. Para buscar en todos los contactos, deja esta opción vacía.');

define('LNG_HLP_FilterConfirmedStatus', 'Esta opción te permitirá buscar contactos en base si han confirmado su suscripción o no. Para buscar en todos los contactos, elige la opción \\\'Ambos confirmados y desconfirmados\\\'.');

define('LNG_HLP_ShowFilteringOptions', 'Escoge la primera opción para exportar todos los contactos de tu lista. Escoge la segunda opción para ver las opciones de filtrado y así tan solo exportar contactos que concuerden con tus criterios de búsqueda.');

define('LNG_HLP_FilterByDate', 'Esta opción te permitirá filtrar contactos que se han suscrito antes, después o entre fechas específicas. Para buscar en todos los contactos, deja esta opción deseleccionada.');

define('LNG_HLP_SubscribeRequestDate', 'La fecha y hora en la cual este contacto solicitó formar parte de esta lista.');
define('LNG_SubscribeRequestIP', 'IP solicitud contacto');
define('LNG_HLP_SubscribeRequestIP', 'La dirección I.P. del ordenador desde el cual este este contacto solicitó querer formar parte de esta lista.');
define('LNG_SubscribeConfirmDate', 'Fecha confirmación contacto');
define('LNG_HLP_SubscribeConfirmDate', 'La fecha y hora en la cual este contacto confirmó formar parte de esta lista.');
define('LNG_SubscribeConfirmIP', 'IP confirmación contacto');
define('LNG_HLP_SubscribeConfirmIP', 'La dirección I.P. del ordenador desde el cual este este contacto confirmó querer formar parte de esta lista.');

define('LNG_NoSubscribersOnList', 'No hay contactos en la(s) lista(s) que has seleccionado.');
define('LNG_NoSubscribersMatch', 'Ningún contacto concuerda con tu criterio de búsqueda. Por favor vuelve a intentarlo.');
define('LNG_NoSubscribersOnSegment', 'No hay contactos en el/los segmento(s) que has seleccionado.');

define('LNG_HLP_EmbedImages', 'Esto insertará las imágenes del contenido dentro del email que los contactos recibirán. Esto hace los emails significantemente más pesados pero permitirá a los contactos ver el contenido sin estar conectados a internet.');

define('LNG_HLP_SendTo_FirstName', 'Si tienes un campo personalizado para el \\\'nombre\\\' del contacto, escogelo aquí para que así el boletín pueda ser dirigido a la persona individualmente.<br/><br/>Si tienes un campo personalizado combinado para el nombre de la persona (por ejemplo solo un campo llamadao \\\'nombre\\\') entonces escoge ese campo personalizado aquí.');

define('LNG_HLP_SendTo_LastName', 'Si tienes un campo personalizado para el \\\'apellido\\\' del contacto, escogelo aquí para que así el boletín pueda ser dirigido a la persona individualmente.<br/><br/>Si tienes un campo personalizado combinado para el nombre de la persona (por ejemplo solo un campo llamadao \\\'nombre\\\') entonces deja esta opción vacía.');

define('LNG_HLP_ClickedOnLink', 'Esta opción te permitirá filtrar contactos que hayan hecho clic en un enlace concreto de una email campaña o autorespuesta enviada a esta lista de contactos. Para buscar en todos los contactos, deja esta opción deseleccionada.');

define('LNG_HLP_OpenedNewsletter', 'Esta opción te permitirá filtrar contactos que hayan abierto una email campaña o autorespuesta concreta enviada a esta lista de contactos. Para buscar en todos los contactos, deja esta opción deseleccionada.');

define('LNG_NoUnsubscribeLinkInHTMLContent', 'No se encontró un enlace de desuscripción en la versión html de tu email. Es recomendable que añadas uno para que así los contactos puedan fácilmente darse de baja de tu lista de contactos.');

define('LNG_NoUnsubscribeLinkInTextContent', 'No se encontró un enlace de desuscripción en la versión texto de tu email. Es recomendable que añadas uno para que así los contactos puedan fácilmente darse de baja de tu lista de contactos..');

define('LNG_HLP_Filter_Number', 'To restrict filtering of this field, you can use >, = and <. For example, to search for contacts who are under 25, enter < 25.');

define('LNG_HLP_Filter_Date', 'Choose the date or date range to filter contacts.<br/>To search between months, put * as the year.<br/>This only works when searching between dates.');

define('LNG_Newsletter_SendSize_Approximate', '<li>Cada email tendrá un peso alrededor de los <b>%s</b>, con un total de <b>%s</b> para el envío completo</li>');

define('LNG_Menu_Members_Title', 'Crear, ver y eliminar contactos.');

define('LNG_Subscribers_Search_Step2', 'Busca contactos introduciendo parámetros de búsqueda y cambiando las opciones del formulario siguiente. Aprende como buscar contactos más eficientemente leyendo <a href="#" onClick="LaunchHelp(\'832\'); return false;">este artículo</a>.');

define('LNG_Format_HTML_Description', 'Your contacts must be using an HTML capable email client to be able to view this type of email. This type of email will produce the best results for open rates and link tracking.');
define('LNG_Format_TextAndHTML_Description', 'This will allow your contacts to view your email in any type of client they wish. This type of email will produce limited results for open rates and link tracking.');

define('LNG_Newsletter_Size_Over_EmailSize_Warning', 'Esta email campaña es más grande que %s lo que significa que tus contactos tardarán en descargar el email si decides incrustar las imágenes.');

define('LNG_Newsletter_Size_Over_EmailSize_Warning_Send', 'Esta email campaña es más grande que %s lo que significa que tus contactos tardarán en descargar el email.');

define('LNG_Help_ListsManage', 'Las listas de contactos se utilizan para almacenar detalles sobre los suscritos o clientes potenciales, que incluyen su dirección de correo electrónico y otros detalles como el nombre, compañía, edad, etc.');

define('LNG_Import_Add_NoList_Message', 'importar tus contactos');
define('LNG_Export_Add_NoList_Message', 'exportar tus contactos');
define('LNG_View_NoList_Message', 'ver tus contactos');
define('LNG_Remove_NoList_Message', 'eliminar contactos');
define('LNG_Add_NoList_Message', 'añadir contactos');

define('LNG_Menu_MailingLists_Description', 'Ver, añadir y editar tus listas de contactos o clientes potenciales.');
define('LNG_Menu_Members_Description', 'Ver o buscar contactos a través de todas las listas.');
define('LNG_Menu_Newsletters_Description', 'Ver o editar tus campañas de email existentes.');
define('LNG_Menu_Autoresponders_Description', 'Ver o editar tus autorespuestas existentes.');

define('LNG_AddSubscriber', 'Añadir&nbsp;contacto');
define('LNG_AddSubscriberTitle', 'Añadir contacto a esta lista de contactos');

define('LNG_ResendTipInfo', 'Su email campaña no fue enviada a todos tus contactos. Escoge la opción \\\'Reenviar\\\' para probar y enviar al resto de tus contactos.');

define('LNG_HLP_ReplyToEmail', 'Cuando un contacto recive tu email y hace clic en responder, ¿a qué dirección de email debería ser enviada esa respuesta?<br/>Puedes cambiar el nombre por defecto editando tu lista de contactos y cambiando el \\\'Email para las respuestas\\\'');

define('LNG_Menu_Segments_Manage', 'Ver segmentos');
define('LNG_Menu_Segment_Description', 'Ver y crear listas segmentadas de tus contactos o clientes potenciales.');

define('LNG_UnsubLinkPlaceholder', 'Desuscríbeme de esta lista de contactos');
define('LNG_NoLists', 'No hay listas de contactos disponibles. %s');

define('LNG_ListAssign', '&nbsp;Por favor contacta con el administrador de sistema para que te asigne una lista de contacto.');

define('LNG_Menu_Statistics_Lists', 'Estadísticas listas de contactos');

define('LNG_MailingLists', 'Listas de contactos');
define('LNG_MailingList', 'Lista de contactos');

define('LNG_Segments', 'Segmentos');

define('LNG_HLP_MailingList', 'Para empezar, elige una lista de contactos para trabajar con ella. También puedes seleccionar una lista de contactos haciendo doble clic sobre la misma.');

define('LNG_SelectList', 'Por favor selecciona al menos una lista de contactos antes de continuar.');
define('LNG_SelectOneList', 'Por favor selecciona una lista de contactos antes de continuar.');
define('LNG_SelectSegment', 'Por favor selecciona al menos un segmento antes de continuar.');

define('LNG_Link_MailingListArchives', 'Link to Contact List Archives');

define('LNG_ListCreate', '&nbsp;Haz clic en el botón "Crear lista contactos" para crear una.');
define('LNG_CreateListButton', 'Crear lista contactos...');

define('LNG_Menu_MailingLists_Title', 'Create, view and delete your contact lists.');

define('LNG_Autoresponder_NoLists', 'You need access to a contact list before you can create an autoresponder. %s');
define('LNG_Subscriber_NoLists', 'Necesitas acceder a una lista de contactos antes de poder %s. %s');

define('LNG_Menu_Statistics_Description', 'Ver reportes para cada email campaña que has enviado.');

define('LNG_MailingListDetails', 'Selecciona una(s) lista(s) de contactos');

define('LNG_HLP_SendFromName', '¿Qué persona o empresa debería ser mostrada en el campo \\\'De\\\' para este email?<br/>Puedes cambiar el nombre por defecto editando tu lista de contactos y cambiando el \\\'Propietario de la lista de contactos\\\'');
define('LNG_HLP_SendFromEmail', '¿Qué dirección de email debería ser mostrada en el campo \\\'De email\\\' para este email?<br/>Puedes cambiar la dirección de email por defecto editando tu lista de contactos y cambiando el \\\'Email del propietario de la lista\\\'');
define('LNG_HLP_BounceEmail', 'Cuando un mensaje de correo electrónico rebota, o es rechazado por el servidor de correo, ¿a qué dirección de correo electrónico debería ser enviado el error? Si planea usar el manejador de emails rebotados, entonces asegúrese de que ningún otro email será enviado a esta dirección.<br/>Puedes cambiar la dirección de correo por defecto editando tu lista de contactos y cambiando el \\\'Email para los correos rebotados\\\'');

define('LNG_HLP_FilterStatus', 'Esta opción te permitirá buscar contactos en base a su estado en la lista de contactos.<br/><br/>Los contactos \\\'Activos\\\' son aquellos que no han rebotado y no se han desuscrito de la lista de contactos.<br/>Los contactos \\\'Rebotados\\\' son aquellos que han sido deshabilitados en la lista de contactos por que han tenido muchos mensajes rebotados desde su dirección de email, o han sido detectados como rebote duro.<br/>Los contactos \\\'Desuscritos\\\' son aquellos que se han desuscrito de la lista de contactos.<br/><br/>Para buscar en todos los contactos, elige la opción \\\'Cualquier estado\\\'.');

define('LNG_Preview_CustomFieldsNotAltered', '<b>Nota:</b> Campos personalizados, enlaces desuscriptores y archivos adjuntos selecconados recientemente no serán mostrados en ésta previsualización porque son específicos para los contactos.<br><br>Para probar tue emails con campos personalizados, archivos adjuntos y enlaces desuscriptores, crea una lista de contactos de prueba contigo mismo como contacto y envia el email a esa lista.');

define('LNG_Menu_Members_Remove', 'Eliminar contactos');
define('LNG_Menu_Members_Manage', 'Ver todos los contactos');
define('LNG_Menu_Members_Import', 'Importar contactos desde un archivo');
define('LNG_Menu_Members_Export', 'Exportar contactos a un archivo');
define('LNG_Menu_Members_Add', 'Añadir contacto');
define('LNG_Menu_MailingLists_Manage', 'Ver listas de contactos');
define('LNG_Menu_MailingLists_Create', 'Crear lista de contactos');
define('LNG_Menu_MailingLists_CustomFields', 'Ver campos personalizados');
define('LNG_Menu_Members_Banned_Manage', 'Lista de emails suprimidos');
define('LNG_Menu_Members_Banned_Add', 'Suprime un email o dominio');

define('LNG_Menu_MailingLists_Create_Description', 'Crea nueva lista de contacto en la que puedes añadir nuevos contactos o clientes potenciales.');
define('LNG_Menu_MailingLists_CustomFields_Description', 'Ver y editar los campos personalizados.');
define('LNG_Menu_MailingLists_Bounce_Description', 'Encuentra y descarta correos electrónicos inválidos de tus listas.');
define('LNG_Menu_Members_Add_Description', 'Rellena los detalles de un nuevo contacto y añadelo a tu lista.');
define('LNG_Menu_Members_Import_Description', 'Importa un archivo conteniendo una lista de contactos o clientes potenciales.');
define('LNG_Menu_Members_Export_Description', 'Exporta contactos desde una o más listas a un archivo que puedes descargar.');
define('LNG_Menu_Members_Remove_Description', 'Desuscribe o elimina permanentemente contactos de tu lista.');
define('LNG_Menu_Members_Banned_Manage_Description', 'Los correos electrónicos suprimidos permanecen en tu lista pero no recibirán ningún correo.');
define('LNG_Menu_Members_Banned_Add_Description', 'Añade un correo electrónico o dominio a la lista de supresión.');
define('LNG_Menu_Newsletters_Send_Description', 'Enviar una email campaña existente a tu lista de contactos.');
define('LNG_Menu_Newsletters_ManageSchedule_Description', 'Ver qué email campañas se han programado para enviar y cuándo.');
define('LNG_Menu_Newsletters_Create_Description', 'Crear una nueva email campaña la cual puedes enviar a tus contactos.');
define('LNG_Menu_Templates_Create_Description', 'Crear una nueva plantilla personalizada');
define('LNG_Menu_Templates_Manage_BuiltIn_Description', 'Ver plantillas incorporadas a la aplicación');
define('LNG_Menu_Templates_Manage_Description', 'Administrar plantillas personalizadas');
define('LNG_Menu_Website_Forms', 'Ver formularios web');
define('LNG_Menu_Website_Forms_Description', 'Ver y obtener el código para los formularios web que ya has creado.');
define('LNG_Menu_Create_Form', 'Crear formularios web');
define('LNG_Menu_Create_Form_Description', 'Crear un formulario el cual poder colocar en tu página web.');

define('LNG_Menu_Templates', 'Plantillas');

define('LNG_Menu_Tools', 'Herramientas');
define('LNG_Menu_Tools_Description', 'Menu de herramientas');

define('LNG_Done', 'Volver');

// Used for drop-down boxes
define('LNG_Select', 'select');


define('LNG_TooManyLists', 'You have too many lists and have reached your maximum. Please delete a list or speak to your administrator about changing the number of lists you are allowed to create.');

define('LNG_Menu_CustomFields_Create', 'Crear un campo personalizado');
define('LNG_Menu_CustomFields_Create_Description', 'Los campos personalizados almacenan detalles de los contactos, como su nombre o número de teléfono.');

define('LNG_AdvancedSearch', 'Búsqueda avanzada');

define('LNG_Paging_All', 'All');
define('LNG_Paging_Confirm_All', 'If you have a large number of records on this page it could take a long time to load. Continue?');

define('LNG_Menu_Tools_SystemInformation', 'System Information');
define('LNG_Menu_Tools_SystemInformation_Description', 'View information about your server');

define('LNG_ViewContacts', 'Ver&nbsp;contactos');
define('LNG_SearchContacts', 'Buscar&nbsp;contactos');

define('LNG_Header_Send_TestMode_WarningMessage_Admin', '<b>Important:</b> Your system is in "Test Mode". This means no emails will be sent when you send an email campaign. To disable test mode, go to the Settings page, choose "Email Settings" and disable the "Send In Test Mode" setting.');
define('LNG_Header_Send_TestMode_WarningMessage_User', '<b>Important:</b> Your system is in "Test Mode". This means no emails will be sent when you send an email campaign. To disable test mode, please contact your system administrator.');

define('LNG_Searchbox_Type_Prompt', 'Teclea el nombre de la lista...');
define('LNG_Searchbox_List_Info_Simple', '(Sólo las listas de contactos visibles que has marcado serán seleccionadas)');
define('LNG_Searchbox_List_Info', '(Sólo las listas de contactos/segmentos visibles que has marcado serán seleccionadas)');

define('LNG_Editor_ChooseFileToUpload', 'Por favor escoge el archivo a subir.');
define('LNG_Menu_Templates_Manage', 'Plantillas personalizadas');

define('LNG_Editor_WaitToLoad', 'Please wait for the editor to load before saving.');

define('LNG_CustomFieldsInsert_Editor', 'Introduze un campo personalizado');

define('LNG_TextWidthLimit_Explaination', 'A ser posible, manten tu texto a la izquierda de la línea gris de arriba. ¿<a href="#" onclick="LaunchHelp(839); return false;" style="color:#999999;">Por qué</a>?');

define('LNG_Menu_Autoresponders_Statistics_Description', 'Ver estadísticas para las autorespuestas que has configurado.');
define('LNG_Menu_Statistics_Lists_Description', 'Ver como tus listas de contactos crecen con el tiempo.');
define('LNG_Menu_Statistics_Users_Description', 'Una visión completa de todos los usuarios en el sistema, incluidos los emails enviados.');
define('LNG_Menu_Search_Contacts', 'Buscar contactos');
define('LNG_Menu_Contacts_Search_Description', 'Buscar contactos en todas las listas y segmentos.');

define('LNG_ChangeFormat_Text', 'Actualizar los contactos para recibir las campañas en formato texto');
define('LNG_ChangeFormat_HTML', 'Actualizar los contactos para recibir las campañas en formato HTML');

define('LNG_ChangeStatus_Confirm', 'Actualizar el estado de los contactos a confirmados');
define('LNG_ChangeStatus_Unconfirm', 'Actualizar el estado de los contactos a desconfirmados');

define('LNG_Status', 'Estado');
define('LNG_Format', 'Formato del email');
define('LNG_FilterByDate', 'Fecha en que se agregó');

define('LNG_FilterFormat', LNG_Format);
define('LNG_FilterStatus', LNG_Status);

define('LNG_Pages', 'Páginas');
define('LNG_GuideToFiltering', '<a href="#" onClick="LaunchHelp(\'832\'); return false;">Aprender más sobre filtrar contactos.</a>');
define('LNG_SaveAndKeepEditing', 'Guardar sin salir');

define('LNG_Jan_Long', 'January');
define('LNG_Feb_Long', 'Feburary');
define('LNG_Mar_Long', 'March');
define('LNG_Apr_Long', 'April');
define('LNG_May_Long', 'May');
define('LNG_Jun_Long', 'June');
define('LNG_Jul_Long', 'July');
define('LNG_Aug_Long', 'August');
define('LNG_Sep_Long', 'September');
define('LNG_Oct_Long', 'October');
define('LNG_Nov_Long', 'November');
define('LNG_Dec_Long', 'December');

/**
***************************
* Changed/Added in v5.0.6
***************************
*/
define('LNG_Subscriber_Count_Active_Confirmed_Many', ' (%s contactos activos y confirmados)');
define('LNG_Subscriber_Count_Active_Confirmed_One', ' (1 contacto activo y confirmado)');

/**
***************************
* Changed/Added in 5.5.0
***************************
*/

define('LNG_Menu_TriggerEmails', 'View Triggers');
define('LNG_Menu_TriggerEmails_Description', 'A trigger activates an action when a specific event occurs.');
define('LNG_Menu_Statistics_TriggerEmails', 'Trigger Statistics');
define('LNG_Menu_Statistics_TriggerEmails_Description', 'View statistics for triggers that you have setup.');

# For more information on the variables you can use for the date call please see http://www.php.net/date
define('LNG_TodaysDate', 'd - F - Y');

define('LNG_EnterBounceUsername', 'Please enter the username for the bounce email address.');
define('LNG_EnterBounceEmailAddress', 'Please enter the password for the bounce email address.');
define('LNG_UnableEvaluateExtraMailSettings', 'Unable to evaluate extra mail settings.');
define('LNG_InvalidExtraMailSettings', 'Invalid \"extra mail settings\" detected.');

define('LNG_UserActivityLogLabel', 'Recent Activity: ');

define('LNG_Second(s)', 'second(s)');
define('LNG_Minute(s)', 'minute(s)');

define('LNG_Owner', 'Owner');

define('LNG_Menu_Autoresponders_Create_Description', 'Create an email that is automatically sent after a specific time.');


/**
***************************
* Changed/Added in 5.5.3
***************************
*/
define('LNG_User_Total_CreditsLeft', 'You have %s total credits left.');
define('LNG_User_Monthly_CreditsLeft', 'You have %s of %s total credits left for this month.');

/**
*************************
* Changed/added in 5.6.0
*************************
*/

define('LNG_EnterBounceServer', 'Please enter the address of your mail server, such as mail.yourserver.com');

define('LNG_Pick_Contact_List', 'PICK CONTACT LIST');
define('LNG_Find_Mail_Server', 'FIND MAIL SERVER');
define('LNG_Find_Bounces', 'FIND BOUNCES');
define('LNG_Remove_Contacts', 'REMOVE CONTACTS');
define('LNG_Finished', 'FINISHED');

define('LNG_Bounce_Account_Type','Account Type');
define('LNG_Bounce_POP3_Account','POP3 Account (Recommended)');
define('LNG_Bounce_IMAP_Account','IMAP Account');
define('LNG_Bounce_Adv_Settings','Advanced Settings');
define('LNG_Bounce_Adv_Settings_Autodetect','Autodetect advanced settings (recommended)');
define('LNG_Bounce_Emp_Inbox','Empty Inbox When Done?');
define('LNG_Bounce_Emp_Inbox_Text','Empty the inbox after processing bounces');
define('LNG_Bounce_Test_Conn_Cont','Test Connection & Continue');
define('LNG_Bounce_Server_Desc','(Such as mail.company.com - confirm with your web host)');
define('LNG_Bounce_Auto_Process_Short', 'Process Bounces Automatically');
define('LNG_Bounce_Manual_Process_Short', 'Process Bounces Manually');
define('LNG_HLP_Bounce_Account_Type','Which type of email account is used to process your bounced emails? If you\'re unsure try choosing POP3 Account.');
define('LNG_HLP_Bounce_Adv_Settings','You may need to set extra options to connect to an email account for bounce processing. If so, unable this option and choose/fill in the required information below. If unsure, leave this ticked.');
define('LNG_HLP_Bounce_Emp_Inbox_Text','If ticked, all emails in the bounce account\'s inbox will be deleted every time bounce processing runs. You should tick this option if this email account is only used to process bounces.');

define('LNG_Upload', 'Upload');

define('LNG_Menu_Images_Manage', 'Image Manager');
define('LNG_Menu_Images_Manage_Description', 'Upload images from your computer to use when creating content for your emails.');

define('LNG_ApplicationSettings_Heading', 'Application&nbsp;Settings');
define('LNG_EmailSettings_Heading', 'Email&nbsp;Settings');
define('LNG_BounceSettings_Heading', 'Bounce&nbsp;Settings');
define('LNG_CreditSettings_Heading', 'Email&nbsp;Credit&nbsp;Settings');
define('LNG_CronSettings_Heading', 'Cron&nbsp;Settings');
define('LNG_SecuritySettings_Heading', 'Security&nbsp;Settings');
define('LNG_AddonsSettings_Heading', 'Addons&nbsp;Settings');

define('LNG_Spam_Check_Passed', 'Spam check passed.');
define('LNG_Spam_Check_Failed', 'Email Spam Check Failed');

define('LNG_CreditWarning_EmailSubject', 'Email credit with us');

define('LNG_Spam_Guide_Forced', 'Your administrator has enabled the "Force Spam Check" option on all email campaigns and autoresponders before they can be sent. Your message breaks the rules shown below. Please change your message to reduce your spam score before saving.');
define('LNG_Spam_Loading', 'Spam check in progress, please wait...');

define('LNG_EnterBouncePassword', 'Please enter the bounce server password.');

/**
*************************
* Changed/added in 5.6.6
*************************
*/
define('LNG_PreviewHTMLContent','Preview Content');

/**
*************************
* Changed/added in 5.7.0
*************************
*/
define('LNG_PrivateLabelSettings_Heading','Private&nbsp;Label&nbsp;Settings');
define('LNG_TrialUserLimitReached', 'You have reached your maximum number of trial users. You can still create normal user account.');

define('LNG_OverLimit_MaxEmails', 'You do not have enough total credit.');
define('LNG_OverLimit_PerMonth', 'You do not have enough monthly credit.');


/**
*************************
* Changed/added in 5.7.1
*************************
*/
define('LNG_CurrentUserReport_Unlimited', 'Current assigned user accounts: %s&nbsp;/&nbsp;admin accounts: %s&nbsp;(Your license key allows you to create unlimited accounts)');
define('LNG_AgencyCurrentUserReport', 'Admin accounts: <strong style="font-size:14px;">%s</strong>&nbsp;/&nbsp;Regular accounts: <strong style="font-size:14px;">%s</strong>&nbsp;/&nbsp;Trial accounts: <strong style="font-size:14px;">%s</strong>&nbsp;&#151;&nbsp;');
define('LNG_AgencyCurrentUserReport_CreateUnlimitedNormalUnlimitedTrial', 'Your license key allows you to create unlimited regular and trial users');
define('LNG_AgencyCurrentUserReport_CreateUnlimitedNormalFiniteTrial', 'Your license key allows you to create unlimited regular accounts and %s more trial account(s)');
define('LNG_AgencyCurrentUserReport_CreateFiniteNormalUnlimitedTrial', 'Your license key allows you to create %s more regular account(s) and unlimited trial account(s)');
define('LNG_AgencyCurrentUserReport_CreateNormalAndTrial', 'Your license key allows you to create %s more regular account(s) and %s more trial account(s)');
define('LNG_AgencyCurrentUserReport_NormalOnly', 'Your license only allows you to create %s more regular account(s)');
define('LNG_AgencyCurrentUserReport_TrialOnly', 'Your license only allows you to create %s more trial account(s)');

/**
*************************
* Changed/added in 5.7.3
*************************
*/
define('LNG_CannotVerifyAllImages_ExceedThreshold', 'Your newsletter contains more than %s images!');
define('LNG_CannotVerifyAllImages_OnlyThresholdImagesVerified', 'Only the first %s images were verified.');
define('LNG_CannotVerifyAllImages_SendSizeEstimated', 'Send size are estimated.');

/**
*************************
* Changed/added in 6.0.0
*************************
*/
define('LNG_Menu_UsersGroups', 'Users & Groups');
define('LNG_MenuDescription_UsersGroups', 'Manange your users and their group permissions.');
define('LNG_Menu_UsersGroups_ManageUsers', 'View User Accounts');
define('LNG_Menu_UsersGroups_CreateUser', 'Create a User Account');
define('LNG_Menu_UsersGroups_ManageGroups', 'View User Groups');
define('LNG_Menu_UsersGroups_CreateGroup', 'Create a User Group');

define('LNG_Menu_ContactLists', 'Contact Lists');
define('LNG_Menu_Contacts', 'Contacts');
define('LNG_Menu_EmailCampaigns', 'Email Campaigns');
define('LNG_Menu_Surveys', 'Surveys');
define('LNG_Menu_Autoresponders', 'Autoresponders');
define('LNG_Menu_Statistics', 'Statistics');

define('LNG_Menu_Surveys_View', 'View Surveys');
define('LNG_Menu_Surveys_Create', 'Create a Survey');
define('LNG_Menu_Surveys_Results', 'Survey Results');
define('LNG_Menu_Surveys_Responses_Browse', 'Browse Responses');
define('LNG_Menu_Surveys_Responses_Export', 'Export Responses');

define('LNG_Menu_Surveys_View_Description', 'Manage existing surveys which you\'ve already created.');
define('LNG_Menu_Surveys_Create_Description', 'Build a survey which you can then link to when creating an email campaign.');
define('LNG_Menu_Surveys_Results_Description', 'See who responded to your survey and which answers they selected.');
define('LNG_Menu_Surveys_Responses_Browse_Description', 'Browse survey responses one at a time using next and back buttons.');
define('LNG_Menu_Surveys_Responses_Export_Description', 'Download responses to a CSV file for further analysis.');

define('LNG_DynContentTagsInsert_Editor', 'Insert a Dynamic Content Tag...');
define('LNG_Close', 'Close');
define('LNG_ShowAvalableDynamicContent', 'Dynamic Content...');
