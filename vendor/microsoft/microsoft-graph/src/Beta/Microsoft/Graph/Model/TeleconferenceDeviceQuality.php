<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeleconferenceDeviceQuality File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* TeleconferenceDeviceQuality class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeleconferenceDeviceQuality extends Entity
{
    /**
    * Gets the callChainId
    * A unique identifier for all  the participant calls in a conference or a unique identifier for two participant calls in P2P call. This needs to be copied over from Microsoft.Graph.Call.CallChainId.
    *
    * @return string The callChainId
    */
    public function getCallChainId()
    {
        if (array_key_exists("callChainId", $this->_propDict)) {
            return $this->_propDict["callChainId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callChainId
    * A unique identifier for all  the participant calls in a conference or a unique identifier for two participant calls in P2P call. This needs to be copied over from Microsoft.Graph.Call.CallChainId.
    *
    * @param string $val The value of the callChainId
    *
    * @return TeleconferenceDeviceQuality
    */
    public function setCallChainId($val)
    {
        $this->_propDict["callChainId"] = $val;
        return $this;
    }
    /**
    * Gets the cloudServiceDeploymentEnvironment
    * A geo-region where the service is deployed, such as ProdNoam.
    *
    * @return string The cloudServiceDeploymentEnvironment
    */
    public function getCloudServiceDeploymentEnvironment()
    {
        if (array_key_exists("cloudServiceDeploymentEnvironment", $this->_propDict)) {
            return $this->_propDict["cloudServiceDeploymentEnvironment"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudServiceDeploymentEnvironment
    * A geo-region where the service is deployed, such as ProdNoam.
    *
    * @param string $val The value of the cloudServiceDeploymentEnvironment
    *
    * @return TeleconferenceDeviceQuality
    */
    public function setCloudServiceDeploymentEnvironment($val)
    {
        $this->_propDict["cloudServiceDeploymentEnvironment"] = $val;
        return $this;
    }
    /**
    * Gets the cloudServiceDeploymentId
    * A unique deployment identifier assigned by Azure.
    *
    * @return string The cloudServiceDeploymentId
    */
    public function getCloudServiceDeploymentId()
    {
        if (array_key_exists("cloudServiceDeploymentId", $this->_propDict)) {
            return $this->_propDict["cloudServiceDeploymentId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudServiceDeploymentId
    * A unique deployment identifier assigned by Azure.
    *
    * @param string $val The value of the cloudServiceDeploymentId
    *
    * @return TeleconferenceDeviceQuality
    */
    public function setCloudServiceDeploymentId($val)
    {
        $this->_propDict["cloudServiceDeploymentId"] = $val;
        return $this;
    }
    /**
    * Gets the cloudServiceInstanceName
    * The Azure deployed cloud service instance name, such as FrontEnd_IN_3.
    *
    * @return string The cloudServiceInstanceName
    */
    public function getCloudServiceInstanceName()
    {
        if (array_key_exists("cloudServiceInstanceName", $this->_propDict)) {
            return $this->_propDict["cloudServiceInstanceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudServiceInstanceName
    * The Azure deployed cloud service instance name, such as FrontEnd_IN_3.
    *
    * @param string $val The value of the cloudServiceInstanceName
    *
    * @return TeleconferenceDeviceQuality
    */
    public function setCloudServiceInstanceName($val)
    {
        $this->_propDict["cloudServiceInstanceName"] = $val;
        return $this;
    }
    /**
    * Gets the cloudServiceName
    * The Azure deployed cloud service name, such as contoso.cloudapp.net.
    *
    * @return string The cloudServiceName
    */
    public function getCloudServiceName()
    {
        if (array_key_exists("cloudServiceName", $this->_propDict)) {
            return $this->_propDict["cloudServiceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudServiceName
    * The Azure deployed cloud service name, such as contoso.cloudapp.net.
    *
    * @param string $val The value of the cloudServiceName
    *
    * @return TeleconferenceDeviceQuality
    */
    public function setCloudServiceName($val)
    {
        $this->_propDict["cloudServiceName"] = $val;
        return $this;
    }
    /**
    * Gets the deviceDescription
    * Any additional description, such as VTC Bldg 30/21.
    *
    * @return string The deviceDescription
    */
    public function getDeviceDescription()
    {
        if (array_key_exists("deviceDescription", $this->_propDict)) {
            return $this->_propDict["deviceDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceDescription
    * Any additional description, such as VTC Bldg 30/21.
    *
    * @param string $val The value of the deviceDescription
    *
    * @return TeleconferenceDeviceQuality
    */
    public function setDeviceDescription($val)
    {
        $this->_propDict["deviceDescription"] = $val;
        return $this;
    }
    /**
    * Gets the deviceName
    * The user media agent name, such as Cisco SX80.
    *
    * @return string The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceName
    * The user media agent name, such as Cisco SX80.
    *
    * @param string $val The value of the deviceName
    *
    * @return TeleconferenceDeviceQuality
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    /**
    * Gets the mediaLegId
    * A unique identifier for a specific media leg of a participant in a conference.  One participant can have multiple media leg identifiers if retargeting happens. CVI partner assigns this value.
    *
    * @return string The mediaLegId
    */
    public function getMediaLegId()
    {
        if (array_key_exists("mediaLegId", $this->_propDict)) {
            return $this->_propDict["mediaLegId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaLegId
    * A unique identifier for a specific media leg of a participant in a conference.  One participant can have multiple media leg identifiers if retargeting happens. CVI partner assigns this value.
    *
    * @param string $val The value of the mediaLegId
    *
    * @return TeleconferenceDeviceQuality
    */
    public function setMediaLegId($val)
    {
        $this->_propDict["mediaLegId"] = $val;
        return $this;
    }

    /**
    * Gets the mediaQualityList
    * The list of media qualities in a media session (call), such as audio quality, video quality, and/or screen sharing quality.
    *
    * @return TeleconferenceDeviceMediaQuality The mediaQualityList
    */
    public function getMediaQualityList()
    {
        if (array_key_exists("mediaQualityList", $this->_propDict)) {
            if (is_a($this->_propDict["mediaQualityList"], "\Beta\Microsoft\Graph\Model\TeleconferenceDeviceMediaQuality")) {
                return $this->_propDict["mediaQualityList"];
            } else {
                $this->_propDict["mediaQualityList"] = new TeleconferenceDeviceMediaQuality($this->_propDict["mediaQualityList"]);
                return $this->_propDict["mediaQualityList"];
            }
        }
        return null;
    }

    /**
    * Sets the mediaQualityList
    * The list of media qualities in a media session (call), such as audio quality, video quality, and/or screen sharing quality.
    *
    * @param TeleconferenceDeviceMediaQuality $val The value to assign to the mediaQualityList
    *
    * @return TeleconferenceDeviceQuality The TeleconferenceDeviceQuality
    */
    public function setMediaQualityList($val)
    {
        $this->_propDict["mediaQualityList"] = $val;
         return $this;
    }
    /**
    * Gets the participantId
    * A unique identifier for a specific participant in a conference. The CVI partner needs to copy over Call.MyParticipantId to this property.
    *
    * @return string The participantId
    */
    public function getParticipantId()
    {
        if (array_key_exists("participantId", $this->_propDict)) {
            return $this->_propDict["participantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the participantId
    * A unique identifier for a specific participant in a conference. The CVI partner needs to copy over Call.MyParticipantId to this property.
    *
    * @param string $val The value of the participantId
    *
    * @return TeleconferenceDeviceQuality
    */
    public function setParticipantId($val)
    {
        $this->_propDict["participantId"] = $val;
        return $this;
    }
}
