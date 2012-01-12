<?php
/**
* Language file variables for the info tips.
*
* @see GetLang
*
* @version     $Id: infotips.php,v 1.19 2008/01/25 04:37:59 hendri Exp $
* @author Chris <chris@interspire.com>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the info tips... Please backup before you start!
*
* In each case, the 'Intro' is the tip that shows up in sendstudio.
* The 'Description' gets shown when a tip is clicked.
*/

/**
* Number of generic info tips we have to choose from.
*/
define('Infotip_Size', 15);

define('LNG_Infotip_Form_Intro', 'Use double-optin to reduce spam reports.');

/**
* This gets shown before any info tip.
*/
define('LNG_Infotip_Intro', 'Email Marketing Tip #');
define('LNG_Infotip_ReadMore', 'Read&nbsp;more...');

define('LNG_Infotip_List_Intro', '15 "Simple Yet Effective" Email Marketing Tips');

define('LNG_Infotip_1_Intro', 'To avoid having your email marked as spam, keep clear of words such as \'Free\', \'$$$\', \'Save\'  and \'Discount\' in your subject line.');
define('LNG_Infotip_1_Title', 'Avoiding the Spam Filters');


define('LNG_Infotip_2_Intro', 'For maximum click-thru rates when creating HTML emails, make sure your links are blue, underlined and optionally bold.');
define('LNG_Infotip_2_Title', 'Maximizing Click-Thru Rates');


define('LNG_Infotip_3_Intro', 'Using personalization in your emails (such as \'Hi John\' instead of \'Hi there\') will increase your open rate by up to 650%');
define('LNG_Infotip_3_Title', 'The Power of Personalization');

define('LNG_Infotip_4_Intro', 'Always make sure you include an unsubscribe link. You can do this by adding the text %%UNSUBSCRIBELINK%% anywhere in your email.');
define('LNG_Infotip_4_Title', 'One-Click Unsubscription');

define('LNG_Infotip_5_Title', 'Signup Confirmation');

define('LNG_Infotip_6_Title', 'Tuesday / Wednesday = Increased Response');

define('LNG_Infotip_7_Title', 'Repeat Email Communication');

define('LNG_Infotip_8_Intro', 'Keep the theme of your email campaigns consistent. Create a text or HTML template and use that template whenever you create a new email.');
define('LNG_Infotip_8_Title', 'Consistency is the Key');

define('LNG_Infotip_9_Intro', 'For best results when sending recurring email campaigns, always send it on the same day at the same time. For example, every 2nd Wednesday at 3pm.');
define('LNG_Infotip_9_Title', 'On Time, Every Time');

define('LNG_Infotip_10_Intro', 'Make sure your subject line is persuasive and catches your readers attention. Instead of using something like \'OurSite Newsletter Issue #1\', use a benefit, such as \'OurSite Newsletter: 10 Tips for Financial Freedom\'.');
define('LNG_Infotip_10_Title', 'The Half-a-Second Subject Line');

define('LNG_Infotip_11_Intro', 'If running a newsletter, offer your customers a free bonus (such as an eBook or special report) for signing up. Then, create an autoresponder to email them a link to that bonus 1 hour after they subscribe.');
define('LNG_Infotip_11_Title', 'The Free Bonus Hook-In');


define('LNG_Infotip_12_Intro', 'Always have some interesting content at the top of your email, as this is the part that will show in the preview window of your client\'s email program, such as MS Outlook.');
define('LNG_Infotip_12_Title', 'The Preview Pane');

define('LNG_Infotip_13_Intro', 'Try using different wording for links in your marketing emails. Then, click on the stats button above to track which links received the most clicks and use them for future campaigns.');
define('LNG_Infotip_13_Title', 'Link-Click Testing');

define('LNG_Infotip_14_Title', 'Email-Based Learning');

define('LNG_Infotip_15_Title', 'Always Sign on the Dotted Line');
define('LNG_Infotip_15_Intro', 'Always include a signature at the bottom of your emails. You can use your signature to link back to your website, and even to your other products. Here\'s a sample signature: Regards, John Doe. President - Company XYZ. Visit our website at www.companyxyz.com');


/**
* To make context sensitive helptips.
* You can make up your own tips below
* And place them on specific pages by looking at the page & action from the url and placing them in the array.
*
* For example the 'Spam' info tip will be shown when the page is 'Newsletters' and action is 'Create'.
*
* Context sensitive help tips are NOT included in the generic helptips above.
*
* However you can include the generic ones as context sensitive ones if you prefer.
*
* Simply grab the tip 'number' and place it in the appropriate place..
*
* eg to show tip '15' when you are on the 'users' page (regardless of the Action).
* $GLOBALS['ContextSensitiveTips']['users'] = array('15');
*/
define('LNG_Infotip_Cron_Intro', 'Want faster sending?');

define('LNG_Infotip_Spam_Intro', 'Reduce your email being marked as spam.');
define('LNG_Infotip_Spam_Details', 'By testing your email in various email clients, including free accounts such as hotmail, gmail and yahoo you can reduce the chances of your email being marked as spam.');
define('LNG_Infotip_Spam_ReadMore', 'Read&nbsp;Tutorial...');

// The tutorials live in a specific folder - this simply points to a html file.

$GLOBALS['ContextSensitiveTips']['newsletters']['create'] = array('Spam');


define('LNG_Infotip_Autoresponders_Intro', 'How to Setup an Autoresponder.');
define('LNG_Infotip_Autoresponders_ReadMore', 'Read guide...');
$GLOBALS['ContextSensitiveTips']['autoresponders']['create'] = array('Autoresponders');

define('LNG_Infotip_AutoHowto_Intro', 'Autoresponders - The marketers magic trick.');
define('LNG_Infotip_AutoHowto_Details', 'Sending a series of emails to potential customers automatically is a great way to increase sales and customer loyalty with minimal fuss whether or not you run an online business.');
define('LNG_Infotip_AutoHowto_ReadMore', 'Find out how...');

$GLOBALS['ContextSensitiveTips']['autoresponders']['manage'] = array('AutoHowto');


define('LNG_Infotip_GettingStarted_Intro', 'Getting started.');
define('LNG_Infotip_GettingStarted_ReadMore', 'See the guide...');
define('LNG_Infotip_GettingStarted_ReadMoreLink', '812');
//$GLOBALS['ContextSensitiveTips']['index'] = array('GettingStarted');


define('LNG_Infotip_AddForm_Intro', 'Add a Subscription form to your website.');
define('LNG_Infotip_AddForm_ReadMore', 'Here\'s how...');

$GLOBALS['ContextSensitiveTips']['forms']['manage'] = array('AddForm');

define('LNG_Infotip_CustomFields_ReadMore', 'Here\'s how...');

$GLOBALS['ContextSensitiveTips']['customfields']['manage'] = array('CustomFields');

/**
**************************
* Changed/added in NX 1.3
**************************
*/
$GLOBALS['ContextSensitiveTips']['customfields']['create'] = array('CustomFields');
$GLOBALS['ContextSensitiveTips']['subscribers']['add'] = array('CustomFields');


$GLOBALS['Did_You_Know_Tips'] = array();
$GLOBALS['Did_You_Know_Tips'][] = ' Puedes colocar el puntero del ratón sobre el icono de ayuda <img align="top" src="images/help2.gif"> para obtener más información acerca de una opción particular.';

$GLOBALS['Did_You_Know_Tips'][] = ' El email marketing tiene el más alto retorno de la inversión que cualquier otro medio de marketing.';


$GLOBALS['Did_You_Know_Tips'][] = ' Puedes dirigirte a tus lectores por su nombre usando campos personalizados.';

$GLOBALS['Did_You_Know_Tips'][] = ' Educar a tus lectores ayuda a crear un clima de confianza, credibilidad y el deseo de leer tus emails para que cuando estés preparado para promocinoar, ellos estén preparados par escuchar.';

$GLOBALS['Did_You_Know_Tips'][] = ' Un buen email dispone de buena información, pero un gran email tiene personalidad. No tengas miedo de inyectar parte de tu personalidad en tus email campañas.';

$GLOBALS['Did_You_Know_Tips'][] = ' Puedes programar tus emails para que se envíen en fechas posteriores. Puedes crear 12 emails ahora y programarlos para que se envíen cada mes del año automáticamente.';

$GLOBALS['Did_You_Know_Tips'][] = ' Puedes enviar emails a grupos específicos de personas como las que no han clicado en ningún vínculo de tu email campaña.';

$GLOBALS['Did_You_Know_Tips'][] = ' Puedes ver quién ha abierto tu email campaña en la sección de estadísticas.';

$GLOBALS['Did_You_Know_Tips'][] = ' Puedes ver quién ha hecho clic en un link particular de tu email campaña en la sección de estadísticas.';

$GLOBALS['Did_You_Know_Tips'][] = ' Si tienes una tienda o taller físico, puedes pedir a los clientes su dirección de correo electrónico rellenando un formulario de suscripción impreso.';

$GLOBALS['Did_You_Know_Tips'][] = ' Si quieres ver cómo se ven tus emails en los diferentes gestores de correo electrónico, puedes hacerlo seleccionando el botón \'Ver tu email en diferentes gestores de correo electrónico\' al crear tus email campañas.';

$GLOBALS['Did_You_Know_Tips'][] = ' Si tus archivos adjuntos son muy grandes pueden relantizar su envío y recepción. Una alternativa a esto es que almacenenes tus archivos adjuntos en tu servidor y crees un enlace a ellos desde tu email campaña.';

$GLOBALS['Did_You_Know_Tips'][] = ' Si tu proveedor de alojamiento web ha puesto límite de envío de emails en tu servidor, puedes ralentizar la velocidad con que se envian tus emails estableciendo el límite \'Máximo por hora\' en la página de configuración.';

$GLOBALS['Did_You_Know_Tips'][] = ' Para ayudar a mantener tus email campañas coherentes puedes crear una plantilla en los que basar todos tus nuevos emails. De esta manera puedes crear la una vez y luego simplemente llenarla con nueva información.';

$GLOBALS['Did_You_Know_Tips'][] = ' Puedes crear formularios para Suscribirse, Desuscribirse, Enviar a un amigo y Modificar detalles desde un asistente y paso a paso haciendo clic en Formularios Web.';

$GLOBALS['Did_You_Know_Tips'][] = ' Hacer uso de las estadísticas pueden ayudarte a ver qué asuntos de mensaje y email campañas han sido más efectivas.';

$GLOBALS['Did_You_Know_Tips'][] = ' Email campañas eficazes son planeadas de antemano. Conozca a su público objetivo y sepa lo que quieren antes de enviarles el email.';

$GLOBALS['Did_You_Know_Tips'][] = ' Tener la información de contacto completa dentro de cada email puede ayudar a los clientes potencials contactarte rápidamente.';

$GLOBALS['Did_You_Know_Tips'][] = ' Deberías promocionar tu boletín en tu página web, dentro de cada email, en tu mesa de trabajo y en los puntos de venta.';


/**
**************************
* Changed/added in NX 1.4
**************************
*/
$GLOBALS['Did_You_Know_Tips'][] = ' Puedes previsualizar tu email campaña en múltiples gestores de correo electrónico. Simplemente haz clic en el botón cuando estés creando tu email campaña.';

/**
**************************
* Changed/added in 5.0.0
**************************
*/


define('LNG_Infotip_6_Intro', 'The best days to send a marketing or sales email to your contacts has been proven to be Tuesday and Wednesday.');

define('LNG_Infotip_7_Intro', 'Why not setup an autoresponder to send to your contacts 1 hour after they signup. You can use it to tell them more about your company, products or services.');


define('LNG_Infotip_14_Intro', 'Setup an email-based course for your contacts. To do this, simply create a series of autoresponders (for example, 5) containing unique content. Then, schedule the first one to go out after 24 hours, the second after 48 hours, etc.');

define('LNG_Infotip_Autoresponders_Details', 'This guide will help get you started setting up your first autoresponder so you can email your contacts automatically helping turn leads into customers.');

define('LNG_Infotip_GettingStarted_Details', 'Creating and sending your first email campaign is easy. Start by creating a contact list, custom fields, a subscription form and content for your email campaign. Finally, send your campaign to your contacts.');

define('LNG_Infotip_CustomFields_Details', 'To collect more than just an email address from your contacts you need to create and add custom fields to your subscription form. Collect simple information such as their name, or even advanced information such as their location or favorite color.');

define('LNG_Infotip_CustomFields_Intro', 'Learn how to collect your contacts name, age, sex, etc using custom fields.');

$GLOBALS['Did_You_Know_Tips'][] = ' Puedes programas autorespuestas para que automáticamente envíen un email a tus contactos a pre-definidos intervalos.   You can setup autoresponders to automatically email your contacts at pre-defined intervals.';

$GLOBALS['Did_You_Know_Tips'][] = ' Es mejor ir enviando tus emails a intervalos regulares como una vez por semana, una vez al mes para que así tu contactos se acostumbren a recibirlos.';

$GLOBALS['Did_You_Know_Tips'][] = ' Puedes reunir poca o mucha información de tus contactos usando los campos personalizados.';

$GLOBALS['Did_You_Know_Tips'][] = ' Puedes enviar un email recordatorio a los contactos que aun no hayan confirmado su suscripción.';

$GLOBALS['Did_You_Know_Tips'][] = ' Si tus contactos añaden tu dirección de email a su libreta de direcciones tus emails tendrán más facilidades de llegar a su bandeja de entrada.';

$GLOBALS['Did_You_Know_Tips'][] = ' El asunto de tu email es lo primero que tus contactos verán. Asugúrate que capte su atención para que abran y lean tu email.';

$GLOBALS['Did_You_Know_Tips'][] = ' Deberías aprovechar bien la parte superior de tus emails ya que muchos contactos verán esta parte en la previsualización del email y decidirán si ver el resto dependiendo del contenido que hayan visto.';

$GLOBALS['Did_You_Know_Tips'][] = ' Puedes mejorar el número de contactos de tu lista promoviendo los beneficios de antemano.';

$GLOBALS['Did_You_Know_Tips'][] = ' Una buena lista de contactos es como tener dinero en el banco. Cada email campaña puede generar sólidos ingresos.';

$GLOBALS['Did_You_Know_Tips'][] = ' Limitando la cantidad de información personal en los formularios de suscripción hace que el precoso sea más rapido lo que aumentará el número de contactos que recibas.';

define('LNG_Infotip_Form_Details', 'A confirmation email (double opt-in) verifies that the owner of the email address is also the person who signed up to your contact list. This can reduce your emails from being marked as spam by unintending recipients.');

define('LNG_Infotip_5_Intro', 'To reduce the number of bogus email addresses in your contact list, always use a double opt-in subscription system.');

define('LNG_Infotip_AddForm_Details', 'To collect leads from your website, you should add a subscription form to your website so your website visitors can subscribe to your contact list to receive more information from you.');

$GLOBALS['Did_You_Know_Tips'][] = ' If you save your bounce account details with your contact lists you can start to process your bounced emails automatically. This will keep your contact lists cleaner.';


define('LNG_Infotip_Cron_Details', 'Did you know that enabling cron (see <a href="#" onClick="LaunchHelp(\'%%WHITELABEL_INFOTIPS%%\',\'819\'); return false;">documentation</a> or contact your administrator) will allow you to schedule email campaigns to be sent at a future date, as well as sending emails much faster? It will also stop you from having to keep the popup window open.');

define('LNG_Infotip_Spam_ReadMoreLink', '802');
define('LNG_Infotip_Autoresponders_ReadMoreLink', '815');
define('LNG_Infotip_AutoHowto_ReadMoreLink', '797');
define('LNG_Infotip_AddForm_ReadMoreLink', '813');
define('LNG_Infotip_CustomFields_ReadMoreLink', '814');


define('LNG_Infotip_1_ReadMoreLink', '802');
define('LNG_Infotip_2_ReadMoreLink', '820');
define('LNG_Infotip_3_ReadMoreLink', '814');
define('LNG_Infotip_4_ReadMoreLink', '821');
define('LNG_Infotip_5_ReadMoreLink', '822');
define('LNG_Infotip_6_ReadMoreLink', '823');
define('LNG_Infotip_7_ReadMoreLink', '815');
define('LNG_Infotip_8_ReadMoreLink', '824');
define('LNG_Infotip_9_ReadMoreLink', '825');
define('LNG_Infotip_10_ReadMoreLink', '800');
define('LNG_Infotip_11_ReadMoreLink', '826');
define('LNG_Infotip_12_ReadMoreLink', '827');
define('LNG_Infotip_13_ReadMoreLink', '829');
define('LNG_Infotip_14_ReadMoreLink', '828');
define('LNG_Infotip_15_ReadMoreLink', '830');