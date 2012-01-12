<?php
/**
* Language file variables for the stats area.
*
* @see GetLang
*
* @version     $Id: stats.php,v 1.64 2008/02/15 00:58:43 chris Exp $
* @author Chris <chris@interspire.com>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the stats area... Please backup before you start!
*/

define('LNG_Stats_PrintReport', 'Print Report');
define('LNG_Stats_ExportReport', 'Export Report');
define('LNG_Stats_TotalDelivered', 'Total Delivered');
define('LNG_Stats_TotalForwards', 'Total Forwards');
define('LNG_Stats_TotalOpens', 'Total Opens');
define('LNG_Stats_TotalUniqueOpens', 'Total Unique Opens');
define('LNG_Stats_TotalLinkClicks', 'Total Link Clicks');
define('LNG_Stats_TotalClicks', 'Total Clicks');
define('LNG_Stats_MostPopularLink', 'Most Popular');
define('LNG_Stats_AverageClicks', 'Average Clicks (Per Email Open)');
define('LNG_LinksClickedChart', 'Links Clicked Chart');
define('LNG_OpensChart', 'Opens Chart');
define('LNG_ForwardsChart', 'Forwards Chart');
define('LNG_Stats_TotalUnsubscribes', 'Total desuscritos');
define('LNG_Stats_MostUnsubscribes', 'Most Unsubscribes');
define('LNG_UnsubscribesChart', 'Unsubscribes Chart');
define('LNG_UnsubscribeDate', 'Unsubscribe Date');
define('LNG_Stats_ViewSummary', 'View Report');
define('LNG_Unsubscribe_Summary', 'Unsubscribe Summary');
define('LNG_LinkClicks_Summary', 'Link Clicks Summary');
define('LNG_Opens_Summary', 'Opens Summary');
define('LNG_Forwards_Summary', 'Forwards Summary');
define('LNG_StatsDeleteDisabled', 'You cannot delete statistics while an email campaign is still being sent.');
define('LNG_Delete_Stats_Selected', 'Eliminar');
define('LNG_ChooseStatsToDelete', 'Choose some statistics to delete');
define('LNG_DeleteStatsPrompt', 'Are you sure you want to delete these statistics?\nOnce they are deleted they cannot be retrieved.');
define('LNG_StatisticsDeleteSuccess_One', 'Statistics deleted successfully.');
define('LNG_StatisticsDeleteSuccess_Many', '%s statistics deleted successfully.');
define('LNG_StatisticsDeleteFail_One', 'Statistics not deleted successfully. Please try again.');
define('LNG_StatisticsDeleteFail_Many', '%s statistics not deleted successfully. Please try again.');
define('LNG_StatisticsDeleteNotFinished_One', 'Statistics cannot be deleted while an email campaign is still being sent.');
define('LNG_StatisticsDeleteNotFinished_Many', '%s statistics cannot be deleted while an email campaign is still being sent.');
define('LNG_DateStarted', 'Fecha inicio');
define('LNG_DateFinished', 'Fecha fin');
define('LNG_TotalRecipients', 'Recipientes');
define('LNG_UnsubscribeCount', 'Desuscritos');
define('LNG_ExportReport', 'Exportar reporte');
define('LNG_PrintReport', 'Imprimir reporte');
define('LNG_ViewSummary', 'Ver');
define('LNG_TotalEmails', 'Total Emails: ');
define('LNG_TotalOpens', 'Total abiertos: ');
define('LNG_TotalUniqueOpens', 'Total de oberturas únicas: ');
define('LNG_AverageOpens', 'Average Opens: ');
define('LNG_MostOpens', 'Most Opens (Date/Time): ');
define('LNG_Stats_NewsletterStatistics', 'Estadísticas email campañas');
define('LNG_Stats_ChooseNewsletter', '-- Escoge una email campaña de la lista siguiente --');
define('LNG_Stats_Newsletters_Step1_Heading', 'Estadísticas email campañas');
define('LNG_Stats_Newsletters_Cancel', '¿Seguro que quieres cancelar el visionado de las estadísticas de la email campaña?');
define('LNG_Stats_Newsletters_SelectList_Heading', 'Detalles email campaña');
define('LNG_Stats_Newsletters_SelectList_Intro', 'Email campaña');
define('LNG_Stats_Newsletters_NoSelection', 'Por favor escoge una email campaña.');
define('LNG_Stats_Newsletters_Step2_Heading', 'Estadísticas email campañas');
define('LNG_Stats_Newsletters_Step2_Intro', 'Ver estadísticas para email campaña \'%s\'');
define('LNG_NoNewsletterStats', 'No hay datos de estadística registrados para la email campaña \'%s\'.');
define('LNG_NewsletterSummaryChart', 'Resumen grafico de la email campana');
define('LNG_Stats_Unknown_User', 'Either the user does not exist or you do not have access to view their information.');
define('LNG_Stats_ChooseUser', '-- Choose a user from the list below --');
define('LNG_Stats_Users_SelectList_Heading', 'User Details');
define('LNG_Stats_Users_SelectList_Intro', 'Username');
define('LNG_Stats_Users_NoSelection', 'Please choose a user first.');
define('LNG_User_Summary_Graph', 'User Summary Chart');
define('LNG_User_Email_Campaigns_Sent_Graph', 'Email Campaigns Sent Chart');
define('LNG_UserStatisticsSnapshot', 'Statistics Snapshot');
define('LNG_Stats_Users_Step3_Intro', 'View a summary for user \'%s\'');
define('LNG_UserStatistics_Snapshot_EmailsSent', 'Emails Sent');
define('LNG_Stats_UserCreateDate', 'User Created');
define('LNG_Stats_UserLastLoggedIn', 'User Last Logged In');
define('LNG_UserLastNewsletterSent', 'Last Email Campaign Sent');
define('LNG_UserNewslettersSent', 'Email Campaigns Sent');
define('LNG_UserAutorespondersCreated', 'Autoresponders Created');
define('LNG_Stats_TotalEmailsSent', 'Emails Sent');
define('LNG_UserHasNotSentAnyNewsletters', 'The selected user has not sent any email campaigns.');
define('LNG_UserHasNotLoggedIn', 'User has not logged in');
define('LNG_Stats_ViewNewsletterStatistics_User', 'View statistics for user \'%s\'');
define('LNG_Stats_ViewNewsletterStatistics_Introduction_User', 'View statistics for user \'%s\'');
define('LNG_Stats_Users_Step3_EmailsSent_Intro', 'View the number of emails sent for user \'%s\'. This does not include email campaigns that are still being sent. (In progress)');
define('LNG_Stats_AutoresponderStatistics', 'Estadísticas autorespuestas');
define('LNG_Stats_ChooseAutoresponder', '-- Escoge una autorespuesta de la siguiente lista --');
define('LNG_Stats_Autoresponders_Step1_Heading', 'Estadísticas autorespuestas');
define('LNG_Stats_Autoresponders_Cancel', '¿Seguro que quieres cancelar el visionado de las estadísticas de las autorespuestas?');
define('LNG_Stats_Autoresponders_SelectList_Heading', 'Detalles autorespuestas');
define('LNG_Stats_Autoresponders_SelectList_Intro', 'Autorespuestas');
define('LNG_Stats_Autoresponders_NoSelection', 'Por favor escoge una autorespuesta.');
define('LNG_Stats_Autoresponders_Step2_Heading', 'Estadísticas autorespuestas');
define('LNG_Stats_Autoresponders_Step2_Intro', 'Ver estadísticas para las autorespuestas \'%s\'');
define('LNG_NoAutoresponderStats', 'No se ha registrado ninguna estadística para la autorespuesta \'%s\'.');
define('LNG_NoStatisticsToDelete', 'No hay estadísticas para borrar.');
define('LNG_StatisticsDeleteNoStatistics_One', 'No se puede eliminar la estadística si no está disponible.');
define('LNG_StatisticsDeleteNoStatistics_Many', 'No se pueden eliminar las estadísticas si no están disponibles.');
define('LNG_NoAutorespondersHaveBeenSent', 'No hay disponible ninguna estadística de autorespuestas. ¿Has configurado una autorespuesta?');
define('LNG_Stats_ListStatistics', 'Estadísticas lista de contactos');
define('LNG_Stats_Newsletter_Summary_Graph', 'Email Campaign Summary Information');
define('LNG_Newsletter_Summary_Graph_openchart', 'Email Campaign Opens');
define('LNG_Newsletter_Summary_Graph_unsubscribechart', 'Email Campaign Unsubscribes');
define('LNG_Newsletter_Summary_Graph_forwardschart', 'Email Campaign Forwards');
define('LNG_Newsletter_Summary_Graph_linkschart', 'Email Campaign Links');
define('LNG_Newsletter_Summary_Graph_bouncechart', 'Email Campaign Bounces');
define('LNG_Newsletter_Summary_Graph_userchart', 'Emails enviados');
define('LNG_NewsletterStatistics_Snapshot', 'Resumen estadística');
define('LNG_NewsletterStatistics_Snapshot_OpenStats', 'Emails abiertos');
define('LNG_NewsletterStatistics_Snapshot_LinkStats', 'Enlaces abiertos');
define('LNG_NewsletterStatistics_Snapshot_UnsubscribeStats', 'Desuscritos');
define('LNG_NewsletterStatistics_Snapshot_ForwardStats', 'Reenvíos');
define('LNG_NewsletterStatistics_Snapshot_Heading', 'Resumen estadística');
define('LNG_NewsletterStatistics_StartSending', 'Envío empezado el');
define('LNG_NewsletterStatistics_FinishSending', 'Envío terminado el');
define('LNG_NewsletterStatistics_SendingTime', 'Duración envío');
define('LNG_NewsletterStatistics_SentTo', 'Enviado a');
define('LNG_NewsletterStatistics_SentBy', 'Enviado por');
define('LNG_NewsletterStatistics_Opened', 'Aperturas');
define('LNG_NotFinishedSending', 'Envío no terminado');
define('LNG_NewsletterStatistics_Snapshot_SendSize', '%s de %s');
Define('LNG_EmailOpens_Unique', '%s aperturas únicas');
Define('LNG_EmailOpens_Total', '%s Total aperturas');
define('LNG_PreviewThisNewsletter', 'Previsualizar esta email campaña');
define('LNG_DateOpened', 'Fecha de apertura');
define('LNG_NewsletterStatistics_Snapshot_OpenHeading', 'View open rates and email addresses for email campaign \'%s\', sent %s');
define('LNG_NewsletterStatistics_Snapshot_OpenHeading_Unique', 'View <b>unique</b> open rates and email addresses for email campaign \'%s\', sent %s');
define('LNG_NewsletterHasNotBeenOpened', 'This email campaign has not yet been opened by any recipients.');
define('LNG_NewsletterHasNotBeenOpened_CalendarProblem', 'This email campaign has not yet been opened by any recipients during the selected date range.');
define('LNG_NewsletterStatistics_Snapshot_LinkHeading', 'View link click statistics for email campaign \'%s\', sent %s');
define('LNG_NewsletterWasNotOpenTracked', 'Open tracking has been disabled for this email campaign.');
define('LNG_NewsletterHasNotBeenClicked_NoLinksFound', 'No links were found in this email campaign.');
define('LNG_NewsletterWasNotTracked_Links', 'Link tracking has been disabled for this email campaign.');
define('LNG_NewsletterStatistics_Snapshot_UnsubscribesHeading', 'View unsubscribe rates and email addresses for newsletter \'%s\', sent %s');
define('LNG_NewsletterHasNoUnsubscribes', 'This email campaign has not yet received any unsubscribe requests.');
define('LNG_NewsletterHasNoUnsubscribes_CalendarProblem', 'This email campaign has not yet received any unsubscribe requests during the selected date range.');
define('LNG_NewsletterStatistics_Snapshot_ForwardsHeading', 'View email forwarding details for email campaign \'%s\', sent %s');
define('LNG_NewsletterHasNoForwards', 'This email campaign has not yet been forwarded or did not include a send-to-friend link.');
define('LNG_NewsletterHasNoForwards_CalendarProblem', 'This email campaign has not been forwarded to anyone during the selected date range or did not contain a send-to-friend link.');
define('LNG_AutoresponderStatistics_Snapshot', 'Statistics Snapshot');
define('LNG_AutoresponderStatistics_Snapshot_OpenStats', 'Open Stats');
define('LNG_AutoresponderStatistics_Snapshot_LinkStats', 'Link Stats');
define('LNG_AutoresponderStatistics_Snapshot_UnsubscribeStats', 'Unsubscribe Stats');
define('LNG_AutoresponderStatistics_Snapshot_ForwardStats', 'Forwarding Stats');
define('LNG_AutoresponderStatistics_Snapshot_Summary', 'View a summary for autoresponder \'%s\'');
define('LNG_AutoresponderStatistics_Snapshot_Heading', 'Statistics Snapshot');
define('LNG_AutoresponderStatistics_StartSending', 'Start Sending');
define('LNG_AutoresponderStatistics_FinishSending', 'Finished Sending');
define('LNG_AutoresponderStatistics_SendingTime', 'Sending Time');
define('LNG_AutoresponderStatistics_SentTo', 'Sent To');
define('LNG_AutoresponderStatistics_SentBy', 'Sent By');
define('LNG_AutoresponderStatistics_Opened', 'Abiertos');
define('LNG_AutoresponderStatistics_Snapshot_SendSize', '%s of %s');
define('LNG_PreviewThisAutoresponder', 'Preview this autoresponder');
define('LNG_AutoresponderStatistics_Snapshot_OpenHeading', 'View open rates and email addresses for autoresponder \'%s\'');
define('LNG_AutoresponderStatistics_Snapshot_OpenHeading_Unique', 'View <b>unique</b> open rates and email addresses for autoresponder \'%s\'');
define('LNG_AutoresponderStatistics_Snapshot_LinkHeading', 'View link click statistics for autoresponder \'%s\'');
define('LNG_AutoresponderWasNotOpenTracked', 'Open tracking has been disabled for this autoresponder.');
define('LNG_AutoresponderHasNotBeenClicked_NoLinksFound', 'No links were found in this autoresponder.');
define('LNG_AutoresponderWasNotTracked_Links', 'Link tracking has been disabled for this autoresponder.');
define('LNG_AutoresponderStatistics_Snapshot_UnsubscribesHeading', 'View unsubscribe rates and email addresses for autoresponder \'%s\'');
define('LNG_AutoresponderHasNoUnsubscribes', 'The autoresponder has not had any unsubscribe requests yet.');
define('LNG_AutoresponderHasNoUnsubscribes_CalendarProblem', 'The autoresponder has not had any unsubscribe requests during the selected date range.');
define('LNG_AutoresponderStatistics_Snapshot_ForwardsHeading', 'View email forwarding details for autoresponder \'%s\'');
define('LNG_AutoresponderHasNoForwards', 'The autoresponder has not been forwarded to anyone yet, or did not have a send-to-friend link in it.');
define('LNG_AutoresponderHasNoForwards_CalendarProblem', 'The autoresponder has not been forwarded to anyone during the selected date range.');
define('LNG_AutoresponderStatistics_CreatedBy', 'Created By');
define('LNG_AutoresponderStatistics_SentWhen', 'Sent When');
define('LNG_ForwardedBy', 'Forwarded By');
define('LNG_ForwardedTo', 'Forwarded To');
define('LNG_ForwardTime', 'Date Forwarded');
define('LNG_HasSubscribed', 'Is Subscribed to List?');
define('LNG_LinkClicked', 'Link Clicked');
define('LNG_LinkClickTime', 'Click Time');
define('LNG_AnyLink', '-- View stats for all links --');
define('LNG_Today', 'Today');
define('LNG_Yesterday', 'Yesterday');
define('LNG_Last24Hours', 'Last 24 Hours');
define('LNG_Last7Days', 'Last 7 Days');
define('LNG_Last30Days', 'Last 30 Days');
define('LNG_ThisMonth', 'This Month');
define('LNG_LastMonth', 'Last Month');
define('LNG_AllTime', 'All Time');
define('LNG_DateRange', 'Date Range');
define('LNG_Newsletter_Summary_Graph', 'Resumen grafico email campana');
define('LNG_Summary_Graph_Opened', 'Abiertos (%s %%)');
define('LNG_Summary_Graph_Unopened', 'No abiertos (%s %%)');
define('LNG_Autoresponder_Summary_Graph', 'Resumen grafico autorespuesta');
define('LNG_Autoresponder_Summary_Graph_openchart', 'Autoresponder Opens');
define('LNG_Autoresponder_Summary_Graph_unsubscribechart', 'Autoresponder Unsubscribes');
define('LNG_Autoresponder_Summary_Graph_forwardschart', 'Autoresponder Forwards');
define('LNG_Autoresponder_Summary_Graph_linkschart', 'Autoresponder Links');
define('LNG_Subscribes', 'Suscritos');
define('LNG_Unsubscribes', 'Desuscrito');
define('LNG_Forwards', 'Respondidos');
define('LNG_DateTime', 'Date/Time');
define('LNG_New_Subscribes', 'New Subscribes');
define('LNG_DomainName', 'Domain Name');
define('LNG_SubscribeCount', 'Suscritos');
define('LNG_ForwardCount', 'Respondidos');
define('LNG_Summary_Domain_Name', '\'%s\' (%s %%)');
define('LNG_ListStatsTotalUnsubscribes', 'Total desuscritos: ');
define('LNG_ListStatsTotalForwards', 'Total Forwards: ');
define('LNG_ListStatsTotalForwardSignups', 'Total Signups: ');
define('LNG_List_Summary_Graph_openchart', 'Open Statistics');
define('LNG_ListStatistics_Snapshot_OpenStats', 'Open Stats');
define('LNG_ListStatistics_Snapshot_OpenHeading', 'View open rates and email addresses for email campaigns and autoresponders sent to list \'%s\'');
define('LNG_ListStatistics_Snapshot_OpenHeading_Unique', 'View <b>unique</b> open rates and email addresses for email campaigns and autoresponders sent to list \'%s\'');
define('LNG_ListOpenStatsHasNotBeenOpened', 'No email campaigns or autoresponders have been opened.');
define('LNG_ListOpenStatsHasNotBeenOpened_CalendarProblem', 'No email campaigns or autoresponders have been opened in the date range selected.');
define('LNG_List_Summary_Graph_linkschart', 'Links Chart');
define('LNG_ListStatistics_Snapshot_LinksStats', 'Link Stats');
define('LNG_ListLinkStatsHasNotBeenClicked', 'No links in email campaigns or autoresponders sent to this list have been clicked.');
define('LNG_ListLinkStatsHasNotBeenClicked_CalendarLinkProblem', 'The selected link has not been clicked in the date range selected.');
define('LNG_ListLinkStatsHasNotBeenClicked_LinkProblem', 'No clicks have been detected for the link chosen');
define('LNG_List_Summary_Graph_unsubscribechart', 'Unsubscribe Chart');
define('LNG_ListStatistics_Snapshot_UnsubscribeStats', 'Unsubscribe Stats');
define('LNG_List_Summary_Graph_forwardschart', 'Forwarding Statistics');
define('LNG_ListStatistics_Snapshot_ForwardsStats', 'Forward Stats');
define('LNG_NewsletterStatistics_Snapshot_BounceStats', 'Bounce Stats');
define('LNG_NewsletterStatistics_Bounced', 'Rebotados');
define('LNG_NewsletterStatistics_Snapshot_BounceHeading', 'View bounce statistics for email campaigns \'%s\', sent %s');
define('LNG_NewsletterHasNotBeenBounced', 'No bounce reports have been received for this email campaign.');
define('LNG_NewsletterHasNotBeenBounced_BounceType', 'No %ss have been received for this email campaign.');
define('LNG_NewsletterHasNotBeenBounced_CalendarProblem', 'No bounce reports have been received for this email campaign in the selected date range.');
define('LNG_NewsletterHasNotBeenBounced_CalendarProblem_BounceType', 'No %ss have occurred in the selected date range.');
define('LNG_AutoresponderStatistics_Snapshot_BounceStats', 'Bounce Stats');
define('LNG_AutoresponderStatistics_Bounced', 'Bounced');
define('LNG_AutoresponderStatistics_Snapshot_BounceHeading', 'View bounce statistics for autoresponder \'%s\'');
define('LNG_AutoresponderHasNotBeenBounced', 'No bounce reports have been received for this autoresponder.');
define('LNG_AutoresponderHasNotBeenBounced_BounceType', 'No %ss have been received for this autoresponder.');
define('LNG_AutoresponderHasNotBeenBounced_CalendarProblem', 'No bounce reports have been received for this autoresponder in the selected date range.');
define('LNG_AutoresponderHasNotBeenBounced_CalendarProblem_BounceType', 'No %ss have occurred in the selected date range.');
define('LNG_Summary_Graph_Bounced', 'Rebotados (%s %%)');
define('LNG_Bounces', 'Rebotados');
define('LNG_ListStatistics_Snapshot_BounceStats', 'Estadísticas de rebotadoss');
define('LNG_ListStatsHasNotBeenBounced', 'No emails that have been sent to this list have bounced.');
define('LNG_ListStatsHasNotBeenBounced_CalendarProblem_BounceType', 'No %ss have occurred in the selected date range.');
define('LNG_BounceCount', 'Rebotados');
define('LNG_Stats_TotalBounces', 'Total rebotados: ');
define('LNG_Bounce_Summary', 'Bounce Summary');
define('LNG_Stats_TotalSoftBounces', 'Total Soft Bounces: ');
define('LNG_Stats_TotalHardBounces', 'Total Hard Bounces: ');
define('LNG_BounceChart', 'Bounce Chart');
define('LNG_Bounce_Type_hard', 'Hard Bounce');
define('LNG_Bounce_Type_soft', 'Soft Bounce');
define('LNG_Bounce_Type_any', 'Any Bounce Type');
define('LNG_BounceType', 'Bounce Type');
define('LNG_BounceRule', 'Bounce Rule');
define('LNG_BounceDate', 'Bounce Date');
define('LNG_Bounce_Type_hard_bounce', LNG_Bounce_Type_hard);
define('LNG_Bounce_Type_soft_bounce', LNG_Bounce_Type_soft);
define('LNG_Bounce_Type_unknown_bounce', 'Unknown Bounce');
define('LNG_Bounce_Rule_emaildoesntexist', 'Dirección de email inexistente');
define('LNG_Bounce_Rule_domaindoesntexist', 'Nombre de dominio inexistente');
define('LNG_Bounce_Rule_invalidemail', 'Dirección de email inválida');
define('LNG_Bounce_Rule_relayerror', 'Relay Error');
define('LNG_Bounce_Rule_overquota', 'Over Quota');
define('LNG_Bounce_Rule_inactive', 'Inactive Email Account');
define('LNG_Stats_TotalBouncedEmails', 'Total Bounced Emails');
define('LNG_HardBounces', 'Hard Bounces');
define('LNG_SoftBounces', 'Soft Bounces');



/**
 * 1.0.5
 */
define('LNG_Bounce_Rule_blockedcontent', 'Blocked due to content');



/**
 * 1.0.7
 */
define('LNG_Bounce_Rule_remoteconfigerror', 'Problem with remote servers configuration');
define('LNG_Bounce_Rule_localconfigerror', 'Problem with local servers configuration');



/**
 * 1.1.2
 */
define('LNG_Daily_Time_Display', 'ga');
define('LNG_DOW_Word_Display', 'D');
define('LNG_DOW_Word_Full_Display', 'l');
define('LNG_DOM_Number_Display', 'd');
define('LNG_Date_Display', 'D, jS M');



/**
 * 1.1.3
 */
define('LNG_Date_Display_Display', 'D, d. M');


/**
 * 1.3.0
 */
define('LNG_UserHasNotSentAnyNewsletters_SelectedDateRange', 'The selected user has not sent any email campaigns in the selected date range.');
define('LNG_Stats_TotalUniqueClicks', 'Individual links that have been clicked');
define('LNG_Stats_UserStatistics', 'User Account Statistics');
define('LNG_Stats_Users_Step1_Heading', 'User Account Statistics');
define('LNG_Stats_Users_Cancel', 'Are you sure you want to cancel viewing user account statistics?');
define('LNG_Stats_Users_Step3_Heading', 'User Account Statistics');
define('LNG_OpenedEmailAsType', 'Opened Email As');
define('LNG_OpenedEmailAs_Unknown', 'Unknown (Not recorded)');
define('LNG_OpenedEmailAs_HTML', 'HTML Email');
define('LNG_OpenedEmailAs_Text', 'Text Email');



/**
 * 1.3.2
 */
define('LNG_Bounce_Rule_unknown', 'Desconocido');



/**
 * 1.4.0
 */
define('LNG_Export_Stats_Selected','Exportar');
define('LNG_Export_Not_Writable','Unable to export statistics: Could not write to %s');
define('LNG_Export_Newsletter_Statistics','Las estadísticas para las campañas seleccionadas han sido exportadas. <a href="%s">Clic aquí</a> para bajar los datos.');
define('LNG_Print_Stats_Selected','Imprimir');
define('LNG_Stats_Export_Header_Subject','Subject');
define('LNG_Stats_Export_Header_Date','Date');
define('LNG_Stats_Export_Header_Time','Time');
define('LNG_Stats_Export_Header_Duration','Duration (min)');
define('LNG_Stats_Export_Header_Recipients','Recipients');
define('LNG_Stats_Export_Header_Send_Rate','Send Rate (/min)');
define('LNG_Stats_Export_Header_Unique_Opened','Unique Opened');
define('LNG_Stats_Export_Header_Total_Opened','Total Opened');
define('LNG_Stats_Export_Header_Percent_Opened','% Opened');
define('LNG_Stats_Export_Header_Recipients_who_Clicked_Links','Recipients who Clicked Links');
define('LNG_Stats_Export_Header_Percent_Recipients_who_Clicked','% Recipients who Clicked');
define('LNG_Stats_Export_Header_Total_Links_Clicked','Total Links Clicked');
define('LNG_Stats_Export_Header_Hard_Bounced','Hard Bounced');
define('LNG_Stats_Export_Header_Soft_Bounced','Soft Bounced');
define('LNG_Stats_Export_Header_Total_Bounced','Total Bounced');
define('LNG_Stats_Export_Header_Percent_Bounced','% Bounced');
define('LNG_Stats_Export_Header_Unsubscribed','Unsubscribed');
define('LNG_Stats_Export_Header_Percent_Unsubscribed','% Unsubscribed');
define('LNG_Stats_Export_Header_Forwarded','Forwarded');
define('LNG_Stats_Export_Header_Recipients_who_Forwarded','Recipients who Forwarded');
define('LNG_Stats_Export_Header_Percent_Recipients_who_Forwarded','% Recipients who Forwarded');
define('LNG_Stats_OpenStatisticsSummary','Open Statistics Summary');
define('LNG_Stats_Print_IncludeDetailsOf','Include details of %d %s');
define('LNG_Stats_Print_open','people who have opened this email');
define('LNG_Stats_Print_click','people who have clicked on a link');
define('LNG_Stats_Print_bounce','people who have bounced');
define('LNG_Stats_Print_unsubscribe','people who have unsubscribed');
define('LNG_Stats_Print_forward','people who have forwarded this email');
define('LNG_Stats_Print_perdomain','domains');
define('LNG_PrintEmailCampaignStatistics', 'Print Email Campaign Statistics');
define('LNG_PrintAutoresponderStatistics', 'Imprimir estadísticas autorespuestas');
define('LNG_SelectStatisticsToPrint','Please choose which statistics you would like to print');
define('LNG_Stats_Clickthrough', 'Tasa enlaces apretados');
define('LNG_OpenRate', 'Tasa aperturas: ');
define('LNG_Autoresponder_Summary_Graph_bouncechart', 'Autoresponder Bounces');
define('LNG_List_Summary_Graph_bouncechart', 'Bounce Chart');
define('LNG_NoNewslettersHaveBeenSent', 'No statistics are available for email campaigns because you haven\'t sent one yet. Click the <em>Send an Email Campaign...</em> button below to send a campaign.');
define('LNG_NewsletterStatistics_Send_TestMode_Enabled', '<br/>This email campaign was sent with "Test Mode" enabled. This means that no actual emails were sent and this test was to see how fast the application could send emails independent of the mail server.');
define('LNG_NewsletterStatistics_Snapshot_Summary', 'Resumen email campaña \'%s\', enviada el %s.%s');
define('LNG_AutoresponderSentStatus_Mail_error', ' (The mail server was down or did not accept the email)');
define('LNG_AutoresponderSentStats_NotSent', 'No autoresponders have been sent.');
define('LNG_AutoresponderSentStats_NotSent_CalendarProblem', 'No autoresponders have been sent in the date range selected.');
define('LNG_EmailSent', 'Email Sent Successfully');



/**
 * 1.4.1
 */
define('LNG_Stats_TotalOpens_Description', 'Total number of opens recorded agains this email (including multiple open)');
define('LNG_Stats_TotalUniqueOpens_Description', 'Unique Open only record the number of open once for each email in this campaign');



/**
 * 5.0.0
 */
define('LNG_Stats_TotalSubscribers', 'Total Contacts');
define('LNG_NoSubscribersStats', 'No contacts are on contact list \'%s\'');
define('LNG_NewsletterHasNotBeenClicked', 'No links have been clicked by any contacts yet.');
define('LNG_NewsletterHasNotBeenClicked_CalendarProblem', 'No links have been clicked by any contacts during the selected date range.');
define('LNG_NewsletterHasNotBeenClicked_LinkProblem', 'The link chosen has not been clicked by any contacts.');
define('LNG_NewsletterHasNotBeenClicked_CalendarLinkProblem', 'The link chosen has not been clicked by any contacts during the selected date range.');
define('LNG_AutoresponderHasNotBeenOpened', 'The autoresponder has not been opened by any contacts yet.');
define('LNG_AutoresponderHasNotBeenOpened_CalendarProblem', 'The autoresponder has not been opened by any contacts during the selected date range.');
define('LNG_AutoresponderHasNotBeenClicked', 'No links have been clicked by any contacts yet.');
define('LNG_AutoresponderHasNotBeenClicked_CalendarProblem', 'No links have been clicked by any contacts during the selected date range.');
define('LNG_AutoresponderHasNotBeenClicked_LinkProblem', 'The link chosen has not been clicked by any contacts.');
define('LNG_AutoresponderHasNotBeenClicked_CalendarLinkProblem', 'The link chosen has not been clicked by any contacts during the selected date range.');
define('LNG_List_Summary_Graph_subscribersummary', 'Contact Summary');
define('LNG_ListStatistics_Snapshot', 'Contacts Snapshot');
define('LNG_ListHasNoUnsubscribes', 'No contacts have unsubscribed from this contact list.');
define('LNG_ListHasNoUnsubscribes_CalendarProblem', 'No contacts have unsubscribed from this contact list during the date range selected.');
define('LNG_ListHasNoForwards', 'No contacts have forwarded email campaigns or autoresponders sent to this list.');
define('LNG_ListHasNoForwards_CalendarProblem', 'No contacts have forwarded email campaigns or autoresponders sent to this list in the date range selected.');
define('LNG_ListStatsHasNotBeenBounced_BounceType', 'No %ss have been received for contacts on this contact list.');
define('LNG_ListStatsHasNotBeenBounced_CalendarProblem', 'No bounce reports have been received for contacts on this contact list in the selected date range.');
define('LNG_Stats_NoSubscribersOnList', 'There are no contacts on this contact list.');
define('LNG_Stats_NoSubscribersOnList_DateRange', 'There are no contacts on this contact list in the selected date range.');
define('LNG_Stats_Autoresponders_Step1_Intro', 'Usa las estdísticas de las autorespuestas para ver qué autorespuestas están siendo enviadas, cuántas personas las abren y sus tendencias cuandos las reciben.');
define('LNG_Unconfirms', 'Contactos no confirmados');
define('LNG_Confirms', 'Contactos confirmados');
define('LNG_ListStatsTotalUnconfirms', 'Total contactos no confirmados: ');
define('LNG_ListStatsTotalConfirms', 'Total contactos confirmados: ');
define('LNG_UnconfirmsCount', 'Contactos no confirmados');
define('LNG_ConfirmsCount', 'Contactos confirmados');
define('LNG_ListStatistics_Snapshot_PerDomain', 'Top 10 Domain Name Confirmed Contacts');
define('LNG_List_Summary_Graph', 'Contact Summary');
define('LNG_AutoresponderStatistics_SubscriberInformation_Intro', 'View which contacts were sent autoresponder \'%s\'');
define('LNG_AutoresponderStatistics_Snapshot_SubscriberStats', 'Contact Information');
define('LNG_AutoresponderSentStatus_Blankemail_t', ' The contact only wants to receive Text-Only autoresponders. Your autoresponder only has a HTML version and so this contact would have received a blank email.');
define('LNG_AutoresponderSentStatus_Blankemail_h', ' The contact only wants to receive HTML-Only autoresponders. Your autoresponder only has a Text version and so this contact would have received a blank email.');
define('LNG_Stats_TotalLists', 'Listas de contactos');
define('LNG_Stats_List_Step1_Heading', 'Contact List Statistics');
define('LNG_Stats_List_Step2_Heading', 'Contact List Statistics');
define('LNG_Stats_List_Step2_Intro', 'View statistics for contact list \'%s\'');
define('LNG_SentToLists', 'Listas de contactos');
define('LNG_SentToList', 'Lista de contactos');
define('LNG_Unknown_List', 'Unknown Contact List');
define('LNG_ListStatistics_Snapshot_LinkHeading', 'Link statistics for email campaigns and autoresponders sent to contact list \'%s\'');
define('LNG_ListLinkStatsHasNotBeenClicked_CalendarProblem', 'No links have been found in any email campaigns or autoresponders sent to this contact list in the date range selected.');
define('LNG_ListLinkStatsHasNotBeenClicked_NoLinksFound', 'No links have been found in any email campaigns or autoresponders sent to this contact list.');
define('LNG_ListStatistics_Snapshot_UnsubscribesHeading', 'Unsubscribe statistics for email campaigns and autoresponders sent to contact list \'%s\'');
define('LNG_ListStatistics_Snapshot_ForwardsHeading', 'Forward statistics for email campaigns and autoresponders sent to contact list \'%s\'');
define('LNG_ListStatistics_Snapshot_BounceHeading', 'Bounce statistics for email campaigns and autoresponders sent to contact list \'%s\'');
define('LNG_Stats_List_Step1_Intro', 'Statistics for your contact lists will show you how many people have subscribed, unsubscribed, bounced and how active the list is at what times.');
define('LNG_Stats_Users_Step1_Intro', 'Click the <em>View</em> link next to a user account below to see detailed statistics including number of emails sent for a particular time period.');
define('LNG_PrintListStatistics','Print Contact List Statistics');
define('LNG_Stats_Newsletters_Step1_Intro', 'Las estadísticas de email campañas te permiten ver porcentajes detallados de emails abiertos, desuscripciones y emails rebotados, ver cuantos contactos han hecho clic en un enlace (si habilitado), etc.');
define('LNG_AutoresponderSentStatus_Unsubscribed', ' (They have unsubscribed from your contact list)');
define('LNG_Bounce_Rule_', '(Unknown)');
define('LNG_AutoresponderSentStatus_Search_criteria', ' <a href="#" onClick="LaunchHelp(\'803\'); return false;">Why?</a>');
define('LNG_GD_Not_Enabled', 'Enable the GD module in PHP for charts to work.');
define('LNG_BounceSoft', 'Soft');
define('LNG_BounceHard', 'Hard');
define('LNG_BounceUnknown', 'Unknown');
define('LNG_Stats_UniqueClicks','Total Unique Clicks');
define('LNG_Bounce_Type_unknown', '(Unknown)');




/**
 * 5.5.0
 */
define('LNG_EditThisNewsletter', 'Edit this email campaign');
define('LNG_EditThisAutoresponder', 'Edit this autoresponder');



/**
 * 5.5.7
 */
define('LNG_AutoresponderSummaryChart', 'Autoresponder Summary Chart');
define('LNG_AutoresponderSentStatus_Icredit', ' (Insufficient credit)');



/**
 * 5.6.0
 */
define('LNG_EditListOwner', 'Edit&nbsp;User&nbsp;Account');
