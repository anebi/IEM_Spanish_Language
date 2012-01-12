<?php
/**
* Language file variables for the login page.
*
* @see GetLang
*
* @version     $Id: login.php,v 1.11 2008/01/08 04:09:40 scott Exp $
* @author Chris <chris@interspire.com>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the login area... Please backup before you start!
*/


define('LNG_Login', 'Iniciar sesión');
define('LNG_UserName', 'Usuario');
define('LNG_NoUsername', 'Por favor introduze tu usuario.');
define('LNG_NoPassword', 'Por favor introduze tu contraseña.');

/**
* Forgot password page.
*/
define('LNG_ForgotPasswordDetails', 'Introduce tus detalles.');
define('LNG_NewPassword', 'Nueva contraseña');
define('LNG_BadLogin_Forgot', 'Este usuario no existe. Por favor intentalo de nuevo.');
define('LNG_ChangePasswordSubject', 'Por favor confirma el cambio de contraseña');
define('LNG_ChangePasswordEmail', 'Recientemente has elegido cambiar la contraseña de tu Panel de Control. Para confirmar lo, por favor sigue el siguiente enlace: %s');
define('LNG_PasswordUpdated', 'La contraseña ha sido actualizada con éxito. Por favor inicia sesión.');
define('LNG_BadLogin_Link', 'El enlace que has recibido en el email es inválido. Por favor intentalo de nuevo.');
define('LNG_ChangePassword', 'Cambiar contraseña');

define('LNG_LoginTitle', 'Iniciar sesión');


/**
***************************
* Changed/added in v5.0
***************************
*/
define('LNG_SendPassword', 'Enviar email');
define('LNG_BadLogin', 'El usuario o contraseña que has introducido son incorrectos. Por favor verifícalos y prueba de nuevo.');
define('LNG_Help_ForgotPassword', 'Rellena el formulario para generar una nueva contraseña. Un email te será enviado con un enlace que deberás seguir para confirmar el cambio de contraseña.');
define('LNG_Help_Login', 'Inicia sesión con tu usuario y contraseña.');
define('LNG_RememberMe', 'Recordar mis detalles');
define('LNG_ChangePassword_Emailed', 'Antes que tu contraseña sea cambiada...<br /><br />Por favor verifica tu Bandeja de Entrada/Correo no Deseado de tu cuenta de correo para %s. Te ha sido enviado un email que contiene un enlace que debes seguir para cambiar la contraseña.');
define('LNG_ForgotPasswordReminder', '<a href="index.php?Page=Login&Action=ForgotPass" style="font-size: 11px;">¿Has olvidado la contraseña?</a>');

define('LNG_TakeMeTo', 'Llévame a');
define('LNG_TakeMeTo_HomePage', 'Página de inicio');
define('LNG_TakeMeTo_Contacts', 'Mis contactos');
define('LNG_TakeMeTo_Lists', 'Mis listas de contactos');
define('LNG_TakeMeTo_Campaign', 'Mis campañas de email');
define('LNG_TakeMeTo_Autoresponder', 'Mis autorespuestas');
define('LNG_TakeMeTo_Statistics', 'Mis estadísticas de campañas');
define('LNG_TakeMeTo_Segments', 'Mis segmentos');

/**
***************************
* Changed/Added in v5.0.10
***************************
*/
define('LNG_PleaseWaitAWhile', 'Multiple failed login attempts detected. Please wait 15 minutes before attempting to login again.');

/**
***************************
* Changed/Added in v5.7.0
***************************
*/
define('LNG_ApplicationInactive_Admin', 'This software has been disabled due to a possible license violation. If you feel you have received this message in error, please contact Interspire.');
define('LNG_ApplicationInactive_Regular', 'This application is currently down for maintenance and is not available. Please try again later.');
