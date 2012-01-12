<?php
/**
* Language file variables for the Triggers.
*
* @see GetLang
*
* @author Hendri <hendri@interspire.com>
*
* @package SendStudio
* @subpackage Language
*/

define('LNG_TriggerEmails_Intro', 'A trigger activates an action when a specific event occurs, such as sending a birthday email on a contacts birthday or adding a contact to a new list when they click a link.');
define('LNG_TriggerEmails_Create', 'Create a Trigger');
define('LNG_TriggerEmails_Edit', 'Edit a Trigger');
define('LNG_TriggerEmails_Cannot_Load_Record', 'Cannot get record');
define('LNG_TriggerEmails_Cannot_Invalid_ID', 'Invalid trigger ID specified');
define('LNG_TriggerEmails_Manage', 'Triggers');
define('LNG_TriggerEmails_Manage_CRON_Alert', 'You need to setup scheduled sending to enable triggers. Please see <a href="#" onclick="LaunchHelp(\'%%WHITELABEL_INFOTIPS%%\',\'841\'); return false;">this article</a> to learn how, or contact your administrator.');
define('LNG_TriggerEmails_Manage_NoLists_AskAdmin', '&nbsp;Please contact your system administrator to create one for you.');
define('LNG_TriggerEmails_Manage_NoCampaigns_AskAdmin', '&nbsp;Please contact your system administrator to create one for you.');
define('LNG_TriggerEmails_Manage_AddButton', 'Create a Trigger...');
define('LNG_TriggerEmails_Manage_NoRecords', 'No triggers have been created. %s');
define('LNG_TriggerEmails_Manage_NoRecords_CreateRecord', '&nbsp;Click the "' . LNG_TriggerEmails_Manage_AddButton . '" button below to create one.');
define('LNG_TriggerEmails_Manage_NoRecords_AskAdmin', '&nbsp;Please contact your system administrator to create one for you.');
define('LNG_TriggerEmails_Manage_BulkAction_Delete', 'Delete selected trigger(s)');
define('LNG_TriggerEmails_Manage_BulkAction_Activate', 'Mark selected trigger(s) as active');
define('LNG_TriggerEmails_Manage_BulkAction_Deactivate', 'Mark selected trigger(s) as inactive');
define('LNG_TriggerEmails_Manage_Column_TriggerName', 'Name');
define('LNG_TriggerEmails_Manage_Column_CampaignName', 'Campaign');
define('LNG_TriggerEmails_Manage_Column_CreateDate', 'Created');
define('LNG_TriggerEmails_Manage_Column_TriggeredBy', 'Triggered&nbsp;By');
define('LNG_TriggerEmails_Manage_Column_TriggerHours', 'When');
define('LNG_TriggerEmails_Manage_Column_Owner', 'Created By');
define('LNG_TriggerEmails_Manage_Column_Status', LNG_Active);
define('LNG_TriggerEmails_Manage_Column_TriggeredBy_CustomField', 'Custom Field');
define('LNG_TriggerEmails_Manage_Column_TriggeredBy_CampaignOpen', 'Email&nbsp;Campaign&nbsp;Opened');
define('LNG_TriggerEmails_Manage_Column_TriggeredBy_LinkClicked', 'Link Clicked');
define('LNG_TriggerEmails_Manage_Column_TriggeredBy_StaticDate', 'Predefined Date');
define('LNG_TriggerEmails_Manage_Column_TriggerDays_Immediate', 'Immediately&nbsp;After');
define('LNG_TriggerEmails_Manage_Column_TriggerDays_HoursBefore', '%s&nbsp;Hours&nbsp;Before');
define('LNG_TriggerEmails_Manage_Column_TriggerDays_OneHourBefore', '1&nbsp;Hour&nbsp;Before');
define('LNG_TriggerEmails_Manage_Column_TriggerDays_HoursAfter', '%s&nbsp;Hours&nbsp;After');
define('LNG_TriggerEmails_Manage_Column_TriggerDays_OneHourAfter', '1&nbsp;Hour&nbsp;After');
define('LNG_TriggerEmails_Manage_Tips_DisableTrigger', 'Disable this trigger');
define('LNG_TriggerEmails_Manage_Tips_EnableTrigger', 'Enable this trigger');
define('LNG_TriggerEmails_Manage_PromptDelete', 'Are you sure you want to delete the selected triggers?');
define('LNG_TriggerEmails_Manage_PromptDelete_One', 'Are you sure you want to delete the selected trigger?');
define('LNG_TriggerEmails_Manage_PromptChoose', 'Please choose at least one trigger first.');
define('LNG_TriggerEmails_Manage_Delete_Failed', 'Selected trigger cannot be deleted.');
define('LNG_TriggerEmails_Manage_Delete_Success', 'The selected trigger has been deleted successfully.');
define('LNG_TriggerEmails_Manage_Copy_Failed', 'Unable to copy trigger');
define('LNG_TriggerEmails_Manage_Copy_Success', 'The selected trigger has been copied to "%s"');
define('LNG_TriggerEmails_Manage_Activate_Failed', 'Unable to activate selected trigger.');
define('LNG_TriggerEmails_Manage_Activate_Success', 'The selected trigger is now active.');
define('LNG_TriggerEmails_Manage_Deactivate_Failed', 'Unable to deactivate selected trigger.');
define('LNG_TriggerEmails_Manage_Deactivate_Success', 'The selected trigger is now inactive and will not be triggered.');
define('LNG_TriggerEmails_Manage_Bulk_Delete_Failed', 'Selected triggers cannot be deleted.');
define('LNG_TriggerEmails_Manage_Bulk_Delete_Success', 'The selected triggers have been deleted successfully.');
define('LNG_TriggerEmails_Manage_Bulk_Activate_Failed', 'Unable to activate selected triggers.');
define('LNG_TriggerEmails_Manage_Bulk_Activate_Success', 'The selected triggers are now active.');
define('LNG_TriggerEmails_Manage_Bulk_Deactivate_Failed', 'Unable to deactivate selected triggers.');
define('LNG_TriggerEmails_Manage_Bulk_Deactivate_Success', 'The selected triggers are now inactive and will not be triggered.');
define('LNG_TriggerEmails_Form_Header_TriggerDetails', 'Trigger Details');
define('LNG_TriggerEmails_Form_Header_TriggerEvent', 'Trigger Event');
define('LNG_TriggerEmails_Form_Header_TriggerOptions', 'Trigger Sending Options');
define('LNG_TriggerEmails_Form_Prompt_Cancel', 'Are you sure you want to cancel creating a trigger?');
define('LNG_TriggerEmails_Tab_General', 'General Settings');
define('LNG_TriggerEmails_Tab_SendingOptions', 'Sending Options');
define('LNG_TriggerEmails_Form_Field_TriggerName', 'Name Your Trigger');
define('LNG_TriggerEmails_Form_Field_TriggerName_Description', "(Such as 'birthday discount trigger'. The name is for your reference only)");
define('LNG_TriggerEmails_Form_Field_TriggerName_Error', 'Please enter a name for this trigger.');
define('LNG_TriggerEmails_Form_Field_TriggerAction', 'When Triggered');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Error', 'Please chooose at least one action to be run when the trigger is executed.');
define('LNG_TriggerEmails_Form_Field_TriggerType_Title', 'Activate This Trigger');
define('LNG_TriggerEmails_Form_Field_TriggerType_Error', 'Please choose trigger type');
define('LNG_TriggerEmails_Form_Field_TriggerType_DateCustomField', "Based on a contact's date field");
define('LNG_TriggerEmails_Form_Field_TriggerType_DateCustomField_ChooseList_Instruction', '-- Please choose a contact list --');
define('LNG_TriggerEmails_Form_Field_TriggerType_DateCustomField_ChooseCustomField_Instruction', '-- Please choose a date custom field --');
define('LNG_TriggerEmails_Form_Field_TriggerType_DateCustomField_Error_ChooseList', "Please choose a contact list to get custom field from.");
define('LNG_TriggerEmails_Form_Field_TriggerType_DateCustomField_Error_ChooseCustomField', "Please choose a date custom field.");
define('LNG_TriggerEmails_Form_Field_TriggerType_DateCustomField_Prompt_CreateCustomField', 'You need to create at least one "date" custom field to send a trigger based on a date. Would you like to do that now? Keep in mind that any changes you have made to this trigger will be lost.\n\nClick OK to create a new custom field now.');
define('LNG_TriggerEmails_Form_Field_TriggerType_DateCustomField_NotAvailable', '<i>No date custom fields are assigned to the "%s" list</i>');
define('LNG_TriggerEmails_Form_Field_TriggerType_StaticDate', "Based on a specific date");
define('LNG_TriggerEmails_Form_Field_TriggerType_StaticDate_Error', 'Please specify a date to base the trigger against.');
define('LNG_TriggerEmails_Form_Field_TriggerType_StaticDate_ListTitle', 'Assign Trigger to Which Contact List(s)');
define('LNG_TriggerEmails_Form_Field_TriggerType_StaticDate_List_Error', 'Please choose at least one contact list to assign this trigger to.');
define('LNG_TriggerEmails_Form_Field_TriggerType_LinkClicked', 'Based on a link being clicked');
define('LNG_TriggerEmails_Form_Field_TriggerType_LinkClicked_ChooseNewsletter_Instruction', '-- Please choose an email campaign --');
define('LNG_TriggerEmails_Form_Field_TriggerType_LinkClicked_NotAvailable', '<i>No links are available for this campaign</i>');
define('LNG_TriggerEmails_Form_Field_TriggerType_LinkClicked_Error_ChooseNewsletter', 'Please choose a newsletter to get links from.');
define('LNG_TriggerEmails_Form_Field_TriggerType_LinkClicked_Error_ChooseAnotherNewsletter', 'Please choose another newsletter that contains at least one link');
define('LNG_TriggerEmails_Form_Field_TriggerType_NewsletterOpened', 'Based on a email campaign being opened');
define('LNG_TriggerEmails_Form_Field_TriggerType_NewsletterOpened_ChooseNewsletter_Instruction', '-- Please choose an email campaign --');
define('LNG_TriggerEmails_Form_Field_TriggerType_NewsletterOpened_Error_ChooseNewsletter', 'Please choose a newsletter to be monitored for');
define('LNG_TriggerEmails_Form_Field_When_Context_Before', 'Before');
define('LNG_TriggerEmails_Form_Field_When_Context_On', 'On');
define('LNG_TriggerEmails_Form_Field_When_Context_When', 'When');
define('LNG_TriggerEmails_Form_Field_When_Context_After', 'After');
define('LNG_TriggerEmails_Form_Field_When_Unit_Hours', 'hour(s)');
define('LNG_TriggerEmails_Form_Field_When_Unit_Days', 'day(s)');
define('LNG_TriggerEmails_Form_Field_When_Unit_Weeks', 'week(s)');
define('LNG_TriggerEmails_Form_Field_When_Interval_TheDate', 'The date');
define('LNG_TriggerEmails_Form_Field_When_Interval_TheNextAnniversary', 'The next anniversary of the date');
define('LNG_TriggerEmails_Form_Field_When_Interval_TheAnniversaryOfTheDate', 'Every anniversary of the date');
define('LNG_TriggerEmails_Form_Field_When_Interval_OpenNewsletter', 'Opening the email');
define('LNG_TriggerEmails_Form_Field_When_Interval_LinkClicked', 'Clicking the link');
define('LNG_TriggerEmails_Form_Field_When_Help', 'Trigger Based on Specific Date');
define('LNG_HLP_TriggerEmails_Form_Field_When_Help', "Choose 'The date' to action the trigger on the date specified. You might use this if you have an upcoming one off event such as a trade show.<br/><br/>Choose 'The next anniversary only' to action the trigger on the day and month of the date, but not the year. For example if you have a birthday date custom field and you only want to action the trigger on the contact's next birthday.<br/><br/>Choose the 'Every anniversary of the date' to action the trigger on the day and month of the date every year. For example if you want to send a yearly valentines day reminder email.");
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send', 'Send an email campaign');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Instruction', '-- Please choose a campaign --');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_PreviewAlert', 'Please choose a campaign first.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Error', 'Please choose a campaign to send when the event is triggered.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Help', 'Send Which Email Campaign?');
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Help', 'When the trigger is activated, which email campaign should be sent to the contacts who match the trigger event (defined below)?');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_FromName', 'Send From This Name');
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_FromName', 'Which person or company should be shown in the \'From Name\' field for this email?<br/><br />You can change the default name by editing your contact list and changing the \'List Owners Name\'');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_FromName_Error', 'Please enter a "From Name" for the trigger to use when sending.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_FromEmail', 'Send From This Email Address');
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_FromEmail', 'Which email address should be shown in the \'From Email\' field for this email?<br/><br />You can change the default email address by editing your contact list and changing the \'List Owners Email\'');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_FromEmail_EmptyError', 'Please enter a "From Email Address" for the trigger to use when sending.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_ReplyEmail', 'Send Reply Emails to');
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_ReplyEmail', 'When a contact receives your email and clicks reply, which email address should that reply be sent to?<br /><br />You can change the default email address by editing your contact list and changing the \'Reply-To Email\'');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_ReplyEmail_EmptyError', 'Please enter a "Reply-To Email Address" for the trigger to use when sending.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_BounceEmail', 'Send Bounced Emails to');
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_BounceEmail', 'When an email bounces, or is rejected by the mail server, which email address should the error be sent to? If you plan to use the bounce handler, then make sure no other emails will be sent to this address.<br /><br />You can change the default email address by editing your contact list and changing the \'Bounce Email\'');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_BounceEmail_EmptyError', 'Please enter a "Bounce Email Address" for the trigger to use when sending.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_FieldFirstName', "My 'First Name' Custom Field is");
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_FieldFirstName', "If you have a custom field for the 'first name' of the contact, choose it here so the email can be addressed to the person individually.<br /><br />If you have a combined custom field for the persons name (that is, just one field called 'name') then choose that custom field here.");
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_FieldFirstName_Instruction', "Please select your 'First Name' custom field");
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_FieldLastName', "My 'Last Name' Custom Field is");
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_FieldLastName_Instruction', "Please select your 'Last Name' custom field");
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_Multipart', 'Send Your Email as Multipart?');
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_Multipart', 'Sending a multipart email will let the contacts email program decide which format (HTML or Text) to display the email in.<br><br>It is best to use this if you don\'t give your contacts a choice to which format they receive (e.g. they all subscribe as HTML), when they receive the email their email software (eg. Outlook) will automatically show the correct format.<br><br>If unsure, leave this option ticked.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_Multipart_Label', 'Yes, send the email as multipart');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_TrackOpens', 'Track Open Rates for HTML Emails?');
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_TrackOpens', 'Track opening of emails when a contact receives an email. This only applies to HTML email campaigns.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_TrackOpens_Label', 'Yes, track opening of HTML emails');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_TrackLinks', 'Track Links Clicked in this Email?');
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_TrackLinks', 'Do you want to track all link clicks in this email campaign? If so, you will be able to view reports on link clicks from the statistics tab at the top of the page.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_TrackLinks_Label', 'Yes, track all links in this email campaign');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_EmbedImages', 'Embed Images as Attachments?');
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_EmbedImages', 'This will embed the images from the content inside the email the contacts receive. This may make the email significantly larger but will allow contacts to view the content offline.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_Send_Field_EmbedImages_Label', 'Yes, embed images in the content');
define('LNG_TriggerEmails_Form_Field_TriggerAction_AddList', 'Add the contact to an additional contact list');
define('LNG_TriggerEmails_Form_Field_TriggerAction_AddList_Error', 'Please choose at least one contact list to add this contacts to when the event is triggered.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_AddList_Help', 'Add to Which Lists?');
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_AddList_Help', 'When the trigger is activated, which lists should the contact be added to?');
define('LNG_TriggerEmails_Form_Field_TriggerAction_RemoveList', 'Remove the contact from the contact list that they are in');
define('LNG_TriggerEmails_Form_Field_TriggerAction_RemoveList_f', 'Remove the contact from the <i>%s</i> contact list');
define('LNG_TriggerEmails_Form_Field_TriggerAction_RemoveList_s_One', 'Remove the contact from the <i>%s</i> contact list');
define('LNG_TriggerEmails_Form_Field_TriggerAction_RemoveList_s_Many', 'Remove the contact from the following lists: %s');
define('LNG_TriggerEmails_Form_Field_TriggerAction_RemoveList_l', 'Remove the contact from the contact lists that I send the <i>%s</i> campaign to when the specified link is clicked.');
define('LNG_TriggerEmails_Form_Field_TriggerAction_RemoveList_n', 'Remove the contact from the contact lists that I send the <i>%s</i> campaign to when it\'s opened.');
define('LNG_TriggerEmails_Form_Field_When_Title', 'Trigger The Actions');
define('LNG_TriggerEmails_Form_Field_When_Instruction', 'Please choose one of the radio button above first.');
define('LNG_TriggerEmails_Form_Field_When_Error_InvalidTime', 'Please enter a positive whole number');
define('LNG_TriggerEmails_Form_Field_Active_Title', 'Is Trigger Active?');
define('LNG_TriggerEmails_Form_Field_Active_Instruction', 'Yes, this trigger is active');
define('LNG_TriggerEmails_Form_Save_Success', 'Trigger record saved successfully');
define('LNG_TriggerEmails_Form_Save_Failed', 'Unable to save trigger');
define('LNG_TriggerEmails_Form_Save_Failed_Permission', 'Trigger is not saved... Permission denied to one or more of the resources that you have choosen.');
define('LNG_TriggerEmails_Stats_Title', 'Trigger Statistics');
define('LNG_TriggerEmails_Stats_Intro', 'See statistics for date and link based triggers that you have setup.');
define('LNG_TriggerEamils_Stats_Page_Intro', "The statistics for the '%s' trigger are shown below. Click on the tabs to see other reports.");
define('LNG_TriggerEmails_Stats_NoTriggerEmailsDefined', 'To view statistics for triggers you first need to create one. Click the button below to do that now.');
define('LNG_TriggerEmails_Stats_TriggerName', 'Trigger Name');
define('LNG_TriggerEmails_Stats_PromptChoose', 'Please choose the statistics for at least one trigger first.');
define('LNG_TriggerEmails_Stats_PromptDelete', 'Are you sure you want to delete the selected trigger statistics? This action cannot be undone.');
define('LNG_TriggerEmails_Stats_BulkAction_Delete', 'Are you sure you want to delete the selected trigger statistics? This action cannot be undone.');
define('LNG_TriggerEmails_Stats_BulkAction_Delete_Failed', 'Unable to delete selected trigger statistics.');
define('LNG_TriggerEmails_Stats_BulkAction_Delete_Success', 'The selected trigger statistics have been deleted successfully.');
define('LNG_TriggerEmails_Stats_BulkAction_UnknownAction', 'Unknown bulk action specified.');
define('LNG_TriggerEmails_Stats_Print', 'Print Trigger Statistic');
define('LNG_TriggerEmails_Stats_Delete', 'Delete Trigger Statistic');
define('LNG_TriggerEmails_Stats_Tab_Snapshots', 'Statistics Snapshot');
define('LNG_TriggerEmails_Stats_Tab_OpenStats', 'Open Stats');
define('LNG_TriggerEmails_Stats_Tab_LinkStats', 'Link Stats');
define('LNG_TriggerEmails_Stats_Tab_BounceStats', 'Bounce Stats');
define('LNG_TriggerEmails_Stats_Tab_UnsubscribeStats', 'Unsubscribe Stats');
define('LNG_TriggerEmails_Stats_Tab_ForwardStats', 'Fowarding Stats');
define('LNG_TriggerEmails_Stats_Tab_SubscriberStats', 'Contact Information');
define('LNG_TriggerEmails_Stats_Tab_FailedStats', 'Failed Send');
define('LNG_TriggerEmails_Stats_Snapshots_Heading', 'Statistics Snapshot');
define('LNG_TriggerEmails_Stats_Snapshots_Intro', "A summary of the performance for the selected trigger is shown below:");
define('LNG_TriggerEmails_Stats_Snapshots_CreatedBy', 'Created By');
define('LNG_TriggerEmails_Stats_Snapshots_ChartTitle', 'Activity for \'%s\'');
define('LNG_TriggerEmails_Stats_Snapshots_Tooltip_Open', 'Click here to see the email address of everyone that have opened the triggered email');
define('LNG_TriggerEmails_Stats_Snapshots_Tooltip_UniqueOpen', 'Click here to see the email address of everyone that have opened the triggered email');
define('LNG_TriggerEmails_Stats_Open_Intro', "View open rates and email addresses for the trigger '%s'");
define('LNG_TriggerEmails_Stats_Open_Error_NotOpenTracked', 'Open tracking has been disabled for this trigger.');
define('LNG_TriggerEmails_Stats_Open_Error_HasNotBeenOpened', 'This trigger has not been opened by any contacts yet.');
define('LNG_TriggerEmails_Stats_Open_Error_HasNotBeenOpened_CalendarProblem', 'The triggered email has not been opened by any contacts during the selected date range.');
define('LNG_TriggerEmails_Stats_Links_Intro', "View link click statistics for the trigger '%s'");
define('LNG_TriggerEmails_Stats_Links_Error_NotLinkTracked', 'Link tracking has been disabled for this trigger.');
define('LNG_TriggerEmails_Stats_Links_Error_NoLinksFound', 'No links were found in the selected trigger.');
define('LNG_TriggerEmails_Stats_Links_Error_NoLinksFound_CalendarProblem', 'No links are found for this trigger.');
define('LNG_TriggerEmails_Stats_Bounces_Intro', "View bounce rates and email addresses for the trigger '%s'");
define('LNG_TriggerEmails_Stats_Bounces_Error_NoBouncesFound', 'No bounce reports have been received for this trigger.');
define('LNG_TriggerEmails_Stats_Bounces_Error_NoBouncesFound_CalendarProblem', 'No bounce reports have been received for this trigger.');
define('LNG_TriggerEmails_Stats_Unsubscribes_Intro', "View unsubscribe rates and email addresses for the trigger '%s'");
define('LNG_TriggerEmails_Stats_Unsubscribes_Error_NoUnsubscribesFound', 'This trigger has not had any unsubscribe requests.');
define('LNG_TriggerEmails_Stats_Unsubscribes_Error_NoUnsubscribesFound_CalendarProblem', 'The triggers has not had any unsubscribe requests yet during the selected date range.');
define('LNG_TriggerEmails_Stats_Forwards_Intro', "View which contacts were sent the trigger '%s'");
define('LNG_TriggerEmails_Stats_Forwards_Error_NoForwardFound', 'This trigger has not yet been forwarded or did not include a send-to-friend link.');
define('LNG_TriggerEmails_Stats_Forwards_Error_NoForwardFound_CalendarProblem', 'This trigger has not been forwarded to anyone during the selected date range or did not contain a send-to-friend link.');
define('LNG_TriggerEmails_Stats_Recipients_Intro', "View which contacts were sent the trigger '%s'");
define('LNG_TriggerEmails_Stats_Recipients_Error_NoRecipientFound', 'This trigger has not been sent to any contacts yet.');
define('LNG_TriggerEmails_Stats_Recipients_Error_NoRecipientFound_CalendarProblem', 'This trigger has not been sent to any contact during the selected time period.');
define('LNG_TriggerEmails_Stats_Failed_Intro', "View which contacts failed reciving the trigger '%s'");
define('LNG_TriggerEmails_Stats_Failed_Error_NoRecipientFound', 'This trigger does not have any failed sending.');
define('LNG_TriggerEmails_Stats_Failed_Error_NoRecipientFound_CalendarProblem', 'This trigger does not have any failed sending during the selected time period.');



/**
 * 5.5.6
 */
define('LNG_HLP_TriggerEmails_Form_Field_TriggerAction_Send_Field_FieldLastName', "If you have a custom field for the 'last name' of the contact, choose it here so the email can be addressed to the person individually.<br /><br />If you have a combined custom field for the persons name (that is, just one field called 'name') then leave this option empty.");



/**
 * 5.5.7
 */
define('LNG_TriggerEmails_Form_Field_TriggerActions_Not_Choosen', "Please choose one or more actions that will be perfomed when trigger is activated.");



/**
 * 5.7.0
 */
define('LNG_TriggerEmails_Manage_NoLists', 'No contat list has been defined. %s');
define('LNG_TriggerEmails_Manage_AddListButton', 'Create a contact list ...');
define('LNG_TriggerEmails_Manage_AddCampaignButton', 'Create an email campaign ...');
define('LNG_TriggerEmails_Manage_NoCampaigns', 'No email campaigns have been created. %s');
define('LNG_TriggerEmails_Manage_NoLists_CanCreate', '&nbsp;Click the "' . LNG_TriggerEmails_Manage_AddListButton . '" button below to create one.');
define('LNG_TriggerEmails_Manage_NoCampaigns_CanCreate', '&nbsp;Click the "' . LNG_TriggerEmails_Manage_AddCampaignButton . '" button below to create one.');
