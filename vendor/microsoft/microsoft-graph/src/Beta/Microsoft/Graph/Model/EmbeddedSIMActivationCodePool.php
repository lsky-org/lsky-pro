<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmbeddedSIMActivationCodePool File
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
* EmbeddedSIMActivationCodePool class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EmbeddedSIMActivationCodePool extends Entity
{
    /**
    * Gets the activationCodeCount
    * The total count of activation codes which belong to this pool.
    *
    * @return int The activationCodeCount
    */
    public function getActivationCodeCount()
    {
        if (array_key_exists("activationCodeCount", $this->_propDict)) {
            return $this->_propDict["activationCodeCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activationCodeCount
    * The total count of activation codes which belong to this pool.
    *
    * @param int $val The activationCodeCount
    *
    * @return EmbeddedSIMActivationCodePool
    */
    public function setActivationCodeCount($val)
    {
        $this->_propDict["activationCodeCount"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the activationCodes
    * The activation codes which belong to this pool. This navigation property is used to post activation codes to Intune but cannot be used to read activation codes from Intune.
     *
     * @return array The activationCodes
     */
    public function getActivationCodes()
    {
        if (array_key_exists("activationCodes", $this->_propDict)) {
           return $this->_propDict["activationCodes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the activationCodes
    * The activation codes which belong to this pool. This navigation property is used to post activation codes to Intune but cannot be used to read activation codes from Intune.
    *
    * @param EmbeddedSIMActivationCode $val The activationCodes
    *
    * @return EmbeddedSIMActivationCodePool
    */
    public function setActivationCodes($val)
    {
		$this->_propDict["activationCodes"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The time the embedded SIM activation code pool was created. Generated service side.
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
    * The time the embedded SIM activation code pool was created. Generated service side.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return EmbeddedSIMActivationCodePool
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The admin defined name of the embedded SIM activation code pool.
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
    * The admin defined name of the embedded SIM activation code pool.
    *
    * @param string $val The displayName
    *
    * @return EmbeddedSIMActivationCodePool
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the modifiedDateTime
    * The time the embedded SIM activation code pool was last modified. Updated service side.
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
    * The time the embedded SIM activation code pool was last modified. Updated service side.
    *
    * @param \DateTime $val The modifiedDateTime
    *
    * @return EmbeddedSIMActivationCodePool
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
    * Navigational property to a list of targets to which this pool is assigned.
     *
     * @return array The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignments
    * Navigational property to a list of targets to which this pool is assigned.
    *
    * @param EmbeddedSIMActivationCodePoolAssignment $val The assignments
    *
    * @return EmbeddedSIMActivationCodePool
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceStates
    * Navigational property to a list of device states for this pool.
     *
     * @return array The deviceStates
     */
    public function getDeviceStates()
    {
        if (array_key_exists("deviceStates", $this->_propDict)) {
           return $this->_propDict["deviceStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceStates
    * Navigational property to a list of device states for this pool.
    *
    * @param EmbeddedSIMDeviceState $val The deviceStates
    *
    * @return EmbeddedSIMActivationCodePool
    */
    public function setDeviceStates($val)
    {
		$this->_propDict["deviceStates"] = $val;
        return $this;
    }
    
}
