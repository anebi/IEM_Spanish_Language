<?php
/**
* Segment language variables.
* This file is used by "Segment" pages.
*
* @see GetLang
*
* @version     $Id: language.php,v 1.153 2008/02/22 04:45:13 chris Exp $
* @author Hendri <hendri@interspire.com>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Please backup before you start.
*/
define('LNG_SegmentName', 'Nombre de segmento');
define('LNG_HLP_SegmentName', 'Introduze un nombre para este segmento, como \\\'Oportunidades de Paris\\\' o \\\'Clientes suscritos en Marzo\\\'. Este nombre es usado sólo para tu referéncia y nunca es visible para los contactos.');

define('LNG_SegmentManage', 'Ver segmentos');
define('LNG_Help_SegmentManage', 'Un segmento es una vista filtrada de una o más de tus listas de contactos. Puedes ver los contactos por segmentos e incluso enviar campañzas a un segmento específico.');
define('LNG_SegmentManageCreateNew', 'Crear un segmento...');
define('LNG_SegmentManageCreateNew_Title', 'Crear un nuevo segmento');

define('LNG_SegmentManageNoSegment', 'No hay segmentos disponibles. %s');
define('LNG_SegmentManageSegmentCreate', '&nbsp;Haz clic en el botón "' . LNG_SegmentManageCreateNew . '" de abajo para crear uno.');
define('LNG_SegmentManageSegmentAssign', '&nbsp;Por favor contacta con tu administrador de sistema para que te asigne un segmento.');

define('LNG_SegmentDelete', 'Eliminar el/los segmento(s) seleccionado(s)');
define('LNG_SegmentAlertChooseSegment', 'Por favor antes escoge uno o más segmentos.');

define('LNG_SegmentManageConfirmDeleteOne', '\u00BFEst\u00E1s seguro de querer eliminar el segmento seleccionado?');
define('LNG_SegmentManageConfirmDeleteMany', '\u00BFEst\u00E1s seguro de querer eliminar los segmentos seleccionados?');

define('LNG_SegmentManageDeleteSuccessOne', 'El segmento seleccionado ha sido eliminado.');
define('LNG_SegmentManageDeleteSuccessMany', 'Los segmentos seleccionados han sido eliminados.');

define('LNG_SegmentManageDeleteErrorNoPrivilege', 'No dispones de permisos para eliminar el segmento seleccionado.');
define('LNG_SegmentManageDeleteErrorOne', 'Un error ocurió mientras se intentaba eliminar el segmento seleccionado. Por favor vuelve a intentarlo.');
define('LNG_SegmentManageDeleteErrorMany', 'Un error ocurió mientras se intentaban eliminar los segmentos seleccionados. Por favor vuelve a intentarlo.');

define('LNG_SegmentManageCopySuccess', 'El segmento seleccionado ha sido copiado con éxito');

define('LNG_SegmentManageCopyError', 'Un error con la base de datos ocurió mientras se intentaba copiar el segmento seleccionado. Por favor vuelve a intentarlo.');

define('LNG_SegmentManageCopyErrorNoPrivilege', 'El segmento seleccionado no puede ser copiado por que no tienes acceso a todas las listas contenidas en este segmento.');
define('LNG_SegmentManageSaveErrorNoPrivilege', 'Tus cambios no pueden ser guardados por que ahora este segmento contiene una o más listas a las cuales no tienes acceso.');

define('LNG_SegmentManageEditWarningPrivilage', 'Desde tu último acceso a este segmento un filtro ha sido añadido para una lista a la cual no tienes acceso, en consecuéncia no puedes hacer ningún cambio.');

define('LNG_SegmentFormRuleDescription', 'Filtrar contactos cuyo/que han');

define('LNG_SegmentFormTitleEdit', 'Editar un segmento');
define('LNG_SegmentFormTitleCreate', 'Crear un segmento');
define('LNG_SegmentFormTitleCreateIntro', 'Un segmento es una vista filtrada de una o más de tus listas de contactos. Por ejemplo podrías crear un segmento para ver los contactos de Nueva York de todas tus listas.');
define('LNG_SegmentFormTitleEditIntro', LNG_SegmentFormTitleCreateIntro);

define('LNG_SegmentFormAlertSpecifySegmentName', 'Por favor introduze un nombre para este segmento.');
define('LNG_SegmentFormAlertAtLeastOneRule', 'Por favor crea al menos un filtro para este segmento.');
define('LNG_SegmentFormAlertAtLeastOneList', 'Por favor escoge al menos una lista de la cual segmentar los contactos.');

define('LNG_SegmentFormAlertInitializingValues', 'Error al inicializar valores');
define('LNG_SegmentFormAlertCancel', '\u00BFEst\u00E1s seguro que quieres cancelar?');
define('LNG_SegmentFormAlertErrorRequestingData', 'No es posible solicitar los datos del servidor');

define('LNG_SegmentFormErrorCannotLoadRecord', 'Un error ocurió mientras se intentaba mostrar el segmento seleccionado. Por favor vuelve a intentarlo.');
define('LNG_SegmentFormSaveFailed', 'Un error ocurió mientras se intentaba guardar el segmento seleccionado. Por favor vuelve a intentarlo.');
define('LNG_SegmentFormSaveSuccess', 'El segmento seleccionado ha sido actualizado con éxito.');

define('LNG_SegmentFormHeaderDetails', 'Detalles del segmento');
define('LNG_SegmentFormHeaderRules', 'Reglas del segmento');

define('LNG_SegmentFormFieldMailingList', 'Segmentar contactos de');
define('LNG_HLP_SegmentFormFieldMailingList', '¿Qué lista(s) de contacto(s) quieres segmentar? Puedes seleccionar múltiples listas si es requerido, simplemente clicando las que quieras incluir.');
define('LNG_SegmentFormFieldMatchType', 'Tipo de concordáncia');
define('LNG_HLP_SegmentFormFieldMatchType', '¿Cómo quieres que sean aplicadas las reglas del segmento creadas abajo? Escoge \\\'Concordar con todas las reglas\\\' para ver sólo contactos que concuerden con todas las reglas que hayas creado. Escoge \\\'Concordar con cualquier regla\\\' para ver contactos que concuerden con una o más reglas.');
define('LNG_SegmentFormMatchAllRule', 'Concordar con todas las reglas (condición Y)');
define('LNG_SegmentFormMatchAnyRule', 'Concordar con cualquier regla (condición O)');

define('LNG_SegmentFormOperator_date_equalto', 'es el');
define('LNG_SegmentFormOperator_date_notequalto', 'no es el');
define('LNG_SegmentFormOperator_date_greaterthan', 'es despu\u00E9s del');
define('LNG_SegmentFormOperator_date_lessthan', 'es antes del');
define('LNG_SegmentFormOperator_date_between', 'es entre el');

define('LNG_SegmentFormOperator_number_equalto', 'es');
define('LNG_SegmentFormOperator_number_notequalto', 'no es');
define('LNG_SegmentFormOperator_number_greaterthan', 'es superior a');
define('LNG_SegmentFormOperator_number_lessthan', 'es inferior a');
define('LNG_SegmentFormOperator_number_between', 'es entre');

define('LNG_SegmentFormOperator_multiple_equalto', 'incluye');
define('LNG_SegmentFormOperator_multiple_notequalto', 'no incluye');

define('LNG_SegmentFormOperator_link_equalto', 'han hecho clic en');
define('LNG_SegmentFormOperator_link_notequalto', 'no han hecho clic en');

define('LNG_SegmentFormOperator_campaign_equalto', 'han abierto');
define('LNG_SegmentFormOperator_campaign_notequalto', 'no han abierto');

define('LNG_SegmentFormCheckbox_SelectInstruction', 'Haz clic para seleccionar');
define('LNG_SegmentFormCheckbox_SelectTooltip', 'Click here to change/add value');
define('LNG_SegmentFormCheckbox_SelectWindowTitle', 'Select value(s)');

define('LNG_SegmentDoesntExist', 'El segmento que intentas editar no existe. Por favor intenta lo de nuevo.');


/**
*****************************
* Changed/Added in IEM 5.0.1
*****************************
*/
define('LNG_SegmentFormOperator_text_equalto', 'es');
define('LNG_SegmentFormOperator_text_notequalto', 'no es');
define('LNG_SegmentFormOperator_text_like', 'contiene');
define('LNG_SegmentFormOperator_text_notlike', 'no contiene');

define('LNG_SegmentFormOperator_dropdown_equalto', 'es');
define('LNG_SegmentFormOperator_dropdown_notequalto', 'no es');

/**
*****************************
* Changed/Added in IEM 5.0.2
*****************************
*/
define('LNG_SegmentFormOperator_common_customfields_isempty', 'es vacío');
define('LNG_SegmentFormOperator_common_customfields_isnotempty', 'no es vacío');

/**
*****************************
* Changed/Added in IEM 5.7.1
*****************************
*/
define('LNG_SegmentCustomField_Basic', 'Basic Fields');
define('LNG_SegmentCustomField_CustomField', 'Custom Fields');
