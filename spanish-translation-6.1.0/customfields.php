<?php
/**
* Language file variables for custom fields. This includes creating, editing, deleting, updating, managing etc.
*
* @see GetLang
*
* @version     $Id: customfields.php,v 1.25 2008/02/18 06:33:38 chris Exp $
* @author Chris <chris@interspire.com>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the customfields area... Please backup before you start!
*/
define('LNG_CustomFieldsName', 'Campo personalizado');
define('LNG_CustomFieldsType', 'Tipo');

define('LNG_CustomFieldDeleteFail_One', '1 campo personalizado no ha sido eliminado con éxito. Por favor vuelve a intentarlo.');
define('LNG_CustomFieldDeleteFail_Many', '%s campos personalizados no han sido eliminados con éxito. Por favor vuelve a intentarlo.');

define('LNG_CustomField_Edit_Disabled', 'No puedes editar este campo personalizado por que no tienes acceso.');

define('LNG_EditCustomField', 'Editar campo personalizado');
define('LNG_EditCustomFieldIntro', 'Completa el formulario siguiente para actualizar el campo personalizado seleccionado.');
define('LNG_EditCustomField_CancelPrompt', '\u00BFSeguro que quieres cancelar la edici\u00F3n de este campo personalizado?');

define('LNG_CustomFieldCreated', 'Campo personalizado creado con éxito');
define('LNG_UnableToCreateCustomField', 'No ha sido posible crar el campo perzonalizado');

define('LNG_CustomFieldUpdated', 'El campo personalizado seleccionado ha sido actualizado.');

define('LNG_UnableToUpdateCustomField', 'No ha sido posible actualizar el campo personalizado');

define('LNG_CreateCustomField_CancelPrompt', '\u00BFSeguro que quieres cancelar la craci\u00F3n de este campo personalizado?');

define('LNG_CreateCustomFieldCancelButton', 'Cancelar');
define('LNG_CreateCustomFieldHeading', 'Crear a continuación un nuevo campo personalizado');

define('LNG_CustomFieldName', 'Nombre del campo personalizado');
define('LNG_HLP_CustomFieldName', 'Introduce un nombre para este campo personalizado. El nombre aparecerá en tu formulario de suscripción al boletín. Por ejemplo, \\\'Apellidos\\\', \\\'Género\\\'.');

define('LNG_CustomFieldType', 'Tipo de campo personalizado');

define('LNG_EnterCustomFieldName', 'Por favor introduce un nombre para tu campo personalizado.');
define('LNG_CustomFieldDetails', 'Detalles del campo personalizado');

define('LNG_CustomFieldType_text', 'Campo de texto');
define('LNG_CustomFieldType_date', 'Campo fecha');
define('LNG_CustomFieldType_multicheckbox', 'Casillas de selección múltiple');
define('LNG_CustomFieldType_dropdown', 'Lista de selección');

define('LNG_EditCustomField_Step3', 'Editar campo personalizado');

define('LNG_FieldLength', 'Longitud del campo');
define('LNG_HLP_FieldLength', 'La longitud del campo de texto tal como aparecerá en tus formularios. Deja esta campo en blanco si no estás seguro.');

define('LNG_DefaultValue', 'Valor por defecto');
define('LNG_ApplyDefault', 'Apply Default Value to Existing?');
define('LNG_ApplyDefaultToExistingExplain', 'Yes, apply the default value to existing contacts in the contact list(s).');

define('LNG_MaxLength', 'Longitud máxima');

define('LNG_MinLength', 'Longitud mínima');

define('LNG_Instructions', 'Texto de instrucción');
define('LNG_HLP_Instructions', 'Introduce las instrucciones que el usuario verá cuando tenga que seleccionar una opción. Normalmente son instrucciones del tipo \\\'Por favor selecciona una opción\\\'.');

define('LNG_Dropdown_Value', 'Texto mostrado para la opción');

define('LNG_Checkbox_Value', 'Texto mostrado para la caja de selección');

define('LNG_Radiobutton_Value', 'Texto mostrado para radio');

define('LNG_AddMore', 'Haz clic aquí para añadir otro valor');

define('LNG_DateDisplayOrder', 'Orden de la fecha mostrada');
define('LNG_HLP_DateDisplayOrder', '¿En qué orden quieres que los valores de fecha aparezcan? Introduze día, mes o año en cada uno de los tres campos.');
define('LNG_DateDisplayOrderFirst', 'Orden de aparicón (Primero)');
define('LNG_DateDisplayOrderSecond', 'Orden de aparicón (Segundo)');
define('LNG_DateDisplayOrderThird', 'Orden de aparicón (Tercero)');
define('LNG_DateDisplayStartYear', 'Año de comienzo');
define('LNG_HLP_DateDisplayStartYear', 'Cuando se muestra la lista de selección del año, ¿qué año debería ser el primero de la lista?');
define('LNG_DateDisplayEndYear', 'Año final');
define('LNG_HLP_DateDisplayEndYear', 'Cuando se muestra la lista de selección del año, ¿qué año debería ser el último de la lista?<br/>Si 0 es introducido, este será el año actual (' . date('Y') . ') y cambiará automáticamente.');

define('LNG_DeleteCustomFieldButton', 'Eliminar seleccionados');
define('LNG_ChooseFieldsToDelete', 'Por favor escoge un campo personalizado antes.');
define('LNG_DeleteCustomFieldPrompt', '\u00BFSeguro que quieres eliminar este campo personalizado?');
define('LNG_CannotDeleteCustomField_NoAccess', 'No tienes permiso para eliminar el campo \'%s\'.');
define('LNG_CustomField_Delete_Disabled', 'No tienes permiso para eliminar este campo.');

define('LNG_DropdownInstructions', '-- Por favor escoge una opcion --');

define('LNG_TextAreaRows', 'Número de filas');
define('LNG_HLP_TextAreaRows', 'El número de filas a mostrar en el campo de texto multilínea. Esto es cuan alto será el campo de texto multilínea.');

define('LNG_TextAreaColumns', 'Número de columnas');
define('LNG_HLP_TextAreaColumns', 'El número de columnas a mostrar en el campo de texto multilínea. Esto es cuan ancho será el campo de texto multilínea.');

/**
**************************
* Changed/added in NX 1.3
**************************
*/
define('LNG_CustomFieldsManage', 'Ver campos personalizados');
define('LNG_NoCustomFields', 'No se han creado campos personalizados. Haz clic en el botón <em>Crear campo pers. ...</em> siguiente para crear uno.');
define('LNG_CreateCustomFieldButton', 'Crear campo pers. ...');

define('LNG_CreateCustomField', 'Crear un campo personalizado');

define('LNG_CustomFieldTypeHelp', 'Cada campo personalizado tiene un tipo de datos particular. Por ejemplo, el campo personalizado \\\'Nombre\\\' será simplemente una caja de texto. Por otro lado, el campo \\\'Género\\\' serán botones radio, ya que los usuarios serán capaces de seleccionar entre \\\'Masculino\\\' o \\\'Femenino\\\'. Aquí necesitarás seleccionar el \\\'Tipo de campo personalizado\\\' que sea relevante para tu \\\'Campo personalizado\\\'.<br><br>Ejemplos: <br><br><table border=0 cellpadding=\\\'2\\\' cellspacing=\\\'0\\\' style=\\\'width:220px\\\'><tr><td>Tipo</td><td>Ejemplo</td><tr><td style=\\\'width: 50%\\\'>Texto:</td><td style=\\\'width:50%\\\'><input type=text style=\\\'font-family: tahoma; font-size: 10px; width:100px;\\\' value=\\\'Mi nombre\\\'></td></tr><tr><td>Texto multilínea:</td><td><textarea style=\\\'font-family: tahoma; font-size: 10px; width:100px;\\\' rows=\\\'2\\\'>Mi dirección</textarea></td></tr><tr><td>Sólo números:</td><td><input type text style=\\\'font-family: tahoma; font-size: 10px; width:100px;\\\' value=\\\'1800555777\\\'></td></tr><tr><td>Lista de selección:</td><td><select style=\\\'font-family: tahoma; font-size: 10px; width:100px;\\\'><option>Selecciona país</option></select></td></tr><tr><td>Cajas de selección:</td><td style=\\\'font-family: tahoma; font-size: 10px;\\\'><input type=\\\'checkbox\\\'>Rojo <input type=\\\'checkbox\\\'>Azul</td></tr><tr><td>Botones radio:</td><td style=\\\'font-family: tahoma; font-size: 10px;\\\'><input type=\\\'radio\\\'>Masc. <input type=\\\'radio\\\'>Femen.</td></tr><tr><td>Campo fecha:</td><td style=\\\'font-family: tahoma; font-size:10px;\\\' nowrap><select style=\\\'font-family: tahoma; font-size:10px; width:35px\\\'><option>31</option></select><select style=\\\'font-family: tahoma; font-size:10px; width:45px\\\'><option>Julio</option></select><select style=\\\'font-family: tahoma; font-size:10px; width:45px\\\'><option>2010</option></select></td></tr></table>');

define('LNG_CustomFieldRequired', '¿Es este campo requerido?');
define('LNG_CustomFieldRequiredExplain', 'Sí, los contactos deben rellenar este campo para ser añadidos a mi lista');

define('LNG_CustomFieldType_textarea', 'Campo de texto multilínea');

define('LNG_CustomFieldType_number', 'Sólo números');
define('LNG_CustomFieldType_checkbox', 'Cajas de selección');
define('LNG_CustomFieldType_radiobutton', 'Botones radio');

define('LNG_CreateCustomField_Step2', 'Crear un campo personalizado');
define('LNG_CreateCustomField_Step2_Intro', 'Rellena el siguiente formulario y entonces haz clic en <em>Siguiente &gt;&gt;</em> para continuar.');

define('LNG_CreateCustomField_Step3', 'Crear un campo personalizado');

define('LNG_HLP_MaxLength', 'Introduze la máxima longitud para el texto escrito en este campo personalizado. Por ejemplo, introduciendo 2 limitará la introducción a tan sólo 2 carácteres. Esto es útil si estas recopilando información como códigos postales donde quieres limitar la introducción a un máximo de 5 carácteres. Este campo es opcional, así que si estás inseguro, dejalo en blanco.');

define('LNG_HLP_MinLength', 'Introduze la mínima longitud para el texto escrito en este campo personalizado. Por ejemplo, introduciendo 2 significa que el usuario tiene que introducir como mínimo 2 carácteres. Esto es válido si te quieres asegurar que es introducida información válida. Por ejemplo, si te quieres asegurar que un nñumero de teléfono válido es introducido deberías establecer una longitud mínima de 9 carácters. Este campo es opcional, así que si estás inseguro, dejalo en blanco.');

define('LNG_Checkbox', 'Caja de selección');
define('LNG_RadioButton', 'Botón radio');


define('LNG_Value', 'Valor');
define('LNG_Display_Text', 'Texto mostrado');

define('LNG_Value_Required', 'Necesitas introducir un valor aquí para esta opción.');
define('LNG_Display_Required', 'Necesitas introducir el texto a mostrar aquí para esta opción.');

/**
**************************
* Changed/added in NX 5.0
**************************
*/
define('LNG_CustomFieldDeleteSuccess_One', '1 campo personalizado ha sido eliminado. Deberías actualizar tus formularios web para asegurarte que no usan el campo personalizado que has eliminado.');

define('LNG_CustomFieldDeleteSuccess_Many', '%s campos personalizados han sido eliminados. Deberías actualizar tus formularios web para asegurarte que no usan los campos personalizados que has eliminado.');

define('LNG_Help_CustomFieldsManage', 'Los campos personalizados te permiten recoger y almacenar más información que simplemente la dirección email del contacto, como su nombre, país, etc.');
define('LNG_CreateCustomFieldIntro', 'Para crear un campo personalizado, empieza dandole un nombre y escogiendo el tipo de campo que quieres crear a continuación. Haz clic en <em>Siguiente &gt;&gt;</em> para continuar. <a href="Javascript:LaunchHelp(\'810\')">Aprende sobre los campos personalizados aquí.</a>');

define('LNG_HLP_CustomFieldRequired', 'Para hacer este campo obligatorio, selecciona esta opción. Cuando los contactos son añadidos o cuando se suscriban a tu lista de contacto, serán forzados a rellenar el campo personalizado. Por ejemplo, si te quieres asegurar que todos los contactos introduzcan su \\\'Nombre\\\' entonces deberías seleccionar esta opción para tu campo personalizado \\\'Nombre\\\'. Si no estás seguro, deja esta opción deseleccionada.');

define('LNG_HLP_DefaultValue', 'El valor por defecto es el valor que será mostrado en tus formularios web y como sustituto si el contacto no rellena el campo. Por ejmeplo, si estás recopilando los nombres de los contactos, podrías poner la palabra Amigo aquí. De esta manera, si no introducen su nombre, serán referidos como \\\'Amigo\\\'. Este campo es opcional, así que si estás inseguro, déjalo en blanco.');

define('LNG_AssociateCustomField', 'Selecciona las listas de contactos');

define('LNG_CustomFieldListAssociation', 'Asociar el campo personalizado "%s" con tus listas de contactos');

define('LNG_ChooseCustomFieldLists', 'Por favor escoge una o más listas de contactos a las que asociar este campo personalizado.');

define('LNG_CreateCustomField_Step3_Intro', 'Escoge a qué listas de contactos te gustaría asociar este campo personalizado y entonces haz clic en el botón Guardar de abajo.');
define('LNG_EditCustomField_Step3_Intro', LNG_CreateCustomField_Step3_Intro);

define('LNG_CustomFields_NoLists', 'Necesitas acceso a una lista de contactos antes de poder crear campos personalizados. %s');

define('LNG_WhatAreCustomFields', 'Aprende sobre los campos personalizados aquí.');

define('LNG_CustomFieldDoesntExist', 'El campo personalizado que intentas editar no existe. Por favor vuelve a intentarlo.');
define('LNG_CustomFieldRequired1', 'Obligatorio');
define('LNG_SelectCustomFieldType', 'Por favor escoge el tipo de campo personalizado.');

define('LNG_CustomFieldDesc_text', 'Permite a los usuarios introducir cualquier combinación de letras y números.');
define('LNG_CustomFieldDesc_textarea', 'Permite a los usuarios introducir texto en líneas separadas');
define('LNG_CustomFieldDesc_number', 'Permite a los usuarios introducir cualquier número, el rango puede ser restringido');
define('LNG_CustomFieldDesc_dropdown', 'Permite a los usuarios escoger un valor de una lista que tu definas');
define('LNG_CustomFieldDesc_checkbox', 'Permite a los usuarios seleccionar múltiples valores verdadero/falso usando cajas de selección');
define('LNG_CustomFieldDesc_radiobutton', 'Permite a los usuarios escoger sólo un valor de una lista de opciones');
define('LNG_CustomFieldDesc_date', 'Permite a los usuarios escoger una fecha, opcionalmente de un cierto rango');

define('LNG_CustomField_Values', 'Listado de valores');
define('LNG_CustomField_Dropdown_Hint', 'Introduze la lista de valores para la lista de selección. Cada valor debe ser separado por una nueva línea.');
define('LNG_CustomField_Checkbox_Hint', 'Introduze la lista de valores para las cajas de selección. Cada valor debe ser separado por una nueva línea.');
define('LNG_CustomField_RadioButton_Hint', 'Introduze la lista de valores para los botones radio. Cada valor debe ser separado por una nueva línea.');
define('LNG_CustomFields_NoMultiValues', 'Por favor introduze al menos un valor.');
define('LNG_CustomField_NoDefaultValue', 'Por favor introduze algún texto de instrucción.');
define('LNG_CustomField_NoFieldName', 'Por favor introduze un nombre para este campo personalizado.');
define('LNG_CustomField_Checkbox_Help', 'Cada valor que introduzcas (uno por línea) tendrá su propia caja de selección. Por ejemplo si escribes <em>Sí&lt;ENTER>No&lt;ENTER>Quizás</em> entonces se crearán 3 cajas de selección separadas.');
define('LNG_CustomFields_Sort_Alpha', 'Ordenar valores alfabeticamente');

define('LNG_DropDown', 'Lista de selección');

/**
**************************
* Changed/added in 5.5.7
**************************
*/
define('LNG_Checkbox_Key', 'Valor de caja de selección');
define('LNG_HLP_Checkbox_Value', 'Introduce el texto a mostrar para esta caja de selección. Esto es lo que el contacto ve cuando escoge esta opción. Ej. Masculino');
define('LNG_HLP_Checkbox_Key', 'Introduze un valor para esta caja de selección. Este es el valor asociado a la opción seleccionada. Normalmente este es una versión corta del texto mostrado, como M para Masculino');

define('LNG_Dropdown_Key', 'Valor de la opción');
define('LNG_HLP_Dropdown_Value', 'Introduce el texto a mostrar para esta opción. Esto es lo que el contacto ve cuando escoge esta opción. Ej. Masculino');
define('LNG_HLP_Dropdown_Key', "This value is derived automatically from the picklist display text.<br/><br/>This is the value that will be stored in the database.<br/><br/>When you edit your picklist display value, THIS KEY VALUE will NOT be CHANGED.");

define('LNG_Radiobutton_Key', 'Valor de radio');
define('LNG_HLP_Radiobutton_Value', 'Introduce el texto a mostrar para este boton radio. Esto es lo que el contacto ve cuando escoge esta opción. Ej. Masculino');
define('LNG_HLP_Radiobutton_Key', 'Introduze un valor para este botón radio. Este es el valor asociado a la opción seleccionada. Normalmente este es una versión corta del texto mostrado, como M para Masculino');

