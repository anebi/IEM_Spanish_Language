<?php
/**
* Language file variables for the forms area.
*
* @see GetLang
*
* @version     $Id: forms.php,v 1.41 2008/02/28 00:11:44 hendri Exp $
* @author Chris <chris@interspire.com>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the forms area... Please backup before you start!
*/

define('LNG_FormConfirmPage_Unsubscribe_Subject', 'Unsubscribe Request');
define('LNG_FormThanksPage_Unsubscribe_Subject', 'Your subscription is now cancelled.');

define('LNG_Form_Edit_Disabled', 'You cannot edit this form because you do not have access.');
define('LNG_Form_Delete_Disabled', 'You cannot delete this form because you do not have access.');
define('LNG_Form_Copy_Disabled', 'You cannot copy this form because you do not have access.');

define('LNG_Preview_Form', 'Previsualizar formulario');

define('LNG_CreateForm', 'Crear un formulario web');
define('LNG_CreateFormButton', 'Crear un formulario web...');

define('LNG_CreateFormCancelButton', '\u00BFSeguro que quieres cancelar la creaci\u00F3n de un nuevo formulario?');
define('LNG_CreateFormHeading', 'Nombre de formulario y tipo');

define('LNG_EditForm', 'Editar un formulario web');
define('LNG_EditFormIntro', 'Completa el formulario siguiente para actualizar el formulario web seleccionado. Cuando termines puedes obtener el nuevo HTML para a\u00F1adirlo a tu sitio web.');
define('LNG_EditFormCancelButton', '\u00BFSeguro que quieres cancelar la actualizaci\u00F3n de tu formulario?');
define('LNG_EditFormHeading', 'Editar detalles formulario');

define('LNG_FormDetails', 'Detalles del formulario');

define('LNG_NoSuchFormDesign', 'Ese diseño de formulario no existe. Por favor vuelve a intentarlo.');
define('LNG_NoSuchForm', 'Ese diseño ya no existe. Por favor vuelve a intentarlo.');

define('LNG_FormsManage', 'Ver formularios web');

define('LNG_EnterFormName', 'Por favor introduze un nombre para este formulario.');

define('LNG_EnterSendFromName', 'Introduze el nombre a mostrar en el campo \'De\'');
define('LNG_EnterSendFromEmail', 'Introduze el email desde el cual enviar los emails.');
define('LNG_EnterConfirmSubject', 'Introduze el asunto pare el email confirmaci\u00F3n.');
define('LNG_EnterThanksSubject', 'Introduze el asunto pare el email de agradecimiento.');

define('LNG_FormName', 'Nombre formulario');

define('LNG_FormNameIsNotValid', 'El nombre de formulario no es v\u00E1lido');
define('LNG_FormChooseList', 'Escoge las listas a incluir en este formulario');
define('LNG_UnableToCreateForm', 'No se ha podido crear el formulario');
define('LNG_FormCreated', 'El nuevo formulario ha sido crado con \u00E9xito');

define('LNG_DeleteFormPrompt', '\u00BFSeguro que quieres eliminar este formulario?');

define('LNG_FormDeleteSuccess_One', 'El formulario seleccionado ha sido eliminado con éxito. Asegúrate de retirarlo de tu sitio web ya que no funcionará más.');
define('LNG_FormDeleteSuccess_Many', '%s formularios seleccionados han sido eliminados con éxito. Asegúrate de retirarlos de tus sitios webs.');
define('LNG_FormDeleteFail_One', 'El formulario no se ha eliminado con éxito. Por favor vuelve a intentarlo.');
define('LNG_FormDeleteFail_Many', 'Los %s formularios no se han eliminado con éxito. Por favor vuelve a intentarlo.');

define('LNG_ConfirmRemoveForms', '\u00BFSeguro que quieres eliminar los formularios seleccionados?');
define('LNG_ChooseFormsToDelete', 'Por favor escoge uno o m\u00E1s formularios primero.');
define('LNG_Delete_Form_Selected', 'Eliminar seleccionados');

define('LNG_HLP_FormName', 'El nombre del formulario. Esto sólo se usa en el panel de control, no en tu sitio web.');

define('LNG_UnableToUpdateForm', 'No se podido actualizar el formulario');
define('LNG_FormUpdated', 'Formulario actualizado con éxito');

define('LNG_NoForms', 'No hay formularios creados.%s');
define('LNG_NoForms_HasAccess', ' Haz clic en el botón <em>Crear un formulario web...</em> de abajo para crear uno.');

define('LNG_FormCopySuccess', 'Formulario copiado con éxito.');
define('LNG_FormCopyFail', 'Formulario no ha sido copiado con éxito.');

define('LNG_SubscriberChooseFormat', 'Opciones de formato');
define('LNG_ForceHTML', 'HTML');
define('LNG_ForceText', 'Texto');

define('LNG_SubscriberChangeFormat', 'Cambiar formato');


define('LNG_FormType', 'Tipo de formulario');
define('LNG_FormType_Subscribe', 'Suscripción');
define('LNG_FormType_Unsubscribe', 'Desuscripción');
define('LNG_FormType_ModifyDetails', 'Modificar detalles');
define('LNG_FormType_SendToFriend', 'Enviar a amigo');

define('LNG_ContactForm', '¿Enviar detalles de nuevos contactos');
define('LNG_HLP_ContactForm', 'Este formulario de suscripción actuará también como formulario de contacto. Recibirás un email con el contenido del formulario una vez haya sido rellenado, el usuario será suscrito a tu lista y redirigido a tu página de agradecimiento.<br/><br />Si estuviera ya suscrito a tu lista se le remitiría igualmente a la página de agradecimiento, sin mostrar ningún error y sin crear contactos duplicados.');

define('LNG_UseCaptcha', '¿Usar formulario de seguridad CAPTCHA');

define('LNG_RequireConfirmation', '¿Usar confirmación Double Opt-In');
define('LNG_RequireConfirmationExplain', 'Sí, usar confirmación de email Double Opt-In');

define('LNG_ListsToInclude', 'Escoger listas de contactos');
define('LNG_HLP_IncludeLists', '¿De qué lista debería ser capaz el visitante de suscribirse/desuscribirse en este formulario?');

define('LNG_FormDesign', 'Escoge un diseño de formulario');
define('LNG_HLP_FormDesign', 'Esto te dará una idea de cómo se verá el formulario en tu sitio web. Más adelante podrás modficar el código HTML si quieres cambiarlo.');

define('LNG_HLP_OrderCustomFields', 'Puedes cambiar el orden en que tus campos personalizados aparecen en tu formulario.<br/>Para mover algo arriba o abajo, resalte el nombre del campo y haga clic en la flecha de arriba o abajo.');
define('LNG_Email_Required_For_Form', 'Email (Requerido)');

define('LNG_ChooseList_For_Form', 'List Choices');
define('LNG_ChooseCustomFieldsToInclude', 'Please choose custom fields to include in your form.');
define('LNG_ChooseCustomFieldToOrder', 'Please choose the custom field you want to re-order');

define('LNG_FormSubmit', 'Submit');
define('LNG_FormClear', 'Reset');

define('LNG_FormOptions', 'Form Options');

define('LNG_FormSendFromName', 'Send From Name');
define('LNG_FormSendFromEmail', 'Send From Email');
define('LNG_FormReplyToEmail', 'Reply-To Email');
define('LNG_FormBounceEmail', 'Bounce Email');

define('LNG_ConfirmSubject', 'Asunto email');

define('LNG_ConfirmPageHTML', 'Para la página de confirmación');
define('LNG_ConfirmPageURL', '<b><i>OR</i></b> &nbsp;Confirm Page URL');

define('LNG_ConfirmTextVersion', 'Mail de confirmación (Texto)');
define('LNG_ConfirmHTMLVersion', 'Mail de confirmación (HTML)');

define('LNG_ThanksPageHTML', 'Para la página de agradecimiento');
define('LNG_ThanksPageURL', '<b><i>OR</i></b>&nbsp; Thank You Page URL');

define('LNG_ThanksSubject', 'Asunto del email');
define('LNG_ThanksTextVersion', 'Email de agradecimiento (Texto)');
define('LNG_ThanksHTMLVersion', 'Email de agradecimiento (HTML)');

define('LNG_FormFormNameIsNotValid', 'Nombre de formulario no válido.');
define('LNG_FormFormDesignIsNotValid', 'Diseño del formulario no válido.');
define('LNG_FormFormTypeIsNotValid', 'Tipo de formulario no válido.');
define('LNG_FormRequireConfirmationIsNotValid', 'Por favor escoge si este formulario requiere confirmación o no.');

define('LNG_FormDisplayPageOptions', 'Opciones visuales del formulario');
define('LNG_FormConfirmEmailOptions', 'Opciones email de confirmación');
define('LNG_FormThanksEmailOptions', 'Opciones email de agradecimiento');

define('LNG_FormThanksPageOptions', 'Opciones página de agradecimiento');
define('LNG_FormErrorPageOptions', 'Opciones página de error');
define('LNG_ErrorPageHTML', 'Para la página del error');
define('LNG_ErrorPageURL', '<b><i>OR</i></b>&nbsp; Error Page URL');

define('LNG_Form_ChooseFormat', 'Preferred Format');
define('LNG_Form_EmailAddress', 'Your email address');
define('LNG_GetHTML', 'Obtener&nbsp;HTML');

define('LNG_FormGetHTML_Heading', 'Añade el formulario a tu sitio web');
define('LNG_FormGetHTML_Introduction', 'El HTML que muestra tu formulario web es mostrado a continuación. Para copiarlo, haz clic en el cuadro de texto y apreta Ctrl+C de tu teclado.');
define('LNG_FormGetHTML_Options', 'Añade el formulario a tu sitio web');
define('LNG_FormHTML', 'Código HTML del formulario web');
define('LNG_HLP_FormHTML', 'Este es el código que colocas en tu sitio web para permitir a tus visitantes suscribirse a tus email campañas. Simplemente selecciona todo el código, botón secundario encima del cuadro de texto, escoge copiar. Entonces edita tu página web, y pega el código donde quieras que aparezca el formulario de suscripción.');

/**
* Confirmation options.
*/
define('LNG_FormConfirmPage_Subscribe_HTML',
'
<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 150px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		<b>Tu suscripción está casi completa...</b><br><br>
		Un email ha sido enviado a la dirección que has introducido. En el email está el enlace de confirmación. Por favor haz clic en el enlace del email para confirmar tu suscripción.<br><br>
		Una vez lo hayas hecho tu suscripicón habrá sido completada.<br><br>
		<a href="javascript:history.back()">&laquo; Volver atrás</a>
	</div>
</div>
</body>
</html>');


define('LNG_FormConfirmPage_Subscribe_Subject', 'Confirma tu suscripción');

define('LNG_FormConfirmPage_Subscribe_Email_Text', "Gracias por suscribirte a nuestro boletín.\n\nPara finalizar tu suscripción, por favor haz clic en el enlace de confirmación siguiente. Una vez lo hayas hecho tu suscripción habrá sido completada.\n\n%%CONFIRMLINK%%\n\n");

define('LNG_FormConfirmPage_Subscribe_Email_HTML', "
<html>
<body style='font:12px tahoma'>
<b>Por favor confirma tu suscripción</b>
<br><br>
Gracias por suscribirte a nuestro boletín.<br><br>Para finalizar tu suscripción, por favor haz clic en el enlace de confirmación siguiente. Una vez lo hayas hecho tu suscripción habrá sido completada.<br><br>
<a href='%%CONFIRMLINK%%' target='_blank'>Por favor haz clic aquí para confirmar tu suscripción</a><br><br>o copia y pega la siguiente URL en tu navegador web:<br>
%%CONFIRMLINK%%");

define('LNG_FormConfirmPage_Unsubscribe_HTML', 'Por favor confirma que quieres ser desuscrito de la lista antes que la petición sea ejecutada.<br/>');
define('LNG_FormConfirmPage_Unsubscribe_Subject', 'Por favor confirma que quieres desuscribirte');

/**
* Some form options are disabled.
*/
define('LNG_GetHTML_ModifyDetails_Disabled', 'You cannot Get HTML for the modify details form.');
define('LNG_GetHTML_ModifyDetails_Disabled_Alert', 'You cannot place a modify details form on your website. To use this form, edit an email campaign or autoresponder and click the Insert Custom Field link at the bottom of the editor to include a link to this form.');
define('LNG_GetHTML_SendFriend_Disabled', 'You cannot place a send to friend form on your website. To use this form, edit an email campaign or autoresponder and click the Insert Custom Field link at the bottom of the editor to include a link to this form.');
define('LNG_GetHTML_SendFriend_Disabled_Alert', 'You cannot place a send-to-friend form on your website.\nTo use this form, edit an email campaign or autoresponder and include a link to the form.');

/**
* For modify details and send-to-friend forms, we have extra html editing options.
*/
define('LNG_FormEditHTMLOptions', 'Edit Form HTML');
define('LNG_EditFormHTML', 'Edit Form HTML');
define('LNG_HLP_EditFormHTML', 'Customize the way your form looks by modifying the default HTML code.<br/><br/>You must leave the form tag, the field names and the placeholders as they are.');

define('LNG_FormHasBeenChanged', 'Warning - the form has been changed. New HTML code will be generated for this form.\nDo you wish to continue?');

define('LNG_FormThanksPage_Subscribe_Subject', 'Tu suscripción ha sido completada.');

/**
* These are used if the signup form is a contact form as well.
*/

define('LNG_FormThanksPage_Unsubscribe_Subject', 'Has sido desuscrito.');



/**
* Error page
*/

define('LNG_FormThanksPageHTML_Modify', '
<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 150px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		<b>Tus modificaciones han sido completadas con éxito.</b><br><br>
		Los cambios hechos a tus detalles han sido completados con éxito.
		<br><br>
	</div>
</div>
</body>
</html>
');


define('LNG_FormErrorPageHTML_Modify', '
<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 150px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		<b>Un error ha ocurrido.</b><br><br>
		Un error ha ocurrido intentando cambiar tus detalles:
		%%GLOBAL_Errors%%
		<br><br>
		<a href="javascript:history.back()">&laquo; Volver atrás</a>
	</div>
</div>
</body>
</html>
');


/**
* Send-to-Friend stuff.
*/

define('LNG_FormThanksPageHTML_SendFriend', '<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 150px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		<b>Your email was forwarded successfully.</b><br><br>
		Thank you for forwarding this email. It has been sent to your friend.
	</div>
</div>
</body>
</html>');
define('LNG_FormErrorPageHTML_SendFriend', '<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 150px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		<b>An error has occurred.</b><br><br>
		An error(s) has occurred trying to send this email to your friend:
		%%GLOBAL_Errors%%
		<br><br>
		<a href="javascript:history.back()">&laquo; Go Back</a>
	</div>
</div>
</body>
</html>');
define('LNG_SendFriendTextVersion', 'Email Header (Text)');
define('LNG_SendFriendHTMLVersion', 'Email Header (HTML)');


/**
* Javascript/customfield stuff.
*/
define('LNG_Form_Javascript_Field', 'Please enter a value for field %s');
define('LNG_Form_Javascript_Field_Choose', 'Please choose an option for field %s');
define('LNG_Form_Javascript_Field_Choose_Multiple', 'Please choose one or more options for field %s');
define('LNG_Form_Javascript_Field_NumberCheck', 'Please enter a numeric value for field %s');
define('LNG_Form_Javascript_EnterEmailAddress', 'Please enter your email address.');
define('LNG_Form_Javascript_ChooseFormat', 'Please choose a format to receive your email campaigns in');
define('LNG_Form_Javascript_EnterCaptchaAnswer', 'Please enter the security code shown');
define('LNG_Form_EnterCaptcha', 'Enter the security code shown');

/**
* Buttons etc for form designs.
*/
define('LNG_Form_Subscribe_Button', 'Subscribe');

define('LNG_Form_Unsubscribe_Button', 'Unsubscribe');

define('LNG_Form_ModifyDetails_Button', 'Update your details');

define('LNG_Form_SendFriend_Button', 'Send to your friend');
define('LNG_Form_SendFriend_YourName', 'Your Name : ');
define('LNG_Form_SendFriend_YourEmailAddress', 'Your Email Address : ');
define('LNG_Form_SendFriend_FriendsName', 'Your Friends Name : ');
define('LNG_Form_SendFriend_FriendsEmailAddress', 'Your Friends Email Address : ');
define('LNG_Form_SendFriend_Introduction', 'Hey, I found this really interesting newsletter that I thought you might like to read for yourself.');

/**
**************************
* Changed/added in NX1.0.7
**************************
*/
define('LNG_FormContentsHaveChanged', 'Warning - the form has been changed. New HTML code has been generated for this form. <a href="index.php?Page=Forms&Action=View&id=%d" target="_blank">View the old html code.</a>');

/**
**************************
* Changed/added in NX 1.3
**************************
*/

define('LNG_HLP_ErrorPageHTML', 'Introduze el contenido que debería aparecer en la página de error.');

define('LNG_FormSendFriendPage_Email_HTML', '<div style="padding: 5px; border: 1px solid #EFECBA; background-color: #FBFAE7; text-align: center; font-family: tahoma; font-size: 11px;">Este email te ha sido enviado por %%REFERRER_EMAIL%%.</div>');
define('LNG_FormSendFriendPage_Email_Text', "Este email te ha sido enviado por %%REFERRER_EMAIL%%.");

define('LNG_ErrorPageHTML_Modify', LNG_ErrorPageHTML);
define('LNG_HLP_ErrorPageHTML_Modify', 'Esta es la página HTML que es mostrada cuando ha ocurrido un error. Puedes modificarla usando HTML o dejarla por defecto.');

define('LNG_ErrorPageHTML_SendFriend', LNG_ErrorPageHTML);

define('LNG_ErrorPageHTML_Subscribe', LNG_ErrorPageHTML);

define('LNG_FormThanksPageHTML_Unsubscribe',
'
<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 30px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
	margin-top: 10px;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		¡Sentimos verte marchar!
	</div>
</div>
</body>
</html>
');


/**
***************************
* Changed/Added in NX 1.3.2
***************************
*/
define('LNG_ErrorPageHTML_Unsubscribe', 'Error Page HTML');


/**
****************************
* Changed/added in IEM 5.0.0
****************************
*/

define('LNG_EnterReplyToEmail', 'Enter an email address for the contact to reply to.');
define('LNG_EnterBouceEmail', 'Enter an email address  in case the form bounces back from the contact.');

define('LNG_HLP_SubscriberChooseFormat', '¿Te gustaría dar a tus contactos la opción de escoger el formato en que reciben tus email campañas?');
define('LNG_ChooseFormat', 'Permitir escoger al contacto');

define('LNG_HLP_SubscriberChangeFormat', '¿Te gustaría que tus contactos fueran capaces a cambar que tipo de email reciben? Tendrían la habilidad de cambiar de html a texto y viceversa.');
define('LNG_SubscriberChangeFormatExplain', 'Sí, permitir al contacto cambiar su formato de email.');

define('LNG_HLP_RequireConfirmation', '¿Quieres que el contacto reciba un email de confirmación con un enlace que debe seguir para verificar su acción antes de ser incluido o eliminado de tu lista?<br /><br />Double opt-in es el estándar de la industria, por lo que si dudas deberías marcar esta casilla.');

define('LNG_HLP_SendThanks', 'Si marcas esta casilla entonces un email de agradecimiento será enviado al contacto una vez haya rellenado el formulario. Puedes personalizar el email de agradecimiento en la siguiente página.');
define('LNG_SendThanksExplain', 'Sí, enviar al contacto un email de agradecimiento');

define('LNG_SubscriberFormat_For_Form', 'Formato de contacto');

define('LNG_HLP_ConfirmSubject', 'El asunto del email de confirmación enviado al nuevo contacto.');

define('LNG_HLP_ThanksPageHTML', 'Esta es la página HTML que es mostrada cuando el contacto ha completado la suscripción. Puedes modificarla usando HTML o dejarla por defecto.');

define('LNG_HLP_ThanksPageURL', 'If you have already uploaded your thank you page, enter the URL to that file here and contacts will be taken to that page instead.');

define('LNG_HLP_ThanksSubject', 'The subject of the thanks email sent to the new contact.');

define('LNG_FormSendThanksIsNotValid', 'Please choose whether this form requires a thanks email to be sent to the contact.');
define('LNG_FormSubscriberChooseFormatIsNotValid', 'Please choose whether this form allows the contact to choose their format.');

define('LNG_HLP_ErrorPageURL', 'If you have already uploaded your error page, enter the URL to that file here and contacts will be taken to that page instead.');

define('LNG_SendFriendPageIntro', 'A Send to a Friend form is used to allow contacts to forward your email onto their friends. This form can only be included inside an email and is auto-generated when a user clicks it.');

define('LNG_HLP_SendFriendTextVersion', 'This text is placed at the beginning of the email your contact is forwarding.<br/><br/>You should include a link to your subscription form on your web site so the recipient can sign up if they want to.');

define('LNG_HLP_SendFriendHTMLVersion', 'This HTML is placed at the beginning of the email your contact is forwarding.<br/><br/>You should include a link to your email campaign subscription form on your web site so the recipient can sign up if they want to.');

define('LNG_HLP_ConfirmPageHTML_Subscribe', 'Esta es la página HTML mostrada a los contactos informando les que tienen que confirmar su suscripción. Puedes modificarla usando HTML o dejarla por defecto.');
define('LNG_HLP_ConfirmTextVersion_Subscribe', 'Esta es la versión Texto del email que es enviado a los contactos informando les que tienen que confirmar su suscripción. Puedes modificarlo usando Texto o dejarla por defecto.');
define('LNG_HLP_ConfirmHTMLVersion_Subscribe', 'Esta es la versión HTML del email que es enviado al contacto diciéndole que confirme su suscripción. Puedes modificarlo usando HTML o dejarla por defecto.');
define('LNG_HLP_ThanksTextVersion_Subscribe', 'Esta es la versión Texto del email que es enviado al contacto agradeciéndole su suscripción. Puedes modificarlo usando Texto o dejarla por defecto.');
Define('LNG_HLP_ThanksHTMLVersion_Subscribe', 'Esta es la versión HTML del email que es enviado al contacto agradeciéndole su suscripción. Puedes modificarlo usando HTML o dejarla por defecto.');

define('LNG_HLP_ErrorPageHTML_SendFriend', 'Esto es lo que verán los contactos si ocurre un error mientras intentan enviar este boletín a sus amigos.');

define('LNG_HLP_ErrorPageHTML_Subscribe', 'Esto es lo que verán los contactos si ocurre un error durante el proceso de suscripción. Por ejemplo, si ya están suscritos a tu lista de contactos.');

define('LNG_Help_FormsManage', 'Los formularios web pueden ser colocados en tu sitio web para conseguir nuevos contactos, permitir a los contactos existentes modificar sus detalles, o incluso desuscribirse de tu lista. <a href="javascript:LaunchHelp(809);">Aprende más aquí.</a>');

define('LNG_CreateFormIntro', 'Rellena el siguiente formulario para crear un formulario de suscripción, desuscripción, modficar detalles o enviar a amigo el cual puedes colocar en tu sitio web.');

define('LNG_ConfirmPageIntro', 'El formulario siguiente muestra las opciones que has seleccionado para este formulario. Completa el formulario y haz clic en <em>Siguiente&gt;&gt;</em> para crear el formulario.');
define('LNG_ThanksPageIntro', 'Este paso te permite crear los emails y la página de agradecimiento HTML para hacer saber a tus contactos que estas al tanto de sus acciones.');

define('LNG_FinalPageIntro', 'Si algo va mal durante la suscripción al contacto se le mostrarán las opciones que escogas en el formulario siguiente.');

define('LNG_ThanksPageIntro_NoEmail', 'Este paso te permite crear la página de agradecimiento HTML para mostrar a los contactos que estás al tanto de sus acciones.');

define('LNG_ThanksPageIntro_Edit', 'Configura las opciones de la página de agradecimento y opcionalmente el email de agradecimiento siguientes. Estos serán mostrados a los contactos después de ser suscritos a tu lista.');

define('LNG_ThanksPageIntro_Edit_NoEmail', 'Este paso te permite editar la página HTML de agradecimiento para mostrar a tus contactos que estás al tanto de sus acciones.');

define('LNG_HLP_ErrorPageHTML_Unsubscribe', 'Esta es la página HTML que es mostrada cuando el contacto encuentra cualquier error durante el proceso de suscripción. Puedes modificarla usando HTML o dejarla por defecto.');

define('LNG_ChooseFormLists', 'Por favor escoge alguna lista de contactos para incluir en este formulario.');

define('LNG_IncludeLists', 'Listas contactos/Campos personalizados:');

define('LNG_ChooseCustomFields', 'Campos personalizados para la lista de contactos \'%s\'');

define('LNG_FormIncludeListsIsNotValid', 'Por favor escoge las listas de contactos a usar con este formulario.');

define('LNG_FormConfirmPage_Unsubscribe_Email_Text', "Por favor confirma que quieres desuscribirte haciendo clic en el enlace siguiente:\n\n%BASIC:CONFIRMUNSUBLINK%\n\nNecesitamos tu confirmación antes de desuscribirte de nuestro boletín.");

define('LNG_FormDisplaySendFriendOptions', 'Forwarded email headers');
/**
* Thanks email options.
*/
define('LNG_FormThanksPage_Subscribe_HTML', '
<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 150px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		<b>Tu suscripción ha sido completada.</b><br><br>
		Gracias por suscribirte a nuestro boletín. Tu suscripción ha sido completada con éxito.<br><br>
	</div>
</div>
</body>
</html>');

define('LNG_FormThanksPage_Subscribe_Email_Text', "Gracias por suscribirte a nuestro boletín.\n\nTu suscripción ha sido completada con éxito. Si tienes cualquier pregunta puedes contactarnos respondiendo este email.");

define('LNG_FormThanksPage_Subscribe_Email_HTML', "
<html>
<body style='font: 12px tahoma'>
<b>Tu suscripción ha sido completada.</b><br><br>
Gracias por suscribirte a nuestro boletín. Tu suscripción ha sido completada con éxito. Si tienes cualquier pregunta puedes contactarnos respondiendo este email.
</body>
</html>
");

define('LNG_FormThanksPage_Subscribe_Subject_Contact', 'Gracias pos suscribirte a nuestro boletín');

define('LNG_FormThanksPage_Unsubscribe_Email_Text', "Hola,\nHas sido desuscrito de nuestro boletín.\n¡Sentimos verte marchar!");

/**
* Thanks page options.
*/
define('LNG_FormThanksPageHTML_Subscribe', '
<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 150px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		<b>Tu suscripción ha sido completada.</b><br><br>
		Gracias por suscribirte a nuestro boletín. Tu suscripción ha sido completada con éxito.<br><br>
	</div>
</div>
</body>
</html>
');


define('LNG_FormErrorPageHTML_Subscribe',
'<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 150px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		<b>Ha ocurrido un error.</b><br><br>
		Un error ha ocurrido mientras intentábamos suscribirte a nuestro boletín:<br>
		%%GLOBAL_Errors%%
		<br><br>
		<a href="javascript:history.back()">&laquo; Volver atrás</a>
	</div>
</div>
</body>
</html>');


define('LNG_FormErrorPageHTML_Unsubscribe',
'<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 150px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		<b>Ha ocurrido un error.</b><br><br>
		Un error ha ocurrido mientras intentábamos desuscribirte a nuestro boletín:
		%%GLOBAL_Errors%%
		<br><br>
		<a href="javascript:history.back()">&laquo; Volver atrás</a>
	</div>
</div>
</body>
</html>
');

define('LNG_Form_Javascript_ChooseLists', 'Por favor selecciona una lista de contactos a la cual suscribirte');

define('LNG_FormConfirmPage_Unsubscribe_HTML',
'
<html>
<head>
<style>
body {
	margin: 0px;
}

#content {
	border: 1px solid #EFECBA;
	width: 300px;
	height: 150px;
	background-color: #FBFAE7;
	padding:20px;
	top: 50%;
	left: 50%;
	position: absolute;
}

#container  {
	width: 100%;
	height: 100%;
	font: 11px tahoma;
	position: absolute;
	top: -75px;
	left: -150px;
}

</style>
</head>
<body>
<div id="container">
	<div id="content">
		<b>Tu petición para ser desuscrito de nuestro boletín está casi completa...</b><br><br>
		Por favor confirma tu petición de desuscripción de este boletín.<br><br>Recibirás un email con el enlace de confirmación. Por favor haz clic en el enlace del email y serás desuscrito de nuestro boletín.
	</div>
</div>
</body>
</html>');

define('LNG_FormConfirmPage_Unsubscribe_Email_HTML',
"
<html>
<body style='font:12px tahoma'>
Por favor confirma tu desuscripción haciendo clic en el enlace siguiente.<br><br>
<a href='%%CONFIRMLINK%%' target='_blank'>Haz clic aquí para desuscribirte de nuestro boletín</a><br><br>o copia y pega la siguiente URL en tu navegador web:<br>
%%CONFIRMLINK%%<br><br>
Necesitamos tu confirmación antes de desuscribirte de nuestro boletín.
</body></html>"
);

define('LNG_FormThanksPage_Unsubscribe_Email_HTML', "
<html>
<body style='font:12px tahoma'>
Hola,<br/>Has sido desuscrito de nuestro boletín.<br/>¡Sentimos verte marchar!</body></html>");

define('LNG_FormThanksPage_Subscribe_Email_Text_Contact', "Gracias por suscribirte a nuestro boletín y/o contactarnos.\n\nSi tienes cualquier problema puedes contactarnos respondiendo este email.");

define('LNG_FormThanksPage_Subscribe_Email_HTML_Contact',
"
<html>
<body style='font:12px tahoma'>
Gracias por suscribirte a nuestro boletín y/o contactarnos.<br><br>Si tienes cualquier problema puedes contactarnos respondiendo este email.
</body>
</html>
");


define('LNG_HLP_FormType', 'Escoge el tipo de formulario que quieres crear.<br><br>Un formulario de <i>suscripción</i> permite a los visitantes suscribirse a tu lista de contactos.<br><br>Un formulario de <i>desuscripción</i> permite a los contactos desuscribirse de tu lista de contactos. Esto es opional, en vez un enlace de desuscripción puede ser añadido a tus emails campañas automáticamente.<br><br>Un formulario para <i>modificar detalles</i> permite a los contactos modificar su información de suscripción.<br><br>Finalmente, un formulario de <i>enviar a amigo</i> permite a los usuarios compartir tu email campaña con sus amigos.');

define('LNG_HLP_ConfirmPageHTML_Unsubscribe', 'Esta es la página que los contactos verán una vez rellenen el formulario web para ser desuscritos de tu lista(s) de contactos.');

define('LNG_WhatAreTheForms', '<a href="javascript:LaunchHelp(809);">Los diferentes tipos de formularios web y cómo usarlos.</a>');

// these few are needed for the 'heading' of the helptip(s).
// they need to be UNDER the 'LNG_ConfirmPageHTML' and so on language variables.
define('LNG_ConfirmPageHTML_Subscribe', LNG_ConfirmPageHTML);
define('LNG_ConfirmTextVersion_Subscribe', LNG_ConfirmTextVersion);
define('LNG_ConfirmHTMLVersion_Subscribe', LNG_ConfirmHTMLVersion);
define('LNG_ThanksTextVersion_Subscribe', LNG_ThanksTextVersion);
define('LNG_ThanksHTMLVersion_Subscribe', LNG_ThanksHTMLVersion);

// these few are needed for the 'heading' of the helptip(s).
// they need to be UNDER the 'LNG_ConfirmPageHTML' and so on language variables.
define('LNG_ConfirmPageHTML_Unsubscribe', LNG_ConfirmPageHTML);
define('LNG_ConfirmTextVersion_Unsubscribe', LNG_ConfirmTextVersion);
define('LNG_ConfirmHTMLVersion_Unsubscribe', LNG_ConfirmHTMLVersion);
define('LNG_ThanksTextVersion_Unsubscribe', LNG_ThanksTextVersion);
define('LNG_ThanksHTMLVersion_Unsubscribe', LNG_ThanksHTMLVersion);

// make the helptips the same as the subscribe ones for now.
// they need to be UNDER the 'LNG_ConfirmPageHTML' and so on language variables.
define('LNG_HLP_ConfirmTextVersion_Unsubscribe', LNG_HLP_ConfirmTextVersion_Subscribe);
define('LNG_HLP_ConfirmHTMLVersion_Unsubscribe', LNG_HLP_ConfirmHTMLVersion_Subscribe);
define('LNG_HLP_ThanksTextVersion_Unsubscribe', LNG_HLP_ThanksTextVersion_Subscribe);
Define('LNG_HLP_ThanksHTMLVersion_Unsubscribe', LNG_HLP_ThanksHTMLVersion_Subscribe);

define('LNG_HLP_UseCaptcha', 'Captcha (acrónimo de \\\'Completely Automated Public Turing Test to Tell Computers and Humans Apart\\\') es un tipo de test de desafío-respuesta usado para determinar si el usuario es humano o no. Esto ayuda a prevenir el rellenado automatizado de tus formularios.<br><br>Si estás colocando tu formulario en un dominio diferente al de la aplicación tus contactos tendrán problemas usando captcha en navegadores como Safari ya que ellos no permiten que los cookies de terceros sean establecidos por defecto.');

define('LNG_FormDoesntExist', 'El formulario web que intentas editar no existe. Por favor vuelve a intentarlo.');

define('LNG_FormCustomFieldSelection', 'Escoge la(s) lista(s) de la(s) cual(es) quieres añadir/quitar un contacto y los campos personalizados que quieras incluir en tu formulario. <a href="#" onClick="LaunchHelp(840); return false;">Más información aquí</a>.');

define('LNG_FormCustomFieldSortExplain', 'Arrastrar y soltar para reorganizar el orden en que aparecerán los campos en el formulario');

define('LNG_ContactFormExplain', 'Sí, enviarme una copia de los detalles del contacto');
define('LNG_UseCaptchaExplain', 'Sí, usar el formulario de seguridad CAPTCHA (recomendado)');
define('LNG_SendThanks', 'Enviar un email de agradecimiento');
define('LNG_OrderCustomFields', 'Cambiar orden campos (Arrastrar y Soltar):');
define('LNG_PreviewThisDesign', 'Previsualizar este diseño');
define('LNG_FormName_Hint', 'El nombre del formulario sólo es mostrado en el panel de control');
define('LNG_NameThisForm', 'Nombra este formulario');
define('LNG_ChooseAFormType', 'Escoge el tipo de formulario');
define('LNG_FormAdvancedOptions', 'Opciones avanzadas');
define('LNG_ShowContentBelow', 'Personalizar el aspecto de la página');
define('LNG_TakeSubscriberToAURL', 'Redirigir al suscriptor a una página web ya existente');
define('LNG_InsertACustomField', 'Campo personalizado');


/**
****************************
* Changed/added in IEM 5.0.2
****************************
*/
define('LNG_FormsNoLists', 'No se han creado listas de contacto.%s');
define('LNG_FormsNoLists_HasAccess', ' Haz clic en el botón <em>' . LNG_CreateListButton . '</em> siguiente para crear una.');
define('LNG_FormsNoLists_NoAccess', ' Por favor pregunta a tu administrador para que te cree una.');

/**
 * Added in 6.0.0
 */
define('LNG_UseCaptchaNoGd', 'The GD Library was not detected. In order to use CAPTCHA\'s in your forms, this must be installed.');