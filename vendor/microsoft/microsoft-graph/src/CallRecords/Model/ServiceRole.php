<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceRole File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\CallRecords\Model;

use Microsoft\Graph\Core\Enum;

/**
* ServiceRole class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceRole extends Enum
{
    /**
    * The Enum ServiceRole
    */
    const UNKNOWN = "unknown";
    const CUSTOM_BOT = "customBot";
    const SKYPE_FOR_BUSINESS_MICROSOFT_TEAMS_GATEWAY = "skypeForBusinessMicrosoftTeamsGateway";
    const SKYPE_FOR_BUSINESS_AUDIO_VIDEO_MCU = "skypeForBusinessAudioVideoMcu";
    const SKYPE_FOR_BUSINESS_APPLICATION_SHARING_MCU = "skypeForBusinessApplicationSharingMcu";
    const SKYPE_FOR_BUSINESS_CALL_QUEUES = "skypeForBusinessCallQueues";
    const SKYPE_FOR_BUSINESS_AUTO_ATTENDANT = "skypeForBusinessAutoAttendant";
    const MEDIATION_SERVER = "mediationServer";
    const MEDIATION_SERVER_CLOUD_CONNECTOR_EDITION = "mediationServerCloudConnectorEdition";
    const EXCHANGE_UNIFIED_MESSAGING_SERVICE = "exchangeUnifiedMessagingService";
    const MEDIA_CONTROLLER = "mediaController";
    const CONFERENCING_ANNOUNCEMENT_SERVICE = "conferencingAnnouncementService";
    const CONFERENCING_ATTENDANT = "conferencingAttendant";
    const AUDIO_TELECONFERENCER_CONTROLLER = "audioTeleconferencerController";
    const SKYPE_FOR_BUSINESS_UNIFIED_COMMUNICATION_APPLICATION_PLATFORM = "skypeForBusinessUnifiedCommunicationApplicationPlatform";
    const RESPONSE_GROUP_SERVICE_ANNOUNCEMENT_SERVICE = "responseGroupServiceAnnouncementService";
    const GATEWAY = "gateway";
    const SKYPE_TRANSLATOR = "skypeTranslator";
    const SKYPE_FOR_BUSINESS_ATTENDANT = "skypeForBusinessAttendant";
    const RESPONSE_GROUP_SERVICE = "responseGroupService";
    const VOICEMAIL = "voicemail";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}