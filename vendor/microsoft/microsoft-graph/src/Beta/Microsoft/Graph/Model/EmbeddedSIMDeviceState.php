<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmbeddedSIMDeviceState File
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
* EmbeddedSIMDeviceState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EmbeddedSIMDeviceState extends Entity
{
    /**
    * Gets the createdDateTime
    * The time the embedded SIM device status was created. Generated service side.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * The time the embedded SIM device status was created. Generated service side.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return EmbeddedSIMDeviceState
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceName
    * Device name to which the subscription was provisioned e.g. DESKTOP-JOE
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
    * Device name to which the subscription was provisioned e.g. DESKTOP-JOE
    *
    * @param string $val The deviceName
    *
    * @return EmbeddedSIMDeviceState
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSyncDateTime
    * The time the embedded SIM device last checked in. Updated service side.
    *
    * @return \DateTime The lastSyncDateTime
    */
    public function getLastSyncDateTime()
    {
        if (array_key_exists("lastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncDateTime"], "\DateTime")) {
                return $this->_propDict["lastSyncDateTime"];
            } else {
                $this->_propDict["lastSyncDateTime"] = new \DateTime($this->_propDict["lastSyncDateTime"]);
                return $this->_propDict["lastSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSyncDateTime
    * The time the embedded SIM device last checked in. Updated service side.
    *
    * @param \DateTime $val The lastSyncDateTime
    *
    * @return EmbeddedSIMDeviceState
    */
    public function setLastSyncDateTime($val)
    {
        $this->_propDict["lastSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the modifiedDateTime
    * The time the embedded SIM device status was last modified. Updated service side.
    *
    * @return \DateTime The modifiedDateTime
    */
    public function getModifiedDateTime()
    {
        if (array_key_exists("modifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["modifiedDateTime"], "\DateTime")) {
                return $this->_propDict["modifiedDateTime"];
            } else {
                $this->_propDict["modifiedDateTime"] = new \DateTime($this->_propDict["modifiedDateTime"]);
                return $this->_propDict["modifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the modifiedDateTime
    * The time the embedded SIM device status was last modified. Updated service side.
    *
    * @param \DateTime $val The modifiedDateTime
    *
    * @return EmbeddedSIMDeviceState
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    * The state of the profile operation applied to the device. Possible values are: notEvaluated, failed, installing, installed, deleting, error, deleted, removedByUser.
    *
    * @return EmbeddedSIMDeviceStateValue The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\EmbeddedSIMDeviceStateValue")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new EmbeddedSIMDeviceStateValue($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    * The state of the profile operation applied to the device. Possible values are: notEvaluated, failed, installing, installed, deleting, error, deleted, removedByUser.
    *
    * @param EmbeddedSIMDeviceStateValue $val The state
    *
    * @return EmbeddedSIMDeviceState
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the stateDetails
    * String description of the provisioning state.
    *
    * @return string The stateDetails
    */
    public function getStateDetails()
    {
        if (array_key_exists("stateDetails", $this->_propDict)) {
            return $this->_propDict["stateDetails"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the stateDetails
    * String description of the provisioning state.
    *
    * @param string $val The stateDetails
    *
    * @return EmbeddedSIMDeviceState
    */
    public function setStateDetails($val)
    {
        $this->_propDict["stateDetails"] = $val;
        return $this;
    }
    
    /**
    * Gets the universalIntegratedCircuitCardIdentifier
    * The Universal Integrated Circuit Card Identifier (UICCID) identifying the hardware onto which a profile is to be deployed.
    *
    * @return string The universalIntegratedCircuitCardIdentifier
    */
    public function getUniversalIntegratedCircuitCardIdentifier()
    {
        if (array_key_exists("universalIntegratedCircuitCardIdentifier", $this->_propDict)) {
            return $this->_propDict["universalIntegratedCircuitCardIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the universalIntegratedCircuitCardIdentifier
    * The Universal Integrated Circuit Card Identifier (UICCID) identifying the hardware onto which a profile is to be deployed.
    *
    * @param string $val The universalIntegratedCircuitCardIdentifier
    *
    * @return EmbeddedSIMDeviceState
    */
    public function setUniversalIntegratedCircuitCardIdentifier($val)
    {
        $this->_propDict["universalIntegratedCircuitCardIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the userName
    * Username which the subscription was provisioned to e.g. joe@contoso.com
    *
    * @return string The userName
    */
    public function getUserName()
    {
        if (array_key_exists("userName", $this->_propDict)) {
            return $this->_propDict["userName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userName
    * Username which the subscription was provisioned to e.g. joe@contoso.com
    *
    * @param string $val The userName
    *
    * @return EmbeddedSIMDeviceState
    */
    public function setUserName($val)
    {
        $this->_propDict["userName"] = $val;
        return $this;
    }
    
}
