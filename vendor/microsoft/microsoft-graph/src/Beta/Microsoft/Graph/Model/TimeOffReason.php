<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TimeOffReason File
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
* TimeOffReason class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TimeOffReason extends ChangeTrackedEntity
{
    /**
    * Gets the displayName
    * The name of the timeOffReason. Required.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * The name of the timeOffReason. Required.
    *
    * @param string $val The displayName
    *
    * @return TimeOffReason
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the iconType
    * Supported icon types: none; car; calendar; running; plane; firstAid; doctor; notWorking; clock; juryDuty; globe; cup; phone; weather; umbrella; piggyBank; dog; cake; trafficCone; pin; sunny. Required.
    *
    * @return TimeOffReasonIconType The iconType
    */
    public function getIconType()
    {
        if (array_key_exists("iconType", $this->_propDict)) {
            if (is_a($this->_propDict["iconType"], "\Beta\Microsoft\Graph\Model\TimeOffReasonIconType")) {
                return $this->_propDict["iconType"];
            } else {
                $this->_propDict["iconType"] = new TimeOffReasonIconType($this->_propDict["iconType"]);
                return $this->_propDict["iconType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the iconType
    * Supported icon types: none; car; calendar; running; plane; firstAid; doctor; notWorking; clock; juryDuty; globe; cup; phone; weather; umbrella; piggyBank; dog; cake; trafficCone; pin; sunny. Required.
    *
    * @param TimeOffReasonIconType $val The iconType
    *
    * @return TimeOffReason
    */
    public function setIconType($val)
    {
        $this->_propDict["iconType"] = $val;
        return $this;
    }
    
    /**
    * Gets the isActive
    * Indicates whether the timeOffReason can be used when creating new entities or updating existing ones. Required.
    *
    * @return bool The isActive
    */
    public function getIsActive()
    {
        if (array_key_exists("isActive", $this->_propDict)) {
            return $this->_propDict["isActive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isActive
    * Indicates whether the timeOffReason can be used when creating new entities or updating existing ones. Required.
    *
    * @param bool $val The isActive
    *
    * @return TimeOffReason
    */
    public function setIsActive($val)
    {
        $this->_propDict["isActive"] = boolval($val);
        return $this;
    }
    
}
