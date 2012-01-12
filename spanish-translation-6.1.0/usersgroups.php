<?php

/**
 * This file contains language variables that are used in "User's Groups" page
 *
 * @package    SendStudio
 * @subpackage Language
 */

define('LNG_UsersGroups_Field_GroupName', 'Group Name');
define('LNG_UsersGroups_Field_UsersInGroup', 'Users in Group');
define('LNG_UsersGroups_Field_DateCreated', 'Date Created');
define('LNG_UsersGroups_Field_Permissions', 'Group Permissions');
define('LNG_UsersGroups_Field_Access_Lists', 'Contact Lists');
define('LNG_HLP_UsersGroups_Field_Access_Lists', 'Which contact lists will this client have access to? The permissions selected above will be applied to these lists.');
define('LNG_UsersGroups_Field_Access_Segments', 'Segment List');
define('LNG_HLP_UsersGroups_Field_Access_Segments', 'Which segments will this client have access to? The permissions selected above will be applied to these list');
define('LNG_UsersGroups_Field_Access_Templates', 'Templates');
define('LNG_HLP_UsersGroups_Field_Access_Templates', 'Which templates does this user have access to? The permissions selected above will be applied to these templates.');
define('LNG_UsersGroups_Field_Restriction_MailingList', 'Number of Contact Lists');
define('LNG_HLP_UsersGroups_Field_Restriction_MailingList', 'Tick this option to set the maximum number of contact lists this user can create.');
define('LNG_UsersGroups_Field_Restriction_EmailsPerHour', 'Emails Per Hour');
define('LNG_HLP_UsersGroups_Field_Restriction_EmailsPerHour', 'Tick this option to set the maximum number of emails this user can send per send per hour.');
define('LNG_UsersGroups_Field_Restriction_EmailsPerMonth', 'Emails Per Month');
define('LNG_HLP_UsersGroups_Field_Restriction_EmailsPerMonth', 'Tick this option to set the maximum number of emails this user can send each month.');
define('LNG_UsersGroups_Field_Restriction_TotalEmails', 'Total Number of Emails');
define('LNG_HLP_UsersGroups_Field_Restriction_TotalEmails', 'Tick this option to set the maximum number of emails this user can send');
define('LNG_UsersGroups_Field_Restrictions_ForceDoubleOptIn', 'Force Double Opt-in?');
define('LNG_HLP_UsersGroups_Field_Restrictions_ForceDoubleOptIn', 'Force subscription forms to always send a confirmation email to a new subscriber before marking them as confirmed.<br /><br />If this option is not enabled, the user is free to choose whether to make their form double opt-in or not.');
define('LNG_UsersGroups_Field_Restrictions_ForceSpamCheck', 'Force Spam Check?');
define('LNG_HLP_UsersGroups_Field_Restrictions_ForceSpamCheck', 'Forces campaigns and autoresponders to be spam checked before being saved.<br /><br />The item will not be saved if it fails the check.');
define('LNG_UsersGroups_Permission_autoresponders', 'Autoresponder Permissions');
define('LNG_UsersGroups_Permission_autoresponders_create', 'Create Autoresponders');
define('LNG_UsersGroups_Permission_autoresponders_edit', 'Edit Autoresponders');
define('LNG_UsersGroups_Permission_autoresponders_delete', 'Delete Autoresponders');
define('LNG_UsersGroups_Permission_autoresponders_approve', 'Approve Autoresponders');
define('LNG_UsersGroups_Permission_forms', 'Website Form Permissions');
define('LNG_UsersGroups_Permission_forms_create', 'Create Website Forms');
define('LNG_UsersGroups_Permission_forms_edit', 'Edit Website Forms');
define('LNG_UsersGroups_Permission_forms_delete', 'Delete Website Forms');
define('LNG_UsersGroups_Permission_newsletters', 'Email Campaign Permissions');
define('LNG_UsersGroups_Permission_newsletters_create', 'Create Email Campaign');
define('LNG_UsersGroups_Permission_newsletters_edit', 'Edit Email Campaign');
define('LNG_UsersGroups_Permission_newsletters_delete', 'Delete Email Campaign');
define('LNG_UsersGroups_Permission_newsletters_approve', 'Approve Email Campaign');
define('LNG_UsersGroups_Permission_newsletters_send', 'Send an Email Campaign');
define('LNG_UsersGroups_Permission_templates', 'Template Permissions');
define('LNG_UsersGroups_Permission_templates_create', 'Create Templates');
define('LNG_UsersGroups_Permission_templates_edit', 'Edit Templates');
define('LNG_UsersGroups_Permission_templates_delete', 'Delete Templates');
define('LNG_UsersGroups_Permission_templates_approve', 'Approve Templates');
define('LNG_UsersGroups_Permission_templates_global', 'Global Templates');
define('LNG_UsersGroups_Permission_templates_builtin', 'Show Built In Templates');
define('LNG_UsersGroups_Permission_subscribers', 'Contact Permissions');
define('LNG_UsersGroups_Permission_subscribers_manage', 'View contacts');
define('LNG_UsersGroups_Permission_subscribers_add', 'Add contacts');
define('LNG_UsersGroups_Permission_subscribers_edit', 'Edit Contacts');
define('LNG_UsersGroups_Permission_subscribers_delete', 'Delete Contacts');
define('LNG_UsersGroups_Permission_subscribers_import', 'Import Contacts');
define('LNG_UsersGroups_Permission_subscribers_export', 'Export Contacts to a File');
define('LNG_UsersGroups_Permission_subscribers_banned', 'View Suppression Email Lists');
define('LNG_UsersGroups_Permission_subscribers_eventsave','Add Event');
define('LNG_UsersGroups_Permission_subscribers_eventdelete','Delete Event');
define('LNG_UsersGroups_Permission_subscribers_eventupdate','Edit Event');
define('LNG_UsersGroups_Permission_lists', 'List Permissions');
define('LNG_UsersGroups_Permission_lists_create', 'Create Contact Lists');
define('LNG_UsersGroups_Permission_lists_edit', 'Edit Contact Lists');
define('LNG_UsersGroups_Permission_lists_delete', 'Delete Contact Lists');
define('LNG_UsersGroups_Permission_lists_bounce', 'Process Bounced Emails');
define('LNG_UsersGroups_Permission_lists_bouncesettings', 'Edit Bounce Information');
define('LNG_UsersGroups_Permission_customfields', 'Custom Field Permissions');
define('LNG_UsersGroups_Permission_customfields_create', 'Create Custom Fields');
define('LNG_UsersGroups_Permission_customfields_edit', 'Edit Custom Fields');
define('LNG_UsersGroups_Permission_customfields_delete', 'Delete Custom Fields');
define('LNG_UsersGroups_Permission_system', 'Administrator Permissions');
define('LNG_UsersGroups_Permission_system_system', 'System Administrator');
define('LNG_UsersGroups_Permission_system_user', 'User Administrator');
define('LNG_UsersGroups_Permission_system_list', 'List Administrator');
define('LNG_UsersGroups_Permission_system_template', 'Template Administrator');
define('LNG_UsersGroups_Permission_statistics', 'Statistics Permissions');
define('LNG_UsersGroups_Permission_statistics_user', 'User Account Statistics');
define('LNG_UsersGroups_Permission_statistics_list', 'Contact List Statistics');
define('LNG_UsersGroups_Permission_statistics_triggeremails', 'View triggers statistics');
define('LNG_UsersGroups_Permission_statistics_newsletter', 'View Email Campaign Statistics');
define('LNG_UsersGroups_Permission_statistics_autoresponder', 'View Autoresponder Statistics');
define('LNG_UsersGroups_Permission_user', 'User Related Permissions');
define('LNG_UsersGroups_Permission_user_smtp', 'Let user specify specify SMTP');
define('LNG_UsersGroups_Permission_user_smtpcom', 'User able to see SMTP.com option');
define('LNG_UsersGroups_Permission_segments', 'Segment Permissions');
define('LNG_UsersGroups_Permission_segments_view', 'View Segments');
define('LNG_UsersGroups_Permission_segments_create', 'Create Segments');
define('LNG_UsersGroups_Permission_segments_edit', 'Edit Segments');
define('LNG_UsersGroups_Permission_segments_delete', 'Delete Segments');
define('LNG_UsersGroups_Permission_segments_send', 'Send to Segments');
define('LNG_UsersGroups_Permission_triggeremails', 'Trigger Permissions');
define('LNG_UsersGroups_Permission_triggeremails_create', 'Create Triggers');
define('LNG_UsersGroups_Permission_triggeremails_edit', 'Edit Triggers');
define('LNG_UsersGroups_Permission_triggeremails_delete', 'Delete Triggers');
define('LNG_UsersGroups_Permission_triggeremails_activate', 'Approve Triggers');
define('LNG_UsersGroups_access_lists_all', 'All Contact Lists');
define('LNG_UsersGroups_access_lists_custom', 'Users own lists plus the following lists');
define('LNG_UsersGroups_access_lists_none', '<font color="gray">[No contact lists have been created]</font>');
define('LNG_UsersGroups_access_segments_all', 'All segments');
define('LNG_UsersGroups_access_segments_custom', 'Users own segments plus the following segments');
define('LNG_UsersGroups_access_segments_none', '<font color="gray">[No segments have been created]</font>');
define('LNG_UsersGroups_access_templates_all', 'All Templates');
define('LNG_UsersGroups_access_templates_custom', 'Users own templates plus the following');
define('LNG_UsersGroups_access_templates_none', '<font color="gray">[No templates have been created]</font>');
define('LNG_UsersGroups_Restrictions_Lists_Unlimited', 'Unlimited contact lists');
define('LNG_UsersGroups_Restrictions_Lists_Finite', 'Maximum Number of Contact Lists');
define('LNG_HLP_UsersGroups_Restrictions_Lists_Finite', 'The number of contact lists that this user can create.');
define('LNG_UsersGroups_Restrictions_EmailsPerHour_Unlimited', 'Unlimited emails per hour');
define('LNG_UsersGroups_Restrictions_EmailsPerHour_Finite', 'Maximum Number of Emails Per Hour');
define('LNG_HLP_UsersGroups_Restrictions_EmailsPerHour_Finite', 'The maximum number of emails this user can send per send per hour.<br/><br/>If two email campaigns are scheduled in the same hour, this will not affect the total number of emails sent, it will only affect each email campaign separately.');
define('LNG_UsersGroups_Restrictions_EmailsPerMonth_Unlimited', 'Unlimited emails per month');
define('LNG_UsersGroups_Restrictions_EmailsPerMonth_Finite', 'Maximum Number of Emails Per Month');
define('LNG_HLP_UsersGroups_Restrictions_EmailsPerMonth_Finite', 'The maximum number of emails this user can send each month.');
define('LNG_UsersGroups_Restrictions_TotalEmails_Unlimited', 'Unlimited emails');
define('LNG_UsersGroups_Restrictions_TotalEmails_Finite', 'Total Maximum Number of Emails');
define('LNG_HLP_UsersGroups_Restrictions_TotalEmails_Finite', 'The maximum number of emails this user can send. This is not time limited. For example, if you specify 500, then this user will only ever be able to send up to 500 emails.<br/><br/>As emails get sent, this number will change to reflect the number of emails the user can still send.');
define('LNG_UsersGroups_Restrictions_ForceDoubleOptIn_Explain', 'Yes, force all subscription forms to be double opt-in');
define('LNG_UsersGroups_Restrictions_ForceSpamCheck_Explain', 'Yes, force all campaigns and autoresponders to be spam checked before they can be sent');
define('LNG_UsersGroups_ManageGroups', 'User Groups');
define('LNG_UsersGroups_ManageGroups_Intro', 'A user group is a way to define a set of access permissions which can then be inherited by users. To create a new group, click the <em>Create a User Group...</em> button below.');
define('LNG_UsersGroups_ManageGroups_CreateGroupButton', 'Create a User Group...');
define('LNG_UsersGroups_ManageGroups_DeleteGroupsButton', 'Delete Group(s)...');
define('LNG_UsersGroups_ManageGroups_Action_ViewUsers', 'View Users');
define('LNG_UsersGroups_ManageGroups_JS_ChooseAtLeastOne', 'Please choose at least one group to delete first.');
define('LNG_UsersGroups_ManageGroups_JS_GroupContainsUser', 'You are not able to delete groups that still contains users. Please de-select these groups first.');
define('LNG_UsersGroups_ManageGroups_JS_DeletePrompt', 'Are you sure you want to delete the selected groups? This action cannot be undone.');
define('LNG_UsersGroups_ManageGroups_Message_DeleteFail', 'Unable to delete one or more groups.'); // TODO replace this.
define('LNG_UsersGroups_ManageGroups_Message_DeleteSuccess', '%s group(s) has been deleted.');
define('LNG_UsersGroups_Form_CreateGroup', 'Create a User Group');
define('LNG_UsersGroups_Form_CreateGroup_Intro', 'A user group is a way to define a set of access permissions which can then be inherited by users. To create a new group, fill in the form below and click the save button.');
define('LNG_UsersGroups_Form_EditGroup', 'Edit a User Group');
define('LNG_UsersGroups_Form_EditGroup_Intro', 'A user group is a way to define a set of access permissions which can then be inherited by users.');
define('LNG_UsersGroups_Form_Header_GroupDetails', 'Group Details');
define('LNG_UsersGroups_Form_Header_GroupAccess', 'List, Segment and Template Permissions');
define('LNG_UsersGroups_Form_Header_GroupRestrictions', 'Group Restrictions');
define('LNG_UsersGroups_Form_JS_Alert_GroupName_Empty', 'Group name cannot be empty. Please enter a valid name.');
define('LNG_UsersGroups_Form_JS_Confirm_Permissions_Empty', 'Are you sure you want to leave permissions empty for this group? Users assigned to this group will not be able to do anything except loging-into the application.'); // TODO more explaination
define('LNG_UsersGroups_From_Error_CannotSave', 'Unable to save details. Please try again later.'); // TODO replace this with a friendlier msg
define('LNG_UsersGroups_From_Success_Created', 'Group has been created successfully.');
define('LNG_UsersGroups_From_Success_Saved', 'Group has been saved successfully.');
define('LNG_HLP_UsersGroups_Field_GroupName', 'The name of the group. This will identify the group and should be unique to other group names.');
define('LNG_systemAdminLabel', 'This is group should have full system administrator permissions.');
define('LNG_UsersGroups_SystemAdminCheckboxDisabledMessage', 'There needs to be at least one system administrator group with at least one user in it.');