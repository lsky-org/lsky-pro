<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsNotAutopilotReadyDevice File
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
* UserExperienceAnalyticsNotAutopilotReadyDevice class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsNotAutopilotReadyDevice extends Entity
{
    /**
    * Gets the autoPilotProfileAssigned
    * The intune device's autopilotProfileAssigned.
    *
    * @return bool The autoPilotProfileAssigned
    */
    public function getAutoPilotProfileAssigned()
    {
        if (array_key_exists("autoPilotProfileAssigned", $this->_propDict)) {
            return $this->_propDict["autoPilotProfileAssigned"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the autoPilotProfileAssigned
    * The intune device's autopilotProfileAssigned.
    *
    * @param bool $val The autoPilotProfileAssigned
    *
    * @return UserExperienceAnalyticsNotAutopilotReadyDevice
    */
    public function setAutoPilotProfileAssigned($val)
    {
        $this->_propDict["autoPilotProfileAssigned"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the autoPilotRegistered
    * The intune device's autopilotRegistered.
    *
    * @return bool The autoPilotRegistered
    */
    public function getAutoPilotRegistered()
    {
        if (array_key_exists("autoPilotRegistered", $this->_propDict)) {
            return $this->_propDict["autoPilotRegistered"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the autoPilotRegistered
    * The intune device's autopilotRegistered.
    *
    * @param bool $val The autoPilotRegistered
    *
    * @return UserExperienceAnalyticsNotAutopilotReadyDevice
    */
    public function setAutoPilotRegistered($val)
    {
        $this->_propDict["autoPilotRegistered"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the azureAdJoinType
    * The intune device's azure Ad joinType.
    *
    * @return string The azureAdJoinType
    */
    public function getAzureAdJoinType()
    {
        if (array_key_exists("azureAdJoinType", $this->_propDict)) {
            return $this->_propDict["azureAdJoinType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureAdJoinType
    * The intune device's azure Ad joinType.
    *
    * @param string $val The azureAdJoinType
    *
    * @return UserExperienceAnalyticsNotAutopilotReadyDevice
    */
    public function setAzureAdJoinType($val)
    {
        $this->_propDict["azureAdJoinType"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureAdRegistered
    * The intune device's azureAdRegistered. Possible values are: no, yes, unknown.
    *
    * @return AzureAdRegisteredState The azureAdRegistered
    */
    public function getAzureAdRegistered()
    {
        if (array_key_exists("azureAdRegistered", $this->_propDict)) {
            if (is_a($this->_propDict["azureAdRegistered"], "\Beta\Microsoft\Graph\Model\AzureAdRegisteredState")) {
                return $this->_propDict["azureAdRegistered"];
            } else {
                $this->_propDict["azureAdRegistered"] = new AzureAdRegisteredState($this->_propDict["azureAdRegistered"]);
                return $this->_propDict["azureAdRegistered"];
            }
        }
        return null;
    }
    
    /**
    * Sets the azureAdRegistered
    * The intune device's azureAdRegistered. Possible values are: no, yes, unknown.
    *
    * @param AzureAdRegisteredState $val The azureAdRegistered
    *
    * @return UserExperienceAnalyticsNotAutopilotReadyDevice
    */
    public function setAzureAdRegistered($val)
    {
        $this->_propDict["azureAdRegistered"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceName
    * The intune device's name.
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
    * The intune device's name.
    *
    * @param string $val The deviceName
    *
    * @return UserExperienceAnalyticsNotAutopilotReadyDevice
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedBy
    * The intune device's managed by.
    *
    * @return string The managedBy
    */
    public function getManagedBy()
    {
        if (array_key_exists("managedBy", $this->_propDict)) {
            return $this->_propDict["managedBy"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedBy
    * The intune device's managed by.
    *
    * @param string $val The managedBy
    *
    * @return UserExperienceAnalyticsNotAutopilotReadyDevice
    */
    public function setManagedBy($val)
    {
        $this->_propDict["managedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the manufacturer
    * The intune device's manufacturer.
    *
    * @return string The manufacturer
    */
    public function getManufacturer()
    {
        if (array_key_exists("manufacturer", $this->_propDict)) {
            return $this->_propDict["manufacturer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the manufacturer
    * The intune device's manufacturer.
    *
    * @param string $val The manufacturer
    *
    * @return UserExperienceAnalyticsNotAutopilotReadyDevice
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }
    
    /**
    * Gets the model
    * The intune device's model.
    *
    * @return string The model
    */
    public function getModel()
    {
        if (array_key_exists("model", $this->_propDict)) {
            return $this->_propDict["model"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the model
    * The intune device's model.
    *
    * @param string $val The model
    *
    * @return UserExperienceAnalyticsNotAutopilotReadyDevice
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }
    
    /**
    * Gets the serialNumber
    * The intune device's serial number.
    *
    * @return string The serialNumber
    */
    public function getSerialNumber()
    {
        if (array_key_exists("serialNumber", $this->_propDict)) {
            return $this->_propDict["serialNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the serialNumber
    * The intune device's serial number.
    *
    * @param string $val The serialNumber
    *
    * @return UserExperienceAnalyticsNotAutopilotReadyDevice
    */
    public function setSerialNumber($val)
    {
        $this->_propDict["serialNumber"] = $val;
        return $this;
    }
    
}
