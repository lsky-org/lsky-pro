<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceUserAgent File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\CallRecords\Model;
/**
* ServiceUserAgent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceUserAgent extends UserAgent
{

    /**
    * Gets the role
    * Identifies the role of the service used by this endpoint. Possible values are: unknown, customBot, skypeForBusinessMicrosoftTeamsGateway, skypeForBusinessAudioVideoMcu, skypeForBusinessApplicationSharingMcu, skypeForBusinessCallQueues, skypeForBusinessAutoAttendant, mediationServer, mediationServerCloudConnectorEdition, exchangeUnifiedMessagingService, mediaController, conferencingAnnouncementService, conferencingAttendant, audioTeleconferencerController, skypeForBusinessUnifiedCommunicationApplicationPlatform, responseGroupServiceAnnouncementService, gateway, skypeTranslator, skypeForBusinessAttendant, responseGroupService, voicemail, unknownFutureValue.
    *
    * @return ServiceRole The role
    */
    public function getRole()
    {
        if (array_key_exists("role", $this->_propDict)) {
            if (is_a($this->_propDict["role"], "\Microsoft\Graph\CallRecords\Model\ServiceRole")) {
                return $this->_propDict["role"];
            } else {
                $this->_propDict["role"] = new ServiceRole($this->_propDict["role"]);
                return $this->_propDict["role"];
            }
        }
        return null;
    }

    /**
    * Sets the role
    * Identifies the role of the service used by this endpoint. Possible values are: unknown, customBot, skypeForBusinessMicrosoftTeamsGateway, skypeForBusinessAudioVideoMcu, skypeForBusinessApplicationSharingMcu, skypeForBusinessCallQueues, skypeForBusinessAutoAttendant, mediationServer, mediationServerCloudConnectorEdition, exchangeUnifiedMessagingService, mediaController, conferencingAnnouncementService, conferencingAttendant, audioTeleconferencerController, skypeForBusinessUnifiedCommunicationApplicationPlatform, responseGroupServiceAnnouncementService, gateway, skypeTranslator, skypeForBusinessAttendant, responseGroupService, voicemail, unknownFutureValue.
    *
    * @param ServiceRole $val The value to assign to the role
    *
    * @return ServiceUserAgent The ServiceUserAgent
    */
    public function setRole($val)
    {
        $this->_propDict["role"] = $val;
         return $this;
    }
}
