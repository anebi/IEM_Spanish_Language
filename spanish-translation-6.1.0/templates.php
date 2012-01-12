<?php
/**
* Language file variables for the templates area.
*
* @see GetLang
*
* @version     $Id: templates.php,v 1.28 2008/01/22 03:18:37 scott Exp $
* @author Chris <chris@interspire.com>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the template area... Please backup before you start!
*/
define('LNG_CreateTemplateCancelButton', '\u00BFSeguro de quieres cancelar la creaci\u00F3n de la nueva plantilla?');
define('LNG_CreateTemplateHeading', 'Detalles de la nueva plantilla');
define('LNG_EditTemplate', 'Actualizar plantilla');
define('LNG_EditTemplateIntro', 'Complete el formulario siguiente para actualizar la plantilla.');
define('LNG_EditTemplateCancelButton', '\u00BFSeguro de quieres cancelar la actualizaci\u00F3n de esta plantilla?');
define('LNG_EditTemplateHeading', 'Template Details');
define('LNG_EditTemplateIntro_Step2', 'Por favor actualiza el contenido seguidamente. Haz clic en "Guardar" cuando hayas terminado.');
define('LNG_NoTemplatesBuiltIn', 'No existen plantillas incorporadas. Por favor contacta con tu administrador.');
define('LNG_EnterTemplateName', 'Por favor escribe un nombre para esta plantilla');
define('LNG_TemplateName', 'Nombre plantilla');
define('LNG_TemplateNameIsNotValid', 'Nombre de plantilla no válido');
define('LNG_UnableToCreateTemplate', 'Ha ocurrido un error intentando crear la nueva plantilla.');
define('LNG_TemplateCreated', 'Tu nueva plantilla ha sido creada con éxito');
define('LNG_DeleteTemplatePrompt', '\u00BFSeguro de quieres eliminar esta plantilla?');
define('LNG_HLP_TemplateName', 'Escoge un nombre para esta plantilla. Este nombre sólo se verá en el panel de control y no será usado en ninguno de tus emails.');
define('LNG_UnableToUpdateTemplate', 'No se ha podido actualizar la plantilla');
define('LNG_TemplateUpdated', 'Plantilla actualizada con éxito');
define('LNG_TemplateDeleteFail', 'Unable to delete the template');
define('LNG_TemplateDeleteSuccess', 'Template deleted successfully');
define('LNG_NoTemplates', 'No templates are available.%s');
define('LNG_NoTemplates_HasAccess', ' Click the "Create Template" button below to create one.');
define('LNG_TemplateFormat', 'Formato plantilla');
define('LNG_HLP_TemplateFormat', '¿En qué formato te gustaría crear esta plantilla? Escoge HTLM, Texto, o HTML y Texto.');
define('LNG_TemplateContent', 'Introduze el contenido de tu plantilla a continuación');
define('LNG_TemplateCopySuccess', 'Template was copied successfully.');
define('LNG_TemplateCopyFail', 'Template was not copied successfully.');
define('LNG_Template_Title_Enable', 'Enable Template');
define('LNG_Template_Title_Disable', 'Disable Template');
define('LNG_Template_Title_Global_Enable', 'Make Template Global');
define('LNG_Template_Title_Global_Disable', 'Make Template Non Global');
define('LNG_Template_DeactivatedSuccessfully', 'Plantilla desactivada con éxito.');
define('LNG_Template_ActivatedSuccessfully', 'Plantilla activada con éxito.');
define('LNG_Template_Global_DeactivatedSuccessfully', 'Template deactivated successfully.');
define('LNG_Template_Global_ActivatedSuccessfully', 'Template activated successfully.');
define('LNG_TemplateCannotBeInactiveAndGlobal', 'A template cannot be inactive and global at the same time.');
define('LNG_TemplateIsActive', 'Activar plantilla');
define('LNG_TemplateIsActiveExplain', 'Sí, esta plantilla está activa');
define('LNG_HLP_TemplateIsActive', '¿Debería esta plantilla ser marcada como activa? Plantillas inactivas no pueden ser usadas para crear email campañzas o autorespuestas.');
define('LNG_TemplateIsGlobal', 'Plantilla global');
define('LNG_TemplateIsGlobalExplain', 'Sí, esta plantilla es global');
define('LNG_HLP_TemplateIsGlobal', '¿Debería esta plantilla ser marcada como global? De ser así, todos los usuarios serán capazes de ver la cuando creen una email campaña o autorespuesta.');
define('LNG_UnableToLoadTemplate', 'Unable to load template. Please try again.');
define('LNG_UnableToLoadTemplateFromServer', 'Unable to locate template on server. Please try again.');
define('LNG_TemplateFile', 'Template File');
define('LNG_HLP_TemplateFile', 'Upload a html file from your computer to use as your template');
define('LNG_UploadTemplate', 'Upload');
define('LNG_TemplateFileEmptyAlert', 'Please choose a file from your computer before trying to upload it.');
define('LNG_TemplateFileEmpty', 'Please choose a file from your computer before trying to upload it.');
define('LNG_TemplateURL', 'Template URL');
define('LNG_HLP_TemplateURL', 'Import a template from a url');
define('LNG_ImportTemplate', 'Import');
define('LNG_TemplateURLEmptyAlert', 'Please enter a url to import the template from');
define('LNG_TemplateURLEmpty', 'Please enter a url to import the template from');
define('LNG_Template_Edit_Disabled', 'You do not have access to edit this template');
define('LNG_Template_Delete_Disabled', 'You do not have access to delete this template');
define('LNG_Template_Copy_Disabled', 'You do not have access to copy this template');
define('LNG_ChooseTemplates', 'Please choose one or more templates first.');
define('LNG_ApproveTemplates', 'Activate');
define('LNG_DisapproveTemplates', 'Deactivate');
define('LNG_GlobalTemplates', 'Make Global');
define('LNG_DisableGlobalTemplates', 'Remove From Global');
define('LNG_NoTemplatesSelected', 'No templates have been selected. Please try again.');
define('LNG_Template_NotDeleted', '1 template not deleted. Please try again.');
define('LNG_Templates_NotDeleted', '%s templates not deleted. Please try again.');
define('LNG_Template_Deleted', '1 template deleted successfully.');
define('LNG_Templates_Deleted', '%s templates deleted successfully.');
define('LNG_Template_NotApproved', 'Unable to approve the selected template');
define('LNG_Templates_NotApproved', 'Unable to approve the %s selected templates');
define('LNG_Template_Approved', '1 template has been activated successfully');
define('LNG_Templates_Approved', '%s templates have been activated successfully');
define('LNG_Template_NotDispproved', 'Unable to disapprove the selected template');
define('LNG_Templates_NotDispproved', 'Unable to disapprove the %s selected templates');
define('LNG_Template_Disapproved', '1 template has been deactivated successfully');
define('LNG_Templates_Disapproved', '%s templates have been deactivated successfully');
define('LNG_Template_NotGlobal', 'Unable to globalise the selected template');
define('LNG_Templates_NotGlobal', 'Unable to globalise the %s selected templates');
define('LNG_Template_Global', '1 template has been globalised successfully');
define('LNG_Templates_Global', '%s templates have been globalised successfully');
define('LNG_Template_NotDisableGlobal', 'Unable to stop sharing the selected template');
define('LNG_Templates_NotDisableGlobal', 'Unable to stop sharing the %s selected templates');
define('LNG_Template_DisableGlobal', '1 template has been unshared successfully');
define('LNG_Templates_DisableGlobal', '%s templates have been unshared successfully');
define('LNG_CannotDeleteGlobalTemplate_NoAccess', 'You cannot delete template \'%s\' because you do not have access.');
define('LNG_ActivateTemplates', LNG_ApproveTemplates);
define('LNG_InactivateTemplates', LNG_DisapproveTemplates);
define('LNG_InvalidTemplateAction', 'You tried to perform an unknown operation. Please try again.');
define('LNG_DeleteTemplatePreview_Image', 'You will need to manually delete the admin/resources/user_template_previews/%s_preview.gif file.');
define('LNG_TemplateID', '<span style="color: #A1A1A1">&nbsp;- id: %s</span>');



/**
 * 1.0.7
 */
define('LNG_BuiltInTemplate_Preview_TemplatePack', '%s (%s)');
define('LNG_BuiltInTemplate_Preview_Template', '%s');



/**
 * 1.1.1
 */
define('LNG_TemplateFilesCopyFail', 'Las imágenes y/o archivos adjuntos para esta plantilla no han sido copiadas con éxito.');



/**
 * 1.3.0
 */
define('LNG_TemplatesManage', 'Ver plantillas personalizadas');
define('LNG_Help_TemplatesManage_Create', ' Para crear una nueva plantilla, haz clic en el botón "Crear plantilla personalizada" de abajo.');
define('LNG_CreateTemplate', 'Crear plantilla personalizada');
define('LNG_CreateTemplateButton', 'Crear plantilla pers...');



/**
 * 5.0.0
 */
define('LNG_Help_TemplatesManage', 'Las plantillas personalizadas pueden ser usadas como base de cualquier nueva email campaña o autorespuesta que crees. Aprende más sobre las mismas leyendo <a href="" onclick="LaunchHelp(838); return false;">este artículo</a>.');
define('LNG_CreateTemplateIntro', LNG_Help_TemplatesManage);
define('LNG_CreateTemplateIntro_Step2', LNG_Help_TemplatesManage);
define('LNG_TemplatesManageBuiltIn', 'Plantillas incorporadas');
define('LNG_Help_TemplatesManageBuiltIn', 'Todas las plantillas disponibles són mostradas a continuación. Para usar una plantilla, simplemente seleccionala cuando estés creando una email campaña.');
