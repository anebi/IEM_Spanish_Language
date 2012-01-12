<?php
/**
* Language file variables for the subscribers area (including adding, importing, removing, exporting, managing).
*
* @see GetLang
*
* @version     $Id: subscribers.php,v 1.74 2008/02/25 23:42:35 chris Exp $
* @author Chris <chris@interspire.com>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the subscribers area... Please backup before you start!
*/

define('LNG_ChooseValueForCustomField', 'Choose a value for custom field \'%s\'');
define('LNG_EnterValueForCustomField', 'Enter a value for custom field \'%s\'');
define('LNG_ChooseOptionForCustomField', 'Choose an option for custom field \'%s\'');
define('LNG_RemoveOptions', 'Para los contactos de arriba');
define('LNG_EnterEmailAddressesToRemove', 'Por favor introduce alguna dirección de email a eliminar o escoge un archivo a subir.');
define('LNG_Unsubscribe', 'Unsubscribe');
define('LNG_HLP_RemoveEmails', 'Escribe o pega aquí la lista de direcciones de email que quieres eliminar. Deberías poner cada dirección de email en una nueva línea.<br><br/>Usa esta opción si tienes pocas direcciones de email que eliminar.');
define('LNG_EmptyRemoveList', 'El archivo que has subido no contiene direcciones de email.');
define('LNG_MassUnsubscribeFailed', 'Las siguientes direcciones de email no han podido ser desuscritas o eliminadas:<br/>');
define('LNG_MassUnsubscribeSuccessful', '%s direcciones de email han sido eliminadas de la lista con éxito.');
define('LNG_MassUnsubscribeSuccessful_Single', '1 dirección de email ha sido eliminada de la lista con éxito.');
define('LNG_SubscriberEmailaddress', 'Direccion de email');
define('LNG_SubscriberFormat', 'Formato');
define('LNG_SubscriberStatus', 'Estado');
define('LNG_SubscriberConfirmed', 'Confirmado');
define('LNG_SubscriberAddFail_InvalidData', 'Invalid data was entered for the custom field \'%s\'.');
define('LNG_SubscriberAddFail_EmptyData_ChooseOption', '\'%s\' is a required field. Please choose an option.');
define('LNG_SubscriberAddFail_EmptyData_EnterData', '\'%s\' is a required field. Please fill in the field below.');
define('LNG_SubscriberEditFail_Duplicate', 'Someone is already subscribed to this list with the email address \'%s\'.');
define('LNG_SubscriberEditFail_InvalidData', 'Invalid data was entered for the custom field \'%s\'.');
define('LNG_Save_AddAnother', 'Save & Add Another');
define('LNG_UnsubscribeTime', 'Unsubscribe Time');
define('LNG_UnsubscribeIP', 'Unsubscribe IP');
define('LNG_Import_From_file', 'Archivo');
define('LNG_ImportType', 'Import Type');
define('LNG_ImportDetails', 'Detalles de importación');
define('LNG_ImportFormat', 'Formato');
define('LNG_IncludeAutoresponder', 'Autorespuestas');
define('LNG_ImportFileDetails', 'Detalles de archivo');
define('LNG_ContainsHeaders', 'Contiene encabezados');
define('LNG_YesContainsHeaders', 'Sí, el archivo contiene encabezados');
define('LNG_HLP_ContainsHeaders', '¿La primera línea de tu archivo de importación contiene encabezados? Si es así, cada encabezado debería ser separado por un separador de campo, tal como:<br><br>Email, Nombre, Sexo.');
define('LNG_FieldSeparator', 'Separador de campo');
define('LNG_EnterFieldSeparator', 'Por favor introduze un separador de campo');
define('LNG_FieldEnclosed', 'Encierre de campo');
define('LNG_HLP_FieldEnclosed', '¿Con qué carácter es cada campo encerrado? Todos los campos deben tener este carácter alrededor. Por ejemplo:<br><br>&quot;test@test.com&quot;, &quot;21&quot;, &quot;Masculino&quot;');
define('LNG_ImportFile', 'Importar archivo');
define('LNG_ImportFile_FieldSeparatorEmpty', 'Por favor introduze un separador de campo.');
define('LNG_ImportFile_FileEmpty', 'Por favor escoge el archivo a importar.');
define('LNG_MatchOption', 'Match option \'%s\' to field');
define('LNG_ImportFields', 'Enlaza campos importados');
define('LNG_MappingOption', 'Relación de campos');
define('LNG_HLP_MappingOption', '¿A qué campo de la base de datos es relacionado el campo \\\'%s\\\' del archivo?');
define('LNG_ImportStart', 'Empezar importación...');
define('LNG_InvalidSubscribeDate', ' <-- Fecha de suscripción inválida');
define('LNG_InvalidCustomFieldData', ' <-- Datos del campo personalizado inválidos para el campo \'%s\'');
define('LNG_InvalidSubscriberEmailAddress', ' <-- Dirección de email inválida');
define('LNG_InvalidSubscriberImportLine_NotEnough', ' <-- Falta delimitador');
define('LNG_InvalidSubscriberImportLine_TooMany', ' <-- Demasiados delimitadores');
define('LNG_InvalidReportURL', 'You have accessed an invalid report url. Please try again.');
define('LNG_ImportResults_Report_Invalid_Heading', 'Invalid Report URL.');
define('LNG_ImportResults_Report_Invalid_Intro', 'You have accessed an invalid url. Please close this window and try again.');
define('LNG_ImportResults_Report_Duplicates_Heading', 'Encontradas direcciones de email duplicadas');
define('LNG_ImportResults_Report_Failures_Heading', 'Fallo al importar direcciones de email');
define('LNG_ImportResults_Report_Failures_Intro', 'Las siguientes direcciones de email no han podido ser importadas. Por favor vuelve a intentarlo.');
define('LNG_ImportResults_Report_Unsubscribed_Heading', 'Unsubscribed Email Addresses');
define('LNG_DuplicateReport', '<b>Direcciones de email duplicadas</b>');
define('LNG_FailureReport', '<b>Unable to subscribe these email addresses</b>');
define('LNG_ImportResults_InProgress', 'Importación en progreso');
define('LNG_ImportSubscribers_InProgress_unsubscribes_Many', '%s lines contain unsubscribed email addresses so far');
define('LNG_ImportSubscribers_InProgress_unsubscribes_One', '1 line contains an unsubscribed email address so far');
define('LNG_ExportStart', 'Empezar...');
define('LNG_IncludeFields', 'Campos a incluir');
define('LNG_ExportOptions', 'Opciones de exportación');
define('LNG_IncludeHeader', '¿Incluir campos de encabezado?');
define('LNG_HLP_IncludeHeader', '¿Debería esta exportación incluir campos de encabezado? De ser así, la primera línea del archivo será parecida a:<br><br>Email, Estado, Formato');
define('LNG_FieldEnclosedBy', 'Campos encerrados por');
define('LNG_HLP_FieldEnclosedBy', '¿Qué carácter (si hay alguno) debería envolver cada campo? Por ejemplo, si introduces las comillas, un ejemplo de registro podría ser:<br><br>&quot;test@test.com&quot;, &quot;21&quot;, &quot;James&quot;');
define('LNG_Export_FieldSeparator', LNG_FieldSeparator);
define('LNG_HLP_Export_FieldSeparator', '¿Qué carácter debería ser añadido a este archivo de exportación para separar el contenido de cada nuevo campo?');
define('LNG_ExportField', 'Campo #%s');
define('LNG_SubscriberNone', 'Ninguno');
define('LNG_Subscribers_Export_Step4_Intro', 'Haz clicl en el botón "Empezar exportación" para empezar la exportación.');
define('LNG_ExportResults_Heading', 'Exportar resultados');
define('LNG_SubscriberEmail', 'Direccion de email');
define('LNG_SubscribeDate_DMY', 'Fecha de suscripcion (dd/mm/aaaa)');
define('LNG_SubscribeDate_MDY', 'Fecha de suscripcion (mm/dd/aaaa)');
define('LNG_SubscribeDate_YMD', 'Fecha de suscripcion (aaaa/mm/dd)');
define('LNG_IncludeField', '¿Incluir este campo?');
define('LNG_DeleteExportFile', 'Eliminar archivo');
define('LNG_EmptyBannedList', 'El archivo que has subido no contiene direcciones de email.');
define('LNG_BannedSubscriberEmail', 'Dirección de email');
define('LNG_Delete_Banned_Selected', 'Eliminar seleccionados');
define('LNG_ConfirmBannedSubscriberChanges', '¿Seguro que quieres hacer estos cambios?\nEsta acción no se puede deshacer.');



/**
 * 1.0.5
 */
define('LNG_ImportResults_Report_Bads_Heading', 'Datos erróneos han sido encontrados');
define('LNG_ImportResults_Report_Bads_Intro', 'Las siguientes direcciones de email del archivo de importación contienen datos erróneos.');
define('LNG_ImportSubscribers_InProgress_bads_Many', '%s líneas contienen datos erróneos hasta la fecha');
define('LNG_ImportSubscribers_InProgress_bads_One', '1 línea contiene datos erróneos hasta la fecha');



/**
 * 1.3.0
 */
define('LNG_SubscriberIP_Unknown', 'Dirección IP desconocida');
define('LNG_SubscriberBounceTime', 'Time of Bounce');
define('LNG_SubscriberBounceType', 'Type of Bounce');
define('LNG_BounceTimeFormat', 'Y/m/d');
define('LNG_BounceTypeFormat', '%s (%s bounce)');
define('LNG_RemoveEmails', 'Contactos a eliminar');
define('LNG_RemoveFile', 'Subir archivo desde mi ordenador');
define('LNG_HLP_RemoveFile', 'Si tienes un archivo que contiene las direcciones de email que quieres eliminar, puedes seleccionarlo aquí. Tu archivo debería contener una dirección de email por línea. Por ejemplo:<br /><br />email1@dominio.com<br>email2@dominio2.com');
define('LNG_ImportConfirmedStatus', 'Marcar como confirmado');
define('LNG_OverwriteExistingSubscriber', 'Sobreescribir detalles existentes');
define('LNG_Subscribers_Export_Step3_Intro', 'Escoge como quieres exportar tus contactos rellenando el formulario siguiente. Puedes escoger qué campos incluir en la sección <em>Campos a incluir</em>.');
define('LNG_SubscriberBanListEmpty', '%s no tiene direcciones de email suprimidas.');
define('LNG_SubscriberBan_Updated', 'El email suprimido ha sido actualizado con éxito.');
define('LNG_SubscriberBan_NotUpdated', 'La dirección de email suprimida no ha sido actualizada.');
define('LNG_SubscriberBan_UnableToUpdate', 'No ha sido posible actualizar la información de supresión. Por favor vuelve a intentarlo.');
define('LNG_ConfirmRemoveBannedSubscribers', '\u00BFSeguro que quieres eliminar estos emails suprimidos?');
define('LNG_ChooseBannedSubscribers', 'Por favor escoge algunos emails suprimidos para eliminar.');
define('LNG_BannedAddButton', 'Suprimir email o dominio...');
define('LNG_Subscriber_Ban_NotDeleted_One', '1 email suprimido no fue eliminado de la lista \'%s\'.');
define('LNG_Subscriber_Ban_Deleted_One', '1 email suprimido fue eliminado con éxito de la lista \'%s\'.');
define('LNG_Subscriber_Ban_NotDeleted_Many', '%s suppressed email addresses bans were not deleted from list \'%s\'.');
define('LNG_Subscribers_Banned_Edit', 'Editar emails suprimidos');
define('LNG_Subscribers_Banned_Edit_Intro', 'Modifica los detalles de la direccion de email suprimida en el formulario siguiente y haz clic en el botón \'Guardar\'.');
define('LNG_Subscribers_Banned_Edit_CancelPrompt', '\u00BFSeguro que quieres cancelar la edici\u00F3n de esta direcci\u00F3n de email suprimida?');
define('LNG_Banned_Edit_Empty', 'Por favor introduce una dirección de email para suprimir.');
define('LNG_Banned_Edit_ChooseList', 'Por favor escoge una lista de la cual suprimir esta dirección de email.');
define('LNG_Ban_Count_Many', ' (%s supresiones)');
define('LNG_Ban_Count_One', ' (1 supresión)');
define('LNG_BannedDate', 'Fecha de supresión');
define('LNG_DeleteBannedSubscriberPrompt', '\u00BFSeguro que quieres eliminar esta supresi\u00F3n?');
define('LNG_MassBanSuccessful', '%s direcciones de email han sido añadidas con éxito a tu lista de emails suprimidos.');
define('LNG_MassBanSuccessful_Single', '1 dirección de email ha sido suprimida con éxito');
define('LNG_MassBanFailed', '<br>Un error ha ocurido mientras se intentaban suprimir las direcciones de email siguientes:<br/>');
define('LNG_Subscriber_AlreadyBanned', 'La dirección de email ya está suprimida');
define('LNG_Subscribers_Banned', 'Ver lista de emails suprimidos');
define('LNG_Subscribers_BannedManage_CancelPrompt', '\u00BFSeguro que quieres cancelar la administraci\u00F3n de tus listas de emails suprimidos?');
define('LNG_Banned_Subscribers_FoundOne', 'Encontrada 1 dirección de email suprimida.');
define('LNG_Banned_Subscribers_FoundMany', 'Encontradas %s direcciones de email suprimidas.');
define('LNG_SubscribersManageBanned', 'Ver emails suprimidos para %s');
define('LNG_BannedFile', 'Archivo de emails suprimidos');
define('LNG_HLP_BannedFile', 'Escoge el archivo a subir que contiene los emails o dominios a suprimir. El archivo debería contener una entrada por línea. Para suprimir un dominio entero, simplemente usa:<br /><br />@hotmail.com<br />@gmail.com<br />@compañia.es');
define('LNG_Subscribers_GlobalBan', '-- Supresión global (Todas las listas) --');
define('LNG_Subscribers_Banned_CancelPrompt', '\u00BFSeguro que quieres cancelar?');
define('LNG_Banned_Add_EmptyList', 'Por favor introduze el email o dominio a suprimir.');
define('LNG_Banned_Add_EmptyFile', 'Por favor selecciona el archivo que contiene los emails que quieres suprimir.');
define('LNG_Banned_Add_ChooseList', 'Por favor escoge la lista de la cual suprimir estos emails.');
define('LNG_BannedEmailDetails', 'Detalles de los emails/dominios suprimidos');
define('LNG_Subscribers_Banned_Add', 'Añade emails/dominios a la lista de supresión');
define('LNG_BannedEmails', 'Emails o dominios a suprimir');
define('LNG_HLP_BannedEmails', 'Introduze aquí la lista de direcciones de emails a suprimir. Si te gustaría suprimir el dominio entero, simplemente introduze @NOMBREDOMINIO. Por ejemplo, para suprimir a todos de Hotmail, introduze @hotmail.com.');
define('LNG_Banned_AddEmailsUsingForm','Quiero escribir las direcciones de email/dominios a eliminar en un caja de texto');
define('LNG_BanSingleEmail', 'Email para suprimir');
define('LNG_HLP_BanSingleEmail', 'Introduze aquí la direccián de email a suprimir. Si te gustaría suprimir el dominio entero, simplemente introduze @NOMBREDOMINIO. Por ejemplo, para suprimir a todos de Hotmail, introduze @hotmail.com.');
define('LNG_HLP_BannedEmailsChooseList', 'Escoge la lista de la cual suprimir estas direcciones de email.');
define('LNG_ImportSubscribers_InProgress_bans_Many', '%s líneas contienen direcciones de email o dominios suprimidos hasta la fecha');
define('LNG_ImportSubscribers_InProgress_bans_One', '1 línea contiene direcciones de email o dominios suprimidos hasta la fecha');
define('LNG_ImportResults_Report_Banned_Heading', 'Direcciones de email suprimidas');
define('LNG_FilterOptions_Subscribers', 'Opciones de búsqueda');
define('LNG_ImportFile_ServerFileEmpty', 'Por favor escoge el archivo a importar.');
define('LNG_ImportFile_ServerFileDoesNotExist', 'El archivo seleccionado no existe en el directorio de "importación"');
define('LNG_ImportFile_ServerFileEmptyList', 'No se encontraron archivos en tu servidor. Para utilizar esta opción, por favor sube el archivo a ser importado al directorio de "importación" (admin/importación) del servidor.');
define('LNG_ImportFile_SourceUpload', 'Subir archivo desde mi ordenador ('.ini_get('upload_max_filesize').' máximo)');
define('LNG_ImportFile_SourceServer', 'Importar archivo desde mi sitio web');
define('LNG_ImportFileFromServer', LNG_ImportFile);
define('LNG_ExportFileType', 'Formato de archivo');
define('LNG_ExportFileTypeCSV', 'Archivo CSV');
define('LNG_ExportFileTypeXML', 'Archivo XML');
define('LNG_ImportFile_HeaderInFile', 'El archivo importado contiene estos campos:');
define('LNG_HLP_FieldSeparator', 'Introduze el carácter que es usado en tu archivo de importación CSV para separar cada campo o columna. Asegúrate que este caracter no aparece en ningún otro sitio en el archico CSV. Normalmente en un archivo CSV (Comma Separated Values) este carácter es una \\\',\\\'. Asegúrate que tus columnas por sí mismas no contengan comas búscando y reemplazando todas las comas simplemente con un espacio en blanco.<br/><br>Si deseas usar el carácter tabulador introduze la palabra &quot;TAB&quot; aquí.<br><br>Si no estás seguro deja esta opción como está.');



/**
 * 1.4.1
 */
define('LNG_SubscriberIsAlreadyUnsubscribed', 'La dirección de email \'%s\' ya se encuentra desuscrita.');



/**
 * 5.0.0
 */
define('LNG_Subscribers_Add_CancelPrompt', '\u00BFSeguro que quieres cancelar la adición de nuevos contactos?');
define('LNG_Subscribers_EnterEmailAddress', 'Por favor introduze una direcci\u00F3n de email para este contacto.');
define('LNG_NewSubscriberDetails', 'Nuevos detalles de contacto');
define('LNG_SubscriberAddFail', 'El contacto no ha sido añadido con éxito');
define('LNG_SubscriberAddFail_Duplicate', 'El contacto con la dirección de email \'%s\' ya existe.');
define('LNG_SubscriberAddFail_Unsubscribed', 'El contacto con la dirección de email \'%s\' se ha desuscrito de esta lista de contacto. Para reactivarlo, edita el contacto y cambia su estado a "Activo".');
define('LNG_SubscriberAddFail_InvalidEmailAddress', 'El contacto con la dirección de email \'%s\' no puede ser añadido a esta lista. Es una dirección de email inválida.');
define('LNG_SubscriberAddSuccessful', 'El nuevo contacto ha sido añadido a tu lista.');
define('LNG_SubscriberAddSuccessfulList', 'Contacto añadido a la lista de contacto \'%s\' con éxito.');
define('LNG_Subscribers_Remove_Heading', 'Eliminar contactos');
define('LNG_Subscribers_Remove', 'Eliminar contactos');
define('LNG_Subscribers_Remove_CancelPrompt', '\u00BFSeguro que quieres cancelar la eliminaci\u00F3n de contactos?');
define('LNG_Subscribers_Remove_Step2', 'Eliminar contactos');
define('LNG_Subscribers_RemoveMore', 'Eliminar más contactos');
define('LNG_DeleteSubscriberPrompt', '\u00BFSeguro que quieres eliminar este contacto?');
define('LNG_NoSubscribersToDelete', 'No hay contactos para eliminar. Por favor intentalo más tarde.');
define('LNG_Subscriber_Deleted', '1 contacto fue eliminado con éxito');
define('LNG_Subscribers_Deleted', '%s contactos fueron eliminados con éxito');
define('LNG_Subscriber_NotDeleted', '1 contacto no fue eliminado.');
define('LNG_Subscribers_NotDeleted', '%s contactos no fueron eliminados.');
define('LNG_NoSubscribersToChangeFormat', 'No hay contactos a los que cambiar el formato de email.');
define('LNG_Subscriber_NotChangedFormat', '1 contacto no ha sido cambiado para recibir los emails en formato %s.');
define('LNG_Subscribers_NotChangedFormat', '%s contacto no han sido cambiados para recibir los emails en formato %s.');
define('LNG_Subscriber_ChangedFormat', '1 contacto ha sido cambiado para recibir los emails en formato %s.');
define('LNG_Subscribers_ChangedFormat', '%s contactos han sido cambiados para recibir los emails en formato %s.');
define('LNG_NoSubscribersToChangeStatus', 'No hay contactos a los que cambiar el estado.');
define('LNG_Subscriber_NotChangedStatus', '1 contacto no ha sido cambiado al estado %s');
define('LNG_Subscribers_NotChangedStatus', '%s contactos no han sido cambiados al estado %s');
define('LNG_Subscriber_ChangedStatus', '1 contacto ha sido cambiado al estado %s');
define('LNG_Subscribers_ChangedStatus', '%s contactos han sido cambiados al estado %s');
define('LNG_NoSubscribersToChangeConfirm', 'No hay contactos a los que cambiar el estado de confirmacián.');
define('LNG_Subscriber_NotChangedConfirm', '1 contacto no ha sido cambiado al estado de confirmacián \'%s\'.');
define('LNG_Subscribers_NotChangedConfirm', '%s contactos no han sido cambiados al estado de confirmacián \'%s\'.');
define('LNG_Subscriber_ChangedConfirm', '1 contacto ha sido cambiado al estado de confirmacián \'%s\'.');
define('LNG_Subscribers_ChangedConfirm', '%s contactos han sido cambiados al estado de confirmacián \'%s\'.');
define('LNG_Subscribers_Edit', 'Editar contacto');
define('LNG_Subscribers_Edit_CancelPrompt', '\u00BFSeguro que quieres cancelar la edici\u00F3n de este contacto?');
define('LNG_EditSubscriberDetails', 'Editar detalles del contacto');
define('LNG_SubscriberEditSuccess', 'Los detalles del contacto han sido actualizados. Puedes seguir haciendo cambios abajo.');
define('LNG_SubscriberEditFail', 'No ha sido posible actualizar la informacián del contacto. Por favor vuelve a intentarlo.');
define('LNG_ChooseSubscribers', 'Por favor antes escoge al menos un contacto.');
define('LNG_HLP_UnsubscribeTime', 'Cuándo el contacto se ha desuscrito de la lista de contactos.');
define('LNG_HLP_UnsubscribeIP', 'La direccián IP del contacto cuando este se ha desuscrito de la lista de contactos.');
define('LNG_HLP_ConfirmedStatus', 'La opción de confirmado es normalmente usada para el proceso double-optin donde los usuarios confirman su suscripción siguiendo un enlace del email de confirmación. Si seleccionas desconfirmado puedes enviar posteriormente a los contactos un email que contenga un enlace de confirmación y así asegurarte que quieran ser incluidos en tu lista de contactos.');
define('LNG_HLP_Format', '¿Que formato de email deberían recibir estos contactos por defecto? ¿HTML o Texto? Los contactos HTML pueden recibir ambos emails de HTML y Texto, pero los contactos Texto sólo pueden recibir emails de Texto.<br><br>Si no estás seguro, selecciona HTML.');
define('LNG_HLP_SubscriberStatus', 'Los contactos activos son aquellos que no han rebotado y que no se han desuscrito de la lista de contactos.<br/>El estado \\\'rebotado\\\' es para aquellos que han sido deshabilitados de la lista de contactos por que han rebotado demasiadas veces, o han sido detectados como un rebote duro.<br/>El estado \\\'desuscrito\\\' es para aquellos que se han desuscrito específicamente de la lista de contactos.');
define('LNG_Subscribers_Import', 'Importar contactos de un archivo');
define('LNG_Subscribers_Import_Intro', 'Para importar contactos de un archivo CSV de tu ordenador, empieza seleccionando la lista donde importar los contactos.');
define('LNG_Subscribers_Import_Step2', 'Importar contactos de un archivo');
define('LNG_HLP_ImportType', '¿Cámo importarás tu lista de contactos?');
define('LNG_Subscribers_Import_CancelPrompt', '\u00BFSeguro que quieres cancelar la importaci\u00F3n de los contactos?');
define('LNG_ImportStatus', 'Estado');
define('LNG_HLP_ImportStatus', 'Cuando estos contactos sean importados, ¿cuál debería ser su estado?');
define('LNG_Subscribers_Import_Step3', 'Importar contactos');
define('LNG_Subscribers_Import_Step3_Intro', 'Los campos de tu archivo CSV son mostrados a continuación a la izquierda. Escoge a qué detalles de contacto corresponden seleccionandolos de la lista de la derecha.');
define('LNG_HLP_ImportFormat', '¿Que formato de email deberían recibir estos contactos por defecto? ¿HTML o Texto? Los contactos HTML pueden recibir ambos emails de HTML y Texto, pero los contactos Texto sólo pueden recibir emails de Texto. Si tu archivo de importación contiene un campo que especifica el formato, sobrescribirá esta opción.<br><br>Si no estás seguro, selecciona HTML.');
define('LNG_YesIncludeAutoresponder', 'Sí, añadir contactos a las autorespuestas');
define('LNG_HLP_ImportFile', 'Escoge el achivo a subir que contenga los detalles de contacto que quieres importar. Este debería ser un archivo de texto plano.');
define('LNG_EmailAddressNotLinked', 'El campo de la dirección email de contacto no está enlazada. No podemos proceder sin que esta sea enlazada.');
define('LNG_Subscribers_Import_Step4', 'Importar contactos');
define('LNG_Subscribers_Import_Step4_Intro', 'Haz clic en el botón siguiente para empezar con la importación de los contactos. Por favor no cierres el explorador web o naveges fuera de esta página mientras los contactos están siendo importados.<br /><br />');
define('LNG_ImportSubscribers_success_Many', '%s contactos han sido importados con éxito');
define('LNG_ImportSubscribers_success_One', '1 contacto ha sido importado con éxito');
define('LNG_ImportSubscribers_updates_Many', '%s contactos han sido actualizados con éxito');
define('LNG_ImportSubscribers_updates_One', '1 contacto ha sido actualizado con éxito');
define('LNG_ImportSubscribers_duplicates_Many', '%s contactos contienen direcciones de email duplicadas');
define('LNG_ImportSubscribers_failures_Many', '%s contactos no han sido importados con éxito');
define('LNG_ImportSubscribers_unsubscribes_Many', '%s contactos están desuscritos');
define('LNG_ImportResults_Heading', 'Importar contactos');
define('LNG_ImportResults_Intro', 'La importación de los contactos ha sido completada con éxito');
define('LNG_ImportResults_InProgress_Message', 'Por favor espera mientras intentamos importar %s registro(s) de contacto(s)...');
define('LNG_ImportSubscribers_InProgress_success_Many', '%s contactos han sido importados hasta la fecha');
define('LNG_ImportSubscribers_InProgress_success_One', '1 contacto ha sido importado hasta la fecha');
define('LNG_ImportSubscribers_InProgress_updates_Many', '%s contactos han sido actualizados hasta la fecha');
define('LNG_ImportSubscribers_InProgress_updates_One', '1 contacto ha sido actualizado hasta la fecha');
define('LNG_ImportSubscribers_InProgress_duplicates_Many', '%s contactos duplicados han sido encontrados hasta la fecha');
define('LNG_ImportSubscribers_InProgress_duplicates_One', '1 contacto duplicado ha sido encontrado hasta la fecha');
define('LNG_ImportSubscribers_InProgress_failures_Many', '%s contactos no han sido importados hasta la fecha');
define('LNG_ImportSubscribers_InProgress_failures_One', '1 contacto no ha sido importado hasta la fecha');
define('LNG_Subscribers_Export_Step2', 'Exportar contactos a un archivo');
define('LNG_Subscribers_Export_Step2_Intro', 'Usa el asistente de abajo para exportar una copia de tu lista de contactos a un archivo CSV el cual puedes descargar a tu ordenador.');
define('LNG_Subscribers_Export_FoundOne', '1 contacto concuerda con tu búsqueda y puede ser exportado. Escoge tus opciones de exportación y haz clic en <em>Siguiente</em> para empezar la exportación.');
define('LNG_Subscribers_Export_FoundMany', '%s contactos concuerdan con tu búsqueda y pueden ser exportados. Escoge tus opciones de exportación y haz clic en <em>Siguiente</em> para empezar la exportación.');
define('LNG_ExportSummary_FoundOne', 'Haz clic en el botón siguiente para empezar la exportación de tu contacto. Por favor no cierres el explorador o navegues fuera de esta página mientras tu contacto está siendo exportado.<br /><br />');
define('LNG_ExportSummary_FoundMany', 'Haz clic en el botón siguiente para empezar con la exportación (%s contactos serán exportados). Por favor no cierres el explorador o navegues fuera de esta página mientras tus contactos est&aacuten; siendo exportados.<br /><br />');
define('LNG_ExportResults_InProgress_Message', 'Por favor espera mientras intentamos exportar %s contacto(s).');
define('LNG_ExportResults_InProgress_Status', '%s de %s contactos han sido exportados hasta la fecha...');
define('LNG_ExportResults_Intro', 'Los contactos seleccionados han sido exportados con éxito. <a href=%s target=_blank>Haz clic aquí para descargar el archivo exportado</a>. Deberías eliminar este archivo una vez lo hayas descargado.');
define('LNG_ExportResults_Link', 'Haz clic aquí para descargar tus contactos exportados.');
define('LNG_ExportResults_InProgress', 'Exportando contactos');
define('LNG_ImportSubscribers_bads_One', '1 contacto contiene datos erráneos');
define('LNG_ImportSubscribers_bads_Many', '%s contactos contienen datos erráneos');
define('LNG_SubscriberIPAddress', 'Direccion IP de los contactos');
define('LNG_ImportSubscribers_duplicates_Many_Link', '%s contactos contienen direcciones de email duplicadas. <a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Haz clic aquí para más información ]</a>');
define('LNG_ImportSubscribers_duplicates_One_Link', '1 contacto contiene la dirección de email duplicada. <a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Haz clic aquí para más información ]</a>');
define('LNG_ImportSubscribers_failures_Many_Link', '%s contactos no han sido importados con éxito. <a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Haz clic aquí para más información ]</a>');
define('LNG_ImportSubscribers_failures_One_Link', '1 contacto no ha sido importado con éxito. <a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Haz clic aquí para más información ]</a>');
define('LNG_ImportSubscribers_unsubscribes_Many_Link', '%s contactos estón desuscritos de esta lista. <a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Haz clic aquí para más información ]</a>');
define('LNG_ImportSubscribers_unsubscribes_One_Link', '1 contacto estó desuscrito de esta lista. <a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Haz clic aquí para más información ]</a>');
define('LNG_ImportSubscribers_bads_Many_Link', '%s contactos contienen datos erróneos. <a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Haz clic aquí para más información ]</a>');
define('LNG_ImportSubscribers_bads_One_Link', '1 contacto contiene datos erróneos. <a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Haz clic aquí para más información ]</a>');
define('LNG_Subscribers_Manage', 'Ver contactos');
define('LNG_Subscribers_Manage_Intro', 'Un contacto es una persona que se ha añadido o suscrito a tu lista de contactos. Puedes ver todos tus contactos o puedes usar las opciones de filtrado para localizar contactos específicos.');
define('LNG_Subscribers_Manage_CancelPrompt', '\u00BFSeguro que quieres cancelar el visionado de los contactos?');
define('LNG_Subscribers_Add', 'Añadir contacto');
define('LNG_Subscribers_Add_Step1', LNG_Subscribers_Add);
define('LNG_Subscribers_Remove_Step2_Intro', 'Usa el formulario siguiente para eliminar contactos de tu lista. Puedes establecer su estado a desuscrito, o puedes eliminarlos de tu lista permanentemente.');
define('LNG_YesOverwriteExistingSubscriber', 'Sí, sobreescribir los detalles de contacto existentes');
define('LNG_Subscribers_Export', 'Exportar contactos a un archivo');
define('LNG_Subscribers_Export_Intro', 'Una copia de tu lista de contactos puede ser exportada a un archivo CSV que puedes descargar a tu ordenador. Por favor selecciona la lista de contactos que quieres exportar.');
define('LNG_Subscribers_Export_CancelPrompt', '\u00BFEst\u00E1s seguro de querer cancelar la exportaci\u00F3n de los contactos?');
define('LNG_Subscribers_Export_Step3', 'Exportar contactos a un archivo');
define('LNG_Subscribers_Export_Step4', 'Exportar contactos a un archivo');
define('LNG_Subscribers_Edit_Intro', 'Actualiza los detalles del contacto seleccionado usando el formulario siguiente.');
define('LNG_Subscribers_Add_Step1_Intro', 'Para añadir un sólo contacto a tu lista, empieza escogiendo la lista donde quieras agregarlo. Alternativamente puedes <a href="index.php?Page=Subscribers&Action=Import">importar contactos desde un archivo</a>.');
define('LNG_Subscribers_Add_Step2_Intro', 'Escribe los detalles del nuevo contacto en el formulario que aparece a continuación. Al hacer clic en Guardar serán añadidos a tu lista.');
define('LNG_ImportSubscribers_bans_One_Link', '1 contacto ha sido suprimido de formar parte de esta lista de contactos. <a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Haz clic aquí para más información ]</a>');
define('LNG_ImportSubscribers_bans_Many_Link', '%s contactos han sido suprimidos de formar parte de esta lista de contactos. <a href="#" style="color: blue;" onclick="javascript: ShowReport(\'%s\'); return false;">[ Haz clic aquí para más información ]</a>');
define('LNG_ImportSubscribers_bans_Many', '%s contactos son suprimidos de formar parte de esta lista de contactos');
define('LNG_Subscribers_FoundOne', 'Tu búsqueda devolvió 1 contacto. Los detalles són mostrados a continuación.');
define('LNG_Subscribers_FoundMany', 'Tu búsqueda devolvió %s contactos. Los detalles són mostrados a continuación.');
define('LNG_Subscribers_OneList_FoundOne', 'Tienes 1 contacto en tu lista de contactos. Los detalles se muestran a continuación.');
define('LNG_Subscribers_OneList_FoundMany', 'Tienes %s contactos en tu lista de contactos. Son mostrados a continuación.');
define('LNG_Subscribers_ManyList_FoundOne', 'Tienes 1 contacto entre todas las listas de contactos. Los detalles se muestran a continuación.');
define('LNG_Subscribers_ManyList_FoundMany', 'Tienes %s contactos entre todas las listas de contactos. Son mostrados a continuación.');
define('LNG_Subscribers_AllList_FoundOne', 'Tienes 1 contacto entre todas las listas de contactos. Los detalles se muestran a continuación.');
define('LNG_Subscribers_AllList_FoundMany', 'Tienes %s contactos entre todas las listas de contactos. Son mostrados a continuación.');
define('LNG_Subscribers_Segment_FoundOne', 'Tienes 1 contacto en tu segmento. Los detalles se muestran a continuación..');
define('LNG_Subscribers_Segment_FoundMany', 'Tienes %s contactos en tu segmento. Son mostrados a continuación.');
define('LNG_SubscribersManageAnyList', 'Todos los contactos');
define('LNG_SubscribersManageMultipleList', 'Contactos de múltiples listas');
define('LNG_SubscribersManageSearchResult', 'Buscar resultados');
define('LNG_SubscribersManageSingleList', '%s');
define('LNG_SubscribersManageSegment', '%s');
define('LNG_SubscribersShowFilteringOptionsExplain', 'Ver contactos específicos de las listas siguientes seleccionadas');
define('LNG_SubscribersDoNotShowFilteringOptionsExplain', 'Ver todos los contactos de las de las listas siguientes seleccionadas');
define('LNG_SubscribersShowSegmentsExplain', 'Ver todos los contactos de los segmentos siguientes seleccionados');
define('LNG_SubscribersShowFilteringOptionsOneListExplain', 'Contactos específicos de tu lista de contactos');
define('LNG_SubscribersDoNotShowFilteringOptionsOneListExplain', 'Todos los contactos de tu lista de contactos');
define('LNG_SubscribersExportShowFilteringOptionsExplain', 'Exportar contactos específicos de la la(s) lista(s) seleccionada(s)');
define('LNG_SubscribersExportDoNotShowFilteringOptionsExplain', 'Exportar todos los contactos de la(s) lista(s) seleccionada(s)');
define('LNG_SubscribersExportShowFilteringOptionsOneListExplain', 'Exportar contactos específicos de tu lista de contactos');
define('LNG_SubscribersExportDoNotShowFilteringOptionsOneListExplain', 'Exportar todos los contactos de mi lista de contactos');
define('LNG_Subscribers_Add_Step2', 'Añadir contacto para %s');
define('LNG_HLP_ImportFileFromServer', htmlentities('Sube un archivo a tu directorio de "admin/importación" para verlo listado aquí. Generalmente subirías un archivo a tu servidor antes de subirlo directamente usando el método "Subir archivo..." si se trata de una importación larga conteniendo miles de contactos.'));
define('LNG_HLP_ExportFileTypeCSV', 'Escoge esta opción para exportar tus contactos en un archivo CSV (comma-separated value). Este tipo de archivo puede ser abierto por la mayoría de programas de hojas de cálculo, incluido Microsoft Excel.');
define('LNG_HLP_ExportFileTypeXML', 'Escoge esta opción para exportar tus contactos en un archivo de formaro XML. Algunos programas de terceros permiten trabajar con datos a través de un archivo XML, o puedes extrar tus contactos de este archivo XML usando un lenguaje de programación.');
define('LNG_Subscribers_Export_MultipleList', 'Exportar contactos de: %s listas de contactos');
define('LNG_Subscribers_Export_AnyList', 'Exportar contactos de todas las listas de contactos');
define('LNG_SubscribersShowFilteringOptionsExplainOne', 'Ver contactos específicos de tu lista de contactos');
define('LNG_SubscribersDoNotShowFilteringOptionsExplainOne', 'Ver todos los contactos de tu lista de contactos');
define('LNG_SubscribersExportShowFilteringOptionsExplainOne', 'Buscar contactos a exportar de mi lista de contactos');
define('LNG_SubscribersExportDoNotShowFilteringOptionsExplainOne', 'Exportar todos los contactos de mi lista de contactos');
define('LNG_HLP_RemoveOptions', '¿Qué quieres hacer con la lista de direcciones email?<br><br/>Escoge \\\'Eliminar de la lista\\\' para eliminarlos completamente de la lista de contactos.<br/><br/>Escoge \\\'Desuscribir\\\' para moverlos a la lista de desuscritos.');
define('LNG_ImportResults_Report_Duplicates_Intro', 'Las direcciones de email siguientes ya estaban en tu lista de contactos o múltiples veces en el archivo que has subido y no han sido importados otra vez.');
define('LNG_ImportResults_Report_Unsubscribed_Intro', 'Las direcciones de email siguientes no han podido ser importadas porque han sido desuscritas de esta lista de contactos.');
define('LNG_HLP_IncludeField', '¿Quieres incluir este campo en la exportación de tu lista de contactos? Si no, selecciona la opción \\\'Ninguno\\\'');
define('LNG_NoBannedSubscribersOnList', 'La lista de contacto \'%s\' no contiene ninguna dirección de email suprimida.');
define('LNG_Subscribers_Banned_Intro', 'Los correos electrónicos incluidos en la lista de suprisión nunca recibirán ningún correo a pesar de que sigan suscritos a la lista de contactos.');
define('LNG_Manage_Banned_Intro', 'Los correos electrónicos incluidos en la lista de suprisión nunca recibirán ningún correo a pesar de que sigan suscritos a la lista de contactos.');
define('LNG_HLP_BannedEmailsChooseList_Edit', 'Escoge la lista de la cual suprimir esta dirección de email o nombre de dominio.');
define('LNG_Subscribers_Banned_Add_Intro', 'Los correos electrónicos incluidos en la lista de suprisión nunca recibirán ningún correo a pesar de que sigan suscritos a la lista de contactos.');
define('LNG_BannedEmailsChooseList', 'Quiero suprimir contactos de');
// we duplicate it here so we can use a different helptip.
define('LNG_BannedEmailsChooseList_Edit', LNG_BannedEmailsChooseList);
define('LNG_ImportResults_Report_Banned_Intro', 'Las direcciones de email siguientes no han podido ser importadas porque están suprimidas de formar parte de esta lista de contactos.');
define('LNG_SubscriberAddFail_Banned', 'La dirección de email \'%s\' está suprimida de formar parte de esta lista de contactos.');
define('LNG_Subscribers_Remove_Intro', 'Para eliminar <em>permanentemente</em> un contacto de tu lista, empieza escogiendo la lista de la cual quieres removerlo. <u>Eliminar un contacto de tu lista no se puede deshacer</u>.');
define('LNG_ImportFile_HeaderInMailingList', '... los cuales deberían ser guardados como estos campos en la lista de contactos:');
define('LNG_Help_SubscribersManage', 'Un contacto es una persona que ha sido añadida o suscrita a tu lista de contactos. Tus contactos existentes se muestran a continuación.');
define('LNG_Subscribers_Import_Step2_Intro', 'Escoge el archivo CSV de tu ordenador haciendo clic en el botón <em>Examinar...</em> ubicado más abajo. También puedes especificar opciones avanzadas si es requerido.');
define('LNG_ImportTutorialLink', 'Aprende más sobre importar aquí.');
define('LNG_HLP_ImportConfirmedStatus', '¿Deberían los contactos importados ser marcados como confirmados? La opción confirmados suele ser usada por el proceso double-optin donde los usuarios confirman su suscripción siguiendo un enlace del email de confirmación. Si seleccionas desconfirmados puedes enviar a los contactos un email posteriormente que contenga un enlace de confirmación para asegurarse que quieran ser incluidos en tu lista de contactos.<br><br>Si tienes permiso para enviar emails a estos contactos, selecciona la opción Confirmado, de otro modo selecciona la opción Desconfirmado y envíales un email más tarde para que confirmen su suscripción.');
define('LNG_HLP_OverwriteExistingSubscriber', 'Si el contacto ya existe en la lista de contactos actual con la misma dirección de email, y seleccionas esta opción, sus detalles actuales serán sobreescritos con los detalles de tu archivo de importación. Por ejemplo, si el contacto tiene un campo de \\\'Número de teléfono\\\' y ha cambiado en tu CSV, seleccionando esta opción el número de teléfono será actualizado con los nuevos detalles del archivo CSV.<br><br>Si no estás seguro, deja esta opción deseleccionada.');
define('LNG_HLP_IncludeAutoresponder', 'Si han sido creadas autorespuestas para esta lista de contactos, entonces seleccionando esta opción empezaría el envío de las autorespuestas a estos contactos, de otro modo, estos contactos nunca recibirán ninguna de tus autorespuestas.<br><br>Si no estás seguro, deja esta opción deseleccionada.');
define('LNG_EnterValidDate', 'Por favor escoge una fecha válida para el campo personalizado \'%s\'');
define('LNG_Subscribers_AdvancedSearch', 'Buscar contactos');
define('LNG_Subscribers_SimpleSearch_Title', 'Buscar correos electrónicos en esta lista de mails.');
define('LNG_Subscribers_View', 'Ver contacto');
define('LNG_Subscribers_View_Intro', 'Los detalles del contacto que has seleccionado son mostrados a continuación. Haz clic en <em>Editar contacto</em> para hacer cambios o <em>Eliminar contacto</em> para eliminar el contacto de tu lista.');
define('LNG_Subscribers_View_Button_Edit', 'Editar contacto');
define('LNG_Subscribers_View_Button_Delete', 'Eliminar contacto');
define('LNG_SubscriberDoesntExist_View', 'El contacto que intentas ver no existe. Por favor vuelve a intentarlo.');
define('LNG_SubscriberDoesntExist_Edit', 'El contacto que intentas editar no existe. Por favor vuelve a intentarlo.');
define('LNG_BannedSubscriberDoesntExist', 'El email suprimido que intentas editar no existe. Por favor vuelve a intentarlo.');
define('LNG_SubscriberSegmentDetails', 'Selecciona segmento(s)');
define('LNG_SubscriberFilterBySegments', LNG_Segments);
define('LNG_HLP_SubscriberFilterBySegments', '¿Los contactos de qué segmentos te gustaría ver? Escoge uno o más simplemente seleccionando la casilla.');
define('LNG_SubscriberViewPicker_All', 'Ver todo');
define('LNG_SubscriberViewPicker_Search', 'Buscar');
define('LNG_DeleteSelectedContacts', 'Eliminar contacto(s) seleccionado(s)');
define('LNG_RemoveUnsubscribe', 'Marcarlos como desuscritos en mi lista');
define('LNG_RemoveDelete', 'Eliminarlos permanentemente de mi lista');
define('LNG_RemoveViaTextbox', 'Quiero escribir las direcciones de email de los contactos en una caja de texto');
define('LNG_RemoveViaFile', 'Quiero subir un arhivo que contiene las direcciones de email de los contactos');
define('LNG_RemoveConfirmDelete', '\u00BFSeguro que quieres eliminar permanentemente los contactos que has seleccionado de tu lista? Esta acci\u00F3n no se puede deshacer.');
define('LNG_ShowSupressionsFor', 'Mostrar emails suprimidos para');
define('LNG_Banned_Choose_Action', 'Por favor escoge cómo quieres añadir emails suprimidos/dominios.');
define('LNG_Subscriber_Ban_Deleted_Many', '%s direcciones de email han sido eliminadas de la lista \'%s\'.');
define('LNG_Subscribers_Add_Button', 'Añadir contacto...');
define('LNG_SubscribersEditorCustomfieldHeader', 'Detalles campos personalizados');
define('LNG_SubscriberQuickSearch_Description', 'Buscar por correo electr\u00F3nico...');
define('LNG_SubscriberQuickSearch_ClearSearch', 'Despejar resultados de búsqueda');



/**
 * 5.5.0
 */
define('LNG_EventAdd', 'Log&nbsp;Event');
define('LNG_EventAddTitle', 'Log an Event');
define('LNG_EventEditTitle', 'Edit an Event');
define('LNG_ChooseAnAction', 'Choose an Action');
define('LNG_Date', 'Date');
define('LNG_Notes', 'Notes');
define('LNG_EventType', 'Event&nbsp;Type');
define('LNG_SelectAnEventType', 'Please select an event type.');
define('LNG_Add_Event', 'Add Event');
define('LNG_ConfirmEventDelete', 'Are you sure you want to delete this event?');
define('LNG_EventSpecifyDate', 'Could not parse date, specify the date in dd/mm/yyyy format.');
define('LNG_EventSpecifyTime', 'Could not parse time, specify the time in hh:nn am/pm format.');
define('LNG_ToggleEvents', 'Click here to toggle event logs for this contact');
define('LNG_EnterEventSubject', 'Please enter a subject.');
define('LNG_SubscriberEvents', 'Event Log');
define('LNG_SubscriberEvents_Intro', 'The event log for this contact is shown below.');
define('LNG_SubscriberEvents_Intro_AddEvent', ' Click <em>Log Event</em> to log a new event.');
define('LNG_ConfirmMultipleEventDelete', 'Are you sure you want to delete the selected events?');
define('LNG_SubscriberEventsEmpty', 'There are no events logged for this contact. Click the button below to add one.');
define('LNG_CreatedBy', 'Created By');
define('LNG_LastUpdated', 'Last Updated');
define('LNG_LogEvent', 'Log Event...');
define('LNG_SelectAnEvent', 'Please select an event first.');
define('LNG_AddtoGoogleCalendar', 'Click here to add a follow up reminder to your Google calendar');
define('LNG_FollowUp', 'Follow Up');
define('LNG_GoogleCalendarDescription', LNG_FollowUp);
define('LNG_GoogleCalendarCaption', 'Add to Google Calendar');
define('LNG_Where', 'Where');
define('LNG_What', 'What');
define('LNG_When', 'When');
define('LNG_AllDay', 'All Day');
define('LNG_to', 'to');
define('LNG_Description', 'Description');
define('LNG_GoogleCalendarEnterDescription', 'Please enter a description for this calendar event.');
define('LNG_GoogleCalendarException', 'Unable to save event. Please ensure the date and time are formatted correctly.');
define('LNG_GoogleCalendarAuth', 'Your username and password were rejected. Please double check these settings.');
define('LNG_GoogleCalendarIntro', 'Fill out the form below to add an event to your calendar.');
define('LNG_GoogleCalendarNotEnabled', 'To add an event to Google Calendar you must enter your login details in your Google Calendar Settings.');
define('LNG_AddToGoogleCalendar', 'Add to my Google Calendar');
define('LNG_GoogleCalendarUnabletoSave', 'Unable to save Google Calendar event. An error occurred: %s');



/**
 * 5.7.1
 */
define('LNG_RequireFieldNotLinked', 'The following required custom fields are not linked or not available: <strong>%s</strong>. We cannot proceed until all the required custom fields are linked.');



/*
 * 6.0.2
 */
define('LNG_ShowFilteringOptionsLabel', 'Filter selected contacts?');
define('LNG_ShowFilteringOptionsExplanation', 'Yes, I would like to filter the contacts from the selected list(s).');